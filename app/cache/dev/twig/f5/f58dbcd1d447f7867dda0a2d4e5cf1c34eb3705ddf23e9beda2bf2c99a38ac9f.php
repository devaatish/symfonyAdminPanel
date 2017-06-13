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
        $__internal_22a52617c61c5ce87428dace13b38a2bf153658212c8f27a452bb459d20a72eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a52617c61c5ce87428dace13b38a2bf153658212c8f27a452bb459d20a72eb->enter($__internal_22a52617c61c5ce87428dace13b38a2bf153658212c8f27a452bb459d20a72eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_22a52617c61c5ce87428dace13b38a2bf153658212c8f27a452bb459d20a72eb->leave($__internal_22a52617c61c5ce87428dace13b38a2bf153658212c8f27a452bb459d20a72eb_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8189e9736fc240d8f7ad17a7d4eb6760b04355c8615c16909a17a4a3495b8980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8189e9736fc240d8f7ad17a7d4eb6760b04355c8615c16909a17a4a3495b8980->enter($__internal_8189e9736fc240d8f7ad17a7d4eb6760b04355c8615c16909a17a4a3495b8980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8189e9736fc240d8f7ad17a7d4eb6760b04355c8615c16909a17a4a3495b8980->leave($__internal_8189e9736fc240d8f7ad17a7d4eb6760b04355c8615c16909a17a4a3495b8980_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_312d1062c6f893ffa0deceb4ce7590dd6a78c5537384769bc039ce3f0eca7405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312d1062c6f893ffa0deceb4ce7590dd6a78c5537384769bc039ce3f0eca7405->enter($__internal_312d1062c6f893ffa0deceb4ce7590dd6a78c5537384769bc039ce3f0eca7405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_312d1062c6f893ffa0deceb4ce7590dd6a78c5537384769bc039ce3f0eca7405->leave($__internal_312d1062c6f893ffa0deceb4ce7590dd6a78c5537384769bc039ce3f0eca7405_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_24f9b69465351c1024a88e2575597be1f732ec15183568e2c2fd10dd64a7433a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f9b69465351c1024a88e2575597be1f732ec15183568e2c2fd10dd64a7433a->enter($__internal_24f9b69465351c1024a88e2575597be1f732ec15183568e2c2fd10dd64a7433a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_24f9b69465351c1024a88e2575597be1f732ec15183568e2c2fd10dd64a7433a->leave($__internal_24f9b69465351c1024a88e2575597be1f732ec15183568e2c2fd10dd64a7433a_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_f5ec09ba817c93ea79fc15b0cdad70c2b8c524dbde6e74daa2312ee3d3e98b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ec09ba817c93ea79fc15b0cdad70c2b8c524dbde6e74daa2312ee3d3e98b02->enter($__internal_f5ec09ba817c93ea79fc15b0cdad70c2b8c524dbde6e74daa2312ee3d3e98b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_f5ec09ba817c93ea79fc15b0cdad70c2b8c524dbde6e74daa2312ee3d3e98b02->leave($__internal_f5ec09ba817c93ea79fc15b0cdad70c2b8c524dbde6e74daa2312ee3d3e98b02_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_9a2fad73bd274afa85c4ff7296b8e62d8a81959e1a146f4a8e2ebef601b586d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2fad73bd274afa85c4ff7296b8e62d8a81959e1a146f4a8e2ebef601b586d4->enter($__internal_9a2fad73bd274afa85c4ff7296b8e62d8a81959e1a146f4a8e2ebef601b586d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_9a2fad73bd274afa85c4ff7296b8e62d8a81959e1a146f4a8e2ebef601b586d4->leave($__internal_9a2fad73bd274afa85c4ff7296b8e62d8a81959e1a146f4a8e2ebef601b586d4_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_07055bd100ac430cc51e376e2352f1e2bac229f63c8993a6d39a67361fa6a2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07055bd100ac430cc51e376e2352f1e2bac229f63c8993a6d39a67361fa6a2f2->enter($__internal_07055bd100ac430cc51e376e2352f1e2bac229f63c8993a6d39a67361fa6a2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_07055bd100ac430cc51e376e2352f1e2bac229f63c8993a6d39a67361fa6a2f2->leave($__internal_07055bd100ac430cc51e376e2352f1e2bac229f63c8993a6d39a67361fa6a2f2_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_18f22b29a3e4b6c2bc6214d7f2230bf4a933e9a2a9042ceaeb352ae350dc527f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f22b29a3e4b6c2bc6214d7f2230bf4a933e9a2a9042ceaeb352ae350dc527f->enter($__internal_18f22b29a3e4b6c2bc6214d7f2230bf4a933e9a2a9042ceaeb352ae350dc527f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_18f22b29a3e4b6c2bc6214d7f2230bf4a933e9a2a9042ceaeb352ae350dc527f->leave($__internal_18f22b29a3e4b6c2bc6214d7f2230bf4a933e9a2a9042ceaeb352ae350dc527f_prof);

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
