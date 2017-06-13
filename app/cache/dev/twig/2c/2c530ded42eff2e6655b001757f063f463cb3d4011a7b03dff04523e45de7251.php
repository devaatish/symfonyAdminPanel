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
        $__internal_13e5a909d326b2a04ddc72b8755a014d95279be138e28d6a46993817e9ec97d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e5a909d326b2a04ddc72b8755a014d95279be138e28d6a46993817e9ec97d4->enter($__internal_13e5a909d326b2a04ddc72b8755a014d95279be138e28d6a46993817e9ec97d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_13e5a909d326b2a04ddc72b8755a014d95279be138e28d6a46993817e9ec97d4->leave($__internal_13e5a909d326b2a04ddc72b8755a014d95279be138e28d6a46993817e9ec97d4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_65ed6f6ae591f66f93f5ec9932f6967a9c7eb19e2e03dab49d0516946e57bcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ed6f6ae591f66f93f5ec9932f6967a9c7eb19e2e03dab49d0516946e57bcb2->enter($__internal_65ed6f6ae591f66f93f5ec9932f6967a9c7eb19e2e03dab49d0516946e57bcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_65ed6f6ae591f66f93f5ec9932f6967a9c7eb19e2e03dab49d0516946e57bcb2->leave($__internal_65ed6f6ae591f66f93f5ec9932f6967a9c7eb19e2e03dab49d0516946e57bcb2_prof);

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
