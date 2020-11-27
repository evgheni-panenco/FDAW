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

/* smartphone/index.html.twig */
class __TwigTemplate_796eabea9c3fd9f91fa4054b681a4e4a881d9230ea59669fafdb866fd0c34b03 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "smartphone/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "smartphone/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Samsung";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Welcome to Samsung Store</h1>

    <input class=\"form-control\" id=\"name\" name=\"name\" type=\"text\"> <br>
    <input class=\"btn btn-primary\" onclick=\"send()\" type=\"submit\" value=\"Find by name\">

    <script>
        function send() {
            let name = document.getElementById(\"name\").value;

            let url = `http://localhost:8000/smartphone/\${name}`;

            window.location = url;
        }
    </script>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["smartphones"]) || array_key_exists("smartphones", $context) ? $context["smartphones"] : (function () { throw new RuntimeError('Variable "smartphones" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["smartphone"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["smartphone"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["smartphone"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["smartphone"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("smartphone_show", ["id" => twig_get_attribute($this->env, $this->source, $context["smartphone"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Details</a> |
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("smartphone_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["smartphone"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Update</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"4\">no smartphones found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smartphone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("smartphone_new");
        echo "\">Add new smartphone</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "smartphone/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  143 => 46,  134 => 42,  125 => 38,  121 => 37,  116 => 35,  112 => 34,  108 => 33,  105 => 32,  100 => 31,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Samsung{% endblock %}

{% block body %}
    <h1>Welcome to Samsung Store</h1>

    <input class=\"form-control\" id=\"name\" name=\"name\" type=\"text\"> <br>
    <input class=\"btn btn-primary\" onclick=\"send()\" type=\"submit\" value=\"Find by name\">

    <script>
        function send() {
            let name = document.getElementById(\"name\").value;

            let url = `http://localhost:8000/smartphone/\${name}`;

            window.location = url;
        }
    </script>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for smartphone in smartphones %}
            <tr>
                <td>{{ smartphone.id }}</td>
                <td>{{ smartphone.name }}</td>
                <td>{{ smartphone.price }}</td>
                <td>
                    <a href=\"{{ path('smartphone_show', {'id': smartphone.id}) }}\">Details</a> |
                    <a href=\"{{ path('smartphone_edit', {'id': smartphone.id}) }}\">Update</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no smartphones found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"{{ path('smartphone_new') }}\">Add new smartphone</a>
{% endblock %}
", "smartphone/index.html.twig", "C:\\Users\\Admin\\Desktop\\university\\3sem1\\FDAW\\symfony\\samsung\\templates\\smartphone\\index.html.twig");
    }
}
