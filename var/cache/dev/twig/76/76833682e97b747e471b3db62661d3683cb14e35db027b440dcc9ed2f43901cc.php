<?php

/* CoreCagnotteBundle:fournisseur:index.html.twig */
class __TwigTemplate_bf2accfe2c98a82c432fb8ed7678d835dc93855dd877a742a157dd734930e3f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:fournisseur:index.html.twig", 1);
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
        $__internal_b6372d4103da11a0f35b37b59d6ecbbea29037102decf7fcbb436f5880394249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6372d4103da11a0f35b37b59d6ecbbea29037102decf7fcbb436f5880394249->enter($__internal_b6372d4103da11a0f35b37b59d6ecbbea29037102decf7fcbb436f5880394249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:fournisseur:index.html.twig"));

        $__internal_339182a37906cce65e3166fa8b255f549506bbd6d7ecd918ac8104c697d3b3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339182a37906cce65e3166fa8b255f549506bbd6d7ecd918ac8104c697d3b3df->enter($__internal_339182a37906cce65e3166fa8b255f549506bbd6d7ecd918ac8104c697d3b3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:fournisseur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6372d4103da11a0f35b37b59d6ecbbea29037102decf7fcbb436f5880394249->leave($__internal_b6372d4103da11a0f35b37b59d6ecbbea29037102decf7fcbb436f5880394249_prof);

        
        $__internal_339182a37906cce65e3166fa8b255f549506bbd6d7ecd918ac8104c697d3b3df->leave($__internal_339182a37906cce65e3166fa8b255f549506bbd6d7ecd918ac8104c697d3b3df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b2b9c2ed705d686e8a6ba9ba314b6da04542adc7dc8e30ac3a7a46631d34382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2b9c2ed705d686e8a6ba9ba314b6da04542adc7dc8e30ac3a7a46631d34382->enter($__internal_5b2b9c2ed705d686e8a6ba9ba314b6da04542adc7dc8e30ac3a7a46631d34382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_678e522d628033a42c41553381b8a02680f49f6705c78942d07a19418e583b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678e522d628033a42c41553381b8a02680f49f6705c78942d07a19418e583b48->enter($__internal_678e522d628033a42c41553381b8a02680f49f6705c78942d07a19418e583b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idfournisseur</th>
                <th>Nomfournisseur</th>
                <th>Contactfournisseur</th>
                <th>Villefournisseur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) ? $context["fournisseurs"] : $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_show", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "idFournisseur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nomFournisseur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "contactFournisseur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "villeFournisseur", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_show", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_new");
        echo "\">Create a new fournisseur</a>
        </li>
    </ul>
";
        
        $__internal_678e522d628033a42c41553381b8a02680f49f6705c78942d07a19418e583b48->leave($__internal_678e522d628033a42c41553381b8a02680f49f6705c78942d07a19418e583b48_prof);

        
        $__internal_5b2b9c2ed705d686e8a6ba9ba314b6da04542adc7dc8e30ac3a7a46631d34382->leave($__internal_5b2b9c2ed705d686e8a6ba9ba314b6da04542adc7dc8e30ac3a7a46631d34382_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:fournisseur:index.html.twig";
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
    <h1>Fournisseurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idfournisseur</th>
                <th>Nomfournisseur</th>
                <th>Contactfournisseur</th>
                <th>Villefournisseur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fournisseur in fournisseurs %}
            <tr>
                <td><a href=\"{{ path('fournisseur_show', { 'id': fournisseur.id }) }}\">{{ fournisseur.id }}</a></td>
                <td>{{ fournisseur.idFournisseur }}</td>
                <td>{{ fournisseur.nomFournisseur }}</td>
                <td>{{ fournisseur.contactFournisseur }}</td>
                <td>{{ fournisseur.villeFournisseur }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fournisseur_show', { 'id': fournisseur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_new') }}\">Create a new fournisseur</a>
        </li>
    </ul>
{% endblock %}
", "CoreCagnotteBundle:fournisseur:index.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/fournisseur/index.html.twig");
    }
}
