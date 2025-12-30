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

/* activity/index.html.twig */
class __TwigTemplate_63206f8316c2425aadda3a87c0dd1b6b extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Historique d'Utilisation - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "<style>
    :root {
        --bg-primary: #f0f4f8;
        --bg-secondary: #ffffff;
        --bg-tertiary: #e8eef4;
        --text-primary: #1a2a3a;
        --text-secondary: #4a5e73;
        --text-muted: #7a8fa3;
        --border-color: #d0dbe6;
        
        --tchad-blue: #002664;
        --tchad-gold: #fecb00;
        --tchad-red: #c60c30;
        
        --accent-primary: #002664;
        --accent-gradient: linear-gradient(135deg, #002664 0%, #1a4a8a 50%, #2a5a9a 100%);
        
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #3b82f6;
        
        --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    }

    .page-header {
        background: var(--accent-gradient);
        color: white;
        padding: 2rem;
        border-radius: 16px;
        margin-bottom: 2rem;
        box-shadow: var(--shadow-lg);
    }

    .page-header h1 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .page-header p {
        opacity: 0.9;
        font-size: 1rem;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin-bottom: 24px;
    }

    .stat-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        padding: 24px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

    .stat-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 16px;
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .stat-icon.blue { background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue); }
    .stat-icon.gold { background: rgba(254, 203, 0, 0.1); color: #b8860b; }
    .stat-icon.red { background: rgba(198, 12, 48, 0.1); color: var(--tchad-red); }
    .stat-icon.green { background: rgba(16, 185, 129, 0.1); color: var(--success); }

    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-primary);
        line-height: 1;
    }

    .stat-label {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin-top: 8px;
    }

    .stat-change {
        font-size: 0.75rem;
        padding: 4px 8px;
        border-radius: 6px;
        font-weight: 600;
        margin-top: 8px;
        display: inline-block;
        background: rgba(16, 185, 129, 0.1);
        color: var(--success);
    }

    /* Filters Card */
    .filters-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        padding: 24px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
        margin-bottom: 24px;
    }

    .filters-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .filters-title {
        font-size: 1.125rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--text-primary);
    }

    .filters-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-secondary);
        margin-bottom: 8px;
    }

    .form-input,
    .form-select {
        padding: 10px 14px;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        background: var(--bg-primary);
        color: var(--text-primary);
        font-size: 0.875rem;
        font-family: inherit;
        transition: all 0.2s ease;
    }

    .form-input:focus,
    .form-select:focus {
        outline: none;
        border-color: var(--accent-primary);
        box-shadow: 0 0 0 3px rgba(0, 38, 100, 0.1);
    }

    .btn {
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.875rem;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn-primary {
        background: var(--accent-gradient);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-secondary {
        background: var(--bg-tertiary);
        color: var(--text-secondary);
    }

    .btn-secondary:hover {
        background: var(--border-color);
    }

    /* Table */
    .table-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
        overflow: hidden;
    }

    .table-header {
        padding: 20px 24px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .table-title {
        font-size: 1.125rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--text-primary);
    }

    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: var(--bg-tertiary);
    }

    th {
        padding: 14px 20px;
        text-align: left;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: var(--text-muted);
        border-bottom: 1px solid var(--border-color);
    }

    td {
        padding: 16px 20px;
        font-size: 0.875rem;
        color: var(--text-secondary);
        border-bottom: 1px solid var(--border-color);
    }

    tbody tr {
        transition: background 0.2s ease;
    }

    tbody tr:hover {
        background: var(--bg-tertiary);
    }

    .activity-user {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .activity-avatar {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--accent-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.875rem;
    }

    .activity-user-info h4 {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-primary);
        margin: 0;
    }

    .activity-user-info p {
        font-size: 0.75rem;
        color: var(--text-muted);
        margin: 0;
    }

    .activity-type {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .activity-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .activity-icon.login { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .activity-icon.logout { background: rgba(148, 163, 184, 0.1); color: var(--text-muted); }
    .activity-icon.create { background: rgba(59, 130, 246, 0.1); color: var(--info); }
    .activity-icon.update { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    .activity-icon.delete { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
    .activity-icon.view { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }
    .activity-icon.export { background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue); }
    .activity-icon.validate { background: rgba(16, 185, 129, 0.1); color: var(--success); }

    .badge {
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
        white-space: nowrap;
    }

    .badge.low {
        background: rgba(148, 163, 184, 0.15);
        color: var(--text-muted);
    }

    .badge.medium {
        background: rgba(59, 130, 246, 0.15);
        color: var(--info);
    }

    .badge.high {
        background: rgba(245, 158, 11, 0.15);
        color: var(--warning);
    }

    .badge.critical {
        background: rgba(239, 68, 68, 0.15);
        color: var(--danger);
    }

    .time-ago {
        font-size: 0.75rem;
        color: var(--text-muted);
    }

    .action-btn {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        border: none;
        background: transparent;
        color: var(--text-muted);
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .action-btn:hover {
        background: var(--bg-tertiary);
        color: var(--accent-primary);
    }

    /* Pagination */
    .pagination {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 24px;
        border-top: 1px solid var(--border-color);
    }

    .pagination-info {
        font-size: 0.875rem;
        color: var(--text-muted);
    }

    .pagination-buttons {
        display: flex;
        gap: 8px;
    }

    .pagination-btn {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
        background: var(--bg-secondary);
        color: var(--text-secondary);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        font-weight: 600;
        font-size: 0.875rem;
        text-decoration: none;
    }

    .pagination-btn:hover:not(.disabled) {
        background: var(--accent-primary);
        color: white;
        border-color: var(--accent-primary);
    }

    .pagination-btn.active {
        background: var(--accent-primary);
        color: white;
        border-color: var(--accent-primary);
    }

    .pagination-btn.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: var(--text-muted);
    }

    .empty-state-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
        opacity: 0.5;
    }

    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .filters-grid {
            grid-template-columns: 1fr;
        }

        .table-container {
            overflow-x: scroll;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 474
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 475
        yield "<div class=\"container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1>
            <i data-lucide=\"activity\"></i>
            Historique d'Utilisation
        </h1>
        <p>Traçabilité complète des actions des utilisateurs dans SIGEP Tchad</p>
    </div>

    <!-- Statistics Cards -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon blue\">
                    <i data-lucide=\"activity\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 493, $this->source); })()), "total_activities", [], "any", false, false, false, 493)), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Activités Totales</div>
            <div class=\"stat-change\">
                <i data-lucide=\"trending-up\" style=\"width: 12px; height: 12px;\"></i>
                Système actif
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon gold\">
                    <i data-lucide=\"users\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 507, $this->source); })()), "unique_users", [], "any", false, false, false, 507), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Utilisateurs Actifs</div>
            <div class=\"stat-change\">
                <i data-lucide=\"trending-up\" style=\"width: 12px; height: 12px;\"></i>
                Ce mois
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon green\">
                    <i data-lucide=\"log-in\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 521, $this->source); })()), "total_logins", [], "any", false, false, false, 521), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Connexions</div>
            <div class=\"stat-change\">
                <i data-lucide=\"activity\" style=\"width: 12px; height: 12px;\"></i>
                Total
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon red\">
                    <i data-lucide=\"alert-triangle\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 535, $this->source); })()), "critical_count", [], "any", false, false, false, 535), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Actions Critiques</div>
            <div class=\"stat-change\">
                <i data-lucide=\"shield-check\" style=\"width: 12px; height: 12px;\"></i>
                Monitored
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class=\"filters-card\">
        <div class=\"filters-header\">
            <div class=\"filters-title\">
                <i data-lucide=\"filter\"></i>
                Filtres de Recherche
            </div>
            <a href=\"";
        // line 551
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index");
        yield "\" class=\"btn btn-secondary\">
                <i data-lucide=\"refresh-cw\"></i>
                Réinitialiser
            </a>
        </div>

        <form method=\"get\" action=\"";
        // line 557
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index");
        yield "\">
            <div class=\"filters-grid\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Type d'activité</label>
                    <select class=\"form-select\" name=\"activity_type\">
                        <option value=\"\">Tous les types</option>
                        ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activityTypes"]) || array_key_exists("activityTypes", $context) ? $context["activityTypes"] : (function () { throw new RuntimeError('Variable "activityTypes" does not exist.', 563, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 564
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 564, $this->source); })()), "activity_type", [], "any", false, false, false, 564) == $context["value"])) {
                yield "selected";
            }
            yield ">
                                ";
            // line 565
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 568
        yield "                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Entité</label>
                    <select class=\"form-select\" name=\"entity_type\">
                        <option value=\"\">Toutes les entités</option>
                        ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entityTypes"]) || array_key_exists("entityTypes", $context) ? $context["entityTypes"] : (function () { throw new RuntimeError('Variable "entityTypes" does not exist.', 575, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 576
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 576, $this->source); })()), "entity_type", [], "any", false, false, false, 576) == $context["value"])) {
                yield "selected";
            }
            yield ">
                                ";
            // line 577
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Niveau</label>
                    <select class=\"form-select\" name=\"level\">
                        <option value=\"\">Tous les niveaux</option>
                        <option value=\"low\" ";
        // line 587
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 587, $this->source); })()), "level", [], "any", false, false, false, 587) == "low")) {
            yield "selected";
        }
        yield ">Faible</option>
                        <option value=\"medium\" ";
        // line 588
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 588, $this->source); })()), "level", [], "any", false, false, false, 588) == "medium")) {
            yield "selected";
        }
        yield ">Moyen</option>
                        <option value=\"high\" ";
        // line 589
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 589, $this->source); })()), "level", [], "any", false, false, false, 589) == "high")) {
            yield "selected";
        }
        yield ">Élevé</option>
                        <option value=\"critical\" ";
        // line 590
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 590, $this->source); })()), "level", [], "any", false, false, false, 590) == "critical")) {
            yield "selected";
        }
        yield ">Critique</option>
                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Date début</label>
                    <input type=\"date\" class=\"form-input\" name=\"date_from\" value=\"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 596, $this->source); })()), "date_from", [], "any", false, false, false, 596), "html", null, true);
        yield "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Date fin</label>
                    <input type=\"date\" class=\"form-input\" name=\"date_to\" value=\"";
        // line 601
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 601, $this->source); })()), "date_to", [], "any", false, false, false, 601), "html", null, true);
        yield "\">
                </div>

                <div class=\"form-group\" style=\"align-self: end;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">
                        <i data-lucide=\"search\"></i>
                        Rechercher
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Activities Table -->
    <div class=\"table-card\">
        <div class=\"table-header\">
            <div class=\"table-title\">
                <i data-lucide=\"list\"></i>
                Historique des Activités
                <span style=\"font-weight: normal; font-size: 0.875rem; color: var(--text-muted);\">
                    (";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 621, $this->source); })()), "html", null, true);
        yield " résultats)
                </span>
            </div>
            <div style=\"display: flex; gap: 12px;\">
                <a href=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_export", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 625, $this->source); })())), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                    <i data-lucide=\"download\"></i>
                    Exporter CSV
                </a>
            </div>
        </div>

        ";
        // line 632
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 632, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 633
            yield "        <div class=\"table-container\">
            <table>
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Activité</th>
                        <th>Entité</th>
                        <th>Description</th>
                        <th>Niveau</th>
                        <th>Date/Heure</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 647
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 647, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 648
                yield "                    <tr>
                        <td>
                            <div class=\"activity-user\">
                                <div class=\"activity-avatar\">
                                    ";
                // line 652
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 652), "firstname", [], "any", false, false, false, 652)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 652), "lastname", [], "any", false, false, false, 652)), "html", null, true);
                yield "
                                </div>
                                <div class=\"activity-user-info\">
                                    <h4>";
                // line 655
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 655), "fullName", [], "any", false, false, false, 655), "html", null, true);
                yield "</h4>
                                    <p>";
                // line 656
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 656), "email", [], "any", false, false, false, 656), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class=\"activity-type\">
                                <div class=\"activity-icon ";
                // line 662
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activityType", [], "any", false, false, false, 662), "html", null, true);
                yield "\">
                                    <i data-lucide=\"";
                // line 663
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activityIcon", [], "any", false, false, false, 663), "html", null, true);
                yield "\"></i>
                                </div>
                                <span>";
                // line 665
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activityTypeLabel", [], "any", false, false, false, 665), "html", null, true);
                yield "</span>
                            </div>
                        </td>
                        <td>
                            <span>";
                // line 669
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "entityTypeLabel", [], "any", false, false, false, 669), "html", null, true);
                yield "</span>
                        </td>
                        <td>
                            <span>";
                // line 672
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 672), "html", null, true);
                yield "</span>
                        </td>
                        <td>
                            <span class=\"badge ";
                // line 675
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "level", [], "any", false, false, false, 675), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "levelLabel", [], "any", false, false, false, 675), "html", null, true);
                yield "</span>
                        </td>
                        <td>
                            <span class=\"time-ago\">";
                // line 678
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "timeAgo", [], "any", false, false, false, 678), "html", null, true);
                yield "</span>
                        </td>
                        <td>
                            <a href=\"";
                // line 681
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 681)]), "html", null, true);
                yield "\" 
                               class=\"action-btn\" 
                               title=\"Voir les détails\">
                                <i data-lucide=\"eye\"></i>
                            </a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 689
            yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class=\"pagination\">
            <div class=\"pagination-info\">
                Affichage <strong>";
            // line 696
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 696, $this->source); })()) - 1) * 20) + 1), "html", null, true);
            yield "</strong> à 
                <strong>";
            // line 697
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 697, $this->source); })()) * 20), (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 697, $this->source); })())), "html", null, true);
            yield "</strong> sur 
                <strong>";
            // line 698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 698, $this->source); })()), "html", null, true);
            yield "</strong> activités
            </div>
            <div class=\"pagination-buttons\">
                ";
            // line 701
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 701, $this->source); })()) > 1)) {
                // line 702
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 702, $this->source); })()), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 702, $this->source); })()) - 1)])), "html", null, true);
                yield "\" 
                       class=\"pagination-btn\">
                        <i data-lucide=\"chevron-left\"></i>
                    </a>
                ";
            } else {
                // line 707
                yield "                    <span class=\"pagination-btn disabled\">
                        <i data-lucide=\"chevron-left\"></i>
                    </span>
                ";
            }
            // line 711
            yield "
                ";
            // line 712
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(max(1, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 712, $this->source); })()) - 2)), min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 712, $this->source); })()), ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 712, $this->source); })()) + 2))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 713
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 713, $this->source); })()), ["page" => $context["p"]])), "html", null, true);
                yield "\" 
                       class=\"pagination-btn ";
                // line 714
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 714, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                        ";
                // line 715
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 718
            yield "
                ";
            // line 719
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 719, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 719, $this->source); })()))) {
                // line 720
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 720, $this->source); })()), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 720, $this->source); })()) + 1)])), "html", null, true);
                yield "\" 
                       class=\"pagination-btn\">
                        <i data-lucide=\"chevron-right\"></i>
                    </a>
                ";
            } else {
                // line 725
                yield "                    <span class=\"pagination-btn disabled\">
                        <i data-lucide=\"chevron-right\"></i>
                    </span>
                ";
            }
            // line 729
            yield "            </div>
        </div>
        ";
        } else {
            // line 732
            yield "        <div class=\"empty-state\">
            <div class=\"empty-state-icon\">
                <i data-lucide=\"inbox\"></i>
            </div>
            <h3>Aucune activité trouvée</h3>
            <p>Essayez de modifier vos filtres de recherche</p>
        </div>
        ";
        }
        // line 740
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 744
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 745
        yield "<script src=\"https://unpkg.com/lucide@latest\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "activity/index.html.twig";
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
        return array (  1043 => 745,  1033 => 744,  1023 => 740,  1013 => 732,  1008 => 729,  1002 => 725,  993 => 720,  991 => 719,  988 => 718,  979 => 715,  973 => 714,  968 => 713,  964 => 712,  961 => 711,  955 => 707,  946 => 702,  944 => 701,  938 => 698,  934 => 697,  930 => 696,  921 => 689,  907 => 681,  901 => 678,  893 => 675,  887 => 672,  881 => 669,  874 => 665,  869 => 663,  865 => 662,  856 => 656,  852 => 655,  845 => 652,  839 => 648,  835 => 647,  819 => 633,  817 => 632,  807 => 625,  800 => 621,  777 => 601,  769 => 596,  758 => 590,  752 => 589,  746 => 588,  740 => 587,  731 => 580,  722 => 577,  713 => 576,  709 => 575,  700 => 568,  691 => 565,  682 => 564,  678 => 563,  669 => 557,  660 => 551,  641 => 535,  624 => 521,  607 => 507,  590 => 493,  570 => 475,  560 => 474,  87 => 7,  77 => 6,  60 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/activity/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Historique d'Utilisation - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<style>
    :root {
        --bg-primary: #f0f4f8;
        --bg-secondary: #ffffff;
        --bg-tertiary: #e8eef4;
        --text-primary: #1a2a3a;
        --text-secondary: #4a5e73;
        --text-muted: #7a8fa3;
        --border-color: #d0dbe6;
        
        --tchad-blue: #002664;
        --tchad-gold: #fecb00;
        --tchad-red: #c60c30;
        
        --accent-primary: #002664;
        --accent-gradient: linear-gradient(135deg, #002664 0%, #1a4a8a 50%, #2a5a9a 100%);
        
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #3b82f6;
        
        --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    }

    .page-header {
        background: var(--accent-gradient);
        color: white;
        padding: 2rem;
        border-radius: 16px;
        margin-bottom: 2rem;
        box-shadow: var(--shadow-lg);
    }

    .page-header h1 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .page-header p {
        opacity: 0.9;
        font-size: 1rem;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin-bottom: 24px;
    }

    .stat-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        padding: 24px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

    .stat-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 16px;
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .stat-icon.blue { background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue); }
    .stat-icon.gold { background: rgba(254, 203, 0, 0.1); color: #b8860b; }
    .stat-icon.red { background: rgba(198, 12, 48, 0.1); color: var(--tchad-red); }
    .stat-icon.green { background: rgba(16, 185, 129, 0.1); color: var(--success); }

    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-primary);
        line-height: 1;
    }

    .stat-label {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin-top: 8px;
    }

    .stat-change {
        font-size: 0.75rem;
        padding: 4px 8px;
        border-radius: 6px;
        font-weight: 600;
        margin-top: 8px;
        display: inline-block;
        background: rgba(16, 185, 129, 0.1);
        color: var(--success);
    }

    /* Filters Card */
    .filters-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        padding: 24px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
        margin-bottom: 24px;
    }

    .filters-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .filters-title {
        font-size: 1.125rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--text-primary);
    }

    .filters-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-secondary);
        margin-bottom: 8px;
    }

    .form-input,
    .form-select {
        padding: 10px 14px;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        background: var(--bg-primary);
        color: var(--text-primary);
        font-size: 0.875rem;
        font-family: inherit;
        transition: all 0.2s ease;
    }

    .form-input:focus,
    .form-select:focus {
        outline: none;
        border-color: var(--accent-primary);
        box-shadow: 0 0 0 3px rgba(0, 38, 100, 0.1);
    }

    .btn {
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.875rem;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn-primary {
        background: var(--accent-gradient);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-secondary {
        background: var(--bg-tertiary);
        color: var(--text-secondary);
    }

    .btn-secondary:hover {
        background: var(--border-color);
    }

    /* Table */
    .table-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
        overflow: hidden;
    }

    .table-header {
        padding: 20px 24px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .table-title {
        font-size: 1.125rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--text-primary);
    }

    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: var(--bg-tertiary);
    }

    th {
        padding: 14px 20px;
        text-align: left;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: var(--text-muted);
        border-bottom: 1px solid var(--border-color);
    }

    td {
        padding: 16px 20px;
        font-size: 0.875rem;
        color: var(--text-secondary);
        border-bottom: 1px solid var(--border-color);
    }

    tbody tr {
        transition: background 0.2s ease;
    }

    tbody tr:hover {
        background: var(--bg-tertiary);
    }

    .activity-user {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .activity-avatar {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--accent-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.875rem;
    }

    .activity-user-info h4 {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-primary);
        margin: 0;
    }

    .activity-user-info p {
        font-size: 0.75rem;
        color: var(--text-muted);
        margin: 0;
    }

    .activity-type {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .activity-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .activity-icon.login { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .activity-icon.logout { background: rgba(148, 163, 184, 0.1); color: var(--text-muted); }
    .activity-icon.create { background: rgba(59, 130, 246, 0.1); color: var(--info); }
    .activity-icon.update { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    .activity-icon.delete { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
    .activity-icon.view { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }
    .activity-icon.export { background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue); }
    .activity-icon.validate { background: rgba(16, 185, 129, 0.1); color: var(--success); }

    .badge {
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
        white-space: nowrap;
    }

    .badge.low {
        background: rgba(148, 163, 184, 0.15);
        color: var(--text-muted);
    }

    .badge.medium {
        background: rgba(59, 130, 246, 0.15);
        color: var(--info);
    }

    .badge.high {
        background: rgba(245, 158, 11, 0.15);
        color: var(--warning);
    }

    .badge.critical {
        background: rgba(239, 68, 68, 0.15);
        color: var(--danger);
    }

    .time-ago {
        font-size: 0.75rem;
        color: var(--text-muted);
    }

    .action-btn {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        border: none;
        background: transparent;
        color: var(--text-muted);
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .action-btn:hover {
        background: var(--bg-tertiary);
        color: var(--accent-primary);
    }

    /* Pagination */
    .pagination {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 24px;
        border-top: 1px solid var(--border-color);
    }

    .pagination-info {
        font-size: 0.875rem;
        color: var(--text-muted);
    }

    .pagination-buttons {
        display: flex;
        gap: 8px;
    }

    .pagination-btn {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
        background: var(--bg-secondary);
        color: var(--text-secondary);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        font-weight: 600;
        font-size: 0.875rem;
        text-decoration: none;
    }

    .pagination-btn:hover:not(.disabled) {
        background: var(--accent-primary);
        color: white;
        border-color: var(--accent-primary);
    }

    .pagination-btn.active {
        background: var(--accent-primary);
        color: white;
        border-color: var(--accent-primary);
    }

    .pagination-btn.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: var(--text-muted);
    }

    .empty-state-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
        opacity: 0.5;
    }

    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .filters-grid {
            grid-template-columns: 1fr;
        }

        .table-container {
            overflow-x: scroll;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1>
            <i data-lucide=\"activity\"></i>
            Historique d'Utilisation
        </h1>
        <p>Traçabilité complète des actions des utilisateurs dans SIGEP Tchad</p>
    </div>

    <!-- Statistics Cards -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon blue\">
                    <i data-lucide=\"activity\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ globalStats.total_activities|number_format }}</div>
            <div class=\"stat-label\">Activités Totales</div>
            <div class=\"stat-change\">
                <i data-lucide=\"trending-up\" style=\"width: 12px; height: 12px;\"></i>
                Système actif
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon gold\">
                    <i data-lucide=\"users\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ globalStats.unique_users }}</div>
            <div class=\"stat-label\">Utilisateurs Actifs</div>
            <div class=\"stat-change\">
                <i data-lucide=\"trending-up\" style=\"width: 12px; height: 12px;\"></i>
                Ce mois
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon green\">
                    <i data-lucide=\"log-in\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ globalStats.total_logins }}</div>
            <div class=\"stat-label\">Connexions</div>
            <div class=\"stat-change\">
                <i data-lucide=\"activity\" style=\"width: 12px; height: 12px;\"></i>
                Total
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon red\">
                    <i data-lucide=\"alert-triangle\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ globalStats.critical_count }}</div>
            <div class=\"stat-label\">Actions Critiques</div>
            <div class=\"stat-change\">
                <i data-lucide=\"shield-check\" style=\"width: 12px; height: 12px;\"></i>
                Monitored
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class=\"filters-card\">
        <div class=\"filters-header\">
            <div class=\"filters-title\">
                <i data-lucide=\"filter\"></i>
                Filtres de Recherche
            </div>
            <a href=\"{{ path('app_activity_index') }}\" class=\"btn btn-secondary\">
                <i data-lucide=\"refresh-cw\"></i>
                Réinitialiser
            </a>
        </div>

        <form method=\"get\" action=\"{{ path('app_activity_index') }}\">
            <div class=\"filters-grid\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Type d'activité</label>
                    <select class=\"form-select\" name=\"activity_type\">
                        <option value=\"\">Tous les types</option>
                        {% for label, value in activityTypes %}
                            <option value=\"{{ value }}\" {% if filters.activity_type == value %}selected{% endif %}>
                                {{ label }}
                            </option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Entité</label>
                    <select class=\"form-select\" name=\"entity_type\">
                        <option value=\"\">Toutes les entités</option>
                        {% for label, value in entityTypes %}
                            <option value=\"{{ value }}\" {% if filters.entity_type == value %}selected{% endif %}>
                                {{ label }}
                            </option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Niveau</label>
                    <select class=\"form-select\" name=\"level\">
                        <option value=\"\">Tous les niveaux</option>
                        <option value=\"low\" {% if filters.level == 'low' %}selected{% endif %}>Faible</option>
                        <option value=\"medium\" {% if filters.level == 'medium' %}selected{% endif %}>Moyen</option>
                        <option value=\"high\" {% if filters.level == 'high' %}selected{% endif %}>Élevé</option>
                        <option value=\"critical\" {% if filters.level == 'critical' %}selected{% endif %}>Critique</option>
                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Date début</label>
                    <input type=\"date\" class=\"form-input\" name=\"date_from\" value=\"{{ filters.date_from }}\">
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Date fin</label>
                    <input type=\"date\" class=\"form-input\" name=\"date_to\" value=\"{{ filters.date_to }}\">
                </div>

                <div class=\"form-group\" style=\"align-self: end;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">
                        <i data-lucide=\"search\"></i>
                        Rechercher
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Activities Table -->
    <div class=\"table-card\">
        <div class=\"table-header\">
            <div class=\"table-title\">
                <i data-lucide=\"list\"></i>
                Historique des Activités
                <span style=\"font-weight: normal; font-size: 0.875rem; color: var(--text-muted);\">
                    ({{ totalCount }} résultats)
                </span>
            </div>
            <div style=\"display: flex; gap: 12px;\">
                <a href=\"{{ path('app_activity_export', filters) }}\" class=\"btn btn-secondary\">
                    <i data-lucide=\"download\"></i>
                    Exporter CSV
                </a>
            </div>
        </div>

        {% if activities is not empty %}
        <div class=\"table-container\">
            <table>
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Activité</th>
                        <th>Entité</th>
                        <th>Description</th>
                        <th>Niveau</th>
                        <th>Date/Heure</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for activity in activities %}
                    <tr>
                        <td>
                            <div class=\"activity-user\">
                                <div class=\"activity-avatar\">
                                    {{ activity.user.firstname|first }}{{ activity.user.lastname|first }}
                                </div>
                                <div class=\"activity-user-info\">
                                    <h4>{{ activity.user.fullName }}</h4>
                                    <p>{{ activity.user.email }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class=\"activity-type\">
                                <div class=\"activity-icon {{ activity.activityType }}\">
                                    <i data-lucide=\"{{ activity.activityIcon }}\"></i>
                                </div>
                                <span>{{ activity.activityTypeLabel }}</span>
                            </div>
                        </td>
                        <td>
                            <span>{{ activity.entityTypeLabel }}</span>
                        </td>
                        <td>
                            <span>{{ activity.description }}</span>
                        </td>
                        <td>
                            <span class=\"badge {{ activity.level }}\">{{ activity.levelLabel }}</span>
                        </td>
                        <td>
                            <span class=\"time-ago\">{{ activity.timeAgo }}</span>
                        </td>
                        <td>
                            <a href=\"{{ path('app_activity_show', {id: activity.id}) }}\" 
                               class=\"action-btn\" 
                               title=\"Voir les détails\">
                                <i data-lucide=\"eye\"></i>
                            </a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class=\"pagination\">
            <div class=\"pagination-info\">
                Affichage <strong>{{ ((page - 1) * 20) + 1 }}</strong> à 
                <strong>{{ min(page * 20, totalCount) }}</strong> sur 
                <strong>{{ totalCount }}</strong> activités
            </div>
            <div class=\"pagination-buttons\">
                {% if page > 1 %}
                    <a href=\"{{ path('app_activity_index', filters|merge({page: page - 1})) }}\" 
                       class=\"pagination-btn\">
                        <i data-lucide=\"chevron-left\"></i>
                    </a>
                {% else %}
                    <span class=\"pagination-btn disabled\">
                        <i data-lucide=\"chevron-left\"></i>
                    </span>
                {% endif %}

                {% for p in range(max(1, page - 2), min(totalPages, page + 2)) %}
                    <a href=\"{{ path('app_activity_index', filters|merge({page: p})) }}\" 
                       class=\"pagination-btn {% if p == page %}active{% endif %}\">
                        {{ p }}
                    </a>
                {% endfor %}

                {% if page < totalPages %}
                    <a href=\"{{ path('app_activity_index', filters|merge({page: page + 1})) }}\" 
                       class=\"pagination-btn\">
                        <i data-lucide=\"chevron-right\"></i>
                    </a>
                {% else %}
                    <span class=\"pagination-btn disabled\">
                        <i data-lucide=\"chevron-right\"></i>
                    </span>
                {% endif %}
            </div>
        </div>
        {% else %}
        <div class=\"empty-state\">
            <div class=\"empty-state-icon\">
                <i data-lucide=\"inbox\"></i>
            </div>
            <h3>Aucune activité trouvée</h3>
            <p>Essayez de modifier vos filtres de recherche</p>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://unpkg.com/lucide@latest\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
    });
</script>
{% endblock %}
", "activity/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\activity\\index.html.twig");
    }
}
