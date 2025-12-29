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

/* user/index.html.twig */
class __TwigTemplate_426cd7414430d37b063f78a35bef6e72 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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

        yield "Gestion des Utilisateurs - SIGEP Tchad";
        
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
        :root {
            --tchad-blue: #002664;
            --tchad-gold: #FECB00;
            --tchad-red: #C60C30;
            --primary-gradient: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            --gold-gradient: linear-gradient(135deg, var(--tchad-gold) 0%, #ffd700 100%);
        }

        .page-header {
            background: var(--primary-gradient);
            color: white;
            padding: 2.5rem 0;
            margin-bottom: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 38, 100, 0.15);
        }

        .page-header h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            opacity: 0.9;
            margin-bottom: 0;
        }

        .institution-banner {
            background: linear-gradient(135deg, var(--tchad-red) 0%, #e01845 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(198, 12, 48, 0.2);
            animation: slideInDown 0.5s ease-out;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--card-color, var(--tchad-blue));
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        }

        .stat-card.primary { --card-color: var(--tchad-blue); }
        .stat-card.success { --card-color: #28a745; }
        .stat-card.warning { --card-color: var(--tchad-gold); }
        .stat-card.danger { --card-color: var(--tchad-red); }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            background: var(--card-color, var(--tchad-blue));
            color: white;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--card-color, var(--tchad-blue));
            margin-bottom: 0.25rem;
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .search-filters {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .table-container {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: var(--tchad-blue);
            color: white;
            font-weight: 600;
            border: none;
            padding: 1rem;
        }

        .table tbody tr {
            transition: background-color 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .user-avatar-cell {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--tchad-gold);
        }

        .user-initials {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .badge-role {
            padding: 0.35rem 0.75rem;
            border-radius: 0.35rem;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            margin-right: 0.25rem;
        }

        .badge-role.admin {
            background-color: var(--tchad-red);
            color: white;
        }

        .badge-role.manager {
            background-color: var(--tchad-gold);
            color: #333;
        }

        .badge-role.user {
            background-color: var(--tchad-blue);
            color: white;
        }

        .status-badge {
            padding: 0.35rem 0.75rem;
            border-radius: 0.35rem;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        .status-badge.verified {
            background-color: #d4edda;
            color: #155724;
        }

        .status-badge.unverified {
            background-color: #fff3cd;
            color: #856404;
        }

        .btn-group-actions {
            display: flex;
            gap: 0.25rem;
        }

        .btn-action {
            width: 32px;
            height: 32px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.35rem;
            transition: all 0.2s ease;
        }

        .btn-action:hover {
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            opacity: 0.3;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .modal-header {
            background: var(--primary-gradient);
            color: white;
            border: none;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }

        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: 1fr;
            }

            .table-responsive {
                font-size: 0.875rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 291
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 292
        yield "<div class=\"container-fluid px-4\">
    ";
        // line 294
        yield "    <div class=\"page-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <h1>
                    <i data-lucide=\"users\" style=\"width: 36px; height: 36px; vertical-align: middle;\"></i>
                    Gestion des Utilisateurs
                </h1>
                <p>Administration et suivi des comptes utilisateurs</p>
            </div>
            <div>
                <a href=\"";
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-light btn-lg\">
                    <i data-lucide=\"user-plus\" style=\"width: 20px; height: 20px;\"></i>
                    Nouvel Utilisateur
                </a>
            </div>
        </div>
    </div>

    ";
        // line 313
        yield "    ";
        if ((($tmp = (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 313, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 314
            yield "    <div class=\"institution-banner\">
        <div class=\"d-flex align-items-center justify-content-between\">
            <div class=\"d-flex align-items-center gap-3\">
                <i data-lucide=\"building\" style=\"width: 48px; height: 48px;\"></i>
                <div>
                    <h4 class=\"mb-1\" style=\"font-weight: 600;\">";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 319, $this->source); })()), "name", [], "any", false, false, false, 319), "html", null, true);
            yield "</h4>
                    <p class=\"mb-0\" style=\"opacity: 0.9;\">
                        ";
            // line 321
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 321, $this->source); })()), "acronym", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 321, $this->source); })()), "acronym", [], "any", false, false, false, 321) . " - "), "html", null, true)) : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 321, $this->source); })()), "typeInstitution", [], "any", false, false, false, 321), "name", [], "any", false, false, false, 321), "html", null, true);
            yield "
                    </p>
                </div>
            </div>
            <div class=\"text-end\">
                <div style=\"opacity: 0.8; font-size: 0.9rem;\">Total utilisateurs</div>
                <div style=\"font-size: 2.5rem; font-weight: 700;\">";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 327, $this->source); })()), "total", [], "any", false, false, false, 327), "html", null, true);
            yield "</div>
            </div>
        </div>
    </div>
    ";
        }
        // line 332
        yield "
    ";
        // line 334
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "flashes", [], "any", false, false, false, 334));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 335
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 336
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                <i data-lucide=\"";
                // line 337
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "error")) {
                    yield "x-circle";
                } else {
                    yield "info";
                }
                yield "\" style=\"width: 20px; height: 20px;\"></i>
                ";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 342
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        yield "
    ";
        // line 345
        yield "    <div class=\"stats-container\">
        <div class=\"stat-card primary\">
            <div class=\"stat-icon\">
                <i data-lucide=\"users\"></i>
            </div>
            <div class=\"stat-value\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 350, $this->source); })()), "total", [], "any", false, false, false, 350), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Total Utilisateurs</div>
        </div>

        <div class=\"stat-card success\">
            <div class=\"stat-icon\">
                <i data-lucide=\"user-check\"></i>
            </div>
            <div class=\"stat-value\">";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 358, $this->source); })()), "verified", [], "any", false, false, false, 358), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Comptes Vérifiés</div>
        </div>

        <div class=\"stat-card warning\">
            <div class=\"stat-icon\">
                <i data-lucide=\"user-x\"></i>
            </div>
            <div class=\"stat-value\">";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 366, $this->source); })()), "unverified", [], "any", false, false, false, 366), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">En Attente</div>
        </div>

        <div class=\"stat-card danger\">
            <div class=\"stat-icon\">
                <i data-lucide=\"shield\"></i>
            </div>
            <div class=\"stat-value\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 374, $this->source); })()), "admins", [], "any", false, false, false, 374), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Administrateurs</div>
        </div>
    </div>

    ";
        // line 380
        yield "    <div class=\"search-filters\">
        <div class=\"row g-3\">
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\">
                        <i data-lucide=\"search\" style=\"width: 18px; height: 18px;\"></i>
                    </span>
                    <input type=\"text\" 
                           class=\"form-control\" 
                           id=\"searchInput\" 
                           placeholder=\"Rechercher par nom, email ou matricule...\">
                </div>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-select\" id=\"roleFilter\">
                    <option value=\"\">Tous les rôles</option>
                    <option value=\"ROLE_ADMIN\">Administrateurs</option>
                    <option value=\"ROLE_MANAGER\">Gestionnaires</option>
                    <option value=\"ROLE_USER\">Utilisateurs</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-select\" id=\"statusFilter\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"verified\">Vérifiés</option>
                    <option value=\"unverified\">En attente</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary w-100\" onclick=\"resetFilters()\">
                    <i data-lucide=\"rotate-ccw\" style=\"width: 18px; height: 18px;\"></i>
                    Réinitialiser
                </button>
            </div>
        </div>
    </div>

    ";
        // line 418
        yield "    <div class=\"table-container\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\" id=\"usersTable\">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Email</th>
                        <th>Matricule</th>
                        <th>Rôles</th>
                        <th>Statut</th>
                        <th>Département</th>
                        <th>Créé le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 434, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 435
            yield "                    <tr data-user-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 435), "html", null, true);
            yield "\">
                        <td>
                            <div class=\"user-avatar-cell\">
                                ";
            // line 438
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 439
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 439))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 440
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 440), "html", null, true);
                yield "\" 
                                         class=\"user-avatar\">
                                ";
            } else {
                // line 443
                yield "                                    <div class=\"user-initials\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "initials", [], "any", false, false, false, 443), "html", null, true);
                yield "</div>
                                ";
            }
            // line 445
            yield "                                <div>
                                    <div style=\"font-weight: 600;\">";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 446), "html", null, true);
            yield "</div>
                                    ";
            // line 447
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "accessLevel", [], "any", false, false, false, 447)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 448
                yield "                                        <small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "accessLevelLabel", [], "any", false, false, false, 448), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 450
            yield "                                </div>
                            </div>
                        </td>
                        <td>";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 453), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 455
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "matricule", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "                                <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "matricule", [], "any", false, false, false, 456), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 458
                yield "                                <span class=\"text-muted\">—</span>
                            ";
            }
            // line 460
            yield "                        </td>
                        <td>
                            ";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 462));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 463
                yield "                                ";
                if (($context["role"] != "ROLE_USER")) {
                    // line 464
                    yield "                                    <span class=\"badge-role ";
                    yield (((($context["role"] == "ROLE_ADMIN") || ($context["role"] == "ROLE_SUPER_ADMIN"))) ? ("admin") : (((($context["role"] == "ROLE_MANAGER")) ? ("manager") : ("user"))));
                    yield "\">
                                        <i data-lucide=\"";
                    // line 465
                    if ((($context["role"] == "ROLE_ADMIN") || ($context["role"] == "ROLE_SUPER_ADMIN"))) {
                        yield "shield";
                    } elseif (($context["role"] == "ROLE_MANAGER")) {
                        yield "briefcase";
                    } else {
                        yield "user";
                    }
                    yield "\" style=\"width: 14px; height: 14px;\"></i>
                                        ";
                    // line 466
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => "", "_" => " "])), "html", null, true);
                    yield "
                                    </span>
                                ";
                }
                // line 469
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            yield "                        </td>
                        <td>
                            <span class=\"status-badge ";
            // line 472
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 472)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("verified") : ("unverified"));
            yield "\">
                                <i data-lucide=\"";
            // line 473
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 473)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "check-circle";
            } else {
                yield "clock";
            }
            yield "\" style=\"width: 14px; height: 14px;\"></i>
                                ";
            // line 474
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 474)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vérifié") : ("En attente"));
            yield "
                            </span>
                        </td>
                        <td>";
            // line 477
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "department", [], "any", true, true, false, 477) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "department", [], "any", false, false, false, 477)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "department", [], "any", false, false, false, 477), "html", null, true)) : ("—"));
            yield "</td>
                        <td>";
            // line 478
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 478)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 478), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
                        <td>
                            <div class=\"btn-group-actions\">
                                <a href=\"";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 481)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-sm btn-outline-info btn-action\"
                                   title=\"Voir le détail\">
                                    <i data-lucide=\"eye\" style=\"width: 16px; height: 16px;\"></i>
                                </a>
                                <a href=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 486)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-sm btn-outline-primary btn-action\"
                                   title=\"Modifier\">
                                    <i data-lucide=\"edit\" style=\"width: 16px; height: 16px;\"></i>
                                </a>
                                <button type=\"button\" 
                                        class=\"btn btn-sm btn-outline-warning btn-action\"
                                        data-bs-toggle=\"modal\"
                                        data-bs-target=\"#toggleModal";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 494), "html", null, true);
            yield "\"
                                        title=\"Changer le statut\">
                                    <i data-lucide=\"";
            // line 496
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "user-x";
            } else {
                yield "user-check";
            }
            yield "\" style=\"width: 16px; height: 16px;\"></i>
                                </button>
                                <button type=\"button\" 
                                        class=\"btn btn-sm btn-outline-danger btn-action\"
                                        data-bs-toggle=\"modal\"
                                        data-bs-target=\"#deleteModal";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 501), "html", null, true);
            yield "\"
                                        title=\"Supprimer\">
                                    <i data-lucide=\"trash-2\" style=\"width: 16px; height: 16px;\"></i>
                                </button>
                            </div>

                            ";
            // line 508
            yield "                            <div class=\"modal fade\" id=\"toggleModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 508), "html", null, true);
            yield "\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">
                                                <i data-lucide=\"alert-circle\" style=\"width: 20px; height: 20px;\"></i>
                                                Confirmation
                                            </h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>Voulez-vous vraiment <strong>";
            // line 519
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
            yield "</strong> le compte de :</p>
                                            <p class=\"text-center\">
                                                <strong>";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 521), "html", null, true);
            yield "</strong><br>
                                                <small class=\"text-muted\">";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 522), "html", null, true);
            yield "</small>
                                            </p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 527)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 528
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 528))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"btn btn-";
            // line 529
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 529)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield "\">
                                                    <i data-lucide=\"";
            // line 530
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 530)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "user-x";
            } else {
                yield "user-check";
            }
            yield "\" style=\"width: 16px; height: 16px;\"></i>
                                                    ";
            // line 531
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 531)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 540
            yield "                            <div class=\"modal fade\" id=\"deleteModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 540), "html", null, true);
            yield "\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header bg-danger text-white\">
                                            <h5 class=\"modal-title\">
                                                <i data-lucide=\"alert-triangle\" style=\"width: 20px; height: 20px;\"></i>
                                                Confirmation de suppression
                                            </h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>⚠️ <strong>Attention !</strong> Cette action est irréversible.</p>
                                            <p>Voulez-vous vraiment supprimer le compte de :</p>
                                            <p class=\"text-center\">
                                                <strong>";
            // line 554
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 554), "html", null, true);
            yield "</strong><br>
                                                <small class=\"text-muted\">";
            // line 555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 555), "html", null, true);
            yield "</small>
                                            </p>
                                            <div class=\"alert alert-warning\">
                                                <small>
                                                    <i data-lucide=\"info\" style=\"width: 14px; height: 14px;\"></i>
                                                    Toutes les données associées seront définitivement supprimées.
                                                </small>
                                            </div>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"";
            // line 566
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 566)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 567
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 567))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"btn btn-danger\">
                                                    <i data-lucide=\"trash-2\" style=\"width: 16px; height: 16px;\"></i>
                                                    Supprimer définitivement
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 579
        if (!$context['_iterated']) {
            // line 580
            yield "                    <tr>
                        <td colspan=\"8\">
                            <div class=\"empty-state\">
                                <i data-lucide=\"users\"></i>
                                <h5>Aucun utilisateur trouvé</h5>
                                <p>Commencez par créer votre premier utilisateur</p>
                                <a href=\"";
            // line 586
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-primary mt-3\">
                                    <i data-lucide=\"user-plus\" style=\"width: 18px; height: 18px;\"></i>
                                    Créer un utilisateur
                                </a>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 601
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 602
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        // Initialiser les icônes Lucide
        lucide.createIcons();

        // Fonction de recherche et filtrage
        function filterTable() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const roleFilter = document.getElementById('roleFilter').value;
            const statusFilter = document.getElementById('statusFilter').value;
            
            const rows = document.querySelectorAll('#usersTable tbody tr');
            
            rows.forEach(row => {
                if (row.cells.length === 1) return; // Skip empty state row
                
                const userData = {
                    fullName: row.cells[0].textContent.toLowerCase(),
                    email: row.cells[1].textContent.toLowerCase(),
                    matricule: row.cells[2].textContent.toLowerCase(),
                    roles: row.cells[3].textContent.toLowerCase(),
                    status: row.cells[4].textContent.toLowerCase()
                };
                
                const matchesSearch = !searchTerm || 
                    userData.fullName.includes(searchTerm) ||
                    userData.email.includes(searchTerm) ||
                    userData.matricule.includes(searchTerm);
                    
                const matchesRole = !roleFilter || userData.roles.includes(roleFilter.toLowerCase().replace('role_', ''));
                const matchesStatus = !statusFilter || 
                    (statusFilter === 'verified' && userData.status.includes('vérifié')) ||
                    (statusFilter === 'unverified' && userData.status.includes('attente'));
                
                row.style.display = (matchesSearch && matchesRole && matchesStatus) ? '' : 'none';
            });
        }

        // Fonction de réinitialisation des filtres
        function resetFilters() {
            document.getElementById('searchInput').value = '';
            document.getElementById('roleFilter').value = '';
            document.getElementById('statusFilter').value = '';
            filterTable();
        }

        // Event listeners
        document.getElementById('searchInput').addEventListener('input', filterTable);
        document.getElementById('roleFilter').addEventListener('change', filterTable);
        document.getElementById('statusFilter').addEventListener('change', filterTable);

        // Animation des cartes de statistiques
        document.addEventListener('DOMContentLoaded', function() {
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                card.style.animation = `fadeIn 0.5s ease-out \${index * 0.1}s both`;
            });
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
        return "user/index.html.twig";
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
        return array (  951 => 602,  941 => 601,  928 => 594,  914 => 586,  906 => 580,  904 => 579,  887 => 567,  883 => 566,  869 => 555,  865 => 554,  847 => 540,  836 => 531,  828 => 530,  824 => 529,  820 => 528,  816 => 527,  808 => 522,  804 => 521,  799 => 519,  784 => 508,  775 => 501,  763 => 496,  758 => 494,  747 => 486,  739 => 481,  733 => 478,  729 => 477,  723 => 474,  715 => 473,  711 => 472,  707 => 470,  701 => 469,  695 => 466,  685 => 465,  680 => 464,  677 => 463,  673 => 462,  669 => 460,  665 => 458,  659 => 456,  657 => 455,  652 => 453,  647 => 450,  641 => 448,  639 => 447,  635 => 446,  632 => 445,  626 => 443,  620 => 440,  615 => 439,  613 => 438,  606 => 435,  601 => 434,  583 => 418,  544 => 380,  536 => 374,  525 => 366,  514 => 358,  503 => 350,  496 => 345,  493 => 343,  487 => 342,  477 => 338,  467 => 337,  462 => 336,  457 => 335,  452 => 334,  449 => 332,  441 => 327,  431 => 321,  426 => 319,  419 => 314,  416 => 313,  405 => 304,  393 => 294,  390 => 292,  380 => 291,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Utilisateurs - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --tchad-blue: #002664;
            --tchad-gold: #FECB00;
            --tchad-red: #C60C30;
            --primary-gradient: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            --gold-gradient: linear-gradient(135deg, var(--tchad-gold) 0%, #ffd700 100%);
        }

        .page-header {
            background: var(--primary-gradient);
            color: white;
            padding: 2.5rem 0;
            margin-bottom: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 38, 100, 0.15);
        }

        .page-header h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            opacity: 0.9;
            margin-bottom: 0;
        }

        .institution-banner {
            background: linear-gradient(135deg, var(--tchad-red) 0%, #e01845 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(198, 12, 48, 0.2);
            animation: slideInDown 0.5s ease-out;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--card-color, var(--tchad-blue));
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        }

        .stat-card.primary { --card-color: var(--tchad-blue); }
        .stat-card.success { --card-color: #28a745; }
        .stat-card.warning { --card-color: var(--tchad-gold); }
        .stat-card.danger { --card-color: var(--tchad-red); }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            background: var(--card-color, var(--tchad-blue));
            color: white;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--card-color, var(--tchad-blue));
            margin-bottom: 0.25rem;
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .search-filters {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .table-container {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: var(--tchad-blue);
            color: white;
            font-weight: 600;
            border: none;
            padding: 1rem;
        }

        .table tbody tr {
            transition: background-color 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .user-avatar-cell {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--tchad-gold);
        }

        .user-initials {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .badge-role {
            padding: 0.35rem 0.75rem;
            border-radius: 0.35rem;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            margin-right: 0.25rem;
        }

        .badge-role.admin {
            background-color: var(--tchad-red);
            color: white;
        }

        .badge-role.manager {
            background-color: var(--tchad-gold);
            color: #333;
        }

        .badge-role.user {
            background-color: var(--tchad-blue);
            color: white;
        }

        .status-badge {
            padding: 0.35rem 0.75rem;
            border-radius: 0.35rem;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        .status-badge.verified {
            background-color: #d4edda;
            color: #155724;
        }

        .status-badge.unverified {
            background-color: #fff3cd;
            color: #856404;
        }

        .btn-group-actions {
            display: flex;
            gap: 0.25rem;
        }

        .btn-action {
            width: 32px;
            height: 32px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.35rem;
            transition: all 0.2s ease;
        }

        .btn-action:hover {
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            opacity: 0.3;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .modal-header {
            background: var(--primary-gradient);
            color: white;
            border: none;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }

        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: 1fr;
            }

            .table-responsive {
                font-size: 0.875rem;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    {# En-tête de page #}
    <div class=\"page-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <h1>
                    <i data-lucide=\"users\" style=\"width: 36px; height: 36px; vertical-align: middle;\"></i>
                    Gestion des Utilisateurs
                </h1>
                <p>Administration et suivi des comptes utilisateurs</p>
            </div>
            <div>
                <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-light btn-lg\">
                    <i data-lucide=\"user-plus\" style=\"width: 20px; height: 20px;\"></i>
                    Nouvel Utilisateur
                </a>
            </div>
        </div>
    </div>

    {# Bannière Institution #}
    {% if institution %}
    <div class=\"institution-banner\">
        <div class=\"d-flex align-items-center justify-content-between\">
            <div class=\"d-flex align-items-center gap-3\">
                <i data-lucide=\"building\" style=\"width: 48px; height: 48px;\"></i>
                <div>
                    <h4 class=\"mb-1\" style=\"font-weight: 600;\">{{ institution.name }}</h4>
                    <p class=\"mb-0\" style=\"opacity: 0.9;\">
                        {{ institution.acronym ? institution.acronym ~ ' - ' : '' }}{{ institution.typeInstitution.name }}
                    </p>
                </div>
            </div>
            <div class=\"text-end\">
                <div style=\"opacity: 0.8; font-size: 0.9rem;\">Total utilisateurs</div>
                <div style=\"font-size: 2.5rem; font-weight: 700;\">{{ stats.total }}</div>
            </div>
        </div>
    </div>
    {% endif %}

    {# Messages Flash #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                <i data-lucide=\"{% if label == 'success' %}check-circle{% elseif label == 'error' %}x-circle{% else %}info{% endif %}\" style=\"width: 20px; height: 20px;\"></i>
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {# Statistiques #}
    <div class=\"stats-container\">
        <div class=\"stat-card primary\">
            <div class=\"stat-icon\">
                <i data-lucide=\"users\"></i>
            </div>
            <div class=\"stat-value\">{{ stats.total }}</div>
            <div class=\"stat-label\">Total Utilisateurs</div>
        </div>

        <div class=\"stat-card success\">
            <div class=\"stat-icon\">
                <i data-lucide=\"user-check\"></i>
            </div>
            <div class=\"stat-value\">{{ stats.verified }}</div>
            <div class=\"stat-label\">Comptes Vérifiés</div>
        </div>

        <div class=\"stat-card warning\">
            <div class=\"stat-icon\">
                <i data-lucide=\"user-x\"></i>
            </div>
            <div class=\"stat-value\">{{ stats.unverified }}</div>
            <div class=\"stat-label\">En Attente</div>
        </div>

        <div class=\"stat-card danger\">
            <div class=\"stat-icon\">
                <i data-lucide=\"shield\"></i>
            </div>
            <div class=\"stat-value\">{{ stats.admins }}</div>
            <div class=\"stat-label\">Administrateurs</div>
        </div>
    </div>

    {# Filtres et Recherche #}
    <div class=\"search-filters\">
        <div class=\"row g-3\">
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\">
                        <i data-lucide=\"search\" style=\"width: 18px; height: 18px;\"></i>
                    </span>
                    <input type=\"text\" 
                           class=\"form-control\" 
                           id=\"searchInput\" 
                           placeholder=\"Rechercher par nom, email ou matricule...\">
                </div>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-select\" id=\"roleFilter\">
                    <option value=\"\">Tous les rôles</option>
                    <option value=\"ROLE_ADMIN\">Administrateurs</option>
                    <option value=\"ROLE_MANAGER\">Gestionnaires</option>
                    <option value=\"ROLE_USER\">Utilisateurs</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-select\" id=\"statusFilter\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"verified\">Vérifiés</option>
                    <option value=\"unverified\">En attente</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary w-100\" onclick=\"resetFilters()\">
                    <i data-lucide=\"rotate-ccw\" style=\"width: 18px; height: 18px;\"></i>
                    Réinitialiser
                </button>
            </div>
        </div>
    </div>

    {# Table des utilisateurs #}
    <div class=\"table-container\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\" id=\"usersTable\">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Email</th>
                        <th>Matricule</th>
                        <th>Rôles</th>
                        <th>Statut</th>
                        <th>Département</th>
                        <th>Créé le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                    <tr data-user-id=\"{{ user.id }}\">
                        <td>
                            <div class=\"user-avatar-cell\">
                                {% if user.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" 
                                         alt=\"{{ user.fullName }}\" 
                                         class=\"user-avatar\">
                                {% else %}
                                    <div class=\"user-initials\">{{ user.initials }}</div>
                                {% endif %}
                                <div>
                                    <div style=\"font-weight: 600;\">{{ user.fullName }}</div>
                                    {% if user.accessLevel %}
                                        <small class=\"text-muted\">{{ user.accessLevelLabel }}</small>
                                    {% endif %}
                                </div>
                            </div>
                        </td>
                        <td>{{ user.email }}</td>
                        <td>
                            {% if user.matricule %}
                                <span class=\"badge bg-secondary\">{{ user.matricule }}</span>
                            {% else %}
                                <span class=\"text-muted\">—</span>
                            {% endif %}
                        </td>
                        <td>
                            {% for role in user.roles %}
                                {% if role != 'ROLE_USER' %}
                                    <span class=\"badge-role {{ role == 'ROLE_ADMIN' or role == 'ROLE_SUPER_ADMIN' ? 'admin' : (role == 'ROLE_MANAGER' ? 'manager' : 'user') }}\">
                                        <i data-lucide=\"{% if role == 'ROLE_ADMIN' or role == 'ROLE_SUPER_ADMIN' %}shield{% elseif role == 'ROLE_MANAGER' %}briefcase{% else %}user{% endif %}\" style=\"width: 14px; height: 14px;\"></i>
                                        {{ role|replace({'ROLE_': '', '_': ' '})|title }}
                                    </span>
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td>
                            <span class=\"status-badge {{ user.isVerified ? 'verified' : 'unverified' }}\">
                                <i data-lucide=\"{% if user.isVerified %}check-circle{% else %}clock{% endif %}\" style=\"width: 14px; height: 14px;\"></i>
                                {{ user.isVerified ? 'Vérifié' : 'En attente' }}
                            </span>
                        </td>
                        <td>{{ user.department ?? '—' }}</td>
                        <td>{{ user.createdAt ? user.createdAt|date('d/m/Y') : '—' }}</td>
                        <td>
                            <div class=\"btn-group-actions\">
                                <a href=\"{{ path('app_user_show', {id: user.id}) }}\" 
                                   class=\"btn btn-sm btn-outline-info btn-action\"
                                   title=\"Voir le détail\">
                                    <i data-lucide=\"eye\" style=\"width: 16px; height: 16px;\"></i>
                                </a>
                                <a href=\"{{ path('app_user_edit', {id: user.id}) }}\" 
                                   class=\"btn btn-sm btn-outline-primary btn-action\"
                                   title=\"Modifier\">
                                    <i data-lucide=\"edit\" style=\"width: 16px; height: 16px;\"></i>
                                </a>
                                <button type=\"button\" 
                                        class=\"btn btn-sm btn-outline-warning btn-action\"
                                        data-bs-toggle=\"modal\"
                                        data-bs-target=\"#toggleModal{{ user.id }}\"
                                        title=\"Changer le statut\">
                                    <i data-lucide=\"{% if user.isVerified %}user-x{% else %}user-check{% endif %}\" style=\"width: 16px; height: 16px;\"></i>
                                </button>
                                <button type=\"button\" 
                                        class=\"btn btn-sm btn-outline-danger btn-action\"
                                        data-bs-toggle=\"modal\"
                                        data-bs-target=\"#deleteModal{{ user.id }}\"
                                        title=\"Supprimer\">
                                    <i data-lucide=\"trash-2\" style=\"width: 16px; height: 16px;\"></i>
                                </button>
                            </div>

                            {# Modal Toggle Status #}
                            <div class=\"modal fade\" id=\"toggleModal{{ user.id }}\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">
                                                <i data-lucide=\"alert-circle\" style=\"width: 20px; height: 20px;\"></i>
                                                Confirmation
                                            </h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>Voulez-vous vraiment <strong>{{ user.isVerified ? 'désactiver' : 'activer' }}</strong> le compte de :</p>
                                            <p class=\"text-center\">
                                                <strong>{{ user.fullName }}</strong><br>
                                                <small class=\"text-muted\">{{ user.email }}</small>
                                            </p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"{{ path('app_user_toggle_status', {id: user.id}) }}\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ user.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-{{ user.isVerified ? 'warning' : 'success' }}\">
                                                    <i data-lucide=\"{% if user.isVerified %}user-x{% else %}user-check{% endif %}\" style=\"width: 16px; height: 16px;\"></i>
                                                    {{ user.isVerified ? 'Désactiver' : 'Activer' }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {# Modal Delete #}
                            <div class=\"modal fade\" id=\"deleteModal{{ user.id }}\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header bg-danger text-white\">
                                            <h5 class=\"modal-title\">
                                                <i data-lucide=\"alert-triangle\" style=\"width: 20px; height: 20px;\"></i>
                                                Confirmation de suppression
                                            </h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>⚠️ <strong>Attention !</strong> Cette action est irréversible.</p>
                                            <p>Voulez-vous vraiment supprimer le compte de :</p>
                                            <p class=\"text-center\">
                                                <strong>{{ user.fullName }}</strong><br>
                                                <small class=\"text-muted\">{{ user.email }}</small>
                                            </p>
                                            <div class=\"alert alert-warning\">
                                                <small>
                                                    <i data-lucide=\"info\" style=\"width: 14px; height: 14px;\"></i>
                                                    Toutes les données associées seront définitivement supprimées.
                                                </small>
                                            </div>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"{{ path('app_user_delete', {id: user.id}) }}\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-danger\">
                                                    <i data-lucide=\"trash-2\" style=\"width: 16px; height: 16px;\"></i>
                                                    Supprimer définitivement
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"8\">
                            <div class=\"empty-state\">
                                <i data-lucide=\"users\"></i>
                                <h5>Aucun utilisateur trouvé</h5>
                                <p>Commencez par créer votre premier utilisateur</p>
                                <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary mt-3\">
                                    <i data-lucide=\"user-plus\" style=\"width: 18px; height: 18px;\"></i>
                                    Créer un utilisateur
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        // Initialiser les icônes Lucide
        lucide.createIcons();

        // Fonction de recherche et filtrage
        function filterTable() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const roleFilter = document.getElementById('roleFilter').value;
            const statusFilter = document.getElementById('statusFilter').value;
            
            const rows = document.querySelectorAll('#usersTable tbody tr');
            
            rows.forEach(row => {
                if (row.cells.length === 1) return; // Skip empty state row
                
                const userData = {
                    fullName: row.cells[0].textContent.toLowerCase(),
                    email: row.cells[1].textContent.toLowerCase(),
                    matricule: row.cells[2].textContent.toLowerCase(),
                    roles: row.cells[3].textContent.toLowerCase(),
                    status: row.cells[4].textContent.toLowerCase()
                };
                
                const matchesSearch = !searchTerm || 
                    userData.fullName.includes(searchTerm) ||
                    userData.email.includes(searchTerm) ||
                    userData.matricule.includes(searchTerm);
                    
                const matchesRole = !roleFilter || userData.roles.includes(roleFilter.toLowerCase().replace('role_', ''));
                const matchesStatus = !statusFilter || 
                    (statusFilter === 'verified' && userData.status.includes('vérifié')) ||
                    (statusFilter === 'unverified' && userData.status.includes('attente'));
                
                row.style.display = (matchesSearch && matchesRole && matchesStatus) ? '' : 'none';
            });
        }

        // Fonction de réinitialisation des filtres
        function resetFilters() {
            document.getElementById('searchInput').value = '';
            document.getElementById('roleFilter').value = '';
            document.getElementById('statusFilter').value = '';
            filterTable();
        }

        // Event listeners
        document.getElementById('searchInput').addEventListener('input', filterTable);
        document.getElementById('roleFilter').addEventListener('change', filterTable);
        document.getElementById('statusFilter').addEventListener('change', filterTable);

        // Animation des cartes de statistiques
        document.addEventListener('DOMContentLoaded', function() {
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                card.style.animation = `fadeIn 0.5s ease-out \${index * 0.1}s both`;
            });
        });
    </script>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\user\\index.html.twig");
    }
}
