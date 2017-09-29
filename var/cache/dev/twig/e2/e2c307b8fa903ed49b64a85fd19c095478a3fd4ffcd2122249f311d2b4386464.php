<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4bb7a418deb75e4d57cbdc911417b03a3a155027b92ffac152ba20e558ae2b8f extends Twig_Template
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
        $__internal_a0957e87bf24ddd4bbee57079155a6eeaf45678d277cc89ebef7aaa263efb5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0957e87bf24ddd4bbee57079155a6eeaf45678d277cc89ebef7aaa263efb5bd->enter($__internal_a0957e87bf24ddd4bbee57079155a6eeaf45678d277cc89ebef7aaa263efb5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9fb28b5e294bbbed33ff71c07f301cf99023f2cdb63d2d5300438eda702b227f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb28b5e294bbbed33ff71c07f301cf99023f2cdb63d2d5300438eda702b227f->enter($__internal_9fb28b5e294bbbed33ff71c07f301cf99023f2cdb63d2d5300438eda702b227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a0957e87bf24ddd4bbee57079155a6eeaf45678d277cc89ebef7aaa263efb5bd->leave($__internal_a0957e87bf24ddd4bbee57079155a6eeaf45678d277cc89ebef7aaa263efb5bd_prof);

        
        $__internal_9fb28b5e294bbbed33ff71c07f301cf99023f2cdb63d2d5300438eda702b227f->leave($__internal_9fb28b5e294bbbed33ff71c07f301cf99023f2cdb63d2d5300438eda702b227f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
