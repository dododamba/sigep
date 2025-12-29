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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "management.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "top_management/project_details.html.twig"));

        $this->parent = $this->load("management.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détail Projet - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/project_details.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "<div class=\"project-detail-container\">
    ";
        // line 14
        yield "    <div class=\"detail-header\">
        <div class=\"header-left\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_dashboard");
        yield "\" class=\"btn-back\">
                <i data-lucide=\"arrow-left\"></i>
                Retour au dashboard
            </a>
            <h1 class=\"project-title\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        yield "</h1>
            <span class=\"project-code\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 21, $this->source); })()), "code", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>
        </div>
        <div class=\"header-right\">
            <span class=\"badge badge-";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
            <span class=\"risk-badge risk-";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 25, $this->source); })()), "riskLevel", [], "any", false, false, false, 25)), "html", null, true);
        yield "\">
                Risque: ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 26, $this->source); })()), "riskLevel", [], "any", false, false, false, 26), "html", null, true);
        yield "
            </span>
        </div>
    </div>

    ";
        // line 32
        yield "    <section class=\"metrics-grid\">
        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--gold-100); color: var(--gold-600);\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Budget Total</span>
                <span class=\"metric-value\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 39, $this->source); })()), "totalBudget", [], "any", false, false, false, 39), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--success-100); color: var(--success-600);\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Décaissé</span>
                <span class=\"metric-value\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 49, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 49), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                <span class=\"metric-sublabel\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 50, $this->source); })()), "disbursementRate", [], "any", false, false, false, 50), "html", null, true);
        yield "% du budget</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--primary-100); color: var(--primary-600);\">
                <i data-lucide=\"activity\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Réalisation Physique</span>
                <span class=\"metric-value\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 60, $this->source); })()), "physicalProgress", [], "any", false, false, false, 60), "html", null, true);
        yield "%</span>
                <div class=\"progress-bar-mini\">
                    <div class=\"progress-fill-mini\" style=\"width: ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 62, $this->source); })()), "physicalProgress", [], "any", false, false, false, 62), "html", null, true);
        yield "%\"></div>
                </div>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: ";
        // line 68
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 68, $this->source); })()), "isDelayed", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("var(--red-100)") : ("var(--success-100)"));
        yield "; color: ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 68, $this->source); })()), "isDelayed", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("var(--red-600)") : ("var(--success-600)"));
        yield ";\">
                <i data-lucide=\"calendar\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Délai</span>
                ";
        // line 73
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 73, $this->source); })()), "daysRemaining", [], "any", false, false, false, 73))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 74, $this->source); })()), "daysRemaining", [], "any", false, false, false, 74) >= 0)) {
                // line 75
                yield "                        <span class=\"metric-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 75, $this->source); })()), "daysRemaining", [], "any", false, false, false, 75), "html", null, true);
                yield " jours restants</span>
                    ";
            } else {
                // line 77
                yield "                        <span class=\"metric-value text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 77, $this->source); })()), "daysRemaining", [], "any", false, false, false, 77) *  -1), "html", null, true);
                yield " jours de retard</span>
                    ";
            }
            // line 79
            yield "                ";
        } else {
            // line 80
            yield "                    <span class=\"metric-value\">Non défini</span>
                ";
        }
        // line 82
        yield "            </div>
        </div>
    </section>

    <div class=\"detail-grid\">
        ";
        // line 88
        yield "        <div class=\"detail-column\">
            ";
        // line 90
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"info\"></i>
                        Informations Générales
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-group\">
                        <label>Institution Responsable</label>
                        <value>";
        // line 100
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 100, $this->source); })()), "institution", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 100, $this->source); })()), "institution", [], "any", false, false, false, 100), "nom", [], "any", false, false, false, 100), "html", null, true)) : ("Non définie"));
        yield "</value>
                    </div>
                    <div class=\"info-group\">
                        <label>Secteur</label>
                        <value><span class=\"badge badge-sector\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 104, $this->source); })()), "sector", [], "any", false, false, false, 104), "html", null, true);
        yield "</span></value>
                    </div>
                    <div class=\"info-group\">
                        <label>Période</label>
                        <value>
                            Du ";
        // line 109
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 109, $this->source); })()), "dateDebut", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 109, $this->source); })()), "dateDebut", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
                            au ";
        // line 110
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 110, $this->source); })()), "dateFin", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 110, $this->source); })()), "dateFin", [], "any", false, false, false, 110), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
                        </value>
                    </div>
                    <div class=\"info-group\">
                        <label>Localisation</label>
                        <value>";
        // line 115
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "localisation", [], "any", true, true, false, 115) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 115, $this->source); })()), "localisation", [], "any", false, false, false, 115)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 115, $this->source); })()), "localisation", [], "any", false, false, false, 115), "html", null, true)) : ("Non précisée"));
        yield "</value>
                    </div>
                    ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 117, $this->source); })()), "description", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                    <div class=\"info-group\">
                        <label>Description</label>
                        <value class=\"description-text\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 120, $this->source); })()), "description", [], "any", false, false, false, 120), "html", null, true);
            yield "</value>
                    </div>
                    ";
        }
        // line 123
        yield "                </div>
            </section>

            ";
        // line 127
        yield "          <div class=\"financing-details-page\">


    <!-- Résumé Global -->
    <section class=\"financing-summary\">
        <h2 class=\"section-title\">
            <i data-lucide=\"wallet\"></i>
            Résumé Global du Financement
        </h2>

        <div class=\"summary-grid\">
            <!-- Budget Total vs Financement -->
            <div class=\"summary-card card-primary\">
                <div class=\"card-icon\">
                    <i data-lucide=\"banknote\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Budget Total du Projet</span>
                    <span class=\"card-value\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 145, $this->source); })()), "resume", [], "any", false, false, false, 145), "budgetProjet", [], "any", false, false, false, 145) / 1000000000), 2, ".", " "), "html", null, true);
        yield " Mds</span>
                    <span class=\"card-sublabel\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 146, $this->source); })()), "resume", [], "any", false, false, false, 146), "budgetProjet", [], "any", false, false, false, 146), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                </div>
            </div>

            <!-- Total Engagé -->
            <div class=\"summary-card card-gold\">
                <div class=\"card-icon\">
                    <i data-lucide=\"trending-up\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Total Engagé</span>
                    <span class=\"card-value\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 157, $this->source); })()), "resume", [], "any", false, false, false, 157), "totalEngage", [], "any", false, false, false, 157) / 1000000000), 2, ".", " "), "html", null, true);
        yield " Mds</span>
                    <span class=\"card-sublabel\">
                        Couverture : ";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 159, $this->source); })()), "resume", [], "any", false, false, false, 159), "tauxCouvertureFinancement", [], "any", false, false, false, 159), "html", null, true);
        yield "%
                    </span>
                </div>
            </div>

            <!-- Total Décaissé -->
            <div class=\"summary-card card-success\">
                <div class=\"card-icon\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Total Décaissé</span>
                    <span class=\"card-value\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 171, $this->source); })()), "resume", [], "any", false, false, false, 171), "totalDecaisse", [], "any", false, false, false, 171) / 1000000000), 2, ".", " "), "html", null, true);
        yield " Mds</span>
                    <span class=\"card-sublabel\">
                        Taux : ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 173, $this->source); })()), "resume", [], "any", false, false, false, 173), "tauxDecaissementGlobal", [], "any", false, false, false, 173), "html", null, true);
        yield "%
                    </span>
                </div>
            </div>

            <!-- Montant Restant -->
            <div class=\"summary-card card-warning\">
                <div class=\"card-icon\">
                    <i data-lucide=\"alert-circle\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Montant Restant</span>
                    <span class=\"card-value\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 185, $this->source); })()), "resume", [], "any", false, false, false, 185), "totalRestant", [], "any", false, false, false, 185) / 1000000000), 2, ".", " "), "html", null, true);
        yield " Mds</span>
                    <span class=\"card-sublabel\">
                        À décaisser
                    </span>
                </div>
            </div>

            <!-- Nombre de Conventions -->
            <div class=\"summary-card card-info\">
                <div class=\"card-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Conventions</span>
                    <span class=\"card-value\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 199, $this->source); })()), "resume", [], "any", false, false, false, 199), "nombreFinancements", [], "any", false, false, false, 199), "html", null, true);
        yield "</span>
                    <span class=\"card-sublabel\">
                        ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 201, $this->source); })()), "resume", [], "any", false, false, false, 201), "nombreActifs", [], "any", false, false, false, 201), "html", null, true);
        yield " actives • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 201, $this->source); })()), "resume", [], "any", false, false, false, 201), "nombreInactifs", [], "any", false, false, false, 201), "html", null, true);
        yield " inactives
                    </span>
                </div>
            </div>

            <!-- Situation -->
            <div class=\"summary-card ";
        // line 207
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 207, $this->source); })()), "resume", [], "any", false, false, false, 207), "situationFinancement", [], "any", false, false, false, 207) == "Couvert")) {
            yield "card-success";
        } else {
            yield "card-danger";
        }
        yield "\">
                <div class=\"card-icon\">
                    <i data-lucide=\"";
        // line 209
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 209, $this->source); })()), "resume", [], "any", false, false, false, 209), "situationFinancement", [], "any", false, false, false, 209) == "Couvert")) {
            yield "shield-check";
        } else {
            yield "shield-alert";
        }
        yield "\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Situation</span>
                    <span class=\"card-value\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 213, $this->source); })()), "resume", [], "any", false, false, false, 213), "situationFinancement", [], "any", false, false, false, 213), "html", null, true);
        yield "</span>
                    <span class=\"card-sublabel\">
                        ";
        // line 215
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 215, $this->source); })()), "resume", [], "any", false, false, false, 215), "deficitExcedent", [], "any", false, false, false, 215) < 0)) {
            // line 216
            yield "                            Déficit : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(abs((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 216, $this->source); })()), "resume", [], "any", false, false, false, 216), "deficitExcedent", [], "any", false, false, false, 216) / 1000000)), 0), "html", null, true);
            yield " M FCFA
                        ";
        } else {
            // line 218
            yield "                            Excédent : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 218, $this->source); })()), "resume", [], "any", false, false, false, 218), "deficitExcedent", [], "any", false, false, false, 218) / 1000000), 0), "html", null, true);
            yield " M FCFA
                        ";
        }
        // line 220
        yield "                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Alertes -->
    ";
        // line 227
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 227, $this->source); })()), "alertes", [], "any", false, false, false, 227), "deficitFinancement", [], "any", false, false, false, 227) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 227, $this->source); })()), "alertes", [], "any", false, false, false, 227), "financementsExpires", [], "any", false, false, false, 227)) > 0)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 227, $this->source); })()), "alertes", [], "any", false, false, false, 227), "financementsProchesEcheance", [], "any", false, false, false, 227)) > 0)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 227, $this->source); })()), "alertes", [], "any", false, false, false, 227), "faibleTauxDecaissement", [], "any", false, false, false, 227))) {
            // line 228
            yield "    <section class=\"alerts-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"alert-triangle\"></i>
            Alertes et Recommandations
        </h2>

        <div class=\"alerts-grid\">
            ";
            // line 235
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 235, $this->source); })()), "alertes", [], "any", false, false, false, 235), "deficitFinancement", [], "any", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 236
                yield "            <div class=\"alert alert-danger\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"alert-octagon\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Déficit de Financement</strong>
                    <p>Le projet présente un déficit de financement de <strong>";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 242, $this->source); })()), "alertes", [], "any", false, false, false, 242), "montantDeficit", [], "any", false, false, false, 242) / 1000000), 0), "html", null, true);
                yield " M FCFA</strong></p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Rechercher des financements complémentaires</p>
                </div>
            </div>
            ";
            }
            // line 247
            yield "
            ";
            // line 248
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 248, $this->source); })()), "alertes", [], "any", false, false, false, 248), "financementsExpires", [], "any", false, false, false, 248)) > 0)) {
                // line 249
                yield "            <div class=\"alert alert-danger\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"x-circle\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Financements Expirés</strong>
                    <p><strong>";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 255, $this->source); })()), "alertes", [], "any", false, false, false, 255), "financementsExpires", [], "any", false, false, false, 255)), "html", null, true);
                yield "</strong> convention(s) ont dépassé leur date d'échéance</p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Négocier une extension ou clôturer</p>
                </div>
            </div>
            ";
            }
            // line 260
            yield "
            ";
            // line 261
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 261, $this->source); })()), "alertes", [], "any", false, false, false, 261), "financementsProchesEcheance", [], "any", false, false, false, 261)) > 0)) {
                // line 262
                yield "            <div class=\"alert alert-warning\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"clock\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Échéances Proches</strong>
                    <p><strong>";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 268, $this->source); })()), "alertes", [], "any", false, false, false, 268), "financementsProchesEcheance", [], "any", false, false, false, 268)), "html", null, true);
                yield "</strong> convention(s) arrivent à échéance dans moins de 90 jours</p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Planifier la clôture ou l'extension</p>
                </div>
            </div>
            ";
            }
            // line 273
            yield "
            ";
            // line 274
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 274, $this->source); })()), "alertes", [], "any", false, false, false, 274), "faibleTauxDecaissement", [], "any", false, false, false, 274)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 275
                yield "            <div class=\"alert alert-info\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"trending-down\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Faible Taux de Décaissement</strong>
                    <p>Le taux de décaissement global est de <strong>";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 281, $this->source); })()), "resume", [], "any", false, false, false, 281), "tauxDecaissementGlobal", [], "any", false, false, false, 281), "html", null, true);
                yield "%</strong> (inférieur à 50%)</p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Accélérer l'exécution du projet</p>
                </div>
            </div>
            ";
            }
            // line 286
            yield "        </div>
    </section>
    ";
        }
        // line 289
        yield "
    <!-- Principal Bailleur -->
    ";
        // line 291
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 291, $this->source); })()), "principalBailleur", [], "any", false, false, false, 291)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 292
            yield "    <section class=\"principal-bailleur-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"star\"></i>
            Principal Bailleur de Fonds
        </h2>

        <div class=\"principal-bailleur-card\">
            <div class=\"bailleur-info\">
                <div class=\"bailleur-name\">";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 300, $this->source); })()), "principalBailleur", [], "any", false, false, false, 300), "nom", [], "any", false, false, false, 300), "html", null, true);
            yield "</div>
                <div class=\"bailleur-stats\">
                    <div class=\"stat\">
                        <span class=\"stat-label\">Montant Engagé</span>
                        <span class=\"stat-value\">";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 304, $this->source); })()), "principalBailleur", [], "any", false, false, false, 304), "montantEngage", [], "any", false, false, false, 304) / 1000000000), 2), "html", null, true);
            yield " Mds FCFA</span>
                    </div>
                    <div class=\"stat\">
                        <span class=\"stat-label\">Part du Financement</span>
                        <span class=\"stat-value\">";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 308, $this->source); })()), "principalBailleur", [], "any", false, false, false, 308), "pourcentage", [], "any", false, false, false, 308), "html", null, true);
            yield "%</span>
                    </div>
                </div>
            </div>
            <div class=\"bailleur-visual\">
                <div class=\"percentage-circle\" data-percentage=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 313, $this->source); })()), "principalBailleur", [], "any", false, false, false, 313), "pourcentage", [], "any", false, false, false, 313), "html", null, true);
            yield "\">
                    <span class=\"percentage-text\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 314, $this->source); })()), "principalBailleur", [], "any", false, false, false, 314), "pourcentage", [], "any", false, false, false, 314), "html", null, true);
            yield "%</span>
                </div>
            </div>
        </div>
    </section>
    ";
        }
        // line 320
        yield "
    <!-- Liste des Financements -->
    <section class=\"financements-list-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"list\"></i>
            Liste des Financements (";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 325, $this->source); })()), "resume", [], "any", false, false, false, 325), "nombreFinancements", [], "any", false, false, false, 325), "html", null, true);
        yield ")
        </h2>

        <div class=\"financements-table-container\">
            <table class=\"financements-table\">
                <thead>
                    <tr>
                        <th>Convention</th>
                        <th>Bailleur</th>
                        <th>Type</th>
                        <th>Montant Engagé</th>
                        <th>Décaissé</th>
                        <th>Restant</th>
                        <th>Taux</th>
                        <th>Échéance</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 344, $this->source); })()), "financements", [], "any", false, false, false, 344));
        foreach ($context['_seq'] as $context["_key"] => $context["financement"]) {
            // line 345
            yield "                    <tr class=\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "isExpired", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "row-expired";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "isApproachingDeadline", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "row-warning";
            }
            yield "\">
                        <td>
                            <div class=\"convention-cell\">
                                <strong>";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "numeroConvention", [], "any", false, false, false, 348), "html", null, true);
            yield "</strong>
                                ";
            // line 349
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "isExpired", [], "any", false, false, false, 349)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 350
                yield "                                    <span class=\"badge badge-danger\">Expiré</span>
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 351
$context["financement"], "isApproachingDeadline", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 352
                yield "                                    <span class=\"badge badge-warning\">Proche échéance</span>
                                ";
            }
            // line 354
            yield "                            </div>
                        </td>
                        <td>
                            <div class=\"bailleur-cell\">
                                ";
            // line 358
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleurAcronyme", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 359
                yield "                                    <span class=\"bailleur-acronym\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleurAcronyme", [], "any", false, false, false, 359), "html", null, true);
                yield "</span>
                                ";
            }
            // line 361
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 361), "html", null, true);
            yield "
                            </div>
                        </td>
                        <td>
                            <span class=\"type-badge type-";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "typeKey", [], "any", false, false, false, 365), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "type", [], "any", false, false, false, 365), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"amount-cell\">
                            <strong>";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantEngage", [], "any", false, false, false, 368) / 1000000), 1), "html", null, true);
            yield " M</strong>
                            <small>FCFA</small>
                        </td>
                        <td class=\"amount-cell\">
                            ";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantDecaisse", [], "any", false, false, false, 372) / 1000000), 1), "html", null, true);
            yield " M
                        </td>
                        <td class=\"amount-cell\">
                            ";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantRestant", [], "any", false, false, false, 375) / 1000000), 1), "html", null, true);
            yield " M
                        </td>
                        <td class=\"progress-cell\">
                            <div class=\"progress-bar\">
                                <div class=\"progress-fill\" style=\"width: ";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 379), "html", null, true);
            yield "%; background: ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 379) >= 70)) {
                yield "#10b981";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 379) >= 40)) {
                yield "#f59e0b";
            } else {
                yield "#ef4444";
            }
            yield ";\"></div>
                            </div>
                            <span class=\"progress-text\">";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 381), "html", null, true);
            yield "%</span>
                        </td>
                        <td>
                            ";
            // line 384
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "dateEcheance", [], "any", false, false, false, 384)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 385
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "dateEcheance", [], "any", false, false, false, 385), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 387
                yield "                                <span class=\"text-muted\">Non défini</span>
                            ";
            }
            // line 389
            yield "                        </td>
                        <td>
                            <span class=\"status-badge status-";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statutKey", [], "any", false, false, false, 391), "html", null, true);
            yield "\">
                                ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statut", [], "any", false, false, false, 392), "html", null, true);
            yield "
                            </span>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['financement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        yield "                </tbody>
            </table>
        </div>
    </section>

    <!-- Graphiques de Répartition -->
    <section class=\"charts-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"pie-chart\"></i>
            Répartition du Financement
        </h2>

        <div class=\"charts-grid\">
            <!-- Répartition par Bailleur -->
            <div class=\"chart-card\">
                <h3 class=\"chart-title\">Par Bailleur</h3>
                <canvas id=\"bailleurChart\"></canvas>
                <div class=\"chart-legend\">
                    ";
        // line 415
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 415, $this->source); })()), "repartitionBailleur", [], "any", false, false, false, 415));
        foreach ($context['_seq'] as $context["bailleur"] => $context["data"]) {
            // line 416
            yield "                    <div class=\"legend-item\">
                        <span class=\"legend-label\">";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bailleur"], "html", null, true);
            yield "</span>
                        <span class=\"legend-value\">";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "engage", [], "any", false, false, false, 418) / 1000000), 0), "html", null, true);
            yield " M FCFA (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "taux", [], "any", false, false, false, 418), "html", null, true);
            yield "%)</span>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['bailleur'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        yield "                </div>
            </div>

            <!-- Répartition par Type -->
            <div class=\"chart-card\">
                <h3 class=\"chart-title\">Par Type de Financement</h3>
                <canvas id=\"typeChart\"></canvas>
                <div class=\"chart-legend\">
                    ";
        // line 429
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 429, $this->source); })()), "repartitionType", [], "any", false, false, false, 429));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 430
            yield "                    <div class=\"legend-item\">
                        <span class=\"legend-label\">";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "</span>
                        <span class=\"legend-value\">";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 432), "html", null, true);
            yield " convention(s) - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "engage", [], "any", false, false, false, 432) / 1000000), 0), "html", null, true);
            yield " M FCFA</span>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        yield "                </div>
            </div>
        </div>
    </section>

</div>

            ";
        // line 443
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 443, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 444
            yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"clipboard-check\"></i>
                        Audits et Contrôles
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"audit-timeline\">
                        ";
            // line 453
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 453, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
                // line 454
                yield "                        <div class=\"audit-item\">
                            <div class=\"audit-date\">";
                // line 455
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 455), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</div>
                            <div class=\"audit-content\">
                                <h5>";
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "typeAudit", [], "any", false, false, false, 457), "html", null, true);
                yield "</h5>
                                <p>";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "conclusion", [], "any", false, false, false, 458), 0, 100), "html", null, true);
                yield "...</p>
                                ";
                // line 459
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "recommendations", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 460
                    yield "                                    <span class=\"audit-tag\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "recommendations", [], "any", false, false, false, 460)), "html", null, true);
                    yield " recommandation(s)</span>
                                ";
                }
                // line 462
                yield "                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            yield "                    </div>
                </div>
            </section>
            ";
        }
        // line 469
        yield "        </div>

        ";
        // line 472
        yield "        <div class=\"detail-column\">
            ";
        // line 474
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"trending-up\"></i>
                        Progression Mensuelle
                    </h3>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"progressChart\" height=\"250\"></canvas>
                </div>
            </section>

            ";
        // line 487
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"coins\"></i>
                        Décaissements
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 495
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["decaissements"]) || array_key_exists("decaissements", $context) ? $context["decaissements"] : (function () { throw new RuntimeError('Variable "decaissements" does not exist.', 495, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 496
            yield "                        <div class=\"disbursement-list\">
                            ";
            // line 497
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["decaissements"]) || array_key_exists("decaissements", $context) ? $context["decaissements"] : (function () { throw new RuntimeError('Variable "decaissements" does not exist.', 497, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["disbursement"]) {
                // line 498
                yield "                            <div class=\"disbursement-item\">
                                <div class=\"disbursement-header\">
                                    <span class=\"disbursement-date\">";
                // line 500
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "dateDecaissement", [], "any", false, false, false, 500)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "dateDecaissement", [], "any", false, false, false, 500), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</span>
                                    <span class=\"disbursement-amount\">";
                // line 501
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "montant", [], "any", false, false, false, 501), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                </div>
                                <div class=\"disbursement-meta\">
                                    <span class=\"disbursement-status badge badge-";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "statut", [], "any", false, false, false, 504), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "statut", [], "any", false, false, false, 504), "html", null, true);
                yield "</span>
                                    ";
                // line 505
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "reference", [], "any", false, false, false, 505)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 506
                    yield "                                        <span class=\"disbursement-ref\">Réf: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "reference", [], "any", false, false, false, 506), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 508
                yield "                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['disbursement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            yield "                        </div>

                        ";
            // line 513
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 513, $this->source); })())) > 10)) {
                // line 514
                yield "                        <div class=\"card-footer\">
                            <a href=\"";
                // line 515
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["project" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 515, $this->source); })()), "id", [], "any", false, false, false, 515)]), "html", null, true);
                yield "\" class=\"btn-link-full\">
                                Voir tous les décaissements (";
                // line 516
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 516, $this->source); })())), "html", null, true);
                yield ")
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                        ";
            }
            // line 521
            yield "                    ";
        } else {
            // line 522
            yield "                        <p class=\"empty-message\">Aucun décaissement enregistré</p>
                    ";
        }
        // line 524
        yield "                </div>
            </section>

            ";
        // line 528
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"gauge\"></i>
                        Indicateurs de Performance
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"performance-indicators\">
                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Avancement Financier</div>
                            <div class=\"indicator-value\">";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 539, $this->source); })()), "financialProgress", [], "any", false, false, false, 539), "html", null, true);
        yield "%</div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: ";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 541, $this->source); })()), "financialProgress", [], "any", false, false, false, 541), "html", null, true);
        yield "%; background: var(--gold-500);\"></div>
                            </div>
                        </div>

                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Avancement Physique</div>
                            <div class=\"indicator-value\">";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 547, $this->source); })()), "physicalProgress", [], "any", false, false, false, 547), "html", null, true);
        yield "%</div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: ";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 549, $this->source); })()), "physicalProgress", [], "any", false, false, false, 549), "html", null, true);
        yield "%; background: var(--primary-500);\"></div>
                            </div>
                        </div>

                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Efficacité du Projet</div>
                            <div class=\"indicator-value\">
                                ";
        // line 556
        $context["efficiency"] = ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 556, $this->source); })()), "physicalProgress", [], "any", false, false, false, 556) > 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 556, $this->source); })()), "financialProgress", [], "any", false, false, false, 556) > 0))) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source,         // line 557
(isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 557, $this->source); })()), "physicalProgress", [], "any", false, false, false, 557) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 557, $this->source); })()), "financialProgress", [], "any", false, false, false, 557)) * 100), 0)) : (0));
        // line 559
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 559, $this->source); })()), "html", null, true);
        yield "%
                            </div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: ";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 562, $this->source); })()), "html", null, true);
        yield "%; 
                                     background: ";
        // line 563
        yield ((((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 563, $this->source); })()) > 90)) ? ("var(--success-500)") : (((((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 563, $this->source); })()) > 70)) ? ("var(--warning-500)") : ("var(--danger-500)"))));
        yield ";\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 574
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 575
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>

    <script>
        lucide.createIcons();

        // Graphique Progression Mensuelle
        const progressData = ";
        // line 584
        yield json_encode((isset($context["monthlyProgress"]) || array_key_exists("monthlyProgress", $context) ? $context["monthlyProgress"] : (function () { throw new RuntimeError('Variable "monthlyProgress" does not exist.', 584, $this->source); })()));
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
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString('fr-FR') + ' FCFA';
                                }
                            }
                        }
                    }
                }
            });
        }

           // Initialize icons
        lucide.createIcons();

        // Colors
        const colors = ['#004d99', '#daa520', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#ec4899', '#14b8a6'];

        // Bailleur Chart
        new Chart(document.getElementById('bailleurChart'), {
            type: 'doughnut',
            data: {
                labels: [
                    ";
        // line 633
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 633, $this->source); })()), "repartitionBailleur", [], "any", false, false, false, 633));
        foreach ($context['_seq'] as $context["bailleur"] => $context["data"]) {
            // line 634
            yield "                        '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bailleur"], "html", null, true);
            yield "',
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['bailleur'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        yield "                ],
                datasets: [{
                    data: [
                        ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 639, $this->source); })()), "repartitionBailleur", [], "any", false, false, false, 639));
        foreach ($context['_seq'] as $context["bailleur"] => $context["data"]) {
            // line 640
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "engage", [], "any", false, false, false, 640), "html", null, true);
            yield ",
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['bailleur'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        yield "                    ],
                    backgroundColor: colors
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = (context.raw / 1000000).toFixed(0);
                                return context.label + ': ' + value + ' M FCFA';
                            }
                        }
                    }
                }
            }
        });

        // Type Chart
        new Chart(document.getElementById('typeChart'), {
            type: 'pie',
            data: {
                labels: [
                    ";
        // line 670
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 670, $this->source); })()), "repartitionType", [], "any", false, false, false, 670));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 671
            yield "                        '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "',
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        yield "                ],
                datasets: [{
                    data: [
                        ";
        // line 676
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 676, $this->source); })()), "repartitionType", [], "any", false, false, false, 676));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 677
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "engage", [], "any", false, false, false, 677), "html", null, true);
            yield ",
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 679
        yield "                    ],
                    backgroundColor: colors
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = (context.raw / 1000000).toFixed(0);
                                return context.label + ': ' + value + ' M FCFA';
                            }
                        }
                    }
                }
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
        return array (  1268 => 679,  1259 => 677,  1255 => 676,  1250 => 673,  1241 => 671,  1237 => 670,  1207 => 642,  1198 => 640,  1194 => 639,  1189 => 636,  1180 => 634,  1176 => 633,  1124 => 584,  1111 => 575,  1101 => 574,  1083 => 563,  1079 => 562,  1072 => 559,  1070 => 557,  1069 => 556,  1059 => 549,  1054 => 547,  1045 => 541,  1040 => 539,  1027 => 528,  1022 => 524,  1018 => 522,  1015 => 521,  1007 => 516,  1003 => 515,  1000 => 514,  998 => 513,  994 => 511,  986 => 508,  980 => 506,  978 => 505,  972 => 504,  966 => 501,  962 => 500,  958 => 498,  954 => 497,  951 => 496,  949 => 495,  939 => 487,  925 => 474,  922 => 472,  918 => 469,  912 => 465,  904 => 462,  898 => 460,  896 => 459,  892 => 458,  888 => 457,  883 => 455,  880 => 454,  876 => 453,  865 => 444,  862 => 443,  853 => 435,  842 => 432,  838 => 431,  835 => 430,  831 => 429,  821 => 421,  810 => 418,  806 => 417,  803 => 416,  799 => 415,  779 => 397,  768 => 392,  764 => 391,  760 => 389,  756 => 387,  750 => 385,  748 => 384,  742 => 381,  729 => 379,  722 => 375,  716 => 372,  709 => 368,  701 => 365,  693 => 361,  687 => 359,  685 => 358,  679 => 354,  675 => 352,  673 => 351,  670 => 350,  668 => 349,  664 => 348,  653 => 345,  649 => 344,  627 => 325,  620 => 320,  611 => 314,  607 => 313,  599 => 308,  592 => 304,  585 => 300,  575 => 292,  573 => 291,  569 => 289,  564 => 286,  556 => 281,  548 => 275,  546 => 274,  543 => 273,  535 => 268,  527 => 262,  525 => 261,  522 => 260,  514 => 255,  506 => 249,  504 => 248,  501 => 247,  493 => 242,  485 => 236,  483 => 235,  474 => 228,  472 => 227,  463 => 220,  457 => 218,  451 => 216,  449 => 215,  444 => 213,  433 => 209,  424 => 207,  413 => 201,  408 => 199,  391 => 185,  376 => 173,  371 => 171,  356 => 159,  351 => 157,  337 => 146,  333 => 145,  313 => 127,  308 => 123,  302 => 120,  298 => 118,  296 => 117,  291 => 115,  283 => 110,  279 => 109,  271 => 104,  264 => 100,  252 => 90,  249 => 88,  242 => 82,  238 => 80,  235 => 79,  229 => 77,  223 => 75,  220 => 74,  218 => 73,  208 => 68,  199 => 62,  194 => 60,  181 => 50,  177 => 49,  164 => 39,  155 => 32,  147 => 26,  143 => 25,  137 => 24,  131 => 21,  127 => 20,  120 => 16,  116 => 14,  113 => 12,  103 => 11,  93 => 8,  88 => 7,  78 => 6,  60 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Template de détail d'un projet - Dashboard Top Management #}
{% extends 'management.html.twig' %}

{% block title %}{{ project.name }} - Détail Projet - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/project_details.css') }}\">
{% endblock %}

{% block body %}
<div class=\"project-detail-container\">
    {# Header Projet #}
    <div class=\"detail-header\">
        <div class=\"header-left\">
            <a href=\"{{ path('app_top_management_dashboard') }}\" class=\"btn-back\">
                <i data-lucide=\"arrow-left\"></i>
                Retour au dashboard
            </a>
            <h1 class=\"project-title\">{{ project.name }}</h1>
            <span class=\"project-code\">{{ project.code }}</span>
        </div>
        <div class=\"header-right\">
            <span class=\"badge badge-{{ project.status }}\">{{ project.status }}</span>
            <span class=\"risk-badge risk-{{ metrics.riskLevel|lower }}\">
                Risque: {{ metrics.riskLevel }}
            </span>
        </div>
    </div>

    {# Métriques Principales #}
    <section class=\"metrics-grid\">
        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--gold-100); color: var(--gold-600);\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Budget Total</span>
                <span class=\"metric-value\">{{ metrics.totalBudget|number_format(0, ',', ' ') }} FCFA</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--success-100); color: var(--success-600);\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Décaissé</span>
                <span class=\"metric-value\">{{ metrics.totalDisbursed|number_format(0, ',', ' ') }} FCFA</span>
                <span class=\"metric-sublabel\">{{ metrics.disbursementRate }}% du budget</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--primary-100); color: var(--primary-600);\">
                <i data-lucide=\"activity\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Réalisation Physique</span>
                <span class=\"metric-value\">{{ metrics.physicalProgress }}%</span>
                <div class=\"progress-bar-mini\">
                    <div class=\"progress-fill-mini\" style=\"width: {{ metrics.physicalProgress }}%\"></div>
                </div>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: {{ metrics.isDelayed ? 'var(--red-100)' : 'var(--success-100)' }}; color: {{ metrics.isDelayed ? 'var(--red-600)' : 'var(--success-600)' }};\">
                <i data-lucide=\"calendar\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Délai</span>
                {% if metrics.daysRemaining is not null %}
                    {% if metrics.daysRemaining >= 0 %}
                        <span class=\"metric-value\">{{ metrics.daysRemaining }} jours restants</span>
                    {% else %}
                        <span class=\"metric-value text-danger\">{{ metrics.daysRemaining * -1 }} jours de retard</span>
                    {% endif %}
                {% else %}
                    <span class=\"metric-value\">Non défini</span>
                {% endif %}
            </div>
        </div>
    </section>

    <div class=\"detail-grid\">
        {# Colonne Gauche #}
        <div class=\"detail-column\">
            {# Informations Générales #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"info\"></i>
                        Informations Générales
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-group\">
                        <label>Institution Responsable</label>
                        <value>{{ project.institution ? project.institution.nom : 'Non définie' }}</value>
                    </div>
                    <div class=\"info-group\">
                        <label>Secteur</label>
                        <value><span class=\"badge badge-sector\">{{ project.sector }}</span></value>
                    </div>
                    <div class=\"info-group\">
                        <label>Période</label>
                        <value>
                            Du {{ project.dateDebut ? project.dateDebut|date('d/m/Y') : 'N/A' }}
                            au {{ project.dateFin ? project.dateFin|date('d/m/Y') : 'N/A' }}
                        </value>
                    </div>
                    <div class=\"info-group\">
                        <label>Localisation</label>
                        <value>{{ project.localisation ?? 'Non précisée' }}</value>
                    </div>
                    {% if project.description %}
                    <div class=\"info-group\">
                        <label>Description</label>
                        <value class=\"description-text\">{{ project.description }}</value>
                    </div>
                    {% endif %}
                </div>
            </section>

            {# Financements #}
          <div class=\"financing-details-page\">


    <!-- Résumé Global -->
    <section class=\"financing-summary\">
        <h2 class=\"section-title\">
            <i data-lucide=\"wallet\"></i>
            Résumé Global du Financement
        </h2>

        <div class=\"summary-grid\">
            <!-- Budget Total vs Financement -->
            <div class=\"summary-card card-primary\">
                <div class=\"card-icon\">
                    <i data-lucide=\"banknote\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Budget Total du Projet</span>
                    <span class=\"card-value\">{{ (financingDetails.resume.budgetProjet / 1000000000)|number_format(2, '.', ' ') }} Mds</span>
                    <span class=\"card-sublabel\">{{ financingDetails.resume.budgetProjet|number_format(0, ',', ' ') }} FCFA</span>
                </div>
            </div>

            <!-- Total Engagé -->
            <div class=\"summary-card card-gold\">
                <div class=\"card-icon\">
                    <i data-lucide=\"trending-up\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Total Engagé</span>
                    <span class=\"card-value\">{{ (financingDetails.resume.totalEngage / 1000000000)|number_format(2, '.', ' ') }} Mds</span>
                    <span class=\"card-sublabel\">
                        Couverture : {{ financingDetails.resume.tauxCouvertureFinancement }}%
                    </span>
                </div>
            </div>

            <!-- Total Décaissé -->
            <div class=\"summary-card card-success\">
                <div class=\"card-icon\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Total Décaissé</span>
                    <span class=\"card-value\">{{ (financingDetails.resume.totalDecaisse / 1000000000)|number_format(2, '.', ' ') }} Mds</span>
                    <span class=\"card-sublabel\">
                        Taux : {{ financingDetails.resume.tauxDecaissementGlobal }}%
                    </span>
                </div>
            </div>

            <!-- Montant Restant -->
            <div class=\"summary-card card-warning\">
                <div class=\"card-icon\">
                    <i data-lucide=\"alert-circle\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Montant Restant</span>
                    <span class=\"card-value\">{{ (financingDetails.resume.totalRestant / 1000000000)|number_format(2, '.', ' ') }} Mds</span>
                    <span class=\"card-sublabel\">
                        À décaisser
                    </span>
                </div>
            </div>

            <!-- Nombre de Conventions -->
            <div class=\"summary-card card-info\">
                <div class=\"card-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Conventions</span>
                    <span class=\"card-value\">{{ financingDetails.resume.nombreFinancements }}</span>
                    <span class=\"card-sublabel\">
                        {{ financingDetails.resume.nombreActifs }} actives • {{ financingDetails.resume.nombreInactifs }} inactives
                    </span>
                </div>
            </div>

            <!-- Situation -->
            <div class=\"summary-card {% if financingDetails.resume.situationFinancement == 'Couvert' %}card-success{% else %}card-danger{% endif %}\">
                <div class=\"card-icon\">
                    <i data-lucide=\"{% if financingDetails.resume.situationFinancement == 'Couvert' %}shield-check{% else %}shield-alert{% endif %}\"></i>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-label\">Situation</span>
                    <span class=\"card-value\">{{ financingDetails.resume.situationFinancement }}</span>
                    <span class=\"card-sublabel\">
                        {% if financingDetails.resume.deficitExcedent < 0 %}
                            Déficit : {{ (financingDetails.resume.deficitExcedent / 1000000)|abs|number_format(0) }} M FCFA
                        {% else %}
                            Excédent : {{ (financingDetails.resume.deficitExcedent / 1000000)|number_format(0) }} M FCFA
                        {% endif %}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Alertes -->
    {% if financingDetails.alertes.deficitFinancement or financingDetails.alertes.financementsExpires|length > 0 or financingDetails.alertes.financementsProchesEcheance|length > 0 or financingDetails.alertes.faibleTauxDecaissement %}
    <section class=\"alerts-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"alert-triangle\"></i>
            Alertes et Recommandations
        </h2>

        <div class=\"alerts-grid\">
            {% if financingDetails.alertes.deficitFinancement %}
            <div class=\"alert alert-danger\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"alert-octagon\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Déficit de Financement</strong>
                    <p>Le projet présente un déficit de financement de <strong>{{ (financingDetails.alertes.montantDeficit / 1000000)|number_format(0) }} M FCFA</strong></p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Rechercher des financements complémentaires</p>
                </div>
            </div>
            {% endif %}

            {% if financingDetails.alertes.financementsExpires|length > 0 %}
            <div class=\"alert alert-danger\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"x-circle\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Financements Expirés</strong>
                    <p><strong>{{ financingDetails.alertes.financementsExpires|length }}</strong> convention(s) ont dépassé leur date d'échéance</p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Négocier une extension ou clôturer</p>
                </div>
            </div>
            {% endif %}

            {% if financingDetails.alertes.financementsProchesEcheance|length > 0 %}
            <div class=\"alert alert-warning\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"clock\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Échéances Proches</strong>
                    <p><strong>{{ financingDetails.alertes.financementsProchesEcheance|length }}</strong> convention(s) arrivent à échéance dans moins de 90 jours</p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Planifier la clôture ou l'extension</p>
                </div>
            </div>
            {% endif %}

            {% if financingDetails.alertes.faibleTauxDecaissement %}
            <div class=\"alert alert-info\">
                <div class=\"alert-icon\">
                    <i data-lucide=\"trending-down\"></i>
                </div>
                <div class=\"alert-content\">
                    <strong>Faible Taux de Décaissement</strong>
                    <p>Le taux de décaissement global est de <strong>{{ financingDetails.resume.tauxDecaissementGlobal }}%</strong> (inférieur à 50%)</p>
                    <p class=\"alert-recommendation\">🎯 Recommandation : Accélérer l'exécution du projet</p>
                </div>
            </div>
            {% endif %}
        </div>
    </section>
    {% endif %}

    <!-- Principal Bailleur -->
    {% if financingDetails.principalBailleur %}
    <section class=\"principal-bailleur-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"star\"></i>
            Principal Bailleur de Fonds
        </h2>

        <div class=\"principal-bailleur-card\">
            <div class=\"bailleur-info\">
                <div class=\"bailleur-name\">{{ financingDetails.principalBailleur.nom }}</div>
                <div class=\"bailleur-stats\">
                    <div class=\"stat\">
                        <span class=\"stat-label\">Montant Engagé</span>
                        <span class=\"stat-value\">{{ (financingDetails.principalBailleur.montantEngage / 1000000000)|number_format(2) }} Mds FCFA</span>
                    </div>
                    <div class=\"stat\">
                        <span class=\"stat-label\">Part du Financement</span>
                        <span class=\"stat-value\">{{ financingDetails.principalBailleur.pourcentage }}%</span>
                    </div>
                </div>
            </div>
            <div class=\"bailleur-visual\">
                <div class=\"percentage-circle\" data-percentage=\"{{ financingDetails.principalBailleur.pourcentage }}\">
                    <span class=\"percentage-text\">{{ financingDetails.principalBailleur.pourcentage }}%</span>
                </div>
            </div>
        </div>
    </section>
    {% endif %}

    <!-- Liste des Financements -->
    <section class=\"financements-list-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"list\"></i>
            Liste des Financements ({{ financingDetails.resume.nombreFinancements }})
        </h2>

        <div class=\"financements-table-container\">
            <table class=\"financements-table\">
                <thead>
                    <tr>
                        <th>Convention</th>
                        <th>Bailleur</th>
                        <th>Type</th>
                        <th>Montant Engagé</th>
                        <th>Décaissé</th>
                        <th>Restant</th>
                        <th>Taux</th>
                        <th>Échéance</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    {% for financement in financingDetails.financements %}
                    <tr class=\"{% if financement.isExpired %}row-expired{% elseif financement.isApproachingDeadline %}row-warning{% endif %}\">
                        <td>
                            <div class=\"convention-cell\">
                                <strong>{{ financement.numeroConvention }}</strong>
                                {% if financement.isExpired %}
                                    <span class=\"badge badge-danger\">Expiré</span>
                                {% elseif financement.isApproachingDeadline %}
                                    <span class=\"badge badge-warning\">Proche échéance</span>
                                {% endif %}
                            </div>
                        </td>
                        <td>
                            <div class=\"bailleur-cell\">
                                {% if financement.bailleurAcronyme %}
                                    <span class=\"bailleur-acronym\">{{ financement.bailleurAcronyme }}</span>
                                {% endif %}
                                {{ financement.bailleur }}
                            </div>
                        </td>
                        <td>
                            <span class=\"type-badge type-{{ financement.typeKey }}\">{{ financement.type }}</span>
                        </td>
                        <td class=\"amount-cell\">
                            <strong>{{ (financement.montantEngage / 1000000)|number_format(1) }} M</strong>
                            <small>FCFA</small>
                        </td>
                        <td class=\"amount-cell\">
                            {{ (financement.montantDecaisse / 1000000)|number_format(1) }} M
                        </td>
                        <td class=\"amount-cell\">
                            {{ (financement.montantRestant / 1000000)|number_format(1) }} M
                        </td>
                        <td class=\"progress-cell\">
                            <div class=\"progress-bar\">
                                <div class=\"progress-fill\" style=\"width: {{ financement.tauxDecaissement }}%; background: {% if financement.tauxDecaissement >= 70 %}#10b981{% elseif financement.tauxDecaissement >= 40 %}#f59e0b{% else %}#ef4444{% endif %};\"></div>
                            </div>
                            <span class=\"progress-text\">{{ financement.tauxDecaissement }}%</span>
                        </td>
                        <td>
                            {% if financement.dateEcheance %}
                                {{ financement.dateEcheance|date('d/m/Y') }}
                            {% else %}
                                <span class=\"text-muted\">Non défini</span>
                            {% endif %}
                        </td>
                        <td>
                            <span class=\"status-badge status-{{ financement.statutKey }}\">
                                {{ financement.statut }}
                            </span>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </section>

    <!-- Graphiques de Répartition -->
    <section class=\"charts-section\">
        <h2 class=\"section-title\">
            <i data-lucide=\"pie-chart\"></i>
            Répartition du Financement
        </h2>

        <div class=\"charts-grid\">
            <!-- Répartition par Bailleur -->
            <div class=\"chart-card\">
                <h3 class=\"chart-title\">Par Bailleur</h3>
                <canvas id=\"bailleurChart\"></canvas>
                <div class=\"chart-legend\">
                    {% for bailleur, data in financingDetails.repartitionBailleur %}
                    <div class=\"legend-item\">
                        <span class=\"legend-label\">{{ bailleur }}</span>
                        <span class=\"legend-value\">{{ (data.engage / 1000000)|number_format(0) }} M FCFA ({{ data.taux }}%)</span>
                    </div>
                    {% endfor %}
                </div>
            </div>

            <!-- Répartition par Type -->
            <div class=\"chart-card\">
                <h3 class=\"chart-title\">Par Type de Financement</h3>
                <canvas id=\"typeChart\"></canvas>
                <div class=\"chart-legend\">
                    {% for type, data in financingDetails.repartitionType %}
                    <div class=\"legend-item\">
                        <span class=\"legend-label\">{{ type }}</span>
                        <span class=\"legend-value\">{{ data.count }} convention(s) - {{ (data.engage / 1000000)|number_format(0) }} M FCFA</span>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>

</div>

            {# Audits et Contrôles #}
            {% if audits is not empty %}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"clipboard-check\"></i>
                        Audits et Contrôles
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"audit-timeline\">
                        {% for audit in audits|slice(0, 5) %}
                        <div class=\"audit-item\">
                            <div class=\"audit-date\">{{ audit.dateAudit ? audit.dateAudit|date('d/m/Y') : 'N/A' }}</div>
                            <div class=\"audit-content\">
                                <h5>{{ audit.typeAudit }}</h5>
                                <p>{{ audit.conclusion|slice(0, 100) }}...</p>
                                {% if audit.recommendations %}
                                    <span class=\"audit-tag\">{{ audit.recommendations|length }} recommandation(s)</span>
                                {% endif %}
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </section>
            {% endif %}
        </div>

        {# Colonne Droite #}
        <div class=\"detail-column\">
            {# Graphique Progression Mensuelle #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"trending-up\"></i>
                        Progression Mensuelle
                    </h3>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"progressChart\" height=\"250\"></canvas>
                </div>
            </section>

            {# Décaissements #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"coins\"></i>
                        Décaissements
                    </h3>
                </div>
                <div class=\"card-body\">
                    {% if decaissements is not empty %}
                        <div class=\"disbursement-list\">
                            {% for disbursement in decaissements|slice(0, 10) %}
                            <div class=\"disbursement-item\">
                                <div class=\"disbursement-header\">
                                    <span class=\"disbursement-date\">{{ disbursement.dateDecaissement ? disbursement.dateDecaissement|date('d/m/Y') : 'N/A' }}</span>
                                    <span class=\"disbursement-amount\">{{ disbursement.montant|number_format(0, ',', ' ') }} FCFA</span>
                                </div>
                                <div class=\"disbursement-meta\">
                                    <span class=\"disbursement-status badge badge-{{ disbursement.statut }}\">{{ disbursement.statut }}</span>
                                    {% if disbursement.reference %}
                                        <span class=\"disbursement-ref\">Réf: {{ disbursement.reference }}</span>
                                    {% endif %}
                                </div>
                            </div>
                            {% endfor %}
                        </div>

                        {% if disbursements|length > 10 %}
                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_decaissement_index', {project: project.id}) }}\" class=\"btn-link-full\">
                                Voir tous les décaissements ({{ disbursements|length }})
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                        {% endif %}
                    {% else %}
                        <p class=\"empty-message\">Aucun décaissement enregistré</p>
                    {% endif %}
                </div>
            </section>

            {# Indicateurs de Performance #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"gauge\"></i>
                        Indicateurs de Performance
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"performance-indicators\">
                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Avancement Financier</div>
                            <div class=\"indicator-value\">{{ metrics.financialProgress }}%</div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: {{ metrics.financialProgress }}%; background: var(--gold-500);\"></div>
                            </div>
                        </div>

                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Avancement Physique</div>
                            <div class=\"indicator-value\">{{ metrics.physicalProgress }}%</div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: {{ metrics.physicalProgress }}%; background: var(--primary-500);\"></div>
                            </div>
                        </div>

                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Efficacité du Projet</div>
                            <div class=\"indicator-value\">
                                {% set efficiency = metrics.physicalProgress > 0 and metrics.financialProgress > 0 
                                    ? (metrics.physicalProgress / metrics.financialProgress * 100)|round(0) 
                                    : 0 %}
                                {{ efficiency }}%
                            </div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: {{ efficiency }}%; 
                                     background: {{ efficiency > 90 ? 'var(--success-500)' : (efficiency > 70 ? 'var(--warning-500)' : 'var(--danger-500)') }};\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>

    <script>
        lucide.createIcons();

        // Graphique Progression Mensuelle
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
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString('fr-FR') + ' FCFA';
                                }
                            }
                        }
                    }
                }
            });
        }

           // Initialize icons
        lucide.createIcons();

        // Colors
        const colors = ['#004d99', '#daa520', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#ec4899', '#14b8a6'];

        // Bailleur Chart
        new Chart(document.getElementById('bailleurChart'), {
            type: 'doughnut',
            data: {
                labels: [
                    {% for bailleur, data in financingDetails.repartitionBailleur %}
                        '{{ bailleur }}',
                    {% endfor %}
                ],
                datasets: [{
                    data: [
                        {% for bailleur, data in financingDetails.repartitionBailleur %}
                            {{ data.engage }},
                        {% endfor %}
                    ],
                    backgroundColor: colors
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = (context.raw / 1000000).toFixed(0);
                                return context.label + ': ' + value + ' M FCFA';
                            }
                        }
                    }
                }
            }
        });

        // Type Chart
        new Chart(document.getElementById('typeChart'), {
            type: 'pie',
            data: {
                labels: [
                    {% for type, data in financingDetails.repartitionType %}
                        '{{ type }}',
                    {% endfor %}
                ],
                datasets: [{
                    data: [
                        {% for type, data in financingDetails.repartitionType %}
                            {{ data.engage }},
                        {% endfor %}
                    ],
                    backgroundColor: colors
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = (context.raw / 1000000).toFixed(0);
                                return context.label + ': ' + value + ' M FCFA';
                            }
                        }
                    }
                }
            }
        });
    </script>
{% endblock %}
", "top_management/project_details.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\top_management\\project_details.html.twig");
    }
}
