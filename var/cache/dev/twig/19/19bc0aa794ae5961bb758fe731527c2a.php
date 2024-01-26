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

/* list/index.html_1.twig */
class __TwigTemplate_732c17f4410a599db4731732f15af9cc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/index.html_1.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list/index.html_1.twig", 2);
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
          <div class=\"card-header\">List of top technology companies</div>
          <AmpContent>
          <table class=\"table\">
            <tr>
              <th>Company Name</th>
              <th>Market Value</th>
            </tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 17
            echo "            <tr>
              <td>";
            // line 18
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
              <td>";
            // line 19
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "          </table>
          
</NonAmpContent>
        </div>
      </div>
      <AmpContent>
      <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-info\">
        You need to login to see the list 😜😜 >></a
      >
      
</NonAmpContent>
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
        return "list/index.html_1.twig";
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
        return array (  101 => 28,  93 => 22,  84 => 19,  80 => 18,  77 => 17,  73 => 16,  59 => 4,  52 => 3,  35 => 2,);
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
          <div class=\"card-header\">List of top technology companies</div>
          <AmpContent>
          <table class=\"table\">
            <tr>
              <th>Company Name</th>
              <th>Market Value</th>
            </tr>
            {% for key, item in companies %}
            <tr>
              <td>{{ key }}</td>
              <td>{{ item }}</td>
            </tr>
            {% endfor %}
          </table>
          
</NonAmpContent>
        </div>
      </div>
      <AmpContent>
      <a href=\"{{ path('app_login') }}\" class=\"btn btn-info\">
        You need to login to see the list 😜😜 >></a
      >
      
</NonAmpContent>
    </div>
  </div>
</div>
{% endblock %}", "list/index.html_1.twig", "/Users/jackrima/Sites/site2/templates/list/index.html_1.twig");
    }
}
