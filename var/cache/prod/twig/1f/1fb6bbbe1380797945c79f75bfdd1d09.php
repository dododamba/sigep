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

/* partials/sidebare.html.twig */
class __TwigTemplate_db94377497aa2ea36f36c42b566150b1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\" style=\"display: flex; align-items: center; justify-content: space-between;background-color: white;\">
            <div class=\"logo\">
                <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"SIGMA Logo\" class=\"logo-image\" style=\"width: 150px; height: auto;\">
            </div>
            <button class=\"toggle-btn\" id=\"toggleSidebar\">
                <i class=\"ri-menu-fold-line\"></i>
            </button>
        </div>
        
        <nav class=\"sidebar-nav\">
            <div class=\"menu-section\">
                <div class=\"menu-title\">Principal</div>
                <ul class=\"menu-items\">
                    <li>
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16) == "app_web")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-dashboard-line\"></i>
                            <span class=\"nav-text\">Tableau de bord</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sujets");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_sujets")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-user-search-line\"></i>
                            <span class=\"nav-text\">Sujets</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_organisations");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "app_organisations")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-building-line\"></i>
                            <span class=\"nav-text\">Organisations</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class=\"menu-section\">
                <div class=\"menu-title\">Surveillance</div>
                <ul class=\"menu-items\">
                    <li>
                        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_identites");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", ["_route"], "method", false, false, false, 40) == "app_identites")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-eye-line\"></i>
                            <span class=\"nav-text\">Identités numériques</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contenus");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 46), "attributes", [], "any", false, false, false, 46), "get", ["_route"], "method", false, false, false, 46) == "app_contenus")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-file-text-line\"></i>
                            <span class=\"nav-text\">Contenus</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalements");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 52), "attributes", [], "any", false, false, false, 52), "get", ["_route"], "method", false, false, false, 52) == "app_signalements")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-alarm-warning-line\"></i>
                            <span class=\"nav-text\">Signalements</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class=\"menu-section\">
                <div class=\"menu-title\">Gestion</div>
                <ul class=\"menu-items\">
                    <li>
                        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enquetes");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64) == "app_enquetes")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-search-line\"></i>
                            <span class=\"nav-text\">Enquêtes</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissements");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70) == "app_etablissements")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-map-pin-line\"></i>
                            <span class=\"nav-text\">Établissements</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_condamnations");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76) == "app_condamnations")) ? ("active") : (""));
        yield "\">
                            <i class=\"ri-scales-line\"></i>
                            <span class=\"nav-text\">Condamnations</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <i class=\"ri-user-line\"></i>
                <span class=\"nav-text\">Agent ANSE-001</span>
            </div>
        </div>
    </aside>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebare.html.twig";
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
        return array (  162 => 76,  151 => 70,  140 => 64,  123 => 52,  112 => 46,  101 => 40,  84 => 28,  73 => 22,  62 => 16,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/sidebare.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/partials/sidebare.html.twig");
    }
}
