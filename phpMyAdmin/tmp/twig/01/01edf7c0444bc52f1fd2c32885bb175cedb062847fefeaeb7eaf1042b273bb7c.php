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

/* database/structure/change_prefix_form.twig */
class __TwigTemplate_a617222b78c0f93dfde9db05c6b4d6d43bccce1bbdb034762776f0759e4db450 extends Template
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
        // line 1
        echo "<form id=\"ajax_form\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute(($context["route"] ?? null));
        echo "\" method=\"post\">
  ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "

  <fieldset class=\"pma-fieldset input\">
    <table>
      <tr>
        <td>";
echo _gettext("From");
        // line 7
        echo "</td>
        <td>
          <input type=\"text\" name=\"from_prefix\" id=\"initialPrefix\">
        </td>
      </tr>
      <tr>
        <td>";
echo _gettext("To");
        // line 13
        echo "</td>
        <td>
          <input type=\"text\" name=\"to_prefix\" id=\"newPrefix\">
        </td>
      </tr>
    </table>
  </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "database/structure/change_prefix_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 7,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/change_prefix_form.twig", "/merakl/www/phpMyAdmin/templates/database/structure/change_prefix_form.twig");
    }
}
