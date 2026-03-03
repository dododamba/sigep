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

/* layouts/_script_top.html.twig */
class __TwigTemplate_29d7ded42f1b1299ca5283e83e443f2c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_script_top.html.twig"));

        // line 1
        yield "<script>
\tvar defaultThemeMode = \"light\";
var themeMode;
if (document.documentElement) {
if (document.documentElement.hasAttribute(\"data-bs-theme-mode\")) {
themeMode = document.documentElement.getAttribute(\"data-bs-theme-mode\");
} else {
if (localStorage.getItem(\"data-bs-theme\") !== null) {
themeMode = localStorage.getItem(\"data-bs-theme\");
} else {
themeMode = defaultThemeMode;
}
}
if (themeMode === \"system\") {
themeMode = window.matchMedia(\"(prefers-color-scheme: dark)\").matches ? \"dark\" : \"light\";
}
document.documentElement.setAttribute(\"data-bs-theme\", themeMode);
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/_script_top.html.twig";
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
        return new Source("<script>
\tvar defaultThemeMode = \"light\";
var themeMode;
if (document.documentElement) {
if (document.documentElement.hasAttribute(\"data-bs-theme-mode\")) {
themeMode = document.documentElement.getAttribute(\"data-bs-theme-mode\");
} else {
if (localStorage.getItem(\"data-bs-theme\") !== null) {
themeMode = localStorage.getItem(\"data-bs-theme\");
} else {
themeMode = defaultThemeMode;
}
}
if (themeMode === \"system\") {
themeMode = window.matchMedia(\"(prefers-color-scheme: dark)\").matches ? \"dark\" : \"light\";
}
document.documentElement.setAttribute(\"data-bs-theme\", themeMode);
}
</script>
", "layouts/_script_top.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\layouts\\_script_top.html.twig");
    }
}
