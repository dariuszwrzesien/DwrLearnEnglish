<?php

/* DwrFrontendBundle:Grammary:index.html.twig */
class __TwigTemplate_f7956c5ed0584ef65e6371d9990e7b09025c3ecd26281a0e5646197fd77b4524 extends Twig_Template
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
        echo "<div id=\"js_grammary\" class=\"margin-top-150 subcontainer\">
    <p>
        Grammary
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "DwrFrontendBundle:Grammary:index.html.twig";
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
