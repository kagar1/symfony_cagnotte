<?php

/* CoreCagnotteBundle:Categorie:new.html.twig */
class __TwigTemplate_147b0e829e0a5f127dc8d681536d8ba1cc9eea0ea02ad9e77c172ca79b52db6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:Categorie:new.html.twig", 1);
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
        $__internal_bd2496a8d5a3dcd5ca882c6df121884da18a324c865e436ac5815c066c5da2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2496a8d5a3dcd5ca882c6df121884da18a324c865e436ac5815c066c5da2b2->enter($__internal_bd2496a8d5a3dcd5ca882c6df121884da18a324c865e436ac5815c066c5da2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:new.html.twig"));

        $__internal_b2dedc559bebec42745f1468c1ab2aa02dd6cefcdb1241ce9cb60cd392f1cab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dedc559bebec42745f1468c1ab2aa02dd6cefcdb1241ce9cb60cd392f1cab8->enter($__internal_b2dedc559bebec42745f1468c1ab2aa02dd6cefcdb1241ce9cb60cd392f1cab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd2496a8d5a3dcd5ca882c6df121884da18a324c865e436ac5815c066c5da2b2->leave($__internal_bd2496a8d5a3dcd5ca882c6df121884da18a324c865e436ac5815c066c5da2b2_prof);

        
        $__internal_b2dedc559bebec42745f1468c1ab2aa02dd6cefcdb1241ce9cb60cd392f1cab8->leave($__internal_b2dedc559bebec42745f1468c1ab2aa02dd6cefcdb1241ce9cb60cd392f1cab8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c216db75c0ed495508d1c7c34c7774c997bb507988bf39dba6acd6af70ca8695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c216db75c0ed495508d1c7c34c7774c997bb507988bf39dba6acd6af70ca8695->enter($__internal_c216db75c0ed495508d1c7c34c7774c997bb507988bf39dba6acd6af70ca8695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a1ecfaa85c6a1a06b7494b09ecd608a9b8680cc05b5af0a0635c323607a6cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1ecfaa85c6a1a06b7494b09ecd608a9b8680cc05b5af0a0635c323607a6cca->enter($__internal_6a1ecfaa85c6a1a06b7494b09ecd608a9b8680cc05b5af0a0635c323607a6cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6a1ecfaa85c6a1a06b7494b09ecd608a9b8680cc05b5af0a0635c323607a6cca->leave($__internal_6a1ecfaa85c6a1a06b7494b09ecd608a9b8680cc05b5af0a0635c323607a6cca_prof);

        
        $__internal_c216db75c0ed495508d1c7c34c7774c997bb507988bf39dba6acd6af70ca8695->leave($__internal_c216db75c0ed495508d1c7c34c7774c997bb507988bf39dba6acd6af70ca8695_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:Categorie:new.html.twig";
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
    <h1>Categorie creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "CoreCagnotteBundle:Categorie:new.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/Categorie/new.html.twig");
    }
}
