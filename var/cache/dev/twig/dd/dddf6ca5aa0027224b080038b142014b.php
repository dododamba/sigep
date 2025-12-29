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

/* dashboard/management.html.twig */
class __TwigTemplate_3b33f0446d4d5d8dd214f0296a7629ad extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/management.html.twig"));

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
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "<div class=\"dashboard-container\">
    ";
        // line 16
        yield "    <header class=\"header\">
        <div class=\"header-content\">
            <div class=\"header-brand\">
                <div class=\"logo-container\">
                    <div class=\"logo-emblem\">
                        <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"Armoirie du Tchad\">
                    </div>
                    <div class=\"brand-text\">
                        <h1 class=\"brand-name\">SIGEP</h1>
                        <span class=\"brand-subtitle\">République du Tchad</span>
                    </div>
                </div>
            </div>

            <div class=\"header-filters\">
                <form method=\"get\" action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_index");
        yield "\" class=\"filter-form\">
                    <div class=\"filter-group\">
                        <select name=\"year\" id=\"filterYear\" class=\"filter-select\">
                            <option value=\"\">Toutes les années</option>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 36
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "year", [], "any", false, false, false, 36) == $context["year"])) {
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
        // line 38
        yield "                        </select>
                        <i data-lucide=\"calendar\" class=\"filter-icon\"></i>
                    </div>

                    <div class=\"filter-group\">
                        <select name=\"institution\" id=\"filterInstitution\" class=\"filter-select\">
                            <option value=\"\">Toutes les institutions</option>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["institutions"]) || array_key_exists("institutions", $context) ? $context["institutions"] : (function () { throw new RuntimeError('Variable "institutions" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["institution"]) {
            // line 46
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "institution_id", [], "any", false, false, false, 46) == CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 46))) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "nom", [], "any", false, false, false, 47), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['institution'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                        </select>
                        <i data-lucide=\"building\" class=\"filter-icon\"></i>
                    </div>

                    <button type=\"submit\" class=\"btn-filter\">
                        <i data-lucide=\"filter\"></i>
                        Filtrer
                    </button>
                </form>
            </div>

            <div class=\"header-user\">
                <div class=\"user-avatar\">
                    <i data-lucide=\"user\"></i>
                </div>
                <div class=\"user-info\">
                    <span class=\"user-name\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "fullName", [], "any", false, false, false, 66), "html", null, true);
        yield "</span>
                    <span class=\"user-role\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "accessLevelLabel", [], "any", false, false, false, 67), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </header>

    ";
        // line 74
        yield "    <main class=\"main-content\">
        <div class=\"container-fluid\">
            ";
        // line 77
        yield "            <section class=\"kpi-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"bar-chart-3\"></i>
                        Indicateurs Clés
                    </h2>
                </div>

                <div class=\"kpi-grid\">
                    ";
        // line 86
        yield from $this->load("components/_kpi_card.html.twig", 86)->unwrap()->yield(CoreExtension::merge($context, ["icon" => "folder-kanban", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 88
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 88, $this->source); })()), "totalProjects", [], "any", false, false, false, 88), "label" => "Projets Total", "sublabel" => (((("<span>🟢 " . CoreExtension::getAttribute($this->env, $this->source,         // line 90
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 90, $this->source); })()), "activeProjects", [], "any", false, false, false, 90)) . " en cours</span> <span>✅ ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 90, $this->source); })()), "completedProjects", [], "any", false, false, false, 90)) . " terminés</span>"), "trend" => ["direction" => "up", "value" => "+12%"], "color" => "primary"]));
        // line 94
        yield "
                    ";
        // line 95
        yield from $this->load("components/_kpi_card.html.twig", 95)->unwrap()->yield(CoreExtension::merge($context, ["icon" => "banknote", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 97
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 97, $this->source); })()), "totalBudget", [], "any", false, false, false, 97), "label" => "Budget Total (FCFA)", "sublabel" => (("<span>💰 " . $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source,         // line 99
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 99, $this->source); })()), "totalBudget", [], "any", false, false, false, 99), 0, ",", " ")) . "</span>"), "color" => "gold"]));
        // line 102
        yield "
                    ";
        // line 103
        yield from $this->load("components/_kpi_card.html.twig", 103)->unwrap()->yield(CoreExtension::merge($context, ["icon" => "trending-up", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 105, $this->source); })()), "disbursementRate", [], "any", false, false, false, 105), "label" => "Taux de Décaissement (%)", "sublabel" => (("<span>📊 " . $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source,         // line 107
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 107, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 107), 0, ",", " ")) . " FCFA décaissés</span>"), "trend" => ["direction" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 108
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 108, $this->source); })()), "disbursementRate", [], "any", false, false, false, 108) > 50)) ? ("up") : ("down")), "value" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 108, $this->source); })()), "disbursementRate", [], "any", false, false, false, 108) . "%")], "color" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 109
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 109, $this->source); })()), "disbursementRate", [], "any", false, false, false, 109) > 70)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 109, $this->source); })()), "disbursementRate", [], "any", false, false, false, 109) > 50)) ? ("warning") : ("danger"))))]));
        // line 111
        yield "
                    ";
        // line 112
        yield from $this->load("components/_kpi_card.html.twig", 112)->unwrap()->yield(CoreExtension::merge($context, ["icon" => "activity", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 114
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 114, $this->source); })()), "avgPhysicalProgress", [], "any", false, false, false, 114), "label" => "Réalisation Physique Moyenne (%)", "sublabel" => "<span>📈 Progression globale</span>", "trend" => ["direction" => "up", "value" => (("+" . CoreExtension::getAttribute($this->env, $this->source,         // line 117
(isset($context["kpis"]) || array_key_exists("kpis", $context) ? $context["kpis"] : (function () { throw new RuntimeError('Variable "kpis" does not exist.', 117, $this->source); })()), "avgPhysicalProgress", [], "any", false, false, false, 117)) . "%")], "color" => "success"]));
        // line 120
        yield "                </div>
            </section>

            ";
        // line 124
        yield "            <section class=\"charts-section\">
                <div class=\"charts-grid\">
                    ";
        // line 127
        yield "                    <div class=\"chart-card\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"pie-chart\"></i>
                                Répartition par Secteur
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"sectorChart\"></canvas>
                        </div>
                    </div>

                    ";
        // line 140
        yield "                    <div class=\"chart-card\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"wallet\"></i>
                                Sources de Financement
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"financingChart\"></canvas>
                        </div>
                    </div>

                    ";
        // line 153
        yield "                    <div class=\"chart-card\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"check-circle\"></i>
                                Statuts des Projets
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"statusChart\"></canvas>
                        </div>
                    </div>

                    ";
        // line 166
        yield "                    <div class=\"chart-card full-width\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"trending-up\"></i>
                                Évolution Mensuelle
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"evolutionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            ";
        // line 181
        yield "            <section class=\"projects-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"star\"></i>
                        Top Projets par Budget
                    </h2>
                    <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_index");
        yield "\" class=\"btn-link\">
                        Voir tous les projets
                        <i data-lucide=\"arrow-right\"></i>
                    </a>
                </div>

                <div class=\"table-container\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>Projet</th>
                                <th>Institution</th>
                                <th>Secteur</th>
                                <th>Budget (FCFA)</th>
                                <th>Progression</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topProjects"]) || array_key_exists("topProjects", $context) ? $context["topProjects"] : (function () { throw new RuntimeError('Variable "topProjects" does not exist.', 207, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 208
            yield "                            <tr>
                                <td>
                                    <div class=\"project-name\">
                                        <strong>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "titre", [], "any", false, false, false, 211), "html", null, true);
            yield "</strong>
                                        <small>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "code", [], "any", false, false, false, 212), "html", null, true);
            yield "</small>
                                    </div>
                                </td>
                                <td>";
            // line 215
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 215)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 215), "nom", [], "any", false, false, false, 215), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td>
                                    <span class=\"badge badge-sector\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "secteur", [], "any", false, false, false, 217), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-right\">
                                    <strong>";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 220), 0, ",", " "), "html", null, true);
            yield "</strong>
                                </td>
                                <td>
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill\" style=\"width: ";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 224), "html", null, true);
            yield "%\"></div>
                                        <span class=\"progress-text\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 225), "html", null, true);
            yield "%</span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge badge-";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statut", [], "any", false, false, false, 229), "html", null, true);
            yield "\">
                                        ";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statutLabel", [], "any", false, false, false, 230), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <a href=\"";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 234)]), "html", null, true);
            yield "\" class=\"btn-icon\" title=\"Voir détails\">
                                        <i data-lucide=\"eye\"></i>
                                    </a>
                                </td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 239
        if (!$context['_iterated']) {
            // line 240
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center\">
                                    <div class=\"empty-state\">
                                        <i data-lucide=\"folder-x\"></i>
                                        <p>Aucun projet trouvé</p>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "                        </tbody>
                    </table>
                </div>
            </section>

            ";
        // line 255
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["criticalProjects"]) || array_key_exists("criticalProjects", $context) ? $context["criticalProjects"] : (function () { throw new RuntimeError('Variable "criticalProjects" does not exist.', 255, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 256
            yield "            <section class=\"critical-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"alert-triangle\"></i>
                        Projets Critiques - Attention Requise
                    </h2>
                </div>

                <div class=\"critical-grid\">
                    ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["criticalProjects"]) || array_key_exists("criticalProjects", $context) ? $context["criticalProjects"] : (function () { throw new RuntimeError('Variable "criticalProjects" does not exist.', 265, $this->source); })()), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 266
                yield "                    <div class=\"critical-card\">
                        <div class=\"critical-header\">
                            <h4>";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "titre", [], "any", false, false, false, 268), "html", null, true);
                yield "</h4>
                            <span class=\"risk-badge risk-";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "riskLevel", [], "any", false, false, false, 269)), "html", null, true);
                yield "\">
                                ";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "riskLevel", [], "any", false, false, false, 270), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"critical-body\">
                            <div class=\"critical-metric\">
                                <span class=\"label\">Progression</span>
                                <span class=\"value\">";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 276), "html", null, true);
                yield "%</span>
                            </div>
                            <div class=\"critical-metric\">
                                <span class=\"label\">Statut</span>
                                <span class=\"value\">";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statutLabel", [], "any", false, false, false, 280), "html", null, true);
                yield "</span>
                            </div>
                            ";
                // line 282
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "isDelayed", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 283
                    yield "                            <div class=\"critical-alert\">
                                <i data-lucide=\"clock\"></i>
                                Projet en retard
                            </div>
                            ";
                }
                // line 288
                yield "                        </div>
                        <div class=\"critical-footer\">
                            <a href=\"";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 290)]), "html", null, true);
                yield "\" class=\"btn-critical\">
                                Voir détails
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            yield "                </div>
            </section>
            ";
        }
        // line 300
        yield "
            ";
        // line 302
        yield "            <section class=\"performance-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"award\"></i>
                        Performance par Institution
                    </h2>
                </div>

                <div class=\"performance-grid\">
                    ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["institutionPerformance"]) || array_key_exists("institutionPerformance", $context) ? $context["institutionPerformance"] : (function () { throw new RuntimeError('Variable "institutionPerformance" does not exist.', 311, $this->source); })()), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["perf"]) {
            // line 312
            yield "                    <div class=\"performance-card\">
                        <div class=\"performance-icon\">
                            <i data-lucide=\"building-2\"></i>
                        </div>
                        <div class=\"performance-content\">
                            <h4>";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["perf"], "institution", [], "any", false, false, false, 317), "nom", [], "any", false, false, false, 317), "html", null, true);
            yield "</h4>
                            <div class=\"performance-stats\">
                                <div class=\"stat\">
                                    <span class=\"stat-value\">";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["perf"], "projectsCount", [], "any", false, false, false, 320), "html", null, true);
            yield "</span>
                                    <span class=\"stat-label\">Projets</span>
                                </div>
                                <div class=\"stat\">
                                    <span class=\"stat-value\">";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["perf"], "avgProgress", [], "any", false, false, false, 324), "html", null, true);
            yield "%</span>
                                    <span class=\"stat-label\">Progression</span>
                                </div>
                                <div class=\"stat\">
                                    <span class=\"stat-value\">";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["perf"], "successRate", [], "any", false, false, false, 328), "html", null, true);
            yield "%</span>
                                    <span class=\"stat-label\">Taux de succès</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['perf'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        yield "                </div>
            </section>
        </div>
    </main>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 343
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Initialiser Lucide Icons
        lucide.createIcons();

        // Configuration Chart.js par défaut
        Chart.defaults.font.family = \"'DM Sans', sans-serif\";
        Chart.defaults.color = '#4b5563';

        // Données des graphiques
        const sectorData = ";
        // line 355
        yield json_encode((isset($context["sectorStats"]) || array_key_exists("sectorStats", $context) ? $context["sectorStats"] : (function () { throw new RuntimeError('Variable "sectorStats" does not exist.', 355, $this->source); })()));
        yield ";
        const financingData = ";
        // line 356
        yield json_encode((isset($context["financingSourceStats"]) || array_key_exists("financingSourceStats", $context) ? $context["financingSourceStats"] : (function () { throw new RuntimeError('Variable "financingSourceStats" does not exist.', 356, $this->source); })()));
        yield ";
        const statusData = ";
        // line 357
        yield json_encode((isset($context["statusStats"]) || array_key_exists("statusStats", $context) ? $context["statusStats"] : (function () { throw new RuntimeError('Variable "statusStats" does not exist.', 357, $this->source); })()));
        yield ";
        const evolutionData = ";
        // line 358
        yield json_encode((isset($context["monthlyEvolution"]) || array_key_exists("monthlyEvolution", $context) ? $context["monthlyEvolution"] : (function () { throw new RuntimeError('Variable "monthlyEvolution" does not exist.', 358, $this->source); })()));
        yield ";

        // Graphique Secteur
        if (document.getElementById('sectorChart')) {
            new Chart(document.getElementById('sectorChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(sectorData),
                    datasets: [{
                        data: Object.values(sectorData).map(d => d.count),
                        backgroundColor: [
                            '#004d99', '#daa520', '#c41e3a', '#10b981', 
                            '#f59e0b', '#6366f1', '#ec4899', '#14b8a6'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        // Graphique Financement
        if (document.getElementById('financingChart')) {
            new Chart(document.getElementById('financingChart'), {
                type: 'pie',
                data: {
                    labels: Object.keys(financingData),
                    datasets: [{
                        data: Object.values(financingData).map(d => d.totalAmount),
                        backgroundColor: ['#004d99', '#daa520', '#c41e3a', '#10b981', '#f59e0b']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        // Graphique Statuts
        if (document.getElementById('statusChart')) {
            new Chart(document.getElementById('statusChart'), {
                type: 'bar',
                data: {
                    labels: ['Planifié', 'En cours', 'Suspendu', 'Terminé', 'Annulé'],
                    datasets: [{
                        label: 'Nombre de projets',
                        data: [
                            statusData.planifie || 0,
                            statusData.en_cours || 0,
                            statusData.suspendu || 0,
                            statusData.termine || 0,
                            statusData.annule || 0
                        ],
                        backgroundColor: ['#6b7280', '#004d99', '#f59e0b', '#10b981', '#ef4444']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Graphique Évolution
        if (document.getElementById('evolutionChart')) {
            new Chart(document.getElementById('evolutionChart'), {
                type: 'line',
                data: {
                    labels: Object.keys(evolutionData),
                    datasets: [{
                        label: 'Nombre de projets',
                        data: Object.values(evolutionData).map(d => d.projects),
                        borderColor: '#004d99',
                        backgroundColor: 'rgba(0, 77, 153, 0.1)',
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Animation des KPIs (counter)
        document.querySelectorAll('[data-counter]').forEach(el => {
            const target = parseInt(el.getAttribute('data-counter'));
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    el.textContent = target.toLocaleString('fr-FR');
                    clearInterval(timer);
                } else {
                    el.textContent = Math.floor(current).toLocaleString('fr-FR');
                }
            }, 30);
        });

        // Auto-submit des filtres
        document.querySelectorAll('.filter-select').forEach(select => {
            select.addEventListener('change', () => {
                select.closest('form').submit();
            });
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
        return "dashboard/management.html.twig";
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
        return array (  650 => 358,  646 => 357,  642 => 356,  638 => 355,  622 => 343,  612 => 342,  599 => 335,  586 => 328,  579 => 324,  572 => 320,  566 => 317,  559 => 312,  555 => 311,  544 => 302,  541 => 300,  536 => 297,  523 => 290,  519 => 288,  512 => 283,  510 => 282,  505 => 280,  498 => 276,  489 => 270,  485 => 269,  481 => 268,  477 => 266,  473 => 265,  462 => 256,  459 => 255,  452 => 249,  438 => 240,  436 => 239,  426 => 234,  419 => 230,  415 => 229,  408 => 225,  404 => 224,  397 => 220,  391 => 217,  386 => 215,  380 => 212,  376 => 211,  371 => 208,  366 => 207,  343 => 187,  335 => 181,  319 => 166,  305 => 153,  291 => 140,  277 => 127,  273 => 124,  268 => 120,  266 => 117,  265 => 114,  264 => 112,  261 => 111,  259 => 109,  258 => 108,  257 => 107,  256 => 105,  255 => 103,  252 => 102,  250 => 99,  249 => 97,  248 => 95,  245 => 94,  243 => 90,  242 => 88,  241 => 86,  230 => 77,  226 => 74,  217 => 67,  213 => 66,  195 => 50,  186 => 47,  177 => 46,  173 => 45,  164 => 38,  149 => 36,  145 => 35,  138 => 31,  125 => 21,  118 => 16,  115 => 14,  105 => 13,  95 => 10,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Top Management - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/dashboard.css') }}\">
{% endblock %}

{% block body %}
<div class=\"dashboard-container\">
    {# Header avec Armoirie et Filtres #}
    <header class=\"header\">
        <div class=\"header-content\">
            <div class=\"header-brand\">
                <div class=\"logo-container\">
                    <div class=\"logo-emblem\">
                        <img src=\"{{ asset('logo.png') }}\" alt=\"Armoirie du Tchad\">
                    </div>
                    <div class=\"brand-text\">
                        <h1 class=\"brand-name\">SIGEP</h1>
                        <span class=\"brand-subtitle\">République du Tchad</span>
                    </div>
                </div>
            </div>

            <div class=\"header-filters\">
                <form method=\"get\" action=\"{{ path('app_dashboard_index') }}\" class=\"filter-form\">
                    <div class=\"filter-group\">
                        <select name=\"year\" id=\"filterYear\" class=\"filter-select\">
                            <option value=\"\">Toutes les années</option>
                            {% for year in years %}
                                <option value=\"{{ year }}\" {% if filters.year == year %}selected{% endif %}>{{ year }}</option>
                            {% endfor %}
                        </select>
                        <i data-lucide=\"calendar\" class=\"filter-icon\"></i>
                    </div>

                    <div class=\"filter-group\">
                        <select name=\"institution\" id=\"filterInstitution\" class=\"filter-select\">
                            <option value=\"\">Toutes les institutions</option>
                            {% for institution in institutions %}
                                <option value=\"{{ institution.id }}\" {% if filters.institution_id == institution.id %}selected{% endif %}>
                                    {{ institution.nom }}
                                </option>
                            {% endfor %}
                        </select>
                        <i data-lucide=\"building\" class=\"filter-icon\"></i>
                    </div>

                    <button type=\"submit\" class=\"btn-filter\">
                        <i data-lucide=\"filter\"></i>
                        Filtrer
                    </button>
                </form>
            </div>

            <div class=\"header-user\">
                <div class=\"user-avatar\">
                    <i data-lucide=\"user\"></i>
                </div>
                <div class=\"user-info\">
                    <span class=\"user-name\">{{ app.user.fullName }}</span>
                    <span class=\"user-role\">{{ app.user.accessLevelLabel }}</span>
                </div>
            </div>
        </div>
    </header>

    {# Contenu Principal #}
    <main class=\"main-content\">
        <div class=\"container-fluid\">
            {# Section KPIs #}
            <section class=\"kpi-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"bar-chart-3\"></i>
                        Indicateurs Clés
                    </h2>
                </div>

                <div class=\"kpi-grid\">
                    {% include 'components/_kpi_card.html.twig' with {
                        icon: 'folder-kanban',
                        value: kpis.totalProjects,
                        label: 'Projets Total',
                        sublabel: '<span>🟢 ' ~ kpis.activeProjects ~ ' en cours</span> <span>✅ ' ~ kpis.completedProjects ~ ' terminés</span>',
                        trend: {direction: 'up', value: '+12%'},
                        color: 'primary'
                    } %}

                    {% include 'components/_kpi_card.html.twig' with {
                        icon: 'banknote',
                        value: kpis.totalBudget,
                        label: 'Budget Total (FCFA)',
                        sublabel: '<span>💰 ' ~ (kpis.totalBudget|number_format(0, ',', ' ')) ~ '</span>',
                        color: 'gold'
                    } %}

                    {% include 'components/_kpi_card.html.twig' with {
                        icon: 'trending-up',
                        value: kpis.disbursementRate,
                        label: 'Taux de Décaissement (%)',
                        sublabel: '<span>📊 ' ~ (kpis.totalDisbursed|number_format(0, ',', ' ')) ~ ' FCFA décaissés</span>',
                        trend: {direction: kpis.disbursementRate > 50 ? 'up' : 'down', value: kpis.disbursementRate ~ '%'},
                        color: kpis.disbursementRate > 70 ? 'success' : (kpis.disbursementRate > 50 ? 'warning' : 'danger')
                    } %}

                    {% include 'components/_kpi_card.html.twig' with {
                        icon: 'activity',
                        value: kpis.avgPhysicalProgress,
                        label: 'Réalisation Physique Moyenne (%)',
                        sublabel: '<span>📈 Progression globale</span>',
                        trend: {direction: 'up', value: '+' ~ kpis.avgPhysicalProgress ~ '%'},
                        color: 'success'
                    } %}
                </div>
            </section>

            {# Section Graphiques #}
            <section class=\"charts-section\">
                <div class=\"charts-grid\">
                    {# Graphique Répartition par Secteur #}
                    <div class=\"chart-card\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"pie-chart\"></i>
                                Répartition par Secteur
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"sectorChart\"></canvas>
                        </div>
                    </div>

                    {# Graphique Sources de Financement #}
                    <div class=\"chart-card\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"wallet\"></i>
                                Sources de Financement
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"financingChart\"></canvas>
                        </div>
                    </div>

                    {# Graphique Statuts des Projets #}
                    <div class=\"chart-card\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"check-circle\"></i>
                                Statuts des Projets
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"statusChart\"></canvas>
                        </div>
                    </div>

                    {# Graphique Évolution Mensuelle #}
                    <div class=\"chart-card full-width\">
                        <div class=\"chart-header\">
                            <h3 class=\"chart-title\">
                                <i data-lucide=\"trending-up\"></i>
                                Évolution Mensuelle
                            </h3>
                        </div>
                        <div class=\"chart-body\">
                            <canvas id=\"evolutionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            {# Section Top Projets #}
            <section class=\"projects-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"star\"></i>
                        Top Projets par Budget
                    </h2>
                    <a href=\"{{ path('app_project_index') }}\" class=\"btn-link\">
                        Voir tous les projets
                        <i data-lucide=\"arrow-right\"></i>
                    </a>
                </div>

                <div class=\"table-container\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>Projet</th>
                                <th>Institution</th>
                                <th>Secteur</th>
                                <th>Budget (FCFA)</th>
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
                                        <strong>{{ project.titre }}</strong>
                                        <small>{{ project.code }}</small>
                                    </div>
                                </td>
                                <td>{{ project.institution ? project.institution.nom : 'N/A' }}</td>
                                <td>
                                    <span class=\"badge badge-sector\">{{ project.secteur }}</span>
                                </td>
                                <td class=\"text-right\">
                                    <strong>{{ project.budgetTotal|number_format(0, ',', ' ') }}</strong>
                                </td>
                                <td>
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill\" style=\"width: {{ project.tauxRealisation }}%\"></div>
                                        <span class=\"progress-text\">{{ project.tauxRealisation }}%</span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge badge-{{ project.statut }}\">
                                        {{ project.statutLabel }}
                                    </span>
                                </td>
                                <td>
                                    <a href=\"{{ path('app_dashboard_project_detail', {id: project.id}) }}\" class=\"btn-icon\" title=\"Voir détails\">
                                        <i data-lucide=\"eye\"></i>
                                    </a>
                                </td>
                            </tr>
                            {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center\">
                                    <div class=\"empty-state\">
                                        <i data-lucide=\"folder-x\"></i>
                                        <p>Aucun projet trouvé</p>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </section>

            {# Section Projets Critiques #}
            {% if criticalProjects is not empty %}
            <section class=\"critical-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"alert-triangle\"></i>
                        Projets Critiques - Attention Requise
                    </h2>
                </div>

                <div class=\"critical-grid\">
                    {% for project in criticalProjects|slice(0, 6) %}
                    <div class=\"critical-card\">
                        <div class=\"critical-header\">
                            <h4>{{ project.titre }}</h4>
                            <span class=\"risk-badge risk-{{ project.riskLevel|lower }}\">
                                {{ project.riskLevel }}
                            </span>
                        </div>
                        <div class=\"critical-body\">
                            <div class=\"critical-metric\">
                                <span class=\"label\">Progression</span>
                                <span class=\"value\">{{ project.tauxRealisation }}%</span>
                            </div>
                            <div class=\"critical-metric\">
                                <span class=\"label\">Statut</span>
                                <span class=\"value\">{{ project.statutLabel }}</span>
                            </div>
                            {% if project.isDelayed %}
                            <div class=\"critical-alert\">
                                <i data-lucide=\"clock\"></i>
                                Projet en retard
                            </div>
                            {% endif %}
                        </div>
                        <div class=\"critical-footer\">
                            <a href=\"{{ path('app_dashboard_project_detail', {id: project.id}) }}\" class=\"btn-critical\">
                                Voir détails
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </section>
            {% endif %}

            {# Section Performance Institutionnelle #}
            <section class=\"performance-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i data-lucide=\"award\"></i>
                        Performance par Institution
                    </h2>
                </div>

                <div class=\"performance-grid\">
                    {% for perf in institutionPerformance|slice(0, 6) %}
                    <div class=\"performance-card\">
                        <div class=\"performance-icon\">
                            <i data-lucide=\"building-2\"></i>
                        </div>
                        <div class=\"performance-content\">
                            <h4>{{ perf.institution.nom }}</h4>
                            <div class=\"performance-stats\">
                                <div class=\"stat\">
                                    <span class=\"stat-value\">{{ perf.projectsCount }}</span>
                                    <span class=\"stat-label\">Projets</span>
                                </div>
                                <div class=\"stat\">
                                    <span class=\"stat-value\">{{ perf.avgProgress }}%</span>
                                    <span class=\"stat-label\">Progression</span>
                                </div>
                                <div class=\"stat\">
                                    <span class=\"stat-value\">{{ perf.successRate }}%</span>
                                    <span class=\"stat-label\">Taux de succès</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </section>
        </div>
    </main>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Initialiser Lucide Icons
        lucide.createIcons();

        // Configuration Chart.js par défaut
        Chart.defaults.font.family = \"'DM Sans', sans-serif\";
        Chart.defaults.color = '#4b5563';

        // Données des graphiques
        const sectorData = {{ sectorStats|json_encode|raw }};
        const financingData = {{ financingSourceStats|json_encode|raw }};
        const statusData = {{ statusStats|json_encode|raw }};
        const evolutionData = {{ monthlyEvolution|json_encode|raw }};

        // Graphique Secteur
        if (document.getElementById('sectorChart')) {
            new Chart(document.getElementById('sectorChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(sectorData),
                    datasets: [{
                        data: Object.values(sectorData).map(d => d.count),
                        backgroundColor: [
                            '#004d99', '#daa520', '#c41e3a', '#10b981', 
                            '#f59e0b', '#6366f1', '#ec4899', '#14b8a6'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        // Graphique Financement
        if (document.getElementById('financingChart')) {
            new Chart(document.getElementById('financingChart'), {
                type: 'pie',
                data: {
                    labels: Object.keys(financingData),
                    datasets: [{
                        data: Object.values(financingData).map(d => d.totalAmount),
                        backgroundColor: ['#004d99', '#daa520', '#c41e3a', '#10b981', '#f59e0b']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        // Graphique Statuts
        if (document.getElementById('statusChart')) {
            new Chart(document.getElementById('statusChart'), {
                type: 'bar',
                data: {
                    labels: ['Planifié', 'En cours', 'Suspendu', 'Terminé', 'Annulé'],
                    datasets: [{
                        label: 'Nombre de projets',
                        data: [
                            statusData.planifie || 0,
                            statusData.en_cours || 0,
                            statusData.suspendu || 0,
                            statusData.termine || 0,
                            statusData.annule || 0
                        ],
                        backgroundColor: ['#6b7280', '#004d99', '#f59e0b', '#10b981', '#ef4444']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Graphique Évolution
        if (document.getElementById('evolutionChart')) {
            new Chart(document.getElementById('evolutionChart'), {
                type: 'line',
                data: {
                    labels: Object.keys(evolutionData),
                    datasets: [{
                        label: 'Nombre de projets',
                        data: Object.values(evolutionData).map(d => d.projects),
                        borderColor: '#004d99',
                        backgroundColor: 'rgba(0, 77, 153, 0.1)',
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Animation des KPIs (counter)
        document.querySelectorAll('[data-counter]').forEach(el => {
            const target = parseInt(el.getAttribute('data-counter'));
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    el.textContent = target.toLocaleString('fr-FR');
                    clearInterval(timer);
                } else {
                    el.textContent = Math.floor(current).toLocaleString('fr-FR');
                }
            }, 30);
        });

        // Auto-submit des filtres
        document.querySelectorAll('.filter-select').forEach(select => {
            select.addEventListener('change', () => {
                select.closest('form').submit();
            });
        });
    </script>
{% endblock %}
", "dashboard/management.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\dashboard\\management.html.twig");
    }
}
