<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ab1c6c4208a205987a23ebcb3ca2eff89e6f04e3b9eef954130e8647e804a2b extends Twig_Template
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
        $__internal_04d5d04559a707d20b4f91ffa619383083ceccd28ce501c0fdc6368b001bab63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d5d04559a707d20b4f91ffa619383083ceccd28ce501c0fdc6368b001bab63->enter($__internal_04d5d04559a707d20b4f91ffa619383083ceccd28ce501c0fdc6368b001bab63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2ca95b176826534f29f8193df4c2be43d17cbe47e895c371f91ae0603172ee35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca95b176826534f29f8193df4c2be43d17cbe47e895c371f91ae0603172ee35->enter($__internal_2ca95b176826534f29f8193df4c2be43d17cbe47e895c371f91ae0603172ee35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_04d5d04559a707d20b4f91ffa619383083ceccd28ce501c0fdc6368b001bab63->leave($__internal_04d5d04559a707d20b4f91ffa619383083ceccd28ce501c0fdc6368b001bab63_prof);

        
        $__internal_2ca95b176826534f29f8193df4c2be43d17cbe47e895c371f91ae0603172ee35->leave($__internal_2ca95b176826534f29f8193df4c2be43d17cbe47e895c371f91ae0603172ee35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
