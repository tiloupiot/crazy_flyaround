<?php

/* @WCSCoav/Default/index.html.twig */
class __TwigTemplate_9360c5697d2c1dfd8c5f90059bb664ca589fae18e356fedf801d9bb831e7045e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c30c31e2a1c2c5deeda3f0bbb6f89d44bdaadbbb34f7897d87c18fc6cc9d66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c30c31e2a1c2c5deeda3f0bbb6f89d44bdaadbbb34f7897d87c18fc6cc9d66a->enter($__internal_5c30c31e2a1c2c5deeda3f0bbb6f89d44bdaadbbb34f7897d87c18fc6cc9d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WCSCoav/Default/index.html.twig"));

        $__internal_93c48a46108418aef09a49a395469d03269e396a2570874818e066460a0f0b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c48a46108418aef09a49a395469d03269e396a2570874818e066460a0f0b0a->enter($__internal_93c48a46108418aef09a49a395469d03269e396a2570874818e066460a0f0b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WCSCoav/Default/index.html.twig"));

        // line 1
        echo "<h1>Routes disponibles :</h1>
<ul>
    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Voir les avions</a>
    </li>
    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Voir les reservations</a>
    </li>
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Voir les vols</a>
    </li>
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_index");
        echo "\">Voir les terrains</a>
    </li>
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Voir tous les avis utilisateurs</a>
    </li>
</ul>";
        
        $__internal_5c30c31e2a1c2c5deeda3f0bbb6f89d44bdaadbbb34f7897d87c18fc6cc9d66a->leave($__internal_5c30c31e2a1c2c5deeda3f0bbb6f89d44bdaadbbb34f7897d87c18fc6cc9d66a_prof);

        
        $__internal_93c48a46108418aef09a49a395469d03269e396a2570874818e066460a0f0b0a->leave($__internal_93c48a46108418aef09a49a395469d03269e396a2570874818e066460a0f0b0a_prof);

    }

    public function getTemplateName()
    {
        return "@WCSCoav/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 13,  42 => 10,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Routes disponibles :</h1>
<ul>
    <li>
        <a href=\"{{ path('planemodel_index') }}\">Voir les avions</a>
    </li>
    <li>
        <a href=\"{{ path('reservation_index') }}\">Voir les reservations</a>
    </li>
    <li>
        <a href=\"{{ path('flight_index') }}\">Voir les vols</a>
    </li>
    <li>
        <a href=\"{{ path('terrain_index') }}\">Voir les terrains</a>
    </li>
    <li>
        <a href=\"{{ path('review_index') }}\">Voir tous les avis utilisateurs</a>
    </li>
</ul>", "@WCSCoav/Default/index.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/src/WCS/CoavBundle/Resources/views/Default/index.html.twig");
    }
}
