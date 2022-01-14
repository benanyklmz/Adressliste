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

/* base.html.twig */
class __TwigTemplate_db2cfa6304daa5ea349138bb460bf456036c38bfa7c044c42c29859726247d53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" class=\"h-100\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/\">
    
    

    <!-- Bootstrap core CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    <!-- Favicons -->
<link rel=\"apple-touch-icon\" href=\"/docs/5.1/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
<link rel=\"icon\" href=\"/docs/5.1/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
<link rel=\"icon\" href=\"/docs/5.1/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
<link rel=\"manifest\" href=\"/docs/5.1/assets/img/favicons/manifest.json\">
<link rel=\"mask-icon\" href=\"/docs/5.1/assets/img/favicons/safari-pinned-tab.svg\" color=\"#7952b3\">
<link rel=\"icon\" href=\"/docs/5.1/assets/img/favicons/favicon.ico\">
<meta name=\"theme-color\" content=\"#7952b3\">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>
  <body class=\"d-flex flex-column h-100\">
    
<header>
  <!-- Fixed navbar -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/list\">Adressbuch</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/list\">Adressliste</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/new\">Anlegen</a>
        </li>
      </ul>
      </div>
  </div>
</nav>
</header>

<!-- Begin page content -->
<main class=\"flex-shrink-0\" class=\"container\">

  <div class=\"row\">
    <div class=\"col-md-12\">
    ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "  </div>
</main>


    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
    ";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "      
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Adressbuch";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 81,  175 => 75,  163 => 14,  150 => 6,  140 => 82,  138 => 81,  131 => 76,  129 => 75,  95 => 44,  64 => 15,  62 => 14,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" class=\"h-100\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Adressbuch{% endblock %}</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/\">
    
    

    <!-- Bootstrap core CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
{% block stylesheets %}{% endblock %}

    <!-- Favicons -->
<link rel=\"apple-touch-icon\" href=\"/docs/5.1/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
<link rel=\"icon\" href=\"/docs/5.1/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
<link rel=\"icon\" href=\"/docs/5.1/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
<link rel=\"manifest\" href=\"/docs/5.1/assets/img/favicons/manifest.json\">
<link rel=\"mask-icon\" href=\"/docs/5.1/assets/img/favicons/safari-pinned-tab.svg\" color=\"#7952b3\">
<link rel=\"icon\" href=\"/docs/5.1/assets/img/favicons/favicon.ico\">
<meta name=\"theme-color\" content=\"#7952b3\">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
  </head>
  <body class=\"d-flex flex-column h-100\">
    
<header>
  <!-- Fixed navbar -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/list\">Adressbuch</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/list\">Adressliste</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/new\">Anlegen</a>
        </li>
      </ul>
      </div>
  </div>
</nav>
</header>

<!-- Begin page content -->
<main class=\"flex-shrink-0\" class=\"container\">

  <div class=\"row\">
    <div class=\"col-md-12\">
    {% block body %}{% endblock %}
  </div>
</main>


    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
    {% block javascripts %}{% endblock %}
      
  </body>
</html>
", "base.html.twig", "/var/www/symfony_docker/templates/base.html.twig");
    }
}
