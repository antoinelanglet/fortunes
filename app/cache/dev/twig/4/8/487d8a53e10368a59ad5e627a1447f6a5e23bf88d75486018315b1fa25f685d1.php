<?php

/* AppBundle:Fortune:show.html.twig */
class __TwigTemplate_9a24640d17f0a66feede9d8370426502ae27a9aaefcbdf76ea6468b4a0af7a30 extends Twig_Template
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
        $__internal_102ae293984981977ebe461d88163601be2129fa0d65274421eb1534638a2193 = $this->env->getExtension("native_profiler");
        $__internal_102ae293984981977ebe461d88163601be2129fa0d65274421eb1534638a2193->enter($__internal_102ae293984981977ebe461d88163601be2129fa0d65274421eb1534638a2193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fortune:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_102ae293984981977ebe461d88163601be2129fa0d65274421eb1534638a2193->leave($__internal_102ae293984981977ebe461d88163601be2129fa0d65274421eb1534638a2193_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d890bc2da6bf42658188d289d00baeda84e2c1908d82d21292bcf14e7f0b31db = $this->env->getExtension("native_profiler");
        $__internal_d890bc2da6bf42658188d289d00baeda84e2c1908d82d21292bcf14e7f0b31db->enter($__internal_d890bc2da6bf42658188d289d00baeda84e2c1908d82d21292bcf14e7f0b31db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d890bc2da6bf42658188d289d00baeda84e2c1908d82d21292bcf14e7f0b31db->leave($__internal_d890bc2da6bf42658188d289d00baeda84e2c1908d82d21292bcf14e7f0b31db_prof);

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
