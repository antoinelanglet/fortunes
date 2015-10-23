<?php

/* default/idquote.html.twig */
class __TwigTemplate_37cda185e44ee8a38dc0762d9a574efd6a04ba50f676c8fef832b28a1f251c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/idquote.html.twig", 1);
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
        $__internal_2cf22724148a06e31b50b049ec94a45bd7c54bcff24d06f65e04903cbe604ae6 = $this->env->getExtension("native_profiler");
        $__internal_2cf22724148a06e31b50b049ec94a45bd7c54bcff24d06f65e04903cbe604ae6->enter($__internal_2cf22724148a06e31b50b049ec94a45bd7c54bcff24d06f65e04903cbe604ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/idquote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf22724148a06e31b50b049ec94a45bd7c54bcff24d06f65e04903cbe604ae6->leave($__internal_2cf22724148a06e31b50b049ec94a45bd7c54bcff24d06f65e04903cbe604ae6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e1a5a4f2e4cb3f013d666b0d0ee5cd0680b5d568946475068d8293d6fd82f6 = $this->env->getExtension("native_profiler");
        $__internal_d2e1a5a4f2e4cb3f013d666b0d0ee5cd0680b5d568946475068d8293d6fd82f6->enter($__internal_d2e1a5a4f2e4cb3f013d666b0d0ee5cd0680b5d568946475068d8293d6fd82f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">

      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quoteunique"]) ? $context["quoteunique"] : $this->getContext($context, "quoteunique")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 12
            echo "        <h2 class=\"text-center\">Quote par : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</h2><br>
          <h3 class=\"text-center\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</h3>
          <div class=\"backgroundblue\">
          <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
        </div>
          <div class=\"row\">
            <div class=\"col-sm-6\">
            <p class=\"pull-left\"> Author : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-sm-6\">
              <p class=\"pull-right\"> Date : ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</p>
            </div>
          </div>
          <div class=\"pull-right\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "downVote", array()), "html", null, true);
            echo "</p>
              </div>
            </div>
          </div>
          <br><br>
          <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </div>

      <div class=\"col-sm-4\"></div>
    </div>



  </div>
  ";
        
        $__internal_d2e1a5a4f2e4cb3f013d666b0d0ee5cd0680b5d568946475068d8293d6fd82f6->leave($__internal_d2e1a5a4f2e4cb3f013d666b0d0ee5cd0680b5d568946475068d8293d6fd82f6_prof);

    }

    public function getTemplateName()
    {
        return "default/idquote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  104 => 37,  98 => 34,  92 => 31,  86 => 28,  77 => 22,  71 => 19,  64 => 15,  59 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"></div>*/
/* */
/*       <div class="col-sm-4">*/
/* */
/*       {% for quote in quoteunique %}*/
/*         <h2 class="text-center">Quote par : {{quote.author}}</h2><br>*/
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
/*           <br><br>*/
/*           <hr>*/
/*         {% endfor %}*/
/*       </div>*/
/* */
/*       <div class="col-sm-4"></div>*/
/*     </div>*/
/* */
/* */
/* */
/*   </div>*/
/*   {% endblock %}*/
/* */
