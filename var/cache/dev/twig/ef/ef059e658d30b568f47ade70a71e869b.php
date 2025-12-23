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

/* organisations.html.twig */
class __TwigTemplate_c0f07d8cd400cec797b7adfaeea39e22 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "organisations.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Organisation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/organisation.css"), "html", null, true);
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
        yield "         <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Organisations</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Organisations</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Vue d'ensemble</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <!-- Stats cards will be generated dynamically -->
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Liste des Organisations Surveillées</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addOrgBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvelle Organisation
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Nom, responsable, contact...\">
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'organisation</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"politique\">Politique</option>
                            <option value=\"religieuse\">Religieuse</option>
                            <option value=\"associative\">Associative</option>
                            <option value=\"economique\">Économique</option>
                            <option value=\"criminelle\">Criminelle</option>
                            <option value=\"terroriste\">Terroriste</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"active\">Active</option>
                            <option value=\"surveillance\">Sous surveillance</option>
                            <option value=\"inactive\">Inactive</option>
                            <option value=\"dissoute\">Dissoute</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Niveau de menace</label>
                        <select class=\"filter-select\" id=\"threatFilter\">
                            <option value=\"\">Tous les niveaux</option>
                            <option value=\"5\">Critique (5/5)</option>
                            <option value=\"4\">Élevé (4/5)</option>
                            <option value=\"3\">Moyen (3/5)</option>
                            <option value=\"2\">Faible (2/5)</option>
                            <option value=\"1\">Très faible (1/5)</option>
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
                            <th onclick=\"sortTable('name')\">
                                Nom de l'organisation <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('responsible')\">
                                Responsable <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Contact</th>
                            <th onclick=\"sortTable('threat')\">
                                Niveau de menace <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('dateAdded')\">
                                Date d'enregistrement <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('status')\">
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
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> organisations
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

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/organisation.js"), "html", null, true);
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
        return "organisations.html.twig";
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
        return array (  247 => 131,  237 => 130,  108 => 8,  98 => 7,  87 => 5,  77 => 4,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Organisation{% endblock %}
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/organisation.css') }}\">
{% endblock %}
   {% block body %}
         <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Organisations</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Organisations</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Vue d'ensemble</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <!-- Stats cards will be generated dynamically -->
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Liste des Organisations Surveillées</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addOrgBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvelle Organisation
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Nom, responsable, contact...\">
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'organisation</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"politique\">Politique</option>
                            <option value=\"religieuse\">Religieuse</option>
                            <option value=\"associative\">Associative</option>
                            <option value=\"economique\">Économique</option>
                            <option value=\"criminelle\">Criminelle</option>
                            <option value=\"terroriste\">Terroriste</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"active\">Active</option>
                            <option value=\"surveillance\">Sous surveillance</option>
                            <option value=\"inactive\">Inactive</option>
                            <option value=\"dissoute\">Dissoute</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Niveau de menace</label>
                        <select class=\"filter-select\" id=\"threatFilter\">
                            <option value=\"\">Tous les niveaux</option>
                            <option value=\"5\">Critique (5/5)</option>
                            <option value=\"4\">Élevé (4/5)</option>
                            <option value=\"3\">Moyen (3/5)</option>
                            <option value=\"2\">Faible (2/5)</option>
                            <option value=\"1\">Très faible (1/5)</option>
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
                            <th onclick=\"sortTable('name')\">
                                Nom de l'organisation <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('responsible')\">
                                Responsable <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Contact</th>
                            <th onclick=\"sortTable('threat')\">
                                Niveau de menace <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('dateAdded')\">
                                Date d'enregistrement <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('status')\">
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
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> organisations
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
   {% endblock %}
   {% block javascripts %}
        <script src=\"{{ asset('js/organisation.js') }}\"></script>
    {% endblock %}", "organisations.html.twig", "/home/xdevcorp/Projects/sigep/templates/organisations.html.twig");
    }
}
