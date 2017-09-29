<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9fb4ba5cf8647b4985631d770b4d7b78bcebfd0d668622a3902f1e5263298be extends Twig_Template
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
        $__internal_dcb9f97dfac578ab38d15762ecb59e238d5e0e332d4045436f553f7010727967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb9f97dfac578ab38d15762ecb59e238d5e0e332d4045436f553f7010727967->enter($__internal_dcb9f97dfac578ab38d15762ecb59e238d5e0e332d4045436f553f7010727967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8dd78d4be3a98ffc12c39a9340a241519e8e6d9c98b2efef492a7fe23c736b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd78d4be3a98ffc12c39a9340a241519e8e6d9c98b2efef492a7fe23c736b6e->enter($__internal_8dd78d4be3a98ffc12c39a9340a241519e8e6d9c98b2efef492a7fe23c736b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_dcb9f97dfac578ab38d15762ecb59e238d5e0e332d4045436f553f7010727967->leave($__internal_dcb9f97dfac578ab38d15762ecb59e238d5e0e332d4045436f553f7010727967_prof);

        
        $__internal_8dd78d4be3a98ffc12c39a9340a241519e8e6d9c98b2efef492a7fe23c736b6e->leave($__internal_8dd78d4be3a98ffc12c39a9340a241519e8e6d9c98b2efef492a7fe23c736b6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
