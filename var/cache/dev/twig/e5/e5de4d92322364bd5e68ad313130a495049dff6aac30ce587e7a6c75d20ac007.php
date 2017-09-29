<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_992cf42486638ab58da0083167ec3d46c3d3a34a319d57af5d058ff8fb5091fa extends Twig_Template
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
        $__internal_de8a4354831f4cfff129bbc3d7e417c8276b53555ddf1157b6f5a0f362663b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8a4354831f4cfff129bbc3d7e417c8276b53555ddf1157b6f5a0f362663b4f->enter($__internal_de8a4354831f4cfff129bbc3d7e417c8276b53555ddf1157b6f5a0f362663b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1dc9550809a091fd16ed14551859894887544b3cf7255c29fbfbf9d24fdc3dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc9550809a091fd16ed14551859894887544b3cf7255c29fbfbf9d24fdc3dc5->enter($__internal_1dc9550809a091fd16ed14551859894887544b3cf7255c29fbfbf9d24fdc3dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_de8a4354831f4cfff129bbc3d7e417c8276b53555ddf1157b6f5a0f362663b4f->leave($__internal_de8a4354831f4cfff129bbc3d7e417c8276b53555ddf1157b6f5a0f362663b4f_prof);

        
        $__internal_1dc9550809a091fd16ed14551859894887544b3cf7255c29fbfbf9d24fdc3dc5->leave($__internal_1dc9550809a091fd16ed14551859894887544b3cf7255c29fbfbf9d24fdc3dc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
