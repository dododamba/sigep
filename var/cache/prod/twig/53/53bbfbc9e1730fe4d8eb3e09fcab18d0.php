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
class __TwigTemplate_d68ecdc6378087df46b5857efd1bb5fa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détails de l'utilisateur";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 107)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
            </div>
        </div>
        
        ";
        // line 114
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 114));
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 127)) {
            // line 128
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 128))), "html", null, true);
            yield "\" alt=\"Avatar\" class=\"profile-avatar\">
                    ";
        } else {
            // line 130
            yield "                        <div class=\"profile-avatar-placeholder\">
                            ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 131))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 131))), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 134
        yield "                </div>
                <div class=\"col-md\">
                    <h2>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 136), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 136), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-2\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 137), "html", null, true);
        yield "</p>
                    <div class=\"mb-3\">
                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 140
            yield "                            ";
            if ((($context["role"] != "ROLE_USER") || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 140)) == 1))) {
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
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 146)) ? ("bg-success") : ("bg-warning"));
        yield " ms-2\">
                            ";
        // line 147
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 147)) ? ("Vérifié") : ("Non vérifié"));
        yield "
                        </span>
                    </div>
                    <div class=\"d-flex\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#changeRoleModal\">
                            <i class=\"fas fa-user-tag\"></i> Changer les rôles
                        </button>
                        <form method=\"post\" action=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 154)]), "html", null, true);
        yield "\" class=\"me-2\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 155))), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-sm ";
        // line 156
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 156)) ? ("btn-outline-warning") : ("btn-outline-success"));
        yield "\">
                                <i class=\"fas fa-";
        // line 157
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 157)) ? ("user-times") : ("user-check"));
        yield "\"></i>
                                ";
        // line 158
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 158)) ? ("Désactiver") : ("Activer"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 178), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Email</div>
                        <div class=\"info-value\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 182), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Nom complet</div>
                        <div class=\"info-value\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 186), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 186), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Date de création</div>
                        <div class=\"info-value\">";
        // line 190
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "createdAt", [], "any", false, false, false, 190)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "createdAt", [], "any", false, false, false, 190), "d/m/Y H:i"), "html", null, true)) : ("Non spécifiée"));
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"info-label\">Statut</div>
                        <div class=\"info-value\">
                            <span class=\"badge ";
        // line 195
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 195)) ? ("bg-success") : ("bg-warning"));
        yield "\">
                                ";
        // line 196
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 196)) ? ("Vérifié") : ("Non vérifié"));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 203));
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 219)) {
            // line 220
            yield "                        <div class=\"info-item\">
                            <div class=\"info-label\">Matricule</div>
                            <div class=\"info-value\">";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 222), "matricule", [], "any", false, false, false, 222), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Service</div>
                            <div class=\"info-value\">
                                ";
            // line 227
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 227), "service", [], "any", false, false, false, 227)) {
                // line 228
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 228), "service", [], "any", false, true, false, 228), "nom", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 228), "service", [], "any", false, false, false, 228), "nom", [], "any", false, false, false, 228), "Non assigné")) : ("Non assigné")), "html", null, true);
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
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 237), "fonction", [], "any", false, false, false, 237)) {
                // line 238
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 238), "fonction", [], "any", false, true, false, 238), "nom", [], "any", true, true, false, 238)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 238), "fonction", [], "any", false, false, false, 238), "nom", [], "any", false, false, false, 238), "Non assigné")) : ("Non assigné")), "html", null, true);
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
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 247), "dateEmbauche", [], "any", false, false, false, 247)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 247), "dateEmbauche", [], "any", false, false, false, 247), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
            yield "
                            </div>
                        </div>
                        <div class=\"info-item\">
                            <div class=\"info-label\">Statut employé</div>
                            <div class=\"info-value\">
                                <span class=\"badge ";
            // line 253
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 253), "statut", [], "any", false, false, false, 253)) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                    ";
            // line 254
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 254), "statut", [], "any", false, false, false, 254)) ? ("Actif") : ("Inactif"));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 267)]), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 301)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 308)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 309))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 326)]), "html", null, true);
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
        if (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 335))) {
            yield "checked";
        }
        yield ">
                                <label class=\"form-check-label\">Manager</label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"user[roles][]\" value=\"ROLE_ADMIN\" ";
        // line 339
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 339))) {
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
        return array (  604 => 339,  595 => 335,  583 => 326,  574 => 319,  562 => 309,  558 => 308,  554 => 306,  548 => 302,  546 => 301,  535 => 292,  518 => 276,  512 => 271,  505 => 267,  500 => 264,  487 => 254,  483 => 253,  474 => 247,  467 => 242,  463 => 240,  457 => 238,  455 => 237,  448 => 232,  444 => 230,  438 => 228,  436 => 227,  428 => 222,  424 => 220,  422 => 219,  409 => 208,  400 => 205,  395 => 204,  391 => 203,  381 => 196,  377 => 195,  369 => 190,  360 => 186,  353 => 182,  346 => 178,  336 => 170,  322 => 158,  318 => 157,  314 => 156,  310 => 155,  306 => 154,  296 => 147,  291 => 146,  285 => 145,  279 => 142,  274 => 141,  271 => 140,  267 => 139,  262 => 137,  256 => 136,  252 => 134,  245 => 131,  242 => 130,  236 => 128,  234 => 127,  229 => 124,  226 => 122,  220 => 121,  210 => 117,  205 => 116,  200 => 115,  195 => 114,  186 => 107,  180 => 104,  174 => 100,  167 => 99,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/show.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/user/show.html.twig");
    }
}
