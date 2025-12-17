/* ============================================================================
   SIGMA - Système de Surveillance et Gestion
   Module: Tableau de Bord (Dashboard)
   Version 3.0 - 2025
   ANSE - Agence Nationale de Sécurité du Tchad
   ============================================================================ */

// ============================================================================
// SECTION 1: DONNÉES MOCK RÉALISTES
// ============================================================================

const MockData = {
    // Statistiques principales
    stats: {
        totalSujets: 1247,
        sujetsActifs: 892,
        totalOrganisations: 48,
        organisationsSurveillees: 31,
        totalSignalements: 3456,
        signalementsNonTraites: 127,
        enquetesEnCours: 23,
        enquetesUrgentes: 7,
        contenusAnalyses: 8934,
        contenusGraves: 234,
        identitesNumeriques: 2156,
        identitesActives: 1834
    },

    // Tendances (variation en %)
    trends: {
        sujets: { value: 12.5, direction: 'up' },
        organisations: { value: 3.2, direction: 'up' },
        signalements: { value: -8.7, direction: 'down' },
        enquetes: { value: 15.3, direction: 'up' },
        contenus: { value: 23.1, direction: 'up' },
        identites: { value: 5.4, direction: 'up' }
    },

    // Répartition par catégorie (A, B, C, S)
    categories: {
        A: { count: 89, label: 'Catégorie A - Haute priorité', color: '#DC2626' },
        B: { count: 234, label: 'Catégorie B - Priorité moyenne', color: '#F59E0B' },
        C: { count: 512, label: 'Catégorie C - Surveillance standard', color: '#3B82F6' },
        S: { count: 57, label: 'Catégorie S - Spéciale', color: '#8B5CF6' }
    },

    // Répartition géographique (régions du Tchad)
    regions: [
        { name: "N'Djamena", count: 423, percentage: 33.9 },
        { name: 'Lac Tchad', count: 187, percentage: 15.0 },
        { name: 'Logone Occidental', count: 134, percentage: 10.7 },
        { name: 'Ouaddaï', count: 112, percentage: 9.0 },
        { name: 'Moyen-Chari', count: 98, percentage: 7.9 },
        { name: 'Borkou', count: 87, percentage: 7.0 },
        { name: 'Mayo-Kebbi', count: 76, percentage: 6.1 },
        { name: 'Guéra', count: 65, percentage: 5.2 },
        { name: 'Autres régions', count: 65, percentage: 5.2 }
    ],

    // Types d'organisations
    organisationTypes: [
        { type: 'Terroriste', count: 8, color: '#DC2626' },
        { type: 'Criminelle', count: 12, color: '#F59E0B' },
        { type: 'Politique', count: 14, color: '#8B5CF6' },
        { type: 'Religieuse', count: 7, color: '#17A2B8' },
        { type: 'Associative', count: 5, color: '#28A745' },
        { type: 'Économique', count: 2, color: '#3B82F6' }
    ],

    // Évolution mensuelle des signalements
    evolution: {
        labels: ['Juillet', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        signalements: [423, 512, 478, 534, 489, 567],
        traites: [398, 467, 445, 501, 456, 512],
        urgents: [45, 67, 52, 78, 61, 89]
    },

    // Activités récentes
    activities: [
        {
            id: 1,
            type: 'sujet',
            action: 'Nouveau sujet ajouté',
            subject: 'Abdoulaye Hassan M.',
            user: 'Agent ANSE-047',
            time: 'Il y a 15 minutes',
            icon: 'ri-user-add-line',
            color: 'primary'
        },
        {
            id: 2,
            type: 'signalement',
            action: 'Signalement traité',
            subject: 'SIG-2025-3421',
            user: 'Cdt. Mahamat I.',
            time: 'Il y a 32 minutes',
            icon: 'ri-checkbox-circle-line',
            color: 'success'
        },
        {
            id: 3,
            type: 'alerte',
            action: 'Alerte critique émise',
            subject: 'Zone Lac Tchad - Activité suspecte',
            user: 'Système',
            time: 'Il y a 1 heure',
            icon: 'ri-alarm-warning-line',
            color: 'danger'
        },
        {
            id: 4,
            type: 'enquete',
            action: 'Enquête mise à jour',
            subject: 'ENQ-2025-0089',
            user: 'Lt. Oumar D.',
            time: 'Il y a 2 heures',
            icon: 'ri-folder-line',
            color: 'warning'
        },
        {
            id: 5,
            type: 'organisation',
            action: 'Organisation surveillée modifiée',
            subject: 'Front Populaire (FP)',
            user: 'Agent ANSE-023',
            time: 'Il y a 3 heures',
            icon: 'ri-building-line',
            color: 'info'
        },
        {
            id: 6,
            type: 'contenu',
            action: 'Contenu analysé - Grave',
            subject: 'Publication Facebook #45892',
            user: 'Analyste ANSE-112',
            time: 'Il y a 4 heures',
            icon: 'ri-file-warning-line',
            color: 'danger'
        }
    ],

    // Enquêtes en cours
    enquetes: [
        {
            id: 'ENQ-2025-0089',
            titre: 'Réseau de financement - Zone Est',
            priorite: 'critique',
            progression: 75,
            responsable: 'Cdt. Mahamat I.',
            dateDebut: '2025-10-15'
        },
        {
            id: 'ENQ-2025-0092',
            titre: 'Cellule dormante - N\'Djamena',
            priorite: 'urgent',
            progression: 45,
            responsable: 'Lt. Oumar D.',
            dateDebut: '2025-11-02'
        },
        {
            id: 'ENQ-2025-0097',
            titre: 'Trafic d\'armes - Frontière Sud',
            priorite: 'urgent',
            progression: 30,
            responsable: 'Cpt. Abakar S.',
            dateDebut: '2025-11-18'
        },
        {
            id: 'ENQ-2025-0101',
            titre: 'Propagande en ligne - Groupe X',
            priorite: 'normal',
            progression: 60,
            responsable: 'Agent ANSE-047',
            dateDebut: '2025-11-25'
        },
        {
            id: 'ENQ-2025-0103',
            titre: 'Infiltration organisation Y',
            priorite: 'critique',
            progression: 20,
            responsable: 'Lt. Fatima K.',
            dateDebut: '2025-12-01'
        }
    ],

    // Alertes prioritaires
    alertes: [
        {
            id: 'ALT-2025-0456',
            titre: 'Mouvement suspect détecté',
            localisation: 'Région du Lac',
            niveau: 'critique',
            date: '2025-12-11 08:45',
            description: 'Déplacement de groupe armé signalé près de Bol'
        },
        {
            id: 'ALT-2025-0455',
            titre: 'Communication interceptée',
            localisation: 'N\'Djamena',
            niveau: 'urgent',
            date: '2025-12-11 06:30',
            description: 'Message codé détecté sur canal surveillé'
        },
        {
            id: 'ALT-2025-0454',
            titre: 'Rassemblement non autorisé',
            localisation: 'Moundou',
            niveau: 'urgent',
            date: '2025-12-10 22:15',
            description: 'Réunion clandestine signalée dans le quartier sud'
        },
        {
            id: 'ALT-2025-0453',
            titre: 'Activité en ligne suspecte',
            localisation: 'Multiple',
            niveau: 'normal',
            date: '2025-12-10 18:00',
            description: 'Augmentation des publications radicales'
        }
    ],

    // Niveaux de dangerosité
    dangerLevels: [
        { level: 5, label: 'Critique', count: 34, color: '#991B1B', bgColor: 'rgba(153, 27, 27, 0.1)' },
        { level: 4, label: 'Élevé', count: 89, color: '#DC2626', bgColor: 'rgba(220, 38, 38, 0.1)' },
        { level: 3, label: 'Moyen', count: 234, color: '#F59E0B', bgColor: 'rgba(245, 158, 11, 0.1)' },
        { level: 2, label: 'Faible', count: 345, color: '#3B82F6', bgColor: 'rgba(59, 130, 246, 0.1)' },
        { level: 1, label: 'Minimal', count: 190, color: '#10B981', bgColor: 'rgba(16, 185, 129, 0.1)' }
    ],

    // Sujets récents
    recentSubjects: [
        {
            id: 'SUJ-2025-1247',
            nom: 'Hassan',
            prenom: 'Abdoulaye',
            alias: 'Al-Mahdi',
            categorie: 'A',
            dangerosite: 4,
            localisation: 'N\'Djamena',
            statut: 'actif',
            dateAjout: '2025-12-11'
        },
        {
            id: 'SUJ-2025-1246',
            nom: 'Mahamat',
            prenom: 'Abakar',
            alias: null,
            categorie: 'B',
            dangerosite: 3,
            localisation: 'Abéché',
            statut: 'surveillance',
            dateAjout: '2025-12-10'
        },
        {
            id: 'SUJ-2025-1245',
            nom: 'Oumar',
            prenom: 'Djibril',
            alias: 'Le Prédicateur',
            categorie: 'S',
            dangerosite: 5,
            localisation: 'Bol',
            statut: 'actif',
            dateAjout: '2025-12-10'
        },
        {
            id: 'SUJ-2025-1244',
            nom: 'Youssouf',
            prenom: 'Ibrahim',
            alias: null,
            categorie: 'C',
            dangerosite: 2,
            localisation: 'Moundou',
            statut: 'archive',
            dateAjout: '2025-12-09'
        },
        {
            id: 'SUJ-2025-1243',
            nom: 'Fatima',
            prenom: 'Aïcha',
            alias: 'Oum Khalid',
            categorie: 'B',
            dangerosite: 3,
            localisation: 'Sarh',
            statut: 'surveillance',
            dateAjout: '2025-12-09'
        }
    ],

    // Métriques de performance
    performance: {
        uptime: 99.7,
        responseTime: 1.2,
        activeUsers: 47,
        dataProcessed: '2.4 TB',
        lastBackup: '2025-12-11 03:00',
        securityScore: 94
    }
};

// ============================================================================
// SECTION 2: INITIALISATION ET CONFIGURATION
// ============================================================================

let charts = {};
let sessionStartTime = new Date();

document.addEventListener('DOMContentLoaded', function() {
    initializeDashboard();
    initializeSidebar();
    initializeHeader();
    updateDateTime();
    startSessionTimer();
    
    // Rafraîchissement automatique toutes les 5 minutes
    setInterval(refreshDashboard, 300000);
});

function initializeDashboard() {
    renderStatCards();
    renderCategorieChart();
    renderEvolutionChart();
    renderGeoChart();
    renderOrgChart();
    renderActivityList();
    renderEnquetesList();
    renderAlertsList();
    renderDangerStats();
    renderPerformanceMetrics();
    renderRecentSubjects();
    
    // Afficher l'alerte critique si nécessaire
    if (MockData.alertes.some(a => a.niveau === 'critique')) {
        document.getElementById('criticalAlert').style.display = 'flex';
    }
    
    showToast('Tableau de bord chargé avec succès', 'success');
}

// ============================================================================
// SECTION 3: SIDEBAR ET NAVIGATION
// ============================================================================

function initializeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');

    toggleBtn?.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        const icon = toggleBtn.querySelector('i');
        icon.classList.toggle('ri-menu-fold-line');
        icon.classList.toggle('ri-menu-unfold-line');
    });

    mobileMenuBtn?.addEventListener('click', () => {
        sidebar.classList.toggle('mobile-active');
    });

    // Fermer sidebar sur mobile quand on clique ailleurs
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 1024) {
            if (!sidebar.contains(e.target) && !mobileMenuBtn?.contains(e.target)) {
                sidebar.classList.remove('mobile-active');
            }
        }
    });
}

function initializeHeader() {
    const refreshBtn = document.getElementById('refreshBtn');
    refreshBtn?.addEventListener('click', refreshDashboard);

    const globalSearch = document.getElementById('globalSearch');
    globalSearch?.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            performGlobalSearch(e.target.value);
        }
    });
}

// ============================================================================
// SECTION 4: CARTES DE STATISTIQUES
// ============================================================================

function renderStatCards() {
    const statsGrid = document.getElementById('statsGrid');
    const stats = MockData.stats;
    const trends = MockData.trends;

    const statCards = [
        {
            title: 'Sujets Fichés',
            value: stats.totalSujets,
            subtitle: `${stats.sujetsActifs} actifs`,
            icon: 'ri-user-search-line',
            color: 'primary',
            trend: trends.sujets
        },
        {
            title: 'Organisations',
            value: stats.totalOrganisations,
            subtitle: `${stats.organisationsSurveillees} surveillées`,
            icon: 'ri-building-line',
            color: 'purple',
            trend: trends.organisations
        },
        {
            title: 'Signalements',
            value: stats.totalSignalements,
            subtitle: `${stats.signalementsNonTraites} non traités`,
            icon: 'ri-alarm-warning-line',
            color: 'warning',
            trend: trends.signalements
        },
        {
            title: 'Enquêtes',
            value: stats.enquetesEnCours,
            subtitle: `${stats.enquetesUrgentes} urgentes`,
            icon: 'ri-folder-search-line',
            color: 'danger',
            trend: trends.enquetes
        },
        {
            title: 'Contenus Analysés',
            value: stats.contenusAnalyses,
            subtitle: `${stats.contenusGraves} graves`,
            icon: 'ri-file-text-line',
            color: 'info',
            trend: trends.contenus
        },
        {
            title: 'Identités Numériques',
            value: stats.identitesNumeriques,
            subtitle: `${stats.identitesActives} actives`,
            icon: 'ri-fingerprint-line',
            color: 'success',
            trend: trends.identites
        }
    ];

    statsGrid.innerHTML = statCards.map((stat, index) => `
        <div class="stat-card ${stat.color}" style="animation-delay: ${index * 0.1}s">
            <div class="stat-icon">
                <i class="${stat.icon}"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${formatNumber(stat.value)}</div>
                <div class="stat-label">${stat.title}</div>
                <div class="stat-trend ${stat.trend.direction}">
                    <i class="ri-arrow-${stat.trend.direction}-line"></i>
                    <span>${Math.abs(stat.trend.value)}% ce mois</span>
                </div>
            </div>
        </div>
    `).join('');
}

// ============================================================================
// SECTION 5: GRAPHIQUES
// ============================================================================

function renderCategorieChart() {
    const ctx = document.getElementById('categorieChart')?.getContext('2d');
    if (!ctx) return;

    const categories = MockData.categories;
    
    charts.categorie = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Cat. A', 'Cat. B', 'Cat. C', 'Cat. S'],
            datasets: [{
                data: [categories.A.count, categories.B.count, categories.C.count, categories.S.count],
                backgroundColor: [categories.A.color, categories.B.color, categories.C.color, categories.S.color],
                borderWidth: 0,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true,
                        font: { size: 12 }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = ((context.raw / total) * 100).toFixed(1);
                            return `${context.label}: ${context.raw} (${percentage}%)`;
                        }
                    }
                }
            },
            cutout: '65%'
        }
    });
}

function renderEvolutionChart() {
    const ctx = document.getElementById('evolutionChart')?.getContext('2d');
    if (!ctx) return;

    const evolution = MockData.evolution;

    charts.evolution = new Chart(ctx, {
        type: 'line',
        data: {
            labels: evolution.labels,
            datasets: [
                {
                    label: 'Signalements reçus',
                    data: evolution.signalements,
                    borderColor: '#3B82F6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointHoverRadius: 6
                },
                {
                    label: 'Signalements traités',
                    data: evolution.traites,
                    borderColor: '#10B981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointHoverRadius: 6
                },
                {
                    label: 'Urgents',
                    data: evolution.urgents,
                    borderColor: '#DC2626',
                    backgroundColor: 'rgba(220, 38, 38, 0.1)',
                    fill: false,
                    tension: 0.4,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    borderDash: [5, 5]
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        padding: 15
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            }
        }
    });
}

function renderGeoChart() {
    const ctx = document.getElementById('geoChart')?.getContext('2d');
    if (!ctx) return;

    const regions = MockData.regions;

    charts.geo = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: regions.map(r => r.name),
            datasets: [{
                label: 'Sujets par région',
                data: regions.map(r => r.count),
                backgroundColor: [
                    '#2274a5',
                    '#DC2626',
                    '#F59E0B',
                    '#8B5CF6',
                    '#10B981',
                    '#17A2B8',
                    '#6C757D',
                    '#E91E63',
                    '#94A3B8'
                ],
                borderRadius: 6,
                borderSkipped: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y',
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const region = regions[context.dataIndex];
                            return `${context.raw} sujets (${region.percentage}%)`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                y: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
}

function renderOrgChart() {
    const ctx = document.getElementById('orgChart')?.getContext('2d');
    if (!ctx) return;

    const orgTypes = MockData.organisationTypes;

    charts.org = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: orgTypes.map(o => o.type),
            datasets: [{
                data: orgTypes.map(o => o.count),
                backgroundColor: orgTypes.map(o => o.color + '99'),
                borderColor: orgTypes.map(o => o.color),
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        usePointStyle: true,
                        padding: 15,
                        font: { size: 11 }
                    }
                }
            },
            scales: {
                r: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                }
            }
        }
    });
}

// ============================================================================
// SECTION 6: LISTES ET TABLEAUX
// ============================================================================

function renderActivityList() {
    const activityList = document.getElementById('activityList');
    if (!activityList) return;

    activityList.innerHTML = MockData.activities.map(activity => `
        <div class="activity-item">
            <div class="activity-icon ${activity.color}">
                <i class="${activity.icon}"></i>
            </div>
            <div class="activity-content">
                <div class="activity-title">${activity.action}</div>
                <div class="activity-subject">${activity.subject}</div>
                <div class="activity-meta">
                    <span class="activity-user"><i class="ri-user-line"></i> ${activity.user}</span>
                    <span class="activity-time"><i class="ri-time-line"></i> ${activity.time}</span>
                </div>
            </div>
        </div>
    `).join('');
}

function renderEnquetesList() {
    const enquetesList = document.getElementById('enquetesList');
    const enquetesUrgentes = document.getElementById('enquetesUrgentes');
    if (!enquetesList) return;

    const urgentCount = MockData.enquetes.filter(e => e.priorite === 'critique' || e.priorite === 'urgent').length;
    if (enquetesUrgentes) enquetesUrgentes.textContent = urgentCount;

    enquetesList.innerHTML = MockData.enquetes.map(enquete => `
        <div class="enquete-item">
            <div class="enquete-header">
                <span class="enquete-id">${enquete.id}</span>
                <span class="priority-badge ${enquete.priorite}">${capitalizeFirst(enquete.priorite)}</span>
            </div>
            <div class="enquete-title">${enquete.titre}</div>
            <div class="enquete-progress">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: ${enquete.progression}%"></div>
                </div>
                <span class="progress-text">${enquete.progression}%</span>
            </div>
            <div class="enquete-meta">
                <span><i class="ri-user-line"></i> ${enquete.responsable}</span>
            </div>
        </div>
    `).join('');
}

function renderAlertsList() {
    const alertsList = document.getElementById('alertsList');
    if (!alertsList) return;

    alertsList.innerHTML = MockData.alertes.map(alerte => `
        <div class="alert-item ${alerte.niveau}">
            <div class="alert-header">
                <span class="alert-niveau ${alerte.niveau}">
                    <i class="ri-${alerte.niveau === 'critique' ? 'error-warning' : 'alarm-warning'}-line"></i>
                    ${capitalizeFirst(alerte.niveau)}
                </span>
                <span class="alert-date">${formatDateTime(alerte.date)}</span>
            </div>
            <div class="alert-title">${alerte.titre}</div>
            <div class="alert-location">
                <i class="ri-map-pin-line"></i> ${alerte.localisation}
            </div>
            <div class="alert-description">${alerte.description}</div>
        </div>
    `).join('');
}

function renderDangerStats() {
    const dangerStats = document.getElementById('dangerStats');
    if (!dangerStats) return;

    const total = MockData.dangerLevels.reduce((sum, d) => sum + d.count, 0);

    dangerStats.innerHTML = MockData.dangerLevels.map(danger => `
        <div class="danger-item">
            <div class="danger-header">
                <div class="danger-label">
                    <span class="danger-dot" style="background: ${danger.color}"></span>
                    <span>Niveau ${danger.level} - ${danger.label}</span>
                </div>
                <span class="danger-count">${danger.count}</span>
            </div>
            <div class="danger-bar">
                <div class="danger-fill" style="width: ${(danger.count / total * 100).toFixed(1)}%; background: ${danger.color}"></div>
            </div>
            <div class="danger-percentage">${(danger.count / total * 100).toFixed(1)}%</div>
        </div>
    `).join('');
}

function renderPerformanceMetrics() {
    const performanceMetrics = document.getElementById('performanceMetrics');
    if (!performanceMetrics) return;

    const perf = MockData.performance;

    performanceMetrics.innerHTML = `
        <div class="metric-grid">
            <div class="metric-item">
                <div class="metric-icon success">
                    <i class="ri-server-line"></i>
                </div>
                <div class="metric-content">
                    <div class="metric-value">${perf.uptime}%</div>
                    <div class="metric-label">Disponibilité</div>
                </div>
            </div>
            <div class="metric-item">
                <div class="metric-icon primary">
                    <i class="ri-speed-line"></i>
                </div>
                <div class="metric-content">
                    <div class="metric-value">${perf.responseTime}s</div>
                    <div class="metric-label">Temps de réponse</div>
                </div>
            </div>
            <div class="metric-item">
                <div class="metric-icon info">
                    <i class="ri-user-line"></i>
                </div>
                <div class="metric-content">
                    <div class="metric-value">${perf.activeUsers}</div>
                    <div class="metric-label">Utilisateurs actifs</div>
                </div>
            </div>
            <div class="metric-item">
                <div class="metric-icon warning">
                    <i class="ri-database-2-line"></i>
                </div>
                <div class="metric-content">
                    <div class="metric-value">${perf.dataProcessed}</div>
                    <div class="metric-label">Données traitées</div>
                </div>
            </div>
            <div class="metric-item">
                <div class="metric-icon purple">
                    <i class="ri-shield-check-line"></i>
                </div>
                <div class="metric-content">
                    <div class="metric-value">${perf.securityScore}/100</div>
                    <div class="metric-label">Score sécurité</div>
                </div>
            </div>
            <div class="metric-item">
                <div class="metric-icon success">
                    <i class="ri-hard-drive-2-line"></i>
                </div>
                <div class="metric-content">
                    <div class="metric-value">${formatDateTime(perf.lastBackup)}</div>
                    <div class="metric-label">Dernière sauvegarde</div>
                </div>
            </div>
        </div>
    `;
}

function renderRecentSubjects() {
    const tableBody = document.getElementById('recentSubjectsBody');
    if (!tableBody) return;

    tableBody.innerHTML = MockData.recentSubjects.map(subject => `
        <tr>
            <td><code>${subject.id}</code></td>
            <td>
                <div class="subject-info">
                    <strong>${subject.nom} ${subject.prenom}</strong>
                    ${subject.alias ? `<span class="subject-alias">alias "${subject.alias}"</span>` : ''}
                </div>
            </td>
            <td>
                <span class="categorie-badge cat-${subject.categorie.toLowerCase()}">${subject.categorie}</span>
            </td>
            <td>
                <div class="threat-level">
                    <div class="threat-dots">
                        ${Array(5).fill(0).map((_, i) => `
                            <span class="threat-dot ${i < subject.dangerosite ? 'filled' : ''}"></span>
                        `).join('')}
                    </div>
                    <span>${subject.dangerosite}/5</span>
                </div>
            </td>
            <td>
                <span><i class="ri-map-pin-line"></i> ${subject.localisation}</span>
            </td>
            <td>
                <span class="status-badge ${subject.statut}">${capitalizeFirst(subject.statut)}</span>
            </td>
            <td>${formatDate(subject.dateAjout)}</td>
            <td>
                <div class="action-buttons">
                    <button class="action-btn view" title="Voir détails" onclick="viewSubject('${subject.id}')">
                        <i class="ri-eye-line"></i>
                    </button>
                    <button class="action-btn edit" title="Modifier" onclick="editSubject('${subject.id}')">
                        <i class="ri-edit-line"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
}

// ============================================================================
// SECTION 7: FONCTIONS UTILITAIRES
// ============================================================================

function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
}

function formatDate(dateStr) {
    const date = new Date(dateStr);
    return date.toLocaleDateString('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    });
}

function formatDateTime(dateStr) {
    if (!dateStr) return '-';
    const date = new Date(dateStr.replace(' ', 'T'));
    return date.toLocaleDateString('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        hour: '2-digit',
        minute: '2-digit'
    });
}

function capitalizeFirst(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}

function updateDateTime() {
    const dateElement = document.getElementById('currentDate');
    if (dateElement) {
        const now = new Date();
        dateElement.textContent = now.toLocaleDateString('fr-FR', {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
    }
}

function startSessionTimer() {
    setInterval(() => {
        const now = new Date();
        const diff = now - sessionStartTime;
        const hours = Math.floor(diff / 3600000);
        const minutes = Math.floor((diff % 3600000) / 60000);
        const seconds = Math.floor((diff % 60000) / 1000);
        
        const sessionTimeEl = document.getElementById('sessionTime');
        if (sessionTimeEl) {
            sessionTimeEl.textContent = `Session: ${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }
    }, 1000);
}

// ============================================================================
// SECTION 8: ACTIONS ET ÉVÉNEMENTS
// ============================================================================

function refreshDashboard() {
    showToast('Actualisation en cours...', 'info');
    
    // Simuler un chargement
    setTimeout(() => {
        // Mettre à jour les données (simulation)
        MockData.stats.signalementsNonTraites = Math.floor(Math.random() * 50) + 100;
        MockData.stats.enquetesUrgentes = Math.floor(Math.random() * 5) + 5;
        
        renderStatCards();
        showToast('Tableau de bord actualisé', 'success');
    }, 1000);
}

function performGlobalSearch(query) {
    if (!query.trim()) {
        showToast('Veuillez entrer un terme de recherche', 'warning');
        return;
    }
    showToast(`Recherche de "${query}"...`, 'info');
    // Implémenter la recherche globale
}

function viewSubject(id) {
    showToast(`Ouverture du sujet ${id}`, 'info');
    // Rediriger vers la page de détails
}

function editSubject(id) {
    showToast(`Édition du sujet ${id}`, 'info');
    // Ouvrir le modal d'édition
}

function viewAlertDetails() {
    showToast('Ouverture des détails de l\'alerte', 'info');
    // Rediriger vers les alertes
}

// ============================================================================
// SECTION 9: SYSTÈME DE NOTIFICATIONS (TOAST)
// ============================================================================

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

    // Animation d'entrée
    setTimeout(() => toast.classList.add('show'), 10);

    // Auto-suppression après 4 secondes
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    }, 4000);
}

// ============================================================================
// SECTION 10: STYLES ADDITIONNELS INJECTÉS
// ============================================================================

const additionalStyles = `
    /* Activity List */
    .activity-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
        max-height: 400px;
        overflow-y: auto;
    }

    .activity-item {
        display: flex;
        gap: 12px;
        padding: 12px;
        background: var(--bg-primary);
        border-radius: var(--radius-md);
        transition: all var(--transition-fast);
    }

    .activity-item:hover {
        background: var(--bg-tertiary);
    }

    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .activity-icon.primary { background: rgba(59, 130, 246, 0.1); color: var(--primary-color); }
    .activity-icon.success { background: rgba(40, 167, 69, 0.1); color: var(--success-color); }
    .activity-icon.warning { background: rgba(255, 165, 0, 0.1); color: var(--warning-color); }
    .activity-icon.danger { background: rgba(220, 53, 69, 0.1); color: var(--danger-color); }
    .activity-icon.info { background: rgba(23, 162, 184, 0.1); color: var(--info-color); }

    .activity-content {
        flex: 1;
        min-width: 0;
    }

    .activity-title {
        font-weight: 600;
        color: var(--text-primary);
        font-size: 13px;
    }

    .activity-subject {
        color: var(--text-secondary);
        font-size: 12px;
        margin-top: 2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .activity-meta {
        display: flex;
        gap: 12px;
        margin-top: 6px;
        font-size: 11px;
        color: var(--text-muted);
    }

    .activity-meta i {
        margin-right: 4px;
    }

    /* Enquetes List */
    .enquetes-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        max-height: 350px;
        overflow-y: auto;
    }

    .enquete-item {
        padding: 12px;
        background: var(--bg-primary);
        border-radius: var(--radius-md);
        border-left: 3px solid var(--primary-color);
    }

    .enquete-item:has(.priority-badge.critique) {
        border-left-color: var(--danger-color);
    }

    .enquete-item:has(.priority-badge.urgent) {
        border-left-color: var(--warning-color);
    }

    .enquete-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .enquete-id {
        font-family: monospace;
        font-size: 11px;
        color: var(--text-muted);
    }

    .enquete-title {
        font-weight: 500;
        font-size: 13px;
        color: var(--text-primary);
        margin-bottom: 8px;
    }

    .enquete-progress {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .progress-bar {
        flex: 1;
        height: 6px;
        background: var(--border-color);
        border-radius: var(--radius-full);
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        background: var(--primary-color);
        border-radius: var(--radius-full);
        transition: width var(--transition-normal);
    }

    .progress-text {
        font-size: 11px;
        font-weight: 600;
        color: var(--text-secondary);
        min-width: 35px;
    }

    .enquete-meta {
        margin-top: 8px;
        font-size: 11px;
        color: var(--text-muted);
    }

    .enquete-meta i {
        margin-right: 4px;
    }

    /* Alerts List */
    .alerts-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        max-height: 350px;
        overflow-y: auto;
    }

    .alert-item {
        padding: 12px;
        background: var(--bg-primary);
        border-radius: var(--radius-md);
        border-left: 3px solid var(--info-color);
    }

    .alert-item.critique {
        border-left-color: var(--danger-color);
        background: rgba(220, 53, 69, 0.05);
    }

    .alert-item.urgent {
        border-left-color: var(--warning-color);
        background: rgba(255, 165, 0, 0.05);
    }

    .alert-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 6px;
    }

    .alert-niveau {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .alert-niveau.critique { color: var(--danger-color); }
    .alert-niveau.urgent { color: var(--warning-color); }
    .alert-niveau.normal { color: var(--info-color); }

    .alert-date {
        font-size: 11px;
        color: var(--text-muted);
    }

    .alert-title {
        font-weight: 600;
        font-size: 13px;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .alert-location {
        font-size: 12px;
        color: var(--text-secondary);
        margin-bottom: 6px;
    }

    .alert-location i {
        margin-right: 4px;
    }

    .alert-description {
        font-size: 12px;
        color: var(--text-muted);
        line-height: 1.4;
    }

    /* Danger Stats */
    .danger-stats {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .danger-item {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 8px;
        align-items: center;
    }

    .danger-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        grid-column: span 2;
    }

    .danger-label {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: var(--text-primary);
    }

    .danger-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .danger-count {
        font-weight: 700;
        font-size: 14px;
        color: var(--text-primary);
    }

    .danger-bar {
        height: 8px;
        background: var(--bg-tertiary);
        border-radius: var(--radius-full);
        overflow: hidden;
    }

    .danger-fill {
        height: 100%;
        border-radius: var(--radius-full);
        transition: width var(--transition-normal);
    }

    .danger-percentage {
        font-size: 12px;
        color: var(--text-muted);
        text-align: right;
    }

    /* Performance Metrics */
    .metric-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .metric-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        background: var(--bg-primary);
        border-radius: var(--radius-md);
    }

    .metric-icon {
        width: 44px;
        height: 44px;
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .metric-icon.primary { background: rgba(59, 130, 246, 0.1); color: var(--primary-color); }
    .metric-icon.success { background: rgba(40, 167, 69, 0.1); color: var(--success-color); }
    .metric-icon.warning { background: rgba(255, 165, 0, 0.1); color: var(--warning-color); }
    .metric-icon.info { background: rgba(23, 162, 184, 0.1); color: var(--info-color); }
    .metric-icon.purple { background: rgba(155, 89, 182, 0.1); color: var(--purple-color); }

    .metric-value {
        font-size: 18px;
        font-weight: 700;
        color: var(--text-primary);
    }

    .metric-label {
        font-size: 12px;
        color: var(--text-muted);
    }

    /* Subject Info */
    .subject-info {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .subject-alias {
        font-size: 11px;
        color: var(--text-muted);
        font-style: italic;
    }

    /* Footer */
    .footer {
        position: fixed;
        bottom: 0;
        left: var(--sidebar-width);
        right: 0;
        height: var(--footer-height);
        background: var(--bg-secondary);
        border-top: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 24px;
        font-size: 12px;
        color: var(--text-muted);
        z-index: 100;
        transition: left var(--transition-speed);
    }

    .sidebar.collapsed ~ .footer {
        left: var(--sidebar-collapsed);
    }

    .footer-separator {
        margin: 0 8px;
        color: var(--border-color);
    }

    .footer-version {
        font-family: monospace;
    }

    /* User Details in Sidebar */
    .user-details {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .user-name {
        font-weight: 600;
        font-size: 13px;
        color: var(--text-light);
    }

    .user-role {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.6);
    }

    /* Responsive adjustments for metric grid */
    @media (max-width: 1200px) {
        .metric-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .metric-grid {
            grid-template-columns: 1fr;
        }
        
        .footer {
            left: 0;
        }
    }

    /* Breadcrumb active state */
    .breadcrumb-active {
        color: var(--primary-color);
        font-weight: 500;
    }

    /* Header subtitle */
    .header-subtitle {
        color: var(--text-secondary);
        font-size: 14px;
    }

    .header-date {
        color: var(--text-muted);
        font-size: 13px;
    }

    .header-divider {
        color: var(--border-color);
        margin: 0 12px;
    }

    /* Mobile menu button */
    .mobile-menu-btn {
        display: none;
        width: 40px;
        height: 40px;
        border-radius: var(--radius-md);
        background: var(--bg-primary);
        color: var(--text-primary);
        font-size: 20px;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
    }

    @media (max-width: 1024px) {
        .mobile-menu-btn {
            display: flex;
        }
    }
`;

// Injecter les styles additionnels
const styleSheet = document.createElement('style');
styleSheet.textContent = additionalStyles;
document.head.appendChild(styleSheet);