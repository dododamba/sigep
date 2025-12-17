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

/* @DataTables/Filter/text.html.twig */
class __TwigTemplate_57d4da878639058febcf03af85c22f42 extends Template
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
        // line 1
        yield "<label>
    <input class=\"form-control\"
           id=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "-column-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 3), "html", null, true);
        yield "\"
           data-search-column-index=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 4), "html", null, true);
        yield "\"
           placeholder=\"";
        // line 5
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, true, false, 5), "placeholder", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 5), "placeholder", [], "any", false, false, false, 5)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 5), "placeholder", [], "any", false, false, false, 5), "html", null, true)) : (""));
        yield "\"
           value=\"";
        // line 6
        yield (((array_key_exists("searchValue", $context) &&  !(null === $context["searchValue"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["searchValue"], "html", null, true)) : (""));
        yield "\"
    />
</label>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@DataTables/Filter/text.html.twig";
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
        return array (  60 => 6,  56 => 5,  52 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@DataTables/Filter/text.html.twig", "/home/doda5678/app.dominiquedamba.com/vendor/omines/datatables-bundle/src/Resources/views/Filter/text.html.twig");
    }
}
