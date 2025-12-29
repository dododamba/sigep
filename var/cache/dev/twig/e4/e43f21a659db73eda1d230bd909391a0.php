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

/* convention/index.html.twig */
class __TwigTemplate_7dce03dfa418a6d4c549faee2e616afc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "convention/index.html.twig"));

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

        yield "Conventions - SIGEP Tchad";
        
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

        // line 4
        yield "<style>
/* ===============================
   Variables couleurs et typographie
   =============================== */
:root {
    --primary-color: #004d99;
    --secondary-color: #f0f4f8;
    --accent-color: #daa520;
    --text-color: #333;
    --text-light: #666;
    --bg-card: #fff;
    --border-radius: 12px;
    --transition-speed: 0.3s;
    --badge-success: #28a745;
    --badge-warning: #ffc107;
    --badge-danger: #dc3545;
    --badge-info: #17a2b8;
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* ===============================
   Global Styles
   =============================== */
body {
    font-family: var(--font-family);
    color: var(--text-color);
    background-color: var(--secondary-color);
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
    color: var(--primary-color);
    transition: color var(--transition-speed);
}

a:hover {
    color: #003366;
}

/* ===============================
   Content Area
   =============================== */
.content-area {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 1rem;
}

/* ===============================
   Page Header
   =============================== */
.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.page-title h2 {
    margin: 0;
    font-size: 1.8rem;
}

.page-title p {
    margin: 0;
    color: var(--text-light);
}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.5rem 1rem;
    border-radius: var(--border-radius);
    font-weight: 500;
    cursor: pointer;
    transition: background-color var(--transition-speed), transform var(--transition-speed);
}

.btn-primary {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #003366;
    transform: translateY(-2px);
}

/* ===============================
   Stats Grid
   =============================== */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background-color: var(--bg-card);
    padding: 1.2rem;
    border-radius: var(--border-radius);
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: transform var(--transition-speed), box-shadow var(--transition-speed);
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

.stat-value {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--primary-color);
}

.stat-label {
    font-size: 0.9rem;
    color: var(--text-light);
    margin-top: 0.3rem;
}

.stat-amount {
    font-weight: 500;
    margin-top: 0.5rem;
}

/* ===============================
   Table Card
   =============================== */
.table-card {
    overflow-x: auto;
    background-color: var(--bg-card);
    padding: 1rem;
    border-radius: var(--border-radius);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th, .data-table td {
    padding: 0.75rem 1rem;
    text-align: left;
}

.data-table th {
    background-color: var(--primary-color);
    color: #fff;
    font-weight: 500;
}

.data-table tr {
    border-bottom: 1px solid #e0e0e0;
    transition: background-color var(--transition-speed);
}

.data-table tr:hover {
    background-color: #f5f9ff;
}

.badge {
    padding: 0.3rem 0.7rem;
    border-radius: 8px;
    color: #fff;
    font-size: 0.85rem;
    font-weight: 500;
    text-transform: uppercase;
}

.badge-success { background-color: var(--badge-success); }
.badge-warning { background-color: var(--badge-warning); }
.badge-danger { background-color: var(--badge-danger); }
.badge-info { background-color: var(--badge-info); }

.btn-sm {
    font-size: 0.85rem;
    padding: 0.3rem 0.6rem;
    border-radius: 8px;
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    transition: background-color var(--transition-speed), transform var(--transition-speed);
}

.btn-sm:hover {
    background-color: #003366;
    transform: translateY(-1px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .page-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 216
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h2>Conventions de Financement</h2>
            <p>Gestion des accords de financement</p>
        </div>
        <a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_new");
        yield "\" class=\"btn btn-primary\">
            <i data-lucide=\"plus\"></i> Nouvelle convention
        </a>
    </div>

    <div class=\"stats-grid\">
        ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 228, $this->source); })()), "par_statut", [], "any", false, false, false, 228));
        foreach ($context['_seq'] as $context["statut"] => $context["data"]) {
            // line 229
            yield "        <div class=\"stat-card\">
            <div class=\"stat-value\">";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "nombre", [], "any", false, false, false, 230), "html", null, true);
            yield "</div>
            <div class=\"stat-label\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["statut"], ["_" => " "])), "html", null, true);
            yield "</div>
            <div class=\"stat-amount\">";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 232), 0, ",", " "), "html", null, true);
            yield " FCFA</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statut'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "    </div>

    <div class=\"table-card\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Intitulé</th>
                    <th>Partenaire</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conventions"]) || array_key_exists("conventions", $context) ? $context["conventions"] : (function () { throw new RuntimeError('Variable "conventions" does not exist.', 250, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["convention"]) {
            // line 251
            yield "                <tr>
                    <td data-label=\"Code\"><strong>";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "code", [], "any", false, false, false, 252), "html", null, true);
            yield "</strong></td>
                    <td data-label=\"Intitulé\">";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "intitule", [], "any", false, false, false, 253), 0, 50), "html", null, true);
            yield "...</td>
                    <td data-label=\"Partenaire\">";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "partenaire", [], "any", false, false, false, 254), "html", null, true);
            yield "</td>
                    <td data-label=\"Montant\"><strong>";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "montantFormate", [], "any", false, false, false, 255), "html", null, true);
            yield "</strong></td>
                    <td data-label=\"Statut\"><span class=\"badge badge-";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutBadgeClass", [], "any", false, false, false, 256), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statutLabel", [], "any", false, false, false, 256), "html", null, true);
            yield "</span></td>
                    <td data-label=\"Actions\">
                        <a href=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_convention_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "id", [], "any", false, false, false, 258)]), "html", null, true);
            yield "\" class=\"btn-sm\">Voir</a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 261
        if (!$context['_iterated']) {
            // line 262
            yield "                <tr><td colspan=\"6\" style=\"text-align: center;\">Aucune convention enregistrée</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['convention'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "            </tbody>
        </table>
    </div>
</div>

<script>
// Initialiser les icônes Lucide
if (typeof lucide !== 'undefined') {
    lucide.createIcons();
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
        return "convention/index.html.twig";
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
        return array (  418 => 264,  411 => 262,  409 => 261,  401 => 258,  394 => 256,  390 => 255,  386 => 254,  382 => 253,  378 => 252,  375 => 251,  370 => 250,  353 => 235,  344 => 232,  340 => 231,  336 => 230,  333 => 229,  329 => 228,  320 => 222,  312 => 216,  302 => 215,  86 => 4,  76 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Conventions - SIGEP Tchad{% endblock %}
{% block stylesheets %}
<style>
/* ===============================
   Variables couleurs et typographie
   =============================== */
:root {
    --primary-color: #004d99;
    --secondary-color: #f0f4f8;
    --accent-color: #daa520;
    --text-color: #333;
    --text-light: #666;
    --bg-card: #fff;
    --border-radius: 12px;
    --transition-speed: 0.3s;
    --badge-success: #28a745;
    --badge-warning: #ffc107;
    --badge-danger: #dc3545;
    --badge-info: #17a2b8;
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* ===============================
   Global Styles
   =============================== */
body {
    font-family: var(--font-family);
    color: var(--text-color);
    background-color: var(--secondary-color);
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
    color: var(--primary-color);
    transition: color var(--transition-speed);
}

a:hover {
    color: #003366;
}

/* ===============================
   Content Area
   =============================== */
.content-area {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 1rem;
}

/* ===============================
   Page Header
   =============================== */
.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.page-title h2 {
    margin: 0;
    font-size: 1.8rem;
}

.page-title p {
    margin: 0;
    color: var(--text-light);
}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.5rem 1rem;
    border-radius: var(--border-radius);
    font-weight: 500;
    cursor: pointer;
    transition: background-color var(--transition-speed), transform var(--transition-speed);
}

.btn-primary {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #003366;
    transform: translateY(-2px);
}

/* ===============================
   Stats Grid
   =============================== */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background-color: var(--bg-card);
    padding: 1.2rem;
    border-radius: var(--border-radius);
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: transform var(--transition-speed), box-shadow var(--transition-speed);
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

.stat-value {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--primary-color);
}

.stat-label {
    font-size: 0.9rem;
    color: var(--text-light);
    margin-top: 0.3rem;
}

.stat-amount {
    font-weight: 500;
    margin-top: 0.5rem;
}

/* ===============================
   Table Card
   =============================== */
.table-card {
    overflow-x: auto;
    background-color: var(--bg-card);
    padding: 1rem;
    border-radius: var(--border-radius);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th, .data-table td {
    padding: 0.75rem 1rem;
    text-align: left;
}

.data-table th {
    background-color: var(--primary-color);
    color: #fff;
    font-weight: 500;
}

.data-table tr {
    border-bottom: 1px solid #e0e0e0;
    transition: background-color var(--transition-speed);
}

.data-table tr:hover {
    background-color: #f5f9ff;
}

.badge {
    padding: 0.3rem 0.7rem;
    border-radius: 8px;
    color: #fff;
    font-size: 0.85rem;
    font-weight: 500;
    text-transform: uppercase;
}

.badge-success { background-color: var(--badge-success); }
.badge-warning { background-color: var(--badge-warning); }
.badge-danger { background-color: var(--badge-danger); }
.badge-info { background-color: var(--badge-info); }

.btn-sm {
    font-size: 0.85rem;
    padding: 0.3rem 0.6rem;
    border-radius: 8px;
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    transition: background-color var(--transition-speed), transform var(--transition-speed);
}

.btn-sm:hover {
    background-color: #003366;
    transform: translateY(-1px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .page-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
}
</style>
{% endblock %}


{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h2>Conventions de Financement</h2>
            <p>Gestion des accords de financement</p>
        </div>
        <a href=\"{{ path('app_convention_new') }}\" class=\"btn btn-primary\">
            <i data-lucide=\"plus\"></i> Nouvelle convention
        </a>
    </div>

    <div class=\"stats-grid\">
        {% for statut, data in statistiques.par_statut %}
        <div class=\"stat-card\">
            <div class=\"stat-value\">{{ data.nombre }}</div>
            <div class=\"stat-label\">{{ statut|replace({'_': ' '})|title }}</div>
            <div class=\"stat-amount\">{{ data.total|number_format(0, ',', ' ') }} FCFA</div>
        </div>
        {% endfor %}
    </div>

    <div class=\"table-card\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Intitulé</th>
                    <th>Partenaire</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for convention in conventions %}
                <tr>
                    <td data-label=\"Code\"><strong>{{ convention.code }}</strong></td>
                    <td data-label=\"Intitulé\">{{ convention.intitule|slice(0, 50) }}...</td>
                    <td data-label=\"Partenaire\">{{ convention.partenaire }}</td>
                    <td data-label=\"Montant\"><strong>{{ convention.montantFormate }}</strong></td>
                    <td data-label=\"Statut\"><span class=\"badge badge-{{ convention.statutBadgeClass }}\">{{ convention.statutLabel }}</span></td>
                    <td data-label=\"Actions\">
                        <a href=\"{{ path('app_convention_show', {'id': convention.id}) }}\" class=\"btn-sm\">Voir</a>
                    </td>
                </tr>
                {% else %}
                <tr><td colspan=\"6\" style=\"text-align: center;\">Aucune convention enregistrée</td></tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<script>
// Initialiser les icônes Lucide
if (typeof lucide !== 'undefined') {
    lucide.createIcons();
}
</script>
{% endblock %}", "convention/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\convention\\index.html.twig");
    }
}
