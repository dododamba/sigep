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

/* user/show.html.twig */
class __TwigTemplate_176272271a9e072e76af935aaed52d3b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

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

        yield "Détails de l'utilisateur";
        
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
        .profile-header {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .profile-avatar-placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #6c757d;
            color: white;
            font-size: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .profile-info-card {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        
        .profile-info-title {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 0.75rem;
            margin-bottom: 1.25rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .profile-info-title i {
            margin-right: 0.5rem;
            color: #0d6efd;
        }
        
        .info-item {
            margin-bottom: 1rem;
        }
        
        .info-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .info-value {
            font-size: 1rem;
        }
        
        .role-badge {
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 600;
            border-radius: 0.25rem;
            margin-right: 0.25rem;
        }
        
        .role-ROLE_ADMIN {
            background-color: #dc3545;
            color: white;
        }
        
        .role-ROLE_MANAGER {
            background-color: #fd7e14;
            color: white;
        }
        
        .role-ROLE_USER {
            background-color: #0d6efd;
            color: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 100
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"display-6\">Détails de l'utilisateur</h1>
            <div>
                <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
            </div>
        </div>
        
        ";
        // line 114
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "flashes", [], "any", false, false, false, 114));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 115
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 116
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "        
        ";
        // line 124
        yield "        <div class=\"profile-header\">
            <div class=\"row\">
                <div class=\"col-md-auto text-center\">
                    ";
        // line 127
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "avatar", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "avatar", [], "any", false, false, false, 128))), "html", null, true);
            yield "\" alt=\"Avatar\" class=\"profile-avatar\">
                    ";
        } else {
            // line 130
            yield "                        <div class=\"profile-avatar-placeholder\">
                            ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "firstname", [], "any", false, false, false, 131))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "lastname", [], "any", false, false, false, 131))), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 134
        yield "                </div>
                <div class=\"col-md\">
                    <h2>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "firstname", [], "any", false, false, false, 136), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "lastname", [], "any", false, false, false, 136), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-2\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 137, $this->source); })()), "email", [], "any", false, false, false, 137), "html", null, true);
        yield "</p>
                    <div class=\"mb-3\">
                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "roles", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 140
            yield "                            ";
            if ((($context["role"] != "ROLE_USER") || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 140, $this->source); })()), "roles", [], "any", false, false, false, 140)) == 1))) {
                // line 141
                yield "                                <span class=\"badge role-badge role-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "\">
                                    ";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""]), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 145
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "                        <span class=\"badge ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "isVerified", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-warning"));
        yield " ms-2\">
                            ";
        // line 147
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "isVerified", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vérifié") : ("Non vérifié"));
        yield "
                        </span>
                    </div>
                    <div class=\"d-flex\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#changeRoleModal\">
                            <i class=\"fas fa-user-tag\"></i> Changer les rôles
                        </button>
                        <form method=\"post\" action=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154)]), "html", null, true);
        yield "\" class=\"me-2\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155))), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-sm ";
        // line 156
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "isVerified", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-warning") : ("btn-outline-success"));
        yield "\">
                                <i class=\"fas fa-";
        // line 157
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "isVerified", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-times") : ("user-check"));
        yield "\"></i>
                                ";
        // line 158
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "isVerified", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "
                            </button>
                        </form>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <i class=\"fas fa-trash\"></i> Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 170
        yield "        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                <div class=\"profile-info-card\">
                    <h4 class=\"profile-info-title\">
                        <i class=\"fas fa-user\"></i> Informations utilisateur
                    </h4>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Identifiant</div>
                        <div class=\"info-value\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Email</div>
                        <div class=\"info-value\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "email", [], "any", false, false, false, 182), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Nom complet</div>
                        <div class=\"info-value\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "firstname", [], "any", false, false, false, 186), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "lastname", [], "any", false, false, false, 186), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Date de création</div>
                        <div class=\"info-value\">";
        // line 190
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "createdAt", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "createdAt", [], "any", false, false, false, 190), "d/m/Y H:i"), "html", null, true)) : ("Non spécifiée"));
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Statut</div>
                        <div class=\"info-value\">
                            <span class=\"badge ";
        // line 195
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 195, $this->source); })()), "isVerified", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-warning"));
        yield "\">
                                ";
        // line 196
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "isVerified", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vérifié") : ("Non vérifié"));
        yield "
                            </span>
                        </div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Rôles</div>
                        <div class=\"info-value\">
                            ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 203, $this->source); })()), "roles", [], "any", false, false, false, 203));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 204
            yield "                                <span class=\"badge role-badge role-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "\">
                                    ";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""]), "html", null, true);
            yield "
                                </span>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 mb-4\">
                <div class=\"profile-info-card\">
                    <h4 class=\"profile-info-title\">
                        <i class=\"fas fa-id-card\"></i> Informations employé
                    </h4>
                    
                    ";
        // line 219
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 219, $this->source); })()), "employe", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "                        <div class=\"info-item\">
                            <div class=\"info-label\">Matricule</div>
                            <div class=\"info-value\">";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 222, $this->source); })()), "employe", [], "any", false, false, false, 222), "matricule", [], "any", false, false, false, 222), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Service</div>
                            <div class=\"info-value\">
                                ";
            // line 227
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 227, $this->source); })()), "employe", [], "any", false, false, false, 227), "service", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 228
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 228), "service", [], "any", false, true, false, 228), "nom", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "employe", [], "any", false, false, false, 228), "service", [], "any", false, false, false, 228), "nom", [], "any", false, false, false, 228), "Non assigné")) : ("Non assigné")), "html", null, true);
                yield "
                                ";
            } else {
                // line 230
                yield "                                    Non assigné
                                ";
            }
            // line 232
            yield "                            </div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Fonction</div>
                            <div class=\"info-value\">
                                ";
            // line 237
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 237, $this->source); })()), "employe", [], "any", false, false, false, 237), "fonction", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 238
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 238), "fonction", [], "any", false, true, false, 238), "nom", [], "any", true, true, false, 238)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 238, $this->source); })()), "employe", [], "any", false, false, false, 238), "fonction", [], "any", false, false, false, 238), "nom", [], "any", false, false, false, 238), "Non assigné")) : ("Non assigné")), "html", null, true);
                yield "
                                ";
            } else {
                // line 240
                yield "                                    Non assigné
                                ";
            }
            // line 242
            yield "                            </div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Date d'embauche</div>
                            <div class=\"info-value\">
                                ";
            // line 247
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 247, $this->source); })()), "employe", [], "any", false, false, false, 247), "dateEmbauche", [], "any", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 247, $this->source); })()), "employe", [], "any", false, false, false, 247), "dateEmbauche", [], "any", false, false, false, 247), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
            yield "
                            </div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Statut employé</div>
                            <div class=\"info-value\">
                                <span class=\"badge ";
            // line 253
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 253, $this->source); })()), "employe", [], "any", false, false, false, 253), "statut", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                    ";
            // line 254
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 254, $this->source); })()), "employe", [], "any", false, false, false, 254), "statut", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"btn btn-sm btn-outline-info\">
                                <i class=\"fas fa-external-link-alt\"></i> Voir détails employé
                            </a>
                        </div>
                    ";
        } else {
            // line 264
            yield "                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle\"></i> Cet utilisateur n'est pas lié à un employé.
                        </div>
                        <a href=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 267, $this->source); })()), "id", [], "any", false, false, false, 267)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-link\"></i> Créer un compte employé
                        </a>
                    ";
        }
        // line 271
        yield "                </div>
            </div>
        </div>
        
        ";
        // line 276
        yield "        <div class=\"row\">
            <div class=\"col-md-12 mb-4\">
                <div class=\"profile-info-card\">
                    <h4 class=\"profile-info-title\">
                        <i class=\"fas fa-history\"></i> Historique des activités
                    </h4>
                    
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle\"></i> Cette fonctionnalité sera disponible dans une future mise à jour.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 292
        yield "    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmer la suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                    ";
        // line 301
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 301, $this->source); })()), "employe", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 302
            yield "                    <div class=\"alert alert-warning mt-2\">
                        <i class=\"fas fa-exclamation-triangle\"></i> Attention : l'employé associé sera également supprimé !
                    </div>
                    ";
        }
        // line 306
        yield "                </div>
                <div class=\"modal-footer\">
                    <form method=\"post\" action=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 308, $this->source); })()), "id", [], "any", false, false, false, 308)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 309, $this->source); })()), "id", [], "any", false, false, false, 309))), "html", null, true);
        yield "\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 319
        yield "    <div class=\"modal fade\" id=\"changeRoleModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Modifier les rôles</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form method=\"post\" action=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 326, $this->source); })()), "id", [], "any", false, false, false, 326)]), "html", null, true);
        yield "\">
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Rôles de l'utilisateur</label>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"user[roles][]\" value=\"ROLE_USER\" checked disabled>
                                <label class=\"form-check-label\">Utilisateur (par défaut)</label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"user[roles][]\" value=\"ROLE_MANAGER\" ";
        // line 335
        if (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 335, $this->source); })()), "roles", [], "any", false, false, false, 335))) {
            yield "checked";
        }
        yield ">
                                <label class=\"form-check-label\">Manager</label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"user[roles][]\" value=\"ROLE_ADMIN\" ";
        // line 339
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 339, $this->source); })()), "roles", [], "any", false, false, false, 339))) {
            yield "checked";
        }
        yield ">
                                <label class=\"form-check-label\">Administrateur</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    </div>
                </form>
            </div>
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
        return "user/show.html.twig";
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
        return array (  625 => 339,  616 => 335,  604 => 326,  595 => 319,  583 => 309,  579 => 308,  575 => 306,  569 => 302,  567 => 301,  556 => 292,  539 => 276,  533 => 271,  526 => 267,  521 => 264,  508 => 254,  504 => 253,  495 => 247,  488 => 242,  484 => 240,  478 => 238,  476 => 237,  469 => 232,  465 => 230,  459 => 228,  457 => 227,  449 => 222,  445 => 220,  443 => 219,  430 => 208,  421 => 205,  416 => 204,  412 => 203,  402 => 196,  398 => 195,  390 => 190,  381 => 186,  374 => 182,  367 => 178,  357 => 170,  343 => 158,  339 => 157,  335 => 156,  331 => 155,  327 => 154,  317 => 147,  312 => 146,  306 => 145,  300 => 142,  295 => 141,  292 => 140,  288 => 139,  283 => 137,  277 => 136,  273 => 134,  266 => 131,  263 => 130,  257 => 128,  255 => 127,  250 => 124,  247 => 122,  241 => 121,  231 => 117,  226 => 116,  221 => 115,  216 => 114,  207 => 107,  201 => 104,  195 => 100,  185 => 99,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'utilisateur{% endblock %}

{% block stylesheets %}
    <style>
        .profile-header {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .profile-avatar-placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #6c757d;
            color: white;
            font-size: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .profile-info-card {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        
        .profile-info-title {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 0.75rem;
            margin-bottom: 1.25rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .profile-info-title i {
            margin-right: 0.5rem;
            color: #0d6efd;
        }
        
        .info-item {
            margin-bottom: 1rem;
        }
        
        .info-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .info-value {
            font-size: 1rem;
        }
        
        .role-badge {
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 600;
            border-radius: 0.25rem;
            margin-right: 0.25rem;
        }
        
        .role-ROLE_ADMIN {
            background-color: #dc3545;
            color: white;
        }
        
        .role-ROLE_MANAGER {
            background-color: #fd7e14;
            color: white;
        }
        
        .role-ROLE_USER {
            background-color: #0d6efd;
            color: white;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"display-6\">Détails de l'utilisateur</h1>
            <div>
                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary me-2\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
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
        
        {# Profile Header #}
        <div class=\"profile-header\">
            <div class=\"row\">
                <div class=\"col-md-auto text-center\">
                    {% if user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" alt=\"Avatar\" class=\"profile-avatar\">
                    {% else %}
                        <div class=\"profile-avatar-placeholder\">
                            {{ user.firstname|first|upper }}{{ user.lastname|first|upper }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"col-md\">
                    <h2>{{ user.firstname }} {{ user.lastname }}</h2>
                    <p class=\"text-muted mb-2\">{{ user.email }}</p>
                    <div class=\"mb-3\">
                        {% for role in user.roles %}
                            {% if role != 'ROLE_USER' or user.roles|length == 1 %}
                                <span class=\"badge role-badge role-{{ role }}\">
                                    {{ role|replace({'ROLE_': ''}) }}
                                </span>
                            {% endif %}
                        {% endfor %}
                        <span class=\"badge {{ user.isVerified ? 'bg-success' : 'bg-warning' }} ms-2\">
                            {{ user.isVerified ? 'Vérifié' : 'Non vérifié' }}
                        </span>
                    </div>
                    <div class=\"d-flex\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#changeRoleModal\">
                            <i class=\"fas fa-user-tag\"></i> Changer les rôles
                        </button>
                        <form method=\"post\" action=\"{{ path('app_user_toggle_status', {'id': user.id}) }}\" class=\"me-2\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ user.id) }}\">
                            <button type=\"submit\" class=\"btn btn-sm {{ user.isVerified ? 'btn-outline-warning' : 'btn-outline-success' }}\">
                                <i class=\"fas fa-{{ user.isVerified ? 'user-times' : 'user-check' }}\"></i>
                                {{ user.isVerified ? 'Désactiver' : 'Activer' }}
                            </button>
                        </form>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <i class=\"fas fa-trash\"></i> Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        {# Profile Info #}
        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                <div class=\"profile-info-card\">
                    <h4 class=\"profile-info-title\">
                        <i class=\"fas fa-user\"></i> Informations utilisateur
                    </h4>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Identifiant</div>
                        <div class=\"info-value\">{{ user.id }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Email</div>
                        <div class=\"info-value\">{{ user.email }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Nom complet</div>
                        <div class=\"info-value\">{{ user.firstname }} {{ user.lastname }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Date de création</div>
                        <div class=\"info-value\">{{ user.createdAt ? user.createdAt|date('d/m/Y H:i') : 'Non spécifiée' }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Statut</div>
                        <div class=\"info-value\">
                            <span class=\"badge {{ user.isVerified ? 'bg-success' : 'bg-warning' }}\">
                                {{ user.isVerified ? 'Vérifié' : 'Non vérifié' }}
                            </span>
                        </div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Rôles</div>
                        <div class=\"info-value\">
                            {% for role in user.roles %}
                                <span class=\"badge role-badge role-{{ role }}\">
                                    {{ role|replace({'ROLE_': ''}) }}
                                </span>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 mb-4\">
                <div class=\"profile-info-card\">
                    <h4 class=\"profile-info-title\">
                        <i class=\"fas fa-id-card\"></i> Informations employé
                    </h4>
                    
                    {% if user.employe %}
                        <div class=\"info-item\">
                            <div class=\"info-label\">Matricule</div>
                            <div class=\"info-value\">{{ user.employe.matricule }}</div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Service</div>
                            <div class=\"info-value\">
                                {% if user.employe.service %}
                                    {{ user.employe.service.nom|default('Non assigné') }}
                                {% else %}
                                    Non assigné
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Fonction</div>
                            <div class=\"info-value\">
                                {% if user.employe.fonction %}
                                    {{ user.employe.fonction.nom|default('Non assigné') }}
                                {% else %}
                                    Non assigné
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Date d'embauche</div>
                            <div class=\"info-value\">
                                {{ user.employe.dateEmbauche ? user.employe.dateEmbauche|date('d/m/Y') : 'Non spécifiée' }}
                            </div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Statut employé</div>
                            <div class=\"info-value\">
                                <span class=\"badge {{ user.employe.statut ? 'bg-success' : 'bg-warning' }}\">
                                    {{ user.employe.statut ? 'Actif' : 'Inactif' }}
                                </span>
                            </div>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"btn btn-sm btn-outline-info\">
                                <i class=\"fas fa-external-link-alt\"></i> Voir détails employé
                            </a>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle\"></i> Cet utilisateur n'est pas lié à un employé.
                        </div>
                        <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-link\"></i> Créer un compte employé
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
        
        {# Additional Info #}
        <div class=\"row\">
            <div class=\"col-md-12 mb-4\">
                <div class=\"profile-info-card\">
                    <h4 class=\"profile-info-title\">
                        <i class=\"fas fa-history\"></i> Historique des activités
                    </h4>
                    
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle\"></i> Cette fonctionnalité sera disponible dans une future mise à jour.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {# Delete Modal #}
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmer la suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                    {% if user.employe %}
                    <div class=\"alert alert-warning mt-2\">
                        <i class=\"fas fa-exclamation-triangle\"></i> Attention : l'employé associé sera également supprimé !
                    </div>
                    {% endif %}
                </div>
                <div class=\"modal-footer\">
                    <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    {# Change Role Modal #}
    <div class=\"modal fade\" id=\"changeRoleModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Modifier les rôles</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form method=\"post\" action=\"{{ path('app_user_edit', {'id': user.id}) }}\">
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Rôles de l'utilisateur</label>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"user[roles][]\" value=\"ROLE_USER\" checked disabled>
                                <label class=\"form-check-label\">Utilisateur (par défaut)</label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"user[roles][]\" value=\"ROLE_MANAGER\" {% if 'ROLE_MANAGER' in user.roles %}checked{% endif %}>
                                <label class=\"form-check-label\">Manager</label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"user[roles][]\" value=\"ROLE_ADMIN\" {% if 'ROLE_ADMIN' in user.roles %}checked{% endif %}>
                                <label class=\"form-check-label\">Administrateur</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "user/show.html.twig", "/home/xdevcorp/Projects/sigep/templates/user/show.html.twig");
    }
}
