<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0a1615bded4cabb1e00a10feca8d0f78834832c28666e5f395da923e53934f20 extends Twig_Template
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
        $__internal_dc4e861b626fbe4d904c74598cf4d9cda8e2cd6eb1cad29298be1ed7b23d2bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4e861b626fbe4d904c74598cf4d9cda8e2cd6eb1cad29298be1ed7b23d2bc4->enter($__internal_dc4e861b626fbe4d904c74598cf4d9cda8e2cd6eb1cad29298be1ed7b23d2bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9a7dae1d98a1079937f59cee2311358abe309d9a5a525588e8c634d6dc0d5671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7dae1d98a1079937f59cee2311358abe309d9a5a525588e8c634d6dc0d5671->enter($__internal_9a7dae1d98a1079937f59cee2311358abe309d9a5a525588e8c634d6dc0d5671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_dc4e861b626fbe4d904c74598cf4d9cda8e2cd6eb1cad29298be1ed7b23d2bc4->leave($__internal_dc4e861b626fbe4d904c74598cf4d9cda8e2cd6eb1cad29298be1ed7b23d2bc4_prof);

        
        $__internal_9a7dae1d98a1079937f59cee2311358abe309d9a5a525588e8c634d6dc0d5671->leave($__internal_9a7dae1d98a1079937f59cee2311358abe309d9a5a525588e8c634d6dc0d5671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
