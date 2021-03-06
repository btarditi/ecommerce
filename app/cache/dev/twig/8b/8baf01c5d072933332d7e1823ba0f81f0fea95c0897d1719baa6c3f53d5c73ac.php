<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_d59159bc1944131c546fcc0e580ef6339157ac9344985be9ac083cc19d77882f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Vous avez perdu votre mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, un email vous seras envoyé.<br />
                            Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <div>
                                <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            </div>
                            <div>
                                <input class='btn btn-primary' type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 24,  45 => 20,  40 => 18,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Vous avez perdu votre mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, un email vous seras envoyé.<br />
                            Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <div>
                                <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            </div>
                            <div>
                                <input class='btn btn-primary' type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}
