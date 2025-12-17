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

/* @LiveComponent/deferred.html.twig */
class __TwigTemplate_e55c9f57d9bef3d4fef08e38e28c6812 extends Template
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
            'loadingContent' => [$this, 'block_loadingContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loadingTag"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["attributes"] ?? null), "html", null, true);
        yield "
    ";
        // line 2
        if (("lazy" == ($context["loading"] ?? null))) {
            // line 3
            yield "        data-action=\"live:appear->live#\$render\" loading=\"lazy\"
    ";
        } else {
            // line 5
            yield "        data-action=\"live:connect->live#\$render\"
    ";
        }
        // line 7
        yield ">
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('loadingContent', $context, $blocks);
        // line 18
        yield "</";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loadingTag"] ?? null), "html", null, true);
        yield ">
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_loadingContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "        ";
        if ((($context["loadingTemplate"] ?? null) != null)) {
            // line 10
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, ($context["loadingTemplate"] ?? null));
            yield "
        ";
        } else {
            // line 12
            yield "            ";
            $macros["_v0"] = $this->loadTemplate(($context["componentTemplate"] ?? null), "@LiveComponent/deferred.html.twig", 12)->unwrap();
            // line 13
            yield "            ";
            if ($macros["_v0"]->hasMacro("macro_placeholder", $context)) {
                // line 14
                yield "                ";
                yield $macros["_v0"]->getTemplateForMacro("macro_placeholder", $context, 14, $this->getSourceContext())->macro_placeholder(...[((array_key_exists("__props", $context)) ? (Twig\Extension\CoreExtension::default(($context["__props"] ?? null))) : (""))]);
                yield "
            ";
            }
            // line 16
            yield "        ";
        }
        // line 17
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LiveComponent/deferred.html.twig";
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
        return array (  104 => 17,  101 => 16,  95 => 14,  92 => 13,  89 => 12,  83 => 10,  80 => 9,  73 => 8,  65 => 18,  63 => 8,  60 => 7,  56 => 5,  52 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@LiveComponent/deferred.html.twig", "/home/doda5678/app.dominiquedamba.com/vendor/symfony/ux-live-component/templates/deferred.html.twig");
    }
}
