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

/* financement/show.html.twig */
class __TwigTemplate_34f4ba7f53bbd8a7497fcff274078bb2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "financement/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 3, $this->source); })()), "numeroConvention", [], "any", false, false, false, 3), "html", null, true);
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/financement-show.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\"></i>
            Retour aux financements
        </a>
        <div class=\"page-header-actions\">
            <a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                <i data-lucide=\"edit\"></i>
                Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger-outline\" onclick=\"openDeleteModal()\">
                <i data-lucide=\"trash-2\"></i>
                Supprimer
            </button>
        </div>
    </div>

    <!-- Hero Card -->
    <div class=\"financement-hero\">
        <div class=\"financement-hero-header\">
            <div class=\"bailleur-icon-large ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 33, $this->source); })()), "bailleur", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
                ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 34, $this->source); })()), "bailleurShortName", [], "any", false, false, false, 34), "html", null, true);
        yield "
            </div>
            <div class=\"financement-hero-info\">
                <div class=\"financement-badges\">
                    <span class=\"type-badge ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 38, $this->source); })()), "typeLabel", [], "any", false, false, false, 38), "html", null, true);
        yield "</span>
                    <span class=\"status-badge ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 39, $this->source); })()), "statut", [], "any", false, false, false, 39), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 39, $this->source); })()), "statutLabel", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                    <span class=\"type-bailleur-badge\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 40, $this->source); })()), "typeBailleur", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                </div>
                <h1>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 42, $this->source); })()), "numeroConvention", [], "any", false, false, false, 42), "html", null, true);
        yield "</h1>
                <div class=\"financement-meta\">
                    <span><i data-lucide=\"building-2\"></i> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 44, $this->source); })()), "bailleurLabel", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
                    <span><i data-lucide=\"calendar\"></i> Signé le ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 45, $this->source); })()), "dateSignature", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
        yield "</span>
                    <span><i data-lucide=\"clock\"></i> Échéance ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 46, $this->source); })()), "dateEcheance", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
        <div class=\"financement-progress-section\">
            <div class=\"progress-header\">
                <span class=\"progress-label\">Taux de décaissement</span>
                <span class=\"progress-value ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 53, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 53) >= 70)) {
            yield "gold";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 53, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 53) >= 50)) {
            yield "green";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 53, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 53) >= 25)) {
            yield "blue";
        } else {
            yield "red";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 53, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 53), "html", null, true);
        yield "%</span>
            </div>
            <div class=\"progress-bar-large\">
                <div class=\"progress-fill-large ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 56, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 56) >= 70)) {
            yield "gold";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 56, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 56) >= 50)) {
            yield "green";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 56, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 56) >= 25)) {
            yield "blue";
        } else {
            yield "red";
        }
        yield "\" style=\"width: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 56, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 56), "html", null, true);
        yield "%\"></div>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-icon blue\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 68, $this->source); })()), "montantEngage", [], "any", false, false, false, 68), 2, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"stat-label\">Mds FCFA engagés</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon green\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 77, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 77), 2, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"stat-label\">Mds FCFA décaissés</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon orange\">
                <i data-lucide=\"hourglass\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 86, $this->source); })()), "montantRestant", [], "any", false, false, false, 86), 2, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"stat-label\">Mds FCFA restants</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon gold\">
                <i data-lucide=\"landmark\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 95, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 95), 2, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"stat-label\">Mds FCFA contrepartie</span>
            </div>
        </div>
    </div>

    <!-- Details Grid -->
    <div class=\"details-grid\">
        <!-- Calendrier -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"calendar\"></i>
                <h3>Calendrier</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de signature</span>
                    <span class=\"detail-value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 112, $this->source); })()), "dateSignature", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Entrée en vigueur</span>
                    <span class=\"detail-value\">";
        // line 116
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 116, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 116, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 116), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date d'échéance</span>
                    <span class=\"detail-value ";
        // line 120
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 120, $this->source); })()), "isExpired", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "expired";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 120, $this->source); })()), "isApproachingDeadline", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "warning";
        }
        yield "\">
                        ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 121, $this->source); })()), "dateEcheance", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
        yield "
                        ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 122, $this->source); })()), "isExpired", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "                            <span class=\"badge-danger\">Expiré</span>
                        ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 124, $this->source); })()), "isApproachingDeadline", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                            <span class=\"badge-warning\">Bientôt</span>
                        ";
        }
        // line 127
        yield "                    </span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée</span>
                    <span class=\"detail-value\">";
        // line 131
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 131, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 131)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 131, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 131), "html", null, true)) : ("-"));
        yield "</span>
                </div>
            </div>
        </div>

        <!-- Conditions financières -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"percent\"></i>
                <h3>Conditions financières</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Taux d'intérêt</span>
                    <span class=\"detail-value\">";
        // line 145
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 145, $this->source); })()), "tauxInteret", [], "any", false, false, false, 145)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 145, $this->source); })()), "tauxInteret", [], "any", false, false, false, 145), "html", null, true)) : ("-"));
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée du financement</span>
                    <span class=\"detail-value\">";
        // line 149
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 149, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 149)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 149, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 149), "html", null, true)) : ("-"));
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Différé de remboursement</span>
                    <span class=\"detail-value\">";
        // line 153
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 153, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 153)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 153, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 153), "html", null, true)) : ("-"));
        yield "</span>
                </div>
            </div>
        </div>

        <!-- Conditions particulières -->
        ";
        // line 159
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 159, $this->source); })()), "conditions", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"file-text\"></i>
                <h3>Conditions particulières</h3>
            </div>
            <div class=\"detail-card-body\">
                <p class=\"conditions-text\">";
            // line 166
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 166, $this->source); })()), "conditions", [], "any", false, false, false, 166), "html", null, true));
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 170
        yield "
        <!-- Projets financés -->
        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"folder-kanban\"></i>
                <h3>Projets financés (";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 175, $this->source); })()), "projets", [], "any", false, false, false, 175)), "html", null, true);
        yield ")</h3>
            </div>
            <div class=\"detail-card-body\">
                ";
        // line 178
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 178, $this->source); })()), "projets", [], "any", false, false, false, 178)) > 0)) {
            // line 179
            yield "                <div class=\"projects-list\">
                    ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 180, $this->source); })()), "projets", [], "any", false, false, false, 180));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 181
                yield "                    <div class=\"project-item\">
                        <div class=\"project-icon ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "sector", [], "any", false, false, false, 182), "html", null, true);
                yield "\">
                            <i data-lucide=\"";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "sectorIcon", [], "any", false, false, false, 183), "html", null, true);
                yield "\"></i>
                        </div>
                        <div class=\"project-info\">
                            <span class=\"project-name\">";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 186), "html", null, true);
                yield "</span>
                            <span class=\"project-code\">";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "code", [], "any", false, false, false, 187), "html", null, true);
                yield "</span>
                        </div>
                        <div class=\"project-status\">
                            <span class=\"status-badge ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "status", [], "any", false, false, false, 190), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "statusLabel", [], "any", false, false, false, 190), "html", null, true);
                yield "</span>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['projet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "                </div>
                ";
        } else {
            // line 196
            yield "                <div class=\"empty-projects\">
                    <i data-lucide=\"folder-x\"></i>
                    <p>Aucun projet associé à ce financement</p>
                </div>
                ";
        }
        // line 201
        yield "            </div>
        </div>

        <!-- Notes -->
        ";
        // line 205
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 205, $this->source); })()), "notes", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"sticky-note\"></i>
                <h3>Notes</h3>
            </div>
            <div class=\"detail-card-body\">
                <p>";
            // line 212
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 212, $this->source); })()), "notes", [], "any", false, false, false, 212), "html", null, true));
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 216
        yield "
        <!-- Informations système -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"info\"></i>
                <h3>Informations système</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">ID</span>
                    <span class=\"detail-value code\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 226, $this->source); })()), "id", [], "any", false, false, false, 226), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Slug</span>
                    <span class=\"detail-value code\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 230, $this->source); })()), "slug", [], "any", false, false, false, 230), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Créé le</span>
                    <span class=\"detail-value\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 234, $this->source); })()), "createdAt", [], "any", false, false, false, 234), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Modifié le</span>
                    <span class=\"detail-value\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 238, $this->source); })()), "updatedAt", [], "any", false, false, false, 238), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Bar -->
    <div class=\"action-bar\">
        <a href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"btn btn-secondary\">
            <i data-lucide=\"arrow-left\"></i>
            Retour à la liste
        </a>
        <div class=\"action-bar-right\">
            <a href=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 251, $this->source); })()), "id", [], "any", false, false, false, 251)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i data-lucide=\"edit\"></i>
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
            <h3>Supprimer le financement</h3>
            <p>Êtes-vous sûr de vouloir supprimer le financement <strong>";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 268, $this->source); })()), "numeroConvention", [], "any", false, false, false, 268), "html", null, true);
        yield "</strong> ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 273, $this->source); })()), "id", [], "any", false, false, false, 273)]), "html", null, true);
        yield "\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 274, $this->source); })()), "id", [], "any", false, false, false, 274))), "html", null, true);
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

    // line 285
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 286
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        lucide.createIcons();
        
        function openDeleteModal() {
            document.getElementById('deleteModal').classList.add('show');
            lucide.createIcons();
        }
        
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('show');
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
        return "financement/show.html.twig";
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
        return array (  594 => 286,  584 => 285,  566 => 274,  562 => 273,  554 => 268,  534 => 251,  526 => 246,  515 => 238,  508 => 234,  501 => 230,  494 => 226,  482 => 216,  475 => 212,  467 => 206,  465 => 205,  459 => 201,  452 => 196,  448 => 194,  436 => 190,  430 => 187,  426 => 186,  420 => 183,  416 => 182,  413 => 181,  409 => 180,  406 => 179,  404 => 178,  398 => 175,  391 => 170,  384 => 166,  376 => 160,  374 => 159,  365 => 153,  358 => 149,  351 => 145,  334 => 131,  328 => 127,  324 => 125,  322 => 124,  319 => 123,  317 => 122,  313 => 121,  305 => 120,  298 => 116,  291 => 112,  271 => 95,  259 => 86,  247 => 77,  235 => 68,  210 => 56,  194 => 53,  184 => 46,  180 => 45,  176 => 44,  171 => 42,  166 => 40,  160 => 39,  154 => 38,  147 => 34,  143 => 33,  126 => 19,  118 => 14,  113 => 11,  103 => 10,  93 => 7,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ financement.numeroConvention }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/financement-show.css') }}\">
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <a href=\"{{ path('app_financements') }}\" class=\"back-link\">
            <i data-lucide=\"arrow-left\"></i>
            Retour aux financements
        </a>
        <div class=\"page-header-actions\">
            <a href=\"{{ path('app_financements_edit', {id: financement.id}) }}\" class=\"btn btn-secondary\">
                <i data-lucide=\"edit\"></i>
                Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger-outline\" onclick=\"openDeleteModal()\">
                <i data-lucide=\"trash-2\"></i>
                Supprimer
            </button>
        </div>
    </div>

    <!-- Hero Card -->
    <div class=\"financement-hero\">
        <div class=\"financement-hero-header\">
            <div class=\"bailleur-icon-large {{ financement.bailleur }}\">
                {{ financement.bailleurShortName }}
            </div>
            <div class=\"financement-hero-info\">
                <div class=\"financement-badges\">
                    <span class=\"type-badge {{ financement.type }}\">{{ financement.typeLabel }}</span>
                    <span class=\"status-badge {{ financement.statut }}\">{{ financement.statutLabel }}</span>
                    <span class=\"type-bailleur-badge\">{{ financement.typeBailleur }}</span>
                </div>
                <h1>{{ financement.numeroConvention }}</h1>
                <div class=\"financement-meta\">
                    <span><i data-lucide=\"building-2\"></i> {{ financement.bailleurLabel }}</span>
                    <span><i data-lucide=\"calendar\"></i> Signé le {{ financement.dateSignature|date('d/m/Y') }}</span>
                    <span><i data-lucide=\"clock\"></i> Échéance {{ financement.dateEcheance|date('d/m/Y') }}</span>
                </div>
            </div>
        </div>
        <div class=\"financement-progress-section\">
            <div class=\"progress-header\">
                <span class=\"progress-label\">Taux de décaissement</span>
                <span class=\"progress-value {% if financement.tauxDecaissement >= 70 %}gold{% elseif financement.tauxDecaissement >= 50 %}green{% elseif financement.tauxDecaissement >= 25 %}blue{% else %}red{% endif %}\">{{ financement.tauxDecaissement }}%</span>
            </div>
            <div class=\"progress-bar-large\">
                <div class=\"progress-fill-large {% if financement.tauxDecaissement >= 70 %}gold{% elseif financement.tauxDecaissement >= 50 %}green{% elseif financement.tauxDecaissement >= 25 %}blue{% else %}red{% endif %}\" style=\"width: {{ financement.tauxDecaissement }}%\"></div>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-icon blue\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ financement.montantEngage|number_format(2, ',', ' ') }}</span>
                <span class=\"stat-label\">Mds FCFA engagés</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon green\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ financement.montantDecaisse|number_format(2, ',', ' ') }}</span>
                <span class=\"stat-label\">Mds FCFA décaissés</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon orange\">
                <i data-lucide=\"hourglass\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ financement.montantRestant|number_format(2, ',', ' ') }}</span>
                <span class=\"stat-label\">Mds FCFA restants</span>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon gold\">
                <i data-lucide=\"landmark\"></i>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-value\">{{ financement.contrepartieNationale|number_format(2, ',', ' ') }}</span>
                <span class=\"stat-label\">Mds FCFA contrepartie</span>
            </div>
        </div>
    </div>

    <!-- Details Grid -->
    <div class=\"details-grid\">
        <!-- Calendrier -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"calendar\"></i>
                <h3>Calendrier</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de signature</span>
                    <span class=\"detail-value\">{{ financement.dateSignature|date('d/m/Y') }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Entrée en vigueur</span>
                    <span class=\"detail-value\">{{ financement.dateEntreeVigueur ? financement.dateEntreeVigueur|date('d/m/Y') : '-' }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date d'échéance</span>
                    <span class=\"detail-value {% if financement.isExpired %}expired{% elseif financement.isApproachingDeadline %}warning{% endif %}\">
                        {{ financement.dateEcheance|date('d/m/Y') }}
                        {% if financement.isExpired %}
                            <span class=\"badge-danger\">Expiré</span>
                        {% elseif financement.isApproachingDeadline %}
                            <span class=\"badge-warning\">Bientôt</span>
                        {% endif %}
                    </span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée</span>
                    <span class=\"detail-value\">{{ financement.dureeFinancement ?: '-' }}</span>
                </div>
            </div>
        </div>

        <!-- Conditions financières -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"percent\"></i>
                <h3>Conditions financières</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Taux d'intérêt</span>
                    <span class=\"detail-value\">{{ financement.tauxInteret ?: '-' }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée du financement</span>
                    <span class=\"detail-value\">{{ financement.dureeFinancement ?: '-' }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Différé de remboursement</span>
                    <span class=\"detail-value\">{{ financement.differeRemboursement ?: '-' }}</span>
                </div>
            </div>
        </div>

        <!-- Conditions particulières -->
        {% if financement.conditions %}
        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"file-text\"></i>
                <h3>Conditions particulières</h3>
            </div>
            <div class=\"detail-card-body\">
                <p class=\"conditions-text\">{{ financement.conditions|nl2br }}</p>
            </div>
        </div>
        {% endif %}

        <!-- Projets financés -->
        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"folder-kanban\"></i>
                <h3>Projets financés ({{ financement.projets|length }})</h3>
            </div>
            <div class=\"detail-card-body\">
                {% if financement.projets|length > 0 %}
                <div class=\"projects-list\">
                    {% for projet in financement.projets %}
                    <div class=\"project-item\">
                        <div class=\"project-icon {{ projet.sector }}\">
                            <i data-lucide=\"{{ projet.sectorIcon }}\"></i>
                        </div>
                        <div class=\"project-info\">
                            <span class=\"project-name\">{{ projet.name }}</span>
                            <span class=\"project-code\">{{ projet.code }}</span>
                        </div>
                        <div class=\"project-status\">
                            <span class=\"status-badge {{ projet.status }}\">{{ projet.statusLabel }}</span>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                {% else %}
                <div class=\"empty-projects\">
                    <i data-lucide=\"folder-x\"></i>
                    <p>Aucun projet associé à ce financement</p>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- Notes -->
        {% if financement.notes %}
        <div class=\"detail-card full-width\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"sticky-note\"></i>
                <h3>Notes</h3>
            </div>
            <div class=\"detail-card-body\">
                <p>{{ financement.notes|nl2br }}</p>
            </div>
        </div>
        {% endif %}

        <!-- Informations système -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"info\"></i>
                <h3>Informations système</h3>
            </div>
            <div class=\"detail-card-body\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">ID</span>
                    <span class=\"detail-value code\">{{ financement.id }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Slug</span>
                    <span class=\"detail-value code\">{{ financement.slug }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Créé le</span>
                    <span class=\"detail-value\">{{ financement.createdAt|date('d/m/Y à H:i') }}</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Modifié le</span>
                    <span class=\"detail-value\">{{ financement.updatedAt|date('d/m/Y à H:i') }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Bar -->
    <div class=\"action-bar\">
        <a href=\"{{ path('app_financements') }}\" class=\"btn btn-secondary\">
            <i data-lucide=\"arrow-left\"></i>
            Retour à la liste
        </a>
        <div class=\"action-bar-right\">
            <a href=\"{{ path('app_financements_edit', {id: financement.id}) }}\" class=\"btn btn-primary\">
                <i data-lucide=\"edit\"></i>
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
            <h3>Supprimer le financement</h3>
            <p>Êtes-vous sûr de vouloir supprimer le financement <strong>{{ financement.numeroConvention }}</strong> ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"{{ path('app_financements_delete', {id: financement.id}) }}\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ financement.id) }}\">
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
    {{ parent() }}
    <script>
        lucide.createIcons();
        
        function openDeleteModal() {
            document.getElementById('deleteModal').classList.add('show');
            lucide.createIcons();
        }
        
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('show');
        }
    </script>
{% endblock %}
", "financement/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\financement\\show.html.twig");
    }
}
