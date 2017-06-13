<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_9d830e55c5187289f0299766fad3b0d089f1cbf60e78f0d709cf359f82452a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21797a703a62aee80896e2db1e045012dde2de480b69501e90862a1d4f3b2a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21797a703a62aee80896e2db1e045012dde2de480b69501e90862a1d4f3b2a09->enter($__internal_21797a703a62aee80896e2db1e045012dde2de480b69501e90862a1d4f3b2a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21797a703a62aee80896e2db1e045012dde2de480b69501e90862a1d4f3b2a09->leave($__internal_21797a703a62aee80896e2db1e045012dde2de480b69501e90862a1d4f3b2a09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb62600cc88d72ac44e99a09c8c1e56b50e01059d466d25ab5bbafd7ae51d2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb62600cc88d72ac44e99a09c8c1e56b50e01059d466d25ab5bbafd7ae51d2f7->enter($__internal_eb62600cc88d72ac44e99a09c8c1e56b50e01059d466d25ab5bbafd7ae51d2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_eb62600cc88d72ac44e99a09c8c1e56b50e01059d466d25ab5bbafd7ae51d2f7->leave($__internal_eb62600cc88d72ac44e99a09c8c1e56b50e01059d466d25ab5bbafd7ae51d2f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a8d38d77dfb19b58e6c66105d96b9ba6a0c934e6309a6a4b335ddff3bca9cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8d38d77dfb19b58e6c66105d96b9ba6a0c934e6309a6a4b335ddff3bca9cd0->enter($__internal_8a8d38d77dfb19b58e6c66105d96b9ba6a0c934e6309a6a4b335ddff3bca9cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8a8d38d77dfb19b58e6c66105d96b9ba6a0c934e6309a6a4b335ddff3bca9cd0->leave($__internal_8a8d38d77dfb19b58e6c66105d96b9ba6a0c934e6309a6a4b335ddff3bca9cd0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f47a6c20b5ea0da31f3d93433b4d876c7958896f109a072fb1ff7c57c3b0c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f47a6c20b5ea0da31f3d93433b4d876c7958896f109a072fb1ff7c57c3b0c43->enter($__internal_7f47a6c20b5ea0da31f3d93433b4d876c7958896f109a072fb1ff7c57c3b0c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_7f47a6c20b5ea0da31f3d93433b4d876c7958896f109a072fb1ff7c57c3b0c43->leave($__internal_7f47a6c20b5ea0da31f3d93433b4d876c7958896f109a072fb1ff7c57c3b0c43_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e8daf9a0aafaff5c5c5fbce0924d3bde9adc9df5fdb9079b215124c9156603ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8daf9a0aafaff5c5c5fbce0924d3bde9adc9df5fdb9079b215124c9156603ef->enter($__internal_e8daf9a0aafaff5c5c5fbce0924d3bde9adc9df5fdb9079b215124c9156603ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e8daf9a0aafaff5c5c5fbce0924d3bde9adc9df5fdb9079b215124c9156603ef->leave($__internal_e8daf9a0aafaff5c5c5fbce0924d3bde9adc9df5fdb9079b215124c9156603ef_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle:Configurator:layout.html.twig", "/var/www/html/symfonyAdminPanel/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
