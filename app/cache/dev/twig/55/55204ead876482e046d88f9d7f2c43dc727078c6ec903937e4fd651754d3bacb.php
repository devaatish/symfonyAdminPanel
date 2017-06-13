<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ff361194cf0d7dfffb2db7c0639509e665971f5d140e839322f4639a2c24e07a extends Twig_Template
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
        $__internal_55abd91cf97f5a06dded53c3306f8193cdfa7c8deb43c85f40a09870bcc8e435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55abd91cf97f5a06dded53c3306f8193cdfa7c8deb43c85f40a09870bcc8e435->enter($__internal_55abd91cf97f5a06dded53c3306f8193cdfa7c8deb43c85f40a09870bcc8e435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_55abd91cf97f5a06dded53c3306f8193cdfa7c8deb43c85f40a09870bcc8e435->leave($__internal_55abd91cf97f5a06dded53c3306f8193cdfa7c8deb43c85f40a09870bcc8e435_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
