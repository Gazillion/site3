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

/* _modalView.html.twig */
class __TwigTemplate_18b047dba32dd273c5fad5d101d840a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modalView.html.twig"));

        // line 2
        echo "<!-- The Modal -->
    <div class=\"modal fade\" id=\"myView\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">

            <!-- Modal Header -->
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>

            <!-- Modal body -->
            <div class=\"modal-body\">
                <form action=\"/action_page.php\">
                    <div class=\"container\">
                        
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Policy Type:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Auto</option>
                                    </select>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Policy Effective Date</label>
                                    <input type=\"date\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Policy Expiration Date</label>
                                    <input type=\"date\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Status:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Activate</option>
                                        <option>Deactivate</option>
                                     
                                    </select>
                                </div>
                                
                            </div>    
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"usr\">Policy Holder:: First Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Policy Holder:: First Name:Last Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                            </div>
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Street:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">City:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">State:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Zip:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
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
                                    <label for=\"usr\">First Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Last Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Age:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Gender:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Marital Status:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                </div>
                                
                            </div> 
                            
                            <div class=\"col\">
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">License Number:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License State:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">licenseStatus:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Valid</option>
                                        <option>Unvalid</option>
                                    </select>
                                </div>
                                
                                
                                
                            </div>
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License Effective Date:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License Expiration Date:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License Class:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
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
                                    <label for=\"usr\">Year:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Make:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Model:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Vin:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Usage:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Primary Use:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                            </div> 
                            
                            <div class=\"col\">
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Annual Mileage:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Leased:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <h4>Garaging Address</h4>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Street:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">city:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">state:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Zip:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                
                                
                            </div>
                            <div class=\"col\">
                                
                                <h4>Coverages <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"add-coverages\">Add One more</button></h4>
                                <div class=\"coverages-container\">
                                
                                <div class=\"form-group\">
                                    <label for=\"coverages_type[]\">Type:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"coverages_type[]\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"coverages_limit[]\">Limit:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"coverages_limit[]\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"coverages_deductible[]\">Deductible:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"coverages_deductible[]\">
                                </div>
                                </div>    
                            </div>`    
                        </div>    
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
              <button type=\"button\" class=\"btn btn-primary\"> Save </button>
            </div>

        </div>
      </div>
    </div>  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_modalView.html.twig";
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
        return array (  49 => 9,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/_modal.html.twig #}
<!-- The Modal -->
    <div class=\"modal fade\" id=\"myView\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">

            <!-- Modal Header -->
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">{{ modalTitle }}</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>

            <!-- Modal body -->
            <div class=\"modal-body\">
                <form action=\"/action_page.php\">
                    <div class=\"container\">
                        
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Policy Type:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Auto</option>
                                    </select>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Policy Effective Date</label>
                                    <input type=\"date\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Policy Expiration Date</label>
                                    <input type=\"date\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Status:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Activate</option>
                                        <option>Deactivate</option>
                                     
                                    </select>
                                </div>
                                
                            </div>    
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"usr\">Policy Holder:: First Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Policy Holder:: First Name:Last Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                            </div>
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Street:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">City:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">State:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Zip:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
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
                                    <label for=\"usr\">First Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Last Name:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Age:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Gender:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">Marital Status:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                </div>
                                
                            </div> 
                            
                            <div class=\"col\">
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">License Number:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License State:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"sel1\">licenseStatus:</label>
                                    <select class=\"form-control\" id=\"policyType\">
                                        <option>Valid</option>
                                        <option>Unvalid</option>
                                    </select>
                                </div>
                                
                                
                                
                            </div>
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License Effective Date:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License Expiration Date:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"pwd\">License Class:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
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
                                    <label for=\"usr\">Year:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Make:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Model:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Vin:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Usage:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Primary Use:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                
                            </div> 
                            
                            <div class=\"col\">
                                
                                <div class=\"form-group\">
                                    <label for=\"usr\">Annual Mileage:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"username\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Leased:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <h4>Garaging Address</h4>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Street:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">city:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">state:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pwd\">Zip:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"pwd\" name=\"password\">
                                </div>
                                
                                
                                
                            </div>
                            <div class=\"col\">
                                
                                <h4>Coverages <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"add-coverages\">Add One more</button></h4>
                                <div class=\"coverages-container\">
                                
                                <div class=\"form-group\">
                                    <label for=\"coverages_type[]\">Type:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"coverages_type[]\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"coverages_limit[]\">Limit:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"coverages_limit[]\">
                                </div>
                                
                                <div class=\"form-group\">
                                    <label for=\"coverages_deductible[]\">Deductible:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"coverages_deductible[]\">
                                </div>
                                </div>    
                            </div>`    
                        </div>    
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
              <button type=\"button\" class=\"btn btn-primary\"> Save </button>
            </div>

        </div>
      </div>
    </div>  ", "_modalView.html.twig", "/Users/jackrima/Sites/site2/templates/_modalView.html.twig");
    }
}
