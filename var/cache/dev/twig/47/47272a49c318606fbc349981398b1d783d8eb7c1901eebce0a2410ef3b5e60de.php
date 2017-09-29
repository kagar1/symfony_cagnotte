<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6e4570fad85f6f3092700e80b4da0b39d79996b97c2a68ef92cae4c383c27b16 extends Twig_Template
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
        $__internal_348b042019480de07d6c4177a2a6561c75972678c9b58d057f7ff3f8fbcdecb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348b042019480de07d6c4177a2a6561c75972678c9b58d057f7ff3f8fbcdecb7->enter($__internal_348b042019480de07d6c4177a2a6561c75972678c9b58d057f7ff3f8fbcdecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b0f74f53f73ab32cd0442ee4c220f197357e89b5846073ce4f4b2c31651f40f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f74f53f73ab32cd0442ee4c220f197357e89b5846073ce4f4b2c31651f40f8->enter($__internal_b0f74f53f73ab32cd0442ee4c220f197357e89b5846073ce4f4b2c31651f40f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_348b042019480de07d6c4177a2a6561c75972678c9b58d057f7ff3f8fbcdecb7->leave($__internal_348b042019480de07d6c4177a2a6561c75972678c9b58d057f7ff3f8fbcdecb7_prof);

        
        $__internal_b0f74f53f73ab32cd0442ee4c220f197357e89b5846073ce4f4b2c31651f40f8->leave($__internal_b0f74f53f73ab32cd0442ee4c220f197357e89b5846073ce4f4b2c31651f40f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
