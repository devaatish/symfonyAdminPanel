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
        $__internal_0b52e60738d73f3932efd162de3b50afc6e3d55ede8af3dbe0446ac987984789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b52e60738d73f3932efd162de3b50afc6e3d55ede8af3dbe0446ac987984789->enter($__internal_0b52e60738d73f3932efd162de3b50afc6e3d55ede8af3dbe0446ac987984789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b52e60738d73f3932efd162de3b50afc6e3d55ede8af3dbe0446ac987984789->leave($__internal_0b52e60738d73f3932efd162de3b50afc6e3d55ede8af3dbe0446ac987984789_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26db40f12482635a5fd9fefa588310db4b49c81b8ae88afb360dce0fca32fded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26db40f12482635a5fd9fefa588310db4b49c81b8ae88afb360dce0fca32fded->enter($__internal_26db40f12482635a5fd9fefa588310db4b49c81b8ae88afb360dce0fca32fded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26db40f12482635a5fd9fefa588310db4b49c81b8ae88afb360dce0fca32fded->leave($__internal_26db40f12482635a5fd9fefa588310db4b49c81b8ae88afb360dce0fca32fded_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e65766fc9b751600f1bb911c4a65493b8d016730131478921a99ed82fa1e0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e65766fc9b751600f1bb911c4a65493b8d016730131478921a99ed82fa1e0b6->enter($__internal_6e65766fc9b751600f1bb911c4a65493b8d016730131478921a99ed82fa1e0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e65766fc9b751600f1bb911c4a65493b8d016730131478921a99ed82fa1e0b6->leave($__internal_6e65766fc9b751600f1bb911c4a65493b8d016730131478921a99ed82fa1e0b6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd6a48fcb97102576e80aa8fbc5fcac97c1c27541684eabb6399b74e1d32a84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6a48fcb97102576e80aa8fbc5fcac97c1c27541684eabb6399b74e1d32a84c->enter($__internal_cd6a48fcb97102576e80aa8fbc5fcac97c1c27541684eabb6399b74e1d32a84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cd6a48fcb97102576e80aa8fbc5fcac97c1c27541684eabb6399b74e1d32a84c->leave($__internal_cd6a48fcb97102576e80aa8fbc5fcac97c1c27541684eabb6399b74e1d32a84c_prof);

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
