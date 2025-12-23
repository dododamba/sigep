# 🚀 Guide d'Installation Complet - Dashboard Top Management SIGEP Tchad

## ⚡ Installation Express (5 minutes)

```bash
# 1. Copier les fichiers
cp -r sigep_dashboard_top_management/src/Controller votre_projet/src/
cp -r sigep_dashboard_top_management/templates/* votre_projet/templates/
cp -r sigep_dashboard_top_management/config/* votre_projet/config/

# 2. Copier le CSS
mkdir -p votre_projet/public/css
cp sigep_dashboard_top_management/templates/dashboard/styles.css votre_projet/public/css/dashboard.css

# 3. Tester
symfony server:start
# Accéder à http://localhost:8000/dashboard
```

---

## 📋 Prérequis Détaillés

### Système
- ✅ PHP 8.1 ou supérieur
- ✅ Composer installé
- ✅ Symfony 6.3+
- ✅ Base de données (MySQL 8.0+ ou PostgreSQL 13+)

### Projet SIGEP Tchad
- ✅ Entités : `Project`, `Financing`, `Disbursement`, `Institution`, `Audit`
- ✅ Repositories correspondants avec méthodes de base
- ✅ Système d'authentification Symfony configuré
- ✅ Gestion des rôles et permissions

### Extensions PHP Requises
```bash
php -m | grep -E 'pdo|json|intl|mbstring|xml'
```

---

## 📦 Installation Étape par Étape

### Étape 1 : Préparation du projet (2 min)

```bash
# Naviguer vers votre projet
cd /chemin/vers/votre_projet_sigep

# Vérifier la version de Symfony
php bin/console --version

# Vérifier la structure
ls -la src/Controller/
ls -la src/Repository/
```

### Étape 2 : Copier les fichiers (2 min)

```bash
# Créer les répertoires si nécessaire
mkdir -p public/css public/images

# Contrôleur
cp sigep_dashboard_top_management/src/Controller/DashboardController.php src/Controller/

# Templates
cp -r sigep_dashboard_top_management/templates/dashboard templates/
cp -r sigep_dashboard_top_management/templates/components templates/

# Configuration
cp sigep_dashboard_top_management/config/routes_dashboard.yaml config/routes/
cp sigep_dashboard_top_management/config/services_dashboard.yaml config/services/

# Styles
cp sigep_dashboard_top_management/templates/dashboard/styles.css public/css/dashboard.css
```

### Étape 3 : Configuration des routes (1 min)

**Option A : Ajouter dans `config/routes.yaml`**

```yaml
# À la fin du fichier config/routes.yaml
dashboard:
    resource: '../config/routes/routes_dashboard.yaml'
```

**Option B : Utiliser les annotations directement**

```yaml
# Dans config/routes.yaml
dashboard:
    resource: App\Controller\DashboardController
    type: annotation
    prefix: /dashboard
```

### Étape 4 : Vérifier et ajuster les repositories (5 min)

Le dashboard utilise ces méthodes. Si elles n'existent pas, ajoutez-les :

#### ProjectRepository.php

```php
public function findByFilters(array $filters): array
{
    $qb = $this->createQueryBuilder('p');
    
    if (isset($filters['year']) && $filters['year']) {
        $qb->andWhere('YEAR(p.dateDebut) = :year')
           ->setParameter('year', $filters['year']);
    }
    
    if (isset($filters['institution_id']) && $filters['institution_id']) {
        $qb->andWhere('p.institution = :institution')
           ->setParameter('institution', $filters['institution_id']);
    }
    
    if (isset($filters['sector']) && $filters['sector']) {
        $qb->andWhere('p.secteur = :sector')
           ->setParameter('sector', $filters['sector']);
    }
    
    if (isset($filters['status']) && $filters['status']) {
        $qb->andWhere('p.statut = :status')
           ->setParameter('status', $filters['status']);
    }
    
    return $qb->orderBy('p.dateDebut', 'DESC')->getQuery()->getResult();
}

public function findByFinancing($financing): array
{
    return $this->createQueryBuilder('p')
        ->innerJoin('p.financements', 'f')
        ->where('f.id = :financing')
        ->setParameter('financing', $financing->getId())
        ->getQuery()
        ->getResult();
}
```

#### FinancingRepository.php

```php
public function findByFilters(array $filters): array
{
    $qb = $this->createQueryBuilder('f');
    
    if (isset($filters['year']) && $filters['year']) {
        $qb->andWhere('YEAR(f.dateSignature) = :year')
           ->setParameter('year', $filters['year']);
    }
    
    return $qb->orderBy('f.dateSignature', 'DESC')->getQuery()->getResult();
}

public function findByProject($project): array
{
    return $this->createQueryBuilder('f')
        ->where('f.projet = :project')
        ->setParameter('project', $project)
        ->getQuery()
        ->getResult();
}
```

#### DisbursementRepository.php

```php
public function findByProject($project): array
{
    return $this->createQueryBuilder('d')
        ->where('d.projet = :project')
        ->setParameter('project', $project)
        ->orderBy('d.dateDecaissement', 'DESC')
        ->getQuery()
        ->getResult();
}

public function findByFinancing($financing): array
{
    return $this->createQueryBuilder('d')
        ->where('d.financement = :financing')
        ->setParameter('financing', $financing)
        ->orderBy('d.dateDecaissement', 'DESC')
        ->getQuery()
        ->getResult();
}
```

#### AuditRepository.php

```php
public function findRecentAudits(int $limit = 10): array
{
    return $this->createQueryBuilder('a')
        ->orderBy('a.dateAudit', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}

public function findByProject($project): array
{
    return $this->createQueryBuilder('a')
        ->where('a.projet = :project')
        ->setParameter('project', $project)
        ->orderBy('a.dateAudit', 'DESC')
        ->getQuery()
        ->getResult();
}
```

### Étape 5 : Configuration de la sécurité (2 min)

Dans `config/packages/security.yaml` :

```yaml
security:
    access_control:
        # Dashboard accessible aux utilisateurs authentifiés
        - { path: ^/dashboard, roles: ROLE_USER }
        
        # Ou restreindre au management
        # - { path: ^/dashboard, roles: ROLE_MANAGER }
        
        # Ou administrateurs seulement
        # - { path: ^/dashboard, roles: ROLE_ADMIN }
```

### Étape 6 : Ajouter l'image de l'armoirie (optionnel)

```bash
# Copier l'armoirie du Tchad
cp armoirie-tchad.png public/images/

# Le dashboard la chargera automatiquement
# Chemin : public/images/armoirie-tchad.png
```

### Étape 7 : Vider le cache (30 sec)

```bash
# Mode développement
php bin/console cache:clear

# Mode production
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod
```

### Étape 8 : Tester l'installation (1 min)

```bash
# Démarrer le serveur de développement
symfony server:start

# Ou avec PHP intégré
php -S localhost:8000 -t public/

# Accéder au dashboard
# Ouvrir dans le navigateur : http://localhost:8000/dashboard
```

---

## ✅ Checklist Post-Installation

- [ ] Le dashboard s'affiche à `/dashboard`
- [ ] Les KPIs se chargent correctement
- [ ] Les graphiques s'affichent (Chart.js)
- [ ] Les icônes apparaissent (Lucide)
- [ ] Les filtres fonctionnent
- [ ] Le CSS est appliqué
- [ ] Pas d'erreurs dans la console navigateur (F12)
- [ ] Les détails de projet s'ouvrent
- [ ] Les détails de financement s'ouvrent
- [ ] Les APIs répondent (/dashboard/api/kpis, /dashboard/api/charts)

---

## 🎨 Personnalisation

### Modifier les couleurs

Éditez `public/css/dashboard.css` :

```css
:root {
    /* Bleu dominant - Personnalisez selon votre charte */
    --primary-900: #001a33;
    --primary-800: #002a54;
    --primary-700: #003366;
    --primary-600: #004080;
    --primary-500: #004d99;
    
    /* Or accent */
    --gold-600: #b8860b;
    --gold-500: #daa520;
    --gold-400: #e6b833;
    
    /* Rouge */
    --red-700: #8b1a1a;
    --red-600: #a52a2a;
    --red-500: #c41e3a;
}
```

### Ajouter des graphiques

Dans le contrôleur, ajoutez les calculs :

```php
$customData = $this->calculateCustomData($projects);

return $this->render('dashboard/index.html.twig', [
    // ...existant
    'customData' => $customData,
]);
```

Dans le template, ajoutez le canvas et le JavaScript :

```twig
<canvas id="customChart"></canvas>

<script>
const customData = {{ customData|json_encode|raw }};
new Chart(document.getElementById('customChart'), {
    // Configuration Chart.js
});
</script>
```

### Ajouter des KPIs

Utilisez le composant réutilisable :

```twig
{% include 'components/_kpi_card.html.twig' with {
    icon: 'votre-icone-lucide',
    value: votre_valeur,
    label: 'Votre Label',
    sublabel: '<span>Détails</span>',
    trend: {direction: 'up', value: '+X%'},
    color: 'success'
} %}
```

---

## 🔧 Résolution des Problèmes

### Problème : Erreur 404 sur /dashboard

**Cause** : Routes non configurées

**Solution** :
```bash
# Vérifier que les routes sont chargées
php bin/console debug:router | grep dashboard

# Si vide, vérifier config/routes.yaml
# et config/routes/routes_dashboard.yaml
```

### Problème : Controller not found

**Cause** : Contrôleur pas dans le bon namespace

**Solution** :
```php
// Vérifier le namespace dans DashboardController.php
namespace App\Controller; // ✅ Correct

// Vérifier l'autoload de Composer
composer dump-autoload
```

### Problème : Repository not found

**Cause** : Repository manquant ou mauvais nom

**Solution** :
```bash
# Lister les repositories
ls -la src/Repository/

# Vérifier dans DashboardController.php
# que les noms correspondent exactement
```

### Problème : Les graphiques ne s'affichent pas

**Cause** : Chart.js ne se charge pas

**Solution** :
```javascript
// Ouvrir la console navigateur (F12)
// Vérifier les erreurs de chargement

// Dans le template, vérifier :
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

// Tester manuellement :
console.log(typeof Chart); // devrait afficher "function"
```

### Problème : Les icônes ne s'affichent pas

**Cause** : Lucide Icons ne se charge pas

**Solution** :
```javascript
// Vérifier dans la console
console.log(typeof lucide); // devrait afficher "object"

// Dans le template, vérifier :
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>
```

### Problème : CSS non appliqué

**Cause** : Fichier CSS non trouvé

**Solution** :
```bash
# Vérifier que le fichier existe
ls -la public/css/dashboard.css

# Vérifier le template
# Doit contenir : <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

# Vider le cache
php bin/console cache:clear
```

### Problème : Les KPIs affichent tous 0

**Cause** : Pas de données en base ou filtres trop restrictifs

**Solution** :
```bash
# Vérifier qu'il y a des données
php bin/console doctrine:query:sql "SELECT COUNT(*) FROM project"
php bin/console doctrine:query:sql "SELECT COUNT(*) FROM financing"

# Désactiver temporairement les filtres
# Dans DashboardController::index(), commenter la ligne de filtres
```

### Problème : Erreur 500

**Cause** : Erreur dans le code

**Solution** :
```bash
# Consulter les logs
tail -f var/log/dev.log

# Activer le mode debug
# Dans .env : APP_ENV=dev

# Recharger la page pour voir l'erreur détaillée
```

---

## 📊 Test de Performance

### Vérifier les temps de chargement

```bash
# Dans le navigateur, ouvrir les DevTools (F12)
# Onglet Network
# Recharger la page
# Vérifier que :
# - La page charge en < 2s
# - dashboard.css < 500ms
# - Chart.js depuis CDN < 1s
```

### Optimiser les requêtes

```bash
# Activer le profiler Symfony
# Dans .env : APP_ENV=dev

# Accéder à /_profiler
# Vérifier le nombre de requêtes SQL
# Objectif : < 20 requêtes pour la page principale
```

---

## 🚀 Mise en Production

### Checklist Avant Déploiement

- [ ] Tester avec des données réelles
- [ ] Vérifier tous les filtres
- [ ] Tester les exports/impressions
- [ ] Vérifier sur mobile/tablette
- [ ] Tester avec différents rôles
- [ ] Vérifier les permissions
- [ ] Optimiser le CSS (minification)
- [ ] Activer le cache production

### Commandes de Déploiement

```bash
# Mode production
APP_ENV=prod

# Vider et réchauffer le cache
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod

# Optimiser l'autoload
composer dump-autoload --optimize --no-dev

# Assets
php bin/console assets:install --env=prod

# Permissions (si nécessaire)
chmod -R 755 public/
chmod -R 775 var/
```

---

## 📚 Ressources Supplémentaires

### Documentation
- [README principal](../README.md) - Documentation complète
- [Symfony Documentation](https://symfony.com/doc/current/index.html)
- [Chart.js Documentation](https://www.chartjs.org/docs/)
- [Lucide Icons](https://lucide.dev/)

### Support
- Logs Symfony : `var/log/dev.log` ou `var/log/prod.log`
- Profiler : `http://localhost:8000/_profiler`
- Mode debug : Activer `APP_ENV=dev` dans `.env`

---

**Installation terminée avec succès ! 🎉**

Le dashboard est prêt à être utilisé. Profitez des fonctionnalités !

Pour toute question, consultez le README principal ou les logs Symfony.
