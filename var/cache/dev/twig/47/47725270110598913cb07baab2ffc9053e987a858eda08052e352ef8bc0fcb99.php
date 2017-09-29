<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9cf46f58af914c3d12a5c4277e0a560be63bd0b5507b4f462a7c0088cd5b387b extends Twig_Template
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
        $__internal_c546e2f4b0f9a7f29c762c2ef3e5f333d1feee88e5388b15fd0c7a47ede7ef3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c546e2f4b0f9a7f29c762c2ef3e5f333d1feee88e5388b15fd0c7a47ede7ef3b->enter($__internal_c546e2f4b0f9a7f29c762c2ef3e5f333d1feee88e5388b15fd0c7a47ede7ef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_dc7dafacff549d6952575e3ee0fb1e306472c8015c0a97d51ad456d5bc458211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7dafacff549d6952575e3ee0fb1e306472c8015c0a97d51ad456d5bc458211->enter($__internal_dc7dafacff549d6952575e3ee0fb1e306472c8015c0a97d51ad456d5bc458211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c546e2f4b0f9a7f29c762c2ef3e5f333d1feee88e5388b15fd0c7a47ede7ef3b->leave($__internal_c546e2f4b0f9a7f29c762c2ef3e5f333d1feee88e5388b15fd0c7a47ede7ef3b_prof);

        
        $__internal_dc7dafacff549d6952575e3ee0fb1e306472c8015c0a97d51ad456d5bc458211->leave($__internal_dc7dafacff549d6952575e3ee0fb1e306472c8015c0a97d51ad456d5bc458211_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
