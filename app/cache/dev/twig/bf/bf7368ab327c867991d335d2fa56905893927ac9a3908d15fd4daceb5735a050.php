<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_138ee555861d47b8403d8674d16e672b25d296811f7fb4971dac66e697d9c91a extends Twig_Template
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
        $__internal_eba36020221ea5eaf3696a4b8ec455a9489df2cd4f52f82a3a6b880a0696247e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba36020221ea5eaf3696a4b8ec455a9489df2cd4f52f82a3a6b880a0696247e->enter($__internal_eba36020221ea5eaf3696a4b8ec455a9489df2cd4f52f82a3a6b880a0696247e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_eba36020221ea5eaf3696a4b8ec455a9489df2cd4f52f82a3a6b880a0696247e->leave($__internal_eba36020221ea5eaf3696a4b8ec455a9489df2cd4f52f82a3a6b880a0696247e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
