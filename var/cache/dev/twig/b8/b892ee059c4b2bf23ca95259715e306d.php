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

/* layouts/_header.html.twig */
class __TwigTemplate_e87e30c5e3aeba229533c6417ee554f5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_header.html.twig"));

        // line 1
        yield "<div id=\"kt_app_header\" class=\"app-header\">
\t<div class=\"app-header-primary\" style=\"background-color: #002664; border-bottom: 4px solid #FECB00;\">
\t\t<div
\t\t\tclass=\"app-container container-xxl d-flex align-items-stretch justify-content-between\">

\t\t\t<!-- Logo -->
\t\t\t<div class=\"d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-7\">
\t\t\t\t<button class=\"d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 ms-n3 me-2\" id=\"kt_header_secondary_toggle\">
\t\t\t\t\t<i class=\"ki-duotone ki-abstract-14 fs-1\"></i>
\t\t\t\t</button>

\t\t\t\t<a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"d-flex align-items-center\">
\t\t\t\t\t<img alt=\"Logo SIGEP\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" class=\"h-30px h-lg-40px\"/>
\t\t\t\t\t<span class=\"text-white fw-bold fs-4 ms-3 d-none d-sm-inline\">Système Intégrè de Gestion des Projets de l'Etat</span>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t";
        // line 18
        yield from $this->load("layouts/_navbar.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "
\t\t</div>
\t</div>
\t<div style=\"height: 4px; background-color: #C60C30;\"></div>
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
        return "layouts/_header.html.twig";
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
        return array (  72 => 19,  70 => 18,  62 => 13,  58 => 12,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"kt_app_header\" class=\"app-header\">
\t<div class=\"app-header-primary\" style=\"background-color: #002664; border-bottom: 4px solid #FECB00;\">
\t\t<div
\t\t\tclass=\"app-container container-xxl d-flex align-items-stretch justify-content-between\">

\t\t\t<!-- Logo -->
\t\t\t<div class=\"d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-7\">
\t\t\t\t<button class=\"d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 ms-n3 me-2\" id=\"kt_header_secondary_toggle\">
\t\t\t\t\t<i class=\"ki-duotone ki-abstract-14 fs-1\"></i>
\t\t\t\t</button>

\t\t\t\t<a href=\"{{ path('app_dashboard') }}\" class=\"d-flex align-items-center\">
\t\t\t\t\t<img alt=\"Logo SIGEP\" src=\"{{ asset('logo.png') }}\" class=\"h-30px h-lg-40px\"/>
\t\t\t\t\t<span class=\"text-white fw-bold fs-4 ms-3 d-none d-sm-inline\">Système Intégrè de Gestion des Projets de l'Etat</span>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t{% include 'layouts/_navbar.html.twig' %}

\t\t</div>
\t</div>
\t<div style=\"height: 4px; background-color: #C60C30;\"></div>
</div>
", "layouts/_header.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\layouts\\_header.html.twig");
    }
}
