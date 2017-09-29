<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a30f2aba0e86f2e9a213ae7a3327eaa0620e5565a69a9236ddba978599211e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1f5f835f85fffa80cd9b225ba7b8a4f7e6d6c35c81c3ad0e46dc5ef61dbc5010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5f835f85fffa80cd9b225ba7b8a4f7e6d6c35c81c3ad0e46dc5ef61dbc5010->enter($__internal_1f5f835f85fffa80cd9b225ba7b8a4f7e6d6c35c81c3ad0e46dc5ef61dbc5010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b344f01bf8cfe5753e18614c8a88d83940f57d18b03b8c64114ada5bf39e3d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b344f01bf8cfe5753e18614c8a88d83940f57d18b03b8c64114ada5bf39e3d88->enter($__internal_b344f01bf8cfe5753e18614c8a88d83940f57d18b03b8c64114ada5bf39e3d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5f835f85fffa80cd9b225ba7b8a4f7e6d6c35c81c3ad0e46dc5ef61dbc5010->leave($__internal_1f5f835f85fffa80cd9b225ba7b8a4f7e6d6c35c81c3ad0e46dc5ef61dbc5010_prof);

        
        $__internal_b344f01bf8cfe5753e18614c8a88d83940f57d18b03b8c64114ada5bf39e3d88->leave($__internal_b344f01bf8cfe5753e18614c8a88d83940f57d18b03b8c64114ada5bf39e3d88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_198467ea6ac3335f225ea34908dada762e5bc39f74aaa408fef04998b472f6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198467ea6ac3335f225ea34908dada762e5bc39f74aaa408fef04998b472f6d1->enter($__internal_198467ea6ac3335f225ea34908dada762e5bc39f74aaa408fef04998b472f6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1f9ffcfd1c2bd40b473357f1f2edfb58384e3c33cbe19c97b03c82be01e3518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f9ffcfd1c2bd40b473357f1f2edfb58384e3c33cbe19c97b03c82be01e3518->enter($__internal_d1f9ffcfd1c2bd40b473357f1f2edfb58384e3c33cbe19c97b03c82be01e3518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d1f9ffcfd1c2bd40b473357f1f2edfb58384e3c33cbe19c97b03c82be01e3518->leave($__internal_d1f9ffcfd1c2bd40b473357f1f2edfb58384e3c33cbe19c97b03c82be01e3518_prof);

        
        $__internal_198467ea6ac3335f225ea34908dada762e5bc39f74aaa408fef04998b472f6d1->leave($__internal_198467ea6ac3335f225ea34908dada762e5bc39f74aaa408fef04998b472f6d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9b1f3007e922673f48ca6c07a9222f602fd71281e5b815d080cad44923c025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9b1f3007e922673f48ca6c07a9222f602fd71281e5b815d080cad44923c025->enter($__internal_fe9b1f3007e922673f48ca6c07a9222f602fd71281e5b815d080cad44923c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf3b7061a437e1294c2db6788056b23f38239f4428b38bfd5210dc8ef9be40e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3b7061a437e1294c2db6788056b23f38239f4428b38bfd5210dc8ef9be40e8->enter($__internal_cf3b7061a437e1294c2db6788056b23f38239f4428b38bfd5210dc8ef9be40e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cf3b7061a437e1294c2db6788056b23f38239f4428b38bfd5210dc8ef9be40e8->leave($__internal_cf3b7061a437e1294c2db6788056b23f38239f4428b38bfd5210dc8ef9be40e8_prof);

        
        $__internal_fe9b1f3007e922673f48ca6c07a9222f602fd71281e5b815d080cad44923c025->leave($__internal_fe9b1f3007e922673f48ca6c07a9222f602fd71281e5b815d080cad44923c025_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
