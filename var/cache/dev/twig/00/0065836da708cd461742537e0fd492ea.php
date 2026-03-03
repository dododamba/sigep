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
class __TwigTemplate_b3a910fe032d5243d4d8c0778f769207 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<base href=\"\"/>
\t\t<title>
\t\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "\t\t</title>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

\t\t<!-- Fonts -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700\"/>

\t\t<!-- Vendor Styles -->
\t\t<link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
\t\t<link
\t\thref=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/custom/datatables/datatables.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>

\t\t<!-- Global Styles -->
\t\t<link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/global/plugins.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/> 
\t\t
\t\t<style>
\t\t\t:root {
\t\t\t\t--kt-primary: #002664;
\t\t\t\t--kt-primary-active: #001a4d;
\t\t\t\t--kt-primary-light: #e6ebf5;
\t\t\t\t--kt-primary-rgb: 0, 38, 100;
\t\t\t}

\t\t\t.btn.btn-primary {
\t\t\t\tbackground-color: var(--kt-primary) !important;
\t\t\t\tborder-color: var(--kt-primary) !important;
\t\t\t}

\t\t\t.btn.btn-primary:hover:not(.btn-active),
\t\t\t.btn.btn-primary:focus:not(.btn-active),
\t\t\t.btn.btn-primary.active,
\t\t\t.btn.btn-primary:active,
\t\t\t.show > .btn.btn-primary.dropdown-toggle {
\t\t\t\tbackground-color: var(--kt-primary-active) !important;
\t\t\t\tborder-color: var(--kt-primary-active) !important;
\t\t\t}

\t\t\t.text-primary {
\t\t\t\tcolor: var(--kt-primary) !important;
\t\t\t}

\t\t\t.bg-primary {
\t\t\t\tbackground-color: var(--kt-primary) !important;
\t\t\t}

\t\t\t.menu-state-primary .menu-item.here > .menu-link, 
\t\t\t.menu-state-primary .menu-item.show > .menu-link,
\t\t\t.menu-state-primary .menu-item .menu-link.active {
\t\t\t\tbackground-color: var(--kt-primary-light) !important;
\t\t\t\tcolor: var(--kt-primary) !important;
\t\t\t}
\t\t</style>

\t\t";
        // line 64
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 65
        yield "\t\t</head>

\t\t<body id=\"kt_app_body\" data-kt-app-header-stacked=\"true\" data-kt-app-header-primary-enabled=\"true\" data-kt-app-header-secondary-enabled=\"true\" class=\"app-default\">
\t\t\t";
        // line 68
        $context["currentRoute"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68);
        // line 69
        yield "
\t\t\t<script>
\t\t\t\tvar defaultThemeMode = \"light\";
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
\t\t\t</script>

\t\t\t<div class=\"d-flex flex-column flex-root app-root\" id=\"kt_app_root\">
\t\t\t\t<div class=\"app-page flex-column flex-column-fluid\" id=\"kt_app_page\">

\t\t\t\t\t";
        // line 93
        yield from $this->load("layouts/_header.html.twig", 93)->unwrap()->yield($context);
        // line 94
        yield "\t\t\t\t\t";
        yield from $this->load("layouts/_header_secondary.html.twig", 94)->unwrap()->yield($context);
        // line 95
        yield "
\t\t\t\t\t<div class=\"app-content flex-column-fluid\"> ";
        // line 96
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 97
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 99
        yield from $this->load("layouts/_footer.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 103
        yield from $this->load("layouts/_scripts.html.twig", 103)->unwrap()->yield($context);
        // line 104
        yield "\t\t\t\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 105
        yield "
\t\t\t</body>
\t\t</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Metronic
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  250 => 104,  234 => 96,  218 => 64,  200 => 6,  189 => 105,  186 => 104,  184 => 103,  179 => 100,  177 => 99,  173 => 97,  171 => 96,  168 => 95,  165 => 94,  163 => 93,  137 => 69,  135 => 68,  130 => 65,  128 => 64,  85 => 24,  81 => 23,  75 => 20,  70 => 18,  58 => 8,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<base href=\"\"/>
\t\t<title>
\t\t\t{% block title %}Metronic
\t\t\t{% endblock %}
\t\t</title>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

\t\t<!-- Fonts -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700\"/>

\t\t<!-- Vendor Styles -->
\t\t<link href=\"{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}\" rel=\"stylesheet\"/>
\t\t<link
\t\thref=\"{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}\" rel=\"stylesheet\"/>

\t\t<!-- Global Styles -->
\t\t<link href=\"{{ asset('assets/plugins/global/plugins.bundle.css') }}\" rel=\"stylesheet\"/>
\t\t<link href=\"{{ asset('assets/css/style.bundle.css') }}\" rel=\"stylesheet\"/> 
\t\t
\t\t<style>
\t\t\t:root {
\t\t\t\t--kt-primary: #002664;
\t\t\t\t--kt-primary-active: #001a4d;
\t\t\t\t--kt-primary-light: #e6ebf5;
\t\t\t\t--kt-primary-rgb: 0, 38, 100;
\t\t\t}

\t\t\t.btn.btn-primary {
\t\t\t\tbackground-color: var(--kt-primary) !important;
\t\t\t\tborder-color: var(--kt-primary) !important;
\t\t\t}

\t\t\t.btn.btn-primary:hover:not(.btn-active),
\t\t\t.btn.btn-primary:focus:not(.btn-active),
\t\t\t.btn.btn-primary.active,
\t\t\t.btn.btn-primary:active,
\t\t\t.show > .btn.btn-primary.dropdown-toggle {
\t\t\t\tbackground-color: var(--kt-primary-active) !important;
\t\t\t\tborder-color: var(--kt-primary-active) !important;
\t\t\t}

\t\t\t.text-primary {
\t\t\t\tcolor: var(--kt-primary) !important;
\t\t\t}

\t\t\t.bg-primary {
\t\t\t\tbackground-color: var(--kt-primary) !important;
\t\t\t}

\t\t\t.menu-state-primary .menu-item.here > .menu-link, 
\t\t\t.menu-state-primary .menu-item.show > .menu-link,
\t\t\t.menu-state-primary .menu-item .menu-link.active {
\t\t\t\tbackground-color: var(--kt-primary-light) !important;
\t\t\t\tcolor: var(--kt-primary) !important;
\t\t\t}
\t\t</style>

\t\t{% block stylesheets %}{% endblock %}
\t\t</head>

\t\t<body id=\"kt_app_body\" data-kt-app-header-stacked=\"true\" data-kt-app-header-primary-enabled=\"true\" data-kt-app-header-secondary-enabled=\"true\" class=\"app-default\">
\t\t\t{% set currentRoute = app.request.attributes.get('_route') %}

\t\t\t<script>
\t\t\t\tvar defaultThemeMode = \"light\";
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
\t\t\t</script>

\t\t\t<div class=\"d-flex flex-column flex-root app-root\" id=\"kt_app_root\">
\t\t\t\t<div class=\"app-page flex-column flex-column-fluid\" id=\"kt_app_page\">

\t\t\t\t\t{% include 'layouts/_header.html.twig' %}
\t\t\t\t\t{% include 'layouts/_header_secondary.html.twig' %}

\t\t\t\t\t<div class=\"app-content flex-column-fluid\"> {% block body %}{% endblock %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{% include 'layouts/_footer.html.twig' %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% include 'layouts/_scripts.html.twig' %}
\t\t\t\t{% block javascripts %}{% endblock %}

\t\t\t</body>
\t\t</html>
", "base.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\base.html.twig");
    }
}
