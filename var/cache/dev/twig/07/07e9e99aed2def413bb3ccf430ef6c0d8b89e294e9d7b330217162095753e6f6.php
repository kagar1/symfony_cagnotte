<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cdcc2c5aebcb16f3da3b8fa293d042feab5f04236228cc486549b6afa9a78996 extends Twig_Template
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
        $__internal_36f8fb557c86df1d1829733c4c87d8c58ab5525ce5a9327e0f8216987d4d5430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f8fb557c86df1d1829733c4c87d8c58ab5525ce5a9327e0f8216987d4d5430->enter($__internal_36f8fb557c86df1d1829733c4c87d8c58ab5525ce5a9327e0f8216987d4d5430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_44a2dda1d0468a42de7315370e5f798f14cbdc3483aa0275478a5af0791cd09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a2dda1d0468a42de7315370e5f798f14cbdc3483aa0275478a5af0791cd09e->enter($__internal_44a2dda1d0468a42de7315370e5f798f14cbdc3483aa0275478a5af0791cd09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_36f8fb557c86df1d1829733c4c87d8c58ab5525ce5a9327e0f8216987d4d5430->leave($__internal_36f8fb557c86df1d1829733c4c87d8c58ab5525ce5a9327e0f8216987d4d5430_prof);

        
        $__internal_44a2dda1d0468a42de7315370e5f798f14cbdc3483aa0275478a5af0791cd09e->leave($__internal_44a2dda1d0468a42de7315370e5f798f14cbdc3483aa0275478a5af0791cd09e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
