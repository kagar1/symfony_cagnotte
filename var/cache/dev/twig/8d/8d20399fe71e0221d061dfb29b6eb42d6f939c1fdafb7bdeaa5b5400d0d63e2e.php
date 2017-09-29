<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0fbc5a291a4cb1e3ee8667d1f75271be9a56d5b79fb7309dae16a0098e8aebba extends Twig_Template
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
        $__internal_52ac8c1661aa3f2e4ddf233ba7ce48a23755bc1fac5e915d172318ce767e7e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ac8c1661aa3f2e4ddf233ba7ce48a23755bc1fac5e915d172318ce767e7e60->enter($__internal_52ac8c1661aa3f2e4ddf233ba7ce48a23755bc1fac5e915d172318ce767e7e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_a891d858cabe44ef827611673acc9668126a820801a698f792142a0aac7cb13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a891d858cabe44ef827611673acc9668126a820801a698f792142a0aac7cb13c->enter($__internal_a891d858cabe44ef827611673acc9668126a820801a698f792142a0aac7cb13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_52ac8c1661aa3f2e4ddf233ba7ce48a23755bc1fac5e915d172318ce767e7e60->leave($__internal_52ac8c1661aa3f2e4ddf233ba7ce48a23755bc1fac5e915d172318ce767e7e60_prof);

        
        $__internal_a891d858cabe44ef827611673acc9668126a820801a698f792142a0aac7cb13c->leave($__internal_a891d858cabe44ef827611673acc9668126a820801a698f792142a0aac7cb13c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
