<?php

/* CoreCagnotteBundle:Categorie:index.html.twig */
class __TwigTemplate_54a234a0472d64da85126f2a172b0333f99628f063f6d9cc291e975415467b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:Categorie:index.html.twig", 1);
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
        $__internal_f9fddeb028b1594e39f4bad370c7d8273fc2c082a4951f297ff4f8582e27b57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9fddeb028b1594e39f4bad370c7d8273fc2c082a4951f297ff4f8582e27b57f->enter($__internal_f9fddeb028b1594e39f4bad370c7d8273fc2c082a4951f297ff4f8582e27b57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:index.html.twig"));

        $__internal_45cf388cd7a886bc6334b6f88e08a119cc956a657f9007710bd84bceb89c7324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cf388cd7a886bc6334b6f88e08a119cc956a657f9007710bd84bceb89c7324->enter($__internal_45cf388cd7a886bc6334b6f88e08a119cc956a657f9007710bd84bceb89c7324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9fddeb028b1594e39f4bad370c7d8273fc2c082a4951f297ff4f8582e27b57f->leave($__internal_f9fddeb028b1594e39f4bad370c7d8273fc2c082a4951f297ff4f8582e27b57f_prof);

        
        $__internal_45cf388cd7a886bc6334b6f88e08a119cc956a657f9007710bd84bceb89c7324->leave($__internal_45cf388cd7a886bc6334b6f88e08a119cc956a657f9007710bd84bceb89c7324_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab14ba87dbafc614f63c71899674ac241b916b0ad63b7be837ac0f5d82740d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab14ba87dbafc614f63c71899674ac241b916b0ad63b7be837ac0f5d82740d2->enter($__internal_bab14ba87dbafc614f63c71899674ac241b916b0ad63b7be837ac0f5d82740d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f504e67cbe0faed7cb52cc31d9a2c8803a5dd1936048b0733292fdd63c4d286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f504e67cbe0faed7cb52cc31d9a2c8803a5dd1936048b0733292fdd63c4d286->enter($__internal_5f504e67cbe0faed7cb52cc31d9a2c8803a5dd1936048b0733292fdd63c4d286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f504e67cbe0faed7cb52cc31d9a2c8803a5dd1936048b0733292fdd63c4d286->leave($__internal_5f504e67cbe0faed7cb52cc31d9a2c8803a5dd1936048b0733292fdd63c4d286_prof);

        
        $__internal_bab14ba87dbafc614f63c71899674ac241b916b0ad63b7be837ac0f5d82740d2->leave($__internal_bab14ba87dbafc614f63c71899674ac241b916b0ad63b7be837ac0f5d82740d2_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:Categorie:index.html.twig";
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
", "CoreCagnotteBundle:Categorie:index.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/Categorie/index.html.twig");
    }
}
