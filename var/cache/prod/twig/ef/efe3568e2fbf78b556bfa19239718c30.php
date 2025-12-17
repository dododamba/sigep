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

/* auth.html.twig */
class __TwigTemplate_f6b4ef772a0efd403ef2c7868d93ee0a extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"SIGMA - Système de Surveillance et Gestion des Personnes Fichées\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
    
    <!-- Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sigma-auth.css"), "html", null, true);
        yield "\">
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "</head>
<body>
    <div class=\"auth-container\">
        <!-- Background Pattern -->
        <div class=\"auth-background\">
            <div class=\"grid-pattern\"></div>
            <div class=\"gradient-overlay\"></div>
        </div>

        <!-- Left Panel - Branding -->
        <div class=\"auth-branding\">
            <div class=\"branding-content\">
                <div class=\"brand-logo\">
                    <div class=\"logo-icon\">
                        <i class=\"ri-shield-keyhole-fill\"></i>
                    </div>
                    <div class=\"logo-text\">
                        <span class=\"logo-name\">SIGMA</span>
                        <span class=\"logo-tagline\">Système de Surveillance et Gestion</span>
                    </div>
                </div>
                
                <div class=\"brand-description\">
                    <h2>Plateforme Sécurisée</h2>
                    <p>Accès réservé aux agents habilités de l'Agence Nationale de Sécurité de l'État.</p>
                </div>

                <div class=\"security-badges\">
                    <div class=\"badge\">
                        <i class=\"ri-lock-2-line\"></i>
                        <span>Chiffrement AES-256</span>
                    </div>
                    <div class=\"badge\">
                        <i class=\"ri-shield-check-line\"></i>
                        <span>Connexion sécurisée</span>
                    </div>
                    <div class=\"badge\">
                        <i class=\"ri-eye-off-line\"></i>
                        <span>Confidentialité garantie</span>
                    </div>
                </div>
            </div>

            <div class=\"branding-footer\">
                <span>© ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ANSE - Tous droits réservés</span>
            </div>
        </div>

        <!-- Right Panel - Auth Form -->
        <div class=\"auth-panel\">
            <div class=\"auth-card\">
                ";
        // line 67
        if (($context["error"] ?? null)) {
            // line 68
            yield "                    <div class=\"alert alert-error\">
                        <i class=\"ri-error-warning-line\"></i>
                        <span>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 70), "security"), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 73
        yield "
                ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 74)) {
            // line 75
            yield "                    <div class=\"alert alert-info\">
                        <i class=\"ri-information-line\"></i>
                        <span>Connecté en tant que ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "userIdentifier", [], "any", false, false, false, 77), "html", null, true);
            yield "</span>
                        <a href=\"";
            // line 78
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"logout-link\">Déconnexion</a>
                    </div>
                ";
        }
        // line 81
        yield "
                ";
        // line 82
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 83
        yield "            </div>

            <div class=\"auth-footer\">
                <div class=\"footer-links\">
                    <a href=\"#\">Aide</a>
                    <span class=\"separator\">•</span>
                    <a href=\"#\">Contact support</a>
                    <span class=\"separator\">•</span>
                    <a href=\"#\">Politique de sécurité</a>
                </div>
                <div class=\"classification-notice\">
                    <i class=\"ri-file-shield-2-line\"></i>
                    <span>Document classifié - Accès restreint</span>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 101
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 102
        yield "</body>
</html>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "SIGMA";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth.html.twig";
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
        return array (  222 => 101,  212 => 82,  202 => 15,  191 => 7,  184 => 102,  182 => 101,  162 => 83,  160 => 82,  157 => 81,  151 => 78,  147 => 77,  143 => 75,  141 => 74,  138 => 73,  132 => 70,  128 => 68,  126 => 67,  116 => 60,  70 => 16,  68 => 15,  64 => 14,  54 => 7,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "auth.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/auth.html.twig");
    }
}
