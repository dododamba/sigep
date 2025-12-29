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
class __TwigTemplate_d8b05801c61a1711468892a30c6c079c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        yield "<header class=\"top-header\">
    <div class=\"header-left\">
        <button class=\"menu-toggle\" @click=\"sidebarOpen = !sidebarOpen\">
            <i class=\"ri-menu-line\"></i>
        </button>

        <div class=\"search-box\">
            <i class=\"ri-search-line\" style=\"font-size: 18px; color: var(--text-muted);\"></i>
            <input 
                type=\"text\" 
                placeholder=\"Rechercher un projet, une tâche...\" 
                x-model=\"searchQuery\"
            >
        </div>
    </div>

    <div class=\"header-right\">
        <button class=\"header-btn\">
            <i class=\"ri-notification-3-line\"></i>
            <span class=\"badge\">4</span>
        </button>

        <button class=\"header-btn\">
            <i class=\"ri-mail-line\"></i>
            <span class=\"badge\">3</span>
        </button>

        <button class=\"header-btn theme-toggle\" @click=\"toggleTheme()\">
            <i class=\"ri-sun-line\" x-show=\"theme === 'dark'\"></i>
            <i class=\"ri-moon-line\" x-show=\"theme === 'light'\"></i>
        </button>
    </div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"top-header\">
    <div class=\"header-left\">
        <button class=\"menu-toggle\" @click=\"sidebarOpen = !sidebarOpen\">
            <i class=\"ri-menu-line\"></i>
        </button>

        <div class=\"search-box\">
            <i class=\"ri-search-line\" style=\"font-size: 18px; color: var(--text-muted);\"></i>
            <input 
                type=\"text\" 
                placeholder=\"Rechercher un projet, une tâche...\" 
                x-model=\"searchQuery\"
            >
        </div>
    </div>

    <div class=\"header-right\">
        <button class=\"header-btn\">
            <i class=\"ri-notification-3-line\"></i>
            <span class=\"badge\">4</span>
        </button>

        <button class=\"header-btn\">
            <i class=\"ri-mail-line\"></i>
            <span class=\"badge\">3</span>
        </button>

        <button class=\"header-btn theme-toggle\" @click=\"toggleTheme()\">
            <i class=\"ri-sun-line\" x-show=\"theme === 'dark'\"></i>
            <i class=\"ri-moon-line\" x-show=\"theme === 'light'\"></i>
        </button>
    </div>
</header>
", "partials/header.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partials\\header.html.twig");
    }
}
