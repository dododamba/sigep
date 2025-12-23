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

/* dashboard/index.html.twig */
class __TwigTemplate_535e9a9c8b07e212f369c4858fa60422 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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
        yield "
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
        yield "       <div class=\"page-header\">
                <h2>
                    <span class=\"page-header-icon\">
                        <i data-lucide=\"layout-dashboard\"></i>
                    </span>
                    Tableau de bord
                </h2>
                <p>Vue d'ensemble de vos projets et activités - Décembre 2025</p>
            </div>

 <!-- Stats Grid -->
            <div class=\"stats-grid\">
                <div class=\"stat-card animate-in\" style=\"--card-accent: #002664;\">
                    <div class=\"stat-icon blue\">
                        <i data-lucide=\"briefcase\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3 x-text=\"stats.totalProjects\">12</h3>
                        <p>Projets actifs</p>
                        <div class=\"stat-trend up\">
                            <i data-lucide=\"trending-up\" style=\"width: 14px; height: 14px;\"></i>
                            +2 ce mois
                        </div>
                    </div>
                </div>

                <div class=\"stat-card animate-in delay-1\" style=\"--card-accent: #fecb00;\">
                    <div class=\"stat-icon gold\">
                        <i data-lucide=\"coins\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3>85.4 Mds</h3>
                        <p>Budget total (FCFA)</p>
                        <div class=\"stat-trend up\">
                            <i data-lucide=\"trending-up\" style=\"width: 14px; height: 14px;\"></i>
                            +12% vs 2024
                        </div>
                    </div>
                </div>

                <div class=\"stat-card animate-in delay-2\" style=\"--card-accent: #10b981;\">
                    <div class=\"stat-icon green\">
                        <i data-lucide=\"check-circle\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3>67%</h3>
                        <p>Taux d'exécution</p>
                        <div class=\"stat-trend up\">
                            <i data-lucide=\"trending-up\" style=\"width: 14px; height: 14px;\"></i>
                            +8% ce trimestre
                        </div>
                    </div>
                </div>

                <div class=\"stat-card animate-in delay-3\" style=\"--card-accent: #c60c30;\">
                    <div class=\"stat-icon red\">
                        <i data-lucide=\"alert-triangle\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3>3</h3>
                        <p>Projets en retard</p>
                        <div class=\"stat-trend down\">
                            <i data-lucide=\"trending-down\" style=\"width: 14px; height: 14px;\"></i>
                            -1 vs mois dernier
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts & Projects -->
            <div class=\"grid-3\">
                <div>
                    <!-- Budget Chart -->
                    <div class=\"card animate-in delay-2\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"bar-chart-3\"></i>
                                Exécution budgétaire par secteur
                            </h3>
                            <div class=\"card-actions\">
                                <button class=\"btn btn-secondary btn-sm\">
                                    <i data-lucide=\"download\" style=\"width: 14px; height: 14px;\"></i>
                                    Exporter
                                </button>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"chart-container\">
                                <canvas id=\"budgetChart\"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Projects Table -->
                    <div class=\"card animate-in delay-3\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"folder-open\"></i>
                                Projets récents
                            </h3>
                            <div class=\"card-actions\">
                                <button class=\"btn btn-primary btn-sm\">
                                    <i data-lucide=\"plus\" style=\"width: 14px; height: 14px;\"></i>
                                    Nouveau
                                </button>
                            </div>
                        </div>
                        <div class=\"card-body\" style=\"padding: 0;\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>Projet</th>
                                        <th>Secteur</th>
                                        <th>Budget</th>
                                        <th>Progression</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template x-for=\"project in projects.slice(0, 5)\" :key=\"project.id\">
                                        <tr>
                                            <td>
                                                <strong x-text=\"project.name\"></strong>
                                            </td>
                                            <td x-text=\"project.sector\"></td>
                                            <td x-text=\"project.budget\"></td>
                                            <td>
                                                <div class=\"progress-container\">
                                                    <div class=\"progress-bar\">
                                                        <div class=\"progress-fill blue\" :style=\"'width: ' + project.progress + '%'\"></div>
                                                    </div>
                                                    <span class=\"progress-text\" x-text=\"project.progress + '%'\"></span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"status-badge\" :class=\"project.statusClass\">
                                                    <span class=\"status-dot\"></span>
                                                    <span x-text=\"project.status\"></span>
                                                </span>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Activity Feed -->
                    <div class=\"card animate-in delay-2\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"activity\"></i>
                                Activité récente
                            </h3>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"activity-list\">
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon green\">
                                        <i data-lucide=\"check-circle\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Décaissement validé</h5>
                                        <p>Projet Route N'Djamena-Abéché - 2.5 Mds FCFA</p>
                                    </div>
                                    <span class=\"activity-time\">Il y a 2h</span>
                                </li>
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon blue\">
                                        <i data-lucide=\"file-plus\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Nouveau rapport soumis</h5>
                                        <p>Centrale solaire de Moundou - Q4 2025</p>
                                    </div>
                                    <span class=\"activity-time\">Il y a 5h</span>
                                </li>
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon gold\">
                                        <i data-lucide=\"users\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Réunion planifiée</h5>
                                        <p>Comité de pilotage - 18 Déc. 09:00</p>
                                    </div>
                                    <span class=\"activity-time\">Hier</span>
                                </li>
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon red\">
                                        <i data-lucide=\"alert-circle\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Alerte retard</h5>
                                        <p>Hôpital Régional Sarh - Livraison équipements</p>
                                    </div>
                                    <span class=\"activity-time\">Hier</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class=\"card animate-in delay-3\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"pie-chart\"></i>
                                Répartition
                            </h3>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #002664;\"></span>
                                    Infrastructure
                                </span>
                                <span class=\"quick-stat-value\">42%</span>
                            </div>
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #10b981;\"></span>
                                    Santé
                                </span>
                                <span class=\"quick-stat-value\">25%</span>
                            </div>
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #fecb00;\"></span>
                                    Énergie
                                </span>
                                <span class=\"quick-stat-value\">18%</span>
                            </div>
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #c60c30;\"></span>
                                    Agriculture
                                </span>
                                <span class=\"quick-stat-value\">15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Messages Preview -->
            <div class=\"card animate-in delay-4\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"message-square\"></i>
                        Messages récents
                    </h3>
                    <button class=\"btn btn-secondary btn-sm\" @click=\"currentPage = 'messages'\">
                        Voir tout
                        <i data-lucide=\"arrow-right\" style=\"width: 14px; height: 14px;\"></i>
                    </button>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid-2\">
                        <div class=\"message-item unread\">
                            <div class=\"message-avatar\">DP</div>
                            <div class=\"message-content\">
                                <div class=\"message-header\">
                                    <span class=\"message-sender\">David Peterson</span>
                                    <span class=\"message-time\">Il y a 4h</span>
                                </div>
                                <p class=\"message-preview\">Merci pour les documents. Je suis en train de les examiner et je reviendrai vers vous...</p>
                            </div>
                        </div>
                        <div class=\"message-item unread\">
                            <div class=\"message-avatar\">SF</div>
                            <div class=\"message-content\">
                                <div class=\"message-header\">
                                    <span class=\"message-sender\">Sindy Forrest</span>
                                    <span class=\"message-time\">Hier</span>
                                </div>
                                <p class=\"message-preview\">Bonjour! Je serai en congé jusqu'au 20 décembre. Pour toute urgence...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 293
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 294
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
        return "dashboard/index.html.twig";
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
        return array (  408 => 294,  398 => 293,  106 => 7,  96 => 6,  87 => 4,  77 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tableau de Bord{% endblock %}
{% block stylesheets %}

{% endblock %}
    {% block body %}
       <div class=\"page-header\">
                <h2>
                    <span class=\"page-header-icon\">
                        <i data-lucide=\"layout-dashboard\"></i>
                    </span>
                    Tableau de bord
                </h2>
                <p>Vue d'ensemble de vos projets et activités - Décembre 2025</p>
            </div>

 <!-- Stats Grid -->
            <div class=\"stats-grid\">
                <div class=\"stat-card animate-in\" style=\"--card-accent: #002664;\">
                    <div class=\"stat-icon blue\">
                        <i data-lucide=\"briefcase\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3 x-text=\"stats.totalProjects\">12</h3>
                        <p>Projets actifs</p>
                        <div class=\"stat-trend up\">
                            <i data-lucide=\"trending-up\" style=\"width: 14px; height: 14px;\"></i>
                            +2 ce mois
                        </div>
                    </div>
                </div>

                <div class=\"stat-card animate-in delay-1\" style=\"--card-accent: #fecb00;\">
                    <div class=\"stat-icon gold\">
                        <i data-lucide=\"coins\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3>85.4 Mds</h3>
                        <p>Budget total (FCFA)</p>
                        <div class=\"stat-trend up\">
                            <i data-lucide=\"trending-up\" style=\"width: 14px; height: 14px;\"></i>
                            +12% vs 2024
                        </div>
                    </div>
                </div>

                <div class=\"stat-card animate-in delay-2\" style=\"--card-accent: #10b981;\">
                    <div class=\"stat-icon green\">
                        <i data-lucide=\"check-circle\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3>67%</h3>
                        <p>Taux d'exécution</p>
                        <div class=\"stat-trend up\">
                            <i data-lucide=\"trending-up\" style=\"width: 14px; height: 14px;\"></i>
                            +8% ce trimestre
                        </div>
                    </div>
                </div>

                <div class=\"stat-card animate-in delay-3\" style=\"--card-accent: #c60c30;\">
                    <div class=\"stat-icon red\">
                        <i data-lucide=\"alert-triangle\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <h3>3</h3>
                        <p>Projets en retard</p>
                        <div class=\"stat-trend down\">
                            <i data-lucide=\"trending-down\" style=\"width: 14px; height: 14px;\"></i>
                            -1 vs mois dernier
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts & Projects -->
            <div class=\"grid-3\">
                <div>
                    <!-- Budget Chart -->
                    <div class=\"card animate-in delay-2\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"bar-chart-3\"></i>
                                Exécution budgétaire par secteur
                            </h3>
                            <div class=\"card-actions\">
                                <button class=\"btn btn-secondary btn-sm\">
                                    <i data-lucide=\"download\" style=\"width: 14px; height: 14px;\"></i>
                                    Exporter
                                </button>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"chart-container\">
                                <canvas id=\"budgetChart\"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Projects Table -->
                    <div class=\"card animate-in delay-3\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"folder-open\"></i>
                                Projets récents
                            </h3>
                            <div class=\"card-actions\">
                                <button class=\"btn btn-primary btn-sm\">
                                    <i data-lucide=\"plus\" style=\"width: 14px; height: 14px;\"></i>
                                    Nouveau
                                </button>
                            </div>
                        </div>
                        <div class=\"card-body\" style=\"padding: 0;\">
                            <table class=\"data-table\">
                                <thead>
                                    <tr>
                                        <th>Projet</th>
                                        <th>Secteur</th>
                                        <th>Budget</th>
                                        <th>Progression</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template x-for=\"project in projects.slice(0, 5)\" :key=\"project.id\">
                                        <tr>
                                            <td>
                                                <strong x-text=\"project.name\"></strong>
                                            </td>
                                            <td x-text=\"project.sector\"></td>
                                            <td x-text=\"project.budget\"></td>
                                            <td>
                                                <div class=\"progress-container\">
                                                    <div class=\"progress-bar\">
                                                        <div class=\"progress-fill blue\" :style=\"'width: ' + project.progress + '%'\"></div>
                                                    </div>
                                                    <span class=\"progress-text\" x-text=\"project.progress + '%'\"></span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"status-badge\" :class=\"project.statusClass\">
                                                    <span class=\"status-dot\"></span>
                                                    <span x-text=\"project.status\"></span>
                                                </span>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Activity Feed -->
                    <div class=\"card animate-in delay-2\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"activity\"></i>
                                Activité récente
                            </h3>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"activity-list\">
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon green\">
                                        <i data-lucide=\"check-circle\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Décaissement validé</h5>
                                        <p>Projet Route N'Djamena-Abéché - 2.5 Mds FCFA</p>
                                    </div>
                                    <span class=\"activity-time\">Il y a 2h</span>
                                </li>
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon blue\">
                                        <i data-lucide=\"file-plus\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Nouveau rapport soumis</h5>
                                        <p>Centrale solaire de Moundou - Q4 2025</p>
                                    </div>
                                    <span class=\"activity-time\">Il y a 5h</span>
                                </li>
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon gold\">
                                        <i data-lucide=\"users\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Réunion planifiée</h5>
                                        <p>Comité de pilotage - 18 Déc. 09:00</p>
                                    </div>
                                    <span class=\"activity-time\">Hier</span>
                                </li>
                                <li class=\"activity-item\">
                                    <div class=\"activity-icon red\">
                                        <i data-lucide=\"alert-circle\" style=\"width: 18px; height: 18px;\"></i>
                                    </div>
                                    <div class=\"activity-content\">
                                        <h5>Alerte retard</h5>
                                        <p>Hôpital Régional Sarh - Livraison équipements</p>
                                    </div>
                                    <span class=\"activity-time\">Hier</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class=\"card animate-in delay-3\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">
                                <i data-lucide=\"pie-chart\"></i>
                                Répartition
                            </h3>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #002664;\"></span>
                                    Infrastructure
                                </span>
                                <span class=\"quick-stat-value\">42%</span>
                            </div>
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #10b981;\"></span>
                                    Santé
                                </span>
                                <span class=\"quick-stat-value\">25%</span>
                            </div>
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #fecb00;\"></span>
                                    Énergie
                                </span>
                                <span class=\"quick-stat-value\">18%</span>
                            </div>
                            <div class=\"quick-stat\">
                                <span class=\"quick-stat-label\">
                                    <span style=\"width: 12px; height: 12px; border-radius: 3px; background: #c60c30;\"></span>
                                    Agriculture
                                </span>
                                <span class=\"quick-stat-value\">15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Messages Preview -->
            <div class=\"card animate-in delay-4\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i data-lucide=\"message-square\"></i>
                        Messages récents
                    </h3>
                    <button class=\"btn btn-secondary btn-sm\" @click=\"currentPage = 'messages'\">
                        Voir tout
                        <i data-lucide=\"arrow-right\" style=\"width: 14px; height: 14px;\"></i>
                    </button>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid-2\">
                        <div class=\"message-item unread\">
                            <div class=\"message-avatar\">DP</div>
                            <div class=\"message-content\">
                                <div class=\"message-header\">
                                    <span class=\"message-sender\">David Peterson</span>
                                    <span class=\"message-time\">Il y a 4h</span>
                                </div>
                                <p class=\"message-preview\">Merci pour les documents. Je suis en train de les examiner et je reviendrai vers vous...</p>
                            </div>
                        </div>
                        <div class=\"message-item unread\">
                            <div class=\"message-avatar\">SF</div>
                            <div class=\"message-content\">
                                <div class=\"message-header\">
                                    <span class=\"message-sender\">Sindy Forrest</span>
                                    <span class=\"message-time\">Hier</span>
                                </div>
                                <p class=\"message-preview\">Bonjour! Je serai en congé jusqu'au 20 décembre. Pour toute urgence...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
   {% endblock %}

 {% block javascripts %}
     
    {% endblock %}", "dashboard/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\dashboard\\index.html.twig");
    }
}
