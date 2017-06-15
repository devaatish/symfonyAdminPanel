<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_883e965e5e521f1d4518e081bc3ca234ec1377449cfc7f3abf834beecaf020f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'quicksidebar' => array($this, 'block_quicksidebar'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4da6a7fa1bdee74f8ded1480d757211c9683b152014e95be0a013e1eb58f088c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da6a7fa1bdee74f8ded1480d757211c9683b152014e95be0a013e1eb58f088c->enter($__internal_4da6a7fa1bdee74f8ded1480d757211c9683b152014e95be0a013e1eb58f088c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>
<!-- END HEAD --><!--<![endif]-->
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <!-- BEGIN HEADER -->
         ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "
        <!-- END HEADER -->
        
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            ";
        // line 38
        $this->displayBlock('sidebar', $context, $blocks);
        // line 40
        echo "            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "            <!-- END CONTENT -->

            <!-- BEGIN QUICK SIDEBAR -->
            ";
        // line 48
        $this->displayBlock('quicksidebar', $context, $blocks);
        // line 50
        echo "            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
         ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "        <!-- END FOOTER -->

          <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->
        ";
        // line 62
        $this->displayBlock('js', $context, $blocks);
        // line 64
        echo " </body>

</html>";
        
        $__internal_4da6a7fa1bdee74f8ded1480d757211c9683b152014e95be0a013e1eb58f088c->leave($__internal_4da6a7fa1bdee74f8ded1480d757211c9683b152014e95be0a013e1eb58f088c_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0fffbc93d880d413b0bd9f68825c756bdc45442a1c0dab790f846ad0d8f28e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fffbc93d880d413b0bd9f68825c756bdc45442a1c0dab790f846ad0d8f28e2->enter($__internal_b0fffbc93d880d413b0bd9f68825c756bdc45442a1c0dab790f846ad0d8f28e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0fffbc93d880d413b0bd9f68825c756bdc45442a1c0dab790f846ad0d8f28e2->leave($__internal_b0fffbc93d880d413b0bd9f68825c756bdc45442a1c0dab790f846ad0d8f28e2_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_0777342cba42596291e67ff3d5030895fce2516a307efbd395cfb00cc64f0ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0777342cba42596291e67ff3d5030895fce2516a307efbd395cfb00cc64f0ca6->enter($__internal_0777342cba42596291e67ff3d5030895fce2516a307efbd395cfb00cc64f0ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_0777342cba42596291e67ff3d5030895fce2516a307efbd395cfb00cc64f0ca6->leave($__internal_0777342cba42596291e67ff3d5030895fce2516a307efbd395cfb00cc64f0ca6_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fb6cdd450fb207d47090072cb07aa26dda14d23a2d01b99f7fd34bac9ed892d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6cdd450fb207d47090072cb07aa26dda14d23a2d01b99f7fd34bac9ed892d3->enter($__internal_fb6cdd450fb207d47090072cb07aa26dda14d23a2d01b99f7fd34bac9ed892d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_fb6cdd450fb207d47090072cb07aa26dda14d23a2d01b99f7fd34bac9ed892d3->leave($__internal_fb6cdd450fb207d47090072cb07aa26dda14d23a2d01b99f7fd34bac9ed892d3_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_99f2d6a8d3a38781b2eb49963367e35160bfd245396b66b6ded62f44a7c4ca3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f2d6a8d3a38781b2eb49963367e35160bfd245396b66b6ded62f44a7c4ca3e->enter($__internal_99f2d6a8d3a38781b2eb49963367e35160bfd245396b66b6ded62f44a7c4ca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_99f2d6a8d3a38781b2eb49963367e35160bfd245396b66b6ded62f44a7c4ca3e->leave($__internal_99f2d6a8d3a38781b2eb49963367e35160bfd245396b66b6ded62f44a7c4ca3e_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_667a0eaa02891d2c2abf4ad0d4a5118509fdf4b9f2c4e4143f137cd0d28448ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667a0eaa02891d2c2abf4ad0d4a5118509fdf4b9f2c4e4143f137cd0d28448ab->enter($__internal_667a0eaa02891d2c2abf4ad0d4a5118509fdf4b9f2c4e4143f137cd0d28448ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_667a0eaa02891d2c2abf4ad0d4a5118509fdf4b9f2c4e4143f137cd0d28448ab->leave($__internal_667a0eaa02891d2c2abf4ad0d4a5118509fdf4b9f2c4e4143f137cd0d28448ab_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_526bac523d2817946d92f1c10b8c344837efdddb948232ff7daa0b909dc0c32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526bac523d2817946d92f1c10b8c344837efdddb948232ff7daa0b909dc0c32f->enter($__internal_526bac523d2817946d92f1c10b8c344837efdddb948232ff7daa0b909dc0c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_526bac523d2817946d92f1c10b8c344837efdddb948232ff7daa0b909dc0c32f->leave($__internal_526bac523d2817946d92f1c10b8c344837efdddb948232ff7daa0b909dc0c32f_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_4a3852aa785f367b64b71edf2ac1b20fd190b0ec87fb73a5651c93fba8c16f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3852aa785f367b64b71edf2ac1b20fd190b0ec87fb73a5651c93fba8c16f72->enter($__internal_4a3852aa785f367b64b71edf2ac1b20fd190b0ec87fb73a5651c93fba8c16f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_4a3852aa785f367b64b71edf2ac1b20fd190b0ec87fb73a5651c93fba8c16f72->leave($__internal_4a3852aa785f367b64b71edf2ac1b20fd190b0ec87fb73a5651c93fba8c16f72_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 63,  191 => 62,  184 => 55,  178 => 54,  171 => 49,  165 => 48,  158 => 44,  152 => 43,  145 => 39,  139 => 38,  132 => 27,  126 => 26,  115 => 20,  106 => 64,  104 => 62,  96 => 56,  94 => 54,  88 => 50,  86 => 48,  81 => 45,  79 => 43,  74 => 40,  72 => 38,  60 => 28,  58 => 26,  52 => 22,  50 => 20,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
{% block stylesheets %}
{% endblock %}
</head>
<!-- END HEAD --><!--<![endif]-->
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <!-- BEGIN HEADER -->
         {% block header %}
          {% endblock %}

        <!-- END HEADER -->
        
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            {% block sidebar %}
            {% endblock %}
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            {% block content %}
             {% endblock %}
            <!-- END CONTENT -->

            <!-- BEGIN QUICK SIDEBAR -->
            {% block quicksidebar %}
             {% endblock %}
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
         {% block footer %}
             {% endblock %}
        <!-- END FOOTER -->

          <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->
        {% block js %}
             {% endblock %}
 </body>

</html>", "AdminBundle::base.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/base.html.twig");
    }
}
