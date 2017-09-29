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
        $__internal_095e6460f0bfc50bf772d196c0e7e8e40a453554c00558ce339a1de89186e1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095e6460f0bfc50bf772d196c0e7e8e40a453554c00558ce339a1de89186e1c2->enter($__internal_095e6460f0bfc50bf772d196c0e7e8e40a453554c00558ce339a1de89186e1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7ad6da18024ef9eae76c9ce8f62dacbc76d48ea9dfd4f17e0f0cff2acdcefa22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad6da18024ef9eae76c9ce8f62dacbc76d48ea9dfd4f17e0f0cff2acdcefa22->enter($__internal_7ad6da18024ef9eae76c9ce8f62dacbc76d48ea9dfd4f17e0f0cff2acdcefa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_095e6460f0bfc50bf772d196c0e7e8e40a453554c00558ce339a1de89186e1c2->leave($__internal_095e6460f0bfc50bf772d196c0e7e8e40a453554c00558ce339a1de89186e1c2_prof);

        
        $__internal_7ad6da18024ef9eae76c9ce8f62dacbc76d48ea9dfd4f17e0f0cff2acdcefa22->leave($__internal_7ad6da18024ef9eae76c9ce8f62dacbc76d48ea9dfd4f17e0f0cff2acdcefa22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97cbd407f59d50c943d4d25d2da5cb71eac35200c2a505b86c45e66649f4f816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cbd407f59d50c943d4d25d2da5cb71eac35200c2a505b86c45e66649f4f816->enter($__internal_97cbd407f59d50c943d4d25d2da5cb71eac35200c2a505b86c45e66649f4f816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_556385d1b4d44e758cf57cee161d7c112fb7daef7d6cc604e04b34aab27961b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556385d1b4d44e758cf57cee161d7c112fb7daef7d6cc604e04b34aab27961b0->enter($__internal_556385d1b4d44e758cf57cee161d7c112fb7daef7d6cc604e04b34aab27961b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_556385d1b4d44e758cf57cee161d7c112fb7daef7d6cc604e04b34aab27961b0->leave($__internal_556385d1b4d44e758cf57cee161d7c112fb7daef7d6cc604e04b34aab27961b0_prof);

        
        $__internal_97cbd407f59d50c943d4d25d2da5cb71eac35200c2a505b86c45e66649f4f816->leave($__internal_97cbd407f59d50c943d4d25d2da5cb71eac35200c2a505b86c45e66649f4f816_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78e4aea9427b4b9c79eaa97320a43b87a25e27653c900df30c3526f98d316da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e4aea9427b4b9c79eaa97320a43b87a25e27653c900df30c3526f98d316da3->enter($__internal_78e4aea9427b4b9c79eaa97320a43b87a25e27653c900df30c3526f98d316da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_755caee69194dda3ffcd3ac9288d6c797ea07bcd3b3b8b2fb340aa323ca8b919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755caee69194dda3ffcd3ac9288d6c797ea07bcd3b3b8b2fb340aa323ca8b919->enter($__internal_755caee69194dda3ffcd3ac9288d6c797ea07bcd3b3b8b2fb340aa323ca8b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_755caee69194dda3ffcd3ac9288d6c797ea07bcd3b3b8b2fb340aa323ca8b919->leave($__internal_755caee69194dda3ffcd3ac9288d6c797ea07bcd3b3b8b2fb340aa323ca8b919_prof);

        
        $__internal_78e4aea9427b4b9c79eaa97320a43b87a25e27653c900df30c3526f98d316da3->leave($__internal_78e4aea9427b4b9c79eaa97320a43b87a25e27653c900df30c3526f98d316da3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b591f4b0d2902288c4fc0a03d3bf436636fe0902e76969ef7d868d202f09d3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b591f4b0d2902288c4fc0a03d3bf436636fe0902e76969ef7d868d202f09d3a6->enter($__internal_b591f4b0d2902288c4fc0a03d3bf436636fe0902e76969ef7d868d202f09d3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc2015ba275ebcee8fb55be741cd72d2feb7bd29ba017b7f6072200990699d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2015ba275ebcee8fb55be741cd72d2feb7bd29ba017b7f6072200990699d98->enter($__internal_dc2015ba275ebcee8fb55be741cd72d2feb7bd29ba017b7f6072200990699d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc2015ba275ebcee8fb55be741cd72d2feb7bd29ba017b7f6072200990699d98->leave($__internal_dc2015ba275ebcee8fb55be741cd72d2feb7bd29ba017b7f6072200990699d98_prof);

        
        $__internal_b591f4b0d2902288c4fc0a03d3bf436636fe0902e76969ef7d868d202f09d3a6->leave($__internal_b591f4b0d2902288c4fc0a03d3bf436636fe0902e76969ef7d868d202f09d3a6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
