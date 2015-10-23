<?php

/* AppBundle:Fortune:new.html.twig */
class __TwigTemplate_78112938d8b8c97e6e550b5ea8ef676ed5943e9a7919db17d36d64d1329726af extends Twig_Template
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
        $__internal_9db690f4f2ff8abe7d0f4b6f5149b29538070b606c4116bc08808ca7f59d043a = $this->env->getExtension("native_profiler");
        $__internal_9db690f4f2ff8abe7d0f4b6f5149b29538070b606c4116bc08808ca7f59d043a->enter($__internal_9db690f4f2ff8abe7d0f4b6f5149b29538070b606c4116bc08808ca7f59d043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fortune:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9db690f4f2ff8abe7d0f4b6f5149b29538070b606c4116bc08808ca7f59d043a->leave($__internal_9db690f4f2ff8abe7d0f4b6f5149b29538070b606c4116bc08808ca7f59d043a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ffffb613b2ea0593493a2c1204dccc6ddd0c67deaf01e4d10c9454b99926773 = $this->env->getExtension("native_profiler");
        $__internal_6ffffb613b2ea0593493a2c1204dccc6ddd0c67deaf01e4d10c9454b99926773->enter($__internal_6ffffb613b2ea0593493a2c1204dccc6ddd0c67deaf01e4d10c9454b99926773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ffffb613b2ea0593493a2c1204dccc6ddd0c67deaf01e4d10c9454b99926773->leave($__internal_6ffffb613b2ea0593493a2c1204dccc6ddd0c67deaf01e4d10c9454b99926773_prof);

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
