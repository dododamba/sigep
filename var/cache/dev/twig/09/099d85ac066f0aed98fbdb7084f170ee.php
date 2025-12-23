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
class __TwigTemplate_75ae8b559f695597eaf158bbc8215685 extends Template
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

        yield "Nouvel utilisateur | Système de pointage";
        
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
        yield "    <style>
        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        .user-avatar-preview {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #4e73df;
            margin: 0 auto;
            display: block;
        }
        
        .roles-checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .roles-checkbox-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            padding: 5px;
            border-radius: 5px;
            transition: all 0.2s;
        }
        
        .roles-checkbox-group label:hover {
            background-color: #f8f9fc;
        }
        
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        
        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }
        
        .info-badge {
            background-color: #36b9cc;
            color: white;
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
            margin-left: 10px;
        }
        
        .account-info-section, .employee-info-section {
            position: relative;
            padding: 20px;
            border-left: 4px solid #4e73df;
            margin-bottom: 20px;
            background-color: #f8f9fc;
            border-radius: 5px;
        }
        
        .employee-info-section {
            border-left: 4px solid #1cc88a;
        }
        
        .section-title {
            position: absolute;
            top: -12px;
            left: 20px;
            background-color: #4e73df;
            color: white;
            padding: 2px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        
        .employee-info-section .section-title {
            background-color: #1cc88a;
        }
        
        #password-strength {
            height: 5px;
            margin-top: 5px;
            background-color: #eee;
            position: relative;
            width: 100%;
        }
        
        #password-strength-bar {
            height: 100%;
            width: 0;
            background-color: #dc3545;
            transition: width 0.3s, background-color 0.3s;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 115
        yield "    <div class=\"container-fluid py-4\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Créer un nouvel utilisateur</h1>
            <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-sm btn-secondary shadow-sm\">
                <i class=\"fas fa-arrow-left fa-sm text-white-50 mr-1\"></i> Retour à la liste
            </a>
        </div>
        
        <!-- Info Alert -->
        <div class=\"alert alert-info shadow-sm mb-4\" role=\"alert\">
            <i class=\"fas fa-info-circle mr-2\"></i>
            <strong>Information:</strong> La création d'un utilisateur entraînera automatiquement la création d'un profil employé associé.
            <hr>
            <p class=\"mb-0 small\">
                <i class=\"fas fa-link mr-1\"></i> Une relation one-to-one sera établie entre l'utilisateur et l'employé.
                Vous pourrez compléter le profil employé ultérieurement.
            </p>
        </div>
        
        <!-- User Form Card -->
        <div class=\"card shadow mb-4 form-container\">
            <div class=\"card-header py-3 d-flex align-items-center\">
                <h6 class=\"m-0 font-weight-bold\"><i class=\"fas fa-user-plus mr-2\"></i>Formulaire d'inscription</h6>
                <span class=\"info-badge ml-auto\"><i class=\"fas fa-clock mr-1\"></i>Date: ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</span>
            </div>
            <div class=\"card-body\">
                ";
        // line 142
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "user-form"]]);
        yield "
                
                <div class=\"row\">
                    <!-- Left Column -->
                    <div class=\"col-lg-8 pe-lg-4\">
                        <!-- Account Information -->
                        <div class=\"account-info-section mb-4\">
                            <div class=\"section-title\">Informations du compte</div>
                            <div class=\"mt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "firstname", [], "any", false, false, false, 153), 'label');
        yield "
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                            ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "firstname", [], "any", false, false, false, 156), 'widget');
        yield "
                                        </div>
                                        ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "firstname", [], "any", false, false, false, 158), 'errors');
        yield "
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "lastname", [], "any", false, false, false, 161), 'label');
        yield "
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                            ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "lastname", [], "any", false, false, false, 164), 'widget');
        yield "
                                        </div>
                                        ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "lastname", [], "any", false, false, false, 166), 'errors');
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "email", [], "any", false, false, false, 171), 'label');
        yield "
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text\"><i class=\"fas fa-envelope\"></i></span>
                                        ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "email", [], "any", false, false, false, 174), 'widget');
        yield "
                                    </div>
                                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "email", [], "any", false, false, false, 176), 'errors');
        yield "
                                    <small class=\"form-text text-muted\">Cet email sera utilisé comme identifiant de connexion et pour le profil employé</small>
                                </div>
                                
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "password", [], "any", false, false, false, 182), "first", [], "any", false, false, false, 182), 'label');
        yield "
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                                            ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "password", [], "any", false, false, false, 185), "first", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control password-field"]]);
        yield "
                                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\">
                                                <i class=\"fas fa-eye\"></i>
                                            </button>
                                        </div>
                                        <div id=\"password-strength\">
                                            <div id=\"password-strength-bar\"></div>
                                        </div>
                                        <small id=\"password-feedback\" class=\"form-text text-muted\">Minimum 8 caractères</small>
                                        ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "password", [], "any", false, false, false, 194), "first", [], "any", false, false, false, 194), 'errors');
        yield "
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "password", [], "any", false, false, false, 197), "second", [], "any", false, false, false, 197), 'label');
        yield "
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                                            ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "password", [], "any", false, false, false, 200), "second", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-control password-field"]]);
        yield "
                                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\">
                                                <i class=\"fas fa-eye\"></i>
                                            </button>
                                        </div>
                                        ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "password", [], "any", false, false, false, 205), "second", [], "any", false, false, false, 205), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Employee Information (Preview) -->
                        <div class=\"employee-info-section\">
                            <div class=\"section-title\">Informations employé (auto-générées)</div>
                            <div class=\"mt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-3\">
                                        <label>Matricule</label>
                                        <input type=\"text\" class=\"form-control\" value=\"EMP-";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "YmdHis"), "html", null, true);
        yield "-XXX\" disabled>
                                        <small class=\"form-text text-muted\">Généré automatiquement</small>
                                    </div>
                                    <div class=\"col-md-4 mb-3\">
                                        <label>Date d'embauche</label>
                                        <input type=\"text\" class=\"form-control\" value=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "\" disabled>
                                        <small class=\"form-text text-muted\">Date du jour</small>
                                    </div>
                                    <div class=\"col-md-4 mb-3\">
                                        <label>Statut initial</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" value=\"Actif\" disabled>
                                            <span class=\"input-group-text bg-success text-white\">
                                                <i class=\"fas fa-check-circle\"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=\"alert alert-secondary small\">
                                    <i class=\"fas fa-info-circle mr-1\"></i> 
                                    Les autres informations de l'employé pourront être complétées ultérieurement 
                                    (service, institution, fonction, etc.).
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class=\"col-lg-4\">
                        <!-- Avatar Upload -->
                        <div class=\"card shadow-sm mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold\">Photo de profil</h6>
                            </div>
                            <div class=\"card-body text-center\">
                                <img src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
        yield "\" alt=\"Photo de profil\" class=\"user-avatar-preview mb-3\" id=\"avatar-preview\">
                                
                                ";
        // line 256
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "avatarFile", [], "any", false, false, false, 256), 'widget', ["attr" => ["class" => "form-control", "id" => "avatar-upload"]]);
        yield "
                                ";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "avatarFile", [], "any", false, false, false, 257), 'errors');
        yield "
                                <small class=\"form-text text-muted\">";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "avatarFile", [], "any", false, false, false, 258), 'help');
        yield "</small>
                            </div>
                        </div>
                        
                        <!-- User Roles -->
                        <div class=\"card shadow-sm mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold\">Rôles utilisateur</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"roles-card\">
                                    ";
        // line 269
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "roles", [], "any", false, false, false, 269), 'widget', ["attr" => ["class" => "roles-checkbox-group"]]);
        yield "
                                    ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "roles", [], "any", false, false, false, 270), 'errors');
        yield "
                                </div>
                                
                                <div class=\"mt-3\">
                                    <div class=\"role-desc mb-2\">
                                        <span class=\"badge bg-info text-white\">Utilisateur</span>
                                        <small class=\"d-block mt-1\">Accès standard au système, permissions limitées</small>
                                    </div>
                                    <div class=\"role-desc mb-2\">
                                        <span class=\"badge bg-primary text-white\">Manager</span>
                                        <small class=\"d-block mt-1\">Gestion des présences, rapports de base</small>
                                    </div>
                                    <div class=\"role-desc\">
                                        <span class=\"badge bg-danger text-white\">Administrateur</span>
                                        <small class=\"d-block mt-1\">Accès complet au système</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-between mt-4 border-top pt-3\">
                    <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-times mr-1\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save mr-1\"></i> Créer l'utilisateur
                    </button>
                </div>
                
                ";
        // line 301
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 308
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Preview image upload
            const avatarUpload = document.getElementById('avatar-upload');
            const avatarPreview = document.getElementById('avatar-preview');
            
            if (avatarUpload && avatarPreview) {
                avatarUpload.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            avatarPreview.src = e.target.result;
                        };
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }
            
            // Toggle password visibility
            const toggleButtons = document.querySelectorAll('.toggle-password');
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const passwordField = this.previousElementSibling;
                    const icon = this.querySelector('i');
                    
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        passwordField.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
            
            // Password strength checker
            const passwordField = document.querySelector('.password-field');
            const strengthBar = document.getElementById('password-strength-bar');
            const feedback = document.getElementById('password-feedback');
            
            if (passwordField && strengthBar) {
                passwordField.addEventListener('input', function() {
                    const password = this.value;
                    let strength = 0;
                    
                    if (password.length >= 8) strength += 25;
                    if (password.match(/[A-Z]/)) strength += 25;
                    if (password.match(/[0-9]/)) strength += 25;
                    if (password.match(/[^A-Za-z0-9]/)) strength += 25;
                    
                    strengthBar.style.width = strength + '%';
                    
                    if (strength < 25) {
                        strengthBar.style.backgroundColor = '#dc3545'; // Red
                        feedback.textContent = 'Mot de passe très faible';
                        feedback.style.color = '#dc3545';
                    } else if (strength < 50) {
                        strengthBar.style.backgroundColor = '#ffc107'; // Yellow
                        feedback.textContent = 'Mot de passe faible';
                        feedback.style.color = '#ffc107';
                    } else if (strength < 75) {
                        strengthBar.style.backgroundColor = '#17a2b8'; // Teal
                        feedback.textContent = 'Mot de passe moyen';
                        feedback.style.color = '#17a2b8';
                    } else {
                        strengthBar.style.backgroundColor = '#28a745'; // Green
                        feedback.textContent = 'Mot de passe fort';
                        feedback.style.color = '#28a745';
                    }
                });
            }
            
            // Form validation
            const form = document.getElementById('user-form');
            if (form) {
                form.addEventListener('submit', function(event) {
                    if (!this.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    this.classList.add('was-validated');
                });
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
        return array (  503 => 308,  493 => 307,  480 => 301,  469 => 293,  443 => 270,  439 => 269,  425 => 258,  421 => 257,  417 => 256,  412 => 254,  378 => 223,  370 => 218,  354 => 205,  346 => 200,  340 => 197,  334 => 194,  322 => 185,  316 => 182,  307 => 176,  302 => 174,  296 => 171,  288 => 166,  283 => 164,  277 => 161,  271 => 158,  266 => 156,  260 => 153,  246 => 142,  240 => 139,  217 => 119,  211 => 115,  201 => 114,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel utilisateur | Système de pointage{% endblock %}

{% block stylesheets %}
    <style>
        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        .user-avatar-preview {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #4e73df;
            margin: 0 auto;
            display: block;
        }
        
        .roles-checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .roles-checkbox-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            padding: 5px;
            border-radius: 5px;
            transition: all 0.2s;
        }
        
        .roles-checkbox-group label:hover {
            background-color: #f8f9fc;
        }
        
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        
        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }
        
        .info-badge {
            background-color: #36b9cc;
            color: white;
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
            margin-left: 10px;
        }
        
        .account-info-section, .employee-info-section {
            position: relative;
            padding: 20px;
            border-left: 4px solid #4e73df;
            margin-bottom: 20px;
            background-color: #f8f9fc;
            border-radius: 5px;
        }
        
        .employee-info-section {
            border-left: 4px solid #1cc88a;
        }
        
        .section-title {
            position: absolute;
            top: -12px;
            left: 20px;
            background-color: #4e73df;
            color: white;
            padding: 2px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        
        .employee-info-section .section-title {
            background-color: #1cc88a;
        }
        
        #password-strength {
            height: 5px;
            margin-top: 5px;
            background-color: #eee;
            position: relative;
            width: 100%;
        }
        
        #password-strength-bar {
            height: 100%;
            width: 0;
            background-color: #dc3545;
            transition: width 0.3s, background-color 0.3s;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Créer un nouvel utilisateur</h1>
            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-sm btn-secondary shadow-sm\">
                <i class=\"fas fa-arrow-left fa-sm text-white-50 mr-1\"></i> Retour à la liste
            </a>
        </div>
        
        <!-- Info Alert -->
        <div class=\"alert alert-info shadow-sm mb-4\" role=\"alert\">
            <i class=\"fas fa-info-circle mr-2\"></i>
            <strong>Information:</strong> La création d'un utilisateur entraînera automatiquement la création d'un profil employé associé.
            <hr>
            <p class=\"mb-0 small\">
                <i class=\"fas fa-link mr-1\"></i> Une relation one-to-one sera établie entre l'utilisateur et l'employé.
                Vous pourrez compléter le profil employé ultérieurement.
            </p>
        </div>
        
        <!-- User Form Card -->
        <div class=\"card shadow mb-4 form-container\">
            <div class=\"card-header py-3 d-flex align-items-center\">
                <h6 class=\"m-0 font-weight-bold\"><i class=\"fas fa-user-plus mr-2\"></i>Formulaire d'inscription</h6>
                <span class=\"info-badge ml-auto\"><i class=\"fas fa-clock mr-1\"></i>Date: {{ \"now\"|date(\"d/m/Y\") }}</span>
            </div>
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'id': 'user-form'}}) }}
                
                <div class=\"row\">
                    <!-- Left Column -->
                    <div class=\"col-lg-8 pe-lg-4\">
                        <!-- Account Information -->
                        <div class=\"account-info-section mb-4\">
                            <div class=\"section-title\">Informations du compte</div>
                            <div class=\"mt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        {{ form_label(form.firstname) }}
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                            {{ form_widget(form.firstname) }}
                                        </div>
                                        {{ form_errors(form.firstname) }}
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        {{ form_label(form.lastname) }}
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                            {{ form_widget(form.lastname) }}
                                        </div>
                                        {{ form_errors(form.lastname) }}
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    {{ form_label(form.email) }}
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text\"><i class=\"fas fa-envelope\"></i></span>
                                        {{ form_widget(form.email) }}
                                    </div>
                                    {{ form_errors(form.email) }}
                                    <small class=\"form-text text-muted\">Cet email sera utilisé comme identifiant de connexion et pour le profil employé</small>
                                </div>
                                
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        {{ form_label(form.password.first) }}
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                                            {{ form_widget(form.password.first, {'attr': {'class': 'form-control password-field'}}) }}
                                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\">
                                                <i class=\"fas fa-eye\"></i>
                                            </button>
                                        </div>
                                        <div id=\"password-strength\">
                                            <div id=\"password-strength-bar\"></div>
                                        </div>
                                        <small id=\"password-feedback\" class=\"form-text text-muted\">Minimum 8 caractères</small>
                                        {{ form_errors(form.password.first) }}
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        {{ form_label(form.password.second) }}
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                                            {{ form_widget(form.password.second, {'attr': {'class': 'form-control password-field'}}) }}
                                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\">
                                                <i class=\"fas fa-eye\"></i>
                                            </button>
                                        </div>
                                        {{ form_errors(form.password.second) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Employee Information (Preview) -->
                        <div class=\"employee-info-section\">
                            <div class=\"section-title\">Informations employé (auto-générées)</div>
                            <div class=\"mt-3\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-3\">
                                        <label>Matricule</label>
                                        <input type=\"text\" class=\"form-control\" value=\"EMP-{{ \"now\"|date(\"YmdHis\") }}-XXX\" disabled>
                                        <small class=\"form-text text-muted\">Généré automatiquement</small>
                                    </div>
                                    <div class=\"col-md-4 mb-3\">
                                        <label>Date d'embauche</label>
                                        <input type=\"text\" class=\"form-control\" value=\"{{ \"now\"|date(\"d/m/Y\") }}\" disabled>
                                        <small class=\"form-text text-muted\">Date du jour</small>
                                    </div>
                                    <div class=\"col-md-4 mb-3\">
                                        <label>Statut initial</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" value=\"Actif\" disabled>
                                            <span class=\"input-group-text bg-success text-white\">
                                                <i class=\"fas fa-check-circle\"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=\"alert alert-secondary small\">
                                    <i class=\"fas fa-info-circle mr-1\"></i> 
                                    Les autres informations de l'employé pourront être complétées ultérieurement 
                                    (service, institution, fonction, etc.).
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class=\"col-lg-4\">
                        <!-- Avatar Upload -->
                        <div class=\"card shadow-sm mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold\">Photo de profil</h6>
                            </div>
                            <div class=\"card-body text-center\">
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Photo de profil\" class=\"user-avatar-preview mb-3\" id=\"avatar-preview\">
                                
                                {{ form_widget(form.avatarFile, {'attr': {'class': 'form-control', 'id': 'avatar-upload'}}) }}
                                {{ form_errors(form.avatarFile) }}
                                <small class=\"form-text text-muted\">{{ form_help(form.avatarFile) }}</small>
                            </div>
                        </div>
                        
                        <!-- User Roles -->
                        <div class=\"card shadow-sm mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold\">Rôles utilisateur</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"roles-card\">
                                    {{ form_widget(form.roles, {'attr': {'class': 'roles-checkbox-group'}}) }}
                                    {{ form_errors(form.roles) }}
                                </div>
                                
                                <div class=\"mt-3\">
                                    <div class=\"role-desc mb-2\">
                                        <span class=\"badge bg-info text-white\">Utilisateur</span>
                                        <small class=\"d-block mt-1\">Accès standard au système, permissions limitées</small>
                                    </div>
                                    <div class=\"role-desc mb-2\">
                                        <span class=\"badge bg-primary text-white\">Manager</span>
                                        <small class=\"d-block mt-1\">Gestion des présences, rapports de base</small>
                                    </div>
                                    <div class=\"role-desc\">
                                        <span class=\"badge bg-danger text-white\">Administrateur</span>
                                        <small class=\"d-block mt-1\">Accès complet au système</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-between mt-4 border-top pt-3\">
                    <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-times mr-1\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save mr-1\"></i> Créer l'utilisateur
                    </button>
                </div>
                
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Preview image upload
            const avatarUpload = document.getElementById('avatar-upload');
            const avatarPreview = document.getElementById('avatar-preview');
            
            if (avatarUpload && avatarPreview) {
                avatarUpload.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            avatarPreview.src = e.target.result;
                        };
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }
            
            // Toggle password visibility
            const toggleButtons = document.querySelectorAll('.toggle-password');
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const passwordField = this.previousElementSibling;
                    const icon = this.querySelector('i');
                    
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        passwordField.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
            
            // Password strength checker
            const passwordField = document.querySelector('.password-field');
            const strengthBar = document.getElementById('password-strength-bar');
            const feedback = document.getElementById('password-feedback');
            
            if (passwordField && strengthBar) {
                passwordField.addEventListener('input', function() {
                    const password = this.value;
                    let strength = 0;
                    
                    if (password.length >= 8) strength += 25;
                    if (password.match(/[A-Z]/)) strength += 25;
                    if (password.match(/[0-9]/)) strength += 25;
                    if (password.match(/[^A-Za-z0-9]/)) strength += 25;
                    
                    strengthBar.style.width = strength + '%';
                    
                    if (strength < 25) {
                        strengthBar.style.backgroundColor = '#dc3545'; // Red
                        feedback.textContent = 'Mot de passe très faible';
                        feedback.style.color = '#dc3545';
                    } else if (strength < 50) {
                        strengthBar.style.backgroundColor = '#ffc107'; // Yellow
                        feedback.textContent = 'Mot de passe faible';
                        feedback.style.color = '#ffc107';
                    } else if (strength < 75) {
                        strengthBar.style.backgroundColor = '#17a2b8'; // Teal
                        feedback.textContent = 'Mot de passe moyen';
                        feedback.style.color = '#17a2b8';
                    } else {
                        strengthBar.style.backgroundColor = '#28a745'; // Green
                        feedback.textContent = 'Mot de passe fort';
                        feedback.style.color = '#28a745';
                    }
                });
            }
            
            // Form validation
            const form = document.getElementById('user-form');
            if (form) {
                form.addEventListener('submit', function(event) {
                    if (!this.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    this.classList.add('was-validated');
                });
            }
        });
    </script>
{% endblock %}", "user/new.html.twig", "/home/xdevcorp/Projects/sigep/templates/user/new.html.twig");
    }
}
