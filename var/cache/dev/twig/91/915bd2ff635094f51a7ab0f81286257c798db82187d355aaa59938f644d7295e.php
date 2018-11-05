<?php

/* frontend/corte.html.twig */
class __TwigTemplate_14fe3be964cdf3a483bf859a90b0a96a6e9b0bead0a3322931585f6088cc9c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/corte.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/corte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/corte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Cortes ;)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Nuestros cortes</h1>

      <!-- Portfolio Item Row -->
      <div class=\"row\">

        <div class=\"col-md-8\">
          <img class=\"img-fluid\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["corteImg"] ?? $this->getContext($context, "corteImg")) . $this->getAttribute(($context["corte"] ?? $this->getContext($context, "corte")), "foto", array()))), "html", null, true);
        echo "\" alt=\"\">
        </div>

        <div class=\"col-md-4\">
          <h3 class=\"my-3\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["corte"] ?? $this->getContext($context, "corte")), "nombre", array()), "html", null, true);
        echo "</h3>
          <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["corte"] ?? $this->getContext($context, "corte")), "descripcion", array()), "html", null, true);
        echo "</p>
          <h3 class=\"my-3\">Instrumentos utilizados</h3>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["corte"] ?? $this->getContext($context, "corte")), "herramientas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["herramienta"]) {
            echo " 
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["herramienta"], "nombre", array()), "html", null, true);
            echo "<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['herramienta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class=\"my-4\">Related Projects</h3>

      <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/corte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  105 => 27,  99 => 26,  94 => 24,  90 => 23,  83 => 19,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
Cortes ;)
{% endblock %}

{% block body %}

    <!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Nuestros cortes</h1>

      <!-- Portfolio Item Row -->
      <div class=\"row\">

        <div class=\"col-md-8\">
          <img class=\"img-fluid\" src=\"{{asset(corteImg~corte.foto)}}\" alt=\"\">
        </div>

        <div class=\"col-md-4\">
          <h3 class=\"my-3\">{{ corte.nombre }}</h3>
          <p>{{ corte.descripcion }}</p>
          <h3 class=\"my-3\">Instrumentos utilizados</h3>
            {% for herramienta in corte.herramientas %} 
        {{ herramienta.nombre }}<br>
        {% endfor %}
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class=\"my-4\">Related Projects</h3>

      <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

{% endblock %}", "frontend/corte.html.twig", "/home/tomy/webapi/app/Resources/views/frontend/corte.html.twig");
    }
}
