<?php

/* default/idquote.html.twig */
class __TwigTemplate_a45cad49db66199cbee458119dcd8d619b62c6a5af349489f66ef8af6bfe87a5 extends Twig_Template
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
        $__internal_3ef3c74566a144344eb16a0d499d8a940330b84e3637fd5e6ff0d388f3ae37fa = $this->env->getExtension("native_profiler");
        $__internal_3ef3c74566a144344eb16a0d499d8a940330b84e3637fd5e6ff0d388f3ae37fa->enter($__internal_3ef3c74566a144344eb16a0d499d8a940330b84e3637fd5e6ff0d388f3ae37fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/idquote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ef3c74566a144344eb16a0d499d8a940330b84e3637fd5e6ff0d388f3ae37fa->leave($__internal_3ef3c74566a144344eb16a0d499d8a940330b84e3637fd5e6ff0d388f3ae37fa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cafaff9229910cbd930c32de194c1c21e62a3d2f0bf83bb00ee03de4c7c354d = $this->env->getExtension("native_profiler");
        $__internal_3cafaff9229910cbd930c32de194c1c21e62a3d2f0bf83bb00ee03de4c7c354d->enter($__internal_3cafaff9229910cbd930c32de194c1c21e62a3d2f0bf83bb00ee03de4c7c354d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_iterated'] = false;
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

          <div class=\"col-sm-6\">
              <p class=\"pull-right\">";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quote"], "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 45
                echo "              <h3>Comments</h3>
              <p>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
                echo "</p>
              <p>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "</p>
              <p>Date : ";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
                echo "</p>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          </div>
          <br><br>
          <hr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "          <h2>Aucune quote :(</h2>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
      </div>

      <div class=\"col-sm-4\"></div>
    </div>



  </div>
  ";
        
        $__internal_3cafaff9229910cbd930c32de194c1c21e62a3d2f0bf83bb00ee03de4c7c354d->leave($__internal_3cafaff9229910cbd930c32de194c1c21e62a3d2f0bf83bb00ee03de4c7c354d_prof);

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
        return array (  154 => 57,  147 => 55,  139 => 51,  130 => 48,  126 => 47,  122 => 46,  119 => 45,  115 => 44,  105 => 37,  99 => 34,  93 => 31,  87 => 28,  78 => 22,  72 => 19,  65 => 15,  60 => 13,  55 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
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
/* */
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="col-sm-6">*/
/*               <p class="pull-right">{% for comment in quote.comments %}*/
/*               <h3>Comments</h3>*/
/*               <p>{{ comment.author }}</p>*/
/*               <p>{{ comment.comment }}</p>*/
/*               <p>Date : {{comment.createdAt|date("d/m/Y H:i")}}</p>*/
/* */
/*               {% endfor %}*/
/*           </div>*/
/*           <br><br>*/
/*           <hr>*/
/*           {% else %}*/
/*           <h2>Aucune quote :(</h2>*/
/*         {% endfor %}*/
/* */
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
