<?php

/* @CoreCagnotte/produit/show.html.twig */
class __TwigTemplate_339e3f3e73b92b8d098d7abbad543ea23290fa9be5fc3cba14e84e08fe29d8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@CoreCagnotte/produit/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e21713041be8a68e876015f1d04fd667b735ce151244225202de1087607c435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e21713041be8a68e876015f1d04fd667b735ce151244225202de1087607c435->enter($__internal_7e21713041be8a68e876015f1d04fd667b735ce151244225202de1087607c435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/show.html.twig"));

        $__internal_b179875569649a9a12a57a5e5c9dd1ebe726e8b2a668d85086ce4dea0b9ded23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b179875569649a9a12a57a5e5c9dd1ebe726e8b2a668d85086ce4dea0b9ded23->enter($__internal_b179875569649a9a12a57a5e5c9dd1ebe726e8b2a668d85086ce4dea0b9ded23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e21713041be8a68e876015f1d04fd667b735ce151244225202de1087607c435->leave($__internal_7e21713041be8a68e876015f1d04fd667b735ce151244225202de1087607c435_prof);

        
        $__internal_b179875569649a9a12a57a5e5c9dd1ebe726e8b2a668d85086ce4dea0b9ded23->leave($__internal_b179875569649a9a12a57a5e5c9dd1ebe726e8b2a668d85086ce4dea0b9ded23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c5285caf3f4f2a4eaa7d3f9ccfbe9bfc22b1f347963768e30949c24330a4ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5285caf3f4f2a4eaa7d3f9ccfbe9bfc22b1f347963768e30949c24330a4ac0->enter($__internal_7c5285caf3f4f2a4eaa7d3f9ccfbe9bfc22b1f347963768e30949c24330a4ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de7241851716a6c3fb2c342a86835fa566f2d31b0c8066e8fae102db3dd40004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7241851716a6c3fb2c342a86835fa566f2d31b0c8066e8fae102db3dd40004->enter($__internal_de7241851716a6c3fb2c342a86835fa566f2d31b0c8066e8fae102db3dd40004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Produit</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reference</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Qualite</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "qualite", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_edit", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_de7241851716a6c3fb2c342a86835fa566f2d31b0c8066e8fae102db3dd40004->leave($__internal_de7241851716a6c3fb2c342a86835fa566f2d31b0c8066e8fae102db3dd40004_prof);

        
        $__internal_7c5285caf3f4f2a4eaa7d3f9ccfbe9bfc22b1f347963768e30949c24330a4ac0->leave($__internal_7c5285caf3f4f2a4eaa7d3f9ccfbe9bfc22b1f347963768e30949c24330a4ac0_prof);

    }

    public function getTemplateName()
    {
        return "@CoreCagnotte/produit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <h1>Produit</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ produit.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ produit.nom }}</td>
            </tr>
            <tr>
                <th>Reference</th>
                <td>{{ produit.reference }}</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>{{ produit.quantite }}</td>
            </tr>
            <tr>
                <th>Qualite</th>
                <td>{{ produit.qualite }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('produit_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('produit_edit', { 'id': produit.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@CoreCagnotte/produit/show.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle\\Resources\\views\\produit\\show.html.twig");
    }
}
