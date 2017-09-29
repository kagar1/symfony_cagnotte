<?php

/* CoreCagnotteBundle:Categorie:edit.html.twig */
class __TwigTemplate_3f65db775e6edd9b74cb39ce880c200b68d8b9fa744263eb9a7df1d9b2cc8513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:Categorie:edit.html.twig", 1);
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
        $__internal_b11f7be3b74d913c3c05285eb9981afadbf014ddcc28881cab83754cdaddf3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11f7be3b74d913c3c05285eb9981afadbf014ddcc28881cab83754cdaddf3ad->enter($__internal_b11f7be3b74d913c3c05285eb9981afadbf014ddcc28881cab83754cdaddf3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:edit.html.twig"));

        $__internal_b255a92c8e1e30f8713354bbf444900a45c25b463ec04524c2c835fb2395d89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b255a92c8e1e30f8713354bbf444900a45c25b463ec04524c2c835fb2395d89f->enter($__internal_b255a92c8e1e30f8713354bbf444900a45c25b463ec04524c2c835fb2395d89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b11f7be3b74d913c3c05285eb9981afadbf014ddcc28881cab83754cdaddf3ad->leave($__internal_b11f7be3b74d913c3c05285eb9981afadbf014ddcc28881cab83754cdaddf3ad_prof);

        
        $__internal_b255a92c8e1e30f8713354bbf444900a45c25b463ec04524c2c835fb2395d89f->leave($__internal_b255a92c8e1e30f8713354bbf444900a45c25b463ec04524c2c835fb2395d89f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b41964e97e8eb5336e96db7cea99a62b64bd9ab963ec8b85085491bc2febe76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b41964e97e8eb5336e96db7cea99a62b64bd9ab963ec8b85085491bc2febe76->enter($__internal_4b41964e97e8eb5336e96db7cea99a62b64bd9ab963ec8b85085491bc2febe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd4190fe56a25cb403a40f0849eced9e4d4eb7d614fdf45e2e6fc734714e4256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4190fe56a25cb403a40f0849eced9e4d4eb7d614fdf45e2e6fc734714e4256->enter($__internal_cd4190fe56a25cb403a40f0849eced9e4d4eb7d614fdf45e2e6fc734714e4256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cd4190fe56a25cb403a40f0849eced9e4d4eb7d614fdf45e2e6fc734714e4256->leave($__internal_cd4190fe56a25cb403a40f0849eced9e4d4eb7d614fdf45e2e6fc734714e4256_prof);

        
        $__internal_4b41964e97e8eb5336e96db7cea99a62b64bd9ab963ec8b85085491bc2febe76->leave($__internal_4b41964e97e8eb5336e96db7cea99a62b64bd9ab963ec8b85085491bc2febe76_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:Categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categorie edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CoreCagnotteBundle:Categorie:edit.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/Categorie/edit.html.twig");
    }
}
