<?php

/* frontend/index.html.twig */
class __TwigTemplate_5f3aba7d8bb7b0828836457bb20580893a7f1bafa8717f77f5f827e4fbaf99c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

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
        echo "HOME
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
        echo "<header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url(";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider.jpg"), "html", null, true);
        echo ")\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>BarberZone</h3>
              <p>Relájate, ahora tu pelo está en nuestras manos</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider1.jpg"), "html", null, true);
        echo ")\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Comodidad</h3>
              <p>Los mejores instrumentos para cuidar tu pelo</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider2.jpg"), "html", null, true);
        echo ")\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Seguridad</h3>
              <p>Profesionales y altos conocedores se encargarán de tí</p>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">
          <!-- Portfolio Section -->
      <h1 class=\"my-4\">Nuestros mejores cortes</h1>
      
      <!-- cortes es enviado desde el controller homepageaction a través del render -->
      <div class=\"row\">
      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cortes"] ?? $this->getContext($context, "cortes")));
        foreach ($context['_seq'] as $context["_key"] => $context["clientes"]) {
            echo " 

        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <!--id porque fue declarado así en el controller, no entendí bien lo de cliente.foto, el ~ es como concatena twig -->
            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corte", array("id" => $this->getAttribute($context["clientes"], "id", array()))), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=";
            if ((twig_length_filter($this->env, $this->getAttribute($context["clientes"], "foto", array())) > 0)) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["corteImg"] ?? $this->getContext($context, "corteImg")) . $this->getAttribute($context["clientes"], "foto", array()))), "html", null, true);
                echo "\"";
            } else {
                echo "\"http://placehold.it/700x400\"";
            }
            echo " alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corte", array("id" => $this->getAttribute($context["clientes"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clientes"], "nombre", array()), "html", null, true);
            echo "</a>
              </h4>
              <p class=\"card-text\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["clientes"], "descripcion", array()), "html", null, true);
            echo "</p>
            </div>
          </div>
        </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "     
      </div>
      <!-- /.row -->
    </div>  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 73,  160 => 67,  153 => 65,  139 => 62,  129 => 57,  101 => 32,  91 => 25,  81 => 18,  70 => 9,  61 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
HOME
{% endblock %}

{# contenido #}
{% block body %}
<header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url({{ asset('img/slider.jpg') }})\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>BarberZone</h3>
              <p>Relájate, ahora tu pelo está en nuestras manos</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url({{ asset('img/slider1.jpg') }})\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Comodidad</h3>
              <p>Los mejores instrumentos para cuidar tu pelo</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url({{ asset('img/slider2.jpg') }})\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Seguridad</h3>
              <p>Profesionales y altos conocedores se encargarán de tí</p>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">
          <!-- Portfolio Section -->
      <h1 class=\"my-4\">Nuestros mejores cortes</h1>
      
      <!-- cortes es enviado desde el controller homepageaction a través del render -->
      <div class=\"row\">
      {% for clientes in cortes %} 

        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <!--id porque fue declarado así en el controller, no entendí bien lo de cliente.foto, el ~ es como concatena twig -->
            <a href=\"{{ path('corte',{ 'id':clientes.id }) }}\"><img class=\"card-img-top\" src={% if clientes.foto|length > 0 %}\"{{ asset(corteImg~clientes.foto) }}\"{% else %}\"http://placehold.it/700x400\"{% endif %} alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"{{ path('corte',{ 'id':clientes.id }) }}\"> {{clientes.nombre}}</a>
              </h4>
              <p class=\"card-text\">{{clientes.descripcion}}</p>
            </div>
          </div>
        </div>

      {% endfor %}
     
      </div>
      <!-- /.row -->
    </div>  

{% endblock %}", "frontend/index.html.twig", "/home/tomy/webapi/app/Resources/views/frontend/index.html.twig");
    }
}
