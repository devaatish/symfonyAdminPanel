<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_533988adc4b782f11067a1a2ca0197967776fd5e4c74005a8343f05fa76609fd extends Twig_Template
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
        $__internal_83d7a994ad9cd019aa0b7ca247cb2a09684cb00712153f47826c78a604f9517f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d7a994ad9cd019aa0b7ca247cb2a09684cb00712153f47826c78a604f9517f->enter($__internal_83d7a994ad9cd019aa0b7ca247cb2a09684cb00712153f47826c78a604f9517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_83d7a994ad9cd019aa0b7ca247cb2a09684cb00712153f47826c78a604f9517f->leave($__internal_83d7a994ad9cd019aa0b7ca247cb2a09684cb00712153f47826c78a604f9517f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
