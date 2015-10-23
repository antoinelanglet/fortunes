<?php

/* default/rated.html.twig */
class __TwigTemplate_63c1881205365b55b596a3cc94da6f49c30b2c686efb9a4bbccd27ce413945fe extends Twig_Template
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
        $__internal_c8c87147a61f53b19de0f811600ec4734866f88975f9deb30f58d03a21997187 = $this->env->getExtension("native_profiler");
        $__internal_c8c87147a61f53b19de0f811600ec4734866f88975f9deb30f58d03a21997187->enter($__internal_c8c87147a61f53b19de0f811600ec4734866f88975f9deb30f58d03a21997187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/rated.html.twig"));

        // line 1
        echo "<div class=\"row\">

  <div class=\"col-sm-1\"></div>

  <div class=\"col-sm-4\">
    <h2 class=\"text-center\">Les meilleurs Faker</h2><br>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestQuotes"]) ? $context["bestQuotes"] : $this->getContext($context, "bestQuotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["bestQuote"]) {
            // line 8
            echo "      <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "title", array()), "html", null, true);
            echo "</h3>
      <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "content", array()), "html", null, true);
            echo "</p>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <p class=\"pull-left\"> Author : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "author", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-sm-6\">
          <p class=\"pull-right\"> Date : ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bestQuote"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        </div>
      </div>
      <div class=\"pull-right\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["bestQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "upVote", array()), "html", null, true);
            echo "</p>
          </div>
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["bestQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "downVote", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
      </div>

      <br><br>
      <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bestQuote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </div>

  <div class=\"col-sm-2\"></div>

  <div class=\"col-sm-4\">
    <h2 class=\"text-center\">Les moins bons Faker</h2><br>
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstQuotes"]) ? $context["worstQuotes"] : $this->getContext($context, "worstQuotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["worstQuote"]) {
            // line 45
            echo "      <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "title", array()), "html", null, true);
            echo "</h3>
      <p>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "content", array()), "html", null, true);
            echo "</p>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <p class=\"pull-left\"> Author : ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "author", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-sm-6\">
          <p class=\"pull-right\"> Date : ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["worstQuote"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        </div>
      </div>
      <div class=\"pull-right\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["worstQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "upVote", array()), "html", null, true);
            echo "</p>
          </div>
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["worstQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "downVote", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
      </div>

      <br><br>
      <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worstQuote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </div>

  <div class=\"col-sm-1\"></div>

</div>
";
        
        $__internal_c8c87147a61f53b19de0f811600ec4734866f88975f9deb30f58d03a21997187->leave($__internal_c8c87147a61f53b19de0f811600ec4734866f88975f9deb30f58d03a21997187_prof);

    }

    public function getTemplateName()
    {
        return "default/rated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 75,  148 => 67,  142 => 64,  136 => 61,  130 => 58,  121 => 52,  115 => 49,  109 => 46,  104 => 45,  100 => 44,  92 => 38,  78 => 30,  72 => 27,  66 => 24,  60 => 21,  51 => 15,  45 => 12,  39 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <div class="row">*/
/* */
/*   <div class="col-sm-1"></div>*/
/* */
/*   <div class="col-sm-4">*/
/*     <h2 class="text-center">Les meilleurs Faker</h2><br>*/
/*     {% for bestQuote in bestQuotes %}*/
/*       <h3 class="text-center">{{bestQuote.title}}</h3>*/
/*       <p>{{bestQuote.content}}</p>*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-left"> Author : {{bestQuote.author}}</p>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-right"> Date : {{bestQuote.createdAt|date("d/m/Y")}}</p>*/
/*         </div>*/
/*       </div>*/
/*       <div class="pull-right">*/
/*         <div class="row">*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("voteup", {id: bestQuote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{bestQuote.upVote}}</p>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("votedown", {id: bestQuote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{bestQuote.downVote}}</p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <br><br>*/
/*       <hr>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <div class="col-sm-2"></div>*/
/* */
/*   <div class="col-sm-4">*/
/*     <h2 class="text-center">Les moins bons Faker</h2><br>*/
/*     {% for worstQuote in worstQuotes %}*/
/*       <h3 class="text-center">{{worstQuote.title}}</h3>*/
/*       <p>{{worstQuote.content}}</p>*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-left"> Author : {{worstQuote.author}}</p>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-right"> Date : {{worstQuote.createdAt|date("d/m/Y")}}</p>*/
/*         </div>*/
/*       </div>*/
/*       <div class="pull-right">*/
/*         <div class="row">*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("voteup", {id: worstQuote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{worstQuote.upVote}}</p>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("votedown", {id: worstQuote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{worstQuote.downVote}}</p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <br><br>*/
/*       <hr>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <div class="col-sm-1"></div>*/
/* */
/* </div>*/
/* */
