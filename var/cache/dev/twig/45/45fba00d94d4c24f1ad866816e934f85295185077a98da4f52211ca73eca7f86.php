<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8b4e6049a9f229710720e341d7715d26ea8c6aefe626666eb3d2e1e92e8053f7 extends Twig_Template
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
        $__internal_9ef8eb5cbdcece79a44e68666533180e3ba540e9901ba970f618fb310dfdf67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef8eb5cbdcece79a44e68666533180e3ba540e9901ba970f618fb310dfdf67c->enter($__internal_9ef8eb5cbdcece79a44e68666533180e3ba540e9901ba970f618fb310dfdf67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_35257ee10372c21fffc769932e500b809f53112bab259828c95666d7ccb675f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35257ee10372c21fffc769932e500b809f53112bab259828c95666d7ccb675f7->enter($__internal_35257ee10372c21fffc769932e500b809f53112bab259828c95666d7ccb675f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9ef8eb5cbdcece79a44e68666533180e3ba540e9901ba970f618fb310dfdf67c->leave($__internal_9ef8eb5cbdcece79a44e68666533180e3ba540e9901ba970f618fb310dfdf67c_prof);

        
        $__internal_35257ee10372c21fffc769932e500b809f53112bab259828c95666d7ccb675f7->leave($__internal_35257ee10372c21fffc769932e500b809f53112bab259828c95666d7ccb675f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
