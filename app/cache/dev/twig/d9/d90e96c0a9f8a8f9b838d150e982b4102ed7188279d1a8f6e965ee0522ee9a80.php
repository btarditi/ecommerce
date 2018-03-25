<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_109849fe1f94a07bd996dda62b088b2e2b826dd6378983a282d4e125dc6a265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"span3\">
                \t";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 7)->display($context);
        // line 8
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"span9\">
                    <h2>Votre parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>
                    
                    <dt>TVA :</dt>
                    <dd>200€</dd>
    
                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 57,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"span3\">
                \t{% include '::modulesUsed/navigation.html.twig' %}
\t\t\t\t</div>
\t\t\t\t<div class=\"span9\">
                    <h2>Votre parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>
                    
                    <dt>TVA :</dt>
                    <dd>200€</dd>
    
                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>
{% endblock %}
", "EcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\wamp64\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
