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

/* list/index.html.twig */
class __TwigTemplate_97a5cf43faf56fd04b4924b7181a1456 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list/index.html.twig", 2);
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
          <div class=\"card-header\">POLICIES <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">Create</button></div>
            <AmpContent>
            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Effec_D</th>
                        <th>Expir_D</th>
                        <th>Holder</th>
                        <th>Divers</th>
                        <th>Vehicles</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 28
            echo "                    
                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ID", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "PolicyType", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "PolicyEffectiveDate", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "PolicyExpirationDate", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "PolicyHolder", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "PolicyHolder", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "PolicyHolder", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>Active</td>
                        <td>
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-primary\" data-id=\"1234567890\" data-toggle=\"modal\" data-target=\"#myView\">View</button>
                                <button type=\"button\" class=\"btn btn-warning\" data-id=\"1234567890\" data-toggle=\"modal\" data-target=\"#myEdit\">Edit</button>
                                <button type=\"button\" class=\"btn btn-danger button-click\" data-id=\"1234567890\" data-toggle=\"modal\" data-target=\"#myDelete\">Delete</button>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
                <tfoot>
                    <tr>
                         <th>No</th>
                        <th>Type</th>
                        <th>Effective D</th>
                        <th>Expiration D</th>
                        <th>Holder</th>
                        <th>Divers</th>
                        <th>Vehicles</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>      
            </NonAmpContent>    
    </div>
  </div>
</div>
        
    ";
        // line 68
        echo twig_include($this->env, $context, "_modal.html.twig", ["modalTitle" => "Add a new Policy"]);
        // line 70
        echo "
     
    ";
        // line 72
        echo twig_include($this->env, $context, "_modalDelete.html.twig", ["modalTitle" => "Delete Policy"]);
        // line 74
        echo " 
     
     ";
        // line 76
        echo twig_include($this->env, $context, "_modalEdit.html.twig", ["modalTitle" => "Edit Policy"]);
        // line 78
        echo "
     
     ";
        // line 80
        echo twig_include($this->env, $context, "_modalView.html.twig", ["modalTitle" => "View Policy"]);
        // line 82
        echo "
            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "list/index.html.twig";
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
        return array (  176 => 82,  174 => 80,  170 => 78,  168 => 76,  164 => 74,  162 => 72,  158 => 70,  156 => 68,  133 => 47,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 28,  84 => 27,  59 => 4,  52 => 3,  35 => 2,);
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
          <div class=\"card-header\">POLICIES <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">Create</button></div>
            <AmpContent>
            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Effec_D</th>
                        <th>Expir_D</th>
                        <th>Holder</th>
                        <th>Divers</th>
                        <th>Vehicles</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    {% for key, item in companies %}
                    
                    <tr>
                        <td>{{ item.ID  }}</td>
                        <td>{{ item.PolicyType  }}</td>
                        <td>{{ item.PolicyEffectiveDate  }}</td>
                        <td>{{ item.PolicyExpirationDate  }}</td>
                        <td>{{ item.PolicyHolder  }}</td>
                        <td>{{ item.PolicyHolder  }}</td>
                        <td>{{ item.PolicyHolder  }}</td>
                        <td>Active</td>
                        <td>
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-primary\" data-id=\"1234567890\" data-toggle=\"modal\" data-target=\"#myView\">View</button>
                                <button type=\"button\" class=\"btn btn-warning\" data-id=\"1234567890\" data-toggle=\"modal\" data-target=\"#myEdit\">Edit</button>
                                <button type=\"button\" class=\"btn btn-danger button-click\" data-id=\"1234567890\" data-toggle=\"modal\" data-target=\"#myDelete\">Delete</button>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                         <th>No</th>
                        <th>Type</th>
                        <th>Effective D</th>
                        <th>Expiration D</th>
                        <th>Holder</th>
                        <th>Divers</th>
                        <th>Vehicles</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>      
            </NonAmpContent>    
    </div>
  </div>
</div>
        
    {{ include('_modal.html.twig', {
                modalTitle: 'Add a new Policy',
     }) }}
     
    {{ include('_modalDelete.html.twig', {
                modalTitle: 'Delete Policy',
     }) }} 
     
     {{ include('_modalEdit.html.twig', {
                modalTitle: 'Edit Policy',
     }) }}
     
     {{ include('_modalView.html.twig', {
                modalTitle: 'View Policy',
     }) }}
            
{% endblock %}", "list/index.html.twig", "/Users/jackrima/Sites/site2/templates/list/index.html.twig");
    }
}
