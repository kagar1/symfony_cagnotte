<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9ecd932e5d724ac01bd34c6c7859d2c76df6788246a7764cb84aec5455501f11 extends Twig_Template
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
        $__internal_a50bbe0f095849352aff09564323c48ce49c0d1dc40970146573697b8959bcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50bbe0f095849352aff09564323c48ce49c0d1dc40970146573697b8959bcff->enter($__internal_a50bbe0f095849352aff09564323c48ce49c0d1dc40970146573697b8959bcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_36c4d1cc63af35c4b4c569ed9d4fc9c8fd752c32622189831eec76d2abc00406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c4d1cc63af35c4b4c569ed9d4fc9c8fd752c32622189831eec76d2abc00406->enter($__internal_36c4d1cc63af35c4b4c569ed9d4fc9c8fd752c32622189831eec76d2abc00406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a50bbe0f095849352aff09564323c48ce49c0d1dc40970146573697b8959bcff->leave($__internal_a50bbe0f095849352aff09564323c48ce49c0d1dc40970146573697b8959bcff_prof);

        
        $__internal_36c4d1cc63af35c4b4c569ed9d4fc9c8fd752c32622189831eec76d2abc00406->leave($__internal_36c4d1cc63af35c4b4c569ed9d4fc9c8fd752c32622189831eec76d2abc00406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
