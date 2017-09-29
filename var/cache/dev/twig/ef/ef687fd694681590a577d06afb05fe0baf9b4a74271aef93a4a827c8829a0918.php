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
        $__internal_327390ae6230f7381ecfc4c637e6e7efb2bb039ae5bc0aa1d26b679389b539e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327390ae6230f7381ecfc4c637e6e7efb2bb039ae5bc0aa1d26b679389b539e0->enter($__internal_327390ae6230f7381ecfc4c637e6e7efb2bb039ae5bc0aa1d26b679389b539e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0dce4f85033f63a4ced79644ef870e38aeb1a326d6e91a4ea582a36fe04028dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dce4f85033f63a4ced79644ef870e38aeb1a326d6e91a4ea582a36fe04028dc->enter($__internal_0dce4f85033f63a4ced79644ef870e38aeb1a326d6e91a4ea582a36fe04028dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327390ae6230f7381ecfc4c637e6e7efb2bb039ae5bc0aa1d26b679389b539e0->leave($__internal_327390ae6230f7381ecfc4c637e6e7efb2bb039ae5bc0aa1d26b679389b539e0_prof);

        
        $__internal_0dce4f85033f63a4ced79644ef870e38aeb1a326d6e91a4ea582a36fe04028dc->leave($__internal_0dce4f85033f63a4ced79644ef870e38aeb1a326d6e91a4ea582a36fe04028dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71106e3cfb9ad6738c086af14d9f921e77182b9c04b030ced7df8d2f548b535c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71106e3cfb9ad6738c086af14d9f921e77182b9c04b030ced7df8d2f548b535c->enter($__internal_71106e3cfb9ad6738c086af14d9f921e77182b9c04b030ced7df8d2f548b535c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_444f99bbf318e61c9bf2cdb8031f710c7c524cc0efa4f62708a6853a4ef64125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444f99bbf318e61c9bf2cdb8031f710c7c524cc0efa4f62708a6853a4ef64125->enter($__internal_444f99bbf318e61c9bf2cdb8031f710c7c524cc0efa4f62708a6853a4ef64125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_444f99bbf318e61c9bf2cdb8031f710c7c524cc0efa4f62708a6853a4ef64125->leave($__internal_444f99bbf318e61c9bf2cdb8031f710c7c524cc0efa4f62708a6853a4ef64125_prof);

        
        $__internal_71106e3cfb9ad6738c086af14d9f921e77182b9c04b030ced7df8d2f548b535c->leave($__internal_71106e3cfb9ad6738c086af14d9f921e77182b9c04b030ced7df8d2f548b535c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cbe924eac0c4b0f1f62ce43a02f6c88f75a5d5d8e91bd9d8934f7abf123fa68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbe924eac0c4b0f1f62ce43a02f6c88f75a5d5d8e91bd9d8934f7abf123fa68->enter($__internal_8cbe924eac0c4b0f1f62ce43a02f6c88f75a5d5d8e91bd9d8934f7abf123fa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d1f1d9718a7307cb59e29ae86031e027483dbe93760d3d82a310d6f0262872f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1f1d9718a7307cb59e29ae86031e027483dbe93760d3d82a310d6f0262872f->enter($__internal_0d1f1d9718a7307cb59e29ae86031e027483dbe93760d3d82a310d6f0262872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d1f1d9718a7307cb59e29ae86031e027483dbe93760d3d82a310d6f0262872f->leave($__internal_0d1f1d9718a7307cb59e29ae86031e027483dbe93760d3d82a310d6f0262872f_prof);

        
        $__internal_8cbe924eac0c4b0f1f62ce43a02f6c88f75a5d5d8e91bd9d8934f7abf123fa68->leave($__internal_8cbe924eac0c4b0f1f62ce43a02f6c88f75a5d5d8e91bd9d8934f7abf123fa68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf99da3d5af20f75f891f0a6fc597ce5f7891169b32cf30f60a870f37ccb96c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf99da3d5af20f75f891f0a6fc597ce5f7891169b32cf30f60a870f37ccb96c0->enter($__internal_bf99da3d5af20f75f891f0a6fc597ce5f7891169b32cf30f60a870f37ccb96c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc3808b7577477cc6ca9bbfb65e6569b1645ce88fed131a70ba76381183388f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3808b7577477cc6ca9bbfb65e6569b1645ce88fed131a70ba76381183388f4->enter($__internal_cc3808b7577477cc6ca9bbfb65e6569b1645ce88fed131a70ba76381183388f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc3808b7577477cc6ca9bbfb65e6569b1645ce88fed131a70ba76381183388f4->leave($__internal_cc3808b7577477cc6ca9bbfb65e6569b1645ce88fed131a70ba76381183388f4_prof);

        
        $__internal_bf99da3d5af20f75f891f0a6fc597ce5f7891169b32cf30f60a870f37ccb96c0->leave($__internal_bf99da3d5af20f75f891f0a6fc597ce5f7891169b32cf30f60a870f37ccb96c0_prof);

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
