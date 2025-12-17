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
class __TwigTemplate_dba92bc661fddb01e75c2daa8d8aa6c3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebare.html.twig"));

        // line 1
        yield "<aside class=\"sidebar\" :class=\"{ 'open': sidebarOpen }\">
    <div class=\"sidebar-header\">
        <div class=\"sidebar-logo\">
            <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"SIGEP Tchad Logo\">
        </div>
        <div class=\"sidebar-brand\">
            <h1>SIGEP Tchad</h1>
            <span>Gestion des Projets Publics</span>
        </div>
    </div>

    <!-- User Info -->
    <div class=\"user-info\">
        <div class=\"user-card\">
            <div class=\"user-avatar\">AD</div>
            <div class=\"user-details\">
                <h4>Abdoulaye Damba</h4>
                <p>Direction Générale</p>
                <span class=\"user-role\">Chef de Projet</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class=\"sidebar-nav\">

        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Navigation</div>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'dashboard' }\" @click=\"currentPage = 'dashboard'\">
                <i class=\"ri-dashboard-line\"></i>
                <span>Tableau de bord</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'workgroups' }\" @click=\"currentPage = 'workgroups'\">
                <i class=\"ri-team-line\"></i>
                <span>Groupes de travail</span>
                <span class=\"nav-badge\">5</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'messages' }\" @click=\"currentPage = 'messages'\">
                <i class=\"ri-message-3-line\"></i>
                <span>Messages</span>
                <span class=\"nav-badge\">2</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'tasks' }\" @click=\"currentPage = 'tasks'\">
                <i class=\"ri-task-line\"></i>
                <span>Tâches</span>
            </a>
        </div>

        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Projets</div>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'projects' }\" @click=\"currentPage = 'projects'\">
                <i class=\"ri-briefcase-line\"></i>
                <span>Projets internes</span>
                <span class=\"nav-badge\">12</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'financing' }\" @click=\"currentPage = 'financing'\">
                <i class=\"ri-bank-line\"></i>
                <span>Financements</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'disbursements' }\" @click=\"currentPage = 'disbursements'\">
                <i class=\"ri-wallet-3-line\"></i>
                <span>Décaissements</span>
            </a>
        </div>

        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Compte</div>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'profile' }\" @click=\"currentPage = 'profile'\">
                <i class=\"ri-user-settings-line\"></i>
                <span>Mon compte</span>
            </a>

            <a class=\"nav-item\" @click=\"logout()\">
                <i class=\"ri-logout-box-r-line\"></i>
                <span>Se déconnecter</span>
            </a>
        </div>

    </nav>
</aside>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"sidebar\" :class=\"{ 'open': sidebarOpen }\">
    <div class=\"sidebar-header\">
        <div class=\"sidebar-logo\">
            <img src=\"{{ asset('logo.png') }}\" alt=\"SIGEP Tchad Logo\">
        </div>
        <div class=\"sidebar-brand\">
            <h1>SIGEP Tchad</h1>
            <span>Gestion des Projets Publics</span>
        </div>
    </div>

    <!-- User Info -->
    <div class=\"user-info\">
        <div class=\"user-card\">
            <div class=\"user-avatar\">AD</div>
            <div class=\"user-details\">
                <h4>Abdoulaye Damba</h4>
                <p>Direction Générale</p>
                <span class=\"user-role\">Chef de Projet</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class=\"sidebar-nav\">

        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Navigation</div>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'dashboard' }\" @click=\"currentPage = 'dashboard'\">
                <i class=\"ri-dashboard-line\"></i>
                <span>Tableau de bord</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'workgroups' }\" @click=\"currentPage = 'workgroups'\">
                <i class=\"ri-team-line\"></i>
                <span>Groupes de travail</span>
                <span class=\"nav-badge\">5</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'messages' }\" @click=\"currentPage = 'messages'\">
                <i class=\"ri-message-3-line\"></i>
                <span>Messages</span>
                <span class=\"nav-badge\">2</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'tasks' }\" @click=\"currentPage = 'tasks'\">
                <i class=\"ri-task-line\"></i>
                <span>Tâches</span>
            </a>
        </div>

        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Projets</div>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'projects' }\" @click=\"currentPage = 'projects'\">
                <i class=\"ri-briefcase-line\"></i>
                <span>Projets internes</span>
                <span class=\"nav-badge\">12</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'financing' }\" @click=\"currentPage = 'financing'\">
                <i class=\"ri-bank-line\"></i>
                <span>Financements</span>
            </a>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'disbursements' }\" @click=\"currentPage = 'disbursements'\">
                <i class=\"ri-wallet-3-line\"></i>
                <span>Décaissements</span>
            </a>
        </div>

        <div class=\"nav-section\">
            <div class=\"nav-section-title\">Compte</div>

            <a class=\"nav-item\" :class=\"{ 'active': currentPage === 'profile' }\" @click=\"currentPage = 'profile'\">
                <i class=\"ri-user-settings-line\"></i>
                <span>Mon compte</span>
            </a>

            <a class=\"nav-item\" @click=\"logout()\">
                <i class=\"ri-logout-box-r-line\"></i>
                <span>Se déconnecter</span>
            </a>
        </div>

    </nav>
</aside>
", "partials/sidebare.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\partials\\sidebare.html.twig");
    }
}
