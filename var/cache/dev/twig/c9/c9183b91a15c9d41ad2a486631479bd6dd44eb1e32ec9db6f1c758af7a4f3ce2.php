<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9676b17fdd24f413452ce75aed249516f8713df58005b26b244c2201ca0e9782 extends Twig_Template
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
        $__internal_6701cd4e911ecab29906a3db92a7dafde879fd45bbb79220ce88fe68215576c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6701cd4e911ecab29906a3db92a7dafde879fd45bbb79220ce88fe68215576c7->enter($__internal_6701cd4e911ecab29906a3db92a7dafde879fd45bbb79220ce88fe68215576c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_10029a938eec9dd9c1912d46b45106419e322d13650c5d499c1933bac80e7788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10029a938eec9dd9c1912d46b45106419e322d13650c5d499c1933bac80e7788->enter($__internal_10029a938eec9dd9c1912d46b45106419e322d13650c5d499c1933bac80e7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6701cd4e911ecab29906a3db92a7dafde879fd45bbb79220ce88fe68215576c7->leave($__internal_6701cd4e911ecab29906a3db92a7dafde879fd45bbb79220ce88fe68215576c7_prof);

        
        $__internal_10029a938eec9dd9c1912d46b45106419e322d13650c5d499c1933bac80e7788->leave($__internal_10029a938eec9dd9c1912d46b45106419e322d13650c5d499c1933bac80e7788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
