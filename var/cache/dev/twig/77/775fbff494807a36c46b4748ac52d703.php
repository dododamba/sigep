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

/* financement/index.html.twig */
class __TwigTemplate_4a3c580ccd666b7407468dce0630f30b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "financement/index.html.twig"));

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

        yield "Gestion des Financements - SIGEP Tchad";
        
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
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Financements</h1>
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
                <li class=\"breadcrumb-item text-muted\">Accords & Conventions</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau Financement
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
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Conventions</span>
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
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Conventions Actives</span>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 59, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Engagé (Mds FCFA)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header border-0 pt-6\">
                <div class=\"card-title\">
                    <form method=\"get\" action=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"d-flex align-items-center position-relative my-1 gap-3\">
                        <div class=\"position-relative\">
                            <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-5 mt-4\"></i>
                            <input type=\"text\" name=\"search\" class=\"form-control form-control-solid w-250px ps-13\" placeholder=\"Rechercher...\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                        <select name=\"statut\" class=\"form-select form-select-solid w-150px\" onchange=\"this.form.submit()\">
                            <option value=\"\">Tout statut</option>
                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 79
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 79, $this->source); })()) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                        </select>
                    </form>
                </div>
                <div class=\"card-toolbar\">
                    <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_export_json");
        yield "\" class=\"btn btn-light-primary btn-sm\">
                        <i class=\"ki-outline ki-exit-up fs-2\"></i> Exporter
                    </a>
                </div>
            </div>
            
            <div class=\"card-body py-4\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Convention</th>
                                <th>Bailleur</th>
                                <th>Type</th>
                                <th class=\"text-end\">Engagé</th>
                                <th>Décaissement</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financements"]) || array_key_exists("financements", $context) ? $context["financements"] : (function () { throw new RuntimeError('Variable "financements" does not exist.', 106, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["financement"]) {
            // line 107
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-dark fw-bold\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "numeroConvention", [], "any", false, false, false, 110), "html", null, true);
            yield "</span>
                                            <span class=\"fs-7 text-muted\">Signé le ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "dateSignature", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
            yield "</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-35px symbol-circle me-3\">
                                                <span class=\"symbol-label bg-light-primary text-primary fw-bold\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleurShortName", [], "any", false, false, false, 117), "html", null, true);
            yield "</span>
                                            </div>
                                            <span class=\"text-gray-800 fw-bold\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            yield "</span>
                                        </div>
                                    </td>
                                    <td><span class=\"badge badge-light-primary\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "typeLabel", [], "any", false, false, false, 122), "html", null, true);
            yield "</span></td>
                                    <td class=\"text-end fw-bold text-dark\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantEngage", [], "any", false, false, false, 123) / 1000000), 1, ",", " "), "html", null, true);
            yield " M</td>
                                    <td>
                                        <div class=\"d-flex flex-column w-100 me-2\">
                                            <div class=\"d-flex flex-stack mb-2\">
                                                <span class=\"text-muted me-2 fs-7 fw-bold\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 127), "html", null, true);
            yield "%</span>
                                            </div>
                                            <div class=\"progress h-6px w-100\">
                                                ";
            // line 130
            $context["progColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 130) >= 70)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 130) >= 40)) ? ("warning") : ("danger"))));
            // line 131
            yield "                                                <div class=\"progress-bar bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progColor"]) || array_key_exists("progColor", $context) ? $context["progColor"] : (function () { throw new RuntimeError('Variable "progColor" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "\" role=\"progressbar\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 131), "html", null, true);
            yield "%;\"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-";
            // line 136
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statut", [], "any", false, false, false, 136) == "actif")) ? ("success") : ("warning"));
            yield " fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statutLabel", [], "any", false, false, false, 136), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "slug", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 144
        if (!$context['_iterated']) {
            // line 145
            yield "                                <tr><td colspan=\"7\" class=\"text-center\">Aucun financement trouvé</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['financement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
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
        return "financement/index.html.twig";
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
        return array (  318 => 147,  311 => 145,  309 => 144,  299 => 139,  291 => 136,  280 => 131,  278 => 130,  272 => 127,  265 => 123,  261 => 122,  255 => 119,  250 => 117,  241 => 111,  237 => 110,  232 => 107,  227 => 106,  203 => 85,  197 => 81,  184 => 79,  180 => 78,  173 => 74,  167 => 71,  152 => 59,  139 => 49,  126 => 39,  106 => 22,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Financements - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Financements</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Accords & Conventions</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_financements_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau Financement
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
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Conventions</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">{{ stats.actifs }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Conventions Actives</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">{{ montantTotal|number_format(1, ',', ' ') }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Engagé (Mds FCFA)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header border-0 pt-6\">
                <div class=\"card-title\">
                    <form method=\"get\" action=\"{{ path('app_financements') }}\" class=\"d-flex align-items-center position-relative my-1 gap-3\">
                        <div class=\"position-relative\">
                            <i class=\"ki-outline ki-magnifier fs-3 position-absolute ms-5 mt-4\"></i>
                            <input type=\"text\" name=\"search\" class=\"form-control form-control-solid w-250px ps-13\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
                        </div>
                        <select name=\"statut\" class=\"form-select form-select-solid w-150px\" onchange=\"this.form.submit()\">
                            <option value=\"\">Tout statut</option>
                            {% for label, value in statuts %}
                                <option value=\"{{ value }}\" {{ statut == value ? 'selected' : '' }}>{{ label }}</option>
                            {% endfor %}
                        </select>
                    </form>
                </div>
                <div class=\"card-toolbar\">
                    <a href=\"{{ path('app_financements_export_json') }}\" class=\"btn btn-light-primary btn-sm\">
                        <i class=\"ki-outline ki-exit-up fs-2\"></i> Exporter
                    </a>
                </div>
            </div>
            
            <div class=\"card-body py-4\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Convention</th>
                                <th>Bailleur</th>
                                <th>Type</th>
                                <th class=\"text-end\">Engagé</th>
                                <th>Décaissement</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            {% for financement in financements %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-dark fw-bold\">{{ financement.numeroConvention }}</span>
                                            <span class=\"fs-7 text-muted\">Signé le {{ financement.dateSignature|date('d/m/Y') }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"symbol symbol-35px symbol-circle me-3\">
                                                <span class=\"symbol-label bg-light-primary text-primary fw-bold\">{{ financement.bailleurShortName }}</span>
                                            </div>
                                            <span class=\"text-gray-800 fw-bold\">{{ financement.bailleur.name }}</span>
                                        </div>
                                    </td>
                                    <td><span class=\"badge badge-light-primary\">{{ financement.typeLabel }}</span></td>
                                    <td class=\"text-end fw-bold text-dark\">{{ (financement.montantEngage / 1000000)|number_format(1, ',', ' ') }} M</td>
                                    <td>
                                        <div class=\"d-flex flex-column w-100 me-2\">
                                            <div class=\"d-flex flex-stack mb-2\">
                                                <span class=\"text-muted me-2 fs-7 fw-bold\">{{ financement.tauxDecaissement }}%</span>
                                            </div>
                                            <div class=\"progress h-6px w-100\">
                                                {% set progColor = financement.tauxDecaissement >= 70 ? 'success' : (financement.tauxDecaissement >= 40 ? 'warning' : 'danger') %}
                                                <div class=\"progress-bar bg-{{ progColor }}\" role=\"progressbar\" style=\"width: {{ financement.tauxDecaissement }}%;\"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-{{ financement.statut == 'actif' ? 'success' : 'warning' }} fw-bold\">{{ financement.statutLabel }}</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"{{ path('app_financements_show', {slug: financement.slug}) }}\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr><td colspan=\"7\" class=\"text-center\">Aucun financement trouvé</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "financement/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\financement\\index.html.twig");
    }
}
