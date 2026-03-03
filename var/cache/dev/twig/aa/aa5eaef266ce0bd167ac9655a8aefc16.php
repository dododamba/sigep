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

/* layouts/_search.html.twig */
class __TwigTemplate_72f4bc07b99f70e820f4f2f8cdff69d4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_search.html.twig"));

        // line 1
        yield "<!--begin::Search-->
<div
\tid=\"kt_header_search\" class=\"header-search d-flex align-items-center w-lg-300px me-2\" data-kt-search-keypress=\"true\" data-kt-search-min-length=\"2\" data-kt-search-enter=\"enter\" data-kt-search-layout=\"menu\" data-kt-search-responsive=\"lg\" data-kt-menu-trigger=\"auto\" data-kt-menu-permanent=\"true\" data-kt-menu-placement=\"bottom-start\">
\t<!--begin::Tablet and mobile search toggle-->
\t<div data-kt-search-element=\"toggle\" class=\"search-toggle-mobile d-flex d-lg-none align-items-center\">
\t\t<div class=\"d-flex btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10\">
\t\t\t<i class=\"ki-duotone ki-magnifier fs-1\">
\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t<span class=\"path2\"></span>
\t\t\t</i>
\t\t</div>
\t</div>
\t<!--end::Tablet and mobile search toggle-->
\t<!--begin::Form(use d-none d-lg-block classes for responsive search)-->
\t<form
\t\tdata-kt-search-element=\"form\" class=\"d-none d-lg-block w-100 position-relative mb-5 mb-lg-0\" autocomplete=\"off\">
\t\t<!--begin::Hidden input(Added to disable form autocomplete)-->
\t\t<input type=\"hidden\"/>
\t\t<!--end::Hidden input-->
\t\t<!--begin::Icon-->
\t\t\t<i class=\"ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5\"> <span class=\"path1\"></span>
\t\t\t<span class=\"path2\"></span>
\t\t</i>
\t\t<!--end::Icon-->
\t\t<!--begin::Input-->
\t\t<input type=\"text\" class=\"search-input form-control form-control-solid ps-13\" name=\"search\" value=\"\" placeholder=\"Search...\" data-kt-search-element=\"input\"/>
\t\t<!--end::Input-->
\t\t<!--begin::Spinner-->
\t\t\t<span class=\"search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5\" data-kt-search-element=\"spinner\"> <span class=\"spinner-border h-15px w-15px align-middle text-gray-400\"></span>
\t\t</span>
\t\t<!--end::Spinner-->
\t\t<!--begin::Reset-->
\t\t<span class=\"search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4\" data-kt-search-element=\"clear\">
\t\t\t<i class=\"ki-duotone ki-cross fs-2 fs-lg-1 me-0\">
\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t<span class=\"path2\"></span>
\t\t\t</i>
\t\t</span>
\t\t<!--end::Reset-->
\t</form>
\t<!--end::Form-->
\t<!--begin::Menu-->
\t<div
\t\tdata-kt-search-element=\"content\" class=\"menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px\">
\t\t<!--begin::Wrapper-->
\t\t<div
\t\t\tdata-kt-search-element=\"wrapper\">
\t\t\t<!--begin::Recently viewed-->
\t\t\t<div
\t\t\t\tdata-kt-search-element=\"results\" class=\"d-none\">
\t\t\t\t<!--begin::Items-->
\t\t\t\t<div
\t\t\t\t\tclass=\"scroll-y mh-200px mh-lg-350px\">
\t\t\t\t\t<!--begin::Category title-->
\t\t\t\t\t<h3 class=\"fs-5 text-muted m-0 pb-5\" data-kt-search-element=\"category-title\">Users</h3>
\t\t\t\t\t<!--end::Category title-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-6.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Karina Clark</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Marketing Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-2.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Olivia Bold</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Software Engineer</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-9.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Ana Clark</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">UI/UX Designer</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-14.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Nick Pitola</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Art Director</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-11.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Edward Kulnic</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">System Administrator</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Category title-->
\t\t\t\t\t<h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\" data-kt-search-element=\"category-title\">Customers</h3>
\t\t\t\t\t<!--end::Category title-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/volicity-9.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Company Rbranding</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">UI Design</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/tvit.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Company Re-branding</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Web Development</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/misc/infography.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Business Analytics App</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Administration</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/leaf.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">EcoLeaf App Launch</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Marketing</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/tower.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Tower Group Website</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Google Adwords</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Category title-->
\t\t\t\t\t<h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\" data-kt-search-element=\"category-title\">Projects</h3>
\t\t\t\t\t<!--end::Category title-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-notepad fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path4\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path5\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Si-Fi Project by AU Themes</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#45670</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-frame fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path4\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Shopix Mobile App Planning</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#45690</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-message-text-2 fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Finance Monitoring SAAS Discussion</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#21090</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-profile-circle fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Dashboard Analitics Launch</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#34560</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t</div>
\t\t\t\t<!--end::Items-->
\t\t\t</div>
\t\t\t<!--end::Recently viewed-->
\t\t\t<!--begin::Recently viewed-->
\t\t\t<div
\t\t\t\tclass=\"\" data-kt-search-element=\"main\">
\t\t\t\t<!--begin::Heading-->
\t\t\t\t<div
\t\t\t\t\tclass=\"d-flex flex-stack fw-semibold mb-4\">
\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t<span class=\"text-muted fs-6 me-2\">Recently Searched:</span>
\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t<!--begin::Toolbar-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex\" data-kt-search-element=\"toolbar\">
\t\t\t\t\t\t<!--begin::Preferences toggle-->
\t\t\t\t\t\t<div data-kt-search-element=\"preferences-show\" class=\"btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=\" title=\"Show search preferences\">
\t\t\t\t\t\t\t<i class=\"ki-duotone ki-setting-2 fs-2\">
\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Preferences toggle-->
\t\t\t\t\t\t<!--begin::Advanced search toggle-->
\t\t\t\t\t\t<div data-kt-search-element=\"advanced-options-form-show\" class=\"btn btn-icon w-20px btn-sm btn-active-color-primary me-n1\" data-bs-toggle=\"tooltip\" title=\"Show more search options\">
\t\t\t\t\t\t\t<i class=\"ki-duotone ki-down fs-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Advanced search toggle-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Toolbar-->
\t\t\t\t</div>
\t\t\t\t<!--end::Heading-->
\t\t\t\t<!--begin::Items-->
\t\t\t\t<div
\t\t\t\t\tclass=\"scroll-y mh-200px mh-lg-325px\">
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-laptop fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">BoomApp by Keenthemes</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#45789</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart-simple fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path4\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"Kept API Project Meeting</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#84050</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"KPI Monitoring App Launch</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#84250</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart-line-down fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">Project Reference FAQ</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#67945</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-sms fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"FitPro App Development</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#84250</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-bank fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">Shopix Mobile App</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#45690</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart-line-down fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"Landing UI Design\" Launch</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#24005</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t</div>
\t\t\t\t<!--end::Items-->
\t\t\t</div>
\t\t\t<!--end::Recently viewed-->
\t\t\t<!--begin::Empty-->
\t\t\t<div
\t\t\t\tdata-kt-search-element=\"empty\" class=\"text-center d-none\">
\t\t\t\t<!--begin::Icon-->
\t\t\t\t<div class=\"pt-10 pb-10\">
\t\t\t\t\t<i class=\"ki-duotone ki-search-list fs-4x opacity-50\">
\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t</i>
\t\t\t\t</div>
\t\t\t\t<!--end::Icon-->
\t\t\t\t<!--begin::Message-->
\t\t\t\t<div class=\"pb-15 fw-semibold\">
\t\t\t\t\t<h3 class=\"text-gray-600 fs-5 mb-2\">No result found</h3>
\t\t\t\t\t<div class=\"text-muted fs-7\">Please try again with a different query</div>
\t\t\t\t</div>
\t\t\t\t<!--end::Message-->
\t\t\t</div>
\t\t\t<!--end::Empty-->
\t\t</div>
\t\t<!--end::Wrapper-->
\t\t<!--begin::Preferences-->
\t\t<form
\t\t\tdata-kt-search-element=\"advanced-options-form\" class=\"pt-1 d-none\">
\t\t\t<!--begin::Heading-->
\t\t\t<h3 class=\"fw-semibold text-dark mb-7\">Advanced Search</h3>
\t\t\t<!--end::Heading-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Contains the word\" name=\"query\"/>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div
\t\t\t\tclass=\"mb-5\">
\t\t\t\t<!--begin::Radio group-->
\t\t\t\t<div
\t\t\t\t\tclass=\"nav-group nav-group-fluid\">
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"has\" checked=\"checked\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">All</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"users\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Users</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"orders\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Orders</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"projects\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Projects</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t</div>
\t\t\t\t<!--end::Radio group-->
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<input type=\"text\" name=\"assignedto\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Assigned to\" value=\"\"/>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<input type=\"text\" name=\"collaborators\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Collaborators\" value=\"\"/>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div
\t\t\t\tclass=\"mb-5\">
\t\t\t\t<!--begin::Radio group-->
\t\t\t\t<div
\t\t\t\t\tclass=\"nav-group nav-group-fluid\">
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"attachment\" value=\"has\" checked=\"checked\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">Has attachment</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"attachment\" value=\"any\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Any</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t</div>
\t\t\t\t<!--end::Radio group-->
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<select name=\"timezone\" aria-label=\"Select a Timezone\" data-control=\"select2\" data-dropdown-parent=\"#kt_header_search\" data-placeholder=\"date_period\" class=\"form-select form-select-sm form-select-solid\">
\t\t\t\t\t<option value=\"next\">Within the next</option>
\t\t\t\t\t<option value=\"last\">Within the last</option>
\t\t\t\t\t<option value=\"between\">Between</option>
\t\t\t\t\t<option value=\"on\">On</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div
\t\t\t\tclass=\"row mb-8\">
\t\t\t\t<!--begin::Col-->
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<input type=\"number\" name=\"date_number\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Lenght\" value=\"\"/>
\t\t\t\t</div>
\t\t\t\t<!--end::Col-->
\t\t\t\t<!--begin::Col-->
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<select name=\"date_typer\" aria-label=\"Select a Timezone\" data-control=\"select2\" data-dropdown-parent=\"#kt_header_search\" data-placeholder=\"Period\" class=\"form-select form-select-sm form-select-solid\">
\t\t\t\t\t\t<option value=\"days\">Days</option>
\t\t\t\t\t\t<option value=\"weeks\">Weeks</option>
\t\t\t\t\t\t<option value=\"months\">Months</option>
\t\t\t\t\t\t<option value=\"years\">Years</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<!--end::Col-->
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Actions-->
\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t<button type=\"reset\" class=\"btn btn-sm btn-light fw-bold btn-active-light-primary me-2\" data-kt-search-element=\"advanced-options-form-cancel\">Cancel</button>
\t\t\t\t<a href=\"../../demo22/dist/pages/search/horizontal.html\" class=\"btn btn-sm fw-bold btn-primary\" data-kt-search-element=\"advanced-options-form-search\">Search</a>
\t\t\t</div>
\t\t\t<!--end::Actions-->
\t\t</form>
\t\t<!--end::Preferences-->
\t\t<!--begin::Preferences-->
\t\t<form
\t\t\tdata-kt-search-element=\"preferences\" class=\"pt-1 d-none\">
\t\t\t<!--begin::Heading-->
\t\t\t<h3 class=\"fw-semibold text-dark mb-7\">Search Preferences</h3>
\t\t\t<!--end::Heading-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"pb-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Projects</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Targets</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Affiliate Programs</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Referrals</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Users</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Actions-->
\t\t\t<div class=\"d-flex justify-content-end pt-7\">
\t\t\t\t<button type=\"reset\" class=\"btn btn-sm btn-light fw-bold btn-active-light-primary me-2\" data-kt-search-element=\"preferences-dismiss\">Cancel</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-sm fw-bold btn-primary\">Save Changes</button>
\t\t\t</div>
\t\t\t<!--end::Actions-->
\t\t</form>
\t\t<!--end::Preferences-->
\t</div>
\t<!--end::Menu-->
</div>
<!--end::Search-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/_search.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!--begin::Search-->
<div
\tid=\"kt_header_search\" class=\"header-search d-flex align-items-center w-lg-300px me-2\" data-kt-search-keypress=\"true\" data-kt-search-min-length=\"2\" data-kt-search-enter=\"enter\" data-kt-search-layout=\"menu\" data-kt-search-responsive=\"lg\" data-kt-menu-trigger=\"auto\" data-kt-menu-permanent=\"true\" data-kt-menu-placement=\"bottom-start\">
\t<!--begin::Tablet and mobile search toggle-->
\t<div data-kt-search-element=\"toggle\" class=\"search-toggle-mobile d-flex d-lg-none align-items-center\">
\t\t<div class=\"d-flex btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10\">
\t\t\t<i class=\"ki-duotone ki-magnifier fs-1\">
\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t<span class=\"path2\"></span>
\t\t\t</i>
\t\t</div>
\t</div>
\t<!--end::Tablet and mobile search toggle-->
\t<!--begin::Form(use d-none d-lg-block classes for responsive search)-->
\t<form
\t\tdata-kt-search-element=\"form\" class=\"d-none d-lg-block w-100 position-relative mb-5 mb-lg-0\" autocomplete=\"off\">
\t\t<!--begin::Hidden input(Added to disable form autocomplete)-->
\t\t<input type=\"hidden\"/>
\t\t<!--end::Hidden input-->
\t\t<!--begin::Icon-->
\t\t\t<i class=\"ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5\"> <span class=\"path1\"></span>
\t\t\t<span class=\"path2\"></span>
\t\t</i>
\t\t<!--end::Icon-->
\t\t<!--begin::Input-->
\t\t<input type=\"text\" class=\"search-input form-control form-control-solid ps-13\" name=\"search\" value=\"\" placeholder=\"Search...\" data-kt-search-element=\"input\"/>
\t\t<!--end::Input-->
\t\t<!--begin::Spinner-->
\t\t\t<span class=\"search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5\" data-kt-search-element=\"spinner\"> <span class=\"spinner-border h-15px w-15px align-middle text-gray-400\"></span>
\t\t</span>
\t\t<!--end::Spinner-->
\t\t<!--begin::Reset-->
\t\t<span class=\"search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4\" data-kt-search-element=\"clear\">
\t\t\t<i class=\"ki-duotone ki-cross fs-2 fs-lg-1 me-0\">
\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t<span class=\"path2\"></span>
\t\t\t</i>
\t\t</span>
\t\t<!--end::Reset-->
\t</form>
\t<!--end::Form-->
\t<!--begin::Menu-->
\t<div
\t\tdata-kt-search-element=\"content\" class=\"menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px\">
\t\t<!--begin::Wrapper-->
\t\t<div
\t\t\tdata-kt-search-element=\"wrapper\">
\t\t\t<!--begin::Recently viewed-->
\t\t\t<div
\t\t\t\tdata-kt-search-element=\"results\" class=\"d-none\">
\t\t\t\t<!--begin::Items-->
\t\t\t\t<div
\t\t\t\t\tclass=\"scroll-y mh-200px mh-lg-350px\">
\t\t\t\t\t<!--begin::Category title-->
\t\t\t\t\t<h3 class=\"fs-5 text-muted m-0 pb-5\" data-kt-search-element=\"category-title\">Users</h3>
\t\t\t\t\t<!--end::Category title-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-6.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Karina Clark</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Marketing Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-2.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Olivia Bold</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Software Engineer</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-9.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Ana Clark</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">UI/UX Designer</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-14.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Nick Pitola</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Art Director</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<img src=\"assets/media/avatars/300-11.jpg\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Edward Kulnic</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">System Administrator</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Category title-->
\t\t\t\t\t<h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\" data-kt-search-element=\"category-title\">Customers</h3>
\t\t\t\t\t<!--end::Category title-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/volicity-9.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Company Rbranding</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">UI Design</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/tvit.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Company Re-branding</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Web Development</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/misc/infography.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Business Analytics App</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Administration</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/leaf.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">EcoLeaf App Launch</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Marketing</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\" src=\"assets/media/svg/brand-logos/tower.svg\" alt=\"\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start fw-semibold\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Tower Group Website</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">Google Adwords</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Category title-->
\t\t\t\t\t<h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\" data-kt-search-element=\"category-title\">Projects</h3>
\t\t\t\t\t<!--end::Category title-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-notepad fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path4\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path5\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Si-Fi Project by AU Themes</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#45670</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-frame fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path4\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Shopix Mobile App Planning</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#45690</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-message-text-2 fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Finance Monitoring SAAS Discussion</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#21090</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-profile-circle fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold\">Dashboard Analitics Launch</span>
\t\t\t\t\t\t\t<span class=\"fs-7 fw-semibold text-muted\">#34560</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</a>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t</div>
\t\t\t\t<!--end::Items-->
\t\t\t</div>
\t\t\t<!--end::Recently viewed-->
\t\t\t<!--begin::Recently viewed-->
\t\t\t<div
\t\t\t\tclass=\"\" data-kt-search-element=\"main\">
\t\t\t\t<!--begin::Heading-->
\t\t\t\t<div
\t\t\t\t\tclass=\"d-flex flex-stack fw-semibold mb-4\">
\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t<span class=\"text-muted fs-6 me-2\">Recently Searched:</span>
\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t<!--begin::Toolbar-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex\" data-kt-search-element=\"toolbar\">
\t\t\t\t\t\t<!--begin::Preferences toggle-->
\t\t\t\t\t\t<div data-kt-search-element=\"preferences-show\" class=\"btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=\" title=\"Show search preferences\">
\t\t\t\t\t\t\t<i class=\"ki-duotone ki-setting-2 fs-2\">
\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Preferences toggle-->
\t\t\t\t\t\t<!--begin::Advanced search toggle-->
\t\t\t\t\t\t<div data-kt-search-element=\"advanced-options-form-show\" class=\"btn btn-icon w-20px btn-sm btn-active-color-primary me-n1\" data-bs-toggle=\"tooltip\" title=\"Show more search options\">
\t\t\t\t\t\t\t<i class=\"ki-duotone ki-down fs-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Advanced search toggle-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Toolbar-->
\t\t\t\t</div>
\t\t\t\t<!--end::Heading-->
\t\t\t\t<!--begin::Items-->
\t\t\t\t<div
\t\t\t\t\tclass=\"scroll-y mh-200px mh-lg-325px\">
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-laptop fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">BoomApp by Keenthemes</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#45789</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart-simple fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path4\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"Kept API Project Meeting</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#84050</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"KPI Monitoring App Launch</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#84250</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart-line-down fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">Project Reference FAQ</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#67945</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-sms fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"FitPro App Development</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#84250</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-bank fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">Shopix Mobile App</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#45690</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t<!--begin::Symbol-->
\t\t\t\t\t\t<div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t<i class=\"ki-duotone ki-chart-line-down fs-2 text-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Symbol-->
\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-6 text-gray-800 text-hover-primary fw-semibold\">\"Landing UI Design\" Launch</a>
\t\t\t\t\t\t\t<span class=\"fs-7 text-muted fw-semibold\">#24005</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Item-->
\t\t\t\t</div>
\t\t\t\t<!--end::Items-->
\t\t\t</div>
\t\t\t<!--end::Recently viewed-->
\t\t\t<!--begin::Empty-->
\t\t\t<div
\t\t\t\tdata-kt-search-element=\"empty\" class=\"text-center d-none\">
\t\t\t\t<!--begin::Icon-->
\t\t\t\t<div class=\"pt-10 pb-10\">
\t\t\t\t\t<i class=\"ki-duotone ki-search-list fs-4x opacity-50\">
\t\t\t\t\t\t<span class=\"path1\"></span>
\t\t\t\t\t\t<span class=\"path2\"></span>
\t\t\t\t\t\t<span class=\"path3\"></span>
\t\t\t\t\t</i>
\t\t\t\t</div>
\t\t\t\t<!--end::Icon-->
\t\t\t\t<!--begin::Message-->
\t\t\t\t<div class=\"pb-15 fw-semibold\">
\t\t\t\t\t<h3 class=\"text-gray-600 fs-5 mb-2\">No result found</h3>
\t\t\t\t\t<div class=\"text-muted fs-7\">Please try again with a different query</div>
\t\t\t\t</div>
\t\t\t\t<!--end::Message-->
\t\t\t</div>
\t\t\t<!--end::Empty-->
\t\t</div>
\t\t<!--end::Wrapper-->
\t\t<!--begin::Preferences-->
\t\t<form
\t\t\tdata-kt-search-element=\"advanced-options-form\" class=\"pt-1 d-none\">
\t\t\t<!--begin::Heading-->
\t\t\t<h3 class=\"fw-semibold text-dark mb-7\">Advanced Search</h3>
\t\t\t<!--end::Heading-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Contains the word\" name=\"query\"/>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div
\t\t\t\tclass=\"mb-5\">
\t\t\t\t<!--begin::Radio group-->
\t\t\t\t<div
\t\t\t\t\tclass=\"nav-group nav-group-fluid\">
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"has\" checked=\"checked\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">All</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"users\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Users</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"orders\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Orders</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"type\" value=\"projects\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Projects</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t</div>
\t\t\t\t<!--end::Radio group-->
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<input type=\"text\" name=\"assignedto\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Assigned to\" value=\"\"/>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<input type=\"text\" name=\"collaborators\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Collaborators\" value=\"\"/>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div
\t\t\t\tclass=\"mb-5\">
\t\t\t\t<!--begin::Radio group-->
\t\t\t\t<div
\t\t\t\t\tclass=\"nav-group nav-group-fluid\">
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"attachment\" value=\"has\" checked=\"checked\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">Has attachment</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t\t<!--begin::Option-->
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"attachment\" value=\"any\"/>
\t\t\t\t\t\t<span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">Any</span>
\t\t\t\t\t</label>
\t\t\t\t\t<!--end::Option-->
\t\t\t\t</div>
\t\t\t\t<!--end::Radio group-->
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"mb-5\">
\t\t\t\t<select name=\"timezone\" aria-label=\"Select a Timezone\" data-control=\"select2\" data-dropdown-parent=\"#kt_header_search\" data-placeholder=\"date_period\" class=\"form-select form-select-sm form-select-solid\">
\t\t\t\t\t<option value=\"next\">Within the next</option>
\t\t\t\t\t<option value=\"last\">Within the last</option>
\t\t\t\t\t<option value=\"between\">Between</option>
\t\t\t\t\t<option value=\"on\">On</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div
\t\t\t\tclass=\"row mb-8\">
\t\t\t\t<!--begin::Col-->
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<input type=\"number\" name=\"date_number\" class=\"form-control form-control-sm form-control-solid\" placeholder=\"Lenght\" value=\"\"/>
\t\t\t\t</div>
\t\t\t\t<!--end::Col-->
\t\t\t\t<!--begin::Col-->
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<select name=\"date_typer\" aria-label=\"Select a Timezone\" data-control=\"select2\" data-dropdown-parent=\"#kt_header_search\" data-placeholder=\"Period\" class=\"form-select form-select-sm form-select-solid\">
\t\t\t\t\t\t<option value=\"days\">Days</option>
\t\t\t\t\t\t<option value=\"weeks\">Weeks</option>
\t\t\t\t\t\t<option value=\"months\">Months</option>
\t\t\t\t\t\t<option value=\"years\">Years</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<!--end::Col-->
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Actions-->
\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t<button type=\"reset\" class=\"btn btn-sm btn-light fw-bold btn-active-light-primary me-2\" data-kt-search-element=\"advanced-options-form-cancel\">Cancel</button>
\t\t\t\t<a href=\"../../demo22/dist/pages/search/horizontal.html\" class=\"btn btn-sm fw-bold btn-primary\" data-kt-search-element=\"advanced-options-form-search\">Search</a>
\t\t\t</div>
\t\t\t<!--end::Actions-->
\t\t</form>
\t\t<!--end::Preferences-->
\t\t<!--begin::Preferences-->
\t\t<form
\t\t\tdata-kt-search-element=\"preferences\" class=\"pt-1 d-none\">
\t\t\t<!--begin::Heading-->
\t\t\t<h3 class=\"fw-semibold text-dark mb-7\">Search Preferences</h3>
\t\t\t<!--end::Heading-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"pb-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Projects</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Targets</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Affiliate Programs</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Referrals</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Input group-->
\t\t\t<div class=\"py-4 border-bottom\">
\t\t\t\t<label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
\t\t\t\t\t<span class=\"form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2\">Users</span>
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<!--end::Input group-->
\t\t\t<!--begin::Actions-->
\t\t\t<div class=\"d-flex justify-content-end pt-7\">
\t\t\t\t<button type=\"reset\" class=\"btn btn-sm btn-light fw-bold btn-active-light-primary me-2\" data-kt-search-element=\"preferences-dismiss\">Cancel</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-sm fw-bold btn-primary\">Save Changes</button>
\t\t\t</div>
\t\t\t<!--end::Actions-->
\t\t</form>
\t\t<!--end::Preferences-->
\t</div>
\t<!--end::Menu-->
</div>
<!--end::Search-->
", "layouts/_search.html.twig", "C:\\Users\\LENOVO\\Documents\\Dominique\\Projects\\bmad-sigep\\templates\\layouts\\_search.html.twig");
    }
}
