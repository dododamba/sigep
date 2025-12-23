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

/* partner/index.html.twig */
class __TwigTemplate_7b2ebb79055e432868671f2f019aa7c0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/index.html.twig"));

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

        yield "Partenaires - SIGEP Tchad";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/partner.css"), "html", null, true);
        yield "\">
<style>
   /* ==========================================================
   FILTRES – CARD
   ========================================================== */
.filters-form {
    width: 100%;
}

.filters-row {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    align-items: flex-end;
}

/* ==========================================================
   GROUPES DE FILTRES
   ========================================================== */
.filter-group {
    display: flex;
    flex-direction: column;
    min-width: 200px;
    flex: 1;
}

/* Label */
.filter-label {
    font-size: 0.75rem;
    font-weight: 600;
    color: #6b7280;
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* ==========================================================
   INPUT TEXTE – RECHERCHE
   ========================================================== */
.search-input-wrapper {
    position: relative;
}

.search-input-wrapper i {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    color: #9ca3af;
    font-size: 1rem;
}

.search-input-wrapper .form-input {
    width: 100%;
    padding: 10px 12px 10px 36px;
    border-radius: 10px;
    border: 1px solid #d1d5db;
    font-size: 0.9rem;
    background-color: #ffffff;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.search-input-wrapper .form-input:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}

/* ==========================================================
   SELECTS
   ========================================================== */
.form-select {
    padding: 10px 12px;
    border-radius: 10px;
    border: 1px solid #d1d5db;
    font-size: 0.9rem;
    background-color: #ffffff;
    cursor: pointer;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.form-select:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}

/* ==========================================================
   ACTIONS (BOUTONS)
   ========================================================== */
.filter-actions {
    display: flex;
    gap: 10px;
    margin-left: auto;
}

/* Boutons */
.filter-actions .btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 10px 14px;
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: background-color 0.2s ease, box-shadow 0.2s ease, transform 0.15s ease;
}

/* Primaire */
.btn-primary {
    background: #2563eb;
    color: #ffffff;
}

.btn-primary:hover {
    background: #1e40af;
    box-shadow: 0 6px 16px rgba(37, 99, 235, 0.3);
    transform: translateY(-1px);
}

/* Secondaire */
.btn-secondary {
    background: #f3f4f6;
    color: #374151;
}

.btn-secondary:hover {
    background: #e5e7eb;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
}

/* ==========================================================
   RESPONSIVE
   ========================================================== */
@media (max-width: 768px) {
    .filters-row {
        flex-direction: column;
        align-items: stretch;
    }

    .filter-actions {
        margin-left: 0;
        justify-content: flex-end;
    }
}

/* ==========================================================
   CARD – STRUCTURE GÉNÉRALE
   ========================================================== */
.card {
    background-color: #ffffff;      /* Fond blanc */
    border-radius: 14px;           /* Coins arrondis */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); /* Ombre douce */
    padding: 20px 24px;            /* Padding interne */
    margin-bottom: 1.5rem;         /* Espacement sous la carte */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

/* Hover – effet subtil */
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

/* Header de la carte */
.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
    flex-wrap: wrap;
}

.card-header h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #111827;
    display: flex;
    align-items: center;
    gap: 8px;
}

.card-actions a {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    background-color: #f3f4f6;
    color: #374151;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
}

.card-actions a:hover {
    background-color: #e5e7eb;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
}

/* Contenu responsive de la carte */
.card-content {
    width: 100%;
}

/* Table responsive dans la carte */
.card .table-responsive {
    overflow-x: auto;
}

/* Pagination et autres composants internes */
.pagination-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
}

.pagination-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background-color: #f3f4f6;
    color: #374151;
    font-weight: 600;
    transition: background-color 0.2s ease;
    text-decoration: none;
}

.pagination-btn.active, .pagination-btn:hover {
    background-color: #2563eb;
    color: #ffffff;
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 250
        yield "<div class=\"content-area\">
    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i class=\"ri-team-line\"></i>
                </span>
                Partenaires
            </h2>
            <p>Gestion des bailleurs de fonds et partenaires techniques</p>
        </div>

        <a href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_new");
        yield "\" class=\"btn btn-gold\">
            <i class=\"ri-add-line\"></i>
            Nouveau Partenaire
        </a>
    </div>

    <!-- Flash Messages -->
    ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "flashes", [], "any", false, false, false, 270));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 271
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 272
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\" style=\"margin-bottom: 1rem; padding: 1rem; border-radius: 8px; 
                ";
                // line 273
                if (($context["label"] == "success")) {
                    yield "background: rgba(16, 185, 129, 0.1); border: 1px solid var(--success); color: var(--success);";
                }
                // line 274
                yield "                ";
                if (($context["label"] == "error")) {
                    yield "background: rgba(239, 68, 68, 0.1); border: 1px solid var(--danger); color: var(--danger);";
                }
                yield "\">
                <i class=\"ri-";
                // line 275
                if (($context["label"] == "success")) {
                    yield "check";
                } else {
                    yield "error-warning";
                }
                yield "-line\"></i>
                ";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        yield "
    <!-- Stats -->
    <div class=\"stats-row\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue);\">
                    <i class=\"ri-building-2-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 289, $this->source); })()), "total", [], "any", false, false, false, 289), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Total Partenaires</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(16, 185, 129, 0.1); color: var(--success);\">
                    <i class=\"ri-checkbox-circle-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 299, $this->source); })()), "actifs", [], "any", false, false, false, 299), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Partenaires Actifs</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(254, 203, 0, 0.2); color: #b8860b;\">
                    <i class=\"ri-coins-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\"><small>";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 309, $this->source); })()), "byType", [], "any", false, false, false, 309)), "html", null, true);
        yield "</small></div>
            <div class=\"stat-label\">Types de Partenaires</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(239, 68, 68, 0.1); color: var(--danger);\">
                    <i class=\"ri-alert-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 319
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byStatus", [], "any", false, true, false, 319), "Inactif", [], "array", true, true, false, 319) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 319, $this->source); })()), "byStatus", [], "any", false, false, false, 319), "Inactif", [], "array", false, false, false, 319)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 319, $this->source); })()), "byStatus", [], "any", false, false, false, 319), "Inactif", [], "array", false, false, false, 319), "html", null, true)) : (0));
        yield "</div>
            <div class=\"stat-label\">Partenaires Inactifs</div>
        </div>
    </div>

    <!-- Filters -->
    <div class=\"card\" style=\"margin-bottom: 1.5rem;\">
        <form method=\"GET\" action=\"";
        // line 326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Rechercher</label>
                    <div class=\"search-input-wrapper\">
                        <i class=\"ri-search-line\"></i>
                        <input type=\"text\" name=\"search\" class=\"form-input\" placeholder=\"Nom, acronyme...\" value=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 332, $this->source); })()), "html", null, true);
        yield "\">
                    </div>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"\">Tous les types</option>
                        ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 340, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 341
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 341), "html", null, true);
            yield "\" ";
            if (((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 341, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 341))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 342), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"Actif\" ";
        // line 352
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 352, $this->source); })()) == "Actif")) {
            yield "selected";
        }
        yield ">Actif</option>
                        <option value=\"Inactif\" ";
        // line 353
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 353, $this->source); })()) == "Inactif")) {
            yield "selected";
        }
        yield ">Inactif</option>
                        <option value=\"Suspendu\" ";
        // line 354
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 354, $this->source); })()) == "Suspendu")) {
            yield "selected";
        }
        yield ">Suspendu</option>
                    </select>
                </div>

                <div class=\"filter-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"ri-filter-line\"></i> Filtrer
                    </button>
                    <a href=\"";
        // line 362
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"ri-refresh-line\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- Table Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 style=\"font-size:1.1rem; font-weight:600;\">
                Liste des Partenaires 
                <span class=\"badge\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 375, $this->source); })()), "html", null, true);
        yield " résultat";
        yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 375, $this->source); })()) > 1)) ? ("s") : (""));
        yield "</span>
            </h3>
        </div>

        <div style=\"overflow-x:auto;\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Organisation</th>
                        <th>Type</th>
                        <th>Point Focal</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 392, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 393
            yield "                        <tr>
                            <td>
                                <div class=\"partner-logo\">
                                    ";
            // line 396
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 397
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 397))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 397), "html", null, true);
                yield "\">
                                    ";
            } else {
                // line 399
                yield "                                        <div class=\"logo-placeholder\">
                                            <i class=\"ri-building-2-line\"></i>
                                        </div>
                                    ";
            }
            // line 403
            yield "                                </div>
                            </td>
                            <td>
                                <div class=\"partner-info\">
                                    <strong>";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 407), "html", null, true);
            yield "</strong>
                                    ";
            // line 408
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "acronym", [], "any", false, false, false, 408)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 409
                yield "                                        <span class=\"acronym\">(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "acronym", [], "any", false, false, false, 409), "html", null, true);
                yield ")</span>
                                    ";
            }
            // line 411
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "siteWeb", [], "any", false, false, false, 411)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 412
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "siteWeb", [], "any", false, false, false, 412), "html", null, true);
                yield "\" target=\"_blank\" class=\"website-link\">
                                            <i class=\"ri-external-link-line\"></i>
                                        </a>
                                    ";
            }
            // line 416
            yield "                                </div>
                            </td>
                            <td>
                                <span class=\"type-badge type-";
            // line 419
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, true, false, 419), "code", [], "any", true, true, false, 419) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 419), "code", [], "any", false, false, false, 419)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 419), "code", [], "any", false, false, false, 419), "html", null, true)) : ("default"));
            yield "\">
                                    ";
            // line 420
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, true, false, 420), "name", [], "any", true, true, false, 420) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 420), "name", [], "any", false, false, false, 420)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 420), "name", [], "any", false, false, false, 420), "html", null, true)) : ("Non défini"));
            yield "
                                </span>
                            </td>
                            <td>
                                ";
            // line 424
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactName", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 425
                yield "                                    <div class=\"contact-info\">
                                        <span class=\"contact-name\">";
                // line 426
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactName", [], "any", false, false, false, 426), "html", null, true);
                yield "</span>
                                        ";
                // line 427
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 427)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 428
                    yield "                                            <a href=\"mailto:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 428), "html", null, true);
                    yield "\" class=\"contact-email\">
                                                <i class=\"ri-mail-line\"></i> ";
                    // line 429
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 429), "html", null, true);
                    yield "
                                            </a>
                                        ";
                }
                // line 432
                yield "                                    </div>
                                ";
            } else {
                // line 434
                yield "                                    <span class=\"text-muted\">Non renseigné</span>
                                ";
            }
            // line 436
            yield "                            </td>
                            <td>
                                <span class=\"status-badge status-";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "status", [], "any", false, false, false, 438)), "html", null, true);
            yield "\">
                                    ";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "status", [], "any", false, false, false, 439), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"actions-group\">
                                    <a href=\"";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "slug", [], "any", false, false, false, 444)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Voir détails\">
                                        <i class=\"ri-eye-line\"></i>
                                    </a>
                                    <a href=\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 447)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Modifier\">
                                        <i class=\"ri-edit-line\"></i>
                                    </a>
                                    <button type=\"button\" class=\"action-btn delete\" title=\"Supprimer\" 
                                            onclick=\"confirmDelete(";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 451), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 451), "js"), "html", null, true);
            yield "')\">
                                        <i class=\"ri-delete-bin-6-line\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 457
        if (!$context['_iterated']) {
            // line 458
            yield "                        <tr>
                            <td colspan=\"6\" class=\"empty-state\">
                                <div class=\"empty-icon\">
                                    <i class=\"ri-team-line\"></i>
                                </div>
                                <p>Aucun partenaire trouvé</p>
                                <a href=\"";
            // line 464
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_new");
            yield "\" class=\"btn btn-primary\">
                                    <i class=\"ri-add-line\"></i> Ajouter un partenaire
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partner'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 475
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 475, $this->source); })()) > 1)) {
            // line 476
            yield "            <div class=\"pagination-wrapper\">
                <div class=\"pagination\">
                    ";
            // line 478
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 478, $this->source); })()) > 1)) {
                // line 479
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 479, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 479, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 479, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 479, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\">
                            <i class=\"ri-arrow-left-s-line\"></i>
                        </a>
                    ";
            }
            // line 483
            yield "
                    ";
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 484, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 485
                yield "                        ";
                if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 485, $this->source); })()))) {
                    // line 486
                    yield "                            <span class=\"page-link active\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</span>
                        ";
                } elseif ((((                // line 487
$context["i"] == 1) || ($context["i"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 487, $this->source); })()))) || (($context["i"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 487, $this->source); })()) - 2)) && ($context["i"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 487, $this->source); })()) + 2))))) {
                    // line 488
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 488, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 488, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 488, $this->source); })())]), "html", null, true);
                    yield "\" class=\"page-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                        ";
                } elseif (((                // line 489
$context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 489, $this->source); })()) - 3)) || ($context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 489, $this->source); })()) + 3)))) {
                    // line 490
                    yield "                            <span class=\"page-ellipsis\">...</span>
                        ";
                }
                // line 492
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            yield "
                    ";
            // line 494
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 494, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 494, $this->source); })()))) {
                // line 495
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 495, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 495, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 495, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 495, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\">
                            <i class=\"ri-arrow-right-s-line\"></i>
                        </a>
                    ";
            }
            // line 499
            yield "                </div>
            </div>
        ";
        }
        // line 502
        yield "    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\" style=\"color: var(--danger);\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer le partenaire <strong id=\"partnerNameToDelete\"></strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"ri-delete-bin-6-line\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 532
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 533
        yield "<script>
    function confirmDelete(id, name) {
        document.getElementById('partnerNameToDelete').textContent = name;
        document.getElementById('deleteForm').action = '/partners/' + id;
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }

    // Fermer le modal avec Escape
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
        return "partner/index.html.twig";
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
        return array (  886 => 533,  876 => 532,  859 => 522,  837 => 502,  832 => 499,  824 => 495,  822 => 494,  819 => 493,  813 => 492,  809 => 490,  807 => 489,  800 => 488,  798 => 487,  793 => 486,  790 => 485,  786 => 484,  783 => 483,  775 => 479,  773 => 478,  769 => 476,  767 => 475,  760 => 470,  748 => 464,  740 => 458,  738 => 457,  725 => 451,  718 => 447,  712 => 444,  704 => 439,  700 => 438,  696 => 436,  692 => 434,  688 => 432,  682 => 429,  677 => 428,  675 => 427,  671 => 426,  668 => 425,  666 => 424,  659 => 420,  655 => 419,  650 => 416,  642 => 412,  639 => 411,  633 => 409,  631 => 408,  627 => 407,  621 => 403,  615 => 399,  607 => 397,  605 => 396,  600 => 393,  595 => 392,  573 => 375,  557 => 362,  544 => 354,  538 => 353,  532 => 352,  523 => 345,  514 => 342,  505 => 341,  501 => 340,  490 => 332,  481 => 326,  471 => 319,  458 => 309,  445 => 299,  432 => 289,  421 => 280,  415 => 279,  406 => 276,  398 => 275,  391 => 274,  387 => 273,  382 => 272,  377 => 271,  373 => 270,  363 => 263,  348 => 250,  338 => 249,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Partenaires - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/partner.css') }}\">
<style>
   /* ==========================================================
   FILTRES – CARD
   ========================================================== */
.filters-form {
    width: 100%;
}

.filters-row {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    align-items: flex-end;
}

/* ==========================================================
   GROUPES DE FILTRES
   ========================================================== */
.filter-group {
    display: flex;
    flex-direction: column;
    min-width: 200px;
    flex: 1;
}

/* Label */
.filter-label {
    font-size: 0.75rem;
    font-weight: 600;
    color: #6b7280;
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* ==========================================================
   INPUT TEXTE – RECHERCHE
   ========================================================== */
.search-input-wrapper {
    position: relative;
}

.search-input-wrapper i {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    color: #9ca3af;
    font-size: 1rem;
}

.search-input-wrapper .form-input {
    width: 100%;
    padding: 10px 12px 10px 36px;
    border-radius: 10px;
    border: 1px solid #d1d5db;
    font-size: 0.9rem;
    background-color: #ffffff;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.search-input-wrapper .form-input:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}

/* ==========================================================
   SELECTS
   ========================================================== */
.form-select {
    padding: 10px 12px;
    border-radius: 10px;
    border: 1px solid #d1d5db;
    font-size: 0.9rem;
    background-color: #ffffff;
    cursor: pointer;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.form-select:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}

/* ==========================================================
   ACTIONS (BOUTONS)
   ========================================================== */
.filter-actions {
    display: flex;
    gap: 10px;
    margin-left: auto;
}

/* Boutons */
.filter-actions .btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 10px 14px;
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: background-color 0.2s ease, box-shadow 0.2s ease, transform 0.15s ease;
}

/* Primaire */
.btn-primary {
    background: #2563eb;
    color: #ffffff;
}

.btn-primary:hover {
    background: #1e40af;
    box-shadow: 0 6px 16px rgba(37, 99, 235, 0.3);
    transform: translateY(-1px);
}

/* Secondaire */
.btn-secondary {
    background: #f3f4f6;
    color: #374151;
}

.btn-secondary:hover {
    background: #e5e7eb;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
}

/* ==========================================================
   RESPONSIVE
   ========================================================== */
@media (max-width: 768px) {
    .filters-row {
        flex-direction: column;
        align-items: stretch;
    }

    .filter-actions {
        margin-left: 0;
        justify-content: flex-end;
    }
}

/* ==========================================================
   CARD – STRUCTURE GÉNÉRALE
   ========================================================== */
.card {
    background-color: #ffffff;      /* Fond blanc */
    border-radius: 14px;           /* Coins arrondis */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); /* Ombre douce */
    padding: 20px 24px;            /* Padding interne */
    margin-bottom: 1.5rem;         /* Espacement sous la carte */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

/* Hover – effet subtil */
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

/* Header de la carte */
.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
    flex-wrap: wrap;
}

.card-header h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #111827;
    display: flex;
    align-items: center;
    gap: 8px;
}

.card-actions a {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    background-color: #f3f4f6;
    color: #374151;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
}

.card-actions a:hover {
    background-color: #e5e7eb;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
}

/* Contenu responsive de la carte */
.card-content {
    width: 100%;
}

/* Table responsive dans la carte */
.card .table-responsive {
    overflow-x: auto;
}

/* Pagination et autres composants internes */
.pagination-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
}

.pagination-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background-color: #f3f4f6;
    color: #374151;
    font-weight: 600;
    transition: background-color 0.2s ease;
    text-decoration: none;
}

.pagination-btn.active, .pagination-btn:hover {
    background-color: #2563eb;
    color: #ffffff;
}

</style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i class=\"ri-team-line\"></i>
                </span>
                Partenaires
            </h2>
            <p>Gestion des bailleurs de fonds et partenaires techniques</p>
        </div>

        <a href=\"{{ path('app_partners_new') }}\" class=\"btn btn-gold\">
            <i class=\"ri-add-line\"></i>
            Nouveau Partenaire
        </a>
    </div>

    <!-- Flash Messages -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\" style=\"margin-bottom: 1rem; padding: 1rem; border-radius: 8px; 
                {% if label == 'success' %}background: rgba(16, 185, 129, 0.1); border: 1px solid var(--success); color: var(--success);{% endif %}
                {% if label == 'error' %}background: rgba(239, 68, 68, 0.1); border: 1px solid var(--danger); color: var(--danger);{% endif %}\">
                <i class=\"ri-{% if label == 'success' %}check{% else %}error-warning{% endif %}-line\"></i>
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Stats -->
    <div class=\"stats-row\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue);\">
                    <i class=\"ri-building-2-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ stats.total }}</div>
            <div class=\"stat-label\">Total Partenaires</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(16, 185, 129, 0.1); color: var(--success);\">
                    <i class=\"ri-checkbox-circle-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ stats.actifs }}</div>
            <div class=\"stat-label\">Partenaires Actifs</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(254, 203, 0, 0.2); color: #b8860b;\">
                    <i class=\"ri-coins-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\"><small>{{ stats.byType|length }}</small></div>
            <div class=\"stat-label\">Types de Partenaires</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(239, 68, 68, 0.1); color: var(--danger);\">
                    <i class=\"ri-alert-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ stats.byStatus['Inactif'] ?? 0 }}</div>
            <div class=\"stat-label\">Partenaires Inactifs</div>
        </div>
    </div>

    <!-- Filters -->
    <div class=\"card\" style=\"margin-bottom: 1.5rem;\">
        <form method=\"GET\" action=\"{{ path('app_partners') }}\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Rechercher</label>
                    <div class=\"search-input-wrapper\">
                        <i class=\"ri-search-line\"></i>
                        <input type=\"text\" name=\"search\" class=\"form-input\" placeholder=\"Nom, acronyme...\" value=\"{{ search }}\">
                    </div>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"\">Tous les types</option>
                        {% for type in types %}
                            <option value=\"{{ type.id }}\" {% if currentType == type.id %}selected{% endif %}>
                                {{ type.name }}
                            </option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"Actif\" {% if currentStatus == 'Actif' %}selected{% endif %}>Actif</option>
                        <option value=\"Inactif\" {% if currentStatus == 'Inactif' %}selected{% endif %}>Inactif</option>
                        <option value=\"Suspendu\" {% if currentStatus == 'Suspendu' %}selected{% endif %}>Suspendu</option>
                    </select>
                </div>

                <div class=\"filter-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"ri-filter-line\"></i> Filtrer
                    </button>
                    <a href=\"{{ path('app_partners') }}\" class=\"btn btn-secondary\">
                        <i class=\"ri-refresh-line\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- Table Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 style=\"font-size:1.1rem; font-weight:600;\">
                Liste des Partenaires 
                <span class=\"badge\">{{ total }} résultat{{ total > 1 ? 's' : '' }}</span>
            </h3>
        </div>

        <div style=\"overflow-x:auto;\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Organisation</th>
                        <th>Type</th>
                        <th>Point Focal</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for partner in partners %}
                        <tr>
                            <td>
                                <div class=\"partner-logo\">
                                    {% if partner.logo %}
                                        <img src=\"{{ asset('uploads/images/' ~ partner.logo) }}\" alt=\"{{ partner.name }}\">
                                    {% else %}
                                        <div class=\"logo-placeholder\">
                                            <i class=\"ri-building-2-line\"></i>
                                        </div>
                                    {% endif %}
                                </div>
                            </td>
                            <td>
                                <div class=\"partner-info\">
                                    <strong>{{ partner.name }}</strong>
                                    {% if partner.acronym %}
                                        <span class=\"acronym\">({{ partner.acronym }})</span>
                                    {% endif %}
                                    {% if partner.siteWeb %}
                                        <a href=\"{{ partner.siteWeb }}\" target=\"_blank\" class=\"website-link\">
                                            <i class=\"ri-external-link-line\"></i>
                                        </a>
                                    {% endif %}
                                </div>
                            </td>
                            <td>
                                <span class=\"type-badge type-{{ partner.typePartner.code ?? 'default' }}\">
                                    {{ partner.typePartner.name ?? 'Non défini' }}
                                </span>
                            </td>
                            <td>
                                {% if partner.contactName %}
                                    <div class=\"contact-info\">
                                        <span class=\"contact-name\">{{ partner.contactName }}</span>
                                        {% if partner.contactEmail %}
                                            <a href=\"mailto:{{ partner.contactEmail }}\" class=\"contact-email\">
                                                <i class=\"ri-mail-line\"></i> {{ partner.contactEmail }}
                                            </a>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    <span class=\"text-muted\">Non renseigné</span>
                                {% endif %}
                            </td>
                            <td>
                                <span class=\"status-badge status-{{ partner.status|lower }}\">
                                    {{ partner.status }}
                                </span>
                            </td>
                            <td>
                                <div class=\"actions-group\">
                                    <a href=\"{{ path('app_partners_show', {slug: partner.slug}) }}\" class=\"action-btn\" title=\"Voir détails\">
                                        <i class=\"ri-eye-line\"></i>
                                    </a>
                                    <a href=\"{{ path('app_partners_edit', {id: partner.id}) }}\" class=\"action-btn\" title=\"Modifier\">
                                        <i class=\"ri-edit-line\"></i>
                                    </a>
                                    <button type=\"button\" class=\"action-btn delete\" title=\"Supprimer\" 
                                            onclick=\"confirmDelete({{ partner.id }}, '{{ partner.name|e('js') }}')\">
                                        <i class=\"ri-delete-bin-6-line\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"empty-state\">
                                <div class=\"empty-icon\">
                                    <i class=\"ri-team-line\"></i>
                                </div>
                                <p>Aucun partenaire trouvé</p>
                                <a href=\"{{ path('app_partners_new') }}\" class=\"btn btn-primary\">
                                    <i class=\"ri-add-line\"></i> Ajouter un partenaire
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        {% if totalPages > 1 %}
            <div class=\"pagination-wrapper\">
                <div class=\"pagination\">
                    {% if currentPage > 1 %}
                        <a href=\"{{ path('app_partners', {page: currentPage - 1, search: search, status: currentStatus, type: currentType}) }}\" class=\"page-link\">
                            <i class=\"ri-arrow-left-s-line\"></i>
                        </a>
                    {% endif %}

                    {% for i in 1..totalPages %}
                        {% if i == currentPage %}
                            <span class=\"page-link active\">{{ i }}</span>
                        {% elseif i == 1 or i == totalPages or (i >= currentPage - 2 and i <= currentPage + 2) %}
                            <a href=\"{{ path('app_partners', {page: i, search: search, status: currentStatus, type: currentType}) }}\" class=\"page-link\">{{ i }}</a>
                        {% elseif i == currentPage - 3 or i == currentPage + 3 %}
                            <span class=\"page-ellipsis\">...</span>
                        {% endif %}
                    {% endfor %}

                    {% if currentPage < totalPages %}
                        <a href=\"{{ path('app_partners', {page: currentPage + 1, search: search, status: currentStatus, type: currentType}) }}\" class=\"page-link\">
                            <i class=\"ri-arrow-right-s-line\"></i>
                        </a>
                    {% endif %}
                </div>
            </div>
        {% endif %}
    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\" style=\"color: var(--danger);\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer le partenaire <strong id=\"partnerNameToDelete\"></strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete') }}\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"ri-delete-bin-6-line\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    function confirmDelete(id, name) {
        document.getElementById('partnerNameToDelete').textContent = name;
        document.getElementById('deleteForm').action = '/partners/' + id;
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }

    // Fermer le modal avec Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
{% endblock %}
", "partner/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partner\\index.html.twig");
    }
}
