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
        $__internal_a11b5d8a4c91da58f60f743ac4e7983bb63e38b7b18c9a382f17b98303399005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11b5d8a4c91da58f60f743ac4e7983bb63e38b7b18c9a382f17b98303399005->enter($__internal_a11b5d8a4c91da58f60f743ac4e7983bb63e38b7b18c9a382f17b98303399005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_de5e60fdfb519cbe270252fafb4f030d82e5c6af66afda05ff797c18b6efee82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5e60fdfb519cbe270252fafb4f030d82e5c6af66afda05ff797c18b6efee82->enter($__internal_de5e60fdfb519cbe270252fafb4f030d82e5c6af66afda05ff797c18b6efee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11b5d8a4c91da58f60f743ac4e7983bb63e38b7b18c9a382f17b98303399005->leave($__internal_a11b5d8a4c91da58f60f743ac4e7983bb63e38b7b18c9a382f17b98303399005_prof);

        
        $__internal_de5e60fdfb519cbe270252fafb4f030d82e5c6af66afda05ff797c18b6efee82->leave($__internal_de5e60fdfb519cbe270252fafb4f030d82e5c6af66afda05ff797c18b6efee82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ca868e838b381fa44bd0ce92a8f95849c6d20b96f8312bd8993df51d4e13777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca868e838b381fa44bd0ce92a8f95849c6d20b96f8312bd8993df51d4e13777->enter($__internal_4ca868e838b381fa44bd0ce92a8f95849c6d20b96f8312bd8993df51d4e13777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec82ff12b8287e5ce51b81cc9a939d798bc6b61b82f19ae5fd5bfd5d5ec834ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec82ff12b8287e5ce51b81cc9a939d798bc6b61b82f19ae5fd5bfd5d5ec834ff->enter($__internal_ec82ff12b8287e5ce51b81cc9a939d798bc6b61b82f19ae5fd5bfd5d5ec834ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ec82ff12b8287e5ce51b81cc9a939d798bc6b61b82f19ae5fd5bfd5d5ec834ff->leave($__internal_ec82ff12b8287e5ce51b81cc9a939d798bc6b61b82f19ae5fd5bfd5d5ec834ff_prof);

        
        $__internal_4ca868e838b381fa44bd0ce92a8f95849c6d20b96f8312bd8993df51d4e13777->leave($__internal_4ca868e838b381fa44bd0ce92a8f95849c6d20b96f8312bd8993df51d4e13777_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4bf20299fedc48eeafdccd2ce011a86d6d666da81365bd4d7ff8ebb24781378d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf20299fedc48eeafdccd2ce011a86d6d666da81365bd4d7ff8ebb24781378d->enter($__internal_4bf20299fedc48eeafdccd2ce011a86d6d666da81365bd4d7ff8ebb24781378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b7843d4f9f3895f336ac53df20c819d67662a41df27d6b2b0601eda6bad973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7843d4f9f3895f336ac53df20c819d67662a41df27d6b2b0601eda6bad973d->enter($__internal_8b7843d4f9f3895f336ac53df20c819d67662a41df27d6b2b0601eda6bad973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8b7843d4f9f3895f336ac53df20c819d67662a41df27d6b2b0601eda6bad973d->leave($__internal_8b7843d4f9f3895f336ac53df20c819d67662a41df27d6b2b0601eda6bad973d_prof);

        
        $__internal_4bf20299fedc48eeafdccd2ce011a86d6d666da81365bd4d7ff8ebb24781378d->leave($__internal_4bf20299fedc48eeafdccd2ce011a86d6d666da81365bd4d7ff8ebb24781378d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96fdf0b215c617deccbb3e18ef7afe8f135dd41555aa050bd0737dea4dd2048b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96fdf0b215c617deccbb3e18ef7afe8f135dd41555aa050bd0737dea4dd2048b->enter($__internal_96fdf0b215c617deccbb3e18ef7afe8f135dd41555aa050bd0737dea4dd2048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2229d7eddaca5f428ec82753d4cfea89f8b19b614ac868f14b72460b2456bcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2229d7eddaca5f428ec82753d4cfea89f8b19b614ac868f14b72460b2456bcb4->enter($__internal_2229d7eddaca5f428ec82753d4cfea89f8b19b614ac868f14b72460b2456bcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2229d7eddaca5f428ec82753d4cfea89f8b19b614ac868f14b72460b2456bcb4->leave($__internal_2229d7eddaca5f428ec82753d4cfea89f8b19b614ac868f14b72460b2456bcb4_prof);

        
        $__internal_96fdf0b215c617deccbb3e18ef7afe8f135dd41555aa050bd0737dea4dd2048b->leave($__internal_96fdf0b215c617deccbb3e18ef7afe8f135dd41555aa050bd0737dea4dd2048b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
