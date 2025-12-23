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

/* partials/footer.html.twig */
class __TwigTemplate_dd08e6128157379bb2266946e8b0720f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        yield "<footer class=\"footer\">
            <div class=\"footer-left\">
                <svg class=\"footer-logo\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M50 5 L90 20 L90 55 C90 75 70 90 50 95 C30 90 10 75 10 55 L10 20 Z\" fill=\"#fecb00\" stroke=\"#002664\" stroke-width=\"2\"/>
                    <rect x=\"15\" y=\"25\" width=\"23\" height=\"45\" fill=\"#002664\"/>
                    <rect x=\"38\" y=\"25\" width=\"24\" height=\"45\" fill=\"#fecb00\"/>
                    <rect x=\"62\" y=\"25\" width=\"23\" height=\"45\" fill=\"#c60c30\"/>
                </svg>
                <span class=\"footer-text\">© 2025 SIGEP Tchad - République du Tchad</span>
            </div>
            <div class=\"footer-links\">
                <a href=\"#\">Aide</a>
                <a href=\"#\">Documentation</a>
                <a href=\"#\">Conditions d'utilisation</a>
            </div>
        </footer>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"footer\">
            <div class=\"footer-left\">
                <svg class=\"footer-logo\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M50 5 L90 20 L90 55 C90 75 70 90 50 95 C30 90 10 75 10 55 L10 20 Z\" fill=\"#fecb00\" stroke=\"#002664\" stroke-width=\"2\"/>
                    <rect x=\"15\" y=\"25\" width=\"23\" height=\"45\" fill=\"#002664\"/>
                    <rect x=\"38\" y=\"25\" width=\"24\" height=\"45\" fill=\"#fecb00\"/>
                    <rect x=\"62\" y=\"25\" width=\"23\" height=\"45\" fill=\"#c60c30\"/>
                </svg>
                <span class=\"footer-text\">© 2025 SIGEP Tchad - République du Tchad</span>
            </div>
            <div class=\"footer-links\">
                <a href=\"#\">Aide</a>
                <a href=\"#\">Documentation</a>
                <a href=\"#\">Conditions d'utilisation</a>
            </div>
        </footer>", "partials/footer.html.twig", "/home/xdevcorp/Projects/sigep/templates/partials/footer.html.twig");
    }
}
