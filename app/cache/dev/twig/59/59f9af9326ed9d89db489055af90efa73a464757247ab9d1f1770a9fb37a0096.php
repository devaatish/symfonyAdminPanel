<?php

/* AdminBundle:Admin:edituser.html.twig */
class __TwigTemplate_ee48d51d0994d90b6e8d14f7bbf422df5000adc489e413b771bb6eba858ea4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:edituser.html.twig", 1);
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
        $__internal_f30b9cb14fdb44276e1aa3c9bda26132b20d189584bb1abe48b8c138f1e2ecf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30b9cb14fdb44276e1aa3c9bda26132b20d189584bb1abe48b8c138f1e2ecf3->enter($__internal_f30b9cb14fdb44276e1aa3c9bda26132b20d189584bb1abe48b8c138f1e2ecf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:edituser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f30b9cb14fdb44276e1aa3c9bda26132b20d189584bb1abe48b8c138f1e2ecf3->leave($__internal_f30b9cb14fdb44276e1aa3c9bda26132b20d189584bb1abe48b8c138f1e2ecf3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f5008bff9257f5229d4c2f794878664d135dda07560491ea68d9a0423e15e94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5008bff9257f5229d4c2f794878664d135dda07560491ea68d9a0423e15e94d->enter($__internal_f5008bff9257f5229d4c2f794878664d135dda07560491ea68d9a0423e15e94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div style=\"min-height:1548px\" class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Form Stuff</span>
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
                   
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                          
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class=\"portlet light portlet-fit portlet-form bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Basic Validation   
                                                                                  
                                        </span>
                                    </div>
                                    <div class=\"actions\">
                                        <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm active\">
                                                <input name=\"options\" class=\"toggle\" id=\"option1\" type=\"radio\">Actions</label>
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm\">
                                                <input name=\"options\" class=\"toggle\" id=\"option2\" type=\"radio\">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <!-- BEGIN FORM-->
                                     ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 81
            echo "                                        

                                    <form novalidate=\"novalidate\" method=\"post\" action=\"/update\" id=\"form_sample_1\" class=\"form-horizontal\">
                                        <div class=\"form-body\">
                                            <div class=\"alert alert-danger display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                            <div class=\"alert alert-success display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>
                                                <input name=\"id\" data-required=\"1\"  type=\"hidden\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "id"), "html", null, true);
            echo "\"> 
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\" >
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">FullName
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"fullname\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "fullname"), "html", null, true);
            echo "\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Email
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"email\" class=\"form-control\" type=\"text\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "email"), "html", null, true);
            echo "\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Address
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"address\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "address"), "html", null, true);
            echo "\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">City/Town
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"city\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "city"), "html", null, true);
            echo "\"> </div>
                                            </div>
                                                                            
                                            
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"country\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "country"), "html", null, true);
            echo "\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"HK\">Hong Kong</option>
                                                        <option value=\"HU\">Hungary</option>
                                                        <option value=\"IS\">Iceland</option>
                                                        <option value=\"IN\">India</option>
                                                        <option value=\"ID\">Indonesia</option>
                                                        <option value=\"IR\">Iran (Islamic Republic of)</option>
                                                        <option value=\"IQ\">Iraq</option>
                                                        <option value=\"IE\">Ireland</option>
                                                        <option value=\"IL\">Israel</option>
                                                        <option value=\"IT\">Italy</option>
                                                        <option value=\"JM\">Jamaica</option>
                                                        <option value=\"JP\">Japan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Role
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"role\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "isadmin"), "html", null, true);
            echo "\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"1\">admin</option>
                                                        <option value=\"2\">approver</option>
                                                        <option value=\"3\">editor</option>
                                                        <option value=\"4\">user</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Username
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"username\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "username"), "html", null, true);
            echo "\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"password\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Re-type Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"rpassword\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>
                                                                                        
                                        </div>
                                        <div class=\"form-actions\">
                                            <div class=\"row\">
                                                <div class=\"col-md-offset-3 col-md-9\">
                                                    <button type=\"submit\" class=\"btn green\">Submit</button>

                                                    
                                                    <a href=\"/admin/user\" class=\"btn grey-salsa btn-outline\" role=\"button\">Cancel </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                           
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
";
        
        $__internal_f5008bff9257f5229d4c2f794878664d135dda07560491ea68d9a0423e15e94d->leave($__internal_f5008bff9257f5229d4c2f794878664d135dda07560491ea68d9a0423e15e94d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:edituser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 195,  233 => 165,  215 => 150,  190 => 128,  178 => 119,  167 => 111,  157 => 104,  146 => 96,  137 => 90,  133 => 89,  123 => 81,  119 => 80,  40 => 3,  34 => 2,  11 => 1,);
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
                <div style=\"min-height:1548px\" class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Form Stuff</span>
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
                   
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                          
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class=\"portlet light portlet-fit portlet-form bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Basic Validation   
                                                                                  
                                        </span>
                                    </div>
                                    <div class=\"actions\">
                                        <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm active\">
                                                <input name=\"options\" class=\"toggle\" id=\"option1\" type=\"radio\">Actions</label>
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm\">
                                                <input name=\"options\" class=\"toggle\" id=\"option2\" type=\"radio\">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <!-- BEGIN FORM-->
                                     {% for items in data%}
                                        

                                    <form novalidate=\"novalidate\" method=\"post\" action=\"/update\" id=\"form_sample_1\" class=\"form-horizontal\">
                                        <div class=\"form-body\">
                                            <div class=\"alert alert-danger display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                            <div class=\"alert alert-success display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>
                                                <input name=\"id\" data-required=\"1\"  type=\"hidden\" value=\"{{ attribute(items,'id') }}\"> 
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" >
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">FullName
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"fullname\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"{{ attribute(items,'fullname') }}\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Email
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"email\" class=\"form-control\" type=\"text\" value=\"{{ attribute(items,'email') }}\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Address
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"address\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"{{ attribute(items,'address') }}\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">City/Town
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"city\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"{{ attribute(items,'city') }}\"> </div>
                                            </div>
                                                                            
                                            
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"country\" value=\"{{ attribute(items,'country') }}\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"HK\">Hong Kong</option>
                                                        <option value=\"HU\">Hungary</option>
                                                        <option value=\"IS\">Iceland</option>
                                                        <option value=\"IN\">India</option>
                                                        <option value=\"ID\">Indonesia</option>
                                                        <option value=\"IR\">Iran (Islamic Republic of)</option>
                                                        <option value=\"IQ\">Iraq</option>
                                                        <option value=\"IE\">Ireland</option>
                                                        <option value=\"IL\">Israel</option>
                                                        <option value=\"IT\">Italy</option>
                                                        <option value=\"JM\">Jamaica</option>
                                                        <option value=\"JP\">Japan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Role
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"role\" value=\"{{ attribute(items,'isadmin') }}\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"1\">admin</option>
                                                        <option value=\"2\">approver</option>
                                                        <option value=\"3\">editor</option>
                                                        <option value=\"4\">user</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Username
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"username\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"{{ attribute(items,'username') }}\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"password\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Re-type Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"rpassword\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>
                                                                                        
                                        </div>
                                        <div class=\"form-actions\">
                                            <div class=\"row\">
                                                <div class=\"col-md-offset-3 col-md-9\">
                                                    <button type=\"submit\" class=\"btn green\">Submit</button>

                                                    
                                                    <a href=\"/admin/user\" class=\"btn grey-salsa btn-outline\" role=\"button\">Cancel </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                     {% endfor %}
                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                           
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
{% endblock %}", "AdminBundle:Admin:edituser.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/edituser.html.twig");
    }
}
