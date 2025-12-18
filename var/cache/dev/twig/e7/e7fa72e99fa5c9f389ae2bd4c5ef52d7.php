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

/* partners/index.html.twig */
class __TwigTemplate_791c3c16e530f9644dcce0746e56457b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partners/index.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/partner.css"), "html", null, true);
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
<div class=\"content-area\">
    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i class=\"ri-team-line\"></i>
                </span>
                Partenaires
            </h2>
            <p>Gestion des bailleurs de fonds et partenaires techniques</p>
        </div>

        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_new");
        yield "\" class=\"btn btn-gold\">
            <i class=\"ri-add-line\"></i>
            Nouveau Partenaire
        </a>
    </div>

    <!-- Stats -->
    <div class=\"stats-row\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue);\">
                    <i class=\"ri-building-2-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\" x-text=\"partners.length\"></div>
            <div class=\"stat-label\">Total Partenaires</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(16, 185, 129, 0.1); color: var(--success);\">
                    <i class=\"ri-checkbox-circle-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\" x-text=\"partners.filter(p => p.status === 'Actif').length\"></div>
            <div class=\"stat-label\">Partenaires Actifs</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(254, 203, 0, 0.2); color: #b8860b;\">
                    <i class=\"ri-coins-line\"></i>
                </div>
            </div>
            <div class=\"stat-label\"> <small>245 Milliards</small></div>
            <div class=\"stat-label\">Financements Cumulés</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(239, 68, 68, 0.1); color: var(--danger);\">
                    <i class=\"ri-alert-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">2</div>
            <div class=\"stat-label\">Conventions Expirées</div>
        </div>
    </div>

    <!-- Table Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 style=\"font-size:1.1rem; font-weight:600;\">Liste des Partenaires</h3>
            <button class=\"btn\" style=\"background:var(--bg-primary); border:1px solid var(--border-color);\" @click=\"init()\">
                <i class=\"ri-refresh-line\"></i> Actualiser
            </button>
        </div>

        <div style=\"overflow-x:auto;\">
            <table class=\"data-table\">
                <tbody>
                    <template x-for=\"partner in filteredPartners\" :key=\"partner.id\">
                        <tr>
                            <td>
                                <div style=\"display:flex; gap:6px;\">
                                    <button class=\"action-btn\" title=\"Voir détails\" @click=\"openViewModal(partner)\">
                                        <i class=\"ri-eye-line\"></i>
                                    </button>
                                    <button class=\"action-btn\" title=\"Modifier\" @click=\"openEditModal(partner)\">
                                        <i class=\"ri-edit-line\"></i>
                                    </button>
                                    <button class=\"action-btn delete\" title=\"Supprimer\" @click=\"confirmDelete(partner)\">
                                        <i class=\"ri-delete-bin-6-line\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
</div>

      
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
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
        return "partners/index.html.twig";
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
        return array (  228 => 109,  218 => 108,  124 => 21,  108 => 7,  98 => 6,  87 => 4,  77 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tableau de Bord{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/partner.css') }}\">
{% endblock %}
    {% block body %}

<div class=\"content-area\">
    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i class=\"ri-team-line\"></i>
                </span>
                Partenaires
            </h2>
            <p>Gestion des bailleurs de fonds et partenaires techniques</p>
        </div>

        <a href=\"{{ path('app_partners_new') }}\" class=\"btn btn-gold\">
            <i class=\"ri-add-line\"></i>
            Nouveau Partenaire
        </a>
    </div>

    <!-- Stats -->
    <div class=\"stats-row\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue);\">
                    <i class=\"ri-building-2-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\" x-text=\"partners.length\"></div>
            <div class=\"stat-label\">Total Partenaires</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(16, 185, 129, 0.1); color: var(--success);\">
                    <i class=\"ri-checkbox-circle-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\" x-text=\"partners.filter(p => p.status === 'Actif').length\"></div>
            <div class=\"stat-label\">Partenaires Actifs</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(254, 203, 0, 0.2); color: #b8860b;\">
                    <i class=\"ri-coins-line\"></i>
                </div>
            </div>
            <div class=\"stat-label\"> <small>245 Milliards</small></div>
            <div class=\"stat-label\">Financements Cumulés</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon\" style=\"background: rgba(239, 68, 68, 0.1); color: var(--danger);\">
                    <i class=\"ri-alert-line\"></i>
                </div>
            </div>
            <div class=\"stat-value\">2</div>
            <div class=\"stat-label\">Conventions Expirées</div>
        </div>
    </div>

    <!-- Table Card -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 style=\"font-size:1.1rem; font-weight:600;\">Liste des Partenaires</h3>
            <button class=\"btn\" style=\"background:var(--bg-primary); border:1px solid var(--border-color);\" @click=\"init()\">
                <i class=\"ri-refresh-line\"></i> Actualiser
            </button>
        </div>

        <div style=\"overflow-x:auto;\">
            <table class=\"data-table\">
                <tbody>
                    <template x-for=\"partner in filteredPartners\" :key=\"partner.id\">
                        <tr>
                            <td>
                                <div style=\"display:flex; gap:6px;\">
                                    <button class=\"action-btn\" title=\"Voir détails\" @click=\"openViewModal(partner)\">
                                        <i class=\"ri-eye-line\"></i>
                                    </button>
                                    <button class=\"action-btn\" title=\"Modifier\" @click=\"openEditModal(partner)\">
                                        <i class=\"ri-edit-line\"></i>
                                    </button>
                                    <button class=\"action-btn delete\" title=\"Supprimer\" @click=\"confirmDelete(partner)\">
                                        <i class=\"ri-delete-bin-6-line\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
</div>

      
   {% endblock %}

 {% block javascripts %}
     
    {% endblock %}", "partners/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partners\\index.html.twig");
    }
}
