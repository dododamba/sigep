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

/* profile/index.html.twig */
class __TwigTemplate_6119c04a081138896bb6194fceb2ff95 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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

        yield "Tableau de Bord";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "   <div class=\"profile-container mt-5\">
            <div class=\"profile-grid\">
                
                <!-- Left Column -->
                <div class=\"profile-card\">
                    <div class=\"avatar-wrapper mt-4\">
                        ";
        // line 14
        yield "                        ";
        $context["initials"] = (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "firstname", [], "any", false, false, false, 14)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "lastname", [], "any", false, false, false, 14)));
        // line 15
        yield "                        <div class=\"avatar\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                    
                    ";
        // line 19
        yield "                    <h2 class=\"profile-name\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "firstname", [], "any", false, false, false, 19), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "lastname", [], "any", false, false, false, 19), "html", null, true);
        yield "</h2>
                    
                    ";
        // line 22
        yield "                    <p class=\"profile-role\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "roles", [], "any", false, false, false, 22), ", "), "html", null, true);
        yield "</p>
                    
                    <div class=\"status-badge\">
                        <span style=\"width:6px; height:6px; background:var(--success); border-radius:50%;\"></span>
                        ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "isVerified", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                            Compte Actif
                        ";
        } else {
            // line 29
            yield "                            Compte Inactif
                        ";
        }
        // line 31
        yield "                    </div>

                    <div class=\"contact-list\">
                        <div class=\"contact-item\">
                            <i data-lucide=\"mail\"></i>
                            <span>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "email", [], "any", false, false, false, 36), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"contact-item\">
                            <i data-lucide=\"phone\"></i>
                            <span>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "phone", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"contact-item\">
                            <i data-lucide=\"map-pin\"></i>
                            <span>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "address", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"contact-item\">
                            <i data-lucide=\"building\"></i>
                             <span>
        ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "institution", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "institution", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            yield "
            ";
            // line 51
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "institution", [], "any", false, false, false, 51), "acronym", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "                (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "institution", [], "any", false, false, false, 52), "acronym", [], "any", false, false, false, 52), "html", null, true);
                yield ")
            ";
            }
            // line 54
            yield "        ";
        } else {
            // line 55
            yield "            Aucune institution assignée
        ";
        }
        // line 57
        yield "    </span>
                        </div>
                    </div>
                    
                    <div style=\"padding: 0 24px;\">
                        <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"btn btn-gold\" style=\"width: 100%; justify-content: center;\">
                            <i data-lucide=\"edit-3\" style=\"width: 18px;\"></i> Modifier le profil
                        </a>
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Details Section -->
                    <div class=\"info-card\">
                        <div class=\"card-title\">
                            <span>Informations Professionnelles</span>
                            <i data-lucide=\"briefcase\" style=\"color: var(--tchad-blue);\"></i>
                        </div>
                        <div class=\"info-grid\">
                            <div class=\"info-group\">
                                <label>Matricule</label>
                                <div>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "matricule", [], "any", false, false, false, 79), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"info-group\">
                                <label>Date d'embauche</label>
                                <div>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "hireDate", [], "any", false, false, false, 83), "d F Y"), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"info-group\">
                                <label>Département</label>
                                <div>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "department", [], "any", false, false, false, 87), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"info-group\">
                                <label>Niveau d'accès</label>
                                <div style=\"color: var(--tchad-blue);\">
                                    ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "accessLevel", [], "any", false, false, false, 92) == "SUPER_ADMIN")) {
            // line 93
            yield "                                        Super Admin
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 94
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "accessLevel", [], "any", false, false, false, 94) == "ADMIN")) {
            // line 95
            yield "                                        Administrateur
                                    ";
        } else {
            // line 97
            yield "                                        Utilisateur Standard
                                    ";
        }
        // line 99
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Log -->
                    <div class=\"info-card\">
                        <div class=\"card-title\">
                            <span>Activité Récente</span>
                            <i data-lucide=\"activity\" style=\"color: var(--tchad-blue);\"></i>
                        </div>
                       



                    </div>
                </div>

            </div>
        </div>
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        yield "     
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/index.html.twig";
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
        return array (  305 => 122,  295 => 121,  267 => 99,  263 => 97,  259 => 95,  257 => 94,  254 => 93,  252 => 92,  244 => 87,  237 => 83,  230 => 79,  210 => 62,  203 => 57,  199 => 55,  196 => 54,  190 => 52,  188 => 51,  183 => 50,  181 => 49,  173 => 44,  166 => 40,  159 => 36,  152 => 31,  148 => 29,  144 => 27,  142 => 26,  134 => 22,  126 => 19,  119 => 15,  116 => 14,  108 => 7,  98 => 6,  87 => 4,  77 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tableau de Bord{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
{% endblock %}
    {% block body %}
   <div class=\"profile-container mt-5\">
            <div class=\"profile-grid\">
                
                <!-- Left Column -->
                <div class=\"profile-card\">
                    <div class=\"avatar-wrapper mt-4\">
                        {# Initiales dynamiques #}
                        {% set initials = app.user.firstname|first ~ app.user.lastname|first %}
                        <div class=\"avatar\">{{ initials }}</div>
                    </div>
                    
                    {# Nom complet dynamique #}
                    <h2 class=\"profile-name\">{{ app.user.firstname }} {{ app.user.lastname }}</h2>
                    
                    {# Rôle dynamique #}
                    <p class=\"profile-role\">{{ app.user.roles|join(', ') }}</p>
                    
                    <div class=\"status-badge\">
                        <span style=\"width:6px; height:6px; background:var(--success); border-radius:50%;\"></span>
                        {% if app.user.isVerified %}
                            Compte Actif
                        {% else %}
                            Compte Inactif
                        {% endif %}
                    </div>

                    <div class=\"contact-list\">
                        <div class=\"contact-item\">
                            <i data-lucide=\"mail\"></i>
                            <span>{{ app.user.email }}</span>
                        </div>
                        <div class=\"contact-item\">
                            <i data-lucide=\"phone\"></i>
                            <span>{{ app.user.phone }}</span>
                        </div>
                        <div class=\"contact-item\">
                            <i data-lucide=\"map-pin\"></i>
                            <span>{{ app.user.address }}</span>
                        </div>
                        <div class=\"contact-item\">
                            <i data-lucide=\"building\"></i>
                             <span>
        {% if app.user.institution %}
            {{ app.user.institution.name }}
            {% if app.user.institution.acronym %}
                ({{ app.user.institution.acronym }})
            {% endif %}
        {% else %}
            Aucune institution assignée
        {% endif %}
    </span>
                        </div>
                    </div>
                    
                    <div style=\"padding: 0 24px;\">
                        <a href=\"{{ path('app_profile_edit') }}\" class=\"btn btn-gold\" style=\"width: 100%; justify-content: center;\">
                            <i data-lucide=\"edit-3\" style=\"width: 18px;\"></i> Modifier le profil
                        </a>
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Details Section -->
                    <div class=\"info-card\">
                        <div class=\"card-title\">
                            <span>Informations Professionnelles</span>
                            <i data-lucide=\"briefcase\" style=\"color: var(--tchad-blue);\"></i>
                        </div>
                        <div class=\"info-grid\">
                            <div class=\"info-group\">
                                <label>Matricule</label>
                                <div>{{ app.user.matricule }}</div>
                            </div>
                            <div class=\"info-group\">
                                <label>Date d'embauche</label>
                                <div>{{ app.user.hireDate|date('d F Y') }}</div>
                            </div>
                            <div class=\"info-group\">
                                <label>Département</label>
                                <div>{{ app.user.department }}</div>
                            </div>
                            <div class=\"info-group\">
                                <label>Niveau d'accès</label>
                                <div style=\"color: var(--tchad-blue);\">
                                    {% if app.user.accessLevel == 'SUPER_ADMIN' %}
                                        Super Admin
                                    {% elseif app.user.accessLevel == 'ADMIN' %}
                                        Administrateur
                                    {% else %}
                                        Utilisateur Standard
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Log -->
                    <div class=\"info-card\">
                        <div class=\"card-title\">
                            <span>Activité Récente</span>
                            <i data-lucide=\"activity\" style=\"color: var(--tchad-blue);\"></i>
                        </div>
                       



                    </div>
                </div>

            </div>
        </div>
   {% endblock %}

 {% block javascripts %}
     
    {% endblock %}", "profile/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\profile\\index.html.twig");
    }
}
