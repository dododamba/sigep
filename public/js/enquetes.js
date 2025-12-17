/* ========================================
   SIGMA - Module Enquêtes - JavaScript
   ======================================== */

// Configuration de l'API
const API_CONFIG = {
    baseURL: 'https://api.sigma.td/v1',
    endpoints: {
        enquetes: '/api/enquetes',
        stats: '/api/enquetes/stats'
    },
    timeout: 10000
};

// État global de l'application
const state = {
    page: 1,
    pageSize: 10,
    search: '',
    categorie: '',
    type: '',
    statut: '',
    priorite: '',
    startDate: '',
    endDate: '',
    sortBy: 'dateCreation',
    sortOrder: 'desc',
    loading: false,
    data: [],
    stats: null,
    totalItems: 0,
    totalPages: 0
};

// Gestion des timeouts pour les recherches
let searchTimeout = null;

// Mock data pour démonstration (en l'absence d'API réelle)
const MOCK_DATA = {
    stats: {
        total: 284,
        enCours: 127,
        cloturees: 98,
        ouvertes: 42,
        urgentes: 17,
        byType: {
            preliminaire: 78,
            approfondie: 112,
            surveillance: 45,
            infiltration: 28,
            judiciaire: 21
        },
        byCategorie: {
            terrorisme: 45,
            criminalite: 89,
            corruption: 67,
            trafic: 52,
            cybercrime: 31
        }
    },
    enquetes: generateMockEnquetes(80)
};

/* ========================================
   Fonctions utilitaires
   ======================================== */

// Formater une date
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    });
}

// Formater une date avec l'heure
function formatDateTime(dateString) {
    const date = new Date(dateString);
    return date.toLocaleString('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
}

// Debounce pour optimiser les recherches
function debounce(func, wait) {
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(searchTimeout);
            func(...args);
        };
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(later, wait);
    };
}

// Générer une référence d'enquête
function generateReference() {
    const year = new Date().getFullYear();
    const random = Math.floor(Math.random() * 99999).toString().padStart(5, '0');
    return `ENQ-${year}-${random}`;
}

// Générer des enquêtes de test
function generateMockEnquetes(count) {
    const categories = ['terrorisme', 'criminalite', 'corruption', 'trafic', 'cybercrime', 'subversion'];
    const types = ['preliminaire', 'approfondie', 'surveillance', 'infiltration', 'judiciaire'];
    const statuts = ['ouverte', 'en_cours', 'suspendue', 'cloturee', 'archivee'];
    const priorites = ['critique', 'haute', 'normale', 'basse'];
    
    const prenoms = ['Mahamat', 'Fatima', 'Idriss', 'Amina', 'Hassan', 'Mariam', 'Abdel', 'Khadija', 'Moussa', 'Aïcha'];
    const noms = ['Déby', 'Ahmat', 'Brahim', 'Youssouf', 'Oumar', 'Saleh', 'Haroun', 'Nour', 'Mahamat', 'Deby'];
    
    const sujets = [
        'Réseau de trafic d\'armes transfrontalier',
        'Cellule terroriste présumée à N\'Djamena',
        'Détournement de fonds publics - Ministère',
        'Trafic de stupéfiants vers le Cameroun',
        'Cybercriminalité - Fraude bancaire en ligne',
        'Infiltration de groupe extrémiste religieux',
        'Corruption dans les marchés publics',
        'Réseau de contrebande de carburant',
        'Organisation criminelle transnationale',
        'Blanchiment d\'argent - Entreprises fictives',
        'Trafic d\'êtres humains vers la Libye',
        'Financement du terrorisme via ONG',
        'Évasion fiscale massive - Grandes entreprises',
        'Réseau de falsification de documents',
        'Trafic d\'ivoire et espèces protégées',
        'Menaces contre la sécurité de l\'État'
    ];
    
    const regions = ['N\'Djamena', 'Moundou', 'Sarh', 'Abéché', 'Kanem', 'Ouaddaï', 'Lac Tchad', 'Borkou', 'Ennedi'];
    
    const enquetes = [];
    for (let i = 1; i <= count; i++) {
        const categorie = categories[Math.floor(Math.random() * categories.length)];
        const type = types[Math.floor(Math.random() * types.length)];
        const statut = statuts[Math.floor(Math.random() * statuts.length)];
        const priorite = priorites[Math.floor(Math.random() * priorites.length)];
        const prenom = prenoms[Math.floor(Math.random() * prenoms.length)];
        const nom = noms[Math.floor(Math.random() * noms.length)];
        const sujet = sujets[Math.floor(Math.random() * sujets.length)];
        const region = regions[Math.floor(Math.random() * regions.length)];
        
        const daysAgo = Math.floor(Math.random() * 730); // 2 ans
        const dateCreation = new Date();
        dateCreation.setDate(dateCreation.getDate() - daysAgo);
        
        let dateDebut = null;
        let dateFin = null;
        
        if (statut === 'en_cours' || statut === 'suspendue' || statut === 'cloturee') {
            dateDebut = new Date(dateCreation);
            dateDebut.setDate(dateDebut.getDate() + Math.floor(Math.random() * 30));
        }
        
        if (statut === 'cloturee') {
            dateFin = new Date(dateDebut);
            dateFin.setDate(dateFin.getDate() + Math.floor(Math.random() * 180) + 30);
        }
        
        const avancement = statut === 'cloturee' ? 100 :
                          statut === 'en_cours' ? Math.floor(Math.random() * 70) + 20 :
                          statut === 'ouverte' ? Math.floor(Math.random() * 20) : 0;
        
        enquetes.push({
            id: i,
            reference: generateReference(),
            sujet: `${sujet}`,
            description: `Investigation en cours concernant ${sujet.toLowerCase()} dans la région de ${region}. Plusieurs suspects identifiés et sous surveillance.`,
            categorie: categorie,
            type: type,
            statut: statut,
            priorite: priorite,
            enqueteur: `${prenom} ${nom}`,
            equipe: Math.floor(Math.random() * 8) + 2,
            region: region,
            dateCreation: dateCreation.toISOString(),
            dateDebut: dateDebut ? dateDebut.toISOString() : null,
            dateFin: dateFin ? dateFin.toISOString() : null,
            avancement: avancement,
            suspects: Math.floor(Math.random() * 15) + 1,
            temoins: Math.floor(Math.random() * 25) + 3,
            preuves: Math.floor(Math.random() * 50) + 5,
            rapports: Math.floor(Math.random() * 12) + 1,
            niveauConfidentialite: ['public', 'confidentiel', 'secret', 'tres_secret'][Math.floor(Math.random() * 4)],
            budget: Math.floor(Math.random() * 50000000) + 5000000, // En FCFA
            resultat: statut === 'cloturee' ? ['succes', 'echec', 'partiel'][Math.floor(Math.random() * 3)] : null
        });
    }
    return enquetes;
}

/* ========================================
   Fonctions API
   ======================================== */

// Récupérer les statistiques
async function fetchStats() {
    try {
        // Simulation d'appel API
        // const response = await fetch(`${API_CONFIG.baseURL}${API_CONFIG.endpoints.stats}`, {
        //     method: 'GET',
        //     headers: {
        //         'Content-Type': 'application/json',
        //         'Authorization': 'Bearer YOUR_TOKEN'
        //     }
        // });
        
        // if (!response.ok) {
        //     throw new Error(`HTTP error! status: ${response.status}`);
        // }
        
        // const data = await response.json();
        
        // Utilisation des données mockées
        await new Promise(resolve => setTimeout(resolve, 800));
        const data = MOCK_DATA.stats;
        
        state.stats = data;
        renderStats(data);
        
    } catch (error) {
        console.error('Erreur lors de la récupération des statistiques:', error);
        showStatsError();
    }
}

// Récupérer les enquêtes avec filtres
async function fetchEnquetes(params = {}) {
    try {
        state.loading = true;
        showLoadingState();
        
        // Construction des paramètres de requête
        const queryParams = new URLSearchParams({
            page: params.page || state.page,
            pageSize: params.pageSize || state.pageSize,
            ...(state.search && { search: state.search }),
            ...(state.categorie && { categorie: state.categorie }),
            ...(state.type && { type: state.type }),
            ...(state.statut && { statut: state.statut }),
            ...(state.priorite && { priorite: state.priorite }),
            ...(state.startDate && { startDate: state.startDate }),
            ...(state.endDate && { endDate: state.endDate }),
            sortBy: state.sortBy,
            sortOrder: state.sortOrder
        });
        
        // Simulation d'appel API
        // const response = await fetch(
        //     `${API_CONFIG.baseURL}${API_CONFIG.endpoints.enquetes}?${queryParams}`,
        //     {
        //         method: 'GET',
        //         headers: {
        //             'Content-Type': 'application/json',
        //             'Authorization': 'Bearer YOUR_TOKEN'
        //         }
        //     }
        // );
        
        // if (!response.ok) {
        //     throw new Error(`HTTP error! status: ${response.status}`);
        // }
        
        // const data = await response.json();
        
        // Filtrage des données mockées
        await new Promise(resolve => setTimeout(resolve, 600));
        
        let filteredData = [...MOCK_DATA.enquetes];
        
        // Appliquer les filtres
        if (state.search) {
            const searchLower = state.search.toLowerCase();
            filteredData = filteredData.filter(item =>
                item.reference.toLowerCase().includes(searchLower) ||
                item.sujet.toLowerCase().includes(searchLower) ||
                item.enqueteur.toLowerCase().includes(searchLower) ||
                item.description.toLowerCase().includes(searchLower) ||
                item.region.toLowerCase().includes(searchLower)
            );
        }
        
        if (state.categorie) {
            filteredData = filteredData.filter(item => item.categorie === state.categorie);
        }
        
        if (state.type) {
            filteredData = filteredData.filter(item => item.type === state.type);
        }
        
        if (state.statut) {
            filteredData = filteredData.filter(item => item.statut === state.statut);
        }
        
        if (state.priorite) {
            filteredData = filteredData.filter(item => item.priorite === state.priorite);
        }
        
        if (state.startDate) {
            const startDate = new Date(state.startDate);
            filteredData = filteredData.filter(item => new Date(item.dateCreation) >= startDate);
        }
        
        if (state.endDate) {
            const endDate = new Date(state.endDate);
            endDate.setHours(23, 59, 59);
            filteredData = filteredData.filter(item => new Date(item.dateCreation) <= endDate);
        }
        
        // Tri
        filteredData.sort((a, b) => {
            let compareA = a[state.sortBy];
            let compareB = b[state.sortBy];
            
            if (state.sortBy === 'dateCreation' || state.sortBy === 'dateDebut' || state.sortBy === 'dateFin') {
                compareA = new Date(compareA || 0);
                compareB = new Date(compareB || 0);
            }
            
            if (compareA < compareB) return state.sortOrder === 'asc' ? -1 : 1;
            if (compareA > compareB) return state.sortOrder === 'asc' ? 1 : -1;
            return 0;
        });
        
        // Pagination
        state.totalItems = filteredData.length;
        state.totalPages = Math.ceil(state.totalItems / state.pageSize);
        
        const startIndex = (state.page - 1) * state.pageSize;
        const endIndex = startIndex + state.pageSize;
        const paginatedData = filteredData.slice(startIndex, endIndex);
        
        state.data = paginatedData;
        state.loading = false;
        
        if (paginatedData.length === 0) {
            showEmptyState();
        } else {
            renderTable(paginatedData);
            renderPagination();
        }
        
    } catch (error) {
        console.error('Erreur lors de la récupération des enquêtes:', error);
        state.loading = false;
        showErrorState(error.message);
    }
}

// Récupérer une enquête par ID
async function fetchEnqueteById(id) {
    try {
        // Simulation d'appel API
        await new Promise(resolve => setTimeout(resolve, 400));
        const enquete = MOCK_DATA.enquetes.find(e => e.id === parseInt(id));
        
        if (!enquete) {
            throw new Error('Enquête non trouvée');
        }
        
        return enquete;
        
    } catch (error) {
        console.error('Erreur lors de la récupération de l\'enquête:', error);
        throw error;
    }
}

// Clôturer une enquête
async function closeEnquete(id, reason, report) {
    try {
        // Simulation d'appel API
        // const response = await fetch(
        //     `${API_CONFIG.baseURL}${API_CONFIG.endpoints.enquetes}/${id}`,
        //     {
        //         method: 'PATCH',
        //         headers: {
        //             'Content-Type': 'application/json',
        //             'Authorization': 'Bearer YOUR_TOKEN'
        //         },
        //         body: JSON.stringify({
        //             statut: 'cloturee',
        //             motifCloture: reason,
        //             rapportCloture: report,
        //             dateFin: new Date().toISOString()
        //         })
        //     }
        // );
        
        await new Promise(resolve => setTimeout(resolve, 600));
        
        // Mettre à jour les données mockées
        const enquete = MOCK_DATA.enquetes.find(e => e.id === parseInt(id));
        if (enquete) {
            enquete.statut = 'cloturee';
            enquete.dateFin = new Date().toISOString();
            enquete.avancement = 100;
        }
        
        // Recharger les données
        await fetchEnquetes();
        await fetchStats();
        
        return true;
        
    } catch (error) {
        console.error('Erreur lors de la clôture de l\'enquête:', error);
        throw error;
    }
}

// Supprimer une enquête
async function deleteEnquete(id) {
    try {
        // Simulation d'appel API
        await new Promise(resolve => setTimeout(resolve, 400));
        
        // Supprimer des données mockées
        const index = MOCK_DATA.enquetes.findIndex(e => e.id === parseInt(id));
        if (index !== -1) {
            MOCK_DATA.enquetes.splice(index, 1);
        }
        
        // Recharger les données
        await fetchEnquetes();
        await fetchStats();
        
        return true;
        
    } catch (error) {
        console.error('Erreur lors de la suppression de l\'enquête:', error);
        throw error;
    }
}

/* ========================================
   Fonctions de rendu
   ======================================== */

// Afficher les statistiques
function renderStats(data) {
    const statsGrid = document.getElementById('statsGrid');
    
    const statsCards = [
        {
            label: 'Total des enquêtes',
            value: data.total,
            icon: 'ri-file-list-3-line',
            color: 'primary'
        },
        {
            label: 'Enquêtes en cours',
            value: data.enCours,
            icon: 'ri-focus-2-line',
            color: 'info'
        },
        {
            label: 'Enquêtes clôturées',
            value: data.cloturees,
            icon: 'ri-checkbox-circle-line',
            color: 'success'
        },
        {
            label: 'Ouvertes récemment',
            value: data.ouvertes,
            icon: 'ri-folder-open-line',
            color: 'warning'
        },
        {
            label: 'Enquêtes urgentes',
            value: data.urgentes,
            icon: 'ri-alarm-warning-line',
            color: 'danger'
        },
        {
            label: 'Enquêtes approfondies',
            value: data.byType.approfondie,
            icon: 'ri-search-eye-line',
            color: 'primary'
        }
    ];
    
    statsGrid.innerHTML = statsCards.map(card => `
        <div class="stat-card">
            <div class="stat-icon ${card.color}">
                <i class="${card.icon}"></i>
            </div>
            <div class="stat-content">
                <div class="stat-label">${card.label}</div>
                <div class="stat-value">${card.value.toLocaleString('fr-FR')}</div>
            </div>
        </div>
    `).join('');
}

// Afficher le tableau
function renderTable(data) {
    const tableBody = document.getElementById('tableBody');
    const dataTable = document.getElementById('dataTable');
    const loadingState = document.getElementById('loadingState');
    const errorState = document.getElementById('errorState');
    const emptyState = document.getElementById('emptyState');
    const tableFooter = document.getElementById('tableFooter');
    
    // Masquer les états
    loadingState.style.display = 'none';
    errorState.style.display = 'none';
    emptyState.style.display = 'none';
    
    // Afficher le tableau
    dataTable.style.display = 'table';
    tableFooter.style.display = 'flex';
    
    // Labels des statuts
    const statutLabels = {
        ouverte: { text: 'Ouverte', icon: 'ri-folder-open-fill' },
        en_cours: { text: 'En cours', icon: 'ri-focus-2-fill' },
        suspendue: { text: 'Suspendue', icon: 'ri-pause-circle-fill' },
        cloturee: { text: 'Clôturée', icon: 'ri-checkbox-circle-fill' },
        archivee: { text: 'Archivée', icon: 'ri-archive-fill' }
    };
    
    // Labels des priorités
    const prioriteLabels = {
        critique: { text: 'Critique', icon: 'ri-alarm-warning-fill' },
        haute: { text: 'Haute', icon: 'ri-arrow-up-circle-fill' },
        normale: { text: 'Normale', icon: 'ri-record-circle-fill' },
        basse: { text: 'Basse', icon: 'ri-arrow-down-circle-fill' }
    };
    
    // Labels des catégories
    const categorieLabels = {
        terrorisme: 'Terrorisme',
        criminalite: 'Criminalité organisée',
        corruption: 'Corruption',
        trafic: 'Trafic',
        cybercrime: 'Cybercriminalité',
        subversion: 'Subversion',
        autre: 'Autre'
    };
    
    // Labels des types
    const typeLabels = {
        preliminaire: 'Préliminaire',
        approfondie: 'Approfondie',
        surveillance: 'Surveillance',
        infiltration: 'Infiltration',
        judiciaire: 'Judiciaire'
    };
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td>
                <strong style="color: var(--primary-color);">${item.reference}</strong>
            </td>
            <td>
                <div style="max-width: 300px;">
                    <strong>${item.sujet}</strong>
                    <div style="font-size: 12px; color: var(--text-secondary); margin-top: 4px;">
                        <i class="ri-map-pin-line"></i> ${item.region}
                    </div>
                </div>
            </td>
            <td>
                <span class="category-badge">
                    ${categorieLabels[item.categorie]}
                </span>
            </td>
            <td>${typeLabels[item.type]}</td>
            <td>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <i class="ri-user-line" style="color: var(--text-secondary);"></i>
                    ${item.enqueteur}
                </div>
            </td>
            <td>
                <span class="priority-badge ${item.priorite}">
                    <i class="${prioriteLabels[item.priorite].icon}"></i>
                    ${prioriteLabels[item.priorite].text}
                </span>
            </td>
            <td>
                <span class="status-badge ${item.statut}">
                    <i class="${statutLabels[item.statut].icon}"></i>
                    ${statutLabels[item.statut].text}
                </span>
            </td>
            <td>${formatDate(item.dateCreation)}</td>
            <td>
                <div class="action-buttons">
                    <button class="btn-action view" onclick="viewEnquete(${item.id})" title="Voir les détails">
                        <i class="ri-eye-line"></i>
                    </button>
                    <button class="btn-action edit" onclick="editEnquete(${item.id})" title="Modifier">
                        <i class="ri-edit-line"></i>
                    </button>
                    ${item.statut !== 'cloturee' && item.statut !== 'archivee' ? `
                    <button class="btn-action close" onclick="confirmClose(${item.id})" title="Clôturer">
                        <i class="ri-checkbox-circle-line"></i>
                    </button>
                    ` : ''}
                    <button class="btn-action delete" onclick="confirmDelete(${item.id})" title="Supprimer">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Afficher la pagination
function renderPagination() {
    const pagination = document.getElementById('pagination');
    const startEntry = document.getElementById('startEntry');
    const endEntry = document.getElementById('endEntry');
    const totalEntries = document.getElementById('totalEntries');
    
    // Mise à jour des informations de pagination
    const start = (state.page - 1) * state.pageSize + 1;
    const end = Math.min(state.page * state.pageSize, state.totalItems);
    
    startEntry.textContent = start;
    endEntry.textContent = end;
    totalEntries.textContent = state.totalItems;
    
    // Génération des boutons de pagination
    const maxVisiblePages = 5;
    let startPage = Math.max(1, state.page - Math.floor(maxVisiblePages / 2));
    let endPage = Math.min(state.totalPages, startPage + maxVisiblePages - 1);
    
    if (endPage - startPage < maxVisiblePages - 1) {
        startPage = Math.max(1, endPage - maxVisiblePages + 1);
    }
    
    let paginationHTML = '';
    
    // Bouton Précédent
    paginationHTML += `
        <button class="page-btn" ${state.page === 1 ? 'disabled' : ''} onclick="changePage(${state.page - 1})">
            <i class="ri-arrow-left-s-line"></i>
        </button>
    `;
    
    // Première page
    if (startPage > 1) {
        paginationHTML += `
            <button class="page-btn" onclick="changePage(1)">1</button>
        `;
        if (startPage > 2) {
            paginationHTML += `<button class="page-btn" disabled>...</button>`;
        }
    }
    
    // Pages visibles
    for (let i = startPage; i <= endPage; i++) {
        paginationHTML += `
            <button class="page-btn ${i === state.page ? 'active' : ''}" onclick="changePage(${i})">
                ${i}
            </button>
        `;
    }
    
    // Dernière page
    if (endPage < state.totalPages) {
        if (endPage < state.totalPages - 1) {
            paginationHTML += `<button class="page-btn" disabled>...</button>`;
        }
        paginationHTML += `
            <button class="page-btn" onclick="changePage(${state.totalPages})">${state.totalPages}</button>
        `;
    }
    
    // Bouton Suivant
    paginationHTML += `
        <button class="page-btn" ${state.page === state.totalPages ? 'disabled' : ''} onclick="changePage(${state.page + 1})">
            <i class="ri-arrow-right-s-line"></i>
        </button>
    `;
    
    pagination.innerHTML = paginationHTML;
}

/* ========================================
   Fonctions d'état (Loading, Error, Empty)
   ======================================== */

function showLoadingState() {
    document.getElementById('loadingState').style.display = 'flex';
    document.getElementById('errorState').style.display = 'none';
    document.getElementById('emptyState').style.display = 'none';
    document.getElementById('dataTable').style.display = 'none';
    document.getElementById('tableFooter').style.display = 'none';
}

function showErrorState(message) {
    document.getElementById('loadingState').style.display = 'none';
    document.getElementById('errorState').style.display = 'flex';
    document.getElementById('emptyState').style.display = 'none';
    document.getElementById('dataTable').style.display = 'none';
    document.getElementById('tableFooter').style.display = 'none';
    document.getElementById('errorMessage').textContent = message || 'Une erreur est survenue lors du chargement des données.';
}

function showEmptyState() {
    document.getElementById('loadingState').style.display = 'none';
    document.getElementById('errorState').style.display = 'none';
    document.getElementById('emptyState').style.display = 'flex';
    document.getElementById('dataTable').style.display = 'none';
    document.getElementById('tableFooter').style.display = 'none';
}

function showStatsError() {
    const statsGrid = document.getElementById('statsGrid');
    statsGrid.innerHTML = `
        <div class="stats-loading">
            <i class="ri-error-warning-line" style="font-size: 48px; color: var(--danger-color);"></i>
            <p style="color: var(--text-secondary);">Erreur lors du chargement des statistiques</p>
        </div>
    `;
}

/* ========================================
   Gestionnaires d'événements
   ======================================== */

// Changer de page
function changePage(page) {
    if (page < 1 || page > state.totalPages || page === state.page) {
        return;
    }
    state.page = page;
    fetchEnquetes();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Changer la taille de page
function changePageSize() {
    const pageSizeSelect = document.getElementById('pageSizeSelect');
    state.pageSize = parseInt(pageSizeSelect.value);
    state.page = 1;
    fetchEnquetes();
}

// Appliquer les filtres
function applyFilters() {
    state.page = 1;
    state.search = document.getElementById('searchInput').value.trim();
    state.categorie = document.getElementById('categorieFilter').value;
    state.type = document.getElementById('typeFilter').value;
    state.statut = document.getElementById('statusFilter').value;
    state.priorite = document.getElementById('prioriteFilter').value;
    state.startDate = document.getElementById('startDateFilter').value;
    state.endDate = document.getElementById('endDateFilter').value;
    
    fetchEnquetes();
}

// Réinitialiser les filtres
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('categorieFilter').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('prioriteFilter').value = '';
    document.getElementById('startDateFilter').value = '';
    document.getElementById('endDateFilter').value = '';
    
    state.search = '';
    state.categorie = '';
    state.type = '';
    state.statut = '';
    state.priorite = '';
    state.startDate = '';
    state.endDate = '';
    state.page = 1;
    
    fetchEnquetes();
}

// Recherche avec debounce
const debouncedSearch = debounce(() => {
    applyFilters();
}, 500);

// Tri du tableau
function sortTable(column) {
    if (state.sortBy === column) {
        state.sortOrder = state.sortOrder === 'asc' ? 'desc' : 'asc';
    } else {
        state.sortBy = column;
        state.sortOrder = 'asc';
    }
    fetchEnquetes();
}

// Voir les détails d'une enquête
async function viewEnquete(id) {
    const modal = document.getElementById('enqueteModal');
    const modalBody = document.getElementById('modalBody');
    const modalEditBtn = document.getElementById('modalEditBtn');
    
    modal.style.display = 'flex';
    modalBody.innerHTML = '<div class="spinner-center"><div class="spinner"></div></div>';
    
    try {
        const enquete = await fetchEnqueteById(id);
        
        const statutLabels = {
            ouverte: 'Ouverte',
            en_cours: 'En cours',
            suspendue: 'Suspendue',
            cloturee: 'Clôturée',
            archivee: 'Archivée'
        };
        
        const prioriteLabels = {
            critique: 'Critique',
            haute: 'Haute',
            normale: 'Normale',
            basse: 'Basse'
        };
        
        const categorieLabels = {
            terrorisme: 'Terrorisme',
            criminalite: 'Criminalité organisée',
            corruption: 'Corruption',
            trafic: 'Trafic',
            cybercrime: 'Cybercriminalité',
            subversion: 'Subversion',
            autre: 'Autre'
        };
        
        const typeLabels = {
            preliminaire: 'Préliminaire',
            approfondie: 'Approfondie',
            surveillance: 'Surveillance',
            infiltration: 'Infiltration',
            judiciaire: 'Judiciaire'
        };
        
        modalBody.innerHTML = `
            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">Référence</div>
                    <div class="detail-value"><strong style="color: var(--primary-color);">${enquete.reference}</strong></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Catégorie</div>
                    <div class="detail-value">
                        <span class="category-badge">${categorieLabels[enquete.categorie]}</span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Type d'enquête</div>
                    <div class="detail-value">${typeLabels[enquete.type]}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Statut</div>
                    <div class="detail-value">
                        <span class="status-badge ${enquete.statut}">${statutLabels[enquete.statut]}</span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Priorité</div>
                    <div class="detail-value">
                        <span class="priority-badge ${enquete.priorite}">${prioriteLabels[enquete.priorite]}</span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Enquêteur principal</div>
                    <div class="detail-value">${enquete.enqueteur}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Taille de l'équipe</div>
                    <div class="detail-value">${enquete.equipe} agents</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Région</div>
                    <div class="detail-value"><i class="ri-map-pin-line"></i> ${enquete.region}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Date de création</div>
                    <div class="detail-value">${formatDate(enquete.dateCreation)}</div>
                </div>
                ${enquete.dateDebut ? `
                <div class="detail-item">
                    <div class="detail-label">Date de début</div>
                    <div class="detail-value">${formatDate(enquete.dateDebut)}</div>
                </div>
                ` : ''}
                ${enquete.dateFin ? `
                <div class="detail-item">
                    <div class="detail-label">Date de clôture</div>
                    <div class="detail-value">${formatDate(enquete.dateFin)}</div>
                </div>
                ` : ''}
                <div class="detail-item">
                    <div class="detail-label">Budget alloué</div>
                    <div class="detail-value">${enquete.budget.toLocaleString('fr-FR')} FCFA</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Suspects identifiés</div>
                    <div class="detail-value"><strong>${enquete.suspects}</strong></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Témoins interrogés</div>
                    <div class="detail-value"><strong>${enquete.temoins}</strong></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Preuves collectées</div>
                    <div class="detail-value"><strong>${enquete.preuves}</strong></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Rapports générés</div>
                    <div class="detail-value"><strong>${enquete.rapports}</strong></div>
                </div>
            </div>
            
            <div class="detail-item" style="margin-top: var(--spacing-lg);">
                <div class="detail-label">Sujet de l'enquête</div>
                <div class="detail-value"><strong>${enquete.sujet}</strong></div>
            </div>
            
            <div class="detail-item" style="margin-top: var(--spacing-md);">
                <div class="detail-label">Avancement de l'enquête</div>
                <div class="detail-value">${enquete.avancement}%</div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: ${enquete.avancement}%;"></div>
                </div>
            </div>
            
            <div class="detail-content">
                <div class="detail-label" style="margin-bottom: var(--spacing-sm);">Description détaillée</div>
                <p>${enquete.description}</p>
            </div>
        `;
        
        // Configure le bouton éditer
        modalEditBtn.onclick = () => editEnquete(id);
        
    } catch (error) {
        modalBody.innerHTML = `
            <div class="alert alert-danger">
                <i class="ri-error-warning-line"></i>
                <div>
                    <strong>Erreur</strong>
                    <p>Impossible de charger les détails de l'enquête.</p>
                </div>
            </div>
        `;
    }
}

// Modifier une enquête
function editEnquete(id) {
    console.log('Édition de l\'enquête:', id);
    alert(`Fonctionnalité d'édition de l'enquête #${id}\nÀ implémenter avec un formulaire modal.`);
}

// Confirmer la clôture
function confirmClose(id) {
    const modal = document.getElementById('closeModal');
    modal.style.display = 'flex';
    
    const confirmBtn = document.getElementById('closeConfirmBtn');
    
    // Remplacer l'événement click
    const newConfirmBtn = confirmBtn.cloneNode(true);
    confirmBtn.parentNode.replaceChild(newConfirmBtn, confirmBtn);
    
    newConfirmBtn.addEventListener('click', () => {
        handleClose(id);
    });
}

// Gérer la clôture
async function handleClose(id) {
    const confirmBtn = document.getElementById('closeConfirmBtn');
    const reasonSelect = document.getElementById('closeReasonSelect');
    const reportTextarea = document.getElementById('closeReportTextarea');
    const originalHTML = confirmBtn.innerHTML;
    
    const reason = reasonSelect.value;
    const report = reportTextarea.value.trim();
    
    if (!reason) {
        alert('Veuillez sélectionner un motif de clôture');
        return;
    }
    
    if (!report) {
        alert('Veuillez rédiger un rapport de clôture');
        return;
    }
    
    try {
        confirmBtn.disabled = true;
        confirmBtn.innerHTML = '<div class="spinner" style="width: 20px; height: 20px; border-width: 2px;"></div>';
        
        await closeEnquete(id, reason, report);
        
        closeModal('closeModal');
        
        // Réinitialiser le formulaire
        reasonSelect.value = '';
        reportTextarea.value = '';
        
        alert('Enquête clôturée avec succès');
        
    } catch (error) {
        alert('Erreur lors de la clôture de l\'enquête');
        confirmBtn.disabled = false;
        confirmBtn.innerHTML = originalHTML;
    }
}

// Confirmer la suppression
function confirmDelete(id) {
    const modal = document.getElementById('deleteModal');
    modal.style.display = 'flex';
    
    const confirmBtn = document.getElementById('deleteConfirmBtn');
    
    // Remplacer l'événement click
    const newConfirmBtn = confirmBtn.cloneNode(true);
    confirmBtn.parentNode.replaceChild(newConfirmBtn, confirmBtn);
    
    newConfirmBtn.addEventListener('click', () => {
        handleDelete(id);
    });
}

// Gérer la suppression
async function handleDelete(id) {
    const confirmBtn = document.getElementById('deleteConfirmBtn');
    const originalHTML = confirmBtn.innerHTML;
    
    try {
        confirmBtn.disabled = true;
        confirmBtn.innerHTML = '<div class="spinner" style="width: 20px; height: 20px; border-width: 2px;"></div>';
        
        await deleteEnquete(id);
        
        closeModal('deleteModal');
        
        alert('Enquête supprimée avec succès');
        
    } catch (error) {
        alert('Erreur lors de la suppression de l\'enquête');
        confirmBtn.disabled = false;
        confirmBtn.innerHTML = originalHTML;
    }
}

// Fermer une modal
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
}

// Exporter les données
function exportData() {
    console.log('Export des données');
    alert('Fonctionnalité d\'export des données\nÀ implémenter (CSV, Excel, PDF).');
}

// Actualiser les statistiques
function refreshStats() {
    const refreshBtn = document.getElementById('refreshStatsBtn');
    refreshBtn.style.pointerEvents = 'none';
    refreshBtn.style.opacity = '0.5';
    
    fetchStats().then(() => {
        setTimeout(() => {
            refreshBtn.style.pointerEvents = 'auto';
            refreshBtn.style.opacity = '1';
        }, 1000);
    });
}

/* ========================================
   Configuration des événements
   ======================================== */

function setupEventListeners() {
    // Recherche avec debounce
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', debouncedSearch);
    
    // Recherche dans le header
    const headerSearch = document.getElementById('headerSearch');
    headerSearch.addEventListener('input', (e) => {
        searchInput.value = e.target.value;
        debouncedSearch();
    });
    
    // Filtres
    document.getElementById('categorieFilter').addEventListener('change', applyFilters);
    document.getElementById('typeFilter').addEventListener('change', applyFilters);
    document.getElementById('statusFilter').addEventListener('change', applyFilters);
    document.getElementById('prioriteFilter').addEventListener('change', applyFilters);
    document.getElementById('startDateFilter').addEventListener('change', applyFilters);
    document.getElementById('endDateFilter').addEventListener('change', applyFilters);
    
    // Boutons de filtres
    document.getElementById('applyFiltersBtn').addEventListener('click', applyFilters);
    document.getElementById('resetFiltersBtn').addEventListener('click', resetFilters);
    
    // Pagination
    document.getElementById('pageSizeSelect').addEventListener('change', changePageSize);
    
    // Boutons d'action
    document.getElementById('exportBtn').addEventListener('click', exportData);
    document.getElementById('addEnqueteBtn').addEventListener('click', () => {
        alert('Fonctionnalité d\'ajout d\'enquête\nÀ implémenter avec un formulaire modal.');
    });
    document.getElementById('refreshStatsBtn').addEventListener('click', refreshStats);
    document.getElementById('retryBtn').addEventListener('click', () => fetchEnquetes());
    
    // Modals - Enquête
    document.getElementById('modalClose').addEventListener('click', () => closeModal('enqueteModal'));
    document.getElementById('modalOverlay').addEventListener('click', () => closeModal('enqueteModal'));
    document.getElementById('modalCancelBtn').addEventListener('click', () => closeModal('enqueteModal'));
    
    // Modals - Clôture
    document.getElementById('closeModalClose').addEventListener('click', () => closeModal('closeModal'));
    document.getElementById('closeModalOverlay').addEventListener('click', () => closeModal('closeModal'));
    document.getElementById('closeCancelBtn').addEventListener('click', () => closeModal('closeModal'));
    
    // Modals - Suppression
    document.getElementById('deleteModalClose').addEventListener('click', () => closeModal('deleteModal'));
    document.getElementById('deleteModalOverlay').addEventListener('click', () => closeModal('deleteModal'));
    document.getElementById('deleteCancelBtn').addEventListener('click', () => closeModal('deleteModal'));
    
    // Sidebar toggle (pour mobile)
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    
    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });
    
    // Fermer la sidebar en cliquant en dehors (mobile)
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 992) {
            if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                sidebar.classList.remove('active');
            }
        }
    });
}

/* ========================================
   Initialisation
   ======================================== */

document.addEventListener('DOMContentLoaded', () => {
    console.log('SIGMA - Module Enquêtes initialisé');
    
    // Configuration des événements
    setupEventListeners();
    
    // Chargement initial des données
    fetchStats();
    fetchEnquetes();
});

// Exposer les fonctions nécessaires dans le scope global
window.changePage = changePage;
window.sortTable = sortTable;
window.viewEnquete = viewEnquete;
window.editEnquete = editEnquete;
window.confirmClose = confirmClose;
window.confirmDelete = confirmDelete;
