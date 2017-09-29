<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3e3cfe76230e5d301a3c407a058a2c1f52a4cdb574d0ea80ef653cc4b8dfb14b extends Twig_Template
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
        $__internal_fe0166450e573f6d41a6d9fa468e6646ff2f2bd094afcdb0ed84e4b87ce358c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0166450e573f6d41a6d9fa468e6646ff2f2bd094afcdb0ed84e4b87ce358c7->enter($__internal_fe0166450e573f6d41a6d9fa468e6646ff2f2bd094afcdb0ed84e4b87ce358c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9b2645f6051fcf831859932576e925ac51cc91534619aeb90308cb0482a3a9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2645f6051fcf831859932576e925ac51cc91534619aeb90308cb0482a3a9ac->enter($__internal_9b2645f6051fcf831859932576e925ac51cc91534619aeb90308cb0482a3a9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fe0166450e573f6d41a6d9fa468e6646ff2f2bd094afcdb0ed84e4b87ce358c7->leave($__internal_fe0166450e573f6d41a6d9fa468e6646ff2f2bd094afcdb0ed84e4b87ce358c7_prof);

        
        $__internal_9b2645f6051fcf831859932576e925ac51cc91534619aeb90308cb0482a3a9ac->leave($__internal_9b2645f6051fcf831859932576e925ac51cc91534619aeb90308cb0482a3a9ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
