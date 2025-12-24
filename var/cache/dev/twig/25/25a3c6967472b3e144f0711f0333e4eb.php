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
class __TwigTemplate_4a7373651c37a4070426ae935363b89a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "top_management/project_details.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
        yield "</h1>
            <span class=\"project-code\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 21, $this->source); })()), "code", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>
        </div>
        <div class=\"header-right\">
            <span class=\"badge badge-";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 24, $this->source); })()), "statut", [], "any", false, false, false, 24), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 24, $this->source); })()), "statutLabel", [], "any", false, false, false, 24), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 104, $this->source); })()), "secteur", [], "any", false, false, false, 104), "html", null, true);
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
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"wallet\"></i>
                        Financements
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 135
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 135, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "                        <div class=\"financing-list\">
                            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financingDetails"]) || array_key_exists("financingDetails", $context) ? $context["financingDetails"] : (function () { throw new RuntimeError('Variable "financingDetails" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["financing"]) {
                // line 138
                yield "                            <div class=\"financing-item\">
                                <div class=\"financing-header\">
                                    <strong>";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "sourceFinancement", [], "any", false, false, false, 140), "html", null, true);
                yield "</strong>
                                    <span class=\"financing-amount\">";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "montantTotal", [], "any", false, false, false, 141), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                </div>
                                <div class=\"financing-details\">
                                    <span class=\"financing-type\">";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "typeFinancement", [], "any", false, false, false, 144), "html", null, true);
                yield "</span>
                                    ";
                // line 145
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "numeroConvention", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 146
                    yield "                                        <span class=\"financing-ref\">Convention: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "numeroConvention", [], "any", false, false, false, 146), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 148
                yield "                                </div>
                                <a href=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_top_management_financing_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["financing"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                yield "\" class=\"financing-link\">
                                    Voir détails
                                    <i data-lucide=\"arrow-right\"></i>
                                </a>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['financing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                        </div>
                    ";
        } else {
            // line 157
            yield "                        <p class=\"empty-message\">Aucun financement enregistré</p>
                    ";
        }
        // line 159
        yield "                </div>
            </section>

            ";
        // line 163
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 163, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
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
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 173, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
                // line 174
                yield "                        <div class=\"audit-item\">
                            <div class=\"audit-date\">";
                // line 175
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</div>
                            <div class=\"audit-content\">
                                <h5>";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "typeAudit", [], "any", false, false, false, 177), "html", null, true);
                yield "</h5>
                                <p>";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "conclusion", [], "any", false, false, false, 178), 0, 100), "html", null, true);
                yield "...</p>
                                ";
                // line 179
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "recommendations", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 180
                    yield "                                    <span class=\"audit-tag\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "recommendations", [], "any", false, false, false, 180)), "html", null, true);
                    yield " recommandation(s)</span>
                                ";
                }
                // line 182
                yield "                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            yield "                    </div>
                </div>
            </section>
            ";
        }
        // line 189
        yield "        </div>

        ";
        // line 192
        yield "        <div class=\"detail-column\">
            ";
        // line 194
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
        // line 207
        yield "            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"coins\"></i>
                        Décaissements
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 215
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 215, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 216
            yield "                        <div class=\"disbursement-list\">
                            ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 217, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["disbursement"]) {
                // line 218
                yield "                            <div class=\"disbursement-item\">
                                <div class=\"disbursement-header\">
                                    <span class=\"disbursement-date\">";
                // line 220
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "dateDecaissement", [], "any", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "dateDecaissement", [], "any", false, false, false, 220), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</span>
                                    <span class=\"disbursement-amount\">";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "montant", [], "any", false, false, false, 221), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                </div>
                                <div class=\"disbursement-meta\">
                                    <span class=\"disbursement-status badge badge-";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "statut", [], "any", false, false, false, 224), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "statut", [], "any", false, false, false, 224), "html", null, true);
                yield "</span>
                                    ";
                // line 225
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "reference", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 226
                    yield "                                        <span class=\"disbursement-ref\">Réf: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disbursement"], "reference", [], "any", false, false, false, 226), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 228
                yield "                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['disbursement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            yield "                        </div>

                        ";
            // line 233
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 233, $this->source); })())) > 10)) {
                // line 234
                yield "                        <div class=\"card-footer\">
                            <a href=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["project" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 235, $this->source); })()), "id", [], "any", false, false, false, 235)]), "html", null, true);
                yield "\" class=\"btn-link-full\">
                                Voir tous les décaissements (";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["disbursements"]) || array_key_exists("disbursements", $context) ? $context["disbursements"] : (function () { throw new RuntimeError('Variable "disbursements" does not exist.', 236, $this->source); })())), "html", null, true);
                yield ")
                                <i data-lucide=\"arrow-right\"></i>
                            </a>
                        </div>
                        ";
            }
            // line 241
            yield "                    ";
        } else {
            // line 242
            yield "                        <p class=\"empty-message\">Aucun décaissement enregistré</p>
                    ";
        }
        // line 244
        yield "                </div>
            </section>

            ";
        // line 248
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
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 259, $this->source); })()), "financialProgress", [], "any", false, false, false, 259), "html", null, true);
        yield "%</div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 261, $this->source); })()), "financialProgress", [], "any", false, false, false, 261), "html", null, true);
        yield "%; background: var(--gold-500);\"></div>
                            </div>
                        </div>

                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Avancement Physique</div>
                            <div class=\"indicator-value\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 267, $this->source); })()), "physicalProgress", [], "any", false, false, false, 267), "html", null, true);
        yield "%</div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 269, $this->source); })()), "physicalProgress", [], "any", false, false, false, 269), "html", null, true);
        yield "%; background: var(--primary-500);\"></div>
                            </div>
                        </div>

                        <div class=\"indicator\">
                            <div class=\"indicator-label\">Efficacité du Projet</div>
                            <div class=\"indicator-value\">
                                ";
        // line 276
        $context["efficiency"] = ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 276, $this->source); })()), "physicalProgress", [], "any", false, false, false, 276) > 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 276, $this->source); })()), "financialProgress", [], "any", false, false, false, 276) > 0))) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source,         // line 277
(isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 277, $this->source); })()), "physicalProgress", [], "any", false, false, false, 277) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 277, $this->source); })()), "financialProgress", [], "any", false, false, false, 277)) * 100), 0)) : (0));
        // line 279
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 279, $this->source); })()), "html", null, true);
        yield "%
                            </div>
                            <div class=\"indicator-bar\">
                                <div class=\"indicator-fill\" style=\"width: ";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 282, $this->source); })()), "html", null, true);
        yield "%; 
                                     background: ";
        // line 283
        yield ((((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 283, $this->source); })()) > 90)) ? ("var(--success-500)") : (((((isset($context["efficiency"]) || array_key_exists("efficiency", $context) ? $context["efficiency"] : (function () { throw new RuntimeError('Variable "efficiency" does not exist.', 283, $this->source); })()) > 70)) ? ("var(--warning-500)") : ("var(--danger-500)"))));
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

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 295
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        lucide.createIcons();

        // Graphique Progression Mensuelle
        const progressData = ";
        // line 302
        yield json_encode((isset($context["monthlyProgress"]) || array_key_exists("monthlyProgress", $context) ? $context["monthlyProgress"] : (function () { throw new RuntimeError('Variable "monthlyProgress" does not exist.', 302, $this->source); })()));
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
        return array (  646 => 302,  635 => 295,  625 => 294,  607 => 283,  603 => 282,  596 => 279,  594 => 277,  593 => 276,  583 => 269,  578 => 267,  569 => 261,  564 => 259,  551 => 248,  546 => 244,  542 => 242,  539 => 241,  531 => 236,  527 => 235,  524 => 234,  522 => 233,  518 => 231,  510 => 228,  504 => 226,  502 => 225,  496 => 224,  490 => 221,  486 => 220,  482 => 218,  478 => 217,  475 => 216,  473 => 215,  463 => 207,  449 => 194,  446 => 192,  442 => 189,  436 => 185,  428 => 182,  422 => 180,  420 => 179,  416 => 178,  412 => 177,  407 => 175,  404 => 174,  400 => 173,  389 => 164,  386 => 163,  381 => 159,  377 => 157,  373 => 155,  361 => 149,  358 => 148,  352 => 146,  350 => 145,  346 => 144,  340 => 141,  336 => 140,  332 => 138,  328 => 137,  325 => 136,  323 => 135,  313 => 127,  308 => 123,  302 => 120,  298 => 118,  296 => 117,  291 => 115,  283 => 110,  279 => 109,  271 => 104,  264 => 100,  252 => 90,  249 => 88,  242 => 82,  238 => 80,  235 => 79,  229 => 77,  223 => 75,  220 => 74,  218 => 73,  208 => 68,  199 => 62,  194 => 60,  181 => 50,  177 => 49,  164 => 39,  155 => 32,  147 => 26,  143 => 25,  137 => 24,  131 => 21,  127 => 20,  120 => 16,  116 => 14,  113 => 12,  103 => 11,  93 => 8,  88 => 7,  78 => 6,  60 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Template de détail d'un projet - Dashboard Top Management #}
{% extends 'base.html.twig' %}

{% block title %}{{ project.titre }} - Détail Projet - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/dashboard.css') }}\">
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
            <h1 class=\"project-title\">{{ project.titre }}</h1>
            <span class=\"project-code\">{{ project.code }}</span>
        </div>
        <div class=\"header-right\">
            <span class=\"badge badge-{{ project.statut }}\">{{ project.statutLabel }}</span>
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
                        <value><span class=\"badge badge-sector\">{{ project.secteur }}</span></value>
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
            <section class=\"info-card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"wallet\"></i>
                        Financements
                    </h3>
                </div>
                <div class=\"card-body\">
                    {% if financingDetails is not empty %}
                        <div class=\"financing-list\">
                            {% for financing in financingDetails %}
                            <div class=\"financing-item\">
                                <div class=\"financing-header\">
                                    <strong>{{ financing.sourceFinancement }}</strong>
                                    <span class=\"financing-amount\">{{ financing.montantTotal|number_format(0, ',', ' ') }} FCFA</span>
                                </div>
                                <div class=\"financing-details\">
                                    <span class=\"financing-type\">{{ financing.typeFinancement }}</span>
                                    {% if financing.numeroConvention %}
                                        <span class=\"financing-ref\">Convention: {{ financing.numeroConvention }}</span>
                                    {% endif %}
                                </div>
                                <a href=\"{{ path('app_top_management_financing_detail', {id: financing.id}) }}\" class=\"financing-link\">
                                    Voir détails
                                    <i data-lucide=\"arrow-right\"></i>
                                </a>
                            </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <p class=\"empty-message\">Aucun financement enregistré</p>
                    {% endif %}
                </div>
            </section>

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
    </script>
{% endblock %}
", "top_management/project_details.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\top_management\\project_details.html.twig");
    }
}
