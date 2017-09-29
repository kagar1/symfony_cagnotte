<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6b5d21bafd407f8a334eb150075375b336f8d3c379ee177afb763c047f8c7022 extends Twig_Template
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
        $__internal_166675487c5344dee4f9d7ce5f08545ebc6dc8223eaf6cda99606736d598df64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166675487c5344dee4f9d7ce5f08545ebc6dc8223eaf6cda99606736d598df64->enter($__internal_166675487c5344dee4f9d7ce5f08545ebc6dc8223eaf6cda99606736d598df64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_32643512de9f27d9dac48828d814548056648a468752bb5c71a867cf2aa948c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32643512de9f27d9dac48828d814548056648a468752bb5c71a867cf2aa948c1->enter($__internal_32643512de9f27d9dac48828d814548056648a468752bb5c71a867cf2aa948c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_166675487c5344dee4f9d7ce5f08545ebc6dc8223eaf6cda99606736d598df64->leave($__internal_166675487c5344dee4f9d7ce5f08545ebc6dc8223eaf6cda99606736d598df64_prof);

        
        $__internal_32643512de9f27d9dac48828d814548056648a468752bb5c71a867cf2aa948c1->leave($__internal_32643512de9f27d9dac48828d814548056648a468752bb5c71a867cf2aa948c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
