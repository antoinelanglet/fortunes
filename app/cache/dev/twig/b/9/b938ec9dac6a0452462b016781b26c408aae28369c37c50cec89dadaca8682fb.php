<?php

/* default/new.html.twig */
class __TwigTemplate_1cb01f1058894ab5ce9e62faeebec6fcfb5ff42e3cf7be35cdd4b0a4b953d39a extends Twig_Template
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
        $__internal_306409e8772960a9d7d49c97f5a0a2ec25509c4ac127915e5c29a2869ad69ee7 = $this->env->getExtension("native_profiler");
        $__internal_306409e8772960a9d7d49c97f5a0a2ec25509c4ac127915e5c29a2869ad69ee7->enter($__internal_306409e8772960a9d7d49c97f5a0a2ec25509c4ac127915e5c29a2869ad69ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_306409e8772960a9d7d49c97f5a0a2ec25509c4ac127915e5c29a2869ad69ee7->leave($__internal_306409e8772960a9d7d49c97f5a0a2ec25509c4ac127915e5c29a2869ad69ee7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db8168aabd1dde5321a754136510f9457f09e49804464363c35e323b7c497c24 = $this->env->getExtension("native_profiler");
        $__internal_db8168aabd1dde5321a754136510f9457f09e49804464363c35e323b7c497c24->enter($__internal_db8168aabd1dde5321a754136510f9457f09e49804464363c35e323b7c497c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">


        <h2 class=\"text-center\">Créer une nouvelle quote</h2><br>

          <div class=\"backgroundblue\">
          <p>
          <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("create");
        echo "\" method=\"post\" novalidate>
          ";
        // line 16
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
        
        $__internal_db8168aabd1dde5321a754136510f9457f09e49804464363c35e323b7c497c24->leave($__internal_db8168aabd1dde5321a754136510f9457f09e49804464363c35e323b7c497c24_prof);

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
        return array (  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*           <p>*/
/*           <form action="{{ path('create') }}" method="post" novalidate>*/
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
