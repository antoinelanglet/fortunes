<?php

/* default/index.html.twig */
class __TwigTemplate_3c9623c53a5a475b285b29e2bc19e7823e29f515465c0d5025b7db3cdc0859fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_c8d6fb9cc213531be061200c45cebb91f0f28cd5d655c682e5f9d9a49751dbd2 = $this->env->getExtension("native_profiler");
        $__internal_c8d6fb9cc213531be061200c45cebb91f0f28cd5d655c682e5f9d9a49751dbd2->enter($__internal_c8d6fb9cc213531be061200c45cebb91f0f28cd5d655c682e5f9d9a49751dbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d6fb9cc213531be061200c45cebb91f0f28cd5d655c682e5f9d9a49751dbd2->leave($__internal_c8d6fb9cc213531be061200c45cebb91f0f28cd5d655c682e5f9d9a49751dbd2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_651dff1b20a1d360f5ab2b470d93f29604d85c021cbd003208f278438311a206 = $this->env->getExtension("native_profiler");
        $__internal_651dff1b20a1d360f5ab2b470d93f29604d85c021cbd003208f278438311a206->enter($__internal_651dff1b20a1d360f5ab2b470d93f29604d85c021cbd003208f278438311a206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">
        <h2 class=\"text-center\">Quotes récentes</h2><br>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 11
            echo "          <h3 class=\"text-center\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("id", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</a></h3>
          <div class=\"backgroundblue\">
          <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
        </div>
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"infobulle\">
              <p class=\"pull-left\"> Author : <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author", array("author" => $this->getAttribute($context["quote"], "author", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</a></p>

            </div>
            </div>
            <div class=\"col-sm-6\">
              <p class=\"pull-right\"> Date : ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</p>
            </div>
          </div>
          <div class=\"pull-right\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 38
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
        // line 46
        echo "      </div>

      <div class=\"col-sm-4\"></div>
    </div>



  </div>

";
        
        $__internal_651dff1b20a1d360f5ab2b470d93f29604d85c021cbd003208f278438311a206->leave($__internal_651dff1b20a1d360f5ab2b470d93f29604d85c021cbd003208f278438311a206_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 46,  105 => 38,  99 => 35,  93 => 32,  87 => 29,  78 => 23,  68 => 18,  60 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <h2 class="text-center">Quotes récentes</h2><br>*/
/*         {% for quote in quotes %}*/
/*           <h3 class="text-center"><a href="{{path("id", {id: quote.id})}}">{{quote.title}}</a></h3>*/
/*           <div class="backgroundblue">*/
/*           <p>{{quote.content}}</p>*/
/*         </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*               <div class="infobulle">*/
/*               <p class="pull-left"> Author : <a href="{{path("author", {author: quote.author})}}">{{quote.author}}</a></p>*/
/* */
/*             </div>*/
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
