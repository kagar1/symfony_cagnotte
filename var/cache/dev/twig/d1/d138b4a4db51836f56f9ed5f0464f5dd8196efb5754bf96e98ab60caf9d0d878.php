<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b094c28242c8a6aa22c240152eb1e54c1585c524dc3ec0bac29435664712c317 extends Twig_Template
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
        $__internal_8e9a2207ccb0a3c1043ebed27847b5aa6b40043c7c92171463695d9fc0c141fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9a2207ccb0a3c1043ebed27847b5aa6b40043c7c92171463695d9fc0c141fe->enter($__internal_8e9a2207ccb0a3c1043ebed27847b5aa6b40043c7c92171463695d9fc0c141fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0fceb8b7f007e7062a7da2f8333202c94f4e22633491b61656be25ff9884121a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fceb8b7f007e7062a7da2f8333202c94f4e22633491b61656be25ff9884121a->enter($__internal_0fceb8b7f007e7062a7da2f8333202c94f4e22633491b61656be25ff9884121a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8e9a2207ccb0a3c1043ebed27847b5aa6b40043c7c92171463695d9fc0c141fe->leave($__internal_8e9a2207ccb0a3c1043ebed27847b5aa6b40043c7c92171463695d9fc0c141fe_prof);

        
        $__internal_0fceb8b7f007e7062a7da2f8333202c94f4e22633491b61656be25ff9884121a->leave($__internal_0fceb8b7f007e7062a7da2f8333202c94f4e22633491b61656be25ff9884121a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
