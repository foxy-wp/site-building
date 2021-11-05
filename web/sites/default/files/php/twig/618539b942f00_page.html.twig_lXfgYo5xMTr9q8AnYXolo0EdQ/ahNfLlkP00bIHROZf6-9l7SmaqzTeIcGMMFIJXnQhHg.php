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

/* themes/custom/exam/templates/page.html.twig */
class __TwigTemplate_7218603d294fa0236082bee75f29333f68d5e6965bde536a893b0db1f2403fce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 1), "fluid_container", [], "any", false, false, true, 1)) ? ("container-fluid") : ("container"));
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 3) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 3))) {
            // line 4
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 53
        echo "
";
        // line 55
        $this->displayBlock('main', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 118)) {
            // line 119
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 4
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["theme"] ?? null), "settings", [], "any", false, false, true, 7), "navbar_inverse", [], "any", false, false, true, 7)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["theme"] ?? null), "settings", [], "any", false, false, true, 8), "navbar_position", [], "any", false, false, true, 8)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 8), "navbar_position", [], "any", false, false, true, 8), 8, $this->source)))) : (""))];
        // line 10
        echo "    <header ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null), 1 => "header"], "method", false, false, true, 10), 10, $this->source), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 11)) {
            // line 12
            echo "      <div class=\"container\">
        ";
        }
        // line 14
        echo "        <div class=\"navbar-header\">
          ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 15), 15, $this->source), "html", null, true));
        echo "
          ";
        // line 17
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 17)) {
            // line 18
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation")));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 25
        echo "

          ";
        // line 28
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 28)) {
            // line 29
            echo "            <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
              ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 30), 30, $this->source), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 33
        echo "
        </div>

        ";
        // line 37
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 37)) {
            // line 38
            echo "          ";
            $this->displayBlock('header', $context, $blocks);
            // line 43
            echo "        ";
        }
        // line 44
        echo "


        ";
        // line 47
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 47)) {
            // line 48
            echo "      </div>
      ";
        }
        // line 50
        echo "    </header>
  ";
    }

    // line 38
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "            <div class=\"col-sm-12\" role=\"heading\">
              ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 40), 40, $this->source), "html", null, true));
        echo "
            </div>
          ";
    }

    // line 55
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 56, $this->source), "html", null, true));
        echo " js-quickedit-main-content\">

    <div class=\"row\">

      ";
        // line 61
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 61)) {
            // line 62
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 67
            echo "    ";
        }
        // line 68
        echo "
    ";
        // line 70
        echo "    ";
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 71
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 71) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 71))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 72
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 72) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 72)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 73
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 73)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 74
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 74)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 74)))) ? ("col-sm-12") : (""))];
        // line 76
        echo "

    <section";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true));
        echo ">

      ";
        // line 81
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 81)) {
            // line 82
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 85
            echo "      ";
        }
        // line 86
        echo "
      ";
        // line 88
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 88)) {
            // line 89
            echo "        ";
            $this->displayBlock('help', $context, $blocks);
            // line 92
            echo "      ";
        }
        // line 93
        echo "
      ";
        // line 95
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "
    </section>

    ";
        // line 103
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 103)) {
            // line 104
            echo "      ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 109
            echo "    ";
        }
        // line 110
        echo "
  </div>



  </div>
";
    }

    // line 62
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
    ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 64), 64, $this->source), "html", null, true));
        echo "
    </aside>
    ";
    }

    // line 82
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "          <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 83), 83, $this->source), "html", null, true));
        echo "</div>
        ";
    }

    // line 89
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 90), 90, $this->source), "html", null, true));
        echo "
        ";
    }

    // line 95
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "        <a id=\"main-content\"></a>
        ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97), 97, $this->source), "html", null, true));
        echo "
      ";
    }

    // line 104
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "        <aside class=\"col-sm-3\" role=\"complementary\">
          ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 106), 106, $this->source), "html", null, true));
        echo "
        </aside>
      ";
    }

    // line 119
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 120, $this->source), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 121), 121, $this->source), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 121,  332 => 120,  328 => 119,  321 => 106,  318 => 105,  314 => 104,  308 => 97,  305 => 96,  301 => 95,  294 => 90,  290 => 89,  283 => 83,  279 => 82,  272 => 64,  269 => 63,  265 => 62,  255 => 110,  252 => 109,  249 => 104,  246 => 103,  241 => 99,  238 => 95,  235 => 93,  232 => 92,  229 => 89,  226 => 88,  223 => 86,  220 => 85,  217 => 82,  214 => 81,  209 => 78,  205 => 76,  203 => 74,  202 => 73,  201 => 72,  200 => 71,  198 => 70,  195 => 68,  192 => 67,  189 => 62,  186 => 61,  178 => 56,  174 => 55,  167 => 40,  164 => 39,  160 => 38,  155 => 50,  151 => 48,  149 => 47,  144 => 44,  141 => 43,  138 => 38,  135 => 37,  130 => 33,  124 => 30,  121 => 29,  118 => 28,  114 => 25,  105 => 19,  102 => 18,  99 => 17,  95 => 15,  92 => 14,  88 => 12,  86 => 11,  81 => 10,  79 => 8,  78 => 7,  76 => 5,  72 => 4,  66 => 119,  64 => 118,  61 => 117,  59 => 55,  56 => 53,  52 => 4,  50 => 3,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/page.html.twig", "/var/www/web/themes/custom/exam/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3, "block" => 4);
        static $filters = array("clean_class" => 8, "escape" => 10, "t" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
