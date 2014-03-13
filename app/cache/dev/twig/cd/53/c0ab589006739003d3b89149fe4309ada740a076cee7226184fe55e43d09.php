<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_cd53c0ab589006739003d3b89149fe4309ada740a076cee7226184fe55e43d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  446 => 197,  441 => 196,  429 => 188,  415 => 180,  401 => 172,  394 => 168,  348 => 140,  342 => 137,  338 => 135,  323 => 128,  320 => 127,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  207 => 75,  181 => 65,  150 => 55,  386 => 159,  371 => 156,  358 => 151,  345 => 147,  343 => 146,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  248 => 94,  232 => 88,  222 => 83,  216 => 79,  210 => 77,  194 => 70,  155 => 47,  152 => 46,  127 => 35,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  165 => 60,  153 => 56,  363 => 153,  357 => 123,  332 => 116,  324 => 113,  321 => 135,  318 => 111,  315 => 125,  303 => 122,  291 => 102,  274 => 110,  231 => 83,  212 => 78,  190 => 76,  185 => 66,  174 => 65,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  448 => 240,  438 => 236,  428 => 230,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  380 => 160,  361 => 146,  329 => 131,  313 => 183,  304 => 181,  300 => 121,  295 => 178,  288 => 118,  205 => 108,  188 => 90,  184 => 63,  170 => 56,  191 => 69,  178 => 64,  172 => 62,  70 => 19,  367 => 155,  353 => 149,  350 => 327,  308 => 287,  306 => 107,  113 => 38,  100 => 39,  65 => 11,  114 => 64,  81 => 30,  77 => 20,  118 => 49,  58 => 13,  687 => 297,  683 => 295,  634 => 456,  628 => 245,  623 => 242,  621 => 241,  613 => 320,  609 => 319,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 283,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 276,  491 => 206,  488 => 205,  484 => 204,  481 => 203,  456 => 197,  454 => 244,  451 => 195,  449 => 198,  439 => 195,  436 => 235,  434 => 187,  431 => 189,  426 => 183,  417 => 179,  408 => 176,  404 => 176,  396 => 173,  389 => 160,  378 => 157,  376 => 205,  373 => 156,  359 => 154,  351 => 141,  344 => 119,  340 => 145,  327 => 114,  325 => 129,  317 => 185,  311 => 132,  301 => 128,  297 => 104,  293 => 120,  289 => 113,  286 => 112,  279 => 122,  265 => 105,  263 => 95,  260 => 108,  255 => 101,  237 => 98,  233 => 87,  226 => 84,  213 => 78,  202 => 94,  200 => 72,  197 => 71,  192 => 76,  175 => 58,  146 => 55,  134 => 47,  126 => 40,  53 => 11,  161 => 63,  90 => 27,  84 => 24,  34 => 4,  520 => 44,  513 => 403,  510 => 402,  506 => 400,  501 => 398,  496 => 208,  479 => 256,  468 => 380,  466 => 199,  347 => 191,  335 => 134,  333 => 257,  137 => 67,  110 => 45,  104 => 32,  76 => 25,  20 => 1,  480 => 162,  474 => 382,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 136,  314 => 99,  312 => 124,  309 => 129,  305 => 129,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 56,  107 => 36,  61 => 17,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 96,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 91,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 53,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 18,  59 => 17,  94 => 21,  89 => 35,  85 => 24,  75 => 19,  68 => 20,  56 => 16,  201 => 106,  196 => 92,  183 => 73,  171 => 70,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 27,  49 => 11,  28 => 3,  38 => 6,  26 => 3,  87 => 41,  31 => 3,  25 => 4,  21 => 2,  24 => 3,  19 => 1,  93 => 27,  88 => 28,  78 => 24,  46 => 10,  44 => 20,  27 => 3,  79 => 18,  72 => 21,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 42,  111 => 47,  108 => 47,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 23,  66 => 25,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 68,  162 => 59,  154 => 60,  149 => 56,  147 => 54,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 33,  99 => 31,  95 => 34,  92 => 43,  86 => 19,  82 => 25,  80 => 27,  73 => 20,  64 => 19,  60 => 20,  57 => 20,  54 => 15,  51 => 13,  48 => 11,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}