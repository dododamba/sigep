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

/* partials/sidebare.html.twig */
class __TwigTemplate_dba92bc661fddb01e75c2daa8d8aa6c3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebare.html.twig"));

        // line 1
        $context["currentRoute"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1);
        // line 2
        yield "
<aside class=\"sidebar\" :class=\"{ 'open': sidebarOpen }\">
    <div class=\"sidebar-header\">
        <div class=\"sidebar-logo\">
            <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"SIGEP Tchad Logo\">
        </div>
        <div class=\"sidebar-brand\">
            <h1>SIGEP Tchad</h1>
            <span>Gestion des Projets Publics</span>
        </div>
    </div>

    <!-- User Info -->
    <div class=\"user-info\">
        <div class=\"user-card\">
            <div class=\"user-avatar\">AD</div>
            <div class=\"user-details\">
                <h4>Abdoulaye Damba</h4>
                <p>Direction Générale</p>
                <span class=\"user-role\">Chef de Projet</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class=\"sidebar-nav\">

        <!-- Navigation générale -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Navigation</div>

            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
               class=\"nav-item ";
        // line 34
        yield (((is_string($_v0 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 34, $this->source); })())) && is_string($_v1 = "app_dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-dashboard-line\"></i>
                <span>Tableau de bord</span>
            </a>

            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\"
               class=\"nav-item ";
        // line 40
        yield (((is_string($_v2 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })())) && is_string($_v3 = "app_partners") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-team-line\"></i>
                <span>Partenaires</span>
            </a>

            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\"
               class=\"nav-item ";
        // line 46
        yield (((is_string($_v4 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 46, $this->source); })())) && is_string($_v5 = "app_institutions") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-government-line\"></i>
                <span>Institutions</span>
            </a>
        </div>

        <!-- Projets & Finances -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Projets & Finances</div>

            <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\"
               class=\"nav-item ";
        // line 57
        yield (((is_string($_v6 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 57, $this->source); })())) && is_string($_v7 = "app_projects") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-briefcase-line\"></i>
                <span>Projets</span>
            </a>

            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\"
               class=\"nav-item ";
        // line 63
        yield (((is_string($_v8 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 63, $this->source); })())) && is_string($_v9 = "app_financements") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-bank-line\"></i>
                <span>Financements</span>
            </a>

            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conventions");
        yield "\"
               class=\"nav-item ";
        // line 69
        yield (((is_string($_v10 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 69, $this->source); })())) && is_string($_v11 = "app_conventions") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-file-list-3-line\"></i>
                <span>Conventions</span>
            </a>
        </div>

        <!-- Compte -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Compte</div>

            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
               class=\"nav-item ";
        // line 80
        yield (((is_string($_v12 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 80, $this->source); })())) && is_string($_v13 = "app_profile") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-user-settings-line\"></i>
                <span>Mon profil</span>
            </a>

            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-item\">
                <i class=\"ri-logout-box-r-line\"></i>
                <span>Se déconnecter</span>
            </a>
        </div>

    </nav>
</aside>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebare.html.twig";
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
        return array (  177 => 85,  169 => 80,  165 => 79,  152 => 69,  148 => 68,  140 => 63,  136 => 62,  128 => 57,  124 => 56,  111 => 46,  107 => 45,  99 => 40,  95 => 39,  87 => 34,  83 => 33,  53 => 6,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set currentRoute = app.request.attributes.get('_route') %}

<aside class=\"sidebar\" :class=\"{ 'open': sidebarOpen }\">
    <div class=\"sidebar-header\">
        <div class=\"sidebar-logo\">
            <img src=\"{{ asset('logo.png') }}\" alt=\"SIGEP Tchad Logo\">
        </div>
        <div class=\"sidebar-brand\">
            <h1>SIGEP Tchad</h1>
            <span>Gestion des Projets Publics</span>
        </div>
    </div>

    <!-- User Info -->
    <div class=\"user-info\">
        <div class=\"user-card\">
            <div class=\"user-avatar\">AD</div>
            <div class=\"user-details\">
                <h4>Abdoulaye Damba</h4>
                <p>Direction Générale</p>
                <span class=\"user-role\">Chef de Projet</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class=\"sidebar-nav\">

        <!-- Navigation générale -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Navigation</div>

            <a href=\"{{ path('app_dashboard') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_dashboard' ? 'active' }}\">
                <i class=\"ri-dashboard-line\"></i>
                <span>Tableau de bord</span>
            </a>

            <a href=\"{{ path('app_partners') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_partners' ? 'active' }}\">
                <i class=\"ri-team-line\"></i>
                <span>Partenaires</span>
            </a>

            <a href=\"{{ path('app_institutions') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_institutions' ? 'active' }}\">
                <i class=\"ri-government-line\"></i>
                <span>Institutions</span>
            </a>
        </div>

        <!-- Projets & Finances -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Projets & Finances</div>

            <a href=\"{{ path('app_projects') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_projects' ? 'active' }}\">
                <i class=\"ri-briefcase-line\"></i>
                <span>Projets</span>
            </a>

            <a href=\"{{ path('app_financements') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_financements' ? 'active' }}\">
                <i class=\"ri-bank-line\"></i>
                <span>Financements</span>
            </a>

            <a href=\"{{ path('app_conventions') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_conventions' ? 'active' }}\">
                <i class=\"ri-file-list-3-line\"></i>
                <span>Conventions</span>
            </a>
        </div>

        <!-- Compte -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Compte</div>

            <a href=\"{{ path('app_profile') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_profile' ? 'active' }}\">
                <i class=\"ri-user-settings-line\"></i>
                <span>Mon profil</span>
            </a>

            <a href=\"{{ path('app_logout') }}\" class=\"nav-item\">
                <i class=\"ri-logout-box-r-line\"></i>
                <span>Se déconnecter</span>
            </a>
        </div>

    </nav>
</aside>
", "partials/sidebare.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partials\\sidebare.html.twig");
    }
}
