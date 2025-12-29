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

/* role/new.html.twig */
class __TwigTemplate_e7df612105505bd6991ce7869b263a54 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "role/new.html.twig"));

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

        yield "Nouveau Rôle - SIGEP Tchad";
        
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
        yield "<div class=\"role-new-page\">
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
                        <li class=\"breadcrumb-item active\">Nouveau rôle</li>
                    </ol>
                </nav>
                <h1 class=\"page-title\">
                    <i data-lucide=\"shield-plus\"></i>
                    Créer un Nouveau Rôle
                </h1>
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"arrow-left\"></i>
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>

    <!-- Messages Flash -->
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["error"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i data-lucide=\"alert-circle\"></i>
            ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
    ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["class" => "role-form"]]);
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
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'row');
        yield "
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "code", [], "any", false, false, false, 54), 'row');
        yield "
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'row');
        yield "
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "priority", [], "any", false, false, false, 56), 'row');
        yield "
                        
                        <div class=\"form-check form-switch mb-3\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "isActive", [], "any", false, false, false, 59), 'widget');
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "isActive", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
                            ";
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "isActive", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "help", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                                <small class=\"form-text text-muted d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "isActive", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "help", [], "any", false, false, false, 62), "html", null, true);
            yield "</small>
                            ";
        }
        // line 64
        yield "                        </div>

                        <hr>

                        <!-- Conseils -->
                        <div class=\"alert alert-info\">
                            <strong><i data-lucide=\"lightbulb\"></i> Conseils :</strong>
                            <ul class=\"mb-0 mt-2\">
                                <li>Le code doit être unique</li>
                                <li>Utilisez ROLE_ au début</li>
                                <li>Priorité : 0 = faible, 100 = haute</li>
                            </ul>
                        </div>

                        <!-- Boutons d'action -->
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i data-lucide=\"save\"></i>
                                Créer le Rôle
                            </button>
                            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
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
        // line 95
        yield from $this->load("role/_permissions_grid.html.twig", 95)->unwrap()->yield(CoreExtension::merge($context, ["role" =>         // line 96
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 96, $this->source); })()), "entities" =>         // line 97
(isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 97, $this->source); })()), "actions" =>         // line 98
(isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 98, $this->source); })())]));
        // line 100
        yield "            </div>
        </div>

        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "_token", [], "any", false, false, false, 103), 'row');
        yield "
    ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end', ["render_rest" => false]);
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

.alert-info {
    background: #e6f2ff;
    border-color: #004d99;
    color: #002a54;
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

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
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

            // Génération automatique du code à partir du nom
            const nameInput = document.getElementById('role_name');
            if (nameInput && codeInput && !codeInput.value) {
                nameInput.addEventListener('blur', function(e) {
                    if (!codeInput.value && e.target.value) {
                        const generatedCode = 'ROLE_' + e.target.value
                            .toUpperCase()
                            .replace(/[^A-Z0-9\\s]/g, '')
                            .replace(/\\s+/g, '_');
                        codeInput.value = generatedCode;
                    }
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
        return "role/new.html.twig";
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
        return array (  307 => 152,  297 => 151,  243 => 104,  239 => 103,  234 => 100,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  215 => 84,  193 => 64,  187 => 62,  185 => 61,  181 => 60,  177 => 59,  171 => 56,  167 => 55,  163 => 54,  159 => 53,  144 => 41,  141 => 40,  131 => 36,  127 => 34,  123 => 33,  111 => 24,  98 => 14,  89 => 7,  79 => 6,  62 => 4,  54 => 1,  52 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import _self as icons %}

{% block title %}Nouveau Rôle - SIGEP Tchad{% endblock %}

{% block body %}
<div class=\"role-new-page\">
    <!-- Header -->
    <div class=\"page-header mb-4\">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_roles') }}\">Rôles</a></li>
                        <li class=\"breadcrumb-item active\">Nouveau rôle</li>
                    </ol>
                </nav>
                <h1 class=\"page-title\">
                    <i data-lucide=\"shield-plus\"></i>
                    Créer un Nouveau Rôle
                </h1>
            </div>
            <div class=\"col-auto\">
                <a href=\"{{ path('app_roles') }}\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"arrow-left\"></i>
                    Retour à la liste
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

                        <!-- Conseils -->
                        <div class=\"alert alert-info\">
                            <strong><i data-lucide=\"lightbulb\"></i> Conseils :</strong>
                            <ul class=\"mb-0 mt-2\">
                                <li>Le code doit être unique</li>
                                <li>Utilisez ROLE_ au début</li>
                                <li>Priorité : 0 = faible, 100 = haute</li>
                            </ul>
                        </div>

                        <!-- Boutons d'action -->
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i data-lucide=\"save\"></i>
                                Créer le Rôle
                            </button>
                            <a href=\"{{ path('app_roles') }}\" class=\"btn btn-outline-secondary\">
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

.alert-info {
    background: #e6f2ff;
    border-color: #004d99;
    color: #002a54;
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

            // Génération automatique du code à partir du nom
            const nameInput = document.getElementById('role_name');
            if (nameInput && codeInput && !codeInput.value) {
                nameInput.addEventListener('blur', function(e) {
                    if (!codeInput.value && e.target.value) {
                        const generatedCode = 'ROLE_' + e.target.value
                            .toUpperCase()
                            .replace(/[^A-Z0-9\\s]/g, '')
                            .replace(/\\s+/g, '_');
                        codeInput.value = generatedCode;
                    }
                });
            }
        });
    </script>
{% endblock %}
", "role/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\role\\new.html.twig");
    }
}
