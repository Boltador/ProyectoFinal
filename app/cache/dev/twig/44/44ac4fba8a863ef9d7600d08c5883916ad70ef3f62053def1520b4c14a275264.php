<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e7802285157b892da4ef44227bb6945a293f6632f141d864a0041b7267671a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4ddc5d8061fc8a8cbaddc7451191c8f9e0a324338367d799e10f4a14110b98c3 = $this->env->getExtension("native_profiler");
        $__internal_4ddc5d8061fc8a8cbaddc7451191c8f9e0a324338367d799e10f4a14110b98c3->enter($__internal_4ddc5d8061fc8a8cbaddc7451191c8f9e0a324338367d799e10f4a14110b98c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ddc5d8061fc8a8cbaddc7451191c8f9e0a324338367d799e10f4a14110b98c3->leave($__internal_4ddc5d8061fc8a8cbaddc7451191c8f9e0a324338367d799e10f4a14110b98c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba873212ba7c58b5c48e4c3cde311eaac2472bb8688372b8b18a0a4ee4d4c0bc = $this->env->getExtension("native_profiler");
        $__internal_ba873212ba7c58b5c48e4c3cde311eaac2472bb8688372b8b18a0a4ee4d4c0bc->enter($__internal_ba873212ba7c58b5c48e4c3cde311eaac2472bb8688372b8b18a0a4ee4d4c0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba873212ba7c58b5c48e4c3cde311eaac2472bb8688372b8b18a0a4ee4d4c0bc->leave($__internal_ba873212ba7c58b5c48e4c3cde311eaac2472bb8688372b8b18a0a4ee4d4c0bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf9210f8399c594d757310f991ec3a1f6df4013a4b4c8021b46538c5a666ec44 = $this->env->getExtension("native_profiler");
        $__internal_cf9210f8399c594d757310f991ec3a1f6df4013a4b4c8021b46538c5a666ec44->enter($__internal_cf9210f8399c594d757310f991ec3a1f6df4013a4b4c8021b46538c5a666ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf9210f8399c594d757310f991ec3a1f6df4013a4b4c8021b46538c5a666ec44->leave($__internal_cf9210f8399c594d757310f991ec3a1f6df4013a4b4c8021b46538c5a666ec44_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa22eb3dde7259875e5216998eb56d12c309833932d1dd9d3bb8b2bd5f750676 = $this->env->getExtension("native_profiler");
        $__internal_aa22eb3dde7259875e5216998eb56d12c309833932d1dd9d3bb8b2bd5f750676->enter($__internal_aa22eb3dde7259875e5216998eb56d12c309833932d1dd9d3bb8b2bd5f750676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_aa22eb3dde7259875e5216998eb56d12c309833932d1dd9d3bb8b2bd5f750676->leave($__internal_aa22eb3dde7259875e5216998eb56d12c309833932d1dd9d3bb8b2bd5f750676_prof);

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
