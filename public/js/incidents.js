// ============================================
// SIGMA - Module Incidents - JavaScript
// ============================================

// ============================================
// MOCK DATA
// ============================================

const mockIncidents = [
    {
        id: 1,
        titre: "Attroupement non autorisé au Marché Central",
        type: "attroupement_politique",
        description: "Rassemblement d'environ 150 personnes devant le marché central, slogans politiques et distribution de tracts. Intervention des forces de l'ordre nécessaire pour disperser la foule.",
        date: "2024-12-08",
        heure: "14:30",
        adresse: "Place du Marché Central, Avenue Charles de Gaulle, N'Djamena",
        latitude: 12.1348,
        longitude: 15.0557,
        gravite: "critique",
        statut: "en_cours",
        source: "Patrouille urbaine Alpha-3",
        contexte: "Contexte électoral tendu, présence de plusieurs figures politiques identifiées",
        personnes: [1, 5, 12],
        reseaux: [2, 4],
        etablissements: [3],
        identites: [7, 15],
        createdAt: "2024-12-08T14:45:00"
    },
    {
        id: 2,
        titre: "Incident violent à la mosquée Al-Nasr",
        type: "incident_violent",
        description: "Altercation violente entre deux groupes après la prière du vendredi. Plusieurs blessés légers signalés. Tensions liées à des divergences idéologiques",
        date: "2024-12-06",
        heure: "13:15",
        adresse: "Mosquée Al-Nasr, Quartier Farcha, N'Djamena",
        latitude: 12.1156,
        longitude: 15.0494,
        gravite: "modere",
        statut: "investigation",
        source: "Imam de la mosquée",
        contexte: "Tensions récurrentes dans ce lieu de culte depuis 3 mois",
        personnes: [3, 8, 11],
        reseaux: [1],
        etablissements: [5],
        identites: [],
        createdAt: "2024-12-06T14:30:00"
    },
    {
        id: 3,
        titre: "Activité suspecte près du palais présidentiel",
        type: "activite_suspecte",
        description: "Véhicule suspect stationné pendant plusieurs heures à proximité du périmètre de sécurité. Occupants observant les mouvements. Véhicule identifié et intercepté.",
        date: "2024-12-05",
        heure: "09:20",
        adresse: "Avenue Mobutu, Zone présidentielle, N'Djamena",
        latitude: 12.1078,
        longitude: 15.0444,
        gravite: "critique",
        statut: "resolu",
        source: "Surveillance périmétrique",
        contexte: "Véhicule immatriculé au Cameroun, personnes interrogées et relâchées après vérification",
        personnes: [2, 7],
        reseaux: [],
        etablissements: [1],
        identites: [3],
        createdAt: "2024-12-05T10:00:00"
    },
    {
        id: 4,
        titre: "Trouble à l'ordre public - Université de N'Djamena",
        type: "trouble_ordre_public",
        description: "Manifestation étudiante non autorisée sur le campus. Revendications sociales et blocage des accès principaux. Environ 200 étudiants mobilisés.",
        date: "2024-12-04",
        heure: "08:00",
        adresse: "Université de N'Djamena, Quartier Ardep Djoumal",
        latitude: 12.1289,
        longitude: 15.0378,
        gravite: "modere",
        statut: "resolu",
        source: "Administration universitaire",
        contexte: "Contestation des frais de scolarité et conditions d'étude",
        personnes: [4, 9, 13],
        reseaux: [3],
        etablissements: [2],
        identites: [8, 12],
        createdAt: "2024-12-04T09:15:00"
    },
    {
        id: 5,
        titre: "Rassemblement religieux non déclaré à Moursal",
        type: "rassemblement_religieux",
        description: "Cérémonie religieuse avec présence d'environ 300 personnes sans autorisation préalable. Prêches enregistrés pour analyse.",
        date: "2024-12-03",
        heure: "15:30",
        adresse: "Quartier Moursal, terrain vague près de l'école primaire",
        latitude: 12.1423,
        longitude: 15.0612,
        gravite: "faible",
        statut: "archive",
        source: "Signalement citoyen",
        contexte: "Organisation spontanée, pas de trouble constaté",
        personnes: [6],
        reseaux: [1],
        etablissements: [],
        identites: [5],
        createdAt: "2024-12-03T16:00:00"
    },
    {
        id: 6,
        titre: "Incident au Stade Omnisports",
        type: "incident_etablissement",
        description: "Débordements lors d'un match de football, affrontements entre supporters. Dégâts matériels importants.",
        date: "2024-12-02",
        heure: "17:45",
        adresse: "Stade Omnisports Idriss Mahamat Ouya, N'Djamena",
        latitude: 12.1267,
        longitude: 15.0489,
        gravite: "modere",
        statut: "investigation",
        source: "Sécurité du stade",
        contexte: "Rivalité entre clubs, plusieurs arrestations effectuées",
        personnes: [10, 14],
        reseaux: [],
        etablissements: [4],
        identites: [9, 11],
        createdAt: "2024-12-02T18:30:00"
    },
    {
        id: 7,
        titre: "Activité suspecte réseau social - appel à manifestation",
        type: "activite_suspecte",
        description: "Publication sur réseaux sociaux appelant à une manifestation non autorisée pour demain. Diffusion virale, plus de 5000 partages en 3 heures.",
        date: "2024-12-07",
        heure: "20:15",
        adresse: "Publication en ligne, origine: N'Djamena",
        latitude: null,
        longitude: null,
        gravite: "critique",
        statut: "en_cours",
        source: "Surveillance numérique SIGMA",
        contexte: "Compte créé il y a 2 jours, suspicion de coordination avec acteurs externes",
        personnes: [5, 12],
        reseaux: [4],
        etablissements: [],
        identites: [15, 18, 21],
        createdAt: "2024-12-07T20:30:00"
    },
    {
        id: 8,
        titre: "Altercation au marché d'Abéché",
        type: "incident_violent",
        description: "Dispute commerciale ayant dégénéré en bagarre impliquant une dizaine de personnes. Calme revenu après intervention.",
        date: "2024-11-30",
        heure: "11:20",
        adresse: "Marché central, Abéché",
        latitude: 13.8297,
        longitude: 20.8324,
        gravite: "faible",
        statut: "resolu",
        source: "Police municipale Abéché",
        contexte: "Incident isolé, pas de suites judiciaires",
        personnes: [],
        reseaux: [],
        etablissements: [6],
        identites: [],
        createdAt: "2024-11-30T12:00:00"
    },
    {
        id: 9,
        titre: "Trouble lors d'une réunion politique à Moundou",
        type: "trouble_ordre_public",
        description: "Réunion politique ayant tourné à l'affrontement entre sympathisants de partis opposés. 5 interpellations.",
        date: "2024-11-28",
        heure: "16:00",
        adresse: "Salle communale, Moundou",
        latitude: 8.5667,
        longitude: 16.0833,
        gravite: "modere",
        statut: "resolu",
        source: "Commissariat de Moundou",
        contexte: "Climat politique tendu dans la région",
        personnes: [15, 16],
        reseaux: [2],
        etablissements: [7],
        identites: [20],
        createdAt: "2024-11-28T17:30:00"
    },
    {
        id: 10,
        titre: "Découverte de matériel de propagande",
        type: "activite_suspecte",
        description: "Saisie de plusieurs cartons contenant des tracts et affiches non autorisées dans un local commercial.",
        date: "2024-11-27",
        heure: "14:00",
        adresse: "Rue de Commerce, Quartier Chagoua, N'Djamena",
        latitude: 12.1189,
        longitude: 15.0521,
        gravite: "faible",
        statut: "resolu",
        source: "Contrôle douanier",
        contexte: "Matériel destiné à distribution dans plusieurs quartiers",
        personnes: [17],
        reseaux: [4],
        etablissements: [],
        identites: [16],
        createdAt: "2024-11-27T15:00:00"
    },
    {
        id: 11,
        titre: "Incident lors d'une cérémonie traditionnelle",
        type: "autre",
        description: "Tension lors d'une cérémonie traditionnelle entre deux communautés. Médiation effectuée par les autorités locales.",
        date: "2024-11-25",
        heure: "18:30",
        adresse: "Village de Gaoui, périphérie de N'Djamena",
        latitude: 12.1456,
        longitude: 15.1123,
        gravite: "modere",
        statut: "resolu",
        source: "Chef de canton",
        contexte: "Conflit foncier en toile de fond",
        personnes: [],
        reseaux: [],
        etablissements: [],
        identites: [],
        createdAt: "2024-11-25T19:00:00"
    },
    {
        id: 12,
        titre: "Attroupement à la gare routière",
        type: "attroupement_politique",
        description: "Rassemblement impromptu de chauffeurs protestant contre nouvelles taxes. Blocage temporaire de la circulation.",
        date: "2024-11-24",
        heure: "07:00",
        adresse: "Gare routière de Farcha, N'Djamena",
        latitude: 12.1234,
        longitude: 15.0578,
        gravite: "faible",
        statut: "resolu",
        source: "Police routière",
        contexte: "Revendications corporatistes, négociation en cours",
        personnes: [],
        reseaux: [],
        etablissements: [8],
        identites: [],
        createdAt: "2024-11-24T08:30:00"
    }
];

// Noms de personnes fichées pour l'affichage
const mockPersonnes = {
    1: "Mahamat ABAKAR",
    2: "Ibrahim DEBY",
    3: "Hassan MOUSSA",
    4: "Fatima HASSAN",
    5: "Zakaria ADAM",
    6: "Aïcha MAHAMAT",
    7: "Ahmed SALEH",
    8: "Khadija IBRAHIM",
    9: "Mohamed ALI",
    10: "Amina YOUSSOUF",
    11: "Oumar HASSAN",
    12: "Maryam ABDELKERIM",
    13: "Ali MAHAMAT",
    14: "Hawa MOUSSA",
    15: "Abdallah IDRISS",
    16: "Halimé ADAM",
    17: "Youssouf ABAKAR"
};

const mockReseaux = {
    1: "Mouvement El-Fajr",
    2: "Coalition Patriotique",
    3: "Syndicat des Étudiants",
    4: "Réseau Numérique Sahel"
};

const mockEtablissements = {
    1: "Palais présidentiel",
    2: "Université de N'Djamena",
    3: "Marché Central",
    4: "Stade Omnisports",
    5: "Mosquée Al-Nasr",
    6: "Marché d'Abéché",
    7: "Salle communale Moundou",
    8: "Gare routière de Farcha"
};

// ============================================
// GLOBAL STATE
// ============================================

let currentPage = 1;
const itemsPerPage = 10;
let filteredIncidents = [...mockIncidents];
let currentSort = { column: 'date', order: 'desc' };

// ============================================
// INITIALIZATION
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    initializeStats();
    renderTable();
    setupEventListeners();
    setupDateFilter();
});

// ============================================
// STATISTICS
// ============================================

function initializeStats() {
    const total = mockIncidents.length;
    const critiques = mockIncidents.filter(i => i.gravite === 'critique').length;
    const enCours = mockIncidents.filter(i => i.statut === 'en_cours').length;
    const aujourdhui = mockIncidents.filter(i => i.date === getTodayDate()).length;

    const statsHTML = `
        <div class="stat-card danger">
            <div class="stat-header">
                <div class="stat-icon danger">
                    <i class="ri-alert-fill"></i>
                </div>
                <span class="stat-trend up">+${critiques}</span>
            </div>
            <div class="stat-body">
                <div class="stat-value">${critiques}</div>
                <div class="stat-label">Incidents Critiques</div>
            </div>
            <div class="stat-footer">Nécessitent une attention immédiate</div>
        </div>

        <div class="stat-card primary">
            <div class="stat-header">
                <div class="stat-icon primary">
                    <i class="ri-file-list-3-line"></i>
                </div>
                <span class="stat-trend up">+${total}</span>
            </div>
            <div class="stat-body">
                <div class="stat-value">${total}</div>
                <div class="stat-label">Total Incidents</div>
            </div>
            <div class="stat-footer">Tous les incidents enregistrés</div>
        </div>

        <div class="stat-card warning">
            <div class="stat-header">
                <div class="stat-icon warning">
                    <i class="ri-time-line"></i>
                </div>
                <span class="stat-trend up">+${enCours}</span>
            </div>
            <div class="stat-body">
                <div class="stat-value">${enCours}</div>
                <div class="stat-label">En Cours</div>
            </div>
            <div class="stat-footer">Incidents actuellement surveillés</div>
        </div>

        <div class="stat-card info">
            <div class="stat-header">
                <div class="stat-icon info">
                    <i class="ri-calendar-todo-line"></i>
                </div>
                <span class="stat-trend ${aujourdhui > 0 ? 'up' : 'down'}">
                    ${aujourdhui > 0 ? '+' : ''}${aujourdhui}
                </span>
            </div>
            <div class="stat-body">
                <div class="stat-value">${aujourdhui}</div>
                <div class="stat-label">Aujourd'hui</div>
            </div>
            <div class="stat-footer">Incidents du jour</div>
        </div>
    `;

    document.getElementById('statsGrid').innerHTML = statsHTML;
}

// ============================================
// TABLE RENDERING
// ============================================

function renderTable() {
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const paginatedData = filteredIncidents.slice(start, end);

    const tableBody = document.getElementById('tableBody');
    
    if (paginatedData.length === 0) {
        tableBody.innerHTML = `
            <tr>
                <td colspan="9" style="text-align: center; padding: 40px;">
                    <i class="ri-inbox-line" style="font-size: 48px; color: var(--text-light);"></i>
                    <p style="margin-top: 15px; color: var(--text-gray);">Aucun incident trouvé</p>
                </td>
            </tr>
        `;
        return;
    }

    tableBody.innerHTML = paginatedData.map(incident => {
        const personnesHTML = incident.personnes.slice(0, 2).map(id => 
            `<span class="entity-badge"><i class="ri-user-line"></i> ${mockPersonnes[id]?.split(' ')[0] || 'N/A'}</span>`
        ).join('');
        const plusPersonnes = incident.personnes.length > 2 ? 
            `<span class="entity-badge">+${incident.personnes.length - 2}</span>` : '';
        
        const reseauxHTML = incident.reseaux.slice(0, 1).map(id =>
            `<span class="entity-badge"><i class="ri-group-line"></i> ${mockReseaux[id]}</span>`
        ).join('');
        const plusReseaux = incident.reseaux.length > 1 ?
            `<span class="entity-badge">+${incident.reseaux.length - 1}</span>` : '';

        return `
            <tr data-id="${incident.id}">
                <td><strong>#${String(incident.id).padStart(4, '0')}</strong></td>
                <td><strong>${incident.titre}</strong></td>
                <td>${formatType(incident.type)}</td>
                <td>
                    <div>${formatDate(incident.date)}</div>
                    <small style="color: var(--text-gray);">${incident.heure}</small>
                </td>
                <td>
                    <div style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        ${incident.adresse}
                    </div>
                </td>
                <td>
                    <span class="badge badge-${incident.gravite}">${formatGravite(incident.gravite)}</span>
                </td>
                <td>
                    <div class="entity-badges">
                        ${personnesHTML}${plusPersonnes}
                        ${reseauxHTML}${plusReseaux}
                    </div>
                </td>
                <td>
                    <span class="badge badge-${incident.statut.replace('_', '-')}">${formatStatut(incident.statut)}</span>
                </td>
                <td>
                    <div class="action-btns">
                        <button class="action-icon view" onclick="viewIncident(${incident.id})" title="Voir détails">
                            <i class="ri-eye-line"></i>
                        </button>
                        <button class="action-icon edit" onclick="editIncident(${incident.id})" title="Modifier">
                            <i class="ri-edit-line"></i>
                        </button>
                        <button class="action-icon delete" onclick="deleteIncident(${incident.id})" title="Supprimer">
                            <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `;
    }).join('');

    updatePagination();
}

// ============================================
// PAGINATION
// ============================================

function updatePagination() {
    const totalPages = Math.ceil(filteredIncidents.length / itemsPerPage);
    const start = (currentPage - 1) * itemsPerPage + 1;
    const end = Math.min(currentPage * itemsPerPage, filteredIncidents.length);

    document.getElementById('startEntry').textContent = start;
    document.getElementById('endEntry').textContent = end;
    document.getElementById('totalEntries').textContent = filteredIncidents.length;

    const paginationHTML = [];

    // Previous button
    paginationHTML.push(`
        <button class="page-btn" onclick="changePage(${currentPage - 1})" 
                ${currentPage === 1 ? 'disabled' : ''}>
            <i class="ri-arrow-left-s-line"></i>
        </button>
    `);

    // Page numbers
    for (let i = 1; i <= Math.min(totalPages, 5); i++) {
        const pageNum = i;
        paginationHTML.push(`
            <button class="page-btn ${currentPage === pageNum ? 'active' : ''}" 
                    onclick="changePage(${pageNum})">
                ${pageNum}
            </button>
        `);
    }

    if (totalPages > 5) {
        paginationHTML.push(`<span style="padding: 0 10px; color: var(--text-gray);">...</span>`);
        paginationHTML.push(`
            <button class="page-btn ${currentPage === totalPages ? 'active' : ''}" 
                    onclick="changePage(${totalPages})">
                ${totalPages}
            </button>
        `);
    }

    // Next button
    paginationHTML.push(`
        <button class="page-btn" onclick="changePage(${currentPage + 1})" 
                ${currentPage === totalPages ? 'disabled' : ''}>
            <i class="ri-arrow-right-s-line"></i>
        </button>
    `);

    document.getElementById('pagination').innerHTML = paginationHTML.join('');
}

function changePage(page) {
    const totalPages = Math.ceil(filteredIncidents.length / itemsPerPage);
    if (page >= 1 && page <= totalPages) {
        currentPage = page;
        renderTable();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}

// ============================================
// FILTERS
// ============================================

function applyFilters() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const typeFilter = document.getElementById('typeFilter').value;
    const graviteFilter = document.getElementById('graviteFilter').value;
    const statutFilter = document.getElementById('statutFilter').value;
    const periodeFilter = document.getElementById('periodeFilter').value;

    filteredIncidents = mockIncidents.filter(incident => {
        // Search
        const matchSearch = !searchTerm || 
            incident.titre.toLowerCase().includes(searchTerm) ||
            incident.description.toLowerCase().includes(searchTerm) ||
            incident.adresse.toLowerCase().includes(searchTerm);

        // Type
        const matchType = !typeFilter || incident.type === typeFilter;

        // Gravité
        const matchGravite = !graviteFilter || incident.gravite === graviteFilter;

        // Statut
        const matchStatut = !statutFilter || incident.statut === statutFilter;

        // Période
        let matchPeriode = true;
        if (periodeFilter) {
            const incidentDate = new Date(incident.date);
            const today = new Date();
            
            if (periodeFilter === 'today') {
                matchPeriode = incident.date === getTodayDate();
            } else if (periodeFilter === 'week') {
                const weekAgo = new Date(today.getTime() - 7 * 24 * 60 * 60 * 1000);
                matchPeriode = incidentDate >= weekAgo;
            } else if (periodeFilter === 'month') {
                const monthAgo = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
                matchPeriode = incidentDate >= monthAgo;
            }
        }

        return matchSearch && matchType && matchGravite && matchStatut && matchPeriode;
    });

    currentPage = 1;
    renderTable();
}

// ============================================
// SORTING
// ============================================

function sortTable(column) {
    if (currentSort.column === column) {
        currentSort.order = currentSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentSort.column = column;
        currentSort.order = 'desc';
    }

    filteredIncidents.sort((a, b) => {
        let aVal = a[column];
        let bVal = b[column];

        if (column === 'date') {
            aVal = new Date(a.date + ' ' + a.heure);
            bVal = new Date(b.date + ' ' + b.heure);
        }

        if (currentSort.order === 'asc') {
            return aVal > bVal ? 1 : -1;
        } else {
            return aVal < bVal ? 1 : -1;
        }
    });

    renderTable();
}

// ============================================
// MODALS
// ============================================

function openModal(modalId) {
    document.getElementById(modalId).classList.add('show');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.remove('show');
}

function viewIncident(id) {
    const incident = mockIncidents.find(i => i.id === id);
    if (!incident) return;

    const personnesHTML = incident.personnes.map(pid => 
        `<span class="badge badge-en-cours">${mockPersonnes[pid] || 'N/A'}</span>`
    ).join(' ');

    const reseauxHTML = incident.reseaux.map(rid =>
        `<span class="badge badge-warning">${mockReseaux[rid] || 'N/A'}</span>`
    ).join(' ');

    const etablissementsHTML = incident.etablissements.map(eid =>
        `<span class="badge badge-info">${mockEtablissements[eid] || 'N/A'}</span>`
    ).join(' ');

    const content = `
        <div class="details-grid">
            <div class="detail-section">
                <h4><i class="ri-information-line"></i> Informations générales</h4>
                <div class="detail-row">
                    <span class="detail-label">ID</span>
                    <span class="detail-value">#${String(incident.id).padStart(4, '0')}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Titre</span>
                    <span class="detail-value"><strong>${incident.titre}</strong></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Type</span>
                    <span class="detail-value">${formatType(incident.type)}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Gravité</span>
                    <span class="detail-value">
                        <span class="badge badge-${incident.gravite}">${formatGravite(incident.gravite)}</span>
                    </span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Statut</span>
                    <span class="detail-value">
                        <span class="badge badge-${incident.statut.replace('_', '-')}">${formatStatut(incident.statut)}</span>
                    </span>
                </div>
            </div>

            <div class="detail-section">
                <h4><i class="ri-time-line"></i> Date et heure</h4>
                <div class="detail-row">
                    <span class="detail-label">Date</span>
                    <span class="detail-value">${formatDate(incident.date)}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Heure</span>
                    <span class="detail-value">${incident.heure}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Enregistré le</span>
                    <span class="detail-value">${new Date(incident.createdAt).toLocaleString('fr-FR')}</span>
                </div>
            </div>

            <div class="detail-section" style="grid-column: span 2;">
                <h4><i class="ri-map-pin-line"></i> Localisation</h4>
                <div class="detail-row">
                    <span class="detail-label">Adresse</span>
                    <span class="detail-value">${incident.adresse}</span>
                </div>
                ${incident.latitude ? `
                <div class="detail-row">
                    <span class="detail-label">Coordonnées GPS</span>
                    <span class="detail-value">${incident.latitude}, ${incident.longitude}</span>
                </div>
                ` : ''}
            </div>

            <div class="detail-section" style="grid-column: span 2;">
                <h4><i class="ri-file-text-line"></i> Description</h4>
                <p style="margin-top: 10px; line-height: 1.6;">${incident.description}</p>
            </div>

            ${incident.contexte ? `
            <div class="detail-section" style="grid-column: span 2;">
                <h4><i class="ri-file-list-line"></i> Contexte</h4>
                <p style="margin-top: 10px; line-height: 1.6;">${incident.contexte}</p>
            </div>
            ` : ''}

            ${incident.source ? `
            <div class="detail-section">
                <h4><i class="ri-information-line"></i> Source</h4>
                <p style="margin-top: 10px;">${incident.source}</p>
            </div>
            ` : ''}

            ${incident.personnes.length > 0 ? `
            <div class="detail-section" style="grid-column: span 2;">
                <h4><i class="ri-user-line"></i> Personnes impliquées (${incident.personnes.length})</h4>
                <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                    ${personnesHTML}
                </div>
            </div>
            ` : ''}

            ${incident.reseaux.length > 0 ? `
            <div class="detail-section">
                <h4><i class="ri-group-line"></i> Réseaux (${incident.reseaux.length})</h4>
                <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                    ${reseauxHTML}
                </div>
            </div>
            ` : ''}

            ${incident.etablissements.length > 0 ? `
            <div class="detail-section">
                <h4><i class="ri-building-line"></i> Établissements (${incident.etablissements.length})</h4>
                <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                    ${etablissementsHTML}
                </div>
            </div>
            ` : ''}
        </div>
    `;

    document.getElementById('detailsContent').innerHTML = content;
    openModal('detailsModal');
}

function editIncident(id) {
    const incident = mockIncidents.find(i => i.id === id);
    if (!incident) return;

    document.getElementById('formModalTitle').textContent = 'Modifier l\'incident #' + String(id).padStart(4, '0');
    
    const form = document.getElementById('incidentForm');
    form.elements['titre'].value = incident.titre;
    form.elements['type'].value = incident.type;
    form.elements['description'].value = incident.description;
    form.elements['date'].value = incident.date;
    form.elements['heure'].value = incident.heure;
    form.elements['adresse'].value = incident.adresse;
    form.elements['latitude'].value = incident.latitude || '';
    form.elements['longitude'].value = incident.longitude || '';
    form.elements['gravite'].value = incident.gravite;
    form.elements['statut'].value = incident.statut;
    form.elements['source'].value = incident.source || '';
    form.elements['contexte'].value = incident.contexte || '';

    form.dataset.editId = id;
    openModal('formModal');
}

function deleteIncident(id) {
    if (!confirm('Êtes-vous sûr de vouloir supprimer cet incident ?')) return;

    const index = mockIncidents.findIndex(i => i.id === id);
    if (index !== -1) {
        mockIncidents.splice(index, 1);
        applyFilters();
        initializeStats();
        showNotification('Incident supprimé avec succès', 'success');
    }
}

// ============================================
// FORM HANDLING
// ============================================

function setupEventListeners() {
    // Global search
    document.getElementById('globalSearch').addEventListener('input', debounce((e) => {
        document.getElementById('searchInput').value = e.target.value;
        applyFilters();
    }, 300));

    // Filters
    document.getElementById('searchInput').addEventListener('input', debounce(applyFilters, 300));
    document.getElementById('typeFilter').addEventListener('change', applyFilters);
    document.getElementById('graviteFilter').addEventListener('change', applyFilters);
    document.getElementById('statutFilter').addEventListener('change', applyFilters);
    document.getElementById('periodeFilter').addEventListener('change', applyFilters);

    // Add incident button
    document.getElementById('addIncidentBtn').addEventListener('click', () => {
        document.getElementById('formModalTitle').textContent = 'Nouvel Incident';
        document.getElementById('incidentForm').reset();
        delete document.getElementById('incidentForm').dataset.editId;
        openModal('formModal');
    });

    // Form submission
    document.getElementById('incidentForm').addEventListener('submit', handleFormSubmit);

    // Export button
    document.getElementById('exportBtn').addEventListener('click', exportData);

    // Quick actions
    document.getElementById('viewStatsBtn').addEventListener('click', showStatistics);
    document.getElementById('viewMapBtn').addEventListener('click', () => {
        showNotification('Fonctionnalité de carte en développement', 'info');
    });
    document.getElementById('criticalBtn').addEventListener('click', () => {
        document.getElementById('graviteFilter').value = 'critique';
        applyFilters();
    });

    // Sidebar toggle
    document.getElementById('toggleSidebar').addEventListener('click', () => {
        document.querySelector('.sidebar').classList.toggle('collapsed');
    });
}

function handleFormSubmit(e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);

    const incident = {
        titre: formData.get('titre'),
        type: formData.get('type'),
        description: formData.get('description'),
        date: formData.get('date'),
        heure: formData.get('heure'),
        adresse: formData.get('adresse'),
        latitude: formData.get('latitude') || null,
        longitude: formData.get('longitude') || null,
        gravite: formData.get('gravite'),
        statut: formData.get('statut'),
        source: formData.get('source') || null,
        contexte: formData.get('contexte') || null,
        personnes: [],
        reseaux: [],
        etablissements: [],
        identites: []
    };

    if (form.dataset.editId) {
        // Update existing
        const index = mockIncidents.findIndex(i => i.id === parseInt(form.dataset.editId));
        if (index !== -1) {
            mockIncidents[index] = { ...mockIncidents[index], ...incident };
            showNotification('Incident modifié avec succès', 'success');
        }
    } else {
        // Create new
        incident.id = Math.max(...mockIncidents.map(i => i.id)) + 1;
        incident.createdAt = new Date().toISOString();
        mockIncidents.unshift(incident);
        showNotification('Incident créé avec succès', 'success');
    }

    closeModal('formModal');
    applyFilters();
    initializeStats();
    form.reset();
}

// ============================================
// STATISTICS MODAL
// ============================================

function showStatistics() {
    const byType = {};
    const byGravite = {};
    const byMonth = {};

    mockIncidents.forEach(incident => {
        // By type
        byType[incident.type] = (byType[incident.type] || 0) + 1;
        
        // By gravité
        byGravite[incident.gravite] = (byGravite[incident.gravite] || 0) + 1;
        
        // By month
        const month = incident.date.substring(0, 7);
        byMonth[month] = (byMonth[month] || 0) + 1;
    });

    const content = `
        <div class="stats-dashboard">
            <div class="detail-section">
                <h4><i class="ri-pie-chart-line"></i> Répartition par type</h4>
                <canvas id="typeChart" style="max-height: 300px;"></canvas>
            </div>
            
            <div class="detail-section">
                <h4><i class="ri-bar-chart-line"></i> Répartition par gravité</h4>
                <canvas id="graviteChart" style="max-height: 300px;"></canvas>
            </div>
            
            <div class="detail-section" style="grid-column: span 2;">
                <h4><i class="ri-line-chart-line"></i> Évolution temporelle</h4>
                <canvas id="evolutionChart" style="max-height: 300px;"></canvas>
            </div>
        </div>
    `;

    document.getElementById('statsDashboard').innerHTML = content;
    openModal('statsModal');

    // Wait for modal to render before creating charts
    setTimeout(() => {
        createCharts(byType, byGravite, byMonth);
    }, 100);
}

function createCharts(byType, byGravite, byMonth) {
    // Type Chart
    new Chart(document.getElementById('typeChart'), {
        type: 'doughnut',
        data: {
            labels: Object.keys(byType).map(formatType),
            datasets: [{
                data: Object.values(byType),
                backgroundColor: [
                    '#2274a5', '#ff9800', '#dc3545', '#28a745', '#6c757d', '#17a2b8', '#ffc107'
                ]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    // Gravité Chart
    new Chart(document.getElementById('graviteChart'), {
        type: 'bar',
        data: {
            labels: Object.keys(byGravite).map(formatGravite),
            datasets: [{
                label: 'Nombre d\'incidents',
                data: Object.values(byGravite),
                backgroundColor: ['#28a745', '#ff9800', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });

    // Evolution Chart
    const sortedMonths = Object.keys(byMonth).sort();
    new Chart(document.getElementById('evolutionChart'), {
        type: 'line',
        data: {
            labels: sortedMonths.map(m => {
                const [year, month] = m.split('-');
                return `${month}/${year}`;
            }),
            datasets: [{
                label: 'Nombre d\'incidents',
                data: sortedMonths.map(m => byMonth[m]),
                borderColor: '#2274a5',
                backgroundColor: 'rgba(34, 116, 165, 0.1)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });
}

// ============================================
// UTILITY FUNCTIONS
// ============================================

function formatType(type) {
    const types = {
        'attroupement_politique': 'Attroupement politique',
        'incident_violent': 'Incident violent',
        'activite_suspecte': 'Activité suspecte',
        'trouble_ordre_public': 'Trouble à l\'ordre public',
        'rassemblement_religieux': 'Rassemblement religieux',
        'incident_etablissement': 'Incident établissement',
        'autre': 'Autre'
    };
    return types[type] || type;
}

function formatGravite(gravite) {
    const gravites = {
        'critique': 'Critique',
        'modere': 'Modéré',
        'faible': 'Faible'
    };
    return gravites[gravite] || gravite;
}

function formatStatut(statut) {
    const statuts = {
        'en_cours': 'En cours',
        'investigation': 'En investigation',
        'resolu': 'Résolu',
        'archive': 'Archivé'
    };
    return statuts[statut] || statut;
}

function formatDate(dateStr) {
    const date = new Date(dateStr);
    return date.toLocaleDateString('fr-FR', { 
        day: '2-digit', 
        month: '2-digit', 
        year: 'numeric' 
    });
}

function getTodayDate() {
    const today = new Date();
    return today.toISOString().split('T')[0];
}

function setupDateFilter() {
    const dateInput = document.getElementById('periodeFilter');
    if (dateInput) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.max = today;
    }
}

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

function exportData() {
    const csv = ['ID,Titre,Type,Date,Heure,Adresse,Gravité,Statut'];
    
    filteredIncidents.forEach(incident => {
        csv.push([
            incident.id,
            `"${incident.titre}"`,
            formatType(incident.type),
            incident.date,
            incident.heure,
            `"${incident.adresse}"`,
            formatGravite(incident.gravite),
            formatStatut(incident.statut)
        ].join(','));
    });

    const blob = new Blob([csv.join('\n')], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `incidents_${new Date().toISOString().split('T')[0]}.csv`;
    a.click();
    window.URL.revokeObjectURL(url);
    
    showNotification('Export réussi', 'success');
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        top: 90px;
        right: 30px;
        padding: 15px 20px;
        background: ${type === 'success' ? '#28a745' : type === 'error' ? '#dc3545' : '#17a2b8'};
        color: white;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        z-index: 3000;
        animation: slideInRight 0.3s ease;
    `;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Add CSS animations
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
