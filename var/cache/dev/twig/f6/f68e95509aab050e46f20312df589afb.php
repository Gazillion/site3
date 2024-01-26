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

/* _modalDelete.html.twig */
class __TwigTemplate_08f34278d8057a5c33223a508f37aac1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modalDelete.html.twig"));

        // line 2
        echo "<!-- The Modal -->
    <div class=\"modal fade\" id=\"myDelete\">
      <div class=\"modal-dialog modal-sm\">
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
                <h4 id='bookId'></h4>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">NO</button>
              <button type=\"button\" class=\"btn btn-primary\"> YES </button>
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
        return "_modalDelete.html.twig";
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
    <div class=\"modal fade\" id=\"myDelete\">
      <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">

            <!-- Modal Header -->
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">{{ modalTitle }}</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>

            <!-- Modal body -->
            <div class=\"modal-body\">
                <h4 id='bookId'></h4>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">NO</button>
              <button type=\"button\" class=\"btn btn-primary\"> YES </button>
            </div>

        </div>
      </div>
    </div>  ", "_modalDelete.html.twig", "/Users/jackrima/Sites/site2/templates/_modalDelete.html.twig");
    }
}
