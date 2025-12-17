/* ==========================================================================
   SIGMA - Module Personnes Fichées - JavaScript
   Système de Surveillance et Gestion des Personnes Fichées
   Version 3.1 - Avec module Incidents
   ANSE - Agence Nationale de Sécurité du Tchad
   ========================================================================== */

// === CONFIGURATION & STATE ===
const API_BASE_URL = '/api';
const DEBOUNCE_DELAY = 500;

const state = {
    // Pagination
    page: 1,
    pageSize: 10,
    totalItems: 0,
    
    // Filtres
    search: '',
    categorie: '',
    niveauDangerosite: '',
    statut: '',
    zone: '',
    hasCondamnation: false,
    hasEnquete: false,
    hasIdentiteNumerique: false,
    hasSignalement: false,
    hasIncident: false,
    dateNaissanceStart: '',
    dateNaissanceEnd: '',
    createdStart: '',
    createdEnd: '',
    
    // Tri
    sortBy: 'dateCreation',
    sortOrder: 'desc',
    
    // Données
    personnes: [],
    statistics: null,
    currentPersonne: null,
    currentIncident: null,
    
    // États UI
    loading: false,
    saving: false,
    deleting: false,
    error: null,
    
    // Sécurité
    userPermissions: {
        level: 3,
        canView: true,
        canCreate: true,
        canUpdate: true,
        canDelete: false,
        canViewSensitive: true,
        canExport: true
    },
    
    // Modals
    currentModalId: null,
    currentTab: 'resume',
    
    // Timeouts
    searchTimeout: null
};

// === DONNÉES MOCK RÉALISTES POUR LE TCHAD ===
const MockDataTchad = {
    noms: [
        'Mahamat', 'Deby', 'Ngarlejy', 'Abdelkerim', 'Idriss', 'Ahmat', 'Youssouf', 'Haroun',
        'Brahim', 'Saleh', 'Adam', 'Kabadi', 'Hassan', 'Khamis', 'Oumar', 'Ahmed',
        'Abakar', 'Djibril', 'Moussa', 'Zakaria', 'Hamid', 'Suleiman', 'Rashid', 'Daoud',
        'Abdallah', 'Issa', 'Adoum', 'Hissein', 'Mahamat-Nour', 'Tahir'
    ],
    prenoms: [
        'Abdoulaye', 'Itno', 'Yorongar', 'Bachar', 'Mohammed', 'Ali', 'Omar', 'Ibrahim',
        'Khalil', 'Moussa', 'Zakaria', 'Hamid', 'Suleiman', 'Rashid', 'Fatima', 'Aïcha',
        'Khadija', 'Mariam', 'Hawa', 'Zara', 'Amina', 'Halima', 'Nadia', 'Leila'
    ],
    zones: ['ndjamena', 'lac', 'moundou', 'sarh', 'abéché', 'kanem', 'ouaddai', 'logone', 'borkou'],
    zonesLabels: {
        ndjamena: "N'Djamena",
        lac: 'Lac Tchad',
        moundou: 'Moundou',
        sarh: 'Sarh',
        abéché: 'Abéché',
        kanem: 'Kanem',
        ouaddai: 'Ouaddaï',
        logone: 'Logone',
        borkou: 'Borkou',
        autre: 'Autre'
    },
    categories: ['A', 'B', 'C', 'S'],
    statuts: ['actif', 'surveille', 'archive', 'neutralise'],
    
    // Types d'incidents
    incidentTypes: [
        { value: 'violence', label: 'Violence / Agression', icon: 'ri-sword-line', color: '#DC2626' },
        { value: 'menace', label: 'Menace / Intimidation', icon: 'ri-alarm-warning-line', color: '#F59E0B' },
        { value: 'propagande', label: 'Propagande / Radicalisation', icon: 'ri-broadcast-line', color: '#8B5CF6' },
        { value: 'financement', label: 'Financement suspect', icon: 'ri-money-dollar-circle-line', color: '#10B981' },
        { value: 'deplacement', label: 'Déplacement suspect', icon: 'ri-route-line', color: '#3B82F6' },
        { value: 'contact', label: 'Contact avec organisation', icon: 'ri-group-line', color: '#EC4899' },
        { value: 'recrutement', label: 'Tentative de recrutement', icon: 'ri-user-add-line', color: '#F97316' },
        { value: 'cybercrime', label: 'Activité cybercriminelle', icon: 'ri-computer-line', color: '#06B6D4' },
        { value: 'autre', label: 'Autre', icon: 'ri-more-line', color: '#6B7280' }
    ],
    
    // Lieux d'incidents au Tchad
    lieuxIncidents: [
        "Quartier Moursal, N'Djamena",
        "Marché Central, N'Djamena",
        "Avenue Charles de Gaulle, N'Djamena",
        "Frontière nigériane, Lac Tchad",
        "Bol, Lac Tchad",
        "Quartier Chagoua, N'Djamena",
        "Route de l'Aéroport, N'Djamena",
        "Mosquée Al-Nour, Abéché",
        "Marché de Moundou",
        "Zone frontalière, Borkou",
        "Camp de réfugiés, Ouaddaï",
        "Université de N'Djamena"
    ]
};

// === INITIALISATION ===
document.addEventListener('DOMContentLoaded', () => {
    init();
});

async function init() {
    console.log('🚀 Initialisation du module Personnes Fichées v3.1...');
    
    await verifyPermissions();
    
    await Promise.all([
        fetchStats(),
        fetchPersonnesFichees()
    ]);
    
    initEventListeners();
    initSidebarToggle();
    initTabsNavigation();
    
    logAction('module_access', 'Accès au module Personnes Fichées');
    
    console.log('✅ Module initialisé avec succès');
}

// === PERMISSIONS & SÉCURITÉ ===
async function verifyPermissions() {
    try {
        const mockPermissions = {
            level: 3,
            role: 'Administrator',
            canView: true,
            canCreate: true,
            canUpdate: true,
            canDelete: false,
            canViewSensitive: true,
            canExport: true
        };
        
        state.userPermissions = mockPermissions;
        applyPermissionsToUI();
        
        console.log('✅ Permissions vérifiées:', state.userPermissions);
    } catch (error) {
        console.error('❌ Erreur vérification permissions:', error);
        showToast('Impossible de vérifier vos autorisations', 'error');
    }
}

function applyPermissionsToUI() {
    const { canCreate, canDelete, canExport } = state.userPermissions;
    
    if (!canCreate) {
        const addBtn = document.getElementById('addPersonneBtn');
        if (addBtn) addBtn.style.display = 'none';
    }
    
    if (!canDelete) {
        const deleteBtn = document.getElementById('deleteFicheBtn');
        if (deleteBtn) {
            deleteBtn.disabled = true;
            deleteBtn.title = 'Permission insuffisante';
        }
    }
    
    if (!canExport) {
        const exportBtn = document.getElementById('exportBtn');
        if (exportBtn) exportBtn.style.display = 'none';
    }
}

function maskSensitiveData(data, field) {
    if (!state.userPermissions.canViewSensitive) {
        return `<span class="restricted-access">
            <i class="ri-lock-line"></i> Accès restreint
        </span>`;
    }
    return data || '-';
}

// === SANITIZATION ===
function sanitize(input) {
    if (typeof input !== 'string') return input;
    
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#x27;',
        "/": '&#x2F;'
    };
    
    return input.replace(/[&<>"'/]/gi, (match) => map[match]);
}

// === JOURNALISATION ===
async function logAction(action, details, severity = 'info') {
    const logEntry = {
        timestamp: new Date().toISOString(),
        module: 'personnes-fichees',
        action: action,
        details: details,
        severity: severity,
        userId: 'ANSE-047',
        userLevel: state.userPermissions.level
    };
    
    console.log('📝 Log:', logEntry);
}

// === EVENT LISTENERS ===
function initEventListeners() {
    // Recherche
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            clearTimeout(state.searchTimeout);
            state.searchTimeout = setTimeout(() => {
                state.search = e.target.value;
                state.page = 1;
                fetchPersonnesFichees();
            }, DEBOUNCE_DELAY);
        });
    }
    
    // Filtres
    const filters = ['categorieFilter', 'dangersiteFilter', 'statutFilter', 'zoneFilter', 'elementsFilter'];
    filters.forEach(filterId => {
        const filter = document.getElementById(filterId);
        if (filter) {
            filter.addEventListener('change', (e) => {
                updateFilter(filterId, e.target.value);
            });
        }
    });
    
    // Page size
    const pageSize = document.getElementById('pageSize');
    if (pageSize) {
        pageSize.addEventListener('change', (e) => {
            state.pageSize = parseInt(e.target.value);
            state.page = 1;
            fetchPersonnesFichees();
        });
    }
    
    // Boutons
    document.getElementById('addPersonneBtn')?.addEventListener('click', openNewPersonneModal);
    document.getElementById('exportBtn')?.addEventListener('click', exportData);
    document.getElementById('printBtn')?.addEventListener('click', printData);
}

function updateFilter(filterId, value) {
    switch (filterId) {
        case 'categorieFilter':
            state.categorie = value;
            break;
        case 'dangersiteFilter':
            state.niveauDangerosite = value;
            break;
        case 'statutFilter':
            state.statut = value;
            break;
        case 'zoneFilter':
            state.zone = value;
            break;
        case 'elementsFilter':
            state.hasCondamnation = value === 'condamnation';
            state.hasEnquete = value === 'enquete';
            state.hasIdentiteNumerique = value === 'identite';
            state.hasSignalement = value === 'signalement';
            state.hasIncident = value === 'incident';
            break;
    }
    state.page = 1;
    fetchPersonnesFichees();
}

function initSidebarToggle() {
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    }
}

function initTabsNavigation() {
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const tabName = e.currentTarget.dataset.tab;
            switchTab(tabName);
        });
    });
}

// === API: STATISTICS ===
async function fetchStats() {
    try {
        await new Promise(resolve => setTimeout(resolve, 500));
        
        const data = {
            total: 4523,
            categories: {
                A: 287,
                B: 1204,
                C: 2789,
                S: 243
            },
            dangerosite: {
                critique: 342,
                elevee: 895,
                moyenne: 1876,
                faible: 1410
            },
            statuts: {
                actif: 3456,
                surveille: 789,
                archive: 234,
                neutralise: 44
            },
            nouvelles30j: 127,
            surveillanceActive: 1076,
            incidentsActifs: 89
        };
        
        state.statistics = data;
        renderStats(data);
        
    } catch (error) {
        console.error('❌ Erreur chargement statistiques:', error);
        showToast('Impossible de charger les statistiques', 'error');
    }
}

function renderStats(stats) {
    const statsGrid = document.getElementById('statsGrid');
    if (!statsGrid) return;
    
    statsGrid.innerHTML = `
        <div class="stat-card primary">
            <div class="stat-icon">
                <i class="ri-user-search-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.total)}</div>
                <div class="stat-label">Total Fiches</div>
                <div class="stat-trend up">
                    <i class="ri-arrow-up-line"></i> +${stats.nouvelles30j} ce mois
                </div>
            </div>
        </div>
        
        <div class="stat-card danger">
            <div class="stat-icon">
                <i class="ri-alert-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.categories.A)}</div>
                <div class="stat-label">Catégorie A (Haute menace)</div>
            </div>
        </div>
        
        <div class="stat-card warning">
            <div class="stat-icon">
                <i class="ri-shield-cross-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.dangerosite.critique)}</div>
                <div class="stat-label">Dangerosité Critique</div>
            </div>
        </div>
        
        <div class="stat-card success">
            <div class="stat-icon">
                <i class="ri-time-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.nouvelles30j)}</div>
                <div class="stat-label">Nouvelles Fiches (30j)</div>
            </div>
        </div>
        
        <div class="stat-card info">
            <div class="stat-icon">
                <i class="ri-eye-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.surveillanceActive)}</div>
                <div class="stat-label">Surveillance Active</div>
            </div>
        </div>
    `;
    
    // Quick stats
    document.getElementById('quickStatA').textContent = formatNumber(stats.categories.A);
    document.getElementById('quickStatB').textContent = formatNumber(stats.categories.B);
    document.getElementById('quickStatC').textContent = formatNumber(stats.categories.C);
    document.getElementById('quickStatS').textContent = formatNumber(stats.categories.S);
    document.getElementById('quickStatIncidents').textContent = formatNumber(stats.incidentsActifs);
}

// === API: FETCH PERSONNES FICHÉES ===
async function fetchPersonnesFichees() {
    state.loading = true;
    updateLoadingState();
    
    try {
        await new Promise(resolve => setTimeout(resolve, 800));
        
        const data = {
            items: generateMockPersonnes(state.page, state.pageSize),
            total: 4523,
            page: state.page,
            pageSize: state.pageSize,
            totalPages: Math.ceil(4523 / state.pageSize)
        };
        
        state.personnes = data.items;
        state.totalItems = data.total;
        
        renderTable(data.items);
        renderPagination(data.total, data.page, data.pageSize);
        
        state.loading = false;
        updateLoadingState();
        
    } catch (error) {
        console.error('❌ Erreur chargement personnes:', error);
        state.loading = false;
        updateLoadingState();
        showToast('Impossible de charger les données', 'error');
    }
}

function updateLoadingState() {
    const tbody = document.getElementById('tableBody');
    if (state.loading && tbody) {
        tbody.innerHTML = `
            <tr>
                <td colspan="11" class="loading-cell">
                    <div class="loading-spinner"></div>
                    Chargement des données...
                </td>
            </tr>
        `;
    }
}

// === RENDER TABLE ===
function renderTable(personnes) {
    const tbody = document.getElementById('tableBody');
    if (!tbody) return;
    
    if (personnes.length === 0) {
        tbody.innerHTML = `
            <tr>
                <td colspan="11" class="empty-cell">
                    <div class="empty-state">
                        <i class="ri-inbox-line"></i>
                        <p>Aucune personne fichée trouvée</p>
                    </div>
                </td>
            </tr>
        `;
        return;
    }
    
    const rows = personnes.map(personne => {
        const categorie = getCategorieBadge(personne.categorie);
        const dangerosite = getDangerositeBadge(personne.dangerosite);
        const statut = getStatutBadge(personne.statut);
        const elementsLies = getElementsLiesBadges(personne);
        
        return `
            <tr onclick="openFiche('${personne.id}')" class="clickable-row">
                <td><code>${sanitize(personne.id)}</code></td>
                <td>
                    <div class="identity-cell">
                        <div class="identity-avatar ${personne.sexe === 'F' ? 'female' : 'male'}">
                            ${personne.nom.charAt(0)}${personne.prenom.charAt(0)}
                        </div>
                        <div class="identity-info">
                            <strong>${sanitize(personne.nom)} ${sanitize(personne.prenom)}</strong>
                            <small>${sanitize(personne.nationalite || 'Tchadienne')}</small>
                        </div>
                    </div>
                </td>
                <td>${personne.alias ? `<span class="alias-text">${sanitize(personne.alias)}</span>` : '<span class="text-muted">-</span>'}</td>
                <td>${personne.age} ans</td>
                <td>${categorie}</td>
                <td>${dangerosite}</td>
                <td><span class="zone-text"><i class="ri-map-pin-line"></i> ${sanitize(getZoneLabel(personne.zone))}</span></td>
                <td>${elementsLies}</td>
                <td>${formatDate(personne.derniereActivite)}</td>
                <td>${statut}</td>
                <td onclick="event.stopPropagation()">
                    <div class="action-buttons">
                        <button class="action-btn view" onclick="openFiche('${personne.id}')" title="Voir la fiche">
                            <i class="ri-eye-line"></i>
                        </button>
                        ${state.userPermissions.canUpdate ? `
                        <button class="action-btn edit" onclick="editPersonneFromList('${personne.id}')" title="Modifier">
                            <i class="ri-edit-line"></i>
                        </button>
                        ` : ''}
                    </div>
                </td>
            </tr>
        `;
    }).join('');
    
    tbody.innerHTML = rows;
}

// === BADGES HELPERS ===
function getCategorieBadge(categorie) {
    const config = {
        A: { label: 'A', class: 'cat-a', title: 'Haute menace' },
        B: { label: 'B', class: 'cat-b', title: 'Menace modérée' },
        C: { label: 'C', class: 'cat-c', title: 'Surveillance' },
        S: { label: 'S', class: 'cat-s', title: 'Spécial' }
    };
    const cfg = config[categorie] || config.C;
    return `<span class="categorie-badge ${cfg.class}" title="${cfg.title}">${cfg.label}</span>`;
}

function getDangerositeBadge(level) {
    const config = {
        5: { label: 'Critique', class: 'danger-5' },
        4: { label: 'Élevé', class: 'danger-4' },
        3: { label: 'Moyen', class: 'danger-3' },
        2: { label: 'Faible', class: 'danger-2' },
        1: { label: 'Minimal', class: 'danger-1' }
    };
    const cfg = config[level] || config[1];
    return `
        <div class="threat-level">
            <div class="threat-dots">
                ${Array(5).fill(0).map((_, i) => `
                    <span class="threat-dot ${i < level ? 'filled level-' + level : ''}"></span>
                `).join('')}
            </div>
        </div>
    `;
}

function getStatutBadge(statut) {
    const config = {
        actif: { label: 'Actif', class: 'actif' },
        surveille: { label: 'Surveillance', class: 'surveillance' },
        archive: { label: 'Archivé', class: 'archive' },
        neutralise: { label: 'Neutralisé', class: 'neutralise' }
    };
    const cfg = config[statut] || config.actif;
    return `<span class="status-badge ${cfg.class}">${cfg.label}</span>`;
}

function getElementsLiesBadges(personne) {
    const elements = [];
    
    if (personne.nbIdentitesNumeriques > 0) {
        elements.push(`<span class="element-badge" title="Identités numériques"><i class="ri-smartphone-line"></i>${personne.nbIdentitesNumeriques}</span>`);
    }
    if (personne.nbContenus > 0) {
        elements.push(`<span class="element-badge" title="Contenus"><i class="ri-file-text-line"></i>${personne.nbContenus}</span>`);
    }
    if (personne.nbCondamnations > 0) {
        elements.push(`<span class="element-badge warning" title="Condamnations"><i class="ri-scales-line"></i>${personne.nbCondamnations}</span>`);
    }
    if (personne.nbEnquetes > 0) {
        elements.push(`<span class="element-badge info" title="Enquêtes"><i class="ri-search-line"></i>${personne.nbEnquetes}</span>`);
    }
    if (personne.nbSignalements > 0) {
        elements.push(`<span class="element-badge danger" title="Signalements"><i class="ri-alarm-warning-line"></i>${personne.nbSignalements}</span>`);
    }
    if (personne.nbIncidents > 0) {
        elements.push(`<span class="element-badge danger" title="Incidents"><i class="ri-error-warning-line"></i>${personne.nbIncidents}</span>`);
    }
    
    return elements.length > 0 ? `<div class="elements-badges">${elements.join('')}</div>` : '<span class="text-muted">-</span>';
}

function getZoneLabel(zone) {
    return MockDataTchad.zonesLabels[zone] || zone || '-';
}

// === RENDER PAGINATION ===
function renderPagination(total, currentPage, pageSize) {
    const totalPages = Math.ceil(total / pageSize);
    const pagination = document.getElementById('pagination');
    
    if (!pagination) return;
    
    document.getElementById('startEntry').textContent = ((currentPage - 1) * pageSize) + 1;
    document.getElementById('endEntry').textContent = Math.min(currentPage * pageSize, total);
    document.getElementById('totalEntries').textContent = formatNumber(total);
    
    let html = `
        <button class="page-btn" onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
            <i class="ri-arrow-left-s-line"></i>
        </button>
    `;
    
    const maxButtons = 7;
    let startPage = Math.max(1, currentPage - Math.floor(maxButtons / 2));
    let endPage = Math.min(totalPages, startPage + maxButtons - 1);
    
    if (endPage - startPage < maxButtons - 1) {
        startPage = Math.max(1, endPage - maxButtons + 1);
    }
    
    if (startPage > 1) {
        html += `<button class="page-btn" onclick="changePage(1)">1</button>`;
        if (startPage > 2) html += `<button class="page-btn" disabled>...</button>`;
    }
    
    for (let i = startPage; i <= endPage; i++) {
        html += `<button class="page-btn ${i === currentPage ? 'active' : ''}" onclick="changePage(${i})">${i}</button>`;
    }
    
    if (endPage < totalPages) {
        if (endPage < totalPages - 1) html += `<button class="page-btn" disabled>...</button>`;
        html += `<button class="page-btn" onclick="changePage(${totalPages})">${totalPages}</button>`;
    }
    
    html += `
        <button class="page-btn" onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>
            <i class="ri-arrow-right-s-line"></i>
        </button>
    `;
    
    pagination.innerHTML = html;
}

function changePage(page) {
    if (page < 1 || page > Math.ceil(state.totalItems / state.pageSize)) return;
    state.page = page;
    fetchPersonnesFichees();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// === OPEN FICHE MODAL ===
async function openFiche(id) {
    try {
        state.currentPersonne = null;
        state.currentTab = 'resume';
        
        const modal = document.getElementById('ficheModal');
        if (modal) modal.style.display = 'flex';
        
        document.getElementById('ficheTitle').textContent = 'Chargement...';
        
        await new Promise(resolve => setTimeout(resolve, 600));
        const data = generateMockPersonneDetails(id);
        
        state.currentPersonne = data;
        
        // Header
        document.getElementById('ficheTitle').textContent = `${data.nom} ${data.prenom}`;
        document.getElementById('ficheAvatar').innerHTML = `<span>${data.nom.charAt(0)}${data.prenom.charAt(0)}</span>`;
        document.getElementById('ficheCategorie').innerHTML = getCategorieBadge(data.categorie);
        document.getElementById('ficheStatut').innerHTML = getStatutBadge(data.statut);
        document.getElementById('ficheDangerosite').innerHTML = getDangerositeBadge(data.dangerosite);
        
        // Badge incidents
        document.getElementById('incidentsCount').textContent = data.incidents?.length || 0;
        
        // Charger l'onglet par défaut
        switchTab('resume');
        
        logAction('view_fiche', `Consultation fiche ${data.nom} ${data.prenom} (ID: ${data.id})`);
        
    } catch (error) {
        console.error('❌ Erreur chargement fiche:', error);
        showToast('Impossible de charger la fiche', 'error');
        closeFicheModal();
    }
}

function closeFicheModal() {
    const modal = document.getElementById('ficheModal');
    if (modal) modal.style.display = 'none';
    state.currentPersonne = null;
}

// === TABS MANAGEMENT ===
function switchTab(tabName) {
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
    
    const tabBtn = document.querySelector(`[data-tab="${tabName}"]`);
    const tabContent = document.getElementById(`tab-${tabName}`);
    
    if (tabBtn) tabBtn.classList.add('active');
    if (tabContent) tabContent.classList.add('active');
    
    state.currentTab = tabName;
    loadTabContent(tabName);
}

async function loadTabContent(tabName) {
    if (!state.currentPersonne) return;
    
    const personne = state.currentPersonne;
    
    switch (tabName) {
        case 'resume':
            renderResumeTab(personne);
            break;
        case 'identites':
            renderIdentitesTab(personne);
            break;
        case 'etablissements':
            renderEtablissementsTab(personne);
            break;
        case 'affiliations':
            renderAffiliationsTab(personne);
            break;
        case 'incidents':
            renderIncidentsTab(personne);
            break;
        case 'condamnations':
            renderCondamnationsTab(personne);
            break;
        case 'enquetes':
            renderEnquetesTab(personne);
            break;
        case 'signalements':
            renderSignalementsTab(personne);
            break;
        case 'contenus':
            renderContenusTab(personne);
            break;
        case 'historique':
            renderHistoriqueTab(personne);
            break;
    }
    
    logAction('tab_view', `Consultation onglet ${tabName} - Fiche ${personne.id}`);
}

// === TAB: RÉSUMÉ ===
function renderResumeTab(data) {
    const content = document.getElementById('resumeContent');
    if (!content) return;
    
    content.innerHTML = `
        <div class="resume-grid">
            <div class="resume-section">
                <h4 class="resume-section-title"><i class="ri-user-line"></i> Identité</h4>
                <div class="detail-grid">
                    <div class="detail-item">
                        <span class="detail-label">Nom complet</span>
                        <span class="detail-value">${sanitize(data.nom)} ${sanitize(data.prenom)}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Alias / Pseudo</span>
                        <span class="detail-value">${data.alias ? sanitize(data.alias) : '-'}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Date de naissance</span>
                        <span class="detail-value">${formatDate(data.dateNaissance)} (${data.age} ans)</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Sexe</span>
                        <span class="detail-value">${data.sexe === 'M' ? 'Masculin' : data.sexe === 'F' ? 'Féminin' : '-'}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Nationalité</span>
                        <span class="detail-value">${sanitize(data.nationalite)}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Zone principale</span>
                        <span class="detail-value"><i class="ri-map-pin-line"></i> ${getZoneLabel(data.zone)}</span>
                    </div>
                </div>
            </div>
            
            <div class="resume-section">
                <h4 class="resume-section-title"><i class="ri-shield-star-line"></i> Classification</h4>
                <div class="classification-grid">
                    <div class="classification-item">
                        <span class="classification-label">Catégorie</span>
                        ${getCategorieBadge(data.categorie)}
                    </div>
                    <div class="classification-item">
                        <span class="classification-label">Dangerosité</span>
                        ${getDangerositeBadge(data.dangerosite)}
                    </div>
                    <div class="classification-item">
                        <span class="classification-label">Statut</span>
                        ${getStatutBadge(data.statut)}
                    </div>
                </div>
            </div>
            
            <div class="resume-section sensitive-section">
                <h4 class="resume-section-title"><i class="ri-lock-line"></i> Informations Sensibles</h4>
                <div class="detail-grid">
                    <div class="detail-item">
                        <span class="detail-label">Appartenance politique</span>
                        <span class="detail-value">${maskSensitiveData(data.appartenancePolitique)}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Appartenance religieuse</span>
                        <span class="detail-value">${maskSensitiveData(data.appartenanceReligieuse)}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Groupe ethnique</span>
                        <span class="detail-value">${maskSensitiveData(data.groupeEthnique)}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Idéologie</span>
                        <span class="detail-value">${maskSensitiveData(data.ideologie)}</span>
                    </div>
                </div>
            </div>
            
            <div class="resume-section">
                <h4 class="resume-section-title"><i class="ri-information-line"></i> Informations complémentaires</h4>
                <div class="detail-item full-width">
                    <span class="detail-label">Signes distinctifs</span>
                    <span class="detail-value">${data.signesDistinctifs || '-'}</span>
                </div>
                <div class="detail-item full-width">
                    <span class="detail-label">Observations</span>
                    <span class="detail-value">${data.observations || '-'}</span>
                </div>
            </div>
            
            <div class="resume-section">
                <h4 class="resume-section-title"><i class="ri-bar-chart-line"></i> Statistiques</h4>
                <div class="stats-mini-grid">
                    <div class="stat-mini">
                        <span class="stat-mini-value">${data.identitesNumeriques?.length || 0}</span>
                        <span class="stat-mini-label">Identités numériques</span>
                    </div>
                    <div class="stat-mini">
                        <span class="stat-mini-value">${data.incidents?.length || 0}</span>
                        <span class="stat-mini-label">Incidents</span>
                    </div>
                    <div class="stat-mini">
                        <span class="stat-mini-value">${data.condamnations?.length || 0}</span>
                        <span class="stat-mini-label">Condamnations</span>
                    </div>
                    <div class="stat-mini">
                        <span class="stat-mini-value">${data.enquetes?.length || 0}</span>
                        <span class="stat-mini-label">Enquêtes</span>
                    </div>
                    <div class="stat-mini">
                        <span class="stat-mini-value">${data.signalements?.length || 0}</span>
                        <span class="stat-mini-label">Signalements</span>
                    </div>
                    <div class="stat-mini">
                        <span class="stat-mini-value">${data.contenus?.length || 0}</span>
                        <span class="stat-mini-label">Contenus</span>
                    </div>
                </div>
            </div>
        </div>
    `;
}

// === TAB: INCIDENTS (NOUVEAU) ===
function renderIncidentsTab(data) {
    const statsContainer = document.getElementById('incidentsStats');
    const contentContainer = document.getElementById('incidentsContent');
    
    if (!statsContainer || !contentContainer) return;
    
    const incidents = data.incidents || [];
    
    // Statistiques des incidents
    const incidentsByType = {};
    const incidentsByGravity = { 5: 0, 4: 0, 3: 0, 2: 0, 1: 0 };
    
    incidents.forEach(inc => {
        incidentsByType[inc.type] = (incidentsByType[inc.type] || 0) + 1;
        incidentsByGravity[inc.gravite] = (incidentsByGravity[inc.gravite] || 0) + 1;
    });
    
    statsContainer.innerHTML = `
        <div class="incidents-stats-grid">
            <div class="incident-stat-card total">
                <div class="incident-stat-icon">
                    <i class="ri-error-warning-line"></i>
                </div>
                <div class="incident-stat-content">
                    <span class="incident-stat-value">${incidents.length}</span>
                    <span class="incident-stat-label">Total incidents</span>
                </div>
            </div>
            <div class="incident-stat-card critical">
                <div class="incident-stat-icon">
                    <i class="ri-alarm-warning-line"></i>
                </div>
                <div class="incident-stat-content">
                    <span class="incident-stat-value">${incidentsByGravity[5] + incidentsByGravity[4]}</span>
                    <span class="incident-stat-label">Gravité élevée</span>
                </div>
            </div>
            <div class="incident-stat-card recent">
                <div class="incident-stat-icon">
                    <i class="ri-time-line"></i>
                </div>
                <div class="incident-stat-content">
                    <span class="incident-stat-value">${incidents.filter(i => isRecent(i.date)).length}</span>
                    <span class="incident-stat-label">30 derniers jours</span>
                </div>
            </div>
            <div class="incident-stat-card resolved">
                <div class="incident-stat-icon">
                    <i class="ri-checkbox-circle-line"></i>
                </div>
                <div class="incident-stat-content">
                    <span class="incident-stat-value">${incidents.filter(i => i.statut === 'resolu').length}</span>
                    <span class="incident-stat-label">Résolus</span>
                </div>
            </div>
        </div>
    `;
    
    // Liste des incidents
    if (incidents.length === 0) {
        contentContainer.innerHTML = `
            <div class="empty-state">
                <i class="ri-shield-check-line"></i>
                <p>Aucun incident enregistré pour cette personne</p>
            </div>
        `;
        return;
    }
    
    contentContainer.innerHTML = `
        <div class="incidents-list">
            ${incidents.map(incident => {
                const typeConfig = MockDataTchad.incidentTypes.find(t => t.value === incident.type) || MockDataTchad.incidentTypes[8];
                return `
                    <div class="incident-card ${incident.gravite >= 4 ? 'critical' : ''}" onclick="viewIncident('${incident.id}')">
                        <div class="incident-header">
                            <div class="incident-type" style="background: ${typeConfig.color}20; color: ${typeConfig.color}">
                                <i class="${typeConfig.icon}"></i>
                                <span>${typeConfig.label}</span>
                            </div>
                            <div class="incident-meta">
                                <span class="incident-id">${incident.reference}</span>
                                <span class="incident-date"><i class="ri-calendar-line"></i> ${formatDateTime(incident.date)}</span>
                            </div>
                        </div>
                        <div class="incident-body">
                            <p class="incident-description">${sanitize(incident.description)}</p>
                            <div class="incident-location">
                                <i class="ri-map-pin-line"></i> ${sanitize(incident.localisation)}
                            </div>
                        </div>
                        <div class="incident-footer">
                            <div class="incident-gravity">
                                <span class="gravity-label">Gravité:</span>
                                <div class="gravity-dots">
                                    ${Array(5).fill(0).map((_, i) => `
                                        <span class="gravity-dot ${i < incident.gravite ? 'filled level-' + incident.gravite : ''}"></span>
                                    `).join('')}
                                </div>
                            </div>
                            <span class="incident-status status-badge ${incident.statut}">${getIncidentStatusLabel(incident.statut)}</span>
                        </div>
                    </div>
                `;
            }).join('')}
        </div>
    `;
}

function getIncidentStatusLabel(statut) {
    const labels = {
        'nouveau': 'Nouveau',
        'en_cours': 'En cours',
        'resolu': 'Résolu',
        'clos': 'Clos'
    };
    return labels[statut] || statut;
}

function isRecent(dateStr) {
    const date = new Date(dateStr);
    const now = new Date();
    const diffDays = (now - date) / (1000 * 60 * 60 * 24);
    return diffDays <= 30;
}

// === TAB: IDENTITES NUMERIQUES ===
function renderIdentitesTab(data) {
    const content = document.getElementById('identitesContent');
    if (!content) return;
    
    const identites = data.identitesNumeriques || [];
    
    if (identites.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-smartphone-line"></i>
                <p>Aucune identité numérique enregistrée</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="identites-grid">
            ${identites.map(id => `
                <div class="identite-card ${id.actif ? 'active' : 'inactive'}">
                    <div class="identite-header">
                        <div class="identite-platform">
                            <i class="ri-${getPlatformIcon(id.plateforme)}-fill"></i>
                            <span>${id.plateforme}</span>
                        </div>
                        <span class="identite-status ${id.actif ? 'active' : 'inactive'}">
                            ${id.actif ? 'Actif' : 'Inactif'}
                        </span>
                    </div>
                    <div class="identite-body">
                        <div class="identite-pseudo">${sanitize(id.pseudo)}</div>
                        <div class="identite-meta">
                            <span><i class="ri-calendar-line"></i> Découvert le ${formatDate(id.dateDecouverte)}</span>
                            <span><i class="ri-file-text-line"></i> ${id.nbContenus} contenus</span>
                        </div>
                    </div>
                    <div class="identite-actions">
                        <button class="btn btn-sm btn-secondary" onclick="viewIdentite('${id.id}')">
                            <i class="ri-eye-line"></i> Voir
                        </button>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}

function getPlatformIcon(platform) {
    const icons = {
        'Facebook': 'facebook',
        'Twitter': 'twitter',
        'Telegram': 'telegram',
        'WhatsApp': 'whatsapp',
        'Instagram': 'instagram',
        'YouTube': 'youtube',
        'TikTok': 'tiktok'
    };
    return icons[platform] || 'global';
}

// === TAB: ETABLISSEMENTS ===
function renderEtablissementsTab(data) {
    const content = document.getElementById('etablissementsContent');
    if (!content) return;
    
    const etablissements = data.etablissements || [];
    
    if (etablissements.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-map-pin-line"></i>
                <p>Aucun établissement fréquenté enregistré</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="etablissements-list">
            ${etablissements.map(etab => `
                <div class="etablissement-card">
                    <div class="etablissement-icon">
                        <i class="ri-building-line"></i>
                    </div>
                    <div class="etablissement-info">
                        <h5>${sanitize(etab.nom)}</h5>
                        <span class="etablissement-type">${sanitize(etab.type)}</span>
                        <p class="etablissement-address"><i class="ri-map-pin-line"></i> ${sanitize(etab.adresse)}</p>
                        <span class="etablissement-periode"><i class="ri-time-line"></i> ${sanitize(etab.periode)}</span>
                    </div>
                    <div class="etablissement-actions">
                        <button class="btn btn-sm btn-secondary" onclick="viewEtablissement('${etab.id}')">
                            <i class="ri-eye-line"></i>
                        </button>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}

// === TAB: AFFILIATIONS ===
function renderAffiliationsTab(data) {
    const content = document.getElementById('affiliationsContent');
    if (!content) return;
    
    const affiliations = data.affiliations || [];
    
    if (affiliations.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-links-line"></i>
                <p>Aucune affiliation enregistrée</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="affiliations-list">
            ${affiliations.map(aff => `
                <div class="affiliation-card">
                    <div class="affiliation-type-badge ${aff.type}">
                        ${getAffiliationTypeLabel(aff.type)}
                    </div>
                    <div class="affiliation-info">
                        <div class="affiliation-person">
                            <strong>${sanitize(aff.personneLiee.nom)} ${sanitize(aff.personneLiee.prenom)}</strong>
                            <code>${aff.personneLiee.id}</code>
                        </div>
                        <p class="affiliation-comment">${sanitize(aff.commentaire)}</p>
                        <div class="affiliation-meta">
                            <span><i class="ri-calendar-line"></i> Depuis ${formatDate(aff.dateDebut)}</span>
                            <span>Intensité: ${aff.intensite}/5</span>
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}

function getAffiliationTypeLabel(type) {
    const labels = {
        familiale: 'Familiale',
        politique: 'Politique',
        religieuse: 'Religieuse',
        professionnelle: 'Professionnelle',
        amicale: 'Amicale'
    };
    return labels[type] || type;
}

// === TAB: CONDAMNATIONS ===
function renderCondamnationsTab(data) {
    const content = document.getElementById('condamnationsContent');
    if (!content) return;
    
    const condamnations = data.condamnations || [];
    
    if (condamnations.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-scales-line"></i>
                <p>Aucune condamnation enregistrée</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="condamnations-list">
            ${condamnations.map(cond => `
                <div class="condamnation-card">
                    <div class="condamnation-header">
                        <code>${cond.reference}</code>
                        <span class="status-badge ${cond.statut.toLowerCase()}">${cond.statut}</span>
                    </div>
                    <div class="condamnation-body">
                        <div class="condamnation-info">
                            <span class="condamnation-juridiction"><i class="ri-government-line"></i> ${sanitize(cond.juridiction)}</span>
                            <span class="condamnation-date"><i class="ri-calendar-line"></i> ${formatDate(cond.dateJugement)}</span>
                        </div>
                        <p class="condamnation-motif"><strong>Motif:</strong> ${sanitize(cond.motif)}</p>
                        <p class="condamnation-peine"><strong>Peine:</strong> ${sanitize(cond.peine)}</p>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}

// === TAB: ENQUETES ===
function renderEnquetesTab(data) {
    const content = document.getElementById('enquetesContent');
    if (!content) return;
    
    const enquetes = data.enquetes || [];
    
    if (enquetes.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-search-line"></i>
                <p>Aucune enquête associée</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="enquetes-list">
            ${enquetes.map(enq => `
                <div class="enquete-card">
                    <div class="enquete-header">
                        <code>${enq.reference}</code>
                        <span class="status-badge ${enq.statut}">${getEnqueteStatusLabel(enq.statut)}</span>
                    </div>
                    <div class="enquete-body">
                        <h5>${sanitize(enq.titre)}</h5>
                        <div class="enquete-meta">
                            <span><i class="ri-calendar-line"></i> Début: ${formatDate(enq.dateDebut)}</span>
                            <span><i class="ri-user-line"></i> ${sanitize(enq.responsable)}</span>
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}

function getEnqueteStatusLabel(statut) {
    const labels = {
        'en_cours': 'En cours',
        'terminee': 'Terminée',
        'suspendue': 'Suspendue'
    };
    return labels[statut] || statut;
}

// === TAB: SIGNALEMENTS ===
function renderSignalementsTab(data) {
    const content = document.getElementById('signalementsContent');
    if (!content) return;
    
    const signalements = data.signalements || [];
    
    if (signalements.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-alarm-warning-line"></i>
                <p>Aucun signalement enregistré</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="signalements-list">
            ${signalements.map(sig => `
                <div class="signalement-card">
                    <div class="signalement-header">
                        <span class="signalement-date"><i class="ri-time-line"></i> ${formatDateTime(sig.dateReception)}</span>
                        <span class="status-badge ${sig.statut === 'Traité' ? 'traite' : 'en_cours'}">${sig.statut}</span>
                    </div>
                    <p class="signalement-description">${sanitize(sig.description)}</p>
                </div>
            `).join('')}
        </div>
    `;
}

// === TAB: CONTENUS ===
function renderContenusTab(data) {
    const content = document.getElementById('contenusContent');
    if (!content) return;
    
    const contenus = data.contenus || [];
    
    if (contenus.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-file-text-line"></i>
                <p>Aucun contenu analysé</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="contenus-grid">
            ${contenus.map(cont => `
                <div class="contenu-card gravite-${cont.gravite}">
                    <div class="contenu-header">
                        <span class="contenu-platform"><i class="ri-${getPlatformIcon(cont.plateforme)}-fill"></i> ${cont.plateforme}</span>
                        <span class="contenu-type">${cont.type}</span>
                    </div>
                    <div class="contenu-body">
                        <div class="contenu-dates">
                            <span><i class="ri-calendar-line"></i> Publié: ${formatDateTime(cont.datePublication)}</span>
                            <span><i class="ri-eye-line"></i> Détecté: ${formatDateTime(cont.dateDetection)}</span>
                        </div>
                    </div>
                    <div class="contenu-footer">
                        <div class="contenu-gravite">
                            <span>Gravité:</span>
                            <div class="gravity-dots">
                                ${Array(5).fill(0).map((_, i) => `
                                    <span class="gravity-dot ${i < cont.gravite ? 'filled level-' + cont.gravite : ''}"></span>
                                `).join('')}
                            </div>
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}

// === TAB: HISTORIQUE ===
function renderHistoriqueTab(data) {
    const content = document.getElementById('historiqueContent');
    if (!content) return;
    
    const historique = data.historique || [];
    
    if (historique.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-history-line"></i>
                <p>Aucun historique disponible</p>
            </div>
        `;
        return;
    }
    
    content.innerHTML = `
        <div class="timeline">
            ${historique.map(entry => `
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <span class="timeline-date">${formatDateTime(entry.date)}</span>
                        <p class="timeline-action">${sanitize(entry.action)}</p>
                        <span class="timeline-user"><i class="ri-user-line"></i> ${sanitize(entry.user)}</span>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}

// === INCIDENT FUNCTIONS ===
function addIncident() {
    if (!state.currentPersonne) return;
    
    document.getElementById('incidentPersonneId').value = state.currentPersonne.id;
    document.getElementById('incidentForm').reset();
    document.getElementById('addIncidentModal').style.display = 'flex';
    
    logAction('open_add_incident', `Ouverture formulaire incident - Fiche ${state.currentPersonne.id}`);
}

function closeAddIncidentModal() {
    document.getElementById('addIncidentModal').style.display = 'none';
}

function viewIncident(id) {
    const incident = state.currentPersonne?.incidents?.find(i => i.id === id);
    if (!incident) return;
    
    state.currentIncident = incident;
    
    const typeConfig = MockDataTchad.incidentTypes.find(t => t.value === incident.type) || MockDataTchad.incidentTypes[8];
    
    document.getElementById('incidentModalTitle').textContent = incident.reference;
    document.getElementById('incidentModalBody').innerHTML = `
        <div class="incident-detail">
            <div class="incident-detail-header">
                <div class="incident-type-large" style="background: ${typeConfig.color}20; color: ${typeConfig.color}">
                    <i class="${typeConfig.icon}"></i>
                    <span>${typeConfig.label}</span>
                </div>
                <span class="status-badge ${incident.statut}">${getIncidentStatusLabel(incident.statut)}</span>
            </div>
            
            <div class="incident-detail-grid">
                <div class="detail-item">
                    <span class="detail-label">Date de l'incident</span>
                    <span class="detail-value">${formatDateTime(incident.date)}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Localisation</span>
                    <span class="detail-value"><i class="ri-map-pin-line"></i> ${sanitize(incident.localisation)}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Gravité</span>
                    <span class="detail-value">
                        <div class="gravity-dots large">
                            ${Array(5).fill(0).map((_, i) => `
                                <span class="gravity-dot ${i < incident.gravite ? 'filled level-' + incident.gravite : ''}"></span>
                            `).join('')}
                        </div>
                        <span class="gravity-text">(${incident.gravite}/5)</span>
                    </span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Signalé par</span>
                    <span class="detail-value">${sanitize(incident.signalePar)}</span>
                </div>
            </div>
            
            <div class="detail-item full-width">
                <span class="detail-label">Description</span>
                <p class="detail-value description">${sanitize(incident.description)}</p>
            </div>
            
            ${incident.personnesImpliquees?.length > 0 ? `
            <div class="detail-item full-width">
                <span class="detail-label">Autres personnes impliquées</span>
                <div class="impliques-list">
                    ${incident.personnesImpliquees.map(p => `
                        <span class="implique-badge" onclick="openFiche('${p.id}')">${p.nom} ${p.prenom}</span>
                    `).join('')}
                </div>
            </div>
            ` : ''}
            
            ${incident.notes ? `
            <div class="detail-item full-width sensitive-section">
                <span class="detail-label"><i class="ri-lock-line"></i> Notes internes</span>
                <p class="detail-value">${sanitize(incident.notes)}</p>
            </div>
            ` : ''}
        </div>
    `;
    
    document.getElementById('incidentModal').style.display = 'flex';
    logAction('view_incident', `Consultation incident ${incident.reference}`);
}

function closeIncidentModal() {
    document.getElementById('incidentModal').style.display = 'none';
    state.currentIncident = null;
}

function editIncident() {
    showToast('Fonction de modification en cours de développement', 'info');
}

async function submitIncident() {
    const form = document.getElementById('incidentForm');
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }
    
    showToast('Incident enregistré avec succès', 'success');
    closeAddIncidentModal();
    
    // Refresh incidents tab
    if (state.currentPersonne) {
        renderIncidentsTab(state.currentPersonne);
    }
    
    logAction('create_incident', `Nouvel incident créé pour ${state.currentPersonne?.id}`);
}

// === MODAL FUNCTIONS ===
function openNewPersonneModal() {
    document.getElementById('personneForm').reset();
    document.getElementById('personneId').value = '';
    document.getElementById('personneModalTitle').textContent = 'Nouvelle Fiche';
    document.getElementById('personneModal').style.display = 'flex';
}

function closePersonneModal() {
    document.getElementById('personneModal').style.display = 'none';
}

function editPersonne() {
    if (!state.currentPersonne) return;
    closeFicheModal();
    // Remplir le formulaire avec les données actuelles
    document.getElementById('personneId').value = state.currentPersonne.id;
    document.getElementById('nom').value = state.currentPersonne.nom;
    document.getElementById('prenom').value = state.currentPersonne.prenom;
    // ... autres champs
    document.getElementById('personneModalTitle').textContent = 'Modifier la Fiche';
    document.getElementById('personneModal').style.display = 'flex';
}

function editPersonneFromList(id) {
    openFiche(id).then(() => editPersonne());
}

async function submitPersonne() {
    const form = document.getElementById('personneForm');
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }
    
    showToast('Fiche enregistrée avec succès', 'success');
    closePersonneModal();
    fetchPersonnesFichees();
}

function deletePersonne() {
    if (!state.currentPersonne) return;
    
    if (confirm(`Êtes-vous sûr de vouloir supprimer la fiche de ${state.currentPersonne.nom} ${state.currentPersonne.prenom} ?`)) {
        showToast('Suppression effectuée', 'success');
        closeFicheModal();
        fetchPersonnesFichees();
    }
}

function exportFiche() {
    showToast('Export PDF en cours de génération...', 'info');
    logAction('export_fiche', `Export fiche ${state.currentPersonne?.id}`);
}

function exportData() {
    showToast('Export des données en cours...', 'info');
    logAction('export_data', 'Export liste personnes fichées');
}

function printData() {
    window.print();
}

// === UTILITY FUNCTIONS ===
function formatNumber(num) {
    return num?.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ') || '0';
}

function formatDate(dateStr) {
    if (!dateStr) return '-';
    const date = new Date(dateStr);
    return date.toLocaleDateString('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    });
}

function formatDateTime(dateStr) {
    if (!dateStr) return '-';
    const date = new Date(dateStr);
    return date.toLocaleDateString('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
}

// === TOAST NOTIFICATIONS ===
function showToast(message, type = 'info') {
    const container = document.getElementById('toastContainer');
    if (!container) return;
    
    const icons = {
        success: 'ri-checkbox-circle-line',
        error: 'ri-error-warning-line',
        warning: 'ri-alarm-warning-line',
        info: 'ri-information-line'
    };
    
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.innerHTML = `
        <i class="${icons[type] || icons.info}"></i>
        <span class="toast-message">${message}</span>
        <button class="toast-close" onclick="this.parentElement.remove()">
            <i class="ri-close-line"></i>
        </button>
    `;
    
    container.appendChild(toast);
    setTimeout(() => toast.classList.add('show'), 10);
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    }, 4000);
}

// === MOCK DATA GENERATORS ===
function generateMockPersonnes(page, pageSize) {
    const personnes = [];
    const startIndex = (page - 1) * pageSize;
    
    for (let i = 0; i < pageSize; i++) {
        const idx = startIndex + i;
        if (idx >= 4523) break;
        
        const categorie = MockDataTchad.categories[idx % MockDataTchad.categories.length];
        const dangerosite = Math.floor(Math.random() * 5) + 1;
        const sexe = idx % 4 === 0 ? 'F' : 'M';
        
        personnes.push({
            id: `PF-${String(idx + 1).padStart(6, '0')}`,
            nom: MockDataTchad.noms[idx % MockDataTchad.noms.length],
            prenom: MockDataTchad.prenoms[idx % MockDataTchad.prenoms.length],
            alias: idx % 3 === 0 ? `Al-${['Mahdi', 'Hassan', 'Amir', 'Fatiha', 'Khalid'][idx % 5]}` : null,
            age: 20 + (idx % 50),
            dateNaissance: new Date(1970 + (idx % 50), idx % 12, (idx % 28) + 1).toISOString().split('T')[0],
            sexe: sexe,
            nationalite: 'Tchadienne',
            categorie: categorie,
            dangerosite: dangerosite,
            statut: MockDataTchad.statuts[idx % MockDataTchad.statuts.length],
            zone: MockDataTchad.zones[idx % MockDataTchad.zones.length],
            derniereActivite: new Date(2025, 10, (idx % 30) + 1).toISOString(),
            dateCreation: new Date(2020 + (idx % 5), idx % 12, (idx % 28) + 1).toISOString().split('T')[0],
            nbIdentitesNumeriques: Math.floor(Math.random() * 5),
            nbContenus: Math.floor(Math.random() * 20),
            nbCondamnations: Math.floor(Math.random() * 3),
            nbEnquetes: Math.floor(Math.random() * 2),
            nbSignalements: Math.floor(Math.random() * 5),
            nbIncidents: Math.floor(Math.random() * 4)
        });
    }
    
    return personnes;
}

function generateMockPersonneDetails(id) {
    const idx = parseInt(id.replace('PF-', '')) - 1;
    const sexe = idx % 4 === 0 ? 'F' : 'M';
    
    const mock = {
        id: id,
        nom: MockDataTchad.noms[idx % MockDataTchad.noms.length],
        prenom: MockDataTchad.prenoms[idx % MockDataTchad.prenoms.length],
        alias: idx % 3 === 0 ? `Al-${['Mahdi', 'Hassan', 'Amir', 'Fatiha', 'Khalid'][idx % 5]}` : null,
        age: 20 + (idx % 50),
        dateNaissance: new Date(1970 + (idx % 50), idx % 12, (idx % 28) + 1).toISOString().split('T')[0],
        sexe: sexe,
        nationalite: 'Tchadienne',
        categorie: MockDataTchad.categories[idx % MockDataTchad.categories.length],
        dangerosite: Math.floor(Math.random() * 5) + 1,
        statut: MockDataTchad.statuts[idx % MockDataTchad.statuts.length],
        zone: MockDataTchad.zones[idx % MockDataTchad.zones.length],
        
        // Informations sensibles
        appartenancePolitique: ['MPS', 'UNDR', 'RDP', 'PLD', null][idx % 5],
        appartenanceReligieuse: ['Islam', 'Christianisme', 'Animisme', null][idx % 4],
        groupeEthnique: ['Sara', 'Arabe', 'Gorane', 'Kanembu', 'Ouaddaï'][idx % 5],
        ideologie: ['Conservateur', 'Radical', 'Modéré', null][idx % 4],
        signesDistinctifs: idx % 2 === 0 ? 'Cicatrice sur le front, tatouage bras gauche' : null,
        observations: 'Individu sous surveillance active depuis 2023',
        
        // Identités numériques
        identitesNumeriques: [
            { id: 'id1', plateforme: 'Facebook', pseudo: `User${idx}Tchad`, dateDecouverte: '2024-01-15', actif: true, nbContenus: 24 },
            { id: 'id2', plateforme: 'Telegram', pseudo: `+235${62000000 + idx}`, dateDecouverte: '2024-05-10', actif: true, nbContenus: 89 }
        ],
        
        // Établissements
        etablissements: [
            { id: 'etab1', nom: 'Café Le Palmier', type: 'Café', adresse: "Avenue Charles de Gaulle, N'Djamena", periode: 'Régulier (2023-2024)' },
            { id: 'etab2', nom: 'Mosquée Al-Nour', type: 'Lieu de culte', adresse: "Quartier Moursal, N'Djamena", periode: 'Hebdomadaire' }
        ],
        
        // Affiliations
        affiliations: [
            { id: 'aff1', type: 'familiale', personneLiee: { id: 'PF-000234', nom: 'Mahamat', prenom: 'Ahmed' }, intensite: 5, dateDebut: '1990-01-01', commentaire: 'Frère' },
            { id: 'aff2', type: 'politique', personneLiee: { id: 'PF-000567', nom: 'Hassan', prenom: 'Oumar' }, intensite: 3, dateDebut: '2020-06-15', commentaire: 'Membre du même parti' }
        ],
        
        // INCIDENTS (NOUVEAU)
        incidents: [
            {
                id: 'inc1',
                reference: `INC-2024-${String(idx * 3 + 1).padStart(4, '0')}`,
                type: 'violence',
                date: '2024-11-15T14:30:00',
                localisation: MockDataTchad.lieuxIncidents[idx % MockDataTchad.lieuxIncidents.length],
                description: 'Altercation violente avec des forces de l\'ordre lors d\'un contrôle routier. Résistance et tentative de fuite.',
                gravite: 4,
                statut: 'en_cours',
                signalePar: 'Agent ANSE-023',
                personnesImpliquees: [
                    { id: 'PF-000234', nom: 'Mahamat', prenom: 'Ahmed' }
                ],
                notes: 'Vérifier les connexions avec le groupe X'
            },
            {
                id: 'inc2',
                reference: `INC-2024-${String(idx * 3 + 2).padStart(4, '0')}`,
                type: 'propagande',
                date: '2024-10-22T09:15:00',
                localisation: "Université de N'Djamena",
                description: 'Distribution de tracts à caractère radical aux étudiants. Contenus incitant à la violence.',
                gravite: 3,
                statut: 'resolu',
                signalePar: 'Informateur civil',
                personnesImpliquees: [],
                notes: null
            },
            {
                id: 'inc3',
                reference: `INC-2024-${String(idx * 3 + 3).padStart(4, '0')}`,
                type: 'contact',
                date: '2024-09-05T18:45:00',
                localisation: 'Frontière nigériane, Lac Tchad',
                description: 'Contact établi avec membres présumés d\'une organisation terroriste. Échange de colis suspect.',
                gravite: 5,
                statut: 'en_cours',
                signalePar: 'Surveillance terrain',
                personnesImpliquees: [
                    { id: 'PF-000891', nom: 'Ibrahim', prenom: 'Khalil' },
                    { id: 'PF-000892', nom: 'Moussa', prenom: 'Abakar' }
                ],
                notes: 'Enquête ENQ-2024-089 ouverte suite à cet incident'
            }
        ],
        
        // Condamnations
        condamnations: [
            { id: 'cond1', reference: 'COND-2022-045', juridiction: 'Tribunal de Grande Instance', dateJugement: '2022-08-15', motif: 'Trouble à l\'ordre public', peine: '6 mois avec sursis', statut: 'Confirmé' }
        ],
        
        // Enquêtes
        enquetes: [
            { id: 'enq1', reference: 'ENQ-2024-089', titre: 'Investigation activités suspectes', dateDebut: '2024-01-10', statut: 'en_cours', responsable: 'Agent ANSE-005' }
        ],
        
        // Signalements
        signalements: [
            { id: 'sig1', dateReception: '2024-10-15T14:30:00', description: 'Activité suspecte rapportée par informateur', statut: 'En traitement' },
            { id: 'sig2', dateReception: '2024-11-02T09:15:00', description: 'Publications à caractère radical', statut: 'Traité' }
        ],
        
        // Contenus
        contenus: [
            { id: 'cont1', plateforme: 'Facebook', type: 'Post', datePublication: '2024-10-20T16:45:00', dateDetection: '2024-10-21T08:00:00', gravite: 4 },
            { id: 'cont2', plateforme: 'Telegram', type: 'Message', datePublication: '2024-11-01T12:30:00', dateDetection: '2024-11-01T13:00:00', gravite: 3 }
        ],
        
        // Historique
        historique: [
            { date: '2024-01-10T09:00:00', action: 'Fiche créée', user: 'Agent ANSE-001' },
            { date: '2024-03-15T14:20:00', action: 'Modification catégorie: B → A', user: 'Agent ANSE-003' },
            { date: '2024-06-20T11:30:00', action: 'Ajout identité numérique', user: 'Agent ANSE-002' },
            { date: '2024-09-05T19:00:00', action: 'Incident déclaré: Contact organisation', user: 'Agent ANSE-047' },
            { date: '2024-10-05T16:45:00', action: 'Ajout signalement', user: 'Agent ANSE-001' },
            { date: '2024-11-15T15:00:00', action: 'Incident déclaré: Violence', user: 'Agent ANSE-023' },
            { date: '2024-12-11T10:15:00', action: 'Consultation fiche', user: 'Agent ANSE-047' }
        ]
    };
    
    return mock;
}

// === VIEW FUNCTIONS (placeholders) ===
function viewIdentite(id) { showToast('Détails identité numérique', 'info'); }
function viewEtablissement(id) { showToast('Détails établissement', 'info'); }
function viewCondamnation(id) { showToast('Détails condamnation', 'info'); }
function viewEnquete(id) { showToast('Détails enquête', 'info'); }
function viewSignalement(id) { showToast('Détails signalement', 'info'); }
function viewContenu(id) { showToast('Détails contenu', 'info'); }
function addIdentiteNumerique() { showToast('Ajout identité numérique', 'info'); }
function addEtablissement() { showToast('Ajout établissement', 'info'); }
function addAffiliation() { showToast('Ajout affiliation', 'info'); }

// === GLOBAL EXPOSURE ===
window.openFiche = openFiche;
window.editPersonne = editPersonne;
window.editPersonneFromList = editPersonneFromList;
window.deletePersonne = deletePersonne;
window.submitPersonne = submitPersonne;
window.closePersonneModal = closePersonneModal;
window.closeFicheModal = closeFicheModal;
window.exportFiche = exportFiche;
window.changePage = changePage;
window.sortTable = (field) => { state.sortBy = field; state.sortOrder = state.sortOrder === 'asc' ? 'desc' : 'asc'; fetchPersonnesFichees(); };
window.viewIdentite = viewIdentite;
window.viewEtablissement = viewEtablissement;
window.viewCondamnation = viewCondamnation;
window.viewEnquete = viewEnquete;
window.viewSignalement = viewSignalement;
window.viewContenu = viewContenu;
window.viewIncident = viewIncident;
window.addIdentiteNumerique = addIdentiteNumerique;
window.addEtablissement = addEtablissement;
window.addAffiliation = addAffiliation;
window.addIncident = addIncident;
window.closeAddIncidentModal = closeAddIncidentModal;
window.closeIncidentModal = closeIncidentModal;
window.editIncident = editIncident;
window.submitIncident = submitIncident;

console.log('📦 Module Personnes Fichées v3.1 chargé avec module Incidents');