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

/* institution/edit.html.twig */
class __TwigTemplate_1bc3a145eb3968de75e483ecd81a7685 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "institution/edit.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/institution-form.css"), "html", null, true);
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
        yield "<main class=\"main-content\">
    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-container", "enctype" => "multipart/form-data"]]);
        yield "
        
        <!-- Header -->
        <div class=\"form-header\">
            <div class=\"form-title\">
                <h2>Modifier l'Institution</h2>
                <p>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 17, $this->source); })()), "acronym", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 17, $this->source); })()), "acronym", [], "any", false, false, false, 17), "html", null, true);
            yield ")";
        }
        yield "</p>
            </div>
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"back-btn\">
                <i data-lucide=\"arrow-left\"></i> Retour
            </a>
        </div>

        <div class=\"form-body\">
            <!-- Flash Messages -->
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 27
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 28
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                        <i data-lucide=\"";
                // line 29
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } else {
                    yield "alert-circle";
                }
                yield "\"></i>
                        ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
            <!-- Informations Générales -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"building\"></i> Informations Générales
                </h3>
                <div class=\"form-grid\">
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Nom de l'Institution <span class=\"required\">*</span></label>
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "input", "placeholder" => "Ex: Ministère de l'Éducation Nationale"]]);
        yield "
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Acronyme</label>
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "acronym", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "input", "placeholder" => "Ex: MEN"]]);
        yield "
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "acronym", [], "any", false, false, false, 49), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Type d'entité <span class=\"required\">*</span></label>
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "typeInstitution", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "typeInstitution", [], "any", false, false, false, 54), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Secteur d'activité</label>
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "sector", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "sector", [], "any", false, false, false, 59), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Date de création (Optionnel)</label>
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "creationDate", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "creationDate", [], "any", false, false, false, 64), 'errors');
        yield "
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Description / Mission</label>
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "input textarea", "rows" => 4, "placeholder" => "Description des missions et attributions..."]]);
        yield "
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <!-- Leadership & Contact -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"user-check\"></i> Leadership & Contact
                </h3>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">Nom du Responsable (Ministre/DG)</label>
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "headName", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "input", "placeholder" => "Nom complet"]]);
        yield "
                        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "headName", [], "any", false, false, false, 83), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Titre / Fonction</label>
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "headTitle", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "input", "placeholder" => "Ex: Ministre, Directeur Général"]]);
        yield "
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "headTitle", [], "any", false, false, false, 88), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Email officiel</label>
                        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "email", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "input", "placeholder" => "contact@domaine.td"]]);
        yield "
                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "email", [], "any", false, false, false, 93), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Téléphone</label>
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "phone", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "input", "placeholder" => "+235 XX XX XX XX"]]);
        yield "
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "phone", [], "any", false, false, false, 98), 'errors');
        yield "
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Adresse physique</label>
                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "address", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "input", "placeholder" => "Quartier, Avenue, Ville"]]);
        yield "
                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, false, 103), 'errors');
        yield "
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Site Web</label>
                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "website", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "input", "placeholder" => "https://..."]]);
        yield "
                        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "website", [], "any", false, false, false, 108), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <!-- Identité Visuelle -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"image\"></i> Identité Visuelle
                </h3>
                
                <!-- Logo actuel -->
                ";
        // line 120
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 120, $this->source); })()), "logo", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "                    <div class=\"current-logo-wrapper\">
                        <p class=\"current-logo-label\">Logo actuel:</p>
                        <div class=\"current-logo\">
                            <img src=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/institutions/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 124, $this->source); })()), "logo", [], "any", false, false, false, 124))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 124, $this->source); })()), "name", [], "any", false, false, false, 124), "html", null, true);
            yield "\">
                            <span class=\"logo-filename\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 125, $this->source); })()), "logo", [], "any", false, false, false, 125), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                ";
        }
        // line 129
        yield "                
                <div class=\"file-upload\" onclick=\"document.getElementById('";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "logoFile", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130), "html", null, true);
        yield "').click()\">
                    <i data-lucide=\"upload-cloud\" class=\"upload-icon\"></i>
                    <p class=\"upload-title\">
                        ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 133, $this->source); })()), "logo", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                            Cliquez pour remplacer le logo
                        ";
        } else {
            // line 136
            yield "                            Cliquez pour télécharger le logo
                        ";
        }
        // line 138
        yield "                    </p>
                    <p class=\"upload-hint\">PNG, JPG (Max 2MB)</p>
                    ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "logoFile", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "file-input-hidden", "onchange" => "previewLogo(this)"]]);
        yield "
                </div>
                <div id=\"logoPreview\" class=\"logo-preview\" style=\"display: none;\">
                    <img id=\"logoPreviewImg\" src=\"\" alt=\"Aperçu\">
                    <button type=\"button\" class=\"remove-preview\" onclick=\"removeLogo()\">
                        <i data-lucide=\"x\"></i>
                    </button>
                </div>
                ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "logoFile", [], "any", false, false, false, 148), 'errors');
        yield "
            </div>

            <!-- Statut -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"toggle-left\"></i> Statut
                </h3>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">État de l'institution</label>
                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "status", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "status", [], "any", false, false, false, 160), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <!-- Informations Système -->
            <div class=\"form-section metadata-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"info\"></i> Informations Système
                </h3>
                <div class=\"metadata-grid\">
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">ID</span>
                        <span class=\"metadata-value\">#";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">Slug</span>
                        <span class=\"metadata-value\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 177, $this->source); })()), "slug", [], "any", false, false, false, 177), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">Créé le</span>
                        <span class=\"metadata-value\">";
        // line 181
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 181, $this->source); })()), "createdAt", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 181, $this->source); })()), "createdAt", [], "any", false, false, false, 181), "d/m/Y à H:i"), "html", null, true)) : ("N/A"));
        yield "</span>
                    </div>
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">Modifié le</span>
                        <span class=\"metadata-value\">";
        // line 185
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 185, $this->source); })()), "updatedAt", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 185, $this->source); })()), "updatedAt", [], "any", false, false, false, 185), "d/m/Y à H:i"), "html", null, true)) : ("Jamais"));
        yield "</span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-footer\">
            <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"btn btn-cancel\">Annuler</a>
            <button type=\"submit\" class=\"btn btn-save\">
                <i data-lucide=\"save\"></i> Mettre à jour
            </button>
        </div>
        
    ";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_end');
        yield "
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 203
        yield "<script>
    lucide.createIcons();
    
    function previewLogo(input) {
        const preview = document.getElementById('logoPreview');
        const previewImg = document.getElementById('logoPreviewImg');
        const uploadArea = document.querySelector('.file-upload');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                preview.style.display = 'flex';
                uploadArea.style.display = 'none';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function removeLogo() {
        const preview = document.getElementById('logoPreview');
        const uploadArea = document.querySelector('.file-upload');
        const fileInput = document.querySelector('.file-input-hidden');
        
        fileInput.value = '';
        preview.style.display = 'none';
        uploadArea.style.display = 'flex';
        lucide.createIcons();
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
        return "institution/edit.html.twig";
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
        return array (  488 => 203,  478 => 202,  467 => 198,  458 => 192,  448 => 185,  441 => 181,  434 => 177,  427 => 173,  411 => 160,  407 => 159,  393 => 148,  382 => 140,  378 => 138,  374 => 136,  370 => 134,  368 => 133,  362 => 130,  359 => 129,  352 => 125,  346 => 124,  341 => 121,  339 => 120,  324 => 108,  320 => 107,  313 => 103,  309 => 102,  302 => 98,  298 => 97,  291 => 93,  287 => 92,  280 => 88,  276 => 87,  269 => 83,  265 => 82,  249 => 69,  245 => 68,  238 => 64,  234 => 63,  227 => 59,  223 => 58,  216 => 54,  212 => 53,  205 => 49,  201 => 48,  194 => 44,  190 => 43,  179 => 34,  173 => 33,  164 => 30,  156 => 29,  151 => 28,  146 => 27,  142 => 26,  132 => 19,  122 => 17,  113 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier {{ institution.name }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/institution-form.css') }}\">
{% endblock %}

{% block body %}
<main class=\"main-content\">
    {{ form_start(form, {'attr': {'class': 'form-container', 'enctype': 'multipart/form-data'}}) }}
        
        <!-- Header -->
        <div class=\"form-header\">
            <div class=\"form-title\">
                <h2>Modifier l'Institution</h2>
                <p>{{ institution.name }}{% if institution.acronym %} ({{ institution.acronym }}){% endif %}</p>
            </div>
            <a href=\"{{ path('app_institutions') }}\" class=\"back-btn\">
                <i data-lucide=\"arrow-left\"></i> Retour
            </a>
        </div>

        <div class=\"form-body\">
            <!-- Flash Messages -->
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }}\">
                        <i data-lucide=\"{% if label == 'success' %}check-circle{% else %}alert-circle{% endif %}\"></i>
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

            <!-- Informations Générales -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"building\"></i> Informations Générales
                </h3>
                <div class=\"form-grid\">
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Nom de l'Institution <span class=\"required\">*</span></label>
                        {{ form_widget(form.name, {'attr': {'class': 'input', 'placeholder': 'Ex: Ministère de l\\'Éducation Nationale'}}) }}
                        {{ form_errors(form.name) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Acronyme</label>
                        {{ form_widget(form.acronym, {'attr': {'class': 'input', 'placeholder': 'Ex: MEN'}}) }}
                        {{ form_errors(form.acronym) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Type d'entité <span class=\"required\">*</span></label>
                        {{ form_widget(form.typeInstitution, {'attr': {'class': 'input'}}) }}
                        {{ form_errors(form.typeInstitution) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Secteur d'activité</label>
                        {{ form_widget(form.sector, {'attr': {'class': 'input'}}) }}
                        {{ form_errors(form.sector) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Date de création (Optionnel)</label>
                        {{ form_widget(form.creationDate, {'attr': {'class': 'input'}}) }}
                        {{ form_errors(form.creationDate) }}
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Description / Mission</label>
                        {{ form_widget(form.description, {'attr': {'class': 'input textarea', 'rows': 4, 'placeholder': 'Description des missions et attributions...'}}) }}
                        {{ form_errors(form.description) }}
                    </div>
                </div>
            </div>

            <!-- Leadership & Contact -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"user-check\"></i> Leadership & Contact
                </h3>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">Nom du Responsable (Ministre/DG)</label>
                        {{ form_widget(form.headName, {'attr': {'class': 'input', 'placeholder': 'Nom complet'}}) }}
                        {{ form_errors(form.headName) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Titre / Fonction</label>
                        {{ form_widget(form.headTitle, {'attr': {'class': 'input', 'placeholder': 'Ex: Ministre, Directeur Général'}}) }}
                        {{ form_errors(form.headTitle) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Email officiel</label>
                        {{ form_widget(form.email, {'attr': {'class': 'input', 'placeholder': 'contact@domaine.td'}}) }}
                        {{ form_errors(form.email) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Téléphone</label>
                        {{ form_widget(form.phone, {'attr': {'class': 'input', 'placeholder': '+235 XX XX XX XX'}}) }}
                        {{ form_errors(form.phone) }}
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Adresse physique</label>
                        {{ form_widget(form.address, {'attr': {'class': 'input', 'placeholder': 'Quartier, Avenue, Ville'}}) }}
                        {{ form_errors(form.address) }}
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Site Web</label>
                        {{ form_widget(form.website, {'attr': {'class': 'input', 'placeholder': 'https://...'}}) }}
                        {{ form_errors(form.website) }}
                    </div>
                </div>
            </div>

            <!-- Identité Visuelle -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"image\"></i> Identité Visuelle
                </h3>
                
                <!-- Logo actuel -->
                {% if institution.logo %}
                    <div class=\"current-logo-wrapper\">
                        <p class=\"current-logo-label\">Logo actuel:</p>
                        <div class=\"current-logo\">
                            <img src=\"{{ asset('uploads/institutions/' ~ institution.logo) }}\" alt=\"{{ institution.name }}\">
                            <span class=\"logo-filename\">{{ institution.logo }}</span>
                        </div>
                    </div>
                {% endif %}
                
                <div class=\"file-upload\" onclick=\"document.getElementById('{{ form.logoFile.vars.id }}').click()\">
                    <i data-lucide=\"upload-cloud\" class=\"upload-icon\"></i>
                    <p class=\"upload-title\">
                        {% if institution.logo %}
                            Cliquez pour remplacer le logo
                        {% else %}
                            Cliquez pour télécharger le logo
                        {% endif %}
                    </p>
                    <p class=\"upload-hint\">PNG, JPG (Max 2MB)</p>
                    {{ form_widget(form.logoFile, {'attr': {'class': 'file-input-hidden', 'onchange': 'previewLogo(this)'}}) }}
                </div>
                <div id=\"logoPreview\" class=\"logo-preview\" style=\"display: none;\">
                    <img id=\"logoPreviewImg\" src=\"\" alt=\"Aperçu\">
                    <button type=\"button\" class=\"remove-preview\" onclick=\"removeLogo()\">
                        <i data-lucide=\"x\"></i>
                    </button>
                </div>
                {{ form_errors(form.logoFile) }}
            </div>

            <!-- Statut -->
            <div class=\"form-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"toggle-left\"></i> Statut
                </h3>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">État de l'institution</label>
                        {{ form_widget(form.status, {'attr': {'class': 'input'}}) }}
                        {{ form_errors(form.status) }}
                    </div>
                </div>
            </div>

            <!-- Informations Système -->
            <div class=\"form-section metadata-section\">
                <h3 class=\"section-title\">
                    <i data-lucide=\"info\"></i> Informations Système
                </h3>
                <div class=\"metadata-grid\">
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">ID</span>
                        <span class=\"metadata-value\">#{{ institution.id }}</span>
                    </div>
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">Slug</span>
                        <span class=\"metadata-value\">{{ institution.slug }}</span>
                    </div>
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">Créé le</span>
                        <span class=\"metadata-value\">{{ institution.createdAt ? institution.createdAt|date('d/m/Y à H:i') : 'N/A' }}</span>
                    </div>
                    <div class=\"metadata-item\">
                        <span class=\"metadata-label\">Modifié le</span>
                        <span class=\"metadata-value\">{{ institution.updatedAt ? institution.updatedAt|date('d/m/Y à H:i') : 'Jamais' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-footer\">
            <a href=\"{{ path('app_institutions') }}\" class=\"btn btn-cancel\">Annuler</a>
            <button type=\"submit\" class=\"btn btn-save\">
                <i data-lucide=\"save\"></i> Mettre à jour
            </button>
        </div>
        
    {{ form_end(form) }}
</main>
{% endblock %}

{% block javascripts %}
<script>
    lucide.createIcons();
    
    function previewLogo(input) {
        const preview = document.getElementById('logoPreview');
        const previewImg = document.getElementById('logoPreviewImg');
        const uploadArea = document.querySelector('.file-upload');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                preview.style.display = 'flex';
                uploadArea.style.display = 'none';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function removeLogo() {
        const preview = document.getElementById('logoPreview');
        const uploadArea = document.querySelector('.file-upload');
        const fileInput = document.querySelector('.file-input-hidden');
        
        fileInput.value = '';
        preview.style.display = 'none';
        uploadArea.style.display = 'flex';
        lucide.createIcons();
    }
</script>
{% endblock %}
", "institution/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\institution\\edit.html.twig");
    }
}
