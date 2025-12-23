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
class __TwigTemplate_b5b2cafa8cc428d0f0762d6eab26ef40 extends Template
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

        yield "Gestion des utilisateurs";
        
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
        yield "    <style>
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .stats-card {
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .stats-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        
        .stats-title {
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .stats-value {
            font-size: 1.8rem;
            font-weight: bold;
        }
        
        .table-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .user-badge {
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 600;
            border-radius: 0.25rem;
            margin-right: 0.25rem;
        }
        
        .status-badge {
            width: 80px;
            text-align: center;
        }
        
        .btn-action {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
        
        .search-container {
            margin-bottom: 1.5rem;
        }
        
        .role-ROLE_ADMIN {
            background-color: #dc3545;
            color: white;
        }
        
        .role-ROLE_MANAGER {
            background-color: #fd7e14;
            color: white;
        }
        
        .role-ROLE_USER {
            background-color: #0d6efd;
            color: white;
        }

        .institution-info {
            background: linear-gradient(135deg, #4e73df, #224abe);
            color: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(78, 115, 223, 0.2);
        }

        .institution-info h4 {
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .institution-info p {
            margin-bottom: 0;
            opacity: 0.9;
        }

        .employe-link {
            color: #28a745;
            text-decoration: none;
            font-weight: 500;
        }

        .employe-link:hover {
            color: #1e7e34;
            text-decoration: underline;
        }

        .no-employe {
            color: #6c757d;
            font-style: italic;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 124
        yield "    <div class=\"container-fluid\">
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <h1 class=\"h3 mb-0\">Liste des utilisateurs</h1>
                        <p class=\"text-muted mb-0\">Gestion des utilisateurs de votre institution</p>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex justify-content-md-end\">
                            <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointage_dashboard");
        yield "\" class=\"btn btn-outline-primary me-2\">
                                <i class=\"fas fa-chart-line me-1\"></i> Tableau de bord des pointages
                            </a>
                            <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus me-1\"></i> Nouvel utilisateur
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information sur l'institution -->
        ";
        // line 147
        if ((($tmp = (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 147, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "            <div class=\"institution-info\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-building fa-2x me-3\"></i>
                    <div>
                        <h4>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 152, $this->source); })()), "nom", [], "any", false, false, false, 152), "html", null, true);
            yield "</h4>
                        <p>Vous gérez les utilisateurs de cette institution</p>
                    </div>
                    <div class=\"ms-auto text-end\">
                        <div class=\"text-white-50 small\">Total utilisateurs</div>
                        <div class=\"h3 mb-0\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 157, $this->source); })()), "total", [], "any", false, false, false, 157), "html", null, true);
            yield "</div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 162
        yield "        
        ";
        // line 164
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "flashes", [], "any", false, false, false, 164));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 165
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 166
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "        
        ";
        // line 174
        yield "        <div class=\"row mb-4\">
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-primary\">
                        <i class=\"fas fa-users\"></i>
                    </div>
                    <div class=\"stats-title\">Total des utilisateurs</div>
                    <div class=\"stats-value\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 181, $this->source); })()), "total", [], "any", false, false, false, 181), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-success\">
                        <i class=\"fas fa-user-check\"></i>
                    </div>
                    <div class=\"stats-title\">Utilisateurs vérifiés</div>
                    <div class=\"stats-value\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 190, $this->source); })()), "verified", [], "any", false, false, false, 190), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-info\">
                        <i class=\"fas fa-user-tie\"></i>
                    </div>
                    <div class=\"stats-title\">Employés liés</div>
                    <div class=\"stats-value\">";
        // line 199
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "withEmploye", [], "any", true, true, false, 199) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 199, $this->source); })()), "withEmploye", [], "any", false, false, false, 199)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 199, $this->source); })()), "withEmploye", [], "any", false, false, false, 199), "html", null, true)) : (0));
        yield "</div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-danger\">
                        <i class=\"fas fa-user-shield\"></i>
                    </div>
                    <div class=\"stats-title\">Administrateurs</div>
                    <div class=\"stats-value\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 208, $this->source); })()), "admins", [], "any", false, false, false, 208), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        ";
        // line 214
        yield "        <div class=\"search-container d-flex\">
            <div class=\"input-group\">
                <span class=\"input-group-text\">
                    <i class=\"fas fa-search\"></i>
                </span>
                <input type=\"text\" id=\"userSearch\" class=\"form-control\" placeholder=\"Rechercher un utilisateur...\">
            </div>
            <div class=\"ms-2\">
                <select id=\"roleFilter\" class=\"form-select\">
                    <option value=\"\">Tous les rôles</option>
                    <option value=\"ROLE_ADMIN\">Administrateurs</option>
                    <option value=\"ROLE_MANAGER\">Managers</option>
                    <option value=\"ROLE_USER\">Utilisateurs</option>
                </select>
            </div>
            <div class=\"ms-2\">
                <select id=\"statusFilter\" class=\"form-select\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"verified\">Vérifiés</option>
                    <option value=\"unverified\">Non vérifiés</option>
                </select>
            </div>
        </div>
        
        ";
        // line 239
        yield "        <div class=\"table-container\">
            <table class=\"table table-hover\" id=\"usersTable\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Identité</th>
                        <th>Email</th>
                        <th>Rôles</th>
                        <th>Statut</th>
                        <th>Date création</th>
                        <th>Employé associé</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 255, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 256
            yield "                    <tr>
                        <td>";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 257), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 259
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 260
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 260))), "html", null, true);
                yield "\" alt=\"Avatar\" class=\"user-avatar\">
                            ";
            } else {
                // line 262
                yield "                                <div class=\"user-avatar d-flex align-items-center justify-content-center bg-secondary text-white\">
                                    ";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 263))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 263))), "html", null, true);
                yield "
                                </div>
                            ";
            }
            // line 266
            yield "                        </td>
                        <td>
                            <strong>";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 268), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 268), "html", null, true);
            yield "</strong>
                        </td>
                        <td>";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 270), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 272));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 273
                yield "                                ";
                if ((($context["role"] != "ROLE_USER") || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 273)) == 1))) {
                    // line 274
                    yield "                                    <span class=\"badge user-badge role-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "\">
                                        ";
                    // line 275
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""]), "html", null, true);
                    yield "
                                    </span>
                                ";
                }
                // line 278
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            yield "                        </td>
                        <td>
                            <span class=\"badge status-badge ";
            // line 281
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                ";
            // line 282
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vérifié") : ("En attente"));
            yield "
                            </span>
                        </td>
                        <td>";
            // line 285
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 285)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 285), "d/m/Y"), "html", null, true)) : (""));
            yield "</td>
                        <td>
                            ";
            // line 287
            $context["employes"] = [];
            // line 288
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "user", [], "any", false, false, false, 288), "institution", [], "any", false, false, false, 288), "users", [], "any", false, false, false, 288));
            foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
                // line 289
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 289) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 289))) {
                    // line 290
                    yield "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "employes", [], "any", false, false, false, 290));
                    foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                        // line 291
                        yield "                                        ";
                        $context["employes"] = Twig\Extension\CoreExtension::merge((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 291, $this->source); })()), [$context["emp"]]);
                        // line 292
                        yield "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['emp'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 293
                    yield "                                ";
                }
                // line 294
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            yield "                            
                            ";
            // line 296
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 296, $this->source); })())) > 0)) {
                // line 297
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 297, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
                    // line 298
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 298)]), "html", null, true);
                    yield "\" class=\"employe-link\">
                                        <i class=\"fas fa-user-tie me-1\"></i>
                                        ";
                    // line 300
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "matricule", [], "any", false, false, false, 300), "html", null, true);
                    yield "
                                    </a>
                                    ";
                    // line 302
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<br>";
                    }
                    // line 303
                    yield "                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 304
                yield "                            ";
            } else {
                // line 305
                yield "                                <span class=\"no-employe\">
                                    <i class=\"fas fa-user-slash me-1\"></i>
                                    Aucun employé
                                </span>
                            ";
            }
            // line 310
            yield "                        </td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 313)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info btn-action\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 316)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary btn-action\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning btn-action\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleStatusModal";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 319), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-sync-alt\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger btn-action\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 322), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </div>
                            
                            ";
            // line 328
            yield "                            <div class=\"modal fade\" id=\"toggleStatusModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 328), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Changer le statut</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Voulez-vous ";
            // line 336
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
            yield " cet utilisateur ?
                                            <br><small class=\"text-muted\">Cette action affectera également le statut de l'employé associé.</small>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <form method=\"post\" action=\"";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 340)]), "html", null, true);
            yield "\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 341))), "html", null, true);
            yield "\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                <button type=\"submit\" class=\"btn ";
            // line 343
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 343)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-warning") : ("btn-success"));
            yield "\">
                                                    ";
            // line 344
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            ";
            // line 353
            yield "                            <div class=\"modal fade\" id=\"deleteModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 353), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Confirmer la suppression</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                                            <br><small class=\"text-danger\">
                                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                Cette action supprimera également l'employé associé et est irréversible.
                                            </small>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <form method=\"post\" action=\"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 368)]), "html", null, true);
            yield "\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 369))), "html", null, true);
            yield "\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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
        // line 379
        if (!$context['_iterated']) {
            // line 380
            yield "                    <tr>
                        <td colspan=\"9\" class=\"text-center py-5\">
                            <div class=\"text-muted\">
                                <i class=\"fas fa-users fa-3x mb-3\"></i>
                                <h5>Aucun utilisateur trouvé</h5>
                                <p>Il n'y a aucun utilisateur dans votre institution pour le moment.</p>
                                <a href=\"";
            // line 386
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-primary mt-3\">
                                    <i class=\"fas fa-plus me-2\"></i>Créer le premier utilisateur
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 399
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 400
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction de recherche et filtrage
            function filterTable() {
                const searchValue = document.getElementById('userSearch').value.toLowerCase();
                const roleFilter = document.getElementById('roleFilter').value;
                const statusFilter = document.getElementById('statusFilter').value;
                
                const rows = document.querySelectorAll('#usersTable tbody tr');
                
                rows.forEach(row => {
                    // Vérifier si c'est la ligne \"aucun utilisateur\"
                    if (row.cells.length === 1) {
                        return;
                    }
                    
                    const email = row.cells[3].textContent.toLowerCase();
                    const name = row.cells[2].textContent.toLowerCase();
                    const roles = row.cells[4].textContent.toLowerCase();
                    const status = row.cells[5].textContent.toLowerCase();
                    
                    // Critères de recherche
                    const matchesSearch = email.includes(searchValue) || name.includes(searchValue);
                    const matchesRole = !roleFilter || roles.includes(roleFilter.toLowerCase().replace('role_', ''));
                    const matchesStatus = !statusFilter || 
                                        (statusFilter === 'verified' && status.includes('vérifié')) ||
                                        (statusFilter === 'unverified' && status.includes('attente'));
                    
                    // Affichage/masquage de la ligne
                    row.style.display = (matchesSearch && matchesRole && matchesStatus) ? '' : 'none';
                });
            }
            
            // Listeners pour la recherche et les filtres
            document.getElementById('userSearch').addEventListener('input', filterTable);
            document.getElementById('roleFilter').addEventListener('change', filterTable);
            document.getElementById('statusFilter').addEventListener('change', filterTable);
            
            // Animation des cartes de statistiques
            const statCards = document.querySelectorAll('.stats-card');
            statCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
            
            // Tooltip pour les employés associés
            const employeLinks = document.querySelectorAll('.employe-link');
            employeLinks.forEach(link => {
                link.setAttribute('title', 'Voir le profil employé');
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
        return array (  751 => 400,  741 => 399,  729 => 393,  716 => 386,  708 => 380,  706 => 379,  691 => 369,  687 => 368,  668 => 353,  657 => 344,  653 => 343,  648 => 341,  644 => 340,  637 => 336,  625 => 328,  617 => 322,  611 => 319,  605 => 316,  599 => 313,  594 => 310,  587 => 305,  584 => 304,  570 => 303,  566 => 302,  561 => 300,  555 => 298,  537 => 297,  535 => 296,  532 => 295,  526 => 294,  523 => 293,  517 => 292,  514 => 291,  509 => 290,  506 => 289,  501 => 288,  499 => 287,  494 => 285,  488 => 282,  484 => 281,  480 => 279,  474 => 278,  468 => 275,  463 => 274,  460 => 273,  456 => 272,  451 => 270,  444 => 268,  440 => 266,  433 => 263,  430 => 262,  424 => 260,  422 => 259,  417 => 257,  414 => 256,  409 => 255,  391 => 239,  365 => 214,  357 => 208,  345 => 199,  333 => 190,  321 => 181,  312 => 174,  309 => 172,  303 => 171,  293 => 167,  288 => 166,  283 => 165,  278 => 164,  275 => 162,  267 => 157,  259 => 152,  253 => 148,  251 => 147,  238 => 137,  232 => 134,  220 => 124,  210 => 123,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des utilisateurs{% endblock %}

{% block stylesheets %}
    <style>
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .stats-card {
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .stats-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        
        .stats-title {
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .stats-value {
            font-size: 1.8rem;
            font-weight: bold;
        }
        
        .table-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .user-badge {
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 600;
            border-radius: 0.25rem;
            margin-right: 0.25rem;
        }
        
        .status-badge {
            width: 80px;
            text-align: center;
        }
        
        .btn-action {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
        
        .search-container {
            margin-bottom: 1.5rem;
        }
        
        .role-ROLE_ADMIN {
            background-color: #dc3545;
            color: white;
        }
        
        .role-ROLE_MANAGER {
            background-color: #fd7e14;
            color: white;
        }
        
        .role-ROLE_USER {
            background-color: #0d6efd;
            color: white;
        }

        .institution-info {
            background: linear-gradient(135deg, #4e73df, #224abe);
            color: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(78, 115, 223, 0.2);
        }

        .institution-info h4 {
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .institution-info p {
            margin-bottom: 0;
            opacity: 0.9;
        }

        .employe-link {
            color: #28a745;
            text-decoration: none;
            font-weight: 500;
        }

        .employe-link:hover {
            color: #1e7e34;
            text-decoration: underline;
        }

        .no-employe {
            color: #6c757d;
            font-style: italic;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <h1 class=\"h3 mb-0\">Liste des utilisateurs</h1>
                        <p class=\"text-muted mb-0\">Gestion des utilisateurs de votre institution</p>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"d-flex justify-content-md-end\">
                            <a href=\"{{ path('app_pointage_dashboard') }}\" class=\"btn btn-outline-primary me-2\">
                                <i class=\"fas fa-chart-line me-1\"></i> Tableau de bord des pointages
                            </a>
                            <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus me-1\"></i> Nouvel utilisateur
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information sur l'institution -->
        {% if institution %}
            <div class=\"institution-info\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-building fa-2x me-3\"></i>
                    <div>
                        <h4>{{ institution.nom }}</h4>
                        <p>Vous gérez les utilisateurs de cette institution</p>
                    </div>
                    <div class=\"ms-auto text-end\">
                        <div class=\"text-white-50 small\">Total utilisateurs</div>
                        <div class=\"h3 mb-0\">{{ stats.total }}</div>
                    </div>
                </div>
            </div>
        {% endif %}
        
        {# Flash messages #}
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}
        
        {# Statistiques #}
        <div class=\"row mb-4\">
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-primary\">
                        <i class=\"fas fa-users\"></i>
                    </div>
                    <div class=\"stats-title\">Total des utilisateurs</div>
                    <div class=\"stats-value\">{{ stats.total }}</div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-success\">
                        <i class=\"fas fa-user-check\"></i>
                    </div>
                    <div class=\"stats-title\">Utilisateurs vérifiés</div>
                    <div class=\"stats-value\">{{ stats.verified }}</div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-info\">
                        <i class=\"fas fa-user-tie\"></i>
                    </div>
                    <div class=\"stats-title\">Employés liés</div>
                    <div class=\"stats-value\">{{ stats.withEmploye ?? 0 }}</div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"stats-card bg-white\">
                    <div class=\"stats-icon text-danger\">
                        <i class=\"fas fa-user-shield\"></i>
                    </div>
                    <div class=\"stats-title\">Administrateurs</div>
                    <div class=\"stats-value\">{{ stats.admins }}</div>
                </div>
            </div>
        </div>
        
        {# Recherche et filtres #}
        <div class=\"search-container d-flex\">
            <div class=\"input-group\">
                <span class=\"input-group-text\">
                    <i class=\"fas fa-search\"></i>
                </span>
                <input type=\"text\" id=\"userSearch\" class=\"form-control\" placeholder=\"Rechercher un utilisateur...\">
            </div>
            <div class=\"ms-2\">
                <select id=\"roleFilter\" class=\"form-select\">
                    <option value=\"\">Tous les rôles</option>
                    <option value=\"ROLE_ADMIN\">Administrateurs</option>
                    <option value=\"ROLE_MANAGER\">Managers</option>
                    <option value=\"ROLE_USER\">Utilisateurs</option>
                </select>
            </div>
            <div class=\"ms-2\">
                <select id=\"statusFilter\" class=\"form-select\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"verified\">Vérifiés</option>
                    <option value=\"unverified\">Non vérifiés</option>
                </select>
            </div>
        </div>
        
        {# Tableau des utilisateurs #}
        <div class=\"table-container\">
            <table class=\"table table-hover\" id=\"usersTable\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Identité</th>
                        <th>Email</th>
                        <th>Rôles</th>
                        <th>Statut</th>
                        <th>Date création</th>
                        <th>Employé associé</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>
                            {% if user.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" alt=\"Avatar\" class=\"user-avatar\">
                            {% else %}
                                <div class=\"user-avatar d-flex align-items-center justify-content-center bg-secondary text-white\">
                                    {{ user.firstname|first|upper }}{{ user.lastname|first|upper }}
                                </div>
                            {% endif %}
                        </td>
                        <td>
                            <strong>{{ user.firstname }} {{ user.lastname }}</strong>
                        </td>
                        <td>{{ user.email }}</td>
                        <td>
                            {% for role in user.roles %}
                                {% if role != 'ROLE_USER' or user.roles|length == 1 %}
                                    <span class=\"badge user-badge role-{{ role }}\">
                                        {{ role|replace({'ROLE_': ''}) }}
                                    </span>
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td>
                            <span class=\"badge status-badge {{ user.isVerified ? 'bg-success' : 'bg-warning' }}\">
                                {{ user.isVerified ? 'Vérifié' : 'En attente' }}
                            </span>
                        </td>
                        <td>{{ user.createdAt ? user.createdAt|date('d/m/Y') : '' }}</td>
                        <td>
                            {% set employes = [] %}
                            {% for employe in app.user.institution.users %}
                                {% if employe.id == user.id %}
                                    {% for emp in employe.employes %}
                                        {% set employes = employes|merge([emp]) %}
                                    {% endfor %}
                                {% endif %}
                            {% endfor %}
                            
                            {% if employes|length > 0 %}
                                {% for employe in employes %}
                                    <a href=\"{{ path('app_employe_show', {'id': employe.id}) }}\" class=\"employe-link\">
                                        <i class=\"fas fa-user-tie me-1\"></i>
                                        {{ employe.matricule }}
                                    </a>
                                    {% if not loop.last %}<br>{% endif %}
                                {% endfor %}
                            {% else %}
                                <span class=\"no-employe\">
                                    <i class=\"fas fa-user-slash me-1\"></i>
                                    Aucun employé
                                </span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-info btn-action\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-primary btn-action\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-warning btn-action\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleStatusModal{{ user.id }}\">
                                    <i class=\"fas fa-sync-alt\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger btn-action\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ user.id }}\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </div>
                            
                            {# Toggle Status Modal #}
                            <div class=\"modal fade\" id=\"toggleStatusModal{{ user.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Changer le statut</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Voulez-vous {{ user.isVerified ? 'désactiver' : 'activer' }} cet utilisateur ?
                                            <br><small class=\"text-muted\">Cette action affectera également le statut de l'employé associé.</small>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <form method=\"post\" action=\"{{ path('app_user_toggle_status', {'id': user.id}) }}\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ user.id) }}\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                <button type=\"submit\" class=\"btn {{ user.isVerified ? 'btn-warning' : 'btn-success' }}\">
                                                    {{ user.isVerified ? 'Désactiver' : 'Activer' }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {# Delete Modal #}
                            <div class=\"modal fade\" id=\"deleteModal{{ user.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Confirmer la suppression</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                                            <br><small class=\"text-danger\">
                                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                Cette action supprimera également l'employé associé et est irréversible.
                                            </small>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"9\" class=\"text-center py-5\">
                            <div class=\"text-muted\">
                                <i class=\"fas fa-users fa-3x mb-3\"></i>
                                <h5>Aucun utilisateur trouvé</h5>
                                <p>Il n'y a aucun utilisateur dans votre institution pour le moment.</p>
                                <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary mt-3\">
                                    <i class=\"fas fa-plus me-2\"></i>Créer le premier utilisateur
                                </a>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction de recherche et filtrage
            function filterTable() {
                const searchValue = document.getElementById('userSearch').value.toLowerCase();
                const roleFilter = document.getElementById('roleFilter').value;
                const statusFilter = document.getElementById('statusFilter').value;
                
                const rows = document.querySelectorAll('#usersTable tbody tr');
                
                rows.forEach(row => {
                    // Vérifier si c'est la ligne \"aucun utilisateur\"
                    if (row.cells.length === 1) {
                        return;
                    }
                    
                    const email = row.cells[3].textContent.toLowerCase();
                    const name = row.cells[2].textContent.toLowerCase();
                    const roles = row.cells[4].textContent.toLowerCase();
                    const status = row.cells[5].textContent.toLowerCase();
                    
                    // Critères de recherche
                    const matchesSearch = email.includes(searchValue) || name.includes(searchValue);
                    const matchesRole = !roleFilter || roles.includes(roleFilter.toLowerCase().replace('role_', ''));
                    const matchesStatus = !statusFilter || 
                                        (statusFilter === 'verified' && status.includes('vérifié')) ||
                                        (statusFilter === 'unverified' && status.includes('attente'));
                    
                    // Affichage/masquage de la ligne
                    row.style.display = (matchesSearch && matchesRole && matchesStatus) ? '' : 'none';
                });
            }
            
            // Listeners pour la recherche et les filtres
            document.getElementById('userSearch').addEventListener('input', filterTable);
            document.getElementById('roleFilter').addEventListener('change', filterTable);
            document.getElementById('statusFilter').addEventListener('change', filterTable);
            
            // Animation des cartes de statistiques
            const statCards = document.querySelectorAll('.stats-card');
            statCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
            
            // Tooltip pour les employés associés
            const employeLinks = document.querySelectorAll('.employe-link');
            employeLinks.forEach(link => {
                link.setAttribute('title', 'Voir le profil employé');
            });
        });
    </script>
{% endblock %}", "user/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\user\\index.html.twig");
    }
}
