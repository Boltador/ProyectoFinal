<?php

/* AdonaiUnicoBundle:Security:login.html.twig */
class __TwigTemplate_f296f019b4c22fd08298c902539323f139213b5644ef132fd4df4aa1f7018076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9f8dac82e29d390f87e847d69e63b8c221b1b825a1a42b87f4d2903e687a4a2 = $this->env->getExtension("native_profiler");
        $__internal_f9f8dac82e29d390f87e847d69e63b8c221b1b825a1a42b87f4d2903e687a4a2->enter($__internal_f9f8dac82e29d390f87e847d69e63b8c221b1b825a1a42b87f4d2903e687a4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdonaiUnicoBundle:Security:login.html.twig"));

        // line 1
        echo "<html>
<head>
\t";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "</head>
<body>
\t";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 12
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><img class=\"img-responsive\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo2.png"), "html", null, true);
        echo "\" /></center>
\t\t\t\t<br/>
\t\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t\t<div class=\"panel panel-login\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<a class=\"active\" id=\"login-form-link\">Sistema de Registro Académico - ADONAI</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<form id=\"login-form\" action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"_username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Usuario\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Contraseña\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember\">Recordar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" value=\"Ingresar\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" tabindex=\"5\" class=\"forgot-password\">Olvidaste tu contraseña?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>

";
        
        $__internal_f9f8dac82e29d390f87e847d69e63b8c221b1b825a1a42b87f4d2903e687a4a2->leave($__internal_f9f8dac82e29d390f87e847d69e63b8c221b1b825a1a42b87f4d2903e687a4a2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8befa1748dff42bce6f8eb36955104eb77039546619c9e2ddf89a7f9193b19e7 = $this->env->getExtension("native_profiler");
        $__internal_8befa1748dff42bce6f8eb36955104eb77039546619c9e2ddf89a7f9193b19e7->enter($__internal_8befa1748dff42bce6f8eb36955104eb77039546619c9e2ddf89a7f9193b19e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t";
        
        $__internal_8befa1748dff42bce6f8eb36955104eb77039546619c9e2ddf89a7f9193b19e7->leave($__internal_8befa1748dff42bce6f8eb36955104eb77039546619c9e2ddf89a7f9193b19e7_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb89823d98b560f1323039eea833321589d5ae20c3ceda9156479674b705aa76 = $this->env->getExtension("native_profiler");
        $__internal_bb89823d98b560f1323039eea833321589d5ae20c3ceda9156479674b705aa76->enter($__internal_bb89823d98b560f1323039eea833321589d5ae20c3ceda9156479674b705aa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/login.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_bb89823d98b560f1323039eea833321589d5ae20c3ceda9156479674b705aa76->leave($__internal_bb89823d98b560f1323039eea833321589d5ae20c3ceda9156479674b705aa76_prof);

    }

    public function getTemplateName()
    {
        return "AdonaiUnicoBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 69,  146 => 68,  140 => 67,  131 => 5,  126 => 4,  120 => 3,  110 => 71,  108 => 67,  71 => 33,  66 => 31,  48 => 16,  42 => 12,  36 => 10,  34 => 9,  30 => 7,  28 => 3,  24 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* 	{% block stylesheets %}*/
/* 	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/* 	<link href="{{ asset('public/css/login.css') }}" rel="stylesheet" />*/
/* 	{% endblock %}*/
/* </head>*/
/* <body>*/
/* 	{% if error %}*/
/* 	<div>{{ error.message }}</div>*/
/* 	{% endif %}*/
/* */
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<center><img class="img-responsive" src="{{ asset('public/img/logo2.png') }}" /></center>*/
/* 				<br/>*/
/* 				<div class="col-md-6 col-md-offset-3">*/
/* 					<div class="panel panel-login">*/
/* 						<div class="panel-heading">*/
/* 							<div class="row">*/
/* 								<div class="col-xs-12">*/
/* 									<a class="active" id="login-form-link">Sistema de Registro Académico - ADONAI</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 						</div>*/
/* 						<div class="panel-body">*/
/* 							<div class="row">*/
/* 								<div class="col-lg-12">*/
/* 									<form id="login-form" action="{{ path('login_check') }}" method="post" role="form" style="display: block;">*/
/* 										<div class="form-group">*/
/* 											<input type="text" name="_username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="{{ last_username }}">*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<input type="password" name="_password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">*/
/* 										</div>*/
/* 										<div class="form-group text-center">*/
/* 											<input type="checkbox" tabindex="3" class="" name="remember" id="remember">*/
/* 											<label for="remember">Recordar</label>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="row">*/
/* 												<div class="col-sm-6 col-sm-offset-3">*/
/* 													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ingresar">*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="row">*/
/* 												<div class="col-lg-12">*/
/* 													<div class="text-center">*/
/* 														<a href="#" tabindex="5" class="forgot-password">Olvidaste tu contraseña?</a>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</form>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('public/js/login.js') }}"></script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
/* */
