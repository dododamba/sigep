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

        yield "Modifier le Financement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 3, $this->source); })()), "numeroConvention", [], "any", false, false, false, 3), "html", null, true);
        yield " - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"pencil\"></i>
                </span>
                Modifier le Financement
            </h2>
            <p>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 16, $this->source); })()), "numeroConvention", [], "any", false, false, false, 16), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 16, $this->source); })()), "bailleur", [], "any", false, false, false, 16)), "html", null, true);
        yield "</p>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                <i data-lucide=\"eye\"></i>
                Voir les détails
            </a>
        </div>
    </div>

    <div style=\"max-width: 1200px; margin: 0 auto;\">
        ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
        
        <!-- Section: Source de financement -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                    <i data-lucide=\"landmark\" style=\"color: var(--tchad-blue);\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Source de financement</h3>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "bailleur", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Section: Convention -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #7c3aed, #a855f7);\">
                    <i data-lucide=\"file-signature\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Convention</h3>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid\">
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "numeroConvention", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "dateSignature", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "dateEntreeVigueur", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "dateEcheance", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Section: Montants -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #059669, #10b981);\">
                    <i data-lucide=\"coins\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Montants du financement</h3>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid three-cols\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "montantEngage", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "contrepartieNationale", [], "any", false, false, false, 82), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                </div>
                
                <div style=\"margin-top: 24px;\">
                    <div class=\"form-grid three-cols\">
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "tauxInteret", [], "any", false, false, false, 87), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "dureeFinancement", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "differeRemboursement", [], "any", false, false, false, 89), 'row', ["attr" => ["class" => "form-input"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"form-group\" style=\"margin-top: 24px;\">
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "conditions", [], "any", false, false, false, 94), 'row', ["attr" => ["class" => "form-textarea", "rows" => "4"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Section: Projets -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                    <i data-lucide=\"briefcase\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Projets financés</h3>
                    <p>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 107, $this->source); })()), "projets", [], "any", false, false, false, 107)), "html", null, true);
        yield " projet(s) actuellement associé(s)</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "projets", [], "any", false, false, false, 111), 'row', ["attr" => ["class" => "form-select", "size" => "8"]]);
        yield "
            </div>
        </div>

        <!-- Section: Notes -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #0284c7, #38bdf8);\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Notes et observations</h3>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "notes", [], "any", false, false, false, 126), 'row', ["attr" => ["class" => "form-textarea", "rows" => "3"]]);
        yield "
            </div>
        </div>

        <!-- Résumé des modifications -->
        <div class=\"summary-card\" style=\"background: var(--bg-tertiary); border-radius: 16px; padding: 24px; margin-bottom: 24px;\">
            <h4 style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 16px;\">
                <i data-lucide=\"info\"></i>
                Résumé du financement
            </h4>
            <div class=\"summary-grid\" style=\"display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;\">
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Montant engagé</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 140, $this->source); })()), "montantEngage", [], "any", false, false, false, 140) / 1000000000), 1, ",", " "), "html", null, true);
        yield " Mds
                    </div>
                </div>
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Décaissé</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 146, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 146) / 1000000000), 1, ",", " "), "html", null, true);
        yield " Mds
                    </div>
                </div>
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Taux d'exécution</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 152, $this->source); })()), "tauxDecaissement", [], "any", false, false, false, 152), "html", null, true);
        yield "%
                    </div>
                </div>
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Projets</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 158, $this->source); })()), "projets", [], "any", false, false, false, 158)), "html", null, true);
        yield "
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class=\"form-actions\" style=\"display: flex; justify-content: space-between; padding: 24px 0; border-top: 1px solid var(--border-color); margin-top: 32px;\">
            <div class=\"form-actions-left\">
                <a href=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
            </div>
            <div class=\"form-actions-right\" style=\"display: flex; gap: 12px;\">
                ";
        // line 173
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 174
            yield "                    <button type=\"button\" class=\"btn btn-danger\" onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce financement ?')) { document.getElementById('delete-form').submit(); }\">
                        <i data-lucide=\"trash-2\"></i>
                        Supprimer
                    </button>
                ";
        }
        // line 179
        yield "                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                    <i data-lucide=\"save\"></i>
                    Enregistrer les modifications
                </button>
            </div>
        </div>

        ";
        // line 186
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), 'form_end');
        yield "
        
        ";
        // line 188
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "            <form id=\"delete-form\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189)]), "html", null, true);
            yield "\" style=\"display: none;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["financement"]) || array_key_exists("financement", $context) ? $context["financement"] : (function () { throw new RuntimeError('Variable "financement" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190))), "html", null, true);
            yield "\">
            </form>
        ";
        }
        // line 193
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Initialize Lucide icons
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
        return array (  390 => 198,  380 => 197,  370 => 193,  364 => 190,  359 => 189,  357 => 188,  352 => 186,  343 => 179,  336 => 174,  334 => 173,  325 => 167,  313 => 158,  304 => 152,  295 => 146,  286 => 140,  269 => 126,  251 => 111,  244 => 107,  228 => 94,  220 => 89,  216 => 88,  212 => 87,  204 => 82,  200 => 81,  196 => 80,  176 => 63,  172 => 62,  168 => 61,  164 => 60,  144 => 43,  140 => 42,  136 => 41,  119 => 27,  108 => 19,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Financement - {{ financement.numeroConvention }} - SIGEP Tchad{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"pencil\"></i>
                </span>
                Modifier le Financement
            </h2>
            <p>{{ financement.numeroConvention }} - {{ financement.bailleur|upper }}</p>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"{{ path('app_financement_show', {'id': financement.id}) }}\" class=\"btn btn-secondary\">
                <i data-lucide=\"eye\"></i>
                Voir les détails
            </a>
        </div>
    </div>

    <div style=\"max-width: 1200px; margin: 0 auto;\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        
        <!-- Section: Source de financement -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--gold-gradient);\">
                    <i data-lucide=\"landmark\" style=\"color: var(--tchad-blue);\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Source de financement</h3>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid\">
                    {{ form_row(form.bailleur, {'attr': {'class': 'form-select'}}) }}
                    {{ form_row(form.type, {'attr': {'class': 'form-select'}}) }}
                    {{ form_row(form.statut, {'attr': {'class': 'form-select'}}) }}
                </div>
            </div>
        </div>

        <!-- Section: Convention -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #7c3aed, #a855f7);\">
                    <i data-lucide=\"file-signature\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Convention</h3>
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

        <!-- Section: Montants -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #059669, #10b981);\">
                    <i data-lucide=\"coins\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Montants du financement</h3>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                <div class=\"form-grid three-cols\">
                    {{ form_row(form.montantEngage, {'attr': {'class': 'form-input'}}) }}
                    {{ form_row(form.montantDecaisse, {'attr': {'class': 'form-input'}}) }}
                    {{ form_row(form.contrepartieNationale, {'attr': {'class': 'form-input'}}) }}
                </div>
                
                <div style=\"margin-top: 24px;\">
                    <div class=\"form-grid three-cols\">
                        {{ form_row(form.tauxInteret, {'attr': {'class': 'form-input'}}) }}
                        {{ form_row(form.dureeFinancement, {'attr': {'class': 'form-input'}}) }}
                        {{ form_row(form.differeRemboursement, {'attr': {'class': 'form-input'}}) }}
                    </div>
                </div>
                
                <div class=\"form-group\" style=\"margin-top: 24px;\">
                    {{ form_row(form.conditions, {'attr': {'class': 'form-textarea', 'rows': '4'}}) }}
                </div>
            </div>
        </div>

        <!-- Section: Projets -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: var(--accent-gradient);\">
                    <i data-lucide=\"briefcase\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Projets financés</h3>
                    <p>{{ financement.projets|length }} projet(s) actuellement associé(s)</p>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                {{ form_row(form.projets, {'attr': {'class': 'form-select', 'size': '8'}}) }}
            </div>
        </div>

        <!-- Section: Notes -->
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"form-card-icon\" style=\"background: linear-gradient(135deg, #0284c7, #38bdf8);\">
                    <i data-lucide=\"file-text\"></i>
                </div>
                <div class=\"form-card-title\">
                    <h3>Notes et observations</h3>
                </div>
            </div>
            <div class=\"form-card-body\" style=\"padding: 28px;\">
                {{ form_row(form.notes, {'attr': {'class': 'form-textarea', 'rows': '3'}}) }}
            </div>
        </div>

        <!-- Résumé des modifications -->
        <div class=\"summary-card\" style=\"background: var(--bg-tertiary); border-radius: 16px; padding: 24px; margin-bottom: 24px;\">
            <h4 style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 16px;\">
                <i data-lucide=\"info\"></i>
                Résumé du financement
            </h4>
            <div class=\"summary-grid\" style=\"display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;\">
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Montant engagé</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        {{ (financement.montantEngage / 1000000000)|number_format(1, ',', ' ') }} Mds
                    </div>
                </div>
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Décaissé</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        {{ (financement.montantDecaisse / 1000000000)|number_format(1, ',', ' ') }} Mds
                    </div>
                </div>
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Taux d'exécution</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        {{ financement.tauxDecaissement }}%
                    </div>
                </div>
                <div class=\"summary-item\" style=\"background: var(--bg-secondary); border-radius: 12px; padding: 16px; text-align: center;\">
                    <div style=\"font-size: 0.8rem; color: var(--text-muted); margin-bottom: 6px;\">Projets</div>
                    <div style=\"font-size: 1.25rem; font-weight: 700; color: var(--text-primary);\">
                        {{ financement.projets|length }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class=\"form-actions\" style=\"display: flex; justify-content: space-between; padding: 24px 0; border-top: 1px solid var(--border-color); margin-top: 32px;\">
            <div class=\"form-actions-left\">
                <a href=\"{{ path('app_financement_show', {'id': financement.id}) }}\" class=\"btn btn-secondary\">
                    <i data-lucide=\"x\"></i>
                    Annuler
                </a>
            </div>
            <div class=\"form-actions-right\" style=\"display: flex; gap: 12px;\">
                {% if is_granted('ROLE_ADMIN') %}
                    <button type=\"button\" class=\"btn btn-danger\" onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce financement ?')) { document.getElementById('delete-form').submit(); }\">
                        <i data-lucide=\"trash-2\"></i>
                        Supprimer
                    </button>
                {% endif %}
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                    <i data-lucide=\"save\"></i>
                    Enregistrer les modifications
                </button>
            </div>
        </div>

        {{ form_end(form) }}
        
        {% if is_granted('ROLE_ADMIN') %}
            <form id=\"delete-form\" method=\"post\" action=\"{{ path('app_financement_delete', {'id': financement.id}) }}\" style=\"display: none;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ financement.id) }}\">
            </form>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
{% endblock %}", "financement/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\financement\\edit.html.twig");
    }
}
