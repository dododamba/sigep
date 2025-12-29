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

/* convention/new.html.twig */
class __TwigTemplate_787c07fa3fff25f90ced82950608069a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "convention/new.html.twig"));

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

        yield "Nouvelle Convention - SIGEP Tchad";
        
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

    .input-group { position: relative; }

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

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 209
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_index");
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour aux conventions
        </a>
        <div class=\"page-title-row\">
            <div class=\"page-title\">
                <h2>Nouvelle Convention</h2>
                <p>Enregistrement d'un nouvel accord de financement.</p>
            </div>
        </div>
    </div>

    ";
        // line 223
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_start', ["attr" => ["class" => "form-card", "novalidate" => "novalidate"]]);
        yield "
    
        ";
        // line 226
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Identification de la Convention</h3>
                    <p>Informations générales sur l'accord et les partenaires.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "financement", [], "any", false, false, false, 239), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "financement", [], "any", false, false, false, 240), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "financement", [], "any", false, false, false, 241), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 242
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "financement", [], "any", false, true, false, 242), "vars", [], "any", false, true, false, 242), "help", [], "any", true, true, false, 242)) {
            // line 243
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "financement", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "help", [], "any", false, false, false, 243), "html", null, true);
            yield "</div>
                    ";
        }
        // line 245
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "code", [], "any", false, false, false, 248), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "code", [], "any", false, false, false, 249), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "code", [], "any", false, false, false, 250), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 251
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, true, false, 251), "vars", [], "any", false, true, false, 251), "help", [], "any", true, true, false, 251)) {
            // line 252
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "code", [], "any", false, false, false, 252), "vars", [], "any", false, false, false, 252), "help", [], "any", false, false, false, 252), "html", null, true);
            yield "</div>
                    ";
        }
        // line 254
        yield "                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "intitule", [], "any", false, false, false, 257), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "intitule", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "intitule", [], "any", false, false, false, 259), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "type", [], "any", false, false, false, 263), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "type", [], "any", false, false, false, 264), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "type", [], "any", false, false, false, 265), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 269
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "partenaire", [], "any", false, false, false, 269), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "partenaire", [], "any", false, false, false, 270), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 271
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "partenaire", [], "any", false, false, false, 271), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 272
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "partenaire", [], "any", false, true, false, 272), "vars", [], "any", false, true, false, 272), "help", [], "any", true, true, false, 272)) {
            // line 273
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "partenaire", [], "any", false, false, false, 273), "vars", [], "any", false, false, false, 273), "help", [], "any", false, false, false, 273), "html", null, true);
            yield "</div>
                    ";
        }
        // line 275
        yield "
                    ";
        // line 277
        yield "                    <datalist id=\"partenaires-list\">
                        <option value=\"Banque Mondiale\">
                        <option value=\"Banque Africaine de Développement (BAD)\">
                        <option value=\"Union Européenne\">
                        <option value=\"Agence Française de Développement (AFD)\">
                        <option value=\"Banque Islamique de Développement (BID)\">
                        <option value=\"Coopération Suisse\">
                        <option value=\"USAID\">
                        <option value=\"JICA (Japon)\">
                    </datalist>
                </div>

                <div class=\"form-group full-width\">
                    ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "agenceExecution", [], "any", false, false, false, 290), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "agenceExecution", [], "any", false, false, false, 291), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 292
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "agenceExecution", [], "any", false, false, false, 292), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 298
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"calendar-clock\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Cadre Financier et Calendrier</h3>
                    <p>Montants engagés et dates clés de la convention.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "montantGlobal", [], "any", false, false, false, 311), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-group\">
                        ";
        // line 313
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "montantGlobal", [], "any", false, false, false, 313), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        <span class=\"input-suffix\">";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "devise", [], "any", false, false, false, 314), 'row', ["label" => false, "attr" => ["class" => "form-select", "style" => "position: absolute; right: 0; top: 0; width: auto; border: none; background: transparent; padding-right: 16px;"]]);
        yield "</span>
                    </div>
                    ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "montantGlobal", [], "any", false, false, false, 316), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "contrepartieEtat", [], "any", false, false, false, 320), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-group\">
                        ";
        // line 322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "contrepartieEtat", [], "any", false, false, false, 322), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        <span class=\"input-suffix\">FCFA</span>
                    </div>
                    ";
        // line 325
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "contrepartieEtat", [], "any", false, false, false, 325), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 326
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contrepartieEtat", [], "any", false, true, false, 326), "vars", [], "any", false, true, false, 326), "help", [], "any", true, true, false, 326)) {
            // line 327
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "contrepartieEtat", [], "any", false, false, false, 327), "vars", [], "any", false, false, false, 327), "help", [], "any", false, false, false, 327), "html", null, true);
            yield "</div>
                    ";
        }
        // line 329
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), "dateSignature", [], "any", false, false, false, 332), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "dateSignature", [], "any", false, false, false, 333), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "dateSignature", [], "any", false, false, false, 334), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 338
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "dateMiseEnVigueur", [], "any", false, false, false, 338), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "dateMiseEnVigueur", [], "any", false, false, false, 339), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "dateMiseEnVigueur", [], "any", false, false, false, 340), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "dateLimiteDecaissement", [], "any", false, false, false, 344), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "dateLimiteDecaissement", [], "any", false, false, false, 345), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "dateLimiteDecaissement", [], "any", false, false, false, 346), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                    ";
        // line 347
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateLimiteDecaissement", [], "any", false, true, false, 347), "vars", [], "any", false, true, false, 347), "help", [], "any", true, true, false, 347)) {
            // line 348
            yield "                        <div class=\"form-help\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "dateLimiteDecaissement", [], "any", false, false, false, 348), "vars", [], "any", false, false, false, 348), "help", [], "any", false, false, false, 348), "html", null, true);
            yield "</div>
                    ";
        }
        // line 350
        yield "                </div>
            </div>
        </div>

        ";
        // line 355
        yield "        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"paperclip\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Description et Documents</h3>
                    <p>Détails supplémentaires et copie numérique.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "description", [], "any", false, false, false, 368), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "description", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-textarea", "rows" => 4]]);
        yield "
                    ";
        // line 370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "description", [], "any", false, false, false, 370), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
                
                <div class=\"form-group full-width\">
                    ";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "documentConvention", [], "any", false, false, false, 374), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"file-upload-zone\" onclick=\"document.getElementById('";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "documentConvention", [], "any", false, false, false, 375), "vars", [], "any", false, false, false, 375), "id", [], "any", false, false, false, 375), "html", null, true);
        yield "').click()\">
                        <div class=\"upload-icon\">
                            <i data-lucide=\"file-up\" style=\"width: 48px; height: 48px;\"></i>
                        </div>
                        <div class=\"upload-text\">Glissez le document ici ou cliquez pour parcourir</div>
                        <div class=\"upload-hint\">";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "documentConvention", [], "any", false, false, false, 380), "vars", [], "any", false, false, false, 380), "help", [], "any", false, false, false, 380), "html", null, true);
        yield "</div>
                    </div>
                    ";
        // line 382
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), "documentConvention", [], "any", false, false, false, 382), 'widget', ["attr" => ["class" => "form-input", "style" => "display: none;"]]);
        yield "
                    ";
        // line 383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "documentConvention", [], "any", false, false, false, 383), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 389
        yield "        <div class=\"action-bar\">
            <a href=\"";
        // line 390
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_index");
        yield "\" class=\"btn btn-secondary\">
                Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i data-lucide=\"save\"></i>
                Enregistrer la convention
            </button>
        </div>

        ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "_token", [], "any", false, false, false, 399), 'row');
        yield "
    ";
        // line 400
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
</div>

<script>
    // Afficher le nom du fichier sélectionné
    document.getElementById('";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "documentConvention", [], "any", false, false, false, 405), "vars", [], "any", false, false, false, 405), "id", [], "any", false, false, false, 405), "html", null, true);
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
        return "convention/new.html.twig";
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
        return array (  683 => 405,  675 => 400,  671 => 399,  659 => 390,  656 => 389,  648 => 383,  644 => 382,  639 => 380,  631 => 375,  627 => 374,  620 => 370,  616 => 369,  612 => 368,  597 => 355,  591 => 350,  585 => 348,  583 => 347,  579 => 346,  575 => 345,  571 => 344,  564 => 340,  560 => 339,  556 => 338,  549 => 334,  545 => 333,  541 => 332,  536 => 329,  530 => 327,  528 => 326,  524 => 325,  518 => 322,  513 => 320,  506 => 316,  501 => 314,  497 => 313,  492 => 311,  477 => 298,  469 => 292,  465 => 291,  461 => 290,  446 => 277,  443 => 275,  437 => 273,  435 => 272,  431 => 271,  427 => 270,  423 => 269,  416 => 265,  412 => 264,  408 => 263,  401 => 259,  397 => 258,  393 => 257,  388 => 254,  382 => 252,  380 => 251,  376 => 250,  372 => 249,  368 => 248,  363 => 245,  357 => 243,  355 => 242,  351 => 241,  347 => 240,  343 => 239,  328 => 226,  323 => 223,  308 => 211,  304 => 209,  294 => 208,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Convention - SIGEP Tchad{% endblock %}

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

    .input-group { position: relative; }

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
        <a href=\"{{ path('app_convention_index') }}\" class=\"back-link\">
            <i data-lucide=\"arrow-left\" style=\"width: 16px;\"></i>
            Retour aux conventions
        </a>
        <div class=\"page-title-row\">
            <div class=\"page-title\">
                <h2>Nouvelle Convention</h2>
                <p>Enregistrement d'un nouvel accord de financement.</p>
            </div>
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'form-card', 'novalidate': 'novalidate'}}) }}
    
        {# Section 1: Identification #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Identification de la Convention</h3>
                    <p>Informations générales sur l'accord et les partenaires.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.financement, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.financement, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.financement, {'attr': {'class': 'form-error'}}) }}
                    {% if form.financement.vars.help is defined %}
                        <div class=\"form-help\">{{ form.financement.vars.help }}</div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.code, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.code, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.code, {'attr': {'class': 'form-error'}}) }}
                    {% if form.code.vars.help is defined %}
                        <div class=\"form-help\">{{ form.code.vars.help }}</div>
                    {% endif %}
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.intitule, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.intitule, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.intitule, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.type, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                    {{ form_errors(form.type, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.partenaire, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.partenaire, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.partenaire, {'attr': {'class': 'form-error'}}) }}
                    {% if form.partenaire.vars.help is defined %}
                        <div class=\"form-help\">{{ form.partenaire.vars.help }}</div>
                    {% endif %}

                    {# Datalist pour autocomplétion #}
                    <datalist id=\"partenaires-list\">
                        <option value=\"Banque Mondiale\">
                        <option value=\"Banque Africaine de Développement (BAD)\">
                        <option value=\"Union Européenne\">
                        <option value=\"Agence Française de Développement (AFD)\">
                        <option value=\"Banque Islamique de Développement (BID)\">
                        <option value=\"Coopération Suisse\">
                        <option value=\"USAID\">
                        <option value=\"JICA (Japon)\">
                    </datalist>
                </div>

                <div class=\"form-group full-width\">
                    {{ form_label(form.agenceExecution, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.agenceExecution, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.agenceExecution, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
        </div>

        {# Section 2: Cadre Financier & Temporel #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"calendar-clock\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Cadre Financier et Calendrier</h3>
                    <p>Montants engagés et dates clés de la convention.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group\">
                    {{ form_label(form.montantGlobal, null, {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"input-group\">
                        {{ form_widget(form.montantGlobal, {'attr': {'class': 'form-input'}}) }}
                        <span class=\"input-suffix\">{{ form_row(form.devise, {'label': false, 'attr': {'class': 'form-select', 'style': 'position: absolute; right: 0; top: 0; width: auto; border: none; background: transparent; padding-right: 16px;'}}) }}</span>
                    </div>
                    {{ form_errors(form.montantGlobal, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.contrepartieEtat, null, {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"input-group\">
                        {{ form_widget(form.contrepartieEtat, {'attr': {'class': 'form-input'}}) }}
                        <span class=\"input-suffix\">FCFA</span>
                    </div>
                    {{ form_errors(form.contrepartieEtat, {'attr': {'class': 'form-error'}}) }}
                    {% if form.contrepartieEtat.vars.help is defined %}
                        <div class=\"form-help\">{{ form.contrepartieEtat.vars.help }}</div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateSignature, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateSignature, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateSignature, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateMiseEnVigueur, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateMiseEnVigueur, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateMiseEnVigueur, {'attr': {'class': 'form-error'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.dateLimiteDecaissement, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateLimiteDecaissement, {'attr': {'class': 'form-input'}}) }}
                    {{ form_errors(form.dateLimiteDecaissement, {'attr': {'class': 'form-error'}}) }}
                    {% if form.dateLimiteDecaissement.vars.help is defined %}
                        <div class=\"form-help\">{{ form.dateLimiteDecaissement.vars.help }}</div>
                    {% endif %}
                </div>
            </div>
        </div>

        {# Section 3: Description & Documents #}
        <div class=\"form-section\">
            <div class=\"section-header\">
                <div class=\"section-icon\">
                    <i data-lucide=\"paperclip\"></i>
                </div>
                <div class=\"section-title\">
                    <h3>Description et Documents</h3>
                    <p>Détails supplémentaires et copie numérique.</p>
                </div>
            </div>

            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    {{ form_label(form.description, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-textarea', 'rows': 4}}) }}
                    {{ form_errors(form.description, {'attr': {'class': 'form-error'}}) }}
                </div>
                
                <div class=\"form-group full-width\">
                    {{ form_label(form.documentConvention, null, {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"file-upload-zone\" onclick=\"document.getElementById('{{ form.documentConvention.vars.id }}').click()\">
                        <div class=\"upload-icon\">
                            <i data-lucide=\"file-up\" style=\"width: 48px; height: 48px;\"></i>
                        </div>
                        <div class=\"upload-text\">Glissez le document ici ou cliquez pour parcourir</div>
                        <div class=\"upload-hint\">{{ form.documentConvention.vars.help }}</div>
                    </div>
                    {{ form_widget(form.documentConvention, {'attr': {'class': 'form-input', 'style': 'display: none;'}}) }}
                    {{ form_errors(form.documentConvention, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
        </div>

        {# Actions #}
        <div class=\"action-bar\">
            <a href=\"{{ path('app_convention_index') }}\" class=\"btn btn-secondary\">
                Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i data-lucide=\"save\"></i>
                Enregistrer la convention
            </button>
        </div>

        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>

<script>
    // Afficher le nom du fichier sélectionné
    document.getElementById('{{ form.documentConvention.vars.id }}').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || 'Aucun fichier sélectionné';
        const uploadText = document.querySelector('.upload-text');
        if (uploadText) {
            uploadText.textContent = fileName;
        }
    });
</script>
{% endblock %}
", "convention/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\convention\\new.html.twig");
    }
}
