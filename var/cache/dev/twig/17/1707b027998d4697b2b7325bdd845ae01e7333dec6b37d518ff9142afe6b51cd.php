<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_aeb1ada288ab7b6c6ca369f21a420ba5f2a3d71ff3fac68246d296bd208e772b extends Twig_Template
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
        $__internal_c0c2b8ff72935eb43e24a6df8f51a1a25eb5b67b6de012165f92a0005b5c544d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c2b8ff72935eb43e24a6df8f51a1a25eb5b67b6de012165f92a0005b5c544d->enter($__internal_c0c2b8ff72935eb43e24a6df8f51a1a25eb5b67b6de012165f92a0005b5c544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2f3cf8f7c78f4e0676bc8b3bf861d89e21d1c8e5de082d29fb3db8339b94631f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3cf8f7c78f4e0676bc8b3bf861d89e21d1c8e5de082d29fb3db8339b94631f->enter($__internal_2f3cf8f7c78f4e0676bc8b3bf861d89e21d1c8e5de082d29fb3db8339b94631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c0c2b8ff72935eb43e24a6df8f51a1a25eb5b67b6de012165f92a0005b5c544d->leave($__internal_c0c2b8ff72935eb43e24a6df8f51a1a25eb5b67b6de012165f92a0005b5c544d_prof);

        
        $__internal_2f3cf8f7c78f4e0676bc8b3bf861d89e21d1c8e5de082d29fb3db8339b94631f->leave($__internal_2f3cf8f7c78f4e0676bc8b3bf861d89e21d1c8e5de082d29fb3db8339b94631f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
