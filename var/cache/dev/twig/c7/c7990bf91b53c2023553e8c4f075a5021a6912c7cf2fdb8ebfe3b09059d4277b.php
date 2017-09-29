<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d618b59fca9a830b8ab3ed0eeb533711d1b9c8f96a2fe56b9fec819474ef979e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_b2f2417ea5052abd7d4ca8d1356360449f201a282632945138c4cce968577f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f2417ea5052abd7d4ca8d1356360449f201a282632945138c4cce968577f44->enter($__internal_b2f2417ea5052abd7d4ca8d1356360449f201a282632945138c4cce968577f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3ecf733e3ef2dde859de8270f5a6f662475359be26c8cfe4c68a17a4cd34474c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecf733e3ef2dde859de8270f5a6f662475359be26c8cfe4c68a17a4cd34474c->enter($__internal_3ecf733e3ef2dde859de8270f5a6f662475359be26c8cfe4c68a17a4cd34474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2f2417ea5052abd7d4ca8d1356360449f201a282632945138c4cce968577f44->leave($__internal_b2f2417ea5052abd7d4ca8d1356360449f201a282632945138c4cce968577f44_prof);

        
        $__internal_3ecf733e3ef2dde859de8270f5a6f662475359be26c8cfe4c68a17a4cd34474c->leave($__internal_3ecf733e3ef2dde859de8270f5a6f662475359be26c8cfe4c68a17a4cd34474c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e22b6f0787cdd4eb905ce75b6bf59b5934539dcbd4df8aa1d9bb30705173d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e22b6f0787cdd4eb905ce75b6bf59b5934539dcbd4df8aa1d9bb30705173d40->enter($__internal_4e22b6f0787cdd4eb905ce75b6bf59b5934539dcbd4df8aa1d9bb30705173d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f876a6fc42f3d3c9b15e502e58c847b7eeb5520dc42c9857e089602280a90059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f876a6fc42f3d3c9b15e502e58c847b7eeb5520dc42c9857e089602280a90059->enter($__internal_f876a6fc42f3d3c9b15e502e58c847b7eeb5520dc42c9857e089602280a90059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f876a6fc42f3d3c9b15e502e58c847b7eeb5520dc42c9857e089602280a90059->leave($__internal_f876a6fc42f3d3c9b15e502e58c847b7eeb5520dc42c9857e089602280a90059_prof);

        
        $__internal_4e22b6f0787cdd4eb905ce75b6bf59b5934539dcbd4df8aa1d9bb30705173d40->leave($__internal_4e22b6f0787cdd4eb905ce75b6bf59b5934539dcbd4df8aa1d9bb30705173d40_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_29bcc42d475ffcc65cfe2978c945bd2c61ec7893b53d256471708359d5178493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29bcc42d475ffcc65cfe2978c945bd2c61ec7893b53d256471708359d5178493->enter($__internal_29bcc42d475ffcc65cfe2978c945bd2c61ec7893b53d256471708359d5178493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a4b3058d32f22948c2f5919a5dba9189431c0bdd12f87877b50cd325247004e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4b3058d32f22948c2f5919a5dba9189431c0bdd12f87877b50cd325247004e->enter($__internal_8a4b3058d32f22948c2f5919a5dba9189431c0bdd12f87877b50cd325247004e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a4b3058d32f22948c2f5919a5dba9189431c0bdd12f87877b50cd325247004e->leave($__internal_8a4b3058d32f22948c2f5919a5dba9189431c0bdd12f87877b50cd325247004e_prof);

        
        $__internal_29bcc42d475ffcc65cfe2978c945bd2c61ec7893b53d256471708359d5178493->leave($__internal_29bcc42d475ffcc65cfe2978c945bd2c61ec7893b53d256471708359d5178493_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
