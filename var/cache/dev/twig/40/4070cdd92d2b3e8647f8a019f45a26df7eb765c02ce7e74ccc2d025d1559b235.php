<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8eaa0e9ce7636424c624d1e3524ae94387599e201f95a098025a82cbca056ec1 extends Twig_Template
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
        $__internal_1863c2dbbc853884e3879a9f14767a8a015344878c355b9634f2fdff3ddd1142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1863c2dbbc853884e3879a9f14767a8a015344878c355b9634f2fdff3ddd1142->enter($__internal_1863c2dbbc853884e3879a9f14767a8a015344878c355b9634f2fdff3ddd1142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5415241a44846ea15bf2478b64cb337dc5dd5e44a9162b247fbd4e3f9a942c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5415241a44846ea15bf2478b64cb337dc5dd5e44a9162b247fbd4e3f9a942c92->enter($__internal_5415241a44846ea15bf2478b64cb337dc5dd5e44a9162b247fbd4e3f9a942c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1863c2dbbc853884e3879a9f14767a8a015344878c355b9634f2fdff3ddd1142->leave($__internal_1863c2dbbc853884e3879a9f14767a8a015344878c355b9634f2fdff3ddd1142_prof);

        
        $__internal_5415241a44846ea15bf2478b64cb337dc5dd5e44a9162b247fbd4e3f9a942c92->leave($__internal_5415241a44846ea15bf2478b64cb337dc5dd5e44a9162b247fbd4e3f9a942c92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
