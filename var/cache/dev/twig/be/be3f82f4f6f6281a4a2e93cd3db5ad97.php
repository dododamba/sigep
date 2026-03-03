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

/* dashboard/index.html.twig */
class __TwigTemplate_7f297209b0d94bf9ea1da4f62c78a90b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        yield "Tableau de Bord - SIGEP Tchad
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<!-- Header -->
\t<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
\t\t<div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
\t\t\t<div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
\t\t\t\t<h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Tableau de bord</h1>
\t\t\t\t<ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
\t\t\t\t\t<li class=\"breadcrumb-item text-muted\">
\t\t\t\t\t\t<a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-muted text-hover-primary\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item text-muted\">Vue d'ensemble</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center gap-2 gap-lg-3\">
\t\t\t\t<span class=\"text-gray-500 fs-7 fw-bold\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 23, $this->source); })()), "F Y")), "html", null, true);
        yield "</span>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Content -->
\t<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
\t\t<div
\t\t\tid=\"kt_app_content_container\" class=\"app-container container-xxl\">

\t\t\t<!-- Stats Widgets -->
\t\t\t<div
\t\t\t\tclass=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
\t\t\t\t<!-- Projets Actifs -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #002664;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()), "projectsActifs", [], "any", false, false, false, 42), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "projectsCeMois", [], "any", false, false, false, 43) > 0)) {
            // line 44
            yield "\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-success fs-base\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ki-outline ki-arrow-up fs-5 text-success ms-n1\"></i>
\t\t\t\t\t\t\t\t\t\t\t+";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 46, $this->source); })()), "projectsCeMois", [], "any", false, false, false, 46), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets actifs</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-column mt-3 w-100\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold fs-7 text-gray-400\">Progression globale</span>
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold fs-7\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "tauxExecution", [], "any", false, false, false, 57), "html", null, true);
        yield "%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"h-8px mx-3 w-100 bg-light-primary rounded\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary rounded h-8px\" role=\"progressbar\" style=\"width: ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "tauxExecution", [], "any", false, false, false, 60), "html", null, true);
        yield "%;\" aria-valuenow=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "tauxExecution", [], "any", false, false, false, 60), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Financements & Conventions -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #fecb00;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 73, $this->source); })()), "budgetTotal", [], "any", false, false, false, 73) / 1000000000), 1, ",", " "), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400 fs-4 fw-bold mt-1\">Mds</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget total (FCFA)</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-light-warning fs-7 fw-bold\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 81, $this->source); })()), "totalFinancements", [], "any", false, false, false, 81), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\tfinancements /
\t\t\t\t\t\t\t\t\t";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 83, $this->source); })()), "financementsActifs", [], "any", false, false, false, 83), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\tconventions</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Décaissements -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #10b981;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 96, $this->source); })()), "montantDecaissementsExecutes", [], "any", false, false, false, 96) / 1000000000), 1, ",", " "), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400 fs-4 fw-bold mt-1\">Mds</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Décaissements exécutés</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t<span class=\"fs-7 fw-bold text-gray-500\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 104, $this->source); })()), "decaissementsEnAttente", [], "any", false, false, false, 104), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\ten attente de validation</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Audits & Risques -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #c60c30;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 117, $this->source); })()), "totalAudits", [], "any", false, false, false, 117), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-danger fs-base ms-2\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 118, $this->source); })()), "auditsPlanifies", [], "any", false, false, false, 118), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\tplanifiés</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Audits de contrôle</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<i data-lucide=\"alert-circle\" class=\"text-danger me-2\" style=\"width: 18px; height: 18px;\"></i>
\t\t\t\t\t\t\t\t<span class=\"fs-7 text-gray-500\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 127, $this->source); })()), "projectsEnRetard", [], "any", false, false, false, 127), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\tprojets en retard</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"row g-5 g-xl-10\">
\t\t\t\t<!-- Left Column: Chart and Recent Projects -->
\t\t\t\t<div
\t\t\t\t\tclass=\"col-xl-8\">
\t\t\t\t\t<!-- Budget Chart -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Exécution budgétaire par secteur</span>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 mt-1 fw-semibold fs-7\">Comparaison Budget vs Décaissement (Mds FCFA)</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"card-toolbar\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-light-primary\" onclick=\"exportChart()\">
\t\t\t\t\t\t\t\t\t<i data-lucide=\"download\" class=\"me-2\" style=\"width: 14px; height: 14px;\"></i>
\t\t\t\t\t\t\t\t\tExporter
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-2\">
\t\t\t\t\t\t\t<div class=\"chart-container\" style=\"height: 350px;\">
\t\t\t\t\t\t\t\t<canvas id=\"budgetChart\"></canvas>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Recent Projects -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Projets récents</span>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 mt-1 fw-semibold fs-7\">Dernières mises à jour du portefeuille</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"card-toolbar\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"btn btn-sm btn-light\">Voir tout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-2\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table align-middle table-row-dashed fs-6 gy-3\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-200px\">Projet</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px\">Secteur</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px\">Budget</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-150px\">Progression</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px text-end\">Statut</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody class=\"fw-semibold text-gray-600\">
\t\t\t\t\t\t\t\t\t\t";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recentProjects"]) || array_key_exists("recentProjects", $context) ? $context["recentProjects"] : (function () { throw new RuntimeError('Variable "recentProjects" does not exist.', 185, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 186
            yield "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 189)]), "html", null, true);
            yield "\" class=\"text-dark text-hover-primary fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 189), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 190
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "priorite", [], "any", false, false, false, 190) == "haute")) {
                // line 191
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-danger fw-bold px-4 py-3 mt-1\" style=\"width: fit-content;\">Prioritaire</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-primary\">";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sectorLabel", [], "any", false, false, false, 196), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 199
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 200
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 200) / 1000000000), 2, ",", " "), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMds</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 203
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400\">Non défini</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 205
            yield "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center w-100 flex-column mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold fs-7\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 209), "html", null, true);
            yield "%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h-5px mx-3 w-100 bg-light rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 212
            $context["progColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 212) >= 75)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 212) >= 50)) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 212) >= 25)) ? ("warning") : ("danger"))))));
            // line 213
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progColor"]) || array_key_exists("progColor", $context) ? $context["progColor"] : (function () { throw new RuntimeError('Variable "progColor" does not exist.', 213, $this->source); })()), "html", null, true);
            yield " rounded h-5px\" role=\"progressbar\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 213), "html", null, true);
            yield "%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 218
            $context["statusBadge"] = ["planifie" => "light-secondary", "en-cours" => "light-primary", "en-retard" => "light-danger", "termine" => "light-success", "suspendu" => "light-warning"];
            // line 225
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusBadge"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 225), [], "array", true, true, false, 225) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 225, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 225), [], "array", false, false, false, 225)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 225, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 225), [], "array", false, false, false, 225), "html", null, true)) : ("light"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statusLabel", [], "any", false, false, false, 225), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Recent Audits -->
\t\t\t\t\t<div class=\"card card-flush\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Audits & Contrôles récents</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"card-toolbar\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 242
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_index");
        yield "\" class=\"btn btn-sm btn-light\">Tous les audits</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-2\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table align-middle table-row-dashed fs-6 gy-3\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
\t\t\t\t\t\t\t\t\t\t\t<th>Titre / Mission</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Projet</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Statut</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody class=\"fw-semibold text-gray-600\">
\t\t\t\t\t\t\t\t\t\t";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentAudits"]) || array_key_exists("recentAudits", $context) ? $context["recentAudits"] : (function () { throw new RuntimeError('Variable "recentAudits" does not exist.', 257, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
            // line 258
            yield "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "title", [], "any", false, false, false, 259), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 260
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "project", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "project", [], "any", false, false, false, 260), "name", [], "any", false, false, false, 260)), "truncate", [30], "method", false, false, false, 260), "html", null, true)) : ("Général"));
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 261), "d/m/Y"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 263
            $context["auditColor"] = (((CoreExtension::getAttribute($this->env, $this->source, ["planifie" => "warning", "en_cours" => "primary", "termine" => "success"], CoreExtension::getAttribute($this->env, $this->source,             // line 267
$context["audit"], "statut", [], "any", false, false, false, 267), [], "array", true, true, false, 264) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["planifie" => "warning", "en_cours" => "primary", "termine" => "success"], CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 267), [], "array", false, false, false, 264)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["planifie" => "warning", "en_cours" => "primary", "termine" => "success"], CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 267), [], "array", false, false, false, 264)) : ("secondary"));
            // line 268
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["auditColor"]) || array_key_exists("auditColor", $context) ? $context["auditColor"] : (function () { throw new RuntimeError('Variable "auditColor" does not exist.', 268, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 268)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Right Column: Activity, Partners and more -->
\t\t\t\t<div
\t\t\t\t\tclass=\"col-xl-4\">
\t\t\t\t\t<!-- Activity Feed -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Activité récente</span>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 mt-1 fw-semibold fs-7\">Derniers événements système</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t<div class=\"timeline-label\">
\t\t\t\t\t\t\t\t";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activitesRecentes"]) || array_key_exists("activitesRecentes", $context) ? $context["activitesRecentes"] : (function () { throw new RuntimeError('Variable "activitesRecentes" does not exist.', 292, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 293
            yield "\t\t\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-label fw-bold text-gray-800 fs-6\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 295
            if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 295), "Y-m-d") == $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"))) {
                // line 296
                yield "\t\t\t\t\t\t\t\t\t\t\t\tAuj.
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 298
                yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 298), "d/m"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 300
            yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 302
            $context["dotColor"] = (((CoreExtension::getAttribute($this->env, $this->source, ["green" => "success", "blue" => "primary", "gold" => "warning", "red" => "danger"], CoreExtension::getAttribute($this->env, $this->source,             // line 307
$context["activite"], "iconClass", [], "any", false, false, false, 307), [], "array", true, true, false, 303) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["green" => "success", "blue" => "primary", "gold" => "warning", "red" => "danger"], CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "iconClass", [], "any", false, false, false, 307), [], "array", false, false, false, 303)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["green" => "success", "blue" => "primary", "gold" => "warning", "red" => "danger"], CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "iconClass", [], "any", false, false, false, 307), [], "array", false, false, false, 303)) : ("secondary"));
            // line 308
            yield "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-genderless text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dotColor"]) || array_key_exists("dotColor", $context) ? $context["dotColor"] : (function () { throw new RuntimeError('Variable "dotColor" does not exist.', 308, $this->source); })()), "html", null, true);
            yield " fs-1\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-content fw-semibold text-gray-600 ps-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-dark fs-6\">";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "title", [], "any", false, false, false, 311), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-7\">";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 312), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activite'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Top Partners -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Partenaires principaux</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topPartners"]) || array_key_exists("topPartners", $context) ? $context["topPartners"] : (function () { throw new RuntimeError('Variable "topPartners" does not exist.', 328, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 329
            yield "\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack mb-7\">
\t\t\t\t\t\t\t\t\t<div class=\"symbol symbol-40px symbol-circle me-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-info text-info fw-bold\">";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "acronym", [], "any", false, false, false, 331), 0, 2), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-row-fluid d-grid gap-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-gray-800 text-hover-primary fw-bold font-size-h6\">";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 335), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400 fw-semibold d-block fs-7\">";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "acronym", [], "any", false, false, false, 336), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-800 fw-bold fs-6 me-3\">";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "projectCount", [], "any", false, false, false, 339), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\tprojets</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        yield "\t\t\t\t\t\t\t<div class=\"text-center mt-5\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 346
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"btn btn-sm btn-light\">Gérer les partenaires</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Sector Breakdown -->
\t\t\t\t\t<div class=\"card card-flush\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Répartition par secteur</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t";
        // line 359
        $context["totalBudget"] = 0;
        // line 360
        yield "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorsData"]) || array_key_exists("sectorsData", $context) ? $context["sectorsData"] : (function () { throw new RuntimeError('Variable "sectorsData" does not exist.', 360, $this->source); })()));
        foreach ($context['_seq'] as $context["sector"] => $context["data"]) {
            // line 361
            yield "\t\t\t\t\t\t\t\t";
            $context["totalBudget"] = ((isset($context["totalBudget"]) || array_key_exists("totalBudget", $context) ? $context["totalBudget"] : (function () { throw new RuntimeError('Variable "totalBudget" does not exist.', 361, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["data"], "budget", [], "any", false, false, false, 361));
            // line 362
            yield "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sector'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        yield "
\t\t\t\t\t\t\t";
        // line 364
        $context["sectorColors"] = ["infrastructure" => "primary", "sante" => "success", "energie" => "warning", "agriculture" => "info", "education" => "danger", "eau" => "dark"];
        // line 372
        yield "\t\t\t\t\t\t\t";
        $context["sectorLabels"] = ["infrastructure" => "Infrastructure", "sante" => "Santé", "energie" => "Énergie", "agriculture" => "Agriculture", "education" => "Éducation", "eau" => "Eau & Assainissement"];
        // line 380
        yield "
\t\t\t\t\t\t\t";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorsData"]) || array_key_exists("sectorsData", $context) ? $context["sectorsData"] : (function () { throw new RuntimeError('Variable "sectorsData" does not exist.', 381, $this->source); })()));
        foreach ($context['_seq'] as $context["sector"] => $context["data"]) {
            // line 382
            yield "\t\t\t\t\t\t\t\t";
            $context["percentage"] = ((((isset($context["totalBudget"]) || array_key_exists("totalBudget", $context) ? $context["totalBudget"] : (function () { throw new RuntimeError('Variable "totalBudget" does not exist.', 382, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "budget", [], "any", false, false, false, 382) / (isset($context["totalBudget"]) || array_key_exists("totalBudget", $context) ? $context["totalBudget"] : (function () { throw new RuntimeError('Variable "totalBudget" does not exist.', 382, $this->source); })())) * 100), 0)) : (0));
            // line 383
            yield "\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack mb-5\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"symbol symbol-35px symbol-circle me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-";
            // line 386
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sectorColors"] ?? null), $context["sector"], [], "array", true, true, false, 386) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 386, $this->source); })()), $context["sector"], [], "array", false, false, false, 386)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 386, $this->source); })()), $context["sector"], [], "array", false, false, false, 386), "html", null, true)) : ("secondary"));
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ki-outline ki-abstract-26 fs-4 text-";
            // line 387
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sectorColors"] ?? null), $context["sector"], [], "array", true, true, false, 387) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 387, $this->source); })()), $context["sector"], [], "array", false, false, false, 387)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 387, $this->source); })()), $context["sector"], [], "array", false, false, false, 387), "html", null, true)) : ("secondary"));
            yield "\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark text-hover-primary fw-bold\">";
            // line 391
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sectorLabels"] ?? null), $context["sector"], [], "array", true, true, false, 391) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorLabels"]) || array_key_exists("sectorLabels", $context) ? $context["sectorLabels"] : (function () { throw new RuntimeError('Variable "sectorLabels" does not exist.', 391, $this->source); })()), $context["sector"], [], "array", false, false, false, 391)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorLabels"]) || array_key_exists("sectorLabels", $context) ? $context["sectorLabels"] : (function () { throw new RuntimeError('Variable "sectorLabels" does not exist.', 391, $this->source); })()), $context["sector"], [], "array", false, false, false, 391), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["sector"]), "html", null, true)));
            yield "</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-semibold fs-7\">";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "budget", [], "any", false, false, false, 392) / 1000000000), 1, ",", " "), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\tMds FCFA</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark fw-bold fs-6 me-3\">";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 397, $this->source); })()), "html", null, true);
            yield "%</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress h-6px w-50px bg-light-";
            // line 398
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sectorColors"] ?? null), $context["sector"], [], "array", true, true, false, 398) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 398, $this->source); })()), $context["sector"], [], "array", false, false, false, 398)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 398, $this->source); })()), $context["sector"], [], "array", false, false, false, 398), "html", null, true)) : ("secondary"));
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-";
            // line 399
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sectorColors"] ?? null), $context["sector"], [], "array", true, true, false, 399) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 399, $this->source); })()), $context["sector"], [], "array", false, false, false, 399)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 399, $this->source); })()), $context["sector"], [], "array", false, false, false, 399), "html", null, true)) : ("secondary"));
            yield "\" role=\"progressbar\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 399, $this->source); })()), "html", null, true);
            yield "%\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sector'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 412
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 413
        yield "\t<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () { // Initialisation des icônes Lucide si disponibles
if (typeof lucide !== 'undefined') {
lucide.createIcons();
}

// Données pour le graphique par secteur
const sectorsData = ";
        // line 421
        yield json_encode((isset($context["sectorsData"]) || array_key_exists("sectorsData", $context) ? $context["sectorsData"] : (function () { throw new RuntimeError('Variable "sectorsData" does not exist.', 421, $this->source); })()));
        yield ";

const sectorLabels = {
'infrastructure': 'Infrastructure',
'sante': 'Santé',
'energie': 'Énergie',
'agriculture': 'Agriculture',
'education': 'Éducation',
'eau': 'Eau & Assainissement'
};

const labels = [];
const budgets = [];
const decaisses = [];

for (const [key, data] of Object.entries(sectorsData)) {
labels.push(sectorLabels[key] || key);
budgets.push((data.budget / 1000000000).toFixed(2));
decaisses.push((data.decaisse / 1000000000).toFixed(2));
}

// Graphique Budget par secteur
const budgetCtx = document.getElementById('budgetChart');
if (budgetCtx && labels.length > 0) {
new Chart(budgetCtx, {
type: 'bar',
data: {
labels: labels,
datasets: [
{
label: 'Budget engagé (Mds FCFA)',
data: budgets,
backgroundColor: 'rgba(0, 38, 100, 0.85)',
borderColor: '#002664',
borderWidth: 1,
borderRadius: 6
}, {
label: 'Montant décaissé (Mds FCFA)',
data: decaisses,
backgroundColor: 'rgba(254, 203, 0, 0.85)',
borderColor: '#FECB00',
borderWidth: 1,
borderRadius: 6
}
]
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
position: 'bottom',
labels: {
usePointStyle: true,
padding: 20,
font: {
size: 12
}
}
},
tooltip: {
backgroundColor: 'rgba(0, 0, 0, 0.8)',
padding: 12,
titleFont: {
size: 14,
weight: 'bold'
},
bodyFont: {
size: 13
},
callbacks: {
label: function (context) {
return context.dataset.label + ': ' + context.raw + ' Mds FCFA';
}
}
}
},
scales: {
x: {
grid: {
display: false
},
ticks: {
font: {
size: 11
}
}
},
y: {
beginAtZero: true,
grid: {
color: 'rgba(0, 0, 0, 0.05)'
},
ticks: {
font: {
size: 11
},
callback: function (value) {
return value + ' Mds';
}
}
}
}
}
});
}
});

// Fonction d'export
function exportChart() {
const canvas = document.getElementById('budgetChart');
if (canvas) {
const link = document.createElement('a');
link.download = 'execution-budgetaire-secteur.png';
link.href = canvas.toDataURL();
link.click();
}
}
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  730 => 421,  720 => 413,  710 => 412,  696 => 404,  683 => 399,  679 => 398,  675 => 397,  667 => 392,  663 => 391,  656 => 387,  652 => 386,  647 => 383,  644 => 382,  640 => 381,  637 => 380,  634 => 372,  632 => 364,  629 => 363,  623 => 362,  620 => 361,  615 => 360,  613 => 359,  597 => 346,  594 => 345,  582 => 339,  576 => 336,  572 => 335,  565 => 331,  561 => 329,  557 => 328,  543 => 316,  533 => 312,  529 => 311,  522 => 308,  520 => 307,  519 => 302,  515 => 300,  509 => 298,  505 => 296,  503 => 295,  499 => 293,  495 => 292,  473 => 272,  460 => 268,  458 => 267,  457 => 263,  452 => 261,  448 => 260,  444 => 259,  441 => 258,  437 => 257,  419 => 242,  404 => 229,  391 => 225,  389 => 218,  378 => 213,  376 => 212,  370 => 209,  364 => 205,  360 => 203,  353 => 200,  351 => 199,  345 => 196,  340 => 193,  336 => 191,  334 => 190,  328 => 189,  323 => 186,  319 => 185,  300 => 169,  255 => 127,  243 => 118,  239 => 117,  223 => 104,  212 => 96,  196 => 83,  191 => 81,  180 => 73,  162 => 60,  156 => 57,  146 => 49,  140 => 46,  136 => 44,  134 => 43,  130 => 42,  108 => 23,  96 => 14,  87 => 7,  77 => 6,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord - SIGEP Tchad
{% endblock %}

{% block body %}
\t<!-- Header -->
\t<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
\t\t<div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
\t\t\t<div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
\t\t\t\t<h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Tableau de bord</h1>
\t\t\t\t<ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
\t\t\t\t\t<li class=\"breadcrumb-item text-muted\">
\t\t\t\t\t\t<a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item text-muted\">Vue d'ensemble</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center gap-2 gap-lg-3\">
\t\t\t\t<span class=\"text-gray-500 fs-7 fw-bold\">{{ currentDate|date('F Y')|capitalize }}</span>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Content -->
\t<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
\t\t<div
\t\t\tid=\"kt_app_content_container\" class=\"app-container container-xxl\">

\t\t\t<!-- Stats Widgets -->
\t\t\t<div
\t\t\t\tclass=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
\t\t\t\t<!-- Projets Actifs -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #002664;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ stats.projectsActifs }}</span>
\t\t\t\t\t\t\t\t\t{% if stats.projectsCeMois > 0 %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-success fs-base\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ki-outline ki-arrow-up fs-5 text-success ms-n1\"></i>
\t\t\t\t\t\t\t\t\t\t\t+{{ stats.projectsCeMois }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets actifs</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-column mt-3 w-100\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold fs-7 text-gray-400\">Progression globale</span>
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold fs-7\">{{ stats.tauxExecution }}%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"h-8px mx-3 w-100 bg-light-primary rounded\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary rounded h-8px\" role=\"progressbar\" style=\"width: {{ stats.tauxExecution }}%;\" aria-valuenow=\"{{ stats.tauxExecution }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Financements & Conventions -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #fecb00;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ (stats.budgetTotal / 1000000000)|number_format(1, ',', ' ') }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400 fs-4 fw-bold mt-1\">Mds</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget total (FCFA)</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-light-warning fs-7 fw-bold\">{{ stats.totalFinancements }}
\t\t\t\t\t\t\t\t\tfinancements /
\t\t\t\t\t\t\t\t\t{{ stats.financementsActifs }}
\t\t\t\t\t\t\t\t\tconventions</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Décaissements -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #10b981;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ (stats.montantDecaissementsExecutes / 1000000000)|number_format(1, ',', ' ') }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400 fs-4 fw-bold mt-1\">Mds</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Décaissements exécutés</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t<span class=\"fs-7 fw-bold text-gray-500\">{{ stats.decaissementsEnAttente }}
\t\t\t\t\t\t\t\t\ten attente de validation</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Audits & Risques -->
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card card-flush h-md-100\" style=\"border-top: 4px solid #c60c30;\">
\t\t\t\t\t\t<div class=\"card-header pt-5\">
\t\t\t\t\t\t\t<div class=\"card-title d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ stats.totalAudits }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-danger fs-base ms-2\">{{ stats.auditsPlanifies }}
\t\t\t\t\t\t\t\t\t\tplanifiés</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Audits de contrôle</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body d-flex align-items-end pt-0 pb-5\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<i data-lucide=\"alert-circle\" class=\"text-danger me-2\" style=\"width: 18px; height: 18px;\"></i>
\t\t\t\t\t\t\t\t<span class=\"fs-7 text-gray-500\">{{ stats.projectsEnRetard }}
\t\t\t\t\t\t\t\t\tprojets en retard</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"row g-5 g-xl-10\">
\t\t\t\t<!-- Left Column: Chart and Recent Projects -->
\t\t\t\t<div
\t\t\t\t\tclass=\"col-xl-8\">
\t\t\t\t\t<!-- Budget Chart -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Exécution budgétaire par secteur</span>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 mt-1 fw-semibold fs-7\">Comparaison Budget vs Décaissement (Mds FCFA)</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"card-toolbar\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-light-primary\" onclick=\"exportChart()\">
\t\t\t\t\t\t\t\t\t<i data-lucide=\"download\" class=\"me-2\" style=\"width: 14px; height: 14px;\"></i>
\t\t\t\t\t\t\t\t\tExporter
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-2\">
\t\t\t\t\t\t\t<div class=\"chart-container\" style=\"height: 350px;\">
\t\t\t\t\t\t\t\t<canvas id=\"budgetChart\"></canvas>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Recent Projects -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Projets récents</span>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 mt-1 fw-semibold fs-7\">Dernières mises à jour du portefeuille</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"card-toolbar\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_projects') }}\" class=\"btn btn-sm btn-light\">Voir tout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-2\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table align-middle table-row-dashed fs-6 gy-3\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-200px\">Projet</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px\">Secteur</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px\">Budget</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-150px\">Progression</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px text-end\">Statut</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody class=\"fw-semibold text-gray-600\">
\t\t\t\t\t\t\t\t\t\t{% for project in recentProjects|slice(0, 5) %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_projects_show', {slug: project.slug}) }}\" class=\"text-dark text-hover-primary fw-bold\">{{ project.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if project.priorite == 'haute' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-danger fw-bold px-4 py-3 mt-1\" style=\"width: fit-content;\">Prioritaire</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-primary\">{{ project.sectorLabel }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if project.budgetTotal %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">{{ (project.budgetTotal / 1000000000)|number_format(2, ',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMds</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400\">Non défini</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center w-100 flex-column mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold fs-7\">{{ project.progress }}%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h-5px mx-3 w-100 bg-light rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set progColor = project.progress >= 75 ? 'success' : (project.progress >= 50 ? 'primary' : (project.progress >= 25 ? 'warning' : 'danger')) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-{{ progColor }} rounded h-5px\" role=\"progressbar\" style=\"width: {{ project.progress }}%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set statusBadge = {
                                                    'planifie': 'light-secondary',
                                                    'en-cours': 'light-primary',
                                                    'en-retard': 'light-danger',
                                                    'termine': 'light-success',
                                                    'suspendu': 'light-warning'
                                                } %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-{{ statusBadge[project.status] ?? 'light' }}\">{{ project.statusLabel }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Recent Audits -->
\t\t\t\t\t<div class=\"card card-flush\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Audits & Contrôles récents</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"card-toolbar\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_audit_index') }}\" class=\"btn btn-sm btn-light\">Tous les audits</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-2\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table align-middle table-row-dashed fs-6 gy-3\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
\t\t\t\t\t\t\t\t\t\t\t<th>Titre / Mission</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Projet</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">Statut</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody class=\"fw-semibold text-gray-600\">
\t\t\t\t\t\t\t\t\t\t{% for audit in recentAudits %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ audit.title }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ audit.project ? audit.project.name|u.truncate(30) : 'Général' }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ audit.dateAudit|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set auditColor = {
                                                    'planifie': 'warning',
                                                    'en_cours': 'primary',
                                                    'termine': 'success'
                                                }[audit.statut] ?? 'secondary' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-{{ auditColor }}\">{{ audit.statut|capitalize }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Right Column: Activity, Partners and more -->
\t\t\t\t<div
\t\t\t\t\tclass=\"col-xl-4\">
\t\t\t\t\t<!-- Activity Feed -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Activité récente</span>
\t\t\t\t\t\t\t\t<span class=\"text-gray-400 mt-1 fw-semibold fs-7\">Derniers événements système</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t<div class=\"timeline-label\">
\t\t\t\t\t\t\t\t{% for activite in activitesRecentes %}
\t\t\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-label fw-bold text-gray-800 fs-6\">
\t\t\t\t\t\t\t\t\t\t\t{% if activite.date|date('Y-m-d') == 'now'|date('Y-m-d') %}
\t\t\t\t\t\t\t\t\t\t\t\tAuj.
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ activite.date|date('d/m') }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t\t\t\t\t{% set dotColor = {
                                            'green': 'success',
                                            'blue': 'primary',
                                            'gold': 'warning',
                                            'red': 'danger'
                                        }[activite.iconClass] ?? 'secondary' %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-genderless text-{{ dotColor }} fs-1\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-content fw-semibold text-gray-600 ps-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-dark fs-6\">{{ activite.title }}</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-7\">{{ activite.description }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Top Partners -->
\t\t\t\t\t<div class=\"card card-flush mb-5 mb-xl-10\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Partenaires principaux</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t{% for partner in topPartners %}
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack mb-7\">
\t\t\t\t\t\t\t\t\t<div class=\"symbol symbol-40px symbol-circle me-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-info text-info fw-bold\">{{ partner.acronym|slice(0, 2) }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-row-fluid d-grid gap-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-gray-800 text-hover-primary fw-bold font-size-h6\">{{ partner.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-400 fw-semibold d-block fs-7\">{{ partner.acronym }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-800 fw-bold fs-6 me-3\">{{ partner.projectCount }}
\t\t\t\t\t\t\t\t\t\t\t\tprojets</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<div class=\"text-center mt-5\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_partners') }}\" class=\"btn btn-sm btn-light\">Gérer les partenaires</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Sector Breakdown -->
\t\t\t\t\t<div class=\"card card-flush\">
\t\t\t\t\t\t<div class=\"card-header pt-7\">
\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t<span class=\"card-label fw-bold text-dark\">Répartition par secteur</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t{% set totalBudget = 0 %}
\t\t\t\t\t\t\t{% for sector, data in sectorsData %}
\t\t\t\t\t\t\t\t{% set totalBudget = totalBudget + data.budget %}
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{% set sectorColors = {
                            'infrastructure': 'primary',
                            'sante': 'success',
                            'energie': 'warning',
                            'agriculture': 'info',
                            'education': 'danger',
                            'eau': 'dark'
                        } %}
\t\t\t\t\t\t\t{% set sectorLabels = {
                            'infrastructure': 'Infrastructure',
                            'sante': 'Santé',
                            'energie': 'Énergie',
                            'agriculture': 'Agriculture',
                            'education': 'Éducation',
                            'eau': 'Eau & Assainissement'
                        } %}

\t\t\t\t\t\t\t{% for sector, data in sectorsData %}
\t\t\t\t\t\t\t\t{% set percentage = totalBudget > 0 ? ((data.budget / totalBudget) * 100)|round(0) : 0 %}
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack mb-5\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"symbol symbol-35px symbol-circle me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-{{ sectorColors[sector] ?? 'secondary' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ki-outline ki-abstract-26 fs-4 text-{{ sectorColors[sector] ?? 'secondary' }}\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark text-hover-primary fw-bold\">{{ sectorLabels[sector] ?? sector|capitalize }}</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-semibold fs-7\">{{ (data.budget / 1000000000)|number_format(1, ',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\tMds FCFA</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark fw-bold fs-6 me-3\">{{ percentage }}%</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress h-6px w-50px bg-light-{{ sectorColors[sector] ?? 'secondary' }}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-{{ sectorColors[sector] ?? 'secondary' }}\" role=\"progressbar\" style=\"width: {{ percentage }}%\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () { // Initialisation des icônes Lucide si disponibles
if (typeof lucide !== 'undefined') {
lucide.createIcons();
}

// Données pour le graphique par secteur
const sectorsData = {{ sectorsData|json_encode|raw }};

const sectorLabels = {
'infrastructure': 'Infrastructure',
'sante': 'Santé',
'energie': 'Énergie',
'agriculture': 'Agriculture',
'education': 'Éducation',
'eau': 'Eau & Assainissement'
};

const labels = [];
const budgets = [];
const decaisses = [];

for (const [key, data] of Object.entries(sectorsData)) {
labels.push(sectorLabels[key] || key);
budgets.push((data.budget / 1000000000).toFixed(2));
decaisses.push((data.decaisse / 1000000000).toFixed(2));
}

// Graphique Budget par secteur
const budgetCtx = document.getElementById('budgetChart');
if (budgetCtx && labels.length > 0) {
new Chart(budgetCtx, {
type: 'bar',
data: {
labels: labels,
datasets: [
{
label: 'Budget engagé (Mds FCFA)',
data: budgets,
backgroundColor: 'rgba(0, 38, 100, 0.85)',
borderColor: '#002664',
borderWidth: 1,
borderRadius: 6
}, {
label: 'Montant décaissé (Mds FCFA)',
data: decaisses,
backgroundColor: 'rgba(254, 203, 0, 0.85)',
borderColor: '#FECB00',
borderWidth: 1,
borderRadius: 6
}
]
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
position: 'bottom',
labels: {
usePointStyle: true,
padding: 20,
font: {
size: 12
}
}
},
tooltip: {
backgroundColor: 'rgba(0, 0, 0, 0.8)',
padding: 12,
titleFont: {
size: 14,
weight: 'bold'
},
bodyFont: {
size: 13
},
callbacks: {
label: function (context) {
return context.dataset.label + ': ' + context.raw + ' Mds FCFA';
}
}
}
},
scales: {
x: {
grid: {
display: false
},
ticks: {
font: {
size: 11
}
}
},
y: {
beginAtZero: true,
grid: {
color: 'rgba(0, 0, 0, 0.05)'
},
ticks: {
font: {
size: 11
},
callback: function (value) {
return value + ' Mds';
}
}
}
}
}
});
}
});

// Fonction d'export
function exportChart() {
const canvas = document.getElementById('budgetChart');
if (canvas) {
const link = document.createElement('a');
link.download = 'execution-budgetaire-secteur.png';
link.href = canvas.toDataURL();
link.click();
}
}
\t</script>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\dashboard\\index.html.twig");
    }
}
