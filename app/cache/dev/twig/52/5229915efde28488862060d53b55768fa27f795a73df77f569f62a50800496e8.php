<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_19776a67936b40d1d3bd8064c1f1773373ac0f503ab1d9bd0b616df0c8dcd8e0 extends Twig_Template
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
        $__internal_a8ada162da39a29733c21e13e0c09aa4160f6e69984fcc1a2d5a79d34c95f939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ada162da39a29733c21e13e0c09aa4160f6e69984fcc1a2d5a79d34c95f939->enter($__internal_a8ada162da39a29733c21e13e0c09aa4160f6e69984fcc1a2d5a79d34c95f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a8ada162da39a29733c21e13e0c09aa4160f6e69984fcc1a2d5a79d34c95f939->leave($__internal_a8ada162da39a29733c21e13e0c09aa4160f6e69984fcc1a2d5a79d34c95f939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
