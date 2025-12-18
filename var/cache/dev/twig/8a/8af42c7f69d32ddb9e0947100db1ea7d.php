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
                    <i class=\"ri-team-line\"></i>
                </span>
                Partenaires
            </h2>
            <p>Gestion des bailleurs de fonds et partenaires techniques</p>
        </div>

        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_new");
        yield "\" class=\"btn btn-gold\">
            <i class=\"ri-add-line\"></i>
            Nouveau Partenaire
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
                yield "\" style=\"margin-bottom: 1rem; padding: 1rem; border-radius: 8px; 
                ";
                // line 33
                if (($context["label"] == "success")) {
                    yield "background: rgba(16, 185, 129, 0.1); border: 1px solid var(--success); color: var(--success);";
                }
                // line 34
                yield "                ";
                if (($context["label"] == "error")) {
                    yield "background: rgba(239, 68, 68, 0.1); border: 1px solid var(--danger); color: var(--danger);";
                }
                yield "\">
                <i class=\"ri-";
                // line 35
                if (($context["label"] == "success")) {
                    yield "check";
                } else {
                    yield "error-warning";
                }
                yield "-line\"></i>
                ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "total", [], "any", false, false, false, 49), "html", null, true);
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
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "actifs", [], "any", false, false, false, 59), "html", null, true);
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
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 69, $this->source); })()), "byType", [], "any", false, false, false, 69)), "html", null, true);
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
        // line 79
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byStatus", [], "any", false, true, false, 79), "Inactif", [], "array", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 79, $this->source); })()), "byStatus", [], "any", false, false, false, 79), "Inactif", [], "array", false, false, false, 79)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 79, $this->source); })()), "byStatus", [], "any", false, false, false, 79), "Inactif", [], "array", false, false, false, 79), "html", null, true)) : (0));
        yield "</div>
            <div class=\"stat-label\">Partenaires Inactifs</div>
        </div>
    </div>

    <!-- Filters -->
    <div class=\"card\" style=\"margin-bottom: 1.5rem;\">
        <form method=\"GET\" action=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">Rechercher</label>
                    <div class=\"search-input-wrapper\">
                        <i class=\"ri-search-line\"></i>
                        <input type=\"text\" name=\"search\" class=\"form-input\" placeholder=\"Nom, acronyme...\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "\">
                    </div>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"\">Tous les types</option>
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 101
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 101), "html", null, true);
            yield "\" ";
            if (((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 101, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 101))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 102), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <label class=\"filter-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"Actif\" ";
        // line 112
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 112, $this->source); })()) == "Actif")) {
            yield "selected";
        }
        yield ">Actif</option>
                        <option value=\"Inactif\" ";
        // line 113
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 113, $this->source); })()) == "Inactif")) {
            yield "selected";
        }
        yield ">Inactif</option>
                        <option value=\"Suspendu\" ";
        // line 114
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 114, $this->source); })()) == "Suspendu")) {
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
        // line 122
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
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 135, $this->source); })()), "html", null, true);
        yield " résultat";
        yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 135, $this->source); })()) > 1)) ? ("s") : (""));
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
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 152, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 153
            yield "                        <tr>
                            <td>
                                <div class=\"partner-logo\">
                                    ";
            // line 156
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 157
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/partners/" . CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 157))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 157), "html", null, true);
                yield "\">
                                    ";
            } else {
                // line 159
                yield "                                        <div class=\"logo-placeholder\">
                                            <i class=\"ri-building-2-line\"></i>
                                        </div>
                                    ";
            }
            // line 163
            yield "                                </div>
                            </td>
                            <td>
                                <div class=\"partner-info\">
                                    <strong>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 167), "html", null, true);
            yield "</strong>
                                    ";
            // line 168
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "acronym", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "                                        <span class=\"acronym\">(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "acronym", [], "any", false, false, false, 169), "html", null, true);
                yield ")</span>
                                    ";
            }
            // line 171
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "siteWeb", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 172
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "siteWeb", [], "any", false, false, false, 172), "html", null, true);
                yield "\" target=\"_blank\" class=\"website-link\">
                                            <i class=\"ri-external-link-line\"></i>
                                        </a>
                                    ";
            }
            // line 176
            yield "                                </div>
                            </td>
                            <td>
                                <span class=\"type-badge type-";
            // line 179
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, true, false, 179), "code", [], "any", true, true, false, 179) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 179), "code", [], "any", false, false, false, 179)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 179), "code", [], "any", false, false, false, 179), "html", null, true)) : ("default"));
            yield "\">
                                    ";
            // line 180
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, true, false, 180), "name", [], "any", true, true, false, 180) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "typePartner", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true)) : ("Non défini"));
            yield "
                                </span>
                            </td>
                            <td>
                                ";
            // line 184
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactName", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "                                    <div class=\"contact-info\">
                                        <span class=\"contact-name\">";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactName", [], "any", false, false, false, 186), "html", null, true);
                yield "</span>
                                        ";
                // line 187
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 188
                    yield "                                            <a href=\"mailto:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 188), "html", null, true);
                    yield "\" class=\"contact-email\">
                                                <i class=\"ri-mail-line\"></i> ";
                    // line 189
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "contactEmail", [], "any", false, false, false, 189), "html", null, true);
                    yield "
                                            </a>
                                        ";
                }
                // line 192
                yield "                                    </div>
                                ";
            } else {
                // line 194
                yield "                                    <span class=\"text-muted\">Non renseigné</span>
                                ";
            }
            // line 196
            yield "                            </td>
                            <td>
                                <span class=\"status-badge status-";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "status", [], "any", false, false, false, 198)), "html", null, true);
            yield "\">
                                    ";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "status", [], "any", false, false, false, 199), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"actions-group\">
                                    <a href=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "slug", [], "any", false, false, false, 204)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Voir détails\">
                                        <i class=\"ri-eye-line\"></i>
                                    </a>
                                    <a href=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 207)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Modifier\">
                                        <i class=\"ri-edit-line\"></i>
                                    </a>
                                    <button type=\"button\" class=\"action-btn delete\" title=\"Supprimer\" 
                                            onclick=\"confirmDelete(";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 211), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 211), "js"), "html", null, true);
            yield "')\">
                                        <i class=\"ri-delete-bin-6-line\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 217
        if (!$context['_iterated']) {
            // line 218
            yield "                        <tr>
                            <td colspan=\"6\" class=\"empty-state\">
                                <div class=\"empty-icon\">
                                    <i class=\"ri-team-line\"></i>
                                </div>
                                <p>Aucun partenaire trouvé</p>
                                <a href=\"";
            // line 224
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
        // line 230
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 235
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 235, $this->source); })()) > 1)) {
            // line 236
            yield "            <div class=\"pagination-wrapper\">
                <div class=\"pagination\">
                    ";
            // line 238
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 238, $this->source); })()) > 1)) {
                // line 239
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 239, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 239, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 239, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 239, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\">
                            <i class=\"ri-arrow-left-s-line\"></i>
                        </a>
                    ";
            }
            // line 243
            yield "
                    ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 244, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 245
                yield "                        ";
                if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 245, $this->source); })()))) {
                    // line 246
                    yield "                            <span class=\"page-link active\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</span>
                        ";
                } elseif ((((                // line 247
$context["i"] == 1) || ($context["i"] == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 247, $this->source); })()))) || (($context["i"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 247, $this->source); })()) - 2)) && ($context["i"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 247, $this->source); })()) + 2))))) {
                    // line 248
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 248, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 248, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 248, $this->source); })())]), "html", null, true);
                    yield "\" class=\"page-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                        ";
                } elseif (((                // line 249
$context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 249, $this->source); })()) - 3)) || ($context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 249, $this->source); })()) + 3)))) {
                    // line 250
                    yield "                            <span class=\"page-ellipsis\">...</span>
                        ";
                }
                // line 252
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            yield "
                    ";
            // line 254
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 254, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 254, $this->source); })()))) {
                // line 255
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 255, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 255, $this->source); })()), "status" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 255, $this->source); })()), "type" => (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 255, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-link\">
                            <i class=\"ri-arrow-right-s-line\"></i>
                        </a>
                    ";
            }
            // line 259
            yield "                </div>
            </div>
        ";
        }
        // line 262
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
        // line 282
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

    // line 292
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 293
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
        return array (  646 => 293,  636 => 292,  619 => 282,  597 => 262,  592 => 259,  584 => 255,  582 => 254,  579 => 253,  573 => 252,  569 => 250,  567 => 249,  560 => 248,  558 => 247,  553 => 246,  550 => 245,  546 => 244,  543 => 243,  535 => 239,  533 => 238,  529 => 236,  527 => 235,  520 => 230,  508 => 224,  500 => 218,  498 => 217,  485 => 211,  478 => 207,  472 => 204,  464 => 199,  460 => 198,  456 => 196,  452 => 194,  448 => 192,  442 => 189,  437 => 188,  435 => 187,  431 => 186,  428 => 185,  426 => 184,  419 => 180,  415 => 179,  410 => 176,  402 => 172,  399 => 171,  393 => 169,  391 => 168,  387 => 167,  381 => 163,  375 => 159,  367 => 157,  365 => 156,  360 => 153,  355 => 152,  333 => 135,  317 => 122,  304 => 114,  298 => 113,  292 => 112,  283 => 105,  274 => 102,  265 => 101,  261 => 100,  250 => 92,  241 => 86,  231 => 79,  218 => 69,  205 => 59,  192 => 49,  181 => 40,  175 => 39,  166 => 36,  158 => 35,  151 => 34,  147 => 33,  142 => 32,  137 => 31,  133 => 30,  123 => 23,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Partenaires - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/partner.css') }}\">
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
                                        <img src=\"{{ asset('uploads/partners/' ~ partner.logo) }}\" alt=\"{{ partner.name }}\">
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
