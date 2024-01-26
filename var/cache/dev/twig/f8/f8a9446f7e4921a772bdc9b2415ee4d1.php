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

/* security/login.html.twig */
class __TwigTemplate_c4cd7764660d79edb616d3133077a459 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"\">
        <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
          <div class=\"card-body\">
            <form class=\"form-horizontal\" role=\"form\" method=\"post\">
              <AmpContent>
              <div class=\"alert alert-danger\">
                ";
        // line 13
        echo "              </div>
              
</NonAmpContent> <AmpContent>
              <div class=\"mb-3\">
                You are logged in as ";
        // line 17
        echo ",
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
              </div>
              
</NonAmpContent>
              <div class=\"card-header mb-3\">Please sign in</div>
              <div class=\"form-group\">
                <label for=\"email\" class=\"col-md-4 control-label\"
                  >E-Mail Address</label
                >
                <div class=\"col-md-12\">
                  <input
                    id=\"inputEmail\"
                    type=\"email\"
                    class=\"form-control\"
                    name=\"email\"
                    value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\"
                    required
                    autofocus
                  />
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"password\" class=\"col-md-4 control-label\"
                  >Password</label
                >
                <div class=\"col-md-12\">
                  <input
                    id=\"inputPassword\"
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    required
                  />
                </div>
              </div>
              <input
                type=\"hidden\"
                name=\"_csrf_token\"
                value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
              />
              <div class=\"form-group\">
                <div class=\"col-md-12\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fa fa-btn fa-sign-in\"></i> Login
                  </button>
                </div>
              </div>
            </form>
          </div>
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
        return "security/login.html.twig";
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
        return array (  136 => 56,  110 => 33,  92 => 18,  89 => 17,  83 => 13,  72 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/security/login.html.twig #} {% extends 'base.html.twig' %} {% block
title %}Log in!{% endblock %} {% block body %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-10 ml-md-auto\">
      <div class=\"\">
        <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
          <div class=\"card-body\">
            <form class=\"form-horizontal\" role=\"form\" method=\"post\">
              <AmpContent>
              <div class=\"alert alert-danger\">
                {#{{ error.messageKey|trans(error.messageData, 'security') }}#}
              </div>
              
</NonAmpContent> <AmpContent>
              <div class=\"mb-3\">
                You are logged in as {#{{ app.user.username }}#},
                <a href=\"{{ path('app_logout') }}\">Logout</a>
              </div>
              
</NonAmpContent>
              <div class=\"card-header mb-3\">Please sign in</div>
              <div class=\"form-group\">
                <label for=\"email\" class=\"col-md-4 control-label\"
                  >E-Mail Address</label
                >
                <div class=\"col-md-12\">
                  <input
                    id=\"inputEmail\"
                    type=\"email\"
                    class=\"form-control\"
                    name=\"email\"
                    value=\"{{ last_username }}\"
                    required
                    autofocus
                  />
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"password\" class=\"col-md-4 control-label\"
                  >Password</label
                >
                <div class=\"col-md-12\">
                  <input
                    id=\"inputPassword\"
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    required
                  />
                </div>
              </div>
              <input
                type=\"hidden\"
                name=\"_csrf_token\"
                value=\"{{ csrf_token('authenticate') }}\"
              />
              <div class=\"form-group\">
                <div class=\"col-md-12\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fa fa-btn fa-sign-in\"></i> Login
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "security/login.html.twig", "/Users/jackrima/Sites/site2/templates/security/login.html.twig");
    }
}
