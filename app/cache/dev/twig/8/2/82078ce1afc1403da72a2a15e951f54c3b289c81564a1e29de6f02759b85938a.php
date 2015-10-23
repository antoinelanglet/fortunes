<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8bbce104bd2d60fb050d0962c0eb714be828fc906f475f51e808272943560393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8e8c877ea3d8f1892e8ebb4b4f48769feec13c14a673a4d1f405d768c44ec56 = $this->env->getExtension("native_profiler");
        $__internal_d8e8c877ea3d8f1892e8ebb4b4f48769feec13c14a673a4d1f405d768c44ec56->enter($__internal_d8e8c877ea3d8f1892e8ebb4b4f48769feec13c14a673a4d1f405d768c44ec56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e8c877ea3d8f1892e8ebb4b4f48769feec13c14a673a4d1f405d768c44ec56->leave($__internal_d8e8c877ea3d8f1892e8ebb4b4f48769feec13c14a673a4d1f405d768c44ec56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db614fb959397e59c0c5f49a02a12b83a313e5d59b73246deef4a8c8b40c88df = $this->env->getExtension("native_profiler");
        $__internal_db614fb959397e59c0c5f49a02a12b83a313e5d59b73246deef4a8c8b40c88df->enter($__internal_db614fb959397e59c0c5f49a02a12b83a313e5d59b73246deef4a8c8b40c88df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_db614fb959397e59c0c5f49a02a12b83a313e5d59b73246deef4a8c8b40c88df->leave($__internal_db614fb959397e59c0c5f49a02a12b83a313e5d59b73246deef4a8c8b40c88df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_211567ae293f7a63eee4323db4bb3bf719b564c0a6fa1ffe646455b297c28c09 = $this->env->getExtension("native_profiler");
        $__internal_211567ae293f7a63eee4323db4bb3bf719b564c0a6fa1ffe646455b297c28c09->enter($__internal_211567ae293f7a63eee4323db4bb3bf719b564c0a6fa1ffe646455b297c28c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_211567ae293f7a63eee4323db4bb3bf719b564c0a6fa1ffe646455b297c28c09->leave($__internal_211567ae293f7a63eee4323db4bb3bf719b564c0a6fa1ffe646455b297c28c09_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5c9b92930f7249d8ef8a418eec26bfcaf2c736799f86b5eacfd5a1028a5effb = $this->env->getExtension("native_profiler");
        $__internal_d5c9b92930f7249d8ef8a418eec26bfcaf2c736799f86b5eacfd5a1028a5effb->enter($__internal_d5c9b92930f7249d8ef8a418eec26bfcaf2c736799f86b5eacfd5a1028a5effb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d5c9b92930f7249d8ef8a418eec26bfcaf2c736799f86b5eacfd5a1028a5effb->leave($__internal_d5c9b92930f7249d8ef8a418eec26bfcaf2c736799f86b5eacfd5a1028a5effb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
