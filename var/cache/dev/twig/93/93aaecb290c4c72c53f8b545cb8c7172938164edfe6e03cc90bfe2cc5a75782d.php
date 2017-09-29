<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_062d2765a011620b6d73c82eabfd9e25721e0be85d8317f339764a5606a61e85 extends Twig_Template
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
        $__internal_6b273cbe3d78eb1ebe0cbae90a2dd794d089b1e03cedcf0a093fb5989caf5947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b273cbe3d78eb1ebe0cbae90a2dd794d089b1e03cedcf0a093fb5989caf5947->enter($__internal_6b273cbe3d78eb1ebe0cbae90a2dd794d089b1e03cedcf0a093fb5989caf5947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3cb7b3e195877f11de5eea2d9c0672c4f1040c63601f3bf1bdd2b2f2848304fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb7b3e195877f11de5eea2d9c0672c4f1040c63601f3bf1bdd2b2f2848304fa->enter($__internal_3cb7b3e195877f11de5eea2d9c0672c4f1040c63601f3bf1bdd2b2f2848304fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6b273cbe3d78eb1ebe0cbae90a2dd794d089b1e03cedcf0a093fb5989caf5947->leave($__internal_6b273cbe3d78eb1ebe0cbae90a2dd794d089b1e03cedcf0a093fb5989caf5947_prof);

        
        $__internal_3cb7b3e195877f11de5eea2d9c0672c4f1040c63601f3bf1bdd2b2f2848304fa->leave($__internal_3cb7b3e195877f11de5eea2d9c0672c4f1040c63601f3bf1bdd2b2f2848304fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
