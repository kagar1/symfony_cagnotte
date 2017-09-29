<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78aa62fff1a3227e95a456019b012765b5a4c2c2f10f2113c5add59bdbd2d681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78aa62fff1a3227e95a456019b012765b5a4c2c2f10f2113c5add59bdbd2d681->enter($__internal_78aa62fff1a3227e95a456019b012765b5a4c2c2f10f2113c5add59bdbd2d681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a22446a6b644cb7188a204a34a0a2c563589c88b98a6573b9d1e420e24c2b97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22446a6b644cb7188a204a34a0a2c563589c88b98a6573b9d1e420e24c2b97a->enter($__internal_a22446a6b644cb7188a204a34a0a2c563589c88b98a6573b9d1e420e24c2b97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78aa62fff1a3227e95a456019b012765b5a4c2c2f10f2113c5add59bdbd2d681->leave($__internal_78aa62fff1a3227e95a456019b012765b5a4c2c2f10f2113c5add59bdbd2d681_prof);

        
        $__internal_a22446a6b644cb7188a204a34a0a2c563589c88b98a6573b9d1e420e24c2b97a->leave($__internal_a22446a6b644cb7188a204a34a0a2c563589c88b98a6573b9d1e420e24c2b97a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_590c12f82c2d22e83a77070feab60b4ad24b3b3a866692d623e0f7c295e46ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590c12f82c2d22e83a77070feab60b4ad24b3b3a866692d623e0f7c295e46ff6->enter($__internal_590c12f82c2d22e83a77070feab60b4ad24b3b3a866692d623e0f7c295e46ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_435d8feb4d6898d7a86cd0fb3458e07d30a1c726902b219e95ed8ccecb8ea725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435d8feb4d6898d7a86cd0fb3458e07d30a1c726902b219e95ed8ccecb8ea725->enter($__internal_435d8feb4d6898d7a86cd0fb3458e07d30a1c726902b219e95ed8ccecb8ea725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_435d8feb4d6898d7a86cd0fb3458e07d30a1c726902b219e95ed8ccecb8ea725->leave($__internal_435d8feb4d6898d7a86cd0fb3458e07d30a1c726902b219e95ed8ccecb8ea725_prof);

        
        $__internal_590c12f82c2d22e83a77070feab60b4ad24b3b3a866692d623e0f7c295e46ff6->leave($__internal_590c12f82c2d22e83a77070feab60b4ad24b3b3a866692d623e0f7c295e46ff6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8aea253e709a1d3149b9f60d61c7b9b09af6f94fe82bab7c69144e23d10efa53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aea253e709a1d3149b9f60d61c7b9b09af6f94fe82bab7c69144e23d10efa53->enter($__internal_8aea253e709a1d3149b9f60d61c7b9b09af6f94fe82bab7c69144e23d10efa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4b0b1444d509f29f17b8eda824f57fcfe78f55a5c9dd36ac2a796e46ac272d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b0b1444d509f29f17b8eda824f57fcfe78f55a5c9dd36ac2a796e46ac272d4->enter($__internal_d4b0b1444d509f29f17b8eda824f57fcfe78f55a5c9dd36ac2a796e46ac272d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4b0b1444d509f29f17b8eda824f57fcfe78f55a5c9dd36ac2a796e46ac272d4->leave($__internal_d4b0b1444d509f29f17b8eda824f57fcfe78f55a5c9dd36ac2a796e46ac272d4_prof);

        
        $__internal_8aea253e709a1d3149b9f60d61c7b9b09af6f94fe82bab7c69144e23d10efa53->leave($__internal_8aea253e709a1d3149b9f60d61c7b9b09af6f94fe82bab7c69144e23d10efa53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e54ff2a3cb7c8a130b559f9e6fa858d5a40728da9999f0aeb21c6e37daef038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e54ff2a3cb7c8a130b559f9e6fa858d5a40728da9999f0aeb21c6e37daef038->enter($__internal_8e54ff2a3cb7c8a130b559f9e6fa858d5a40728da9999f0aeb21c6e37daef038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0476a9f0a812550631562d70ac1747ad9633a64f7b72e2e51ea18e2726a6a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0476a9f0a812550631562d70ac1747ad9633a64f7b72e2e51ea18e2726a6a2e->enter($__internal_f0476a9f0a812550631562d70ac1747ad9633a64f7b72e2e51ea18e2726a6a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0476a9f0a812550631562d70ac1747ad9633a64f7b72e2e51ea18e2726a6a2e->leave($__internal_f0476a9f0a812550631562d70ac1747ad9633a64f7b72e2e51ea18e2726a6a2e_prof);

        
        $__internal_8e54ff2a3cb7c8a130b559f9e6fa858d5a40728da9999f0aeb21c6e37daef038->leave($__internal_8e54ff2a3cb7c8a130b559f9e6fa858d5a40728da9999f0aeb21c6e37daef038_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
