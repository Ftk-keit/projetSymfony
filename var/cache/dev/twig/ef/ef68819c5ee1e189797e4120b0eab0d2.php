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

/* client/dettes.html.twig */
class __TwigTemplate_13ce25c8743c1252945cde66631d7860 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dettes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dettes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/dettes.html.twig", 1);
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
        $context["restant"] = 0;
        // line 8
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
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<h1 class=\"text-3xl font-bold  mb-6\">Dettes du client</h1>

\t\t\t\t<!-- Informations du client -->
\t\t\t\t<div class=\"bg-white shadow-md rounded-lg p-6 mb-6\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold  mb-4\">Informations du client</h2>
\t\t\t\t\t<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"text-sm font-medium text-gray-600\">Surname</p>
\t\t\t\t\t\t\t<p class=\"text-lg\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 44, $this->source); })()), "surname", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"text-sm font-medium text-gray-600\">Téléphone</p>
\t\t\t\t\t\t\t<p class=\"text-lg\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 49, $this->source); })()), "telephone", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"text-sm font-medium text-gray-600\">Adresse</p>
\t\t\t\t\t\t\t<p class=\"text-lg\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 53, $this->source); })()), "adresse", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-4\">
\t\t\t\t";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["class" => "flex , justify-start"]]);
        yield "
\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59), 'widget');
        yield "
\t\t\t\t";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t";
        // line 64
        yield "\t\t\t\t</div>
\t\t\t\t<!-- Tableau des dettes -->
\t\t\t\t<div class=\"overflow-x-auto bg-white shadow-md rounded-lg\">
\t\t\t\t\t<div class=\"mb-4 \">
\t\t\t\t\t";
        // line 73
        yield "\t\t\t\t\t\t";
        // line 74
        yield "\t\t\t\t\t</div>
\t\t\t\t\t<table class=\"min-w-full leading-normal\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tID
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tMontant
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tMontant Versé
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tStatus
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dettes"]) || array_key_exists("dettes", $context) ? $context["dettes"] : (function () { throw new RuntimeError('Variable "dettes" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dette"]) {
            // line 97
            yield "\t\t\t\t\t\t\t  ";
            $context["restant"] = ((isset($context["restant"]) || array_key_exists("restant", $context) ? $context["restant"] : (function () { throw new RuntimeError('Variable "restant" does not exist.', 97, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 97) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 97)));
            // line 98
            yield "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "id", [], "any", false, false, false, 100), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 103
            ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "data", [], "any", false, false, false, 103)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "data", [], "any", false, false, false, 103), "Y-m-d"), "html", null, true)) : (yield "N/A"));
            yield "</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 106), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 109), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-red-600 whitespace-no-wrap\">";
            // line 112
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 112) == CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 112))) ? ("Paye") : ("Impaye"));
            yield "</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t      <div class=\"mt-4 flex justify-center\">
\t\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t ";
        // line 122
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 122, $this->source); })()) > 1)) {
            // line 123
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 123, $this->source); })()) - 1), "html", null, true);
            yield "&statuts=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 123, $this->source); })()), "html", null, true);
            yield " \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 127
        yield "
\t\t\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 128, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 129
            yield "\t\t\t\t\t\t\t\t\t<a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "&statuts=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 129, $this->source); })()), "html", null, true);
            yield " \" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
\t\t\t\t\t\t\t\t\t\t";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                                ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 133, $this->source); })()) < (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 133, $this->source); })()))) {
            // line 134
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 134, $this->source); })()) + 1), "html", null, true);
            yield "&statuts=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 134, $this->source); })()), "html", null, true);
            yield " \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>> 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 138
        yield "\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t<div class=\"mt-4 flex justify-end\">
\t\t\t\t\t<p class=\"text-xl font-semibold \">Total restant à payer :
\t\t\t\t\t\t<span class=\"text-red-600\"> ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["restant"]) || array_key_exists("restant", $context) ? $context["restant"] : (function () { throw new RuntimeError('Variable "restant" does not exist.', 142, $this->source); })()), "html", null, true);
        yield " Fcfa</span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
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
        return "client/dettes.html.twig";
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
        return array (  315 => 142,  309 => 138,  299 => 134,  296 => 133,  287 => 130,  280 => 129,  276 => 128,  273 => 127,  263 => 123,  261 => 122,  253 => 116,  243 => 112,  237 => 109,  231 => 106,  225 => 103,  219 => 100,  215 => 98,  212 => 97,  208 => 96,  184 => 74,  182 => 73,  176 => 64,  172 => 60,  168 => 59,  164 => 58,  156 => 53,  149 => 49,  141 => 44,  103 => 8,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ClientController!
{% endblock %}

{% block body %}
{% set restant = 0%}
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
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<h1 class=\"text-3xl font-bold  mb-6\">Dettes du client</h1>

\t\t\t\t<!-- Informations du client -->
\t\t\t\t<div class=\"bg-white shadow-md rounded-lg p-6 mb-6\">
\t\t\t\t\t<h2 class=\"text-xl font-semibold  mb-4\">Informations du client</h2>
\t\t\t\t\t<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"text-sm font-medium text-gray-600\">Surname</p>
\t\t\t\t\t\t\t<p class=\"text-lg\">{{client.surname}}</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"text-sm font-medium text-gray-600\">Téléphone</p>
\t\t\t\t\t\t\t<p class=\"text-lg\">{{client.telephone}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"text-sm font-medium text-gray-600\">Adresse</p>
\t\t\t\t\t\t\t<p class=\"text-lg\">{{client.adresse}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-4\">
\t\t\t\t{{form_start(form, {'attr': {'class': 'flex , justify-start'}}, { method: \"GET\" })}}
\t\t\t\t{{ form_widget(form.status) }}
\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t{# <button id=\"all\" class=\"bg-[#1E375A] text-white px-4 py-2 rounded mr-2\">Toutes</button>
\t\t\t\t\t<button id=\"unpaid\" class=\"bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2\">Impayees</button>
\t\t\t\t\t<button id=\"paid\" class=\"bg-gray-300 text-gray-700 px-4 py-2 rounded\">Payees</button> #}
\t\t\t\t</div>
\t\t\t\t<!-- Tableau des dettes -->
\t\t\t\t<div class=\"overflow-x-auto bg-white shadow-md rounded-lg\">
\t\t\t\t\t<div class=\"mb-4 \">
\t\t\t\t\t{# {{form_start(form,  {'attr': {'class': 'flex justify-around'}})}}
\t\t\t\t\t\t{{form_errors(form.status)}}
\t\t\t\t\t\t{{ form_widget(form.status) }}
\t\t\t\t\t\t{{ form_widget(form.Search) }}
\t\t\t\t\t\t{{ form_end(form) }} #}
\t\t\t\t\t\t{# <input type=\"text\" placeholder=\"Rechercher par téléphone\" class=\"w-full p-2 border rounded\"> #}
\t\t\t\t\t</div>
\t\t\t\t\t<table class=\"min-w-full leading-normal\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tID
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tMontant
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tMontant Versé
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-base text-left text-xs font-semibold  uppercase tracking-wider\">
\t\t\t\t\t\t\t\t\tStatus
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for dette in dettes %}
\t\t\t\t\t\t\t  {% set restant = restant + (dette.montant - dette.montantVerser) %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">{{dette.id}}</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">{{dette.data ? dette.data|date('Y-m-d') : 'N/A'}}</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">{{dette.montant}}</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-gray-900 whitespace-no-wrap\">{{dette.montantVerser}}</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-red-600 whitespace-no-wrap\">{{dette.montant == dette.montantVerser ? \"Paye\" : \"Impaye\"}}</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t      <div class=\"mt-4 flex justify-center\">
\t\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t {% if page > 1 %}
                                <a href=\"?page={{page - 1}}&statuts={{statuts}} \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% for i in 1..maxPage %}
\t\t\t\t\t\t\t\t\t<a href=\"?page={{i}}&statuts={{statuts}} \" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
\t\t\t\t\t\t\t\t\t\t{{ i }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endfor %}
                                {% if page <  maxPage %}
                                <a href=\"?page={{page + 1}}&statuts={{statuts}} \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>> 
                                </a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t<div class=\"mt-4 flex justify-end\">
\t\t\t\t\t<p class=\"text-xl font-semibold \">Total restant à payer :
\t\t\t\t\t\t<span class=\"text-red-600\"> {{restant}} Fcfa</span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</main>
\t</div>

\t<!-- Footer -->
\t<footer class=\"bg-[#1E375A] text-white p-4 text-center\">
\t\t<p>&copy; 2023 Gestion des Clients. Tous droits réservés.</p>
\t</footer>

{% endblock %}
", "client/dettes.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/client/dettes.html.twig");
    }
}
