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

/* condamnations.html.twig */
class __TwigTemplate_7d64bc36a01d8a9640a00692c834f328 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "condamnations.html.twig"));

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

        yield "Condamnations";
        
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
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/condamnations.css"), "html", null, true);
        yield "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "
       <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Condamnations Judiciaires</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Gestion</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Condamnations</span>
            </div>
        </div>
    <!-- Statistics Grid -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-scales-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Total Condamnations</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-alarm-warning-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Niveau Critique</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-time-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">En Appel</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-file-text-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Avec Pièces Jointes</div>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Registre des Condamnations</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addCondamnationBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvelle Condamnation
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Référence, motif, personne...\">
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'infraction</label>
                        <select class=\"filter-select\" id=\"typeInfractionFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"terrorisme\">Terrorisme</option>
                            <option value=\"criminel\">Criminel</option>
                            <option value=\"drogue\">Trafic de drogue</option>
                            <option value=\"fraude\">Fraude</option>
                            <option value=\"violence\">Violence</option>
                            <option value=\"cybercriminalite\">Cybercriminalité</option>
                            <option value=\"corruption\">Corruption</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Juridiction</label>
                        <select class=\"filter-select\" id=\"juridictionFilter\">
                            <option value=\"\">Toutes les juridictions</option>
                            <option value=\"cour_supreme\">Cour Suprême</option>
                            <option value=\"cour_appel\">Cour d'Appel</option>
                            <option value=\"tribunal_grande_instance\">Tribunal de Grande Instance</option>
                            <option value=\"tribunal_correctionnel\">Tribunal Correctionnel</option>
                            <option value=\"cour_assises\">Cour d'Assises</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Gravité</label>
                        <select class=\"filter-select\" id=\"graviteFilter\">
                            <option value=\"\">Tous les niveaux</option>
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
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"confirme\">Confirmé</option>
                            <option value=\"en_appel\">En appel</option>
                            <option value=\"annule\">Annulé</option>
                            <option value=\"en_cours\">En cours</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Pièces jointes</label>
                        <select class=\"filter-select\" id=\"pieceJointeFilter\">
                            <option value=\"\">Toutes</option>
                            <option value=\"true\">Avec pièces jointes</option>
                            <option value=\"false\">Sans pièces jointes</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <table class=\"data-table\" id=\"dataTable\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('reference')\">
                                Référence <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('personne')\">
                                Personne fichée <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('juridiction')\">
                                Juridiction <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('dateJugement')\">
                                Date du jugement <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Motif</th>
                            <th>Peine</th>
                            <th onclick=\"sortTable('gravite')\">
                                Gravité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Pièces</th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <tr>
                            <td colspan=\"10\" class=\"loading-cell\">
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
                    Affichage de <strong id=\"startEntry\">0</strong> à <strong id=\"endEntry\">0</strong> sur <strong id=\"totalEntries\">0</strong> condamnations
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

    // line 192
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 193
        yield "    <!-- Modal: Ajouter/Modifier Condamnation -->
    <div class=\"modal\" id=\"condamnationModal\">
        <div class=\"modal-content modal-large\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Nouvelle Condamnation</h3>
                <button class=\"modal-close\" onclick=\"closeCondamnationModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"condamnationForm\">
                    <input type=\"hidden\" id=\"condamnationId\">
                    
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Référence</label>
                            <input type=\"text\" class=\"form-input\" id=\"reference\" required>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Personne fichée</label>
                            <select class=\"form-input\" id=\"personneId\" required>
                                <option value=\"\">Sélectionner une personne</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Type d'infraction</label>
                            <select class=\"form-input\" id=\"typeInfraction\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"terrorisme\">Terrorisme</option>
                                <option value=\"criminel\">Criminel</option>
                                <option value=\"drogue\">Trafic de drogue</option>
                                <option value=\"fraude\">Fraude</option>
                                <option value=\"violence\">Violence</option>
                                <option value=\"cybercriminalite\">Cybercriminalité</option>
                                <option value=\"corruption\">Corruption</option>
                                <option value=\"autre\">Autre</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Juridiction</label>
                            <select class=\"form-input\" id=\"juridiction\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"cour_supreme\">Cour Suprême</option>
                                <option value=\"cour_appel\">Cour d'Appel</option>
                                <option value=\"tribunal_grande_instance\">Tribunal de Grande Instance</option>
                                <option value=\"tribunal_correctionnel\">Tribunal Correctionnel</option>
                                <option value=\"cour_assises\">Cour d'Assises</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Date du jugement</label>
                            <input type=\"date\" class=\"form-input\" id=\"dateJugement\" required>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Gravité</label>
                            <select class=\"form-input\" id=\"gravite\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"5\">Critique (5/5)</option>
                                <option value=\"4\">Élevé (4/5)</option>
                                <option value=\"3\">Moyen (3/5)</option>
                                <option value=\"2\">Faible (2/5)</option>
                                <option value=\"1\">Très faible (1/5)</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Statut</label>
                            <select class=\"form-input\" id=\"statut\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"confirme\">Confirmé</option>
                                <option value=\"en_appel\">En appel</option>
                                <option value=\"annule\">Annulé</option>
                                <option value=\"en_cours\">En cours</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\">Peine (durée)</label>
                            <input type=\"text\" class=\"form-input\" id=\"peine\" placeholder=\"Ex: 10 ans de prison\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label required\">Motif de la condamnation</label>
                        <textarea class=\"form-textarea\" id=\"motif\" rows=\"4\" required 
                                  placeholder=\"Décrire le motif de la condamnation...\"></textarea>
                        <small class=\"form-help sensitive-warning\">
                            <i class=\"ri-alert-line\"></i> Information sensible - Accès restreint selon habilitation
                        </small>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\">Observations</label>
                        <textarea class=\"form-textarea\" id=\"observations\" rows=\"3\" 
                                  placeholder=\"Observations complémentaires...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeCondamnationModal()\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveCondamnationBtn\" onclick=\"submitCondamnation()\">
                    <i class=\"ri-save-line\"></i>
                    Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Détails Condamnation (avec onglets) -->
    <div class=\"modal\" id=\"detailsModal\">
        <div class=\"modal-content modal-xlarge\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <h3 id=\"detailsTitle\">Détails de la Condamnation</h3>
                    <span class=\"badge-status\" id=\"detailsStatus\"></span>
                </div>
                <button class=\"modal-close\" onclick=\"closeDetailsModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- Tabs Navigation -->
                <div class=\"tabs-nav\" id=\"tabsNav\">
                    <button class=\"tab-btn active\" data-tab=\"resume\">
                        <i class=\"ri-file-list-line\"></i> Résumé
                    </button>
                    <button class=\"tab-btn\" data-tab=\"motifs\">
                        <i class=\"ri-article-line\"></i> Motifs & Peines
                    </button>
                    <button class=\"tab-btn\" data-tab=\"pieces\">
                        <i class=\"ri-attachment-line\"></i> Pièces Jointes
                    </button>
                    <button class=\"tab-btn\" data-tab=\"liens\">
                        <i class=\"ri-links-line\"></i> Liens & Relations
                    </button>
                    <button class=\"tab-btn\" data-tab=\"historique\">
                        <i class=\"ri-history-line\"></i> Historique
                    </button>
                </div>

                <!-- Tab: Résumé -->
                <div class=\"tab-content active\" id=\"tab-resume\">
                    <div class=\"details-grid\" id=\"resumeContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Motifs & Peines -->
                <div class=\"tab-content\" id=\"tab-motifs\">
                    <div class=\"sensitive-section\" id=\"motifsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Pièces Jointes -->
                <div class=\"tab-content\" id=\"tab-pieces\">
                    <div class=\"pieces-container\">
                        <div class=\"pieces-header\">
                            <h4>Documents et Preuves Judiciaires</h4>
                            <button class=\"btn btn-sm btn-primary\" onclick=\"openUploadModal()\">
                                <i class=\"ri-upload-line\"></i> Ajouter un fichier
                            </button>
                        </div>
                        <div id=\"piecesContent\">
                            <div class=\"loading-spinner\"></div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Liens & Relations -->
                <div class=\"tab-content\" id=\"tab-liens\">
                    <div class=\"liens-grid\" id=\"liensContent\">
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
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDetailsModal()\">
                    Fermer
                </button>
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"editCondamnation()\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </button>
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deleteCondamnation()\" id=\"deleteBtn\">
                    <i class=\"ri-delete-bin-line\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Upload Pièce Jointe -->
    <div class=\"modal\" id=\"uploadModal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Ajouter une Pièce Jointe</h3>
                <button class=\"modal-close\" onclick=\"closeUploadModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"uploadForm\">
                    <div class=\"form-group\">
                        <label class=\"form-label required\">Type de document</label>
                        <select class=\"form-input\" id=\"documentType\" required>
                            <option value=\"\">Sélectionner</option>
                            <option value=\"verdict\">Verdict</option>
                            <option value=\"rapport\">Rapport d'enquête</option>
                            <option value=\"preuve\">Preuve</option>
                            <option value=\"decision\">Décision de juridiction</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Description</label>
                        <textarea class=\"form-textarea\" id=\"documentDescription\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label required\">Fichier</label>
                        <div class=\"file-upload-area\" id=\"fileUploadArea\">
                            <input type=\"file\" id=\"fileInput\" hidden>
                            <div class=\"file-upload-placeholder\">
                                <i class=\"ri-upload-cloud-line\"></i>
                                <p>Cliquez pour sélectionner un fichier</p>
                                <small>PDF, DOC, DOCX, JPG, PNG (Max 10 Mo)</small>
                            </div>
                        </div>
                        <div id=\"filePreview\" class=\"file-preview\" style=\"display: none;\"></div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeUploadModal()\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"uploadBtn\" onclick=\"uploadFile()\">
                    <i class=\"ri-upload-line\"></i> Téléverser
                </button>
            </div>
        </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 449
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 450
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/condamnations.js"), "html", null, true);
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
        return "condamnations.html.twig";
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
        return array (  581 => 450,  571 => 449,  309 => 193,  299 => 192,  110 => 9,  100 => 8,  88 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Condamnations{% endblock %}
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/condamnations.css') }}\">

{% endblock %}
  
   {% block body %}

       <div class=\"page-header\">
            <h2 class=\"page-title\">Gestion des Condamnations Judiciaires</h2>
            <div class=\"page-breadcrumb\">
                <span>SIGMA</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span>Gestion</span>
                <span class=\"breadcrumb-separator\">/</span>
                <span style=\"color: var(--primary-color);\">Condamnations</span>
            </div>
        </div>
    <!-- Statistics Grid -->
        <div class=\"stats-grid\" id=\"statsGrid\">
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-scales-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Total Condamnations</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-alarm-warning-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Niveau Critique</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-time-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">En Appel</div>
                </div>
            </div>
            <div class=\"stat-card loading\">
                <div class=\"stat-icon\">
                    <i class=\"ri-file-text-line\"></i>
                </div>
                <div class=\"stat-content\">
                    <div class=\"stat-value\">--</div>
                    <div class=\"stat-label\">Avec Pièces Jointes</div>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class=\"table-container\">
            <div class=\"table-header\">
                <div class=\"table-header-top\">
                    <h3 class=\"table-title\">Registre des Condamnations</h3>
                    <div class=\"table-actions\">
                        <button class=\"btn btn-secondary\" id=\"exportBtn\">
                            <i class=\"ri-download-line\"></i>
                            Exporter
                        </button>
                        <button class=\"btn btn-primary\" id=\"addCondamnationBtn\">
                            <i class=\"ri-add-line\"></i>
                            Nouvelle Condamnation
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class=\"table-filters\" id=\"filters\">
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Recherche</label>
                        <input type=\"text\" class=\"filter-input\" id=\"searchInput\" placeholder=\"Référence, motif, personne...\">
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Type d'infraction</label>
                        <select class=\"filter-select\" id=\"typeInfractionFilter\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"terrorisme\">Terrorisme</option>
                            <option value=\"criminel\">Criminel</option>
                            <option value=\"drogue\">Trafic de drogue</option>
                            <option value=\"fraude\">Fraude</option>
                            <option value=\"violence\">Violence</option>
                            <option value=\"cybercriminalite\">Cybercriminalité</option>
                            <option value=\"corruption\">Corruption</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Juridiction</label>
                        <select class=\"filter-select\" id=\"juridictionFilter\">
                            <option value=\"\">Toutes les juridictions</option>
                            <option value=\"cour_supreme\">Cour Suprême</option>
                            <option value=\"cour_appel\">Cour d'Appel</option>
                            <option value=\"tribunal_grande_instance\">Tribunal de Grande Instance</option>
                            <option value=\"tribunal_correctionnel\">Tribunal Correctionnel</option>
                            <option value=\"cour_assises\">Cour d'Assises</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Gravité</label>
                        <select class=\"filter-select\" id=\"graviteFilter\">
                            <option value=\"\">Tous les niveaux</option>
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
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"confirme\">Confirmé</option>
                            <option value=\"en_appel\">En appel</option>
                            <option value=\"annule\">Annulé</option>
                            <option value=\"en_cours\">En cours</option>
                        </select>
                    </div>
                    <div class=\"filter-group\">
                        <label class=\"filter-label\">Pièces jointes</label>
                        <select class=\"filter-select\" id=\"pieceJointeFilter\">
                            <option value=\"\">Toutes</option>
                            <option value=\"true\">Avec pièces jointes</option>
                            <option value=\"false\">Sans pièces jointes</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Body -->
            <div class=\"table-body\">
                <table class=\"data-table\" id=\"dataTable\">
                    <thead>
                        <tr>
                            <th onclick=\"sortTable('reference')\">
                                Référence <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('personne')\">
                                Personne fichée <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('juridiction')\">
                                Juridiction <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th onclick=\"sortTable('dateJugement')\">
                                Date du jugement <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Motif</th>
                            <th>Peine</th>
                            <th onclick=\"sortTable('gravite')\">
                                Gravité <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Pièces</th>
                            <th onclick=\"sortTable('statut')\">
                                Statut <i class=\"ri-arrow-up-down-line sort-icon\"></i>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        <tr>
                            <td colspan=\"10\" class=\"loading-cell\">
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
                    Affichage de <strong id=\"startEntry\">0</strong> à <strong id=\"endEntry\">0</strong> sur <strong id=\"totalEntries\">0</strong> condamnations
                </div>
                <div class=\"pagination\" id=\"pagination\">
                    <!-- Pagination will be generated dynamically -->
                </div>
            </div>
        </div>
    {% endblock %}

    {% block modal %}
    <!-- Modal: Ajouter/Modifier Condamnation -->
    <div class=\"modal\" id=\"condamnationModal\">
        <div class=\"modal-content modal-large\">
            <div class=\"modal-header\">
                <h3 id=\"modalTitle\">Nouvelle Condamnation</h3>
                <button class=\"modal-close\" onclick=\"closeCondamnationModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"condamnationForm\">
                    <input type=\"hidden\" id=\"condamnationId\">
                    
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label required\">Référence</label>
                            <input type=\"text\" class=\"form-input\" id=\"reference\" required>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Personne fichée</label>
                            <select class=\"form-input\" id=\"personneId\" required>
                                <option value=\"\">Sélectionner une personne</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Type d'infraction</label>
                            <select class=\"form-input\" id=\"typeInfraction\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"terrorisme\">Terrorisme</option>
                                <option value=\"criminel\">Criminel</option>
                                <option value=\"drogue\">Trafic de drogue</option>
                                <option value=\"fraude\">Fraude</option>
                                <option value=\"violence\">Violence</option>
                                <option value=\"cybercriminalite\">Cybercriminalité</option>
                                <option value=\"corruption\">Corruption</option>
                                <option value=\"autre\">Autre</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Juridiction</label>
                            <select class=\"form-input\" id=\"juridiction\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"cour_supreme\">Cour Suprême</option>
                                <option value=\"cour_appel\">Cour d'Appel</option>
                                <option value=\"tribunal_grande_instance\">Tribunal de Grande Instance</option>
                                <option value=\"tribunal_correctionnel\">Tribunal Correctionnel</option>
                                <option value=\"cour_assises\">Cour d'Assises</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Date du jugement</label>
                            <input type=\"date\" class=\"form-input\" id=\"dateJugement\" required>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Gravité</label>
                            <select class=\"form-input\" id=\"gravite\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"5\">Critique (5/5)</option>
                                <option value=\"4\">Élevé (4/5)</option>
                                <option value=\"3\">Moyen (3/5)</option>
                                <option value=\"2\">Faible (2/5)</option>
                                <option value=\"1\">Très faible (1/5)</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label required\">Statut</label>
                            <select class=\"form-input\" id=\"statut\" required>
                                <option value=\"\">Sélectionner</option>
                                <option value=\"confirme\">Confirmé</option>
                                <option value=\"en_appel\">En appel</option>
                                <option value=\"annule\">Annulé</option>
                                <option value=\"en_cours\">En cours</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\">Peine (durée)</label>
                            <input type=\"text\" class=\"form-input\" id=\"peine\" placeholder=\"Ex: 10 ans de prison\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label required\">Motif de la condamnation</label>
                        <textarea class=\"form-textarea\" id=\"motif\" rows=\"4\" required 
                                  placeholder=\"Décrire le motif de la condamnation...\"></textarea>
                        <small class=\"form-help sensitive-warning\">
                            <i class=\"ri-alert-line\"></i> Information sensible - Accès restreint selon habilitation
                        </small>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\">Observations</label>
                        <textarea class=\"form-textarea\" id=\"observations\" rows=\"3\" 
                                  placeholder=\"Observations complémentaires...\"></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeCondamnationModal()\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveCondamnationBtn\" onclick=\"submitCondamnation()\">
                    <i class=\"ri-save-line\"></i>
                    Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Détails Condamnation (avec onglets) -->
    <div class=\"modal\" id=\"detailsModal\">
        <div class=\"modal-content modal-xlarge\">
            <div class=\"modal-header\">
                <div class=\"modal-title-group\">
                    <h3 id=\"detailsTitle\">Détails de la Condamnation</h3>
                    <span class=\"badge-status\" id=\"detailsStatus\"></span>
                </div>
                <button class=\"modal-close\" onclick=\"closeDetailsModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- Tabs Navigation -->
                <div class=\"tabs-nav\" id=\"tabsNav\">
                    <button class=\"tab-btn active\" data-tab=\"resume\">
                        <i class=\"ri-file-list-line\"></i> Résumé
                    </button>
                    <button class=\"tab-btn\" data-tab=\"motifs\">
                        <i class=\"ri-article-line\"></i> Motifs & Peines
                    </button>
                    <button class=\"tab-btn\" data-tab=\"pieces\">
                        <i class=\"ri-attachment-line\"></i> Pièces Jointes
                    </button>
                    <button class=\"tab-btn\" data-tab=\"liens\">
                        <i class=\"ri-links-line\"></i> Liens & Relations
                    </button>
                    <button class=\"tab-btn\" data-tab=\"historique\">
                        <i class=\"ri-history-line\"></i> Historique
                    </button>
                </div>

                <!-- Tab: Résumé -->
                <div class=\"tab-content active\" id=\"tab-resume\">
                    <div class=\"details-grid\" id=\"resumeContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Motifs & Peines -->
                <div class=\"tab-content\" id=\"tab-motifs\">
                    <div class=\"sensitive-section\" id=\"motifsContent\">
                        <div class=\"loading-spinner\"></div>
                    </div>
                </div>

                <!-- Tab: Pièces Jointes -->
                <div class=\"tab-content\" id=\"tab-pieces\">
                    <div class=\"pieces-container\">
                        <div class=\"pieces-header\">
                            <h4>Documents et Preuves Judiciaires</h4>
                            <button class=\"btn btn-sm btn-primary\" onclick=\"openUploadModal()\">
                                <i class=\"ri-upload-line\"></i> Ajouter un fichier
                            </button>
                        </div>
                        <div id=\"piecesContent\">
                            <div class=\"loading-spinner\"></div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Liens & Relations -->
                <div class=\"tab-content\" id=\"tab-liens\">
                    <div class=\"liens-grid\" id=\"liensContent\">
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
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDetailsModal()\">
                    Fermer
                </button>
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"editCondamnation()\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </button>
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deleteCondamnation()\" id=\"deleteBtn\">
                    <i class=\"ri-delete-bin-line\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal: Upload Pièce Jointe -->
    <div class=\"modal\" id=\"uploadModal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3>Ajouter une Pièce Jointe</h3>
                <button class=\"modal-close\" onclick=\"closeUploadModal()\">
                    <i class=\"ri-close-line\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"uploadForm\">
                    <div class=\"form-group\">
                        <label class=\"form-label required\">Type de document</label>
                        <select class=\"form-input\" id=\"documentType\" required>
                            <option value=\"\">Sélectionner</option>
                            <option value=\"verdict\">Verdict</option>
                            <option value=\"rapport\">Rapport d'enquête</option>
                            <option value=\"preuve\">Preuve</option>
                            <option value=\"decision\">Décision de juridiction</option>
                            <option value=\"autre\">Autre</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Description</label>
                        <textarea class=\"form-textarea\" id=\"documentDescription\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label required\">Fichier</label>
                        <div class=\"file-upload-area\" id=\"fileUploadArea\">
                            <input type=\"file\" id=\"fileInput\" hidden>
                            <div class=\"file-upload-placeholder\">
                                <i class=\"ri-upload-cloud-line\"></i>
                                <p>Cliquez pour sélectionner un fichier</p>
                                <small>PDF, DOC, DOCX, JPG, PNG (Max 10 Mo)</small>
                            </div>
                        </div>
                        <div id=\"filePreview\" class=\"file-preview\" style=\"display: none;\"></div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeUploadModal()\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"uploadBtn\" onclick=\"uploadFile()\">
                    <i class=\"ri-upload-line\"></i> Téléverser
                </button>
            </div>
        </div>
    </div>
    {% endblock %}

    {% block javascripts %}
        <script src=\"{{ asset('js/condamnations.js') }}\"></script>
    {% endblock %}", "condamnations.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\condamnations.html.twig");
    }
}
