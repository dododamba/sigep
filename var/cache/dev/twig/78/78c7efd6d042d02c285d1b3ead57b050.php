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

/* audit/show.html.twig */
class __TwigTemplate_de0b18da4676341e61fc3519627a6c88 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "audit/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Audit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 2, $this->source); })()), "reference", [], "any", false, false, false, 2), "html", null, true);
        yield " - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_index");
        yield "\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i> Retour aux audits
            </a>
            <h2>
                <span class=\"page-header-icon\"><i data-lucide=\"clipboard-check\"></i></span>
                ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 12, $this->source); })()), "reference", [], "any", false, false, false, 12), "html", null, true);
        yield "
            </h2>
            <p>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
        </div>
        <div class=\"page-header-actions\">
            ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 17, $this->source); })()), "isModifiable", [], "method", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                <i data-lucide=\"edit\"></i> Modifier
            </a>
            ";
        }
        // line 22
        yield "        </div>
    </div>

    <div class=\"detail-card\">
        <div class=\"detail-header\">
            <div class=\"detail-badges\">
                <span class=\"status-badge ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 28, $this->source); })()), "statut", [], "any", false, false, false, 28), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 28, $this->source); })()), "statutLabel", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
                <span class=\"type-badge\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 29, $this->source); })()), "typeLabel", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 30, $this->source); })()), "niveau", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                <span class=\"niveau-badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 31, $this->source); })()), "niveau", [], "any", false, false, false, 31), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 31, $this->source); })()), "niveauLabel", [], "any", false, false, false, 31), "html", null, true);
            yield "</span>
                ";
        }
        // line 33
        yield "            </div>
            ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 34, $this->source); })()), "score", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "            <div class=\"score-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 35, $this->source); })()), "score", [], "any", false, false, false, 35), "html", null, true);
            yield "%</div>
            ";
        }
        // line 37
        yield "        </div>

        <div class=\"detail-grid\">
            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"briefcase\"></i> Projet</span>
                <span class=\"detail-value\"><strong>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 42, $this->source); })()), "projet", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
        yield "</strong> (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 42, $this->source); })()), "projet", [], "any", false, false, false, 42), "code", [], "any", false, false, false, 42), "html", null, true);
        yield ")</span>
            </div>
            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"calendar\"></i> Date</span>
                <span class=\"detail-value\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 46, $this->source); })()), "dateAudit", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"user\"></i> Auditeur</span>
                <span class=\"detail-value\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 50, $this->source); })()), "auditeur", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
            </div>
            ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 52, $this->source); })()), "organisme", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"building\"></i> Organisme</span>
                <span class=\"detail-value\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 55, $this->source); })()), "organisme", [], "any", false, false, false, 55), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 58
        yield "        </div>

        ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 60, $this->source); })()), "objectifs", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        <div class=\"detail-section\">
            <h4><i data-lucide=\"target\"></i> Objectifs</h4>
            <p>";
            // line 63
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 63, $this->source); })()), "objectifs", [], "any", false, false, false, 63), "html", null, true));
            yield "</p>
        </div>
        ";
        }
        // line 66
        yield "
        ";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 67, $this->source); })()), "resultat", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "        <div class=\"detail-section\">
            <h4><i data-lucide=\"check-circle\"></i> Résultat / Conclusion</h4>
            <p>";
            // line 70
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 70, $this->source); })()), "resultat", [], "any", false, false, false, 70), "html", null, true));
            yield "</p>
        </div>
        ";
        }
        // line 73
        yield "
        ";
        // line 74
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 74, $this->source); })()), "recommandations", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "        <div class=\"detail-section\">
            <h4><i data-lucide=\"alert-circle\"></i> Recommandations</h4>
            <p>";
            // line 77
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 77, $this->source); })()), "recommandations", [], "any", false, false, false, 77), "html", null, true));
            yield "</p>
        </div>
        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 81, $this->source); })()), "nombreDocuments", [], "any", false, false, false, 81) > 0)) {
            // line 82
            yield "        <div class=\"detail-section\">
            <h4><i data-lucide=\"file-text\"></i> Documents (";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 83, $this->source); })()), "nombreDocuments", [], "any", false, false, false, 83), "html", null, true);
            yield ")</h4>
            <div class=\"documents-grid\">
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 85, $this->source); })()), "documents", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 86
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/audits/documents/" . $context["document"])), "html", null, true);
                yield "\" target=\"_blank\" class=\"document-card\">
                    <i data-lucide=\"file\"></i>
                    <span>";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["document"], 0, 30), "html", null, true);
                yield "...</span>
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['document'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "            </div>
        </div>
        ";
        }
        // line 94
        yield "
        ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 95, $this->source); })()), "nombrePhotos", [], "any", false, false, false, 95) > 0)) {
            // line 96
            yield "        <div class=\"detail-section\">
            <h4><i data-lucide=\"camera\"></i> Photos (";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 97, $this->source); })()), "nombrePhotos", [], "any", false, false, false, 97), "html", null, true);
            yield ")</h4>
            <div class=\"photos-gallery\">
                ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["audit"]) || array_key_exists("audit", $context) ? $context["audit"] : (function () { throw new RuntimeError('Variable "audit" does not exist.', 99, $this->source); })()), "photos", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 100
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["photo"])), "html", null, true);
                yield "\" target=\"_blank\" class=\"photo-item\">
                    <img src=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["photo"])), "html", null, true);
                yield "\" alt=\"Photo\">
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "            </div>
        </div>
        ";
        }
        // line 107
        yield "    </div>
</div>

<style>
.detail-card { background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 16px; padding: 32px; }
.detail-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid var(--border-color); }
.detail-badges { display: flex; gap: 8px; flex-wrap: wrap; }
.status-badge, .type-badge, .niveau-badge { padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; }
.status-badge.planifie { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.status-badge.en_cours { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
.status-badge.termine { background: rgba(16, 185, 129, 0.1); color: #059669; }
.type-badge { background: var(--bg-tertiary); color: var(--text-primary); }
.niveau-badge.excellent, .niveau-badge.bon { background: rgba(16, 185, 129, 0.1); color: #059669; }
.niveau-badge.satisfaisant, .niveau-badge.moyen { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.niveau-badge.insuffisant, .niveau-badge.critique { background: rgba(239, 68, 68, 0.1); color: #dc2626; }
.score-badge { font-size: 1.5rem; font-weight: 700; color: var(--tchad-blue); }
.detail-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 24px; }
.detail-item { display: flex; flex-direction: column; gap: 6px; }
.detail-label { font-size: 0.85rem; color: var(--text-muted); display: flex; align-items: center; gap: 6px; }
.detail-value { font-size: 0.95rem; color: var(--text-primary); }
.detail-section { margin-top: 24px; padding-top: 24px; border-top: 1px solid var(--border-color); }
.detail-section h4 { font-size: 1rem; font-weight: 600; margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
.detail-section p { line-height: 1.6; color: var(--text-secondary); }
.documents-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px; margin-top: 12px; }
.document-card { display: flex; align-items: center; gap: 12px; padding: 12px; background: var(--bg-tertiary); border-radius: 8px; text-decoration: none; color: var(--text-primary); transition: all 0.2s; }
.document-card:hover { background: var(--bg-primary); transform: translateY(-2px); }
.photos-gallery { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px; margin-top: 12px; }
.photo-item { display: block; border-radius: 8px; overflow: hidden; transition: all 0.2s; }
.photo-item:hover { transform: scale(1.05); }
.photo-item img { width: 100%; height: 200px; object-fit: cover; display: block; }
@media (max-width: 768px) { .detail-grid { grid-template-columns: 1fr; } }
</style>

<script>lucide.createIcons();</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "audit/show.html.twig";
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
        return array (  319 => 107,  314 => 104,  305 => 101,  300 => 100,  296 => 99,  291 => 97,  288 => 96,  286 => 95,  283 => 94,  278 => 91,  269 => 88,  263 => 86,  259 => 85,  254 => 83,  251 => 82,  249 => 81,  246 => 80,  240 => 77,  236 => 75,  234 => 74,  231 => 73,  225 => 70,  221 => 68,  219 => 67,  216 => 66,  210 => 63,  206 => 61,  204 => 60,  200 => 58,  194 => 55,  190 => 53,  188 => 52,  183 => 50,  176 => 46,  167 => 42,  160 => 37,  154 => 35,  152 => 34,  149 => 33,  141 => 31,  139 => 30,  135 => 29,  129 => 28,  121 => 22,  113 => 18,  111 => 17,  105 => 14,  100 => 12,  92 => 7,  87 => 4,  77 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Audit {{ audit.reference }} - SIGEP Tchad{% endblock %}
{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <a href=\"{{ path('app_audit_index') }}\" class=\"back-link\">
                <i data-lucide=\"arrow-left\"></i> Retour aux audits
            </a>
            <h2>
                <span class=\"page-header-icon\"><i data-lucide=\"clipboard-check\"></i></span>
                {{ audit.reference }}
            </h2>
            <p>{{ audit.titre }}</p>
        </div>
        <div class=\"page-header-actions\">
            {% if audit.isModifiable() %}
            <a href=\"{{ path('app_audit_edit', {'id': audit.id}) }}\" class=\"btn btn-primary\">
                <i data-lucide=\"edit\"></i> Modifier
            </a>
            {% endif %}
        </div>
    </div>

    <div class=\"detail-card\">
        <div class=\"detail-header\">
            <div class=\"detail-badges\">
                <span class=\"status-badge {{ audit.statut }}\">{{ audit.statutLabel }}</span>
                <span class=\"type-badge\">{{ audit.typeLabel }}</span>
                {% if audit.niveau %}
                <span class=\"niveau-badge {{ audit.niveau }}\">{{ audit.niveauLabel }}</span>
                {% endif %}
            </div>
            {% if audit.score %}
            <div class=\"score-badge\">{{ audit.score }}%</div>
            {% endif %}
        </div>

        <div class=\"detail-grid\">
            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"briefcase\"></i> Projet</span>
                <span class=\"detail-value\"><strong>{{ audit.projet.name }}</strong> ({{ audit.projet.code }})</span>
            </div>
            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"calendar\"></i> Date</span>
                <span class=\"detail-value\">{{ audit.dateAudit|date('d/m/Y') }}</span>
            </div>
            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"user\"></i> Auditeur</span>
                <span class=\"detail-value\">{{ audit.auditeur }}</span>
            </div>
            {% if audit.organisme %}
            <div class=\"detail-item\">
                <span class=\"detail-label\"><i data-lucide=\"building\"></i> Organisme</span>
                <span class=\"detail-value\">{{ audit.organisme }}</span>
            </div>
            {% endif %}
        </div>

        {% if audit.objectifs %}
        <div class=\"detail-section\">
            <h4><i data-lucide=\"target\"></i> Objectifs</h4>
            <p>{{ audit.objectifs|nl2br }}</p>
        </div>
        {% endif %}

        {% if audit.resultat %}
        <div class=\"detail-section\">
            <h4><i data-lucide=\"check-circle\"></i> Résultat / Conclusion</h4>
            <p>{{ audit.resultat|nl2br }}</p>
        </div>
        {% endif %}

        {% if audit.recommandations %}
        <div class=\"detail-section\">
            <h4><i data-lucide=\"alert-circle\"></i> Recommandations</h4>
            <p>{{ audit.recommandations|nl2br }}</p>
        </div>
        {% endif %}

        {% if audit.nombreDocuments > 0 %}
        <div class=\"detail-section\">
            <h4><i data-lucide=\"file-text\"></i> Documents ({{ audit.nombreDocuments }})</h4>
            <div class=\"documents-grid\">
                {% for document in audit.documents %}
                <a href=\"{{ asset('uploads/audits/documents/' ~ document) }}\" target=\"_blank\" class=\"document-card\">
                    <i data-lucide=\"file\"></i>
                    <span>{{ document|slice(0, 30) }}...</span>
                </a>
                {% endfor %}
            </div>
        </div>
        {% endif %}

        {% if audit.nombrePhotos > 0 %}
        <div class=\"detail-section\">
            <h4><i data-lucide=\"camera\"></i> Photos ({{ audit.nombrePhotos }})</h4>
            <div class=\"photos-gallery\">
                {% for photo in audit.photos %}
                <a href=\"{{ asset('uploads/images/' ~ photo) }}\" target=\"_blank\" class=\"photo-item\">
                    <img src=\"{{ asset('uploads/images/' ~ photo) }}\" alt=\"Photo\">
                </a>
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
</div>

<style>
.detail-card { background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 16px; padding: 32px; }
.detail-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid var(--border-color); }
.detail-badges { display: flex; gap: 8px; flex-wrap: wrap; }
.status-badge, .type-badge, .niveau-badge { padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; }
.status-badge.planifie { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.status-badge.en_cours { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
.status-badge.termine { background: rgba(16, 185, 129, 0.1); color: #059669; }
.type-badge { background: var(--bg-tertiary); color: var(--text-primary); }
.niveau-badge.excellent, .niveau-badge.bon { background: rgba(16, 185, 129, 0.1); color: #059669; }
.niveau-badge.satisfaisant, .niveau-badge.moyen { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.niveau-badge.insuffisant, .niveau-badge.critique { background: rgba(239, 68, 68, 0.1); color: #dc2626; }
.score-badge { font-size: 1.5rem; font-weight: 700; color: var(--tchad-blue); }
.detail-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 24px; }
.detail-item { display: flex; flex-direction: column; gap: 6px; }
.detail-label { font-size: 0.85rem; color: var(--text-muted); display: flex; align-items: center; gap: 6px; }
.detail-value { font-size: 0.95rem; color: var(--text-primary); }
.detail-section { margin-top: 24px; padding-top: 24px; border-top: 1px solid var(--border-color); }
.detail-section h4 { font-size: 1rem; font-weight: 600; margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
.detail-section p { line-height: 1.6; color: var(--text-secondary); }
.documents-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px; margin-top: 12px; }
.document-card { display: flex; align-items: center; gap: 12px; padding: 12px; background: var(--bg-tertiary); border-radius: 8px; text-decoration: none; color: var(--text-primary); transition: all 0.2s; }
.document-card:hover { background: var(--bg-primary); transform: translateY(-2px); }
.photos-gallery { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px; margin-top: 12px; }
.photo-item { display: block; border-radius: 8px; overflow: hidden; transition: all 0.2s; }
.photo-item:hover { transform: scale(1.05); }
.photo-item img { width: 100%; height: 200px; object-fit: cover; display: block; }
@media (max-width: 768px) { .detail-grid { grid-template-columns: 1fr; } }
</style>

<script>lucide.createIcons();</script>
{% endblock %}
", "audit/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\audit\\show.html.twig");
    }
}
