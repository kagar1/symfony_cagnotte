<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5cea255f8ac967820ec3d0e6610a9ec3448d674780fda4d97fa5bf78ff08ef74 extends Twig_Template
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
        $__internal_caae432cb83d05b6e15687067e4518400d0ab2b07ffeb33b5f209d03ed57cfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caae432cb83d05b6e15687067e4518400d0ab2b07ffeb33b5f209d03ed57cfd9->enter($__internal_caae432cb83d05b6e15687067e4518400d0ab2b07ffeb33b5f209d03ed57cfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_abd97e5392224c455bbb2964ea3cd7e71d609589199c02afc29f410725e5ca99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd97e5392224c455bbb2964ea3cd7e71d609589199c02afc29f410725e5ca99->enter($__internal_abd97e5392224c455bbb2964ea3cd7e71d609589199c02afc29f410725e5ca99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_caae432cb83d05b6e15687067e4518400d0ab2b07ffeb33b5f209d03ed57cfd9->leave($__internal_caae432cb83d05b6e15687067e4518400d0ab2b07ffeb33b5f209d03ed57cfd9_prof);

        
        $__internal_abd97e5392224c455bbb2964ea3cd7e71d609589199c02afc29f410725e5ca99->leave($__internal_abd97e5392224c455bbb2964ea3cd7e71d609589199c02afc29f410725e5ca99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
