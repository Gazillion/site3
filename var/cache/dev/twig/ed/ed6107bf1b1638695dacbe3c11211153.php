<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* list/individual.html.twig */
class __TwigTemplate_6e1569f32a5380ce2900a07c61ae374d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/individual.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list/individual.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card bg-light mb-3 mt-3\">
                <div class=\"card-body\">
                    <div class=\"card-header\">POLICY DETAILS 
                        
                        ";
        // line 11
        if (((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 11, $this->source); })()) == "false")) {
            // line 12
            echo "                            <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"policy-submit\"  style=' float: right;'>SUBMIT </button>
                        ";
        } else {
            // line 14
            echo "                            <button type=\"button\" class=\"btn btn-success btn-sm\" style=' float: right;'>DOWNLAOD PDF </button>   
                        ";
        }
        // line 16
        echo "                        
                    </div>
                    
                        ";
        // line 19
        if (((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 19, $this->source); })()) == "false")) {
            // line 20
            echo "                            <h4>Please enter your information below for approval:</h4>
                        ";
        } else {
            // line 22
            echo "                            <h4>Your can down your contract:</h4>    
                        ";
        }
        // line 24
        echo "                        <AmpContent>
                            <form action=\"/action_page.php\">
                                <div class=\"container\">

                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"policyType\">Policy Type:</label>
                                                <select class=\"form-control\" id=\"policyType\" name=\"policyType\">
                                                    <option value=\"Auto\">Auto</option>
                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"policyNumber\">Policy Number</label>
                                                <input type=\"text\" class=\"form-control\" id=\"policyNo\" name=\"policyNo\" disabled>
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"policyEffectiveDate\">Policy Effective Date</label>
                                                <input type=\"date\" class=\"form-control\" id=\"policyEffectiveDate\" name=\"policyEffectiveDate\" disabled>
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"policyExpirationDate\">Policy Expiration Date</label>
                                                <input type=\"date\" class=\"form-control\" id=\"policyExpirationDate\" name=\"policyExpirationDate\" disabled>
                                            </div>
                                        </div>    
                                        <div class=\"col\">
                                            
                                            <div class=\"form-group\">
                                                <label for=\"sel1\">Status:</label>
                                                <select class=\"form-control\" id=\"policyStatus\" disabled>
                                                    <option>Deactivate</option>
                                                    <option>Activate</option>
                                                </select>
                                            </div>
                                            
                                            <div class=\"form-group\">
                                                <label for=\"firstName\">Policy Holder:: First Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "fname", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"lastName\">Policy Holder:: Last Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\"  value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "lname", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                                            </div>

                                        </div>
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"street\">Street:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\"  value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "street", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"city\">City:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 78, $this->source); })()), "city", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"state\">State:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"state\" name=\"state\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()), "state", [], "any", false, false, false, 82), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"zip\">Zip:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"zip\" name=\"zip\"  value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "zip", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
                                            </div>
                                        </div>`    
                                    </div>    
                                </div>
                                <div class=\"border-top my-3\"></div>
                                <div class=\"container\">
                                    <h4>Drivers <button type=\"button\" class=\"btn btn-success btn-sm\" disabled>Add One more</button></h4>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"DfirstName\">First Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"DfirstName\" name=\"DfirstName\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"DlastName\">Last Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"DlastName\" name=\"DlastName\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"Dage\">Age:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"Dage\" name=\"Dage\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"sel1\">Gender:</label>
                                                <select class=\"form-control\" id=\"Dgender\" name=\"Dgender\">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"DmaritalStatus\">Marital Status:</label>
                                                <select class=\"form-control\" id=\"DmaritalStatus\" name=\"DmaritalStatus\">
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                </select>
                                            </div>

                                        </div> 

                                        <div class=\"col\">

                                            <div class=\"form-group\">
                                                <label for=\"licenseNumber\">License Number:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseNumber\" name=\"licenseNumber\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"licenseState\">License State:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseState\" name=\"licenseState\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"licenseStatus\">License Status:</label>
                                                <select class=\"form-control\" id=\"licenseStatus\" name=\"licenseStatus\">
                                                    <option>Valid</option>
                                                    <option>Unvalid</option>
                                                </select>
                                            </div>



                                        </div>
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"licenseEffectiveDate\">License Effective Date:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseEffectiveDate\" name=\"licenseEffectiveDate\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"licenseExpirationDate\">License Expiration Date:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseExpirationDate\" name=\"licenseExpirationDate\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"licenseClass\">License Class:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseClass\" name=\"licenseClass\">
                                            </div>
                                        </div>`    
                                    </div>    
                                </div>
                                <div class=\"border-top my-3\"></div>
                                <div class=\"container\">
                                    <h4>Vehicles <button type=\"button\" class=\"btn btn-success btn-sm\" disabled>Add One more</button></h4>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"vYear\">Year:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vYear\" name=\"vYear\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vMake\">Make:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vMake\" name=\"vMake\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vModel\">Model:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vModel\" name=\"vModel\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vVin\">Vin:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vVin\" name=\"vVin\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vUsage\">Usage:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vUsage\" name=\"vUsage\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vPrimaryUse\">Primary Use:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vPrimaryUse\" name=\"vPrimaryUse\">
                                            </div>

                                        </div> 

                                        <div class=\"col\">

                                            <div class=\"form-group\">
                                                <label for=\"vAnnualMileage\">Annual Mileage:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vAnnualMileage\" name=\"vAnnualMileage\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vLeased\">Leased:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vLeased\" name=\"vLeased\">
                                            </div>
                                            <h4>Garaging Address</h4>
                                            <div class=\"form-group\">
                                                <label for=\"vGAStreet\">Street:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGAStreet\" name=\"vGAStreet\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vGACity\">City:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGACity\" name=\"vGACity\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vGAState\">State:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGAState\" name=\"vGAState\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vGAZip\">Zip:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGAZip\" name=\"vGAZip\">
                                            </div>



                                        </div>
                                        <div class=\"col\">

                                            <h4>Coverages <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"add-coverages\"  disabled>Add One more</button></h4>
                                            <div class=\"coverages-container\">

                                            <div class=\"form-group\">
                                                <label for=\"vCoveragesType[]\">Type:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"vCoveragesType\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vCoveragesLimit[]\">Limit:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"vCoveragesLimit\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vCoveragesDeductible[]\">Deductible:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"vCoveragesDeductible\">
                                            </div>
                                            </div>    
                                        </div>`    
                                    </div>    
                                </div>
                            </form>
                        
                        
                        
                        </NonAmpContent>       
                </div>
            </div>
        </div>
    </div>
</div>        

            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "list/individual.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  172 => 86,  165 => 82,  158 => 78,  151 => 74,  141 => 67,  134 => 63,  93 => 24,  89 => 22,  85 => 20,  83 => 19,  78 => 16,  74 => 14,  70 => 12,  68 => 11,  59 => 4,  52 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/list/index.html.twig #} 
{% extends 'base.html.twig' %} 
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card bg-light mb-3 mt-3\">
                <div class=\"card-body\">
                    <div class=\"card-header\">POLICY DETAILS 
                        
                        {% if details == 'false' %}
                            <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"policy-submit\"  style=' float: right;'>SUBMIT </button>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-success btn-sm\" style=' float: right;'>DOWNLAOD PDF </button>   
                        {% endif %}
                        
                    </div>
                    
                        {% if details == 'false' %}
                            <h4>Please enter your information below for approval:</h4>
                        {% else %}
                            <h4>Your can down your contract:</h4>    
                        {% endif %}
                        <AmpContent>
                            <form action=\"/action_page.php\">
                                <div class=\"container\">

                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"policyType\">Policy Type:</label>
                                                <select class=\"form-control\" id=\"policyType\" name=\"policyType\">
                                                    <option value=\"Auto\">Auto</option>
                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"policyNumber\">Policy Number</label>
                                                <input type=\"text\" class=\"form-control\" id=\"policyNo\" name=\"policyNo\" disabled>
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"policyEffectiveDate\">Policy Effective Date</label>
                                                <input type=\"date\" class=\"form-control\" id=\"policyEffectiveDate\" name=\"policyEffectiveDate\" disabled>
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"policyExpirationDate\">Policy Expiration Date</label>
                                                <input type=\"date\" class=\"form-control\" id=\"policyExpirationDate\" name=\"policyExpirationDate\" disabled>
                                            </div>
                                        </div>    
                                        <div class=\"col\">
                                            
                                            <div class=\"form-group\">
                                                <label for=\"sel1\">Status:</label>
                                                <select class=\"form-control\" id=\"policyStatus\" disabled>
                                                    <option>Deactivate</option>
                                                    <option>Activate</option>
                                                </select>
                                            </div>
                                            
                                            <div class=\"form-group\">
                                                <label for=\"firstName\">Policy Holder:: First Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" value=\"{{ data.fname }}\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"lastName\">Policy Holder:: Last Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\"  value=\"{{ data.lname }}\">
                                            </div>

                                        </div>
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"street\">Street:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\"  value=\"{{ data.street }}\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"city\">City:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" value=\"{{ data.city }}\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"state\">State:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"state\" name=\"state\" value=\"{{ data.state }}\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"zip\">Zip:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"zip\" name=\"zip\"  value=\"{{ data.zip }}\">
                                            </div>
                                        </div>`    
                                    </div>    
                                </div>
                                <div class=\"border-top my-3\"></div>
                                <div class=\"container\">
                                    <h4>Drivers <button type=\"button\" class=\"btn btn-success btn-sm\" disabled>Add One more</button></h4>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"DfirstName\">First Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"DfirstName\" name=\"DfirstName\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"DlastName\">Last Name:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"DlastName\" name=\"DlastName\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"Dage\">Age:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"Dage\" name=\"Dage\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"sel1\">Gender:</label>
                                                <select class=\"form-control\" id=\"Dgender\" name=\"Dgender\">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"DmaritalStatus\">Marital Status:</label>
                                                <select class=\"form-control\" id=\"DmaritalStatus\" name=\"DmaritalStatus\">
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                </select>
                                            </div>

                                        </div> 

                                        <div class=\"col\">

                                            <div class=\"form-group\">
                                                <label for=\"licenseNumber\">License Number:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseNumber\" name=\"licenseNumber\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"licenseState\">License State:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseState\" name=\"licenseState\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"licenseStatus\">License Status:</label>
                                                <select class=\"form-control\" id=\"licenseStatus\" name=\"licenseStatus\">
                                                    <option>Valid</option>
                                                    <option>Unvalid</option>
                                                </select>
                                            </div>



                                        </div>
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"licenseEffectiveDate\">License Effective Date:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseEffectiveDate\" name=\"licenseEffectiveDate\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"licenseExpirationDate\">License Expiration Date:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseExpirationDate\" name=\"licenseExpirationDate\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"licenseClass\">License Class:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"licenseClass\" name=\"licenseClass\">
                                            </div>
                                        </div>`    
                                    </div>    
                                </div>
                                <div class=\"border-top my-3\"></div>
                                <div class=\"container\">
                                    <h4>Vehicles <button type=\"button\" class=\"btn btn-success btn-sm\" disabled>Add One more</button></h4>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <label for=\"vYear\">Year:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vYear\" name=\"vYear\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vMake\">Make:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vMake\" name=\"vMake\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vModel\">Model:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vModel\" name=\"vModel\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vVin\">Vin:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vVin\" name=\"vVin\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vUsage\">Usage:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vUsage\" name=\"vUsage\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vPrimaryUse\">Primary Use:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vPrimaryUse\" name=\"vPrimaryUse\">
                                            </div>

                                        </div> 

                                        <div class=\"col\">

                                            <div class=\"form-group\">
                                                <label for=\"vAnnualMileage\">Annual Mileage:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vAnnualMileage\" name=\"vAnnualMileage\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vLeased\">Leased:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vLeased\" name=\"vLeased\">
                                            </div>
                                            <h4>Garaging Address</h4>
                                            <div class=\"form-group\">
                                                <label for=\"vGAStreet\">Street:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGAStreet\" name=\"vGAStreet\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vGACity\">City:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGACity\" name=\"vGACity\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vGAState\">State:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGAState\" name=\"vGAState\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"vGAZip\">Zip:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"vGAZip\" name=\"vGAZip\">
                                            </div>



                                        </div>
                                        <div class=\"col\">

                                            <h4>Coverages <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"add-coverages\"  disabled>Add One more</button></h4>
                                            <div class=\"coverages-container\">

                                            <div class=\"form-group\">
                                                <label for=\"vCoveragesType[]\">Type:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"vCoveragesType\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vCoveragesLimit[]\">Limit:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"vCoveragesLimit\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"vCoveragesDeductible[]\">Deductible:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"vCoveragesDeductible\">
                                            </div>
                                            </div>    
                                        </div>`    
                                    </div>    
                                </div>
                            </form>
                        
                        
                        
                        </NonAmpContent>       
                </div>
            </div>
        </div>
    </div>
</div>        

            
{% endblock %}", "list/individual.html.twig", "/Users/jackrima/Sites/site2/templates/list/individual.html.twig");
    }
}
