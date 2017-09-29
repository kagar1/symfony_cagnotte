<?php

/* @CoreCagnotte/produit/edit.html.twig */
class __TwigTemplate_71830ee63b3ae17b46f9d4f89306821dab9c31484f0ec4715c8570b95444ef6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@CoreCagnotte/produit/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_027aefd3322bb635828d69efc0cebdf02cd370241c8a1e2cbc2cd0a7fa1d9a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027aefd3322bb635828d69efc0cebdf02cd370241c8a1e2cbc2cd0a7fa1d9a08->enter($__internal_027aefd3322bb635828d69efc0cebdf02cd370241c8a1e2cbc2cd0a7fa1d9a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/edit.html.twig"));

        $__internal_531afcc712dffc7d0967163f775caf11e8c91964e1bc0a21a5bebb6ecb11cb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531afcc712dffc7d0967163f775caf11e8c91964e1bc0a21a5bebb6ecb11cb39->enter($__internal_531afcc712dffc7d0967163f775caf11e8c91964e1bc0a21a5bebb6ecb11cb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027aefd3322bb635828d69efc0cebdf02cd370241c8a1e2cbc2cd0a7fa1d9a08->leave($__internal_027aefd3322bb635828d69efc0cebdf02cd370241c8a1e2cbc2cd0a7fa1d9a08_prof);

        
        $__internal_531afcc712dffc7d0967163f775caf11e8c91964e1bc0a21a5bebb6ecb11cb39->leave($__internal_531afcc712dffc7d0967163f775caf11e8c91964e1bc0a21a5bebb6ecb11cb39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26ad488976197339b429a5028b4124f02dbee596aaf7a738b08bfa1007c5fa39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ad488976197339b429a5028b4124f02dbee596aaf7a738b08bfa1007c5fa39->enter($__internal_26ad488976197339b429a5028b4124f02dbee596aaf7a738b08bfa1007c5fa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39bde4179a5d70a6df55b034b39d343af30284c445dfd9d967e85f9d096f732c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bde4179a5d70a6df55b034b39d343af30284c445dfd9d967e85f9d096f732c->enter($__internal_39bde4179a5d70a6df55b034b39d343af30284c445dfd9d967e85f9d096f732c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Produit edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_39bde4179a5d70a6df55b034b39d343af30284c445dfd9d967e85f9d096f732c->leave($__internal_39bde4179a5d70a6df55b034b39d343af30284c445dfd9d967e85f9d096f732c_prof);

        
        $__internal_26ad488976197339b429a5028b4124f02dbee596aaf7a738b08bfa1007c5fa39->leave($__internal_26ad488976197339b429a5028b4124f02dbee596aaf7a738b08bfa1007c5fa39_prof);

    }

    public function getTemplateName()
    {
        return "@CoreCagnotte/produit/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <h1>Produit edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('produit_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@CoreCagnotte/produit/edit.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle\\Resources\\views\\produit\\edit.html.twig");
    }
}
