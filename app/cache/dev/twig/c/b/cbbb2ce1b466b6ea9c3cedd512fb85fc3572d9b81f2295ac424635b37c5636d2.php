<?php

/* base.html.twig */
class __TwigTemplate_c74add9f5f7eb4b111c77a5888dc4e5b529b8849199d62405517d5eb5a2dc4cf extends Twig_Template
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
        $__internal_a1c8691f6098ddaca2735afe0862951dd9c50d8cd9944fd1b0ab668e417df24d = $this->env->getExtension("native_profiler");
        $__internal_a1c8691f6098ddaca2735afe0862951dd9c50d8cd9944fd1b0ab668e417df24d->enter($__internal_a1c8691f6098ddaca2735afe0862951dd9c50d8cd9944fd1b0ab668e417df24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



        <div class=\"bs-component\">
                      <nav class=\"navbar navbar-inverse\">
                        <div class=\"container-fluid\">
                          <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                              <span class=\"sr-only\">Toggle navigation</span>
                              <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"/\">Quotes</a>
                          </div>

                          <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                            <ul class=\"nav navbar-nav\">
                              <li><a href=\"/\">Récentes</a></li>
                              <li><a href=\"/best\">Meilleures</a></li>
                              <li><a href=\"/worst\">Pires</a></li>
                              <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Catégories <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                  <li><a href=\"/categorie/Humour\">Humour</a></li>
                                  <li><a href=\"/categorie/Animaux\">Animaux</a></li>
                                  <li><a href=\"/categorie/Argent\">Argent</a></li>
                                  <li><a href=\"/categorie/Enfants\">Enfants</a></li>
                                  <li><a href=\"/categorie/Travail\">Travail</a></li>
                                  <li><a href=\"/categorie/Santé\">Santé</a></li>
                                  <li class=\"divider\"></li>
                                  <li><a href=\"/categorie/Inclassable\">Inclassable</a></li>
                                </ul>
                              </li>
                            </ul>

                            <ul class=\"nav navbar-nav navbar-right\">
                              <li><a href=\"/new\"><i class=\"fa fa-pencil-square-o fa-1x\"></i> Poster une quote</a></li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    </div>





        <!-- JQUERY -->
        <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <!-- BOOTSTRAP -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        <!-- CSS  -->
          <link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

        <!-- FONTAWESOME -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>
";
        
        $__internal_a1c8691f6098ddaca2735afe0862951dd9c50d8cd9944fd1b0ab668e417df24d->leave($__internal_a1c8691f6098ddaca2735afe0862951dd9c50d8cd9944fd1b0ab668e417df24d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb5f3edab6a3814364134b76638b64ef55f12aef2ae758dfa45c1ff435d4c8d2 = $this->env->getExtension("native_profiler");
        $__internal_eb5f3edab6a3814364134b76638b64ef55f12aef2ae758dfa45c1ff435d4c8d2->enter($__internal_eb5f3edab6a3814364134b76638b64ef55f12aef2ae758dfa45c1ff435d4c8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb5f3edab6a3814364134b76638b64ef55f12aef2ae758dfa45c1ff435d4c8d2->leave($__internal_eb5f3edab6a3814364134b76638b64ef55f12aef2ae758dfa45c1ff435d4c8d2_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae60c92c54afa6cc43758f9f967b303c97aa2fa501937e89593d72a17bc19f9b = $this->env->getExtension("native_profiler");
        $__internal_ae60c92c54afa6cc43758f9f967b303c97aa2fa501937e89593d72a17bc19f9b->enter($__internal_ae60c92c54afa6cc43758f9f967b303c97aa2fa501937e89593d72a17bc19f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae60c92c54afa6cc43758f9f967b303c97aa2fa501937e89593d72a17bc19f9b->leave($__internal_ae60c92c54afa6cc43758f9f967b303c97aa2fa501937e89593d72a17bc19f9b_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f885940d54342e896fc6fd3c7decfcdc1f1da2a1316776db54ff93c92fdb20d1 = $this->env->getExtension("native_profiler");
        $__internal_f885940d54342e896fc6fd3c7decfcdc1f1da2a1316776db54ff93c92fdb20d1->enter($__internal_f885940d54342e896fc6fd3c7decfcdc1f1da2a1316776db54ff93c92fdb20d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f885940d54342e896fc6fd3c7decfcdc1f1da2a1316776db54ff93c92fdb20d1->leave($__internal_f885940d54342e896fc6fd3c7decfcdc1f1da2a1316776db54ff93c92fdb20d1_prof);

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
        return array (  141 => 70,  130 => 69,  118 => 5,  109 => 71,  106 => 70,  104 => 69,  98 => 66,  90 => 61,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/* */
/* */
/*         <div class="bs-component">*/
/*                       <nav class="navbar navbar-inverse">*/
/*                         <div class="container-fluid">*/
/*                           <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">*/
/*                               <span class="sr-only">Toggle navigation</span>*/
/*                               <span class="icon-bar"></span>*/
/*                               <span class="icon-bar"></span>*/
/*                               <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <a class="navbar-brand" href="/">Quotes</a>*/
/*                           </div>*/
/* */
/*                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">*/
/*                             <ul class="nav navbar-nav">*/
/*                               <li><a href="/">Récentes</a></li>*/
/*                               <li><a href="/best">Meilleures</a></li>*/
/*                               <li><a href="/worst">Pires</a></li>*/
/*                               <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Catégories <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                   <li><a href="/categorie/Humour">Humour</a></li>*/
/*                                   <li><a href="/categorie/Animaux">Animaux</a></li>*/
/*                                   <li><a href="/categorie/Argent">Argent</a></li>*/
/*                                   <li><a href="/categorie/Enfants">Enfants</a></li>*/
/*                                   <li><a href="/categorie/Travail">Travail</a></li>*/
/*                                   <li><a href="/categorie/Santé">Santé</a></li>*/
/*                                   <li class="divider"></li>*/
/*                                   <li><a href="/categorie/Inclassable">Inclassable</a></li>*/
/*                                 </ul>*/
/*                               </li>*/
/*                             </ul>*/
/* */
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                               <li><a href="/new"><i class="fa fa-pencil-square-o fa-1x"></i> Poster une quote</a></li>*/
/*                             </ul>*/
/*                           </div>*/
/*                         </div>*/
/*                       </nav>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <!-- JQUERY -->*/
/*         <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/*         <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/*         <!-- BOOTSTRAP -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css">*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         <!-- CSS  -->*/
/*           <link rel="stylesheet" href="{{ asset("css/style.css") }}">*/
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
