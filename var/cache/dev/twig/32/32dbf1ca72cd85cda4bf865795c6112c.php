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
class __TwigTemplate_9f214c62b8aa70e3bbe68e10f9472a8f extends Template
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
\t\t<nav class=\"w-64 bg-[#1E375A] text-white p-4\">
\t\t\t<ul>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"#\" class=\"hover:text-gray-300\">Tableau de bord</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/client\" class=\"hover:text-gray-300\">Clients</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"#\" class=\"hover:text-gray-300\">Produits</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"#\" class=\"hover:text-gray-300\">Commandes</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>

\t\t<!-- Main Content -->
\t\t<main class=\"flex-1 p-4\">
\t\t\t<div
\t\t\t\tclass=\"flex gap-4\">
\t\t\t\t<!-- Client Creation Form -->
\t\t\t\t<div class=\"w-1/2\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold mb-4 \">Créer un nouveau client</h2>
\t\t\t\t\t<form id=\"form_client\" class=\"bg-white shadow-md rounded px-8 pt-6  mb-4\" method=\"post\" action=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new");
        yield "\">
\t\t\t\t\t\t";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        yield "

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "surname", [], "any", false, false, false, 43), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "surname", [], "any", false, false, false, 44), 'widget');
        yield "
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "surname", [], "any", false, false, false, 46), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "telephone", [], "any", false, false, false, 51), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "telephone", [], "any", false, false, false, 52), 'widget');
        yield "
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "telephone", [], "any", false, false, false, 54), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "adresse", [], "any", false, false, false, 59), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "adresse", [], "any", false, false, false, 60), 'widget');
        yield "
\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t\t\t\t\t";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "adresse", [], "any", false, false, false, 62), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 66
        yield "
\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "addAccount", [], "any", false, false, false, 68), 'label');
        yield "
\t\t\t\t\t\t\t";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "addAccount", [], "any", false, false, false, 69), 'widget');
        yield "
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"text-red-500 text-xs italic\">";
        // line 72
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"form_user\">
\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 76)) {
            // line 77
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "account", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "account", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 80
        yield "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("error_user", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 80, $this->source); })()), "nom", [], "any", false, false, false, 80)))) {
            // line 81
            yield "\t\t\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 81, $this->source); })()), "nom", [], "any", false, false, false, 81), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 83
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 86)) {
            // line 87
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "account", [], "any", false, false, false, 87), "prenom", [], "any", false, false, false, 87), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 88
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "account", [], "any", false, false, false, 88), "prenom", [], "any", false, false, false, 88), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 90
        yield "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("error_user", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 90, $this->source); })()), "prenom", [], "any", false, false, false, 90)))) {
            // line 91
            yield "\t\t\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 91, $this->source); })()), "prenom", [], "any", false, false, false, 91), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 93
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 96)) {
            // line 97
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "account", [], "any", false, false, false, 97), "login", [], "any", false, false, false, 97), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "account", [], "any", false, false, false, 98), "login", [], "any", false, false, false, 98), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 100
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t\t";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 103)) {
            // line 104
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "account", [], "any", false, false, false, 104), "password", [], "any", false, false, false, 104), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "account", [], "any", false, false, false, 105), "password", [], "any", false, false, false, 105), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 107
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 110)) {
            // line 111
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "account", [], "any", false, false, false, 111), "isActive", [], "any", false, false, false, 111), 'label');
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 112
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "account", [], "any", false, false, false, 112), "isActive", [], "any", false, false, false, 112), 'widget');
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 114
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
        // line 119
        yield "

\t\t\t\t\t\t<div class=\"flex items-center justify-between\">
\t\t\t\t\t\t\t<button class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
\t\t\t\t\t\t\t\tCréer le client
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t\t<!-- Client List -->
\t\t\t\t<div class=\"w-1/2\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold  mb-4\">Liste des clients</h2>


\t\t\t\t\t<div class=\"mb-4 \">
\t\t\t\t\t\t";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 138, $this->source); })()), 'form_start', ["attr" => ["class" => "flex justify-around"]]);
        yield "
\t\t\t\t\t\t";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 139, $this->source); })()), "telephone", [], "any", false, false, false, 139), 'errors');
        yield "
\t\t\t\t\t\t";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 140, $this->source); })()), "telephone", [], "any", false, false, false, 140), 'widget');
        yield "
\t\t\t\t\t\t";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 141, $this->source); })()), "surname", [], "any", false, false, false, 141), 'widget');
        yield "

\t\t\t\t\t\t";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 143, $this->source); })()), "Search", [], "any", false, false, false, 143), 'widget');
        yield "
\t\t\t\t\t\t";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 144, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t\t";
        // line 146
        yield "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 149, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 150
            yield "\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b flex justify-between items-start\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-bold\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "surname", [], "any", false, false, false, 152), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Téléphone:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 154), "html", null, true);
            yield "</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Adresse:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 158), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 159
            if (CoreExtension::getAttribute($this->env, $this->source, $context["client"], "account", [], "any", false, false, false, 159)) {
                // line 160
                yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Login:
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "account", [], "any", false, false, false, 161), "login", [], "any", false, false, false, 161), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            yield "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dettesbyClient", ["idClient" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 167)]), "html", null, true);
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
            // line 180
            yield "\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b\">Aucun client trouvé.</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "\t\t\t\t\t\t</ul>


\t\t\t\t\t\t<div class=\"mt-4 flex justify-center\">
\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t ";
        // line 187
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 187, $this->source); })()) > 1)) {
            // line 188
            yield "                                 <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 188, $this->source); })()) - 1)]), "html", null, true);
            yield "\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 192
        yield "
\t\t\t\t\t\t\t\t";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 193, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 194
            yield "                                  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["page" => $context["i"]]), "html", null, true);
            yield "\" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
                                    ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                                </a>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "                                ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 198, $this->source); })()) < (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 198, $this->source); })()))) {
            // line 199
            yield "                                  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 199, $this->source); })()) + 1)]), "html", null, true);
            yield "\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>> 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 203
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
        return array (  486 => 203,  478 => 199,  475 => 198,  466 => 195,  461 => 194,  457 => 193,  454 => 192,  446 => 188,  444 => 187,  437 => 182,  430 => 180,  412 => 167,  407 => 164,  401 => 161,  398 => 160,  396 => 159,  392 => 158,  385 => 154,  380 => 152,  376 => 150,  371 => 149,  366 => 146,  362 => 144,  358 => 143,  353 => 141,  349 => 140,  345 => 139,  341 => 138,  327 => 127,  317 => 119,  311 => 114,  306 => 112,  301 => 111,  299 => 110,  294 => 107,  289 => 105,  284 => 104,  282 => 103,  277 => 100,  272 => 98,  267 => 97,  265 => 96,  260 => 93,  254 => 91,  251 => 90,  246 => 88,  241 => 87,  239 => 86,  234 => 83,  228 => 81,  225 => 80,  220 => 78,  215 => 77,  213 => 76,  207 => 72,  202 => 69,  198 => 68,  194 => 66,  188 => 62,  183 => 60,  179 => 59,  171 => 54,  166 => 52,  162 => 51,  154 => 46,  149 => 44,  145 => 43,  139 => 40,  135 => 39,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
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
\t\t<nav class=\"w-64 bg-[#1E375A] text-white p-4\">
\t\t\t<ul>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"#\" class=\"hover:text-gray-300\">Tableau de bord</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/client\" class=\"hover:text-gray-300\">Clients</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"#\" class=\"hover:text-gray-300\">Produits</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"#\" class=\"hover:text-gray-300\">Commandes</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>

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

\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t\t\t\t\t{{ form_label(form.account.isActive) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(form.account.isActive) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
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
