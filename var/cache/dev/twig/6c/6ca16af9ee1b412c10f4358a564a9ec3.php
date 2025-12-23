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

/* profile/edit.html.twig */
class __TwigTemplate_7213210ff198f176ca5c13440013b050 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier le Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile-edit.css"), "html", null, true);
        yield "\">   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "
 <form class=\"form-container\" @submit.prevent=\"saveChanges\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
        yield "\" method=\"POST\">
            <div class=\"form-header\">
                <h2>Modifier le Profil</h2>
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"back-btn\">
                    <i data-lucide=\"x\"></i> Annuler
                </a>
            </div>

            <div class=\"form-body\">
                
                <!-- Avatar -->
                <div class=\"avatar-edit-section\">
                    ";
        // line 21
        $context["initials"] = (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "firstname", [], "any", false, false, false, 21)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "lastname", [], "any", false, false, false, 21)));
        // line 22
        yield "                    <div class=\"current-avatar\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"upload-actions\">
                        <h4>Photo de profil</h4>
                        <p>JPG, GIF ou PNG. Max 800Ko.</p>
                        <div style=\"display:flex; gap:10px;\">
                            <button type=\"button\" class=\"btn-outline\">Changer la photo</button>
                            <button type=\"button\" class=\"btn-outline\" style=\"color:var(--danger); border-color:var(--border-color);\">Supprimer</button>
                        </div>
                    </div>
                </div>

                <!-- Personal Info -->
                <div class=\"form-section-title\">
                    <i data-lucide=\"user-circle\"></i> Informations Personnelles
                </div>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">Prénom</label>
                        <input type=\"text\" class=\"input\" name=\"firstname\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "firstname", [], "any", false, false, false, 40), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Nom</label>
                        <input type=\"text\" class=\"input\" name=\"lastname\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "lastname", [], "any", false, false, false, 44), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Email</label>
                        <input type=\"email\" class=\"input\" name=\"email\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Téléphone</label>
                        <input type=\"text\" class=\"input\" name=\"phone\" value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "phone", [], "any", false, false, false, 52), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Adresse</label>
                        <input type=\"text\" class=\"input\" name=\"address\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "address", [], "any", false, false, false, 56), "html", null, true);
        yield "\">
                    </div>
                </div>

                <!-- Professional (Read Only) -->
                <div class=\"form-section-title\">
                    <i data-lucide=\"briefcase\"></i> Poste & Fonction
                </div>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">Institution</label>
                        <input type=\"text\" class=\"input\" value=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "institution", [], "any", false, false, false, 67), "html", null, true);
        yield "\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Département</label>
                        <input type=\"text\" class=\"input\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "department", [], "any", false, false, false, 71), "html", null, true);
        yield "\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Rôle Système</label>
                        <input type=\"text\" class=\"input\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "roles", [], "any", false, false, false, 75), ", "), "html", null, true);
        yield "\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Matricule</label>
                        <input type=\"text\" class=\"input\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "matricule", [], "any", false, false, false, 79), "html", null, true);
        yield "\" readonly>
                    </div>
                </div>

                <!-- Security -->
                <div class=\"form-section-title\" style=\"color:var(--tchad-gold);\">
                    <i data-lucide=\"lock\"></i> Sécurité
                </div>
                <div class=\"form-grid\" style=\"background: rgba(254, 203, 0, 0.05); padding: 20px; border-radius: 12px; border: 1px solid rgba(254, 203, 0, 0.2);\">
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Ancien mot de passe</label>
                        <input type=\"password\" class=\"input\" name=\"old_password\" placeholder=\"••••••••\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Nouveau mot de passe</label>
                        <input type=\"password\" class=\"input\" name=\"new_password\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Confirmer nouveau mot de passe</label>
                        <input type=\"password\" class=\"input\" name=\"confirm_password\">
                    </div>
                </div>

            </div>

            <div class=\"form-footer\">
                <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-save\">Enregistrer les modifications</button>
            </div>
        </form>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        yield "
 <script>
        function editProfile() {
            return {
                init() {
                    lucide.createIcons();
                }
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
        return "profile/edit.html.twig";
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
        return array (  268 => 112,  258 => 111,  245 => 105,  216 => 79,  209 => 75,  202 => 71,  195 => 67,  181 => 56,  174 => 52,  167 => 48,  160 => 44,  153 => 40,  131 => 22,  129 => 21,  117 => 12,  111 => 9,  108 => 8,  98 => 7,  87 => 4,  77 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier le Profil{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/profile-edit.css') }}\">   
{% endblock %}

{% block body %}

 <form class=\"form-container\" @submit.prevent=\"saveChanges\" action=\"{{ path('app_profile_update') }}\" method=\"POST\">
            <div class=\"form-header\">
                <h2>Modifier le Profil</h2>
                <a href=\"{{ path('app_profile') }}\" class=\"back-btn\">
                    <i data-lucide=\"x\"></i> Annuler
                </a>
            </div>

            <div class=\"form-body\">
                
                <!-- Avatar -->
                <div class=\"avatar-edit-section\">
                    {% set initials = app.user.firstname|first ~ app.user.lastname|first %}
                    <div class=\"current-avatar\">{{ initials }}</div>
                    <div class=\"upload-actions\">
                        <h4>Photo de profil</h4>
                        <p>JPG, GIF ou PNG. Max 800Ko.</p>
                        <div style=\"display:flex; gap:10px;\">
                            <button type=\"button\" class=\"btn-outline\">Changer la photo</button>
                            <button type=\"button\" class=\"btn-outline\" style=\"color:var(--danger); border-color:var(--border-color);\">Supprimer</button>
                        </div>
                    </div>
                </div>

                <!-- Personal Info -->
                <div class=\"form-section-title\">
                    <i data-lucide=\"user-circle\"></i> Informations Personnelles
                </div>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">Prénom</label>
                        <input type=\"text\" class=\"input\" name=\"firstname\" value=\"{{ app.user.firstname }}\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Nom</label>
                        <input type=\"text\" class=\"input\" name=\"lastname\" value=\"{{ app.user.lastname }}\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Email</label>
                        <input type=\"email\" class=\"input\" name=\"email\" value=\"{{ app.user.email }}\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Téléphone</label>
                        <input type=\"text\" class=\"input\" name=\"phone\" value=\"{{ app.user.phone }}\">
                    </div>
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Adresse</label>
                        <input type=\"text\" class=\"input\" name=\"address\" value=\"{{ app.user.address }}\">
                    </div>
                </div>

                <!-- Professional (Read Only) -->
                <div class=\"form-section-title\">
                    <i data-lucide=\"briefcase\"></i> Poste & Fonction
                </div>
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"label\">Institution</label>
                        <input type=\"text\" class=\"input\" value=\"{{ app.user.institution }}\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Département</label>
                        <input type=\"text\" class=\"input\" value=\"{{ app.user.department }}\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Rôle Système</label>
                        <input type=\"text\" class=\"input\" value=\"{{ app.user.roles|join(', ') }}\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Matricule</label>
                        <input type=\"text\" class=\"input\" value=\"{{ app.user.matricule }}\" readonly>
                    </div>
                </div>

                <!-- Security -->
                <div class=\"form-section-title\" style=\"color:var(--tchad-gold);\">
                    <i data-lucide=\"lock\"></i> Sécurité
                </div>
                <div class=\"form-grid\" style=\"background: rgba(254, 203, 0, 0.05); padding: 20px; border-radius: 12px; border: 1px solid rgba(254, 203, 0, 0.2);\">
                    <div class=\"form-group full-width\">
                        <label class=\"label\">Ancien mot de passe</label>
                        <input type=\"password\" class=\"input\" name=\"old_password\" placeholder=\"••••••••\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Nouveau mot de passe</label>
                        <input type=\"password\" class=\"input\" name=\"new_password\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"label\">Confirmer nouveau mot de passe</label>
                        <input type=\"password\" class=\"input\" name=\"confirm_password\">
                    </div>
                </div>

            </div>

            <div class=\"form-footer\">
                <a href=\"{{ path('app_profile') }}\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-save\">Enregistrer les modifications</button>
            </div>
        </form>
    {% endblock %}

    {% block javascripts %}

 <script>
        function editProfile() {
            return {
                init() {
                    lucide.createIcons();
                }
            }
        }
    </script>
    {% endblock %}
    
", "profile/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\profile\\edit.html.twig");
    }
}
