<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da3d9b132af2a40e907a65e172b4f955099b807077400b069492c335ce2f3d3d extends Twig_Template
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
        $__internal_0411d17ef6340b8a05d005de6fcad3032c197e0a703e1c10140a6fee9b215f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0411d17ef6340b8a05d005de6fcad3032c197e0a703e1c10140a6fee9b215f78->enter($__internal_0411d17ef6340b8a05d005de6fcad3032c197e0a703e1c10140a6fee9b215f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_197a1195982336526323e5fbbe9357321e43b6a2e84e186204b0f23262698e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197a1195982336526323e5fbbe9357321e43b6a2e84e186204b0f23262698e96->enter($__internal_197a1195982336526323e5fbbe9357321e43b6a2e84e186204b0f23262698e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0411d17ef6340b8a05d005de6fcad3032c197e0a703e1c10140a6fee9b215f78->leave($__internal_0411d17ef6340b8a05d005de6fcad3032c197e0a703e1c10140a6fee9b215f78_prof);

        
        $__internal_197a1195982336526323e5fbbe9357321e43b6a2e84e186204b0f23262698e96->leave($__internal_197a1195982336526323e5fbbe9357321e43b6a2e84e186204b0f23262698e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
