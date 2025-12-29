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

/* audit/index.html.twig */
class __TwigTemplate_4c54503739b4551183eabd74ed1c9c88 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "audit/index.html.twig"));

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

        yield "Audits et Contrôles - SIGEP Tchad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        yield " 
<style>
.type-badge { padding: 4px 10px; border-radius: 12px; font-size: 0.75rem; font-weight: 600; background: var(--bg-tertiary); color: var(--text-primary); }
.status-badge { padding: 4px 10px; border-radius: 12px; font-size: 0.75rem; font-weight: 600; }
.status-badge.planifie { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.status-badge.en_cours { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
.status-badge.termine { background: rgba(16, 185, 129, 0.1); color: #059669; }
.niveau-badge { padding: 4px 10px; border-radius: 12px; font-size: 0.75rem; font-weight: 600; }
.niveau-badge.excellent, .niveau-badge.bon { background: rgba(16, 185, 129, 0.1); color: #059669; }
.niveau-badge.satisfaisant, .niveau-badge.moyen { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.niveau-badge.insuffisant, .niveau-badge.critique { background: rgba(239, 68, 68, 0.1); color: #dc2626; }

/* === STATS ROW === */
.stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

/* === MINI STAT CARD === */
.mini-stat {
    background: #ffffff;
    border-radius: 16px;
    padding: 18px 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    position: relative;
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

/* Accent color stripe */
.mini-stat::before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 5px;
    height: 100%;
    background: var(--stat-color);
}

/* Hover effect */
.mini-stat:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.10);
}

/* === ICON CONTAINER === */
.mini-stat-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: color-mix(in srgb, var(--stat-color) 15%, transparent);
    color: var(--stat-color);
    flex-shrink: 0;
}

.mini-stat-icon i {
    width: 26px;
    height: 26px;
}

/* === CONTENT === */
.mini-stat-content h3 {
    font-size: 26px;
    font-weight: 700;
    margin: 0;
    color: #1f2937;
}

.mini-stat-content p {
    margin: 2px 0 0;
    font-size: 14px;
    font-weight: 500;
    color: #6b7280;
}

/* === COLOR HELPERS (OPTIONAL) === */
.mini-stat-icon.blue {
    --stat-color: var(--info);
}

.mini-stat-icon.green {
    --stat-color: var(--success);
}

.mini-stat-icon.gold {
    --stat-color: var(--warning);
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 103
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2><span class=\"page-header-icon\"><i data-lucide=\"clipboard-list\"></i></span>Audits et Contrôles</h2>
            <p>Gestion des audits et contrôles des projets publics</p>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_new");
        yield "\" class=\"btn btn-gold\">
                <i data-lucide=\"plus\"></i> Nouvel Audit
            </a>
        </div>
    </div>

    <div class=\"stats-row\">
        <div class=\"mini-stat\" style=\"--stat-color: var(--tchad-blue);\">
            <div class=\"mini-stat-icon blue\"><i data-lucide=\"clipboard-check\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 120), "planifie", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 120, $this->source); })()), "par_statut", [], "any", false, false, false, 120), "planifie", [], "any", false, false, false, 120), 0)) : (0)) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 120), "en_cours", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 120, $this->source); })()), "par_statut", [], "any", false, false, false, 120), "en_cours", [], "any", false, false, false, 120), 0)) : (0))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 120), "termine", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 120, $this->source); })()), "par_statut", [], "any", false, false, false, 120), "termine", [], "any", false, false, false, 120), 0)) : (0))), "html", null, true);
        yield "</h3>
                <p>Total Audits</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--warning);\">
            <div class=\"mini-stat-icon gold\"><i data-lucide=\"clock\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 127), "planifie", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 127, $this->source); })()), "par_statut", [], "any", false, false, false, 127), "planifie", [], "any", false, false, false, 127), 0)) : (0)), "html", null, true);
        yield "</h3>
                <p>Planifiés</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--info);\">
            <div class=\"mini-stat-icon blue\"><i data-lucide=\"play-circle\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 134), "en_cours", [], "any", true, true, false, 134)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 134, $this->source); })()), "par_statut", [], "any", false, false, false, 134), "en_cours", [], "any", false, false, false, 134), 0)) : (0)), "html", null, true);
        yield "</h3>
                <p>En cours</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--success);\">
            <div class=\"mini-stat-icon green\"><i data-lucide=\"check-circle\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "par_statut", [], "any", false, true, false, 141), "termine", [], "any", true, true, false, 141)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 141, $this->source); })()), "par_statut", [], "any", false, false, false, 141), "termine", [], "any", false, false, false, 141), 0)) : (0)), "html", null, true);
        yield "</h3>
                <p>Terminés</p>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"card-title\"><i data-lucide=\"list\"></i> Liste des Audits</div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Référence</th>
                        <th>Projet</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Auditeur</th>
                        <th>Statut</th>
                        <th>Niveau</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 167, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
            // line 168
            yield "                    <tr>
                        <td><strong>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "reference", [], "any", false, false, false, 169), "html", null, true);
            yield "</strong></td>
                        <td>
                            <div>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "projet", [], "any", false, false, false, 171), "name", [], "any", false, false, false, 171), 0, 40), "html", null, true);
            yield "...</div>
                            <small style=\"color: var(--text-muted);\">";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "projet", [], "any", false, false, false, 172), "code", [], "any", false, false, false, 172), "html", null, true);
            yield "</small>
                        </td>
                        <td><span class=\"type-badge\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "typeLabel", [], "any", false, false, false, 174), "html", null, true);
            yield "</span></td>
                        <td>";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td>";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "auditeur", [], "any", false, false, false, 176), "html", null, true);
            yield "</td>
                        <td><span class=\"status-badge ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 177), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statutLabel", [], "any", false, false, false, 177), "html", null, true);
            yield "</span></td>
                        <td>
                            ";
            // line 179
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "niveau", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "                            <span class=\"niveau-badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "niveau", [], "any", false, false, false, 180), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "niveauLabel", [], "any", false, false, false, 180), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 182
                yield "                            <span class=\"text-muted\">-</span>
                            ";
            }
            // line 184
            yield "                        </td>
                        <td>
                            <div class=\"actions-group\">
                                <a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" class=\"action-btn\" title=\"Voir\">
                                    <i data-lucide=\"eye\"></i>
                                </a>
                                ";
            // line 190
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "isModifiable", [], "method", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 191
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "id", [], "any", false, false, false, 191)]), "html", null, true);
                yield "\" class=\"action-btn\" title=\"Modifier\">
                                    <i data-lucide=\"pencil\"></i>
                                </a>
                                ";
            }
            // line 195
            yield "                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 198
        if (!$context['_iterated']) {
            // line 199
            yield "                    <tr>
                        <td colspan=\"8\">
                            <div class=\"empty-state\">
                                <div class=\"empty-icon\"><i data-lucide=\"clipboard-x\"></i></div>
                                <h4>Aucun audit enregistré</h4>
                                <p>Créez votre premier audit ou contrôle de projet</p>
                                <a href=\"";
            // line 205
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_audit_new");
            yield "\" class=\"btn btn-primary\">
                                    <i data-lucide=\"plus\"></i> Nouvel Audit
                                </a>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>



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
        return "audit/index.html.twig";
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
        return array (  388 => 212,  375 => 205,  367 => 199,  365 => 198,  358 => 195,  350 => 191,  348 => 190,  342 => 187,  337 => 184,  333 => 182,  325 => 180,  323 => 179,  316 => 177,  312 => 176,  308 => 175,  304 => 174,  299 => 172,  295 => 171,  290 => 169,  287 => 168,  282 => 167,  253 => 141,  243 => 134,  233 => 127,  223 => 120,  210 => 110,  201 => 103,  191 => 102,  76 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Audits et Contrôles - SIGEP Tchad{% endblock %}
{% block stylesheets %} 
<style>
.type-badge { padding: 4px 10px; border-radius: 12px; font-size: 0.75rem; font-weight: 600; background: var(--bg-tertiary); color: var(--text-primary); }
.status-badge { padding: 4px 10px; border-radius: 12px; font-size: 0.75rem; font-weight: 600; }
.status-badge.planifie { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.status-badge.en_cours { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
.status-badge.termine { background: rgba(16, 185, 129, 0.1); color: #059669; }
.niveau-badge { padding: 4px 10px; border-radius: 12px; font-size: 0.75rem; font-weight: 600; }
.niveau-badge.excellent, .niveau-badge.bon { background: rgba(16, 185, 129, 0.1); color: #059669; }
.niveau-badge.satisfaisant, .niveau-badge.moyen { background: rgba(245, 158, 11, 0.1); color: #d97706; }
.niveau-badge.insuffisant, .niveau-badge.critique { background: rgba(239, 68, 68, 0.1); color: #dc2626; }

/* === STATS ROW === */
.stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

/* === MINI STAT CARD === */
.mini-stat {
    background: #ffffff;
    border-radius: 16px;
    padding: 18px 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    position: relative;
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

/* Accent color stripe */
.mini-stat::before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 5px;
    height: 100%;
    background: var(--stat-color);
}

/* Hover effect */
.mini-stat:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.10);
}

/* === ICON CONTAINER === */
.mini-stat-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: color-mix(in srgb, var(--stat-color) 15%, transparent);
    color: var(--stat-color);
    flex-shrink: 0;
}

.mini-stat-icon i {
    width: 26px;
    height: 26px;
}

/* === CONTENT === */
.mini-stat-content h3 {
    font-size: 26px;
    font-weight: 700;
    margin: 0;
    color: #1f2937;
}

.mini-stat-content p {
    margin: 2px 0 0;
    font-size: 14px;
    font-weight: 500;
    color: #6b7280;
}

/* === COLOR HELPERS (OPTIONAL) === */
.mini-stat-icon.blue {
    --stat-color: var(--info);
}

.mini-stat-icon.green {
    --stat-color: var(--success);
}

.mini-stat-icon.gold {
    --stat-color: var(--warning);
}

</style>
{% endblock %}
{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2><span class=\"page-header-icon\"><i data-lucide=\"clipboard-list\"></i></span>Audits et Contrôles</h2>
            <p>Gestion des audits et contrôles des projets publics</p>
        </div>
        <div class=\"page-header-actions\">
            <a href=\"{{ path('app_audit_new') }}\" class=\"btn btn-gold\">
                <i data-lucide=\"plus\"></i> Nouvel Audit
            </a>
        </div>
    </div>

    <div class=\"stats-row\">
        <div class=\"mini-stat\" style=\"--stat-color: var(--tchad-blue);\">
            <div class=\"mini-stat-icon blue\"><i data-lucide=\"clipboard-check\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>{{ statistiques.par_statut.planifie|default(0) + statistiques.par_statut.en_cours|default(0) + statistiques.par_statut.termine|default(0) }}</h3>
                <p>Total Audits</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--warning);\">
            <div class=\"mini-stat-icon gold\"><i data-lucide=\"clock\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>{{ statistiques.par_statut.planifie|default(0) }}</h3>
                <p>Planifiés</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--info);\">
            <div class=\"mini-stat-icon blue\"><i data-lucide=\"play-circle\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>{{ statistiques.par_statut.en_cours|default(0) }}</h3>
                <p>En cours</p>
            </div>
        </div>
        <div class=\"mini-stat\" style=\"--stat-color: var(--success);\">
            <div class=\"mini-stat-icon green\"><i data-lucide=\"check-circle\"></i></div>
            <div class=\"mini-stat-content\">
                <h3>{{ statistiques.par_statut.termine|default(0) }}</h3>
                <p>Terminés</p>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"card-title\"><i data-lucide=\"list\"></i> Liste des Audits</div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th>Référence</th>
                        <th>Projet</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Auditeur</th>
                        <th>Statut</th>
                        <th>Niveau</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for audit in audits %}
                    <tr>
                        <td><strong>{{ audit.reference }}</strong></td>
                        <td>
                            <div>{{ audit.projet.name|slice(0, 40) }}...</div>
                            <small style=\"color: var(--text-muted);\">{{ audit.projet.code }}</small>
                        </td>
                        <td><span class=\"type-badge\">{{ audit.typeLabel }}</span></td>
                        <td>{{ audit.dateAudit|date('d/m/Y') }}</td>
                        <td>{{ audit.auditeur }}</td>
                        <td><span class=\"status-badge {{ audit.statut }}\">{{ audit.statutLabel }}</span></td>
                        <td>
                            {% if audit.niveau %}
                            <span class=\"niveau-badge {{ audit.niveau }}\">{{ audit.niveauLabel }}</span>
                            {% else %}
                            <span class=\"text-muted\">-</span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"actions-group\">
                                <a href=\"{{ path('app_audit_show', {'id': audit.id}) }}\" class=\"action-btn\" title=\"Voir\">
                                    <i data-lucide=\"eye\"></i>
                                </a>
                                {% if audit.isModifiable() %}
                                <a href=\"{{ path('app_audit_edit', {'id': audit.id}) }}\" class=\"action-btn\" title=\"Modifier\">
                                    <i data-lucide=\"pencil\"></i>
                                </a>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"8\">
                            <div class=\"empty-state\">
                                <div class=\"empty-icon\"><i data-lucide=\"clipboard-x\"></i></div>
                                <h4>Aucun audit enregistré</h4>
                                <p>Créez votre premier audit ou contrôle de projet</p>
                                <a href=\"{{ path('app_audit_new') }}\" class=\"btn btn-primary\">
                                    <i data-lucide=\"plus\"></i> Nouvel Audit
                                </a>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>



<script>lucide.createIcons();</script>
{% endblock %}
", "audit/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\audit\\index.html.twig");
    }
}
