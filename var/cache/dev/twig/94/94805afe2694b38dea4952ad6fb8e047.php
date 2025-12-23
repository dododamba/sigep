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
class __TwigTemplate_3c4dd6c0aa26e076d3c7bcac580c2f4c extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_index");
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\"></i> Retour aux conventions
        </a>
    </div>

    <div class=\"detail-card\">
        <div class=\"detail-header\">
            <div>
                <h3>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 14, $this->source); })()), "code", [], "any", false, false, false, 14), "html", null, true);
        yield "</h3>
                <p>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 15, $this->source); })()), "intitule", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
            </div>
            <span class=\"badge badge-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 17, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 17), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 17, $this->source); })()), "statutLabel", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
        </div>

        <div class=\"detail-section\">
            <h4>Informations principales</h4>
            <div class=\"detail-grid\">
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Partenaire</span>
                    <span class=\"detail-value\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 25, $this->source); })()), "partenaire", [], "any", false, false, false, 25), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Type</span>
                    <span class=\"detail-value\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 29, $this->source); })()), "typeLabel", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Montant Global</span>
                    <span class=\"detail-value\"><strong>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 33, $this->source); })()), "montantFormate", [], "any", false, false, false, 33), "html", null, true);
        yield "</strong></span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Contrepartie État</span>
                    <span class=\"detail-value\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 37, $this->source); })()), "contrepartieEtatFormate", [], "any", false, false, false, 37), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        ";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        <div class=\"detail-section\">
            <h4>Description</h4>
            <p>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
        </div>
        ";
        }
        // line 48
        yield "
        <div class=\"detail-section\">
            <h4>Actions</h4>
            <div class=\"action-buttons\">
                ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 52, $this->source); })()), "isModifiable", [], "method", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["convention"]) || array_key_exists("convention", $context) ? $context["convention"] : (function () { throw new RuntimeError('Variable "convention" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    <i data-lucide=\"edit\"></i> Modifier
                </a>
                ";
        }
        // line 57
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
        return array (  181 => 57,  173 => 53,  171 => 52,  165 => 48,  159 => 45,  155 => 43,  153 => 42,  145 => 37,  138 => 33,  131 => 29,  124 => 25,  111 => 17,  106 => 15,  102 => 14,  91 => 6,  87 => 4,  77 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Convention {{ convention.code }} - SIGEP Tchad{% endblock %}
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
