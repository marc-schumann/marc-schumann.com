<?php

/* MsComWebsiteBundle:Start:index.html.twig */
class __TwigTemplate_b3721b64dd8da96a3604c6a0c7f03b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MsComWebsiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MsComWebsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1>Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a class=\"symfony-button-green\" href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/quick_tour/index.html\">Read the Quick Tour</a>
        </div>
        ";
        // line 21
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 22
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a class=\"symfony-button-green\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_home"), "html", null, true);
            echo "\">Configure</a>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a class=\"symfony-button-green\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Run The Demo</a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
           Jetzt wird hier alles anders.
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MsComWebsiteBundle:Start:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  87 => 31,  83 => 29,  77 => 26,  72 => 24,  68 => 22,  66 => 21,  61 => 19,  56 => 17,  46 => 9,  43 => 8,  40 => 7,  34 => 5,  28 => 3,);
    }
}
