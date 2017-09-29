<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a91a3b4322fa2e54aa441d59497315d55bbdf3dda35f906aa3ab94fbb1781251 extends Twig_Template
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
        $__internal_8580ffb0b52af659f64f3ced20cd0676082817717e4c9cac8bcf24ccd13a99bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8580ffb0b52af659f64f3ced20cd0676082817717e4c9cac8bcf24ccd13a99bc->enter($__internal_8580ffb0b52af659f64f3ced20cd0676082817717e4c9cac8bcf24ccd13a99bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_160812e9f39b56ea2292a01fd5e590142735dfd1984fdb921faab1611d3e45ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160812e9f39b56ea2292a01fd5e590142735dfd1984fdb921faab1611d3e45ac->enter($__internal_160812e9f39b56ea2292a01fd5e590142735dfd1984fdb921faab1611d3e45ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8580ffb0b52af659f64f3ced20cd0676082817717e4c9cac8bcf24ccd13a99bc->leave($__internal_8580ffb0b52af659f64f3ced20cd0676082817717e4c9cac8bcf24ccd13a99bc_prof);

        
        $__internal_160812e9f39b56ea2292a01fd5e590142735dfd1984fdb921faab1611d3e45ac->leave($__internal_160812e9f39b56ea2292a01fd5e590142735dfd1984fdb921faab1611d3e45ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
