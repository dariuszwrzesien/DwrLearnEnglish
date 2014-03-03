<?php

/* DwrFrontendBundle:Issues:index.html.twig */
class __TwigTemplate_35b872233503b09f812131a49ae694767f7408ee7f9cbc3618092807f9360753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"js_issues\" class=\"margin-top-150 subcontainer\">
    <p>
        Issues
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "DwrFrontendBundle:Issues:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
