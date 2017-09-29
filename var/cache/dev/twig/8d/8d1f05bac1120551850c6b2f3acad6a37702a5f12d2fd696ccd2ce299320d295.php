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
        $__internal_5392b801c659208a2296d2310fc5cfa25c087474c3ddab292bfe2f0f95de7ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5392b801c659208a2296d2310fc5cfa25c087474c3ddab292bfe2f0f95de7ecd->enter($__internal_5392b801c659208a2296d2310fc5cfa25c087474c3ddab292bfe2f0f95de7ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a2ae225f97c4ae294580cd427b8a00e3ba179514e7fa107205d6b734c22cdbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ae225f97c4ae294580cd427b8a00e3ba179514e7fa107205d6b734c22cdbda->enter($__internal_a2ae225f97c4ae294580cd427b8a00e3ba179514e7fa107205d6b734c22cdbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5392b801c659208a2296d2310fc5cfa25c087474c3ddab292bfe2f0f95de7ecd->leave($__internal_5392b801c659208a2296d2310fc5cfa25c087474c3ddab292bfe2f0f95de7ecd_prof);

        
        $__internal_a2ae225f97c4ae294580cd427b8a00e3ba179514e7fa107205d6b734c22cdbda->leave($__internal_a2ae225f97c4ae294580cd427b8a00e3ba179514e7fa107205d6b734c22cdbda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e951648d2758d8e82cca1b2fc4ecc8249985d527a0b4471e7fba524466f546de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e951648d2758d8e82cca1b2fc4ecc8249985d527a0b4471e7fba524466f546de->enter($__internal_e951648d2758d8e82cca1b2fc4ecc8249985d527a0b4471e7fba524466f546de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ab64ee6b769597d9511fc946a20a00f68f4f1bf08949d61a932256df259e7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab64ee6b769597d9511fc946a20a00f68f4f1bf08949d61a932256df259e7dc->enter($__internal_2ab64ee6b769597d9511fc946a20a00f68f4f1bf08949d61a932256df259e7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnotte";
        
        $__internal_2ab64ee6b769597d9511fc946a20a00f68f4f1bf08949d61a932256df259e7dc->leave($__internal_2ab64ee6b769597d9511fc946a20a00f68f4f1bf08949d61a932256df259e7dc_prof);

        
        $__internal_e951648d2758d8e82cca1b2fc4ecc8249985d527a0b4471e7fba524466f546de->leave($__internal_e951648d2758d8e82cca1b2fc4ecc8249985d527a0b4471e7fba524466f546de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7376ab28a79bd1596e5a0f1ac5ed90853a70f3dd8227b68682930aeec7afda4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7376ab28a79bd1596e5a0f1ac5ed90853a70f3dd8227b68682930aeec7afda4b->enter($__internal_7376ab28a79bd1596e5a0f1ac5ed90853a70f3dd8227b68682930aeec7afda4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03832e4e9ff3d9eda3f6cccc358e1f441b1366eb67493fa2898b673b69534321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03832e4e9ff3d9eda3f6cccc358e1f441b1366eb67493fa2898b673b69534321->enter($__internal_03832e4e9ff3d9eda3f6cccc358e1f441b1366eb67493fa2898b673b69534321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_03832e4e9ff3d9eda3f6cccc358e1f441b1366eb67493fa2898b673b69534321->leave($__internal_03832e4e9ff3d9eda3f6cccc358e1f441b1366eb67493fa2898b673b69534321_prof);

        
        $__internal_7376ab28a79bd1596e5a0f1ac5ed90853a70f3dd8227b68682930aeec7afda4b->leave($__internal_7376ab28a79bd1596e5a0f1ac5ed90853a70f3dd8227b68682930aeec7afda4b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_73ec2883c292de743a25100131f29e526f925c2b9a3efc49b5b749e017ac1a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ec2883c292de743a25100131f29e526f925c2b9a3efc49b5b749e017ac1a7c->enter($__internal_73ec2883c292de743a25100131f29e526f925c2b9a3efc49b5b749e017ac1a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c97723c073eb979cf137af100c474df10840884598ceca3c1bc72a32fa3ae26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97723c073eb979cf137af100c474df10840884598ceca3c1bc72a32fa3ae26e->enter($__internal_c97723c073eb979cf137af100c474df10840884598ceca3c1bc72a32fa3ae26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c97723c073eb979cf137af100c474df10840884598ceca3c1bc72a32fa3ae26e->leave($__internal_c97723c073eb979cf137af100c474df10840884598ceca3c1bc72a32fa3ae26e_prof);

        
        $__internal_73ec2883c292de743a25100131f29e526f925c2b9a3efc49b5b749e017ac1a7c->leave($__internal_73ec2883c292de743a25100131f29e526f925c2b9a3efc49b5b749e017ac1a7c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ee5e215e264c70aae999669d5c7f2a19053cca0532530a75dbfa97a675e4128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee5e215e264c70aae999669d5c7f2a19053cca0532530a75dbfa97a675e4128->enter($__internal_0ee5e215e264c70aae999669d5c7f2a19053cca0532530a75dbfa97a675e4128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c30e7966f849817f2fb9040885d9fd9f60caa49e7ecfa37689fba8f3b79f370e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30e7966f849817f2fb9040885d9fd9f60caa49e7ecfa37689fba8f3b79f370e->enter($__internal_c30e7966f849817f2fb9040885d9fd9f60caa49e7ecfa37689fba8f3b79f370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c30e7966f849817f2fb9040885d9fd9f60caa49e7ecfa37689fba8f3b79f370e->leave($__internal_c30e7966f849817f2fb9040885d9fd9f60caa49e7ecfa37689fba8f3b79f370e_prof);

        
        $__internal_0ee5e215e264c70aae999669d5c7f2a19053cca0532530a75dbfa97a675e4128->leave($__internal_0ee5e215e264c70aae999669d5c7f2a19053cca0532530a75dbfa97a675e4128_prof);

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
</html>", "base.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\app\\Resources\\views\\base.html.twig");
    }
}
