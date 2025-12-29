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

/* @DataTables/Filter/select.html.twig */
class __TwigTemplate_5c5d496fe390724b2af20eb00c7779aa extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DataTables/Filter/select.html.twig"));

        // line 1
        yield "<label>
    <select class=\"form-control\" id=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        yield "-column-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()), "index", [], "any", false, false, false, 2), "html", null, true);
        yield "\" data-search-column-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()), "index", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
        ";
        // line 3
        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 3, $this->source); })()), "filter", [], "any", false, false, false, 3), "placeholder", [], "any", false, false, false, 3) === null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "            <option class=\"placeholder\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "filter", [], "any", false, false, false, 4), "placeholder", [], "any", false, false, false, 4)), "html", null, true);
            yield "</option>
        ";
        }
        // line 6
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6), "choices", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 7
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "    </select>
</label>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@DataTables/Filter/select.html.twig";
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
        return array (  80 => 9,  69 => 7,  64 => 6,  58 => 4,  56 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<label>
    <select class=\"form-control\" id=\"{{ datatable.name }}-column-{{ column.index }}\" data-search-column-index=\"{{ column.index }}\">
        {% if column.filter.placeholder is not same as(null) %}
            <option class=\"placeholder\">{{ column.filter.placeholder|trans }}</option>
        {% endif %}
        {% for key, choice in column.filter.choices %}
            <option value=\"{{ key }}\">{{ choice }}</option>
        {% endfor %}
    </select>
</label>
", "@DataTables/Filter/select.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\vendor\\omines\\datatables-bundle\\src\\Resources\\views\\Filter\\select.html.twig");
    }
}
