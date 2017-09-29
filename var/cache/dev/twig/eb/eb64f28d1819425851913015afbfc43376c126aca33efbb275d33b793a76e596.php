<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a3d078fe6a6569732fb9059afe6eaf01595648b526a957ceea6782d30427a05 extends Twig_Template
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
        $__internal_41068e987c19e2444a26f6f7993866a054891c981d1b805f3efd88ddf2dedc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41068e987c19e2444a26f6f7993866a054891c981d1b805f3efd88ddf2dedc52->enter($__internal_41068e987c19e2444a26f6f7993866a054891c981d1b805f3efd88ddf2dedc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ab21b67daf6fae137271dd6b68c3684d2fe273ae3595afd6d8576af0b26f8c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab21b67daf6fae137271dd6b68c3684d2fe273ae3595afd6d8576af0b26f8c0b->enter($__internal_ab21b67daf6fae137271dd6b68c3684d2fe273ae3595afd6d8576af0b26f8c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_41068e987c19e2444a26f6f7993866a054891c981d1b805f3efd88ddf2dedc52->leave($__internal_41068e987c19e2444a26f6f7993866a054891c981d1b805f3efd88ddf2dedc52_prof);

        
        $__internal_ab21b67daf6fae137271dd6b68c3684d2fe273ae3595afd6d8576af0b26f8c0b->leave($__internal_ab21b67daf6fae137271dd6b68c3684d2fe273ae3595afd6d8576af0b26f8c0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
