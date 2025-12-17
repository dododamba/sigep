/**
 * ============================================
 * SIGMA - Dashboard Global JavaScript
 * Système de Surveillance et Gestion
 * Version 2.0 - 2025
 * ============================================
 */

// ==========================================
// State Management
// ==========================================
const state = {
    stats: {},
    alerts: [],
    trends: {},
    relations: {},
    activities: {
        fiches: [],
        enquetes: [],
        signalements: []
    },
    geoData: [],
    platforms: [],
    userPermissions: {
        level: 'R3',
        role: 'Analyste',
        modules: ['personnes', 'reseaux', 'enquetes', 'signalements', 'identites', 'contenus', 'etablissements', 'condamnations']
    },
    isLoading: true,
    isError: false,
    currentPeriod: '7d',
    currentActivityTab: 'fiches',
    charts: {}
};

// ==========================================
// Configuration
// ==========================================
const CONFIG = {
    API_BASE_URL: '/api',
    REFRESH_INTERVAL: 60000, // 1 minute
    TOAST_DURATION: 5000,
    DATE_FORMAT: { day: '2-digit', month: 'short', year: 'numeric' },
    TIME_FORMAT: { hour: '2-digit', minute: '2-digit' },
    CHART_COLORS: {
        blue: '#3b82f6',
        purple: '#8b5cf6',
        pink: '#ec4899',
        orange: '#f97316',
        green: '#10b981',
        cyan: '#06b6d4',
        yellow: '#eab308',
        red: '#ef4444',
        slate: '#64748b'
    }
};

// ==========================================
// Utility Functions
// ==========================================

/**
 * Sanitize HTML to prevent XSS
 */
function sanitize(str) {
    if (typeof str !== 'string') return str;
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}

/**
 * Format number with locale
 */
function formatNumber(num) {
    if (typeof num !== 'number') return '--';
    return new Intl.NumberFormat('fr-FR').format(num);
}

/**
 * Format date
 */
function formatDate(date, format = CONFIG.DATE_FORMAT) {
    if (!date) return '--';
    const d = new Date(date);
    return d.toLocaleDateString('fr-FR', format);
}

/**
 * Format time
 */
function formatTime(date) {
    if (!date) return '--';
    const d = new Date(date);
    return d.toLocaleTimeString('fr-FR', CONFIG.TIME_FORMAT);
}

/**
 * Format relative time
 */
function formatRelativeTime(date) {
    if (!date) return '--';
    const now = new Date();
    const d = new Date(date);
    const diff = now - d;
    
    const minutes = Math.floor(diff / 60000);
    const hours = Math.floor(diff / 3600000);
    const days = Math.floor(diff / 86400000);
    
    if (minutes < 1) return 'À l\'instant';
    if (minutes < 60) return `Il y a ${minutes} min`;
    if (hours < 24) return `Il y a ${hours}h`;
    if (days < 7) return `Il y a ${days}j`;
    return formatDate(date);
}

/**
 * Show toast notification
 */
function showToast(message, type = 'info', title = '') {
    const container = document.getElementById('toastContainer');
    const icons = {
        success: 'ri-check-line',
        error: 'ri-error-warning-line',
        warning: 'ri-alert-line',
        info: 'ri-information-line'
    };
    
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.innerHTML = `
        <i class="toast-icon ${icons[type]}"></i>
        <div class="toast-content">
            ${title ? `<div class="toast-title">${sanitize(title)}</div>` : ''}
            <div class="toast-message">${sanitize(message)}</div>
        </div>
        <button class="toast-close" onclick="this.parentElement.remove()">
            <i class="ri-close-line"></i>
        </button>
    `;
    
    container.appendChild(toast);
    
    setTimeout(() => {
        toast.style.animation = 'toast-slide-in 0.3s ease reverse';
        setTimeout(() => toast.remove(), 300);
    }, CONFIG.TOAST_DURATION);
}

/**
 * Log user action for audit trail
 */
function logAction(action, details = {}) {
    const logEntry = {
        timestamp: new Date().toISOString(),
        action,
        user: state.userPermissions,
        details,
        sessionId: sessionStorage.getItem('sessionId') || 'unknown'
    };
    
    console.log('[SIGMA Audit]', logEntry);
    
    // In production, send to API
    // fetch(`${CONFIG.API_BASE_URL}/audit/log`, {
    //     method: 'POST',
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify(logEntry)
    // });
}

// ==========================================
// Permission Management
// ==========================================

/**
 * Verify user permissions
 */
function verifyPermissions() {
    const { level, modules } = state.userPermissions;
    
    // Hide elements based on permission level
    document.querySelectorAll('[data-min-level]').forEach(el => {
        const minLevel = el.dataset.minLevel;
        if (compareAccreditationLevel(level, minLevel) < 0) {
            el.style.display = 'none';
        }
    });
    
    // Hide module links not in user's allowed modules
    document.querySelectorAll('[data-module]').forEach(el => {
        const module = el.dataset.module;
        if (!modules.includes(module)) {
            el.closest('li')?.remove();
        }
    });
    
    // Update user info display
}

/**
 * Compare accreditation levels
 */
function compareAccreditationLevel(userLevel, requiredLevel) {
    const levels = ['R1', 'R2', 'R3', 'R4', 'R5'];
    return levels.indexOf(userLevel) - levels.indexOf(requiredLevel);
}

// ==========================================
// Mock Data Generation
// ==========================================

/**
 * Generate mock statistics data
 */
function generateMockStats() {
    return {
        personnes: {
            total: 2847,
            variation: 12.5,
            trend: 'positive',
            sparkline: [120, 135, 128, 142, 155, 148, 162]
        },
        critiques: {
            total: 156,
            catA: 89,
            catS: 67
        },
        reseaux: {
            total: 347,
            variation: 8.3,
            trend: 'positive',
            sparkline: [28, 32, 30, 35, 38, 42, 45]
        },
        enquetes: {
            total: 89,
            enCours: 67,
            variation: -3.2,
            trend: 'negative',
            sparkline: [12, 15, 14, 11, 13, 10, 9]
        },
        signalements: {
            total: 234,
            variation: 23.7,
            trend: 'negative',
            sparkline: [18, 22, 25, 28, 32, 35, 42]
        },
        identites: {
            total: 1523,
            variation: 15.2,
            trend: 'positive',
            sparkline: [95, 102, 98, 115, 122, 128, 135]
        },
        contenus: {
            total: 4892,
            sensibles: 847,
            variation: 18.6,
            trend: 'positive',
            sparkline: [320, 345, 358, 372, 395, 410, 425]
        },
        condamnations: {
            total: 523,
            variation: 0,
            trend: 'neutral',
            sparkline: [42, 45, 43, 44, 46, 45, 44]
        }
    };
}

/**
 * Generate mock alerts data
 */
function generateMockAlerts() {
    return [
        {
            id: 1,
            type: 'personne',
            severity: 'critical',
            title: 'Activité suspecte détectée',
            description: 'Sujet ID-2847 - Connexions multiples depuis l\'étranger',
            category: 'S',
            time: new Date(Date.now() - 300000)
        },
        {
            id: 2,
            type: 'reseau',
            severity: 'critical',
            title: 'Réseau à haut risque actif',
            description: 'Réseau RX-147 - Recrutement intensifié détecté',
            category: 'A',
            time: new Date(Date.now() - 900000)
        },
        {
            id: 3,
            type: 'contenu',
            severity: 'warning',
            title: 'Contenu sensible publié',
            description: 'Publication virale - Plateforme Telegram',
            category: 'B',
            time: new Date(Date.now() - 1800000)
        },
        {
            id: 4,
            type: 'signalement',
            severity: 'critical',
            title: 'Signalement urgent',
            description: 'Source fiable - Rassemblement prévu ce soir',
            category: 'A',
            time: new Date(Date.now() - 2700000)
        },
        {
            id: 5,
            type: 'enquete',
            severity: 'warning',
            title: 'Enquête nécessite attention',
            description: 'ENQ-2024-089 - Délai dépassé pour rapport',
            category: 'B',
            time: new Date(Date.now() - 3600000)
        },
        {
            id: 6,
            type: 'identite',
            severity: 'warning',
            title: 'Nouveau compte détecté',
            description: 'Sujet ID-1842 - Nouveau profil Facebook',
            category: 'B',
            time: new Date(Date.now() - 5400000)
        }
    ];
}

/**
 * Generate mock trends data
 */
function generateMockTrends() {
    const days = ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'];
    const last30Days = Array.from({ length: 30 }, (_, i) => {
        const d = new Date();
        d.setDate(d.getDate() - (29 - i));
        return d.toLocaleDateString('fr-FR', { day: '2-digit', month: 'short' });
    });
    
    return {
        signalements: {
            labels: last30Days,
            datasets: [
                {
                    label: 'Signalements reçus',
                    data: Array.from({ length: 30 }, () => Math.floor(Math.random() * 20) + 5),
                    borderColor: CONFIG.CHART_COLORS.orange,
                    backgroundColor: `${CONFIG.CHART_COLORS.orange}20`
                },
                {
                    label: 'Signalements traités',
                    data: Array.from({ length: 30 }, () => Math.floor(Math.random() * 15) + 3),
                    borderColor: CONFIG.CHART_COLORS.green,
                    backgroundColor: `${CONFIG.CHART_COLORS.green}20`
                }
            ]
        },
        fiches: {
            labels: last30Days,
            data: Array.from({ length: 30 }, () => Math.floor(Math.random() * 10) + 2)
        },
        categories: {
            labels: ['Catégorie A', 'Catégorie B', 'Catégorie C', 'Catégorie S'],
            data: [89, 1245, 1456, 67],
            colors: [CONFIG.CHART_COLORS.red, CONFIG.CHART_COLORS.orange, CONFIG.CHART_COLORS.yellow, '#dc2626']
        },
        activite: {
            labels: days,
            comptes: [45, 52, 48, 61, 55, 32, 28],
            contenus: [120, 145, 132, 168, 155, 89, 72]
        }
    };
}

/**
 * Generate mock relations data
 */
function generateMockRelations() {
    return [
        { source: 'Réseau RX-147', target: 'ENQ-2024-089', type: 'enquête', count: 3 },
        { source: 'Sujet ID-2847', target: 'Réseau RX-147', type: 'affiliation', count: 1 },
        { source: 'Réseau RX-203', target: '12 condamnations', type: 'condamnation', count: 12 },
        { source: 'Sujet ID-1523', target: '5 réseaux', type: 'multi-affiliation', count: 5 },
        { source: 'Établissement E-045', target: '8 sujets', type: 'fréquentation', count: 8 },
        { source: 'Réseau RX-089', target: 'ENQ-2024-045', type: 'enquête', count: 2 },
        { source: 'Sujet ID-3012', target: '23 contenus', type: 'publication', count: 23 }
    ];
}

/**
 * Generate mock activity data
 */
function generateMockActivities() {
    return {
        fiches: [
            { type: 'add', title: 'Nouvelle fiche créée', subtitle: 'Sujet ID-3156 - Catégorie B', time: new Date(Date.now() - 300000) },
            { type: 'update', title: 'Fiche mise à jour', subtitle: 'Sujet ID-2847 - Passage catégorie A', time: new Date(Date.now() - 1200000) },
            { type: 'add', title: 'Nouvelle fiche créée', subtitle: 'Sujet ID-3155 - Catégorie C', time: new Date(Date.now() - 2400000) },
            { type: 'update', title: 'Photo ajoutée', subtitle: 'Sujet ID-1842 - Identification confirmée', time: new Date(Date.now() - 3600000) },
            { type: 'add', title: 'Nouvelle fiche créée', subtitle: 'Sujet ID-3154 - Catégorie B', time: new Date(Date.now() - 7200000) }
        ],
        enquetes: [
            { type: 'alert', title: 'Enquête prioritaire', subtitle: 'ENQ-2024-089 - Rapport en attente', time: new Date(Date.now() - 600000) },
            { type: 'update', title: 'Enquête mise à jour', subtitle: 'ENQ-2024-087 - Nouveaux éléments', time: new Date(Date.now() - 1800000) },
            { type: 'add', title: 'Nouvelle enquête ouverte', subtitle: 'ENQ-2024-090 - Priorité haute', time: new Date(Date.now() - 3000000) },
            { type: 'update', title: 'Enquête clôturée', subtitle: 'ENQ-2024-082 - Rapport finalisé', time: new Date(Date.now() - 5400000) }
        ],
        signalements: [
            { type: 'alert', title: 'Signalement urgent', subtitle: 'SIG-7842 - En attente traitement', time: new Date(Date.now() - 450000) },
            { type: 'add', title: 'Nouveau signalement', subtitle: 'SIG-7843 - Source anonyme', time: new Date(Date.now() - 900000) },
            { type: 'update', title: 'Signalement traité', subtitle: 'SIG-7839 - Archivé', time: new Date(Date.now() - 2100000) },
            { type: 'add', title: 'Nouveau signalement', subtitle: 'SIG-7844 - Via formulaire web', time: new Date(Date.now() - 4200000) }
        ]
    };
}

/**
 * Generate mock geographic data
 */
function generateMockGeoData() {
    return [
        { name: 'N\'Djamena', count: 1247, percentage: 44 },
        { name: 'Moundou', count: 423, percentage: 15 },
        { name: 'Abéché', count: 312, percentage: 11 },
        { name: 'Sarh', count: 256, percentage: 9 },
        { name: 'Bongor', count: 198, percentage: 7 },
        { name: 'Doba', count: 167, percentage: 6 },
        { name: 'Autres', count: 244, percentage: 8 }
    ];
}

/**
 * Generate mock platform data
 */
function generateMockPlatforms() {
    return [
        { name: 'Facebook', icon: 'facebook', count: 847, change: '+12%' },
        { name: 'WhatsApp', icon: 'whatsapp', count: 523, change: '+8%' },
        { name: 'Telegram', icon: 'telegram', count: 312, change: '+23%' },
        { name: 'Twitter/X', icon: 'twitter', count: 198, change: '-5%' },
        { name: 'Instagram', icon: 'instagram', count: 156, change: '+15%' },
        { name: 'TikTok', icon: 'tiktok', count: 89, change: '+45%' }
    ];
}

// ==========================================
// API Functions (Mock implementations)
// ==========================================

async function fetchStats() {
    try {
        // In production: const response = await fetch(`${CONFIG.API_BASE_URL}/dashboard/stats`);
        // Simulate API delay
        await new Promise(resolve => setTimeout(resolve, 800));
        state.stats = generateMockStats();
        return state.stats;
    } catch (error) {
        console.error('Error fetching stats:', error);
        state.isError = true;
        showToast('Erreur lors du chargement des statistiques', 'error');
        throw error;
    }
}

async function fetchAlerts() {
    try {
        await new Promise(resolve => setTimeout(resolve, 600));
        state.alerts = generateMockAlerts();
        return state.alerts;
    } catch (error) {
        console.error('Error fetching alerts:', error);
        showToast('Erreur lors du chargement des alertes', 'error');
        throw error;
    }
}

async function fetchTrends() {
    try {
        await new Promise(resolve => setTimeout(resolve, 1000));
        state.trends = generateMockTrends();
        return state.trends;
    } catch (error) {
        console.error('Error fetching trends:', error);
        showToast('Erreur lors du chargement des tendances', 'error');
        throw error;
    }
}

async function fetchRelations() {
    try {
        await new Promise(resolve => setTimeout(resolve, 700));
        state.relations = generateMockRelations();
        return state.relations;
    } catch (error) {
        console.error('Error fetching relations:', error);
        showToast('Erreur lors du chargement des relations', 'error');
        throw error;
    }
}

async function fetchActivities() {
    try {
        await new Promise(resolve => setTimeout(resolve, 500));
        state.activities = generateMockActivities();
        return state.activities;
    } catch (error) {
        console.error('Error fetching activities:', error);
        throw error;
    }
}

async function fetchGeoData() {
    try {
        await new Promise(resolve => setTimeout(resolve, 600));
        state.geoData = generateMockGeoData();
        return state.geoData;
    } catch (error) {
        console.error('Error fetching geo data:', error);
        throw error;
    }
}

async function fetchPlatforms() {
    try {
        await new Promise(resolve => setTimeout(resolve, 400));
        state.platforms = generateMockPlatforms();
        return state.platforms;
    } catch (error) {
        console.error('Error fetching platforms:', error);
        throw error;
    }
}

// ==========================================
// Render Functions
// ==========================================

/**
 * Render statistics cards
 */
function renderStats() {
    const { stats } = state;
    
    // Update stat values
    document.getElementById('statPersonnes').textContent = formatNumber(stats.personnes?.total);
    document.getElementById('statCritiques').textContent = formatNumber(stats.critiques?.total);
    document.getElementById('statReseaux').textContent = formatNumber(stats.reseaux?.total);
    document.getElementById('statEnquetes').textContent = formatNumber(stats.enquetes?.total);
    document.getElementById('statSignalements').textContent = formatNumber(stats.signalements?.total);
    document.getElementById('statIdentites').textContent = formatNumber(stats.identites?.total);
    document.getElementById('statContenus').textContent = formatNumber(stats.contenus?.total);
    document.getElementById('statCondamnations').textContent = formatNumber(stats.condamnations?.total);
    
    // Update trends
    renderStatTrend('trendPersonnes', stats.personnes);
    renderStatTrend('trendReseaux', stats.reseaux);
    renderStatTrend('trendSignalements', stats.signalements);
    renderStatTrend('trendIdentites', stats.identites);
    renderStatTrend('trendCondamnations', stats.condamnations);
    
    // Update breakdowns
    document.getElementById('breakdownCritiques').innerHTML = `
        <span class="cat-badge cat-a">A: ${stats.critiques?.catA || '--'}</span>
        <span class="cat-badge cat-s">S: ${stats.critiques?.catS || '--'}</span>
    `;
    
    document.getElementById('detailEnquetes').innerHTML = `<span>En cours: ${stats.enquetes?.enCours || '--'}</span>`;
    document.getElementById('detailContenus').innerHTML = `<span>Sensibles: ${formatNumber(stats.contenus?.sensibles)}</span>`;
    
    // Update sidebar badges
    document.getElementById('badgePersonnes').textContent = formatNumber(stats.personnes?.total);
    document.getElementById('badgeReseaux').textContent = formatNumber(stats.reseaux?.total);
    document.getElementById('badgeSignalements').textContent = formatNumber(stats.signalements?.total);
    
    // Render sparklines
    renderSparkline('sparkPersonnes', stats.personnes?.sparkline, CONFIG.CHART_COLORS.blue);
    renderSparkline('sparkReseaux', stats.reseaux?.sparkline, CONFIG.CHART_COLORS.purple);
    renderSparkline('sparkEnquetes', stats.enquetes?.sparkline, CONFIG.CHART_COLORS.orange);
    renderSparkline('sparkSignalements', stats.signalements?.sparkline, CONFIG.CHART_COLORS.yellow);
    renderSparkline('sparkIdentites', stats.identites?.sparkline, CONFIG.CHART_COLORS.cyan);
    renderSparkline('sparkContenus', stats.contenus?.sparkline, CONFIG.CHART_COLORS.green);
    renderSparkline('sparkCondamnations', stats.condamnations?.sparkline, CONFIG.CHART_COLORS.slate);
}

/**
 * Render stat trend badge
 */
function renderStatTrend(elementId, data) {
    if (!data) return;
    
    const element = document.getElementById(elementId);
    const { variation, trend } = data;
    
    element.className = `stat-trend ${trend}`;
    
    let icon = 'ri-subtract-line';
    let prefix = '';
    
    if (trend === 'positive') {
        icon = 'ri-arrow-up-s-line';
        prefix = '+';
    } else if (trend === 'negative') {
        icon = 'ri-arrow-up-s-line';
        prefix = '+';
    }
    
    element.innerHTML = `
        <i class="${icon}"></i>
        <span>${prefix}${variation}%</span>
    `;
}

/**
 * Render sparkline chart
 */
function renderSparkline(canvasId, data, color) {
    const canvas = document.getElementById(canvasId);
    if (!canvas || !data) return;
    
    const ctx = canvas.getContext('2d');
    
    // Destroy existing chart if any
    if (state.charts[canvasId]) {
        state.charts[canvasId].destroy();
    }
    
    state.charts[canvasId] = new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.map((_, i) => i),
            datasets: [{
                data,
                borderColor: color,
                borderWidth: 2,
                fill: true,
                backgroundColor: `${color}20`,
                tension: 0.4,
                pointRadius: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: { enabled: false }
            },
            scales: {
                x: { display: false },
                y: { display: false }
            },
            elements: {
                line: { borderCapStyle: 'round' }
            }
        }
    });
}

/**
 * Render alerts list
 */
function renderAlerts() {
    const container = document.getElementById('alertsList');
    const alertCount = document.getElementById('alertCount');
    
    if (!state.alerts.length) {
        container.innerHTML = '<div class="empty-state">Aucune alerte critique</div>';
        alertCount.textContent = '0';
        return;
    }
    
    alertCount.textContent = state.alerts.length;
    
    container.innerHTML = state.alerts.map(alert => {
        const icons = {
            personne: 'ri-user-warning-line',
            reseau: 'ri-share-line',
            contenu: 'ri-file-warning-line',
            signalement: 'ri-alarm-warning-line',
            enquete: 'ri-search-eye-line',
            identite: 'ri-fingerprint-line'
        };
        
        return `
            <div class="alert-item ${alert.severity === 'warning' ? 'warning' : ''}" 
                 onclick="handleAlertClick(${alert.id})">
                <div class="alert-icon">
                    <i class="${icons[alert.type] || 'ri-alert-line'}"></i>
                </div>
                <div class="alert-content">
                    <div class="alert-title">${sanitize(alert.title)}</div>
                    <div class="alert-description">${sanitize(alert.description)}</div>
                    <div class="alert-meta">
                        <span class="alert-badge">${alert.category}</span>
                        <span class="alert-time">${formatRelativeTime(alert.time)}</span>
                    </div>
                </div>
            </div>
        `;
    }).join('');
}

/**
 * Render trend charts
 */
function renderTrends() {
    renderSignalementsChart();
    renderFichesChart();
    renderCategoriesChart();
    renderActiviteChart();
}

/**
 * Render signalements evolution chart
 */
function renderSignalementsChart() {
    const canvas = document.getElementById('chartSignalements');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    const { signalements } = state.trends;
    
    if (state.charts.signalements) {
        state.charts.signalements.destroy();
    }
    
    state.charts.signalements = new Chart(ctx, {
        type: 'line',
        data: {
            labels: signalements.labels,
            datasets: signalements.datasets.map(ds => ({
                ...ds,
                fill: true,
                tension: 0.4,
                borderWidth: 2,
                pointRadius: 0,
                pointHoverRadius: 4
            }))
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                intersect: false,
                mode: 'index'
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    align: 'end',
                    labels: {
                        boxWidth: 8,
                        boxHeight: 8,
                        usePointStyle: true,
                        pointStyle: 'circle',
                        color: '#9ca3af',
                        font: { size: 11 }
                    }
                },
                tooltip: {
                    backgroundColor: '#1f2937',
                    titleColor: '#f9fafb',
                    bodyColor: '#d1d5db',
                    borderColor: '#374151',
                    borderWidth: 1,
                    padding: 12,
                    displayColors: true,
                    boxWidth: 8,
                    boxHeight: 8,
                    usePointStyle: true
                }
            },
            scales: {
                x: {
                    grid: { color: 'rgba(55, 65, 81, 0.3)' },
                    ticks: { 
                        color: '#6b7280', 
                        font: { size: 10 },
                        maxRotation: 0,
                        maxTicksLimit: 10
                    }
                },
                y: {
                    grid: { color: 'rgba(55, 65, 81, 0.3)' },
                    ticks: { 
                        color: '#6b7280', 
                        font: { size: 10 }
                    },
                    beginAtZero: true
                }
            }
        }
    });
}

/**
 * Render fiches creation chart
 */
function renderFichesChart() {
    const canvas = document.getElementById('chartFiches');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    const { fiches } = state.trends;
    
    if (state.charts.fiches) {
        state.charts.fiches.destroy();
    }
    
    state.charts.fiches = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: fiches.labels,
            datasets: [{
                label: 'Fiches créées',
                data: fiches.data,
                backgroundColor: `${CONFIG.CHART_COLORS.blue}80`,
                borderColor: CONFIG.CHART_COLORS.blue,
                borderWidth: 1,
                borderRadius: 4,
                barThickness: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#1f2937',
                    titleColor: '#f9fafb',
                    bodyColor: '#d1d5db',
                    borderColor: '#374151',
                    borderWidth: 1,
                    padding: 12
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: { 
                        color: '#6b7280', 
                        font: { size: 10 },
                        maxRotation: 0,
                        maxTicksLimit: 10
                    }
                },
                y: {
                    grid: { color: 'rgba(55, 65, 81, 0.3)' },
                    ticks: { 
                        color: '#6b7280', 
                        font: { size: 10 }
                    },
                    beginAtZero: true
                }
            }
        }
    });
}

/**
 * Render categories doughnut chart
 */
function renderCategoriesChart() {
    const canvas = document.getElementById('chartCategories');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    const { categories } = state.trends;
    
    if (state.charts.categories) {
        state.charts.categories.destroy();
    }
    
    state.charts.categories = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: categories.labels,
            datasets: [{
                data: categories.data,
                backgroundColor: categories.colors,
                borderWidth: 0,
                hoverOffset: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '65%',
            plugins: {
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        boxWidth: 12,
                        boxHeight: 12,
                        color: '#9ca3af',
                        font: { size: 11 },
                        padding: 15
                    }
                },
                tooltip: {
                    backgroundColor: '#1f2937',
                    titleColor: '#f9fafb',
                    bodyColor: '#d1d5db',
                    borderColor: '#374151',
                    borderWidth: 1,
                    padding: 12,
                    callbacks: {
                        label: function(context) {
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = ((context.raw / total) * 100).toFixed(1);
                            return `${context.label}: ${formatNumber(context.raw)} (${percentage}%)`;
                        }
                    }
                }
            }
        }
    });
}

/**
 * Render digital activity chart
 */
function renderActiviteChart() {
    const canvas = document.getElementById('chartActivite');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    const { activite } = state.trends;
    
    if (state.charts.activite) {
        state.charts.activite.destroy();
    }
    
    state.charts.activite = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: activite.labels,
            datasets: [
                {
                    label: 'Comptes actifs',
                    data: activite.comptes,
                    backgroundColor: CONFIG.CHART_COLORS.cyan,
                    borderRadius: 4,
                    barPercentage: 0.6
                },
                {
                    label: 'Contenus publiés',
                    data: activite.contenus,
                    backgroundColor: CONFIG.CHART_COLORS.purple,
                    borderRadius: 4,
                    barPercentage: 0.6
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    align: 'end',
                    labels: {
                        boxWidth: 12,
                        boxHeight: 12,
                        color: '#9ca3af',
                        font: { size: 11 }
                    }
                },
                tooltip: {
                    backgroundColor: '#1f2937',
                    titleColor: '#f9fafb',
                    bodyColor: '#d1d5db',
                    borderColor: '#374151',
                    borderWidth: 1,
                    padding: 12
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: { color: '#6b7280', font: { size: 11 } }
                },
                y: {
                    grid: { color: 'rgba(55, 65, 81, 0.3)' },
                    ticks: { color: '#6b7280', font: { size: 10 } },
                    beginAtZero: true
                }
            }
        }
    });
}

/**
 * Render relations matrix
 */
function renderRelations() {
    const container = document.getElementById('relationsMatrix');
    
    if (!state.relations.length) {
        container.innerHTML = '<div class="empty-state">Aucune relation disponible</div>';
        return;
    }
    
    container.innerHTML = `
        <table class="relation-table">
            <thead>
                <tr>
                    <th>Source</th>
                    <th>Cible</th>
                    <th>Type</th>
                    <th>Liens</th>
                </tr>
            </thead>
            <tbody>
                ${state.relations.map(rel => `
                    <tr>
                        <td><span class="relation-link">${sanitize(rel.source)}</span></td>
                        <td><span class="relation-link">${sanitize(rel.target)}</span></td>
                        <td>${sanitize(rel.type)}</td>
                        <td><span class="relation-count ${rel.count > 5 ? 'high' : ''}">${rel.count}</span></td>
                    </tr>
                `).join('')}
            </tbody>
        </table>
    `;
}

/**
 * Render activities list
 */
function renderActivities(tab = 'fiches') {
    const container = document.getElementById('activityList');
    const activities = state.activities[tab] || [];
    
    if (!activities.length) {
        container.innerHTML = '<div class="empty-state">Aucune activité récente</div>';
        return;
    }
    
    const icons = {
        add: 'ri-add-circle-line',
        update: 'ri-edit-line',
        alert: 'ri-alarm-warning-line'
    };
    
    container.innerHTML = activities.map(activity => `
        <div class="activity-item">
            <div class="activity-icon ${activity.type}">
                <i class="${icons[activity.type]}"></i>
            </div>
            <div class="activity-content">
                <div class="activity-title">${sanitize(activity.title)}</div>
                <div class="activity-subtitle">${sanitize(activity.subtitle)}</div>
            </div>
            <div class="activity-time">${formatRelativeTime(activity.time)}</div>
        </div>
    `).join('');
}

/**
 * Render geographic distribution
 */
function renderGeoData() {
    const container = document.getElementById('geoStats');
    
    if (!state.geoData.length) {
        container.innerHTML = '<div class="empty-state">Données géographiques non disponibles</div>';
        return;
    }
    
    container.innerHTML = state.geoData.map((geo, index) => `
        <div class="geo-item">
            <div class="geo-rank ${index < 3 ? 'top' : ''}">${index + 1}</div>
            <div class="geo-info">
                <div class="geo-name">${sanitize(geo.name)}</div>
                <div class="geo-bar">
                    <div class="geo-bar-fill" style="width: ${geo.percentage}%"></div>
                </div>
            </div>
            <div class="geo-value">${formatNumber(geo.count)}</div>
        </div>
    `).join('');
}

/**
 * Render platforms list
 */
function renderPlatforms() {
    const container = document.getElementById('platformList');
    
    if (!state.platforms.length) {
        container.innerHTML = '<div class="empty-state">Aucune plateforme surveillée</div>';
        return;
    }
    
    const platformIcons = {
        facebook: 'ri-facebook-fill',
        twitter: 'ri-twitter-x-fill',
        instagram: 'ri-instagram-fill',
        telegram: 'ri-telegram-fill',
        whatsapp: 'ri-whatsapp-fill',
        tiktok: 'ri-tiktok-fill'
    };
    
    container.innerHTML = state.platforms.map(platform => `
        <div class="platform-item">
            <div class="platform-icon ${platform.icon}">
                <i class="${platformIcons[platform.icon]}"></i>
            </div>
            <div class="platform-info">
                <div class="platform-name">${sanitize(platform.name)}</div>
                <div class="platform-count">${formatNumber(platform.count)} comptes · ${platform.change}</div>
            </div>
        </div>
    `).join('');
}

// ==========================================
// Event Handlers
// ==========================================

/**
 * Handle alert click
 */
function handleAlertClick(alertId) {
    logAction('view_alert', { alertId });
    showToast(`Ouverture de l'alerte #${alertId}`, 'info');
    // In production: Navigate to alert detail page
}

/**
 * Handle activity tab change
 */
function handleActivityTabChange(tab) {
    state.currentActivityTab = tab;
    
    document.querySelectorAll('#activityTabs .tab-btn').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.tab === tab);
    });
    
    renderActivities(tab);
    logAction('change_activity_tab', { tab });
}

/**
 * Handle period change
 */
function handlePeriodChange(period) {
    state.currentPeriod = period;
    showToast('Actualisation des données...', 'info');
    
    // Reload data
    fetchStats().then(renderStats);
    fetchTrends().then(renderTrends);
    
    logAction('change_period', { period });
}

/**
 * Handle refresh
 */
async function handleRefresh() {
    const refreshBtn = document.getElementById('refreshBtn');
    refreshBtn.querySelector('i').classList.add('ri-loader-4-line');
    refreshBtn.querySelector('i').style.animation = 'spin 1s linear infinite';
    
    try {
        await Promise.all([
            fetchStats(),
            fetchAlerts(),
            fetchTrends(),
            fetchRelations(),
            fetchActivities(),
            fetchGeoData(),
            fetchPlatforms()
        ]);
        
        renderStats();
        renderAlerts();
        renderTrends();
        renderRelations();
        renderActivities(state.currentActivityTab);
        renderGeoData();
        renderPlatforms();
        
        updateLastRefresh();
        showToast('Données actualisées', 'success');
        logAction('manual_refresh');
    } catch (error) {
        showToast('Erreur lors de l\'actualisation', 'error');
    } finally {
        refreshBtn.querySelector('i').classList.remove('ri-loader-4-line');
        refreshBtn.querySelector('i').classList.add('ri-refresh-line');
        refreshBtn.querySelector('i').style.animation = '';
    }
}

/**
 * Update last refresh timestamp
 */
function updateLastRefresh() {
    const now = new Date();
    document.getElementById('lastUpdate').textContent = 
        `Dernière actualisation : ${formatTime(now)}`;
}

/**
 * Update current time display
 */
function updateDateTime() {
    const now = new Date();
}

// ==========================================
// Initialization
// ==========================================

/**
 * Initialize dashboard
 */
async function init() {
    console.log('[SIGMA] Initializing Dashboard...');
    
    // Log session start
    logAction('dashboard_open');
    
    // Verify permissions
    verifyPermissions();
    
    // Update date/time
    updateDateTime();
    setInterval(updateDateTime, 1000);
    
    // Setup event listeners
    setupEventListeners();
    
    // Load all data
    try {
        await Promise.all([
            fetchStats(),
            fetchAlerts(),
            fetchTrends(),
            fetchRelations(),
            fetchActivities(),
            fetchGeoData(),
            fetchPlatforms()
        ]);
        
        state.isLoading = false;
        
        // Render all components
        renderStats();
        renderAlerts();
        renderTrends();
        renderRelations();
        renderActivities(state.currentActivityTab);
        renderGeoData();
        renderPlatforms();
        
        updateLastRefresh();
        
        console.log('[SIGMA] Dashboard initialized successfully');
        showToast('Dashboard chargé', 'success', 'SIGMA');
        
    } catch (error) {
        console.error('[SIGMA] Initialization error:', error);
        state.isError = true;
        showToast('Erreur lors du chargement', 'error');
    }
    
    // Setup auto-refresh
    setInterval(() => {
        fetchAlerts().then(renderAlerts);
    }, CONFIG.REFRESH_INTERVAL);
}

/**
 * Setup event listeners
 */
function setupEventListeners() {
    // Sidebar toggle
    document.getElementById('toggleSidebar')?.addEventListener('click', () => {
        document.getElementById('sidebar').classList.toggle('collapsed');
    });
    
    // Mobile menu
    document.getElementById('mobileMenuBtn')?.addEventListener('click', () => {
        document.getElementById('sidebar').classList.toggle('open');
    });
    
    // Refresh button
    document.getElementById('refreshBtn')?.addEventListener('click', handleRefresh);
    
    // Period select
    document.getElementById('statsPeriod')?.addEventListener('change', (e) => {
        handlePeriodChange(e.target.value);
    });
    
    // Activity tabs
    document.querySelectorAll('#activityTabs .tab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            handleActivityTabChange(btn.dataset.tab);
        });
    });
    
    // Chart type toggle for fiches
    document.getElementById('fichesChartType')?.addEventListener('change', (e) => {
        const chartType = e.target.value;
        if (state.charts.fiches) {
            state.charts.fiches.config.type = chartType;
            state.charts.fiches.update();
        }
    });
    
    // Keyboard shortcuts
    document.addEventListener('keydown', (e) => {
        // Ctrl+K for search
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            document.getElementById('globalSearch')?.focus();
        }
        
        // Escape to close sidebar on mobile
        if (e.key === 'Escape') {
            document.getElementById('sidebar').classList.remove('open');
        }
    });
    
    // Close sidebar on outside click (mobile)
    document.addEventListener('click', (e) => {
        const sidebar = document.getElementById('sidebar');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        
        if (sidebar.classList.contains('open') && 
            !sidebar.contains(e.target) && 
            !mobileMenuBtn.contains(e.target)) {
            sidebar.classList.remove('open');
        }
    });
}

// ==========================================
// CSS Animation for spinner
// ==========================================
const style = document.createElement('style');
style.textContent = `
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
`;
document.head.appendChild(style);

// ==========================================
// Start Application
// ==========================================
document.addEventListener('DOMContentLoaded', init);
