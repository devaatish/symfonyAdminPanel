<?php

/* AdminBundle:Admin/Layout:footer.html.twig */
class __TwigTemplate_fdc63b65c224902d050dbf520b17ee97f8503f1ee793342f63512d4f7c4219a0 extends Twig_Template
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
        $__internal_43358cdc987f2dbc9d274ea39398a90c75ae6f7470d831ca54e0e80467ac15bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43358cdc987f2dbc9d274ea39398a90c75ae6f7470d831ca54e0e80467ac15bf->enter($__internal_43358cdc987f2dbc9d274ea39398a90c75ae6f7470d831ca54e0e80467ac15bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:footer.html.twig"));

        // line 1
        echo "<div class=\"page-footer\">
    <div class=\"page-footer-inner\">
         2014 &copy; Metronic by keenthemes.
    </div>
    <div class=\"page-footer-tools\">
        <span class=\"go-top\">
        <i class=\"fa fa-angle-up\"></i>
        </span>
    </div>
</div>";
        
        $__internal_43358cdc987f2dbc9d274ea39398a90c75ae6f7470d831ca54e0e80467ac15bf->leave($__internal_43358cdc987f2dbc9d274ea39398a90c75ae6f7470d831ca54e0e80467ac15bf_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:footer.html.twig";
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
        return new Twig_Source("<div class=\"page-footer\">
    <div class=\"page-footer-inner\">
         2014 &copy; Metronic by keenthemes.
    </div>
    <div class=\"page-footer-tools\">
        <span class=\"go-top\">
        <i class=\"fa fa-angle-up\"></i>
        </span>
    </div>
</div>", "AdminBundle:Admin/Layout:footer.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/footer.html.twig");
    }
}
