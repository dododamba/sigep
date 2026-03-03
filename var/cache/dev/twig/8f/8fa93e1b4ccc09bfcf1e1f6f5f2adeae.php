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

/* layouts/_footer.html.twig */
class __TwigTemplate_4ed4fabc0bea0979bf47305b5e70f013 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_footer.html.twig"));

        // line 1
        yield "<div id=\"kt_app_footer\" class=\"app-footer py-4 d-flex flex-lg-column\">
\t<div class=\"container-fluid d-flex flex-column flex-md-row flex-stack\">
\t\t<div class=\"text-gray-900 order-2 order-md-1\">
\t\t\t<span class=\"text-muted fw-semibold me-1\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "©</span>
\t\t\t<a href=\"#\" class=\"text-gray-800 text-hover-primary\">SIGEP</a>
\t\t</div>
\t</div>
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
        return "layouts/_footer.html.twig";
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
        return array (  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"kt_app_footer\" class=\"app-footer py-4 d-flex flex-lg-column\">
\t<div class=\"container-fluid d-flex flex-column flex-md-row flex-stack\">
\t\t<div class=\"text-gray-900 order-2 order-md-1\">
\t\t\t<span class=\"text-muted fw-semibold me-1\">{{ \"now\"|date(\"Y\") }}©</span>
\t\t\t<a href=\"#\" class=\"text-gray-800 text-hover-primary\">SIGEP</a>
\t\t</div>
\t</div>
</div>
", "layouts/_footer.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\layouts\\_footer.html.twig");
    }
}
