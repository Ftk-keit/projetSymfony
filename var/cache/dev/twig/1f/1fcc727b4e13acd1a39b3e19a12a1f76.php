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

/* article/new.html.twig */
class __TwigTemplate_a74cfbaf9476cb03c5768d04ce5b0428 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
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

        yield "Nouvel Article";
        
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
        <h1 class=\"text-2xl font-bold\">Création d'un Article</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
        <nav class=\"w-64 bg-[#1E375A] text-white p-4\">
            <ul>
                <li class=\"mb-2\">
                    <a href=\"#\" class=\"hover:text-gray-300\">Tableau de bord</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"/client\" class=\"hover:text-gray-300\">Clients</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"/dettes\" class=\"hover:text-gray-300\">Dettes</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"/dette/new\" class=\"hover:text-gray-300\">Nouvelle dette</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"#\" class=\"hover:text-gray-300\">Commandes</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"max-w-2xl mx-auto\">
                ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["class" => "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"]]);
        yield "
                    <div class=\"mb-4\">
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "children", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 39
            yield "                            <div class=\"mb-4\">
                                ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "block text-gray-700 text-sm font-bold mb-2"]]);
            yield "
                                ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
            yield "
                                <div class=\"text-red-500 text-xs italic\">
                                    ";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
            yield "
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                    </div>

                    <div class=\"flex items-center justify-between mt-6\">
                        <button class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
                            Créer l'article
                        </button>
                        <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\" class=\"flex items-center text-[#1E375A] hover:text-blue-700 font-bold\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4 mr-2\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3\" />
                            </svg>
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        yield "
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Articles. Tous droits réservés.</p>
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
        return "article/new.html.twig";
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
        return array (  181 => 60,  171 => 53,  163 => 47,  153 => 43,  148 => 41,  144 => 40,  141 => 39,  137 => 38,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Article{% endblock %}

{% block body %}
    <!-- Header -->
    <header class=\"bg-[#1E375A] text-white p-4\">
        <h1 class=\"text-2xl font-bold\">Création d'un Article</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
        <nav class=\"w-64 bg-[#1E375A] text-white p-4\">
            <ul>
                <li class=\"mb-2\">
                    <a href=\"#\" class=\"hover:text-gray-300\">Tableau de bord</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"/client\" class=\"hover:text-gray-300\">Clients</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"/dettes\" class=\"hover:text-gray-300\">Dettes</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"/dette/new\" class=\"hover:text-gray-300\">Nouvelle dette</a>
                </li>
                <li class=\"mb-2\">
                    <a href=\"#\" class=\"hover:text-gray-300\">Commandes</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"max-w-2xl mx-auto\">
                {{ form_start(form, {'attr': {'class': 'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4'}}) }}
                    <div class=\"mb-4\">
                        {% for field in form.children %}
                            <div class=\"mb-4\">
                                {{ form_label(field, null, {'label_attr': {'class': 'block text-gray-700 text-sm font-bold mb-2'}}) }}
                                {{ form_widget(field, {'attr': {'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                                <div class=\"text-red-500 text-xs italic\">
                                    {{ form_errors(field) }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>

                    <div class=\"flex items-center justify-between mt-6\">
                        <button class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
                            Créer l'article
                        </button>
                        <a href=\"{{ path('app_article_index') }}\" class=\"flex items-center text-[#1E375A] hover:text-blue-700 font-bold\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4 mr-2\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3\" />
                            </svg>
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Articles. Tous droits réservés.</p>
    </footer>
{% endblock %}", "article/new.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/article/new.html.twig");
    }
}
