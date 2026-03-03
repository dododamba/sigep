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

/* layout.html.twig */
class __TwigTemplate_a0c09106eea4e7d80b56fc32b45a175e extends Template
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
            'head_extra' => [$this, 'block_head_extra'],
            'body_attrs' => [$this, 'block_body_attrs'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>
\t\t\t";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "\t\t</title>

\t\t";
        // line 12
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 15
        yield "
\t\t";
        // line 16
        yield from $this->unwrap()->yieldBlock('head_extra', $context, $blocks);
        // line 17
        yield "\t</head>
\t<body
\t\tid=\"kt_app_body\" class=\"app-default\" ";
        // line 19
        yield from $this->unwrap()->yieldBlock('body_attrs', $context, $blocks);
        yield ">
\t\t";
        // line 21
        yield "\t\t";
        yield from $this->load("layout/header.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "
\t\t<div class=\"d-flex flex-column flex-root app-root\" id=\"kt_app_root\">
\t\t\t";
        // line 24
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 27
        yield "\t\t</div>

\t\t";
        // line 30
        yield "\t\t";
        yield from $this->load("layout/footer.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield "
\t\t";
        // line 33
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 36
        yield "\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        yield "\t\t\t<!-- Example: <link rel=\"stylesheet\" href=\"/assets/css/style.css\"> -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_extra(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_extra"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attrs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attrs"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        yield "\t\t\t\t<!-- Main content goes here (paste the content from dist/index.html inside the app wrapper) -->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        yield "\t\t\t<!-- Example: <script src=\"/assets/js/app.js\"></script> -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout.html.twig";
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
        return array (  212 => 34,  202 => 33,  193 => 25,  183 => 24,  166 => 19,  150 => 16,  141 => 13,  131 => 12,  113 => 7,  103 => 36,  100 => 33,  97 => 31,  94 => 30,  90 => 27,  88 => 24,  84 => 22,  81 => 21,  77 => 19,  73 => 17,  71 => 16,  68 => 15,  65 => 12,  61 => 9,  59 => 7,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>
\t\t\t{% block title %}Dashboard
\t\t\t{% endblock %}
\t\t</title>

\t\t{# Stylesheets: copiez ici les <link> CSS de dist/index.html #}
\t\t{% block stylesheets %}
\t\t\t<!-- Example: <link rel=\"stylesheet\" href=\"/assets/css/style.css\"> -->
\t\t{% endblock %}

\t\t{% block head_extra %}{% endblock %}
\t</head>
\t<body
\t\tid=\"kt_app_body\" class=\"app-default\" {% block body_attrs %} {% endblock %}>
\t\t{# Header partial (navigation, topbar, etc.) #}
\t\t{% include 'layout/header.html.twig' %}

\t\t<div class=\"d-flex flex-column flex-root app-root\" id=\"kt_app_root\">
\t\t\t{% block body %}
\t\t\t\t<!-- Main content goes here (paste the content from dist/index.html inside the app wrapper) -->
\t\t\t{% endblock %}
\t\t</div>

\t\t{# Footer partial #}
\t\t{% include 'layout/footer.html.twig' %}

\t\t{# JavaScript: copiez ici les <script> de dist/index.html #}
\t\t{% block javascripts %}
\t\t\t<!-- Example: <script src=\"/assets/js/app.js\"></script> -->
\t\t{% endblock %}
\t</body>
</html>
", "layout.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\layout.html.twig");
    }
}
