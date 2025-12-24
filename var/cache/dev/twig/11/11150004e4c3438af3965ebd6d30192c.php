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

/* user/show.html.twig */
class __TwigTemplate_eceb4a07de19f09ab94c141fb7f8189e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3), "html", null, true);
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
    <style>
        :root {
            --tchad-blue: #002664;
            --tchad-gold: #FECB00;
            --tchad-red: #C60C30;
        }

        .profile-header {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            padding: 3rem 0;
            border-radius: 0.75rem 0.75rem 0 0;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: rgba(254, 203, 0, 0.1);
            border-radius: 50%;
        }

        .profile-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .profile-avatar-section {
            text-align: center;
            padding: 2rem 0;
            position: relative;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--tchad-gold);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
        }

        .profile-initials {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            font-weight: 700;
            border: 5px solid var(--tchad-gold);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .profile-name {
            font-size: 2rem;
            font-weight: 700;
            margin: 1.5rem 0 0.5rem;
            color: white;
        }

        .profile-role {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 1rem;
        }

        .profile-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1.5rem;
            border-radius: 2rem;
            font-weight: 600;
        }

        .info-section {
            padding: 2rem;
        }

        .info-section-title {
            color: var(--tchad-blue);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-bottom: 2px solid var(--tchad-gold);
            padding-bottom: 0.75rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            border-radius: 0.5rem;
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-content {
            flex: 1;
        }

        .info-label {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 0.25rem;
            font-weight: 600;
        }

        .info-value {
            font-size: 1rem;
            color: #212529;
            font-weight: 500;
        }

        .badge-role-display {
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .badge-role-display.admin {
            background-color: var(--tchad-red);
            color: white;
        }

        .badge-role-display.manager {
            background-color: var(--tchad-gold);
            color: #333;
        }

        .badge-role-display.user {
            background-color: var(--tchad-blue);
            color: white;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            padding: 2rem;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }

        .btn-action-primary {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-action-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 38, 100, 0.3);
            color: white;
        }

        .stats-quick-view {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            padding: 2rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .stat-quick-item {
            text-align: center;
            padding: 1rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .stat-quick-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tchad-blue);
        }

        .stat-quick-label {
            font-size: 0.75rem;
            color: #6c757d;
            text-transform: uppercase;
            font-weight: 600;
            margin-top: 0.25rem;
        }

        .empty-value {
            color: #6c757d;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .profile-name {
                font-size: 1.5rem;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 254
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 255
        yield "<div class=\"container-fluid px-4\">
    ";
        // line 257
        yield "    <div class=\"mb-3\">
        <a href=\"";
        // line 258
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary\">
            <i data-lucide=\"arrow-left\" style=\"width: 18px; height: 18px;\"></i>
            Retour à la liste
        </a>
    </div>

    ";
        // line 265
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "flashes", [], "any", false, false, false, 265));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 266
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 267
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                <i data-lucide=\"";
                // line 268
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "error")) {
                    yield "x-circle";
                } else {
                    yield "info";
                }
                yield "\" style=\"width: 20px; height: 20px;\"></i>
                ";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        yield "
    ";
        // line 276
        yield "    <div class=\"profile-card\">
        ";
        // line 278
        yield "        <div class=\"profile-header\">
            <div class=\"profile-avatar-section\">
                ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 280, $this->source); })()), "avatar", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 281, $this->source); })()), "avatar", [], "any", false, false, false, 281))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 282, $this->source); })()), "fullName", [], "any", false, false, false, 282), "html", null, true);
            yield "\" 
                         class=\"profile-avatar\">
                ";
        } else {
            // line 285
            yield "                    <div class=\"profile-initials\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 285, $this->source); })()), "initials", [], "any", false, false, false, 285), "html", null, true);
            yield "</div>
                ";
        }
        // line 287
        yield "                
                <h1 class=\"profile-name\">";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 288, $this->source); })()), "fullName", [], "any", false, false, false, 288), "html", null, true);
        yield "</h1>
                <div class=\"profile-role\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 289, $this->source); })()), "accessLevelLabel", [], "any", false, false, false, 289), "html", null, true);
        yield "</div>
                
                <div class=\"profile-status\">
                    <i data-lucide=\"";
        // line 292
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 292, $this->source); })()), "isVerified", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "check-circle";
        } else {
            yield "clock";
        }
        yield "\" style=\"width: 18px; height: 18px;\"></i>
                    ";
        // line 293
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 293, $this->source); })()), "isVerified", [], "any", false, false, false, 293)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Compte Vérifié") : ("En Attente de Vérification"));
        yield "
                </div>
            </div>
        </div>

        ";
        // line 299
        yield "        <div class=\"stats-quick-view\">
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 301, $this->source); })()), "roles", [], "any", false, false, false, 301)), "html", null, true);
        yield "</div>
                <div class=\"stat-quick-label\">Rôles</div>
            </div>
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">
                    ";
        // line 306
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 306, $this->source); })()), "createdAt", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 307
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U") - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 307, $this->source); })()), "createdAt", [], "any", false, false, false, 307), "timestamp", [], "any", false, false, false, 307)), "html", null, true);
            yield "
                        ";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U") - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 308, $this->source); })()), "createdAt", [], "any", false, false, false, 308), "timestamp", [], "any", false, false, false, 308)) / 86400)), "html", null, true);
            yield " j
                    ";
        } else {
            // line 310
            yield "                        —
                    ";
        }
        // line 312
        yield "                </div>
                <div class=\"stat-quick-label\">Ancienneté</div>
            </div>
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">
                    <i data-lucide=\"";
        // line 317
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 317, $this->source); })()), "isVerified", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "check";
        } else {
            yield "x";
        }
        yield "\" style=\"width: 24px; height: 24px; color: ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 317, $this->source); })()), "isVerified", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("var(--tchad-blue)") : ("var(--tchad-red)"));
        yield "\"></i>
                </div>
                <div class=\"stat-quick-label\">Statut</div>
            </div>
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">";
        // line 322
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 322, $this->source); })()), "institution", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓") : ("—"));
        yield "</div>
                <div class=\"stat-quick-label\">Institution</div>
            </div>
        </div>

        ";
        // line 328
        yield "        <div class=\"info-section\">
            <h2 class=\"info-section-title\">
                <i data-lucide=\"user\" style=\"width: 24px; height: 24px;\"></i>
                Informations Personnelles
            </h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"mail\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Email</div>
                        <div class=\"info-value\">";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 341, $this->source); })()), "email", [], "any", false, false, false, 341), "html", null, true);
        yield "</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"phone\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Téléphone</div>
                        <div class=\"info-value\">";
        // line 351
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 351) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 351, $this->source); })()), "phone", [], "any", false, false, false, 351)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 351, $this->source); })()), "phone", [], "any", false, false, false, 351), "html", null, true)) : ("<span class=\"empty-value\">Non renseigné</span>"));
        yield "</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"map-pin\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Adresse</div>
                        <div class=\"info-value\">";
        // line 361
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", true, true, false, 361) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 361, $this->source); })()), "address", [], "any", false, false, false, 361)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 361, $this->source); })()), "address", [], "any", false, false, false, 361), "html", null, true)) : ("<span class=\"empty-value\">Non renseignée</span>"));
        yield "</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"calendar\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Compte créé le</div>
                        <div class=\"info-value\">";
        // line 371
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 371, $this->source); })()), "createdAt", [], "any", false, false, false, 371)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 371, $this->source); })()), "createdAt", [], "any", false, false, false, 371), "d/m/Y à H:i"), "html", null, true)) : ("Non disponible"));
        yield "</div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 378
        yield "        <div class=\"info-section\">
            <h2 class=\"info-section-title\">
                <i data-lucide=\"briefcase\" style=\"width: 24px; height: 24px;\"></i>
                Informations Professionnelles
            </h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"hash\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Matricule</div>
                        <div class=\"info-value\">";
        // line 391
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "matricule", [], "any", true, true, false, 391) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 391, $this->source); })()), "matricule", [], "any", false, false, false, 391)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 391, $this->source); })()), "matricule", [], "any", false, false, false, 391), "html", null, true)) : ("<span class=\"empty-value\">Non attribué</span>"));
        yield "</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"calendar-check\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Date d'embauche</div>
                        <div class=\"info-value\">";
        // line 401
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 401, $this->source); })()), "hireDate", [], "any", false, false, false, 401)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 401, $this->source); })()), "hireDate", [], "any", false, false, false, 401), "d/m/Y"), "html", null, true)) : ("<span class=\"empty-value\">Non renseignée</span>"));
        yield "</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"folder\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Département</div>
                        <div class=\"info-value\">";
        // line 411
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "department", [], "any", true, true, false, 411) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 411, $this->source); })()), "department", [], "any", false, false, false, 411)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 411, $this->source); })()), "department", [], "any", false, false, false, 411), "html", null, true)) : ("<span class=\"empty-value\">Non renseigné</span>"));
        yield "</div>
                    </div>
                </div>

                ";
        // line 415
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 415, $this->source); })()), "institution", [], "any", false, false, false, 415)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 416
            yield "                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"building\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Institution</div>
                        <div class=\"info-value\">
                            ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 423, $this->source); })()), "institution", [], "any", false, false, false, 423), "nom", [], "any", false, false, false, 423), "html", null, true);
            yield "
                            ";
            // line 424
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 424, $this->source); })()), "institution", [], "any", false, false, false, 424), "sigle", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 425
                yield "                                <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 425, $this->source); })()), "institution", [], "any", false, false, false, 425), "sigle", [], "any", false, false, false, 425), "html", null, true);
                yield "</span>
                            ";
            }
            // line 427
            yield "                        </div>
                    </div>
                </div>
                ";
        }
        // line 431
        yield "            </div>
        </div>

        ";
        // line 435
        yield "        <div class=\"info-section\">
            <h2 class=\"info-section-title\">
                <i data-lucide=\"shield\" style=\"width: 24px; height: 24px;\"></i>
                Rôles et Permissions
            </h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"shield-check\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Rôles assignés</div>
                        <div class=\"info-value mt-2\">
                            ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 449, $this->source); })()), "roles", [], "any", false, false, false, 449));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 450
            yield "                                ";
            if (($context["role"] != "ROLE_USER")) {
                // line 451
                yield "                                    <span class=\"badge-role-display ";
                yield (((($context["role"] == "ROLE_ADMIN") || ($context["role"] == "ROLE_SUPER_ADMIN"))) ? ("admin") : (((($context["role"] == "ROLE_MANAGER")) ? ("manager") : ("user"))));
                yield "\">
                                        <i data-lucide=\"";
                // line 452
                if ((($context["role"] == "ROLE_ADMIN") || ($context["role"] == "ROLE_SUPER_ADMIN"))) {
                    yield "shield";
                } elseif (($context["role"] == "ROLE_MANAGER")) {
                    yield "briefcase";
                } else {
                    yield "user";
                }
                yield "\" style=\"width: 16px; height: 16px;\"></i>
                                        ";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => "", "_" => " "])), "html", null, true);
                yield "
                                    </span>
                                ";
            }
            // line 456
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        yield "                        </div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"key\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Niveau d'accès</div>
                        <div class=\"info-value\">
                            <span class=\"badge bg-primary\">";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 468, $this->source); })()), "accessLevelLabel", [], "any", false, false, false, 468), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"";
        // line 475
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 475, $this->source); })()), "isVerified", [], "any", false, false, false, 475)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "check-circle";
        } else {
            yield "x-circle";
        }
        yield "\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Statut du compte</div>
                        <div class=\"info-value\">
                            <span class=\"badge ";
        // line 480
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 480, $this->source); })()), "isVerified", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-warning"));
        yield "\">
                                ";
        // line 481
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 481, $this->source); })()), "isVerified", [], "any", false, false, false, 481)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vérifié et actif") : ("En attente de vérification"));
        yield "
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"";
        // line 489
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 489, $this->source); })()), "isSuperAdmin", [], "any", false, false, false, 489)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "crown";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 489, $this->source); })()), "isAdmin", [], "any", false, false, false, 489)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "shield";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 489, $this->source); })()), "isManager", [], "any", false, false, false, 489)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "briefcase";
        } else {
            yield "user";
        }
        yield "\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Privilèges</div>
                        <div class=\"info-value\">
                            ";
        // line 494
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 494, $this->source); })()), "isSuperAdmin", [], "any", false, false, false, 494)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 495
            yield "                                Super Administrateur
                            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 496
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 496, $this->source); })()), "isAdmin", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 497
            yield "                                Administrateur
                            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 498
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 498, $this->source); })()), "isManager", [], "any", false, false, false, 498)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 499
            yield "                                Gestionnaire
                            ";
        } else {
            // line 501
            yield "                                Utilisateur Standard
                            ";
        }
        // line 503
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 510
        yield "        <div class=\"action-buttons\">
            <a href=\"";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 511, $this->source); })()), "id", [], "any", false, false, false, 511)]), "html", null, true);
        yield "\" class=\"btn btn-action-primary\">
                <i data-lucide=\"edit\" style=\"width: 18px; height: 18px;\"></i>
                Modifier l'utilisateur
            </a>
            
            <form method=\"post\" action=\"";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 516, $this->source); })()), "id", [], "any", false, false, false, 516)]), "html", null, true);
        yield "\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 517, $this->source); })()), "id", [], "any", false, false, false, 517))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-";
        // line 518
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 518, $this->source); })()), "isVerified", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield "\">
                    <i data-lucide=\"";
        // line 519
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 519, $this->source); })()), "isVerified", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "user-x";
        } else {
            yield "user-check";
        }
        yield "\" style=\"width: 18px; height: 18px;\"></i>
                    ";
        // line 520
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 520, $this->source); })()), "isVerified", [], "any", false, false, false, 520)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "
                </button>
            </form>

            <button type=\"button\" 
                    class=\"btn btn-danger ms-auto\" 
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#deleteModal\">
                <i data-lucide=\"trash-2\" style=\"width: 18px; height: 18px;\"></i>
                Supprimer
            </button>
        </div>
    </div>

    ";
        // line 535
        yield "    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 549, $this->source); })()), "fullName", [], "any", false, false, false, 549), "html", null, true);
        yield "</strong><br>
                        <small class=\"text-muted\">";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 550, $this->source); })()), "email", [], "any", false, false, false, 550), "html", null, true);
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
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 561, $this->source); })()), "id", [], "any", false, false, false, 561)]), "html", null, true);
        yield "\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 562, $this->source); })()), "id", [], "any", false, false, false, 562))), "html", null, true);
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
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 575
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 576
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        // Initialiser Lucide
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
        return "user/show.html.twig";
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
        return array (  930 => 576,  920 => 575,  900 => 562,  896 => 561,  882 => 550,  878 => 549,  862 => 535,  845 => 520,  837 => 519,  833 => 518,  829 => 517,  825 => 516,  817 => 511,  814 => 510,  806 => 503,  802 => 501,  798 => 499,  796 => 498,  793 => 497,  791 => 496,  788 => 495,  786 => 494,  770 => 489,  759 => 481,  755 => 480,  743 => 475,  733 => 468,  720 => 457,  714 => 456,  708 => 453,  698 => 452,  693 => 451,  690 => 450,  686 => 449,  670 => 435,  665 => 431,  659 => 427,  653 => 425,  651 => 424,  647 => 423,  638 => 416,  636 => 415,  629 => 411,  616 => 401,  603 => 391,  588 => 378,  579 => 371,  566 => 361,  553 => 351,  540 => 341,  525 => 328,  517 => 322,  503 => 317,  496 => 312,  492 => 310,  487 => 308,  482 => 307,  480 => 306,  472 => 301,  468 => 299,  460 => 293,  452 => 292,  446 => 289,  442 => 288,  439 => 287,  433 => 285,  427 => 282,  422 => 281,  420 => 280,  416 => 278,  413 => 276,  410 => 274,  404 => 273,  394 => 269,  384 => 268,  379 => 267,  374 => 266,  369 => 265,  360 => 258,  357 => 257,  354 => 255,  344 => 254,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ user.fullName }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --tchad-blue: #002664;
            --tchad-gold: #FECB00;
            --tchad-red: #C60C30;
        }

        .profile-header {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            padding: 3rem 0;
            border-radius: 0.75rem 0.75rem 0 0;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: rgba(254, 203, 0, 0.1);
            border-radius: 50%;
        }

        .profile-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .profile-avatar-section {
            text-align: center;
            padding: 2rem 0;
            position: relative;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--tchad-gold);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
        }

        .profile-initials {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            font-weight: 700;
            border: 5px solid var(--tchad-gold);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .profile-name {
            font-size: 2rem;
            font-weight: 700;
            margin: 1.5rem 0 0.5rem;
            color: white;
        }

        .profile-role {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 1rem;
        }

        .profile-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1.5rem;
            border-radius: 2rem;
            font-weight: 600;
        }

        .info-section {
            padding: 2rem;
        }

        .info-section-title {
            color: var(--tchad-blue);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-bottom: 2px solid var(--tchad-gold);
            padding-bottom: 0.75rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            border-radius: 0.5rem;
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-content {
            flex: 1;
        }

        .info-label {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 0.25rem;
            font-weight: 600;
        }

        .info-value {
            font-size: 1rem;
            color: #212529;
            font-weight: 500;
        }

        .badge-role-display {
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .badge-role-display.admin {
            background-color: var(--tchad-red);
            color: white;
        }

        .badge-role-display.manager {
            background-color: var(--tchad-gold);
            color: #333;
        }

        .badge-role-display.user {
            background-color: var(--tchad-blue);
            color: white;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            padding: 2rem;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }

        .btn-action-primary {
            background: linear-gradient(135deg, var(--tchad-blue) 0%, #003d96 100%);
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-action-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 38, 100, 0.3);
            color: white;
        }

        .stats-quick-view {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            padding: 2rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .stat-quick-item {
            text-align: center;
            padding: 1rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .stat-quick-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tchad-blue);
        }

        .stat-quick-label {
            font-size: 0.75rem;
            color: #6c757d;
            text-transform: uppercase;
            font-weight: 600;
            margin-top: 0.25rem;
        }

        .empty-value {
            color: #6c757d;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .profile-name {
                font-size: 1.5rem;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    {# En-tête de retour #}
    <div class=\"mb-3\">
        <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary\">
            <i data-lucide=\"arrow-left\" style=\"width: 18px; height: 18px;\"></i>
            Retour à la liste
        </a>
    </div>

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

    {# Carte de profil #}
    <div class=\"profile-card\">
        {# En-tête du profil #}
        <div class=\"profile-header\">
            <div class=\"profile-avatar-section\">
                {% if user.avatar %}
                    <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" 
                         alt=\"{{ user.fullName }}\" 
                         class=\"profile-avatar\">
                {% else %}
                    <div class=\"profile-initials\">{{ user.initials }}</div>
                {% endif %}
                
                <h1 class=\"profile-name\">{{ user.fullName }}</h1>
                <div class=\"profile-role\">{{ user.accessLevelLabel }}</div>
                
                <div class=\"profile-status\">
                    <i data-lucide=\"{% if user.isVerified %}check-circle{% else %}clock{% endif %}\" style=\"width: 18px; height: 18px;\"></i>
                    {{ user.isVerified ? 'Compte Vérifié' : 'En Attente de Vérification' }}
                </div>
            </div>
        </div>

        {# Vue rapide des statistiques #}
        <div class=\"stats-quick-view\">
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">{{ user.roles|length }}</div>
                <div class=\"stat-quick-label\">Rôles</div>
            </div>
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">
                    {% if user.createdAt %}
                        {{ 'now'|date('U') - user.createdAt.timestamp }}
                        {{ ((('now'|date('U') - user.createdAt.timestamp) / 86400)|round) }} j
                    {% else %}
                        —
                    {% endif %}
                </div>
                <div class=\"stat-quick-label\">Ancienneté</div>
            </div>
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">
                    <i data-lucide=\"{% if user.isVerified %}check{% else %}x{% endif %}\" style=\"width: 24px; height: 24px; color: {{ user.isVerified ? 'var(--tchad-blue)' : 'var(--tchad-red)' }}\"></i>
                </div>
                <div class=\"stat-quick-label\">Statut</div>
            </div>
            <div class=\"stat-quick-item\">
                <div class=\"stat-quick-value\">{{ user.institution ? '✓' : '—' }}</div>
                <div class=\"stat-quick-label\">Institution</div>
            </div>
        </div>

        {# Section 1: Informations personnelles #}
        <div class=\"info-section\">
            <h2 class=\"info-section-title\">
                <i data-lucide=\"user\" style=\"width: 24px; height: 24px;\"></i>
                Informations Personnelles
            </h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"mail\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Email</div>
                        <div class=\"info-value\">{{ user.email }}</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"phone\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Téléphone</div>
                        <div class=\"info-value\">{{ user.phone ?? '<span class=\"empty-value\">Non renseigné</span>'|raw }}</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"map-pin\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Adresse</div>
                        <div class=\"info-value\">{{ user.address ?? '<span class=\"empty-value\">Non renseignée</span>'|raw }}</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"calendar\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Compte créé le</div>
                        <div class=\"info-value\">{{ user.createdAt ? user.createdAt|date('d/m/Y à H:i') : 'Non disponible' }}</div>
                    </div>
                </div>
            </div>
        </div>

        {# Section 2: Informations professionnelles #}
        <div class=\"info-section\">
            <h2 class=\"info-section-title\">
                <i data-lucide=\"briefcase\" style=\"width: 24px; height: 24px;\"></i>
                Informations Professionnelles
            </h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"hash\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Matricule</div>
                        <div class=\"info-value\">{{ user.matricule ?? '<span class=\"empty-value\">Non attribué</span>'|raw }}</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"calendar-check\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Date d'embauche</div>
                        <div class=\"info-value\">{{ user.hireDate ? user.hireDate|date('d/m/Y') : '<span class=\"empty-value\">Non renseignée</span>'|raw }}</div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"folder\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Département</div>
                        <div class=\"info-value\">{{ user.department ?? '<span class=\"empty-value\">Non renseigné</span>'|raw }}</div>
                    </div>
                </div>

                {% if user.institution %}
                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"building\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Institution</div>
                        <div class=\"info-value\">
                            {{ user.institution.nom }}
                            {% if user.institution.sigle %}
                                <span class=\"badge bg-secondary\">{{ user.institution.sigle }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>

        {# Section 3: Rôles et permissions #}
        <div class=\"info-section\">
            <h2 class=\"info-section-title\">
                <i data-lucide=\"shield\" style=\"width: 24px; height: 24px;\"></i>
                Rôles et Permissions
            </h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"shield-check\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Rôles assignés</div>
                        <div class=\"info-value mt-2\">
                            {% for role in user.roles %}
                                {% if role != 'ROLE_USER' %}
                                    <span class=\"badge-role-display {{ role == 'ROLE_ADMIN' or role == 'ROLE_SUPER_ADMIN' ? 'admin' : (role == 'ROLE_MANAGER' ? 'manager' : 'user') }}\">
                                        <i data-lucide=\"{% if role == 'ROLE_ADMIN' or role == 'ROLE_SUPER_ADMIN' %}shield{% elseif role == 'ROLE_MANAGER' %}briefcase{% else %}user{% endif %}\" style=\"width: 16px; height: 16px;\"></i>
                                        {{ role|replace({'ROLE_': '', '_': ' '})|title }}
                                    </span>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"key\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Niveau d'accès</div>
                        <div class=\"info-value\">
                            <span class=\"badge bg-primary\">{{ user.accessLevelLabel }}</span>
                        </div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"{% if user.isVerified %}check-circle{% else %}x-circle{% endif %}\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Statut du compte</div>
                        <div class=\"info-value\">
                            <span class=\"badge {{ user.isVerified ? 'bg-success' : 'bg-warning' }}\">
                                {{ user.isVerified ? 'Vérifié et actif' : 'En attente de vérification' }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"info-item\">
                    <div class=\"info-icon\">
                        <i data-lucide=\"{% if user.isSuperAdmin %}crown{% elseif user.isAdmin %}shield{% elseif user.isManager %}briefcase{% else %}user{% endif %}\" style=\"width: 20px; height: 20px;\"></i>
                    </div>
                    <div class=\"info-content\">
                        <div class=\"info-label\">Privilèges</div>
                        <div class=\"info-value\">
                            {% if user.isSuperAdmin %}
                                Super Administrateur
                            {% elseif user.isAdmin %}
                                Administrateur
                            {% elseif user.isManager %}
                                Gestionnaire
                            {% else %}
                                Utilisateur Standard
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# Boutons d'action #}
        <div class=\"action-buttons\">
            <a href=\"{{ path('app_user_edit', {id: user.id}) }}\" class=\"btn btn-action-primary\">
                <i data-lucide=\"edit\" style=\"width: 18px; height: 18px;\"></i>
                Modifier l'utilisateur
            </a>
            
            <form method=\"post\" action=\"{{ path('app_user_toggle_status', {id: user.id}) }}\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ user.id) }}\">
                <button type=\"submit\" class=\"btn btn-{{ user.isVerified ? 'warning' : 'success' }}\">
                    <i data-lucide=\"{% if user.isVerified %}user-x{% else %}user-check{% endif %}\" style=\"width: 18px; height: 18px;\"></i>
                    {{ user.isVerified ? 'Désactiver' : 'Activer' }}
                </button>
            </form>

            <button type=\"button\" 
                    class=\"btn btn-danger ms-auto\" 
                    data-bs-toggle=\"modal\" 
                    data-bs-target=\"#deleteModal\">
                <i data-lucide=\"trash-2\" style=\"width: 18px; height: 18px;\"></i>
                Supprimer
            </button>
        </div>
    </div>

    {# Modal de suppression #}
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <script>
        // Initialiser Lucide
        lucide.createIcons();
    </script>
{% endblock %}
", "user/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\user\\show.html.twig");
    }
}
