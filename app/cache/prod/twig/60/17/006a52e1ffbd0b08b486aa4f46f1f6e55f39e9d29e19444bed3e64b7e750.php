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
        if ((isset($context["part"]) ? $context["part"] : null)) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["part"]) ? $context["part"] : null), "name"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 17
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_me", array("part_id" => $this->getAttribute((isset($context["part"]) ? $context["part"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["part"]) ? $context["part"] : null), "name"), "html", null, true);
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
        if ((isset($context["word"]) ? $context["word"] : null)) {
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
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
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
        return array (  58 => 17,  129 => 55,  118 => 65,  114 => 64,  81 => 45,  77 => 25,  97 => 22,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  491 => 206,  488 => 205,  484 => 204,  481 => 203,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  344 => 150,  340 => 149,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 98,  233 => 97,  226 => 95,  213 => 90,  202 => 81,  200 => 80,  197 => 79,  192 => 76,  175 => 71,  146 => 55,  134 => 51,  126 => 48,  74 => 23,  53 => 14,  161 => 32,  157 => 30,  90 => 15,  84 => 13,  52 => 6,  34 => 6,  520 => 44,  513 => 403,  510 => 402,  506 => 400,  501 => 398,  496 => 208,  479 => 202,  468 => 380,  466 => 199,  347 => 151,  335 => 258,  333 => 257,  139 => 53,  137 => 67,  110 => 45,  104 => 42,  96 => 17,  76 => 24,  20 => 1,  37 => 8,  480 => 162,  474 => 382,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 260,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 56,  128 => 49,  111 => 40,  107 => 36,  61 => 13,  273 => 200,  269 => 94,  254 => 92,  246 => 101,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 72,  159 => 61,  143 => 56,  135 => 36,  131 => 34,  119 => 22,  108 => 44,  102 => 24,  71 => 17,  67 => 26,  63 => 15,  59 => 17,  47 => 17,  94 => 33,  89 => 34,  85 => 46,  79 => 26,  75 => 17,  68 => 20,  56 => 21,  50 => 13,  201 => 92,  196 => 90,  183 => 73,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 59,  138 => 54,  136 => 52,  123 => 47,  121 => 46,  117 => 44,  115 => 27,  105 => 57,  101 => 43,  91 => 27,  69 => 19,  62 => 18,  49 => 13,  28 => 3,  35 => 6,  38 => 6,  29 => 3,  26 => 2,  87 => 25,  72 => 22,  66 => 39,  55 => 15,  41 => 17,  31 => 4,  25 => 4,  21 => 2,  24 => 3,  19 => 1,  43 => 6,  98 => 31,  93 => 48,  88 => 31,  78 => 10,  46 => 7,  44 => 9,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 59,  154 => 29,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 31,  116 => 41,  112 => 42,  109 => 26,  106 => 25,  103 => 55,  99 => 23,  95 => 28,  92 => 19,  86 => 30,  82 => 12,  80 => 19,  73 => 43,  64 => 17,  60 => 9,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 9,  30 => 7,);
    }
}
