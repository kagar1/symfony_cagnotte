<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ecbd9ccd1d137e963500eeadc5ce627c66a29d787212188841159b8197f85a72 extends Twig_Template
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
        $__internal_75cfa99fb974f66ad0e686234699377f82ad518f6611c67c8a9804a2a0b7f7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cfa99fb974f66ad0e686234699377f82ad518f6611c67c8a9804a2a0b7f7f0->enter($__internal_75cfa99fb974f66ad0e686234699377f82ad518f6611c67c8a9804a2a0b7f7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a72de927d452d22f6a454bff9335b0482d5218a98295f7a4f169a1425f2cc2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72de927d452d22f6a454bff9335b0482d5218a98295f7a4f169a1425f2cc2c4->enter($__internal_a72de927d452d22f6a454bff9335b0482d5218a98295f7a4f169a1425f2cc2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_75cfa99fb974f66ad0e686234699377f82ad518f6611c67c8a9804a2a0b7f7f0->leave($__internal_75cfa99fb974f66ad0e686234699377f82ad518f6611c67c8a9804a2a0b7f7f0_prof);

        
        $__internal_a72de927d452d22f6a454bff9335b0482d5218a98295f7a4f169a1425f2cc2c4->leave($__internal_a72de927d452d22f6a454bff9335b0482d5218a98295f7a4f169a1425f2cc2c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
