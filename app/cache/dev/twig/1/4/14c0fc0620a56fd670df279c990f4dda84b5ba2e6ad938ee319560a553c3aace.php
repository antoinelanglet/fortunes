<?php

/* default/author.html.twig */
class __TwigTemplate_43cd38c4e8358d76681af451e34daa37b166fc9926f42e229232292a590db016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/author.html.twig", 1);
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
        $__internal_c2b5510cadda53b11f69cb53743181f2a64759e170f782c5a74d8fc5c7e54ccb = $this->env->getExtension("native_profiler");
        $__internal_c2b5510cadda53b11f69cb53743181f2a64759e170f782c5a74d8fc5c7e54ccb->enter($__internal_c2b5510cadda53b11f69cb53743181f2a64759e170f782c5a74d8fc5c7e54ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/author.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b5510cadda53b11f69cb53743181f2a64759e170f782c5a74d8fc5c7e54ccb->leave($__internal_c2b5510cadda53b11f69cb53743181f2a64759e170f782c5a74d8fc5c7e54ccb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23d9aa9fb695e8c60627c5579a174cb165a174f8d8ba5f636c1ada662c08476 = $this->env->getExtension("native_profiler");
        $__internal_b23d9aa9fb695e8c60627c5579a174cb165a174f8d8ba5f636c1ada662c08476->enter($__internal_b23d9aa9fb695e8c60627c5579a174cb165a174f8d8ba5f636c1ada662c08476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authorQuotes"]) ? $context["authorQuotes"] : $this->getContext($context, "authorQuotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 11
            echo "        <h2 class=\"text-center\">Tri par autheur : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
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
        
        $__internal_b23d9aa9fb695e8c60627c5579a174cb165a174f8d8ba5f636c1ada662c08476->leave($__internal_b23d9aa9fb695e8c60627c5579a174cb165a174f8d8ba5f636c1ada662c08476_prof);

    }

    public function getTemplateName()
    {
        return "default/author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  102 => 36,  96 => 33,  90 => 30,  84 => 27,  75 => 21,  69 => 18,  62 => 14,  57 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"></div>*/
/* */
/*       <div class="col-sm-4">*/
/* */
/*         {% for quote in authorQuotes %}*/
/*         <h2 class="text-center">Tri par autheur : {{quote.author}}</h2><br>*/
/*           <h3 class="text-center">{{quote.title}}</h3>*/
/*           <div class="backgroundblue">*/
/*           <p>{{quote.content}}</p>*/
/*         </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*               <p class="pull-left"> Author : {{quote.author}}</p>*/
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
/*         {% endfor %}*/
/*       </div>*/
/* */
/*       <div class="col-sm-4"></div>*/
/*     </div>*/
/* */
/* */
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
