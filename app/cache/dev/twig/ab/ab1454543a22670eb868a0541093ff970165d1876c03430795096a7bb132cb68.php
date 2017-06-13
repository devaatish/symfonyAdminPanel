<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_61db33bf22ea71c59ff50faccf224223eff6ae05524051a79d896f84226ed00d extends Twig_Template
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
        $__internal_afbb4ff2535b669e8632b9b6383bcbb00c09426a2ec13fcd9e3c0c379d8dfe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbb4ff2535b669e8632b9b6383bcbb00c09426a2ec13fcd9e3c0c379d8dfe9a->enter($__internal_afbb4ff2535b669e8632b9b6383bcbb00c09426a2ec13fcd9e3c0c379d8dfe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_afbb4ff2535b669e8632b9b6383bcbb00c09426a2ec13fcd9e3c0c379d8dfe9a->leave($__internal_afbb4ff2535b669e8632b9b6383bcbb00c09426a2ec13fcd9e3c0c379d8dfe9a_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3787809b85897b97754a9a116be1db223a9f30a0c89995421bc448ba89fa5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3787809b85897b97754a9a116be1db223a9f30a0c89995421bc448ba89fa5d3->enter($__internal_f3787809b85897b97754a9a116be1db223a9f30a0c89995421bc448ba89fa5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f3787809b85897b97754a9a116be1db223a9f30a0c89995421bc448ba89fa5d3->leave($__internal_f3787809b85897b97754a9a116be1db223a9f30a0c89995421bc448ba89fa5d3_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_3ca20780274a2225b88b5482cd1c2d4186c2a9af46ee2891c8d5e6e23d62ab7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca20780274a2225b88b5482cd1c2d4186c2a9af46ee2891c8d5e6e23d62ab7b->enter($__internal_3ca20780274a2225b88b5482cd1c2d4186c2a9af46ee2891c8d5e6e23d62ab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_3ca20780274a2225b88b5482cd1c2d4186c2a9af46ee2891c8d5e6e23d62ab7b->leave($__internal_3ca20780274a2225b88b5482cd1c2d4186c2a9af46ee2891c8d5e6e23d62ab7b_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e7600ad07d7612b533fccc294191e64f6c40abfeb66c75500c133a3ee3d50d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7600ad07d7612b533fccc294191e64f6c40abfeb66c75500c133a3ee3d50d59->enter($__internal_e7600ad07d7612b533fccc294191e64f6c40abfeb66c75500c133a3ee3d50d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_e7600ad07d7612b533fccc294191e64f6c40abfeb66c75500c133a3ee3d50d59->leave($__internal_e7600ad07d7612b533fccc294191e64f6c40abfeb66c75500c133a3ee3d50d59_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_6874e6f970e4bec9374468dc980ea46aa215ec391a2648b18dcbc1997360728f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6874e6f970e4bec9374468dc980ea46aa215ec391a2648b18dcbc1997360728f->enter($__internal_6874e6f970e4bec9374468dc980ea46aa215ec391a2648b18dcbc1997360728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_6874e6f970e4bec9374468dc980ea46aa215ec391a2648b18dcbc1997360728f->leave($__internal_6874e6f970e4bec9374468dc980ea46aa215ec391a2648b18dcbc1997360728f_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_b568757968b08ab32efc7a5985f5376eef139ab7a87139fb66ede313a089730a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b568757968b08ab32efc7a5985f5376eef139ab7a87139fb66ede313a089730a->enter($__internal_b568757968b08ab32efc7a5985f5376eef139ab7a87139fb66ede313a089730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_b568757968b08ab32efc7a5985f5376eef139ab7a87139fb66ede313a089730a->leave($__internal_b568757968b08ab32efc7a5985f5376eef139ab7a87139fb66ede313a089730a_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4948e0f3d2d6cc247adefcb4f88261e128f8a42887c2357e6a70e2887f730f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4948e0f3d2d6cc247adefcb4f88261e128f8a42887c2357e6a70e2887f730f00->enter($__internal_4948e0f3d2d6cc247adefcb4f88261e128f8a42887c2357e6a70e2887f730f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_4948e0f3d2d6cc247adefcb4f88261e128f8a42887c2357e6a70e2887f730f00->leave($__internal_4948e0f3d2d6cc247adefcb4f88261e128f8a42887c2357e6a70e2887f730f00_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_a72239d1dbf289773f8669b479fd085e1894e51ee67bfceac75cedceb5f17281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72239d1dbf289773f8669b479fd085e1894e51ee67bfceac75cedceb5f17281->enter($__internal_a72239d1dbf289773f8669b479fd085e1894e51ee67bfceac75cedceb5f17281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_a72239d1dbf289773f8669b479fd085e1894e51ee67bfceac75cedceb5f17281->leave($__internal_a72239d1dbf289773f8669b479fd085e1894e51ee67bfceac75cedceb5f17281_prof);

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
