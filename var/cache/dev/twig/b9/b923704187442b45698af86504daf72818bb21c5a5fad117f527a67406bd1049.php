<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e26819f51523b377e887d87fc7c0338f1c904b322e65a529d4a86bd51ac0ab6f extends Twig_Template
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
        $__internal_0a235ddb13455a3dd85053931eb300c1cc531bd62cc54a410d5055145b838826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a235ddb13455a3dd85053931eb300c1cc531bd62cc54a410d5055145b838826->enter($__internal_0a235ddb13455a3dd85053931eb300c1cc531bd62cc54a410d5055145b838826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_82be51aa2328b27f1f9482f37f8d13f4473b0cd9800a7305324df999ca32386c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82be51aa2328b27f1f9482f37f8d13f4473b0cd9800a7305324df999ca32386c->enter($__internal_82be51aa2328b27f1f9482f37f8d13f4473b0cd9800a7305324df999ca32386c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0a235ddb13455a3dd85053931eb300c1cc531bd62cc54a410d5055145b838826->leave($__internal_0a235ddb13455a3dd85053931eb300c1cc531bd62cc54a410d5055145b838826_prof);

        
        $__internal_82be51aa2328b27f1f9482f37f8d13f4473b0cd9800a7305324df999ca32386c->leave($__internal_82be51aa2328b27f1f9482f37f8d13f4473b0cd9800a7305324df999ca32386c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
