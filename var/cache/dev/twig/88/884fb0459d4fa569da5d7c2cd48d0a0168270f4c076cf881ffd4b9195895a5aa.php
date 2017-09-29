<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c02706646be8830cee863351d5254b7b2c6abdc404e878e9f3360bec0b7bc527 extends Twig_Template
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
        $__internal_9debe2e9eaedf62538c0256c3ecdac3a23c21106cbb390ac610deba748fb6351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9debe2e9eaedf62538c0256c3ecdac3a23c21106cbb390ac610deba748fb6351->enter($__internal_9debe2e9eaedf62538c0256c3ecdac3a23c21106cbb390ac610deba748fb6351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_80f434d4032bd21041155926ed530c163a4907a6411e9edce2a6feeb29029adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f434d4032bd21041155926ed530c163a4907a6411e9edce2a6feeb29029adf->enter($__internal_80f434d4032bd21041155926ed530c163a4907a6411e9edce2a6feeb29029adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9debe2e9eaedf62538c0256c3ecdac3a23c21106cbb390ac610deba748fb6351->leave($__internal_9debe2e9eaedf62538c0256c3ecdac3a23c21106cbb390ac610deba748fb6351_prof);

        
        $__internal_80f434d4032bd21041155926ed530c163a4907a6411e9edce2a6feeb29029adf->leave($__internal_80f434d4032bd21041155926ed530c163a4907a6411e9edce2a6feeb29029adf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
