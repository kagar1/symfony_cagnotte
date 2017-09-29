<?php

/* CoreCagnotteBundle:Default:index.html.twig */
class __TwigTemplate_5a3decf99fbb8b4e163c307c4ab64def1fced56973af7b966a1db4fd8e6615d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_330da1164baf92f143b734b2a986a47fc620280fd4b1fa84bd95f30ce9d83827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330da1164baf92f143b734b2a986a47fc620280fd4b1fa84bd95f30ce9d83827->enter($__internal_330da1164baf92f143b734b2a986a47fc620280fd4b1fa84bd95f30ce9d83827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Default:index.html.twig"));

        $__internal_0feb2f1f5cd252b54e44906d80efd209ab7856ce9e0d3791487be68f8ca68b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feb2f1f5cd252b54e44906d80efd209ab7856ce9e0d3791487be68f8ca68b3a->enter($__internal_0feb2f1f5cd252b54e44906d80efd209ab7856ce9e0d3791487be68f8ca68b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330da1164baf92f143b734b2a986a47fc620280fd4b1fa84bd95f30ce9d83827->leave($__internal_330da1164baf92f143b734b2a986a47fc620280fd4b1fa84bd95f30ce9d83827_prof);

        
        $__internal_0feb2f1f5cd252b54e44906d80efd209ab7856ce9e0d3791487be68f8ca68b3a->leave($__internal_0feb2f1f5cd252b54e44906d80efd209ab7856ce9e0d3791487be68f8ca68b3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_988eaa8468e086de0ea0bab319e771cca3b6634177b0723eabeb273d018b8046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988eaa8468e086de0ea0bab319e771cca3b6634177b0723eabeb273d018b8046->enter($__internal_988eaa8468e086de0ea0bab319e771cca3b6634177b0723eabeb273d018b8046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dffc2c1ef381bd7f9474a79f988236fd4ea37b3b946cd92ca692cb1e30dfbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dffc2c1ef381bd7f9474a79f988236fd4ea37b3b946cd92ca692cb1e30dfbf7->enter($__internal_3dffc2c1ef381bd7f9474a79f988236fd4ea37b3b946cd92ca692cb1e30dfbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"color:red; text-align:center \">Bog Application</h1>

";
        
        $__internal_3dffc2c1ef381bd7f9474a79f988236fd4ea37b3b946cd92ca692cb1e30dfbf7->leave($__internal_3dffc2c1ef381bd7f9474a79f988236fd4ea37b3b946cd92ca692cb1e30dfbf7_prof);

        
        $__internal_988eaa8468e086de0ea0bab319e771cca3b6634177b0723eabeb273d018b8046->leave($__internal_988eaa8468e086de0ea0bab319e771cca3b6634177b0723eabeb273d018b8046_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 style=\"color:red; text-align:center \">Bog Application</h1>

{% endblock %}

", "CoreCagnotteBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/Default/index.html.twig");
    }
}
