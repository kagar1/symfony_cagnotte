<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2ec7402370cdd2d7938db9711335234f07427b47d164fade4bde4a0c2d52e42a extends Twig_Template
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
        $__internal_fb2ad2f68735927c2f69ce94b11f4325af25d4511e1ad9acf03da2e62932a210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2ad2f68735927c2f69ce94b11f4325af25d4511e1ad9acf03da2e62932a210->enter($__internal_fb2ad2f68735927c2f69ce94b11f4325af25d4511e1ad9acf03da2e62932a210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_4b03c45bdca99a3e3ca7707927c6858fa9dc9085877dca93aef57065cac71d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b03c45bdca99a3e3ca7707927c6858fa9dc9085877dca93aef57065cac71d8c->enter($__internal_4b03c45bdca99a3e3ca7707927c6858fa9dc9085877dca93aef57065cac71d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fb2ad2f68735927c2f69ce94b11f4325af25d4511e1ad9acf03da2e62932a210->leave($__internal_fb2ad2f68735927c2f69ce94b11f4325af25d4511e1ad9acf03da2e62932a210_prof);

        
        $__internal_4b03c45bdca99a3e3ca7707927c6858fa9dc9085877dca93aef57065cac71d8c->leave($__internal_4b03c45bdca99a3e3ca7707927c6858fa9dc9085877dca93aef57065cac71d8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
