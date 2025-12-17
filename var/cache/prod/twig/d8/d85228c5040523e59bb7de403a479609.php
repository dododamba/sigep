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

/* role/index.html.twig */
class __TwigTemplate_412e5e6b39601cb90d1ab63132f5e001 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "role/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Role index
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "\t<h1>Role index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Slug</th>
\t\t\t\t<th>Created_at</th>
\t\t\t\t<th>Deleted_at</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["roles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 22
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "slug", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 26
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["role"], "createdAt", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "createdAt", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
\t\t\t\t\t<td>";
            // line 27
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["role"], "deletedAt", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "deletedAt", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>

\t\t\t\t\t<td>

\t\t\t\t\t\t<a class=\"btn-sm btn btn-warning\" href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_role_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<i class=\"sl sl-icon-pencil\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a class=\"btn-sm btn btn-danger\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_role_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<i class=\"sl sl-icon-close\"></i>
\t\t\t\t\t\t</a>


\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        // line 43
        if (!$context['_iterated']) {
            // line 44
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_role_new");
        yield "\">Create new</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "role/index.html.twig";
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
        return array (  154 => 51,  149 => 48,  140 => 44,  138 => 43,  125 => 35,  118 => 31,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  92 => 22,  87 => 21,  71 => 7,  64 => 6,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "role/index.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/role/index.html.twig");
    }
}
