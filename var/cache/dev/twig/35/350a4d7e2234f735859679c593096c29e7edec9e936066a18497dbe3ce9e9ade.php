<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b4cee5bb4e4c182d0649c45eaccf4ae02a4f829f1ceb32d2ed39bd488ec00f0a extends Twig_Template
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
        $__internal_5e643cc8b6dd8f751a809e07349a85045cb4b4ffacf656e6513a1c52997e8d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e643cc8b6dd8f751a809e07349a85045cb4b4ffacf656e6513a1c52997e8d15->enter($__internal_5e643cc8b6dd8f751a809e07349a85045cb4b4ffacf656e6513a1c52997e8d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1d39137b06657ddf4309d1ccdd30a7b589fde7d7ee70ae11c8bb9c2bea73a39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d39137b06657ddf4309d1ccdd30a7b589fde7d7ee70ae11c8bb9c2bea73a39c->enter($__internal_1d39137b06657ddf4309d1ccdd30a7b589fde7d7ee70ae11c8bb9c2bea73a39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5e643cc8b6dd8f751a809e07349a85045cb4b4ffacf656e6513a1c52997e8d15->leave($__internal_5e643cc8b6dd8f751a809e07349a85045cb4b4ffacf656e6513a1c52997e8d15_prof);

        
        $__internal_1d39137b06657ddf4309d1ccdd30a7b589fde7d7ee70ae11c8bb9c2bea73a39c->leave($__internal_1d39137b06657ddf4309d1ccdd30a7b589fde7d7ee70ae11c8bb9c2bea73a39c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
