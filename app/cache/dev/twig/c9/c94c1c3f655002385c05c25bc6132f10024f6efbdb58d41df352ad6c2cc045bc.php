<?php

/* AdminBundle:Security:login.html.twig */
class __TwigTemplate_684e63595060376ddd365fce12a4c9570714a5f90bde46161e260a6487ba1bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40524699f8f4ad24b86b5ea804dd24efb5eb66972f29faf143b27c3d618244d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40524699f8f4ad24b86b5ea804dd24efb5eb66972f29faf143b27c3d618244d3->enter($__internal_40524699f8f4ad24b86b5ea804dd24efb5eb66972f29faf143b27c3d618244d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        ";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        // line 23
        echo "
        <title></title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/css/login.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\" login\">
        <!-- BEGIN LOGO -->
        <div class=\"logo\">
            <a href=\"index.html\">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/img/logo-big.png"), "html", null, true);
        echo "\" alt=\"\" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            ";
        // line 110
        echo twig_include($this->env, $context, "AdminBundle:Admin:forgot_password.html.twig");
        echo "
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            ";
        // line 113
        echo twig_include($this->env, $context, "AdminBundle:Admin:registration.html.twig");
        echo "
            <!-- END REGISTRATION FORM -->
        </div>
        <div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template. </div>
        <!--[if lt IE 9]>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/scripts/login.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>";
        
        $__internal_40524699f8f4ad24b86b5ea804dd24efb5eb66972f29faf143b27c3d618244d3->leave($__internal_40524699f8f4ad24b86b5ea804dd24efb5eb66972f29faf143b27c3d618244d3_prof);

    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3ff622d871180c230a7aa1cb6372fadb009f8d9ed207cb71f21663abcb92f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ff622d871180c230a7aa1cb6372fadb009f8d9ed207cb71f21663abcb92f04->enter($__internal_e3ff622d871180c230a7aa1cb6372fadb009f8d9ed207cb71f21663abcb92f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metronic | User Login 1";
        
        $__internal_e3ff622d871180c230a7aa1cb6372fadb009f8d9ed207cb71f21663abcb92f04->leave($__internal_e3ff622d871180c230a7aa1cb6372fadb009f8d9ed207cb71f21663abcb92f04_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2a1f8c7edeff1bc80869754b2f3375c85a91cf4fa75f90872b7dd0ce7f4a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2a1f8c7edeff1bc80869754b2f3375c85a91cf4fa75f90872b7dd0ce7f4a33->enter($__internal_cf2a1f8c7edeff1bc80869754b2f3375c85a91cf4fa75f90872b7dd0ce7f4a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "            <form class=\"login-form\" action=\"/login_check\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <h3 class=\"form-title font-green\">Sign In</h3>
                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"_username\" /> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\" /> </div>
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn green uppercase\">Login</button>
                    <label class=\"rememberme check\">
                        <input type=\"checkbox\" name=\"remember\" value=\"1\" />Remember </label>
                    <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Forgot Password?</a>
                </div>
                <div class=\"login-options\">
                    <h4>Or login with</h4>
                    <ul class=\"social-icons\">
                        <li>
                            <a class=\"social-icon-color facebook\" data-original-title=\"facebook\" href=\"javascript:;\"></a>
                        </li>
                        <li>
                            <a class=\"social-icon-color twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a>
                        </li>
                        <li>
                            <a class=\"social-icon-color googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a>
                        </li>
                        <li>
                            <a class=\"social-icon-color linkedin\" data-original-title=\"Linkedin\" href=\"\"></a>
                        </li>
                    </ul>
                </div>
                <div class=\"create-account\">
                    <p>
                        <a href=\"javascript:;\" id=\"register-btn\" class=\"uppercase\">Create an account</a>
                    </p>
                </div>
            </form>
            ";
        
        $__internal_cf2a1f8c7edeff1bc80869754b2f3375c85a91cf4fa75f90872b7dd0ce7f4a33->leave($__internal_cf2a1f8c7edeff1bc80869754b2f3375c85a91cf4fa75f90872b7dd0ce7f4a33_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 65,  240 => 64,  234 => 63,  222 => 22,  208 => 140,  202 => 137,  196 => 134,  192 => 133,  188 => 132,  182 => 129,  178 => 128,  174 => 127,  170 => 126,  166 => 125,  162 => 124,  158 => 123,  154 => 122,  148 => 119,  144 => 118,  136 => 113,  130 => 110,  126 => 108,  124 => 63,  115 => 57,  101 => 46,  95 => 43,  91 => 42,  85 => 39,  81 => 38,  75 => 35,  71 => 34,  67 => 33,  63 => 32,  59 => 31,  49 => 23,  47 => 22,  24 => 1,);
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
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        {% block title %}Metronic | User Login 1{% endblock %}

        <title></title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/uniform/css/uniform.default.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{ asset('bundles/assets/global/plugins/select2/css/select2.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('bundles/assets/global/css/components.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"{{ asset('bundles/assets/pages/css/login.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\" login\">
        <!-- BEGIN LOGO -->
        <div class=\"logo\">
            <a href=\"index.html\">
                <img src=\"{{ asset('bundles/assets/pages/img/logo-big.png')}}\" alt=\"\" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            {% block body %}
            <form class=\"login-form\" action=\"/login_check\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <h3 class=\"form-title font-green\">Sign In</h3>
                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"_username\" /> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\" /> </div>
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn green uppercase\">Login</button>
                    <label class=\"rememberme check\">
                        <input type=\"checkbox\" name=\"remember\" value=\"1\" />Remember </label>
                    <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Forgot Password?</a>
                </div>
                <div class=\"login-options\">
                    <h4>Or login with</h4>
                    <ul class=\"social-icons\">
                        <li>
                            <a class=\"social-icon-color facebook\" data-original-title=\"facebook\" href=\"javascript:;\"></a>
                        </li>
                        <li>
                            <a class=\"social-icon-color twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a>
                        </li>
                        <li>
                            <a class=\"social-icon-color googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a>
                        </li>
                        <li>
                            <a class=\"social-icon-color linkedin\" data-original-title=\"Linkedin\" href=\"\"></a>
                        </li>
                    </ul>
                </div>
                <div class=\"create-account\">
                    <p>
                        <a href=\"javascript:;\" id=\"register-btn\" class=\"uppercase\">Create an account</a>
                    </p>
                </div>
            </form>
            {% endblock %}
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            {{ include('AdminBundle:Admin:forgot_password.html.twig') }}
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            {{ include('AdminBundle:Admin:registration.html.twig') }}
            <!-- END REGISTRATION FORM -->
        </div>
        <div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template. </div>
        <!--[if lt IE 9]>
<script src=\"{{ asset('bundles/assets/global/plugins/respond.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/global/plugins/excanvas.min.js')}}\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/js.cookie.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery.blockui.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/uniform/jquery.uniform.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/select2/js/select2.full.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('bundles/assets/global/scripts/app.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{ asset('bundles/assets/pages/scripts/login.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>", "AdminBundle:Security:login.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Security/login.html.twig");
    }
}
