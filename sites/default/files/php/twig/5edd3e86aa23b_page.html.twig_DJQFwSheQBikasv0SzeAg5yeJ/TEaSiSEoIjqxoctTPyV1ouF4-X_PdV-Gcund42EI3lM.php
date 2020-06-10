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

/* themes/custom/us_education/templates/page.html.twig */
class __TwigTemplate_b57361fd099e2d6d86678a6ce118c510ffaf8a771a4485b97f208b6b05c61c71 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 107];
        $filters = ["escape" => 69];
        $functions = ["url" => 79];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['url']
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
        // line 61
        echo "\t
<!--start: Header and Navbar -->

        <header>
\t\t\t<div class=\"header-top-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<span><img src=\"";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/us-flag.jpg\" alt=\"Icon\"/></span> An official website of the United States government
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-menu-area\">
\t\t\t\t<div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-2 col-10\">
                                <div class=\"logo-area\">
                                    <a href=\"";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/logo.png\" alt=\"logo\"></a>
\t\t\t\t\t\t\t\t\t\t<span>U.S. Department <i>of </i> Education</span>
                                </div>
                            </div>
                            <div class=\"col-lg-8 col-md-10 col-2\">
                               ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "\t
                            </div>
\t\t\t\t\t\t\t
                            
                        </div>
                    </div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t</header>
\t\t
\t\t
\t\t<!-- Top Banner Part -->
\t\t";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner_block", [])), "html", null, true);
        echo "
\t\t
\t\t
\t\t<!-- End Banner Part -->
\t\t<div class=\"find-section content-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t
            \t\t ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 108
            echo "                   
                       ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                    
                  ";
        }
        // line 112
        echo "\t\t        </div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!-- End Part -->
\t\t";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
        echo "
\t\t<!-- End Section -->
\t\t";
        // line 119
        if (($this->getAttribute(($context["node"] ?? null), "id", []) != 6)) {
            // line 120
            echo "\t\t<div class=\"content-section bg-theme\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"text-center text-white\"><h2 class=\"mb-4 bdr-btm\">Sign Up for Our Newsletter </h2></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12 text-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "newsletter", [])), "html", null, true);
            echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 137
        echo "        <footer>
        \t";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
        \t
        \t<div class=\"footer-last content-section\">
        \t\t<div class=\"container\">
        \t\t\t<div class=\"row\">
        \t\t\t\t<div class=\"col-md-12\">
        \t\t\t\t\t<div class=\"logo-area\">
        \t\t\t\t\t\t<a href=\"";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\">
        \t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/logo.png\" alt=\"logo\"></a>
        \t\t\t\t\t\t\t<span>U.S. Department <i>of </i> Education</span>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</div>
        \t\t\t<hr>
        \t\t\t<div class=\"row\">
        \t\t\t\t<div class=\"col-md-10\">
        \t\t\t\t
        \t\t\t\t\t";
        // line 155
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 156
            echo "        \t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "\t
        \t\t\t\t\t";
        }
        // line 157
        echo " 
        \t\t\t\t</div>
        \t\t\t\t<div class=\"col-md-2\">
        \t\t\t\t\t<div class=\"social text-right\">
        \t\t\t\t\t\t<ul>
        \t\t\t\t\t\t\t<li><a href=\"";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
        echo "\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/fbk.png\" alt=\"\"></a></li>
        \t\t\t\t\t\t\t<li><a href=\"";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
        echo "\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/twr.png\" alt=\"\"></a></li>
        \t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/mg.png\" alt=\"\"></a></li>
        \t\t\t\t\t\t</ul>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </footer>
        


\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/us_education/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 164,  215 => 163,  209 => 162,  202 => 157,  196 => 156,  194 => 155,  182 => 146,  178 => 145,  168 => 138,  165 => 137,  155 => 130,  143 => 120,  141 => 119,  136 => 117,  129 => 112,  123 => 109,  120 => 108,  118 => 107,  107 => 99,  90 => 85,  82 => 80,  78 => 79,  65 => 69,  55 => 61,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/us_education/templates/page.html.twig", "/home/webcater/public_html/demo/themes/custom/us_education/templates/page.html.twig");
    }
}
