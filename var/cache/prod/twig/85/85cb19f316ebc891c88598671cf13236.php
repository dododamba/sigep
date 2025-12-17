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

/* @DataTables/datatable_html.html.twig */
class __TwigTemplate_c7d02a79dd98f84f2a320e8318b77c6b extends Template
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
        $context["__internal_b353d3420c9c9a01c3e31ac118fbe982"] = CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "translationDomain", [], "any", false, false, false, 1);
        // line 2
        yield "
<table id=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\"  class=\"";
        if ((array_key_exists("className", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["className"] ?? null)))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["className"] ?? null), "html", null, true);
        }
        yield "\">
    <thead>
    <tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "columns", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            yield "            <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7), [],             // line 1
($context["__internal_b353d3420c9c9a01c3e31ac118fbe982"] ?? null)), "html", null, true);
            // line 7
            yield "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "    </tr>
    ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "option", ["searching"], "method", false, false, false, 10) && CoreExtension::inFilter((((array_key_exists("columnFilter", $context) &&  !(null === $context["columnFilter"]))) ? ($context["columnFilter"]) : ("")), ["both", "thead"]))) {
            // line 11
            yield "        <tr class=\"datatable-filters\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "columns", [], "any", false, false, false, 12));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 13
                yield "                <td>
                    ";
                // line 14
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 14) === null)) {
                    yield from $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 14), "templateHtml", [], "any", false, false, false, 14), "@DataTables/datatable_html.html.twig", 14)->unwrap()->yield($context);
                }
                // line 15
                yield "                </td>
            ";
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
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "        </tr>
    ";
        }
        // line 19
        yield "    </thead>
    <tbody>
    </tbody>

    ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "option", ["searching"], "method", false, false, false, 23) && CoreExtension::inFilter((((array_key_exists("columnFilter", $context) &&  !(null === $context["columnFilter"]))) ? ($context["columnFilter"]) : ("")), ["both", "tfoot"]))) {
            // line 24
            yield "        <tfoot>
        <tr class=\"datatable-filters\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "columns", [], "any", false, false, false, 26));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 27
                yield "                <td>
                    ";
                // line 28
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 28) === null)) {
                    yield from $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 28), "templateHtml", [], "any", false, false, false, 28), "@DataTables/datatable_html.html.twig", 28)->unwrap()->yield($context);
                }
                // line 29
                yield "                </td>
            ";
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
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        </tr>
        </tfoot>
    ";
        }
        // line 34
        yield "</table>

";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "option", ["searching"], "method", false, false, false, 36)) {
            // line 37
            yield "    <script>
        \$('#";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
            yield "').on('init.dt', function (e, settings, json) {
            const table = \$('#";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "').DataTable();

            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "columns", [], "any", false, false, false, 41));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 42
                yield "                ";
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 42) === null)) {
                    // line 43
                    yield "                    ";
                    yield from $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 43), "templateJs", [], "any", false, false, false, 43), "@DataTables/datatable_html.html.twig", 43)->unwrap()->yield($context);
                    // line 44
                    yield "
                    \$(function () {
                        \$('#";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "name", [], "any", false, false, false, 46), "html", null, true);
                    yield "-column-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "index", [], "any", false, false, false, 46), "html", null, true);
                    yield "').on(
                            \"keyup change\",
                            delay(function () {
                                    const column = table.columns(";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "index", [], "any", false, false, false, 49), "html", null, true);
                    yield ");
                                    const newValue = \$(this).val();

                                    if (column.search() !== newValue) {
                                        column.search(newValue).draw();
                                    }
                                }
                                , ";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["datatable"] ?? null), "option", ["searchDelay"], "method", false, false, false, 56), "html", null, true);
                    yield "
                            )
                        )
                    });
                ";
                }
                // line 61
                yield "            ";
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
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "        });

        function delay(callback, ms) {
            let timer = 0;
            return function () {
                let context = this, args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function () {
                    callback.apply(context, args);
                }, ms || 0);
            };
        }
    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@DataTables/datatable_html.html.twig";
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
        return array (  264 => 62,  250 => 61,  242 => 56,  232 => 49,  224 => 46,  220 => 44,  217 => 43,  214 => 42,  197 => 41,  192 => 39,  188 => 38,  185 => 37,  183 => 36,  179 => 34,  174 => 31,  159 => 29,  155 => 28,  152 => 27,  135 => 26,  131 => 24,  129 => 23,  123 => 19,  119 => 17,  104 => 15,  100 => 14,  97 => 13,  80 => 12,  77 => 11,  75 => 10,  72 => 9,  65 => 7,  63 => 1,  61 => 7,  57 => 6,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@DataTables/datatable_html.html.twig", "/home/doda5678/app.dominiquedamba.com/vendor/omines/datatables-bundle/src/Resources/views/datatable_html.html.twig");
    }
}
