<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d7cb04b60735e3b05ea86d4256b7a22860a761cb67b618662eb8b96bb455f869 extends Twig_Template
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
        $__internal_819ceb94a45099ede4489b28eed9bd8dfbcf4a4b86b0f6e6ce1a02b45b2a68f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819ceb94a45099ede4489b28eed9bd8dfbcf4a4b86b0f6e6ce1a02b45b2a68f1->enter($__internal_819ceb94a45099ede4489b28eed9bd8dfbcf4a4b86b0f6e6ce1a02b45b2a68f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_819ceb94a45099ede4489b28eed9bd8dfbcf4a4b86b0f6e6ce1a02b45b2a68f1->leave($__internal_819ceb94a45099ede4489b28eed9bd8dfbcf4a4b86b0f6e6ce1a02b45b2a68f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
