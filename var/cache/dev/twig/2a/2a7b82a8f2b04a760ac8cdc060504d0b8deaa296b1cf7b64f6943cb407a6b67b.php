<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a39c4d267a93c23c71bed96768da44f870a2e199b55ac87fc7e097d39ebb7465 extends Twig_Template
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
        $__internal_b3cfd3f75022f0c547961c0ef20957663502f241ecc11628bbb37e9b352db81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cfd3f75022f0c547961c0ef20957663502f241ecc11628bbb37e9b352db81a->enter($__internal_b3cfd3f75022f0c547961c0ef20957663502f241ecc11628bbb37e9b352db81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4b8bd48faba8fd9603ed674cfbe305ed75bada94b0adf576f621ac5d5ea9af6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8bd48faba8fd9603ed674cfbe305ed75bada94b0adf576f621ac5d5ea9af6a->enter($__internal_4b8bd48faba8fd9603ed674cfbe305ed75bada94b0adf576f621ac5d5ea9af6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b3cfd3f75022f0c547961c0ef20957663502f241ecc11628bbb37e9b352db81a->leave($__internal_b3cfd3f75022f0c547961c0ef20957663502f241ecc11628bbb37e9b352db81a_prof);

        
        $__internal_4b8bd48faba8fd9603ed674cfbe305ed75bada94b0adf576f621ac5d5ea9af6a->leave($__internal_4b8bd48faba8fd9603ed674cfbe305ed75bada94b0adf576f621ac5d5ea9af6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
