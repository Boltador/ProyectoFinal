<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_cd16a62da914f36cb6067c4376b6e3a4226aa7abf5f65d4f73eca4af4ba5e694 extends Twig_Template
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
        $__internal_bdd17c9a8907885a74ec0c2987fffd94492b9b2ce7e57a1850aa6b055750c1a9 = $this->env->getExtension("native_profiler");
        $__internal_bdd17c9a8907885a74ec0c2987fffd94492b9b2ce7e57a1850aa6b055750c1a9->enter($__internal_bdd17c9a8907885a74ec0c2987fffd94492b9b2ce7e57a1850aa6b055750c1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bdd17c9a8907885a74ec0c2987fffd94492b9b2ce7e57a1850aa6b055750c1a9->leave($__internal_bdd17c9a8907885a74ec0c2987fffd94492b9b2ce7e57a1850aa6b055750c1a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
