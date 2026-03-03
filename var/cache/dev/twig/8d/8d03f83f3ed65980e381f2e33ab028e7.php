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

/* decaissement/index.html.twig */
class __TwigTemplate_659c05598842d07ed6fc3e691bcc3fb9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "decaissement/index.html.twig"));

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

        yield "Gestion des Décaissements - SIGEP Tchad";
        
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
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Décaissements</h1>
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
                <li class=\"breadcrumb-item text-muted\">Suivi Financier</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau décaissement
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
                            <span class=\"fs-2hx fw-bold text-warning me-2 lh-1 ls-n2\">";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "en_attente", [], "array", false, true, false, 39), "nombre", [], "any", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 39, $this->source); })()), "en_attente", [], "array", false, false, false, 39), "nombre", [], "any", false, false, false, 39)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 39, $this->source); })()), "en_attente", [], "array", false, false, false, 39), "nombre", [], "any", false, false, false, 39), "html", null, true)) : (0));
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">En attente</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "en_attente", [], "array", false, true, false, 44), "total", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 44, $this->source); })()), "en_attente", [], "array", false, false, false, 44), "total", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 44, $this->source); })()), "en_attente", [], "array", false, false, false, 44), "total", [], "any", false, false, false, 44)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "valide", [], "array", false, true, false, 52), "nombre", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 52, $this->source); })()), "valide", [], "array", false, false, false, 52), "nombre", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 52, $this->source); })()), "valide", [], "array", false, false, false, 52), "nombre", [], "any", false, false, false, 52), "html", null, true)) : (0));
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Validés</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "valide", [], "array", false, true, false, 57), "total", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 57, $this->source); })()), "valide", [], "array", false, false, false, 57), "total", [], "any", false, false, false, 57)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 57, $this->source); })()), "valide", [], "array", false, false, false, 57), "total", [], "any", false, false, false, 57)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">";
        // line 65
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "execute", [], "array", false, true, false, 65), "nombre", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 65, $this->source); })()), "execute", [], "array", false, false, false, 65), "nombre", [], "any", false, false, false, 65)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 65, $this->source); })()), "execute", [], "array", false, false, false, 65), "nombre", [], "any", false, false, false, 65), "html", null, true)) : (0));
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Exécutés</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "execute", [], "array", false, true, false, 70), "total", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 70, $this->source); })()), "execute", [], "array", false, false, false, 70), "total", [], "any", false, false, false, 70)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 70, $this->source); })()), "execute", [], "array", false, false, false, 70), "total", [], "any", false, false, false, 70)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-danger me-2 lh-1 ls-n2\">";
        // line 78
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "rejete", [], "array", false, true, false, 78), "nombre", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 78, $this->source); })()), "rejete", [], "array", false, false, false, 78), "nombre", [], "any", false, false, false, 78)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 78, $this->source); })()), "rejete", [], "array", false, false, false, 78), "nombre", [], "any", false, false, false, 78), "html", null, true)) : (0));
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Rejetés</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "rejete", [], "array", false, true, false, 83), "total", [], "any", true, true, false, 83) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 83, $this->source); })()), "rejete", [], "array", false, false, false, 83), "total", [], "any", false, false, false, 83)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 83, $this->source); })()), "rejete", [], "array", false, false, false, 83), "total", [], "any", false, false, false, 83)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Liste des décaissements</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Référence</th>
                                <th>Projet</th>
                                <th>Bénéficiaire</th>
                                <th class=\"text-end\">Montant</th>
                                <th>Date demande</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["decaissements"]) || array_key_exists("decaissements", $context) ? $context["decaissements"] : (function () { throw new RuntimeError('Variable "decaissements" does not exist.', 111, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["decaissement"]) {
            // line 112
            yield "                                <tr>
                                    <td><span class=\"text-dark fw-bold\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "reference", [], "any", false, false, false, 113), "html", null, true);
            yield "</span></td>
                                    <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "project", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114)), "truncate", [40], "method", false, false, false, 114), "html", null, true);
            yield "</td>
                                    <td>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "beneficiaire", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                                    <td class=\"text-end fw-bold text-dark\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "montantFormate", [], "any", false, false, false, 116), "html", null, true);
            yield "</td>
                                    <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "dateDemande", [], "any", false, false, false, 117), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "statutBadgeClass", [], "any", false, false, false, 119), "html", null, true);
            yield " fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "statutLabel", [], "any", false, false, false, 119), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 127
        if (!$context['_iterated']) {
            // line 128
            yield "                                <tr><td colspan=\"7\" class=\"text-center\">Aucun décaissement enregistré</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['decaissement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                ";
        // line 135
        if (((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 135, $this->source); })()) > 1)) {
            // line 136
            yield "                    <div class=\"d-flex flex-stack flex-wrap pt-10\">
                        <div class=\"fs-6 fw-semibold text-gray-700\">Page ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 137, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 137, $this->source); })()), "html", null, true);
            yield "</div>
                        <ul class=\"pagination\">
                            ";
            // line 139
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 139, $this->source); })()) > 1)) {
                // line 140
                yield "                                <li class=\"page-item previous\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 140, $this->source); })()) - 1)]), "html", null, true);
                yield "\" class=\"page-link\"><i class=\"ki-outline ki-left fs-2\"></i></a></li>
                            ";
            }
            // line 142
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 142, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 143
                yield "                                <li class=\"page-item ";
                if (($context["i"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 143, $this->source); })()))) {
                    yield "active";
                }
                yield "\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["page" => $context["i"]]), "html", null, true);
                yield "\" class=\"page-link\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "                            ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 145, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 145, $this->source); })()))) {
                // line 146
                yield "                                <li class=\"page-item next\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 146, $this->source); })()) + 1)]), "html", null, true);
                yield "\" class=\"page-link\"><i class=\"ki-outline ki-right fs-2\"></i></a></li>
                            ";
            }
            // line 148
            yield "                        </ul>
                    </div>
                ";
        }
        // line 151
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
        return "decaissement/index.html.twig";
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
        return array (  339 => 151,  334 => 148,  328 => 146,  325 => 145,  310 => 143,  305 => 142,  299 => 140,  297 => 139,  290 => 137,  287 => 136,  285 => 135,  278 => 130,  271 => 128,  269 => 127,  259 => 122,  251 => 119,  246 => 117,  242 => 116,  238 => 115,  234 => 114,  230 => 113,  227 => 112,  222 => 111,  191 => 83,  183 => 78,  172 => 70,  164 => 65,  153 => 57,  145 => 52,  134 => 44,  126 => 39,  106 => 22,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Décaissements - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Décaissements</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Suivi Financier</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_decaissement_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-plus fs-2\"></i> Nouveau décaissement
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
                            <span class=\"fs-2hx fw-bold text-warning me-2 lh-1 ls-n2\">{{ statistiques['en_attente'].nombre ?? 0 }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">En attente</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">{{ (statistiques['en_attente'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-primary me-2 lh-1 ls-n2\">{{ statistiques['valide'].nombre ?? 0 }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Validés</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">{{ (statistiques['valide'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-success me-2 lh-1 ls-n2\">{{ statistiques['execute'].nombre ?? 0 }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Exécutés</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">{{ (statistiques['execute'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-danger me-2 lh-1 ls-n2\">{{ statistiques['rejete'].nombre ?? 0 }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Rejetés</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"text-muted fs-7 fw-bold\">{{ (statistiques['rejete'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class=\"card card-flush\">
            <div class=\"card-header pt-7\">
                <h3 class=\"card-title align-items-start flex-column\">
                    <span class=\"card-label fw-bold text-dark\">Liste des décaissements</span>
                </h3>
            </div>
            <div class=\"card-body pt-2\">
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                        <thead>
                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                <th>Référence</th>
                                <th>Projet</th>
                                <th>Bénéficiaire</th>
                                <th class=\"text-end\">Montant</th>
                                <th>Date demande</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"text-gray-600 fw-semibold\">
                            {% for decaissement in decaissements %}
                                <tr>
                                    <td><span class=\"text-dark fw-bold\">{{ decaissement.reference }}</span></td>
                                    <td>{{ decaissement.project.name|u.truncate(40) }}</td>
                                    <td>{{ decaissement.beneficiaire }}</td>
                                    <td class=\"text-end fw-bold text-dark\">{{ decaissement.montantFormate }}</td>
                                    <td>{{ decaissement.dateDemande|date('d/m/Y') }}</td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-light-{{ decaissement.statutBadgeClass }} fw-bold\">{{ decaissement.statutLabel }}</span>
                                    </td>
                                    <td class=\"text-end\">
                                        <a href=\"{{ path('app_decaissement_show', {'id': decaissement.id}) }}\" class=\"btn btn-icon btn-bg-light btn-active-color-primary btn-sm\">
                                            <i class=\"ki-outline ki-eye fs-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr><td colspan=\"7\" class=\"text-center\">Aucun décaissement enregistré</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                {% if total_pages > 1 %}
                    <div class=\"d-flex flex-stack flex-wrap pt-10\">
                        <div class=\"fs-6 fw-semibold text-gray-700\">Page {{ page }} sur {{ total_pages }}</div>
                        <ul class=\"pagination\">
                            {% if page > 1 %}
                                <li class=\"page-item previous\"><a href=\"{{ path('app_decaissement_index', {'page': page - 1}) }}\" class=\"page-link\"><i class=\"ki-outline ki-left fs-2\"></i></a></li>
                            {% endif %}
                            {% for i in 1..total_pages %}
                                <li class=\"page-item {% if i == page %}active{% endif %}\"><a href=\"{{ path('app_decaissement_index', {'page': i}) }}\" class=\"page-link\">{{ i }}</a></li>
                            {% endfor %}
                            {% if page < total_pages %}
                                <li class=\"page-item next\"><a href=\"{{ path('app_decaissement_index', {'page': page + 1}) }}\" class=\"page-link\"><i class=\"ki-outline ki-right fs-2\"></i></a></li>
                            {% endif %}
                        </ul>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "decaissement/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\decaissement\\index.html.twig");
    }
}
