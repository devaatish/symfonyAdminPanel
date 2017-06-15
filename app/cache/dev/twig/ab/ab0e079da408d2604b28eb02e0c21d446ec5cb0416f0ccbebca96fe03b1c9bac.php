<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6cb9856a04a3bf74ca8ae07bfa1c80126cb7204975eca4c8d2e3eaf7dd4335ec extends Twig_Template
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
        $__internal_8964cf9f4b6a2302e90646afdfb6ce9b779ef6f9b1f13e9d73fb531aee9637a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8964cf9f4b6a2302e90646afdfb6ce9b779ef6f9b1f13e9d73fb531aee9637a4->enter($__internal_8964cf9f4b6a2302e90646afdfb6ce9b779ef6f9b1f13e9d73fb531aee9637a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8964cf9f4b6a2302e90646afdfb6ce9b779ef6f9b1f13e9d73fb531aee9637a4->leave($__internal_8964cf9f4b6a2302e90646afdfb6ce9b779ef6f9b1f13e9d73fb531aee9637a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
