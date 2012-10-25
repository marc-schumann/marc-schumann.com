<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4b782e28e15e9940d96a6c091e944509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  47 => 13,  39 => 8,  33 => 6,  55 => 16,  49 => 13,  42 => 10,  36 => 7,  32 => 5,  29 => 4,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 92,  192 => 90,  177 => 85,  169 => 83,  167 => 82,  162 => 80,  159 => 79,  157 => 78,  152 => 75,  144 => 72,  140 => 71,  135 => 69,  122 => 59,  115 => 55,  108 => 50,  105 => 49,  97 => 43,  91 => 41,  89 => 40,  86 => 39,  83 => 38,  75 => 33,  64 => 28,  54 => 23,  51 => 22,  46 => 20,  43 => 19,  26 => 3,  207 => 73,  203 => 93,  196 => 69,  186 => 87,  180 => 86,  176 => 62,  174 => 84,  168 => 60,  158 => 59,  146 => 73,  143 => 57,  141 => 56,  130 => 47,  117 => 45,  113 => 44,  102 => 35,  100 => 34,  96 => 32,  93 => 31,  88 => 28,  82 => 25,  79 => 24,  77 => 23,  72 => 32,  69 => 31,  66 => 19,  61 => 16,  58 => 25,  52 => 12,  48 => 10,  45 => 11,  40 => 18,  37 => 17,  34 => 16,  31 => 4,  28 => 3,);
    }
}
