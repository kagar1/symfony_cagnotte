<?php

/* categorie/show.html.twig */
class __TwigTemplate_3f8060e3545a6f35e294876df0e0f5dab2b37c4186ce5853eac44b494f868272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/show.html.twig", 1);
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
        $__internal_7bc84a640b3e418cc9b5f6602921bb32d825c97ddeb85cf6ae793a626c656059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc84a640b3e418cc9b5f6602921bb32d825c97ddeb85cf6ae793a626c656059->enter($__internal_7bc84a640b3e418cc9b5f6602921bb32d825c97ddeb85cf6ae793a626c656059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $__internal_1b8fba5f0ba0d6ff39c42607a8c7fadef658547cfc0f6742479a22680c04a37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8fba5f0ba0d6ff39c42607a8c7fadef658547cfc0f6742479a22680c04a37d->enter($__internal_1b8fba5f0ba0d6ff39c42607a8c7fadef658547cfc0f6742479a22680c04a37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc84a640b3e418cc9b5f6602921bb32d825c97ddeb85cf6ae793a626c656059->leave($__internal_7bc84a640b3e418cc9b5f6602921bb32d825c97ddeb85cf6ae793a626c656059_prof);

        
        $__internal_1b8fba5f0ba0d6ff39c42607a8c7fadef658547cfc0f6742479a22680c04a37d->leave($__internal_1b8fba5f0ba0d6ff39c42607a8c7fadef658547cfc0f6742479a22680c04a37d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa1971d4a650a6628d85563bdc40342ce391f94798a01b7f2203c33287edf956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1971d4a650a6628d85563bdc40342ce391f94798a01b7f2203c33287edf956->enter($__internal_fa1971d4a650a6628d85563bdc40342ce391f94798a01b7f2203c33287edf956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b922f32f6f9c05a47f12961cc945a28ae913003deeebd4e8a66d8792d705803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b922f32f6f9c05a47f12961cc945a28ae913003deeebd4e8a66d8792d705803->enter($__internal_1b922f32f6f9c05a47f12961cc945a28ae913003deeebd4e8a66d8792d705803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1b922f32f6f9c05a47f12961cc945a28ae913003deeebd4e8a66d8792d705803->leave($__internal_1b922f32f6f9c05a47f12961cc945a28ae913003deeebd4e8a66d8792d705803_prof);

        
        $__internal_fa1971d4a650a6628d85563bdc40342ce391f94798a01b7f2203c33287edf956->leave($__internal_fa1971d4a650a6628d85563bdc40342ce391f94798a01b7f2203c33287edf956_prof);

    }

    public function getTemplateName()
    {
        return "categorie/show.html.twig";
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
", "categorie/show.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\app\\Resources\\views\\categorie\\show.html.twig");
    }
}
