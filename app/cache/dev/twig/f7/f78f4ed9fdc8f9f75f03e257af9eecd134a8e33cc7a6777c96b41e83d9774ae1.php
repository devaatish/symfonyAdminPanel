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
        $__internal_c9d90140bde7a44b719a228cc862284d988f18c4447aac5188cf37cbd96e5bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d90140bde7a44b719a228cc862284d988f18c4447aac5188cf37cbd96e5bc4->enter($__internal_c9d90140bde7a44b719a228cc862284d988f18c4447aac5188cf37cbd96e5bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d90140bde7a44b719a228cc862284d988f18c4447aac5188cf37cbd96e5bc4->leave($__internal_c9d90140bde7a44b719a228cc862284d988f18c4447aac5188cf37cbd96e5bc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0eb1ba9b519db7dfebd9db71df10cf85a1ba85c2688daa44bcca070c547b1a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb1ba9b519db7dfebd9db71df10cf85a1ba85c2688daa44bcca070c547b1a2d->enter($__internal_0eb1ba9b519db7dfebd9db71df10cf85a1ba85c2688daa44bcca070c547b1a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0eb1ba9b519db7dfebd9db71df10cf85a1ba85c2688daa44bcca070c547b1a2d->leave($__internal_0eb1ba9b519db7dfebd9db71df10cf85a1ba85c2688daa44bcca070c547b1a2d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4451695c6fd9e1878bd0ed955c792235d39adbe2f007a17d30a6539544acb341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4451695c6fd9e1878bd0ed955c792235d39adbe2f007a17d30a6539544acb341->enter($__internal_4451695c6fd9e1878bd0ed955c792235d39adbe2f007a17d30a6539544acb341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4451695c6fd9e1878bd0ed955c792235d39adbe2f007a17d30a6539544acb341->leave($__internal_4451695c6fd9e1878bd0ed955c792235d39adbe2f007a17d30a6539544acb341_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f32a5b4f4bd225172d189df56648da9ac941c581fcdc4f32d0897849dc3ea1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f32a5b4f4bd225172d189df56648da9ac941c581fcdc4f32d0897849dc3ea1a->enter($__internal_3f32a5b4f4bd225172d189df56648da9ac941c581fcdc4f32d0897849dc3ea1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3f32a5b4f4bd225172d189df56648da9ac941c581fcdc4f32d0897849dc3ea1a->leave($__internal_3f32a5b4f4bd225172d189df56648da9ac941c581fcdc4f32d0897849dc3ea1a_prof);

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
