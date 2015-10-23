<?php

/* AppBundle:Fortune:show.html.twig */
class __TwigTemplate_439829a40ba93c4a6ce5d2fd0256f42bd63f93da6d2a45ae0d2d1756e4682204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Fortune:show.html.twig", 1);
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
        $__internal_525ff8e1a878add8c6e73938536943a1beeef1e9e24486a32345f0b033c5f4a9 = $this->env->getExtension("native_profiler");
        $__internal_525ff8e1a878add8c6e73938536943a1beeef1e9e24486a32345f0b033c5f4a9->enter($__internal_525ff8e1a878add8c6e73938536943a1beeef1e9e24486a32345f0b033c5f4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fortune:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525ff8e1a878add8c6e73938536943a1beeef1e9e24486a32345f0b033c5f4a9->leave($__internal_525ff8e1a878add8c6e73938536943a1beeef1e9e24486a32345f0b033c5f4a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ba4199381bc1fce292d18bd5c7dff5ad84e3b0c06b40b2051fd724cc379df7 = $this->env->getExtension("native_profiler");
        $__internal_f4ba4199381bc1fce292d18bd5c7dff5ad84e3b0c06b40b2051fd724cc379df7->enter($__internal_f4ba4199381bc1fce292d18bd5c7dff5ad84e3b0c06b40b2051fd724cc379df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Fortune</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fortune");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fortune_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_f4ba4199381bc1fce292d18bd5c7dff5ad84e3b0c06b40b2051fd724cc379df7->leave($__internal_f4ba4199381bc1fce292d18bd5c7dff5ad84e3b0c06b40b2051fd724cc379df7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Fortune:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  94 => 38,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Fortune</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ entity.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Author</th>*/
/*                 <td>{{ entity.author }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Content</th>*/
/*                 <td>{{ entity.content }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createdat</th>*/
/*                 <td>{{ entity.createdAt|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('fortune') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('fortune_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
