<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_61b5012dc83b21f99887520e53f1ef543d4d08a95bcd02bf205c628863f3347e extends Twig_Template
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
        $__internal_83d3db0695e3b9e0c353722b1c04dd5c6f23cfb90e46314ab0ad9cb3c9c160be = $this->env->getExtension("native_profiler");
        $__internal_83d3db0695e3b9e0c353722b1c04dd5c6f23cfb90e46314ab0ad9cb3c9c160be->enter($__internal_83d3db0695e3b9e0c353722b1c04dd5c6f23cfb90e46314ab0ad9cb3c9c160be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d3db0695e3b9e0c353722b1c04dd5c6f23cfb90e46314ab0ad9cb3c9c160be->leave($__internal_83d3db0695e3b9e0c353722b1c04dd5c6f23cfb90e46314ab0ad9cb3c9c160be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25cddfcd9a44dce32817c55b695ddf6769c91cfce2384dcfefab077c4140d7c1 = $this->env->getExtension("native_profiler");
        $__internal_25cddfcd9a44dce32817c55b695ddf6769c91cfce2384dcfefab077c4140d7c1->enter($__internal_25cddfcd9a44dce32817c55b695ddf6769c91cfce2384dcfefab077c4140d7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_25cddfcd9a44dce32817c55b695ddf6769c91cfce2384dcfefab077c4140d7c1->leave($__internal_25cddfcd9a44dce32817c55b695ddf6769c91cfce2384dcfefab077c4140d7c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ba9b0a2341e90b34fdc083663306f2c147c5dc5cb1225df2c89e9dd94619af1 = $this->env->getExtension("native_profiler");
        $__internal_5ba9b0a2341e90b34fdc083663306f2c147c5dc5cb1225df2c89e9dd94619af1->enter($__internal_5ba9b0a2341e90b34fdc083663306f2c147c5dc5cb1225df2c89e9dd94619af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ba9b0a2341e90b34fdc083663306f2c147c5dc5cb1225df2c89e9dd94619af1->leave($__internal_5ba9b0a2341e90b34fdc083663306f2c147c5dc5cb1225df2c89e9dd94619af1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49833650ad371a1919d24e11dec19b977cc0c7c8315aedd227ddb327e3ddf51f = $this->env->getExtension("native_profiler");
        $__internal_49833650ad371a1919d24e11dec19b977cc0c7c8315aedd227ddb327e3ddf51f->enter($__internal_49833650ad371a1919d24e11dec19b977cc0c7c8315aedd227ddb327e3ddf51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_49833650ad371a1919d24e11dec19b977cc0c7c8315aedd227ddb327e3ddf51f->leave($__internal_49833650ad371a1919d24e11dec19b977cc0c7c8315aedd227ddb327e3ddf51f_prof);

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
