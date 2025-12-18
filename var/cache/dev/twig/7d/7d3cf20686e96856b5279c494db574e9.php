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
class __TwigTemplate_c184251777ac59886593ec8ae60da32e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'modal' => [$this, 'block_modal'],
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
<html lang=\"fr\">
<head>
   <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SIGEP Tchad - Système Intégré de Gestion des Projets Publics</title>
    
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">

    
    <!-- Lucide Icons -->
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    
    <!-- Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    
    <!-- Alpine.js -->
    <script defer src=\"https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js\"></script>
    
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
    <style>
    .nav-item.active {
    background: var(--gold-gradient);
    color: var(--tchad-blue);
    box-shadow: var(--shadow-md);
}
    </style>
    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 33
        yield "</head>
<body  x-data=\"dashboard()\">
    <!-- Sidebar -->
    ";
        // line 36
        yield from $this->load("partials/sidebare.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "  
    <main class=\"main-content\">
        
        ";
        // line 40
        yield from $this->load("partials/header.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "
    <div class=\"content-area\">  
\t\t    ";
        // line 43
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 44
        yield "    </div>
     
      ";
        // line 46
        yield from $this->load("partials/footer.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "       
    </main>

    ";
        // line 50
        yield from $this->unwrap()->yieldBlock('modal', $context, $blocks);
        // line 51
        yield "\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 54
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 43
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

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        yield "\t\t
\t";
        
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
        return array (  192 => 52,  182 => 51,  166 => 50,  150 => 43,  133 => 32,  123 => 54,  120 => 51,  118 => 50,  113 => 47,  111 => 46,  107 => 44,  105 => 43,  101 => 41,  99 => 40,  94 => 37,  92 => 36,  87 => 33,  85 => 32,  74 => 24,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
   <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SIGEP Tchad - Système Intégré de Gestion des Projets Publics</title>
    
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">

    
    <!-- Lucide Icons -->
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    
    <!-- Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    
    <!-- Alpine.js -->
    <script defer src=\"https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js\"></script>
    
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    <style>
    .nav-item.active {
    background: var(--gold-gradient);
    color: var(--tchad-blue);
    box-shadow: var(--shadow-md);
}
    </style>
    {% block stylesheets %} {% endblock %}
</head>
<body  x-data=\"dashboard()\">
    <!-- Sidebar -->
    {% include \"partials/sidebare.html.twig\" %}
  
    <main class=\"main-content\">
        
        {% include \"partials/header.html.twig\" %}

    <div class=\"content-area\">  
\t\t    {% block body %}{% endblock %}
    </div>
     
      {% include \"partials/footer.html.twig\" %}
       
    </main>

    {% block modal %}{% endblock %}
\t{% block javascripts %}
\t\t
\t{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\base.html.twig");
    }
}
