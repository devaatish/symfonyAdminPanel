<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_40aac7344eb8e22e3e5f11a20d2b3810b8cc51dc06ea4ecd5a8bb8e7c905abac extends Twig_Template
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
        $__internal_8d39037ad59dbd4f8f0e804df32b69b4f9bd7386222dd2dfd8f87f070c76db4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d39037ad59dbd4f8f0e804df32b69b4f9bd7386222dd2dfd8f87f070c76db4d->enter($__internal_8d39037ad59dbd4f8f0e804df32b69b4f9bd7386222dd2dfd8f87f070c76db4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8d39037ad59dbd4f8f0e804df32b69b4f9bd7386222dd2dfd8f87f070c76db4d->leave($__internal_8d39037ad59dbd4f8f0e804df32b69b4f9bd7386222dd2dfd8f87f070c76db4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
