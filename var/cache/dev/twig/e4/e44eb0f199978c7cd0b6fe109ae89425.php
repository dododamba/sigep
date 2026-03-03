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

/* partner/index.html.twig */
class __TwigTemplate_600c1b46bfb3c7a77a3cc28b5ad3f535 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/index.html.twig"));

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

        yield "Gestion des Partenaires - SIGEP Tchad";
        
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
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Gestion des Partenaires</h1>
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
                <li class=\"breadcrumb-item text-muted\">Partenaires</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau Partenaire
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "total", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Partenaires</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "actifs", [], "any", false, false, false, 49), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Partenaires Actifs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 59, $this->source); })())), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Types de Partenaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Card -->
        <div class=\"card card-flush mb-5 mb-xl-10\">
            <div class=\"card-body\">
                <form method=\"GET\" action=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"row g-5\">
                    <div class=\"col-md-4\">
                        <div class=\"position-relative d-flex align-items-center\">
                            <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-4\"></i>
                            <input type=\"text\" name=\"search\" class=\"form-control form-control-solid ps-12\" placeholder=\"Rechercher...\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <select name=\"type\" class=\"form-select form-select-solid\" data-control=\"select2\" data-placeholder=\"Filtrer par type\">
                            <option value=\"\">Tous les types</option>
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 81
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 81), "html", null, true);
            yield "\" ";
            if (((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 81, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 81))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 81), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <select name=\"status\" class=\"form-select form-select-solid\" data-control=\"select2\" data-placeholder=\"Filtrer par statut\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"Actif\" ";
        // line 88
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 88, $this->source); })()) == "Actif")) {
            yield "selected";
        }
        yield ">Actif</option>
                            <option value=\"Inactif\" ";
        // line 89
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 89, $this->source); })()) == "Inactif")) {
            yield "selected";
        }
        yield ">Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-md-2 d-flex gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Filtrer</button>
                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"btn btn-light-primary\"><i class=\"ki-outline ki-arrows-circle fs-2\"></i></a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Partners Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-body pt-0\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-200px\">Partenaire</th>
                                <th class=\"min-w-125px\">Type</th>
                                <th class=\"min-w-150px\">Contact</th>
                                <th class=\"min-w-100px text-center\">Statut</th>
                                <th class=\"text-end min-w-100px\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 116
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-50px me-5\">
                                                ";
            // line 120
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 121))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 121), "html", null, true);
                yield "\">
                                                ";
            } else {
                // line 123
                yield "                                                    <span class=\"symbol-label bg-light-info text-info fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 123), 0, 2)), "html", null, true);
                yield "</span>
                                                ";
            }
            // line 125
            yield "                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "slug", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\" class=\"text-gray-800 text-hover-primary mb-1 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 127), "html", null, true);
            yield "</a>
                                                <span class=\"fs-7 text-muted\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "acronym", [], "any", false, false, false, 128), "html", null, true);
            yield "</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"badge badge-light-primary fw-bold\">";
            // line 133
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, true, false, 133), "name", [], "any", true, true, false, 133) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 133), "name", [], "any", false, false, false, 133)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 133), "name", [], "any", false, false, false, 133), "html", null, true)) : ("Non défini"));
            yield "</span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">";
            // line 137
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactName", [], "any", true, true, false, 137) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactName", [], "any", false, false, false, 137)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactName", [], "any", false, false, false, 137), "html", null, true)) : ("N/A"));
            yield "</span>
                                            <a href=\"mailto:";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 138), "html", null, true);
            yield "\" class=\"fs-7 text-muted text-hover-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 138), "html", null, true);
            yield "</a>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-";
            // line 142
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "status", [], "any", false, false, false, 142) == "Actif")) ? ("success") : ("danger"));
            yield " fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "status", [], "any", false, false, false, 142), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-flex btn-center btn-sm\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
                                            Actions <i class=\"ki-outline ki-down fs-5 ms-1\"></i>
                                        </a>
                                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4\" data-kt-menu=\"true\">
                                            <div class=\"menu-item px-3\">
                                                <a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "slug", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" class=\"menu-link px-3\">Détails</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\" class=\"menu-link px-3\">Modifier</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"#\" class=\"menu-link px-3 text-danger\" onclick=\"if(confirm('Supprimer ce partenaire ?')) document.getElementById('delete-form-";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 156), "html", null, true);
            yield "').submit();\">Supprimer</a>
                                            </div>
                                        </div>
                                        <form id=\"delete-form-";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 159), "html", null, true);
            yield "\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: none;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 160))), "html", null, true);
            yield "\">
                                        </form>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination code omitted for brevity but should be here if needed -->
            </div>
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
        return "partner/index.html.twig";
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
        return array (  360 => 165,  349 => 160,  343 => 159,  337 => 156,  331 => 153,  325 => 150,  312 => 142,  303 => 138,  299 => 137,  292 => 133,  284 => 128,  278 => 127,  274 => 125,  268 => 123,  260 => 121,  258 => 120,  252 => 116,  248 => 115,  224 => 94,  214 => 89,  208 => 88,  201 => 83,  186 => 81,  182 => 80,  173 => 74,  166 => 70,  152 => 59,  139 => 49,  126 => 39,  106 => 22,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Partenaires - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Gestion des Partenaires</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Partenaires</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_partners_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau Partenaire
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ stats.total }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Partenaires</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">{{ stats.actifs }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Partenaires Actifs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">{{ types|length }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Types de Partenaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Card -->
        <div class=\"card card-flush mb-5 mb-xl-10\">
            <div class=\"card-body\">
                <form method=\"GET\" action=\"{{ path('app_partners') }}\" class=\"row g-5\">
                    <div class=\"col-md-4\">
                        <div class=\"position-relative d-flex align-items-center\">
                            <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-4\"></i>
                            <input type=\"text\" name=\"search\" class=\"form-control form-control-solid ps-12\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <select name=\"type\" class=\"form-select form-select-solid\" data-control=\"select2\" data-placeholder=\"Filtrer par type\">
                            <option value=\"\">Tous les types</option>
                            {% for type in types %}
                                <option value=\"{{ type.id }}\" {% if currentType == type.id %}selected{% endif %}>{{ type.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <select name=\"status\" class=\"form-select form-select-solid\" data-control=\"select2\" data-placeholder=\"Filtrer par statut\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"Actif\" {% if currentStatus == 'Actif' %}selected{% endif %}>Actif</option>
                            <option value=\"Inactif\" {% if currentStatus == 'Inactif' %}selected{% endif %}>Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-md-2 d-flex gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Filtrer</button>
                        <a href=\"{{ path('app_partners') }}\" class=\"btn btn-light-primary\"><i class=\"ki-outline ki-arrows-circle fs-2\"></i></a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Partners Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-body pt-0\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-200px\">Partenaire</th>
                                <th class=\"min-w-125px\">Type</th>
                                <th class=\"min-w-150px\">Contact</th>
                                <th class=\"min-w-100px text-center\">Statut</th>
                                <th class=\"text-end min-w-100px\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            {% for partner in partners %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-50px me-5\">
                                                {% if partner.logo %}
                                                    <img src=\"{{ asset('uploads/images/' ~ partner.logo) }}\" alt=\"{{ partner.name }}\">
                                                {% else %}
                                                    <span class=\"symbol-label bg-light-info text-info fw-bold\">{{ partner.name|slice(0, 2)|upper }}</span>
                                                {% endif %}
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"{{ path('app_partners_show', {slug: partner.slug}) }}\" class=\"text-gray-800 text-hover-primary mb-1 fw-bold\">{{ partner.name }}</a>
                                                <span class=\"fs-7 text-muted\">{{ partner.acronym }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"badge badge-light-primary fw-bold\">{{ partner.typePartner.name ?? 'Non défini' }}</span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">{{ partner.contactName ?? 'N/A' }}</span>
                                            <a href=\"mailto:{{ partner.contactEmail }}\" class=\"fs-7 text-muted text-hover-primary\">{{ partner.contactEmail }}</a>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-{{ partner.status == 'Actif' ? 'success' : 'danger' }} fw-bold\">{{ partner.status }}</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"#\" class=\"btn btn-light btn-active-light-primary btn-flex btn-center btn-sm\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
                                            Actions <i class=\"ki-outline ki-down fs-5 ms-1\"></i>
                                        </a>
                                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4\" data-kt-menu=\"true\">
                                            <div class=\"menu-item px-3\">
                                                <a href=\"{{ path('app_partners_show', {slug: partner.slug}) }}\" class=\"menu-link px-3\">Détails</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"{{ path('app_partners_edit', {id: partner.id}) }}\" class=\"menu-link px-3\">Modifier</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"#\" class=\"menu-link px-3 text-danger\" onclick=\"if(confirm('Supprimer ce partenaire ?')) document.getElementById('delete-form-{{ partner.id }}').submit();\">Supprimer</a>
                                            </div>
                                        </div>
                                        <form id=\"delete-form-{{ partner.id }}\" action=\"{{ path('app_partners_delete', {id: partner.id}) }}\" method=\"post\" style=\"display: none;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ partner.id) }}\">
                                        </form>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination code omitted for brevity but should be here if needed -->
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "partner/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\partner\\index.html.twig");
    }
}
