<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_96d9bc810bd6a9058e47ca6386507cc68bc6cd6c6d6084ae108fb4cc8860549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_bfa24d14381075f8d6bc19da3b586ac7ca26d33a0b34e384e33c763c173ed6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa24d14381075f8d6bc19da3b586ac7ca26d33a0b34e384e33c763c173ed6ec->enter($__internal_bfa24d14381075f8d6bc19da3b586ac7ca26d33a0b34e384e33c763c173ed6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa24d14381075f8d6bc19da3b586ac7ca26d33a0b34e384e33c763c173ed6ec->leave($__internal_bfa24d14381075f8d6bc19da3b586ac7ca26d33a0b34e384e33c763c173ed6ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53de458c6db3307b9b1398f72768cc4540655d79e411e22d162746f673617fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53de458c6db3307b9b1398f72768cc4540655d79e411e22d162746f673617fb5->enter($__internal_53de458c6db3307b9b1398f72768cc4540655d79e411e22d162746f673617fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53de458c6db3307b9b1398f72768cc4540655d79e411e22d162746f673617fb5->leave($__internal_53de458c6db3307b9b1398f72768cc4540655d79e411e22d162746f673617fb5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_474c8a4b7b9fc7c516afd9b51b4b05b2023f60c7b54255fb716ce2692285f702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474c8a4b7b9fc7c516afd9b51b4b05b2023f60c7b54255fb716ce2692285f702->enter($__internal_474c8a4b7b9fc7c516afd9b51b4b05b2023f60c7b54255fb716ce2692285f702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_474c8a4b7b9fc7c516afd9b51b4b05b2023f60c7b54255fb716ce2692285f702->leave($__internal_474c8a4b7b9fc7c516afd9b51b4b05b2023f60c7b54255fb716ce2692285f702_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d6b3d09a294ae3fa111eec2d13af06c4af6bbc20e9904c73081fc317d37c11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6b3d09a294ae3fa111eec2d13af06c4af6bbc20e9904c73081fc317d37c11f->enter($__internal_0d6b3d09a294ae3fa111eec2d13af06c4af6bbc20e9904c73081fc317d37c11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0d6b3d09a294ae3fa111eec2d13af06c4af6bbc20e9904c73081fc317d37c11f->leave($__internal_0d6b3d09a294ae3fa111eec2d13af06c4af6bbc20e9904c73081fc317d37c11f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
