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

/* institution/show.html.twig */
class __TwigTemplate_ecc00c1bfca23f1cc10c3203847fe194 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "institution/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/institution-show.css"), "html", null, true);
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
        yield "<div class=\"show-page\">
    <!-- Header -->
    <header class=\"show-page-header\">
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"back-btn\">
            <i class=\"ri-arrow-left-line\"></i>
            Retour à la liste
        </a>
        <h1>Détails de l'Institution</h1>
        <div class=\"header-actions\">
            <a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\">
                <i class=\"ri-edit-line\"></i> Modifier
            </a>
        </div>
    </header>

    <div class=\"show-container\">
        <!-- Card Principale -->
        <div class=\"detail-card main-card\">
            <div class=\"card-hero\">
                <div class=\"institution-logo-large\">
                    ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 30, $this->source); })()), "logo", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 31, $this->source); })()), "logo", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                    ";
        } else {
            // line 33
            yield "                        <div class=\"logo-placeholder-large\">
                            <i class=\"ri-building-line\"></i>
                        </div>
                    ";
        }
        // line 37
        yield "                </div>
                <div class=\"institution-identity\">
                    <div class=\"name-row\">
                        <h1>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        yield "</h1>
                        ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 41, $this->source); })()), "acronym", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                            <span class=\"acronym-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 42, $this->source); })()), "acronym", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                        ";
        }
        // line 44
        yield "                    </div>
                    <div class=\"meta-tags\">
                        <span class=\"type-tag\">
                            <i class=\"ri-price-tag-3-line\"></i>
                            ";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["institution"] ?? null), "typeInstitution", [], "any", false, true, false, 48), "name", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 48, $this->source); })()), "typeInstitution", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 48, $this->source); })()), "typeInstitution", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true)) : ("Type non défini"));
        yield "
                        </span>
                        ";
        // line 50
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 50, $this->source); })()), "sector", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                            <span class=\"sector-tag\">
                                <i class=\"ri-folder-line\"></i>
                                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 53, $this->source); })()), "sector", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 56
        yield "                    </div>
                </div>
                <div class=\"status-badge-large status-";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58)), [" " => "-"]), "html", null, true);
        yield "\">
                    ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59) == "Actif")) {
            // line 60
            yield "                        <i class=\"ri-checkbox-circle-line\"></i>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 61
(isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61) == "Inactif")) {
            // line 62
            yield "                        <i class=\"ri-close-circle-line\"></i>
                    ";
        } else {
            // line 64
            yield "                        <i class=\"ri-refresh-line\"></i>
                    ";
        }
        // line 66
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66), "html", null, true);
        yield "
                </div>
            </div>
            
            <!-- Description -->
            ";
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                <div class=\"card-section\">
                    <h3 class=\"section-label\">
                        <i class=\"ri-file-text-line\"></i> Description / Mission
                    </h3>
                    <div class=\"description-content\">
                        ";
            // line 77
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), "html", null, true));
            yield "
                    </div>
                </div>
            ";
        }
        // line 81
        yield "        </div>
        
        <!-- Grid de détails -->
        <div class=\"details-grid\">
            <!-- Leadership -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon gold\">
                        <i class=\"ri-user-star-line\"></i>
                    </div>
                    <h3>Leadership</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 94, $this->source); })()), "headName", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Responsable</span>
                            <span class=\"info-value\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 97, $this->source); })()), "headName", [], "any", false, false, false, 97), "html", null, true);
            yield "</span>
                        </div>
                    ";
        }
        // line 100
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 100, $this->source); })()), "headTitle", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Titre</span>
                            <span class=\"info-value\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 103, $this->source); })()), "headTitle", [], "any", false, false, false, 103), "html", null, true);
            yield "</span>
                        </div>
                    ";
        }
        // line 106
        yield "                    ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 106, $this->source); })()), "headName", [], "any", false, false, false, 106) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 106, $this->source); })()), "headTitle", [], "any", false, false, false, 106))) {
            // line 107
            yield "                        <p class=\"empty-text\">Aucune information sur le leadership</p>
                    ";
        }
        // line 109
        yield "                </div>
            </div>
            
            <!-- Contact -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon blue\">
                        <i class=\"ri-contacts-line\"></i>
                    </div>
                    <h3>Contact</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 121
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 121, $this->source); })()), "email", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                        <div class=\"info-row clickable\">
                            <span class=\"info-label\"><i class=\"ri-mail-line\"></i> Email</span>
                            <a href=\"mailto:";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 124, $this->source); })()), "email", [], "any", false, false, false, 124), "html", null, true);
            yield "\" class=\"info-value link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 124, $this->source); })()), "email", [], "any", false, false, false, 124), "html", null, true);
            yield "</a>
                        </div>
                    ";
        }
        // line 127
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 127, $this->source); })()), "phone", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "                        <div class=\"info-row clickable\">
                            <span class=\"info-label\"><i class=\"ri-phone-line\"></i> Téléphone</span>
                            <a href=\"tel:";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 130, $this->source); })()), "phone", [], "any", false, false, false, 130), "html", null, true);
            yield "\" class=\"info-value link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 130, $this->source); })()), "phone", [], "any", false, false, false, 130), "html", null, true);
            yield "</a>
                        </div>
                    ";
        }
        // line 133
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 133, $this->source); })()), "website", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                        <div class=\"info-row clickable\">
                            <span class=\"info-label\"><i class=\"ri-global-line\"></i> Site Web</span>
                            <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 136, $this->source); })()), "website", [], "any", false, false, false, 136), "html", null, true);
            yield "\" target=\"_blank\" class=\"info-value link\">
                                ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 137, $this->source); })()), "website", [], "any", false, false, false, 137), "html", null, true);
            yield " <i class=\"ri-external-link-line\"></i>
                            </a>
                        </div>
                    ";
        }
        // line 141
        yield "                    ";
        if ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 141, $this->source); })()), "email", [], "any", false, false, false, 141) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 141, $this->source); })()), "phone", [], "any", false, false, false, 141)) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 141, $this->source); })()), "website", [], "any", false, false, false, 141))) {
            // line 142
            yield "                        <p class=\"empty-text\">Aucune information de contact</p>
                    ";
        }
        // line 144
        yield "                </div>
            </div>
            
            <!-- Localisation -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon red\">
                        <i class=\"ri-map-pin-line\"></i>
                    </div>
                    <h3>Localisation</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 156
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 156, $this->source); })()), "address", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Adresse</span>
                            <span class=\"info-value\">";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 159, $this->source); })()), "address", [], "any", false, false, false, 159), "html", null, true);
            yield "</span>
                        </div>
                    ";
        } else {
            // line 162
            yield "                        <p class=\"empty-text\">Adresse non renseignée</p>
                    ";
        }
        // line 164
        yield "                </div>
            </div>
            
            <!-- Informations complémentaires -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon purple\">
                        <i class=\"ri-information-line\"></i>
                    </div>
                    <h3>Informations</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 176
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 176, $this->source); })()), "creationDate", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date de création</span>
                            <span class=\"info-value\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 179, $this->source); })()), "creationDate", [], "any", false, false, false, 179), "d/m/Y"), "html", null, true);
            yield "</span>
                        </div>
                    ";
        }
        // line 182
        yield "                    <div class=\"info-row\">
                        <span class=\"info-label\">Enregistré le</span>
                        <span class=\"info-value\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 184, $this->source); })()), "createdAt", [], "any", false, false, false, 184), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 186
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 186, $this->source); })()), "updatedAt", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Modifié le</span>
                            <span class=\"info-value\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 189, $this->source); })()), "updatedAt", [], "any", false, false, false, 189), "d/m/Y à H:i"), "html", null, true);
            yield "</span>
                        </div>
                    ";
        }
        // line 192
        yield "                </div>
            </div>
        </div>
        
        <!-- Actions -->
        <div class=\"action-bar\">
            <a href=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"ri-edit-line\"></i> Modifier l'institution
            </a>
            <button type=\"button\" class=\"btn btn-danger\" onclick=\"confirmDelete()\">
                <i class=\"ri-delete-bin-6-line\"></i> Supprimer
            </button>
            <a href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions");
        yield "\" class=\"btn btn-secondary\" style=\"margin-left: auto;\">
                <i class=\"ri-arrow-left-line\"></i> Retour à la liste
            </a>
        </div>
    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer l'institution <strong>";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 222, $this->source); })()), "name", [], "any", false, false, false, 222), "html", null, true);
        yield "</strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_institutions_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 227, $this->source); })()), "id", [], "any", false, false, false, 227)]), "html", null, true);
        yield "\" method=\"POST\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["institution"]) || array_key_exists("institution", $context) ? $context["institution"] : (function () { throw new RuntimeError('Variable "institution" does not exist.', 228, $this->source); })()), "id", [], "any", false, false, false, 228))), "html", null, true);
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

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
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
        return "institution/show.html.twig";
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
        return array (  510 => 239,  500 => 238,  483 => 228,  479 => 227,  471 => 222,  450 => 204,  441 => 198,  433 => 192,  427 => 189,  423 => 187,  421 => 186,  416 => 184,  412 => 182,  406 => 179,  402 => 177,  400 => 176,  386 => 164,  382 => 162,  376 => 159,  372 => 157,  370 => 156,  356 => 144,  352 => 142,  349 => 141,  342 => 137,  338 => 136,  334 => 134,  331 => 133,  323 => 130,  319 => 128,  316 => 127,  308 => 124,  304 => 122,  302 => 121,  288 => 109,  284 => 107,  281 => 106,  275 => 103,  271 => 101,  268 => 100,  262 => 97,  258 => 95,  256 => 94,  241 => 81,  234 => 77,  227 => 72,  225 => 71,  216 => 66,  212 => 64,  208 => 62,  206 => 61,  203 => 60,  201 => 59,  197 => 58,  193 => 56,  187 => 53,  183 => 51,  181 => 50,  176 => 48,  170 => 44,  164 => 42,  162 => 41,  158 => 40,  153 => 37,  147 => 33,  139 => 31,  137 => 30,  123 => 19,  114 => 13,  109 => 10,  99 => 9,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ institution.name }} - SIGEP Tchad{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('css/institution-show.css') }}\">
{% endblock %}

{% block body %}
<div class=\"show-page\">
    <!-- Header -->
    <header class=\"show-page-header\">
        <a href=\"{{ path('app_institutions') }}\" class=\"back-btn\">
            <i class=\"ri-arrow-left-line\"></i>
            Retour à la liste
        </a>
        <h1>Détails de l'Institution</h1>
        <div class=\"header-actions\">
            <a href=\"{{ path('app_institutions_edit', {id: institution.id}) }}\" class=\"btn btn-primary btn-sm\">
                <i class=\"ri-edit-line\"></i> Modifier
            </a>
        </div>
    </header>

    <div class=\"show-container\">
        <!-- Card Principale -->
        <div class=\"detail-card main-card\">
            <div class=\"card-hero\">
                <div class=\"institution-logo-large\">
                    {% if institution.logo %}
                        <img src=\"{{ asset('uploads/images/' ~ institution.logo) }}\" alt=\"{{ institution.name }}\">
                    {% else %}
                        <div class=\"logo-placeholder-large\">
                            <i class=\"ri-building-line\"></i>
                        </div>
                    {% endif %}
                </div>
                <div class=\"institution-identity\">
                    <div class=\"name-row\">
                        <h1>{{ institution.name }}</h1>
                        {% if institution.acronym %}
                            <span class=\"acronym-badge\">{{ institution.acronym }}</span>
                        {% endif %}
                    </div>
                    <div class=\"meta-tags\">
                        <span class=\"type-tag\">
                            <i class=\"ri-price-tag-3-line\"></i>
                            {{ institution.typeInstitution.name ?? 'Type non défini' }}
                        </span>
                        {% if institution.sector %}
                            <span class=\"sector-tag\">
                                <i class=\"ri-folder-line\"></i>
                                {{ institution.sector.name }}
                            </span>
                        {% endif %}
                    </div>
                </div>
                <div class=\"status-badge-large status-{{ institution.status|lower|replace({' ': '-'}) }}\">
                    {% if institution.status == 'Actif' %}
                        <i class=\"ri-checkbox-circle-line\"></i>
                    {% elseif institution.status == 'Inactif' %}
                        <i class=\"ri-close-circle-line\"></i>
                    {% else %}
                        <i class=\"ri-refresh-line\"></i>
                    {% endif %}
                    {{ institution.status }}
                </div>
            </div>
            
            <!-- Description -->
            {% if institution.description %}
                <div class=\"card-section\">
                    <h3 class=\"section-label\">
                        <i class=\"ri-file-text-line\"></i> Description / Mission
                    </h3>
                    <div class=\"description-content\">
                        {{ institution.description|nl2br }}
                    </div>
                </div>
            {% endif %}
        </div>
        
        <!-- Grid de détails -->
        <div class=\"details-grid\">
            <!-- Leadership -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon gold\">
                        <i class=\"ri-user-star-line\"></i>
                    </div>
                    <h3>Leadership</h3>
                </div>
                <div class=\"card-body\">
                    {% if institution.headName %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Responsable</span>
                            <span class=\"info-value\">{{ institution.headName }}</span>
                        </div>
                    {% endif %}
                    {% if institution.headTitle %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Titre</span>
                            <span class=\"info-value\">{{ institution.headTitle }}</span>
                        </div>
                    {% endif %}
                    {% if not institution.headName and not institution.headTitle %}
                        <p class=\"empty-text\">Aucune information sur le leadership</p>
                    {% endif %}
                </div>
            </div>
            
            <!-- Contact -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon blue\">
                        <i class=\"ri-contacts-line\"></i>
                    </div>
                    <h3>Contact</h3>
                </div>
                <div class=\"card-body\">
                    {% if institution.email %}
                        <div class=\"info-row clickable\">
                            <span class=\"info-label\"><i class=\"ri-mail-line\"></i> Email</span>
                            <a href=\"mailto:{{ institution.email }}\" class=\"info-value link\">{{ institution.email }}</a>
                        </div>
                    {% endif %}
                    {% if institution.phone %}
                        <div class=\"info-row clickable\">
                            <span class=\"info-label\"><i class=\"ri-phone-line\"></i> Téléphone</span>
                            <a href=\"tel:{{ institution.phone }}\" class=\"info-value link\">{{ institution.phone }}</a>
                        </div>
                    {% endif %}
                    {% if institution.website %}
                        <div class=\"info-row clickable\">
                            <span class=\"info-label\"><i class=\"ri-global-line\"></i> Site Web</span>
                            <a href=\"{{ institution.website }}\" target=\"_blank\" class=\"info-value link\">
                                {{ institution.website }} <i class=\"ri-external-link-line\"></i>
                            </a>
                        </div>
                    {% endif %}
                    {% if not institution.email and not institution.phone and not institution.website %}
                        <p class=\"empty-text\">Aucune information de contact</p>
                    {% endif %}
                </div>
            </div>
            
            <!-- Localisation -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon red\">
                        <i class=\"ri-map-pin-line\"></i>
                    </div>
                    <h3>Localisation</h3>
                </div>
                <div class=\"card-body\">
                    {% if institution.address %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Adresse</span>
                            <span class=\"info-value\">{{ institution.address }}</span>
                        </div>
                    {% else %}
                        <p class=\"empty-text\">Adresse non renseignée</p>
                    {% endif %}
                </div>
            </div>
            
            <!-- Informations complémentaires -->
            <div class=\"detail-card\">
                <div class=\"card-header\">
                    <div class=\"card-icon purple\">
                        <i class=\"ri-information-line\"></i>
                    </div>
                    <h3>Informations</h3>
                </div>
                <div class=\"card-body\">
                    {% if institution.creationDate %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date de création</span>
                            <span class=\"info-value\">{{ institution.creationDate|date('d/m/Y') }}</span>
                        </div>
                    {% endif %}
                    <div class=\"info-row\">
                        <span class=\"info-label\">Enregistré le</span>
                        <span class=\"info-value\">{{ institution.createdAt|date('d/m/Y à H:i') }}</span>
                    </div>
                    {% if institution.updatedAt %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Modifié le</span>
                            <span class=\"info-value\">{{ institution.updatedAt|date('d/m/Y à H:i') }}</span>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <!-- Actions -->
        <div class=\"action-bar\">
            <a href=\"{{ path('app_institutions_edit', {id: institution.id}) }}\" class=\"btn btn-primary\">
                <i class=\"ri-edit-line\"></i> Modifier l'institution
            </a>
            <button type=\"button\" class=\"btn btn-danger\" onclick=\"confirmDelete()\">
                <i class=\"ri-delete-bin-6-line\"></i> Supprimer
            </button>
            <a href=\"{{ path('app_institutions') }}\" class=\"btn btn-secondary\" style=\"margin-left: auto;\">
                <i class=\"ri-arrow-left-line\"></i> Retour à la liste
            </a>
        </div>
    </div>
</div>

<!-- Modal de Suppression -->
<div id=\"deleteModal\" class=\"modal\">
    <div class=\"modal-overlay\" onclick=\"closeDeleteModal()\"></div>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3><i class=\"ri-alert-line\"></i> Confirmer la suppression</h3>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">
                <i class=\"ri-close-line\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer l'institution <strong>{{ institution.name }}</strong> ?</p>
            <p class=\"text-muted\">Cette action est irréversible.</p>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">Annuler</button>
            <form action=\"{{ path('app_institutions_delete', {id: institution.id}) }}\" method=\"POST\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ institution.id) }}\">
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
", "institution/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\institution\\show.html.twig");
    }
}
