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

/* dashboard/_financing_details.html.twig */
class __TwigTemplate_2deb7bbf985102d0e6240c7e9110f684 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_financing_details.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 4, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détail Financement - SIGEP Tchad";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
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
        yield "<div class=\"financing-detail-container\">
    ";
        // line 14
        yield "    <div class=\"detail-header\">
        <div class=\"header-left\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_index");
        yield "\" class=\"btn-back\">
                <i data-lucide=\"arrow-left\"></i>
                Retour au dashboard
            </a>
            <h1 class=\"financing-title\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 20, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 20), "html", null, true);
        yield "</h1>
            ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 21, $this->source); })()), "numeroConvention", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                <span class=\"financing-code\">Convention: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 22, $this->source); })()), "numeroConvention", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
            ";
        }
        // line 24
        yield "        </div>
        <div class=\"header-right\">
            <span class=\"badge badge-";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 26, $this->source); })()), "typeFinancement", [], "any", false, false, false, 26)), [" " => "-"]), "html", null, true);
        yield "\">
                ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 27, $this->source); })()), "typeFinancement", [], "any", false, false, false, 27), "html", null, true);
        yield "
            </span>
        </div>
    </div>

    ";
        // line 33
        yield "    <section class=\"metrics-grid\">
        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--gold-100); color: var(--gold-600);\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Montant Total</span>
                <span class=\"metric-value\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 40, $this->source); })()), "totalAmount", [], "any", false, false, false, 40), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--success-100); color: var(--success-600);\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Montant Décaissé</span>
                <span class=\"metric-value\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 50, $this->source); })()), "totalDisbursed", [], "any", false, false, false, 50), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                <span class=\"metric-sublabel\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 51, $this->source); })()), "disbursementRate", [], "any", false, false, false, 51), "html", null, true);
        yield "% du total</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--primary-100); color: var(--primary-600);\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Montant Restant</span>
                <span class=\"metric-value\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 61, $this->source); })()), "remainingAmount", [], "any", false, false, false, 61), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--warning-100); color: var(--warning-600);\">
                <i data-lucide=\"folder-kanban\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Projets Financés</span>
                <span class=\"metric-value\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 71, $this->source); })()), "projectsCount", [], "any", false, false, false, 71), "html", null, true);
        yield "</span>
                <span class=\"metric-sublabel\">Taux de succès: ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 72, $this->source); })()), "successRate", [], "any", false, false, false, 72), "html", null, true);
        yield "%</span>
            </div>
        </div>
    </section>

    <div class=\"detail-grid\">
        ";
        // line 79
        yield "        <div class=\"detail-column\">
            ";
        // line 81
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"file-text\"></i>
                        Informations de la Convention
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-group\">
                        <label>Source de Financement</label>
                        <value>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 91, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 91), "html", null, true);
        yield "</value>
                    </div>
                    <div class=\"info-group\">
                        <label>Type de Financement</label>
                        <value><span class=\"badge badge-type\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 95, $this->source); })()), "typeFinancement", [], "any", false, false, false, 95), "html", null, true);
        yield "</span></value>
                    </div>
                    ";
        // line 97
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 97, $this->source); })()), "numeroConvention", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "                    <div class=\"info-group\">
                        <label>Numéro de Convention</label>
                        <value>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 100, $this->source); })()), "numeroConvention", [], "any", false, false, false, 100), "html", null, true);
            yield "</value>
                    </div>
                    ";
        }
        // line 103
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 103, $this->source); })()), "dateSignature", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "                    <div class=\"info-group\">
                        <label>Date de Signature</label>
                        <value>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 106, $this->source); })()), "dateSignature", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
            yield "</value>
                    </div>
                    ";
        }
        // line 109
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 109, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "                    <div class=\"info-group\">
                        <label>Date d'Entrée en Vigueur</label>
                        <value>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 112, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
            yield "</value>
                    </div>
                    ";
        }
        // line 115
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 115, $this->source); })()), "dateExpiration", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "                    <div class=\"info-group\">
                        <label>Date d'Expiration</label>
                        <value>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 118, $this->source); })()), "dateExpiration", [], "any", false, false, false, 118), "d/m/Y"), "html", null, true);
            yield "</value>
                    </div>
                    ";
        }
        // line 121
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 121, $this->source); })()), "devise", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                    <div class=\"info-group\">
                        <label>Devise</label>
                        <value>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 124, $this->source); })()), "devise", [], "any", false, false, false, 124), "html", null, true);
            yield "</value>
                    </div>
                    ";
        }
        // line 127
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 127, $this->source); })()), "tauxChange", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "                    <div class=\"info-group\">
                        <label>Taux de Change</label>
                        <value>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 130, $this->source); })()), "tauxChange", [], "any", false, false, false, 130), "html", null, true);
            yield "</value>
                    </div>
                    ";
        }
        // line 133
        yield "                </div>
            </section>

            ";
        // line 137
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"pie-chart\"></i>
                        Répartition Sectorielle
                    </h3>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"sectorDistributionChart\" height=\"250\"></canvas>
                    <div class=\"sector-legend\">
                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorDistribution"]) || array_key_exists("sectorDistribution", $context) ? $context["sectorDistribution"] : (function () { throw new RuntimeError('Variable "sectorDistribution" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["sector"] => $context["count"]) {
            // line 148
            yield "                        <div class=\"legend-item\">
                            <span class=\"legend-dot\"></span>
                            <span class=\"legend-label\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sector"], "html", null, true);
            yield "</span>
                            <span class=\"legend-value\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield " projet(s)</span>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sector'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                    </div>
                </div>
            </section>
        </div>

        ";
        // line 160
        yield "        <div class=\"detail-column\">
            ";
        // line 162
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"folder\"></i>
                        Projets Financés
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 170
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["fundedProjects"]) || array_key_exists("fundedProjects", $context) ? $context["fundedProjects"] : (function () { throw new RuntimeError('Variable "fundedProjects" does not exist.', 170, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "                        <div class=\"projects-list\">
                            ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["fundedProjects"]) || array_key_exists("fundedProjects", $context) ? $context["fundedProjects"] : (function () { throw new RuntimeError('Variable "fundedProjects" does not exist.', 172, $this->source); })()), 0, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 173
                yield "                            <div class=\"project-item\">
                                <div class=\"project-header\">
                                    <strong>";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "titre", [], "any", false, false, false, 175), "html", null, true);
                yield "</strong>
                                    <span class=\"badge badge-";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statut", [], "any", false, false, false, 176), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statutLabel", [], "any", false, false, false, 176), "html", null, true);
                yield "</span>
                                </div>
                                <div class=\"project-meta\">
                                    <span class=\"project-sector\">";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "secteur", [], "any", false, false, false, 179), "html", null, true);
                yield "</span>
                                    <span class=\"project-institution\">";
                // line 180
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "institution", [], "any", false, false, false, 180), "nom", [], "any", false, false, false, 180), "html", null, true)) : ("N/A"));
                yield "</span>
                                </div>
                                <div class=\"project-progress\">
                                    <div class=\"progress-label\">
                                        <span>Progression: ";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 184), "html", null, true);
                yield "%</span>
                                    </div>
                                    <div class=\"progress-bar-mini\">
                                        <div class=\"progress-fill-mini\" style=\"width: ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxRealisation", [], "any", false, false, false, 187), "html", null, true);
                yield "%\"></div>
                                    </div>
                                </div>
                                <a href=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 190)]), "html", null, true);
                yield "\" class=\"project-link\">
                                    Voir détails
                                    <i data-lucide=\"arrow-right\"></i>
                                </a>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            yield "                        </div>

                        ";
            // line 198
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fundedProjects"]) || array_key_exists("fundedProjects", $context) ? $context["fundedProjects"] : (function () { throw new RuntimeError('Variable "fundedProjects" does not exist.', 198, $this->source); })())) > 8)) {
                // line 199
                yield "                        <div class=\"card-footer\">
                            <a href=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_index", ["financing" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200)]), "html", null, true);
                yield "\" class=\"btn-link-full\">
                                Voir tous les projets (";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fundedProjects"]) || array_key_exists("fundedProjects", $context) ? $context["fundedProjects"] : (function () { throw new RuntimeError('Variable "fundedProjects" does not exist.', 201, $this->source); })())), "html", null, true);
                yield ")
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                        ";
            }
            // line 206
            yield "                    ";
        } else {
            // line 207
            yield "                        <p class=\"empty-message\">Aucun projet financé</p>
                    ";
        }
        // line 209
        yield "                </div>
            </section>

            ";
        // line 213
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"trending-up\"></i>
                        Évolution des Décaissements
                    </h3>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"disbursementEvolutionChart\" height=\"250\"></canvas>
                </div>
            </section>

            ";
        // line 226
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"coins\"></i>
                        Décaissements Récents
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 234
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 234, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "                        <div class=\"disbursement-list\">
                            ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 236, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["disbursement"]) {
                // line 237
                yield "                            <div class=\"disbursement-item\">
                                <div class=\"disbursement-header\">
                                    <span class=\"disbursement-date\">";
                // line 239
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "dateDecaissement", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "dateDecaissement", [], "any", false, false, false, 239), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</span>
                                    <span class=\"disbursement-amount\">";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "montant", [], "any", false, false, false, 240), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                </div>
                                <div class=\"disbursement-meta\">
                                    <span class=\"disbursement-status badge badge-";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "statut", [], "any", false, false, false, 243), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "statut", [], "any", false, false, false, 243), "html", null, true);
                yield "</span>
                                    ";
                // line 244
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "reference", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 245
                    yield "                                        <span class=\"disbursement-ref\">Réf: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "reference", [], "any", false, false, false, 245), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 247
                yield "                                </div>
                                ";
                // line 248
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "projet", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 249
                    yield "                                <div class=\"disbursement-project\">
                                    <small>Projet: ";
                    // line 250
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "projet", [], "any", false, false, false, 250), "titre", [], "any", false, false, false, 250), "html", null, true);
                    yield "</small>
                                </div>
                                ";
                }
                // line 253
                yield "                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['disbursement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            yield "                        </div>

                        ";
            // line 257
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 257, $this->source); })())) > 10)) {
                // line 258
                yield "                        <div class=\"card-footer\">
                            <a href=\"";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["financing" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financing"]) || array_key_exists("financing", $context) ? $context["financing"] : (function () { throw new RuntimeError('Variable "financing" does not exist.', 259, $this->source); })()), "id", [], "any", false, false, false, 259)]), "html", null, true);
                yield "\" class=\"btn-link-full\">
                                Voir tous les décaissements (";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 260, $this->source); })())), "html", null, true);
                yield ")
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                        ";
            }
            // line 265
            yield "                    ";
        } else {
            // line 266
            yield "                        <p class=\"empty-message\">Aucun décaissement enregistré</p>
                    ";
        }
        // line 268
        yield "                </div>
            </section>

            ";
        // line 272
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"bar-chart-3\"></i>
                        Statistiques
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-label\">Taille Moyenne des Projets</div>
                            <div class=\"stat-value\">";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 283, $this->source); })()), "averageProjectSize", [], "any", false, false, false, 283), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-label\">Taux de Succès</div>
                            <div class=\"stat-value\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 287, $this->source); })()), "successRate", [], "any", false, false, false, 287), "html", null, true);
        yield "%</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-label\">Taux de Décaissement</div>
                            <div class=\"stat-value\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 291, $this->source); })()), "disbursementRate", [], "any", false, false, false, 291), "html", null, true);
        yield "%</div>
                            <div class=\"stat-bar\">
                                <div class=\"stat-fill\" style=\"width: ";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 293, $this->source); })()), "disbursementRate", [], "any", false, false, false, 293), "html", null, true);
        yield "%\"></div>
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

    // line 304
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 305
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        lucide.createIcons();

        // Données
        const sectorData = ";
        // line 312
        yield json_encode((isset($context["sectorDistribution"]) || array_key_exists("sectorDistribution", $context) ? $context["sectorDistribution"] : (function () { throw new RuntimeError('Variable "sectorDistribution" does not exist.', 312, $this->source); })()));
        yield ";
        const evolutionData = ";
        // line 313
        yield json_encode((isset($context["disbursementEvolution"]) || array_key_exists("disbursementEvolution", $context) ? $context["disbursementEvolution"] : (function () { throw new RuntimeError('Variable "disbursementEvolution" does not exist.', 313, $this->source); })()));
        yield ";

        // Graphique Répartition Sectorielle
        if (document.getElementById('sectorDistributionChart')) {
            new Chart(document.getElementById('sectorDistributionChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(sectorData),
                    datasets: [{
                        data: Object.values(sectorData),
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
                            display: false
                        }
                    }
                }
            });
        }

        // Graphique Évolution Décaissements
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
                                    return value.toLocaleString('fr-FR');
                                }
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
        return "dashboard/_financing_details.html.twig";
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
        return array (  665 => 313,  661 => 312,  650 => 305,  640 => 304,  622 => 293,  617 => 291,  610 => 287,  603 => 283,  590 => 272,  585 => 268,  581 => 266,  578 => 265,  570 => 260,  566 => 259,  563 => 258,  561 => 257,  557 => 255,  550 => 253,  544 => 250,  541 => 249,  539 => 248,  536 => 247,  530 => 245,  528 => 244,  522 => 243,  516 => 240,  512 => 239,  508 => 237,  504 => 236,  501 => 235,  499 => 234,  489 => 226,  475 => 213,  470 => 209,  466 => 207,  463 => 206,  455 => 201,  451 => 200,  448 => 199,  446 => 198,  442 => 196,  430 => 190,  424 => 187,  418 => 184,  411 => 180,  407 => 179,  399 => 176,  395 => 175,  391 => 173,  387 => 172,  384 => 171,  382 => 170,  372 => 162,  369 => 160,  362 => 154,  353 => 151,  349 => 150,  345 => 148,  341 => 147,  329 => 137,  324 => 133,  318 => 130,  314 => 128,  311 => 127,  305 => 124,  301 => 122,  298 => 121,  292 => 118,  288 => 116,  285 => 115,  279 => 112,  275 => 110,  272 => 109,  266 => 106,  262 => 104,  259 => 103,  253 => 100,  249 => 98,  247 => 97,  242 => 95,  235 => 91,  223 => 81,  220 => 79,  211 => 72,  207 => 71,  194 => 61,  181 => 51,  177 => 50,  164 => 40,  155 => 33,  147 => 27,  143 => 26,  139 => 24,  133 => 22,  131 => 21,  127 => 20,  120 => 16,  116 => 14,  113 => 12,  103 => 11,  93 => 8,  88 => 7,  78 => 6,  60 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Template de détail d'un financement - Dashboard Top Management #}
{% extends 'base.html.twig' %}

{% block title %}{{ financing.sourceFinancement }} - Détail Financement - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/dashboard.css') }}\">
{% endblock %}

{% block body %}
<div class=\"financing-detail-container\">
    {# Header Financement #}
    <div class=\"detail-header\">
        <div class=\"header-left\">
            <a href=\"{{ path('app_dashboard_index') }}\" class=\"btn-back\">
                <i data-lucide=\"arrow-left\"></i>
                Retour au dashboard
            </a>
            <h1 class=\"financing-title\">{{ financing.sourceFinancement }}</h1>
            {% if financing.numeroConvention %}
                <span class=\"financing-code\">Convention: {{ financing.numeroConvention }}</span>
            {% endif %}
        </div>
        <div class=\"header-right\">
            <span class=\"badge badge-{{ financing.typeFinancement|lower|replace({' ': '-'}) }}\">
                {{ financing.typeFinancement }}
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
                <span class=\"metric-label\">Montant Total</span>
                <span class=\"metric-value\">{{ metrics.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--success-100); color: var(--success-600);\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Montant Décaissé</span>
                <span class=\"metric-value\">{{ metrics.totalDisbursed|number_format(0, ',', ' ') }} FCFA</span>
                <span class=\"metric-sublabel\">{{ metrics.disbursementRate }}% du total</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--primary-100); color: var(--primary-600);\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Montant Restant</span>
                <span class=\"metric-value\">{{ metrics.remainingAmount|number_format(0, ',', ' ') }} FCFA</span>
            </div>
        </div>

        <div class=\"metric-card\">
            <div class=\"metric-icon\" style=\"background: var(--warning-100); color: var(--warning-600);\">
                <i data-lucide=\"folder-kanban\"></i>
            </div>
            <div class=\"metric-content\">
                <span class=\"metric-label\">Projets Financés</span>
                <span class=\"metric-value\">{{ metrics.projectsCount }}</span>
                <span class=\"metric-sublabel\">Taux de succès: {{ metrics.successRate }}%</span>
            </div>
        </div>
    </section>

    <div class=\"detail-grid\">
        {# Colonne Gauche #}
        <div class=\"detail-column\">
            {# Informations Convention #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"file-text\"></i>
                        Informations de la Convention
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-group\">
                        <label>Source de Financement</label>
                        <value>{{ financing.sourceFinancement }}</value>
                    </div>
                    <div class=\"info-group\">
                        <label>Type de Financement</label>
                        <value><span class=\"badge badge-type\">{{ financing.typeFinancement }}</span></value>
                    </div>
                    {% if financing.numeroConvention %}
                    <div class=\"info-group\">
                        <label>Numéro de Convention</label>
                        <value>{{ financing.numeroConvention }}</value>
                    </div>
                    {% endif %}
                    {% if financing.dateSignature %}
                    <div class=\"info-group\">
                        <label>Date de Signature</label>
                        <value>{{ financing.dateSignature|date('d/m/Y') }}</value>
                    </div>
                    {% endif %}
                    {% if financing.dateEntreeVigueur %}
                    <div class=\"info-group\">
                        <label>Date d'Entrée en Vigueur</label>
                        <value>{{ financing.dateEntreeVigueur|date('d/m/Y') }}</value>
                    </div>
                    {% endif %}
                    {% if financing.dateExpiration %}
                    <div class=\"info-group\">
                        <label>Date d'Expiration</label>
                        <value>{{ financing.dateExpiration|date('d/m/Y') }}</value>
                    </div>
                    {% endif %}
                    {% if financing.devise %}
                    <div class=\"info-group\">
                        <label>Devise</label>
                        <value>{{ financing.devise }}</value>
                    </div>
                    {% endif %}
                    {% if financing.tauxChange %}
                    <div class=\"info-group\">
                        <label>Taux de Change</label>
                        <value>{{ financing.tauxChange }}</value>
                    </div>
                    {% endif %}
                </div>
            </section>

            {# Répartition Sectorielle #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"pie-chart\"></i>
                        Répartition Sectorielle
                    </h3>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"sectorDistributionChart\" height=\"250\"></canvas>
                    <div class=\"sector-legend\">
                        {% for sector, count in sectorDistribution %}
                        <div class=\"legend-item\">
                            <span class=\"legend-dot\"></span>
                            <span class=\"legend-label\">{{ sector }}</span>
                            <span class=\"legend-value\">{{ count }} projet(s)</span>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </section>
        </div>

        {# Colonne Droite #}
        <div class=\"detail-column\">
            {# Projets Financés #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"folder\"></i>
                        Projets Financés
                    </h3>
                </div>
                <div class=\"card-body\">
                    {% if fundedProjects is not empty %}
                        <div class=\"projects-list\">
                            {% for project in fundedProjects|slice(0, 8) %}
                            <div class=\"project-item\">
                                <div class=\"project-header\">
                                    <strong>{{ project.titre }}</strong>
                                    <span class=\"badge badge-{{ project.statut }}\">{{ project.statutLabel }}</span>
                                </div>
                                <div class=\"project-meta\">
                                    <span class=\"project-sector\">{{ project.secteur }}</span>
                                    <span class=\"project-institution\">{{ project.institution ? project.institution.nom : 'N/A' }}</span>
                                </div>
                                <div class=\"project-progress\">
                                    <div class=\"progress-label\">
                                        <span>Progression: {{ project.tauxRealisation }}%</span>
                                    </div>
                                    <div class=\"progress-bar-mini\">
                                        <div class=\"progress-fill-mini\" style=\"width: {{ project.tauxRealisation }}%\"></div>
                                    </div>
                                </div>
                                <a href=\"{{ path('app_dashboard_project_detail', {id: project.id}) }}\" class=\"project-link\">
                                    Voir détails
                                    <i data-lucide=\"arrow-right\"></i>
                                </a>
                            </div>
                            {% endfor %}
                        </div>

                        {% if fundedProjects|length > 8 %}
                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_project_index', {financing: financing.id}) }}\" class=\"btn-link-full\">
                                Voir tous les projets ({{ fundedProjects|length }})
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                        {% endif %}
                    {% else %}
                        <p class=\"empty-message\">Aucun projet financé</p>
                    {% endif %}
                </div>
            </section>

            {# Évolution des Décaissements #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"trending-up\"></i>
                        Évolution des Décaissements
                    </h3>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"disbursementEvolutionChart\" height=\"250\"></canvas>
                </div>
            </section>

            {# Décaissements Récents #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"coins\"></i>
                        Décaissements Récents
                    </h3>
                </div>
                <div class=\"card-body\">
                    {% if disbursements is not empty %}
                        <div class=\"disbursement-list\">
                            {% for disbursement in disbursements|slice(0, 10) %}
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
                                {% if disbursement.projet %}
                                <div class=\"disbursement-project\">
                                    <small>Projet: {{ disbursement.projet.titre }}</small>
                                </div>
                                {% endif %}
                            </div>
                            {% endfor %}
                        </div>

                        {% if disbursements|length > 10 %}
                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_decaissement_index', {financing: financing.id}) }}\" class=\"btn-link-full\">
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

            {# Statistiques #}
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"bar-chart-3\"></i>
                        Statistiques
                    </h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"stats-grid\">
                        <div class=\"stat-item\">
                            <div class=\"stat-label\">Taille Moyenne des Projets</div>
                            <div class=\"stat-value\">{{ metrics.averageProjectSize|number_format(0, ',', ' ') }} FCFA</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-label\">Taux de Succès</div>
                            <div class=\"stat-value\">{{ metrics.successRate }}%</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-label\">Taux de Décaissement</div>
                            <div class=\"stat-value\">{{ metrics.disbursementRate }}%</div>
                            <div class=\"stat-bar\">
                                <div class=\"stat-fill\" style=\"width: {{ metrics.disbursementRate }}%\"></div>
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
    <script>
        lucide.createIcons();

        // Données
        const sectorData = {{ sectorDistribution|json_encode|raw }};
        const evolutionData = {{ disbursementEvolution|json_encode|raw }};

        // Graphique Répartition Sectorielle
        if (document.getElementById('sectorDistributionChart')) {
            new Chart(document.getElementById('sectorDistributionChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(sectorData),
                    datasets: [{
                        data: Object.values(sectorData),
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
                            display: false
                        }
                    }
                }
            });
        }

        // Graphique Évolution Décaissements
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
                                    return value.toLocaleString('fr-FR');
                                }
                            }
                        }
                    }
                }
            });
        }
    </script>
{% endblock %}
", "dashboard/_financing_details.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\dashboard\\_financing_details.html.twig");
    }
}
