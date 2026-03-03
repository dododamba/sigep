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

/* project/show.html.twig */
class __TwigTemplate_569030e87745e278ea931ac40f2ef073 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails - SIGEP Tchad";
        
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
        yield "<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"text-muted text-hover-primary\">Projets</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Fiche projet</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-pencil fs-2\"></i> Modifier
            </a>
            <button type=\"button\" class=\"btn btn-sm btn-light-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_delete_project\">
                <i class=\"ki-outline ki-trash fs-2\"></i> Supprimer
            </button>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <div class=\"d-flex flex-column flex-lg-row\">
            <!-- Sidebar -->
            <div class=\"flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0\">
                <div class=\"card card-flush\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h2>Statistiques du Projet</h2>
                        </div>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex flex-center flex-column mb-10\">
                            <div class=\"symbol symbol-100px symbol-circle mb-7\">
                                <span class=\"symbol-label bg-light-primary text-primary fs-5x fw-bold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54))), "html", null, true);
        yield "</span>
                            </div>
                            <span class=\"fs-3 text-gray-800 fw-bold mb-1\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        yield "</span>
                            <div class=\"fs-5 fw-semibold text-muted mb-6\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 57, $this->source); })()), "sectorLabel", [], "any", false, false, false, 57), "html", null, true);
        yield "</div>
                        </div>

                        <div class=\"d-flex flex-stack fs-4 py-3\">
                            <div class=\"fw-bold\">Statut</div>
                            ";
        // line 62
        $context["statusColor"] = (((CoreExtension::getAttribute($this->env, $this->source, ["termine" => "success", "en-cours" => "primary", "en-retard" => "danger", "planifie" => "info"], CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67), [], "array", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["termine" => "success", "en-cours" => "primary", "en-retard" => "danger", "planifie" => "info"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67), [], "array", false, false, false, 63)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["termine" => "success", "en-cours" => "primary", "en-retard" => "danger", "planifie" => "info"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67), [], "array", false, false, false, 63)) : ("secondary"));
        // line 68
        yield "                            <div class=\"badge badge-light-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusColor"]) || array_key_exists("statusColor", $context) ? $context["statusColor"] : (function () { throw new RuntimeError('Variable "statusColor" does not exist.', 68, $this->source); })()), "html", null, true);
        yield " fs-6\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 68, $this->source); })()), "statusLabel", [], "any", false, false, false, 68), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"separator separator-dashed my-3\"></div>
                        <div class=\"d-flex flex-stack fs-4 py-3\">
                            <div class=\"fw-bold\">Budget Total</div>
                            <span class=\"text-gray-800 fw-bolder fs-5\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 73, $this->source); })()), "budgetTotal", [], "any", false, false, false, 73), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        <div class=\"separator separator-dashed my-3\"></div>
                        <div class=\"d-flex flex-stack fs-4 py-3\">
                            <div class=\"fw-bold\">Décaissé</div>
                            <span class=\"text-gray-800 fw-bolder fs-5\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 78, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 78), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        <div class=\"separator separator-dashed my-3\"></div>
                        <div class=\"d-flex flex-column py-3\">
                            <div class=\"fw-bold mb-2\">Progression</div>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"progress h-8px w-100 me-2\">
                                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 85, $this->source); })()), "progress", [], "any", false, false, false, 85), "html", null, true);
        yield "%;\"></div>
                                </div>
                                <span class=\"text-muted fs-7 fw-bold\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 87, $this->source); })()), "progress", [], "any", false, false, false, 87), "html", null, true);
        yield "%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class=\"flex-lg-row-fluid ms-lg-15\">
                <!-- Navigation Tabs -->
                <ul class=\"nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4 active\" data-bs-toggle=\"tab\" href=\"#kt_project_overview\">Vue d'ensemble</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_financements\">Financements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_decaissements\">Décaissements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_conventions\">Conventions</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_audits\">Audits</a>
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"projectTabContent\">
                    <!-- Overview Tab -->
                    <div class=\"tab-pane fade show active\" id=\"kt_project_overview\" role=\"tabpanel\">
                        <div class=\"card card-flush mb-5 mb-xl-10\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Informations Générales</h3>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Description</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">";
        // line 126
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 126, $this->source); })()), "description", [], "any", false, false, false, 126), "html", null, true));
        yield "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Institution Responsable</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">";
        // line 132
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 132, $this->source); })()), "institution", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 132, $this->source); })()), "institution", [], "any", false, false, false, 132), "name", [], "any", false, false, false, 132), "html", null, true)) : ("N/A"));
        yield "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Période</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">Du ";
        // line 138
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 138, $this->source); })()), "dateDebut", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 138, $this->source); })()), "dateDebut", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield " au ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 138, $this->source); })()), "dateFin", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 138, $this->source); })()), "dateFin", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Localisation</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">";
        // line 144
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "localisation", [], "any", true, true, false, 144) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 144, $this->source); })()), "localisation", [], "any", false, false, false, 144)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 144, $this->source); })()), "localisation", [], "any", false, false, false, 144), "html", null, true)) : ("Non précisée"));
        yield "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Financements Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_financements\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Financements associés</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Bailleur</th>
                                                <th>Type</th>
                                                <th class=\"text-end\">Engagé</th>
                                                <th class=\"text-end\">Décaissé</th>
                                                <th class=\"text-end\">Taux</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 170, $this->source); })()), "financements", [], "any", false, false, false, 170));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["financement"]) {
            // line 171
            yield "                                                <tr>
                                                    <td>";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "bailleur", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "typeLabel", [], "any", false, false, false, 173), "html", null, true);
            yield "</td>
                                                    <td class=\"text-end\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantEngage", [], "any", false, false, false, 174), 0, ",", " "), "html", null, true);
            yield "</td>
                                                    <td class=\"text-end\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "montantDecaisse", [], "any", false, false, false, 175), 0, ",", " "), "html", null, true);
            yield "</td>
                                                    <td class=\"text-end\">
                                                        <span class=\"badge badge-light-primary\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["financement"], "tauxDecaissement", [], "any", false, false, false, 177), "html", null, true);
            yield "%</span>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        // line 180
        if (!$context['_iterated']) {
            // line 181
            yield "                                                <tr><td colspan=\"5\" class=\"text-center\">Aucun financement trouvé</td></tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['financement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Décaissements Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_decaissements\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Décaissements récents</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Réf</th>
                                                <th>Date</th>
                                                <th class=\"text-end\">Montant</th>
                                                <th class=\"text-center\">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 208, $this->source); })()), "decaissements", [], "any", false, false, false, 208));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["decaissement"]) {
            // line 209
            yield "                                                <tr>
                                                    <td>";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "reference", [], "any", false, false, false, 210), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "createdAt", [], "any", false, false, false, 211), "d/m/Y"), "html", null, true);
            yield "</td>
                                                    <td class=\"text-end\">";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "montant", [], "any", false, false, false, 212), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge badge-light-success\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decaissement"], "statut", [], "any", false, false, false, 214), "html", null, true);
            yield "</span>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        // line 217
        if (!$context['_iterated']) {
            // line 218
            yield "                                                <tr><td colspan=\"4\" class=\"text-center\">Aucun décaissement trouvé</td></tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['decaissement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conventions Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_conventions\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Conventions de financement</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Code</th>
                                                <th>Intitulé</th>
                                                <th class=\"text-end\">Montant</th>
                                                <th class=\"text-center\">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 245, $this->source); })()), "conventions", [], "any", false, false, false, 245));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["convention"]) {
            // line 246
            yield "                                                <tr>
                                                    <td>";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "code", [], "any", false, false, false, 247), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "intitule", [], "any", false, false, false, 248), "html", null, true);
            yield "</td>
                                                    <td class=\"text-end\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "montantGlobal", [], "any", false, false, false, 249), 0, ",", " "), "html", null, true);
            yield "</td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge badge-light-info\">";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["convention"], "statut", [], "any", false, false, false, 251), "html", null, true);
            yield "</span>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        // line 254
        if (!$context['_iterated']) {
            // line 255
            yield "                                                <tr><td colspan=\"4\" class=\"text-center\">Aucune convention trouvée</td></tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['convention'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Audits Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_audits\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Missions d'audit</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Titre</th>
                                                <th>Date</th>
                                                <th class=\"text-center\">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 281, $this->source); })()), "audits", [], "any", false, false, false, 281));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["audit"]) {
            // line 282
            yield "                                                <tr>
                                                    <td>";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "title", [], "any", false, false, false, 283), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 284
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "dateAudit", [], "any", false, false, false, 284), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge badge-light-warning\">";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["audit"], "statut", [], "any", false, false, false, 286), "html", null, true);
            yield "</span>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        // line 289
        if (!$context['_iterated']) {
            // line 290
            yield "                                                <tr><td colspan=\"3\" class=\"text-center\">Aucun audit trouvé</td></tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['audit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class=\"modal fade\" id=\"kt_modal_delete_project\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h2 class=\"fw-bold\">Confirmer la suppression</h2>
                        <div class=\"btn btn-icon btn-sm btn-active-icon-primary\" data-bs-dismiss=\"modal\">
                            <i class=\"ki-outline ki-cross fs-1\"></i>
                        </div>
                    </div>
                    <div class=\"modal-body scroll-y mx-5 mx-xl-15 my-7\">
                        <div class=\"text-center\">
                            <i class=\"ki-outline ki-information-5 text-danger fs-5x mb-5\"></i>
                            <p class=\"text-gray-700 fs-4 fw-semibold py-5\">Voulez-vous vraiment supprimer le projet \"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 315, $this->source); })()), "name", [], "any", false, false, false, 315), "html", null, true);
        yield "\" ?</p>
                        </div>
                    </div>
                    <div class=\"modal-footer flex-center\">
                        <button type=\"button\" class=\"btn btn-light me-3\" data-bs-dismiss=\"modal\">Annuler</button>
                        <form action=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 320, $this->source); })()), "id", [], "any", false, false, false, 320)]), "html", null, true);
        yield "\" method=\"post\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 321, $this->source); })()), "id", [], "any", false, false, false, 321))), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 333
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 334
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') { lucide.createIcons(); }
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
        return "project/show.html.twig";
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
        return array (  601 => 334,  591 => 333,  572 => 321,  568 => 320,  560 => 315,  535 => 292,  528 => 290,  526 => 289,  518 => 286,  513 => 284,  509 => 283,  506 => 282,  501 => 281,  475 => 257,  468 => 255,  466 => 254,  458 => 251,  453 => 249,  449 => 248,  445 => 247,  442 => 246,  437 => 245,  410 => 220,  403 => 218,  401 => 217,  393 => 214,  388 => 212,  384 => 211,  380 => 210,  377 => 209,  372 => 208,  345 => 183,  338 => 181,  336 => 180,  328 => 177,  323 => 175,  319 => 174,  315 => 173,  311 => 172,  308 => 171,  303 => 170,  274 => 144,  263 => 138,  254 => 132,  245 => 126,  203 => 87,  198 => 85,  188 => 78,  180 => 73,  169 => 68,  167 => 67,  166 => 62,  158 => 57,  154 => 56,  149 => 54,  120 => 28,  108 => 19,  99 => 13,  93 => 10,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ project.name }} - Détails - SIGEP Tchad{% endblock %}

{% block body %}
<!-- Toolbar -->
<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
    <div id=\"kt_app_toolbar_container\" class=\"app-container container-xxl d-flex flex-stack\">
        <div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
            <h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\">{{ project.name }}</h1>
            <ul class=\"breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1\">
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"text-muted text-hover-primary\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">
                    <a href=\"{{ path('app_projects') }}\" class=\"text-muted text-hover-primary\">Projets</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <span class=\"bullet bg-gray-400 w-5px h-2px\"></span>
                </li>
                <li class=\"breadcrumb-item text-muted\">Fiche projet</li>
            </ul>
        </div>
        <div class=\"d-flex align-items-center gap-2 gap-lg-3\">
            <a href=\"{{ path('app_projects_edit', {id: project.id}) }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"ki-outline ki-pencil fs-2\"></i> Modifier
            </a>
            <button type=\"button\" class=\"btn btn-sm btn-light-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_delete_project\">
                <i class=\"ki-outline ki-trash fs-2\"></i> Supprimer
            </button>
        </div>
    </div>
</div>

<!-- Content -->
<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
    <div id=\"kt_app_content_container\" class=\"app-container container-xxl\">
        
        <div class=\"d-flex flex-column flex-lg-row\">
            <!-- Sidebar -->
            <div class=\"flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0\">
                <div class=\"card card-flush\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h2>Statistiques du Projet</h2>
                        </div>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex flex-center flex-column mb-10\">
                            <div class=\"symbol symbol-100px symbol-circle mb-7\">
                                <span class=\"symbol-label bg-light-primary text-primary fs-5x fw-bold\">{{ project.name|first|upper }}</span>
                            </div>
                            <span class=\"fs-3 text-gray-800 fw-bold mb-1\">{{ project.name }}</span>
                            <div class=\"fs-5 fw-semibold text-muted mb-6\">{{ project.sectorLabel }}</div>
                        </div>

                        <div class=\"d-flex flex-stack fs-4 py-3\">
                            <div class=\"fw-bold\">Statut</div>
                            {% set statusColor = {
                                'termine': 'success',
                                'en-cours': 'primary',
                                'en-retard': 'danger',
                                'planifie': 'info'
                            }[project.status] ?? 'secondary' %}
                            <div class=\"badge badge-light-{{ statusColor }} fs-6\">{{ project.statusLabel }}</div>
                        </div>
                        <div class=\"separator separator-dashed my-3\"></div>
                        <div class=\"d-flex flex-stack fs-4 py-3\">
                            <div class=\"fw-bold\">Budget Total</div>
                            <span class=\"text-gray-800 fw-bolder fs-5\">{{ project.budgetTotal|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                        <div class=\"separator separator-dashed my-3\"></div>
                        <div class=\"d-flex flex-stack fs-4 py-3\">
                            <div class=\"fw-bold\">Décaissé</div>
                            <span class=\"text-gray-800 fw-bolder fs-5\">{{ project.montantDecaisse|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                        <div class=\"separator separator-dashed my-3\"></div>
                        <div class=\"d-flex flex-column py-3\">
                            <div class=\"fw-bold mb-2\">Progression</div>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"progress h-8px w-100 me-2\">
                                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: {{ project.progress }}%;\"></div>
                                </div>
                                <span class=\"text-muted fs-7 fw-bold\">{{ project.progress }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class=\"flex-lg-row-fluid ms-lg-15\">
                <!-- Navigation Tabs -->
                <ul class=\"nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4 active\" data-bs-toggle=\"tab\" href=\"#kt_project_overview\">Vue d'ensemble</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_financements\">Financements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_decaissements\">Décaissements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_conventions\">Conventions</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_project_audits\">Audits</a>
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"projectTabContent\">
                    <!-- Overview Tab -->
                    <div class=\"tab-pane fade show active\" id=\"kt_project_overview\" role=\"tabpanel\">
                        <div class=\"card card-flush mb-5 mb-xl-10\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Informations Générales</h3>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Description</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">{{ project.description|nl2br }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Institution Responsable</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">{{ project.institution ? project.institution.name : 'N/A' }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Période</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">Du {{ project.dateDebut ? project.dateDebut|date('d/m/Y') : 'N/A' }} au {{ project.dateFin ? project.dateFin|date('d/m/Y') : 'N/A' }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-7\">
                                    <label class=\"col-lg-4 fw-semibold text-muted\">Localisation</label>
                                    <div class=\"col-lg-8\">
                                        <span class=\"fw-bold fs-6 text-gray-800\">{{ project.localisation ?? 'Non précisée' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Financements Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_financements\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Financements associés</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Bailleur</th>
                                                <th>Type</th>
                                                <th class=\"text-end\">Engagé</th>
                                                <th class=\"text-end\">Décaissé</th>
                                                <th class=\"text-end\">Taux</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            {% for financement in project.financements %}
                                                <tr>
                                                    <td>{{ financement.bailleur.name }}</td>
                                                    <td>{{ financement.typeLabel }}</td>
                                                    <td class=\"text-end\">{{ financement.montantEngage|number_format(0, ',', ' ') }}</td>
                                                    <td class=\"text-end\">{{ financement.montantDecaisse|number_format(0, ',', ' ') }}</td>
                                                    <td class=\"text-end\">
                                                        <span class=\"badge badge-light-primary\">{{ financement.tauxDecaissement }}%</span>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr><td colspan=\"5\" class=\"text-center\">Aucun financement trouvé</td></tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Décaissements Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_decaissements\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Décaissements récents</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Réf</th>
                                                <th>Date</th>
                                                <th class=\"text-end\">Montant</th>
                                                <th class=\"text-center\">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            {% for decaissement in project.decaissements %}
                                                <tr>
                                                    <td>{{ decaissement.reference }}</td>
                                                    <td>{{ decaissement.createdAt|date('d/m/Y') }}</td>
                                                    <td class=\"text-end\">{{ decaissement.montant|number_format(0, ',', ' ') }} FCFA</td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge badge-light-success\">{{ decaissement.statut }}</span>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr><td colspan=\"4\" class=\"text-center\">Aucun décaissement trouvé</td></tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conventions Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_conventions\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Conventions de financement</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Code</th>
                                                <th>Intitulé</th>
                                                <th class=\"text-end\">Montant</th>
                                                <th class=\"text-center\">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            {% for convention in project.conventions %}
                                                <tr>
                                                    <td>{{ convention.code }}</td>
                                                    <td>{{ convention.intitule }}</td>
                                                    <td class=\"text-end\">{{ convention.montantGlobal|number_format(0, ',', ' ') }}</td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge badge-light-info\">{{ convention.statut }}</span>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr><td colspan=\"4\" class=\"text-center\">Aucune convention trouvée</td></tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Audits Tab -->
                    <div class=\"tab-pane fade\" id=\"kt_project_audits\" role=\"tabpanel\">
                        <div class=\"card card-flush\">
                            <div class=\"card-header pt-5\">
                                <h3 class=\"card-title fw-bold text-dark\">Missions d'audit</h3>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-middle table-row-dashed fs-6 gy-5\">
                                        <thead>
                                            <tr class=\"text-start text-muted fw-bold fs-7 text-uppercase gs-0\">
                                                <th>Titre</th>
                                                <th>Date</th>
                                                <th class=\"text-center\">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"text-gray-600 fw-semibold\">
                                            {% for audit in project.audits %}
                                                <tr>
                                                    <td>{{ audit.title }}</td>
                                                    <td>{{ audit.dateAudit ? audit.dateAudit|date('d/m/Y') : 'N/A' }}</td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge badge-light-warning\">{{ audit.statut }}</span>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr><td colspan=\"3\" class=\"text-center\">Aucun audit trouvé</td></tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class=\"modal fade\" id=\"kt_modal_delete_project\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered mw-650px\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h2 class=\"fw-bold\">Confirmer la suppression</h2>
                        <div class=\"btn btn-icon btn-sm btn-active-icon-primary\" data-bs-dismiss=\"modal\">
                            <i class=\"ki-outline ki-cross fs-1\"></i>
                        </div>
                    </div>
                    <div class=\"modal-body scroll-y mx-5 mx-xl-15 my-7\">
                        <div class=\"text-center\">
                            <i class=\"ki-outline ki-information-5 text-danger fs-5x mb-5\"></i>
                            <p class=\"text-gray-700 fs-4 fw-semibold py-5\">Voulez-vous vraiment supprimer le projet \"{{ project.name }}\" ?</p>
                        </div>
                    </div>
                    <div class=\"modal-footer flex-center\">
                        <button type=\"button\" class=\"btn btn-light me-3\" data-bs-dismiss=\"modal\">Annuler</button>
                        <form action=\"{{ path('app_projects_delete', {id: project.id}) }}\" method=\"post\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ project.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') { lucide.createIcons(); }
        });
    </script>
{% endblock %}
", "project/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\project\\show.html.twig");
    }
}
