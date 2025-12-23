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
class __TwigTemplate_50e842bf5d355e74f51ac4421f3a0efe extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DataTables/datatable_html.html.twig"));

        // line 1
        $context["__internal_0fc07dd7afa73eb5ddf70ddd0755e67d"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 1, $this->source); })()), "translationDomain", [], "any", false, false, false, 1);
        // line 2
        yield "
<table id=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\"  class=\"";
        if ((array_key_exists("className", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 3, $this->source); })())))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 3, $this->source); })()), "html", null, true);
        }
        yield "\">
    <thead>
    <tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 6, $this->source); })()), "columns", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            yield "            <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7), [],             // line 1
(isset($context["__internal_0fc07dd7afa73eb5ddf70ddd0755e67d"]) || array_key_exists("__internal_0fc07dd7afa73eb5ddf70ddd0755e67d", $context) ? $context["__internal_0fc07dd7afa73eb5ddf70ddd0755e67d"] : (function () { throw new RuntimeError('Variable "__internal_0fc07dd7afa73eb5ddf70ddd0755e67d" does not exist.', 1, $this->source); })())), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 10, $this->source); })()), "option", ["searching"], "method", false, false, false, 10) && CoreExtension::inFilter((((array_key_exists("columnFilter", $context) &&  !(null === $context["columnFilter"]))) ? ($context["columnFilter"]) : ("")), ["both", "thead"]))) {
            // line 11
            yield "        <tr class=\"datatable-filters\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 12, $this->source); })()), "columns", [], "any", false, false, false, 12));
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
                if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 14) === null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield from $this->load(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 14), "templateHtml", [], "any", false, false, false, 14), 14)->unwrap()->yield($context);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 23, $this->source); })()), "option", ["searching"], "method", false, false, false, 23) && CoreExtension::inFilter((((array_key_exists("columnFilter", $context) &&  !(null === $context["columnFilter"]))) ? ($context["columnFilter"]) : ("")), ["both", "tfoot"]))) {
            // line 24
            yield "        <tfoot>
        <tr class=\"datatable-filters\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 26, $this->source); })()), "columns", [], "any", false, false, false, 26));
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
                if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 28) === null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield from $this->load(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 28), "templateHtml", [], "any", false, false, false, 28), 28)->unwrap()->yield($context);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 36, $this->source); })()), "option", ["searching"], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    <script>
        \$('#";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
            yield "').on('init.dt', function (e, settings, json) {
            const table = \$('#";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "').DataTable();

            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 41, $this->source); })()), "columns", [], "any", false, false, false, 41));
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
                if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 42) === null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 43
                    yield "                    ";
                    yield from $this->load(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "filter", [], "any", false, false, false, 43), "templateJs", [], "any", false, false, false, 43), 43)->unwrap()->yield($context);
                    // line 44
                    yield "
                    \$(function () {
                        \$('#";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), "html", null, true);
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 56, $this->source); })()), "option", ["searchDelay"], "method", false, false, false, 56), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  267 => 62,  253 => 61,  245 => 56,  235 => 49,  227 => 46,  223 => 44,  220 => 43,  217 => 42,  200 => 41,  195 => 39,  191 => 38,  188 => 37,  186 => 36,  182 => 34,  177 => 31,  162 => 29,  158 => 28,  155 => 27,  138 => 26,  134 => 24,  132 => 23,  126 => 19,  122 => 17,  107 => 15,  103 => 14,  100 => 13,  83 => 12,  80 => 11,  78 => 10,  75 => 9,  68 => 7,  66 => 1,  64 => 7,  60 => 6,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% trans_default_domain datatable.translationDomain %}

<table id=\"{{ datatable.name }}\"  class=\"{% if className is defined and className is not empty %}{{ className }}{% endif %}\">
    <thead>
    <tr>
        {% for column in datatable.columns %}
            <th>{{ column.label|trans }}</th>
        {% endfor %}
    </tr>
    {% if datatable.option('searching') and (columnFilter ?? '') in ['both', 'thead'] %}
        <tr class=\"datatable-filters\">
            {% for column in datatable.columns %}
                <td>
                    {% if column.filter is not same as(null) %}{% include column.filter.templateHtml %}{% endif %}
                </td>
            {% endfor %}
        </tr>
    {% endif %}
    </thead>
    <tbody>
    </tbody>

    {% if datatable.option('searching') and (columnFilter ?? '') in ['both', 'tfoot'] %}
        <tfoot>
        <tr class=\"datatable-filters\">
            {% for column in datatable.columns %}
                <td>
                    {% if column.filter is not same as(null) %}{% include column.filter.templateHtml %}{% endif %}
                </td>
            {% endfor %}
        </tr>
        </tfoot>
    {% endif %}
</table>

{% if datatable.option('searching') %}
    <script>
        \$('#{{ datatable.name }}').on('init.dt', function (e, settings, json) {
            const table = \$('#{{ datatable.name }}').DataTable();

            {% for column in datatable.columns %}
                {% if column.filter is not same as(null) %}
                    {% include column.filter.templateJs %}

                    \$(function () {
                        \$('#{{ datatable.name }}-column-{{ column.index }}').on(
                            \"keyup change\",
                            delay(function () {
                                    const column = table.columns({{ column.index }});
                                    const newValue = \$(this).val();

                                    if (column.search() !== newValue) {
                                        column.search(newValue).draw();
                                    }
                                }
                                , {{ datatable.option('searchDelay') }}
                            )
                        )
                    });
                {% endif %}
            {% endfor %}
        });

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
{% endif %}
", "@DataTables/datatable_html.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\vendor\\omines\\datatables-bundle\\src\\Resources\\views\\datatable_html.html.twig");
    }
}
