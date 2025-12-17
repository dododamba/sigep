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
class __TwigTemplate_d0a96235a6ece8c555f19793e41611e0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
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
        yield "     <!-- Quick Access Bar -->
            <section class=\"quick-access\">
                <a href=\"personnes.html\" class=\"quick-link\">
                    <i class=\"ri-user-search-line\"></i>
                    <span>Personnes</span>
                </a>
                <a href=\"reseaux.html\" class=\"quick-link\">
                    <i class=\"ri-share-line\"></i>
                    <span>Réseaux</span>
                </a>
                <a href=\"enquetes.html\" class=\"quick-link\">
                    <i class=\"ri-search-eye-line\"></i>
                    <span>Enquêtes</span>
                </a>
                <a href=\"signalements.html\" class=\"quick-link\">
                    <i class=\"ri-alarm-warning-line\"></i>
                    <span>Signalements</span>
                </a>
                <a href=\"identites.html\" class=\"quick-link\">
                    <i class=\"ri-fingerprint-line\"></i>
                    <span>Identités</span>
                </a>
                <a href=\"contenus.html\" class=\"quick-link\">
                    <i class=\"ri-file-text-line\"></i>
                    <span>Contenus</span>
                </a>
                <a href=\"etablissements.html\" class=\"quick-link\">
                    <i class=\"ri-map-pin-line\"></i>
                    <span>Établissements</span>
                </a>
                <a href=\"condamnations.html\" class=\"quick-link\">
                    <i class=\"ri-scales-3-line\"></i>
                    <span>Condamnations</span>
                </a>
            </section>

            <!-- Statistics Grid -->
            <section class=\"stats-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">
                        <i class=\"ri-bar-chart-box-line\"></i>
                        Statistiques Globales
                    </h2>
                    <div class=\"section-actions\">
                        <select id=\"statsPeriod\" class=\"period-select\">
                            <option value=\"24h\">Dernières 24h</option>
                            <option value=\"7d\" selected>7 derniers jours</option>
                            <option value=\"30d\">30 derniers jours</option>
                            <option value=\"90d\">90 derniers jours</option>
                        </select>
                    </div>
                </div>
                
                <div class=\"stats-grid\" id=\"statsGrid\">
                    <!-- Stat Card 1: Personnes fichées -->
                    <div class=\"stat-card\" data-entity=\"personnes\">
                        <div class=\"stat-icon blue\">
                            <i class=\"ri-user-search-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Personnes fichées</div>
                            <div class=\"stat-value\" id=\"statPersonnes\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-trend positive\" id=\"trendPersonnes\">
                                <i class=\"ri-arrow-up-s-line\"></i>
                                <span>--</span>
                            </div>
                        </div>
                        <div class=\"stat-chart\">
                            <canvas id=\"sparkPersonnes\"></canvas>
                        </div>
                    </div>

                    <!-- Stat Card 2: Catégories A/S -->
                    <div class=\"stat-card danger\" data-entity=\"critiques\">
                        <div class=\"stat-icon red\">
                            <i class=\"ri-error-warning-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Catégorie A/S</div>
                            <div class=\"stat-value\" id=\"statCritiques\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-breakdown\" id=\"breakdownCritiques\">
                                <span class=\"cat-badge cat-a\">A: --</span>
                                <span class=\"cat-badge cat-s\">S: --</span>
                            </div>
                        </div>
                        <div class=\"stat-indicator critical\">
                            <span class=\"pulse\"></span>
                        </div>
                    </div>

                    <!-- Stat Card 3: Réseaux -->
                    <div class=\"stat-card\" data-entity=\"reseaux\">
                        <div class=\"stat-icon purple\">
                            <i class=\"ri-share-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Réseaux surveillés</div>
                            <div class=\"stat-value\" id=\"statReseaux\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-trend positive\" id=\"trendReseaux\">
                                <i class=\"ri-arrow-up-s-line\"></i>
                                <span>--</span>
                            </div>
                        </div>
                        <div class=\"stat-chart\">
                            <canvas id=\"sparkReseaux\"></canvas>
                        </div>
                    </div>

                    <!-- Stat Card 4: Enquêtes actives -->
                    <div class=\"stat-card\" data-entity=\"enquetes\">
                        <div class=\"stat-icon orange\">
                            <i class=\"ri-search-eye-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Enquêtes actives</div>
                            <div class=\"stat-value\" id=\"statEnquetes\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-detail\" id=\"detailEnquetes\">
                                <span>En cours: --</span>
                            </div>
                        </div>
                        <div class=\"stat-chart\">
                            <canvas id=\"sparkEnquetes\"></canvas>
                        </div>
                    </div>

                    <!-- Stat Card 5: Signalements -->
                    <div class=\"stat-card\" data-entity=\"signalements\">
                        <div class=\"stat-icon yellow\">
                            <i class=\"ri-alarm-warning-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Signalements</div>
                            <div class=\"stat-value\" id=\"statSignalements\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-trend negative\" id=\"trendSignalements\">
                                <i class=\"ri-arrow-up-s-line\"></i>
                                <span>--</span>
                            </div>
                        </div>
                        <div class=\"stat-chart\">
                            <canvas id=\"sparkSignalements\"></canvas>
                        </div>
                    </div>

                    <!-- Stat Card 6: Identités numériques -->
                    <div class=\"stat-card\" data-entity=\"identites\">
                        <div class=\"stat-icon cyan\">
                            <i class=\"ri-fingerprint-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Identités numériques</div>
                            <div class=\"stat-value\" id=\"statIdentites\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-trend positive\" id=\"trendIdentites\">
                                <i class=\"ri-arrow-up-s-line\"></i>
                                <span>--</span>
                            </div>
                        </div>
                        <div class=\"stat-chart\">
                            <canvas id=\"sparkIdentites\"></canvas>
                        </div>
                    </div>

                    <!-- Stat Card 7: Contenus surveillés -->
                    <div class=\"stat-card\" data-entity=\"contenus\">
                        <div class=\"stat-icon green\">
                            <i class=\"ri-file-text-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Contenus surveillés</div>
                            <div class=\"stat-value\" id=\"statContenus\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-detail\" id=\"detailContenus\">
                                <span>Sensibles: --</span>
                            </div>
                        </div>
                        <div class=\"stat-chart\">
                            <canvas id=\"sparkContenus\"></canvas>
                        </div>
                    </div>

                    <!-- Stat Card 8: Condamnations -->
                    <div class=\"stat-card\" data-entity=\"condamnations\">
                        <div class=\"stat-icon slate\">
                            <i class=\"ri-scales-3-line\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">Condamnations</div>
                            <div class=\"stat-value\" id=\"statCondamnations\">
                                <span class=\"skeleton-text\"></span>
                            </div>
                            <div class=\"stat-trend neutral\" id=\"trendCondamnations\">
                                <i class=\"ri-subtract-line\"></i>
                                <span>--</span>
                            </div>
                        </div>
                        <div class=\"stat-chart\">
                            <canvas id=\"sparkCondamnations\"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Dashboard Grid -->
            <div class=\"dashboard-grid\">
                <!-- Alerts Section -->
                <section class=\"dashboard-card alerts-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-alarm-warning-fill\"></i>
                            Alertes Critiques
                        </h3>
                        <div class=\"card-actions\">
                            <span class=\"alert-count\" id=\"alertCount\">0</span>
                            <button class=\"card-btn\" id=\"viewAllAlerts\" title=\"Voir toutes les alertes\">
                                <i class=\"ri-external-link-line\"></i>
                            </button>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"alerts-list\" id=\"alertsList\">
                            <!-- Alerts will be rendered here -->
                            <div class=\"loading-placeholder\">
                                <div class=\"skeleton-alert\"></div>
                                <div class=\"skeleton-alert\"></div>
                                <div class=\"skeleton-alert\"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Charts Section - Signalements -->
                <section class=\"dashboard-card chart-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-line-chart-line\"></i>
                            Évolution des Signalements
                        </h3>
                        <div class=\"card-actions\">
                            <div class=\"chart-legend\" id=\"signalementsLegend\"></div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-container\">
                            <canvas id=\"chartSignalements\"></canvas>
                        </div>
                    </div>
                </section>

                <!-- Charts Section - Fiches créées -->
                <section class=\"dashboard-card chart-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-bar-chart-2-line\"></i>
                            Création de Fiches
                        </h3>
                        <div class=\"card-actions\">
                            <select id=\"fichesChartType\" class=\"mini-select\">
                                <option value=\"bar\">Barres</option>
                                <option value=\"line\">Lignes</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-container\">
                            <canvas id=\"chartFiches\"></canvas>
                        </div>
                    </div>
                </section>

                <!-- Charts Section - Activité Réseaux -->
                <section class=\"dashboard-card chart-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-pie-chart-2-line\"></i>
                            Répartition par Catégorie
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-container chart-doughnut\">
                            <canvas id=\"chartCategories\"></canvas>
                        </div>
                    </div>
                </section>

                <!-- Charts Section - Activité numérique -->
                <section class=\"dashboard-card chart-card wide\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-global-line\"></i>
                            Activité Numérique
                        </h3>
                        <div class=\"card-actions\">
                            <div class=\"toggle-group\">
                                <button class=\"toggle-btn active\" data-view=\"comptes\">Comptes</button>
                                <button class=\"toggle-btn\" data-view=\"contenus\">Contenus</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"chart-container wide\">
                            <canvas id=\"chartActivite\"></canvas>
                        </div>
                    </div>
                </section>

                <!-- Relations Section -->
                <section class=\"dashboard-card relations-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-mind-map\"></i>
                            Relations Inter-entités
                        </h3>
                        <div class=\"card-actions\">
                            <select id=\"relationType\" class=\"mini-select\">
                                <option value=\"all\">Toutes</option>
                                <option value=\"personnes-reseaux\">Personnes ↔ Réseaux</option>
                                <option value=\"personnes-enquetes\">Personnes ↔ Enquêtes</option>
                                <option value=\"reseaux-condamnations\">Réseaux ↔ Condamnations</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"relations-matrix\" id=\"relationsMatrix\">
                            <!-- Relations will be rendered here -->
                            <div class=\"loading-placeholder\">
                                <div class=\"skeleton-matrix\"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Recent Activity Section -->
                <section class=\"dashboard-card activity-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-history-line\"></i>
                            Activité Récente
                        </h3>
                        <div class=\"card-actions\">
                            <div class=\"tab-group\" id=\"activityTabs\">
                                <button class=\"tab-btn active\" data-tab=\"fiches\">Fiches</button>
                                <button class=\"tab-btn\" data-tab=\"enquetes\">Enquêtes</button>
                                <button class=\"tab-btn\" data-tab=\"signalements\">Signalements</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"activity-list\" id=\"activityList\">
                            <!-- Activity items will be rendered here -->
                            <div class=\"loading-placeholder\">
                                <div class=\"skeleton-activity\"></div>
                                <div class=\"skeleton-activity\"></div>
                                <div class=\"skeleton-activity\"></div>
                                <div class=\"skeleton-activity\"></div>
                                <div class=\"skeleton-activity\"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Geographic Distribution -->
                <section class=\"dashboard-card geo-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-map-2-line\"></i>
                            Répartition Géographique
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"geo-stats\" id=\"geoStats\">
                            <!-- Geographic stats will be rendered here -->
                            <div class=\"loading-placeholder\">
                                <div class=\"skeleton-geo\"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Platform Distribution -->
                <section class=\"dashboard-card platform-card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ri-apps-line\"></i>
                            Plateformes Surveillées
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"platform-list\" id=\"platformList\">
                            <!-- Platforms will be rendered here -->
                            <div class=\"loading-placeholder\">
                                <div class=\"skeleton-platform\"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
   ";
        yield from [];
    }

    // line 417
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 418
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        yield "\"></script>
    ";
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
        return array (  507 => 418,  500 => 417,  87 => 7,  80 => 6,  72 => 4,  65 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/index.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/dashboard/index.html.twig");
    }
}
