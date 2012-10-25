<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_95f876a254332491c1dac729e1b7d5b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != $this->getContext($context, "position"))) {
            // line 3
            echo "    ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => $this->getContext($context, "position"), "floatable" => true)));
            // line 4
            echo "    <div style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 6
        echo "
<div class=\"sf-toolbarreset\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"), "profiler_url" => $this->getContext($context, "profiler_url"), "token" => $this->getAttribute($this->getContext($context, "profile"), "token"), "name" => $this->getContext($context, "name"))), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "
    ";
        // line 18
        if (("normal" != $this->getContext($context, "position"))) {
            // line 19
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
        \"></a>
    ";
        }
        // line 25
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  25 => 4,  22 => 3,  20 => 2,  17 => 1,  305 => 102,  299 => 98,  296 => 97,  293 => 96,  291 => 95,  286 => 92,  280 => 88,  277 => 87,  274 => 86,  272 => 85,  267 => 82,  253 => 81,  249 => 79,  234 => 77,  226 => 75,  224 => 74,  219 => 72,  215 => 71,  208 => 68,  202 => 65,  198 => 64,  189 => 63,  187 => 62,  181 => 60,  164 => 59,  161 => 58,  153 => 53,  124 => 48,  116 => 44,  107 => 36,  92 => 29,  80 => 24,  44 => 7,  30 => 4,  27 => 3,  156 => 58,  148 => 52,  145 => 53,  142 => 51,  127 => 49,  123 => 44,  110 => 37,  104 => 35,  85 => 28,  76 => 24,  73 => 23,  68 => 20,  65 => 19,  59 => 16,  182 => 70,  163 => 58,  160 => 57,  155 => 54,  151 => 54,  149 => 53,  136 => 47,  134 => 44,  131 => 51,  128 => 42,  120 => 37,  114 => 35,  109 => 32,  106 => 31,  90 => 27,  87 => 26,  71 => 19,  62 => 14,  50 => 18,  47 => 17,  39 => 8,  33 => 8,  55 => 11,  49 => 10,  42 => 10,  36 => 6,  32 => 5,  29 => 6,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 92,  192 => 90,  177 => 85,  169 => 62,  167 => 82,  162 => 80,  159 => 79,  157 => 78,  152 => 75,  144 => 72,  140 => 50,  135 => 69,  122 => 59,  115 => 42,  108 => 50,  105 => 49,  97 => 43,  91 => 41,  89 => 40,  86 => 26,  83 => 25,  75 => 21,  64 => 28,  54 => 23,  51 => 22,  46 => 8,  43 => 8,  26 => 3,  207 => 73,  203 => 93,  196 => 69,  186 => 87,  180 => 86,  176 => 66,  174 => 84,  168 => 60,  158 => 59,  146 => 73,  143 => 57,  141 => 48,  130 => 47,  117 => 36,  113 => 43,  102 => 36,  100 => 30,  96 => 30,  93 => 33,  88 => 28,  82 => 25,  79 => 25,  77 => 23,  72 => 32,  69 => 18,  66 => 19,  61 => 16,  58 => 12,  52 => 19,  48 => 10,  45 => 9,  40 => 15,  37 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
