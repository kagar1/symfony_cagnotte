<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fb2104fa7e1229b433c113d994690d41bc7694aa76337c640acd788d9ba1beac extends Twig_Template
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
        $__internal_66e37230b5ca0da5b9a4be4abdb982a184043d1fcc0b9abd91a93722a9223c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e37230b5ca0da5b9a4be4abdb982a184043d1fcc0b9abd91a93722a9223c9b->enter($__internal_66e37230b5ca0da5b9a4be4abdb982a184043d1fcc0b9abd91a93722a9223c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1f86336f08b242b006ad1b81f7c6d85b5a210d161ec0c5365e34a2812f11f440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f86336f08b242b006ad1b81f7c6d85b5a210d161ec0c5365e34a2812f11f440->enter($__internal_1f86336f08b242b006ad1b81f7c6d85b5a210d161ec0c5365e34a2812f11f440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_66e37230b5ca0da5b9a4be4abdb982a184043d1fcc0b9abd91a93722a9223c9b->leave($__internal_66e37230b5ca0da5b9a4be4abdb982a184043d1fcc0b9abd91a93722a9223c9b_prof);

        
        $__internal_1f86336f08b242b006ad1b81f7c6d85b5a210d161ec0c5365e34a2812f11f440->leave($__internal_1f86336f08b242b006ad1b81f7c6d85b5a210d161ec0c5365e34a2812f11f440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
