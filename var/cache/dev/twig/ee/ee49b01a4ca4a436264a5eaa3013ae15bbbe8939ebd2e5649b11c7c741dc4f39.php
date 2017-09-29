<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9618fb385f27548aaf717ce25d8363a3037fd38d77cd4a84866ea38449ca69c6 extends Twig_Template
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
        $__internal_b2a8343ef9dbd8fd7cdcf99b43fd6006712d3f988a1ac64f973b07687166aae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a8343ef9dbd8fd7cdcf99b43fd6006712d3f988a1ac64f973b07687166aae7->enter($__internal_b2a8343ef9dbd8fd7cdcf99b43fd6006712d3f988a1ac64f973b07687166aae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_df0ab3f5bee0be53032d6f620742a6fb44dfb5406bdbc9ab397bfe9e1127602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0ab3f5bee0be53032d6f620742a6fb44dfb5406bdbc9ab397bfe9e1127602a->enter($__internal_df0ab3f5bee0be53032d6f620742a6fb44dfb5406bdbc9ab397bfe9e1127602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b2a8343ef9dbd8fd7cdcf99b43fd6006712d3f988a1ac64f973b07687166aae7->leave($__internal_b2a8343ef9dbd8fd7cdcf99b43fd6006712d3f988a1ac64f973b07687166aae7_prof);

        
        $__internal_df0ab3f5bee0be53032d6f620742a6fb44dfb5406bdbc9ab397bfe9e1127602a->leave($__internal_df0ab3f5bee0be53032d6f620742a6fb44dfb5406bdbc9ab397bfe9e1127602a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
