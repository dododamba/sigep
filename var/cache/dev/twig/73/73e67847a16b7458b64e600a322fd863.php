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

/* financement/edit.html.twig */
class __TwigTemplate_6cf069242ea32798a9a5f1b97c73531a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "financement/edit.html.twig"));

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

        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 3, $this->source); })()), "numeroConvention", [], "any", false, false, false, 3), "html", null, true);
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
        <div class=\"form-title-icon edit\">
            <i data-lucide=\"edit\"></i>
        </div>
        <div>
            <h1>Modifier le financement</h1>
            <p>
                <span class=\"convention-badge\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 28, $this->source); })()), "numeroConvention", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
                <span class=\"bailleur-badge ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 29, $this->source); })()), "bailleur", [], "any", false, false, false, 29), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 29, $this->source); })()), "bailleurShortName", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
            </p>
        </div>
    </div>

    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "financement-form", "id" => "financementForm"]]);
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
            <div class=\"form-group\">
                <label class=\"form-label required\">Bailleur de fonds</label>
                <div class=\"bailleur-grid\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bailleurs"]) || array_key_exists("bailleurs", $context) ? $context["bailleurs"] : (function () { throw new RuntimeError('Variable "bailleurs" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 49
            yield "                    <div class=\"bailleur-option ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 49, $this->source); })()), "bailleur", [], "any", false, false, false, 49) == $context["value"])) ? ("selected") : (""));
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" onclick=\"selectBailleur('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "')\">
                        <div class=\"bailleur-option-icon ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
                            ";
            // line 51
            if (($context["value"] == "national")) {
                yield "BN";
            } elseif (($context["value"] == "bm")) {
                yield "BM";
            } elseif (($context["value"] == "bad")) {
                yield "BAD";
            } elseif (($context["value"] == "afd")) {
                yield "AFD";
            } elseif (($context["value"] == "ue")) {
                yield "UE";
            } elseif (($context["value"] == "fida")) {
                yield "FIDA";
            } elseif (($context["value"] == "oms")) {
                yield "OMS";
            } elseif (($context["value"] == "pnud")) {
                yield "PNUD";
            } elseif (($context["value"] == "bid")) {
                yield "BID";
            } elseif (($context["value"] == "chine")) {
                yield "CN";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["value"], 0, 2)), "html", null, true);
            }
            // line 52
            yield "                        </div>
                        <span class=\"bailleur-option-label\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                </div>
                <div style=\"display: none;\">";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "bailleur", [], "any", false, false, false, 57), 'widget');
        yield "</div>
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "bailleur", [], "any", false, false, false, 58), 'errors');
        yield "
            </div>
            
            <div class=\"form-grid cols-3\">
                <div class=\"form-group\">
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "type", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64), 'widget');
        yield "
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "numeroConvention", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "numeroConvention", [], "any", false, false, false, 69), 'widget');
        yield "
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "numeroConvention", [], "any", false, false, false, 70), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "statut", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74), 'widget');
        yield "
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75), 'errors');
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
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "dateSignature", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "dateSignature", [], "any", false, false, false, 93), 'widget');
        yield "
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "dateSignature", [], "any", false, false, false, 94), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 98), 'widget');
        yield "
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 99), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "dateEcheance", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "dateEcheance", [], "any", false, false, false, 103), 'widget');
        yield "
                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "dateEcheance", [], "any", false, false, false, 104), 'errors');
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
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "montantEngage", [], "any", false, false, false, 121), 'label', ["label_attr" => ["class" => "form-label required"]]);
        yield "
                    <div class=\"input-with-suffix\">
                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "montantEngage", [], "any", false, false, false, 123), 'widget');
        yield "
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "montantEngage", [], "any", false, false, false, 126), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-with-suffix\">
                        ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 131), 'widget');
        yield "
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 134), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 137), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"input-with-suffix\">
                        ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 139), 'widget');
        yield "
                        <span class=\"input-suffix\">Mds FCFA</span>
                    </div>
                    ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 142), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Progress Preview -->
            <div class=\"progress-preview\">
                <div class=\"progress-preview-header\">
                    <span>Taux de décaissement</span>
                    <span id=\"tauxPreview\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 150, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 150), "html", null, true);
        yield "%</span>
                </div>
                <div class=\"progress-bar-large\">
                    <div class=\"progress-fill-large ";
        // line 153
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 153, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 153) >= 70)) {
            yield "gold";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 153, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 153) >= 50)) {
            yield "green";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 153, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 153) >= 25)) {
            yield "blue";
        } else {
            yield "red";
        }
        yield "\" id=\"progressFill\" style=\"width: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 153, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 153), "html", null, true);
        yield "%\"></div>
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
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "tauxInteret", [], "any", false, false, false, 170), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "tauxInteret", [], "any", false, false, false, 171), 'widget');
        yield "
                    ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "tauxInteret", [], "any", false, false, false, 172), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 175), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 176), 'widget');
        yield "
                    ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 177), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 180), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 181), 'widget');
        yield "
                    ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 182), 'errors');
        yield "
                </div>
            </div>
            <div class=\"form-group full-width\">
                ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "conditions", [], "any", false, false, false, 186), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "conditions", [], "any", false, false, false, 187), 'widget');
        yield "
                ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "conditions", [], "any", false, false, false, 188), 'errors');
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
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "projets", [], "any", false, false, false, 203), 'widget');
        yield "
            </div>
            ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "projets", [], "any", false, false, false, 205), 'errors');
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
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "notes", [], "any", false, false, false, 219), 'widget');
        yield "
                ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "notes", [], "any", false, false, false, 220), 'errors');
        yield "
            </div>
        </div>
    </div>

    <!-- Section 7: Métadonnées -->
    <div class=\"form-card metadata-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gray\">
                <i data-lucide=\"info\"></i>
            </div>
            <h2>Métadonnées</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"metadata-grid\">
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">ID</span>
                    <span class=\"metadata-value code\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237), "html", null, true);
        yield "</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Slug</span>
                    <span class=\"metadata-value code\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 241, $this->source); })()), "slug", [], "any", false, false, false, 241), "html", null, true);
        yield "</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Créé le</span>
                    <span class=\"metadata-value\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 245, $this->source); })()), "createdAt", [], "any", false, false, false, 245), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Modifié le</span>
                    <span class=\"metadata-value\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 249, $this->source); })()), "updatedAt", [], "any", false, false, false, 249), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class=\"form-actions\">
        <div class=\"form-actions-left\">
            <a href=\"";
        // line 258
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financements");
        yield "\" class=\"btn btn-secondary\">
                <i data-lucide=\"x\"></i>
                Annuler
            </a>
        </div>
        <div class=\"form-actions-right\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                <i data-lucide=\"save\"></i>
                Mettre à jour
            </button>
        </div>
    </div>

    ";
        // line 271
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 275
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 276
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        lucide.createIcons();
        
        function selectBailleur(value) {
            document.querySelectorAll('.bailleur-option').forEach(el => {
                el.classList.remove('selected');
            });
            document.querySelector('.bailleur-option[data-value=\"' + value + '\"]').classList.add('selected');
            document.getElementById('financement_bailleur').value = value;
        }
        
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
        return "financement/edit.html.twig";
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
        return array (  624 => 276,  614 => 275,  603 => 271,  587 => 258,  575 => 249,  568 => 245,  561 => 241,  554 => 237,  534 => 220,  530 => 219,  513 => 205,  508 => 203,  490 => 188,  486 => 187,  482 => 186,  475 => 182,  471 => 181,  467 => 180,  461 => 177,  457 => 176,  453 => 175,  447 => 172,  443 => 171,  439 => 170,  409 => 153,  403 => 150,  392 => 142,  386 => 139,  381 => 137,  375 => 134,  369 => 131,  364 => 129,  358 => 126,  352 => 123,  347 => 121,  327 => 104,  323 => 103,  319 => 102,  313 => 99,  309 => 98,  305 => 97,  299 => 94,  295 => 93,  291 => 92,  271 => 75,  267 => 74,  263 => 73,  257 => 70,  253 => 69,  249 => 68,  243 => 65,  239 => 64,  235 => 63,  227 => 58,  223 => 57,  220 => 56,  211 => 53,  208 => 52,  184 => 51,  180 => 50,  171 => 49,  167 => 48,  150 => 34,  140 => 29,  136 => 28,  119 => 14,  114 => 11,  104 => 10,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier {{ financement.numeroConvention }} - SIGEP Tchad{% endblock %}

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
        <div class=\"form-title-icon edit\">
            <i data-lucide=\"edit\"></i>
        </div>
        <div>
            <h1>Modifier le financement</h1>
            <p>
                <span class=\"convention-badge\">{{ financement.numeroConvention }}</span>
                <span class=\"bailleur-badge {{ financement.bailleur }}\">{{ financement.bailleurShortName }}</span>
            </p>
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
            <div class=\"form-group\">
                <label class=\"form-label required\">Bailleur de fonds</label>
                <div class=\"bailleur-grid\">
                    {% for label, value in bailleurs %}
                    <div class=\"bailleur-option {{ financement.bailleur == value ? 'selected' : '' }}\" data-value=\"{{ value }}\" onclick=\"selectBailleur('{{ value }}')\">
                        <div class=\"bailleur-option-icon {{ value }}\">
                            {% if value == 'national' %}BN{% elseif value == 'bm' %}BM{% elseif value == 'bad' %}BAD{% elseif value == 'afd' %}AFD{% elseif value == 'ue' %}UE{% elseif value == 'fida' %}FIDA{% elseif value == 'oms' %}OMS{% elseif value == 'pnud' %}PNUD{% elseif value == 'bid' %}BID{% elseif value == 'chine' %}CN{% else %}{{ value[:2]|upper }}{% endif %}
                        </div>
                        <span class=\"bailleur-option-label\">{{ label }}</span>
                    </div>
                    {% endfor %}
                </div>
                <div style=\"display: none;\">{{ form_widget(form.bailleur) }}</div>
                {{ form_errors(form.bailleur) }}
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
                    <span id=\"tauxPreview\">{{ financement.tauxDecaissement }}%</span>
                </div>
                <div class=\"progress-bar-large\">
                    <div class=\"progress-fill-large {% if financement.tauxDecaissement >= 70 %}gold{% elseif financement.tauxDecaissement >= 50 %}green{% elseif financement.tauxDecaissement >= 25 %}blue{% else %}red{% endif %}\" id=\"progressFill\" style=\"width: {{ financement.tauxDecaissement }}%\"></div>
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

    <!-- Section 7: Métadonnées -->
    <div class=\"form-card metadata-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gray\">
                <i data-lucide=\"info\"></i>
            </div>
            <h2>Métadonnées</h2>
        </div>
        <div class=\"form-card-body\">
            <div class=\"metadata-grid\">
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">ID</span>
                    <span class=\"metadata-value code\">{{ financement.id }}</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Slug</span>
                    <span class=\"metadata-value code\">{{ financement.slug }}</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Créé le</span>
                    <span class=\"metadata-value\">{{ financement.createdAt|date('d/m/Y à H:i') }}</span>
                </div>
                <div class=\"metadata-item\">
                    <span class=\"metadata-label\">Modifié le</span>
                    <span class=\"metadata-value\">{{ financement.updatedAt|date('d/m/Y à H:i') }}</span>
                </div>
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
                <i data-lucide=\"save\"></i>
                Mettre à jour
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
        
        function selectBailleur(value) {
            document.querySelectorAll('.bailleur-option').forEach(el => {
                el.classList.remove('selected');
            });
            document.querySelector('.bailleur-option[data-value=\"' + value + '\"]').classList.add('selected');
            document.getElementById('financement_bailleur').value = value;
        }
        
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
    </script>
{% endblock %}
", "financement/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\financement\\edit.html.twig");
    }
}
