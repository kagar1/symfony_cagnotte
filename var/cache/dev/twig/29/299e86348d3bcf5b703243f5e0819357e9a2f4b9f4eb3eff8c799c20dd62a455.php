<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6a749129187158c6f4ec256c7f3be34327e35cf0522ccd52f7cc1840e5496d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_b44ac2fbedd82e4f92ba8adce0fb9713bef9a1d0074ba212977c9da791437021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44ac2fbedd82e4f92ba8adce0fb9713bef9a1d0074ba212977c9da791437021->enter($__internal_b44ac2fbedd82e4f92ba8adce0fb9713bef9a1d0074ba212977c9da791437021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3a11baa8f3c40d443e48b9beba91c486b9d4a4ab176f4d5337360543a041f9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a11baa8f3c40d443e48b9beba91c486b9d4a4ab176f4d5337360543a041f9f5->enter($__internal_3a11baa8f3c40d443e48b9beba91c486b9d4a4ab176f4d5337360543a041f9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44ac2fbedd82e4f92ba8adce0fb9713bef9a1d0074ba212977c9da791437021->leave($__internal_b44ac2fbedd82e4f92ba8adce0fb9713bef9a1d0074ba212977c9da791437021_prof);

        
        $__internal_3a11baa8f3c40d443e48b9beba91c486b9d4a4ab176f4d5337360543a041f9f5->leave($__internal_3a11baa8f3c40d443e48b9beba91c486b9d4a4ab176f4d5337360543a041f9f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46520c25cc366221308d35943cc079926dfb544886e922fa6096cd262f26734b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46520c25cc366221308d35943cc079926dfb544886e922fa6096cd262f26734b->enter($__internal_46520c25cc366221308d35943cc079926dfb544886e922fa6096cd262f26734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76508f4600610d3058b7c20274284e1a56208e3cf5e766021f3bac2c4fe4a9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76508f4600610d3058b7c20274284e1a56208e3cf5e766021f3bac2c4fe4a9fe->enter($__internal_76508f4600610d3058b7c20274284e1a56208e3cf5e766021f3bac2c4fe4a9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_76508f4600610d3058b7c20274284e1a56208e3cf5e766021f3bac2c4fe4a9fe->leave($__internal_76508f4600610d3058b7c20274284e1a56208e3cf5e766021f3bac2c4fe4a9fe_prof);

        
        $__internal_46520c25cc366221308d35943cc079926dfb544886e922fa6096cd262f26734b->leave($__internal_46520c25cc366221308d35943cc079926dfb544886e922fa6096cd262f26734b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd04b7ee792fa310852ca100a388c216f44b1579ba981df42a0429494681c96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd04b7ee792fa310852ca100a388c216f44b1579ba981df42a0429494681c96d->enter($__internal_dd04b7ee792fa310852ca100a388c216f44b1579ba981df42a0429494681c96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2c3d8ffe9589814e5ba1a612c2d3022971b7fe88ff15f2edd7ab05bb6322223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c3d8ffe9589814e5ba1a612c2d3022971b7fe88ff15f2edd7ab05bb6322223->enter($__internal_c2c3d8ffe9589814e5ba1a612c2d3022971b7fe88ff15f2edd7ab05bb6322223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c2c3d8ffe9589814e5ba1a612c2d3022971b7fe88ff15f2edd7ab05bb6322223->leave($__internal_c2c3d8ffe9589814e5ba1a612c2d3022971b7fe88ff15f2edd7ab05bb6322223_prof);

        
        $__internal_dd04b7ee792fa310852ca100a388c216f44b1579ba981df42a0429494681c96d->leave($__internal_dd04b7ee792fa310852ca100a388c216f44b1579ba981df42a0429494681c96d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1174a52d99bbaf9effabf802968f8a63094f19b00dc0ffe3881fcc7a28b8913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1174a52d99bbaf9effabf802968f8a63094f19b00dc0ffe3881fcc7a28b8913->enter($__internal_f1174a52d99bbaf9effabf802968f8a63094f19b00dc0ffe3881fcc7a28b8913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bee437b38e6a133a8d2b4987452ea77e66aba1e02008d36ae2c85c4d35b93175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee437b38e6a133a8d2b4987452ea77e66aba1e02008d36ae2c85c4d35b93175->enter($__internal_bee437b38e6a133a8d2b4987452ea77e66aba1e02008d36ae2c85c4d35b93175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bee437b38e6a133a8d2b4987452ea77e66aba1e02008d36ae2c85c4d35b93175->leave($__internal_bee437b38e6a133a8d2b4987452ea77e66aba1e02008d36ae2c85c4d35b93175_prof);

        
        $__internal_f1174a52d99bbaf9effabf802968f8a63094f19b00dc0ffe3881fcc7a28b8913->leave($__internal_f1174a52d99bbaf9effabf802968f8a63094f19b00dc0ffe3881fcc7a28b8913_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
