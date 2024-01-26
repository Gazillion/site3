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

/* registration/index.html.twig */
class __TwigTemplate_fbf7430a30ad252367918a62e29ecb29 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
        <div class=\"card-body\">
          <div class=\"card-header mb-3\">Registration Form</div>
          ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "password", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        // line 23
        echo "
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "password", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        // line 29
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
              <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fa fa-btn fa-user\"></i> Register
              </button>
            </div>
          </div>
          ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
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
        return "registration/index.html.twig";
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
        return array (  112 => 39,  100 => 29,  98 => 28,  91 => 23,  89 => 22,  81 => 17,  73 => 12,  67 => 9,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/registration/index.html.twig #} {% extends 'base.html.twig' %} {%
block body %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
        <div class=\"card-body\">
          <div class=\"card-header mb-3\">Registration Form</div>
          {{ form_start(form) }}
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.password.first, {'attr': {'class':
              'form-control'}}) }}
            </div>
          </div>
          <div class=\"form_group\">
            <div class=\"col-md-12 mb-3\">
              {{ form_row(form.password.second, {'attr': {'class':
              'form-control'}}) }}
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
              <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fa fa-btn fa-user\"></i> Register
              </button>
            </div>
          </div>
          {{ form_end(form) }}
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "registration/index.html.twig", "/Users/jackrima/Sites/site2/templates/registration/index.html.twig");
    }
}
