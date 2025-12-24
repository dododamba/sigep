# 🇹🇩 Dashboard Top Management - SIGEP Tchad

## 📦 Module Dashboard Stratégique pour le Top Management

Ce module fournit un dashboard stratégique dédié au top management du SIGEP Tchad, avec des métriques avancées, une analyse des risques globaux et des tendances de croissance.

---

## 🎯 Fonctionnalités Principales

### 📊 Vue d'Ensemble Stratégique
- **KPIs Principaux** (4 cartes animées)
  - Total des projets (actifs, terminés, en retard)
  - Budget total en FCFA
  - Taux de décaissement global
  - Réalisation physique moyenne

- **Graphiques Interactifs** (Chart.js)
  - Répartition par secteur (doughnut chart)
  - Sources de financement (pie chart)
  - Statuts des projets (bar chart)
  - Évolution mensuelle (line chart)

### 💼 Métriques Top Management (Exclusives)
- **Valeur du Portefeuille** : Montant total des financements
- **Efficacité du Financement** : Ratio fonds activés / budget total
- **Taux de Respect des Délais** : % projets dans les temps
- **Projets par Institution** : Moyenne de projets par institution

### ⚠️ Analyse des Risques Globaux
- Distribution des risques (Faible / Moyen / Élevé)
- Pourcentages et compteurs par niveau de risque
- Alertes pour projets critiques nécessitant action immédiate

### 📈 Tendances et Croissance
- Croissance des projets (année N vs année N-1)
- Croissance du budget (comparaison annuelle)
- Badges de tendance (positive / négative)

### 📋 Tableaux Détaillés
- Top 10 projets par budget
- Projets critiques (à risque élevé)
- Performance par institution (classement par taux de succès)
- Audits récents (10 derniers)

### 🔍 Filtres Avancés
- Par année
- Par institution
- Par secteur
- Par statut

---

## 🚀 Installation

### 1. Copier les fichiers

```bash
# Contrôleur
cp src/Controller/TopManagementController.php votre_projet/src/Controller/

# Templates
cp -r templates/top_management votre_projet/templates/
cp -r templates/components votre_projet/templates/

# CSS
mkdir -p votre_projet/public/css
cp public/css/dashboard.css votre_projet/public/css/

# Configuration
cp config/routes_top_management.yaml votre_projet/config/
```

### 2. Configuration de la sécurité

Dans `config/packages/security.yaml` :

```yaml
security:
    role_hierarchy:
        ROLE_SUPER_ADMIN: [ROLE_ADMIN, ROLE_MANAGER, ROLE_USER]
        ROLE_ADMIN: [ROLE_MANAGER, ROLE_USER]
        ROLE_MANAGER: ROLE_USER
    
    access_control:
        # Dashboard top management - ROLE_MANAGER requis
        - { path: ^/top-management, roles: ROLE_MANAGER }
```

### 3. Activer les routes

Dans `config/routes.yaml` :

```yaml
top_management:
    resource: routes_top_management.yaml
```

### 4. Tester

```bash
# Démarrer le serveur
symfony server:start

# Accéder au dashboard top management
http://localhost:8000/top-management

# Vous devez être connecté avec un compte ayant ROLE_MANAGER ou supérieur
```

---

## 📚 Structure des Fichiers

```
sigep_top_management/
├── src/
│   └── Controller/
│       └── TopManagementController.php       ✅ Contrôleur principal (850+ lignes)
│
├── templates/
│   ├── top_management/
│   │   ├── dashboard.html.twig              ✅ Dashboard principal
│   │   ├── project_details.html.twig        ✅ Détails projet
│   │   └── financing_details.html.twig      ✅ Détails financement
│   │
│   └── components/
│       └── _kpi_card.html.twig              ✅ Composant KPI réutilisable
│
├── public/
│   └── css/
│       └── dashboard.css                     ✅ Styles complets (1700+ lignes)
│
├── config/
│   └── routes_top_management.yaml           ✅ Configuration routes
│
└── docs/
    ├── README.md                             ✅ Ce fichier
    ├── INSTALLATION.md                       ✅ Guide installation détaillé
    └── API.md                                ✅ Documentation API
```

---

## 🛤️ Routes Disponibles

| Route | Méthode | Nom | Accès | Description |
|-------|---------|-----|-------|-------------|
| `/top-management/` | GET | `app_top_management_dashboard` | ROLE_MANAGER | Dashboard principal |
| `/top-management/project/{id}` | GET | `app_top_management_project_detail` | ROLE_MANAGER | Détails d'un projet |
| `/top-management/financing/{id}` | GET | `app_top_management_financing_detail` | ROLE_MANAGER | Détails d'un financement |
| `/top-management/api/kpis` | GET | `app_top_management_api_kpis` | ROLE_MANAGER | KPIs en JSON |
| `/top-management/api/charts` | GET | `app_top_management_api_charts` | ROLE_MANAGER | Graphiques en JSON |

---

## 🔧 Méthodes du Contrôleur

### Actions Publiques
```php
dashboard(Request $request): Response
    // Dashboard principal du top management

projectDetail(int $id): Response
    // Détails d'un projet spécifique

financingDetail(int $id): Response
    // Détails d'un financement spécifique

apiKpis(Request $request): JsonResponse
    // API KPIs en JSON

apiCharts(Request $request): JsonResponse
    // API graphiques en JSON
```

### Méthodes de Calcul Privées

#### KPIs et Statistiques
- `calculateKPIs(array $projects, array $financements): array`
- `calculateSectorStats(array $projects): array`
- `calculateFinancingSourceStats(array $financements): array`
- `calculateStatusStats(array $projects): array`
- `calculateMonthlyEvolution(array $projects, array $financements): array`
- `calculateInstitutionPerformance(array $institutions, array $projects): array`

#### Métriques Management
- `calculateManagementMetrics(array $projects, array $financements, array $institutions): array`
- `calculateGlobalRiskAnalysis(array $projects): array`
- `calculateTrends(array $projects, array $financements): array`

#### Analyses de Projet
- `assessProjectRisk($project): string` → Retourne 'Faible', 'Moyen', ou 'Élevé'
- `isProjectDelayed($project): bool`
- `calculateDaysRemaining($project): ?int`
- `calculateProjectDisbursementRate($project): float`

---

## 📊 APIs REST

### GET /top-management/api/kpis

Retourne les KPIs principaux en JSON.

**Paramètres de requête :**
- `year` (optionnel) : Année de filtrage
- `institution` (optionnel) : ID de l'institution
- `status` (optionnel) : Statut des projets
- `sector` (optionnel) : Secteur d'activité

**Réponse :**
```json
{
  "success": true,
  "data": {
    "totalProjects": 150,
    "activeProjects": 85,
    "completedProjects": 50,
    "totalBudget": 5000000000,
    "totalDisbursed": 3500000000,
    "remainingBudget": 1500000000,
    "disbursementRate": 70.0,
    "avgPhysicalProgress": 65.5
  }
}
```

### GET /top-management/api/charts

Retourne les données des graphiques en JSON.

**Paramètres de requête :**
- `type` : Type de graphique ('all', 'sector', 'financing', 'status', 'evolution')
- Mêmes filtres que KPIs

**Réponse :**
```json
{
  "success": true,
  "data": {
    "sector": {
      "Santé": {"count": 25, "budget": 800000000, "avgProgress": 70},
      "Éducation": {"count": 30, "budget": 1200000000, "avgProgress": 65}
    },
    "financing": { ... },
    "status": { ... },
    "evolution": { ... }
  }
}
```

---

## 🎨 Design & Thème

### Couleurs de l'Armoirie du Tchad
```css
Bleu dominant : #002664, #004d99, #003d96
Or accent : #daa520, #fecb00, #b8860b
Rouge : #c41e3a, #8b1a1a
```

### Typographie
- **Titres** : Playfair Display (élégant, institutionnel)
- **Contenu** : DM Sans (moderne, lisible)

### Composants UI
- Cartes avec ombre et hover effects
- Animations fluides (counter, transitions)
- Design 100% responsive
- Icônes Lucide élégantes
- Graphiques Chart.js professionnels

---

## 📱 Responsive Design

### Breakpoints
- **Mobile** (320px+) : Vue simplifiée, 1 colonne
- **Tablette** (768px+) : 2 colonnes, menus adaptés
- **Desktop** (1024px+) : Grille complète
- **Large** (1600px+) : Vue maximale

---

## ⚡ Performance

### Optimisations
- ✅ CSS minifiable (~40KB)
- ✅ Lazy loading des graphiques
- ✅ Pagination des tableaux
- ✅ Requêtes SQL optimisées
- ✅ Cache Symfony compatible

### Métriques Cibles
- ⏱️ Chargement page : < 2s
- 📊 Nombre de requêtes : < 25
- 📦 Taille CSS : 40KB
- 🎯 Score Lighthouse : > 90

---

## 🔐 Sécurité

### Niveaux d'Accès

```
ROLE_USER
  └── Pas d'accès au top management
      
ROLE_MANAGER
  └── Accès complet au dashboard top management
      └── Peut voir toutes les métriques stratégiques
      
ROLE_ADMIN
  └── Accès complet (hérite de ROLE_MANAGER)
      
ROLE_SUPER_ADMIN
  └── Accès complet (hérite de ROLE_ADMIN)
```

### Protections Implémentées
- ✅ Authentification Symfony requise
- ✅ Contrôle d'accès par rôle (#[IsGranted('ROLE_MANAGER')])
- ✅ CSRF protection sur formulaires
- ✅ Validation des entrées
- ✅ Sanitization des sorties HTML

---

## 🆘 Dépannage

### Problème : "Access Denied" sur /top-management

**Solution :**
```bash
# Vérifier les rôles de l'utilisateur
php bin/console doctrine:query:sql "SELECT email, roles FROM user WHERE id = 1"

# Attribuer le rôle ROLE_MANAGER
# Via l'interface admin ou SQL
UPDATE user SET roles = '["ROLE_MANAGER"]' WHERE id = 1;
```

### Problème : CSS ne charge pas

**Solution :**
```bash
# Vérifier que le fichier existe
ls -la public/css/dashboard.css

# Si absent, copier depuis l'archive
cp sigep_top_management/public/css/dashboard.css public/css/

# Vider le cache
php bin/console cache:clear
```

### Problème : Routes non trouvées

**Solution :**
```bash
# Vérifier que les routes sont enregistrées
php bin/console debug:router | grep top_management

# Si absent, ajouter dans config/routes.yaml :
top_management:
    resource: routes_top_management.yaml
```

### Problème : Erreur avec les repositories

**Solution :**
```bash
# Vérifier que toutes les entités existent
php bin/console doctrine:mapping:info

# Générer les repositories manquants
php bin/console make:entity --regenerate

# Mettre à jour la base de données
php bin/console doctrine:migrations:migrate
```

---

## 📋 Checklist d'Installation

- [ ] Copier TopManagementController.php
- [ ] Copier les templates (dashboard, project_details, financing_details)
- [ ] Copier le composant _kpi_card.html.twig
- [ ] Copier dashboard.css
- [ ] Copier routes_top_management.yaml
- [ ] Configurer security.yaml (ROLE_MANAGER)
- [ ] Activer les routes dans routes.yaml
- [ ] Vider le cache Symfony
- [ ] Tester l'accès avec un compte ROLE_MANAGER
- [ ] Vérifier les graphiques Chart.js
- [ ] Vérifier les filtres
- [ ] Tester les détails projet
- [ ] Tester les détails financement
- [ ] Tester les APIs REST

---

## 🎯 Différences avec le Dashboard Standard

| Fonctionnalité | Dashboard Standard | Dashboard Top Management |
|----------------|-------------------|-------------------------|
| **Accès** | ROLE_USER | ROLE_MANAGER |
| **Route** | /dashboard | /top-management |
| **KPIs Standard** | ✅ Oui | ✅ Oui |
| **Métriques Management** | ❌ Non | ✅ Oui |
| **Analyse Risques Globaux** | ❌ Non | ✅ Oui |
| **Tendances & Croissance** | ❌ Non | ✅ Oui |
| **Valeur Portefeuille** | ❌ Non | ✅ Oui |
| **Efficacité Financement** | ❌ Non | ✅ Oui |

---

## 📚 Ressources Supplémentaires

- [INSTALLATION.md](INSTALLATION.md) - Guide installation détaillé
- [API.md](API.md) - Documentation complète des APIs
- [TROUBLESHOOTING.md](TROUBLESHOOTING.md) - Guide de dépannage avancé

---

## 🎉 Résumé

✅ **Dashboard stratégique** dédié au top management  
✅ **ROLE_MANAGER** requis pour l'accès  
✅ **3 métriques exclusives** (portfolio, efficacité, tendances)  
✅ **Analyse des risques** complète  
✅ **Tendances de croissance** année sur année  
✅ **APIs REST** pour intégrations  
✅ **Design responsive** avec couleurs du Tchad  
✅ **Performance optimisée** < 2s  
✅ **Sécurité** par rôles Symfony  
✅ **Documentation** complète  

**Le module est prêt à être déployé ! 🚀**

---

**Développé avec ❤️ pour la République du Tchad 🇹🇩**  
*Pour la modernisation de l'administration publique tchadienne*
