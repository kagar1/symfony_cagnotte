<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_56bdac785adb9870b6e4b02cc8657b4b0a338678968a2927e95f30199ddf9ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bdac785adb9870b6e4b02cc8657b4b0a338678968a2927e95f30199ddf9ec6->enter($__internal_56bdac785adb9870b6e4b02cc8657b4b0a338678968a2927e95f30199ddf9ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_194372c8b5c7a8dc519ee007e9c93ed26e55601eaa52d47e06e476c44b9a0df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194372c8b5c7a8dc519ee007e9c93ed26e55601eaa52d47e06e476c44b9a0df9->enter($__internal_194372c8b5c7a8dc519ee007e9c93ed26e55601eaa52d47e06e476c44b9a0df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bdac785adb9870b6e4b02cc8657b4b0a338678968a2927e95f30199ddf9ec6->leave($__internal_56bdac785adb9870b6e4b02cc8657b4b0a338678968a2927e95f30199ddf9ec6_prof);

        
        $__internal_194372c8b5c7a8dc519ee007e9c93ed26e55601eaa52d47e06e476c44b9a0df9->leave($__internal_194372c8b5c7a8dc519ee007e9c93ed26e55601eaa52d47e06e476c44b9a0df9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f73cbb4f7bbaa028571ba454fd7bb59794f8bc718b99531cbc2e9690d536311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f73cbb4f7bbaa028571ba454fd7bb59794f8bc718b99531cbc2e9690d536311->enter($__internal_0f73cbb4f7bbaa028571ba454fd7bb59794f8bc718b99531cbc2e9690d536311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_685b8e4635168b208968cf7d8eb6213301a60b6775889ecd86836c790a4bcd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685b8e4635168b208968cf7d8eb6213301a60b6775889ecd86836c790a4bcd92->enter($__internal_685b8e4635168b208968cf7d8eb6213301a60b6775889ecd86836c790a4bcd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_685b8e4635168b208968cf7d8eb6213301a60b6775889ecd86836c790a4bcd92->leave($__internal_685b8e4635168b208968cf7d8eb6213301a60b6775889ecd86836c790a4bcd92_prof);

        
        $__internal_0f73cbb4f7bbaa028571ba454fd7bb59794f8bc718b99531cbc2e9690d536311->leave($__internal_0f73cbb4f7bbaa028571ba454fd7bb59794f8bc718b99531cbc2e9690d536311_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09c1b09e8757b71225de34867ecf1878f391b20f9a5af70ea97251ed18993742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c1b09e8757b71225de34867ecf1878f391b20f9a5af70ea97251ed18993742->enter($__internal_09c1b09e8757b71225de34867ecf1878f391b20f9a5af70ea97251ed18993742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ef2ed6af85fe2f450de4525f05b4346c720a6e58b71519c0e0e21a8779368ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef2ed6af85fe2f450de4525f05b4346c720a6e58b71519c0e0e21a8779368ea->enter($__internal_6ef2ed6af85fe2f450de4525f05b4346c720a6e58b71519c0e0e21a8779368ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6ef2ed6af85fe2f450de4525f05b4346c720a6e58b71519c0e0e21a8779368ea->leave($__internal_6ef2ed6af85fe2f450de4525f05b4346c720a6e58b71519c0e0e21a8779368ea_prof);

        
        $__internal_09c1b09e8757b71225de34867ecf1878f391b20f9a5af70ea97251ed18993742->leave($__internal_09c1b09e8757b71225de34867ecf1878f391b20f9a5af70ea97251ed18993742_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_869bbe1e25305fd50ee31aa6593b359096a1445d31ad2d9d334dd662c1287bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869bbe1e25305fd50ee31aa6593b359096a1445d31ad2d9d334dd662c1287bac->enter($__internal_869bbe1e25305fd50ee31aa6593b359096a1445d31ad2d9d334dd662c1287bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca3ac51edb420809280c95f9a54e6cec6eed12df0adc74bd43ce7ab92d6cb436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3ac51edb420809280c95f9a54e6cec6eed12df0adc74bd43ce7ab92d6cb436->enter($__internal_ca3ac51edb420809280c95f9a54e6cec6eed12df0adc74bd43ce7ab92d6cb436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ca3ac51edb420809280c95f9a54e6cec6eed12df0adc74bd43ce7ab92d6cb436->leave($__internal_ca3ac51edb420809280c95f9a54e6cec6eed12df0adc74bd43ce7ab92d6cb436_prof);

        
        $__internal_869bbe1e25305fd50ee31aa6593b359096a1445d31ad2d9d334dd662c1287bac->leave($__internal_869bbe1e25305fd50ee31aa6593b359096a1445d31ad2d9d334dd662c1287bac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
