<?php

/* default/index.html.twig */
class __TwigTemplate_7b516eada293cb546f74d53496c29d41af85f62e6dc3275c01bb196243268969 extends Twig_Template
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
        $__internal_6ce227b5e92523c6f54d9678633e6451888e0ee2c6f8213b4528ee1ba2872e5f = $this->env->getExtension("native_profiler");
        $__internal_6ce227b5e92523c6f54d9678633e6451888e0ee2c6f8213b4528ee1ba2872e5f->enter($__internal_6ce227b5e92523c6f54d9678633e6451888e0ee2c6f8213b4528ee1ba2872e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce227b5e92523c6f54d9678633e6451888e0ee2c6f8213b4528ee1ba2872e5f->leave($__internal_6ce227b5e92523c6f54d9678633e6451888e0ee2c6f8213b4528ee1ba2872e5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1084ed77bf2f44e65ae1f8c228377fb16d68a2f1ba1c1fcb102e41fe89aac84 = $this->env->getExtension("native_profiler");
        $__internal_c1084ed77bf2f44e65ae1f8c228377fb16d68a2f1ba1c1fcb102e41fe89aac84->enter($__internal_c1084ed77bf2f44e65ae1f8c228377fb16d68a2f1ba1c1fcb102e41fe89aac84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 10
            echo "          <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</h3>
          <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <p class=\"pull-left\"> Author : ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-sm-6\">
              <p class=\"pull-right\"> Date : ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
            </div>
          </div>
          <div class=\"pull-right\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 32
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
        // line 40
        echo "      </div>

      <div class=\"col-sm-4\"></div>
    </div>

    ";
        // line 45
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:showRated"));
        echo "

  </div>

";
        
        $__internal_c1084ed77bf2f44e65ae1f8c228377fb16d68a2f1ba1c1fcb102e41fe89aac84->leave($__internal_c1084ed77bf2f44e65ae1f8c228377fb16d68a2f1ba1c1fcb102e41fe89aac84_prof);

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
        return array (  116 => 45,  109 => 40,  95 => 32,  89 => 29,  83 => 26,  77 => 23,  68 => 17,  62 => 14,  56 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*         {% for quote in quotes %}*/
/*           <h3 class="text-center">{{quote.title}}</h3>*/
/*           <p>{{quote.content}}</p>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*               <p class="pull-left"> Author : {{quote.author}}</p>*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*               <p class="pull-right"> Date : {{quote.createdAt|date("d/m/Y")}}</p>*/
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
/*     {{render(controller("AppBundle:Default:showRated"))}}*/
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
