<?php

/* frontend/nosotros.html.twig */
class __TwigTemplate_15d08a70647798712329d603f77743a5894d59b9bd627ac11cbfaa86a97b33d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/nosotros.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/nosotros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/nosotros.html.twig"));

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
        echo "Nuestro equipo
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <!-- Page Content -->
    <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">BarberZone
    <small>Nosotros</small>
    </h1>

    <img class=\"img-fluid rounder mb-4\" src=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nosotrosBanner.jpg"), "html", null, true);
        echo "\" alt=\"Barbershop\">
        
        <h2>Nuestro equipo</h2>
        
        <!-- Marketing Icons Section -->
      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/barber1.jpg"), "html", null, true);
        echo "\" alt=\"Barber1\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Jeremías Gutierrez</h4>
              <p class=\"card-text\">Jeremías es considerado el más proactivo de nuestra gran barbería, 
              realiza increíbles diseños para cortes de pelo y sobre todo con suma modernidad. 
              Si quieres lucirte a la moda, Jeremías es tu opción.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">gutierrez_jere@hotmail.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/barber2.jpg"), "html", null, true);
        echo "\" alt=\"Barber2\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Julián Vasquez</h4>
              <p class=\"card-text\">Julián es el tipo de barbero que te asegura salir a la calle con un 
              corte que te haga sentir cómodo, nada de arriesgarse a pasar el ridículo, si quieres 
              un corte clásico y cómodo, Julián es tu hombre.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">julianvasquez1234@gmail.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/barber3.jpg"), "html", null, true);
        echo "\" alt=\"Barber3\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Josué Oriaga</h4>
              <p class=\"card-text\">Josué nació en la ciudad de Buenos Aires, a la edad de doce años 
              se mudó a Córdoba en donde terminó sus estudios y comenzó la facultad de Barbería en la 
              Universidad Nacional de Córdoba. Si me preguntan sobre su carácter puedo decir que es una 
              gran persona, pero sobre todo es muy serio.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">josueori87@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 54,  109 => 40,  92 => 26,  81 => 18,  70 => 9,  61 => 8,  50 => 4,  41 => 3,  11 => 1,);
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

{# contenido #}
{% block body %}

    <!-- Page Content -->
    <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">BarberZone
    <small>Nosotros</small>
    </h1>

    <img class=\"img-fluid rounder mb-4\" src=\" {{ asset('img/nosotrosBanner.jpg') }}\" alt=\"Barbershop\">
        
        <h2>Nuestro equipo</h2>
        
        <!-- Marketing Icons Section -->
      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"{{ asset('img/barber1.jpg')}}\" alt=\"Barber1\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Jeremías Gutierrez</h4>
              <p class=\"card-text\">Jeremías es considerado el más proactivo de nuestra gran barbería, 
              realiza increíbles diseños para cortes de pelo y sobre todo con suma modernidad. 
              Si quieres lucirte a la moda, Jeremías es tu opción.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">gutierrez_jere@hotmail.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"{{ asset('img/barber2.jpg')}}\" alt=\"Barber2\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Julián Vasquez</h4>
              <p class=\"card-text\">Julián es el tipo de barbero que te asegura salir a la calle con un 
              corte que te haga sentir cómodo, nada de arriesgarse a pasar el ridículo, si quieres 
              un corte clásico y cómodo, Julián es tu hombre.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">julianvasquez1234@gmail.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"{{ asset('img/barber3.jpg')}}\" alt=\"Barber3\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Josué Oriaga</h4>
              <p class=\"card-text\">Josué nació en la ciudad de Buenos Aires, a la edad de doce años 
              se mudó a Córdoba en donde terminó sus estudios y comenzó la facultad de Barbería en la 
              Universidad Nacional de Córdoba. Si me preguntan sobre su carácter puedo decir que es una 
              gran persona, pero sobre todo es muy serio.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">josueori87@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
{% endblock %}", "frontend/nosotros.html.twig", "/home/tomy/webapi/app/Resources/views/frontend/nosotros.html.twig");
    }
}
