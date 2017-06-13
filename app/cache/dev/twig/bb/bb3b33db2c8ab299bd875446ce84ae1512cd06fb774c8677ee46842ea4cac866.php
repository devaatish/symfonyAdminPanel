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
        $__internal_9b6b734910c5354aaad22b805b9a98d6e3ce650293040cf2c02ec3fdea19c2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6b734910c5354aaad22b805b9a98d6e3ce650293040cf2c02ec3fdea19c2d0->enter($__internal_9b6b734910c5354aaad22b805b9a98d6e3ce650293040cf2c02ec3fdea19c2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6b734910c5354aaad22b805b9a98d6e3ce650293040cf2c02ec3fdea19c2d0->leave($__internal_9b6b734910c5354aaad22b805b9a98d6e3ce650293040cf2c02ec3fdea19c2d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b713419acf13dd4d6a8664358d5d416365a18b213e52676485c36e7889d7ee0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b713419acf13dd4d6a8664358d5d416365a18b213e52676485c36e7889d7ee0b->enter($__internal_b713419acf13dd4d6a8664358d5d416365a18b213e52676485c36e7889d7ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Security:login_check";
        
        $__internal_b713419acf13dd4d6a8664358d5d416365a18b213e52676485c36e7889d7ee0b->leave($__internal_b713419acf13dd4d6a8664358d5d416365a18b213e52676485c36e7889d7ee0b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8756f6da652f3c581eae36a23beecf990eafc6b34d624f03a6049a2f622b07f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8756f6da652f3c581eae36a23beecf990eafc6b34d624f03a6049a2f622b07f0->enter($__internal_8756f6da652f3c581eae36a23beecf990eafc6b34d624f03a6049a2f622b07f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Security:login_check page</h1>
";
        
        $__internal_8756f6da652f3c581eae36a23beecf990eafc6b34d624f03a6049a2f622b07f0->leave($__internal_8756f6da652f3c581eae36a23beecf990eafc6b34d624f03a6049a2f622b07f0_prof);

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
