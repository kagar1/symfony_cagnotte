<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c321b27f600d2c707885c1fb6c3429dd09131cc27cf20f889d1ce73a1291c74f extends Twig_Template
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
        $__internal_80675dee4bf4cdef8dfc9db3bb12bcc4bb96b2bfb1d724e5b48c3274e33e50fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80675dee4bf4cdef8dfc9db3bb12bcc4bb96b2bfb1d724e5b48c3274e33e50fb->enter($__internal_80675dee4bf4cdef8dfc9db3bb12bcc4bb96b2bfb1d724e5b48c3274e33e50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e6972abfe455a32105ade6259bb80fe97f4b3b41db0b578ef0120fd014d8c182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6972abfe455a32105ade6259bb80fe97f4b3b41db0b578ef0120fd014d8c182->enter($__internal_e6972abfe455a32105ade6259bb80fe97f4b3b41db0b578ef0120fd014d8c182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_80675dee4bf4cdef8dfc9db3bb12bcc4bb96b2bfb1d724e5b48c3274e33e50fb->leave($__internal_80675dee4bf4cdef8dfc9db3bb12bcc4bb96b2bfb1d724e5b48c3274e33e50fb_prof);

        
        $__internal_e6972abfe455a32105ade6259bb80fe97f4b3b41db0b578ef0120fd014d8c182->leave($__internal_e6972abfe455a32105ade6259bb80fe97f4b3b41db0b578ef0120fd014d8c182_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
