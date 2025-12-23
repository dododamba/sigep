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
class __TwigTemplate_b58d323c53c85d09753aa0015ab6aa0c extends Template
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

        yield "Modifier l'utilisateur";
        
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
        .edit-container {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .form-section {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #dee2e6;
        }
        
        .form-section:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        
        .section-title {
            margin-bottom: 1.5rem;
            font-weight: 600;
            color: #212529;
        }
        
        .section-icon {
            margin-right: 0.5rem;
            color: #0d6efd;
        }
        
        .preview-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 1rem;
            border: 3px solid #dee2e6;
        }
        
        .preview-avatar-placeholder {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #6c757d;
            color: white;
            font-size: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
            border: 3px solid #dee2e6;
        }
        
        .roles-checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .employee-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1rem;
        }
        
        .form-help-text {
            font-size: 0.875rem;
            color: #6c757d;
            margin-top: 0.25rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"display-6\">";
        // line 84
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvel"));
        yield " utilisateur</h1>
            <div>
                <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                ";
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\">
                    <i class=\"fas fa-eye\"></i> Voir détails
                </a>
                ";
        }
        // line 94
        yield "            </div>
        </div>
        
        ";
        // line 98
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 99
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 100
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "        
        ";
        // line 108
        yield "        <div class=\"edit-container\">
            ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"form-section\">
                <h4 class=\"section-title\">
                    <i class=\"fas fa-user section-icon\"></i> Informations de base
                </h4>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), 'label');
        yield "
                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "email", [], "any", false, false, false, 119), 'widget');
        yield "
                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, false, 120), 'errors');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "roles", [], "any", false, false, false, 124), 'label');
        yield "
                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "roles", [], "any", false, false, false, 125), 'widget');
        yield "
                        ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "roles", [], "any", false, false, false, 126), 'errors');
        yield "
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "firstname", [], "any", false, false, false, 132), 'label');
        yield "
                        ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "firstname", [], "any", false, false, false, 133), 'widget');
        yield "
                        ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "firstname", [], "any", false, false, false, 134), 'errors');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "lastname", [], "any", false, false, false, 138), 'label');
        yield "
                        ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "lastname", [], "any", false, false, false, 139), 'widget');
        yield "
                        ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "lastname", [], "any", false, false, false, 140), 'errors');
        yield "
                    </div>
                </div>
            </div>
            
            <div class=\"form-section\">
                <h4 class=\"section-title\">
                    <i class=\"fas fa-lock section-icon\"></i> Sécurité
                </h4>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "password", [], "any", false, false, false, 152), "first", [], "any", false, false, false, 152), 'label');
        yield "
                        ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "password", [], "any", false, false, false, 153), "first", [], "any", false, false, false, 153), 'widget');
        yield "
                        ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "password", [], "any", false, false, false, 154), "first", [], "any", false, false, false, 154), 'errors');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "password", [], "any", false, false, false, 158), "second", [], "any", false, false, false, 158), 'label');
        yield "
                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "password", [], "any", false, false, false, 159), "second", [], "any", false, false, false, 159), 'widget');
        yield "
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "password", [], "any", false, false, false, 160), "second", [], "any", false, false, false, 160), 'errors');
        yield "
                    </div>
                </div>
                
                ";
        // line 164
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "                    <div class=\"form-help-text\">
                        <i class=\"fas fa-info-circle\"></i> Laissez les champs vides pour conserver le mot de passe actuel.
                    </div>
                ";
        }
        // line 169
        yield "            </div>
            
            <div class=\"form-section\">
                <h4 class=\"section-title\">
                    <i class=\"fas fa-image section-icon\"></i> Photo de profil
                </h4>
                
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "avatarFile", [], "any", false, false, false, 178), 'label');
        yield "
                        ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "avatarFile", [], "any", false, false, false, 179), 'widget');
        yield "
                        ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "avatarFile", [], "any", false, false, false, 180), 'errors');
        yield "
                        ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "avatarFile", [], "any", false, false, false, 181), 'help');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 text-center\">
                        ";
        // line 185
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "avatar", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "avatar", [], "any", false, false, false, 186))), "html", null, true);
            yield "\" alt=\"Avatar actuel\" class=\"preview-avatar\" id=\"avatar-preview\">
                        ";
        } else {
            // line 188
            yield "                            <div class=\"preview-avatar-placeholder\" id=\"avatar-placeholder\">
                                ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "firstname", [], "any", false, false, false, 189))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "lastname", [], "any", false, false, false, 189))), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 192
        yield "                    </div>
                </div>
            </div>
            
            ";
        // line 196
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "employe", [], "any", false, false, false, 196))) {
            // line 197
            yield "                <div class=\"form-section\">
                    <h4 class=\"section-title\">
                        <i class=\"fas fa-id-card section-icon\"></i> Informations employé
                    </h4>
                    
                    <div class=\"employee-info\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <p><strong>Matricule:</strong> ";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "employe", [], "any", false, false, false, 205), "matricule", [], "any", false, false, false, 205), "html", null, true);
            yield "</p>
                                <p><strong>Date d'embauche:</strong> ";
            // line 206
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 206, $this->source); })()), "employe", [], "any", false, false, false, 206), "dateEmbauche", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 206, $this->source); })()), "employe", [], "any", false, false, false, 206), "dateEmbauche", [], "any", false, false, false, 206), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
            yield "</p>
                                <p><strong>Statut:</strong> 
                                    <span class=\"badge ";
            // line 208
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 208, $this->source); })()), "employe", [], "any", false, false, false, 208), "statut", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                        ";
            // line 209
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 209, $this->source); })()), "employe", [], "any", false, false, false, 209), "statut", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </p>
                            </div>
                            <div class=\"col-md-6\">
                                <p><strong>Service:</strong> ";
            // line 214
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 214, $this->source); })()), "employe", [], "any", false, false, false, 214), "service", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 214), "service", [], "any", false, true, false, 214), "nom", [], "any", true, true, false, 214)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 214, $this->source); })()), "employe", [], "any", false, false, false, 214), "service", [], "any", false, false, false, 214), "nom", [], "any", false, false, false, 214), "Non assigné")) : ("Non assigné")), "html", null, true)) : ("Non assigné"));
            yield "</p>
                                <p><strong>Fonction:</strong> ";
            // line 215
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "employe", [], "any", false, false, false, 215), "fonction", [], "any", false, false, false, 215)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 215), "fonction", [], "any", false, true, false, 215), "nom", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "employe", [], "any", false, false, false, 215), "fonction", [], "any", false, false, false, 215), "nom", [], "any", false, false, false, 215), "Non assigné")) : ("Non assigné")), "html", null, true)) : ("Non assigné"));
            yield "</p>
                            </div>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"btn btn-sm btn-outline-info\">
                                <i class=\"fas fa-edit\"></i> Modifier les détails de l'employé
                            </a>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 226
        yield "            
            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save\"></i> ";
        // line 230
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 230, $this->source); })()), "id", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer"));
        yield "
                </button>
            </div>
            
            ";
        // line 234
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 240
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Prévisualisation de l'avatar
            const avatarInput = document.querySelector('input[type=\"file\"]');
            const avatarPreview = document.getElementById('avatar-preview');
            const avatarPlaceholder = document.getElementById('avatar-placeholder');
            
            if (avatarInput) {
                avatarInput.addEventListener('change', function(e) {
                    if (e.target.files.length > 0) {
                        const file = e.target.files[0];
                        const reader = new FileReader();
                        
                        reader.onload = function(event) {
                            // Créer l'élément image si n'existe pas
                            if (!avatarPreview) {
                                const newPreview = document.createElement('img');
                                newPreview.id = 'avatar-preview';
                                newPreview.className = 'preview-avatar';
                                newPreview.alt = 'Avatar prévisualisé';
                                
                                if (avatarPlaceholder) {
                                    avatarPlaceholder.style.display = 'none';
                                    avatarPlaceholder.parentNode.appendChild(newPreview);
                                }
                                
                                newPreview.src = event.target.result;
                            } else {
                                avatarPreview.src = event.target.result;
                                
                                if (avatarPlaceholder) {
                                    avatarPlaceholder.style.display = 'none';
                                }
                            }
                        };
                        
                        reader.readAsDataURL(file);
                    }
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
        return array (  508 => 240,  498 => 239,  486 => 234,  479 => 230,  474 => 228,  470 => 226,  456 => 215,  452 => 214,  444 => 209,  440 => 208,  435 => 206,  431 => 205,  421 => 197,  419 => 196,  413 => 192,  406 => 189,  403 => 188,  397 => 186,  395 => 185,  388 => 181,  384 => 180,  380 => 179,  376 => 178,  365 => 169,  359 => 165,  357 => 164,  350 => 160,  346 => 159,  342 => 158,  335 => 154,  331 => 153,  327 => 152,  312 => 140,  308 => 139,  304 => 138,  297 => 134,  293 => 133,  289 => 132,  280 => 126,  276 => 125,  272 => 124,  265 => 120,  261 => 119,  257 => 118,  245 => 109,  242 => 108,  239 => 106,  233 => 105,  223 => 101,  218 => 100,  213 => 99,  208 => 98,  203 => 94,  195 => 90,  193 => 89,  187 => 86,  182 => 84,  178 => 82,  168 => 81,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'utilisateur{% endblock %}

{% block stylesheets %}
    <style>
        .edit-container {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .form-section {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #dee2e6;
        }
        
        .form-section:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        
        .section-title {
            margin-bottom: 1.5rem;
            font-weight: 600;
            color: #212529;
        }
        
        .section-icon {
            margin-right: 0.5rem;
            color: #0d6efd;
        }
        
        .preview-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 1rem;
            border: 3px solid #dee2e6;
        }
        
        .preview-avatar-placeholder {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #6c757d;
            color: white;
            font-size: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
            border: 3px solid #dee2e6;
        }
        
        .roles-checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .employee-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1rem;
        }
        
        .form-help-text {
            font-size: 0.875rem;
            color: #6c757d;
            margin-top: 0.25rem;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"display-6\">{{ user.id ? 'Modifier' : 'Nouvel' }} utilisateur</h1>
            <div>
                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary me-2\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                {% if user.id %}
                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-outline-info\">
                    <i class=\"fas fa-eye\"></i> Voir détails
                </a>
                {% endif %}
            </div>
        </div>
        
        {# Flash messages #}
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}
        
        {# Form #}
        <div class=\"edit-container\">
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            
            <div class=\"form-section\">
                <h4 class=\"section-title\">
                    <i class=\"fas fa-user section-icon\"></i> Informations de base
                </h4>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.email) }}
                        {{ form_widget(form.email) }}
                        {{ form_errors(form.email) }}
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.roles) }}
                        {{ form_widget(form.roles) }}
                        {{ form_errors(form.roles) }}
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.firstname) }}
                        {{ form_widget(form.firstname) }}
                        {{ form_errors(form.firstname) }}
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.lastname) }}
                        {{ form_widget(form.lastname) }}
                        {{ form_errors(form.lastname) }}
                    </div>
                </div>
            </div>
            
            <div class=\"form-section\">
                <h4 class=\"section-title\">
                    <i class=\"fas fa-lock section-icon\"></i> Sécurité
                </h4>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.password.first) }}
                        {{ form_widget(form.password.first) }}
                        {{ form_errors(form.password.first) }}
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.password.second) }}
                        {{ form_widget(form.password.second) }}
                        {{ form_errors(form.password.second) }}
                    </div>
                </div>
                
                {% if user.id %}
                    <div class=\"form-help-text\">
                        <i class=\"fas fa-info-circle\"></i> Laissez les champs vides pour conserver le mot de passe actuel.
                    </div>
                {% endif %}
            </div>
            
            <div class=\"form-section\">
                <h4 class=\"section-title\">
                    <i class=\"fas fa-image section-icon\"></i> Photo de profil
                </h4>
                
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        {{ form_label(form.avatarFile) }}
                        {{ form_widget(form.avatarFile) }}
                        {{ form_errors(form.avatarFile) }}
                        {{ form_help(form.avatarFile) }}
                    </div>
                    
                    <div class=\"col-md-6 text-center\">
                        {% if user.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" alt=\"Avatar actuel\" class=\"preview-avatar\" id=\"avatar-preview\">
                        {% else %}
                            <div class=\"preview-avatar-placeholder\" id=\"avatar-placeholder\">
                                {{ user.firstname|first|upper }}{{ user.lastname|first|upper }}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            
            {% if user.id and user.employe %}
                <div class=\"form-section\">
                    <h4 class=\"section-title\">
                        <i class=\"fas fa-id-card section-icon\"></i> Informations employé
                    </h4>
                    
                    <div class=\"employee-info\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <p><strong>Matricule:</strong> {{ user.employe.matricule }}</p>
                                <p><strong>Date d'embauche:</strong> {{ user.employe.dateEmbauche ? user.employe.dateEmbauche|date('d/m/Y') : 'Non spécifiée' }}</p>
                                <p><strong>Statut:</strong> 
                                    <span class=\"badge {{ user.employe.statut ? 'bg-success' : 'bg-warning' }}\">
                                        {{ user.employe.statut ? 'Actif' : 'Inactif' }}
                                    </span>
                                </p>
                            </div>
                            <div class=\"col-md-6\">
                                <p><strong>Service:</strong> {{ user.employe.service ? user.employe.service.nom|default('Non assigné') : 'Non assigné' }}</p>
                                <p><strong>Fonction:</strong> {{ user.employe.fonction ? user.employe.fonction.nom|default('Non assigné') : 'Non assigné' }}</p>
                            </div>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"btn btn-sm btn-outline-info\">
                                <i class=\"fas fa-edit\"></i> Modifier les détails de l'employé
                            </a>
                        </div>
                    </div>
                </div>
            {% endif %}
            
            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save\"></i> {{ user.id ? 'Mettre à jour' : 'Créer' }}
                </button>
            </div>
            
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Prévisualisation de l'avatar
            const avatarInput = document.querySelector('input[type=\"file\"]');
            const avatarPreview = document.getElementById('avatar-preview');
            const avatarPlaceholder = document.getElementById('avatar-placeholder');
            
            if (avatarInput) {
                avatarInput.addEventListener('change', function(e) {
                    if (e.target.files.length > 0) {
                        const file = e.target.files[0];
                        const reader = new FileReader();
                        
                        reader.onload = function(event) {
                            // Créer l'élément image si n'existe pas
                            if (!avatarPreview) {
                                const newPreview = document.createElement('img');
                                newPreview.id = 'avatar-preview';
                                newPreview.className = 'preview-avatar';
                                newPreview.alt = 'Avatar prévisualisé';
                                
                                if (avatarPlaceholder) {
                                    avatarPlaceholder.style.display = 'none';
                                    avatarPlaceholder.parentNode.appendChild(newPreview);
                                }
                                
                                newPreview.src = event.target.result;
                            } else {
                                avatarPreview.src = event.target.result;
                                
                                if (avatarPlaceholder) {
                                    avatarPlaceholder.style.display = 'none';
                                }
                            }
                        };
                        
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
{% endblock %}
", "user/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\user\\edit.html.twig");
    }
}
