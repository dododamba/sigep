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

/* contenus.html.twig */
class __TwigTemplate_a20cdbab55832e9c261d750be4041e39 extends Template
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
            'modal' => [$this, 'block_modal'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenus.html.twig"));

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
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/contenus.css"), "html", null, true);
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
        yield "     <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Contenus Numériques</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Surveillance</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Contenus</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-section\">
            <div class=\"section-header\">
                <h3>Statistiques des Contenus</h3>
                <button class=\"btn-icon\" id=\"refreshStatsBtn\" title=\"Actualiser\">
                    <i class=\"ri-refresh-line\"></i>
                </button>
            </div>
            
            <div class=\"stats-grid\" id=\"statsGrid\">
                <!-- Loading state -->
                <div class=\"stats-loading\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des statistiques...</p>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Liste des Contenus Surveillés</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addContentBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouveau Contenu
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Titre, auteur, description...\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type de contenu</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"article\">Article</option>
                            <option value=\"post\">Publication</option>
                            <option value=\"commentaire\">Commentaire</option>
                            <option value=\"message\">Message</option>
                            <option value=\"video\">Vidéo</option>
                            <option value=\"audio\">Audio</option>
                            <option value=\"image\">Image</option>
                            <option value=\"document\">Document</option>
                            <option value=\"annonce\">Annonce</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"publie\">Publié</option>
                            <option value=\"brouillon\">Brouillon</option>
                            <option value=\"attente\">En attente</option>
                            <option value=\"archive\">Archivé</option>
                            <option value=\"supprime\">Supprimé</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Catégorie</label>
                        <select class=\"filter-select\" id=\"categorieFilter\">
                            <option value=\"\">Toutes les catégories</option>
                            <option value=\"politique\">Politique</option>
                            <option value=\"religieux\">Religieux</option>
                            <option value=\"social\">Social</option>
                            <option value=\"economique\">Économique</option>
                            <option value=\"securite\">Sécurité</option>
                            <option value=\"propaganda\">Propagande</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de début</label>
                        <input type=\"date\" class=\"filter-input\" id=\"startDateFilter\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de fin</label>
                        <input type=\"date\" class=\"filter-input\" id=\"endDateFilter\">
                    </div>
                    
                    <div class=\"filter-actions\">
                        <button class=\"btn btn-secondary btn-sm\" id=\"resetFiltersBtn\">
                            <i class=\"ri-refresh-line\"></i>
                            Réinitialiser
                        </button>
                        <button class=\"btn btn-primary btn-sm\" id=\"applyFiltersBtn\">
                            <i class=\"ri-filter-line\"></i>
                            Appliquer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <!-- Loading State -->
                <div class=\"table-state\" id=\"loadingState\" style=\"display: none;\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des contenus...</p>
                </div>

                <!-- Error State -->
                <div class=\"table-state error-state\" id=\"errorState\" style=\"display: none;\">
                    <i class=\"ri-error-warning-line\"></i>
                    <h4>Erreur de chargement</h4>
                    <p id=\"errorMessage\">Une erreur est survenue lors du chargement des données.</p>
                    <button class=\"btn btn-primary\" id=\"retryBtn\">
                        <i class=\"ri-refresh-line\"></i>
                        Réessayer
                    </button>
                </div>

                <!-- Empty State -->
                <div class=\"table-state\" id=\"emptyState\" style=\"display: none;\">
                    <i class=\"ri-inbox-line\"></i>
                    <h4>Aucun contenu trouvé</h4>
                    <p>Aucun contenu ne correspond à vos critères de recherche.</p>
                </div>

                <!-- Data Table -->
                <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('id')\">
                                ID <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('titre')\">
                                Titre du contenu <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('categorie')\">
                                Catégorie <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('auteur')\">
                                Auteur / Éditeur <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('datePublication')\">
                                Date de publication <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <!-- Data will be generated dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> contenus
                </div>
                <div class=\"pagination-controls\">
                    <label for=\"pageSizeSelect\">Éléments par page :</label>
                    <select id=\"pageSizeSelect\" class=\"pagination-select\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 207
        yield "    <!-- Modal de détails du contenu -->
    <div class=\"modal\" id=\"contentModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"modalOverlay\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Détails du Contenu</h3>
                <button class=\"modal-close\" id=\"modalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\" id=\"modalBody\">
                <!-- Content details will be loaded here -->
                <div class=\"spinner-center\">
                    <div class=\"spinner\"></div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"modalCancelBtn\">Fermer</button>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class=\"modal\" id=\"deleteModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"deleteModalOverlay\"></div>
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Confirmer la suppression</h3>
                <button class=\"modal-close\" id=\"deleteModalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-warning\">
                    <i class=\"ri-alert-line\"></i>
                    <div>
                        <strong>Attention !</strong>
                        <p>Êtes-vous sûr de vouloir supprimer ce contenu ? Cette action est irréversible.</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"deleteCancelBtn\">Annuler</button>
                <button class=\"btn btn-danger\" id=\"deleteConfirmBtn\">
                    <i class=\"ri-delete-bin-line\"></i>
                    Supprimer
                </button>
            </div>
        </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 258
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 259
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contenus.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contenus.html.twig";
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
        return array (  392 => 259,  382 => 258,  324 => 207,  314 => 206,  109 => 7,  99 => 6,  88 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tableau de Bord{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/contenus.css') }}\">
{% endblock %}
   {% block body %}
     <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Contenus Numériques</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Surveillance</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Contenus</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-section\">
            <div class=\"section-header\">
                <h3>Statistiques des Contenus</h3>
                <button class=\"btn-icon\" id=\"refreshStatsBtn\" title=\"Actualiser\">
                    <i class=\"ri-refresh-line\"></i>
                </button>
            </div>
            
            <div class=\"stats-grid\" id=\"statsGrid\">
                <!-- Loading state -->
                <div class=\"stats-loading\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des statistiques...</p>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Liste des Contenus Surveillés</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addContentBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouveau Contenu
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Titre, auteur, description...\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type de contenu</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"article\">Article</option>
                            <option value=\"post\">Publication</option>
                            <option value=\"commentaire\">Commentaire</option>
                            <option value=\"message\">Message</option>
                            <option value=\"video\">Vidéo</option>
                            <option value=\"audio\">Audio</option>
                            <option value=\"image\">Image</option>
                            <option value=\"document\">Document</option>
                            <option value=\"annonce\">Annonce</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"publie\">Publié</option>
                            <option value=\"brouillon\">Brouillon</option>
                            <option value=\"attente\">En attente</option>
                            <option value=\"archive\">Archivé</option>
                            <option value=\"supprime\">Supprimé</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Catégorie</label>
                        <select class=\"filter-select\" id=\"categorieFilter\">
                            <option value=\"\">Toutes les catégories</option>
                            <option value=\"politique\">Politique</option>
                            <option value=\"religieux\">Religieux</option>
                            <option value=\"social\">Social</option>
                            <option value=\"economique\">Économique</option>
                            <option value=\"securite\">Sécurité</option>
                            <option value=\"propaganda\">Propagande</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de début</label>
                        <input type=\"date\" class=\"filter-input\" id=\"startDateFilter\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Date de fin</label>
                        <input type=\"date\" class=\"filter-input\" id=\"endDateFilter\">
                    </div>
                    
                    <div class=\"filter-actions\">
                        <button class=\"btn btn-secondary btn-sm\" id=\"resetFiltersBtn\">
                            <i class=\"ri-refresh-line\"></i>
                            Réinitialiser
                        </button>
                        <button class=\"btn btn-primary btn-sm\" id=\"applyFiltersBtn\">
                            <i class=\"ri-filter-line\"></i>
                            Appliquer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <!-- Loading State -->
                <div class=\"table-state\" id=\"loadingState\" style=\"display: none;\">
                    <div class=\"spinner\"></div>
                    <p>Chargement des contenus...</p>
                </div>

                <!-- Error State -->
                <div class=\"table-state error-state\" id=\"errorState\" style=\"display: none;\">
                    <i class=\"ri-error-warning-line\"></i>
                    <h4>Erreur de chargement</h4>
                    <p id=\"errorMessage\">Une erreur est survenue lors du chargement des données.</p>
                    <button class=\"btn btn-primary\" id=\"retryBtn\">
                        <i class=\"ri-refresh-line\"></i>
                        Réessayer
                    </button>
                </div>

                <!-- Empty State -->
                <div class=\"table-state\" id=\"emptyState\" style=\"display: none;\">
                    <i class=\"ri-inbox-line\"></i>
                    <h4>Aucun contenu trouvé</h4>
                    <p>Aucun contenu ne correspond à vos critères de recherche.</p>
                </div>

                <!-- Data Table -->
                <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('id')\">
                                ID <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('titre')\">
                                Titre du contenu <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('categorie')\">
                                Catégorie <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('auteur')\">
                                Auteur / Éditeur <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('datePublication')\">
                                Date de publication <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <!-- Data will be generated dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> contenus
                </div>
                <div class=\"pagination-controls\">
                    <label for=\"pageSizeSelect\">Éléments par page :</label>
                    <select id=\"pageSizeSelect\" class=\"pagination-select\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
   {% endblock %}

    {% block modal %}
    <!-- Modal de détails du contenu -->
    <div class=\"modal\" id=\"contentModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"modalOverlay\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Détails du Contenu</h3>
                <button class=\"modal-close\" id=\"modalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\" id=\"modalBody\">
                <!-- Content details will be loaded here -->
                <div class=\"spinner-center\">
                    <div class=\"spinner\"></div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"modalCancelBtn\">Fermer</button>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class=\"modal\" id=\"deleteModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"deleteModalOverlay\"></div>
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Confirmer la suppression</h3>
                <button class=\"modal-close\" id=\"deleteModalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-warning\">
                    <i class=\"ri-alert-line\"></i>
                    <div>
                        <strong>Attention !</strong>
                        <p>Êtes-vous sûr de vouloir supprimer ce contenu ? Cette action est irréversible.</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"deleteCancelBtn\">Annuler</button>
                <button class=\"btn btn-danger\" id=\"deleteConfirmBtn\">
                    <i class=\"ri-delete-bin-line\"></i>
                    Supprimer
                </button>
            </div>
        </div>
    </div>
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('js/contenus.js') }}\"></script>
    {% endblock %}", "contenus.html.twig", "/home/xdevcorp/Projects/sigep/templates/contenus.html.twig");
    }
}
