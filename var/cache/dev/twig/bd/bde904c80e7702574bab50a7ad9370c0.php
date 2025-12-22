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

/* financement/index.html.twig */
class __TwigTemplate_87843023ad4bdac832ef1a53d96b4ba8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "financement/index.html.twig"));

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

        yield "Gestion des Financements - SIGEP Tchad";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/financement.css"), "html", null, true);
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
        <div class=\"page-header-left\">
            <h1><i data-lucide=\"landmark\"></i> Gestion des Financements</h1>
            <p>Conventions et accords de financement</p>
        </div>
        <div class=\"page-header-right\">
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_new");
        yield "\" class=\"btn btn-primary\">
                <i data-lucide=\"plus\"></i>
                Nouveau Financement
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["success"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "        <div class=\"alert alert-success\">
            <i data-lucide=\"check-circle\"></i>
            ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
    <!-- Stats Row -->
    <div class=\"stats-row\">
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon blue\">
                <i data-lucide=\"file-text\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "total", [], "any", false, false, false, 41), "html", null, true);
        yield "</span>
                <span class=\"mini-stat-label\">Total conventions</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon green\">
                <i data-lucide=\"check-circle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 50, $this->source); })()), "actifs", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
                <span class=\"mini-stat-label\">Actifs</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon orange\">
                <i data-lucide=\"clock\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "enNegociation", [], "any", false, false, false, 59), "html", null, true);
        yield "</span>
                <span class=\"mini-stat-label\">En négociation</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon gold\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 68, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"mini-stat-label\">Mds FCFA engagés</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon purple\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantDecaisse"]) || array_key_exists("montantDecaisse", $context) ? $context["montantDecaisse"] : (function () { throw new RuntimeError('Variable "montantDecaisse" does not exist.', 77, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "</span>
                <span class=\"mini-stat-label\">Mds FCFA décaissés</span>
            </div>
        </div>
    </div>

    <!-- Main Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3><i data-lucide=\"list\"></i> Liste des financements</h3>
            <div class=\"card-actions\">
                <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_export_json");
        yield "\" class=\"btn btn-outline btn-sm\">
                    <i data-lucide=\"download\"></i>
                    Exporter
                </a>
            </div>
        </div>

        <!-- Filters -->
        <div class=\"filters-bar\">
            <form method=\"get\" action=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"filters-form\">
                <div class=\"search-box\">
                    <i data-lucide=\"search\"></i>
                    <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "\">
                </div>
                <select name=\"statut\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les statuts</option>
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 105
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 105, $this->source); })()) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                </select>
                <select name=\"bailleur\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les bailleurs</option>
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bailleurs"]) || array_key_exists("bailleurs", $context) ? $context["bailleurs"] : (function () { throw new RuntimeError('Variable "bailleurs" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 111
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 111, $this->source); })()) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                </select>
                <select name=\"type\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les types</option>
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 117
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 117, $this->source); })()) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                </select>
                <button type=\"submit\" class=\"btn btn-secondary btn-sm\">
                    <i data-lucide=\"filter\"></i>
                    Filtrer
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Convention</th>
                        <th>Bailleur</th>
                        <th>Type</th>
                        <th>Montant engagé</th>
                        <th>Décaissement</th>
                        <th>Échéance</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financements"]) || array_key_exists("financements", $context) ? $context["financements"] : (function () { throw new RuntimeError('Variable "financements" does not exist.', 143, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["financement"]) {
            // line 144
            yield "                    <tr>
                        <td>
                            <div class=\"convention-cell\">
                                <span class=\"convention-numero\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "numeroConvention", [], "any", false, false, false, 147), "html", null, true);
            yield "</span>
                                <span class=\"convention-date\">Signé le ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "dateSignature", [], "any", false, false, false, 148), "d/m/Y"), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                        <td>
                            <div class=\"bailleur-cell\">
                                <div class=\"bailleur-icon ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 153), "html", null, true);
            yield "\">
                                    ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleurShortName", [], "any", false, false, false, 154), "html", null, true);
            yield "
                                </div>
                                <div class=\"bailleur-info\">
                                    <span class=\"bailleur-name\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleurLabel", [], "any", false, false, false, 157), "html", null, true);
            yield "</span>
                                    <span class=\"bailleur-type\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "typeBailleur", [], "any", false, false, false, 158), "html", null, true);
            yield "</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class=\"type-badge ";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "type", [], "any", false, false, false, 163), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "typeLabel", [], "any", false, false, false, 163), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"amount-cell\">
                            <span class=\"amount-value\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantEngage", [], "any", false, false, false, 166), 2, ",", " "), "html", null, true);
            yield "</span>
                            <span class=\"amount-unit\">Mds FCFA</span>
                        </td>
                        <td>
                            <div class=\"progress-cell\">
                                <div class=\"progress-bar\">
                                    <div class=\"progress-fill ";
            // line 172
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 172) >= 70)) {
                yield "gold";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 172) >= 50)) {
                yield "green";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 172) >= 25)) {
                yield "blue";
            } else {
                yield "red";
            }
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 172), "html", null, true);
            yield "%\"></div>
                                </div>
                                <span class=\"progress-value\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 174), "html", null, true);
            yield "%</span>
                            </div>
                        </td>
                        <td>
                            <span class=\"date-cell ";
            // line 178
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "isExpired", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "isApproachingDeadline", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "warning";
            }
            yield "\">
                                ";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "dateEcheance", [], "any", false, false, false, 179), "d/m/Y"), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                            <span class=\"status-badge ";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statut", [], "any", false, false, false, 183), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statutLabel", [], "any", false, false, false, 183), "html", null, true);
            yield "</span>
                        </td>
                        <td>
                            <div class=\"actions-group\">
                                <a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "slug", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Voir\">
                                    <i data-lucide=\"eye\"></i>
                                </a>
                                <a href=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Modifier\">
                                    <i data-lucide=\"edit\"></i>
                                </a>
                                <button type=\"button\" class=\"action-btn danger\" title=\"Supprimer\" onclick=\"openDeleteModal(";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "id", [], "any", false, false, false, 193), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "numeroConvention", [], "any", false, false, false, 193), "html", null, true);
            yield "')\">
                                    <i data-lucide=\"trash-2\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 199
        if (!$context['_iterated']) {
            // line 200
            yield "                    <tr>
                        <td colspan=\"8\">
                            <div class=\"empty-state\">
                                <i data-lucide=\"inbox\"></i>
                                <p>Aucun financement trouvé</p>
                                <a href=\"";
            // line 205
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_new");
            yield "\" class=\"btn btn-primary\">
                                    <i data-lucide=\"plus\"></i>
                                    Ajouter un financement
                                </a>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['financement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 218
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 218, $this->source); })()) > 1)) {
            // line 219
            yield "        <div class=\"pagination-wrapper\">
            <div class=\"pagination-info\">
                Affichage ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 221, $this->source); })()) - 1) * 10) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 221, $this->source); })()) * 10), (isset($context["totalFinancements"]) || array_key_exists("totalFinancements", $context) ? $context["totalFinancements"] : (function () { throw new RuntimeError('Variable "totalFinancements" does not exist.', 221, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFinancements"]) || array_key_exists("totalFinancements", $context) ? $context["totalFinancements"] : (function () { throw new RuntimeError('Variable "totalFinancements" does not exist.', 221, $this->source); })()), "html", null, true);
            yield " financements
            </div>
            <div class=\"pagination\">
                ";
            // line 224
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 224, $this->source); })()) > 1)) {
                // line 225
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 225, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 225, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 225, $this->source); })()), "bailleur" => (isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 225, $this->source); })()), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 225, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn\">
                        <i data-lucide=\"chevron-left\"></i>
                    </a>
                ";
            }
            // line 229
            yield "                
                ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 230, $this->source); })()) - 2)), min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 230, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 230, $this->source); })()) + 2))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 231
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 231, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 231, $this->source); })()), "bailleur" => (isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 231, $this->source); })()), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 231, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 231, $this->source); })()))) ? ("active") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            yield "                
                ";
            // line 234
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 234, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 234, $this->source); })()))) {
                // line 235
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 235, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 235, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 235, $this->source); })()), "bailleur" => (isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 235, $this->source); })()), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 235, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn\">
                        <i data-lucide=\"chevron-right\"></i>
                    </a>
                ";
            }
            // line 239
            yield "            </div>
        </div>
        ";
        }
        // line 242
        yield "    </div>
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
            <p>Êtes-vous sûr de vouloir supprimer le financement <strong id=\"deleteConventionName\"></strong> ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
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

    // line 271
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 272
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        lucide.createIcons();
        
        function openDeleteModal(id, numero) {
            document.getElementById('deleteConventionName').textContent = numero;
            document.getElementById('deleteForm').action = '/financements/' + id;
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
        return "financement/index.html.twig";
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
        return array (  608 => 272,  598 => 271,  580 => 260,  560 => 242,  555 => 239,  547 => 235,  545 => 234,  542 => 233,  529 => 231,  525 => 230,  522 => 229,  514 => 225,  512 => 224,  502 => 221,  498 => 219,  496 => 218,  489 => 213,  475 => 205,  468 => 200,  466 => 199,  453 => 193,  447 => 190,  441 => 187,  432 => 183,  425 => 179,  417 => 178,  410 => 174,  395 => 172,  386 => 166,  378 => 163,  370 => 158,  366 => 157,  360 => 154,  356 => 153,  348 => 148,  344 => 147,  339 => 144,  334 => 143,  308 => 119,  295 => 117,  291 => 116,  286 => 113,  273 => 111,  269 => 110,  264 => 107,  251 => 105,  247 => 104,  240 => 100,  234 => 97,  222 => 88,  208 => 77,  196 => 68,  184 => 59,  172 => 50,  160 => 41,  150 => 33,  141 => 30,  137 => 28,  133 => 27,  122 => 19,  112 => 11,  102 => 10,  92 => 7,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Financements - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/financement.css') }}\">
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h1><i data-lucide=\"landmark\"></i> Gestion des Financements</h1>
            <p>Conventions et accords de financement</p>
        </div>
        <div class=\"page-header-right\">
            <a href=\"{{ path('app_financements_new') }}\" class=\"btn btn-primary\">
                <i data-lucide=\"plus\"></i>
                Nouveau Financement
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            <i data-lucide=\"check-circle\"></i>
            {{ message }}
        </div>
    {% endfor %}

    <!-- Stats Row -->
    <div class=\"stats-row\">
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon blue\">
                <i data-lucide=\"file-text\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">{{ stats.total }}</span>
                <span class=\"mini-stat-label\">Total conventions</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon green\">
                <i data-lucide=\"check-circle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">{{ stats.actifs }}</span>
                <span class=\"mini-stat-label\">Actifs</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon orange\">
                <i data-lucide=\"clock\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">{{ stats.enNegociation }}</span>
                <span class=\"mini-stat-label\">En négociation</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon gold\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">{{ montantTotal|number_format(1, ',', ' ') }}</span>
                <span class=\"mini-stat-label\">Mds FCFA engagés</span>
            </div>
        </div>
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon purple\">
                <i data-lucide=\"trending-up\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">{{ montantDecaisse|number_format(1, ',', ' ') }}</span>
                <span class=\"mini-stat-label\">Mds FCFA décaissés</span>
            </div>
        </div>
    </div>

    <!-- Main Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3><i data-lucide=\"list\"></i> Liste des financements</h3>
            <div class=\"card-actions\">
                <a href=\"{{ path('app_financements_export_json') }}\" class=\"btn btn-outline btn-sm\">
                    <i data-lucide=\"download\"></i>
                    Exporter
                </a>
            </div>
        </div>

        <!-- Filters -->
        <div class=\"filters-bar\">
            <form method=\"get\" action=\"{{ path('app_financements') }}\" class=\"filters-form\">
                <div class=\"search-box\">
                    <i data-lucide=\"search\"></i>
                    <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"{{ search }}\">
                </div>
                <select name=\"statut\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les statuts</option>
                    {% for label, value in statuts %}
                        <option value=\"{{ value }}\" {{ statut == value ? 'selected' : '' }}>{{ label }}</option>
                    {% endfor %}
                </select>
                <select name=\"bailleur\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les bailleurs</option>
                    {% for label, value in bailleurs %}
                        <option value=\"{{ value }}\" {{ bailleur == value ? 'selected' : '' }}>{{ label }}</option>
                    {% endfor %}
                </select>
                <select name=\"type\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les types</option>
                    {% for label, value in types %}
                        <option value=\"{{ value }}\" {{ type == value ? 'selected' : '' }}>{{ label }}</option>
                    {% endfor %}
                </select>
                <button type=\"submit\" class=\"btn btn-secondary btn-sm\">
                    <i data-lucide=\"filter\"></i>
                    Filtrer
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Convention</th>
                        <th>Bailleur</th>
                        <th>Type</th>
                        <th>Montant engagé</th>
                        <th>Décaissement</th>
                        <th>Échéance</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for financement in financements %}
                    <tr>
                        <td>
                            <div class=\"convention-cell\">
                                <span class=\"convention-numero\">{{ financement.numeroConvention }}</span>
                                <span class=\"convention-date\">Signé le {{ financement.dateSignature|date('d/m/Y') }}</span>
                            </div>
                        </td>
                        <td>
                            <div class=\"bailleur-cell\">
                                <div class=\"bailleur-icon {{ financement.bailleur }}\">
                                    {{ financement.bailleurShortName }}
                                </div>
                                <div class=\"bailleur-info\">
                                    <span class=\"bailleur-name\">{{ financement.bailleurLabel }}</span>
                                    <span class=\"bailleur-type\">{{ financement.typeBailleur }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class=\"type-badge {{ financement.type }}\">{{ financement.typeLabel }}</span>
                        </td>
                        <td class=\"amount-cell\">
                            <span class=\"amount-value\">{{ financement.montantEngage|number_format(2, ',', ' ') }}</span>
                            <span class=\"amount-unit\">Mds FCFA</span>
                        </td>
                        <td>
                            <div class=\"progress-cell\">
                                <div class=\"progress-bar\">
                                    <div class=\"progress-fill {% if financement.tauxDecaissement >= 70 %}gold{% elseif financement.tauxDecaissement >= 50 %}green{% elseif financement.tauxDecaissement >= 25 %}blue{% else %}red{% endif %}\" style=\"width: {{ financement.tauxDecaissement }}%\"></div>
                                </div>
                                <span class=\"progress-value\">{{ financement.tauxDecaissement }}%</span>
                            </div>
                        </td>
                        <td>
                            <span class=\"date-cell {% if financement.isExpired %}expired{% elseif financement.isApproachingDeadline %}warning{% endif %}\">
                                {{ financement.dateEcheance|date('d/m/Y') }}
                            </span>
                        </td>
                        <td>
                            <span class=\"status-badge {{ financement.statut }}\">{{ financement.statutLabel }}</span>
                        </td>
                        <td>
                            <div class=\"actions-group\">
                                <a href=\"{{ path('app_financements_show', {slug: financement.slug}) }}\" class=\"action-btn\" title=\"Voir\">
                                    <i data-lucide=\"eye\"></i>
                                </a>
                                <a href=\"{{ path('app_financements_edit', {id: financement.id}) }}\" class=\"action-btn\" title=\"Modifier\">
                                    <i data-lucide=\"edit\"></i>
                                </a>
                                <button type=\"button\" class=\"action-btn danger\" title=\"Supprimer\" onclick=\"openDeleteModal({{ financement.id }}, '{{ financement.numeroConvention }}')\">
                                    <i data-lucide=\"trash-2\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"8\">
                            <div class=\"empty-state\">
                                <i data-lucide=\"inbox\"></i>
                                <p>Aucun financement trouvé</p>
                                <a href=\"{{ path('app_financements_new') }}\" class=\"btn btn-primary\">
                                    <i data-lucide=\"plus\"></i>
                                    Ajouter un financement
                                </a>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        {% if totalPages > 1 %}
        <div class=\"pagination-wrapper\">
            <div class=\"pagination-info\">
                Affichage {{ ((currentPage - 1) * 10) + 1 }} à {{ min(currentPage * 10, totalFinancements) }} sur {{ totalFinancements }} financements
            </div>
            <div class=\"pagination\">
                {% if currentPage > 1 %}
                    <a href=\"{{ path('app_financements', {page: currentPage - 1, search: search, statut: statut, bailleur: bailleur, type: type}) }}\" class=\"pagination-btn\">
                        <i data-lucide=\"chevron-left\"></i>
                    </a>
                {% endif %}
                
                {% for i in max(1, currentPage - 2)..min(totalPages, currentPage + 2) %}
                    <a href=\"{{ path('app_financements', {page: i, search: search, statut: statut, bailleur: bailleur, type: type}) }}\" class=\"pagination-btn {{ i == currentPage ? 'active' : '' }}\">{{ i }}</a>
                {% endfor %}
                
                {% if currentPage < totalPages %}
                    <a href=\"{{ path('app_financements', {page: currentPage + 1, search: search, statut: statut, bailleur: bailleur, type: type}) }}\" class=\"pagination-btn\">
                        <i data-lucide=\"chevron-right\"></i>
                    </a>
                {% endif %}
            </div>
        </div>
        {% endif %}
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
            <p>Êtes-vous sûr de vouloir supprimer le financement <strong id=\"deleteConventionName\"></strong> ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete') }}\">
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
        
        function openDeleteModal(id, numero) {
            document.getElementById('deleteConventionName').textContent = numero;
            document.getElementById('deleteForm').action = '/financements/' + id;
            document.getElementById('deleteModal').classList.add('show');
            lucide.createIcons();
        }
        
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('show');
        }
    </script>
{% endblock %}
", "financement/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\financement\\index.html.twig");
    }
}
