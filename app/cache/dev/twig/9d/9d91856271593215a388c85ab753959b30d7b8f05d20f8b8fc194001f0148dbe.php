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
        $__internal_fa1291bd17cd0c29d0bef5b332660fa756a3937d7d84390e529ba8c697505fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1291bd17cd0c29d0bef5b332660fa756a3937d7d84390e529ba8c697505fc3->enter($__internal_fa1291bd17cd0c29d0bef5b332660fa756a3937d7d84390e529ba8c697505fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1291bd17cd0c29d0bef5b332660fa756a3937d7d84390e529ba8c697505fc3->leave($__internal_fa1291bd17cd0c29d0bef5b332660fa756a3937d7d84390e529ba8c697505fc3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42b7152062847dee1ea881faf2f9c9422ec76be65748ed7ddf0192f5e2d928fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b7152062847dee1ea881faf2f9c9422ec76be65748ed7ddf0192f5e2d928fb->enter($__internal_42b7152062847dee1ea881faf2f9c9422ec76be65748ed7ddf0192f5e2d928fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_42b7152062847dee1ea881faf2f9c9422ec76be65748ed7ddf0192f5e2d928fb->leave($__internal_42b7152062847dee1ea881faf2f9c9422ec76be65748ed7ddf0192f5e2d928fb_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_280ee7b8fe267b9112ce22d6ebbd05eb07423b847b8fa2680db548908cbb43ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280ee7b8fe267b9112ce22d6ebbd05eb07423b847b8fa2680db548908cbb43ff->enter($__internal_280ee7b8fe267b9112ce22d6ebbd05eb07423b847b8fa2680db548908cbb43ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_280ee7b8fe267b9112ce22d6ebbd05eb07423b847b8fa2680db548908cbb43ff->leave($__internal_280ee7b8fe267b9112ce22d6ebbd05eb07423b847b8fa2680db548908cbb43ff_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_50067f04b85e30b81227042aede5005655e5ccdcc36bc3e4a0a82b169659f38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50067f04b85e30b81227042aede5005655e5ccdcc36bc3e4a0a82b169659f38e->enter($__internal_50067f04b85e30b81227042aede5005655e5ccdcc36bc3e4a0a82b169659f38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_50067f04b85e30b81227042aede5005655e5ccdcc36bc3e4a0a82b169659f38e->leave($__internal_50067f04b85e30b81227042aede5005655e5ccdcc36bc3e4a0a82b169659f38e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_c23d707d4bbfc1c277f390c3d4ef478bd9bb09633730c80223eb354c2abb087c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23d707d4bbfc1c277f390c3d4ef478bd9bb09633730c80223eb354c2abb087c->enter($__internal_c23d707d4bbfc1c277f390c3d4ef478bd9bb09633730c80223eb354c2abb087c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_c23d707d4bbfc1c277f390c3d4ef478bd9bb09633730c80223eb354c2abb087c->leave($__internal_c23d707d4bbfc1c277f390c3d4ef478bd9bb09633730c80223eb354c2abb087c_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_c671cdb7cce31d015cf638f5641d393ac69225bd2b275a13a14273c4dc801af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c671cdb7cce31d015cf638f5641d393ac69225bd2b275a13a14273c4dc801af6->enter($__internal_c671cdb7cce31d015cf638f5641d393ac69225bd2b275a13a14273c4dc801af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_c671cdb7cce31d015cf638f5641d393ac69225bd2b275a13a14273c4dc801af6->leave($__internal_c671cdb7cce31d015cf638f5641d393ac69225bd2b275a13a14273c4dc801af6_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4c43d28aa10ed010e58190dd9c2a68cfff4b229e5e4c2048d52b892cf5bde062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c43d28aa10ed010e58190dd9c2a68cfff4b229e5e4c2048d52b892cf5bde062->enter($__internal_4c43d28aa10ed010e58190dd9c2a68cfff4b229e5e4c2048d52b892cf5bde062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_4c43d28aa10ed010e58190dd9c2a68cfff4b229e5e4c2048d52b892cf5bde062->leave($__internal_4c43d28aa10ed010e58190dd9c2a68cfff4b229e5e4c2048d52b892cf5bde062_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_d15889409594f1934b84d994b8d92457759aee5a3278ac4c11d7ae2ec01b2a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15889409594f1934b84d994b8d92457759aee5a3278ac4c11d7ae2ec01b2a46->enter($__internal_d15889409594f1934b84d994b8d92457759aee5a3278ac4c11d7ae2ec01b2a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_d15889409594f1934b84d994b8d92457759aee5a3278ac4c11d7ae2ec01b2a46->leave($__internal_d15889409594f1934b84d994b8d92457759aee5a3278ac4c11d7ae2ec01b2a46_prof);

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
