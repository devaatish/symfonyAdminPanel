<?php

/* AdminBundle:Security:login.check.html.twig */
class __TwigTemplate_6e7c89810f2907ecc23da2d8a08e80e092aa6ef8cfe3633d7fe62a4749611d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Security:login.check.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b8892e2092ff2c3bb1cd28722b13de1e64601ed275e89bfdbe1e0d027f2c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b8892e2092ff2c3bb1cd28722b13de1e64601ed275e89bfdbe1e0d027f2c4e->enter($__internal_70b8892e2092ff2c3bb1cd28722b13de1e64601ed275e89bfdbe1e0d027f2c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b8892e2092ff2c3bb1cd28722b13de1e64601ed275e89bfdbe1e0d027f2c4e->leave($__internal_70b8892e2092ff2c3bb1cd28722b13de1e64601ed275e89bfdbe1e0d027f2c4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cfac5450bbfbde9a4791ec931fd1ce33f84a21b4f5eb574fb41d66fbae2052c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfac5450bbfbde9a4791ec931fd1ce33f84a21b4f5eb574fb41d66fbae2052c->enter($__internal_7cfac5450bbfbde9a4791ec931fd1ce33f84a21b4f5eb574fb41d66fbae2052c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Security:login_check";
        
        $__internal_7cfac5450bbfbde9a4791ec931fd1ce33f84a21b4f5eb574fb41d66fbae2052c->leave($__internal_7cfac5450bbfbde9a4791ec931fd1ce33f84a21b4f5eb574fb41d66fbae2052c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bcf25fbbfa04249ae1b8a969f0ba183475bd2cacbab28e39786d33a6dab38d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcf25fbbfa04249ae1b8a969f0ba183475bd2cacbab28e39786d33a6dab38d9->enter($__internal_3bcf25fbbfa04249ae1b8a969f0ba183475bd2cacbab28e39786d33a6dab38d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Security:login_check page</h1>
";
        
        $__internal_3bcf25fbbfa04249ae1b8a969f0ba183475bd2cacbab28e39786d33a6dab38d9->leave($__internal_3bcf25fbbfa04249ae1b8a969f0ba183475bd2cacbab28e39786d33a6dab38d9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Security:login.check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AdminBundle:Security:login_check{% endblock %}

{% block body %}
<h1>Welcome to the Security:login_check page</h1>
{% endblock %}
", "AdminBundle:Security:login.check.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Security/login.check.html.twig");
    }
}
