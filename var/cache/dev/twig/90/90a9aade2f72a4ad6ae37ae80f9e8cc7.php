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
class __TwigTemplate_12c0256c48672209bcf4ef94db1de30b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tableau de Bord - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    /* ===== Variables et Base ===== */
    :root {
        --primary: #002664;
        --primary-light: #003399;
        --gold: #FECB00;
        --gold-dark: #D4A800;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #c60c30;
        --info: #3b82f6;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-300: #d1d5db;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-600: #4b5563;
        --gray-700: #374151;
        --gray-800: #1f2937;
        --gray-900: #111827;
        --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    }

    /* ===== Page Header ===== */
    .page-header {
        margin-bottom: 2rem;
    }
    .page-header h2 {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--gray-900);
        margin-bottom: 0.5rem;
    }
    .page-header-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: 12px;
        color: white;
    }
    .page-header p {
        color: var(--gray-500);
        margin: 0;
        font-size: 0.95rem;
    }

    /* ===== Stats Grid ===== */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    @media (max-width: 1200px) {
        .stats-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
        .stats-grid { grid-template-columns: 1fr; }
    }

    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid var(--gray-100);
    }
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--card-accent, var(--primary));
    }
    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-lg);
    }

    .stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .stat-icon.blue { background: linear-gradient(135deg, #002664, #003399); color: white; }
    .stat-icon.gold { background: linear-gradient(135deg, #FECB00, #FFD633); color: #002664; }
    .stat-icon.green { background: linear-gradient(135deg, #059669, #10b981); color: white; }
    .stat-icon.red { background: linear-gradient(135deg, #c60c30, #ef4444); color: white; }
    .stat-icon.purple { background: linear-gradient(135deg, #7c3aed, #8b5cf6); color: white; }

    .stat-content h3 {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--gray-900);
        margin: 0 0 0.25rem;
        line-height: 1.2;
    }
    .stat-content p {
        color: var(--gray-500);
        margin: 0 0 0.5rem;
        font-size: 0.9rem;
    }
    .stat-trend {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 0.25rem 0.5rem;
        border-radius: 6px;
    }
    .stat-trend.up { color: var(--success); background: rgba(16, 185, 129, 0.1); }
    .stat-trend.down { color: var(--danger); background: rgba(198, 12, 48, 0.1); }
    .stat-trend.neutral { color: var(--gray-500); background: var(--gray-100); }

    /* ===== Cards ===== */
    .card {
        background: white;
        border-radius: 16px;
        box-shadow: var(--shadow-md);
        border: 1px solid var(--gray-100);
        overflow: hidden;
    }
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid var(--gray-100);
        background: var(--gray-50);
    }
    .card-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1rem;
        font-weight: 600;
        color: var(--gray-800);
        margin: 0;
    }
    .card-title i { color: var(--primary); }
    .card-actions { display: flex; gap: 0.5rem; }
    .card-body { padding: 1.5rem; }

    /* ===== Grid Layouts ===== */
    .grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; }
    .grid-3 { display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem; margin-bottom: 2rem; }
    @media (max-width: 1024px) {
        .grid-2, .grid-3 { grid-template-columns: 1fr; }
    }

    /* ===== Buttons ===== */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
        border: none;
        text-decoration: none;
    }
    .btn-sm { padding: 0.375rem 0.75rem; font-size: 0.8rem; }
    .btn-primary { background: var(--primary); color: white; }
    .btn-primary:hover { background: var(--primary-light); }
    .btn-secondary { background: var(--gray-100); color: var(--gray-700); border: 1px solid var(--gray-200); }
    .btn-secondary:hover { background: var(--gray-200); }
    .btn-gold { background: var(--gold); color: var(--primary); }
    .btn-gold:hover { background: var(--gold-dark); }

    /* ===== Data Table ===== */
    .data-table {
        width: 100%;
        border-collapse: collapse;
    }
    .data-table th {
        text-align: left;
        padding: 1rem 1.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--gray-500);
        background: var(--gray-50);
        border-bottom: 1px solid var(--gray-200);
    }
    .data-table td {
        padding: 1rem 1.25rem;
        border-bottom: 1px solid var(--gray-100);
        font-size: 0.9rem;
        color: var(--gray-700);
    }
    .data-table tbody tr:hover { background: var(--gray-50); }
    .data-table tbody tr:last-child td { border-bottom: none; }

    /* ===== Progress Bar ===== */
    .progress-container { display: flex; align-items: center; gap: 0.75rem; }
    .progress-bar {
        flex: 1;
        height: 8px;
        background: var(--gray-200);
        border-radius: 4px;
        overflow: hidden;
    }
    .progress-fill {
        height: 100%;
        border-radius: 4px;
        transition: width 0.5s ease;
    }
    .progress-fill.blue { background: linear-gradient(90deg, var(--primary), var(--primary-light)); }
    .progress-fill.green { background: linear-gradient(90deg, #059669, var(--success)); }
    .progress-fill.gold { background: linear-gradient(90deg, var(--gold-dark), var(--gold)); }
    .progress-fill.red { background: linear-gradient(90deg, #b91c1c, var(--danger)); }
    .progress-text { font-size: 0.8rem; font-weight: 600; color: var(--gray-600); min-width: 40px; }

    /* ===== Status Badge ===== */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.375rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: currentColor;
    }
    .status-badge.success { background: rgba(16, 185, 129, 0.1); color: #059669; }
    .status-badge.warning { background: rgba(245, 158, 11, 0.1); color: #d97706; }
    .status-badge.danger { background: rgba(198, 12, 48, 0.1); color: #c60c30; }
    .status-badge.info { background: rgba(0, 38, 100, 0.1); color: #002664; }
    .status-badge.secondary { background: var(--gray-100); color: var(--gray-600); }

    /* ===== Activity List ===== */
    .activity-list { list-style: none; padding: 0; margin: 0; }
    .activity-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem 0;
        border-bottom: 1px solid var(--gray-100);
    }
    .activity-item:last-child { border-bottom: none; }
    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .activity-icon.green { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .activity-icon.blue { background: rgba(0, 38, 100, 0.1); color: var(--primary); }
    .activity-icon.gold { background: rgba(254, 203, 0, 0.15); color: #b8860b; }
    .activity-icon.red { background: rgba(198, 12, 48, 0.1); color: var(--danger); }
    .activity-content { flex: 1; min-width: 0; }
    .activity-content h5 { margin: 0 0 0.25rem; font-size: 0.9rem; font-weight: 600; color: var(--gray-800); }
    .activity-content p { margin: 0; font-size: 0.8rem; color: var(--gray-500); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .activity-time { font-size: 0.75rem; color: var(--gray-400); white-space: nowrap; }

    /* ===== Quick Stats ===== */
    .quick-stat {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--gray-100);
    }
    .quick-stat:last-child { border-bottom: none; }
    .quick-stat-label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: var(--gray-600);
    }
    .quick-stat-value { font-weight: 700; color: var(--gray-800); }

    /* ===== Chart Container ===== */
    .chart-container {
        position: relative;
        height: 300px;
        width: 100%;
    }

    /* ===== Sector Badge ===== */
    .sector-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.25rem 0.5rem;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    .sector-badge.infrastructure { background: rgba(0, 38, 100, 0.1); color: #002664; }
    .sector-badge.sante { background: rgba(16, 185, 129, 0.1); color: #059669; }
    .sector-badge.energie { background: rgba(254, 203, 0, 0.15); color: #b8860b; }
    .sector-badge.agriculture { background: rgba(34, 197, 94, 0.1); color: #16a34a; }
    .sector-badge.education { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
    .sector-badge.eau { background: rgba(6, 182, 212, 0.1); color: #0891b2; }

    /* ===== Animations ===== */
    .animate-in {
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
        transform: translateY(20px);
    }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }

    @keyframes slideIn {
        to { opacity: 1; transform: translateY(0); }
    }

    /* ===== Priority Badge ===== */
    .priority-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.7rem;
        font-weight: 600;
        padding: 0.2rem 0.4rem;
        border-radius: 4px;
    }
    .priority-badge.haute { background: rgba(198, 12, 48, 0.1); color: #c60c30; }
    .priority-badge.moyenne { background: rgba(245, 158, 11, 0.1); color: #d97706; }
    .priority-badge.normale { background: var(--gray-100); color: var(--gray-600); }

    /* ===== Empty State ===== */
    .empty-state {
        text-align: center;
        padding: 3rem 1.5rem;
        color: var(--gray-500);
    }
    .empty-state i { font-size: 3rem; margin-bottom: 1rem; opacity: 0.3; }
    .empty-state p { margin: 0; }

    /* ===== KPI Mini Cards ===== */
    .kpi-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
    .kpi-mini {
        background: var(--gray-50);
        padding: 1rem;
        border-radius: 10px;
        text-align: center;
    }
    .kpi-mini-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary);
    }
    .kpi-mini-label {
        font-size: 0.75rem;
        color: var(--gray-500);
        margin-top: 0.25rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 401
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 402
        yield "<div class=\"page-header animate-in\">
    <h2>
        <span class=\"page-header-icon\">
            <i data-lucide=\"layout-dashboard\"></i>
        </span>
        Tableau de bord
    </h2>
    <p>Vue d'ensemble des projets publics - ";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 409, $this->source); })()), "F Y")), "html", null, true);
        yield "</p>
</div>

<!-- Stats Grid -->
<div class=\"stats-grid\">
    <div class=\"stat-card animate-in\" style=\"--card-accent: #002664;\">
        <div class=\"stat-icon blue\">
            <i data-lucide=\"briefcase\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 419, $this->source); })()), "projectsActifs", [], "any", false, false, false, 419), "html", null, true);
        yield "</h3>
            <p>Projets actifs</p>
            <div class=\"stat-trend ";
        // line 421
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 421, $this->source); })()), "projectsCeMois", [], "any", false, false, false, 421) > 0)) {
            yield "up";
        } else {
            yield "neutral";
        }
        yield "\">
                <i data-lucide=\"";
        // line 422
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 422, $this->source); })()), "projectsCeMois", [], "any", false, false, false, 422) > 0)) {
            yield "trending-up";
        } else {
            yield "minus";
        }
        yield "\" style=\"width: 14px; height: 14px;\"></i>
                ";
        // line 423
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 423, $this->source); })()), "projectsCeMois", [], "any", false, false, false, 423) > 0)) {
            yield "+";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 423, $this->source); })()), "projectsCeMois", [], "any", false, false, false, 423), "html", null, true);
            yield " ce mois";
        } else {
            yield "Aucun ce mois";
        }
        // line 424
        yield "            </div>
        </div>
    </div>

    <div class=\"stat-card animate-in delay-1\" style=\"--card-accent: #fecb00;\">
        <div class=\"stat-icon gold\">
            <i data-lucide=\"coins\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 433, $this->source); })()), "budgetTotal", [], "any", false, false, false, 433) / 1000000000), 1, ",", " "), "html", null, true);
        yield " Mds</h3>
            <p>Budget total (FCFA)</p>
            <div class=\"stat-trend up\">
                <i data-lucide=\"banknote\" style=\"width: 14px; height: 14px;\"></i>
                ";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 437, $this->source); })()), "totalFinancements", [], "any", false, false, false, 437), "html", null, true);
        yield " financements
            </div>
        </div>
    </div>

    <div class=\"stat-card animate-in delay-2\" style=\"--card-accent: #10b981;\">
        <div class=\"stat-icon green\">
            <i data-lucide=\"check-circle\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 447, $this->source); })()), "tauxExecution", [], "any", false, false, false, 447), "html", null, true);
        yield "%</h3>
            <p>Taux d'exécution</p>
            <div class=\"stat-trend ";
        // line 449
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 449, $this->source); })()), "tauxExecution", [], "any", false, false, false, 449) >= 50)) {
            yield "up";
        } else {
            yield "down";
        }
        yield "\">
                <i data-lucide=\"";
        // line 450
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 450, $this->source); })()), "tauxExecution", [], "any", false, false, false, 450) >= 50)) {
            yield "trending-up";
        } else {
            yield "trending-down";
        }
        yield "\" style=\"width: 14px; height: 14px;\"></i>
                ";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 451, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 451) / 1000000000), 1, ",", " "), "html", null, true);
        yield " Mds décaissés
            </div>
        </div>
    </div>

    <div class=\"stat-card animate-in delay-3\" style=\"--card-accent: #c60c30;\">
        <div class=\"stat-icon red\">
            <i data-lucide=\"alert-triangle\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 461, $this->source); })()), "projectsEnRetard", [], "any", false, false, false, 461), "html", null, true);
        yield "</h3>
            <p>Projets en retard</p>
            <div class=\"stat-trend ";
        // line 463
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 463, $this->source); })()), "projectsEnRetard", [], "any", false, false, false, 463) > 0)) {
            yield "down";
        } else {
            yield "up";
        }
        yield "\">
                <i data-lucide=\"";
        // line 464
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 464, $this->source); })()), "projectsEnRetard", [], "any", false, false, false, 464) > 0)) {
            yield "alert-circle";
        } else {
            yield "check";
        }
        yield "\" style=\"width: 14px; height: 14px;\"></i>
                ";
        // line 465
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 465, $this->source); })()), "projectsEnRetard", [], "any", false, false, false, 465) > 0)) {
            yield "À surveiller";
        } else {
            yield "Tout va bien";
        }
        // line 466
        yield "            </div>
        </div>
    </div>
</div>

<!-- Charts & Projects -->
<div class=\"grid-3\">
    <div>
        <!-- Budget Chart -->
        <div class=\"card animate-in delay-2\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"bar-chart-3\"></i>
                    Exécution budgétaire par secteur
                </h3>
                <div class=\"card-actions\">
                    <button class=\"btn btn-secondary btn-sm\" onclick=\"exportChart()\">
                        <i data-lucide=\"download\" style=\"width: 14px; height: 14px;\"></i>
                        Exporter
                    </button>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"chart-container\">
                    <canvas id=\"budgetChart\"></canvas>
                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class=\"card animate-in delay-3\" style=\"margin-top: 1.5rem;\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"folder-open\"></i>
                    Projets récents
                </h3>
                <div class=\"card-actions\">
                    <a href=\"";
        // line 503
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"btn btn-secondary btn-sm\">
                        Voir tout
                        <i data-lucide=\"arrow-right\" style=\"width: 14px; height: 14px;\"></i>
                    </a>
                    <a href=\"";
        // line 507
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_new");
        yield "\" class=\"btn btn-primary btn-sm\">
                        <i data-lucide=\"plus\" style=\"width: 14px; height: 14px;\"></i>
                        Nouveau
                    </a>
                </div>
            </div>
            <div class=\"card-body\" style=\"padding: 0;\">
                ";
        // line 514
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recentProjects"]) || array_key_exists("recentProjects", $context) ? $context["recentProjects"] : (function () { throw new RuntimeError('Variable "recentProjects" does not exist.', 514, $this->source); })())) > 0)) {
            // line 515
            yield "                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Projet</th>
                            <th>Secteur</th>
                            <th>Budget</th>
                            <th>Progression</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 526
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recentProjects"]) || array_key_exists("recentProjects", $context) ? $context["recentProjects"] : (function () { throw new RuntimeError('Variable "recentProjects" does not exist.', 526, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 527
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 529)]), "html", null, true);
                yield "\" style=\"text-decoration: none; color: inherit;\">
                                    <strong>";
                // line 530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 530), "html", null, true);
                yield "</strong>
                                    ";
                // line 531
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "priorite", [], "any", false, false, false, 531) == "haute")) {
                    // line 532
                    yield "                                    <span class=\"priority-badge haute\" style=\"margin-left: 0.5rem;\">
                                        <i data-lucide=\"alert-circle\" style=\"width: 10px; height: 10px;\"></i>
                                        Prioritaire
                                    </span>
                                    ";
                }
                // line 537
                yield "                                </a>
                            </td>
                            <td>
                                <span class=\"sector-badge ";
                // line 540
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sector", [], "any", false, false, false, 540), "html", null, true);
                yield "\">
                                    <i data-lucide=\"";
                // line 541
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sectorIcon", [], "any", false, false, false, 541), "html", null, true);
                yield "\" style=\"width: 12px; height: 12px;\"></i>
                                    ";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "sectorLabel", [], "any", false, false, false, 542), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td>
                                ";
                // line 546
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 546)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 547
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "budgetTotal", [], "any", false, false, false, 547) / 1000000000), 2, ",", " "), "html", null, true);
                    yield " Mds
                                ";
                } else {
                    // line 549
                    yield "                                    <span style=\"color: var(--gray-400);\">Non défini</span>
                                ";
                }
                // line 551
                yield "                            </td>
                            <td>
                                <div class=\"progress-container\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill ";
                // line 555
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 555) >= 75)) {
                    yield "green";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 555) >= 50)) {
                    yield "blue";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 555) >= 25)) {
                    yield "gold";
                } else {
                    yield "red";
                }
                yield "\" 
                                             style=\"width: ";
                // line 556
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 556), "html", null, true);
                yield "%\"></div>
                                    </div>
                                    <span class=\"progress-text\">";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 558), "html", null, true);
                yield "%</span>
                                </div>
                            </td>
                            <td>
                                ";
                // line 562
                $context["statusClass"] = ["planifie" => "secondary", "en-cours" => "info", "en-retard" => "danger", "termine" => "success", "suspendu" => "warning"];
                // line 569
                yield "                                <span class=\"status-badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusClass"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 569), [], "array", true, true, false, 569) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 569, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 569), [], "array", false, false, false, 569)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 569, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 569), [], "array", false, false, false, 569), "html", null, true)) : ("secondary"));
                yield "\">
                                    <span class=\"status-dot\"></span>
                                    ";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "statusLabel", [], "any", false, false, false, 571), "html", null, true);
                yield "
                                </span>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 576
            yield "                    </tbody>
                </table>
                ";
        } else {
            // line 579
            yield "                <div class=\"empty-state\">
                    <i data-lucide=\"folder-x\"></i>
                    <p>Aucun projet enregistré</p>
                    <a href=\"";
            // line 582
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_new");
            yield "\" class=\"btn btn-primary\" style=\"margin-top: 1rem;\">
                        <i data-lucide=\"plus\" style=\"width: 16px; height: 16px;\"></i>
                        Créer un projet
                    </a>
                </div>
                ";
        }
        // line 588
        yield "            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div>
        <!-- Activity Feed -->
        <div class=\"card animate-in delay-2\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"activity\"></i>
                    Activité récente
                </h3>
            </div>
            <div class=\"card-body\">
                ";
        // line 603
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activitesRecentes"]) || array_key_exists("activitesRecentes", $context) ? $context["activitesRecentes"] : (function () { throw new RuntimeError('Variable "activitesRecentes" does not exist.', 603, $this->source); })())) > 0)) {
            // line 604
            yield "                <ul class=\"activity-list\">
                    ";
            // line 605
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activitesRecentes"]) || array_key_exists("activitesRecentes", $context) ? $context["activitesRecentes"] : (function () { throw new RuntimeError('Variable "activitesRecentes" does not exist.', 605, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                // line 606
                yield "                    <li class=\"activity-item\">
                        <div class=\"activity-icon ";
                // line 607
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "iconClass", [], "any", false, false, false, 607), "html", null, true);
                yield "\">
                            <i data-lucide=\"";
                // line 608
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "icon", [], "any", false, false, false, 608), "html", null, true);
                yield "\" style=\"width: 18px; height: 18px;\"></i>
                        </div>
                        <div class=\"activity-content\">
                            <h5>";
                // line 611
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "title", [], "any", false, false, false, 611), "html", null, true);
                yield "</h5>
                            <p>";
                // line 612
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 612), "html", null, true);
                yield "</p>
                        </div>
                        <span class=\"activity-time\">
                            ";
                // line 615
                $context["diff"] = $this->extensions['Twig\Extension\CoreExtension']->modifyDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(), "-1 day");
                // line 616
                yield "                            ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 616), "Y-m-d") == $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"))) {
                    // line 617
                    yield "                                Aujourd'hui
                            ";
                } elseif (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,                 // line 618
$context["activite"], "date", [], "any", false, false, false, 618), "Y-m-d") == $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 618, $this->source); })()), "Y-m-d"))) {
                    // line 619
                    yield "                                Hier
                            ";
                } else {
                    // line 621
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 621), "d/m"), "html", null, true);
                    yield "
                            ";
                }
                // line 623
                yield "                        </span>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['activite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 626
            yield "                </ul>
                ";
        } else {
            // line 628
            yield "                <div class=\"empty-state\" style=\"padding: 2rem;\">
                    <i data-lucide=\"inbox\"></i>
                    <p>Aucune activité récente</p>
                </div>
                ";
        }
        // line 633
        yield "            </div>
        </div>

        <!-- Quick Stats - Répartition par secteur -->
        <div class=\"card animate-in delay-3\" style=\"margin-top: 1.5rem;\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"pie-chart\"></i>
                    Répartition par secteur
                </h3>
            </div>
            <div class=\"card-body\">
                ";
        // line 645
        $context["sectorColors"] = ["infrastructure" => "#002664", "sante" => "#10b981", "energie" => "#FECB00", "agriculture" => "#22c55e", "education" => "#3b82f6", "eau" => "#06b6d4"];
        // line 653
        yield "                ";
        $context["sectorLabels"] = ["infrastructure" => "Infrastructure", "sante" => "Santé", "energie" => "Énergie", "agriculture" => "Agriculture", "education" => "Éducation", "eau" => "Eau & Assainissement"];
        // line 661
        yield "                ";
        $context["totalBudget"] = 0;
        // line 662
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorsData"]) || array_key_exists("sectorsData", $context) ? $context["sectorsData"] : (function () { throw new RuntimeError('Variable "sectorsData" does not exist.', 662, $this->source); })()));
        foreach ($context['_seq'] as $context["sector"] => $context["data"]) {
            // line 663
            yield "                    ";
            $context["totalBudget"] = ((isset($context["totalBudget"]) || array_key_exists("totalBudget", $context) ? $context["totalBudget"] : (function () { throw new RuntimeError('Variable "totalBudget" does not exist.', 663, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["data"], "budget", [], "any", false, false, false, 663));
            // line 664
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sector'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 665
        yield "                
                ";
        // line 666
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectorsData"]) || array_key_exists("sectorsData", $context) ? $context["sectorsData"] : (function () { throw new RuntimeError('Variable "sectorsData" does not exist.', 666, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["sector"] => $context["data"]) {
            // line 667
            yield "                ";
            $context["percentage"] = ((((isset($context["totalBudget"]) || array_key_exists("totalBudget", $context) ? $context["totalBudget"] : (function () { throw new RuntimeError('Variable "totalBudget" does not exist.', 667, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "budget", [], "any", false, false, false, 667) / (isset($context["totalBudget"]) || array_key_exists("totalBudget", $context) ? $context["totalBudget"] : (function () { throw new RuntimeError('Variable "totalBudget" does not exist.', 667, $this->source); })())) * 100), 0)) : (0));
            // line 668
            yield "                <div class=\"quick-stat\">
                    <span class=\"quick-stat-label\">
                        <span style=\"width: 12px; height: 12px; border-radius: 3px; background: ";
            // line 670
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sectorColors"] ?? null), $context["sector"], [], "array", true, true, false, 670) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 670, $this->source); })()), $context["sector"], [], "array", false, false, false, 670)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorColors"]) || array_key_exists("sectorColors", $context) ? $context["sectorColors"] : (function () { throw new RuntimeError('Variable "sectorColors" does not exist.', 670, $this->source); })()), $context["sector"], [], "array", false, false, false, 670), "html", null, true)) : ("#6b7280"));
            yield "; display: inline-block;\"></span>
                        ";
            // line 671
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sectorLabels"] ?? null), $context["sector"], [], "array", true, true, false, 671) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorLabels"]) || array_key_exists("sectorLabels", $context) ? $context["sectorLabels"] : (function () { throw new RuntimeError('Variable "sectorLabels" does not exist.', 671, $this->source); })()), $context["sector"], [], "array", false, false, false, 671)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sectorLabels"]) || array_key_exists("sectorLabels", $context) ? $context["sectorLabels"] : (function () { throw new RuntimeError('Variable "sectorLabels" does not exist.', 671, $this->source); })()), $context["sector"], [], "array", false, false, false, 671), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["sector"]), "html", null, true)));
            yield "
                    </span>
                    <span class=\"quick-stat-value\">";
            // line 673
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 673, $this->source); })()), "html", null, true);
            yield "%</span>
                </div>
                ";
            $context['_iterated'] = true;
        }
        // line 675
        if (!$context['_iterated']) {
            // line 676
            yield "                <div class=\"empty-state\" style=\"padding: 1rem;\">
                    <p>Aucune donnée disponible</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sector'], $context['data'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 680
        yield "            </div>
        </div>

        <!-- KPI Financements -->
        <div class=\"card animate-in delay-4\" style=\"margin-top: 1.5rem;\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"landmark\"></i>
                    Financements
                </h3>
            </div>
            <div class=\"card-body\">
                <div class=\"kpi-grid\">
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\">";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 694, $this->source); })()), "financementsActifs", [], "any", false, false, false, 694), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">Actifs</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--success);\">";
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 698, $this->source); })()), "decaissementsExecutes", [], "any", false, false, false, 698), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">Décaissements</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--warning);\">";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 702, $this->source); })()), "decaissementsEnAttente", [], "any", false, false, false, 702), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">En attente</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--info);\">";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 706, $this->source); })()), "totalPartners", [], "any", false, false, false, 706), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">Partenaires</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projets à risque -->
";
        // line 716
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["projetsArisque"]) || array_key_exists("projetsArisque", $context) ? $context["projetsArisque"] : (function () { throw new RuntimeError('Variable "projetsArisque" does not exist.', 716, $this->source); })())) > 0)) {
            // line 717
            yield "<div class=\"card animate-in delay-4\" style=\"margin-bottom: 2rem;\">
    <div class=\"card-header\" style=\"background: rgba(198, 12, 48, 0.05);\">
        <h3 class=\"card-title\" style=\"color: var(--danger);\">
            <i data-lucide=\"alert-octagon\"></i>
            Projets à surveiller (échéance < 30 jours)
        </h3>
    </div>
    <div class=\"card-body\" style=\"padding: 0;\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Échéance</th>
                    <th>Progression</th>
                    <th>Écart</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 736
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projetsArisque"]) || array_key_exists("projetsArisque", $context) ? $context["projetsArisque"] : (function () { throw new RuntimeError('Variable "projetsArisque" does not exist.', 736, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 737
                yield "                <tr>
                    <td><strong>";
                // line 738
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 738), "html", null, true);
                yield "</strong></td>
                    <td>
                        <span style=\"color: var(--danger); font-weight: 600;\">
                            ";
                // line 741
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "dateFin", [], "any", false, false, false, 741), "d/m/Y"), "html", null, true);
                yield "
                        </span>
                        <br>
                        <small style=\"color: var(--gray-500);\">
                            ";
                // line 745
                $context["joursRestants"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "dateFin", [], "any", false, false, false, 745), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U")) / 86400);
                // line 746
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRestants"]) || array_key_exists("joursRestants", $context) ? $context["joursRestants"] : (function () { throw new RuntimeError('Variable "joursRestants" does not exist.', 746, $this->source); })()), 0), "html", null, true);
                yield " jours restants
                        </small>
                    </td>
                    <td>
                        <div class=\"progress-container\">
                            <div class=\"progress-bar\">
                                <div class=\"progress-fill red\" style=\"width: ";
                // line 752
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 752), "html", null, true);
                yield "%\"></div>
                            </div>
                            <span class=\"progress-text\">";
                // line 754
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 754), "html", null, true);
                yield "%</span>
                        </div>
                    </td>
                    <td>
                        <span class=\"status-badge danger\">
                            ";
                // line 759
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((100 - CoreExtension::getAttribute($this->env, $this->source, $context["project"], "progress", [], "any", false, false, false, 759)), "html", null, true);
                yield "% restant
                        </span>
                    </td>
                    <td>
                        <a href=\"";
                // line 763
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 763)]), "html", null, true);
                yield "\" class=\"btn btn-secondary btn-sm\">
                            <i data-lucide=\"eye\" style=\"width: 14px; height: 14px;\"></i>
                            Voir
                        </a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 770
            yield "            </tbody>
        </table>
    </div>
</div>
";
        }
        // line 775
        yield "
<!-- Stats Audits -->
<div class=\"card animate-in delay-4\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            <i data-lucide=\"clipboard-check\"></i>
            Audits & Contrôles
        </h3>
        <div class=\"card-actions\">
            <a href=\"";
        // line 784
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_index");
        yield "\" class=\"btn btn-secondary btn-sm\">
                Voir tout
                <i data-lucide=\"arrow-right\" style=\"width: 14px; height: 14px;\"></i>
            </a>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"grid-2\">
            <div>
                <div class=\"kpi-grid\">
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\">";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 795, $this->source); })()), "totalAudits", [], "any", false, false, false, 795), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">Total audits</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--warning);\">";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 799, $this->source); })()), "auditsPlanifies", [], "any", false, false, false, 799), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">Planifiés</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--info);\">";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 803, $this->source); })()), "auditsEnCours", [], "any", false, false, false, 803), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">En cours</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--success);\">";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 807, $this->source); })()), "auditsTermines", [], "any", false, false, false, 807), "html", null, true);
        yield "</div>
                        <div class=\"kpi-mini-label\">Terminés</div>
                    </div>
                </div>
            </div>
            <div>
                ";
        // line 813
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recentAudits"]) || array_key_exists("recentAudits", $context) ? $context["recentAudits"] : (function () { throw new RuntimeError('Variable "recentAudits" does not exist.', 813, $this->source); })())) > 0)) {
            // line 814
            yield "                <h4 style=\"font-size: 0.85rem; color: var(--gray-600); margin-bottom: 0.75rem;\">Prochains audits</h4>
                <ul class=\"activity-list\" style=\"margin: 0;\">
                    ";
            // line 816
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recentAudits"]) || array_key_exists("recentAudits", $context) ? $context["recentAudits"] : (function () { throw new RuntimeError('Variable "recentAudits" does not exist.', 816, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
                // line 817
                yield "                    <li class=\"activity-item\" style=\"padding: 0.75rem 0;\">
                        <div class=\"activity-icon ";
                // line 818
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 818) == "termine")) {
                    yield "green";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 818) == "en_cours")) {
                    yield "blue";
                } else {
                    yield "gold";
                }
                yield "\">
                            <i data-lucide=\"clipboard-list\" style=\"width: 16px; height: 16px;\"></i>
                        </div>
                        <div class=\"activity-content\">
                            <h5 style=\"font-size: 0.85rem;\">";
                // line 822
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "titre", [], "any", false, false, false, 822)), "truncate", [30], "method", false, false, false, 822), "html", null, true);
                yield "</h5>
                            <p>";
                // line 823
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "typeLabel", [], "any", false, false, false, 823), "html", null, true);
                yield "</p>
                        </div>
                        <span class=\"status-badge ";
                // line 825
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statutBadgeClass", [], "any", false, false, false, 825), "html", null, true);
                yield "\">
                            ";
                // line 826
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statutLabel", [], "any", false, false, false, 826), "html", null, true);
                yield "
                        </span>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 830
            yield "                </ul>
                ";
        } else {
            // line 832
            yield "                <div class=\"empty-state\" style=\"padding: 1rem;\">
                    <p>Aucun audit planifié</p>
                </div>
                ";
        }
        // line 836
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 842
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 843
        yield "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des icônes Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Données pour le graphique par secteur
    const sectorsData = ";
        // line 852
        yield json_encode((isset($context["sectorsData"]) || array_key_exists("sectorsData", $context) ? $context["sectorsData"] : (function () { throw new RuntimeError('Variable "sectorsData" does not exist.', 852, $this->source); })()));
        yield ";
    
    const sectorLabels = {
        'infrastructure': 'Infrastructure',
        'sante': 'Santé',
        'energie': 'Énergie',
        'agriculture': 'Agriculture',
        'education': 'Éducation',
        'eau': 'Eau & Assainissement'
    };

    const labels = [];
    const budgets = [];
    const decaisses = [];

    for (const [key, data] of Object.entries(sectorsData)) {
        labels.push(sectorLabels[key] || key);
        budgets.push((data.budget / 1000000000).toFixed(2));
        decaisses.push((data.decaisse / 1000000000).toFixed(2));
    }

    // Graphique Budget par secteur
    const budgetCtx = document.getElementById('budgetChart');
    if (budgetCtx && labels.length > 0) {
        new Chart(budgetCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Budget engagé (Mds FCFA)',
                        data: budgets,
                        backgroundColor: 'rgba(0, 38, 100, 0.85)',
                        borderColor: '#002664',
                        borderWidth: 1,
                        borderRadius: 6,
                    },
                    {
                        label: 'Montant décaissé (Mds FCFA)',
                        data: decaisses,
                        backgroundColor: 'rgba(254, 203, 0, 0.85)',
                        borderColor: '#FECB00',
                        borderWidth: 1,
                        borderRadius: 6,
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: { size: 12 }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        titleFont: { size: 14, weight: 'bold' },
                        bodyFont: { size: 13 },
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw + ' Mds FCFA';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { font: { size: 11 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(0, 0, 0, 0.05)' },
                        ticks: {
                            font: { size: 11 },
                            callback: function(value) {
                                return value + ' Mds';
                            }
                        }
                    }
                }
            }
        });
    } else if (budgetCtx) {
        // Afficher un message si pas de données
        budgetCtx.parentElement.innerHTML = '<div class=\"empty-state\"><i data-lucide=\"bar-chart-2\"></i><p>Aucune donnée à afficher</p></div>';
        if (typeof lucide !== 'undefined') lucide.createIcons();
    }
});

// Fonction d'export (simulation)
function exportChart() {
    const canvas = document.getElementById('budgetChart');
    if (canvas) {
        const link = document.createElement('a');
        link.download = 'execution-budgetaire-secteur.png';
        link.href = canvas.toDataURL();
        link.click();
    }
}
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
        return array (  1295 => 852,  1284 => 843,  1274 => 842,  1262 => 836,  1256 => 832,  1252 => 830,  1242 => 826,  1238 => 825,  1233 => 823,  1229 => 822,  1216 => 818,  1213 => 817,  1209 => 816,  1205 => 814,  1203 => 813,  1194 => 807,  1187 => 803,  1180 => 799,  1173 => 795,  1159 => 784,  1148 => 775,  1141 => 770,  1128 => 763,  1121 => 759,  1113 => 754,  1108 => 752,  1098 => 746,  1096 => 745,  1089 => 741,  1083 => 738,  1080 => 737,  1076 => 736,  1055 => 717,  1053 => 716,  1040 => 706,  1033 => 702,  1026 => 698,  1019 => 694,  1003 => 680,  994 => 676,  992 => 675,  985 => 673,  980 => 671,  976 => 670,  972 => 668,  969 => 667,  964 => 666,  961 => 665,  955 => 664,  952 => 663,  947 => 662,  944 => 661,  941 => 653,  939 => 645,  925 => 633,  918 => 628,  914 => 626,  906 => 623,  900 => 621,  896 => 619,  894 => 618,  891 => 617,  888 => 616,  886 => 615,  880 => 612,  876 => 611,  870 => 608,  866 => 607,  863 => 606,  859 => 605,  856 => 604,  854 => 603,  837 => 588,  828 => 582,  823 => 579,  818 => 576,  807 => 571,  801 => 569,  799 => 562,  792 => 558,  787 => 556,  775 => 555,  769 => 551,  765 => 549,  759 => 547,  757 => 546,  750 => 542,  746 => 541,  742 => 540,  737 => 537,  730 => 532,  728 => 531,  724 => 530,  720 => 529,  716 => 527,  712 => 526,  699 => 515,  697 => 514,  687 => 507,  680 => 503,  641 => 466,  635 => 465,  627 => 464,  619 => 463,  614 => 461,  601 => 451,  593 => 450,  585 => 449,  580 => 447,  567 => 437,  560 => 433,  549 => 424,  541 => 423,  533 => 422,  525 => 421,  520 => 419,  507 => 409,  498 => 402,  488 => 401,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<style>
    /* ===== Variables et Base ===== */
    :root {
        --primary: #002664;
        --primary-light: #003399;
        --gold: #FECB00;
        --gold-dark: #D4A800;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #c60c30;
        --info: #3b82f6;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-300: #d1d5db;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-600: #4b5563;
        --gray-700: #374151;
        --gray-800: #1f2937;
        --gray-900: #111827;
        --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    }

    /* ===== Page Header ===== */
    .page-header {
        margin-bottom: 2rem;
    }
    .page-header h2 {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--gray-900);
        margin-bottom: 0.5rem;
    }
    .page-header-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: 12px;
        color: white;
    }
    .page-header p {
        color: var(--gray-500);
        margin: 0;
        font-size: 0.95rem;
    }

    /* ===== Stats Grid ===== */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    @media (max-width: 1200px) {
        .stats-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
        .stats-grid { grid-template-columns: 1fr; }
    }

    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid var(--gray-100);
    }
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--card-accent, var(--primary));
    }
    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-lg);
    }

    .stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .stat-icon.blue { background: linear-gradient(135deg, #002664, #003399); color: white; }
    .stat-icon.gold { background: linear-gradient(135deg, #FECB00, #FFD633); color: #002664; }
    .stat-icon.green { background: linear-gradient(135deg, #059669, #10b981); color: white; }
    .stat-icon.red { background: linear-gradient(135deg, #c60c30, #ef4444); color: white; }
    .stat-icon.purple { background: linear-gradient(135deg, #7c3aed, #8b5cf6); color: white; }

    .stat-content h3 {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--gray-900);
        margin: 0 0 0.25rem;
        line-height: 1.2;
    }
    .stat-content p {
        color: var(--gray-500);
        margin: 0 0 0.5rem;
        font-size: 0.9rem;
    }
    .stat-trend {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 0.25rem 0.5rem;
        border-radius: 6px;
    }
    .stat-trend.up { color: var(--success); background: rgba(16, 185, 129, 0.1); }
    .stat-trend.down { color: var(--danger); background: rgba(198, 12, 48, 0.1); }
    .stat-trend.neutral { color: var(--gray-500); background: var(--gray-100); }

    /* ===== Cards ===== */
    .card {
        background: white;
        border-radius: 16px;
        box-shadow: var(--shadow-md);
        border: 1px solid var(--gray-100);
        overflow: hidden;
    }
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid var(--gray-100);
        background: var(--gray-50);
    }
    .card-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1rem;
        font-weight: 600;
        color: var(--gray-800);
        margin: 0;
    }
    .card-title i { color: var(--primary); }
    .card-actions { display: flex; gap: 0.5rem; }
    .card-body { padding: 1.5rem; }

    /* ===== Grid Layouts ===== */
    .grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; }
    .grid-3 { display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem; margin-bottom: 2rem; }
    @media (max-width: 1024px) {
        .grid-2, .grid-3 { grid-template-columns: 1fr; }
    }

    /* ===== Buttons ===== */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
        border: none;
        text-decoration: none;
    }
    .btn-sm { padding: 0.375rem 0.75rem; font-size: 0.8rem; }
    .btn-primary { background: var(--primary); color: white; }
    .btn-primary:hover { background: var(--primary-light); }
    .btn-secondary { background: var(--gray-100); color: var(--gray-700); border: 1px solid var(--gray-200); }
    .btn-secondary:hover { background: var(--gray-200); }
    .btn-gold { background: var(--gold); color: var(--primary); }
    .btn-gold:hover { background: var(--gold-dark); }

    /* ===== Data Table ===== */
    .data-table {
        width: 100%;
        border-collapse: collapse;
    }
    .data-table th {
        text-align: left;
        padding: 1rem 1.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--gray-500);
        background: var(--gray-50);
        border-bottom: 1px solid var(--gray-200);
    }
    .data-table td {
        padding: 1rem 1.25rem;
        border-bottom: 1px solid var(--gray-100);
        font-size: 0.9rem;
        color: var(--gray-700);
    }
    .data-table tbody tr:hover { background: var(--gray-50); }
    .data-table tbody tr:last-child td { border-bottom: none; }

    /* ===== Progress Bar ===== */
    .progress-container { display: flex; align-items: center; gap: 0.75rem; }
    .progress-bar {
        flex: 1;
        height: 8px;
        background: var(--gray-200);
        border-radius: 4px;
        overflow: hidden;
    }
    .progress-fill {
        height: 100%;
        border-radius: 4px;
        transition: width 0.5s ease;
    }
    .progress-fill.blue { background: linear-gradient(90deg, var(--primary), var(--primary-light)); }
    .progress-fill.green { background: linear-gradient(90deg, #059669, var(--success)); }
    .progress-fill.gold { background: linear-gradient(90deg, var(--gold-dark), var(--gold)); }
    .progress-fill.red { background: linear-gradient(90deg, #b91c1c, var(--danger)); }
    .progress-text { font-size: 0.8rem; font-weight: 600; color: var(--gray-600); min-width: 40px; }

    /* ===== Status Badge ===== */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.375rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: currentColor;
    }
    .status-badge.success { background: rgba(16, 185, 129, 0.1); color: #059669; }
    .status-badge.warning { background: rgba(245, 158, 11, 0.1); color: #d97706; }
    .status-badge.danger { background: rgba(198, 12, 48, 0.1); color: #c60c30; }
    .status-badge.info { background: rgba(0, 38, 100, 0.1); color: #002664; }
    .status-badge.secondary { background: var(--gray-100); color: var(--gray-600); }

    /* ===== Activity List ===== */
    .activity-list { list-style: none; padding: 0; margin: 0; }
    .activity-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem 0;
        border-bottom: 1px solid var(--gray-100);
    }
    .activity-item:last-child { border-bottom: none; }
    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .activity-icon.green { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .activity-icon.blue { background: rgba(0, 38, 100, 0.1); color: var(--primary); }
    .activity-icon.gold { background: rgba(254, 203, 0, 0.15); color: #b8860b; }
    .activity-icon.red { background: rgba(198, 12, 48, 0.1); color: var(--danger); }
    .activity-content { flex: 1; min-width: 0; }
    .activity-content h5 { margin: 0 0 0.25rem; font-size: 0.9rem; font-weight: 600; color: var(--gray-800); }
    .activity-content p { margin: 0; font-size: 0.8rem; color: var(--gray-500); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .activity-time { font-size: 0.75rem; color: var(--gray-400); white-space: nowrap; }

    /* ===== Quick Stats ===== */
    .quick-stat {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--gray-100);
    }
    .quick-stat:last-child { border-bottom: none; }
    .quick-stat-label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: var(--gray-600);
    }
    .quick-stat-value { font-weight: 700; color: var(--gray-800); }

    /* ===== Chart Container ===== */
    .chart-container {
        position: relative;
        height: 300px;
        width: 100%;
    }

    /* ===== Sector Badge ===== */
    .sector-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.25rem 0.5rem;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    .sector-badge.infrastructure { background: rgba(0, 38, 100, 0.1); color: #002664; }
    .sector-badge.sante { background: rgba(16, 185, 129, 0.1); color: #059669; }
    .sector-badge.energie { background: rgba(254, 203, 0, 0.15); color: #b8860b; }
    .sector-badge.agriculture { background: rgba(34, 197, 94, 0.1); color: #16a34a; }
    .sector-badge.education { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
    .sector-badge.eau { background: rgba(6, 182, 212, 0.1); color: #0891b2; }

    /* ===== Animations ===== */
    .animate-in {
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
        transform: translateY(20px);
    }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }

    @keyframes slideIn {
        to { opacity: 1; transform: translateY(0); }
    }

    /* ===== Priority Badge ===== */
    .priority-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.7rem;
        font-weight: 600;
        padding: 0.2rem 0.4rem;
        border-radius: 4px;
    }
    .priority-badge.haute { background: rgba(198, 12, 48, 0.1); color: #c60c30; }
    .priority-badge.moyenne { background: rgba(245, 158, 11, 0.1); color: #d97706; }
    .priority-badge.normale { background: var(--gray-100); color: var(--gray-600); }

    /* ===== Empty State ===== */
    .empty-state {
        text-align: center;
        padding: 3rem 1.5rem;
        color: var(--gray-500);
    }
    .empty-state i { font-size: 3rem; margin-bottom: 1rem; opacity: 0.3; }
    .empty-state p { margin: 0; }

    /* ===== KPI Mini Cards ===== */
    .kpi-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
    .kpi-mini {
        background: var(--gray-50);
        padding: 1rem;
        border-radius: 10px;
        text-align: center;
    }
    .kpi-mini-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary);
    }
    .kpi-mini-label {
        font-size: 0.75rem;
        color: var(--gray-500);
        margin-top: 0.25rem;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"page-header animate-in\">
    <h2>
        <span class=\"page-header-icon\">
            <i data-lucide=\"layout-dashboard\"></i>
        </span>
        Tableau de bord
    </h2>
    <p>Vue d'ensemble des projets publics - {{ currentDate|date('F Y')|capitalize }}</p>
</div>

<!-- Stats Grid -->
<div class=\"stats-grid\">
    <div class=\"stat-card animate-in\" style=\"--card-accent: #002664;\">
        <div class=\"stat-icon blue\">
            <i data-lucide=\"briefcase\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>{{ stats.projectsActifs }}</h3>
            <p>Projets actifs</p>
            <div class=\"stat-trend {% if stats.projectsCeMois > 0 %}up{% else %}neutral{% endif %}\">
                <i data-lucide=\"{% if stats.projectsCeMois > 0 %}trending-up{% else %}minus{% endif %}\" style=\"width: 14px; height: 14px;\"></i>
                {% if stats.projectsCeMois > 0 %}+{{ stats.projectsCeMois }} ce mois{% else %}Aucun ce mois{% endif %}
            </div>
        </div>
    </div>

    <div class=\"stat-card animate-in delay-1\" style=\"--card-accent: #fecb00;\">
        <div class=\"stat-icon gold\">
            <i data-lucide=\"coins\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>{{ (stats.budgetTotal / 1000000000)|number_format(1, ',', ' ') }} Mds</h3>
            <p>Budget total (FCFA)</p>
            <div class=\"stat-trend up\">
                <i data-lucide=\"banknote\" style=\"width: 14px; height: 14px;\"></i>
                {{ stats.totalFinancements }} financements
            </div>
        </div>
    </div>

    <div class=\"stat-card animate-in delay-2\" style=\"--card-accent: #10b981;\">
        <div class=\"stat-icon green\">
            <i data-lucide=\"check-circle\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>{{ stats.tauxExecution }}%</h3>
            <p>Taux d'exécution</p>
            <div class=\"stat-trend {% if stats.tauxExecution >= 50 %}up{% else %}down{% endif %}\">
                <i data-lucide=\"{% if stats.tauxExecution >= 50 %}trending-up{% else %}trending-down{% endif %}\" style=\"width: 14px; height: 14px;\"></i>
                {{ (stats.montantDecaisse / 1000000000)|number_format(1, ',', ' ') }} Mds décaissés
            </div>
        </div>
    </div>

    <div class=\"stat-card animate-in delay-3\" style=\"--card-accent: #c60c30;\">
        <div class=\"stat-icon red\">
            <i data-lucide=\"alert-triangle\"></i>
        </div>
        <div class=\"stat-content\">
            <h3>{{ stats.projectsEnRetard }}</h3>
            <p>Projets en retard</p>
            <div class=\"stat-trend {% if stats.projectsEnRetard > 0 %}down{% else %}up{% endif %}\">
                <i data-lucide=\"{% if stats.projectsEnRetard > 0 %}alert-circle{% else %}check{% endif %}\" style=\"width: 14px; height: 14px;\"></i>
                {% if stats.projectsEnRetard > 0 %}À surveiller{% else %}Tout va bien{% endif %}
            </div>
        </div>
    </div>
</div>

<!-- Charts & Projects -->
<div class=\"grid-3\">
    <div>
        <!-- Budget Chart -->
        <div class=\"card animate-in delay-2\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"bar-chart-3\"></i>
                    Exécution budgétaire par secteur
                </h3>
                <div class=\"card-actions\">
                    <button class=\"btn btn-secondary btn-sm\" onclick=\"exportChart()\">
                        <i data-lucide=\"download\" style=\"width: 14px; height: 14px;\"></i>
                        Exporter
                    </button>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"chart-container\">
                    <canvas id=\"budgetChart\"></canvas>
                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class=\"card animate-in delay-3\" style=\"margin-top: 1.5rem;\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"folder-open\"></i>
                    Projets récents
                </h3>
                <div class=\"card-actions\">
                    <a href=\"{{ path('app_projects') }}\" class=\"btn btn-secondary btn-sm\">
                        Voir tout
                        <i data-lucide=\"arrow-right\" style=\"width: 14px; height: 14px;\"></i>
                    </a>
                    <a href=\"{{ path('app_projects_new') }}\" class=\"btn btn-primary btn-sm\">
                        <i data-lucide=\"plus\" style=\"width: 14px; height: 14px;\"></i>
                        Nouveau
                    </a>
                </div>
            </div>
            <div class=\"card-body\" style=\"padding: 0;\">
                {% if recentProjects|length > 0 %}
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Projet</th>
                            <th>Secteur</th>
                            <th>Budget</th>
                            <th>Progression</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for project in recentProjects|slice(0, 5) %}
                        <tr>
                            <td>
                                <a href=\"{{ path('app_projects_show', {slug: project.slug}) }}\" style=\"text-decoration: none; color: inherit;\">
                                    <strong>{{ project.name }}</strong>
                                    {% if project.priorite == 'haute' %}
                                    <span class=\"priority-badge haute\" style=\"margin-left: 0.5rem;\">
                                        <i data-lucide=\"alert-circle\" style=\"width: 10px; height: 10px;\"></i>
                                        Prioritaire
                                    </span>
                                    {% endif %}
                                </a>
                            </td>
                            <td>
                                <span class=\"sector-badge {{ project.sector }}\">
                                    <i data-lucide=\"{{ project.sectorIcon }}\" style=\"width: 12px; height: 12px;\"></i>
                                    {{ project.sectorLabel }}
                                </span>
                            </td>
                            <td>
                                {% if project.budgetTotal %}
                                    {{ (project.budgetTotal / 1000000000)|number_format(2, ',', ' ') }} Mds
                                {% else %}
                                    <span style=\"color: var(--gray-400);\">Non défini</span>
                                {% endif %}
                            </td>
                            <td>
                                <div class=\"progress-container\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill {% if project.progress >= 75 %}green{% elseif project.progress >= 50 %}blue{% elseif project.progress >= 25 %}gold{% else %}red{% endif %}\" 
                                             style=\"width: {{ project.progress }}%\"></div>
                                    </div>
                                    <span class=\"progress-text\">{{ project.progress }}%</span>
                                </div>
                            </td>
                            <td>
                                {% set statusClass = {
                                    'planifie': 'secondary',
                                    'en-cours': 'info',
                                    'en-retard': 'danger',
                                    'termine': 'success',
                                    'suspendu': 'warning'
                                } %}
                                <span class=\"status-badge {{ statusClass[project.status] ?? 'secondary' }}\">
                                    <span class=\"status-dot\"></span>
                                    {{ project.statusLabel }}
                                </span>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
                {% else %}
                <div class=\"empty-state\">
                    <i data-lucide=\"folder-x\"></i>
                    <p>Aucun projet enregistré</p>
                    <a href=\"{{ path('app_projects_new') }}\" class=\"btn btn-primary\" style=\"margin-top: 1rem;\">
                        <i data-lucide=\"plus\" style=\"width: 16px; height: 16px;\"></i>
                        Créer un projet
                    </a>
                </div>
                {% endif %}
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div>
        <!-- Activity Feed -->
        <div class=\"card animate-in delay-2\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"activity\"></i>
                    Activité récente
                </h3>
            </div>
            <div class=\"card-body\">
                {% if activitesRecentes|length > 0 %}
                <ul class=\"activity-list\">
                    {% for activite in activitesRecentes %}
                    <li class=\"activity-item\">
                        <div class=\"activity-icon {{ activite.iconClass }}\">
                            <i data-lucide=\"{{ activite.icon }}\" style=\"width: 18px; height: 18px;\"></i>
                        </div>
                        <div class=\"activity-content\">
                            <h5>{{ activite.title }}</h5>
                            <p>{{ activite.description }}</p>
                        </div>
                        <span class=\"activity-time\">
                            {% set diff = date() | date_modify('-1 day') %}
                            {% if activite.date|date('Y-m-d') == 'now'|date('Y-m-d') %}
                                Aujourd'hui
                            {% elseif activite.date|date('Y-m-d') == diff|date('Y-m-d') %}
                                Hier
                            {% else %}
                                {{ activite.date|date('d/m') }}
                            {% endif %}
                        </span>
                    </li>
                    {% endfor %}
                </ul>
                {% else %}
                <div class=\"empty-state\" style=\"padding: 2rem;\">
                    <i data-lucide=\"inbox\"></i>
                    <p>Aucune activité récente</p>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- Quick Stats - Répartition par secteur -->
        <div class=\"card animate-in delay-3\" style=\"margin-top: 1.5rem;\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"pie-chart\"></i>
                    Répartition par secteur
                </h3>
            </div>
            <div class=\"card-body\">
                {% set sectorColors = {
                    'infrastructure': '#002664',
                    'sante': '#10b981',
                    'energie': '#FECB00',
                    'agriculture': '#22c55e',
                    'education': '#3b82f6',
                    'eau': '#06b6d4'
                } %}
                {% set sectorLabels = {
                    'infrastructure': 'Infrastructure',
                    'sante': 'Santé',
                    'energie': 'Énergie',
                    'agriculture': 'Agriculture',
                    'education': 'Éducation',
                    'eau': 'Eau & Assainissement'
                } %}
                {% set totalBudget = 0 %}
                {% for sector, data in sectorsData %}
                    {% set totalBudget = totalBudget + data.budget %}
                {% endfor %}
                
                {% for sector, data in sectorsData %}
                {% set percentage = totalBudget > 0 ? ((data.budget / totalBudget) * 100)|round(0) : 0 %}
                <div class=\"quick-stat\">
                    <span class=\"quick-stat-label\">
                        <span style=\"width: 12px; height: 12px; border-radius: 3px; background: {{ sectorColors[sector] ?? '#6b7280' }}; display: inline-block;\"></span>
                        {{ sectorLabels[sector] ?? sector|capitalize }}
                    </span>
                    <span class=\"quick-stat-value\">{{ percentage }}%</span>
                </div>
                {% else %}
                <div class=\"empty-state\" style=\"padding: 1rem;\">
                    <p>Aucune donnée disponible</p>
                </div>
                {% endfor %}
            </div>
        </div>

        <!-- KPI Financements -->
        <div class=\"card animate-in delay-4\" style=\"margin-top: 1.5rem;\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i data-lucide=\"landmark\"></i>
                    Financements
                </h3>
            </div>
            <div class=\"card-body\">
                <div class=\"kpi-grid\">
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\">{{ stats.financementsActifs }}</div>
                        <div class=\"kpi-mini-label\">Actifs</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--success);\">{{ stats.decaissementsExecutes }}</div>
                        <div class=\"kpi-mini-label\">Décaissements</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--warning);\">{{ stats.decaissementsEnAttente }}</div>
                        <div class=\"kpi-mini-label\">En attente</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--info);\">{{ stats.totalPartners }}</div>
                        <div class=\"kpi-mini-label\">Partenaires</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projets à risque -->
{% if projetsArisque|length > 0 %}
<div class=\"card animate-in delay-4\" style=\"margin-bottom: 2rem;\">
    <div class=\"card-header\" style=\"background: rgba(198, 12, 48, 0.05);\">
        <h3 class=\"card-title\" style=\"color: var(--danger);\">
            <i data-lucide=\"alert-octagon\"></i>
            Projets à surveiller (échéance < 30 jours)
        </h3>
    </div>
    <div class=\"card-body\" style=\"padding: 0;\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Échéance</th>
                    <th>Progression</th>
                    <th>Écart</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for project in projetsArisque %}
                <tr>
                    <td><strong>{{ project.name }}</strong></td>
                    <td>
                        <span style=\"color: var(--danger); font-weight: 600;\">
                            {{ project.dateFin|date('d/m/Y') }}
                        </span>
                        <br>
                        <small style=\"color: var(--gray-500);\">
                            {% set joursRestants = (project.dateFin|date('U') - 'now'|date('U')) / 86400 %}
                            {{ joursRestants|round(0) }} jours restants
                        </small>
                    </td>
                    <td>
                        <div class=\"progress-container\">
                            <div class=\"progress-bar\">
                                <div class=\"progress-fill red\" style=\"width: {{ project.progress }}%\"></div>
                            </div>
                            <span class=\"progress-text\">{{ project.progress }}%</span>
                        </div>
                    </td>
                    <td>
                        <span class=\"status-badge danger\">
                            {{ (100 - project.progress) }}% restant
                        </span>
                    </td>
                    <td>
                        <a href=\"{{ path('app_projects_show', {id: project.id}) }}\" class=\"btn btn-secondary btn-sm\">
                            <i data-lucide=\"eye\" style=\"width: 14px; height: 14px;\"></i>
                            Voir
                        </a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endif %}

<!-- Stats Audits -->
<div class=\"card animate-in delay-4\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            <i data-lucide=\"clipboard-check\"></i>
            Audits & Contrôles
        </h3>
        <div class=\"card-actions\">
            <a href=\"{{ path('app_audit_index') }}\" class=\"btn btn-secondary btn-sm\">
                Voir tout
                <i data-lucide=\"arrow-right\" style=\"width: 14px; height: 14px;\"></i>
            </a>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"grid-2\">
            <div>
                <div class=\"kpi-grid\">
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\">{{ stats.totalAudits }}</div>
                        <div class=\"kpi-mini-label\">Total audits</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--warning);\">{{ stats.auditsPlanifies }}</div>
                        <div class=\"kpi-mini-label\">Planifiés</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--info);\">{{ stats.auditsEnCours }}</div>
                        <div class=\"kpi-mini-label\">En cours</div>
                    </div>
                    <div class=\"kpi-mini\">
                        <div class=\"kpi-mini-value\" style=\"color: var(--success);\">{{ stats.auditsTermines }}</div>
                        <div class=\"kpi-mini-label\">Terminés</div>
                    </div>
                </div>
            </div>
            <div>
                {% if recentAudits|length > 0 %}
                <h4 style=\"font-size: 0.85rem; color: var(--gray-600); margin-bottom: 0.75rem;\">Prochains audits</h4>
                <ul class=\"activity-list\" style=\"margin: 0;\">
                    {% for audit in recentAudits|slice(0, 3) %}
                    <li class=\"activity-item\" style=\"padding: 0.75rem 0;\">
                        <div class=\"activity-icon {% if audit.statut == 'termine' %}green{% elseif audit.statut == 'en_cours' %}blue{% else %}gold{% endif %}\">
                            <i data-lucide=\"clipboard-list\" style=\"width: 16px; height: 16px;\"></i>
                        </div>
                        <div class=\"activity-content\">
                            <h5 style=\"font-size: 0.85rem;\">{{ audit.titre|u.truncate(30) }}</h5>
                            <p>{{ audit.typeLabel }}</p>
                        </div>
                        <span class=\"status-badge {{ audit.statutBadgeClass }}\">
                            {{ audit.statutLabel }}
                        </span>
                    </li>
                    {% endfor %}
                </ul>
                {% else %}
                <div class=\"empty-state\" style=\"padding: 1rem;\">
                    <p>Aucun audit planifié</p>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des icônes Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Données pour le graphique par secteur
    const sectorsData = {{ sectorsData|json_encode|raw }};
    
    const sectorLabels = {
        'infrastructure': 'Infrastructure',
        'sante': 'Santé',
        'energie': 'Énergie',
        'agriculture': 'Agriculture',
        'education': 'Éducation',
        'eau': 'Eau & Assainissement'
    };

    const labels = [];
    const budgets = [];
    const decaisses = [];

    for (const [key, data] of Object.entries(sectorsData)) {
        labels.push(sectorLabels[key] || key);
        budgets.push((data.budget / 1000000000).toFixed(2));
        decaisses.push((data.decaisse / 1000000000).toFixed(2));
    }

    // Graphique Budget par secteur
    const budgetCtx = document.getElementById('budgetChart');
    if (budgetCtx && labels.length > 0) {
        new Chart(budgetCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Budget engagé (Mds FCFA)',
                        data: budgets,
                        backgroundColor: 'rgba(0, 38, 100, 0.85)',
                        borderColor: '#002664',
                        borderWidth: 1,
                        borderRadius: 6,
                    },
                    {
                        label: 'Montant décaissé (Mds FCFA)',
                        data: decaisses,
                        backgroundColor: 'rgba(254, 203, 0, 0.85)',
                        borderColor: '#FECB00',
                        borderWidth: 1,
                        borderRadius: 6,
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: { size: 12 }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        titleFont: { size: 14, weight: 'bold' },
                        bodyFont: { size: 13 },
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw + ' Mds FCFA';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { font: { size: 11 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(0, 0, 0, 0.05)' },
                        ticks: {
                            font: { size: 11 },
                            callback: function(value) {
                                return value + ' Mds';
                            }
                        }
                    }
                }
            }
        });
    } else if (budgetCtx) {
        // Afficher un message si pas de données
        budgetCtx.parentElement.innerHTML = '<div class=\"empty-state\"><i data-lucide=\"bar-chart-2\"></i><p>Aucune donnée à afficher</p></div>';
        if (typeof lucide !== 'undefined') lucide.createIcons();
    }
});

// Fonction d'export (simulation)
function exportChart() {
    const canvas = document.getElementById('budgetChart');
    if (canvas) {
        const link = document.createElement('a');
        link.download = 'execution-budgetaire-secteur.png';
        link.href = canvas.toDataURL();
        link.click();
    }
}
</script>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\dashboard\\index.html.twig");
    }
}
