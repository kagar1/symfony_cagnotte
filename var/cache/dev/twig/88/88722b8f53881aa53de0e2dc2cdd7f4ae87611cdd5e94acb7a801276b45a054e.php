<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bc7e7a784d133918f6e03109f05e39011e458d777d67588a14a7457d3057c06 extends Twig_Template
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
        $__internal_28fd68c91c7046f16c9ca6edbe6dce65bb4baa76c82873926b24beaeb92b6165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fd68c91c7046f16c9ca6edbe6dce65bb4baa76c82873926b24beaeb92b6165->enter($__internal_28fd68c91c7046f16c9ca6edbe6dce65bb4baa76c82873926b24beaeb92b6165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_eafd19c0064294eedb730fc823783fb41bb003bcb26c78f7f327e25aaa140ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafd19c0064294eedb730fc823783fb41bb003bcb26c78f7f327e25aaa140ab3->enter($__internal_eafd19c0064294eedb730fc823783fb41bb003bcb26c78f7f327e25aaa140ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_28fd68c91c7046f16c9ca6edbe6dce65bb4baa76c82873926b24beaeb92b6165->leave($__internal_28fd68c91c7046f16c9ca6edbe6dce65bb4baa76c82873926b24beaeb92b6165_prof);

        
        $__internal_eafd19c0064294eedb730fc823783fb41bb003bcb26c78f7f327e25aaa140ab3->leave($__internal_eafd19c0064294eedb730fc823783fb41bb003bcb26c78f7f327e25aaa140ab3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
