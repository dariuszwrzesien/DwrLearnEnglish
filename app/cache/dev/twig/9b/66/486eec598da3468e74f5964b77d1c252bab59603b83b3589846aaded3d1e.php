<?php

/* DwrFrontendBundle:Wordslist:index.html.twig */
class __TwigTemplate_9b66486eec598da3468e74f5964b77d1c252bab59603b83b3589846aaded3d1e extends Twig_Template
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
        echo "<div id=\"js_words_list\" class=\"margin-top-75 subcontainer\">
    <div class=\"btn-group\">
        <button type=\"button\" id=\"choose_package\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                ";
        // line 7
        if ((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part"))) {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "name"), "html", null, true);
            echo "
                ";
        } else {
            // line 10
            echo "                Choose words package
                ";
        }
        // line 12
        echo "            <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu\">
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : $this->getContext($context, "parts")));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 16
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("words_list", array("words_package_id" => $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), "name"), "html", null, true);
            echo "</a></li>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
    </div>
    ";
        // line 20
        if ((isset($context["words"]) ? $context["words"] : $this->getContext($context, "words"))) {
            // line 21
            echo "    <div>
        <table class=\"margin-top-50 table table-striped\">
            <thead>
                <tr>
                    <th></th>
                    <th>english</th>
                    <th>polish</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["words"]) ? $context["words"] : $this->getContext($context, "words")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                // line 32
                echo "                <tr>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : $this->getContext($context, "word")), "english"), "html", null, true);
                echo "</td>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["word"]) ? $context["word"] : $this->getContext($context, "word")), "polish"), "html", null, true);
                echo "</td>
                </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </tbody>
        </table>
    </div>
    ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "DwrFrontendBundle:Wordslist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 42,  131 => 38,  114 => 35,  110 => 34,  106 => 33,  103 => 32,  86 => 31,  74 => 21,  72 => 20,  68 => 18,  57 => 16,  53 => 15,  48 => 12,  44 => 10,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
