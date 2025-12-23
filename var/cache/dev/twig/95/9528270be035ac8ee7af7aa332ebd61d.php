<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* etablissements.html.twig */
class __TwigTemplate_f251a5dbafc1c7d5db9e60e35a3aa4e9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'modal' => [$this, 'block_modal'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissements.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Etablissements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/etablissements.css"), "html", null, true);
        yield "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "         <!-- Page Header -->
        <div class=\"page-header\">
            <div class=\"page-header-left\">
                <h2 class=\"page-title\">Gestion des Établissements Fréquentés</h2>
                <div class=\"page-breadcrumb\">
                    <span>SIGMA</span>
                    <span class=\"breadcrumb-separator\">/</span>
                    <span>Gestion</span>
                    <span class=\"breadcrumb-separator\">/</span>
                    <span style=\"color: var(--primary-color);\">Établissements</span>
                </div>
            </div>
            <div class=\"page-header-right\">
                <div class=\"classification-info\">
                    <i class=\"ri-information-line\"></i>
                    <span>Données classifiées - Accès contrôlé</span>
                </div>
            </div>
        </div>

        <!-- Security Alert (if low clearance) -->
        <div class=\"security-alert\" id=\"securityAlert\" style=\"display: none;\">
            <i class=\"ri-shield-cross-line\"></i>
            <div>
                <strong>Accès restreint</strong>
                <p>Certaines informations sensibles sont masquées selon votre niveau d'accréditation.</p>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-section\">
            <div class=\"section-header\">
                <h3>Statistiques des Établissements</h3>
                <button class=\"btn-icon\" id=\"refreshStatsBtn\" title=\"Actualiser\">
                    <i class=\"ri-refresh-line\"></i>
                </button>
            </div>
            
            <div class=\"stats-grid\" id=\"statsGrid\">
                <!-- Loading state -->
                <div class=\"stats-loading\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des statistiques...</p>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Liste des Établissements Surveillés</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addEtablissementBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvel Établissement
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Nom, adresse, zone...\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'établissement</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"religieux\">Religieux (Mosquée, Église)</option>
                            <option value=\"educatif\">Éducatif (École, Université)</option>
                            <option value=\"commercial\">Commercial (Marché, Boutique)</option>
                            <option value=\"professionnel\">Professionnel (Bureau, Entreprise)</option>
                            <option value=\"associatif\">Associatif (ONG, Association)</option>
                            <option value=\"sanitaire\">Sanitaire (Hôpital, Clinique)</option>
                            <option value=\"recreatif\">Récréatif (Sport, Loisirs)</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"actif\">Actif</option>
                            <option value=\"inactif\">Inactif</option>
                            <option value=\"a_verifier\">À vérifier</option>
                            <option value=\"sensible\">Sensible</option>
                            <option value=\"surveille\">Sous surveillance</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Niveau de sensibilité</label>
                        <select class=\"filter-select\" id=\"sensibiliteFilter\">
                            <option value=\"\">Tous les niveaux</option>
                            <option value=\"faible\">Faible</option>
                            <option value=\"moyen\">Moyen</option>
                            <option value=\"eleve\">Élevé</option>
                            <option value=\"critique\">Critique</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Zone géographique</label>
                        <select class=\"filter-select\" id=\"zoneFilter\">
                            <option value=\"\">Toutes les zones</option>
                            <option value=\"ndjamena_centre\">N'Djamena - Centre</option>
                            <option value=\"ndjamena_sud\">N'Djamena - Sud</option>
                            <option value=\"ndjamena_nord\">N'Djamena - Nord</option>
                            <option value=\"moundou\">Moundou</option>
                            <option value=\"sarh\">Sarh</option>
                            <option value=\"abéché\">Abéché</option>
                            <option value=\"autre\">Autre zone</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Catégorie de personnes</label>
                        <select class=\"filter-select\" id=\"categoriePersonneFilter\">
                            <option value=\"\">Toutes catégories</option>
                            <option value=\"A\">Catégorie A (Haute menace)</option>
                            <option value=\"B\">Catégorie B (Menace moyenne)</option>
                            <option value=\"C\">Catégorie C (Surveillance)</option>
                            <option value=\"S\">Catégorie S (Sensible)</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de début</label>
                        <input type=\"date\" class=\"filter-input\" id=\"startDateFilter\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de fin</label>
                        <input type=\"date\" class=\"filter-input\" id=\"endDateFilter\">
                    </div>
                    
                    <div class=\"filter-actions\">
                        <button class=\"btn btn-secondary btn-sm\" id=\"resetFiltersBtn\">
                            <i class=\"ri-refresh-line\"></i>
                            Réinitialiser
                        </button>
                        <button class=\"btn btn-primary btn-sm\" id=\"applyFiltersBtn\">
                            <i class=\"ri-filter-line\"></i>
                            Appliquer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <!-- Loading State -->
                <div class=\"table-state\" id=\"loadingState\" style=\"display: none;\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des établissements...</p>
                </div>

                <!-- Error State -->
                <div class=\"table-state error-state\" id=\"errorState\" style=\"display: none;\">
                    <i class=\"ri-error-warning-line\"></i>
                    <h4>Erreur de chargement</h4>
                    <p id=\"errorMessage\">Une erreur est survenue lors du chargement des données.</p>
                    <button class=\"btn btn-primary\" id=\"retryBtn\">
                        <i class=\"ri-refresh-line\"></i>
                        Réessayer
                    </button>
                </div>

                <!-- Empty State -->
                <div class=\"table-state\" id=\"emptyState\" style=\"display: none;\">
                    <i class=\"ri-inbox-line\"></i>
                    <h4>Aucun établissement trouvé</h4>
                    <p>Aucun établissement ne correspond à vos critères de recherche.</p>
                </div>

                <!-- Data Table -->
                <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('nom')\">
                                Nom de l'établissement <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('zone')\">
                                Zone / Adresse <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('sensibilite')\">
                                Sensibilité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('personnesFichees')\">
                                Personnes fichées <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('derniereActivite')\">
                                Dernière activité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <!-- Data will be generated dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> établissements
                </div>
                <div class=\"pagination-controls\">
                    <label for=\"pageSizeSelect\">Éléments par page :</label>
                    <select id=\"pageSizeSelect\" class=\"pagination-select\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 246
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 247
        yield "    <div class=\"modal\" id=\"etablissementModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"modalOverlay\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Détails de l'Établissement</h3>
                <button class=\"modal-close\" id=\"modalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\" id=\"modalBody\">
                <!-- Content details will be loaded here -->
                <div class=\"spinner-center\">
                    <div class=\"spinner\"></div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"modalCancelBtn\">Fermer</button>
                <button class=\"btn btn-primary\" id=\"modalEditBtn\">
                    <i class=\"ri-edit-line\"></i>
                    Modifier
                </button>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class=\"modal\" id=\"deleteModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"deleteModalOverlay\"></div>
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Confirmer la suppression</h3>
                <button class=\"modal-close\" id=\"deleteModalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-warning\">
                    <i class=\"ri-alert-line\"></i>
                    <div>
                        <strong>Attention !</strong>
                        <p>Êtes-vous sûr de vouloir supprimer cet établissement ? Cette action est irréversible et sera journalisée.</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Motif de suppression (obligatoire)</label>
                    <textarea class=\"form-textarea\" id=\"deleteReasonTextarea\" rows=\"3\" placeholder=\"Indiquez le motif de suppression...\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"deleteCancelBtn\">Annuler</button>
                <button class=\"btn btn-danger\" id=\"deleteConfirmBtn\">
                    <i class=\"ri-delete-bin-line\"></i>
                    Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal d'accès refusé -->
    <div class=\"modal\" id=\"accessDeniedModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"accessDeniedOverlay\"></div>
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Accès refusé</h3>
                <button class=\"modal-close\" id=\"accessDeniedClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-danger\">
                    <i class=\"ri-shield-cross-line\"></i>
                    <div>
                        <strong>Niveau d'accréditation insuffisant</strong>
                        <p>Vous n'avez pas les autorisations nécessaires pour effectuer cette action. Cette tentative a été enregistrée.</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"accessDeniedOkBtn\">Compris</button>
            </div>
        </div>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 332
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/etablissements.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "etablissements.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  465 => 332,  455 => 331,  364 => 247,  354 => 246,  110 => 8,  100 => 7,  88 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Etablissements{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/etablissements.css') }}\">

{% endblock %}
   {% block body %}
         <!-- Page Header -->
        <div class=\"page-header\">
            <div class=\"page-header-left\">
                <h2 class=\"page-title\">Gestion des Établissements Fréquentés</h2>
                <div class=\"page-breadcrumb\">
                    <span>SIGMA</span>
                    <span class=\"breadcrumb-separator\">/</span>
                    <span>Gestion</span>
                    <span class=\"breadcrumb-separator\">/</span>
                    <span style=\"color: var(--primary-color);\">Établissements</span>
                </div>
            </div>
            <div class=\"page-header-right\">
                <div class=\"classification-info\">
                    <i class=\"ri-information-line\"></i>
                    <span>Données classifiées - Accès contrôlé</span>
                </div>
            </div>
        </div>

        <!-- Security Alert (if low clearance) -->
        <div class=\"security-alert\" id=\"securityAlert\" style=\"display: none;\">
            <i class=\"ri-shield-cross-line\"></i>
            <div>
                <strong>Accès restreint</strong>
                <p>Certaines informations sensibles sont masquées selon votre niveau d'accréditation.</p>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-section\">
            <div class=\"section-header\">
                <h3>Statistiques des Établissements</h3>
                <button class=\"btn-icon\" id=\"refreshStatsBtn\" title=\"Actualiser\">
                    <i class=\"ri-refresh-line\"></i>
                </button>
            </div>
            
            <div class=\"stats-grid\" id=\"statsGrid\">
                <!-- Loading state -->
                <div class=\"stats-loading\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des statistiques...</p>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Liste des Établissements Surveillés</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addEtablissementBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvel Établissement
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Nom, adresse, zone...\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'établissement</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"religieux\">Religieux (Mosquée, Église)</option>
                            <option value=\"educatif\">Éducatif (École, Université)</option>
                            <option value=\"commercial\">Commercial (Marché, Boutique)</option>
                            <option value=\"professionnel\">Professionnel (Bureau, Entreprise)</option>
                            <option value=\"associatif\">Associatif (ONG, Association)</option>
                            <option value=\"sanitaire\">Sanitaire (Hôpital, Clinique)</option>
                            <option value=\"recreatif\">Récréatif (Sport, Loisirs)</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"actif\">Actif</option>
                            <option value=\"inactif\">Inactif</option>
                            <option value=\"a_verifier\">À vérifier</option>
                            <option value=\"sensible\">Sensible</option>
                            <option value=\"surveille\">Sous surveillance</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Niveau de sensibilité</label>
                        <select class=\"filter-select\" id=\"sensibiliteFilter\">
                            <option value=\"\">Tous les niveaux</option>
                            <option value=\"faible\">Faible</option>
                            <option value=\"moyen\">Moyen</option>
                            <option value=\"eleve\">Élevé</option>
                            <option value=\"critique\">Critique</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Zone géographique</label>
                        <select class=\"filter-select\" id=\"zoneFilter\">
                            <option value=\"\">Toutes les zones</option>
                            <option value=\"ndjamena_centre\">N'Djamena - Centre</option>
                            <option value=\"ndjamena_sud\">N'Djamena - Sud</option>
                            <option value=\"ndjamena_nord\">N'Djamena - Nord</option>
                            <option value=\"moundou\">Moundou</option>
                            <option value=\"sarh\">Sarh</option>
                            <option value=\"abéché\">Abéché</option>
                            <option value=\"autre\">Autre zone</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Catégorie de personnes</label>
                        <select class=\"filter-select\" id=\"categoriePersonneFilter\">
                            <option value=\"\">Toutes catégories</option>
                            <option value=\"A\">Catégorie A (Haute menace)</option>
                            <option value=\"B\">Catégorie B (Menace moyenne)</option>
                            <option value=\"C\">Catégorie C (Surveillance)</option>
                            <option value=\"S\">Catégorie S (Sensible)</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de début</label>
                        <input type=\"date\" class=\"filter-input\" id=\"startDateFilter\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de fin</label>
                        <input type=\"date\" class=\"filter-input\" id=\"endDateFilter\">
                    </div>
                    
                    <div class=\"filter-actions\">
                        <button class=\"btn btn-secondary btn-sm\" id=\"resetFiltersBtn\">
                            <i class=\"ri-refresh-line\"></i>
                            Réinitialiser
                        </button>
                        <button class=\"btn btn-primary btn-sm\" id=\"applyFiltersBtn\">
                            <i class=\"ri-filter-line\"></i>
                            Appliquer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <!-- Loading State -->
                <div class=\"table-state\" id=\"loadingState\" style=\"display: none;\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des établissements...</p>
                </div>

                <!-- Error State -->
                <div class=\"table-state error-state\" id=\"errorState\" style=\"display: none;\">
                    <i class=\"ri-error-warning-line\"></i>
                    <h4>Erreur de chargement</h4>
                    <p id=\"errorMessage\">Une erreur est survenue lors du chargement des données.</p>
                    <button class=\"btn btn-primary\" id=\"retryBtn\">
                        <i class=\"ri-refresh-line\"></i>
                        Réessayer
                    </button>
                </div>

                <!-- Empty State -->
                <div class=\"table-state\" id=\"emptyState\" style=\"display: none;\">
                    <i class=\"ri-inbox-line\"></i>
                    <h4>Aucun établissement trouvé</h4>
                    <p>Aucun établissement ne correspond à vos critères de recherche.</p>
                </div>

                <!-- Data Table -->
                <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('nom')\">
                                Nom de l'établissement <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('zone')\">
                                Zone / Adresse <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('sensibilite')\">
                                Sensibilité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('personnesFichees')\">
                                Personnes fichées <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('derniereActivite')\">
                                Dernière activité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <!-- Data will be generated dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> établissements
                </div>
                <div class=\"pagination-controls\">
                    <label for=\"pageSizeSelect\">Éléments par page :</label>
                    <select id=\"pageSizeSelect\" class=\"pagination-select\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
   {% endblock %}

    {% block modal %}
    <div class=\"modal\" id=\"etablissementModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"modalOverlay\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Détails de l'Établissement</h3>
                <button class=\"modal-close\" id=\"modalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\" id=\"modalBody\">
                <!-- Content details will be loaded here -->
                <div class=\"spinner-center\">
                    <div class=\"spinner\"></div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"modalCancelBtn\">Fermer</button>
                <button class=\"btn btn-primary\" id=\"modalEditBtn\">
                    <i class=\"ri-edit-line\"></i>
                    Modifier
                </button>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class=\"modal\" id=\"deleteModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"deleteModalOverlay\"></div>
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Confirmer la suppression</h3>
                <button class=\"modal-close\" id=\"deleteModalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-warning\">
                    <i class=\"ri-alert-line\"></i>
                    <div>
                        <strong>Attention !</strong>
                        <p>Êtes-vous sûr de vouloir supprimer cet établissement ? Cette action est irréversible et sera journalisée.</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Motif de suppression (obligatoire)</label>
                    <textarea class=\"form-textarea\" id=\"deleteReasonTextarea\" rows=\"3\" placeholder=\"Indiquez le motif de suppression...\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"deleteCancelBtn\">Annuler</button>
                <button class=\"btn btn-danger\" id=\"deleteConfirmBtn\">
                    <i class=\"ri-delete-bin-line\"></i>
                    Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal d'accès refusé -->
    <div class=\"modal\" id=\"accessDeniedModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"accessDeniedOverlay\"></div>
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Accès refusé</h3>
                <button class=\"modal-close\" id=\"accessDeniedClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-danger\">
                    <i class=\"ri-shield-cross-line\"></i>
                    <div>
                        <strong>Niveau d'accréditation insuffisant</strong>
                        <p>Vous n'avez pas les autorisations nécessaires pour effectuer cette action. Cette tentative a été enregistrée.</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"accessDeniedOkBtn\">Compris</button>
            </div>
        </div>
    </div>

    {% endblock %}
    {% block javascripts %}
            <script src=\"{{ asset('js/etablissements.js') }}\"></script>
    {% endblock %}", "etablissements.html.twig", "/home/xdevcorp/Projects/sigep/templates/etablissements.html.twig");
    }
}
