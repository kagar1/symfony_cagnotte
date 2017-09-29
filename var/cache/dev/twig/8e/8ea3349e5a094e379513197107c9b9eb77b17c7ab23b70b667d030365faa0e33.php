<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2c6051287dec7240518ff24fd973bb0bbe6429f52ab90508fb4aa3532856899 extends Twig_Template
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
        $__internal_bd595c2e029dc860d3ac30b213193de093990fdf4350ac717c454269e870fa29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd595c2e029dc860d3ac30b213193de093990fdf4350ac717c454269e870fa29->enter($__internal_bd595c2e029dc860d3ac30b213193de093990fdf4350ac717c454269e870fa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_18936ea81aad1ab3b3a131775aa80f7e67b6fe6dca2a27da83055a81478a2ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18936ea81aad1ab3b3a131775aa80f7e67b6fe6dca2a27da83055a81478a2ce4->enter($__internal_18936ea81aad1ab3b3a131775aa80f7e67b6fe6dca2a27da83055a81478a2ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bd595c2e029dc860d3ac30b213193de093990fdf4350ac717c454269e870fa29->leave($__internal_bd595c2e029dc860d3ac30b213193de093990fdf4350ac717c454269e870fa29_prof);

        
        $__internal_18936ea81aad1ab3b3a131775aa80f7e67b6fe6dca2a27da83055a81478a2ce4->leave($__internal_18936ea81aad1ab3b3a131775aa80f7e67b6fe6dca2a27da83055a81478a2ce4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
