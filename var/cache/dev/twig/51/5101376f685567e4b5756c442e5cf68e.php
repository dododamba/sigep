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
        yield "<aside class=\"sidebar\" :class=\"{ 'open': sidebarOpen }\">
    <div class=\"sidebar-header\">
        <div class=\"sidebar-logo\">
            <img src=\"";
        // line 4
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

    ";
        // line 24
        $context["currentRoute"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "attributes", [], "any", false, false, false, 24), "get", ["_route"], "method", false, false, false, 24);
        // line 25
        yield "
    <!-- Navigation -->
    <nav class=\"sidebar-nav\">

        <!-- Navigation générale -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Navigation</div>

            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\"
               class=\"nav-item ";
        // line 34
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 34, $this->source); })()) == "app_projects")) ? ("active") : (""));
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
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })()) == "app_partners")) ? ("active") : (""));
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
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 46, $this->source); })()) == "app_institutions")) ? ("active") : (""));
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
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 57, $this->source); })()) == "app_projects")) ? ("active") : (""));
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
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 63, $this->source); })()) == "app_financements")) ? ("active") : (""));
        yield "\">
                <i class=\"ri-bank-line\"></i>
                <span>Financements</span>
            </a>

            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_finances");
        yield "\"
               class=\"nav-item ";
        // line 69
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 69, $this->source); })()) == "app_finances")) ? ("active") : (""));
        yield "\">
                <i class=\"ri-wallet-3-line\"></i>
                <span>Finances</span>
            </a>

            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conventions");
        yield "\"
               class=\"nav-item ";
        // line 75
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 75, $this->source); })()) == "app_conventions")) ? ("active") : (""));
        yield "\">
                <i class=\"ri-file-list-3-line\"></i>
                <span>Conventions</span>
            </a>
        </div>

        <!-- Compte -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Compte</div>

            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
               class=\"nav-item ";
        // line 86
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 86, $this->source); })()) == "app_profile")) ? ("active") : (""));
        yield "\">
                <i class=\"ri-user-settings-line\"></i>
                <span>Mon profil</span>
            </a>

            <a href=\"";
        // line 91
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
        return array (  191 => 91,  183 => 86,  179 => 85,  166 => 75,  162 => 74,  154 => 69,  150 => 68,  142 => 63,  138 => 62,  130 => 57,  126 => 56,  113 => 46,  109 => 45,  101 => 40,  97 => 39,  89 => 34,  85 => 33,  75 => 25,  73 => 24,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"sidebar\" :class=\"{ 'open': sidebarOpen }\">
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

    {% set currentRoute = app.request.attributes.get('_route') %}

    <!-- Navigation -->
    <nav class=\"sidebar-nav\">

        <!-- Navigation générale -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Navigation</div>

            <a href=\"{{ path('app_projects') }}\"
               class=\"nav-item {{ currentRoute == 'app_projects' ? 'active' }}\">
                <i class=\"ri-dashboard-line\"></i>
                <span>Tableau de bord</span>
            </a>

            <a href=\"{{ path('app_partners') }}\"
               class=\"nav-item {{ currentRoute == 'app_partners' ? 'active' }}\">
                <i class=\"ri-team-line\"></i>
                <span>Partenaires</span>
            </a>

            <a href=\"{{ path('app_institutions') }}\"
               class=\"nav-item {{ currentRoute == 'app_institutions' ? 'active' }}\">
                <i class=\"ri-government-line\"></i>
                <span>Institutions</span>
            </a>
        </div>

        <!-- Projets & Finances -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Projets & Finances</div>

            <a href=\"{{ path('app_projects') }}\"
               class=\"nav-item {{ currentRoute == 'app_projects' ? 'active' }}\">
                <i class=\"ri-briefcase-line\"></i>
                <span>Projets</span>
            </a>

            <a href=\"{{ path('app_financements') }}\"
               class=\"nav-item {{ currentRoute == 'app_financements' ? 'active' }}\">
                <i class=\"ri-bank-line\"></i>
                <span>Financements</span>
            </a>

            <a href=\"{{ path('app_finances') }}\"
               class=\"nav-item {{ currentRoute == 'app_finances' ? 'active' }}\">
                <i class=\"ri-wallet-3-line\"></i>
                <span>Finances</span>
            </a>

            <a href=\"{{ path('app_conventions') }}\"
               class=\"nav-item {{ currentRoute == 'app_conventions' ? 'active' }}\">
                <i class=\"ri-file-list-3-line\"></i>
                <span>Conventions</span>
            </a>
        </div>

        <!-- Compte -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Compte</div>

            <a href=\"{{ path('app_profile') }}\"
               class=\"nav-item {{ currentRoute == 'app_profile' ? 'active' }}\">
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
