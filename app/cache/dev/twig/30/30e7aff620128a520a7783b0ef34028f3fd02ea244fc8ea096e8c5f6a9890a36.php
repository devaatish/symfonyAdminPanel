<?php

/* AdminBundle:Admin/Layout:layout.html.twig */
class __TwigTemplate_0bf77a96cfd0191dc5893125c87c2a868069a48b1b97d73537f293754d800a45 extends Twig_Template
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
        $__internal_87e658872ddc497d4844054b40d67a90fc7ae174458175cf9b3a40390ed3a49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e658872ddc497d4844054b40d67a90fc7ae174458175cf9b3a40390ed3a49f->enter($__internal_87e658872ddc497d4844054b40d67a90fc7ae174458175cf9b3a40390ed3a49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e658872ddc497d4844054b40d67a90fc7ae174458175cf9b3a40390ed3a49f->leave($__internal_87e658872ddc497d4844054b40d67a90fc7ae174458175cf9b3a40390ed3a49f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68f7fa94cdf4a9313f531875fe353538a49107a4f1c88c491d715615ba7672ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f7fa94cdf4a9313f531875fe353538a49107a4f1c88c491d715615ba7672ee->enter($__internal_68f7fa94cdf4a9313f531875fe353538a49107a4f1c88c491d715615ba7672ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_68f7fa94cdf4a9313f531875fe353538a49107a4f1c88c491d715615ba7672ee->leave($__internal_68f7fa94cdf4a9313f531875fe353538a49107a4f1c88c491d715615ba7672ee_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_805bb6413a08f2f30d40adf507aebc7db99b603fc8e2a3ffcaf4f40e1979fa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805bb6413a08f2f30d40adf507aebc7db99b603fc8e2a3ffcaf4f40e1979fa25->enter($__internal_805bb6413a08f2f30d40adf507aebc7db99b603fc8e2a3ffcaf4f40e1979fa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_805bb6413a08f2f30d40adf507aebc7db99b603fc8e2a3ffcaf4f40e1979fa25->leave($__internal_805bb6413a08f2f30d40adf507aebc7db99b603fc8e2a3ffcaf4f40e1979fa25_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e06f15e7e2f60f1e1de2334aab6a7c7bf2c229831a49a3b26c8c322bffeda731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06f15e7e2f60f1e1de2334aab6a7c7bf2c229831a49a3b26c8c322bffeda731->enter($__internal_e06f15e7e2f60f1e1de2334aab6a7c7bf2c229831a49a3b26c8c322bffeda731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_e06f15e7e2f60f1e1de2334aab6a7c7bf2c229831a49a3b26c8c322bffeda731->leave($__internal_e06f15e7e2f60f1e1de2334aab6a7c7bf2c229831a49a3b26c8c322bffeda731_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_3dc81f7c5b7e22eeb3f3741442aa9f741cb4ad99dbbee3d9918b8e03c3dc980d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc81f7c5b7e22eeb3f3741442aa9f741cb4ad99dbbee3d9918b8e03c3dc980d->enter($__internal_3dc81f7c5b7e22eeb3f3741442aa9f741cb4ad99dbbee3d9918b8e03c3dc980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_3dc81f7c5b7e22eeb3f3741442aa9f741cb4ad99dbbee3d9918b8e03c3dc980d->leave($__internal_3dc81f7c5b7e22eeb3f3741442aa9f741cb4ad99dbbee3d9918b8e03c3dc980d_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_b462f72ceae672cf77e828f01f63423244455785bcce310a403aad4839e8fc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b462f72ceae672cf77e828f01f63423244455785bcce310a403aad4839e8fc8f->enter($__internal_b462f72ceae672cf77e828f01f63423244455785bcce310a403aad4839e8fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_b462f72ceae672cf77e828f01f63423244455785bcce310a403aad4839e8fc8f->leave($__internal_b462f72ceae672cf77e828f01f63423244455785bcce310a403aad4839e8fc8f_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f2f60e6062dd0784adeaab74f5048bbac79ba300234d2053dbee1d11ab1c13d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f60e6062dd0784adeaab74f5048bbac79ba300234d2053dbee1d11ab1c13d8->enter($__internal_f2f60e6062dd0784adeaab74f5048bbac79ba300234d2053dbee1d11ab1c13d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_f2f60e6062dd0784adeaab74f5048bbac79ba300234d2053dbee1d11ab1c13d8->leave($__internal_f2f60e6062dd0784adeaab74f5048bbac79ba300234d2053dbee1d11ab1c13d8_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_cb9fc85bef62eaa7ff12a404d26f3c668a592681368d053cfce0d35ce170fbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9fc85bef62eaa7ff12a404d26f3c668a592681368d053cfce0d35ce170fbcc->enter($__internal_cb9fc85bef62eaa7ff12a404d26f3c668a592681368d053cfce0d35ce170fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_cb9fc85bef62eaa7ff12a404d26f3c668a592681368d053cfce0d35ce170fbcc->leave($__internal_cb9fc85bef62eaa7ff12a404d26f3c668a592681368d053cfce0d35ce170fbcc_prof);

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
