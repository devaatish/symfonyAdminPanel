<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ed3e4d65d0bdf70fdc266c9eaeb04bb9a45644a0fdf6ad9ff063d3ab5d21acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_62d81ce9333f28f5507b7197f8d994d7b6e272995edfce5345fc7dadc411ca64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d81ce9333f28f5507b7197f8d994d7b6e272995edfce5345fc7dadc411ca64->enter($__internal_62d81ce9333f28f5507b7197f8d994d7b6e272995edfce5345fc7dadc411ca64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d81ce9333f28f5507b7197f8d994d7b6e272995edfce5345fc7dadc411ca64->leave($__internal_62d81ce9333f28f5507b7197f8d994d7b6e272995edfce5345fc7dadc411ca64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f1f7017cb5017957a63429dab74852cc3005f8a584aeb77e2835cbca9836acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1f7017cb5017957a63429dab74852cc3005f8a584aeb77e2835cbca9836acb->enter($__internal_5f1f7017cb5017957a63429dab74852cc3005f8a584aeb77e2835cbca9836acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f1f7017cb5017957a63429dab74852cc3005f8a584aeb77e2835cbca9836acb->leave($__internal_5f1f7017cb5017957a63429dab74852cc3005f8a584aeb77e2835cbca9836acb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea3f5c21a767f94aafea1abd088201f1bc83ab1ac060b6c45379bc5926ba6b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3f5c21a767f94aafea1abd088201f1bc83ab1ac060b6c45379bc5926ba6b17->enter($__internal_ea3f5c21a767f94aafea1abd088201f1bc83ab1ac060b6c45379bc5926ba6b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea3f5c21a767f94aafea1abd088201f1bc83ab1ac060b6c45379bc5926ba6b17->leave($__internal_ea3f5c21a767f94aafea1abd088201f1bc83ab1ac060b6c45379bc5926ba6b17_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ba5a45793d65ea32cbf843563cd4e91068cfee6bc1667c06d1d4cefb093637c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba5a45793d65ea32cbf843563cd4e91068cfee6bc1667c06d1d4cefb093637c->enter($__internal_1ba5a45793d65ea32cbf843563cd4e91068cfee6bc1667c06d1d4cefb093637c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1ba5a45793d65ea32cbf843563cd4e91068cfee6bc1667c06d1d4cefb093637c->leave($__internal_1ba5a45793d65ea32cbf843563cd4e91068cfee6bc1667c06d1d4cefb093637c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
