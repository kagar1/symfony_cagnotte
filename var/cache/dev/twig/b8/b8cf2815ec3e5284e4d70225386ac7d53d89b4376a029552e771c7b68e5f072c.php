<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b60c8463566e2be5e09097f3595b0f9e7e853d2c2ecd5693383cf26df9e43075 extends Twig_Template
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
        $__internal_d08bf338743e19a845d57543be16c85adb0d33f1c482e5ce7dcc824cc8e2baff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08bf338743e19a845d57543be16c85adb0d33f1c482e5ce7dcc824cc8e2baff->enter($__internal_d08bf338743e19a845d57543be16c85adb0d33f1c482e5ce7dcc824cc8e2baff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8e98bd132c3c93f01622232eeba3d1236615f176938c9f7a48870eb6176fdfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e98bd132c3c93f01622232eeba3d1236615f176938c9f7a48870eb6176fdfa7->enter($__internal_8e98bd132c3c93f01622232eeba3d1236615f176938c9f7a48870eb6176fdfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d08bf338743e19a845d57543be16c85adb0d33f1c482e5ce7dcc824cc8e2baff->leave($__internal_d08bf338743e19a845d57543be16c85adb0d33f1c482e5ce7dcc824cc8e2baff_prof);

        
        $__internal_8e98bd132c3c93f01622232eeba3d1236615f176938c9f7a48870eb6176fdfa7->leave($__internal_8e98bd132c3c93f01622232eeba3d1236615f176938c9f7a48870eb6176fdfa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
