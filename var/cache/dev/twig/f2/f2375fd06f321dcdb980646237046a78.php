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

/* role/index.html.twig */
class __TwigTemplate_57dbfa2611b23d8cc195ad32ca9ddb99 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "role/index.html.twig"));

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

        yield "Gestion des Rôles - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"roles-page\">
    <!-- Header -->
    <div class=\"page-header mb-4\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <h1 class=\"page-title\">
                    <i data-lucide=\"shield\"></i>
                    Gestion des Rôles
                </h1>
                <p class=\"text-muted\">Gérez les rôles et leurs permissions d'accès aux différents modules</p>
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_new");
        yield "\" class=\"btn btn-primary\">
                    <i data-lucide=\"plus\"></i>
                    Nouveau Rôle
                </a>
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_permissions_matrix");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"grid\"></i>
                    Matrice des Permissions
                </a>
            </div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-primary\">
                    <i data-lucide=\"shield\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "total", [], "any", false, false, false, 38), "html", null, true);
        yield "</div>
                    <div class=\"stat-label\">Total Rôles</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-success\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 50, $this->source); })()), "actifs", [], "any", false, false, false, 50), "html", null, true);
        yield "</div>
                    <div class=\"stat-label\">Rôles Actifs</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-info\">
                    <i data-lucide=\"users\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "totalUsers", [], "any", false, false, false, 62), "html", null, true);
        yield "</div>
                    <div class=\"stat-label\">Utilisateurs Assignés</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-warning\">
                    <i data-lucide=\"settings\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 74, $this->source); })()), "custom", [], "any", false, false, false, 74), "html", null, true);
        yield "</div>
                    <div class=\"stat-label\">Rôles Personnalisés</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres et Recherche -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" action=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
        yield "\" class=\"row g-3\">
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control\" 
                           placeholder=\"Nom ou code du rôle...\" 
                           value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 89, $this->source); })()), "html", null, true);
        yield "\">
                </div>
                
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Statut</label>
                    <select name=\"active\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"true\" ";
        // line 96
        if (((isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 96, $this->source); })()) == "true")) {
            yield "selected";
        }
        yield ">Actifs</option>
                        <option value=\"false\" ";
        // line 97
        if (((isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 97, $this->source); })()) == "false")) {
            yield "selected";
        }
        yield ">Inactifs</option>
                    </select>
                </div>
                
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Type</label>
                    <select name=\"system\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"true\" ";
        // line 105
        if (((isset($context["systemFilter"]) || array_key_exists("systemFilter", $context) ? $context["systemFilter"] : (function () { throw new RuntimeError('Variable "systemFilter" does not exist.', 105, $this->source); })()) == "true")) {
            yield "selected";
        }
        yield ">Système</option>
                        <option value=\"false\" ";
        // line 106
        if (((isset($context["systemFilter"]) || array_key_exists("systemFilter", $context) ? $context["systemFilter"] : (function () { throw new RuntimeError('Variable "systemFilter" does not exist.', 106, $this->source); })()) == "false")) {
            yield "selected";
        }
        yield ">Personnalisés</option>
                    </select>
                </div>
                
                <div class=\"col-md-2 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i data-lucide=\"search\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Messages Flash -->
    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "flashes", ["success"], "method", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 121
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i data-lucide=\"check-circle\"></i>
            ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "
    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "flashes", ["error"], "method", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 129
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i data-lucide=\"alert-circle\"></i>
            ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "
    <!-- Liste des Rôles -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">
                <i data-lucide=\"list\"></i>
                Liste des Rôles (";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 141, $this->source); })()), "html", null, true);
        yield ")
            </h5>
        </div>
        <div class=\"card-body p-0\">
            ";
        // line 145
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 145, $this->source); })())) > 0)) {
            // line 146
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\">
                        <thead>
                            <tr>
                                <th>Rôle</th>
                                <th>Code</th>
                                <th class=\"text-center\">Type</th>
                                <th class=\"text-center\">Priorité</th>
                                <th class=\"text-center\">Permissions</th>
                                <th class=\"text-center\">Utilisateurs</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 161, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 162
                yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"role-icon me-2\">
                                                <i data-lucide=\"shield\"></i>
                                            </div>
                                            <div>
                                                <strong>";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 169), "html", null, true);
                yield "</strong>
                                                ";
                // line 170
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 171
                    yield "                                                    <br><small class=\"text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 171)), "truncate", [60, "..."], "method", false, false, false, 171), "html", null, true);
                    yield "</small>
                                                ";
                }
                // line 173
                yield "                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <code class=\"badge bg-light text-dark\">";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "code", [], "any", false, false, false, 177), "html", null, true);
                yield "</code>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 180
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["role"], "isSystem", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 181
                    yield "                                            <span class=\"badge bg-secondary\">
                                                <i data-lucide=\"lock\" style=\"width: 14px; height: 14px;\"></i>
                                                Système
                                            </span>
                                        ";
                } else {
                    // line 186
                    yield "                                            <span class=\"badge bg-info\">
                                                <i data-lucide=\"edit-3\" style=\"width: 14px; height: 14px;\"></i>
                                                Personnalisé
                                            </span>
                                        ";
                }
                // line 191
                yield "                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-dark\">";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "priority", [], "any", false, false, false, 193), "html", null, true);
                yield "</span>
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex flex-column align-items-center\">
                                            <strong>";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "permissionsCount", [], "any", false, false, false, 197), "html", null, true);
                yield "</strong>
                                            <div class=\"progress\" style=\"width: 80px; height: 6px;\">
                                                <div class=\"progress-bar\" style=\"width: ";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "permissionsPercentage", [], "any", false, false, false, 199), "html", null, true);
                yield "%\"></div>
                                            </div>
                                            <small class=\"text-muted\">";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "permissionsPercentage", [], "any", false, false, false, 201), "html", null, true);
                yield "%</small>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill\">
                                            ";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "usersCount", [], "any", false, false, false, 206), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 210
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["role"], "isActive", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 211
                    yield "                                            <span class=\"badge bg-success\">Actif</span>
                                        ";
                } else {
                    // line 213
                    yield "                                            <span class=\"badge bg-secondary\">Inactif</span>
                                        ";
                }
                // line 215
                yield "                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 218)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-primary\" title=\"Voir\">
                                                <i data-lucide=\"eye\"></i>
                                            </a>
                                            
                                            ";
                // line 223
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["role"], "isSystem", [], "any", false, false, false, 223)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 224
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 224)]), "html", null, true);
                    yield "\" 
                                                   class=\"btn btn-outline-secondary\" title=\"Modifier\">
                                                    <i data-lucide=\"edit\"></i>
                                                </a>
                                                
                                                <form method=\"post\" 
                                                      action=\"";
                    // line 230
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_duplicate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 230)]), "html", null, true);
                    yield "\" 
                                                      class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" 
                                                           value=\"";
                    // line 233
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("duplicate" . CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 233))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-outline-info\" 
                                                            title=\"Dupliquer\"
                                                            onclick=\"return confirm('Dupliquer ce rôle ?')\">
                                                        <i data-lucide=\"copy\"></i>
                                                    </button>
                                                </form>
                                                
                                                ";
                    // line 241
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["role"], "isDeletable", [], "any", false, false, false, 241)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 242
                        yield "                                                    <form method=\"post\" 
                                                          action=\"";
                        // line 243
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 243)]), "html", null, true);
                        yield "\" 
                                                          class=\"d-inline\"
                                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?')\">
                                                        <input type=\"hidden\" name=\"_token\" 
                                                               value=\"";
                        // line 247
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 247))), "html", null, true);
                        yield "\">
                                                        <button type=\"submit\" class=\"btn btn-outline-danger\" 
                                                                title=\"Supprimer\">
                                                            <i data-lucide=\"trash-2\"></i>
                                                        </button>
                                                    </form>
                                                ";
                    }
                    // line 254
                    yield "                                            ";
                }
                // line 255
                yield "                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            yield "                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                ";
            // line 264
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 264, $this->source); })()) > 1)) {
                // line 265
                yield "                    <div class=\"card-footer\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination justify-content-center mb-0\">
                                ";
                // line 268
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 268, $this->source); })()) > 1)) {
                    // line 269
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 270, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 270, $this->source); })()), "active" => (isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 270, $this->source); })()), "system" => (isset($context["systemFilter"]) || array_key_exists("systemFilter", $context) ? $context["systemFilter"] : (function () { throw new RuntimeError('Variable "systemFilter" does not exist.', 270, $this->source); })())]), "html", null, true);
                    yield "\">
                                            Précédent
                                        </a>
                                    </li>
                                ";
                }
                // line 275
                yield "
                                ";
                // line 276
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 276, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 277
                    yield "                                    ";
                    if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 277, $this->source); })()))) {
                        // line 278
                        yield "                                        <li class=\"page-item active\">
                                            <span class=\"page-link\">";
                        // line 279
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</span>
                                        </li>
                                    ";
                    } elseif (((                    // line 281
$context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 281, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 281, $this->source); })()) + 2)))) {
                        // line 282
                        yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"";
                        // line 283
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles", ["page" => $context["page"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 283, $this->source); })()), "active" => (isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 283, $this->source); })()), "system" => (isset($context["systemFilter"]) || array_key_exists("systemFilter", $context) ? $context["systemFilter"] : (function () { throw new RuntimeError('Variable "systemFilter" does not exist.', 283, $this->source); })())]), "html", null, true);
                        yield "\">
                                                ";
                        // line 284
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "
                                            </a>
                                        </li>
                                    ";
                    }
                    // line 288
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 289
                yield "
                                ";
                // line 290
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 290, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 290, $this->source); })()))) {
                    // line 291
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 292
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 292, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 292, $this->source); })()), "active" => (isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 292, $this->source); })()), "system" => (isset($context["systemFilter"]) || array_key_exists("systemFilter", $context) ? $context["systemFilter"] : (function () { throw new RuntimeError('Variable "systemFilter" does not exist.', 292, $this->source); })())]), "html", null, true);
                    yield "\">
                                            Suivant
                                        </a>
                                    </li>
                                ";
                }
                // line 297
                yield "                            </ul>
                        </nav>
                    </div>
                ";
            }
            // line 301
            yield "            ";
        } else {
            // line 302
            yield "                <div class=\"text-center py-5\">
                    <i data-lucide=\"shield\" style=\"width: 64px; height: 64px; color: #6c757d;\"></i>
                    <p class=\"text-muted mt-3\">Aucun rôle trouvé</p>
                    <a href=\"";
            // line 305
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_new");
            yield "\" class=\"btn btn-primary\">
                        <i data-lucide=\"plus\"></i>
                        Créer un rôle
                    </a>
                </div>
            ";
        }
        // line 311
        yield "        </div>
    </div>

    <!-- Rôles les plus utilisés -->
    ";
        // line 315
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["mostUsed"]) || array_key_exists("mostUsed", $context) ? $context["mostUsed"] : (function () { throw new RuntimeError('Variable "mostUsed" does not exist.', 315, $this->source); })())) > 0)) {
            // line 316
            yield "        <div class=\"card mt-4\">
            <div class=\"card-header\">
                <h5 class=\"mb-0\">
                    <i data-lucide=\"trending-up\"></i>
                    Rôles les Plus Utilisés
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mostUsed"]) || array_key_exists("mostUsed", $context) ? $context["mostUsed"] : (function () { throw new RuntimeError('Variable "mostUsed" does not exist.', 325, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 326
                yield "                        ";
                $context["role"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 326);
                // line 327
                yield "                        ";
                $context["usersCount"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "usersCount", [], "any", false, false, false, 327);
                // line 328
                yield "                        <div class=\"col-md-4 mb-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"role-icon me-3\">
                                    <i data-lucide=\"shield\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <strong>";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 334, $this->source); })()), "name", [], "any", false, false, false, 334), "html", null, true);
                yield "</strong>
                                    <br>
                                    <small class=\"text-muted\">";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersCount"]) || array_key_exists("usersCount", $context) ? $context["usersCount"] : (function () { throw new RuntimeError('Variable "usersCount" does not exist.', 336, $this->source); })()), "html", null, true);
                yield " utilisateur(s)</small>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            yield "                </div>
            </div>
        </div>
    ";
        }
        // line 345
        yield "</div>

<style>
.stat-card {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.stat-icon.bg-primary { background: #004d99; }
.stat-icon.bg-success { background: #10b981; }
.stat-icon.bg-info { background: #0ea5e9; }
.stat-icon.bg-warning { background: #f59e0b; }

.stat-value {
    font-size: 2rem;
    font-weight: 700;
    color: #1f2937;
    line-height: 1;
}

.stat-label {
    font-size: 0.875rem;
    color: #6b7280;
    margin-top: 0.25rem;
}

.role-icon {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: linear-gradient(135deg, #004d99, #0066cc);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 399
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 400
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        lucide.createIcons();
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
        return "role/index.html.twig";
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
        return array (  729 => 400,  719 => 399,  659 => 345,  653 => 341,  642 => 336,  637 => 334,  629 => 328,  626 => 327,  623 => 326,  619 => 325,  608 => 316,  606 => 315,  600 => 311,  591 => 305,  586 => 302,  583 => 301,  577 => 297,  569 => 292,  566 => 291,  564 => 290,  561 => 289,  555 => 288,  548 => 284,  544 => 283,  541 => 282,  539 => 281,  534 => 279,  531 => 278,  528 => 277,  524 => 276,  521 => 275,  513 => 270,  510 => 269,  508 => 268,  503 => 265,  501 => 264,  494 => 259,  485 => 255,  482 => 254,  472 => 247,  465 => 243,  462 => 242,  460 => 241,  449 => 233,  443 => 230,  433 => 224,  431 => 223,  423 => 218,  418 => 215,  414 => 213,  410 => 211,  408 => 210,  401 => 206,  393 => 201,  388 => 199,  383 => 197,  376 => 193,  372 => 191,  365 => 186,  358 => 181,  356 => 180,  350 => 177,  344 => 173,  338 => 171,  336 => 170,  332 => 169,  323 => 162,  319 => 161,  302 => 146,  300 => 145,  293 => 141,  285 => 135,  275 => 131,  271 => 129,  267 => 128,  264 => 127,  254 => 123,  250 => 121,  246 => 120,  227 => 106,  221 => 105,  208 => 97,  202 => 96,  192 => 89,  184 => 84,  171 => 74,  156 => 62,  141 => 50,  126 => 38,  107 => 22,  100 => 18,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Rôles - SIGEP Tchad{% endblock %}

{% block body %}
<div class=\"roles-page\">
    <!-- Header -->
    <div class=\"page-header mb-4\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <h1 class=\"page-title\">
                    <i data-lucide=\"shield\"></i>
                    Gestion des Rôles
                </h1>
                <p class=\"text-muted\">Gérez les rôles et leurs permissions d'accès aux différents modules</p>
            </div>
            <div class=\"col-auto\">
                <a href=\"{{ path('app_roles_new') }}\" class=\"btn btn-primary\">
                    <i data-lucide=\"plus\"></i>
                    Nouveau Rôle
                </a>
                <a href=\"{{ path('app_roles_permissions_matrix') }}\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"grid\"></i>
                    Matrice des Permissions
                </a>
            </div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-primary\">
                    <i data-lucide=\"shield\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">{{ stats.total }}</div>
                    <div class=\"stat-label\">Total Rôles</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-success\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">{{ stats.actifs }}</div>
                    <div class=\"stat-label\">Rôles Actifs</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-info\">
                    <i data-lucide=\"users\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">{{ stats.totalUsers }}</div>
                    <div class=\"stat-label\">Utilisateurs Assignés</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"stat-card\">
                <div class=\"stat-icon bg-warning\">
                    <i data-lucide=\"settings\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">{{ stats.custom }}</div>
                    <div class=\"stat-label\">Rôles Personnalisés</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres et Recherche -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" action=\"{{ path('app_roles') }}\" class=\"row g-3\">
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control\" 
                           placeholder=\"Nom ou code du rôle...\" 
                           value=\"{{ search }}\">
                </div>
                
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Statut</label>
                    <select name=\"active\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"true\" {% if activeFilter == 'true' %}selected{% endif %}>Actifs</option>
                        <option value=\"false\" {% if activeFilter == 'false' %}selected{% endif %}>Inactifs</option>
                    </select>
                </div>
                
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Type</label>
                    <select name=\"system\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"true\" {% if systemFilter == 'true' %}selected{% endif %}>Système</option>
                        <option value=\"false\" {% if systemFilter == 'false' %}selected{% endif %}>Personnalisés</option>
                    </select>
                </div>
                
                <div class=\"col-md-2 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i data-lucide=\"search\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Messages Flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i data-lucide=\"check-circle\"></i>
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i data-lucide=\"alert-circle\"></i>
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Liste des Rôles -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">
                <i data-lucide=\"list\"></i>
                Liste des Rôles ({{ total }})
            </h5>
        </div>
        <div class=\"card-body p-0\">
            {% if roles|length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\">
                        <thead>
                            <tr>
                                <th>Rôle</th>
                                <th>Code</th>
                                <th class=\"text-center\">Type</th>
                                <th class=\"text-center\">Priorité</th>
                                <th class=\"text-center\">Permissions</th>
                                <th class=\"text-center\">Utilisateurs</th>
                                <th class=\"text-center\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for role in roles %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"role-icon me-2\">
                                                <i data-lucide=\"shield\"></i>
                                            </div>
                                            <div>
                                                <strong>{{ role.name }}</strong>
                                                {% if role.description %}
                                                    <br><small class=\"text-muted\">{{ role.description|u.truncate(60, '...') }}</small>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <code class=\"badge bg-light text-dark\">{{ role.code }}</code>
                                    </td>
                                    <td class=\"text-center\">
                                        {% if role.isSystem %}
                                            <span class=\"badge bg-secondary\">
                                                <i data-lucide=\"lock\" style=\"width: 14px; height: 14px;\"></i>
                                                Système
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-info\">
                                                <i data-lucide=\"edit-3\" style=\"width: 14px; height: 14px;\"></i>
                                                Personnalisé
                                            </span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-dark\">{{ role.priority }}</span>
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex flex-column align-items-center\">
                                            <strong>{{ role.permissionsCount }}</strong>
                                            <div class=\"progress\" style=\"width: 80px; height: 6px;\">
                                                <div class=\"progress-bar\" style=\"width: {{ role.permissionsPercentage }}%\"></div>
                                            </div>
                                            <small class=\"text-muted\">{{ role.permissionsPercentage }}%</small>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-primary rounded-pill\">
                                            {{ role.usersCount }}
                                        </span>
                                    </td>
                                    <td class=\"text-center\">
                                        {% if role.isActive %}
                                            <span class=\"badge bg-success\">Actif</span>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">Inactif</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"{{ path('app_roles_show', {id: role.id}) }}\" 
                                               class=\"btn btn-outline-primary\" title=\"Voir\">
                                                <i data-lucide=\"eye\"></i>
                                            </a>
                                            
                                            {% if not role.isSystem %}
                                                <a href=\"{{ path('app_roles_edit', {id: role.id}) }}\" 
                                                   class=\"btn btn-outline-secondary\" title=\"Modifier\">
                                                    <i data-lucide=\"edit\"></i>
                                                </a>
                                                
                                                <form method=\"post\" 
                                                      action=\"{{ path('app_roles_duplicate', {id: role.id}) }}\" 
                                                      class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" 
                                                           value=\"{{ csrf_token('duplicate' ~ role.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-outline-info\" 
                                                            title=\"Dupliquer\"
                                                            onclick=\"return confirm('Dupliquer ce rôle ?')\">
                                                        <i data-lucide=\"copy\"></i>
                                                    </button>
                                                </form>
                                                
                                                {% if role.isDeletable %}
                                                    <form method=\"post\" 
                                                          action=\"{{ path('app_roles_delete', {id: role.id}) }}\" 
                                                          class=\"d-inline\"
                                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?')\">
                                                        <input type=\"hidden\" name=\"_token\" 
                                                               value=\"{{ csrf_token('delete' ~ role.id) }}\">
                                                        <button type=\"submit\" class=\"btn btn-outline-danger\" 
                                                                title=\"Supprimer\">
                                                            <i data-lucide=\"trash-2\"></i>
                                                        </button>
                                                    </form>
                                                {% endif %}
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                {% if totalPages > 1 %}
                    <div class=\"card-footer\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination justify-content-center mb-0\">
                                {% if currentPage > 1 %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_roles', {page: currentPage - 1, search: search, active: activeFilter, system: systemFilter}) }}\">
                                            Précédent
                                        </a>
                                    </li>
                                {% endif %}

                                {% for page in 1..totalPages %}
                                    {% if page == currentPage %}
                                        <li class=\"page-item active\">
                                            <span class=\"page-link\">{{ page }}</span>
                                        </li>
                                    {% elseif page >= currentPage - 2 and page <= currentPage + 2 %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"{{ path('app_roles', {page: page, search: search, active: activeFilter, system: systemFilter}) }}\">
                                                {{ page }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endfor %}

                                {% if currentPage < totalPages %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_roles', {page: currentPage + 1, search: search, active: activeFilter, system: systemFilter}) }}\">
                                            Suivant
                                        </a>
                                    </li>
                                {% endif %}
                            </ul>
                        </nav>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"text-center py-5\">
                    <i data-lucide=\"shield\" style=\"width: 64px; height: 64px; color: #6c757d;\"></i>
                    <p class=\"text-muted mt-3\">Aucun rôle trouvé</p>
                    <a href=\"{{ path('app_roles_new') }}\" class=\"btn btn-primary\">
                        <i data-lucide=\"plus\"></i>
                        Créer un rôle
                    </a>
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Rôles les plus utilisés -->
    {% if mostUsed|length > 0 %}
        <div class=\"card mt-4\">
            <div class=\"card-header\">
                <h5 class=\"mb-0\">
                    <i data-lucide=\"trending-up\"></i>
                    Rôles les Plus Utilisés
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    {% for item in mostUsed %}
                        {% set role = item[0] %}
                        {% set usersCount = item.usersCount %}
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"role-icon me-3\">
                                    <i data-lucide=\"shield\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <strong>{{ role.name }}</strong>
                                    <br>
                                    <small class=\"text-muted\">{{ usersCount }} utilisateur(s)</small>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}
</div>

<style>
.stat-card {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.stat-icon.bg-primary { background: #004d99; }
.stat-icon.bg-success { background: #10b981; }
.stat-icon.bg-info { background: #0ea5e9; }
.stat-icon.bg-warning { background: #f59e0b; }

.stat-value {
    font-size: 2rem;
    font-weight: 700;
    color: #1f2937;
    line-height: 1;
}

.stat-label {
    font-size: 0.875rem;
    color: #6b7280;
    margin-top: 0.25rem;
}

.role-icon {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: linear-gradient(135deg, #004d99, #0066cc);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}
</style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        lucide.createIcons();
    </script>
{% endblock %}
", "role/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\role\\index.html.twig");
    }
}
