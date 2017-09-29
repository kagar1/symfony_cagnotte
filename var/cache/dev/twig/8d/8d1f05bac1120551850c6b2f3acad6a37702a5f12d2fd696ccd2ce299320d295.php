<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b22b4df88a14f8c289f6c4230cd63b450b5b6411599c04c2015aaa237bd9ce3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22b4df88a14f8c289f6c4230cd63b450b5b6411599c04c2015aaa237bd9ce3a->enter($__internal_b22b4df88a14f8c289f6c4230cd63b450b5b6411599c04c2015aaa237bd9ce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ab619b33248ff23602bf06f1adf601e8ad38244926f7bd6b15cd23d85c96497c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab619b33248ff23602bf06f1adf601e8ad38244926f7bd6b15cd23d85c96497c->enter($__internal_ab619b33248ff23602bf06f1adf601e8ad38244926f7bd6b15cd23d85c96497c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>";
        
        $__internal_b22b4df88a14f8c289f6c4230cd63b450b5b6411599c04c2015aaa237bd9ce3a->leave($__internal_b22b4df88a14f8c289f6c4230cd63b450b5b6411599c04c2015aaa237bd9ce3a_prof);

        
        $__internal_ab619b33248ff23602bf06f1adf601e8ad38244926f7bd6b15cd23d85c96497c->leave($__internal_ab619b33248ff23602bf06f1adf601e8ad38244926f7bd6b15cd23d85c96497c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5d770ec80cd1fb9afd72442a3aa5a7f82e8caa61f9f929e09ef17ac6c57907a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d770ec80cd1fb9afd72442a3aa5a7f82e8caa61f9f929e09ef17ac6c57907a->enter($__internal_b5d770ec80cd1fb9afd72442a3aa5a7f82e8caa61f9f929e09ef17ac6c57907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa89c759594731ec3e278175cbea192ed9fac6930685f524db610dba0d46ec7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa89c759594731ec3e278175cbea192ed9fac6930685f524db610dba0d46ec7b->enter($__internal_aa89c759594731ec3e278175cbea192ed9fac6930685f524db610dba0d46ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnotte";
        
        $__internal_aa89c759594731ec3e278175cbea192ed9fac6930685f524db610dba0d46ec7b->leave($__internal_aa89c759594731ec3e278175cbea192ed9fac6930685f524db610dba0d46ec7b_prof);

        
        $__internal_b5d770ec80cd1fb9afd72442a3aa5a7f82e8caa61f9f929e09ef17ac6c57907a->leave($__internal_b5d770ec80cd1fb9afd72442a3aa5a7f82e8caa61f9f929e09ef17ac6c57907a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_716a39f2ab94e35b22c4cb7c3d34fbc6424dc4fc265adfc49a3fcb282d6c158f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716a39f2ab94e35b22c4cb7c3d34fbc6424dc4fc265adfc49a3fcb282d6c158f->enter($__internal_716a39f2ab94e35b22c4cb7c3d34fbc6424dc4fc265adfc49a3fcb282d6c158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec610f38a1fded2cd91dd92f22e8ebf02e65a9c527a632dba73254989c193abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec610f38a1fded2cd91dd92f22e8ebf02e65a9c527a632dba73254989c193abe->enter($__internal_ec610f38a1fded2cd91dd92f22e8ebf02e65a9c527a632dba73254989c193abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec610f38a1fded2cd91dd92f22e8ebf02e65a9c527a632dba73254989c193abe->leave($__internal_ec610f38a1fded2cd91dd92f22e8ebf02e65a9c527a632dba73254989c193abe_prof);

        
        $__internal_716a39f2ab94e35b22c4cb7c3d34fbc6424dc4fc265adfc49a3fcb282d6c158f->leave($__internal_716a39f2ab94e35b22c4cb7c3d34fbc6424dc4fc265adfc49a3fcb282d6c158f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e27e4fd4e28381aa61eb3c8859ce446acd1f6dd197e92605e7f2e8311fca2504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27e4fd4e28381aa61eb3c8859ce446acd1f6dd197e92605e7f2e8311fca2504->enter($__internal_e27e4fd4e28381aa61eb3c8859ce446acd1f6dd197e92605e7f2e8311fca2504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f536b77a0408989c60ca0e89cbba36b8a44af52992c22437d5c20d1cd33f022e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f536b77a0408989c60ca0e89cbba36b8a44af52992c22437d5c20d1cd33f022e->enter($__internal_f536b77a0408989c60ca0e89cbba36b8a44af52992c22437d5c20d1cd33f022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f536b77a0408989c60ca0e89cbba36b8a44af52992c22437d5c20d1cd33f022e->leave($__internal_f536b77a0408989c60ca0e89cbba36b8a44af52992c22437d5c20d1cd33f022e_prof);

        
        $__internal_e27e4fd4e28381aa61eb3c8859ce446acd1f6dd197e92605e7f2e8311fca2504->leave($__internal_e27e4fd4e28381aa61eb3c8859ce446acd1f6dd197e92605e7f2e8311fca2504_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3b6bcedf32d028a19363ffcc352a245a700b7951703db1ce130fb89ed6c81ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b6bcedf32d028a19363ffcc352a245a700b7951703db1ce130fb89ed6c81ff->enter($__internal_d3b6bcedf32d028a19363ffcc352a245a700b7951703db1ce130fb89ed6c81ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5851f3628b6d8389e5afc5f4fac0ebf55421d810dbbb80a7fd0eb0136fe11a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5851f3628b6d8389e5afc5f4fac0ebf55421d810dbbb80a7fd0eb0136fe11a50->enter($__internal_5851f3628b6d8389e5afc5f4fac0ebf55421d810dbbb80a7fd0eb0136fe11a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5851f3628b6d8389e5afc5f4fac0ebf55421d810dbbb80a7fd0eb0136fe11a50->leave($__internal_5851f3628b6d8389e5afc5f4fac0ebf55421d810dbbb80a7fd0eb0136fe11a50_prof);

        
        $__internal_d3b6bcedf32d028a19363ffcc352a245a700b7951703db1ce130fb89ed6c81ff->leave($__internal_d3b6bcedf32d028a19363ffcc352a245a700b7951703db1ce130fb89ed6c81ff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  99 => 10,  82 => 6,  64 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Cagnotte{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\app\\Resources\\views\\base.html.twig");
    }
}
