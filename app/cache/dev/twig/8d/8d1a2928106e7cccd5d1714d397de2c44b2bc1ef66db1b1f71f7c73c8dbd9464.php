<?php

/* base.html.twig */
class __TwigTemplate_4eda29af19bfe5692f23b371483d2213ebf3f7bb80f8503daa7ba74ab45a1397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df3a3f6fb81e3f52db95fc23f7800b807a11e9597e8bae4cac121bfe70bbd98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3a3f6fb81e3f52db95fc23f7800b807a11e9597e8bae4cac121bfe70bbd98f->enter($__internal_df3a3f6fb81e3f52db95fc23f7800b807a11e9597e8bae4cac121bfe70bbd98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_df3a3f6fb81e3f52db95fc23f7800b807a11e9597e8bae4cac121bfe70bbd98f->leave($__internal_df3a3f6fb81e3f52db95fc23f7800b807a11e9597e8bae4cac121bfe70bbd98f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9981a5209445a85b41995d60928b67282fcbd5844ccb0399d34b61e30fbbfa57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9981a5209445a85b41995d60928b67282fcbd5844ccb0399d34b61e30fbbfa57->enter($__internal_9981a5209445a85b41995d60928b67282fcbd5844ccb0399d34b61e30fbbfa57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9981a5209445a85b41995d60928b67282fcbd5844ccb0399d34b61e30fbbfa57->leave($__internal_9981a5209445a85b41995d60928b67282fcbd5844ccb0399d34b61e30fbbfa57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4026300f5309f567ff67937d069b3d4c03c61cae3cfa2910d9528be0b2da2ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4026300f5309f567ff67937d069b3d4c03c61cae3cfa2910d9528be0b2da2ab1->enter($__internal_4026300f5309f567ff67937d069b3d4c03c61cae3cfa2910d9528be0b2da2ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4026300f5309f567ff67937d069b3d4c03c61cae3cfa2910d9528be0b2da2ab1->leave($__internal_4026300f5309f567ff67937d069b3d4c03c61cae3cfa2910d9528be0b2da2ab1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_70c8594fd624e457e09b24a36ffa12201e07679515712978a221ace06a8d5fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c8594fd624e457e09b24a36ffa12201e07679515712978a221ace06a8d5fc3->enter($__internal_70c8594fd624e457e09b24a36ffa12201e07679515712978a221ace06a8d5fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70c8594fd624e457e09b24a36ffa12201e07679515712978a221ace06a8d5fc3->leave($__internal_70c8594fd624e457e09b24a36ffa12201e07679515712978a221ace06a8d5fc3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5f6d9a803a9566d60d26ab3897540a1d2f4b1d7563c08bf3e83991084146181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f6d9a803a9566d60d26ab3897540a1d2f4b1d7563c08bf3e83991084146181->enter($__internal_d5f6d9a803a9566d60d26ab3897540a1d2f4b1d7563c08bf3e83991084146181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5f6d9a803a9566d60d26ab3897540a1d2f4b1d7563c08bf3e83991084146181->leave($__internal_d5f6d9a803a9566d60d26ab3897540a1d2f4b1d7563c08bf3e83991084146181_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symfonyAdminPanel/app/Resources/views/base.html.twig");
    }
}
