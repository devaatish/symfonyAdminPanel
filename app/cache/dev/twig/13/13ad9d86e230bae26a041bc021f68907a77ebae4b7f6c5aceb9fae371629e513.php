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
        $__internal_1ddaea06aae54cdf0b6d8ae8188f79e515a70ca7f866ecdba7ce4ed925d35e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddaea06aae54cdf0b6d8ae8188f79e515a70ca7f866ecdba7ce4ed925d35e43->enter($__internal_1ddaea06aae54cdf0b6d8ae8188f79e515a70ca7f866ecdba7ce4ed925d35e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ddaea06aae54cdf0b6d8ae8188f79e515a70ca7f866ecdba7ce4ed925d35e43->leave($__internal_1ddaea06aae54cdf0b6d8ae8188f79e515a70ca7f866ecdba7ce4ed925d35e43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e5f196371c0f08d3bbc628e06363e28e1184237e9243700a762df44ae27d143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5f196371c0f08d3bbc628e06363e28e1184237e9243700a762df44ae27d143->enter($__internal_6e5f196371c0f08d3bbc628e06363e28e1184237e9243700a762df44ae27d143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e5f196371c0f08d3bbc628e06363e28e1184237e9243700a762df44ae27d143->leave($__internal_6e5f196371c0f08d3bbc628e06363e28e1184237e9243700a762df44ae27d143_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ac70a0d227451402b9393b69518a55259b85cca7ab636b932f34595a649b7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac70a0d227451402b9393b69518a55259b85cca7ab636b932f34595a649b7b8->enter($__internal_2ac70a0d227451402b9393b69518a55259b85cca7ab636b932f34595a649b7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ac70a0d227451402b9393b69518a55259b85cca7ab636b932f34595a649b7b8->leave($__internal_2ac70a0d227451402b9393b69518a55259b85cca7ab636b932f34595a649b7b8_prof);

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
