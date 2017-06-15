<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c6a1c531987a9db16832593ad978b8ecebeb67bba2995220866d6eb9fbb8f9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6623496fc57ad0fa21b8fab70ab4a902b2d20e1f9e1b51012b7377e29f535b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6623496fc57ad0fa21b8fab70ab4a902b2d20e1f9e1b51012b7377e29f535b06->enter($__internal_6623496fc57ad0fa21b8fab70ab4a902b2d20e1f9e1b51012b7377e29f535b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6623496fc57ad0fa21b8fab70ab4a902b2d20e1f9e1b51012b7377e29f535b06->leave($__internal_6623496fc57ad0fa21b8fab70ab4a902b2d20e1f9e1b51012b7377e29f535b06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e0cbef0420180dff3242f1b327a67a6b3bc727168ca2427c3dfc28e17e75016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0cbef0420180dff3242f1b327a67a6b3bc727168ca2427c3dfc28e17e75016->enter($__internal_6e0cbef0420180dff3242f1b327a67a6b3bc727168ca2427c3dfc28e17e75016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e0cbef0420180dff3242f1b327a67a6b3bc727168ca2427c3dfc28e17e75016->leave($__internal_6e0cbef0420180dff3242f1b327a67a6b3bc727168ca2427c3dfc28e17e75016_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_399515d75a7e9db3670136954fd6b8dcb1717ea3617a3d65f964118abd5089a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399515d75a7e9db3670136954fd6b8dcb1717ea3617a3d65f964118abd5089a3->enter($__internal_399515d75a7e9db3670136954fd6b8dcb1717ea3617a3d65f964118abd5089a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_399515d75a7e9db3670136954fd6b8dcb1717ea3617a3d65f964118abd5089a3->leave($__internal_399515d75a7e9db3670136954fd6b8dcb1717ea3617a3d65f964118abd5089a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
