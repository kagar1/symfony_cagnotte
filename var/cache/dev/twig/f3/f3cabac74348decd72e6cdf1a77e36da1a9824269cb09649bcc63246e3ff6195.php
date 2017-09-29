<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_111d59b413361a5c199b84ce7a2a9ccc55d09953faae1d87c5d37facc7f0537e extends Twig_Template
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
        $__internal_d21a91b0d988cdb4a6d5c79e2329b380dea17e491aa8b32b59856e3f1a24fd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21a91b0d988cdb4a6d5c79e2329b380dea17e491aa8b32b59856e3f1a24fd32->enter($__internal_d21a91b0d988cdb4a6d5c79e2329b380dea17e491aa8b32b59856e3f1a24fd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3f7468e35d70560faec56255664a003342852c15b6e0ba15e48837959ce07a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7468e35d70560faec56255664a003342852c15b6e0ba15e48837959ce07a0b->enter($__internal_3f7468e35d70560faec56255664a003342852c15b6e0ba15e48837959ce07a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d21a91b0d988cdb4a6d5c79e2329b380dea17e491aa8b32b59856e3f1a24fd32->leave($__internal_d21a91b0d988cdb4a6d5c79e2329b380dea17e491aa8b32b59856e3f1a24fd32_prof);

        
        $__internal_3f7468e35d70560faec56255664a003342852c15b6e0ba15e48837959ce07a0b->leave($__internal_3f7468e35d70560faec56255664a003342852c15b6e0ba15e48837959ce07a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
