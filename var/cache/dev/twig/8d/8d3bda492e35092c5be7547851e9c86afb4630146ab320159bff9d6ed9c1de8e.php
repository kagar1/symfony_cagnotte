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
        $__internal_ffdff6165d885af237fbe2b1da84e51291ff9781b194c4c71dbf1ca0310956b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdff6165d885af237fbe2b1da84e51291ff9781b194c4c71dbf1ca0310956b1->enter($__internal_ffdff6165d885af237fbe2b1da84e51291ff9781b194c4c71dbf1ca0310956b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4f2044c46d5e8cdcc4d957ab113d137245d21b0db46aeff7fec50e81f2ceeeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2044c46d5e8cdcc4d957ab113d137245d21b0db46aeff7fec50e81f2ceeeec->enter($__internal_4f2044c46d5e8cdcc4d957ab113d137245d21b0db46aeff7fec50e81f2ceeeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdff6165d885af237fbe2b1da84e51291ff9781b194c4c71dbf1ca0310956b1->leave($__internal_ffdff6165d885af237fbe2b1da84e51291ff9781b194c4c71dbf1ca0310956b1_prof);

        
        $__internal_4f2044c46d5e8cdcc4d957ab113d137245d21b0db46aeff7fec50e81f2ceeeec->leave($__internal_4f2044c46d5e8cdcc4d957ab113d137245d21b0db46aeff7fec50e81f2ceeeec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_663b7ee6caf84f5a2f185107d140739d65eeda184028943e2f8ce8caef1737c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663b7ee6caf84f5a2f185107d140739d65eeda184028943e2f8ce8caef1737c1->enter($__internal_663b7ee6caf84f5a2f185107d140739d65eeda184028943e2f8ce8caef1737c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98dd65c2d4dc5adc2c763dfa2284fcaf7ca33dc1cae35d1706757f81e8e5f83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dd65c2d4dc5adc2c763dfa2284fcaf7ca33dc1cae35d1706757f81e8e5f83c->enter($__internal_98dd65c2d4dc5adc2c763dfa2284fcaf7ca33dc1cae35d1706757f81e8e5f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98dd65c2d4dc5adc2c763dfa2284fcaf7ca33dc1cae35d1706757f81e8e5f83c->leave($__internal_98dd65c2d4dc5adc2c763dfa2284fcaf7ca33dc1cae35d1706757f81e8e5f83c_prof);

        
        $__internal_663b7ee6caf84f5a2f185107d140739d65eeda184028943e2f8ce8caef1737c1->leave($__internal_663b7ee6caf84f5a2f185107d140739d65eeda184028943e2f8ce8caef1737c1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf6953d13d85a3e1b45afe21b9907463bf6cc0e5868c6aa900e2652c5642f70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6953d13d85a3e1b45afe21b9907463bf6cc0e5868c6aa900e2652c5642f70c->enter($__internal_bf6953d13d85a3e1b45afe21b9907463bf6cc0e5868c6aa900e2652c5642f70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_608eaae4feeef8cdcfed1de8b75c089a04556971ec1d3d4eb236f46dd92a88c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608eaae4feeef8cdcfed1de8b75c089a04556971ec1d3d4eb236f46dd92a88c5->enter($__internal_608eaae4feeef8cdcfed1de8b75c089a04556971ec1d3d4eb236f46dd92a88c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_608eaae4feeef8cdcfed1de8b75c089a04556971ec1d3d4eb236f46dd92a88c5->leave($__internal_608eaae4feeef8cdcfed1de8b75c089a04556971ec1d3d4eb236f46dd92a88c5_prof);

        
        $__internal_bf6953d13d85a3e1b45afe21b9907463bf6cc0e5868c6aa900e2652c5642f70c->leave($__internal_bf6953d13d85a3e1b45afe21b9907463bf6cc0e5868c6aa900e2652c5642f70c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba6dca66f3017dba32805f21e22198b07bd08931a52ba1db8194d27bf263d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba6dca66f3017dba32805f21e22198b07bd08931a52ba1db8194d27bf263d77->enter($__internal_3ba6dca66f3017dba32805f21e22198b07bd08931a52ba1db8194d27bf263d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba36046a1eecfe5e6f28ff910cdadb16e3f5c8d34d40a647033af06d544e2973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba36046a1eecfe5e6f28ff910cdadb16e3f5c8d34d40a647033af06d544e2973->enter($__internal_ba36046a1eecfe5e6f28ff910cdadb16e3f5c8d34d40a647033af06d544e2973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ba36046a1eecfe5e6f28ff910cdadb16e3f5c8d34d40a647033af06d544e2973->leave($__internal_ba36046a1eecfe5e6f28ff910cdadb16e3f5c8d34d40a647033af06d544e2973_prof);

        
        $__internal_3ba6dca66f3017dba32805f21e22198b07bd08931a52ba1db8194d27bf263d77->leave($__internal_3ba6dca66f3017dba32805f21e22198b07bd08931a52ba1db8194d27bf263d77_prof);

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
