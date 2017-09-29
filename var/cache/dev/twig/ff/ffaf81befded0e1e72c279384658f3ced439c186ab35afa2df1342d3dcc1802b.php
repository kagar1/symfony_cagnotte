<?php

/* categorie/index.html.twig */
class __TwigTemplate_351edc96b13f63bc1a09632452412295a54f212e79ce8a4e76b547d0157b0a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
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
        $__internal_d3407dd82b80422ec279b10597115021f42a804f465322d782b016b70af2fa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3407dd82b80422ec279b10597115021f42a804f465322d782b016b70af2fa3c->enter($__internal_d3407dd82b80422ec279b10597115021f42a804f465322d782b016b70af2fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_c83ea8c79ee9381b1c08dd9d64ae80f7ed2f2c77bbdfb3282bf54604837ce314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83ea8c79ee9381b1c08dd9d64ae80f7ed2f2c77bbdfb3282bf54604837ce314->enter($__internal_c83ea8c79ee9381b1c08dd9d64ae80f7ed2f2c77bbdfb3282bf54604837ce314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3407dd82b80422ec279b10597115021f42a804f465322d782b016b70af2fa3c->leave($__internal_d3407dd82b80422ec279b10597115021f42a804f465322d782b016b70af2fa3c_prof);

        
        $__internal_c83ea8c79ee9381b1c08dd9d64ae80f7ed2f2c77bbdfb3282bf54604837ce314->leave($__internal_c83ea8c79ee9381b1c08dd9d64ae80f7ed2f2c77bbdfb3282bf54604837ce314_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_757727176e29893fd488578d4be1d9065867f6cf0d7b6043d8cd4a3bbb1f2d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757727176e29893fd488578d4be1d9065867f6cf0d7b6043d8cd4a3bbb1f2d57->enter($__internal_757727176e29893fd488578d4be1d9065867f6cf0d7b6043d8cd4a3bbb1f2d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55b7761252a0d8e41e62d4be0120c81eb102e4fd96075c03a4c2087a3b58f982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b7761252a0d8e41e62d4be0120c81eb102e4fd96075c03a4c2087a3b58f982->enter($__internal_55b7761252a0d8e41e62d4be0120c81eb102e4fd96075c03a4c2087a3b58f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
        echo "\">Create a new categorie</a>
        </li>
    </ul>
";
        
        $__internal_55b7761252a0d8e41e62d4be0120c81eb102e4fd96075c03a4c2087a3b58f982->leave($__internal_55b7761252a0d8e41e62d4be0120c81eb102e4fd96075c03a4c2087a3b58f982_prof);

        
        $__internal_757727176e29893fd488578d4be1d9065867f6cf0d7b6043d8cd4a3bbb1f2d57->leave($__internal_757727176e29893fd488578d4be1d9065867f6cf0d7b6043d8cd4a3bbb1f2d57_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for categorie in categories %}
            <tr>
                <td><a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\">{{ categorie.id }}</a></td>
                <td>{{ categorie.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('categorie_edit', { 'id': categorie.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('categorie_new') }}\">Create a new categorie</a>
        </li>
    </ul>
{% endblock %}
", "categorie/index.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\app\\Resources\\views\\categorie\\index.html.twig");
    }
}
