<?php

/* base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaf65540f955eb44a0a44a3b670938ec7492361b7c30d93e692363b888291c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf65540f955eb44a0a44a3b670938ec7492361b7c30d93e692363b888291c1d->enter($__internal_eaf65540f955eb44a0a44a3b670938ec7492361b7c30d93e692363b888291c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_409f5b2523f461cb76b270c3de6ac996f9c84fc82f1d7464c7db8a7a9ca5312b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409f5b2523f461cb76b270c3de6ac996f9c84fc82f1d7464c7db8a7a9ca5312b->enter($__internal_409f5b2523f461cb76b270c3de6ac996f9c84fc82f1d7464c7db8a7a9ca5312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "            <ul>
                <li>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wcs_coav_homepage");
        echo "\">Return to homepage</a>
                </li>
            </ul>
        </div>


        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_eaf65540f955eb44a0a44a3b670938ec7492361b7c30d93e692363b888291c1d->leave($__internal_eaf65540f955eb44a0a44a3b670938ec7492361b7c30d93e692363b888291c1d_prof);

        
        $__internal_409f5b2523f461cb76b270c3de6ac996f9c84fc82f1d7464c7db8a7a9ca5312b->leave($__internal_409f5b2523f461cb76b270c3de6ac996f9c84fc82f1d7464c7db8a7a9ca5312b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7c325b19ad8c857d0039985d5377ae2de087b9a27657f97547b1bb57e4124e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c325b19ad8c857d0039985d5377ae2de087b9a27657f97547b1bb57e4124e2->enter($__internal_d7c325b19ad8c857d0039985d5377ae2de087b9a27657f97547b1bb57e4124e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e44825f14480fb13d77a8d90deca611a81f300601ccc7119a2d0472107d13c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44825f14480fb13d77a8d90deca611a81f300601ccc7119a2d0472107d13c75->enter($__internal_e44825f14480fb13d77a8d90deca611a81f300601ccc7119a2d0472107d13c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e44825f14480fb13d77a8d90deca611a81f300601ccc7119a2d0472107d13c75->leave($__internal_e44825f14480fb13d77a8d90deca611a81f300601ccc7119a2d0472107d13c75_prof);

        
        $__internal_d7c325b19ad8c857d0039985d5377ae2de087b9a27657f97547b1bb57e4124e2->leave($__internal_d7c325b19ad8c857d0039985d5377ae2de087b9a27657f97547b1bb57e4124e2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1888de94ab04bbb5782d6d01a80637dd9a6621ce3760ee42afa1a838914153b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1888de94ab04bbb5782d6d01a80637dd9a6621ce3760ee42afa1a838914153b->enter($__internal_d1888de94ab04bbb5782d6d01a80637dd9a6621ce3760ee42afa1a838914153b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a21ae987aa5bd46e5f51635628d6a1c354908dbaf0c4703102b7bdb09667c680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21ae987aa5bd46e5f51635628d6a1c354908dbaf0c4703102b7bdb09667c680->enter($__internal_a21ae987aa5bd46e5f51635628d6a1c354908dbaf0c4703102b7bdb09667c680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a21ae987aa5bd46e5f51635628d6a1c354908dbaf0c4703102b7bdb09667c680->leave($__internal_a21ae987aa5bd46e5f51635628d6a1c354908dbaf0c4703102b7bdb09667c680_prof);

        
        $__internal_d1888de94ab04bbb5782d6d01a80637dd9a6621ce3760ee42afa1a838914153b->leave($__internal_d1888de94ab04bbb5782d6d01a80637dd9a6621ce3760ee42afa1a838914153b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c84049c8bdc9012aa56795cd49f4f6a9514225f7f548e7b10f6d1589681129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c84049c8bdc9012aa56795cd49f4f6a9514225f7f548e7b10f6d1589681129->enter($__internal_25c84049c8bdc9012aa56795cd49f4f6a9514225f7f548e7b10f6d1589681129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58303d044da6739cca1ec0582da3d6ebea7905a74146dc49e8bb891d8cc0f3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58303d044da6739cca1ec0582da3d6ebea7905a74146dc49e8bb891d8cc0f3f7->enter($__internal_58303d044da6739cca1ec0582da3d6ebea7905a74146dc49e8bb891d8cc0f3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58303d044da6739cca1ec0582da3d6ebea7905a74146dc49e8bb891d8cc0f3f7->leave($__internal_58303d044da6739cca1ec0582da3d6ebea7905a74146dc49e8bb891d8cc0f3f7_prof);

        
        $__internal_25c84049c8bdc9012aa56795cd49f4f6a9514225f7f548e7b10f6d1589681129->leave($__internal_25c84049c8bdc9012aa56795cd49f4f6a9514225f7f548e7b10f6d1589681129_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b91ccb659b42e61186f06f7edce841a74bde6204616bfbd5e64df811d8dbd3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91ccb659b42e61186f06f7edce841a74bde6204616bfbd5e64df811d8dbd3a7->enter($__internal_b91ccb659b42e61186f06f7edce841a74bde6204616bfbd5e64df811d8dbd3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f41934e7645fb11f2b9f74ffc117b6b43421c4d099216747a6819298e44f7f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41934e7645fb11f2b9f74ffc117b6b43421c4d099216747a6819298e44f7f27->enter($__internal_f41934e7645fb11f2b9f74ffc117b6b43421c4d099216747a6819298e44f7f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f41934e7645fb11f2b9f74ffc117b6b43421c4d099216747a6819298e44f7f27->leave($__internal_f41934e7645fb11f2b9f74ffc117b6b43421c4d099216747a6819298e44f7f27_prof);

        
        $__internal_b91ccb659b42e61186f06f7edce841a74bde6204616bfbd5e64df811d8dbd3a7->leave($__internal_b91ccb659b42e61186f06f7edce841a74bde6204616bfbd5e64df811d8dbd3a7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 26,  120 => 14,  103 => 8,  85 => 5,  73 => 27,  71 => 26,  59 => 17,  55 => 15,  53 => 14,  46 => 10,  43 => 9,  41 => 8,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            {% block body %}{% endblock %}
            <ul>
                <li>
                    <a href=\"{{ path('wcs_coav_homepage') }}\">Return to homepage</a>
                </li>
            </ul>
        </div>


        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/nam/Desktop/code/clone fly/flyaround/app/Resources/views/base.html.twig");
    }
}
