<?php

/* review/index.html.twig */
class __TwigTemplate_6a298f241b761f0ffa94d67474a6f89a031ecda805fbd638687e07417feb3e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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
        $__internal_d900b9ae815f2296e9a34556b52fc5ef4b3bb95ec89ca7c92026e24943eff007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d900b9ae815f2296e9a34556b52fc5ef4b3bb95ec89ca7c92026e24943eff007->enter($__internal_d900b9ae815f2296e9a34556b52fc5ef4b3bb95ec89ca7c92026e24943eff007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_afdc921890a8225c556741f39752d39cf02985a6ae81060bc88e2d730ea943db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdc921890a8225c556741f39752d39cf02985a6ae81060bc88e2d730ea943db->enter($__internal_afdc921890a8225c556741f39752d39cf02985a6ae81060bc88e2d730ea943db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d900b9ae815f2296e9a34556b52fc5ef4b3bb95ec89ca7c92026e24943eff007->leave($__internal_d900b9ae815f2296e9a34556b52fc5ef4b3bb95ec89ca7c92026e24943eff007_prof);

        
        $__internal_afdc921890a8225c556741f39752d39cf02985a6ae81060bc88e2d730ea943db->leave($__internal_afdc921890a8225c556741f39752d39cf02985a6ae81060bc88e2d730ea943db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_598cea7b761bd6e4d1990a3f968b8e2a87b62150d1ce9f5a49ea5e67e3b955e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598cea7b761bd6e4d1990a3f968b8e2a87b62150d1ce9f5a49ea5e67e3b955e0->enter($__internal_598cea7b761bd6e4d1990a3f968b8e2a87b62150d1ce9f5a49ea5e67e3b955e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d026b94d8e33c358b81d778dbfaeeb60ca7e684540801832582724d9d49d326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d026b94d8e33c358b81d778dbfaeeb60ca7e684540801832582724d9d49d326->enter($__internal_4d026b94d8e33c358b81d778dbfaeeb60ca7e684540801832582724d9d49d326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WCSCoavBundle:Review:index";
        
        $__internal_4d026b94d8e33c358b81d778dbfaeeb60ca7e684540801832582724d9d49d326->leave($__internal_4d026b94d8e33c358b81d778dbfaeeb60ca7e684540801832582724d9d49d326_prof);

        
        $__internal_598cea7b761bd6e4d1990a3f968b8e2a87b62150d1ce9f5a49ea5e67e3b955e0->leave($__internal_598cea7b761bd6e4d1990a3f968b8e2a87b62150d1ce9f5a49ea5e67e3b955e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eb1a6de4e0a83b772989b489f878c91903f4286b2c82ec348e684c08327e81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb1a6de4e0a83b772989b489f878c91903f4286b2c82ec348e684c08327e81a->enter($__internal_7eb1a6de4e0a83b772989b489f878c91903f4286b2c82ec348e684c08327e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aea5eab8ad6b30fff85d9a080661e27dfc4be913512ccc4dacecac41e5826d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea5eab8ad6b30fff85d9a080661e27dfc4be913512ccc4dacecac41e5826d45->enter($__internal_aea5eab8ad6b30fff85d9a080661e27dfc4be913512ccc4dacecac41e5826d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Welcome to the Review:index page</h1>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nbreservedseats</th>
        <th>Publicationdate</th>
        <th>Passenger</th>
        <th>Flight</th>
        <th>Wasdone</th>
        <th>Actions</th>
    </tr>
    </thead>

    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_new");
        echo "\"> Create a new review </a>

";
        
        $__internal_aea5eab8ad6b30fff85d9a080661e27dfc4be913512ccc4dacecac41e5826d45->leave($__internal_aea5eab8ad6b30fff85d9a080661e27dfc4be913512ccc4dacecac41e5826d45_prof);

        
        $__internal_7eb1a6de4e0a83b772989b489f878c91903f4286b2c82ec348e684c08327e81a->leave($__internal_7eb1a6de4e0a83b772989b489f878c91903f4286b2c82ec348e684c08327e81a_prof);

    }

    public function getTemplateName()
    {
        return "review/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}WCSCoavBundle:Review:index{% endblock %}

{% block body %}

<h1>Welcome to the Review:index page</h1>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nbreservedseats</th>
        <th>Publicationdate</th>
        <th>Passenger</th>
        <th>Flight</th>
        <th>Wasdone</th>
        <th>Actions</th>
    </tr>
    </thead>

    <a href=\"{{ path('review_new') }}\"> Create a new review </a>

{% endblock %}
", "review/index.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/app/Resources/views/review/index.html.twig");
    }
}
