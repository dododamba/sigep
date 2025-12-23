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

/* decaissement/edit.html.twig */
class __TwigTemplate_df6a485875154f5616da936c90a70a5a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "decaissement/edit.html.twig"));

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

        yield "Modifier Décaissement ";
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
    .form-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
    }

    .form-section {
        padding: 32px;
        border-bottom: 1px solid var(--border-color);
    }

    .form-section:last-child { border-bottom: none; }

    .section-header {
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .section-icon {
        width: 40px;
        height: 40px;
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .section-title h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .section-title p {
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    .full-width { grid-column: span 2; }

    .form-group {
        margin-bottom: 0;
    }

    .form-label {
        display: block;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--text-primary);
    }

    .required {
        color: var(--danger);
        margin-left: 2px;
    }

    .form-input,
    .form-select,
    .form-textarea {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        background: var(--bg-primary);
        color: var(--text-primary);
        font-family: inherit;
        font-size: 0.95rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        outline: none;
        border-color: var(--tchad-blue);
        box-shadow: 0 0 0 3px rgba(0, 38, 100, 0.1);
    }

    .form-help {
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-top: 6px;
    }

    .form-error {
        color: var(--danger);
        font-size: 0.85rem;
        margin-top: 6px;
    }

    .input-group {
        position: relative;
    }

    .input-suffix {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
        font-weight: 600;
        font-size: 0.9rem;
        pointer-events: none;
    }

    .file-upload-zone {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        padding: 32px;
        text-align: center;
        background: var(--bg-primary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .file-upload-zone:hover {
        border-color: var(--tchad-blue);
        background: rgba(0, 38, 100, 0.02);
    }

    .upload-icon {
        color: var(--text-muted);
        margin-bottom: 12px;
    }

    .upload-text {
        font-weight: 500;
        margin-bottom: 4px;
    }

    .upload-hint {
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    .current-file {
        background: var(--bg-tertiary);
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .current-file i {
        color: var(--tchad-blue);
    }

    .action-bar {
        background: var(--bg-tertiary);
        padding: 24px 32px;
        display: flex;
        justify-content: flex-end;
        gap: 16px;
        border-top: 1px solid var(--border-color);
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.2s ease;
        border: none;
        text-decoration: none;
    }

    .btn-secondary {
        background: white;
        color: var(--text-primary);
        border: 1px solid var(--border-color);
    }

    .btn-secondary:hover {
        background: var(--bg-tertiary);
        border-color: var(--text-muted);
    }

    .btn-primary {
        background: var(--accent-gradient);
        color: white;
        box-shadow: var(--shadow-md);
    }

    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: var(--shadow-lg);
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .status-badge.warning {
        background: rgba(245, 158, 11, 0.15);
        color: #f59e0b;
    }

    .status-badge.info {
        background: rgba(59, 130, 246, 0.15);
        color: #3b82f6;
    }

    .status-badge.success {
        background: rgba(16, 185, 129, 0.15);
        color: #10b981;
    }

    .status-badge.danger {
        background: rgba(239, 68, 68, 0.15);
        color: #ef4444;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        .full-width {
            grid-column: span 1;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 256
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 257
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 259, $this->source); })()), "id", [], "any", false, false, false, 259)]), "html", null, true);
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour au décaissement
        </a>
        <div class=\"page-title-row\">
            <div class=\"page-title\">
                <h2>Modifier le décaissement ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 265, $this->source); })()), "reference", [], "any", false, false, false, 265), "html", null, true);
        yield "</h2>
                <p>
                    Statut actuel : 
                    <span class=\"status-badge ";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 268, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 268), "html", null, true);
        yield "\">
                        ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 269, $this->source); })()), "statutLabel", [], "any", false, false, false, 269), "html", null, true);
        yield "
                    </span>
                </p>
            </div>
        </div>
    </div>

    ";
        // line 276
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), 'form_start', ["attr" => ["class" => "form-card", "novalidate" => "novalidate"]]);
        yield "
    
        ";
        // line 279
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"folder-kanban\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Contexte du projet</h3>
                    <p>Lier ce décaissement à un projet et une convention active.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 292
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "projet", [], "any", false, false, false, 292), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 293
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "projet", [], "any", false, false, false, 293), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "projet", [], "any", false, false, false, 294), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 298
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "financement", [], "any", false, false, false, 298), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 299
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "financement", [], "any", false, false, false, 299), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 300
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "financement", [], "any", false, false, false, 300), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 301
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "financement", [], "any", false, true, false, 301), "vars", [], "any", false, true, false, 301), "help", [], "any", true, true, false, 301)) {
            // line 302
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "financement", [], "any", false, false, false, 302), "vars", [], "any", false, false, false, 302), "help", [], "any", false, false, false, 302), "html", null, true);
            yield "</div>
                    ";
        }
        // line 304
        yield "                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Référence</label>
                    <input type=\"text\" class=\"form-input\" value=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 308, $this->source); })()), "reference", [], "any", false, false, false, 308), "html", null, true);
        yield "\" readonly style=\"background-color: var(--bg-tertiary); color: var(--text-muted);\">
                </div>

                <div class=\"form-group\">
                    ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "dateDemande", [], "any", false, false, false, 312), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 313
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "dateDemande", [], "any", false, false, false, 313), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "dateDemande", [], "any", false, false, false, 314), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 320
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"coins\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Détails financiers</h3>
                    <p>Montant, bénéficiaire et mode de paiement.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "beneficiaire", [], "any", false, false, false, 333), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "beneficiaire", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 335
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "beneficiaire", [], "any", false, false, false, 335), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 336
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "beneficiaire", [], "any", false, true, false, 336), "vars", [], "any", false, true, false, 336), "help", [], "any", true, true, false, 336)) {
            // line 337
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), "beneficiaire", [], "any", false, false, false, 337), "vars", [], "any", false, false, false, 337), "help", [], "any", false, false, false, 337), "html", null, true);
            yield "</div>
                    ";
        }
        // line 339
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "modePaiement", [], "any", false, false, false, 342), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "modePaiement", [], "any", false, false, false, 343), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "modePaiement", [], "any", false, false, false, 344), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "montant", [], "any", false, false, false, 348), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-group\">
                        ";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "montant", [], "any", false, false, false, 350), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        <span class=\"input-suffix\">";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "devise", [], "any", false, false, false, 351), 'row', ["label" => false, "attr" => ["class" => "form-select", "style" => "position: absolute; right: 0; top: 0; width: auto; border: none; background: transparent; padding-right: 16px;"]]);
        yield "</span>
                    </div>
                    ";
        // line 353
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "montant", [], "any", false, false, false, 353), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 357
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 357), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 359
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 359), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "description", [], "any", false, false, false, 363), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "description", [], "any", false, false, false, 364), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 3]]);
        yield "
                    ";
        // line 365
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "description", [], "any", false, false, false, 365), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 371
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"paperclip\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Pièces justificatives</h3>
                    <p>Factures, bons de commande ou PV de réception.</p>
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 383
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 383, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 384
            yield "                    <div class=\"current-file\">
                        <i data-lucide=\"file-text\"></i>
                        <span>Fichier actuel : ";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 386, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 386), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 389
        yield "
                ";
        // line 390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 390), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Remplacer le fichier (optionnel)"]);
        yield "
                <div class=\"file-upload-zone\" onclick=\"document.getElementById('";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 391), "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
        yield "').click()\">
                    <div class=\"upload-icon\">
                        <i data-lucide=\"upload-cloud\" style=\"width: 48px; height: 48px;\"></i>
                    </div>
                    <div class=\"upload-text\">Cliquez pour changer de fichier</div>
                    <div class=\"upload-hint\">";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 396), "vars", [], "any", false, false, false, 396), "help", [], "any", false, false, false, 396), "html", null, true);
        yield "</div>
                </div>
                ";
        // line 398
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 398), 'widget', ["attr" => ["class" => "form-input", "style" => "display: none;"]]);
        yield "
                ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 399), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>

        ";
        // line 404
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 404)) {
            // line 405
            yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"activity\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Gestion du statut</h3>
                    <p>Modifier le statut et ajouter des commentaires.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
            // line 418
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "statut", [], "any", false, false, false, 418), 'label', ["label_attr" => ["class" => "form-label"]]);
            yield "
                    ";
            // line 419
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "statut", [], "any", false, false, false, 419), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                    ";
            // line 420
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "statut", [], "any", false, false, false, 420), 'errors', ["attr" => ["class" => "form-error"]]);
            yield "
                </div>

                <div class=\"form-group\">
                    ";
            // line 424
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "dateValidation", [], "any", false, false, false, 424), 'label', ["label_attr" => ["class" => "form-label"]]);
            yield "
                    ";
            // line 425
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "dateValidation", [], "any", false, false, false, 425), 'widget', ["attr" => ["class" => "form-input"]]);
            yield "
                    ";
            // line 426
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "dateValidation", [], "any", false, false, false, 426), 'errors', ["attr" => ["class" => "form-error"]]);
            yield "
                </div>

                <div class=\"form-group\">
                    ";
            // line 430
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "dateExecution", [], "any", false, false, false, 430), 'label', ["label_attr" => ["class" => "form-label"]]);
            yield "
                    ";
            // line 431
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "dateExecution", [], "any", false, false, false, 431), 'widget', ["attr" => ["class" => "form-input"]]);
            yield "
                    ";
            // line 432
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "dateExecution", [], "any", false, false, false, 432), 'errors', ["attr" => ["class" => "form-error"]]);
            yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
            // line 436
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 436, $this->source); })()), "commentaire", [], "any", false, false, false, 436), 'label', ["label_attr" => ["class" => "form-label"]]);
            yield "
                    ";
            // line 437
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 437, $this->source); })()), "commentaire", [], "any", false, false, false, 437), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 3]]);
            yield "
                    ";
            // line 438
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "commentaire", [], "any", false, false, false, 438), 'errors', ["attr" => ["class" => "form-error"]]);
            yield "
                </div>
            </div>
        </div>
        ";
        }
        // line 443
        yield "
        ";
        // line 445
        yield "        <div class=\"action-bar\">
            <a href=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["decaissement"]) || array_key_exists("decaissement", $context) ? $context["decaissement"] : (function () { throw new RuntimeError('Variable "decaissement" does not exist.', 446, $this->source); })()), "id", [], "any", false, false, false, 446)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i data-lucide=\"save\"></i>
                Enregistrer les modifications
            </button>
        </div>

        ";
        // line 455
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 455, $this->source); })()), "_token", [], "any", false, false, false, 455), 'row');
        yield "
    ";
        // line 456
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 456, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
</div>

<script>
    // Afficher le nom du fichier sélectionné
    document.getElementById('";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 461), "vars", [], "any", false, false, false, 461), "id", [], "any", false, false, false, 461), "html", null, true);
        yield "').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || 'Aucun fichier sélectionné';
        const uploadText = document.querySelector('.upload-text');
        if (uploadText) {
            uploadText.textContent = fileName;
        }
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
        return "decaissement/edit.html.twig";
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
        return array (  744 => 461,  736 => 456,  732 => 455,  720 => 446,  717 => 445,  714 => 443,  706 => 438,  702 => 437,  698 => 436,  691 => 432,  687 => 431,  683 => 430,  676 => 426,  672 => 425,  668 => 424,  661 => 420,  657 => 419,  653 => 418,  638 => 405,  635 => 404,  628 => 399,  624 => 398,  619 => 396,  611 => 391,  607 => 390,  604 => 389,  598 => 386,  594 => 384,  592 => 383,  578 => 371,  570 => 365,  566 => 364,  562 => 363,  555 => 359,  551 => 358,  547 => 357,  540 => 353,  535 => 351,  531 => 350,  526 => 348,  519 => 344,  515 => 343,  511 => 342,  506 => 339,  500 => 337,  498 => 336,  494 => 335,  490 => 334,  486 => 333,  471 => 320,  463 => 314,  459 => 313,  455 => 312,  448 => 308,  442 => 304,  436 => 302,  434 => 301,  430 => 300,  426 => 299,  422 => 298,  415 => 294,  411 => 293,  407 => 292,  392 => 279,  387 => 276,  377 => 269,  373 => 268,  367 => 265,  358 => 259,  354 => 257,  344 => 256,  88 => 6,  78 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Décaissement {{ decaissement.reference }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<style>
    .form-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
    }

    .form-section {
        padding: 32px;
        border-bottom: 1px solid var(--border-color);
    }

    .form-section:last-child { border-bottom: none; }

    .section-header {
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .section-icon {
        width: 40px;
        height: 40px;
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .section-title h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .section-title p {
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    .full-width { grid-column: span 2; }

    .form-group {
        margin-bottom: 0;
    }

    .form-label {
        display: block;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--text-primary);
    }

    .required {
        color: var(--danger);
        margin-left: 2px;
    }

    .form-input,
    .form-select,
    .form-textarea {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        background: var(--bg-primary);
        color: var(--text-primary);
        font-family: inherit;
        font-size: 0.95rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        outline: none;
        border-color: var(--tchad-blue);
        box-shadow: 0 0 0 3px rgba(0, 38, 100, 0.1);
    }

    .form-help {
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-top: 6px;
    }

    .form-error {
        color: var(--danger);
        font-size: 0.85rem;
        margin-top: 6px;
    }

    .input-group {
        position: relative;
    }

    .input-suffix {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
        font-weight: 600;
        font-size: 0.9rem;
        pointer-events: none;
    }

    .file-upload-zone {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        padding: 32px;
        text-align: center;
        background: var(--bg-primary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .file-upload-zone:hover {
        border-color: var(--tchad-blue);
        background: rgba(0, 38, 100, 0.02);
    }

    .upload-icon {
        color: var(--text-muted);
        margin-bottom: 12px;
    }

    .upload-text {
        font-weight: 500;
        margin-bottom: 4px;
    }

    .upload-hint {
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    .current-file {
        background: var(--bg-tertiary);
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .current-file i {
        color: var(--tchad-blue);
    }

    .action-bar {
        background: var(--bg-tertiary);
        padding: 24px 32px;
        display: flex;
        justify-content: flex-end;
        gap: 16px;
        border-top: 1px solid var(--border-color);
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.2s ease;
        border: none;
        text-decoration: none;
    }

    .btn-secondary {
        background: white;
        color: var(--text-primary);
        border: 1px solid var(--border-color);
    }

    .btn-secondary:hover {
        background: var(--bg-tertiary);
        border-color: var(--text-muted);
    }

    .btn-primary {
        background: var(--accent-gradient);
        color: white;
        box-shadow: var(--shadow-md);
    }

    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: var(--shadow-lg);
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .status-badge.warning {
        background: rgba(245, 158, 11, 0.15);
        color: #f59e0b;
    }

    .status-badge.info {
        background: rgba(59, 130, 246, 0.15);
        color: #3b82f6;
    }

    .status-badge.success {
        background: rgba(16, 185, 129, 0.15);
        color: #10b981;
    }

    .status-badge.danger {
        background: rgba(239, 68, 68, 0.15);
        color: #ef4444;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        .full-width {
            grid-column: span 1;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"{{ path('app_decaissement_show', {'id': decaissement.id}) }}\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour au décaissement
        </a>
        <div class=\"page-title-row\">
            <div class=\"page-title\">
                <h2>Modifier le décaissement {{ decaissement.reference }}</h2>
                <p>
                    Statut actuel : 
                    <span class=\"status-badge {{ decaissement.statutBadgeClass }}\">
                        {{ decaissement.statutLabel }}
                    </span>
                </p>
            </div>
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'form-card', 'novalidate': 'novalidate'}}) }}
    
        {# Section 1: Contexte du projet #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"folder-kanban\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Contexte du projet</h3>
                    <p>Lier ce décaissement à un projet et une convention active.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.projet, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.projet, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.projet, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.financement, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.financement, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.financement, {'attr': {'class': 'form-error'}}) }}
                    {% if form.financement.vars.help is defined %}
                        <div class=\"form-help\">{{ form.financement.vars.help }}</div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Référence</label>
                    <input type=\"text\" class=\"form-input\" value=\"{{ decaissement.reference }}\" readonly style=\"background-color: var(--bg-tertiary); color: var(--text-muted);\">
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateDemande, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateDemande, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateDemande, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
        </div>

        {# Section 2: Détails financiers #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"coins\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Détails financiers</h3>
                    <p>Montant, bénéficiaire et mode de paiement.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.beneficiaire, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.beneficiaire, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.beneficiaire, {'attr': {'class': 'form-error'}}) }}
                    {% if form.beneficiaire.vars.help is defined %}
                        <div class=\"form-help\">{{ form.beneficiaire.vars.help }}</div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.modePaiement, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.modePaiement, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.modePaiement, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.montant, null, {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"input-group\">
                        {{ form_widget(form.montant, {'attr': {'class': 'form-input'}}) }}
                        <span class=\"input-suffix\">{{ form_row(form.devise, {'label': false, 'attr': {'class': 'form-select', 'style': 'position: absolute; right: 0; top: 0; width: auto; border: none; background: transparent; padding-right: 16px;'}}) }}</span>
                    </div>
                    {{ form_errors(form.montant, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.ligneBudgetaire, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.ligneBudgetaire, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.ligneBudgetaire, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.description, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-textarea', 'rows': 3}}) }}
                    {{ form_errors(form.description, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
        </div>

        {# Section 3: Pièces justificatives #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"paperclip\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Pièces justificatives</h3>
                    <p>Factures, bons de commande ou PV de réception.</p>
                </div>
            </div>

            <div class=\"form-group\">
                {% if decaissement.pieceJustificative %}
                    <div class=\"current-file\">
                        <i data-lucide=\"file-text\"></i>
                        <span>Fichier actuel : {{ decaissement.pieceJustificative }}</span>
                    </div>
                {% endif %}

                {{ form_label(form.pieceJustificative, 'Remplacer le fichier (optionnel)', {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"file-upload-zone\" onclick=\"document.getElementById('{{ form.pieceJustificative.vars.id }}').click()\">
                    <div class=\"upload-icon\">
                        <i data-lucide=\"upload-cloud\" style=\"width: 48px; height: 48px;\"></i>
                    </div>
                    <div class=\"upload-text\">Cliquez pour changer de fichier</div>
                    <div class=\"upload-hint\">{{ form.pieceJustificative.vars.help }}</div>
                </div>
                {{ form_widget(form.pieceJustificative, {'attr': {'class': 'form-input', 'style': 'display: none;'}}) }}
                {{ form_errors(form.pieceJustificative, {'attr': {'class': 'form-error'}}) }}
            </div>
        </div>

        {# Section 4: Statut et commentaires (si admin) #}
        {% if form.statut is defined %}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"activity\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Gestion du statut</h3>
                    <p>Modifier le statut et ajouter des commentaires.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.statut, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.statut, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateValidation, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateValidation, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateValidation, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateExecution, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateExecution, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateExecution, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.commentaire, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.commentaire, {'attr': {'class': 'form-textarea', 'rows': 3}}) }}
                    {{ form_errors(form.commentaire, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
        </div>
        {% endif %}

        {# Actions #}
        <div class=\"action-bar\">
            <a href=\"{{ path('app_decaissement_show', {'id': decaissement.id}) }}\" class=\"btn btn-secondary\">
                Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i data-lucide=\"save\"></i>
                Enregistrer les modifications
            </button>
        </div>

        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>

<script>
    // Afficher le nom du fichier sélectionné
    document.getElementById('{{ form.pieceJustificative.vars.id }}').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || 'Aucun fichier sélectionné';
        const uploadText = document.querySelector('.upload-text');
        if (uploadText) {
            uploadText.textContent = fileName;
        }
    });
</script>
{% endblock %}
", "decaissement/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\decaissement\\edit.html.twig");
    }
}
