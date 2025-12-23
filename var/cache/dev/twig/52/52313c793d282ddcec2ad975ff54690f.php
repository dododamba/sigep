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

/* identites.html.twig */
class __TwigTemplate_614582e091bce43592e70157ee15a1cd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "identites.html.twig"));

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

        yield "Identités Numériques - SIGMA";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/identites-numeriques.css"), "html", null, true);
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
        yield "    <!-- Page Header -->
    <div class=\"page-header\">
        <h2 class=\"page-title\">Gestion des Identités Numériques</h2>
        <div class=\"page-breadcrumb\">
            <span>SIGMA</span>
            <span class=\"breadcrumb-separator\">/</span>
            <span>Surveillance</span>
            <span class=\"breadcrumb-separator\">/</span>
            <span style=\"color: var(--primary-color);\">Identités numériques</span>
        </div>
    </div>

    <!-- Statistics Grid -->
    <div class=\"stats-container\">
        <div class=\"stats-grid\" id=\"statsGrid\">
            <div class=\"stat-card-loading\">
                <i class=\"ri-loader-4-line spin\"></i>
                <p>Chargement des statistiques...</p>
            </div>
        </div>
        <div class=\"stats-error\" id=\"statsError\" style=\"display: none;\">
            <i class=\"ri-error-warning-line\"></i>
            <p>Impossible de charger les statistiques</p>
            <button class=\"btn btn-secondary\" onclick=\"fetchStats()\">
                <i class=\"ri-refresh-line\"></i>
                Réessayer
            </button>
        </div>
    </div>

    <!-- Table Container -->
    <div class=\"table-container\">
        <div class=\"table-header\">
            <div class=\"table-header-top\">
                <h3 class=\"table-title\">Registre des Identités Numériques</h3>
                <div class=\"table-actions\">
                    <button class=\"btn btn-ghost\" id=\"refreshBtn\" title=\"Actualiser\">
                        <i class=\"ri-refresh-line\"></i>
                    </button>
                    <button class=\"btn btn-secondary\" id=\"exportBtn\">
                        <i class=\"ri-download-line\"></i>
                        Exporter
                    </button>
                    <button class=\"btn btn-primary\" id=\"addIdentityBtn\">
                        <i class=\"ri-add-line\"></i>
                        Nouvelle Identité
                    </button>
                </div>
            </div>

            <!-- Filters -->
            <div class=\"table-filters\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Recherche</label>
                    <input 
                        type=\"text\" 
                        class=\"filter-input\" 
                        id=\"searchInput\" 
                        placeholder=\"Numéro, nom, prénom...\"
                    >
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Plateforme</label>
                    <select class=\"filter-select\" id=\"plateformeFilter\">
                        <option value=\"\">Toutes les plateformes</option>
                        <option value=\"facebook\">Facebook</option>
                        <option value=\"twitter\">Twitter/X</option>
                        <option value=\"instagram\">Instagram</option>
                        <option value=\"tiktok\">TikTok</option>
                        <option value=\"whatsapp\">WhatsApp</option>
                        <option value=\"telegram\">Telegram</option>
                        <option value=\"youtube\">YouTube</option>
                        <option value=\"linkedin\">LinkedIn</option>
                    </select>
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut</label>
                    <select class=\"filter-select\" id=\"statutFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"active\">Active</option>
                        <option value=\"surveillance\">Sous surveillance</option>
                        <option value=\"suspendue\">Suspendue</option>
                        <option value=\"inactive\">Inactive</option>
                    </select>
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Niveau de risque</label>
                    <select class=\"filter-select\" id=\"risqueFilter\">
                        <option value=\"\">Tous les niveaux</option>
                        <option value=\"critique\">Critique</option>
                        <option value=\"eleve\">Élevé</option>
                        <option value=\"moyen\">Moyen</option>
                        <option value=\"faible\">Faible</option>
                    </select>
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Période</label>
                    <select class=\"filter-select\" id=\"periodeFilter\">
                        <option value=\"\">Toutes les périodes</option>
                        <option value=\"7days\">7 derniers jours</option>
                        <option value=\"30days\">30 derniers jours</option>
                        <option value=\"3months\">3 derniers mois</option>
                        <option value=\"6months\">6 derniers mois</option>
                        <option value=\"1year\">1 an</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Table Body -->
        <div class=\"table-body\">
            <!-- Loading State -->
            <div class=\"table-loading\" id=\"tableLoading\">
                <i class=\"ri-loader-4-line spin\"></i>
                <p>Chargement des identités numériques...</p>
            </div>

            <!-- Error State -->
            <div class=\"table-error\" id=\"tableError\" style=\"display: none;\">
                <i class=\"ri-error-warning-line\"></i>
                <p>Erreur lors du chargement des identités</p>
                <small id=\"errorMessage\"></small>
                <button class=\"btn btn-primary\" onclick=\"fetchIdentites()\">
                    <i class=\"ri-refresh-line\"></i>
                    Réessayer
                </button>
            </div>

            <!-- Data Table -->
            <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sujet lié</th>
                        <th>Plateforme</th>
                        <th>Pseudo / Nom de compte</th>
                        <th>Découvert le</th>
                        <th>Niveau de risque</th>
                        <th>Incidents</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"tableBody\">
                    <!-- Data will be generated dynamically -->
                </tbody>
            </table>

            <!-- Empty State -->
            <div class=\"table-empty\" id=\"tableEmpty\" style=\"display: none;\">
                <i class=\"ri-fingerprint-line\"></i>
                <p>Aucune identité numérique trouvée</p>
                <small>Essayez de modifier vos critères de recherche</small>
            </div>
        </div>

        <!-- Table Footer / Pagination -->
        <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
            <div class=\"pagination-info\">
                Affichage de <strong id=\"startEntry\">0</strong> à <strong id=\"endEntry\">0</strong> sur <strong id=\"totalEntries\">0</strong> identités
            </div>
            <div class=\"pagination-controls\">
                <div class=\"page-size-selector\">
                    <label>Afficher</label>
                    <select id=\"pageSizeSelect\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                    <span>par page</span>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 189
        yield "    <!-- Modal Détail Identité Numérique -->
    <div class=\"modal\" id=\"identityModal\" style=\"display: none;\">
        <div class=\"modal-content modal-xl\">
            <div class=\"modal-header\">
                <div class=\"modal-header-info\">
                    <h3 id=\"modalTitle\">Détails de l'identité numérique</h3>
                    <span class=\"modal-subtitle\" id=\"modalSubtitle\"></span>
                </div>
                <div class=\"modal-header-actions\">
                    <button class=\"btn btn-ghost\" onclick=\"printIdentityDetail()\" title=\"Imprimer\">
                        <i class=\"ri-printer-line\"></i>
                    </button>
                    <button class=\"btn btn-ghost\" onclick=\"exportIdentityDetail()\" title=\"Exporter\">
                        <i class=\"ri-download-line\"></i>
                    </button>
                    <button class=\"modal-close\" onclick=\"closeModal()\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
            </div>
            <div class=\"modal-body\" id=\"modalBody\">
                <div class=\"loading\">
                    <i class=\"ri-loader-4-line spin\"></i>
                    <p>Chargement des détails...</p>
                </div>
            </div>
            <div class=\"modal-footer\" id=\"modalFooter\" style=\"display: none;\">
                <button class=\"btn btn-secondary\" onclick=\"closeModal()\">
                    <i class=\"ri-close-line\"></i>
                    Fermer
                </button>
                <button class=\"btn btn-warning\" id=\"btnSurveillance\" onclick=\"toggleSurveillance()\">
                    <i class=\"ri-eye-line\"></i>
                    Mettre sous surveillance
                </button>
                <button class=\"btn btn-primary\" id=\"btnEdit\" onclick=\"editCurrentIdentity()\">
                    <i class=\"ri-edit-line\"></i>
                    Modifier
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Ajout/Édition Identité -->
    <div class=\"modal\" id=\"formModal\" style=\"display: none;\">
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <h3 id=\"formModalTitle\">Nouvelle Identité Numérique</h3>
                <button class=\"modal-close\" onclick=\"closeFormModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"identityForm\" class=\"form-grid\">
                    <input type=\"hidden\" id=\"formIdentityId\">
                    
                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-user-line\"></i>
                            Sujet associé
                        </h4>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Sujet lié</label>
                                <select class=\"form-select\" id=\"formSujetId\" required>
                                    <option value=\"\">Sélectionner un sujet...</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-global-line\"></i>
                            Informations de la plateforme
                        </h4>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Plateforme</label>
                                <select class=\"form-select\" id=\"formPlateforme\" required>
                                    <option value=\"\">Sélectionner une plateforme...</option>
                                    <option value=\"facebook\">Facebook</option>
                                    <option value=\"twitter\">Twitter/X</option>
                                    <option value=\"instagram\">Instagram</option>
                                    <option value=\"tiktok\">TikTok</option>
                                    <option value=\"whatsapp\">WhatsApp</option>
                                    <option value=\"telegram\">Telegram</option>
                                    <option value=\"youtube\">YouTube</option>
                                    <option value=\"linkedin\">LinkedIn</option>
                                    <option value=\"autre\">Autre</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Pseudo / Nom de compte</label>
                                <input type=\"text\" class=\"form-input\" id=\"formPseudo\" placeholder=\"@pseudo ou nom de compte\" required>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">URL du profil</label>
                                <input type=\"url\" class=\"form-input\" id=\"formUrl\" placeholder=\"https://...\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Identifiant unique</label>
                                <input type=\"text\" class=\"form-input\" id=\"formIdentifiant\" placeholder=\"ID unique de la plateforme\">
                            </div>
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-shield-line\"></i>
                            Évaluation du risque
                        </h4>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Niveau de risque</label>
                                <select class=\"form-select\" id=\"formNiveauRisque\" required>
                                    <option value=\"faible\">Faible</option>
                                    <option value=\"moyen\">Moyen</option>
                                    <option value=\"eleve\">Élevé</option>
                                    <option value=\"critique\">Critique</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Statut</label>
                                <select class=\"form-select\" id=\"formStatut\">
                                    <option value=\"active\">Active</option>
                                    <option value=\"surveillance\">Sous surveillance</option>
                                    <option value=\"suspendue\">Suspendue</option>
                                    <option value=\"inactive\">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-file-text-line\"></i>
                            Observations
                        </h4>
                        <div class=\"form-row full-width\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">Notes et observations</label>
                                <textarea class=\"form-textarea\" id=\"formObservations\" rows=\"4\" placeholder=\"Informations complémentaires sur cette identité numérique...\"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" onclick=\"closeFormModal()\">
                    <i class=\"ri-close-line\"></i>
                    Annuler
                </button>
                <button class=\"btn btn-primary\" onclick=\"saveIdentity()\">
                    <i class=\"ri-save-line\"></i>
                    Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class=\"toast-container\" id=\"toastContainer\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 356
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 357
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/identites-numeriques.js"), "html", null, true);
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
        return "identites.html.twig";
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
        return array (  488 => 357,  478 => 356,  305 => 189,  295 => 188,  109 => 8,  99 => 7,  88 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Identités Numériques - SIGMA{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/identites-numeriques.css') }}\">
{% endblock %}

{% block body %}
    <!-- Page Header -->
    <div class=\"page-header\">
        <h2 class=\"page-title\">Gestion des Identités Numériques</h2>
        <div class=\"page-breadcrumb\">
            <span>SIGMA</span>
            <span class=\"breadcrumb-separator\">/</span>
            <span>Surveillance</span>
            <span class=\"breadcrumb-separator\">/</span>
            <span style=\"color: var(--primary-color);\">Identités numériques</span>
        </div>
    </div>

    <!-- Statistics Grid -->
    <div class=\"stats-container\">
        <div class=\"stats-grid\" id=\"statsGrid\">
            <div class=\"stat-card-loading\">
                <i class=\"ri-loader-4-line spin\"></i>
                <p>Chargement des statistiques...</p>
            </div>
        </div>
        <div class=\"stats-error\" id=\"statsError\" style=\"display: none;\">
            <i class=\"ri-error-warning-line\"></i>
            <p>Impossible de charger les statistiques</p>
            <button class=\"btn btn-secondary\" onclick=\"fetchStats()\">
                <i class=\"ri-refresh-line\"></i>
                Réessayer
            </button>
        </div>
    </div>

    <!-- Table Container -->
    <div class=\"table-container\">
        <div class=\"table-header\">
            <div class=\"table-header-top\">
                <h3 class=\"table-title\">Registre des Identités Numériques</h3>
                <div class=\"table-actions\">
                    <button class=\"btn btn-ghost\" id=\"refreshBtn\" title=\"Actualiser\">
                        <i class=\"ri-refresh-line\"></i>
                    </button>
                    <button class=\"btn btn-secondary\" id=\"exportBtn\">
                        <i class=\"ri-download-line\"></i>
                        Exporter
                    </button>
                    <button class=\"btn btn-primary\" id=\"addIdentityBtn\">
                        <i class=\"ri-add-line\"></i>
                        Nouvelle Identité
                    </button>
                </div>
            </div>

            <!-- Filters -->
            <div class=\"table-filters\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Recherche</label>
                    <input 
                        type=\"text\" 
                        class=\"filter-input\" 
                        id=\"searchInput\" 
                        placeholder=\"Numéro, nom, prénom...\"
                    >
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Plateforme</label>
                    <select class=\"filter-select\" id=\"plateformeFilter\">
                        <option value=\"\">Toutes les plateformes</option>
                        <option value=\"facebook\">Facebook</option>
                        <option value=\"twitter\">Twitter/X</option>
                        <option value=\"instagram\">Instagram</option>
                        <option value=\"tiktok\">TikTok</option>
                        <option value=\"whatsapp\">WhatsApp</option>
                        <option value=\"telegram\">Telegram</option>
                        <option value=\"youtube\">YouTube</option>
                        <option value=\"linkedin\">LinkedIn</option>
                    </select>
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut</label>
                    <select class=\"filter-select\" id=\"statutFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"active\">Active</option>
                        <option value=\"surveillance\">Sous surveillance</option>
                        <option value=\"suspendue\">Suspendue</option>
                        <option value=\"inactive\">Inactive</option>
                    </select>
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Niveau de risque</label>
                    <select class=\"filter-select\" id=\"risqueFilter\">
                        <option value=\"\">Tous les niveaux</option>
                        <option value=\"critique\">Critique</option>
                        <option value=\"eleve\">Élevé</option>
                        <option value=\"moyen\">Moyen</option>
                        <option value=\"faible\">Faible</option>
                    </select>
                </div>
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Période</label>
                    <select class=\"filter-select\" id=\"periodeFilter\">
                        <option value=\"\">Toutes les périodes</option>
                        <option value=\"7days\">7 derniers jours</option>
                        <option value=\"30days\">30 derniers jours</option>
                        <option value=\"3months\">3 derniers mois</option>
                        <option value=\"6months\">6 derniers mois</option>
                        <option value=\"1year\">1 an</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Table Body -->
        <div class=\"table-body\">
            <!-- Loading State -->
            <div class=\"table-loading\" id=\"tableLoading\">
                <i class=\"ri-loader-4-line spin\"></i>
                <p>Chargement des identités numériques...</p>
            </div>

            <!-- Error State -->
            <div class=\"table-error\" id=\"tableError\" style=\"display: none;\">
                <i class=\"ri-error-warning-line\"></i>
                <p>Erreur lors du chargement des identités</p>
                <small id=\"errorMessage\"></small>
                <button class=\"btn btn-primary\" onclick=\"fetchIdentites()\">
                    <i class=\"ri-refresh-line\"></i>
                    Réessayer
                </button>
            </div>

            <!-- Data Table -->
            <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sujet lié</th>
                        <th>Plateforme</th>
                        <th>Pseudo / Nom de compte</th>
                        <th>Découvert le</th>
                        <th>Niveau de risque</th>
                        <th>Incidents</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"tableBody\">
                    <!-- Data will be generated dynamically -->
                </tbody>
            </table>

            <!-- Empty State -->
            <div class=\"table-empty\" id=\"tableEmpty\" style=\"display: none;\">
                <i class=\"ri-fingerprint-line\"></i>
                <p>Aucune identité numérique trouvée</p>
                <small>Essayez de modifier vos critères de recherche</small>
            </div>
        </div>

        <!-- Table Footer / Pagination -->
        <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
            <div class=\"pagination-info\">
                Affichage de <strong id=\"startEntry\">0</strong> à <strong id=\"endEntry\">0</strong> sur <strong id=\"totalEntries\">0</strong> identités
            </div>
            <div class=\"pagination-controls\">
                <div class=\"page-size-selector\">
                    <label>Afficher</label>
                    <select id=\"pageSizeSelect\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                    <span>par page</span>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block modal %}
    <!-- Modal Détail Identité Numérique -->
    <div class=\"modal\" id=\"identityModal\" style=\"display: none;\">
        <div class=\"modal-content modal-xl\">
            <div class=\"modal-header\">
                <div class=\"modal-header-info\">
                    <h3 id=\"modalTitle\">Détails de l'identité numérique</h3>
                    <span class=\"modal-subtitle\" id=\"modalSubtitle\"></span>
                </div>
                <div class=\"modal-header-actions\">
                    <button class=\"btn btn-ghost\" onclick=\"printIdentityDetail()\" title=\"Imprimer\">
                        <i class=\"ri-printer-line\"></i>
                    </button>
                    <button class=\"btn btn-ghost\" onclick=\"exportIdentityDetail()\" title=\"Exporter\">
                        <i class=\"ri-download-line\"></i>
                    </button>
                    <button class=\"modal-close\" onclick=\"closeModal()\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
            </div>
            <div class=\"modal-body\" id=\"modalBody\">
                <div class=\"loading\">
                    <i class=\"ri-loader-4-line spin\"></i>
                    <p>Chargement des détails...</p>
                </div>
            </div>
            <div class=\"modal-footer\" id=\"modalFooter\" style=\"display: none;\">
                <button class=\"btn btn-secondary\" onclick=\"closeModal()\">
                    <i class=\"ri-close-line\"></i>
                    Fermer
                </button>
                <button class=\"btn btn-warning\" id=\"btnSurveillance\" onclick=\"toggleSurveillance()\">
                    <i class=\"ri-eye-line\"></i>
                    Mettre sous surveillance
                </button>
                <button class=\"btn btn-primary\" id=\"btnEdit\" onclick=\"editCurrentIdentity()\">
                    <i class=\"ri-edit-line\"></i>
                    Modifier
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Ajout/Édition Identité -->
    <div class=\"modal\" id=\"formModal\" style=\"display: none;\">
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <h3 id=\"formModalTitle\">Nouvelle Identité Numérique</h3>
                <button class=\"modal-close\" onclick=\"closeFormModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"identityForm\" class=\"form-grid\">
                    <input type=\"hidden\" id=\"formIdentityId\">
                    
                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-user-line\"></i>
                            Sujet associé
                        </h4>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Sujet lié</label>
                                <select class=\"form-select\" id=\"formSujetId\" required>
                                    <option value=\"\">Sélectionner un sujet...</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-global-line\"></i>
                            Informations de la plateforme
                        </h4>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Plateforme</label>
                                <select class=\"form-select\" id=\"formPlateforme\" required>
                                    <option value=\"\">Sélectionner une plateforme...</option>
                                    <option value=\"facebook\">Facebook</option>
                                    <option value=\"twitter\">Twitter/X</option>
                                    <option value=\"instagram\">Instagram</option>
                                    <option value=\"tiktok\">TikTok</option>
                                    <option value=\"whatsapp\">WhatsApp</option>
                                    <option value=\"telegram\">Telegram</option>
                                    <option value=\"youtube\">YouTube</option>
                                    <option value=\"linkedin\">LinkedIn</option>
                                    <option value=\"autre\">Autre</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Pseudo / Nom de compte</label>
                                <input type=\"text\" class=\"form-input\" id=\"formPseudo\" placeholder=\"@pseudo ou nom de compte\" required>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">URL du profil</label>
                                <input type=\"url\" class=\"form-input\" id=\"formUrl\" placeholder=\"https://...\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Identifiant unique</label>
                                <input type=\"text\" class=\"form-input\" id=\"formIdentifiant\" placeholder=\"ID unique de la plateforme\">
                            </div>
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-shield-line\"></i>
                            Évaluation du risque
                        </h4>
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                <label class=\"form-label required\">Niveau de risque</label>
                                <select class=\"form-select\" id=\"formNiveauRisque\" required>
                                    <option value=\"faible\">Faible</option>
                                    <option value=\"moyen\">Moyen</option>
                                    <option value=\"eleve\">Élevé</option>
                                    <option value=\"critique\">Critique</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Statut</label>
                                <select class=\"form-select\" id=\"formStatut\">
                                    <option value=\"active\">Active</option>
                                    <option value=\"surveillance\">Sous surveillance</option>
                                    <option value=\"suspendue\">Suspendue</option>
                                    <option value=\"inactive\">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4 class=\"form-section-title\">
                            <i class=\"ri-file-text-line\"></i>
                            Observations
                        </h4>
                        <div class=\"form-row full-width\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">Notes et observations</label>
                                <textarea class=\"form-textarea\" id=\"formObservations\" rows=\"4\" placeholder=\"Informations complémentaires sur cette identité numérique...\"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" onclick=\"closeFormModal()\">
                    <i class=\"ri-close-line\"></i>
                    Annuler
                </button>
                <button class=\"btn btn-primary\" onclick=\"saveIdentity()\">
                    <i class=\"ri-save-line\"></i>
                    Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class=\"toast-container\" id=\"toastContainer\"></div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/identites-numeriques.js') }}\"></script>
{% endblock %}
", "identites.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\identites.html.twig");
    }
}
