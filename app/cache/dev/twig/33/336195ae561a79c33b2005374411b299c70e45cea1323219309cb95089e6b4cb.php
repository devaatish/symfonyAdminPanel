<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9587a537bfd4f60b0087aa275d0c797863b90b3c69a64abf9b397d804e8f15ec extends Twig_Template
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
        $__internal_56b0f0a1229525b0cacbadda8fb7bae183bfeba6dd18a4d7d23c914a416aaa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b0f0a1229525b0cacbadda8fb7bae183bfeba6dd18a4d7d23c914a416aaa6f->enter($__internal_56b0f0a1229525b0cacbadda8fb7bae183bfeba6dd18a4d7d23c914a416aaa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_56b0f0a1229525b0cacbadda8fb7bae183bfeba6dd18a4d7d23c914a416aaa6f->leave($__internal_56b0f0a1229525b0cacbadda8fb7bae183bfeba6dd18a4d7d23c914a416aaa6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
