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

/* components/_kpi_card.html.twig */
class __TwigTemplate_0c92dbe6a2f0a03886242fbcfd41a3fd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_kpi_card.html.twig"));

        // line 11
        yield "
<div class=\"kpi-card ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("color", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 12, $this->source); })()), "primary")) : ("primary")), "html", null, true);
        yield "\">
    <div class=\"kpi-header\">
        <div class=\"kpi-icon\">
            <i data-lucide=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\"></i>
        </div>
        ";
        // line 17
        if ((array_key_exists("trend", $context) && (isset($context["trend"]) || array_key_exists("trend", $context) ? $context["trend"] : (function () { throw new RuntimeError('Variable "trend" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "        <div class=\"kpi-trend ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trend"]) || array_key_exists("trend", $context) ? $context["trend"] : (function () { throw new RuntimeError('Variable "trend" does not exist.', 18, $this->source); })()), "direction", [], "any", false, false, false, 18), "html", null, true);
            yield "\">
            <i data-lucide=\"";
            // line 19
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trend"]) || array_key_exists("trend", $context) ? $context["trend"] : (function () { throw new RuntimeError('Variable "trend" does not exist.', 19, $this->source); })()), "direction", [], "any", false, false, false, 19) == "up")) ? ("trending-up") : ("trending-down"));
            yield "\"></i>
            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trend"]) || array_key_exists("trend", $context) ? $context["trend"] : (function () { throw new RuntimeError('Variable "trend" does not exist.', 20, $this->source); })()), "value", [], "any", false, false, false, 20), "html", null, true);
            yield "
        </div>
        ";
        }
        // line 23
        yield "    </div>
    <div class=\"kpi-value\" data-counter=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), 0, ",", " "), "html", null, true);
        yield "</div>
    <div class=\"kpi-label\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</div>
    ";
        // line 26
        if ((array_key_exists("sublabel", $context) && (isset($context["sublabel"]) || array_key_exists("sublabel", $context) ? $context["sublabel"] : (function () { throw new RuntimeError('Variable "sublabel" does not exist.', 26, $this->source); })()))) {
            // line 27
            yield "    <div class=\"kpi-sublabel\">
        ";
            // line 28
            yield (isset($context["sublabel"]) || array_key_exists("sublabel", $context) ? $context["sublabel"] : (function () { throw new RuntimeError('Variable "sublabel" does not exist.', 28, $this->source); })());
            yield "
    </div>
    ";
        }
        // line 31
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_kpi_card.html.twig";
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
        return array (  100 => 31,  94 => 28,  91 => 27,  89 => 26,  85 => 25,  79 => 24,  76 => 23,  70 => 20,  66 => 19,  61 => 18,  59 => 17,  54 => 15,  48 => 12,  45 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Component: KPI Card
   Usage: {% include 'components/_kpi_card.html.twig' with {
       icon: 'folder-kanban',
       value: 147,
       label: 'Projets Total',
       sublabel: '<span>🟢 89 en cours</span>',
       trend: {direction: 'up', value: '+12%'},
       color: 'primary'
   } %}
#}

<div class=\"kpi-card {{ color|default('primary') }}\">
    <div class=\"kpi-header\">
        <div class=\"kpi-icon\">
            <i data-lucide=\"{{ icon }}\"></i>
        </div>
        {% if trend is defined and trend %}
        <div class=\"kpi-trend {{ trend.direction }}\">
            <i data-lucide=\"{{ trend.direction == 'up' ? 'trending-up' : 'trending-down' }}\"></i>
            {{ trend.value }}
        </div>
        {% endif %}
    </div>
    <div class=\"kpi-value\" data-counter=\"{{ value }}\">{{ value|number_format(0, ',', ' ') }}</div>
    <div class=\"kpi-label\">{{ label }}</div>
    {% if sublabel is defined and sublabel %}
    <div class=\"kpi-sublabel\">
        {{ sublabel|raw }}
    </div>
    {% endif %}
</div>
", "components/_kpi_card.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\components\\_kpi_card.html.twig");
    }
}
