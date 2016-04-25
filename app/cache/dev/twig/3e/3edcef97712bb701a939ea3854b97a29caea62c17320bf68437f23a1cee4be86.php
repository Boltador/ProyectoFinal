<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_11a7dec079401f9378d91e7c09b9d0dca6955ca3cec42eb8ebba42b21fd0deac extends Twig_Template
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
        $__internal_66e442ba1e9ba161209b4721f33e8875e151317566f9835834ac8cfec1c52c78 = $this->env->getExtension("native_profiler");
        $__internal_66e442ba1e9ba161209b4721f33e8875e151317566f9835834ac8cfec1c52c78->enter($__internal_66e442ba1e9ba161209b4721f33e8875e151317566f9835834ac8cfec1c52c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_66e442ba1e9ba161209b4721f33e8875e151317566f9835834ac8cfec1c52c78->leave($__internal_66e442ba1e9ba161209b4721f33e8875e151317566f9835834ac8cfec1c52c78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="{{ _charset }}" />*/
/*         <title>An Error Occurred: {{ status_text }}</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Oops! An Error Occurred</h1>*/
/*         <h2>The server returned a "{{ status_code }} {{ status_text }}".</h2>*/
/* */
/*         <div>*/
/*             Something is broken. Please let us know what you were doing when this error occurred.*/
/*             We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
