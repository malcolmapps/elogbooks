<?php

/* Countdown/solution.html.twig */
class __TwigTemplate_9d6b610840aa521c2e1aa8a7f64771f9558a547a70609d79aba9f11b1be45758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'solutionLine' => array($this, 'block_solutionLine'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35262169766e5c3f33bcc346b7ac1c924f410def23fc447534dafcec58b4a141 = $this->env->getExtension("native_profiler");
        $__internal_35262169766e5c3f33bcc346b7ac1c924f410def23fc447534dafcec58b4a141->enter($__internal_35262169766e5c3f33bcc346b7ac1c924f410def23fc447534dafcec58b4a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Countdown/solution.html.twig"));

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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["solutionLine"]) {
            // line 10
            echo "    ";
            $this->displayBlock('solutionLine', $context, $blocks);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solutionLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_35262169766e5c3f33bcc346b7ac1c924f410def23fc447534dafcec58b4a141->leave($__internal_35262169766e5c3f33bcc346b7ac1c924f410def23fc447534dafcec58b4a141_prof);

    }

    public function block_solutionLine($context, array $blocks = array())
    {
        $__internal_37fd31dd171f975a319cacb8c889e7eff86bff2f2b55095f98c8c3abba94397f = $this->env->getExtension("native_profiler");
        $__internal_37fd31dd171f975a319cacb8c889e7eff86bff2f2b55095f98c8c3abba94397f->enter($__internal_37fd31dd171f975a319cacb8c889e7eff86bff2f2b55095f98c8c3abba94397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solutionLine"));

        // line 11
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["solutionLine"]) ? $context["solutionLine"] : $this->getContext($context, "solutionLine")), "html", null, true);
        echo "
    ";
        
        $__internal_37fd31dd171f975a319cacb8c889e7eff86bff2f2b55095f98c8c3abba94397f->leave($__internal_37fd31dd171f975a319cacb8c889e7eff86bff2f2b55095f98c8c3abba94397f_prof);

    }

    public function getTemplateName()
    {
        return "Countdown/solution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  59 => 10,  42 => 9,  37 => 7,  31 => 4,  27 => 3,  23 => 1,);
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
/*     {% block solutionLine %}*/
/*         {{ solutionLine }}*/
/*     {% endblock %}*/
/* {% endfor %}*/
