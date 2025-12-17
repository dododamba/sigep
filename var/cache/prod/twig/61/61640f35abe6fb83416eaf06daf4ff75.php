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

/* @JMSSerializer/Collector/metadata.html.twig */
class __TwigTemplate_43b2e554dbaca73a192743e487bc03aa extends Template
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
        yield "<h2>Loaded metadata</h2>";
        // line 3
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 3))) {
            // line 4
            yield "<div class=\"empty\">
        <p>No metadata have been loaded.</p>
    </div>";
        } else {
            // line 9
            yield "<table>
        <thead>
        <tr>
            <th>Class</th>
            <th>File</th>
        </tr>
        </thead>";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 17
                yield "<tr>
                <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                yield "</td>
                <td nowrap=\"nowrap\">";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["files"]);
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                    yield "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['class'], $context['files'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "</table>";
        }
        // line 30
        yield "<h3>Attempted files</h3>";
        // line 31
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "metadataFiles", [], "any", false, false, false, 31))) {
            // line 32
            yield "<div class=\"empty\">
        <p>No metadata files attempted (if this list is empty, probably all the data are cached as expected)</p>
    </div>";
        } else {
            // line 36
            yield "<table>
        <thead>
        <tr>
            <th>Class</th>
            <th>Files</th>
        </tr>
        </thead>";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "metadataFiles", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 44
                yield "<tr>
                <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                yield "</td>
                <td nowrap=\"nowrap\">";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["files"]);
                foreach ($context['_seq'] as $context["file"] => $context["found"]) {
                    // line 48
                    yield "<span style=\"color: ";
                    yield (($context["found"]) ? ("green") : ("red"));
                    yield "\">
                        ";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                    yield " (";
                    yield (($context["found"]) ? ("found") : ("not found"));
                    yield ")<br/>
                        </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['file'], $context['found'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['class'], $context['files'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "</table>";
        }
        // line 58
        yield "<h3>Configured metadata directories</h3>
<table>
    <thead>
    <tr>
        <th>Prefix</th>
        <th>Path</th>
    </tr>
    </thead>";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "loadedDirs", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["prefix"] => $context["path"]) {
            // line 67
            yield "<tr>
            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["prefix"], "html", null, true);
            yield "</td>
            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["path"], "html", null, true);
            yield "</td>
        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['prefix'], $context['path'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@JMSSerializer/Collector/metadata.html.twig";
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
        return array (  178 => 72,  170 => 69,  166 => 68,  163 => 67,  159 => 66,  150 => 58,  147 => 55,  140 => 52,  129 => 49,  124 => 48,  120 => 47,  116 => 45,  113 => 44,  109 => 43,  101 => 36,  96 => 32,  94 => 31,  92 => 30,  89 => 26,  82 => 23,  74 => 21,  70 => 20,  66 => 18,  63 => 17,  59 => 16,  51 => 9,  46 => 4,  44 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@JMSSerializer/Collector/metadata.html.twig", "/home/doda5678/app.dominiquedamba.com/vendor/jms/serializer-bundle/Resources/views/Collector/metadata.html.twig");
    }
}
