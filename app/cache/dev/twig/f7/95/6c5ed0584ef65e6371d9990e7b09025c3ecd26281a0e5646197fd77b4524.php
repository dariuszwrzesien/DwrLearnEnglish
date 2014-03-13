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
        echo "<div id=\"js_grammary\" class=\"margin-top-75 subcontainer\">
    <div class=\"btn-group\">
        <div class=\"btn-group\">
            <button type=\"button\" id=\"choose_package\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                Choose grammary package 
                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : $this->getContext($context, "parts")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 13
            echo "                <li><a id=\"item";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grammary", array("grammary_package_id" => $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "name"), "html", null, true);
            echo "</a></li>
                 ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    ";
        // line 18
        if ((isset($context["grammary"]) ? $context["grammary"] : $this->getContext($context, "grammary"))) {
            // line 19
            echo "    <div class=\"margin-top-50\">
            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["grammary"]) ? $context["grammary"] : $this->getContext($context, "grammary")));
            foreach ($context['_seq'] as $context["_key"] => $context["grammary"]) {
                // line 21
                echo "        <div class=\"margin-top-50\">
            <h5><strong>";
                // line 22
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grammary"]) ? $context["grammary"] : $this->getContext($context, "grammary")), "subpart"), "name"), "html", null, true));
                echo "</strong> (";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grammary"]) ? $context["grammary"] : $this->getContext($context, "grammary")), "part"), "name"), "html", null, true));
                echo ")</h5>
            <h2>";
                // line 23
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["grammary"]) ? $context["grammary"] : $this->getContext($context, "grammary")), "title"), "html", null, true));
                echo "</h2>
            
        </div>
        <div>
            <p>";
                // line 27
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["grammary"]) ? $context["grammary"] : $this->getContext($context, "grammary")), "content"), "html", null, true));
                echo "</p>
        </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grammary'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
    ";
        }
        // line 32
        echo "</div>
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
        return array (  122 => 32,  118 => 30,  109 => 27,  102 => 23,  96 => 22,  93 => 21,  89 => 20,  86 => 19,  84 => 18,  79 => 15,  58 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
