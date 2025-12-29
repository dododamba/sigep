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

/* convention/show.html.twig */
class __TwigTemplate_8dabbf5ada5c2b4db1daf7232279015a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "convention/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Convention ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 2, $this->source); })()), "code", [], "any", false, false, false, 2), "html", null, true);
        yield " - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "<style>
/* ===============================
   Variables couleurs et typographie
   =============================== */
:root {
    --primary-color: #004d99;
    --secondary-color: #f0f4f8;
    --accent-color: #daa520;
    --text-color: #333;
    --text-light: #666;
    --bg-card: #fff;
    --border-radius: 12px;
    --transition-speed: 0.3s;
    --badge-success: #28a745;
    --badge-warning: #ffc107;
    --badge-danger: #dc3545;
    --badge-info: #17a2b8;
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* ===============================
   Global Styles
   =============================== */
body {
    font-family: var(--font-family);
    color: var(--text-color);
    background-color: var(--secondary-color);
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
    color: var(--primary-color);
    transition: color var(--transition-speed);
}

a:hover {
    color: darken(var(--primary-color), 10%);
}

/* ===============================
   Content Area
   =============================== */
.content-area {
    max-width: 900px;
    margin: 2rem auto;
    padding: 1rem;
}

/* ===============================
   Page Header
   =============================== */
.page-header {
    margin-bottom: 1.5rem;
}

.back-link {
    display: inline-flex;
    align-items: center;
    font-weight: 500;
    color: var(--primary-color);
}

.back-link i {
    margin-right: 0.5rem;
    font-size: 1.2rem;
}

/* ===============================
   Detail Card
   =============================== */
.detail-card {
    background-color: var(--bg-card);
    border-radius: var(--border-radius);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    padding: 1.5rem;
    transition: transform var(--transition-speed), box-shadow var(--transition-speed);
}

.detail-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}

/* ===============================
   Detail Header
   =============================== */
.detail-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.detail-header h3 {
    margin: 0;
    font-size: 1.5rem;
}

.detail-header p {
    margin: 0;
    color: var(--text-light);
}

/* ===============================
   Badges
   =============================== */
.badge {
    padding: 0.3rem 0.8rem;
    border-radius: 8px;
    color: #fff;
    font-size: 0.85rem;
    font-weight: 500;
    text-transform: uppercase;
}

.badge-success { background-color: var(--badge-success); }
.badge-warning { background-color: var(--badge-warning); }
.badge-danger { background-color: var(--badge-danger); }
.badge-info { background-color: var(--badge-info); }

/* ===============================
   Detail Section
   =============================== */
.detail-section {
    margin-top: 1.5rem;
}

.detail-section h4 {
    margin-bottom: 0.75rem;
    font-size: 1.2rem;
    color: var(--primary-color);
}

/* ===============================
   Detail Grid
   =============================== */
.detail-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem 2rem;
}

.detail-item {
    display: flex;
    flex-direction: column;
}

.detail-label {
    font-size: 0.85rem;
    color: var(--text-light);
}

.detail-value {
    font-size: 1rem;
    font-weight: 500;
    margin-top: 0.25rem;
}

/* ===============================
   Action Buttons
   =============================== */
.action-buttons {
    margin-top: 1rem;
}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.5rem 1rem;
    border-radius: var(--border-radius);
    font-weight: 500;
    cursor: pointer;
    transition: background-color var(--transition-speed), transform var(--transition-speed);
}

.btn i {
    font-size: 1rem;
}

/* Primary Button */
.btn-primary {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #003366;
    transform: translateY(-2px);
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .detail-grid {
        grid-template-columns: 1fr;
    }

    .detail-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 214
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_index");
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\"></i> Retour aux conventions
        </a>
    </div>

    <div class=\"detail-card\">
        <div class=\"detail-header\">
            <div>
                <h3>";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 224, $this->source); })()), "code", [], "any", false, false, false, 224), "html", null, true);
        yield "</h3>
                <p>";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 225, $this->source); })()), "intitule", [], "any", false, false, false, 225), "html", null, true);
        yield "</p>
            </div>
            <span class=\"badge badge-";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 227, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 227), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 227, $this->source); })()), "statutLabel", [], "any", false, false, false, 227), "html", null, true);
        yield "</span>
        </div>

        <div class=\"detail-section\">
            <h4>Informations principales</h4>
            <div class=\"detail-grid\">
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Partenaire</span>
                    <span class=\"detail-value\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 235, $this->source); })()), "partenaire", [], "any", false, false, false, 235), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Type</span>
                    <span class=\"detail-value\">";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 239, $this->source); })()), "typeLabel", [], "any", false, false, false, 239), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Montant Global</span>
                    <span class=\"detail-value\"><strong>";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 243, $this->source); })()), "montantFormate", [], "any", false, false, false, 243), "html", null, true);
        yield "</strong></span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Contrepartie État</span>
                    <span class=\"detail-value\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 247, $this->source); })()), "contrepartieEtatFormate", [], "any", false, false, false, 247), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        ";
        // line 252
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 252, $this->source); })()), "description", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 253
            yield "        <div class=\"detail-section\">
            <h4>Description</h4>
            <p>";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 255, $this->source); })()), "description", [], "any", false, false, false, 255), "html", null, true);
            yield "</p>
        </div>
        ";
        }
        // line 258
        yield "
        <div class=\"detail-section\">
            <h4>Actions</h4>
            <div class=\"action-buttons\">
                ";
        // line 262
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 262, $this->source); })()), "isModifiable", [], "method", false, false, false, 262)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 263
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 263, $this->source); })()), "id", [], "any", false, false, false, 263)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    <i data-lucide=\"edit\"></i> Modifier
                </a>
                ";
        }
        // line 267
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "convention/show.html.twig";
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
        return array (  408 => 267,  400 => 263,  398 => 262,  392 => 258,  386 => 255,  382 => 253,  380 => 252,  372 => 247,  365 => 243,  358 => 239,  351 => 235,  338 => 227,  333 => 225,  329 => 224,  318 => 216,  314 => 214,  304 => 213,  88 => 4,  78 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Convention {{ convention.code }} - SIGEP Tchad{% endblock %}
{% block stylesheets %}
<style>
/* ===============================
   Variables couleurs et typographie
   =============================== */
:root {
    --primary-color: #004d99;
    --secondary-color: #f0f4f8;
    --accent-color: #daa520;
    --text-color: #333;
    --text-light: #666;
    --bg-card: #fff;
    --border-radius: 12px;
    --transition-speed: 0.3s;
    --badge-success: #28a745;
    --badge-warning: #ffc107;
    --badge-danger: #dc3545;
    --badge-info: #17a2b8;
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* ===============================
   Global Styles
   =============================== */
body {
    font-family: var(--font-family);
    color: var(--text-color);
    background-color: var(--secondary-color);
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
    color: var(--primary-color);
    transition: color var(--transition-speed);
}

a:hover {
    color: darken(var(--primary-color), 10%);
}

/* ===============================
   Content Area
   =============================== */
.content-area {
    max-width: 900px;
    margin: 2rem auto;
    padding: 1rem;
}

/* ===============================
   Page Header
   =============================== */
.page-header {
    margin-bottom: 1.5rem;
}

.back-link {
    display: inline-flex;
    align-items: center;
    font-weight: 500;
    color: var(--primary-color);
}

.back-link i {
    margin-right: 0.5rem;
    font-size: 1.2rem;
}

/* ===============================
   Detail Card
   =============================== */
.detail-card {
    background-color: var(--bg-card);
    border-radius: var(--border-radius);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    padding: 1.5rem;
    transition: transform var(--transition-speed), box-shadow var(--transition-speed);
}

.detail-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}

/* ===============================
   Detail Header
   =============================== */
.detail-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.detail-header h3 {
    margin: 0;
    font-size: 1.5rem;
}

.detail-header p {
    margin: 0;
    color: var(--text-light);
}

/* ===============================
   Badges
   =============================== */
.badge {
    padding: 0.3rem 0.8rem;
    border-radius: 8px;
    color: #fff;
    font-size: 0.85rem;
    font-weight: 500;
    text-transform: uppercase;
}

.badge-success { background-color: var(--badge-success); }
.badge-warning { background-color: var(--badge-warning); }
.badge-danger { background-color: var(--badge-danger); }
.badge-info { background-color: var(--badge-info); }

/* ===============================
   Detail Section
   =============================== */
.detail-section {
    margin-top: 1.5rem;
}

.detail-section h4 {
    margin-bottom: 0.75rem;
    font-size: 1.2rem;
    color: var(--primary-color);
}

/* ===============================
   Detail Grid
   =============================== */
.detail-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem 2rem;
}

.detail-item {
    display: flex;
    flex-direction: column;
}

.detail-label {
    font-size: 0.85rem;
    color: var(--text-light);
}

.detail-value {
    font-size: 1rem;
    font-weight: 500;
    margin-top: 0.25rem;
}

/* ===============================
   Action Buttons
   =============================== */
.action-buttons {
    margin-top: 1rem;
}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.5rem 1rem;
    border-radius: var(--border-radius);
    font-weight: 500;
    cursor: pointer;
    transition: background-color var(--transition-speed), transform var(--transition-speed);
}

.btn i {
    font-size: 1rem;
}

/* Primary Button */
.btn-primary {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #003366;
    transform: translateY(-2px);
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .detail-grid {
        grid-template-columns: 1fr;
    }

    .detail-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
}

</style>
{% endblock %}
{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"{{ path('app_convention_index') }}\" class=\"back-link\">
            <i data-lucide=\"arrow-left\"></i> Retour aux conventions
        </a>
    </div>

    <div class=\"detail-card\">
        <div class=\"detail-header\">
            <div>
                <h3>{{ convention.code }}</h3>
                <p>{{ convention.intitule }}</p>
            </div>
            <span class=\"badge badge-{{ convention.statutBadgeClass }}\">{{ convention.statutLabel }}</span>
        </div>

        <div class=\"detail-section\">
            <h4>Informations principales</h4>
            <div class=\"detail-grid\">
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Partenaire</span>
                    <span class=\"detail-value\">{{ convention.partenaire }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Type</span>
                    <span class=\"detail-value\">{{ convention.typeLabel }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Montant Global</span>
                    <span class=\"detail-value\"><strong>{{ convention.montantFormate }}</strong></span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Contrepartie État</span>
                    <span class=\"detail-value\">{{ convention.contrepartieEtatFormate }}</span>
                </div>
            </div>
        </div>

        {% if convention.description %}
        <div class=\"detail-section\">
            <h4>Description</h4>
            <p>{{ convention.description }}</p>
        </div>
        {% endif %}

        <div class=\"detail-section\">
            <h4>Actions</h4>
            <div class=\"action-buttons\">
                {% if convention.isModifiable() %}
                <a href=\"{{ path('app_convention_edit', {'id': convention.id}) }}\" class=\"btn btn-primary\">
                    <i data-lucide=\"edit\"></i> Modifier
                </a>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "convention/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\convention\\show.html.twig");
    }
}
