<?php

/* default/bestRated.html.twig */
class __TwigTemplate_93d0262797c7a6f21d5bdf5e52fce42209ff6832a5ddc2fe3369fcb3508222f6 extends Twig_Template
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
        $__internal_308343b01b46707b1c1de69fa2d414cb3c25e06a94420994c4dccc442b652d5e = $this->env->getExtension("native_profiler");
        $__internal_308343b01b46707b1c1de69fa2d414cb3c25e06a94420994c4dccc442b652d5e->enter($__internal_308343b01b46707b1c1de69fa2d414cb3c25e06a94420994c4dccc442b652d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/bestRated.html.twig"));

        // line 1
        echo "<div class=\"row\">
  <div class=\"col-sm-4\"></div>

  <div class=\"col-sm-4\">
    <h2>Les meilleurs Faker</h2><br>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 7
            echo "      <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</h3>
      <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <p class=\"pull-left\"> Author : ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-sm-6\">
          <p class=\"pull-right\"> Date : ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        </div>
      </div>
      <div class=\"pull-right\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
          </div>
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 29
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
        // line 37
        echo "  </div>

  <div class=\"col-sm-4\"></div>
</div>
";
        
        $__internal_308343b01b46707b1c1de69fa2d414cb3c25e06a94420994c4dccc442b652d5e->leave($__internal_308343b01b46707b1c1de69fa2d414cb3c25e06a94420994c4dccc442b652d5e_prof);

    }

    public function getTemplateName()
    {
        return "default/bestRated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  77 => 29,  71 => 26,  65 => 23,  59 => 20,  50 => 14,  44 => 11,  38 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <div class="row">*/
/*   <div class="col-sm-4"></div>*/
/* */
/*   <div class="col-sm-4">*/
/*     <h2>Les meilleurs Faker</h2><br>*/
/*     {% for quote in quotes %}*/
/*       <h3 class="text-center">{{quote.title}}</h3>*/
/*       <p>{{quote.content}}</p>*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-left"> Author : {{quote.author}}</p>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-right"> Date : {{quote.createdAt|date("d/m/Y")}}</p>*/
/*         </div>*/
/*       </div>*/
/*       <div class="pull-right">*/
/*         <div class="row">*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("voteup", {id: quote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{quote.upVote}}</p>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("votedown", {id: quote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{quote.downVote}}</p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <br><br>*/
/*       <hr>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <div class="col-sm-4"></div>*/
/* </div>*/
/* */
