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

/* partials/header-management.html.twig */
class __TwigTemplate_cc6a6079174f6b1d69c104c3258ff214 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header-management.html.twig"));

        // line 1
        yield "<!-- ============================================
     HEADER - Style Armoirie du Tchad
     ============================================ -->
<header class=\"header\">
    <div class=\"header-content\">
        <div class=\"header-brand\">
            <div class=\"logo-container\">
                <div class=\"logo-emblem\">
                    <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"Armoirie du Tchad\" onerror=\"this.style.display='none'\">
                </div>
                <div class=\"brand-text\">
                    <h1 class=\"brand-name\">SIGEP</h1>
                    <span class=\"brand-subtitle\">République du Tchad</span>
                </div>
            </div>
        </div>

      
        <div class=\"header-user\">
            <div class=\"user-avatar\">
                <i data-lucide=\"user\"></i>
            </div>
            <div class=\"user-info\">
                <span class=\"user-name\">";
        // line 24
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "lastname", [], "any", false, false, false, 24)), "html", null, true)) : ("Manager"));
        yield "</span>
                <span class=\"user-role\">Top Management</span>
            </div>
        </div>
    </div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header-management.html.twig";
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
        return array (  73 => 24,  55 => 9,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- ============================================
     HEADER - Style Armoirie du Tchad
     ============================================ -->
<header class=\"header\">
    <div class=\"header-content\">
        <div class=\"header-brand\">
            <div class=\"logo-container\">
                <div class=\"logo-emblem\">
                    <img src=\"{{ asset('logo.png') }}\" alt=\"Armoirie du Tchad\" onerror=\"this.style.display='none'\">
                </div>
                <div class=\"brand-text\">
                    <h1 class=\"brand-name\">SIGEP</h1>
                    <span class=\"brand-subtitle\">République du Tchad</span>
                </div>
            </div>
        </div>

      
        <div class=\"header-user\">
            <div class=\"user-avatar\">
                <i data-lucide=\"user\"></i>
            </div>
            <div class=\"user-info\">
                <span class=\"user-name\">{{ app.user ? app.user.firstname ~ ' ' ~ app.user.lastname : 'Manager' }}</span>
                <span class=\"user-role\">Top Management</span>
            </div>
        </div>
    </div>
</header>
", "partials/header-management.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partials\\header-management.html.twig");
    }
}
