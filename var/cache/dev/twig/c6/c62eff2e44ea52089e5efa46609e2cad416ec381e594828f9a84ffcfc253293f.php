<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_79b52ee1bca8afd597c036390abe13a2a813e3884719713b9b534a93b0ee40db extends Twig_Template
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
        $__internal_0b9108921437b2f35cccedeabe1eb3a39006b5f4bb1b0b4646c83176c6377654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9108921437b2f35cccedeabe1eb3a39006b5f4bb1b0b4646c83176c6377654->enter($__internal_0b9108921437b2f35cccedeabe1eb3a39006b5f4bb1b0b4646c83176c6377654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_9e129814abc6eaaf84234d050f2f2e241602139fd49ecc832a0dcae073526775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e129814abc6eaaf84234d050f2f2e241602139fd49ecc832a0dcae073526775->enter($__internal_9e129814abc6eaaf84234d050f2f2e241602139fd49ecc832a0dcae073526775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0b9108921437b2f35cccedeabe1eb3a39006b5f4bb1b0b4646c83176c6377654->leave($__internal_0b9108921437b2f35cccedeabe1eb3a39006b5f4bb1b0b4646c83176c6377654_prof);

        
        $__internal_9e129814abc6eaaf84234d050f2f2e241602139fd49ecc832a0dcae073526775->leave($__internal_9e129814abc6eaaf84234d050f2f2e241602139fd49ecc832a0dcae073526775_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
