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

/* audit/new.html.twig */
class __TwigTemplate_220bca4c71edf26743fa4a88a59fdb5d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "audit/new.html.twig"));

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

        yield "Nouvel Audit/Contrôle - SIGEP Tchad";
        
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
        width: 44px;
        height: 44px;
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .section-title h3 {
        font-size: 1.15rem;
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

    .form-group { margin-bottom: 0; }

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

    /* File Upload Zone */
    .file-upload-container {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        padding: 24px;
        background: var(--bg-primary);
        transition: all 0.2s ease;
    }

    .file-upload-container:hover {
        border-color: var(--tchad-blue);
        background: rgba(0, 38, 100, 0.02);
    }

    .file-upload-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
    }

    .file-upload-icon {
        width: 40px;
        height: 40px;
        background: var(--tchad-blue);
        color: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .file-upload-info h4 {
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .file-upload-info p {
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    .file-input-wrapper {
        position: relative;
    }

    .file-input-wrapper input[type=\"file\"] {
        width: 100%;
        padding: 10px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        cursor: pointer;
    }

    .file-input-wrapper input[type=\"file\"]::file-selector-button {
        padding: 8px 16px;
        background: var(--tchad-gold);
        color: var(--tchad-blue);
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        margin-right: 12px;
    }

    .file-input-wrapper input[type=\"file\"]::file-selector-button:hover {
        background: #e6b800;
    }

    .file-preview-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 12px;
        margin-top: 12px;
    }

    .file-preview-item {
        position: relative;
        padding: 8px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        text-align: center;
        font-size: 0.75rem;
        background: var(--bg-secondary);
    }

    .file-preview-item i {
        width: 32px;
        height: 32px;
        color: var(--text-muted);
    }

    /* Action Bar */
    .action-bar {
        background: var(--bg-tertiary);
        padding: 24px 32px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        border-top: 1px solid var(--border-color);
    }

    .action-info {
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .action-buttons {
        display: flex;
        gap: 12px;
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

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        .full-width {
            grid-column: span 1;
        }
        .action-bar {
            flex-direction: column;
        }
        .action-buttons {
            width: 100%;
            flex-direction: column;
        }
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 282
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_index");
        yield "\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i>
                Retour aux audits
            </a>
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"clipboard-check\"></i>
                </span>
                Nouvel Audit/Contrôle
            </h2>
            <p>Enregistrer un nouvel audit ou contrôle de projet avec documents justificatifs</p>
        </div>
    </div>

    ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "flashes", [], "any", false, false, false, 299));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 300
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 301
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i data-lucide=\"";
                // line 302
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } else {
                    yield "alert-circle";
                }
                yield "\"></i>
                ";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"alert-close\" onclick=\"this.parentElement.remove()\">
                    <i data-lucide=\"x\"></i>
                </button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        yield "
    ";
        // line 311
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), 'form_start', ["attr" => ["class" => "form-card", "novalidate" => "novalidate"]]);
        yield "

        ";
        // line 314
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Identification de l'Audit</h3>
                    <p>Informations de base sur l'audit ou le contrôle effectué</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "projet", [], "any", false, false, false, 327), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 328
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "projet", [], "any", false, false, false, 328), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "projet", [], "any", false, false, false, 329), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "type", [], "any", false, false, false, 333), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "type", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 335
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "type", [], "any", false, false, false, 335), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "titre", [], "any", false, false, false, 339), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "titre", [], "any", false, false, false, 340), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "titre", [], "any", false, false, false, 341), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "dateAudit", [], "any", false, false, false, 345), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "dateAudit", [], "any", false, false, false, 346), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "dateAudit", [], "any", false, false, false, 347), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "auditeur", [], "any", false, false, false, 351), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 352
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "auditeur", [], "any", false, false, false, 352), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 353
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "auditeur", [], "any", false, false, false, 353), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 357
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "organisme", [], "any", false, false, false, 357), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "organisme", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 359
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), "organisme", [], "any", false, false, false, 359), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "dateDebut", [], "any", false, false, false, 363), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "dateDebut", [], "any", false, false, false, 364), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 365
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "dateDebut", [], "any", false, false, false, 365), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 366
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, true, false, 366), "vars", [], "any", false, true, false, 366), "help", [], "any", true, true, false, 366)) {
            // line 367
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "dateDebut", [], "any", false, false, false, 367), "vars", [], "any", false, false, false, 367), "help", [], "any", false, false, false, 367), "html", null, true);
            yield "</div>
                    ";
        }
        // line 369
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "dateFin", [], "any", false, false, false, 372), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 373
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "dateFin", [], "any", false, false, false, 373), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "dateFin", [], "any", false, false, false, 374), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 380
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-check\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Contenu et Résultats</h3>
                    <p>Objectifs, résultats et recommandations de l'audit</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    ";
        // line 393
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "objectifs", [], "any", false, false, false, 393), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "objectifs", [], "any", false, false, false, 394), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 3]]);
        yield "
                    ";
        // line 395
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "objectifs", [], "any", false, false, false, 395), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "resultat", [], "any", false, false, false, 399), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "resultat", [], "any", false, false, false, 400), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 4]]);
        yield "
                    ";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "resultat", [], "any", false, false, false, 401), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 405
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "recommandations", [], "any", false, false, false, 405), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 406
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "recommandations", [], "any", false, false, false, 406), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 4]]);
        yield "
                    ";
        // line 407
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), "recommandations", [], "any", false, false, false, 407), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "observations", [], "any", false, false, false, 411), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "observations", [], "any", false, false, false, 412), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 3]]);
        yield "
                    ";
        // line 413
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "observations", [], "any", false, false, false, 413), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 419
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"paperclip\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Pièces Justificatives</h3>
                    <p>Documents officiels et photos de l'audit</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\">
                                <i data-lucide=\"file-text\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Documents Justificatifs</h4>
                                <p>Rapports d'audit, PV, certifications, etc.</p>
                            </div>
                        </div>
                        <div class=\"file-input-wrapper\">
                            ";
        // line 443
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "documentsFiles", [], "any", false, false, false, 443), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        </div>
                        ";
        // line 445
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), "documentsFiles", [], "any", false, false, false, 445), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                        ";
        // line 446
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documentsFiles", [], "any", false, true, false, 446), "vars", [], "any", false, true, false, 446), "help", [], "any", true, true, false, 446)) {
            // line 447
            yield "                            <div class=\"form-help\">
                                <i data-lucide=\"info\"></i>
                                ";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "documentsFiles", [], "any", false, false, false, 449), "vars", [], "any", false, false, false, 449), "help", [], "any", false, false, false, 449), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 452
        yield "                        <div id=\"documentsPreview\" class=\"file-preview-grid\"></div>
                    </div>
                </div>

                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\" style=\"background: var(--tchad-gold); color: var(--tchad-blue);\">
                                <i data-lucide=\"camera\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Photos</h4>
                                <p>Photos prises lors de l'audit ou du contrôle</p>
                            </div>
                        </div>
                        <div class=\"file-input-wrapper\">
                            ";
        // line 468
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "photosFiles", [], "any", false, false, false, 468), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        </div>
                        ";
        // line 470
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 470, $this->source); })()), "photosFiles", [], "any", false, false, false, 470), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                        ";
        // line 471
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photosFiles", [], "any", false, true, false, 471), "vars", [], "any", false, true, false, 471), "help", [], "any", true, true, false, 471)) {
            // line 472
            yield "                            <div class=\"form-help\">
                                <i data-lucide=\"info\"></i>
                                ";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 474, $this->source); })()), "photosFiles", [], "any", false, false, false, 474), "vars", [], "any", false, false, false, 474), "help", [], "any", false, false, false, 474), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 477
        yield "                        <div id=\"photosPreview\" class=\"file-preview-grid\"></div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 484
        yield "        <div class=\"action-bar\">
            <div class=\"action-info\">
                <i data-lucide=\"shield-check\"></i>
                Les informations saisies seront vérifiées et validées
            </div>
            <div class=\"action-buttons\">
                <a href=\"";
        // line 490
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_index");
        yield "\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i data-lucide=\"save\"></i>
                    Enregistrer l'audit
                </button>
            </div>
        </div>

        ";
        // line 501
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), "_token", [], "any", false, false, false, 501), 'row');
        yield "
    ";
        // line 502
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
</div>

<script>
lucide.createIcons();

// Preview des documents
document.querySelector('input[name=\"";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), "documentsFiles", [], "any", false, false, false, 509), "vars", [], "any", false, false, false, 509), "full_name", [], "any", false, false, false, 509), "html", null, true);
        yield "\"]')?.addEventListener('change', function(e) {
    const preview = document.getElementById('documentsPreview');
    preview.innerHTML = '';
    
    Array.from(e.target.files).forEach(file => {
        const item = document.createElement('div');
        item.className = 'file-preview-item';
        item.innerHTML = `
            <i data-lucide=\"file\"></i>
            <div>\${file.name.substring(0, 15)}...</div>
            <small>\${(file.size / 1024).toFixed(1)} KB</small>
        `;
        preview.appendChild(item);
    });
    
    lucide.createIcons();
});

// Preview des photos
document.querySelector('input[name=\"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "photosFiles", [], "any", false, false, false, 528), "vars", [], "any", false, false, false, 528), "full_name", [], "any", false, false, false, 528), "html", null, true);
        yield "\"]')?.addEventListener('change', function(e) {
    const preview = document.getElementById('photosPreview');
    preview.innerHTML = '';
    
    Array.from(e.target.files).forEach(file => {
        const item = document.createElement('div');
        item.className = 'file-preview-item';
        
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(event) {
                item.innerHTML = `
                    <img src=\"\${event.target.result}\" style=\"width: 100%; height: 80px; object-fit: cover; border-radius: 6px;\">
                    <div style=\"margin-top: 4px;\">\${file.name.substring(0, 12)}...</div>
                `;
            };
            reader.readAsDataURL(file);
        } else {
            item.innerHTML = `
                <i data-lucide=\"image\"></i>
                <div>\${file.name.substring(0, 15)}...</div>
            `;
        }
        
        preview.appendChild(item);
    });
    
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
        return "audit/new.html.twig";
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
        return array (  821 => 528,  799 => 509,  789 => 502,  785 => 501,  771 => 490,  763 => 484,  755 => 477,  749 => 474,  745 => 472,  743 => 471,  739 => 470,  734 => 468,  716 => 452,  710 => 449,  706 => 447,  704 => 446,  700 => 445,  695 => 443,  669 => 419,  661 => 413,  657 => 412,  653 => 411,  646 => 407,  642 => 406,  638 => 405,  631 => 401,  627 => 400,  623 => 399,  616 => 395,  612 => 394,  608 => 393,  593 => 380,  585 => 374,  581 => 373,  577 => 372,  572 => 369,  566 => 367,  564 => 366,  560 => 365,  556 => 364,  552 => 363,  545 => 359,  541 => 358,  537 => 357,  530 => 353,  526 => 352,  522 => 351,  515 => 347,  511 => 346,  507 => 345,  500 => 341,  496 => 340,  492 => 339,  485 => 335,  481 => 334,  477 => 333,  470 => 329,  466 => 328,  462 => 327,  447 => 314,  442 => 311,  439 => 310,  433 => 309,  421 => 303,  413 => 302,  408 => 301,  403 => 300,  399 => 299,  382 => 285,  377 => 282,  367 => 281,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Audit/Contrôle - SIGEP Tchad{% endblock %}

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
        width: 44px;
        height: 44px;
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .section-title h3 {
        font-size: 1.15rem;
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

    .form-group { margin-bottom: 0; }

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

    /* File Upload Zone */
    .file-upload-container {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        padding: 24px;
        background: var(--bg-primary);
        transition: all 0.2s ease;
    }

    .file-upload-container:hover {
        border-color: var(--tchad-blue);
        background: rgba(0, 38, 100, 0.02);
    }

    .file-upload-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
    }

    .file-upload-icon {
        width: 40px;
        height: 40px;
        background: var(--tchad-blue);
        color: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .file-upload-info h4 {
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .file-upload-info p {
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    .file-input-wrapper {
        position: relative;
    }

    .file-input-wrapper input[type=\"file\"] {
        width: 100%;
        padding: 10px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        cursor: pointer;
    }

    .file-input-wrapper input[type=\"file\"]::file-selector-button {
        padding: 8px 16px;
        background: var(--tchad-gold);
        color: var(--tchad-blue);
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        margin-right: 12px;
    }

    .file-input-wrapper input[type=\"file\"]::file-selector-button:hover {
        background: #e6b800;
    }

    .file-preview-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 12px;
        margin-top: 12px;
    }

    .file-preview-item {
        position: relative;
        padding: 8px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        text-align: center;
        font-size: 0.75rem;
        background: var(--bg-secondary);
    }

    .file-preview-item i {
        width: 32px;
        height: 32px;
        color: var(--text-muted);
    }

    /* Action Bar */
    .action-bar {
        background: var(--bg-tertiary);
        padding: 24px 32px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        border-top: 1px solid var(--border-color);
    }

    .action-info {
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .action-buttons {
        display: flex;
        gap: 12px;
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

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        .full-width {
            grid-column: span 1;
        }
        .action-bar {
            flex-direction: column;
        }
        .action-buttons {
            width: 100%;
            flex-direction: column;
        }
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"{{ path('app_audit_index') }}\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i>
                Retour aux audits
            </a>
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"clipboard-check\"></i>
                </span>
                Nouvel Audit/Contrôle
            </h2>
            <p>Enregistrer un nouvel audit ou contrôle de projet avec documents justificatifs</p>
        </div>
    </div>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <i data-lucide=\"{% if label == 'success' %}check-circle{% else %}alert-circle{% endif %}\"></i>
                {{ message }}
                <button type=\"button\" class=\"alert-close\" onclick=\"this.parentElement.remove()\">
                    <i data-lucide=\"x\"></i>
                </button>
            </div>
        {% endfor %}
    {% endfor %}

    {{ form_start(form, {'attr': {'class': 'form-card', 'novalidate': 'novalidate'}}) }}

        {# Section 1: Identification #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Identification de l'Audit</h3>
                    <p>Informations de base sur l'audit ou le contrôle effectué</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.projet, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.projet, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.projet, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.type, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.type, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.titre, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.titre, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.titre, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateAudit, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateAudit, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateAudit, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.auditeur, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.auditeur, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.auditeur, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.organisme, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.organisme, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.organisme, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateDebut, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateDebut, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateDebut, {'attr': {'class': 'form-error'}}) }}
                    {% if form.dateDebut.vars.help is defined %}
                        <div class=\"form-help\">{{ form.dateDebut.vars.help }}</div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateFin, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateFin, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateFin, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
        </div>

        {# Section 2: Contenu de l'Audit #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-check\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Contenu et Résultats</h3>
                    <p>Objectifs, résultats et recommandations de l'audit</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    {{ form_label(form.objectifs, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.objectifs, {'attr': {'class': 'form-textarea', 'rows': 3}}) }}
                    {{ form_errors(form.objectifs, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.resultat, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.resultat, {'attr': {'class': 'form-textarea', 'rows': 4}}) }}
                    {{ form_errors(form.resultat, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.recommandations, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.recommandations, {'attr': {'class': 'form-textarea', 'rows': 4}}) }}
                    {{ form_errors(form.recommandations, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.observations, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.observations, {'attr': {'class': 'form-textarea', 'rows': 3}}) }}
                    {{ form_errors(form.observations, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
        </div>

        {# Section 3: Documents et Photos #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"paperclip\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Pièces Justificatives</h3>
                    <p>Documents officiels et photos de l'audit</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\">
                                <i data-lucide=\"file-text\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Documents Justificatifs</h4>
                                <p>Rapports d'audit, PV, certifications, etc.</p>
                            </div>
                        </div>
                        <div class=\"file-input-wrapper\">
                            {{ form_widget(form.documentsFiles, {'attr': {'class': 'form-input'}}) }}
                        </div>
                        {{ form_errors(form.documentsFiles, {'attr': {'class': 'form-error'}}) }}
                        {% if form.documentsFiles.vars.help is defined %}
                            <div class=\"form-help\">
                                <i data-lucide=\"info\"></i>
                                {{ form.documentsFiles.vars.help }}
                            </div>
                        {% endif %}
                        <div id=\"documentsPreview\" class=\"file-preview-grid\"></div>
                    </div>
                </div>

                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\" style=\"background: var(--tchad-gold); color: var(--tchad-blue);\">
                                <i data-lucide=\"camera\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Photos</h4>
                                <p>Photos prises lors de l'audit ou du contrôle</p>
                            </div>
                        </div>
                        <div class=\"file-input-wrapper\">
                            {{ form_widget(form.photosFiles, {'attr': {'class': 'form-input'}}) }}
                        </div>
                        {{ form_errors(form.photosFiles, {'attr': {'class': 'form-error'}}) }}
                        {% if form.photosFiles.vars.help is defined %}
                            <div class=\"form-help\">
                                <i data-lucide=\"info\"></i>
                                {{ form.photosFiles.vars.help }}
                            </div>
                        {% endif %}
                        <div id=\"photosPreview\" class=\"file-preview-grid\"></div>
                    </div>
                </div>
            </div>
        </div>

        {# Action Bar #}
        <div class=\"action-bar\">
            <div class=\"action-info\">
                <i data-lucide=\"shield-check\"></i>
                Les informations saisies seront vérifiées et validées
            </div>
            <div class=\"action-buttons\">
                <a href=\"{{ path('app_audit_index') }}\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i data-lucide=\"save\"></i>
                    Enregistrer l'audit
                </button>
            </div>
        </div>

        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>

<script>
lucide.createIcons();

// Preview des documents
document.querySelector('input[name=\"{{ form.documentsFiles.vars.full_name }}\"]')?.addEventListener('change', function(e) {
    const preview = document.getElementById('documentsPreview');
    preview.innerHTML = '';
    
    Array.from(e.target.files).forEach(file => {
        const item = document.createElement('div');
        item.className = 'file-preview-item';
        item.innerHTML = `
            <i data-lucide=\"file\"></i>
            <div>\${file.name.substring(0, 15)}...</div>
            <small>\${(file.size / 1024).toFixed(1)} KB</small>
        `;
        preview.appendChild(item);
    });
    
    lucide.createIcons();
});

// Preview des photos
document.querySelector('input[name=\"{{ form.photosFiles.vars.full_name }}\"]')?.addEventListener('change', function(e) {
    const preview = document.getElementById('photosPreview');
    preview.innerHTML = '';
    
    Array.from(e.target.files).forEach(file => {
        const item = document.createElement('div');
        item.className = 'file-preview-item';
        
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(event) {
                item.innerHTML = `
                    <img src=\"\${event.target.result}\" style=\"width: 100%; height: 80px; object-fit: cover; border-radius: 6px;\">
                    <div style=\"margin-top: 4px;\">\${file.name.substring(0, 12)}...</div>
                `;
            };
            reader.readAsDataURL(file);
        } else {
            item.innerHTML = `
                <i data-lucide=\"image\"></i>
                <div>\${file.name.substring(0, 15)}...</div>
            `;
        }
        
        preview.appendChild(item);
    });
    
    lucide.createIcons();
});
</script>
{% endblock %}
", "audit/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\audit\\new.html.twig");
    }
}
