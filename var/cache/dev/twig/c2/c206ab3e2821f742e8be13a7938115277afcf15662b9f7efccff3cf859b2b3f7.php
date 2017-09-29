<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6a2355aa7f1013b197aef05ec7ae491c62f377d27c7c1ea05b1b9f67c2a90770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6124e9fb1be690bb0fc6edd463c637c8074480a8d99fec522ad42d7ba20a5b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6124e9fb1be690bb0fc6edd463c637c8074480a8d99fec522ad42d7ba20a5b82->enter($__internal_6124e9fb1be690bb0fc6edd463c637c8074480a8d99fec522ad42d7ba20a5b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5322648ed9e3e2638c6e7d76090dc0fe956bff816b1a5beaf7c28a1ad47d392f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5322648ed9e3e2638c6e7d76090dc0fe956bff816b1a5beaf7c28a1ad47d392f->enter($__internal_5322648ed9e3e2638c6e7d76090dc0fe956bff816b1a5beaf7c28a1ad47d392f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6124e9fb1be690bb0fc6edd463c637c8074480a8d99fec522ad42d7ba20a5b82->leave($__internal_6124e9fb1be690bb0fc6edd463c637c8074480a8d99fec522ad42d7ba20a5b82_prof);

        
        $__internal_5322648ed9e3e2638c6e7d76090dc0fe956bff816b1a5beaf7c28a1ad47d392f->leave($__internal_5322648ed9e3e2638c6e7d76090dc0fe956bff816b1a5beaf7c28a1ad47d392f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea43698e38e554192215f4271d6c296662f867d59e6bc8b4e540e7b451f367bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea43698e38e554192215f4271d6c296662f867d59e6bc8b4e540e7b451f367bb->enter($__internal_ea43698e38e554192215f4271d6c296662f867d59e6bc8b4e540e7b451f367bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30492e3a0688a58cd2e23189cb718d8a734fd5845283bd908e16ffb2b1182dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30492e3a0688a58cd2e23189cb718d8a734fd5845283bd908e16ffb2b1182dcb->enter($__internal_30492e3a0688a58cd2e23189cb718d8a734fd5845283bd908e16ffb2b1182dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_30492e3a0688a58cd2e23189cb718d8a734fd5845283bd908e16ffb2b1182dcb->leave($__internal_30492e3a0688a58cd2e23189cb718d8a734fd5845283bd908e16ffb2b1182dcb_prof);

        
        $__internal_ea43698e38e554192215f4271d6c296662f867d59e6bc8b4e540e7b451f367bb->leave($__internal_ea43698e38e554192215f4271d6c296662f867d59e6bc8b4e540e7b451f367bb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a01b9a03bd84db41958ab57b01600ee24b6dbb215e99bcbdb2aac9709f04e9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01b9a03bd84db41958ab57b01600ee24b6dbb215e99bcbdb2aac9709f04e9ae->enter($__internal_a01b9a03bd84db41958ab57b01600ee24b6dbb215e99bcbdb2aac9709f04e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b741abf9bf65f6844c541bad716d504126887c78a8a56ece5bbb37faa4ecb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b741abf9bf65f6844c541bad716d504126887c78a8a56ece5bbb37faa4ecb88->enter($__internal_1b741abf9bf65f6844c541bad716d504126887c78a8a56ece5bbb37faa4ecb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b741abf9bf65f6844c541bad716d504126887c78a8a56ece5bbb37faa4ecb88->leave($__internal_1b741abf9bf65f6844c541bad716d504126887c78a8a56ece5bbb37faa4ecb88_prof);

        
        $__internal_a01b9a03bd84db41958ab57b01600ee24b6dbb215e99bcbdb2aac9709f04e9ae->leave($__internal_a01b9a03bd84db41958ab57b01600ee24b6dbb215e99bcbdb2aac9709f04e9ae_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_617703949c5e886d47e314667eeaa69c7e16cf729a29f2539f737977f3657d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617703949c5e886d47e314667eeaa69c7e16cf729a29f2539f737977f3657d8b->enter($__internal_617703949c5e886d47e314667eeaa69c7e16cf729a29f2539f737977f3657d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1e3e98fbafe0148e6aba142bdbf10859ff1f9343e1ad53a88f605bd0a36251d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e3e98fbafe0148e6aba142bdbf10859ff1f9343e1ad53a88f605bd0a36251d->enter($__internal_f1e3e98fbafe0148e6aba142bdbf10859ff1f9343e1ad53a88f605bd0a36251d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f1e3e98fbafe0148e6aba142bdbf10859ff1f9343e1ad53a88f605bd0a36251d->leave($__internal_f1e3e98fbafe0148e6aba142bdbf10859ff1f9343e1ad53a88f605bd0a36251d_prof);

        
        $__internal_617703949c5e886d47e314667eeaa69c7e16cf729a29f2539f737977f3657d8b->leave($__internal_617703949c5e886d47e314667eeaa69c7e16cf729a29f2539f737977f3657d8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
