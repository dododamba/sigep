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

/* institution/index.html.twig */
class __TwigTemplate_a50929ef9175ae585be822c440c42eb2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "institution/index.html.twig"));

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

        yield "Institutions - SIGEP Tchad";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/institution.css"), "html", null, true);
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
    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i class=\"ri-government-line\"></i>
                </span>
                Institutions
            </h2>
            <p>Gestion des ministères et agences publiques du Tchad</p>
        </div>

        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_new");
        yield "\" class=\"btn btn-gold\">
            <i class=\"ri-add-line\"></i>
            Nouvelle Institution
        </a>
    </div>

    <!-- Flash Messages -->
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 31
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i class=\"ri-";
                // line 33
                if (($context["label"] == "success")) {
                    yield "check";
                } else {
                    yield "error-warning";
                }
                yield "-line\"></i>
                ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
    <!-- Stats -->
    <div class=\"stats-row\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue);\">
                    <i class=\"ri-building-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 47, $this->source); })()), "total", [], "any", false, false, false, 47), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Total Institutions</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(16, 185, 129, 0.1); color: var(--success);\">
                    <i class=\"ri-checkbox-circle-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "actifs", [], "any", false, false, false, 57), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Institutions Actives</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(254, 203, 0, 0.2); color: #b8860b;\">
                    <i class=\"ri-government-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 67
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byType", [], "any", false, true, false, 67), "Ministère", [], "array", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 67, $this->source); })()), "byType", [], "any", false, false, false, 67), "Ministère", [], "array", false, false, false, 67)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 67, $this->source); })()), "byType", [], "any", false, false, false, 67), "Ministère", [], "array", false, false, false, 67), "html", null, true)) : (0));
        yield "</div>
            <div class=\"stat-label\">Ministères</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(99, 102, 241, 0.1); color: #6366f1;\">
                    <i class=\"ri-bank-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 77, $this->source); })()), "byType", [], "any", false, false, false, 77)), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Types d'entités</div>
        </div>
    </div>

    <!-- Filters -->
    <div class=\"card filters-card\">
        <form method=\"GET\" action=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Rechercher</label>
                    <div class=\"search-input-wrapper\">
                        <i class=\"ri-search-line\"></i>
                        <input type=\"text\" name=\"search\" class=\"form-input\" placeholder=\"Nom, acronyme...\" value=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 90, $this->source); })()), "html", null, true);
        yield "\">
                    </div>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Type d'entité</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"\">Tous les types</option>
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 99
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 99), "html", null, true);
            yield "\" ";
            if (((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 99, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 99))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 100), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Secteur</label>
                    <select name=\"sector\" class=\"form-select\">
                        <option value=\"\">Tous les secteurs</option>
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectors"]) || array_key_exists("sectors", $context) ? $context["sectors"] : (function () { throw new RuntimeError('Variable "sectors" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sector"]) {
            // line 111
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sector"], "id", [], "any", false, false, false, 111), "html", null, true);
            yield "\" ";
            if (((isset($context["currentSector"]) || array_key_exists("currentSector", $context) ? $context["currentSector"] : (function () { throw new RuntimeError('Variable "currentSector" does not exist.', 111, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["sector"], "id", [], "any", false, false, false, 111))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sector"], "name", [], "any", false, false, false, 112), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sector'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"Actif\" ";
        // line 122
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 122, $this->source); })()) == "Actif")) {
            yield "selected";
        }
        yield ">Actif</option>
                        <option value=\"Inactif\" ";
        // line 123
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 123, $this->source); })()) == "Inactif")) {
            yield "selected";
        }
        yield ">Inactif</option>
                        <option value=\"En restructuration\" ";
        // line 124
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 124, $this->source); })()) == "En restructuration")) {
            yield "selected";
        }
        yield ">En restructuration</option>
                    </select>
                </div>

                <div class=\"filter-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"ri-filter-line\"></i> Filtrer
                    </button>
                    <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"ri-refresh-line\"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- Table Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3>
                <i class=\"ri-list-check-2\"></i>
                Liste des Institutions 
                <span class=\"badge\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 146, $this->source); })()), "html", null, true);
        yield " résultat";
        yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 146, $this->source); })()) > 1)) ? ("s") : (""));
        yield "</span>
            </h3>
        </div>

        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Institution</th>
                        <th>Type</th>
                        <th>Secteur</th>
                        <th>Responsable</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["institutions"]) || array_key_exists("institutions", $context) ? $context["institutions"] : (function () { throw new RuntimeError('Variable "institutions" does not exist.', 163, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["institution"]) {
            // line 164
            yield "                        <tr>
                            <td>
                                <div class=\"institution-cell\">
                                    <div class=\"institution-logo\">
                                        ";
            // line 168
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "logo", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "logo", [], "any", false, false, false, 169))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 169), "html", null, true);
                yield "\">
                                        ";
            } else {
                // line 171
                yield "                                            <div class=\"logo-placeholder\">
                                                <i class=\"ri-building-line\"></i>
                                            </div>
                                        ";
            }
            // line 175
            yield "                                    </div>
                                    <div class=\"institution-info\">
                                        <strong>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 177), "html", null, true);
            yield "</strong>
                                        ";
            // line 178
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "acronym", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "                                            <span class=\"acronym\">(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "acronym", [], "any", false, false, false, 179), "html", null, true);
                yield ")</span>
                                        ";
            }
            // line 181
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "website", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 182
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "website", [], "any", false, false, false, 182), "html", null, true);
                yield "\" target=\"_blank\" class=\"website-link\">
                                                <i class=\"ri-external-link-line\"></i>
                                            </a>
                                        ";
            }
            // line 186
            yield "                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class=\"type-badge type-";
            // line 190
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, true, false, 190), "code", [], "any", true, true, false, 190) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, false, false, 190), "code", [], "any", false, false, false, 190)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, false, false, 190), "code", [], "any", false, false, false, 190), "html", null, true)) : ("default"));
            yield "\">
                                    ";
            // line 191
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, true, false, 191), "name", [], "any", true, true, false, 191) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, false, false, 191), "name", [], "any", false, false, false, 191)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "typeInstitution", [], "any", false, false, false, 191), "name", [], "any", false, false, false, 191), "html", null, true)) : ("Non défini"));
            yield "
                                </span>
                            </td>
                            <td>
                                ";
            // line 195
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "sector", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 196
                yield "                                    <span class=\"sector-tag\">
                                        <i class=\"ri-folder-line\"></i>
                                        ";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "sector", [], "any", false, false, false, 198), "name", [], "any", false, false, false, 198), "html", null, true);
                yield "
                                    </span>
                                ";
            } else {
                // line 201
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 203
            yield "                            </td>
                            <td>
                                ";
            // line 205
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headName", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 206
                yield "                                    <div class=\"head-info\">
                                        <span class=\"head-name\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headName", [], "any", false, false, false, 207), "html", null, true);
                yield "</span>
                                        ";
                // line 208
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headTitle", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 209
                    yield "                                            <span class=\"head-title\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "headTitle", [], "any", false, false, false, 209), "html", null, true);
                    yield "</span>
                                        ";
                }
                // line 211
                yield "                                    </div>
                                ";
            } else {
                // line 213
                yield "                                    <span class=\"text-muted\">Non renseigné</span>
                                ";
            }
            // line 215
            yield "                            </td>
                            <td>
                                <span class=\"status-badge status-";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "status", [], "any", false, false, false, 217)), [" " => "-"]), "html", null, true);
            yield "\">
                                    ";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "status", [], "any", false, false, false, 218), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"actions-group\">
                                    <a href=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "slug", [], "any", false, false, false, 223)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Voir détails\">
                                        <i class=\"ri-eye-line\"></i>
                                    </a>
                                    <a href=\"";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 226)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Modifier\">
                                        <i class=\"ri-edit-line\"></i>
                                    </a>
                                    <button type=\"button\" class=\"action-btn delete\" title=\"Supprimer\" 
                                            onclick=\"confirmDelete(";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "id", [], "any", false, false, false, 230), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institution"], "name", [], "any", false, false, false, 230), "js"), "html", null, true);
            yield "')\">
                                        <i class=\"ri-delete-bin-6-line\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 236
        if (!$context['_iterated']) {
            // line 237
            yield "                        <tr>
                            <td colspan=\"6\" class=\"empty-state\">
                                <div class=\"empty-icon\">
                                    <i class=\"ri-building-line\"></i>
                                </div>
                                <p>Aucune institution trouvée</p>
                                <a href=\"";
            // line 243
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_new");
            yield "\" class=\"btn btn-primary\">
                                    <i class=\"ri-add-line\"></i> Ajouter une institution
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['institution'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 254
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 254, $this->source); })()) > 1)) {
            // line 255
            yield "            <div class=\"pagination-wrapper\">
                <div class=\"pagination\">
                    ";
            // line 257
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 257, $this->source); })()) > 1)) {
                // line 258
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 258, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 258, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 258, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 258, $this->source); })()), "sector" => (isset($context["currentSector"]) || array_key_exists("currentSector", $context) ? $context["currentSector"] : (function () { throw new RuntimeError('Variable "currentSector" does not exist.', 258, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\">
                            <i class=\"ri-arrow-left-s-line\"></i>
                        </a>
                    ";
            }
            // line 262
            yield "
                    ";
            // line 263
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 263, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 264
                yield "                        ";
                if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 264, $this->source); })()))) {
                    // line 265
                    yield "                            <span class=\"page-link active\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</span>
                        ";
                } elseif ((((                // line 266
$context["i"] == 1) || ($context["i"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 266, $this->source); })()))) || (($context["i"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 266, $this->source); })()) - 2)) && ($context["i"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 266, $this->source); })()) + 2))))) {
                    // line 267
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 267, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 267, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 267, $this->source); })()), "sector" => (isset($context["currentSector"]) || array_key_exists("currentSector", $context) ? $context["currentSector"] : (function () { throw new RuntimeError('Variable "currentSector" does not exist.', 267, $this->source); })())]), "html", null, true);
                    yield "\" class=\"page-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                        ";
                } elseif (((                // line 268
$context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 268, $this->source); })()) - 3)) || ($context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 268, $this->source); })()) + 3)))) {
                    // line 269
                    yield "                            <span class=\"page-ellipsis\">...</span>
                        ";
                }
                // line 271
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            yield "
                    ";
            // line 273
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 273, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 273, $this->source); })()))) {
                // line 274
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 274, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 274, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 274, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 274, $this->source); })()), "sector" => (isset($context["currentSector"]) || array_key_exists("currentSector", $context) ? $context["currentSector"] : (function () { throw new RuntimeError('Variable "currentSector" does not exist.', 274, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\">
                            <i class=\"ri-arrow-right-s-line\"></i>
                        </a>
                    ";
            }
            // line 278
            yield "                </div>
            </div>
        ";
        }
        // line 281
        yield "    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer l'institution <strong id=\"institutionNameToDelete\"></strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 301
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

    // line 311
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 312
        yield "<script>
    function confirmDelete(id, name) {
        document.getElementById('institutionNameToDelete').textContent = name;
        document.getElementById('deleteForm').action = '/institutions/' + id;
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
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
        return "institution/index.html.twig";
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
        return array (  682 => 312,  672 => 311,  655 => 301,  633 => 281,  628 => 278,  620 => 274,  618 => 273,  615 => 272,  609 => 271,  605 => 269,  603 => 268,  596 => 267,  594 => 266,  589 => 265,  586 => 264,  582 => 263,  579 => 262,  571 => 258,  569 => 257,  565 => 255,  563 => 254,  556 => 249,  544 => 243,  536 => 237,  534 => 236,  521 => 230,  514 => 226,  508 => 223,  500 => 218,  496 => 217,  492 => 215,  488 => 213,  484 => 211,  478 => 209,  476 => 208,  472 => 207,  469 => 206,  467 => 205,  463 => 203,  459 => 201,  453 => 198,  449 => 196,  447 => 195,  440 => 191,  436 => 190,  430 => 186,  422 => 182,  419 => 181,  413 => 179,  411 => 178,  407 => 177,  403 => 175,  397 => 171,  389 => 169,  387 => 168,  381 => 164,  376 => 163,  354 => 146,  337 => 132,  324 => 124,  318 => 123,  312 => 122,  303 => 115,  294 => 112,  285 => 111,  281 => 110,  272 => 103,  263 => 100,  254 => 99,  250 => 98,  239 => 90,  230 => 84,  220 => 77,  207 => 67,  194 => 57,  181 => 47,  170 => 38,  164 => 37,  155 => 34,  147 => 33,  142 => 32,  137 => 31,  133 => 30,  123 => 23,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Institutions - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/institution.css') }}\">
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i class=\"ri-government-line\"></i>
                </span>
                Institutions
            </h2>
            <p>Gestion des ministères et agences publiques du Tchad</p>
        </div>

        <a href=\"{{ path('app_institutions_new') }}\" class=\"btn btn-gold\">
            <i class=\"ri-add-line\"></i>
            Nouvelle Institution
        </a>
    </div>

    <!-- Flash Messages -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
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
                    <i class=\"ri-building-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ stats.total }}</div>
            <div class=\"stat-label\">Total Institutions</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(16, 185, 129, 0.1); color: var(--success);\">
                    <i class=\"ri-checkbox-circle-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ stats.actifs }}</div>
            <div class=\"stat-label\">Institutions Actives</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(254, 203, 0, 0.2); color: #b8860b;\">
                    <i class=\"ri-government-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ stats.byType['Ministère'] ?? 0 }}</div>
            <div class=\"stat-label\">Ministères</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(99, 102, 241, 0.1); color: #6366f1;\">
                    <i class=\"ri-bank-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ stats.byType|length }}</div>
            <div class=\"stat-label\">Types d'entités</div>
        </div>
    </div>

    <!-- Filters -->
    <div class=\"card filters-card\">
        <form method=\"GET\" action=\"{{ path('app_institutions') }}\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Rechercher</label>
                    <div class=\"search-input-wrapper\">
                        <i class=\"ri-search-line\"></i>
                        <input type=\"text\" name=\"search\" class=\"form-input\" placeholder=\"Nom, acronyme...\" value=\"{{ search }}\">
                    </div>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Type d'entité</label>
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
                    <label class=\"filter-label\">Secteur</label>
                    <select name=\"sector\" class=\"form-select\">
                        <option value=\"\">Tous les secteurs</option>
                        {% for sector in sectors %}
                            <option value=\"{{ sector.id }}\" {% if currentSector == sector.id %}selected{% endif %}>
                                {{ sector.name }}
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
                        <option value=\"En restructuration\" {% if currentStatus == 'En restructuration' %}selected{% endif %}>En restructuration</option>
                    </select>
                </div>

                <div class=\"filter-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"ri-filter-line\"></i> Filtrer
                    </button>
                    <a href=\"{{ path('app_institutions') }}\" class=\"btn btn-secondary\">
                        <i class=\"ri-refresh-line\"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- Table Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3>
                <i class=\"ri-list-check-2\"></i>
                Liste des Institutions 
                <span class=\"badge\">{{ total }} résultat{{ total > 1 ? 's' : '' }}</span>
            </h3>
        </div>

        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Institution</th>
                        <th>Type</th>
                        <th>Secteur</th>
                        <th>Responsable</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for institution in institutions %}
                        <tr>
                            <td>
                                <div class=\"institution-cell\">
                                    <div class=\"institution-logo\">
                                        {% if institution.logo %}
                                            <img src=\"{{ asset('uploads/images/' ~ institution.logo) }}\" alt=\"{{ institution.name }}\">
                                        {% else %}
                                            <div class=\"logo-placeholder\">
                                                <i class=\"ri-building-line\"></i>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"institution-info\">
                                        <strong>{{ institution.name }}</strong>
                                        {% if institution.acronym %}
                                            <span class=\"acronym\">({{ institution.acronym }})</span>
                                        {% endif %}
                                        {% if institution.website %}
                                            <a href=\"{{ institution.website }}\" target=\"_blank\" class=\"website-link\">
                                                <i class=\"ri-external-link-line\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class=\"type-badge type-{{ institution.typeInstitution.code ?? 'default' }}\">
                                    {{ institution.typeInstitution.name ?? 'Non défini' }}
                                </span>
                            </td>
                            <td>
                                {% if institution.sector %}
                                    <span class=\"sector-tag\">
                                        <i class=\"ri-folder-line\"></i>
                                        {{ institution.sector.name }}
                                    </span>
                                {% else %}
                                    <span class=\"text-muted\">—</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if institution.headName %}
                                    <div class=\"head-info\">
                                        <span class=\"head-name\">{{ institution.headName }}</span>
                                        {% if institution.headTitle %}
                                            <span class=\"head-title\">{{ institution.headTitle }}</span>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    <span class=\"text-muted\">Non renseigné</span>
                                {% endif %}
                            </td>
                            <td>
                                <span class=\"status-badge status-{{ institution.status|lower|replace({' ': '-'}) }}\">
                                    {{ institution.status }}
                                </span>
                            </td>
                            <td>
                                <div class=\"actions-group\">
                                    <a href=\"{{ path('app_institutions_show', {slug: institution.slug}) }}\" class=\"action-btn\" title=\"Voir détails\">
                                        <i class=\"ri-eye-line\"></i>
                                    </a>
                                    <a href=\"{{ path('app_institutions_edit', {id: institution.id}) }}\" class=\"action-btn\" title=\"Modifier\">
                                        <i class=\"ri-edit-line\"></i>
                                    </a>
                                    <button type=\"button\" class=\"action-btn delete\" title=\"Supprimer\" 
                                            onclick=\"confirmDelete({{ institution.id }}, '{{ institution.name|e('js') }}')\">
                                        <i class=\"ri-delete-bin-6-line\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"empty-state\">
                                <div class=\"empty-icon\">
                                    <i class=\"ri-building-line\"></i>
                                </div>
                                <p>Aucune institution trouvée</p>
                                <a href=\"{{ path('app_institutions_new') }}\" class=\"btn btn-primary\">
                                    <i class=\"ri-add-line\"></i> Ajouter une institution
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
                        <a href=\"{{ path('app_institutions', {page: currentPage - 1, search: search, status: currentStatus, type: currentType, sector: currentSector}) }}\" class=\"page-link\">
                            <i class=\"ri-arrow-left-s-line\"></i>
                        </a>
                    {% endif %}

                    {% for i in 1..totalPages %}
                        {% if i == currentPage %}
                            <span class=\"page-link active\">{{ i }}</span>
                        {% elseif i == 1 or i == totalPages or (i >= currentPage - 2 and i <= currentPage + 2) %}
                            <a href=\"{{ path('app_institutions', {page: i, search: search, status: currentStatus, type: currentType, sector: currentSector}) }}\" class=\"page-link\">{{ i }}</a>
                        {% elseif i == currentPage - 3 or i == currentPage + 3 %}
                            <span class=\"page-ellipsis\">...</span>
                        {% endif %}
                    {% endfor %}

                    {% if currentPage < totalPages %}
                        <a href=\"{{ path('app_institutions', {page: currentPage + 1, search: search, status: currentStatus, type: currentType, sector: currentSector}) }}\" class=\"page-link\">
                            <i class=\"ri-arrow-right-s-line\"></i>
                        </a>
                    {% endif %}
                </div>
            </div>
        {% endif %}
    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer l'institution <strong id=\"institutionNameToDelete\"></strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\">
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
        document.getElementById('institutionNameToDelete').textContent = name;
        document.getElementById('deleteForm').action = '/institutions/' + id;
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
{% endblock %}
", "institution/index.html.twig", "/home/xdevcorp/Projects/sigep/templates/institution/index.html.twig");
    }
}
