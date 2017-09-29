<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_32c1e2dd51908b999fd6d04a140dfe953f2babe834a00a161265969b76654424 extends Twig_Template
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
        $__internal_2324014ddf61620f277ed9a2f24f2652223d8332fce62f76b2d6d822652b7624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2324014ddf61620f277ed9a2f24f2652223d8332fce62f76b2d6d822652b7624->enter($__internal_2324014ddf61620f277ed9a2f24f2652223d8332fce62f76b2d6d822652b7624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8f7c2316d55ca91c55cc815bc94998cf2b76cf60b0d5c7f8f813fd9c8dc5a389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7c2316d55ca91c55cc815bc94998cf2b76cf60b0d5c7f8f813fd9c8dc5a389->enter($__internal_8f7c2316d55ca91c55cc815bc94998cf2b76cf60b0d5c7f8f813fd9c8dc5a389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2324014ddf61620f277ed9a2f24f2652223d8332fce62f76b2d6d822652b7624->leave($__internal_2324014ddf61620f277ed9a2f24f2652223d8332fce62f76b2d6d822652b7624_prof);

        
        $__internal_8f7c2316d55ca91c55cc815bc94998cf2b76cf60b0d5c7f8f813fd9c8dc5a389->leave($__internal_8f7c2316d55ca91c55cc815bc94998cf2b76cf60b0d5c7f8f813fd9c8dc5a389_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
