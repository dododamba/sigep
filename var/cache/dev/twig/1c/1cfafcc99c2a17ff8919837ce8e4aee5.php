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

/* convention/index.html.twig */
class __TwigTemplate_76a0450bb6b572533256cdb12b176904 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "convention/index.html.twig"));

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

        yield "Conventions - SIGEP Tchad";
        
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
        <div class=\"page-title\">
            <h2>Conventions de Financement</h2>
            <p>Gestion des accords de financement</p>
        </div>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_new");
        yield "\" class=\"btn btn-primary\">
            <i data-lucide=\"plus\"></i> Nouvelle convention
        </a>
    </div>

    <div class=\"stats-grid\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 16, $this->source); })()), "par_statut", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["statut"] => $context["data"]) {
            // line 17
            yield "        <div class=\"stat-card\">
            <div class=\"stat-value\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "nombre", [], "any", false, false, false, 18), "html", null, true);
            yield "</div>
            <div class=\"stat-label\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["statut"], ["_" => " "])), "html", null, true);
            yield "</div>
            <div class=\"stat-amount\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 20), 0, ",", " "), "html", null, true);
            yield " FCFA</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statut'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    </div>

    <div class=\"table-card\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Intitulé</th>
                    <th>Partenaire</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conventions"]) || array_key_exists("conventions", $context) ? $context["conventions"] : (function () { throw new RuntimeError('Variable "conventions" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["convention"]) {
            // line 39
            yield "                <tr>
                    <td><strong>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "code", [], "any", false, false, false, 40), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "intitule", [], "any", false, false, false, 41), 0, 50), "html", null, true);
            yield "...</td>
                    <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "partenaire", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                    <td><strong>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "montantFormate", [], "any", false, false, false, 43), "html", null, true);
            yield "</strong></td>
                    <td><span class=\"badge badge-";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutBadgeClass", [], "any", false, false, false, 44), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutLabel", [], "any", false, false, false, 44), "html", null, true);
            yield "</span></td>
                    <td>
                        <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn-sm\">Voir</a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "                <tr><td colspan=\"6\" style=\"text-align: center;\">Aucune convention enregistrée</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['convention'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "            </tbody>
        </table>
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
        return "convention/index.html.twig";
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
        return array (  191 => 52,  184 => 50,  182 => 49,  174 => 46,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  148 => 39,  143 => 38,  126 => 23,  117 => 20,  113 => 19,  109 => 18,  106 => 17,  102 => 16,  93 => 10,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Conventions - SIGEP Tchad{% endblock %}
{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h2>Conventions de Financement</h2>
            <p>Gestion des accords de financement</p>
        </div>
        <a href=\"{{ path('app_convention_new') }}\" class=\"btn btn-primary\">
            <i data-lucide=\"plus\"></i> Nouvelle convention
        </a>
    </div>

    <div class=\"stats-grid\">
        {% for statut, data in statistiques.par_statut %}
        <div class=\"stat-card\">
            <div class=\"stat-value\">{{ data.nombre }}</div>
            <div class=\"stat-label\">{{ statut|replace({'_': ' '})|title }}</div>
            <div class=\"stat-amount\">{{ data.total|number_format(0, ',', ' ') }} FCFA</div>
        </div>
        {% endfor %}
    </div>

    <div class=\"table-card\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Intitulé</th>
                    <th>Partenaire</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for convention in conventions %}
                <tr>
                    <td><strong>{{ convention.code }}</strong></td>
                    <td>{{ convention.intitule|slice(0, 50) }}...</td>
                    <td>{{ convention.partenaire }}</td>
                    <td><strong>{{ convention.montantFormate }}</strong></td>
                    <td><span class=\"badge badge-{{ convention.statutBadgeClass }}\">{{ convention.statutLabel }}</span></td>
                    <td>
                        <a href=\"{{ path('app_convention_show', {'id': convention.id}) }}\" class=\"btn-sm\">Voir</a>
                    </td>
                </tr>
                {% else %}
                <tr><td colspan=\"6\" style=\"text-align: center;\">Aucune convention enregistrée</td></tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "convention/index.html.twig", "/home/xdevcorp/Projects/sigep/templates/convention/index.html.twig");
    }
}
