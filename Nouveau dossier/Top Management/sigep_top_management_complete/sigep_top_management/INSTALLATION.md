# 📖 Guide d'Installation - Dashboard Top Management SIGEP Tchad

## ⏱️ Temps d'installation estimé : 10-15 minutes

---

## 📋 Prérequis

### Logiciels Requis
- PHP 8.1 ou supérieur
- Symfony 6.3 ou supérieur
- Composer
- MySQL 8.0 / PostgreSQL 13 ou supérieur
- Node.js et npm (optionnel, pour assets)

### Vérification des prérequis
```bash
php -v  # Doit afficher >= 8.1
symfony -V  # Doit afficher >= 6.3
composer -V  # Vérifier l'installation
```

### Entities et Repositories Requis
Votre projet doit avoir les entités suivantes :
- ✅ **Project** (Projet)
- ✅ **Financement**
- ✅ **Decaissement**
- ✅ **Institution**
- ✅ **Audit**

---

## 🚀 Installation Pas à Pas

### Étape 1 : Extraction de l'Archive

```bash
# Extraire l'archive
unzip sigep_top_management.zip

# Naviguer dans le dossier
cd sigep_top_management
```

### Étape 2 : Copier les Fichiers du Contrôleur

```bash
# Copier le contrôleur principal
cp src/Controller/TopManagementController.php \
   votre_projet/src/Controller/TopManagementController.php

# Vérifier la copie
ls -la votre_projet/src/Controller/TopManagementController.php
```

### Étape 3 : Copier les Templates

```bash
# Créer le dossier top_management si nécessaire
mkdir -p votre_projet/templates/top_management

# Copier tous les templates
cp -r templates/top_management/* \
   votre_projet/templates/top_management/

# Copier les composants
mkdir -p votre_projet/templates/components
cp templates/components/_kpi_card.html.twig \
   votre_projet/templates/components/

# Vérifier la structure
tree votre_projet/templates/top_management
# Doit afficher :
# top_management/
# ├── dashboard.html.twig
# ├── project_details.html.twig
# └── financing_details.html.twig
```

### Étape 4 : Copier les Assets CSS

```bash
# Créer le dossier CSS si nécessaire
mkdir -p votre_projet/public/css

# Copier le fichier CSS
cp public/css/dashboard.css \
   votre_projet/public/css/dashboard.css

# Vérifier la copie
ls -lh votre_projet/public/css/dashboard.css
# Doit afficher ~40KB
```

### Étape 5 : Configuration des Routes

```bash
# Copier la configuration des routes
cp config/routes_top_management.yaml \
   votre_projet/config/routes_top_management.yaml

# Éditer config/routes.yaml pour inclure les nouvelles routes
nano votre_projet/config/routes.yaml
```

Ajouter dans `config/routes.yaml` :

```yaml
# ... vos autres routes ...

# Dashboard Top Management
top_management:
    resource: routes_top_management.yaml
```

Sauvegarder et fermer (Ctrl+O, Ctrl+X).

### Étape 6 : Configuration de la Sécurité

```bash
# Éditer la configuration de sécurité
nano votre_projet/config/packages/security.yaml
```

Ajouter la hiérarchie des rôles et le contrôle d'accès :

```yaml
security:
    # ... configuration existante ...
    
    # Hiérarchie des rôles
    role_hierarchy:
        ROLE_SUPER_ADMIN: [ROLE_ADMIN, ROLE_MANAGER, ROLE_USER]
        ROLE_ADMIN: [ROLE_MANAGER, ROLE_USER]
        ROLE_MANAGER: ROLE_USER
    
    access_control:
        # ... vos règles existantes ...
        
        # Dashboard Top Management - ROLE_MANAGER requis
        - { path: ^/top-management, roles: ROLE_MANAGER }
```

Sauvegarder et fermer.

### Étape 7 : Vérifier/Adapter les Repositories

Les repositories suivants doivent avoir certaines méthodes. Voici les méthodes requises :

#### ProjectRepository

```php
// Méthodes requises (à ajouter si absentes)

public function getTotalBudget(): float
{
    $result = $this->createQueryBuilder('p')
        ->select('SUM(p.budgetTotal)')
        ->getQuery()
        ->getSingleScalarResult();
    
    return (float) ($result ?? 0);
}

public function getTotalDecaisse(): float
{
    $result = $this->createQueryBuilder('p')
        ->select('SUM(p.montantDecaisse)')
        ->getQuery()
        ->getSingleScalarResult();
    
    return (float) ($result ?? 0);
}

public function findTopByBudget(int $limit = 5): array
{
    return $this->createQueryBuilder('p')
        ->where('p.budgetTotal IS NOT NULL')
        ->orderBy('p.budgetTotal', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}

public function findAtRisk(int $days = 30, int $minProgress = 80): array
{
    $deadline = (new \DateTime())->modify("+{$days} days");
    
    return $this->createQueryBuilder('p')
        ->where('p.dateFin <= :deadline')
        ->andWhere('p.dateFin >= :today')
        ->andWhere('p.status = :status')
        ->andWhere('p.progress < :minProgress')
        ->setParameter('deadline', $deadline)
        ->setParameter('today', new \DateTime())
        ->setParameter('status', 'en-cours')
        ->setParameter('minProgress', $minProgress)
        ->orderBy('p.dateFin', 'ASC')
        ->getQuery()
        ->getResult();
}

public function findCreatedBetween(\DateTimeInterface $start, \DateTimeInterface $end): array
{
    return $this->createQueryBuilder('p')
        ->where('p.createdAt BETWEEN :start AND :end')
        ->setParameter('start', $start)
        ->setParameter('end', $end)
        ->orderBy('p.createdAt', 'DESC')
        ->getQuery()
        ->getResult();
}
```

#### DecaissementRepository

```php
// Méthodes requises

public function findByProject(int $projectId): array
{
    return $this->createQueryBuilder('d')
        ->where('d.projet = :projet')
        ->setParameter('projet', $projectId)
        ->orderBy('d.dateDemande', 'DESC')
        ->getQuery()
        ->getResult();
}
```

#### AuditRepository

```php
// Méthodes requises

public function findByProject(int $projectId): array
{
    return $this->createQueryBuilder('a')
        ->where('a.projet = :projet')
        ->setParameter('projet', $projectId)
        ->orderBy('a.dateAudit', 'DESC')
        ->getQuery()
        ->getResult();
}

public function findRecent(int $limit = 10): array
{
    return $this->createQueryBuilder('a')
        ->leftJoin('a.projet', 'p')
        ->addSelect('p')
        ->orderBy('a.createdAt', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}
```

### Étape 8 : Vider le Cache

```bash
# Vider le cache Symfony
cd votre_projet
php bin/console cache:clear

# Vérifier qu'il n'y a pas d'erreurs
php bin/console cache:warmup
```

### Étape 9 : Créer un Utilisateur avec ROLE_MANAGER

#### Option A : Via la ligne de commande

```bash
php bin/console doctrine:query:sql \
  "UPDATE user SET roles = '[\"ROLE_MANAGER\"]' WHERE email = 'votre@email.com'"
```

#### Option B : Via PhpMyAdmin / SQL

```sql
-- Mettre à jour un utilisateur existant
UPDATE user 
SET roles = '["ROLE_MANAGER"]' 
WHERE email = 'votre@email.com';

-- OU créer un nouvel utilisateur (adapter selon votre structure)
INSERT INTO user (email, password, roles, firstname, lastname, is_verified, created_at) 
VALUES (
    'manager@sigep.td',
    '$2y$13$...', -- Mot de passe hashé
    '["ROLE_MANAGER"]',
    'Manager',
    'SIGEP',
    1,
    NOW()
);
```

### Étape 10 : Test de l'Installation

```bash
# Démarrer le serveur de développement
symfony server:start

# Ou avec PHP built-in server
php -S localhost:8000 -t public/
```

#### Test 1 : Accès au Dashboard

1. Ouvrir un navigateur
2. Accéder à `http://localhost:8000/top-management`
3. Se connecter avec un compte ROLE_MANAGER
4. Vérifier que le dashboard s'affiche correctement

#### Test 2 : Vérifier les Graphiques

1. Vérifier que les 4 graphiques Chart.js s'affichent
2. Vérifier que les données sont présentes
3. Vérifier que les animations fonctionnent

#### Test 3 : Tester les Filtres

1. Sélectionner une année dans le filtre
2. Cliquer sur "Filtrer"
3. Vérifier que les données se mettent à jour

#### Test 4 : Détails Projet

1. Cliquer sur un projet dans le tableau "Top Projets"
2. Vérifier que la page de détails s'affiche
3. Vérifier les graphiques et métriques

#### Test 5 : APIs REST

```bash
# Tester l'API KPIs
curl http://localhost:8000/top-management/api/kpis

# Tester l'API Charts
curl http://localhost:8000/top-management/api/charts?type=sector
```

---

## 🔧 Configuration Avancée

### 1. Personnaliser les Couleurs

Éditer `public/css/dashboard.css` :

```css
:root {
    /* Couleurs primaires du Tchad */
    --primary-900: #001a33;  /* Modifier ici */
    --gold-500: #daa520;     /* Modifier ici */
    --danger-500: #c41e3a;   /* Modifier ici */
}
```

### 2. Ajuster les Seuils de Risque

Dans `TopManagementController.php`, méthode `assessProjectRisk()` :

```php
private function assessProjectRisk($project): string
{
    $riskScore = 0;
    
    if ($this->isProjectDelayed($project)) {
        $riskScore += 3;  // Modifier ici
    }
    
    $progress = $project->getProgress() ?? 0;
    if ($progress < 30) {  // Modifier le seuil ici
        $riskScore += 2;
    }
    
    // Classification
    if ($riskScore >= 5) {  // Modifier les seuils ici
        return 'Élevé';
    } elseif ($riskScore >= 3) {
        return 'Moyen';
    } else {
        return 'Faible';
    }
}
```

### 3. Modifier le Nombre de Projets Affichés

Dans `TopManagementController.php`, méthode `dashboard()` :

```php
// Top projets par budget
$topProjects = $this->projectRepository->findTopByBudget(10);  // Modifier ici

// Audits récents
$recentAudits = $this->auditRepository->findRecent(10);  // Modifier ici

// Projets critiques
$criticalProjects = $this->projectRepository->findAtRisk(30, 70);  // Modifier les seuils
```

---

## ⚠️ Résolution de Problèmes Courants

### Problème 1 : Erreur 403 (Access Denied)

**Symptôme :** Message "Access Denied" lors de l'accès à `/top-management`

**Solution :**
```bash
# Vérifier les rôles de l'utilisateur
php bin/console doctrine:query:sql \
  "SELECT id, email, roles FROM user WHERE email = 'votre@email.com'"

# Si pas de ROLE_MANAGER, l'ajouter
php bin/console doctrine:query:sql \
  "UPDATE user SET roles = '[\"ROLE_MANAGER\"]' WHERE email = 'votre@email.com'"

# Vider les sessions
php bin/console cache:pool:clear cache.global_clearer
```

### Problème 2 : Page Blanche / Erreur 500

**Symptôme :** Page blanche ou erreur 500

**Solution :**
```bash
# Activer le mode debug
# Dans .env
APP_ENV=dev
APP_DEBUG=true

# Vider le cache
php bin/console cache:clear

# Voir les logs détaillés
tail -f var/log/dev.log
```

### Problème 3 : CSS ne Charge Pas

**Symptôme :** Dashboard sans styles

**Solution :**
```bash
# Vérifier que le fichier existe
ls -la public/css/dashboard.css

# Si absent, recopier
cp sigep_top_management/public/css/dashboard.css public/css/

# Vider le cache du navigateur
# Ctrl+Shift+R (Chrome/Firefox)

# Vérifier les permissions
chmod 644 public/css/dashboard.css
```

### Problème 4 : Graphiques ne S'Affichent Pas

**Symptôme :** Zones vides à la place des graphiques

**Solution :**
1. Vérifier la console du navigateur (F12)
2. Vérifier que Chart.js est chargé :
```html
<!-- Dans le template dashboard.html.twig -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
```
3. Vérifier que Lucide icons est chargé :
```html
<script src="https://unpkg.com/lucide@latest"></script>
<script>lucide.createIcons();</script>
```

### Problème 5 : Méthode Repository Introuvable

**Symptôme :** Erreur "Call to undefined method"

**Solution :**
```bash
# Vérifier quelle méthode manque
# Exemple : findTopByBudget()

# Ajouter la méthode dans le repository concerné
# Voir Étape 7 pour les méthodes requises

# Vérifier la signature de la méthode
php bin/console debug:container --parameters | grep repository
```

### Problème 6 : Routes Non Trouvées

**Symptôme :** Erreur 404 sur `/top-management`

**Solution :**
```bash
# Vérifier que les routes sont enregistrées
php bin/console debug:router | grep top_management

# Si absent, vérifier config/routes.yaml
cat config/routes.yaml

# Doit contenir :
# top_management:
#     resource: routes_top_management.yaml

# Vider le cache
php bin/console cache:clear
```

---

## ✅ Checklist Post-Installation

Cocher après chaque étape :

- [ ] TopManagementController.php copié et sans erreurs
- [ ] Templates copiés (dashboard, project_details, financing_details)
- [ ] Composant _kpi_card.html.twig copié
- [ ] CSS dashboard.css copié (vérifier taille ~40KB)
- [ ] Routes configurées dans routes.yaml
- [ ] Security.yaml configuré (ROLE_MANAGER)
- [ ] Méthodes repositories vérifiées/ajoutées
- [ ] Cache Symfony vidé
- [ ] Utilisateur ROLE_MANAGER créé
- [ ] Dashboard accessible via /top-management
- [ ] Graphiques s'affichent correctement
- [ ] Filtres fonctionnent
- [ ] Détails projet accessibles
- [ ] Détails financement accessibles
- [ ] APIs REST testées

---

## 🎯 Tests de Validation

### Test 1 : KPIs

```bash
# Vérifier que les 4 KPIs s'affichent avec des valeurs
# - Total Projets
# - Budget Total
# - Taux de Décaissement
# - Réalisation Physique Moyenne
```

### Test 2 : Métriques Management

```bash
# Vérifier les 4 cartes métriques management :
# - Valeur du Portefeuille
# - Efficacité du Financement
# - Taux de Respect des Délais
# - Projets par Institution
```

### Test 3 : Analyse des Risques

```bash
# Vérifier les 3 cartes de risque :
# - Projets à Risque Faible (vert)
# - Projets à Risque Moyen (jaune)
# - Projets à Risque Élevé (rouge)
```

### Test 4 : Tendances

```bash
# Vérifier les 2 cartes de tendances :
# - Croissance des Projets (avec badge +/-%)
# - Croissance du Budget (avec badge +/-%)
```

---

## 📞 Support

### En Cas de Problème

1. **Vérifier les logs** : `tail -f var/log/dev.log`
2. **Consulter TROUBLESHOOTING.md** : Solutions détaillées
3. **Vérifier les prérequis** : PHP, Symfony, Extensions
4. **Re-vider le cache** : `php bin/console cache:clear --no-warmup`

### Ressources

- [README.md](README.md) - Documentation complète
- [API.md](API.md) - Documentation API
- [TROUBLESHOOTING.md](TROUBLESHOOTING.md) - Guide dépannage avancé

---

## 🎉 Installation Terminée !

Si tous les tests passent, votre Dashboard Top Management est prêt à être utilisé ! 🚀

**Prochaines étapes recommandées :**
1. Configurer des utilisateurs ROLE_MANAGER supplémentaires
2. Personnaliser les couleurs selon votre charte
3. Ajuster les seuils de risque selon vos besoins
4. Former les utilisateurs au dashboard
5. Configurer un cache Redis pour la production (optionnel)

---

**Développé avec ❤️ pour la République du Tchad 🇹🇩**  
*Pour la modernisation de l'administration publique tchadienne*
