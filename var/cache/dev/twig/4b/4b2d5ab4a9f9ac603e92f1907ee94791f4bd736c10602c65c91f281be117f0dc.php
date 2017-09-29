<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b1ae45e6c525af639d29c6ee237b9149c3c15a6d09b3bcb07fc13f114b2cf538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24a2bbd804a18cc308b09b4feb8779b1caa4f318241163e738749dcceedef660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a2bbd804a18cc308b09b4feb8779b1caa4f318241163e738749dcceedef660->enter($__internal_24a2bbd804a18cc308b09b4feb8779b1caa4f318241163e738749dcceedef660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_72c7f95fbdb2cff681d4a442bedab79a97c4a7b9264d3563bb9f85ead46dcf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c7f95fbdb2cff681d4a442bedab79a97c4a7b9264d3563bb9f85ead46dcf97->enter($__internal_72c7f95fbdb2cff681d4a442bedab79a97c4a7b9264d3563bb9f85ead46dcf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_24a2bbd804a18cc308b09b4feb8779b1caa4f318241163e738749dcceedef660->leave($__internal_24a2bbd804a18cc308b09b4feb8779b1caa4f318241163e738749dcceedef660_prof);

        
        $__internal_72c7f95fbdb2cff681d4a442bedab79a97c4a7b9264d3563bb9f85ead46dcf97->leave($__internal_72c7f95fbdb2cff681d4a442bedab79a97c4a7b9264d3563bb9f85ead46dcf97_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_470e4935155621084ba8982e861729cfa6a7ee41f68cb5bf5d55579e8e2e748d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470e4935155621084ba8982e861729cfa6a7ee41f68cb5bf5d55579e8e2e748d->enter($__internal_470e4935155621084ba8982e861729cfa6a7ee41f68cb5bf5d55579e8e2e748d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b2838ff41a56f41b0ee4a37201ebb847d292ee6536373bda5b9a2771ecaebe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2838ff41a56f41b0ee4a37201ebb847d292ee6536373bda5b9a2771ecaebe0->enter($__internal_9b2838ff41a56f41b0ee4a37201ebb847d292ee6536373bda5b9a2771ecaebe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b2838ff41a56f41b0ee4a37201ebb847d292ee6536373bda5b9a2771ecaebe0->leave($__internal_9b2838ff41a56f41b0ee4a37201ebb847d292ee6536373bda5b9a2771ecaebe0_prof);

        
        $__internal_470e4935155621084ba8982e861729cfa6a7ee41f68cb5bf5d55579e8e2e748d->leave($__internal_470e4935155621084ba8982e861729cfa6a7ee41f68cb5bf5d55579e8e2e748d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
