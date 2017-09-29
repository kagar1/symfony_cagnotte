<?php

/* CoreCagnotteBundle:Default:index.html.twig */
class __TwigTemplate_5a3decf99fbb8b4e163c307c4ab64def1fced56973af7b966a1db4fd8e6615d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a05c4e6e306aa80ee76a527993081d4dfbf7171a6ff6ca783439b4850cdd21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a05c4e6e306aa80ee76a527993081d4dfbf7171a6ff6ca783439b4850cdd21d->enter($__internal_6a05c4e6e306aa80ee76a527993081d4dfbf7171a6ff6ca783439b4850cdd21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Default:index.html.twig"));

        $__internal_9b5b68e9b94bd695f345a7811b1003d1d09e81622b979b96b3fba80327283a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5b68e9b94bd695f345a7811b1003d1d09e81622b979b96b3fba80327283a76->enter($__internal_9b5b68e9b94bd695f345a7811b1003d1d09e81622b979b96b3fba80327283a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a05c4e6e306aa80ee76a527993081d4dfbf7171a6ff6ca783439b4850cdd21d->leave($__internal_6a05c4e6e306aa80ee76a527993081d4dfbf7171a6ff6ca783439b4850cdd21d_prof);

        
        $__internal_9b5b68e9b94bd695f345a7811b1003d1d09e81622b979b96b3fba80327283a76->leave($__internal_9b5b68e9b94bd695f345a7811b1003d1d09e81622b979b96b3fba80327283a76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54da0cc651355aed45e7d8457017ff1af43b5a97e9d7c12b19546b1c1ce647c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54da0cc651355aed45e7d8457017ff1af43b5a97e9d7c12b19546b1c1ce647c2->enter($__internal_54da0cc651355aed45e7d8457017ff1af43b5a97e9d7c12b19546b1c1ce647c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55fa1fa1487eeedb91778ed3f5faf34410e56a387d35e872a972330cb6d63f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fa1fa1487eeedb91778ed3f5faf34410e56a387d35e872a972330cb6d63f33->enter($__internal_55fa1fa1487eeedb91778ed3f5faf34410e56a387d35e872a972330cb6d63f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"color:red; text-align:center \">Bog Application</h1>
    je commence à comprendre cette histoire de symfony
";
        
        $__internal_55fa1fa1487eeedb91778ed3f5faf34410e56a387d35e872a972330cb6d63f33->leave($__internal_55fa1fa1487eeedb91778ed3f5faf34410e56a387d35e872a972330cb6d63f33_prof);

        
        $__internal_54da0cc651355aed45e7d8457017ff1af43b5a97e9d7c12b19546b1c1ce647c2->leave($__internal_54da0cc651355aed45e7d8457017ff1af43b5a97e9d7c12b19546b1c1ce647c2_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 style=\"color:red; text-align:center \">Bog Application</h1>
    je commence à comprendre cette histoire de symfony
{% endblock %}

", "CoreCagnotteBundle:Default:index.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/Default/index.html.twig");
    }
}
