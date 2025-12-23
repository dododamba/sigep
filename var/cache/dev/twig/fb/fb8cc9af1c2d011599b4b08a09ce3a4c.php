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

/* project/show.html.twig */
class __TwigTemplate_6a6ef283fe8613c7fda71a145fe29da0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

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
        yield " - SIGEP Tchad";
        
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
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/project-show.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i>
                Retour aux projets
            </a>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i data-lucide=\"edit-3\"></i>
                Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger-outline\" onclick=\"openDeleteModal()\">
                <i data-lucide=\"trash-2\"></i>
                Supprimer
            </button>
        </div>
    </div>

    <!-- Project Hero Card -->
    <div class=\"project-hero\">
        <div class=\"project-hero-header\">
            <div class=\"project-icon-large ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 34, $this->source); })()), "sector", [], "any", false, false, false, 34), "html", null, true);
        yield "\">
                <i data-lucide=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 35, $this->source); })()), "sectorIcon", [], "any", false, false, false, 35), "html", null, true);
        yield "\"></i>
            </div>
            <div class=\"project-hero-info\">
                <div class=\"project-badges\">
                    <span class=\"sector-badge ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 39, $this->source); })()), "sector", [], "any", false, false, false, 39), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 39, $this->source); })()), "sectorLabel", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                    <span class=\"status-badge ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 40, $this->source); })()), "statusLabel", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                    <span class=\"priority-badge ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 41, $this->source); })()), "priorite", [], "any", false, false, false, 41), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 41, $this->source); })()), "prioriteLabel", [], "any", false, false, false, 41), "html", null, true);
        yield "</span>
                </div>
                <h1>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        yield "</h1>
                <div class=\"project-meta\">
                    <span class=\"project-code\">
                        <i data-lucide=\"hash\"></i>
                        ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 47, $this->source); })()), "code", [], "any", false, false, false, 47), "html", null, true);
        yield "
                    </span>
                    ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 49, $this->source); })()), "localisation", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                    <span class=\"project-location\">
                        <i data-lucide=\"map-pin\"></i>
                        ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 52, $this->source); })()), "localisation", [], "any", false, false, false, 52), "html", null, true);
            yield "
                    </span>
                    ";
        }
        // line 55
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 55, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                    <span class=\"project-owner\">
                        <i data-lucide=\"building\"></i>
                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 58, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 58), "html", null, true);
            yield "
                    </span>
                    ";
        }
        // line 61
        yield "                </div>
            </div>
        </div>

        <!-- Progress Section -->
        <div class=\"project-progress-section\">
            <div class=\"progress-header\">
                <span class=\"progress-label\">Progression globale</span>
                <span class=\"progress-value ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 69, $this->source); })()), "progress", [], "any", false, false, false, 69) >= 80)) {
            yield "green";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 69, $this->source); })()), "progress", [], "any", false, false, false, 69) >= 50)) {
            yield "blue";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 69, $this->source); })()), "progress", [], "any", false, false, false, 69) >= 25)) {
            yield "gold";
        } else {
            yield "red";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 69, $this->source); })()), "progress", [], "any", false, false, false, 69), "html", null, true);
        yield "%</span>
            </div>
            <div class=\"progress-bar-large\">
                <div class=\"progress-fill-large ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 72, $this->source); })()), "progress", [], "any", false, false, false, 72) >= 80)) {
            yield "green";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 72, $this->source); })()), "progress", [], "any", false, false, false, 72) >= 50)) {
            yield "blue";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 72, $this->source); })()), "progress", [], "any", false, false, false, 72) >= 25)) {
            yield "gold";
        } else {
            yield "red";
        }
        yield "\" 
                     style=\"width: ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 73, $this->source); })()), "progress", [], "any", false, false, false, 73), "html", null, true);
        yield "%\"></div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-icon blue\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 85, $this->source); })()), "budgetTotal", [], "any", false, false, false, 85), 2, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"stat-label\">Budget total (Mds FCFA)</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon green\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 94, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 94), 2, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"stat-label\">Montant décaissé (Mds FCFA)</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon gold\">
                <i data-lucide=\"percent\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 103, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 103), "html", null, true);
        yield "%</span>
                <span class=\"stat-label\">Taux de décaissement</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon purple\">
                <i data-lucide=\"users\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "beneficiaires", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 112, $this->source); })()), "beneficiaires", [], "any", false, false, false, 112), "N/A")) : ("N/A")), "html", null, true);
        yield "</span>
                <span class=\"stat-label\">Bénéficiaires</span>
            </div>
        </div>
    </div>

    <!-- Details Grid -->
    <div class=\"details-grid\">
        <!-- Description -->
        ";
        // line 121
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 121, $this->source); })()), "description", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"file-text\"></i>
                <h3>Description</h3>
            </div>
            <div class=\"detail-card-body\">
                <p>";
            // line 128
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 128, $this->source); })()), "description", [], "any", false, false, false, 128), "html", null, true));
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 132
        yield "
        <!-- Dates -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"calendar\"></i>
                <h3>Planning</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de début</span>
                    <span class=\"detail-value\">";
        // line 142
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 142, $this->source); })()), "dateDebut", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 142, $this->source); })()), "dateDebut", [], "any", false, false, false, 142), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de fin prévue</span>
                    <span class=\"detail-value\">";
        // line 146
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 146, $this->source); })()), "dateFin", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 146, $this->source); })()), "dateFin", [], "any", false, false, false, 146), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</span>
                </div>
                ";
        // line 148
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 148, $this->source); })()), "dateDebut", [], "any", false, false, false, 148) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 148, $this->source); })()), "dateFin", [], "any", false, false, false, 148))) {
            // line 149
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée</span>
                    <span class=\"detail-value\">
                        ";
            // line 152
            $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 152, $this->source); })()), "dateFin", [], "any", false, false, false, 152), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 152, $this->source); })()), "dateDebut", [], "any", false, false, false, 152)], "method", false, false, false, 152);
            // line 153
            yield "                        ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 153, $this->source); })()), "y", [], "any", false, false, false, 153) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 153, $this->source); })()), "y", [], "any", false, false, false, 153) . " an(s) "), "html", null, true)) : (""));
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 153, $this->source); })()), "m", [], "any", false, false, false, 153) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 153, $this->source); })()), "m", [], "any", false, false, false, 153) . " mois"), "html", null, true)) : (""));
            yield "
                    </span>
                </div>
                ";
        }
        // line 157
        yield "            </div>
        </div>

        <!-- Financement -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"coins\"></i>
                <h3>Financement</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Source</span>
                    <span class=\"detail-value\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "sourceFinancement", [], "any", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 169, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 169), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</span>
                </div>
                ";
        // line 171
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 171, $this->source); })()), "financementNational", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 172
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">National</span>
                    <span class=\"detail-value\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 174, $this->source); })()), "financementNational", [], "any", false, false, false, 174), 2, ",", " "), "html", null, true);
            yield " Mds FCFA</span>
                </div>
                ";
        }
        // line 177
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 177, $this->source); })()), "financementPartenaires", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Partenaires</span>
                    <span class=\"detail-value\">";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 180, $this->source); })()), "financementPartenaires", [], "any", false, false, false, 180), 2, ",", " "), "html", null, true);
            yield " Mds FCFA</span>
                </div>
                ";
        }
        // line 183
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 183, $this->source); })()), "financementAutre", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Autres</span>
                    <span class=\"detail-value\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 186, $this->source); })()), "financementAutre", [], "any", false, false, false, 186), 2, ",", " "), "html", null, true);
            yield " Mds FCFA</span>
                </div>
                ";
        }
        // line 189
        yield "            </div>
        </div>

        <!-- Responsables -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"users\"></i>
                <h3>Responsables</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Maître d'ouvrage</span>
                    <span class=\"detail-value\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "maitreOuvrage", [], "any", true, true, false, 201)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 201, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 201), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Chef de projet</span>
                    <span class=\"detail-value\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "chefProjet", [], "any", true, true, false, 205)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 205, $this->source); })()), "chefProjet", [], "any", false, false, false, 205), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</span>
                </div>
                ";
        // line 207
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 207, $this->source); })()), "institution", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Institution</span>
                    <span class=\"detail-value\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 210, $this->source); })()), "institution", [], "any", false, false, false, 210), "name", [], "any", false, false, false, 210), "html", null, true);
            yield "</span>
                </div>
                ";
        }
        // line 213
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 213, $this->source); })()), "partnerPrincipal", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 214
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Partenaire principal</span>
                    <span class=\"detail-value\">";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 216, $this->source); })()), "partnerPrincipal", [], "any", false, false, false, 216), "name", [], "any", false, false, false, 216), "html", null, true);
            yield "</span>
                </div>
                ";
        }
        // line 219
        yield "            </div>
        </div>

        <!-- Informations système -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"info\"></i>
                <h3>Informations système</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">ID</span>
                    <span class=\"detail-value\">#";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 231, $this->source); })()), "id", [], "any", false, false, false, 231), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Slug</span>
                    <span class=\"detail-value code\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 235, $this->source); })()), "slug", [], "any", false, false, false, 235), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Créé le</span>
                    <span class=\"detail-value\">";
        // line 239
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 239, $this->source); })()), "createdAt", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 239, $this->source); })()), "createdAt", [], "any", false, false, false, 239), "d/m/Y à H:i"), "html", null, true)) : ("N/A"));
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Dernière modification</span>
                    <span class=\"detail-value\">";
        // line 243
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 243, $this->source); })()), "updatedAt", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 243, $this->source); })()), "updatedAt", [], "any", false, false, false, 243), "d/m/Y à H:i"), "html", null, true)) : ("Jamais"));
        yield "</span>
                </div>
            </div>
        </div>

        <!-- Notes -->
        ";
        // line 249
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 249, $this->source); })()), "notes", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 250
            yield "        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"sticky-note\"></i>
                <h3>Notes</h3>
            </div>
            <div class=\"detail-card-body\">
                <p>";
            // line 256
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 256, $this->source); })()), "notes", [], "any", false, false, false, 256), "html", null, true));
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 260
        yield "    </div>

    <!-- Action Bar -->
    <div class=\"action-bar\">
        <a href=\"";
        // line 264
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"btn btn-outline\">
            <i data-lucide=\"arrow-left\"></i>
            Retour à la liste
        </a>
        <div class=\"action-bar-right\">
            <form action=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_duplicate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 269, $this->source); })()), "id", [], "any", false, false, false, 269)]), "html", null, true);
        yield "\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("duplicate" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 270, $this->source); })()), "id", [], "any", false, false, false, 270))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-secondary\">
                    <i data-lucide=\"copy\"></i>
                    Dupliquer
                </button>
            </form>
            <a href=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 276, $this->source); })()), "id", [], "any", false, false, false, 276)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i data-lucide=\"edit-3\"></i>
                Modifier
            </a>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id=\"deleteModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <div class=\"modal-icon danger\">
                <i data-lucide=\"alert-triangle\"></i>
            </div>
            <h3>Confirmer la suppression</h3>
            <p>Êtes-vous sûr de vouloir supprimer le projet \"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 293, $this->source); })()), "name", [], "any", false, false, false, 293), "html", null, true);
        yield "\" ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 298, $this->source); })()), "id", [], "any", false, false, false, 298)]), "html", null, true);
        yield "\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 299, $this->source); })()), "id", [], "any", false, false, false, 299))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i data-lucide=\"trash-2\"></i>
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 310
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 311
        yield "<script>
    lucide.createIcons();

    function openDeleteModal() {
        document.getElementById('deleteModal').classList.add('show');
        lucide.createIcons();
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.remove('show');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
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
        return "project/show.html.twig";
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
        return array (  624 => 311,  614 => 310,  596 => 299,  592 => 298,  584 => 293,  564 => 276,  555 => 270,  551 => 269,  543 => 264,  537 => 260,  530 => 256,  522 => 250,  520 => 249,  511 => 243,  504 => 239,  497 => 235,  490 => 231,  476 => 219,  470 => 216,  466 => 214,  463 => 213,  457 => 210,  453 => 208,  451 => 207,  446 => 205,  439 => 201,  425 => 189,  419 => 186,  415 => 184,  412 => 183,  406 => 180,  402 => 178,  399 => 177,  393 => 174,  389 => 172,  387 => 171,  382 => 169,  368 => 157,  359 => 153,  357 => 152,  352 => 149,  350 => 148,  345 => 146,  338 => 142,  326 => 132,  319 => 128,  311 => 122,  309 => 121,  297 => 112,  285 => 103,  273 => 94,  261 => 85,  246 => 73,  234 => 72,  218 => 69,  208 => 61,  202 => 58,  198 => 56,  195 => 55,  189 => 52,  185 => 50,  183 => 49,  178 => 47,  171 => 43,  164 => 41,  158 => 40,  152 => 39,  145 => 35,  141 => 34,  124 => 20,  115 => 14,  109 => 10,  99 => 9,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ project.name }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/project-show.css') }}\">
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"{{ path('app_projects') }}\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i>
                Retour aux projets
            </a>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"{{ path('app_projects_edit', {id: project.id}) }}\" class=\"btn btn-primary\">
                <i data-lucide=\"edit-3\"></i>
                Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger-outline\" onclick=\"openDeleteModal()\">
                <i data-lucide=\"trash-2\"></i>
                Supprimer
            </button>
        </div>
    </div>

    <!-- Project Hero Card -->
    <div class=\"project-hero\">
        <div class=\"project-hero-header\">
            <div class=\"project-icon-large {{ project.sector }}\">
                <i data-lucide=\"{{ project.sectorIcon }}\"></i>
            </div>
            <div class=\"project-hero-info\">
                <div class=\"project-badges\">
                    <span class=\"sector-badge {{ project.sector }}\">{{ project.sectorLabel }}</span>
                    <span class=\"status-badge {{ project.status }}\">{{ project.statusLabel }}</span>
                    <span class=\"priority-badge {{ project.priorite }}\">{{ project.prioriteLabel }}</span>
                </div>
                <h1>{{ project.name }}</h1>
                <div class=\"project-meta\">
                    <span class=\"project-code\">
                        <i data-lucide=\"hash\"></i>
                        {{ project.code }}
                    </span>
                    {% if project.localisation %}
                    <span class=\"project-location\">
                        <i data-lucide=\"map-pin\"></i>
                        {{ project.localisation }}
                    </span>
                    {% endif %}
                    {% if project.maitreOuvrage %}
                    <span class=\"project-owner\">
                        <i data-lucide=\"building\"></i>
                        {{ project.maitreOuvrage }}
                    </span>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Progress Section -->
        <div class=\"project-progress-section\">
            <div class=\"progress-header\">
                <span class=\"progress-label\">Progression globale</span>
                <span class=\"progress-value {% if project.progress >= 80 %}green{% elseif project.progress >= 50 %}blue{% elseif project.progress >= 25 %}gold{% else %}red{% endif %}\">{{ project.progress }}%</span>
            </div>
            <div class=\"progress-bar-large\">
                <div class=\"progress-fill-large {% if project.progress >= 80 %}green{% elseif project.progress >= 50 %}blue{% elseif project.progress >= 25 %}gold{% else %}red{% endif %}\" 
                     style=\"width: {{ project.progress }}%\"></div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-icon blue\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ project.budgetTotal|number_format(2, ',', ' ') }}</span>
                <span class=\"stat-label\">Budget total (Mds FCFA)</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon green\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ project.montantDecaisse|number_format(2, ',', ' ') }}</span>
                <span class=\"stat-label\">Montant décaissé (Mds FCFA)</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon gold\">
                <i data-lucide=\"percent\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ project.tauxDecaissement }}%</span>
                <span class=\"stat-label\">Taux de décaissement</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon purple\">
                <i data-lucide=\"users\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ project.beneficiaires|default('N/A') }}</span>
                <span class=\"stat-label\">Bénéficiaires</span>
            </div>
        </div>
    </div>

    <!-- Details Grid -->
    <div class=\"details-grid\">
        <!-- Description -->
        {% if project.description %}
        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"file-text\"></i>
                <h3>Description</h3>
            </div>
            <div class=\"detail-card-body\">
                <p>{{ project.description|nl2br }}</p>
            </div>
        </div>
        {% endif %}

        <!-- Dates -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"calendar\"></i>
                <h3>Planning</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de début</span>
                    <span class=\"detail-value\">{{ project.dateDebut ? project.dateDebut|date('d/m/Y') : 'Non définie' }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de fin prévue</span>
                    <span class=\"detail-value\">{{ project.dateFin ? project.dateFin|date('d/m/Y') : 'Non définie' }}</span>
                </div>
                {% if project.dateDebut and project.dateFin %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée</span>
                    <span class=\"detail-value\">
                        {% set diff = project.dateFin.diff(project.dateDebut) %}
                        {{ diff.y > 0 ? diff.y ~ ' an(s) ' : '' }}{{ diff.m > 0 ? diff.m ~ ' mois' : '' }}
                    </span>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- Financement -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"coins\"></i>
                <h3>Financement</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Source</span>
                    <span class=\"detail-value\">{{ project.sourceFinancement|default('Non spécifiée') }}</span>
                </div>
                {% if project.financementNational %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">National</span>
                    <span class=\"detail-value\">{{ project.financementNational|number_format(2, ',', ' ') }} Mds FCFA</span>
                </div>
                {% endif %}
                {% if project.financementPartenaires %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Partenaires</span>
                    <span class=\"detail-value\">{{ project.financementPartenaires|number_format(2, ',', ' ') }} Mds FCFA</span>
                </div>
                {% endif %}
                {% if project.financementAutre %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Autres</span>
                    <span class=\"detail-value\">{{ project.financementAutre|number_format(2, ',', ' ') }} Mds FCFA</span>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- Responsables -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"users\"></i>
                <h3>Responsables</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Maître d'ouvrage</span>
                    <span class=\"detail-value\">{{ project.maitreOuvrage|default('Non défini') }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Chef de projet</span>
                    <span class=\"detail-value\">{{ project.chefProjet|default('Non défini') }}</span>
                </div>
                {% if project.institution %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Institution</span>
                    <span class=\"detail-value\">{{ project.institution.name }}</span>
                </div>
                {% endif %}
                {% if project.partnerPrincipal %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Partenaire principal</span>
                    <span class=\"detail-value\">{{ project.partnerPrincipal.name }}</span>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- Informations système -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"info\"></i>
                <h3>Informations système</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">ID</span>
                    <span class=\"detail-value\">#{{ project.id }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Slug</span>
                    <span class=\"detail-value code\">{{ project.slug }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Créé le</span>
                    <span class=\"detail-value\">{{ project.createdAt ? project.createdAt|date('d/m/Y à H:i') : 'N/A' }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Dernière modification</span>
                    <span class=\"detail-value\">{{ project.updatedAt ? project.updatedAt|date('d/m/Y à H:i') : 'Jamais' }}</span>
                </div>
            </div>
        </div>

        <!-- Notes -->
        {% if project.notes %}
        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"sticky-note\"></i>
                <h3>Notes</h3>
            </div>
            <div class=\"detail-card-body\">
                <p>{{ project.notes|nl2br }}</p>
            </div>
        </div>
        {% endif %}
    </div>

    <!-- Action Bar -->
    <div class=\"action-bar\">
        <a href=\"{{ path('app_projects') }}\" class=\"btn btn-outline\">
            <i data-lucide=\"arrow-left\"></i>
            Retour à la liste
        </a>
        <div class=\"action-bar-right\">
            <form action=\"{{ path('app_projects_duplicate', {id: project.id}) }}\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('duplicate' ~ project.id) }}\">
                <button type=\"submit\" class=\"btn btn-secondary\">
                    <i data-lucide=\"copy\"></i>
                    Dupliquer
                </button>
            </form>
            <a href=\"{{ path('app_projects_edit', {id: project.id}) }}\" class=\"btn btn-primary\">
                <i data-lucide=\"edit-3\"></i>
                Modifier
            </a>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id=\"deleteModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <div class=\"modal-icon danger\">
                <i data-lucide=\"alert-triangle\"></i>
            </div>
            <h3>Confirmer la suppression</h3>
            <p>Êtes-vous sûr de vouloir supprimer le projet \"{{ project.name }}\" ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"{{ path('app_projects_delete', {id: project.id}) }}\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ project.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i data-lucide=\"trash-2\"></i>
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    lucide.createIcons();

    function openDeleteModal() {
        document.getElementById('deleteModal').classList.add('show');
        lucide.createIcons();
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.remove('show');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
{% endblock %}
", "project/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\project\\show.html.twig");
    }
}
