<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1a9dab48292fbc982af7d3daa88e18b61f4ca8ea7e7de3f9a00de3b86f0ef11b extends Twig_Template
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
        $__internal_988d0fcddf3455bfcd88224c81d8752700b06106c654fe268b6eddc693e905c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988d0fcddf3455bfcd88224c81d8752700b06106c654fe268b6eddc693e905c3->enter($__internal_988d0fcddf3455bfcd88224c81d8752700b06106c654fe268b6eddc693e905c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_250f2a5a3b4417d7911511fbc76b4e3c9aa33672515b5ebaccb8edf947b04a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250f2a5a3b4417d7911511fbc76b4e3c9aa33672515b5ebaccb8edf947b04a40->enter($__internal_250f2a5a3b4417d7911511fbc76b4e3c9aa33672515b5ebaccb8edf947b04a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_988d0fcddf3455bfcd88224c81d8752700b06106c654fe268b6eddc693e905c3->leave($__internal_988d0fcddf3455bfcd88224c81d8752700b06106c654fe268b6eddc693e905c3_prof);

        
        $__internal_250f2a5a3b4417d7911511fbc76b4e3c9aa33672515b5ebaccb8edf947b04a40->leave($__internal_250f2a5a3b4417d7911511fbc76b4e3c9aa33672515b5ebaccb8edf947b04a40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
