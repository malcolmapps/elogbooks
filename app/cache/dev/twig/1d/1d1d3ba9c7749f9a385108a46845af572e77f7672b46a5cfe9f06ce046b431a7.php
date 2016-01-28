<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ede31c925911c5710ffcb167d6bfa45d86ebcc077ae3bab13a3883482d80f82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a7749de565c9c77e93562c5725f9009f38185242455bc38f8decece9e33d68c = $this->env->getExtension("native_profiler");
        $__internal_3a7749de565c9c77e93562c5725f9009f38185242455bc38f8decece9e33d68c->enter($__internal_3a7749de565c9c77e93562c5725f9009f38185242455bc38f8decece9e33d68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7749de565c9c77e93562c5725f9009f38185242455bc38f8decece9e33d68c->leave($__internal_3a7749de565c9c77e93562c5725f9009f38185242455bc38f8decece9e33d68c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27030a0d3fbd44d577644a3eff8a9772d2e080ee3a63626e8ba97e1f0e194e32 = $this->env->getExtension("native_profiler");
        $__internal_27030a0d3fbd44d577644a3eff8a9772d2e080ee3a63626e8ba97e1f0e194e32->enter($__internal_27030a0d3fbd44d577644a3eff8a9772d2e080ee3a63626e8ba97e1f0e194e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_27030a0d3fbd44d577644a3eff8a9772d2e080ee3a63626e8ba97e1f0e194e32->leave($__internal_27030a0d3fbd44d577644a3eff8a9772d2e080ee3a63626e8ba97e1f0e194e32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a63bc152e6837ecce1506abd151847d5e11edfed2c60e0aea87486e09d55d5ff = $this->env->getExtension("native_profiler");
        $__internal_a63bc152e6837ecce1506abd151847d5e11edfed2c60e0aea87486e09d55d5ff->enter($__internal_a63bc152e6837ecce1506abd151847d5e11edfed2c60e0aea87486e09d55d5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a63bc152e6837ecce1506abd151847d5e11edfed2c60e0aea87486e09d55d5ff->leave($__internal_a63bc152e6837ecce1506abd151847d5e11edfed2c60e0aea87486e09d55d5ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c282958a047cf4435dbe67b7b3d0d053c8f22d60135a2feab828e2def9b3b1 = $this->env->getExtension("native_profiler");
        $__internal_18c282958a047cf4435dbe67b7b3d0d053c8f22d60135a2feab828e2def9b3b1->enter($__internal_18c282958a047cf4435dbe67b7b3d0d053c8f22d60135a2feab828e2def9b3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_18c282958a047cf4435dbe67b7b3d0d053c8f22d60135a2feab828e2def9b3b1->leave($__internal_18c282958a047cf4435dbe67b7b3d0d053c8f22d60135a2feab828e2def9b3b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
