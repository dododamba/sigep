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

/* project/new.html.twig */
class __TwigTemplate_a73ddee68a22fc27ea7f598d8448986a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/new.html.twig"));

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

        yield "Nouveau Projet - SIGEP Tchad";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/project-form.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"folder-plus\"></i>
                </span>
                Nouveau Projet
            </h2>
            <p>Remplissez les informations pour créer un nouveau projet public</p>
        </div>
        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"btn btn-outline\">
            <i data-lucide=\"arrow-left\"></i>
            Retour aux projets
        </a>
    </div>

    <!-- Flash Messages -->
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 30
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                <i data-lucide=\"";
                // line 32
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } else {
                    yield "alert-circle";
                }
                yield "\"></i>
                ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
    ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["class" => "project-form", "novalidate" => "novalidate"]]);
        yield "
    
    <!-- Section 1: Informations générales -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon blue\">
                <i data-lucide=\"info\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Informations générales</h3>
                <p>Définissez les caractéristiques principales du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    <label class=\"form-label\">
                        Nom du projet <span class=\"required\">*</span>
                    </label>
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), 'widget', ["attr" => ["placeholder" => "Ex: Route Nationale N'Djamena - Abéché"]]);
        yield "
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">
                        Code projet <span class=\"required\">*</span>
                    </label>
                    <div class=\"input-with-icon\">
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "code", [], "any", false, false, false, 66), 'widget');
        yield "
                        <i data-lucide=\"hash\" class=\"input-icon\"></i>
                    </div>
                    <span class=\"form-hint\">
                        <i data-lucide=\"info\"></i>
                        Format: PRJ-ANNÉE-NUMÉRO
                    </span>
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "code", [], "any", false, false, false, 73), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">
                        Localisation
                    </label>
                    <div class=\"input-with-icon\">
                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "localisation", [], "any", false, false, false, 81), 'widget', ["attr" => ["placeholder" => "Ex: N'Djamena, Région du Lac..."]]);
        yield "
                        <i data-lucide=\"map-pin\" class=\"input-icon\"></i>
                    </div>
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "localisation", [], "any", false, false, false, 84), 'errors');
        yield "
                </div>
                
                <div class=\"form-group full-width\">
                    <label class=\"form-label\">
                        Description
                    </label>
                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "description", [], "any", false, false, false, 91), 'widget', ["attr" => ["placeholder" => "Décrivez les objectifs et la portée du projet...", "rows" => 4]]);
        yield "
                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "description", [], "any", false, false, false, 92), 'errors');
        yield "
                </div>
            </div>

            <!-- Sector Selection -->
            <div class=\"form-section-title\">
                <label class=\"form-label\">Secteur d'activité <span class=\"required\">*</span></label>
            </div>
            <div class=\"sector-grid\">
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sectors"]) || array_key_exists("sectors", $context) ? $context["sectors"] : (function () { throw new RuntimeError('Variable "sectors" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 102
            yield "                    <label class=\"sector-option\" data-sector=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
                        <input type=\"radio\" name=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "sector", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "full_name", [], "any", false, false, false, 103), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" 
                               ";
            // line 104
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "sector", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "value", [], "any", false, false, false, 104) == $context["value"])) {
                yield "checked";
            }
            yield ">
                        <div class=\"sector-icon ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
                            <i data-lucide=\"";
            // line 106
            if (($context["value"] == "infrastructure")) {
                yield "road";
            } elseif (($context["value"] == "sante")) {
                yield "heart-pulse";
            } elseif (($context["value"] == "energie")) {
                yield "zap";
            } elseif (($context["value"] == "agriculture")) {
                yield "wheat";
            } elseif (($context["value"] == "education")) {
                yield "graduation-cap";
            } elseif (($context["value"] == "eau")) {
                yield "droplets";
            } else {
                yield "folder";
            }
            yield "\"></i>
                        </div>
                        <span class=\"sector-label\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</span>
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "            </div>
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "sector", [], "any", false, false, false, 112), 'errors');
        yield "

            <!-- Priority Selection -->
            <div class=\"form-section-title\" style=\"margin-top: 32px;\">
                <label class=\"form-label\">Priorité <span class=\"required\">*</span></label>
            </div>
            <div class=\"priority-options\">
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["priorities"]) || array_key_exists("priorities", $context) ? $context["priorities"] : (function () { throw new RuntimeError('Variable "priorities" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 120
            yield "                    <label class=\"priority-option ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" data-priority=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
                        <input type=\"radio\" name=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "priorite", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "full_name", [], "any", false, false, false, 121), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"
                               ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "priorite", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "value", [], "any", false, false, false, 122) == $context["value"])) {
                yield "checked";
            }
            yield ">
                        <i data-lucide=\"";
            // line 123
            if (($context["value"] == "haute")) {
                yield "alert-triangle";
            } elseif (($context["value"] == "moyenne")) {
                yield "minus-circle";
            } else {
                yield "check-circle";
            }
            yield "\"></i>
                        ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "            </div>
            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "priorite", [], "any", false, false, false, 128), 'errors');
        yield "
        </div>
    </div>

    <!-- Section 2: Planning -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon purple\">
                <i data-lucide=\"calendar\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Planning du projet</h3>
                <p>Définissez les dates et le statut du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid three-cols\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Date de début</label>
                    ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "dateDebut", [], "any", false, false, false, 147), 'widget');
        yield "
                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "dateDebut", [], "any", false, false, false, 148), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Date de fin prévue</label>
                    ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "dateFin", [], "any", false, false, false, 153), 'widget');
        yield "
                    ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "dateFin", [], "any", false, false, false, 154), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Statut</label>
                    ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "status", [], "any", false, false, false, 159), 'widget');
        yield "
                    ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "status", [], "any", false, false, false, 160), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Finances -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gold\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Informations financières</h3>
                <p>Budget et sources de financement du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid three-cols\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Budget total (Milliards FCFA)</label>
                    <div class=\"input-with-suffix\">
                        ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "budgetTotal", [], "any", false, false, false, 182), 'widget', ["attr" => ["placeholder" => "0.00"]]);
        yield "
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "budgetTotal", [], "any", false, false, false, 185), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Montant décaissé (Milliards FCFA)</label>
                    <div class=\"input-with-suffix\">
                        ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 191), 'widget', ["attr" => ["placeholder" => "0.00"]]);
        yield "
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "montantDecaisse", [], "any", false, false, false, 194), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Progression (%)</label>
                    <div class=\"progress-input-wrapper\">
                        ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "progress", [], "any", false, false, false, 200), 'widget', ["attr" => ["min" => 0, "max" => 100, "placeholder" => "0"]]);
        yield "
                        <div class=\"progress-preview\">
                            <div class=\"progress-bar-mini\">
                                <div class=\"progress-fill-mini\" id=\"progressPreview\" style=\"width: ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "progress", [], "any", false, true, false, 203), "vars", [], "any", false, true, false, 203), "value", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "progress", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "value", [], "any", false, false, false, 203), 0)) : (0)), "html", null, true);
        yield "%\"></div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "progress", [], "any", false, false, false, 207), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-divider\"></div>

            <div class=\"form-grid three-cols\">
                <div class=\"form-group span-3\">
                    <label class=\"form-label\">Source de financement</label>
                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 216), 'widget', ["attr" => ["placeholder" => "Ex: Banque Mondiale, BAD, Budget National..."]]);
        yield "
                    ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "sourceFinancement", [], "any", false, false, false, 217), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-grid three-cols\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Financement national</label>
                    <div class=\"input-with-suffix\">
                        ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "financementNational", [], "any", false, false, false, 225), 'widget', ["attr" => ["placeholder" => "0.00"]]);
        yield "
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "financementNational", [], "any", false, false, false, 228), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Financement partenaires</label>
                    <div class=\"input-with-suffix\">
                        ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "financementPartenaires", [], "any", false, false, false, 234), 'widget', ["attr" => ["placeholder" => "0.00"]]);
        yield "
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "financementPartenaires", [], "any", false, false, false, 237), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Autres financements</label>
                    <div class=\"input-with-suffix\">
                        ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "financementAutre", [], "any", false, false, false, 243), 'widget', ["attr" => ["placeholder" => "0.00"]]);
        yield "
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    ";
        // line 246
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "financementAutre", [], "any", false, false, false, 246), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Responsables -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon green\">
                <i data-lucide=\"users\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Responsables et bénéficiaires</h3>
                <p>Identifiez les parties prenantes du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Maître d'ouvrage</label>
                    ";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 267), 'widget', ["attr" => ["placeholder" => "Ex: Ministère des Infrastructures"]]);
        yield "
                    ";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "maitreOuvrage", [], "any", false, false, false, 268), 'errors');
        yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Chef de projet</label>
                    ";
        // line 273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "chefProjet", [], "any", false, false, false, 273), 'widget', ["attr" => ["placeholder" => "Nom du responsable"]]);
        yield "
                    ";
        // line 274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "chefProjet", [], "any", false, false, false, 274), 'errors');
        yield "
                </div>
                
                <div class=\"form-group full-width\">
                    <label class=\"form-label\">Bénéficiaires</label>
                    ";
        // line 279
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "beneficiaires", [], "any", false, false, false, 279), 'widget', ["attr" => ["placeholder" => "Ex: 500,000 habitants"]]);
        yield "
                    ";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "beneficiaires", [], "any", false, false, false, 280), 'errors');
        yield "
                </div>
            </div>

            ";
        // line 284
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", true, true, false, 284)) {
            // line 285
            yield "                <div class=\"form-grid\" style=\"margin-top: 24px;\">
                    <div class=\"form-group\">
                        <label class=\"form-label\">Institution responsable</label>
                        ";
            // line 288
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "institution", [], "any", false, false, false, 288), 'widget');
            yield "
                        ";
            // line 289
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "institution", [], "any", false, false, false, 289), 'errors');
            yield "
                    </div>
                    
                    ";
            // line 292
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "partnerPrincipal", [], "any", true, true, false, 292)) {
                // line 293
                yield "                    <div class=\"form-group\">
                        <label class=\"form-label\">Partenaire principal</label>
                        ";
                // line 295
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "partnerPrincipal", [], "any", false, false, false, 295), 'widget');
                yield "
                        ";
                // line 296
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "partnerPrincipal", [], "any", false, false, false, 296), 'errors');
                yield "
                    </div>
                    ";
            }
            // line 299
            yield "                </div>
            ";
        }
        // line 301
        yield "        </div>
    </div>

    <!-- Section 5: Notes -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gray\">
                <i data-lucide=\"file-text\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Notes additionnelles</h3>
                <p>Informations complémentaires sur le projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-group\">
                ";
        // line 317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "notes", [], "any", false, false, false, 317), 'widget', ["attr" => ["placeholder" => "Ajoutez des notes ou commentaires...", "rows" => 4]]);
        yield "
                ";
        // line 318
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "notes", [], "any", false, false, false, 318), 'errors');
        yield "
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class=\"form-actions\">
        <div class=\"form-actions-left\">
            <a href=\"";
        // line 326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
        yield "\" class=\"btn btn-outline\">
                <i data-lucide=\"x\"></i>
                Annuler
            </a>
        </div>
        <div class=\"form-actions-right\">
            <button type=\"submit\" class=\"btn btn-success btn-lg\">
                <i data-lucide=\"check\"></i>
                Créer le projet
            </button>
        </div>
    </div>

    ";
        // line 339
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 343
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 344
        yield "<script>
    lucide.createIcons();

    // Sector selection
    document.querySelectorAll('.sector-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.sector-option').forEach(o => o.classList.remove('selected'));
            this.classList.add('selected');
            this.querySelector('input').checked = true;
        });
        
        // Initialize selected state
        if (option.querySelector('input').checked) {
            option.classList.add('selected');
        }
    });

    // Priority selection
    document.querySelectorAll('.priority-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.priority-option').forEach(o => o.classList.remove('selected'));
            this.classList.add('selected');
            this.querySelector('input').checked = true;
        });
        
        // Initialize selected state
        if (option.querySelector('input').checked) {
            option.classList.add('selected');
        }
    });

    // Progress preview
    const progressInput = document.querySelector('input[name\$=\"[progress]\"]');
    if (progressInput) {
        progressInput.addEventListener('input', function() {
            const value = Math.min(100, Math.max(0, this.value || 0));
            document.getElementById('progressPreview').style.width = value + '%';
        });
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
        return "project/new.html.twig";
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
        return array (  720 => 344,  710 => 343,  699 => 339,  683 => 326,  672 => 318,  668 => 317,  650 => 301,  646 => 299,  640 => 296,  636 => 295,  632 => 293,  630 => 292,  624 => 289,  620 => 288,  615 => 285,  613 => 284,  606 => 280,  602 => 279,  594 => 274,  590 => 273,  582 => 268,  578 => 267,  554 => 246,  548 => 243,  539 => 237,  533 => 234,  524 => 228,  518 => 225,  507 => 217,  503 => 216,  491 => 207,  484 => 203,  478 => 200,  469 => 194,  463 => 191,  454 => 185,  448 => 182,  423 => 160,  419 => 159,  411 => 154,  407 => 153,  399 => 148,  395 => 147,  373 => 128,  370 => 127,  361 => 124,  351 => 123,  345 => 122,  339 => 121,  332 => 120,  328 => 119,  318 => 112,  315 => 111,  306 => 108,  287 => 106,  283 => 105,  277 => 104,  271 => 103,  266 => 102,  262 => 101,  250 => 92,  246 => 91,  236 => 84,  230 => 81,  219 => 73,  209 => 66,  198 => 58,  194 => 57,  172 => 38,  169 => 37,  163 => 36,  154 => 33,  146 => 32,  141 => 31,  136 => 30,  132 => 29,  122 => 22,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Projet - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/project-form.css') }}\">
{% endblock %}

{% block body %}
<div class=\"content-area\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left\">
            <h2>
                <span class=\"page-header-icon\">
                    <i data-lucide=\"folder-plus\"></i>
                </span>
                Nouveau Projet
            </h2>
            <p>Remplissez les informations pour créer un nouveau projet public</p>
        </div>
        <a href=\"{{ path('app_projects') }}\" class=\"btn btn-outline\">
            <i data-lucide=\"arrow-left\"></i>
            Retour aux projets
        </a>
    </div>

    <!-- Flash Messages -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <i data-lucide=\"{% if label == 'success' %}check-circle{% else %}alert-circle{% endif %}\"></i>
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {{ form_start(form, {'attr': {'class': 'project-form', 'novalidate': 'novalidate'}}) }}
    
    <!-- Section 1: Informations générales -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon blue\">
                <i data-lucide=\"info\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Informations générales</h3>
                <p>Définissez les caractéristiques principales du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group full-width\">
                    <label class=\"form-label\">
                        Nom du projet <span class=\"required\">*</span>
                    </label>
                    {{ form_widget(form.name, {'attr': {'placeholder': 'Ex: Route Nationale N\\'Djamena - Abéché'}}) }}
                    {{ form_errors(form.name) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">
                        Code projet <span class=\"required\">*</span>
                    </label>
                    <div class=\"input-with-icon\">
                        {{ form_widget(form.code) }}
                        <i data-lucide=\"hash\" class=\"input-icon\"></i>
                    </div>
                    <span class=\"form-hint\">
                        <i data-lucide=\"info\"></i>
                        Format: PRJ-ANNÉE-NUMÉRO
                    </span>
                    {{ form_errors(form.code) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">
                        Localisation
                    </label>
                    <div class=\"input-with-icon\">
                        {{ form_widget(form.localisation, {'attr': {'placeholder': 'Ex: N\\'Djamena, Région du Lac...'}}) }}
                        <i data-lucide=\"map-pin\" class=\"input-icon\"></i>
                    </div>
                    {{ form_errors(form.localisation) }}
                </div>
                
                <div class=\"form-group full-width\">
                    <label class=\"form-label\">
                        Description
                    </label>
                    {{ form_widget(form.description, {'attr': {'placeholder': 'Décrivez les objectifs et la portée du projet...', 'rows': 4}}) }}
                    {{ form_errors(form.description) }}
                </div>
            </div>

            <!-- Sector Selection -->
            <div class=\"form-section-title\">
                <label class=\"form-label\">Secteur d'activité <span class=\"required\">*</span></label>
            </div>
            <div class=\"sector-grid\">
                {% for label, value in sectors %}
                    <label class=\"sector-option\" data-sector=\"{{ value }}\">
                        <input type=\"radio\" name=\"{{ form.sector.vars.full_name }}\" value=\"{{ value }}\" 
                               {% if form.sector.vars.value == value %}checked{% endif %}>
                        <div class=\"sector-icon {{ value }}\">
                            <i data-lucide=\"{% if value == 'infrastructure' %}road{% elseif value == 'sante' %}heart-pulse{% elseif value == 'energie' %}zap{% elseif value == 'agriculture' %}wheat{% elseif value == 'education' %}graduation-cap{% elseif value == 'eau' %}droplets{% else %}folder{% endif %}\"></i>
                        </div>
                        <span class=\"sector-label\">{{ label }}</span>
                    </label>
                {% endfor %}
            </div>
            {{ form_errors(form.sector) }}

            <!-- Priority Selection -->
            <div class=\"form-section-title\" style=\"margin-top: 32px;\">
                <label class=\"form-label\">Priorité <span class=\"required\">*</span></label>
            </div>
            <div class=\"priority-options\">
                {% for label, value in priorities %}
                    <label class=\"priority-option {{ value }}\" data-priority=\"{{ value }}\">
                        <input type=\"radio\" name=\"{{ form.priorite.vars.full_name }}\" value=\"{{ value }}\"
                               {% if form.priorite.vars.value == value %}checked{% endif %}>
                        <i data-lucide=\"{% if value == 'haute' %}alert-triangle{% elseif value == 'moyenne' %}minus-circle{% else %}check-circle{% endif %}\"></i>
                        {{ label }}
                    </label>
                {% endfor %}
            </div>
            {{ form_errors(form.priorite) }}
        </div>
    </div>

    <!-- Section 2: Planning -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon purple\">
                <i data-lucide=\"calendar\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Planning du projet</h3>
                <p>Définissez les dates et le statut du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid three-cols\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Date de début</label>
                    {{ form_widget(form.dateDebut) }}
                    {{ form_errors(form.dateDebut) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Date de fin prévue</label>
                    {{ form_widget(form.dateFin) }}
                    {{ form_errors(form.dateFin) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Statut</label>
                    {{ form_widget(form.status) }}
                    {{ form_errors(form.status) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Finances -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gold\">
                <i data-lucide=\"wallet\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Informations financières</h3>
                <p>Budget et sources de financement du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid three-cols\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Budget total (Milliards FCFA)</label>
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.budgetTotal, {'attr': {'placeholder': '0.00'}}) }}
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    {{ form_errors(form.budgetTotal) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Montant décaissé (Milliards FCFA)</label>
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.montantDecaisse, {'attr': {'placeholder': '0.00'}}) }}
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    {{ form_errors(form.montantDecaisse) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Progression (%)</label>
                    <div class=\"progress-input-wrapper\">
                        {{ form_widget(form.progress, {'attr': {'min': 0, 'max': 100, 'placeholder': '0'}}) }}
                        <div class=\"progress-preview\">
                            <div class=\"progress-bar-mini\">
                                <div class=\"progress-fill-mini\" id=\"progressPreview\" style=\"width: {{ form.progress.vars.value|default(0) }}%\"></div>
                            </div>
                        </div>
                    </div>
                    {{ form_errors(form.progress) }}
                </div>
            </div>

            <div class=\"form-divider\"></div>

            <div class=\"form-grid three-cols\">
                <div class=\"form-group span-3\">
                    <label class=\"form-label\">Source de financement</label>
                    {{ form_widget(form.sourceFinancement, {'attr': {'placeholder': 'Ex: Banque Mondiale, BAD, Budget National...'}}) }}
                    {{ form_errors(form.sourceFinancement) }}
                </div>
            </div>

            <div class=\"form-grid three-cols\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Financement national</label>
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.financementNational, {'attr': {'placeholder': '0.00'}}) }}
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    {{ form_errors(form.financementNational) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Financement partenaires</label>
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.financementPartenaires, {'attr': {'placeholder': '0.00'}}) }}
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    {{ form_errors(form.financementPartenaires) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Autres financements</label>
                    <div class=\"input-with-suffix\">
                        {{ form_widget(form.financementAutre, {'attr': {'placeholder': '0.00'}}) }}
                        <span class=\"input-suffix\">Mds</span>
                    </div>
                    {{ form_errors(form.financementAutre) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Responsables -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon green\">
                <i data-lucide=\"users\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Responsables et bénéficiaires</h3>
                <p>Identifiez les parties prenantes du projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-grid\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Maître d'ouvrage</label>
                    {{ form_widget(form.maitreOuvrage, {'attr': {'placeholder': 'Ex: Ministère des Infrastructures'}}) }}
                    {{ form_errors(form.maitreOuvrage) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Chef de projet</label>
                    {{ form_widget(form.chefProjet, {'attr': {'placeholder': 'Nom du responsable'}}) }}
                    {{ form_errors(form.chefProjet) }}
                </div>
                
                <div class=\"form-group full-width\">
                    <label class=\"form-label\">Bénéficiaires</label>
                    {{ form_widget(form.beneficiaires, {'attr': {'placeholder': 'Ex: 500,000 habitants'}}) }}
                    {{ form_errors(form.beneficiaires) }}
                </div>
            </div>

            {% if form.institution is defined %}
                <div class=\"form-grid\" style=\"margin-top: 24px;\">
                    <div class=\"form-group\">
                        <label class=\"form-label\">Institution responsable</label>
                        {{ form_widget(form.institution) }}
                        {{ form_errors(form.institution) }}
                    </div>
                    
                    {% if form.partnerPrincipal is defined %}
                    <div class=\"form-group\">
                        <label class=\"form-label\">Partenaire principal</label>
                        {{ form_widget(form.partnerPrincipal) }}
                        {{ form_errors(form.partnerPrincipal) }}
                    </div>
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Section 5: Notes -->
    <div class=\"form-card\">
        <div class=\"form-card-header\">
            <div class=\"form-card-icon gray\">
                <i data-lucide=\"file-text\"></i>
            </div>
            <div class=\"form-card-title\">
                <h3>Notes additionnelles</h3>
                <p>Informations complémentaires sur le projet</p>
            </div>
        </div>
        <div class=\"form-card-body\">
            <div class=\"form-group\">
                {{ form_widget(form.notes, {'attr': {'placeholder': 'Ajoutez des notes ou commentaires...', 'rows': 4}}) }}
                {{ form_errors(form.notes) }}
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class=\"form-actions\">
        <div class=\"form-actions-left\">
            <a href=\"{{ path('app_projects') }}\" class=\"btn btn-outline\">
                <i data-lucide=\"x\"></i>
                Annuler
            </a>
        </div>
        <div class=\"form-actions-right\">
            <button type=\"submit\" class=\"btn btn-success btn-lg\">
                <i data-lucide=\"check\"></i>
                Créer le projet
            </button>
        </div>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}

{% block javascripts %}
<script>
    lucide.createIcons();

    // Sector selection
    document.querySelectorAll('.sector-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.sector-option').forEach(o => o.classList.remove('selected'));
            this.classList.add('selected');
            this.querySelector('input').checked = true;
        });
        
        // Initialize selected state
        if (option.querySelector('input').checked) {
            option.classList.add('selected');
        }
    });

    // Priority selection
    document.querySelectorAll('.priority-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.priority-option').forEach(o => o.classList.remove('selected'));
            this.classList.add('selected');
            this.querySelector('input').checked = true;
        });
        
        // Initialize selected state
        if (option.querySelector('input').checked) {
            option.classList.add('selected');
        }
    });

    // Progress preview
    const progressInput = document.querySelector('input[name\$=\"[progress]\"]');
    if (progressInput) {
        progressInput.addEventListener('input', function() {
            const value = Math.min(100, Math.max(0, this.value || 0));
            document.getElementById('progressPreview').style.width = value + '%';
        });
    }
</script>
{% endblock %}
", "project/new.html.twig", "/home/xdevcorp/Projects/sigep/templates/project/new.html.twig");
    }
}
