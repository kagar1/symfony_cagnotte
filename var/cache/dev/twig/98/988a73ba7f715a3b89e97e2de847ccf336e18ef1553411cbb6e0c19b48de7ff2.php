<?php

/* CoreCagnotteBundle:utilisateur:index.html.twig */
class __TwigTemplate_06f1c1c07419f847c7cf88c614954b0e5d6b965b410f5446f79165f155945f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:utilisateur:index.html.twig", 1);
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
        $__internal_bfcbb65ae717ab65a1c6104d94c76098782e5737d2fc583986f28930e3f5f69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcbb65ae717ab65a1c6104d94c76098782e5737d2fc583986f28930e3f5f69c->enter($__internal_bfcbb65ae717ab65a1c6104d94c76098782e5737d2fc583986f28930e3f5f69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:utilisateur:index.html.twig"));

        $__internal_0a5cd0bfb62ecee4133fdb1996febe08301e7910bb29d681cbea4ee5011fc3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5cd0bfb62ecee4133fdb1996febe08301e7910bb29d681cbea4ee5011fc3cc->enter($__internal_0a5cd0bfb62ecee4133fdb1996febe08301e7910bb29d681cbea4ee5011fc3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:utilisateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfcbb65ae717ab65a1c6104d94c76098782e5737d2fc583986f28930e3f5f69c->leave($__internal_bfcbb65ae717ab65a1c6104d94c76098782e5737d2fc583986f28930e3f5f69c_prof);

        
        $__internal_0a5cd0bfb62ecee4133fdb1996febe08301e7910bb29d681cbea4ee5011fc3cc->leave($__internal_0a5cd0bfb62ecee4133fdb1996febe08301e7910bb29d681cbea4ee5011fc3cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2b33ca5d3c5ee6e0d85ba83c47753cf372c64d466332c68a49c40be63ec4377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b33ca5d3c5ee6e0d85ba83c47753cf372c64d466332c68a49c40be63ec4377->enter($__internal_b2b33ca5d3c5ee6e0d85ba83c47753cf372c64d466332c68a49c40be63ec4377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f249d7dbcee3217208ac832a6ae42e4c01813ee230e33e48ce9738ae9c676c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f249d7dbcee3217208ac832a6ae42e4c01813ee230e33e48ce9738ae9c676c1->enter($__internal_0f249d7dbcee3217208ac832a6ae42e4c01813ee230e33e48ce9738ae9c676c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Datenaissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["utilisateur"], "dateNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["utilisateur"], "dateNaissance", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_edit", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_new");
        echo "\">Create a new utilisateur</a>
        </li>
    </ul>
";
        
        $__internal_0f249d7dbcee3217208ac832a6ae42e4c01813ee230e33e48ce9738ae9c676c1->leave($__internal_0f249d7dbcee3217208ac832a6ae42e4c01813ee230e33e48ce9738ae9c676c1_prof);

        
        $__internal_b2b33ca5d3c5ee6e0d85ba83c47753cf372c64d466332c68a49c40be63ec4377->leave($__internal_b2b33ca5d3c5ee6e0d85ba83c47753cf372c64d466332c68a49c40be63ec4377_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:utilisateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 41,  115 => 35,  109 => 32,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Utilisateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Datenaissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td><a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">{{ utilisateur.id }}</a></td>
                <td>{{ utilisateur.nom }}</td>
                <td>{{ utilisateur.prenom }}</td>
                <td>{{ utilisateur.telephone }}</td>
                <td>{{ utilisateur.adresse }}</td>
                <td>{{ utilisateur.email }}</td>
                <td>{% if utilisateur.dateNaissance %}{{ utilisateur.dateNaissance|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('utilisateur_new') }}\">Create a new utilisateur</a>
        </li>
    </ul>
{% endblock %}
", "CoreCagnotteBundle:utilisateur:index.html.twig", "C:\\wamp64\\www\\cagnotte\\src\\Core\\CagnotteBundle/Resources/views/utilisateur/index.html.twig");
    }
}
