<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f8854cd010339daaa43e28044d34c6c45501535d47a9b6200e41bb423057965 extends Twig_Template
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
        $__internal_0aba12eb042eca35e558bda141f61c9baa87cd36e3467751f4057e5c781f451f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aba12eb042eca35e558bda141f61c9baa87cd36e3467751f4057e5c781f451f->enter($__internal_0aba12eb042eca35e558bda141f61c9baa87cd36e3467751f4057e5c781f451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_60bebb001c2f918f7d4b3afe9c4813d75262e1439a4962dad031431fe0f65e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bebb001c2f918f7d4b3afe9c4813d75262e1439a4962dad031431fe0f65e9c->enter($__internal_60bebb001c2f918f7d4b3afe9c4813d75262e1439a4962dad031431fe0f65e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0aba12eb042eca35e558bda141f61c9baa87cd36e3467751f4057e5c781f451f->leave($__internal_0aba12eb042eca35e558bda141f61c9baa87cd36e3467751f4057e5c781f451f_prof);

        
        $__internal_60bebb001c2f918f7d4b3afe9c4813d75262e1439a4962dad031431fe0f65e9c->leave($__internal_60bebb001c2f918f7d4b3afe9c4813d75262e1439a4962dad031431fe0f65e9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
