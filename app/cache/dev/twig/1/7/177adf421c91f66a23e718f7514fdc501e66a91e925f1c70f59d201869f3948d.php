<?php

/* AppBundle:Fortune:new.html.twig */
class __TwigTemplate_7d383c742ad43e945fe73c79a53f6e4e42cc8b1fe79274e1a482132d145a9bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Fortune:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5269a1b0106604ab0e099f9bec96665cb826f0d19fad755bcfa3b6838580bd62 = $this->env->getExtension("native_profiler");
        $__internal_5269a1b0106604ab0e099f9bec96665cb826f0d19fad755bcfa3b6838580bd62->enter($__internal_5269a1b0106604ab0e099f9bec96665cb826f0d19fad755bcfa3b6838580bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fortune:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5269a1b0106604ab0e099f9bec96665cb826f0d19fad755bcfa3b6838580bd62->leave($__internal_5269a1b0106604ab0e099f9bec96665cb826f0d19fad755bcfa3b6838580bd62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ecca81b907e98f586c04b6375f4ecdc854834203d6bea187950858688690aab = $this->env->getExtension("native_profiler");
        $__internal_2ecca81b907e98f586c04b6375f4ecdc854834203d6bea187950858688690aab->enter($__internal_2ecca81b907e98f586c04b6375f4ecdc854834203d6bea187950858688690aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Fortune creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fortune");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_2ecca81b907e98f586c04b6375f4ecdc854834203d6bea187950858688690aab->leave($__internal_2ecca81b907e98f586c04b6375f4ecdc854834203d6bea187950858688690aab_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Fortune:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Fortune creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('fortune') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
