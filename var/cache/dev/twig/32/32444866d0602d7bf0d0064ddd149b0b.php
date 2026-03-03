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

/* audit/index.html.twig */
class __TwigTemplate_4c54503739b4551183eabd74ed1c9c88 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "audit/index.html.twig"));

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

        yield "Audits et Contrôles - SIGEP Tchad";
        
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
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Audits & Contrôles</h1>
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
                <li class=\"breadcrumb-item text-muted\">Surveillance & Conformité</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouvel Audit
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
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">
                                ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 40), "planifie", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 40, $this->source); })()), "par_statut", [], "any", false, false, false, 40), "planifie", [], "any", false, false, false, 40), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 40), "en_cours", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 40, $this->source); })()), "par_statut", [], "any", false, false, false, 40), "en_cours", [], "any", false, false, false, 40), 0)) : (0))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 40), "termine", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 40, $this->source); })()), "par_statut", [], "any", false, false, false, 40), "termine", [], "any", false, false, false, 40), 0)) : (0))), "html", null, true);
        yield "
                            </span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Audits</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-warning me-2 lh-1 ls-n2\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 51), "planifie", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 51, $this->source); })()), "par_statut", [], "any", false, false, false, 51), "planifie", [], "any", false, false, false, 51), 0)) : (0)), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Planifiés</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 61), "en_cours", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 61, $this->source); })()), "par_statut", [], "any", false, false, false, 61), "en_cours", [], "any", false, false, false, 61), 0)) : (0)), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">En cours</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 71), "termine", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 71, $this->source); })()), "par_statut", [], "any", false, false, false, 71), "termine", [], "any", false, false, false, 71), 0)) : (0)), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Terminés</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Liste des audits</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Référence</th>
                                <th>Projet</th>
                                <th>Auditeur</th>
                                <th>Date</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-center\">Niveau</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 101, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
            // line 102
            yield "                                <tr>
                                    <td><span class=\"text-dark fw-bold\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "reference", [], "any", false, false, false, 103), "html", null, true);
            yield "</span></td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "projet", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106)), "truncate", [40], "method", false, false, false, 106), "html", null, true);
            yield "</span>
                                            <span class=\"fs-7 text-muted\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "projet", [], "any", false, false, false, 107), "code", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
                                        </div>
                                    </td>
                                    <td>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "auditeur", [], "any", false, false, false, 110), "html", null, true);
            yield "</td>
                                    <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td class=\"text-center\">
                                        ";
            // line 113
            $context["statutColor"] = (((CoreExtension::getAttribute($this->env, $this->source, ["planifie" => "warning", "en_cours" => "primary", "termine" => "success"], CoreExtension::getAttribute($this->env, $this->source,             // line 117
$context["audit"], "statut", [], "any", false, false, false, 117), [], "array", true, true, false, 114) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["planifie" => "warning", "en_cours" => "primary", "termine" => "success"], CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 117), [], "array", false, false, false, 114)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["planifie" => "warning", "en_cours" => "primary", "termine" => "success"], CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 117), [], "array", false, false, false, 114)) : ("secondary"));
            // line 118
            yield "                                        <span class=\"badge badge-light-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statutColor"]) || array_key_exists("statutColor", $context) ? $context["statutColor"] : (function () { throw new RuntimeError('Variable "statutColor" does not exist.', 118, $this->source); })()), "html", null, true);
            yield " fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statutLabel", [], "any", false, false, false, 118), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "niveau", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                                            ";
                $context["niveauColor"] = (((CoreExtension::getAttribute($this->env, $this->source, ["excellent" => "success", "bon" => "success", "moyen" => "warning", "critique" => "danger"], CoreExtension::getAttribute($this->env, $this->source,                 // line 127
$context["audit"], "niveau", [], "any", false, false, false, 127), [], "array", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["excellent" => "success", "bon" => "success", "moyen" => "warning", "critique" => "danger"], CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "niveau", [], "any", false, false, false, 127), [], "array", false, false, false, 123)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["excellent" => "success", "bon" => "success", "moyen" => "warning", "critique" => "danger"], CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "niveau", [], "any", false, false, false, 127), [], "array", false, false, false, 123)) : ("secondary"));
                // line 128
                yield "                                            <span class=\"badge badge-light-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauColor"]) || array_key_exists("niveauColor", $context) ? $context["niveauColor"] : (function () { throw new RuntimeError('Variable "niveauColor" does not exist.', 128, $this->source); })()), "html", null, true);
                yield " fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "niveauLabel", [], "any", false, false, false, 128), "html", null, true);
                yield "</span>
                                        ";
            } else {
                // line 130
                yield "                                            <span class=\"text-muted\">-</span>
                                        ";
            }
            // line 132
            yield "                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 139
        if (!$context['_iterated']) {
            // line 140
            yield "                                <tr><td colspan=\"7\" class=\"text-center\">Aucun audit enregistré</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
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
        return "audit/index.html.twig";
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
        return array (  286 => 142,  279 => 140,  277 => 139,  267 => 134,  263 => 132,  259 => 130,  251 => 128,  249 => 127,  247 => 122,  245 => 121,  236 => 118,  234 => 117,  233 => 113,  228 => 111,  224 => 110,  218 => 107,  214 => 106,  208 => 103,  205 => 102,  200 => 101,  167 => 71,  154 => 61,  141 => 51,  127 => 40,  106 => 22,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Audits et Contrôles - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Audits & Contrôles</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Surveillance & Conformité</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_audit_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouvel Audit
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
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">
                                {{ statistiques.par_statut.planifie|default(0) + statistiques.par_statut.en_cours|default(0) + statistiques.par_statut.termine|default(0) }}
                            </span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Audits</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-warning me-2 lh-1 ls-n2\">{{ statistiques.par_statut.planifie|default(0) }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Planifiés</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">{{ statistiques.par_statut.en_cours|default(0) }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">En cours</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">{{ statistiques.par_statut.termine|default(0) }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Terminés</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Liste des audits</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Référence</th>
                                <th>Projet</th>
                                <th>Auditeur</th>
                                <th>Date</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-center\">Niveau</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            {% for audit in audits %}
                                <tr>
                                    <td><span class=\"text-dark fw-bold\">{{ audit.reference }}</span></td>
                                    <td>
                                        <div class=\"d-flex flex-column\">
                                            <span class=\"text-gray-800 fw-bold\">{{ audit.projet.name|u.truncate(40) }}</span>
                                            <span class=\"fs-7 text-muted\">{{ audit.projet.code }}</span>
                                        </div>
                                    </td>
                                    <td>{{ audit.auditeur }}</td>
                                    <td>{{ audit.dateAudit|date('d/m/Y') }}</td>
                                    <td class=\"text-center\">
                                        {% set statutColor = {
                                            'planifie': 'warning',
                                            'en_cours': 'primary',
                                            'termine': 'success'
                                        }[audit.statut] ?? 'secondary' %}
                                        <span class=\"badge badge-light-{{ statutColor }} fw-bold\">{{ audit.statutLabel }}</span>
                                    </td>
                                    <td class=\"text-center\">
                                        {% if audit.niveau %}
                                            {% set niveauColor = {
                                                'excellent': 'success',
                                                'bon': 'success',
                                                'moyen': 'warning',
                                                'critique': 'danger'
                                            }[audit.niveau] ?? 'secondary' %}
                                            <span class=\"badge badge-light-{{ niveauColor }} fw-bold\">{{ audit.niveauLabel }}</span>
                                        {% else %}
                                            <span class=\"text-muted\">-</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"{{ path('app_audit_show', {'id': audit.id}) }}\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr><td colspan=\"7\" class=\"text-center\">Aucun audit enregistré</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "audit/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\audit\\index.html.twig");
    }
}
