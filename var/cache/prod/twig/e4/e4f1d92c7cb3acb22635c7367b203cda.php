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

/* sujets.html.twig */
class __TwigTemplate_4b339c1a5f52c1c354284da7bca8f585 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "sujets.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/personnes-fichees.css"), "html", null, true);
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
        yield "          <!-- Page Header -->
        <div class=\"page-header\">
            <h2 class=\"page-title\">  Gestion des Personnes Fichées</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Principal</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Sujets</span>
            </div>
        </div>

        
        <!-- Statistics Grid -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-user-search-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Total Fiches</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-alert-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Catégorie A (Haute menace)</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-shield-cross-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Dangerosité Critique</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-time-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Nouvelles Fiches (30j)</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-eye-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Surveillance Active</div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Bar -->
        <div class=\"quick-stats-bar\">
            <div class=\"quick-stat\">
                <span class=\"quick-stat-label\">Catégorie A</span>
                <span class=\"quick-stat-value badge-categorie-a\" id=\"quickStatA\">--</span>
            </div>
            <div class=\"quick-stat\">
                <span class=\"quick-stat-label\">Catégorie B</span>
                <span class=\"quick-stat-value badge-categorie-b\" id=\"quickStatB\">--</span>
            </div>
            <div class=\"quick-stat\">
                <span class=\"quick-stat-label\">Catégorie C</span>
                <span class=\"quick-stat-value badge-categorie-c\" id=\"quickStatC\">--</span>
            </div>
            <div class=\"quick-stat\">
                <span class=\"quick-stat-label\">Catégorie S</span>
                <span class=\"quick-stat-value badge-categorie-s\" id=\"quickStatS\">--</span>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Registre des Personnes Surveillées</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addPersonneBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvelle Fiche
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" 
                               placeholder=\"Nom, alias, pseudo, ID...\">
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Catégorie</label>
                        <select class=\"filter-select\" id=\"categorieFilter\">
                            <option value=\"\">Toutes</option>
                            <option value=\"A\">A - Haute menace</option>
                            <option value=\"B\">B - Menace modérée</option>
                            <option value=\"C\">C - Surveillance</option>
                            <option value=\"S\">S - Spécial</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Dangerosité</label>
                        <select class=\"filter-select\" id=\"dangersiteFilter\">
                            <option value=\"\">Tous niveaux</option>
                            <option value=\"5\">Critique (5/5)</option>
                            <option value=\"4\">Élevé (4/5)</option>
                            <option value=\"3\">Moyen (3/5)</option>
                            <option value=\"2\">Faible (2/5)</option>
                            <option value=\"1\">Très faible (1/5)</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Statut</label>
                        <select class=\"filter-select\" id=\"statutFilter\">
                            <option value=\"\">Tous</option>
                            <option value=\"actif\">Actif</option>
                            <option value=\"surveille\">Sous surveillance</option>
                            <option value=\"archive\">Archivé</option>
                            <option value=\"neutralise\">Neutralisé</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Zone</label>
                        <select class=\"filter-select\" id=\"zoneFilter\">
                            <option value=\"\">Toutes zones</option>
                            <option value=\"ndjamena\">N'Djamena</option>
                            <option value=\"moundou\">Moundou</option>
                            <option value=\"sarh\">Sarh</option>
                            <option value=\"abéché\">Abéché</option>
                            <option value=\"kanem\">Kanem</option>
                            <option value=\"ouaddai\">Ouaddaï</option>
                            <option value=\"logone\">Logone</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Éléments liés</label>
                        <select class=\"filter-select\" id=\"elementsFilter\">
                            <option value=\"\">Tous</option>
                            <option value=\"condamnation\">Avec condamnation</option>
                            <option value=\"enquete\">Avec enquête</option>
                            <option value=\"identite\">Avec identité numérique</option>
                            <option value=\"signalement\">Avec signalement</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <table class=\"data-table\" id=\"dataTable\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('id')\">
                                ID <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('nom')\">
                                Identité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('alias')\">
                                Alias / Pseudo
                            </th>
                            <th onclick=\"sortTable('age')\">
                                Âge <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('categorie')\">
                                Catégorie <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('dangerosite')\">
                                Dangerosité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Zone</th>
                            <th>Éléments liés</th>
                            <th onclick=\"sortTable('derniereActivite')\">
                                Dernière activité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <tr>
                            <td colspan=\"11\" class=\"loading-cell\">
                                <div class=\"loading-spinner\"></div>
                                Chargement des données...
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class=\"table-footer\">
                <div class=\"pagination-info\">
                    Affichage de <strong id=\"startEntry\">0</strong> à <strong id=\"endEntry\">0</strong> 
                    sur <strong id=\"totalEntries\">0</strong> personnes fichées
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
   ";
        yield from [];
    }

    // line 229
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 230
        yield "      <!-- Modal: Ajouter/Modifier Personne -->
    <div class=\"modal\" id=\"personneModal\">
        <div class=\"modal-content modal-large\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Nouvelle Fiche</h3>
                <button class=\"modal-close\" onclick=\"closePersonneModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"personneForm\">
                    <input type=\"hidden\" id=\"personneId\">
                    
                    <h4 class=\"form-section-title\">Identité civile</h4>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Nom</label>
                            <input type=\"text\" class=\"form-input\" id=\"nom\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Prénom</label>
                            <input type=\"text\" class=\"form-input\" id=\"prenom\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Alias / Pseudo</label>
                            <input type=\"text\" class=\"form-input\" id=\"alias\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Date de naissance</label>
                            <input type=\"date\" class=\"form-input\" id=\"dateNaissance\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Sexe</label>
                            <select class=\"form-input\" id=\"sexe\">
                                <option value=\"\">Non spécifié</option>
                                <option value=\"M\">Masculin</option>
                                <option value=\"F\">Féminin</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Nationalité</label>
                            <input type=\"text\" class=\"form-input\" id=\"nationalite\" value=\"Tchadienne\">
                        </div>
                    </div>

                    <h4 class=\"form-section-title\">Classification</h4>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Catégorie</label>
                            <select class=\"form-input\" id=\"categorie\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"A\">A - Haute menace</option>
                                <option value=\"B\">B - Menace modérée</option>
                                <option value=\"C\">C - Surveillance</option>
                                <option value=\"S\">S - Spécial</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Niveau de dangerosité</label>
                            <select class=\"form-input\" id=\"dangerosite\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"5\">Critique (5/5)</option>
                                <option value=\"4\">Élevé (4/5)</option>
                                <option value=\"3\">Moyen (3/5)</option>
                                <option value=\"2\">Faible (2/5)</option>
                                <option value=\"1\">Très faible (1/5)</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Statut</label>
                            <select class=\"form-input\" id=\"statut\">
                                <option value=\"actif\">Actif</option>
                                <option value=\"surveille\">Sous surveillance</option>
                                <option value=\"archive\">Archivé</option>
                                <option value=\"neutralise\">Neutralisé</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Zone principale</label>
                            <select class=\"form-input\" id=\"zone\">
                                <option value=\"\">Sélectionner</option>
                                <option value=\"ndjamena\">N'Djamena</option>
                                <option value=\"moundou\">Moundou</option>
                                <option value=\"sarh\">Sarh</option>
                                <option value=\"abéché\">Abéché</option>
                                <option value=\"kanem\">Kanem</option>
                                <option value=\"ouaddai\">Ouaddaï</option>
                                <option value=\"logone\">Logone</option>
                                <option value=\"autre\">Autre</option>
                            </select>
                        </div>
                    </div>

                    <h4 class=\"form-section-title\">
                        <i class=\"ri-alert-line\" style=\"color: var(--warning-color);\"></i>
                        Informations sensibles
                        <small style=\"font-weight: normal; font-size: 12px; color: var(--text-muted);\">
                            (Accès restreint selon habilitation)
                        </small>
                    </h4>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Appartenance politique</label>
                            <input type=\"text\" class=\"form-input sensitive-input\" id=\"appartenancePolitique\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Appartenance religieuse</label>
                            <input type=\"text\" class=\"form-input sensitive-input\" id=\"appartenanceReligieuse\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Groupe ethnique</label>
                            <input type=\"text\" class=\"form-input sensitive-input\" id=\"groupeEthnique\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Idéologie</label>
                            <input type=\"text\" class=\"form-input sensitive-input\" id=\"ideologie\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\">Signes distinctifs</label>
                        <textarea class=\"form-textarea\" id=\"signesDistinctifs\" rows=\"3\" 
                                  placeholder=\"Cicatrices, tatouages, caractéristiques physiques...\"></textarea>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\">Observations</label>
                        <textarea class=\"form-textarea\" id=\"observations\" rows=\"4\" 
                                  placeholder=\"Observations générales...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closePersonneModal()\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"savePersonneBtn\" onclick=\"submitPersonne()\">
                    <i class=\"ri-save-line\"></i>
                    Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Fiche Détaillée (9 onglets) -->
    <div class=\"modal\" id=\"ficheModal\">
        <div class=\"modal-content modal-xlarge\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <h3 id=\"ficheTitle\">Fiche Détaillée</h3>
                    <span class=\"badge-categorie\" id=\"ficheCategorie\"></span>
                    <span class=\"badge-status\" id=\"ficheStatut\"></span>
                </div>
                <button class=\"modal-close\" onclick=\"closeFicheModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- Tabs Navigation -->
                <div class=\"tabs-nav\" id=\"tabsNav\">
                    <button class=\"tab-btn active\" data-tab=\"resume\">
                        <i class=\"ri-user-line\"></i> Résumé & Identité
                    </button>
                    <button class=\"tab-btn\" data-tab=\"identites\">
                        <i class=\"ri-smartphone-line\"></i> Identités numériques
                    </button>
                    <button class=\"tab-btn\" data-tab=\"etablissements\">
                        <i class=\"ri-map-pin-line\"></i> Établissements
                    </button>
                    <button class=\"tab-btn\" data-tab=\"affiliations\">
                        <i class=\"ri-links-line\"></i> Affiliations
                    </button>
                    <button class=\"tab-btn\" data-tab=\"condamnations\">
                        <i class=\"ri-scales-line\"></i> Condamnations
                    </button>
                    <button class=\"tab-btn\" data-tab=\"enquetes\">
                        <i class=\"ri-search-line\"></i> Enquêtes
                    </button>
                    <button class=\"tab-btn\" data-tab=\"signalements\">
                        <i class=\"ri-alarm-warning-line\"></i> Signalements
                    </button>
                    <button class=\"tab-btn\" data-tab=\"contenus\">
                        <i class=\"ri-file-text-line\"></i> Contenus
                    </button>
                    <button class=\"tab-btn\" data-tab=\"historique\">
                        <i class=\"ri-history-line\"></i> Historique
                    </button>
                </div>

                <!-- Tab: Résumé & Identité -->
                <div class=\"tab-content active\" id=\"tab-resume\">
                    <div class=\"fiche-resume\" id=\"resumeContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Identités numériques -->
                <div class=\"tab-content\" id=\"tab-identites\">
                    <div class=\"tab-section-header\">
                        <h4>Comptes et Présences en Ligne</h4>
                        <button class=\"btn btn-sm btn-primary\" onclick=\"addIdentiteNumerique()\">
                            <i class=\"ri-add-line\"></i> Ajouter
                        </button>
                    </div>
                    <div id=\"identitesContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Établissements -->
                <div class=\"tab-content\" id=\"tab-etablissements\">
                    <div class=\"tab-section-header\">
                        <h4>Lieux Fréquentés</h4>
                        <button class=\"btn btn-sm btn-primary\" onclick=\"addEtablissement()\">
                            <i class=\"ri-add-line\"></i> Ajouter
                        </button>
                    </div>
                    <div id=\"etablissementsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Affiliations -->
                <div class=\"tab-content\" id=\"tab-affiliations\">
                    <div class=\"tab-section-header\">
                        <h4>Relations et Réseaux</h4>
                        <button class=\"btn btn-sm btn-primary\" onclick=\"addAffiliation()\">
                            <i class=\"ri-add-line\"></i> Ajouter
                        </button>
                    </div>
                    <div id=\"affiliationsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Condamnations -->
                <div class=\"tab-content\" id=\"tab-condamnations\">
                    <div class=\"tab-section-header\">
                        <h4>Parcours Judiciaire</h4>
                    </div>
                    <div id=\"condamnationsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Enquêtes -->
                <div class=\"tab-content\" id=\"tab-enquetes\">
                    <div class=\"tab-section-header\">
                        <h4>Enquêtes en Cours ou Terminées</h4>
                    </div>
                    <div id=\"enquetesContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Signalements -->
                <div class=\"tab-content\" id=\"tab-signalements\">
                    <div class=\"tab-section-header\">
                        <h4>Alertes et Rapports</h4>
                    </div>
                    <div id=\"signalementsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Contenus -->
                <div class=\"tab-content\" id=\"tab-contenus\">
                    <div class=\"tab-section-header\">
                        <h4>Contenus Publiés en Ligne</h4>
                    </div>
                    <div id=\"contenusContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Historique -->
                <div class=\"tab-content\" id=\"tab-historique\">
                    <div class=\"timeline\" id=\"historiqueContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeFicheModal()\">
                    Fermer
                </button>
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"exportFiche()\">
                    <i class=\"ri-download-line\"></i> Exporter PDF
                </button>
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"editPersonne()\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </button>
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deletePersonne()\" id=\"deleteFicheBtn\">
                    <i class=\"ri-delete-bin-line\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>

    ";
        yield from [];
    }

    // line 530
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 531
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/personnes-fichees.js"), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sujets.html.twig";
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
        return array (  631 => 531,  624 => 530,  320 => 230,  313 => 229,  88 => 7,  81 => 6,  73 => 4,  66 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sujets.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/sujets.html.twig");
    }
}
