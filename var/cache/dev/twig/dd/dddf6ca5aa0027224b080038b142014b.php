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

/* dashboard/management.html.twig */
class __TwigTemplate_3b33f0446d4d5d8dd214f0296a7629ad extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/management.html.twig"));

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

        yield "Dashboard Top Management - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack flex-wrap gap-4\">
        <!-- Page Title -->
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Dashboard Top Management</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-muted text-hover-primary\">Dashboard</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Management</li>
            </ul>
        </div>

        <!-- Filters -->
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <form method=\"get\" action=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"d-flex align-items-center gap-2\">
                <div class=\"w-150px\">
                    <select name=\"year\" id=\"filterYear\" class=\"form-select form-select-sm form-select-solid\" data-control=\"select2\" data-placeholder=\"Année\">
                        <option value=\"\">Toutes les années</option>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("years", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 29, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 30
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\" ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "year", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), "year", [], "any", false, false, false, 30))) : ("")) == $context["year"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['year'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                    </select>
                </div>
                <div class=\"w-200px\">
                    <select name=\"institution\" id=\"filterInstitution\" class=\"form-select form-select-sm form-select-solid\" data-control=\"select2\" data-placeholder=\"Institution\">
                        <option value=\"\">Toutes les institutions</option>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("institutions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["institutions"]) || array_key_exists("institutions", $context) ? $context["institutions"] : (function () { throw new RuntimeError('Variable "institutions" does not exist.', 37, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["institution"]) {
            // line 38
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\" ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "institution_id", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "institution_id", [], "any", false, false, false, 38))) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 38))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "nom", [], "any", false, false, false, 39), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['institution'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    </select>
                </div>
                <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                    <i data-lucide=\"filter\" class=\"me-1\" style=\"width: 14px; height: 14px;\"></i> Filtrer
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- KPIs Row -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <!-- Total Projects -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 63, $this->source); })()), "totalProjects", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Total</span>
                        </div>
                    </div>
                    <div class=\"card-body d-flex flex-column justify-content-end pe-0\">
                        <span class=\"fs-6 fw-bolder text-gray-800 d-block mb-2\">Répartition</span>
                        <div class=\"d-flex align-items-center\">
                            <span class=\"badge badge-light-success fs-7 fw-bold me-2\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 70, $this->source); })()), "activeProjects", [], "any", false, false, false, 70), "html", null, true);
        yield " en cours</span>
                            <span class=\"badge badge-light-primary fs-7 fw-bold\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 71, $this->source); })()), "completedProjects", [], "any", false, false, false, 71), "html", null, true);
        yield " terminés</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Budget -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 82, $this->source); })()), "totalBudget", [], "any", false, false, false, 82) / 1000000000), 1, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget Total (Mds FCFA)</span>
                        </div>
                    </div>
                    <div class=\"card-body d-flex align-items-end pt-0\">
                        <div class=\"d-flex align-items-center flex-column mt-3 w-100\">
                            <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                <span class=\"fw-semibold fs-7 text-gray-400\">Total engagé</span>
                                <span class=\"fw-bold fs-7\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 90, $this->source); })()), "totalBudget", [], "any", false, false, false, 90) / 1000000), 0, ",", " "), "html", null, true);
        yield " M</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Disbursement Rate -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 102, $this->source); })()), "disbursementRate", [], "any", false, false, false, 102), "html", null, true);
        yield "%</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Taux de Décaissement</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-2 pb-4 d-flex align-items-center\">
                        <div class=\"d-flex flex-column content-justify-center w-100\">
                            <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                <span class=\"fw-bold fs-7 text-gray-400\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 109, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 109) / 1000000000), 1, ",", " "), "html", null, true);
        yield " Mds décaissés</span>
                            </div>
                            <div class=\"h-8px mx-3 w-100 bg-light-success rounded\">
                                <div class=\"bg-success rounded h-8px\" role=\"progressbar\" style=\"width: ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 112, $this->source); })()), "disbursementRate", [], "any", false, false, false, 112), "html", null, true);
        yield "%;\" aria-valuenow=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 112, $this->source); })()), "disbursementRate", [], "any", false, false, false, 112), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Avg Physical Progress -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 124, $this->source); })()), "avgPhysicalProgress", [], "any", false, false, false, 124), "html", null, true);
        yield "%</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Réalisation Physique Moyenne</span>
                        </div>
                    </div>
                    <div class=\"card-body d-flex align-items-end pt-0\">
                        <div class=\"d-flex align-items-center flex-column mt-3 w-100\">
                            <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                <span class=\"fw-semibold fs-7 text-gray-400\">Progression globale</span>
                            </div>
                            <div class=\"h-8px mx-3 w-100 bg-light-primary rounded\">
                                <div class=\"bg-primary rounded h-8px\" role=\"progressbar\" style=\"width: ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 134, $this->source); })()), "avgPhysicalProgress", [], "any", false, false, false, 134), "html", null, true);
        yield "%;\" aria-valuenow=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 134, $this->source); })()), "avgPhysicalProgress", [], "any", false, false, false, 134), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-xl-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Répartition par Secteur</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 300px;\">
                            <canvas id=\"sectorChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Sources de Financement</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 300px;\">
                            <canvas id=\"financingChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Statuts des Projets</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 300px;\">
                            <canvas id=\"statusChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-12\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Évolution Mensuelle</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 350px;\">
                            <canvas id=\"evolutionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Projects Table -->
        <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Top Projets par Budget</span>
                </h3>
                <div class=\"card-toolbar\">
                    <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_index");
        yield "\" class=\"btn btn-sm btn-light-primary\">Voir tous les projets</a>
                </div>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-3\">
                        <thead>
                            <tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-200px\">Projet</th>
                                <th class=\"min-w-150px\">Institution</th>
                                <th class=\"min-w-100px\">Secteur</th>
                                <th class=\"min-w-150px text-end\">Budget (FCFA)</th>
                                <th class=\"min-w-150px\">Progression</th>
                                <th class=\"min-w-100px text-end\">Statut</th>
                            </tr>
                        </thead>
                        <tbody class=\"fw-semibold text-gray-600\">
                            ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topProjects"]) || array_key_exists("topProjects", $context) ? $context["topProjects"] : (function () { throw new RuntimeError('Variable "topProjects" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 230
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex flex-column\">
                                        <a href=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 233)]), "html", null, true);
            yield "\" class=\"text-dark text-hover-primary fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "titre", [], "any", false, false, false, 233), "html", null, true);
            yield "</a>
                                        <span class=\"text-muted fs-7\">";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "code", [], "any", false, false, false, 234), "html", null, true);
            yield "</span>
                                    </div>
                                </td>
                                <td>";
            // line 237
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 237), "nom", [], "any", false, false, false, 237), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td>
                                    <span class=\"badge badge-light-primary\">";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "secteur", [], "any", false, false, false, 239), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-end\">
                                    <span class=\"fw-bold\">";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 242), 0, ",", " "), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center w-100 flex-column mt-3\">
                                        <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                            <span class=\"fw-bold fs-7\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 247), "html", null, true);
            yield "%</span>
                                        </div>
                                        <div class=\"h-5px mx-3 w-100 bg-light rounded\">
                                            <div class=\"bg-primary rounded h-5px\" role=\"progressbar\" style=\"width: ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 250), "html", null, true);
            yield "%;\"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"text-end\">
                                    <span class=\"badge badge-light-";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statut", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statut", [], "any", false, false, false, 255), "primary")) : ("primary")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statutLabel", [], "any", false, false, false, 255), "html", null, true);
            yield "</span>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Critical Projects -->
        ";
        // line 266
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["criticalProjects"]) || array_key_exists("criticalProjects", $context) ? $context["criticalProjects"] : (function () { throw new RuntimeError('Variable "criticalProjects" does not exist.', 266, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-12\">
                <div class=\"card card-flush\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Projets Critiques - Attention Requise</span>
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row g-5\">
                            ";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["criticalProjects"]) || array_key_exists("criticalProjects", $context) ? $context["criticalProjects"] : (function () { throw new RuntimeError('Variable "criticalProjects" does not exist.', 277, $this->source); })()), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 278
                yield "                            <div class=\"col-md-4\">
                                <div class=\"card border-dashed p-6\">
                                    <div class=\"d-flex flex-stack mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-40px symbol-circle me-3\">
                                                <span class=\"symbol-label bg-light-danger\">
                                                    <i class=\"ki-outline ki-shield-cross fs-2 text-danger\"></i>
                                                </span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 288)]), "html", null, true);
                yield "\" class=\"fs-6 text-dark text-hover-primary fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "titre", [], "any", false, false, false, 288), "html", null, true);
                yield "</a>
                                                <span class=\"badge badge-light-danger fw-bold fs-8\">";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "riskLevel", [], "any", false, false, false, 289), "html", null, true);
                yield "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex flex-stack flex-wrap mb-2\">
                                        <span class=\"fw-bold fs-7 text-gray-400\">Progression</span>
                                        <span class=\"fw-bold fs-7 text-gray-800\">";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 295), "html", null, true);
                yield "%</span>
                                    </div>
                                    <div class=\"h-6px bg-light-danger rounded mb-5\">
                                        <div class=\"bg-danger rounded h-6px\" role=\"progressbar\" style=\"width: ";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 298), "html", null, true);
                yield "%\"></div>
                                    </div>
                                    <div class=\"d-flex flex-stack\">
                                        <span class=\"badge badge-light-warning fs-8\">";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statutLabel", [], "any", false, false, false, 301), "html", null, true);
                yield "</span>
                                        ";
                // line 302
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "isDelayed", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 303
                    yield "                                            <span class=\"text-danger fw-bold fs-8\">En retard</span>
                                        ";
                }
                // line 305
                yield "                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 315
        yield "
        <!-- Institutional Performance -->
        <div class=\"card card-flush h-md-100\">
            <div class=\"card-header pt-5\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Performance par Institution</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"row g-5\">
                    ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["institutionPerformance"]) || array_key_exists("institutionPerformance", $context) ? $context["institutionPerformance"] : (function () { throw new RuntimeError('Variable "institutionPerformance" does not exist.', 325, $this->source); })()), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["perf"]) {
            // line 326
            yield "                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center border-dashed p-5 rounded\">
                            <div class=\"symbol symbol-50px me-5\">
                                <span class=\"symbol-label bg-light-primary\">
                                    <i class=\"ki-outline ki-bank fs-2x text-primary\"></i>
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <a href=\"#\" class=\"text-dark fw-bold text-hover-primary fs-6\">";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["perf"], "institution", [], "any", false, false, false, 334), "nom", [], "any", false, false, false, 334), "html", null, true);
            yield "</a>
                                <div class=\"d-flex align-items-center flex-wrap gap-2 mt-1\">
                                    <span class=\"badge badge-light-info fs-8\">";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["perf"], "projectsCount", [], "any", false, false, false, 336), "html", null, true);
            yield " projets</span>
                                    <span class=\"badge badge-light-success fs-8\">";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["perf"], "avgProgress", [], "any", false, false, false, 337), "html", null, true);
            yield "% prog.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['perf'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 351
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Initialiser Lucide Icons si disponibles
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Configuration Chart.js par défaut
        Chart.defaults.font.family = \"'Inter', sans-serif\";
        Chart.defaults.color = '#4b5563';

        // Données des graphiques
        const sectorData = ";
        // line 363
        yield json_encode((isset($context["sectorStats"]) || array_key_exists("sectorStats", $context) ? $context["sectorStats"] : (function () { throw new RuntimeError('Variable "sectorStats" does not exist.', 363, $this->source); })()));
        yield ";
        const financingData = ";
        // line 364
        yield json_encode((isset($context["financingSourceStats"]) || array_key_exists("financingSourceStats", $context) ? $context["financingSourceStats"] : (function () { throw new RuntimeError('Variable "financingSourceStats" does not exist.', 364, $this->source); })()));
        yield ";
        const statusData = ";
        // line 365
        yield json_encode((isset($context["statusStats"]) || array_key_exists("statusStats", $context) ? $context["statusStats"] : (function () { throw new RuntimeError('Variable "statusStats" does not exist.', 365, $this->source); })()));
        yield ";
        const evolutionData = ";
        // line 366
        yield json_encode((isset($context["monthlyEvolution"]) || array_key_exists("monthlyEvolution", $context) ? $context["monthlyEvolution"] : (function () { throw new RuntimeError('Variable "monthlyEvolution" does not exist.', 366, $this->source); })()));
        yield ";

        // Graphique Secteur
        if (document.getElementById('sectorChart')) {
            new Chart(document.getElementById('sectorChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(sectorData),
                    datasets: [{
                        data: Object.values(sectorData).map(d => d.count),
                        backgroundColor: [
                            '#004d99', '#daa520', '#c41e3a', '#10b981', 
                            '#f59e0b', '#6366f1', '#ec4899', '#14b8a6'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: { usePointStyle: true, padding: 15 }
                        }
                    }
                }
            });
        }

        // Graphique Financement
        if (document.getElementById('financingChart')) {
            new Chart(document.getElementById('financingChart'), {
                type: 'pie',
                data: {
                    labels: Object.keys(financingData),
                    datasets: [{
                        data: Object.values(financingData).map(d => d.totalAmount),
                        backgroundColor: ['#004d99', '#daa520', '#c41e3a', '#10b981', '#f59e0b']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: { usePointStyle: true, padding: 15 }
                        }
                    }
                }
            });
        }

        // Graphique Statuts
        if (document.getElementById('statusChart')) {
            new Chart(document.getElementById('statusChart'), {
                type: 'bar',
                data: {
                    labels: ['Planifié', 'En cours', 'Suspendu', 'Terminé', 'Annulé'],
                    datasets: [{
                        label: 'Nombre de projets',
                        data: [
                            statusData.planifie || 0,
                            statusData.en_cours || 0,
                            statusData.suspendu || 0,
                            statusData.termine || 0,
                            statusData.annule || 0
                        ],
                        backgroundColor: ['#6b7280', '#004d99', '#f59e0b', '#10b981', '#ef4444'],
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        }

        // Graphique Évolution
        if (document.getElementById('evolutionChart')) {
            new Chart(document.getElementById('evolutionChart'), {
                type: 'line',
                data: {
                    labels: Object.keys(evolutionData),
                    datasets: [{
                        label: 'Nombre de projets',
                        data: Object.values(evolutionData).map(d => d.projects),
                        borderColor: '#004d99',
                        backgroundColor: 'rgba(0, 77, 153, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/management.html.twig";
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
        return array (  646 => 366,  642 => 365,  638 => 364,  634 => 363,  620 => 351,  610 => 350,  597 => 343,  585 => 337,  581 => 336,  576 => 334,  566 => 326,  562 => 325,  550 => 315,  542 => 309,  533 => 305,  529 => 303,  527 => 302,  523 => 301,  517 => 298,  511 => 295,  502 => 289,  496 => 288,  484 => 278,  480 => 277,  468 => 267,  466 => 266,  457 => 259,  445 => 255,  437 => 250,  431 => 247,  423 => 242,  417 => 239,  412 => 237,  406 => 234,  400 => 233,  395 => 230,  391 => 229,  371 => 212,  288 => 134,  275 => 124,  258 => 112,  252 => 109,  242 => 102,  227 => 90,  216 => 82,  202 => 71,  198 => 70,  188 => 63,  165 => 42,  156 => 39,  147 => 38,  143 => 37,  136 => 32,  121 => 30,  117 => 29,  110 => 25,  96 => 14,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Top Management - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack flex-wrap gap-4\">
        <!-- Page Title -->
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Dashboard Top Management</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Dashboard</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Management</li>
            </ul>
        </div>

        <!-- Filters -->
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <form method=\"get\" action=\"{{ path('app_dashboard') }}\" class=\"d-flex align-items-center gap-2\">
                <div class=\"w-150px\">
                    <select name=\"year\" id=\"filterYear\" class=\"form-select form-select-sm form-select-solid\" data-control=\"select2\" data-placeholder=\"Année\">
                        <option value=\"\">Toutes les années</option>
                        {% for year in years|default([]) %}
                            <option value=\"{{ year }}\" {% if filters.year|default() == year %}selected{% endif %}>{{ year }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"w-200px\">
                    <select name=\"institution\" id=\"filterInstitution\" class=\"form-select form-select-sm form-select-solid\" data-control=\"select2\" data-placeholder=\"Institution\">
                        <option value=\"\">Toutes les institutions</option>
                        {% for institution in institutions|default([]) %}
                            <option value=\"{{ institution.id }}\" {% if filters.institution_id|default() == institution.id %}selected{% endif %}>
                                {{ institution.nom }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                    <i data-lucide=\"filter\" class=\"me-1\" style=\"width: 14px; height: 14px;\"></i> Filtrer
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- KPIs Row -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <!-- Total Projects -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ kpis.totalProjects }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Total</span>
                        </div>
                    </div>
                    <div class=\"card-body d-flex flex-column justify-content-end pe-0\">
                        <span class=\"fs-6 fw-bolder text-gray-800 d-block mb-2\">Répartition</span>
                        <div class=\"d-flex align-items-center\">
                            <span class=\"badge badge-light-success fs-7 fw-bold me-2\">{{ kpis.activeProjects }} en cours</span>
                            <span class=\"badge badge-light-primary fs-7 fw-bold\">{{ kpis.completedProjects }} terminés</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Budget -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ (kpis.totalBudget / 1000000000)|number_format(1, ',', ' ') }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget Total (Mds FCFA)</span>
                        </div>
                    </div>
                    <div class=\"card-body d-flex align-items-end pt-0\">
                        <div class=\"d-flex align-items-center flex-column mt-3 w-100\">
                            <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                <span class=\"fw-semibold fs-7 text-gray-400\">Total engagé</span>
                                <span class=\"fw-bold fs-7\">{{ (kpis.totalBudget / 1000000)|number_format(0, ',', ' ') }} M</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Disbursement Rate -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ kpis.disbursementRate }}%</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Taux de Décaissement</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-2 pb-4 d-flex align-items-center\">
                        <div class=\"d-flex flex-column content-justify-center w-100\">
                            <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                <span class=\"fw-bold fs-7 text-gray-400\">{{ (kpis.totalDisbursed / 1000000000)|number_format(1, ',', ' ') }} Mds décaissés</span>
                            </div>
                            <div class=\"h-8px mx-3 w-100 bg-light-success rounded\">
                                <div class=\"bg-success rounded h-8px\" role=\"progressbar\" style=\"width: {{ kpis.disbursementRate }}%;\" aria-valuenow=\"{{ kpis.disbursementRate }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Avg Physical Progress -->
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ kpis.avgPhysicalProgress }}%</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Réalisation Physique Moyenne</span>
                        </div>
                    </div>
                    <div class=\"card-body d-flex align-items-end pt-0\">
                        <div class=\"d-flex align-items-center flex-column mt-3 w-100\">
                            <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                <span class=\"fw-semibold fs-7 text-gray-400\">Progression globale</span>
                            </div>
                            <div class=\"h-8px mx-3 w-100 bg-light-primary rounded\">
                                <div class=\"bg-primary rounded h-8px\" role=\"progressbar\" style=\"width: {{ kpis.avgPhysicalProgress }}%;\" aria-valuenow=\"{{ kpis.avgPhysicalProgress }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-xl-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Répartition par Secteur</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 300px;\">
                            <canvas id=\"sectorChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Sources de Financement</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 300px;\">
                            <canvas id=\"financingChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Statuts des Projets</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 300px;\">
                            <canvas id=\"statusChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-12\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Évolution Mensuelle</span>
                        </h3>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div style=\"height: 350px;\">
                            <canvas id=\"evolutionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Projects Table -->
        <div class=\"card card-flush h-md-100 mb-5 mb-xl-10\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Top Projets par Budget</span>
                </h3>
                <div class=\"card-toolbar\">
                    <a href=\"{{ path('app_project_index') }}\" class=\"btn btn-sm btn-light-primary\">Voir tous les projets</a>
                </div>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-3\">
                        <thead>
                            <tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-200px\">Projet</th>
                                <th class=\"min-w-150px\">Institution</th>
                                <th class=\"min-w-100px\">Secteur</th>
                                <th class=\"min-w-150px text-end\">Budget (FCFA)</th>
                                <th class=\"min-w-150px\">Progression</th>
                                <th class=\"min-w-100px text-end\">Statut</th>
                            </tr>
                        </thead>
                        <tbody class=\"fw-semibold text-gray-600\">
                            {% for project in topProjects %}
                            <tr>
                                <td>
                                    <div class=\"d-flex flex-column\">
                                        <a href=\"{{ path('app_dashboard_project_detail', {id: project.id}) }}\" class=\"text-dark text-hover-primary fw-bold\">{{ project.titre }}</a>
                                        <span class=\"text-muted fs-7\">{{ project.code }}</span>
                                    </div>
                                </td>
                                <td>{{ project.institution ? project.institution.nom : 'N/A' }}</td>
                                <td>
                                    <span class=\"badge badge-light-primary\">{{ project.secteur }}</span>
                                </td>
                                <td class=\"text-end\">
                                    <span class=\"fw-bold\">{{ project.budgetTotal|number_format(0, ',', ' ') }}</span>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center w-100 flex-column mt-3\">
                                        <div class=\"d-flex justify-content-between w-100 mt-auto mb-2\">
                                            <span class=\"fw-bold fs-7\">{{ project.tauxRealisation }}%</span>
                                        </div>
                                        <div class=\"h-5px mx-3 w-100 bg-light rounded\">
                                            <div class=\"bg-primary rounded h-5px\" role=\"progressbar\" style=\"width: {{ project.tauxRealisation }}%;\"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"text-end\">
                                    <span class=\"badge badge-light-{{ project.statut|default('primary') }}\">{{ project.statutLabel }}</span>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Critical Projects -->
        {% if criticalProjects is not empty %}
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-12\">
                <div class=\"card card-flush\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title align-items-start flex-column\">
                            <span class=\"card-label fw-bold text-dark\">Projets Critiques - Attention Requise</span>
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row g-5\">
                            {% for project in criticalProjects|slice(0, 6) %}
                            <div class=\"col-md-4\">
                                <div class=\"card border-dashed p-6\">
                                    <div class=\"d-flex flex-stack mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-40px symbol-circle me-3\">
                                                <span class=\"symbol-label bg-light-danger\">
                                                    <i class=\"ki-outline ki-shield-cross fs-2 text-danger\"></i>
                                                </span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"{{ path('app_dashboard_project_detail', {id: project.id}) }}\" class=\"fs-6 text-dark text-hover-primary fw-bold\">{{ project.titre }}</a>
                                                <span class=\"badge badge-light-danger fw-bold fs-8\">{{ project.riskLevel }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex flex-stack flex-wrap mb-2\">
                                        <span class=\"fw-bold fs-7 text-gray-400\">Progression</span>
                                        <span class=\"fw-bold fs-7 text-gray-800\">{{ project.tauxRealisation }}%</span>
                                    </div>
                                    <div class=\"h-6px bg-light-danger rounded mb-5\">
                                        <div class=\"bg-danger rounded h-6px\" role=\"progressbar\" style=\"width: {{ project.tauxRealisation }}%\"></div>
                                    </div>
                                    <div class=\"d-flex flex-stack\">
                                        <span class=\"badge badge-light-warning fs-8\">{{ project.statutLabel }}</span>
                                        {% if project.isDelayed %}
                                            <span class=\"text-danger fw-bold fs-8\">En retard</span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}

        <!-- Institutional Performance -->
        <div class=\"card card-flush h-md-100\">
            <div class=\"card-header pt-5\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Performance par Institution</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"row g-5\">
                    {% for perf in institutionPerformance|slice(0, 6) %}
                    <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center border-dashed p-5 rounded\">
                            <div class=\"symbol symbol-50px me-5\">
                                <span class=\"symbol-label bg-light-primary\">
                                    <i class=\"ki-outline ki-bank fs-2x text-primary\"></i>
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <a href=\"#\" class=\"text-dark fw-bold text-hover-primary fs-6\">{{ perf.institution.nom }}</a>
                                <div class=\"d-flex align-items-center flex-wrap gap-2 mt-1\">
                                    <span class=\"badge badge-light-info fs-8\">{{ perf.projectsCount }} projets</span>
                                    <span class=\"badge badge-light-success fs-8\">{{ perf.avgProgress }}% prog.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Initialiser Lucide Icons si disponibles
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Configuration Chart.js par défaut
        Chart.defaults.font.family = \"'Inter', sans-serif\";
        Chart.defaults.color = '#4b5563';

        // Données des graphiques
        const sectorData = {{ sectorStats|json_encode|raw }};
        const financingData = {{ financingSourceStats|json_encode|raw }};
        const statusData = {{ statusStats|json_encode|raw }};
        const evolutionData = {{ monthlyEvolution|json_encode|raw }};

        // Graphique Secteur
        if (document.getElementById('sectorChart')) {
            new Chart(document.getElementById('sectorChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(sectorData),
                    datasets: [{
                        data: Object.values(sectorData).map(d => d.count),
                        backgroundColor: [
                            '#004d99', '#daa520', '#c41e3a', '#10b981', 
                            '#f59e0b', '#6366f1', '#ec4899', '#14b8a6'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: { usePointStyle: true, padding: 15 }
                        }
                    }
                }
            });
        }

        // Graphique Financement
        if (document.getElementById('financingChart')) {
            new Chart(document.getElementById('financingChart'), {
                type: 'pie',
                data: {
                    labels: Object.keys(financingData),
                    datasets: [{
                        data: Object.values(financingData).map(d => d.totalAmount),
                        backgroundColor: ['#004d99', '#daa520', '#c41e3a', '#10b981', '#f59e0b']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: { usePointStyle: true, padding: 15 }
                        }
                    }
                }
            });
        }

        // Graphique Statuts
        if (document.getElementById('statusChart')) {
            new Chart(document.getElementById('statusChart'), {
                type: 'bar',
                data: {
                    labels: ['Planifié', 'En cours', 'Suspendu', 'Terminé', 'Annulé'],
                    datasets: [{
                        label: 'Nombre de projets',
                        data: [
                            statusData.planifie || 0,
                            statusData.en_cours || 0,
                            statusData.suspendu || 0,
                            statusData.termine || 0,
                            statusData.annule || 0
                        ],
                        backgroundColor: ['#6b7280', '#004d99', '#f59e0b', '#10b981', '#ef4444'],
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        }

        // Graphique Évolution
        if (document.getElementById('evolutionChart')) {
            new Chart(document.getElementById('evolutionChart'), {
                type: 'line',
                data: {
                    labels: Object.keys(evolutionData),
                    datasets: [{
                        label: 'Nombre de projets',
                        data: Object.values(evolutionData).map(d => d.projects),
                        borderColor: '#004d99',
                        backgroundColor: 'rgba(0, 77, 153, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        }
    </script>
{% endblock %}
", "dashboard/management.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\dashboard\\management.html.twig");
    }
}
