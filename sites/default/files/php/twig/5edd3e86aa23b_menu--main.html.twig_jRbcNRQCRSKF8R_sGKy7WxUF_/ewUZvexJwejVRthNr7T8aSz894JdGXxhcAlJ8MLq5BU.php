<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/us_education/templates/menu--main.html.twig */
class __TwigTemplate_529226e18bf822f3a55628111ebcd474a7bd52acb325c5f5c2394aa6d8a55f31 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 19, "if" => 23];
        $filters = ["escape" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        echo "<nav class=\"navbar navbar-expand-lg\">
 <a class=\"navbar-brand\" href=\"#\">&nbsp;</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    MENU
  </button>
";
        // line 16
        echo "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    \t<ul class=\"navbar-nav mr-auto\">
    
    \t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "    
    \t\t\t";
            // line 22
            echo "     
    \t\t\t";
            // line 23
            if ($this->getAttribute($context["item"], "below", [])) {
                // line 24
                echo "    
    \t\t\t\t<li  class=\"nav-item dropdown\" >
    \t\t\t\t\t
                         <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo "</a>
                         <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                          
    \t\t\t\t\t
    \t\t\t\t\t\t";
                // line 32
                echo "    
    \t\t\t\t\t\t";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    echo "    \t\t\t\t\t\t    ";
                    if ((($this->getAttribute($context["item"], "title", []) == "Repayment") || ($this->getAttribute($context["item"], "title", []) == "ESSA"))) {
                        // line 35
                        echo "    \t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "</a>
    \t\t\t\t\t\t    ";
                    } else {
                        // line 37
                        echo "                                   <a class=\"dropdown-item\" href=\"#\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "</a>
                                ";
                    }
                    // line 39
                    echo "                                
    \t\t\t\t\t\t\t
    
    \t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "    \t\t\t\t\t
    \t\t\t\t\t</div>
    \t\t\t\t</li>
    \t\t\t\t";
                // line 47
                echo "    
    \t\t\t";
            } else {
                // line 49
                echo "    
    \t\t\t\t";
                // line 51
                echo "    
    \t\t\t\t<li class=\"nav-item\"><a  href=\"";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                echo "\"  ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                echo " > ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo "</a></li>
    
    \t\t\t";
            }
            // line 55
            echo "    
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    \t</ul>
    \t<form action=\"/search/node\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\">
          <div class=\"js-form-item form-item js-form-type-search form-type-search js-form-item-keys form-item-keys form-no-label\">
              <label for=\"edit-keys\" class=\"visually-hidden\">Search</label>
                <input title=\"Enter the terms you wish to search for.\" data-drupal-selector=\"edit-keys\" type=\"search\" id=\"edit-keys\" name=\"keys\" value=\"\" size=\"15\" maxlength=\"128\" class=\"form-search\">
        
                </div>
        <div data-drupal-selector=\"edit-actions\" class=\"form-actions js-form-wrapper form-wrapper\" id=\"edit-actions\"><input data-drupal-selector=\"edit-submit\" type=\"image\" id=\"edit-submit\" name=\"op\" src=\"/themes/custom/us_education/images/search.png\" class=\"image-button js-form-submit form-submit\">
        </div>
        
        </form>

</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/us_education/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 57,  149 => 55,  139 => 52,  136 => 51,  133 => 49,  129 => 47,  124 => 43,  115 => 39,  109 => 37,  101 => 35,  98 => 34,  94 => 33,  91 => 32,  84 => 27,  79 => 24,  77 => 23,  74 => 22,  71 => 20,  67 => 19,  62 => 16,  55 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/us_education/templates/menu--main.html.twig", "/home/webcater/public_html/demo/themes/custom/us_education/templates/menu--main.html.twig");
    }
}
