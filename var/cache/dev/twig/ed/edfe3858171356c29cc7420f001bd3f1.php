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
class __TwigTemplate_1d6319876d6dc7b30e374726cd0bff9b extends Template
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

        yield "Gestion des Dettes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <!-- Header -->
    <header class=\"bg-[#1E375A] text-white p-4\">
        <h1 class=\"text-2xl font-bold\">Gestion des Dettes</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Navigation");
        yield "

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"w-full\">
                <h2 class=\"text-xl font-semibold mb-4\">Liste des dettes</h2>

                ";
        // line 28
        yield "
                <div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4\">
                    <table class=\"w-full\">
                        <thead>
                            <tr class=\"bg-gray-200\">
                                <th class=\"px-4 py-2 text-left\">Date</th>
                                <th class=\"px-4 py-2 text-left\">Client</th>
                                <th class=\"px-4 py-2 text-left\">Montant</th>
                                <th class=\"px-4 py-2 text-left\">Montant Versé</th>
                                <th class=\"px-4 py-2 text-left\">Montant Restant</th>
                                <th class=\"px-4 py-2 text-left\">Statut</th>
                                <th class=\"px-4 py-2 text-left\">Payement</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dettes"]) || array_key_exists("dettes", $context) ? $context["dettes"] : (function () { throw new RuntimeError('Variable "dettes" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dette"]) {
            // line 44
            yield "                                <tr class=\"border-b\">
                                    <td class=\"px-4 py-2\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "data", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true);
            yield "</td>
                                    <td class=\"px-4 py-2\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "client", [], "any", false, false, false, 46), "surname", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                    <td class=\"px-4 py-2\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 47), "html", null, true);
            yield " F</td>
                                    <td class=\"px-4 py-2\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 48), "html", null, true);
            yield " F</td>
                                    <td class=\"px-4 py-2\">";
            // line 49
            ((((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 49) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 49)) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 49) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 49)), "html", null, true)) : (yield 0));
            yield " F</td>

                                    <td class=\"px-4 py-2\">
                                        <span class=\"px-2 py-1 rounded ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "status", [], "any", false, false, false, 52) == Twig\Extension\CoreExtension::constant("App\\Enum\\StatusDette::Paye"))) {
                yield "bg-green-200 text-green-800";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "status", [], "any", false, false, false, 52) == Twig\Extension\CoreExtension::constant("App\\Enum\\StatusDette::Impaye"))) {
                yield "bg-yellow-200 text-yellow-800";
            } else {
                yield "bg-red-200 text-red-800";
            }
            yield "\">
                                            ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "status", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"px-4 py-2\">
                                        ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "status", [], "any", false, false, false, 57) != Twig\Extension\CoreExtension::constant("App\\Enum\\StatusDette::Paye"))) {
                // line 58
                yield "                                            <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dette_payment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" method=\"post\" class=\"flex items-center\">
                                                <input type=\"number\" name=\"payement[montant]\" required min=\"1\" max=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 59) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 59)), "html", null, true);
                yield "\" class=\"w-20 p-1 border rounded mr-2\">
                                                <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded\">
                                                    Payer
                                                </button>
                                            </form>
                                        ";
            } else {
                // line 65
                yield "                                            <span class=\"text-green-600\">Payé</span>
                                        ";
            }
            // line 67
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"px-4 py-2 text-center\">Aucune dette trouvée.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                        </tbody>
                    </table>

                    <div class=\"mt-4 flex justify-center\">
                        <nav class=\"inline-flex rounded-md shadow\">
                            ";
        // line 79
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 79, $this->source); })()) > 1)) {
            // line 80
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()) - 1), "html", null, true);
            yield "\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<<
                                </a>
                            ";
        }
        // line 84
        yield "
                            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 85, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 86
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 ";
            if (($context["i"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 86, $this->source); })()))) {
                yield "bg-blue-100";
            }
            yield "\">
                                    ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "
                            ";
        // line 91
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 91, $this->source); })()) < (isset($context["maxPage"]) || array_key_exists("maxPage", $context) ? $context["maxPage"] : (function () { throw new RuntimeError('Variable "maxPage" does not exist.', 91, $this->source); })()))) {
            // line 92
            yield "                                <a href=\"?page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()) + 1), "html", null, true);
            yield "\" class=\"px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>>
                                </a>
                            ";
        }
        // line 96
        yield "                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Dettes. Tous droits réservés.</p>
    </footer>
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
        return array (  274 => 96,  266 => 92,  264 => 91,  261 => 90,  252 => 87,  243 => 86,  239 => 85,  236 => 84,  228 => 80,  226 => 79,  219 => 74,  210 => 70,  203 => 67,  199 => 65,  190 => 59,  185 => 58,  183 => 57,  176 => 53,  166 => 52,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  141 => 44,  136 => 43,  119 => 28,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Dettes{% endblock %}

{% block body %}
    <!-- Header -->
    <header class=\"bg-[#1E375A] text-white p-4\">
        <h1 class=\"text-2xl font-bold\">Gestion des Dettes</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
    {{ component('Navigation') }}

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"w-full\">
                <h2 class=\"text-xl font-semibold mb-4\">Liste des dettes</h2>

                {# <div class=\"mb-4\">
                    {{ form_start(form,  {'attr': {'class': 'flex justify-around'}})}}
                    {{ form_errors(form.client) }}
                    {{ form_widget(form.client) }}
                    {{ form_widget(form.status) }}
                    {{ form_widget(form.Search) }}
                    {{ form_end(form) }}
                </div> #}

                <div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4\">
                    <table class=\"w-full\">
                        <thead>
                            <tr class=\"bg-gray-200\">
                                <th class=\"px-4 py-2 text-left\">Date</th>
                                <th class=\"px-4 py-2 text-left\">Client</th>
                                <th class=\"px-4 py-2 text-left\">Montant</th>
                                <th class=\"px-4 py-2 text-left\">Montant Versé</th>
                                <th class=\"px-4 py-2 text-left\">Montant Restant</th>
                                <th class=\"px-4 py-2 text-left\">Statut</th>
                                <th class=\"px-4 py-2 text-left\">Payement</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for dette in dettes %}
                                <tr class=\"border-b\">
                                    <td class=\"px-4 py-2\">{{ dette.data|date('Y-m-d') }}</td>
                                    <td class=\"px-4 py-2\">{{ dette.client.surname }}</td>
                                    <td class=\"px-4 py-2\">{{ dette.montant }} F</td>
                                    <td class=\"px-4 py-2\">{{ dette.montantVerser }} F</td>
                                    <td class=\"px-4 py-2\">{{ dette.montant - dette.montantVerser > 0 ? dette.montant - dette.montantVerser : 0 }} F</td>

                                    <td class=\"px-4 py-2\">
                                        <span class=\"px-2 py-1 rounded {% if dette.status == constant('App\\\\Enum\\\\StatusDette::Paye') %}bg-green-200 text-green-800{% elseif dette.status == constant('App\\\\Enum\\\\StatusDette::Impaye') %}bg-yellow-200 text-yellow-800{% else %}bg-red-200 text-red-800{% endif %}\">
                                            {{ dette.status.value }}
                                        </span>
                                    </td>
                                    <td class=\"px-4 py-2\">
                                        {% if dette.status != constant('App\\\\Enum\\\\StatusDette::Paye') %}
                                            <form action=\"{{ path('app_dette_payment', {'id': dette.id}) }}\" method=\"post\" class=\"flex items-center\">
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
                            {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"px-4 py-2 text-center\">Aucune dette trouvée.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>

                    <div class=\"mt-4 flex justify-center\">
                        <nav class=\"inline-flex rounded-md shadow\">
                            {% if page > 1 %}
                                <a href=\"?page={{ page - 1 }}\" class=\"px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    <<<
                                </a>
                            {% endif %}

                            {% for i in 1..maxPage %}
                                <a href=\"?page={{ i }}\" class=\"px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 {% if i == page %}bg-blue-100{% endif %}\">
                                    {{ i }}
                                </a>
                            {% endfor %}

                            {% if page < maxPage %}
                                <a href=\"?page={{ page + 1 }}\" class=\"px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                                    >>>
                                </a>
                            {% endif %}
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Dettes. Tous droits réservés.</p>
    </footer>
{% endblock %}

", "dette/index.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/dette/index.html.twig");
    }
}
