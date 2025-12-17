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

/* partials/header.html.twig */
class __TwigTemplate_7a2db99c2f3f51c3f1f1db19fb09c123 extends Template
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
        yield "<header class=\"header\">
        <div class=\"header-left\">
        </div>
        <div class=\"header-right\">
            <div class=\"search-box\">
                <input type=\"text\" id=\"headerSearch\" placeholder=\"Rechercher une personne...\">
                <i class=\"ri-search-line\"></i>
            </div>
            <div class=\"header-actions\">
                <button class=\"icon-btn\">
                    <i class=\"ri-notification-line\"></i>
                    <span class=\"badge\">12</span>
                </button>
                <button class=\"icon-btn\">
                    <i class=\"ri-settings-line\"></i>
                </button>
            </div>
        </div>
    </header>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/header.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/partials/header.html.twig");
    }
}
