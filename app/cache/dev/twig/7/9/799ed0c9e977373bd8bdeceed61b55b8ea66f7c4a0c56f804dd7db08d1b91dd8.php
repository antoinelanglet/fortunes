<?php

/* default/worst.html.twig */
class __TwigTemplate_7f007f7e7abbef9d9b723b7046de5fa65efac171b8d69cee8b55567d2db6ff5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/worst.html.twig", 1);
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
        $__internal_4f33e40dda0a790339952afa8a207045e5b18c73a1b12d1331f35ce1b25067f1 = $this->env->getExtension("native_profiler");
        $__internal_4f33e40dda0a790339952afa8a207045e5b18c73a1b12d1331f35ce1b25067f1->enter($__internal_4f33e40dda0a790339952afa8a207045e5b18c73a1b12d1331f35ce1b25067f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/worst.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f33e40dda0a790339952afa8a207045e5b18c73a1b12d1331f35ce1b25067f1->leave($__internal_4f33e40dda0a790339952afa8a207045e5b18c73a1b12d1331f35ce1b25067f1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e88abea2ef1e31be5d2952353c7e6465150843dcedb1b2d0b2918767ec5dcdf = $this->env->getExtension("native_profiler");
        $__internal_6e88abea2ef1e31be5d2952353c7e6465150843dcedb1b2d0b2918767ec5dcdf->enter($__internal_6e88abea2ef1e31be5d2952353c7e6465150843dcedb1b2d0b2918767ec5dcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row\">

  <div class=\"col-sm-1\"></div>

  <div class=\"col-sm-2\"></div>

  <div class=\"col-sm-4\">
    <h2 class=\"text-center\">Les moins bons Faker</h2><br>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstQuotes"]) ? $context["worstQuotes"] : $this->getContext($context, "worstQuotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["worstQuote"]) {
            // line 12
            echo "      <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "title", array()), "html", null, true);
            echo "</h3>
      <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "content", array()), "html", null, true);
            echo "</p>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <p class=\"pull-left\"> Author : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "author", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-sm-6\">
          <p class=\"pull-right\"> Date : ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["worstQuote"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        </div>
      </div>
      <div class=\"pull-right\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["worstQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "upVote", array()), "html", null, true);
            echo "</p>
          </div>
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["worstQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 34
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
        // line 42
        echo "  </div>

  <div class=\"col-sm-1\"></div>

</div>
";
        
        $__internal_6e88abea2ef1e31be5d2952353c7e6465150843dcedb1b2d0b2918767ec5dcdf->leave($__internal_6e88abea2ef1e31be5d2952353c7e6465150843dcedb1b2d0b2918767ec5dcdf_prof);

    }

    public function getTemplateName()
    {
        return "default/worst.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  98 => 34,  92 => 31,  86 => 28,  80 => 25,  71 => 19,  65 => 16,  59 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="row">*/
/* */
/*   <div class="col-sm-1"></div>*/
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
/* {% endblock %}*/
/* */
