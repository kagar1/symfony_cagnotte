<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e180f9812d9abd59e8d051fff5bf906fb5a7a2e7a1089a63df52725eeff688ea extends Twig_Template
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
        $__internal_327b884af90112cadc59a523d48e19682e8da43de0601a1a2e766025c3326830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327b884af90112cadc59a523d48e19682e8da43de0601a1a2e766025c3326830->enter($__internal_327b884af90112cadc59a523d48e19682e8da43de0601a1a2e766025c3326830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8b5af3df822f9b52c35a5c74b3d7857e57bf976311ee94d6951a87b835142040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5af3df822f9b52c35a5c74b3d7857e57bf976311ee94d6951a87b835142040->enter($__internal_8b5af3df822f9b52c35a5c74b3d7857e57bf976311ee94d6951a87b835142040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_327b884af90112cadc59a523d48e19682e8da43de0601a1a2e766025c3326830->leave($__internal_327b884af90112cadc59a523d48e19682e8da43de0601a1a2e766025c3326830_prof);

        
        $__internal_8b5af3df822f9b52c35a5c74b3d7857e57bf976311ee94d6951a87b835142040->leave($__internal_8b5af3df822f9b52c35a5c74b3d7857e57bf976311ee94d6951a87b835142040_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
