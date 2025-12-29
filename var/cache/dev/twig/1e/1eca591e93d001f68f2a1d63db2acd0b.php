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

/* decaissement/show.html.twig */
class __TwigTemplate_8d1d63c55ee4153f626a4900d43f734b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "decaissement/show.html.twig"));

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

        yield "Décaissement ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 3, $this->source); })()), "reference", [], "any", false, false, false, 3), "html", null, true);
        yield " - SIGEP Tchad";
        
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
    .detail-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 24px;
    }

    .detail-header {
        background: var(--accent-gradient);
        color: white;
        padding: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .detail-header h3 {
        font-size: 1.4rem;
        font-weight: 700;
    }

    .detail-header p {
        opacity: 0.9;
        margin-top: 4px;
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        background: white;
    }

    .status-badge.warning { color: #f59e0b; }
    .status-badge.info { color: #3b82f6; }
    .status-badge.success { color: #10b981; }
    .status-badge.danger { color: #ef4444; }
    .status-badge.secondary { color: #64748b; }

    .detail-section {
        padding: 24px;
        border-bottom: 1px solid var(--border-color);
    }

    .detail-section:last-child {
        border-bottom: none;
    }

    .section-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 16px;
        color: var(--text-primary);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .detail-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .detail-label {
        font-size: 0.8rem;
        color: var(--text-muted);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .detail-value {
        font-size: 1rem;
        color: var(--text-primary);
        font-weight: 500;
    }

    .detail-value strong {
        font-size: 1.2rem;
        color: var(--tchad-blue);
    }

    .action-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        text-decoration: none;
        border: none;
        transition: all 0.2s;
    }

    .btn-primary {
        background: var(--accent-gradient);
        color: white;
    }

    .btn-success {
        background: #10b981;
        color: white;
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-secondary {
        background: white;
        color: var(--text-primary);
        border: 1px solid var(--border-color);
    }

    .btn:hover {
        transform: translateY(-1px);
        box-shadow: var(--shadow-md);
    }

    .timeline {
        position: relative;
        padding-left: 40px;
    }

    .timeline-item {
        position: relative;
        padding-bottom: 24px;
    }

    .timeline-item:before {
        content: '';
        position: absolute;
        left: -33px;
        top: 8px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--tchad-blue);
        border: 3px solid white;
        box-shadow: 0 0 0 2px var(--border-color);
    }

    .timeline-item:after {
        content: '';
        position: absolute;
        left: -28px;
        top: 20px;
        width: 2px;
        height: calc(100% - 12px);
        background: var(--border-color);
    }

    .timeline-item:last-child:after {
        display: none;
    }

    .timeline-date {
        font-size: 0.85rem;
        color: var(--text-muted);
        font-weight: 600;
    }

    .timeline-content {
        font-size: 0.95rem;
        color: var(--text-primary);
        margin-top: 4px;
    }

    .file-attachment {
        background: var(--bg-tertiary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 16px;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.2s;
    }

    .file-attachment:hover {
        background: var(--bg-primary);
        border-color: var(--tchad-blue);
    }

    .file-icon {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--tchad-blue);
    }

    .file-info {
        flex: 1;
    }

    .file-name {
        font-weight: 600;
        margin-bottom: 2px;
    }

    .file-meta {
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    @media (max-width: 768px) {
        .detail-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 250
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 251
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index");
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour aux décaissements
        </a>
    </div>

    ";
        // line 260
        yield "    <div class=\"detail-card\">
        <div class=\"detail-header\">
            <div>
                <h3>";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 263, $this->source); })()), "reference", [], "any", false, false, false, 263), "html", null, true);
        yield "</h3>
                <p>Créé le ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 264, $this->source); })()), "createdAt", [], "any", false, false, false, 264), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
            </div>
            <span class=\"status-badge ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 266, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 266), "html", null, true);
        yield "\">
                ";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 267, $this->source); })()), "statutLabel", [], "any", false, false, false, 267), "html", null, true);
        yield "
            </span>
        </div>

        ";
        // line 272
        yield "        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"info\"></i>
                Informations principales
            </h4>
            <div class=\"detail-grid\">
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Projet</span>
                    <span class=\"detail-value\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 280, $this->source); })()), "project", [], "any", false, false, false, 280), "name", [], "any", false, false, false, 280), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Financement</span>
                    <span class=\"detail-value\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 284, $this->source); })()), "financement", [], "any", false, false, false, 284), "numeroConvention", [], "any", false, false, false, 284), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Bénéficiaire</span>
                    <span class=\"detail-value\">";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 288, $this->source); })()), "beneficiaire", [], "any", false, false, false, 288), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Mode de paiement</span>
                    <span class=\"detail-value\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 292, $this->source); })()), "modePaiementLabel", [], "any", false, false, false, 292), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Montant</span>
                    <span class=\"detail-value\"><strong>";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 296, $this->source); })()), "montantFormate", [], "any", false, false, false, 296), "html", null, true);
        yield "</strong></span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Date de demande</span>
                    <span class=\"detail-value\">";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 300, $this->source); })()), "dateDemande", [], "any", false, false, false, 300), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
                ";
        // line 302
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 302, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 303
            yield "                <div class=\"detail-item\">
                    <span class=\"detail-label\">Ligne budgétaire</span>
                    <span class=\"detail-value\">";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 305, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 305), "html", null, true);
            yield "</span>
                </div>
                ";
        }
        // line 308
        yield "            </div>
        </div>

        ";
        // line 312
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 312, $this->source); })()), "description", [], "any", false, false, false, 312)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 313
            yield "        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"file-text\"></i>
                Description
            </h4>
            <p>";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 318, $this->source); })()), "description", [], "any", false, false, false, 318), "html", null, true);
            yield "</p>
        </div>
        ";
        }
        // line 321
        yield "
        ";
        // line 323
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 323, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 324
            yield "        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"paperclip\"></i>
                Pièce justificative
            </h4>
            <div class=\"file-attachment\">
                <div class=\"file-icon\">
                    <i data-lucide=\"file\"></i>
                </div>
                <div class=\"file-info\">
                    <div class=\"file-name\">";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 334, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 334), "html", null, true);
            yield "</div>
                    <div class=\"file-meta\">Document attaché</div>
                </div>
                <a href=\"";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/decaissements/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 337, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 337))), "html", null, true);
            yield "\" 
                   download class=\"btn btn-secondary\" style=\"padding: 8px 16px;\">
                    <i data-lucide=\"download\"></i>
                    Télécharger
                </a>
            </div>
        </div>
        ";
        }
        // line 345
        yield "
        ";
        // line 347
        yield "        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"history\"></i>
                Historique
            </h4>
            <div class=\"timeline\">
                <div class=\"timeline-item\">
                    <div class=\"timeline-date\">";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 354, $this->source); })()), "dateDemande", [], "any", false, false, false, 354), "d/m/Y"), "html", null, true);
        yield "</div>
                    <div class=\"timeline-content\">
                        Demande créée par ";
        // line 356
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["decaissement"] ?? null), "createdBy", [], "any", true, true, false, 356) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 356, $this->source); })()), "createdBy", [], "any", false, false, false, 356)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 356, $this->source); })()), "createdBy", [], "any", false, false, false, 356), "html", null, true)) : ("Système"));
        yield "
                    </div>
                </div>
                ";
        // line 359
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 359, $this->source); })()), "dateValidation", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 360
            yield "                <div class=\"timeline-item\">
                    <div class=\"timeline-date\">";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 361, $this->source); })()), "dateValidation", [], "any", false, false, false, 361), "d/m/Y"), "html", null, true);
            yield "</div>
                    <div class=\"timeline-content\">
                        Validé par ";
            // line 363
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["decaissement"] ?? null), "validePar", [], "any", true, true, false, 363) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 363, $this->source); })()), "validePar", [], "any", false, false, false, 363)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 363, $this->source); })()), "validePar", [], "any", false, false, false, 363), "html", null, true)) : ("Inconnu"));
            yield "
                    </div>
                </div>
                ";
        }
        // line 367
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 367, $this->source); })()), "dateExecution", [], "any", false, false, false, 367)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 368
            yield "                <div class=\"timeline-item\">
                    <div class=\"timeline-date\">";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 369, $this->source); })()), "dateExecution", [], "any", false, false, false, 369), "d/m/Y"), "html", null, true);
            yield "</div>
                    <div class=\"timeline-content\">
                        Exécuté par ";
            // line 371
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["decaissement"] ?? null), "executePar", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 371, $this->source); })()), "executePar", [], "any", false, false, false, 371)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 371, $this->source); })()), "executePar", [], "any", false, false, false, 371), "html", null, true)) : ("Inconnu"));
            yield "
                    </div>
                </div>
                ";
        }
        // line 375
        yield "            </div>
        </div>

        ";
        // line 379
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 379, $this->source); })()), "commentaire", [], "any", false, false, false, 379)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 380
            yield "        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"message-square\"></i>
                Commentaire
            </h4>
            <p>";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 385, $this->source); })()), "commentaire", [], "any", false, false, false, 385), "html", null, true);
            yield "</p>
        </div>
        ";
        }
        // line 388
        yield "
        ";
        // line 390
        yield "        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"settings\"></i>
                Actions
            </h4>
            <div class=\"action-buttons\">
                ";
        // line 396
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 396, $this->source); })()), "isModifiable", [], "method", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 397
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 397, $this->source); })()), "id", [], "any", false, false, false, 397)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    <i data-lucide=\"edit\"></i>
                    Modifier
                </a>
                ";
        }
        // line 402
        yield "
                ";
        // line 403
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 403, $this->source); })()), "statut", [], "any", false, false, false, 403) == "en_attente")) {
            // line 404
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 404, $this->source); })()), "id", [], "any", false, false, false, 404)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("validate" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 405, $this->source); })()), "id", [], "any", false, false, false, 405))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-success\" onclick=\"return confirm('Confirmer la validation ?')\">
                        <i data-lucide=\"check\"></i>
                        Valider
                    </button>
                </form>

                <button type=\"button\" class=\"btn btn-danger\" onclick=\"showRejectModal()\">
                    <i data-lucide=\"x\"></i>
                    Rejeter
                </button>
                ";
        }
        // line 417
        yield "
                ";
        // line 418
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 418, $this->source); })()), "statut", [], "any", false, false, false, 418) == "valide")) {
            // line 419
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_execute", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 419, $this->source); })()), "id", [], "any", false, false, false, 419)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("execute" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 420, $this->source); })()), "id", [], "any", false, false, false, 420))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-success\" onclick=\"return confirm('Confirmer l\\'exécution du paiement ?')\">
                        <i data-lucide=\"send\"></i>
                        Exécuter
                    </button>
                </form>
                ";
        }
        // line 427
        yield "
                ";
        // line 428
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 428, $this->source); })()), "isAnnulable", [], "method", false, false, false, 428)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 429
            yield "                <button type=\"button\" class=\"btn btn-warning\" onclick=\"showCancelModal()\">
                    <i data-lucide=\"ban\"></i>
                    Annuler
                </button>
                ";
        }
        // line 434
        yield "
                ";
        // line 435
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 435, $this->source); })()), "isModifiable", [], "method", false, false, false, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 436
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 436, $this->source); })()), "id", [], "any", false, false, false, 436)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 437, $this->source); })()), "id", [], "any", false, false, false, 437))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Confirmer la suppression définitive ?')\">
                        <i data-lucide=\"trash-2\"></i>
                        Supprimer
                    </button>
                </form>
                ";
        }
        // line 444
        yield "            </div>
        </div>
    </div>
</div>

";
        // line 450
        yield "<div id=\"rejectModal\" style=\"display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 9999; align-items: center; justify-content: center;\">
    <div style=\"background: white; padding: 24px; border-radius: 12px; max-width: 500px; width: 90%;\">
        <h3 style=\"margin-bottom: 16px;\">Rejeter le décaissement</h3>
        <form method=\"post\" action=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 453, $this->source); })()), "id", [], "any", false, false, false, 453)]), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 454, $this->source); })()), "id", [], "any", false, false, false, 454))), "html", null, true);
        yield "\">
            <textarea name=\"commentaire\" class=\"form-textarea\" rows=\"4\" placeholder=\"Raison du rejet (obligatoire)\" required style=\"width: 100%; margin-bottom: 16px; padding: 12px; border: 1px solid #ddd; border-radius: 8px;\"></textarea>
            <div style=\"display: flex; gap: 12px; justify-content: flex-end;\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideRejectModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn btn-danger\">Confirmer le rejet</button>
            </div>
        </form>
    </div>
</div>

";
        // line 465
        yield "<div id=\"cancelModal\" style=\"display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 9999; align-items: center; justify-content: center;\">
    <div style=\"background: white; padding: 24px; border-radius: 12px; max-width: 500px; width: 90%;\">
        <h3 style=\"margin-bottom: 16px;\">Annuler le décaissement</h3>
        <form method=\"post\" action=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 468, $this->source); })()), "id", [], "any", false, false, false, 468)]), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 469, $this->source); })()), "id", [], "any", false, false, false, 469))), "html", null, true);
        yield "\">
            <textarea name=\"commentaire\" class=\"form-textarea\" rows=\"4\" placeholder=\"Raison de l'annulation (obligatoire)\" required style=\"width: 100%; margin-bottom: 16px; padding: 12px; border: 1px solid #ddd; border-radius: 8px;\"></textarea>
            <div style=\"display: flex; gap: 12px; justify-content: flex-end;\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideCancelModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn btn-warning\">Confirmer l'annulation</button>
            </div>
        </form>
    </div>
</div>

<script>
    function showRejectModal() {
        document.getElementById('rejectModal').style.display = 'flex';
    }
    
    function hideRejectModal() {
        document.getElementById('rejectModal').style.display = 'none';
    }
    
    function showCancelModal() {
        document.getElementById('cancelModal').style.display = 'flex';
    }
    
    function hideCancelModal() {
        document.getElementById('cancelModal').style.display = 'none';
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
        return "decaissement/show.html.twig";
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
        return array (  720 => 469,  716 => 468,  711 => 465,  698 => 454,  694 => 453,  689 => 450,  682 => 444,  672 => 437,  667 => 436,  665 => 435,  662 => 434,  655 => 429,  653 => 428,  650 => 427,  640 => 420,  635 => 419,  633 => 418,  630 => 417,  615 => 405,  610 => 404,  608 => 403,  605 => 402,  596 => 397,  594 => 396,  586 => 390,  583 => 388,  577 => 385,  570 => 380,  567 => 379,  562 => 375,  555 => 371,  550 => 369,  547 => 368,  544 => 367,  537 => 363,  532 => 361,  529 => 360,  527 => 359,  521 => 356,  516 => 354,  507 => 347,  504 => 345,  493 => 337,  487 => 334,  475 => 324,  472 => 323,  469 => 321,  463 => 318,  456 => 313,  453 => 312,  448 => 308,  442 => 305,  438 => 303,  436 => 302,  431 => 300,  424 => 296,  417 => 292,  410 => 288,  403 => 284,  396 => 280,  386 => 272,  379 => 267,  375 => 266,  370 => 264,  366 => 263,  361 => 260,  352 => 253,  348 => 251,  338 => 250,  88 => 6,  78 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Décaissement {{ decaissement.reference }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<style>
    .detail-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 24px;
    }

    .detail-header {
        background: var(--accent-gradient);
        color: white;
        padding: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .detail-header h3 {
        font-size: 1.4rem;
        font-weight: 700;
    }

    .detail-header p {
        opacity: 0.9;
        margin-top: 4px;
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        background: white;
    }

    .status-badge.warning { color: #f59e0b; }
    .status-badge.info { color: #3b82f6; }
    .status-badge.success { color: #10b981; }
    .status-badge.danger { color: #ef4444; }
    .status-badge.secondary { color: #64748b; }

    .detail-section {
        padding: 24px;
        border-bottom: 1px solid var(--border-color);
    }

    .detail-section:last-child {
        border-bottom: none;
    }

    .section-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 16px;
        color: var(--text-primary);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .detail-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .detail-label {
        font-size: 0.8rem;
        color: var(--text-muted);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .detail-value {
        font-size: 1rem;
        color: var(--text-primary);
        font-weight: 500;
    }

    .detail-value strong {
        font-size: 1.2rem;
        color: var(--tchad-blue);
    }

    .action-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        text-decoration: none;
        border: none;
        transition: all 0.2s;
    }

    .btn-primary {
        background: var(--accent-gradient);
        color: white;
    }

    .btn-success {
        background: #10b981;
        color: white;
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-secondary {
        background: white;
        color: var(--text-primary);
        border: 1px solid var(--border-color);
    }

    .btn:hover {
        transform: translateY(-1px);
        box-shadow: var(--shadow-md);
    }

    .timeline {
        position: relative;
        padding-left: 40px;
    }

    .timeline-item {
        position: relative;
        padding-bottom: 24px;
    }

    .timeline-item:before {
        content: '';
        position: absolute;
        left: -33px;
        top: 8px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--tchad-blue);
        border: 3px solid white;
        box-shadow: 0 0 0 2px var(--border-color);
    }

    .timeline-item:after {
        content: '';
        position: absolute;
        left: -28px;
        top: 20px;
        width: 2px;
        height: calc(100% - 12px);
        background: var(--border-color);
    }

    .timeline-item:last-child:after {
        display: none;
    }

    .timeline-date {
        font-size: 0.85rem;
        color: var(--text-muted);
        font-weight: 600;
    }

    .timeline-content {
        font-size: 0.95rem;
        color: var(--text-primary);
        margin-top: 4px;
    }

    .file-attachment {
        background: var(--bg-tertiary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 16px;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.2s;
    }

    .file-attachment:hover {
        background: var(--bg-primary);
        border-color: var(--tchad-blue);
    }

    .file-icon {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--tchad-blue);
    }

    .file-info {
        flex: 1;
    }

    .file-name {
        font-weight: 600;
        margin-bottom: 2px;
    }

    .file-meta {
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    @media (max-width: 768px) {
        .detail-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"{{ path('app_decaissement_index') }}\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour aux décaissements
        </a>
    </div>

    {# En-tête du décaissement #}
    <div class=\"detail-card\">
        <div class=\"detail-header\">
            <div>
                <h3>{{ decaissement.reference }}</h3>
                <p>Créé le {{ decaissement.createdAt|date('d/m/Y à H:i') }}</p>
            </div>
            <span class=\"status-badge {{ decaissement.statutBadgeClass }}\">
                {{ decaissement.statutLabel }}
            </span>
        </div>

        {# Informations principales #}
        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"info\"></i>
                Informations principales
            </h4>
            <div class=\"detail-grid\">
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Projet</span>
                    <span class=\"detail-value\">{{ decaissement.project.name }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Financement</span>
                    <span class=\"detail-value\">{{ decaissement.financement.numeroConvention }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Bénéficiaire</span>
                    <span class=\"detail-value\">{{ decaissement.beneficiaire }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Mode de paiement</span>
                    <span class=\"detail-value\">{{ decaissement.modePaiementLabel }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Montant</span>
                    <span class=\"detail-value\"><strong>{{ decaissement.montantFormate }}</strong></span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Date de demande</span>
                    <span class=\"detail-value\">{{ decaissement.dateDemande|date('d/m/Y') }}</span>
                </div>
                {% if decaissement.ligneBudgetaire %}
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Ligne budgétaire</span>
                    <span class=\"detail-value\">{{ decaissement.ligneBudgetaire }}</span>
                </div>
                {% endif %}
            </div>
        </div>

        {# Description #}
        {% if decaissement.description %}
        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"file-text\"></i>
                Description
            </h4>
            <p>{{ decaissement.description }}</p>
        </div>
        {% endif %}

        {# Pièce justificative #}
        {% if decaissement.pieceJustificative %}
        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"paperclip\"></i>
                Pièce justificative
            </h4>
            <div class=\"file-attachment\">
                <div class=\"file-icon\">
                    <i data-lucide=\"file\"></i>
                </div>
                <div class=\"file-info\">
                    <div class=\"file-name\">{{ decaissement.pieceJustificative }}</div>
                    <div class=\"file-meta\">Document attaché</div>
                </div>
                <a href=\"{{ asset('uploads/decaissements/' ~ decaissement.pieceJustificative) }}\" 
                   download class=\"btn btn-secondary\" style=\"padding: 8px 16px;\">
                    <i data-lucide=\"download\"></i>
                    Télécharger
                </a>
            </div>
        </div>
        {% endif %}

        {# Historique et timeline #}
        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"history\"></i>
                Historique
            </h4>
            <div class=\"timeline\">
                <div class=\"timeline-item\">
                    <div class=\"timeline-date\">{{ decaissement.dateDemande|date('d/m/Y') }}</div>
                    <div class=\"timeline-content\">
                        Demande créée par {{ decaissement.createdBy ?? 'Système' }}
                    </div>
                </div>
                {% if decaissement.dateValidation %}
                <div class=\"timeline-item\">
                    <div class=\"timeline-date\">{{ decaissement.dateValidation|date('d/m/Y') }}</div>
                    <div class=\"timeline-content\">
                        Validé par {{ decaissement.validePar ?? 'Inconnu' }}
                    </div>
                </div>
                {% endif %}
                {% if decaissement.dateExecution %}
                <div class=\"timeline-item\">
                    <div class=\"timeline-date\">{{ decaissement.dateExecution|date('d/m/Y') }}</div>
                    <div class=\"timeline-content\">
                        Exécuté par {{ decaissement.executePar ?? 'Inconnu' }}
                    </div>
                </div>
                {% endif %}
            </div>
        </div>

        {# Commentaire #}
        {% if decaissement.commentaire %}
        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"message-square\"></i>
                Commentaire
            </h4>
            <p>{{ decaissement.commentaire }}</p>
        </div>
        {% endif %}

        {# Actions #}
        <div class=\"detail-section\">
            <h4 class=\"section-title\">
                <i data-lucide=\"settings\"></i>
                Actions
            </h4>
            <div class=\"action-buttons\">
                {% if decaissement.isModifiable() %}
                <a href=\"{{ path('app_decaissement_edit', {'id': decaissement.id}) }}\" class=\"btn btn-primary\">
                    <i data-lucide=\"edit\"></i>
                    Modifier
                </a>
                {% endif %}

                {% if decaissement.statut == 'en_attente' %}
                <form method=\"post\" action=\"{{ path('app_decaissement_validate', {'id': decaissement.id}) }}\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('validate' ~ decaissement.id) }}\">
                    <button type=\"submit\" class=\"btn btn-success\" onclick=\"return confirm('Confirmer la validation ?')\">
                        <i data-lucide=\"check\"></i>
                        Valider
                    </button>
                </form>

                <button type=\"button\" class=\"btn btn-danger\" onclick=\"showRejectModal()\">
                    <i data-lucide=\"x\"></i>
                    Rejeter
                </button>
                {% endif %}

                {% if decaissement.statut == 'valide' %}
                <form method=\"post\" action=\"{{ path('app_decaissement_execute', {'id': decaissement.id}) }}\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('execute' ~ decaissement.id) }}\">
                    <button type=\"submit\" class=\"btn btn-success\" onclick=\"return confirm('Confirmer l\\'exécution du paiement ?')\">
                        <i data-lucide=\"send\"></i>
                        Exécuter
                    </button>
                </form>
                {% endif %}

                {% if decaissement.isAnnulable() %}
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"showCancelModal()\">
                    <i data-lucide=\"ban\"></i>
                    Annuler
                </button>
                {% endif %}

                {% if decaissement.isModifiable() %}
                <form method=\"post\" action=\"{{ path('app_decaissement_delete', {'id': decaissement.id}) }}\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ decaissement.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Confirmer la suppression définitive ?')\">
                        <i data-lucide=\"trash-2\"></i>
                        Supprimer
                    </button>
                </form>
                {% endif %}
            </div>
        </div>
    </div>
</div>

{# Modal pour rejeter #}
<div id=\"rejectModal\" style=\"display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 9999; align-items: center; justify-content: center;\">
    <div style=\"background: white; padding: 24px; border-radius: 12px; max-width: 500px; width: 90%;\">
        <h3 style=\"margin-bottom: 16px;\">Rejeter le décaissement</h3>
        <form method=\"post\" action=\"{{ path('app_decaissement_reject', {'id': decaissement.id}) }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ decaissement.id) }}\">
            <textarea name=\"commentaire\" class=\"form-textarea\" rows=\"4\" placeholder=\"Raison du rejet (obligatoire)\" required style=\"width: 100%; margin-bottom: 16px; padding: 12px; border: 1px solid #ddd; border-radius: 8px;\"></textarea>
            <div style=\"display: flex; gap: 12px; justify-content: flex-end;\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideRejectModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn btn-danger\">Confirmer le rejet</button>
            </div>
        </form>
    </div>
</div>

{# Modal pour annuler #}
<div id=\"cancelModal\" style=\"display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 9999; align-items: center; justify-content: center;\">
    <div style=\"background: white; padding: 24px; border-radius: 12px; max-width: 500px; width: 90%;\">
        <h3 style=\"margin-bottom: 16px;\">Annuler le décaissement</h3>
        <form method=\"post\" action=\"{{ path('app_decaissement_cancel', {'id': decaissement.id}) }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ decaissement.id) }}\">
            <textarea name=\"commentaire\" class=\"form-textarea\" rows=\"4\" placeholder=\"Raison de l'annulation (obligatoire)\" required style=\"width: 100%; margin-bottom: 16px; padding: 12px; border: 1px solid #ddd; border-radius: 8px;\"></textarea>
            <div style=\"display: flex; gap: 12px; justify-content: flex-end;\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideCancelModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn btn-warning\">Confirmer l'annulation</button>
            </div>
        </form>
    </div>
</div>

<script>
    function showRejectModal() {
        document.getElementById('rejectModal').style.display = 'flex';
    }
    
    function hideRejectModal() {
        document.getElementById('rejectModal').style.display = 'none';
    }
    
    function showCancelModal() {
        document.getElementById('cancelModal').style.display = 'flex';
    }
    
    function hideCancelModal() {
        document.getElementById('cancelModal').style.display = 'none';
    }
</script>
{% endblock %}
", "decaissement/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\decaissement\\show.html.twig");
    }
}
