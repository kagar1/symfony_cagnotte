<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_47867b47d047b57a69b61b818d077441105b9dedf0a9dafb9e475df4246fb7b8 extends Twig_Template
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
        $__internal_ce46095b98d3019669306e1511623e554c629d4ccdf429112ddfdc484a59cf75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce46095b98d3019669306e1511623e554c629d4ccdf429112ddfdc484a59cf75->enter($__internal_ce46095b98d3019669306e1511623e554c629d4ccdf429112ddfdc484a59cf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_411a911e9883bbb4f78a1d784a306f66d6ed42e3210599d254d71ad677b78eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411a911e9883bbb4f78a1d784a306f66d6ed42e3210599d254d71ad677b78eee->enter($__internal_411a911e9883bbb4f78a1d784a306f66d6ed42e3210599d254d71ad677b78eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ce46095b98d3019669306e1511623e554c629d4ccdf429112ddfdc484a59cf75->leave($__internal_ce46095b98d3019669306e1511623e554c629d4ccdf429112ddfdc484a59cf75_prof);

        
        $__internal_411a911e9883bbb4f78a1d784a306f66d6ed42e3210599d254d71ad677b78eee->leave($__internal_411a911e9883bbb4f78a1d784a306f66d6ed42e3210599d254d71ad677b78eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
