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

/* user/index.html.twig */
class __TwigTemplate_078c9660e5ea77711513f8c6fc70b281 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "User Index";
        
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
        <h1 class=\"text-3xl font-bold\">User Index</h1>
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
                <!-- Create New Button -->
                <div class=\"flex justify-between items-center mb-4\">
                    <h2 class=\"text-2xl font-semibold\">Liste des Utilisateurs</h2>
                    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                        Créer un nouvel utilisateur
                    </a>
                </div>

                <!-- User Table -->
                <table class=\"min-w-full bg-white border border-gray-200\">
                    <thead>
                        <tr class=\"bg-gray-200 text-gray-700\">
                            <th class=\"py-2 px-4 border-b\">ID</th>
                            <th class=\"py-2 px-4 border-b\">Login</th>
                            <th class=\"py-2 px-4 border-b\">Roles</th>
                            <th class=\"py-2 px-4 border-b\">Nom</th>
                            <th class=\"py-2 px-4 border-b\">Prénom</th>
                            <th class=\"py-2 px-4 border-b\">Statut</th>
                            <th class=\"py-2 px-4 border-b\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 41
            yield "                            <tr class=\"hover:bg-gray-100\">
                                <td class=\"py-2 px-4 border-b text-center\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td class=\"py-2 px-4 border-b\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td class=\"py-2 px-4 border-b\">";
            // line 44
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 44)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 44)), "html", null, true)) : (yield ""));
            yield "</td>
                                <td class=\"py-2 px-4 border-b\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                <td class=\"py-2 px-4 border-b\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                <td class=\"py-2 px-4 border-b text-center\">
                                    <span class=\"px-2 py-1 text-sm rounded ";
            // line 48
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 48)) ? ("bg-green-100 text-green-600") : ("bg-red-100 text-red-600"));
            yield "\">
                                        ";
            // line 49
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 49)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"py-2 px-4 border-b text-center\">
                                    ";
            // line 54
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"text-yellow-500 hover:underline mr-2\">Modifier</a>
                                    <form method=\"post\" action=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_active", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" style=\"display: inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_active" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline ";
            // line 57
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 57)) ? ("bg-red-500 hover:bg-red-700") : ("bg-green-500 hover:bg-green-700"));
            yield "\">
                                            ";
            // line 58
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 58)) ? ("Désactiver") : ("Activer"));
            yield "
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            yield "                            <tr>
                                <td colspan=\"7\" class=\"py-4 text-center text-gray-500\">Aucun utilisateur trouvé.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Utilisateurs. Tous droits réservés.</p>
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
        return "user/index.html.twig";
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
        return array (  219 => 68,  210 => 64,  199 => 58,  195 => 57,  191 => 56,  187 => 55,  182 => 54,  175 => 49,  171 => 48,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  147 => 41,  142 => 40,  120 => 21,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Index{% endblock %}

{% block body %}
    <!-- Header -->
    <header class=\"bg-[#1E375A] text-white p-4\">
        <h1 class=\"text-3xl font-bold\">User Index</h1>
    </header>

    <div class=\"flex flex-1 h-[850px]\">
        <!-- Sidebar -->
        {{ component('Navigation') }}

        <!-- Main Content -->
        <main class=\"flex-1 p-4\">
            <div class=\"container mx-auto px-4 py-8 bg-white shadow-md rounded\">
                <!-- Create New Button -->
                <div class=\"flex justify-between items-center mb-4\">
                    <h2 class=\"text-2xl font-semibold\">Liste des Utilisateurs</h2>
                    <a href=\"{{ path('app_user_new') }}\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                        Créer un nouvel utilisateur
                    </a>
                </div>

                <!-- User Table -->
                <table class=\"min-w-full bg-white border border-gray-200\">
                    <thead>
                        <tr class=\"bg-gray-200 text-gray-700\">
                            <th class=\"py-2 px-4 border-b\">ID</th>
                            <th class=\"py-2 px-4 border-b\">Login</th>
                            <th class=\"py-2 px-4 border-b\">Roles</th>
                            <th class=\"py-2 px-4 border-b\">Nom</th>
                            <th class=\"py-2 px-4 border-b\">Prénom</th>
                            <th class=\"py-2 px-4 border-b\">Statut</th>
                            <th class=\"py-2 px-4 border-b\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr class=\"hover:bg-gray-100\">
                                <td class=\"py-2 px-4 border-b text-center\">{{ user.id }}</td>
                                <td class=\"py-2 px-4 border-b\">{{ user.login }}</td>
                                <td class=\"py-2 px-4 border-b\">{{ user.roles ? user.roles|json_encode : '' }}</td>
                                <td class=\"py-2 px-4 border-b\">{{ user.nom }}</td>
                                <td class=\"py-2 px-4 border-b\">{{ user.prenom }}</td>
                                <td class=\"py-2 px-4 border-b text-center\">
                                    <span class=\"px-2 py-1 text-sm rounded {{ user.isActive ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}\">
                                        {{ user.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td class=\"py-2 px-4 border-b text-center\">
                                    {# <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"text-blue-500 hover:underline mr-2\">Afficher</a> #}
                                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"text-yellow-500 hover:underline mr-2\">Modifier</a>
                                    <form method=\"post\" action=\"{{ path('app_user_toggle_active', {'id': user.id}) }}\" style=\"display: inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_active' ~ user.id) }}\">
                                        <button type=\"submit\" class=\"text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline {{ user.isActive ? 'bg-red-500 hover:bg-red-700' : 'bg-green-500 hover:bg-green-700' }}\">
                                            {{ user.isActive ? 'Désactiver' : 'Activer' }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"py-4 text-center text-gray-500\">Aucun utilisateur trouvé.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class=\"bg-[#1E375A] text-white p-4 text-center\">
        <p>&copy; 2023 Gestion des Utilisateurs. Tous droits réservés.</p>
    </footer>
{% endblock %}
", "user/index.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/user/index.html.twig");
    }
}
