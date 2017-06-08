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
        $__internal_fe1aa0cf5fb6d6474eaa77e96f4b18328fc1c64fe0a26d7e9c71c0e23abdbc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1aa0cf5fb6d6474eaa77e96f4b18328fc1c64fe0a26d7e9c71c0e23abdbc18->enter($__internal_fe1aa0cf5fb6d6474eaa77e96f4b18328fc1c64fe0a26d7e9c71c0e23abdbc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_fe1aa0cf5fb6d6474eaa77e96f4b18328fc1c64fe0a26d7e9c71c0e23abdbc18->leave($__internal_fe1aa0cf5fb6d6474eaa77e96f4b18328fc1c64fe0a26d7e9c71c0e23abdbc18_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_844581a71b5a12573c0cfa861292b01cd7e1806e9cc87d6fbb021f77662d3aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844581a71b5a12573c0cfa861292b01cd7e1806e9cc87d6fbb021f77662d3aa4->enter($__internal_844581a71b5a12573c0cfa861292b01cd7e1806e9cc87d6fbb021f77662d3aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_844581a71b5a12573c0cfa861292b01cd7e1806e9cc87d6fbb021f77662d3aa4->leave($__internal_844581a71b5a12573c0cfa861292b01cd7e1806e9cc87d6fbb021f77662d3aa4_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_29367edafb6fec9d799e1ff25c15937d6389b64b34b7b45e5565e6792464db0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29367edafb6fec9d799e1ff25c15937d6389b64b34b7b45e5565e6792464db0a->enter($__internal_29367edafb6fec9d799e1ff25c15937d6389b64b34b7b45e5565e6792464db0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_29367edafb6fec9d799e1ff25c15937d6389b64b34b7b45e5565e6792464db0a->leave($__internal_29367edafb6fec9d799e1ff25c15937d6389b64b34b7b45e5565e6792464db0a_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5124680bdddb525295b806efaa8c5a1f869b981a504de55f4d427be919b53866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5124680bdddb525295b806efaa8c5a1f869b981a504de55f4d427be919b53866->enter($__internal_5124680bdddb525295b806efaa8c5a1f869b981a504de55f4d427be919b53866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_5124680bdddb525295b806efaa8c5a1f869b981a504de55f4d427be919b53866->leave($__internal_5124680bdddb525295b806efaa8c5a1f869b981a504de55f4d427be919b53866_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfe39bb037da965664f987aa2ef5e135b008c10eb869e6893cd4ead923edc5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe39bb037da965664f987aa2ef5e135b008c10eb869e6893cd4ead923edc5f9->enter($__internal_dfe39bb037da965664f987aa2ef5e135b008c10eb869e6893cd4ead923edc5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_dfe39bb037da965664f987aa2ef5e135b008c10eb869e6893cd4ead923edc5f9->leave($__internal_dfe39bb037da965664f987aa2ef5e135b008c10eb869e6893cd4ead923edc5f9_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_76a5533ff8710d12b8ea4f7591b8088b29795af6c544cef38f6f17bb69369cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a5533ff8710d12b8ea4f7591b8088b29795af6c544cef38f6f17bb69369cbe->enter($__internal_76a5533ff8710d12b8ea4f7591b8088b29795af6c544cef38f6f17bb69369cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_76a5533ff8710d12b8ea4f7591b8088b29795af6c544cef38f6f17bb69369cbe->leave($__internal_76a5533ff8710d12b8ea4f7591b8088b29795af6c544cef38f6f17bb69369cbe_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c01a99b207496ff6544383822bff666c73dcc8dd9b8c9b0ca5ee59cd551d67f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01a99b207496ff6544383822bff666c73dcc8dd9b8c9b0ca5ee59cd551d67f3->enter($__internal_c01a99b207496ff6544383822bff666c73dcc8dd9b8c9b0ca5ee59cd551d67f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_c01a99b207496ff6544383822bff666c73dcc8dd9b8c9b0ca5ee59cd551d67f3->leave($__internal_c01a99b207496ff6544383822bff666c73dcc8dd9b8c9b0ca5ee59cd551d67f3_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_d9dfc522c5c277b41841726c581fecd84d698579d44c34d41c3d62b83149b780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dfc522c5c277b41841726c581fecd84d698579d44c34d41c3d62b83149b780->enter($__internal_d9dfc522c5c277b41841726c581fecd84d698579d44c34d41c3d62b83149b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_d9dfc522c5c277b41841726c581fecd84d698579d44c34d41c3d62b83149b780->leave($__internal_d9dfc522c5c277b41841726c581fecd84d698579d44c34d41c3d62b83149b780_prof);

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
