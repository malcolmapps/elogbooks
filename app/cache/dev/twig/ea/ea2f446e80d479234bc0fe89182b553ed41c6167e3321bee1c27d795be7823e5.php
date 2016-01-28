<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3e5ad436eb0bb7291f7f1a99d9b09edbd605e778c3f36efe65b1083f3c676ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_330600d025c925c749b86efb6bf5a9e922b367e42fc1e6e42617838868da1151 = $this->env->getExtension("native_profiler");
        $__internal_330600d025c925c749b86efb6bf5a9e922b367e42fc1e6e42617838868da1151->enter($__internal_330600d025c925c749b86efb6bf5a9e922b367e42fc1e6e42617838868da1151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330600d025c925c749b86efb6bf5a9e922b367e42fc1e6e42617838868da1151->leave($__internal_330600d025c925c749b86efb6bf5a9e922b367e42fc1e6e42617838868da1151_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_caae379ce5e058784373c230afa4b394a496ed761c31154cb4be79c8d4711deb = $this->env->getExtension("native_profiler");
        $__internal_caae379ce5e058784373c230afa4b394a496ed761c31154cb4be79c8d4711deb->enter($__internal_caae379ce5e058784373c230afa4b394a496ed761c31154cb4be79c8d4711deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_caae379ce5e058784373c230afa4b394a496ed761c31154cb4be79c8d4711deb->leave($__internal_caae379ce5e058784373c230afa4b394a496ed761c31154cb4be79c8d4711deb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f915da4932723f3d35f611b9343bd15b29f2a6855eb80190b2d0aecd81d2e5f9 = $this->env->getExtension("native_profiler");
        $__internal_f915da4932723f3d35f611b9343bd15b29f2a6855eb80190b2d0aecd81d2e5f9->enter($__internal_f915da4932723f3d35f611b9343bd15b29f2a6855eb80190b2d0aecd81d2e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f915da4932723f3d35f611b9343bd15b29f2a6855eb80190b2d0aecd81d2e5f9->leave($__internal_f915da4932723f3d35f611b9343bd15b29f2a6855eb80190b2d0aecd81d2e5f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b131d62a7937852dddcd62edadabbf868516fcbf70ce1c5a1df46a5147c32223 = $this->env->getExtension("native_profiler");
        $__internal_b131d62a7937852dddcd62edadabbf868516fcbf70ce1c5a1df46a5147c32223->enter($__internal_b131d62a7937852dddcd62edadabbf868516fcbf70ce1c5a1df46a5147c32223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b131d62a7937852dddcd62edadabbf868516fcbf70ce1c5a1df46a5147c32223->leave($__internal_b131d62a7937852dddcd62edadabbf868516fcbf70ce1c5a1df46a5147c32223_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
