<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f250018f808798563ea3e9c65a638d88fbc4e6c5a0626b5c4874026997ab864d extends Twig_Template
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
        $__internal_37b7ca85e3a43f98a2bd35cbc211aa1f19936189d7ab888b7d4f8dd9d393691b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b7ca85e3a43f98a2bd35cbc211aa1f19936189d7ab888b7d4f8dd9d393691b->enter($__internal_37b7ca85e3a43f98a2bd35cbc211aa1f19936189d7ab888b7d4f8dd9d393691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_8ba9692fbfc3dfc34369e1e7e1bae93fe6f0ad4ae9bf3f7c5342dcb9b95df389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba9692fbfc3dfc34369e1e7e1bae93fe6f0ad4ae9bf3f7c5342dcb9b95df389->enter($__internal_8ba9692fbfc3dfc34369e1e7e1bae93fe6f0ad4ae9bf3f7c5342dcb9b95df389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_37b7ca85e3a43f98a2bd35cbc211aa1f19936189d7ab888b7d4f8dd9d393691b->leave($__internal_37b7ca85e3a43f98a2bd35cbc211aa1f19936189d7ab888b7d4f8dd9d393691b_prof);

        
        $__internal_8ba9692fbfc3dfc34369e1e7e1bae93fe6f0ad4ae9bf3f7c5342dcb9b95df389->leave($__internal_8ba9692fbfc3dfc34369e1e7e1bae93fe6f0ad4ae9bf3f7c5342dcb9b95df389_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
