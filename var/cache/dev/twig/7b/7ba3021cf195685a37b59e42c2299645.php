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
class __TwigTemplate_19f1bfaff40cde51a2965762fed73d6a extends Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/financement-form.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"back-link\">
            <i data-lucide=\"arrow-left\"></i>
            Retour aux financements
        </a>
    </div>

    <!-- Form Title -->
    <div class=\"form-title\">
        <div class=\"form-title-icon\">
            <i data-lucide=\"landmark\"></i>
        </div>
        <div>
            <h1>Nouveau Financement</h1>
            <p>Enregistrer une nouvelle convention de financement</p>
        </div>
    </div>

    ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["class" => "financement-form", "id" => "financementForm"]]);
        yield "
    
    <!-- Section 1: Informations du bailleur -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon blue\">
                <i data-lucide=\"building-2\"></i>
            </div>
            <h2>Informations du bailleur</h2>
        </div>
        <div class=\"form-card-body\">
     <div class=\"form-grid\">
    <div class=\"form-group\">
        <label class=\"form-label required\">Bailleur de fonds</label>

        <div class=\"bailleur-grid\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bailleurs"]) || array_key_exists("bailleurs", $context) ? $context["bailleurs"] : (function () { throw new RuntimeError('Variable "bailleurs" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bailleur"]) {
            // line 48
            yield "                ";
            $context["code"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "acronym", [], "any", false, false, false, 48));
            // line 49
            yield "                <div class=\"bailleur-option\"
                     data-value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "\"
                     onclick=\"selectBailleur('";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "id", [], "any", false, false, false, 51), "html", null, true);
            yield "')\">

                    <div class=\"bailleur-option-icon ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "\">
                        ";
            // line 54
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "acronym", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "acronym", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "acronym", [], "any", false, false, false, 54), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "name", [], "any", false, false, false, 54), 0, 2)), "html", null, true)));
            yield "
                    </div>

                    <span class=\"bailleur-option-label\">
                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bailleur"], "name", [], "any", false, false, false, 58), "html", null, true);
            yield "
                    </span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bailleur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </div>

        ";
        // line 65
        yield "        <div style=\"display: none;\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "bailleur", [], "any", false, false, false, 66), 'widget');
        yield "
        </div>

        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "bailleur", [], "any", false, false, false, 69), 'errors');
        yield "
    </div>
</div>
            
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "type", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "type", [], "any", false, false, false, 76), 'widget');
        yield "
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "type", [], "any", false, false, false, 77), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "numeroConvention", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "numeroConvention", [], "any", false, false, false, 81), 'widget');
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "numeroConvention", [], "any", false, false, false, 82), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "statut", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "statut", [], "any", false, false, false, 86), 'widget');
        yield "
                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "statut", [], "any", false, false, false, 87), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2: Dates -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon green\">
                <i data-lucide=\"calendar\"></i>
            </div>
            <h2>Calendrier</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "dateSignature", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "dateSignature", [], "any", false, false, false, 105), 'widget');
        yield "
                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "dateSignature", [], "any", false, false, false, 106), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 109), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 110), 'widget');
        yield "
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 111), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "dateEcheance", [], "any", false, false, false, 114), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "dateEcheance", [], "any", false, false, false, 115), 'widget');
        yield "
                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "dateEcheance", [], "any", false, false, false, 116), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Montants -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gold\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <h2>Montants</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "montantEngage", [], "any", false, false, false, 133), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    <div class=\"input-with-suffix\">
                        ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "montantEngage", [], "any", false, false, false, 135), 'widget');
        yield "
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "montantEngage", [], "any", false, false, false, 138), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 141), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-with-suffix\">
                        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 143), 'widget');
        yield "
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 146), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 149), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-with-suffix\">
                        ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 151), 'widget');
        yield "
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 154), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Progress Preview -->
            <div class=\"progress-preview\">
                <div class=\"progress-preview-header\">
                    <span>Taux de décaissement</span>
                    <span id=\"tauxPreview\">0%</span>
                </div>
                <div class=\"progress-bar-large\">
                    <div class=\"progress-fill-large\" id=\"progressFill\" style=\"width: 0%\"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Conditions -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon purple\">
                <i data-lucide=\"file-text\"></i>
            </div>
            <h2>Conditions de financement</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "tauxInteret", [], "any", false, false, false, 182), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "tauxInteret", [], "any", false, false, false, 183), 'widget');
        yield "
                    ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "tauxInteret", [], "any", false, false, false, 184), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 187), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 188), 'widget');
        yield "
                    ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 189), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 192), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 193), 'widget');
        yield "
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 194), 'errors');
        yield "
                </div>
            </div>
            <div class=\"form-group full-width\">
                ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "conditions", [], "any", false, false, false, 198), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "conditions", [], "any", false, false, false, 199), 'widget');
        yield "
                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "conditions", [], "any", false, false, false, 200), 'errors');
        yield "
            </div>
        </div>
    </div>

    <!-- Section 5: Projets associés -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon orange\">
                <i data-lucide=\"folder-kanban\"></i>
            </div>
            <h2>Projets financés</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"projects-selection\">
                ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "projets", [], "any", false, false, false, 215), 'widget');
        yield "
            </div>
            ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "projets", [], "any", false, false, false, 217), 'errors');
        yield "
        </div>
    </div>

    <!-- Section 6: Notes -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gray\">
                <i data-lucide=\"sticky-note\"></i>
            </div>
            <h2>Notes</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-group full-width\">
                ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "notes", [], "any", false, false, false, 231), 'widget');
        yield "
                ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "notes", [], "any", false, false, false, 232), 'errors');
        yield "
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class=\"form-actions\">
        <div class=\"form-actions-left\">
            <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"btn btn-secondary\">
                <i data-lucide=\"x\"></i>
                Annuler
            </a>
        </div>
        <div class=\"form-actions-right\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                <i data-lucide=\"check\"></i>
                Enregistrer le financement
            </button>
        </div>
    </div>

    ";
        // line 253
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 257
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 258
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        lucide.createIcons();
        
        // Sélection du bailleur
        function selectBailleur(value) {
            document.querySelectorAll('.bailleur-option').forEach(el => {
                el.classList.remove('selected');
            });
            document.querySelector('.bailleur-option[data-value=\"' + value + '\"]').classList.add('selected');
            document.getElementById('financement_bailleur').value = value;
            
            // Générer un nouveau numéro de convention
            fetch('/financements/api/generate-numero?bailleur=' + value)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('financement_numeroConvention').value = data.numero;
                });
        }
        
        // Preview du taux de décaissement
        function updateProgress() {
            const engage = parseFloat(document.getElementById('financement_montantEngage').value) || 0;
            const decaisse = parseFloat(document.getElementById('financement_montantDecaisse').value) || 0;
            
            let taux = 0;
            if (engage > 0) {
                taux = Math.round((decaisse / engage) * 100);
            }
            
            document.getElementById('tauxPreview').textContent = taux + '%';
            const fill = document.getElementById('progressFill');
            fill.style.width = taux + '%';
            
            fill.className = 'progress-fill-large';
            if (taux >= 70) fill.classList.add('gold');
            else if (taux >= 50) fill.classList.add('green');
            else if (taux >= 25) fill.classList.add('blue');
            else fill.classList.add('red');
        }
        
        document.getElementById('financement_montantEngage').addEventListener('input', updateProgress);
        document.getElementById('financement_montantDecaisse').addEventListener('input', updateProgress);
        
        // Init
        const currentBailleur = document.getElementById('financement_bailleur').value;
        if (currentBailleur) {
            document.querySelector('.bailleur-option[data-value=\"' + currentBailleur + '\"]')?.classList.add('selected');
        }
        updateProgress();
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
        return array (  549 => 258,  539 => 257,  528 => 253,  512 => 240,  501 => 232,  497 => 231,  480 => 217,  475 => 215,  457 => 200,  453 => 199,  449 => 198,  442 => 194,  438 => 193,  434 => 192,  428 => 189,  424 => 188,  420 => 187,  414 => 184,  410 => 183,  406 => 182,  375 => 154,  369 => 151,  364 => 149,  358 => 146,  352 => 143,  347 => 141,  341 => 138,  335 => 135,  330 => 133,  310 => 116,  306 => 115,  302 => 114,  296 => 111,  292 => 110,  288 => 109,  282 => 106,  278 => 105,  274 => 104,  254 => 87,  250 => 86,  246 => 85,  240 => 82,  236 => 81,  232 => 80,  226 => 77,  222 => 76,  218 => 75,  209 => 69,  203 => 66,  200 => 65,  196 => 62,  186 => 58,  179 => 54,  175 => 53,  170 => 51,  166 => 50,  163 => 49,  160 => 48,  156 => 47,  137 => 31,  117 => 14,  112 => 11,  102 => 10,  92 => 7,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Financement - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/financement-form.css') }}\">
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <a href=\"{{ path('app_financements') }}\" class=\"back-link\">
            <i data-lucide=\"arrow-left\"></i>
            Retour aux financements
        </a>
    </div>

    <!-- Form Title -->
    <div class=\"form-title\">
        <div class=\"form-title-icon\">
            <i data-lucide=\"landmark\"></i>
        </div>
        <div>
            <h1>Nouveau Financement</h1>
            <p>Enregistrer une nouvelle convention de financement</p>
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'financement-form', 'id': 'financementForm'}}) }}
    
    <!-- Section 1: Informations du bailleur -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon blue\">
                <i data-lucide=\"building-2\"></i>
            </div>
            <h2>Informations du bailleur</h2>
        </div>
        <div class=\"form-card-body\">
     <div class=\"form-grid\">
    <div class=\"form-group\">
        <label class=\"form-label required\">Bailleur de fonds</label>

        <div class=\"bailleur-grid\">
            {% for bailleur in bailleurs %}
                {% set code = bailleur.acronym|lower %}
                <div class=\"bailleur-option\"
                     data-value=\"{{ bailleur.id }}\"
                     onclick=\"selectBailleur('{{ bailleur.id }}')\">

                    <div class=\"bailleur-option-icon {{ code }}\">
                        {{ bailleur.acronym ?? bailleur.name[:2]|upper }}
                    </div>

                    <span class=\"bailleur-option-label\">
                        {{ bailleur.name }}
                    </span>
                </div>
            {% endfor %}
        </div>

        {# Champ Symfony caché #}
        <div style=\"display: none;\">
            {{ form_widget(form.bailleur) }}
        </div>

        {{ form_errors(form.bailleur) }}
    </div>
</div>
            
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    {{ form_label(form.type, null, {'label_attr': {'class': 'form-label required'}}) }}
                    {{ form_widget(form.type) }}
                    {{ form_errors(form.type) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.numeroConvention, null, {'label_attr': {'class': 'form-label required'}}) }}
                    {{ form_widget(form.numeroConvention) }}
                    {{ form_errors(form.numeroConvention) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.statut, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.statut) }}
                    {{ form_errors(form.statut) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2: Dates -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon green\">
                <i data-lucide=\"calendar\"></i>
            </div>
            <h2>Calendrier</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    {{ form_label(form.dateSignature, null, {'label_attr': {'class': 'form-label required'}}) }}
                    {{ form_widget(form.dateSignature) }}
                    {{ form_errors(form.dateSignature) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.dateEntreeVigueur, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateEntreeVigueur) }}
                    {{ form_errors(form.dateEntreeVigueur) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.dateEcheance, null, {'label_attr': {'class': 'form-label required'}}) }}
                    {{ form_widget(form.dateEcheance) }}
                    {{ form_errors(form.dateEcheance) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Montants -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gold\">
                <i data-lucide=\"banknote\"></i>
            </div>
            <h2>Montants</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    {{ form_label(form.montantEngage, null, {'label_attr': {'class': 'form-label required'}}) }}
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.montantEngage) }}
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    {{ form_errors(form.montantEngage) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.montantDecaisse, null, {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.montantDecaisse) }}
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    {{ form_errors(form.montantDecaisse) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.contrepartieNationale, null, {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.contrepartieNationale) }}
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    {{ form_errors(form.contrepartieNationale) }}
                </div>
            </div>
            
            <!-- Progress Preview -->
            <div class=\"progress-preview\">
                <div class=\"progress-preview-header\">
                    <span>Taux de décaissement</span>
                    <span id=\"tauxPreview\">0%</span>
                </div>
                <div class=\"progress-bar-large\">
                    <div class=\"progress-fill-large\" id=\"progressFill\" style=\"width: 0%\"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Conditions -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon purple\">
                <i data-lucide=\"file-text\"></i>
            </div>
            <h2>Conditions de financement</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    {{ form_label(form.tauxInteret, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.tauxInteret) }}
                    {{ form_errors(form.tauxInteret) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.dureeFinancement, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dureeFinancement) }}
                    {{ form_errors(form.dureeFinancement) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.differeRemboursement, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.differeRemboursement) }}
                    {{ form_errors(form.differeRemboursement) }}
                </div>
            </div>
            <div class=\"form-group full-width\">
                {{ form_label(form.conditions, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.conditions) }}
                {{ form_errors(form.conditions) }}
            </div>
        </div>
    </div>

    <!-- Section 5: Projets associés -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon orange\">
                <i data-lucide=\"folder-kanban\"></i>
            </div>
            <h2>Projets financés</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"projects-selection\">
                {{ form_widget(form.projets) }}
            </div>
            {{ form_errors(form.projets) }}
        </div>
    </div>

    <!-- Section 6: Notes -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gray\">
                <i data-lucide=\"sticky-note\"></i>
            </div>
            <h2>Notes</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-group full-width\">
                {{ form_widget(form.notes) }}
                {{ form_errors(form.notes) }}
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class=\"form-actions\">
        <div class=\"form-actions-left\">
            <a href=\"{{ path('app_financements') }}\" class=\"btn btn-secondary\">
                <i data-lucide=\"x\"></i>
                Annuler
            </a>
        </div>
        <div class=\"form-actions-right\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                <i data-lucide=\"check\"></i>
                Enregistrer le financement
            </button>
        </div>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        lucide.createIcons();
        
        // Sélection du bailleur
        function selectBailleur(value) {
            document.querySelectorAll('.bailleur-option').forEach(el => {
                el.classList.remove('selected');
            });
            document.querySelector('.bailleur-option[data-value=\"' + value + '\"]').classList.add('selected');
            document.getElementById('financement_bailleur').value = value;
            
            // Générer un nouveau numéro de convention
            fetch('/financements/api/generate-numero?bailleur=' + value)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('financement_numeroConvention').value = data.numero;
                });
        }
        
        // Preview du taux de décaissement
        function updateProgress() {
            const engage = parseFloat(document.getElementById('financement_montantEngage').value) || 0;
            const decaisse = parseFloat(document.getElementById('financement_montantDecaisse').value) || 0;
            
            let taux = 0;
            if (engage > 0) {
                taux = Math.round((decaisse / engage) * 100);
            }
            
            document.getElementById('tauxPreview').textContent = taux + '%';
            const fill = document.getElementById('progressFill');
            fill.style.width = taux + '%';
            
            fill.className = 'progress-fill-large';
            if (taux >= 70) fill.classList.add('gold');
            else if (taux >= 50) fill.classList.add('green');
            else if (taux >= 25) fill.classList.add('blue');
            else fill.classList.add('red');
        }
        
        document.getElementById('financement_montantEngage').addEventListener('input', updateProgress);
        document.getElementById('financement_montantDecaisse').addEventListener('input', updateProgress);
        
        // Init
        const currentBailleur = document.getElementById('financement_bailleur').value;
        if (currentBailleur) {
            document.querySelector('.bailleur-option[data-value=\"' + currentBailleur + '\"]')?.classList.add('selected');
        }
        updateProgress();
    </script>
{% endblock %}
", "financement/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\financement\\new.html.twig");
    }
}
