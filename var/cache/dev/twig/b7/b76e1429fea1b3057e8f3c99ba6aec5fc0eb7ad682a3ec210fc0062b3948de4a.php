<?php

/* utilisateur/new.html.twig */
class __TwigTemplate_28c837ca742b4f119b73420f9efd620ca9b630f38fd39a5f127ccf30b4059b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/new.html.twig", 1);
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
        $__internal_3e09f12ad548f58c39ed619b226a4b4e31dfc61c1edc5fc062125c52fe2ac5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e09f12ad548f58c39ed619b226a4b4e31dfc61c1edc5fc062125c52fe2ac5eb->enter($__internal_3e09f12ad548f58c39ed619b226a4b4e31dfc61c1edc5fc062125c52fe2ac5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $__internal_f6ddf25b6749330524e98e3c10fe56d2bd52273d374bf3e572bcf5f174baea3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ddf25b6749330524e98e3c10fe56d2bd52273d374bf3e572bcf5f174baea3c->enter($__internal_f6ddf25b6749330524e98e3c10fe56d2bd52273d374bf3e572bcf5f174baea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e09f12ad548f58c39ed619b226a4b4e31dfc61c1edc5fc062125c52fe2ac5eb->leave($__internal_3e09f12ad548f58c39ed619b226a4b4e31dfc61c1edc5fc062125c52fe2ac5eb_prof);

        
        $__internal_f6ddf25b6749330524e98e3c10fe56d2bd52273d374bf3e572bcf5f174baea3c->leave($__internal_f6ddf25b6749330524e98e3c10fe56d2bd52273d374bf3e572bcf5f174baea3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87f08c543d67f4eef2b652edeb12501551bb03afe16f41a41273b2b3e5b7e2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f08c543d67f4eef2b652edeb12501551bb03afe16f41a41273b2b3e5b7e2e8->enter($__internal_87f08c543d67f4eef2b652edeb12501551bb03afe16f41a41273b2b3e5b7e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a0992655e8f8c9cf4a48cb1d6ecca40a5073ace8f8c4fc72e680d0f6dcd9bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0992655e8f8c9cf4a48cb1d6ecca40a5073ace8f8c4fc72e680d0f6dcd9bb6->enter($__internal_9a0992655e8f8c9cf4a48cb1d6ecca40a5073ace8f8c4fc72e680d0f6dcd9bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateur creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9a0992655e8f8c9cf4a48cb1d6ecca40a5073ace8f8c4fc72e680d0f6dcd9bb6->leave($__internal_9a0992655e8f8c9cf4a48cb1d6ecca40a5073ace8f8c4fc72e680d0f6dcd9bb6_prof);

        
        $__internal_87f08c543d67f4eef2b652edeb12501551bb03afe16f41a41273b2b3e5b7e2e8->leave($__internal_87f08c543d67f4eef2b652edeb12501551bb03afe16f41a41273b2b3e5b7e2e8_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Utilisateur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('utilisateur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "utilisateur/new.html.twig", "C:\\wamp64\\www\\cagnotte\\app\\Resources\\views\\utilisateur\\new.html.twig");
    }
}
