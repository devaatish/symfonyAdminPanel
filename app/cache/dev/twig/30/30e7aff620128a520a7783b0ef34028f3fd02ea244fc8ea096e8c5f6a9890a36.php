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
        $__internal_ceeec976c969c8d7cbfec2c0d2f3c8e5214a5069ecf497db7794f2f48c101ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceeec976c969c8d7cbfec2c0d2f3c8e5214a5069ecf497db7794f2f48c101ca3->enter($__internal_ceeec976c969c8d7cbfec2c0d2f3c8e5214a5069ecf497db7794f2f48c101ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceeec976c969c8d7cbfec2c0d2f3c8e5214a5069ecf497db7794f2f48c101ca3->leave($__internal_ceeec976c969c8d7cbfec2c0d2f3c8e5214a5069ecf497db7794f2f48c101ca3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e2c379cb6f5d7c6a950af9045ba598c4dbe6849958dfb706b590368ad9482b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2c379cb6f5d7c6a950af9045ba598c4dbe6849958dfb706b590368ad9482b8->enter($__internal_6e2c379cb6f5d7c6a950af9045ba598c4dbe6849958dfb706b590368ad9482b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_6e2c379cb6f5d7c6a950af9045ba598c4dbe6849958dfb706b590368ad9482b8->leave($__internal_6e2c379cb6f5d7c6a950af9045ba598c4dbe6849958dfb706b590368ad9482b8_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_e7ede1400948574516ac9b1d6ac735822b08d5e78dc370e9be0a0cee08097433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ede1400948574516ac9b1d6ac735822b08d5e78dc370e9be0a0cee08097433->enter($__internal_e7ede1400948574516ac9b1d6ac735822b08d5e78dc370e9be0a0cee08097433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_e7ede1400948574516ac9b1d6ac735822b08d5e78dc370e9be0a0cee08097433->leave($__internal_e7ede1400948574516ac9b1d6ac735822b08d5e78dc370e9be0a0cee08097433_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_89a75ebd3aeffc6ac567551929b41cedadc3a53e2d1908a91c83cc2649c6a690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a75ebd3aeffc6ac567551929b41cedadc3a53e2d1908a91c83cc2649c6a690->enter($__internal_89a75ebd3aeffc6ac567551929b41cedadc3a53e2d1908a91c83cc2649c6a690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_89a75ebd3aeffc6ac567551929b41cedadc3a53e2d1908a91c83cc2649c6a690->leave($__internal_89a75ebd3aeffc6ac567551929b41cedadc3a53e2d1908a91c83cc2649c6a690_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_9ac4ae827a880e3f9c4316b2f41dccbb699a585fbb6dd438694e4e50d8eb14c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac4ae827a880e3f9c4316b2f41dccbb699a585fbb6dd438694e4e50d8eb14c5->enter($__internal_9ac4ae827a880e3f9c4316b2f41dccbb699a585fbb6dd438694e4e50d8eb14c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_9ac4ae827a880e3f9c4316b2f41dccbb699a585fbb6dd438694e4e50d8eb14c5->leave($__internal_9ac4ae827a880e3f9c4316b2f41dccbb699a585fbb6dd438694e4e50d8eb14c5_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_59899a958ad22be025e02b85ed1d33bed81d9f6bd3571c08972418e0580cab78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59899a958ad22be025e02b85ed1d33bed81d9f6bd3571c08972418e0580cab78->enter($__internal_59899a958ad22be025e02b85ed1d33bed81d9f6bd3571c08972418e0580cab78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_59899a958ad22be025e02b85ed1d33bed81d9f6bd3571c08972418e0580cab78->leave($__internal_59899a958ad22be025e02b85ed1d33bed81d9f6bd3571c08972418e0580cab78_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1d4b6b2fb42cdce509614582642c93fdd114d995c3c71adffaefc73e07f240ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4b6b2fb42cdce509614582642c93fdd114d995c3c71adffaefc73e07f240ea->enter($__internal_1d4b6b2fb42cdce509614582642c93fdd114d995c3c71adffaefc73e07f240ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_1d4b6b2fb42cdce509614582642c93fdd114d995c3c71adffaefc73e07f240ea->leave($__internal_1d4b6b2fb42cdce509614582642c93fdd114d995c3c71adffaefc73e07f240ea_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_f37ec71d7d330ecd2408226f60b6e63eae1a8989504b92a9c85d18ade73b7dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37ec71d7d330ecd2408226f60b6e63eae1a8989504b92a9c85d18ade73b7dcc->enter($__internal_f37ec71d7d330ecd2408226f60b6e63eae1a8989504b92a9c85d18ade73b7dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_f37ec71d7d330ecd2408226f60b6e63eae1a8989504b92a9c85d18ade73b7dcc->leave($__internal_f37ec71d7d330ecd2408226f60b6e63eae1a8989504b92a9c85d18ade73b7dcc_prof);

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
