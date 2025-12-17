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

/* base.html.twig */
class __TwigTemplate_9b193804f7dd74ae8cda9ee758924dd1 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'modal' => [$this, 'block_modal'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title> ";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " | SIGMA</title>
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
  
\t";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "  <style>
  .toggle-btn {
    color:#d10d0d;
    font-size: 24px;
    padding: 5px;
    border-radius: 5px;
    transition: background-color 0.2s;
}
  </style>
</head>
<body>
    <!-- Sidebar -->
    ";
        // line 22
        yield from $this->loadTemplate("partials/sidebare.html.twig", "base.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "    <!-- Header -->
    ";
        // line 24
        yield from $this->loadTemplate("partials/header.html.twig", "base.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "    <!-- Main Content -->
    <main class=\"main-content\">
        
    
\t\t";
        // line 29
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 30
        yield "       
    </main>

    ";
        // line 33
        yield from $this->unwrap()->yieldBlock('modal', $context, $blocks);
        // line 34
        yield "\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 37
        yield "</body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "\t\t
\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  155 => 35,  148 => 34,  138 => 33,  128 => 29,  118 => 9,  108 => 6,  101 => 37,  98 => 34,  96 => 33,  91 => 30,  89 => 29,  83 => 25,  81 => 24,  78 => 23,  76 => 22,  62 => 10,  60 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/base.html.twig");
    }
}
