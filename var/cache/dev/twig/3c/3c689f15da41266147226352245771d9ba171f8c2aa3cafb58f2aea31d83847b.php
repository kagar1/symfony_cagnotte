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
        $__internal_e55e07e300da081b72a509317d4b612ffa7b0025e8c639c124ebe3d49fe9fb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55e07e300da081b72a509317d4b612ffa7b0025e8c639c124ebe3d49fe9fb5e->enter($__internal_e55e07e300da081b72a509317d4b612ffa7b0025e8c639c124ebe3d49fe9fb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2d573ddd2c3c854c2057f69fa7b818096cbff430bfc693612529d6e652fff648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d573ddd2c3c854c2057f69fa7b818096cbff430bfc693612529d6e652fff648->enter($__internal_2d573ddd2c3c854c2057f69fa7b818096cbff430bfc693612529d6e652fff648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55e07e300da081b72a509317d4b612ffa7b0025e8c639c124ebe3d49fe9fb5e->leave($__internal_e55e07e300da081b72a509317d4b612ffa7b0025e8c639c124ebe3d49fe9fb5e_prof);

        
        $__internal_2d573ddd2c3c854c2057f69fa7b818096cbff430bfc693612529d6e652fff648->leave($__internal_2d573ddd2c3c854c2057f69fa7b818096cbff430bfc693612529d6e652fff648_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1eb13ab13634546329e41da1057f89f89a3c71e0fefdd4e092ea0ba5016dea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1eb13ab13634546329e41da1057f89f89a3c71e0fefdd4e092ea0ba5016dea8->enter($__internal_f1eb13ab13634546329e41da1057f89f89a3c71e0fefdd4e092ea0ba5016dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84accd50514b0f7f17d4e468bd67fa2063a1d0d7f34c3bb48a1d38f83ecca23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84accd50514b0f7f17d4e468bd67fa2063a1d0d7f34c3bb48a1d38f83ecca23d->enter($__internal_84accd50514b0f7f17d4e468bd67fa2063a1d0d7f34c3bb48a1d38f83ecca23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_84accd50514b0f7f17d4e468bd67fa2063a1d0d7f34c3bb48a1d38f83ecca23d->leave($__internal_84accd50514b0f7f17d4e468bd67fa2063a1d0d7f34c3bb48a1d38f83ecca23d_prof);

        
        $__internal_f1eb13ab13634546329e41da1057f89f89a3c71e0fefdd4e092ea0ba5016dea8->leave($__internal_f1eb13ab13634546329e41da1057f89f89a3c71e0fefdd4e092ea0ba5016dea8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_188c984d221e3cd9587c3451a02ed9eec5773d873385d48935a7ae6ee7a2cfc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188c984d221e3cd9587c3451a02ed9eec5773d873385d48935a7ae6ee7a2cfc4->enter($__internal_188c984d221e3cd9587c3451a02ed9eec5773d873385d48935a7ae6ee7a2cfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04f45d226a0826b61c6009ebe9f41e6b69e6a43bdc6a6be19cf6f0b634642ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f45d226a0826b61c6009ebe9f41e6b69e6a43bdc6a6be19cf6f0b634642ecd->enter($__internal_04f45d226a0826b61c6009ebe9f41e6b69e6a43bdc6a6be19cf6f0b634642ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04f45d226a0826b61c6009ebe9f41e6b69e6a43bdc6a6be19cf6f0b634642ecd->leave($__internal_04f45d226a0826b61c6009ebe9f41e6b69e6a43bdc6a6be19cf6f0b634642ecd_prof);

        
        $__internal_188c984d221e3cd9587c3451a02ed9eec5773d873385d48935a7ae6ee7a2cfc4->leave($__internal_188c984d221e3cd9587c3451a02ed9eec5773d873385d48935a7ae6ee7a2cfc4_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
