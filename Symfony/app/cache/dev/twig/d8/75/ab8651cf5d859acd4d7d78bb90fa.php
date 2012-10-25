<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_d875ab8651cf5d859acd4d7d78bb90fa extends Twig_Template
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
        if ($this->getContext($context, "link")) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "icon"), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->getContext($context, "icon"), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->getContext($context, "text"), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  19 => 2,  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  60 => 25,  25 => 4,  22 => 3,  20 => 2,  17 => 1,  305 => 102,  299 => 98,  296 => 97,  293 => 96,  291 => 95,  286 => 92,  280 => 88,  277 => 87,  274 => 248,  272 => 85,  267 => 82,  253 => 81,  249 => 79,  234 => 77,  226 => 75,  224 => 74,  219 => 72,  215 => 71,  208 => 68,  202 => 65,  198 => 64,  189 => 63,  187 => 62,  181 => 60,  164 => 59,  161 => 58,  153 => 53,  124 => 48,  116 => 44,  107 => 36,  92 => 29,  80 => 24,  44 => 7,  30 => 4,  27 => 3,  156 => 58,  148 => 52,  145 => 53,  142 => 51,  127 => 49,  123 => 44,  110 => 37,  104 => 35,  85 => 28,  76 => 24,  73 => 23,  68 => 20,  65 => 19,  59 => 16,  182 => 70,  163 => 58,  160 => 57,  155 => 54,  151 => 54,  149 => 53,  136 => 47,  134 => 44,  131 => 51,  128 => 42,  120 => 37,  114 => 35,  109 => 32,  106 => 31,  90 => 27,  87 => 26,  71 => 19,  62 => 14,  50 => 18,  47 => 17,  39 => 8,  33 => 8,  55 => 11,  49 => 10,  42 => 10,  36 => 6,  32 => 5,  29 => 6,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 92,  192 => 90,  177 => 85,  169 => 62,  167 => 82,  162 => 80,  159 => 79,  157 => 78,  152 => 75,  144 => 72,  140 => 50,  135 => 69,  122 => 59,  115 => 42,  108 => 50,  105 => 49,  97 => 43,  91 => 41,  89 => 40,  86 => 26,  83 => 25,  75 => 21,  64 => 28,  54 => 23,  51 => 22,  46 => 8,  43 => 8,  26 => 3,  207 => 73,  203 => 93,  196 => 69,  186 => 87,  180 => 86,  176 => 66,  174 => 84,  168 => 60,  158 => 59,  146 => 73,  143 => 57,  141 => 48,  130 => 47,  117 => 36,  113 => 43,  102 => 36,  100 => 30,  96 => 30,  93 => 33,  88 => 28,  82 => 25,  79 => 25,  77 => 23,  72 => 32,  69 => 18,  66 => 19,  61 => 16,  58 => 12,  52 => 19,  48 => 10,  45 => 9,  40 => 15,  37 => 9,  34 => 7,  31 => 6,  28 => 3,);
    }
}
