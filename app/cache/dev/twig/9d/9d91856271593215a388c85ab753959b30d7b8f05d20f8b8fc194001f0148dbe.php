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
        $__internal_056607643adfcfe1c981ec3e5bebbf08345d2e825871124aa45fe317e813007f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056607643adfcfe1c981ec3e5bebbf08345d2e825871124aa45fe317e813007f->enter($__internal_056607643adfcfe1c981ec3e5bebbf08345d2e825871124aa45fe317e813007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056607643adfcfe1c981ec3e5bebbf08345d2e825871124aa45fe317e813007f->leave($__internal_056607643adfcfe1c981ec3e5bebbf08345d2e825871124aa45fe317e813007f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b474cd61806504a9595426c1675b97ab9f8ecef398a72d3a275449be2b7e5db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b474cd61806504a9595426c1675b97ab9f8ecef398a72d3a275449be2b7e5db5->enter($__internal_b474cd61806504a9595426c1675b97ab9f8ecef398a72d3a275449be2b7e5db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_b474cd61806504a9595426c1675b97ab9f8ecef398a72d3a275449be2b7e5db5->leave($__internal_b474cd61806504a9595426c1675b97ab9f8ecef398a72d3a275449be2b7e5db5_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_06276d6db85d9bf15553f1984b9ad1ae13c729174e72d6b68dcd428ed7a96e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06276d6db85d9bf15553f1984b9ad1ae13c729174e72d6b68dcd428ed7a96e37->enter($__internal_06276d6db85d9bf15553f1984b9ad1ae13c729174e72d6b68dcd428ed7a96e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_06276d6db85d9bf15553f1984b9ad1ae13c729174e72d6b68dcd428ed7a96e37->leave($__internal_06276d6db85d9bf15553f1984b9ad1ae13c729174e72d6b68dcd428ed7a96e37_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9397f077d7b91b57286f81d642d050a94b751cb00431eec68840139e03dfe44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9397f077d7b91b57286f81d642d050a94b751cb00431eec68840139e03dfe44e->enter($__internal_9397f077d7b91b57286f81d642d050a94b751cb00431eec68840139e03dfe44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_9397f077d7b91b57286f81d642d050a94b751cb00431eec68840139e03dfe44e->leave($__internal_9397f077d7b91b57286f81d642d050a94b751cb00431eec68840139e03dfe44e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9fc6927d103a3f890e962c451ff29384d7768cda13c27da21b57c3d034e454f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fc6927d103a3f890e962c451ff29384d7768cda13c27da21b57c3d034e454f->enter($__internal_e9fc6927d103a3f890e962c451ff29384d7768cda13c27da21b57c3d034e454f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_e9fc6927d103a3f890e962c451ff29384d7768cda13c27da21b57c3d034e454f->leave($__internal_e9fc6927d103a3f890e962c451ff29384d7768cda13c27da21b57c3d034e454f_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_809be82fa505907dbeb0d5fb2802b5319d2d981cda062057e4bc3f9e8ee1477e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809be82fa505907dbeb0d5fb2802b5319d2d981cda062057e4bc3f9e8ee1477e->enter($__internal_809be82fa505907dbeb0d5fb2802b5319d2d981cda062057e4bc3f9e8ee1477e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_809be82fa505907dbeb0d5fb2802b5319d2d981cda062057e4bc3f9e8ee1477e->leave($__internal_809be82fa505907dbeb0d5fb2802b5319d2d981cda062057e4bc3f9e8ee1477e_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f063b37d7a0453bd2689b9bcc2553ffc27f4189b743ebede8dc1cb0179a36e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f063b37d7a0453bd2689b9bcc2553ffc27f4189b743ebede8dc1cb0179a36e88->enter($__internal_f063b37d7a0453bd2689b9bcc2553ffc27f4189b743ebede8dc1cb0179a36e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_f063b37d7a0453bd2689b9bcc2553ffc27f4189b743ebede8dc1cb0179a36e88->leave($__internal_f063b37d7a0453bd2689b9bcc2553ffc27f4189b743ebede8dc1cb0179a36e88_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_9d0e01e4f5549feb38d8915ac95679647c5a823e6f9d38b3d844bdd5f3b795f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0e01e4f5549feb38d8915ac95679647c5a823e6f9d38b3d844bdd5f3b795f2->enter($__internal_9d0e01e4f5549feb38d8915ac95679647c5a823e6f9d38b3d844bdd5f3b795f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_9d0e01e4f5549feb38d8915ac95679647c5a823e6f9d38b3d844bdd5f3b795f2->leave($__internal_9d0e01e4f5549feb38d8915ac95679647c5a823e6f9d38b3d844bdd5f3b795f2_prof);

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
