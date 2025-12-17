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

/* security/register-as-partner.html.twig */
class __TwigTemplate_03dbf7558e7b7830a215c53c25136cb1 extends Template
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
        return "app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app.html.twig", "security/register-as-partner.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Devenez partenaire";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<section class=\"breadcrumb-bg pt-200 pb-180\" data-background=\"img/page/page-bg.jpg\" style=\"background-image: url(&quot;img/page/page-bg.jpg&quot;);\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"page-title\">
                    <p class=\"small-text pb-15\">Croix-Rouge du Tchad</p>
                    <h1>Devenez partenaire</h1>
                </div>
            </div>
            <div class=\"col-lg-3 d-flex justify-content-start justify-content-md-end align-items-center\">
                <div class=\"page-breadcumb\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb \">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_web");
        yield "\">Accueil</a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Devenez partenaire</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


 <div class=\"container\">

<div class=\"card o-hidden border-0 shadow-lg my-5\">
    <div class=\"card-body p-0\">
        <!-- Nested Row within Card Body -->
        <div class=\"row\">
            <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
            <div class=\"col-lg-7\">
                <div class=\"p-5\">
                    <div class=\"text-center\">
                        <h1 class=\"h4 text-gray-900 mb-4\">Inscrivez-Vous, devenez volontaire!</h1>
                    </div>
                    <form class=\"user\">
                        <div class=\"form-group row\">
                            <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleFirstName\" placeholder=\"Nom\">
                            </div>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleLastName\" placeholder=\"Prénom\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" placeholder=\"Address Email\">
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleInputPassword\" placeholder=\"Mot de pass\">
                            </div>
                            <div class=\"col-sm-6\">
                                <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleRepeatPassword\" placeholder=\"Confirmation Mot de pass\">
                            </div>
                        </div>
                        <a href=\"login.html\" class=\"btn btn-primary btn-user btn-block\">
                            Enregistrer
                        </a>
                        <hr>
                   
                    </form>
                    <hr>
                    
                    <div class=\"text-center\">
                        <a class=\"small\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"> Déja inscrit? Connectez-Vous!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/register-as-partner.html.twig";
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
        return array (  142 => 73,  86 => 20,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/register-as-partner.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/security/register-as-partner.html.twig");
    }
}
