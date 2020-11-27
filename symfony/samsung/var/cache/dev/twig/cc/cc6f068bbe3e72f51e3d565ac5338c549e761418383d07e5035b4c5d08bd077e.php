<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* smartphone/show.html.twig */
class __TwigTemplate_c48f39218143d365aed0af2d6f213aea5d601b3fa1a1f536b35ad0bce156cae9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "smartphone/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "smartphone/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Smartphone";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Smartphone</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["smartphone"]) || array_key_exists("smartphone", $context) ? $context["smartphone"] : (function () { throw new RuntimeError('Variable "smartphone" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["smartphone"]) || array_key_exists("smartphone", $context) ? $context["smartphone"] : (function () { throw new RuntimeError('Variable "smartphone" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["smartphone"]) || array_key_exists("smartphone", $context) ? $context["smartphone"] : (function () { throw new RuntimeError('Variable "smartphone" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-info\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("smartphone_index");
        echo "\">Back to list</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("smartphone_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["smartphone"]) || array_key_exists("smartphone", $context) ? $context["smartphone"] : (function () { throw new RuntimeError('Variable "smartphone" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">Update</a>

    ";
        // line 29
        echo twig_include($this->env, $context, "smartphone/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "smartphone/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  108 => 27,  103 => 25,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Smartphone{% endblock %}

{% block body %}
    <h1>Smartphone</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ smartphone.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ smartphone.name }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ smartphone.price }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-info\" href=\"{{ path('smartphone_index') }}\">Back to list</a>

    <a class=\"btn btn-primary\" href=\"{{ path('smartphone_edit', {'id': smartphone.id}) }}\">Update</a>

    {{ include('smartphone/_delete_form.html.twig') }}
{% endblock %}
", "smartphone/show.html.twig", "C:\\Users\\Admin\\Desktop\\university\\3sem1\\FDAW\\symfony\\samsung\\templates\\smartphone\\show.html.twig");
    }
}
