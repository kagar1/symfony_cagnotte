<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6ac95d2c8d1ebe9907d9f429f869a2eef34762df24d4ec7e26554055ef566658 extends Twig_Template
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
        $__internal_cecacaadbb57ad830d1066e418d7051f7d62b3aaf4e0a7508e91b80104083ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecacaadbb57ad830d1066e418d7051f7d62b3aaf4e0a7508e91b80104083ffe->enter($__internal_cecacaadbb57ad830d1066e418d7051f7d62b3aaf4e0a7508e91b80104083ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_0f71bd646fd683ac33078ec1f3e2f35d65d898a3cd3f414b7f6ae31b8d55c9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f71bd646fd683ac33078ec1f3e2f35d65d898a3cd3f414b7f6ae31b8d55c9d5->enter($__internal_0f71bd646fd683ac33078ec1f3e2f35d65d898a3cd3f414b7f6ae31b8d55c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_cecacaadbb57ad830d1066e418d7051f7d62b3aaf4e0a7508e91b80104083ffe->leave($__internal_cecacaadbb57ad830d1066e418d7051f7d62b3aaf4e0a7508e91b80104083ffe_prof);

        
        $__internal_0f71bd646fd683ac33078ec1f3e2f35d65d898a3cd3f414b7f6ae31b8d55c9d5->leave($__internal_0f71bd646fd683ac33078ec1f3e2f35d65d898a3cd3f414b7f6ae31b8d55c9d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
