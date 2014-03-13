<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_07f8b86ad42bf3139077a6223015ecd62c9a06503aec45aae26f7b87bf3b55dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : null)) && twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : null)))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ((!twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : null)))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) ? $context["sinceVersion"] : null), "html", null, true);
            }
            // line 5
            echo "    ";
            if ((!twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : null)))) {
                // line 6
                echo "        ";
                if ((!twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : null)))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) ? $context["untilVersion"] : null), "html", null, true);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  520 => 44,  513 => 403,  510 => 402,  506 => 400,  501 => 398,  496 => 397,  479 => 383,  468 => 380,  466 => 379,  347 => 262,  335 => 258,  333 => 257,  139 => 68,  137 => 67,  110 => 45,  104 => 42,  96 => 38,  76 => 29,  20 => 1,  37 => 8,  480 => 162,  474 => 382,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 260,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 200,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 44,  102 => 32,  71 => 27,  67 => 26,  63 => 15,  59 => 14,  47 => 17,  94 => 28,  89 => 35,  85 => 33,  79 => 18,  75 => 17,  68 => 14,  56 => 21,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 48,  105 => 40,  101 => 41,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  28 => 7,  35 => 5,  38 => 6,  29 => 3,  26 => 6,  87 => 25,  72 => 16,  66 => 24,  55 => 15,  41 => 7,  31 => 5,  25 => 4,  21 => 2,  24 => 3,  19 => 1,  43 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 36,  86 => 28,  82 => 32,  80 => 19,  73 => 19,  64 => 17,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 12,  36 => 5,  33 => 9,  30 => 7,);
    }
}
