<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_661a09454797e753b012b453fbc2ac5cc0df090041374136c436acb30f30e4ce extends Twig_Template
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
        $__internal_ad3a05af86274016df45dabc9c66d2c7787f4ff500f3bb849dfc070f9cdd19ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3a05af86274016df45dabc9c66d2c7787f4ff500f3bb849dfc070f9cdd19ac->enter($__internal_ad3a05af86274016df45dabc9c66d2c7787f4ff500f3bb849dfc070f9cdd19ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ad3a05af86274016df45dabc9c66d2c7787f4ff500f3bb849dfc070f9cdd19ac->leave($__internal_ad3a05af86274016df45dabc9c66d2c7787f4ff500f3bb849dfc070f9cdd19ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
