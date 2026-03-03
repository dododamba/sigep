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

/* top_management/financing_details.html.twig */
class __TwigTemplate_d3ef1b6ae67ce175be6a8ecfdd759dca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "top_management/financing_details.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 3, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détail Financement - SIGEP Tchad";
        
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
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 10, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_dashboard");
        yield "\" class=\"text-muted text-hover-primary\">Management</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Financements</li>
                ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 19, $this->source); })()), "numeroConvention", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                    <li class=\"breadcrumb-item\">
                        <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                    </li>
                    <li class=\"breadcrumb-item text-dark\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 23, $this->source); })()), "numeroConvention", [], "any", false, false, false, 23), "html", null, true);
            yield "</li>
                ";
        }
        // line 25
        yield "            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_dashboard");
        yield "\" class=\"btn btn-sm btn-secondary\">
                <i data-lucide=\"arrow-left\" class=\"me-1\" style=\"width: 14px; height: 14px;\"></i> Retour
            </a>
            <span class=\"badge badge-light-primary fs-7 fw-bold\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 31, $this->source); })()), "typeFinancement", [], "any", false, false, false, 31), "html", null, true);
        yield "</span>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Metrics -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 46, $this->source); })()), "totalAmount", [], "any", false, false, false, 46), 0, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Montant Total (FCFA)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 56, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 56), 0, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Décaissé</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"badge badge-light-success fs-7 fw-bold\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 61, $this->source); })()), "disbursementRate", [], "any", false, false, false, 61), "html", null, true);
        yield "% décaissé</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 69, $this->source); })()), "remainingAmount", [], "any", false, false, false, 69), 0, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Montant Restant</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 79, $this->source); })()), "projectsCount", [], "any", false, false, false, 79), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Financés</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-5 g-xl-10\">
            <div class=\"col-xl-6\">
                <!-- Info Section -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Informations de la Convention</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-5 fw-semibold text-muted\">Source de Financement</label>
                            <div class=\"col-lg-7\">
                                <span class=\"fw-bold fs-6 text-gray-800\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 98, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 98), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-5 fw-semibold text-muted\">Type de Financement</label>
                            <div class=\"col-lg-7\">
                                <span class=\"badge badge-light-primary fs-7 fw-bold\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 104, $this->source); })()), "typeFinancement", [], "any", false, false, false, 104), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        ";
        // line 107
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 107, $this->source); })()), "numeroConvention", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                        <div class=\"row mb-7\">
                            <label class=\"col-lg-5 fw-semibold text-muted\">Numéro de Convention</label>
                            <div class=\"col-lg-7\">
                                <span class=\"fw-bold fs-6 text-gray-800\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 111, $this->source); })()), "numeroConvention", [], "any", false, false, false, 111), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        ";
        }
        // line 115
        yield "                    </div>
                </div>

                <!-- Disbursement Evolution Chart -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Évolution des Décaissements</h3>
                    </div>
                    <div class=\"card-body\">
                        <div style=\"height: 250px;\">
                            <canvas id=\"disbursementEvolutionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <!-- Funded Projects Table -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Projets Financés</h3>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle table-row-dashed fs-6 gy-3\">
                                <thead>
                                    <tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
                                        <th>Projet</th>
                                        <th class=\"text-end\">Statut</th>
                                    </tr>
                                </thead>
                                <tbody class=\"fw-semibold text-gray-600\">
                                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fundedProjects"]) || array_key_exists("fundedProjects", $context) ? $context["fundedProjects"] : (function () { throw new RuntimeError('Variable "fundedProjects" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 148
            yield "                                    <tr>
                                        <td>
                                            <a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" class=\"text-dark fw-bold text-hover-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "titre", [], "any", false, false, false, 150), "html", null, true);
            yield "</a>
                                        </td>
                                        <td class=\"text-end\">
                                            <span class=\"badge badge-light-primary\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statutLabel", [], "any", false, false, false, 153), "html", null, true);
            yield "</span>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Statistics -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Statistiques</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex flex-stack mb-5\">
                            <span class=\"text-gray-400 fw-bold\">Taille Moyenne des Projets</span>
                            <span class=\"text-gray-800 fw-bold fs-6\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["metrics"] ?? null), "averageProjectSize", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 171, $this->source); })()), "averageProjectSize", [], "any", false, false, false, 171), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        <div class=\"d-flex flex-stack mb-5\">
                            <span class=\"text-gray-400 fw-bold\">Taux de Succès</span>
                            <span class=\"text-gray-800 fw-bold fs-6\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["metrics"] ?? null), "successRate", [], "any", true, true, false, 175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 175, $this->source); })()), "successRate", [], "any", false, false, false, 175), 0)) : (0)), "html", null, true);
        yield "%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 185
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 186
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        const evolutionData = ";
        // line 192
        yield json_encode((isset($context["disbursementEvolution"]) || array_key_exists("disbursementEvolution", $context) ? $context["disbursementEvolution"] : (function () { throw new RuntimeError('Variable "disbursementEvolution" does not exist.', 192, $this->source); })()));
        yield ";
        if (document.getElementById('disbursementEvolutionChart')) {
            new Chart(document.getElementById('disbursementEvolutionChart'), {
                type: 'bar',
                data: {
                    labels: Object.keys(evolutionData),
                    datasets: [{
                        label: 'Décaissements (FCFA)',
                        data: Object.values(evolutionData),
                        backgroundColor: '#004d99',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) { return value.toLocaleString('fr-FR'); }
                            }
                        }
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
        return "top_management/financing_details.html.twig";
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
        return array (  363 => 192,  355 => 186,  345 => 185,  328 => 175,  321 => 171,  305 => 157,  295 => 153,  287 => 150,  283 => 148,  279 => 147,  245 => 115,  238 => 111,  233 => 108,  231 => 107,  225 => 104,  216 => 98,  194 => 79,  181 => 69,  170 => 61,  162 => 56,  149 => 46,  131 => 31,  125 => 28,  120 => 25,  115 => 23,  110 => 20,  108 => 19,  99 => 13,  93 => 10,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ financing.sourceFinancement }} - Détail Financement - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">{{ financing.sourceFinancement }}</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_top_management_dashboard') }}\" class=\"text-muted text-hover-primary\">Management</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Financements</li>
                {% if financing.numeroConvention %}
                    <li class=\"breadcrumb-item\">
                        <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                    </li>
                    <li class=\"breadcrumb-item text-dark\">{{ financing.numeroConvention }}</li>
                {% endif %}
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_top_management_dashboard') }}\" class=\"btn btn-sm btn-secondary\">
                <i data-lucide=\"arrow-left\" class=\"me-1\" style=\"width: 14px; height: 14px;\"></i> Retour
            </a>
            <span class=\"badge badge-light-primary fs-7 fw-bold\">{{ financing.typeFinancement }}</span>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Metrics -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ metrics.totalAmount|number_format(0, ',', ' ') }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Montant Total (FCFA)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ metrics.totalDisbursed|number_format(0, ',', ' ') }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Décaissé</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"badge badge-light-success fs-7 fw-bold\">{{ metrics.disbursementRate }}% décaissé</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ metrics.remainingAmount|number_format(0, ',', ' ') }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Montant Restant</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ metrics.projectsCount }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Projets Financés</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-5 g-xl-10\">
            <div class=\"col-xl-6\">
                <!-- Info Section -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Informations de la Convention</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-5 fw-semibold text-muted\">Source de Financement</label>
                            <div class=\"col-lg-7\">
                                <span class=\"fw-bold fs-6 text-gray-800\">{{ financing.sourceFinancement }}</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-5 fw-semibold text-muted\">Type de Financement</label>
                            <div class=\"col-lg-7\">
                                <span class=\"badge badge-light-primary fs-7 fw-bold\">{{ financing.typeFinancement }}</span>
                            </div>
                        </div>
                        {% if financing.numeroConvention %}
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-5 fw-semibold text-muted\">Numéro de Convention</label>
                            <div class=\"col-lg-7\">
                                <span class=\"fw-bold fs-6 text-gray-800\">{{ financing.numeroConvention }}</span>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>

                <!-- Disbursement Evolution Chart -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Évolution des Décaissements</h3>
                    </div>
                    <div class=\"card-body\">
                        <div style=\"height: 250px;\">
                            <canvas id=\"disbursementEvolutionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <!-- Funded Projects Table -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Projets Financés</h3>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle table-row-dashed fs-6 gy-3\">
                                <thead>
                                    <tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
                                        <th>Projet</th>
                                        <th class=\"text-end\">Statut</th>
                                    </tr>
                                </thead>
                                <tbody class=\"fw-semibold text-gray-600\">
                                    {% for project in fundedProjects %}
                                    <tr>
                                        <td>
                                            <a href=\"{{ path('app_top_management_project_detail', {id: project.id}) }}\" class=\"text-dark fw-bold text-hover-primary\">{{ project.titre }}</a>
                                        </td>
                                        <td class=\"text-end\">
                                            <span class=\"badge badge-light-primary\">{{ project.statutLabel }}</span>
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Statistics -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Statistiques</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex flex-stack mb-5\">
                            <span class=\"text-gray-400 fw-bold\">Taille Moyenne des Projets</span>
                            <span class=\"text-gray-800 fw-bold fs-6\">{{ metrics.averageProjectSize|default(0)|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                        <div class=\"d-flex flex-stack mb-5\">
                            <span class=\"text-gray-400 fw-bold\">Taux de Succès</span>
                            <span class=\"text-gray-800 fw-bold fs-6\">{{ metrics.successRate|default(0) }}%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        const evolutionData = {{ disbursementEvolution|json_encode|raw }};
        if (document.getElementById('disbursementEvolutionChart')) {
            new Chart(document.getElementById('disbursementEvolutionChart'), {
                type: 'bar',
                data: {
                    labels: Object.keys(evolutionData),
                    datasets: [{
                        label: 'Décaissements (FCFA)',
                        data: Object.values(evolutionData),
                        backgroundColor: '#004d99',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) { return value.toLocaleString('fr-FR'); }
                            }
                        }
                    }
                }
            });
        }
    </script>
{% endblock %}
", "top_management/financing_details.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\top_management\\financing_details.html.twig");
    }
}
