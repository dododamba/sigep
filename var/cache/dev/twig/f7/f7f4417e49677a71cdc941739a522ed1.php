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

/* activity/show.html.twig */
class __TwigTemplate_70c34c47caf36d5363758a706edcfe0e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/show.html.twig"));

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

        yield "Détails de l'Activité - SIGEP Tchad";
        
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
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .page-header h1 {
        font-size: 1.75rem;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
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

    .btn-secondary {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        backdrop-filter: blur(10px);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .details-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 24px;
        margin-bottom: 2rem;
    }

    .detail-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        padding: 24px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
    }

    .detail-card-header {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-row {
        padding: 14px 0;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .detail-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-muted);
        min-width: 140px;
    }

    .detail-value {
        font-size: 0.875rem;
        color: var(--text-primary);
        flex: 1;
        text-align: right;
    }

    .activity-type-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.875rem;
    }

    .activity-type-badge.login { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .activity-type-badge.logout { background: rgba(148, 163, 184, 0.1); color: var(--text-muted); }
    .activity-type-badge.create { background: rgba(59, 130, 246, 0.1); color: var(--info); }
    .activity-type-badge.update { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    .activity-type-badge.delete { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
    .activity-type-badge.view { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }
    .activity-type-badge.export { background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue); }
    .activity-type-badge.validate { background: rgba(16, 185, 129, 0.1); color: var(--success); }

    .badge {
        padding: 6px 14px;
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

    .user-card {
        background: var(--bg-tertiary);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
    }

    .user-avatar {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        background: var(--accent-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 2rem;
        margin: 0 auto 16px;
    }

    .user-name {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .user-email {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin-bottom: 12px;
    }

    .user-role {
        display: inline-block;
        padding: 6px 12px;
        background: rgba(254, 203, 0, 0.2);
        color: #b8860b;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .metadata-section {
        background: var(--bg-tertiary);
        border-radius: 12px;
        padding: 16px;
        margin-top: 16px;
    }

    .metadata-title {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-secondary);
        margin-bottom: 12px;
    }

    .metadata-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid var(--border-color);
        font-size: 0.813rem;
    }

    .metadata-item:last-child {
        border-bottom: none;
    }

    .metadata-key {
        color: var(--text-muted);
    }

    .metadata-value {
        color: var(--text-primary);
        font-weight: 500;
    }

    .changes-section {
        margin-top: 16px;
    }

    .change-item {
        background: var(--bg-tertiary);
        border-radius: 8px;
        padding: 12px;
        margin-bottom: 8px;
    }

    .change-field {
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 6px;
        font-size: 0.875rem;
    }

    .change-values {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 0.813rem;
    }

    .change-old {
        color: var(--danger);
        text-decoration: line-through;
    }

    .change-new {
        color: var(--success);
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .details-grid {
            grid-template-columns: 1fr;
        }

        .page-header {
            flex-direction: column;
            gap: 16px;
            align-items: flex-start;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 308
        yield "<div class=\"container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1>
            <i data-lucide=\"info\"></i>
            Détails de l'Activité
        </h1>
        <a href=\"";
        // line 315
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_index");
        yield "\" class=\"btn btn-secondary\">
            <i data-lucide=\"arrow-left\"></i>
            Retour à la liste
        </a>
    </div>

    <!-- Details Grid -->
    <div class=\"details-grid\">
        <!-- Main Details -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"file-text\"></i>
                Informations Principales
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">ID</span>
                <span class=\"detail-value\"><strong>#";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 332, $this->source); })()), "id", [], "any", false, false, false, 332), "html", null, true);
        yield "</strong></span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Type d'activité</span>
                <span class=\"detail-value\">
                    <span class=\"activity-type-badge ";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 338, $this->source); })()), "activityType", [], "any", false, false, false, 338), "html", null, true);
        yield "\">
                        <i data-lucide=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 339, $this->source); })()), "activityIcon", [], "any", false, false, false, 339), "html", null, true);
        yield "\"></i>
                        ";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 340, $this->source); })()), "activityTypeLabel", [], "any", false, false, false, 340), "html", null, true);
        yield "
                    </span>
                </span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Niveau d'importance</span>
                <span class=\"detail-value\">
                    <span class=\"badge ";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 348, $this->source); })()), "level", [], "any", false, false, false, 348), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 348, $this->source); })()), "levelLabel", [], "any", false, false, false, 348), "html", null, true);
        yield "</span>
                </span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Description</span>
                <span class=\"detail-value\">";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 354, $this->source); })()), "description", [], "any", false, false, false, 354), "html", null, true);
        yield "</span>
            </div>

            ";
        // line 357
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 357, $this->source); })()), "entityType", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 358
            yield "            <div class=\"detail-row\">
                <span class=\"detail-label\">Type d'entité</span>
                <span class=\"detail-value\">";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 360, $this->source); })()), "entityTypeLabel", [], "any", false, false, false, 360), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 363
        yield "
            ";
        // line 364
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 364, $this->source); })()), "entityName", [], "any", false, false, false, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 365
            yield "            <div class=\"detail-row\">
                <span class=\"detail-label\">Nom de l'entité</span>
                <span class=\"detail-value\"><strong>";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 367, $this->source); })()), "entityName", [], "any", false, false, false, 367), "html", null, true);
            yield "</strong></span>
            </div>
            ";
        }
        // line 370
        yield "
            ";
        // line 371
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 371, $this->source); })()), "entityId", [], "any", false, false, false, 371)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 372
            yield "            <div class=\"detail-row\">
                <span class=\"detail-label\">ID de l'entité</span>
                <span class=\"detail-value\">#";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 374, $this->source); })()), "entityId", [], "any", false, false, false, 374), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 377
        yield "
            <div class=\"detail-row\">
                <span class=\"detail-label\">Date et heure</span>
                <span class=\"detail-value\">";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 380, $this->source); })()), "createdAt", [], "any", false, false, false, 380), "d/m/Y à H:i:s"), "html", null, true);
        yield "</span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Il y a</span>
                <span class=\"detail-value\">";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 385, $this->source); })()), "timeAgo", [], "any", false, false, false, 385), "html", null, true);
        yield "</span>
            </div>

            ";
        // line 388
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 388, $this->source); })()), "changes", [], "any", false, false, false, 388))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 389
            yield "            <div class=\"changes-section\">
                <div class=\"metadata-title\">
                    <i data-lucide=\"edit-3\"></i>
                    Modifications Effectuées
                </div>
                ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 394, $this->source); })()), "changes", [], "any", false, false, false, 394));
            foreach ($context['_seq'] as $context["field"] => $context["change"]) {
                // line 395
                yield "                <div class=\"change-item\">
                    <div class=\"change-field\">";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["field"]), "html", null, true);
                yield "</div>
                    <div class=\"change-values\">
                        <span class=\"change-old\">";
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["change"], "old", [], "any", false, false, false, 398), "html", null, true);
                yield "</span>
                        <i data-lucide=\"arrow-right\" style=\"width: 16px; height: 16px;\"></i>
                        <span class=\"change-new\">";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["change"], "new", [], "any", false, false, false, 400), "html", null, true);
                yield "</span>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field'], $context['change'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            yield "            </div>
            ";
        }
        // line 406
        yield "        </div>

        <!-- Sidebar -->
        <div>
            <!-- User Card -->
            <div class=\"detail-card\">
                <div class=\"detail-card-header\">
                    <i data-lucide=\"user\"></i>
                    Utilisateur
                </div>

                <div class=\"user-card\">
                    <div class=\"user-avatar\">
                        ";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 419, $this->source); })()), "user", [], "any", false, false, false, 419), "firstname", [], "any", false, false, false, 419)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 419, $this->source); })()), "user", [], "any", false, false, false, 419), "lastname", [], "any", false, false, false, 419)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-name\">";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "fullName", [], "any", false, false, false, 421), "html", null, true);
        yield "</div>
                    <div class=\"user-email\">";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 422, $this->source); })()), "user", [], "any", false, false, false, 422), "email", [], "any", false, false, false, 422), "html", null, true);
        yield "</div>
                    ";
        // line 423
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 423, $this->source); })()), "user", [], "any", false, false, false, 423), "accessLevel", [], "any", false, false, false, 423)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 424
            yield "                    <span class=\"user-role\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424), "accessLevel", [], "any", false, false, false, 424)), "html", null, true);
            yield "</span>
                    ";
        }
        // line 426
        yield "                </div>
            </div>

            <!-- Technical Details -->
            <div class=\"detail-card\" style=\"margin-top: 24px;\">
                <div class=\"detail-card-header\">
                    <i data-lucide=\"settings\"></i>
                    Informations Techniques
                </div>

                <div class=\"detail-row\">
                    <span class=\"detail-label\">Adresse IP</span>
                    <span class=\"detail-value\">";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 438, $this->source); })()), "ipAddress", [], "any", false, false, false, 438), "html", null, true);
        yield "</span>
                </div>

                ";
        // line 441
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 441, $this->source); })()), "route", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 442
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Route</span>
                    <span class=\"detail-value\"><code>";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 444, $this->source); })()), "route", [], "any", false, false, false, 444), "html", null, true);
            yield "</code></span>
                </div>
                ";
        }
        // line 447
        yield "
                ";
        // line 448
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 448, $this->source); })()), "method", [], "any", false, false, false, 448)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 449
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Méthode HTTP</span>
                    <span class=\"detail-value\"><strong>";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 451, $this->source); })()), "method", [], "any", false, false, false, 451), "html", null, true);
            yield "</strong></span>
                </div>
                ";
        }
        // line 454
        yield "
                ";
        // line 455
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 455, $this->source); })()), "duration", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée</span>
                    <span class=\"detail-value\">";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 458, $this->source); })()), "duration", [], "any", false, false, false, 458), "html", null, true);
            yield " ms</span>
                </div>
                ";
        }
        // line 461
        yield "
                ";
        // line 462
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 462, $this->source); })()), "userAgent", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 463
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">User Agent</span>
                    <span class=\"detail-value\" style=\"font-size: 0.75rem; word-break: break-all;\">
                        ";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 466, $this->source); })()), "userAgent", [], "any", false, false, false, 466), "html", null, true);
            yield "
                    </span>
                </div>
                ";
        }
        // line 470
        yield "            </div>

            <!-- Metadata -->
            ";
        // line 473
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 473, $this->source); })()), "metadata", [], "any", false, false, false, 473))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 474
            yield "            <div class=\"metadata-section\" style=\"margin-top: 24px;\">
                <div class=\"metadata-title\">
                    <i data-lucide=\"database\"></i>
                    Métadonnées Additionnelles
                </div>
                ";
            // line 479
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 479, $this->source); })()), "metadata", [], "any", false, false, false, 479));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 480
                yield "                <div class=\"metadata-item\">
                    <span class=\"metadata-key\">";
                // line 481
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["key"]), "html", null, true);
                yield "</span>
                    <span class=\"metadata-value\">";
                // line 482
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</span>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            yield "            </div>
            ";
        }
        // line 487
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 492
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 493
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
        return "activity/show.html.twig";
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
        return array (  753 => 493,  743 => 492,  732 => 487,  728 => 485,  719 => 482,  715 => 481,  712 => 480,  708 => 479,  701 => 474,  699 => 473,  694 => 470,  687 => 466,  682 => 463,  680 => 462,  677 => 461,  671 => 458,  667 => 456,  665 => 455,  662 => 454,  656 => 451,  652 => 449,  650 => 448,  647 => 447,  641 => 444,  637 => 442,  635 => 441,  629 => 438,  615 => 426,  609 => 424,  607 => 423,  603 => 422,  599 => 421,  593 => 419,  578 => 406,  574 => 404,  564 => 400,  559 => 398,  554 => 396,  551 => 395,  547 => 394,  540 => 389,  538 => 388,  532 => 385,  524 => 380,  519 => 377,  513 => 374,  509 => 372,  507 => 371,  504 => 370,  498 => 367,  494 => 365,  492 => 364,  489 => 363,  483 => 360,  479 => 358,  477 => 357,  471 => 354,  460 => 348,  449 => 340,  445 => 339,  441 => 338,  432 => 332,  412 => 315,  403 => 308,  393 => 307,  87 => 7,  77 => 6,  60 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/activity/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails de l'Activité - SIGEP Tchad{% endblock %}

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
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .page-header h1 {
        font-size: 1.75rem;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
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

    .btn-secondary {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        backdrop-filter: blur(10px);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .details-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 24px;
        margin-bottom: 2rem;
    }

    .detail-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        padding: 24px;
        border: 1px solid var(--border-color);
        box-shadow: var(--shadow-sm);
    }

    .detail-card-header {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-row {
        padding: 14px 0;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .detail-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-muted);
        min-width: 140px;
    }

    .detail-value {
        font-size: 0.875rem;
        color: var(--text-primary);
        flex: 1;
        text-align: right;
    }

    .activity-type-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.875rem;
    }

    .activity-type-badge.login { background: rgba(16, 185, 129, 0.1); color: var(--success); }
    .activity-type-badge.logout { background: rgba(148, 163, 184, 0.1); color: var(--text-muted); }
    .activity-type-badge.create { background: rgba(59, 130, 246, 0.1); color: var(--info); }
    .activity-type-badge.update { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
    .activity-type-badge.delete { background: rgba(239, 68, 68, 0.1); color: var(--danger); }
    .activity-type-badge.view { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }
    .activity-type-badge.export { background: rgba(0, 38, 100, 0.1); color: var(--tchad-blue); }
    .activity-type-badge.validate { background: rgba(16, 185, 129, 0.1); color: var(--success); }

    .badge {
        padding: 6px 14px;
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

    .user-card {
        background: var(--bg-tertiary);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
    }

    .user-avatar {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        background: var(--accent-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 2rem;
        margin: 0 auto 16px;
    }

    .user-name {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .user-email {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin-bottom: 12px;
    }

    .user-role {
        display: inline-block;
        padding: 6px 12px;
        background: rgba(254, 203, 0, 0.2);
        color: #b8860b;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .metadata-section {
        background: var(--bg-tertiary);
        border-radius: 12px;
        padding: 16px;
        margin-top: 16px;
    }

    .metadata-title {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-secondary);
        margin-bottom: 12px;
    }

    .metadata-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid var(--border-color);
        font-size: 0.813rem;
    }

    .metadata-item:last-child {
        border-bottom: none;
    }

    .metadata-key {
        color: var(--text-muted);
    }

    .metadata-value {
        color: var(--text-primary);
        font-weight: 500;
    }

    .changes-section {
        margin-top: 16px;
    }

    .change-item {
        background: var(--bg-tertiary);
        border-radius: 8px;
        padding: 12px;
        margin-bottom: 8px;
    }

    .change-field {
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 6px;
        font-size: 0.875rem;
    }

    .change-values {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 0.813rem;
    }

    .change-old {
        color: var(--danger);
        text-decoration: line-through;
    }

    .change-new {
        color: var(--success);
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .details-grid {
            grid-template-columns: 1fr;
        }

        .page-header {
            flex-direction: column;
            gap: 16px;
            align-items: flex-start;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1>
            <i data-lucide=\"info\"></i>
            Détails de l'Activité
        </h1>
        <a href=\"{{ path('app_activity_index') }}\" class=\"btn btn-secondary\">
            <i data-lucide=\"arrow-left\"></i>
            Retour à la liste
        </a>
    </div>

    <!-- Details Grid -->
    <div class=\"details-grid\">
        <!-- Main Details -->
        <div class=\"detail-card\">
            <div class=\"detail-card-header\">
                <i data-lucide=\"file-text\"></i>
                Informations Principales
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">ID</span>
                <span class=\"detail-value\"><strong>#{{ activity.id }}</strong></span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Type d'activité</span>
                <span class=\"detail-value\">
                    <span class=\"activity-type-badge {{ activity.activityType }}\">
                        <i data-lucide=\"{{ activity.activityIcon }}\"></i>
                        {{ activity.activityTypeLabel }}
                    </span>
                </span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Niveau d'importance</span>
                <span class=\"detail-value\">
                    <span class=\"badge {{ activity.level }}\">{{ activity.levelLabel }}</span>
                </span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Description</span>
                <span class=\"detail-value\">{{ activity.description }}</span>
            </div>

            {% if activity.entityType %}
            <div class=\"detail-row\">
                <span class=\"detail-label\">Type d'entité</span>
                <span class=\"detail-value\">{{ activity.entityTypeLabel }}</span>
            </div>
            {% endif %}

            {% if activity.entityName %}
            <div class=\"detail-row\">
                <span class=\"detail-label\">Nom de l'entité</span>
                <span class=\"detail-value\"><strong>{{ activity.entityName }}</strong></span>
            </div>
            {% endif %}

            {% if activity.entityId %}
            <div class=\"detail-row\">
                <span class=\"detail-label\">ID de l'entité</span>
                <span class=\"detail-value\">#{{ activity.entityId }}</span>
            </div>
            {% endif %}

            <div class=\"detail-row\">
                <span class=\"detail-label\">Date et heure</span>
                <span class=\"detail-value\">{{ activity.createdAt|date('d/m/Y à H:i:s') }}</span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">Il y a</span>
                <span class=\"detail-value\">{{ activity.timeAgo }}</span>
            </div>

            {% if activity.changes is not empty %}
            <div class=\"changes-section\">
                <div class=\"metadata-title\">
                    <i data-lucide=\"edit-3\"></i>
                    Modifications Effectuées
                </div>
                {% for field, change in activity.changes %}
                <div class=\"change-item\">
                    <div class=\"change-field\">{{ field|title }}</div>
                    <div class=\"change-values\">
                        <span class=\"change-old\">{{ change.old }}</span>
                        <i data-lucide=\"arrow-right\" style=\"width: 16px; height: 16px;\"></i>
                        <span class=\"change-new\">{{ change.new }}</span>
                    </div>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>

        <!-- Sidebar -->
        <div>
            <!-- User Card -->
            <div class=\"detail-card\">
                <div class=\"detail-card-header\">
                    <i data-lucide=\"user\"></i>
                    Utilisateur
                </div>

                <div class=\"user-card\">
                    <div class=\"user-avatar\">
                        {{ activity.user.firstname|first }}{{ activity.user.lastname|first }}
                    </div>
                    <div class=\"user-name\">{{ activity.user.fullName }}</div>
                    <div class=\"user-email\">{{ activity.user.email }}</div>
                    {% if activity.user.accessLevel %}
                    <span class=\"user-role\">{{ activity.user.accessLevel|upper }}</span>
                    {% endif %}
                </div>
            </div>

            <!-- Technical Details -->
            <div class=\"detail-card\" style=\"margin-top: 24px;\">
                <div class=\"detail-card-header\">
                    <i data-lucide=\"settings\"></i>
                    Informations Techniques
                </div>

                <div class=\"detail-row\">
                    <span class=\"detail-label\">Adresse IP</span>
                    <span class=\"detail-value\">{{ activity.ipAddress }}</span>
                </div>

                {% if activity.route %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Route</span>
                    <span class=\"detail-value\"><code>{{ activity.route }}</code></span>
                </div>
                {% endif %}

                {% if activity.method %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Méthode HTTP</span>
                    <span class=\"detail-value\"><strong>{{ activity.method }}</strong></span>
                </div>
                {% endif %}

                {% if activity.duration %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Durée</span>
                    <span class=\"detail-value\">{{ activity.duration }} ms</span>
                </div>
                {% endif %}

                {% if activity.userAgent %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">User Agent</span>
                    <span class=\"detail-value\" style=\"font-size: 0.75rem; word-break: break-all;\">
                        {{ activity.userAgent }}
                    </span>
                </div>
                {% endif %}
            </div>

            <!-- Metadata -->
            {% if activity.metadata is not empty %}
            <div class=\"metadata-section\" style=\"margin-top: 24px;\">
                <div class=\"metadata-title\">
                    <i data-lucide=\"database\"></i>
                    Métadonnées Additionnelles
                </div>
                {% for key, value in activity.metadata %}
                <div class=\"metadata-item\">
                    <span class=\"metadata-key\">{{ key|title }}</span>
                    <span class=\"metadata-value\">{{ value }}</span>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>
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
", "activity/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\activity\\show.html.twig");
    }
}
