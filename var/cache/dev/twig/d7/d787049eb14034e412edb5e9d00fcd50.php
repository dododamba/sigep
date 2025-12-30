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
class __TwigTemplate_7671c8f95b132bde099a25f308283168 extends Template
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

        <!-- Avatar -->
        <div class=\"user-avatar\">
            ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "firstname", [], "any", false, false, false, 20)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "lastname", [], "any", false, false, false, 20)), "html", null, true);
        yield "
        </div>

        <!-- Détails utilisateur -->
        <div class=\"user-details\">
            <h4>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "firstname", [], "any", false, false, false, 25), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "lastname", [], "any", false, false, false, 25), "html", null, true);
        yield "</h4>

            ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 27), "institution", [], "any", true, true, false, 27) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "institution", [], "any", false, false, false, 27))) {
            // line 28
            yield "                <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "institution", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
            ";
        } else {
            // line 30
            yield "                <p>Institution non définie</p>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 33), "roles", [], "any", true, true, false, 33) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "roles", [], "any", false, false, false, 33)) > 0))) {
            // line 34
            yield "                <span class=\"user-role\">
                    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35), 0, [], "array", false, false, false, 35), ["ROLE_ADMIN" => "Administrateur", "ROLE_MANAGER" => "Chef de Projet", "ROLE_USER" => "Utilisateur"]), "html", null, true);
            // line 39
            yield "
                </span>
            ";
        } else {
            // line 42
            yield "                <span class=\"user-role\">Rôle non défini</span>
            ";
        }
        // line 44
        yield "        </div>

    </div>
</div>


    <!-- Navigation -->
    <nav class=\"sidebar-nav\">

        <!-- Navigation générale -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Navigation</div>

            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
               class=\"nav-item ";
        // line 58
        yield (((is_string($_v0 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 58, $this->source); })())) && is_string($_v1 = "app_dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-dashboard-3-line\"></i>
                <span>Tableau de bord</span>
            </a>

             

            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\"
               class=\"nav-item ";
        // line 66
        yield (((is_string($_v2 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 66, $this->source); })())) && is_string($_v3 = "app_partners") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-shake-hands-line\"></i>
                <span>Partenaires</span>
            </a>

            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\"
               class=\"nav-item ";
        // line 72
        yield (((is_string($_v4 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 72, $this->source); })())) && is_string($_v5 = "app_institutions") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-building-4-line\"></i>
                <span>Institutions</span>
            </a>
        </div>

        <!-- Projets & Finances -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Projets & Finances</div>

            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\"
               class=\"nav-item ";
        // line 83
        yield (((is_string($_v6 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 83, $this->source); })())) && is_string($_v7 = "app_projects") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-briefcase-4-line\"></i>
                <span>Projets</span>
            </a>

            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\"
               class=\"nav-item ";
        // line 89
        yield (((is_string($_v8 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 89, $this->source); })())) && is_string($_v9 = "app_financements") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-funds-line\"></i>
                <span>Financements</span>
            </a>

            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index");
        yield "\"
               class=\"nav-item ";
        // line 95
        yield (((is_string($_v10 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 95, $this->source); })())) && is_string($_v11 = "app_decaissement_index") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-exchange-dollar-line\"></i>
                <span>Décaissements</span>
            </a>

            <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_index");
        yield "\"
               class=\"nav-item ";
        // line 101
        yield (((is_string($_v12 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 101, $this->source); })())) && is_string($_v13 = "app_convention") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-file-text-line\"></i>
                <span>Conventions</span>
            </a>

            <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_index");
        yield "\"
               class=\"nav-item ";
        // line 107
        yield (((is_string($_v14 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 107, $this->source); })())) && is_string($_v15 = "app_audit") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-search-eye-line\"></i>
                <span>Audits</span>
            </a>
        </div>

        <!-- Gestion des utilisateurs -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Gestion des utilisateurs</div>

            <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
               class=\"nav-item ";
        // line 118
        yield ((((is_string($_v16 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 118, $this->source); })())) && is_string($_v17 = "app_user") && str_starts_with($_v16, $_v17)) || (is_string($_v18 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 118, $this->source); })())) && is_string($_v19 = "app_user") && str_starts_with($_v18, $_v19)))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-group-line\"></i>
                <span>Utilisateurs</span>
            </a>

            <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
        yield "\"
               class=\"nav-item ";
        // line 124
        yield (((is_string($_v20 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 124, $this->source); })())) && is_string($_v21 = "app_roles") && str_starts_with($_v20, $_v21))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-shield-keyhole-line\"></i>
                <span>Rôles & permissions</span>
            </a>

            <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index");
        yield "\"
               class=\"nav-item ";
        // line 130
        yield (((is_string($_v22 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 130, $this->source); })())) && is_string($_v23 = "app_activity_index") && str_starts_with($_v22, $_v23))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-time-line\"></i>
                <span>Historiques de connexion</span>
            </a>
        </div>

        <!-- Compte -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Compte</div>

            <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
               class=\"nav-item ";
        // line 141
        yield (((is_string($_v24 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 141, $this->source); })())) && is_string($_v25 = "app_profile") && str_starts_with($_v24, $_v25))) ? ("active") : (""));
        yield "\">
                <i class=\"ri-user-settings-line\"></i>
                <span>Mon profil</span>
            </a>

            <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-item\">
                <i class=\"ri-logout-circle-r-line\"></i>
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
        return array (  293 => 146,  285 => 141,  281 => 140,  268 => 130,  264 => 129,  256 => 124,  252 => 123,  244 => 118,  240 => 117,  227 => 107,  223 => 106,  215 => 101,  211 => 100,  203 => 95,  199 => 94,  191 => 89,  187 => 88,  179 => 83,  175 => 82,  162 => 72,  158 => 71,  150 => 66,  146 => 65,  136 => 58,  132 => 57,  117 => 44,  113 => 42,  108 => 39,  106 => 35,  103 => 34,  101 => 33,  98 => 32,  94 => 30,  88 => 28,  86 => 27,  79 => 25,  70 => 20,  53 => 6,  47 => 2,  45 => 1,);
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

        <!-- Avatar -->
        <div class=\"user-avatar\">
            {{ app.user.firstname|first }}{{ app.user.lastname|first }}
        </div>

        <!-- Détails utilisateur -->
        <div class=\"user-details\">
            <h4>{{ app.user.firstname }} {{ app.user.lastname }}</h4>

            {% if app.user.institution is defined and app.user.institution %}
                <p>{{ app.user.institution.name }}</p>
            {% else %}
                <p>Institution non définie</p>
            {% endif %}

            {% if app.user.roles is defined and app.user.roles|length > 0 %}
                <span class=\"user-role\">
                    {{ app.user.roles[0]|replace({
                        'ROLE_ADMIN': 'Administrateur',
                        'ROLE_MANAGER': 'Chef de Projet',
                        'ROLE_USER': 'Utilisateur'
                    }) }}
                </span>
            {% else %}
                <span class=\"user-role\">Rôle non défini</span>
            {% endif %}
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
                <i class=\"ri-dashboard-3-line\"></i>
                <span>Tableau de bord</span>
            </a>

             

            <a href=\"{{ path('app_partners') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_partners' ? 'active' }}\">
                <i class=\"ri-shake-hands-line\"></i>
                <span>Partenaires</span>
            </a>

            <a href=\"{{ path('app_institutions') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_institutions' ? 'active' }}\">
                <i class=\"ri-building-4-line\"></i>
                <span>Institutions</span>
            </a>
        </div>

        <!-- Projets & Finances -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Projets & Finances</div>

            <a href=\"{{ path('app_projects') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_projects' ? 'active' }}\">
                <i class=\"ri-briefcase-4-line\"></i>
                <span>Projets</span>
            </a>

            <a href=\"{{ path('app_financements') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_financements' ? 'active' }}\">
                <i class=\"ri-funds-line\"></i>
                <span>Financements</span>
            </a>

            <a href=\"{{ path('app_decaissement_index') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_decaissement_index' ? 'active' }}\">
                <i class=\"ri-exchange-dollar-line\"></i>
                <span>Décaissements</span>
            </a>

            <a href=\"{{ path('app_convention_index') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_convention' ? 'active' }}\">
                <i class=\"ri-file-text-line\"></i>
                <span>Conventions</span>
            </a>

            <a href=\"{{ path('app_audit_index') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_audit' ? 'active' }}\">
                <i class=\"ri-search-eye-line\"></i>
                <span>Audits</span>
            </a>
        </div>

        <!-- Gestion des utilisateurs -->
        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Gestion des utilisateurs</div>

            <a href=\"{{ path('app_user_index') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_user' or currentRoute starts with 'app_user' ? 'active' }}\">
                <i class=\"ri-group-line\"></i>
                <span>Utilisateurs</span>
            </a>

            <a href=\"{{ path('app_roles') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_roles' ? 'active' }}\">
                <i class=\"ri-shield-keyhole-line\"></i>
                <span>Rôles & permissions</span>
            </a>

            <a href=\"{{ path('app_activity_index') }}\"
               class=\"nav-item {{ currentRoute starts with 'app_activity_index' ? 'active' }}\">
                <i class=\"ri-time-line\"></i>
                <span>Historiques de connexion</span>
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
                <i class=\"ri-logout-circle-r-line\"></i>
                <span>Se déconnecter</span>
            </a>
        </div>

    </nav>
</aside>
", "partials/sidebare.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partials\\sidebare.html.twig");
    }
}
