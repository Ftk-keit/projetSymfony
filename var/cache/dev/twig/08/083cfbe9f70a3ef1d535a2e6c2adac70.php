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

/* dette/new.html.twig */
class __TwigTemplate_c4eb755bd60baaecf67b5ea3a4cd43db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dette/new.html.twig", 1);
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

        yield "Créer une nouvelle dette";
        
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
        <h1 class=\"text-3xl font-bold\">Créer une nouvelle dette</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Navigation");
        yield "

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"container mx-auto px-4 py-8 bg-white shadow-md rounded\">
                ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "px-8 pt-6 pb-8"]]);
        yield "
                    <div class=\"mb-4\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "block text-gray-700 text-sm font-bold mb-2"]]);
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "data", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
        yield "
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "data", [], "any", false, false, false, 22), 'errors');
        yield "
                    </div>

                    <div class=\"mb-4\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "client", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "block text-gray-700 text-sm font-bold mb-2"]]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "client", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "client", [], "any", false, false, false, 28), 'errors');
        yield "
                    </div>

                    <div class=\"mb-4\">
                        <h3 class=\"block text-gray-700 text-sm font-bold mb-2\">Articles</h3>
                        <div id=\"detail-article-dette-list\"
                             data-prototype=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "detailArticleDettes", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "prototype", [], "any", false, false, false, 34), 'widget'), "html_attr");
        yield "\"
                             data-widget-tags=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("<div class=\"mb-2\"></div>");
        yield "\"
                             data-widget-counter=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "detailArticleDettes", [], "any", false, false, false, 36)), "html", null, true);
        yield "\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "detailArticleDettes", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["detailArticleDetteForm"]) {
            // line 38
            yield "                                <div class=\"mb-2\">
                                    ";
            // line 39
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["detailArticleDetteForm"], 'widget');
            yield "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['detailArticleDetteForm'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                        </div>
                        <button type=\"button\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2\" 
                                id=\"add-another-article\">
                            Ajouter un article
                        </button>
                    </div>

                    <div class=\"mb-6\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "montantVerser", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "block text-gray-700 text-sm font-bold mb-2"]]);
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "montantVerser", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
        yield "
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "montantVerser", [], "any", false, false, false, 52), 'errors');
        yield "
                    </div>

                    <div class=\"flex items-center justify-between\">
                        <button class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
                            Créer la dette
                        </button>
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
        <p>&copy; 2023 Gestion des Dettes. Tous droits réservés.</p>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
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

        // line 72
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    var detailList = document.querySelector('#detail-article-dette-list');
    var addButton = document.querySelector('#add-another-article');

    addButton.addEventListener('click', function() {
        var prototype = detailList.dataset.prototype;
        var index = detailList.dataset.widgetCounter;
        var newForm = prototype.replace(/__name__/g, index);
        detailList.dataset.widgetCounter = parseInt(index) + 1;

        var newElement = document.createElement('div');
        newElement.innerHTML = newForm;
        newElement.classList.add('mb-2');
        detailList.appendChild(newElement);
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
        return "dette/new.html.twig";
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
        return array (  246 => 72,  233 => 71,  212 => 60,  201 => 52,  197 => 51,  193 => 50,  183 => 42,  174 => 39,  171 => 38,  167 => 37,  163 => 36,  159 => 35,  155 => 34,  146 => 28,  142 => 27,  138 => 26,  131 => 22,  127 => 21,  123 => 20,  118 => 18,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une nouvelle dette{% endblock %}

{% block body %}
    <!-- Header -->
    <header class=\"bg-[#1E375A] text-white p-4\">
        <h1 class=\"text-3xl font-bold\">Créer une nouvelle dette</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
        {{ component('Navigation') }}

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"container mx-auto px-4 py-8 bg-white shadow-md rounded\">
                {{ form_start(form, {'attr': {'class': 'px-8 pt-6 pb-8'}}) }}
                    <div class=\"mb-4\">
                        {{ form_label(form.data, null, {'label_attr': {'class': 'block text-gray-700 text-sm font-bold mb-2'}}) }}
                        {{ form_widget(form.data, {'attr': {'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                        {{ form_errors(form.data) }}
                    </div>

                    <div class=\"mb-4\">
                        {{ form_label(form.client, null, {'label_attr': {'class': 'block text-gray-700 text-sm font-bold mb-2'}}) }}
                        {{ form_widget(form.client, {'attr': {'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                        {{ form_errors(form.client) }}
                    </div>

                    <div class=\"mb-4\">
                        <h3 class=\"block text-gray-700 text-sm font-bold mb-2\">Articles</h3>
                        <div id=\"detail-article-dette-list\"
                             data-prototype=\"{{ form_widget(form.detailArticleDettes.vars.prototype)|e('html_attr') }}\"
                             data-widget-tags=\"{{ '<div class=\"mb-2\"></div>'|e }}\"
                             data-widget-counter=\"{{ form.detailArticleDettes|length }}\">
                            {% for detailArticleDetteForm in form.detailArticleDettes %}
                                <div class=\"mb-2\">
                                    {{ form_widget(detailArticleDetteForm) }}
                                </div>
                            {% endfor %}
                        </div>
                        <button type=\"button\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2\" 
                                id=\"add-another-article\">
                            Ajouter un article
                        </button>
                    </div>

                    <div class=\"mb-6\">
                        {{ form_label(form.montantVerser, null, {'label_attr': {'class': 'block text-gray-700 text-sm font-bold mb-2'}}) }}
                        {{ form_widget(form.montantVerser, {'attr': {'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                        {{ form_errors(form.montantVerser) }}
                    </div>

                    <div class=\"flex items-center justify-between\">
                        <button class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
                            Créer la dette
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Dettes. Tous droits réservés.</p>
    </footer>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    var detailList = document.querySelector('#detail-article-dette-list');
    var addButton = document.querySelector('#add-another-article');

    addButton.addEventListener('click', function() {
        var prototype = detailList.dataset.prototype;
        var index = detailList.dataset.widgetCounter;
        var newForm = prototype.replace(/__name__/g, index);
        detailList.dataset.widgetCounter = parseInt(index) + 1;

        var newElement = document.createElement('div');
        newElement.innerHTML = newForm;
        newElement.classList.add('mb-2');
        detailList.appendChild(newElement);
    });
});
</script>
{% endblock %}
", "dette/new.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/dette/new.html.twig");
    }
}
