/* ========================================
   SIGMA - Module Établissements - JavaScript
   Système de Surveillance Sécurisé
   Version optimisée - Données Tchad
   ======================================== */

// Configuration de l'API
const API_CONFIG = {
    baseURL: '/api',
    endpoints: {
        etablissements: '/etablissements',
        stats: '/etablissements/stats',
        logs: '/logs'
    },
    timeout: 10000
};

// Configuration de sécurité
const SECURITY_CONFIG = {
    userLevel: 'SECRET',
    userAccreditation: 3,
    maskSensitiveData: false,
    logActions: true
};

// État global de l'application
const state = {
    page: 1,
    pageSize: 10,
    search: '',
    type: '',
    categorie: '',
    statut: '',
    zone: '',
    personneId: null,
    periodeStart: '',
    periodeEnd: '',
    niveauDangerosite: '',
    sensibilite: '',
    categoriePersonne: '',
    sortBy: 'derniereActivite',
    sortOrder: 'desc',
    loading: false,
    data: [],
    stats: null,
    totalItems: 0,
    totalPages: 0
};

// Timeout pour recherche
let searchTimeout = null;

// ==================== DONNÉES TCHADIENNES ====================

const ETABLISSEMENTS_TCHAD = [
    // === RELIGIEUX - N'Djamena ===
    {
        id: 1,
        nom: 'Grande Mosquée Fayçal',
        type: 'religieux',
        statut: 'surveille',
        sensibilite: 'eleve',
        zone: 'ndjamena_centre',
        quartier: 'Farcha',
        adresse: 'Avenue Félix Éboué, Farcha',
        adresseComplete: 'Avenue Félix Éboué, Quartier Farcha, N\'Djamena Centre',
        coordonnees: { latitude: 12.1150, longitude: 15.0444 },
        nombrePersonnesFichees: 12,
        personnesFichees: [
            { id: 101, nom: 'Mahamat Ibrahim DEBY', categorie: 'B', derniereVisite: '2025-01-15' },
            { id: 102, nom: 'Hassan Abdoulaye OUMAR', categorie: 'A', derniereVisite: '2025-01-20' },
            { id: 103, nom: 'Idriss Moussa AHMAT', categorie: 'B', derniereVisite: '2025-01-18' }
        ],
        derniereActivite: '2025-01-25T14:30:00',
        dateCreation: '2023-06-15T10:00:00',
        observations: 'Principal lieu de prière du vendredi. Capacité 5000 fidèles. Imam sous surveillance.',
        contacts: { telephone: '+235 66 28 45 12', email: null },
        capacite: 5000,
        heuresOuverture: '05:00 - 22:00',
        responsable: 'Cheikh Hissein Brahim TAHA',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-20T09:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },
    {
        id: 2,
        nom: 'Mosquée Al-Nour Moursal',
        type: 'religieux',
        statut: 'surveille',
        sensibilite: 'critique',
        zone: 'ndjamena_centre',
        quartier: 'Moursal',
        adresse: 'Rue 4012, Moursal',
        adresseComplete: 'Rue 4012, Quartier Moursal, N\'Djamena Centre',
        coordonnees: { latitude: 12.1089, longitude: 15.0569 },
        nombrePersonnesFichees: 8,
        personnesFichees: [
            { id: 104, nom: 'Abdel Karim HAROUN', categorie: 'A', derniereVisite: '2025-01-22' },
            { id: 105, nom: 'Youssouf Ali NOUR', categorie: 'S', derniereVisite: '2025-01-21' }
        ],
        derniereActivite: '2025-01-24T19:45:00',
        dateCreation: '2022-03-10T08:00:00',
        observations: 'Activité suspecte signalée. Réunions nocturnes fréquentes.',
        contacts: { telephone: '+235 66 45 78 90', email: null },
        capacite: 800,
        heuresOuverture: '05:00 - 23:00',
        responsable: 'Imam Abakar Moussa SALEH',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-23T16:00:00',
        classificationSecurity: 'SECRET'
    },
    {
        id: 3,
        nom: 'Église Évangélique de N\'Djamena',
        type: 'religieux',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_sud',
        quartier: 'Chagoua',
        adresse: 'Avenue Mobutu, Chagoua',
        adresseComplete: 'Avenue Mobutu, Quartier Chagoua, N\'Djamena Sud',
        coordonnees: { latitude: 12.0956, longitude: 15.0478 },
        nombrePersonnesFichees: 2,
        personnesFichees: [
            { id: 106, nom: 'Jean-Pierre NGAKOUTOU', categorie: 'C', derniereVisite: '2025-01-10' }
        ],
        derniereActivite: '2025-01-26T11:00:00',
        dateCreation: '2020-08-20T10:00:00',
        observations: 'Communauté religieuse pacifique. Activités caritatives.',
        contacts: { telephone: '+235 66 89 12 34', email: 'eglise.evangelique@gmail.com' },
        capacite: 500,
        heuresOuverture: '08:00 - 20:00',
        responsable: 'Pasteur Samuel NADJITOLOUM',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-15T10:00:00',
        classificationSecurity: 'PUBLIC'
    },
    {
        id: 4,
        nom: 'Cathédrale Notre-Dame de N\'Djamena',
        type: 'religieux',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_centre',
        quartier: 'Ambassatna',
        adresse: 'Avenue Charles de Gaulle, Ambassatna',
        adresseComplete: 'Avenue Charles de Gaulle, Quartier Ambassatna, N\'Djamena Centre',
        coordonnees: { latitude: 12.1134, longitude: 15.0489 },
        nombrePersonnesFichees: 1,
        personnesFichees: [],
        derniereActivite: '2025-01-26T10:30:00',
        dateCreation: '2019-01-15T10:00:00',
        observations: 'Lieu de culte catholique principal. Aucune activité suspecte.',
        contacts: { telephone: '+235 22 51 45 67', email: 'cathedrale.ndjamena@catholique.td' },
        capacite: 1200,
        heuresOuverture: '06:00 - 19:00',
        responsable: 'Monseigneur Edmond DJITANGAR',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-10T09:00:00',
        classificationSecurity: 'PUBLIC'
    },

    // === ÉDUCATIF ===
    {
        id: 5,
        nom: 'Université de N\'Djamena',
        type: 'educatif',
        statut: 'surveille',
        sensibilite: 'moyen',
        zone: 'ndjamena_centre',
        quartier: 'Ardep Djoumal',
        adresse: 'Avenue du 11 Août, Ardep Djoumal',
        adresseComplete: 'Avenue du 11 Août, Quartier Ardep Djoumal, N\'Djamena Centre',
        coordonnees: { latitude: 12.1267, longitude: 15.0556 },
        nombrePersonnesFichees: 15,
        personnesFichees: [
            { id: 107, nom: 'Dr. Ahmat Mahamat HASSAN', categorie: 'B', derniereVisite: '2025-01-24' },
            { id: 108, nom: 'Moussa Idriss DEBY', categorie: 'C', derniereVisite: '2025-01-23' },
            { id: 109, nom: 'Fatima Zahra OUMAR', categorie: 'C', derniereVisite: '2025-01-22' }
        ],
        derniereActivite: '2025-01-26T08:00:00',
        dateCreation: '2021-09-01T08:00:00',
        observations: 'Principal établissement universitaire. Mouvements étudiants actifs.',
        contacts: { telephone: '+235 22 51 44 33', email: 'rectorat@univ-ndjamena.td' },
        capacite: 15000,
        heuresOuverture: '07:00 - 20:00',
        responsable: 'Pr. Mahamat Saleh YACOUB',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-22T14:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },
    {
        id: 6,
        nom: 'Lycée Félix Éboué',
        type: 'educatif',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_centre',
        quartier: 'Paris-Congo',
        adresse: 'Rue du Lycée, Paris-Congo',
        adresseComplete: 'Rue du Lycée, Quartier Paris-Congo, N\'Djamena Centre',
        coordonnees: { latitude: 12.1078, longitude: 15.0512 },
        nombrePersonnesFichees: 3,
        personnesFichees: [
            { id: 110, nom: 'Abdoulaye Brahim KHAMIS', categorie: 'C', derniereVisite: '2025-01-20' }
        ],
        derniereActivite: '2025-01-25T16:00:00',
        dateCreation: '2020-09-15T08:00:00',
        observations: 'Établissement secondaire public. Surveillance standard.',
        contacts: { telephone: '+235 22 51 23 45', email: 'lycee.eboue@education.td' },
        capacite: 2500,
        heuresOuverture: '07:00 - 17:00',
        responsable: 'M. Ngarta TOMBALBAYE',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-18T10:00:00',
        classificationSecurity: 'PUBLIC'
    },
    {
        id: 7,
        nom: 'École Coranique Al-Azhar',
        type: 'educatif',
        statut: 'surveille',
        sensibilite: 'eleve',
        zone: 'ndjamena_nord',
        quartier: 'Diguel',
        adresse: 'Rue 1025, Diguel',
        adresseComplete: 'Rue 1025, Quartier Diguel, N\'Djamena Nord',
        coordonnees: { latitude: 12.1345, longitude: 15.0678 },
        nombrePersonnesFichees: 6,
        personnesFichees: [
            { id: 111, nom: 'Cheikh Abakar ADOUM', categorie: 'A', derniereVisite: '2025-01-24' },
            { id: 112, nom: 'Mahamat Nour ADAM', categorie: 'B', derniereVisite: '2025-01-23' }
        ],
        derniereActivite: '2025-01-25T18:30:00',
        dateCreation: '2022-01-10T08:00:00',
        observations: 'École coranique avec internat. Surveillance renforcée sur le personnel.',
        contacts: { telephone: '+235 66 78 90 12', email: null },
        capacite: 300,
        heuresOuverture: '06:00 - 21:00',
        responsable: 'Oustad Hassan Ibrahim YOUSSOUF',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-24T15:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },

    // === COMMERCIAL ===
    {
        id: 8,
        nom: 'Marché Central de N\'Djamena',
        type: 'commercial',
        statut: 'surveille',
        sensibilite: 'moyen',
        zone: 'ndjamena_centre',
        quartier: 'Marché Central',
        adresse: 'Place du Marché Central',
        adresseComplete: 'Place du Marché Central, N\'Djamena Centre',
        coordonnees: { latitude: 12.1123, longitude: 15.0434 },
        nombrePersonnesFichees: 18,
        personnesFichees: [
            { id: 113, nom: 'Issa Mahamat SOULEYMAN', categorie: 'B', derniereVisite: '2025-01-26' },
            { id: 114, nom: 'Abakar Moussa DJIMET', categorie: 'C', derniereVisite: '2025-01-25' },
            { id: 115, nom: 'Hawa Brahim ADAM', categorie: 'C', derniereVisite: '2025-01-24' }
        ],
        derniereActivite: '2025-01-26T12:00:00',
        dateCreation: '2019-03-01T08:00:00',
        observations: 'Principal marché de la capitale. Point de transit important.',
        contacts: { telephone: '+235 66 12 34 56', email: null },
        capacite: 10000,
        heuresOuverture: '06:00 - 19:00',
        responsable: 'M. Adoum Younous AHMAT',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-25T11:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },
    {
        id: 9,
        nom: 'Marché à Mil de Dembé',
        type: 'commercial',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_sud',
        quartier: 'Dembé',
        adresse: 'Avenue du Marché, Dembé',
        adresseComplete: 'Avenue du Marché, Quartier Dembé, N\'Djamena Sud',
        coordonnees: { latitude: 12.0889, longitude: 15.0567 },
        nombrePersonnesFichees: 4,
        personnesFichees: [
            { id: 116, nom: 'Moussa Ahmat BRAHIM', categorie: 'C', derniereVisite: '2025-01-22' }
        ],
        derniereActivite: '2025-01-26T07:30:00',
        dateCreation: '2020-06-15T08:00:00',
        observations: 'Marché de céréales. Transactions en espèces importantes.',
        contacts: { telephone: '+235 66 34 56 78', email: null },
        capacite: 3000,
        heuresOuverture: '05:30 - 18:00',
        responsable: 'Mme Halima Idriss DEBY',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-20T10:00:00',
        classificationSecurity: 'PUBLIC'
    },
    {
        id: 10,
        nom: 'Supermarché Alimentation Générale',
        type: 'commercial',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_centre',
        quartier: 'Klemat',
        adresse: 'Avenue Charles de Gaulle, Klemat',
        adresseComplete: 'Avenue Charles de Gaulle, Quartier Klemat, N\'Djamena Centre',
        coordonnees: { latitude: 12.1156, longitude: 15.0423 },
        nombrePersonnesFichees: 2,
        personnesFichees: [],
        derniereActivite: '2025-01-26T14:00:00',
        dateCreation: '2021-11-20T08:00:00',
        observations: 'Commerce moderne. Clientèle expatriée et classe aisée.',
        contacts: { telephone: '+235 22 51 78 90', email: 'contact@alimentation-generale.td' },
        capacite: 200,
        heuresOuverture: '08:00 - 21:00',
        responsable: 'M. Youssouf Mahamat AHMAT',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-15T14:00:00',
        classificationSecurity: 'PUBLIC'
    },

    // === PROFESSIONNEL ===
    {
        id: 11,
        nom: 'Société des Hydrocarbures du Tchad (SHT)',
        type: 'professionnel',
        statut: 'surveille',
        sensibilite: 'critique',
        zone: 'ndjamena_centre',
        quartier: 'Ambassatna',
        adresse: 'Avenue du Général Keïta, Ambassatna',
        adresseComplete: 'Avenue du Général Keïta, Quartier Ambassatna, N\'Djamena Centre',
        coordonnees: { latitude: 12.1145, longitude: 15.0501 },
        nombrePersonnesFichees: 5,
        personnesFichees: [
            { id: 117, nom: 'Directeur Ahmat Fadoul MAKAYE', categorie: 'S', derniereVisite: '2025-01-25' },
            { id: 118, nom: 'Ingénieur Brahim Hassan NOUR', categorie: 'B', derniereVisite: '2025-01-24' }
        ],
        derniereActivite: '2025-01-26T09:00:00',
        dateCreation: '2020-01-15T08:00:00',
        observations: 'Entreprise stratégique nationale. Personnel sensible.',
        contacts: { telephone: '+235 22 52 34 56', email: 'direction@sht.td' },
        capacite: 500,
        heuresOuverture: '07:30 - 17:00',
        responsable: 'DG Tahir Hamid NGUILIN',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-24T11:00:00',
        classificationSecurity: 'SECRET'
    },
    {
        id: 12,
        nom: 'Banque des États de l\'Afrique Centrale (BEAC)',
        type: 'professionnel',
        statut: 'actif',
        sensibilite: 'eleve',
        zone: 'ndjamena_centre',
        quartier: 'Ambassatna',
        adresse: 'Avenue Charles de Gaulle, Ambassatna',
        adresseComplete: 'Avenue Charles de Gaulle, Quartier Ambassatna, N\'Djamena Centre',
        coordonnees: { latitude: 12.1167, longitude: 15.0478 },
        nombrePersonnesFichees: 3,
        personnesFichees: [
            { id: 119, nom: 'Cadre Mahamat Ali HASSAN', categorie: 'C', derniereVisite: '2025-01-23' }
        ],
        derniereActivite: '2025-01-26T08:30:00',
        dateCreation: '2019-06-01T08:00:00',
        observations: 'Institution financière régionale. Flux financiers importants.',
        contacts: { telephone: '+235 22 52 41 76', email: 'beac.tchad@beac.int' },
        capacite: 150,
        heuresOuverture: '07:30 - 15:30',
        responsable: 'Directeur National Abbas Mahamat TOLLI',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-22T09:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },
    {
        id: 13,
        nom: 'Société Cotontchad SN',
        type: 'professionnel',
        statut: 'actif',
        sensibilite: 'moyen',
        zone: 'moundou',
        quartier: 'Zone Industrielle',
        adresse: 'Route de Doba, Zone Industrielle',
        adresseComplete: 'Route de Doba, Zone Industrielle, Moundou',
        coordonnees: { latitude: 8.5667, longitude: 16.0833 },
        nombrePersonnesFichees: 4,
        personnesFichees: [
            { id: 120, nom: 'Ouvrier Djibrine Mahamat NOUR', categorie: 'C', derniereVisite: '2025-01-20' }
        ],
        derniereActivite: '2025-01-25T16:00:00',
        dateCreation: '2020-03-10T08:00:00',
        observations: 'Usine de transformation du coton. Syndicalisme actif.',
        contacts: { telephone: '+235 69 12 34 56', email: 'direction@cotontchad.td' },
        capacite: 800,
        heuresOuverture: '06:00 - 18:00',
        responsable: 'DG Pahimi Padacké ALBERT',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-18T14:00:00',
        classificationSecurity: 'PUBLIC'
    },

    // === ASSOCIATIF / ONG ===
    {
        id: 14,
        nom: 'Croix-Rouge Tchadienne',
        type: 'associatif',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_centre',
        quartier: 'Klemat',
        adresse: 'Rue 2034, Klemat',
        adresseComplete: 'Rue 2034, Quartier Klemat, N\'Djamena Centre',
        coordonnees: { latitude: 12.1145, longitude: 15.0412 },
        nombrePersonnesFichees: 1,
        personnesFichees: [],
        derniereActivite: '2025-01-26T10:00:00',
        dateCreation: '2019-01-01T08:00:00',
        observations: 'Organisation humanitaire reconnue. Activités caritatives.',
        contacts: { telephone: '+235 22 51 34 89', email: 'crt@croixrouge.td' },
        capacite: 100,
        heuresOuverture: '08:00 - 17:00',
        responsable: 'Dr. Fatimé Mahamat NOUR',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-10T10:00:00',
        classificationSecurity: 'PUBLIC'
    },
    {
        id: 15,
        nom: 'Association des Jeunes pour le Développement du Tchad',
        type: 'associatif',
        statut: 'surveille',
        sensibilite: 'moyen',
        zone: 'ndjamena_sud',
        quartier: 'Chagoua',
        adresse: 'Avenue du 1er Décembre, Chagoua',
        adresseComplete: 'Avenue du 1er Décembre, Quartier Chagoua, N\'Djamena Sud',
        coordonnees: { latitude: 12.0978, longitude: 15.0489 },
        nombrePersonnesFichees: 7,
        personnesFichees: [
            { id: 121, nom: 'Président Mahamat Nour ABAKAR', categorie: 'B', derniereVisite: '2025-01-24' },
            { id: 122, nom: 'Secrétaire Fatima Zahra ALI', categorie: 'C', derniereVisite: '2025-01-23' }
        ],
        derniereActivite: '2025-01-25T19:00:00',
        dateCreation: '2022-05-15T08:00:00',
        observations: 'Association de jeunesse. Activités politiques suspectées.',
        contacts: { telephone: '+235 66 89 01 23', email: 'ajdt@gmail.com' },
        capacite: 50,
        heuresOuverture: '09:00 - 18:00',
        responsable: 'M. Mahamat Nour ABAKAR',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-23T16:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },
    {
        id: 16,
        nom: 'ONG Médecins Sans Frontières Tchad',
        type: 'associatif',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_centre',
        quartier: 'Moursal',
        adresse: 'Rue 3056, Moursal',
        adresseComplete: 'Rue 3056, Quartier Moursal, N\'Djamena Centre',
        coordonnees: { latitude: 12.1078, longitude: 15.0545 },
        nombrePersonnesFichees: 0,
        personnesFichees: [],
        derniereActivite: '2025-01-26T09:30:00',
        dateCreation: '2018-09-01T08:00:00',
        observations: 'ONG médicale internationale. Personnel expatrié important.',
        contacts: { telephone: '+235 22 51 67 89', email: 'tchad@msf.org' },
        capacite: 80,
        heuresOuverture: '08:00 - 18:00',
        responsable: 'Dr. Sophie MARTIN',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-12T10:00:00',
        classificationSecurity: 'PUBLIC'
    },

    // === SANITAIRE ===
    {
        id: 17,
        nom: 'Hôpital Général de Référence Nationale',
        type: 'sanitaire',
        statut: 'actif',
        sensibilite: 'moyen',
        zone: 'ndjamena_centre',
        quartier: 'Farcha',
        adresse: 'Avenue Félix Éboué, Farcha',
        adresseComplete: 'Avenue Félix Éboué, Quartier Farcha, N\'Djamena Centre',
        coordonnees: { latitude: 12.1178, longitude: 15.0456 },
        nombrePersonnesFichees: 4,
        personnesFichees: [
            { id: 123, nom: 'Dr. Mahamat Saleh AHMAT', categorie: 'C', derniereVisite: '2025-01-25' }
        ],
        derniereActivite: '2025-01-26T00:00:00',
        dateCreation: '2019-01-01T00:00:00',
        observations: 'Principal hôpital public. Point sensible en cas de crise.',
        contacts: { telephone: '+235 22 51 45 67', email: 'hgrn@sante.td' },
        capacite: 2000,
        heuresOuverture: '24h/24',
        responsable: 'Dr. Aché Haroun MAHAMAT',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-20T14:00:00',
        classificationSecurity: 'PUBLIC'
    },
    {
        id: 18,
        nom: 'Clinique La Renaissance',
        type: 'sanitaire',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'ndjamena_centre',
        quartier: 'Ambassatna',
        adresse: 'Rue des Cliniques, Ambassatna',
        adresseComplete: 'Rue des Cliniques, Quartier Ambassatna, N\'Djamena Centre',
        coordonnees: { latitude: 12.1156, longitude: 15.0512 },
        nombrePersonnesFichees: 1,
        personnesFichees: [],
        derniereActivite: '2025-01-26T08:00:00',
        dateCreation: '2021-03-15T08:00:00',
        observations: 'Clinique privée haut de gamme. Clientèle VIP.',
        contacts: { telephone: '+235 22 51 89 01', email: 'contact@clinique-renaissance.td' },
        capacite: 50,
        heuresOuverture: '24h/24',
        responsable: 'Dr. Hassan Brahim MAHAMAT',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-15T11:00:00',
        classificationSecurity: 'PUBLIC'
    },

    // === RÉCRÉATIF ===
    {
        id: 19,
        nom: 'Stade Omnisports Idriss Mahamat Ouya',
        type: 'recreatif',
        statut: 'actif',
        sensibilite: 'moyen',
        zone: 'ndjamena_centre',
        quartier: 'Farcha',
        adresse: 'Avenue du Stade, Farcha',
        adresseComplete: 'Avenue du Stade, Quartier Farcha, N\'Djamena Centre',
        coordonnees: { latitude: 12.1234, longitude: 15.0423 },
        nombrePersonnesFichees: 3,
        personnesFichees: [
            { id: 124, nom: 'Supporter Moussa Ahmat DEBY', categorie: 'C', derniereVisite: '2025-01-21' }
        ],
        derniereActivite: '2025-01-21T20:00:00',
        dateCreation: '2019-06-01T08:00:00',
        observations: 'Stade national. Rassemblements importants lors des matchs.',
        contacts: { telephone: '+235 22 51 23 45', email: 'stade@sport.td' },
        capacite: 30000,
        heuresOuverture: '08:00 - 22:00',
        responsable: 'M. Idriss Hassan ADAM',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-20T10:00:00',
        classificationSecurity: 'PUBLIC'
    },
    {
        id: 20,
        nom: 'Centre Culturel Al Mouna',
        type: 'recreatif',
        statut: 'surveille',
        sensibilite: 'moyen',
        zone: 'ndjamena_centre',
        quartier: 'Moursal',
        adresse: 'Avenue de la Culture, Moursal',
        adresseComplete: 'Avenue de la Culture, Quartier Moursal, N\'Djamena Centre',
        coordonnees: { latitude: 12.1089, longitude: 15.0534 },
        nombrePersonnesFichees: 5,
        personnesFichees: [
            { id: 125, nom: 'Artiste Mahamat Nour ABDERAHIM', categorie: 'B', derniereVisite: '2025-01-24' },
            { id: 126, nom: 'Poète Hassan Ali MAHAMAT', categorie: 'C', derniereVisite: '2025-01-23' }
        ],
        derniereActivite: '2025-01-25T21:00:00',
        dateCreation: '2020-11-15T08:00:00',
        observations: 'Centre culturel actif. Événements artistiques et débats.',
        contacts: { telephone: '+235 66 78 12 34', email: 'almouna@culture.td' },
        capacite: 300,
        heuresOuverture: '09:00 - 22:00',
        responsable: 'M. Koulsy LAMKO',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-23T18:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },

    // === ZONES EXTÉRIEURES ===
    {
        id: 21,
        nom: 'Grande Mosquée de Moundou',
        type: 'religieux',
        statut: 'surveille',
        sensibilite: 'moyen',
        zone: 'moundou',
        quartier: 'Centre-ville',
        adresse: 'Avenue Principale, Centre-ville',
        adresseComplete: 'Avenue Principale, Centre-ville, Moundou',
        coordonnees: { latitude: 8.5689, longitude: 16.0845 },
        nombrePersonnesFichees: 6,
        personnesFichees: [
            { id: 127, nom: 'Imam Hassan Brahim OUMAR', categorie: 'B', derniereVisite: '2025-01-22' }
        ],
        derniereActivite: '2025-01-25T19:30:00',
        dateCreation: '2021-06-10T08:00:00',
        observations: 'Principale mosquée de la deuxième ville du pays.',
        contacts: { telephone: '+235 69 45 67 89', email: null },
        capacite: 2000,
        heuresOuverture: '05:00 - 22:00',
        responsable: 'Imam Hassan Brahim OUMAR',
        niveauSurveillance: 'moyenne',
        derniereVerification: '2025-01-21T10:00:00',
        classificationSecurity: 'CONFIDENTIEL'
    },
    {
        id: 22,
        nom: 'Marché de Sarh',
        type: 'commercial',
        statut: 'actif',
        sensibilite: 'faible',
        zone: 'sarh',
        quartier: 'Centre',
        adresse: 'Place du Marché, Centre',
        adresseComplete: 'Place du Marché, Centre, Sarh',
        coordonnees: { latitude: 9.1489, longitude: 18.3856 },
        nombrePersonnesFichees: 3,
        personnesFichees: [
            { id: 128, nom: 'Commerçant Moussa Idriss AHMAT', categorie: 'C', derniereVisite: '2025-01-18' }
        ],
        derniereActivite: '2025-01-26T07:00:00',
        dateCreation: '2020-02-20T08:00:00',
        observations: 'Marché régional important. Transit vers le Sud.',
        contacts: { telephone: '+235 68 12 34 56', email: null },
        capacite: 5000,
        heuresOuverture: '06:00 - 18:00',
        responsable: 'Chef de marché Djimet Ngaba MOUNDOU',
        niveauSurveillance: 'normale',
        derniereVerification: '2025-01-15T09:00:00',
        classificationSecurity: 'PUBLIC'
    },
    {
        id: 23,
        nom: 'Mosquée Centrale d\'Abéché',
        type: 'religieux',
        statut: 'surveille',
        sensibilite: 'eleve',
        zone: 'abeche',
        quartier: 'Vieux Quartier',
        adresse: 'Rue de la Mosquée, Vieux Quartier',
        adresseComplete: 'Rue de la Mosquée, Vieux Quartier, Abéché',
        coordonnees: { latitude: 13.8292, longitude: 20.8324 },
        nombrePersonnesFichees: 9,
        personnesFichees: [
            { id: 129, nom: 'Imam Abakar Moussa HAROUN', categorie: 'A', derniereVisite: '2025-01-24' },
            { id: 130, nom: 'Fidèle Hassan Deby ITNO', categorie: 'B', derniereVisite: '2025-01-23' }
        ],
        derniereActivite: '2025-01-25T20:00:00',
        dateCreation: '2021-01-15T08:00:00',
        observations: 'Zone frontalière sensible. Surveillance renforcée.',
        contacts: { telephone: '+235 62 34 56 78', email: null },
        capacite: 1500,
        heuresOuverture: '05:00 - 23:00',
        responsable: 'Imam Abakar Moussa HAROUN',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-24T16:00:00',
        classificationSecurity: 'SECRET'
    },
    {
        id: 24,
        nom: 'Camp de Réfugiés de Goz Beïda',
        type: 'associatif',
        statut: 'surveille',
        sensibilite: 'critique',
        zone: 'est_tchad',
        quartier: 'Goz Beïda',
        adresse: 'Zone humanitaire, Goz Beïda',
        adresseComplete: 'Zone humanitaire, Goz Beïda, Est du Tchad',
        coordonnees: { latitude: 12.2234, longitude: 21.4123 },
        nombrePersonnesFichees: 14,
        personnesFichees: [
            { id: 131, nom: 'Réfugié Mahamat Adam IDRISS', categorie: 'A', derniereVisite: '2025-01-25' },
            { id: 132, nom: 'Réfugié Hassan Oumar DEBY', categorie: 'A', derniereVisite: '2025-01-24' },
            { id: 133, nom: 'Chef communautaire Abakar NOUR', categorie: 'B', derniereVisite: '2025-01-23' }
        ],
        derniereActivite: '2025-01-26T06:00:00',
        dateCreation: '2019-08-15T08:00:00',
        observations: 'Camp de réfugiés soudanais. Zone à haut risque sécuritaire.',
        contacts: { telephone: '+235 62 89 01 23', email: 'gozbeida@unhcr.org' },
        capacite: 25000,
        heuresOuverture: '24h/24',
        responsable: 'Coordinateur HCR Jean-Marc DUPONT',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-25T08:00:00',
        classificationSecurity: 'SECRET'
    },
    {
        id: 25,
        nom: 'Raffinerie de Djarmaya',
        type: 'professionnel',
        statut: 'surveille',
        sensibilite: 'critique',
        zone: 'ndjamena_nord',
        quartier: 'Djarmaya',
        adresse: 'Zone Industrielle, Djarmaya',
        adresseComplete: 'Zone Industrielle, Djarmaya, Nord de N\'Djamena',
        coordonnees: { latitude: 12.2567, longitude: 15.0678 },
        nombrePersonnesFichees: 8,
        personnesFichees: [
            { id: 134, nom: 'Ingénieur Mahamat Nouri ADAM', categorie: 'S', derniereVisite: '2025-01-25' },
            { id: 135, nom: 'Technicien Hassan Ali BRAHIM', categorie: 'B', derniereVisite: '2025-01-24' }
        ],
        derniereActivite: '2025-01-26T00:00:00',
        dateCreation: '2020-06-01T08:00:00',
        observations: 'Infrastructure pétrolière stratégique. Sécurité maximale requise.',
        contacts: { telephone: '+235 22 52 78 90', email: 'raffinerie@cnpc.td' },
        capacite: 600,
        heuresOuverture: '24h/24',
        responsable: 'DG Zhang Wei LI',
        niveauSurveillance: 'haute',
        derniereVerification: '2025-01-25T22:00:00',
        classificationSecurity: 'SECRET'
    }
];

// Statistiques calculées
const MOCK_DATA = {
    stats: null,
    etablissements: ETABLISSEMENTS_TCHAD
};

// Calcul des statistiques
function calculateStats() {
    const data = MOCK_DATA.etablissements;
    
    return {
        total: data.length,
        sensibles: data.filter(e => e.sensibilite === 'critique' || e.sensibilite === 'eleve').length,
        actifs: data.filter(e => e.statut === 'actif').length,
        surveilles: data.filter(e => e.statut === 'surveille').length,
        categorieA: data.reduce((acc, e) => acc + e.personnesFichees.filter(p => p.categorie === 'A').length, 0),
        categorieB: data.reduce((acc, e) => acc + e.personnesFichees.filter(p => p.categorie === 'B').length, 0),
        categorieC: data.reduce((acc, e) => acc + e.personnesFichees.filter(p => p.categorie === 'C').length, 0),
        categorieS: data.reduce((acc, e) => acc + e.personnesFichees.filter(p => p.categorie === 'S').length, 0),
        recents7j: data.filter(e => {
            const diff = (Date.now() - new Date(e.derniereActivite).getTime()) / (1000 * 60 * 60 * 24);
            return diff <= 7;
        }).length,
        byType: {
            religieux: data.filter(e => e.type === 'religieux').length,
            educatif: data.filter(e => e.type === 'educatif').length,
            commercial: data.filter(e => e.type === 'commercial').length,
            professionnel: data.filter(e => e.type === 'professionnel').length,
            associatif: data.filter(e => e.type === 'associatif').length,
            sanitaire: data.filter(e => e.type === 'sanitaire').length,
            recreatif: data.filter(e => e.type === 'recreatif').length
        },
        byZone: {
            ndjamena_centre: data.filter(e => e.zone === 'ndjamena_centre').length,
            ndjamena_sud: data.filter(e => e.zone === 'ndjamena_sud').length,
            ndjamena_nord: data.filter(e => e.zone === 'ndjamena_nord').length,
            moundou: data.filter(e => e.zone === 'moundou').length,
            sarh: data.filter(e => e.zone === 'sarh').length,
            abeche: data.filter(e => e.zone === 'abeche').length,
            est_tchad: data.filter(e => e.zone === 'est_tchad').length
        }
    };
}

/* ========================================
   Fonctions utilitaires
   ======================================== */

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
    return date.toLocaleString('fr-FR', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
}

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

function verifyPermissions(requiredLevel) {
    return SECURITY_CONFIG.userAccreditation >= requiredLevel;
}

function maskData(data, isSensitive = false) {
    if (SECURITY_CONFIG.maskSensitiveData && isSensitive) {
        return '<span class="data-masked"><i class="ri-eye-off-line"></i> [Données masquées]</span>';
    }
    return data;
}

async function logAction(action, details) {
    if (!SECURITY_CONFIG.logActions) return;
    
    const logEntry = {
        timestamp: new Date().toISOString(),
        userId: 'ANSE-001',
        action: action,
        details: details,
        userLevel: SECURITY_CONFIG.userLevel,
        module: 'etablissements'
    };
    
    console.log('[SECURITY LOG]', logEntry);
}

const debouncedSearch = debounce(() => {
    applyFilters();
}, 300);

/* ========================================
   Fonctions API (optimisées)
   ======================================== */

async function fetchStats() {
    try {
        await logAction('FETCH_STATS', { module: 'etablissements' });
        
        // Calcul immédiat des statistiques
        const data = calculateStats();
        MOCK_DATA.stats = data;
        renderStats(data);
        
    } catch (error) {
        console.error('Erreur lors de la récupération des statistiques:', error);
        showStatsError();
    }
}

async function fetchEtablissements() {
    try {
        state.loading = true;
        showLoadingState();
        
        await logAction('FETCH_ETABLISSEMENTS', { 
            filters: {
                search: state.search,
                type: state.type,
                statut: state.statut,
                zone: state.zone,
                sensibilite: state.sensibilite
            }
        });
        
        // Chargement rapide (simulation réseau minimal)
        await new Promise(resolve => setTimeout(resolve, 200));
        
        let filteredData = [...MOCK_DATA.etablissements];
        
        // Appliquer les filtres
        if (state.search) {
            const searchLower = state.search.toLowerCase();
            filteredData = filteredData.filter(item =>
                item.nom.toLowerCase().includes(searchLower) ||
                item.adresse.toLowerCase().includes(searchLower) ||
                item.quartier.toLowerCase().includes(searchLower) ||
                item.observations.toLowerCase().includes(searchLower) ||
                (item.responsable && item.responsable.toLowerCase().includes(searchLower))
            );
        }
        
        if (state.type) {
            filteredData = filteredData.filter(item => item.type === state.type);
        }
        
        if (state.statut) {
            filteredData = filteredData.filter(item => item.statut === state.statut);
        }
        
        if (state.zone) {
            filteredData = filteredData.filter(item => item.zone === state.zone);
        }
        
        if (state.sensibilite) {
            filteredData = filteredData.filter(item => item.sensibilite === state.sensibilite);
        }
        
        if (state.categoriePersonne) {
            filteredData = filteredData.filter(item =>
                item.personnesFichees.some(p => p.categorie === state.categoriePersonne)
            );
        }
        
        if (state.periodeStart) {
            const startDate = new Date(state.periodeStart);
            filteredData = filteredData.filter(item => new Date(item.derniereActivite) >= startDate);
        }
        
        if (state.periodeEnd) {
            const endDate = new Date(state.periodeEnd);
            endDate.setHours(23, 59, 59);
            filteredData = filteredData.filter(item => new Date(item.derniereActivite) <= endDate);
        }
        
        // Tri
        filteredData.sort((a, b) => {
            let compareA = a[state.sortBy];
            let compareB = b[state.sortBy];
            
            if (state.sortBy === 'derniereActivite' || state.sortBy === 'dateCreation') {
                compareA = new Date(compareA);
                compareB = new Date(compareB);
            } else if (state.sortBy === 'personnesFichees') {
                compareA = a.nombrePersonnesFichees;
                compareB = b.nombrePersonnesFichees;
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
        console.error('Erreur lors de la récupération des établissements:', error);
        state.loading = false;
        showErrorState(error.message);
    }
}

async function fetchEtablissementById(id) {
    try {
        await logAction('FETCH_ETABLISSEMENT_DETAILS', { etablissementId: id });
        
        const etablissement = MOCK_DATA.etablissements.find(e => e.id === parseInt(id));
        
        if (!etablissement) {
            throw new Error('Établissement non trouvé');
        }
        
        return etablissement;
        
    } catch (error) {
        console.error('Erreur lors de la récupération de l\'établissement:', error);
        throw error;
    }
}

async function deleteEtablissement(id, reason) {
    try {
        if (!verifyPermissions(3)) {
            showAccessDenied();
            await logAction('DELETE_ETABLISSEMENT_DENIED', { etablissementId: id, reason: 'Insufficient permissions' });
            return false;
        }
        
        if (!reason || reason.trim().length < 10) {
            alert('Le motif de suppression doit contenir au moins 10 caractères');
            return false;
        }
        
        await logAction('DELETE_ETABLISSEMENT', { etablissementId: id, reason: reason });
        
        const index = MOCK_DATA.etablissements.findIndex(e => e.id === parseInt(id));
        if (index !== -1) {
            MOCK_DATA.etablissements.splice(index, 1);
        }
        
        await fetchEtablissements();
        await fetchStats();
        
        return true;
        
    } catch (error) {
        console.error('Erreur lors de la suppression de l\'établissement:', error);
        throw error;
    }
}

/* ========================================
   Fonctions de rendu
   ======================================== */

function renderStats(data) {
    const statsGrid = document.getElementById('statsGrid');
    if (!statsGrid) return;
    
    const statsCards = [
        {
            label: 'Total des établissements',
            value: data.total,
            icon: 'ri-building-line',
            color: 'primary'
        },
        {
            label: 'Établissements sensibles',
            value: data.sensibles,
            icon: 'ri-shield-cross-line',
            color: 'danger'
        },
        {
            label: 'Sous surveillance',
            value: data.surveilles,
            icon: 'ri-eye-line',
            color: 'warning'
        },
        {
            label: 'Personnes Cat. A',
            value: data.categorieA,
            icon: 'ri-alarm-warning-line',
            color: 'danger'
        },
        {
            label: 'Activité récente (7j)',
            value: data.recents7j,
            icon: 'ri-time-line',
            color: 'info'
        },
        {
            label: 'Zone N\'Djamena Centre',
            value: data.byZone.ndjamena_centre,
            icon: 'ri-map-pin-line',
            color: 'success'
        }
    ];
    
    statsGrid.innerHTML = statsCards.map(card => `
        <div class="stat-card ${card.color}">
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

function renderTable(data) {
    const tableBody = document.getElementById('tableBody');
    const dataTable = document.getElementById('dataTable');
    const loadingState = document.getElementById('loadingState');
    const errorState = document.getElementById('errorState');
    const emptyState = document.getElementById('emptyState');
    const tableFooter = document.getElementById('tableFooter');
    
    if (!tableBody || !dataTable) return;
    
    // Masquer les états
    if (loadingState) loadingState.style.display = 'none';
    if (errorState) errorState.style.display = 'none';
    if (emptyState) emptyState.style.display = 'none';
    
    // Afficher le tableau
    dataTable.style.display = 'table';
    if (tableFooter) tableFooter.style.display = 'flex';
    
    const statutLabels = {
        actif: { text: 'Actif', icon: 'ri-checkbox-circle-fill' },
        inactif: { text: 'Inactif', icon: 'ri-close-circle-fill' },
        a_verifier: { text: 'À vérifier', icon: 'ri-question-fill' },
        sensible: { text: 'Sensible', icon: 'ri-shield-cross-fill' },
        surveille: { text: 'Surveillé', icon: 'ri-eye-fill' }
    };
    
    const sensibiliteLabels = {
        faible: { text: 'Faible', icon: 'ri-shield-check-fill' },
        moyen: { text: 'Moyen', icon: 'ri-shield-line' },
        eleve: { text: 'Élevé', icon: 'ri-shield-star-fill' },
        critique: { text: 'Critique', icon: 'ri-alarm-warning-fill' }
    };
    
    const typeLabels = {
        religieux: { text: 'Religieux', icon: 'ri-book-2-line' },
        educatif: { text: 'Éducatif', icon: 'ri-graduation-cap-line' },
        commercial: { text: 'Commercial', icon: 'ri-store-line' },
        professionnel: { text: 'Professionnel', icon: 'ri-briefcase-line' },
        associatif: { text: 'Associatif', icon: 'ri-team-line' },
        sanitaire: { text: 'Sanitaire', icon: 'ri-hospital-line' },
        recreatif: { text: 'Récréatif', icon: 'ri-football-line' },
        autre: { text: 'Autre', icon: 'ri-more-line' }
    };
    
    tableBody.innerHTML = data.map(item => {
        const isClassified = item.classificationSecurity !== 'PUBLIC';
        const canViewSensitive = verifyPermissions(2);
        const daysAgo = Math.floor((Date.now() - new Date(item.derniereActivite).getTime()) / (1000 * 60 * 60 * 24));
        const recentActivity = daysAgo <= 7;
        
        const typeInfo = typeLabels[item.type] || typeLabels.autre;
        const statutInfo = statutLabels[item.statut] || statutLabels.actif;
        const sensInfo = sensibiliteLabels[item.sensibilite] || sensibiliteLabels.faible;
        
        return `
            <tr>
                <td>
                    <div style="max-width: 250px;">
                        <strong>${item.nom}</strong>
                        <div style="font-size: 12px; color: var(--text-secondary); margin-top: 4px;">
                            <i class="ri-map-pin-line"></i> ${item.quartier}
                        </div>
                    </div>
                </td>
                <td>
                    <span class="type-badge ${item.type}">
                        <i class="${typeInfo.icon}"></i>
                        ${typeInfo.text}
                    </span>
                </td>
                <td>
                    <div style="max-width: 200px;">
                        ${canViewSensitive || !isClassified ? item.adresse : maskData(item.adresse, true)}
                        <div style="font-size: 11px; color: var(--text-muted); margin-top: 2px;">
                            ${item.zone.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase())}
                        </div>
                    </div>
                </td>
                <td>
                    <span class="sensitivity-badge ${item.sensibilite}">
                        <i class="${sensInfo.icon}"></i>
                        ${sensInfo.text}
                    </span>
                </td>
                <td>
                    ${canViewSensitive ? `
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <strong style="font-size: 16px; color: var(--primary-color);">${item.nombrePersonnesFichees}</strong>
                            <div style="font-size: 11px; color: var(--text-secondary);">
                                ${item.personnesFichees.slice(0, 3).map(p => `
                                    <span class="category-badge ${p.categorie}">${p.categorie}</span>
                                `).join('')}
                                ${item.personnesFichees.length > 3 ? `<span style="color: var(--text-muted);">+${item.personnesFichees.length - 3}</span>` : ''}
                            </div>
                        </div>
                    ` : maskData('X personnes', true)}
                </td>
                <td>
                    <div>
                        ${formatDate(item.derniereActivite)}
                        ${recentActivity ? `<div style="font-size: 11px; color: var(--danger-color); margin-top: 2px;"><i class="ri-time-line"></i> Il y a ${daysAgo}j</div>` : ''}
                    </div>
                </td>
                <td>
                    <span class="status-badge ${item.statut}">
                        <i class="${statutInfo.icon}"></i>
                        ${statutInfo.text}
                    </span>
                </td>
                <td>
                    <div class="action-buttons">
                        <button class="action-btn view" onclick="viewEtablissement(${item.id})" title="Voir les détails">
                            <i class="ri-eye-line"></i>
                        </button>
                        <button class="action-btn edit" onclick="editEtablissement(${item.id})" title="Modifier" ${!verifyPermissions(2) ? 'disabled' : ''}>
                            <i class="ri-edit-line"></i>
                        </button>
                        <button class="action-btn delete" onclick="confirmDelete(${item.id})" title="Supprimer" ${!verifyPermissions(3) ? 'disabled' : ''}>
                            <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `;
    }).join('');
}

function renderPagination() {
    const pagination = document.getElementById('pagination');
    const startEntry = document.getElementById('startEntry');
    const endEntry = document.getElementById('endEntry');
    const totalEntries = document.getElementById('totalEntries');
    
    if (!pagination) return;
    
    const start = (state.page - 1) * state.pageSize + 1;
    const end = Math.min(state.page * state.pageSize, state.totalItems);
    
    if (startEntry) startEntry.textContent = state.totalItems > 0 ? start : 0;
    if (endEntry) endEntry.textContent = end;
    if (totalEntries) totalEntries.textContent = state.totalItems;
    
    const maxVisiblePages = 5;
    let startPage = Math.max(1, state.page - Math.floor(maxVisiblePages / 2));
    let endPage = Math.min(state.totalPages, startPage + maxVisiblePages - 1);
    
    if (endPage - startPage < maxVisiblePages - 1) {
        startPage = Math.max(1, endPage - maxVisiblePages + 1);
    }
    
    let paginationHTML = `
        <button class="page-btn" ${state.page === 1 ? 'disabled' : ''} onclick="changePage(${state.page - 1})">
            <i class="ri-arrow-left-s-line"></i>
        </button>
    `;
    
    if (startPage > 1) {
        paginationHTML += `<button class="page-btn" onclick="changePage(1)">1</button>`;
        if (startPage > 2) {
            paginationHTML += `<button class="page-btn" disabled>...</button>`;
        }
    }
    
    for (let i = startPage; i <= endPage; i++) {
        paginationHTML += `
            <button class="page-btn ${i === state.page ? 'active' : ''}" onclick="changePage(${i})">
                ${i}
            </button>
        `;
    }
    
    if (endPage < state.totalPages) {
        if (endPage < state.totalPages - 1) {
            paginationHTML += `<button class="page-btn" disabled>...</button>`;
        }
        paginationHTML += `<button class="page-btn" onclick="changePage(${state.totalPages})">${state.totalPages}</button>`;
    }
    
    paginationHTML += `
        <button class="page-btn" ${state.page === state.totalPages || state.totalPages === 0 ? 'disabled' : ''} onclick="changePage(${state.page + 1})">
            <i class="ri-arrow-right-s-line"></i>
        </button>
    `;
    
    pagination.innerHTML = paginationHTML;
}

/* ========================================
   Fonctions d'état
   ======================================== */

function showLoadingState() {
    const loadingState = document.getElementById('loadingState');
    const errorState = document.getElementById('errorState');
    const emptyState = document.getElementById('emptyState');
    const dataTable = document.getElementById('dataTable');
    const tableFooter = document.getElementById('tableFooter');
    
    if (loadingState) loadingState.style.display = 'flex';
    if (errorState) errorState.style.display = 'none';
    if (emptyState) emptyState.style.display = 'none';
    if (dataTable) dataTable.style.display = 'none';
    if (tableFooter) tableFooter.style.display = 'none';
}

function showErrorState(message) {
    const loadingState = document.getElementById('loadingState');
    const errorState = document.getElementById('errorState');
    const emptyState = document.getElementById('emptyState');
    const dataTable = document.getElementById('dataTable');
    const tableFooter = document.getElementById('tableFooter');
    const errorMessage = document.getElementById('errorMessage');
    
    if (loadingState) loadingState.style.display = 'none';
    if (errorState) errorState.style.display = 'flex';
    if (emptyState) emptyState.style.display = 'none';
    if (dataTable) dataTable.style.display = 'none';
    if (tableFooter) tableFooter.style.display = 'none';
    if (errorMessage) errorMessage.textContent = message || 'Une erreur est survenue lors du chargement des données.';
}

function showEmptyState() {
    const loadingState = document.getElementById('loadingState');
    const errorState = document.getElementById('errorState');
    const emptyState = document.getElementById('emptyState');
    const dataTable = document.getElementById('dataTable');
    const tableFooter = document.getElementById('tableFooter');
    
    if (loadingState) loadingState.style.display = 'none';
    if (errorState) errorState.style.display = 'none';
    if (emptyState) emptyState.style.display = 'flex';
    if (dataTable) dataTable.style.display = 'none';
    if (tableFooter) tableFooter.style.display = 'none';
}

function showStatsError() {
    const statsGrid = document.getElementById('statsGrid');
    if (statsGrid) {
        statsGrid.innerHTML = `
            <div class="stats-loading">
                <i class="ri-error-warning-line" style="font-size: 48px; color: var(--danger-color);"></i>
                <p style="color: var(--text-secondary);">Erreur lors du chargement des statistiques</p>
            </div>
        `;
    }
}

function showAccessDenied() {
    const modal = document.getElementById('accessDeniedModal');
    if (modal) modal.style.display = 'flex';
}

/* ========================================
   Gestionnaires d'événements
   ======================================== */

function changePage(page) {
    if (page < 1 || page > state.totalPages || page === state.page) return;
    state.page = page;
    fetchEtablissements();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function changePageSize() {
    const pageSizeSelect = document.getElementById('pageSizeSelect');
    if (pageSizeSelect) {
        state.pageSize = parseInt(pageSizeSelect.value);
        state.page = 1;
        fetchEtablissements();
    }
}

function sortTable(column) {
    if (state.sortBy === column) {
        state.sortOrder = state.sortOrder === 'asc' ? 'desc' : 'asc';
    } else {
        state.sortBy = column;
        state.sortOrder = 'asc';
    }
    fetchEtablissements();
}

function applyFilters() {
    state.page = 1;
    
    const searchInput = document.getElementById('searchInput');
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const sensibiliteFilter = document.getElementById('sensibiliteFilter');
    const zoneFilter = document.getElementById('zoneFilter');
    const categoriePersonneFilter = document.getElementById('categoriePersonneFilter');
    const startDateFilter = document.getElementById('startDateFilter');
    const endDateFilter = document.getElementById('endDateFilter');
    
    state.search = searchInput ? searchInput.value.trim() : '';
    state.type = typeFilter ? typeFilter.value : '';
    state.statut = statusFilter ? statusFilter.value : '';
    state.sensibilite = sensibiliteFilter ? sensibiliteFilter.value : '';
    state.zone = zoneFilter ? zoneFilter.value : '';
    state.categoriePersonne = categoriePersonneFilter ? categoriePersonneFilter.value : '';
    state.periodeStart = startDateFilter ? startDateFilter.value : '';
    state.periodeEnd = endDateFilter ? endDateFilter.value : '';
    
    fetchEtablissements();
}

function resetFilters() {
    const searchInput = document.getElementById('searchInput');
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const sensibiliteFilter = document.getElementById('sensibiliteFilter');
    const zoneFilter = document.getElementById('zoneFilter');
    const categoriePersonneFilter = document.getElementById('categoriePersonneFilter');
    const startDateFilter = document.getElementById('startDateFilter');
    const endDateFilter = document.getElementById('endDateFilter');
    
    if (searchInput) searchInput.value = '';
    if (typeFilter) typeFilter.value = '';
    if (statusFilter) statusFilter.value = '';
    if (sensibiliteFilter) sensibiliteFilter.value = '';
    if (zoneFilter) zoneFilter.value = '';
    if (categoriePersonneFilter) categoriePersonneFilter.value = '';
    if (startDateFilter) startDateFilter.value = '';
    if (endDateFilter) endDateFilter.value = '';
    
    state.search = '';
    state.type = '';
    state.statut = '';
    state.sensibilite = '';
    state.zone = '';
    state.categoriePersonne = '';
    state.periodeStart = '';
    state.periodeEnd = '';
    state.page = 1;
    
    fetchEtablissements();
}

/* ========================================
   Actions sur les établissements
   ======================================== */

async function viewEtablissement(id) {
    const modal = document.getElementById('etablissementModal');
    const modalBody = document.getElementById('modalBody');
    const modalTitle = document.getElementById('modalTitle');
    const modalEditBtn = document.getElementById('modalEditBtn');
    
    if (!modal || !modalBody) return;
    
    modal.style.display = 'flex';
    modalBody.innerHTML = '<div class="spinner-center"><div class="spinner"></div></div>';
    
    try {
        const etablissement = await fetchEtablissementById(id);
        
        if (modalTitle) modalTitle.textContent = etablissement.nom;
        
        const typeLabels = {
            religieux: 'Religieux',
            educatif: 'Éducatif',
            commercial: 'Commercial',
            professionnel: 'Professionnel',
            associatif: 'Associatif',
            sanitaire: 'Sanitaire',
            recreatif: 'Récréatif'
        };
        
        const sensibiliteLabels = {
            faible: 'Faible',
            moyen: 'Moyen',
            eleve: 'Élevé',
            critique: 'Critique'
        };
        
        const statutLabels = {
            actif: 'Actif',
            inactif: 'Inactif',
            a_verifier: 'À vérifier',
            sensible: 'Sensible',
            surveille: 'Sous surveillance'
        };
        
        modalBody.innerHTML = `
            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">ID</div>
                    <div class="detail-value">#${etablissement.id}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Type</div>
                    <div class="detail-value">${typeLabels[etablissement.type] || etablissement.type}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Sensibilité</div>
                    <div class="detail-value">
                        <span class="sensitivity-badge ${etablissement.sensibilite}">${sensibiliteLabels[etablissement.sensibilite]}</span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Statut</div>
                    <div class="detail-value">
                        <span class="status-badge ${etablissement.statut}">${statutLabels[etablissement.statut]}</span>
                    </div>
                </div>
            </div>
            
            <div class="detail-section">
                <div class="detail-section-title">
                    <i class="ri-map-pin-line"></i>
                    Localisation
                </div>
                <div class="detail-grid">
                    <div class="detail-item">
                        <div class="detail-label">Adresse</div>
                        <div class="detail-value">${etablissement.adresseComplete}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Zone</div>
                        <div class="detail-value">${etablissement.zone.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase())}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Coordonnées GPS</div>
                        <div class="detail-value">${etablissement.coordonnees.latitude.toFixed(4)}, ${etablissement.coordonnees.longitude.toFixed(4)}</div>
                    </div>
                </div>
            </div>
            
            <div class="detail-section">
                <div class="detail-section-title">
                    <i class="ri-user-line"></i>
                    Personnes fichées (${etablissement.nombrePersonnesFichees})
                </div>
                <div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: 12px;">
                    ${etablissement.personnesFichees.map(p => `
                        <div style="background: var(--bg-secondary); padding: 8px 12px; border-radius: 8px; display: flex; align-items: center; gap: 8px;">
                            <span class="category-badge ${p.categorie}">${p.categorie}</span>
                            <span>${p.nom}</span>
                            <small style="color: var(--text-muted);">${formatDate(p.derniereVisite)}</small>
                        </div>
                    `).join('')}
                </div>
            </div>
            
            <div class="detail-section">
                <div class="detail-section-title">
                    <i class="ri-information-line"></i>
                    Informations complémentaires
                </div>
                <div class="detail-grid">
                    <div class="detail-item">
                        <div class="detail-label">Responsable</div>
                        <div class="detail-value">${etablissement.responsable || 'Non renseigné'}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Capacité</div>
                        <div class="detail-value">${etablissement.capacite.toLocaleString('fr-FR')} personnes</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Horaires</div>
                        <div class="detail-value">${etablissement.heuresOuverture}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Téléphone</div>
                        <div class="detail-value">${etablissement.contacts.telephone || 'Non renseigné'}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Dernière activité</div>
                        <div class="detail-value">${formatDateTime(etablissement.derniereActivite)}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Dernière vérification</div>
                        <div class="detail-value">${formatDateTime(etablissement.derniereVerification)}</div>
                    </div>
                </div>
            </div>
            
            <div class="detail-section">
                <div class="detail-section-title">
                    <i class="ri-file-text-line"></i>
                    Observations
                </div>
                <p style="line-height: 1.8; color: var(--text-primary); margin-top: 12px;">${etablissement.observations}</p>
            </div>
        `;
        
        if (modalEditBtn) {
            modalEditBtn.onclick = () => editEtablissement(id);
            modalEditBtn.disabled = !verifyPermissions(2);
        }
        
    } catch (error) {
        modalBody.innerHTML = `
            <div class="alert alert-danger">
                <i class="ri-error-warning-line"></i>
                <div>
                    <strong>Erreur</strong>
                    <p>Impossible de charger les détails de l'établissement.</p>
                </div>
            </div>
        `;
    }
}

function editEtablissement(id) {
    if (!verifyPermissions(2)) {
        showAccessDenied();
        return;
    }
    
    logAction('EDIT_ETABLISSEMENT_ATTEMPT', { etablissementId: id });
    alert(`Fonctionnalité d'édition de l'établissement #${id}\nÀ implémenter avec un formulaire modal.`);
}

function confirmDelete(id) {
    if (!verifyPermissions(3)) {
        showAccessDenied();
        return;
    }
    
    const modal = document.getElementById('deleteModal');
    if (modal) {
        modal.style.display = 'flex';
        
        const confirmBtn = document.getElementById('deleteConfirmBtn');
        if (confirmBtn) {
            const newConfirmBtn = confirmBtn.cloneNode(true);
            confirmBtn.parentNode.replaceChild(newConfirmBtn, confirmBtn);
            
            newConfirmBtn.addEventListener('click', () => {
                handleDelete(id);
            });
        }
    }
}

async function handleDelete(id) {
    const confirmBtn = document.getElementById('deleteConfirmBtn');
    const reasonTextarea = document.getElementById('deleteReasonTextarea');
    
    if (!confirmBtn || !reasonTextarea) return;
    
    const originalHTML = confirmBtn.innerHTML;
    const reason = reasonTextarea.value.trim();
    
    try {
        confirmBtn.disabled = true;
        confirmBtn.innerHTML = '<div class="spinner" style="width: 20px; height: 20px; border-width: 2px;"></div>';
        
        const success = await deleteEtablissement(id, reason);
        
        if (success) {
            closeModal('deleteModal');
            reasonTextarea.value = '';
            alert('Établissement supprimé avec succès. Action journalisée.');
        }
        
    } catch (error) {
        alert('Erreur lors de la suppression de l\'établissement');
    } finally {
        confirmBtn.disabled = false;
        confirmBtn.innerHTML = originalHTML;
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) modal.style.display = 'none';
}

function exportData() {
    if (!verifyPermissions(2)) {
        showAccessDenied();
        return;
    }
    
    logAction('EXPORT_DATA', { filters: state });
    alert('Fonctionnalité d\'export des données\nÀ implémenter (CSV, Excel, PDF sécurisé).');
}

function refreshStats() {
    const refreshBtn = document.getElementById('refreshStatsBtn');
    if (refreshBtn) {
        refreshBtn.style.pointerEvents = 'none';
        refreshBtn.style.opacity = '0.5';
        
        fetchStats().then(() => {
            setTimeout(() => {
                refreshBtn.style.pointerEvents = 'auto';
                refreshBtn.style.opacity = '1';
            }, 500);
        });
    }
}

/* ========================================
   Configuration des événements
   ======================================== */

function setupEventListeners() {
    // Recherche
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('input', debouncedSearch);
    }
    
    const headerSearch = document.getElementById('headerSearch');
    if (headerSearch) {
        headerSearch.addEventListener('input', (e) => {
            if (searchInput) searchInput.value = e.target.value;
            debouncedSearch();
        });
    }
    
    // Filtres
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const sensibiliteFilter = document.getElementById('sensibiliteFilter');
    const zoneFilter = document.getElementById('zoneFilter');
    const categoriePersonneFilter = document.getElementById('categoriePersonneFilter');
    const startDateFilter = document.getElementById('startDateFilter');
    const endDateFilter = document.getElementById('endDateFilter');
    
    if (typeFilter) typeFilter.addEventListener('change', applyFilters);
    if (statusFilter) statusFilter.addEventListener('change', applyFilters);
    if (sensibiliteFilter) sensibiliteFilter.addEventListener('change', applyFilters);
    if (zoneFilter) zoneFilter.addEventListener('change', applyFilters);
    if (categoriePersonneFilter) categoriePersonneFilter.addEventListener('change', applyFilters);
    if (startDateFilter) startDateFilter.addEventListener('change', applyFilters);
    if (endDateFilter) endDateFilter.addEventListener('change', applyFilters);
    
    // Boutons filtres
    const applyFiltersBtn = document.getElementById('applyFiltersBtn');
    const resetFiltersBtn = document.getElementById('resetFiltersBtn');
    
    if (applyFiltersBtn) applyFiltersBtn.addEventListener('click', applyFilters);
    if (resetFiltersBtn) resetFiltersBtn.addEventListener('click', resetFilters);
    
    // Pagination
    const pageSizeSelect = document.getElementById('pageSizeSelect');
    if (pageSizeSelect) pageSizeSelect.addEventListener('change', changePageSize);
    
    // Actions
    const exportBtn = document.getElementById('exportBtn');
    const addEtablissementBtn = document.getElementById('addEtablissementBtn');
    const refreshStatsBtn = document.getElementById('refreshStatsBtn');
    const retryBtn = document.getElementById('retryBtn');
    
    if (exportBtn) exportBtn.addEventListener('click', exportData);
    if (addEtablissementBtn) {
        addEtablissementBtn.addEventListener('click', () => {
            if (!verifyPermissions(2)) {
                showAccessDenied();
                return;
            }
            alert('Fonctionnalité d\'ajout d\'établissement\nÀ implémenter avec un formulaire modal sécurisé.');
        });
    }
    if (refreshStatsBtn) refreshStatsBtn.addEventListener('click', refreshStats);
    if (retryBtn) retryBtn.addEventListener('click', () => fetchEtablissements());
    
    // Modals
    const modalClose = document.getElementById('modalClose');
    const modalOverlay = document.getElementById('modalOverlay');
    const modalCancelBtn = document.getElementById('modalCancelBtn');
    
    if (modalClose) modalClose.addEventListener('click', () => closeModal('etablissementModal'));
    if (modalOverlay) modalOverlay.addEventListener('click', () => closeModal('etablissementModal'));
    if (modalCancelBtn) modalCancelBtn.addEventListener('click', () => closeModal('etablissementModal'));
    
    // Modal suppression
    const deleteModalClose = document.getElementById('deleteModalClose');
    const deleteModalOverlay = document.getElementById('deleteModalOverlay');
    const deleteCancelBtn = document.getElementById('deleteCancelBtn');
    
    if (deleteModalClose) deleteModalClose.addEventListener('click', () => closeModal('deleteModal'));
    if (deleteModalOverlay) deleteModalOverlay.addEventListener('click', () => closeModal('deleteModal'));
    if (deleteCancelBtn) deleteCancelBtn.addEventListener('click', () => closeModal('deleteModal'));
    
    // Modal accès refusé
    const accessDeniedClose = document.getElementById('accessDeniedClose');
    const accessDeniedOverlay = document.getElementById('accessDeniedOverlay');
    const accessDeniedOkBtn = document.getElementById('accessDeniedOkBtn');
    
    if (accessDeniedClose) accessDeniedClose.addEventListener('click', () => closeModal('accessDeniedModal'));
    if (accessDeniedOverlay) accessDeniedOverlay.addEventListener('click', () => closeModal('accessDeniedModal'));
    if (accessDeniedOkBtn) accessDeniedOkBtn.addEventListener('click', () => closeModal('accessDeniedModal'));
    
    // Sidebar toggle
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            sidebar.classList.toggle('active');
        });
        
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
    }
}

/* ========================================
   Initialisation
   ======================================== */

function initializeSecurity() {
    const accreditationLevel = document.getElementById('accreditationLevel');
    if (accreditationLevel) {
        accreditationLevel.textContent = SECURITY_CONFIG.userLevel;
    }
    
    const securityAlert = document.getElementById('securityAlert');
    if (securityAlert && SECURITY_CONFIG.maskSensitiveData) {
        securityAlert.style.display = 'flex';
    }
    
    logAction('MODULE_ACCESS', { 
        module: 'etablissements',
        userLevel: SECURITY_CONFIG.userLevel,
        accreditation: SECURITY_CONFIG.userAccreditation
    });
}

// Initialisation au chargement du DOM
document.addEventListener('DOMContentLoaded', () => {
    console.log('🏢 SIGMA - Module Établissements initialisé');
    console.log('📍 Contexte: République du Tchad');
    console.log('🔒 Niveau de sécurité:', SECURITY_CONFIG.userLevel);
    console.log('👤 Accréditation:', SECURITY_CONFIG.userAccreditation);
    
    // Initialisation sécurité
    initializeSecurity();
    
    // Configuration des événements
    setupEventListeners();
    
    // Chargement des données (rapide et synchrone)
    fetchStats();
    fetchEtablissements();
    
    console.log('✅ Module prêt - ' + MOCK_DATA.etablissements.length + ' établissements chargés');
});

// Exposer les fonctions globales
window.changePage = changePage;
window.sortTable = sortTable;
window.viewEtablissement = viewEtablissement;
window.editEtablissement = editEtablissement;
window.confirmDelete = confirmDelete;