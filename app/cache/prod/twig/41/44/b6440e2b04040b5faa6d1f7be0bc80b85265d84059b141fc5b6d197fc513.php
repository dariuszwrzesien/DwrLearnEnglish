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
        return array (  128 => 56,  125 => 55,  118 => 65,  114 => 64,  105 => 57,  103 => 55,  93 => 48,  89 => 47,  85 => 46,  81 => 45,  77 => 44,  73 => 43,  66 => 39,  41 => 17,  35 => 14,  20 => 1,  31 => 4,  28 => 3,);
    }
}
