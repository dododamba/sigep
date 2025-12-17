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
class __TwigTemplate_edf14e92a9a96c866602b22a6b6f10ab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalements.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/signalements.css"), "html", null, true);
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
        yield "        <!-- Breadcrumb -->
        <div class=\"breadcrumb\">
            <a href=\"dashboard.html\"><i class=\"ri-home-line\"></i> SIGMA</a>
            <i class=\"ri-arrow-right-s-line\"></i>
            <a href=\"#\">Surveillance</a>
            <i class=\"ri-arrow-right-s-line\"></i>
            <span class=\"current\">Signalements & Incidents</span>
        </div>

        <!-- Tabs Navigation -->
        <div class=\"tabs-container\">
            <div class=\"tabs\">
                <button class=\"tab-btn active\" data-tab=\"signalements\">
                    <i class=\"ri-alarm-warning-line\"></i>
                    <span>Signalements</span>
                    <span class=\"tab-count\" id=\"signalementCount\">0</span>
                </button>
                <button class=\"tab-btn\" data-tab=\"incidents\">
                    <i class=\"ri-error-warning-line\"></i>
                    <span>Incidents</span>
                    <span class=\"tab-count\" id=\"incidentCount\">0</span>
                </button>
                <button class=\"tab-btn\" data-tab=\"analytics\">
                    <i class=\"ri-bar-chart-line\"></i>
                    <span>Analytique</span>
                </button>
            </div>
            <div class=\"tabs-actions\">
                <button class=\"btn btn-outline\" id=\"exportAllBtn\">
                    <i class=\"ri-download-line\"></i>
                    Exporter
                </button>
                <button class=\"btn btn-primary\" id=\"newSignalementBtn\">
                    <i class=\"ri-add-line\"></i>
                    Nouveau Signalement
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <!-- Stats will be generated dynamically -->
        </div>

        <!-- Tab Content: Signalements -->
        <div class=\"tab-content active\" id=\"signalements-tab\">
            <!-- Filters -->
            <div class=\"filters-card\">
                <div class=\"filters-header\">
                    <h3><i class=\"ri-filter-line\"></i> Filtres avancés</h3>
                    <button class=\"btn btn-text\" id=\"resetFilters\">
                        <i class=\"ri-refresh-line\"></i> Réinitialiser
                    </button>
                </div>
                <div class=\"filters-body\">
                    <div class=\"filter-group\">
                        <label>Recherche</label>
                        <div class=\"input-icon\">
                            <i class=\"ri-search-line\"></i>
                            <input type=\"text\" id=\"searchInput\" placeholder=\"Référence, description, source...\">
                        </div>
                    </div>
                    <div class=\"filter-group\">
                        <label>Type de signalement</label>
                        <select id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"activite_suspecte\">Activité suspecte</option>
                            <option value=\"menace\">Menace directe</option>
                            <option value=\"propagande\">Propagande</option>
                            <option value=\"financement\">Financement illicite</option>
                            <option value=\"radicalisation\">Radicalisation</option>
                            <option value=\"recrutement\">Recrutement</option>
                            <option value=\"desinformation\">Désinformation</option>
                            <option value=\"cyberattaque\">Cyberattaque</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Priorité</label>
                        <select id=\"priorityFilter\">
                            <option value=\"\">Toutes les priorités</option>
                            <option value=\"critique\">🔴 Critique</option>
                            <option value=\"haute\">🟠 Haute</option>
                            <option value=\"moyenne\">🟡 Moyenne</option>
                            <option value=\"basse\">🟢 Basse</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Statut</label>
                        <select id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"nouveau\">Nouveau</option>
                            <option value=\"en_cours\">En cours d'analyse</option>
                            <option value=\"verifie\">Vérifié</option>
                            <option value=\"assigne\">Assigné</option>
                            <option value=\"resolu\">Résolu</option>
                            <option value=\"classe\">Classé sans suite</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Région</label>
                        <select id=\"regionFilter\">
                            <option value=\"\">Toutes les régions</option>
                            <option value=\"ndjamena\">N'Djamena</option>
                            <option value=\"logone_occidental\">Logone Occidental</option>
                            <option value=\"logone_oriental\">Logone Oriental</option>
                            <option value=\"mayo_kebbi_est\">Mayo-Kebbi Est</option>
                            <option value=\"mayo_kebbi_ouest\">Mayo-Kebbi Ouest</option>
                            <option value=\"ouaddai\">Ouaddaï</option>
                            <option value=\"wadi_fira\">Wadi Fira</option>
                            <option value=\"lac\">Lac</option>
                            <option value=\"kanem\">Kanem</option>
                            <option value=\"batha\">Batha</option>
                            <option value=\"guera\">Guéra</option>
                            <option value=\"salamat\">Salamat</option>
                            <option value=\"moyen_chari\">Moyen-Chari</option>
                            <option value=\"mandoul\">Mandoul</option>
                            <option value=\"tandjile\">Tandjilé</option>
                            <option value=\"borkou\">Borkou</option>
                            <option value=\"ennedi_est\">Ennedi Est</option>
                            <option value=\"ennedi_ouest\">Ennedi Ouest</option>
                            <option value=\"tibesti\">Tibesti</option>
                            <option value=\"sila\">Sila</option>
                            <option value=\"hadjer_lamis\">Hadjer-Lamis</option>
                            <option value=\"barh_el_gazel\">Barh El Gazel</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Période</label>
                        <select id=\"periodFilter\">
                            <option value=\"\">Toute période</option>
                            <option value=\"today\">Aujourd'hui</option>
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\">Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                            <option value=\"year\">Cette année</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class=\"table-card\">
                <div class=\"table-responsive\">
                    <table class=\"data-table\" id=\"signalementTable\">
                        <thead>
                            <tr>
                                <th class=\"checkbox-col\">
                                    <input type=\"checkbox\" id=\"selectAll\" class=\"checkbox\">
                                </th>
                                <th class=\"sortable\" data-sort=\"reference\">
                                    Référence <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"type\">
                                    Type <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"description\">
                                    Description <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"source\">
                                    Source <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"region\">
                                    Région <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"priority\">
                                    Priorité <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"status\">
                                    Statut <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"assignee\">
                                    Assigné à <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"dateCreated\">
                                    Date <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id=\"signalementTableBody\">
                            <!-- Data will be generated dynamically -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class=\"table-footer\">
                    <div class=\"pagination-info\">
                        <span>Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> signalements</span>
                    </div>
                    <div class=\"pagination-controls\">
                        <select id=\"pageSize\" class=\"page-size-select\">
                            <option value=\"10\">10 par page</option>
                            <option value=\"25\">25 par page</option>
                            <option value=\"50\">50 par page</option>
                            <option value=\"100\">100 par page</option>
                        </select>
                        <div class=\"pagination\" id=\"pagination\">
                            <!-- Pagination will be generated dynamically -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content: Incidents -->
        <div class=\"tab-content\" id=\"incidents-tab\">
            <!-- Incident Filters -->
            <div class=\"filters-card\">
                <div class=\"filters-header\">
                    <h3><i class=\"ri-filter-line\"></i> Filtres Incidents</h3>
                    <button class=\"btn btn-text\" id=\"resetIncidentFilters\">
                        <i class=\"ri-refresh-line\"></i> Réinitialiser
                    </button>
                </div>
                <div class=\"filters-body\">
                    <div class=\"filter-group\">
                        <label>Recherche</label>
                        <div class=\"input-icon\">
                            <i class=\"ri-search-line\"></i>
                            <input type=\"text\" id=\"incidentSearchInput\" placeholder=\"Référence, titre, lieu...\">
                        </div>
                    </div>
                    <div class=\"filter-group\">
                        <label>Type d'incident</label>
                        <select id=\"incidentTypeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"attentat\">Attentat</option>
                            <option value=\"embuscade\">Embuscade</option>
                            <option value=\"attaque_armee\">Attaque armée</option>
                            <option value=\"explosion\">Explosion</option>
                            <option value=\"enlevement\">Enlèvement</option>
                            <option value=\"assassinat\">Assassinat ciblé</option>
                            <option value=\"sabotage\">Sabotage</option>
                            <option value=\"manifestation\">Manifestation violente</option>
                            <option value=\"intrusion\">Intrusion</option>
                            <option value=\"cyber_incident\">Cyber-incident</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Gravité</label>
                        <select id=\"severityFilter\">
                            <option value=\"\">Toutes les gravités</option>
                            <option value=\"5\">⚫ Catastrophique (5/5)</option>
                            <option value=\"4\">🔴 Majeur (4/5)</option>
                            <option value=\"3\">🟠 Modéré (3/5)</option>
                            <option value=\"2\">🟡 Mineur (2/5)</option>
                            <option value=\"1\">🟢 Négligeable (1/5)</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Statut</label>
                        <select id=\"incidentStatusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"declare\">Déclaré</option>
                            <option value=\"confirme\">Confirmé</option>
                            <option value=\"en_cours\">En cours</option>
                            <option value=\"maitrise\">Maîtrisé</option>
                            <option value=\"cloture\">Clôturé</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Région</label>
                        <select id=\"incidentRegionFilter\">
                            <option value=\"\">Toutes les régions</option>
                            <option value=\"ndjamena\">N'Djamena</option>
                            <option value=\"lac\">Lac</option>
                            <option value=\"ouaddai\">Ouaddaï</option>
                            <option value=\"tibesti\">Tibesti</option>
                            <option value=\"borkou\">Borkou</option>
                            <option value=\"kanem\">Kanem</option>
                            <option value=\"logone_occidental\">Logone Occidental</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Période</label>
                        <select id=\"incidentPeriodFilter\">
                            <option value=\"\">Toute période</option>
                            <option value=\"today\">Aujourd'hui</option>
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\">Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Incidents Grid -->
            <div class=\"incidents-grid\" id=\"incidentsGrid\">
                <!-- Incident cards will be generated dynamically -->
            </div>

            <!-- Incident Pagination -->
            <div class=\"pagination-container\">
                <div class=\"pagination-info\">
                    <span>Affichage de <strong id=\"incidentStartEntry\">1</strong> à <strong id=\"incidentEndEntry\">6</strong> sur <strong id=\"incidentTotalEntries\">0</strong> incidents</span>
                </div>
                <div class=\"pagination\" id=\"incidentPagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>

        <!-- Tab Content: Analytics -->
        <div class=\"tab-content\" id=\"analytics-tab\">
            <div class=\"analytics-grid\">
                <!-- Chart: Signalements par type -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-pie-chart-line\"></i> Répartition par type</h3>
                        <select id=\"chartPeriod1\" class=\"chart-period-select\">
                            <option value=\"month\">Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                            <option value=\"year\">Cette année</option>
                        </select>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"typeChart\"></canvas>
                    </div>
                </div>

                <!-- Chart: Évolution temporelle -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-line-chart-line\"></i> Évolution temporelle</h3>
                        <select id=\"chartPeriod2\" class=\"chart-period-select\">
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\" selected>Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                        </select>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"timelineChart\"></canvas>
                    </div>
                </div>

                <!-- Chart: Par région -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-map-pin-line\"></i> Distribution géographique</h3>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"regionChart\"></canvas>
                    </div>
                </div>

                <!-- Chart: Par priorité -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-bar-chart-grouped-line\"></i> Statut des signalements</h3>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"statusChart\"></canvas>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class=\"activity-card\">
                    <div class=\"activity-header\">
                        <h3><i class=\"ri-history-line\"></i> Activité récente</h3>
                        <a href=\"#\" class=\"view-all-link\">Voir tout</a>
                    </div>
                    <div class=\"activity-list\" id=\"activityList\">
                        <!-- Activity items will be generated dynamically -->
                    </div>
                </div>

                <!-- Top Analysts -->
                <div class=\"analysts-card\">
                    <div class=\"analysts-header\">
                        <h3><i class=\"ri-team-line\"></i> Analystes les plus actifs</h3>
                    </div>
                    <div class=\"analysts-list\" id=\"analystsList\">
                        <!-- Analyst items will be generated dynamically -->
                    </div>
                </div>
            </div>
        </div>
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 387
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 388
        yield "   <!-- Modal: New/Edit Signalement -->
    <div class=\"modal-overlay\" id=\"signalementModal\">
        <div class=\"modal\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\"><i class=\"ri-alarm-warning-line\"></i> Nouveau Signalement</h3>
                <button class=\"modal-close\" id=\"closeModal\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"signalementForm\">
                    <input type=\"hidden\" id=\"signalementId\">
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigType\">Type de signalement <span class=\"required\">*</span></label>
                            <select id=\"sigType\" required>
                                <option value=\"\">Sélectionner un type</option>
                                <option value=\"activite_suspecte\">Activité suspecte</option>
                                <option value=\"menace\">Menace directe</option>
                                <option value=\"propagande\">Propagande</option>
                                <option value=\"financement\">Financement illicite</option>
                                <option value=\"radicalisation\">Radicalisation</option>
                                <option value=\"recrutement\">Recrutement</option>
                                <option value=\"desinformation\">Désinformation</option>
                                <option value=\"cyberattaque\">Cyberattaque</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigPriority\">Priorité <span class=\"required\">*</span></label>
                            <select id=\"sigPriority\" required>
                                <option value=\"\">Sélectionner la priorité</option>
                                <option value=\"critique\">🔴 Critique</option>
                                <option value=\"haute\">🟠 Haute</option>
                                <option value=\"moyenne\">🟡 Moyenne</option>
                                <option value=\"basse\">🟢 Basse</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigDescription\">Description <span class=\"required\">*</span></label>
                        <textarea id=\"sigDescription\" rows=\"4\" placeholder=\"Description détaillée du signalement...\" required></textarea>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigSource\">Source du signalement</label>
                            <select id=\"sigSource\">
                                <option value=\"\">Sélectionner la source</option>
                                <option value=\"humint\">HUMINT (Renseignement humain)</option>
                                <option value=\"sigint\">SIGINT (Interception)</option>
                                <option value=\"osint\">OSINT (Sources ouvertes)</option>
                                <option value=\"citoyen\">Signalement citoyen</option>
                                <option value=\"partenaire\">Partenaire institutionnel</option>
                                <option value=\"interne\">Surveillance interne</option>
                                <option value=\"anonyme\">Source anonyme</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigSourceDetail\">Détails de la source</label>
                            <input type=\"text\" id=\"sigSourceDetail\" placeholder=\"Identifiant ou précisions...\">
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigRegion\">Région concernée</label>
                            <select id=\"sigRegion\">
                                <option value=\"\">Sélectionner la région</option>
                                <option value=\"ndjamena\">N'Djamena</option>
                                <option value=\"logone_occidental\">Logone Occidental</option>
                                <option value=\"logone_oriental\">Logone Oriental</option>
                                <option value=\"mayo_kebbi_est\">Mayo-Kebbi Est</option>
                                <option value=\"mayo_kebbi_ouest\">Mayo-Kebbi Ouest</option>
                                <option value=\"ouaddai\">Ouaddaï</option>
                                <option value=\"wadi_fira\">Wadi Fira</option>
                                <option value=\"lac\">Lac</option>
                                <option value=\"kanem\">Kanem</option>
                                <option value=\"batha\">Batha</option>
                                <option value=\"guera\">Guéra</option>
                                <option value=\"salamat\">Salamat</option>
                                <option value=\"moyen_chari\">Moyen-Chari</option>
                                <option value=\"mandoul\">Mandoul</option>
                                <option value=\"tandjile\">Tandjilé</option>
                                <option value=\"borkou\">Borkou</option>
                                <option value=\"ennedi_est\">Ennedi Est</option>
                                <option value=\"ennedi_ouest\">Ennedi Ouest</option>
                                <option value=\"tibesti\">Tibesti</option>
                                <option value=\"sila\">Sila</option>
                                <option value=\"hadjer_lamis\">Hadjer-Lamis</option>
                                <option value=\"barh_el_gazel\">Barh El Gazel</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigLocation\">Localisation précise</label>
                            <input type=\"text\" id=\"sigLocation\" placeholder=\"Quartier, lieu-dit, coordonnées...\">
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigAssignee\">Assigner à</label>
                            <select id=\"sigAssignee\">
                                <option value=\"\">Non assigné</option>
                                <option value=\"agent_001\">Agent ANSE-001</option>
                                <option value=\"agent_002\">Agent ANSE-002</option>
                                <option value=\"agent_003\">Agent ANSE-003</option>
                                <option value=\"agent_004\">Agent ANSE-004</option>
                                <option value=\"agent_005\">Agent ANSE-005</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigStatus\">Statut</label>
                            <select id=\"sigStatus\">
                                <option value=\"nouveau\">Nouveau</option>
                                <option value=\"en_cours\">En cours d'analyse</option>
                                <option value=\"verifie\">Vérifié</option>
                                <option value=\"assigne\">Assigné</option>
                                <option value=\"resolu\">Résolu</option>
                                <option value=\"classe\">Classé sans suite</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigLinkedSubject\">Sujet lié (optionnel)</label>
                        <div class=\"search-select-container\">
                            <input type=\"text\" id=\"sigLinkedSubject\" placeholder=\"Rechercher un sujet fiché...\">
                            <div class=\"search-results\" id=\"subjectSearchResults\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigLinkedIncident\">Incident lié (optionnel)</label>
                        <select id=\"sigLinkedIncident\">
                            <option value=\"\">Aucun incident lié</option>
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label>Pièces jointes</label>
                        <div class=\"file-upload-area\" id=\"fileUploadArea\">
                            <i class=\"ri-upload-cloud-line\"></i>
                            <p>Glissez-déposez vos fichiers ici ou <span class=\"browse-link\">parcourir</span></p>
                            <small>Formats acceptés: PDF, DOC, JPG, PNG, MP3, MP4 (max 50Mo)</small>
                            <input type=\"file\" id=\"fileInput\" multiple hidden>
                        </div>
                        <div class=\"uploaded-files\" id=\"uploadedFiles\"></div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigNotes\">Notes internes</label>
                        <textarea id=\"sigNotes\" rows=\"3\" placeholder=\"Notes confidentielles pour l'équipe...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline\" id=\"cancelModal\">Annuler</button>
                <button type=\"submit\" form=\"signalementForm\" class=\"btn btn-primary\" id=\"saveSignalement\">
                    <i class=\"ri-save-line\"></i> Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: View Signalement Details -->
    <div class=\"modal-overlay\" id=\"viewModal\">
        <div class=\"modal modal-large\">
            <div class=\"modal-header\">
                <h3 id=\"viewModalTitle\"><i class=\"ri-file-list-line\"></i> Détails du Signalement</h3>
                <button class=\"modal-close\" id=\"closeViewModal\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"detail-grid\" id=\"signalementDetails\">
                    <!-- Details will be generated dynamically -->
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline\" id=\"closeViewBtn\">Fermer</button>
                <button type=\"button\" class=\"btn btn-secondary\" id=\"editFromView\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"convertToIncident\">
                    <i class=\"ri-error-warning-line\"></i> Convertir en incident
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: New Incident -->
    <div class=\"modal-overlay\" id=\"incidentModal\">
        <div class=\"modal modal-large\">
            <div class=\"modal-header\">
                <h3 id=\"incidentModalTitle\"><i class=\"ri-error-warning-line\"></i> Nouvel Incident</h3>
                <button class=\"modal-close\" id=\"closeIncidentModal\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"incidentForm\">
                    <input type=\"hidden\" id=\"incidentId\">
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incTitle\">Titre de l'incident <span class=\"required\">*</span></label>
                            <input type=\"text\" id=\"incTitle\" placeholder=\"Titre descriptif de l'incident\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incType\">Type d'incident <span class=\"required\">*</span></label>
                            <select id=\"incType\" required>
                                <option value=\"\">Sélectionner un type</option>
                                <option value=\"attentat\">Attentat</option>
                                <option value=\"embuscade\">Embuscade</option>
                                <option value=\"attaque_armee\">Attaque armée</option>
                                <option value=\"explosion\">Explosion</option>
                                <option value=\"enlevement\">Enlèvement</option>
                                <option value=\"assassinat\">Assassinat ciblé</option>
                                <option value=\"sabotage\">Sabotage</option>
                                <option value=\"manifestation\">Manifestation violente</option>
                                <option value=\"intrusion\">Intrusion</option>
                                <option value=\"cyber_incident\">Cyber-incident</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incSeverity\">Niveau de gravité <span class=\"required\">*</span></label>
                            <select id=\"incSeverity\" required>
                                <option value=\"\">Sélectionner la gravité</option>
                                <option value=\"5\">⚫ Catastrophique (5/5)</option>
                                <option value=\"4\">🔴 Majeur (4/5)</option>
                                <option value=\"3\">🟠 Modéré (3/5)</option>
                                <option value=\"2\">🟡 Mineur (2/5)</option>
                                <option value=\"1\">🟢 Négligeable (1/5)</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incStatus\">Statut <span class=\"required\">*</span></label>
                            <select id=\"incStatus\" required>
                                <option value=\"declare\">Déclaré</option>
                                <option value=\"confirme\">Confirmé</option>
                                <option value=\"en_cours\">En cours</option>
                                <option value=\"maitrise\">Maîtrisé</option>
                                <option value=\"cloture\">Clôturé</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"incDescription\">Description détaillée <span class=\"required\">*</span></label>
                        <textarea id=\"incDescription\" rows=\"4\" placeholder=\"Description complète de l'incident...\" required></textarea>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incRegion\">Région <span class=\"required\">*</span></label>
                            <select id=\"incRegion\" required>
                                <option value=\"\">Sélectionner la région</option>
                                <option value=\"ndjamena\">N'Djamena</option>
                                <option value=\"lac\">Lac</option>
                                <option value=\"ouaddai\">Ouaddaï</option>
                                <option value=\"tibesti\">Tibesti</option>
                                <option value=\"borkou\">Borkou</option>
                                <option value=\"kanem\">Kanem</option>
                                <option value=\"logone_occidental\">Logone Occidental</option>
                                <option value=\"logone_oriental\">Logone Oriental</option>
                                <option value=\"wadi_fira\">Wadi Fira</option>
                                <option value=\"batha\">Batha</option>
                                <option value=\"guera\">Guéra</option>
                                <option value=\"salamat\">Salamat</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incLocation\">Localisation précise <span class=\"required\">*</span></label>
                            <input type=\"text\" id=\"incLocation\" placeholder=\"Adresse, coordonnées GPS...\" required>
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incDatetime\">Date et heure de l'incident</label>
                            <input type=\"datetime-local\" id=\"incDatetime\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incDuration\">Durée estimée</label>
                            <input type=\"text\" id=\"incDuration\" placeholder=\"ex: 2h30, en cours...\">
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4><i class=\"ri-user-heart-line\"></i> Bilan humain</h4>
                        <div class=\"form-row form-row-4\">
                            <div class=\"form-group\">
                                <label for=\"incVictims\">Victimes</label>
                                <input type=\"number\" id=\"incVictims\" min=\"0\" value=\"0\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"incInjured\">Blessés</label>
                                <input type=\"number\" id=\"incInjured\" min=\"0\" value=\"0\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"incMissing\">Disparus</label>
                                <input type=\"number\" id=\"incMissing\" min=\"0\" value=\"0\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"incArrested\">Arrestations</label>
                                <input type=\"number\" id=\"incArrested\" min=\"0\" value=\"0\">
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"incResponseTeam\">Équipe d'intervention</label>
                        <select id=\"incResponseTeam\" multiple>
                            <option value=\"anse\">ANSE</option>
                            <option value=\"gign\">GIGN</option>
                            <option value=\"police\">Police Nationale</option>
                            <option value=\"gendarmerie\">Gendarmerie</option>
                            <option value=\"armee\">Forces Armées</option>
                            <option value=\"pompiers\">Pompiers</option>
                            <option value=\"samu\">SAMU</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"incLinkedSignalements\">Signalements liés</label>
                        <select id=\"incLinkedSignalements\" multiple>
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label>Pièces jointes</label>
                        <div class=\"file-upload-area\" id=\"incidentFileUploadArea\">
                            <i class=\"ri-upload-cloud-line\"></i>
                            <p>Glissez-déposez vos fichiers ici ou <span class=\"browse-link\">parcourir</span></p>
                            <small>Formats acceptés: PDF, DOC, JPG, PNG, MP4 (max 100Mo)</small>
                            <input type=\"file\" id=\"incidentFileInput\" multiple hidden>
                        </div>
                        <div class=\"uploaded-files\" id=\"incidentUploadedFiles\"></div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline\" id=\"cancelIncidentModal\">Annuler</button>
                <button type=\"submit\" form=\"incidentForm\" class=\"btn btn-danger\" id=\"saveIncident\">
                    <i class=\"ri-save-line\"></i> Enregistrer l'incident
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class=\"toast-container\" id=\"toastContainer\"></div>

    <!-- Loading Overlay -->
    <div class=\"loading-overlay\" id=\"loadingOverlay\">
        <div class=\"loader\">
            <div class=\"loader-spinner\"></div>
            <p>Chargement en cours...</p>
        </div>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 757
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 758
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
        <script src=\"";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/signalements.js"), "html", null, true);
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
        return array (  894 => 759,  891 => 758,  881 => 757,  505 => 388,  495 => 387,  109 => 7,  99 => 6,  88 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tableau de Bord{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/signalements.css') }}\">
{% endblock %}
   {% block body %}
        <!-- Breadcrumb -->
        <div class=\"breadcrumb\">
            <a href=\"dashboard.html\"><i class=\"ri-home-line\"></i> SIGMA</a>
            <i class=\"ri-arrow-right-s-line\"></i>
            <a href=\"#\">Surveillance</a>
            <i class=\"ri-arrow-right-s-line\"></i>
            <span class=\"current\">Signalements & Incidents</span>
        </div>

        <!-- Tabs Navigation -->
        <div class=\"tabs-container\">
            <div class=\"tabs\">
                <button class=\"tab-btn active\" data-tab=\"signalements\">
                    <i class=\"ri-alarm-warning-line\"></i>
                    <span>Signalements</span>
                    <span class=\"tab-count\" id=\"signalementCount\">0</span>
                </button>
                <button class=\"tab-btn\" data-tab=\"incidents\">
                    <i class=\"ri-error-warning-line\"></i>
                    <span>Incidents</span>
                    <span class=\"tab-count\" id=\"incidentCount\">0</span>
                </button>
                <button class=\"tab-btn\" data-tab=\"analytics\">
                    <i class=\"ri-bar-chart-line\"></i>
                    <span>Analytique</span>
                </button>
            </div>
            <div class=\"tabs-actions\">
                <button class=\"btn btn-outline\" id=\"exportAllBtn\">
                    <i class=\"ri-download-line\"></i>
                    Exporter
                </button>
                <button class=\"btn btn-primary\" id=\"newSignalementBtn\">
                    <i class=\"ri-add-line\"></i>
                    Nouveau Signalement
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <!-- Stats will be generated dynamically -->
        </div>

        <!-- Tab Content: Signalements -->
        <div class=\"tab-content active\" id=\"signalements-tab\">
            <!-- Filters -->
            <div class=\"filters-card\">
                <div class=\"filters-header\">
                    <h3><i class=\"ri-filter-line\"></i> Filtres avancés</h3>
                    <button class=\"btn btn-text\" id=\"resetFilters\">
                        <i class=\"ri-refresh-line\"></i> Réinitialiser
                    </button>
                </div>
                <div class=\"filters-body\">
                    <div class=\"filter-group\">
                        <label>Recherche</label>
                        <div class=\"input-icon\">
                            <i class=\"ri-search-line\"></i>
                            <input type=\"text\" id=\"searchInput\" placeholder=\"Référence, description, source...\">
                        </div>
                    </div>
                    <div class=\"filter-group\">
                        <label>Type de signalement</label>
                        <select id=\"typeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"activite_suspecte\">Activité suspecte</option>
                            <option value=\"menace\">Menace directe</option>
                            <option value=\"propagande\">Propagande</option>
                            <option value=\"financement\">Financement illicite</option>
                            <option value=\"radicalisation\">Radicalisation</option>
                            <option value=\"recrutement\">Recrutement</option>
                            <option value=\"desinformation\">Désinformation</option>
                            <option value=\"cyberattaque\">Cyberattaque</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Priorité</label>
                        <select id=\"priorityFilter\">
                            <option value=\"\">Toutes les priorités</option>
                            <option value=\"critique\">🔴 Critique</option>
                            <option value=\"haute\">🟠 Haute</option>
                            <option value=\"moyenne\">🟡 Moyenne</option>
                            <option value=\"basse\">🟢 Basse</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Statut</label>
                        <select id=\"statusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"nouveau\">Nouveau</option>
                            <option value=\"en_cours\">En cours d'analyse</option>
                            <option value=\"verifie\">Vérifié</option>
                            <option value=\"assigne\">Assigné</option>
                            <option value=\"resolu\">Résolu</option>
                            <option value=\"classe\">Classé sans suite</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Région</label>
                        <select id=\"regionFilter\">
                            <option value=\"\">Toutes les régions</option>
                            <option value=\"ndjamena\">N'Djamena</option>
                            <option value=\"logone_occidental\">Logone Occidental</option>
                            <option value=\"logone_oriental\">Logone Oriental</option>
                            <option value=\"mayo_kebbi_est\">Mayo-Kebbi Est</option>
                            <option value=\"mayo_kebbi_ouest\">Mayo-Kebbi Ouest</option>
                            <option value=\"ouaddai\">Ouaddaï</option>
                            <option value=\"wadi_fira\">Wadi Fira</option>
                            <option value=\"lac\">Lac</option>
                            <option value=\"kanem\">Kanem</option>
                            <option value=\"batha\">Batha</option>
                            <option value=\"guera\">Guéra</option>
                            <option value=\"salamat\">Salamat</option>
                            <option value=\"moyen_chari\">Moyen-Chari</option>
                            <option value=\"mandoul\">Mandoul</option>
                            <option value=\"tandjile\">Tandjilé</option>
                            <option value=\"borkou\">Borkou</option>
                            <option value=\"ennedi_est\">Ennedi Est</option>
                            <option value=\"ennedi_ouest\">Ennedi Ouest</option>
                            <option value=\"tibesti\">Tibesti</option>
                            <option value=\"sila\">Sila</option>
                            <option value=\"hadjer_lamis\">Hadjer-Lamis</option>
                            <option value=\"barh_el_gazel\">Barh El Gazel</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Période</label>
                        <select id=\"periodFilter\">
                            <option value=\"\">Toute période</option>
                            <option value=\"today\">Aujourd'hui</option>
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\">Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                            <option value=\"year\">Cette année</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class=\"table-card\">
                <div class=\"table-responsive\">
                    <table class=\"data-table\" id=\"signalementTable\">
                        <thead>
                            <tr>
                                <th class=\"checkbox-col\">
                                    <input type=\"checkbox\" id=\"selectAll\" class=\"checkbox\">
                                </th>
                                <th class=\"sortable\" data-sort=\"reference\">
                                    Référence <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"type\">
                                    Type <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"description\">
                                    Description <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"source\">
                                    Source <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"region\">
                                    Région <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"priority\">
                                    Priorité <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"status\">
                                    Statut <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"assignee\">
                                    Assigné à <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th class=\"sortable\" data-sort=\"dateCreated\">
                                    Date <i class=\"ri-arrow-up-down-line\"></i>
                                </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id=\"signalementTableBody\">
                            <!-- Data will be generated dynamically -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class=\"table-footer\">
                    <div class=\"pagination-info\">
                        <span>Affichage de <strong id=\"startEntry\">1</strong> à <strong id=\"endEntry\">10</strong> sur <strong id=\"totalEntries\">0</strong> signalements</span>
                    </div>
                    <div class=\"pagination-controls\">
                        <select id=\"pageSize\" class=\"page-size-select\">
                            <option value=\"10\">10 par page</option>
                            <option value=\"25\">25 par page</option>
                            <option value=\"50\">50 par page</option>
                            <option value=\"100\">100 par page</option>
                        </select>
                        <div class=\"pagination\" id=\"pagination\">
                            <!-- Pagination will be generated dynamically -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content: Incidents -->
        <div class=\"tab-content\" id=\"incidents-tab\">
            <!-- Incident Filters -->
            <div class=\"filters-card\">
                <div class=\"filters-header\">
                    <h3><i class=\"ri-filter-line\"></i> Filtres Incidents</h3>
                    <button class=\"btn btn-text\" id=\"resetIncidentFilters\">
                        <i class=\"ri-refresh-line\"></i> Réinitialiser
                    </button>
                </div>
                <div class=\"filters-body\">
                    <div class=\"filter-group\">
                        <label>Recherche</label>
                        <div class=\"input-icon\">
                            <i class=\"ri-search-line\"></i>
                            <input type=\"text\" id=\"incidentSearchInput\" placeholder=\"Référence, titre, lieu...\">
                        </div>
                    </div>
                    <div class=\"filter-group\">
                        <label>Type d'incident</label>
                        <select id=\"incidentTypeFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"attentat\">Attentat</option>
                            <option value=\"embuscade\">Embuscade</option>
                            <option value=\"attaque_armee\">Attaque armée</option>
                            <option value=\"explosion\">Explosion</option>
                            <option value=\"enlevement\">Enlèvement</option>
                            <option value=\"assassinat\">Assassinat ciblé</option>
                            <option value=\"sabotage\">Sabotage</option>
                            <option value=\"manifestation\">Manifestation violente</option>
                            <option value=\"intrusion\">Intrusion</option>
                            <option value=\"cyber_incident\">Cyber-incident</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Gravité</label>
                        <select id=\"severityFilter\">
                            <option value=\"\">Toutes les gravités</option>
                            <option value=\"5\">⚫ Catastrophique (5/5)</option>
                            <option value=\"4\">🔴 Majeur (4/5)</option>
                            <option value=\"3\">🟠 Modéré (3/5)</option>
                            <option value=\"2\">🟡 Mineur (2/5)</option>
                            <option value=\"1\">🟢 Négligeable (1/5)</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Statut</label>
                        <select id=\"incidentStatusFilter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"declare\">Déclaré</option>
                            <option value=\"confirme\">Confirmé</option>
                            <option value=\"en_cours\">En cours</option>
                            <option value=\"maitrise\">Maîtrisé</option>
                            <option value=\"cloture\">Clôturé</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Région</label>
                        <select id=\"incidentRegionFilter\">
                            <option value=\"\">Toutes les régions</option>
                            <option value=\"ndjamena\">N'Djamena</option>
                            <option value=\"lac\">Lac</option>
                            <option value=\"ouaddai\">Ouaddaï</option>
                            <option value=\"tibesti\">Tibesti</option>
                            <option value=\"borkou\">Borkou</option>
                            <option value=\"kanem\">Kanem</option>
                            <option value=\"logone_occidental\">Logone Occidental</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label>Période</label>
                        <select id=\"incidentPeriodFilter\">
                            <option value=\"\">Toute période</option>
                            <option value=\"today\">Aujourd'hui</option>
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\">Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Incidents Grid -->
            <div class=\"incidents-grid\" id=\"incidentsGrid\">
                <!-- Incident cards will be generated dynamically -->
            </div>

            <!-- Incident Pagination -->
            <div class=\"pagination-container\">
                <div class=\"pagination-info\">
                    <span>Affichage de <strong id=\"incidentStartEntry\">1</strong> à <strong id=\"incidentEndEntry\">6</strong> sur <strong id=\"incidentTotalEntries\">0</strong> incidents</span>
                </div>
                <div class=\"pagination\" id=\"incidentPagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>

        <!-- Tab Content: Analytics -->
        <div class=\"tab-content\" id=\"analytics-tab\">
            <div class=\"analytics-grid\">
                <!-- Chart: Signalements par type -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-pie-chart-line\"></i> Répartition par type</h3>
                        <select id=\"chartPeriod1\" class=\"chart-period-select\">
                            <option value=\"month\">Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                            <option value=\"year\">Cette année</option>
                        </select>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"typeChart\"></canvas>
                    </div>
                </div>

                <!-- Chart: Évolution temporelle -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-line-chart-line\"></i> Évolution temporelle</h3>
                        <select id=\"chartPeriod2\" class=\"chart-period-select\">
                            <option value=\"week\">Cette semaine</option>
                            <option value=\"month\" selected>Ce mois</option>
                            <option value=\"quarter\">Ce trimestre</option>
                        </select>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"timelineChart\"></canvas>
                    </div>
                </div>

                <!-- Chart: Par région -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-map-pin-line\"></i> Distribution géographique</h3>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"regionChart\"></canvas>
                    </div>
                </div>

                <!-- Chart: Par priorité -->
                <div class=\"chart-card\">
                    <div class=\"chart-header\">
                        <h3><i class=\"ri-bar-chart-grouped-line\"></i> Statut des signalements</h3>
                    </div>
                    <div class=\"chart-body\">
                        <canvas id=\"statusChart\"></canvas>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class=\"activity-card\">
                    <div class=\"activity-header\">
                        <h3><i class=\"ri-history-line\"></i> Activité récente</h3>
                        <a href=\"#\" class=\"view-all-link\">Voir tout</a>
                    </div>
                    <div class=\"activity-list\" id=\"activityList\">
                        <!-- Activity items will be generated dynamically -->
                    </div>
                </div>

                <!-- Top Analysts -->
                <div class=\"analysts-card\">
                    <div class=\"analysts-header\">
                        <h3><i class=\"ri-team-line\"></i> Analystes les plus actifs</h3>
                    </div>
                    <div class=\"analysts-list\" id=\"analystsList\">
                        <!-- Analyst items will be generated dynamically -->
                    </div>
                </div>
            </div>
        </div>
   {% endblock %}

    {% block modal %}
   <!-- Modal: New/Edit Signalement -->
    <div class=\"modal-overlay\" id=\"signalementModal\">
        <div class=\"modal\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\"><i class=\"ri-alarm-warning-line\"></i> Nouveau Signalement</h3>
                <button class=\"modal-close\" id=\"closeModal\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"signalementForm\">
                    <input type=\"hidden\" id=\"signalementId\">
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigType\">Type de signalement <span class=\"required\">*</span></label>
                            <select id=\"sigType\" required>
                                <option value=\"\">Sélectionner un type</option>
                                <option value=\"activite_suspecte\">Activité suspecte</option>
                                <option value=\"menace\">Menace directe</option>
                                <option value=\"propagande\">Propagande</option>
                                <option value=\"financement\">Financement illicite</option>
                                <option value=\"radicalisation\">Radicalisation</option>
                                <option value=\"recrutement\">Recrutement</option>
                                <option value=\"desinformation\">Désinformation</option>
                                <option value=\"cyberattaque\">Cyberattaque</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigPriority\">Priorité <span class=\"required\">*</span></label>
                            <select id=\"sigPriority\" required>
                                <option value=\"\">Sélectionner la priorité</option>
                                <option value=\"critique\">🔴 Critique</option>
                                <option value=\"haute\">🟠 Haute</option>
                                <option value=\"moyenne\">🟡 Moyenne</option>
                                <option value=\"basse\">🟢 Basse</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigDescription\">Description <span class=\"required\">*</span></label>
                        <textarea id=\"sigDescription\" rows=\"4\" placeholder=\"Description détaillée du signalement...\" required></textarea>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigSource\">Source du signalement</label>
                            <select id=\"sigSource\">
                                <option value=\"\">Sélectionner la source</option>
                                <option value=\"humint\">HUMINT (Renseignement humain)</option>
                                <option value=\"sigint\">SIGINT (Interception)</option>
                                <option value=\"osint\">OSINT (Sources ouvertes)</option>
                                <option value=\"citoyen\">Signalement citoyen</option>
                                <option value=\"partenaire\">Partenaire institutionnel</option>
                                <option value=\"interne\">Surveillance interne</option>
                                <option value=\"anonyme\">Source anonyme</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigSourceDetail\">Détails de la source</label>
                            <input type=\"text\" id=\"sigSourceDetail\" placeholder=\"Identifiant ou précisions...\">
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigRegion\">Région concernée</label>
                            <select id=\"sigRegion\">
                                <option value=\"\">Sélectionner la région</option>
                                <option value=\"ndjamena\">N'Djamena</option>
                                <option value=\"logone_occidental\">Logone Occidental</option>
                                <option value=\"logone_oriental\">Logone Oriental</option>
                                <option value=\"mayo_kebbi_est\">Mayo-Kebbi Est</option>
                                <option value=\"mayo_kebbi_ouest\">Mayo-Kebbi Ouest</option>
                                <option value=\"ouaddai\">Ouaddaï</option>
                                <option value=\"wadi_fira\">Wadi Fira</option>
                                <option value=\"lac\">Lac</option>
                                <option value=\"kanem\">Kanem</option>
                                <option value=\"batha\">Batha</option>
                                <option value=\"guera\">Guéra</option>
                                <option value=\"salamat\">Salamat</option>
                                <option value=\"moyen_chari\">Moyen-Chari</option>
                                <option value=\"mandoul\">Mandoul</option>
                                <option value=\"tandjile\">Tandjilé</option>
                                <option value=\"borkou\">Borkou</option>
                                <option value=\"ennedi_est\">Ennedi Est</option>
                                <option value=\"ennedi_ouest\">Ennedi Ouest</option>
                                <option value=\"tibesti\">Tibesti</option>
                                <option value=\"sila\">Sila</option>
                                <option value=\"hadjer_lamis\">Hadjer-Lamis</option>
                                <option value=\"barh_el_gazel\">Barh El Gazel</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigLocation\">Localisation précise</label>
                            <input type=\"text\" id=\"sigLocation\" placeholder=\"Quartier, lieu-dit, coordonnées...\">
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"sigAssignee\">Assigner à</label>
                            <select id=\"sigAssignee\">
                                <option value=\"\">Non assigné</option>
                                <option value=\"agent_001\">Agent ANSE-001</option>
                                <option value=\"agent_002\">Agent ANSE-002</option>
                                <option value=\"agent_003\">Agent ANSE-003</option>
                                <option value=\"agent_004\">Agent ANSE-004</option>
                                <option value=\"agent_005\">Agent ANSE-005</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sigStatus\">Statut</label>
                            <select id=\"sigStatus\">
                                <option value=\"nouveau\">Nouveau</option>
                                <option value=\"en_cours\">En cours d'analyse</option>
                                <option value=\"verifie\">Vérifié</option>
                                <option value=\"assigne\">Assigné</option>
                                <option value=\"resolu\">Résolu</option>
                                <option value=\"classe\">Classé sans suite</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigLinkedSubject\">Sujet lié (optionnel)</label>
                        <div class=\"search-select-container\">
                            <input type=\"text\" id=\"sigLinkedSubject\" placeholder=\"Rechercher un sujet fiché...\">
                            <div class=\"search-results\" id=\"subjectSearchResults\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigLinkedIncident\">Incident lié (optionnel)</label>
                        <select id=\"sigLinkedIncident\">
                            <option value=\"\">Aucun incident lié</option>
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label>Pièces jointes</label>
                        <div class=\"file-upload-area\" id=\"fileUploadArea\">
                            <i class=\"ri-upload-cloud-line\"></i>
                            <p>Glissez-déposez vos fichiers ici ou <span class=\"browse-link\">parcourir</span></p>
                            <small>Formats acceptés: PDF, DOC, JPG, PNG, MP3, MP4 (max 50Mo)</small>
                            <input type=\"file\" id=\"fileInput\" multiple hidden>
                        </div>
                        <div class=\"uploaded-files\" id=\"uploadedFiles\"></div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sigNotes\">Notes internes</label>
                        <textarea id=\"sigNotes\" rows=\"3\" placeholder=\"Notes confidentielles pour l'équipe...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline\" id=\"cancelModal\">Annuler</button>
                <button type=\"submit\" form=\"signalementForm\" class=\"btn btn-primary\" id=\"saveSignalement\">
                    <i class=\"ri-save-line\"></i> Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: View Signalement Details -->
    <div class=\"modal-overlay\" id=\"viewModal\">
        <div class=\"modal modal-large\">
            <div class=\"modal-header\">
                <h3 id=\"viewModalTitle\"><i class=\"ri-file-list-line\"></i> Détails du Signalement</h3>
                <button class=\"modal-close\" id=\"closeViewModal\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"detail-grid\" id=\"signalementDetails\">
                    <!-- Details will be generated dynamically -->
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline\" id=\"closeViewBtn\">Fermer</button>
                <button type=\"button\" class=\"btn btn-secondary\" id=\"editFromView\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"convertToIncident\">
                    <i class=\"ri-error-warning-line\"></i> Convertir en incident
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: New Incident -->
    <div class=\"modal-overlay\" id=\"incidentModal\">
        <div class=\"modal modal-large\">
            <div class=\"modal-header\">
                <h3 id=\"incidentModalTitle\"><i class=\"ri-error-warning-line\"></i> Nouvel Incident</h3>
                <button class=\"modal-close\" id=\"closeIncidentModal\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"incidentForm\">
                    <input type=\"hidden\" id=\"incidentId\">
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incTitle\">Titre de l'incident <span class=\"required\">*</span></label>
                            <input type=\"text\" id=\"incTitle\" placeholder=\"Titre descriptif de l'incident\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incType\">Type d'incident <span class=\"required\">*</span></label>
                            <select id=\"incType\" required>
                                <option value=\"\">Sélectionner un type</option>
                                <option value=\"attentat\">Attentat</option>
                                <option value=\"embuscade\">Embuscade</option>
                                <option value=\"attaque_armee\">Attaque armée</option>
                                <option value=\"explosion\">Explosion</option>
                                <option value=\"enlevement\">Enlèvement</option>
                                <option value=\"assassinat\">Assassinat ciblé</option>
                                <option value=\"sabotage\">Sabotage</option>
                                <option value=\"manifestation\">Manifestation violente</option>
                                <option value=\"intrusion\">Intrusion</option>
                                <option value=\"cyber_incident\">Cyber-incident</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incSeverity\">Niveau de gravité <span class=\"required\">*</span></label>
                            <select id=\"incSeverity\" required>
                                <option value=\"\">Sélectionner la gravité</option>
                                <option value=\"5\">⚫ Catastrophique (5/5)</option>
                                <option value=\"4\">🔴 Majeur (4/5)</option>
                                <option value=\"3\">🟠 Modéré (3/5)</option>
                                <option value=\"2\">🟡 Mineur (2/5)</option>
                                <option value=\"1\">🟢 Négligeable (1/5)</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incStatus\">Statut <span class=\"required\">*</span></label>
                            <select id=\"incStatus\" required>
                                <option value=\"declare\">Déclaré</option>
                                <option value=\"confirme\">Confirmé</option>
                                <option value=\"en_cours\">En cours</option>
                                <option value=\"maitrise\">Maîtrisé</option>
                                <option value=\"cloture\">Clôturé</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"incDescription\">Description détaillée <span class=\"required\">*</span></label>
                        <textarea id=\"incDescription\" rows=\"4\" placeholder=\"Description complète de l'incident...\" required></textarea>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incRegion\">Région <span class=\"required\">*</span></label>
                            <select id=\"incRegion\" required>
                                <option value=\"\">Sélectionner la région</option>
                                <option value=\"ndjamena\">N'Djamena</option>
                                <option value=\"lac\">Lac</option>
                                <option value=\"ouaddai\">Ouaddaï</option>
                                <option value=\"tibesti\">Tibesti</option>
                                <option value=\"borkou\">Borkou</option>
                                <option value=\"kanem\">Kanem</option>
                                <option value=\"logone_occidental\">Logone Occidental</option>
                                <option value=\"logone_oriental\">Logone Oriental</option>
                                <option value=\"wadi_fira\">Wadi Fira</option>
                                <option value=\"batha\">Batha</option>
                                <option value=\"guera\">Guéra</option>
                                <option value=\"salamat\">Salamat</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incLocation\">Localisation précise <span class=\"required\">*</span></label>
                            <input type=\"text\" id=\"incLocation\" placeholder=\"Adresse, coordonnées GPS...\" required>
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"incDatetime\">Date et heure de l'incident</label>
                            <input type=\"datetime-local\" id=\"incDatetime\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"incDuration\">Durée estimée</label>
                            <input type=\"text\" id=\"incDuration\" placeholder=\"ex: 2h30, en cours...\">
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h4><i class=\"ri-user-heart-line\"></i> Bilan humain</h4>
                        <div class=\"form-row form-row-4\">
                            <div class=\"form-group\">
                                <label for=\"incVictims\">Victimes</label>
                                <input type=\"number\" id=\"incVictims\" min=\"0\" value=\"0\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"incInjured\">Blessés</label>
                                <input type=\"number\" id=\"incInjured\" min=\"0\" value=\"0\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"incMissing\">Disparus</label>
                                <input type=\"number\" id=\"incMissing\" min=\"0\" value=\"0\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"incArrested\">Arrestations</label>
                                <input type=\"number\" id=\"incArrested\" min=\"0\" value=\"0\">
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"incResponseTeam\">Équipe d'intervention</label>
                        <select id=\"incResponseTeam\" multiple>
                            <option value=\"anse\">ANSE</option>
                            <option value=\"gign\">GIGN</option>
                            <option value=\"police\">Police Nationale</option>
                            <option value=\"gendarmerie\">Gendarmerie</option>
                            <option value=\"armee\">Forces Armées</option>
                            <option value=\"pompiers\">Pompiers</option>
                            <option value=\"samu\">SAMU</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"incLinkedSignalements\">Signalements liés</label>
                        <select id=\"incLinkedSignalements\" multiple>
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label>Pièces jointes</label>
                        <div class=\"file-upload-area\" id=\"incidentFileUploadArea\">
                            <i class=\"ri-upload-cloud-line\"></i>
                            <p>Glissez-déposez vos fichiers ici ou <span class=\"browse-link\">parcourir</span></p>
                            <small>Formats acceptés: PDF, DOC, JPG, PNG, MP4 (max 100Mo)</small>
                            <input type=\"file\" id=\"incidentFileInput\" multiple hidden>
                        </div>
                        <div class=\"uploaded-files\" id=\"incidentUploadedFiles\"></div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline\" id=\"cancelIncidentModal\">Annuler</button>
                <button type=\"submit\" form=\"incidentForm\" class=\"btn btn-danger\" id=\"saveIncident\">
                    <i class=\"ri-save-line\"></i> Enregistrer l'incident
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class=\"toast-container\" id=\"toastContainer\"></div>

    <!-- Loading Overlay -->
    <div class=\"loading-overlay\" id=\"loadingOverlay\">
        <div class=\"loader\">
            <div class=\"loader-spinner\"></div>
            <p>Chargement en cours...</p>
        </div>
    </div>

    {% endblock %}
    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
        <script src=\"{{ asset('js/signalements.js') }}\"></script>
    {% endblock %}", "signalements.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\signalements.html.twig");
    }
}
