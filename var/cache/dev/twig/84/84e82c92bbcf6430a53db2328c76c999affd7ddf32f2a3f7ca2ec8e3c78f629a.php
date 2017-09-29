<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_50b2f5cb3123d7a774907482aaf5174e0ae5616512281d42e34bb951c80647b8 extends Twig_Template
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
        $__internal_6371f3da2ea65b0d3ff424f373e856d7a35bfc5b96f72e8735db60fd9fa19191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6371f3da2ea65b0d3ff424f373e856d7a35bfc5b96f72e8735db60fd9fa19191->enter($__internal_6371f3da2ea65b0d3ff424f373e856d7a35bfc5b96f72e8735db60fd9fa19191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_107db472465399a869aea7cd42e5d0dcdf633c2b0e0820802bc2804c17bf093b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107db472465399a869aea7cd42e5d0dcdf633c2b0e0820802bc2804c17bf093b->enter($__internal_107db472465399a869aea7cd42e5d0dcdf633c2b0e0820802bc2804c17bf093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6371f3da2ea65b0d3ff424f373e856d7a35bfc5b96f72e8735db60fd9fa19191->leave($__internal_6371f3da2ea65b0d3ff424f373e856d7a35bfc5b96f72e8735db60fd9fa19191_prof);

        
        $__internal_107db472465399a869aea7cd42e5d0dcdf633c2b0e0820802bc2804c17bf093b->leave($__internal_107db472465399a869aea7cd42e5d0dcdf633c2b0e0820802bc2804c17bf093b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
