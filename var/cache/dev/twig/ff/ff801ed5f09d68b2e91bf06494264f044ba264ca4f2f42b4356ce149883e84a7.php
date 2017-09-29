<?php

/* @CoreCagnotte/Default/index.html.twig */
class __TwigTemplate_aa9c56e3b057a1004b5a601ac6db5aec3c7962e6be19517bb3c4f0fea3a5b57d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@CoreCagnotte/Default/index.html.twig", 1);
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
        $__internal_1849a92116362c6b9fdc81c4c59c156f82767e31923b927b852b257be501dbed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1849a92116362c6b9fdc81c4c59c156f82767e31923b927b852b257be501dbed->enter($__internal_1849a92116362c6b9fdc81c4c59c156f82767e31923b927b852b257be501dbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/Default/index.html.twig"));

        $__internal_855cd2e9120c133b825e99bdf090c27c9361c581adf42516805b6e7efa15be05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855cd2e9120c133b825e99bdf090c27c9361c581adf42516805b6e7efa15be05->enter($__internal_855cd2e9120c133b825e99bdf090c27c9361c581adf42516805b6e7efa15be05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1849a92116362c6b9fdc81c4c59c156f82767e31923b927b852b257be501dbed->leave($__internal_1849a92116362c6b9fdc81c4c59c156f82767e31923b927b852b257be501dbed_prof);

        
        $__internal_855cd2e9120c133b825e99bdf090c27c9361c581adf42516805b6e7efa15be05->leave($__internal_855cd2e9120c133b825e99bdf090c27c9361c581adf42516805b6e7efa15be05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_061fc5fcddfaebdf7baa8f10782ef492bff7bfa6904c26fb08692fe2a70aab15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061fc5fcddfaebdf7baa8f10782ef492bff7bfa6904c26fb08692fe2a70aab15->enter($__internal_061fc5fcddfaebdf7baa8f10782ef492bff7bfa6904c26fb08692fe2a70aab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3646340eb42264dacf03595abfec1edb30c3f2ce0366ecfcbeabf3e366f5b40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3646340eb42264dacf03595abfec1edb30c3f2ce0366ecfcbeabf3e366f5b40f->enter($__internal_3646340eb42264dacf03595abfec1edb30c3f2ce0366ecfcbeabf3e366f5b40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"color:red; text-align:center \">Bog Application</h1>
    je commence à comprendre cette histoire de symfony
";
        
        $__internal_3646340eb42264dacf03595abfec1edb30c3f2ce0366ecfcbeabf3e366f5b40f->leave($__internal_3646340eb42264dacf03595abfec1edb30c3f2ce0366ecfcbeabf3e366f5b40f_prof);

        
        $__internal_061fc5fcddfaebdf7baa8f10782ef492bff7bfa6904c26fb08692fe2a70aab15->leave($__internal_061fc5fcddfaebdf7baa8f10782ef492bff7bfa6904c26fb08692fe2a70aab15_prof);

    }

    public function getTemplateName()
    {
        return "@CoreCagnotte/Default/index.html.twig";
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

", "@CoreCagnotte/Default/index.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
