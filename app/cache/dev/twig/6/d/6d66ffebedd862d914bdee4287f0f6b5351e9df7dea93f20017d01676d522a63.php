<?php

/* default/new.html.twig */
class __TwigTemplate_42ad284d10269adc9b9a7cc3db2a26cb98123640adb0879be942a354e63973a0 extends Twig_Template
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
        $__internal_f833a5d1d28c7a6e14aff5f0ec7b9f0e0f40d649c4e2132aa4cdeaa3b5a67be8 = $this->env->getExtension("native_profiler");
        $__internal_f833a5d1d28c7a6e14aff5f0ec7b9f0e0f40d649c4e2132aa4cdeaa3b5a67be8->enter($__internal_f833a5d1d28c7a6e14aff5f0ec7b9f0e0f40d649c4e2132aa4cdeaa3b5a67be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f833a5d1d28c7a6e14aff5f0ec7b9f0e0f40d649c4e2132aa4cdeaa3b5a67be8->leave($__internal_f833a5d1d28c7a6e14aff5f0ec7b9f0e0f40d649c4e2132aa4cdeaa3b5a67be8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45e4c50fde2f059150ee55a5d5fe92f26608ab766ca9bdc19f8913261290aec2 = $this->env->getExtension("native_profiler");
        $__internal_45e4c50fde2f059150ee55a5d5fe92f26608ab766ca9bdc19f8913261290aec2->enter($__internal_45e4c50fde2f059150ee55a5d5fe92f26608ab766ca9bdc19f8913261290aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45e4c50fde2f059150ee55a5d5fe92f26608ab766ca9bdc19f8913261290aec2->leave($__internal_45e4c50fde2f059150ee55a5d5fe92f26608ab766ca9bdc19f8913261290aec2_prof);

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
