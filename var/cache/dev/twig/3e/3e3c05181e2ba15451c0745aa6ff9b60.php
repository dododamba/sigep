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

/* security/login.html.twig */
class __TwigTemplate_c1e902874081678f7dbd9e7dd3a80932 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"SIGMA - Système de Surveillance et Gestion des Personnes Fichées\">
    <title>Connexion - SIGMA</title>
    
    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
    
    <style>
       :root {
            /* Couleurs officielles du Tchad */
            --tchad-blue: #002664;
            --tchad-gold: #fecb00;
            --tchad-red: #c60c30;
            
            /* Theme */
            --bg-primary: #f0f4f8;
            --bg-secondary: #ffffff;
            --text-primary: #1a2a3a;
            --text-secondary: #4a5e73;
            --text-muted: #7a8fa3;
            --border-color: #d0dbe6;
            
            /* Gradients */
            --accent-gradient: linear-gradient(135deg, #002664 0%, #1a4a8a 50%, #2a5a9a 100%);
            --gold-gradient: linear-gradient(135deg, #fecb00 0%, #e6b800 100%);
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'DM Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            background: var(--bg-primary);
        }

        /* ========== LEFT PANEL - BRANDING ========== */
        .branding-panel {
            flex: 1;
            background: var(--accent-gradient);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }

        .branding-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\");
            animation: drift 30s linear infinite;
        }

        @keyframes drift {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .branding-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 480px;
        }

        .branding-logo {
            width: 140px;
            height: 140px;
            margin: 0 auto 32px;
            background: white;
            border-radius: 28px;
            padding: 16px;
            box-shadow: var(--shadow-xl);
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .branding-logo img {
            width: 100%;
            height: 100%;
        }

        .branding-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 12px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .branding-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 48px;
            line-height: 1.6;
        }

        .branding-features {
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: left;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 16px;
            color: white;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .feature-icon {
            width: 44px;
            height: 44px;
            background: var(--gold-gradient);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--tchad-blue);
            flex-shrink: 0;
        }

        .feature-text h4 {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .feature-text p {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        /* Flag decoration */
        .flag-decoration {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 6px;
            display: flex;
        }

        .flag-decoration span {
            flex: 1;
        }

        .flag-decoration .blue { background: var(--tchad-blue); }
        .flag-decoration .gold { background: var(--tchad-gold); }
        .flag-decoration .red { background: var(--tchad-red); }

        /* ========== RIGHT PANEL - LOGIN FORM ========== */
        .login-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px;
            background: var(--bg-secondary);
            position: relative;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-header-icon {
            width: 64px;
            height: 64px;
            background: var(--accent-gradient);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin: 0 auto 20px;
            box-shadow: var(--shadow-lg);
        }

        .login-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 8px;
        }

        .login-header p {
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        /* Form */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .form-group {
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            color: var(--text-muted);
            pointer-events: none;
            transition: color 0.2s ease;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px 14px 48px;
            font-size: 0.95rem;
            font-family: inherit;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: var(--bg-primary);
            color: var(--text-primary);
            transition: all 0.2s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: var(--tchad-blue);
            background: var(--bg-secondary);
            box-shadow: 0 0 0 4px rgba(0, 38, 100, 0.1);
        }

        .form-input:focus + .input-icon,
        .form-input:focus ~ .input-icon {
            color: var(--tchad-blue);
        }

        .form-input::placeholder {
            color: var(--text-muted);
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s ease;
        }

        .password-toggle:hover {
            color: var(--tchad-blue);
        }

        /* Remember & Forgot */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .checkbox-wrapper input {
            display: none;
        }

        .checkbox-custom {
            width: 20px;
            height: 20px;
            border: 2px solid var(--border-color);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            color: transparent;
        }

        .checkbox-wrapper input:checked + .checkbox-custom {
            background: var(--tchad-blue);
            border-color: var(--tchad-blue);
            color: white;
        }

        .checkbox-label {
            font-size: 0.88rem;
            color: var(--text-secondary);
        }

        .forgot-link {
            font-size: 0.88rem;
            color: var(--tchad-blue);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: var(--tchad-red);
            text-decoration: underline;
        }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            padding: 16px 24px;
            font-size: 1rem;
            font-weight: 600;
            font-family: inherit;
            color: white;
            background: var(--accent-gradient);
            border: none;
            border-radius: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg), 0 0 30px rgba(0, 38, 100, 0.3);
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 8px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border-color);
        }

        .divider span {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* SSO Buttons */
        .sso-buttons {
            display: flex;
            gap: 12px;
        }

        .btn-sso {
            flex: 1;
            padding: 12px 16px;
            font-size: 0.88rem;
            font-weight: 500;
            font-family: inherit;
            color: var(--text-primary);
            background: var(--bg-primary);
            border: 2px solid var(--border-color);
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.2s ease;
        }

        .btn-sso:hover {
            border-color: var(--tchad-blue);
            background: var(--bg-secondary);
        }

        /* Help Text */
        .help-text {
            text-align: center;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--border-color);
        }

        .help-text p {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .help-text a {
            color: var(--tchad-blue);
            font-weight: 600;
            text-decoration: none;
        }

        .help-text a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .login-footer {
            position: absolute;
            bottom: 24px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .login-footer p {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        /* Error Message */
        .error-message {
            display: none;
            padding: 14px 16px;
            background: rgba(198, 12, 48, 0.1);
            border: 1px solid rgba(198, 12, 48, 0.2);
            border-radius: 10px;
            color: var(--tchad-red);
            font-size: 0.88rem;
            align-items: center;
            gap: 10px;
        }

        .error-message.show {
            display: flex;
        }

        /* Loading State */
        .btn-submit.loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .btn-submit.loading .btn-text {
            visibility: hidden;
        }

        .btn-submit.loading::after {
            content: '';
            position: absolute;
            width: 24px;
            height: 24px;
            border: 3px solid rgba(255,255,255,0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 1200px) {
            .branding-panel {
                padding: 40px;
            }
            
            .branding-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 992px) {
            body {
                flex-direction: column;
            }

            .branding-panel {
                padding: 40px 30px;
                min-height: auto;
            }

            .branding-content {
                max-width: 100%;
            }

            .branding-features {
                display: none;
            }

            .branding-logo {
                width: 100px;
                height: 100px;
                margin-bottom: 20px;
            }

            .branding-title {
                font-size: 1.75rem;
            }

            .branding-subtitle {
                font-size: 1rem;
                margin-bottom: 0;
            }

            .login-panel {
                padding: 40px 30px;
            }
        }

        @media (max-width: 576px) {
            .branding-panel {
                padding: 30px 20px;
            }

            .login-panel {
                padding: 30px 20px;
            }

            .form-options {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .sso-buttons {
                flex-direction: column;
            }
        }

       .branding-logo {
    width: 140px;
    height: 140px;
    margin: 0 auto 32px;
    background: white;
    border-radius: 28px;
    padding: 16px;
    box-shadow: var(--shadow-xl);
    animation: float 4s ease-in-out infinite;
    display: flex;
    align-items: center;
    justify-content: center;
}

.branding-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.branding-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 12px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.2);
    text-align: center;
}

.branding-subtitle {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 48px;
    line-height: 1.6;
    text-align: center;
}

.branding-features {
    display: flex;
    flex-direction: column;
    gap: 20px;
    text-align: left;
}


.flag-decoration {
    display: flex;
    width: 100%;
    height: 8px; /* Ajuste la hauteur selon tes besoins */
    overflow: hidden;
}

.flag-decoration span {
    flex: 1;
    height: 100%;
}

.flag-decoration .blue {
    background: #002664; /* Bleu du Tchad */
}

.flag-decoration .gold {
    background: #FECB00; /* Jaune/Or du Tchad */
}

.flag-decoration .red {
    background: #C60C30; /* Rouge du Tchad */
}
    </style>
</head>
<body>
    <!-- Branding Panel -->
    <div class=\"branding-panel\">
        <div class=\"branding-content\">


        <div class=\"branding-logo\">
            <img src=\"";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"Armoirie du Tchad\">
        </div>
            
            <h1 class=\"branding-title\">SIGEP Tchad</h1>
            <p class=\"branding-subtitle\">
                Système Intégré de Gestion des Projets Publics<br>
                République du Tchad
            </p>

            <div class=\"branding-features\">
                <div class=\"feature-item\">
                    <div class=\"feature-icon\">
                        <i data-lucide=\"briefcase\" style=\"width: 22px; height: 22px;\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h4>Gestion de Projets</h4>
                        <p>Suivi centralisé de tous les projets publics</p>
                    </div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-icon\">
                        <i data-lucide=\"bar-chart-3\" style=\"width: 22px; height: 22px;\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h4>Tableaux de Bord</h4>
                        <p>Visualisation en temps réel des indicateurs</p>
                    </div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-icon\">
                        <i data-lucide=\"wallet\" style=\"width: 22px; height: 22px;\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h4>Suivi Financier</h4>
                        <p>Gestion des financements et décaissements</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"flag-decoration\">
            <span class=\"blue\"></span>
            <span class=\"gold\"></span>
            <span class=\"red\"></span>
        </div>
    </div>


     <div class=\"login-panel\">
        <div class=\"login-container\">
            <div class=\"login-header\">
                <div class=\"login-header-icon\">
                    <i data-lucide=\"lock-2\" style=\"width: 28px; height: 28px;\"></i>
                </div>
                <h2>Connexion</h2>
                <p>Accédez à votre espace de gestion</p>
            </div>

        <form class=\"login-form\" method=\"post\" >

    ";
        // line 752
        yield "    ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 752, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 753
            yield "        <div class=\"error-message show\">
            <i data-lucide=\"alert-circle\" style=\"width: 18px; height: 18px;\"></i>
            <span>";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 755, $this->source); })()), "messageKey", [], "any", false, false, false, 755), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 755, $this->source); })()), "messageData", [], "any", false, false, false, 755), "security"), "html", null, true);
            yield "</span>
        </div>
    ";
        }
        // line 758
        yield "
    ";
        // line 760
        yield "    <div class=\"form-group\">
        <label class=\"form-label\" for=\"email\">Adresse email</label>
        <div class=\"input-wrapper\">
            <input 
                type=\"email\"
                id=\"email\"
                class=\"form-input\"
                placeholder=\"nom@ministere.td\"
                required
                name=\"email\"
                autocomplete=\"email\"
                value=\"";
        // line 771
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 771, $this->source); })()), "html", null, true);
        yield "\"
            >
            <i data-lucide=\"mail\" class=\"input-icon\" style=\"width: 20px; height: 20px;\"></i>
        </div>
    </div>

    ";
        // line 778
        yield "    <div class=\"form-group\">
        <label class=\"form-label\" for=\"password\">Mot de passe</label>
        <div class=\"input-wrapper\">
            <input 
                type=\"password\"
                id=\"password\"
                class=\"form-input\"
                placeholder=\"••••••••••\"
                required
                name=\"password\"
                autocomplete=\"current-password\"
            >
            <i data-lucide=\"lock\" class=\"input-icon\" style=\"width: 20px; height: 20px;\"></i>
            <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword()\">
                <i data-lucide=\"eye\" id=\"eyeIcon\" style=\"width: 20px; height: 20px;\"></i>
            </button>
        </div>
    </div>

    ";
        // line 798
        yield "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

    ";
        // line 801
        yield "    <div class=\"form-options\">
        <label class=\"checkbox-wrapper\">
            <input type=\"checkbox\" name=\"_remember_me\">
            <span class=\"checkbox-custom\">
                <i data-lucide=\"check\" style=\"width: 14px; height: 14px;\"></i>
            </span>
            <span class=\"checkbox-label\">Se souvenir de moi</span>
        </label>
        <a href=\"#\" class=\"forgot-link\">Mot de passe oublié ?</a>
    </div>

    ";
        // line 813
        yield "    <button type=\"submit\" class=\"btn-submit\">
        <span class=\"btn-text\">Se connecter</span>
        <i data-lucide=\"arrow-right\" style=\"width: 20px; height: 20px;\"></i>
    </button>

</form>

            <div class=\"help-text\">
                <p>Vous n'avez pas de compte? <a href=\"#\">Contactez l'administrateur</a></p>
            </div>
        </div>

        <div class=\"login-footer\">
            <p>© 2025 SIGEP Tchad - Ministère de l'Économie et de la Planification du Développement</p>
        </div>
    </div>

    <!-- Ajouter dans le <head> avant </head> -->
<script src=\"https://unpkg.com/lucide@latest\"></script>
 <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.setAttribute('data-lucide', 'eye-off');
            } else {
                passwordInput.type = 'password';
                eyeIcon.setAttribute('data-lucide', 'eye');
            }
            lucide.createIcons();
        }

      

        // Add input animations
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  878 => 813,  865 => 801,  859 => 798,  838 => 778,  829 => 771,  816 => 760,  813 => 758,  807 => 755,  803 => 753,  800 => 752,  737 => 691,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"SIGMA - Système de Surveillance et Gestion des Personnes Fichées\">
    <title>Connexion - SIGMA</title>
    
    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
    
    <style>
       :root {
            /* Couleurs officielles du Tchad */
            --tchad-blue: #002664;
            --tchad-gold: #fecb00;
            --tchad-red: #c60c30;
            
            /* Theme */
            --bg-primary: #f0f4f8;
            --bg-secondary: #ffffff;
            --text-primary: #1a2a3a;
            --text-secondary: #4a5e73;
            --text-muted: #7a8fa3;
            --border-color: #d0dbe6;
            
            /* Gradients */
            --accent-gradient: linear-gradient(135deg, #002664 0%, #1a4a8a 50%, #2a5a9a 100%);
            --gold-gradient: linear-gradient(135deg, #fecb00 0%, #e6b800 100%);
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'DM Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            background: var(--bg-primary);
        }

        /* ========== LEFT PANEL - BRANDING ========== */
        .branding-panel {
            flex: 1;
            background: var(--accent-gradient);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }

        .branding-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\");
            animation: drift 30s linear infinite;
        }

        @keyframes drift {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .branding-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 480px;
        }

        .branding-logo {
            width: 140px;
            height: 140px;
            margin: 0 auto 32px;
            background: white;
            border-radius: 28px;
            padding: 16px;
            box-shadow: var(--shadow-xl);
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .branding-logo img {
            width: 100%;
            height: 100%;
        }

        .branding-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 12px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .branding-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 48px;
            line-height: 1.6;
        }

        .branding-features {
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: left;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 16px;
            color: white;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .feature-icon {
            width: 44px;
            height: 44px;
            background: var(--gold-gradient);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--tchad-blue);
            flex-shrink: 0;
        }

        .feature-text h4 {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .feature-text p {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        /* Flag decoration */
        .flag-decoration {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 6px;
            display: flex;
        }

        .flag-decoration span {
            flex: 1;
        }

        .flag-decoration .blue { background: var(--tchad-blue); }
        .flag-decoration .gold { background: var(--tchad-gold); }
        .flag-decoration .red { background: var(--tchad-red); }

        /* ========== RIGHT PANEL - LOGIN FORM ========== */
        .login-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px;
            background: var(--bg-secondary);
            position: relative;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-header-icon {
            width: 64px;
            height: 64px;
            background: var(--accent-gradient);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin: 0 auto 20px;
            box-shadow: var(--shadow-lg);
        }

        .login-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 8px;
        }

        .login-header p {
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        /* Form */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .form-group {
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            color: var(--text-muted);
            pointer-events: none;
            transition: color 0.2s ease;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px 14px 48px;
            font-size: 0.95rem;
            font-family: inherit;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: var(--bg-primary);
            color: var(--text-primary);
            transition: all 0.2s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: var(--tchad-blue);
            background: var(--bg-secondary);
            box-shadow: 0 0 0 4px rgba(0, 38, 100, 0.1);
        }

        .form-input:focus + .input-icon,
        .form-input:focus ~ .input-icon {
            color: var(--tchad-blue);
        }

        .form-input::placeholder {
            color: var(--text-muted);
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s ease;
        }

        .password-toggle:hover {
            color: var(--tchad-blue);
        }

        /* Remember & Forgot */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .checkbox-wrapper input {
            display: none;
        }

        .checkbox-custom {
            width: 20px;
            height: 20px;
            border: 2px solid var(--border-color);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            color: transparent;
        }

        .checkbox-wrapper input:checked + .checkbox-custom {
            background: var(--tchad-blue);
            border-color: var(--tchad-blue);
            color: white;
        }

        .checkbox-label {
            font-size: 0.88rem;
            color: var(--text-secondary);
        }

        .forgot-link {
            font-size: 0.88rem;
            color: var(--tchad-blue);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: var(--tchad-red);
            text-decoration: underline;
        }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            padding: 16px 24px;
            font-size: 1rem;
            font-weight: 600;
            font-family: inherit;
            color: white;
            background: var(--accent-gradient);
            border: none;
            border-radius: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg), 0 0 30px rgba(0, 38, 100, 0.3);
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 8px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border-color);
        }

        .divider span {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* SSO Buttons */
        .sso-buttons {
            display: flex;
            gap: 12px;
        }

        .btn-sso {
            flex: 1;
            padding: 12px 16px;
            font-size: 0.88rem;
            font-weight: 500;
            font-family: inherit;
            color: var(--text-primary);
            background: var(--bg-primary);
            border: 2px solid var(--border-color);
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.2s ease;
        }

        .btn-sso:hover {
            border-color: var(--tchad-blue);
            background: var(--bg-secondary);
        }

        /* Help Text */
        .help-text {
            text-align: center;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--border-color);
        }

        .help-text p {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .help-text a {
            color: var(--tchad-blue);
            font-weight: 600;
            text-decoration: none;
        }

        .help-text a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .login-footer {
            position: absolute;
            bottom: 24px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .login-footer p {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        /* Error Message */
        .error-message {
            display: none;
            padding: 14px 16px;
            background: rgba(198, 12, 48, 0.1);
            border: 1px solid rgba(198, 12, 48, 0.2);
            border-radius: 10px;
            color: var(--tchad-red);
            font-size: 0.88rem;
            align-items: center;
            gap: 10px;
        }

        .error-message.show {
            display: flex;
        }

        /* Loading State */
        .btn-submit.loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .btn-submit.loading .btn-text {
            visibility: hidden;
        }

        .btn-submit.loading::after {
            content: '';
            position: absolute;
            width: 24px;
            height: 24px;
            border: 3px solid rgba(255,255,255,0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 1200px) {
            .branding-panel {
                padding: 40px;
            }
            
            .branding-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 992px) {
            body {
                flex-direction: column;
            }

            .branding-panel {
                padding: 40px 30px;
                min-height: auto;
            }

            .branding-content {
                max-width: 100%;
            }

            .branding-features {
                display: none;
            }

            .branding-logo {
                width: 100px;
                height: 100px;
                margin-bottom: 20px;
            }

            .branding-title {
                font-size: 1.75rem;
            }

            .branding-subtitle {
                font-size: 1rem;
                margin-bottom: 0;
            }

            .login-panel {
                padding: 40px 30px;
            }
        }

        @media (max-width: 576px) {
            .branding-panel {
                padding: 30px 20px;
            }

            .login-panel {
                padding: 30px 20px;
            }

            .form-options {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .sso-buttons {
                flex-direction: column;
            }
        }

       .branding-logo {
    width: 140px;
    height: 140px;
    margin: 0 auto 32px;
    background: white;
    border-radius: 28px;
    padding: 16px;
    box-shadow: var(--shadow-xl);
    animation: float 4s ease-in-out infinite;
    display: flex;
    align-items: center;
    justify-content: center;
}

.branding-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.branding-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 12px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.2);
    text-align: center;
}

.branding-subtitle {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 48px;
    line-height: 1.6;
    text-align: center;
}

.branding-features {
    display: flex;
    flex-direction: column;
    gap: 20px;
    text-align: left;
}


.flag-decoration {
    display: flex;
    width: 100%;
    height: 8px; /* Ajuste la hauteur selon tes besoins */
    overflow: hidden;
}

.flag-decoration span {
    flex: 1;
    height: 100%;
}

.flag-decoration .blue {
    background: #002664; /* Bleu du Tchad */
}

.flag-decoration .gold {
    background: #FECB00; /* Jaune/Or du Tchad */
}

.flag-decoration .red {
    background: #C60C30; /* Rouge du Tchad */
}
    </style>
</head>
<body>
    <!-- Branding Panel -->
    <div class=\"branding-panel\">
        <div class=\"branding-content\">


        <div class=\"branding-logo\">
            <img src=\"{{ asset('logo.png') }}\" alt=\"Armoirie du Tchad\">
        </div>
            
            <h1 class=\"branding-title\">SIGEP Tchad</h1>
            <p class=\"branding-subtitle\">
                Système Intégré de Gestion des Projets Publics<br>
                République du Tchad
            </p>

            <div class=\"branding-features\">
                <div class=\"feature-item\">
                    <div class=\"feature-icon\">
                        <i data-lucide=\"briefcase\" style=\"width: 22px; height: 22px;\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h4>Gestion de Projets</h4>
                        <p>Suivi centralisé de tous les projets publics</p>
                    </div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-icon\">
                        <i data-lucide=\"bar-chart-3\" style=\"width: 22px; height: 22px;\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h4>Tableaux de Bord</h4>
                        <p>Visualisation en temps réel des indicateurs</p>
                    </div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-icon\">
                        <i data-lucide=\"wallet\" style=\"width: 22px; height: 22px;\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h4>Suivi Financier</h4>
                        <p>Gestion des financements et décaissements</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"flag-decoration\">
            <span class=\"blue\"></span>
            <span class=\"gold\"></span>
            <span class=\"red\"></span>
        </div>
    </div>


     <div class=\"login-panel\">
        <div class=\"login-container\">
            <div class=\"login-header\">
                <div class=\"login-header-icon\">
                    <i data-lucide=\"lock-2\" style=\"width: 28px; height: 28px;\"></i>
                </div>
                <h2>Connexion</h2>
                <p>Accédez à votre espace de gestion</p>
            </div>

        <form class=\"login-form\" method=\"post\" >

    {# Message d’erreur Symfony #}
    {% if error %}
        <div class=\"error-message show\">
            <i data-lucide=\"alert-circle\" style=\"width: 18px; height: 18px;\"></i>
            <span>{{ error.messageKey|trans(error.messageData, 'security') }}</span>
        </div>
    {% endif %}

    {# Email / Username #}
    <div class=\"form-group\">
        <label class=\"form-label\" for=\"email\">Adresse email</label>
        <div class=\"input-wrapper\">
            <input 
                type=\"email\"
                id=\"email\"
                class=\"form-input\"
                placeholder=\"nom@ministere.td\"
                required
                name=\"email\"
                autocomplete=\"email\"
                value=\"{{ last_username }}\"
            >
            <i data-lucide=\"mail\" class=\"input-icon\" style=\"width: 20px; height: 20px;\"></i>
        </div>
    </div>

    {# Mot de passe #}
    <div class=\"form-group\">
        <label class=\"form-label\" for=\"password\">Mot de passe</label>
        <div class=\"input-wrapper\">
            <input 
                type=\"password\"
                id=\"password\"
                class=\"form-input\"
                placeholder=\"••••••••••\"
                required
                name=\"password\"
                autocomplete=\"current-password\"
            >
            <i data-lucide=\"lock\" class=\"input-icon\" style=\"width: 20px; height: 20px;\"></i>
            <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword()\">
                <i data-lucide=\"eye\" id=\"eyeIcon\" style=\"width: 20px; height: 20px;\"></i>
            </button>
        </div>
    </div>

    {# CSRF obligatoire #}
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

    {# Options #}
    <div class=\"form-options\">
        <label class=\"checkbox-wrapper\">
            <input type=\"checkbox\" name=\"_remember_me\">
            <span class=\"checkbox-custom\">
                <i data-lucide=\"check\" style=\"width: 14px; height: 14px;\"></i>
            </span>
            <span class=\"checkbox-label\">Se souvenir de moi</span>
        </label>
        <a href=\"#\" class=\"forgot-link\">Mot de passe oublié ?</a>
    </div>

    {# Submit #}
    <button type=\"submit\" class=\"btn-submit\">
        <span class=\"btn-text\">Se connecter</span>
        <i data-lucide=\"arrow-right\" style=\"width: 20px; height: 20px;\"></i>
    </button>

</form>

            <div class=\"help-text\">
                <p>Vous n'avez pas de compte? <a href=\"#\">Contactez l'administrateur</a></p>
            </div>
        </div>

        <div class=\"login-footer\">
            <p>© 2025 SIGEP Tchad - Ministère de l'Économie et de la Planification du Développement</p>
        </div>
    </div>

    <!-- Ajouter dans le <head> avant </head> -->
<script src=\"https://unpkg.com/lucide@latest\"></script>
 <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.setAttribute('data-lucide', 'eye-off');
            } else {
                passwordInput.type = 'password';
                eyeIcon.setAttribute('data-lucide', 'eye');
            }
            lucide.createIcons();
        }

      

        // Add input animations
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    </script>
</body>
</html>
", "security/login.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\SIGEP\\templates\\security\\login.html.twig");
    }
}
