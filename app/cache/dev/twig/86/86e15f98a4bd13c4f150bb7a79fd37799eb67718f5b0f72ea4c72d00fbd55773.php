<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f1a414258c43fbb17f15a4e795206e717e6a9fa9b66f617dd5ce0e6c107e6e18 extends Twig_Template
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
        $__internal_d4cbf53f511ada54bb89133c3196e423133ce8794d5857f7b9760ed1630fba16 = $this->env->getExtension("native_profiler");
        $__internal_d4cbf53f511ada54bb89133c3196e423133ce8794d5857f7b9760ed1630fba16->enter($__internal_d4cbf53f511ada54bb89133c3196e423133ce8794d5857f7b9760ed1630fba16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d4cbf53f511ada54bb89133c3196e423133ce8794d5857f7b9760ed1630fba16->leave($__internal_d4cbf53f511ada54bb89133c3196e423133ce8794d5857f7b9760ed1630fba16_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
