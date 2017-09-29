<?php

/* fournisseur/index.html.twig */
class __TwigTemplate_d190f7ea4bf8da384535855b9cc18e0ad812ab4c55fdaeaf0bd20b8ab98fe029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 1);
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
        $__internal_2920a9a26d611beec8f1951a642077ed8bd3b5d81f144ebb5c05e10f2006dc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2920a9a26d611beec8f1951a642077ed8bd3b5d81f144ebb5c05e10f2006dc9c->enter($__internal_2920a9a26d611beec8f1951a642077ed8bd3b5d81f144ebb5c05e10f2006dc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_a49258f19891a71fb774935e17498571c308dfadf3477bf3c95192135af63acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49258f19891a71fb774935e17498571c308dfadf3477bf3c95192135af63acd->enter($__internal_a49258f19891a71fb774935e17498571c308dfadf3477bf3c95192135af63acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2920a9a26d611beec8f1951a642077ed8bd3b5d81f144ebb5c05e10f2006dc9c->leave($__internal_2920a9a26d611beec8f1951a642077ed8bd3b5d81f144ebb5c05e10f2006dc9c_prof);

        
        $__internal_a49258f19891a71fb774935e17498571c308dfadf3477bf3c95192135af63acd->leave($__internal_a49258f19891a71fb774935e17498571c308dfadf3477bf3c95192135af63acd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ce8337c603c1f8e5f51b36860d4f4643638e3ce2103cddeb57e9649caf5f485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce8337c603c1f8e5f51b36860d4f4643638e3ce2103cddeb57e9649caf5f485->enter($__internal_7ce8337c603c1f8e5f51b36860d4f4643638e3ce2103cddeb57e9649caf5f485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f3a518ee6837b46a15013e79fe5262c3b3f18334cf04d38afcbb539a8095aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3a518ee6837b46a15013e79fe5262c3b3f18334cf04d38afcbb539a8095aae->enter($__internal_7f3a518ee6837b46a15013e79fe5262c3b3f18334cf04d38afcbb539a8095aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f3a518ee6837b46a15013e79fe5262c3b3f18334cf04d38afcbb539a8095aae->leave($__internal_7f3a518ee6837b46a15013e79fe5262c3b3f18334cf04d38afcbb539a8095aae_prof);

        
        $__internal_7ce8337c603c1f8e5f51b36860d4f4643638e3ce2103cddeb57e9649caf5f485->leave($__internal_7ce8337c603c1f8e5f51b36860d4f4643638e3ce2103cddeb57e9649caf5f485_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/index.html.twig";
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
", "fournisseur/index.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\app\\Resources\\views\\fournisseur\\index.html.twig");
    }
}
