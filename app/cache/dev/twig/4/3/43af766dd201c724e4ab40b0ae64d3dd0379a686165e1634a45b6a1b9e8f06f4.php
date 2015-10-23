<?php

/* default/idquote.html.twig */
class __TwigTemplate_458668e9817b343a67ab995a2c9b4a61717ee1214309c4a2dfb231ce7b451ddb extends Twig_Template
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
        $__internal_4b542665d4f2a550120d9c2fc29ca2e9364511a222c6e686e11b1f106785c18c = $this->env->getExtension("native_profiler");
        $__internal_4b542665d4f2a550120d9c2fc29ca2e9364511a222c6e686e11b1f106785c18c->enter($__internal_4b542665d4f2a550120d9c2fc29ca2e9364511a222c6e686e11b1f106785c18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/idquote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b542665d4f2a550120d9c2fc29ca2e9364511a222c6e686e11b1f106785c18c->leave($__internal_4b542665d4f2a550120d9c2fc29ca2e9364511a222c6e686e11b1f106785c18c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f81e043e13045cb025935e2d339e36c9d1eb9d60c751faecd08d790bf495e513 = $this->env->getExtension("native_profiler");
        $__internal_f81e043e13045cb025935e2d339e36c9d1eb9d60c751faecd08d790bf495e513->enter($__internal_f81e043e13045cb025935e2d339e36c9d1eb9d60c751faecd08d790bf495e513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

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
            echo "          <h2 class=\"text-center\">Quote par : ";
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
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quote"], "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 44
                echo "              ";
                if (twig_in_filter($context["comment"], $this->getAttribute($context["quote"], "comments", array()))) {
                    // line 45
                    echo "            <h3>Comments</h3>
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
                // line 50
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          <br><br>
          <hr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "          <h2>Aucune quote :(</h2>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </div>

        <div>
          <form action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("newComment/{id}");
        echo "\" method=\"post\" novalidate>
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'row');
        echo "
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          </form>
        </div>

  </div>
</div>
</div>
";
        
        $__internal_f81e043e13045cb025935e2d339e36c9d1eb9d60c751faecd08d790bf495e513->leave($__internal_f81e043e13045cb025935e2d339e36c9d1eb9d60c751faecd08d790bf495e513_prof);

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
        return array (  178 => 63,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  157 => 56,  150 => 54,  143 => 51,  137 => 50,  132 => 48,  128 => 47,  124 => 46,  121 => 45,  118 => 44,  114 => 43,  105 => 37,  99 => 34,  93 => 31,  87 => 28,  78 => 22,  72 => 19,  65 => 15,  60 => 13,  55 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"></div>*/
/* */
/*       <div class="col-sm-4">*/
/* */
/*         {% for quote in quoteunique %}*/
/*           <h2 class="text-center">Quote par : {{quote.author}}</h2><br>*/
/*           <h3 class="text-center">{{quote.title}}</h3>*/
/*           <div class="backgroundblue">*/
/*             <p>{{quote.content}}</p>*/
/*           </div>*/
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
/*           <div class="col-sm-6">*/
/*             <p class="pull-right">{% for comment in quote.comments %}*/
/*               {% if comment in quote.comments %}*/
/*             <h3>Comments</h3>*/
/*             <p>{{ comment.author }}</p>*/
/*             <p>{{ comment.comment }}</p>*/
/*             <p>Date : {{comment.createdAt|date("d/m/Y H:i")}}</p>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           <br><br>*/
/*           <hr>*/
/*         {% else %}*/
/*           <h2>Aucune quote :(</h2>*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/*         <div>*/
/*           <form action="{{ path('newComment/{id}') }}" method="post" novalidate>*/
/*             {{ form_row(form.author) }}*/
/*             {{ form_row(form.comment) }}*/
/*             {{ form_widget(form.submit)  }}*/
/*             {{ form_rest(form)  }}*/
/*           </form>*/
/*         </div>*/
/* */
/*   </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
