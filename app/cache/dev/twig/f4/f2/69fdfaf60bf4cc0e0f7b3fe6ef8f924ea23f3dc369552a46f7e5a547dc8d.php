<?php

/* DwrFrontendBundle:Default:index.html.twig */
class __TwigTemplate_f4f269fdfaf60bf4cc0e0f7b3fe6ef8f924ea23f3dc369552a46f7e5a547dc8d extends Twig_Template
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
        echo "<div id=\"js_home\" class=\"margin-top-150 subcontainer\">
    <p>
        Lorem ipsum dolor sit amet, ne nec iuvaret utroque fabellas. Autem utinam
        voluptatibus ius ne, cu usu posse placerat inimicus. Ex has facilisi 
        erroribus, cu splendide dissentiet vis. Duo an stet iisque. Ne elit habemus 
        fierent nam. Fierent definiebas ne vis, no fierent oporteat concludaturque 
        ius. Tantas omnesque appellantur no vix.
    </p>
    <p>
        Sed esse dicunt suscipiantur in, at nec consul omnium, ei mea omnium utamur. 
        Eu qui decore volumus. At persius atomorum cum, solum alienum phaedrum nam ad. 
        Ferri ornatus intellegat sea in, nam tritani prodesset ea. Has an dicat 
        senserit molestiae, nam ne hendrerit vituperata, paulo copiosae te quo. 
        Dolore delenit has id.
    </p>
    <p>
        No nam nobis partem verterem, no dolor volumus reprimique vis. Ius id 
        eleifend interesset eloquentiam, autem aeterno eu usu, idque legere 
        molestie no per. Vim ocurreret quaerendum te, sapientem erroribus 
        disputando his cu. No cetero scaevola honestatis nec.
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "DwrFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
