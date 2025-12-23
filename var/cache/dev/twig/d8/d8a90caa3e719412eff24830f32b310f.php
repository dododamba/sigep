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
class __TwigTemplate_2d197ddbb33cb793928ffbe5e556f1c0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sujets.html.twig"));

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

        yield "Sujets - SIGMA";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/personnes-fichees.css"), "html", null, true);
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
        yield "    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2 class=\"page-title\">Gestion des Personnes Fichées</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Principal</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span class=\"breadcrumb-active\">Sujets</span>
            </div>
        </div>
        <div class=\"page-header-right\">
            <div class=\"security-badge\">
                <i class=\"ri-shield-check-line\"></i>
                <span>Accès autorisé</span>
            </div>
        </div>
    </div>

    <!-- Statistics Grid -->
    <div class=\"stats-grid\" id=\"statsGrid\">
        <div class=\"stat-card primary loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-user-search-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Total Fiches</div>
            </div>
        </div>
        <div class=\"stat-card danger loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-alert-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Catégorie A (Haute menace)</div>
            </div>
        </div>
        <div class=\"stat-card warning loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-shield-cross-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Dangerosité Critique</div>
            </div>
        </div>
        <div class=\"stat-card success loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-time-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Nouvelles Fiches (30j)</div>
            </div>
        </div>
        <div class=\"stat-card info loading\">
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
            <span class=\"quick-stat-value cat-a\" id=\"quickStatA\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Catégorie B</span>
            <span class=\"quick-stat-value cat-b\" id=\"quickStatB\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Catégorie C</span>
            <span class=\"quick-stat-value cat-c\" id=\"quickStatC\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Catégorie S</span>
            <span class=\"quick-stat-value cat-s\" id=\"quickStatS\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Incidents Actifs</span>
            <span class=\"quick-stat-value incidents\" id=\"quickStatIncidents\">--</span>
        </div>
    </div>

    <!-- Table Container -->
    <div class=\"table-container\">
        <div class=\"table-header\">
            <div class=\"table-header-top\">
                <h3 class=\"table-title\">
                    <i class=\"ri-user-search-line\"></i>
                    Registre des Personnes Surveillées
                </h3>
                <div class=\"table-actions\">
                    <button class=\"btn btn-secondary\" id=\"exportBtn\">
                        <i class=\"ri-download-line\"></i>
                        Exporter
                    </button>
                    <button class=\"btn btn-secondary\" id=\"printBtn\">
                        <i class=\"ri-printer-line\"></i>
                        Imprimer
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
                        <option value=\"lac\">Lac Tchad</option>
                        <option value=\"moundou\">Moundou</option>
                        <option value=\"sarh\">Sarh</option>
                        <option value=\"abéché\">Abéché</option>
                        <option value=\"kanem\">Kanem</option>
                        <option value=\"ouaddai\">Ouaddaï</option>
                        <option value=\"logone\">Logone</option>
                        <option value=\"borkou\">Borkou</option>
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
                        <option value=\"incident\">Avec incident</option>
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
            <div class=\"pagination-controls\">
                <div class=\"page-size-selector\">
                    <span>Afficher</span>
                    <select class=\"pagination-select\" id=\"pageSize\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                    <span>entrées</span>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 263
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 264
        yield "    <!-- Modal: Ajouter/Modifier Personne -->
    <div class=\"modal\" id=\"personneModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closePersonneModal()\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <i class=\"ri-user-add-line\" style=\"font-size: 24px; color: var(--primary-color);\"></i>
                    <h3 id=\"personneModalTitle\">Nouvelle Fiche</h3>
                </div>
                <button class=\"modal-close\" onclick=\"closePersonneModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"personneForm\">
                    <input type=\"hidden\" id=\"personneId\">
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-user-line\"></i>
                        Identité civile
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Nom</label>
                            <input type=\"text\" class=\"form-input\" id=\"nom\" required placeholder=\"Nom de famille\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Prénom</label>
                            <input type=\"text\" class=\"form-input\" id=\"prenom\" required placeholder=\"Prénom(s)\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Alias / Pseudo</label>
                            <input type=\"text\" class=\"form-input\" id=\"alias\" placeholder=\"Surnom connu\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Date de naissance</label>
                            <input type=\"date\" class=\"form-input\" id=\"dateNaissance\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Sexe</label>
                            <select class=\"form-select\" id=\"sexe\">
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

                    <div class=\"form-section-title\">
                        <i class=\"ri-shield-star-line\"></i>
                        Classification
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Catégorie</label>
                            <select class=\"form-select\" id=\"categorie\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"A\">A - Haute menace</option>
                                <option value=\"B\">B - Menace modérée</option>
                                <option value=\"C\">C - Surveillance</option>
                                <option value=\"S\">S - Spécial</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Niveau de dangerosité</label>
                            <select class=\"form-select\" id=\"dangerosite\" required>
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
                            <select class=\"form-select\" id=\"statut\">
                                <option value=\"actif\">Actif</option>
                                <option value=\"surveille\">Sous surveillance</option>
                                <option value=\"archive\">Archivé</option>
                                <option value=\"neutralise\">Neutralisé</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Zone principale</label>
                            <select class=\"form-select\" id=\"zone\">
                                <option value=\"\">Sélectionner</option>
                                <option value=\"ndjamena\">N'Djamena</option>
                                <option value=\"lac\">Lac Tchad</option>
                                <option value=\"moundou\">Moundou</option>
                                <option value=\"sarh\">Sarh</option>
                                <option value=\"abéché\">Abéché</option>
                                <option value=\"kanem\">Kanem</option>
                                <option value=\"ouaddai\">Ouaddaï</option>
                                <option value=\"logone\">Logone</option>
                                <option value=\"borkou\">Borkou</option>
                                <option value=\"autre\">Autre</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-section-title sensitive-section\">
                        <i class=\"ri-alert-line\"></i>
                        Informations sensibles
                        <small>(Accès restreint selon habilitation)</small>
                    </div>
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

    <!-- Modal: Fiche Détaillée (10 onglets avec Incidents) -->
    <div class=\"modal\" id=\"ficheModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closeFicheModal()\"></div>
        <div class=\"modal-content modal-xlarge\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <div class=\"fiche-avatar\" id=\"ficheAvatar\">
                        <i class=\"ri-user-line\"></i>
                    </div>
                    <div class=\"fiche-header-info\">
                        <h3 id=\"ficheTitle\">Fiche Détaillée</h3>
                        <div class=\"fiche-header-badges\">
                            <span class=\"categorie-badge\" id=\"ficheCategorie\"></span>
                            <span class=\"status-badge\" id=\"ficheStatut\"></span>
                            <span class=\"danger-badge\" id=\"ficheDangerosite\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"modal-header-actions\">
                    <button class=\"btn btn-sm btn-secondary\" onclick=\"exportFiche()\" title=\"Exporter PDF\">
                        <i class=\"ri-download-line\"></i>
                    </button>
                    <button class=\"btn btn-sm btn-warning\" onclick=\"editPersonne()\" title=\"Modifier\">
                        <i class=\"ri-edit-line\"></i>
                    </button>
                    <button class=\"modal-close\" onclick=\"closeFicheModal()\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
            </div>
            <div class=\"modal-body\">
                <!-- Tabs Navigation -->
                <div class=\"tabs-nav\" id=\"tabsNav\">
                    <button class=\"tab-btn active\" data-tab=\"resume\">
                        <i class=\"ri-user-line\"></i> 
                        <span class=\"tab-text\">Résumé</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"identites\">
                        <i class=\"ri-smartphone-line\"></i> 
                        <span class=\"tab-text\">Identités numériques</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"etablissements\">
                        <i class=\"ri-map-pin-line\"></i> 
                        <span class=\"tab-text\">Établissements</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"affiliations\">
                        <i class=\"ri-links-line\"></i> 
                        <span class=\"tab-text\">Affiliations</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"incidents\">
                        <i class=\"ri-error-warning-line\"></i> 
                        <span class=\"tab-text\">Incidents</span>
                        <span class=\"tab-badge\" id=\"incidentsCount\">0</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"condamnations\">
                        <i class=\"ri-scales-line\"></i> 
                        <span class=\"tab-text\">Condamnations</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"enquetes\">
                        <i class=\"ri-search-line\"></i> 
                        <span class=\"tab-text\">Enquêtes</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"signalements\">
                        <i class=\"ri-alarm-warning-line\"></i> 
                        <span class=\"tab-text\">Signalements</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"contenus\">
                        <i class=\"ri-file-text-line\"></i> 
                        <span class=\"tab-text\">Contenus</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"historique\">
                        <i class=\"ri-history-line\"></i> 
                        <span class=\"tab-text\">Historique</span>
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
                        <h4><i class=\"ri-smartphone-line\"></i> Comptes et Présences en Ligne</h4>
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
                        <h4><i class=\"ri-map-pin-line\"></i> Lieux Fréquentés</h4>
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
                        <h4><i class=\"ri-links-line\"></i> Relations et Réseaux</h4>
                        <button class=\"btn btn-sm btn-primary\" onclick=\"addAffiliation()\">
                            <i class=\"ri-add-line\"></i> Ajouter
                        </button>
                    </div>
                    <div id=\"affiliationsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Incidents (NOUVEAU) -->
                <div class=\"tab-content\" id=\"tab-incidents\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-error-warning-line\"></i> Incidents Associés</h4>
                        <button class=\"btn btn-sm btn-primary\" onclick=\"addIncident()\">
                            <i class=\"ri-add-line\"></i> Déclarer un incident
                        </button>
                    </div>
                    <!-- Statistiques des incidents -->
                    <div class=\"incidents-stats\" id=\"incidentsStats\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                    <!-- Liste des incidents -->
                    <div id=\"incidentsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Condamnations -->
                <div class=\"tab-content\" id=\"tab-condamnations\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-scales-line\"></i> Parcours Judiciaire</h4>
                    </div>
                    <div id=\"condamnationsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Enquêtes -->
                <div class=\"tab-content\" id=\"tab-enquetes\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-search-line\"></i> Enquêtes en Cours ou Terminées</h4>
                    </div>
                    <div id=\"enquetesContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Signalements -->
                <div class=\"tab-content\" id=\"tab-signalements\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-alarm-warning-line\"></i> Alertes et Rapports</h4>
                    </div>
                    <div id=\"signalementsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Contenus -->
                <div class=\"tab-content\" id=\"tab-contenus\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-file-text-line\"></i> Contenus Publiés en Ligne</h4>
                    </div>
                    <div id=\"contenusContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Historique -->
                <div class=\"tab-content\" id=\"tab-historique\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-history-line\"></i> Journal des Modifications</h4>
                    </div>
                    <div class=\"timeline\" id=\"historiqueContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeFicheModal()\">
                    Fermer
                </button>
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deletePersonne()\" id=\"deleteFicheBtn\">
                    <i class=\"ri-delete-bin-line\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Détail Incident -->
    <div class=\"modal\" id=\"incidentModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closeIncidentModal()\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <i class=\"ri-error-warning-line\" style=\"font-size: 24px; color: var(--danger-color);\"></i>
                    <h3 id=\"incidentModalTitle\">Détail de l'Incident</h3>
                </div>
                <button class=\"modal-close\" onclick=\"closeIncidentModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\" id=\"incidentModalBody\">
                <div class=\"loading-spinner\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeIncidentModal()\">
                    Fermer
                </button>
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"editIncident()\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Ajouter Incident -->
    <div class=\"modal\" id=\"addIncidentModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closeAddIncidentModal()\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <i class=\"ri-add-circle-line\" style=\"font-size: 24px; color: var(--primary-color);\"></i>
                    <h3>Déclarer un Incident</h3>
                </div>
                <button class=\"modal-close\" onclick=\"closeAddIncidentModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"incidentForm\">
                    <input type=\"hidden\" id=\"incidentPersonneId\">
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-information-line\"></i>
                        Informations de l'incident
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Type d'incident</label>
                            <select class=\"form-select\" id=\"incidentType\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"violence\">Violence / Agression</option>
                                <option value=\"menace\">Menace / Intimidation</option>
                                <option value=\"propagande\">Propagande / Radicalisation</option>
                                <option value=\"financement\">Financement suspect</option>
                                <option value=\"deplacement\">Déplacement suspect</option>
                                <option value=\"contact\">Contact avec organisation</option>
                                <option value=\"recrutement\">Tentative de recrutement</option>
                                <option value=\"cybercrime\">Activité cybercriminelle</option>
                                <option value=\"autre\">Autre</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Gravité</label>
                            <select class=\"form-select\" id=\"incidentGravite\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"5\">Critique (5/5)</option>
                                <option value=\"4\">Élevée (4/5)</option>
                                <option value=\"3\">Moyenne (3/5)</option>
                                <option value=\"2\">Faible (2/5)</option>
                                <option value=\"1\">Mineure (1/5)</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Date de l'incident</label>
                            <input type=\"datetime-local\" class=\"form-input\" id=\"incidentDate\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Localisation</label>
                            <input type=\"text\" class=\"form-input\" id=\"incidentLocalisation\" required 
                                   placeholder=\"Lieu précis de l'incident\">
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"form-label required\">Description</label>
                        <textarea class=\"form-textarea\" id=\"incidentDescription\" rows=\"4\" required
                                  placeholder=\"Description détaillée de l'incident...\"></textarea>
                    </div>
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-user-line\"></i>
                        Personnes impliquées
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Autres personnes impliquées</label>
                        <input type=\"text\" class=\"form-input\" id=\"incidentImpliques\" 
                               placeholder=\"IDs des personnes (séparés par des virgules)\">
                    </div>
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-attachment-line\"></i>
                        Documents et preuves
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Pièces jointes</label>
                        <div class=\"file-upload-area\" onclick=\"document.getElementById('incidentFiles').click()\">
                            <input type=\"file\" id=\"incidentFiles\" multiple style=\"display: none;\">
                            <div class=\"file-upload-placeholder\">
                                <i class=\"ri-upload-cloud-line\"></i>
                                <p>Cliquer pour ajouter des fichiers</p>
                                <small>Photos, documents, captures d'écran...</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"form-label\">Notes internes</label>
                        <textarea class=\"form-textarea\" id=\"incidentNotes\" rows=\"3\"
                                  placeholder=\"Notes confidentielles...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeAddIncidentModal()\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"submitIncident()\">
                    <i class=\"ri-save-line\"></i> Enregistrer l'incident
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class=\"toast-container\" id=\"toastContainer\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 759
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 760
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/personnes-fichees.js"), "html", null, true);
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
        return array (  891 => 760,  881 => 759,  380 => 264,  370 => 263,  109 => 8,  99 => 7,  88 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Sujets - SIGMA{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/personnes-fichees.css') }}\">
{% endblock %}

{% block body %}
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2 class=\"page-title\">Gestion des Personnes Fichées</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Principal</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span class=\"breadcrumb-active\">Sujets</span>
            </div>
        </div>
        <div class=\"page-header-right\">
            <div class=\"security-badge\">
                <i class=\"ri-shield-check-line\"></i>
                <span>Accès autorisé</span>
            </div>
        </div>
    </div>

    <!-- Statistics Grid -->
    <div class=\"stats-grid\" id=\"statsGrid\">
        <div class=\"stat-card primary loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-user-search-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Total Fiches</div>
            </div>
        </div>
        <div class=\"stat-card danger loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-alert-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Catégorie A (Haute menace)</div>
            </div>
        </div>
        <div class=\"stat-card warning loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-shield-cross-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Dangerosité Critique</div>
            </div>
        </div>
        <div class=\"stat-card success loading\">
            <div class=\"stat-icon\">
                <i class=\"ri-time-line\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">--</div>
                <div class=\"stat-label\">Nouvelles Fiches (30j)</div>
            </div>
        </div>
        <div class=\"stat-card info loading\">
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
            <span class=\"quick-stat-value cat-a\" id=\"quickStatA\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Catégorie B</span>
            <span class=\"quick-stat-value cat-b\" id=\"quickStatB\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Catégorie C</span>
            <span class=\"quick-stat-value cat-c\" id=\"quickStatC\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Catégorie S</span>
            <span class=\"quick-stat-value cat-s\" id=\"quickStatS\">--</span>
        </div>
        <div class=\"quick-stat\">
            <span class=\"quick-stat-label\">Incidents Actifs</span>
            <span class=\"quick-stat-value incidents\" id=\"quickStatIncidents\">--</span>
        </div>
    </div>

    <!-- Table Container -->
    <div class=\"table-container\">
        <div class=\"table-header\">
            <div class=\"table-header-top\">
                <h3 class=\"table-title\">
                    <i class=\"ri-user-search-line\"></i>
                    Registre des Personnes Surveillées
                </h3>
                <div class=\"table-actions\">
                    <button class=\"btn btn-secondary\" id=\"exportBtn\">
                        <i class=\"ri-download-line\"></i>
                        Exporter
                    </button>
                    <button class=\"btn btn-secondary\" id=\"printBtn\">
                        <i class=\"ri-printer-line\"></i>
                        Imprimer
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
                        <option value=\"lac\">Lac Tchad</option>
                        <option value=\"moundou\">Moundou</option>
                        <option value=\"sarh\">Sarh</option>
                        <option value=\"abéché\">Abéché</option>
                        <option value=\"kanem\">Kanem</option>
                        <option value=\"ouaddai\">Ouaddaï</option>
                        <option value=\"logone\">Logone</option>
                        <option value=\"borkou\">Borkou</option>
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
                        <option value=\"incident\">Avec incident</option>
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
            <div class=\"pagination-controls\">
                <div class=\"page-size-selector\">
                    <span>Afficher</span>
                    <select class=\"pagination-select\" id=\"pageSize\">
                        <option value=\"10\">10</option>
                        <option value=\"25\">25</option>
                        <option value=\"50\">50</option>
                        <option value=\"100\">100</option>
                    </select>
                    <span>entrées</span>
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block modal %}
    <!-- Modal: Ajouter/Modifier Personne -->
    <div class=\"modal\" id=\"personneModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closePersonneModal()\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <i class=\"ri-user-add-line\" style=\"font-size: 24px; color: var(--primary-color);\"></i>
                    <h3 id=\"personneModalTitle\">Nouvelle Fiche</h3>
                </div>
                <button class=\"modal-close\" onclick=\"closePersonneModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"personneForm\">
                    <input type=\"hidden\" id=\"personneId\">
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-user-line\"></i>
                        Identité civile
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Nom</label>
                            <input type=\"text\" class=\"form-input\" id=\"nom\" required placeholder=\"Nom de famille\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Prénom</label>
                            <input type=\"text\" class=\"form-input\" id=\"prenom\" required placeholder=\"Prénom(s)\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Alias / Pseudo</label>
                            <input type=\"text\" class=\"form-input\" id=\"alias\" placeholder=\"Surnom connu\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Date de naissance</label>
                            <input type=\"date\" class=\"form-input\" id=\"dateNaissance\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Sexe</label>
                            <select class=\"form-select\" id=\"sexe\">
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

                    <div class=\"form-section-title\">
                        <i class=\"ri-shield-star-line\"></i>
                        Classification
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Catégorie</label>
                            <select class=\"form-select\" id=\"categorie\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"A\">A - Haute menace</option>
                                <option value=\"B\">B - Menace modérée</option>
                                <option value=\"C\">C - Surveillance</option>
                                <option value=\"S\">S - Spécial</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Niveau de dangerosité</label>
                            <select class=\"form-select\" id=\"dangerosite\" required>
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
                            <select class=\"form-select\" id=\"statut\">
                                <option value=\"actif\">Actif</option>
                                <option value=\"surveille\">Sous surveillance</option>
                                <option value=\"archive\">Archivé</option>
                                <option value=\"neutralise\">Neutralisé</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Zone principale</label>
                            <select class=\"form-select\" id=\"zone\">
                                <option value=\"\">Sélectionner</option>
                                <option value=\"ndjamena\">N'Djamena</option>
                                <option value=\"lac\">Lac Tchad</option>
                                <option value=\"moundou\">Moundou</option>
                                <option value=\"sarh\">Sarh</option>
                                <option value=\"abéché\">Abéché</option>
                                <option value=\"kanem\">Kanem</option>
                                <option value=\"ouaddai\">Ouaddaï</option>
                                <option value=\"logone\">Logone</option>
                                <option value=\"borkou\">Borkou</option>
                                <option value=\"autre\">Autre</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-section-title sensitive-section\">
                        <i class=\"ri-alert-line\"></i>
                        Informations sensibles
                        <small>(Accès restreint selon habilitation)</small>
                    </div>
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

    <!-- Modal: Fiche Détaillée (10 onglets avec Incidents) -->
    <div class=\"modal\" id=\"ficheModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closeFicheModal()\"></div>
        <div class=\"modal-content modal-xlarge\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <div class=\"fiche-avatar\" id=\"ficheAvatar\">
                        <i class=\"ri-user-line\"></i>
                    </div>
                    <div class=\"fiche-header-info\">
                        <h3 id=\"ficheTitle\">Fiche Détaillée</h3>
                        <div class=\"fiche-header-badges\">
                            <span class=\"categorie-badge\" id=\"ficheCategorie\"></span>
                            <span class=\"status-badge\" id=\"ficheStatut\"></span>
                            <span class=\"danger-badge\" id=\"ficheDangerosite\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"modal-header-actions\">
                    <button class=\"btn btn-sm btn-secondary\" onclick=\"exportFiche()\" title=\"Exporter PDF\">
                        <i class=\"ri-download-line\"></i>
                    </button>
                    <button class=\"btn btn-sm btn-warning\" onclick=\"editPersonne()\" title=\"Modifier\">
                        <i class=\"ri-edit-line\"></i>
                    </button>
                    <button class=\"modal-close\" onclick=\"closeFicheModal()\">
                        <i class=\"ri-close-line\"></i>
                    </button>
                </div>
            </div>
            <div class=\"modal-body\">
                <!-- Tabs Navigation -->
                <div class=\"tabs-nav\" id=\"tabsNav\">
                    <button class=\"tab-btn active\" data-tab=\"resume\">
                        <i class=\"ri-user-line\"></i> 
                        <span class=\"tab-text\">Résumé</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"identites\">
                        <i class=\"ri-smartphone-line\"></i> 
                        <span class=\"tab-text\">Identités numériques</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"etablissements\">
                        <i class=\"ri-map-pin-line\"></i> 
                        <span class=\"tab-text\">Établissements</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"affiliations\">
                        <i class=\"ri-links-line\"></i> 
                        <span class=\"tab-text\">Affiliations</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"incidents\">
                        <i class=\"ri-error-warning-line\"></i> 
                        <span class=\"tab-text\">Incidents</span>
                        <span class=\"tab-badge\" id=\"incidentsCount\">0</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"condamnations\">
                        <i class=\"ri-scales-line\"></i> 
                        <span class=\"tab-text\">Condamnations</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"enquetes\">
                        <i class=\"ri-search-line\"></i> 
                        <span class=\"tab-text\">Enquêtes</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"signalements\">
                        <i class=\"ri-alarm-warning-line\"></i> 
                        <span class=\"tab-text\">Signalements</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"contenus\">
                        <i class=\"ri-file-text-line\"></i> 
                        <span class=\"tab-text\">Contenus</span>
                    </button>
                    <button class=\"tab-btn\" data-tab=\"historique\">
                        <i class=\"ri-history-line\"></i> 
                        <span class=\"tab-text\">Historique</span>
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
                        <h4><i class=\"ri-smartphone-line\"></i> Comptes et Présences en Ligne</h4>
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
                        <h4><i class=\"ri-map-pin-line\"></i> Lieux Fréquentés</h4>
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
                        <h4><i class=\"ri-links-line\"></i> Relations et Réseaux</h4>
                        <button class=\"btn btn-sm btn-primary\" onclick=\"addAffiliation()\">
                            <i class=\"ri-add-line\"></i> Ajouter
                        </button>
                    </div>
                    <div id=\"affiliationsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Incidents (NOUVEAU) -->
                <div class=\"tab-content\" id=\"tab-incidents\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-error-warning-line\"></i> Incidents Associés</h4>
                        <button class=\"btn btn-sm btn-primary\" onclick=\"addIncident()\">
                            <i class=\"ri-add-line\"></i> Déclarer un incident
                        </button>
                    </div>
                    <!-- Statistiques des incidents -->
                    <div class=\"incidents-stats\" id=\"incidentsStats\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                    <!-- Liste des incidents -->
                    <div id=\"incidentsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Condamnations -->
                <div class=\"tab-content\" id=\"tab-condamnations\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-scales-line\"></i> Parcours Judiciaire</h4>
                    </div>
                    <div id=\"condamnationsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Enquêtes -->
                <div class=\"tab-content\" id=\"tab-enquetes\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-search-line\"></i> Enquêtes en Cours ou Terminées</h4>
                    </div>
                    <div id=\"enquetesContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Signalements -->
                <div class=\"tab-content\" id=\"tab-signalements\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-alarm-warning-line\"></i> Alertes et Rapports</h4>
                    </div>
                    <div id=\"signalementsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Contenus -->
                <div class=\"tab-content\" id=\"tab-contenus\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-file-text-line\"></i> Contenus Publiés en Ligne</h4>
                    </div>
                    <div id=\"contenusContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Historique -->
                <div class=\"tab-content\" id=\"tab-historique\">
                    <div class=\"tab-section-header\">
                        <h4><i class=\"ri-history-line\"></i> Journal des Modifications</h4>
                    </div>
                    <div class=\"timeline\" id=\"historiqueContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeFicheModal()\">
                    Fermer
                </button>
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deletePersonne()\" id=\"deleteFicheBtn\">
                    <i class=\"ri-delete-bin-line\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Détail Incident -->
    <div class=\"modal\" id=\"incidentModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closeIncidentModal()\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <i class=\"ri-error-warning-line\" style=\"font-size: 24px; color: var(--danger-color);\"></i>
                    <h3 id=\"incidentModalTitle\">Détail de l'Incident</h3>
                </div>
                <button class=\"modal-close\" onclick=\"closeIncidentModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\" id=\"incidentModalBody\">
                <div class=\"loading-spinner\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeIncidentModal()\">
                    Fermer
                </button>
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"editIncident()\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Ajouter Incident -->
    <div class=\"modal\" id=\"addIncidentModal\" style=\"display: none;\">
        <div class=\"modal-overlay\" onclick=\"closeAddIncidentModal()\"></div>
        <div class=\"modal-content modal-lg\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <i class=\"ri-add-circle-line\" style=\"font-size: 24px; color: var(--primary-color);\"></i>
                    <h3>Déclarer un Incident</h3>
                </div>
                <button class=\"modal-close\" onclick=\"closeAddIncidentModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"incidentForm\">
                    <input type=\"hidden\" id=\"incidentPersonneId\">
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-information-line\"></i>
                        Informations de l'incident
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Type d'incident</label>
                            <select class=\"form-select\" id=\"incidentType\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"violence\">Violence / Agression</option>
                                <option value=\"menace\">Menace / Intimidation</option>
                                <option value=\"propagande\">Propagande / Radicalisation</option>
                                <option value=\"financement\">Financement suspect</option>
                                <option value=\"deplacement\">Déplacement suspect</option>
                                <option value=\"contact\">Contact avec organisation</option>
                                <option value=\"recrutement\">Tentative de recrutement</option>
                                <option value=\"cybercrime\">Activité cybercriminelle</option>
                                <option value=\"autre\">Autre</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Gravité</label>
                            <select class=\"form-select\" id=\"incidentGravite\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"5\">Critique (5/5)</option>
                                <option value=\"4\">Élevée (4/5)</option>
                                <option value=\"3\">Moyenne (3/5)</option>
                                <option value=\"2\">Faible (2/5)</option>
                                <option value=\"1\">Mineure (1/5)</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Date de l'incident</label>
                            <input type=\"datetime-local\" class=\"form-input\" id=\"incidentDate\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Localisation</label>
                            <input type=\"text\" class=\"form-input\" id=\"incidentLocalisation\" required 
                                   placeholder=\"Lieu précis de l'incident\">
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"form-label required\">Description</label>
                        <textarea class=\"form-textarea\" id=\"incidentDescription\" rows=\"4\" required
                                  placeholder=\"Description détaillée de l'incident...\"></textarea>
                    </div>
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-user-line\"></i>
                        Personnes impliquées
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Autres personnes impliquées</label>
                        <input type=\"text\" class=\"form-input\" id=\"incidentImpliques\" 
                               placeholder=\"IDs des personnes (séparés par des virgules)\">
                    </div>
                    
                    <div class=\"form-section-title\">
                        <i class=\"ri-attachment-line\"></i>
                        Documents et preuves
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Pièces jointes</label>
                        <div class=\"file-upload-area\" onclick=\"document.getElementById('incidentFiles').click()\">
                            <input type=\"file\" id=\"incidentFiles\" multiple style=\"display: none;\">
                            <div class=\"file-upload-placeholder\">
                                <i class=\"ri-upload-cloud-line\"></i>
                                <p>Cliquer pour ajouter des fichiers</p>
                                <small>Photos, documents, captures d'écran...</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"form-label\">Notes internes</label>
                        <textarea class=\"form-textarea\" id=\"incidentNotes\" rows=\"3\"
                                  placeholder=\"Notes confidentielles...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeAddIncidentModal()\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"submitIncident()\">
                    <i class=\"ri-save-line\"></i> Enregistrer l'incident
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class=\"toast-container\" id=\"toastContainer\"></div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/personnes-fichees.js') }}\"></script>
{% endblock %}
", "sujets.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\sujets.html.twig");
    }
}
