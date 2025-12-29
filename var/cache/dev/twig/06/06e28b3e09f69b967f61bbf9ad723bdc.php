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

/* role/permissions_matrix.html.twig */
class __TwigTemplate_2ee92388e2e67c672bf4f0e880c2793d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "role/permissions_matrix.html.twig"));

        // line 2
        $macros["icons"] = $this->macros["icons"] = $this;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Matrice des Permissions - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"permissions-matrix-page\">
    <!-- Header -->
    <div class=\"page-header mb-4\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
        yield "\">Rôles</a></li>
                        <li class=\"breadcrumb-item active\">Matrice des permissions</li>
                    </ol>
                </nav>
                <h1 class=\"page-title\">
                    <i data-lucide=\"grid\"></i>
                    Matrice des Permissions
                </h1>
                <p class=\"text-muted\">Vue d'ensemble des permissions par rôle et module</p>
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"arrow-left\"></i>
                    Retour aux rôles
                </a>
            </div>
        </div>
    </div>

    <!-- Légende -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-auto\">
                    <strong>Légende :</strong>
                </div>
                <div class=\"col-auto\">
                    <span class=\"permission-badge granted\">
                        <i data-lucide=\"check\" style=\"width: 14px; height: 14px;\"></i>
                        Autorisé
                    </span>
                </div>
                <div class=\"col-auto\">
                    <span class=\"permission-badge denied\">
                        <i data-lucide=\"x\" style=\"width: 14px; height: 14px;\"></i>
                        Refusé
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Matrice des Permissions -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">
                <i data-lucide=\"table\"></i>
                Matrice Complète des Permissions
                <span class=\"badge bg-primary float-end\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 62, $this->source); })())), "html", null, true);
        yield " rôles</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered permissions-matrix-table mb-0\">
                    <thead class=\"sticky-top\">
                        <tr>
                            <th class=\"entity-column\">Module / Entité</th>
                            <th class=\"action-column\">Action</th>
                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 73
            yield "                                <th class=\"role-column text-center\">
                                    <div class=\"role-header\">
                                        <i data-lucide=\"shield\" style=\"width: 16px; height: 16px;\"></i>
                                        <div class=\"role-name\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 76), "html", null, true);
            yield "</div>
                                        <small class=\"text-muted d-block\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "code", [], "any", false, false, false, 77), "html", null, true);
            yield "</small>
                                        <div class=\"mt-1\">
                                            <span class=\"badge bg-primary\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "permissionsCount", [], "any", false, false, false, 79), "html", null, true);
            yield "</span>
                                        </div>
                                    </div>
                                </th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matrix"]) || array_key_exists("matrix", $context) ? $context["matrix"] : (function () { throw new RuntimeError('Variable "matrix" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["entityKey"] => $context["entityData"]) {
            // line 88
            yield "                            ";
            $context["entityActionsCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 88, $this->source); })()));
            // line 89
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 89, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["actionKey"] => $context["actionLabel"]) {
                // line 90
                yield "                                <tr class=\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "entity-start";
                }
                yield "\">
                                    ";
                // line 91
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "                                        <td class=\"entity-cell\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entityActionsCount"]) || array_key_exists("entityActionsCount", $context) ? $context["entityActionsCount"] : (function () { throw new RuntimeError('Variable "entityActionsCount" does not exist.', 92, $this->source); })()), "html", null, true);
                    yield "\">
                                            <div class=\"entity-info\">
                                            <i data-lucide=\"";
                    // line 94
                    yield $macros["icons"]->getTemplateForMacro("macro_getEntityIcon", $context, 94, $this->getSourceContext())->macro_getEntityIcon(...[$context["entityKey"]]);
                    yield "\"></i>
                                                <strong>";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entityData"], "label", [], "any", false, false, false, 95), "html", null, true);
                    yield "</strong>
                                            </div>
                                        </td>
                                    ";
                }
                // line 99
                yield "                                    <td class=\"action-cell\">
                                        <div class=\"action-info\">
                                            <i data-lucide=\"";
                // line 101
                yield $macros["icons"]->getTemplateForMacro("macro_getActionIcon", $context, 101, $this->getSourceContext())->macro_getActionIcon(...[$context["actionKey"]]);
                yield "\"></i>
                                            ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actionLabel"], "html", null, true);
                yield "
                                        </div>
                                    </td>
                                    ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 105, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 106
                    yield "                                        <td class=\"permission-cell text-center\">
                                            ";
                    // line 107
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entityData"], "roles", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 107), [], "array", false, false, false, 107), $context["actionKey"], [], "array", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 108
                        yield "                                                <i data-lucide=\"check-circle\" class=\"icon-granted\"></i>
                                            ";
                    } else {
                        // line 110
                        yield "                                                <i data-lucide=\"x-circle\" class=\"icon-denied\"></i>
                                            ";
                    }
                    // line 112
                    yield "                                        </td>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                yield "                                </tr>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['actionKey'], $context['actionLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['entityKey'], $context['entityData'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Statistiques par rôle -->
    <div class=\"row mt-4\">
        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 126
            yield "            <div class=\"col-md-4 mb-3\">
                <div class=\"card role-stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"role-icon me-3\">
                                <i data-lucide=\"shield\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 134), "html", null, true);
            yield "</h6>
                                <small class=\"text-muted\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "code", [], "any", false, false, false, 135), "html", null, true);
            yield "</small>
                            </div>
                        </div>
                        
                        <div class=\"mb-2\">
                            <div class=\"d-flex justify-content-between mb-1\">
                                <small>Permissions accordées</small>
                                <strong>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "permissionsCount", [], "any", false, false, false, 142), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 142, $this->source); })())) * Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 142, $this->source); })()))), "html", null, true);
            yield "</strong>
                            </div>
                            <div class=\"progress\" style=\"height: 8px;\">
                                <div class=\"progress-bar bg-success\" 
                                     style=\"width: ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "permissionsPercentage", [], "any", false, false, false, 146), "html", null, true);
            yield "%\">
                                </div>
                            </div>
                            <small class=\"text-muted\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "permissionsPercentage", [], "any", false, false, false, 149), "html", null, true);
            yield "%</small>
                        </div>
                        
                        <div class=\"mt-3\">
                            <a href=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-primary w-100\">
                                <i data-lucide=\"eye\" style=\"width: 14px; height: 14px;\"></i>
                                Voir les détails
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "    </div>
</div>

<style>
.permissions-matrix-table {
    font-size: 0.85rem;
    border-collapse: separate;
    border-spacing: 0;
}

.permissions-matrix-table thead {
    background: white;
    z-index: 100;
}

.permissions-matrix-table th {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    vertical-align: middle;
}

.entity-column {
    min-width: 200px;
    position: sticky;
    left: 0;
    z-index: 10;
    background: white;
}

.action-column {
    min-width: 150px;
    position: sticky;
    left: 200px;
    z-index: 10;
    background: white;
}

.role-column {
    min-width: 120px;
}

.role-header {
    padding: 0.5rem;
}

.role-name {
    font-weight: 600;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.entity-cell {
    background: #f8f9fa;
    font-weight: 600;
    vertical-align: middle;
    position: sticky;
    left: 0;
    z-index: 5;
}

.action-cell {
    background: #ffffff;
    position: sticky;
    left: 200px;
    z-index: 5;
    border-right: 2px solid #dee2e6;
}

.entity-info, .action-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.permission-cell {
    background: white;
}

.entity-start .entity-cell {
    border-top: 3px solid #004d99;
}

.icon-granted {
    color: #10b981;
    width: 24px;
    height: 24px;
}

.icon-denied {
    color: #e5e7eb;
    width: 24px;
    height: 24px;
}

.permission-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
}

.permission-badge.granted {
    background: #d1fae5;
    color: #065f46;
}

.permission-badge.denied {
    background: #fee2e2;
    color: #991b1b;
}

.role-stats-card {
    border-left: 4px solid #004d99;
}

.role-icon {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    background: linear-gradient(135deg, #004d99, #0066cc);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

/* Responsive */
@media (max-width: 768px) {
    .permissions-matrix-table {
        font-size: 0.75rem;
    }
    
    .role-column {
        min-width: 100px;
    }
    
    .entity-column {
        min-width: 150px;
    }
    
    .action-column {
        min-width: 120px;
        left: 150px;
    }
    
    .action-cell {
        left: 150px;
    }
}
</style>

";
        // line 331
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 344
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 345
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

    // line 316
    public function macro_getEntityIcon($entity = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getEntityIcon"));

            // line 317
            yield "    ";
            $context["icons"] = ["project" => "folder", "financement" => "dollar-sign", "convention" => "file-text", "decaissement" => "credit-card", "audit" => "clipboard-check", "institution" => "building", "partner" => "users", "user" => "user", "dashboard" => "layout-dashboard", "top_management" => "crown"];
            // line 329
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 329, $this->source); })()), [], "array", true, true, false, 329)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 329, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 329, $this->source); })()), [], "array", false, false, false, 329), "circle")) : ("circle")), "html", null, true);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 332
    public function macro_getActionIcon($action = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "action" => $action,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getActionIcon"));

            // line 333
            yield "    ";
            $context["icons"] = ["view" => "eye", "create" => "plus-circle", "edit" => "edit", "delete" => "trash-2", "export" => "download"];
            // line 340
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 340, $this->source); })()), [], "array", true, true, false, 340)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 340, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 340, $this->source); })()), [], "array", false, false, false, 340), "circle")) : ("circle")), "html", null, true);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "role/permissions_matrix.html.twig";
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
        return array (  622 => 340,  619 => 333,  604 => 332,  592 => 329,  589 => 317,  574 => 316,  559 => 345,  549 => 344,  540 => 331,  385 => 163,  369 => 153,  362 => 149,  356 => 146,  347 => 142,  337 => 135,  333 => 134,  323 => 126,  319 => 125,  309 => 117,  303 => 116,  288 => 114,  281 => 112,  277 => 110,  273 => 108,  271 => 107,  268 => 106,  264 => 105,  258 => 102,  254 => 101,  250 => 99,  243 => 95,  239 => 94,  233 => 92,  231 => 91,  224 => 90,  206 => 89,  203 => 88,  199 => 87,  194 => 84,  183 => 79,  178 => 77,  174 => 76,  169 => 73,  165 => 72,  152 => 62,  112 => 25,  98 => 14,  89 => 7,  79 => 6,  62 => 4,  54 => 1,  52 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import _self as icons %}

{% block title %}Matrice des Permissions - SIGEP Tchad{% endblock %}

{% block body %}
<div class=\"permissions-matrix-page\">
    <!-- Header -->
    <div class=\"page-header mb-4\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_roles') }}\">Rôles</a></li>
                        <li class=\"breadcrumb-item active\">Matrice des permissions</li>
                    </ol>
                </nav>
                <h1 class=\"page-title\">
                    <i data-lucide=\"grid\"></i>
                    Matrice des Permissions
                </h1>
                <p class=\"text-muted\">Vue d'ensemble des permissions par rôle et module</p>
            </div>
            <div class=\"col-auto\">
                <a href=\"{{ path('app_roles') }}\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"arrow-left\"></i>
                    Retour aux rôles
                </a>
            </div>
        </div>
    </div>

    <!-- Légende -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-auto\">
                    <strong>Légende :</strong>
                </div>
                <div class=\"col-auto\">
                    <span class=\"permission-badge granted\">
                        <i data-lucide=\"check\" style=\"width: 14px; height: 14px;\"></i>
                        Autorisé
                    </span>
                </div>
                <div class=\"col-auto\">
                    <span class=\"permission-badge denied\">
                        <i data-lucide=\"x\" style=\"width: 14px; height: 14px;\"></i>
                        Refusé
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Matrice des Permissions -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">
                <i data-lucide=\"table\"></i>
                Matrice Complète des Permissions
                <span class=\"badge bg-primary float-end\">{{ roles|length }} rôles</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered permissions-matrix-table mb-0\">
                    <thead class=\"sticky-top\">
                        <tr>
                            <th class=\"entity-column\">Module / Entité</th>
                            <th class=\"action-column\">Action</th>
                            {% for role in roles %}
                                <th class=\"role-column text-center\">
                                    <div class=\"role-header\">
                                        <i data-lucide=\"shield\" style=\"width: 16px; height: 16px;\"></i>
                                        <div class=\"role-name\">{{ role.name }}</div>
                                        <small class=\"text-muted d-block\">{{ role.code }}</small>
                                        <div class=\"mt-1\">
                                            <span class=\"badge bg-primary\">{{ role.permissionsCount }}</span>
                                        </div>
                                    </div>
                                </th>
                            {% endfor %}
                        </tr>
                    </thead>
                    <tbody>
                        {% for entityKey, entityData in matrix %}
                            {% set entityActionsCount = actions|length %}
                            {% for actionKey, actionLabel in actions %}
                                <tr class=\"{% if loop.first %}entity-start{% endif %}\">
                                    {% if loop.first %}
                                        <td class=\"entity-cell\" rowspan=\"{{ entityActionsCount }}\">
                                            <div class=\"entity-info\">
                                            <i data-lucide=\"{{ icons.getEntityIcon(entityKey) }}\"></i>
                                                <strong>{{ entityData.label }}</strong>
                                            </div>
                                        </td>
                                    {% endif %}
                                    <td class=\"action-cell\">
                                        <div class=\"action-info\">
                                            <i data-lucide=\"{{ icons.getActionIcon(actionKey) }}\"></i>
                                            {{ actionLabel }}
                                        </div>
                                    </td>
                                    {% for role in roles %}
                                        <td class=\"permission-cell text-center\">
                                            {% if entityData.roles[role.id][actionKey] %}
                                                <i data-lucide=\"check-circle\" class=\"icon-granted\"></i>
                                            {% else %}
                                                <i data-lucide=\"x-circle\" class=\"icon-denied\"></i>
                                            {% endif %}
                                        </td>
                                    {% endfor %}
                                </tr>
                            {% endfor %}
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Statistiques par rôle -->
    <div class=\"row mt-4\">
        {% for role in roles %}
            <div class=\"col-md-4 mb-3\">
                <div class=\"card role-stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"role-icon me-3\">
                                <i data-lucide=\"shield\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">{{ role.name }}</h6>
                                <small class=\"text-muted\">{{ role.code }}</small>
                            </div>
                        </div>
                        
                        <div class=\"mb-2\">
                            <div class=\"d-flex justify-content-between mb-1\">
                                <small>Permissions accordées</small>
                                <strong>{{ role.permissionsCount }} / {{ (entities|length * actions|length) }}</strong>
                            </div>
                            <div class=\"progress\" style=\"height: 8px;\">
                                <div class=\"progress-bar bg-success\" 
                                     style=\"width: {{ role.permissionsPercentage }}%\">
                                </div>
                            </div>
                            <small class=\"text-muted\">{{ role.permissionsPercentage }}%</small>
                        </div>
                        
                        <div class=\"mt-3\">
                            <a href=\"{{ path('app_roles_show', {id: role.id}) }}\" 
                               class=\"btn btn-sm btn-outline-primary w-100\">
                                <i data-lucide=\"eye\" style=\"width: 14px; height: 14px;\"></i>
                                Voir les détails
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<style>
.permissions-matrix-table {
    font-size: 0.85rem;
    border-collapse: separate;
    border-spacing: 0;
}

.permissions-matrix-table thead {
    background: white;
    z-index: 100;
}

.permissions-matrix-table th {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    vertical-align: middle;
}

.entity-column {
    min-width: 200px;
    position: sticky;
    left: 0;
    z-index: 10;
    background: white;
}

.action-column {
    min-width: 150px;
    position: sticky;
    left: 200px;
    z-index: 10;
    background: white;
}

.role-column {
    min-width: 120px;
}

.role-header {
    padding: 0.5rem;
}

.role-name {
    font-weight: 600;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.entity-cell {
    background: #f8f9fa;
    font-weight: 600;
    vertical-align: middle;
    position: sticky;
    left: 0;
    z-index: 5;
}

.action-cell {
    background: #ffffff;
    position: sticky;
    left: 200px;
    z-index: 5;
    border-right: 2px solid #dee2e6;
}

.entity-info, .action-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.permission-cell {
    background: white;
}

.entity-start .entity-cell {
    border-top: 3px solid #004d99;
}

.icon-granted {
    color: #10b981;
    width: 24px;
    height: 24px;
}

.icon-denied {
    color: #e5e7eb;
    width: 24px;
    height: 24px;
}

.permission-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
}

.permission-badge.granted {
    background: #d1fae5;
    color: #065f46;
}

.permission-badge.denied {
    background: #fee2e2;
    color: #991b1b;
}

.role-stats-card {
    border-left: 4px solid #004d99;
}

.role-icon {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    background: linear-gradient(135deg, #004d99, #0066cc);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

/* Responsive */
@media (max-width: 768px) {
    .permissions-matrix-table {
        font-size: 0.75rem;
    }
    
    .role-column {
        min-width: 100px;
    }
    
    .entity-column {
        min-width: 150px;
    }
    
    .action-column {
        min-width: 120px;
        left: 150px;
    }
    
    .action-cell {
        left: 150px;
    }
}
</style>

{% macro getEntityIcon(entity) %}
    {% set icons = {
        'project': 'folder',
        'financement': 'dollar-sign',
        'convention': 'file-text',
        'decaissement': 'credit-card',
        'audit': 'clipboard-check',
        'institution': 'building',
        'partner': 'users',
        'user': 'user',
        'dashboard': 'layout-dashboard',
        'top_management': 'crown'
    } %}
    {{ icons[entity]|default('circle') }}
{% endmacro %}

{% macro getActionIcon(action) %}
    {% set icons = {
        'view': 'eye',
        'create': 'plus-circle',
        'edit': 'edit',
        'delete': 'trash-2',
        'export': 'download'
    } %}
    {{ icons[action]|default('circle') }}
{% endmacro %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        lucide.createIcons();
    </script>
{% endblock %}
", "role/permissions_matrix.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\role\\permissions_matrix.html.twig");
    }
}
