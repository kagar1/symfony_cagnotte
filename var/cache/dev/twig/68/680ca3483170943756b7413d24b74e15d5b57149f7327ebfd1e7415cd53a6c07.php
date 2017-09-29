<?php

/* fournisseur/new.html.twig */
class __TwigTemplate_11318423aa8bfabda3f82808358f30d93d3e55cc826a8c56b148a02a24f14037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/new.html.twig", 1);
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
        $__internal_88915ef1d1cbca64dfa11789c5c9541f93d11433b7e7c791b1dc134945f5e319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88915ef1d1cbca64dfa11789c5c9541f93d11433b7e7c791b1dc134945f5e319->enter($__internal_88915ef1d1cbca64dfa11789c5c9541f93d11433b7e7c791b1dc134945f5e319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_eb8e2252fd0030acb7779ea3f8f8a832780db3616a36306b73dbc1006f5bf814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8e2252fd0030acb7779ea3f8f8a832780db3616a36306b73dbc1006f5bf814->enter($__internal_eb8e2252fd0030acb7779ea3f8f8a832780db3616a36306b73dbc1006f5bf814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88915ef1d1cbca64dfa11789c5c9541f93d11433b7e7c791b1dc134945f5e319->leave($__internal_88915ef1d1cbca64dfa11789c5c9541f93d11433b7e7c791b1dc134945f5e319_prof);

        
        $__internal_eb8e2252fd0030acb7779ea3f8f8a832780db3616a36306b73dbc1006f5bf814->leave($__internal_eb8e2252fd0030acb7779ea3f8f8a832780db3616a36306b73dbc1006f5bf814_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e9897c88de7862668120995d5d65ac0719026f0965034d4fae4c88392cd41cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9897c88de7862668120995d5d65ac0719026f0965034d4fae4c88392cd41cf->enter($__internal_1e9897c88de7862668120995d5d65ac0719026f0965034d4fae4c88392cd41cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_930ea02a3baf7edb2bc835218a9dfbc3325c43c5e752cc5c644b1e895ab60a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930ea02a3baf7edb2bc835218a9dfbc3325c43c5e752cc5c644b1e895ab60a01->enter($__internal_930ea02a3baf7edb2bc835218a9dfbc3325c43c5e752cc5c644b1e895ab60a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_930ea02a3baf7edb2bc835218a9dfbc3325c43c5e752cc5c644b1e895ab60a01->leave($__internal_930ea02a3baf7edb2bc835218a9dfbc3325c43c5e752cc5c644b1e895ab60a01_prof);

        
        $__internal_1e9897c88de7862668120995d5d65ac0719026f0965034d4fae4c88392cd41cf->leave($__internal_1e9897c88de7862668120995d5d65ac0719026f0965034d4fae4c88392cd41cf_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fournisseur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fournisseur/new.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\app\\Resources\\views\\fournisseur\\new.html.twig");
    }
}
