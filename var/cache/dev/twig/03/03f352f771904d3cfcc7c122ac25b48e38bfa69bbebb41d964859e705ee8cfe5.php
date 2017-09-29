<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ea2bf1adf33610aae7127de23eabd4c76f592d519eb929223d1b452c817795d5 extends Twig_Template
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
        $__internal_a2dbc8ff01459aef0a0a2be9f601cec91e487f1bfa876f6a5c12d9e9e71a75c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2dbc8ff01459aef0a0a2be9f601cec91e487f1bfa876f6a5c12d9e9e71a75c1->enter($__internal_a2dbc8ff01459aef0a0a2be9f601cec91e487f1bfa876f6a5c12d9e9e71a75c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_18e80e6e6cc98048af8d453cec56d81f8c80944ce0be10ddf52738cde71503ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e80e6e6cc98048af8d453cec56d81f8c80944ce0be10ddf52738cde71503ee->enter($__internal_18e80e6e6cc98048af8d453cec56d81f8c80944ce0be10ddf52738cde71503ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a2dbc8ff01459aef0a0a2be9f601cec91e487f1bfa876f6a5c12d9e9e71a75c1->leave($__internal_a2dbc8ff01459aef0a0a2be9f601cec91e487f1bfa876f6a5c12d9e9e71a75c1_prof);

        
        $__internal_18e80e6e6cc98048af8d453cec56d81f8c80944ce0be10ddf52738cde71503ee->leave($__internal_18e80e6e6cc98048af8d453cec56d81f8c80944ce0be10ddf52738cde71503ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
