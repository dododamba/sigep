# 🇹🇩 Dashboard SIGEP Tchad - Version Fusionnée

## 📦 Deux Dashboards en Un Contrôleur

Ce module contient **2 dashboards distincts** dans un seul contrôleur :

### 1. 📊 Dashboard Principal (index.html.twig)
**Route :** `/dashboard/`  
**Accès :** `ROLE_USER` minimum  
**Usage :** Vue générale pour tous les utilisateurs

### 2. 📈 Dashboard Top Management (management.html.twig)
**Route :** `/dashboard/management`  
**Accès :** `ROLE_MANAGER` minimum  
**Usage :** Vue stratégique pour le management

---

## 🎯 Différences entre les Deux Dashboards

### Dashboard Principal (`/dashboard/`)
Vue générale du système SIGEP avec :
- ✅ KPIs principaux (4 cartes)
- ✅ Graphiques standards (secteur, financement, statuts, évolution)
- ✅ Top projets par budget
- ✅ Projets critiques
- ✅ Performance institutionnelle
- ✅ Audits récents

### Dashboard Top Management (`/dashboard/management`)
Vue stratégique avec **toutes les fonctionnalités du dashboard principal** PLUS :

#### 💼 Métriques Management
- **Valeur du Portefeuille** : Montant total des financements
- **Efficacité du Financement** : Ratio fonds activés / budget total
- **Taux de Respect des Délais** : % projets dans les temps
- **Projets par Institution** : Moyenne de projets par institution

#### ⚠️ Analyse des Risques Globaux
- **Projets à Risque Faible** : Nombre et pourcentage
- **Projets à Risque Moyen** : Nombre et pourcentage
- **Projets à Risque Élevé** : Nombre et pourcentage
- **Alertes Critiques** : Projets nécessitant action immédiate

#### 📈 Tendances et Croissance
- **Croissance des Projets** : Comparaison année en cours vs année dernière
- **Croissance du Budget** : Évolution du budget total
- **Indicateurs de Performance** : Tendances positives/négatives

---

## 🚀 Installation Rapide

### 1. Copier le Contrôleur Fusionné

```bash
# Remplacer l'ancien contrôleur par le nouveau
cp src/Controller/DashboardController_FUSION.php votre_projet/src/Controller/DashboardController.php
```

### 2. Copier les Templates

```bash
# Copier les deux templates
cp templates/dashboard/index.html.twig votre_projet/templates/dashboard/
cp templates/dashboard/management.html.twig votre_projet/templates/dashboard/

# Copier les templates de détails
cp templates/dashboard/_project_details.html.twig votre_projet/templates/dashboard/
cp templates/dashboard/_financing_details.html.twig votre_projet/templates/dashboard/

# Copier le composant
cp templates/components/_kpi_card.html.twig votre_projet/templates/components/
```

### 3. Copier les Styles

```bash
# CSS complet avec styles des deux dashboards
mkdir -p votre_projet/public/css
cp templates/dashboard/styles.css votre_projet/public/css/dashboard.css
```

### 4. Configuration de la Sécurité

Dans `config/packages/security.yaml` :

```yaml
security:
    role_hierarchy:
        ROLE_ADMIN: ROLE_MANAGER
        ROLE_MANAGER: ROLE_USER
    
    access_control:
        # Dashboard principal - accessible à tous les utilisateurs
        - { path: ^/dashboard$, roles: ROLE_USER }
        
        # Dashboard management - réservé au management
        - { path: ^/dashboard/management, roles: ROLE_MANAGER }
        
        # Détails projets et financements
        - { path: ^/dashboard/project, roles: ROLE_USER }
        - { path: ^/dashboard/financing, roles: ROLE_USER }
```

### 5. Tester

```bash
symfony server:start

# Dashboard principal (tous les utilisateurs)
# → http://localhost:8000/dashboard

# Dashboard top management (ROLE_MANAGER requis)
# → http://localhost:8000/dashboard/management
```

---

## 📚 Structure des Fichiers

```
sigep_dashboard_top_management/
├── src/Controller/
│   └── DashboardController_FUSION.php     ✅ Contrôleur complet fusionné
│
├── templates/
│   ├── dashboard/
│   │   ├── index.html.twig               ✅ Dashboard principal
│   │   ├── management.html.twig          ✅ Dashboard top management
│   │   ├── _project_details.html.twig    ✅ Détails projet
│   │   ├── _financing_details.html.twig  ✅ Détails financement
│   │   └── styles.css                    ✅ CSS complet (2 dashboards)
│   │
│   └── components/
│       └── _kpi_card.html.twig           ✅ Composant réutilisable
│
└── docs/
    ├── FUSION_README.md                   ✅ Ce fichier
    └── INSTALLATION.md                    ✅ Guide installation détaillé
```

---

## 🔧 Routes Disponibles

### Routes Publiques (ROLE_USER)

| Route | Nom | Template | Description |
|-------|-----|----------|-------------|
| `/dashboard/` | `app_dashboard_index` | `index.html.twig` | Dashboard principal |
| `/dashboard/project/{id}` | `app_dashboard_project_detail` | `_project_details.html.twig` | Détails projet |
| `/dashboard/financing/{id}` | `app_dashboard_financing_detail` | `_financing_details.html.twig` | Détails financement |
| `/dashboard/api/kpis` | `app_dashboard_api_kpis` | JSON | API KPIs |
| `/dashboard/api/charts` | `app_dashboard_api_charts` | JSON | API graphiques |

### Routes Management (ROLE_MANAGER)

| Route | Nom | Template | Description |
|-------|-----|----------|-------------|
| `/dashboard/management` | `app_dashboard_management` | `management.html.twig` | Dashboard top management |

---

## 🎨 Navigation entre les Dashboards

### Ajouter un Lien vers Dashboard Management

Dans votre menu de navigation (pour les utilisateurs ROLE_MANAGER) :

```twig
{% if is_granted('ROLE_MANAGER') %}
    <a href="{{ path('app_dashboard_management') }}" class="nav-link">
        <i data-lucide="briefcase"></i>
        Dashboard Management
    </a>
{% endif %}
```

### Ajouter un Lien de Retour

Dans `management.html.twig`, vous pouvez ajouter un lien vers le dashboard principal :

```twig
<a href="{{ path('app_dashboard_index') }}" class="btn-back">
    <i data-lucide="arrow-left"></i>
    Retour au Dashboard Principal
</a>
```

---

## 📊 Fonctionnalités par Dashboard

### Fonctionnalités Communes (Les Deux Dashboards)

✅ KPIs Stratégiques (4 cartes animées)  
✅ Graphiques Chart.js (secteur, financement, statuts, évolution)  
✅ Filtres (année, institution, secteur, statut)  
✅ Top 10 Projets par Budget  
✅ Projets Critiques avec Niveau de Risque  
✅ Performance par Institution  
✅ Audits Récents  

### Fonctionnalités Exclusives Dashboard Management

➕ **Métriques Management** (4 cartes supplémentaires)
  - Valeur du portefeuille
  - Efficacité du financement
  - Taux de respect des délais
  - Projets par institution

➕ **Analyse des Risques Globaux**
  - Distribution des risques (faible/moyen/élevé)
  - Alertes critiques
  - Pourcentages de risque

➕ **Tendances et Croissance**
  - Croissance des projets (année en cours vs dernière)
  - Croissance du budget
  - Comparaisons annuelles

---

## 🛠️ Méthodes du Contrôleur

### Méthodes Publiques (Actions)

```php
index()                    // Dashboard principal
management()               // Dashboard top management
projectDetail($id)         // Détails d'un projet
financingDetail($id)       // Détails d'un financement
apiKpis()                  // API KPIs JSON
apiCharts()                // API graphiques JSON
```

### Méthodes Communes (Utilisées par les 2 dashboards)

```php
calculateKPIs()                         // KPIs principaux
calculateSectorStats()                  // Stats par secteur
calculateFinancingSourceStats()         // Stats par source
calculateStatusStats()                  // Stats par statut
getTopProjects()                        // Top projets
getCriticalProjects()                   // Projets critiques
calculateInstitutionPerformance()       // Performance institutions
calculateMonthlyEvolution()             // Évolution mensuelle
calculateDisbursementRate()             // Taux décaissement
```

### Méthodes Spécifiques Management

```php
calculateManagementMetrics()            // Métriques management
calculateGlobalRiskAnalysis()           // Analyse risques globaux
calculateTrends()                       // Tendances et croissance
```

---

## 🎯 Cas d'Usage

### Cas 1 : Utilisateur Standard (ROLE_USER)

**Accès :** `/dashboard/`

**Peut voir :**
- Vue d'ensemble des projets et financements
- KPIs de base
- Graphiques standards
- Liste des projets
- Détails des projets et financements

**Ne peut PAS voir :**
- Dashboard management
- Métriques stratégiques
- Analyse des risques globaux
- Tendances de croissance

### Cas 2 : Manager (ROLE_MANAGER)

**Accès :** `/dashboard/` ET `/dashboard/management`

**Peut voir :**
- **Tout ce que le ROLE_USER voit** 
- PLUS Dashboard management avec :
  - Métriques de portefeuille
  - Efficacité du financement
  - Analyse globale des risques
  - Tendances de croissance
  - Comparaisons annuelles

---

## ⚡ Performance

### Optimisations Communes
- ✅ Calculs optimisés avec array_reduce
- ✅ Filtrage efficace des données
- ✅ Cache-friendly (Symfony)
- ✅ Requêtes SQL minimisées

### Optimisations Management
- ✅ Calculs supplémentaires uniquement pour ROLE_MANAGER
- ✅ Réutilisation des données déjà calculées
- ✅ Pas de surcharge pour les utilisateurs standards

---

## 🔐 Sécurité

### Niveaux d'Accès

```
ROLE_USER
  └── Peut accéder au dashboard principal
      └── Peut voir détails projets/financements
      
ROLE_MANAGER (hérite de ROLE_USER)
  └── Peut accéder au dashboard management
      └── Voit toutes les métriques stratégiques
      
ROLE_ADMIN (hérite de ROLE_MANAGER)
  └── Accès complet à tous les dashboards
```

### Protection des Routes

Le contrôleur utilise :
- `#[IsGranted('ROLE_USER')]` sur la classe entière
- `#[IsGranted('ROLE_MANAGER')]` sur la méthode `management()`

---

## 📱 Responsive Design

Les deux dashboards sont 100% responsive :

- 📱 **Mobile** (320px+) : Vue simplifiée, 1 colonne
- 📱 **Tablette** (768px+) : 2 colonnes, menus adaptés
- 💻 **Desktop** (1024px+) : Grille complète
- 🖥️ **Large** (1600px+) : Vue maximale

---

## 🆘 Dépannage

### Problème : "Access Denied" sur /dashboard/management

**Solution :**
```bash
# Vérifier le rôle de l'utilisateur
php bin/console debug:router | grep dashboard

# Vérifier security.yaml
# S'assurer que ROLE_MANAGER existe et est attribué
```

### Problème : Dashboard management identique au principal

**Solution :**
```bash
# Vérifier que management.html.twig contient les sections supplémentaires
grep "management-metrics" templates/dashboard/management.html.twig

# Si absent, re-copier le fichier
cp templates/dashboard/management.html.twig votre_projet/templates/dashboard/
```

### Problème : CSS ne charge pas les nouveaux styles

**Solution :**
```bash
# Vider le cache
php bin/console cache:clear

# Vérifier que dashboard.css contient les styles management
grep "management-metrics-grid" public/css/dashboard.css
```

---

## 📚 Ressources Supplémentaires

- [README principal](README.md) - Documentation complète
- [INSTALLATION.md](docs/INSTALLATION.md) - Guide installation détaillé
- [LIVRAISON.md](LIVRAISON.md) - Récapitulatif de livraison

---

## 🎉 Résumé

✅ **2 Dashboards** dans 1 contrôleur  
✅ **Dashboard Principal** accessible à tous (`ROLE_USER`)  
✅ **Dashboard Management** réservé au management (`ROLE_MANAGER`)  
✅ **3 Méthodes supplémentaires** pour le management  
✅ **Templates séparés** (index.html.twig et management.html.twig)  
✅ **Styles CSS complets** pour les deux dashboards  
✅ **Architecture MVC** respectée  
✅ **Sécurité** par rôles Symfony  

**Le système est prêt à être déployé !** 🚀

---

**Développé avec ❤️ pour la République du Tchad 🇹🇩**  
*Pour la modernisation de l'administration publique tchadienne*
