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
class __TwigTemplate_558ba64a1d045efbfcad1a5b1ce75a01 extends Template
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
    <style>
  /* ==========================================================
   BOUTON MONTANT (TABLE)
   ========================================================== */
.amount-btn {
    background: transparent;
    border: none;
    padding: 0;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: inherit;
}

.amount-btn .amount-value {
    font-weight: 600;
    color: #1f2937;
    transition: color 0.2s ease;
}

.amount-btn .amount-unit {
    font-size: 0.75rem;
    color: #6b7280;
}

.amount-btn:hover .amount-value {
    color: #2563eb;
    text-decoration: underline;
}

.amount-btn:focus {
    outline: none;
}


/* ==========================================================
   MODAL – STRUCTURE GÉNÉRALE
   ========================================================== */
.modal {
    position: fixed;
    inset: 0;
    z-index: 1000;
    display: none;
}

.modal.show {
    display: flex;
    align-items: center;
    justify-content: center;
}


/* ==========================================================
   BACKDROP (FOND FLOUTÉ MAIS MODAL NET)
   ========================================================== */
.modal-backdrop {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    backdrop-filter: blur(2px);
    z-index: 1;
}


/* ==========================================================
   CONTENU DU MODAL (ANTI-FLOU)
   ========================================================== */
.modal-content {
    position: relative;
    z-index: 2;
    background: #ffffff;
    width: 100%;
    max-width: 480px;
    border-radius: 14px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    padding: 24px;
    animation: modalFadeUp 0.25s ease;
    filter: none !important;
    backdrop-filter: none !important;
}


/* ==========================================================
   ANIMATION
   ========================================================== */
@keyframes modalFadeUp {
    from {
        opacity: 0;
        transform: translateY(20px) scale(0.98);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}


/* ==========================================================
   EN-TÊTE DU MODAL
   ========================================================== */
.modal-header {
    text-align: center;
    margin-bottom: 16px;
}

.modal-header h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #111827;
}

.modal-header p {
    font-size: 0.9rem;
    color: #6b7280;
    margin: 2px 0;
}


/* ==========================================================
   ICÔNE DU MODAL
   ========================================================== */
.modal-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #e0f2fe;
    color: #0284c7;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px auto;
}

.modal-icon svg {
    width: 22px;
    height: 22px;
}


/* ==========================================================
   AFFICHAGE DU MONTANT
   ========================================================== */
.montant-display {
    background: #f8fafc;
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    text-align: center;
}

#montantValeur {
    display: block;
    font-size: 2.2rem;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: 0.5px;
}

.montant-unite {
    font-size: 0.85rem;
    color: #64748b;
    margin-top: 4px;
    display: block;
}


/* ==========================================================
   ACTIONS DU MODAL
   ========================================================== */
.modal-actions {
    display: flex;
    justify-content: center;
    margin-top: 16px;
}


/* ==========================================================
   CELLULE BAILLEUR (TABLE)
   ========================================================== */
.bailleur-cell {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 220px;
}

/* Icône bailleur */
.bailleur-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.85rem;
    color: #ffffff;
    background: linear-gradient(135deg, #2563eb, #1e40af);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    text-transform: uppercase;
}

/* Informations bailleur */
.bailleur-info {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
}

/* Nom bailleur */
.bailleur-name {
    font-weight: 600;
    font-size: 0.9rem;
    color: #111827;
    white-space: nowrap;
}

/* Type bailleur */
.bailleur-type {
    font-size: 0.75rem;
    color: #6b7280;
}


/* ==========================================================
   COULEURS PAR TYPE DE BAILLEUR (OPTIONNEL)
   ========================================================== */
.bailleur-icon.national {
    background: linear-gradient(135deg, #16a34a, #15803d);
}

.bailleur-icon.bm {
    background: linear-gradient(135deg, #0284c7, #0369a1);
}

.bailleur-icon.bad {
    background: linear-gradient(135deg, #f59e0b, #b45309);
}

.bailleur-icon.ue {
    background: linear-gradient(135deg, #1e3a8a, #1e40af);
}


/* ==========================================================
   RESPONSIVE
   ========================================================== */
@media (max-width: 480px) {
    .modal-content {
        margin: 0 12px;
        padding: 20px;
    }

    #montantValeur {
        font-size: 1.8rem;
    }

    .bailleur-name {
        white-space: normal;
    }
}

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 276
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 277
        yield "<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h1><i data-lucide=\"landmark\"></i> Gestion des Financements</h1>
            <p>Conventions et accords de financement</p>
        </div>
        <div class=\"page-header-right\">
            <a href=\"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_new");
        yield "\" class=\"btn btn-primary\">
                <i data-lucide=\"plus\"></i>
                Nouveau Financement
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "flashes", ["success"], "method", false, false, false, 293));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 294
            yield "        <div class=\"alert alert-success\">
            <i data-lucide=\"check-circle\"></i>
            ";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        yield "
    <!-- Stats Row -->
    <div class=\"stats-row\">
        <div class=\"mini-stat\">
            <div class=\"mini-stat-icon blue\">
                <i data-lucide=\"file-text\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <span class=\"mini-stat-value\">";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 307, $this->source); })()), "total", [], "any", false, false, false, 307), "html", null, true);
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
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 316, $this->source); })()), "actifs", [], "any", false, false, false, 316), "html", null, true);
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
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 325, $this->source); })()), "enNegociation", [], "any", false, false, false, 325), "html", null, true);
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
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 334, $this->source); })()), 1, ",", " "), "html", null, true);
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
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantDecaisse"]) || array_key_exists("montantDecaisse", $context) ? $context["montantDecaisse"] : (function () { throw new RuntimeError('Variable "montantDecaisse" does not exist.', 343, $this->source); })()), 1, ",", " "), "html", null, true);
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
        // line 354
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
        // line 363
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"filters-form\">
                <div class=\"search-box\">
                    <i data-lucide=\"search\"></i>
                    <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\" value=\"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 366, $this->source); })()), "html", null, true);
        yield "\">
                </div>
                <select name=\"statut\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les statuts</option>
                    ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 370, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 371
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 371, $this->source); })()) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        yield "                </select>
                <select name=\"bailleur\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les bailleurs</option>
                    ";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bailleurs"]) || array_key_exists("bailleurs", $context) ? $context["bailleurs"] : (function () { throw new RuntimeError('Variable "bailleurs" does not exist.', 376, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 377
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 377, $this->source); })()) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        yield "                </select>
                <select name=\"type\" class=\"filter-select\" onchange=\"this.form.submit()\">
                    <option value=\"\">Tous les types</option>
                    ";
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 382, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 383
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 383, $this->source); })()) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
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
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financements"]) || array_key_exists("financements", $context) ? $context["financements"] : (function () { throw new RuntimeError('Variable "financements" does not exist.', 409, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["financement"]) {
            // line 410
            yield "                    <tr>
                        <td>
                            <div class=\"convention-cell\">
                                <span class=\"convention-numero\">";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "numeroConvention", [], "any", false, false, false, 413), "html", null, true);
            yield "</span>
                                <span class=\"convention-date\">Signé le ";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "dateSignature", [], "any", false, false, false, 414), "d/m/Y"), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                        <td>
                            <div class=\"bailleur-cell\">
                                <div class=\"bailleur-icon ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 419), "html", null, true);
            yield "\">
                                    ";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleurShortName", [], "any", false, false, false, 420), "html", null, true);
            yield "
                                </div>
                                <div class=\"bailleur-info\">
                                    <span class=\"bailleur-name\">";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 423), "name", [], "any", false, false, false, 423), "html", null, true);
            yield "</span>
                                    <span class=\"bailleur-type\">";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 424), "typePartner", [], "any", false, false, false, 424), "name", [], "any", false, false, false, 424), "html", null, true);
            yield "</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class=\"type-badge ";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "type", [], "any", false, false, false, 429), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "typeLabel", [], "any", false, false, false, 429), "html", null, true);
            yield "</span>
                        </td>
                       <td class=\"amount-cell\">
    <button
        type=\"button\"
        class=\"btn btn-xs btn-success\"
        onclick=\"openMontantModal(
            '";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "numeroConvention", [], "any", false, false, false, 436), "html", null, true);
            yield "',
            '";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 437), "name", [], "any", false, false, false, 437), "html", null, true);
            yield "',
            '";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantEngage", [], "any", false, false, false, 438), 2, ",", " "), "html", null, true);
            yield "'
        )\"
    >
       Voir le montant
        
    </button>
</td>
                        <td>
                            <div class=\"progress-cell\">
                                <div class=\"progress-bar\">
                                    <div class=\"progress-fill ";
            // line 448
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 448) >= 70)) {
                yield "gold";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 448) >= 50)) {
                yield "green";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 448) >= 25)) {
                yield "blue";
            } else {
                yield "red";
            }
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 448), "html", null, true);
            yield "%\"></div>
                                </div>
                                <span class=\"progress-value\">";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 450), "html", null, true);
            yield "%</span>
                            </div>
                        </td>
                        <td>
                            <span class=\"date-cell ";
            // line 454
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "isExpired", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "isApproachingDeadline", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "warning";
            }
            yield "\">
                                ";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "dateEcheance", [], "any", false, false, false, 455), "d/m/Y"), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                            <span class=\"status-badge ";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statut", [], "any", false, false, false, 459), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "statutLabel", [], "any", false, false, false, 459), "html", null, true);
            yield "</span>
                        </td>
                        <td>
                            <div class=\"actions-group\">
                                <a href=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "slug", [], "any", false, false, false, 463)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Voir\">
                                    <i data-lucide=\"eye\"></i>
                                </a>
                                <a href=\"";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "id", [], "any", false, false, false, 466)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Modifier\">
                                    <i data-lucide=\"edit\"></i>
                                </a>
                                <button type=\"button\" class=\"action-btn danger\" title=\"Supprimer\" onclick=\"openDeleteModal(";
            // line 469
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "id", [], "any", false, false, false, 469), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "numeroConvention", [], "any", false, false, false, 469), "html", null, true);
            yield "')\">
                                    <i data-lucide=\"trash-2\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 475
        if (!$context['_iterated']) {
            // line 476
            yield "                    <tr>
                        <td colspan=\"8\">
                            <div class=\"empty-state\">
                                <i data-lucide=\"inbox\"></i>
                                <p>Aucun financement trouvé</p>
                                <a href=\"";
            // line 481
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
        // line 489
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 494
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 494, $this->source); })()) > 1)) {
            // line 495
            yield "        <div class=\"pagination-wrapper\">
            <div class=\"pagination-info\">
                Affichage ";
            // line 497
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 497, $this->source); })()) - 1) * 10) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 497, $this->source); })()) * 10), (isset($context["totalFinancements"]) || array_key_exists("totalFinancements", $context) ? $context["totalFinancements"] : (function () { throw new RuntimeError('Variable "totalFinancements" does not exist.', 497, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFinancements"]) || array_key_exists("totalFinancements", $context) ? $context["totalFinancements"] : (function () { throw new RuntimeError('Variable "totalFinancements" does not exist.', 497, $this->source); })()), "html", null, true);
            yield " financements
            </div>
            <div class=\"pagination\">
                ";
            // line 500
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 500, $this->source); })()) > 1)) {
                // line 501
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 501, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 501, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 501, $this->source); })()), "bailleur" => (isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 501, $this->source); })()), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 501, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn\">
                        <i data-lucide=\"chevron-left\"></i>
                    </a>
                ";
            }
            // line 505
            yield "                
                ";
            // line 506
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 506, $this->source); })()) - 2)), min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 506, $this->source); })()), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 506, $this->source); })()) + 2))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 507
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 507, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 507, $this->source); })()), "bailleur" => (isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 507, $this->source); })()), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 507, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 507, $this->source); })()))) ? ("active") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 509
            yield "                
                ";
            // line 510
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 510, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 510, $this->source); })()))) {
                // line 511
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 511, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 511, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 511, $this->source); })()), "bailleur" => (isset($context["bailleur"]) || array_key_exists("bailleur", $context) ? $context["bailleur"] : (function () { throw new RuntimeError('Variable "bailleur" does not exist.', 511, $this->source); })()), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 511, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn\">
                        <i data-lucide=\"chevron-right\"></i>
                    </a>
                ";
            }
            // line 515
            yield "            </div>
        </div>
        ";
        }
        // line 518
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
        // line 536
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

<!-- Montant Modal -->
<div id=\"montantModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeMontantModal()\"></div>

    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <div class=\"modal-icon blue\">
                <i data-lucide=\"banknote\"></i>
            </div>

            <h3>Montant engagé</h3>

            <p>
                Convention :
                <strong id=\"montantConvention\"></strong>
            </p>

            <p>
                Bailleur :
                <strong id=\"montantBailleur\"></strong>
            </p>
        </div>

        <div class=\"modal-body\">
            <div class=\"montant-display\">
                <span id=\"montantValeur\"></span>
                <span class=\"montant-unite\">Mds FCFA</span>
            </div>
        </div>

        <div class=\"modal-actions\">
            <button class=\"btn btn-secondary\" onclick=\"closeMontantModal()\">
                Fermer
            </button>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 586
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 587
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

        function openMontantModal(convention, bailleur, montant) {
    document.getElementById('montantConvention').textContent = convention;
    document.getElementById('montantBailleur').textContent = bailleur;
    document.getElementById('montantValeur').textContent = montant;

    document.getElementById('montantModal').classList.add('show');
    lucide.createIcons();
}

function closeMontantModal() {
    document.getElementById('montantModal').classList.remove('show');
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
        return array (  929 => 587,  919 => 586,  862 => 536,  842 => 518,  837 => 515,  829 => 511,  827 => 510,  824 => 509,  811 => 507,  807 => 506,  804 => 505,  796 => 501,  794 => 500,  784 => 497,  780 => 495,  778 => 494,  771 => 489,  757 => 481,  750 => 476,  748 => 475,  735 => 469,  729 => 466,  723 => 463,  714 => 459,  707 => 455,  699 => 454,  692 => 450,  677 => 448,  664 => 438,  660 => 437,  656 => 436,  644 => 429,  636 => 424,  632 => 423,  626 => 420,  622 => 419,  614 => 414,  610 => 413,  605 => 410,  600 => 409,  574 => 385,  561 => 383,  557 => 382,  552 => 379,  539 => 377,  535 => 376,  530 => 373,  517 => 371,  513 => 370,  506 => 366,  500 => 363,  488 => 354,  474 => 343,  462 => 334,  450 => 325,  438 => 316,  426 => 307,  416 => 299,  407 => 296,  403 => 294,  399 => 293,  388 => 285,  378 => 277,  368 => 276,  92 => 7,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Financements - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/financement.css') }}\">
    <style>
  /* ==========================================================
   BOUTON MONTANT (TABLE)
   ========================================================== */
.amount-btn {
    background: transparent;
    border: none;
    padding: 0;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: inherit;
}

.amount-btn .amount-value {
    font-weight: 600;
    color: #1f2937;
    transition: color 0.2s ease;
}

.amount-btn .amount-unit {
    font-size: 0.75rem;
    color: #6b7280;
}

.amount-btn:hover .amount-value {
    color: #2563eb;
    text-decoration: underline;
}

.amount-btn:focus {
    outline: none;
}


/* ==========================================================
   MODAL – STRUCTURE GÉNÉRALE
   ========================================================== */
.modal {
    position: fixed;
    inset: 0;
    z-index: 1000;
    display: none;
}

.modal.show {
    display: flex;
    align-items: center;
    justify-content: center;
}


/* ==========================================================
   BACKDROP (FOND FLOUTÉ MAIS MODAL NET)
   ========================================================== */
.modal-backdrop {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    backdrop-filter: blur(2px);
    z-index: 1;
}


/* ==========================================================
   CONTENU DU MODAL (ANTI-FLOU)
   ========================================================== */
.modal-content {
    position: relative;
    z-index: 2;
    background: #ffffff;
    width: 100%;
    max-width: 480px;
    border-radius: 14px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    padding: 24px;
    animation: modalFadeUp 0.25s ease;
    filter: none !important;
    backdrop-filter: none !important;
}


/* ==========================================================
   ANIMATION
   ========================================================== */
@keyframes modalFadeUp {
    from {
        opacity: 0;
        transform: translateY(20px) scale(0.98);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}


/* ==========================================================
   EN-TÊTE DU MODAL
   ========================================================== */
.modal-header {
    text-align: center;
    margin-bottom: 16px;
}

.modal-header h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #111827;
}

.modal-header p {
    font-size: 0.9rem;
    color: #6b7280;
    margin: 2px 0;
}


/* ==========================================================
   ICÔNE DU MODAL
   ========================================================== */
.modal-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #e0f2fe;
    color: #0284c7;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px auto;
}

.modal-icon svg {
    width: 22px;
    height: 22px;
}


/* ==========================================================
   AFFICHAGE DU MONTANT
   ========================================================== */
.montant-display {
    background: #f8fafc;
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    text-align: center;
}

#montantValeur {
    display: block;
    font-size: 2.2rem;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: 0.5px;
}

.montant-unite {
    font-size: 0.85rem;
    color: #64748b;
    margin-top: 4px;
    display: block;
}


/* ==========================================================
   ACTIONS DU MODAL
   ========================================================== */
.modal-actions {
    display: flex;
    justify-content: center;
    margin-top: 16px;
}


/* ==========================================================
   CELLULE BAILLEUR (TABLE)
   ========================================================== */
.bailleur-cell {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 220px;
}

/* Icône bailleur */
.bailleur-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.85rem;
    color: #ffffff;
    background: linear-gradient(135deg, #2563eb, #1e40af);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    text-transform: uppercase;
}

/* Informations bailleur */
.bailleur-info {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
}

/* Nom bailleur */
.bailleur-name {
    font-weight: 600;
    font-size: 0.9rem;
    color: #111827;
    white-space: nowrap;
}

/* Type bailleur */
.bailleur-type {
    font-size: 0.75rem;
    color: #6b7280;
}


/* ==========================================================
   COULEURS PAR TYPE DE BAILLEUR (OPTIONNEL)
   ========================================================== */
.bailleur-icon.national {
    background: linear-gradient(135deg, #16a34a, #15803d);
}

.bailleur-icon.bm {
    background: linear-gradient(135deg, #0284c7, #0369a1);
}

.bailleur-icon.bad {
    background: linear-gradient(135deg, #f59e0b, #b45309);
}

.bailleur-icon.ue {
    background: linear-gradient(135deg, #1e3a8a, #1e40af);
}


/* ==========================================================
   RESPONSIVE
   ========================================================== */
@media (max-width: 480px) {
    .modal-content {
        margin: 0 12px;
        padding: 20px;
    }

    #montantValeur {
        font-size: 1.8rem;
    }

    .bailleur-name {
        white-space: normal;
    }
}

    </style>
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
                                    <span class=\"bailleur-name\">{{ financement.bailleur.name }}</span>
                                    <span class=\"bailleur-type\">{{ financement.bailleur.typePartner.name }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class=\"type-badge {{ financement.type }}\">{{ financement.typeLabel }}</span>
                        </td>
                       <td class=\"amount-cell\">
    <button
        type=\"button\"
        class=\"btn btn-xs btn-success\"
        onclick=\"openMontantModal(
            '{{ financement.numeroConvention }}',
            '{{ financement.bailleur.name }}',
            '{{ financement.montantEngage|number_format(2, ',', ' ') }}'
        )\"
    >
       Voir le montant
        
    </button>
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

<!-- Montant Modal -->
<div id=\"montantModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeMontantModal()\"></div>

    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <div class=\"modal-icon blue\">
                <i data-lucide=\"banknote\"></i>
            </div>

            <h3>Montant engagé</h3>

            <p>
                Convention :
                <strong id=\"montantConvention\"></strong>
            </p>

            <p>
                Bailleur :
                <strong id=\"montantBailleur\"></strong>
            </p>
        </div>

        <div class=\"modal-body\">
            <div class=\"montant-display\">
                <span id=\"montantValeur\"></span>
                <span class=\"montant-unite\">Mds FCFA</span>
            </div>
        </div>

        <div class=\"modal-actions\">
            <button class=\"btn btn-secondary\" onclick=\"closeMontantModal()\">
                Fermer
            </button>
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

        function openMontantModal(convention, bailleur, montant) {
    document.getElementById('montantConvention').textContent = convention;
    document.getElementById('montantBailleur').textContent = bailleur;
    document.getElementById('montantValeur').textContent = montant;

    document.getElementById('montantModal').classList.add('show');
    lucide.createIcons();
}

function closeMontantModal() {
    document.getElementById('montantModal').classList.remove('show');
}
    </script>
{% endblock %}
", "financement/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\financement\\index.html.twig");
    }
}
