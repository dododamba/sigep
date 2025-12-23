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

/* partner/edit.html.twig */
class __TwigTemplate_e0b83ef08294c757be79be91f7314600 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/edit.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - SIGEP Tchad";
        
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
    <h1 style=\"font-size:1.1rem; font-weight:600;\">Modifier le Partenaire</h1>
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
                    
                    <!-- Affichage du logo actuel -->
                    ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 40, $this->source); })()), "logo", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                        <div class=\"current-logo\" style=\"margin-bottom: 1rem;\">
                            <p style=\"font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.5rem;\">Logo actuel:</p>
                            <div style=\"display: flex; align-items: center; gap: 1rem;\">
                                <img src=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/partners/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 44, $this->source); })()), "logo", [], "any", false, false, false, 44))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "\" 
                                     style=\"max-width: 100px; max-height: 60px; border-radius: 8px; border: 1px solid var(--border-color);\">
                                <span style=\"font-size: 0.85rem; color: var(--text-secondary);\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 47, $this->source); })()), "logo", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        }
        // line 51
        yield "                    
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "logoFile", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "').click()\">
                        <div class=\"file-icon\"><i class=\"ri-upload-cloud-2-line\"></i></div>
                        <p style=\"font-weight:600;\">
                            ";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 55, $this->source); })()), "logo", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                                Cliquez pour remplacer le logo
                            ";
        } else {
            // line 58
            yield "                                Cliquez pour télécharger
                            ";
        }
        // line 60
        yield "                        </p>
                        <p style=\"font-size:0.8rem; color:var(--text-muted);\">PNG, JPG (Max 2MB)</p>
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "logoFile", [], "any", false, false, false, 62), 'widget', ["attr" => ["style" => "display:none", "onchange" => "showFileName(this)"]]);
        yield "
                    </div>
                    <div id=\"fileNameDisplay\" style=\"margin-top:8px; font-size:0.9rem; color:var(--success); display:none; align-items:center; gap:6px;\">
                        <i class=\"ri-check-line\" style=\"width:16px;\"></i> <span id=\"selectedFileName\"></span>
                    </div>
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "logoFile", [], "any", false, false, false, 67), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <span class=\"required\">*</span>
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), 'widget');
        yield "
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "acronym", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "acronym", [], "any", false, false, false, 79), 'widget');
        yield "
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "acronym", [], "any", false, false, false, 80), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "typePartner", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <span class=\"required\">*</span>
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "typePartner", [], "any", false, false, false, 86), 'widget');
        yield "
                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "typePartner", [], "any", false, false, false, 87), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "siteWeb", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "siteWeb", [], "any", false, false, false, 92), 'widget');
        yield "
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "siteWeb", [], "any", false, false, false, 93), 'errors');
        yield "
                </div>

                <div class=\"form-group full\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "description", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), 'widget');
        yield "
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "description", [], "any", false, false, false, 99), 'errors');
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
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "contactName", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "contactName", [], "any", false, false, false, 120), 'widget');
        yield "
                    ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "contactName", [], "any", false, false, false, 121), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "contactRole", [], "any", false, false, false, 125), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "contactRole", [], "any", false, false, false, 126), 'widget');
        yield "
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "contactRole", [], "any", false, false, false, 127), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "contactEmail", [], "any", false, false, false, 131), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "contactEmail", [], "any", false, false, false, 132), 'widget');
        yield "
                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "contactEmail", [], "any", false, false, false, 133), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "contactPhone", [], "any", false, false, false, 137), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "contactPhone", [], "any", false, false, false, 138), 'widget');
        yield "
                    ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "contactPhone", [], "any", false, false, false, 139), 'errors');
        yield "
                </div>

                <div class=\"form-group full\">
                    ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "address", [], "any", false, false, false, 143), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "address", [], "any", false, false, false, 144), 'widget');
        yield "
                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "address", [], "any", false, false, false, 145), 'errors');
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
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "status", [], "any", false, false, false, 165), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "status", [], "any", false, false, false, 166), 'widget');
        yield "
                    ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Métadonnées -->
    <div class=\"form-card\" style=\"background: var(--bg-secondary);\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: rgba(100, 116, 139, 0.2);\">
                <i class=\"ri-information-line\" style=\"color: var(--text-muted);\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Informations système</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">Métadonnées de l'enregistrement</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"metadata-grid\">
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">ID:</span>
                    <span class=\"metadata-value\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188), "html", null, true);
        yield "</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Slug:</span>
                    <span class=\"metadata-value\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 192, $this->source); })()), "slug", [], "any", false, false, false, 192), "html", null, true);
        yield "</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Créé le:</span>
                    <span class=\"metadata-value\">";
        // line 196
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 196, $this->source); })()), "createdAt", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 196, $this->source); })()), "createdAt", [], "any", false, false, false, 196), "d/m/Y à H:i"), "html", null, true)) : ("N/A"));
        yield "</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Modifié le:</span>
                    <span class=\"metadata-value\">";
        // line 200
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 200, $this->source); })()), "updatedAt", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 200, $this->source); })()), "updatedAt", [], "any", false, false, false, 200), "d/m/Y à H:i"), "html", null, true)) : ("Jamais"));
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"ri-close-line\"></i> Annuler
        </a>
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"ri-save-line\"></i> Mettre à jour
        </button>
    </div>

    ";
        // line 215
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 220
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
        return "partner/edit.html.twig";
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
        return array (  491 => 220,  481 => 219,  470 => 215,  459 => 207,  449 => 200,  442 => 196,  435 => 192,  428 => 188,  404 => 167,  400 => 166,  396 => 165,  373 => 145,  369 => 144,  365 => 143,  358 => 139,  354 => 138,  350 => 137,  343 => 133,  339 => 132,  335 => 131,  328 => 127,  324 => 126,  320 => 125,  313 => 121,  309 => 120,  305 => 119,  282 => 99,  278 => 98,  274 => 97,  267 => 93,  263 => 92,  259 => 91,  252 => 87,  248 => 86,  243 => 84,  236 => 80,  232 => 79,  228 => 78,  221 => 74,  217 => 73,  212 => 71,  205 => 67,  197 => 62,  193 => 60,  189 => 58,  185 => 56,  183 => 55,  177 => 52,  174 => 51,  167 => 47,  162 => 45,  158 => 44,  153 => 41,  151 => 40,  145 => 37,  125 => 20,  113 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier {{ partner.name }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/partner-add.css') }}\">
{% endblock %}

{% block body %}
<header class=\"top-header\">
    <a href=\"{{ path('app_partners') }}\" class=\"back-btn\">
        <i class=\"ri-arrow-left-line\" style=\"width:18px;\"></i>
        Retour à la liste
    </a>
    <h1 style=\"font-size:1.1rem; font-weight:600;\">Modifier le Partenaire</h1>
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
                    
                    <!-- Affichage du logo actuel -->
                    {% if partner.logo %}
                        <div class=\"current-logo\" style=\"margin-bottom: 1rem;\">
                            <p style=\"font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.5rem;\">Logo actuel:</p>
                            <div style=\"display: flex; align-items: center; gap: 1rem;\">
                                <img src=\"{{ asset('uploads/partners/' ~ partner.logo) }}\" 
                                     alt=\"{{ partner.name }}\" 
                                     style=\"max-width: 100px; max-height: 60px; border-radius: 8px; border: 1px solid var(--border-color);\">
                                <span style=\"font-size: 0.85rem; color: var(--text-secondary);\">{{ partner.logo }}</span>
                            </div>
                        </div>
                    {% endif %}
                    
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('{{ form.logoFile.vars.id }}').click()\">
                        <div class=\"file-icon\"><i class=\"ri-upload-cloud-2-line\"></i></div>
                        <p style=\"font-weight:600;\">
                            {% if partner.logo %}
                                Cliquez pour remplacer le logo
                            {% else %}
                                Cliquez pour télécharger
                            {% endif %}
                        </p>
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

    <!-- Métadonnées -->
    <div class=\"form-card\" style=\"background: var(--bg-secondary);\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon\" style=\"background: rgba(100, 116, 139, 0.2);\">
                <i class=\"ri-information-line\" style=\"color: var(--text-muted);\"></i>
            </div>
            <div>
                <h3 style=\"font-size:1.1rem; font-weight:600;\">Informations système</h3>
                <p style=\"font-size:0.85rem; color:var(--text-muted);\">Métadonnées de l'enregistrement</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"metadata-grid\">
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">ID:</span>
                    <span class=\"metadata-value\">{{ partner.id }}</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Slug:</span>
                    <span class=\"metadata-value\">{{ partner.slug }}</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Créé le:</span>
                    <span class=\"metadata-value\">{{ partner.createdAt ? partner.createdAt|date('d/m/Y à H:i') : 'N/A' }}</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Modifié le:</span>
                    <span class=\"metadata-value\">{{ partner.updatedAt ? partner.updatedAt|date('d/m/Y à H:i') : 'Jamais' }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('app_partners') }}\" class=\"btn btn-secondary\">
            <i class=\"ri-close-line\"></i> Annuler
        </a>
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"ri-save-line\"></i> Mettre à jour
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
", "partner/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partner\\edit.html.twig");
    }
}
