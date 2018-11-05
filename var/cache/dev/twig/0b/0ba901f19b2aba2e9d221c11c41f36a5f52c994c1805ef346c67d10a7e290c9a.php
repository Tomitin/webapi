<?php

/* frontend/barberias.html.twig */
class __TwigTemplate_8ac06deb62eb45141f9d57592f6c9cf70609323fcffe49990ae8a5a79142d8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/barberias.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/barberias.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/barberias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nuestro equipo
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"container\">

 <h1 class=\"mt-4 mb-3\">BarberZone
    <small>locales</small>
 </h1>
          
<!-- Bar Mar Del Plata -->
    ";
        // line 15
        if (((($context["sitiotwig"] ?? $this->getContext($context, "sitiotwig")) == "mdp") || (($context["sitiotwig"] ?? $this->getContext($context, "sitiotwig")) == "todos"))) {
            // line 16
            echo "    <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
        <!-- Embedded Google Map -->
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.2285814274396!2d-57.54605768488267!3d-38.01845025355587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584dc2f91109edb%3A0xe6fc741ceea5d9bf!2sMart%C3%ADn+Miguel+de+G%C3%BCemes+3250%2C+B7602DAJ+Mar+del+Plata%2C+Pcia+de+Buenos+Aires!5e0!3m2!1sen!2sar!4v1540497180908\" width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" ></iframe>    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
        <h3>Detalles del contacto</h3>
        <p>
        Güemes 3250
        <br>Mar Del Plata, 7600
        <br>
        </p>
        <p>
        <abbr title=\"Teléfono\">P</abbr>: +549 223 683-8077
        </p>
        <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:tomassaez1234@gmail.com\">tomassaez1234@gmail.com
        </a>
        </p>
        <p>
        <abbr title=\"Horas\">H</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
        </p>
    </div>
    </div>
    <!-- /.row -->
    ";
        }
        // line 44
        echo "
    <!-- Bar Pinamar -->
    ";
        // line 46
        if (((($context["sitiotwig"] ?? $this->getContext($context, "sitiotwig")) == "pin") || (($context["sitiotwig"] ?? $this->getContext($context, "sitiotwig")) == "todos"))) {
            // line 47
            echo "    <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
        <!-- Embedded Google Map -->
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2249.849886866436!2d-56.8687895797432!3d-37.11063436813152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-37.1100509!2d-56.8675509!5e0!3m2!1sen!2sar!4v1540503087818\" width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
        <h3>Detalles del contacto</h3>
        <p>
        Av. Constitución 1069
        <br>Pinamar
        <br>
        </p>
        <p>
        <abbr title=\"Teléfono\">P</abbr>: +549 223 683-8077
        </p>
        <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:tomassaez1234@gmail.com\">tomassaez1234@gmail.com
        </a>
        </p>
        <p>
        <abbr title=\"Horas\">H</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
        </p>
    </div>
    </div>
    <!-- /.row -->
    ";
        }
        // line 76
        echo "
    <!-- Bar Santa Clara -->
    ";
        // line 78
        if (((($context["sitiotwig"] ?? $this->getContext($context, "sitiotwig")) == "scl") || (($context["sitiotwig"] ?? $this->getContext($context, "sitiotwig")) == "todos"))) {
            // line 79
            echo "    <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
        <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d4329.703432522072!2d-57.50497895974198!3d-37.83048796821918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-37.829961499999996!2d-57.5040876!5e0!3m2!1sen!2sar!4v1540503168626\" width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
        <h3>Detalles del contacto</h3>
        <p>
        Av. Montecarlo 587
        <br>Santa Clara del Mar
        <br>
        </p>
        <p>
        <abbr title=\"Teléfono\">P</abbr>: +549 223 683-8077
        </p>
        <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:tomassaez1234@gmail.com\">tomassaez1234@gmail.com
        </a>
        </p>
        <p>
        <abbr title=\"Horas\">H</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
        </p>
    </div>
    </div>
    <!-- /.row -->
    ";
        }
        // line 108
        echo "
 </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/barberias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 108,  155 => 79,  153 => 78,  149 => 76,  118 => 47,  116 => 46,  112 => 44,  82 => 16,  80 => 15,  70 => 7,  61 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
Nuestro equipo
{% endblock %}

{% block body %}

<div class=\"container\">

 <h1 class=\"mt-4 mb-3\">BarberZone
    <small>locales</small>
 </h1>
          
<!-- Bar Mar Del Plata -->
    {% if sitiotwig == 'mdp' or sitiotwig == 'todos' %}
    <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
        <!-- Embedded Google Map -->
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.2285814274396!2d-57.54605768488267!3d-38.01845025355587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584dc2f91109edb%3A0xe6fc741ceea5d9bf!2sMart%C3%ADn+Miguel+de+G%C3%BCemes+3250%2C+B7602DAJ+Mar+del+Plata%2C+Pcia+de+Buenos+Aires!5e0!3m2!1sen!2sar!4v1540497180908\" width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" ></iframe>    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
        <h3>Detalles del contacto</h3>
        <p>
        Güemes 3250
        <br>Mar Del Plata, 7600
        <br>
        </p>
        <p>
        <abbr title=\"Teléfono\">P</abbr>: +549 223 683-8077
        </p>
        <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:tomassaez1234@gmail.com\">tomassaez1234@gmail.com
        </a>
        </p>
        <p>
        <abbr title=\"Horas\">H</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
        </p>
    </div>
    </div>
    <!-- /.row -->
    {% endif %}

    <!-- Bar Pinamar -->
    {% if sitiotwig == 'pin' or sitiotwig == 'todos' %}
    <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
        <!-- Embedded Google Map -->
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2249.849886866436!2d-56.8687895797432!3d-37.11063436813152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-37.1100509!2d-56.8675509!5e0!3m2!1sen!2sar!4v1540503087818\" width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
        <h3>Detalles del contacto</h3>
        <p>
        Av. Constitución 1069
        <br>Pinamar
        <br>
        </p>
        <p>
        <abbr title=\"Teléfono\">P</abbr>: +549 223 683-8077
        </p>
        <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:tomassaez1234@gmail.com\">tomassaez1234@gmail.com
        </a>
        </p>
        <p>
        <abbr title=\"Horas\">H</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
        </p>
    </div>
    </div>
    <!-- /.row -->
    {% endif %}

    <!-- Bar Santa Clara -->
    {% if sitiotwig == 'scl' or sitiotwig == 'todos' %}
    <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
        <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d4329.703432522072!2d-57.50497895974198!3d-37.83048796821918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-37.829961499999996!2d-57.5040876!5e0!3m2!1sen!2sar!4v1540503168626\" width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
        <h3>Detalles del contacto</h3>
        <p>
        Av. Montecarlo 587
        <br>Santa Clara del Mar
        <br>
        </p>
        <p>
        <abbr title=\"Teléfono\">P</abbr>: +549 223 683-8077
        </p>
        <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:tomassaez1234@gmail.com\">tomassaez1234@gmail.com
        </a>
        </p>
        <p>
        <abbr title=\"Horas\">H</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
        </p>
    </div>
    </div>
    <!-- /.row -->
    {% endif %}

 </div>
{% endblock %}    ", "frontend/barberias.html.twig", "/home/tomy/webapi/app/Resources/views/frontend/barberias.html.twig");
    }
}
