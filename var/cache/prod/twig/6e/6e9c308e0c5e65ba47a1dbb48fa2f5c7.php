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

/* enquetes.html.twig */
class __TwigTemplate_3a8b0ae5dfedb8dacf9cab0909e7c188 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "enquetes.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Tableau de Bord";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/enquetes.css"), "html", null, true);
        yield "\">
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "       <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Enquêtes</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Gestion</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Enquêtes</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-section\">
            <div class=\"section-header\">
                <h3>Statistiques des Enquêtes</h3>
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
                    <h3 class=\"table-title\">Liste des Enquêtes</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addEnqueteBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvelle Enquête
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Référence, sujet, enquêteur...\">
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Catégorie</label>
                        <select class=\"filter-select\" id=\"categorieFilter\">
                            <option value=\"\">Toutes les catégories</option>
                            <option value=\"terrorisme\">Terrorisme</option>
                            <option value=\"criminalite\">Criminalité organisée</option>
                            <option value=\"corruption\">Corruption</option>
                            <option value=\"trafic\">Trafic</option>
                            <option value=\"cybercrime\">Cybercriminalité</option>
                            <option value=\"subversion\">Subversion</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'enquête</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"preliminaire\">Préliminaire</option>
                            <option value=\"approfondie\">Approfondie</option>
                            <option value=\"surveillance\">Surveillance</option>
                            <option value=\"infiltration\">Infiltration</option>
                            <option value=\"judiciaire\">Judiciaire</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"ouverte\">Ouverte</option>
                            <option value=\"en_cours\">En cours</option>
                            <option value=\"suspendue\">Suspendue</option>
                            <option value=\"cloturee\">Clôturée</option>
                            <option value=\"archivee\">Archivée</option>
                        </select>
                    </div>
                    
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Priorité</label>
                        <select class=\"filter-select\" id=\"prioriteFilter\">
                            <option value=\"\">Toutes les priorités</option>
                            <option value=\"critique\">Critique</option>
                            <option value=\"haute\">Haute</option>
                            <option value=\"normale\">Normale</option>
                            <option value=\"basse\">Basse</option>
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
                    <p>Chargement des enquêtes...</p>
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
                    <h4>Aucune enquête trouvée</h4>
                    <p>Aucune enquête ne correspond à vos critères de recherche.</p>
                </div>

                <!-- Data Table -->
                <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('reference')\">
                                Référence <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('sujet')\">
                                Sujet / Objet <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('categorie')\">
                                Catégorie <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('type')\">
                                Type <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('enqueteur')\">
                                Enquêteur principal <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('priorite')\">
                                Priorité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('dateCreation')\">
                                Date de création <i class=\"ri-arrow-up-down-line sort-icon\"></i>
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
                    Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> enquêtes
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
        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 217
        yield "       <!-- Modal de détails de l'enquête -->
    <div class=\"modal\" id=\"enqueteModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"modalOverlay\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Détails de l'Enquête</h3>
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
                <button class=\"btn btn-primary\" id=\"modalEditBtn\">
                    <i class=\"ri-edit-line\"></i>
                    Modifier
                </button>
            </div>
        </div>
    </div>

    <!-- Modal de clôture d'enquête -->
    <div class=\"modal\" id=\"closeModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" id=\"closeModalOverlay\"></div>
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Clôturer l'enquête</h3>
                <button class=\"modal-close\" id=\"closeModalClose\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"ri-information-line\"></i>
                    <div>
                        <strong>Information</strong>
                        <p>Êtes-vous sûr de vouloir clôturer cette enquête ? Vous pourrez toujours la réouvrir ultérieurement si nécessaire.</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Motif de clôture</label>
                    <select class=\"form-input\" id=\"closeReasonSelect\">
                        <option value=\"\">Sélectionner un motif</option>
                        <option value=\"resolue\">Enquête résolue</option>
                        <option value=\"abandon\">Abandon faute de preuves</option>
                        <option value=\"transfert\">Transférée à une autre juridiction</option>
                        <option value=\"classement\">Classement sans suite</option>
                        <option value=\"autre\">Autre motif</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Rapport de clôture</label>
                    <textarea class=\"form-textarea\" id=\"closeReportTextarea\" rows=\"4\" placeholder=\"Résumé des conclusions et actions menées...\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" id=\"closeCancelBtn\">Annuler</button>
                <button class=\"btn btn-success\" id=\"closeConfirmBtn\">
                    <i class=\"ri-check-line\"></i>
                    Clôturer l'enquête
                </button>
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
                        <p>Êtes-vous sûr de vouloir supprimer cette enquête ? Cette action est irréversible et supprimera toutes les données associées.</p>
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
        yield from [];
    }

    // line 317
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 318
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/enquetes.js"), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "enquetes.html.twig";
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
        return array (  418 => 318,  411 => 317,  307 => 217,  300 => 216,  88 => 7,  81 => 6,  73 => 4,  66 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "enquetes.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/enquetes.html.twig");
    }
}
