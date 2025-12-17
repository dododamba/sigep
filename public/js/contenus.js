/* ========================================
   SIGMA - Module Contenus - JavaScript
   ======================================== */

// Configuration de l'API
const API_CONFIG = {
    baseURL: 'https://api.sigma.td/v1', // URL fictive mais réaliste
    endpoints: {
        contenus: '/api/contenus',
        stats: '/api/contenus/stats'
    },
    timeout: 10000
};

// État global de l'application
const state = {
    page: 1,
    pageSize: 10,
    search: '',
    type: '',
    statut: '',
    categorie: '',
    startDate: '',
    endDate: '',
    sortBy: 'datePublication',
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
        total: 1247,
        publie: 856,
        brouillon: 142,
        attente: 189,
        archive: 60,
        byType: {
            article: 425,
            post: 312,
            video: 198,
            image: 156,
            commentaire: 89,
            document: 45,
            audio: 22
        }
    },
    contenus: generateMockContenus(50)
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

// Générer des contenus de test
function generateMockContenus(count) {
    const types = ['article', 'post', 'commentaire', 'message', 'video', 'audio', 'image', 'document', 'annonce'];
    const statuts = ['publie', 'brouillon', 'attente', 'archive'];
    const categories = ['politique', 'religieux', 'social', 'economique', 'securite', 'propaganda'];
    
    const prenoms = ['Mahamat', 'Fatima', 'Moussa', 'Aïcha', 'Idriss', 'Amina', 'Hassan', 'Mariam', 'Abdel', 'Khadija'];
    const noms = ['Déby', 'Ahmat', 'Brahim', 'Youssouf', 'Oumar', 'Saleh', 'Haroun', 'Deby', 'Nour', 'Mahamat'];
    
    const titres = [
        'Déclaration sur la situation sécuritaire',
        'Appel à la mobilisation citoyenne',
        'Communiqué officiel du gouvernement',
        'Message de sensibilisation',
        'Rapport d\'activités trimestriel',
        'Annonce importante',
        'Publication sur les réformes',
        'Discours sur l\'unité nationale',
        'Vidéo de propagande',
        'Document confidentiel intercepté'
    ];
    
    const contenus = [];
    for (let i = 1; i <= count; i++) {
        const type = types[Math.floor(Math.random() * types.length)];
        const statut = statuts[Math.floor(Math.random() * statuts.length)];
        const categorie = categories[Math.floor(Math.random() * categories.length)];
        const prenom = prenoms[Math.floor(Math.random() * prenoms.length)];
        const nom = noms[Math.floor(Math.random() * noms.length)];
        const titre = titres[Math.floor(Math.random() * titres.length)];
        
        const daysAgo = Math.floor(Math.random() * 365);
        const datePublication = new Date();
        datePublication.setDate(datePublication.getDate() - daysAgo);
        
        contenus.push({
            id: i,
            titre: `${titre} #${i}`,
            type: type,
            categorie: categorie,
            auteur: `${prenom} ${nom}`,
            datePublication: datePublication.toISOString(),
            statut: statut,
            description: `Description détaillée du contenu numérique ${i}. Ce contenu a été détecté et classifié selon les critères de surveillance de SIGMA.`,
            plateforme: ['Facebook', 'Twitter', 'WhatsApp', 'Telegram'][Math.floor(Math.random() * 4)],
            niveauGravite: Math.floor(Math.random() * 5) + 1,
            vues: Math.floor(Math.random() * 10000),
            partages: Math.floor(Math.random() * 1000)
        });
    }
    return contenus;
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
        await new Promise(resolve => setTimeout(resolve, 800)); // Simule la latence réseau
        const data = MOCK_DATA.stats;
        
        state.stats = data;
        renderStats(data);
        
    } catch (error) {
        console.error('Erreur lors de la récupération des statistiques:', error);
        showStatsError();
    }
}

// Récupérer les contenus avec filtres
async function fetchContenus(params = {}) {
    try {
        state.loading = true;
        showLoadingState();
        
        // Construction des paramètres de requête
        const queryParams = new URLSearchParams({
            page: params.page || state.page,
            pageSize: params.pageSize || state.pageSize,
            ...(state.search && { search: state.search }),
            ...(state.type && { type: state.type }),
            ...(state.statut && { statut: state.statut }),
            ...(state.categorie && { categorie: state.categorie }),
            ...(state.startDate && { startDate: state.startDate }),
            ...(state.endDate && { endDate: state.endDate }),
            sortBy: state.sortBy,
            sortOrder: state.sortOrder
        });
        
        // Simulation d'appel API
        // const response = await fetch(
        //     `${API_CONFIG.baseURL}${API_CONFIG.endpoints.contenus}?${queryParams}`,
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
        await new Promise(resolve => setTimeout(resolve, 600)); // Simule la latence réseau
        
        let filteredData = [...MOCK_DATA.contenus];
        
        // Appliquer les filtres
        if (state.search) {
            const searchLower = state.search.toLowerCase();
            filteredData = filteredData.filter(item =>
                item.titre.toLowerCase().includes(searchLower) ||
                item.auteur.toLowerCase().includes(searchLower) ||
                item.description.toLowerCase().includes(searchLower)
            );
        }
        
        if (state.type) {
            filteredData = filteredData.filter(item => item.type === state.type);
        }
        
        if (state.statut) {
            filteredData = filteredData.filter(item => item.statut === state.statut);
        }
        
        if (state.categorie) {
            filteredData = filteredData.filter(item => item.categorie === state.categorie);
        }
        
        if (state.startDate) {
            const startDate = new Date(state.startDate);
            filteredData = filteredData.filter(item => new Date(item.datePublication) >= startDate);
        }
        
        if (state.endDate) {
            const endDate = new Date(state.endDate);
            endDate.setHours(23, 59, 59);
            filteredData = filteredData.filter(item => new Date(item.datePublication) <= endDate);
        }
        
        // Tri
        filteredData.sort((a, b) => {
            let compareA = a[state.sortBy];
            let compareB = b[state.sortBy];
            
            if (state.sortBy === 'datePublication') {
                compareA = new Date(compareA);
                compareB = new Date(compareB);
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
        console.error('Erreur lors de la récupération des contenus:', error);
        state.loading = false;
        showErrorState(error.message);
    }
}

// Récupérer un contenu par ID
async function fetchContenuById(id) {
    try {
        // Simulation d'appel API
        // const response = await fetch(
        //     `${API_CONFIG.baseURL}${API_CONFIG.endpoints.contenus}/${id}`,
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
        
        await new Promise(resolve => setTimeout(resolve, 400));
        const contenu = MOCK_DATA.contenus.find(c => c.id === parseInt(id));
        
        if (!contenu) {
            throw new Error('Contenu non trouvé');
        }
        
        return contenu;
        
    } catch (error) {
        console.error('Erreur lors de la récupération du contenu:', error);
        throw error;
    }
}

// Supprimer un contenu
async function deleteContenu(id) {
    try {
        // Simulation d'appel API
        // const response = await fetch(
        //     `${API_CONFIG.baseURL}${API_CONFIG.endpoints.contenus}/${id}`,
        //     {
        //         method: 'DELETE',
        //         headers: {
        //             'Content-Type': 'application/json',
        //             'Authorization': 'Bearer YOUR_TOKEN'
        //         }
        //     }
        // );
        
        // if (!response.ok) {
        //     throw new Error(`HTTP error! status: ${response.status}`);
        // }
        
        await new Promise(resolve => setTimeout(resolve, 400));
        
        // Supprimer des données mockées
        const index = MOCK_DATA.contenus.findIndex(c => c.id === parseInt(id));
        if (index !== -1) {
            MOCK_DATA.contenus.splice(index, 1);
        }
        
        // Recharger les données
        await fetchContenus();
        await fetchStats();
        
        return true;
        
    } catch (error) {
        console.error('Erreur lors de la suppression du contenu:', error);
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
            label: 'Total des contenus',
            value: data.total,
            icon: 'ri-file-list-3-line',
            color: 'primary'
        },
        {
            label: 'Contenus publiés',
            value: data.publie,
            icon: 'ri-checkbox-circle-line',
            color: 'success'
        },
        {
            label: 'En attente de validation',
            value: data.attente,
            icon: 'ri-time-line',
            color: 'warning'
        },
        {
            label: 'Brouillons',
            value: data.brouillon,
            icon: 'ri-draft-line',
            color: 'info'
        },
        {
            label: 'Articles',
            value: data.byType.article,
            icon: 'ri-article-line',
            color: 'primary'
        },
        {
            label: 'Vidéos',
            value: data.byType.video,
            icon: 'ri-video-line',
            color: 'danger'
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
    
    // Icônes par type de contenu
    const typeIcons = {
        article: 'ri-article-line',
        post: 'ri-chat-3-line',
        commentaire: 'ri-chat-quote-line',
        message: 'ri-message-3-line',
        video: 'ri-video-line',
        audio: 'ri-music-line',
        image: 'ri-image-line',
        document: 'ri-file-text-line',
        annonce: 'ri-megaphone-line'
    };
    
    // Labels des statuts
    const statutLabels = {
        publie: { text: 'Publié', icon: 'ri-checkbox-circle-fill' },
        brouillon: { text: 'Brouillon', icon: 'ri-draft-fill' },
        attente: { text: 'En attente', icon: 'ri-time-fill' },
        archive: { text: 'Archivé', icon: 'ri-archive-fill' },
        supprime: { text: 'Supprimé', icon: 'ri-delete-bin-fill' }
    };
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td><strong>#${item.id}</strong></td>
            <td>
                <div style="max-width: 300px;">
                    <strong>${item.titre}</strong>
                    <div style="font-size: 12px; color: var(--text-secondary); margin-top: 4px;">
                        ${item.description.substring(0, 80)}...
                    </div>
                </div>
            </td>
            <td>
                <span class="type-badge">
                    <i class="${typeIcons[item.type] || 'ri-file-line'}"></i>
                    ${item.type.charAt(0).toUpperCase() + item.type.slice(1)}
                </span>
            </td>
            <td>${item.categorie.charAt(0).toUpperCase() + item.categorie.slice(1)}</td>
            <td>${item.auteur}</td>
            <td>${formatDate(item.datePublication)}</td>
            <td>
                <span class="status-badge ${item.statut}">
                    <i class="${statutLabels[item.statut].icon}"></i>
                    ${statutLabels[item.statut].text}
                </span>
            </td>
            <td>
                <div class="action-buttons">
                    <button class="btn-action view" onclick="viewContenu(${item.id})" title="Voir les détails">
                        <i class="ri-eye-line"></i>
                    </button>
                    <button class="btn-action edit" onclick="editContenu(${item.id})" title="Modifier">
                        <i class="ri-edit-line"></i>
                    </button>
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
    fetchContenus();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Changer la taille de page
function changePageSize() {
    const pageSizeSelect = document.getElementById('pageSizeSelect');
    state.pageSize = parseInt(pageSizeSelect.value);
    state.page = 1; // Retour à la première page
    fetchContenus();
}

// Appliquer les filtres
function applyFilters() {
    state.page = 1; // Retour à la première page
    state.search = document.getElementById('searchInput').value.trim();
    state.type = document.getElementById('typeFilter').value;
    state.statut = document.getElementById('statusFilter').value;
    state.categorie = document.getElementById('categorieFilter').value;
    state.startDate = document.getElementById('startDateFilter').value;
    state.endDate = document.getElementById('endDateFilter').value;
    
    fetchContenus();
}

// Réinitialiser les filtres
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('categorieFilter').value = '';
    document.getElementById('startDateFilter').value = '';
    document.getElementById('endDateFilter').value = '';
    
    state.search = '';
    state.type = '';
    state.statut = '';
    state.categorie = '';
    state.startDate = '';
    state.endDate = '';
    state.page = 1;
    
    fetchContenus();
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
    fetchContenus();
}

// Voir les détails d'un contenu
async function viewContenu(id) {
    const modal = document.getElementById('contentModal');
    const modalBody = document.getElementById('modalBody');
    
    modal.style.display = 'flex';
    modalBody.innerHTML = '<div class="spinner-center"><div class="spinner"></div></div>';
    
    try {
        const contenu = await fetchContenuById(id);
        
        const typeIcons = {
            article: 'ri-article-line',
            post: 'ri-chat-3-line',
            commentaire: 'ri-chat-quote-line',
            message: 'ri-message-3-line',
            video: 'ri-video-line',
            audio: 'ri-music-line',
            image: 'ri-image-line',
            document: 'ri-file-text-line',
            annonce: 'ri-megaphone-line'
        };
        
        const statutLabels = {
            publie: 'Publié',
            brouillon: 'Brouillon',
            attente: 'En attente',
            archive: 'Archivé',
            supprime: 'Supprimé'
        };
        
        modalBody.innerHTML = `
            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">ID du contenu</div>
                    <div class="detail-value"><strong>#${contenu.id}</strong></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Type</div>
                    <div class="detail-value">
                        <span class="type-badge">
                            <i class="${typeIcons[contenu.type] || 'ri-file-line'}"></i>
                            ${contenu.type.charAt(0).toUpperCase() + contenu.type.slice(1)}
                        </span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Statut</div>
                    <div class="detail-value">
                        <span class="status-badge ${contenu.statut}">
                            ${statutLabels[contenu.statut]}
                        </span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Catégorie</div>
                    <div class="detail-value">${contenu.categorie.charAt(0).toUpperCase() + contenu.categorie.slice(1)}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Auteur / Éditeur</div>
                    <div class="detail-value">${contenu.auteur}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Plateforme</div>
                    <div class="detail-value">${contenu.plateforme}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Date de publication</div>
                    <div class="detail-value">${formatDateTime(contenu.datePublication)}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Niveau de gravité</div>
                    <div class="detail-value">
                        <span style="color: ${contenu.niveauGravite >= 4 ? 'var(--danger-color)' : contenu.niveauGravite >= 3 ? 'var(--warning-color)' : 'var(--success-color)'}">
                            ${contenu.niveauGravite}/5
                        </span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Vues</div>
                    <div class="detail-value">${contenu.vues.toLocaleString('fr-FR')}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Partages</div>
                    <div class="detail-value">${contenu.partages.toLocaleString('fr-FR')}</div>
                </div>
            </div>
            
            <div class="detail-item" style="margin-top: var(--spacing-lg);">
                <div class="detail-label">Titre du contenu</div>
                <div class="detail-value"><strong>${contenu.titre}</strong></div>
            </div>
            
            <div class="detail-content">
                <div class="detail-label" style="margin-bottom: var(--spacing-sm);">Description / Contenu</div>
                <p>${contenu.description}</p>
            </div>
        `;
        
    } catch (error) {
        modalBody.innerHTML = `
            <div class="alert alert-danger">
                <i class="ri-error-warning-line"></i>
                <div>
                    <strong>Erreur</strong>
                    <p>Impossible de charger les détails du contenu.</p>
                </div>
            </div>
        `;
    }
}

// Modifier un contenu
function editContenu(id) {
    // Cette fonction serait implémentée pour ouvrir un formulaire d'édition
    console.log('Édition du contenu:', id);
    alert(`Fonctionnalité d'édition du contenu #${id}\nÀ implémenter avec un formulaire modal.`);
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
        
        await deleteContenu(id);
        
        closeModal('deleteModal');
        
        // Afficher un message de succès (dans un vrai projet, utiliser un système de notifications)
        alert('Contenu supprimé avec succès');
        
    } catch (error) {
        alert('Erreur lors de la suppression du contenu');
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
    // Cette fonction serait implémentée pour exporter les données en CSV ou Excel
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
    document.getElementById('typeFilter').addEventListener('change', applyFilters);
    document.getElementById('statusFilter').addEventListener('change', applyFilters);
    document.getElementById('categorieFilter').addEventListener('change', applyFilters);
    document.getElementById('startDateFilter').addEventListener('change', applyFilters);
    document.getElementById('endDateFilter').addEventListener('change', applyFilters);
    
    // Boutons de filtres
    document.getElementById('applyFiltersBtn').addEventListener('click', applyFilters);
    document.getElementById('resetFiltersBtn').addEventListener('click', resetFilters);
    
    // Pagination
    document.getElementById('pageSizeSelect').addEventListener('change', changePageSize);
    
    // Boutons d'action
    document.getElementById('exportBtn').addEventListener('click', exportData);
    document.getElementById('addContentBtn').addEventListener('click', () => {
        alert('Fonctionnalité d\'ajout de contenu\nÀ implémenter avec un formulaire modal.');
    });
    document.getElementById('refreshStatsBtn').addEventListener('click', refreshStats);
    document.getElementById('retryBtn').addEventListener('click', () => fetchContenus());
    
    // Modals - Contenu
    document.getElementById('modalClose').addEventListener('click', () => closeModal('contentModal'));
    document.getElementById('modalOverlay').addEventListener('click', () => closeModal('contentModal'));
    document.getElementById('modalCancelBtn').addEventListener('click', () => closeModal('contentModal'));
    
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
    console.log('SIGMA - Module Contenus initialisé');
    
    // Configuration des événements
    setupEventListeners();
    
    // Chargement initial des données
    fetchStats();
    fetchContenus();
});

// Exposer les fonctions nécessaires dans le scope global
window.changePage = changePage;
window.sortTable = sortTable;
window.viewContenu = viewContenu;
window.editContenu = editContenu;
window.confirmDelete = confirmDelete;
