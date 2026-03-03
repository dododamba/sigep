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

/* convention/index.html.twig */
class __TwigTemplate_7dce03dfa418a6d4c549faee2e616afc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "convention/index.html.twig"));

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

        yield "Gestion des Conventions - SIGEP Tchad";
        
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
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Conventions</h1>
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
                <li class=\"breadcrumb-item text-muted\">Cadre Juridique</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouvelle Convention
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 35, $this->source); })()), "par_statut", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["statut"] => $context["data"]) {
            // line 36
            yield "                <div class=\"col-md-3\">
                    <div class=\"card card-flush h-md-100\">
                        <div class=\"card-header pt-5\">
                            <div class=\"card-title d-flex flex-column\">
                                <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "nombre", [], "any", false, false, false, 40), "html", null, true);
            yield "</span>
                                <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["statut"], ["_" => " "])), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"card-body pt-0 pb-5\">
                            <span class=\"text-muted fs-7 fw-bold\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 45), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statut'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Liste des conventions</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Code</th>
                                <th>Intitulé</th>
                                <th>Partenaire</th>
                                <th class=\"text-end\">Montant</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conventions"]) || array_key_exists("conventions", $context) ? $context["conventions"] : (function () { throw new RuntimeError('Variable "conventions" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["convention"]) {
            // line 74
            yield "                                <tr>
                                    <td><span class=\"text-dark fw-bold\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "code", [], "any", false, false, false, 75), "html", null, true);
            yield "</span></td>
                                    <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "intitule", [], "any", false, false, false, 76)), "truncate", [50], "method", false, false, false, 76), "html", null, true);
            yield "</td>
                                    <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "partenaire", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                                    <td class=\"text-end fw-bold text-dark\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "montantFormate", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutBadgeClass", [], "any", false, false, false, 80), "html", null, true);
            yield " fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutLabel", [], "any", false, false, false, 80), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 88
        if (!$context['_iterated']) {
            // line 89
            yield "                                <tr><td colspan=\"6\" class=\"text-center\">Aucune convention enregistrée</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['convention'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        return "convention/index.html.twig";
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
        return array (  231 => 91,  224 => 89,  222 => 88,  212 => 83,  204 => 80,  199 => 78,  195 => 77,  191 => 76,  187 => 75,  184 => 74,  179 => 73,  154 => 50,  143 => 45,  136 => 41,  132 => 40,  126 => 36,  122 => 35,  106 => 22,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Conventions - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Conventions</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Cadre Juridique</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_convention_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouvelle Convention
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Stats Widgets -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            {% for statut, data in statistiques.par_statut %}
                <div class=\"col-md-3\">
                    <div class=\"card card-flush h-md-100\">
                        <div class=\"card-header pt-5\">
                            <div class=\"card-title d-flex flex-column\">
                                <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ data.nombre }}</span>
                                <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">{{ statut|replace({'_': ' '})|title }}</span>
                            </div>
                        </div>
                        <div class=\"card-body pt-0 pb-5\">
                            <span class=\"text-muted fs-7 fw-bold\">{{ data.total|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Liste des conventions</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Code</th>
                                <th>Intitulé</th>
                                <th>Partenaire</th>
                                <th class=\"text-end\">Montant</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            {% for convention in conventions %}
                                <tr>
                                    <td><span class=\"text-dark fw-bold\">{{ convention.code }}</span></td>
                                    <td>{{ convention.intitule|u.truncate(50) }}</td>
                                    <td>{{ convention.partenaire }}</td>
                                    <td class=\"text-end fw-bold text-dark\">{{ convention.montantFormate }}</td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-{{ convention.statutBadgeClass }} fw-bold\">{{ convention.statutLabel }}</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"{{ path('app_convention_show', {'id': convention.id}) }}\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr><td colspan=\"6\" class=\"text-center\">Aucune convention enregistrée</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "convention/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\convention\\index.html.twig");
    }
}
