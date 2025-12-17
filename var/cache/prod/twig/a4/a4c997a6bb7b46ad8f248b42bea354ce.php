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

/* identites.html.twig */
class __TwigTemplate_8b80766d55a7fa34de05d210c1a17fc3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "identites.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Identité numérique";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/identites-numeriques.css"), "html", null, true);
        yield "\">
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "       <!-- Page Header -->
        <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Identités Numériques</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Surveillance</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Identités numériques</span>
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
                    <h3 class=\"table-title\">Registre des Identités Numériques</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addIdentityBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvelle Identité
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
                            placeholder=\"Numéro, nom, prénom...\"
                        >
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'identité</label>
                        <select class=\"filter-select\" id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"nina\">NINA</option>
                            <option value=\"cni\">CNI</option>
                            <option value=\"passeport\">Passeport biométrique</option>
                            <option value=\"profil_sigma\">Profil SIGMA</option>
                            <option value=\"permis\">Permis de conduire</option>
                            <option value=\"carte_electorale\">Carte électorale</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statutFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"active\">Active</option>
                            <option value=\"suspendue\">Suspendue</option>
                            <option value=\"expiree\">Expirée</option>
                            <option value=\"revoquee\">Révoquée</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Période</label>
                        <select class=\"filter-select\" id=\"periodeFilter\">
                            <option value=\"\">Toutes les périodes</option>
                            <option value=\"7days\">7 derniers jours</option>
                            <option value=\"30days\">30 derniers jours</option>
                            <option value=\"3months\">3 derniers mois</option>
                            <option value=\"6months\">6 derniers mois</option>
                            <option value=\"1year\">1 an</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <!-- Loading State -->
                <div class=\"table-loading\" id=\"tableLoading\">
                    <i class=\"ri-loader-4-line spin\"></i>
                    <p>Chargement des identités numériques...</p>
                </div>

                <!-- Error State -->
                <div class=\"table-error\" id=\"tableError\" style=\"display: none;\">
                    <i class=\"ri-error-warning-line\"></i>
                    <p>Erreur lors du chargement des identités</p>
                    <small id=\"errorMessage\"></small>
                    <button class=\"btn btn-primary\" onclick=\"fetchIdentites()\">
                        <i class=\"ri-refresh-line\"></i>
                        Réessayer
                    </button>
                </div>

                <!-- Data Table -->
                <table class=\"data-table\" id=\"dataTable\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th>Numéro d'identité</th>
                            <th>Titulaire</th>
                            <th>Type</th>
                            <th>Date d'émission</th>
                            <th>Date d'expiration</th>
                            <th>Contact</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <!-- Data will be generated dynamically -->
                    </tbody>
                </table>

                <!-- Empty State -->
                <div class=\"table-empty\" id=\"tableEmpty\" style=\"display: none;\">
                    <i class=\"ri-fingerprint-line\"></i>
                    <p>Aucune identité numérique trouvée</p>
                    <small>Essayez de modifier vos critères de recherche</small>
                </div>
            </div>

            <!-- Table Footer / Pagination -->
            <div class=\"table-footer\" id=\"tableFooter\" style=\"display: none;\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">0</strong> à <strong id=\"endEntry\">0</strong> sur <strong id=\"totalEntries\">0</strong> identités
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

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 173
        yield "     <div class=\"modal\" id=\"identityModal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Détails de l'identité numérique</h3>
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
   ";
        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 191
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/identites-numeriques.js"), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "identites.html.twig";
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
        return array (  291 => 191,  284 => 190,  263 => 173,  256 => 172,  88 => 8,  81 => 7,  73 => 5,  66 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "identites.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/identites.html.twig");
    }
}
