<?php

/* base.html.twig */
class __TwigTemplate_20e6ba94848ee7d186202b4e02b1319c978b66177b073e947fc3951732c0888c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d8f2ed4b848af869275bf67d6e4dcef63181f8ccaf1b946a685b5299698b644 = $this->env->getExtension("native_profiler");
        $__internal_8d8f2ed4b848af869275bf67d6e4dcef63181f8ccaf1b946a685b5299698b644->enter($__internal_8d8f2ed4b848af869275bf67d6e4dcef63181f8ccaf1b946a685b5299698b644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

        <!-- BOOTSTRAP -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

        <!-- FONTAWESOME -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_8d8f2ed4b848af869275bf67d6e4dcef63181f8ccaf1b946a685b5299698b644->leave($__internal_8d8f2ed4b848af869275bf67d6e4dcef63181f8ccaf1b946a685b5299698b644_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdf741c011cc9f5f2bf55dee7f6a0e299b0dbfa1bfc240d53fb929c9b391fcea = $this->env->getExtension("native_profiler");
        $__internal_fdf741c011cc9f5f2bf55dee7f6a0e299b0dbfa1bfc240d53fb929c9b391fcea->enter($__internal_fdf741c011cc9f5f2bf55dee7f6a0e299b0dbfa1bfc240d53fb929c9b391fcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fdf741c011cc9f5f2bf55dee7f6a0e299b0dbfa1bfc240d53fb929c9b391fcea->leave($__internal_fdf741c011cc9f5f2bf55dee7f6a0e299b0dbfa1bfc240d53fb929c9b391fcea_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f59199d2f01d3a5a107fc95dc17c551f8caf3daaf240d8773e03db755971052 = $this->env->getExtension("native_profiler");
        $__internal_6f59199d2f01d3a5a107fc95dc17c551f8caf3daaf240d8773e03db755971052->enter($__internal_6f59199d2f01d3a5a107fc95dc17c551f8caf3daaf240d8773e03db755971052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f59199d2f01d3a5a107fc95dc17c551f8caf3daaf240d8773e03db755971052->leave($__internal_6f59199d2f01d3a5a107fc95dc17c551f8caf3daaf240d8773e03db755971052_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5becfa72b54f730c8170c95b8349b04c5cff463d979837b5df2c9fb4843dc017 = $this->env->getExtension("native_profiler");
        $__internal_5becfa72b54f730c8170c95b8349b04c5cff463d979837b5df2c9fb4843dc017->enter($__internal_5becfa72b54f730c8170c95b8349b04c5cff463d979837b5df2c9fb4843dc017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5becfa72b54f730c8170c95b8349b04c5cff463d979837b5df2c9fb4843dc017->leave($__internal_5becfa72b54f730c8170c95b8349b04c5cff463d979837b5df2c9fb4843dc017_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  81 => 20,  69 => 5,  60 => 22,  57 => 21,  55 => 20,  49 => 17,  36 => 7,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <link rel="stylesheet" href="{{asset("css/style.css")}}">*/
/* */
/*         <!-- BOOTSTRAP -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* */
/*         <!-- FONTAWESOME -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
