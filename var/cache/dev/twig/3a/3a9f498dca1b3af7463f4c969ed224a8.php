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

/* layouts/_header_secondary.html.twig */
class __TwigTemplate_fd4723145c1d216c4ece100979c20061 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_header_secondary.html.twig"));

        // line 1
        yield "<div class=\"app-header-secondary app-header-mobile-drawer\" data-kt-drawer=\"true\" data-kt-drawer-name=\"app-header-menu\" data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"250px\" data-kt-drawer-direction=\"start\" data-kt-drawer-toggle=\"#kt_header_secondary_toggle\" data-kt-sticky=\"true\" data-kt-sticky-name=\"app-header-secondary-sticky\" data-kt-sticky-offset=\"{default: 'false', lg: '300px'}\" data-kt-swapper=\"true\" data-kt-swapper-mode=\"append\" data-kt-swapper-parent=\"{default: '#kt_app_body', lg: '#kt_app_header'}\">
\t<!--begin::Header secondary container-->
\t<div class=\"app-container container-xxl app-container-fit-mobile d-flex align-items-stretch\">
\t\t<!--begin::Menu wrapper-->
\t\t<div class=\"header-menu d-flex align-items-stretch w-100\">
\t\t\t<!--begin::Menu-->
\t\t\t<div class=\"menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-400 menu-bullet-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch\" id=\"#kt_header_menu\" data-kt-menu=\"true\">
\t\t\t\t
\t\t\t\t<!-- Tableau de bord -->
\t\t\t\t<div class=\"menu-item me-0 me-lg-2\">
\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 11
        yield (((is_string($_v0 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 11, $this->source); })())) && is_string($_v1 = "app_dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Tableau de bord</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Vue d'ensemble</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Navigation -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 ";
        // line 21
        yield ((((is_string($_v2 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 21, $this->source); })())) && is_string($_v3 = "app_partners") && str_starts_with($_v2, $_v3)) || (is_string($_v4 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 21, $this->source); })())) && is_string($_v5 = "app_institutions") && str_starts_with($_v4, $_v5)))) ? ("active") : (""));
        yield "\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Navigation</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Partenaires & Institutions</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 30
        yield (((is_string($_v6 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 30, $this->source); })())) && is_string($_v7 = "app_partners") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-people fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span><span class=\"path5\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Partenaires</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 40
        yield (((is_string($_v8 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })())) && is_string($_v9 = "app_institutions") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-bank fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Institutions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Projets & Finances -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 ";
        // line 54
        yield (((((((is_string($_v10 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 54, $this->source); })())) && is_string($_v11 = "app_projects") && str_starts_with($_v10, $_v11)) || (is_string($_v12 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 54, $this->source); })())) && is_string($_v13 = "app_financements") && str_starts_with($_v12, $_v13))) || (is_string($_v14 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 54, $this->source); })())) && is_string($_v15 = "app_decaissement") && str_starts_with($_v14, $_v15))) || (is_string($_v16 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 54, $this->source); })())) && is_string($_v17 = "app_convention") && str_starts_with($_v16, $_v17))) || (is_string($_v18 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 54, $this->source); })())) && is_string($_v19 = "app_audit") && str_starts_with($_v18, $_v19)))) ? ("active") : (""));
        yield "\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Projets & Finances</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Suivi & Exécution</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 63
        yield (((is_string($_v20 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 63, $this->source); })())) && is_string($_v21 = "app_projects") && str_starts_with($_v20, $_v21))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-briefcase fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Projets</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 73
        yield (((is_string($_v22 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 73, $this->source); })())) && is_string($_v23 = "app_financements") && str_starts_with($_v22, $_v23))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-wallet fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Financements</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 83
        yield (((is_string($_v24 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 83, $this->source); })())) && is_string($_v25 = "app_decaissement") && str_starts_with($_v24, $_v25))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-bill fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span><span class=\"path5\"></span><span class=\"path6\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Décaissements</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 93
        yield (((is_string($_v26 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 93, $this->source); })())) && is_string($_v27 = "app_convention") && str_starts_with($_v26, $_v27))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_index");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-document fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Conventions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 103
        yield (((is_string($_v28 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 103, $this->source); })())) && is_string($_v29 = "app_audit") && str_starts_with($_v28, $_v29))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_index");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-search-list fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Audits</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Gestion des utilisateurs -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 ";
        // line 117
        yield (((((is_string($_v30 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 117, $this->source); })())) && is_string($_v31 = "app_user") && str_starts_with($_v30, $_v31)) || (is_string($_v32 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 117, $this->source); })())) && is_string($_v33 = "app_roles") && str_starts_with($_v32, $_v33))) || (is_string($_v34 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 117, $this->source); })())) && is_string($_v35 = "app_activity") && str_starts_with($_v34, $_v35)))) ? ("active") : (""));
        yield "\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Administration</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Utilisateurs & Rôles</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-225px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 126
        yield (((is_string($_v36 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 126, $this->source); })())) && is_string($_v37 = "app_user") && str_starts_with($_v36, $_v37))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-profile-user fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Utilisateurs</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 136
        yield (((is_string($_v38 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 136, $this->source); })())) && is_string($_v39 = "app_roles") && str_starts_with($_v38, $_v39))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roles");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-shield-tick fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Rôles & permissions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 146
        yield (((is_string($_v40 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 146, $this->source); })())) && is_string($_v41 = "app_activity") && str_starts_with($_v40, $_v41))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-time fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Historiques</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Compte -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 ";
        // line 160
        yield (((is_string($_v42 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 160, $this->source); })())) && is_string($_v43 = "app_profile") && str_starts_with($_v42, $_v43))) ? ("active") : (""));
        yield "\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Compte</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Paramètres & Profil</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 ";
        // line 169
        yield (((is_string($_v44 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 169, $this->source); })())) && is_string($_v45 = "app_profile") && str_starts_with($_v44, $_v45))) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-setting-2 fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Mon profil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3\" href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-exit-right fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Se déconnecter</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!--end::Menu-->
\t\t</div>
\t\t<!--end::Menu wrapper-->
\t</div>
\t<!--end::Header secondary container-->
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
        return "layouts/_header_secondary.html.twig";
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
        return array (  297 => 179,  282 => 169,  270 => 160,  251 => 146,  236 => 136,  221 => 126,  209 => 117,  190 => 103,  175 => 93,  160 => 83,  145 => 73,  130 => 63,  118 => 54,  99 => 40,  84 => 30,  72 => 21,  57 => 11,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"app-header-secondary app-header-mobile-drawer\" data-kt-drawer=\"true\" data-kt-drawer-name=\"app-header-menu\" data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"250px\" data-kt-drawer-direction=\"start\" data-kt-drawer-toggle=\"#kt_header_secondary_toggle\" data-kt-sticky=\"true\" data-kt-sticky-name=\"app-header-secondary-sticky\" data-kt-sticky-offset=\"{default: 'false', lg: '300px'}\" data-kt-swapper=\"true\" data-kt-swapper-mode=\"append\" data-kt-swapper-parent=\"{default: '#kt_app_body', lg: '#kt_app_header'}\">
\t<!--begin::Header secondary container-->
\t<div class=\"app-container container-xxl app-container-fit-mobile d-flex align-items-stretch\">
\t\t<!--begin::Menu wrapper-->
\t\t<div class=\"header-menu d-flex align-items-stretch w-100\">
\t\t\t<!--begin::Menu-->
\t\t\t<div class=\"menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-400 menu-bullet-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch\" id=\"#kt_header_menu\" data-kt-menu=\"true\">
\t\t\t\t
\t\t\t\t<!-- Tableau de bord -->
\t\t\t\t<div class=\"menu-item me-0 me-lg-2\">
\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_dashboard' ? 'active' }}\" href=\"{{ path('app_dashboard') }}\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Tableau de bord</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Vue d'ensemble</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Navigation -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 {{ currentRoute starts with 'app_partners' or currentRoute starts with 'app_institutions' ? 'active' }}\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Navigation</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Partenaires & Institutions</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_partners' ? 'active' }}\" href=\"{{ path('app_partners') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-people fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span><span class=\"path5\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Partenaires</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_institutions' ? 'active' }}\" href=\"{{ path('app_institutions') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-bank fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Institutions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Projets & Finances -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 {{ currentRoute starts with 'app_projects' or currentRoute starts with 'app_financements' or currentRoute starts with 'app_decaissement' or currentRoute starts with 'app_convention' or currentRoute starts with 'app_audit' ? 'active' }}\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Projets & Finances</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Suivi & Exécution</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_projects' ? 'active' }}\" href=\"{{ path('app_projects') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-briefcase fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Projets</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_financements' ? 'active' }}\" href=\"{{ path('app_financements') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-wallet fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Financements</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_decaissement' ? 'active' }}\" href=\"{{ path('app_decaissement_index') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-bill fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span><span class=\"path5\"></span><span class=\"path6\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Décaissements</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_convention' ? 'active' }}\" href=\"{{ path('app_convention_index') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-document fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Conventions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_audit' ? 'active' }}\" href=\"{{ path('app_audit_index') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-search-list fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Audits</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Gestion des utilisateurs -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 {{ currentRoute starts with 'app_user' or currentRoute starts with 'app_roles' or currentRoute starts with 'app_activity' ? 'active' }}\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Administration</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Utilisateurs & Rôles</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-225px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_user' ? 'active' }}\" href=\"{{ path('app_user_index') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-profile-user fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span><span class=\"path3\"></span><span class=\"path4\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Utilisateurs</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_roles' ? 'active' }}\" href=\"{{ path('app_roles') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-shield-tick fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Rôles & permissions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_activity' ? 'active' }}\" href=\"{{ path('app_activity_index') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-time fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Historiques</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Compte -->
\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2\">
\t\t\t\t\t<span class=\"menu-link py-3 {{ currentRoute starts with 'app_profile' ? 'active' }}\">
\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t<span class=\"menu-text\">Compte</span>
\t\t\t\t\t\t\t<span class=\"menu-desc\">Paramètres & Profil</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px\">
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3 {{ currentRoute starts with 'app_profile' ? 'active' }}\" href=\"{{ path('app_profile') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-setting-2 fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Mon profil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t<a class=\"menu-link py-3\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-exit-right fs-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span><span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Se déconnecter</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!--end::Menu-->
\t\t</div>
\t\t<!--end::Menu wrapper-->
\t</div>
\t<!--end::Header secondary container-->
</div>
", "layouts/_header_secondary.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\layouts\\_header_secondary.html.twig");
    }
}
