<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f823cfc0da8cfb6112c7132a23ddeea41e9cc9c2d0dbe26ed549f1c19c71e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_668065cc606c19de86da142ed525524ae7aa3618fe5d1c36c7a85e9bb5ec4aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668065cc606c19de86da142ed525524ae7aa3618fe5d1c36c7a85e9bb5ec4aa9->enter($__internal_668065cc606c19de86da142ed525524ae7aa3618fe5d1c36c7a85e9bb5ec4aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3095ba27fc7e3a180c9843e08b801f5869f01cf4dcfd65418bedc9ebde33b620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3095ba27fc7e3a180c9843e08b801f5869f01cf4dcfd65418bedc9ebde33b620->enter($__internal_3095ba27fc7e3a180c9843e08b801f5869f01cf4dcfd65418bedc9ebde33b620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668065cc606c19de86da142ed525524ae7aa3618fe5d1c36c7a85e9bb5ec4aa9->leave($__internal_668065cc606c19de86da142ed525524ae7aa3618fe5d1c36c7a85e9bb5ec4aa9_prof);

        
        $__internal_3095ba27fc7e3a180c9843e08b801f5869f01cf4dcfd65418bedc9ebde33b620->leave($__internal_3095ba27fc7e3a180c9843e08b801f5869f01cf4dcfd65418bedc9ebde33b620_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a84963bd477aaa70a42fbd3003523d4dfdfa15507d7bad418bc03c459d066eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84963bd477aaa70a42fbd3003523d4dfdfa15507d7bad418bc03c459d066eb4->enter($__internal_a84963bd477aaa70a42fbd3003523d4dfdfa15507d7bad418bc03c459d066eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d26c16aee2cf5eac0a34bd703e31ca6f38c4dab2daabccc9e9e1b17c42d313e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d26c16aee2cf5eac0a34bd703e31ca6f38c4dab2daabccc9e9e1b17c42d313e->enter($__internal_6d26c16aee2cf5eac0a34bd703e31ca6f38c4dab2daabccc9e9e1b17c42d313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d26c16aee2cf5eac0a34bd703e31ca6f38c4dab2daabccc9e9e1b17c42d313e->leave($__internal_6d26c16aee2cf5eac0a34bd703e31ca6f38c4dab2daabccc9e9e1b17c42d313e_prof);

        
        $__internal_a84963bd477aaa70a42fbd3003523d4dfdfa15507d7bad418bc03c459d066eb4->leave($__internal_a84963bd477aaa70a42fbd3003523d4dfdfa15507d7bad418bc03c459d066eb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_773edcb13aef3337e7d98492cace39e78be40417701d90bb71d8fa09c0c1c73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773edcb13aef3337e7d98492cace39e78be40417701d90bb71d8fa09c0c1c73b->enter($__internal_773edcb13aef3337e7d98492cace39e78be40417701d90bb71d8fa09c0c1c73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_42aa97866d937b91d4d0b7c4a7a6fbf26a55a77c2aa6139560f5de8cff8ab4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42aa97866d937b91d4d0b7c4a7a6fbf26a55a77c2aa6139560f5de8cff8ab4b9->enter($__internal_42aa97866d937b91d4d0b7c4a7a6fbf26a55a77c2aa6139560f5de8cff8ab4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42aa97866d937b91d4d0b7c4a7a6fbf26a55a77c2aa6139560f5de8cff8ab4b9->leave($__internal_42aa97866d937b91d4d0b7c4a7a6fbf26a55a77c2aa6139560f5de8cff8ab4b9_prof);

        
        $__internal_773edcb13aef3337e7d98492cace39e78be40417701d90bb71d8fa09c0c1c73b->leave($__internal_773edcb13aef3337e7d98492cace39e78be40417701d90bb71d8fa09c0c1c73b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1348793811c1da6c448bb6ab1fc44b29a964f4f5232ffedaeb431913c0fe6d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1348793811c1da6c448bb6ab1fc44b29a964f4f5232ffedaeb431913c0fe6d8e->enter($__internal_1348793811c1da6c448bb6ab1fc44b29a964f4f5232ffedaeb431913c0fe6d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e36d723223ead91f2d59aa2b3f8c09984359c7fa34f4a259e4bfa791e7292b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36d723223ead91f2d59aa2b3f8c09984359c7fa34f4a259e4bfa791e7292b8d->enter($__internal_e36d723223ead91f2d59aa2b3f8c09984359c7fa34f4a259e4bfa791e7292b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e36d723223ead91f2d59aa2b3f8c09984359c7fa34f4a259e4bfa791e7292b8d->leave($__internal_e36d723223ead91f2d59aa2b3f8c09984359c7fa34f4a259e4bfa791e7292b8d_prof);

        
        $__internal_1348793811c1da6c448bb6ab1fc44b29a964f4f5232ffedaeb431913c0fe6d8e->leave($__internal_1348793811c1da6c448bb6ab1fc44b29a964f4f5232ffedaeb431913c0fe6d8e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
