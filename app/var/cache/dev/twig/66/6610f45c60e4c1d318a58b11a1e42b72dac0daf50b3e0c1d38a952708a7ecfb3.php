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

/* adresse/list2.html.twig */
class __TwigTemplate_6161b5f0df3b50258f843acf91cf917207ab92c249581db67750f1673c47e0eb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adresse/list2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adresse/list2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <div class=\"table-responsive\">
 <table class=\"table table-striped\">
  <thead>
  <tr>
    <th scope=\"col\">Vorname</th>
    <th scope=\"col\">Nachname</th>
    <th scope=\"col\">Strasse</th>
    <th scope=\"col\">Hausnummer</th>
    <th scope=\"col\">Ort</th>
    <th scope=\"col\">PLZ</th>
    <th scope=\"col\">Telefonnummer</th>
    <th scope=\"col\">Email Adresse</th>
    <th scope=\"col\"></th>
    <th scope=\"col\"></th>
  </tr>
</thead>
 <tbody>
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adresses"]) || array_key_exists("adresses", $context) ? $context["adresses"] : (function () { throw new RuntimeError('Variable "adresses" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "    <tr>    
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getVorname", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getNachname", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getStrasse", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getHausnummer", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getOrt", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPlz", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTelefonnumer", [], "method", false, false, false, 28), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getEmailAdresse", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
        <td scope=\"row\"><a href=\"/edit/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 30), "html", null, true);
            echo "\"><b style=\"color: green;\">Edit</b></a></td>
        <td scope=\"row\"><a href=\"/delete/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 31), "html", null, true);
            echo "\"><b style=\"color: red;\">Delete</b></a></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</tbody>
</table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "adresse/list2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  82 => 21,  78 => 20,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}
 {% block body %}
 <div class=\"table-responsive\">
 <table class=\"table table-striped\">
  <thead>
  <tr>
    <th scope=\"col\">Vorname</th>
    <th scope=\"col\">Nachname</th>
    <th scope=\"col\">Strasse</th>
    <th scope=\"col\">Hausnummer</th>
    <th scope=\"col\">Ort</th>
    <th scope=\"col\">PLZ</th>
    <th scope=\"col\">Telefonnummer</th>
    <th scope=\"col\">Email Adresse</th>
    <th scope=\"col\"></th>
    <th scope=\"col\"></th>
  </tr>
</thead>
 <tbody>
{% for item in adresses %}
    <tr>    
        <td>{{ item.getVorname() }}</td>
        <td>{{ item.getNachname() }}</td>
        <td>{{ item.getStrasse() }}</td>
        <td>{{ item.getHausnummer() }}</td>
        <td>{{ item.getOrt() }}</td>
        <td>{{ item.getPlz() }}</td>
        <td>{{ item.getTelefonnumer() }}</td>
        <td>{{ item.getEmailAdresse() }}</td>
        <td scope=\"row\"><a href=\"/edit/{{ item.getId() }}\"><b style=\"color: green;\">Edit</b></a></td>
        <td scope=\"row\"><a href=\"/delete/{{ item.getId() }}\"><b style=\"color: red;\">Delete</b></a></td>
    </tr>
{% endfor %}
</tbody>
</table>
</div>
{% endblock %}", "adresse/list2.html.twig", "/var/www/symfony_docker/templates/adresse/list2.html.twig");
    }
}
