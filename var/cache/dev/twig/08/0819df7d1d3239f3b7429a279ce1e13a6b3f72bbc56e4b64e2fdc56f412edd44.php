<?php

/* CoreCagnotteBundle:Categorie:show.html.twig */
class __TwigTemplate_04de40a93205bf8fc44bdd86e0f5884674b00e0c309489ed452762907ccb2411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:Categorie:show.html.twig", 1);
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
        $__internal_3c8cc0b5c75162b2b8ecebdf353f8ca8c018e20254e5d8303b2d14b13f9b1576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8cc0b5c75162b2b8ecebdf353f8ca8c018e20254e5d8303b2d14b13f9b1576->enter($__internal_3c8cc0b5c75162b2b8ecebdf353f8ca8c018e20254e5d8303b2d14b13f9b1576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:show.html.twig"));

        $__internal_243dab73d4bbd92d4f980c075f66c58808c661d400fa4926a3d94d0027380834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243dab73d4bbd92d4f980c075f66c58808c661d400fa4926a3d94d0027380834->enter($__internal_243dab73d4bbd92d4f980c075f66c58808c661d400fa4926a3d94d0027380834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8cc0b5c75162b2b8ecebdf353f8ca8c018e20254e5d8303b2d14b13f9b1576->leave($__internal_3c8cc0b5c75162b2b8ecebdf353f8ca8c018e20254e5d8303b2d14b13f9b1576_prof);

        
        $__internal_243dab73d4bbd92d4f980c075f66c58808c661d400fa4926a3d94d0027380834->leave($__internal_243dab73d4bbd92d4f980c075f66c58808c661d400fa4926a3d94d0027380834_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4188782403212ef8cd79e57625118288776fafd77f8f07bd0c5c24edc5b08b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4188782403212ef8cd79e57625118288776fafd77f8f07bd0c5c24edc5b08b7e->enter($__internal_4188782403212ef8cd79e57625118288776fafd77f8f07bd0c5c24edc5b08b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be6e5a1a95bc1d95d29d0644fca4f0367344547ab51e9f4a4d8e5d01832a7eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6e5a1a95bc1d95d29d0644fca4f0367344547ab51e9f4a4d8e5d01832a7eca->enter($__internal_be6e5a1a95bc1d95d29d0644fca4f0367344547ab51e9f4a4d8e5d01832a7eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_be6e5a1a95bc1d95d29d0644fca4f0367344547ab51e9f4a4d8e5d01832a7eca->leave($__internal_be6e5a1a95bc1d95d29d0644fca4f0367344547ab51e9f4a4d8e5d01832a7eca_prof);

        
        $__internal_4188782403212ef8cd79e57625118288776fafd77f8f07bd0c5c24edc5b08b7e->leave($__internal_4188782403212ef8cd79e57625118288776fafd77f8f07bd0c5c24edc5b08b7e_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:Categorie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ categorie.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ categorie.nom }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('categorie_edit', { 'id': categorie.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CoreCagnotteBundle:Categorie:show.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/Categorie/show.html.twig");
    }
}
