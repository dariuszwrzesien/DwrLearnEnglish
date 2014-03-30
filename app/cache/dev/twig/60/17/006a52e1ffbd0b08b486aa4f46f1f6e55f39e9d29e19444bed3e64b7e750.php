<?php

/* DwrFrontendBundle:Checkme:index.html.twig */
class __TwigTemplate_6017006a52e1ffbd0b08b486aa4f46f1f6e55f39e9d29e19444bed3e64b7e750 extends Twig_Template
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
        echo "<div id=\"js_check_me\" class=\"margin-top-75 subcontainer\">
    <div class=\"btn-group\">
        <div class=\"btn-group\">
            <button type=\"button\" id=\"choose_package\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                ";
        // line 8
        if ((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part"))) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "name"), "html", null, true);
            echo "
                ";
        } else {
            // line 11
            echo "                Choose words package
                ";
        }
        // line 13
        echo "                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : $this->getContext($context, "parts")));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 17
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_me", array("part_id" => $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "name"), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
        </div>
    </div>
    <div class=\"float-right\">
        <button id=\"js-bulb\" class=\"bulb-on\" /></button>
    </div>
    ";
        // line 25
        if (((isset($context["word"]) ? $context["word"] : $this->getContext($context, "word")) && (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")))) {
            // line 26
            echo "    <div class=\"center-block checkme-box\">
        <div class=\"question-answer-block\">
            <div id=\"question\" class=\"label label-success\">Question wewewew e w</div>
            <div id=\"answer\" class=\"label label-default\">Answereqweqw e q e qeq</div>
        </div>
        <br class=\"clear-both\" />
        <div class=\"form-block\">
            <p>
            ";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
            </p>
        </div>
        <br class=\"clear-both\" />
        <div class=\"restart-block\">
            <p><button type=\"button\" class=\"btn btn-default btn-sm navbar-btn restart-button\">Restart</button></p>
        </div>
    </div>
    ";
        }
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "DwrFrontendBundle:Checkme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  89 => 34,  79 => 26,  77 => 25,  69 => 19,  58 => 17,  54 => 16,  49 => 13,  45 => 11,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
