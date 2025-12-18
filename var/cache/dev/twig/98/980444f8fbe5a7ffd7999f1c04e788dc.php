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

/* partners/new.html.twig */
class __TwigTemplate_bb27ded2454cec46910df84b4d3c9409 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partners/new.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/partner-add.css"), "html", null, true);
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
        yield "
 <header class=\"top-header\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"back-btn\">
                <i data-lucide=\"arrow-left\" style=\"width:18px;\"></i>
                Retour à la liste
            </a>
            <h1 style=\"font-size:1.1rem; font-weight:600;\">Enregistrer un Partenaire</h1>
            <div style=\"width:40px;\"></div> <!-- Spacer -->
        </header>

        <div class=\"content-area\">
            <form @submit.prevent=\"submitForm\">
                
                <!-- Card 1: Info Générales -->
                <div class=\"form-card\">
                    <div class=\"form-card-header\">
                        <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                            <i data-lucide=\"building-2\"></i>
                        </div>
                        <div>
                            <h3 style=\"font-size:1.1rem; font-weight:600;\">Informations Générales</h3>
                            <p style=\"font-size:0.85rem; color:var(--text-muted);\">Identité de l'organisation</p>
                        </div>
                    </div>
                    <div class=\"form-card-body\">
                        <div class=\"form-grid\">
                            <div class=\"form-group full\">
                                <label class=\"form-label\">Logo du partenaire</label>
                                <div class=\"file-upload-area\" @click=\"\$refs.fileInput.click()\">
                                    <div class=\"file-icon\"><i data-lucide=\"upload-cloud\"></i></div>
                                    <p style=\"font-weight:600;\">Cliquez pour télécharger</p>
                                    <p style=\"font-size:0.8rem; color:var(--text-muted);\">PNG, JPG (Max 2MB)</p>
                                    <input type=\"file\" x-ref=\"fileInput\" style=\"display:none\" @change=\"handleFile\">
                                </div>
                                <div x-show=\"fileName\" style=\"margin-top:8px; font-size:0.9rem; color:var(--success); display:flex; align-items:center; gap:6px;\">
                                    <i data-lucide=\"check\" style=\"width:16px;\"></i> <span x-text=\"fileName\"></span>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"form-label\">Nom de l'organisation <span>*</span></label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.name\" placeholder=\"Ex: Banque Mondiale\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Acronyme <span>*</span></label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.acronym\" placeholder=\"Ex: BM\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Type de partenaire <span>*</span></label>
                                <select class=\"form-select\" x-model=\"form.type\" required>
                                    <option value=\"\" disabled selected>Sélectionner...</option>
                                    <option value=\"Multilatéral\">Multilatéral</option>
                                    <option value=\"Bilatéral\">Bilatéral</option>
                                    <option value=\"ONG\">ONG Internationale</option>
                                    <option value=\"Privé\">Secteur Privé</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Site Web</label>
                                <input type=\"url\" class=\"form-input\" x-model=\"form.website\" placeholder=\"https://...\">
                            </div>
                            <div class=\"form-group full\">
                                <label class=\"form-label\">Description / Mission</label>
                                <textarea class=\"form-textarea\" rows=\"3\" x-model=\"form.description\" placeholder=\"Brève description des axes d'intervention...\"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Contact -->
                <div class=\"form-card\">
                    <div class=\"form-card-header\">
                        <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                            <i data-lucide=\"ri\" style=\"color:var(--tchad-blue);\"></i>
                        </div>
                        <div>
                            <h3 style=\"font-size:1.1rem; font-weight:600;\">Point Focal</h3>
                            <p style=\"font-size:0.85rem; color:var(--text-muted);\">Coordonnées du représentant</p>
                        </div>
                    </div>
                    <div class=\"form-card-body\">
                        <div class=\"form-grid\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">Nom complet <span>*</span></label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.contactName\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Fonction</label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.contactRole\" placeholder=\"Ex: Représentant Résident\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Email <span>*</span></label>
                                <input type=\"email\" class=\"form-input\" x-model=\"form.contactEmail\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Téléphone</label>
                                <input type=\"tel\" class=\"form-input\" x-model=\"form.contactPhone\">
                            </div>
                            <div class=\"form-group full\">
                                <label class=\"form-label\">Adresse physique (Bureau Tchad)</label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.address\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"form-actions\">
                    <button type=\"button\" class=\"btn btn-secondary\" @click=\"window.location.href='sigep-partners.html'\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i data-lucide=\"save\"></i> Enregistrer le Partenaire
                    </button>
                </div>

            </form>
        </div>
      
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
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
        return "partners/new.html.twig";
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
        return array (  245 => 126,  235 => 125,  112 => 9,  108 => 7,  98 => 6,  87 => 4,  77 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tableau de Bord{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/partner-add.css') }}\">
{% endblock %}
{% block body %}

 <header class=\"top-header\">
            <a href=\"{{ path('app_partners') }}\" class=\"back-btn\">
                <i data-lucide=\"arrow-left\" style=\"width:18px;\"></i>
                Retour à la liste
            </a>
            <h1 style=\"font-size:1.1rem; font-weight:600;\">Enregistrer un Partenaire</h1>
            <div style=\"width:40px;\"></div> <!-- Spacer -->
        </header>

        <div class=\"content-area\">
            <form @submit.prevent=\"submitForm\">
                
                <!-- Card 1: Info Générales -->
                <div class=\"form-card\">
                    <div class=\"form-card-header\">
                        <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                            <i data-lucide=\"building-2\"></i>
                        </div>
                        <div>
                            <h3 style=\"font-size:1.1rem; font-weight:600;\">Informations Générales</h3>
                            <p style=\"font-size:0.85rem; color:var(--text-muted);\">Identité de l'organisation</p>
                        </div>
                    </div>
                    <div class=\"form-card-body\">
                        <div class=\"form-grid\">
                            <div class=\"form-group full\">
                                <label class=\"form-label\">Logo du partenaire</label>
                                <div class=\"file-upload-area\" @click=\"\$refs.fileInput.click()\">
                                    <div class=\"file-icon\"><i data-lucide=\"upload-cloud\"></i></div>
                                    <p style=\"font-weight:600;\">Cliquez pour télécharger</p>
                                    <p style=\"font-size:0.8rem; color:var(--text-muted);\">PNG, JPG (Max 2MB)</p>
                                    <input type=\"file\" x-ref=\"fileInput\" style=\"display:none\" @change=\"handleFile\">
                                </div>
                                <div x-show=\"fileName\" style=\"margin-top:8px; font-size:0.9rem; color:var(--success); display:flex; align-items:center; gap:6px;\">
                                    <i data-lucide=\"check\" style=\"width:16px;\"></i> <span x-text=\"fileName\"></span>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"form-label\">Nom de l'organisation <span>*</span></label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.name\" placeholder=\"Ex: Banque Mondiale\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Acronyme <span>*</span></label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.acronym\" placeholder=\"Ex: BM\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Type de partenaire <span>*</span></label>
                                <select class=\"form-select\" x-model=\"form.type\" required>
                                    <option value=\"\" disabled selected>Sélectionner...</option>
                                    <option value=\"Multilatéral\">Multilatéral</option>
                                    <option value=\"Bilatéral\">Bilatéral</option>
                                    <option value=\"ONG\">ONG Internationale</option>
                                    <option value=\"Privé\">Secteur Privé</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Site Web</label>
                                <input type=\"url\" class=\"form-input\" x-model=\"form.website\" placeholder=\"https://...\">
                            </div>
                            <div class=\"form-group full\">
                                <label class=\"form-label\">Description / Mission</label>
                                <textarea class=\"form-textarea\" rows=\"3\" x-model=\"form.description\" placeholder=\"Brève description des axes d'intervention...\"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Contact -->
                <div class=\"form-card\">
                    <div class=\"form-card-header\">
                        <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                            <i data-lucide=\"ri\" style=\"color:var(--tchad-blue);\"></i>
                        </div>
                        <div>
                            <h3 style=\"font-size:1.1rem; font-weight:600;\">Point Focal</h3>
                            <p style=\"font-size:0.85rem; color:var(--text-muted);\">Coordonnées du représentant</p>
                        </div>
                    </div>
                    <div class=\"form-card-body\">
                        <div class=\"form-grid\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">Nom complet <span>*</span></label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.contactName\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Fonction</label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.contactRole\" placeholder=\"Ex: Représentant Résident\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Email <span>*</span></label>
                                <input type=\"email\" class=\"form-input\" x-model=\"form.contactEmail\" required>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Téléphone</label>
                                <input type=\"tel\" class=\"form-input\" x-model=\"form.contactPhone\">
                            </div>
                            <div class=\"form-group full\">
                                <label class=\"form-label\">Adresse physique (Bureau Tchad)</label>
                                <input type=\"text\" class=\"form-input\" x-model=\"form.address\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"form-actions\">
                    <button type=\"button\" class=\"btn btn-secondary\" @click=\"window.location.href='sigep-partners.html'\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i data-lucide=\"save\"></i> Enregistrer le Partenaire
                    </button>
                </div>

            </form>
        </div>
      
{% endblock %}

 {% block javascripts %}
     
    {% endblock %}", "partners/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partners\\new.html.twig");
    }
}
