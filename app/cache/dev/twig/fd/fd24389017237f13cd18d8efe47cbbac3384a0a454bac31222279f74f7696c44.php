<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0572dd4c66c19ffe1f38b7dc777723319625c85b30920f42043e2332ebb19d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7f86c26fe97204cb947064cb95c1bc032802196a3dcea58029c5045fd1a3a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f86c26fe97204cb947064cb95c1bc032802196a3dcea58029c5045fd1a3a4a->enter($__internal_d7f86c26fe97204cb947064cb95c1bc032802196a3dcea58029c5045fd1a3a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d7f86c26fe97204cb947064cb95c1bc032802196a3dcea58029c5045fd1a3a4a->leave($__internal_d7f86c26fe97204cb947064cb95c1bc032802196a3dcea58029c5045fd1a3a4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
