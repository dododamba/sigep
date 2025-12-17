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
class __TwigTemplate_f2bc9ef113ff7cd6d86119aaf7807231 extends Template
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
        /* ============================================
           SIGMA - Authentication Styles
           Système de Surveillance et Gestion
           ============================================ */

        /* CSS Variables - SIGMA Color Palette */
        :root {
            /* Primary Colors */
            --sigma-blue: #2563eb;
            --sigma-blue-light: #3b82f6;
            --sigma-blue-dark: #1d4ed8;
            --sigma-red: #dc2626;
            --sigma-red-light: #ef4444;
            --sigma-red-dark: #b91c1c;
            
            /* Background Colors */
            --bg-primary: #0a0e1a;
            --bg-secondary: #111827;
            --bg-tertiary: #1f2937;
            --bg-card: rgba(17, 24, 39, 0.95);
            
            /* Text Colors */
            --text-primary: #f9fafb;
            --text-secondary: #9ca3af;
            --text-muted: #6b7280;
            
            /* Border & Accent */
            --border-color: rgba(55, 65, 81, 0.5);
            --border-focus: var(--sigma-blue);
            
            /* Status Colors */
            --success: #10b981;
            --warning: #f59e0b;
            --error: #ef4444;
            --info: #3b82f6;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.3);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.4);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.5);
            --shadow-glow: 0 0 40px rgba(37, 99, 235, 0.15);
            
            /* Transitions */
            --transition-fast: 0.15s ease;
            --transition-normal: 0.3s ease;
            
            /* Spacing */
            --radius-sm: 6px;
            --radius-md: 10px;
            --radius-lg: 16px;
        }

        /* Reset & Base */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Auth Container */
        .auth-container {
            display: flex;
            min-height: 100vh;
            position: relative;
        }

        /* Background Effects */
        .auth-background {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
        }

        .grid-pattern {
            position: absolute;
            inset: 0;
            background-image: 
                linear-gradient(rgba(37, 99, 235, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(37, 99, 235, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .gradient-overlay {
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(ellipse at 20% 20%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 80%, rgba(220, 38, 38, 0.05) 0%, transparent 50%);
        }

        /* Left Panel - Branding */
        .auth-branding {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 3rem;
            position: relative;
            z-index: 1;
            background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
            border-right: 1px solid var(--border-color);
        }

        .branding-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 480px;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .logo-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--sigma-red) 0%, var(--sigma-red-dark) 100%);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-lg);
        }

        .logo-icon i {
            font-size: 2rem;
            color: white;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-name {
            font-size: 2rem;
            font-weight: 700;
            color: var(--sigma-blue);
            letter-spacing: 2px;
        }

        .logo-tagline {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .brand-description {
            margin-bottom: 3rem;
        }

        .brand-description h2 {
            font-size: 2rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }

        .brand-description p {
            font-size: 1rem;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        .security-badges {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .security-badges .badge {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.875rem 1.25rem;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            transition: var(--transition-normal);
        }

        .security-badges .badge:hover {
            border-color: var(--sigma-blue);
            transform: translateX(5px);
        }

        .security-badges .badge i {
            font-size: 1.25rem;
            color: var(--sigma-blue);
        }

        .security-badges .badge span {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .branding-footer {
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .branding-footer span {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        /* Right Panel - Auth Form */
        .auth-panel {
            width: 100%;
            max-width: 520px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3rem;
            position: relative;
            z-index: 1;
        }

        .auth-card {
            width: 100%;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-lg), var(--shadow-glow);
            backdrop-filter: blur(10px);
        }

        /* Login Header */
        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .mobile-logo {
            display: none;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .mobile-logo .logo-icon {
            width: 48px;
            height: 48px;
        }

        .mobile-logo .logo-icon i {
            font-size: 1.5rem;
        }

        .mobile-logo .logo-name {
            font-size: 1.5rem;
        }

        .login-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .login-subtitle {
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        /* Form Styles */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.8125rem;
            font-weight: 500;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-label i {
            font-size: 1rem;
            color: var(--sigma-blue);
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-input {
            width: 100%;
            height: 52px;
            padding: 0 3rem 0 1rem;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            font-family: inherit;
            font-size: 0.9375rem;
            color: var(--text-primary);
            transition: var(--transition-normal);
        }

        .form-input::placeholder {
            color: var(--text-muted);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--sigma-blue);
            background: var(--bg-secondary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .input-wrapper.focused .input-icon {
            color: var(--sigma-blue);
        }

        .input-icon {
            position: absolute;
            right: 1rem;
            color: var(--text-muted);
            transition: var(--transition-fast);
            pointer-events: none;
        }

        .toggle-password {
            position: absolute;
            right: 1rem;
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 0.25rem;
            transition: var(--transition-fast);
        }

        .toggle-password:hover {
            color: var(--sigma-blue);
        }

        /* Form Options */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            user-select: none;
        }

        .checkbox-wrapper input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .checkmark {
            width: 18px;
            height: 18px;
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition-fast);
        }

        .checkbox-wrapper input:checked + .checkmark {
            background: var(--sigma-blue);
            border-color: var(--sigma-blue);
        }

        .checkbox-wrapper input:checked + .checkmark::after {
            content: '✓';
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .checkbox-label {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .forgot-link {
            font-size: 0.875rem;
            color: var(--sigma-blue);
            text-decoration: none;
            transition: var(--transition-fast);
        }

        .forgot-link:hover {
            color: var(--sigma-blue-light);
            text-decoration: underline;
        }

        /* Submit Button */
        .btn-submit {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            width: 100%;
            height: 52px;
            background: linear-gradient(135deg, var(--sigma-blue) 0%, var(--sigma-blue-dark) 100%);
            border: none;
            border-radius: var(--radius-md);
            font-family: inherit;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: var(--transition-normal);
            position: relative;
            overflow: hidden;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--sigma-blue-light) 0%, var(--sigma-blue) 100%);
            opacity: 0;
            transition: var(--transition-normal);
        }

        .btn-submit:hover::before {
            opacity: 1;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.35);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .btn-submit .btn-text,
        .btn-submit i {
            position: relative;
            z-index: 1;
        }

        .btn-submit i {
            font-size: 1.25rem;
            transition: transform var(--transition-fast);
        }

        .btn-submit:hover i {
            transform: translateX(3px);
        }

        /* Security Notice */
        .security-notice {
            display: flex;
            align-items: flex-start;
            gap: 0.625rem;
            padding: 0.875rem 1rem;
            background: rgba(220, 38, 38, 0.08);
            border: 1px solid rgba(220, 38, 38, 0.2);
            border-radius: var(--radius-sm);
            margin-top: 0.5rem;
        }

        .security-notice i {
            color: var(--sigma-red);
            font-size: 1rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .security-notice span {
            font-size: 0.75rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        /* Alerts */
        .alert {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.25rem;
            border-radius: var(--radius-md);
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }

        .alert i {
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }

        .alert-error i {
            color: var(--error);
        }

        .alert-info {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #93c5fd;
        }

        .alert-info i {
            color: var(--info);
        }

        .logout-link {
            color: var(--sigma-blue);
            text-decoration: none;
            margin-left: auto;
            font-weight: 500;
        }

        .logout-link:hover {
            text-decoration: underline;
        }

        /* Auth Footer */
        .auth-footer {
            margin-top: 2rem;
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .footer-links a {
            font-size: 0.8125rem;
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition-fast);
        }

        .footer-links a:hover {
            color: var(--sigma-blue);
        }

        .footer-links .separator {
            color: var(--border-color);
        }

        .classification-notice {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: rgba(220, 38, 38, 0.1);
            border: 1px solid rgba(220, 38, 38, 0.2);
            border-radius: var(--radius-sm);
            font-size: 0.6875rem;
            color: var(--sigma-red-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .classification-notice i {
            font-size: 0.875rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .auth-branding {
                display: none;
            }
            
            .auth-panel {
                max-width: 100%;
                padding: 2rem;
            }
            
            .mobile-logo {
                display: flex;
            }
        }

        @media (max-width: 480px) {
            .auth-panel {
                padding: 1rem;
            }
            
            .auth-card {
                padding: 1.5rem;
                border-radius: var(--radius-md);
            }
            
            .login-title {
                font-size: 1.25rem;
            }
            
            .form-options {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .footer-links .separator {
                display: none;
            }
        }

        /* Focus Visible for Accessibility */
        :focus-visible {
            outline: 2px solid var(--sigma-blue);
            outline-offset: 2px;
        }

        /* Selection */
        ::selection {
            background: var(--sigma-blue);
            color: white;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-secondary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-muted);
        }

        /* Loading animation for button */
        .btn-submit.loading {
            pointer-events: none;
        }

        .btn-submit.loading .btn-text {
            opacity: 0;
        }

        .btn-submit.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
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
                        <span class=\"logo-tagline\">Système Integré de Gestion des Menaces Avancés</span>
                    </div>
                </div>
                
                <div class=\"brand-description\">
                    <h2>Plateforme Sécurisée</h2>
                    <p>Accès réservé aux agents habilités de l'Agence Nationale de Sécurité de l'État.</p>
                </div>

                <div class=\"security-badges\">
                    <div class=\"badge\">
                        <i class=\"ri-lock-2-line\"></i>
                        <span>Protocole AES-256</span>
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
                <span>© 2025 ANSE - Tous droits réservés</span>
            </div>
        </div>

        <!-- Right Panel - Auth Form -->
        <div class=\"auth-panel\">
            <div class=\"auth-card\">
                <!-- Uncomment to test error state -->
                <!--
                <div class=\"alert alert-error\">
                    <i class=\"ri-error-warning-line\"></i>
                    <span>Identifiants incorrects. Veuillez réessayer.</span>
                </div>
                -->

                <div class=\"login-header\">
                    <div class=\"mobile-logo\">
                        <div class=\"logo-icon\">
                            <i class=\"ri-shield-keyhole-fill\"></i>
                        </div>
                        <span class=\"logo-name\">SIGMA</span>
                    </div>
                    <h1 class=\"login-title\">Authentification</h1>
                    <p class=\"login-subtitle\">Veuillez vous identifier pour accéder au système</p>
                </div>

                <form class=\"login-form\" method=\"post\" autocomplete=\"off\">
                    <!-- Email Field -->
                    <div class=\"form-group\">
                        <label for=\"email\" class=\"form-label\">
                            <i class=\"ri-mail-line\"></i>
                            Identifiant / Email
                        </label>
                        <div class=\"input-wrapper\">
                            <input 
                                type=\"text\" 
                                id=\"email\"
\t\t\t\t\t\t\t\tvalue=\"";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\"
                                name=\"email\" 
                                class=\"form-input\"
                                placeholder=\"agent@anse.td\"
                                required
                                autocomplete=\"username\"
                            >
                            <span class=\"input-icon\">
                                <i class=\"ri-user-line\"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"form-label\">
                            <i class=\"ri-lock-line\"></i>
                            Mot de passe
                        </label>
                        <div class=\"input-wrapper\">
                            <input 
                                type=\"password\" 
                                id=\"password\"
                                name=\"password\" 
                                class=\"form-input\"
                                placeholder=\"••••••••••••\"
                                required
                                autocomplete=\"current-password\"
                            >

                            <button type=\"button\" class=\"toggle-password\" onclick=\"togglePassword()\">
                                <i class=\"ri-eye-line\" id=\"toggleIcon\"></i>
                            </button>
                        </div>
                    </div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <!-- Remember & Forgot -->
                    <div class=\"form-options\">
                        <label class=\"checkbox-wrapper\">
                            <input type=\"checkbox\" name=\"_remember_me\">
                            <span class=\"checkmark\"></span>
                            <span class=\"checkbox-label\">Maintenir la session</span>
                        </label>
                        <a href=\"#\" class=\"forgot-link\">Mot de passe oublié ?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type=\"submit\" class=\"btn-submit\" id=\"submitBtn\">
                        <span class=\"btn-text\">Se connecter</span>
                        <i class=\"ri-arrow-right-line\"></i>
                    </button>

                    <!-- Security Notice -->
                    <div class=\"security-notice\">
                        <i class=\"ri-information-line\"></i>
                        <span>Toute tentative d'accès non autorisée est enregistrée et poursuivie.</span>
                    </div>
                </form>
            </div>

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

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('ri-eye-line');
                toggleIcon.classList.add('ri-eye-off-line');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('ri-eye-off-line');
                toggleIcon.classList.add('ri-eye-line');
            }
        }

        // Add focus effects
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.closest('.input-wrapper').classList.add('focused');
            });
            input.addEventListener('blur', function() {
                this.closest('.input-wrapper').classList.remove('focused');
            });
        });

        // Form submission with loading state (demo)
      
    </script>
</body>
</html>
";
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
        return array (  890 => 844,  852 => 809,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/home/doda5678/app.dominiquedamba.com/templates/security/login.html.twig");
    }
}
