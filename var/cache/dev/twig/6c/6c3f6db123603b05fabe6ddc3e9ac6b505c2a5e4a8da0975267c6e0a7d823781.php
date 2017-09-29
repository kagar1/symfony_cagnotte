<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_673fe3ba4983d51b7cae290d66088054512e0b920257a64bcbcaf7564562a928 extends Twig_Template
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
        $__internal_92537cd6b5f330e6e234da86b01944b39e08a6efb9b64654a956edee45c2060e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92537cd6b5f330e6e234da86b01944b39e08a6efb9b64654a956edee45c2060e->enter($__internal_92537cd6b5f330e6e234da86b01944b39e08a6efb9b64654a956edee45c2060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_54320e5347ce2de24c544348bd4fa8a900a3b500687c26556585a4a73d20d804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54320e5347ce2de24c544348bd4fa8a900a3b500687c26556585a4a73d20d804->enter($__internal_54320e5347ce2de24c544348bd4fa8a900a3b500687c26556585a4a73d20d804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_92537cd6b5f330e6e234da86b01944b39e08a6efb9b64654a956edee45c2060e->leave($__internal_92537cd6b5f330e6e234da86b01944b39e08a6efb9b64654a956edee45c2060e_prof);

        
        $__internal_54320e5347ce2de24c544348bd4fa8a900a3b500687c26556585a4a73d20d804->leave($__internal_54320e5347ce2de24c544348bd4fa8a900a3b500687c26556585a4a73d20d804_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
