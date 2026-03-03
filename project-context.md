# Project Context – Refonte du Module Gestion de Projet

## 1. Objectif de la refonte

Refondre entièrement le module de gestion des projets afin de :

- Moderniser l’architecture technique (respect des bonnes pratiques Symfony)
- Uniformiser l’interface utilisateur selon la charte graphique et les composants Metronic
- Améliorer la performance et la maintenabilité
- Enrichir la vue détail avec une vision 360° du projet
- Mettre en place un filtrage automatique des projets selon l’institution de l’utilisateur connecté

---

## 2. Architecture cible

### Stack technique
- Framework : Symfony (version en cours)
- Base de données : PostgreSQL
- Architecture : MVC + Service Layer
- Sécurité : Voters + filtrage par institution
- UI : Metronic (composants officiels : cards, tables, stats widgets, tabs, timeline, badges, progress bars)

---

## 3. Périmètre fonctionnel de la refonte

### 3.1 Page Index – Liste des projets enrichie

La page d’index devra afficher :

#### A. Liste des projets
- Tableau Metronic (KTDatatable / DataTable)
- Pagination
- Recherche
- Filtres dynamiques
- Statut avec badges colorés
- Pourcentage d’exécution (progress bar)

#### B. Bloc Statistiques (au-dessus de la liste)

Widgets Metronic affichant :

- Nombre total de projets
- Nombre de projets actifs
- Nombre de projets clôturés
- Budget total engagé
- Total des décaissements effectués
- Taux moyen d’exécution

Les statistiques devront être dynamiques et filtrées par l’institution de l’utilisateur connecté.

---

### 3.2 Page Détail – Vue 360° du projet

La page détail devra utiliser un layout Metronic structuré (tabs ou accordéons).

Elle devra afficher :

#### 1. Informations générales
- Intitulé du projet
- Code
- Institution pilote
- Responsable
- Dates (début / fin)
- Budget prévisionnel
- Statut
- Pourcentage d’exécution (progress bar dynamique)

#### 2. Financements liés
- Liste des sources de financement
- Montants accordés
- Part relative (%)
- Historique des modifications

#### 3. Décaissements
- Tableau détaillé des décaissements
- Date
- Montant
- Justificatif
- Total cumulé
- Solde restant

#### 4. Conventions
- Liste des conventions associées
- Statut
- Date de signature
- Documents téléchargeables

#### 5. Audits
- Historique des audits
- Observations
- Recommandations
- Statut de conformité

#### 6. Appels d’offres
- Liste des appels d’offres liés
- Statut
- Entreprise attributaire
- Montant contractuel

#### 7. Images et médias
- Galerie Metronic
- Upload sécurisé
- Stockage organisé

#### 8. Timeline du projet
- Création
- Validation
- Financements
- Décaissements
- Audits
- Clôture

---

## 4. Règle de filtrage par institution

Les projets affichés doivent dépendre de l’institution de l’utilisateur connecté :

- Un utilisateur voit uniquement les projets liés à son institution.
- Un super administrateur peut voir tous les projets.
- Le filtrage doit être appliqué au niveau Repository (et non uniquement au niveau UI).
- Mise en place d’un Voter ou d’un Query Scope institutionnel.

---

## 5. Problèmes de l’architecture actuelle

- Controller trop volumineux
- Logique métier dans les controllers
- Absence de couche Service
- Requêtes non optimisées
- Pas de séparation claire des responsabilités
- Couplage fort entre modules
- Absence d’indicateurs statistiques consolidés
- Interface non harmonisée avec Metronic

---

## 6. Dette technique à corriger

- Ajout d’index en base de données
- Optimisation des jointures
- Introduction de DTO pour les vues complexes
- Ajout de pagination systématique
- Mise en cache des statistiques si nécessaire
- Implémentation de tests unitaires sur les services

---

## 7. Architecture recommandée

### Services à introduire

- ProjectService
- ProjectStatisticsService
- ProjectWorkflowService
- ProjectFinanceService
- ProjectAuditService

### Organisation recommandée

- Controller : orchestration uniquement
- Services : logique métier
- Repository : requêtes optimisées
- DTO : transport des données vers les vues
- Twig Components Metronic : uniformisation UI

---

## 8. Améliorations avancées recommandées

- State Machine pour gestion des statuts
- Audit log automatique
- Calcul dynamique du pourcentage d’exécution :
  
  % Exécution = (Total Décaissements / Budget Total) × 100

- Historisation des modifications sensibles
- Export PDF / Excel des p