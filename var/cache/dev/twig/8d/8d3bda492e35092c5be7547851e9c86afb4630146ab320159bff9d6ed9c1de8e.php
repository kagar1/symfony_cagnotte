<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3516777261cd48bc891c52926c2c9a5e5c03e83cf73184d89b9884fcd94f6b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3516777261cd48bc891c52926c2c9a5e5c03e83cf73184d89b9884fcd94f6b56->enter($__internal_3516777261cd48bc891c52926c2c9a5e5c03e83cf73184d89b9884fcd94f6b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f42f3955eac1d1f89098acfff743dc114a1d39eeb3f55bf0af40979c0de769d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42f3955eac1d1f89098acfff743dc114a1d39eeb3f55bf0af40979c0de769d8->enter($__internal_f42f3955eac1d1f89098acfff743dc114a1d39eeb3f55bf0af40979c0de769d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3516777261cd48bc891c52926c2c9a5e5c03e83cf73184d89b9884fcd94f6b56->leave($__internal_3516777261cd48bc891c52926c2c9a5e5c03e83cf73184d89b9884fcd94f6b56_prof);

        
        $__internal_f42f3955eac1d1f89098acfff743dc114a1d39eeb3f55bf0af40979c0de769d8->leave($__internal_f42f3955eac1d1f89098acfff743dc114a1d39eeb3f55bf0af40979c0de769d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60951ec4e374fd00dec56063799222323a2ea34a625d79330bec4d1bbfd4f1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60951ec4e374fd00dec56063799222323a2ea34a625d79330bec4d1bbfd4f1de->enter($__internal_60951ec4e374fd00dec56063799222323a2ea34a625d79330bec4d1bbfd4f1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7ee5ae3ad850d81d59e49b404fd47f7cdcf5718e1b61cba8a069e239ac9a1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ee5ae3ad850d81d59e49b404fd47f7cdcf5718e1b61cba8a069e239ac9a1b6->enter($__internal_d7ee5ae3ad850d81d59e49b404fd47f7cdcf5718e1b61cba8a069e239ac9a1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d7ee5ae3ad850d81d59e49b404fd47f7cdcf5718e1b61cba8a069e239ac9a1b6->leave($__internal_d7ee5ae3ad850d81d59e49b404fd47f7cdcf5718e1b61cba8a069e239ac9a1b6_prof);

        
        $__internal_60951ec4e374fd00dec56063799222323a2ea34a625d79330bec4d1bbfd4f1de->leave($__internal_60951ec4e374fd00dec56063799222323a2ea34a625d79330bec4d1bbfd4f1de_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b35949f991bae289710afffcaad9432e9c5e72fd1f1f8417b8f3c70efd3b4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b35949f991bae289710afffcaad9432e9c5e72fd1f1f8417b8f3c70efd3b4c8->enter($__internal_5b35949f991bae289710afffcaad9432e9c5e72fd1f1f8417b8f3c70efd3b4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87bf5047a54a5d781e71e21c31ea15f32d192eebcdd070af671f6a2e2ace1635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bf5047a54a5d781e71e21c31ea15f32d192eebcdd070af671f6a2e2ace1635->enter($__internal_87bf5047a54a5d781e71e21c31ea15f32d192eebcdd070af671f6a2e2ace1635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87bf5047a54a5d781e71e21c31ea15f32d192eebcdd070af671f6a2e2ace1635->leave($__internal_87bf5047a54a5d781e71e21c31ea15f32d192eebcdd070af671f6a2e2ace1635_prof);

        
        $__internal_5b35949f991bae289710afffcaad9432e9c5e72fd1f1f8417b8f3c70efd3b4c8->leave($__internal_5b35949f991bae289710afffcaad9432e9c5e72fd1f1f8417b8f3c70efd3b4c8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c98337c96ba8b7e47aff02d62475b01f98202b2f3c33244c6ae0b8ffcc6487e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98337c96ba8b7e47aff02d62475b01f98202b2f3c33244c6ae0b8ffcc6487e0->enter($__internal_c98337c96ba8b7e47aff02d62475b01f98202b2f3c33244c6ae0b8ffcc6487e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdda08165f54be0f7e47839686b8f7fdb7da895200def88ffd0efed807940dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdda08165f54be0f7e47839686b8f7fdb7da895200def88ffd0efed807940dbb->enter($__internal_bdda08165f54be0f7e47839686b8f7fdb7da895200def88ffd0efed807940dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bdda08165f54be0f7e47839686b8f7fdb7da895200def88ffd0efed807940dbb->leave($__internal_bdda08165f54be0f7e47839686b8f7fdb7da895200def88ffd0efed807940dbb_prof);

        
        $__internal_c98337c96ba8b7e47aff02d62475b01f98202b2f3c33244c6ae0b8ffcc6487e0->leave($__internal_c98337c96ba8b7e47aff02d62475b01f98202b2f3c33244c6ae0b8ffcc6487e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
