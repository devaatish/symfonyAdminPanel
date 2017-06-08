<?php

/* AdminBundle:Admin/Layout:layout.html.twig */
class __TwigTemplate_86fc049b6dd0dbb3de566ec0a5dca9394afd9900707011462663c89528318f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Admin/Layout:layout.html.twig", 1);
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

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82c48c06cc7b1db9859ebc0b86adb4e4d228d0a58bd1c568141e7b00ec02f119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c48c06cc7b1db9859ebc0b86adb4e4d228d0a58bd1c568141e7b00ec02f119->enter($__internal_82c48c06cc7b1db9859ebc0b86adb4e4d228d0a58bd1c568141e7b00ec02f119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c48c06cc7b1db9859ebc0b86adb4e4d228d0a58bd1c568141e7b00ec02f119->leave($__internal_82c48c06cc7b1db9859ebc0b86adb4e4d228d0a58bd1c568141e7b00ec02f119_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9762886455cd2b975287712ec630be47af73eb41906eac3a1a1a89756ebe2035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9762886455cd2b975287712ec630be47af73eb41906eac3a1a1a89756ebe2035->enter($__internal_9762886455cd2b975287712ec630be47af73eb41906eac3a1a1a89756ebe2035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_9762886455cd2b975287712ec630be47af73eb41906eac3a1a1a89756ebe2035->leave($__internal_9762886455cd2b975287712ec630be47af73eb41906eac3a1a1a89756ebe2035_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_defcca4ddfae162481acb28b64be585048379abec833f4a723b47c90971f9792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defcca4ddfae162481acb28b64be585048379abec833f4a723b47c90971f9792->enter($__internal_defcca4ddfae162481acb28b64be585048379abec833f4a723b47c90971f9792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_defcca4ddfae162481acb28b64be585048379abec833f4a723b47c90971f9792->leave($__internal_defcca4ddfae162481acb28b64be585048379abec833f4a723b47c90971f9792_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4fa7805a0c4871449fcae3d18262c6b2f84d96c5d37903b268b9cea65e4d16e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa7805a0c4871449fcae3d18262c6b2f84d96c5d37903b268b9cea65e4d16e7->enter($__internal_4fa7805a0c4871449fcae3d18262c6b2f84d96c5d37903b268b9cea65e4d16e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_4fa7805a0c4871449fcae3d18262c6b2f84d96c5d37903b268b9cea65e4d16e7->leave($__internal_4fa7805a0c4871449fcae3d18262c6b2f84d96c5d37903b268b9cea65e4d16e7_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8cfc154d256eb982ec54d1bba7f35baba480263384a715b536f57940c80c33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cfc154d256eb982ec54d1bba7f35baba480263384a715b536f57940c80c33a->enter($__internal_c8cfc154d256eb982ec54d1bba7f35baba480263384a715b536f57940c80c33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_c8cfc154d256eb982ec54d1bba7f35baba480263384a715b536f57940c80c33a->leave($__internal_c8cfc154d256eb982ec54d1bba7f35baba480263384a715b536f57940c80c33a_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_72fa01579449230d712864ef272fe2a0b0cf9018b38860acca44c92747f73434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fa01579449230d712864ef272fe2a0b0cf9018b38860acca44c92747f73434->enter($__internal_72fa01579449230d712864ef272fe2a0b0cf9018b38860acca44c92747f73434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_72fa01579449230d712864ef272fe2a0b0cf9018b38860acca44c92747f73434->leave($__internal_72fa01579449230d712864ef272fe2a0b0cf9018b38860acca44c92747f73434_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f84e2371352fda452bb45687288d112b17928487eb2d552748690e3a2dee7d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84e2371352fda452bb45687288d112b17928487eb2d552748690e3a2dee7d2a->enter($__internal_f84e2371352fda452bb45687288d112b17928487eb2d552748690e3a2dee7d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_f84e2371352fda452bb45687288d112b17928487eb2d552748690e3a2dee7d2a->leave($__internal_f84e2371352fda452bb45687288d112b17928487eb2d552748690e3a2dee7d2a_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_e3ae4d5910d32d1222bf58a8fa1b71dcc60e09738bb17d687d7012bb00a8c93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ae4d5910d32d1222bf58a8fa1b71dcc60e09738bb17d687d7012bb00a8c93f->enter($__internal_e3ae4d5910d32d1222bf58a8fa1b71dcc60e09738bb17d687d7012bb00a8c93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_e3ae4d5910d32d1222bf58a8fa1b71dcc60e09738bb17d687d7012bb00a8c93f->leave($__internal_e3ae4d5910d32d1222bf58a8fa1b71dcc60e09738bb17d687d7012bb00a8c93f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 27,  130 => 26,  121 => 23,  115 => 22,  106 => 19,  100 => 18,  91 => 15,  85 => 14,  76 => 11,  70 => 10,  61 => 7,  55 => 6,  46 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::base.html.twig'%}
{% block stylesheets %}
{{ include('AdminBundle:Admin/Layout:include_top.html.twig') }}
{% endblock %}

{% block header %}
{{ include('AdminBundle:Admin/Layout:header.html.twig') }}
{% endblock %}

{% block sidebar %}
{{ include('AdminBundle:Admin/Layout:sidebar.html.twig') }}
{% endblock %}

{% block content %}
{{ include('AdminBundle:Admin/Layout:content.html.twig') }}
{% endblock %}

{% block quicksidebar %}
{{ include('AdminBundle:Admin/Layout:quick_sidebar.html.twig') }}
{% endblock %}

{% block footer %}
{{ include('AdminBundle:Admin/Layout:footer.html.twig') }}
{% endblock %}

{% block js %}
{{ include('AdminBundle:Admin/Layout:include_bottom.html.twig') }}
{% endblock %}
", "AdminBundle:Admin/Layout:layout.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/layout.html.twig");
    }
}
