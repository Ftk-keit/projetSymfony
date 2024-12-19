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
class __TwigTemplate_c901f9c1238047fc2c1835de5f89dd0b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
                    <thead>
                        <tr>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                ID
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Date
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Montant
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Montant Versé
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Status
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Détails
                            </th>
\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Payement
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dettes"]) || array_key_exists("dettes", $context) ? $context["dettes"] : (function () { throw new RuntimeError('Variable "dettes" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dette"]) {
            // line 103
            yield "                            ";
            $context["restant"] = ((isset($context["restant"]) || array_key_exists("restant", $context) ? $context["restant"] : (function () { throw new RuntimeError('Variable "restant" does not exist.', 103, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 103) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 103)));
            // line 104
            yield "                            <tr class=\"dette-row\" data-dette-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "id", [], "any", false, false, false, 104), "html", null, true);
            yield "\">
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "id", [], "any", false, false, false, 106), "html", null, true);
            yield "</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 109
            ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "data", [], "any", false, false, false, 109)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "data", [], "any", false, false, false, 109), "Y-m-d"), "html", null, true)) : (yield "N/A"));
            yield "</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 112), "html", null, true);
            yield "</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 115), "html", null, true);
            yield "</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <span class=\"relative inline-block px-3 py-1 font-semibold ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 118) == CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 118))) {
                yield "text-green-900";
            } else {
                yield "text-red-900";
            }
            yield " leading-tight\">
                                        <span aria-hidden class=\"absolute inset-0 ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 119) == CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 119))) {
                yield "bg-green-200";
            } else {
                yield "bg-red-200";
            }
            yield " opacity-50 rounded-full\"></span>
                                        <span class=\"relative\">";
            // line 120
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 120) == CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 120))) ? ("Payé") : ("Impayé"));
            yield "</span>
                                    </span>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <button class=\"toggle-details bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                                        Voir détails
                                    </button>
                                </td>

\t\t\t\t\t\t\t\t <td class=\"px-4 py-2\">
                                        ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "status", [], "any", false, false, false, 130) != Twig\Extension\CoreExtension::constant("App\\Enum\\StatusDette::Paye"))) {
                // line 131
                yield "                                            <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detteClient_payment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                yield "\" method=\"post\" class=\"flex items-center\">
                                                <input type=\"number\" name=\"payement[montant]\" required min=\"1\" max=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 132) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 132)), "html", null, true);
                yield "\" class=\"w-20 p-1 border rounded mr-2\">
                                                <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded\">
                                                    Payer
                                                </button>
                                            </form>
                                        ";
            } else {
                // line 138
                yield "                                            <span class=\"text-green-600\">Payé</span>
                                        ";
            }
            // line 140
            yield "                                    </td>
                            </tr>
                            <tr class=\"dette-details hidden\" data-dette-id=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "id", [], "any", false, false, false, 142), "html", null, true);
            yield "\">
                                <td colspan=\"6\" class=\"px-5 py-5 border-b border-gray-200 bg-gray-50\">
                                    <div class=\"grid grid-cols-2 gap-4\">
                                        <div>
                                            <h3 class=\"font-bold text-lg mb-2\">Articles</h3>
                                            <table class=\"min-w-full\">
                                                <thead>
                                                    <tr>
                                                        <th class=\"px-4 py-2 text-left\">Nom</th>
                                                        <th class=\"px-4 py-2 text-left\">Quantité</th>
                                                        <th class=\"px-4 py-2 text-left\">Prix</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "detailArticleDettes", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["detailArticle"]) {
                // line 157
                yield "                                                        <tr>
                                                            <td class=\"px-4 py-2\">";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detailArticle"], "article", [], "any", false, false, false, 158), "libelle", [], "any", false, false, false, 158), "html", null, true);
                yield "</td>
                                                            <td class=\"px-4 py-2\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detailArticle"], "qte", [], "any", false, false, false, 159), "html", null, true);
                yield "</td>
                                                            <td class=\"px-4 py-2\">";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detailArticle"], "total", [], "any", false, false, false, 160), "html", null, true);
                yield "</td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['detailArticle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <h3 class=\"font-bold text-lg mb-2\">Paiements</h3>
                                            <table class=\"min-w-full\">
                                                <thead>
                                                    <tr>
                                                        ";
            // line 172
            yield "                                                        <th class=\"px-4 py-2 text-left\">Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "payements", [], "any", false, false, false, 176));
            foreach ($context['_seq'] as $context["_key"] => $context["payement"]) {
                // line 177
                yield "                                                        <tr>
                                                            ";
                // line 179
                yield "                                                            <td class=\"px-4 py-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payement"], "montant", [], "any", false, false, false, 179), "html", null, true);
                yield "</td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        yield "                    </tbody>
                </table>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t      <div class=\"mt-4 flex justify-center\">
\t\t\t\t\t\t\t<nav class=\"inline-flex rounded-md shadow\">
\t\t\t\t\t\t\t\t ";
        // line 195
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 195, $this->source); })()) > 1)) {
            // line 196
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 196, $this->source); })()) - 1), "html", null, true);
            yield "&statuts=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 196, $this->source); })()), "html", null, true);
            yield " \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<< 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 200
        yield "
\t\t\t\t\t\t\t\t";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 201, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 202
            yield "\t\t\t\t\t\t\t\t\t<a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "&statuts=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 202, $this->source); })()), "html", null, true);
            yield " \" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50\">
\t\t\t\t\t\t\t\t\t\t";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                                ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 206, $this->source); })()) < (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 206, $this->source); })()))) {
            // line 207
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 207, $this->source); })()) + 1), "html", null, true);
            yield "&statuts=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 207, $this->source); })()), "html", null, true);
            yield " \" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>> 
                                </a>
\t\t\t\t\t\t\t\t";
        }
        // line 211
        yield "\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t<div class=\"mt-4 flex justify-end\">
\t\t\t\t\t<p class=\"text-xl font-semibold \">Total restant à payer :
\t\t\t\t\t\t<span class=\"text-red-600\"> ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["restant"]) || array_key_exists("restant", $context) ? $context["restant"] : (function () { throw new RuntimeError('Variable "restant" does not exist.', 215, $this->source); })()), "html", null, true);
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

    // line 251
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 252
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-details');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const detteId = this.closest('tr').dataset.detteId;
            const detailsRow = document.querySelector(`.dette-details[data-dette-id=\"\${detteId}\"]`);
            detailsRow.classList.toggle('hidden');
            this.textContent = detailsRow.classList.contains('hidden') ? 'Voir détails' : 'Cacher détails';
        });
    });
});
</script>
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
        return array (  492 => 252,  479 => 251,  453 => 215,  447 => 211,  437 => 207,  434 => 206,  425 => 203,  418 => 202,  414 => 201,  411 => 200,  401 => 196,  399 => 195,  391 => 189,  379 => 182,  369 => 179,  366 => 177,  362 => 176,  356 => 172,  346 => 163,  337 => 160,  333 => 159,  329 => 158,  326 => 157,  322 => 156,  305 => 142,  301 => 140,  297 => 138,  288 => 132,  283 => 131,  281 => 130,  268 => 120,  260 => 119,  252 => 118,  246 => 115,  240 => 112,  234 => 109,  228 => 106,  222 => 104,  219 => 103,  215 => 102,  185 => 74,  183 => 73,  177 => 64,  173 => 60,  169 => 59,  165 => 58,  157 => 53,  150 => 49,  142 => 44,  104 => 8,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
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
                    <thead>
                        <tr>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                ID
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Date
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Montant
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Montant Versé
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Status
                            </th>
                            <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Détails
                            </th>
\t\t\t\t\t\t\t<th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                Payement
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for dette in dettes %}
                            {% set restant = restant + (dette.montant - dette.montantVerser) %}
                            <tr class=\"dette-row\" data-dette-id=\"{{ dette.id }}\">
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">{{dette.id}}</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">{{dette.data ? dette.data|date('Y-m-d') : 'N/A'}}</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">{{dette.montant}}</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <p class=\"text-gray-900 whitespace-no-wrap\">{{dette.montantVerser}}</p>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <span class=\"relative inline-block px-3 py-1 font-semibold {% if dette.montant == dette.montantVerser %}text-green-900{% else %}text-red-900{% endif %} leading-tight\">
                                        <span aria-hidden class=\"absolute inset-0 {% if dette.montant == dette.montantVerser %}bg-green-200{% else %}bg-red-200{% endif %} opacity-50 rounded-full\"></span>
                                        <span class=\"relative\">{{dette.montant == dette.montantVerser ? \"Payé\" : \"Impayé\"}}</span>
                                    </span>
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    <button class=\"toggle-details bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                                        Voir détails
                                    </button>
                                </td>

\t\t\t\t\t\t\t\t <td class=\"px-4 py-2\">
                                        {% if dette.status != constant('App\\\\Enum\\\\StatusDette::Paye') %}
                                            <form action=\"{{ path('app_detteClient_payment', {'id': dette.id}) }}\" method=\"post\" class=\"flex items-center\">
                                                <input type=\"number\" name=\"payement[montant]\" required min=\"1\" max=\"{{ dette.montant - dette.montantVerser }}\" class=\"w-20 p-1 border rounded mr-2\">
                                                <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded\">
                                                    Payer
                                                </button>
                                            </form>
                                        {% else %}
                                            <span class=\"text-green-600\">Payé</span>
                                        {% endif %}
                                    </td>
                            </tr>
                            <tr class=\"dette-details hidden\" data-dette-id=\"{{ dette.id }}\">
                                <td colspan=\"6\" class=\"px-5 py-5 border-b border-gray-200 bg-gray-50\">
                                    <div class=\"grid grid-cols-2 gap-4\">
                                        <div>
                                            <h3 class=\"font-bold text-lg mb-2\">Articles</h3>
                                            <table class=\"min-w-full\">
                                                <thead>
                                                    <tr>
                                                        <th class=\"px-4 py-2 text-left\">Nom</th>
                                                        <th class=\"px-4 py-2 text-left\">Quantité</th>
                                                        <th class=\"px-4 py-2 text-left\">Prix</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for detailArticle in dette.detailArticleDettes %}
                                                        <tr>
                                                            <td class=\"px-4 py-2\">{{ detailArticle.article.libelle }}</td>
                                                            <td class=\"px-4 py-2\">{{ detailArticle.qte }}</td>
                                                            <td class=\"px-4 py-2\">{{ detailArticle.total }}</td>
                                                        </tr>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <h3 class=\"font-bold text-lg mb-2\">Paiements</h3>
                                            <table class=\"min-w-full\">
                                                <thead>
                                                    <tr>
                                                        {# <th class=\"px-4 py-2 text-left\">Date</th> #}
                                                        <th class=\"px-4 py-2 text-left\">Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for payement in dette.payements %}
                                                        <tr>
                                                            {# <td class=\"px-4 py-2\">{{ payement.date|date('Y-m-d') }}</td> #}
                                                            <td class=\"px-4 py-2\">{{ payement.montant }}</td>
                                                        </tr>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
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





















{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-details');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const detteId = this.closest('tr').dataset.detteId;
            const detailsRow = document.querySelector(`.dette-details[data-dette-id=\"\${detteId}\"]`);
            detailsRow.classList.toggle('hidden');
            this.textContent = detailsRow.classList.contains('hidden') ? 'Voir détails' : 'Cacher détails';
        });
    });
});
</script>
{% endblock %}

", "client/dettes.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/client/dettes.html.twig");
    }
}
