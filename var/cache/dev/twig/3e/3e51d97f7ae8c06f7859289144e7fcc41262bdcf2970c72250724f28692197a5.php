<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_afd2d085d7d931c0cf4403a34f5c0225e400a08a00057e3b7f26291fc71f8b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd2d085d7d931c0cf4403a34f5c0225e400a08a00057e3b7f26291fc71f8b4b->enter($__internal_afd2d085d7d931c0cf4403a34f5c0225e400a08a00057e3b7f26291fc71f8b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_afb80bd83780efa8f69a13a28cbfb1875f3495cba955090b968a2881f74a53c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb80bd83780efa8f69a13a28cbfb1875f3495cba955090b968a2881f74a53c0->enter($__internal_afb80bd83780efa8f69a13a28cbfb1875f3495cba955090b968a2881f74a53c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd2d085d7d931c0cf4403a34f5c0225e400a08a00057e3b7f26291fc71f8b4b->leave($__internal_afd2d085d7d931c0cf4403a34f5c0225e400a08a00057e3b7f26291fc71f8b4b_prof);

        
        $__internal_afb80bd83780efa8f69a13a28cbfb1875f3495cba955090b968a2881f74a53c0->leave($__internal_afb80bd83780efa8f69a13a28cbfb1875f3495cba955090b968a2881f74a53c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad7b97afc99c6f034f7fbe2cd618d6d52bdd4f237c2bf84d545193bfb6ce1f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7b97afc99c6f034f7fbe2cd618d6d52bdd4f237c2bf84d545193bfb6ce1f71->enter($__internal_ad7b97afc99c6f034f7fbe2cd618d6d52bdd4f237c2bf84d545193bfb6ce1f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8bc7cfec413ffd679c63d6a2b522de235f1337ba94396eb069987341421fac7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc7cfec413ffd679c63d6a2b522de235f1337ba94396eb069987341421fac7b->enter($__internal_8bc7cfec413ffd679c63d6a2b522de235f1337ba94396eb069987341421fac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8bc7cfec413ffd679c63d6a2b522de235f1337ba94396eb069987341421fac7b->leave($__internal_8bc7cfec413ffd679c63d6a2b522de235f1337ba94396eb069987341421fac7b_prof);

        
        $__internal_ad7b97afc99c6f034f7fbe2cd618d6d52bdd4f237c2bf84d545193bfb6ce1f71->leave($__internal_ad7b97afc99c6f034f7fbe2cd618d6d52bdd4f237c2bf84d545193bfb6ce1f71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fd312555f9d6021de6251ddd15f1d22bab98605eb87522d1f3f141b2474a891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd312555f9d6021de6251ddd15f1d22bab98605eb87522d1f3f141b2474a891->enter($__internal_5fd312555f9d6021de6251ddd15f1d22bab98605eb87522d1f3f141b2474a891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d2936eea3363c51eacb10188ef23a5201a7e75cffd33241a03a69dcbbd600cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2936eea3363c51eacb10188ef23a5201a7e75cffd33241a03a69dcbbd600cce->enter($__internal_d2936eea3363c51eacb10188ef23a5201a7e75cffd33241a03a69dcbbd600cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2936eea3363c51eacb10188ef23a5201a7e75cffd33241a03a69dcbbd600cce->leave($__internal_d2936eea3363c51eacb10188ef23a5201a7e75cffd33241a03a69dcbbd600cce_prof);

        
        $__internal_5fd312555f9d6021de6251ddd15f1d22bab98605eb87522d1f3f141b2474a891->leave($__internal_5fd312555f9d6021de6251ddd15f1d22bab98605eb87522d1f3f141b2474a891_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8203fd5a80f3dfc6e9ddcb164a14bc1053b4d34acc1f5b9e7a682fba022f0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8203fd5a80f3dfc6e9ddcb164a14bc1053b4d34acc1f5b9e7a682fba022f0d8->enter($__internal_a8203fd5a80f3dfc6e9ddcb164a14bc1053b4d34acc1f5b9e7a682fba022f0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9ed90dc430b00f78dd45fdb3b947656b0e4a3028214796a7e8520c31e7e4ac1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed90dc430b00f78dd45fdb3b947656b0e4a3028214796a7e8520c31e7e4ac1d->enter($__internal_9ed90dc430b00f78dd45fdb3b947656b0e4a3028214796a7e8520c31e7e4ac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9ed90dc430b00f78dd45fdb3b947656b0e4a3028214796a7e8520c31e7e4ac1d->leave($__internal_9ed90dc430b00f78dd45fdb3b947656b0e4a3028214796a7e8520c31e7e4ac1d_prof);

        
        $__internal_a8203fd5a80f3dfc6e9ddcb164a14bc1053b4d34acc1f5b9e7a682fba022f0d8->leave($__internal_a8203fd5a80f3dfc6e9ddcb164a14bc1053b4d34acc1f5b9e7a682fba022f0d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
