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

/* client/index.html.twig */
class __TwigTemplate_13bbd79a04375e6676a0196be294f7cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello ClientController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<!-- Header -->
\t<header class=\"bg-[#1E375A] text-white p-4\">
\t\t<h1 class=\"text-2xl font-bold\">Gestion des Clients</h1>
\t</header>

\t<div
\t\tclass=\"flex flex-1 h-[850px]\">
\t\t<!-- Sidebar -->
\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Navigation");
        yield "

\t\t<!-- Main Content -->
\t\t<main class=\"flex-1 p-4\">
\t\t\t<div
\t\t\t\tclass=\"flex gap-4\">
\t\t\t\t<!-- Client Creation Form -->
\t\t\t\t<div class=\"w-1/2\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold mb-4 \">Créer un nouveau client</h2>
\t\t\t\t\t<form id=\"form_client\" class=\"bg-white shadow-md rounded px-8 pt-6  mb-4\" method=\"post\" action=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new");
        yield "\">
\t\t\t\t\t\t";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        yield "

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "surname", [], "any", false, false, false, 28), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "surname", [], "any", false, false, false, 29), 'widget');
        yield "
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "surname", [], "any", false, false, false, 31), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "telephone", [], "any", false, false, false, 37), 'widget');
        yield "
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "telephone", [], "any", false, false, false, 39), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "adresse", [], "any", false, false, false, 44), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "adresse", [], "any", false, false, false, 45), 'widget');
        yield "
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "adresse", [], "any", false, false, false, 47), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 51
        yield "
\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "addAccount", [], "any", false, false, false, 53), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "addAccount", [], "any", false, false, false, 54), 'widget');
        yield "
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"text-red-500 text-xs italic\">";
        // line 57
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"form_user\">
\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 61)) {
            // line 62
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "account", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "account", [], "any", false, false, false, 63), "nom", [], "any", false, false, false, 63), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 65
        yield "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("error_user", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65)))) {
            // line 66
            yield "\t\t\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 66, $this->source); })()), "nom", [], "any", false, false, false, 66), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 68
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 71)) {
            // line 72
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "account", [], "any", false, false, false, 72), "prenom", [], "any", false, false, false, 72), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "account", [], "any", false, false, false, 73), "prenom", [], "any", false, false, false, 73), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 75
        yield "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("error_user", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 75, $this->source); })()), "prenom", [], "any", false, false, false, 75)))) {
            // line 76
            yield "\t\t\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 76, $this->source); })()), "prenom", [], "any", false, false, false, 76), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 78
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 81
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 81)) {
            // line 82
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "account", [], "any", false, false, false, 82), "login", [], "any", false, false, false, 82), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 83
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "account", [], "any", false, false, false, 83), "login", [], "any", false, false, false, 83), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 85
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 88)) {
            // line 89
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "account", [], "any", false, false, false, 89), "password", [], "any", false, false, false, 89), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 90
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "account", [], "any", false, false, false, 90), "password", [], "any", false, false, false, 90), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 92
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 100
        yield "\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
        // line 104
        yield "

\t\t\t\t\t\t<div class=\"flex items-center justify-between\">
\t\t\t\t\t\t\t<button class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
\t\t\t\t\t\t\t\tCréer le client
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 112
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t\t<!-- Client List -->
\t\t\t\t<div class=\"w-1/2\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold  mb-4\">Liste des clients</h2>


\t\t\t\t\t<div class=\"mb-4 \">
\t\t\t\t\t\t";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 123, $this->source); })()), 'form_start', ["attr" => ["class" => "flex justify-around"]]);
        yield "
\t\t\t\t\t\t";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 124, $this->source); })()), "telephone", [], "any", false, false, false, 124), 'errors');
        yield "
\t\t\t\t\t\t";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 125, $this->source); })()), "telephone", [], "any", false, false, false, 125), 'widget');
        yield "
\t\t\t\t\t\t";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 126, $this->source); })()), "surname", [], "any", false, false, false, 126), 'widget');
        yield "

\t\t\t\t\t\t";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 128, $this->source); })()), "Search", [], "any", false, false, false, 128), 'widget');
        yield "
\t\t\t\t\t\t";
        // line 129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 129, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t\t";
        // line 131
        yield "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 134, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 135
            yield "\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b flex justify-between items-start\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-bold\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "surname", [], "any", false, false, false, 137), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Téléphone:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 139), "html", null, true);
            yield "</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Adresse:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 143), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 144
            if (CoreExtension::getAttribute($this->env, $this->source, $context["client"], "account", [], "any", false, false, false, 144)) {
                // line 145
                yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Login:
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "account", [], "any", false, false, false, 146), "login", [], "any", false, false, false, 146), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 149
            yield "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dettesbyClient", ["idClient" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\" class=\"text-blue-500 hover:text-blue-700 mr-2\" title=\"Voir les dettes\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<button class=\"text-red-500 hover:text-red-700\" title=\"Supprimer le client\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 165
            yield "\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b\">Aucun client trouvé.</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "\t\t\t\t\t\t</ul>


\t\t\t\t\t\t<div class=\"mt-4 flex justify-center\">
\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t ";
        // line 172
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 172, $this->source); })()) > 1)) {
            // line 173
            yield "                                 <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 173, $this->source); })()) - 1)]), "html", null, true);
            yield "\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 177
        yield "
\t\t\t\t\t\t\t\t";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 178, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 179
            yield "                                  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["page" => $context["i"]]), "html", null, true);
            yield "\" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
                                    ";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                                </a>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "                                ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 183, $this->source); })()) < (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 183, $this->source); })()))) {
            // line 184
            yield "                                  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 184, $this->source); })()) + 1)]), "html", null, true);
            yield "\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>> 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 188
        yield "\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</main>
\t</div>

\t<!-- Footer -->
\t<footer class=\"bg-[#1E375A]  text-white p-4 text-center\">
\t\t<p>&copy; 2023 Gestion des Clients. Tous droits réservés.</p>
\t</footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/index.html.twig";
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
        return array (  460 => 188,  452 => 184,  449 => 183,  440 => 180,  435 => 179,  431 => 178,  428 => 177,  420 => 173,  418 => 172,  411 => 167,  404 => 165,  386 => 152,  381 => 149,  375 => 146,  372 => 145,  370 => 144,  366 => 143,  359 => 139,  354 => 137,  350 => 135,  345 => 134,  340 => 131,  336 => 129,  332 => 128,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 112,  291 => 104,  286 => 100,  282 => 92,  277 => 90,  272 => 89,  270 => 88,  265 => 85,  260 => 83,  255 => 82,  253 => 81,  248 => 78,  242 => 76,  239 => 75,  234 => 73,  229 => 72,  227 => 71,  222 => 68,  216 => 66,  213 => 65,  208 => 63,  203 => 62,  201 => 61,  195 => 57,  190 => 54,  186 => 53,  182 => 51,  176 => 47,  171 => 45,  167 => 44,  159 => 39,  154 => 37,  150 => 36,  142 => 31,  137 => 29,  133 => 28,  127 => 25,  123 => 24,  111 => 15,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ClientController!
{% endblock %}

{% block body %}
\t<!-- Header -->
\t<header class=\"bg-[#1E375A] text-white p-4\">
\t\t<h1 class=\"text-2xl font-bold\">Gestion des Clients</h1>
\t</header>

\t<div
\t\tclass=\"flex flex-1 h-[850px]\">
\t\t<!-- Sidebar -->
\t\t{{ component('Navigation') }}

\t\t<!-- Main Content -->
\t\t<main class=\"flex-1 p-4\">
\t\t\t<div
\t\t\t\tclass=\"flex gap-4\">
\t\t\t\t<!-- Client Creation Form -->
\t\t\t\t<div class=\"w-1/2\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold mb-4 \">Créer un nouveau client</h2>
\t\t\t\t\t<form id=\"form_client\" class=\"bg-white shadow-md rounded px-8 pt-6  mb-4\" method=\"post\" action=\"{{ path('client_new') }}\">
\t\t\t\t\t\t{{ form_start(form) }}

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t{{ form_label(form.surname) }}
\t\t\t\t\t\t\t{{ form_widget(form.surname) }}
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t{{ form_errors(form.surname) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t{{ form_label(form.telephone) }}
\t\t\t\t\t\t\t{{ form_widget(form.telephone) }}
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t{{ form_errors(form.telephone) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t{{ form_label(form.adresse) }}
\t\t\t\t\t\t\t{{ form_widget(form.adresse) }}
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t{{ form_errors(form.adresse) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# {{ form_start(form.account) }} #}

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t{{ form_label(form.addAccount) }}
\t\t\t\t\t\t\t{{ form_widget(form.addAccount) }}
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"text-red-500 text-xs italic\">{# {{ form_errors(form.adresse) }} #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"form_user\">
\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t\t\t\t\t{{ form_label(form.account.nom) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(form.account.nom) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if error_user is defined and error_user.nom is not null %}
\t\t\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">{{ error_user.nom }}</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t\t\t\t\t{{ form_label(form.account.prenom) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(form.account.prenom) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if error_user is defined and error_user.prenom is not null %}
\t\t\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">{{ error_user.prenom }}</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t\t\t\t\t{{ form_label(form.account.login) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(form.account.login) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t\t\t\t\t{{ form_label(form.account.password) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(form.account.password) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{# <div class=\"mb-4\">
\t\t\t\t\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t\t\t\t\t{{ form_label(form.account.isActive) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(form.account.isActive) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t</div>


\t\t\t\t\t\t{# {{ form_end(form.account) }} #}


\t\t\t\t\t\t<div class=\"flex items-center justify-between\">
\t\t\t\t\t\t\t<button class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
\t\t\t\t\t\t\t\tCréer le client
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t\t<!-- Client List -->
\t\t\t\t<div class=\"w-1/2\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold  mb-4\">Liste des clients</h2>


\t\t\t\t\t<div class=\"mb-4 \">
\t\t\t\t\t\t{{form_start(formSearch,  {'attr': {'class': 'flex justify-around'}})}}
\t\t\t\t\t\t{{form_errors(formSearch.telephone)}}
\t\t\t\t\t\t{{ form_widget(formSearch.telephone) }}
\t\t\t\t\t\t{{ form_widget(formSearch.surname) }}

\t\t\t\t\t\t{{ form_widget(formSearch.Search) }}
\t\t\t\t\t\t{{ form_end(formSearch) }}
\t\t\t\t\t\t{# <input type=\"text\" placeholder=\"Rechercher par téléphone\" class=\"w-full p-2 border rounded\"> #}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for client in clients %}
\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b flex justify-between items-start\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-bold\">{{ client.surname }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Téléphone:
\t\t\t\t\t\t\t\t\t\t\t{{ client.telephone }}</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Adresse:
\t\t\t\t\t\t\t\t\t\t\t{{ client.adresse }}</div>
\t\t\t\t\t\t\t\t\t\t{% if client.account %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Login:
\t\t\t\t\t\t\t\t\t\t\t\t{{  client.account.login }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dettesbyClient', {'idClient' :client.id})}}\" class=\"text-blue-500 hover:text-blue-700 mr-2\" title=\"Voir les dettes\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<button class=\"text-red-500 hover:text-red-700\" title=\"Supprimer le client\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b\">Aucun client trouvé.</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>


\t\t\t\t\t\t<div class=\"mt-4 flex justify-center\">
\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t {% if page > 1 %}
                                 <a href=\"{{ path('app_client', { page: page - 1 }) }}\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% for i in 1..maxPage %}
                                  <a href=\"{{ path('app_client', { page: i}) }}\" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
                                    {{ i }}
                                </a>
\t\t\t\t\t\t\t\t{% endfor %}
                                {% if page <  maxPage %}
                                  <a href=\"{{ path('app_client', { page: page + 1 }) }}\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>> 
                                </a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</main>
\t</div>

\t<!-- Footer -->
\t<footer class=\"bg-[#1E375A]  text-white p-4 text-center\">
\t\t<p>&copy; 2023 Gestion des Clients. Tous droits réservés.</p>
\t</footer>

{% endblock %}
", "client/index.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/client/index.html.twig");
    }
}
