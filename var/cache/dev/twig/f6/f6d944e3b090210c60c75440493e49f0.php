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

/* role/edit.html.twig */
class __TwigTemplate_c8d2eab014118381a83452bd11646c96 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "role/edit.html.twig"));

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

        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - SIGEP Tchad";
        
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
        yield "<div class=\"role-edit-page\">
    <!-- Header -->
    <div class=\"page-header mb-4\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
        yield "\">Rôles</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        yield "</a></li>
                        <li class=\"breadcrumb-item active\">Modifier</li>
                    </ol>
                </nav>
                <h1 class=\"page-title\">
                    <i data-lucide=\"edit\"></i>
                    Modifier le Rôle
                </h1>
                <p class=\"text-muted\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), "html", null, true);
        yield ")</p>
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"arrow-left\"></i>
                    Retour
                </a>
            </div>
        </div>
    </div>

    <!-- Messages Flash -->
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["error"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i data-lucide=\"alert-circle\"></i>
            ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
    ";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 42, $this->source); })()), "isSystem", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        <div class=\"alert alert-warning\">
            <i data-lucide=\"lock\"></i>
            <strong>Attention :</strong> Ce rôle est un rôle système. Les modifications sont limitées.
        </div>
    ";
        }
        // line 48
        yield "
    ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["class" => "role-form"]]);
        yield "
        <div class=\"row\">
            <!-- Informations du rôle -->
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card sticky-top\" style=\"top: 20px;\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">
                            <i data-lucide=\"info\"></i>
                            Informations du Rôle
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), 'row');
        yield "
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "code", [], "any", false, false, false, 62), 'row');
        yield "
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'row');
        yield "
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "priority", [], "any", false, false, false, 64), 'row');
        yield "
                        
                        <div class=\"form-check form-switch mb-3\">
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "isActive", [], "any", false, false, false, 67), 'widget');
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "isActive", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
                            ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "isActive", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "help", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                                <small class=\"form-text text-muted d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "isActive", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "help", [], "any", false, false, false, 70), "html", null, true);
            yield "</small>
                            ";
        }
        // line 72
        yield "                        </div>

                        <hr>

                        <!-- Statistiques du rôle -->
                        <div class=\"mb-3\">
                            <h6>Statistiques</h6>
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-2\">
                                    <i data-lucide=\"users\" style=\"width: 16px; height: 16px;\"></i>
                                    <strong>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 82, $this->source); })()), "usersCount", [], "any", false, false, false, 82), "html", null, true);
        yield "</strong> utilisateur(s)
                                </li>
                                <li class=\"mb-2\">
                                    <i data-lucide=\"key\" style=\"width: 16px; height: 16px;\"></i>
                                    <strong>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 86, $this->source); })()), "permissionsCount", [], "any", false, false, false, 86), "html", null, true);
        yield "</strong> permission(s)
                                </li>
                                <li class=\"mb-2\">
                                    <i data-lucide=\"calendar\" style=\"width: 16px; height: 16px;\"></i>
                                    Créé le ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 90, $this->source); })()), "createdAt", [], "any", false, false, false, 90), "d/m/Y"), "html", null, true);
        yield "
                                </li>
                                ";
        // line 92
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 92, $this->source); })()), "updatedAt", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                                <li class=\"mb-2\">
                                    <i data-lucide=\"clock\" style=\"width: 16px; height: 16px;\"></i>
                                    Modifié le ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 95, $this->source); })()), "updatedAt", [], "any", false, false, false, 95), "d/m/Y à H:i"), "html", null, true);
            yield "
                                </li>
                                ";
        }
        // line 98
        yield "                            </ul>
                        </div>

                        <hr>

                        <!-- Boutons d'action -->
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i data-lucide=\"save\"></i>
                                Enregistrer
                            </button>
                            <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                                <i data-lucide=\"x\"></i>
                                Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Permissions -->
            <div class=\"col-lg-8 mb-4\">
                ";
        // line 120
        yield from $this->load("role/_permissions_grid.html.twig", 120)->unwrap()->yield(CoreExtension::merge($context, ["role" =>         // line 121
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 121, $this->source); })()), "entities" =>         // line 122
(isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 122, $this->source); })()), "actions" =>         // line 123
(isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 123, $this->source); })())]));
        // line 125
        yield "            </div>
        </div>

        ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "_token", [], "any", false, false, false, 128), 'row');
        yield "
    ";
        // line 129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
</div>

<style>
.role-form {
    max-width: 100%;
}

.card {
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.form-label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.5rem;
}

.form-control, .form-select {
    border-radius: 6px;
    border: 1px solid #d1d5db;
}

.form-control:focus, .form-select:focus {
    border-color: #004d99;
    box-shadow: 0 0 0 3px rgba(0, 77, 153, 0.1);
}

.btn-primary {
    background: #004d99;
    border-color: #004d99;
}

.btn-primary:hover {
    background: #003366;
    border-color: #003366;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
            
            // Validation du code
            const codeInput = document.getElementById('role_code');
            if (codeInput) {
                codeInput.addEventListener('input', function(e) {
                    // Convertir en majuscules et remplacer les espaces par des underscores
                    let value = e.target.value.toUpperCase().replace(/\\s+/g, '_');
                    
                    // Ajouter ROLE_ si nécessaire
                    if (!value.startsWith('ROLE_') && value.length > 0) {
                        value = 'ROLE_' + value;
                    }
                    
                    // Ne garder que les caractères valides
                    value = value.replace(/[^A-Z_]/g, '');
                    
                    e.target.value = value;
                });
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
        return "role/edit.html.twig";
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
        return array (  358 => 171,  348 => 170,  300 => 129,  296 => 128,  291 => 125,  289 => 123,  288 => 122,  287 => 121,  286 => 120,  272 => 109,  259 => 98,  253 => 95,  249 => 93,  247 => 92,  242 => 90,  235 => 86,  228 => 82,  216 => 72,  210 => 70,  208 => 69,  204 => 68,  200 => 67,  194 => 64,  190 => 63,  186 => 62,  182 => 61,  167 => 49,  164 => 48,  157 => 43,  155 => 42,  152 => 41,  142 => 37,  138 => 35,  134 => 34,  122 => 25,  114 => 22,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier {{ role.name }} - SIGEP Tchad{% endblock %}

{% block body %}
<div class=\"role-edit-page\">
    <!-- Header -->
    <div class=\"page-header mb-4\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_roles') }}\">Rôles</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_roles_show', {id: role.id}) }}\">{{ role.name }}</a></li>
                        <li class=\"breadcrumb-item active\">Modifier</li>
                    </ol>
                </nav>
                <h1 class=\"page-title\">
                    <i data-lucide=\"edit\"></i>
                    Modifier le Rôle
                </h1>
                <p class=\"text-muted\">{{ role.name }} ({{ role.code }})</p>
            </div>
            <div class=\"col-auto\">
                <a href=\"{{ path('app_roles_show', {id: role.id}) }}\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"arrow-left\"></i>
                    Retour
                </a>
            </div>
        </div>
    </div>

    <!-- Messages Flash -->
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i data-lucide=\"alert-circle\"></i>
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    {% if role.isSystem %}
        <div class=\"alert alert-warning\">
            <i data-lucide=\"lock\"></i>
            <strong>Attention :</strong> Ce rôle est un rôle système. Les modifications sont limitées.
        </div>
    {% endif %}

    {{ form_start(form, {'attr': {'class': 'role-form'}}) }}
        <div class=\"row\">
            <!-- Informations du rôle -->
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card sticky-top\" style=\"top: 20px;\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">
                            <i data-lucide=\"info\"></i>
                            Informations du Rôle
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        {{ form_row(form.name) }}
                        {{ form_row(form.code) }}
                        {{ form_row(form.description) }}
                        {{ form_row(form.priority) }}
                        
                        <div class=\"form-check form-switch mb-3\">
                            {{ form_widget(form.isActive) }}
                            {{ form_label(form.isActive, null, {'label_attr': {'class': 'form-check-label'}}) }}
                            {% if form.isActive.vars.help %}
                                <small class=\"form-text text-muted d-block\">{{ form.isActive.vars.help }}</small>
                            {% endif %}
                        </div>

                        <hr>

                        <!-- Statistiques du rôle -->
                        <div class=\"mb-3\">
                            <h6>Statistiques</h6>
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-2\">
                                    <i data-lucide=\"users\" style=\"width: 16px; height: 16px;\"></i>
                                    <strong>{{ role.usersCount }}</strong> utilisateur(s)
                                </li>
                                <li class=\"mb-2\">
                                    <i data-lucide=\"key\" style=\"width: 16px; height: 16px;\"></i>
                                    <strong>{{ role.permissionsCount }}</strong> permission(s)
                                </li>
                                <li class=\"mb-2\">
                                    <i data-lucide=\"calendar\" style=\"width: 16px; height: 16px;\"></i>
                                    Créé le {{ role.createdAt|date('d/m/Y') }}
                                </li>
                                {% if role.updatedAt %}
                                <li class=\"mb-2\">
                                    <i data-lucide=\"clock\" style=\"width: 16px; height: 16px;\"></i>
                                    Modifié le {{ role.updatedAt|date('d/m/Y à H:i') }}
                                </li>
                                {% endif %}
                            </ul>
                        </div>

                        <hr>

                        <!-- Boutons d'action -->
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i data-lucide=\"save\"></i>
                                Enregistrer
                            </button>
                            <a href=\"{{ path('app_roles_show', {id: role.id}) }}\" class=\"btn btn-outline-secondary\">
                                <i data-lucide=\"x\"></i>
                                Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Permissions -->
            <div class=\"col-lg-8 mb-4\">
                {% include 'role/_permissions_grid.html.twig' with {
                    'role': role,
                    'entities': entities,
                    'actions': actions
                } %}
            </div>
        </div>

        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>

<style>
.role-form {
    max-width: 100%;
}

.card {
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.form-label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.5rem;
}

.form-control, .form-select {
    border-radius: 6px;
    border: 1px solid #d1d5db;
}

.form-control:focus, .form-select:focus {
    border-color: #004d99;
    box-shadow: 0 0 0 3px rgba(0, 77, 153, 0.1);
}

.btn-primary {
    background: #004d99;
    border-color: #004d99;
}

.btn-primary:hover {
    background: #003366;
    border-color: #003366;
}
</style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
            
            // Validation du code
            const codeInput = document.getElementById('role_code');
            if (codeInput) {
                codeInput.addEventListener('input', function(e) {
                    // Convertir en majuscules et remplacer les espaces par des underscores
                    let value = e.target.value.toUpperCase().replace(/\\s+/g, '_');
                    
                    // Ajouter ROLE_ si nécessaire
                    if (!value.startsWith('ROLE_') && value.length > 0) {
                        value = 'ROLE_' + value;
                    }
                    
                    // Ne garder que les caractères valides
                    value = value.replace(/[^A-Z_]/g, '');
                    
                    e.target.value = value;
                });
            }
        });
    </script>
{% endblock %}
", "role/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\role\\edit.html.twig");
    }
}
