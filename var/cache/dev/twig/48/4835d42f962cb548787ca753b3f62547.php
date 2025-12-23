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

/* incidents.html.twig */
class __TwigTemplate_99778fd1713694e595b321e07a533292 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incidents.html.twig"));

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

        yield "Incidents";
        
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
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/incidents.css"), "html", null, true);
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
        yield "        <!-- Page Header -->
        <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Incidents</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Gestion</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Incidents</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <!-- Stats will be generated dynamically -->
        </div>

        <!-- Quick Actions -->
        <div class=\"quick-actions\">
            <button class=\"action-btn primary\" id=\"viewStatsBtn\">
                <i class=\"ri-bar-chart-line\"></i>
                <span>Statistiques détaillées</span>
            </button>
            <button class=\"action-btn secondary\" id=\"viewMapBtn\">
                <i class=\"ri-map-pin-2-line\"></i>
                <span>Carte des incidents</span>
            </button>
            <button class=\"action-btn info\" id=\"criticalBtn\">
                <i class=\"ri-alarm-warning-fill\"></i>
                <span>Incidents critiques</span>
            </button>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Registre des Incidents</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addIncidentBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvel Incident
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Titre, adresse, description...\">
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'incident</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"attroupement_politique\">Attroupement politique</option>
                            <option value=\"incident_violent\">Incident violent</option>
                            <option value=\"activite_suspecte\">Activité suspecte</option>
                            <option value=\"trouble_ordre_public\">Trouble à l'ordre public</option>
                            <option value=\"rassemblement_religieux\">Rassemblement religieux</option>
                            <option value=\"incident_etablissement\">Incident établissement</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Gravité</label>
                        <select class=\"filter-select\" id=\"graviteFilter\">
                            <option value=\"\">Tous les niveaux</option>
                            <option value=\"critique\">Critique</option>
                            <option value=\"modere\">Modéré</option>
                            <option value=\"faible\">Faible</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statutFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"en_cours\">En cours</option>
                            <option value=\"investigation\">En investigation</option>
                            <option value=\"resolu\">Résolu</option>
                            <option value=\"archive\">Archivé</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Période</label>
                        <select class=\"filter-select\" id=\"periodeFilter\">
                            <option value=\"\">Toute la période</option>
                            <option value=\"today\">Aujourd'hui</option>
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\">Ce mois</option>
                            <option value=\"custom\">Personnalisée</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <table class=\"data-table\" id=\"dataTable\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('id')\">
                                ID <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('titre')\">
                                Titre de l'incident <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('date')\">
                                Date & Heure <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Localisation</th>
                            <th onclick=\"sortTable('gravite')\">
                                Gravité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Entités liées</th>
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
            <div class=\"table-footer\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> incidents
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

    // line 156
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 157
        yield "   <!-- Modal: Détails Incident -->
    <div class=\"modal\" id=\"detailsModal\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Détails de l'incident</h3>
                    <button class=\"modal-close\" onclick=\"closeModal('detailsModal')\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"detailsContent\">
                    <!-- Content will be loaded dynamically -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Nouveau/Modifier Incident -->
    <div class=\"modal\" id=\"formModal\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"formModalTitle\">Nouvel Incident</h3>
                    <button class=\"modal-close\" onclick=\"closeModal('formModal')\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"incidentForm\">
                        <!-- Informations générales -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-information-line\"></i> Informations générales</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Titre de l'incident *</label>
                                    <input type=\"text\" name=\"titre\" class=\"form-input\" required>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Type d'incident *</label>
                                    <select name=\"type\" class=\"form-select\" required>
                                        <option value=\"\">Sélectionner...</option>
                                        <option value=\"attroupement_politique\">Attroupement politique non autorisé</option>
                                        <option value=\"incident_violent\">Incident violent</option>
                                        <option value=\"activite_suspecte\">Activité suspecte</option>
                                        <option value=\"trouble_ordre_public\">Trouble à l'ordre public</option>
                                        <option value=\"rassemblement_religieux\">Rassemblement religieux non déclaré</option>
                                        <option value=\"incident_etablissement\">Incident lié à établissements</option>
                                        <option value=\"autre\">Autre</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Source de l'information</label>
                                    <input type=\"text\" name=\"source\" class=\"form-input\" placeholder=\"Ex: Patrouille terrain, Signalement\">
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Description détaillée *</label>
                                    <textarea name=\"description\" class=\"form-textarea\" rows=\"4\" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Date et heure -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-time-line\"></i> Date et heure</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Date de l'incident *</label>
                                    <input type=\"date\" name=\"date\" class=\"form-input\" required>
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Heure de l'incident *</label>
                                    <input type=\"time\" name=\"heure\" class=\"form-input\" required>
                                </div>
                            </div>
                        </div>

                        <!-- Localisation -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-map-pin-line\"></i> Localisation</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Adresse / Lieu *</label>
                                    <textarea name=\"adresse\" class=\"form-textarea\" rows=\"2\" required></textarea>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Latitude (optionnel)</label>
                                    <input type=\"number\" step=\"0.00000001\" name=\"latitude\" class=\"form-input\" placeholder=\"Ex: 12.1348\">
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Longitude (optionnel)</label>
                                    <input type=\"number\" step=\"0.00000001\" name=\"longitude\" class=\"form-input\" placeholder=\"Ex: 15.0557\">
                                </div>
                            </div>
                        </div>

                        <!-- Classification -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-shield-line\"></i> Classification</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Niveau de gravité *</label>
                                    <select name=\"gravite\" class=\"form-select\" required>
                                        <option value=\"\">Sélectionner...</option>
                                        <option value=\"critique\">Critique</option>
                                        <option value=\"modere\">Modéré</option>
                                        <option value=\"faible\">Faible</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Statut</label>
                                    <select name=\"statut\" class=\"form-select\">
                                        <option value=\"en_cours\">En cours</option>
                                        <option value=\"investigation\">En investigation</option>
                                        <option value=\"resolu\">Résolu</option>
                                        <option value=\"archive\">Archivé</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Contexte -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-file-list-line\"></i> Contexte et observations</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Contexte additionnel</label>
                                    <textarea name=\"contexte\" class=\"form-textarea\" rows=\"4\" placeholder=\"Informations contextuelles, circonstances...\"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal('formModal')\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer l'incident</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Statistiques -->
    <div class=\"modal\" id=\"statsModal\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Statistiques des Incidents</h3>
                    <button class=\"modal-close\" onclick=\"closeModal('statsModal')\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"stats-dashboard\" id=\"statsDashboard\">
                        <!-- Will be generated dynamically -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 325
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
        <script src=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/incidents.js"), "html", null, true);
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
        return "incidents.html.twig";
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
        return array (  462 => 326,  459 => 325,  449 => 324,  275 => 157,  265 => 156,  111 => 8,  101 => 7,  91 => 5,  88 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Incidents{% endblock %}
{% block stylesheets %}
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/incidents.css') }}\">
{% endblock %}
   {% block body %}
        <!-- Page Header -->
        <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Incidents</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Gestion</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Incidents</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <!-- Stats will be generated dynamically -->
        </div>

        <!-- Quick Actions -->
        <div class=\"quick-actions\">
            <button class=\"action-btn primary\" id=\"viewStatsBtn\">
                <i class=\"ri-bar-chart-line\"></i>
                <span>Statistiques détaillées</span>
            </button>
            <button class=\"action-btn secondary\" id=\"viewMapBtn\">
                <i class=\"ri-map-pin-2-line\"></i>
                <span>Carte des incidents</span>
            </button>
            <button class=\"action-btn info\" id=\"criticalBtn\">
                <i class=\"ri-alarm-warning-fill\"></i>
                <span>Incidents critiques</span>
            </button>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Registre des Incidents</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addIncidentBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvel Incident
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Titre, adresse, description...\">
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'incident</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"attroupement_politique\">Attroupement politique</option>
                            <option value=\"incident_violent\">Incident violent</option>
                            <option value=\"activite_suspecte\">Activité suspecte</option>
                            <option value=\"trouble_ordre_public\">Trouble à l'ordre public</option>
                            <option value=\"rassemblement_religieux\">Rassemblement religieux</option>
                            <option value=\"incident_etablissement\">Incident établissement</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Gravité</label>
                        <select class=\"filter-select\" id=\"graviteFilter\">
                            <option value=\"\">Tous les niveaux</option>
                            <option value=\"critique\">Critique</option>
                            <option value=\"modere\">Modéré</option>
                            <option value=\"faible\">Faible</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statutFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"en_cours\">En cours</option>
                            <option value=\"investigation\">En investigation</option>
                            <option value=\"resolu\">Résolu</option>
                            <option value=\"archive\">Archivé</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Période</label>
                        <select class=\"filter-select\" id=\"periodeFilter\">
                            <option value=\"\">Toute la période</option>
                            <option value=\"today\">Aujourd'hui</option>
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\">Ce mois</option>
                            <option value=\"custom\">Personnalisée</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <table class=\"data-table\" id=\"dataTable\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('id')\">
                                ID <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('titre')\">
                                Titre de l'incident <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('date')\">
                                Date & Heure <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Localisation</th>
                            <th onclick=\"sortTable('gravite')\">
                                Gravité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Entités liées</th>
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
            <div class=\"table-footer\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> incidents
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>

   {% endblock %}

    {% block modal %}
   <!-- Modal: Détails Incident -->
    <div class=\"modal\" id=\"detailsModal\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Détails de l'incident</h3>
                    <button class=\"modal-close\" onclick=\"closeModal('detailsModal')\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"detailsContent\">
                    <!-- Content will be loaded dynamically -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Nouveau/Modifier Incident -->
    <div class=\"modal\" id=\"formModal\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"formModalTitle\">Nouvel Incident</h3>
                    <button class=\"modal-close\" onclick=\"closeModal('formModal')\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"incidentForm\">
                        <!-- Informations générales -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-information-line\"></i> Informations générales</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Titre de l'incident *</label>
                                    <input type=\"text\" name=\"titre\" class=\"form-input\" required>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Type d'incident *</label>
                                    <select name=\"type\" class=\"form-select\" required>
                                        <option value=\"\">Sélectionner...</option>
                                        <option value=\"attroupement_politique\">Attroupement politique non autorisé</option>
                                        <option value=\"incident_violent\">Incident violent</option>
                                        <option value=\"activite_suspecte\">Activité suspecte</option>
                                        <option value=\"trouble_ordre_public\">Trouble à l'ordre public</option>
                                        <option value=\"rassemblement_religieux\">Rassemblement religieux non déclaré</option>
                                        <option value=\"incident_etablissement\">Incident lié à établissements</option>
                                        <option value=\"autre\">Autre</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Source de l'information</label>
                                    <input type=\"text\" name=\"source\" class=\"form-input\" placeholder=\"Ex: Patrouille terrain, Signalement\">
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Description détaillée *</label>
                                    <textarea name=\"description\" class=\"form-textarea\" rows=\"4\" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Date et heure -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-time-line\"></i> Date et heure</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Date de l'incident *</label>
                                    <input type=\"date\" name=\"date\" class=\"form-input\" required>
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Heure de l'incident *</label>
                                    <input type=\"time\" name=\"heure\" class=\"form-input\" required>
                                </div>
                            </div>
                        </div>

                        <!-- Localisation -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-map-pin-line\"></i> Localisation</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Adresse / Lieu *</label>
                                    <textarea name=\"adresse\" class=\"form-textarea\" rows=\"2\" required></textarea>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Latitude (optionnel)</label>
                                    <input type=\"number\" step=\"0.00000001\" name=\"latitude\" class=\"form-input\" placeholder=\"Ex: 12.1348\">
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Longitude (optionnel)</label>
                                    <input type=\"number\" step=\"0.00000001\" name=\"longitude\" class=\"form-input\" placeholder=\"Ex: 15.0557\">
                                </div>
                            </div>
                        </div>

                        <!-- Classification -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-shield-line\"></i> Classification</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-6\">
                                    <label>Niveau de gravité *</label>
                                    <select name=\"gravite\" class=\"form-select\" required>
                                        <option value=\"\">Sélectionner...</option>
                                        <option value=\"critique\">Critique</option>
                                        <option value=\"modere\">Modéré</option>
                                        <option value=\"faible\">Faible</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-6\">
                                    <label>Statut</label>
                                    <select name=\"statut\" class=\"form-select\">
                                        <option value=\"en_cours\">En cours</option>
                                        <option value=\"investigation\">En investigation</option>
                                        <option value=\"resolu\">Résolu</option>
                                        <option value=\"archive\">Archivé</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Contexte -->
                        <div class=\"form-section\">
                            <h4 class=\"section-title\"><i class=\"ri-file-list-line\"></i> Contexte et observations</h4>
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label>Contexte additionnel</label>
                                    <textarea name=\"contexte\" class=\"form-textarea\" rows=\"4\" placeholder=\"Informations contextuelles, circonstances...\"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal('formModal')\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer l'incident</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Statistiques -->
    <div class=\"modal\" id=\"statsModal\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Statistiques des Incidents</h3>
                    <button class=\"modal-close\" onclick=\"closeModal('statsModal')\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"stats-dashboard\" id=\"statsDashboard\">
                        <!-- Will be generated dynamically -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% endblock %}
    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
        <script src=\"{{ asset('js/incidents.js') }}\"></script>
    {% endblock %}", "incidents.html.twig", "/home/xdevcorp/Projects/sigep/templates/incidents.html.twig");
    }
}
