<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a9779a140337356804816fe0013176ff169531b929b336b006a4a20850729240 extends Twig_Template
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
        $__internal_127b37c91fc1562b21ca1069cb25548799b993fda4634507a45f1d03a80219c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127b37c91fc1562b21ca1069cb25548799b993fda4634507a45f1d03a80219c5->enter($__internal_127b37c91fc1562b21ca1069cb25548799b993fda4634507a45f1d03a80219c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6fceb041357322c29ea4f7ceceb7f2f371f2a626cec06e9fd3004983ade066f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fceb041357322c29ea4f7ceceb7f2f371f2a626cec06e9fd3004983ade066f0->enter($__internal_6fceb041357322c29ea4f7ceceb7f2f371f2a626cec06e9fd3004983ade066f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_127b37c91fc1562b21ca1069cb25548799b993fda4634507a45f1d03a80219c5->leave($__internal_127b37c91fc1562b21ca1069cb25548799b993fda4634507a45f1d03a80219c5_prof);

        
        $__internal_6fceb041357322c29ea4f7ceceb7f2f371f2a626cec06e9fd3004983ade066f0->leave($__internal_6fceb041357322c29ea4f7ceceb7f2f371f2a626cec06e9fd3004983ade066f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
