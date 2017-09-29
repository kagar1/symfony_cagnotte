<?php

/* @CoreCagnotte/produit/index.html.twig */
class __TwigTemplate_71a71b2f084c13dbafc775c7b3e654465f8b02cee28d0bf0d48e3254f58d15e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@CoreCagnotte/produit/index.html.twig", 1);
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
        $__internal_b76b08832d6384a23b4f6f877e21baad493260c7572b22312d9e446656185c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76b08832d6384a23b4f6f877e21baad493260c7572b22312d9e446656185c4c->enter($__internal_b76b08832d6384a23b4f6f877e21baad493260c7572b22312d9e446656185c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/index.html.twig"));

        $__internal_277de7505e625ba89fc8f1719309d6fe06455885fdf29dfa4e85afd289db7d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277de7505e625ba89fc8f1719309d6fe06455885fdf29dfa4e85afd289db7d54->enter($__internal_277de7505e625ba89fc8f1719309d6fe06455885fdf29dfa4e85afd289db7d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b76b08832d6384a23b4f6f877e21baad493260c7572b22312d9e446656185c4c->leave($__internal_b76b08832d6384a23b4f6f877e21baad493260c7572b22312d9e446656185c4c_prof);

        
        $__internal_277de7505e625ba89fc8f1719309d6fe06455885fdf29dfa4e85afd289db7d54->leave($__internal_277de7505e625ba89fc8f1719309d6fe06455885fdf29dfa4e85afd289db7d54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb18245bbb40585bd39bd9782e5a76684710fb3fc09aa07538aeaba023e50c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb18245bbb40585bd39bd9782e5a76684710fb3fc09aa07538aeaba023e50c0->enter($__internal_ceb18245bbb40585bd39bd9782e5a76684710fb3fc09aa07538aeaba023e50c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cb510949db60f0e69b0b807cb398ec3f16affeaaed01c3bc15253598ddcef31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb510949db60f0e69b0b807cb398ec3f16affeaaed01c3bc15253598ddcef31->enter($__internal_9cb510949db60f0e69b0b807cb398ec3f16affeaaed01c3bc15253598ddcef31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Reference</th>
                <th>Quantite</th>
                <th>Qualite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qualite", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_edit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_new");
        echo "\">Create a new produit</a>
        </li>
    </ul>
";
        
        $__internal_9cb510949db60f0e69b0b807cb398ec3f16affeaaed01c3bc15253598ddcef31->leave($__internal_9cb510949db60f0e69b0b807cb398ec3f16affeaaed01c3bc15253598ddcef31_prof);

        
        $__internal_ceb18245bbb40585bd39bd9782e5a76684710fb3fc09aa07538aeaba023e50c0->leave($__internal_ceb18245bbb40585bd39bd9782e5a76684710fb3fc09aa07538aeaba023e50c0_prof);

    }

    public function getTemplateName()
    {
        return "@CoreCagnotte/produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Reference</th>
                <th>Quantite</th>
                <th>Qualite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td><a href=\"{{ path('produit_show', { 'id': produit.id }) }}\">{{ produit.id }}</a></td>
                <td>{{ produit.nom }}</td>
                <td>{{ produit.reference }}</td>
                <td>{{ produit.quantite }}</td>
                <td>{{ produit.qualite }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('produit_show', { 'id': produit.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('produit_edit', { 'id': produit.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('produit_new') }}\">Create a new produit</a>
        </li>
    </ul>
{% endblock %}
", "@CoreCagnotte/produit/index.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle\\Resources\\views\\produit\\index.html.twig");
    }
}
