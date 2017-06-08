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
        $__internal_d481e5a98e002db3a3a74052af1bc57453ca0f16dbecd8c8f3d72e4905aa1f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d481e5a98e002db3a3a74052af1bc57453ca0f16dbecd8c8f3d72e4905aa1f4d->enter($__internal_d481e5a98e002db3a3a74052af1bc57453ca0f16dbecd8c8f3d72e4905aa1f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d481e5a98e002db3a3a74052af1bc57453ca0f16dbecd8c8f3d72e4905aa1f4d->leave($__internal_d481e5a98e002db3a3a74052af1bc57453ca0f16dbecd8c8f3d72e4905aa1f4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11bac9463b9573327035a8674475bd624adc70d2d3af0a95a88fbcc81f6f7d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bac9463b9573327035a8674475bd624adc70d2d3af0a95a88fbcc81f6f7d74->enter($__internal_11bac9463b9573327035a8674475bd624adc70d2d3af0a95a88fbcc81f6f7d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11bac9463b9573327035a8674475bd624adc70d2d3af0a95a88fbcc81f6f7d74->leave($__internal_11bac9463b9573327035a8674475bd624adc70d2d3af0a95a88fbcc81f6f7d74_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecca23a2df39d9e81e775fdc39df4882e349b6d4597e0fa4d6e7dceb878a95be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecca23a2df39d9e81e775fdc39df4882e349b6d4597e0fa4d6e7dceb878a95be->enter($__internal_ecca23a2df39d9e81e775fdc39df4882e349b6d4597e0fa4d6e7dceb878a95be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ecca23a2df39d9e81e775fdc39df4882e349b6d4597e0fa4d6e7dceb878a95be->leave($__internal_ecca23a2df39d9e81e775fdc39df4882e349b6d4597e0fa4d6e7dceb878a95be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aafd784c5989d78478eec518902b97529f4f6ab4a87a4b2e210405ba38f93f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aafd784c5989d78478eec518902b97529f4f6ab4a87a4b2e210405ba38f93f8->enter($__internal_1aafd784c5989d78478eec518902b97529f4f6ab4a87a4b2e210405ba38f93f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1aafd784c5989d78478eec518902b97529f4f6ab4a87a4b2e210405ba38f93f8->leave($__internal_1aafd784c5989d78478eec518902b97529f4f6ab4a87a4b2e210405ba38f93f8_prof);

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
