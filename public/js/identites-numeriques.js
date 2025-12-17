// ==================== Module Identités Numériques - SIGMA ====================
// Gestion des identités numériques - Version locale avec données de démonstration
// Auteur: AT Productions / ANSE - Tchad
// Version: 2.1 - 2025
// ============================================================================

// ==================== CONFIGURATION ====================

const CONFIG = {
    // Mode de fonctionnement : 'local' (données mock) ou 'api' (appels serveur)
    mode: 'local',
    
    // Configuration API (pour usage futur)
    api: {
        baseURL: '/api/v1',
        timeout: 30000
    }
};

// ==================== ÉTAT DE L'APPLICATION ====================

const state = {
    page: 1,
    pageSize: 10,
    totalPages: 0,
    totalItems: 0,
    
    search: '',
    plateforme: '',
    statut: '',
    risque: '',
    startDate: null,
    endDate: null,
    
    identites: [],
    stats: null,
    currentIdentity: null,
    
    loading: {
        stats: false,
        table: false,
        detail: false
    }
};

// ==================== UTILITAIRES ====================

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

function formatDate(dateString) {
    if (!dateString) return 'N/A';
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR', { 
        day: '2-digit', 
        month: '2-digit', 
        year: 'numeric' 
    });
}

function formatDateTime(dateString) {
    if (!dateString) return 'N/A';
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR', { 
        day: '2-digit', 
        month: '2-digit', 
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
}

function calculatePeriodDates(period) {
    if (!period) return { startDate: null, endDate: null };
    
    const endDate = new Date();
    const startDate = new Date();
    
    switch(period) {
        case '7days': startDate.setDate(endDate.getDate() - 7); break;
        case '30days': startDate.setDate(endDate.getDate() - 30); break;
        case '3months': startDate.setMonth(endDate.getMonth() - 3); break;
        case '6months': startDate.setMonth(endDate.getMonth() - 6); break;
        case '1year': startDate.setFullYear(endDate.getFullYear() - 1); break;
        default: return { startDate: null, endDate: null };
    }
    
    return {
        startDate: startDate.toISOString().split('T')[0],
        endDate: endDate.toISOString().split('T')[0]
    };
}

function escapeHtml(text) {
    if (!text) return '';
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// ==================== LABELS ET CONFIGURATIONS ====================

const PLATEFORMES = {
    facebook: { label: 'Facebook', icon: 'ri-facebook-fill', color: '#1877f2' },
    twitter: { label: 'Twitter/X', icon: 'ri-twitter-x-fill', color: '#000000' },
    instagram: { label: 'Instagram', icon: 'ri-instagram-fill', color: '#e4405f' },
    tiktok: { label: 'TikTok', icon: 'ri-tiktok-fill', color: '#000000' },
    whatsapp: { label: 'WhatsApp', icon: 'ri-whatsapp-fill', color: '#25d366' },
    telegram: { label: 'Telegram', icon: 'ri-telegram-fill', color: '#0088cc' },
    youtube: { label: 'YouTube', icon: 'ri-youtube-fill', color: '#ff0000' },
    linkedin: { label: 'LinkedIn', icon: 'ri-linkedin-fill', color: '#0077b5' },
    autre: { label: 'Autre', icon: 'ri-global-line', color: '#6c757d' }
};

const STATUTS = {
    active: { label: 'Active', class: 'success' },
    surveillance: { label: 'Sous surveillance', class: 'warning' },
    suspendue: { label: 'Suspendue', class: 'danger' },
    inactive: { label: 'Inactive', class: 'secondary' }
};

const NIVEAUX_RISQUE = {
    faible: { label: 'Faible', class: 'success', level: 1 },
    moyen: { label: 'Moyen', class: 'warning', level: 2 },
    eleve: { label: 'Élevé', class: 'danger', level: 3 },
    critique: { label: 'Critique', class: 'critical', level: 4 }
};

const TYPES_INCIDENTS = {
    propagande: { label: 'Propagande', icon: 'ri-megaphone-line', color: '#dc3545' },
    desinformation: { label: 'Désinformation', icon: 'ri-spam-line', color: '#fd7e14' },
    incitation: { label: 'Incitation à la violence', icon: 'ri-fire-line', color: '#dc3545' },
    menace: { label: 'Menace', icon: 'ri-alarm-warning-line', color: '#dc3545' },
    coordination: { label: 'Coordination suspecte', icon: 'ri-group-line', color: '#6f42c1' },
    financement: { label: 'Financement suspect', icon: 'ri-money-dollar-circle-line', color: '#198754' },
    recrutement: { label: 'Recrutement', icon: 'ri-user-add-line', color: '#0dcaf0' },
    autre: { label: 'Autre', icon: 'ri-file-warning-line', color: '#6c757d' }
};

function getPlateformeInfo(plateforme) {
    return PLATEFORMES[plateforme] || PLATEFORMES.autre;
}

function getStatutInfo(statut) {
    return STATUTS[statut] || STATUTS.inactive;
}

function getRisqueInfo(risque) {
    return NIVEAUX_RISQUE[risque] || NIVEAUX_RISQUE.faible;
}

function getIncidentTypeInfo(type) {
    return TYPES_INCIDENTS[type] || TYPES_INCIDENTS.autre;
}

// ==================== BASE DE DONNÉES LOCALE (MOCK DATA) ====================

const MOCK_DATA = {
    // Statistiques globales
    stats: {
        total: 2847,
        actives: 1956,
        surveillance: 456,
        suspendues: 234,
        inactives: 201,
        incidentsOuverts: 89,
        nouvelles30j: 127,
        trends: {
            total: { direction: 'up', value: '12%' },
            actives: { direction: 'up', value: '8%' },
            surveillance: { direction: 'up', value: '23%' },
            suspendues: { direction: 'down', value: '5%' },
            incidents: { direction: 'up', value: '15%' }
        }
    },
    
    // Liste des sujets
    sujets: [
        { id: 'SUJ-0124', nom: 'MAHAMAT', prenom: 'Ibrahim', categorie: 'B' },
        { id: 'SUJ-0089', nom: 'OUMAR', prenom: 'Aïcha', categorie: 'C' },
        { id: 'SUJ-0201', nom: 'DEBY', prenom: 'Youssouf', categorie: 'A' },
        { id: 'SUJ-0156', nom: 'HASSAN', prenom: 'Fatima', categorie: 'C' },
        { id: 'SUJ-0078', nom: 'ADAM', prenom: 'Moussa', categorie: 'B' },
        { id: 'SUJ-0312', nom: 'IDRISS', prenom: 'Abdoulaye', categorie: 'S' },
        { id: 'SUJ-0445', nom: 'DJIBRINE', prenom: 'Hawa', categorie: 'C' },
        { id: 'SUJ-0567', nom: 'SALEH', prenom: 'Brahim', categorie: 'A' },
        { id: 'SUJ-0234', nom: 'KHAMIS', prenom: 'Zara', categorie: 'C' },
        { id: 'SUJ-0678', nom: 'ABAKAR', prenom: 'Ali', categorie: 'B' },
        { id: 'SUJ-0789', nom: 'DJAMOUS', prenom: 'Mariam', categorie: 'C' },
        { id: 'SUJ-0890', nom: 'ITNO', prenom: 'Haroun', categorie: 'A' }
    ],
    
    // Liste des identités numériques
    identites: [
        {
            id: 'IDN-001',
            sujet: { id: 'SUJ-0124', nom: 'MAHAMAT', prenom: 'Ibrahim', categorie: 'B', photo: null },
            plateforme: 'facebook',
            pseudo: 'ibrahim.mht.tchad',
            url: 'https://facebook.com/ibrahim.mht.tchad',
            identifiantPlateforme: '100045678912345',
            followers: 12450,
            dateDecouverte: '2024-08-15',
            derniereActivite: '2025-06-09T14:32:00',
            niveauRisque: 'eleve',
            statut: 'surveillance',
            verificateur: 'Agent ANSE-045',
            observations: 'Compte très actif avec publications régulières sur des sujets sensibles. Réseau de contacts à analyser.',
            incidents: [
                { id: 'INC-001', type: 'propagande', titre: 'Publication de contenu radical', description: 'Partage de vidéos à caractère extrémiste avec appel à la mobilisation', dateDetection: '2025-05-28T10:15:00', gravite: 4, statut: 'en_cours', agent: 'Agent ANSE-045' },
                { id: 'INC-002', type: 'coordination', titre: 'Coordination avec groupe suspect', description: 'Messages coordonnés avec le groupe "Réveil du Sahel"', dateDetection: '2025-06-02T16:45:00', gravite: 3, statut: 'ouvert', agent: 'Agent ANSE-012' }
            ],
            historique: [
                { date: '2025-06-09T14:32:00', action: 'Publication détectée', agent: 'Système automatique' },
                { date: '2025-06-02T16:45:00', action: 'Incident créé', agent: 'Agent ANSE-012' },
                { date: '2025-05-28T10:15:00', action: 'Alerte niveau élevé', agent: 'Agent ANSE-045' },
                { date: '2024-08-15T09:00:00', action: 'Identité découverte', agent: 'Agent ANSE-023' }
            ]
        },
        {
            id: 'IDN-002',
            sujet: { id: 'SUJ-0089', nom: 'OUMAR', prenom: 'Aïcha', categorie: 'C', photo: null },
            plateforme: 'twitter',
            pseudo: '@aicha_oumar_td',
            url: 'https://x.com/aicha_oumar_td',
            identifiantPlateforme: '1567890234567',
            followers: 8923,
            dateDecouverte: '2024-11-22',
            derniereActivite: '2025-06-10T08:15:00',
            niveauRisque: 'moyen',
            statut: 'active',
            verificateur: 'Agent ANSE-078',
            observations: 'Activiste politique, discours modéré mais influence notable.',
            incidents: [
                { id: 'INC-003', type: 'desinformation', titre: 'Partage d\'informations non vérifiées', description: 'Diffusion de rumeurs concernant les élections régionales', dateDetection: '2025-04-15T11:30:00', gravite: 2, statut: 'resolu', agent: 'Agent ANSE-078' }
            ],
            historique: [
                { date: '2025-06-10T08:15:00', action: 'Activité normale', agent: 'Système automatique' },
                { date: '2025-04-15T11:30:00', action: 'Incident résolu', agent: 'Agent ANSE-078' },
                { date: '2024-11-22T14:00:00', action: 'Identité découverte', agent: 'Agent ANSE-078' }
            ]
        },
        {
            id: 'IDN-003',
            sujet: { id: 'SUJ-0201', nom: 'DEBY', prenom: 'Youssouf', categorie: 'A', photo: null },
            plateforme: 'telegram',
            pseudo: '@youssouf_resistance',
            url: 'https://t.me/youssouf_resistance',
            identifiantPlateforme: '789456123',
            followers: 3456,
            dateDecouverte: '2024-06-10',
            derniereActivite: '2025-06-08T22:45:00',
            niveauRisque: 'critique',
            statut: 'surveillance',
            verificateur: 'Agent ANSE-001',
            observations: 'PRIORITÉ HAUTE - Administrateur de canal Telegram à forte audience. Contenu régulièrement supprimé par la plateforme.',
            incidents: [
                { id: 'INC-004', type: 'incitation', titre: 'Appel à la violence', description: 'Messages incitant à des actions violentes contre des institutions', dateDetection: '2025-06-01T19:20:00', gravite: 5, statut: 'en_cours', agent: 'Agent ANSE-001' },
                { id: 'INC-005', type: 'recrutement', titre: 'Tentative de recrutement', description: 'Publication d\'offres de recrutement pour organisation non identifiée', dateDetection: '2025-05-20T14:10:00', gravite: 4, statut: 'en_cours', agent: 'Agent ANSE-001' },
                { id: 'INC-006', type: 'financement', titre: 'Collecte de fonds suspecte', description: 'Appel aux dons via crypto-monnaies pour "la cause"', dateDetection: '2025-04-28T10:00:00', gravite: 4, statut: 'ouvert', agent: 'Agent ANSE-015' }
            ],
            historique: [
                { date: '2025-06-08T22:45:00', action: 'Message supprimé par Telegram', agent: 'Système automatique' },
                { date: '2025-06-01T19:20:00', action: 'Incident critique créé', agent: 'Agent ANSE-001' },
                { date: '2025-05-20T14:10:00', action: 'Alerte recrutement', agent: 'Agent ANSE-001' },
                { date: '2024-06-10T08:30:00', action: 'Identité découverte', agent: 'Agent ANSE-001' }
            ]
        },
        {
            id: 'IDN-004',
            sujet: { id: 'SUJ-0156', nom: 'HASSAN', prenom: 'Fatima', categorie: 'C', photo: null },
            plateforme: 'instagram',
            pseudo: 'fatima.hassan.ndjamena',
            url: 'https://instagram.com/fatima.hassan.ndjamena',
            identifiantPlateforme: '456789123',
            followers: 25670,
            dateDecouverte: '2025-01-08',
            derniereActivite: '2025-06-10T12:00:00',
            niveauRisque: 'faible',
            statut: 'active',
            verificateur: 'Agent ANSE-034',
            observations: 'Influenceuse mode et lifestyle. Aucune activité suspecte détectée.',
            incidents: [],
            historique: [
                { date: '2025-06-10T12:00:00', action: 'Vérification de routine', agent: 'Système automatique' },
                { date: '2025-01-08T10:15:00', action: 'Identité découverte', agent: 'Agent ANSE-034' }
            ]
        },
        {
            id: 'IDN-005',
            sujet: { id: 'SUJ-0078', nom: 'ADAM', prenom: 'Moussa', categorie: 'B', photo: null },
            plateforme: 'whatsapp',
            pseudo: '+235 99 45 67 89',
            url: null,
            identifiantPlateforme: '+23599456789',
            followers: null,
            dateDecouverte: '2024-09-30',
            derniereActivite: '2025-06-07T18:30:00',
            niveauRisque: 'eleve',
            statut: 'surveillance',
            verificateur: 'Agent ANSE-056',
            observations: 'Administrateur de plusieurs groupes WhatsApp à caractère politique. Surveillance des échanges en cours.',
            incidents: [
                { id: 'INC-007', type: 'coordination', titre: 'Coordination de manifestation', description: 'Organisation de rassemblement non autorisé via groupes WhatsApp', dateDetection: '2025-05-15T09:00:00', gravite: 3, statut: 'resolu', agent: 'Agent ANSE-056' }
            ],
            historique: [
                { date: '2025-06-07T18:30:00', action: 'Message intercepté', agent: 'Système automatique' },
                { date: '2025-05-15T09:00:00', action: 'Incident créé', agent: 'Agent ANSE-056' },
                { date: '2024-09-30T11:00:00', action: 'Identité découverte', agent: 'Agent ANSE-056' }
            ]
        },
        {
            id: 'IDN-006',
            sujet: { id: 'SUJ-0312', nom: 'IDRISS', prenom: 'Abdoulaye', categorie: 'S', photo: null },
            plateforme: 'youtube',
            pseudo: 'Voix du Sahel TV',
            url: 'https://youtube.com/@voixdusaheltv',
            identifiantPlateforme: 'UC1234567890abcdef',
            followers: 45230,
            dateDecouverte: '2024-03-15',
            derniereActivite: '2025-06-09T20:00:00',
            niveauRisque: 'critique',
            statut: 'surveillance',
            verificateur: 'Agent ANSE-001',
            observations: 'CATÉGORIE S - Chaîne YouTube diffusant de la propagande. Plusieurs vidéos supprimées. Collaboration internationale en cours.',
            incidents: [
                { id: 'INC-008', type: 'propagande', titre: 'Diffusion de propagande terroriste', description: 'Vidéo de revendication d\'actions armées', dateDetection: '2025-06-05T15:00:00', gravite: 5, statut: 'en_cours', agent: 'Agent ANSE-001' },
                { id: 'INC-009', type: 'recrutement', titre: 'Vidéo de recrutement', description: 'Contenu visant le recrutement de jeunes', dateDetection: '2025-05-10T12:30:00', gravite: 5, statut: 'en_cours', agent: 'Agent ANSE-001' }
            ],
            historique: [
                { date: '2025-06-09T20:00:00', action: 'Nouvelle vidéo détectée', agent: 'Système automatique' },
                { date: '2025-06-05T15:00:00', action: 'Incident critique', agent: 'Agent ANSE-001' },
                { date: '2024-03-15T08:00:00', action: 'Chaîne identifiée', agent: 'Agent ANSE-001' }
            ]
        },
        {
            id: 'IDN-007',
            sujet: { id: 'SUJ-0445', nom: 'DJIBRINE', prenom: 'Hawa', categorie: 'C', photo: null },
            plateforme: 'tiktok',
            pseudo: '@hawa_djibrine_td',
            url: 'https://tiktok.com/@hawa_djibrine_td',
            identifiantPlateforme: '7123456789',
            followers: 156000,
            dateDecouverte: '2025-02-20',
            derniereActivite: '2025-06-10T16:45:00',
            niveauRisque: 'moyen',
            statut: 'active',
            verificateur: 'Agent ANSE-089',
            observations: 'Créatrice de contenu populaire. Quelques vidéos à caractère politique détectées.',
            incidents: [
                { id: 'INC-010', type: 'desinformation', titre: 'Vidéo virale avec fausses informations', description: 'Vidéo sur la situation économique contenant des données erronées', dateDetection: '2025-04-02T14:00:00', gravite: 2, statut: 'resolu', agent: 'Agent ANSE-089' }
            ],
            historique: [
                { date: '2025-06-10T16:45:00', action: 'Activité normale', agent: 'Système automatique' },
                { date: '2025-04-02T14:00:00', action: 'Incident créé', agent: 'Agent ANSE-089' },
                { date: '2025-02-20T09:30:00', action: 'Compte identifié', agent: 'Agent ANSE-089' }
            ]
        },
        {
            id: 'IDN-008',
            sujet: { id: 'SUJ-0089', nom: 'OUMAR', prenom: 'Aïcha', categorie: 'C', photo: null },
            plateforme: 'facebook',
            pseudo: 'Aïcha Oumar - Officiel',
            url: 'https://facebook.com/aichaoumar.officiel',
            identifiantPlateforme: '100089567234',
            followers: 34500,
            dateDecouverte: '2024-10-05',
            derniereActivite: '2025-06-10T09:00:00',
            niveauRisque: 'moyen',
            statut: 'active',
            verificateur: 'Agent ANSE-078',
            observations: 'Deuxième compte de la même personne (SUJ-0089). Audience plus large que le compte Twitter.',
            incidents: [],
            historique: [
                { date: '2025-06-10T09:00:00', action: 'Publication normale', agent: 'Système automatique' },
                { date: '2024-10-05T15:00:00', action: 'Compte secondaire identifié', agent: 'Agent ANSE-078' }
            ]
        },
        {
            id: 'IDN-009',
            sujet: { id: 'SUJ-0567', nom: 'SALEH', prenom: 'Brahim', categorie: 'A', photo: null },
            plateforme: 'telegram',
            pseudo: '@brahim_info_tchad',
            url: 'https://t.me/brahim_info_tchad',
            identifiantPlateforme: '567890234',
            followers: 8900,
            dateDecouverte: '2024-07-22',
            derniereActivite: '2025-06-08T11:20:00',
            niveauRisque: 'eleve',
            statut: 'suspendue',
            verificateur: 'Agent ANSE-023',
            observations: 'Compte suspendu suite à la diffusion de contenus interdits. Surveillance maintenue pour détecter une éventuelle réactivation.',
            incidents: [
                { id: 'INC-011', type: 'menace', titre: 'Menaces contre autorités', description: 'Messages menaçants visant des personnalités politiques', dateDetection: '2025-03-18T10:00:00', gravite: 4, statut: 'resolu', agent: 'Agent ANSE-023' }
            ],
            historique: [
                { date: '2025-06-08T11:20:00', action: 'Vérification statut', agent: 'Système automatique' },
                { date: '2025-03-20T08:00:00', action: 'Compte suspendu', agent: 'Agent ANSE-023' },
                { date: '2025-03-18T10:00:00', action: 'Incident critique', agent: 'Agent ANSE-023' },
                { date: '2024-07-22T14:30:00', action: 'Identité découverte', agent: 'Agent ANSE-023' }
            ]
        },
        {
            id: 'IDN-010',
            sujet: { id: 'SUJ-0234', nom: 'KHAMIS', prenom: 'Zara', categorie: 'C', photo: null },
            plateforme: 'linkedin',
            pseudo: 'Zara Khamis',
            url: 'https://linkedin.com/in/zara-khamis',
            identifiantPlateforme: 'zara-khamis-td',
            followers: 2340,
            dateDecouverte: '2025-03-10',
            derniereActivite: '2025-06-09T10:00:00',
            niveauRisque: 'faible',
            statut: 'active',
            verificateur: 'Agent ANSE-067',
            observations: 'Profil professionnel. Travaille dans le secteur des ONG. Pas d\'activité suspecte.',
            incidents: [],
            historique: [
                { date: '2025-06-09T10:00:00', action: 'Vérification routine', agent: 'Système automatique' },
                { date: '2025-03-10T11:00:00', action: 'Profil identifié', agent: 'Agent ANSE-067' }
            ]
        },
        {
            id: 'IDN-011',
            sujet: { id: 'SUJ-0678', nom: 'ABAKAR', prenom: 'Ali', categorie: 'B', photo: null },
            plateforme: 'facebook',
            pseudo: 'Ali Abakar - Journaliste',
            url: 'https://facebook.com/ali.abakar.journaliste',
            identifiantPlateforme: '100067823456',
            followers: 18500,
            dateDecouverte: '2024-05-12',
            derniereActivite: '2025-06-10T11:30:00',
            niveauRisque: 'moyen',
            statut: 'surveillance',
            verificateur: 'Agent ANSE-034',
            observations: 'Journaliste indépendant. Publications parfois critiques envers le gouvernement. Pas de contenu illégal détecté.',
            incidents: [
                { id: 'INC-012', type: 'desinformation', titre: 'Article avec sources non vérifiées', description: 'Publication d\'un article citant des sources anonymes non vérifiables', dateDetection: '2025-02-20T09:00:00', gravite: 2, statut: 'resolu', agent: 'Agent ANSE-034' }
            ],
            historique: [
                { date: '2025-06-10T11:30:00', action: 'Publication détectée', agent: 'Système automatique' },
                { date: '2025-02-20T09:00:00', action: 'Incident créé', agent: 'Agent ANSE-034' },
                { date: '2024-05-12T14:00:00', action: 'Profil identifié', agent: 'Agent ANSE-034' }
            ]
        },
        {
            id: 'IDN-012',
            sujet: { id: 'SUJ-0789', nom: 'DJAMOUS', prenom: 'Mariam', categorie: 'C', photo: null },
            plateforme: 'instagram',
            pseudo: 'mariam_djamous_art',
            url: 'https://instagram.com/mariam_djamous_art',
            identifiantPlateforme: '789012345',
            followers: 42300,
            dateDecouverte: '2025-04-05',
            derniereActivite: '2025-06-10T15:20:00',
            niveauRisque: 'faible',
            statut: 'active',
            verificateur: 'Agent ANSE-089',
            observations: 'Artiste peintre. Contenu exclusivement artistique et culturel.',
            incidents: [],
            historique: [
                { date: '2025-06-10T15:20:00', action: 'Vérification routine', agent: 'Système automatique' },
                { date: '2025-04-05T10:00:00', action: 'Profil identifié', agent: 'Agent ANSE-089' }
            ]
        },
        {
            id: 'IDN-013',
            sujet: { id: 'SUJ-0890', nom: 'ITNO', prenom: 'Haroun', categorie: 'A', photo: null },
            plateforme: 'twitter',
            pseudo: '@haroun_itno_td',
            url: 'https://x.com/haroun_itno_td',
            identifiantPlateforme: '2345678901234',
            followers: 5670,
            dateDecouverte: '2024-04-18',
            derniereActivite: '2025-06-09T19:45:00',
            niveauRisque: 'eleve',
            statut: 'surveillance',
            verificateur: 'Agent ANSE-012',
            observations: 'Activiste politique connu. Relations avec des groupes d\'opposition. Surveillance renforcée.',
            incidents: [
                { id: 'INC-013', type: 'coordination', titre: 'Coordination avec diaspora', description: 'Messages coordonnés avec des comptes de la diaspora tchadienne', dateDetection: '2025-05-08T16:30:00', gravite: 3, statut: 'en_cours', agent: 'Agent ANSE-012' },
                { id: 'INC-014', type: 'incitation', titre: 'Appel à la désobéissance civile', description: 'Tweet appelant à des actions de désobéissance civile', dateDetection: '2025-04-22T08:15:00', gravite: 3, statut: 'ouvert', agent: 'Agent ANSE-012' }
            ],
            historique: [
                { date: '2025-06-09T19:45:00', action: 'Tweet détecté', agent: 'Système automatique' },
                { date: '2025-05-08T16:30:00', action: 'Incident créé', agent: 'Agent ANSE-012' },
                { date: '2025-04-22T08:15:00', action: 'Alerte incitation', agent: 'Agent ANSE-012' },
                { date: '2024-04-18T11:00:00', action: 'Profil identifié', agent: 'Agent ANSE-012' }
            ]
        },
        {
            id: 'IDN-014',
            sujet: { id: 'SUJ-0124', nom: 'MAHAMAT', prenom: 'Ibrahim', categorie: 'B', photo: null },
            plateforme: 'telegram',
            pseudo: '@ibrahim_mht_canal',
            url: 'https://t.me/ibrahim_mht_canal',
            identifiantPlateforme: '345678901',
            followers: 2100,
            dateDecouverte: '2024-12-01',
            derniereActivite: '2025-06-08T20:15:00',
            niveauRisque: 'eleve',
            statut: 'surveillance',
            verificateur: 'Agent ANSE-045',
            observations: 'Canal Telegram secondaire du sujet SUJ-0124. Contenu similaire au compte Facebook.',
            incidents: [
                { id: 'INC-015', type: 'propagande', titre: 'Relais de contenu radical', description: 'Partage de messages provenant de canaux extrémistes', dateDetection: '2025-06-03T11:00:00', gravite: 4, statut: 'en_cours', agent: 'Agent ANSE-045' }
            ],
            historique: [
                { date: '2025-06-08T20:15:00', action: 'Message détecté', agent: 'Système automatique' },
                { date: '2025-06-03T11:00:00', action: 'Incident créé', agent: 'Agent ANSE-045' },
                { date: '2024-12-01T09:00:00', action: 'Canal identifié', agent: 'Agent ANSE-045' }
            ]
        },
        {
            id: 'IDN-015',
            sujet: { id: 'SUJ-0201', nom: 'DEBY', prenom: 'Youssouf', categorie: 'A', photo: null },
            plateforme: 'youtube',
            pseudo: 'Youssouf Deby Channel',
            url: 'https://youtube.com/@youssouf_deby',
            identifiantPlateforme: 'UCabcdef123456',
            followers: 8900,
            dateDecouverte: '2024-08-20',
            derniereActivite: '2025-06-07T14:00:00',
            niveauRisque: 'critique',
            statut: 'suspendue',
            verificateur: 'Agent ANSE-001',
            observations: 'Chaîne YouTube suspendue par la plateforme après signalement. Compte secondaire du sujet SUJ-0201.',
            incidents: [
                { id: 'INC-016', type: 'propagande', titre: 'Vidéos de propagande', description: 'Série de vidéos diffusant de la propagande anti-gouvernementale', dateDetection: '2025-01-15T10:00:00', gravite: 5, statut: 'resolu', agent: 'Agent ANSE-001' }
            ],
            historique: [
                { date: '2025-06-07T14:00:00', action: 'Vérification statut', agent: 'Système automatique' },
                { date: '2025-02-10T08:00:00', action: 'Chaîne suspendue par YouTube', agent: 'Système automatique' },
                { date: '2025-01-15T10:00:00', action: 'Signalement effectué', agent: 'Agent ANSE-001' },
                { date: '2024-08-20T16:00:00', action: 'Chaîne identifiée', agent: 'Agent ANSE-001' }
            ]
        }
    ]
};

// ==================== SERVICES DE DONNÉES LOCALES ====================

function getStats() {
    return { ...MOCK_DATA.stats };
}

function getIdentites(filters = {}) {
    let data = [...MOCK_DATA.identites];
    
    if (filters.search) {
        const searchLower = filters.search.toLowerCase();
        data = data.filter(i => 
            i.pseudo.toLowerCase().includes(searchLower) ||
            i.sujet.nom.toLowerCase().includes(searchLower) ||
            i.sujet.prenom.toLowerCase().includes(searchLower) ||
            i.id.toLowerCase().includes(searchLower)
        );
    }
    
    if (filters.plateforme) {
        data = data.filter(i => i.plateforme === filters.plateforme);
    }
    
    if (filters.statut) {
        data = data.filter(i => i.statut === filters.statut);
    }
    
    if (filters.risque) {
        data = data.filter(i => i.niveauRisque === filters.risque);
    }
    
    if (filters.startDate) {
        const startDate = new Date(filters.startDate);
        data = data.filter(i => new Date(i.dateDecouverte) >= startDate);
    }
    
    if (filters.endDate) {
        const endDate = new Date(filters.endDate);
        data = data.filter(i => new Date(i.dateDecouverte) <= endDate);
    }
    
    return { data: data, total: data.length };
}

function getIdentiteById(id) {
    return MOCK_DATA.identites.find(i => i.id === id) || null;
}

function getSujets() {
    return [...MOCK_DATA.sujets];
}

function updateIdentiteStatut(id, newStatut) {
    const identite = MOCK_DATA.identites.find(i => i.id === id);
    if (identite) {
        identite.statut = newStatut;
        identite.historique.unshift({
            date: new Date().toISOString(),
            action: `Statut modifié: ${newStatut}`,
            agent: 'Utilisateur actuel'
        });
        return true;
    }
    return false;
}

// ==================== CHARGEMENT DES DONNÉES ====================

function loadStats() {
    const statsGrid = document.getElementById('statsGrid');
    
    statsGrid.innerHTML = `
        <div class="stat-card-loading">
            <i class="ri-loader-4-line spin"></i>
            <p>Chargement des statistiques...</p>
        </div>
    `;
    
    setTimeout(() => {
        state.stats = getStats();
        renderStats(state.stats);
    }, 300);
}

function loadIdentites() {
    const tableLoading = document.getElementById('tableLoading');
    const tableEmpty = document.getElementById('tableEmpty');
    const dataTable = document.getElementById('dataTable');
    const tableFooter = document.getElementById('tableFooter');
    
    tableLoading.style.display = 'block';
    tableEmpty.style.display = 'none';
    dataTable.style.display = 'none';
    tableFooter.style.display = 'none';
    
    setTimeout(() => {
        const result = getIdentites({
            search: state.search,
            plateforme: state.plateforme,
            statut: state.statut,
            risque: state.risque,
            startDate: state.startDate,
            endDate: state.endDate
        });
        
        state.identites = result.data;
        state.totalItems = result.total;
        state.totalPages = Math.ceil(state.totalItems / state.pageSize);
        
        tableLoading.style.display = 'none';
        
        if (state.identites.length === 0) {
            tableEmpty.style.display = 'block';
        } else {
            renderTable();
        }
    }, 200);
}

function loadIdentiteDetail(id) {
    const modalBody = document.getElementById('modalBody');
    const modalFooter = document.getElementById('modalFooter');
    
    modalBody.innerHTML = `
        <div class="loading">
            <i class="ri-loader-4-line spin"></i>
            <p>Chargement des détails...</p>
        </div>
    `;
    modalFooter.style.display = 'none';
    
    setTimeout(() => {
        const identite = getIdentiteById(id);
        
        if (identite) {
            state.currentIdentity = identite;
            renderIdentiteDetail(identite);
            modalFooter.style.display = 'flex';
        } else {
            modalBody.innerHTML = `
                <div class="table-error">
                    <i class="ri-error-warning-line"></i>
                    <p>Impossible de charger les détails</p>
                    <small>Identité non trouvée</small>
                </div>
            `;
        }
    }, 150);
}

// ==================== RENDU UI ====================

function renderStats(stats) {
    const statsGrid = document.getElementById('statsGrid');
    
    const statsConfig = [
        { icon: 'ri-fingerprint-line', label: 'Total Identités', value: stats.total || 0, trend: stats.trends?.total, color: 'primary', footer: 'Identités numériques enregistrées' },
        { icon: 'ri-checkbox-circle-line', label: 'Actives', value: stats.actives || 0, trend: stats.trends?.actives, color: 'success', footer: 'Comptes actifs surveillés' },
        { icon: 'ri-eye-line', label: 'Sous surveillance', value: stats.surveillance || 0, trend: stats.trends?.surveillance, color: 'warning', footer: 'Surveillance renforcée' },
        { icon: 'ri-close-circle-line', label: 'Suspendues', value: stats.suspendues || 0, trend: stats.trends?.suspendues, color: 'danger', footer: 'Comptes suspendus' },
        { icon: 'ri-alarm-warning-line', label: 'Incidents ouverts', value: stats.incidentsOuverts || 0, trend: stats.trends?.incidents, color: 'info', footer: 'À traiter' }
    ];
    
    statsGrid.innerHTML = '';
    statsGrid.style.display = 'grid';
    
    statsConfig.forEach(stat => {
        const trend = stat.trend || { direction: 'up', value: '0%' };
        const card = document.createElement('div');
        card.className = `stat-card ${stat.color}`;
        card.innerHTML = `
            <div class="stat-header">
                <div class="stat-icon"><i class="${stat.icon}"></i></div>
                <div class="stat-trend ${trend.direction}">
                    <i class="ri-arrow-${trend.direction === 'up' ? 'up' : 'down'}-line"></i>
                    ${trend.value}
                </div>
            </div>
            <div class="stat-body">
                <div class="stat-label">${stat.label}</div>
                <div class="stat-value">${stat.value.toLocaleString('fr-FR')}</div>
                <div class="stat-footer"><i class="ri-information-line"></i><span>${stat.footer}</span></div>
            </div>
        `;
        statsGrid.appendChild(card);
    });
}

function renderTable() {
    const tableLoading = document.getElementById('tableLoading');
    const dataTable = document.getElementById('dataTable');
    const tableBody = document.getElementById('tableBody');
    const tableFooter = document.getElementById('tableFooter');
    
    tableLoading.style.display = 'none';
    dataTable.style.display = 'table';
    tableFooter.style.display = 'flex';
    
    tableBody.innerHTML = '';
    
    const startIndex = (state.page - 1) * state.pageSize;
    const endIndex = startIndex + state.pageSize;
    const pageData = state.identites.slice(startIndex, endIndex);
    
    pageData.forEach(identite => {
        const plateformeInfo = getPlateformeInfo(identite.plateforme);
        const statutInfo = getStatutInfo(identite.statut);
        const risqueInfo = getRisqueInfo(identite.niveauRisque);
        const incidentsCount = identite.incidents?.length || 0;
        const incidentsOuverts = identite.incidents?.filter(i => i.statut !== 'resolu').length || 0;
        
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><span class="id-badge">${identite.id}</span></td>
            <td>
                <div class="sujet-info">
                    <span class="sujet-name">${escapeHtml(identite.sujet.nom)} ${escapeHtml(identite.sujet.prenom)}</span>
                    <span class="sujet-cat cat-${identite.sujet.categorie.toLowerCase()}">${identite.sujet.categorie}</span>
                </div>
            </td>
            <td>
                <div class="plateforme-badge" style="--plateforme-color: ${plateformeInfo.color}">
                    <i class="${plateformeInfo.icon}"></i>
                    <span>${plateformeInfo.label}</span>
                </div>
            </td>
            <td>
                <div class="pseudo-info">
                    <span class="pseudo-name">${escapeHtml(identite.pseudo)}</span>
                    ${identite.followers ? `<span class="followers-count"><i class="ri-user-follow-line"></i> ${identite.followers.toLocaleString('fr-FR')}</span>` : ''}
                </div>
            </td>
            <td>${formatDate(identite.dateDecouverte)}</td>
            <td><span class="risque-badge ${risqueInfo.class}">${risqueInfo.label}</span></td>
            <td>
                <div class="incidents-count ${incidentsOuverts > 0 ? 'has-open' : ''}">
                    <span class="count-total">${incidentsCount}</span>
                    ${incidentsOuverts > 0 ? `<span class="count-open">(${incidentsOuverts} ouvert${incidentsOuverts > 1 ? 's' : ''})</span>` : ''}
                </div>
            </td>
            <td><span class="status-badge ${statutInfo.class}">${statutInfo.label}</span></td>
            <td>
                <div class="action-buttons">
                    <button class="action-btn view" title="Voir les détails" onclick="viewIdentite('${identite.id}')"><i class="ri-eye-line"></i></button>
                    <button class="action-btn edit" title="Modifier" onclick="editIdentite('${identite.id}')"><i class="ri-edit-line"></i></button>
                    <button class="action-btn ${identite.statut === 'surveillance' ? 'active' : ''}" title="${identite.statut === 'surveillance' ? 'Retirer de la surveillance' : 'Mettre sous surveillance'}" onclick="toggleSurveillanceFromTable('${identite.id}', '${identite.statut}')">
                        <i class="ri-eye-${identite.statut === 'surveillance' ? 'off' : '2'}-line"></i>
                    </button>
                </div>
            </td>
        `;
        tableBody.appendChild(row);
    });
    
    updatePaginationInfo();
    renderPagination();
}

function renderIdentiteDetail(identite) {
    const modalBody = document.getElementById('modalBody');
    const modalTitle = document.getElementById('modalTitle');
    const modalSubtitle = document.getElementById('modalSubtitle');
    
    const plateformeInfo = getPlateformeInfo(identite.plateforme);
    const statutInfo = getStatutInfo(identite.statut);
    const risqueInfo = getRisqueInfo(identite.niveauRisque);
    
    modalTitle.textContent = identite.pseudo;
    modalSubtitle.innerHTML = `
        <span class="plateforme-badge" style="--plateforme-color: ${plateformeInfo.color}">
            <i class="${plateformeInfo.icon}"></i> ${plateformeInfo.label}
        </span>
        <span class="status-badge ${statutInfo.class}">${statutInfo.label}</span>
    `;
    
    let incidentsHtml = '';
    if (identite.incidents && identite.incidents.length > 0) {
        incidentsHtml = identite.incidents.map(incident => {
            const typeInfo = getIncidentTypeInfo(incident.type);
            const statutClass = incident.statut === 'resolu' ? 'resolved' : (incident.statut === 'en_cours' ? 'in-progress' : 'open');
            const statutLabel = incident.statut === 'resolu' ? 'Résolu' : (incident.statut === 'en_cours' ? 'En cours' : 'Ouvert');
            
            return `
                <div class="incident-card ${statutClass}">
                    <div class="incident-header">
                        <div class="incident-type" style="--type-color: ${typeInfo.color}">
                            <i class="${typeInfo.icon}"></i><span>${typeInfo.label}</span>
                        </div>
                        <div class="incident-meta">
                            <span class="incident-status ${statutClass}">${statutLabel}</span>
                            <span class="incident-gravity gravity-${incident.gravite}"><i class="ri-alert-line"></i> Gravité ${incident.gravite}/5</span>
                        </div>
                    </div>
                    <div class="incident-body">
                        <h5 class="incident-title">${escapeHtml(incident.titre)}</h5>
                        <p class="incident-description">${escapeHtml(incident.description)}</p>
                    </div>
                    <div class="incident-footer">
                        <span class="incident-date"><i class="ri-calendar-line"></i> ${formatDateTime(incident.dateDetection)}</span>
                        <span class="incident-agent"><i class="ri-user-line"></i> ${escapeHtml(incident.agent)}</span>
                    </div>
                </div>
            `;
        }).join('');
    } else {
        incidentsHtml = `<div class="empty-state small"><i class="ri-shield-check-line"></i><p>Aucun incident enregistré</p></div>`;
    }
    
    let historiqueHtml = '';
    if (identite.historique && identite.historique.length > 0) {
        historiqueHtml = identite.historique.slice(0, 5).map((item, index) => `
            <div class="timeline-item ${index === 0 ? 'latest' : ''}">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <div class="timeline-date">${formatDateTime(item.date)}</div>
                    <div class="timeline-action">${escapeHtml(item.action)}</div>
                    <div class="timeline-agent">${escapeHtml(item.agent)}</div>
                </div>
            </div>
        `).join('');
    }
    
    modalBody.innerHTML = `
        <div class="detail-container">
            <div class="detail-section">
                <div class="detail-grid">
                    <div class="detail-card">
                        <h4 class="detail-card-title"><i class="ri-user-line"></i> Sujet associé</h4>
                        <div class="detail-card-body">
                            <div class="sujet-profile">
                                <div class="sujet-avatar cat-${identite.sujet.categorie.toLowerCase()}">${identite.sujet.prenom.charAt(0)}${identite.sujet.nom.charAt(0)}</div>
                                <div class="sujet-details">
                                    <span class="sujet-fullname">${escapeHtml(identite.sujet.nom)} ${escapeHtml(identite.sujet.prenom)}</span>
                                    <span class="sujet-id">${identite.sujet.id}</span>
                                    <span class="sujet-cat-badge cat-${identite.sujet.categorie.toLowerCase()}">Catégorie ${identite.sujet.categorie}</span>
                                </div>
                            </div>
                            <a href="#" class="btn btn-sm btn-ghost" onclick="viewSujet('${identite.sujet.id}'); return false;"><i class="ri-external-link-line"></i> Voir la fiche</a>
                        </div>
                    </div>
                    <div class="detail-card">
                        <h4 class="detail-card-title"><i class="ri-global-line"></i> Informations du compte</h4>
                        <div class="detail-card-body">
                            <div class="info-grid">
                                <div class="info-item"><span class="info-label">Plateforme</span><span class="info-value"><span class="plateforme-badge" style="--plateforme-color: ${plateformeInfo.color}"><i class="${plateformeInfo.icon}"></i> ${plateformeInfo.label}</span></span></div>
                                <div class="info-item"><span class="info-label">Pseudo</span><span class="info-value">${escapeHtml(identite.pseudo)}</span></div>
                                <div class="info-item"><span class="info-label">ID Plateforme</span><span class="info-value code">${escapeHtml(identite.identifiantPlateforme || 'N/A')}</span></div>
                                <div class="info-item"><span class="info-label">Abonnés</span><span class="info-value">${identite.followers ? identite.followers.toLocaleString('fr-FR') : 'N/A'}</span></div>
                                <div class="info-item"><span class="info-label">URL</span><span class="info-value">${identite.url ? `<a href="${identite.url}" target="_blank" class="link-external">${identite.url} <i class="ri-external-link-line"></i></a>` : 'N/A'}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-section">
                <div class="detail-grid three-cols">
                    <div class="metric-card"><div class="metric-icon risque-${risqueInfo.class}"><i class="ri-shield-line"></i></div><div class="metric-content"><span class="metric-label">Niveau de risque</span><span class="metric-value risque-${risqueInfo.class}">${risqueInfo.label}</span></div></div>
                    <div class="metric-card"><div class="metric-icon"><i class="ri-calendar-check-line"></i></div><div class="metric-content"><span class="metric-label">Découvert le</span><span class="metric-value">${formatDate(identite.dateDecouverte)}</span></div></div>
                    <div class="metric-card"><div class="metric-icon"><i class="ri-time-line"></i></div><div class="metric-content"><span class="metric-label">Dernière activité</span><span class="metric-value">${formatDateTime(identite.derniereActivite)}</span></div></div>
                </div>
            </div>
            ${identite.observations ? `<div class="detail-section"><div class="observations-card"><h4 class="detail-card-title"><i class="ri-file-text-line"></i> Observations</h4><p class="observations-text">${escapeHtml(identite.observations)}</p><div class="observations-meta"><span><i class="ri-user-line"></i> ${escapeHtml(identite.verificateur)}</span></div></div></div>` : ''}
            <div class="detail-section">
                <div class="section-header"><h4 class="section-title"><i class="ri-alarm-warning-line"></i> Incidents liés <span class="count-badge">${identite.incidents?.length || 0}</span></h4><button class="btn btn-sm btn-primary" onclick="addIncident('${identite.id}')"><i class="ri-add-line"></i> Nouvel incident</button></div>
                <div class="incidents-list">${incidentsHtml}</div>
            </div>
            <div class="detail-section">
                <div class="section-header"><h4 class="section-title"><i class="ri-history-line"></i> Historique des activités</h4></div>
                <div class="timeline">${historiqueHtml}</div>
            </div>
        </div>
    `;
    
    const btnSurveillance = document.getElementById('btnSurveillance');
    if (identite.statut === 'surveillance') {
        btnSurveillance.innerHTML = '<i class="ri-eye-off-line"></i> Retirer de la surveillance';
        btnSurveillance.classList.remove('btn-warning');
        btnSurveillance.classList.add('btn-secondary');
    } else {
        btnSurveillance.innerHTML = '<i class="ri-eye-line"></i> Mettre sous surveillance';
        btnSurveillance.classList.remove('btn-secondary');
        btnSurveillance.classList.add('btn-warning');
    }
}

function updatePaginationInfo() {
    const startEntry = state.identites.length > 0 ? (state.page - 1) * state.pageSize + 1 : 0;
    const endEntry = Math.min(state.page * state.pageSize, state.totalItems);
    document.getElementById('startEntry').textContent = startEntry;
    document.getElementById('endEntry').textContent = endEntry;
    document.getElementById('totalEntries').textContent = state.totalItems;
}

function renderPagination() {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';
    
    const prevBtn = document.createElement('button');
    prevBtn.className = 'page-btn';
    prevBtn.innerHTML = '<i class="ri-arrow-left-s-line"></i>';
    prevBtn.disabled = state.page === 1;
    prevBtn.onclick = () => changePage(state.page - 1);
    pagination.appendChild(prevBtn);
    
    const maxVisiblePages = 5;
    let startPage = Math.max(1, state.page - Math.floor(maxVisiblePages / 2));
    let endPage = Math.min(state.totalPages, startPage + maxVisiblePages - 1);
    if (endPage - startPage < maxVisiblePages - 1) startPage = Math.max(1, endPage - maxVisiblePages + 1);
    
    if (startPage > 1) {
        const firstBtn = document.createElement('button');
        firstBtn.className = 'page-btn';
        firstBtn.textContent = '1';
        firstBtn.onclick = () => changePage(1);
        pagination.appendChild(firstBtn);
        if (startPage > 2) {
            const dots = document.createElement('span');
            dots.className = 'pagination-dots';
            dots.textContent = '...';
            pagination.appendChild(dots);
        }
    }
    
    for (let i = startPage; i <= endPage; i++) {
        const pageBtn = document.createElement('button');
        pageBtn.className = `page-btn ${i === state.page ? 'active' : ''}`;
        pageBtn.textContent = i;
        pageBtn.onclick = () => changePage(i);
        pagination.appendChild(pageBtn);
    }
    
    if (endPage < state.totalPages) {
        if (endPage < state.totalPages - 1) {
            const dots = document.createElement('span');
            dots.className = 'pagination-dots';
            dots.textContent = '...';
            pagination.appendChild(dots);
        }
        const lastBtn = document.createElement('button');
        lastBtn.className = 'page-btn';
        lastBtn.textContent = state.totalPages;
        lastBtn.onclick = () => changePage(state.totalPages);
        pagination.appendChild(lastBtn);
    }
    
    const nextBtn = document.createElement('button');
    nextBtn.className = 'page-btn';
    nextBtn.innerHTML = '<i class="ri-arrow-right-s-line"></i>';
    nextBtn.disabled = state.page === state.totalPages || state.totalPages === 0;
    nextBtn.onclick = () => changePage(state.page + 1);
    pagination.appendChild(nextBtn);
}

// ==================== ACTIONS UTILISATEUR ====================

function changePage(page) {
    if (page < 1 || page > state.totalPages) return;
    state.page = page;
    renderTable();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function changePageSize(size) {
    state.pageSize = parseInt(size);
    state.page = 1;
    renderTable();
}

function applyFilters() {
    state.search = document.getElementById('searchInput').value;
    state.plateforme = document.getElementById('plateformeFilter').value;
    state.statut = document.getElementById('statutFilter').value;
    state.risque = document.getElementById('risqueFilter').value;
    const periode = document.getElementById('periodeFilter').value;
    const dates = calculatePeriodDates(periode);
    state.startDate = dates.startDate;
    state.endDate = dates.endDate;
    state.page = 1;
    loadIdentites();
}

function viewIdentite(id) {
    const modal = document.getElementById('identityModal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
    loadIdentiteDetail(id);
}

function closeModal() {
    const modal = document.getElementById('identityModal');
    modal.style.display = 'none';
    document.body.style.overflow = '';
    state.currentIdentity = null;
}

function editIdentite(id) {
    const identite = getIdentiteById(id);
    if (!identite) { showToast('error', 'Erreur', 'Identité non trouvée'); return; }
    openFormModal(identite);
}

function editCurrentIdentity() {
    if (state.currentIdentity) { closeModal(); openFormModal(state.currentIdentity); }
}

function toggleSurveillance() {
    if (!state.currentIdentity) return;
    const newStatut = state.currentIdentity.statut === 'surveillance' ? 'active' : 'surveillance';
    const action = newStatut === 'surveillance' ? 'mettre sous surveillance' : 'retirer de la surveillance';
    if (confirm(`Voulez-vous vraiment ${action} cette identité ?`)) {
        updateIdentiteStatut(state.currentIdentity.id, newStatut);
        state.currentIdentity.statut = newStatut;
        showToast('success', 'Succès', `Identité ${newStatut === 'surveillance' ? 'mise sous surveillance' : 'retirée de la surveillance'}`);
        renderIdentiteDetail(state.currentIdentity);
        loadIdentites();
    }
}

function toggleSurveillanceFromTable(id, currentStatut) {
    const newStatut = currentStatut === 'surveillance' ? 'active' : 'surveillance';
    const action = newStatut === 'surveillance' ? 'mettre sous surveillance' : 'retirer de la surveillance';
    if (confirm(`Voulez-vous vraiment ${action} cette identité ?`)) {
        updateIdentiteStatut(id, newStatut);
        showToast('success', 'Succès', `Identité ${newStatut === 'surveillance' ? 'mise sous surveillance' : 'retirée de la surveillance'}`);
        loadIdentites();
    }
}

function viewSujet(sujetId) {
    showToast('info', 'Navigation', `Redirection vers la fiche du sujet ${sujetId}`);
}

function addIncident(identiteId) {
    showToast('info', 'Fonctionnalité', 'Ouverture du formulaire de création d\'incident');
}

function openFormModal(identite = null) {
    const modal = document.getElementById('formModal');
    const title = document.getElementById('formModalTitle');
    
    if (identite) {
        title.textContent = 'Modifier l\'identité numérique';
        document.getElementById('formIdentityId').value = identite.id;
        document.getElementById('formPlateforme').value = identite.plateforme;
        document.getElementById('formPseudo').value = identite.pseudo;
        document.getElementById('formUrl').value = identite.url || '';
        document.getElementById('formIdentifiant').value = identite.identifiantPlateforme || '';
        document.getElementById('formNiveauRisque').value = identite.niveauRisque;
        document.getElementById('formStatut').value = identite.statut;
        document.getElementById('formObservations').value = identite.observations || '';
    } else {
        title.textContent = 'Nouvelle identité numérique';
        document.getElementById('identityForm').reset();
        document.getElementById('formIdentityId').value = '';
    }
    
    loadSujetsForSelect();
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeFormModal() {
    const modal = document.getElementById('formModal');
    modal.style.display = 'none';
    document.body.style.overflow = '';
}

function loadSujetsForSelect() {
    const select = document.getElementById('formSujetId');
    const sujets = getSujets();
    select.innerHTML = '<option value="">Sélectionner un sujet...</option>';
    sujets.forEach(sujet => {
        const option = document.createElement('option');
        option.value = sujet.id;
        option.textContent = `${sujet.nom} ${sujet.prenom} (${sujet.id}) - Cat. ${sujet.categorie}`;
        select.appendChild(option);
    });
}

function saveIdentity() {
    const form = document.getElementById('identityForm');
    if (!form.checkValidity()) { form.reportValidity(); return; }
    const id = document.getElementById('formIdentityId').value;
    const isEdit = !!id;
    showToast('success', 'Succès', isEdit ? 'Identité modifiée avec succès' : 'Identité créée avec succès');
    closeFormModal();
    loadIdentites();
}

function addIdentity() { openFormModal(); }

function exportData() {
    showToast('info', 'Export', 'Génération de l\'export en cours...');
    const headers = ['ID', 'Sujet', 'Plateforme', 'Pseudo', 'Risque', 'Statut', 'Date découverte'];
    const rows = state.identites.map(i => [i.id, `${i.sujet.nom} ${i.sujet.prenom}`, i.plateforme, i.pseudo, i.niveauRisque, i.statut, i.dateDecouverte]);
    const csv = [headers, ...rows].map(row => row.join(';')).join('\n');
    console.log('Export CSV:', csv);
}

function printIdentityDetail() { window.print(); }
function exportIdentityDetail() { if (!state.currentIdentity) return; showToast('info', 'Export', 'Export du détail en cours...'); }
function refreshData() { loadStats(); loadIdentites(); showToast('success', 'Actualisation', 'Données actualisées'); }

// ==================== NOTIFICATIONS TOAST ====================

function showToast(type, title, message) {
    const container = document.getElementById('toastContainer');
    if (!container) return;
    const icons = { success: 'ri-checkbox-circle-fill', error: 'ri-error-warning-fill', warning: 'ri-alert-fill', info: 'ri-information-fill' };
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.innerHTML = `
        <i class="toast-icon ${icons[type]}"></i>
        <div class="toast-content"><div class="toast-title">${escapeHtml(title)}</div><div class="toast-message">${escapeHtml(message)}</div></div>
        <button class="toast-close" onclick="this.parentElement.remove()"><i class="ri-close-line"></i></button>
    `;
    container.appendChild(toast);
    setTimeout(() => { toast.style.animation = 'toast-slide-out 0.3s ease forwards'; setTimeout(() => toast.remove(), 300); }, 5000);
}

// ==================== ÉVÉNEMENTS & INITIALISATION ====================

function setupEventListeners() {
    const searchInput = document.getElementById('searchInput');
    if (searchInput) searchInput.addEventListener('input', debounce(applyFilters, 500));
    
    ['plateformeFilter', 'statutFilter', 'risqueFilter', 'periodeFilter'].forEach(filterId => {
        const element = document.getElementById(filterId);
        if (element) element.addEventListener('change', applyFilters);
    });
    
    const pageSizeSelect = document.getElementById('pageSizeSelect');
    if (pageSizeSelect) pageSizeSelect.addEventListener('change', (e) => changePageSize(e.target.value));
    
    const addBtn = document.getElementById('addIdentityBtn');
    if (addBtn) addBtn.addEventListener('click', addIdentity);
    
    const exportBtn = document.getElementById('exportBtn');
    if (exportBtn) exportBtn.addEventListener('click', exportData);
    
    const refreshBtn = document.getElementById('refreshBtn');
    if (refreshBtn) refreshBtn.addEventListener('click', refreshData);
    
    const identityModal = document.getElementById('identityModal');
    if (identityModal) identityModal.addEventListener('click', (e) => { if (e.target === identityModal) closeModal(); });
    
    const formModal = document.getElementById('formModal');
    if (formModal) formModal.addEventListener('click', (e) => { if (e.target === formModal) closeFormModal(); });
    
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') { closeModal(); closeFormModal(); } });
}

document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Module Identités Numériques v2.1 - SIGMA');
    console.log('📊 Mode: Données locales (démonstration)');
    console.log(`📁 ${MOCK_DATA.identites.length} identités chargées`);
    setupEventListeners();
    loadStats();
    loadIdentites();
    console.log('✅ Module initialisé');
});

// Exposition des fonctions globales
window.viewIdentite = viewIdentite;
window.editIdentite = editIdentite;
window.closeModal = closeModal;
window.closeFormModal = closeFormModal;
window.toggleSurveillance = toggleSurveillance;
window.toggleSurveillanceFromTable = toggleSurveillanceFromTable;
window.viewSujet = viewSujet;
window.addIncident = addIncident;
window.saveIdentity = saveIdentity;
window.printIdentityDetail = printIdentityDetail;
window.exportIdentityDetail = exportIdentityDetail;
window.loadStats = loadStats;
window.loadIdentites = loadIdentites;
window.editCurrentIdentity = editCurrentIdentity;