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

/* signalements.html.twig */
class __TwigTemplate_c4ad72a50cf190c9f8ca35d38b82bb39 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "signalements.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/signalements.css"), "html", null, true);
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
        yield "       <!-- Page Header -->
        <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Signalements</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Surveillance</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Signalements</span>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class=\"stats-container\">
            <div class=\"stats-grid\" id=\"statsGrid\">
                <!-- Stats cards will be generated dynamically -->
                <div class=\"stat-card-loading\">
                    <i class=\"ri-loader-4-line spin\"></i>
                    <p>Chargement des statistiques...</p>
                </div>
            </div>
            <div class=\"stats-error\" id=\"statsError\" style=\"display: none;\">
                <i class=\"ri-error-warning-line\"></i>
                <p>Impossible de charger les statistiques</p>
                <button class=\"btn btn-secondary\" onclick=\"fetchStats()\">
                    <i class=\"ri-refresh-line\"></i>
                    Réessayer
                </button>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Registre des Signalements</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addReportBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouveau Signalement
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input 
                            type=\"text\" 
                            class=\"filter-input\" 
                            id=\"searchInput\" 
                            placeholder=\"Référence, description, auteur...\"
                        >
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Catégorie</label>
                        <select class=\"filter-select\" id=\"categorieFilter\">
                            <option value=\"\">Toutes les catégories</option>
                            <option value=\"violence\">Violence</option>
                            <option value=\"fraude\">Fraude</option>
                            <option value=\"cybercrime\">Cybercriminalité</option>
                            <option value=\"corruption\">Corruption</option>
                            <option value=\"terrorisme\">Terrorisme</option>
                            <option value=\"trafic\">Trafic</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"plainte\">Plainte</option>
                            <option value=\"alerte\">Alerte</option>
                            <option value=\"incident\">Incident</option>
                            <option value=\"abus\">Abus</option>
                            <option value=\"contenu_suspect\">Contenu suspect</option>
                            <option value=\"comportement\">Comportement illicite</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statutFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"nouveau\">Nouveau</option>
                            <option value=\"en_cours\">En cours</option>
                            <option value=\"traite\">Traité</option>
                            <option value=\"rejete\">Rejeté</option>
                            <option value=\"archive\">Archivé</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Priorité</label>
                        <select class=\"filter-select\" id=\"prioriteFilter\">
                            <option value=\"\">Toutes les priorités</option>
                            <option value=\"critique\">Critique</option>
                            <option value=\"urgent\">Urgent</option>
                            <option value=\"normal\">Normal</option>
                            <option value=\"faible\">Faible</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Période</label>
                        <select class=\"filter-select\" id=\"periodeFilter\">
                            <option value=\"\">Toutes les périodes</option>
                            <option value=\"24h\">Dernières 24h</option>
                            <option value=\"7days\">7 derniers jours</option>
                            <option value=\"30days\">30 derniers jours</option>
                            <option value=\"3months\">3 derniers mois</option>
                            <option value=\"6months\">6 derniers mois</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <!-- Loading State -->
                <div class=\"table-loading\" id=\"tableLoading\">
                    <i class=\"ri-loader-4-line spin\"></i>
                    <p>Chargement des signalements...</p>
                </div>

                <!-- Error State -->
                <div class=\"table-error\" id=\"tableError\" style=\"display: none;\">
                    <i class=\"ri-error-warning-line\"></i>
                    <p>Erreur lors du chargement des signalements</p>
                    <small id=\"errorMessage\"></small>
                    <button class=\"btn btn-primary\" onclick=\"fetchSignalements()\">
                        <i class=\"ri-refresh-line\"></i>
                        Réessayer
                    </button>
                </div>

                <!-- Data Table -->
                <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Catégorie</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Priorité</th>
                            <th>Statut</th>
                            <th>Auteur</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <!-- Data will be generated dynamically -->
                    </tbody>
                </table>

                <!-- Empty State -->
                <div class=\"table-empty\" id=\"tableEmpty\" style=\"display: none;\">
                    <i class=\"ri-alarm-warning-line\"></i>
                    <p>Aucun signalement trouvé</p>
                    <small>Essayez de modifier vos critères de recherche</small>
                </div>
            </div>

            <!-- Table Footer / Pagination -->
            <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">0</strong> à <strong id=\"endEntry\">0</strong> sur <strong id=\"totalEntries\">0</strong> signalements
                </div>
                <div class=\"pagination-controls\">
                    <div class=\"page-size-selector\">
                        <label>Afficher</label>
                        <select id=\"pageSizeSelect\">
                            <option value=\"10\">10</option>
                            <option value=\"25\">25</option>
                            <option value=\"50\">50</option>
                            <option value=\"100\">100</option>
                        </select>
                        <span>par page</span>
                    </div>
                    <div class=\"pagination\" id=\"pagination\">
                        <!-- Pagination will be generated dynamically -->
                    </div>
                </div>
            </div>
        </div>
   ";
        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 198
        yield "  !-- Report Detail Modal -->
    <div class=\"modal\" id=\"reportModal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Détails du signalement</h3>
                <button class=\"modal-close\" onclick=\"closeModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\" id=\"modalBody\">
                <div class=\"loading\">
                    <i class=\"ri-loader-4-line spin\"></i>
                    <p>Chargement des détails...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class=\"modal\" id=\"confirmModal\" style=\"display: none;\">
        <div class=\"modal-content modal-small\">
            <div class=\"modal-header\">
                <h3 id=\"confirmTitle\">Confirmation</h3>
                <button class=\"modal-close\" onclick=\"closeConfirmModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <p id=\"confirmMessage\"></p>
                <div class=\"modal-actions\">
                    <button class=\"btn btn-secondary\" onclick=\"closeConfirmModal()\">Annuler</button>
                    <button class=\"btn btn-danger\" id=\"confirmBtn\">Confirmer</button>
                </div>
            </div>
        </div>
    </div>
    ";
        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 236
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/signalements.js"), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "signalements.html.twig";
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
        return array (  336 => 236,  329 => 235,  288 => 198,  281 => 197,  88 => 7,  81 => 6,  73 => 4,  66 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "signalements.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/signalements.html.twig");
    }
}
