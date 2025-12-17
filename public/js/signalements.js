/**
 * SIGMA - Module Signalements & Incidents
 * JavaScript Controller
 * Version 2.0
 */

// ===================================
// MOCK DATA
// ===================================

const MOCK_DATA = {
    // Signalements Mock Data
    signalements: [
        {
            id: 1,
            reference: "SIG-2025-0001",
            type: "activite_suspecte",
            description: "Mouvements inhabituels observés près de la frontière nord, convoi de véhicules non identifiés repéré à 3h du matin",
            source: "humint",
            sourceDetail: "Informateur terrain #TC-127",
            region: "lac",
            location: "Bol, secteur nord-est",
            priority: "haute",
            status: "en_cours",
            assignee: "agent_001",
            dateCreated: "2025-06-14T08:30:00",
            dateUpdated: "2025-06-14T14:22:00",
            linkedSubject: { id: 12, name: "Ibrahim MAHAMAT" },
            linkedIncident: null,
            attachments: ["rapport_terrain.pdf", "photos_surveillance.zip"],
            notes: "Coordonner avec la gendarmerie locale pour surveillance renforcée"
        },
        {
            id: 2,
            reference: "SIG-2025-0002",
            type: "propagande",
            description: "Diffusion massive de messages radicaux sur les réseaux sociaux, compte Facebook ciblant la jeunesse de N'Djamena",
            source: "osint",
            sourceDetail: "Cellule veille numérique",
            region: "ndjamena",
            location: "Zone urbaine - quartiers sud",
            priority: "moyenne",
            status: "verifie",
            assignee: "agent_003",
            dateCreated: "2025-06-13T16:45:00",
            dateUpdated: "2025-06-14T09:10:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["captures_ecran.pdf"],
            notes: "Compte signalé aux autorités Facebook"
        },
        {
            id: 3,
            reference: "SIG-2025-0003",
            type: "menace",
            description: "Menaces directes reçues contre un responsable gouvernemental, messages interceptés évoquant une action imminente",
            source: "sigint",
            sourceDetail: "Interception comm. #8847",
            region: "ndjamena",
            location: "Secteur administratif central",
            priority: "critique",
            status: "assigne",
            assignee: "agent_002",
            dateCreated: "2025-06-14T06:15:00",
            dateUpdated: "2025-06-14T12:00:00",
            linkedSubject: { id: 5, name: "Moussa DJIBRINE" },
            linkedIncident: 2,
            attachments: ["transcription_audio.pdf", "analyse_menace.docx"],
            notes: "Protection rapprochée mise en place - niveau alerte orange"
        },
        {
            id: 4,
            reference: "SIG-2025-0004",
            type: "financement",
            description: "Transactions financières suspectes détectées, transferts importants vers des comptes à l'étranger depuis une ONG locale",
            source: "partenaire",
            sourceDetail: "CENTIF - Cellule financière",
            region: "ndjamena",
            location: "Quartier des affaires",
            priority: "haute",
            status: "en_cours",
            assignee: "agent_004",
            dateCreated: "2025-06-12T11:20:00",
            dateUpdated: "2025-06-14T10:45:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["releve_transactions.xlsx", "rapport_centif.pdf"],
            notes: "Enquête conjointe avec services financiers en cours"
        },
        {
            id: 5,
            reference: "SIG-2025-0005",
            type: "radicalisation",
            description: "Signalement d'activités de recrutement dans une école coranique, témoignages de parents inquiets",
            source: "citoyen",
            sourceDetail: "Appel ligne verte #4521",
            region: "ouaddai",
            location: "Abéché, quartier Ridina",
            priority: "moyenne",
            status: "nouveau",
            assignee: null,
            dateCreated: "2025-06-14T09:00:00",
            dateUpdated: "2025-06-14T09:00:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: [],
            notes: ""
        },
        {
            id: 6,
            reference: "SIG-2025-0006",
            type: "cyberattaque",
            description: "Tentative d'intrusion détectée sur les serveurs du ministère, origine suspecte identifiée",
            source: "interne",
            sourceDetail: "CERT-TD Alerte #112",
            region: "ndjamena",
            location: "Infrastructure IT gouvernementale",
            priority: "critique",
            status: "en_cours",
            assignee: "agent_005",
            dateCreated: "2025-06-14T02:45:00",
            dateUpdated: "2025-06-14T11:30:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["logs_serveur.txt", "rapport_incident_cyber.pdf"],
            notes: "Mesures de confinement activées - analyse forensique en cours"
        },
        {
            id: 7,
            reference: "SIG-2025-0007",
            type: "recrutement",
            description: "Individus distribuant des tracts et faisant du prosélytisme agressif sur le marché central",
            source: "humint",
            sourceDetail: "Agent terrain #A-045",
            region: "moundou",
            location: "Marché central de Moundou",
            priority: "moyenne",
            status: "verifie",
            assignee: "agent_001",
            dateCreated: "2025-06-13T14:30:00",
            dateUpdated: "2025-06-14T08:00:00",
            linkedSubject: { id: 23, name: "Ahmed SALEH" },
            linkedIncident: null,
            attachments: ["tracts_saisis.jpg"],
            notes: "Surveillance discrète mise en place"
        },
        {
            id: 8,
            reference: "SIG-2025-0008",
            type: "desinformation",
            description: "Campagne coordonnée de fausses informations concernant les forces de sécurité, viralité importante",
            source: "osint",
            sourceDetail: "Monitoring réseaux sociaux",
            region: "ndjamena",
            location: "En ligne - multiple plateformes",
            priority: "haute",
            status: "assigne",
            assignee: "agent_003",
            dateCreated: "2025-06-13T20:15:00",
            dateUpdated: "2025-06-14T13:45:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["analyse_viralite.pdf", "sources_identifiees.xlsx"],
            notes: "Coordination avec cellule communication gouvernementale"
        },
        {
            id: 9,
            reference: "SIG-2025-0009",
            type: "activite_suspecte",
            description: "Stockage d'armes suspecté dans un entrepôt abandonné, informations de source fiable",
            source: "humint",
            sourceDetail: "Informateur #TC-089",
            region: "kanem",
            location: "Mao, zone industrielle",
            priority: "critique",
            status: "assigne",
            assignee: "agent_002",
            dateCreated: "2025-06-14T07:00:00",
            dateUpdated: "2025-06-14T15:00:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["localisation_gps.pdf"],
            notes: "Opération de vérification planifiée pour demain matin"
        },
        {
            id: 10,
            reference: "SIG-2025-0010",
            type: "menace",
            description: "Message anonyme menaçant de représailles contre les collaborateurs des forces de l'ordre",
            source: "anonyme",
            sourceDetail: "Lettre déposée commissariat",
            region: "sarh",
            location: "Commissariat central de Sarh",
            priority: "haute",
            status: "en_cours",
            assignee: "agent_004",
            dateCreated: "2025-06-14T10:30:00",
            dateUpdated: "2025-06-14T14:00:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["lettre_menace_scan.pdf"],
            notes: "Analyse graphologique et empreintes en cours"
        },
        {
            id: 11,
            reference: "SIG-2025-0011",
            type: "propagande",
            description: "Distribution de CD contenant des vidéos de propagande extrémiste dans les cybercafés",
            source: "citoyen",
            sourceDetail: "Gérant cybercafé",
            region: "ndjamena",
            location: "Quartier Moursal",
            priority: "moyenne",
            status: "resolu",
            assignee: "agent_001",
            dateCreated: "2025-06-11T15:45:00",
            dateUpdated: "2025-06-13T16:20:00",
            linkedSubject: { id: 31, name: "Youssouf ADAM" },
            linkedIncident: null,
            attachments: ["pv_saisie.pdf", "analyse_contenu.pdf"],
            notes: "Distributeur identifié et interpellé"
        },
        {
            id: 12,
            reference: "SIG-2025-0012",
            type: "financement",
            description: "Collecte de fonds non autorisée dans plusieurs mosquées, sommes importantes évoquées",
            source: "humint",
            sourceDetail: "Agent infiltré #I-012",
            region: "abeche",
            location: "Multiple - centre-ville Abéché",
            priority: "haute",
            status: "en_cours",
            assignee: "agent_005",
            dateCreated: "2025-06-12T08:00:00",
            dateUpdated: "2025-06-14T11:00:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["rapport_infiltration.pdf"],
            notes: "Surveillance continue - identifier les bénéficiaires"
        },
        {
            id: 13,
            reference: "SIG-2025-0013",
            type: "activite_suspecte",
            description: "Véhicule suspect repéré à plusieurs reprises près d'installations stratégiques",
            source: "interne",
            sourceDetail: "Équipe surveillance fixe",
            region: "ndjamena",
            location: "Périmètre aéroport Hassan Djamous",
            priority: "haute",
            status: "verifie",
            assignee: "agent_002",
            dateCreated: "2025-06-13T22:00:00",
            dateUpdated: "2025-06-14T08:30:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["photos_vehicule.zip", "releve_passages.xlsx"],
            notes: "Plaque immatriculée identifiée - propriétaire en cours de vérification"
        },
        {
            id: 14,
            reference: "SIG-2025-0014",
            type: "radicalisation",
            description: "Changement comportemental inquiétant observé chez un employé d'une institution sensible",
            source: "partenaire",
            sourceDetail: "DRH institution concernée",
            region: "ndjamena",
            location: "Confidentiel",
            priority: "moyenne",
            status: "nouveau",
            assignee: null,
            dateCreated: "2025-06-14T11:15:00",
            dateUpdated: "2025-06-14T11:15:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["note_comportement.pdf"],
            notes: ""
        },
        {
            id: 15,
            reference: "SIG-2025-0015",
            type: "recrutement",
            description: "Groupe organisé tentant de recruter des jeunes désœuvrés avec promesses d'emploi",
            source: "humint",
            sourceDetail: "Contact associatif #ASS-07",
            region: "logone_occidental",
            location: "Moundou, quartier périphérique",
            priority: "moyenne",
            status: "en_cours",
            assignee: "agent_003",
            dateCreated: "2025-06-13T09:30:00",
            dateUpdated: "2025-06-14T10:00:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: [],
            notes: "Programme de prévention à mettre en place"
        },
        {
            id: 16,
            reference: "SIG-2025-0016",
            type: "cyberattaque",
            description: "Phishing massif ciblant les employés gouvernementaux, plusieurs comptes compromis",
            source: "interne",
            sourceDetail: "SOC gouvernemental",
            region: "ndjamena",
            location: "Infrastructure email nationale",
            priority: "critique",
            status: "en_cours",
            assignee: "agent_005",
            dateCreated: "2025-06-14T04:00:00",
            dateUpdated: "2025-06-14T13:00:00",
            linkedSubject: null,
            linkedIncident: 5,
            attachments: ["emails_phishing.eml", "liste_compromis.xlsx"],
            notes: "Campagne de sensibilisation urgente lancée"
        },
        {
            id: 17,
            reference: "SIG-2025-0017",
            type: "desinformation",
            description: "Rumeurs organisées sur une prétendue pénurie alimentaire, risque de mouvements de panique",
            source: "osint",
            sourceDetail: "Veille WhatsApp",
            region: "ndjamena",
            location: "Groupes WhatsApp locaux",
            priority: "haute",
            status: "resolu",
            assignee: "agent_003",
            dateCreated: "2025-06-12T18:00:00",
            dateUpdated: "2025-06-14T09:00:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["messages_captures.pdf"],
            notes: "Communication officielle diffusée - situation stabilisée"
        },
        {
            id: 18,
            reference: "SIG-2025-0018",
            type: "menace",
            description: "Appel téléphonique menaçant reçu par un journaliste enquêtant sur la corruption",
            source: "citoyen",
            sourceDetail: "Journaliste concerné",
            region: "ndjamena",
            location: "Rédaction journal La Voix",
            priority: "haute",
            status: "assigne",
            assignee: "agent_004",
            dateCreated: "2025-06-14T12:00:00",
            dateUpdated: "2025-06-14T14:30:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["enregistrement_appel.mp3"],
            notes: "Mesures de protection proposées au journaliste"
        },
        {
            id: 19,
            reference: "SIG-2025-0019",
            type: "activite_suspecte",
            description: "Réunion clandestine signalée dans une ferme isolée, présence de véhicules étrangers",
            source: "humint",
            sourceDetail: "Informateur rural #R-034",
            region: "batha",
            location: "30km sud d'Ati",
            priority: "moyenne",
            status: "nouveau",
            assignee: null,
            dateCreated: "2025-06-14T13:45:00",
            dateUpdated: "2025-06-14T13:45:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: [],
            notes: ""
        },
        {
            id: 20,
            reference: "SIG-2025-0020",
            type: "financement",
            description: "Commerce de façade suspecté de blanchiment, flux financiers anormaux détectés",
            source: "partenaire",
            sourceDetail: "Services fiscaux",
            region: "ndjamena",
            location: "Zone commerciale Diguel",
            priority: "moyenne",
            status: "classe",
            assignee: "agent_004",
            dateCreated: "2025-06-08T10:00:00",
            dateUpdated: "2025-06-13T17:00:00",
            linkedSubject: null,
            linkedIncident: null,
            attachments: ["rapport_fiscal.pdf"],
            notes: "Après enquête, activité commerciale légitime confirmée"
        }
    ],

    // Incidents Mock Data
    incidents: [
        {
            id: 1,
            reference: "INC-2025-0001",
            title: "Attaque armée contre un poste de contrôle",
            type: "attaque_armee",
            severity: 4,
            status: "cloture",
            description: "Attaque coordonnée contre un poste de contrôle militaire dans la région du Lac. Échange de tirs pendant 45 minutes.",
            region: "lac",
            location: "Route Bol-Baga Sola, PK 23",
            datetime: "2025-06-10T03:15:00",
            duration: "45 minutes",
            victims: 2,
            injured: 5,
            missing: 0,
            arrested: 3,
            responseTeam: ["armee", "gendarmerie"],
            linkedSignalements: [1],
            attachments: ["rapport_operation.pdf", "photos_scene.zip"],
            notes: "Assaillants repoussés. Zone sécurisée. Enquête en cours.",
            dateCreated: "2025-06-10T04:00:00",
            dateUpdated: "2025-06-12T16:00:00"
        },
        {
            id: 2,
            reference: "INC-2025-0002",
            title: "Tentative d'assassinat contre un responsable",
            type: "assassinat",
            severity: 5,
            status: "en_cours",
            description: "Tentative d'assassinat déjouée contre un haut responsable gouvernemental. Dispositif explosif découvert sous son véhicule.",
            region: "ndjamena",
            location: "Quartier résidentiel Chagoua",
            datetime: "2025-06-14T06:00:00",
            duration: "En cours",
            victims: 0,
            injured: 0,
            missing: 0,
            arrested: 0,
            responseTeam: ["anse", "gign", "police"],
            linkedSignalements: [3],
            attachments: ["expertise_explosif.pdf"],
            notes: "Enquête prioritaire. Protection renforcée.",
            dateCreated: "2025-06-14T06:30:00",
            dateUpdated: "2025-06-14T14:00:00"
        },
        {
            id: 3,
            reference: "INC-2025-0003",
            title: "Embuscade sur convoi humanitaire",
            type: "embuscade",
            severity: 3,
            status: "maitrise",
            description: "Embuscade contre un convoi du PAM transportant de l'aide alimentaire. Véhicules bloqués pendant 2 heures.",
            region: "ouaddai",
            location: "Route Abéché-Adré, PK 67",
            datetime: "2025-06-12T14:30:00",
            duration: "2 heures",
            victims: 0,
            injured: 2,
            missing: 0,
            arrested: 0,
            responseTeam: ["gendarmerie", "armee"],
            linkedSignalements: [],
            attachments: ["rapport_pam.pdf"],
            notes: "Convoi escorté jusqu'à destination. Cargaison intacte.",
            dateCreated: "2025-06-12T17:00:00",
            dateUpdated: "2025-06-13T10:00:00"
        },
        {
            id: 4,
            reference: "INC-2025-0004",
            title: "Enlèvement d'un ressortissant étranger",
            type: "enlevement",
            severity: 5,
            status: "en_cours",
            description: "Enlèvement d'un technicien étranger travaillant pour une compagnie pétrolière. Véhicule retrouvé abandonné.",
            region: "borkou",
            location: "Zone pétrolière de Sédigui",
            datetime: "2025-06-13T08:00:00",
            duration: "En cours - 30h+",
            victims: 0,
            injured: 1,
            missing: 1,
            arrested: 0,
            responseTeam: ["anse", "armee", "gign"],
            linkedSignalements: [],
            attachments: ["profil_victime.pdf", "zone_recherche.kml"],
            notes: "Cellule de crise activée. Négociations en cours.",
            dateCreated: "2025-06-13T10:00:00",
            dateUpdated: "2025-06-14T15:00:00"
        },
        {
            id: 5,
            reference: "INC-2025-0005",
            title: "Cyberattaque majeure infrastructures",
            type: "cyber_incident",
            severity: 4,
            status: "en_cours",
            description: "Attaque informatique coordonnée ciblant plusieurs ministères. Systèmes partiellement paralysés.",
            region: "ndjamena",
            location: "Data center gouvernemental",
            datetime: "2025-06-14T02:30:00",
            duration: "En cours - 12h+",
            victims: 0,
            injured: 0,
            missing: 0,
            arrested: 0,
            responseTeam: ["anse"],
            linkedSignalements: [6, 16],
            attachments: ["rapport_cert.pdf", "ioc_list.txt"],
            notes: "Mesures de confinement actives. Restauration en cours.",
            dateCreated: "2025-06-14T03:00:00",
            dateUpdated: "2025-06-14T14:30:00"
        },
        {
            id: 6,
            reference: "INC-2025-0006",
            title: "Explosion suspecte dans un marché",
            type: "explosion",
            severity: 4,
            status: "maitrise",
            description: "Explosion d'origine indéterminée dans le grand marché de Moundou. Panique générale, dégâts matériels importants.",
            region: "logone_occidental",
            location: "Grand marché de Moundou",
            datetime: "2025-06-11T11:45:00",
            duration: "3 heures (évacuation)",
            victims: 1,
            injured: 12,
            missing: 0,
            arrested: 0,
            responseTeam: ["police", "pompiers", "samu"],
            linkedSignalements: [],
            attachments: ["rapport_demineurs.pdf", "temoignages.pdf"],
            notes: "Origine accidentelle probable (bouteille de gaz).",
            dateCreated: "2025-06-11T12:30:00",
            dateUpdated: "2025-06-13T09:00:00"
        },
        {
            id: 7,
            reference: "INC-2025-0007",
            title: "Manifestation violente université",
            type: "manifestation",
            severity: 2,
            status: "cloture",
            description: "Manifestation estudiantine dégénérant en affrontements. Jets de pierres, barricades.",
            region: "ndjamena",
            location: "Campus universitaire de Toukra",
            datetime: "2025-06-09T09:00:00",
            duration: "5 heures",
            victims: 0,
            injured: 8,
            missing: 0,
            arrested: 15,
            responseTeam: ["police", "gendarmerie"],
            linkedSignalements: [],
            attachments: ["rapport_police.pdf"],
            notes: "Dialogue établi avec représentants étudiants.",
            dateCreated: "2025-06-09T10:00:00",
            dateUpdated: "2025-06-10T14:00:00"
        },
        {
            id: 8,
            reference: "INC-2025-0008",
            title: "Intrusion dans une base militaire",
            type: "intrusion",
            severity: 3,
            status: "cloture",
            description: "Tentative d'intrusion nocturne dans le périmètre d'une base militaire. Intrus neutralisé.",
            region: "kanem",
            location: "Base militaire de Mao",
            datetime: "2025-06-08T01:30:00",
            duration: "30 minutes",
            victims: 0,
            injured: 1,
            missing: 0,
            arrested: 1,
            responseTeam: ["armee"],
            linkedSignalements: [9],
            attachments: ["pv_arrestation.pdf"],
            notes: "Interrogatoire en cours. Motivations à déterminer.",
            dateCreated: "2025-06-08T02:30:00",
            dateUpdated: "2025-06-10T11:00:00"
        },
        {
            id: 9,
            reference: "INC-2025-0009",
            title: "Sabotage ligne électrique",
            type: "sabotage",
            severity: 2,
            status: "cloture",
            description: "Sabotage délibéré d'un pylône électrique causant une coupure dans plusieurs quartiers.",
            region: "ndjamena",
            location: "Ligne HT secteur Farcha",
            datetime: "2025-06-07T23:00:00",
            duration: "8 heures (réparation)",
            victims: 0,
            injured: 0,
            missing: 0,
            arrested: 2,
            responseTeam: ["police"],
            linkedSignalements: [],
            attachments: ["expertise_technique.pdf"],
            notes: "Acte de vandalisme. Auteurs identifiés et arrêtés.",
            dateCreated: "2025-06-07T23:30:00",
            dateUpdated: "2025-06-09T16:00:00"
        },
        {
            id: 10,
            reference: "INC-2025-0010",
            title: "Affrontements intercommunautaires",
            type: "attaque_armee",
            severity: 4,
            status: "maitrise",
            description: "Affrontements armés entre communautés suite à un différend foncier. Plusieurs villages touchés.",
            region: "salamat",
            location: "Zone Am-Timan - villages environnants",
            datetime: "2025-06-13T16:00:00",
            duration: "En cours - médiation active",
            victims: 4,
            injured: 23,
            missing: 2,
            arrested: 8,
            responseTeam: ["armee", "gendarmerie"],
            linkedSignalements: [],
            attachments: ["rapport_situation.pdf"],
            notes: "Médiation traditionnelle en cours. Renforts déployés.",
            dateCreated: "2025-06-13T18:00:00",
            dateUpdated: "2025-06-14T12:00:00"
        }
    ],

    // Agents/Users
    agents: [
        { id: "agent_001", name: "Agent ANSE-001", fullName: "Mahamat IDRISS", role: "Analyste Senior", avatar: "MI" },
        { id: "agent_002", name: "Agent ANSE-002", fullName: "Fatimé OUMAR", role: "Chef d'équipe", avatar: "FO" },
        { id: "agent_003", name: "Agent ANSE-003", fullName: "Hassan DJIBRINE", role: "Analyste OSINT", avatar: "HD" },
        { id: "agent_004", name: "Agent ANSE-004", fullName: "Amina MAHAMAT", role: "Analyste Financier", avatar: "AM" },
        { id: "agent_005", name: "Agent ANSE-005", fullName: "Youssouf ADAM", role: "Expert Cyber", avatar: "YA" }
    ],

    // Labels/Translations
    labels: {
        types: {
            activite_suspecte: "Activité suspecte",
            menace: "Menace directe",
            propagande: "Propagande",
            financement: "Financement illicite",
            radicalisation: "Radicalisation",
            recrutement: "Recrutement",
            desinformation: "Désinformation",
            cyberattaque: "Cyberattaque"
        },
        incidentTypes: {
            attentat: "Attentat",
            embuscade: "Embuscade",
            attaque_armee: "Attaque armée",
            explosion: "Explosion",
            enlevement: "Enlèvement",
            assassinat: "Assassinat ciblé",
            sabotage: "Sabotage",
            manifestation: "Manifestation violente",
            intrusion: "Intrusion",
            cyber_incident: "Cyber-incident"
        },
        priorities: {
            critique: "Critique",
            haute: "Haute",
            moyenne: "Moyenne",
            basse: "Basse"
        },
        statuses: {
            nouveau: "Nouveau",
            en_cours: "En cours",
            verifie: "Vérifié",
            assigne: "Assigné",
            resolu: "Résolu",
            classe: "Classé"
        },
        incidentStatuses: {
            declare: "Déclaré",
            confirme: "Confirmé",
            en_cours: "En cours",
            maitrise: "Maîtrisé",
            cloture: "Clôturé"
        },
        severities: {
            5: "Catastrophique",
            4: "Majeur",
            3: "Modéré",
            2: "Mineur",
            1: "Négligeable"
        },
        sources: {
            humint: "HUMINT",
            sigint: "SIGINT",
            osint: "OSINT",
            citoyen: "Citoyen",
            partenaire: "Partenaire",
            interne: "Interne",
            anonyme: "Anonyme"
        },
        regions: {
            ndjamena: "N'Djamena",
            logone_occidental: "Logone Occidental",
            logone_oriental: "Logone Oriental",
            mayo_kebbi_est: "Mayo-Kebbi Est",
            mayo_kebbi_ouest: "Mayo-Kebbi Ouest",
            ouaddai: "Ouaddaï",
            wadi_fira: "Wadi Fira",
            lac: "Lac",
            kanem: "Kanem",
            batha: "Batha",
            guera: "Guéra",
            salamat: "Salamat",
            moyen_chari: "Moyen-Chari",
            mandoul: "Mandoul",
            tandjile: "Tandjilé",
            borkou: "Borkou",
            ennedi_est: "Ennedi Est",
            ennedi_ouest: "Ennedi Ouest",
            tibesti: "Tibesti",
            sila: "Sila",
            hadjer_lamis: "Hadjer-Lamis",
            barh_el_gazel: "Barh El Gazel",
            moundou: "Moundou",
            sarh: "Sarh",
            abeche: "Abéché"
        }
    }
};

// ===================================
// STATE MANAGEMENT
// ===================================

const state = {
    // Signalements
    signalements: [...MOCK_DATA.signalements],
    filteredSignalements: [],
    currentPage: 1,
    pageSize: 10,
    sortField: 'dateCreated',
    sortDirection: 'desc',
    
    // Incidents
    incidents: [...MOCK_DATA.incidents],
    filteredIncidents: [],
    incidentCurrentPage: 1,
    incidentPageSize: 6,
    
    // UI State
    activeTab: 'signalements',
    selectedItems: new Set(),
    editingId: null
};

// ===================================
// UTILITY FUNCTIONS
// ===================================

function formatDate(dateString, options = {}) {
    const date = new Date(dateString);
    const defaultOptions = {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    };
    return date.toLocaleDateString('fr-FR', { ...defaultOptions, ...options });
}

function formatRelativeTime(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diff = now - date;
    const minutes = Math.floor(diff / 60000);
    const hours = Math.floor(diff / 3600000);
    const days = Math.floor(diff / 86400000);
    
    if (minutes < 1) return "À l'instant";
    if (minutes < 60) return `Il y a ${minutes} min`;
    if (hours < 24) return `Il y a ${hours}h`;
    if (days < 7) return `Il y a ${days}j`;
    return formatDate(dateString, { hour: undefined, minute: undefined });
}

function generateReference(prefix) {
    const year = new Date().getFullYear();
    const num = String(Math.floor(Math.random() * 9999) + 1).padStart(4, '0');
    return `${prefix}-${year}-${num}`;
}

function getLabel(category, key) {
    return MOCK_DATA.labels[category]?.[key] || key;
}

function getAgent(agentId) {
    return MOCK_DATA.agents.find(a => a.id === agentId);
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

// ===================================
// DOM ELEMENTS
// ===================================

const elements = {
    // Sidebar
    sidebar: document.getElementById('sidebar'),
    toggleSidebar: document.getElementById('toggleSidebar'),
    mobileMenuBtn: document.getElementById('mobileMenuBtn'),
    
    // Tabs
    tabBtns: document.querySelectorAll('.tab-btn'),
    tabContents: document.querySelectorAll('.tab-content'),
    signalementCount: document.getElementById('signalementCount'),
    incidentCount: document.getElementById('incidentCount'),
    
    // Stats
    statsGrid: document.getElementById('statsGrid'),
    
    // Signalements
    signalementTableBody: document.getElementById('signalementTableBody'),
    searchInput: document.getElementById('searchInput'),
    typeFilter: document.getElementById('typeFilter'),
    priorityFilter: document.getElementById('priorityFilter'),
    statusFilter: document.getElementById('statusFilter'),
    regionFilter: document.getElementById('regionFilter'),
    periodFilter: document.getElementById('periodFilter'),
    selectAll: document.getElementById('selectAll'),
    pagination: document.getElementById('pagination'),
    startEntry: document.getElementById('startEntry'),
    endEntry: document.getElementById('endEntry'),
    totalEntries: document.getElementById('totalEntries'),
    pageSize: document.getElementById('pageSize'),
    resetFilters: document.getElementById('resetFilters'),
    
    // Incidents
    incidentsGrid: document.getElementById('incidentsGrid'),
    incidentSearchInput: document.getElementById('incidentSearchInput'),
    incidentTypeFilter: document.getElementById('incidentTypeFilter'),
    severityFilter: document.getElementById('severityFilter'),
    incidentStatusFilter: document.getElementById('incidentStatusFilter'),
    incidentRegionFilter: document.getElementById('incidentRegionFilter'),
    incidentPeriodFilter: document.getElementById('incidentPeriodFilter'),
    incidentPagination: document.getElementById('incidentPagination'),
    incidentStartEntry: document.getElementById('incidentStartEntry'),
    incidentEndEntry: document.getElementById('incidentEndEntry'),
    incidentTotalEntries: document.getElementById('incidentTotalEntries'),
    
    // Modals
    signalementModal: document.getElementById('signalementModal'),
    viewModal: document.getElementById('viewModal'),
    incidentModal: document.getElementById('incidentModal'),
    
    // Buttons
    newSignalementBtn: document.getElementById('newSignalementBtn'),
    exportAllBtn: document.getElementById('exportAllBtn'),
    refreshBtn: document.getElementById('refreshBtn'),
    
    // Toast & Loading
    toastContainer: document.getElementById('toastContainer'),
    loadingOverlay: document.getElementById('loadingOverlay'),
    
    // Analytics
    activityList: document.getElementById('activityList'),
    analystsList: document.getElementById('analystsList')
};

// ===================================
// STATISTICS
// ===================================

function calculateStats() {
    const signalements = state.signalements;
    const incidents = state.incidents;
    
    const stats = {
        total: signalements.length,
        nouveaux: signalements.filter(s => s.status === 'nouveau').length,
        enCours: signalements.filter(s => s.status === 'en_cours').length,
        critiques: signalements.filter(s => s.priority === 'critique').length,
        resolus: signalements.filter(s => s.status === 'resolu').length,
        incidents: incidents.length,
        incidentsActifs: incidents.filter(i => ['declare', 'confirme', 'en_cours'].includes(i.status)).length
    };
    
    return stats;
}

function renderStats() {
    const stats = calculateStats();
    
    const statsHTML = `
        <div class="stat-card" style="--stat-color: #3498db; --stat-bg: rgba(52, 152, 219, 0.1);">
            <div class="stat-icon">
                <i class="ri-alarm-warning-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${stats.total}</div>
                <div class="stat-label">Total signalements</div>
                <div class="stat-trend up">
                    <i class="ri-arrow-up-line"></i> +12% ce mois
                </div>
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #9b59b6; --stat-bg: rgba(155, 89, 182, 0.1);">
            <div class="stat-icon">
                <i class="ri-add-circle-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${stats.nouveaux}</div>
                <div class="stat-label">Nouveaux</div>
                <div class="stat-trend up">
                    <i class="ri-arrow-up-line"></i> +3 aujourd'hui
                </div>
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #e67e22; --stat-bg: rgba(230, 126, 34, 0.1);">
            <div class="stat-icon">
                <i class="ri-loader-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${stats.enCours}</div>
                <div class="stat-label">En cours d'analyse</div>
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #e74c3c; --stat-bg: rgba(231, 76, 60, 0.1);">
            <div class="stat-icon">
                <i class="ri-alert-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${stats.critiques}</div>
                <div class="stat-label">Priorité critique</div>
                <div class="stat-trend down">
                    <i class="ri-arrow-down-line"></i> -2 vs hier
                </div>
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #27ae60; --stat-bg: rgba(39, 174, 96, 0.1);">
            <div class="stat-icon">
                <i class="ri-checkbox-circle-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${stats.resolus}</div>
                <div class="stat-label">Résolus</div>
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #c0392b; --stat-bg: rgba(192, 57, 43, 0.1);">
            <div class="stat-icon">
                <i class="ri-error-warning-line"></i>
            </div>
            <div class="stat-content">
                <div class="stat-value">${stats.incidentsActifs}</div>
                <div class="stat-label">Incidents actifs</div>
                <div class="stat-trend up">
                    <i class="ri-arrow-up-line"></i> +2 cette semaine
                </div>
            </div>
        </div>
    `;
    
    elements.statsGrid.innerHTML = statsHTML;
    elements.signalementCount.textContent = stats.total;
    elements.incidentCount.textContent = stats.incidents;
}

// ===================================
// SIGNALEMENTS TABLE
// ===================================

function filterSignalements() {
    let filtered = [...state.signalements];
    
    // Search filter
    const search = elements.searchInput?.value?.toLowerCase() || '';
    if (search) {
        filtered = filtered.filter(s => 
            s.reference.toLowerCase().includes(search) ||
            s.description.toLowerCase().includes(search) ||
            (s.linkedSubject?.name || '').toLowerCase().includes(search) ||
            getLabel('regions', s.region).toLowerCase().includes(search)
        );
    }
    
    // Type filter
    const type = elements.typeFilter?.value || '';
    if (type) {
        filtered = filtered.filter(s => s.type === type);
    }
    
    // Priority filter
    const priority = elements.priorityFilter?.value || '';
    if (priority) {
        filtered = filtered.filter(s => s.priority === priority);
    }
    
    // Status filter
    const status = elements.statusFilter?.value || '';
    if (status) {
        filtered = filtered.filter(s => s.status === status);
    }
    
    // Region filter
    const region = elements.regionFilter?.value || '';
    if (region) {
        filtered = filtered.filter(s => s.region === region);
    }
    
    // Period filter
    const period = elements.periodFilter?.value || '';
    if (period) {
        const now = new Date();
        let startDate;
        
        switch (period) {
            case 'today':
                startDate = new Date(now.setHours(0, 0, 0, 0));
                break;
            case 'week':
                startDate = new Date(now.setDate(now.getDate() - 7));
                break;
            case 'month':
                startDate = new Date(now.setMonth(now.getMonth() - 1));
                break;
            case 'quarter':
                startDate = new Date(now.setMonth(now.getMonth() - 3));
                break;
            case 'year':
                startDate = new Date(now.setFullYear(now.getFullYear() - 1));
                break;
        }
        
        if (startDate) {
            filtered = filtered.filter(s => new Date(s.dateCreated) >= startDate);
        }
    }
    
    // Sort
    filtered.sort((a, b) => {
        let aVal = a[state.sortField];
        let bVal = b[state.sortField];
        
        if (state.sortField === 'dateCreated' || state.sortField === 'dateUpdated') {
            aVal = new Date(aVal);
            bVal = new Date(bVal);
        }
        
        if (state.sortDirection === 'asc') {
            return aVal > bVal ? 1 : -1;
        }
        return aVal < bVal ? 1 : -1;
    });
    
    state.filteredSignalements = filtered;
    state.currentPage = 1;
    renderSignalementTable();
}

function renderSignalementTable() {
    const start = (state.currentPage - 1) * state.pageSize;
    const end = start + state.pageSize;
    const pageData = state.filteredSignalements.slice(start, end);
    
    if (pageData.length === 0) {
        elements.signalementTableBody.innerHTML = `
            <tr>
                <td colspan="11">
                    <div class="empty-state">
                        <i class="ri-file-search-line"></i>
                        <h4>Aucun signalement trouvé</h4>
                        <p>Modifiez vos filtres ou créez un nouveau signalement</p>
                        <button class="btn btn-primary" onclick="openSignalementModal()">
                            <i class="ri-add-line"></i> Nouveau Signalement
                        </button>
                    </div>
                </td>
            </tr>
        `;
    } else {
        elements.signalementTableBody.innerHTML = pageData.map(s => {
            const agent = getAgent(s.assignee);
            return `
                <tr data-id="${s.id}" class="${state.selectedItems.has(s.id) ? 'selected' : ''}">
                    <td class="checkbox-col">
                        <input type="checkbox" class="checkbox row-checkbox" 
                               ${state.selectedItems.has(s.id) ? 'checked' : ''}>
                    </td>
                    <td><span class="cell-reference">${s.reference}</span></td>
                    <td><span class="badge badge-type ${s.type}">${getLabel('types', s.type)}</span></td>
                    <td class="cell-description" title="${s.description}">${s.description}</td>
                    <td><span class="badge">${getLabel('sources', s.source)}</span></td>
                    <td>${getLabel('regions', s.region)}</td>
                    <td><span class="badge badge-priority ${s.priority}">${getLabel('priorities', s.priority)}</span></td>
                    <td><span class="badge badge-status ${s.status}">${getLabel('statuses', s.status)}</span></td>
                    <td>
                        ${agent ? `
                            <div class="cell-assignee">
                                <span class="assignee-avatar">${agent.avatar}</span>
                                <span>${agent.name}</span>
                            </div>
                        ` : '<span class="text-muted">Non assigné</span>'}
                    </td>
                    <td>${formatDate(s.dateCreated)}</td>
                    <td>
                        <div class="table-actions-cell">
                            <button class="action-btn view" onclick="viewSignalement(${s.id})" title="Voir">
                                <i class="ri-eye-line"></i>
                            </button>
                            <button class="action-btn edit" onclick="editSignalement(${s.id})" title="Modifier">
                                <i class="ri-edit-line"></i>
                            </button>
                            <button class="action-btn delete" onclick="deleteSignalement(${s.id})" title="Supprimer">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');
    }
    
    // Update pagination info
    const total = state.filteredSignalements.length;
    elements.startEntry.textContent = total === 0 ? 0 : start + 1;
    elements.endEntry.textContent = Math.min(end, total);
    elements.totalEntries.textContent = total;
    
    renderPagination();
}

function renderPagination() {
    const totalPages = Math.ceil(state.filteredSignalements.length / state.pageSize);
    
    if (totalPages <= 1) {
        elements.pagination.innerHTML = '';
        return;
    }
    
    let html = `
        <button class="page-btn" onclick="goToPage(1)" ${state.currentPage === 1 ? 'disabled' : ''}>
            <i class="ri-arrow-left-double-line"></i>
        </button>
        <button class="page-btn" onclick="goToPage(${state.currentPage - 1})" ${state.currentPage === 1 ? 'disabled' : ''}>
            <i class="ri-arrow-left-s-line"></i>
        </button>
    `;
    
    // Calculate visible pages
    let startPage = Math.max(1, state.currentPage - 2);
    let endPage = Math.min(totalPages, state.currentPage + 2);
    
    if (startPage > 1) {
        html += `<button class="page-btn" onclick="goToPage(1)">1</button>`;
        if (startPage > 2) {
            html += `<span class="page-btn" style="border: none;">...</span>`;
        }
    }
    
    for (let i = startPage; i <= endPage; i++) {
        html += `
            <button class="page-btn ${i === state.currentPage ? 'active' : ''}" 
                    onclick="goToPage(${i})">${i}</button>
        `;
    }
    
    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            html += `<span class="page-btn" style="border: none;">...</span>`;
        }
        html += `<button class="page-btn" onclick="goToPage(${totalPages})">${totalPages}</button>`;
    }
    
    html += `
        <button class="page-btn" onclick="goToPage(${state.currentPage + 1})" ${state.currentPage === totalPages ? 'disabled' : ''}>
            <i class="ri-arrow-right-s-line"></i>
        </button>
        <button class="page-btn" onclick="goToPage(${totalPages})" ${state.currentPage === totalPages ? 'disabled' : ''}>
            <i class="ri-arrow-right-double-line"></i>
        </button>
    `;
    
    elements.pagination.innerHTML = html;
}

function goToPage(page) {
    const totalPages = Math.ceil(state.filteredSignalements.length / state.pageSize);
    if (page < 1 || page > totalPages) return;
    state.currentPage = page;
    renderSignalementTable();
}

function sortTable(field) {
    if (state.sortField === field) {
        state.sortDirection = state.sortDirection === 'asc' ? 'desc' : 'asc';
    } else {
        state.sortField = field;
        state.sortDirection = 'desc';
    }
    
    // Update sort indicators
    document.querySelectorAll('.data-table th.sortable').forEach(th => {
        th.classList.remove('asc', 'desc');
    });
    
    const th = document.querySelector(`th[data-sort="${field}"]`);
    if (th) {
        th.classList.add(state.sortDirection);
    }
    
    filterSignalements();
}

// ===================================
// INCIDENTS
// ===================================

function filterIncidents() {
    let filtered = [...state.incidents];
    
    // Search filter
    const search = elements.incidentSearchInput?.value?.toLowerCase() || '';
    if (search) {
        filtered = filtered.filter(i => 
            i.reference.toLowerCase().includes(search) ||
            i.title.toLowerCase().includes(search) ||
            i.description.toLowerCase().includes(search) ||
            i.location.toLowerCase().includes(search)
        );
    }
    
    // Type filter
    const type = elements.incidentTypeFilter?.value || '';
    if (type) {
        filtered = filtered.filter(i => i.type === type);
    }
    
    // Severity filter
    const severity = elements.severityFilter?.value || '';
    if (severity) {
        filtered = filtered.filter(i => i.severity === parseInt(severity));
    }
    
    // Status filter
    const status = elements.incidentStatusFilter?.value || '';
    if (status) {
        filtered = filtered.filter(i => i.status === status);
    }
    
    // Region filter
    const region = elements.incidentRegionFilter?.value || '';
    if (region) {
        filtered = filtered.filter(i => i.region === region);
    }
    
    // Sort by date descending
    filtered.sort((a, b) => new Date(b.dateCreated) - new Date(a.dateCreated));
    
    state.filteredIncidents = filtered;
    state.incidentCurrentPage = 1;
    renderIncidents();
}

function renderIncidents() {
    const start = (state.incidentCurrentPage - 1) * state.incidentPageSize;
    const end = start + state.incidentPageSize;
    const pageData = state.filteredIncidents.slice(start, end);
    
    if (pageData.length === 0) {
        elements.incidentsGrid.innerHTML = `
            <div class="empty-state" style="grid-column: 1 / -1;">
                <i class="ri-error-warning-line"></i>
                <h4>Aucun incident trouvé</h4>
                <p>Modifiez vos filtres ou déclarez un nouvel incident</p>
            </div>
        `;
    } else {
        elements.incidentsGrid.innerHTML = pageData.map(i => `
            <div class="incident-card severity-${i.severity}">
                <div class="incident-header">
                    <div class="incident-title-area">
                        <div class="incident-reference">${i.reference}</div>
                        <h4 class="incident-title">${i.title}</h4>
                        <div class="incident-badges">
                            <span class="badge badge-type">${getLabel('incidentTypes', i.type)}</span>
                            <span class="badge badge-inc-status ${i.status}">${getLabel('incidentStatuses', i.status)}</span>
                        </div>
                    </div>
                    <div class="incident-severity">
                        <div class="severity-indicator sev-${i.severity}">${i.severity}</div>
                        <span class="severity-label">${getLabel('severities', i.severity)}</span>
                    </div>
                </div>
                
                <div class="incident-body">
                    <p class="incident-description">${i.description}</p>
                    <div class="incident-meta">
                        <div class="incident-meta-item">
                            <i class="ri-map-pin-line"></i>
                            <span>${getLabel('regions', i.region)}</span>
                        </div>
                        <div class="incident-meta-item">
                            <i class="ri-map-2-line"></i>
                            <span>${i.location}</span>
                        </div>
                        <div class="incident-meta-item">
                            <i class="ri-time-line"></i>
                            <span>${formatDate(i.datetime)}</span>
                        </div>
                        <div class="incident-meta-item">
                            <i class="ri-timer-line"></i>
                            <span>${i.duration}</span>
                        </div>
                    </div>
                </div>
                
                <div class="incident-stats">
                    <div class="incident-stat">
                        <span class="incident-stat-value victims">${i.victims}</span>
                        <span class="incident-stat-label">Victimes</span>
                    </div>
                    <div class="incident-stat">
                        <span class="incident-stat-value injured">${i.injured}</span>
                        <span class="incident-stat-label">Blessés</span>
                    </div>
                    <div class="incident-stat">
                        <span class="incident-stat-value">${i.missing}</span>
                        <span class="incident-stat-label">Disparus</span>
                    </div>
                    <div class="incident-stat">
                        <span class="incident-stat-value arrested">${i.arrested}</span>
                        <span class="incident-stat-label">Arrêtés</span>
                    </div>
                </div>
                
                <div class="incident-footer">
                    <span class="incident-date">
                        <i class="ri-refresh-line"></i>
                        ${formatRelativeTime(i.dateUpdated)}
                    </span>
                    <div class="incident-actions">
                        <button class="btn btn-sm btn-outline" onclick="viewIncident(${i.id})">
                            <i class="ri-eye-line"></i> Détails
                        </button>
                        <button class="btn btn-sm btn-secondary" onclick="editIncident(${i.id})">
                            <i class="ri-edit-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        `).join('');
    }
    
    // Update pagination info
    const total = state.filteredIncidents.length;
    elements.incidentStartEntry.textContent = total === 0 ? 0 : start + 1;
    elements.incidentEndEntry.textContent = Math.min(end, total);
    elements.incidentTotalEntries.textContent = total;
    
    renderIncidentPagination();
}

function renderIncidentPagination() {
    const totalPages = Math.ceil(state.filteredIncidents.length / state.incidentPageSize);
    
    if (totalPages <= 1) {
        elements.incidentPagination.innerHTML = '';
        return;
    }
    
    let html = '';
    for (let i = 1; i <= totalPages; i++) {
        html += `
            <button class="page-btn ${i === state.incidentCurrentPage ? 'active' : ''}" 
                    onclick="goToIncidentPage(${i})">${i}</button>
        `;
    }
    
    elements.incidentPagination.innerHTML = html;
}

function goToIncidentPage(page) {
    state.incidentCurrentPage = page;
    renderIncidents();
}

// ===================================
// MODALS
// ===================================

function openSignalementModal(id = null) {
    state.editingId = id;
    const modal = elements.signalementModal;
    const form = document.getElementById('signalementForm');
    const title = document.getElementById('modalTitle');
    
    form.reset();
    
    if (id) {
        const sig = state.signalements.find(s => s.id === id);
        if (sig) {
            title.innerHTML = '<i class="ri-edit-line"></i> Modifier le Signalement';
            document.getElementById('signalementId').value = sig.id;
            document.getElementById('sigType').value = sig.type;
            document.getElementById('sigPriority').value = sig.priority;
            document.getElementById('sigDescription').value = sig.description;
            document.getElementById('sigSource').value = sig.source;
            document.getElementById('sigSourceDetail').value = sig.sourceDetail || '';
            document.getElementById('sigRegion').value = sig.region;
            document.getElementById('sigLocation').value = sig.location || '';
            document.getElementById('sigAssignee').value = sig.assignee || '';
            document.getElementById('sigStatus').value = sig.status;
            document.getElementById('sigNotes').value = sig.notes || '';
        }
    } else {
        title.innerHTML = '<i class="ri-alarm-warning-line"></i> Nouveau Signalement';
    }
    
    modal.classList.add('active');
}

function closeSignalementModal() {
    elements.signalementModal.classList.remove('active');
    state.editingId = null;
}

function saveSignalement(e) {
    e.preventDefault();
    
    const formData = {
        type: document.getElementById('sigType').value,
        priority: document.getElementById('sigPriority').value,
        description: document.getElementById('sigDescription').value,
        source: document.getElementById('sigSource').value,
        sourceDetail: document.getElementById('sigSourceDetail').value,
        region: document.getElementById('sigRegion').value,
        location: document.getElementById('sigLocation').value,
        assignee: document.getElementById('sigAssignee').value || null,
        status: document.getElementById('sigStatus').value,
        notes: document.getElementById('sigNotes').value
    };
    
    if (state.editingId) {
        // Update existing
        const index = state.signalements.findIndex(s => s.id === state.editingId);
        if (index !== -1) {
            state.signalements[index] = {
                ...state.signalements[index],
                ...formData,
                dateUpdated: new Date().toISOString()
            };
            showToast('success', 'Signalement modifié', 'Les modifications ont été enregistrées.');
        }
    } else {
        // Create new
        const newSignalement = {
            id: Math.max(...state.signalements.map(s => s.id)) + 1,
            reference: generateReference('SIG'),
            ...formData,
            linkedSubject: null,
            linkedIncident: null,
            attachments: [],
            dateCreated: new Date().toISOString(),
            dateUpdated: new Date().toISOString()
        };
        state.signalements.unshift(newSignalement);
        showToast('success', 'Signalement créé', `Référence: ${newSignalement.reference}`);
    }
    
    closeSignalementModal();
    filterSignalements();
    renderStats();
}

function viewSignalement(id) {
    const sig = state.signalements.find(s => s.id === id);
    if (!sig) return;
    
    const agent = getAgent(sig.assignee);
    const modal = elements.viewModal;
    const details = document.getElementById('signalementDetails');
    
    details.innerHTML = `
        <div class="detail-section">
            <h4 class="detail-section-title">
                <i class="ri-information-line"></i> Informations générales
            </h4>
            <div class="detail-row">
                <div class="detail-item">
                    <div class="detail-label">Référence</div>
                    <div class="detail-value">${sig.reference}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Date de création</div>
                    <div class="detail-value">${formatDate(sig.dateCreated)}</div>
                </div>
            </div>
            <div class="detail-row">
                <div class="detail-item">
                    <div class="detail-label">Type</div>
                    <div class="detail-value">
                        <span class="badge badge-type ${sig.type}">${getLabel('types', sig.type)}</span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Priorité</div>
                    <div class="detail-value">
                        <span class="badge badge-priority ${sig.priority}">${getLabel('priorities', sig.priority)}</span>
                    </div>
                </div>
            </div>
            <div class="detail-row">
                <div class="detail-item">
                    <div class="detail-label">Statut</div>
                    <div class="detail-value">
                        <span class="badge badge-status ${sig.status}">${getLabel('statuses', sig.status)}</span>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Assigné à</div>
                    <div class="detail-value">
                        ${agent ? `<div class="cell-assignee"><span class="assignee-avatar">${agent.avatar}</span> ${agent.fullName}</div>` : 'Non assigné'}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="detail-section">
            <h4 class="detail-section-title">
                <i class="ri-file-text-line"></i> Description
            </h4>
            <div class="detail-item">
                <div class="detail-value">${sig.description}</div>
            </div>
        </div>
        
        <div class="detail-section">
            <h4 class="detail-section-title">
                <i class="ri-map-pin-line"></i> Localisation
            </h4>
            <div class="detail-row">
                <div class="detail-item">
                    <div class="detail-label">Région</div>
                    <div class="detail-value">${getLabel('regions', sig.region)}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Localisation précise</div>
                    <div class="detail-value">${sig.location || 'Non spécifiée'}</div>
                </div>
            </div>
        </div>
        
        <div class="detail-section">
            <h4 class="detail-section-title">
                <i class="ri-spy-line"></i> Source
            </h4>
            <div class="detail-row">
                <div class="detail-item">
                    <div class="detail-label">Type de source</div>
                    <div class="detail-value">${getLabel('sources', sig.source)}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Détails</div>
                    <div class="detail-value">${sig.sourceDetail || 'Non spécifié'}</div>
                </div>
            </div>
        </div>
        
        ${sig.linkedSubject ? `
            <div class="detail-section">
                <h4 class="detail-section-title">
                    <i class="ri-user-line"></i> Sujet lié
                </h4>
                <div class="detail-item">
                    <div class="detail-value">
                        <a href="sujets.html?id=${sig.linkedSubject.id}" class="btn btn-sm btn-outline">
                            <i class="ri-user-search-line"></i> ${sig.linkedSubject.name}
                        </a>
                    </div>
                </div>
            </div>
        ` : ''}
        
        ${sig.attachments.length > 0 ? `
            <div class="detail-section">
                <h4 class="detail-section-title">
                    <i class="ri-attachment-line"></i> Pièces jointes (${sig.attachments.length})
                </h4>
                <div class="uploaded-files">
                    ${sig.attachments.map(a => `
                        <div class="uploaded-file">
                            <i class="ri-file-line"></i>
                            <span>${a}</span>
                            <i class="ri-download-line" style="cursor: pointer;"></i>
                        </div>
                    `).join('')}
                </div>
            </div>
        ` : ''}
        
        ${sig.notes ? `
            <div class="detail-section">
                <h4 class="detail-section-title">
                    <i class="ri-sticky-note-line"></i> Notes internes
                </h4>
                <div class="detail-item">
                    <div class="detail-value" style="font-style: italic; color: var(--text-secondary);">${sig.notes}</div>
                </div>
            </div>
        ` : ''}
    `;
    
    document.getElementById('viewModalTitle').innerHTML = `<i class="ri-file-list-line"></i> ${sig.reference}`;
    
    // Set up edit button
    document.getElementById('editFromView').onclick = () => {
        closeViewModal();
        editSignalement(id);
    };
    
    modal.classList.add('active');
}

function closeViewModal() {
    elements.viewModal.classList.remove('active');
}

function editSignalement(id) {
    openSignalementModal(id);
}

function deleteSignalement(id) {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce signalement ?')) {
        state.signalements = state.signalements.filter(s => s.id !== id);
        filterSignalements();
        renderStats();
        showToast('success', 'Signalement supprimé', 'Le signalement a été supprimé avec succès.');
    }
}

function viewIncident(id) {
    const incident = state.incidents.find(i => i.id === id);
    if (!incident) return;
    
    // For now, show a simple alert. In production, this would open a detailed modal.
    alert(`Incident: ${incident.title}\n\nDescription: ${incident.description}\n\nLocalisation: ${incident.location}`);
}

function editIncident(id) {
    // Open incident modal in edit mode
    const incident = state.incidents.find(i => i.id === id);
    if (!incident) return;
    
    openIncidentModal(id);
}

function openIncidentModal(id = null) {
    const modal = elements.incidentModal;
    const form = document.getElementById('incidentForm');
    const title = document.getElementById('incidentModalTitle');
    
    form.reset();
    
    if (id) {
        const inc = state.incidents.find(i => i.id === id);
        if (inc) {
            title.innerHTML = '<i class="ri-edit-line"></i> Modifier l\'Incident';
            document.getElementById('incidentId').value = inc.id;
            document.getElementById('incTitle').value = inc.title;
            document.getElementById('incType').value = inc.type;
            document.getElementById('incSeverity').value = inc.severity;
            document.getElementById('incStatus').value = inc.status;
            document.getElementById('incDescription').value = inc.description;
            document.getElementById('incRegion').value = inc.region;
            document.getElementById('incLocation').value = inc.location;
            document.getElementById('incVictims').value = inc.victims;
            document.getElementById('incInjured').value = inc.injured;
            document.getElementById('incMissing').value = inc.missing;
            document.getElementById('incArrested').value = inc.arrested;
        }
    } else {
        title.innerHTML = '<i class="ri-error-warning-line"></i> Nouvel Incident';
    }
    
    modal.classList.add('active');
}

function closeIncidentModal() {
    elements.incidentModal.classList.remove('active');
}

// ===================================
// ANALYTICS & CHARTS
// ===================================

function renderAnalytics() {
    renderActivityList();
    renderAnalystsList();
    initCharts();
}

function renderActivityList() {
    const activities = [
        { type: 'created', text: '<strong>SIG-2025-0019</strong> créé - Réunion clandestine signalée', time: '13:45' },
        { type: 'escalated', text: '<strong>SIG-2025-0003</strong> escaladé en priorité critique', time: '12:00' },
        { type: 'updated', text: '<strong>INC-2025-0002</strong> mis à jour - Nouvelles preuves', time: '11:30' },
        { type: 'resolved', text: '<strong>SIG-2025-0017</strong> résolu - Désinformation contrée', time: '09:00' },
        { type: 'created', text: '<strong>INC-2025-0005</strong> déclaré - Cyberattaque majeure', time: '03:00' },
        { type: 'updated', text: '<strong>SIG-2025-0008</strong> assigné à Agent ANSE-003', time: 'Hier, 20:15' },
        { type: 'resolved', text: '<strong>SIG-2025-0011</strong> résolu - Distributeur interpellé', time: 'Hier, 16:20' }
    ];
    
    elements.activityList.innerHTML = activities.map(a => `
        <div class="activity-item">
            <div class="activity-icon ${a.type}">
                <i class="ri-${a.type === 'created' ? 'add' : a.type === 'updated' ? 'edit' : a.type === 'resolved' ? 'check' : 'arrow-up'}-line"></i>
            </div>
            <div class="activity-content">
                <div class="activity-text">${a.text}</div>
                <div class="activity-time">${a.time}</div>
            </div>
        </div>
    `).join('');
}

function renderAnalystsList() {
    const analysts = [
        { ...getAgent('agent_003'), count: 28 },
        { ...getAgent('agent_001'), count: 24 },
        { ...getAgent('agent_002'), count: 21 },
        { ...getAgent('agent_004'), count: 18 },
        { ...getAgent('agent_005'), count: 15 }
    ];
    
    elements.analystsList.innerHTML = analysts.map((a, i) => `
        <div class="analyst-item">
            <div class="analyst-rank">${i + 1}</div>
            <div class="analyst-avatar">${a.avatar}</div>
            <div class="analyst-info">
                <div class="analyst-name">${a.fullName}</div>
                <div class="analyst-role">${a.role}</div>
            </div>
            <div class="analyst-stats">
                <div class="analyst-count">${a.count}</div>
                <div class="analyst-label">traités</div>
            </div>
        </div>
    `).join('');
}

function initCharts() {
    // Type distribution chart
    const typeCtx = document.getElementById('typeChart')?.getContext('2d');
    if (typeCtx) {
        const typeCounts = {};
        state.signalements.forEach(s => {
            typeCounts[s.type] = (typeCounts[s.type] || 0) + 1;
        });
        
        new Chart(typeCtx, {
            type: 'doughnut',
            data: {
                labels: Object.keys(typeCounts).map(k => getLabel('types', k)),
                datasets: [{
                    data: Object.values(typeCounts),
                    backgroundColor: [
                        '#3498db', '#e67e22', '#e74c3c', '#27ae60',
                        '#9b59b6', '#f1c40f', '#1abc9c', '#607d8b'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: { boxWidth: 12, padding: 15 }
                    }
                }
            }
        });
    }
    
    // Timeline chart
    const timelineCtx = document.getElementById('timelineChart')?.getContext('2d');
    if (timelineCtx) {
        const days = ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'];
        new Chart(timelineCtx, {
            type: 'line',
            data: {
                labels: days,
                datasets: [
                    {
                        label: 'Signalements',
                        data: [3, 5, 4, 6, 8, 2, 1],
                        borderColor: '#2274a5',
                        backgroundColor: 'rgba(34, 116, 165, 0.1)',
                        fill: true,
                        tension: 0.4
                    },
                    {
                        label: 'Incidents',
                        data: [1, 0, 2, 1, 1, 0, 0],
                        borderColor: '#e74c3c',
                        backgroundColor: 'rgba(231, 76, 60, 0.1)',
                        fill: true,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top' }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    }
    
    // Region chart
    const regionCtx = document.getElementById('regionChart')?.getContext('2d');
    if (regionCtx) {
        const regionCounts = {};
        state.signalements.forEach(s => {
            const region = getLabel('regions', s.region);
            regionCounts[region] = (regionCounts[region] || 0) + 1;
        });
        
        const sortedRegions = Object.entries(regionCounts)
            .sort((a, b) => b[1] - a[1])
            .slice(0, 8);
        
        new Chart(regionCtx, {
            type: 'bar',
            data: {
                labels: sortedRegions.map(r => r[0]),
                datasets: [{
                    label: 'Signalements',
                    data: sortedRegions.map(r => r[1]),
                    backgroundColor: '#2274a5'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                plugins: {
                    legend: { display: false }
                }
            }
        });
    }
    
    // Status chart
    const statusCtx = document.getElementById('statusChart')?.getContext('2d');
    if (statusCtx) {
        const statusCounts = {};
        state.signalements.forEach(s => {
            statusCounts[s.status] = (statusCounts[s.status] || 0) + 1;
        });
        
        new Chart(statusCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(statusCounts).map(k => getLabel('statuses', k)),
                datasets: [{
                    label: 'Nombre',
                    data: Object.values(statusCounts),
                    backgroundColor: ['#3498db', '#f39c12', '#27ae60', '#9b59b6', '#00897b', '#607d8b']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    }
}

// ===================================
// TOAST NOTIFICATIONS
// ===================================

function showToast(type, title, message) {
    const icons = {
        success: 'ri-check-line',
        warning: 'ri-alert-line',
        error: 'ri-close-circle-line',
        info: 'ri-information-line'
    };
    
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.innerHTML = `
        <div class="toast-icon">
            <i class="${icons[type]}"></i>
        </div>
        <div class="toast-content">
            <div class="toast-title">${title}</div>
            <div class="toast-message">${message}</div>
        </div>
        <button class="toast-close" onclick="this.parentElement.remove()">
            <i class="ri-close-line"></i>
        </button>
    `;
    
    elements.toastContainer.appendChild(toast);
    
    setTimeout(() => {
        toast.style.animation = 'toastSlideIn 0.3s ease reverse';
        setTimeout(() => toast.remove(), 300);
    }, 5000);
}

// ===================================
// EVENT LISTENERS
// ===================================

function initEventListeners() {
    // Sidebar toggle
    elements.toggleSidebar?.addEventListener('click', () => {
        elements.sidebar.classList.toggle('collapsed');
    });
    
    elements.mobileMenuBtn?.addEventListener('click', () => {
        elements.sidebar.classList.toggle('mobile-open');
    });
    
    // Tabs
    elements.tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tab = btn.dataset.tab;
            
            elements.tabBtns.forEach(b => b.classList.remove('active'));
            elements.tabContents.forEach(c => c.classList.remove('active'));
            
            btn.classList.add('active');
            document.getElementById(`${tab}-tab`)?.classList.add('active');
            
            state.activeTab = tab;
            
            if (tab === 'analytics') {
                renderAnalytics();
            }
        });
    });
    
    // Signalement filters
    const debouncedFilter = debounce(filterSignalements, 300);
    elements.searchInput?.addEventListener('input', debouncedFilter);
    elements.typeFilter?.addEventListener('change', filterSignalements);
    elements.priorityFilter?.addEventListener('change', filterSignalements);
    elements.statusFilter?.addEventListener('change', filterSignalements);
    elements.regionFilter?.addEventListener('change', filterSignalements);
    elements.periodFilter?.addEventListener('change', filterSignalements);
    
    elements.resetFilters?.addEventListener('click', () => {
        elements.searchInput.value = '';
        elements.typeFilter.value = '';
        elements.priorityFilter.value = '';
        elements.statusFilter.value = '';
        elements.regionFilter.value = '';
        elements.periodFilter.value = '';
        filterSignalements();
    });
    
    elements.pageSize?.addEventListener('change', (e) => {
        state.pageSize = parseInt(e.target.value);
        state.currentPage = 1;
        renderSignalementTable();
    });
    
    // Incident filters
    const debouncedIncidentFilter = debounce(filterIncidents, 300);
    elements.incidentSearchInput?.addEventListener('input', debouncedIncidentFilter);
    elements.incidentTypeFilter?.addEventListener('change', filterIncidents);
    elements.severityFilter?.addEventListener('change', filterIncidents);
    elements.incidentStatusFilter?.addEventListener('change', filterIncidents);
    elements.incidentRegionFilter?.addEventListener('change', filterIncidents);
    elements.incidentPeriodFilter?.addEventListener('change', filterIncidents);
    
    document.getElementById('resetIncidentFilters')?.addEventListener('click', () => {
        elements.incidentSearchInput.value = '';
        elements.incidentTypeFilter.value = '';
        elements.severityFilter.value = '';
        elements.incidentStatusFilter.value = '';
        elements.incidentRegionFilter.value = '';
        elements.incidentPeriodFilter.value = '';
        filterIncidents();
    });
    
    // Select all checkbox
    elements.selectAll?.addEventListener('change', (e) => {
        const checkboxes = document.querySelectorAll('.row-checkbox');
        checkboxes.forEach(cb => {
            cb.checked = e.target.checked;
            const row = cb.closest('tr');
            const id = parseInt(row.dataset.id);
            if (e.target.checked) {
                state.selectedItems.add(id);
                row.classList.add('selected');
            } else {
                state.selectedItems.delete(id);
                row.classList.remove('selected');
            }
        });
    });
    
    // Row checkboxes (delegated)
    elements.signalementTableBody?.addEventListener('change', (e) => {
        if (e.target.classList.contains('row-checkbox')) {
            const row = e.target.closest('tr');
            const id = parseInt(row.dataset.id);
            if (e.target.checked) {
                state.selectedItems.add(id);
                row.classList.add('selected');
            } else {
                state.selectedItems.delete(id);
                row.classList.remove('selected');
            }
        }
    });
    
    // Sortable headers
    document.querySelectorAll('.data-table th.sortable').forEach(th => {
        th.addEventListener('click', () => {
            sortTable(th.dataset.sort);
        });
    });
    
    // New signalement button
    elements.newSignalementBtn?.addEventListener('click', () => openSignalementModal());
    
    // Modal close buttons
    document.getElementById('closeModal')?.addEventListener('click', closeSignalementModal);
    document.getElementById('cancelModal')?.addEventListener('click', closeSignalementModal);
    document.getElementById('closeViewModal')?.addEventListener('click', closeViewModal);
    document.getElementById('closeViewBtn')?.addEventListener('click', closeViewModal);
    document.getElementById('closeIncidentModal')?.addEventListener('click', closeIncidentModal);
    document.getElementById('cancelIncidentModal')?.addEventListener('click', closeIncidentModal);
    
    // Form submit
    document.getElementById('signalementForm')?.addEventListener('submit', saveSignalement);
    
    // Convert to incident
    document.getElementById('convertToIncident')?.addEventListener('click', () => {
        closeViewModal();
        openIncidentModal();
        showToast('info', 'Conversion', 'Remplissez les détails de l\'incident basé sur le signalement.');
    });
    
    // Export button
    elements.exportAllBtn?.addEventListener('click', () => {
        showToast('info', 'Export', 'Fonctionnalité d\'export en cours de développement.');
    });
    
    // Refresh button
    elements.refreshBtn?.addEventListener('click', () => {
        elements.loadingOverlay.classList.add('active');
        setTimeout(() => {
            filterSignalements();
            filterIncidents();
            renderStats();
            elements.loadingOverlay.classList.remove('active');
            showToast('success', 'Actualisé', 'Les données ont été mises à jour.');
        }, 800);
    });
    
    // Click outside modal to close
    [elements.signalementModal, elements.viewModal, elements.incidentModal].forEach(modal => {
        modal?.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });
    
    // File upload
    const fileUploadArea = document.getElementById('fileUploadArea');
    const fileInput = document.getElementById('fileInput');
    
    fileUploadArea?.addEventListener('click', () => fileInput?.click());
    fileUploadArea?.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileUploadArea.classList.add('dragover');
    });
    fileUploadArea?.addEventListener('dragleave', () => {
        fileUploadArea.classList.remove('dragover');
    });
    fileUploadArea?.addEventListener('drop', (e) => {
        e.preventDefault();
        fileUploadArea.classList.remove('dragover');
        handleFiles(e.dataTransfer.files);
    });
    fileInput?.addEventListener('change', (e) => {
        handleFiles(e.target.files);
    });
    
    // Global search
    document.getElementById('globalSearch')?.addEventListener('input', debounce((e) => {
        const query = e.target.value;
        if (state.activeTab === 'signalements') {
            elements.searchInput.value = query;
            filterSignalements();
        } else if (state.activeTab === 'incidents') {
            elements.incidentSearchInput.value = query;
            filterIncidents();
        }
    }, 300));
    
    // Keyboard shortcuts
    document.addEventListener('keydown', (e) => {
        // Escape to close modals
        if (e.key === 'Escape') {
            closeSignalementModal();
            closeViewModal();
            closeIncidentModal();
        }
        
        // Ctrl+N for new signalement
        if (e.ctrlKey && e.key === 'n') {
            e.preventDefault();
            openSignalementModal();
        }
    });
}

function handleFiles(files) {
    const uploadedFiles = document.getElementById('uploadedFiles');
    Array.from(files).forEach(file => {
        const fileEl = document.createElement('div');
        fileEl.className = 'uploaded-file';
        fileEl.innerHTML = `
            <i class="ri-file-line"></i>
            <span>${file.name}</span>
            <i class="ri-close-line remove-file"></i>
        `;
        fileEl.querySelector('.remove-file').addEventListener('click', () => fileEl.remove());
        uploadedFiles?.appendChild(fileEl);
    });
}

// ===================================
// INITIALIZATION
// ===================================

function init() {
    // Show loading
    elements.loadingOverlay.classList.add('active');
    
    // Initialize data
    setTimeout(() => {
        filterSignalements();
        filterIncidents();
        renderStats();
        
        // Hide loading
        elements.loadingOverlay.classList.remove('active');
        
        // Show welcome toast
        showToast('info', 'Bienvenue', 'Module Signalements & Incidents chargé.');
    }, 500);
    
    // Initialize event listeners
    initEventListeners();
}

// Start the application
document.addEventListener('DOMContentLoaded', init);

// Expose functions globally for onclick handlers
window.openSignalementModal = openSignalementModal;
window.viewSignalement = viewSignalement;
window.editSignalement = editSignalement;
window.deleteSignalement = deleteSignalement;
window.viewIncident = viewIncident;
window.editIncident = editIncident;
window.goToPage = goToPage;
window.goToIncidentPage = goToIncidentPage;
window.sortTable = sortTable;