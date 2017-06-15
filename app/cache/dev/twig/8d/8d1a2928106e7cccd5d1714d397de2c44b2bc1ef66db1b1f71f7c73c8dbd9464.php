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
        $__internal_2d6828e815ccf3efa7621505f94694d0c91ea27a70ae84bdbbcc8aee41583d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6828e815ccf3efa7621505f94694d0c91ea27a70ae84bdbbcc8aee41583d89->enter($__internal_2d6828e815ccf3efa7621505f94694d0c91ea27a70ae84bdbbcc8aee41583d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2d6828e815ccf3efa7621505f94694d0c91ea27a70ae84bdbbcc8aee41583d89->leave($__internal_2d6828e815ccf3efa7621505f94694d0c91ea27a70ae84bdbbcc8aee41583d89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c14a9eb3e3ffa4e7363b70be3e4716c4b7d3b252b73e88a3161994e9193bbd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14a9eb3e3ffa4e7363b70be3e4716c4b7d3b252b73e88a3161994e9193bbd54->enter($__internal_c14a9eb3e3ffa4e7363b70be3e4716c4b7d3b252b73e88a3161994e9193bbd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c14a9eb3e3ffa4e7363b70be3e4716c4b7d3b252b73e88a3161994e9193bbd54->leave($__internal_c14a9eb3e3ffa4e7363b70be3e4716c4b7d3b252b73e88a3161994e9193bbd54_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8bb9dee6c1068e960b06e15b4ddb40c2ae39e2d82359051b7258bab8627ee3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bb9dee6c1068e960b06e15b4ddb40c2ae39e2d82359051b7258bab8627ee3c->enter($__internal_b8bb9dee6c1068e960b06e15b4ddb40c2ae39e2d82359051b7258bab8627ee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b8bb9dee6c1068e960b06e15b4ddb40c2ae39e2d82359051b7258bab8627ee3c->leave($__internal_b8bb9dee6c1068e960b06e15b4ddb40c2ae39e2d82359051b7258bab8627ee3c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aff107bb6e54f07b10a8b211a73ffe490178878606bff9db08c7870ee601ec2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff107bb6e54f07b10a8b211a73ffe490178878606bff9db08c7870ee601ec2b->enter($__internal_aff107bb6e54f07b10a8b211a73ffe490178878606bff9db08c7870ee601ec2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aff107bb6e54f07b10a8b211a73ffe490178878606bff9db08c7870ee601ec2b->leave($__internal_aff107bb6e54f07b10a8b211a73ffe490178878606bff9db08c7870ee601ec2b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b7e1751242257f26fb2334da7fc1133a7b5b1b6c95367cd917bff911e7c08fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7e1751242257f26fb2334da7fc1133a7b5b1b6c95367cd917bff911e7c08fa->enter($__internal_1b7e1751242257f26fb2334da7fc1133a7b5b1b6c95367cd917bff911e7c08fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1b7e1751242257f26fb2334da7fc1133a7b5b1b6c95367cd917bff911e7c08fa->leave($__internal_1b7e1751242257f26fb2334da7fc1133a7b5b1b6c95367cd917bff911e7c08fa_prof);

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
