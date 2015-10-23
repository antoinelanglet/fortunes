<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2452a95459f9e9c7cb2b1529d62bca1c06d4410ab152faa2c9a8832355b89229 extends Twig_Template
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
        $__internal_c01a1bdb00629b98b4fa09fab4ddd524164745acf617c024f7bfaf4d88353961 = $this->env->getExtension("native_profiler");
        $__internal_c01a1bdb00629b98b4fa09fab4ddd524164745acf617c024f7bfaf4d88353961->enter($__internal_c01a1bdb00629b98b4fa09fab4ddd524164745acf617c024f7bfaf4d88353961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01a1bdb00629b98b4fa09fab4ddd524164745acf617c024f7bfaf4d88353961->leave($__internal_c01a1bdb00629b98b4fa09fab4ddd524164745acf617c024f7bfaf4d88353961_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f6a58177279f9933c3c06c1c751a5c85bc04fa431b05c23f24d7cbac3a36fb8 = $this->env->getExtension("native_profiler");
        $__internal_4f6a58177279f9933c3c06c1c751a5c85bc04fa431b05c23f24d7cbac3a36fb8->enter($__internal_4f6a58177279f9933c3c06c1c751a5c85bc04fa431b05c23f24d7cbac3a36fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4f6a58177279f9933c3c06c1c751a5c85bc04fa431b05c23f24d7cbac3a36fb8->leave($__internal_4f6a58177279f9933c3c06c1c751a5c85bc04fa431b05c23f24d7cbac3a36fb8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffdff4e99dfc6ed6c9a19bbac69dbe02758a55cb7ed3bf8c532f647385b70970 = $this->env->getExtension("native_profiler");
        $__internal_ffdff4e99dfc6ed6c9a19bbac69dbe02758a55cb7ed3bf8c532f647385b70970->enter($__internal_ffdff4e99dfc6ed6c9a19bbac69dbe02758a55cb7ed3bf8c532f647385b70970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ffdff4e99dfc6ed6c9a19bbac69dbe02758a55cb7ed3bf8c532f647385b70970->leave($__internal_ffdff4e99dfc6ed6c9a19bbac69dbe02758a55cb7ed3bf8c532f647385b70970_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bebb1b791c0420d002d923766f24ba026f8f9f8f22e0aab5bfb0174a40db89f = $this->env->getExtension("native_profiler");
        $__internal_9bebb1b791c0420d002d923766f24ba026f8f9f8f22e0aab5bfb0174a40db89f->enter($__internal_9bebb1b791c0420d002d923766f24ba026f8f9f8f22e0aab5bfb0174a40db89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9bebb1b791c0420d002d923766f24ba026f8f9f8f22e0aab5bfb0174a40db89f->leave($__internal_9bebb1b791c0420d002d923766f24ba026f8f9f8f22e0aab5bfb0174a40db89f_prof);

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
