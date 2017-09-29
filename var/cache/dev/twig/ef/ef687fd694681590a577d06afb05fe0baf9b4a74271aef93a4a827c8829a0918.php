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
        $__internal_936a114624d38e10bfcb0857b53f86c2b48a52192d97d5d0f9d4f8d8ee7a1fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936a114624d38e10bfcb0857b53f86c2b48a52192d97d5d0f9d4f8d8ee7a1fd4->enter($__internal_936a114624d38e10bfcb0857b53f86c2b48a52192d97d5d0f9d4f8d8ee7a1fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ec0151d310ed88c6cd77e7d391e8f7589d79702bf60c45a5a2fbcd3a1fe55a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0151d310ed88c6cd77e7d391e8f7589d79702bf60c45a5a2fbcd3a1fe55a6c->enter($__internal_ec0151d310ed88c6cd77e7d391e8f7589d79702bf60c45a5a2fbcd3a1fe55a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_936a114624d38e10bfcb0857b53f86c2b48a52192d97d5d0f9d4f8d8ee7a1fd4->leave($__internal_936a114624d38e10bfcb0857b53f86c2b48a52192d97d5d0f9d4f8d8ee7a1fd4_prof);

        
        $__internal_ec0151d310ed88c6cd77e7d391e8f7589d79702bf60c45a5a2fbcd3a1fe55a6c->leave($__internal_ec0151d310ed88c6cd77e7d391e8f7589d79702bf60c45a5a2fbcd3a1fe55a6c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e9cb7ec541e5ed9cc3376830915a79ce1f7eb2882c9fe03ff545ac46a209c32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9cb7ec541e5ed9cc3376830915a79ce1f7eb2882c9fe03ff545ac46a209c32d->enter($__internal_e9cb7ec541e5ed9cc3376830915a79ce1f7eb2882c9fe03ff545ac46a209c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79e1879b1e2b557eaa094249673354fac32053cc0952b26708c0b76b0f79bead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e1879b1e2b557eaa094249673354fac32053cc0952b26708c0b76b0f79bead->enter($__internal_79e1879b1e2b557eaa094249673354fac32053cc0952b26708c0b76b0f79bead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79e1879b1e2b557eaa094249673354fac32053cc0952b26708c0b76b0f79bead->leave($__internal_79e1879b1e2b557eaa094249673354fac32053cc0952b26708c0b76b0f79bead_prof);

        
        $__internal_e9cb7ec541e5ed9cc3376830915a79ce1f7eb2882c9fe03ff545ac46a209c32d->leave($__internal_e9cb7ec541e5ed9cc3376830915a79ce1f7eb2882c9fe03ff545ac46a209c32d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f4273203a9f93c9c3e40468ab692aff5f204a3398da03adfdfeff63e3d76d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4273203a9f93c9c3e40468ab692aff5f204a3398da03adfdfeff63e3d76d29->enter($__internal_3f4273203a9f93c9c3e40468ab692aff5f204a3398da03adfdfeff63e3d76d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7150cdd3eeddf4732f68a3c19ba2b9a9a6c93125d87cafc5ea7a8b3ffef8e5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7150cdd3eeddf4732f68a3c19ba2b9a9a6c93125d87cafc5ea7a8b3ffef8e5a8->enter($__internal_7150cdd3eeddf4732f68a3c19ba2b9a9a6c93125d87cafc5ea7a8b3ffef8e5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7150cdd3eeddf4732f68a3c19ba2b9a9a6c93125d87cafc5ea7a8b3ffef8e5a8->leave($__internal_7150cdd3eeddf4732f68a3c19ba2b9a9a6c93125d87cafc5ea7a8b3ffef8e5a8_prof);

        
        $__internal_3f4273203a9f93c9c3e40468ab692aff5f204a3398da03adfdfeff63e3d76d29->leave($__internal_3f4273203a9f93c9c3e40468ab692aff5f204a3398da03adfdfeff63e3d76d29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b89c7e9e53f6c61eea45e7552a81f058ae82cc40f7f459b47831b58308806ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89c7e9e53f6c61eea45e7552a81f058ae82cc40f7f459b47831b58308806ab7->enter($__internal_b89c7e9e53f6c61eea45e7552a81f058ae82cc40f7f459b47831b58308806ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_120fd237f0ff5f75c549828f38262696a9af47fc87a8eef9011ddc1b72c8b3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120fd237f0ff5f75c549828f38262696a9af47fc87a8eef9011ddc1b72c8b3fb->enter($__internal_120fd237f0ff5f75c549828f38262696a9af47fc87a8eef9011ddc1b72c8b3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_120fd237f0ff5f75c549828f38262696a9af47fc87a8eef9011ddc1b72c8b3fb->leave($__internal_120fd237f0ff5f75c549828f38262696a9af47fc87a8eef9011ddc1b72c8b3fb_prof);

        
        $__internal_b89c7e9e53f6c61eea45e7552a81f058ae82cc40f7f459b47831b58308806ab7->leave($__internal_b89c7e9e53f6c61eea45e7552a81f058ae82cc40f7f459b47831b58308806ab7_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
