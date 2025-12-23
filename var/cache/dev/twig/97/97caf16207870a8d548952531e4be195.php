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

/* audit/edit.html.twig */
class __TwigTemplate_3e688262b16282308f66a2c5f74ab517 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "audit/edit.html.twig"));

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

        yield "Modifier Audit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 3, $this->source); })()), "reference", [], "any", false, false, false, 3), "html", null, true);
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Réutiliser les styles de new.html.twig */
    .form-card { background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-sm); }
    .form-section { padding: 32px; border-bottom: 1px solid var(--border-color); }
    .form-section:last-child { border-bottom: none; }
    .section-header { margin-bottom: 24px; display: flex; align-items: flex-start; gap: 16px; }
    .section-icon { width: 44px; height: 44px; background: var(--bg-tertiary); color: var(--tchad-blue); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .section-title h3 { font-size: 1.15rem; font-weight: 600; margin-bottom: 4px; }
    .section-title p { font-size: 0.85rem; color: var(--text-muted); }
    .form-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
    .full-width { grid-column: span 2; }
    .form-label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 8px; }
    .form-input, .form-select, .form-textarea { width: 100%; padding: 12px 16px; border: 1px solid var(--border-color); border-radius: 10px; background: var(--bg-primary); color: var(--text-primary); font-family: inherit; font-size: 0.95rem; transition: border-color 0.2s; }
    .form-input:focus, .form-select:focus, .form-textarea:focus { outline: none; border-color: var(--tchad-blue); box-shadow: 0 0 0 3px rgba(0, 38, 100, 0.1); }
    .form-help { font-size: 0.8rem; color: var(--text-muted); margin-top: 6px; }
    .form-error { color: var(--danger); font-size: 0.85rem; margin-top: 6px; }
    
    /* Fichiers existants */
    .existing-files {
        margin-top: 16px;
        padding: 16px;
        background: var(--bg-secondary);
        border-radius: 10px;
        border: 1px solid var(--border-color);
    }
    
    .existing-files-header {
        font-weight: 600;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--text-primary);
    }
    
    .files-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 12px;
    }
    
    .file-item {
        position: relative;
        padding: 12px;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        transition: all 0.2s;
    }
    
    .file-item:hover {
        border-color: var(--tchad-blue);
        box-shadow: var(--shadow-sm);
    }
    
    .file-item-icon {
        width: 40px;
        height: 40px;
        background: var(--bg-tertiary);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
        color: var(--tchad-blue);
    }
    
    .file-item-name {
        font-size: 0.8rem;
        color: var(--text-primary);
        margin-bottom: 8px;
        word-break: break-word;
    }
    
    .file-item-actions {
        display: flex;
        gap: 6px;
    }
    
    .file-item-btn {
        flex: 1;
        padding: 6px;
        border: none;
        border-radius: 6px;
        font-size: 0.75rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        transition: all 0.2s;
    }
    
    .file-item-btn.view {
        background: var(--tchad-blue);
        color: white;
    }
    
    .file-item-btn.view:hover {
        background: #003a8c;
    }
    
    .file-item-btn.delete {
        background: var(--danger);
        color: white;
    }
    
    .file-item-btn.delete:hover {
        background: #dc2626;
    }
    
    .photo-item {
        position: relative;
    }
    
    .photo-item img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 8px;
    }
    
    .file-upload-container {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        padding: 24px;
        background: var(--bg-primary);
        transition: all 0.2s;
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
    
    .action-bar {
        background: var(--bg-tertiary);
        padding: 24px 32px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        border-top: 1px solid var(--border-color);
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
        transition: all 0.2s;
        border: none;
        text-decoration: none;
    }
    
    .btn-secondary {
        background: white;
        color: var(--text-primary);
        border: 1px solid var(--border-color);
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
    
    .status-badge.planifie { background: rgba(245, 158, 11, 0.1); color: #d97706; }
    .status-badge.en_cours { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
    .status-badge.termine { background: rgba(16, 185, 129, 0.1); color: #059669; }
    
    @media (max-width: 768px) {
        .form-grid { grid-template-columns: 1fr; }
        .full-width { grid-column: span 1; }
        .files-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 241
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 244, $this->source); })()), "id", [], "any", false, false, false, 244)]), "html", null, true);
        yield "\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i>
                Retour à l'audit
            </a>
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"edit\"></i>
                </span>
                Modifier l'Audit ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 252, $this->source); })()), "reference", [], "any", false, false, false, 252), "html", null, true);
        yield "
            </h2>
            <p>
                Statut actuel : 
                <span class=\"status-badge ";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 256, $this->source); })()), "statut", [], "any", false, false, false, 256), "html", null, true);
        yield "\">
                    ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 257, $this->source); })()), "statutLabel", [], "any", false, false, false, 257), "html", null, true);
        yield "
                </span>
            </p>
        </div>
    </div>

    ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "flashes", [], "any", false, false, false, 263));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 264
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 265
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i data-lucide=\"";
                // line 266
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } else {
                    yield "alert-circle";
                }
                yield "\"></i>
                ";
                // line 267
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
            // line 273
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        yield "
    ";
        // line 275
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), 'form_start', ["attr" => ["class" => "form-card"]]);
        yield "

        ";
        // line 278
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Identification de l'Audit</h3>
                    <p>Informations de base</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "projet", [], "any", false, false, false, 291), 'label');
        yield "
                    ";
        // line 292
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "projet", [], "any", false, false, false, 292), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 293
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "projet", [], "any", false, false, false, 293), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 297
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "type", [], "any", false, false, false, 297), 'label');
        yield "
                    ";
        // line 298
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "type", [], "any", false, false, false, 298), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 299
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "type", [], "any", false, false, false, 299), 'errors');
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "titre", [], "any", false, false, false, 303), 'label');
        yield "
                    ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "titre", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "titre", [], "any", false, false, false, 305), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 309
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "dateAudit", [], "any", false, false, false, 309), 'label');
        yield "
                    ";
        // line 310
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "dateAudit", [], "any", false, false, false, 310), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "dateAudit", [], "any", false, false, false, 311), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 315
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "auditeur", [], "any", false, false, false, 315), 'label');
        yield "
                    ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "auditeur", [], "any", false, false, false, 316), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "auditeur", [], "any", false, false, false, 317), 'errors');
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "organisme", [], "any", false, false, false, 321), 'label');
        yield "
                    ";
        // line 322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "organisme", [], "any", false, false, false, 322), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 323
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "organisme", [], "any", false, false, false, 323), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "dateDebut", [], "any", false, false, false, 327), 'label');
        yield "
                    ";
        // line 328
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "dateDebut", [], "any", false, false, false, 328), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "dateDebut", [], "any", false, false, false, 329), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "dateFin", [], "any", false, false, false, 333), 'label');
        yield "
                    ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "dateFin", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 335
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "dateFin", [], "any", false, false, false, 335), 'errors');
        yield "
                </div>
            </div>
        </div>

        ";
        // line 341
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-check\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Contenu et Résultats</h3>
                    <p>Objectifs, résultats et recommandations</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    ";
        // line 354
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "objectifs", [], "any", false, false, false, 354), 'label');
        yield "
                    ";
        // line 355
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "objectifs", [], "any", false, false, false, 355), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 3]]);
        yield "
                    ";
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "objectifs", [], "any", false, false, false, 356), 'errors');
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 360
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "resultat", [], "any", false, false, false, 360), 'label');
        yield "
                    ";
        // line 361
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "resultat", [], "any", false, false, false, 361), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 4]]);
        yield "
                    ";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "resultat", [], "any", false, false, false, 362), 'errors');
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 366
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "recommandations", [], "any", false, false, false, 366), 'label');
        yield "
                    ";
        // line 367
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "recommandations", [], "any", false, false, false, 367), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 4]]);
        yield "
                    ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "recommandations", [], "any", false, false, false, 368), 'errors');
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "observations", [], "any", false, false, false, 372), 'label');
        yield "
                    ";
        // line 373
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "observations", [], "any", false, false, false, 373), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 3]]);
        yield "
                    ";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "observations", [], "any", false, false, false, 374), 'errors');
        yield "
                </div>
            </div>
        </div>

        ";
        // line 380
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 380)) {
            // line 381
            yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"star\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Évaluation et Statut</h3>
                    <p>Note, niveau et statut de l'audit</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
            // line 394
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "statut", [], "any", false, false, false, 394), 'label');
            yield "
                    ";
            // line 395
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "statut", [], "any", false, false, false, 395), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                    ";
            // line 396
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "statut", [], "any", false, false, false, 396), 'errors');
            yield "
                </div>

                <div class=\"form-group\">
                    ";
            // line 400
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "niveau", [], "any", false, false, false, 400), 'label');
            yield "
                    ";
            // line 401
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "niveau", [], "any", false, false, false, 401), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                    ";
            // line 402
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "niveau", [], "any", false, false, false, 402), 'errors');
            yield "
                </div>

                <div class=\"form-group\">
                    ";
            // line 406
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "score", [], "any", false, false, false, 406), 'label');
            yield "
                    ";
            // line 407
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), "score", [], "any", false, false, false, 407), 'widget', ["attr" => ["class" => "form-input"]]);
            yield "
                    ";
            // line 408
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()), "score", [], "any", false, false, false, 408), 'errors');
            yield "
                    ";
            // line 409
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score", [], "any", false, true, false, 409), "vars", [], "any", false, true, false, 409), "help", [], "any", true, true, false, 409)) {
                // line 410
                yield "                        <div class=\"form-help\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "score", [], "any", false, false, false, 410), "vars", [], "any", false, false, false, 410), "help", [], "any", false, false, false, 410), "html", null, true);
                yield "</div>
                    ";
            }
            // line 412
            yield "                </div>
            </div>
        </div>
        ";
        }
        // line 416
        yield "
        ";
        // line 418
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 418, $this->source); })()), "nombreDocuments", [], "any", false, false, false, 418) > 0) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 418, $this->source); })()), "nombrePhotos", [], "any", false, false, false, 418) > 0))) {
            // line 419
            yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"folder\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Fichiers Existants</h3>
                    <p>Gérer les documents et photos déjà enregistrés</p>
                </div>
            </div>

            ";
            // line 430
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 430, $this->source); })()), "nombreDocuments", [], "any", false, false, false, 430) > 0)) {
                // line 431
                yield "            <div class=\"existing-files\">
                <div class=\"existing-files-header\">
                    <i data-lucide=\"file-text\"></i>
                    Documents (";
                // line 434
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 434, $this->source); })()), "nombreDocuments", [], "any", false, false, false, 434), "html", null, true);
                yield ")
                </div>
                <div class=\"files-grid\">
                    ";
                // line 437
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 437, $this->source); })()), "documents", [], "any", false, false, false, 437));
                foreach ($context['_seq'] as $context["i"] => $context["document"]) {
                    // line 438
                    yield "                    <div class=\"file-item\">
                        <div class=\"file-item-icon\">
                            <i data-lucide=\"file\"></i>
                        </div>
                        <div class=\"file-item-name\">";
                    // line 442
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["document"], "html", null, true);
                    yield "</div>
                        <div class=\"file-item-actions\">
                            <a href=\"";
                    // line 444
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/audits/documents/" . $context["document"])), "html", null, true);
                    yield "\" target=\"_blank\" class=\"file-item-btn view\">
                                <i data-lucide=\"eye\" style=\"width: 14px; height: 14px;\"></i>
                                Voir
                            </a>
                            <form method=\"POST\" action=\"";
                    // line 448
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_delete_document", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 448, $this->source); })()), "id", [], "any", false, false, false, 448), "index" => $context["i"]]), "html", null, true);
                    yield "\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 449
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-doc" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 449, $this->source); })()), "id", [], "any", false, false, false, 449))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" class=\"file-item-btn delete\" onclick=\"return confirm('Supprimer ce document ?')\">
                                    <i data-lucide=\"trash-2\" style=\"width: 14px; height: 14px;\"></i>
                                    Suppr.
                                </button>
                            </form>
                        </div>
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['i'], $context['document'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 458
                yield "                </div>
            </div>
            ";
            }
            // line 461
            yield "
            ";
            // line 462
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 462, $this->source); })()), "nombrePhotos", [], "any", false, false, false, 462) > 0)) {
                // line 463
                yield "            <div class=\"existing-files\" style=\"margin-top: 20px;\">
                <div class=\"existing-files-header\">
                    <i data-lucide=\"image\"></i>
                    Photos (";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 466, $this->source); })()), "nombrePhotos", [], "any", false, false, false, 466), "html", null, true);
                yield ")
                </div>
                <div class=\"files-grid\">
                    ";
                // line 469
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 469, $this->source); })()), "photos", [], "any", false, false, false, 469));
                foreach ($context['_seq'] as $context["i"] => $context["photo"]) {
                    // line 470
                    yield "                    <div class=\"file-item photo-item\">
                        <img src=\"";
                    // line 471
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/audits/photos/" . $context["photo"])), "html", null, true);
                    yield "\" alt=\"Photo ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] + 1), "html", null, true);
                    yield "\">
                        <div class=\"file-item-actions\">
                            <a href=\"";
                    // line 473
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/audits/photos/" . $context["photo"])), "html", null, true);
                    yield "\" target=\"_blank\" class=\"file-item-btn view\">
                                <i data-lucide=\"maximize-2\" style=\"width: 14px; height: 14px;\"></i>
                                Ouvrir
                            </a>
                            <form method=\"POST\" action=\"";
                    // line 477
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_delete_photo", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 477, $this->source); })()), "id", [], "any", false, false, false, 477), "index" => $context["i"]]), "html", null, true);
                    yield "\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 478
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-photo" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 478, $this->source); })()), "id", [], "any", false, false, false, 478))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" class=\"file-item-btn delete\" onclick=\"return confirm('Supprimer cette photo ?')\">
                                    <i data-lucide=\"trash-2\" style=\"width: 14px; height: 14px;\"></i>
                                    Suppr.
                                </button>
                            </form>
                        </div>
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['i'], $context['photo'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 487
                yield "                </div>
            </div>
            ";
            }
            // line 490
            yield "        </div>
        ";
        }
        // line 492
        yield "
        ";
        // line 494
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"upload\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Ajouter de Nouveaux Fichiers</h3>
                    <p>Compléter avec de nouveaux documents et photos</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\">
                                <i data-lucide=\"file-plus\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Nouveaux Documents</h4>
                                <p>Ajouter d'autres documents justificatifs</p>
                            </div>
                        </div>
                        ";
        // line 517
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 517, $this->source); })()), "documentsFiles", [], "any", false, false, false, 517), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        ";
        // line 518
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "documentsFiles", [], "any", false, false, false, 518), 'errors');
        yield "
                        ";
        // line 519
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documentsFiles", [], "any", false, true, false, 519), "vars", [], "any", false, true, false, 519), "help", [], "any", true, true, false, 519)) {
            // line 520
            yield "                            <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 520, $this->source); })()), "documentsFiles", [], "any", false, false, false, 520), "vars", [], "any", false, false, false, 520), "help", [], "any", false, false, false, 520), "html", null, true);
            yield "</div>
                        ";
        }
        // line 522
        yield "                    </div>
                </div>

                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\" style=\"background: var(--tchad-gold); color: var(--tchad-blue);\">
                                <i data-lucide=\"camera\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Nouvelles Photos</h4>
                                <p>Ajouter d'autres photos</p>
                            </div>
                        </div>
                        ";
        // line 536
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), "photosFiles", [], "any", false, false, false, 536), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        ";
        // line 537
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 537, $this->source); })()), "photosFiles", [], "any", false, false, false, 537), 'errors');
        yield "
                        ";
        // line 538
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photosFiles", [], "any", false, true, false, 538), "vars", [], "any", false, true, false, 538), "help", [], "any", true, true, false, 538)) {
            // line 539
            yield "                            <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 539, $this->source); })()), "photosFiles", [], "any", false, false, false, 539), "vars", [], "any", false, false, false, 539), "help", [], "any", false, false, false, 539), "html", null, true);
            yield "</div>
                        ";
        }
        // line 541
        yield "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 547
        yield "        <div class=\"action-bar\">
            <div class=\"action-info\">
                <i data-lucide=\"info\"></i>
                Dernière modification : ";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 550, $this->source); })()), "updatedAt", [], "any", false, false, false, 550), "d/m/Y à H:i"), "html", null, true);
        yield "
            </div>
            <div class=\"action-buttons\">
                <a href=\"";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 553, $this->source); })()), "id", [], "any", false, false, false, 553)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i data-lucide=\"save\"></i>
                    Enregistrer les modifications
                </button>
            </div>
        </div>

        ";
        // line 564
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 564, $this->source); })()), "_token", [], "any", false, false, false, 564), 'row');
        yield "
    ";
        // line 565
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 565, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
</div>

<script>
lucide.createIcons();
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
        return "audit/edit.html.twig";
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
        return array (  964 => 565,  960 => 564,  946 => 553,  940 => 550,  935 => 547,  928 => 541,  922 => 539,  920 => 538,  916 => 537,  912 => 536,  896 => 522,  890 => 520,  888 => 519,  884 => 518,  880 => 517,  855 => 494,  852 => 492,  848 => 490,  843 => 487,  828 => 478,  824 => 477,  817 => 473,  810 => 471,  807 => 470,  803 => 469,  797 => 466,  792 => 463,  790 => 462,  787 => 461,  782 => 458,  767 => 449,  763 => 448,  756 => 444,  751 => 442,  745 => 438,  741 => 437,  735 => 434,  730 => 431,  728 => 430,  715 => 419,  712 => 418,  709 => 416,  703 => 412,  697 => 410,  695 => 409,  691 => 408,  687 => 407,  683 => 406,  676 => 402,  672 => 401,  668 => 400,  661 => 396,  657 => 395,  653 => 394,  638 => 381,  635 => 380,  627 => 374,  623 => 373,  619 => 372,  612 => 368,  608 => 367,  604 => 366,  597 => 362,  593 => 361,  589 => 360,  582 => 356,  578 => 355,  574 => 354,  559 => 341,  551 => 335,  547 => 334,  543 => 333,  536 => 329,  532 => 328,  528 => 327,  521 => 323,  517 => 322,  513 => 321,  506 => 317,  502 => 316,  498 => 315,  491 => 311,  487 => 310,  483 => 309,  476 => 305,  472 => 304,  468 => 303,  461 => 299,  457 => 298,  453 => 297,  446 => 293,  442 => 292,  438 => 291,  423 => 278,  418 => 275,  415 => 274,  409 => 273,  397 => 267,  389 => 266,  384 => 265,  379 => 264,  375 => 263,  366 => 257,  362 => 256,  355 => 252,  344 => 244,  339 => 241,  329 => 240,  88 => 6,  78 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Audit {{ audit.reference }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Réutiliser les styles de new.html.twig */
    .form-card { background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-sm); }
    .form-section { padding: 32px; border-bottom: 1px solid var(--border-color); }
    .form-section:last-child { border-bottom: none; }
    .section-header { margin-bottom: 24px; display: flex; align-items: flex-start; gap: 16px; }
    .section-icon { width: 44px; height: 44px; background: var(--bg-tertiary); color: var(--tchad-blue); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .section-title h3 { font-size: 1.15rem; font-weight: 600; margin-bottom: 4px; }
    .section-title p { font-size: 0.85rem; color: var(--text-muted); }
    .form-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
    .full-width { grid-column: span 2; }
    .form-label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 8px; }
    .form-input, .form-select, .form-textarea { width: 100%; padding: 12px 16px; border: 1px solid var(--border-color); border-radius: 10px; background: var(--bg-primary); color: var(--text-primary); font-family: inherit; font-size: 0.95rem; transition: border-color 0.2s; }
    .form-input:focus, .form-select:focus, .form-textarea:focus { outline: none; border-color: var(--tchad-blue); box-shadow: 0 0 0 3px rgba(0, 38, 100, 0.1); }
    .form-help { font-size: 0.8rem; color: var(--text-muted); margin-top: 6px; }
    .form-error { color: var(--danger); font-size: 0.85rem; margin-top: 6px; }
    
    /* Fichiers existants */
    .existing-files {
        margin-top: 16px;
        padding: 16px;
        background: var(--bg-secondary);
        border-radius: 10px;
        border: 1px solid var(--border-color);
    }
    
    .existing-files-header {
        font-weight: 600;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--text-primary);
    }
    
    .files-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 12px;
    }
    
    .file-item {
        position: relative;
        padding: 12px;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        transition: all 0.2s;
    }
    
    .file-item:hover {
        border-color: var(--tchad-blue);
        box-shadow: var(--shadow-sm);
    }
    
    .file-item-icon {
        width: 40px;
        height: 40px;
        background: var(--bg-tertiary);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
        color: var(--tchad-blue);
    }
    
    .file-item-name {
        font-size: 0.8rem;
        color: var(--text-primary);
        margin-bottom: 8px;
        word-break: break-word;
    }
    
    .file-item-actions {
        display: flex;
        gap: 6px;
    }
    
    .file-item-btn {
        flex: 1;
        padding: 6px;
        border: none;
        border-radius: 6px;
        font-size: 0.75rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        transition: all 0.2s;
    }
    
    .file-item-btn.view {
        background: var(--tchad-blue);
        color: white;
    }
    
    .file-item-btn.view:hover {
        background: #003a8c;
    }
    
    .file-item-btn.delete {
        background: var(--danger);
        color: white;
    }
    
    .file-item-btn.delete:hover {
        background: #dc2626;
    }
    
    .photo-item {
        position: relative;
    }
    
    .photo-item img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 8px;
    }
    
    .file-upload-container {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        padding: 24px;
        background: var(--bg-primary);
        transition: all 0.2s;
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
    
    .action-bar {
        background: var(--bg-tertiary);
        padding: 24px 32px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        border-top: 1px solid var(--border-color);
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
        transition: all 0.2s;
        border: none;
        text-decoration: none;
    }
    
    .btn-secondary {
        background: white;
        color: var(--text-primary);
        border: 1px solid var(--border-color);
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
    
    .status-badge.planifie { background: rgba(245, 158, 11, 0.1); color: #d97706; }
    .status-badge.en_cours { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
    .status-badge.termine { background: rgba(16, 185, 129, 0.1); color: #059669; }
    
    @media (max-width: 768px) {
        .form-grid { grid-template-columns: 1fr; }
        .full-width { grid-column: span 1; }
        .files-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"{{ path('app_audit_show', {'id': audit.id}) }}\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i>
                Retour à l'audit
            </a>
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"edit\"></i>
                </span>
                Modifier l'Audit {{ audit.reference }}
            </h2>
            <p>
                Statut actuel : 
                <span class=\"status-badge {{ audit.statut }}\">
                    {{ audit.statutLabel }}
                </span>
            </p>
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

    {{ form_start(form, {'attr': {'class': 'form-card'}}) }}

        {# Section 1: Identification #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Identification de l'Audit</h3>
                    <p>Informations de base</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.projet) }}
                    {{ form_widget(form.projet, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.projet) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.type) }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.type) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.titre) }}
                    {{ form_widget(form.titre, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.titre) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateAudit) }}
                    {{ form_widget(form.dateAudit, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateAudit) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.auditeur) }}
                    {{ form_widget(form.auditeur, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.auditeur) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.organisme) }}
                    {{ form_widget(form.organisme, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.organisme) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateDebut) }}
                    {{ form_widget(form.dateDebut, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateDebut) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateFin) }}
                    {{ form_widget(form.dateFin, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateFin) }}
                </div>
            </div>
        </div>

        {# Section 2: Contenu #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-check\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Contenu et Résultats</h3>
                    <p>Objectifs, résultats et recommandations</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    {{ form_label(form.objectifs) }}
                    {{ form_widget(form.objectifs, {'attr': {'class': 'form-textarea', 'rows': 3}}) }}
                    {{ form_errors(form.objectifs) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.resultat) }}
                    {{ form_widget(form.resultat, {'attr': {'class': 'form-textarea', 'rows': 4}}) }}
                    {{ form_errors(form.resultat) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.recommandations) }}
                    {{ form_widget(form.recommandations, {'attr': {'class': 'form-textarea', 'rows': 4}}) }}
                    {{ form_errors(form.recommandations) }}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.observations) }}
                    {{ form_widget(form.observations, {'attr': {'class': 'form-textarea', 'rows': 3}}) }}
                    {{ form_errors(form.observations) }}
                </div>
            </div>
        </div>

        {# Section 3: Évaluation (si admin) #}
        {% if form.statut is defined %}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"star\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Évaluation et Statut</h3>
                    <p>Note, niveau et statut de l'audit</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.statut) }}
                    {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.statut) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.niveau) }}
                    {{ form_widget(form.niveau, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.niveau) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.score) }}
                    {{ form_widget(form.score, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.score) }}
                    {% if form.score.vars.help is defined %}
                        <div class=\"form-help\">{{ form.score.vars.help }}</div>
                    {% endif %}
                </div>
            </div>
        </div>
        {% endif %}

        {# Section 4: Documents existants #}
        {% if audit.nombreDocuments > 0 or audit.nombrePhotos > 0 %}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"folder\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Fichiers Existants</h3>
                    <p>Gérer les documents et photos déjà enregistrés</p>
                </div>
            </div>

            {% if audit.nombreDocuments > 0 %}
            <div class=\"existing-files\">
                <div class=\"existing-files-header\">
                    <i data-lucide=\"file-text\"></i>
                    Documents ({{ audit.nombreDocuments }})
                </div>
                <div class=\"files-grid\">
                    {% for i, document in audit.documents %}
                    <div class=\"file-item\">
                        <div class=\"file-item-icon\">
                            <i data-lucide=\"file\"></i>
                        </div>
                        <div class=\"file-item-name\">{{ document }}</div>
                        <div class=\"file-item-actions\">
                            <a href=\"{{ asset('uploads/audits/documents/' ~ document) }}\" target=\"_blank\" class=\"file-item-btn view\">
                                <i data-lucide=\"eye\" style=\"width: 14px; height: 14px;\"></i>
                                Voir
                            </a>
                            <form method=\"POST\" action=\"{{ path('app_audit_delete_document', {'id': audit.id, 'index': i}) }}\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-doc' ~ audit.id) }}\">
                                <button type=\"submit\" class=\"file-item-btn delete\" onclick=\"return confirm('Supprimer ce document ?')\">
                                    <i data-lucide=\"trash-2\" style=\"width: 14px; height: 14px;\"></i>
                                    Suppr.
                                </button>
                            </form>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            {% endif %}

            {% if audit.nombrePhotos > 0 %}
            <div class=\"existing-files\" style=\"margin-top: 20px;\">
                <div class=\"existing-files-header\">
                    <i data-lucide=\"image\"></i>
                    Photos ({{ audit.nombrePhotos }})
                </div>
                <div class=\"files-grid\">
                    {% for i, photo in audit.photos %}
                    <div class=\"file-item photo-item\">
                        <img src=\"{{ asset('uploads/audits/photos/' ~ photo) }}\" alt=\"Photo {{ i + 1 }}\">
                        <div class=\"file-item-actions\">
                            <a href=\"{{ asset('uploads/audits/photos/' ~ photo) }}\" target=\"_blank\" class=\"file-item-btn view\">
                                <i data-lucide=\"maximize-2\" style=\"width: 14px; height: 14px;\"></i>
                                Ouvrir
                            </a>
                            <form method=\"POST\" action=\"{{ path('app_audit_delete_photo', {'id': audit.id, 'index': i}) }}\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-photo' ~ audit.id) }}\">
                                <button type=\"submit\" class=\"file-item-btn delete\" onclick=\"return confirm('Supprimer cette photo ?')\">
                                    <i data-lucide=\"trash-2\" style=\"width: 14px; height: 14px;\"></i>
                                    Suppr.
                                </button>
                            </form>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            {% endif %}
        </div>
        {% endif %}

        {# Section 5: Ajouter de nouveaux fichiers #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"upload\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Ajouter de Nouveaux Fichiers</h3>
                    <p>Compléter avec de nouveaux documents et photos</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\">
                                <i data-lucide=\"file-plus\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Nouveaux Documents</h4>
                                <p>Ajouter d'autres documents justificatifs</p>
                            </div>
                        </div>
                        {{ form_widget(form.documentsFiles, {'attr': {'class': 'form-input'}}) }}
                        {{ form_errors(form.documentsFiles) }}
                        {% if form.documentsFiles.vars.help is defined %}
                            <div class=\"form-help\">{{ form.documentsFiles.vars.help }}</div>
                        {% endif %}
                    </div>
                </div>

                <div class=\"form-group full-width\">
                    <div class=\"file-upload-container\">
                        <div class=\"file-upload-header\">
                            <div class=\"file-upload-icon\" style=\"background: var(--tchad-gold); color: var(--tchad-blue);\">
                                <i data-lucide=\"camera\"></i>
                            </div>
                            <div class=\"file-upload-info\">
                                <h4>Nouvelles Photos</h4>
                                <p>Ajouter d'autres photos</p>
                            </div>
                        </div>
                        {{ form_widget(form.photosFiles, {'attr': {'class': 'form-input'}}) }}
                        {{ form_errors(form.photosFiles) }}
                        {% if form.photosFiles.vars.help is defined %}
                            <div class=\"form-help\">{{ form.photosFiles.vars.help }}</div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {# Action Bar #}
        <div class=\"action-bar\">
            <div class=\"action-info\">
                <i data-lucide=\"info\"></i>
                Dernière modification : {{ audit.updatedAt|date('d/m/Y à H:i') }}
            </div>
            <div class=\"action-buttons\">
                <a href=\"{{ path('app_audit_show', {'id': audit.id}) }}\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i data-lucide=\"save\"></i>
                    Enregistrer les modifications
                </button>
            </div>
        </div>

        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>

<script>
lucide.createIcons();
</script>
{% endblock %}
", "audit/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\audit\\edit.html.twig");
    }
}
