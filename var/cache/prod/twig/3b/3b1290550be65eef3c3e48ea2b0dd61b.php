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

/* @LiveComponent/form_theme.html.twig */
class __TwigTemplate_2026ea851a0243abd61a7eeb8f8e71f7 extends Template
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
            'live_collection_widget' => [$this, 'block_live_collection_widget'],
            'live_collection_entry_row' => [$this, 'block_live_collection_entry_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('live_collection_widget', $context, $blocks);
        // line 8
        yield from $this->unwrap()->yieldBlock('live_collection_entry_row', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_live_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        // line 3
        if ((((((array_key_exists("skip_add_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["skip_add_button"] ?? null), false)) : (false)) === false) && array_key_exists("button_add", $context)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["button_add"] ?? null), "rendered", [], "any", false, false, false, 3))) {
            // line 4
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["button_add"] ?? null), 'row');
        }
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_live_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        // line 10
        if ((array_key_exists("button_delete", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["button_delete"] ?? null), "rendered", [], "any", false, false, false, 10))) {
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["button_delete"] ?? null), 'row');
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LiveComponent/form_theme.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  79 => 11,  77 => 10,  75 => 9,  68 => 8,  62 => 4,  60 => 3,  58 => 2,  51 => 1,  46 => 8,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@LiveComponent/form_theme.html.twig", "/home/doda5678/app.dominiquedamba.com/vendor/symfony/ux-live-component/templates/form_theme.html.twig");
    }
}
