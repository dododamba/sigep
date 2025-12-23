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

/* dashboard_top_management.html.twig */
class __TwigTemplate_c002c0914b4d5894765747fd159046c4 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_top_management.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SIGEP - Système Intégré de Gestion des Projets Publics | République du Tchad</title>
    
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Lucide Icons -->
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    
    <!-- Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    
    <style>
        /* ============================================
           CSS VARIABLES & THEME - COULEURS ARMOIRIE DU TCHAD
           ============================================ */
        :root {
            /* Couleurs de l'Armoirie - Bleu dominant */
            --primary-900: #001a33;
            --primary-800: #002a54;
            --primary-700: #003366;
            --primary-600: #004080;
            --primary-500: #004d99;
            --primary-400: #3366aa;
            --primary-300: #6699cc;
            --primary-200: #99bbdd;
            --primary-100: #ccddef;
            --primary-50: #e6eef7;
            
            /* Accent doré de l'Armoirie */
            --gold-600: #b8860b;
            --gold-500: #daa520;
            --gold-400: #e6b833;
            --gold-300: #f0cc5c;
            --gold-200: #f7dd8c;
            --gold-100: #fcf0c8;
            
            /* Rouge de l'Armoirie */
            --red-700: #8b1a1a;
            --red-600: #a52a2a;
            --red-500: #c41e3a;
            --red-400: #dc3545;
            --red-300: #e66a7a;
            --red-100: #fce4e8;
            
            /* États */
            --success-600: #0d7a3c;
            --success-500: #10b981;
            --success-400: #34d399;
            --success-100: #d1fae5;
            
            --warning-600: #b45309;
            --warning-500: #f59e0b;
            --warning-400: #fbbf24;
            --warning-100: #fef3c7;
            
            --danger-600: #b91c1c;
            --danger-500: #ef4444;
            --danger-400: #f87171;
            --danger-100: #fee2e2;
            
            /* Neutres */
            --gray-900: #111827;
            --gray-800: #1f2937;
            --gray-700: #374151;
            --gray-600: #4b5563;
            --gray-500: #6b7280;
            --gray-400: #9ca3af;
            --gray-300: #d1d5db;
            --gray-200: #e5e7eb;
            --gray-100: #f3f4f6;
            --gray-50: #f9fafb;
            --white: #ffffff;
            
            /* Typography */
            --font-display: 'Playfair Display', Georgia, serif;
            --font-body: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            
            /* Spacing */
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-5: 1.25rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --space-10: 2.5rem;
            --space-12: 3rem;
            --space-16: 4rem;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --shadow-gold: 0 4px 14px 0 rgb(218 165 32 / 0.35);
            --shadow-red: 0 4px 14px 0 rgb(196 30 58 / 0.25);
            
            /* Border Radius */
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-2xl: 1.5rem;
            
            /* Transitions */
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-base: 250ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: 350ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ============================================
           RESET & BASE
           ============================================ */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            font-size: 0.9375rem;
            line-height: 1.6;
            color: var(--gray-800);
            background: linear-gradient(135deg, var(--primary-50) 0%, var(--gray-100) 50%, var(--gold-100) 100%);
            min-height: 100vh;
        }

        /* ============================================
           HEADER - Style Armoirie
           ============================================ */
        .header {
            background: linear-gradient(135deg, var(--primary-800) 0%, var(--primary-900) 100%);
            color: var(--white);
            padding: var(--space-4) var(--space-8);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-xl);
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500) 0%, var(--gold-500) 33%, var(--gold-400) 66%, var(--red-500) 100%);
        }

        .header-content {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: var(--space-6);
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .logo-emblem {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .logo-emblem img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-name {
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: var(--white);
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }

        .brand-subtitle {
            font-size: 0.75rem;
            color: var(--gold-400);
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .header-filters {
            display: flex;
            align-items: center;
            gap: var(--space-3);
            flex-wrap: wrap;
        }

        .filter-group {
            position: relative;
        }

        .filter-select {
            appearance: none;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(218, 165, 32, 0.3);
            border-radius: var(--radius-md);
            padding: var(--space-2) var(--space-10) var(--space-2) var(--space-3);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--white);
            cursor: pointer;
            transition: all var(--transition-fast);
            min-width: 160px;
        }

        .filter-select:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--gold-400);
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--gold-400);
            box-shadow: 0 0 0 3px rgba(218, 165, 32, 0.25);
        }

        .filter-select option {
            background: var(--primary-800);
            color: var(--white);
        }

        .filter-icon {
            position: absolute;
            right: var(--space-3);
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: var(--gold-400);
        }

        .header-user {
            display: flex;
            align-items: center;
            gap: var(--space-3);
            padding: var(--space-2) var(--space-4);
            background: rgba(218, 165, 32, 0.15);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(218, 165, 32, 0.3);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--gold-400) 0%, var(--gold-600) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-gold);
        }

        .user-avatar svg {
            width: 22px;
            height: 22px;
            color: var(--primary-900);
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--white);
        }

        .user-role {
            font-size: 0.75rem;
            color: var(--gold-400);
        }

        /* ============================================
           MAIN CONTENT
           ============================================ */
        .main-content {
            max-width: 1600px;
            margin: 0 auto;
            padding: var(--space-8);
        }

        .page-title {
            margin-bottom: var(--space-8);
        }

        .page-title h1 {
            font-family: var(--font-display);
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-800);
            margin-bottom: var(--space-2);
        }

        .page-title p {
            color: var(--gray-600);
            font-size: 1rem;
        }

        .last-update {
            display: inline-flex;
            align-items: center;
            gap: var(--space-2);
            margin-top: var(--space-2);
            padding: var(--space-1) var(--space-3);
            background: var(--white);
            border-radius: var(--radius-md);
            font-size: 0.8125rem;
            color: var(--gray-500);
            border: 1px solid var(--gold-200);
        }

        .last-update svg {
            width: 14px;
            height: 14px;
            color: var(--gold-500);
        }

        /* ============================================
           KPI CARDS
           ============================================ */
        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: var(--space-5);
            margin-bottom: var(--space-8);
        }

        .kpi-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: var(--space-6);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
            position: relative;
            overflow: hidden;
            transition: all var(--transition-base);
        }

        .kpi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--kpi-color, var(--primary-500));
        }

        .kpi-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .kpi-card.gold { --kpi-color: var(--gold-500); }
        .kpi-card.success { --kpi-color: var(--success-500); }
        .kpi-card.warning { --kpi-color: var(--warning-500); }
        .kpi-card.danger { --kpi-color: var(--red-500); }
        .kpi-card.primary { --kpi-color: var(--primary-600); }

        .kpi-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: var(--space-4);
        }

        .kpi-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--kpi-bg, var(--primary-100));
        }

        .kpi-card.gold .kpi-icon { --kpi-bg: var(--gold-100); color: var(--gold-600); }
        .kpi-card.success .kpi-icon { --kpi-bg: var(--success-100); color: var(--success-600); }
        .kpi-card.warning .kpi-icon { --kpi-bg: var(--warning-100); color: var(--warning-600); }
        .kpi-card.danger .kpi-icon { --kpi-bg: var(--red-100); color: var(--red-600); }
        .kpi-card.primary .kpi-icon { --kpi-bg: var(--primary-100); color: var(--primary-600); }

        .kpi-icon svg {
            width: 24px;
            height: 24px;
        }

        .kpi-trend {
            display: flex;
            align-items: center;
            gap: var(--space-1);
            font-size: 0.75rem;
            font-weight: 600;
            padding: var(--space-1) var(--space-2);
            border-radius: var(--radius-sm);
        }

        .kpi-trend.up {
            background: var(--success-100);
            color: var(--success-600);
        }

        .kpi-trend.down {
            background: var(--red-100);
            color: var(--red-600);
        }

        .kpi-trend svg {
            width: 12px;
            height: 12px;
        }

        .kpi-value {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--primary-800);
            line-height: 1.2;
            margin-bottom: var(--space-1);
        }

        .kpi-label {
            font-size: 0.875rem;
            color: var(--gray-600);
            font-weight: 500;
        }

        .kpi-sublabel {
            font-size: 0.75rem;
            color: var(--gray-400);
            margin-top: var(--space-2);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        /* ============================================
           CHARTS SECTION
           ============================================ */
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--space-6);
            margin-bottom: var(--space-8);
        }

        .chart-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: var(--space-6);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
        }

        .chart-card.full-width {
            grid-column: span 2;
        }

        .chart-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: var(--space-5);
        }

        .chart-title {
            font-family: var(--font-display);
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .chart-title svg {
            width: 20px;
            height: 20px;
            color: var(--gold-500);
        }

        .chart-legend {
            display: flex;
            gap: var(--space-4);
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            font-size: 0.8125rem;
            color: var(--gray-600);
        }

        .legend-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .chart-container {
            position: relative;
            height: 280px;
        }

        /* ============================================
           DATA TABLE
           ============================================ */
        .table-section {
            background: var(--white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
            overflow: hidden;
            margin-bottom: var(--space-8);
        }

        .table-header {
            padding: var(--space-6);
            border-bottom: 2px solid var(--gold-400);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: var(--space-4);
            background: linear-gradient(to right, var(--primary-50), var(--white));
        }

        .table-title {
            font-family: var(--font-display);
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            align-items: center;
            gap: var(--space-3);
        }

        .table-title svg {
            color: var(--gold-500);
        }

        .table-actions {
            display: flex;
            align-items: center;
            gap: var(--space-3);
        }

        .search-box {
            position: relative;
        }

        .search-input {
            width: 280px;
            padding: var(--space-2) var(--space-4) var(--space-2) var(--space-10);
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-lg);
            font-family: var(--font-body);
            font-size: 0.875rem;
            transition: all var(--transition-fast);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-400);
            box-shadow: 0 0 0 3px rgba(0, 77, 153, 0.15);
        }

        .search-icon {
            position: absolute;
            left: var(--space-3);
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
        }

        .filter-btn {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-2) var(--space-4);
            background: var(--gray-100);
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-lg);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--gray-700);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .filter-btn:hover {
            background: var(--gray-200);
        }

        .export-btn {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-2) var(--space-4);
            background: linear-gradient(135deg, var(--primary-600) 0%, var(--primary-700) 100%);
            border: none;
            border-radius: var(--radius-lg);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--white);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .export-btn:hover {
            background: linear-gradient(135deg, var(--primary-700) 0%, var(--primary-800) 100%);
            transform: translateY(-1px);
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            background: var(--primary-50);
            padding: var(--space-4) var(--space-5);
            text-align: left;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--primary-700);
            border-bottom: 1px solid var(--gray-200);
            white-space: nowrap;
        }

        .data-table th.sortable {
            cursor: pointer;
            user-select: none;
        }

        .data-table th.sortable:hover {
            background: var(--primary-100);
        }

        .data-table td {
            padding: var(--space-4) var(--space-5);
            border-bottom: 1px solid var(--gray-100);
            font-size: 0.875rem;
            color: var(--gray-700);
        }

        .data-table tbody tr {
            transition: background var(--transition-fast);
        }

        .data-table tbody tr:hover {
            background: var(--primary-50);
        }

        .project-name {
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            flex-direction: column;
            gap: var(--space-1);
        }

        .project-code {
            font-size: 0.75rem;
            color: var(--gold-600);
            font-weight: 500;
        }

        .sector-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--space-1);
            padding: var(--space-1) var(--space-2);
            background: var(--primary-100);
            color: var(--primary-700);
            border-radius: var(--radius-sm);
            font-size: 0.75rem;
            font-weight: 500;
        }

        .progress-cell {
            min-width: 140px;
        }

        .progress-bar {
            height: 8px;
            background: var(--gray-200);
            border-radius: var(--radius-sm);
            overflow: hidden;
            margin-bottom: var(--space-1);
        }

        .progress-fill {
            height: 100%;
            border-radius: var(--radius-sm);
            transition: width var(--transition-slow);
        }

        .progress-text {
            font-size: 0.75rem;
            color: var(--gray-500);
        }

        .budget-cell {
            text-align: right;
            white-space: nowrap;
        }

        .budget-amount {
            font-weight: 600;
            color: var(--primary-800);
        }

        .budget-currency {
            font-size: 0.75rem;
            color: var(--gray-400);
        }

        .partners-cell {
            max-width: 180px;
        }

        .partner-tags {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-1);
        }

        .partner-tag {
            padding: var(--space-1) var(--space-2);
            background: var(--gold-100);
            color: var(--gold-600);
            border-radius: var(--radius-sm);
            font-size: 0.6875rem;
            font-weight: 600;
        }

        .partner-tag.more {
            background: var(--gray-200);
            color: var(--gray-600);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--space-1);
            padding: var(--space-1) var(--space-3);
            border-radius: var(--radius-md);
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-badge.ok {
            background: var(--success-100);
            color: var(--success-600);
        }

        .status-badge.warning {
            background: var(--warning-100);
            color: var(--warning-600);
        }

        .status-badge.critical {
            background: var(--red-100);
            color: var(--red-600);
        }

        .status-badge svg {
            width: 12px;
            height: 12px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: var(--space-1);
            padding: var(--space-2) var(--space-3);
            background: var(--primary-100);
            border: none;
            border-radius: var(--radius-md);
            font-family: var(--font-body);
            font-size: 0.8125rem;
            color: var(--primary-700);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .action-btn:hover {
            background: var(--primary-200);
            color: var(--primary-800);
        }

        .action-btn svg {
            width: 14px;
            height: 14px;
        }

        /* Pagination */
        .table-footer {
            padding: var(--space-4) var(--space-6);
            border-top: 1px solid var(--gray-200);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--gray-50);
        }

        .pagination-info {
            font-size: 0.875rem;
            color: var(--gray-600);
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .page-btn {
            min-width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gray-300);
            background: var(--white);
            border-radius: var(--radius-md);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--gray-700);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .page-btn:hover:not(:disabled) {
            background: var(--gray-100);
            border-color: var(--primary-400);
        }

        .page-btn.active {
            background: var(--primary-600);
            border-color: var(--primary-600);
            color: var(--white);
        }

        .page-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* ============================================
           PROJECT MODAL
           ============================================ */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 42, 84, 0.7);
            backdrop-filter: blur(4px);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--space-6);
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-base);
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            background: var(--white);
            border-radius: var(--radius-2xl);
            width: 100%;
            max-width: 1000px;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            transform: scale(0.95) translateY(20px);
            transition: transform var(--transition-base);
        }

        .modal-overlay.active .modal {
            transform: scale(1) translateY(0);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-700) 0%, var(--primary-800) 100%);
            color: var(--white);
            padding: var(--space-6);
            position: relative;
        }

        .modal-header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500) 0%, var(--gold-400) 50%, var(--red-500) 100%);
        }

        .modal-close {
            position: absolute;
            top: var(--space-4);
            right: var(--space-4);
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 50%;
            color: var(--white);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .modal-close:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .modal-project-title {
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: var(--space-2);
        }

        .modal-project-meta {
            display: flex;
            align-items: center;
            gap: var(--space-4);
            font-size: 0.875rem;
            color: var(--primary-200);
        }

        .modal-project-meta span {
            display: flex;
            align-items: center;
            gap: var(--space-1);
        }

        .modal-project-meta svg {
            width: 14px;
            height: 14px;
        }

        .modal-body {
            max-height: calc(90vh - 200px);
            overflow-y: auto;
            padding: var(--space-6);
        }

        .modal-tabs {
            display: flex;
            gap: var(--space-2);
            margin-bottom: var(--space-6);
            border-bottom: 1px solid var(--gray-200);
            padding-bottom: var(--space-3);
        }

        .modal-tab {
            padding: var(--space-2) var(--space-4);
            background: none;
            border: none;
            font-family: var(--font-body);
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-500);
            cursor: pointer;
            border-radius: var(--radius-md);
            transition: all var(--transition-fast);
        }

        .modal-tab:hover {
            background: var(--gray-100);
            color: var(--gray-700);
        }

        .modal-tab.active {
            background: var(--primary-100);
            color: var(--primary-700);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--space-6);
        }

        .info-block {
            background: var(--gray-50);
            border-radius: var(--radius-lg);
            padding: var(--space-5);
            border: 1px solid var(--gray-100);
        }

        .info-block.full {
            grid-column: span 2;
        }

        .info-block-title {
            font-family: var(--font-display);
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-800);
            margin-bottom: var(--space-4);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .info-block-title svg {
            width: 18px;
            height: 18px;
            color: var(--gold-500);
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: var(--space-2) 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-size: 0.875rem;
            color: var(--gray-500);
        }

        .info-value {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--primary-800);
            text-align: right;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: var(--space-8);
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 12px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--primary-200);
        }

        .timeline-item {
            position: relative;
            padding-bottom: var(--space-6);
        }

        .timeline-item:last-child {
            padding-bottom: 0;
        }

        .timeline-dot {
            position: absolute;
            left: calc(-1 * var(--space-8) + 6px);
            top: 4px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--white);
            border: 3px solid var(--gray-300);
        }

        .timeline-item.completed .timeline-dot {
            background: var(--success-500);
            border-color: var(--success-500);
        }

        .timeline-item.in-progress .timeline-dot {
            background: var(--gold-500);
            border-color: var(--gold-500);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(218, 165, 32, 0.5); }
            50% { box-shadow: 0 0 0 8px rgba(218, 165, 32, 0); }
        }

        .timeline-item.pending .timeline-dot {
            background: var(--gray-200);
            border-color: var(--gray-300);
        }

        .timeline-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: var(--space-2);
        }

        .timeline-title {
            font-weight: 600;
            color: var(--primary-800);
        }

        .timeline-date {
            font-size: 0.75rem;
            color: var(--gold-600);
            font-weight: 500;
        }

        .timeline-content {
            font-size: 0.875rem;
            color: var(--gray-600);
        }

        /* Finance Table */
        .finance-table {
            width: 100%;
            border-collapse: collapse;
        }

        .finance-table th,
        .finance-table td {
            padding: var(--space-3);
            text-align: left;
            border-bottom: 1px solid var(--gray-200);
        }

        .finance-table th {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--primary-700);
            background: var(--primary-50);
        }

        .finance-table td {
            font-size: 0.875rem;
            color: var(--gray-700);
        }

        .finance-table .amount {
            font-weight: 600;
            color: var(--primary-800);
            text-align: right;
        }

        /* Audit Items */
        .audit-item {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: var(--space-4);
            margin-bottom: var(--space-3);
        }

        .audit-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: var(--space-2);
        }

        .audit-type {
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .audit-type svg {
            width: 16px;
            height: 16px;
            color: var(--gold-500);
        }

        .audit-date {
            font-size: 0.75rem;
            color: var(--gray-500);
        }

        .audit-content {
            font-size: 0.875rem;
            color: var(--gray-600);
            margin-bottom: var(--space-2);
        }

        .audit-status {
            display: inline-flex;
            align-items: center;
            gap: var(--space-1);
            font-size: 0.75rem;
            font-weight: 500;
        }

        .audit-status.conforme {
            color: var(--success-600);
        }

        .audit-status.reserve {
            color: var(--warning-600);
        }

        .audit-status.non-conforme {
            color: var(--red-600);
        }

        /* ============================================
           FOOTER
           ============================================ */
        .footer {
            background: linear-gradient(135deg, var(--primary-800) 0%, var(--primary-900) 100%);
            color: var(--white);
            padding: var(--space-6) var(--space-8);
            margin-top: var(--space-8);
        }

        .footer-content {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: var(--space-3);
        }

        .footer-logo {
            width: 40px;
            height: 40px;
        }

        .footer-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .footer-text {
            font-size: 0.875rem;
            color: var(--primary-300);
        }

        .footer-motto {
            font-size: 0.875rem;
            color: var(--gold-400);
            font-weight: 500;
            letter-spacing: 1px;
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1200px) {
            .charts-grid {
                grid-template-columns: 1fr;
            }
            
            .chart-card.full-width {
                grid-column: span 1;
            }
        }

        @media (max-width: 1024px) {
            .header-content {
                flex-wrap: wrap;
            }
            
            .header-filters {
                order: 3;
                width: 100%;
                justify-content: flex-start;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .info-block.full {
                grid-column: span 1;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                padding: var(--space-4);
            }
            
            .kpi-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .table-header {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-input {
                width: 100%;
            }
            
            .modal {
                max-height: 100vh;
                border-radius: 0;
            }
        }

        @media (max-width: 480px) {
            .kpi-grid {
                grid-template-columns: 1fr;
            }
            
            .header-brand {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <!-- ============================================
         HEADER
         ============================================ -->
    <header class=\"header\">
        <div class=\"header-content\">
            <div class=\"header-brand\">
                <div class=\"logo-container\">
                    <div class=\"logo-emblem\">
                        <img src=\"armoirie-tchad.png\" alt=\"Armoirie du Tchad\">
                    </div>
                    <div class=\"brand-text\">
                        <span class=\"brand-name\">SIGEP Tchad</span>
                        <span class=\"brand-subtitle\">Système Intégré de Gestion des Projets Publics</span>
                    </div>
                </div>
            </div>

            <div class=\"header-filters\">
                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterYear\">
                        <option value=\"2025\">Année 2025</option>
                        <option value=\"2024\" selected>Année 2024</option>
                        <option value=\"2023\">Année 2023</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterSector\">
                        <option value=\"\">Tous les secteurs</option>
                        <option value=\"infrastructure\">Infrastructure</option>
                        <option value=\"education\">Éducation</option>
                        <option value=\"sante\">Santé</option>
                        <option value=\"agriculture\">Agriculture</option>
                        <option value=\"energie\">Énergie</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterRegion\">
                        <option value=\"\">Toutes les régions</option>
                        <option value=\"ndjamena\">N'Djamena</option>
                        <option value=\"logone\">Logone Oriental</option>
                        <option value=\"ouaddai\">Ouaddaï</option>
                        <option value=\"mayo-kebbi\">Mayo-Kebbi Est</option>
                        <option value=\"lac\">Lac</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterPartner\">
                        <option value=\"\">Tous les partenaires</option>
                        <option value=\"ue\">Union Européenne</option>
                        <option value=\"bm\">Banque Mondiale</option>
                        <option value=\"bad\">BAD</option>
                        <option value=\"afd\">AFD</option>
                        <option value=\"pnud\">PNUD</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>
            </div>

            <div class=\"header-user\">
                <div class=\"user-avatar\">
                    <i data-lucide=\"user\"></i>
                </div>
                <div class=\"user-info\">
                    <span class=\"user-name\">Amadou Mahamat</span>
                    <span class=\"user-role\">Contrôleur - Min. Finances</span>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================
         MAIN CONTENT
         ============================================ -->
    <main class=\"main-content\">
        <!-- Page Title -->
        <div class=\"page-title\">
            <h1>Tableau de Bord Central</h1>
            <p>Vue consolidée des projets financés par l'État et les partenaires techniques et financiers</p>
            <div class=\"last-update\">
                <i data-lucide=\"clock\"></i>
                Dernière mise à jour : 15 décembre 2024 à 14h30
            </div>
        </div>

        <!-- KPI Cards -->
        <section class=\"kpi-grid\" id=\"kpiGrid\">
            <div class=\"kpi-card primary\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"folder-kanban\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +12%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"147\">0</div>
                <div class=\"kpi-label\">Projets Total</div>
                <div class=\"kpi-sublabel\">
                    <span>🟢 89 en cours</span>
                    <span>✅ 42 terminés</span>
                    <span>🔴 16 en retard</span>
                </div>
            </div>

            <div class=\"kpi-card gold\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"banknote\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +8%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"842\" data-suffix=\" Mds\">0</div>
                <div class=\"kpi-label\">Budget Total (FCFA)</div>
                <div class=\"kpi-sublabel\">
                    Prévisions annuelles 2024
                </div>
            </div>

            <div class=\"kpi-card success\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"wallet\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +15%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"623\" data-suffix=\" Mds\">0</div>
                <div class=\"kpi-label\">Budget Engagé</div>
                <div class=\"kpi-sublabel\">
                    74% du budget total
                </div>
            </div>

            <div class=\"kpi-card warning\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"credit-card\"></i>
                    </div>
                    <div class=\"kpi-trend down\">
                        <i data-lucide=\"trending-down\"></i>
                        -3%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"418\" data-suffix=\" Mds\">0</div>
                <div class=\"kpi-label\">Budget Décaissé</div>
                <div class=\"kpi-sublabel\">
                    67% du budget engagé
                </div>
            </div>

            <div class=\"kpi-card primary\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"percent\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +5%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"68\" data-suffix=\"%\">0</div>
                <div class=\"kpi-label\">Taux d'Exécution Moyen</div>
                <div class=\"kpi-sublabel\">
                    Objectif annuel : 85%
                </div>
            </div>

            <div class=\"kpi-card gold\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"handshake\"></i>
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"24\">0</div>
                <div class=\"kpi-label\">Partenaires Actifs</div>
                <div class=\"kpi-sublabel\">
                    Bailleurs & PTF
                </div>
            </div>

            <div class=\"kpi-card success\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"building-2\"></i>
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"186\">0</div>
                <div class=\"kpi-label\">Entreprises Exécutantes</div>
                <div class=\"kpi-sublabel\">
                    Prestataires et fournisseurs
                </div>
            </div>

            <div class=\"kpi-card danger\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"alert-triangle\"></i>
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"23\">0</div>
                <div class=\"kpi-label\">Alertes Actives</div>
                <div class=\"kpi-sublabel\">
                    Retards et blocages
                </div>
            </div>
        </section>

        <!-- Charts Section -->
        <section class=\"charts-grid\">
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">
                        <i data-lucide=\"pie-chart\"></i>
                        Répartition des Financements par Partenaire
                    </h3>
                </div>
                <div class=\"chart-container\">
                    <canvas id=\"chartPartners\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">
                        <i data-lucide=\"bar-chart-3\"></i>
                        Budget par Secteur
                    </h3>
                </div>
                <div class=\"chart-container\">
                    <canvas id=\"chartSectors\"></canvas>
                </div>
            </div>

            <div class=\"chart-card full-width\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">
                        <i data-lucide=\"line-chart\"></i>
                        Évolution du Taux d'Exécution (2024)
                    </h3>
                    <div class=\"chart-legend\">
                        <div class=\"legend-item\">
                            <span class=\"legend-dot\" style=\"background: #004d99;\"></span>
                            Budget prévisionnel
                        </div>
                        <div class=\"legend-item\">
                            <span class=\"legend-dot\" style=\"background: #10b981;\"></span>
                            Budget réel décaissé
                        </div>
                    </div>
                </div>
                <div class=\"chart-container\">
                    <canvas id=\"chartExecution\"></canvas>
                </div>
            </div>
        </section>

        <!-- Data Table -->
        <section class=\"table-section\">
            <div class=\"table-header\">
                <h2 class=\"table-title\">
                    <i data-lucide=\"layout-list\"></i>
                    Portefeuille des Projets
                </h2>
                <div class=\"table-actions\">
                    <div class=\"search-box\">
                        <i data-lucide=\"search\" class=\"search-icon\"></i>
                        <input type=\"text\" class=\"search-input\" id=\"searchInput\" placeholder=\"Rechercher un projet...\">
                    </div>
                    <button class=\"filter-btn\">
                        <i data-lucide=\"sliders-horizontal\"></i>
                        Filtres avancés
                    </button>
                    <button class=\"export-btn\">
                        <i data-lucide=\"download\"></i>
                        Exporter
                    </button>
                </div>
            </div>
            <div class=\"table-wrapper\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th class=\"sortable\" data-sort=\"name\">Projet</th>
                            <th class=\"sortable\" data-sort=\"sector\">Secteur</th>
                            <th class=\"sortable\" data-sort=\"region\">Région</th>
                            <th class=\"sortable\" data-sort=\"progress\">Avancement</th>
                            <th class=\"sortable\" data-sort=\"budget\">Budget Total</th>
                            <th>Partenaires</th>
                            <th class=\"sortable\" data-sort=\"status\">Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"projectsTableBody\">
                        <!-- Data populated by JavaScript -->
                    </tbody>
                </table>
            </div>
            <div class=\"table-footer\">
                <div class=\"pagination-info\">
                    Affichage de <strong>1-10</strong> sur <strong>147</strong> projets
                </div>
                <div class=\"pagination\">
                    <button class=\"page-btn\" disabled>
                        <i data-lucide=\"chevron-left\"></i>
                    </button>
                    <button class=\"page-btn active\">1</button>
                    <button class=\"page-btn\">2</button>
                    <button class=\"page-btn\">3</button>
                    <button class=\"page-btn\">...</button>
                    <button class=\"page-btn\">15</button>
                    <button class=\"page-btn\">
                        <i data-lucide=\"chevron-right\"></i>
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer class=\"footer\">
        <div class=\"footer-content\">
            <div class=\"footer-brand\">
                <div class=\"footer-logo\">
                    <img src=\"armoirie-tchad.png\" alt=\"Armoirie du Tchad\">
                </div>
                <div class=\"footer-text\">
                    République du Tchad - Ministère des Finances et du Budget
                </div>
            </div>
            <div class=\"footer-motto\">
                UNITÉ • TRAVAIL • PROGRÈS
            </div>
        </div>
    </footer>

    <!-- ============================================
         PROJECT DETAIL MODAL
         ============================================ -->
    <div class=\"modal-overlay\" id=\"projectModal\">
        <div class=\"modal\">
            <div class=\"modal-header\">
                <button class=\"modal-close\" onclick=\"closeModal()\">
                    <i data-lucide=\"x\"></i>
                </button>
                <h2 class=\"modal-project-title\" id=\"modalTitle\">Construction du Pont de Ngueli</h2>
                <div class=\"modal-project-meta\">
                    <span><i data-lucide=\"hash\"></i> PRJ-2024-0042</span>
                    <span><i data-lucide=\"map-pin\"></i> N'Djamena</span>
                    <span><i data-lucide=\"building\"></i> Infrastructure</span>
                </div>
            </div>
            <div class=\"modal-body\">
                <div class=\"modal-tabs\">
                    <button class=\"modal-tab active\" onclick=\"switchTab('general')\">Informations générales</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('timeline')\">Suivi des étapes</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('finance')\">Financement</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('companies')\">Entreprises</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('audit')\">Contrôle & Audit</button>
                </div>

                <!-- Tab: General -->
                <div class=\"tab-content active\" id=\"tab-general\">
                    <div class=\"info-grid\">
                        <div class=\"info-block full\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"file-text\"></i>
                                Description du Projet
                            </h4>
                            <p style=\"color: var(--gray-600); font-size: 0.9375rem; line-height: 1.7;\">
                                Construction d'un pont à haubans de 450 mètres reliant N'Djamena à la ville de Ngueli au Cameroun. 
                                Ce projet structurant vise à renforcer les échanges commerciaux dans la sous-région et à fluidifier 
                                le trafic transfrontalier. Les travaux comprennent la construction du tablier, des pylônes, des voies 
                                d'accès et des infrastructures connexes (poste de péage, éclairage).
                            </p>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"target\"></i>
                                Objectifs
                            </h4>
                            <ul style=\"color: var(--gray-600); font-size: 0.875rem; padding-left: 1.25rem;\">
                                <li style=\"margin-bottom: 0.5rem;\">Réduire le temps de traversée de 45 min à 5 min</li>
                                <li style=\"margin-bottom: 0.5rem;\">Augmenter les échanges commerciaux de 30%</li>
                                <li style=\"margin-bottom: 0.5rem;\">Créer 2000 emplois directs pendant la construction</li>
                                <li>Améliorer la sécurité routière transfrontalière</li>
                            </ul>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"gauge\"></i>
                                Indicateurs de Performance
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Avancement physique</span>
                                <span class=\"info-value\">67%</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Taux de décaissement</span>
                                <span class=\"info-value\">72%</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Respect des délais</span>
                                <span class=\"info-value\" style=\"color: var(--warning-600);\">-15 jours</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Conformité qualité</span>
                                <span class=\"info-value\" style=\"color: var(--success-600);\">98%</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"users\"></i>
                                Acteurs Clés
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Maître d'ouvrage</span>
                                <span class=\"info-value\">Min. Infrastructures</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Maître d'œuvre</span>
                                <span class=\"info-value\">BCEOM Tchad</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Contrôle technique</span>
                                <span class=\"info-value\">Bureau Veritas</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Supervision PTF</span>
                                <span class=\"info-value\">BAD / UE</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"calendar\"></i>
                                Calendrier
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Date de démarrage</span>
                                <span class=\"info-value\">15/03/2022</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Fin prévue initiale</span>
                                <span class=\"info-value\">30/06/2025</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Fin prévue révisée</span>
                                <span class=\"info-value\" style=\"color: var(--warning-600);\">15/08/2025</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Durée totale</span>
                                <span class=\"info-value\">41 mois</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"link\"></i>
                                Documents
                            </h4>
                            <div style=\"display: flex; flex-direction: column; gap: 0.5rem;\">
                                <a href=\"#\" style=\"color: var(--primary-600); text-decoration: none; font-size: 0.875rem; display: flex; align-items: center; gap: 0.5rem;\">
                                    <i data-lucide=\"file-text\" style=\"width: 14px; height: 14px;\"></i>
                                    Termes de Référence (TDR)
                                </a>
                                <a href=\"#\" style=\"color: var(--primary-600); text-decoration: none; font-size: 0.875rem; display: flex; align-items: center; gap: 0.5rem;\">
                                    <i data-lucide=\"file-text\" style=\"width: 14px; height: 14px;\"></i>
                                    Cahier des charges
                                </a>
                                <a href=\"#\" style=\"color: var(--primary-600); text-decoration: none; font-size: 0.875rem; display: flex; align-items: center; gap: 0.5rem;\">
                                    <i data-lucide=\"file-text\" style=\"width: 14px; height: 14px;\"></i>
                                    Convention de financement
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Timeline -->
                <div class=\"tab-content\" id=\"tab-timeline\">
                    <div class=\"timeline\">
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Études préliminaires et APD</span>
                                <span class=\"timeline-date\">Mars - Août 2022</span>
                            </div>
                            <div class=\"timeline-content\">
                                Études géotechniques, topographiques et hydrauliques. Validation de l'avant-projet détaillé. 
                                Livrable : Rapport d'études complet approuvé par le comité technique.
                            </div>
                        </div>
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Passation des marchés</span>
                                <span class=\"timeline-date\">Sept - Nov 2022</span>
                            </div>
                            <div class=\"timeline-content\">
                                Appel d'offres international. Évaluation des soumissions. Attribution du marché principal.
                                Livrable : Contrat signé avec l'entreprise adjudicataire.
                            </div>
                        </div>
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Travaux préparatoires</span>
                                <span class=\"timeline-date\">Déc 2022 - Mars 2023</span>
                            </div>
                            <div class=\"timeline-content\">
                                Installation du chantier, déplacement des réseaux, préparation des accès.
                                Livrable : Site prêt pour les travaux de génie civil.
                            </div>
                        </div>
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Fondations et piles</span>
                                <span class=\"timeline-date\">Avril 2023 - Fév 2024</span>
                            </div>
                            <div class=\"timeline-content\">
                                Construction des fondations profondes et des piles principales du pont.
                                Livrable : 4 piles et 2 culées réceptionnées.
                            </div>
                        </div>
                        <div class=\"timeline-item in-progress\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Construction du tablier</span>
                                <span class=\"timeline-date\">Mars 2024 - En cours</span>
                            </div>
                            <div class=\"timeline-content\">
                                Pose des voussoirs et câblage des haubans. Avancement actuel : 67%.
                                Livrable : Tablier complet avec haubans tensionnés.
                            </div>
                        </div>
                        <div class=\"timeline-item pending\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Équipements et finitions</span>
                                <span class=\"timeline-date\">Prévu : Mars - Juin 2025</span>
                            </div>
                            <div class=\"timeline-content\">
                                Revêtement de chaussée, glissières, éclairage, signalisation.
                                Livrable : Pont équipé prêt pour la réception provisoire.
                            </div>
                        </div>
                        <div class=\"timeline-item pending\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Réception et mise en service</span>
                                <span class=\"timeline-date\">Prévu : Juillet - Août 2025</span>
                            </div>
                            <div class=\"timeline-content\">
                                Réception provisoire, tests de charge, inauguration officielle.
                                Livrable : Pont opérationnel et ouvert à la circulation.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Finance -->
                <div class=\"tab-content\" id=\"tab-finance\">
                    <div class=\"info-grid\">
                        <div class=\"info-block full\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"coins\"></i>
                                Répartition du Financement
                            </h4>
                            <table class=\"finance-table\">
                                <thead>
                                    <tr>
                                        <th>Source</th>
                                        <th>Part (%)</th>
                                        <th>Montant</th>
                                        <th>Décaissé</th>
                                        <th>Taux</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Banque Africaine de Développement (BAD)</td>
                                        <td>45%</td>
                                        <td class=\"amount\">32,5 Mds FCFA</td>
                                        <td class=\"amount\">24,8 Mds FCFA</td>
                                        <td style=\"color: var(--success-600); font-weight: 600;\">76%</td>
                                    </tr>
                                    <tr>
                                        <td>Union Européenne</td>
                                        <td>30%</td>
                                        <td class=\"amount\">21,7 Mds FCFA</td>
                                        <td class=\"amount\">15,2 Mds FCFA</td>
                                        <td style=\"color: var(--warning-600); font-weight: 600;\">70%</td>
                                    </tr>
                                    <tr>
                                        <td>État Tchadien (Contrepartie)</td>
                                        <td>25%</td>
                                        <td class=\"amount\">18,1 Mds FCFA</td>
                                        <td class=\"amount\">12,0 Mds FCFA</td>
                                        <td style=\"color: var(--warning-600); font-weight: 600;\">66%</td>
                                    </tr>
                                    <tr style=\"background: var(--primary-50); font-weight: 600;\">
                                        <td>TOTAL</td>
                                        <td>100%</td>
                                        <td class=\"amount\">72,3 Mds FCFA</td>
                                        <td class=\"amount\">52,0 Mds FCFA</td>
                                        <td style=\"color: var(--primary-600);\">72%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Tab: Companies -->
                <div class=\"tab-content\" id=\"tab-companies\">
                    <div class=\"info-grid\">
                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"building\"></i>
                                Entreprise Principale
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Raison sociale</span>
                                <span class=\"info-value\">SOGEA-SATOM Tchad</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Rôle</span>
                                <span class=\"info-value\">Titulaire du lot principal</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">N° Contrat</span>
                                <span class=\"info-value\">CTR-2022-0847</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Montant contrat</span>
                                <span class=\"info-value\">58,4 Mds FCFA</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Avancement</span>
                                <span class=\"info-value\" style=\"color: var(--success-600);\">67%</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"hard-hat\"></i>
                                Sous-traitants
                            </h4>
                            <div style=\"display: flex; flex-direction: column; gap: 1rem;\">
                                <div style=\"padding: 0.75rem; background: var(--white); border-radius: 0.5rem; border: 1px solid var(--gray-200);\">
                                    <strong style=\"color: var(--primary-800); font-size: 0.875rem;\">GETRAN Tchad</strong>
                                    <p style=\"font-size: 0.8125rem; color: var(--gray-500); margin-top: 0.25rem;\">Transport et logistique</p>
                                </div>
                                <div style=\"padding: 0.75rem; background: var(--white); border-radius: 0.5rem; border: 1px solid var(--gray-200);\">
                                    <strong style=\"color: var(--primary-800); font-size: 0.875rem;\">Électricité du Sahel</strong>
                                    <p style=\"font-size: 0.8125rem; color: var(--gray-500); margin-top: 0.25rem;\">Travaux électriques</p>
                                </div>
                                <div style=\"padding: 0.75rem; background: var(--white); border-radius: 0.5rem; border: 1px solid var(--gray-200);\">
                                    <strong style=\"color: var(--primary-800); font-size: 0.875rem;\">Métallurgie Centrale</strong>
                                    <p style=\"font-size: 0.8125rem; color: var(--gray-500); margin-top: 0.25rem;\">Structures métalliques</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"info-block full\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"shield-check\"></i>
                                Bureau de Contrôle
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Bureau</span>
                                <span class=\"info-value\">Bureau Veritas Construction</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Mission</span>
                                <span class=\"info-value\">Contrôle technique et surveillance travaux</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Chef de mission</span>
                                <span class=\"info-value\">Ing. Marc Dupont</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Dernière visite</span>
                                <span class=\"info-value\">12/12/2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Audit -->
                <div class=\"tab-content\" id=\"tab-audit\">
                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"clipboard-check\"></i>
                                Contrôle technique mensuel
                            </span>
                            <span class=\"audit-date\">12 décembre 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Inspection des travaux de pose des voussoirs V18 à V22. Vérification de la tension des câbles de précontrainte. 
                            Contrôle de la géométrie du tablier.
                        </div>
                        <span class=\"audit-status conforme\">
                            <i data-lucide=\"check-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Conforme - Aucune réserve
                        </span>
                    </div>

                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"file-search\"></i>
                                Audit financier semestriel
                            </span>
                            <span class=\"audit-date\">30 octobre 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Audit des décaissements et de la conformité des dépenses. Vérification des procédures de passation des marchés 
                            et de la documentation comptable.
                        </div>
                        <span class=\"audit-status reserve\">
                            <i data-lucide=\"alert-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Conforme avec réserves mineures
                        </span>
                    </div>

                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"shield\"></i>
                                Contrôle environnemental
                            </span>
                            <span class=\"audit-date\">15 septembre 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Évaluation de l'impact environnemental et des mesures de mitigation. Vérification du respect du PGES 
                            (Plan de Gestion Environnementale et Sociale).
                        </div>
                        <span class=\"audit-status conforme\">
                            <i data-lucide=\"check-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Conforme - PGES respecté
                        </span>
                    </div>

                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"users\"></i>
                                Mission de supervision BAD
                            </span>
                            <span class=\"audit-date\">22 août 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Mission conjointe BAD/UE de supervision semestrielle. Revue de l'avancement physique et financier. 
                            Évaluation des risques et recommandations.
                        </div>
                        <span class=\"audit-status reserve\">
                            <i data-lucide=\"alert-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Recommandations émises (retard 15 jours)
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         JAVASCRIPT
         ============================================ -->
    <script>
        // ============================================
        // DATA - Données simulées réalistes
        // ============================================
        const projectsData = [
            {
                id: \"PRJ-2024-0042\",
                name: \"Construction du Pont de Ngueli\",
                sector: \"Infrastructure\",
                sectorKey: \"infrastructure\",
                region: \"N'Djamena\",
                progress: 67,
                budget: 72300000000,
                budgetDisplay: \"72,3 Mds\",
                partners: [\"BAD\", \"UE\", \"État\"],
                company: \"SOGEA-SATOM\",
                status: \"warning\",
                statusLabel: \"Alerte\"
            },
            {
                id: \"PRJ-2024-0038\",
                name: \"Réhabilitation Hôpital Général de Référence\",
                sector: \"Santé\",
                sectorKey: \"sante\",
                region: \"N'Djamena\",
                progress: 85,
                budget: 18500000000,
                budgetDisplay: \"18,5 Mds\",
                partners: [\"BM\", \"OMS\"],
                company: \"COLAS Tchad\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0055\",
                name: \"Programme d'Appui à l'Éducation de Base\",
                sector: \"Éducation\",
                sectorKey: \"education\",
                region: \"Logone Oriental\",
                progress: 42,
                budget: 8200000000,
                budgetDisplay: \"8,2 Mds\",
                partners: [\"AFD\", \"UNICEF\"],
                company: \"BATI-PLUS\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0061\",
                name: \"Électrification Rurale Zone Est\",
                sector: \"Énergie\",
                sectorKey: \"energie\",
                region: \"Ouaddaï\",
                progress: 23,
                budget: 15800000000,
                budgetDisplay: \"15,8 Mds\",
                partners: [\"BID\", \"État\"],
                company: \"VERGNET\",
                status: \"critical\",
                statusLabel: \"Critique\"
            },
            {
                id: \"PRJ-2023-0089\",
                name: \"Aménagement Périmètre Irrigué Bongor\",
                sector: \"Agriculture\",
                sectorKey: \"agriculture\",
                region: \"Mayo-Kebbi Est\",
                progress: 91,
                budget: 12400000000,
                budgetDisplay: \"12,4 Mds\",
                partners: [\"FIDA\", \"BAD\"],
                company: \"SATOM-AGRI\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0072\",
                name: \"Construction Lycées d'Excellence\",
                sector: \"Éducation\",
                sectorKey: \"education\",
                region: \"N'Djamena\",
                progress: 56,
                budget: 9600000000,
                budgetDisplay: \"9,6 Mds\",
                partners: [\"AFD\", \"État\"],
                company: \"GETRAN\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0028\",
                name: \"Route Nationale RN1 - Tronçon Abéché\",
                sector: \"Infrastructure\",
                sectorKey: \"infrastructure\",
                region: \"Ouaddaï\",
                progress: 34,
                budget: 45200000000,
                budgetDisplay: \"45,2 Mds\",
                partners: [\"UE\", \"BAD\", \"État\"],
                company: \"RAZEL-BEC\",
                status: \"warning\",
                statusLabel: \"Alerte\"
            },
            {
                id: \"PRJ-2024-0094\",
                name: \"Centre de Santé Intégré Lac\",
                sector: \"Santé\",
                sectorKey: \"sante\",
                region: \"Lac\",
                progress: 78,
                budget: 4800000000,
                budgetDisplay: \"4,8 Mds\",
                partners: [\"GAVI\", \"OMS\"],
                company: \"SETUBA\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2023-0112\",
                name: \"Centrale Solaire Photovoltaïque\",
                sector: \"Énergie\",
                sectorKey: \"energie\",
                region: \"N'Djamena\",
                progress: 15,
                budget: 28900000000,
                budgetDisplay: \"28,9 Mds\",
                partners: [\"AFD\", \"UE\", \"GCF\"],
                company: \"TOTAL Énergies\",
                status: \"critical\",
                statusLabel: \"Critique\"
            },
            {
                id: \"PRJ-2024-0103\",
                name: \"Programme Semences Améliorées\",
                sector: \"Agriculture\",
                sectorKey: \"agriculture\",
                region: \"Logone Oriental\",
                progress: 63,
                budget: 3200000000,
                budgetDisplay: \"3,2 Mds\",
                partners: [\"FAO\", \"FIDA\"],
                company: \"ONDR\",
                status: \"ok\",
                statusLabel: \"OK\"
            }
        ];

        // ============================================
        // INITIALIZATION
        // ============================================
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide icons
            lucide.createIcons();
            
            // Initialize counters animation
            animateCounters();
            
            // Initialize charts
            initCharts();
            
            // Populate projects table
            populateProjectsTable(projectsData);
            
            // Setup event listeners
            setupEventListeners();
        });

        // ============================================
        // COUNTER ANIMATION
        // ============================================
        function animateCounters() {
            const counters = document.querySelectorAll('[data-counter]');
            
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.counter);
                const suffix = counter.dataset.suffix || '';
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                
                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + suffix;
                    }
                };
                
                // Start animation when element is visible
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(counter);
            });
        }

        // ============================================
        // CHARTS INITIALIZATION - Couleurs Armoirie
        // ============================================
        function initCharts() {
            // Partners Doughnut Chart
            const ctxPartners = document.getElementById('chartPartners').getContext('2d');
            new Chart(ctxPartners, {
                type: 'doughnut',
                data: {
                    labels: ['BAD', 'Union Européenne', 'Banque Mondiale', 'AFD', 'État Tchadien', 'Autres'],
                    datasets: [{
                        data: [185, 142, 128, 96, 186, 105],
                        backgroundColor: [
                            '#004d99',
                            '#daa520',
                            '#10b981',
                            '#c41e3a',
                            '#003366',
                            '#6b7280'
                        ],
                        borderWidth: 0,
                        spacing: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '65%',
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle',
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + ' Mds FCFA';
                                }
                            }
                        }
                    }
                }
            });

            // Sectors Bar Chart
            const ctxSectors = document.getElementById('chartSectors').getContext('2d');
            new Chart(ctxSectors, {
                type: 'bar',
                data: {
                    labels: ['Infrastructure', 'Énergie', 'Santé', 'Éducation', 'Agriculture', 'Eau'],
                    datasets: [{
                        label: 'Budget (Mds FCFA)',
                        data: [312, 148, 95, 87, 124, 76],
                        backgroundColor: [
                            'rgba(0, 77, 153, 0.85)',
                            'rgba(218, 165, 32, 0.85)',
                            'rgba(16, 185, 129, 0.85)',
                            'rgba(196, 30, 58, 0.85)',
                            'rgba(0, 51, 102, 0.85)',
                            'rgba(59, 130, 246, 0.85)'
                        ],
                        borderRadius: 6,
                        borderSkipped: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.05)'
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                },
                                callback: function(value) {
                                    return value + ' Mds';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });

            // Execution Line Chart
            const ctxExecution = document.getElementById('chartExecution').getContext('2d');
            new Chart(ctxExecution, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [
                        {
                            label: 'Budget prévisionnel',
                            data: [70, 140, 210, 280, 350, 420, 490, 560, 630, 700, 770, 842],
                            borderColor: '#004d99',
                            backgroundColor: 'rgba(0, 77, 153, 0.1)',
                            fill: true,
                            tension: 0.4,
                            borderWidth: 3,
                            pointRadius: 4,
                            pointBackgroundColor: '#004d99'
                        },
                        {
                            label: 'Budget réel décaissé',
                            data: [45, 95, 150, 195, 255, 310, 345, 375, 395, 410, 415, 418],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            fill: true,
                            tension: 0.4,
                            borderWidth: 3,
                            pointRadius: 4,
                            pointBackgroundColor: '#10b981'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.raw + ' Mds FCFA';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.05)'
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                },
                                callback: function(value) {
                                    return value + ' Mds';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });
        }

        // ============================================
        // PROJECTS TABLE
        // ============================================
        function populateProjectsTable(projects) {
            const tbody = document.getElementById('projectsTableBody');
            tbody.innerHTML = '';
            
            projects.forEach(project => {
                const progressColor = project.progress >= 70 ? 'var(--success-500)' : 
                                     project.progress >= 40 ? 'var(--gold-500)' : 'var(--red-500)';
                
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div class=\"project-name\">
                            \${project.name}
                            <span class=\"project-code\">\${project.id}</span>
                        </div>
                    </td>
                    <td>
                        <span class=\"sector-badge\">\${project.sector}</span>
                    </td>
                    <td>\${project.region}</td>
                    <td class=\"progress-cell\">
                        <div class=\"progress-bar\">
                            <div class=\"progress-fill\" style=\"width: \${project.progress}%; background: \${progressColor};\"></div>
                        </div>
                        <span class=\"progress-text\">\${project.progress}% complété</span>
                    </td>
                    <td class=\"budget-cell\">
                        <span class=\"budget-amount\">\${project.budgetDisplay}</span>
                        <span class=\"budget-currency\">FCFA</span>
                    </td>
                    <td class=\"partners-cell\">
                        <div class=\"partner-tags\">
                            \${project.partners.slice(0, 2).map(p => `<span class=\"partner-tag\">\${p}</span>`).join('')}
                            \${project.partners.length > 2 ? `<span class=\"partner-tag more\">+\${project.partners.length - 2}</span>` : ''}
                        </div>
                    </td>
                    <td>
                        <span class=\"status-badge \${project.status}\">
                            \${project.status === 'ok' ? '<i data-lucide=\"check-circle\"></i>' : 
                              project.status === 'warning' ? '<i data-lucide=\"alert-circle\"></i>' : 
                              '<i data-lucide=\"x-circle\"></i>'}
                            \${project.statusLabel}
                        </span>
                    </td>
                    <td>
                        <button class=\"action-btn\" onclick=\"openProjectModal('\${project.id}')\">
                            <i data-lucide=\"eye\"></i>
                            Détails
                        </button>
                    </td>
                `;
                tbody.appendChild(row);
            });
            
            // Reinitialize icons for new content
            lucide.createIcons();
        }

        // ============================================
        // MODAL FUNCTIONS
        // ============================================
        function openProjectModal(projectId) {
            const modal = document.getElementById('projectModal');
            const project = projectsData.find(p => p.id === projectId);
            
            if (project) {
                document.getElementById('modalTitle').textContent = project.name;
            }
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            lucide.createIcons();
        }

        function closeModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        function switchTab(tabName) {
            // Update tab buttons
            document.querySelectorAll('.modal-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            event.target.classList.add('active');
            
            // Update tab content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            document.getElementById('tab-' + tabName).classList.add('active');
            
            lucide.createIcons();
        }

        // Close modal on overlay click
        document.getElementById('projectModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // ============================================
        // EVENT LISTENERS
        // ============================================
        function setupEventListeners() {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const filteredProjects = projectsData.filter(project => 
                    project.name.toLowerCase().includes(searchTerm) ||
                    project.id.toLowerCase().includes(searchTerm) ||
                    project.sector.toLowerCase().includes(searchTerm) ||
                    project.region.toLowerCase().includes(searchTerm)
                );
                populateProjectsTable(filteredProjects);
            });

            // Filter functionality
            const filterSelects = ['filterYear', 'filterSector', 'filterRegion', 'filterPartner'];
            filterSelects.forEach(selectId => {
                document.getElementById(selectId).addEventListener('change', applyFilters);
            });
        }

        function applyFilters() {
            const sector = document.getElementById('filterSector').value;
            const region = document.getElementById('filterRegion').value;
            
            let filteredProjects = [...projectsData];
            
            if (sector) {
                filteredProjects = filteredProjects.filter(p => p.sectorKey === sector);
            }
            
            if (region) {
                filteredProjects = filteredProjects.filter(p => 
                    p.region.toLowerCase().includes(region.replace('-', ' '))
                );
            }
            
            populateProjectsTable(filteredProjects);
        }

        // ============================================
        // UTILITY FUNCTIONS
        // ============================================
        function formatCurrency(amount) {
            if (amount >= 1000000000) {
                return (amount / 1000000000).toFixed(1) + ' Mds';
            } else if (amount >= 1000000) {
                return (amount / 1000000).toFixed(1) + ' M';
            }
            return amount.toLocaleString('fr-FR');
        }
    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard_top_management.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SIGEP - Système Intégré de Gestion des Projets Publics | République du Tchad</title>
    
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Lucide Icons -->
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    
    <!-- Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    
    <style>
        /* ============================================
           CSS VARIABLES & THEME - COULEURS ARMOIRIE DU TCHAD
           ============================================ */
        :root {
            /* Couleurs de l'Armoirie - Bleu dominant */
            --primary-900: #001a33;
            --primary-800: #002a54;
            --primary-700: #003366;
            --primary-600: #004080;
            --primary-500: #004d99;
            --primary-400: #3366aa;
            --primary-300: #6699cc;
            --primary-200: #99bbdd;
            --primary-100: #ccddef;
            --primary-50: #e6eef7;
            
            /* Accent doré de l'Armoirie */
            --gold-600: #b8860b;
            --gold-500: #daa520;
            --gold-400: #e6b833;
            --gold-300: #f0cc5c;
            --gold-200: #f7dd8c;
            --gold-100: #fcf0c8;
            
            /* Rouge de l'Armoirie */
            --red-700: #8b1a1a;
            --red-600: #a52a2a;
            --red-500: #c41e3a;
            --red-400: #dc3545;
            --red-300: #e66a7a;
            --red-100: #fce4e8;
            
            /* États */
            --success-600: #0d7a3c;
            --success-500: #10b981;
            --success-400: #34d399;
            --success-100: #d1fae5;
            
            --warning-600: #b45309;
            --warning-500: #f59e0b;
            --warning-400: #fbbf24;
            --warning-100: #fef3c7;
            
            --danger-600: #b91c1c;
            --danger-500: #ef4444;
            --danger-400: #f87171;
            --danger-100: #fee2e2;
            
            /* Neutres */
            --gray-900: #111827;
            --gray-800: #1f2937;
            --gray-700: #374151;
            --gray-600: #4b5563;
            --gray-500: #6b7280;
            --gray-400: #9ca3af;
            --gray-300: #d1d5db;
            --gray-200: #e5e7eb;
            --gray-100: #f3f4f6;
            --gray-50: #f9fafb;
            --white: #ffffff;
            
            /* Typography */
            --font-display: 'Playfair Display', Georgia, serif;
            --font-body: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            
            /* Spacing */
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-5: 1.25rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --space-10: 2.5rem;
            --space-12: 3rem;
            --space-16: 4rem;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --shadow-gold: 0 4px 14px 0 rgb(218 165 32 / 0.35);
            --shadow-red: 0 4px 14px 0 rgb(196 30 58 / 0.25);
            
            /* Border Radius */
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-2xl: 1.5rem;
            
            /* Transitions */
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-base: 250ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: 350ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ============================================
           RESET & BASE
           ============================================ */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            font-size: 0.9375rem;
            line-height: 1.6;
            color: var(--gray-800);
            background: linear-gradient(135deg, var(--primary-50) 0%, var(--gray-100) 50%, var(--gold-100) 100%);
            min-height: 100vh;
        }

        /* ============================================
           HEADER - Style Armoirie
           ============================================ */
        .header {
            background: linear-gradient(135deg, var(--primary-800) 0%, var(--primary-900) 100%);
            color: var(--white);
            padding: var(--space-4) var(--space-8);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-xl);
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500) 0%, var(--gold-500) 33%, var(--gold-400) 66%, var(--red-500) 100%);
        }

        .header-content {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: var(--space-6);
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .logo-emblem {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .logo-emblem img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-name {
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: var(--white);
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }

        .brand-subtitle {
            font-size: 0.75rem;
            color: var(--gold-400);
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .header-filters {
            display: flex;
            align-items: center;
            gap: var(--space-3);
            flex-wrap: wrap;
        }

        .filter-group {
            position: relative;
        }

        .filter-select {
            appearance: none;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(218, 165, 32, 0.3);
            border-radius: var(--radius-md);
            padding: var(--space-2) var(--space-10) var(--space-2) var(--space-3);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--white);
            cursor: pointer;
            transition: all var(--transition-fast);
            min-width: 160px;
        }

        .filter-select:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--gold-400);
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--gold-400);
            box-shadow: 0 0 0 3px rgba(218, 165, 32, 0.25);
        }

        .filter-select option {
            background: var(--primary-800);
            color: var(--white);
        }

        .filter-icon {
            position: absolute;
            right: var(--space-3);
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: var(--gold-400);
        }

        .header-user {
            display: flex;
            align-items: center;
            gap: var(--space-3);
            padding: var(--space-2) var(--space-4);
            background: rgba(218, 165, 32, 0.15);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(218, 165, 32, 0.3);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--gold-400) 0%, var(--gold-600) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-gold);
        }

        .user-avatar svg {
            width: 22px;
            height: 22px;
            color: var(--primary-900);
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--white);
        }

        .user-role {
            font-size: 0.75rem;
            color: var(--gold-400);
        }

        /* ============================================
           MAIN CONTENT
           ============================================ */
        .main-content {
            max-width: 1600px;
            margin: 0 auto;
            padding: var(--space-8);
        }

        .page-title {
            margin-bottom: var(--space-8);
        }

        .page-title h1 {
            font-family: var(--font-display);
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-800);
            margin-bottom: var(--space-2);
        }

        .page-title p {
            color: var(--gray-600);
            font-size: 1rem;
        }

        .last-update {
            display: inline-flex;
            align-items: center;
            gap: var(--space-2);
            margin-top: var(--space-2);
            padding: var(--space-1) var(--space-3);
            background: var(--white);
            border-radius: var(--radius-md);
            font-size: 0.8125rem;
            color: var(--gray-500);
            border: 1px solid var(--gold-200);
        }

        .last-update svg {
            width: 14px;
            height: 14px;
            color: var(--gold-500);
        }

        /* ============================================
           KPI CARDS
           ============================================ */
        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: var(--space-5);
            margin-bottom: var(--space-8);
        }

        .kpi-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: var(--space-6);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
            position: relative;
            overflow: hidden;
            transition: all var(--transition-base);
        }

        .kpi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--kpi-color, var(--primary-500));
        }

        .kpi-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .kpi-card.gold { --kpi-color: var(--gold-500); }
        .kpi-card.success { --kpi-color: var(--success-500); }
        .kpi-card.warning { --kpi-color: var(--warning-500); }
        .kpi-card.danger { --kpi-color: var(--red-500); }
        .kpi-card.primary { --kpi-color: var(--primary-600); }

        .kpi-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: var(--space-4);
        }

        .kpi-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--kpi-bg, var(--primary-100));
        }

        .kpi-card.gold .kpi-icon { --kpi-bg: var(--gold-100); color: var(--gold-600); }
        .kpi-card.success .kpi-icon { --kpi-bg: var(--success-100); color: var(--success-600); }
        .kpi-card.warning .kpi-icon { --kpi-bg: var(--warning-100); color: var(--warning-600); }
        .kpi-card.danger .kpi-icon { --kpi-bg: var(--red-100); color: var(--red-600); }
        .kpi-card.primary .kpi-icon { --kpi-bg: var(--primary-100); color: var(--primary-600); }

        .kpi-icon svg {
            width: 24px;
            height: 24px;
        }

        .kpi-trend {
            display: flex;
            align-items: center;
            gap: var(--space-1);
            font-size: 0.75rem;
            font-weight: 600;
            padding: var(--space-1) var(--space-2);
            border-radius: var(--radius-sm);
        }

        .kpi-trend.up {
            background: var(--success-100);
            color: var(--success-600);
        }

        .kpi-trend.down {
            background: var(--red-100);
            color: var(--red-600);
        }

        .kpi-trend svg {
            width: 12px;
            height: 12px;
        }

        .kpi-value {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--primary-800);
            line-height: 1.2;
            margin-bottom: var(--space-1);
        }

        .kpi-label {
            font-size: 0.875rem;
            color: var(--gray-600);
            font-weight: 500;
        }

        .kpi-sublabel {
            font-size: 0.75rem;
            color: var(--gray-400);
            margin-top: var(--space-2);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        /* ============================================
           CHARTS SECTION
           ============================================ */
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--space-6);
            margin-bottom: var(--space-8);
        }

        .chart-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: var(--space-6);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
        }

        .chart-card.full-width {
            grid-column: span 2;
        }

        .chart-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: var(--space-5);
        }

        .chart-title {
            font-family: var(--font-display);
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .chart-title svg {
            width: 20px;
            height: 20px;
            color: var(--gold-500);
        }

        .chart-legend {
            display: flex;
            gap: var(--space-4);
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            font-size: 0.8125rem;
            color: var(--gray-600);
        }

        .legend-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .chart-container {
            position: relative;
            height: 280px;
        }

        /* ============================================
           DATA TABLE
           ============================================ */
        .table-section {
            background: var(--white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
            overflow: hidden;
            margin-bottom: var(--space-8);
        }

        .table-header {
            padding: var(--space-6);
            border-bottom: 2px solid var(--gold-400);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: var(--space-4);
            background: linear-gradient(to right, var(--primary-50), var(--white));
        }

        .table-title {
            font-family: var(--font-display);
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            align-items: center;
            gap: var(--space-3);
        }

        .table-title svg {
            color: var(--gold-500);
        }

        .table-actions {
            display: flex;
            align-items: center;
            gap: var(--space-3);
        }

        .search-box {
            position: relative;
        }

        .search-input {
            width: 280px;
            padding: var(--space-2) var(--space-4) var(--space-2) var(--space-10);
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-lg);
            font-family: var(--font-body);
            font-size: 0.875rem;
            transition: all var(--transition-fast);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-400);
            box-shadow: 0 0 0 3px rgba(0, 77, 153, 0.15);
        }

        .search-icon {
            position: absolute;
            left: var(--space-3);
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
        }

        .filter-btn {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-2) var(--space-4);
            background: var(--gray-100);
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-lg);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--gray-700);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .filter-btn:hover {
            background: var(--gray-200);
        }

        .export-btn {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-2) var(--space-4);
            background: linear-gradient(135deg, var(--primary-600) 0%, var(--primary-700) 100%);
            border: none;
            border-radius: var(--radius-lg);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--white);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .export-btn:hover {
            background: linear-gradient(135deg, var(--primary-700) 0%, var(--primary-800) 100%);
            transform: translateY(-1px);
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            background: var(--primary-50);
            padding: var(--space-4) var(--space-5);
            text-align: left;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--primary-700);
            border-bottom: 1px solid var(--gray-200);
            white-space: nowrap;
        }

        .data-table th.sortable {
            cursor: pointer;
            user-select: none;
        }

        .data-table th.sortable:hover {
            background: var(--primary-100);
        }

        .data-table td {
            padding: var(--space-4) var(--space-5);
            border-bottom: 1px solid var(--gray-100);
            font-size: 0.875rem;
            color: var(--gray-700);
        }

        .data-table tbody tr {
            transition: background var(--transition-fast);
        }

        .data-table tbody tr:hover {
            background: var(--primary-50);
        }

        .project-name {
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            flex-direction: column;
            gap: var(--space-1);
        }

        .project-code {
            font-size: 0.75rem;
            color: var(--gold-600);
            font-weight: 500;
        }

        .sector-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--space-1);
            padding: var(--space-1) var(--space-2);
            background: var(--primary-100);
            color: var(--primary-700);
            border-radius: var(--radius-sm);
            font-size: 0.75rem;
            font-weight: 500;
        }

        .progress-cell {
            min-width: 140px;
        }

        .progress-bar {
            height: 8px;
            background: var(--gray-200);
            border-radius: var(--radius-sm);
            overflow: hidden;
            margin-bottom: var(--space-1);
        }

        .progress-fill {
            height: 100%;
            border-radius: var(--radius-sm);
            transition: width var(--transition-slow);
        }

        .progress-text {
            font-size: 0.75rem;
            color: var(--gray-500);
        }

        .budget-cell {
            text-align: right;
            white-space: nowrap;
        }

        .budget-amount {
            font-weight: 600;
            color: var(--primary-800);
        }

        .budget-currency {
            font-size: 0.75rem;
            color: var(--gray-400);
        }

        .partners-cell {
            max-width: 180px;
        }

        .partner-tags {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-1);
        }

        .partner-tag {
            padding: var(--space-1) var(--space-2);
            background: var(--gold-100);
            color: var(--gold-600);
            border-radius: var(--radius-sm);
            font-size: 0.6875rem;
            font-weight: 600;
        }

        .partner-tag.more {
            background: var(--gray-200);
            color: var(--gray-600);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--space-1);
            padding: var(--space-1) var(--space-3);
            border-radius: var(--radius-md);
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-badge.ok {
            background: var(--success-100);
            color: var(--success-600);
        }

        .status-badge.warning {
            background: var(--warning-100);
            color: var(--warning-600);
        }

        .status-badge.critical {
            background: var(--red-100);
            color: var(--red-600);
        }

        .status-badge svg {
            width: 12px;
            height: 12px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: var(--space-1);
            padding: var(--space-2) var(--space-3);
            background: var(--primary-100);
            border: none;
            border-radius: var(--radius-md);
            font-family: var(--font-body);
            font-size: 0.8125rem;
            color: var(--primary-700);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .action-btn:hover {
            background: var(--primary-200);
            color: var(--primary-800);
        }

        .action-btn svg {
            width: 14px;
            height: 14px;
        }

        /* Pagination */
        .table-footer {
            padding: var(--space-4) var(--space-6);
            border-top: 1px solid var(--gray-200);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--gray-50);
        }

        .pagination-info {
            font-size: 0.875rem;
            color: var(--gray-600);
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .page-btn {
            min-width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gray-300);
            background: var(--white);
            border-radius: var(--radius-md);
            font-family: var(--font-body);
            font-size: 0.875rem;
            color: var(--gray-700);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .page-btn:hover:not(:disabled) {
            background: var(--gray-100);
            border-color: var(--primary-400);
        }

        .page-btn.active {
            background: var(--primary-600);
            border-color: var(--primary-600);
            color: var(--white);
        }

        .page-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* ============================================
           PROJECT MODAL
           ============================================ */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 42, 84, 0.7);
            backdrop-filter: blur(4px);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--space-6);
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-base);
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            background: var(--white);
            border-radius: var(--radius-2xl);
            width: 100%;
            max-width: 1000px;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            transform: scale(0.95) translateY(20px);
            transition: transform var(--transition-base);
        }

        .modal-overlay.active .modal {
            transform: scale(1) translateY(0);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-700) 0%, var(--primary-800) 100%);
            color: var(--white);
            padding: var(--space-6);
            position: relative;
        }

        .modal-header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500) 0%, var(--gold-400) 50%, var(--red-500) 100%);
        }

        .modal-close {
            position: absolute;
            top: var(--space-4);
            right: var(--space-4);
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 50%;
            color: var(--white);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .modal-close:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .modal-project-title {
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: var(--space-2);
        }

        .modal-project-meta {
            display: flex;
            align-items: center;
            gap: var(--space-4);
            font-size: 0.875rem;
            color: var(--primary-200);
        }

        .modal-project-meta span {
            display: flex;
            align-items: center;
            gap: var(--space-1);
        }

        .modal-project-meta svg {
            width: 14px;
            height: 14px;
        }

        .modal-body {
            max-height: calc(90vh - 200px);
            overflow-y: auto;
            padding: var(--space-6);
        }

        .modal-tabs {
            display: flex;
            gap: var(--space-2);
            margin-bottom: var(--space-6);
            border-bottom: 1px solid var(--gray-200);
            padding-bottom: var(--space-3);
        }

        .modal-tab {
            padding: var(--space-2) var(--space-4);
            background: none;
            border: none;
            font-family: var(--font-body);
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-500);
            cursor: pointer;
            border-radius: var(--radius-md);
            transition: all var(--transition-fast);
        }

        .modal-tab:hover {
            background: var(--gray-100);
            color: var(--gray-700);
        }

        .modal-tab.active {
            background: var(--primary-100);
            color: var(--primary-700);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--space-6);
        }

        .info-block {
            background: var(--gray-50);
            border-radius: var(--radius-lg);
            padding: var(--space-5);
            border: 1px solid var(--gray-100);
        }

        .info-block.full {
            grid-column: span 2;
        }

        .info-block-title {
            font-family: var(--font-display);
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-800);
            margin-bottom: var(--space-4);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .info-block-title svg {
            width: 18px;
            height: 18px;
            color: var(--gold-500);
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: var(--space-2) 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-size: 0.875rem;
            color: var(--gray-500);
        }

        .info-value {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--primary-800);
            text-align: right;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: var(--space-8);
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 12px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--primary-200);
        }

        .timeline-item {
            position: relative;
            padding-bottom: var(--space-6);
        }

        .timeline-item:last-child {
            padding-bottom: 0;
        }

        .timeline-dot {
            position: absolute;
            left: calc(-1 * var(--space-8) + 6px);
            top: 4px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--white);
            border: 3px solid var(--gray-300);
        }

        .timeline-item.completed .timeline-dot {
            background: var(--success-500);
            border-color: var(--success-500);
        }

        .timeline-item.in-progress .timeline-dot {
            background: var(--gold-500);
            border-color: var(--gold-500);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(218, 165, 32, 0.5); }
            50% { box-shadow: 0 0 0 8px rgba(218, 165, 32, 0); }
        }

        .timeline-item.pending .timeline-dot {
            background: var(--gray-200);
            border-color: var(--gray-300);
        }

        .timeline-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: var(--space-2);
        }

        .timeline-title {
            font-weight: 600;
            color: var(--primary-800);
        }

        .timeline-date {
            font-size: 0.75rem;
            color: var(--gold-600);
            font-weight: 500;
        }

        .timeline-content {
            font-size: 0.875rem;
            color: var(--gray-600);
        }

        /* Finance Table */
        .finance-table {
            width: 100%;
            border-collapse: collapse;
        }

        .finance-table th,
        .finance-table td {
            padding: var(--space-3);
            text-align: left;
            border-bottom: 1px solid var(--gray-200);
        }

        .finance-table th {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--primary-700);
            background: var(--primary-50);
        }

        .finance-table td {
            font-size: 0.875rem;
            color: var(--gray-700);
        }

        .finance-table .amount {
            font-weight: 600;
            color: var(--primary-800);
            text-align: right;
        }

        /* Audit Items */
        .audit-item {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: var(--space-4);
            margin-bottom: var(--space-3);
        }

        .audit-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: var(--space-2);
        }

        .audit-type {
            font-weight: 600;
            color: var(--primary-800);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .audit-type svg {
            width: 16px;
            height: 16px;
            color: var(--gold-500);
        }

        .audit-date {
            font-size: 0.75rem;
            color: var(--gray-500);
        }

        .audit-content {
            font-size: 0.875rem;
            color: var(--gray-600);
            margin-bottom: var(--space-2);
        }

        .audit-status {
            display: inline-flex;
            align-items: center;
            gap: var(--space-1);
            font-size: 0.75rem;
            font-weight: 500;
        }

        .audit-status.conforme {
            color: var(--success-600);
        }

        .audit-status.reserve {
            color: var(--warning-600);
        }

        .audit-status.non-conforme {
            color: var(--red-600);
        }

        /* ============================================
           FOOTER
           ============================================ */
        .footer {
            background: linear-gradient(135deg, var(--primary-800) 0%, var(--primary-900) 100%);
            color: var(--white);
            padding: var(--space-6) var(--space-8);
            margin-top: var(--space-8);
        }

        .footer-content {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: var(--space-3);
        }

        .footer-logo {
            width: 40px;
            height: 40px;
        }

        .footer-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .footer-text {
            font-size: 0.875rem;
            color: var(--primary-300);
        }

        .footer-motto {
            font-size: 0.875rem;
            color: var(--gold-400);
            font-weight: 500;
            letter-spacing: 1px;
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1200px) {
            .charts-grid {
                grid-template-columns: 1fr;
            }
            
            .chart-card.full-width {
                grid-column: span 1;
            }
        }

        @media (max-width: 1024px) {
            .header-content {
                flex-wrap: wrap;
            }
            
            .header-filters {
                order: 3;
                width: 100%;
                justify-content: flex-start;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .info-block.full {
                grid-column: span 1;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                padding: var(--space-4);
            }
            
            .kpi-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .table-header {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-input {
                width: 100%;
            }
            
            .modal {
                max-height: 100vh;
                border-radius: 0;
            }
        }

        @media (max-width: 480px) {
            .kpi-grid {
                grid-template-columns: 1fr;
            }
            
            .header-brand {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <!-- ============================================
         HEADER
         ============================================ -->
    <header class=\"header\">
        <div class=\"header-content\">
            <div class=\"header-brand\">
                <div class=\"logo-container\">
                    <div class=\"logo-emblem\">
                        <img src=\"armoirie-tchad.png\" alt=\"Armoirie du Tchad\">
                    </div>
                    <div class=\"brand-text\">
                        <span class=\"brand-name\">SIGEP Tchad</span>
                        <span class=\"brand-subtitle\">Système Intégré de Gestion des Projets Publics</span>
                    </div>
                </div>
            </div>

            <div class=\"header-filters\">
                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterYear\">
                        <option value=\"2025\">Année 2025</option>
                        <option value=\"2024\" selected>Année 2024</option>
                        <option value=\"2023\">Année 2023</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterSector\">
                        <option value=\"\">Tous les secteurs</option>
                        <option value=\"infrastructure\">Infrastructure</option>
                        <option value=\"education\">Éducation</option>
                        <option value=\"sante\">Santé</option>
                        <option value=\"agriculture\">Agriculture</option>
                        <option value=\"energie\">Énergie</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterRegion\">
                        <option value=\"\">Toutes les régions</option>
                        <option value=\"ndjamena\">N'Djamena</option>
                        <option value=\"logone\">Logone Oriental</option>
                        <option value=\"ouaddai\">Ouaddaï</option>
                        <option value=\"mayo-kebbi\">Mayo-Kebbi Est</option>
                        <option value=\"lac\">Lac</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>

                <div class=\"filter-group\">
                    <select class=\"filter-select\" id=\"filterPartner\">
                        <option value=\"\">Tous les partenaires</option>
                        <option value=\"ue\">Union Européenne</option>
                        <option value=\"bm\">Banque Mondiale</option>
                        <option value=\"bad\">BAD</option>
                        <option value=\"afd\">AFD</option>
                        <option value=\"pnud\">PNUD</option>
                    </select>
                    <i data-lucide=\"chevron-down\" class=\"filter-icon\"></i>
                </div>
            </div>

            <div class=\"header-user\">
                <div class=\"user-avatar\">
                    <i data-lucide=\"user\"></i>
                </div>
                <div class=\"user-info\">
                    <span class=\"user-name\">Amadou Mahamat</span>
                    <span class=\"user-role\">Contrôleur - Min. Finances</span>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================
         MAIN CONTENT
         ============================================ -->
    <main class=\"main-content\">
        <!-- Page Title -->
        <div class=\"page-title\">
            <h1>Tableau de Bord Central</h1>
            <p>Vue consolidée des projets financés par l'État et les partenaires techniques et financiers</p>
            <div class=\"last-update\">
                <i data-lucide=\"clock\"></i>
                Dernière mise à jour : 15 décembre 2024 à 14h30
            </div>
        </div>

        <!-- KPI Cards -->
        <section class=\"kpi-grid\" id=\"kpiGrid\">
            <div class=\"kpi-card primary\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"folder-kanban\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +12%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"147\">0</div>
                <div class=\"kpi-label\">Projets Total</div>
                <div class=\"kpi-sublabel\">
                    <span>🟢 89 en cours</span>
                    <span>✅ 42 terminés</span>
                    <span>🔴 16 en retard</span>
                </div>
            </div>

            <div class=\"kpi-card gold\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"banknote\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +8%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"842\" data-suffix=\" Mds\">0</div>
                <div class=\"kpi-label\">Budget Total (FCFA)</div>
                <div class=\"kpi-sublabel\">
                    Prévisions annuelles 2024
                </div>
            </div>

            <div class=\"kpi-card success\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"wallet\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +15%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"623\" data-suffix=\" Mds\">0</div>
                <div class=\"kpi-label\">Budget Engagé</div>
                <div class=\"kpi-sublabel\">
                    74% du budget total
                </div>
            </div>

            <div class=\"kpi-card warning\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"credit-card\"></i>
                    </div>
                    <div class=\"kpi-trend down\">
                        <i data-lucide=\"trending-down\"></i>
                        -3%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"418\" data-suffix=\" Mds\">0</div>
                <div class=\"kpi-label\">Budget Décaissé</div>
                <div class=\"kpi-sublabel\">
                    67% du budget engagé
                </div>
            </div>

            <div class=\"kpi-card primary\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"percent\"></i>
                    </div>
                    <div class=\"kpi-trend up\">
                        <i data-lucide=\"trending-up\"></i>
                        +5%
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"68\" data-suffix=\"%\">0</div>
                <div class=\"kpi-label\">Taux d'Exécution Moyen</div>
                <div class=\"kpi-sublabel\">
                    Objectif annuel : 85%
                </div>
            </div>

            <div class=\"kpi-card gold\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"handshake\"></i>
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"24\">0</div>
                <div class=\"kpi-label\">Partenaires Actifs</div>
                <div class=\"kpi-sublabel\">
                    Bailleurs & PTF
                </div>
            </div>

            <div class=\"kpi-card success\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"building-2\"></i>
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"186\">0</div>
                <div class=\"kpi-label\">Entreprises Exécutantes</div>
                <div class=\"kpi-sublabel\">
                    Prestataires et fournisseurs
                </div>
            </div>

            <div class=\"kpi-card danger\">
                <div class=\"kpi-header\">
                    <div class=\"kpi-icon\">
                        <i data-lucide=\"alert-triangle\"></i>
                    </div>
                </div>
                <div class=\"kpi-value\" data-counter=\"23\">0</div>
                <div class=\"kpi-label\">Alertes Actives</div>
                <div class=\"kpi-sublabel\">
                    Retards et blocages
                </div>
            </div>
        </section>

        <!-- Charts Section -->
        <section class=\"charts-grid\">
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">
                        <i data-lucide=\"pie-chart\"></i>
                        Répartition des Financements par Partenaire
                    </h3>
                </div>
                <div class=\"chart-container\">
                    <canvas id=\"chartPartners\"></canvas>
                </div>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">
                        <i data-lucide=\"bar-chart-3\"></i>
                        Budget par Secteur
                    </h3>
                </div>
                <div class=\"chart-container\">
                    <canvas id=\"chartSectors\"></canvas>
                </div>
            </div>

            <div class=\"chart-card full-width\">
                <div class=\"chart-header\">
                    <h3 class=\"chart-title\">
                        <i data-lucide=\"line-chart\"></i>
                        Évolution du Taux d'Exécution (2024)
                    </h3>
                    <div class=\"chart-legend\">
                        <div class=\"legend-item\">
                            <span class=\"legend-dot\" style=\"background: #004d99;\"></span>
                            Budget prévisionnel
                        </div>
                        <div class=\"legend-item\">
                            <span class=\"legend-dot\" style=\"background: #10b981;\"></span>
                            Budget réel décaissé
                        </div>
                    </div>
                </div>
                <div class=\"chart-container\">
                    <canvas id=\"chartExecution\"></canvas>
                </div>
            </div>
        </section>

        <!-- Data Table -->
        <section class=\"table-section\">
            <div class=\"table-header\">
                <h2 class=\"table-title\">
                    <i data-lucide=\"layout-list\"></i>
                    Portefeuille des Projets
                </h2>
                <div class=\"table-actions\">
                    <div class=\"search-box\">
                        <i data-lucide=\"search\" class=\"search-icon\"></i>
                        <input type=\"text\" class=\"search-input\" id=\"searchInput\" placeholder=\"Rechercher un projet...\">
                    </div>
                    <button class=\"filter-btn\">
                        <i data-lucide=\"sliders-horizontal\"></i>
                        Filtres avancés
                    </button>
                    <button class=\"export-btn\">
                        <i data-lucide=\"download\"></i>
                        Exporter
                    </button>
                </div>
            </div>
            <div class=\"table-wrapper\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th class=\"sortable\" data-sort=\"name\">Projet</th>
                            <th class=\"sortable\" data-sort=\"sector\">Secteur</th>
                            <th class=\"sortable\" data-sort=\"region\">Région</th>
                            <th class=\"sortable\" data-sort=\"progress\">Avancement</th>
                            <th class=\"sortable\" data-sort=\"budget\">Budget Total</th>
                            <th>Partenaires</th>
                            <th class=\"sortable\" data-sort=\"status\">Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"projectsTableBody\">
                        <!-- Data populated by JavaScript -->
                    </tbody>
                </table>
            </div>
            <div class=\"table-footer\">
                <div class=\"pagination-info\">
                    Affichage de <strong>1-10</strong> sur <strong>147</strong> projets
                </div>
                <div class=\"pagination\">
                    <button class=\"page-btn\" disabled>
                        <i data-lucide=\"chevron-left\"></i>
                    </button>
                    <button class=\"page-btn active\">1</button>
                    <button class=\"page-btn\">2</button>
                    <button class=\"page-btn\">3</button>
                    <button class=\"page-btn\">...</button>
                    <button class=\"page-btn\">15</button>
                    <button class=\"page-btn\">
                        <i data-lucide=\"chevron-right\"></i>
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer class=\"footer\">
        <div class=\"footer-content\">
            <div class=\"footer-brand\">
                <div class=\"footer-logo\">
                    <img src=\"armoirie-tchad.png\" alt=\"Armoirie du Tchad\">
                </div>
                <div class=\"footer-text\">
                    République du Tchad - Ministère des Finances et du Budget
                </div>
            </div>
            <div class=\"footer-motto\">
                UNITÉ • TRAVAIL • PROGRÈS
            </div>
        </div>
    </footer>

    <!-- ============================================
         PROJECT DETAIL MODAL
         ============================================ -->
    <div class=\"modal-overlay\" id=\"projectModal\">
        <div class=\"modal\">
            <div class=\"modal-header\">
                <button class=\"modal-close\" onclick=\"closeModal()\">
                    <i data-lucide=\"x\"></i>
                </button>
                <h2 class=\"modal-project-title\" id=\"modalTitle\">Construction du Pont de Ngueli</h2>
                <div class=\"modal-project-meta\">
                    <span><i data-lucide=\"hash\"></i> PRJ-2024-0042</span>
                    <span><i data-lucide=\"map-pin\"></i> N'Djamena</span>
                    <span><i data-lucide=\"building\"></i> Infrastructure</span>
                </div>
            </div>
            <div class=\"modal-body\">
                <div class=\"modal-tabs\">
                    <button class=\"modal-tab active\" onclick=\"switchTab('general')\">Informations générales</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('timeline')\">Suivi des étapes</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('finance')\">Financement</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('companies')\">Entreprises</button>
                    <button class=\"modal-tab\" onclick=\"switchTab('audit')\">Contrôle & Audit</button>
                </div>

                <!-- Tab: General -->
                <div class=\"tab-content active\" id=\"tab-general\">
                    <div class=\"info-grid\">
                        <div class=\"info-block full\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"file-text\"></i>
                                Description du Projet
                            </h4>
                            <p style=\"color: var(--gray-600); font-size: 0.9375rem; line-height: 1.7;\">
                                Construction d'un pont à haubans de 450 mètres reliant N'Djamena à la ville de Ngueli au Cameroun. 
                                Ce projet structurant vise à renforcer les échanges commerciaux dans la sous-région et à fluidifier 
                                le trafic transfrontalier. Les travaux comprennent la construction du tablier, des pylônes, des voies 
                                d'accès et des infrastructures connexes (poste de péage, éclairage).
                            </p>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"target\"></i>
                                Objectifs
                            </h4>
                            <ul style=\"color: var(--gray-600); font-size: 0.875rem; padding-left: 1.25rem;\">
                                <li style=\"margin-bottom: 0.5rem;\">Réduire le temps de traversée de 45 min à 5 min</li>
                                <li style=\"margin-bottom: 0.5rem;\">Augmenter les échanges commerciaux de 30%</li>
                                <li style=\"margin-bottom: 0.5rem;\">Créer 2000 emplois directs pendant la construction</li>
                                <li>Améliorer la sécurité routière transfrontalière</li>
                            </ul>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"gauge\"></i>
                                Indicateurs de Performance
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Avancement physique</span>
                                <span class=\"info-value\">67%</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Taux de décaissement</span>
                                <span class=\"info-value\">72%</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Respect des délais</span>
                                <span class=\"info-value\" style=\"color: var(--warning-600);\">-15 jours</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Conformité qualité</span>
                                <span class=\"info-value\" style=\"color: var(--success-600);\">98%</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"users\"></i>
                                Acteurs Clés
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Maître d'ouvrage</span>
                                <span class=\"info-value\">Min. Infrastructures</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Maître d'œuvre</span>
                                <span class=\"info-value\">BCEOM Tchad</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Contrôle technique</span>
                                <span class=\"info-value\">Bureau Veritas</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Supervision PTF</span>
                                <span class=\"info-value\">BAD / UE</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"calendar\"></i>
                                Calendrier
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Date de démarrage</span>
                                <span class=\"info-value\">15/03/2022</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Fin prévue initiale</span>
                                <span class=\"info-value\">30/06/2025</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Fin prévue révisée</span>
                                <span class=\"info-value\" style=\"color: var(--warning-600);\">15/08/2025</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Durée totale</span>
                                <span class=\"info-value\">41 mois</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"link\"></i>
                                Documents
                            </h4>
                            <div style=\"display: flex; flex-direction: column; gap: 0.5rem;\">
                                <a href=\"#\" style=\"color: var(--primary-600); text-decoration: none; font-size: 0.875rem; display: flex; align-items: center; gap: 0.5rem;\">
                                    <i data-lucide=\"file-text\" style=\"width: 14px; height: 14px;\"></i>
                                    Termes de Référence (TDR)
                                </a>
                                <a href=\"#\" style=\"color: var(--primary-600); text-decoration: none; font-size: 0.875rem; display: flex; align-items: center; gap: 0.5rem;\">
                                    <i data-lucide=\"file-text\" style=\"width: 14px; height: 14px;\"></i>
                                    Cahier des charges
                                </a>
                                <a href=\"#\" style=\"color: var(--primary-600); text-decoration: none; font-size: 0.875rem; display: flex; align-items: center; gap: 0.5rem;\">
                                    <i data-lucide=\"file-text\" style=\"width: 14px; height: 14px;\"></i>
                                    Convention de financement
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Timeline -->
                <div class=\"tab-content\" id=\"tab-timeline\">
                    <div class=\"timeline\">
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Études préliminaires et APD</span>
                                <span class=\"timeline-date\">Mars - Août 2022</span>
                            </div>
                            <div class=\"timeline-content\">
                                Études géotechniques, topographiques et hydrauliques. Validation de l'avant-projet détaillé. 
                                Livrable : Rapport d'études complet approuvé par le comité technique.
                            </div>
                        </div>
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Passation des marchés</span>
                                <span class=\"timeline-date\">Sept - Nov 2022</span>
                            </div>
                            <div class=\"timeline-content\">
                                Appel d'offres international. Évaluation des soumissions. Attribution du marché principal.
                                Livrable : Contrat signé avec l'entreprise adjudicataire.
                            </div>
                        </div>
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Travaux préparatoires</span>
                                <span class=\"timeline-date\">Déc 2022 - Mars 2023</span>
                            </div>
                            <div class=\"timeline-content\">
                                Installation du chantier, déplacement des réseaux, préparation des accès.
                                Livrable : Site prêt pour les travaux de génie civil.
                            </div>
                        </div>
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Fondations et piles</span>
                                <span class=\"timeline-date\">Avril 2023 - Fév 2024</span>
                            </div>
                            <div class=\"timeline-content\">
                                Construction des fondations profondes et des piles principales du pont.
                                Livrable : 4 piles et 2 culées réceptionnées.
                            </div>
                        </div>
                        <div class=\"timeline-item in-progress\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Construction du tablier</span>
                                <span class=\"timeline-date\">Mars 2024 - En cours</span>
                            </div>
                            <div class=\"timeline-content\">
                                Pose des voussoirs et câblage des haubans. Avancement actuel : 67%.
                                Livrable : Tablier complet avec haubans tensionnés.
                            </div>
                        </div>
                        <div class=\"timeline-item pending\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Équipements et finitions</span>
                                <span class=\"timeline-date\">Prévu : Mars - Juin 2025</span>
                            </div>
                            <div class=\"timeline-content\">
                                Revêtement de chaussée, glissières, éclairage, signalisation.
                                Livrable : Pont équipé prêt pour la réception provisoire.
                            </div>
                        </div>
                        <div class=\"timeline-item pending\">
                            <div class=\"timeline-dot\"></div>
                            <div class=\"timeline-header\">
                                <span class=\"timeline-title\">Réception et mise en service</span>
                                <span class=\"timeline-date\">Prévu : Juillet - Août 2025</span>
                            </div>
                            <div class=\"timeline-content\">
                                Réception provisoire, tests de charge, inauguration officielle.
                                Livrable : Pont opérationnel et ouvert à la circulation.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Finance -->
                <div class=\"tab-content\" id=\"tab-finance\">
                    <div class=\"info-grid\">
                        <div class=\"info-block full\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"coins\"></i>
                                Répartition du Financement
                            </h4>
                            <table class=\"finance-table\">
                                <thead>
                                    <tr>
                                        <th>Source</th>
                                        <th>Part (%)</th>
                                        <th>Montant</th>
                                        <th>Décaissé</th>
                                        <th>Taux</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Banque Africaine de Développement (BAD)</td>
                                        <td>45%</td>
                                        <td class=\"amount\">32,5 Mds FCFA</td>
                                        <td class=\"amount\">24,8 Mds FCFA</td>
                                        <td style=\"color: var(--success-600); font-weight: 600;\">76%</td>
                                    </tr>
                                    <tr>
                                        <td>Union Européenne</td>
                                        <td>30%</td>
                                        <td class=\"amount\">21,7 Mds FCFA</td>
                                        <td class=\"amount\">15,2 Mds FCFA</td>
                                        <td style=\"color: var(--warning-600); font-weight: 600;\">70%</td>
                                    </tr>
                                    <tr>
                                        <td>État Tchadien (Contrepartie)</td>
                                        <td>25%</td>
                                        <td class=\"amount\">18,1 Mds FCFA</td>
                                        <td class=\"amount\">12,0 Mds FCFA</td>
                                        <td style=\"color: var(--warning-600); font-weight: 600;\">66%</td>
                                    </tr>
                                    <tr style=\"background: var(--primary-50); font-weight: 600;\">
                                        <td>TOTAL</td>
                                        <td>100%</td>
                                        <td class=\"amount\">72,3 Mds FCFA</td>
                                        <td class=\"amount\">52,0 Mds FCFA</td>
                                        <td style=\"color: var(--primary-600);\">72%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Tab: Companies -->
                <div class=\"tab-content\" id=\"tab-companies\">
                    <div class=\"info-grid\">
                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"building\"></i>
                                Entreprise Principale
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Raison sociale</span>
                                <span class=\"info-value\">SOGEA-SATOM Tchad</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Rôle</span>
                                <span class=\"info-value\">Titulaire du lot principal</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">N° Contrat</span>
                                <span class=\"info-value\">CTR-2022-0847</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Montant contrat</span>
                                <span class=\"info-value\">58,4 Mds FCFA</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Avancement</span>
                                <span class=\"info-value\" style=\"color: var(--success-600);\">67%</span>
                            </div>
                        </div>

                        <div class=\"info-block\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"hard-hat\"></i>
                                Sous-traitants
                            </h4>
                            <div style=\"display: flex; flex-direction: column; gap: 1rem;\">
                                <div style=\"padding: 0.75rem; background: var(--white); border-radius: 0.5rem; border: 1px solid var(--gray-200);\">
                                    <strong style=\"color: var(--primary-800); font-size: 0.875rem;\">GETRAN Tchad</strong>
                                    <p style=\"font-size: 0.8125rem; color: var(--gray-500); margin-top: 0.25rem;\">Transport et logistique</p>
                                </div>
                                <div style=\"padding: 0.75rem; background: var(--white); border-radius: 0.5rem; border: 1px solid var(--gray-200);\">
                                    <strong style=\"color: var(--primary-800); font-size: 0.875rem;\">Électricité du Sahel</strong>
                                    <p style=\"font-size: 0.8125rem; color: var(--gray-500); margin-top: 0.25rem;\">Travaux électriques</p>
                                </div>
                                <div style=\"padding: 0.75rem; background: var(--white); border-radius: 0.5rem; border: 1px solid var(--gray-200);\">
                                    <strong style=\"color: var(--primary-800); font-size: 0.875rem;\">Métallurgie Centrale</strong>
                                    <p style=\"font-size: 0.8125rem; color: var(--gray-500); margin-top: 0.25rem;\">Structures métalliques</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"info-block full\">
                            <h4 class=\"info-block-title\">
                                <i data-lucide=\"shield-check\"></i>
                                Bureau de Contrôle
                            </h4>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Bureau</span>
                                <span class=\"info-value\">Bureau Veritas Construction</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Mission</span>
                                <span class=\"info-value\">Contrôle technique et surveillance travaux</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Chef de mission</span>
                                <span class=\"info-value\">Ing. Marc Dupont</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Dernière visite</span>
                                <span class=\"info-value\">12/12/2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Audit -->
                <div class=\"tab-content\" id=\"tab-audit\">
                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"clipboard-check\"></i>
                                Contrôle technique mensuel
                            </span>
                            <span class=\"audit-date\">12 décembre 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Inspection des travaux de pose des voussoirs V18 à V22. Vérification de la tension des câbles de précontrainte. 
                            Contrôle de la géométrie du tablier.
                        </div>
                        <span class=\"audit-status conforme\">
                            <i data-lucide=\"check-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Conforme - Aucune réserve
                        </span>
                    </div>

                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"file-search\"></i>
                                Audit financier semestriel
                            </span>
                            <span class=\"audit-date\">30 octobre 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Audit des décaissements et de la conformité des dépenses. Vérification des procédures de passation des marchés 
                            et de la documentation comptable.
                        </div>
                        <span class=\"audit-status reserve\">
                            <i data-lucide=\"alert-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Conforme avec réserves mineures
                        </span>
                    </div>

                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"shield\"></i>
                                Contrôle environnemental
                            </span>
                            <span class=\"audit-date\">15 septembre 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Évaluation de l'impact environnemental et des mesures de mitigation. Vérification du respect du PGES 
                            (Plan de Gestion Environnementale et Sociale).
                        </div>
                        <span class=\"audit-status conforme\">
                            <i data-lucide=\"check-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Conforme - PGES respecté
                        </span>
                    </div>

                    <div class=\"audit-item\">
                        <div class=\"audit-header\">
                            <span class=\"audit-type\">
                                <i data-lucide=\"users\"></i>
                                Mission de supervision BAD
                            </span>
                            <span class=\"audit-date\">22 août 2024</span>
                        </div>
                        <div class=\"audit-content\">
                            Mission conjointe BAD/UE de supervision semestrielle. Revue de l'avancement physique et financier. 
                            Évaluation des risques et recommandations.
                        </div>
                        <span class=\"audit-status reserve\">
                            <i data-lucide=\"alert-circle\" style=\"width: 14px; height: 14px;\"></i>
                            Recommandations émises (retard 15 jours)
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         JAVASCRIPT
         ============================================ -->
    <script>
        // ============================================
        // DATA - Données simulées réalistes
        // ============================================
        const projectsData = [
            {
                id: \"PRJ-2024-0042\",
                name: \"Construction du Pont de Ngueli\",
                sector: \"Infrastructure\",
                sectorKey: \"infrastructure\",
                region: \"N'Djamena\",
                progress: 67,
                budget: 72300000000,
                budgetDisplay: \"72,3 Mds\",
                partners: [\"BAD\", \"UE\", \"État\"],
                company: \"SOGEA-SATOM\",
                status: \"warning\",
                statusLabel: \"Alerte\"
            },
            {
                id: \"PRJ-2024-0038\",
                name: \"Réhabilitation Hôpital Général de Référence\",
                sector: \"Santé\",
                sectorKey: \"sante\",
                region: \"N'Djamena\",
                progress: 85,
                budget: 18500000000,
                budgetDisplay: \"18,5 Mds\",
                partners: [\"BM\", \"OMS\"],
                company: \"COLAS Tchad\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0055\",
                name: \"Programme d'Appui à l'Éducation de Base\",
                sector: \"Éducation\",
                sectorKey: \"education\",
                region: \"Logone Oriental\",
                progress: 42,
                budget: 8200000000,
                budgetDisplay: \"8,2 Mds\",
                partners: [\"AFD\", \"UNICEF\"],
                company: \"BATI-PLUS\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0061\",
                name: \"Électrification Rurale Zone Est\",
                sector: \"Énergie\",
                sectorKey: \"energie\",
                region: \"Ouaddaï\",
                progress: 23,
                budget: 15800000000,
                budgetDisplay: \"15,8 Mds\",
                partners: [\"BID\", \"État\"],
                company: \"VERGNET\",
                status: \"critical\",
                statusLabel: \"Critique\"
            },
            {
                id: \"PRJ-2023-0089\",
                name: \"Aménagement Périmètre Irrigué Bongor\",
                sector: \"Agriculture\",
                sectorKey: \"agriculture\",
                region: \"Mayo-Kebbi Est\",
                progress: 91,
                budget: 12400000000,
                budgetDisplay: \"12,4 Mds\",
                partners: [\"FIDA\", \"BAD\"],
                company: \"SATOM-AGRI\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0072\",
                name: \"Construction Lycées d'Excellence\",
                sector: \"Éducation\",
                sectorKey: \"education\",
                region: \"N'Djamena\",
                progress: 56,
                budget: 9600000000,
                budgetDisplay: \"9,6 Mds\",
                partners: [\"AFD\", \"État\"],
                company: \"GETRAN\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2024-0028\",
                name: \"Route Nationale RN1 - Tronçon Abéché\",
                sector: \"Infrastructure\",
                sectorKey: \"infrastructure\",
                region: \"Ouaddaï\",
                progress: 34,
                budget: 45200000000,
                budgetDisplay: \"45,2 Mds\",
                partners: [\"UE\", \"BAD\", \"État\"],
                company: \"RAZEL-BEC\",
                status: \"warning\",
                statusLabel: \"Alerte\"
            },
            {
                id: \"PRJ-2024-0094\",
                name: \"Centre de Santé Intégré Lac\",
                sector: \"Santé\",
                sectorKey: \"sante\",
                region: \"Lac\",
                progress: 78,
                budget: 4800000000,
                budgetDisplay: \"4,8 Mds\",
                partners: [\"GAVI\", \"OMS\"],
                company: \"SETUBA\",
                status: \"ok\",
                statusLabel: \"OK\"
            },
            {
                id: \"PRJ-2023-0112\",
                name: \"Centrale Solaire Photovoltaïque\",
                sector: \"Énergie\",
                sectorKey: \"energie\",
                region: \"N'Djamena\",
                progress: 15,
                budget: 28900000000,
                budgetDisplay: \"28,9 Mds\",
                partners: [\"AFD\", \"UE\", \"GCF\"],
                company: \"TOTAL Énergies\",
                status: \"critical\",
                statusLabel: \"Critique\"
            },
            {
                id: \"PRJ-2024-0103\",
                name: \"Programme Semences Améliorées\",
                sector: \"Agriculture\",
                sectorKey: \"agriculture\",
                region: \"Logone Oriental\",
                progress: 63,
                budget: 3200000000,
                budgetDisplay: \"3,2 Mds\",
                partners: [\"FAO\", \"FIDA\"],
                company: \"ONDR\",
                status: \"ok\",
                statusLabel: \"OK\"
            }
        ];

        // ============================================
        // INITIALIZATION
        // ============================================
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide icons
            lucide.createIcons();
            
            // Initialize counters animation
            animateCounters();
            
            // Initialize charts
            initCharts();
            
            // Populate projects table
            populateProjectsTable(projectsData);
            
            // Setup event listeners
            setupEventListeners();
        });

        // ============================================
        // COUNTER ANIMATION
        // ============================================
        function animateCounters() {
            const counters = document.querySelectorAll('[data-counter]');
            
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.counter);
                const suffix = counter.dataset.suffix || '';
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                
                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + suffix;
                    }
                };
                
                // Start animation when element is visible
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(counter);
            });
        }

        // ============================================
        // CHARTS INITIALIZATION - Couleurs Armoirie
        // ============================================
        function initCharts() {
            // Partners Doughnut Chart
            const ctxPartners = document.getElementById('chartPartners').getContext('2d');
            new Chart(ctxPartners, {
                type: 'doughnut',
                data: {
                    labels: ['BAD', 'Union Européenne', 'Banque Mondiale', 'AFD', 'État Tchadien', 'Autres'],
                    datasets: [{
                        data: [185, 142, 128, 96, 186, 105],
                        backgroundColor: [
                            '#004d99',
                            '#daa520',
                            '#10b981',
                            '#c41e3a',
                            '#003366',
                            '#6b7280'
                        ],
                        borderWidth: 0,
                        spacing: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '65%',
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle',
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + ' Mds FCFA';
                                }
                            }
                        }
                    }
                }
            });

            // Sectors Bar Chart
            const ctxSectors = document.getElementById('chartSectors').getContext('2d');
            new Chart(ctxSectors, {
                type: 'bar',
                data: {
                    labels: ['Infrastructure', 'Énergie', 'Santé', 'Éducation', 'Agriculture', 'Eau'],
                    datasets: [{
                        label: 'Budget (Mds FCFA)',
                        data: [312, 148, 95, 87, 124, 76],
                        backgroundColor: [
                            'rgba(0, 77, 153, 0.85)',
                            'rgba(218, 165, 32, 0.85)',
                            'rgba(16, 185, 129, 0.85)',
                            'rgba(196, 30, 58, 0.85)',
                            'rgba(0, 51, 102, 0.85)',
                            'rgba(59, 130, 246, 0.85)'
                        ],
                        borderRadius: 6,
                        borderSkipped: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.05)'
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                },
                                callback: function(value) {
                                    return value + ' Mds';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });

            // Execution Line Chart
            const ctxExecution = document.getElementById('chartExecution').getContext('2d');
            new Chart(ctxExecution, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [
                        {
                            label: 'Budget prévisionnel',
                            data: [70, 140, 210, 280, 350, 420, 490, 560, 630, 700, 770, 842],
                            borderColor: '#004d99',
                            backgroundColor: 'rgba(0, 77, 153, 0.1)',
                            fill: true,
                            tension: 0.4,
                            borderWidth: 3,
                            pointRadius: 4,
                            pointBackgroundColor: '#004d99'
                        },
                        {
                            label: 'Budget réel décaissé',
                            data: [45, 95, 150, 195, 255, 310, 345, 375, 395, 410, 415, 418],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            fill: true,
                            tension: 0.4,
                            borderWidth: 3,
                            pointRadius: 4,
                            pointBackgroundColor: '#10b981'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.raw + ' Mds FCFA';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.05)'
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                },
                                callback: function(value) {
                                    return value + ' Mds';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    family: \"'DM Sans', sans-serif\",
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });
        }

        // ============================================
        // PROJECTS TABLE
        // ============================================
        function populateProjectsTable(projects) {
            const tbody = document.getElementById('projectsTableBody');
            tbody.innerHTML = '';
            
            projects.forEach(project => {
                const progressColor = project.progress >= 70 ? 'var(--success-500)' : 
                                     project.progress >= 40 ? 'var(--gold-500)' : 'var(--red-500)';
                
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div class=\"project-name\">
                            \${project.name}
                            <span class=\"project-code\">\${project.id}</span>
                        </div>
                    </td>
                    <td>
                        <span class=\"sector-badge\">\${project.sector}</span>
                    </td>
                    <td>\${project.region}</td>
                    <td class=\"progress-cell\">
                        <div class=\"progress-bar\">
                            <div class=\"progress-fill\" style=\"width: \${project.progress}%; background: \${progressColor};\"></div>
                        </div>
                        <span class=\"progress-text\">\${project.progress}% complété</span>
                    </td>
                    <td class=\"budget-cell\">
                        <span class=\"budget-amount\">\${project.budgetDisplay}</span>
                        <span class=\"budget-currency\">FCFA</span>
                    </td>
                    <td class=\"partners-cell\">
                        <div class=\"partner-tags\">
                            \${project.partners.slice(0, 2).map(p => `<span class=\"partner-tag\">\${p}</span>`).join('')}
                            \${project.partners.length > 2 ? `<span class=\"partner-tag more\">+\${project.partners.length - 2}</span>` : ''}
                        </div>
                    </td>
                    <td>
                        <span class=\"status-badge \${project.status}\">
                            \${project.status === 'ok' ? '<i data-lucide=\"check-circle\"></i>' : 
                              project.status === 'warning' ? '<i data-lucide=\"alert-circle\"></i>' : 
                              '<i data-lucide=\"x-circle\"></i>'}
                            \${project.statusLabel}
                        </span>
                    </td>
                    <td>
                        <button class=\"action-btn\" onclick=\"openProjectModal('\${project.id}')\">
                            <i data-lucide=\"eye\"></i>
                            Détails
                        </button>
                    </td>
                `;
                tbody.appendChild(row);
            });
            
            // Reinitialize icons for new content
            lucide.createIcons();
        }

        // ============================================
        // MODAL FUNCTIONS
        // ============================================
        function openProjectModal(projectId) {
            const modal = document.getElementById('projectModal');
            const project = projectsData.find(p => p.id === projectId);
            
            if (project) {
                document.getElementById('modalTitle').textContent = project.name;
            }
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            lucide.createIcons();
        }

        function closeModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        function switchTab(tabName) {
            // Update tab buttons
            document.querySelectorAll('.modal-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            event.target.classList.add('active');
            
            // Update tab content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            document.getElementById('tab-' + tabName).classList.add('active');
            
            lucide.createIcons();
        }

        // Close modal on overlay click
        document.getElementById('projectModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // ============================================
        // EVENT LISTENERS
        // ============================================
        function setupEventListeners() {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const filteredProjects = projectsData.filter(project => 
                    project.name.toLowerCase().includes(searchTerm) ||
                    project.id.toLowerCase().includes(searchTerm) ||
                    project.sector.toLowerCase().includes(searchTerm) ||
                    project.region.toLowerCase().includes(searchTerm)
                );
                populateProjectsTable(filteredProjects);
            });

            // Filter functionality
            const filterSelects = ['filterYear', 'filterSector', 'filterRegion', 'filterPartner'];
            filterSelects.forEach(selectId => {
                document.getElementById(selectId).addEventListener('change', applyFilters);
            });
        }

        function applyFilters() {
            const sector = document.getElementById('filterSector').value;
            const region = document.getElementById('filterRegion').value;
            
            let filteredProjects = [...projectsData];
            
            if (sector) {
                filteredProjects = filteredProjects.filter(p => p.sectorKey === sector);
            }
            
            if (region) {
                filteredProjects = filteredProjects.filter(p => 
                    p.region.toLowerCase().includes(region.replace('-', ' '))
                );
            }
            
            populateProjectsTable(filteredProjects);
        }

        // ============================================
        // UTILITY FUNCTIONS
        // ============================================
        function formatCurrency(amount) {
            if (amount >= 1000000000) {
                return (amount / 1000000000).toFixed(1) + ' Mds';
            } else if (amount >= 1000000) {
                return (amount / 1000000).toFixed(1) + ' M';
            }
            return amount.toLocaleString('fr-FR');
        }
    </script>
</body>
</html>
", "dashboard_top_management.html.twig", "/home/xdevcorp/Projects/sigep/templates/dashboard_top_management.html.twig");
    }
}
