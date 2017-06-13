<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dca0a1a7724a2dc675b1c05dce03ebf01a8a0486f11ac4cfaff54e48bda9314f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87e0581887f28d9b0dbbdbddf41fb18d23fe3deaa090546eb3edd018ab6f68b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e0581887f28d9b0dbbdbddf41fb18d23fe3deaa090546eb3edd018ab6f68b7->enter($__internal_87e0581887f28d9b0dbbdbddf41fb18d23fe3deaa090546eb3edd018ab6f68b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e0581887f28d9b0dbbdbddf41fb18d23fe3deaa090546eb3edd018ab6f68b7->leave($__internal_87e0581887f28d9b0dbbdbddf41fb18d23fe3deaa090546eb3edd018ab6f68b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_471d2c533181c5b4a0001bd03acf0e20c63bca0af1583177cb7f2eb81b257bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471d2c533181c5b4a0001bd03acf0e20c63bca0af1583177cb7f2eb81b257bcf->enter($__internal_471d2c533181c5b4a0001bd03acf0e20c63bca0af1583177cb7f2eb81b257bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_471d2c533181c5b4a0001bd03acf0e20c63bca0af1583177cb7f2eb81b257bcf->leave($__internal_471d2c533181c5b4a0001bd03acf0e20c63bca0af1583177cb7f2eb81b257bcf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_222e7271c1f17aaaaccb8af2ad70199ad80b235b7f1a6416c46d578a0f287d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222e7271c1f17aaaaccb8af2ad70199ad80b235b7f1a6416c46d578a0f287d49->enter($__internal_222e7271c1f17aaaaccb8af2ad70199ad80b235b7f1a6416c46d578a0f287d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_222e7271c1f17aaaaccb8af2ad70199ad80b235b7f1a6416c46d578a0f287d49->leave($__internal_222e7271c1f17aaaaccb8af2ad70199ad80b235b7f1a6416c46d578a0f287d49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c6e3b2c679aac51ae8f595f6b4d4cb680a1ca37a1623cfe69700860e5babc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6e3b2c679aac51ae8f595f6b4d4cb680a1ca37a1623cfe69700860e5babc14->enter($__internal_8c6e3b2c679aac51ae8f595f6b4d4cb680a1ca37a1623cfe69700860e5babc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c6e3b2c679aac51ae8f595f6b4d4cb680a1ca37a1623cfe69700860e5babc14->leave($__internal_8c6e3b2c679aac51ae8f595f6b4d4cb680a1ca37a1623cfe69700860e5babc14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
