<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_800db5306c33c9e38aa130497d283ad087ae2bec95cf6afda4c855eea2360f2b extends Twig_Template
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
        $__internal_4f13643c285c6f4dd26190ee9be0ccb685138a4bbd37795ea059e1b3a5f4625e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f13643c285c6f4dd26190ee9be0ccb685138a4bbd37795ea059e1b3a5f4625e->enter($__internal_4f13643c285c6f4dd26190ee9be0ccb685138a4bbd37795ea059e1b3a5f4625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4f13643c285c6f4dd26190ee9be0ccb685138a4bbd37795ea059e1b3a5f4625e->leave($__internal_4f13643c285c6f4dd26190ee9be0ccb685138a4bbd37795ea059e1b3a5f4625e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
