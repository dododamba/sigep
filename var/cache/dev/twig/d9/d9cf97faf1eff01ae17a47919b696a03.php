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

/* financement/new.html.twig */
class __TwigTemplate_164adadf8c93582c87c4e0d354eed1c6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "financement/new.html.twig"));

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

        yield "Nouveau Financement - SIGEP Tchad";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .stepper {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .stepper-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .stepper-item:not(:last-child)::after {
            content: '';
            width: 80px;
            height: 2px;
            background: var(--border-color);
            margin: 0 16px;
        }
        
        .stepper-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--bg-tertiary);
            border: 2px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--text-muted);
        }
        
        .stepper-item.active .stepper-number {
            background: var(--gold-gradient);
            border-color: var(--tchad-gold);
            color: var(--tchad-blue);
        }
        
        .form-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            margin-bottom: 24px;
            overflow: hidden;
        }
        
        .form-card-header {
            padding: 24px 28px;
            background: var(--bg-tertiary);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 14px;
        }
        
        .form-card-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
        
        .form-grid.three-cols {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .form-group.full-width {
            grid-column: span 2;
        }
        
        .form-group.span-3 {
            grid-column: span 3;
        }
        
        .funder-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }
        
        .funder-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            padding: 20px 16px;
            border: 2px solid var(--border-color);
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .funder-option:hover {
            border-color: var(--tchad-gold);
        }
        
        .funder-option.selected {
            border-color: var(--tchad-gold);
            background: rgba(254, 203, 0, 0.08);
        }
        
        .type-options {
            display: flex;
            gap: 14px;
        }
        
        .type-option {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px 20px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 500;
        }
        
        .type-option.selected {
            border-color: var(--tchad-gold);
            background: rgba(254, 203, 0, 0.08);
            color: var(--tchad-blue);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        yield "<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"landmark\"></i>
                </span>
                Nouveau Financement
            </h2>
            <p>Enregistrez une nouvelle source de financement ou convention</p>
        </div>
    </div>
    
    <div style=\"max-width: 1200px; margin: 0 auto;\">
        <!-- Stepper -->
        <div class=\"stepper\">
            <div class=\"stepper-item active\">
                <div class=\"stepper-number\">1</div>
                <span class=\"stepper-label\">Source & Convention</span>
            </div>
            <div class=\"stepper-item\">
                <div class=\"stepper-number\">2</div>
                <span class=\"stepper-label\">Montants</span>
            </div>
            <div class=\"stepper-item\">
                <div class=\"stepper-number\">3</div>
                <span class=\"stepper-label\">Projets</span>
            </div>
        </div>

        ";
        // line 178
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
        
        <!-- Section 1: Source de financement -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                    <i data-lucide=\"landmark\" style=\"color: var(--tchad-blue);\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Source de financement</h3>
                    <p>Sélectionnez le bailleur de fonds</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"funder-grid\">
                    ";
        // line 193
        $context["bailleurs"] = [["id" => "national", "name" => "Budget National", "short" => "BN", "class" => "national"], ["id" => "bm", "name" => "Banque Mondiale", "short" => "BM", "class" => "bm"], ["id" => "bad", "name" => "BAD", "short" => "BAD", "class" => "bad"], ["id" => "afd", "name" => "AFD", "short" => "AFD", "class" => "afd"], ["id" => "ue", "name" => "Union Européenne", "short" => "UE", "class" => "ue"], ["id" => "fida", "name" => "FIDA", "short" => "FIDA", "class" => "fida"], ["id" => "oms", "name" => "OMS", "short" => "OMS", "class" => "oms"], ["id" => "pnud", "name" => "PNUD", "short" => "PNUD", "class" => "pnud"]];
        // line 203
        yield "                    
                    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bailleurs"]) || array_key_exists("bailleurs", $context) ? $context["bailleurs"] : (function () { throw new RuntimeError('Variable "bailleurs" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bailleur"]) {
            // line 205
            yield "                    <label class=\"funder-option\" data-bailleur=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "id", [], "any", false, false, false, 205), "html", null, true);
            yield "\">
                        ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "bailleur", [], "any", false, false, false, 206), 'widget', ["attr" => ["style" => "display:none"]]);
            yield "
                        <div class=\"funder-icon ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "class", [], "any", false, false, false, 207), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "short", [], "any", false, false, false, 207), "html", null, true);
            yield "</div>
                        <span class=\"funder-label\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "name", [], "any", false, false, false, 208), "html", null, true);
            yield "</span>
                    </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bailleur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "                </div>
                
                <div style=\"margin-top: 32px;\">
                    ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "type", [], "any", false, false, false, 214), 'row');
        yield "
                </div>
            </div>
        </div>

        <!-- Section 2: Convention -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #7c3aed, #a855f7);\">
                    <i data-lucide=\"file-signature\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Convention</h3>
                    <p>Informations sur l'accord de financement</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid\">
                    ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "numeroConvention", [], "any", false, false, false, 232), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "dateSignature", [], "any", false, false, false, 233), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 234), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "dateEcheance", [], "any", false, false, false, 235), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Section 3: Montants -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #059669, #10b981);\">
                    <i data-lucide=\"coins\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Montants du financement</h3>
                    <p>Définissez les montants engagés et les conditions</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid three-cols\">
                    ";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "montantEngage", [], "any", false, false, false, 253), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 254), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 255), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                </div>
                
                <div style=\"margin-top: 32px;\">
                    <div class=\"form-grid three-cols\">
                        ";
        // line 260
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "tauxInteret", [], "any", false, false, false, 260), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                        ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 261), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                        ";
        // line 262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 262), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"form-group full-width\" style=\"margin-top: 24px;\">
                    ";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "conditions", [], "any", false, false, false, 267), 'row', ["attr" => ["class" => "form-textarea", "rows" => "4"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Section 4: Projets -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                    <i data-lucide=\"briefcase\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Projets financés</h3>
                    <p>Associez ce financement à un ou plusieurs projets</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                ";
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "projets", [], "any", false, false, false, 284), 'row', ["attr" => ["class" => "form-select", "size" => "8"]]);
        yield "
            </div>
        </div>

        <!-- Section 5: Statut et Notes -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #0284c7, #38bdf8);\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Statut et notes</h3>
                    <p>Informations complémentaires</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid\">
                    ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "statut", [], "any", false, false, false, 301), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>
                <div class=\"form-group\" style=\"margin-top: 20px;\">
                    ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "notes", [], "any", false, false, false, 304), 'row', ["attr" => ["class" => "form-textarea", "rows" => "3"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class=\"form-actions\" style=\"display: flex; justify-content: space-between; padding: 24px 0; border-top: 1px solid var(--border-color); margin-top: 32px;\">
            <div class=\"form-actions-left\">
                <a href=\"";
        // line 312
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financement_index");
        yield "\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
            </div>
            <div class=\"form-actions-right\">
                <button type=\"submit\" class=\"btn btn-gold btn-lg\">
                    <i data-lucide=\"check\"></i>
                    Enregistrer le financement
                </button>
            </div>
        </div>

        ";
        // line 325
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 330
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 331
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Handle funder selection
        document.querySelectorAll('.funder-option').forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                document.querySelectorAll('.funder-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                
                // Add selected class to clicked option
                this.classList.add('selected');
                
                // Set the value of the hidden radio button
                const bailleurId = this.dataset.bailleur;
                document.querySelector(`input[value=\"\${bailleurId}\"]`).checked = true;
            });
        });
        
        // Set initial selected state if value exists
        const selectedBailleur = document.querySelector('input[name=\"financement[bailleur]\"]:checked');
        if (selectedBailleur) {
            const bailleurId = selectedBailleur.value;
            document.querySelector(`.funder-option[data-bailleur=\"\${bailleurId}\"]`)?.classList.add('selected');
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
        return "financement/new.html.twig";
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
        return array (  515 => 331,  505 => 330,  493 => 325,  477 => 312,  466 => 304,  460 => 301,  440 => 284,  420 => 267,  412 => 262,  408 => 261,  404 => 260,  396 => 255,  392 => 254,  388 => 253,  367 => 235,  363 => 234,  359 => 233,  355 => 232,  334 => 214,  329 => 211,  320 => 208,  314 => 207,  310 => 206,  305 => 205,  301 => 204,  298 => 203,  296 => 193,  278 => 178,  245 => 147,  235 => 146,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Financement - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .stepper {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .stepper-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .stepper-item:not(:last-child)::after {
            content: '';
            width: 80px;
            height: 2px;
            background: var(--border-color);
            margin: 0 16px;
        }
        
        .stepper-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--bg-tertiary);
            border: 2px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--text-muted);
        }
        
        .stepper-item.active .stepper-number {
            background: var(--gold-gradient);
            border-color: var(--tchad-gold);
            color: var(--tchad-blue);
        }
        
        .form-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            margin-bottom: 24px;
            overflow: hidden;
        }
        
        .form-card-header {
            padding: 24px 28px;
            background: var(--bg-tertiary);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 14px;
        }
        
        .form-card-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
        
        .form-grid.three-cols {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .form-group.full-width {
            grid-column: span 2;
        }
        
        .form-group.span-3 {
            grid-column: span 3;
        }
        
        .funder-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }
        
        .funder-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            padding: 20px 16px;
            border: 2px solid var(--border-color);
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .funder-option:hover {
            border-color: var(--tchad-gold);
        }
        
        .funder-option.selected {
            border-color: var(--tchad-gold);
            background: rgba(254, 203, 0, 0.08);
        }
        
        .type-options {
            display: flex;
            gap: 14px;
        }
        
        .type-option {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px 20px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 500;
        }
        
        .type-option.selected {
            border-color: var(--tchad-gold);
            background: rgba(254, 203, 0, 0.08);
            color: var(--tchad-blue);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"landmark\"></i>
                </span>
                Nouveau Financement
            </h2>
            <p>Enregistrez une nouvelle source de financement ou convention</p>
        </div>
    </div>
    
    <div style=\"max-width: 1200px; margin: 0 auto;\">
        <!-- Stepper -->
        <div class=\"stepper\">
            <div class=\"stepper-item active\">
                <div class=\"stepper-number\">1</div>
                <span class=\"stepper-label\">Source & Convention</span>
            </div>
            <div class=\"stepper-item\">
                <div class=\"stepper-number\">2</div>
                <span class=\"stepper-label\">Montants</span>
            </div>
            <div class=\"stepper-item\">
                <div class=\"stepper-number\">3</div>
                <span class=\"stepper-label\">Projets</span>
            </div>
        </div>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        
        <!-- Section 1: Source de financement -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                    <i data-lucide=\"landmark\" style=\"color: var(--tchad-blue);\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Source de financement</h3>
                    <p>Sélectionnez le bailleur de fonds</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"funder-grid\">
                    {% set bailleurs = [
                        {id: 'national', name: 'Budget National', short: 'BN', class: 'national'},
                        {id: 'bm', name: 'Banque Mondiale', short: 'BM', class: 'bm'},
                        {id: 'bad', name: 'BAD', short: 'BAD', class: 'bad'},
                        {id: 'afd', name: 'AFD', short: 'AFD', class: 'afd'},
                        {id: 'ue', name: 'Union Européenne', short: 'UE', class: 'ue'},
                        {id: 'fida', name: 'FIDA', short: 'FIDA', class: 'fida'},
                        {id: 'oms', name: 'OMS', short: 'OMS', class: 'oms'},
                        {id: 'pnud', name: 'PNUD', short: 'PNUD', class: 'pnud'}
                    ] %}
                    
                    {% for bailleur in bailleurs %}
                    <label class=\"funder-option\" data-bailleur=\"{{ bailleur.id }}\">
                        {{ form_widget(form.bailleur, {'attr': {'style': 'display:none'}}) }}
                        <div class=\"funder-icon {{ bailleur.class }}\">{{ bailleur.short }}</div>
                        <span class=\"funder-label\">{{ bailleur.name }}</span>
                    </label>
                    {% endfor %}
                </div>
                
                <div style=\"margin-top: 32px;\">
                    {{ form_row(form.type) }}
                </div>
            </div>
        </div>

        <!-- Section 2: Convention -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #7c3aed, #a855f7);\">
                    <i data-lucide=\"file-signature\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Convention</h3>
                    <p>Informations sur l'accord de financement</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid\">
                    {{ form_row(form.numeroConvention, {'attr': {'class': 'form-input'}}) }}
                    {{ form_row(form.dateSignature, {'attr': {'class': 'form-input'}}) }}
                    {{ form_row(form.dateEntreeVigueur, {'attr': {'class': 'form-input'}}) }}
                    {{ form_row(form.dateEcheance, {'attr': {'class': 'form-input'}}) }}
                </div>
            </div>
        </div>

        <!-- Section 3: Montants -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #059669, #10b981);\">
                    <i data-lucide=\"coins\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Montants du financement</h3>
                    <p>Définissez les montants engagés et les conditions</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid three-cols\">
                    {{ form_row(form.montantEngage, {'attr': {'class': 'form-input'}}) }}
                    {{ form_row(form.montantDecaisse, {'attr': {'class': 'form-input'}}) }}
                    {{ form_row(form.contrepartieNationale, {'attr': {'class': 'form-input'}}) }}
                </div>
                
                <div style=\"margin-top: 32px;\">
                    <div class=\"form-grid three-cols\">
                        {{ form_row(form.tauxInteret, {'attr': {'class': 'form-input'}}) }}
                        {{ form_row(form.dureeFinancement, {'attr': {'class': 'form-input'}}) }}
                        {{ form_row(form.differeRemboursement, {'attr': {'class': 'form-input'}}) }}
                    </div>
                </div>
                
                <div class=\"form-group full-width\" style=\"margin-top: 24px;\">
                    {{ form_row(form.conditions, {'attr': {'class': 'form-textarea', 'rows': '4'}}) }}
                </div>
            </div>
        </div>

        <!-- Section 4: Projets -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                    <i data-lucide=\"briefcase\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Projets financés</h3>
                    <p>Associez ce financement à un ou plusieurs projets</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                {{ form_row(form.projets, {'attr': {'class': 'form-select', 'size': '8'}}) }}
            </div>
        </div>

        <!-- Section 5: Statut et Notes -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #0284c7, #38bdf8);\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Statut et notes</h3>
                    <p>Informations complémentaires</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid\">
                    {{ form_row(form.statut, {'attr': {'class': 'form-select'}}) }}
                </div>
                <div class=\"form-group\" style=\"margin-top: 20px;\">
                    {{ form_row(form.notes, {'attr': {'class': 'form-textarea', 'rows': '3'}}) }}
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class=\"form-actions\" style=\"display: flex; justify-content: space-between; padding: 24px 0; border-top: 1px solid var(--border-color); margin-top: 32px;\">
            <div class=\"form-actions-left\">
                <a href=\"{{ path('app_financement_index') }}\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
            </div>
            <div class=\"form-actions-right\">
                <button type=\"submit\" class=\"btn btn-gold btn-lg\">
                    <i data-lucide=\"check\"></i>
                    Enregistrer le financement
                </button>
            </div>
        </div>

        {{ form_end(form) }}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Handle funder selection
        document.querySelectorAll('.funder-option').forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                document.querySelectorAll('.funder-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                
                // Add selected class to clicked option
                this.classList.add('selected');
                
                // Set the value of the hidden radio button
                const bailleurId = this.dataset.bailleur;
                document.querySelector(`input[value=\"\${bailleurId}\"]`).checked = true;
            });
        });
        
        // Set initial selected state if value exists
        const selectedBailleur = document.querySelector('input[name=\"financement[bailleur]\"]:checked');
        if (selectedBailleur) {
            const bailleurId = selectedBailleur.value;
            document.querySelector(`.funder-option[data-bailleur=\"\${bailleurId}\"]`)?.classList.add('selected');
        }
    </script>
{% endblock %}", "financement/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\financement\\new.html.twig");
    }
}
