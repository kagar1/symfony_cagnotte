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
        $__internal_615a946d779d8e26239a63396f1bc3f180a7c30253ec6ab718cfd1fc03e0f8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615a946d779d8e26239a63396f1bc3f180a7c30253ec6ab718cfd1fc03e0f8a7->enter($__internal_615a946d779d8e26239a63396f1bc3f180a7c30253ec6ab718cfd1fc03e0f8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e0a9c5674e5a0637d5a6c09a3e260fb3552301124ed22e0a3055085862b9ad57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a9c5674e5a0637d5a6c09a3e260fb3552301124ed22e0a3055085862b9ad57->enter($__internal_e0a9c5674e5a0637d5a6c09a3e260fb3552301124ed22e0a3055085862b9ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615a946d779d8e26239a63396f1bc3f180a7c30253ec6ab718cfd1fc03e0f8a7->leave($__internal_615a946d779d8e26239a63396f1bc3f180a7c30253ec6ab718cfd1fc03e0f8a7_prof);

        
        $__internal_e0a9c5674e5a0637d5a6c09a3e260fb3552301124ed22e0a3055085862b9ad57->leave($__internal_e0a9c5674e5a0637d5a6c09a3e260fb3552301124ed22e0a3055085862b9ad57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17d12327c184cdf53233a750466e192f822fe7f521c62ddcc006b21c099221d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d12327c184cdf53233a750466e192f822fe7f521c62ddcc006b21c099221d7->enter($__internal_17d12327c184cdf53233a750466e192f822fe7f521c62ddcc006b21c099221d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c4b332c3fea0c2758665f1525c6a9dc520a248d44465e28a8546aa8de7130d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4b332c3fea0c2758665f1525c6a9dc520a248d44465e28a8546aa8de7130d8->enter($__internal_1c4b332c3fea0c2758665f1525c6a9dc520a248d44465e28a8546aa8de7130d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c4b332c3fea0c2758665f1525c6a9dc520a248d44465e28a8546aa8de7130d8->leave($__internal_1c4b332c3fea0c2758665f1525c6a9dc520a248d44465e28a8546aa8de7130d8_prof);

        
        $__internal_17d12327c184cdf53233a750466e192f822fe7f521c62ddcc006b21c099221d7->leave($__internal_17d12327c184cdf53233a750466e192f822fe7f521c62ddcc006b21c099221d7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fcdfe356cc47564ffba147f840b5ced02877410d6b54a567fb7830d0923c348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcdfe356cc47564ffba147f840b5ced02877410d6b54a567fb7830d0923c348->enter($__internal_9fcdfe356cc47564ffba147f840b5ced02877410d6b54a567fb7830d0923c348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea64bfd9d463006f4056e5358bc9f9ec8852e3f637f8d27cb3e13391425b45bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea64bfd9d463006f4056e5358bc9f9ec8852e3f637f8d27cb3e13391425b45bc->enter($__internal_ea64bfd9d463006f4056e5358bc9f9ec8852e3f637f8d27cb3e13391425b45bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea64bfd9d463006f4056e5358bc9f9ec8852e3f637f8d27cb3e13391425b45bc->leave($__internal_ea64bfd9d463006f4056e5358bc9f9ec8852e3f637f8d27cb3e13391425b45bc_prof);

        
        $__internal_9fcdfe356cc47564ffba147f840b5ced02877410d6b54a567fb7830d0923c348->leave($__internal_9fcdfe356cc47564ffba147f840b5ced02877410d6b54a567fb7830d0923c348_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f207d30803777feb2a4d94dd8b761c0ccd1c6b0ca112703e2e64d22fb96c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f207d30803777feb2a4d94dd8b761c0ccd1c6b0ca112703e2e64d22fb96c3b->enter($__internal_23f207d30803777feb2a4d94dd8b761c0ccd1c6b0ca112703e2e64d22fb96c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88579fba33db327a0b9b8851647a53254aaeacb08318f3d389e48e3537c7933a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88579fba33db327a0b9b8851647a53254aaeacb08318f3d389e48e3537c7933a->enter($__internal_88579fba33db327a0b9b8851647a53254aaeacb08318f3d389e48e3537c7933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_88579fba33db327a0b9b8851647a53254aaeacb08318f3d389e48e3537c7933a->leave($__internal_88579fba33db327a0b9b8851647a53254aaeacb08318f3d389e48e3537c7933a_prof);

        
        $__internal_23f207d30803777feb2a4d94dd8b761c0ccd1c6b0ca112703e2e64d22fb96c3b->leave($__internal_23f207d30803777feb2a4d94dd8b761c0ccd1c6b0ca112703e2e64d22fb96c3b_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
