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
        $__internal_fa3505a28c1e8a8a393575e79aa615c8d786f4376474805780fa91fae43631d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3505a28c1e8a8a393575e79aa615c8d786f4376474805780fa91fae43631d9->enter($__internal_fa3505a28c1e8a8a393575e79aa615c8d786f4376474805780fa91fae43631d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3505a28c1e8a8a393575e79aa615c8d786f4376474805780fa91fae43631d9->leave($__internal_fa3505a28c1e8a8a393575e79aa615c8d786f4376474805780fa91fae43631d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28c13101bef6c8f376a4697669d15309f9447b9e87b21faaca5c2abe5c2ae3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c13101bef6c8f376a4697669d15309f9447b9e87b21faaca5c2abe5c2ae3e4->enter($__internal_28c13101bef6c8f376a4697669d15309f9447b9e87b21faaca5c2abe5c2ae3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28c13101bef6c8f376a4697669d15309f9447b9e87b21faaca5c2abe5c2ae3e4->leave($__internal_28c13101bef6c8f376a4697669d15309f9447b9e87b21faaca5c2abe5c2ae3e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_184b9cb5bbeac48632d019e0660555923065aa407a15c930ee13e8e22d5b0d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184b9cb5bbeac48632d019e0660555923065aa407a15c930ee13e8e22d5b0d38->enter($__internal_184b9cb5bbeac48632d019e0660555923065aa407a15c930ee13e8e22d5b0d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_184b9cb5bbeac48632d019e0660555923065aa407a15c930ee13e8e22d5b0d38->leave($__internal_184b9cb5bbeac48632d019e0660555923065aa407a15c930ee13e8e22d5b0d38_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a5c0e47e35e9cc979c22871c150519eb535be984672336f4a8f1974c0cc5f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5c0e47e35e9cc979c22871c150519eb535be984672336f4a8f1974c0cc5f58->enter($__internal_9a5c0e47e35e9cc979c22871c150519eb535be984672336f4a8f1974c0cc5f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a5c0e47e35e9cc979c22871c150519eb535be984672336f4a8f1974c0cc5f58->leave($__internal_9a5c0e47e35e9cc979c22871c150519eb535be984672336f4a8f1974c0cc5f58_prof);

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
