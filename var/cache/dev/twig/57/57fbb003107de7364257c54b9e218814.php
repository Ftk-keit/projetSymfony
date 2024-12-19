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

/* article/index.html.twig */
class __TwigTemplate_4a3b47aa41c2a224e7941ea84d7f0ec7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        yield "Liste des Articles";
        
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
        <h1 class=\"text-2xl font-bold\">Gestion des Articles</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Navigation");
        yield "

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"flex flex-col gap-4\">
                <!-- Action Buttons -->
                <div class=\"flex gap-4 mb-4\">
                    <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
        yield "\" class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                        Créer un nouvel article
                    </a>
                    ";
        // line 30
        yield "                </div>

                <!-- Articles List -->
                <div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8\">
                    <table class=\"min-w-full\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th class=\"py-3 px-4 border-b text-left\">Libellé</th>
                                <th class=\"py-3 px-4 border-b text-left\">Prix</th>
                                <th class=\"py-3 px-4 border-b text-left\">Quantité en stock</th>
                                ";
        // line 41
        yield "                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 45
            yield "                                <tr class=\"hover:bg-gray-50\">
                                    <td class=\"py-2 px-4 border-b\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "libelle", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                    <td class=\"py-2 px-4 border-b\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 47) / 100), "html", null, true);
            yield " Fcfa</td>
                                    <td class=\"py-2 px-4 border-b\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "qteStock", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                    ";
            // line 64
            yield "                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            yield "                                <tr>
                                    <td colspan=\"4\" class=\"py-4 px-4 border-b text-center text-gray-500\">Aucun article trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                        </tbody>
                    </table>
                </div>
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
        return "article/index.html.twig";
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
        return array (  177 => 70,  168 => 66,  162 => 64,  158 => 48,  154 => 47,  150 => 46,  147 => 45,  142 => 44,  137 => 41,  125 => 30,  119 => 20,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Articles{% endblock %}

{% block body %}
    <!-- Header -->
    <header class=\"bg-[#1E375A] text-white p-4\">
        <h1 class=\"text-2xl font-bold\">Gestion des Articles</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
        {{ component('Navigation') }}

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"flex flex-col gap-4\">
                <!-- Action Buttons -->
                <div class=\"flex gap-4 mb-4\">
                    <a href=\"{{ path('app_article_new') }}\" class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                        Créer un nouvel article
                    </a>
                    {# <a href=\"{{ path('app_article_index', {'available': not showOnlyAvailable}) }}\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded\">
                        {% if showOnlyAvailable %}
                            Afficher tous les articles
                        {% else %}
                            Afficher uniquement les articles disponibles
                        {% endif %}
                    </a> #}
                </div>

                <!-- Articles List -->
                <div class=\"bg-white shadow-md rounded px-8 pt-6 pb-8\">
                    <table class=\"min-w-full\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th class=\"py-3 px-4 border-b text-left\">Libellé</th>
                                <th class=\"py-3 px-4 border-b text-left\">Prix</th>
                                <th class=\"py-3 px-4 border-b text-left\">Quantité en stock</th>
                                {# <th class=\"py-3 px-4 border-b text-left\">Actions</th> #}
                            </tr>
                        </thead>
                        <tbody>
                            {% for article in articles %}
                                <tr class=\"hover:bg-gray-50\">
                                    <td class=\"py-2 px-4 border-b\">{{ article.libelle }}</td>
                                    <td class=\"py-2 px-4 border-b\">{{ (article.prix / 100) }} Fcfa</td>
                                    <td class=\"py-2 px-4 border-b\">{{ article.qteStock }}</td>
                                    {# <td class=\"py-2 px-4 border-b\">
                                        <div class=\"flex items-center\">
                                            <a href=\"{{ path('app_article_show', {'id': article.id}) }}\" class=\"text-blue-500 hover:text-blue-700 mr-2\" title=\"Voir l'article\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z\" />
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                                                </svg>
                                            </a>
                                            <a href=\"{{ path('app_article_edit', {'id': article.id}) }}\" class=\"text-green-500 hover:text-green-700\" title=\"Modifier l'article\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10\" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td> #}
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"4\" class=\"py-4 px-4 border-b text-center text-gray-500\">Aucun article trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Articles. Tous droits réservés.</p>
    </footer>
{% endblock %}", "article/index.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/article/index.html.twig");
    }
}
