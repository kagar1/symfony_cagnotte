<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_84cc671909b7a8d151fc2e6bad4f9ffebb4cab4735e927a310fde078842cd166 extends Twig_Template
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
        $__internal_dc97810812853d5f19c7c77f0f9ad5ba3ad03464e8b7a3d128c245b0b548b6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc97810812853d5f19c7c77f0f9ad5ba3ad03464e8b7a3d128c245b0b548b6cf->enter($__internal_dc97810812853d5f19c7c77f0f9ad5ba3ad03464e8b7a3d128c245b0b548b6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_252c9f22c0eb637e1f9107b794e258eb96130c84e8b4d1d425fb2f25a199a796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252c9f22c0eb637e1f9107b794e258eb96130c84e8b4d1d425fb2f25a199a796->enter($__internal_252c9f22c0eb637e1f9107b794e258eb96130c84e8b4d1d425fb2f25a199a796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dc97810812853d5f19c7c77f0f9ad5ba3ad03464e8b7a3d128c245b0b548b6cf->leave($__internal_dc97810812853d5f19c7c77f0f9ad5ba3ad03464e8b7a3d128c245b0b548b6cf_prof);

        
        $__internal_252c9f22c0eb637e1f9107b794e258eb96130c84e8b4d1d425fb2f25a199a796->leave($__internal_252c9f22c0eb637e1f9107b794e258eb96130c84e8b4d1d425fb2f25a199a796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
