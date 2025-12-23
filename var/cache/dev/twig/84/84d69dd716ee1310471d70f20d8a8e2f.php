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

/* user/new.html.twig */
class __TwigTemplate_5ae1a705c707bf66b59cb662b74c1275 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

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

        yield "Nouvel Utilisateur - SIGEP Tchad";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        :root {
            --tchad-blue: #002664;
            --tchad-gold: #FECB00;
            --tchad-red: #C60C30;
        }

        .page-header {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 0.75rem;
        }

        .form-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .form-section {
            padding: 2rem;
            border-bottom: 1px solid #e9ecef;
        }

        .form-section:last-child {
            border-bottom: none;
        }

        .form-section-title {
            color: var(--tchad-blue);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .required-asterisk {
            color: var(--tchad-red);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--tchad-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 38, 100, 0.1);
        }

        .form-check-input:checked {
            background-color: var(--tchad-blue);
            border-color: var(--tchad-blue);
        }

        .avatar-preview-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .avatar-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--tchad-gold);
            margin: 0 auto 1rem;
            display: block;
        }

        .avatar-placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0 auto 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            border: none;
            padding: 0.75rem 2rem;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #003d96 0%, var(--tchad-blue) 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 38, 100, 0.3);
        }

        .alert-info {
            background-color: #e7f3ff;
            border-color: var(--tchad-blue);
            color: var(--tchad-blue);
        }

        .form-text {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .roles-container, .access-level-container {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .form-check {
            padding: 0.75rem;
            margin-bottom: 0.5rem;
            background: white;
            border-radius: 0.35rem;
            transition: all 0.2s ease;
        }

        .form-check:hover {
            background: #f0f4ff;
        }

        .form-check-input {
            margin-top: 0.35rem;
        }

        .form-check-label {
            margin-left: 0.5rem;
            font-weight: 500;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 151
        yield "<div class=\"container-fluid px-4\">
    ";
        // line 153
        yield "    <div class=\"page-header\">
        <div class=\"d-flex align-items-center justify-content-between\">
            <div>
                <h1>
                    <i data-lucide=\"user-plus\" style=\"width: 32px; height: 32px; vertical-align: middle;\"></i>
                    Créer un Nouvel Utilisateur
                </h1>
                <p class=\"mb-0\" style=\"opacity: 0.9;\">Ajouter un nouveau membre à votre institution</p>
            </div>
            <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-light\">
                <i data-lucide=\"arrow-left\" style=\"width: 18px; height: 18px;\"></i>
                Retour à la liste
            </a>
        </div>
    </div>

    ";
        // line 170
        yield "    ";
        if ((($tmp = (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 170, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "    <div class=\"alert alert-info mb-4\">
        <div class=\"d-flex align-items-center gap-2\">
            <i data-lucide=\"info\" style=\"width: 20px; height: 20px;\"></i>
            <div>
                <strong>Institution :</strong> ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 175, $this->source); })()), "nom", [], "any", false, false, false, 175), "html", null, true);
            yield "
                ";
            // line 176
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 176, $this->source); })()), "sigle", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 177
                yield "                    (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 177, $this->source); })()), "sigle", [], "any", false, false, false, 177), "html", null, true);
                yield ")
                ";
            }
            // line 179
            yield "                <br>
                <small>L'utilisateur sera automatiquement rattaché à cette institution</small>
            </div>
        </div>
    </div>
    ";
        }
        // line 185
        yield "
    ";
        // line 187
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "flashes", [], "any", false, false, false, 187));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 188
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 189
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "
    ";
        // line 197
        yield "    <div class=\"form-card\">
        ";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
        
        ";
        // line 201
        yield "        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"user\" style=\"width: 20px; height: 20px;\"></i>
                Informations Personnelles
            </h3>
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "firstname", [], "any", false, false, false, 210), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "firstname", [], "any", false, false, false, 212), 'widget');
        yield "
                        ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "firstname", [], "any", false, false, false, 213), 'errors');
        yield "
                        ";
        // line 214
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "firstname", [], "any", false, false, false, 214), "vars", [], "any", false, false, false, 214), "help", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 215
            yield "                            <div class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "firstname", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "help", [], "any", false, false, false, 215), "html", null, true);
            yield "</div>
                        ";
        }
        // line 217
        yield "                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "lastname", [], "any", false, false, false, 221), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "lastname", [], "any", false, false, false, 223), 'widget');
        yield "
                        ";
        // line 224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "lastname", [], "any", false, false, false, 224), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "email", [], "any", false, false, false, 232), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "email", [], "any", false, false, false, 234), 'widget');
        yield "
                        ";
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "email", [], "any", false, false, false, 235), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "phone", [], "any", false, false, false, 240), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "phone", [], "any", false, false, false, 241), 'widget');
        yield "
                        ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "phone", [], "any", false, false, false, 242), 'errors');
        yield "
                        ";
        // line 243
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "phone", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "help", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 244
            yield "                            <div class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "phone", [], "any", false, false, false, 244), "vars", [], "any", false, false, false, 244), "help", [], "any", false, false, false, 244), "html", null, true);
            yield "</div>
                        ";
        }
        // line 246
        yield "                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "address", [], "any", false, false, false, 251), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "address", [], "any", false, false, false, 252), 'widget');
        yield "
                ";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "address", [], "any", false, false, false, 253), 'errors');
        yield "
            </div>

            ";
        // line 257
        yield "            <div class=\"avatar-preview-container\">
                <div class=\"avatar-placeholder\" id=\"avatarPlaceholder\">
                    <i data-lucide=\"user\" style=\"width: 48px; height: 48px;\"></i>
                </div>
                <img src=\"\" alt=\"Preview\" class=\"avatar-preview d-none\" id=\"avatarPreview\">
                ";
        // line 262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "avatarFile", [], "any", false, false, false, 262), 'row');
        yield "
            </div>
        </div>

        ";
        // line 267
        yield "        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"briefcase\" style=\"width: 20px; height: 20px;\"></i>
                Informations Professionnelles
            </h3>

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "matricule", [], "any", false, false, false, 276), 'row');
        yield "
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        ";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "hireDate", [], "any", false, false, false, 281), 'row');
        yield "
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        ";
        // line 286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "department", [], "any", false, false, false, 286), 'row');
        yield "
                    </div>
                </div>
            </div>

            ";
        // line 291
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", true, true, false, 291)) {
            // line 292
            yield "            <div class=\"mb-3\">
                ";
            // line 293
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "institution", [], "any", false, false, false, 293), 'row');
            yield "
            </div>
            ";
        }
        // line 296
        yield "        </div>

        ";
        // line 299
        yield "        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"shield\" style=\"width: 20px; height: 20px;\"></i>
                Sécurité et Accès
            </h3>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "password", [], "any", false, false, false, 308), "first", [], "any", false, false, false, 308), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 310
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "password", [], "any", false, false, false, 310), "first", [], "any", false, false, false, 310), 'widget');
        yield "
                        ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "password", [], "any", false, false, false, 311), "first", [], "any", false, false, false, 311), 'errors');
        yield "
                        ";
        // line 312
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "password", [], "any", false, false, false, 312), "first", [], "any", false, false, false, 312), "vars", [], "any", false, false, false, 312), "help", [], "any", false, false, false, 312)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 313
            yield "                            <div class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "password", [], "any", false, false, false, 313), "first", [], "any", false, false, false, 313), "vars", [], "any", false, false, false, 313), "help", [], "any", false, false, false, 313), "html", null, true);
            yield "</div>
                        ";
        }
        // line 315
        yield "                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "password", [], "any", false, false, false, 319), "second", [], "any", false, false, false, 319), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "password", [], "any", false, false, false, 321), "second", [], "any", false, false, false, 321), 'widget');
        yield "
                        ";
        // line 322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "password", [], "any", false, false, false, 322), "second", [], "any", false, false, false, 322), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "roles", [], "any", false, false, false, 330), "vars", [], "any", false, false, false, 330), "label", [], "any", false, false, false, 330), "html", null, true);
        yield "</label>
                        <div class=\"roles-container\">
                            ";
        // line 332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), "roles", [], "any", false, false, false, 332), 'widget');
        yield "
                            ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "roles", [], "any", false, false, false, 333), 'errors');
        yield "
                            ";
        // line 334
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "roles", [], "any", false, false, false, 334), "vars", [], "any", false, false, false, 334), "help", [], "any", false, false, false, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 335
            yield "                                <div class=\"form-text mt-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "roles", [], "any", false, false, false, 335), "vars", [], "any", false, false, false, 335), "help", [], "any", false, false, false, 335), "html", null, true);
            yield "</div>
                            ";
        }
        // line 337
        yield "                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "accessLevel", [], "any", false, false, false, 342), 'row');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                <div class=\"form-check\">
                    ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "isVerified", [], "any", false, false, false, 349), 'widget');
        yield "
                    ";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "isVerified", [], "any", false, false, false, 350), 'label');
        yield "
                    ";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "isVerified", [], "any", false, false, false, 351), 'errors');
        yield "
                    ";
        // line 352
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "isVerified", [], "any", false, false, false, 352), "vars", [], "any", false, false, false, 352), "help", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 353
            yield "                        <div class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "isVerified", [], "any", false, false, false, 353), "vars", [], "any", false, false, false, 353), "help", [], "any", false, false, false, 353), "html", null, true);
            yield "</div>
                    ";
        }
        // line 355
        yield "                </div>
            </div>
        </div>

        ";
        // line 360
        yield "        <div class=\"form-section\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <a href=\"";
        // line 362
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"x\" style=\"width: 18px; height: 18px;\"></i>
                    Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i data-lucide=\"save\" style=\"width: 18px; height: 18px;\"></i>
                    Créer l'utilisateur
                </button>
            </div>
        </div>

        ";
        // line 373
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 378
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 379
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        // Initialiser Lucide
        lucide.createIcons();

        // Prévisualisation de l'avatar
        const avatarInput = document.querySelector('input[type=\"file\"]');
        const avatarPreview = document.getElementById('avatarPreview');
        const avatarPlaceholder = document.getElementById('avatarPlaceholder');

        if (avatarInput) {
            avatarInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        avatarPreview.src = event.target.result;
                        avatarPreview.classList.remove('d-none');
                        avatarPlaceholder.classList.add('d-none');
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Générer initiales pour le placeholder
        const firstnameInput = document.querySelector('input[name=\"user[firstname]\"]');
        const lastnameInput = document.querySelector('input[name=\"user[lastname]\"]');

        function updatePlaceholder() {
            const firstname = firstnameInput.value.trim();
            const lastname = lastnameInput.value.trim();
            
            if (firstname || lastname) {
                const initials = (firstname.charAt(0) + lastname.charAt(0)).toUpperCase();
                avatarPlaceholder.innerHTML = `<span style=\"font-size: 2.5rem; font-weight: 700;\">\${initials}</span>`;
            } else {
                avatarPlaceholder.innerHTML = '<i data-lucide=\"user\" style=\"width: 48px; height: 48px;\"></i>';
                lucide.createIcons();
            }
        }

        firstnameInput?.addEventListener('input', updatePlaceholder);
        lastnameInput?.addEventListener('input', updatePlaceholder);

        // Validation personnalisée
        const form = document.querySelector('form');
        form?.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires');
            }
        });
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
        return "user/new.html.twig";
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
        return array (  689 => 379,  679 => 378,  667 => 373,  653 => 362,  649 => 360,  643 => 355,  637 => 353,  635 => 352,  631 => 351,  627 => 350,  623 => 349,  613 => 342,  606 => 337,  600 => 335,  598 => 334,  594 => 333,  590 => 332,  585 => 330,  574 => 322,  570 => 321,  565 => 319,  559 => 315,  553 => 313,  551 => 312,  547 => 311,  543 => 310,  538 => 308,  527 => 299,  523 => 296,  517 => 293,  514 => 292,  512 => 291,  504 => 286,  496 => 281,  488 => 276,  477 => 267,  470 => 262,  463 => 257,  457 => 253,  453 => 252,  449 => 251,  442 => 246,  436 => 244,  434 => 243,  430 => 242,  426 => 241,  422 => 240,  414 => 235,  410 => 234,  405 => 232,  394 => 224,  390 => 223,  385 => 221,  379 => 217,  373 => 215,  371 => 214,  367 => 213,  363 => 212,  358 => 210,  347 => 201,  342 => 198,  339 => 197,  336 => 195,  330 => 194,  320 => 190,  315 => 189,  310 => 188,  305 => 187,  302 => 185,  294 => 179,  288 => 177,  286 => 176,  282 => 175,  276 => 171,  273 => 170,  263 => 162,  252 => 153,  249 => 151,  239 => 150,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Utilisateur - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --tchad-blue: #002664;
            --tchad-gold: #FECB00;
            --tchad-red: #C60C30;
        }

        .page-header {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 0.75rem;
        }

        .form-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .form-section {
            padding: 2rem;
            border-bottom: 1px solid #e9ecef;
        }

        .form-section:last-child {
            border-bottom: none;
        }

        .form-section-title {
            color: var(--tchad-blue);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .required-asterisk {
            color: var(--tchad-red);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--tchad-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 38, 100, 0.1);
        }

        .form-check-input:checked {
            background-color: var(--tchad-blue);
            border-color: var(--tchad-blue);
        }

        .avatar-preview-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .avatar-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--tchad-gold);
            margin: 0 auto 1rem;
            display: block;
        }

        .avatar-placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0 auto 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            border: none;
            padding: 0.75rem 2rem;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #003d96 0%, var(--tchad-blue) 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 38, 100, 0.3);
        }

        .alert-info {
            background-color: #e7f3ff;
            border-color: var(--tchad-blue);
            color: var(--tchad-blue);
        }

        .form-text {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .roles-container, .access-level-container {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .form-check {
            padding: 0.75rem;
            margin-bottom: 0.5rem;
            background: white;
            border-radius: 0.35rem;
            transition: all 0.2s ease;
        }

        .form-check:hover {
            background: #f0f4ff;
        }

        .form-check-input {
            margin-top: 0.35rem;
        }

        .form-check-label {
            margin-left: 0.5rem;
            font-weight: 500;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    {# En-tête #}
    <div class=\"page-header\">
        <div class=\"d-flex align-items-center justify-content-between\">
            <div>
                <h1>
                    <i data-lucide=\"user-plus\" style=\"width: 32px; height: 32px; vertical-align: middle;\"></i>
                    Créer un Nouvel Utilisateur
                </h1>
                <p class=\"mb-0\" style=\"opacity: 0.9;\">Ajouter un nouveau membre à votre institution</p>
            </div>
            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-light\">
                <i data-lucide=\"arrow-left\" style=\"width: 18px; height: 18px;\"></i>
                Retour à la liste
            </a>
        </div>
    </div>

    {# Information Institution #}
    {% if institution %}
    <div class=\"alert alert-info mb-4\">
        <div class=\"d-flex align-items-center gap-2\">
            <i data-lucide=\"info\" style=\"width: 20px; height: 20px;\"></i>
            <div>
                <strong>Institution :</strong> {{ institution.nom }}
                {% if institution.sigle %}
                    ({{ institution.sigle }})
                {% endif %}
                <br>
                <small>L'utilisateur sera automatiquement rattaché à cette institution</small>
            </div>
        </div>
    </div>
    {% endif %}

    {# Messages Flash #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {# Formulaire #}
    <div class=\"form-card\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        
        {# Section 1: Informations personnelles #}
        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"user\" style=\"width: 20px; height: 20px;\"></i>
                Informations Personnelles
            </h3>
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        {{ form_label(form.firstname, null, {'label_attr': {'class': 'form-label'}}) }}
                        <span class=\"required-asterisk\">*</span>
                        {{ form_widget(form.firstname) }}
                        {{ form_errors(form.firstname) }}
                        {% if form.firstname.vars.help %}
                            <div class=\"form-text\">{{ form.firstname.vars.help }}</div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        {{ form_label(form.lastname, null, {'label_attr': {'class': 'form-label'}}) }}
                        <span class=\"required-asterisk\">*</span>
                        {{ form_widget(form.lastname) }}
                        {{ form_errors(form.lastname) }}
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        {{ form_label(form.email, null, {'label_attr': {'class': 'form-label'}}) }}
                        <span class=\"required-asterisk\">*</span>
                        {{ form_widget(form.email) }}
                        {{ form_errors(form.email) }}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        {{ form_label(form.phone, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.phone) }}
                        {{ form_errors(form.phone) }}
                        {% if form.phone.vars.help %}
                            <div class=\"form-text\">{{ form.phone.vars.help }}</div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.address, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.address) }}
                {{ form_errors(form.address) }}
            </div>

            {# Avatar #}
            <div class=\"avatar-preview-container\">
                <div class=\"avatar-placeholder\" id=\"avatarPlaceholder\">
                    <i data-lucide=\"user\" style=\"width: 48px; height: 48px;\"></i>
                </div>
                <img src=\"\" alt=\"Preview\" class=\"avatar-preview d-none\" id=\"avatarPreview\">
                {{ form_row(form.avatarFile) }}
            </div>
        </div>

        {# Section 2: Informations professionnelles #}
        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"briefcase\" style=\"width: 20px; height: 20px;\"></i>
                Informations Professionnelles
            </h3>

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        {{ form_row(form.matricule) }}
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        {{ form_row(form.hireDate) }}
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        {{ form_row(form.department) }}
                    </div>
                </div>
            </div>

            {% if form.institution is defined %}
            <div class=\"mb-3\">
                {{ form_row(form.institution) }}
            </div>
            {% endif %}
        </div>

        {# Section 3: Sécurité et accès #}
        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"shield\" style=\"width: 20px; height: 20px;\"></i>
                Sécurité et Accès
            </h3>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        {{ form_label(form.password.first, null, {'label_attr': {'class': 'form-label'}}) }}
                        <span class=\"required-asterisk\">*</span>
                        {{ form_widget(form.password.first) }}
                        {{ form_errors(form.password.first) }}
                        {% if form.password.first.vars.help %}
                            <div class=\"form-text\">{{ form.password.first.vars.help }}</div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        {{ form_label(form.password.second, null, {'label_attr': {'class': 'form-label'}}) }}
                        <span class=\"required-asterisk\">*</span>
                        {{ form_widget(form.password.second) }}
                        {{ form_errors(form.password.second) }}
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">{{ form.roles.vars.label }}</label>
                        <div class=\"roles-container\">
                            {{ form_widget(form.roles) }}
                            {{ form_errors(form.roles) }}
                            {% if form.roles.vars.help %}
                                <div class=\"form-text mt-2\">{{ form.roles.vars.help }}</div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        {{ form_row(form.accessLevel) }}
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                <div class=\"form-check\">
                    {{ form_widget(form.isVerified) }}
                    {{ form_label(form.isVerified) }}
                    {{ form_errors(form.isVerified) }}
                    {% if form.isVerified.vars.help %}
                        <div class=\"form-text\">{{ form.isVerified.vars.help }}</div>
                    {% endif %}
                </div>
            </div>
        </div>

        {# Boutons d'action #}
        <div class=\"form-section\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"x\" style=\"width: 18px; height: 18px;\"></i>
                    Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i data-lucide=\"save\" style=\"width: 18px; height: 18px;\"></i>
                    Créer l'utilisateur
                </button>
            </div>
        </div>

        {{ form_end(form) }}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        // Initialiser Lucide
        lucide.createIcons();

        // Prévisualisation de l'avatar
        const avatarInput = document.querySelector('input[type=\"file\"]');
        const avatarPreview = document.getElementById('avatarPreview');
        const avatarPlaceholder = document.getElementById('avatarPlaceholder');

        if (avatarInput) {
            avatarInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        avatarPreview.src = event.target.result;
                        avatarPreview.classList.remove('d-none');
                        avatarPlaceholder.classList.add('d-none');
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Générer initiales pour le placeholder
        const firstnameInput = document.querySelector('input[name=\"user[firstname]\"]');
        const lastnameInput = document.querySelector('input[name=\"user[lastname]\"]');

        function updatePlaceholder() {
            const firstname = firstnameInput.value.trim();
            const lastname = lastnameInput.value.trim();
            
            if (firstname || lastname) {
                const initials = (firstname.charAt(0) + lastname.charAt(0)).toUpperCase();
                avatarPlaceholder.innerHTML = `<span style=\"font-size: 2.5rem; font-weight: 700;\">\${initials}</span>`;
            } else {
                avatarPlaceholder.innerHTML = '<i data-lucide=\"user\" style=\"width: 48px; height: 48px;\"></i>';
                lucide.createIcons();
            }
        }

        firstnameInput?.addEventListener('input', updatePlaceholder);
        lastnameInput?.addEventListener('input', updatePlaceholder);

        // Validation personnalisée
        const form = document.querySelector('form');
        form?.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires');
            }
        });
    </script>
{% endblock %}
", "user/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\user\\new.html.twig");
    }
}
