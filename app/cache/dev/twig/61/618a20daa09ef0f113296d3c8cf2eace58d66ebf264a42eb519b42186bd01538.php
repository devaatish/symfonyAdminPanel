<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_a6e808294e25a6e3b8f8e844fd203f00c5d826fdee8e355963853dcb11b6f828 extends Twig_Template
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
        $__internal_fc4f69e5669d8ada27f031a0c9a350d60584f0a814846eb0ebf85a186f520e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4f69e5669d8ada27f031a0c9a350d60584f0a814846eb0ebf85a186f520e2d->enter($__internal_fc4f69e5669d8ada27f031a0c9a350d60584f0a814846eb0ebf85a186f520e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fc4f69e5669d8ada27f031a0c9a350d60584f0a814846eb0ebf85a186f520e2d->leave($__internal_fc4f69e5669d8ada27f031a0c9a350d60584f0a814846eb0ebf85a186f520e2d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AdminBundle:Default:index.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
