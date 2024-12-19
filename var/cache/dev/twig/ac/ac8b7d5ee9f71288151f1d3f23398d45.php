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

/* dette/index.html.twig */
class __TwigTemplate_192ec76974af109c96945c860e10ed06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dette/index.html.twig", 1);
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
\t\t\t\t

\t\t\t\t<!-- Client List -->
\t\t\t\t<div class=\"w-1/2\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold  mb-4\">Liste des clients</h2>


\t\t\t\t\t<div class=\"mb-4 \">
\t\t\t\t\t\t";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["class" => "flex justify-around"]]);
        yield "
\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 46, $this->source); })()), "telephone", [], "any", false, false, false, 46), 'errors');
        yield "
\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 47, $this->source); })()), "telephone", [], "any", false, false, false, 47), 'widget');
        yield "
\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 48, $this->source); })()), "surname", [], "any", false, false, false, 48), 'widget');
        yield "

\t\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 50, $this->source); })()), "Search", [], "any", false, false, false, 50), 'widget');
        yield "
\t\t\t\t\t\t";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t\t";
        // line 53
        yield "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 57
            yield "\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b flex justify-between items-start\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-bold\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "surname", [], "any", false, false, false, 59), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Téléphone:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-sm text-gray-600\">Adresse:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-blue-500 hover:text-blue-700 mr-2\" title=\"Voir les dettes\">
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
            // line 79
            yield "\t\t\t\t\t\t\t\t<li class=\"mb-2 pb-2 border-b\">Aucun client trouvé.</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"mt-4 flex justify-center\">
\t\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t ";
        // line 84
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 84, $this->source); })()) > 1)) {
            // line 85
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 85, $this->source); })()) - 1), "html", null, true);
            yield " \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 89
        yield "
\t\t\t\t\t\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 90, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 91
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " \" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
                                    ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                                </a>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                                ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 95, $this->source); })()) < (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 95, $this->source); })()))) {
            // line 96
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 96, $this->source); })()) + 1), "html", null, true);
            yield " \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>> 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 100
        yield "\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</main>
\t</div>

\t<!-- Footer -->
\t<footer class=\"bg-[#1E375A] text-white p-4 text-center\">
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
        return "dette/index.html.twig";
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
        return array (  265 => 100,  257 => 96,  254 => 95,  245 => 92,  240 => 91,  236 => 90,  233 => 89,  225 => 85,  223 => 84,  218 => 81,  211 => 79,  190 => 63,  185 => 61,  180 => 59,  176 => 57,  171 => 56,  166 => 53,  162 => 51,  158 => 50,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
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
\t\t\t\t

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
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-blue-500 hover:text-blue-700 mr-2\" title=\"Voir les dettes\">
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
\t\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t {% if page > 1 %}
                                <a href=\"?page={{page - 1}} \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% for i in 1..maxPage %}
                                <a href=\"?page={{i}} \" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
                                    {{ i }}
                                </a>
\t\t\t\t\t\t\t\t{% endfor %}
                                {% if page <  maxPage %}
                                <a href=\"?page={{page + 1}} \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
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
\t<footer class=\"bg-[#1E375A] text-white p-4 text-center\">
\t\t<p>&copy; 2023 Gestion des Clients. Tous droits réservés.</p>
\t</footer>

{% endblock %}
", "dette/index.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/dette/index.html.twig");
    }
}
