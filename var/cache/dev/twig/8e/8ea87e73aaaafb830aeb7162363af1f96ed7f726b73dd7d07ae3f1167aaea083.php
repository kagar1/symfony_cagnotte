<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf043cdc1f86180e4b139ce9ecd758283ee7565b0ba4e5ddd009afa4c62823f7 extends Twig_Template
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
        $__internal_a0e8bda951ad1457925a68f19883ddb3caa97f04c1fb1966da0fba97125f4ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e8bda951ad1457925a68f19883ddb3caa97f04c1fb1966da0fba97125f4ece->enter($__internal_a0e8bda951ad1457925a68f19883ddb3caa97f04c1fb1966da0fba97125f4ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a1690845387b6b9eababa7bd40dd1a3ba4eb1392f52420d005551546b1215aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1690845387b6b9eababa7bd40dd1a3ba4eb1392f52420d005551546b1215aea->enter($__internal_a1690845387b6b9eababa7bd40dd1a3ba4eb1392f52420d005551546b1215aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a0e8bda951ad1457925a68f19883ddb3caa97f04c1fb1966da0fba97125f4ece->leave($__internal_a0e8bda951ad1457925a68f19883ddb3caa97f04c1fb1966da0fba97125f4ece_prof);

        
        $__internal_a1690845387b6b9eababa7bd40dd1a3ba4eb1392f52420d005551546b1215aea->leave($__internal_a1690845387b6b9eababa7bd40dd1a3ba4eb1392f52420d005551546b1215aea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
