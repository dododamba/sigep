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

/* decaissement/new.html.twig */
class __TwigTemplate_a90ec9eedd47667f0839a7df22d2eba2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "decaissement/new.html.twig"));

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

        yield "Nouveau Décaissement - SIGEP Tchad";
        
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

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 213
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index");
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour aux décaissements
        </a>
        <div class=\"page-title-row\">
            <div class=\"page-title\">
                <h2>Nouveau Décaissement</h2>
                <p>Veuillez remplir les informations ci-dessous pour initier un décaissement.</p>
            </div>
        </div>
    </div>

    ";
        // line 227
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), 'form_start', ["attr" => ["class" => "form-card", "novalidate" => "novalidate"]]);
        yield "
    
        ";
        // line 230
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
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "project", [], "any", false, false, false, 243), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "project", [], "any", false, false, false, 244), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "project", [], "any", false, false, false, 245), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "financement", [], "any", false, false, false, 249), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "financement", [], "any", false, false, false, 250), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "financement", [], "any", false, false, false, 251), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 252
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "financement", [], "any", false, true, false, 252), "vars", [], "any", false, true, false, 252), "help", [], "any", true, true, false, 252)) {
            // line 253
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "financement", [], "any", false, false, false, 253), "vars", [], "any", false, false, false, 253), "help", [], "any", false, false, false, 253), "html", null, true);
            yield "</div>
                    ";
        }
        // line 255
        yield "                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Référence interne (Auto)</label>
                    <input type=\"text\" class=\"form-input\" value=\"DEC-";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "-XXXX\" readonly style=\"background-color: var(--bg-tertiary); color: var(--text-muted);\">
                </div>

                <div class=\"form-group\">
                    ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "dateDemande", [], "any", false, false, false, 263), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "dateDemande", [], "any", false, false, false, 264), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "dateDemande", [], "any", false, false, false, 265), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 271
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
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "beneficiaire", [], "any", false, false, false, 284), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 285
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "beneficiaire", [], "any", false, false, false, 285), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "beneficiaire", [], "any", false, false, false, 286), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 287
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "beneficiaire", [], "any", false, true, false, 287), "vars", [], "any", false, true, false, 287), "help", [], "any", true, true, false, 287)) {
            // line 288
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "beneficiaire", [], "any", false, false, false, 288), "vars", [], "any", false, false, false, 288), "help", [], "any", false, false, false, 288), "html", null, true);
            yield "</div>
                    ";
        }
        // line 290
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 293
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "modePaiement", [], "any", false, false, false, 293), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "modePaiement", [], "any", false, false, false, 294), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 295
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "modePaiement", [], "any", false, false, false, 295), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 299
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "montant", [], "any", false, false, false, 299), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-group\">
                        ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "montant", [], "any", false, false, false, 301), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        <span class=\"input-suffix\">";
        // line 302
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "devise", [], "any", false, false, false, 302), 'row', ["label" => false, "attr" => ["class" => "form-select", "style" => "position: absolute; right: 0; top: 0; width: auto; border: none; background: transparent; padding-right: 16px;"]]);
        yield "</span>
                    </div>
                    ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "montant", [], "any", false, false, false, 304), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 308), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 309
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 309), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 310
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "ligneBudgetaire", [], "any", false, false, false, 310), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "description", [], "any", false, false, false, 314), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 315
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "description", [], "any", false, false, false, 315), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 3]]);
        yield "
                    ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "description", [], "any", false, false, false, 316), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 322
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
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 334), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                <div class=\"file-upload-zone\" onclick=\"document.getElementById('";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 335), "vars", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "html", null, true);
        yield "').click()\">
                    <div class=\"upload-icon\">
                        <i data-lucide=\"upload-cloud\" style=\"width: 48px; height: 48px;\"></i>
                    </div>
                    <div class=\"upload-text\">Cliquez pour ajouter des fichiers</div>
                    <div class=\"upload-hint\">";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 340), "vars", [], "any", false, false, false, 340), "help", [], "any", false, false, false, 340), "html", null, true);
        yield "</div>
                </div>
                ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 342), 'widget', ["attr" => ["class" => "form-input", "style" => "display: none;"]]);
        yield "
                ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 343), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>

        ";
        // line 348
        yield "        <div class=\"action-bar\">
            <a href=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index");
        yield "\" class=\"btn btn-secondary\">
                Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i data-lucide=\"save\"></i>
                Enregistrer le décaissement
            </button>
        </div>

        ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "_token", [], "any", false, false, false, 358), 'row');
        yield "
    ";
        // line 359
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
</div>

<script>
    // Afficher le nom du fichier sélectionné
    document.getElementById('";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "pieceJustificative", [], "any", false, false, false, 364), "vars", [], "any", false, false, false, 364), "id", [], "any", false, false, false, 364), "html", null, true);
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
        return "decaissement/new.html.twig";
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
        return array (  587 => 364,  579 => 359,  575 => 358,  563 => 349,  560 => 348,  553 => 343,  549 => 342,  544 => 340,  536 => 335,  532 => 334,  518 => 322,  510 => 316,  506 => 315,  502 => 314,  495 => 310,  491 => 309,  487 => 308,  480 => 304,  475 => 302,  471 => 301,  466 => 299,  459 => 295,  455 => 294,  451 => 293,  446 => 290,  440 => 288,  438 => 287,  434 => 286,  430 => 285,  426 => 284,  411 => 271,  403 => 265,  399 => 264,  395 => 263,  388 => 259,  382 => 255,  376 => 253,  374 => 252,  370 => 251,  366 => 250,  362 => 249,  355 => 245,  351 => 244,  347 => 243,  332 => 230,  327 => 227,  312 => 215,  308 => 213,  298 => 212,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Décaissement - SIGEP Tchad{% endblock %}

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
        <a href=\"{{ path('app_decaissement_index') }}\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour aux décaissements
        </a>
        <div class=\"page-title-row\">
            <div class=\"page-title\">
                <h2>Nouveau Décaissement</h2>
                <p>Veuillez remplir les informations ci-dessous pour initier un décaissement.</p>
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
                    {{ form_label(form.project, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.project, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.project, {'attr': {'class': 'form-error'}}) }}
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
                    <label class=\"form-label\">Référence interne (Auto)</label>
                    <input type=\"text\" class=\"form-input\" value=\"DEC-{{ 'now'|date('Y') }}-XXXX\" readonly style=\"background-color: var(--bg-tertiary); color: var(--text-muted);\">
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
                {{ form_label(form.pieceJustificative, null, {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"file-upload-zone\" onclick=\"document.getElementById('{{ form.pieceJustificative.vars.id }}').click()\">
                    <div class=\"upload-icon\">
                        <i data-lucide=\"upload-cloud\" style=\"width: 48px; height: 48px;\"></i>
                    </div>
                    <div class=\"upload-text\">Cliquez pour ajouter des fichiers</div>
                    <div class=\"upload-hint\">{{ form.pieceJustificative.vars.help }}</div>
                </div>
                {{ form_widget(form.pieceJustificative, {'attr': {'class': 'form-input', 'style': 'display: none;'}}) }}
                {{ form_errors(form.pieceJustificative, {'attr': {'class': 'form-error'}}) }}
            </div>
        </div>

        {# Actions #}
        <div class=\"action-bar\">
            <a href=\"{{ path('app_decaissement_index') }}\" class=\"btn btn-secondary\">
                Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i data-lucide=\"save\"></i>
                Enregistrer le décaissement
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
", "decaissement/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\decaissement\\new.html.twig");
    }
}
