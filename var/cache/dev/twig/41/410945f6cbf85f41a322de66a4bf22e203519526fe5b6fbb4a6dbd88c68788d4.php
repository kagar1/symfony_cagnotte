<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b37797268ca5a8e41b087c3038ed78345c68e3a570cd732c25677d67549e6d36 extends Twig_Template
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
        $__internal_186eee78f8f6e82f5db076831096e36a20d871c5c0a481637ff89ea1dcb53e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186eee78f8f6e82f5db076831096e36a20d871c5c0a481637ff89ea1dcb53e77->enter($__internal_186eee78f8f6e82f5db076831096e36a20d871c5c0a481637ff89ea1dcb53e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0a35badae9f84b5f2cbd0b324f10d75c6a89f3db6c7d6a6da256dcaf8e57e656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a35badae9f84b5f2cbd0b324f10d75c6a89f3db6c7d6a6da256dcaf8e57e656->enter($__internal_0a35badae9f84b5f2cbd0b324f10d75c6a89f3db6c7d6a6da256dcaf8e57e656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_186eee78f8f6e82f5db076831096e36a20d871c5c0a481637ff89ea1dcb53e77->leave($__internal_186eee78f8f6e82f5db076831096e36a20d871c5c0a481637ff89ea1dcb53e77_prof);

        
        $__internal_0a35badae9f84b5f2cbd0b324f10d75c6a89f3db6c7d6a6da256dcaf8e57e656->leave($__internal_0a35badae9f84b5f2cbd0b324f10d75c6a89f3db6c7d6a6da256dcaf8e57e656_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
