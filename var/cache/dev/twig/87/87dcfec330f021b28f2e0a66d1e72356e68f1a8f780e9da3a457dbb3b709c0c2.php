<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_4f4a32f7b310cc5afc82594fef7b2b0764f9d4f28a83c54922512696ce008e12 extends Twig_Template
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
        $__internal_0055895ea4f74bc72076d2d13b6938d019a5641281f341a76c186cd773635ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0055895ea4f74bc72076d2d13b6938d019a5641281f341a76c186cd773635ad6->enter($__internal_0055895ea4f74bc72076d2d13b6938d019a5641281f341a76c186cd773635ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a711765f0a6fedee41a57c7c931584983d2e4a3ec4fb751af806196e17851690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a711765f0a6fedee41a57c7c931584983d2e4a3ec4fb751af806196e17851690->enter($__internal_a711765f0a6fedee41a57c7c931584983d2e4a3ec4fb751af806196e17851690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0055895ea4f74bc72076d2d13b6938d019a5641281f341a76c186cd773635ad6->leave($__internal_0055895ea4f74bc72076d2d13b6938d019a5641281f341a76c186cd773635ad6_prof);

        
        $__internal_a711765f0a6fedee41a57c7c931584983d2e4a3ec4fb751af806196e17851690->leave($__internal_a711765f0a6fedee41a57c7c931584983d2e4a3ec4fb751af806196e17851690_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
