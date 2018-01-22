<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed47d68b1c18f25bd7c6efaa2807edcc6801795834730f218d367623fd2ed89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed47d68b1c18f25bd7c6efaa2807edcc6801795834730f218d367623fd2ed89->enter($__internal_bed47d68b1c18f25bd7c6efaa2807edcc6801795834730f218d367623fd2ed89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_de8729343a54502e8fe978f646ddcbe07b2c3f8e343dcc3f6dd1d0d89d76482a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8729343a54502e8fe978f646ddcbe07b2c3f8e343dcc3f6dd1d0d89d76482a->enter($__internal_de8729343a54502e8fe978f646ddcbe07b2c3f8e343dcc3f6dd1d0d89d76482a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bed47d68b1c18f25bd7c6efaa2807edcc6801795834730f218d367623fd2ed89->leave($__internal_bed47d68b1c18f25bd7c6efaa2807edcc6801795834730f218d367623fd2ed89_prof);

        
        $__internal_de8729343a54502e8fe978f646ddcbe07b2c3f8e343dcc3f6dd1d0d89d76482a->leave($__internal_de8729343a54502e8fe978f646ddcbe07b2c3f8e343dcc3f6dd1d0d89d76482a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b0b0a348849ededdbe4c9f9e1217d3a58566a6b2585c1970875c25674a323f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0b0a348849ededdbe4c9f9e1217d3a58566a6b2585c1970875c25674a323f1->enter($__internal_6b0b0a348849ededdbe4c9f9e1217d3a58566a6b2585c1970875c25674a323f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c4c90c5ccb9a8f7ebb5db38aecbf9927477e580930eb38d320b65db9896e206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4c90c5ccb9a8f7ebb5db38aecbf9927477e580930eb38d320b65db9896e206->enter($__internal_3c4c90c5ccb9a8f7ebb5db38aecbf9927477e580930eb38d320b65db9896e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3c4c90c5ccb9a8f7ebb5db38aecbf9927477e580930eb38d320b65db9896e206->leave($__internal_3c4c90c5ccb9a8f7ebb5db38aecbf9927477e580930eb38d320b65db9896e206_prof);

        
        $__internal_6b0b0a348849ededdbe4c9f9e1217d3a58566a6b2585c1970875c25674a323f1->leave($__internal_6b0b0a348849ededdbe4c9f9e1217d3a58566a6b2585c1970875c25674a323f1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef8bd060b0dff9f91970aa4e258fa9f912c0d372a779967aae439c1e425e2d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8bd060b0dff9f91970aa4e258fa9f912c0d372a779967aae439c1e425e2d0d->enter($__internal_ef8bd060b0dff9f91970aa4e258fa9f912c0d372a779967aae439c1e425e2d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_165dfc6f6b46e733c1e19f45763b01ceee66def1501bf0db8e533f4574369149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165dfc6f6b46e733c1e19f45763b01ceee66def1501bf0db8e533f4574369149->enter($__internal_165dfc6f6b46e733c1e19f45763b01ceee66def1501bf0db8e533f4574369149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_165dfc6f6b46e733c1e19f45763b01ceee66def1501bf0db8e533f4574369149->leave($__internal_165dfc6f6b46e733c1e19f45763b01ceee66def1501bf0db8e533f4574369149_prof);

        
        $__internal_ef8bd060b0dff9f91970aa4e258fa9f912c0d372a779967aae439c1e425e2d0d->leave($__internal_ef8bd060b0dff9f91970aa4e258fa9f912c0d372a779967aae439c1e425e2d0d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a5859d731a7bfa72ff60345f922482233101d3e3cc1139ee72db16c9e412f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5859d731a7bfa72ff60345f922482233101d3e3cc1139ee72db16c9e412f28->enter($__internal_1a5859d731a7bfa72ff60345f922482233101d3e3cc1139ee72db16c9e412f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a7d49ea100fc41c4dffb181e0a27f22053439e4b88b3c6e7b296df9ea3f4184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7d49ea100fc41c4dffb181e0a27f22053439e4b88b3c6e7b296df9ea3f4184->enter($__internal_6a7d49ea100fc41c4dffb181e0a27f22053439e4b88b3c6e7b296df9ea3f4184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a7d49ea100fc41c4dffb181e0a27f22053439e4b88b3c6e7b296df9ea3f4184->leave($__internal_6a7d49ea100fc41c4dffb181e0a27f22053439e4b88b3c6e7b296df9ea3f4184_prof);

        
        $__internal_1a5859d731a7bfa72ff60345f922482233101d3e3cc1139ee72db16c9e412f28->leave($__internal_1a5859d731a7bfa72ff60345f922482233101d3e3cc1139ee72db16c9e412f28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
