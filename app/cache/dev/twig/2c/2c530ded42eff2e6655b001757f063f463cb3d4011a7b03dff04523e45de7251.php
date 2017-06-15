<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_397b3195b46650cd118aab39f05345709e696f6c56550009c7e0e6bf443d444e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75f0f0936669cb79f7573f1f495c819c27ce8d30bddfbb320d9e85b9dd063c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f0f0936669cb79f7573f1f495c819c27ce8d30bddfbb320d9e85b9dd063c3a->enter($__internal_75f0f0936669cb79f7573f1f495c819c27ce8d30bddfbb320d9e85b9dd063c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_75f0f0936669cb79f7573f1f495c819c27ce8d30bddfbb320d9e85b9dd063c3a->leave($__internal_75f0f0936669cb79f7573f1f495c819c27ce8d30bddfbb320d9e85b9dd063c3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_027539d944e17d3bd0a438ec257f2f0d13ef604431d56896f4e27fee1f2e00cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027539d944e17d3bd0a438ec257f2f0d13ef604431d56896f4e27fee1f2e00cf->enter($__internal_027539d944e17d3bd0a438ec257f2f0d13ef604431d56896f4e27fee1f2e00cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_027539d944e17d3bd0a438ec257f2f0d13ef604431d56896f4e27fee1f2e00cf->leave($__internal_027539d944e17d3bd0a438ec257f2f0d13ef604431d56896f4e27fee1f2e00cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
