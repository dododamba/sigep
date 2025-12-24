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
        yield "<!-- ============================================
     HEADER - Style Armoirie du Tchad
     ============================================ -->
<header class=\"header\">
    <div class=\"header-content\">
        <div class=\"header-brand\">
            <div class=\"logo-container\">
                <div class=\"logo-emblem\">
                    <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"Armoirie du Tchad\" onerror=\"this.style.display='none'\">
                </div>
                <div class=\"brand-text\">
                    <h1 class=\"brand-name\">SIGEP</h1>
                    <span class=\"brand-subtitle\">République du Tchad</span>
                </div>
            </div>
        </div>

      
        <div class=\"header-user\">
            <div class=\"user-avatar\">
                <i data-lucide=\"user\"></i>
            </div>
            <div class=\"user-info\">
                <span class=\"user-name\">";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "firstname", [], "any", false, false, false, 40) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "lastname", [], "any", false, false, false, 40)), "html", null, true)) : ("Manager"));
        yield "</span>
                <span class=\"user-role\">Top Management</span>
            </div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class=\"main-content\">
    <!-- Page Title -->
    <div class=\"page-title\">
        <h1>Dashboard Top Management</h1>
        <p>Vue stratégique et indicateurs de performance</p>
        <div class=\"last-update\">
            <i data-lucide=\"clock\"></i>
            Dernière mise à jour : ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
        </div>
    </div>

    
   <div class=\"header-filters\">
            <form method=\"get\" action=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_dashboard");
        yield "\" class=\"filter-form\">
                <div class=\"filter-group\">
                    <select name=\"year\" id=\"filterYear\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes les années</option>
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 66
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 66, $this->source); })()), "year", [], "any", false, false, false, 66) == $context["year"])) {
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
        // line 68
        yield "                    </select>
                    <i data-lucide=\"calendar\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select name=\"institution\" id=\"filterInstitution\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes les institutions</option>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["institutions"]) || array_key_exists("institutions", $context) ? $context["institutions"] : (function () { throw new RuntimeError('Variable "institutions" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["institution"]) {
            // line 76
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 76, $this->source); })()), "institution", [], "any", false, false, false, 76) == CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 76))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 77), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['institution'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 101, $this->source); })()), "totalProjects", [], "any", false, false, false, 101), "html", null, true);
        yield "\">0</h3>
                    <p class=\"kpi-label\">Total Projets</p>
                    <p class=\"kpi-sublabel\">
                        🟢 ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 104, $this->source); })()), "activeProjects", [], "any", false, false, false, 104), "html", null, true);
        yield " en cours • ✅ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 104, $this->source); })()), "completedProjects", [], "any", false, false, false, 104), "html", null, true);
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
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 117, $this->source); })()), "totalBudget", [], "any", false, false, false, 117) / 1000000000), 1, ".", " "), "html", null, true);
        yield "</h3>
                    <p class=\"kpi-label\">Budget Total (Mds FCFA)</p>
                    <p class=\"kpi-sublabel\">
                        💰 ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 120, $this->source); })()), "totalBudget", [], "any", false, false, false, 120), 0, ",", " "), "html", null, true);
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
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 133, $this->source); })()), "disbursementRate", [], "any", false, false, false, 133), "html", null, true);
        yield "\">0</h3>
                    <p class=\"kpi-label\">Taux de Décaissement (%)</p>
                    <p class=\"kpi-sublabel\">
                        ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 136, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 136) / 1000000000), 1, ".", " "), "html", null, true);
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
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 149, $this->source); })()), "avgPhysicalProgress", [], "any", false, false, false, 149), "html", null, true);
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
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 175, $this->source); })()), "portfolioValue", [], "any", false, false, false, 175) / 1000000000), 1, ".", " "), "html", null, true);
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
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 186, $this->source); })()), "fundingEfficiency", [], "any", false, false, false, 186), "html", null, true);
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
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 197, $this->source); })()), "onTimeRate", [], "any", false, false, false, 197), "html", null, true);
        yield "%</span>
                    <span class=\"metric-sublabel\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 198, $this->source); })()), "delayRate", [], "any", false, false, false, 198), "html", null, true);
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
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 208, $this->source); })()), "projectsPerInstitution", [], "any", false, false, false, 208), "html", null, true);
        yield "</span>
                    <span class=\"metric-sublabel\">";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["managementMetrics"]) || array_key_exists("managementMetrics", $context) ? $context["managementMetrics"] : (function () { throw new RuntimeError('Variable "managementMetrics" does not exist.', 209, $this->source); })()), "activeInstitutions", [], "any", false, false, false, 209), "html", null, true);
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
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 230, $this->source); })()), "lowRisk", [], "any", false, false, false, 230), "html", null, true);
        yield "</span>
                    <span class=\"risk-label\">Risque Faible</span>
                    <span class=\"risk-percent\">";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 232, $this->source); })()), "lowRiskPercent", [], "any", false, false, false, 232), "html", null, true);
        yield "%</span>
                </div>
            </div>

            <div class=\"risk-card risk-medium\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"alert-circle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 241, $this->source); })()), "mediumRisk", [], "any", false, false, false, 241), "html", null, true);
        yield "</span>
                    <span class=\"risk-label\">Risque Moyen</span>
                    <span class=\"risk-percent\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 243, $this->source); })()), "mediumRiskPercent", [], "any", false, false, false, 243), "html", null, true);
        yield "%</span>
                </div>
            </div>

            <div class=\"risk-card risk-high\">
                <div class=\"risk-icon\">
                    <i data-lucide=\"alert-triangle\"></i>
                </div>
                <div class=\"risk-content\">
                    <span class=\"risk-count\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 252, $this->source); })()), "highRisk", [], "any", false, false, false, 252), "html", null, true);
        yield "</span>
                    <span class=\"risk-label\">Risque Élevé</span>
                    <span class=\"risk-percent\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 254, $this->source); })()), "highRiskPercent", [], "any", false, false, false, 254), "html", null, true);
        yield "%</span>
                </div>
            </div>
        </div>

        ";
        // line 259
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 259, $this->source); })()), "criticalProjectsCount", [], "any", false, false, false, 259) > 0)) {
            // line 260
            yield "        <div class=\"risk-alert\">
            <i data-lucide=\"alert-triangle\"></i>
            <strong>Attention :</strong> ";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRiskAnalysis"]) || array_key_exists("globalRiskAnalysis", $context) ? $context["globalRiskAnalysis"] : (function () { throw new RuntimeError('Variable "globalRiskAnalysis" does not exist.', 262, $this->source); })()), "criticalProjectsCount", [], "any", false, false, false, 262), "html", null, true);
            yield " projet(s) critique(s) nécessitent une action immédiate
        </div>
        ";
        }
        // line 265
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
        // line 280
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 280, $this->source); })()), "projectGrowth", [], "any", false, false, false, 280) >= 0)) ? ("trend-positive") : ("trend-negative"));
        yield "\">
                        ";
        // line 281
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 281, $this->source); })()), "projectGrowth", [], "any", false, false, false, 281) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 281, $this->source); })()), "projectGrowth", [], "any", false, false, false, 281), "html", null, true);
        yield "%
                    </span>
                </div>
                <div class=\"trend-body\">
                    <div class=\"trend-comparison\">
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 288, $this->source); })()), "currentYearProjects", [], "any", false, false, false, 288), "html", null, true);
        yield " projets</span>
                        </div>
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - 1), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 292, $this->source); })()), "lastYearProjects", [], "any", false, false, false, 292), "html", null, true);
        yield " projets</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"trend-card\">
                <div class=\"trend-header\">
                    <h4>Croissance du Budget</h4>
                    <span class=\"trend-badge ";
        // line 301
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 301, $this->source); })()), "budgetGrowth", [], "any", false, false, false, 301) >= 0)) ? ("trend-positive") : ("trend-negative"));
        yield "\">
                        ";
        // line 302
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 302, $this->source); })()), "budgetGrowth", [], "any", false, false, false, 302) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 302, $this->source); })()), "budgetGrowth", [], "any", false, false, false, 302), "html", null, true);
        yield "%
                    </span>
                </div>
                <div class=\"trend-body\">
                    <div class=\"trend-comparison\">
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 309, $this->source); })()), "currentYearBudget", [], "any", false, false, false, 309) / 1000000000), 1, ".", " "), "html", null, true);
        yield " Mds FCFA</span>
                        </div>
                        <div class=\"trend-item\">
                            <span class=\"trend-year\">";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - 1), "html", null, true);
        yield "</span>
                            <span class=\"trend-value\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trends"]) || array_key_exists("trends", $context) ? $context["trends"] : (function () { throw new RuntimeError('Variable "trends" does not exist.', 313, $this->source); })()), "lastYearBudget", [], "any", false, false, false, 313) / 1000000000), 1, ".", " "), "html", null, true);
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
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topProjects"]) || array_key_exists("topProjects", $context) ? $context["topProjects"] : (function () { throw new RuntimeError('Variable "topProjects" does not exist.', 384, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 385
            yield "                    <tr>
                        <td>
                            <div class=\"project-name\">
                                ";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 388), "html", null, true);
            yield "
                                <span class=\"project-code\">";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "code", [], "any", false, false, false, 389), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                        <td>
                            <span class=\"sector-badge\">";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sector", [], "any", false, false, false, 393), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"budget-cell\">
                            <span class=\"budget-amount\">";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 396) / 1000000), 1, ".", " "), "html", null, true);
            yield " M</span>
                            <span class=\"budget-currency\">FCFA</span>
                        </td>
                        <td class=\"progress-cell\">
                            <div class=\"progress-bar\">
                                <div class=\"progress-fill\" style=\"width: ";
            // line 401
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", true, true, false, 401) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 401)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 401), "html", null, true)) : (0));
            yield "%; background: ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 401) >= 70)) {
                yield "var(--success-500)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 401) >= 40)) {
                yield "var(--gold-500)";
            } else {
                yield "var(--red-500)";
            }
            yield ";\"></div>
                            </div>
                            <span class=\"progress-text\">";
            // line 403
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", true, true, false, 403) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 403)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 403), "html", null, true)) : (0));
            yield "% complété</span>
                        </td>
                        <td>
                            <span class=\"status-badge status-";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 406), "html", null, true);
            yield "\">
                                ";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 407), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                            <a href=\"";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 411)]), "html", null, true);
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
        // line 418
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
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["criticalProjects"]) || array_key_exists("criticalProjects", $context) ? $context["criticalProjects"] : (function () { throw new RuntimeError('Variable "criticalProjects" does not exist.', 433, $this->source); })()), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 434
            yield "            <div class=\"critical-card\">
                <div class=\"critical-header\">
                    <span class=\"risk-badge risk-high\">Risque Élevé</span>
                </div>
                <h4 class=\"critical-title\">";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 438), "html", null, true);
            yield "</h4>
                <p class=\"critical-sector\">";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sector", [], "any", false, false, false, 439), "html", null, true);
            yield "</p>
                <div class=\"critical-stats\">
                    <div class=\"critical-stat\">
                        <span class=\"stat-label\">Progression</span>
                        <span class=\"stat-value\">";
            // line 443
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", true, true, false, 443) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 443)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 443), "html", null, true)) : (0));
            yield "%</span>
                    </div>
                    <div class=\"critical-stat\">
                        <span class=\"stat-label\">Budget</span>
                        <span class=\"stat-value\">";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 447) / 1000000), 0, ".", " "), "html", null, true);
            yield "M</span>
                    </div>
                </div>
                <a href=\"";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 450)]), "html", null, true);
            yield "\" class=\"critical-link\">
                    Voir les détails <i data-lucide=\"arrow-right\"></i>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        yield "        </div>
    </section>

</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 461
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 462
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
        // line 499
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorStats"]) || array_key_exists("sectorStats", $context) ? $context["sectorStats"] : (function () { throw new RuntimeError('Variable "sectorStats" does not exist.', 499, $this->source); })()));
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
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorStats"]) || array_key_exists("sectorStats", $context) ? $context["sectorStats"] : (function () { throw new RuntimeError('Variable "sectorStats" does not exist.', 501, $this->source); })()));
        foreach ($context['_seq'] as $context["sector"] => $context["data"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 501), "html", null, true);
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
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financingSourceStats"]) || array_key_exists("financingSourceStats", $context) ? $context["financingSourceStats"] : (function () { throw new RuntimeError('Variable "financingSourceStats" does not exist.', 518, $this->source); })()));
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
        // line 520
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financingSourceStats"]) || array_key_exists("financingSourceStats", $context) ? $context["financingSourceStats"] : (function () { throw new RuntimeError('Variable "financingSourceStats" does not exist.', 520, $this->source); })()));
        foreach ($context['_seq'] as $context["source"] => $context["data"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 520), "html", null, true);
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
        // line 537
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusStats"]) || array_key_exists("statusStats", $context) ? $context["statusStats"] : (function () { throw new RuntimeError('Variable "statusStats" does not exist.', 537, $this->source); })()));
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
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusStats"]) || array_key_exists("statusStats", $context) ? $context["statusStats"] : (function () { throw new RuntimeError('Variable "statusStats" does not exist.', 540, $this->source); })()));
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
        // line 556
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyEvolution"]) || array_key_exists("monthlyEvolution", $context) ? $context["monthlyEvolution"] : (function () { throw new RuntimeError('Variable "monthlyEvolution" does not exist.', 556, $this->source); })()));
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
        // line 559
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyEvolution"]) || array_key_exists("monthlyEvolution", $context) ? $context["monthlyEvolution"] : (function () { throw new RuntimeError('Variable "monthlyEvolution" does not exist.', 559, $this->source); })()));
        foreach ($context['_seq'] as $context["month"] => $context["data"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "projects", [], "any", false, false, false, 559), "html", null, true);
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
        return array (  984 => 559,  969 => 556,  942 => 540,  927 => 537,  899 => 520,  885 => 518,  857 => 501,  843 => 499,  802 => 462,  792 => 461,  780 => 455,  769 => 450,  763 => 447,  756 => 443,  749 => 439,  745 => 438,  739 => 434,  735 => 433,  718 => 418,  705 => 411,  698 => 407,  694 => 406,  688 => 403,  675 => 401,  667 => 396,  661 => 393,  654 => 389,  650 => 388,  645 => 385,  641 => 384,  567 => 313,  563 => 312,  557 => 309,  553 => 308,  543 => 302,  539 => 301,  527 => 292,  523 => 291,  517 => 288,  513 => 287,  503 => 281,  499 => 280,  482 => 265,  476 => 262,  472 => 260,  470 => 259,  462 => 254,  457 => 252,  445 => 243,  440 => 241,  428 => 232,  423 => 230,  399 => 209,  395 => 208,  382 => 198,  378 => 197,  364 => 186,  350 => 175,  321 => 149,  305 => 136,  299 => 133,  283 => 120,  277 => 117,  259 => 104,  253 => 101,  230 => 80,  221 => 77,  212 => 76,  208 => 75,  199 => 68,  184 => 66,  180 => 65,  173 => 61,  164 => 55,  146 => 40,  128 => 25,  118 => 17,  108 => 16,  98 => 13,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
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
<!-- ============================================
     HEADER - Style Armoirie du Tchad
     ============================================ -->
<header class=\"header\">
    <div class=\"header-content\">
        <div class=\"header-brand\">
            <div class=\"logo-container\">
                <div class=\"logo-emblem\">
                    <img src=\"{{ asset('logo.png') }}\" alt=\"Armoirie du Tchad\" onerror=\"this.style.display='none'\">
                </div>
                <div class=\"brand-text\">
                    <h1 class=\"brand-name\">SIGEP</h1>
                    <span class=\"brand-subtitle\">République du Tchad</span>
                </div>
            </div>
        </div>

      
        <div class=\"header-user\">
            <div class=\"user-avatar\">
                <i data-lucide=\"user\"></i>
            </div>
            <div class=\"user-info\">
                <span class=\"user-name\">{{ app.user ? app.user.firstname ~ ' ' ~ app.user.lastname : 'Manager' }}</span>
                <span class=\"user-role\">Top Management</span>
            </div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class=\"main-content\">
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

</main>
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
