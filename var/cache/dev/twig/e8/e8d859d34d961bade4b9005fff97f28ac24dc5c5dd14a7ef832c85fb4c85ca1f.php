<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_80fb3a719a8df43bc36ec504dc75df625d94e38a75044c2f8ac923e5e7692b72 extends Twig_Template
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
        $__internal_481892ddb47b980702ac226424513eda7bccfd88e559f94e56f1c43827e40c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481892ddb47b980702ac226424513eda7bccfd88e559f94e56f1c43827e40c3f->enter($__internal_481892ddb47b980702ac226424513eda7bccfd88e559f94e56f1c43827e40c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_4422594d96d799be7a692e2b4fd1f01b4c89155cf9bb3380df2216bfbc14d474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4422594d96d799be7a692e2b4fd1f01b4c89155cf9bb3380df2216bfbc14d474->enter($__internal_4422594d96d799be7a692e2b4fd1f01b4c89155cf9bb3380df2216bfbc14d474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_481892ddb47b980702ac226424513eda7bccfd88e559f94e56f1c43827e40c3f->leave($__internal_481892ddb47b980702ac226424513eda7bccfd88e559f94e56f1c43827e40c3f_prof);

        
        $__internal_4422594d96d799be7a692e2b4fd1f01b4c89155cf9bb3380df2216bfbc14d474->leave($__internal_4422594d96d799be7a692e2b4fd1f01b4c89155cf9bb3380df2216bfbc14d474_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
