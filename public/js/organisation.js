// ==================== Organisation Module - SIGMA ====================
// Module de gestion des organisations surveillées
// Auteur: AT Productions / ANSE
// Date: 2025

// ==================== DONNÉES DE TEST ====================

const organizationsData = [
    {
        id: 'ORG-2341',
        name: 'Mouvement pour la Justice et l\'Égalité',
        acronym: 'MJE',
        type: 'politique',
        responsible: 'Abdoulaye MAHAMAT',
        phone: '+235 99 12 34 56',
        email: 'contact@mje-tchad.org',
        threatLevel: 4,
        status: 'surveillance',
        dateAdded: '2024-03-15',
        members: 847
    },
    {
        id: 'ORG-1567',
        name: 'Confrérie des Frères Musulmans du Sahel',
        acronym: 'CFMS',
        type: 'religieuse',
        responsible: 'Ibrahim HASSAN',
        phone: '+235 98 76 54 32',
        email: 'info@cfms-sahel.org',
        threatLevel: 5,
        status: 'surveillance',
        dateAdded: '2024-01-22',
        members: 1234
    },
    {
        id: 'ORG-4892',
        name: 'Association des Jeunes pour le Développement',
        acronym: 'AJD',
        type: 'associative',
        responsible: 'Fatima OUMAR',
        phone: '+235 97 11 22 33',
        email: 'ajd@gmail.com',
        threatLevel: 2,
        status: 'active',
        dateAdded: '2024-06-10',
        members: 342
    },
    {
        id: 'ORG-7123',
        name: 'Réseau Commercial Transsaharien',
        acronym: 'RCT',
        type: 'economique',
        responsible: 'Moussa DEBY',
        phone: '+235 96 88 77 66',
        email: 'rct.business@yahoo.fr',
        threatLevel: 3,
        status: 'surveillance',
        dateAdded: '2024-08-05',
        members: 567
    },
    {
        id: 'ORG-3456',
        name: 'Cellule d\'Intervention Rapide du Nord',
        acronym: 'CIRN',
        type: 'criminelle',
        responsible: 'Youssouf IDRISS',
        phone: '+235 95 44 55 66',
        email: 'inconnu',
        threatLevel: 5,
        status: 'surveillance',
        dateAdded: '2023-11-18',
        members: 89
    },
    {
        id: 'ORG-8901',
        name: 'Front de Libération du Lac Tchad',
        acronym: 'FLLT',
        type: 'terroriste',
        responsible: 'Hassan SALEH',
        phone: 'Non disponible',
        email: 'inconnu',
        threatLevel: 5,
        status: 'surveillance',
        dateAdded: '2023-09-03',
        members: 156
    },
    {
        id: 'ORG-5678',
        name: 'Union des Commerçants de N\'Djamena',
        acronym: 'UCN',
        type: 'economique',
        responsible: 'Aisha MAHAMAT',
        phone: '+235 94 33 22 11',
        email: 'ucn@commerce-tchad.td',
        threatLevel: 1,
        status: 'active',
        dateAdded: '2024-10-12',
        members: 2341
    },
    {
        id: 'ORG-2109',
        name: 'Ligue Islamique pour la Réforme',
        acronym: 'LIR',
        type: 'religieuse',
        responsible: 'Omar ZAKARIA',
        phone: '+235 93 99 88 77',
        email: 'lir.tchad@hotmail.com',
        threatLevel: 4,
        status: 'surveillance',
        dateAdded: '2024-02-28',
        members: 1567
    },
    {
        id: 'ORG-6543',
        name: 'Parti pour la Démocratie et le Progrès',
        acronym: 'PDP',
        type: 'politique',
        responsible: 'Mariam ABDELRAHIM',
        phone: '+235 92 66 55 44',
        email: 'pdp.tchad@gmail.com',
        threatLevel: 2,
        status: 'active',
        dateAdded: '2024-07-19',
        members: 4523
    },
    {
        id: 'ORG-9876',
        name: 'Réseau d\'Aide aux Réfugiés',
        acronym: 'RAR',
        type: 'associative',
        responsible: 'Halima ADAM',
        phone: '+235 91 77 88 99',
        email: 'rar.ndjamena@unhcr.org',
        threatLevel: 1,
        status: 'active',
        dateAdded: '2024-09-30',
        members: 678
    },
    {
        id: 'ORG-1234',
        name: 'Brigade de Contrebande du Tibesti',
        acronym: 'BCT',
        type: 'criminelle',
        responsible: 'Ali ACHEIKH',
        phone: 'Non disponible',
        email: 'inconnu',
        threatLevel: 4,
        status: 'surveillance',
        dateAdded: '2024-04-07',
        members: 234
    },
    {
        id: 'ORG-7890',
        name: 'Conseil des Sages et Notables',
        acronym: 'CSN',
        type: 'associative',
        responsible: 'Mohamed BRAHIM',
        phone: '+235 90 55 44 33',
        email: 'csn.tchad@yahoo.fr',
        threatLevel: 1,
        status: 'active',
        dateAdded: '2024-11-15',
        members: 156
    },
    {
        id: 'ORG-4567',
        name: 'Mouvement Populaire pour la Résistance',
        acronym: 'MPR',
        type: 'politique',
        responsible: 'Rachida OUSMAN',
        phone: '+235 89 22 33 44',
        email: 'mpr.resistance@protonmail.com',
        threatLevel: 4,
        status: 'surveillance',
        dateAdded: '2024-05-21',
        members: 1890
    },
    {
        id: 'ORG-3210',
        name: 'Coopérative Agricole du Chari',
        acronym: 'CAC',
        type: 'economique',
        responsible: 'Safiya IBRAHIM',
        phone: '+235 88 11 22 33',
        email: 'cac.agriculture@gmail.com',
        threatLevel: 1,
        status: 'active',
        dateAdded: '2024-12-03',
        members: 567
    },
    {
        id: 'ORG-8765',
        name: 'Alliance Confessionnelle du Sahara',
        acronym: 'ACS',
        type: 'religieuse',
        responsible: 'Zainab ALI',
        phone: '+235 87 99 88 77',
        email: 'acs.sahara@outlook.com',
        threatLevel: 3,
        status: 'surveillance',
        dateAdded: '2024-03-09',
        members: 2456
    },
    {
        id: 'ORG-5432',
        name: 'Union Tribale du Kanem',
        acronym: 'UTK',
        type: 'politique',
        responsible: 'Amadou YOUSSOUF',
        phone: '+235 86 44 55 66',
        email: 'utk.kanem@yahoo.com',
        threatLevel: 3,
        status: 'active',
        dateAdded: '2024-08-27',
        members: 3421
    },
    {
        id: 'ORG-6789',
        name: 'Milice d\'Auto-Défense du Borkou',
        acronym: 'MADB',
        type: 'criminelle',
        responsible: 'Hassan MAHAMAT',
        phone: 'Non disponible',
        email: 'inconnu',
        threatLevel: 5,
        status: 'surveillance',
        dateAdded: '2023-12-14',
        members: 445
    },
    {
        id: 'ORG-2345',
        name: 'Association pour le Dialogue Interreligieux',
        acronym: 'ADI',
        type: 'associative',
        responsible: 'Amina TAHIR',
        phone: '+235 85 33 22 11',
        email: 'adi.dialogue@gmail.com',
        threatLevel: 1,
        status: 'active',
        dateAdded: '2024-10-08',
        members: 234
    }
];

// ==================== ÉTAT DE L'APPLICATION ====================

let currentPage = 1;
let itemsPerPage = 10;
let filteredData = [...organizationsData];
let sortColumn = '';
let sortDirection = 'asc';

// ==================== STATISTIQUES ====================

const statsConfig = [
    {
        icon: 'ri-building-line',
        label: 'Total Organisations',
        value: organizationsData.length,
        trend: { direction: 'up', value: '15%' },
        color: 'primary',
        footer: 'Organisations enregistrées'
    },
    {
        icon: 'ri-eye-line',
        label: 'Surveillance Active',
        value: organizationsData.filter(org => org.status === 'surveillance').length,
        trend: { direction: 'up', value: '8%' },
        color: 'warning',
        footer: 'Monitoring en temps réel'
    },
    {
        icon: 'ri-checkbox-circle-line',
        label: 'Organisations Actives',
        value: organizationsData.filter(org => org.status === 'active').length,
        trend: { direction: 'up', value: '12%' },
        color: 'success',
        footer: 'Entités légales'
    },
    {
        icon: 'ri-alarm-warning-line',
        label: 'Menace Critique',
        value: organizationsData.filter(org => org.threatLevel >= 4).length,
        trend: { direction: 'down', value: '3%' },
        color: 'danger',
        footer: 'Niveau 4 et 5'
    },
    {
        icon: 'ri-team-line',
        label: 'Membres Totaux',
        value: organizationsData.reduce((sum, org) => sum + org.members, 0).toLocaleString(),
        trend: { direction: 'up', value: '18%' },
        color: 'info',
        footer: 'Tous confondus'
    },
    {
        icon: 'ri-forbid-line',
        label: 'Organisations Dissoutes',
        value: organizationsData.filter(org => org.status === 'dissoute').length,
        trend: { direction: 'down', value: '25%' },
        color: 'purple',
        footer: 'Cette année'
    }
];

// ==================== FONCTIONS DE RENDU ====================

/**
 * Génère et affiche les cartes statistiques
 */
function renderStats() {
    const statsGrid = document.getElementById('statsGrid');
    statsGrid.innerHTML = '';

    statsConfig.forEach(stat => {
        const card = document.createElement('div');
        card.className = `stat-card ${stat.color}`;
        
        card.innerHTML = `
            <div class="stat-header">
                <div class="stat-icon">
                    <i class="${stat.icon}"></i>
                </div>
                <div class="stat-trend ${stat.trend.direction}">
                    <i class="ri-arrow-${stat.trend.direction === 'up' ? 'up' : 'down'}-line"></i>
                    ${stat.trend.value}
                </div>
            </div>
            <div class="stat-body">
                <div class="stat-label">${stat.label}</div>
                <div class="stat-value">${stat.value}</div>
                <div class="stat-footer">
                    <i class="ri-information-line"></i>
                    <span>${stat.footer}</span>
                </div>
            </div>
        `;
        
        statsGrid.appendChild(card);
    });
}

/**
 * Génère et affiche le tableau des organisations
 */
function renderTable() {
    const tableBody = document.getElementById('tableBody');
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const pageData = filteredData.slice(startIndex, endIndex);

    tableBody.innerHTML = '';

    if (pageData.length === 0) {
        tableBody.innerHTML = `
            <tr>
                <td colspan="9" class="empty-state">
                    <i class="ri-building-line"></i>
                    <p>Aucune organisation trouvée</p>
                    <small>Essayez de modifier vos critères de recherche</small>
                </td>
            </tr>
        `;
        updatePaginationInfo();
        return;
    }

    pageData.forEach(org => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><span class="org-id">${org.id}</span></td>
            <td>
                <div class="org-name">
                    <span class="name-primary">${org.name}</span>
                    <span class="name-secondary">${org.acronym}</span>
                </div>
            </td>
            <td><span class="type-badge ${org.type}">${getTypeLabel(org.type)}</span></td>
            <td>${org.responsible}</td>
            <td>
                <div class="contact-info">
                    <div class="contact-phone">
                        <i class="ri-phone-line"></i>
                        <span>${org.phone}</span>
                    </div>
                    <div class="contact-email">
                        <i class="ri-mail-line"></i>
                        <span>${org.email}</span>
                    </div>
                </div>
            </td>
            <td>
                <div class="threat-level">
                    <div class="threat-dots">
                        ${generateThreatDots(org.threatLevel)}
                    </div>
                    <span style="font-size: 12px; color: var(--text-secondary);">${org.threatLevel}/5</span>
                </div>
            </td>
            <td>${formatDate(org.dateAdded)}</td>
            <td><span class="status-badge ${org.status}">${getStatusLabel(org.status)}</span></td>
            <td>
                <div class="action-buttons">
                    <button class="action-btn view" title="Voir les détails" onclick="viewOrganization('${org.id}')">
                        <i class="ri-eye-line"></i>
                    </button>
                    <button class="action-btn edit" title="Modifier" onclick="editOrganization('${org.id}')">
                        <i class="ri-edit-line"></i>
                    </button>
                    <button class="action-btn toggle ${org.status === 'active' ? '' : 'inactive'}" 
                            title="${org.status === 'active' ? 'Désactiver' : 'Activer'}" 
                            onclick="toggleOrganization('${org.id}')">
                        <i class="ri-${org.status === 'active' ? 'close-circle' : 'checkbox-circle'}-line"></i>
                    </button>
                </div>
            </td>
        `;
        tableBody.appendChild(row);
    });

    updatePaginationInfo();
    renderPagination();
}

// ==================== FONCTIONS UTILITAIRES ====================

/**
 * Génère les points visuels du niveau de menace
 */
function generateThreatDots(level) {
    let html = '';
    for (let i = 1; i <= 5; i++) {
        html += `<div class="threat-dot ${i <= level ? 'filled' : ''}"></div>`;
    }
    return html;
}

/**
 * Retourne le libellé du type d'organisation
 */
function getTypeLabel(type) {
    const labels = {
        'politique': 'Politique',
        'religieuse': 'Religieuse',
        'associative': 'Associative',
        'economique': 'Économique',
        'criminelle': 'Criminelle',
        'terroriste': 'Terroriste'
    };
    return labels[type] || type;
}

/**
 * Retourne le libellé du statut
 */
function getStatusLabel(status) {
    const labels = {
        'active': 'Active',
        'surveillance': 'Sous surveillance',
        'inactive': 'Inactive',
        'dissoute': 'Dissoute'
    };
    return labels[status] || status;
}

/**
 * Formate une date au format français
 */
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR', { 
        day: '2-digit', 
        month: '2-digit', 
        year: 'numeric' 
    });
}

// ==================== PAGINATION ====================

/**
 * Génère les boutons de pagination
 */
function renderPagination() {
    const totalPages = Math.ceil(filteredData.length / itemsPerPage);
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';

    // Bouton précédent
    const prevBtn = document.createElement('button');
    prevBtn.className = 'page-btn';
    prevBtn.innerHTML = '<i class="ri-arrow-left-s-line"></i>';
    prevBtn.disabled = currentPage === 1;
    prevBtn.onclick = () => changePage(currentPage - 1);
    pagination.appendChild(prevBtn);

    // Numéros de page
    const maxVisiblePages = 5;
    let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
    let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

    if (endPage - startPage < maxVisiblePages - 1) {
        startPage = Math.max(1, endPage - maxVisiblePages + 1);
    }

    if (startPage > 1) {
        const firstBtn = document.createElement('button');
        firstBtn.className = 'page-btn';
        firstBtn.textContent = '1';
        firstBtn.onclick = () => changePage(1);
        pagination.appendChild(firstBtn);

        if (startPage > 2) {
            const dots = document.createElement('span');
            dots.textContent = '...';
            dots.style.padding = '0 10px';
            dots.style.color = 'var(--text-secondary)';
            pagination.appendChild(dots);
        }
    }

    for (let i = startPage; i <= endPage; i++) {
        const pageBtn = document.createElement('button');
        pageBtn.className = `page-btn ${i === currentPage ? 'active' : ''}`;
        pageBtn.textContent = i;
        pageBtn.onclick = () => changePage(i);
        pagination.appendChild(pageBtn);
    }

    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            const dots = document.createElement('span');
            dots.textContent = '...';
            dots.style.padding = '0 10px';
            dots.style.color = 'var(--text-secondary)';
            pagination.appendChild(dots);
        }

        const lastBtn = document.createElement('button');
        lastBtn.className = 'page-btn';
        lastBtn.textContent = totalPages;
        lastBtn.onclick = () => changePage(totalPages);
        pagination.appendChild(lastBtn);
    }

    // Bouton suivant
    const nextBtn = document.createElement('button');
    nextBtn.className = 'page-btn';
    nextBtn.innerHTML = '<i class="ri-arrow-right-s-line"></i>';
    nextBtn.disabled = currentPage === totalPages;
    nextBtn.onclick = () => changePage(currentPage + 1);
    pagination.appendChild(nextBtn);
}

/**
 * Change la page active
 */
function changePage(page) {
    const totalPages = Math.ceil(filteredData.length / itemsPerPage);
    if (page < 1 || page > totalPages) return;
    currentPage = page;
    renderTable();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

/**
 * Met à jour les informations de pagination
 */
function updatePaginationInfo() {
    const startEntry = filteredData.length > 0 ? (currentPage - 1) * itemsPerPage + 1 : 0;
    const endEntry = Math.min(currentPage * itemsPerPage, filteredData.length);
    const totalEntries = filteredData.length;

    document.getElementById('startEntry').textContent = startEntry;
    document.getElementById('endEntry').textContent = endEntry;
    document.getElementById('totalEntries').textContent = totalEntries;
}

// ==================== FILTRAGE ====================

/**
 * Applique tous les filtres actifs
 */
function applyFilters() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const typeFilter = document.getElementById('typeFilter').value;
    const statusFilter = document.getElementById('statusFilter').value;
    const threatFilter = document.getElementById('threatFilter').value;

    filteredData = organizationsData.filter(org => {
        // Recherche textuelle
        const matchesSearch = !searchTerm || 
            org.id.toLowerCase().includes(searchTerm) ||
            org.name.toLowerCase().includes(searchTerm) ||
            org.acronym.toLowerCase().includes(searchTerm) ||
            org.responsible.toLowerCase().includes(searchTerm) ||
            org.email.toLowerCase().includes(searchTerm) ||
            org.phone.toLowerCase().includes(searchTerm);

        // Filtre type
        const matchesType = !typeFilter || org.type === typeFilter;

        // Filtre statut
        const matchesStatus = !statusFilter || org.status === statusFilter;

        // Filtre niveau de menace
        const matchesThreat = !threatFilter || org.threatLevel === parseInt(threatFilter);

        return matchesSearch && matchesType && matchesStatus && matchesThreat;
    });

    currentPage = 1;
    renderTable();
}

// ==================== TRI ====================

/**
 * Trie le tableau par colonne
 */
function sortTable(column) {
    if (sortColumn === column) {
        sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
    } else {
        sortColumn = column;
        sortDirection = 'asc';
    }

    filteredData.sort((a, b) => {
        let valueA = a[column];
        let valueB = b[column];

        // Gestion des types de données
        if (column === 'dateAdded') {
            valueA = new Date(valueA);
            valueB = new Date(valueB);
        } else if (typeof valueA === 'string') {
            valueA = valueA.toLowerCase();
            valueB = valueB.toLowerCase();
        }

        if (valueA < valueB) return sortDirection === 'asc' ? -1 : 1;
        if (valueA > valueB) return sortDirection === 'asc' ? 1 : -1;
        return 0;
    });

    renderTable();
}

// ==================== ACTIONS SUR LES ORGANISATIONS ====================

/**
 * Affiche les détails d'une organisation
 */
function viewOrganization(id) {
    const org = organizationsData.find(o => o.id === id);
    if (org) {
        alert(`Détails de l'organisation:\n\n` +
              `ID: ${org.id}\n` +
              `Nom: ${org.name} (${org.acronym})\n` +
              `Type: ${getTypeLabel(org.type)}\n` +
              `Responsable: ${org.responsible}\n` +
              `Téléphone: ${org.phone}\n` +
              `Email: ${org.email}\n` +
              `Niveau de menace: ${org.threatLevel}/5\n` +
              `Statut: ${getStatusLabel(org.status)}\n` +
              `Membres: ${org.members}\n` +
              `Date d'enregistrement: ${formatDate(org.dateAdded)}`);
    }
    console.log('Voir organisation:', id);
}

/**
 * Édite une organisation
 */
function editOrganization(id) {
    alert(`Édition de l'organisation ${id}`);
    console.log('Éditer organisation:', id);
}

/**
 * Active/Désactive une organisation
 */
function toggleOrganization(id) {
    const org = organizationsData.find(o => o.id === id);
    if (org) {
        const newStatus = org.status === 'active' ? 'inactive' : 'active';
        const action = newStatus === 'active' ? 'activer' : 'désactiver';
        
        if (confirm(`Voulez-vous vraiment ${action} l'organisation ${org.name} ?`)) {
            org.status = newStatus;
            applyFilters();
            alert(`Organisation ${org.name} ${newStatus === 'active' ? 'activée' : 'désactivée'} avec succès.`);
        }
    }
    console.log('Toggle organisation:', id);
}

/**
 * Ajoute une nouvelle organisation
 */
function addOrganization() {
    alert('Ouverture du formulaire de création d\'une nouvelle organisation');
    console.log('Ajouter nouvelle organisation');
}

/**
 * Exporte les données
 */
function exportData() {
    alert('Export des données en cours...\nFormat: CSV, Excel ou PDF');
    console.log('Export des organisations:', filteredData);
}

// ==================== ÉVÉNEMENTS ====================

/**
 * Initialisation au chargement de la page
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Module Organisations initialisé - SIGMA');
    
    // Rendu initial
    renderStats();
    renderTable();

    // Sidebar toggle
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    
    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        const icon = toggleBtn.querySelector('i');
        icon.classList.toggle('ri-menu-fold-line');
        icon.classList.toggle('ri-menu-unfold-line');
    });

    // Événements de filtrage
    document.getElementById('searchInput').addEventListener('input', applyFilters);
    document.getElementById('typeFilter').addEventListener('change', applyFilters);
    document.getElementById('statusFilter').addEventListener('change', applyFilters);
    document.getElementById('threatFilter').addEventListener('change', applyFilters);

    // Boutons d'action
    document.getElementById('addOrgBtn').addEventListener('click', addOrganization);
    document.getElementById('exportBtn').addEventListener('click', exportData);

    // Navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });
    });

    console.log('✅ Module prêt:', {
        organisations: organizationsData.length,
        types: [...new Set(organizationsData.map(o => o.type))],
        statuts: [...new Set(organizationsData.map(o => o.status))]
    });
});

// ==================== UTILITAIRES GLOBAUX ====================

/**
 * Réinitialise tous les filtres
 */
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('threatFilter').value = '';
    applyFilters();
}

/**
 * Affiche/masque les organisations selon le type
 */
function filterByType(type) {
    document.getElementById('typeFilter').value = type;
    applyFilters();
}

/**
 * Affiche/masque les organisations selon le statut
 */
function filterByStatus(status) {
    document.getElementById('statusFilter').value = status;
    applyFilters();
}

// Exposition des fonctions globales pour l'usage externe
window.sortTable = sortTable;
window.viewOrganization = viewOrganization;
window.editOrganization = editOrganization;
window.toggleOrganization = toggleOrganization;