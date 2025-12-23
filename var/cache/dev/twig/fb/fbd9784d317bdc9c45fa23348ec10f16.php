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

/* partner/show.html.twig */
class __TwigTemplate_0499f602ea16833c15df6b9978f3bfc0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
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
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/partner.css"), "html", null, true);
        yield "\">
<style>
    .detail-card {
        background: var(--bg-primary);
        border-radius: 16px;
        border: 1px solid var(--border-color);
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    
    .detail-header {
        background: linear-gradient(135deg, var(--tchad-blue) 0%, #1e3a5f 100%);
        padding: 2rem;
        color: white;
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }
    
    .partner-logo-large {
        width: 100px;
        height: 100px;
        border-radius: 16px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    
    .partner-logo-large img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
    }
    
    .partner-logo-large .placeholder {
        font-size: 2.5rem;
        color: var(--tchad-blue);
    }
    
    .partner-title {
        flex: 1;
    }
    
    .partner-title h1 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }
    
    .partner-title .acronym {
        font-size: 1rem;
        opacity: 0.8;
        font-weight: 400;
    }
    
    .partner-title .type-tag {
        display: inline-block;
        background: rgba(255,255,255,0.2);
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        margin-top: 0.5rem;
    }
    
    .detail-body {
        padding: 1.5rem;
    }
    
    .info-section {
        margin-bottom: 2rem;
    }
    
    .info-section:last-child {
        margin-bottom: 0;
    }
    
    .section-title {
        font-size: 1rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .section-title i {
        color: var(--tchad-blue);
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .info-item {
        background: var(--bg-secondary);
        padding: 1rem;
        border-radius: 10px;
    }
    
    .info-item .label {
        font-size: 0.8rem;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.25rem;
    }
    
    .info-item .value {
        font-size: 1rem;
        color: var(--text-primary);
        font-weight: 500;
    }
    
    .info-item .value a {
        color: var(--tchad-blue);
        text-decoration: none;
    }
    
    .info-item .value a:hover {
        text-decoration: underline;
    }
    
    .description-box {
        background: var(--bg-secondary);
        padding: 1.25rem;
        border-radius: 10px;
        line-height: 1.7;
        color: var(--text-secondary);
    }
    
    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid var(--border-color);
    }
    
    .status-large {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        font-weight: 600;
        font-size: 0.9rem;
    }
    
    .status-large.actif {
        background: rgba(16, 185, 129, 0.15);
        color: var(--success);
    }
    
    .status-large.inactif {
        background: rgba(239, 68, 68, 0.15);
        color: var(--danger);
    }
    
    .status-large.suspendu {
        background: rgba(245, 158, 11, 0.15);
        color: #d97706;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 180
        yield "<header class=\"top-header\">
    <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"back-btn\">
        <i class=\"ri-arrow-left-line\" style=\"width:18px;\"></i>
        Retour à la liste
    </a>
    <h1 style=\"font-size:1.1rem; font-weight:600;\">Détails du Partenaire</h1>
    <div style=\"width:40px;\"></div>
</header>

<div class=\"content-area\">
    <div class=\"detail-card\">
        <!-- Header avec Logo et Nom -->
        <div class=\"detail-header\">
            <div class=\"partner-logo-large\">
                ";
        // line 194
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 194, $this->source); })()), "logo", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/partners/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 195, $this->source); })()), "logo", [], "any", false, false, false, 195))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 195, $this->source); })()), "name", [], "any", false, false, false, 195), "html", null, true);
            yield "\">
                ";
        } else {
            // line 197
            yield "                    <i class=\"ri-building-2-line placeholder\"></i>
                ";
        }
        // line 199
        yield "            </div>
            <div class=\"partner-title\">
                <h1>
                    ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 202, $this->source); })()), "name", [], "any", false, false, false, 202), "html", null, true);
        yield "
                    ";
        // line 203
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 203, $this->source); })()), "acronym", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "                        <span class=\"acronym\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 204, $this->source); })()), "acronym", [], "any", false, false, false, 204), "html", null, true);
            yield ")</span>
                    ";
        }
        // line 206
        yield "                </h1>
                <span class=\"type-tag\">
                    <i class=\"ri-price-tag-3-line\"></i>
                    ";
        // line 209
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "typePartner", [], "any", false, true, false, 209), "name", [], "any", true, true, false, 209) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 209, $this->source); })()), "typePartner", [], "any", false, false, false, 209), "name", [], "any", false, false, false, 209)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 209, $this->source); })()), "typePartner", [], "any", false, false, false, 209), "name", [], "any", false, false, false, 209), "html", null, true)) : ("Type non défini"));
        yield "
                </span>
            </div>
            <div class=\"status-large ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 212, $this->source); })()), "status", [], "any", false, false, false, 212)), "html", null, true);
        yield "\">
                ";
        // line 213
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 213, $this->source); })()), "status", [], "any", false, false, false, 213) == "Actif")) {
            // line 214
            yield "                    <i class=\"ri-checkbox-circle-line\"></i>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 215
(isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 215, $this->source); })()), "status", [], "any", false, false, false, 215) == "Inactif")) {
            // line 216
            yield "                    <i class=\"ri-close-circle-line\"></i>
                ";
        } else {
            // line 218
            yield "                    <i class=\"ri-pause-circle-line\"></i>
                ";
        }
        // line 220
        yield "                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 220, $this->source); })()), "status", [], "any", false, false, false, 220), "html", null, true);
        yield "
            </div>
        </div>
        
        <div class=\"detail-body\">
            <!-- Description -->
            ";
        // line 226
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 226, $this->source); })()), "description", [], "any", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 227
            yield "                <div class=\"info-section\">
                    <h3 class=\"section-title\">
                        <i class=\"ri-file-text-line\"></i>
                        Description / Mission
                    </h3>
                    <div class=\"description-box\">
                        ";
            // line 233
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 233, $this->source); })()), "description", [], "any", false, false, false, 233), "html", null, true));
            yield "
                    </div>
                </div>
            ";
        }
        // line 237
        yield "            
            <!-- Informations générales -->
            <div class=\"info-section\">
                <h3 class=\"section-title\">
                    <i class=\"ri-information-line\"></i>
                    Informations générales
                </h3>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <div class=\"label\">Nom complet</div>
                        <div class=\"value\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 247, $this->source); })()), "name", [], "any", false, false, false, 247), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Acronyme</div>
                        <div class=\"value\">";
        // line 251
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "acronym", [], "any", true, true, false, 251) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 251, $this->source); })()), "acronym", [], "any", false, false, false, 251)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 251, $this->source); })()), "acronym", [], "any", false, false, false, 251), "html", null, true)) : ("—"));
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Type de partenaire</div>
                        <div class=\"value\">";
        // line 255
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "typePartner", [], "any", false, true, false, 255), "name", [], "any", true, true, false, 255) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 255, $this->source); })()), "typePartner", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 255, $this->source); })()), "typePartner", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true)) : ("—"));
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Site Web</div>
                        <div class=\"value\">
                            ";
        // line 260
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 260, $this->source); })()), "siteWeb", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 261
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 261, $this->source); })()), "siteWeb", [], "any", false, false, false, 261), "html", null, true);
            yield "\" target=\"_blank\">
                                    ";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 262, $this->source); })()), "siteWeb", [], "any", false, false, false, 262), "html", null, true);
            yield " <i class=\"ri-external-link-line\"></i>
                                </a>
                            ";
        } else {
            // line 265
            yield "                                —
                            ";
        }
        // line 267
        yield "                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Point Focal -->
            <div class=\"info-section\">
                <h3 class=\"section-title\">
                    <i class=\"ri-user-line\"></i>
                    Point Focal
                </h3>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <div class=\"label\">Nom complet</div>
                        <div class=\"value\">";
        // line 281
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "contactName", [], "any", true, true, false, 281) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 281, $this->source); })()), "contactName", [], "any", false, false, false, 281)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 281, $this->source); })()), "contactName", [], "any", false, false, false, 281), "html", null, true)) : ("—"));
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Fonction</div>
                        <div class=\"value\">";
        // line 285
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "contactRole", [], "any", true, true, false, 285) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 285, $this->source); })()), "contactRole", [], "any", false, false, false, 285)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 285, $this->source); })()), "contactRole", [], "any", false, false, false, 285), "html", null, true)) : ("—"));
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Email</div>
                        <div class=\"value\">
                            ";
        // line 290
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 290, $this->source); })()), "contactEmail", [], "any", false, false, false, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 291
            yield "                                <a href=\"mailto:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 291, $this->source); })()), "contactEmail", [], "any", false, false, false, 291), "html", null, true);
            yield "\">
                                    <i class=\"ri-mail-line\"></i> ";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 292, $this->source); })()), "contactEmail", [], "any", false, false, false, 292), "html", null, true);
            yield "
                                </a>
                            ";
        } else {
            // line 295
            yield "                                —
                            ";
        }
        // line 297
        yield "                        </div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Téléphone</div>
                        <div class=\"value\">
                            ";
        // line 302
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 302, $this->source); })()), "contactPhone", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 303
            yield "                                <a href=\"tel:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 303, $this->source); })()), "contactPhone", [], "any", false, false, false, 303), "html", null, true);
            yield "\">
                                    <i class=\"ri-phone-line\"></i> ";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 304, $this->source); })()), "contactPhone", [], "any", false, false, false, 304), "html", null, true);
            yield "
                                </a>
                            ";
        } else {
            // line 307
            yield "                                —
                            ";
        }
        // line 309
        yield "                        </div>
                    </div>
                    <div class=\"info-item\" style=\"grid-column: 1 / -1;\">
                        <div class=\"label\">Adresse (Bureau Tchad)</div>
                        <div class=\"value\">
                            ";
        // line 314
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 314, $this->source); })()), "address", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 315
            yield "                                <i class=\"ri-map-pin-line\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 315, $this->source); })()), "address", [], "any", false, false, false, 315), "html", null, true);
            yield "
                            ";
        } else {
            // line 317
            yield "                                —
                            ";
        }
        // line 319
        yield "                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Métadonnées -->
            <div class=\"info-section\">
                <h3 class=\"section-title\">
                    <i class=\"ri-database-2-line\"></i>
                    Informations système
                </h3>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <div class=\"label\">Identifiant</div>
                        <div class=\"value\">#";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 333, $this->source); })()), "id", [], "any", false, false, false, 333), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Slug</div>
                        <div class=\"value\">";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 337, $this->source); })()), "slug", [], "any", false, false, false, 337), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Date de création</div>
                        <div class=\"value\">";
        // line 341
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 341, $this->source); })()), "createdAt", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 341, $this->source); })()), "createdAt", [], "any", false, false, false, 341), "d/m/Y à H:i"), "html", null, true)) : ("—"));
        yield "</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Dernière modification</div>
                        <div class=\"value\">";
        // line 345
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 345, $this->source); })()), "updatedAt", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 345, $this->source); })()), "updatedAt", [], "any", false, false, false, 345), "d/m/Y à H:i"), "html", null, true)) : ("Jamais modifié"));
        yield "</div>
                    </div>
                </div>
            </div>
            
            <!-- Actions -->
            <div class=\"action-buttons\">
                <a href=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 352, $this->source); })()), "id", [], "any", false, false, false, 352)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </a>
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"confirmDelete()\">
                    <i class=\"ri-delete-bin-6-line\"></i> Supprimer
                </button>
                <a href=\"";
        // line 358
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners");
        yield "\" class=\"btn btn-secondary\" style=\"margin-left: auto;\">
                    <i class=\"ri-arrow-left-line\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\" style=\"color: var(--danger);\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer le partenaire <strong>";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 377, $this->source); })()), "name", [], "any", false, false, false, 377), "html", null, true);
        yield "</strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partners_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 382, $this->source); })()), "id", [], "any", false, false, false, 382)]), "html", null, true);
        yield "\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 383, $this->source); })()), "id", [], "any", false, false, false, 383))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"ri-delete-bin-6-line\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 393
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 394
        yield "<script>
    function confirmDelete() {
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
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
        return "partner/show.html.twig";
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
        return array (  645 => 394,  635 => 393,  618 => 383,  614 => 382,  606 => 377,  584 => 358,  575 => 352,  565 => 345,  558 => 341,  551 => 337,  544 => 333,  528 => 319,  524 => 317,  518 => 315,  516 => 314,  509 => 309,  505 => 307,  499 => 304,  494 => 303,  492 => 302,  485 => 297,  481 => 295,  475 => 292,  470 => 291,  468 => 290,  460 => 285,  453 => 281,  437 => 267,  433 => 265,  427 => 262,  422 => 261,  420 => 260,  412 => 255,  405 => 251,  398 => 247,  386 => 237,  379 => 233,  371 => 227,  369 => 226,  359 => 220,  355 => 218,  351 => 216,  349 => 215,  346 => 214,  344 => 213,  340 => 212,  334 => 209,  329 => 206,  323 => 204,  321 => 203,  317 => 202,  312 => 199,  308 => 197,  300 => 195,  298 => 194,  282 => 181,  279 => 180,  269 => 179,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ partner.name }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/partner.css') }}\">
<style>
    .detail-card {
        background: var(--bg-primary);
        border-radius: 16px;
        border: 1px solid var(--border-color);
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    
    .detail-header {
        background: linear-gradient(135deg, var(--tchad-blue) 0%, #1e3a5f 100%);
        padding: 2rem;
        color: white;
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }
    
    .partner-logo-large {
        width: 100px;
        height: 100px;
        border-radius: 16px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    
    .partner-logo-large img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
    }
    
    .partner-logo-large .placeholder {
        font-size: 2.5rem;
        color: var(--tchad-blue);
    }
    
    .partner-title {
        flex: 1;
    }
    
    .partner-title h1 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }
    
    .partner-title .acronym {
        font-size: 1rem;
        opacity: 0.8;
        font-weight: 400;
    }
    
    .partner-title .type-tag {
        display: inline-block;
        background: rgba(255,255,255,0.2);
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        margin-top: 0.5rem;
    }
    
    .detail-body {
        padding: 1.5rem;
    }
    
    .info-section {
        margin-bottom: 2rem;
    }
    
    .info-section:last-child {
        margin-bottom: 0;
    }
    
    .section-title {
        font-size: 1rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .section-title i {
        color: var(--tchad-blue);
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .info-item {
        background: var(--bg-secondary);
        padding: 1rem;
        border-radius: 10px;
    }
    
    .info-item .label {
        font-size: 0.8rem;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.25rem;
    }
    
    .info-item .value {
        font-size: 1rem;
        color: var(--text-primary);
        font-weight: 500;
    }
    
    .info-item .value a {
        color: var(--tchad-blue);
        text-decoration: none;
    }
    
    .info-item .value a:hover {
        text-decoration: underline;
    }
    
    .description-box {
        background: var(--bg-secondary);
        padding: 1.25rem;
        border-radius: 10px;
        line-height: 1.7;
        color: var(--text-secondary);
    }
    
    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid var(--border-color);
    }
    
    .status-large {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        font-weight: 600;
        font-size: 0.9rem;
    }
    
    .status-large.actif {
        background: rgba(16, 185, 129, 0.15);
        color: var(--success);
    }
    
    .status-large.inactif {
        background: rgba(239, 68, 68, 0.15);
        color: var(--danger);
    }
    
    .status-large.suspendu {
        background: rgba(245, 158, 11, 0.15);
        color: #d97706;
    }
</style>
{% endblock %}

{% block body %}
<header class=\"top-header\">
    <a href=\"{{ path('app_partners') }}\" class=\"back-btn\">
        <i class=\"ri-arrow-left-line\" style=\"width:18px;\"></i>
        Retour à la liste
    </a>
    <h1 style=\"font-size:1.1rem; font-weight:600;\">Détails du Partenaire</h1>
    <div style=\"width:40px;\"></div>
</header>

<div class=\"content-area\">
    <div class=\"detail-card\">
        <!-- Header avec Logo et Nom -->
        <div class=\"detail-header\">
            <div class=\"partner-logo-large\">
                {% if partner.logo %}
                    <img src=\"{{ asset('uploads/partners/' ~ partner.logo) }}\" alt=\"{{ partner.name }}\">
                {% else %}
                    <i class=\"ri-building-2-line placeholder\"></i>
                {% endif %}
            </div>
            <div class=\"partner-title\">
                <h1>
                    {{ partner.name }}
                    {% if partner.acronym %}
                        <span class=\"acronym\">({{ partner.acronym }})</span>
                    {% endif %}
                </h1>
                <span class=\"type-tag\">
                    <i class=\"ri-price-tag-3-line\"></i>
                    {{ partner.typePartner.name ?? 'Type non défini' }}
                </span>
            </div>
            <div class=\"status-large {{ partner.status|lower }}\">
                {% if partner.status == 'Actif' %}
                    <i class=\"ri-checkbox-circle-line\"></i>
                {% elseif partner.status == 'Inactif' %}
                    <i class=\"ri-close-circle-line\"></i>
                {% else %}
                    <i class=\"ri-pause-circle-line\"></i>
                {% endif %}
                {{ partner.status }}
            </div>
        </div>
        
        <div class=\"detail-body\">
            <!-- Description -->
            {% if partner.description %}
                <div class=\"info-section\">
                    <h3 class=\"section-title\">
                        <i class=\"ri-file-text-line\"></i>
                        Description / Mission
                    </h3>
                    <div class=\"description-box\">
                        {{ partner.description|nl2br }}
                    </div>
                </div>
            {% endif %}
            
            <!-- Informations générales -->
            <div class=\"info-section\">
                <h3 class=\"section-title\">
                    <i class=\"ri-information-line\"></i>
                    Informations générales
                </h3>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <div class=\"label\">Nom complet</div>
                        <div class=\"value\">{{ partner.name }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Acronyme</div>
                        <div class=\"value\">{{ partner.acronym ?? '—' }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Type de partenaire</div>
                        <div class=\"value\">{{ partner.typePartner.name ?? '—' }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Site Web</div>
                        <div class=\"value\">
                            {% if partner.siteWeb %}
                                <a href=\"{{ partner.siteWeb }}\" target=\"_blank\">
                                    {{ partner.siteWeb }} <i class=\"ri-external-link-line\"></i>
                                </a>
                            {% else %}
                                —
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Point Focal -->
            <div class=\"info-section\">
                <h3 class=\"section-title\">
                    <i class=\"ri-user-line\"></i>
                    Point Focal
                </h3>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <div class=\"label\">Nom complet</div>
                        <div class=\"value\">{{ partner.contactName ?? '—' }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Fonction</div>
                        <div class=\"value\">{{ partner.contactRole ?? '—' }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Email</div>
                        <div class=\"value\">
                            {% if partner.contactEmail %}
                                <a href=\"mailto:{{ partner.contactEmail }}\">
                                    <i class=\"ri-mail-line\"></i> {{ partner.contactEmail }}
                                </a>
                            {% else %}
                                —
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Téléphone</div>
                        <div class=\"value\">
                            {% if partner.contactPhone %}
                                <a href=\"tel:{{ partner.contactPhone }}\">
                                    <i class=\"ri-phone-line\"></i> {{ partner.contactPhone }}
                                </a>
                            {% else %}
                                —
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"info-item\" style=\"grid-column: 1 / -1;\">
                        <div class=\"label\">Adresse (Bureau Tchad)</div>
                        <div class=\"value\">
                            {% if partner.address %}
                                <i class=\"ri-map-pin-line\"></i> {{ partner.address }}
                            {% else %}
                                —
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Métadonnées -->
            <div class=\"info-section\">
                <h3 class=\"section-title\">
                    <i class=\"ri-database-2-line\"></i>
                    Informations système
                </h3>
                <div class=\"info-grid\">
                    <div class=\"info-item\">
                        <div class=\"label\">Identifiant</div>
                        <div class=\"value\">#{{ partner.id }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Slug</div>
                        <div class=\"value\">{{ partner.slug }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Date de création</div>
                        <div class=\"value\">{{ partner.createdAt ? partner.createdAt|date('d/m/Y à H:i') : '—' }}</div>
                    </div>
                    <div class=\"info-item\">
                        <div class=\"label\">Dernière modification</div>
                        <div class=\"value\">{{ partner.updatedAt ? partner.updatedAt|date('d/m/Y à H:i') : 'Jamais modifié' }}</div>
                    </div>
                </div>
            </div>
            
            <!-- Actions -->
            <div class=\"action-buttons\">
                <a href=\"{{ path('app_partners_edit', {id: partner.id}) }}\" class=\"btn btn-primary\">
                    <i class=\"ri-edit-line\"></i> Modifier
                </a>
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"confirmDelete()\">
                    <i class=\"ri-delete-bin-6-line\"></i> Supprimer
                </button>
                <a href=\"{{ path('app_partners') }}\" class=\"btn btn-secondary\" style=\"margin-left: auto;\">
                    <i class=\"ri-arrow-left-line\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\" style=\"color: var(--danger);\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer le partenaire <strong>{{ partner.name }}</strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"{{ path('app_partners_delete', {id: partner.id}) }}\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ partner.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"ri-delete-bin-6-line\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    function confirmDelete() {
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
{% endblock %}
", "partner/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partner\\show.html.twig");
    }
}
