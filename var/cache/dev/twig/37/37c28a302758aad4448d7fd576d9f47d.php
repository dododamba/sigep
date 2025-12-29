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

/* partner/new.html.twig */
class __TwigTemplate_0d1983b50caa98139c7ffdf3e1755b6a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/new.html.twig"));

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

        yield "Nouveau Partenaire - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/partner-add.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<header class=\"top-header\">
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"back-btn\">
        <i class=\"ri-arrow-left-line\" style=\"width:18px;\"></i>
        Retour à la liste
    </a>
    <h1 style=\"font-size:1.1rem; font-weight:600;\">Enregistrer un Partenaire</h1>
    <div style=\"width:40px;\"></div>
</header>

<div class=\"content-area\">
    ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "partner-form", "enctype" => "multipart/form-data"]]);
        yield "
    
    <!-- Card 1: Info Générales -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                <i class=\"ri-building-2-line\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Informations Générales</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">Identité de l'organisation</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <!-- Logo Upload -->
                <div class=\"form-group full\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "logoFile", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "logoFile", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        yield "').click()\">
                        <div class=\"file-icon\"><i class=\"ri-upload-cloud-2-line\"></i></div>
                        <p style=\"font-weight:600;\">Cliquez pour télécharger</p>
                        <p style=\"font-size:0.8rem; color:var(--text-muted);\">PNG, JPG (Max 2MB)</p>
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "logoFile", [], "any", false, false, false, 42), 'widget', ["attr" => ["style" => "display:none", "onchange" => "showFileName(this)"]]);
        yield "
                    </div>
                    <div id=\"fileNameDisplay\" style=\"margin-top:8px; font-size:0.9rem; color:var(--success); display:none; align-items:center; gap:6px;\">
                        <i class=\"ri-check-line\" style=\"width:16px;\"></i> <span id=\"selectedFileName\"></span>
                    </div>
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "logoFile", [], "any", false, false, false, 47), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <span class=\"required\">*</span>
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'widget');
        yield "
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "acronym", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "acronym", [], "any", false, false, false, 59), 'widget');
        yield "
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "acronym", [], "any", false, false, false, 60), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "typePartner", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <span class=\"required\">*</span>
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "typePartner", [], "any", false, false, false, 66), 'widget');
        yield "
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "typePartner", [], "any", false, false, false, 67), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "siteWeb", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "siteWeb", [], "any", false, false, false, 72), 'widget');
        yield "
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "siteWeb", [], "any", false, false, false, 73), 'errors');
        yield "
                </div>

                <div class=\"form-group full\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'widget');
        yield "
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2: Contact / Point Focal -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                <i class=\"ri-user-line\" style=\"color:var(--tchad-blue);\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Point Focal</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">Coordonnées du représentant</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "contactName", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "contactName", [], "any", false, false, false, 100), 'widget');
        yield "
                    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "contactName", [], "any", false, false, false, 101), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "contactRole", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "contactRole", [], "any", false, false, false, 106), 'widget');
        yield "
                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "contactRole", [], "any", false, false, false, 107), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "contactEmail", [], "any", false, false, false, 111), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "contactEmail", [], "any", false, false, false, 112), 'widget');
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "contactEmail", [], "any", false, false, false, 113), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "contactPhone", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "contactPhone", [], "any", false, false, false, 118), 'widget');
        yield "
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "contactPhone", [], "any", false, false, false, 119), 'errors');
        yield "
                </div>

                <div class=\"form-group full\">
                    ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "address", [], "any", false, false, false, 123), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "address", [], "any", false, false, false, 124), 'widget');
        yield "
                    ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "address", [], "any", false, false, false, 125), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Card 3: Statut -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #10b981 0%, #059669 100%);\">
                <i class=\"ri-toggle-line\" style=\"color: white;\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Statut</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">État du partenariat</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "status", [], "any", false, false, false, 145), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "status", [], "any", false, false, false, 146), 'widget');
        yield "
                    ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "status", [], "any", false, false, false, 147), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"ri-close-line\"></i> Annuler
        </a>
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"ri-save-line\"></i> Enregistrer le Partenaire
        </button>
    </div>

    ";
        // line 162
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 167
        yield "<script>
    function showFileName(input) {
        const display = document.getElementById('fileNameDisplay');
        const nameSpan = document.getElementById('selectedFileName');
        
        if (input.files && input.files[0]) {
            nameSpan.textContent = input.files[0].name;
            display.style.display = 'flex';
        } else {
            display.style.display = 'none';
        }
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
        return "partner/new.html.twig";
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
        return array (  403 => 167,  393 => 166,  382 => 162,  371 => 154,  361 => 147,  357 => 146,  353 => 145,  330 => 125,  326 => 124,  322 => 123,  315 => 119,  311 => 118,  307 => 117,  300 => 113,  296 => 112,  292 => 111,  285 => 107,  281 => 106,  277 => 105,  270 => 101,  266 => 100,  262 => 99,  239 => 79,  235 => 78,  231 => 77,  224 => 73,  220 => 72,  216 => 71,  209 => 67,  205 => 66,  200 => 64,  193 => 60,  189 => 59,  185 => 58,  178 => 54,  174 => 53,  169 => 51,  162 => 47,  154 => 42,  147 => 38,  143 => 37,  123 => 20,  111 => 11,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Partenaire - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/partner-add.css') }}\">
{% endblock %}

{% block body %}
<header class=\"top-header\">
    <a href=\"{{ path('app_partners') }}\" class=\"back-btn\">
        <i class=\"ri-arrow-left-line\" style=\"width:18px;\"></i>
        Retour à la liste
    </a>
    <h1 style=\"font-size:1.1rem; font-weight:600;\">Enregistrer un Partenaire</h1>
    <div style=\"width:40px;\"></div>
</header>

<div class=\"content-area\">
    {{ form_start(form, {'attr': {'class': 'partner-form', 'enctype': 'multipart/form-data'}}) }}
    
    <!-- Card 1: Info Générales -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                <i class=\"ri-building-2-line\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Informations Générales</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">Identité de l'organisation</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <!-- Logo Upload -->
                <div class=\"form-group full\">
                    {{ form_label(form.logoFile, null, {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('{{ form.logoFile.vars.id }}').click()\">
                        <div class=\"file-icon\"><i class=\"ri-upload-cloud-2-line\"></i></div>
                        <p style=\"font-weight:600;\">Cliquez pour télécharger</p>
                        <p style=\"font-size:0.8rem; color:var(--text-muted);\">PNG, JPG (Max 2MB)</p>
                        {{ form_widget(form.logoFile, {'attr': {'style': 'display:none', 'onchange': 'showFileName(this)'}}) }}
                    </div>
                    <div id=\"fileNameDisplay\" style=\"margin-top:8px; font-size:0.9rem; color:var(--success); display:none; align-items:center; gap:6px;\">
                        <i class=\"ri-check-line\" style=\"width:16px;\"></i> <span id=\"selectedFileName\"></span>
                    </div>
                    {{ form_errors(form.logoFile) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.name, null, {'label_attr': {'class': 'form-label'}}) }}
                    <span class=\"required\">*</span>
                    {{ form_widget(form.name) }}
                    {{ form_errors(form.name) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.acronym, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.acronym) }}
                    {{ form_errors(form.acronym) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.typePartner, null, {'label_attr': {'class': 'form-label'}}) }}
                    <span class=\"required\">*</span>
                    {{ form_widget(form.typePartner) }}
                    {{ form_errors(form.typePartner) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.siteWeb, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.siteWeb) }}
                    {{ form_errors(form.siteWeb) }}
                </div>

                <div class=\"form-group full\">
                    {{ form_label(form.description, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.description) }}
                    {{ form_errors(form.description) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2: Contact / Point Focal -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                <i class=\"ri-user-line\" style=\"color:var(--tchad-blue);\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Point Focal</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">Coordonnées du représentant</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.contactName, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.contactName) }}
                    {{ form_errors(form.contactName) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.contactRole, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.contactRole) }}
                    {{ form_errors(form.contactRole) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.contactEmail, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.contactEmail) }}
                    {{ form_errors(form.contactEmail) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.contactPhone, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.contactPhone) }}
                    {{ form_errors(form.contactPhone) }}
                </div>

                <div class=\"form-group full\">
                    {{ form_label(form.address, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.address) }}
                    {{ form_errors(form.address) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Card 3: Statut -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #10b981 0%, #059669 100%);\">
                <i class=\"ri-toggle-line\" style=\"color: white;\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Statut</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">État du partenariat</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.status, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.status) }}
                    {{ form_errors(form.status) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('app_partners') }}\" class=\"btn btn-secondary\">
            <i class=\"ri-close-line\"></i> Annuler
        </a>
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"ri-save-line\"></i> Enregistrer le Partenaire
        </button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}

{% block javascripts %}
<script>
    function showFileName(input) {
        const display = document.getElementById('fileNameDisplay');
        const nameSpan = document.getElementById('selectedFileName');
        
        if (input.files && input.files[0]) {
            nameSpan.textContent = input.files[0].name;
            display.style.display = 'flex';
        } else {
            display.style.display = 'none';
        }
    }
</script>
{% endblock %}
", "partner/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partner\\new.html.twig");
    }
}
