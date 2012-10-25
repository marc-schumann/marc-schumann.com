<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_5c3bb11bf009d787327a01f2963eb788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  49 => 13,  42 => 10,  36 => 7,  32 => 5,  29 => 4,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 92,  192 => 90,  177 => 85,  169 => 83,  167 => 82,  162 => 80,  159 => 79,  157 => 78,  152 => 75,  144 => 72,  140 => 71,  135 => 69,  122 => 59,  115 => 55,  108 => 50,  105 => 49,  97 => 43,  91 => 41,  89 => 40,  86 => 39,  83 => 38,  75 => 33,  64 => 28,  54 => 23,  51 => 22,  46 => 20,  43 => 19,  26 => 3,  207 => 73,  203 => 93,  196 => 69,  186 => 87,  180 => 86,  176 => 62,  174 => 84,  168 => 60,  158 => 59,  146 => 73,  143 => 57,  141 => 56,  130 => 47,  117 => 45,  113 => 44,  102 => 35,  100 => 34,  96 => 32,  93 => 31,  88 => 28,  82 => 25,  79 => 24,  77 => 23,  72 => 32,  69 => 31,  66 => 19,  61 => 16,  58 => 25,  52 => 12,  48 => 10,  45 => 11,  40 => 18,  37 => 17,  34 => 16,  31 => 4,  28 => 4,);
    }
}
