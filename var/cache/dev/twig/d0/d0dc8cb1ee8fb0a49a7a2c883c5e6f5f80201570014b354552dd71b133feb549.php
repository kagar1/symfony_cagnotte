<?php

/* CoreCagnotteBundle:produit:show.html.twig */
class __TwigTemplate_ef3603f8dfe16613536c681ef62be49ca05236903a3a185ee499cb884d25b7a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreCagnotteBundle:produit:show.html.twig", 1);
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
        $__internal_1fb0afec5888a9b7c84c10d836a6d86e7abdfaa91bbc8229e091603cc1f61939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb0afec5888a9b7c84c10d836a6d86e7abdfaa91bbc8229e091603cc1f61939->enter($__internal_1fb0afec5888a9b7c84c10d836a6d86e7abdfaa91bbc8229e091603cc1f61939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:produit:show.html.twig"));

        $__internal_c5b401415cb2b12ebc51eea40b79aff6758bbd869ae6d375e8d71ee3db0786b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b401415cb2b12ebc51eea40b79aff6758bbd869ae6d375e8d71ee3db0786b4->enter($__internal_c5b401415cb2b12ebc51eea40b79aff6758bbd869ae6d375e8d71ee3db0786b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:produit:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb0afec5888a9b7c84c10d836a6d86e7abdfaa91bbc8229e091603cc1f61939->leave($__internal_1fb0afec5888a9b7c84c10d836a6d86e7abdfaa91bbc8229e091603cc1f61939_prof);

        
        $__internal_c5b401415cb2b12ebc51eea40b79aff6758bbd869ae6d375e8d71ee3db0786b4->leave($__internal_c5b401415cb2b12ebc51eea40b79aff6758bbd869ae6d375e8d71ee3db0786b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_717d1f91ce23d30c913bdb550c4cd8996aa68a425adfafcef369a8bb7c8986a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717d1f91ce23d30c913bdb550c4cd8996aa68a425adfafcef369a8bb7c8986a6->enter($__internal_717d1f91ce23d30c913bdb550c4cd8996aa68a425adfafcef369a8bb7c8986a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b46f02dccf3a6ddcd9b9f43140af84ddbf71904f60af26e5f96021f49c53832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b46f02dccf3a6ddcd9b9f43140af84ddbf71904f60af26e5f96021f49c53832->enter($__internal_4b46f02dccf3a6ddcd9b9f43140af84ddbf71904f60af26e5f96021f49c53832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b46f02dccf3a6ddcd9b9f43140af84ddbf71904f60af26e5f96021f49c53832->leave($__internal_4b46f02dccf3a6ddcd9b9f43140af84ddbf71904f60af26e5f96021f49c53832_prof);

        
        $__internal_717d1f91ce23d30c913bdb550c4cd8996aa68a425adfafcef369a8bb7c8986a6->leave($__internal_717d1f91ce23d30c913bdb550c4cd8996aa68a425adfafcef369a8bb7c8986a6_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:produit:show.html.twig";
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
", "CoreCagnotteBundle:produit:show.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/produit/show.html.twig");
    }
}
