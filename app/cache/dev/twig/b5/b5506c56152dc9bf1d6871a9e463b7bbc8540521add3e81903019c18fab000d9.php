<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_054470603cfc2f9d1d248b0e589f5b2bf5babad8c3b90dc5e50a06cbce0ec999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8bb766084c8d70acd6ae804b854278b4279d596fd55a87a5ed2b61715961c98 = $this->env->getExtension("native_profiler");
        $__internal_a8bb766084c8d70acd6ae804b854278b4279d596fd55a87a5ed2b61715961c98->enter($__internal_a8bb766084c8d70acd6ae804b854278b4279d596fd55a87a5ed2b61715961c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8bb766084c8d70acd6ae804b854278b4279d596fd55a87a5ed2b61715961c98->leave($__internal_a8bb766084c8d70acd6ae804b854278b4279d596fd55a87a5ed2b61715961c98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c0445ac73739fe3635c5783e0ac5a6add458d22c5bc93643af111aa8235f0cc = $this->env->getExtension("native_profiler");
        $__internal_5c0445ac73739fe3635c5783e0ac5a6add458d22c5bc93643af111aa8235f0cc->enter($__internal_5c0445ac73739fe3635c5783e0ac5a6add458d22c5bc93643af111aa8235f0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5c0445ac73739fe3635c5783e0ac5a6add458d22c5bc93643af111aa8235f0cc->leave($__internal_5c0445ac73739fe3635c5783e0ac5a6add458d22c5bc93643af111aa8235f0cc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a23de00037ec11ba26f6b0285f71859131f6d2be648d24a9c30d98c6d2629633 = $this->env->getExtension("native_profiler");
        $__internal_a23de00037ec11ba26f6b0285f71859131f6d2be648d24a9c30d98c6d2629633->enter($__internal_a23de00037ec11ba26f6b0285f71859131f6d2be648d24a9c30d98c6d2629633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a23de00037ec11ba26f6b0285f71859131f6d2be648d24a9c30d98c6d2629633->leave($__internal_a23de00037ec11ba26f6b0285f71859131f6d2be648d24a9c30d98c6d2629633_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcba145b1e5326fadec3503f2f15a63aa8610c763db0c06a62a1c8b097f8c98d = $this->env->getExtension("native_profiler");
        $__internal_dcba145b1e5326fadec3503f2f15a63aa8610c763db0c06a62a1c8b097f8c98d->enter($__internal_dcba145b1e5326fadec3503f2f15a63aa8610c763db0c06a62a1c8b097f8c98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dcba145b1e5326fadec3503f2f15a63aa8610c763db0c06a62a1c8b097f8c98d->leave($__internal_dcba145b1e5326fadec3503f2f15a63aa8610c763db0c06a62a1c8b097f8c98d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
