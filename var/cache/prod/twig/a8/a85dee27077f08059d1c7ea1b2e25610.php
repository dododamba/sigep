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
class __TwigTemplate_ba012bd642a96aa422de5b8b91200dbf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier l'utilisateur";
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
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"display-6\">";
        // line 84
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 84)) ? ("Modifier") : ("Nouvel"));
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 89)) {
            // line 90
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 90)]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 98));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"form-section\">
                <h4 class=\"section-title\">
                    <i class=\"fas fa-user section-icon\"></i> Informations de base
                </h4>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 118), 'label');
        yield "
                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 119), 'widget');
        yield "
                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 120), 'errors');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 124), 'label');
        yield "
                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 125), 'widget');
        yield "
                        ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 126), 'errors');
        yield "
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 132), 'label');
        yield "
                        ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 133), 'widget');
        yield "
                        ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 134), 'errors');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 138), 'label');
        yield "
                        ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 139), 'widget');
        yield "
                        ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 140), 'errors');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 152), "first", [], "any", false, false, false, 152), 'label');
        yield "
                        ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 153), "first", [], "any", false, false, false, 153), 'widget');
        yield "
                        ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 154), "first", [], "any", false, false, false, 154), 'errors');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 158), "second", [], "any", false, false, false, 158), 'label');
        yield "
                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 159), "second", [], "any", false, false, false, 159), 'widget');
        yield "
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 160), "second", [], "any", false, false, false, 160), 'errors');
        yield "
                    </div>
                </div>
                
                ";
        // line 164
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 164)) {
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatarFile", [], "any", false, false, false, 178), 'label');
        yield "
                        ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatarFile", [], "any", false, false, false, 179), 'widget');
        yield "
                        ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatarFile", [], "any", false, false, false, 180), 'errors');
        yield "
                        ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatarFile", [], "any", false, false, false, 181), 'help');
        yield "
                    </div>
                    
                    <div class=\"col-md-6 text-center\">
                        ";
        // line 185
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 185)) {
            // line 186
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 186))), "html", null, true);
            yield "\" alt=\"Avatar actuel\" class=\"preview-avatar\" id=\"avatar-preview\">
                        ";
        } else {
            // line 188
            yield "                            <div class=\"preview-avatar-placeholder\" id=\"avatar-placeholder\">
                                ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 189))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 189))), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 196) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 196))) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 205), "matricule", [], "any", false, false, false, 205), "html", null, true);
            yield "</p>
                                <p><strong>Date d'embauche:</strong> ";
            // line 206
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 206), "dateEmbauche", [], "any", false, false, false, 206)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 206), "dateEmbauche", [], "any", false, false, false, 206), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
            yield "</p>
                                <p><strong>Statut:</strong> 
                                    <span class=\"badge ";
            // line 208
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 208), "statut", [], "any", false, false, false, 208)) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                        ";
            // line 209
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 209), "statut", [], "any", false, false, false, 209)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </p>
                            </div>
                            <div class=\"col-md-6\">
                                <p><strong>Service:</strong> ";
            // line 214
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 214), "service", [], "any", false, false, false, 214)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 214), "service", [], "any", false, true, false, 214), "nom", [], "any", true, true, false, 214)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 214), "service", [], "any", false, false, false, 214), "nom", [], "any", false, false, false, 214), "Non assigné")) : ("Non assigné")), "html", null, true)) : ("Non assigné"));
            yield "</p>
                                <p><strong>Fonction:</strong> ";
            // line 215
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 215), "fonction", [], "any", false, false, false, 215)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, true, false, 215), "fonction", [], "any", false, true, false, 215), "nom", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "employe", [], "any", false, false, false, 215), "fonction", [], "any", false, false, false, 215), "nom", [], "any", false, false, false, 215), "Non assigné")) : ("Non assigné")), "html", null, true)) : ("Non assigné"));
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
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 230)) ? ("Mettre à jour") : ("Créer"));
        yield "
                </button>
            </div>
            
            ";
        // line 234
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
        </div>
    </div>
";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  481 => 240,  474 => 239,  465 => 234,  458 => 230,  453 => 228,  449 => 226,  435 => 215,  431 => 214,  423 => 209,  419 => 208,  414 => 206,  410 => 205,  400 => 197,  398 => 196,  392 => 192,  385 => 189,  382 => 188,  376 => 186,  374 => 185,  367 => 181,  363 => 180,  359 => 179,  355 => 178,  344 => 169,  338 => 165,  336 => 164,  329 => 160,  325 => 159,  321 => 158,  314 => 154,  310 => 153,  306 => 152,  291 => 140,  287 => 139,  283 => 138,  276 => 134,  272 => 133,  268 => 132,  259 => 126,  255 => 125,  251 => 124,  244 => 120,  240 => 119,  236 => 118,  224 => 109,  221 => 108,  218 => 106,  212 => 105,  202 => 101,  197 => 100,  192 => 99,  187 => 98,  182 => 94,  174 => 90,  172 => 89,  166 => 86,  161 => 84,  157 => 82,  150 => 81,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/edit.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/user/edit.html.twig");
    }
}
