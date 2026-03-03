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

/* project/edit.html.twig */
class __TwigTemplate_d889cc2f732e3dcc18c249ac8c499a26 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Modifier le Projet</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"text-muted text-hover-primary\">Projets</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Modification</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 30, $this->source); })()), "slug", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-light\">
                <i class=\"ki-outline ki-arrow-left fs-2\"></i> Annuler
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["class" => "form d-flex flex-column flex-lg-row", "novalidate" => "novalidate"]]);
        yield "
        
        <div class=\"d-flex flex-column flex-row-fluid gap-7 gap-lg-10\">
            <div class=\"card card-flush py-4\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <h2>Informations Générales</h2>
                    </div>
                </div>
                <div class=\"card-body pt-0\">
                    <div class=\"mb-10 fv-row\">
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "required form-label"], "label" => "Nom du projet"]);
        yield "
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'errors');
        yield "
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-10 fv-row\">
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "code", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "required form-label"], "label" => "Code Projet"]);
        yield "
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "code", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "code", [], "any", false, false, false, 59), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 mb-10 fv-row\">
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "localisation", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Localisation"]);
        yield "
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "localisation", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "localisation", [], "any", false, false, false, 64), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"fv-row\">
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control form-control-solid", "rows" => 4]]);
        yield "
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"card card-flush py-4\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <h2>Classification & Finance</h2>
                    </div>
                </div>
                <div class=\"card-body pt-0\">
                    <div class=\"row mb-10\">
                        <div class=\"col-md-6 fv-row\">
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "sector", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "required form-label"], "label" => "Secteur"]);
        yield "
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "sector", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-select form-select-solid"]]);
        yield "
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "sector", [], "any", false, false, false, 86), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 fv-row\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "priorite", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "required form-label"], "label" => "Priorité"]);
        yield "
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "priorite", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-select form-select-solid"]]);
        yield "
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "priorite", [], "any", false, false, false, 91), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4 fv-row\">
                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "budgetTotal", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Budget Total (FCFA)"]);
        yield "
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "budgetTotal", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "budgetTotal", [], "any", false, false, false, 98), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-4 fv-row\">
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Montant Décaissé (FCFA)"]);
        yield "
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 103), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-4 fv-row\">
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "progress", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Progression (%)"]);
        yield "
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "progress", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "progress", [], "any", false, false, false, 108), 'errors');
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"card card-flush py-4\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <h2>Responsables & Institutions</h2>
                    </div>
                </div>
                <div class=\"card-body pt-0\">
                    <div class=\"fv-row mb-10\">
                        ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "institution", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Institution Responsable"]);
        yield "
                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "institution", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-select form-select-solid"]]);
        yield "
                        ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "institution", [], "any", false, false, false, 124), 'errors');
        yield "
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 fv-row\">
                            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 128), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Maître d'ouvrage"]);
        yield "
                            ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                            ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 130), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 fv-row\">
                            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "chefProjet", [], "any", false, false, false, 133), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Chef de projet"]);
        yield "
                            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "chefProjet", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control form-control-solid"]]);
        yield "
                            ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "chefProjet", [], "any", false, false, false, 135), 'errors');
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"d-flex justify-content-end\">
                <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"btn btn-light me-5\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <span class=\"indicator-label\">Mettre à jour le projet</span>
                </button>
            </div>
        </div>
        ";
        // line 148
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), 'form_end');
        yield "
    </div>
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
        return "project/edit.html.twig";
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
        return array (  355 => 148,  346 => 142,  336 => 135,  332 => 134,  328 => 133,  322 => 130,  318 => 129,  314 => 128,  307 => 124,  303 => 123,  299 => 122,  282 => 108,  278 => 107,  274 => 106,  268 => 103,  264 => 102,  260 => 101,  254 => 98,  250 => 97,  246 => 96,  238 => 91,  234 => 90,  230 => 89,  224 => 86,  220 => 85,  216 => 84,  199 => 70,  195 => 69,  191 => 68,  184 => 64,  180 => 63,  176 => 62,  170 => 59,  166 => 58,  162 => 57,  155 => 53,  151 => 52,  147 => 51,  133 => 40,  120 => 30,  108 => 21,  99 => 15,  90 => 8,  80 => 7,  61 => 3,  53 => 1,  51 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier {{ project.name }} - SIGEP Tchad{% endblock %}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">Modifier le Projet</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_projects') }}\" class=\"text-muted text-hover-primary\">Projets</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Modification</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_projects_show', {slug: project.slug}) }}\" class=\"btn btn-sm btn-light\">
                <i class=\"ki-outline ki-arrow-left fs-2\"></i> Annuler
            </a>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        {{ form_start(form, {'attr': {'class': 'form d-flex flex-column flex-lg-row', 'novalidate': 'novalidate'}}) }}
        
        <div class=\"d-flex flex-column flex-row-fluid gap-7 gap-lg-10\">
            <div class=\"card card-flush py-4\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <h2>Informations Générales</h2>
                    </div>
                </div>
                <div class=\"card-body pt-0\">
                    <div class=\"mb-10 fv-row\">
                        {{ form_label(form.name, 'Nom du projet', {'label_attr': {'class': 'required form-label'}}) }}
                        {{ form_widget(form.name, {'attr': {'class': 'form-control form-control-solid'}}) }}
                        {{ form_errors(form.name) }}
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-10 fv-row\">
                            {{ form_label(form.code, 'Code Projet', {'label_attr': {'class': 'required form-label'}}) }}
                            {{ form_widget(form.code, {'attr': {'class': 'form-control form-control-solid'}}) }}
                            {{ form_errors(form.code) }}
                        </div>
                        <div class=\"col-md-6 mb-10 fv-row\">
                            {{ form_label(form.localisation, 'Localisation', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.localisation, {'attr': {'class': 'form-control form-control-solid'}}) }}
                            {{ form_errors(form.localisation) }}
                        </div>
                    </div>
                    <div class=\"fv-row\">
                        {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control form-control-solid', 'rows': 4}}) }}
                        {{ form_errors(form.description) }}
                    </div>
                </div>
            </div>

            <div class=\"card card-flush py-4\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <h2>Classification & Finance</h2>
                    </div>
                </div>
                <div class=\"card-body pt-0\">
                    <div class=\"row mb-10\">
                        <div class=\"col-md-6 fv-row\">
                            {{ form_label(form.sector, 'Secteur', {'label_attr': {'class': 'required form-label'}}) }}
                            {{ form_widget(form.sector, {'attr': {'class': 'form-select form-select-solid'}}) }}
                            {{ form_errors(form.sector) }}
                        </div>
                        <div class=\"col-md-6 fv-row\">
                            {{ form_label(form.priorite, 'Priorité', {'label_attr': {'class': 'required form-label'}}) }}
                            {{ form_widget(form.priorite, {'attr': {'class': 'form-select form-select-solid'}}) }}
                            {{ form_errors(form.priorite) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4 fv-row\">
                            {{ form_label(form.budgetTotal, 'Budget Total (FCFA)', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.budgetTotal, {'attr': {'class': 'form-control form-control-solid'}}) }}
                            {{ form_errors(form.budgetTotal) }}
                        </div>
                        <div class=\"col-md-4 fv-row\">
                            {{ form_label(form.montantDecaisse, 'Montant Décaissé (FCFA)', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.montantDecaisse, {'attr': {'class': 'form-control form-control-solid'}}) }}
                            {{ form_errors(form.montantDecaisse) }}
                        </div>
                        <div class=\"col-md-4 fv-row\">
                            {{ form_label(form.progress, 'Progression (%)', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.progress, {'attr': {'class': 'form-control form-control-solid'}}) }}
                            {{ form_errors(form.progress) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"card card-flush py-4\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <h2>Responsables & Institutions</h2>
                    </div>
                </div>
                <div class=\"card-body pt-0\">
                    <div class=\"fv-row mb-10\">
                        {{ form_label(form.institution, 'Institution Responsable', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.institution, {'attr': {'class': 'form-select form-select-solid'}}) }}
                        {{ form_errors(form.institution) }}
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 fv-row\">
                            {{ form_label(form.maitreOuvrage, 'Maître d\\'ouvrage', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.maitreOuvrage, {'attr': {'class': 'form-control form-control-solid'}}) }}
                            {{ form_errors(form.maitreOuvrage) }}
                        </div>
                        <div class=\"col-md-6 fv-row\">
                            {{ form_label(form.chefProjet, 'Chef de projet', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.chefProjet, {'attr': {'class': 'form-control form-control-solid'}}) }}
                            {{ form_errors(form.chefProjet) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"d-flex justify-content-end\">
                <a href=\"{{ path('app_projects') }}\" class=\"btn btn-light me-5\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <span class=\"indicator-label\">Mettre à jour le projet</span>
                </button>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "project/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\project\\edit.html.twig");
    }
}
