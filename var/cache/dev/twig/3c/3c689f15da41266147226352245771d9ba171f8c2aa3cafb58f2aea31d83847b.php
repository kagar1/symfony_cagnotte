<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6bb4ff11626cecb59a03a84f061116282fce74892df7fd9a7e10f17811feb733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7820dd65049f1efe1da28d0f5285a3aa93335ee0fe0d094452f6b0e0c9d3ebe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7820dd65049f1efe1da28d0f5285a3aa93335ee0fe0d094452f6b0e0c9d3ebe2->enter($__internal_7820dd65049f1efe1da28d0f5285a3aa93335ee0fe0d094452f6b0e0c9d3ebe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ce6b1f98e41cad81047c66fa9493026f0dbe2a8ea5d16d8ee49d10698ea52c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6b1f98e41cad81047c66fa9493026f0dbe2a8ea5d16d8ee49d10698ea52c12->enter($__internal_ce6b1f98e41cad81047c66fa9493026f0dbe2a8ea5d16d8ee49d10698ea52c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7820dd65049f1efe1da28d0f5285a3aa93335ee0fe0d094452f6b0e0c9d3ebe2->leave($__internal_7820dd65049f1efe1da28d0f5285a3aa93335ee0fe0d094452f6b0e0c9d3ebe2_prof);

        
        $__internal_ce6b1f98e41cad81047c66fa9493026f0dbe2a8ea5d16d8ee49d10698ea52c12->leave($__internal_ce6b1f98e41cad81047c66fa9493026f0dbe2a8ea5d16d8ee49d10698ea52c12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_344b63e0107569a015d269e62d14ad58440327610bef0f2d11ee528814a38759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344b63e0107569a015d269e62d14ad58440327610bef0f2d11ee528814a38759->enter($__internal_344b63e0107569a015d269e62d14ad58440327610bef0f2d11ee528814a38759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32d5883921ec716c7fd2937531416e9b3a314a74e8507d61b8eea52c6257d814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d5883921ec716c7fd2937531416e9b3a314a74e8507d61b8eea52c6257d814->enter($__internal_32d5883921ec716c7fd2937531416e9b3a314a74e8507d61b8eea52c6257d814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_32d5883921ec716c7fd2937531416e9b3a314a74e8507d61b8eea52c6257d814->leave($__internal_32d5883921ec716c7fd2937531416e9b3a314a74e8507d61b8eea52c6257d814_prof);

        
        $__internal_344b63e0107569a015d269e62d14ad58440327610bef0f2d11ee528814a38759->leave($__internal_344b63e0107569a015d269e62d14ad58440327610bef0f2d11ee528814a38759_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1576eed553f47ba2fcfa1b2c8eeaaadfa93a2a058c78db816e1d924c93dc92d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1576eed553f47ba2fcfa1b2c8eeaaadfa93a2a058c78db816e1d924c93dc92d4->enter($__internal_1576eed553f47ba2fcfa1b2c8eeaaadfa93a2a058c78db816e1d924c93dc92d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcfb1261856478fcfdd504524d6b97c96a6a013b3a52fec302a2f6e61733b1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfb1261856478fcfdd504524d6b97c96a6a013b3a52fec302a2f6e61733b1f1->enter($__internal_bcfb1261856478fcfdd504524d6b97c96a6a013b3a52fec302a2f6e61733b1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_bcfb1261856478fcfdd504524d6b97c96a6a013b3a52fec302a2f6e61733b1f1->leave($__internal_bcfb1261856478fcfdd504524d6b97c96a6a013b3a52fec302a2f6e61733b1f1_prof);

        
        $__internal_1576eed553f47ba2fcfa1b2c8eeaaadfa93a2a058c78db816e1d924c93dc92d4->leave($__internal_1576eed553f47ba2fcfa1b2c8eeaaadfa93a2a058c78db816e1d924c93dc92d4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
