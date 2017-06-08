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
        $__internal_ff72db06ee8aed1d4938e4e9010d7b4e5a75a143608a22629667a348a2ae2a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff72db06ee8aed1d4938e4e9010d7b4e5a75a143608a22629667a348a2ae2a4e->enter($__internal_ff72db06ee8aed1d4938e4e9010d7b4e5a75a143608a22629667a348a2ae2a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff72db06ee8aed1d4938e4e9010d7b4e5a75a143608a22629667a348a2ae2a4e->leave($__internal_ff72db06ee8aed1d4938e4e9010d7b4e5a75a143608a22629667a348a2ae2a4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ca75fa45093297f8f5e22bdebd49f35277fda199ffcc9a0cab58926576b47a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca75fa45093297f8f5e22bdebd49f35277fda199ffcc9a0cab58926576b47a5->enter($__internal_8ca75fa45093297f8f5e22bdebd49f35277fda199ffcc9a0cab58926576b47a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ca75fa45093297f8f5e22bdebd49f35277fda199ffcc9a0cab58926576b47a5->leave($__internal_8ca75fa45093297f8f5e22bdebd49f35277fda199ffcc9a0cab58926576b47a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebb6fc1da596d6198ba381de7c107c616e3aee6f082b6510e695bf4fe27cd2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb6fc1da596d6198ba381de7c107c616e3aee6f082b6510e695bf4fe27cd2a8->enter($__internal_ebb6fc1da596d6198ba381de7c107c616e3aee6f082b6510e695bf4fe27cd2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ebb6fc1da596d6198ba381de7c107c616e3aee6f082b6510e695bf4fe27cd2a8->leave($__internal_ebb6fc1da596d6198ba381de7c107c616e3aee6f082b6510e695bf4fe27cd2a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f207c7407fa245394b7744a7d20bd874a221d7062bf523e2d1406dd22a9ae904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f207c7407fa245394b7744a7d20bd874a221d7062bf523e2d1406dd22a9ae904->enter($__internal_f207c7407fa245394b7744a7d20bd874a221d7062bf523e2d1406dd22a9ae904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f207c7407fa245394b7744a7d20bd874a221d7062bf523e2d1406dd22a9ae904->leave($__internal_f207c7407fa245394b7744a7d20bd874a221d7062bf523e2d1406dd22a9ae904_prof);

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
