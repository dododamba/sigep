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

/* top_management/project_details.html.twig */
class __TwigTemplate_614149e946add39d0b842d31f0f68c3f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "top_management/project_details.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détail Projet - SIGEP Tchad";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
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
                <li class=\"breadcrumb-item text-muted\">Projets</li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-dark\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), "html", null, true);
        yield "</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_dashboard");
        yield "\" class=\"btn btn-sm btn-secondary\">
                <i data-lucide=\"arrow-left\" class=\"me-1\" style=\"width: 14px; height: 14px;\"></i> Retour
            </a>
            <span class=\"badge badge-light-";
        // line 29
        yield (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 29, $this->source); })()), "riskLevel", [], "any", false, false, false, 29)) == "élevé")) ? ("danger") : ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 29, $this->source); })()), "riskLevel", [], "any", false, false, false, 29)) == "moyen")) ? ("warning") : ("success"))));
        yield " fs-7 fw-bold\">Risque: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 29, $this->source); })()), "riskLevel", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Metrics Row -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 44, $this->source); })()), "totalBudget", [], "any", false, false, false, 44), 0, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget Total (FCFA)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 54, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 54), 0, ",", " "), "html", null, true);
        yield "</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Total Décaissé</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pb-5\">
                        <span class=\"badge badge-light-success fs-7 fw-bold\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 59, $this->source); })()), "disbursementRate", [], "any", false, false, false, 59), "html", null, true);
        yield "% décaissé</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 67, $this->source); })()), "physicalProgress", [], "any", false, false, false, 67), "html", null, true);
        yield "%</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Progression Physique</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div class=\"h-8px w-100 bg-light-primary rounded\">
                            <div class=\"bg-primary rounded h-8px\" role=\"progressbar\" style=\"width: ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 73, $this->source); })()), "physicalProgress", [], "any", false, false, false, 73), "html", null, true);
        yield "%\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            ";
        // line 82
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 82, $this->source); })()), "daysRemaining", [], "any", false, false, false, 82))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                                <span class=\"fs-2hx fw-bold text-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 83, $this->source); })()), "daysRemaining", [], "any", false, false, false, 83) >= 0)) ? ("dark") : ("danger"));
            yield " me-2 lh-1 ls-n2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(abs(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 83, $this->source); })()), "daysRemaining", [], "any", false, false, false, 83)), "html", null, true);
            yield "</span>
                                <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">";
            // line 84
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 84, $this->source); })()), "daysRemaining", [], "any", false, false, false, 84) >= 0)) ? ("jours restants") : ("jours de retard"));
            yield "</span>
                            ";
        } else {
            // line 86
            yield "                                <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">-</span>
                                <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Délai non défini</span>
                            ";
        }
        // line 89
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-5 g-xl-10\">
            <div class=\"col-xl-8\">
                <!-- Info Section -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Informations Générales</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Institution Responsable</label>
                            <div class=\"col-lg-8\">
                                <span class=\"fw-bold fs-6 text-gray-800\">";
        // line 106
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 106, $this->source); })()), "institution", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 106, $this->source); })()), "institution", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true)) : ("Non définie"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Secteur</label>
                            <div class=\"col-lg-8\">
                                <span class=\"badge badge-light-primary fs-7 fw-bold\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 112, $this->source); })()), "sector", [], "any", false, false, false, 112), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Période</label>
                            <div class=\"col-lg-8\">
                                <span class=\"fw-bold fs-6 text-gray-800\">Du ";
        // line 118
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 118, $this->source); })()), "dateDebut", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 118, $this->source); })()), "dateDebut", [], "any", false, false, false, 118), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield " au ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 118, $this->source); })()), "dateFin", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 118, $this->source); })()), "dateFin", [], "any", false, false, false, 118), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Localisation</label>
                            <div class=\"col-lg-8\">
                                <span class=\"fw-bold fs-6 text-gray-800\">";
        // line 124
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "localisation", [], "any", true, true, false, 124) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 124, $this->source); })()), "localisation", [], "any", false, false, false, 124)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 124, $this->source); })()), "localisation", [], "any", false, false, false, 124), "html", null, true)) : ("Non précisée"));
        yield "</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Financing Table -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Détails des Financements</h3>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle table-row-dashed fs-6 gy-3\">
                                <thead>
                                    <tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
                                        <th>Convention</th>
                                        <th>Bailleur</th>
                                        <th class=\"text-end\">Engagé (M FCFA)</th>
                                        <th class=\"text-end\">Décaissé (M FCFA)</th>
                                        <th class=\"text-end\">Taux</th>
                                    </tr>
                                </thead>
                                <tbody class=\"fw-semibold text-gray-600\">
                                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 148, $this->source); })()), "financements", [], "any", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["financing"]) {
            // line 149
            yield "                                    <tr>
                                        <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "numeroConvention", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                                        <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "bailleur", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                                        <td class=\"text-end\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "montantEngage", [], "any", false, false, false, 152) / 1000000), 1, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "montantDecaisse", [], "any", false, false, false, 153) / 1000000), 1, ",", " "), "html", null, true);
            yield "</td>
                                        <td class=\"text-end\">
                                            <span class=\"badge badge-light-";
            // line 155
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "tauxDecaissement", [], "any", false, false, false, 155) >= 70)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "tauxDecaissement", [], "any", false, false, false, 155) >= 40)) ? ("warning") : ("danger"))));
            yield "\">
                                                ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "tauxDecaissement", [], "any", false, false, false, 156), "html", null, true);
            yield "%
                                            </span>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['financing'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class=\"col-xl-4\">
                <!-- Progress Chart -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Progression Mensuelle</h3>
                    </div>
                    <div class=\"card-body\">
                        <div style=\"height: 250px;\">
                            <canvas id=\"progressChart\"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Audits Section -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Audits & Contrôles</h3>
                    </div>
                    <div class=\"card-body pt-0\">
                        ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 188, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
            // line 189
            yield "                        <div class=\"d-flex flex-stack mb-5 border-dashed p-3 rounded\">
                            <div class=\"d-flex flex-column\">
                                <span class=\"text-dark fw-bold fs-6\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "type", [], "any", false, false, false, 191), "html", null, true);
            yield "</span>
                                <span class=\"text-muted fs-7\">";
            // line 192
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 192), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</span>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 204
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        const progressData = ";
        // line 211
        yield json_encode((isset($context["monthlyProgress"]) || array_key_exists("monthlyProgress", $context) ? $context["monthlyProgress"] : (function () { throw new RuntimeError('Variable "monthlyProgress" does not exist.', 211, $this->source); })()));
        yield ";
        if (document.getElementById('progressChart')) {
            new Chart(document.getElementById('progressChart'), {
                type: 'line',
                data: {
                    labels: Object.keys(progressData),
                    datasets: [{
                        label: 'Décaissements (FCFA)',
                        data: Object.values(progressData),
                        borderColor: '#004d99',
                        backgroundColor: 'rgba(0, 77, 153, 0.1)',
                        tension: 0.4,
                        fill: true
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
        return "top_management/project_details.html.twig";
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
        return array (  413 => 211,  405 => 205,  395 => 204,  381 => 196,  371 => 192,  367 => 191,  363 => 189,  359 => 188,  330 => 161,  319 => 156,  315 => 155,  310 => 153,  306 => 152,  302 => 151,  298 => 150,  295 => 149,  291 => 148,  264 => 124,  253 => 118,  244 => 112,  235 => 106,  216 => 89,  211 => 86,  206 => 84,  199 => 83,  197 => 82,  185 => 73,  176 => 67,  165 => 59,  157 => 54,  144 => 44,  124 => 29,  118 => 26,  111 => 22,  99 => 13,  93 => 10,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ project.name }} - Détail Projet - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">{{ project.name }}</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_top_management_dashboard') }}\" class=\"text-muted text-hover-primary\">Management</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Projets</li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-dark\">{{ project.code }}</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_top_management_dashboard') }}\" class=\"btn btn-sm btn-secondary\">
                <i data-lucide=\"arrow-left\" class=\"me-1\" style=\"width: 14px; height: 14px;\"></i> Retour
            </a>
            <span class=\"badge badge-light-{{ metrics.riskLevel|lower == 'élevé' ? 'danger' : (metrics.riskLevel|lower == 'moyen' ? 'warning' : 'success') }} fs-7 fw-bold\">Risque: {{ metrics.riskLevel }}</span>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <!-- Metrics Row -->
        <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ metrics.totalBudget|number_format(0, ',', ' ') }}</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Budget Total (FCFA)</span>
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
                            <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">{{ metrics.physicalProgress }}%</span>
                            <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Progression Physique</span>
                        </div>
                    </div>
                    <div class=\"card-body pt-2\">
                        <div class=\"h-8px w-100 bg-light-primary rounded\">
                            <div class=\"bg-primary rounded h-8px\" role=\"progressbar\" style=\"width: {{ metrics.physicalProgress }}%\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card card-flush h-md-100\">
                    <div class=\"card-header pt-5\">
                        <div class=\"card-title d-flex flex-column\">
                            {% if metrics.daysRemaining is not null %}
                                <span class=\"fs-2hx fw-bold text-{{ metrics.daysRemaining >= 0 ? 'dark' : 'danger' }} me-2 lh-1 ls-n2\">{{ metrics.daysRemaining|abs }}</span>
                                <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">{{ metrics.daysRemaining >= 0 ? 'jours restants' : 'jours de retard' }}</span>
                            {% else %}
                                <span class=\"fs-2hx fw-bold text-dark me-2 lh-1 ls-n2\">-</span>
                                <span class=\"text-gray-400 pt-1 fw-semibold fs-6\">Délai non défini</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-5 g-xl-10\">
            <div class=\"col-xl-8\">
                <!-- Info Section -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Informations Générales</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Institution Responsable</label>
                            <div class=\"col-lg-8\">
                                <span class=\"fw-bold fs-6 text-gray-800\">{{ project.institution ? project.institution.name : 'Non définie' }}</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Secteur</label>
                            <div class=\"col-lg-8\">
                                <span class=\"badge badge-light-primary fs-7 fw-bold\">{{ project.sector }}</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Période</label>
                            <div class=\"col-lg-8\">
                                <span class=\"fw-bold fs-6 text-gray-800\">Du {{ project.dateDebut ? project.dateDebut|date('d/m/Y') : 'N/A' }} au {{ project.dateFin ? project.dateFin|date('d/m/Y') : 'N/A' }}</span>
                            </div>
                        </div>
                        <div class=\"row mb-7\">
                            <label class=\"col-lg-4 fw-semibold text-muted\">Localisation</label>
                            <div class=\"col-lg-8\">
                                <span class=\"fw-bold fs-6 text-gray-800\">{{ project.localisation ?? 'Non précisée' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Financing Table -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Détails des Financements</h3>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle table-row-dashed fs-6 gy-3\">
                                <thead>
                                    <tr class=\"text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0\">
                                        <th>Convention</th>
                                        <th>Bailleur</th>
                                        <th class=\"text-end\">Engagé (M FCFA)</th>
                                        <th class=\"text-end\">Décaissé (M FCFA)</th>
                                        <th class=\"text-end\">Taux</th>
                                    </tr>
                                </thead>
                                <tbody class=\"fw-semibold text-gray-600\">
                                    {% for financing in financingDetails.financements %}
                                    <tr>
                                        <td>{{ financing.numeroConvention }}</td>
                                        <td>{{ financing.bailleur }}</td>
                                        <td class=\"text-end\">{{ (financing.montantEngage / 1000000)|number_format(1, ',', ' ') }}</td>
                                        <td class=\"text-end\">{{ (financing.montantDecaisse / 1000000)|number_format(1, ',', ' ') }}</td>
                                        <td class=\"text-end\">
                                            <span class=\"badge badge-light-{{ financing.tauxDecaissement >= 70 ? 'success' : (financing.tauxDecaissement >= 40 ? 'warning' : 'danger') }}\">
                                                {{ financing.tauxDecaissement }}%
                                            </span>
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class=\"col-xl-4\">
                <!-- Progress Chart -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Progression Mensuelle</h3>
                    </div>
                    <div class=\"card-body\">
                        <div style=\"height: 250px;\">
                            <canvas id=\"progressChart\"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Audits Section -->
                <div class=\"card card-flush mb-5 mb-xl-10\">
                    <div class=\"card-header pt-5\">
                        <h3 class=\"card-title fw-bold text-dark\">Audits & Contrôles</h3>
                    </div>
                    <div class=\"card-body pt-0\">
                        {% for audit in audits|slice(0, 5) %}
                        <div class=\"d-flex flex-stack mb-5 border-dashed p-3 rounded\">
                            <div class=\"d-flex flex-column\">
                                <span class=\"text-dark fw-bold fs-6\">{{ audit.type }}</span>
                                <span class=\"text-muted fs-7\">{{ audit.dateAudit ? audit.dateAudit|date('d/m/Y') : 'N/A' }}</span>
                            </div>
                        </div>
                        {% endfor %}
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

        const progressData = {{ monthlyProgress|json_encode|raw }};
        if (document.getElementById('progressChart')) {
            new Chart(document.getElementById('progressChart'), {
                type: 'line',
                data: {
                    labels: Object.keys(progressData),
                    datasets: [{
                        label: 'Décaissements (FCFA)',
                        data: Object.values(progressData),
                        borderColor: '#004d99',
                        backgroundColor: 'rgba(0, 77, 153, 0.1)',
                        tension: 0.4,
                        fill: true
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
", "top_management/project_details.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\top_management\\project_details.html.twig");
    }
}
