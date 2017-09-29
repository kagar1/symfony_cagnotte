<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4bd0b9aa65688a53c23b37aed6b9e4f4ceb88b2ac35bc14e6a9447cfd4257854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3daa138354b5cc31871393f47b39ab1a29a9aea8263f525ea2b62e766191806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3daa138354b5cc31871393f47b39ab1a29a9aea8263f525ea2b62e766191806->enter($__internal_d3daa138354b5cc31871393f47b39ab1a29a9aea8263f525ea2b62e766191806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_4ab3c2e0941918775d9b43bf35dbeeac4a9aed44383a9f2d3961213338fa1592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab3c2e0941918775d9b43bf35dbeeac4a9aed44383a9f2d3961213338fa1592->enter($__internal_4ab3c2e0941918775d9b43bf35dbeeac4a9aed44383a9f2d3961213338fa1592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d3daa138354b5cc31871393f47b39ab1a29a9aea8263f525ea2b62e766191806->leave($__internal_d3daa138354b5cc31871393f47b39ab1a29a9aea8263f525ea2b62e766191806_prof);

        
        $__internal_4ab3c2e0941918775d9b43bf35dbeeac4a9aed44383a9f2d3961213338fa1592->leave($__internal_4ab3c2e0941918775d9b43bf35dbeeac4a9aed44383a9f2d3961213338fa1592_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
