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
        $__internal_8d474c2eac6ae7e5c10101ba2737fd7baf03b6ca061f6a5140d3ee5ea3547556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d474c2eac6ae7e5c10101ba2737fd7baf03b6ca061f6a5140d3ee5ea3547556->enter($__internal_8d474c2eac6ae7e5c10101ba2737fd7baf03b6ca061f6a5140d3ee5ea3547556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8d474c2eac6ae7e5c10101ba2737fd7baf03b6ca061f6a5140d3ee5ea3547556->leave($__internal_8d474c2eac6ae7e5c10101ba2737fd7baf03b6ca061f6a5140d3ee5ea3547556_prof);

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
