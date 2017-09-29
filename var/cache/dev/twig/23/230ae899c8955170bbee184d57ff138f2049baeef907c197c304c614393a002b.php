<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b00aba3589b70453d58b40c18b999f2b9191dfd342ca24cc0d8f9c408612e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_668241b092023e143e0f06108db1bb673e4bc2c4f6e15ad2344e58cbec9627da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668241b092023e143e0f06108db1bb673e4bc2c4f6e15ad2344e58cbec9627da->enter($__internal_668241b092023e143e0f06108db1bb673e4bc2c4f6e15ad2344e58cbec9627da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6ca6548b45c545b3ce4029f1d7533fe8ce48c243efbd3720303ec2e86d2c3ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca6548b45c545b3ce4029f1d7533fe8ce48c243efbd3720303ec2e86d2c3ae4->enter($__internal_6ca6548b45c545b3ce4029f1d7533fe8ce48c243efbd3720303ec2e86d2c3ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668241b092023e143e0f06108db1bb673e4bc2c4f6e15ad2344e58cbec9627da->leave($__internal_668241b092023e143e0f06108db1bb673e4bc2c4f6e15ad2344e58cbec9627da_prof);

        
        $__internal_6ca6548b45c545b3ce4029f1d7533fe8ce48c243efbd3720303ec2e86d2c3ae4->leave($__internal_6ca6548b45c545b3ce4029f1d7533fe8ce48c243efbd3720303ec2e86d2c3ae4_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4b128e62c669275287fb07b7ef7c39106490ddf5aaef78116f909844f7d19b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b128e62c669275287fb07b7ef7c39106490ddf5aaef78116f909844f7d19b88->enter($__internal_4b128e62c669275287fb07b7ef7c39106490ddf5aaef78116f909844f7d19b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_94cf5c1e29f73a65473c622a392324b416d365c7631b804fc68bd5cabce903fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cf5c1e29f73a65473c622a392324b416d365c7631b804fc68bd5cabce903fe->enter($__internal_94cf5c1e29f73a65473c622a392324b416d365c7631b804fc68bd5cabce903fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_94cf5c1e29f73a65473c622a392324b416d365c7631b804fc68bd5cabce903fe->leave($__internal_94cf5c1e29f73a65473c622a392324b416d365c7631b804fc68bd5cabce903fe_prof);

        
        $__internal_4b128e62c669275287fb07b7ef7c39106490ddf5aaef78116f909844f7d19b88->leave($__internal_4b128e62c669275287fb07b7ef7c39106490ddf5aaef78116f909844f7d19b88_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0102600c58d1e7bcb072daed5c35ab9b75e484a2b5c72db363f60337024486e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0102600c58d1e7bcb072daed5c35ab9b75e484a2b5c72db363f60337024486e3->enter($__internal_0102600c58d1e7bcb072daed5c35ab9b75e484a2b5c72db363f60337024486e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_88adadaa08deac07ae5aa281a0227625a52d4761597ce7b70d0f461959cea675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88adadaa08deac07ae5aa281a0227625a52d4761597ce7b70d0f461959cea675->enter($__internal_88adadaa08deac07ae5aa281a0227625a52d4761597ce7b70d0f461959cea675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_88adadaa08deac07ae5aa281a0227625a52d4761597ce7b70d0f461959cea675->leave($__internal_88adadaa08deac07ae5aa281a0227625a52d4761597ce7b70d0f461959cea675_prof);

        
        $__internal_0102600c58d1e7bcb072daed5c35ab9b75e484a2b5c72db363f60337024486e3->leave($__internal_0102600c58d1e7bcb072daed5c35ab9b75e484a2b5c72db363f60337024486e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
