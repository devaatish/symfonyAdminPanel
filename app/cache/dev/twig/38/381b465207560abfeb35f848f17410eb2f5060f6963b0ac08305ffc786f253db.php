<?php

/* AdminBundle:Admin:displayusers.html.twig */
class __TwigTemplate_68c1a9e38a52d2b87b2edb19fef32855455b091c3d3fa05e682ce3421df43dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:displayusers.html.twig", 1);
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
        $__internal_ad4139311deaf288da7364ce13fb10151bbb77cb39cf7cd75e992934769e93fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4139311deaf288da7364ce13fb10151bbb77cb39cf7cd75e992934769e93fe->enter($__internal_ad4139311deaf288da7364ce13fb10151bbb77cb39cf7cd75e992934769e93fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:displayusers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4139311deaf288da7364ce13fb10151bbb77cb39cf7cd75e992934769e93fe->leave($__internal_ad4139311deaf288da7364ce13fb10151bbb77cb39cf7cd75e992934769e93fe_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d249cb3525ea3c18ea0d2cc4c9c1b97de811aeddfaec77dbe0c097bf1eef7bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d249cb3525ea3c18ea0d2cc4c9c1b97de811aeddfaec77dbe0c097bf1eef7bb8->enter($__internal_d249cb3525ea3c18ea0d2cc4c9c1b97de811aeddfaec77dbe0c097bf1eef7bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div style=\"min-height:1402px\" class=\"page-content\">
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
                                <a href=\"#\">Tables</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Datatables</span>
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
                    <h3 class=\"page-title\"> Editable Datatables
                        <small>editable datatable samples</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light portlet-fit bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Editable Table</span>
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
                                    <div class=\"table-toolbar\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group\">
                                                    <button id=\"sample_editable_1_new\" class=\"btn green\"> Add New
                                                        <i class=\"fa fa-plus\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group pull-right\">
                                                    <button class=\"btn green btn-outline dropdown-toggle\" data-toggle=\"dropdown\">Tools
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\">
                                                        <li>
                                                            <a href=\"javascript:;\"> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"dataTables_wrapper no-footer\" id=\"sample_editable_1_wrapper\"><div class=\"row\"><div class=\"col-md-6 col-sm-6\"><div id=\"sample_editable_1_length\" class=\"dataTables_length\"><label> <select class=\"form-control input-sm input-xsmall input-inline\" aria-controls=\"sample_editable_1\" name=\"sample_editable_1_length\"><option value=\"5\">5</option><option value=\"15\">15</option><option value=\"20\">20</option><option value=\"-1\">All</option></select> records</label></div></div><div class=\"col-md-6 col-sm-6\"><div class=\"dataTables_filter\" id=\"sample_editable_1_filter\"><label>Search:<input aria-controls=\"sample_editable_1\" placeholder=\"\" class=\"form-control input-sm input-small input-inline\" type=\"search\"></label></div></div></div><div class=\"table-scrollable\"><table style=\"width: 887px;\" aria-describedby=\"sample_editable_1_info\" role=\"grid\" class=\"table table-striped table-hover table-bordered dataTable no-footer\" id=\"sample_editable_1\">
                                        <thead>
                                            <tr role=\"row\"><th aria-sort=\"ascending\" aria-label=\" Username : activate to sort column descending\" style=\"width: 123px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting_asc\"> Username </th><th aria-label=\" Full Name : activate to sort column ascending\" style=\"width: 145px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Full Name </th><th aria-label=\" Points : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Points </th><th aria-label=\" Notes : activate to sort column ascending\" style=\"width: 92px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Notes </th><th aria-label=\" Edit : activate to sort column ascending\" style=\"width: 62px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Edit </th><th aria-label=\" Delete : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Delete </th></tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        <tr class=\"odd\" role=\"row\"><td class=\"sorting_1\"></td><td class=\"\"></td><td></td><td></td><td></td><td></td></tr><tr class=\"even\" role=\"row\">
                                                <td class=\"sorting_1\"> alex </td>
                                                <td class=\"\"> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td class=\"center\"> power user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr><tr class=\"odd\" role=\"row\">
                                                <td class=\"sorting_1\"> alex </td>
                                                <td class=\"\"> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td class=\"center\"> power user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr><tr class=\"even\" role=\"row\">
                                                <td class=\"sorting_1\"> gist124 </td>
                                                <td class=\"\"> Nick Roberts </td>
                                                <td> 62 </td>
                                                <td class=\"center\"> new user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr><tr class=\"odd\" role=\"row\">
                                                <td class=\"sorting_1\"> goldweb </td>
                                                <td class=\"\"> Sergio Jackson </td>
                                                <td> 132 </td>
                                                <td class=\"center\"> elite user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr></tbody>
                                    </table></div><div class=\"row\"><div class=\"col-md-5 col-sm-5\"><div aria-live=\"polite\" role=\"status\" id=\"sample_editable_1_info\" class=\"dataTables_info\">Showing 1 to 5 of 8 entries</div></div><div class=\"col-md-7 col-sm-7\"><div id=\"sample_editable_1_paginate\" class=\"dataTables_paginate paging_bootstrap_number\"><ul style=\"visibility: visible;\" class=\"pagination\"><li class=\"prev disabled\"><a href=\"#\" title=\"Prev\"><i class=\"fa fa-angle-left\"></i></a></li><li class=\"active\"><a href=\"#\">1</a></li><li><a href=\"#\">2</a></li><li class=\"next\"><a href=\"#\" title=\"Next\"><i class=\"fa fa-angle-right\"></i></a></li></ul></div></div></div></div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
";
        
        $__internal_d249cb3525ea3c18ea0d2cc4c9c1b97de811aeddfaec77dbe0c097bf1eef7bb8->leave($__internal_d249cb3525ea3c18ea0d2cc4c9c1b97de811aeddfaec77dbe0c097bf1eef7bb8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:displayusers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
                <div style=\"min-height:1402px\" class=\"page-content\">
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
                                <a href=\"#\">Tables</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Datatables</span>
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
                    <h3 class=\"page-title\"> Editable Datatables
                        <small>editable datatable samples</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light portlet-fit bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Editable Table</span>
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
                                    <div class=\"table-toolbar\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group\">
                                                    <button id=\"sample_editable_1_new\" class=\"btn green\"> Add New
                                                        <i class=\"fa fa-plus\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group pull-right\">
                                                    <button class=\"btn green btn-outline dropdown-toggle\" data-toggle=\"dropdown\">Tools
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\">
                                                        <li>
                                                            <a href=\"javascript:;\"> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"dataTables_wrapper no-footer\" id=\"sample_editable_1_wrapper\"><div class=\"row\"><div class=\"col-md-6 col-sm-6\"><div id=\"sample_editable_1_length\" class=\"dataTables_length\"><label> <select class=\"form-control input-sm input-xsmall input-inline\" aria-controls=\"sample_editable_1\" name=\"sample_editable_1_length\"><option value=\"5\">5</option><option value=\"15\">15</option><option value=\"20\">20</option><option value=\"-1\">All</option></select> records</label></div></div><div class=\"col-md-6 col-sm-6\"><div class=\"dataTables_filter\" id=\"sample_editable_1_filter\"><label>Search:<input aria-controls=\"sample_editable_1\" placeholder=\"\" class=\"form-control input-sm input-small input-inline\" type=\"search\"></label></div></div></div><div class=\"table-scrollable\"><table style=\"width: 887px;\" aria-describedby=\"sample_editable_1_info\" role=\"grid\" class=\"table table-striped table-hover table-bordered dataTable no-footer\" id=\"sample_editable_1\">
                                        <thead>
                                            <tr role=\"row\"><th aria-sort=\"ascending\" aria-label=\" Username : activate to sort column descending\" style=\"width: 123px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting_asc\"> Username </th><th aria-label=\" Full Name : activate to sort column ascending\" style=\"width: 145px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Full Name </th><th aria-label=\" Points : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Points </th><th aria-label=\" Notes : activate to sort column ascending\" style=\"width: 92px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Notes </th><th aria-label=\" Edit : activate to sort column ascending\" style=\"width: 62px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Edit </th><th aria-label=\" Delete : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Delete </th></tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        <tr class=\"odd\" role=\"row\"><td class=\"sorting_1\"></td><td class=\"\"></td><td></td><td></td><td></td><td></td></tr><tr class=\"even\" role=\"row\">
                                                <td class=\"sorting_1\"> alex </td>
                                                <td class=\"\"> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td class=\"center\"> power user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr><tr class=\"odd\" role=\"row\">
                                                <td class=\"sorting_1\"> alex </td>
                                                <td class=\"\"> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td class=\"center\"> power user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr><tr class=\"even\" role=\"row\">
                                                <td class=\"sorting_1\"> gist124 </td>
                                                <td class=\"\"> Nick Roberts </td>
                                                <td> 62 </td>
                                                <td class=\"center\"> new user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr><tr class=\"odd\" role=\"row\">
                                                <td class=\"sorting_1\"> goldweb </td>
                                                <td class=\"\"> Sergio Jackson </td>
                                                <td> 132 </td>
                                                <td class=\"center\"> elite user </td>
                                                <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr></tbody>
                                    </table></div><div class=\"row\"><div class=\"col-md-5 col-sm-5\"><div aria-live=\"polite\" role=\"status\" id=\"sample_editable_1_info\" class=\"dataTables_info\">Showing 1 to 5 of 8 entries</div></div><div class=\"col-md-7 col-sm-7\"><div id=\"sample_editable_1_paginate\" class=\"dataTables_paginate paging_bootstrap_number\"><ul style=\"visibility: visible;\" class=\"pagination\"><li class=\"prev disabled\"><a href=\"#\" title=\"Prev\"><i class=\"fa fa-angle-left\"></i></a></li><li class=\"active\"><a href=\"#\">1</a></li><li><a href=\"#\">2</a></li><li class=\"next\"><a href=\"#\" title=\"Next\"><i class=\"fa fa-angle-right\"></i></a></li></ul></div></div></div></div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
{% endblock %}", "AdminBundle:Admin:displayusers.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/displayusers.html.twig");
    }
}