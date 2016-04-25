<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8976d7f28d927bb993a74bc4cde31207e4c4cb9fd0913250325feb8cf29d13f1 extends Twig_Template
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
        $__internal_7e7d23854ab65a1c6b7ce2911c11147aa9bb1601ee639de1cabd3d50058e0db8 = $this->env->getExtension("native_profiler");
        $__internal_7e7d23854ab65a1c6b7ce2911c11147aa9bb1601ee639de1cabd3d50058e0db8->enter($__internal_7e7d23854ab65a1c6b7ce2911c11147aa9bb1601ee639de1cabd3d50058e0db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7e7d23854ab65a1c6b7ce2911c11147aa9bb1601ee639de1cabd3d50058e0db8->leave($__internal_7e7d23854ab65a1c6b7ce2911c11147aa9bb1601ee639de1cabd3d50058e0db8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
