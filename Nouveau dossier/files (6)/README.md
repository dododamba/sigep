# SIGEP Tchad - Dashboard Module

## Système Intégré de Gestion des Projets Publics - République du Tchad

Ce module fournit un tableau de bord complet pour le suivi et la gestion des projets publics financés par l'État tchadien et ses partenaires techniques et financiers.

---

## 📋 Fonctionnalités

### Tableau de bord principal
- **Statistiques temps réel** : Projets actifs, budget total, taux d'exécution, alertes
- **Graphique par secteur** : Visualisation de l'exécution budgétaire par secteur (Chart.js)
- **Projets récents** : Liste des derniers projets avec progression et statut
- **Fil d'activité** : Décaissements, audits, alertes en temps réel
- **Répartition sectorielle** : Distribution du budget par secteur
- **Indicateurs financiers** : Financements actifs, décaissements, partenaires
- **Projets à risque** : Alertes pour les projets avec échéance proche

### APIs disponibles
- `/dashboard/api/stats` - Statistiques générales
- `/dashboard/api/chart/sectors` - Données graphique secteurs
- `/dashboard/api/chart/evolution` - Évolution mensuelle
- `/dashboard/api/chart/status` - Répartition par statut

---

## 📁 Structure des fichiers

```
sigep-tchad/
├── src/
│   ├── Controller/
│   │   └── DashboardController.php      # Contrôleur principal
│   ├── Repository/
│   │   ├── ProjectRepository.php        # Requêtes projets
│   │   ├── FinancementRepository.php    # Requêtes financements
│   │   ├── DecaissementRepository.php   # Requêtes décaissements
│   │   ├── AuditRepository.php          # Requêtes audits
│   │   ├── InstitutionRepository.php    # Requêtes institutions
│   │   └── PartnerRepository.php        # Requêtes partenaires
│   └── DataFixtures/
│       └── AppFixtures.php              # Données de démonstration
└── templates/
    ├── base.html.twig                   # Layout principal avec sidebar
    └── dashboard/
        └── index.html.twig              # Template du tableau de bord
```

---

## 🚀 Installation

### Prérequis
- PHP 8.1+
- Symfony 6.x
- Doctrine ORM
- Composer

### Étapes d'installation

1. **Copier les fichiers** dans votre projet Symfony existant :
```bash
cp -r src/Controller/DashboardController.php votre-projet/src/Controller/
cp -r src/Repository/*.php votre-projet/src/Repository/
cp -r src/DataFixtures/AppFixtures.php votre-projet/src/DataFixtures/
cp -r templates/* votre-projet/templates/
```

2. **Créer la base de données et le schéma** :
```bash
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
```

3. **Charger les données de démonstration** :
```bash
php bin/console doctrine:fixtures:load
```

4. **Vider le cache** :
```bash
php bin/console cache:clear
```

5. **Accéder au dashboard** : `http://votre-domaine/dashboard`

---

## 🎨 Design et couleurs

Le design utilise les couleurs officielles du Tchad :
- **Bleu primaire** : `#002664`
- **Or/Jaune** : `#FECB00`
- **Rouge danger** : `#c60c30`
- **Vert succès** : `#10b981`

### Typographies
- **Titres** : Playfair Display
- **Corps** : DM Sans

---

## 📊 Données de démonstration

Les fixtures incluent des données réalistes tchadiennes :

### Institutions (8)
- Ministères (MIT, MSP, MEP, MA, MEN, MH)
- Agences (ATER, SNE)

### Partenaires (10)
- Banque Mondiale, BAD, AFD, Union Européenne
- BID, BADEA, FSD, EXIM China, PNUD, KFAED

### Projets (12)
- Construction du Pont de Ngueli (45 Mds FCFA)
- Réhabilitation HGRN (18.5 Mds FCFA)
- Centrale Solaire Moundou (32 Mds FCFA)
- Route N'Djamena-Abéché (85 Mds FCFA)
- Et autres projets couvrant tous les secteurs

### Secteurs couverts
- Infrastructure
- Santé
- Énergie
- Agriculture
- Éducation
- Eau & Assainissement

---

## 🔧 Configuration requise

### Routes à définir
Le dashboard utilise les routes suivantes qui doivent être créées :
- `app_dashboard` - Tableau de bord principal
- `app_project_index`, `app_project_show`, `app_project_new`
- `app_financement_index`
- `app_decaissement_index`
- `app_convention_index`
- `app_audit_index`
- `app_institution_index`
- `app_partner_index`
- `app_user_index`
- `app_logout`

### Entités requises
Assurez-vous que les entités suivantes sont présentes :
- Project
- Institution
- Partner
- Financement
- Decaissement
- Audit
- Convention
- TypeInstitution
- TypePartner
- SectorInstitution
- User

---

## 📱 Responsive Design

Le dashboard est entièrement responsive :
- **Desktop** : Sidebar fixe à gauche, contenu principal à droite
- **Tablette** : Sidebar rétractable
- **Mobile** : Sidebar masquée, navigation hamburger

---

## 🔒 Sécurité

Pour sécuriser l'accès au dashboard, ajoutez dans `config/packages/security.yaml` :

```yaml
access_control:
    - { path: ^/dashboard, roles: ROLE_USER }
```

---

## 📝 Licence

Développé pour le compte de la République du Tchad.
Tous droits réservés.

---

## 🆘 Support

Pour toute question ou assistance, contactez l'équipe de développement SIGEP.
