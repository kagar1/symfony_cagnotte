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
        $__internal_929cced7c4e618b8fc46fd02ec95d2c021af6f9e48627427d8f4d2af8886bf21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929cced7c4e618b8fc46fd02ec95d2c021af6f9e48627427d8f4d2af8886bf21->enter($__internal_929cced7c4e618b8fc46fd02ec95d2c021af6f9e48627427d8f4d2af8886bf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Default:index.html.twig"));

        $__internal_123dcc842fcf748e99f6ef9e5d5897cb53cee0d1133fff3e57bed255e0bf9fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123dcc842fcf748e99f6ef9e5d5897cb53cee0d1133fff3e57bed255e0bf9fd3->enter($__internal_123dcc842fcf748e99f6ef9e5d5897cb53cee0d1133fff3e57bed255e0bf9fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929cced7c4e618b8fc46fd02ec95d2c021af6f9e48627427d8f4d2af8886bf21->leave($__internal_929cced7c4e618b8fc46fd02ec95d2c021af6f9e48627427d8f4d2af8886bf21_prof);

        
        $__internal_123dcc842fcf748e99f6ef9e5d5897cb53cee0d1133fff3e57bed255e0bf9fd3->leave($__internal_123dcc842fcf748e99f6ef9e5d5897cb53cee0d1133fff3e57bed255e0bf9fd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51b658956883901b8c65109eca3e2928287a29936ac9630a0177316f97a3c3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b658956883901b8c65109eca3e2928287a29936ac9630a0177316f97a3c3d8->enter($__internal_51b658956883901b8c65109eca3e2928287a29936ac9630a0177316f97a3c3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db5eb42f034ac3b39747bef6a4ba6c35e3afe3beb841879a91d475bd4bb0f929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5eb42f034ac3b39747bef6a4ba6c35e3afe3beb841879a91d475bd4bb0f929->enter($__internal_db5eb42f034ac3b39747bef6a4ba6c35e3afe3beb841879a91d475bd4bb0f929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"color:red; text-align:center \">Bog Application</h1>
    je commence à comprendre cette histoire de symfony oui oui
";
        
        $__internal_db5eb42f034ac3b39747bef6a4ba6c35e3afe3beb841879a91d475bd4bb0f929->leave($__internal_db5eb42f034ac3b39747bef6a4ba6c35e3afe3beb841879a91d475bd4bb0f929_prof);

        
        $__internal_51b658956883901b8c65109eca3e2928287a29936ac9630a0177316f97a3c3d8->leave($__internal_51b658956883901b8c65109eca3e2928287a29936ac9630a0177316f97a3c3d8_prof);

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
    je commence à comprendre cette histoire de symfony oui oui
{% endblock %}

", "CoreCagnotteBundle:Default:index.html.twig", "C:\\wamp64\\www\\cagnotte\\src\\Core\\CagnotteBundle/Resources/views/Default/index.html.twig");
    }
}
