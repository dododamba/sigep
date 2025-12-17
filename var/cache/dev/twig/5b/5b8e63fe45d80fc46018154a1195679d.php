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

/* @DataTables/Filter/text.js.twig */
class __TwigTemplate_e79aaccbac73acad6c8ee717336379ca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DataTables/Filter/text.js.twig"));

        // line 1
        yield "\$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), "js", null, true);
        yield "').on('stateLoaded.dt', function (e, settings, data) {
    \$('#";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "js", null, true);
        yield "-column-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()), "index", [], "any", false, false, false, 2), "js", null, true);
        yield "').val(data.columns[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()), "index", [], "any", false, false, false, 2), "js", null, true);
        yield "].search.search);
});
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@DataTables/Filter/text.js.twig";
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
        return array (  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("\$('#{{ datatable.name }}').on('stateLoaded.dt', function (e, settings, data) {
    \$('#{{ datatable.name }}-column-{{ column.index }}').val(data.columns[{{ column.index }}].search.search);
});
", "@DataTables/Filter/text.js.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\vendor\\omines\\datatables-bundle\\src\\Resources\\views\\Filter\\text.js.twig");
    }
}
