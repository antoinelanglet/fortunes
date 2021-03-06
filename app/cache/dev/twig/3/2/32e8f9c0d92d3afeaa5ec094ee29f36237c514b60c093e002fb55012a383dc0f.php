<?php

/* default/categorie.html.twig */
class __TwigTemplate_f4c0db3886fcfeb1577d0f96ac9625bda1725d65c75eff921199bd2273326839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/categorie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cb3366ee6b627adfa9c57830b51019eaf791e1592071e49c771c2f42bd7c63b = $this->env->getExtension("native_profiler");
        $__internal_8cb3366ee6b627adfa9c57830b51019eaf791e1592071e49c771c2f42bd7c63b->enter($__internal_8cb3366ee6b627adfa9c57830b51019eaf791e1592071e49c771c2f42bd7c63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb3366ee6b627adfa9c57830b51019eaf791e1592071e49c771c2f42bd7c63b->leave($__internal_8cb3366ee6b627adfa9c57830b51019eaf791e1592071e49c771c2f42bd7c63b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d00263a3e111a53d4c2c7c73056ac2c9ffbf122f5fa7a5bde5c835d07dde233 = $this->env->getExtension("native_profiler");
        $__internal_8d00263a3e111a53d4c2c7c73056ac2c9ffbf122f5fa7a5bde5c835d07dde233->enter($__internal_8d00263a3e111a53d4c2c7c73056ac2c9ffbf122f5fa7a5bde5c835d07dde233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>
      <div class=\"col-sm-4\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["laCategorie"]) ? $context["laCategorie"] : $this->getContext($context, "laCategorie")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 10
            echo "
        <h2 class=\"text-center\">Quote par : ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "categorie", array()), "html", null, true);
            echo "</h2><br>
          <h3 class=\"text-center\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</h3>
          <div class=\"backgroundblue\">
          <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
        </div>
          <div class=\"row\">
            <div class=\"col-sm-6\">
            <p class=\"pull-left\"> Author : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-sm-6\">
              <p class=\"pull-right\"> Date : ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</p>
            </div>
          </div>
          <div class=\"pull-right\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "downVote", array()), "html", null, true);
            echo "</p>
              </div>
            </div>
          </div>

          <br><br>
          <hr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "          <h2>Aucune quote pour l'instant :(</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "


      </div>

      <div class=\"col-sm-4\"></div>
    </div>





  </div>
  ";
        
        $__internal_8d00263a3e111a53d4c2c7c73056ac2c9ffbf122f5fa7a5bde5c835d07dde233->leave($__internal_8d00263a3e111a53d4c2c7c73056ac2c9ffbf122f5fa7a5bde5c835d07dde233_prof);

    }

    public function getTemplateName()
    {
        return "default/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  118 => 44,  105 => 36,  99 => 33,  93 => 30,  87 => 27,  78 => 21,  72 => 18,  65 => 14,  60 => 12,  56 => 11,  53 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"></div>*/
/*       <div class="col-sm-4">*/
/*       {% for quote in laCategorie %}*/
/* */
/*         <h2 class="text-center">Quote par : {{quote.categorie}}</h2><br>*/
/*           <h3 class="text-center">{{quote.title}}</h3>*/
/*           <div class="backgroundblue">*/
/*           <p>{{quote.content}}</p>*/
/*         </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*             <p class="pull-left"> Author : {{quote.author}}</p>*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*               <p class="pull-right"> Date : {{quote.createdAt|date("d/m/Y H:i")}}</p>*/
/*             </div>*/
/*           </div>*/
/*           <div class="pull-right">*/
/*             <div class="row">*/
/*               <div class="col-sm-3">*/
/*                 <a href="{{path("voteup", {id: quote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <p>{{quote.upVote}}</p>*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <a href="{{path("votedown", {id: quote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <p>{{quote.downVote}}</p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <br><br>*/
/*           <hr>*/
/*           {% else %}*/
/*           <h2>Aucune quote pour l'instant :(</h2>*/
/*             {% endfor %}*/
/* */
/* */
/* */
/*       </div>*/
/* */
/*       <div class="col-sm-4"></div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/*   </div>*/
/*   {% endblock %}*/
/* */
