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
        $__internal_f45cc2178a944d1d6345a124af09e62a8e89ea74d69cc141475061a5c216d085 = $this->env->getExtension("native_profiler");
        $__internal_f45cc2178a944d1d6345a124af09e62a8e89ea74d69cc141475061a5c216d085->enter($__internal_f45cc2178a944d1d6345a124af09e62a8e89ea74d69cc141475061a5c216d085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45cc2178a944d1d6345a124af09e62a8e89ea74d69cc141475061a5c216d085->leave($__internal_f45cc2178a944d1d6345a124af09e62a8e89ea74d69cc141475061a5c216d085_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33bf8fabaaeb76311e49e305991d61e2059d361ff92e23640d7f28a5b7cf40e9 = $this->env->getExtension("native_profiler");
        $__internal_33bf8fabaaeb76311e49e305991d61e2059d361ff92e23640d7f28a5b7cf40e9->enter($__internal_33bf8fabaaeb76311e49e305991d61e2059d361ff92e23640d7f28a5b7cf40e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33bf8fabaaeb76311e49e305991d61e2059d361ff92e23640d7f28a5b7cf40e9->leave($__internal_33bf8fabaaeb76311e49e305991d61e2059d361ff92e23640d7f28a5b7cf40e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ba1d4ecb24481c01c443771c7926095b5feac1c8ee026a304331a0529b6f1b6 = $this->env->getExtension("native_profiler");
        $__internal_8ba1d4ecb24481c01c443771c7926095b5feac1c8ee026a304331a0529b6f1b6->enter($__internal_8ba1d4ecb24481c01c443771c7926095b5feac1c8ee026a304331a0529b6f1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ba1d4ecb24481c01c443771c7926095b5feac1c8ee026a304331a0529b6f1b6->leave($__internal_8ba1d4ecb24481c01c443771c7926095b5feac1c8ee026a304331a0529b6f1b6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd32c85b88d4cbae78fe47a9d63cd2da30219acf4f72c66063584f4053e50ac0 = $this->env->getExtension("native_profiler");
        $__internal_bd32c85b88d4cbae78fe47a9d63cd2da30219acf4f72c66063584f4053e50ac0->enter($__internal_bd32c85b88d4cbae78fe47a9d63cd2da30219acf4f72c66063584f4053e50ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bd32c85b88d4cbae78fe47a9d63cd2da30219acf4f72c66063584f4053e50ac0->leave($__internal_bd32c85b88d4cbae78fe47a9d63cd2da30219acf4f72c66063584f4053e50ac0_prof);

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
