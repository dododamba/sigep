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

/* decaissement/index.html.twig */
class __TwigTemplate_fb0ae967ea898c8a96d585f3142b086e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "decaissement/index.html.twig"));

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

        yield "Décaissements - SIGEP Tchad";
        
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
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 32px;
    }

    .stat-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 20px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .stat-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
    }

    .stat-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .stat-icon.warning { background: rgba(245, 158, 11, 0.15); color: #f59e0b; }
    .stat-icon.info { background: rgba(59, 130, 246, 0.15); color: #3b82f6; }
    .stat-icon.success { background: rgba(16, 185, 129, 0.15); color: #10b981; }
    .stat-icon.danger { background: rgba(239, 68, 68, 0.15); color: #ef4444; }

    .stat-value {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .table-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
    }

    .table-header {
        padding: 20px 24px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .table-title h3 {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: var(--accent-gradient);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        transition: transform 0.2s;
    }

    .btn-primary:hover {
        transform: translateY(-1px);
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table thead th {
        padding: 16px 24px;
        text-align: left;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--text-muted);
        background: var(--bg-tertiary);
        border-bottom: 1px solid var(--border-color);
    }

    .data-table tbody td {
        padding: 16px 24px;
        border-bottom: 1px solid var(--border-color);
        font-size: 0.9rem;
    }

    .data-table tbody tr:hover {
        background: var(--bg-tertiary);
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .status-badge.warning { background: rgba(245, 158, 11, 0.15); color: #f59e0b; }
    .status-badge.info { background: rgba(59, 130, 246, 0.15); color: #3b82f6; }
    .status-badge.success { background: rgba(16, 185, 129, 0.15); color: #10b981; }
    .status-badge.danger { background: rgba(239, 68, 68, 0.15); color: #ef4444; }
    .status-badge.secondary { background: rgba(100, 116, 139, 0.15); color: #64748b; }

    .action-btn {
        padding: 6px 12px;
        border-radius: 6px;
        border: 1px solid var(--border-color);
        background: white;
        color: var(--text-secondary);
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .action-btn:hover {
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-color: var(--tchad-blue);
    }

    .pagination {
        display: flex;
        justify-content: center;
        gap: 8px;
        padding: 20px;
    }

    .pagination a,
    .pagination span {
        padding: 8px 16px;
        border-radius: 6px;
        border: 1px solid var(--border-color);
        background: white;
        color: var(--text-secondary);
        text-decoration: none;
        transition: all 0.2s;
    }

    .pagination a:hover {
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-color: var(--tchad-blue);
    }

    .pagination .active {
        background: var(--accent-gradient);
        color: white;
        border-color: transparent;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 192
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 193
        yield "<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h2>Décaissements</h2>
            <p>Gestion des décaissements et paiements</p>
        </div>
    </div>

    ";
        // line 202
        yield "    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon warning\">
                    <i data-lucide=\"clock\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 209
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "en_attente", [], "array", false, true, false, 209), "nombre", [], "any", true, true, false, 209) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 209, $this->source); })()), "en_attente", [], "array", false, false, false, 209), "nombre", [], "any", false, false, false, 209)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 209, $this->source); })()), "en_attente", [], "array", false, false, false, 209), "nombre", [], "any", false, false, false, 209), "html", null, true)) : (0));
        yield "</div>
            <div class=\"stat-label\">En attente</div>
            <div class=\"stat-amount\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "en_attente", [], "array", false, true, false, 211), "total", [], "any", true, true, false, 211) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 211, $this->source); })()), "en_attente", [], "array", false, false, false, 211), "total", [], "any", false, false, false, 211)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 211, $this->source); })()), "en_attente", [], "array", false, false, false, 211), "total", [], "any", false, false, false, 211)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon info\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 220
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "valide", [], "array", false, true, false, 220), "nombre", [], "any", true, true, false, 220) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 220, $this->source); })()), "valide", [], "array", false, false, false, 220), "nombre", [], "any", false, false, false, 220)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 220, $this->source); })()), "valide", [], "array", false, false, false, 220), "nombre", [], "any", false, false, false, 220), "html", null, true)) : (0));
        yield "</div>
            <div class=\"stat-label\">Validés</div>
            <div class=\"stat-amount\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "valide", [], "array", false, true, false, 222), "total", [], "any", true, true, false, 222) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 222, $this->source); })()), "valide", [], "array", false, false, false, 222), "total", [], "any", false, false, false, 222)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 222, $this->source); })()), "valide", [], "array", false, false, false, 222), "total", [], "any", false, false, false, 222)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon success\">
                    <i data-lucide=\"trending-up\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 231
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "execute", [], "array", false, true, false, 231), "nombre", [], "any", true, true, false, 231) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 231, $this->source); })()), "execute", [], "array", false, false, false, 231), "nombre", [], "any", false, false, false, 231)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 231, $this->source); })()), "execute", [], "array", false, false, false, 231), "nombre", [], "any", false, false, false, 231), "html", null, true)) : (0));
        yield "</div>
            <div class=\"stat-label\">Exécutés</div>
            <div class=\"stat-amount\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "execute", [], "array", false, true, false, 233), "total", [], "any", true, true, false, 233) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 233, $this->source); })()), "execute", [], "array", false, false, false, 233), "total", [], "any", false, false, false, 233)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 233, $this->source); })()), "execute", [], "array", false, false, false, 233), "total", [], "any", false, false, false, 233)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon danger\">
                    <i data-lucide=\"x-circle\"></i>
                </div>
            </div>
            <div class=\"stat-value\">";
        // line 242
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "rejete", [], "array", false, true, false, 242), "nombre", [], "any", true, true, false, 242) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 242, $this->source); })()), "rejete", [], "array", false, false, false, 242), "nombre", [], "any", false, false, false, 242)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 242, $this->source); })()), "rejete", [], "array", false, false, false, 242), "nombre", [], "any", false, false, false, 242), "html", null, true)) : (0));
        yield "</div>
            <div class=\"stat-label\">Rejetés</div>
            <div class=\"stat-amount\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["statistiques"] ?? null), "rejete", [], "array", false, true, false, 244), "total", [], "any", true, true, false, 244) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 244, $this->source); })()), "rejete", [], "array", false, false, false, 244), "total", [], "any", false, false, false, 244)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 244, $this->source); })()), "rejete", [], "array", false, false, false, 244), "total", [], "any", false, false, false, 244)) : (0)), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
        </div>
    </div>

    ";
        // line 249
        yield "    <div class=\"table-card\">
        <div class=\"table-header\">
            <div class=\"table-title\">
                <h3>Liste des décaissements</h3>
            </div>
            <a href=\"";
        // line 254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_new");
        yield "\" class=\"btn-primary\">
                <i data-lucide=\"plus\"></i>
                Nouveau décaissement
            </a>
        </div>

        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Projet</th>
                    <th>Bénéficiaire</th>
                    <th>Montant</th>
                    <th>Date demande</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["decaissements"]) || array_key_exists("decaissements", $context) ? $context["decaissements"] : (function () { throw new RuntimeError('Variable "decaissements" does not exist.', 273, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["decaissement"]) {
            // line 274
            yield "                <tr>
                    <td><strong>";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "reference", [], "any", false, false, false, 275), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "project", [], "any", false, false, false, 276), "name", [], "any", false, false, false, 276), 0, 40), "html", null, true);
            yield "...</td>
                    <td>";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "beneficiaire", [], "any", false, false, false, 277), "html", null, true);
            yield "</td>
                    <td><strong>";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "montantFormate", [], "any", false, false, false, 278), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "dateDemande", [], "any", false, false, false, 279), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td>
                        <span class=\"status-badge ";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "statutBadgeClass", [], "any", false, false, false, 281), "html", null, true);
            yield "\">
                            ";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "statutLabel", [], "any", false, false, false, 282), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td>
                        <a href=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "id", [], "any", false, false, false, 286)]), "html", null, true);
            yield "\" class=\"action-btn\">
                            Voir
                        </a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 291
        if (!$context['_iterated']) {
            // line 292
            yield "                <tr>
                    <td colspan=\"7\" style=\"text-align: center; padding: 40px; color: var(--text-muted);\">
                        Aucun décaissement enregistré
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['decaissement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        yield "            </tbody>
        </table>

        ";
        // line 302
        yield "        ";
        if (((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 302, $this->source); })()) > 1)) {
            // line 303
            yield "        <div class=\"pagination\">
            ";
            // line 304
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 304, $this->source); })()) > 1)) {
                // line 305
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 305, $this->source); })()) - 1)]), "html", null, true);
                yield "\">Précédent</a>
            ";
            }
            // line 307
            yield "
            ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 308, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 309
                yield "                ";
                if (($context["i"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 309, $this->source); })()))) {
                    // line 310
                    yield "                    <span class=\"active\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</span>
                ";
                } else {
                    // line 312
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["page" => $context["i"]]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                ";
                }
                // line 314
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            yield "
            ";
            // line 316
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 316, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 316, $this->source); })()))) {
                // line 317
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decaissement_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 317, $this->source); })()) + 1)]), "html", null, true);
                yield "\">Suivant</a>
            ";
            }
            // line 319
            yield "        </div>
        ";
        }
        // line 321
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "decaissement/index.html.twig";
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
        return array (  526 => 321,  522 => 319,  516 => 317,  514 => 316,  511 => 315,  505 => 314,  497 => 312,  491 => 310,  488 => 309,  484 => 308,  481 => 307,  475 => 305,  473 => 304,  470 => 303,  467 => 302,  462 => 298,  451 => 292,  449 => 291,  439 => 286,  432 => 282,  428 => 281,  423 => 279,  419 => 278,  415 => 277,  411 => 276,  407 => 275,  404 => 274,  399 => 273,  377 => 254,  370 => 249,  363 => 244,  358 => 242,  346 => 233,  341 => 231,  329 => 222,  324 => 220,  312 => 211,  307 => 209,  298 => 202,  288 => 193,  278 => 192,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Décaissements - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 32px;
    }

    .stat-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 20px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .stat-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
    }

    .stat-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .stat-icon.warning { background: rgba(245, 158, 11, 0.15); color: #f59e0b; }
    .stat-icon.info { background: rgba(59, 130, 246, 0.15); color: #3b82f6; }
    .stat-icon.success { background: rgba(16, 185, 129, 0.15); color: #10b981; }
    .stat-icon.danger { background: rgba(239, 68, 68, 0.15); color: #ef4444; }

    .stat-value {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .table-card {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
    }

    .table-header {
        padding: 20px 24px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .table-title h3 {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: var(--accent-gradient);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        transition: transform 0.2s;
    }

    .btn-primary:hover {
        transform: translateY(-1px);
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table thead th {
        padding: 16px 24px;
        text-align: left;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--text-muted);
        background: var(--bg-tertiary);
        border-bottom: 1px solid var(--border-color);
    }

    .data-table tbody td {
        padding: 16px 24px;
        border-bottom: 1px solid var(--border-color);
        font-size: 0.9rem;
    }

    .data-table tbody tr:hover {
        background: var(--bg-tertiary);
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .status-badge.warning { background: rgba(245, 158, 11, 0.15); color: #f59e0b; }
    .status-badge.info { background: rgba(59, 130, 246, 0.15); color: #3b82f6; }
    .status-badge.success { background: rgba(16, 185, 129, 0.15); color: #10b981; }
    .status-badge.danger { background: rgba(239, 68, 68, 0.15); color: #ef4444; }
    .status-badge.secondary { background: rgba(100, 116, 139, 0.15); color: #64748b; }

    .action-btn {
        padding: 6px 12px;
        border-radius: 6px;
        border: 1px solid var(--border-color);
        background: white;
        color: var(--text-secondary);
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .action-btn:hover {
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-color: var(--tchad-blue);
    }

    .pagination {
        display: flex;
        justify-content: center;
        gap: 8px;
        padding: 20px;
    }

    .pagination a,
    .pagination span {
        padding: 8px 16px;
        border-radius: 6px;
        border: 1px solid var(--border-color);
        background: white;
        color: var(--text-secondary);
        text-decoration: none;
        transition: all 0.2s;
    }

    .pagination a:hover {
        background: var(--bg-tertiary);
        color: var(--tchad-blue);
        border-color: var(--tchad-blue);
    }

    .pagination .active {
        background: var(--accent-gradient);
        color: white;
        border-color: transparent;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h2>Décaissements</h2>
            <p>Gestion des décaissements et paiements</p>
        </div>
    </div>

    {# Statistiques #}
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon warning\">
                    <i data-lucide=\"clock\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ statistiques['en_attente'].nombre ?? 0 }}</div>
            <div class=\"stat-label\">En attente</div>
            <div class=\"stat-amount\">{{ (statistiques['en_attente'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon info\">
                    <i data-lucide=\"check-circle\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ statistiques['valide'].nombre ?? 0 }}</div>
            <div class=\"stat-label\">Validés</div>
            <div class=\"stat-amount\">{{ (statistiques['valide'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon success\">
                    <i data-lucide=\"trending-up\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ statistiques['execute'].nombre ?? 0 }}</div>
            <div class=\"stat-label\">Exécutés</div>
            <div class=\"stat-amount\">{{ (statistiques['execute'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-header\">
                <div class=\"stat-icon danger\">
                    <i data-lucide=\"x-circle\"></i>
                </div>
            </div>
            <div class=\"stat-value\">{{ statistiques['rejete'].nombre ?? 0 }}</div>
            <div class=\"stat-label\">Rejetés</div>
            <div class=\"stat-amount\">{{ (statistiques['rejete'].total ?? 0)|number_format(0, ',', ' ') }} FCFA</div>
        </div>
    </div>

    {# Table des décaissements #}
    <div class=\"table-card\">
        <div class=\"table-header\">
            <div class=\"table-title\">
                <h3>Liste des décaissements</h3>
            </div>
            <a href=\"{{ path('app_decaissement_new') }}\" class=\"btn-primary\">
                <i data-lucide=\"plus\"></i>
                Nouveau décaissement
            </a>
        </div>

        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Projet</th>
                    <th>Bénéficiaire</th>
                    <th>Montant</th>
                    <th>Date demande</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for decaissement in decaissements %}
                <tr>
                    <td><strong>{{ decaissement.reference }}</strong></td>
                    <td>{{ decaissement.project.name|slice(0, 40) }}...</td>
                    <td>{{ decaissement.beneficiaire }}</td>
                    <td><strong>{{ decaissement.montantFormate }}</strong></td>
                    <td>{{ decaissement.dateDemande|date('d/m/Y') }}</td>
                    <td>
                        <span class=\"status-badge {{ decaissement.statutBadgeClass }}\">
                            {{ decaissement.statutLabel }}
                        </span>
                    </td>
                    <td>
                        <a href=\"{{ path('app_decaissement_show', {'id': decaissement.id}) }}\" class=\"action-btn\">
                            Voir
                        </a>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"7\" style=\"text-align: center; padding: 40px; color: var(--text-muted);\">
                        Aucun décaissement enregistré
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>

        {# Pagination #}
        {% if total_pages > 1 %}
        <div class=\"pagination\">
            {% if page > 1 %}
                <a href=\"{{ path('app_decaissement_index', {'page': page - 1}) }}\">Précédent</a>
            {% endif %}

            {% for i in 1..total_pages %}
                {% if i == page %}
                    <span class=\"active\">{{ i }}</span>
                {% else %}
                    <a href=\"{{ path('app_decaissement_index', {'page': i}) }}\">{{ i }}</a>
                {% endif %}
            {% endfor %}

            {% if page < total_pages %}
                <a href=\"{{ path('app_decaissement_index', {'page': page + 1}) }}\">Suivant</a>
            {% endif %}
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "decaissement/index.html.twig", "/home/xdevcorp/Projects/sigep/templates/decaissement/index.html.twig");
    }
}
