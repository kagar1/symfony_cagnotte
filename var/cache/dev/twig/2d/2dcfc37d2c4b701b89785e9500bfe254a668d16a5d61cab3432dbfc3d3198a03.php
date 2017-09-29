<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1af2b205ad2e5885b1177b583b5d115d22c23006caf0278e200c07be47ad0b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_add8dc767846812b641ab68ff4ceff72fbf9808e7e09998e479aca00b08af388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add8dc767846812b641ab68ff4ceff72fbf9808e7e09998e479aca00b08af388->enter($__internal_add8dc767846812b641ab68ff4ceff72fbf9808e7e09998e479aca00b08af388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b61707d6346d2ab47692438c8dadcf2f20e9d89edbc49169057f6684046d5b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61707d6346d2ab47692438c8dadcf2f20e9d89edbc49169057f6684046d5b0a->enter($__internal_b61707d6346d2ab47692438c8dadcf2f20e9d89edbc49169057f6684046d5b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add8dc767846812b641ab68ff4ceff72fbf9808e7e09998e479aca00b08af388->leave($__internal_add8dc767846812b641ab68ff4ceff72fbf9808e7e09998e479aca00b08af388_prof);

        
        $__internal_b61707d6346d2ab47692438c8dadcf2f20e9d89edbc49169057f6684046d5b0a->leave($__internal_b61707d6346d2ab47692438c8dadcf2f20e9d89edbc49169057f6684046d5b0a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_41c12bb369f1055e7dc3ad5d374c7aaddf845e628577328701c3506f502bcd49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c12bb369f1055e7dc3ad5d374c7aaddf845e628577328701c3506f502bcd49->enter($__internal_41c12bb369f1055e7dc3ad5d374c7aaddf845e628577328701c3506f502bcd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dba5cccd2a63849dde6c2bb2808e666ffb25fbb9088675842bf9c0e95a2f2137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba5cccd2a63849dde6c2bb2808e666ffb25fbb9088675842bf9c0e95a2f2137->enter($__internal_dba5cccd2a63849dde6c2bb2808e666ffb25fbb9088675842bf9c0e95a2f2137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_dba5cccd2a63849dde6c2bb2808e666ffb25fbb9088675842bf9c0e95a2f2137->leave($__internal_dba5cccd2a63849dde6c2bb2808e666ffb25fbb9088675842bf9c0e95a2f2137_prof);

        
        $__internal_41c12bb369f1055e7dc3ad5d374c7aaddf845e628577328701c3506f502bcd49->leave($__internal_41c12bb369f1055e7dc3ad5d374c7aaddf845e628577328701c3506f502bcd49_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_599de5538391c809dc326cd9e126c19d7d7af728ba533e1cb5fb30da3fab7a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599de5538391c809dc326cd9e126c19d7d7af728ba533e1cb5fb30da3fab7a02->enter($__internal_599de5538391c809dc326cd9e126c19d7d7af728ba533e1cb5fb30da3fab7a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f87af97a444c3a15845480bc6e0c06ac05af958d237e4e55504ca538fd76708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f87af97a444c3a15845480bc6e0c06ac05af958d237e4e55504ca538fd76708->enter($__internal_8f87af97a444c3a15845480bc6e0c06ac05af958d237e4e55504ca538fd76708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8f87af97a444c3a15845480bc6e0c06ac05af958d237e4e55504ca538fd76708->leave($__internal_8f87af97a444c3a15845480bc6e0c06ac05af958d237e4e55504ca538fd76708_prof);

        
        $__internal_599de5538391c809dc326cd9e126c19d7d7af728ba533e1cb5fb30da3fab7a02->leave($__internal_599de5538391c809dc326cd9e126c19d7d7af728ba533e1cb5fb30da3fab7a02_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
