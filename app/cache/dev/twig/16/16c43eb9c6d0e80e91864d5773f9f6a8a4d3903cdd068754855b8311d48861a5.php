<?php

/* base.html.twig */
class __TwigTemplate_4f2e18b9de5ad921e750acbf018e46e9b42caef7e27e1d34e6fbc3051319e9ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10984b3b2416e4719ee0e656de442a5b7f73dcea43562ff2eeaa77460265291f = $this->env->getExtension("native_profiler");
        $__internal_10984b3b2416e4719ee0e656de442a5b7f73dcea43562ff2eeaa77460265291f->enter($__internal_10984b3b2416e4719ee0e656de442a5b7f73dcea43562ff2eeaa77460265291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_10984b3b2416e4719ee0e656de442a5b7f73dcea43562ff2eeaa77460265291f->leave($__internal_10984b3b2416e4719ee0e656de442a5b7f73dcea43562ff2eeaa77460265291f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7457d3cd4e72a621559b749bc3f851193368536caa954ea6776442dc8f2befc4 = $this->env->getExtension("native_profiler");
        $__internal_7457d3cd4e72a621559b749bc3f851193368536caa954ea6776442dc8f2befc4->enter($__internal_7457d3cd4e72a621559b749bc3f851193368536caa954ea6776442dc8f2befc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Countdown numbers solver";
        
        $__internal_7457d3cd4e72a621559b749bc3f851193368536caa954ea6776442dc8f2befc4->leave($__internal_7457d3cd4e72a621559b749bc3f851193368536caa954ea6776442dc8f2befc4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_393bb0b19114ad45bc1595bc09133e69f8f4cdb94f67f9fc628d7f641b861a52 = $this->env->getExtension("native_profiler");
        $__internal_393bb0b19114ad45bc1595bc09133e69f8f4cdb94f67f9fc628d7f641b861a52->enter($__internal_393bb0b19114ad45bc1595bc09133e69f8f4cdb94f67f9fc628d7f641b861a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "            <form action=\"/countdown/getfile\" method=post>
                Select a file:<input type=\"file\" name=\"numbers_file\" /><br />
                Target value:<input type=\"text\" name=\"trget_value\" /><br />
                <input type=submit value=\"Solve it\" />
            </form>        
        ";
        
        $__internal_393bb0b19114ad45bc1595bc09133e69f8f4cdb94f67f9fc628d7f641b861a52->leave($__internal_393bb0b19114ad45bc1595bc09133e69f8f4cdb94f67f9fc628d7f641b861a52_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  59 => 8,  47 => 5,  38 => 15,  36 => 8,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Countdown numbers solver{% endblock %}</title>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <form action="/countdown/getfile" method=post>*/
/*                 Select a file:<input type="file" name="numbers_file" /><br />*/
/*                 Target value:<input type="text" name="trget_value" /><br />*/
/*                 <input type=submit value="Solve it" />*/
/*             </form>        */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
