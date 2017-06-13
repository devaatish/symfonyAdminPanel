<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cc46e5ac8f044a86509ff102d43b9f7af893cf40fb8a95eb74e34877aa43ef09 extends Twig_Template
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
        $__internal_6fecce1588f930e364c07ad3d30e0d965b3c24c7ddffad2203ccaa199dbb66cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fecce1588f930e364c07ad3d30e0d965b3c24c7ddffad2203ccaa199dbb66cf->enter($__internal_6fecce1588f930e364c07ad3d30e0d965b3c24c7ddffad2203ccaa199dbb66cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6fecce1588f930e364c07ad3d30e0d965b3c24c7ddffad2203ccaa199dbb66cf->leave($__internal_6fecce1588f930e364c07ad3d30e0d965b3c24c7ddffad2203ccaa199dbb66cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
