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

/* institution/index.html.twig */
class __TwigTemplate_f699b530553f83629fd5453e1f89ec6f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "institution/index.html.twig"));

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

        yield "Gestion des Institutions - SIGEP Tchad";
        
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
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Institutions</h1>
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
                <li class=\"breadcrumb-item text-muted\">Gouvernance</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouvelle Institution
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "total", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Institutions</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "actifs", [], "any", false, false, false, 49), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Actives</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">";
        // line 59
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byType", [], "any", false, true, false, 59), "Ministère", [], "array", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "byType", [], "any", false, false, false, 59), "Ministère", [], "array", false, false, false, 59)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "byType", [], "any", false, false, false, 59), "Ministère", [], "array", false, false, false, 59), "html", null, true)) : (0));
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Ministères</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-info me-2 lh-1 ls-n2\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 69, $this->source); })()), "byType", [], "any", false, false, false, 69)), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Types d'entités</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header border-0 pt-6\">
                <div class=\"card-title\">
                    <form method=\"GET\" action=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"d-flex align-items-center position-relative my-1 gap-3\">
                        <div class=\"position-relative\">
                            <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-5 mt-4\"></i>
                            <input type=\"text\" name=\"search\" class=\"form-control form-control-solid w-250px ps-13\" placeholder=\"Rechercher...\" value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </form>
                </div>
            </div>
            
            <div class=\"card-body py-4\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-250px\">Institution</th>
                                <th class=\"min-w-125px\">Secteur / Type</th>
                                <th class=\"min-w-150px\">Responsable</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["institutions"]) || array_key_exists("institutions", $context) ? $context["institutions"] : (function () { throw new RuntimeError('Variable "institutions" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["institution"]) {
            // line 104
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-50px me-5\">
                                                ";
            // line 108
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "logo", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "logo", [], "any", false, false, false, 109))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 109), "html", null, true);
                yield "\">
                                                ";
            } else {
                // line 111
                yield "                                                    <span class=\"symbol-label bg-light-primary text-primary fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 111), 0, 2)), "html", null, true);
                yield "</span>
                                                ";
            }
            // line 113
            yield "                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "slug", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\" class=\"text-gray-800 text-hover-primary mb-1 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 115), "html", null, true);
            yield "</a>
                                                <span class=\"fs-7 text-muted\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "acronym", [], "any", false, false, false, 116), "html", null, true);
            yield "</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">";
            // line 122
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "sector", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "sector", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), "html", null, true)) : ("N/A"));
            yield "</span>
                                            <span class=\"badge badge-light-primary fs-8 mt-1\" style=\"width: fit-content;\">";
            // line 123
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, true, false, 123), "name", [], "any", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true)) : ("Non défini"));
            yield "</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">";
            // line 128
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headName", [], "any", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headName", [], "any", false, false, false, 128)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headName", [], "any", false, false, false, 128), "html", null, true)) : ("N/A"));
            yield "</span>
                                            <span class=\"fs-7 text-muted\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headTitle", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-";
            // line 133
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "status", [], "any", false, false, false, 133) == "Actif")) ? ("success") : ("warning"));
            yield " fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "status", [], "any", false, false, false, 133), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "slug", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 141
        if (!$context['_iterated']) {
            // line 142
            yield "                                <tr><td colspan=\"5\" class=\"text-center\">Aucune institution trouvée</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['institution'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                        </tbody>
                    </table>
                </div>
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
        return "institution/index.html.twig";
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
        return array (  304 => 144,  297 => 142,  295 => 141,  285 => 136,  277 => 133,  270 => 129,  266 => 128,  258 => 123,  254 => 122,  245 => 116,  239 => 115,  235 => 113,  229 => 111,  221 => 109,  219 => 108,  213 => 104,  208 => 103,  186 => 84,  180 => 81,  165 => 69,  152 => 59,  139 => 49,  126 => 39,  106 => 22,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Institutions - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Institutions</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Gouvernance</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_institutions_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouvelle Institution
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ stats.total }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Institutions</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">{{ stats.actifs }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Actives</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">{{ stats.byType['Ministère'] ?? 0 }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Ministères</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-info me-2 lh-1 ls-n2\">{{ stats.byType|length }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Types d'entités</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header border-0 pt-6\">
                <div class=\"card-title\">
                    <form method=\"GET\" action=\"{{ path('app_institutions') }}\" class=\"d-flex align-items-center position-relative my-1 gap-3\">
                        <div class=\"position-relative\">
                            <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-5 mt-4\"></i>
                            <input type=\"text\" name=\"search\" class=\"form-control form-control-solid w-250px ps-13\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
                        </div>
                    </form>
                </div>
            </div>
            
            <div class=\"card-body py-4\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th class=\"min-w-250px\">Institution</th>
                                <th class=\"min-w-125px\">Secteur / Type</th>
                                <th class=\"min-w-150px\">Responsable</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            {% for institution in institutions %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-50px me-5\">
                                                {% if institution.logo %}
                                                    <img src=\"{{ asset('uploads/images/' ~ institution.logo) }}\" alt=\"{{ institution.name }}\">
                                                {% else %}
                                                    <span class=\"symbol-label bg-light-primary text-primary fw-bold\">{{ institution.name|slice(0, 2)|upper }}</span>
                                                {% endif %}
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <a href=\"{{ path('app_institutions_show', {slug: institution.slug}) }}\" class=\"text-gray-800 text-hover-primary mb-1 fw-bold\">{{ institution.name }}</a>
                                                <span class=\"fs-7 text-muted\">{{ institution.acronym }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">{{ institution.sector ? institution.sector.name : 'N/A' }}</span>
                                            <span class=\"badge badge-light-primary fs-8 mt-1\" style=\"width: fit-content;\">{{ institution.typeInstitution.name ?? 'Non défini' }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">{{ institution.headName ?? 'N/A' }}</span>
                                            <span class=\"fs-7 text-muted\">{{ institution.headTitle }}</span>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-{{ institution.status == 'Actif' ? 'success' : 'warning' }} fw-bold\">{{ institution.status }}</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"{{ path('app_institutions_show', {slug: institution.slug}) }}\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr><td colspan=\"5\" class=\"text-center\">Aucune institution trouvée</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "institution/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\institution\\index.html.twig");
    }
}
