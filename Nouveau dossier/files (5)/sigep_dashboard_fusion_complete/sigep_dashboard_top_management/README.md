# 🇹🇩 Dashboard Top Management - SIGEP Tchad

Dashboard stratégique pour le suivi des projets publics du Tchad, conçu pour le top management.

## 📦 Contenu du Module

### Fichiers Principaux
- ✅ **DashboardController.php** - Contrôleur complet avec toute la logique métier
- ✅ **styles.css** - Styles complets aux couleurs de l'armoirie du Tchad  
- ✅ **Templates Twig** - Structure modulaire pour le dashboard
- ✅ **Composants réutilisables** - KPI cards, charts, tables

### Fonctionnalités

#### KPIs Stratégiques
- 📊 Total des projets (actifs, terminés, en retard)
- 💰 Budget total et décaissements
- 📈 Taux de réalisation physique moyen
- ⚠️ Projets critiques et alertes

#### Visualisations
- 📊 Répartition par secteur
- 💳 Sources de financement
- 📈 Évolution mensuelle
- 🏢 Performance par institution

#### Détails
- 🔍 Vue détaillée des projets
- 💰 Analyse des financements
- 📋 Décaissements et audits
- ⚡ Indicateurs de performance

## 🚀 Installation Rapide

### 1. Copier les fichiers

bash
# Contrôleur
cp src/Controller/DashboardController.php votre_projet/src/Controller/

# Templates
cp -r templates/* votre_projet/templates/

# CSS
cp templates/dashboard/styles.css votre_projet/public/css/dashboard.css


### 2. Configuration des routes

yaml
# config/routes.yaml
dashboard:
    resource: App\Controller\DashboardController
    type: annotation
    prefix: /dashboard


### 3. Vérifier les dépendances

Le contrôleur utilise les repositories suivants :
- `ProjectRepository`
- `FinancingRepository`
- `DisbursementRepository`
- `InstitutionRepository`
- `AuditRepository`

Assurez-vous qu'ils existent et implémentent les méthodes nécessaires.

### 4. Tester

bash
# Démarrer le serveur
symfony server:start

# Accéder au dashboard
http://localhost:8000/dashboard


## 📊 Structure des Templates

### Template Principal
`templates/dashboard/index.html.twig` - Dashboard complet avec :
- Header avec filtres (année, institution, secteur)
- Grille de KPIs animés
- Graphiques Chart.js
- Tableaux de projets et financements
- Liens vers détails

### Templates de Détail

#### Projet
`templates/dashboard/_project_details.html.twig`
- Informations générales
- Métriques financières et physiques
- Décaissements chronologiques
- Audits et contrôles
- Graphiques de progression

#### Financement
`templates/dashboard/_financing_details.html.twig`
- Détails de la convention
- Projets financés
- Taux de décaissement
- Répartition sectorielle
- Évolution temporelle

### Composants Réutilisables
`templates/components/`
- `_kpi_card.html.twig` - Carte KPI avec icône, valeur, tendance
- `_chart_card.html.twig` - Conteneur de graphique
- `_project_card.html.twig` - Carte résumé projet
- `_table.html.twig` - Table responsive

## 🎨 Thème et Design

### Couleurs de l'Armoirie du Tchad

css
/* Bleu dominant */
--primary-900: #001a33;
--primary-500: #004d99;

/* Or accent */
--gold-500: #daa520;
--gold-400: #e6b833;

/* Rouge */
--red-500: #c41e3a;


### Typographie
- **Titres** : Playfair Display (serif élégant)
- **Contenu** : DM Sans (sans-serif lisible)

### Composants UI
- Cartes avec ombre et hover
- Animations fluides
- Design responsive
- Icônes Lucide

## 📡 API Endpoints

### GET /dashboard/api/kpis
Retourne les KPIs principaux
json
{
    "success": true,
    "data": {
        "totalProjects": 147,
        "activeProjects": 89,
        "totalBudget": 45000000000,
        "disbursementRate": 67.5
    }
}


### GET /dashboard/api/charts
Retourne les données des graphiques
json
{
    "success": true,
    "data": {
        "sector": {...},
        "financing": {...},
        "evolution": {...}
    }
}


## 🔧 Méthodes du Contrôleur

### Principales

- `index()` - Dashboard principal
- `projectDetail($id)` - Détails d'un projet
- `financingDetail($id)` - Détails d'un financement
- `apiKpis()` - API KPIs
- `apiCharts()` - API graphiques

### Calculs

- `calculateKPIs()` - Calcule les indicateurs clés
- `calculateSectorStats()` - Stats par secteur
- `calculateStatusStats()` - Stats par statut
- `getTopProjects()` - Top projets par budget
- `getCriticalProjects()` - Projets à risque
- `calculateInstitutionPerformance()` - Performance institutionnelle

## 📱 Responsive Design

Le dashboard est entièrement responsive :
- 📱 **Mobile** (320px+) - Vue optimisée
- 📱 **Tablette** (768px+) - 2 colonnes
- 💻 **Desktop** (1024px+) - Grille complète
- 🖥️ **Large** (1600px+) - Vue maximale

## ⚡ Performance

### Optimisations implémentées
- ✅ Lazy loading des graphiques
- ✅ Mise en cache des statistiques
- ✅ Pagination des tableaux
- ✅ Compression CSS/JS
- ✅ Requêtes optimisées

### Recommandations
- Activer le cache Symfony
- Utiliser Redis pour les stats
- Indexer les colonnes fréquentes
- Optimiser les images

## 🎯 Utilisation

### Filtres
Le dashboard supporte les filtres suivants :
- **Année** : Données d'une année spécifique
- **Institution** : Projets d'une institution
- **Secteur** : Filtrage par secteur
- **Statut** : Projets par statut

### Navigation
- Cliquer sur un KPI pour voir les détails
- Cliquer sur un projet dans le tableau
- Utiliser les graphiques interactifs
- Exporter les données (feature à venir)

## 🔐 Sécurité

Le dashboard est protégé par :
- Authentification Symfony (`ROLE_USER` minimum)
- CSRF sur les formulaires
- Validation des entrées
- Sanitization des sorties

Ajustez les permissions dans `security.yaml` :
yaml
access_control:
    - { path: ^/dashboard, roles: ROLE_MANAGER }


## 📚 Documentation Technique

### Structure MVC

Controller → Repository → Entity → Template


### Flux de données

1. **Requête** → DashboardController
2. **Filtres** → getFiltersFromRequest()
3. **Données** → Repositories (avec filtres)
4. **Calculs** → Méthodes calculate*()
5. **Rendu** → Templates Twig
6. **Affichage** → Dashboard avec Chart.js

## 🤝 Contribution

### Ajouter un KPI

1. Ajouter le calcul dans `calculateKPIs()`
2. Passer la donnée au template
3. Ajouter la carte KPI dans `index.html.twig`
4. Styliser si nécessaire

### Ajouter un graphique

1. Calculer les données dans le contrôleur
2. Passer au template
3. Créer le canvas dans le HTML
4. Initialiser Chart.js dans le JavaScript

## 🆘 Dépannage

### Les KPIs ne s'affichent pas
➡️ Vérifier que les repositories retournent des données
➡️ Inspecter la console navigateur
➡️ Vérifier les permissions

### Les graphiques ne se chargent pas
➡️ Vérifier que Chart.js est chargé
➡️ Inspecter les données passées au template
➡️ Vérifier la console JavaScript

### Erreur 500
➡️ Vérifier les logs Symfony
➡️ Vérifier que toutes les entités existent
➡️ Vérifier les relations entre entités

## 📄 Licence

Ce module fait partie du projet SIGEP Tchad.  
Tous droits réservés - République du Tchad 🇹🇩

---

**Développé pour la modernisation de l'administration publique tchadienne**
