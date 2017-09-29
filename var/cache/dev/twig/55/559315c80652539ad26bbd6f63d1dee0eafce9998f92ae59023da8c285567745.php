<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ec4593bfa186f1b70277da279fdda44bdd8cb917c21e7dd4151f9c252561a1a2 extends Twig_Template
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
        $__internal_57a51054c631afa3933c35939bb9ff2dc994de4cd8430e41cfdfc840ab46b497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a51054c631afa3933c35939bb9ff2dc994de4cd8430e41cfdfc840ab46b497->enter($__internal_57a51054c631afa3933c35939bb9ff2dc994de4cd8430e41cfdfc840ab46b497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_01588e51f177cee5dc4011789ec72f3a7df6042775514022e3cdda91517d04e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01588e51f177cee5dc4011789ec72f3a7df6042775514022e3cdda91517d04e0->enter($__internal_01588e51f177cee5dc4011789ec72f3a7df6042775514022e3cdda91517d04e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_57a51054c631afa3933c35939bb9ff2dc994de4cd8430e41cfdfc840ab46b497->leave($__internal_57a51054c631afa3933c35939bb9ff2dc994de4cd8430e41cfdfc840ab46b497_prof);

        
        $__internal_01588e51f177cee5dc4011789ec72f3a7df6042775514022e3cdda91517d04e0->leave($__internal_01588e51f177cee5dc4011789ec72f3a7df6042775514022e3cdda91517d04e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
