<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_80ddf62ff8cc628531d3ddca2de175b5b3d29ee6648e08290337d4d064fcc8f9 extends Twig_Template
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
        $__internal_59d7d2b3c941647a86ab1d9536d13e9521a8fa79ae930c0e33411aae939df501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d7d2b3c941647a86ab1d9536d13e9521a8fa79ae930c0e33411aae939df501->enter($__internal_59d7d2b3c941647a86ab1d9536d13e9521a8fa79ae930c0e33411aae939df501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_91da92556ea31f904836ceb1246e07fb4eb3e194f02008978926d83b43169d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91da92556ea31f904836ceb1246e07fb4eb3e194f02008978926d83b43169d03->enter($__internal_91da92556ea31f904836ceb1246e07fb4eb3e194f02008978926d83b43169d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_59d7d2b3c941647a86ab1d9536d13e9521a8fa79ae930c0e33411aae939df501->leave($__internal_59d7d2b3c941647a86ab1d9536d13e9521a8fa79ae930c0e33411aae939df501_prof);

        
        $__internal_91da92556ea31f904836ceb1246e07fb4eb3e194f02008978926d83b43169d03->leave($__internal_91da92556ea31f904836ceb1246e07fb4eb3e194f02008978926d83b43169d03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
