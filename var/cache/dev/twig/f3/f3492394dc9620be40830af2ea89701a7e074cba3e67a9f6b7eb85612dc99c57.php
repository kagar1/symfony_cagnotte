<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9315749591aa794155b0f9fe33972797a4c914346f2d327997b3a10837efc19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_e78073d1cbff71a69f23c5828c1f34f9bddb9a2d50425ba8878a72e6722bb932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78073d1cbff71a69f23c5828c1f34f9bddb9a2d50425ba8878a72e6722bb932->enter($__internal_e78073d1cbff71a69f23c5828c1f34f9bddb9a2d50425ba8878a72e6722bb932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b76e0d44ed9c26fd2fe4918291497a6cfb992526596e6b85f33da0203441f8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76e0d44ed9c26fd2fe4918291497a6cfb992526596e6b85f33da0203441f8db->enter($__internal_b76e0d44ed9c26fd2fe4918291497a6cfb992526596e6b85f33da0203441f8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78073d1cbff71a69f23c5828c1f34f9bddb9a2d50425ba8878a72e6722bb932->leave($__internal_e78073d1cbff71a69f23c5828c1f34f9bddb9a2d50425ba8878a72e6722bb932_prof);

        
        $__internal_b76e0d44ed9c26fd2fe4918291497a6cfb992526596e6b85f33da0203441f8db->leave($__internal_b76e0d44ed9c26fd2fe4918291497a6cfb992526596e6b85f33da0203441f8db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_703762c8e65656617b2418a5c469715d09791b0299b822e13ffa9fd0b0a8eb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703762c8e65656617b2418a5c469715d09791b0299b822e13ffa9fd0b0a8eb74->enter($__internal_703762c8e65656617b2418a5c469715d09791b0299b822e13ffa9fd0b0a8eb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73a0d95317b5c6b49f8e2b42ba463226bd72c793933e0f2e4eabbe4a0080acca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a0d95317b5c6b49f8e2b42ba463226bd72c793933e0f2e4eabbe4a0080acca->enter($__internal_73a0d95317b5c6b49f8e2b42ba463226bd72c793933e0f2e4eabbe4a0080acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_73a0d95317b5c6b49f8e2b42ba463226bd72c793933e0f2e4eabbe4a0080acca->leave($__internal_73a0d95317b5c6b49f8e2b42ba463226bd72c793933e0f2e4eabbe4a0080acca_prof);

        
        $__internal_703762c8e65656617b2418a5c469715d09791b0299b822e13ffa9fd0b0a8eb74->leave($__internal_703762c8e65656617b2418a5c469715d09791b0299b822e13ffa9fd0b0a8eb74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a9da23322f8ccf80004d413099257d4f50c2ccf3d48aea89238676aa4095bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a9da23322f8ccf80004d413099257d4f50c2ccf3d48aea89238676aa4095bc->enter($__internal_c7a9da23322f8ccf80004d413099257d4f50c2ccf3d48aea89238676aa4095bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1df09e5aba8adec5a77c165801d5a787adf1136e547b4e860b7e131b90f0e381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df09e5aba8adec5a77c165801d5a787adf1136e547b4e860b7e131b90f0e381->enter($__internal_1df09e5aba8adec5a77c165801d5a787adf1136e547b4e860b7e131b90f0e381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1df09e5aba8adec5a77c165801d5a787adf1136e547b4e860b7e131b90f0e381->leave($__internal_1df09e5aba8adec5a77c165801d5a787adf1136e547b4e860b7e131b90f0e381_prof);

        
        $__internal_c7a9da23322f8ccf80004d413099257d4f50c2ccf3d48aea89238676aa4095bc->leave($__internal_c7a9da23322f8ccf80004d413099257d4f50c2ccf3d48aea89238676aa4095bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
