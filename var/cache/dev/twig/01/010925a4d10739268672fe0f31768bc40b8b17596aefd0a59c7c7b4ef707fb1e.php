<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6f1d7e93ac97b1ac1fa8dfff267f8ce91024507045cbcfb229cc12cf3b318bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f1d7e93ac97b1ac1fa8dfff267f8ce91024507045cbcfb229cc12cf3b318bb->enter($__internal_e6f1d7e93ac97b1ac1fa8dfff267f8ce91024507045cbcfb229cc12cf3b318bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_241c2d0c091f406d6a1956ce132202506b2a1bc1f5a3bc3a07249cbcc3da3dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241c2d0c091f406d6a1956ce132202506b2a1bc1f5a3bc3a07249cbcc3da3dfe->enter($__internal_241c2d0c091f406d6a1956ce132202506b2a1bc1f5a3bc3a07249cbcc3da3dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f1d7e93ac97b1ac1fa8dfff267f8ce91024507045cbcfb229cc12cf3b318bb->leave($__internal_e6f1d7e93ac97b1ac1fa8dfff267f8ce91024507045cbcfb229cc12cf3b318bb_prof);

        
        $__internal_241c2d0c091f406d6a1956ce132202506b2a1bc1f5a3bc3a07249cbcc3da3dfe->leave($__internal_241c2d0c091f406d6a1956ce132202506b2a1bc1f5a3bc3a07249cbcc3da3dfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c25fb5bde44a7d959f41911f7c0cf08ee589bd4d7bfec13f565354b49fd5afde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25fb5bde44a7d959f41911f7c0cf08ee589bd4d7bfec13f565354b49fd5afde->enter($__internal_c25fb5bde44a7d959f41911f7c0cf08ee589bd4d7bfec13f565354b49fd5afde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b1deac280b6e3474abdc9de018107f468e859dbc986bb0cf30919ffe868ebf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1deac280b6e3474abdc9de018107f468e859dbc986bb0cf30919ffe868ebf9->enter($__internal_4b1deac280b6e3474abdc9de018107f468e859dbc986bb0cf30919ffe868ebf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4b1deac280b6e3474abdc9de018107f468e859dbc986bb0cf30919ffe868ebf9->leave($__internal_4b1deac280b6e3474abdc9de018107f468e859dbc986bb0cf30919ffe868ebf9_prof);

        
        $__internal_c25fb5bde44a7d959f41911f7c0cf08ee589bd4d7bfec13f565354b49fd5afde->leave($__internal_c25fb5bde44a7d959f41911f7c0cf08ee589bd4d7bfec13f565354b49fd5afde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
