<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_36af687f48c9888061a2c319ddeb5805eb3bb821a4008fbcb094a6f528231e5c extends Twig_Template
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
        $__internal_65a665d135fb70711c8a0808466414f93d70e2a6d09dd8ef84d20712800b6681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a665d135fb70711c8a0808466414f93d70e2a6d09dd8ef84d20712800b6681->enter($__internal_65a665d135fb70711c8a0808466414f93d70e2a6d09dd8ef84d20712800b6681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_65a665d135fb70711c8a0808466414f93d70e2a6d09dd8ef84d20712800b6681->leave($__internal_65a665d135fb70711c8a0808466414f93d70e2a6d09dd8ef84d20712800b6681_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
