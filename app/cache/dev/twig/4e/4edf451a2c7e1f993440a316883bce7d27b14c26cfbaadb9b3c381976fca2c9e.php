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
        $__internal_ed75fc1d9432c0a91656404969dc80d045814db6e1b9b56253c9efe6bb2a0d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed75fc1d9432c0a91656404969dc80d045814db6e1b9b56253c9efe6bb2a0d87->enter($__internal_ed75fc1d9432c0a91656404969dc80d045814db6e1b9b56253c9efe6bb2a0d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed75fc1d9432c0a91656404969dc80d045814db6e1b9b56253c9efe6bb2a0d87->leave($__internal_ed75fc1d9432c0a91656404969dc80d045814db6e1b9b56253c9efe6bb2a0d87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e508e65e0f81c63311b6fab0f4cbb6a51b3fcfcd4edac43cd9ede28bb7fbe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e508e65e0f81c63311b6fab0f4cbb6a51b3fcfcd4edac43cd9ede28bb7fbe9a->enter($__internal_3e508e65e0f81c63311b6fab0f4cbb6a51b3fcfcd4edac43cd9ede28bb7fbe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3e508e65e0f81c63311b6fab0f4cbb6a51b3fcfcd4edac43cd9ede28bb7fbe9a->leave($__internal_3e508e65e0f81c63311b6fab0f4cbb6a51b3fcfcd4edac43cd9ede28bb7fbe9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59cbeb29e2c106f13e4cc53795ba45458d5f6b573a9cb1a2e83afd5cbaa9d9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cbeb29e2c106f13e4cc53795ba45458d5f6b573a9cb1a2e83afd5cbaa9d9f1->enter($__internal_59cbeb29e2c106f13e4cc53795ba45458d5f6b573a9cb1a2e83afd5cbaa9d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_59cbeb29e2c106f13e4cc53795ba45458d5f6b573a9cb1a2e83afd5cbaa9d9f1->leave($__internal_59cbeb29e2c106f13e4cc53795ba45458d5f6b573a9cb1a2e83afd5cbaa9d9f1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_57d707ef3b3432e99efb4cf5c7ef2dbd7529661a68f017820a836d609bcba261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d707ef3b3432e99efb4cf5c7ef2dbd7529661a68f017820a836d609bcba261->enter($__internal_57d707ef3b3432e99efb4cf5c7ef2dbd7529661a68f017820a836d609bcba261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57d707ef3b3432e99efb4cf5c7ef2dbd7529661a68f017820a836d609bcba261->leave($__internal_57d707ef3b3432e99efb4cf5c7ef2dbd7529661a68f017820a836d609bcba261_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9823ee6577c65e1dd3faeb1d1a3869bbf53d0f6536c653de4ea3ebcfe63b84d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9823ee6577c65e1dd3faeb1d1a3869bbf53d0f6536c653de4ea3ebcfe63b84d2->enter($__internal_9823ee6577c65e1dd3faeb1d1a3869bbf53d0f6536c653de4ea3ebcfe63b84d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9823ee6577c65e1dd3faeb1d1a3869bbf53d0f6536c653de4ea3ebcfe63b84d2->leave($__internal_9823ee6577c65e1dd3faeb1d1a3869bbf53d0f6536c653de4ea3ebcfe63b84d2_prof);

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
