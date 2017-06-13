<?php

/* AdminBundle:Admin:forgot_password.html.twig */
class __TwigTemplate_a0d4b36d7e7c988333fce7e776d0e6364be80c135a9a8b9d85121ab74ebcaa2e extends Twig_Template
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
        $__internal_b5f1fd97aacf1c5ee5a60e9f5e4961e5b96d5645575f8bd06884a86ac3a1eea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f1fd97aacf1c5ee5a60e9f5e4961e5b96d5645575f8bd06884a86ac3a1eea2->enter($__internal_b5f1fd97aacf1c5ee5a60e9f5e4961e5b96d5645575f8bd06884a86ac3a1eea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:forgot_password.html.twig"));

        // line 1
        echo "<form class=\"forget-form\" action=\"index.html\" method=\"post\">
                <h3 class=\"font-green\">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class=\"form-group\">
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
                </div>
            </form>";
        
        $__internal_b5f1fd97aacf1c5ee5a60e9f5e4961e5b96d5645575f8bd06884a86ac3a1eea2->leave($__internal_b5f1fd97aacf1c5ee5a60e9f5e4961e5b96d5645575f8bd06884a86ac3a1eea2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:forgot_password.html.twig";
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
        return new Twig_Source("<form class=\"forget-form\" action=\"index.html\" method=\"post\">
                <h3 class=\"font-green\">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class=\"form-group\">
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
                </div>
            </form>", "AdminBundle:Admin:forgot_password.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/forgot_password.html.twig");
    }
}
