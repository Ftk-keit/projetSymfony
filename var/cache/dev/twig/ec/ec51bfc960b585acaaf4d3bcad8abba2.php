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

/* components/Navigation.html.twig */
class __TwigTemplate_339fa031d06320106d60b17324bc26b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Navigation.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <!-- component html -->
    \t\t<nav class=\"w-64 bg-[#1E375A] text-white p-4 h-full\">
\t\t\t<ul>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/client\" class=\"hover:text-gray-300\">Clients</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/dettes\" class=\"hover:text-gray-300\">Dettes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/dette/new\t\" class=\"hover:text-gray-300\">Nouvelle dette</a>
\t\t\t\t</li>
                <li class=\"mb-2\">
\t\t\t\t\t<a href=\"/user\t\" class=\"hover:text-gray-300\">Users</a>
\t\t\t\t</li>
                <li class=\"mb-2\">
\t\t\t\t\t<a href=\"/article\t\" class=\"hover:text-gray-300\">Articles</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
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
        return "components/Navigation.html.twig";
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
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes }}>
    <!-- component html -->
    \t\t<nav class=\"w-64 bg-[#1E375A] text-white p-4 h-full\">
\t\t\t<ul>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/client\" class=\"hover:text-gray-300\">Clients</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/dettes\" class=\"hover:text-gray-300\">Dettes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t<a href=\"/dette/new\t\" class=\"hover:text-gray-300\">Nouvelle dette</a>
\t\t\t\t</li>
                <li class=\"mb-2\">
\t\t\t\t\t<a href=\"/user\t\" class=\"hover:text-gray-300\">Users</a>
\t\t\t\t</li>
                <li class=\"mb-2\">
\t\t\t\t\t<a href=\"/article\t\" class=\"hover:text-gray-300\">Articles</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
</div>
", "components/Navigation.html.twig", "/home/fatima/Documents/symfony/gestBoutique_Symfony/templates/components/Navigation.html.twig");
    }
}
