<?php

/* DwrFrontendBundle:Contact:index.html.twig */
class __TwigTemplate_70791185acebdabc33eed3acf5224c30d13daa8510ffd19af017daf7488edac0 extends Twig_Template
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
        echo "<div id=\"js_contact\" class=\"margin-top-150 subcontainer\">
    <p>
        ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
        echo "<br />
        <a href=\"mailto:";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["author_mail"]) ? $context["author_mail"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["author_mail"]) ? $context["author_mail"] : null), "html", null, true);
        echo "</a>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "DwrFrontendBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
