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

/* top_management/dashboard.html.twig */
class __TwigTemplate_e377d2833c9d8c45722fa32ec64fe47c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "management.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "top_management/dashboard.html.twig"));

        $this->parent = $this->load("management.html.twig", 1);
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
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Dashboard Armoirie CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard-armoirie.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        yield "
    <!-- Page Title -->
    <div class=\"page-title\">
        <h1>Dashboard Top Management</h1>
        <p>Vue stratégique et indicateurs de performance</p>
        <div class=\"last-update\">
            <i data-lucide=\"clock\"></i>
            Dernière mise à jour : ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
        </div>
    </div>

    
   <div class=\"header-filters\">
            <form method=\"get\" action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_dashboard");
        yield "\" class=\"filter-form\">
                <div class=\"filter-group\">
                    <select name=\"year\" id=\"filterYear\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes les années</option>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 35
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 35, $this->source); })()), "year", [], "any", false, false, false, 35) == $context["year"])) {
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
        // line 37
        yield "                    </select>
                    <i data-lucide=\"calendar\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select name=\"institution\" id=\"filterInstitution\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes les institutions</option>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["institutions"]) || array_key_exists("institutions", $context) ? $context["institutions"] : (function () { throw new RuntimeError('Variable "institutions" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["institution"]) {
            // line 45
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "institution", [], "any", false, false, false, 45) == CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 45))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 46), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['institution'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                    </select>
                    <i data-lucide=\"building\" class=\"filter-icon\"></i>
                </div>
            </form>
        </div>

    <!-- KPI CARDS -->
    <section class=\"kpi-section\">
        <div class=\"kpi-grid\">
            <!-- KPI 1: Total Projets -->
            <div class=\"kpi-card primary\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"folder-kanban\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        <span>+12%</span>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\" data-count=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 70, $this->source); })()), "totalProjects", [], "any", false, false, false, 70), "html", null, true);
        yield "\">0</h3>
                    <p class=\"kpi-label\">Total Projets</p>
                    <p class=\"kpi-sublabel\">
                        🟢 ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 73, $this->source); })()), "activeProjects", [], "any", false, false, false, 73), "html", null, true);
        yield " en cours • ✅ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 73, $this->source); })()), "completedProjects", [], "any", false, false, false, 73), "html", null, true);
        yield " terminés
                    </p>
                </div>
            </div>

            <!-- KPI 2: Budget Total -->
            <div class=\"kpi-card gold\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"banknote\"></i>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 86, $this->source); })()), "totalBudget", [], "any", false, false, false, 86) / 1000000000), 1, ".", " "), "html", null, true);
        yield "</h3>
                    <p class=\"kpi-label\">Budget Total (Mds FCFA)</p>
                    <p class=\"kpi-sublabel\">
                        💰 ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 89, $this->source); })()), "totalBudget", [], "any", false, false, false, 89), 0, ",", " "), "html", null, true);
        yield " FCFA
                    </p>
                </div>
            </div>

            <!-- KPI 3: Taux de Décaissement -->
            <div class=\"kpi-card success\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"trending-up\"></i>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\" data-count=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 102, $this->source); })()), "disbursementRate", [], "any", false, false, false, 102), "html", null, true);
        yield "\">0</h3>
                    <p class=\"kpi-label\">Taux de Décaissement (%)</p>
                    <p class=\"kpi-sublabel\">
                        ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 105, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 105) / 1000000000), 1, ".", " "), "html", null, true);
        yield " Mds décaissés
                    </p>
                </div>
            </div>

            <!-- KPI 4: Réalisation Physique -->
            <div class=\"kpi-card warning\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"activity\"></i>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\" data-count=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 118, $this->source); })()), "avgPhysicalProgress", [], "any", false, false, false, 118), "html", null, true);
        yield "\">0</h3>
                    <p class=\"kpi-label\">Réalisation Physique Moyenne (%)</p>
                    <p class=\"kpi-sublabel\">
                        Progression globale des projets
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MÉTRIQUES MANAGEMENT -->
    <section class=\"management-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"briefcase\"></i>
                Métriques Top Management
            </h2>
        </div>

        <div class=\"management-grid\">
            <div class=\"metric-card metric-gold\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"wallet\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Valeur du Portefeuille</span>
                    <span class=\"metric-value\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 144, $this->source); })()), "portfolioValue", [], "any", false, false, false, 144) / 1000000000), 1, ".", " "), "html", null, true);
        yield " Mds</span>
                    <span class=\"metric-sublabel\">FCFA</span>
                </div>
            </div>

            <div class=\"metric-card metric-success\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"target\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Efficacité du Financement</span>
                    <span class=\"metric-value\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 155, $this->source); })()), "fundingEfficiency", [], "any", false, false, false, 155), "html", null, true);
        yield "%</span>
                    <span class=\"metric-sublabel\">Fonds activés / Budget</span>
                </div>
            </div>

            <div class=\"metric-card metric-primary\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"clock\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Respect des Délais</span>
                    <span class=\"metric-value\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 166, $this->source); })()), "onTimeRate", [], "any", false, false, false, 166), "html", null, true);
        yield "%</span>
                    <span class=\"metric-sublabel\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 167, $this->source); })()), "delayRate", [], "any", false, false, false, 167), "html", null, true);
        yield "% en retard</span>
                </div>
            </div>

            <div class=\"metric-card metric-warning\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"building-2\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Projets par Institution</span>
                    <span class=\"metric-value\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 177, $this->source); })()), "projectsPerInstitution", [], "any", false, false, false, 177), "html", null, true);
        yield "</span>
                    <span class=\"metric-sublabel\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 178, $this->source); })()), "activeInstitutions", [], "any", false, false, false, 178), "html", null, true);
        yield " institutions</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ANALYSE DES RISQUES -->
    <section class=\"risk-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"alert-triangle\"></i>
                Analyse des Risques Globaux
            </h2>
        </div>

        <div class=\"risk-grid\">
            <div class=\"risk-card risk-low\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 199, $this->source); })()), "lowRisk", [], "any", false, false, false, 199), "html", null, true);
        yield "</span>
                    <span class=\"risk-label\">Risque Faible</span>
                    <span class=\"risk-percent\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 201, $this->source); })()), "lowRiskPercent", [], "any", false, false, false, 201), "html", null, true);
        yield "%</span>
                </div>
            </div>

            <div class=\"risk-card risk-medium\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"alert-circle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 210, $this->source); })()), "mediumRisk", [], "any", false, false, false, 210), "html", null, true);
        yield "</span>
                    <span class=\"risk-label\">Risque Moyen</span>
                    <span class=\"risk-percent\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 212, $this->source); })()), "mediumRiskPercent", [], "any", false, false, false, 212), "html", null, true);
        yield "%</span>
                </div>
            </div>

            <div class=\"risk-card risk-high\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"alert-triangle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 221, $this->source); })()), "highRisk", [], "any", false, false, false, 221), "html", null, true);
        yield "</span>
                    <span class=\"risk-label\">Risque Élevé</span>
                    <span class=\"risk-percent\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 223, $this->source); })()), "highRiskPercent", [], "any", false, false, false, 223), "html", null, true);
        yield "%</span>
                </div>
            </div>
        </div>

        ";
        // line 228
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 228, $this->source); })()), "criticalProjectsCount", [], "any", false, false, false, 228) > 0)) {
            // line 229
            yield "        <div class=\"risk-alert\">
            <i data-lucide=\"alert-triangle\"></i>
            <strong>Attention :</strong> ";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 231, $this->source); })()), "criticalProjectsCount", [], "any", false, false, false, 231), "html", null, true);
            yield " projet(s) critique(s) nécessitent une action immédiate
        </div>
        ";
        }
        // line 234
        yield "    </section>

    <!-- TENDANCES -->
    <section class=\"trends-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"trending-up\"></i>
                Tendances et Croissance
            </h2>
        </div>

        <div class=\"trends-grid\">
            <div class=\"trend-card\">
                <div class=\"trend-header\">
                    <h4>Croissance des Projets</h4>
                    <span class=\"trend-badge ";
        // line 249
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 249, $this->source); })()), "projectGrowth", [], "any", false, false, false, 249) >= 0)) ? ("trend-positive") : ("trend-negative"));
        yield "\">
                        ";
        // line 250
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 250, $this->source); })()), "projectGrowth", [], "any", false, false, false, 250) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 250, $this->source); })()), "projectGrowth", [], "any", false, false, false, 250), "html", null, true);
        yield "%
                    </span>
                </div>
                <div class=\"trend-body\">
                    <div class=\"trend-comparison\">
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 257, $this->source); })()), "currentYearProjects", [], "any", false, false, false, 257), "html", null, true);
        yield " projets</span>
                        </div>
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - 1), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 261, $this->source); })()), "lastYearProjects", [], "any", false, false, false, 261), "html", null, true);
        yield " projets</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"trend-card\">
                <div class=\"trend-header\">
                    <h4>Croissance du Budget</h4>
                    <span class=\"trend-badge ";
        // line 270
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 270, $this->source); })()), "budgetGrowth", [], "any", false, false, false, 270) >= 0)) ? ("trend-positive") : ("trend-negative"));
        yield "\">
                        ";
        // line 271
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 271, $this->source); })()), "budgetGrowth", [], "any", false, false, false, 271) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 271, $this->source); })()), "budgetGrowth", [], "any", false, false, false, 271), "html", null, true);
        yield "%
                    </span>
                </div>
                <div class=\"trend-body\">
                    <div class=\"trend-comparison\">
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 278, $this->source); })()), "currentYearBudget", [], "any", false, false, false, 278) / 1000000000), 1, ".", " "), "html", null, true);
        yield " Mds FCFA</span>
                        </div>
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - 1), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 282, $this->source); })()), "lastYearBudget", [], "any", false, false, false, 282) / 1000000000), 1, ".", " "), "html", null, true);
        yield " Mds FCFA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GRAPHIQUES -->
    <section class=\"charts-section\">
        <div class=\"charts-grid\">
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Répartition par Secteur</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"sectorChart\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Sources de Financement</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"financingChart\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Statuts des Projets</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"statusChart\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Évolution Mensuelle</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"evolutionChart\"></canvas>
                </div>
            </div>
        </div>
    </section>

    <!-- TOP PROJETS -->
    <section class=\"projects-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"star\"></i>
                Top Projets par Budget
            </h2>
        </div>

        <div class=\"table-container\">
            <table class=\"projects-table\">
                <thead>
                    <tr>
                        <th>Projet</th>
                        <th>Secteur</th>
                        <th>Budget</th>
                        <th>Progression</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topProjects"]) || array_key_exists("topProjects", $context) ? $context["topProjects"] : (function () { throw new RuntimeError('Variable "topProjects" does not exist.', 353, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 354
            yield "                    <tr>
                        <td>
                            <div class=\"project-name\">
                                ";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 357), "html", null, true);
            yield "
                                <span class=\"project-code\">";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "code", [], "any", false, false, false, 358), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                        <td>
                            <span class=\"sector-badge\">";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sector", [], "any", false, false, false, 362), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"budget-cell\">
                            <span class=\"budget-amount\">";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 365) / 1000000), 1, ".", " "), "html", null, true);
            yield " M</span>
                            <span class=\"budget-currency\">FCFA</span>
                        </td>
                        <td class=\"progress-cell\">
                            <div class=\"progress-bar\">
                                <div class=\"progress-fill\" style=\"width: ";
            // line 370
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", true, true, false, 370) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 370)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 370), "html", null, true)) : (0));
            yield "%; background: ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 370) >= 70)) {
                yield "var(--success-500)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 370) >= 40)) {
                yield "var(--gold-500)";
            } else {
                yield "var(--red-500)";
            }
            yield ";\"></div>
                            </div>
                            <span class=\"progress-text\">";
            // line 372
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", true, true, false, 372) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 372)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 372), "html", null, true)) : (0));
            yield "% complété</span>
                        </td>
                        <td>
                            <span class=\"status-badge status-";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 375), "html", null, true);
            yield "\">
                                ";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 376), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                            <a href=\"";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 380)]), "html", null, true);
            yield "\" class=\"action-btn\">
                                <i data-lucide=\"eye\"></i>
                                Détails
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        yield "                </tbody>
            </table>
        </div>
    </section>

    <!-- PROJETS CRITIQUES -->
    <section class=\"critical-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"alert-circle\"></i>
                Projets Critiques
            </h2>
        </div>

        <div class=\"critical-grid\">
            ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["criticalProjects"]) || array_key_exists("criticalProjects", $context) ? $context["criticalProjects"] : (function () { throw new RuntimeError('Variable "criticalProjects" does not exist.', 402, $this->source); })()), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 403
            yield "            <div class=\"critical-card\">
                <div class=\"critical-header\">
                    <span class=\"risk-badge risk-high\">Risque Élevé</span>
                </div>
                <h4 class=\"critical-title\">";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 407), "html", null, true);
            yield "</h4>
                <p class=\"critical-sector\">";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sector", [], "any", false, false, false, 408), "html", null, true);
            yield "</p>
                <div class=\"critical-stats\">
                    <div class=\"critical-stat\">
                        <span class=\"stat-label\">Progression</span>
                        <span class=\"stat-value\">";
            // line 412
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", true, true, false, 412) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 412)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 412), "html", null, true)) : (0));
            yield "%</span>
                    </div>
                    <div class=\"critical-stat\">
                        <span class=\"stat-label\">Budget</span>
                        <span class=\"stat-value\">";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 416) / 1000000), 0, ".", " "), "html", null, true);
            yield "M</span>
                    </div>
                </div>
                <a href=\"";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 419)]), "html", null, true);
            yield "\" class=\"critical-link\">
                    Voir les détails <i data-lucide=\"arrow-right\"></i>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        yield "        </div>
    </section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 430
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 431
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
    
    <script>
        lucide.createIcons();

        // Counter animation
        document.querySelectorAll('.kpi-value[data-count]').forEach(element => {
            const target = parseFloat(element.getAttribute('data-count'));
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = Math.round(target);
                    clearInterval(timer);
                } else {
                    element.textContent = Math.round(current);
                }
            }, 20);
        });

        // Charts
        const chartColors = {
            primary: '#004d99',
            gold: '#daa520',
            success: '#10b981',
            warning: '#f59e0b',
            danger: '#ef4444',
            red: '#c41e3a',
        };

        // Secteur Chart
        new Chart(document.getElementById('sectorChart').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: [";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorStats"]) || array_key_exists("sectorStats", $context) ? $context["sectorStats"] : (function () { throw new RuntimeError('Variable "sectorStats" does not exist.', 468, $this->source); })()));
        foreach ($context['_seq'] as $context["sector"] => $context["data"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sector"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sector'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                datasets: [{
                    data: [";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorStats"]) || array_key_exists("sectorStats", $context) ? $context["sectorStats"] : (function () { throw new RuntimeError('Variable "sectorStats" does not exist.', 470, $this->source); })()));
        foreach ($context['_seq'] as $context["sector"] => $context["data"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 470), "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sector'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    backgroundColor: Object.values(chartColors)
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom', labels: { font: { family: \"'DM Sans', sans-serif\", size: 11 }, padding: 15 } }
                }
            }
        });

        // Financing Chart
        new Chart(document.getElementById('financingChart').getContext('2d'), {
            type: 'pie',
            data: {
                labels: [";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financingSourceStats"]) || array_key_exists("financingSourceStats", $context) ? $context["financingSourceStats"] : (function () { throw new RuntimeError('Variable "financingSourceStats" does not exist.', 487, $this->source); })()));
        foreach ($context['_seq'] as $context["source"] => $context["data"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["source"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['source'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                datasets: [{
                    data: [";
        // line 489
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financingSourceStats"]) || array_key_exists("financingSourceStats", $context) ? $context["financingSourceStats"] : (function () { throw new RuntimeError('Variable "financingSourceStats" does not exist.', 489, $this->source); })()));
        foreach ($context['_seq'] as $context["source"] => $context["data"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 489), "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['source'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    backgroundColor: Object.values(chartColors)
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom', labels: { font: { family: \"'DM Sans', sans-serif\", size: 11 }, padding: 15 } }
                }
            }
        });

        // Status Chart
        new Chart(document.getElementById('statusChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [";
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusStats"]) || array_key_exists("statusStats", $context) ? $context["statusStats"] : (function () { throw new RuntimeError('Variable "statusStats" does not exist.', 506, $this->source); })()));
        foreach ($context['_seq'] as $context["status"] => $context["count"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                datasets: [{
                    label: 'Projets',
                    data: [";
        // line 509
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusStats"]) || array_key_exists("statusStats", $context) ? $context["statusStats"] : (function () { throw new RuntimeError('Variable "statusStats" does not exist.', 509, $this->source); })()));
        foreach ($context['_seq'] as $context["status"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    backgroundColor: chartColors.primary
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // Evolution Chart
        new Chart(document.getElementById('evolutionChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: [";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyEvolution"]) || array_key_exists("monthlyEvolution", $context) ? $context["monthlyEvolution"] : (function () { throw new RuntimeError('Variable "monthlyEvolution" does not exist.', 525, $this->source); })()));
        foreach ($context['_seq'] as $context["month"] => $context["data"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["month"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['month'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                datasets: [{
                    label: 'Projets',
                    data: [";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyEvolution"]) || array_key_exists("monthlyEvolution", $context) ? $context["monthlyEvolution"] : (function () { throw new RuntimeError('Variable "monthlyEvolution" does not exist.', 528, $this->source); })()));
        foreach ($context['_seq'] as $context["month"] => $context["data"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "projects", [], "any", false, false, false, 528), "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['month'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    borderColor: chartColors.primary,
                    backgroundColor: 'rgba(0, 77, 153, 0.1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });
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
        return "top_management/dashboard.html.twig";
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
        return array (  947 => 528,  932 => 525,  905 => 509,  890 => 506,  862 => 489,  848 => 487,  820 => 470,  806 => 468,  765 => 431,  755 => 430,  743 => 424,  732 => 419,  726 => 416,  719 => 412,  712 => 408,  708 => 407,  702 => 403,  698 => 402,  681 => 387,  668 => 380,  661 => 376,  657 => 375,  651 => 372,  638 => 370,  630 => 365,  624 => 362,  617 => 358,  613 => 357,  608 => 354,  604 => 353,  530 => 282,  526 => 281,  520 => 278,  516 => 277,  506 => 271,  502 => 270,  490 => 261,  486 => 260,  480 => 257,  476 => 256,  466 => 250,  462 => 249,  445 => 234,  439 => 231,  435 => 229,  433 => 228,  425 => 223,  420 => 221,  408 => 212,  403 => 210,  391 => 201,  386 => 199,  362 => 178,  358 => 177,  345 => 167,  341 => 166,  327 => 155,  313 => 144,  284 => 118,  268 => 105,  262 => 102,  246 => 89,  240 => 86,  222 => 73,  216 => 70,  193 => 49,  184 => 46,  175 => 45,  171 => 44,  162 => 37,  147 => 35,  143 => 34,  136 => 30,  127 => 24,  118 => 17,  108 => 16,  98 => 13,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management.html.twig' %}

{% block title %}Dashboard Top Management - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Dashboard Armoirie CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/dashboard-armoirie.css') }}\">
{% endblock %}

{% block body %}

    <!-- Page Title -->
    <div class=\"page-title\">
        <h1>Dashboard Top Management</h1>
        <p>Vue stratégique et indicateurs de performance</p>
        <div class=\"last-update\">
            <i data-lucide=\"clock\"></i>
            Dernière mise à jour : {{ \"now\"|date(\"d/m/Y à H:i\") }}
        </div>
    </div>

    
   <div class=\"header-filters\">
            <form method=\"get\" action=\"{{ path('app_top_management_dashboard') }}\" class=\"filter-form\">
                <div class=\"filter-group\">
                    <select name=\"year\" id=\"filterYear\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes les années</option>
                        {% for year in years %}
                            <option value=\"{{ year }}\" {% if filters.year == year %}selected{% endif %}>{{ year }}</option>
                        {% endfor %}
                    </select>
                    <i data-lucide=\"calendar\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select name=\"institution\" id=\"filterInstitution\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes les institutions</option>
                        {% for institution in institutions %}
                            <option value=\"{{ institution.id }}\" {% if filters.institution == institution.id %}selected{% endif %}>
                                {{ institution.name }}
                            </option>
                        {% endfor %}
                    </select>
                    <i data-lucide=\"building\" class=\"filter-icon\"></i>
                </div>
            </form>
        </div>

    <!-- KPI CARDS -->
    <section class=\"kpi-section\">
        <div class=\"kpi-grid\">
            <!-- KPI 1: Total Projets -->
            <div class=\"kpi-card primary\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"folder-kanban\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        <span>+12%</span>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\" data-count=\"{{ kpis.totalProjects }}\">0</h3>
                    <p class=\"kpi-label\">Total Projets</p>
                    <p class=\"kpi-sublabel\">
                        🟢 {{ kpis.activeProjects }} en cours • ✅ {{ kpis.completedProjects }} terminés
                    </p>
                </div>
            </div>

            <!-- KPI 2: Budget Total -->
            <div class=\"kpi-card gold\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"banknote\"></i>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\">{{ (kpis.totalBudget / 1000000000)|number_format(1, '.', ' ') }}</h3>
                    <p class=\"kpi-label\">Budget Total (Mds FCFA)</p>
                    <p class=\"kpi-sublabel\">
                        💰 {{ (kpis.totalBudget)|number_format(0, ',', ' ') }} FCFA
                    </p>
                </div>
            </div>

            <!-- KPI 3: Taux de Décaissement -->
            <div class=\"kpi-card success\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"trending-up\"></i>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\" data-count=\"{{ kpis.disbursementRate }}\">0</h3>
                    <p class=\"kpi-label\">Taux de Décaissement (%)</p>
                    <p class=\"kpi-sublabel\">
                        {{ (kpis.totalDisbursed / 1000000000)|number_format(1, '.', ' ') }} Mds décaissés
                    </p>
                </div>
            </div>

            <!-- KPI 4: Réalisation Physique -->
            <div class=\"kpi-card warning\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"activity\"></i>
                    </div>
                </div>
                <div class=\"kpi-body\">
                    <h3 class=\"kpi-value\" data-count=\"{{ kpis.avgPhysicalProgress }}\">0</h3>
                    <p class=\"kpi-label\">Réalisation Physique Moyenne (%)</p>
                    <p class=\"kpi-sublabel\">
                        Progression globale des projets
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MÉTRIQUES MANAGEMENT -->
    <section class=\"management-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"briefcase\"></i>
                Métriques Top Management
            </h2>
        </div>

        <div class=\"management-grid\">
            <div class=\"metric-card metric-gold\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"wallet\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Valeur du Portefeuille</span>
                    <span class=\"metric-value\">{{ (managementMetrics.portfolioValue / 1000000000)|number_format(1, '.', ' ') }} Mds</span>
                    <span class=\"metric-sublabel\">FCFA</span>
                </div>
            </div>

            <div class=\"metric-card metric-success\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"target\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Efficacité du Financement</span>
                    <span class=\"metric-value\">{{ managementMetrics.fundingEfficiency }}%</span>
                    <span class=\"metric-sublabel\">Fonds activés / Budget</span>
                </div>
            </div>

            <div class=\"metric-card metric-primary\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"clock\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Respect des Délais</span>
                    <span class=\"metric-value\">{{ managementMetrics.onTimeRate }}%</span>
                    <span class=\"metric-sublabel\">{{ managementMetrics.delayRate }}% en retard</span>
                </div>
            </div>

            <div class=\"metric-card metric-warning\">
                <div class=\"metric-icon\">
                    <i data-lucide=\"building-2\"></i>
                </div>
                <div class=\"metric-content\">
                    <span class=\"metric-label\">Projets par Institution</span>
                    <span class=\"metric-value\">{{ managementMetrics.projectsPerInstitution }}</span>
                    <span class=\"metric-sublabel\">{{ managementMetrics.activeInstitutions }} institutions</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ANALYSE DES RISQUES -->
    <section class=\"risk-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"alert-triangle\"></i>
                Analyse des Risques Globaux
            </h2>
        </div>

        <div class=\"risk-grid\">
            <div class=\"risk-card risk-low\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">{{ globalRiskAnalysis.lowRisk }}</span>
                    <span class=\"risk-label\">Risque Faible</span>
                    <span class=\"risk-percent\">{{ globalRiskAnalysis.lowRiskPercent }}%</span>
                </div>
            </div>

            <div class=\"risk-card risk-medium\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"alert-circle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">{{ globalRiskAnalysis.mediumRisk }}</span>
                    <span class=\"risk-label\">Risque Moyen</span>
                    <span class=\"risk-percent\">{{ globalRiskAnalysis.mediumRiskPercent }}%</span>
                </div>
            </div>

            <div class=\"risk-card risk-high\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"alert-triangle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">{{ globalRiskAnalysis.highRisk }}</span>
                    <span class=\"risk-label\">Risque Élevé</span>
                    <span class=\"risk-percent\">{{ globalRiskAnalysis.highRiskPercent }}%</span>
                </div>
            </div>
        </div>

        {% if globalRiskAnalysis.criticalProjectsCount > 0 %}
        <div class=\"risk-alert\">
            <i data-lucide=\"alert-triangle\"></i>
            <strong>Attention :</strong> {{ globalRiskAnalysis.criticalProjectsCount }} projet(s) critique(s) nécessitent une action immédiate
        </div>
        {% endif %}
    </section>

    <!-- TENDANCES -->
    <section class=\"trends-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"trending-up\"></i>
                Tendances et Croissance
            </h2>
        </div>

        <div class=\"trends-grid\">
            <div class=\"trend-card\">
                <div class=\"trend-header\">
                    <h4>Croissance des Projets</h4>
                    <span class=\"trend-badge {{ trends.projectGrowth >= 0 ? 'trend-positive' : 'trend-negative' }}\">
                        {{ trends.projectGrowth >= 0 ? '+' : '' }}{{ trends.projectGrowth }}%
                    </span>
                </div>
                <div class=\"trend-body\">
                    <div class=\"trend-comparison\">
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">{{ \"now\"|date(\"Y\") }}</span>
                            <span class=\"trend-value\">{{ trends.currentYearProjects }} projets</span>
                        </div>
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">{{ (\"now\"|date(\"Y\")) - 1 }}</span>
                            <span class=\"trend-value\">{{ trends.lastYearProjects }} projets</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"trend-card\">
                <div class=\"trend-header\">
                    <h4>Croissance du Budget</h4>
                    <span class=\"trend-badge {{ trends.budgetGrowth >= 0 ? 'trend-positive' : 'trend-negative' }}\">
                        {{ trends.budgetGrowth >= 0 ? '+' : '' }}{{ trends.budgetGrowth }}%
                    </span>
                </div>
                <div class=\"trend-body\">
                    <div class=\"trend-comparison\">
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">{{ \"now\"|date(\"Y\") }}</span>
                            <span class=\"trend-value\">{{ (trends.currentYearBudget / 1000000000)|number_format(1, '.', ' ') }} Mds FCFA</span>
                        </div>
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">{{ (\"now\"|date(\"Y\")) - 1 }}</span>
                            <span class=\"trend-value\">{{ (trends.lastYearBudget / 1000000000)|number_format(1, '.', ' ') }} Mds FCFA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GRAPHIQUES -->
    <section class=\"charts-section\">
        <div class=\"charts-grid\">
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Répartition par Secteur</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"sectorChart\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Sources de Financement</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"financingChart\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Statuts des Projets</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"statusChart\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">Évolution Mensuelle</h3>
                </div>
                <div class=\"chart-body\">
                    <canvas id=\"evolutionChart\"></canvas>
                </div>
            </div>
        </div>
    </section>

    <!-- TOP PROJETS -->
    <section class=\"projects-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"star\"></i>
                Top Projets par Budget
            </h2>
        </div>

        <div class=\"table-container\">
            <table class=\"projects-table\">
                <thead>
                    <tr>
                        <th>Projet</th>
                        <th>Secteur</th>
                        <th>Budget</th>
                        <th>Progression</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for project in topProjects %}
                    <tr>
                        <td>
                            <div class=\"project-name\">
                                {{ project.name }}
                                <span class=\"project-code\">{{ project.code }}</span>
                            </div>
                        </td>
                        <td>
                            <span class=\"sector-badge\">{{ project.sector }}</span>
                        </td>
                        <td class=\"budget-cell\">
                            <span class=\"budget-amount\">{{ (project.budgetTotal / 1000000)|number_format(1, '.', ' ') }} M</span>
                            <span class=\"budget-currency\">FCFA</span>
                        </td>
                        <td class=\"progress-cell\">
                            <div class=\"progress-bar\">
                                <div class=\"progress-fill\" style=\"width: {{ project.progress ?? 0 }}%; background: {% if project.progress >= 70 %}var(--success-500){% elseif project.progress >= 40 %}var(--gold-500){% else %}var(--red-500){% endif %};\"></div>
                            </div>
                            <span class=\"progress-text\">{{ project.progress ?? 0 }}% complété</span>
                        </td>
                        <td>
                            <span class=\"status-badge status-{{ project.status }}\">
                                {{ project.status }}
                            </span>
                        </td>
                        <td>
                            <a href=\"{{ path('app_top_management_project_detail', {id: project.id}) }}\" class=\"action-btn\">
                                <i data-lucide=\"eye\"></i>
                                Détails
                            </a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </section>

    <!-- PROJETS CRITIQUES -->
    <section class=\"critical-section\">
        <div class=\"section-header\">
            <h2 class=\"section-title\">
                <i data-lucide=\"alert-circle\"></i>
                Projets Critiques
            </h2>
        </div>

        <div class=\"critical-grid\">
            {% for project in criticalProjects|slice(0, 6) %}
            <div class=\"critical-card\">
                <div class=\"critical-header\">
                    <span class=\"risk-badge risk-high\">Risque Élevé</span>
                </div>
                <h4 class=\"critical-title\">{{ project.name }}</h4>
                <p class=\"critical-sector\">{{ project.sector }}</p>
                <div class=\"critical-stats\">
                    <div class=\"critical-stat\">
                        <span class=\"stat-label\">Progression</span>
                        <span class=\"stat-value\">{{ project.progress ?? 0 }}%</span>
                    </div>
                    <div class=\"critical-stat\">
                        <span class=\"stat-label\">Budget</span>
                        <span class=\"stat-value\">{{ (project.budgetTotal / 1000000)|number_format(0, '.', ' ') }}M</span>
                    </div>
                </div>
                <a href=\"{{ path('app_top_management_project_detail', {id: project.id}) }}\" class=\"critical-link\">
                    Voir les détails <i data-lucide=\"arrow-right\"></i>
                </a>
            </div>
            {% endfor %}
        </div>
    </section>


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
    
    <script>
        lucide.createIcons();

        // Counter animation
        document.querySelectorAll('.kpi-value[data-count]').forEach(element => {
            const target = parseFloat(element.getAttribute('data-count'));
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = Math.round(target);
                    clearInterval(timer);
                } else {
                    element.textContent = Math.round(current);
                }
            }, 20);
        });

        // Charts
        const chartColors = {
            primary: '#004d99',
            gold: '#daa520',
            success: '#10b981',
            warning: '#f59e0b',
            danger: '#ef4444',
            red: '#c41e3a',
        };

        // Secteur Chart
        new Chart(document.getElementById('sectorChart').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: [{% for sector, data in sectorStats %}'{{ sector }}',{% endfor %}],
                datasets: [{
                    data: [{% for sector, data in sectorStats %}{{ data.count }},{% endfor %}],
                    backgroundColor: Object.values(chartColors)
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom', labels: { font: { family: \"'DM Sans', sans-serif\", size: 11 }, padding: 15 } }
                }
            }
        });

        // Financing Chart
        new Chart(document.getElementById('financingChart').getContext('2d'), {
            type: 'pie',
            data: {
                labels: [{% for source, data in financingSourceStats %}'{{ source }}',{% endfor %}],
                datasets: [{
                    data: [{% for source, data in financingSourceStats %}{{ data.count }},{% endfor %}],
                    backgroundColor: Object.values(chartColors)
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom', labels: { font: { family: \"'DM Sans', sans-serif\", size: 11 }, padding: 15 } }
                }
            }
        });

        // Status Chart
        new Chart(document.getElementById('statusChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [{% for status, count in statusStats %}'{{ status }}',{% endfor %}],
                datasets: [{
                    label: 'Projets',
                    data: [{% for status, count in statusStats %}{{ count }},{% endfor %}],
                    backgroundColor: chartColors.primary
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // Evolution Chart
        new Chart(document.getElementById('evolutionChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: [{% for month, data in monthlyEvolution %}'{{ month }}',{% endfor %}],
                datasets: [{
                    label: 'Projets',
                    data: [{% for month, data in monthlyEvolution %}{{ data.projects }},{% endfor %}],
                    borderColor: chartColors.primary,
                    backgroundColor: 'rgba(0, 77, 153, 0.1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });
    </script>
{% endblock %}
", "top_management/dashboard.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\top_management\\dashboard.html.twig");
    }
}
