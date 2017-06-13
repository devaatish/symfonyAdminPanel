<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_974474a22096bdba6cd9d66ba1c2f8be62ad1e8f8815d4845a3668606c0818ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_af6e97c4756611c83c0b04e3a7fd45d76152398fb64b83357ad7084a3ca31ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6e97c4756611c83c0b04e3a7fd45d76152398fb64b83357ad7084a3ca31ecf->enter($__internal_af6e97c4756611c83c0b04e3a7fd45d76152398fb64b83357ad7084a3ca31ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af6e97c4756611c83c0b04e3a7fd45d76152398fb64b83357ad7084a3ca31ecf->leave($__internal_af6e97c4756611c83c0b04e3a7fd45d76152398fb64b83357ad7084a3ca31ecf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d9ce035f4d7a0c8112a3309ca4425e927e578617d01e8895a0fa2ac6ca100df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9ce035f4d7a0c8112a3309ca4425e927e578617d01e8895a0fa2ac6ca100df->enter($__internal_5d9ce035f4d7a0c8112a3309ca4425e927e578617d01e8895a0fa2ac6ca100df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d9ce035f4d7a0c8112a3309ca4425e927e578617d01e8895a0fa2ac6ca100df->leave($__internal_5d9ce035f4d7a0c8112a3309ca4425e927e578617d01e8895a0fa2ac6ca100df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b0c547b62852e9546423d382c8716220eba5e97974b4f345232d80c7ea59947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0c547b62852e9546423d382c8716220eba5e97974b4f345232d80c7ea59947->enter($__internal_1b0c547b62852e9546423d382c8716220eba5e97974b4f345232d80c7ea59947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1b0c547b62852e9546423d382c8716220eba5e97974b4f345232d80c7ea59947->leave($__internal_1b0c547b62852e9546423d382c8716220eba5e97974b4f345232d80c7ea59947_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c313c7b76bd1d0a5af36bade4cab8e7d33b63e30c57f0e206442cfd01dc3659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c313c7b76bd1d0a5af36bade4cab8e7d33b63e30c57f0e206442cfd01dc3659->enter($__internal_6c313c7b76bd1d0a5af36bade4cab8e7d33b63e30c57f0e206442cfd01dc3659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6c313c7b76bd1d0a5af36bade4cab8e7d33b63e30c57f0e206442cfd01dc3659->leave($__internal_6c313c7b76bd1d0a5af36bade4cab8e7d33b63e30c57f0e206442cfd01dc3659_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
