<?php

/* AdminBundle:Admin:user_profile.html.twig */
class __TwigTemplate_c68d9e7be057f7dac4932f16172ae0917cc8e235bc1f810c921a1d66e0adcf8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:user_profile.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Admin/Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2278194fcf2d108f3eef20072e8cc2a1332861bde55b2f749fea78620c6a0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2278194fcf2d108f3eef20072e8cc2a1332861bde55b2f749fea78620c6a0b7->enter($__internal_c2278194fcf2d108f3eef20072e8cc2a1332861bde55b2f749fea78620c6a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:user_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2278194fcf2d108f3eef20072e8cc2a1332861bde55b2f749fea78620c6a0b7->leave($__internal_c2278194fcf2d108f3eef20072e8cc2a1332861bde55b2f749fea78620c6a0b7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffd27b1de64458ff5b779b3ff02e355d5468113cdf798de4a6d485f9a95ebf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd27b1de64458ff5b779b3ff02e355d5468113cdf798de4a6d485f9a95ebf82->enter($__internal_ffd27b1de64458ff5b779b3ff02e355d5468113cdf798de4a6d485f9a95ebf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class=\"theme-panel hidden-xs hidden-sm\">
                        <div class=\"toggler\"> </div>
                        <div class=\"toggler-close\"> </div>
                        <div class=\"theme-options\">
                            <div class=\"theme-option theme-colors clearfix\">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\"> </li>
                                    <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\"> </li>
                                    <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\"> </li>
                                    <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\"> </li>
                                    <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\"> </li>
                                    <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\"> </li>
                                </ul>
                            </div>
                            <div class=\"theme-option\">
                                <span> Theme Style </span>
                                <select class=\"layout-style-option form-control input-sm\">
                                    <option value=\"square\" selected=\"selected\">Square corners</option>
                                    <option value=\"rounded\">Rounded corners</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Layout </span>
                                <select class=\"layout-option form-control input-sm\">
                                    <option value=\"fluid\" selected=\"selected\">Fluid</option>
                                    <option value=\"boxed\">Boxed</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Header </span>
                                <select class=\"page-header-option form-control input-sm\">
                                    <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                    <option value=\"default\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Top Menu Dropdown</span>
                                <select class=\"page-header-top-dropdown-style-option form-control input-sm\">
                                    <option value=\"light\" selected=\"selected\">Light</option>
                                    <option value=\"dark\">Dark</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Mode</span>
                                <select class=\"sidebar-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Menu </span>
                                <select class=\"sidebar-menu-option form-control input-sm\">
                                    <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                    <option value=\"hover\">Hover</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Style </span>
                                <select class=\"sidebar-style-option form-control input-sm\">
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                    <option value=\"light\">Light</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Position </span>
                                <select class=\"sidebar-pos-option form-control input-sm\">
                                    <option value=\"left\" selected=\"selected\">Left</option>
                                    <option value=\"right\">Right</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Footer </span>
                                <select class=\"page-footer-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <div class=\"page-toolbar\">
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\" data-toggle=\"dropdown\"> Actions
                                    <i class=\"fa fa-angle-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bell\"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-shield\"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-user\"></i> Something else here</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bag\"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class=\"page-title\"> New User Profile | Account
                        <small>user account page</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class=\"profile-sidebar\">
                                <!-- PORTLET MAIN -->
                                <div class=\"portlet light profile-sidebar-portlet \">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class=\"profile-userpic\">
                                        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/media/profile/profile_user.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class=\"profile-usertitle\">
                                        <div class=\"profile-usertitle-name\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "fullname"), "method"), "html", null, true);
        echo " </div>
                                        <div class=\"profile-usertitle-job\"> Developer </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class=\"profile-userbuttons\">
                                        <button type=\"button\" class=\"btn btn-circle green btn-sm\">Follow</button>
                                        <button type=\"button\" class=\"btn btn-circle red btn-sm\">Message</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class=\"profile-usermenu\">
                                        <ul class=\"nav\">
                                            <li>
                                                <a href=\"page_user_profile_1.html\">
                                                    <i class=\"icon-home\"></i> Overview </a>
                                            </li>
                                            <li class=\"active\">
                                                <a href=\"page_user_profile_1_account.html\">
                                                    <i class=\"icon-settings\"></i> Account Settings </a>
                                            </li>
                                            <li>
                                                <a href=\"page_user_profile_1_help.html\">
                                                    <i class=\"icon-info\"></i> Help </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class=\"portlet light \">
                                    <!-- STAT -->
                                    <div class=\"row list-separated profile-stat\">
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 37 </div>
                                            <div class=\"uppercase profile-stat-text\"> Projects </div>
                                        </div>
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 51 </div>
                                            <div class=\"uppercase profile-stat-text\"> Tasks </div>
                                        </div>
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 61 </div>
                                            <div class=\"uppercase profile-stat-text\"> Uploads </div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class=\"profile-desc-title\">About Marcus Doe</h4>
                                        <span class=\"profile-desc-text\"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-globe\"></i>
                                            <a href=\"http://www.keenthemes.com\">www.keenthemes.com</a>
                                        </div>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-twitter\"></i>
                                            <a href=\"http://www.twitter.com/keenthemes/\">@keenthemes</a>
                                        </div>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-facebook\"></i>
                                            <a href=\"http://www.facebook.com/keenthemes/\">keenthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class=\"profile-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption caption-md\">
                                                    <i class=\"icon-globe theme-font hide\"></i>
                                                    <span class=\"caption-subject font-blue-madison bold uppercase\">Profile Account</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#tab_1_1\" data-toggle=\"tab\">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_2\" data-toggle=\"tab\">Change Avatar</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_3\" data-toggle=\"tab\">Change Password</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_4\" data-toggle=\"tab\">Privacy Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                        <form role=\"form\" action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">First Name</label>
                                                                <input type=\"text\" placeholder=\"John\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Last Name</label>
                                                                <input type=\"text\" placeholder=\"Doe\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Mobile Number</label>
                                                                <input type=\"text\" placeholder=\"+1 646 580 DEMO (6284)\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Interests</label>
                                                                <input type=\"text\" placeholder=\"Design, Web etc.\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Occupation</label>
                                                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">About</label>
                                                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"We are KeenThemes!!!\"></textarea>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Website Url</label>
                                                                <input type=\"text\" placeholder=\"http://www.mywebsite.com\" class=\"form-control\" /> </div>
                                                            <div class=\"margiv-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_2\">
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                        <form action=\"#\" role=\"form\">
                                                            <div class=\"form-group\">
                                                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                                                        <img src=\"http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image\" alt=\"\" /> </div>
                                                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"> </div>
                                                                    <div>
                                                                        <span class=\"btn default btn-file\">
                                                                            <span class=\"fileinput-new\"> Select image </span>
                                                                            <span class=\"fileinput-exists\"> Change </span>
                                                                            <input type=\"file\" name=\"...\"> </span>
                                                                        <a href=\"javascript:;\" class=\"btn default fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"clearfix margin-top-10\">
                                                                    <span class=\"label label-danger\">NOTE! </span>
                                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Submit </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_3\">
                                                        <form action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Current Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Re-type New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Change Password </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_4\">
                                                        <form action=\"#\">
                                                            <table class=\"table table-light table-hover\">
                                                                <tr>
                                                                    <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option1\" /> Yes </label>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option2\" checked/> No </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!--end profile-settings-->
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn red\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PRIVACY SETTINGS TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
";
        
        $__internal_ffd27b1de64458ff5b779b3ff02e355d5468113cdf798de4a6d485f9a95ebf82->leave($__internal_ffd27b1de64458ff5b779b3ff02e355d5468113cdf798de4a6d485f9a95ebf82_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:user_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 146,  181 => 142,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle:Admin/Layout:layout.html.twig'%}
{% block content %}
<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class=\"theme-panel hidden-xs hidden-sm\">
                        <div class=\"toggler\"> </div>
                        <div class=\"toggler-close\"> </div>
                        <div class=\"theme-options\">
                            <div class=\"theme-option theme-colors clearfix\">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\"> </li>
                                    <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\"> </li>
                                    <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\"> </li>
                                    <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\"> </li>
                                    <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\"> </li>
                                    <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\"> </li>
                                </ul>
                            </div>
                            <div class=\"theme-option\">
                                <span> Theme Style </span>
                                <select class=\"layout-style-option form-control input-sm\">
                                    <option value=\"square\" selected=\"selected\">Square corners</option>
                                    <option value=\"rounded\">Rounded corners</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Layout </span>
                                <select class=\"layout-option form-control input-sm\">
                                    <option value=\"fluid\" selected=\"selected\">Fluid</option>
                                    <option value=\"boxed\">Boxed</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Header </span>
                                <select class=\"page-header-option form-control input-sm\">
                                    <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                    <option value=\"default\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Top Menu Dropdown</span>
                                <select class=\"page-header-top-dropdown-style-option form-control input-sm\">
                                    <option value=\"light\" selected=\"selected\">Light</option>
                                    <option value=\"dark\">Dark</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Mode</span>
                                <select class=\"sidebar-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Menu </span>
                                <select class=\"sidebar-menu-option form-control input-sm\">
                                    <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                    <option value=\"hover\">Hover</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Style </span>
                                <select class=\"sidebar-style-option form-control input-sm\">
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                    <option value=\"light\">Light</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Position </span>
                                <select class=\"sidebar-pos-option form-control input-sm\">
                                    <option value=\"left\" selected=\"selected\">Left</option>
                                    <option value=\"right\">Right</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Footer </span>
                                <select class=\"page-footer-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <div class=\"page-toolbar\">
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\" data-toggle=\"dropdown\"> Actions
                                    <i class=\"fa fa-angle-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bell\"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-shield\"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-user\"></i> Something else here</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bag\"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class=\"page-title\"> New User Profile | Account
                        <small>user account page</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class=\"profile-sidebar\">
                                <!-- PORTLET MAIN -->
                                <div class=\"portlet light profile-sidebar-portlet \">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class=\"profile-userpic\">
                                        <img src=\"{{ asset('bundles/assets/pages/media/profile/profile_user.jpg')}}\" class=\"img-responsive\" alt=\"\"> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class=\"profile-usertitle\">
                                        <div class=\"profile-usertitle-name\">{{ app.session.get('fullname')}} </div>
                                        <div class=\"profile-usertitle-job\"> Developer </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class=\"profile-userbuttons\">
                                        <button type=\"button\" class=\"btn btn-circle green btn-sm\">Follow</button>
                                        <button type=\"button\" class=\"btn btn-circle red btn-sm\">Message</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class=\"profile-usermenu\">
                                        <ul class=\"nav\">
                                            <li>
                                                <a href=\"page_user_profile_1.html\">
                                                    <i class=\"icon-home\"></i> Overview </a>
                                            </li>
                                            <li class=\"active\">
                                                <a href=\"page_user_profile_1_account.html\">
                                                    <i class=\"icon-settings\"></i> Account Settings </a>
                                            </li>
                                            <li>
                                                <a href=\"page_user_profile_1_help.html\">
                                                    <i class=\"icon-info\"></i> Help </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class=\"portlet light \">
                                    <!-- STAT -->
                                    <div class=\"row list-separated profile-stat\">
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 37 </div>
                                            <div class=\"uppercase profile-stat-text\"> Projects </div>
                                        </div>
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 51 </div>
                                            <div class=\"uppercase profile-stat-text\"> Tasks </div>
                                        </div>
                                        <div class=\"col-md-4 col-sm-4 col-xs-6\">
                                            <div class=\"uppercase profile-stat-title\"> 61 </div>
                                            <div class=\"uppercase profile-stat-text\"> Uploads </div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class=\"profile-desc-title\">About Marcus Doe</h4>
                                        <span class=\"profile-desc-text\"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-globe\"></i>
                                            <a href=\"http://www.keenthemes.com\">www.keenthemes.com</a>
                                        </div>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-twitter\"></i>
                                            <a href=\"http://www.twitter.com/keenthemes/\">@keenthemes</a>
                                        </div>
                                        <div class=\"margin-top-20 profile-desc-link\">
                                            <i class=\"fa fa-facebook\"></i>
                                            <a href=\"http://www.facebook.com/keenthemes/\">keenthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class=\"profile-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption caption-md\">
                                                    <i class=\"icon-globe theme-font hide\"></i>
                                                    <span class=\"caption-subject font-blue-madison bold uppercase\">Profile Account</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#tab_1_1\" data-toggle=\"tab\">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_2\" data-toggle=\"tab\">Change Avatar</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_3\" data-toggle=\"tab\">Change Password</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_4\" data-toggle=\"tab\">Privacy Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                        <form role=\"form\" action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">First Name</label>
                                                                <input type=\"text\" placeholder=\"John\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Last Name</label>
                                                                <input type=\"text\" placeholder=\"Doe\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Mobile Number</label>
                                                                <input type=\"text\" placeholder=\"+1 646 580 DEMO (6284)\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Interests</label>
                                                                <input type=\"text\" placeholder=\"Design, Web etc.\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Occupation</label>
                                                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">About</label>
                                                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"We are KeenThemes!!!\"></textarea>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Website Url</label>
                                                                <input type=\"text\" placeholder=\"http://www.mywebsite.com\" class=\"form-control\" /> </div>
                                                            <div class=\"margiv-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_2\">
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                        <form action=\"#\" role=\"form\">
                                                            <div class=\"form-group\">
                                                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                                                        <img src=\"http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image\" alt=\"\" /> </div>
                                                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"> </div>
                                                                    <div>
                                                                        <span class=\"btn default btn-file\">
                                                                            <span class=\"fileinput-new\"> Select image </span>
                                                                            <span class=\"fileinput-exists\"> Change </span>
                                                                            <input type=\"file\" name=\"...\"> </span>
                                                                        <a href=\"javascript:;\" class=\"btn default fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"clearfix margin-top-10\">
                                                                    <span class=\"label label-danger\">NOTE! </span>
                                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Submit </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_3\">
                                                        <form action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Current Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Re-type New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Change Password </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_4\">
                                                        <form action=\"#\">
                                                            <table class=\"table table-light table-hover\">
                                                                <tr>
                                                                    <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option1\" /> Yes </label>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option2\" checked/> No </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!--end profile-settings-->
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn red\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PRIVACY SETTINGS TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
{% endblock %}
", "AdminBundle:Admin:user_profile.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/user_profile.html.twig");
    }
}
