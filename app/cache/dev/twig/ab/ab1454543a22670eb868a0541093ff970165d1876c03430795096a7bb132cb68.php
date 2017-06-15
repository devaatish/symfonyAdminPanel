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
        $__internal_8879177d144ff095e1b484da734588d56fd5ce90ee107beac64d8fea16d13038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8879177d144ff095e1b484da734588d56fd5ce90ee107beac64d8fea16d13038->enter($__internal_8879177d144ff095e1b484da734588d56fd5ce90ee107beac64d8fea16d13038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_8879177d144ff095e1b484da734588d56fd5ce90ee107beac64d8fea16d13038->leave($__internal_8879177d144ff095e1b484da734588d56fd5ce90ee107beac64d8fea16d13038_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_036ed88820e0ccb201687241e5659c72e170f51ef98c78a4ce15504af44aaa9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036ed88820e0ccb201687241e5659c72e170f51ef98c78a4ce15504af44aaa9f->enter($__internal_036ed88820e0ccb201687241e5659c72e170f51ef98c78a4ce15504af44aaa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_036ed88820e0ccb201687241e5659c72e170f51ef98c78a4ce15504af44aaa9f->leave($__internal_036ed88820e0ccb201687241e5659c72e170f51ef98c78a4ce15504af44aaa9f_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_f855c424f7c68c7af97ff5150dbc9fa118f3e2dcaa9ce36b6fe9bad5d92bec49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f855c424f7c68c7af97ff5150dbc9fa118f3e2dcaa9ce36b6fe9bad5d92bec49->enter($__internal_f855c424f7c68c7af97ff5150dbc9fa118f3e2dcaa9ce36b6fe9bad5d92bec49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_f855c424f7c68c7af97ff5150dbc9fa118f3e2dcaa9ce36b6fe9bad5d92bec49->leave($__internal_f855c424f7c68c7af97ff5150dbc9fa118f3e2dcaa9ce36b6fe9bad5d92bec49_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_40eef2ae1607e3275a4c381703b949a40b19fdc7922a9f43413a1a659de1f34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40eef2ae1607e3275a4c381703b949a40b19fdc7922a9f43413a1a659de1f34a->enter($__internal_40eef2ae1607e3275a4c381703b949a40b19fdc7922a9f43413a1a659de1f34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_40eef2ae1607e3275a4c381703b949a40b19fdc7922a9f43413a1a659de1f34a->leave($__internal_40eef2ae1607e3275a4c381703b949a40b19fdc7922a9f43413a1a659de1f34a_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_71b65428454c6f36e4a78dcff44499f2ddbab6fee9dbb55b9ba3c9769250f06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b65428454c6f36e4a78dcff44499f2ddbab6fee9dbb55b9ba3c9769250f06c->enter($__internal_71b65428454c6f36e4a78dcff44499f2ddbab6fee9dbb55b9ba3c9769250f06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_71b65428454c6f36e4a78dcff44499f2ddbab6fee9dbb55b9ba3c9769250f06c->leave($__internal_71b65428454c6f36e4a78dcff44499f2ddbab6fee9dbb55b9ba3c9769250f06c_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_40dae3e3e9e0f5411551a9e05c36eb9d9cd4b1b62611a665e129df75d6d8be11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dae3e3e9e0f5411551a9e05c36eb9d9cd4b1b62611a665e129df75d6d8be11->enter($__internal_40dae3e3e9e0f5411551a9e05c36eb9d9cd4b1b62611a665e129df75d6d8be11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_40dae3e3e9e0f5411551a9e05c36eb9d9cd4b1b62611a665e129df75d6d8be11->leave($__internal_40dae3e3e9e0f5411551a9e05c36eb9d9cd4b1b62611a665e129df75d6d8be11_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_164b98ac380672baabd0c9343588be1193ac2d44494d9a0df5635c2aa61fc03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164b98ac380672baabd0c9343588be1193ac2d44494d9a0df5635c2aa61fc03e->enter($__internal_164b98ac380672baabd0c9343588be1193ac2d44494d9a0df5635c2aa61fc03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_164b98ac380672baabd0c9343588be1193ac2d44494d9a0df5635c2aa61fc03e->leave($__internal_164b98ac380672baabd0c9343588be1193ac2d44494d9a0df5635c2aa61fc03e_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_f82427031abaec4280b777397f66f2bace44fcfa578d50f880cf4870db33c294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82427031abaec4280b777397f66f2bace44fcfa578d50f880cf4870db33c294->enter($__internal_f82427031abaec4280b777397f66f2bace44fcfa578d50f880cf4870db33c294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_f82427031abaec4280b777397f66f2bace44fcfa578d50f880cf4870db33c294->leave($__internal_f82427031abaec4280b777397f66f2bace44fcfa578d50f880cf4870db33c294_prof);

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
