/* ==========================================================================
   SIGMA - Module Condamnations - JavaScript
   Système de Surveillance et Gestion des Personnes Fichées
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
    typeInfraction: '',
    juridiction: '',
    gravite: '',
    statut: '',
    hasPieceJointe: '',
    personneId: '',
    dateJugementStart: '',
    dateJugementEnd: '',
    
    // Tri
    sortBy: 'dateJugement',
    sortOrder: 'desc',
    
    // Données
    condamnations: [],
    statistics: null,
    currentCondamnation: null,
    
    // États UI
    loading: false,
    saving: false,
    deleting: false,
    error: null,
    
    // Sécurité
    userPermissions: {
        level: 3, // 1=Observer, 2=Analyst, 3=Administrator, 4=Decision-maker
        canView: true,
        canCreate: true,
        canUpdate: true,
        canDelete: false,
        canViewSensitive: true,
        canAccessDocuments: true
    },
    
    // Modals
    currentModalId: null,
    uploadingFile: false,
    
    // Timeouts
    searchTimeout: null
};

// === INITIALISATION ===
document.addEventListener('DOMContentLoaded', () => {
    init();
});

async function init() {
    console.log('🚀 Initialisation du module Condamnations...');
    
    // Vérifier les permissions
    await verifyPermissions();
    
    // Charger les données initiales
    await Promise.all([
        fetchStats(),
        fetchCondamnations()
    ]);
    
    // Initialiser les event listeners
    initEventListeners();
    
    // Initialiser le toggle sidebar
    initSidebarToggle();
    
    logAction('module_access', 'Accès au module Condamnations');
    
    console.log('✅ Module initialisé avec succès');
}

// === PERMISSIONS & SÉCURITÉ ===
async function verifyPermissions() {
    try {
        // Simuler la récupération des permissions utilisateur
        // En production, cela viendrait de GET /api/auth/permissions
        const mockPermissions = {
            level: 3,
            role: 'Administrator',
            canView: true,
            canCreate: true,
            canUpdate: true,
            canDelete: false, // Seulement Decision-maker
            canViewSensitive: true,
            canAccessDocuments: true
        };
        
        state.userPermissions = mockPermissions;
        
        // Appliquer les restrictions UI selon les permissions
        applyPermissionsToUI();
        
        console.log('✅ Permissions vérifiées:', state.userPermissions);
    } catch (error) {
        console.error('❌ Erreur vérification permissions:', error);
        showError('Impossible de vérifier vos autorisations');
    }
}

function applyPermissionsToUI() {
    const { canCreate, canDelete, canViewSensitive, canAccessDocuments } = state.userPermissions;
    
    // Masquer le bouton d'ajout si pas de permission
    if (!canCreate) {
        const addBtn = document.getElementById('addCondamnationBtn');
        if (addBtn) addBtn.style.display = 'none';
    }
    
    // Désactiver le bouton de suppression si pas de permission
    if (!canDelete) {
        const deleteBtn = document.getElementById('deleteBtn');
        if (deleteBtn) {
            deleteBtn.disabled = true;
            deleteBtn.title = 'Permission insuffisante';
        }
    }
    
    console.log('🔒 Restrictions UI appliquées');
}

function maskSensitiveData(data, field) {
    if (!state.userPermissions.canViewSensitive) {
        return `<span class="restricted-access">
            <i class="ri-lock-line"></i> Information sensible - Accès restreint
        </span>`;
    }
    return data;
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

function sanitizeObject(obj) {
    const sanitized = {};
    for (const [key, value] of Object.entries(obj)) {
        if (typeof value === 'string') {
            sanitized[key] = sanitize(value);
        } else if (typeof value === 'object' && value !== null) {
            sanitized[key] = sanitizeObject(value);
        } else {
            sanitized[key] = value;
        }
    }
    return sanitized;
}

// === JOURNALISATION ===
async function logAction(action, details, severity = 'info') {
    const logEntry = {
        timestamp: new Date().toISOString(),
        module: 'condamnations',
        action: action,
        details: details,
        severity: severity,
        userId: 'ANSE-001', // En production: depuis l'auth
        userLevel: state.userPermissions.level
    };
    
    try {
        // En production: POST /api/logs
        console.log('📝 Log:', logEntry);
        
        // Simulation
        // await fetch(`${API_BASE_URL}/logs`, {
        //     method: 'POST',
        //     headers: { 'Content-Type': 'application/json' },
        //     body: JSON.stringify(logEntry)
        // });
    } catch (error) {
        console.error('❌ Erreur journalisation:', error);
    }
}

// === API: STATISTICS ===
async function fetchStats() {
    try {
        // En production: GET /api/condamnations/stats
        // const response = await fetch(`${API_BASE_URL}/condamnations/stats`);
        // const data = await response.json();
        
        // Mock data
        const data = {
            total: 2847,
            parGravite: {
                critique: 342,
                eleve: 589,
                moyen: 1124,
                faible: 678,
                tresFaible: 114
            },
            parStatut: {
                confirme: 2103,
                enAppel: 428,
                annule: 187,
                enCours: 129
            },
            avecPiecesJointes: 1923,
            dernierMois: 94
        };
        
        state.statistics = data;
        renderStats(data);
        
    } catch (error) {
        console.error('❌ Erreur chargement statistiques:', error);
        showError('Impossible de charger les statistiques');
    }
}

function renderStats(stats) {
    const statsGrid = document.getElementById('statsGrid');
    if (!statsGrid) return;
    
    const statsHtml = `
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, #3B82F6, #2563EB);">
                <i class="ri-scales-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.total)}</div>
                <div class="stat-label">Total Condamnations</div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, #EF4444, #DC2626);">
                <i class="ri-alarm-warning-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.parGravite.critique)}</div>
                <div class="stat-label">Niveau Critique</div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, #F59E0B, #D97706);">
                <i class="ri-time-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.parStatut.enAppel)}</div>
                <div class="stat-label">En Appel</div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, #8B5CF6, #7C3AED);">
                <i class="ri-file-text-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stats.avecPiecesJointes)}</div>
                <div class="stat-label">Avec Pièces Jointes</div>
            </div>
        </div>
    `;
    
    statsGrid.innerHTML = statsHtml;
}

// === API: FETCH CONDAMNATIONS ===
async function fetchCondamnations() {
    state.loading = true;
    updateLoadingState();
    
    try {
        const params = new URLSearchParams({
            page: state.page,
            pageSize: state.pageSize,
            sortBy: state.sortBy,
            sortOrder: state.sortOrder
        });
        
        // Ajouter les filtres non-vides
        if (state.search) params.append('search', state.search);
        if (state.typeInfraction) params.append('typeInfraction', state.typeInfraction);
        if (state.juridiction) params.append('juridiction', state.juridiction);
        if (state.gravite) params.append('gravite', state.gravite);
        if (state.statut) params.append('statut', state.statut);
        if (state.hasPieceJointe) params.append('hasPieceJointe', state.hasPieceJointe);
        if (state.personneId) params.append('personneId', state.personneId);
        if (state.dateJugementStart) params.append('dateJugementStart', state.dateJugementStart);
        if (state.dateJugementEnd) params.append('dateJugementEnd', state.dateJugementEnd);
        
        // En production: GET /api/condamnations?params
        // const response = await fetch(`${API_BASE_URL}/condamnations?${params}`);
        // const data = await response.json();
        
        // Mock data
        await new Promise(resolve => setTimeout(resolve, 800)); // Simuler latence
        
        const data = {
            items: generateMockCondamnations(state.page, state.pageSize),
            total: 2847,
            page: state.page,
            pageSize: state.pageSize,
            totalPages: Math.ceil(2847 / state.pageSize)
        };
        
        state.condamnations = data.items;
        state.totalItems = data.total;
        
        renderTable(data.items);
        renderPagination(data.total, data.page, data.pageSize);
        
        state.loading = false;
        updateLoadingState();
        
    } catch (error) {
        console.error('❌ Erreur chargement condamnations:', error);
        state.loading = false;
        updateLoadingState();
        showError('Impossible de charger les condamnations');
    }
}

// === RENDER TABLE ===
function renderTable(condamnations) {
    const tbody = document.getElementById('tableBody');
    if (!tbody) return;
    
    if (condamnations.length === 0) {
        tbody.innerHTML = `
            <tr>
                <td colspan="10" class="empty-cell">
                    <div class="empty-state">
                        <i class="ri-inbox-line"></i>
                        <p>Aucune condamnation trouvée</p>
                    </div>
                </td>
            </tr>
        `;
        return;
    }
    
    const rows = condamnations.map(item => {
        const gravite = getGraviteBadge(item.gravite);
        const statut = getStatutBadge(item.statut);
        const motif = maskSensitiveData(truncate(item.motif, 50), 'motif');
        const piecesIcon = item.piecesJointes > 0 
            ? `<span title="${item.piecesJointes} pièce(s)">
                <i class="ri-attachment-line"></i> ${item.piecesJointes}
               </span>`
            : '<span style="color: var(--text-muted);">-</span>';
        
        return `
            <tr>
                <td><strong>${sanitize(item.reference)}</strong></td>
                <td>
                    <a href="#" onclick="viewPersonne('${item.personneId}'); return false;">
                        ${sanitize(item.personneName)}
                    </a>
                </td>
                <td>${sanitize(item.juridictionLabel)}</td>
                <td>${formatDate(item.dateJugement)}</td>
                <td>${motif}</td>
                <td>${sanitize(item.peine || '-')}</td>
                <td>${gravite}</td>
                <td>${piecesIcon}</td>
                <td>${statut}</td>
                <td>
                    <div style="display: flex; gap: 5px;">
                        <button class="btn btn-sm btn-icon btn-secondary" 
                                onclick="openCondamnation('${item.id}')"
                                title="Voir les détails">
                            <i class="ri-eye-line"></i>
                        </button>
                        ${state.userPermissions.canUpdate ? `
                        <button class="btn btn-sm btn-icon btn-warning" 
                                onclick="editCondamnation('${item.id}')"
                                title="Modifier">
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

// === RENDER PAGINATION ===
function renderPagination(total, currentPage, pageSize) {
    const totalPages = Math.ceil(total / pageSize);
    const pagination = document.getElementById('pagination');
    const startEntry = document.getElementById('startEntry');
    const endEntry = document.getElementById('endEntry');
    const totalEntries = document.getElementById('totalEntries');
    
    if (!pagination) return;
    
    // Info pagination
    if (startEntry) startEntry.textContent = ((currentPage - 1) * pageSize) + 1;
    if (endEntry) endEntry.textContent = Math.min(currentPage * pageSize, total);
    if (totalEntries) totalEntries.textContent = formatNumber(total);
    
    // Boutons pagination
    let paginationHtml = '';
    
    // Bouton précédent
    paginationHtml += `
        <button class="page-btn" onclick="changePage(${currentPage - 1})" 
                ${currentPage === 1 ? 'disabled' : ''}>
            <i class="ri-arrow-left-s-line"></i>
        </button>
    `;
    
    // Numéros de page
    const maxButtons = 7;
    let startPage = Math.max(1, currentPage - Math.floor(maxButtons / 2));
    let endPage = Math.min(totalPages, startPage + maxButtons - 1);
    
    if (endPage - startPage < maxButtons - 1) {
        startPage = Math.max(1, endPage - maxButtons + 1);
    }
    
    if (startPage > 1) {
        paginationHtml += `<button class="page-btn" onclick="changePage(1)">1</button>`;
        if (startPage > 2) {
            paginationHtml += `<button class="page-btn" disabled>...</button>`;
        }
    }
    
    for (let i = startPage; i <= endPage; i++) {
        paginationHtml += `
            <button class="page-btn ${i === currentPage ? 'active' : ''}" 
                    onclick="changePage(${i})">
                ${i}
            </button>
        `;
    }
    
    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            paginationHtml += `<button class="page-btn" disabled>...</button>`;
        }
        paginationHtml += `<button class="page-btn" onclick="changePage(${totalPages})">${totalPages}</button>`;
    }
    
    // Bouton suivant
    paginationHtml += `
        <button class="page-btn" onclick="changePage(${currentPage + 1})" 
                ${currentPage === totalPages ? 'disabled' : ''}>
            <i class="ri-arrow-right-s-line"></i>
        </button>
    `;
    
    pagination.innerHTML = paginationHtml;
}

function changePage(page) {
    if (page < 1 || page > Math.ceil(state.totalItems / state.pageSize)) return;
    state.page = page;
    fetchCondamnations();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// === OPEN CONDAMNATION DETAILS ===
async function openCondamnation(id) {
    try {
        state.currentCondamnation = null;
        openModal('detailsModal');
        
        // Afficher loading
        document.getElementById('detailsTitle').textContent = 'Chargement...';
        document.getElementById('detailsStatus').innerHTML = '';
        
        // En production: GET /api/condamnations/:id
        // const response = await fetch(`${API_BASE_URL}/condamnations/${id}`);
        // const data = await response.json();
        
        // Mock data
        await new Promise(resolve => setTimeout(resolve, 600));
        const data = generateMockCondamnationDetails(id);
        
        state.currentCondamnation = data;
        
        // Mettre à jour le titre et statut
        document.getElementById('detailsTitle').textContent = `Condamnation ${data.reference}`;
        document.getElementById('detailsStatus').innerHTML = getStatutBadge(data.statut);
        
        // Activer premier onglet
        switchTab('resume');
        
        logAction('view_condamnation', `Consultation condamnation ${data.reference}`);
        
    } catch (error) {
        console.error('❌ Erreur chargement détails:', error);
        showError('Impossible de charger les détails');
        closeModal('detailsModal');
    }
}

// === TABS MANAGEMENT ===
function switchTab(tabName) {
    // Désactiver tous les onglets
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
    
    // Activer l'onglet sélectionné
    const tabBtn = document.querySelector(`[data-tab="${tabName}"]`);
    const tabContent = document.getElementById(`tab-${tabName}`);
    
    if (tabBtn) tabBtn.classList.add('active');
    if (tabContent) tabContent.classList.add('active');
    
    // Charger le contenu de l'onglet
    loadTabContent(tabName);
}

async function loadTabContent(tabName) {
    if (!state.currentCondamnation) return;
    
    const condamnation = state.currentCondamnation;
    
    switch (tabName) {
        case 'resume':
            renderResumeTab(condamnation);
            break;
        case 'motifs':
            renderMotifsTab(condamnation);
            break;
        case 'pieces':
            renderPiecesTab(condamnation);
            break;
        case 'liens':
            renderLiensTab(condamnation);
            break;
        case 'historique':
            renderHistoriqueTab(condamnation);
            break;
    }
}

function renderResumeTab(data) {
    const content = document.getElementById('resumeContent');
    if (!content) return;
    
    content.innerHTML = `
        <div class="detail-item">
            <div class="detail-label">Référence</div>
            <div class="detail-value">${sanitize(data.reference)}</div>
        </div>
        <div class="detail-item">
            <div class="detail-label">Personne fichée</div>
            <div class="detail-value">
                <a href="#" onclick="viewPersonne('${data.personneId}'); return false;">
                    ${sanitize(data.personneName)}
                </a>
            </div>
        </div>
        <div class="detail-item">
            <div class="detail-label">Type d'infraction</div>
            <div class="detail-value">${sanitize(data.typeInfractionLabel)}</div>
        </div>
        <div class="detail-item">
            <div class="detail-label">Juridiction</div>
            <div class="detail-value">${sanitize(data.juridictionLabel)}</div>
        </div>
        <div class="detail-item">
            <div class="detail-label">Date du jugement</div>
            <div class="detail-value">${formatDate(data.dateJugement)}</div>
        </div>
        <div class="detail-item">
            <div class="detail-label">Gravité</div>
            <div class="detail-value">${getGraviteBadge(data.gravite)}</div>
        </div>
        <div class="detail-item">
            <div class="detail-label">Statut</div>
            <div class="detail-value">${getStatutBadge(data.statut)}</div>
        </div>
        <div class="detail-item">
            <div class="detail-label">Peine prononcée</div>
            <div class="detail-value">${sanitize(data.peine || '-')}</div>
        </div>
        <div class="detail-item" style="grid-column: 1 / -1;">
            <div class="detail-label">Observations</div>
            <div class="detail-value">${sanitize(data.observations || 'Aucune observation')}</div>
        </div>
    `;
}

function renderMotifsTab(data) {
    const content = document.getElementById('motifsContent');
    if (!content) return;
    
    const motifDisplay = maskSensitiveData(data.motif, 'motif');
    
    content.innerHTML = `
        <div class="sensitive-header">
            <i class="ri-alert-line"></i>
            <span>Information sensible - Accès restreint selon habilitation</span>
        </div>
        <div class="sensitive-content">
            <h4 style="margin-bottom: 15px; color: var(--text-primary);">Motif de la condamnation</h4>
            <p style="line-height: 1.8; color: var(--text-primary);">${motifDisplay}</p>
            
            <h4 style="margin: 25px 0 15px; color: var(--text-primary);">Peine prononcée</h4>
            <p style="line-height: 1.8; color: var(--text-primary);">${sanitize(data.peine || 'Non spécifiée')}</p>
            
            ${data.observations ? `
            <h4 style="margin: 25px 0 15px; color: var(--text-primary);">Observations complémentaires</h4>
            <p style="line-height: 1.8; color: var(--text-secondary);">${sanitize(data.observations)}</p>
            ` : ''}
        </div>
    `;
}

function renderPiecesTab(data) {
    const content = document.getElementById('piecesContent');
    if (!content) return;
    
    if (!data.piecesJointes || data.piecesJointes.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-file-list-line"></i>
                <p>Aucune pièce jointe</p>
            </div>
        `;
        return;
    }
    
    const piecesHtml = data.piecesJointes.map(piece => {
        const icon = getFileIcon(piece.type);
        return `
            <div class="piece-item">
                <div class="piece-icon">${icon}</div>
                <div class="piece-info">
                    <div class="piece-name">${sanitize(piece.name)}</div>
                    <div class="piece-meta">
                        ${sanitize(piece.typeLabel)} • ${formatFileSize(piece.size)} • 
                        Ajouté le ${formatDate(piece.dateUpload)}
                    </div>
                </div>
                <div class="piece-actions">
                    ${state.userPermissions.canAccessDocuments ? `
                    <button class="btn btn-sm btn-secondary" onclick="downloadFile('${piece.id}')" 
                            title="Télécharger">
                        <i class="ri-download-line"></i>
                    </button>
                    <button class="btn btn-sm btn-primary" onclick="viewFile('${piece.id}')" 
                            title="Visualiser">
                        <i class="ri-eye-line"></i>
                    </button>
                    ` : `
                    <span class="restricted-access">Accès restreint</span>
                    `}
                </div>
            </div>
        `;
    }).join('');
    
    content.innerHTML = piecesHtml;
}

function renderLiensTab(data) {
    const content = document.getElementById('liensContent');
    if (!content) return;
    
    let html = '';
    
    // Personne fichée
    html += `
        <div class="lien-section">
            <div class="lien-header">
                <i class="ri-user-line"></i>
                <span>Personne fichée</span>
            </div>
            <div class="lien-list">
                <div class="lien-item">
                    <div>
                        <strong>${sanitize(data.personneName)}</strong><br>
                        <small>Catégorie: ${sanitize(data.personneCategorie)}</small>
                    </div>
                    <button class="btn btn-sm btn-secondary" onclick="viewPersonne('${data.personneId}')">
                        Voir la fiche
                    </button>
                </div>
            </div>
        </div>
    `;
    
    // Enquêtes liées
    if (data.enquetes && data.enquetes.length > 0) {
        html += `
            <div class="lien-section">
                <div class="lien-header">
                    <i class="ri-search-line"></i>
                    <span>Enquêtes liées (${data.enquetes.length})</span>
                </div>
                <div class="lien-list">
                    ${data.enquetes.map(enq => `
                        <div class="lien-item">
                            <div>
                                <strong>${sanitize(enq.reference)}</strong><br>
                                <small>${sanitize(enq.titre)}</small>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="viewEnquete('${enq.id}')">
                                Voir
                            </button>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
    }
    
    // Signalements liés
    if (data.signalements && data.signalements.length > 0) {
        html += `
            <div class="lien-section">
                <div class="lien-header">
                    <i class="ri-alarm-warning-line"></i>
                    <span>Signalements liés (${data.signalements.length})</span>
                </div>
                <div class="lien-list">
                    ${data.signalements.map(sig => `
                        <div class="lien-item">
                            <div>
                                <strong>Signalement #${sig.id}</strong><br>
                                <small>${formatDate(sig.dateReception)}</small>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="viewSignalement('${sig.id}')">
                                Voir
                            </button>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
    }
    
    // Établissements liés
    if (data.etablissements && data.etablissements.length > 0) {
        html += `
            <div class="lien-section">
                <div class="lien-header">
                    <i class="ri-map-pin-line"></i>
                    <span>Établissements liés (${data.etablissements.length})</span>
                </div>
                <div class="lien-list">
                    ${data.etablissements.map(etab => `
                        <div class="lien-item">
                            <div>
                                <strong>${sanitize(etab.nom)}</strong><br>
                                <small>${sanitize(etab.adresse)}</small>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="viewEtablissement('${etab.id}')">
                                Voir
                            </button>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
    }
    
    content.innerHTML = html;
}

function renderHistoriqueTab(data) {
    const content = document.getElementById('historiqueContent');
    if (!content) return;
    
    if (!data.historique || data.historique.length === 0) {
        content.innerHTML = `
            <div class="empty-state">
                <i class="ri-history-line"></i>
                <p>Aucun historique disponible</p>
            </div>
        `;
        return;
    }
    
    const historyHtml = data.historique.map(entry => `
        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-date">${formatDateTime(entry.date)}</div>
                <div class="timeline-text">${sanitize(entry.action)}</div>
                <div class="timeline-user">Par: ${sanitize(entry.user)}</div>
            </div>
        </div>
    `).join('');
    
    content.innerHTML = historyHtml;
}

// === ADD/EDIT CONDAMNATION ===
function openAddCondamnation() {
    document.getElementById('modalTitle').textContent = 'Nouvelle Condamnation';
    document.getElementById('condamnationForm').reset();
    document.getElementById('condamnationId').value = '';
    
    // Charger la liste des personnes
    loadPersonnesList();
    
    openModal('condamnationModal');
}

async function loadPersonnesList() {
    const select = document.getElementById('personneId');
    if (!select) return;
    
    // En production: GET /api/personnes/list
    const mockPersonnes = [
        { id: 'p1', nom: 'Mahamat Hassan', prenom: 'Abdoulaye' },
        { id: 'p2', nom: 'Deby Itno', prenom: 'Khamis' },
        { id: 'p3', nom: 'Ngarlejy Yorongar', prenom: 'François' },
        { id: 'p4', nom: 'Abdelkerim Bachar', prenom: 'Ahmed' }
    ];
    
    select.innerHTML = '<option value="">Sélectionner une personne</option>' +
        mockPersonnes.map(p => 
            `<option value="${p.id}">${sanitize(p.nom)} ${sanitize(p.prenom)}</option>`
        ).join('');
}

async function editCondamnation(id = null) {
    const condamnationId = id || (state.currentCondamnation ? state.currentCondamnation.id : null);
    if (!condamnationId) return;
    
    try {
        // En production: GET /api/condamnations/:id
        const data = state.currentCondamnation || generateMockCondamnationDetails(condamnationId);
        
        document.getElementById('modalTitle').textContent = 'Modifier la Condamnation';
        document.getElementById('condamnationId').value = data.id;
        document.getElementById('reference').value = data.reference;
        document.getElementById('typeInfraction').value = data.typeInfraction;
        document.getElementById('juridiction').value = data.juridiction;
        document.getElementById('dateJugement').value = data.dateJugement;
        document.getElementById('gravite').value = data.gravite;
        document.getElementById('statut').value = data.statut;
        document.getElementById('peine').value = data.peine || '';
        document.getElementById('motif').value = data.motif;
        document.getElementById('observations').value = data.observations || '';
        
        await loadPersonnesList();
        document.getElementById('personneId').value = data.personneId;
        
        closeModal('detailsModal');
        openModal('condamnationModal');
        
    } catch (error) {
        console.error('❌ Erreur chargement condamnation:', error);
        showError('Impossible de charger les données');
    }
}

async function submitCondamnation() {
    const form = document.getElementById('condamnationForm');
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }
    
    const id = document.getElementById('condamnationId').value;
    const isUpdate = !!id;
    
    const formData = {
        reference: document.getElementById('reference').value,
        personneId: document.getElementById('personneId').value,
        typeInfraction: document.getElementById('typeInfraction').value,
        juridiction: document.getElementById('juridiction').value,
        dateJugement: document.getElementById('dateJugement').value,
        gravite: parseInt(document.getElementById('gravite').value),
        statut: document.getElementById('statut').value,
        peine: document.getElementById('peine').value,
        motif: document.getElementById('motif').value,
        observations: document.getElementById('observations').value
    };
    
    // Sanitizer les données
    const sanitizedData = sanitizeObject(formData);
    
    try {
        state.saving = true;
        const saveBtn = document.getElementById('saveCondamnationBtn');
        if (saveBtn) {
            saveBtn.disabled = true;
            saveBtn.innerHTML = '<i class="ri-loader-4-line"></i> Enregistrement...';
        }
        
        // En production:
        // const response = await fetch(`${API_BASE_URL}/condamnations${isUpdate ? '/' + id : ''}`, {
        //     method: isUpdate ? 'PATCH' : 'POST',
        //     headers: { 'Content-Type': 'application/json' },
        //     body: JSON.stringify(sanitizedData)
        // });
        // const result = await response.json();
        
        // Mock
        await new Promise(resolve => setTimeout(resolve, 1000));
        
        logAction(
            isUpdate ? 'update_condamnation' : 'create_condamnation',
            `${isUpdate ? 'Modification' : 'Création'} condamnation ${sanitizedData.reference}`,
            'info'
        );
        
        state.saving = false;
        if (saveBtn) {
            saveBtn.disabled = false;
            saveBtn.innerHTML = '<i class="ri-save-line"></i> Enregistrer';
        }
        
        closeModal('condamnationModal');
        showSuccess(isUpdate ? 'Condamnation modifiée avec succès' : 'Condamnation créée avec succès');
        fetchCondamnations();
        fetchStats();
        
    } catch (error) {
        console.error('❌ Erreur sauvegarde:', error);
        state.saving = false;
        const saveBtn = document.getElementById('saveCondamnationBtn');
        if (saveBtn) {
            saveBtn.disabled = false;
            saveBtn.innerHTML = '<i class="ri-save-line"></i> Enregistrer';
        }
        showError('Impossible de sauvegarder la condamnation');
    }
}

async function deleteCondamnation() {
    if (!state.currentCondamnation) return;
    
    if (!state.userPermissions.canDelete) {
        showError('Permission insuffisante pour supprimer');
        return;
    }
    
    if (!confirm(`Êtes-vous sûr de vouloir supprimer la condamnation ${state.currentCondamnation.reference} ?\n\nCette action est irréversible et sera journalisée.`)) {
        return;
    }
    
    try {
        state.deleting = true;
        const deleteBtn = document.getElementById('deleteBtn');
        if (deleteBtn) {
            deleteBtn.disabled = true;
            deleteBtn.innerHTML = '<i class="ri-loader-4-line"></i> Suppression...';
        }
        
        // En production: DELETE /api/condamnations/:id
        // await fetch(`${API_BASE_URL}/condamnations/${state.currentCondamnation.id}`, {
        //     method: 'DELETE'
        // });
        
        await new Promise(resolve => setTimeout(resolve, 1000));
        
        logAction(
            'delete_condamnation',
            `Suppression condamnation ${state.currentCondamnation.reference}`,
            'warning'
        );
        
        state.deleting = false;
        closeModal('detailsModal');
        showSuccess('Condamnation supprimée avec succès');
        fetchCondamnations();
        fetchStats();
        
    } catch (error) {
        console.error('❌ Erreur suppression:', error);
        state.deleting = false;
        const deleteBtn = document.getElementById('deleteBtn');
        if (deleteBtn) {
            deleteBtn.disabled = false;
            deleteBtn.innerHTML = '<i class="ri-delete-bin-line"></i> Supprimer';
        }
        showError('Impossible de supprimer la condamnation');
    }
}

// === UPLOAD FILE ===
function openUploadModal() {
    if (!state.currentCondamnation) return;
    
    document.getElementById('uploadForm').reset();
    document.getElementById('filePreview').style.display = 'none';
    openModal('uploadModal');
}

function closeUploadModal() {
    closeModal('uploadModal');
}

async function uploadFile() {
    const fileInput = document.getElementById('fileInput');
    const documentType = document.getElementById('documentType').value;
    const description = document.getElementById('documentDescription').value;
    
    if (!documentType) {
        alert('Veuillez sélectionner un type de document');
        return;
    }
    
    if (!fileInput.files || fileInput.files.length === 0) {
        alert('Veuillez sélectionner un fichier');
        return;
    }
    
    const file = fileInput.files[0];
    
    // Vérifier la taille (max 10 Mo)
    if (file.size > 10 * 1024 * 1024) {
        alert('Le fichier est trop volumineux (max 10 Mo)');
        return;
    }
    
    try {
        state.uploadingFile = true;
        const uploadBtn = document.getElementById('uploadBtn');
        if (uploadBtn) {
            uploadBtn.disabled = true;
            uploadBtn.innerHTML = '<i class="ri-loader-4-line"></i> Téléversement...';
        }
        
        // En production: POST /api/uploads avec FormData
        const formData = new FormData();
        formData.append('file', file);
        formData.append('condamnationId', state.currentCondamnation.id);
        formData.append('documentType', documentType);
        formData.append('description', description);
        
        // const response = await fetch(`${API_BASE_URL}/uploads`, {
        //     method: 'POST',
        //     body: formData
        // });
        
        await new Promise(resolve => setTimeout(resolve, 1500));
        
        logAction(
            'upload_document',
            `Ajout pièce jointe: ${file.name} - Condamnation ${state.currentCondamnation.reference}`,
            'info'
        );
        
        state.uploadingFile = false;
        if (uploadBtn) {
            uploadBtn.disabled = false;
            uploadBtn.innerHTML = '<i class="ri-upload-line"></i> Téléverser';
        }
        
        closeUploadModal();
        showSuccess('Fichier téléversé avec succès');
        
        // Recharger l'onglet des pièces jointes
        if (state.currentCondamnation) {
            state.currentCondamnation.piecesJointes = state.currentCondamnation.piecesJointes || [];
            state.currentCondamnation.piecesJointes.push({
                id: 'doc-' + Date.now(),
                name: file.name,
                type: documentType,
                typeLabel: getDocumentTypeLabel(documentType),
                size: file.size,
                dateUpload: new Date().toISOString()
            });
            renderPiecesTab(state.currentCondamnation);
        }
        
    } catch (error) {
        console.error('❌ Erreur upload:', error);
        state.uploadingFile = false;
        const uploadBtn = document.getElementById('uploadBtn');
        if (uploadBtn) {
            uploadBtn.disabled = false;
            uploadBtn.innerHTML = '<i class="ri-upload-line"></i> Téléverser';
        }
        showError('Impossible de téléverser le fichier');
    }
}

// === EVENT LISTENERS ===
function initEventListeners() {
    // Recherche avec debounce
    const searchInput = document.getElementById('searchInput');
    const headerSearch = document.getElementById('headerSearch');
    
    if (searchInput) {
        searchInput.addEventListener('input', debounce((e) => {
            state.search = e.target.value;
            state.page = 1;
            fetchCondamnations();
        }, DEBOUNCE_DELAY));
    }
    
    if (headerSearch) {
        headerSearch.addEventListener('input', debounce((e) => {
            state.search = e.target.value;
            state.page = 1;
            fetchCondamnations();
        }, DEBOUNCE_DELAY));
    }
    
    // Filtres
    const filters = ['typeInfractionFilter', 'juridictionFilter', 'graviteFilter', 'statutFilter', 'pieceJointeFilter'];
    filters.forEach(filterId => {
        const element = document.getElementById(filterId);
        if (element) {
            element.addEventListener('change', (e) => {
                const filterName = filterId.replace('Filter', '');
                state[filterName] = e.target.value;
                state.page = 1;
                fetchCondamnations();
            });
        }
    });
    
    // Boutons
    const addBtn = document.getElementById('addCondamnationBtn');
    if (addBtn) addBtn.addEventListener('click', openAddCondamnation);
    
    const exportBtn = document.getElementById('exportBtn');
    if (exportBtn) exportBtn.addEventListener('click', exportData);
    
    // Tabs
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const tabName = e.currentTarget.dataset.tab;
            switchTab(tabName);
        });
    });
    
    // File upload area
    const fileUploadArea = document.getElementById('fileUploadArea');
    const fileInput = document.getElementById('fileInput');
    
    if (fileUploadArea && fileInput) {
        fileUploadArea.addEventListener('click', () => fileInput.click());
        
        fileInput.addEventListener('change', (e) => {
            if (e.target.files && e.target.files[0]) {
                const file = e.target.files[0];
                const preview = document.getElementById('filePreview');
                preview.style.display = 'block';
                preview.innerHTML = `
                    <i class="ri-file-line" style="font-size: 24px; color: var(--primary-color);"></i>
                    <div>
                        <strong>${sanitize(file.name)}</strong><br>
                        <small>${formatFileSize(file.size)}</small>
                    </div>
                `;
            }
        });
    }
}

// === SIDEBAR TOGGLE ===
function initSidebarToggle() {
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    }
}

// === UTILITY FUNCTIONS ===
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function formatNumber(num) {
    return new Intl.NumberFormat('fr-FR').format(num);
}

function formatDate(dateString) {
    if (!dateString) return '-';
    const date = new Date(dateString);
    return new Intl.DateTimeFormat('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    }).format(date);
}

function formatDateTime(dateString) {
    if (!dateString) return '-';
    const date = new Date(dateString);
    return new Intl.DateTimeFormat('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    }).format(date);
}

function formatFileSize(bytes) {
    if (bytes === 0) return '0 B';
    const k = 1024;
    const sizes = ['B', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
}

function truncate(str, maxLength) {
    if (!str) return '';
    if (str.length <= maxLength) return str;
    return str.substring(0, maxLength) + '...';
}

function getGraviteBadge(level) {
    const labels = {
        5: 'Critique',
        4: 'Élevé',
        3: 'Moyen',
        2: 'Faible',
        1: 'Très faible'
    };
    
    return `<span class="badge-gravite badge-gravite-${level}">
        <i class="ri-alert-line"></i> ${labels[level]} (${level}/5)
    </span>`;
}

function getStatutBadge(statut) {
    const config = {
        confirme: { label: 'Confirmé', class: 'badge-confirme' },
        en_appel: { label: 'En appel', class: 'badge-en_appel' },
        annule: { label: 'Annulé', class: 'badge-annule' },
        en_cours: { label: 'En cours', class: 'badge-en_cours' }
    };
    
    const cfg = config[statut] || { label: statut, class: 'badge-confirme' };
    return `<span class="badge-status ${cfg.class}">${cfg.label}</span>`;
}

function getFileIcon(type) {
    const icons = {
        verdict: '<i class="ri-scales-3-line"></i>',
        rapport: '<i class="ri-file-text-line"></i>',
        preuve: '<i class="ri-camera-line"></i>',
        decision: '<i class="ri-article-line"></i>'
    };
    return icons[type] || '<i class="ri-file-line"></i>';
}

function getDocumentTypeLabel(type) {
    const labels = {
        verdict: 'Verdict',
        rapport: 'Rapport d\'enquête',
        preuve: 'Preuve',
        decision: 'Décision de juridiction',
        autre: 'Autre'
    };
    return labels[type] || type;
}

function updateLoadingState() {
    const tbody = document.getElementById('tableBody');
    if (!tbody) return;
    
    if (state.loading) {
        tbody.innerHTML = `
            <tr>
                <td colspan="10" class="loading-cell">
                    <div class="loading-spinner"></div>
                    Chargement des données...
                </td>
            </tr>
        `;
    }
}

// === MODAL MANAGEMENT ===
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        state.currentModalId = modalId;
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        state.currentModalId = null;
    }
}

function closeCondamnationModal() {
    closeModal('condamnationModal');
}

function closeDetailsModal() {
    closeModal('detailsModal');
    state.currentCondamnation = null;
}

// Close modal on background click
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('modal')) {
        closeModal(state.currentModalId);
    }
});

// === EXPORT DATA ===
async function exportData() {
    try {
        logAction('export_data', 'Export des condamnations', 'info');
        
        // En production: GET /api/condamnations/export
        alert('Fonction d\'export en cours de développement');
        
    } catch (error) {
        console.error('❌ Erreur export:', error);
        showError('Impossible d\'exporter les données');
    }
}

// === NAVIGATION FUNCTIONS ===
function viewPersonne(id) {
    logAction('navigate_personne', `Navigation vers personne ${id}`);
    console.log('Navigation vers personne:', id);
    // En production: redirection vers module Sujets
}

function viewEnquete(id) {
    logAction('navigate_enquete', `Navigation vers enquête ${id}`);
    console.log('Navigation vers enquête:', id);
    // En production: redirection vers module Enquêtes
}

function viewSignalement(id) {
    logAction('navigate_signalement', `Navigation vers signalement ${id}`);
    console.log('Navigation vers signalement:', id);
    // En production: redirection vers module Signalements
}

function viewEtablissement(id) {
    logAction('navigate_etablissement', `Navigation vers établissement ${id}`);
    console.log('Navigation vers établissement:', id);
    // En production: redirection vers module Établissements
}

function downloadFile(id) {
    logAction('download_file', `Téléchargement pièce jointe ${id}`, 'info');
    console.log('Téléchargement fichier:', id);
    // En production: GET /api/uploads/:id/download
}

function viewFile(id) {
    logAction('view_file', `Consultation pièce jointe ${id}`, 'info');
    console.log('Visualisation fichier:', id);
    // En production: GET /api/uploads/:id/view
}

// === SORT TABLE ===
function sortTable(field) {
    if (state.sortBy === field) {
        state.sortOrder = state.sortOrder === 'asc' ? 'desc' : 'asc';
    } else {
        state.sortBy = field;
        state.sortOrder = 'asc';
    }
    fetchCondamnations();
}

// === NOTIFICATIONS ===
function showSuccess(message) {
    console.log('✅', message);
    // En production: afficher une notification toast
    alert(message);
}

function showError(message) {
    console.error('❌', message);
    // En production: afficher une notification toast d'erreur
    alert('Erreur: ' + message);
}

// === MOCK DATA GENERATORS ===
function generateMockCondamnations(page, pageSize) {
    const condamnations = [];
    const startIndex = (page - 1) * pageSize;
    
    const noms = ['Mahamat Hassan', 'Deby Itno', 'Ngarlejy Yorongar', 'Abdelkerim Bachar', 
                  'Idriss Brahim', 'Ahmat Saleh', 'Youssouf Adam', 'Haroun Kabadi'];
    const prenoms = ['Abdoulaye', 'Khamis', 'François', 'Ahmed', 'Mohammed', 'Ali', 'Omar', 'Ibrahim'];
    const types = ['terrorisme', 'criminel', 'drogue', 'fraude', 'violence', 'cybercriminalite', 'corruption'];
    const juridictions = ['cour_supreme', 'cour_appel', 'tribunal_grande_instance', 'tribunal_correctionnel', 'cour_assises'];
    const statuts = ['confirme', 'en_appel', 'annule', 'en_cours'];
    
    for (let i = 0; i < pageSize; i++) {
        const idx = startIndex + i;
        if (idx >= 2847) break;
        
        const type = types[idx % types.length];
        const juridiction = juridictions[idx % juridictions.length];
        const gravite = Math.floor(Math.random() * 5) + 1;
        
        condamnations.push({
            id: `cond-${idx + 1}`,
            reference: `COND-${String(idx + 1).padStart(6, '0')}`,
            personneId: `p${idx % 8 + 1}`,
            personneName: `${noms[idx % noms.length]} ${prenoms[idx % prenoms.length]}`,
            personneCategorie: ['A', 'B', 'C'][idx % 3],
            typeInfraction: type,
            typeInfractionLabel: type.charAt(0).toUpperCase() + type.slice(1),
            juridiction: juridiction,
            juridictionLabel: getJuridictionLabel(juridiction),
            dateJugement: new Date(2020 + (idx % 5), idx % 12, (idx % 28) + 1).toISOString().split('T')[0],
            motif: `Motif de condamnation pour ${type} - Détails confidentiels réservés aux agents habilités.`,
            peine: `${Math.floor(Math.random() * 20) + 1} ans de prison`,
            gravite: gravite,
            statut: statuts[idx % statuts.length],
            piecesJointes: Math.floor(Math.random() * 5),
            observations: idx % 3 === 0 ? 'Observations importantes sur cette condamnation' : null
        });
    }
    
    return condamnations;
}

function generateMockCondamnationDetails(id) {
    const mock = generateMockCondamnations(1, 1)[0];
    mock.id = id;
    
    mock.piecesJointes = [
        {
            id: 'doc1',
            name: 'verdict_final.pdf',
            type: 'verdict',
            typeLabel: 'Verdict',
            size: 2458963,
            dateUpload: '2024-03-15T10:30:00'
        },
        {
            id: 'doc2',
            name: 'rapport_enquete.pdf',
            type: 'rapport',
            typeLabel: 'Rapport d\'enquête',
            size: 5847236,
            dateUpload: '2024-03-14T14:20:00'
        }
    ];
    
    mock.enquetes = [
        { id: 'enq1', reference: 'ENQ-2024-045', titre: 'Enquête sur activités suspectes' },
        { id: 'enq2', reference: 'ENQ-2024-089', titre: 'Investigation réseau criminel' }
    ];
    
    mock.signalements = [
        { id: 'sig1', dateReception: '2024-01-20T09:15:00' },
        { id: 'sig2', dateReception: '2024-02-08T16:45:00' }
    ];
    
    mock.etablissements = [
        { id: 'etab1', nom: 'Bar Le Palmier', adresse: 'Avenue Charles de Gaulle, N\'Djamena' }
    ];
    
    mock.historique = [
        { date: '2024-11-15T09:30:00', action: 'Condamnation créée', user: 'Agent ANSE-001' },
        { date: '2024-11-16T14:20:00', action: 'Ajout de pièce jointe: verdict_final.pdf', user: 'Agent ANSE-002' },
        { date: '2024-11-17T11:05:00', action: 'Modification du statut: En appel', user: 'Agent ANSE-001' }
    ];
    
    return mock;
}

function getJuridictionLabel(juridiction) {
    const labels = {
        cour_supreme: 'Cour Suprême',
        cour_appel: 'Cour d\'Appel',
        tribunal_grande_instance: 'Tribunal de Grande Instance',
        tribunal_correctionnel: 'Tribunal Correctionnel',
        cour_assises: 'Cour d\'Assises'
    };
    return labels[juridiction] || juridiction;
}

// === GLOBAL EXPOSURE ===
window.openCondamnation = openCondamnation;
window.editCondamnation = editCondamnation;
window.deleteCondamnation = deleteCondamnation;
window.submitCondamnation = submitCondamnation;
window.closeCondamnationModal = closeCondamnationModal;
window.closeDetailsModal = closeDetailsModal;
window.openUploadModal = openUploadModal;
window.closeUploadModal = closeUploadModal;
window.uploadFile = uploadFile;
window.changePage = changePage;
window.sortTable = sortTable;
window.viewPersonne = viewPersonne;
window.viewEnquete = viewEnquete;
window.viewSignalement = viewSignalement;
window.viewEtablissement = viewEtablissement;
window.downloadFile = downloadFile;
window.viewFile = viewFile;

console.log('📦 Module Condamnations chargé');
