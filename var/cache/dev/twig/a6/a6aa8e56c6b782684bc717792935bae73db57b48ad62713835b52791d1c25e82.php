<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3be36c52daff360d86d735f203002d64e284e97f1fc6846c5b0383fe4ecbe6ee extends Twig_Template
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
        $__internal_5dc0b35b4c7677c8d73b088cd4c54487ad6a2284177170e5d6cee04b07cfbe32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc0b35b4c7677c8d73b088cd4c54487ad6a2284177170e5d6cee04b07cfbe32->enter($__internal_5dc0b35b4c7677c8d73b088cd4c54487ad6a2284177170e5d6cee04b07cfbe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_30f7aa568dd2e3325913ce84b8508f15548827bba6bf2ed1a746070607e3b05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f7aa568dd2e3325913ce84b8508f15548827bba6bf2ed1a746070607e3b05f->enter($__internal_30f7aa568dd2e3325913ce84b8508f15548827bba6bf2ed1a746070607e3b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_5dc0b35b4c7677c8d73b088cd4c54487ad6a2284177170e5d6cee04b07cfbe32->leave($__internal_5dc0b35b4c7677c8d73b088cd4c54487ad6a2284177170e5d6cee04b07cfbe32_prof);

        
        $__internal_30f7aa568dd2e3325913ce84b8508f15548827bba6bf2ed1a746070607e3b05f->leave($__internal_30f7aa568dd2e3325913ce84b8508f15548827bba6bf2ed1a746070607e3b05f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
