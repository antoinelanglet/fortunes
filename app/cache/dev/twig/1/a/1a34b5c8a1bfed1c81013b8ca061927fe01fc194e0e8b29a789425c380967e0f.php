<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b35510231c4f110112683711644f93287121faecad58e2af072cdddb1d229d52 extends Twig_Template
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
        $__internal_e2f72cd0b9d5507417a6a6171736b625f8535561136f88a9a94d8b6390df3853 = $this->env->getExtension("native_profiler");
        $__internal_e2f72cd0b9d5507417a6a6171736b625f8535561136f88a9a94d8b6390df3853->enter($__internal_e2f72cd0b9d5507417a6a6171736b625f8535561136f88a9a94d8b6390df3853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f72cd0b9d5507417a6a6171736b625f8535561136f88a9a94d8b6390df3853->leave($__internal_e2f72cd0b9d5507417a6a6171736b625f8535561136f88a9a94d8b6390df3853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53fcca8edd0bdf18f48d1e9f0bc257f39dd49a0ad46f82877de7a94dc2c511c7 = $this->env->getExtension("native_profiler");
        $__internal_53fcca8edd0bdf18f48d1e9f0bc257f39dd49a0ad46f82877de7a94dc2c511c7->enter($__internal_53fcca8edd0bdf18f48d1e9f0bc257f39dd49a0ad46f82877de7a94dc2c511c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53fcca8edd0bdf18f48d1e9f0bc257f39dd49a0ad46f82877de7a94dc2c511c7->leave($__internal_53fcca8edd0bdf18f48d1e9f0bc257f39dd49a0ad46f82877de7a94dc2c511c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08e78753a23898ac34374e092643901afee915fcc49bf2ae642b0d4267738ea8 = $this->env->getExtension("native_profiler");
        $__internal_08e78753a23898ac34374e092643901afee915fcc49bf2ae642b0d4267738ea8->enter($__internal_08e78753a23898ac34374e092643901afee915fcc49bf2ae642b0d4267738ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08e78753a23898ac34374e092643901afee915fcc49bf2ae642b0d4267738ea8->leave($__internal_08e78753a23898ac34374e092643901afee915fcc49bf2ae642b0d4267738ea8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_620c9cd935476129adc781c8f73402225d714c665fd102d36263c47c6bf6c3bf = $this->env->getExtension("native_profiler");
        $__internal_620c9cd935476129adc781c8f73402225d714c665fd102d36263c47c6bf6c3bf->enter($__internal_620c9cd935476129adc781c8f73402225d714c665fd102d36263c47c6bf6c3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_620c9cd935476129adc781c8f73402225d714c665fd102d36263c47c6bf6c3bf->leave($__internal_620c9cd935476129adc781c8f73402225d714c665fd102d36263c47c6bf6c3bf_prof);

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
