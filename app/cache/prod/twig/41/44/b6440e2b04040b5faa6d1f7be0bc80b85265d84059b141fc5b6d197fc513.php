<?php

/* ::layout.html.twig */
class __TwigTemplate_4144b6440e2b04040b5faa6d1f7be0bc80b85265d84059b141fc5b6d197fc513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.ico\">

        <title>Words 2.0</title>

        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>

        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Words 2.0</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul id=\"js_topmenu\" class=\"nav navbar-nav\">
                        <li><a id=\"home\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Home</a></li>
                        <li><a id=\"check_me\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("check_me");
        echo "\">Check me</a></li>
                        <li><a id=\"words_list\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("words_list");
        echo "\">Words list</a></li>
                        <li><a id=\"sentences\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("sentences");
        echo "\">Sentences</a></li>
                        <li><a id=\"grammary\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("grammary");
        echo "\">Grammary</a></li>
                        <li><a id=\"contact\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class=\"container\">

                ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
        </div><!-- /.container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 64,  81 => 45,  77 => 44,  118 => 65,  58 => 13,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  491 => 206,  488 => 205,  484 => 204,  481 => 203,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  344 => 150,  340 => 149,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 98,  233 => 97,  226 => 95,  213 => 90,  202 => 81,  200 => 80,  197 => 79,  192 => 76,  175 => 71,  146 => 55,  134 => 51,  126 => 48,  74 => 23,  53 => 14,  161 => 32,  157 => 30,  90 => 15,  84 => 18,  52 => 6,  34 => 6,  520 => 44,  513 => 403,  510 => 402,  506 => 400,  501 => 398,  496 => 208,  479 => 202,  468 => 380,  466 => 199,  347 => 151,  335 => 258,  333 => 257,  139 => 53,  137 => 67,  110 => 45,  104 => 42,  96 => 22,  76 => 24,  20 => 1,  37 => 8,  480 => 162,  474 => 382,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 260,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 56,  111 => 40,  107 => 36,  61 => 13,  273 => 200,  269 => 94,  254 => 92,  246 => 101,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 72,  159 => 61,  143 => 56,  135 => 53,  131 => 50,  119 => 22,  108 => 44,  102 => 23,  71 => 27,  67 => 26,  63 => 15,  59 => 17,  47 => 17,  94 => 33,  89 => 47,  85 => 46,  79 => 15,  75 => 17,  68 => 20,  56 => 21,  50 => 13,  201 => 92,  196 => 90,  183 => 73,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 59,  138 => 54,  136 => 52,  123 => 47,  121 => 46,  117 => 44,  115 => 42,  105 => 57,  101 => 41,  91 => 27,  69 => 25,  62 => 18,  49 => 5,  28 => 3,  35 => 14,  38 => 6,  29 => 3,  26 => 2,  87 => 25,  72 => 22,  66 => 39,  55 => 15,  41 => 17,  31 => 4,  25 => 4,  21 => 2,  24 => 3,  19 => 1,  43 => 6,  98 => 31,  93 => 48,  88 => 31,  78 => 10,  46 => 7,  44 => 9,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 59,  154 => 29,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 55,  122 => 32,  116 => 41,  112 => 42,  109 => 27,  106 => 33,  103 => 55,  99 => 36,  95 => 28,  92 => 36,  86 => 19,  82 => 12,  80 => 19,  73 => 43,  64 => 17,  60 => 9,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 8,  39 => 12,  36 => 5,  33 => 9,  30 => 7,);
    }
}
