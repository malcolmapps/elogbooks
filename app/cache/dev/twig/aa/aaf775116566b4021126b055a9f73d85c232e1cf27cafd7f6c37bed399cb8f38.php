<?php

/* Countdown/index.html.twig */
class __TwigTemplate_7c2628fda7d6b9252b6514b1465e7f24a713b1063b1f68cefe5d5b93e2b81cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c81f414a29444de820d40c12e476e24f8b5bba5122564198d6cfd01a0e6423d3 = $this->env->getExtension("native_profiler");
        $__internal_c81f414a29444de820d40c12e476e24f8b5bba5122564198d6cfd01a0e6423d3->enter($__internal_c81f414a29444de820d40c12e476e24f8b5bba5122564198d6cfd01a0e6423d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Countdown/index.html.twig"));

        // line 1
        echo "<h1>Countdown</h1>

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"Solve It!\" />
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solutionList"]) ? $context["solutionList"] : $this->getContext($context, "solutionList")));
        foreach ($context['_seq'] as $context["_key"] => $context["solutionLine"]) {
            // line 10
            echo "    <li>";
            echo twig_escape_filter($this->env, $context["solutionLine"], "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solutionLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c81f414a29444de820d40c12e476e24f8b5bba5122564198d6cfd01a0e6423d3->leave($__internal_c81f414a29444de820d40c12e476e24f8b5bba5122564198d6cfd01a0e6423d3_prof);

    }

    public function getTemplateName()
    {
        return "Countdown/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 9,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h1>Countdown</h1>*/
/* */
/* {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/* */
/*     <input type="submit" value="Solve It!" />*/
/* {{ form_end(form) }}*/
/* */
/* {% for solutionLine in solutionList %}*/
/*     <li>{{ solutionLine }}</li>*/
/* {% endfor %}*/
