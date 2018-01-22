<?php

/* review/new.html.twig */
class __TwigTemplate_bf0223c88d93d341ac9470eea72938ecbeb48d06b1cf85ffcc28a3dd784c7018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/new.html.twig", 1);
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
        $__internal_170fdc735a4da7c5d5200d7dfafffef539f4f15b51441ab4ca5709f0cfa485ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170fdc735a4da7c5d5200d7dfafffef539f4f15b51441ab4ca5709f0cfa485ab->enter($__internal_170fdc735a4da7c5d5200d7dfafffef539f4f15b51441ab4ca5709f0cfa485ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $__internal_941568282d677262e9532ed30567c22cb65628564c44deda6827c592bb47ea8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941568282d677262e9532ed30567c22cb65628564c44deda6827c592bb47ea8c->enter($__internal_941568282d677262e9532ed30567c22cb65628564c44deda6827c592bb47ea8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170fdc735a4da7c5d5200d7dfafffef539f4f15b51441ab4ca5709f0cfa485ab->leave($__internal_170fdc735a4da7c5d5200d7dfafffef539f4f15b51441ab4ca5709f0cfa485ab_prof);

        
        $__internal_941568282d677262e9532ed30567c22cb65628564c44deda6827c592bb47ea8c->leave($__internal_941568282d677262e9532ed30567c22cb65628564c44deda6827c592bb47ea8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07758cb9a3f161b85eb28e25a01e91892b7a6433e09176d31cd982094f981f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07758cb9a3f161b85eb28e25a01e91892b7a6433e09176d31cd982094f981f4a->enter($__internal_07758cb9a3f161b85eb28e25a01e91892b7a6433e09176d31cd982094f981f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b92979f5b274aad2fd98252b1bf418d9bcc039327519ee61763fc15aa645fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b92979f5b274aad2fd98252b1bf418d9bcc039327519ee61763fc15aa645fc5->enter($__internal_1b92979f5b274aad2fd98252b1bf418d9bcc039327519ee61763fc15aa645fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WCSCoavBundle:Review:new";
        
        $__internal_1b92979f5b274aad2fd98252b1bf418d9bcc039327519ee61763fc15aa645fc5->leave($__internal_1b92979f5b274aad2fd98252b1bf418d9bcc039327519ee61763fc15aa645fc5_prof);

        
        $__internal_07758cb9a3f161b85eb28e25a01e91892b7a6433e09176d31cd982094f981f4a->leave($__internal_07758cb9a3f161b85eb28e25a01e91892b7a6433e09176d31cd982094f981f4a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_525dcfb0faa3eff5e981f9efa33359d2e155a94ad2f5a1afc21b4cca773a7932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525dcfb0faa3eff5e981f9efa33359d2e155a94ad2f5a1afc21b4cca773a7932->enter($__internal_525dcfb0faa3eff5e981f9efa33359d2e155a94ad2f5a1afc21b4cca773a7932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ef7297fd4cb91f3fcfcc63e55e69b32ec4f2b8a48616fc968ba08a5a6c3469c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef7297fd4cb91f3fcfcc63e55e69b32ec4f2b8a48616fc968ba08a5a6c3469c->enter($__internal_2ef7297fd4cb91f3fcfcc63e55e69b32ec4f2b8a48616fc968ba08a5a6c3469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Review:new page</h1>


    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_2ef7297fd4cb91f3fcfcc63e55e69b32ec4f2b8a48616fc968ba08a5a6c3469c->leave($__internal_2ef7297fd4cb91f3fcfcc63e55e69b32ec4f2b8a48616fc968ba08a5a6c3469c_prof);

        
        $__internal_525dcfb0faa3eff5e981f9efa33359d2e155a94ad2f5a1afc21b4cca773a7932->leave($__internal_525dcfb0faa3eff5e981f9efa33359d2e155a94ad2f5a1afc21b4cca773a7932_prof);

    }

    public function getTemplateName()
    {
        return "review/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  77 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}WCSCoavBundle:Review:new{% endblock %}

{% block body %}
<h1>Welcome to the Review:new page</h1>


    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

{% endblock %}
", "review/new.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/app/Resources/views/review/new.html.twig");
    }
}
