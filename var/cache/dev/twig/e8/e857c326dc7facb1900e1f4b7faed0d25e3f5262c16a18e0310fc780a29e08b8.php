<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f56041f235429fe0dc86ed3853a3fe45787d80c32b4f9e7f1662d803f48340c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56041f235429fe0dc86ed3853a3fe45787d80c32b4f9e7f1662d803f48340c6->enter($__internal_f56041f235429fe0dc86ed3853a3fe45787d80c32b4f9e7f1662d803f48340c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9925fadecc79139d07763dcf2d11f9d6d65cbe7625c2f0be9bfdb08c48ff9c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9925fadecc79139d07763dcf2d11f9d6d65cbe7625c2f0be9bfdb08c48ff9c29->enter($__internal_9925fadecc79139d07763dcf2d11f9d6d65cbe7625c2f0be9bfdb08c48ff9c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f56041f235429fe0dc86ed3853a3fe45787d80c32b4f9e7f1662d803f48340c6->leave($__internal_f56041f235429fe0dc86ed3853a3fe45787d80c32b4f9e7f1662d803f48340c6_prof);

        
        $__internal_9925fadecc79139d07763dcf2d11f9d6d65cbe7625c2f0be9bfdb08c48ff9c29->leave($__internal_9925fadecc79139d07763dcf2d11f9d6d65cbe7625c2f0be9bfdb08c48ff9c29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90113ef8707d8baa52bd34e95dfc5d72b972e64e94ae4f42b7b3f441e0a950f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90113ef8707d8baa52bd34e95dfc5d72b972e64e94ae4f42b7b3f441e0a950f3->enter($__internal_90113ef8707d8baa52bd34e95dfc5d72b972e64e94ae4f42b7b3f441e0a950f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6bd842bdaa4d4906c64800c65d2a28a4365cffa590fce01b320cdf94ddf2722b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd842bdaa4d4906c64800c65d2a28a4365cffa590fce01b320cdf94ddf2722b->enter($__internal_6bd842bdaa4d4906c64800c65d2a28a4365cffa590fce01b320cdf94ddf2722b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6bd842bdaa4d4906c64800c65d2a28a4365cffa590fce01b320cdf94ddf2722b->leave($__internal_6bd842bdaa4d4906c64800c65d2a28a4365cffa590fce01b320cdf94ddf2722b_prof);

        
        $__internal_90113ef8707d8baa52bd34e95dfc5d72b972e64e94ae4f42b7b3f441e0a950f3->leave($__internal_90113ef8707d8baa52bd34e95dfc5d72b972e64e94ae4f42b7b3f441e0a950f3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb8e00095634dbe403905ffdbd2c15e41619224e2159d6c3ce980d723c68822f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8e00095634dbe403905ffdbd2c15e41619224e2159d6c3ce980d723c68822f->enter($__internal_eb8e00095634dbe403905ffdbd2c15e41619224e2159d6c3ce980d723c68822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae20d3fab2c9fe868237a3b8af14a874c097b3dfd75080306adb024b50ceefbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae20d3fab2c9fe868237a3b8af14a874c097b3dfd75080306adb024b50ceefbb->enter($__internal_ae20d3fab2c9fe868237a3b8af14a874c097b3dfd75080306adb024b50ceefbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ae20d3fab2c9fe868237a3b8af14a874c097b3dfd75080306adb024b50ceefbb->leave($__internal_ae20d3fab2c9fe868237a3b8af14a874c097b3dfd75080306adb024b50ceefbb_prof);

        
        $__internal_eb8e00095634dbe403905ffdbd2c15e41619224e2159d6c3ce980d723c68822f->leave($__internal_eb8e00095634dbe403905ffdbd2c15e41619224e2159d6c3ce980d723c68822f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e54ef24457e9ed869cf2301812d39faa91795627cace60317a3c43503d764c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54ef24457e9ed869cf2301812d39faa91795627cace60317a3c43503d764c2f->enter($__internal_e54ef24457e9ed869cf2301812d39faa91795627cace60317a3c43503d764c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d4c086233f37ecc300a142ed3e2b9fea8fc96ee6306cb06f0fe7159a6bdffeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4c086233f37ecc300a142ed3e2b9fea8fc96ee6306cb06f0fe7159a6bdffeb->enter($__internal_7d4c086233f37ecc300a142ed3e2b9fea8fc96ee6306cb06f0fe7159a6bdffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7d4c086233f37ecc300a142ed3e2b9fea8fc96ee6306cb06f0fe7159a6bdffeb->leave($__internal_7d4c086233f37ecc300a142ed3e2b9fea8fc96ee6306cb06f0fe7159a6bdffeb_prof);

        
        $__internal_e54ef24457e9ed869cf2301812d39faa91795627cace60317a3c43503d764c2f->leave($__internal_e54ef24457e9ed869cf2301812d39faa91795627cace60317a3c43503d764c2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
