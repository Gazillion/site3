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

/* base.html.twig */
class __TwigTemplate_b181ad9c36a028d62751423ab6b7f3c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\"
    />
    <link rel=\"stylesheet\"
      href=\"https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css\"
    />
    <link rel=\"stylesheet\"
      href=\"https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap4.min.css\"
    />
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <script type=\"text/javascript\" language=\"javascript\" src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" >
        \$(document).ready(function() {
            var table = \$('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            } );

            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        
                var x = 1; //Initial field counter is 1
                
            var maxField = 2; //Input fields increment limitation
            var addButton = \$('#add-coverages'); //Add button selector
            var wrapper = \$('.coverages-container'); //Input field wrapper
            var fieldHTML = '<div class=\"border-top my-3\"></div>' + 
                              '<div class=\"form-group\"><label for=\"coverages_type[]\">Type:</label><input type=\"text\" class=\"form-control\" name=\"coverages_type[]\"> </div>' + 
                              '<div class=\"form-group\"><label for=\"coverages_limit[]\">Limit:</label><input type=\"text\" class=\"form-control\" name=\"coverages_limit[]\"> </div>' + 
                              '<div class=\"form-group\"><label for=\"coverages_deductible[]\">Deductible:</label><input type=\"text\" class=\"form-control\" name=\"coverages_deductible[]\"> </div>'
                      ; //New input field html 
            
            // Once add button is clicked
            \$(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increase field counter
                    \$(wrapper).append(fieldHTML); //Add field html
                }else{
                    alert('A maximum of '+maxField+' fields are allowed to be added. ');
                }
            });
            
            \$(\".button-click\").click(function(){
                
                var myBookId = \$(this).data('id');
                var message1 = \"Are you sure to delete policy \" + myBookId + \" ?\"
                \$(\".modal-body #bookId\").html( message1 );
            });
            
            \$(\"#policy-submit\").click(function(){
                
                // Get form data
                var formData = {
                    policyNo: \$(\"select[name=policyNo]\").val(),
                    policyStatus: \$(\"select[name=policyStatus]\").val(),
                    policyType: \$(\"select[name=policyType]\").val(),
                    policyEffectiveDate: \$(\"select[name=policyEffectiveDate]\").val(),
                    policyExpirationDate: \$(\"select[name=policyExpirationDate]\").val(),
                    policyHolder: { 
                        firstName: \$(\"input[name=firstName]\").val(),
                        lastName: \$(\"input[name=lastName]\").val(),
                        address: {  
                            street: \$(\"input[name=street]\").val(),
                            city: \$(\"input[name=city]\").val(),
                            state: \$(\"input[name=state]\").val(),
                            zip: \$(\"input[name=zip]\").val(),
                        },    
                    },
                    drivers: [ { 
                        DfirstName: \$(\"input[name=DfirstName]\").val(),
                        DlastName: \$(\"input[name=DlastName]\").val(),
                        Dage: \$(\"input[name=Dage]\").val(),
                        Dgender: \$(\"select[name=Dgender]\").val(),
                        DmaritalStatus: \$(\"select[name=DmaritalStatus]\").val(),
                        licenseNumber: \$(\"input[name=licenseNumber]\").val(),
                        licenseState: \$(\"input[name=licenseState]\").val(),
                        licenseStatus: \$(\"select[name=licenseStatus]\").val(),
                        licenseEffectiveDate: \$(\"input[name=licenseEffectiveDate]\").val(),
                        licenseExpirationDate: \$(\"input[name=licenseExpirationDate]\").val(),
                        licenseClass: \$(\"input[name=licenseClass]\").val(),
                    }],
                    vehicles: [{ 
                        vYear: \$(\"input[name=vYear\").val(),
                        vMake: \$(\"input[name=vMake\").val(),
                        vModel: \$(\"input[name=vModel\").val(),
                        vVin: \$(\"input[name=vVin\").val(),
                        vUsage: \$(\"input[name=vUsage\").val(),
                        vPrimaryUse: \$(\"input[name=vPrimaryUse\").val(),
                        vAnnualMileage: \$(\"input[name=vAnnualMileage\").val(),
                        vLeased: \$(\"input[name=vLeased\").val(),
                        vGAStreet: \$(\"input[name=vGAStreet\").val(),
                        vGACity: \$(\"input[name=vGACity\").val(),
                        vGAState: \$(\"input[name=vGAState\").val(),
                        vGAZip: \$(\"input[name=vGAZip\").val(),
                        coverages: [{ 
                            vCoveragesType: \$(\"input[name=vCoveragesType]\").val(),
                            vCoveragesLimit: \$(\"input[name=vCoveragesLimit]\").val(),
                            vCoveragesDeductible: \$(\"input[name=vCoveragesDeductible]\").val(),
                        }],
                    }],
                };
                
                // Make AJAX request
                \$.ajax({
                    type: 'POST',
                    url: 'service/policy/create',
                    contentType: 'application/json;charset=utf-8',
                    data: JSON.stringify(formData),
                    success: function(response) {
                        
                        alert('Application send');
                        console.log(response);
                        location.reload();
                        // Handle success, e.g., show a success message
                    },
                    error: function(error) {
                        console.error(error);
                        // Handle error, e.g., show an error message
                    }
                });
                
                //console.log( formData );
                
            });
            
            
        } );
    </script>
  </head>
  <body>
    <nav
      class=\"navbar navbar-expand-lg navbar-light bag-light\"
      style=\"height: 70px;\"
    >
      <a class=\"navbar-brand\" href=\"#\">Car4Sure</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\"></div>
      <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 146
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146)) {
            // line 147
            echo "                
                <AmpContent>
                ";
            // line 150
            echo "                <li><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                </AmpContent> 
          
            ";
        } else {
            // line 153
            echo "   
                <NonAmpContent>
                    <li><a class=\"nav-link\" href=\"";
            // line 155
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
                    <li>
                      <a class=\"nav-link\" href=\"";
            // line 157
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">Register</a>
                    </li>
                </NonAmpContent>
            ";
        }
        // line 160
        echo " 
          
          
        

        
      </ul>
    </nav>
    ";
        // line 168
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap4.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://datatables.net/extensions/buttons/examples/styling/bootstrap4.html\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js\"></script>
  </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "             
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 168
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  285 => 168,  277 => 16,  270 => 15,  257 => 6,  238 => 169,  234 => 168,  224 => 160,  217 => 157,  212 => 155,  208 => 153,  200 => 150,  196 => 147,  194 => 146,  64 => 18,  62 => 15,  50 => 6,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\"
    />
    <link rel=\"stylesheet\"
      href=\"https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css\"
    />
    <link rel=\"stylesheet\"
      href=\"https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap4.min.css\"
    />
    {% block stylesheets %}
             
    {% endblock %}
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" >
        \$(document).ready(function() {
            var table = \$('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            } );

            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        
                var x = 1; //Initial field counter is 1
                
            var maxField = 2; //Input fields increment limitation
            var addButton = \$('#add-coverages'); //Add button selector
            var wrapper = \$('.coverages-container'); //Input field wrapper
            var fieldHTML = '<div class=\"border-top my-3\"></div>' + 
                              '<div class=\"form-group\"><label for=\"coverages_type[]\">Type:</label><input type=\"text\" class=\"form-control\" name=\"coverages_type[]\"> </div>' + 
                              '<div class=\"form-group\"><label for=\"coverages_limit[]\">Limit:</label><input type=\"text\" class=\"form-control\" name=\"coverages_limit[]\"> </div>' + 
                              '<div class=\"form-group\"><label for=\"coverages_deductible[]\">Deductible:</label><input type=\"text\" class=\"form-control\" name=\"coverages_deductible[]\"> </div>'
                      ; //New input field html 
            
            // Once add button is clicked
            \$(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increase field counter
                    \$(wrapper).append(fieldHTML); //Add field html
                }else{
                    alert('A maximum of '+maxField+' fields are allowed to be added. ');
                }
            });
            
            \$(\".button-click\").click(function(){
                
                var myBookId = \$(this).data('id');
                var message1 = \"Are you sure to delete policy \" + myBookId + \" ?\"
                \$(\".modal-body #bookId\").html( message1 );
            });
            
            \$(\"#policy-submit\").click(function(){
                
                // Get form data
                var formData = {
                    policyNo: \$(\"select[name=policyNo]\").val(),
                    policyStatus: \$(\"select[name=policyStatus]\").val(),
                    policyType: \$(\"select[name=policyType]\").val(),
                    policyEffectiveDate: \$(\"select[name=policyEffectiveDate]\").val(),
                    policyExpirationDate: \$(\"select[name=policyExpirationDate]\").val(),
                    policyHolder: { 
                        firstName: \$(\"input[name=firstName]\").val(),
                        lastName: \$(\"input[name=lastName]\").val(),
                        address: {  
                            street: \$(\"input[name=street]\").val(),
                            city: \$(\"input[name=city]\").val(),
                            state: \$(\"input[name=state]\").val(),
                            zip: \$(\"input[name=zip]\").val(),
                        },    
                    },
                    drivers: [ { 
                        DfirstName: \$(\"input[name=DfirstName]\").val(),
                        DlastName: \$(\"input[name=DlastName]\").val(),
                        Dage: \$(\"input[name=Dage]\").val(),
                        Dgender: \$(\"select[name=Dgender]\").val(),
                        DmaritalStatus: \$(\"select[name=DmaritalStatus]\").val(),
                        licenseNumber: \$(\"input[name=licenseNumber]\").val(),
                        licenseState: \$(\"input[name=licenseState]\").val(),
                        licenseStatus: \$(\"select[name=licenseStatus]\").val(),
                        licenseEffectiveDate: \$(\"input[name=licenseEffectiveDate]\").val(),
                        licenseExpirationDate: \$(\"input[name=licenseExpirationDate]\").val(),
                        licenseClass: \$(\"input[name=licenseClass]\").val(),
                    }],
                    vehicles: [{ 
                        vYear: \$(\"input[name=vYear\").val(),
                        vMake: \$(\"input[name=vMake\").val(),
                        vModel: \$(\"input[name=vModel\").val(),
                        vVin: \$(\"input[name=vVin\").val(),
                        vUsage: \$(\"input[name=vUsage\").val(),
                        vPrimaryUse: \$(\"input[name=vPrimaryUse\").val(),
                        vAnnualMileage: \$(\"input[name=vAnnualMileage\").val(),
                        vLeased: \$(\"input[name=vLeased\").val(),
                        vGAStreet: \$(\"input[name=vGAStreet\").val(),
                        vGACity: \$(\"input[name=vGACity\").val(),
                        vGAState: \$(\"input[name=vGAState\").val(),
                        vGAZip: \$(\"input[name=vGAZip\").val(),
                        coverages: [{ 
                            vCoveragesType: \$(\"input[name=vCoveragesType]\").val(),
                            vCoveragesLimit: \$(\"input[name=vCoveragesLimit]\").val(),
                            vCoveragesDeductible: \$(\"input[name=vCoveragesDeductible]\").val(),
                        }],
                    }],
                };
                
                // Make AJAX request
                \$.ajax({
                    type: 'POST',
                    url: 'service/policy/create',
                    contentType: 'application/json;charset=utf-8',
                    data: JSON.stringify(formData),
                    success: function(response) {
                        
                        alert('Application send');
                        console.log(response);
                        location.reload();
                        // Handle success, e.g., show a success message
                    },
                    error: function(error) {
                        console.error(error);
                        // Handle error, e.g., show an error message
                    }
                });
                
                //console.log( formData );
                
            });
            
            
        } );
    </script>
  </head>
  <body>
    <nav
      class=\"navbar navbar-expand-lg navbar-light bag-light\"
      style=\"height: 70px;\"
    >
      <a class=\"navbar-brand\" href=\"#\">Car4Sure</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\"></div>
      <ul class=\"nav navbar-nav navbar-right\">
            {% if app.user %}
                
                <AmpContent>
                {#<li><a class=\"nav-link\" href=\"{{ path('app_list') }}\">View List</a></li>#}
                <li><a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Logout</a></li>
                </AmpContent> 
          
            {% else %}   
                <NonAmpContent>
                    <li><a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a></li>
                    <li>
                      <a class=\"nav-link\" href=\"{{ path('registration') }}\">Register</a>
                    </li>
                </NonAmpContent>
            {% endif %} 
          
          
        

        
      </ul>
    </nav>
    {% block body %}{% endblock %} {% block javascripts %}{% endblock %}
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap4.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://datatables.net/extensions/buttons/examples/styling/bootstrap4.html\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js\"></script>
  </body>
</html>", "base.html.twig", "/Users/jackrima/Sites/site2/templates/base.html.twig");
    }
}
