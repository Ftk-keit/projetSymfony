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

/* components/ClientFormComponent.html.twig */
class __TwigTemplate_a52d7b8b4ab61f53aa8fc397c96001ca extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/ClientFormComponent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/ClientFormComponent.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
\t<h2 class=\"text-xl font-semibold mb-4 \">Créer un nouveau client</h2>
\t<form id=\"form_client\" class=\"bg-white shadow-md rounded px-8 pt-6  mb-4\" method=\"post\" action=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new");
        yield "\">
\t\t";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        yield "

\t\t<div class=\"mb-1\">
\t\t\t";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "surname", [], "any", false, false, false, 7), 'label');
        yield "
\t\t\t";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "surname", [], "any", false, false, false, 8), 'widget');
        yield "
\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "surname", [], "any", false, false, false, 10), 'errors');
        yield "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mb-1\">
\t\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "telephone", [], "any", false, false, false, 15), 'label');
        yield "
\t\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "telephone", [], "any", false, false, false, 16), 'widget');
        yield "
\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "telephone", [], "any", false, false, false, 18), 'errors');
        yield "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mb-1\">
\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), 'label');
        yield "
\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), 'widget');
        yield "
\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "adresse", [], "any", false, false, false, 26), 'errors');
        yield "
\t\t\t</div>
\t\t</div>
\t\t";
        // line 30
        yield "
\t\t<div class=\"mb-1\">
\t\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "addAccount", [], "any", false, false, false, 32), 'label');
        yield "
\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "addAccount", [], "any", false, false, false, 33), 'widget');
        yield "
\t\t\t<div
\t\t\t\tclass=\"text-red-500 text-xs italic\">";
        // line 36
        yield "\t\t\t</div>
\t\t</div>
\t\t<div id=\"form_user\">
\t\t\t<div class=\"mb-1\">
\t\t\t\t";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 40)) {
            // line 41
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "account", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), 'label');
            yield "
\t\t\t\t\t";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "account", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), 'widget');
            yield "
\t\t\t\t";
        }
        // line 44
        yield "\t\t\t\t";
        if ((array_key_exists("error_user", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44)))) {
            // line 45
            yield "\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</div>
\t\t\t\t";
        }
        // line 47
        yield "\t\t\t</div>

\t\t\t<div class=\"mb-1\">
\t\t\t\t";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 50)) {
            // line 51
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "account", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), 'label');
            yield "
\t\t\t\t\t";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "account", [], "any", false, false, false, 52), "prenom", [], "any", false, false, false, 52), 'widget');
            yield "
\t\t\t\t";
        }
        // line 54
        yield "\t\t\t\t";
        if ((array_key_exists("error_user", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 54, $this->source); })()), "prenom", [], "any", false, false, false, 54)))) {
            // line 55
            yield "\t\t\t\t\t<pre>
                ";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["error_user"]) || array_key_exists("error_user", $context) ? $context["error_user"] : (function () { throw new RuntimeError('Variable "error_user" does not exist.', 56, $this->source); })()));
            yield "
                          </pre>
                ";
        }
        // line 59
        yield "\t\t\t\t";
        // line 62
        yield "\t\t\t</div>

\t\t\t<div class=\"mb-1\">
\t\t\t\t";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 65)) {
            // line 66
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "account", [], "any", false, false, false, 66), "login", [], "any", false, false, false, 66), 'label');
            yield "
\t\t\t\t\t";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "account", [], "any", false, false, false, 67), "login", [], "any", false, false, false, 67), 'widget');
            yield "
\t\t\t\t";
        }
        // line 69
        yield "\t\t\t</div>

\t\t\t<div class=\"mb-1\">
\t\t\t\t";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 72)) {
            // line 73
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "account", [], "any", false, false, false, 73), "password", [], "any", false, false, false, 73), 'label');
            yield "
\t\t\t\t\t";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "account", [], "any", false, false, false, 74), "password", [], "any", false, false, false, 74), 'widget');
            yield "
\t\t\t\t";
        }
        // line 76
        yield "\t\t\t</div>

\t\t\t<div class=\"mb-4\">
\t\t\t\t";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", true, true, false, 79)) {
            // line 80
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "account", [], "any", false, false, false, 80), "isActive", [], "any", false, false, false, 80), 'label');
            yield "
\t\t\t\t\t";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "account", [], "any", false, false, false, 81), "isActive", [], "any", false, false, false, 81), 'widget');
            yield "
\t\t\t\t";
        }
        // line 83
        yield "\t\t\t</div>
\t\t</div>


\t\t";
        // line 88
        yield "

\t\t<div class=\"flex items-center justify-between\">
\t\t\t<button class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
\t\t\t\tCréer le client
\t\t\t</button>
\t\t</div>

\t\t";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
        yield "
\t</form>


</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/ClientFormComponent.html.twig";
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
        return array (  251 => 96,  241 => 88,  235 => 83,  230 => 81,  225 => 80,  223 => 79,  218 => 76,  213 => 74,  208 => 73,  206 => 72,  201 => 69,  196 => 67,  191 => 66,  189 => 65,  184 => 62,  182 => 59,  176 => 56,  173 => 55,  170 => 54,  165 => 52,  160 => 51,  158 => 50,  153 => 47,  147 => 45,  144 => 44,  139 => 42,  134 => 41,  132 => 40,  126 => 36,  121 => 33,  117 => 32,  113 => 30,  107 => 26,  102 => 24,  98 => 23,  90 => 18,  85 => 16,  81 => 15,  73 => 10,  68 => 8,  64 => 7,  58 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{attributes}}>
\t<h2 class=\"text-xl font-semibold mb-4 \">Créer un nouveau client</h2>
\t<form id=\"form_client\" class=\"bg-white shadow-md rounded px-8 pt-6  mb-4\" method=\"post\" action=\"{{ path('client_new') }}\">
\t\t{{ form_start(form) }}

\t\t<div class=\"mb-1\">
\t\t\t{{ form_label(form.surname) }}
\t\t\t{{ form_widget(form.surname) }}
\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t{{ form_errors(form.surname) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mb-1\">
\t\t\t{{ form_label(form.telephone) }}
\t\t\t{{ form_widget(form.telephone) }}
\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t{{ form_errors(form.telephone) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mb-1\">
\t\t\t{{ form_label(form.adresse) }}
\t\t\t{{ form_widget(form.adresse) }}
\t\t\t<div class=\"text-red-500 text-xs italic\">
\t\t\t\t{{ form_errors(form.adresse) }}
\t\t\t</div>
\t\t</div>
\t\t{# {{ form_start(form.account) }} #}

\t\t<div class=\"mb-1\">
\t\t\t{{ form_label(form.addAccount) }}
\t\t\t{{ form_widget(form.addAccount) }}
\t\t\t<div
\t\t\t\tclass=\"text-red-500 text-xs italic\">{# {{ form_errors(form.adresse) }} #}
\t\t\t</div>
\t\t</div>
\t\t<div id=\"form_user\">
\t\t\t<div class=\"mb-1\">
\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t{{ form_label(form.account.nom) }}
\t\t\t\t\t{{ form_widget(form.account.nom) }}
\t\t\t\t{% endif %}
\t\t\t\t{% if error_user is defined and error_user.nom is not null %}
\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">{{ error_user.nom }}</div>
\t\t\t\t{% endif %}
\t\t\t</div>

\t\t\t<div class=\"mb-1\">
\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t{{ form_label(form.account.prenom) }}
\t\t\t\t\t{{ form_widget(form.account.prenom) }}
\t\t\t\t{% endif %}
\t\t\t\t{% if error_user is defined and error_user.prenom is not null %}
\t\t\t\t\t<pre>
                {{ dump(error_user) }}
                          </pre>
                {% endif %}
\t\t\t\t{# {% if error_user is defined and error_user.prenom is not null  %}
\t\t\t\t\t\t\t\t\t\t<div class=\"text-red-500 text-xs italic\">{{ error_user.prenom }}</div>
\t\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t</div>

\t\t\t<div class=\"mb-1\">
\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t{{ form_label(form.account.login) }}
\t\t\t\t\t{{ form_widget(form.account.login) }}
\t\t\t\t{% endif %}
\t\t\t</div>

\t\t\t<div class=\"mb-1\">
\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t{{ form_label(form.account.password) }}
\t\t\t\t\t{{ form_widget(form.account.password) }}
\t\t\t\t{% endif %}
\t\t\t</div>

\t\t\t<div class=\"mb-4\">
\t\t\t\t{% if form.account is defined %}
\t\t\t\t\t{{ form_label(form.account.isActive) }}
\t\t\t\t\t{{ form_widget(form.account.isActive) }}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>


\t\t{# {{ form_end(form.account) }} #}


\t\t<div class=\"flex items-center justify-between\">
\t\t\t<button class=\"bg-[#1E375A] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\" type=\"submit\">
\t\t\t\tCréer le client
\t\t\t</button>
\t\t</div>

\t\t{{ form_end(form) }}
\t</form>


</div>
", "components/ClientFormComponent.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/components/ClientFormComponent.html.twig");
    }
}
