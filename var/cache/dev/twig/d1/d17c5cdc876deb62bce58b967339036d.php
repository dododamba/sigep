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

/* project/index.html.twig */
class __TwigTemplate_d1686f7ad804a98abfeec6b842e995e0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

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

        yield "Gestion des Projets - SIGEP Tchad";
        
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
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Gestion des Projets</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Portefeuille Projets</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau Projet
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "total", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Projets</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "enCours", [], "any", false, false, false, 49), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Actifs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "termines", [], "any", false, false, false, 59), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Terminés</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["budgetTotal"]) || array_key_exists("budgetTotal", $context) ? $context["budgetTotal"] : (function () { throw new RuntimeError('Variable "budgetTotal" does not exist.', 69, $this->source); })()) / 1000000000), 1, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget Global (Mds FCFA)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Card -->
        <div class=\"card card-flush\">
            <!-- Card header -->
            <div class=\"card-header border-0 pt-6\">
                <div class=\"card-title\">
                    <div class=\"d-flex align-items-center position-relative my-1\">
                        <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-5\"></i>
                        <input type=\"text\" data-kt-project-filter=\"search\" class=\"form-control form-control-solid w-250px ps-13\" placeholder=\"Rechercher...\" value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"card-toolbar\">
                    <div class=\"d-flex justify-content-end\" data-kt-user-table-toolbar=\"base\">
                        <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_export_json");
        yield "\" class=\"btn btn-light-primary me-3\">
                            <i class=\"ki-outline ki-exit-up fs-2\"></i> Exporter
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card body -->
            <div class=\"card-body py-4\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\" id=\"kt_projects_table\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-200px\">Projet</th>
                                <th class=\"min-w-125px\">Institution / Secteur</th>
                                <th class=\"min-w-125px\">Budget</th>
                                <th class=\"min-w-150px\">Progression</th>
                                <th class=\"min-w-100px text-center\">Statut</th>
                                <th class=\"text-end min-w-100px\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 112
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-50px me-5\">
                                                <span class=\"symbol-label bg-light-primary text-primary fw-bold\">
                                                    ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 117), 0, 2)), "html", null, true);
            yield "
                                                </span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 121)]), "html", null, true);
            yield "\" class=\"text-gray-800 text-hover-primary mb-1 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 121), "html", null, true);
            yield "</a>
                                                <span class=\"fs-7 text-muted\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "code", [], "any", false, false, false, 122), "html", null, true);
            yield "</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">";
            // line 128
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 128), "name", [], "any", false, false, false, 128)), "truncate", [30], "method", false, false, false, 128), "html", null, true)) : ("N/A"));
            yield "</span>
                                            <span class=\"badge badge-light-info fs-8 mt-1\" style=\"width: fit-content;\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sectorLabel", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 134), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                                            <span class=\"fs-7 text-muted\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxDecaissement", [], "any", false, false, false, 135), "html", null, true);
            yield "% décaissé</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column w-100 me-2\">
                                            <div class=\"d-flex flex-stack mb-2\">
                                                <span class=\"text-muted me-2 fs-7 fw-bold\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 141), "html", null, true);
            yield "%</span>
                                            </div>
                                            <div class=\"progress h-6px w-100\">
                                                ";
            // line 144
            $context["progColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 144) >= 75)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 144) >= 50)) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 144) >= 25)) ? ("warning") : ("danger"))))));
            // line 145
            yield "                                                <div class=\"progress-bar bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progColor"]) || array_key_exists("progColor", $context) ? $context["progColor"] : (function () { throw new RuntimeError('Variable "progColor" does not exist.', 145, $this->source); })()), "html", null, true);
            yield "\" role=\"progressbar\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 145), "html", null, true);
            yield "%;\"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 150
            $context["statusColor"] = (((CoreExtension::getAttribute($this->env, $this->source, ["termine" => "success", "en-cours" => "primary", "en-retard" => "danger", "planifie" => "info", "suspendu" => "warning"], CoreExtension::getAttribute($this->env, $this->source,             // line 156
$context["project"], "status", [], "any", false, false, false, 156), [], "array", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["termine" => "success", "en-cours" => "primary", "en-retard" => "danger", "planifie" => "info", "suspendu" => "warning"], CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 156), [], "array", false, false, false, 151)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["termine" => "success", "en-cours" => "primary", "en-retard" => "danger", "planifie" => "info", "suspendu" => "warning"], CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 156), [], "array", false, false, false, 151)) : ("secondary"));
            // line 157
            yield "                                        <span class=\"badge badge-light-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusColor"]) || array_key_exists("statusColor", $context) ? $context["statusColor"] : (function () { throw new RuntimeError('Variable "statusColor" does not exist.', 157, $this->source); })()), "html", null, true);
            yield " fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statusLabel", [], "any", false, false, false, 157), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-flex btn-center btn-sm\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
                                            Actions <i class=\"ki-outline ki-down fs-5 ms-1\"></i>
                                        </a>
                                        <!-- Menu -->
                                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4\" data-kt-menu=\"true\">
                                            <div class=\"menu-item px-3\">
                                                <a href=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 166)]), "html", null, true);
            yield "\" class=\"menu-link px-3\">Détails</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 169)]), "html", null, true);
            yield "\" class=\"menu-link px-3\">Modifier</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"#\" class=\"menu-link px-3 text-danger\" onclick=\"if(confirm('Supprimer ce projet ?')) document.getElementById('delete-form-";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 172), "html", null, true);
            yield "').submit();\">Supprimer</a>
                                            </div>
                                        </div>
                                        <form id=\"delete-form-";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 175), "html", null, true);
            yield "\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: none;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 176))), "html", null, true);
            yield "\">
                                        </form>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                ";
        // line 186
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 186, $this->source); })()) > 1)) {
            // line 187
            yield "                    <div class=\"d-flex flex-stack flex-wrap pt-10\">
                        <div class=\"fs-6 fw-semibold text-gray-700\">
                            Affichage de ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 189, $this->source); })()) - 1) * 10) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 189, $this->source); })()) * 10), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 189, $this->source); })()), "total", [], "any", false, false, false, 189)), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 189, $this->source); })()), "total", [], "any", false, false, false, 189), "html", null, true);
            yield " projets
                        </div>
                        <ul class=\"pagination\">
                            ";
            // line 192
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 192, $this->source); })()) > 1)) {
                // line 193
                yield "                                <li class=\"page-item previous\">
                                    <a href=\"";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 194, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 194, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\"><i class=\"ki-outline ki-left fs-2\"></i></a>
                                </li>
                            ";
            }
            // line 197
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 197, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 198
                yield "                                <li class=\"page-item ";
                if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 198, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                                    <a href=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 199, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            yield "                            ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 202, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 202, $this->source); })()))) {
                // line 203
                yield "                                <li class=\"page-item next\">
                                    <a href=\"";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 204, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 204, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\"><i class=\"ki-outline ki-right fs-2\"></i></a>
                                </li>
                            ";
            }
            // line 207
            yield "                        </ul>
                    </div>
                ";
        }
        // line 210
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "project/index.html.twig";
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
        return array (  420 => 210,  415 => 207,  409 => 204,  406 => 203,  403 => 202,  392 => 199,  385 => 198,  380 => 197,  374 => 194,  371 => 193,  369 => 192,  359 => 189,  355 => 187,  353 => 186,  346 => 181,  335 => 176,  329 => 175,  323 => 172,  317 => 169,  311 => 166,  296 => 157,  294 => 156,  293 => 150,  282 => 145,  280 => 144,  274 => 141,  265 => 135,  261 => 134,  253 => 129,  249 => 128,  240 => 122,  234 => 121,  227 => 117,  220 => 112,  216 => 111,  191 => 89,  183 => 84,  165 => 69,  152 => 59,  139 => 49,  126 => 39,  106 => 22,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Projets - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Gestion des Projets</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Portefeuille Projets</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_projects_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau Projet
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ stats.total }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Projets</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">{{ stats.enCours }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Actifs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">{{ stats.termines }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Terminés</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ (budgetTotal / 1000000000)|number_format(1, ',', ' ') }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget Global (Mds FCFA)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Card -->
        <div class=\"card card-flush\">
            <!-- Card header -->
            <div class=\"card-header border-0 pt-6\">
                <div class=\"card-title\">
                    <div class=\"d-flex align-items-center position-relative my-1\">
                        <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-5\"></i>
                        <input type=\"text\" data-kt-project-filter=\"search\" class=\"form-control form-control-solid w-250px ps-13\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
                    </div>
                </div>
                <div class=\"card-toolbar\">
                    <div class=\"d-flex justify-content-end\" data-kt-user-table-toolbar=\"base\">
                        <a href=\"{{ path('app_projects_export_json') }}\" class=\"btn btn-light-primary me-3\">
                            <i class=\"ki-outline ki-exit-up fs-2\"></i> Exporter
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card body -->
            <div class=\"card-body py-4\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\" id=\"kt_projects_table\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-200px\">Projet</th>
                                <th class=\"min-w-125px\">Institution / Secteur</th>
                                <th class=\"min-w-125px\">Budget</th>
                                <th class=\"min-w-150px\">Progression</th>
                                <th class=\"min-w-100px text-center\">Statut</th>
                                <th class=\"text-end min-w-100px\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            {% for project in projects %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-50px me-5\">
                                                <span class=\"symbol-label bg-light-primary text-primary fw-bold\">
                                                    {{ project.name|slice(0, 2)|upper }}
                                                </span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"{{ path('app_projects_show', {slug: project.slug}) }}\" class=\"text-gray-800 text-hover-primary mb-1 fw-bold\">{{ project.name }}</a>
                                                <span class=\"fs-7 text-muted\">{{ project.code }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">{{ project.institution ? project.institution.name|u.truncate(30) : 'N/A' }}</span>
                                            <span class=\"badge badge-light-info fs-8 mt-1\" style=\"width: fit-content;\">{{ project.sectorLabel }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">{{ project.budgetTotal|number_format(0, ',', ' ') }} FCFA</span>
                                            <span class=\"fs-7 text-muted\">{{ project.tauxDecaissement }}% décaissé</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column w-100 me-2\">
                                            <div class=\"d-flex flex-stack mb-2\">
                                                <span class=\"text-muted me-2 fs-7 fw-bold\">{{ project.progress }}%</span>
                                            </div>
                                            <div class=\"progress h-6px w-100\">
                                                {% set progColor = project.progress >= 75 ? 'success' : (project.progress >= 50 ? 'primary' : (project.progress >= 25 ? 'warning' : 'danger')) %}
                                                <div class=\"progress-bar bg-{{ progColor }}\" role=\"progressbar\" style=\"width: {{ project.progress }}%;\"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        {% set statusColor = {
                                            'termine': 'success',
                                            'en-cours': 'primary',
                                            'en-retard': 'danger',
                                            'planifie': 'info',
                                            'suspendu': 'warning'
                                        }[project.status] ?? 'secondary' %}
                                        <span class=\"badge badge-light-{{ statusColor }} fw-bold\">{{ project.statusLabel }}</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-flex btn-center btn-sm\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
                                            Actions <i class=\"ki-outline ki-down fs-5 ms-1\"></i>
                                        </a>
                                        <!-- Menu -->
                                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4\" data-kt-menu=\"true\">
                                            <div class=\"menu-item px-3\">
                                                <a href=\"{{ path('app_projects_show', {slug: project.slug}) }}\" class=\"menu-link px-3\">Détails</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"{{ path('app_projects_edit', {id: project.id}) }}\" class=\"menu-link px-3\">Modifier</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"#\" class=\"menu-link px-3 text-danger\" onclick=\"if(confirm('Supprimer ce projet ?')) document.getElementById('delete-form-{{ project.id }}').submit();\">Supprimer</a>
                                            </div>
                                        </div>
                                        <form id=\"delete-form-{{ project.id }}\" action=\"{{ path('app_projects_delete', {id: project.id}) }}\" method=\"post\" style=\"display: none;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ project.id) }}\">
                                        </form>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                {% if totalPages > 1 %}
                    <div class=\"d-flex flex-stack flex-wrap pt-10\">
                        <div class=\"fs-6 fw-semibold text-gray-700\">
                            Affichage de {{ ((currentPage - 1) * 10) + 1 }} à {{ min(currentPage * 10, stats.total) }} sur {{ stats.total }} projets
                        </div>
                        <ul class=\"pagination\">
                            {% if currentPage > 1 %}
                                <li class=\"page-item previous\">
                                    <a href=\"{{ path('app_projects', {page: currentPage - 1, search: search}) }}\" class=\"page-link\"><i class=\"ki-outline ki-left fs-2\"></i></a>
                                </li>
                            {% endif %}
                            {% for i in 1..totalPages %}
                                <li class=\"page-item {% if i == currentPage %}active{% endif %}\">
                                    <a href=\"{{ path('app_projects', {page: i, search: search}) }}\" class=\"page-link\">{{ i }}</a>
                                </li>
                            {% endfor %}
                            {% if currentPage < totalPages %}
                                <li class=\"page-item next\">
                                    <a href=\"{{ path('app_projects', {page: currentPage + 1, search: search}) }}\" class=\"page-link\"><i class=\"ki-outline ki-right fs-2\"></i></a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "project/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\project\\index.html.twig");
    }
}
