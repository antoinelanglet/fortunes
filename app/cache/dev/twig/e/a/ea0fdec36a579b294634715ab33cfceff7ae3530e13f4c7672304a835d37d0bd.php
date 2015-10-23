<?php

/* default/new.html.twig */
class __TwigTemplate_4e1fdd73b0131579c3e28a3d119fcfbe71d32bca2dd58496dced388d6e4861f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 1);
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
        $__internal_eb4219fa2eb737e7eded88ca094f64aefa52c4d7df170f33dfddc1d9581dcffc = $this->env->getExtension("native_profiler");
        $__internal_eb4219fa2eb737e7eded88ca094f64aefa52c4d7df170f33dfddc1d9581dcffc->enter($__internal_eb4219fa2eb737e7eded88ca094f64aefa52c4d7df170f33dfddc1d9581dcffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb4219fa2eb737e7eded88ca094f64aefa52c4d7df170f33dfddc1d9581dcffc->leave($__internal_eb4219fa2eb737e7eded88ca094f64aefa52c4d7df170f33dfddc1d9581dcffc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6a3634b00d42e4152fe69a08748b4f100dc70beb4e1eee4079888a53974853a = $this->env->getExtension("native_profiler");
        $__internal_d6a3634b00d42e4152fe69a08748b4f100dc70beb4e1eee4079888a53974853a->enter($__internal_d6a3634b00d42e4152fe69a08748b4f100dc70beb4e1eee4079888a53974853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">


        <h2 class=\"text-center\">Créer une nouvelle quote</h2><br>

          <div class=\"backgroundblue\">
          <p><form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("create");
        echo "\" method=\"post\" novalidate>
          ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'row');
        echo " <br> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " </form></p>
</div>
          <div class=\"row\">
            <div class=\"col-sm-6\">
              </div>
            </div>
          </div>
      </div>

      <div class=\"col-sm-4\"></div>
    </div>



  </div>

";
        
        $__internal_d6a3634b00d42e4152fe69a08748b4f100dc70beb4e1eee4079888a53974853a->leave($__internal_d6a3634b00d42e4152fe69a08748b4f100dc70beb4e1eee4079888a53974853a_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*         <h2 class="text-center">Créer une nouvelle quote</h2><br>*/
/* */
/*           <div class="backgroundblue">*/
/*           <p><form action="{{ path('create') }}" method="post" novalidate>*/
/*           {{ form_row(form.title) }} {{ form_row(form.content) }} {{ form_row(form.author) }} {{ form_row(form.categorie) }} <br> {{ form_widget(form.submit)  }} {{ form_rest(form)  }} </form></p>*/
/* </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
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
