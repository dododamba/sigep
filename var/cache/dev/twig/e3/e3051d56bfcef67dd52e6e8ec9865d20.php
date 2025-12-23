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

/* institution/new.html.twig */
class __TwigTemplate_8e7bfe0351d49a1549e36081d4b62c7f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "institution/new.html.twig"));

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

        yield "Nouvelle Institution - SIGEP Tchad";
        
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
                <h2>Nouvelle Institution</h2>
                <p>Enregistrer un ministère ou une agence publique</p>
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
                <div class=\"file-upload\" onclick=\"document.getElementById('";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "logoFile", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118), "html", null, true);
        yield "').click()\">
                    <i data-lucide=\"upload-cloud\" class=\"upload-icon\"></i>
                    <p class=\"upload-title\">Cliquez pour télécharger le logo</p>
                    <p class=\"upload-hint\">PNG, JPG (Max 2MB)</p>
                    ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "logoFile", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "file-input-hidden", "onchange" => "previewLogo(this)"]]);
        yield "
                </div>
                <div id=\"logoPreview\" class=\"logo-preview\" style=\"display: none;\">
                    <img id=\"logoPreviewImg\" src=\"\" alt=\"Aperçu\">
                    <button type=\"button\" class=\"remove-preview\" onclick=\"removeLogo()\">
                        <i data-lucide=\"x\"></i>
                    </button>
                </div>
                ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "logoFile", [], "any", false, false, false, 130), 'errors');
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
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "status", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                        ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "status", [], "any", false, false, false, 142), 'errors');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-footer\">
            <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"btn btn-cancel\">Annuler</a>
            <button type=\"submit\" class=\"btn btn-save\">
                <i data-lucide=\"save\"></i> Enregistrer l'Institution
            </button>
        </div>
        
    ";
        // line 155
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), 'form_end');
        yield "
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
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
        return "institution/new.html.twig";
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
        return array (  403 => 160,  393 => 159,  382 => 155,  373 => 149,  363 => 142,  359 => 141,  345 => 130,  334 => 122,  327 => 118,  314 => 108,  310 => 107,  303 => 103,  299 => 102,  292 => 98,  288 => 97,  281 => 93,  277 => 92,  270 => 88,  266 => 87,  259 => 83,  255 => 82,  239 => 69,  235 => 68,  228 => 64,  224 => 63,  217 => 59,  213 => 58,  206 => 54,  202 => 53,  195 => 49,  191 => 48,  184 => 44,  180 => 43,  169 => 34,  163 => 33,  154 => 30,  146 => 29,  141 => 28,  136 => 27,  132 => 26,  122 => 19,  111 => 11,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Institution - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/institution-form.css') }}\">
{% endblock %}

{% block body %}
<main class=\"main-content\">
    {{ form_start(form, {'attr': {'class': 'form-container', 'enctype': 'multipart/form-data'}}) }}
        
        <!-- Header -->
        <div class=\"form-header\">
            <div class=\"form-title\">
                <h2>Nouvelle Institution</h2>
                <p>Enregistrer un ministère ou une agence publique</p>
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
                <div class=\"file-upload\" onclick=\"document.getElementById('{{ form.logoFile.vars.id }}').click()\">
                    <i data-lucide=\"upload-cloud\" class=\"upload-icon\"></i>
                    <p class=\"upload-title\">Cliquez pour télécharger le logo</p>
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
        </div>

        <div class=\"form-footer\">
            <a href=\"{{ path('app_institutions') }}\" class=\"btn btn-cancel\">Annuler</a>
            <button type=\"submit\" class=\"btn btn-save\">
                <i data-lucide=\"save\"></i> Enregistrer l'Institution
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
", "institution/new.html.twig", "/home/xdevcorp/Projects/sigep/templates/institution/new.html.twig");
    }
}
