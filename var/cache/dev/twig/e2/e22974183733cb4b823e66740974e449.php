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

/* project/index.html.twig */
class __TwigTemplate_fab28c214bfc8c43c699c822095c47f8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

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

        yield "Gestion des Projets - SIGEP Tchad";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/project.css"), "html", null, true);
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
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"briefcase\"></i>
                </span>
                Projets
            </h2>
            <p>Gestion des projets publics et suivi des financements</p>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_new");
        yield "\" class=\"btn btn-gold\">
                <i data-lucide=\"plus\"></i>
                Nouveau Projet
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i data-lucide=\"";
                // line 34
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } else {
                    yield "alert-circle";
                }
                yield "\"></i>
                ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"alert-close\" onclick=\"this.parentElement.remove()\">
                    <i data-lucide=\"x\"></i>
                </button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "
    <!-- Stats Row -->
    <div class=\"stats-row\">
        <div class=\"mini-stat\" style=\"--stat-color: var(--tchad-blue);\">
            <div class=\"mini-stat-icon blue\">
                <i data-lucide=\"folder-kanban\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 50, $this->source); })()), "total", [], "any", false, false, false, 50), "html", null, true);
        yield "</h3>
                <p>Total Projets</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--success);\">
            <div class=\"mini-stat-icon green\">
                <i data-lucide=\"play-circle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "enCours", [], "any", false, false, false, 59), "html", null, true);
        yield "</h3>
                <p>En cours</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--tchad-gold);\">
            <div class=\"mini-stat-icon gold\">
                <i data-lucide=\"check-circle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "termines", [], "any", false, false, false, 68), "html", null, true);
        yield "</h3>
                <p>Terminés</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--danger);\">
            <div class=\"mini-stat-icon red\">
                <i data-lucide=\"alert-triangle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 77, $this->source); })()), "enRetard", [], "any", false, false, false, 77), "html", null, true);
        yield "</h3>
                <p>En retard</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: #7c3aed;\">
            <div class=\"mini-stat-icon purple\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["budgetTotal"]) || array_key_exists("budgetTotal", $context) ? $context["budgetTotal"] : (function () { throw new RuntimeError('Variable "budgetTotal" does not exist.', 86, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "</h3>
                <p>Budget (Mds FCFA)</p>
            </div>
        </div>
    </div>

    <!-- Projects Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"card-title\">
                <i data-lucide=\"list\"></i>
                Liste des Projets
            </div>
            <div class=\"card-actions\">
                <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"btn btn-icon\" title=\"Actualiser\">
                    <i data-lucide=\"refresh-cw\"></i>
                </a>
                <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_export_json");
        yield "\" class=\"btn btn-icon\" title=\"Exporter\">
                    <i data-lucide=\"download\"></i>
                </a>
            </div>
        </div>

        <!-- Filters Bar -->
        <div class=\"filters-bar\">
            <form method=\"GET\" action=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"filters-form\">
                <div class=\"filter-search\">
                    <i data-lucide=\"search\"></i>
                    <input type=\"text\" name=\"search\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher un projet...\">
                </div>
                
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut:</label>
                    <select name=\"status\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Tous</option>
                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 122
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 122, $this->source); })()) == $context["value"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Secteur:</label>
                    <select name=\"sector\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Tous</option>
                        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectors"]) || array_key_exists("sectors", $context) ? $context["sectors"] : (function () { throw new RuntimeError('Variable "sectors" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 132
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if (((isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 132, $this->source); })()) == $context["value"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Priorité:</label>
                    <select name=\"priority\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes</option>
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["priorities"]) || array_key_exists("priorities", $context) ? $context["priorities"] : (function () { throw new RuntimeError('Variable "priorities" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 142
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if (((isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 142, $this->source); })()) == $context["value"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                    <i data-lucide=\"filter\"></i>
                    Filtrer
                </button>

                ";
        // line 152
        if (((((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 152, $this->source); })()) || (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 152, $this->source); })())) || (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 152, $this->source); })())) || (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 152, $this->source); })()))) {
            // line 153
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
            yield "\" class=\"btn btn-outline btn-sm\">
                        <i data-lucide=\"x\"></i>
                        Réinitialiser
                    </a>
                ";
        }
        // line 158
        yield "            </form>
        </div>

        <!-- Data Table -->
        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Projet</th>
                        <th>Secteur</th>
                        <th>Budget</th>
                        <th>Progression</th>
                        <th>Statut</th>
                        <th>Priorité</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 176, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 177
            yield "                        <tr>
                            <td>
                                <div class=\"project-cell\">
                                    <div class=\"project-icon ";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sector", [], "any", false, false, false, 180), "html", null, true);
            yield "\">
                                        <i data-lucide=\"";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sectorIcon", [], "any", false, false, false, 181), "html", null, true);
            yield "\"></i>
                                    </div>
                                    <div class=\"project-info\">
                                        <a href=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 184)]), "html", null, true);
            yield "\" class=\"project-name\">
                                            ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 185), "html", null, true);
            yield "
                                        </a>
                                        <span class=\"project-code\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "code", [], "any", false, false, false, 187), "html", null, true);
            yield "</span>
                                        ";
            // line 188
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "localisation", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 189
                yield "                                            <span class=\"project-location\">
                                                <i data-lucide=\"map-pin\"></i>
                                                ";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "localisation", [], "any", false, false, false, 191), "html", null, true);
                yield "
                                            </span>
                                        ";
            }
            // line 194
            yield "                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class=\"sector-badge ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sector", [], "any", false, false, false, 198), "html", null, true);
            yield "\">
                                    ";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sectorLabel", [], "any", false, false, false, 199), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"budget-cell\">
                                    <span class=\"budget-total\">";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 204), 1, ",", " "), "html", null, true);
            yield " Mds</span>
                                    <span class=\"budget-disbursed\">
                                        <i data-lucide=\"trending-up\"></i>
                                        ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "tauxDecaissement", [], "any", false, false, false, 207), "html", null, true);
            yield "% décaissé
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class=\"progress-cell\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill ";
            // line 214
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 214) >= 80)) {
                yield "green";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 214) >= 50)) {
                yield "blue";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 214) >= 25)) {
                yield "gold";
            } else {
                yield "red";
            }
            yield "\" 
                                             style=\"width: ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 215), "html", null, true);
            yield "%\"></div>
                                    </div>
                                    <span class=\"progress-value\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 217), "html", null, true);
            yield "%</span>
                                </div>
                            </td>
                            <td>
                                <span class=\"status-badge ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 221), "html", null, true);
            yield "\">
                                    ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statusLabel", [], "any", false, false, false, 222), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <span class=\"priority-badge ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "priorite", [], "any", false, false, false, 226), "html", null, true);
            yield "\">
                                    ";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "prioriteLabel", [], "any", false, false, false, 227), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"actions-group\">
                                    <a href=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 232)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Voir\">
                                        <i data-lucide=\"eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 235)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Modifier\">
                                        <i data-lucide=\"pencil\"></i>
                                    </a>
                                    <button type=\"button\" class=\"action-btn delete\" title=\"Supprimer\" 
                                            onclick=\"openDeleteModal(";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 239), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 239), "js"), "html", null, true);
            yield "')\">
                                        <i data-lucide=\"trash-2\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 245
        if (!$context['_iterated']) {
            // line 246
            yield "                        <tr>
                            <td colspan=\"7\">
                                <div class=\"empty-state\">
                                    <div class=\"empty-icon\">
                                        <i data-lucide=\"folder-open\"></i>
                                    </div>
                                    <h4>Aucun projet trouvé</h4>
                                    <p>";
            // line 253
            if (((((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 253, $this->source); })()) || (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 253, $this->source); })())) || (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 253, $this->source); })())) || (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 253, $this->source); })()))) {
                yield "Modifiez vos filtres ou ";
            }
            yield "créez un nouveau projet</p>
                                    <a href=\"";
            // line 254
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_new");
            yield "\" class=\"btn btn-primary\">
                                        <i data-lucide=\"plus\"></i>
                                        Nouveau Projet
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 267
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 267, $this->source); })()) > 1)) {
            // line 268
            yield "            <div class=\"pagination-wrapper\">
                <div class=\"pagination-info\">
                    Affichage de ";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 270, $this->source); })()) - 1) * 10) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 270, $this->source); })()) * 10), (isset($context["totalProjects"]) || array_key_exists("totalProjects", $context) ? $context["totalProjects"] : (function () { throw new RuntimeError('Variable "totalProjects" does not exist.', 270, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalProjects"]) || array_key_exists("totalProjects", $context) ? $context["totalProjects"] : (function () { throw new RuntimeError('Variable "totalProjects" does not exist.', 270, $this->source); })()), "html", null, true);
            yield " projets
                </div>
                <div class=\"pagination\">
                    ";
            // line 273
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 273, $this->source); })()) > 1)) {
                // line 274
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 274, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 274, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 274, $this->source); })()), "sector" => (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 274, $this->source); })()), "priority" => (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 274, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn\">
                            <i data-lucide=\"chevron-left\"></i>
                        </a>
                    ";
            }
            // line 278
            yield "
                    ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 279, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 280
                yield "                        ";
                if (((($context["i"] == 1) || ($context["i"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 280, $this->source); })()))) || (($context["i"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 280, $this->source); })()) - 2)) && ($context["i"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 280, $this->source); })()) + 2))))) {
                    // line 281
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 281, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 281, $this->source); })()), "sector" => (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 281, $this->source); })()), "priority" => (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 281, $this->source); })())]), "html", null, true);
                    yield "\" 
                               class=\"pagination-btn ";
                    // line 282
                    if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 282, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                ";
                    // line 283
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "
                            </a>
                        ";
                } elseif (((                // line 285
$context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 285, $this->source); })()) - 3)) || ($context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 285, $this->source); })()) + 3)))) {
                    // line 286
                    yield "                            <span class=\"pagination-ellipsis\">...</span>
                        ";
                }
                // line 288
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            yield "
                    ";
            // line 290
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 290, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 290, $this->source); })()))) {
                // line 291
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 291, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 291, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 291, $this->source); })()), "sector" => (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 291, $this->source); })()), "priority" => (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 291, $this->source); })())]), "html", null, true);
                yield "\" class=\"pagination-btn\">
                            <i data-lucide=\"chevron-right\"></i>
                        </a>
                    ";
            }
            // line 295
            yield "                </div>
            </div>
        ";
        }
        // line 298
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
            <h3>Confirmer la suppression</h3>
            <p>Êtes-vous sûr de vouloir supprimer le projet \"<span id=\"projectNameToDelete\"></span>\" ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 316
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

    // line 327
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 328
        yield "<script>
    lucide.createIcons();

    function openDeleteModal(id, name) {
        document.getElementById('projectNameToDelete').textContent = name;
        document.getElementById('deleteForm').action = '/projects/' + id;
        document.getElementById('deleteForm').querySelector('input[name=\"_token\"]').value = '";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        yield "' + id;
        document.getElementById('deleteModal').classList.add('show');
        lucide.createIcons();
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.remove('show');
    }

    // Close modal on escape key
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
        return "project/index.html.twig";
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
        return array (  726 => 334,  718 => 328,  708 => 327,  690 => 316,  670 => 298,  665 => 295,  657 => 291,  655 => 290,  652 => 289,  646 => 288,  642 => 286,  640 => 285,  635 => 283,  629 => 282,  624 => 281,  621 => 280,  617 => 279,  614 => 278,  606 => 274,  604 => 273,  594 => 270,  590 => 268,  588 => 267,  581 => 262,  567 => 254,  561 => 253,  552 => 246,  550 => 245,  537 => 239,  530 => 235,  524 => 232,  516 => 227,  512 => 226,  505 => 222,  501 => 221,  494 => 217,  489 => 215,  477 => 214,  467 => 207,  461 => 204,  453 => 199,  449 => 198,  443 => 194,  437 => 191,  433 => 189,  431 => 188,  427 => 187,  422 => 185,  418 => 184,  412 => 181,  408 => 180,  403 => 177,  398 => 176,  378 => 158,  369 => 153,  367 => 152,  357 => 144,  342 => 142,  338 => 141,  329 => 134,  314 => 132,  310 => 131,  301 => 124,  286 => 122,  282 => 121,  272 => 114,  266 => 111,  255 => 103,  249 => 100,  232 => 86,  220 => 77,  208 => 68,  196 => 59,  184 => 50,  174 => 42,  168 => 41,  156 => 35,  148 => 34,  143 => 33,  138 => 32,  134 => 31,  123 => 23,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Projets - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/project.css') }}\">
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"briefcase\"></i>
                </span>
                Projets
            </h2>
            <p>Gestion des projets publics et suivi des financements</p>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"{{ path('app_projects_new') }}\" class=\"btn btn-gold\">
                <i data-lucide=\"plus\"></i>
                Nouveau Projet
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <i data-lucide=\"{% if label == 'success' %}check-circle{% else %}alert-circle{% endif %}\"></i>
                {{ message }}
                <button type=\"button\" class=\"alert-close\" onclick=\"this.parentElement.remove()\">
                    <i data-lucide=\"x\"></i>
                </button>
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Stats Row -->
    <div class=\"stats-row\">
        <div class=\"mini-stat\" style=\"--stat-color: var(--tchad-blue);\">
            <div class=\"mini-stat-icon blue\">
                <i data-lucide=\"folder-kanban\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>{{ stats.total }}</h3>
                <p>Total Projets</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--success);\">
            <div class=\"mini-stat-icon green\">
                <i data-lucide=\"play-circle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>{{ stats.enCours }}</h3>
                <p>En cours</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--tchad-gold);\">
            <div class=\"mini-stat-icon gold\">
                <i data-lucide=\"check-circle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>{{ stats.termines }}</h3>
                <p>Terminés</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--danger);\">
            <div class=\"mini-stat-icon red\">
                <i data-lucide=\"alert-triangle\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>{{ stats.enRetard }}</h3>
                <p>En retard</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: #7c3aed;\">
            <div class=\"mini-stat-icon purple\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"mini-stat-content\">
                <h3>{{ budgetTotal|number_format(1, ',', ' ') }}</h3>
                <p>Budget (Mds FCFA)</p>
            </div>
        </div>
    </div>

    <!-- Projects Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"card-title\">
                <i data-lucide=\"list\"></i>
                Liste des Projets
            </div>
            <div class=\"card-actions\">
                <a href=\"{{ path('app_projects') }}\" class=\"btn btn-icon\" title=\"Actualiser\">
                    <i data-lucide=\"refresh-cw\"></i>
                </a>
                <a href=\"{{ path('app_projects_export_json') }}\" class=\"btn btn-icon\" title=\"Exporter\">
                    <i data-lucide=\"download\"></i>
                </a>
            </div>
        </div>

        <!-- Filters Bar -->
        <div class=\"filters-bar\">
            <form method=\"GET\" action=\"{{ path('app_projects') }}\" class=\"filters-form\">
                <div class=\"filter-search\">
                    <i data-lucide=\"search\"></i>
                    <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Rechercher un projet...\">
                </div>
                
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut:</label>
                    <select name=\"status\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Tous</option>
                        {% for label, value in statuses %}
                            <option value=\"{{ value }}\" {% if status == value %}selected{% endif %}>{{ label }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Secteur:</label>
                    <select name=\"sector\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Tous</option>
                        {% for label, value in sectors %}
                            <option value=\"{{ value }}\" {% if sector == value %}selected{% endif %}>{{ label }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Priorité:</label>
                    <select name=\"priority\" class=\"filter-select\" onchange=\"this.form.submit()\">
                        <option value=\"\">Toutes</option>
                        {% for label, value in priorities %}
                            <option value=\"{{ value }}\" {% if priority == value %}selected{% endif %}>{{ label }}</option>
                        {% endfor %}
                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                    <i data-lucide=\"filter\"></i>
                    Filtrer
                </button>

                {% if search or status or sector or priority %}
                    <a href=\"{{ path('app_projects') }}\" class=\"btn btn-outline btn-sm\">
                        <i data-lucide=\"x\"></i>
                        Réinitialiser
                    </a>
                {% endif %}
            </form>
        </div>

        <!-- Data Table -->
        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Projet</th>
                        <th>Secteur</th>
                        <th>Budget</th>
                        <th>Progression</th>
                        <th>Statut</th>
                        <th>Priorité</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for project in projects %}
                        <tr>
                            <td>
                                <div class=\"project-cell\">
                                    <div class=\"project-icon {{ project.sector }}\">
                                        <i data-lucide=\"{{ project.sectorIcon }}\"></i>
                                    </div>
                                    <div class=\"project-info\">
                                        <a href=\"{{ path('app_projects_show', {slug: project.slug}) }}\" class=\"project-name\">
                                            {{ project.name }}
                                        </a>
                                        <span class=\"project-code\">{{ project.code }}</span>
                                        {% if project.localisation %}
                                            <span class=\"project-location\">
                                                <i data-lucide=\"map-pin\"></i>
                                                {{ project.localisation }}
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class=\"sector-badge {{ project.sector }}\">
                                    {{ project.sectorLabel }}
                                </span>
                            </td>
                            <td>
                                <div class=\"budget-cell\">
                                    <span class=\"budget-total\">{{ project.budgetTotal|number_format(1, ',', ' ') }} Mds</span>
                                    <span class=\"budget-disbursed\">
                                        <i data-lucide=\"trending-up\"></i>
                                        {{ project.tauxDecaissement }}% décaissé
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class=\"progress-cell\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill {% if project.progress >= 80 %}green{% elseif project.progress >= 50 %}blue{% elseif project.progress >= 25 %}gold{% else %}red{% endif %}\" 
                                             style=\"width: {{ project.progress }}%\"></div>
                                    </div>
                                    <span class=\"progress-value\">{{ project.progress }}%</span>
                                </div>
                            </td>
                            <td>
                                <span class=\"status-badge {{ project.status }}\">
                                    {{ project.statusLabel }}
                                </span>
                            </td>
                            <td>
                                <span class=\"priority-badge {{ project.priorite }}\">
                                    {{ project.prioriteLabel }}
                                </span>
                            </td>
                            <td>
                                <div class=\"actions-group\">
                                    <a href=\"{{ path('app_projects_show', {slug: project.slug}) }}\" class=\"action-btn\" title=\"Voir\">
                                        <i data-lucide=\"eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_projects_edit', {id: project.id}) }}\" class=\"action-btn\" title=\"Modifier\">
                                        <i data-lucide=\"pencil\"></i>
                                    </a>
                                    <button type=\"button\" class=\"action-btn delete\" title=\"Supprimer\" 
                                            onclick=\"openDeleteModal({{ project.id }}, '{{ project.name|e('js') }}')\">
                                        <i data-lucide=\"trash-2\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\">
                                <div class=\"empty-state\">
                                    <div class=\"empty-icon\">
                                        <i data-lucide=\"folder-open\"></i>
                                    </div>
                                    <h4>Aucun projet trouvé</h4>
                                    <p>{% if search or status or sector or priority %}Modifiez vos filtres ou {% endif %}créez un nouveau projet</p>
                                    <a href=\"{{ path('app_projects_new') }}\" class=\"btn btn-primary\">
                                        <i data-lucide=\"plus\"></i>
                                        Nouveau Projet
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
                    Affichage de {{ ((currentPage - 1) * 10) + 1 }} à {{ min(currentPage * 10, totalProjects) }} sur {{ totalProjects }} projets
                </div>
                <div class=\"pagination\">
                    {% if currentPage > 1 %}
                        <a href=\"{{ path('app_projects', {page: currentPage - 1, search: search, status: status, sector: sector, priority: priority}) }}\" class=\"pagination-btn\">
                            <i data-lucide=\"chevron-left\"></i>
                        </a>
                    {% endif %}

                    {% for i in 1..totalPages %}
                        {% if i == 1 or i == totalPages or (i >= currentPage - 2 and i <= currentPage + 2) %}
                            <a href=\"{{ path('app_projects', {page: i, search: search, status: status, sector: sector, priority: priority}) }}\" 
                               class=\"pagination-btn {% if i == currentPage %}active{% endif %}\">
                                {{ i }}
                            </a>
                        {% elseif i == currentPage - 3 or i == currentPage + 3 %}
                            <span class=\"pagination-ellipsis\">...</span>
                        {% endif %}
                    {% endfor %}

                    {% if currentPage < totalPages %}
                        <a href=\"{{ path('app_projects', {page: currentPage + 1, search: search, status: status, sector: sector, priority: priority}) }}\" class=\"pagination-btn\">
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
            <h3>Confirmer la suppression</h3>
            <p>Êtes-vous sûr de vouloir supprimer le projet \"<span id=\"projectNameToDelete\"></span>\" ?</p>
            <p class=\"warning-text\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
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
<script>
    lucide.createIcons();

    function openDeleteModal(id, name) {
        document.getElementById('projectNameToDelete').textContent = name;
        document.getElementById('deleteForm').action = '/projects/' + id;
        document.getElementById('deleteForm').querySelector('input[name=\"_token\"]').value = '{{ csrf_token('delete') }}' + id;
        document.getElementById('deleteModal').classList.add('show');
        lucide.createIcons();
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.remove('show');
    }

    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
{% endblock %}
", "project/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\project\\index.html.twig");
    }
}
