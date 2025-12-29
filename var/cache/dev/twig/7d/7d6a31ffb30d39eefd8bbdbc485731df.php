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

/* user/edit.html.twig */
class __TwigTemplate_91842c4a8c8f24a29b93e5c6589e248d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

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

        yield "Modifier l'Utilisateur - SIGEP Tchad";
        
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

        .user-info-banner {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            border-left: 4px solid var(--tchad-gold);
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

        .avatar-section {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .current-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--tchad-gold);
            margin: 0 auto 1rem;
            display: block;
        }

        .avatar-initials {
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

        .avatar-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--tchad-gold);
            margin: 0 auto 1rem;
            display: block;
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

        .alert-warning {
            background-color: #fff8e1;
            border-color: var(--tchad-gold);
            color: #856404;
        }

        .form-text {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .roles-container {
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

        .user-meta-info {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .user-meta-item {
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 188
        yield "<div class=\"container-fluid px-4\">
    ";
        // line 190
        yield "    <div class=\"page-header\">
        <div class=\"d-flex align-items-center justify-content-between\">
            <div>
                <h1>
                    <i data-lucide=\"user-cog\" style=\"width: 32px; height: 32px; vertical-align: middle;\"></i>
                    Modifier l'Utilisateur
                </h1>
                <p class=\"mb-0\" style=\"opacity: 0.9;\">Mettre à jour les informations du compte</p>
            </div>
            <div>
                <a href=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200)]), "html", null, true);
        yield "\" class=\"btn btn-outline-light me-2\">
                    <i data-lucide=\"eye\" style=\"width: 18px; height: 18px;\"></i>
                    Voir le profil
                </a>
                <a href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-light\">
                    <i data-lucide=\"arrow-left\" style=\"width: 18px; height: 18px;\"></i>
                    Retour
                </a>
            </div>
        </div>
    </div>

    ";
        // line 213
        yield "    <div class=\"user-info-banner\">
        <div class=\"d-flex align-items-center justify-content-between\">
            <div class=\"d-flex align-items-center gap-3\">
                ";
        // line 216
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "avatar", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 217
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "avatar", [], "any", false, false, false, 217))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "fullName", [], "any", false, false, false, 217), "html", null, true);
            yield "\" style=\"width: 60px; height: 60px; border-radius: 50%; border: 3px solid var(--tchad-gold);\">
                ";
        } else {
            // line 219
            yield "                    <div style=\"width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.5rem;\">
                        ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 220, $this->source); })()), "initials", [], "any", false, false, false, 220), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 223
        yield "                <div>
                    <h4 class=\"mb-1\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "fullName", [], "any", false, false, false, 224), "html", null, true);
        yield "</h4>
                    <div class=\"user-meta-info\">
                        <div class=\"user-meta-item\">
                            <i data-lucide=\"mail\" style=\"width: 16px; height: 16px;\"></i>
                            ";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "email", [], "any", false, false, false, 228), "html", null, true);
        yield "
                        </div>
                        ";
        // line 230
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 230, $this->source); })()), "matricule", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 231
            yield "                        <div class=\"user-meta-item\">
                            <i data-lucide=\"hash\" style=\"width: 16px; height: 16px;\"></i>
                            ";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 233, $this->source); })()), "matricule", [], "any", false, false, false, 233), "html", null, true);
            yield "
                        </div>
                        ";
        }
        // line 236
        yield "                        <div class=\"user-meta-item\">
                            <i data-lucide=\"calendar\" style=\"width: 16px; height: 16px;\"></i>
                            Créé le ";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 238, $this->source); })()), "createdAt", [], "any", false, false, false, 238), "d/m/Y"), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <span class=\"badge ";
        // line 244
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 244, $this->source); })()), "isVerified", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-warning"));
        yield " fs-6\">
                    <i data-lucide=\"";
        // line 245
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 245, $this->source); })()), "isVerified", [], "any", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "check-circle";
        } else {
            yield "clock";
        }
        yield "\" style=\"width: 16px; height: 16px;\"></i>
                    ";
        // line 246
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 246, $this->source); })()), "isVerified", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vérifié") : ("En attente"));
        yield "
                </span>
            </div>
        </div>
    </div>

    ";
        // line 253
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "flashes", [], "any", false, false, false, 253));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 254
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 255
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                <i data-lucide=\"";
                // line 256
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "error")) {
                    yield "x-circle";
                } else {
                    yield "info";
                }
                yield "\" style=\"width: 20px; height: 20px;\"></i>
                ";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "
    ";
        // line 264
        yield "    <div class=\"alert alert-warning mb-4\">
        <div class=\"d-flex align-items-start gap-2\">
            <i data-lucide=\"alert-circle\" style=\"width: 20px; height: 20px; margin-top: 2px;\"></i>
            <div>
                <strong>Note sur le mot de passe :</strong>
                <br>Laissez les champs de mot de passe vides pour conserver le mot de passe actuel.
                Remplissez-les uniquement si vous souhaitez changer le mot de passe.
            </div>
        </div>
    </div>

    ";
        // line 276
        yield "    <div class=\"form-card\">
        ";
        // line 277
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
        
        ";
        // line 280
        yield "        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"user\" style=\"width: 20px; height: 20px;\"></i>
                Informations Personnelles
            </h3>
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 289
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "firstname", [], "any", false, false, false, 289), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "firstname", [], "any", false, false, false, 291), 'widget');
        yield "
                        ";
        // line 292
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "firstname", [], "any", false, false, false, 292), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 297
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "lastname", [], "any", false, false, false, 297), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 299
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "lastname", [], "any", false, false, false, 299), 'widget');
        yield "
                        ";
        // line 300
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "lastname", [], "any", false, false, false, 300), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "email", [], "any", false, false, false, 308), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <span class=\"required-asterisk\">*</span>
                        ";
        // line 310
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "email", [], "any", false, false, false, 310), 'widget');
        yield "
                        ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "email", [], "any", false, false, false, 311), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "phone", [], "any", false, false, false, 316), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "phone", [], "any", false, false, false, 317), 'widget');
        yield "
                        ";
        // line 318
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "phone", [], "any", false, false, false, 318), 'errors');
        yield "
                        ";
        // line 319
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "phone", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "help", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 320
            yield "                            <div class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "phone", [], "any", false, false, false, 320), "vars", [], "any", false, false, false, 320), "help", [], "any", false, false, false, 320), "html", null, true);
            yield "</div>
                        ";
        }
        // line 322
        yield "                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "address", [], "any", false, false, false, 327), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 328
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "address", [], "any", false, false, false, 328), 'widget');
        yield "
                ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "address", [], "any", false, false, false, 329), 'errors');
        yield "
            </div>

            ";
        // line 333
        yield "            <div class=\"avatar-section\">
                ";
        // line 334
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 334, $this->source); })()), "avatar", [], "any", false, false, false, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 335
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 335, $this->source); })()), "avatar", [], "any", false, false, false, 335))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 336, $this->source); })()), "fullName", [], "any", false, false, false, 336), "html", null, true);
            yield "\" 
                         class=\"current-avatar\" 
                         id=\"currentAvatar\">
                ";
        } else {
            // line 340
            yield "                    <div class=\"avatar-initials\" id=\"currentAvatar\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 340, $this->source); })()), "initials", [], "any", false, false, false, 340), "html", null, true);
            yield "</div>
                ";
        }
        // line 342
        yield "                <img src=\"\" alt=\"Nouvelle image\" class=\"avatar-preview d-none\" id=\"avatarPreview\">
                ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "avatarFile", [], "any", false, false, false, 343), 'row');
        yield "
                <small class=\"text-muted\">Téléchargez une nouvelle photo pour remplacer l'actuelle</small>
            </div>
        </div>

        ";
        // line 349
        yield "        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"briefcase\" style=\"width: 20px; height: 20px;\"></i>
                Informations Professionnelles
            </h3>

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "matricule", [], "any", false, false, false, 358), 'row');
        yield "
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "hireDate", [], "any", false, false, false, 363), 'row');
        yield "
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mb-3\">
                        ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "department", [], "any", false, false, false, 368), 'row');
        yield "
                    </div>
                </div>
            </div>

            ";
        // line 373
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", true, true, false, 373)) {
            // line 374
            yield "            <div class=\"mb-3\">
                ";
            // line 375
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "institution", [], "any", false, false, false, 375), 'row');
            yield "
            </div>
            ";
        }
        // line 378
        yield "        </div>

        ";
        // line 381
        yield "        <div class=\"form-section\">
            <h3 class=\"form-section-title\">
                <i data-lucide=\"shield\" style=\"width: 20px; height: 20px;\"></i>
                Sécurité et Accès
            </h3>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "password", [], "any", false, false, false, 390), "first", [], "any", false, false, false, 390), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 391
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "password", [], "any", false, false, false, 391), "first", [], "any", false, false, false, 391), 'widget');
        yield "
                        ";
        // line 392
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), "password", [], "any", false, false, false, 392), "first", [], "any", false, false, false, 392), 'errors');
        yield "
                        ";
        // line 393
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "password", [], "any", false, false, false, 393), "first", [], "any", false, false, false, 393), "vars", [], "any", false, false, false, 393), "help", [], "any", false, false, false, 393)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 394
            yield "                            <div class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "password", [], "any", false, false, false, 394), "first", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "help", [], "any", false, false, false, 394), "html", null, true);
            yield "</div>
                        ";
        }
        // line 396
        yield "                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "password", [], "any", false, false, false, 400), "second", [], "any", false, false, false, 400), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "password", [], "any", false, false, false, 401), "second", [], "any", false, false, false, 401), 'widget');
        yield "
                        ";
        // line 402
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "password", [], "any", false, false, false, 402), "second", [], "any", false, false, false, 402), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "roles", [], "any", false, false, false, 410), "vars", [], "any", false, false, false, 410), "label", [], "any", false, false, false, 410), "html", null, true);
        yield "</label>
                        <div class=\"roles-container\">
                            ";
        // line 412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "roles", [], "any", false, false, false, 412), 'widget');
        yield "
                            ";
        // line 413
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "roles", [], "any", false, false, false, 413), 'errors');
        yield "
                            ";
        // line 414
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "roles", [], "any", false, false, false, 414), "vars", [], "any", false, false, false, 414), "help", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 415
            yield "                                <div class=\"form-text mt-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 415, $this->source); })()), "roles", [], "any", false, false, false, 415), "vars", [], "any", false, false, false, 415), "help", [], "any", false, false, false, 415), "html", null, true);
            yield "</div>
                            ";
        }
        // line 417
        yield "                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        ";
        // line 422
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "accessLevel", [], "any", false, false, false, 422), 'row');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                <div class=\"form-check\">
                    ";
        // line 429
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 429, $this->source); })()), "isVerified", [], "any", false, false, false, 429), 'widget');
        yield "
                    ";
        // line 430
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "isVerified", [], "any", false, false, false, 430), 'label');
        yield "
                    ";
        // line 431
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "isVerified", [], "any", false, false, false, 431), 'errors');
        yield "
                    ";
        // line 432
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "isVerified", [], "any", false, false, false, 432), "vars", [], "any", false, false, false, 432), "help", [], "any", false, false, false, 432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 433
            yield "                        <div class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), "isVerified", [], "any", false, false, false, 433), "vars", [], "any", false, false, false, 433), "help", [], "any", false, false, false, 433), "html", null, true);
            yield "</div>
                    ";
        }
        // line 435
        yield "                </div>
            </div>
        </div>

        ";
        // line 440
        yield "        <div class=\"form-section\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <a href=\"";
        // line 442
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i data-lucide=\"x\" style=\"width: 18px; height: 18px;\"></i>
                    Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i data-lucide=\"save\" style=\"width: 18px; height: 18px;\"></i>
                    Enregistrer les modifications
                </button>
            </div>
        </div>

        ";
        // line 453
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 458
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 459
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
        const currentAvatar = document.getElementById('currentAvatar');

        if (avatarInput) {
            avatarInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        avatarPreview.src = event.target.result;
                        avatarPreview.classList.remove('d-none');
                        currentAvatar.classList.add('d-none');
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Validation personnalisée
        const form = document.querySelector('form');
        form?.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (field.type !== 'password' && !field.value.trim()) {
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

            // Vérifier que les mots de passe correspondent s'ils sont remplis
            const password1 = form.querySelector('[name=\"user[password][first]\"]');
            const password2 = form.querySelector('[name=\"user[password][second]\"]');
            
            if (password1.value && password2.value && password1.value !== password2.value) {
                e.preventDefault();
                alert('Les mots de passe ne correspondent pas');
                password1.classList.add('is-invalid');
                password2.classList.add('is-invalid');
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
        return "user/edit.html.twig";
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
        return array (  819 => 459,  809 => 458,  797 => 453,  783 => 442,  779 => 440,  773 => 435,  767 => 433,  765 => 432,  761 => 431,  757 => 430,  753 => 429,  743 => 422,  736 => 417,  730 => 415,  728 => 414,  724 => 413,  720 => 412,  715 => 410,  704 => 402,  700 => 401,  696 => 400,  690 => 396,  684 => 394,  682 => 393,  678 => 392,  674 => 391,  670 => 390,  659 => 381,  655 => 378,  649 => 375,  646 => 374,  644 => 373,  636 => 368,  628 => 363,  620 => 358,  609 => 349,  601 => 343,  598 => 342,  592 => 340,  585 => 336,  580 => 335,  578 => 334,  575 => 333,  569 => 329,  565 => 328,  561 => 327,  554 => 322,  548 => 320,  546 => 319,  542 => 318,  538 => 317,  534 => 316,  526 => 311,  522 => 310,  517 => 308,  506 => 300,  502 => 299,  497 => 297,  489 => 292,  485 => 291,  480 => 289,  469 => 280,  464 => 277,  461 => 276,  448 => 264,  445 => 262,  439 => 261,  429 => 257,  419 => 256,  414 => 255,  409 => 254,  404 => 253,  395 => 246,  387 => 245,  383 => 244,  374 => 238,  370 => 236,  364 => 233,  360 => 231,  358 => 230,  353 => 228,  346 => 224,  343 => 223,  337 => 220,  334 => 219,  326 => 217,  324 => 216,  319 => 213,  308 => 204,  301 => 200,  289 => 190,  286 => 188,  276 => 187,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'Utilisateur - SIGEP Tchad{% endblock %}

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

        .user-info-banner {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            border-left: 4px solid var(--tchad-gold);
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

        .avatar-section {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .current-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--tchad-gold);
            margin: 0 auto 1rem;
            display: block;
        }

        .avatar-initials {
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

        .avatar-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--tchad-gold);
            margin: 0 auto 1rem;
            display: block;
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

        .alert-warning {
            background-color: #fff8e1;
            border-color: var(--tchad-gold);
            color: #856404;
        }

        .form-text {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .roles-container {
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

        .user-meta-info {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .user-meta-item {
            display: flex;
            align-items: center;
            gap: 0.35rem;
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
                    <i data-lucide=\"user-cog\" style=\"width: 32px; height: 32px; vertical-align: middle;\"></i>
                    Modifier l'Utilisateur
                </h1>
                <p class=\"mb-0\" style=\"opacity: 0.9;\">Mettre à jour les informations du compte</p>
            </div>
            <div>
                <a href=\"{{ path('app_user_show', {id: user.id}) }}\" class=\"btn btn-outline-light me-2\">
                    <i data-lucide=\"eye\" style=\"width: 18px; height: 18px;\"></i>
                    Voir le profil
                </a>
                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-light\">
                    <i data-lucide=\"arrow-left\" style=\"width: 18px; height: 18px;\"></i>
                    Retour
                </a>
            </div>
        </div>
    </div>

    {# Bannière d'information utilisateur #}
    <div class=\"user-info-banner\">
        <div class=\"d-flex align-items-center justify-content-between\">
            <div class=\"d-flex align-items-center gap-3\">
                {% if user.avatar %}
                    <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" alt=\"{{ user.fullName }}\" style=\"width: 60px; height: 60px; border-radius: 50%; border: 3px solid var(--tchad-gold);\">
                {% else %}
                    <div style=\"width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.5rem;\">
                        {{ user.initials }}
                    </div>
                {% endif %}
                <div>
                    <h4 class=\"mb-1\">{{ user.fullName }}</h4>
                    <div class=\"user-meta-info\">
                        <div class=\"user-meta-item\">
                            <i data-lucide=\"mail\" style=\"width: 16px; height: 16px;\"></i>
                            {{ user.email }}
                        </div>
                        {% if user.matricule %}
                        <div class=\"user-meta-item\">
                            <i data-lucide=\"hash\" style=\"width: 16px; height: 16px;\"></i>
                            {{ user.matricule }}
                        </div>
                        {% endif %}
                        <div class=\"user-meta-item\">
                            <i data-lucide=\"calendar\" style=\"width: 16px; height: 16px;\"></i>
                            Créé le {{ user.createdAt|date('d/m/Y') }}
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <span class=\"badge {{ user.isVerified ? 'bg-success' : 'bg-warning' }} fs-6\">
                    <i data-lucide=\"{% if user.isVerified %}check-circle{% else %}clock{% endif %}\" style=\"width: 16px; height: 16px;\"></i>
                    {{ user.isVerified ? 'Vérifié' : 'En attente' }}
                </span>
            </div>
        </div>
    </div>

    {# Messages Flash #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                <i data-lucide=\"{% if label == 'success' %}check-circle{% elseif label == 'error' %}x-circle{% else %}info{% endif %}\" style=\"width: 20px; height: 20px;\"></i>
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {# Alert pour le mot de passe #}
    <div class=\"alert alert-warning mb-4\">
        <div class=\"d-flex align-items-start gap-2\">
            <i data-lucide=\"alert-circle\" style=\"width: 20px; height: 20px; margin-top: 2px;\"></i>
            <div>
                <strong>Note sur le mot de passe :</strong>
                <br>Laissez les champs de mot de passe vides pour conserver le mot de passe actuel.
                Remplissez-les uniquement si vous souhaitez changer le mot de passe.
            </div>
        </div>
    </div>

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
            <div class=\"avatar-section\">
                {% if user.avatar %}
                    <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" 
                         alt=\"{{ user.fullName }}\" 
                         class=\"current-avatar\" 
                         id=\"currentAvatar\">
                {% else %}
                    <div class=\"avatar-initials\" id=\"currentAvatar\">{{ user.initials }}</div>
                {% endif %}
                <img src=\"\" alt=\"Nouvelle image\" class=\"avatar-preview d-none\" id=\"avatarPreview\">
                {{ form_row(form.avatarFile) }}
                <small class=\"text-muted\">Téléchargez une nouvelle photo pour remplacer l'actuelle</small>
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
                    Enregistrer les modifications
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
        const currentAvatar = document.getElementById('currentAvatar');

        if (avatarInput) {
            avatarInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        avatarPreview.src = event.target.result;
                        avatarPreview.classList.remove('d-none');
                        currentAvatar.classList.add('d-none');
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Validation personnalisée
        const form = document.querySelector('form');
        form?.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (field.type !== 'password' && !field.value.trim()) {
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

            // Vérifier que les mots de passe correspondent s'ils sont remplis
            const password1 = form.querySelector('[name=\"user[password][first]\"]');
            const password2 = form.querySelector('[name=\"user[password][second]\"]');
            
            if (password1.value && password2.value && password1.value !== password2.value) {
                e.preventDefault();
                alert('Les mots de passe ne correspondent pas');
                password1.classList.add('is-invalid');
                password2.classList.add('is-invalid');
            }
        });
    </script>
{% endblock %}
", "user/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\user\\edit.html.twig");
    }
}
