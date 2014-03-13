<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_fad457516cf2dc82272c73299b78ee497de6a3f8e27a15ef6cf82d41115dd089 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  363 => 126,  357 => 123,  332 => 116,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  303 => 106,  291 => 102,  274 => 97,  231 => 83,  212 => 78,  190 => 76,  185 => 74,  174 => 65,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  606 => 318,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  527 => 281,  525 => 280,  522 => 279,  519 => 278,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  448 => 240,  438 => 236,  428 => 230,  422 => 226,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  380 => 206,  361 => 195,  329 => 188,  313 => 183,  304 => 181,  300 => 105,  295 => 178,  288 => 101,  205 => 108,  188 => 102,  184 => 101,  170 => 96,  191 => 67,  178 => 66,  172 => 64,  70 => 24,  367 => 198,  353 => 121,  350 => 327,  308 => 287,  306 => 107,  113 => 48,  100 => 39,  65 => 11,  114 => 64,  81 => 45,  77 => 20,  118 => 49,  58 => 14,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 320,  609 => 319,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 283,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 276,  491 => 206,  488 => 205,  484 => 204,  481 => 203,  456 => 197,  454 => 244,  451 => 195,  449 => 194,  439 => 189,  436 => 235,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 205,  373 => 160,  359 => 154,  351 => 120,  344 => 119,  340 => 149,  327 => 114,  325 => 137,  317 => 185,  311 => 132,  301 => 128,  297 => 104,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 96,  263 => 95,  260 => 108,  255 => 93,  237 => 98,  233 => 97,  226 => 95,  213 => 90,  202 => 77,  200 => 80,  197 => 104,  192 => 76,  175 => 65,  146 => 55,  134 => 54,  126 => 40,  53 => 15,  161 => 63,  90 => 26,  84 => 27,  34 => 6,  520 => 44,  513 => 403,  510 => 402,  506 => 400,  501 => 398,  496 => 208,  479 => 256,  468 => 380,  466 => 199,  347 => 191,  335 => 258,  333 => 257,  137 => 67,  110 => 45,  104 => 32,  76 => 31,  20 => 1,  480 => 162,  474 => 382,  469 => 158,  461 => 155,  457 => 245,  453 => 151,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 197,  362 => 110,  360 => 109,  355 => 329,  341 => 118,  337 => 103,  322 => 136,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 91,  294 => 90,  285 => 175,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 56,  107 => 36,  61 => 15,  273 => 174,  269 => 94,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 96,  227 => 81,  224 => 81,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 53,  119 => 40,  102 => 40,  71 => 23,  67 => 24,  63 => 21,  59 => 11,  94 => 33,  89 => 30,  85 => 24,  75 => 19,  68 => 12,  56 => 16,  201 => 106,  196 => 90,  183 => 73,  171 => 70,  166 => 95,  163 => 62,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 57,  91 => 35,  62 => 12,  49 => 11,  28 => 3,  38 => 7,  26 => 6,  87 => 34,  31 => 8,  25 => 4,  21 => 2,  24 => 3,  19 => 1,  93 => 27,  88 => 25,  78 => 18,  46 => 10,  44 => 9,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 15,  40 => 8,  37 => 7,  22 => 2,  246 => 101,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 47,  120 => 36,  115 => 42,  111 => 47,  108 => 47,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 23,  66 => 25,  55 => 13,  52 => 12,  50 => 18,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 60,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 42,  122 => 41,  116 => 41,  112 => 36,  109 => 35,  106 => 36,  103 => 33,  99 => 32,  95 => 34,  92 => 27,  86 => 19,  82 => 12,  80 => 32,  73 => 23,  64 => 13,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 3,);
    }
}
