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

/* convention/index.html.twig */
class __TwigTemplate_2e632950ea38db5838251e7f372829e4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "convention/index.html.twig"));

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

        yield "Conventions - SIGEP Tchad";
        
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
        yield "<style>
/* ============================================
   SIGEP TCHAD - CONVENTIONS CSS
   Module de gestion des conventions
   ============================================ */

/* Variables CSS - Couleurs du Tchad */
:root {
    /* Couleurs principales */
    --tchad-blue: #002664;
    --tchad-gold: #FECB00;
    --tchad-red: #C60C30;
    
    /* Couleurs de statut */
    --success: #10b981;
    --warning: #f59e0b;
    --danger: #ef4444;
    --info: #3b82f6;
    
    /* Thème clair */
    --bg-primary: #ffffff;
    --bg-secondary: #f8fafc;
    --bg-tertiary: #f1f5f9;
    --text-primary: #1e293b;
    --text-secondary: #475569;
    --text-muted: #94a3b8;
    --border-color: #e2e8f0;
    
    /* Ombres */
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
    
    /* Gradients */
    --accent-gradient: linear-gradient(135deg, var(--tchad-blue) 0%, #003a8c 100%);
    --gold-gradient: linear-gradient(135deg, var(--tchad-gold) 0%, #e6b800 100%);
}

/* Thème sombre */
[data-theme=\"dark\"] {
    --bg-primary: #0f172a;
    --bg-secondary: #1e293b;
    --bg-tertiary: #334155;
    --text-primary: #f1f5f9;
    --text-secondary: #cbd5e1;
    --text-muted: #64748b;
    --border-color: #334155;
}

/* Reset de base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: var(--bg-primary);
    color: var(--text-primary);
    line-height: 1.6;
}

/* ============================================
   LAYOUT DE BASE
   ============================================ */

.content-area {
    padding: 40px;
    max-width: 1600px;
    margin: 0 auto;
    min-height: 100vh;
}

/* ============================================
   PAGE HEADER
   ============================================ */

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 24px;
    border-bottom: 2px solid var(--border-color);
}

.page-title h2 {
    font-size: 2rem;
    font-weight: 800;
    color: var(--text-primary);
    margin-bottom: 8px;
    letter-spacing: -0.5px;
    background: var(--accent-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.page-title p {
    color: var(--text-muted);
    font-size: 1rem;
    font-weight: 500;
}

/* ============================================
   BOUTONS
   ============================================ */

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 28px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    text-decoration: none;
    white-space: nowrap;
    position: relative;
    overflow: hidden;
}

.btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn:hover::before {
    width: 300px;
    height: 300px;
}

.btn i {
    width: 20px;
    height: 20px;
    transition: transform 0.3s;
}

.btn:hover i {
    transform: scale(1.1);
}

.btn-primary {
    background: var(--accent-gradient);
    color: white;
    box-shadow: 0 4px 14px 0 rgba(0, 38, 100, 0.39);
}

.btn-primary:hover {
    box-shadow: 0 6px 20px rgba(0, 38, 100, 0.5);
    transform: translateY(-2px);
}

.btn-sm {
    padding: 8px 16px;
    font-size: 0.875rem;
    border-radius: 8px;
    background: var(--bg-tertiary);
    color: var(--text-primary);
    border: 1px solid var(--border-color);
    transition: all 0.2s;
    text-decoration: none;
    display: inline-block;
}

.btn-sm:hover {
    background: var(--tchad-blue);
    color: white;
    border-color: var(--tchad-blue);
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

/* ============================================
   STATS GRID
   ============================================ */

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 24px;
    margin-bottom: 40px;
}

.stat-card {
    background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    padding: 28px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: default;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--accent-gradient);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-card::after {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0, 38, 100, 0.03) 0%, transparent 70%);
    transform: scale(0);
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0, 38, 100, 0.12);
    border-color: var(--tchad-blue);
}

.stat-card:hover::before {
    transform: scaleX(1);
}

.stat-card:hover::after {
    transform: scale(1);
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--tchad-blue);
    margin-bottom: 8px;
    line-height: 1;
    position: relative;
    z-index: 1;
    letter-spacing: -1px;
}

.stat-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 12px;
    position: relative;
    z-index: 1;
}

.stat-amount {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--tchad-gold);
    position: relative;
    z-index: 1;
    padding: 8px 0;
    border-top: 1px solid var(--border-color);
    margin-top: 12px;
}

/* Animation au chargement */
@keyframes statFadeIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.stat-card {
    animation: statFadeIn 0.6s cubic-bezier(0.4, 0, 0.2, 1) backwards;
}

.stat-card:nth-child(1) { animation-delay: 0.1s; }
.stat-card:nth-child(2) { animation-delay: 0.2s; }
.stat-card:nth-child(3) { animation-delay: 0.3s; }
.stat-card:nth-child(4) { animation-delay: 0.4s; }

/* ============================================
   TABLE CARD
   ============================================ */

.table-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    animation: fadeInUp 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ============================================
   DATA TABLE
   ============================================ */

.data-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
}

.data-table thead {
    background: linear-gradient(to right, var(--bg-tertiary) 0%, var(--bg-secondary) 100%);
}

.data-table thead th {
    padding: 20px 24px;
    text-align: left;
    font-weight: 700;
    font-size: 0.8rem;
    color: var(--text-secondary);
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 2px solid var(--border-color);
    position: sticky;
    top: 0;
    background: var(--bg-tertiary);
    z-index: 10;
}

.data-table tbody tr {
    border-bottom: 1px solid var(--border-color);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.data-table tbody tr::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: var(--tchad-gold);
    transform: scaleY(0);
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.data-table tbody tr:hover {
    background: linear-gradient(to right, rgba(0, 38, 100, 0.03) 0%, transparent 100%);
    transform: translateX(4px);
}

.data-table tbody tr:hover::before {
    transform: scaleY(1);
}

.data-table tbody td {
    padding: 20px 24px;
    font-size: 0.95rem;
    color: var(--text-primary);
    vertical-align: middle;
}

.data-table tbody td strong {
    font-weight: 700;
    color: var(--tchad-blue);
}

/* ============================================
   BADGES
   ============================================ */

.badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.badge::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 8px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: currentColor;
    transform: translateY(-50%);
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse {
    0%, 100% {
        opacity: 1;
        transform: translateY(-50%) scale(1);
    }
    50% {
        opacity: 0.5;
        transform: translateY(-50%) scale(1.1);
    }
}

.badge:hover {
    transform: translateY(-2px) scale(1.05);
    box-shadow: var(--shadow-md);
}

/* Badge Success (En cours) */
.badge-success {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
    color: #059669;
    border: 2px solid rgba(16, 185, 129, 0.3);
    padding-left: 20px;
}

/* Badge Warning (Suspendue) */
.badge-warning {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.15) 0%, rgba(245, 158, 11, 0.05) 100%);
    color: #d97706;
    border: 2px solid rgba(245, 158, 11, 0.3);
    padding-left: 20px;
}

/* Badge Danger (Annulée) */
.badge-danger {
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(239, 68, 68, 0.05) 100%);
    color: #dc2626;
    border: 2px solid rgba(239, 68, 68, 0.3);
    padding-left: 20px;
}

/* Badge Info (Clôturée) */
.badge-info {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.05) 100%);
    color: #2563eb;
    border: 2px solid rgba(59, 130, 246, 0.3);
    padding-left: 20px;
}

/* Badge Secondary (Autres statuts) */
.badge-secondary {
    background: linear-gradient(135deg, rgba(107, 114, 128, 0.15) 0%, rgba(107, 114, 128, 0.05) 100%);
    color: #6b7280;
    border: 2px solid rgba(107, 114, 128, 0.3);
    padding-left: 20px;
}

/* ============================================
   ÉTAT VIDE (Empty State)
   ============================================ */

.data-table tbody tr:only-child td[colspan] {
    padding: 80px 40px;
    text-align: center;
    color: var(--text-muted);
    font-size: 1rem;
    background: linear-gradient(135deg, var(--bg-tertiary) 0%, var(--bg-secondary) 100%);
}

.data-table tbody tr:only-child td[colspan]::before {
    content: '📋';
    display: block;
    font-size: 4rem;
    margin-bottom: 16px;
    opacity: 0.3;
}

/* ============================================
   RESPONSIVE DESIGN
   ============================================ */

@media (max-width: 1024px) {
    .content-area {
        padding: 32px;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .content-area {
        padding: 20px;
    }
    
    .page-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }
    
    .page-title h2 {
        font-size: 1.5rem;
    }
    
    .btn-primary {
        width: 100%;
        justify-content: center;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .stat-card {
        padding: 20px;
    }
    
    .stat-value {
        font-size: 2rem;
    }
    
    /* Table responsive - Empiler les colonnes */
    .table-card {
        border-radius: 16px;
    }
    
    .data-table {
        font-size: 0.875rem;
    }
    
    .data-table thead {
        display: none;
    }
    
    .data-table tbody tr {
        display: block;
        margin-bottom: 16px;
        background: var(--bg-primary);
        border-radius: 16px;
        border: 2px solid var(--border-color);
        padding: 16px;
        box-shadow: var(--shadow-sm);
    }
    
    .data-table tbody tr::before {
        display: none;
    }
    
    .data-table tbody tr:hover {
        transform: none;
        background: var(--bg-primary);
        box-shadow: var(--shadow-md);
    }
    
    .data-table tbody td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border: none;
    }
    
    .data-table tbody td::before {
        content: attr(data-label);
        font-weight: 700;
        color: var(--text-muted);
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .data-table tbody td:first-child::before {
        content: 'Code';
    }
    
    .data-table tbody td:nth-child(2)::before {
        content: 'Intitulé';
    }
    
    .data-table tbody td:nth-child(3)::before {
        content: 'Partenaire';
    }
    
    .data-table tbody td:nth-child(4)::before {
        content: 'Montant';
    }
    
    .data-table tbody td:nth-child(5)::before {
        content: 'Statut';
    }
    
    .data-table tbody td:nth-child(6)::before {
        content: 'Actions';
    }
    
    .badge {
        font-size: 0.7rem;
        padding: 6px 12px;
    }
}

@media (max-width: 480px) {
    .stat-value {
        font-size: 1.75rem;
    }
    
    .stat-label {
        font-size: 0.75rem;
    }
    
    .stat-amount {
        font-size: 1rem;
    }
    
    .data-table tbody td {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
    }
    
    .data-table tbody td::before {
        margin-bottom: 4px;
    }
}

/* ============================================
   PRINT STYLES
   ============================================ */

@media print {
    .btn-primary,
    .btn-sm {
        display: none !important;
    }
    
    .content-area {
        padding: 0;
    }
    
    .page-header {
        border-bottom: 2px solid #000;
        margin-bottom: 20px;
    }
    
    .page-title h2 {
        color: #000 !important;
        -webkit-text-fill-color: #000 !important;
    }
    
    .table-card {
        box-shadow: none;
        border: 1px solid #ddd;
    }
    
    .data-table tbody tr:hover {
        background: transparent;
        transform: none;
    }
    
    .badge {
        border: 1px solid currentColor;
    }
}

/* ============================================
   ACCESSIBILITÉ
   ============================================ */

/* Focus visible pour la navigation au clavier */
*:focus-visible {
    outline: 3px solid var(--tchad-gold);
    outline-offset: 3px;
    border-radius: 4px;
}

.btn:focus-visible {
    outline-color: rgba(254, 203, 0, 0.5);
    outline-width: 4px;
}

/* Améliorer la lisibilité */
::selection {
    background: var(--tchad-gold);
    color: var(--tchad-blue);
}

/* High contrast mode support */
@media (prefers-contrast: high) {
    .stat-card,
    .table-card {
        border-width: 3px;
    }
    
    .badge {
        border-width: 3px;
    }
    
    .btn {
        border: 2px solid currentColor;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* ============================================
   SCROLLBAR PERSONNALISÉE
   ============================================ */

/* Pour Webkit (Chrome, Safari, Edge) */
::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

::-webkit-scrollbar-track {
    background: var(--bg-tertiary);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, var(--tchad-blue) 0%, var(--tchad-gold) 100%);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(135deg, #003a8c 0%, #e6b800 100%);
}

/* Pour Firefox */
* {
    scrollbar-width: thin;
    scrollbar-color: var(--tchad-blue) var(--bg-tertiary);
}

/* ============================================
   ANIMATIONS SUPPLÉMENTAIRES
   ============================================ */

/* Shimmer effect pour le chargement */
@keyframes shimmer {
    0% {
        background-position: -1000px 0;
    }
    100% {
        background-position: 1000px 0;
    }
}

.loading {
    animation: shimmer 2s infinite;
    background: linear-gradient(
        to right,
        var(--bg-secondary) 0%,
        var(--bg-tertiary) 50%,
        var(--bg-secondary) 100%
    );
    background-size: 1000px 100%;
}

/* Effet de brillance sur les cartes */
@keyframes shine {
    from {
        left: -100%;
    }
    to {
        left: 200%;
    }
}

.stat-card:hover::after {
    animation: shine 1.5s ease-in-out;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 817
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 818
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h2>Conventions de Financement</h2>
            <p>Gestion des accords de financement</p>
        </div>
        <a href=\"";
        // line 824
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_new");
        yield "\" class=\"btn btn-primary\">
            <i data-lucide=\"plus\"></i> Nouvelle convention
        </a>
    </div>

    <div class=\"stats-grid\">
        ";
        // line 830
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 830, $this->source); })()), "par_statut", [], "any", false, false, false, 830));
        foreach ($context['_seq'] as $context["statut"] => $context["data"]) {
            // line 831
            yield "        <div class=\"stat-card\">
            <div class=\"stat-value\">";
            // line 832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "nombre", [], "any", false, false, false, 832), "html", null, true);
            yield "</div>
            <div class=\"stat-label\">";
            // line 833
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["statut"], ["_" => " "])), "html", null, true);
            yield "</div>
            <div class=\"stat-amount\">";
            // line 834
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 834), 0, ",", " "), "html", null, true);
            yield " FCFA</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statut'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 837
        yield "    </div>

    <div class=\"table-card\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Intitulé</th>
                    <th>Partenaire</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 852
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conventions"]) || array_key_exists("conventions", $context) ? $context["conventions"] : (function () { throw new RuntimeError('Variable "conventions" does not exist.', 852, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["convention"]) {
            // line 853
            yield "                <tr>
                    <td data-label=\"Code\"><strong>";
            // line 854
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "code", [], "any", false, false, false, 854), "html", null, true);
            yield "</strong></td>
                    <td data-label=\"Intitulé\">";
            // line 855
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "intitule", [], "any", false, false, false, 855), 0, 50), "html", null, true);
            yield "...</td>
                    <td data-label=\"Partenaire\">";
            // line 856
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "partenaire", [], "any", false, false, false, 856), "html", null, true);
            yield "</td>
                    <td data-label=\"Montant\"><strong>";
            // line 857
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "montantFormate", [], "any", false, false, false, 857), "html", null, true);
            yield "</strong></td>
                    <td data-label=\"Statut\"><span class=\"badge badge-";
            // line 858
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutBadgeClass", [], "any", false, false, false, 858), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutLabel", [], "any", false, false, false, 858), "html", null, true);
            yield "</span></td>
                    <td data-label=\"Actions\">
                        <a href=\"";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "id", [], "any", false, false, false, 860)]), "html", null, true);
            yield "\" class=\"btn-sm\">Voir</a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 863
        if (!$context['_iterated']) {
            // line 864
            yield "                <tr><td colspan=\"6\" style=\"text-align: center;\">Aucune convention enregistrée</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['convention'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 866
        yield "            </tbody>
        </table>
    </div>
</div>

<script>
// Initialiser les icônes Lucide
if (typeof lucide !== 'undefined') {
    lucide.createIcons();
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
        return "convention/index.html.twig";
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
        return array (  1021 => 866,  1014 => 864,  1012 => 863,  1004 => 860,  997 => 858,  993 => 857,  989 => 856,  985 => 855,  981 => 854,  978 => 853,  973 => 852,  956 => 837,  947 => 834,  943 => 833,  939 => 832,  936 => 831,  932 => 830,  923 => 824,  915 => 818,  905 => 817,  86 => 4,  76 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Conventions - SIGEP Tchad{% endblock %}
{% block stylesheets %}
<style>
/* ============================================
   SIGEP TCHAD - CONVENTIONS CSS
   Module de gestion des conventions
   ============================================ */

/* Variables CSS - Couleurs du Tchad */
:root {
    /* Couleurs principales */
    --tchad-blue: #002664;
    --tchad-gold: #FECB00;
    --tchad-red: #C60C30;
    
    /* Couleurs de statut */
    --success: #10b981;
    --warning: #f59e0b;
    --danger: #ef4444;
    --info: #3b82f6;
    
    /* Thème clair */
    --bg-primary: #ffffff;
    --bg-secondary: #f8fafc;
    --bg-tertiary: #f1f5f9;
    --text-primary: #1e293b;
    --text-secondary: #475569;
    --text-muted: #94a3b8;
    --border-color: #e2e8f0;
    
    /* Ombres */
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
    
    /* Gradients */
    --accent-gradient: linear-gradient(135deg, var(--tchad-blue) 0%, #003a8c 100%);
    --gold-gradient: linear-gradient(135deg, var(--tchad-gold) 0%, #e6b800 100%);
}

/* Thème sombre */
[data-theme=\"dark\"] {
    --bg-primary: #0f172a;
    --bg-secondary: #1e293b;
    --bg-tertiary: #334155;
    --text-primary: #f1f5f9;
    --text-secondary: #cbd5e1;
    --text-muted: #64748b;
    --border-color: #334155;
}

/* Reset de base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: var(--bg-primary);
    color: var(--text-primary);
    line-height: 1.6;
}

/* ============================================
   LAYOUT DE BASE
   ============================================ */

.content-area {
    padding: 40px;
    max-width: 1600px;
    margin: 0 auto;
    min-height: 100vh;
}

/* ============================================
   PAGE HEADER
   ============================================ */

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 24px;
    border-bottom: 2px solid var(--border-color);
}

.page-title h2 {
    font-size: 2rem;
    font-weight: 800;
    color: var(--text-primary);
    margin-bottom: 8px;
    letter-spacing: -0.5px;
    background: var(--accent-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.page-title p {
    color: var(--text-muted);
    font-size: 1rem;
    font-weight: 500;
}

/* ============================================
   BOUTONS
   ============================================ */

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 28px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    text-decoration: none;
    white-space: nowrap;
    position: relative;
    overflow: hidden;
}

.btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn:hover::before {
    width: 300px;
    height: 300px;
}

.btn i {
    width: 20px;
    height: 20px;
    transition: transform 0.3s;
}

.btn:hover i {
    transform: scale(1.1);
}

.btn-primary {
    background: var(--accent-gradient);
    color: white;
    box-shadow: 0 4px 14px 0 rgba(0, 38, 100, 0.39);
}

.btn-primary:hover {
    box-shadow: 0 6px 20px rgba(0, 38, 100, 0.5);
    transform: translateY(-2px);
}

.btn-sm {
    padding: 8px 16px;
    font-size: 0.875rem;
    border-radius: 8px;
    background: var(--bg-tertiary);
    color: var(--text-primary);
    border: 1px solid var(--border-color);
    transition: all 0.2s;
    text-decoration: none;
    display: inline-block;
}

.btn-sm:hover {
    background: var(--tchad-blue);
    color: white;
    border-color: var(--tchad-blue);
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

/* ============================================
   STATS GRID
   ============================================ */

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 24px;
    margin-bottom: 40px;
}

.stat-card {
    background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    padding: 28px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: default;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--accent-gradient);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-card::after {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0, 38, 100, 0.03) 0%, transparent 70%);
    transform: scale(0);
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0, 38, 100, 0.12);
    border-color: var(--tchad-blue);
}

.stat-card:hover::before {
    transform: scaleX(1);
}

.stat-card:hover::after {
    transform: scale(1);
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--tchad-blue);
    margin-bottom: 8px;
    line-height: 1;
    position: relative;
    z-index: 1;
    letter-spacing: -1px;
}

.stat-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 12px;
    position: relative;
    z-index: 1;
}

.stat-amount {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--tchad-gold);
    position: relative;
    z-index: 1;
    padding: 8px 0;
    border-top: 1px solid var(--border-color);
    margin-top: 12px;
}

/* Animation au chargement */
@keyframes statFadeIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.stat-card {
    animation: statFadeIn 0.6s cubic-bezier(0.4, 0, 0.2, 1) backwards;
}

.stat-card:nth-child(1) { animation-delay: 0.1s; }
.stat-card:nth-child(2) { animation-delay: 0.2s; }
.stat-card:nth-child(3) { animation-delay: 0.3s; }
.stat-card:nth-child(4) { animation-delay: 0.4s; }

/* ============================================
   TABLE CARD
   ============================================ */

.table-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    animation: fadeInUp 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ============================================
   DATA TABLE
   ============================================ */

.data-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
}

.data-table thead {
    background: linear-gradient(to right, var(--bg-tertiary) 0%, var(--bg-secondary) 100%);
}

.data-table thead th {
    padding: 20px 24px;
    text-align: left;
    font-weight: 700;
    font-size: 0.8rem;
    color: var(--text-secondary);
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 2px solid var(--border-color);
    position: sticky;
    top: 0;
    background: var(--bg-tertiary);
    z-index: 10;
}

.data-table tbody tr {
    border-bottom: 1px solid var(--border-color);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.data-table tbody tr::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: var(--tchad-gold);
    transform: scaleY(0);
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.data-table tbody tr:hover {
    background: linear-gradient(to right, rgba(0, 38, 100, 0.03) 0%, transparent 100%);
    transform: translateX(4px);
}

.data-table tbody tr:hover::before {
    transform: scaleY(1);
}

.data-table tbody td {
    padding: 20px 24px;
    font-size: 0.95rem;
    color: var(--text-primary);
    vertical-align: middle;
}

.data-table tbody td strong {
    font-weight: 700;
    color: var(--tchad-blue);
}

/* ============================================
   BADGES
   ============================================ */

.badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.badge::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 8px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: currentColor;
    transform: translateY(-50%);
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse {
    0%, 100% {
        opacity: 1;
        transform: translateY(-50%) scale(1);
    }
    50% {
        opacity: 0.5;
        transform: translateY(-50%) scale(1.1);
    }
}

.badge:hover {
    transform: translateY(-2px) scale(1.05);
    box-shadow: var(--shadow-md);
}

/* Badge Success (En cours) */
.badge-success {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
    color: #059669;
    border: 2px solid rgba(16, 185, 129, 0.3);
    padding-left: 20px;
}

/* Badge Warning (Suspendue) */
.badge-warning {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.15) 0%, rgba(245, 158, 11, 0.05) 100%);
    color: #d97706;
    border: 2px solid rgba(245, 158, 11, 0.3);
    padding-left: 20px;
}

/* Badge Danger (Annulée) */
.badge-danger {
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(239, 68, 68, 0.05) 100%);
    color: #dc2626;
    border: 2px solid rgba(239, 68, 68, 0.3);
    padding-left: 20px;
}

/* Badge Info (Clôturée) */
.badge-info {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.05) 100%);
    color: #2563eb;
    border: 2px solid rgba(59, 130, 246, 0.3);
    padding-left: 20px;
}

/* Badge Secondary (Autres statuts) */
.badge-secondary {
    background: linear-gradient(135deg, rgba(107, 114, 128, 0.15) 0%, rgba(107, 114, 128, 0.05) 100%);
    color: #6b7280;
    border: 2px solid rgba(107, 114, 128, 0.3);
    padding-left: 20px;
}

/* ============================================
   ÉTAT VIDE (Empty State)
   ============================================ */

.data-table tbody tr:only-child td[colspan] {
    padding: 80px 40px;
    text-align: center;
    color: var(--text-muted);
    font-size: 1rem;
    background: linear-gradient(135deg, var(--bg-tertiary) 0%, var(--bg-secondary) 100%);
}

.data-table tbody tr:only-child td[colspan]::before {
    content: '📋';
    display: block;
    font-size: 4rem;
    margin-bottom: 16px;
    opacity: 0.3;
}

/* ============================================
   RESPONSIVE DESIGN
   ============================================ */

@media (max-width: 1024px) {
    .content-area {
        padding: 32px;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .content-area {
        padding: 20px;
    }
    
    .page-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }
    
    .page-title h2 {
        font-size: 1.5rem;
    }
    
    .btn-primary {
        width: 100%;
        justify-content: center;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .stat-card {
        padding: 20px;
    }
    
    .stat-value {
        font-size: 2rem;
    }
    
    /* Table responsive - Empiler les colonnes */
    .table-card {
        border-radius: 16px;
    }
    
    .data-table {
        font-size: 0.875rem;
    }
    
    .data-table thead {
        display: none;
    }
    
    .data-table tbody tr {
        display: block;
        margin-bottom: 16px;
        background: var(--bg-primary);
        border-radius: 16px;
        border: 2px solid var(--border-color);
        padding: 16px;
        box-shadow: var(--shadow-sm);
    }
    
    .data-table tbody tr::before {
        display: none;
    }
    
    .data-table tbody tr:hover {
        transform: none;
        background: var(--bg-primary);
        box-shadow: var(--shadow-md);
    }
    
    .data-table tbody td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border: none;
    }
    
    .data-table tbody td::before {
        content: attr(data-label);
        font-weight: 700;
        color: var(--text-muted);
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .data-table tbody td:first-child::before {
        content: 'Code';
    }
    
    .data-table tbody td:nth-child(2)::before {
        content: 'Intitulé';
    }
    
    .data-table tbody td:nth-child(3)::before {
        content: 'Partenaire';
    }
    
    .data-table tbody td:nth-child(4)::before {
        content: 'Montant';
    }
    
    .data-table tbody td:nth-child(5)::before {
        content: 'Statut';
    }
    
    .data-table tbody td:nth-child(6)::before {
        content: 'Actions';
    }
    
    .badge {
        font-size: 0.7rem;
        padding: 6px 12px;
    }
}

@media (max-width: 480px) {
    .stat-value {
        font-size: 1.75rem;
    }
    
    .stat-label {
        font-size: 0.75rem;
    }
    
    .stat-amount {
        font-size: 1rem;
    }
    
    .data-table tbody td {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
    }
    
    .data-table tbody td::before {
        margin-bottom: 4px;
    }
}

/* ============================================
   PRINT STYLES
   ============================================ */

@media print {
    .btn-primary,
    .btn-sm {
        display: none !important;
    }
    
    .content-area {
        padding: 0;
    }
    
    .page-header {
        border-bottom: 2px solid #000;
        margin-bottom: 20px;
    }
    
    .page-title h2 {
        color: #000 !important;
        -webkit-text-fill-color: #000 !important;
    }
    
    .table-card {
        box-shadow: none;
        border: 1px solid #ddd;
    }
    
    .data-table tbody tr:hover {
        background: transparent;
        transform: none;
    }
    
    .badge {
        border: 1px solid currentColor;
    }
}

/* ============================================
   ACCESSIBILITÉ
   ============================================ */

/* Focus visible pour la navigation au clavier */
*:focus-visible {
    outline: 3px solid var(--tchad-gold);
    outline-offset: 3px;
    border-radius: 4px;
}

.btn:focus-visible {
    outline-color: rgba(254, 203, 0, 0.5);
    outline-width: 4px;
}

/* Améliorer la lisibilité */
::selection {
    background: var(--tchad-gold);
    color: var(--tchad-blue);
}

/* High contrast mode support */
@media (prefers-contrast: high) {
    .stat-card,
    .table-card {
        border-width: 3px;
    }
    
    .badge {
        border-width: 3px;
    }
    
    .btn {
        border: 2px solid currentColor;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* ============================================
   SCROLLBAR PERSONNALISÉE
   ============================================ */

/* Pour Webkit (Chrome, Safari, Edge) */
::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

::-webkit-scrollbar-track {
    background: var(--bg-tertiary);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, var(--tchad-blue) 0%, var(--tchad-gold) 100%);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(135deg, #003a8c 0%, #e6b800 100%);
}

/* Pour Firefox */
* {
    scrollbar-width: thin;
    scrollbar-color: var(--tchad-blue) var(--bg-tertiary);
}

/* ============================================
   ANIMATIONS SUPPLÉMENTAIRES
   ============================================ */

/* Shimmer effect pour le chargement */
@keyframes shimmer {
    0% {
        background-position: -1000px 0;
    }
    100% {
        background-position: 1000px 0;
    }
}

.loading {
    animation: shimmer 2s infinite;
    background: linear-gradient(
        to right,
        var(--bg-secondary) 0%,
        var(--bg-tertiary) 50%,
        var(--bg-secondary) 100%
    );
    background-size: 1000px 100%;
}

/* Effet de brillance sur les cartes */
@keyframes shine {
    from {
        left: -100%;
    }
    to {
        left: 200%;
    }
}

.stat-card:hover::after {
    animation: shine 1.5s ease-in-out;
}
</style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h2>Conventions de Financement</h2>
            <p>Gestion des accords de financement</p>
        </div>
        <a href=\"{{ path('app_convention_new') }}\" class=\"btn btn-primary\">
            <i data-lucide=\"plus\"></i> Nouvelle convention
        </a>
    </div>

    <div class=\"stats-grid\">
        {% for statut, data in statistiques.par_statut %}
        <div class=\"stat-card\">
            <div class=\"stat-value\">{{ data.nombre }}</div>
            <div class=\"stat-label\">{{ statut|replace({'_': ' '})|title }}</div>
            <div class=\"stat-amount\">{{ data.total|number_format(0, ',', ' ') }} FCFA</div>
        </div>
        {% endfor %}
    </div>

    <div class=\"table-card\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Intitulé</th>
                    <th>Partenaire</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for convention in conventions %}
                <tr>
                    <td data-label=\"Code\"><strong>{{ convention.code }}</strong></td>
                    <td data-label=\"Intitulé\">{{ convention.intitule|slice(0, 50) }}...</td>
                    <td data-label=\"Partenaire\">{{ convention.partenaire }}</td>
                    <td data-label=\"Montant\"><strong>{{ convention.montantFormate }}</strong></td>
                    <td data-label=\"Statut\"><span class=\"badge badge-{{ convention.statutBadgeClass }}\">{{ convention.statutLabel }}</span></td>
                    <td data-label=\"Actions\">
                        <a href=\"{{ path('app_convention_show', {'id': convention.id}) }}\" class=\"btn-sm\">Voir</a>
                    </td>
                </tr>
                {% else %}
                <tr><td colspan=\"6\" style=\"text-align: center;\">Aucune convention enregistrée</td></tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<script>
// Initialiser les icônes Lucide
if (typeof lucide !== 'undefined') {
    lucide.createIcons();
}
</script>
{% endblock %}", "convention/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\convention\\index.html.twig");
    }
}
