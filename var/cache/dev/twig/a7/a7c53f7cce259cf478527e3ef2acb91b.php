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

/* layouts/_navbar.html.twig */
class __TwigTemplate_812a967b9e0b260cad197b25d7fb90f3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_navbar.html.twig"));

        // line 1
        yield "<div class=\"app-navbar gap-2\">
\t<!--begin::User-->
\t<div class=\"app-navbar-item\" id=\"kt_header_user_menu_toggle\">
\t\t<!--begin::User info-->
\t\t<div class=\"btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-3 pe-1\" data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\" data-kt-menu-placement=\"bottom-end\">
\t\t\t<!--begin::Name-->
\t\t\t<div class=\"d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4\">
\t\t\t\t<span class=\"text-white fs-8 fw-bold lh-1 mb-1\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 8), "fullName", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "fullName", [], "any", false, false, false, 8), "Utilisateur")) : ("Utilisateur")), "html", null, true);
        yield "</span>
\t\t\t\t<span class=\"text-white fs-8 opacity-75 fw-semibold lh-1\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 9), "accessLevelLabel", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "accessLevelLabel", [], "any", false, false, false, 9), "Membre")) : ("Membre")), "html", null, true);
        yield "</span>
\t\t\t</div>
\t\t\t<!--end::Name-->
\t\t\t<!--begin::Symbol-->
\t\t\t<div class=\"symbol symbol-30px symbol-md-40px\">
\t\t\t\t<div class=\"symbol-label fs-3 bg-light-primary text-primary fw-bold\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "fullName", [], "any", false, false, false, 14), 0, 1)), "U"), "html", null, true);
        yield "</div>
\t\t\t</div>
\t\t\t<!--end::Symbol-->
\t\t</div>
\t\t<!--end::User info-->
\t\t
\t\t<!--begin::User account menu-->
\t\t<div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px\" data-kt-menu=\"true\">
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-3\">
\t\t\t\t<div class=\"menu-content d-flex align-items-center px-3\">
\t\t\t\t\t<!--begin::Avatar-->
\t\t\t\t\t<div class=\"symbol symbol-50px me-5\">
\t\t\t\t\t\t<div class=\"symbol-label fs-2 bg-light-primary text-primary fw-bold\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "fullName", [], "any", false, false, false, 27), 0, 1)), "U"), "html", null, true);
        yield "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Avatar-->
\t\t\t\t\t<!--begin::Username-->
\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t<div class=\"fw-bold d-flex align-items-center fs-5\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 32), "fullName", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "fullName", [], "any", false, false, false, 32), "Utilisateur")) : ("Utilisateur")), "html", null, true);
        yield "
\t\t\t\t\t\t\t<span class=\"badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2\">Actif</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold text-muted text-hover-primary fs-7\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
        yield "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Username-->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t\t<!--begin::Menu separator-->
\t\t\t<div class=\"separator my-2\"></div>
\t\t\t<!--end::Menu separator-->
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t<a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"menu-link px-5\">Mon Profil</a>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t<a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"menu-link px-5\">Mes Projets</a>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t\t<!--begin::Menu separator-->
\t\t\t<div class=\"separator my-2\"></div>
\t\t\t<!--end::Menu separator-->
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t<a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"menu-link px-5 text-danger\">Se déconnecter</a>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t</div>
\t\t<!--end::User account menu-->
\t</div>
\t<!--end::User -->
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
        return "layouts/_navbar.html.twig";
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
        return array (  129 => 59,  118 => 51,  110 => 46,  96 => 35,  90 => 32,  82 => 27,  66 => 14,  58 => 9,  54 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"app-navbar gap-2\">
\t<!--begin::User-->
\t<div class=\"app-navbar-item\" id=\"kt_header_user_menu_toggle\">
\t\t<!--begin::User info-->
\t\t<div class=\"btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-3 pe-1\" data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\" data-kt-menu-placement=\"bottom-end\">
\t\t\t<!--begin::Name-->
\t\t\t<div class=\"d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4\">
\t\t\t\t<span class=\"text-white fs-8 fw-bold lh-1 mb-1\">{{ app.user.fullName|default('Utilisateur') }}</span>
\t\t\t\t<span class=\"text-white fs-8 opacity-75 fw-semibold lh-1\">{{ app.user.accessLevelLabel|default('Membre') }}</span>
\t\t\t</div>
\t\t\t<!--end::Name-->
\t\t\t<!--begin::Symbol-->
\t\t\t<div class=\"symbol symbol-30px symbol-md-40px\">
\t\t\t\t<div class=\"symbol-label fs-3 bg-light-primary text-primary fw-bold\">{{ app.user.fullName|slice(0, 1)|upper|default('U') }}</div>
\t\t\t</div>
\t\t\t<!--end::Symbol-->
\t\t</div>
\t\t<!--end::User info-->
\t\t
\t\t<!--begin::User account menu-->
\t\t<div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px\" data-kt-menu=\"true\">
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-3\">
\t\t\t\t<div class=\"menu-content d-flex align-items-center px-3\">
\t\t\t\t\t<!--begin::Avatar-->
\t\t\t\t\t<div class=\"symbol symbol-50px me-5\">
\t\t\t\t\t\t<div class=\"symbol-label fs-2 bg-light-primary text-primary fw-bold\">{{ app.user.fullName|slice(0, 1)|upper|default('U') }}</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Avatar-->
\t\t\t\t\t<!--begin::Username-->
\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t<div class=\"fw-bold d-flex align-items-center fs-5\">{{ app.user.fullName|default('Utilisateur') }}
\t\t\t\t\t\t\t<span class=\"badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2\">Actif</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold text-muted text-hover-primary fs-7\">{{ app.user.email }}</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Username-->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t\t<!--begin::Menu separator-->
\t\t\t<div class=\"separator my-2\"></div>
\t\t\t<!--end::Menu separator-->
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t<a href=\"{{ path('app_profile') }}\" class=\"menu-link px-5\">Mon Profil</a>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t<a href=\"{{ path('app_projects') }}\" class=\"menu-link px-5\">Mes Projets</a>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t\t<!--begin::Menu separator-->
\t\t\t<div class=\"separator my-2\"></div>
\t\t\t<!--end::Menu separator-->
\t\t\t<!--begin::Menu item-->
\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"menu-link px-5 text-danger\">Se déconnecter</a>
\t\t\t</div>
\t\t\t<!--end::Menu item-->
\t\t</div>
\t\t<!--end::User account menu-->
\t</div>
\t<!--end::User -->
</div>
", "layouts/_navbar.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\layouts\\_navbar.html.twig");
    }
}
