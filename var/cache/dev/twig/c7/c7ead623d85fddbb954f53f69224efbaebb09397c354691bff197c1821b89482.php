<?php

/* CoreCagnotteBundle:produit:edit.html.twig */
class __TwigTemplate_4b6d60e8d7b8177805e291d2304cde8250f76b60568395a391dc73bc8d4abd31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreCagnotteBundle:produit:edit.html.twig", 1);
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
        $__internal_1c1780ad29372fb80bb62850d182c56321364f9bf1b53b9565ecab966391eff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1780ad29372fb80bb62850d182c56321364f9bf1b53b9565ecab966391eff5->enter($__internal_1c1780ad29372fb80bb62850d182c56321364f9bf1b53b9565ecab966391eff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:produit:edit.html.twig"));

        $__internal_2824617e0f4a71e0a6cba11e6e2b58186e57595d4a41fab291fe4b43a304ee0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2824617e0f4a71e0a6cba11e6e2b58186e57595d4a41fab291fe4b43a304ee0c->enter($__internal_2824617e0f4a71e0a6cba11e6e2b58186e57595d4a41fab291fe4b43a304ee0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:produit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c1780ad29372fb80bb62850d182c56321364f9bf1b53b9565ecab966391eff5->leave($__internal_1c1780ad29372fb80bb62850d182c56321364f9bf1b53b9565ecab966391eff5_prof);

        
        $__internal_2824617e0f4a71e0a6cba11e6e2b58186e57595d4a41fab291fe4b43a304ee0c->leave($__internal_2824617e0f4a71e0a6cba11e6e2b58186e57595d4a41fab291fe4b43a304ee0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d43a6d529394ab1d7ae18ab54c2bc71312af5499452ee58723f91167b9969d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d43a6d529394ab1d7ae18ab54c2bc71312af5499452ee58723f91167b9969d5->enter($__internal_9d43a6d529394ab1d7ae18ab54c2bc71312af5499452ee58723f91167b9969d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8220bcb4be4b0a11af3edd88320f99c740edd25ac0f51edd502b73fa3c1c4b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8220bcb4be4b0a11af3edd88320f99c740edd25ac0f51edd502b73fa3c1c4b00->enter($__internal_8220bcb4be4b0a11af3edd88320f99c740edd25ac0f51edd502b73fa3c1c4b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Produit edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8220bcb4be4b0a11af3edd88320f99c740edd25ac0f51edd502b73fa3c1c4b00->leave($__internal_8220bcb4be4b0a11af3edd88320f99c740edd25ac0f51edd502b73fa3c1c4b00_prof);

        
        $__internal_9d43a6d529394ab1d7ae18ab54c2bc71312af5499452ee58723f91167b9969d5->leave($__internal_9d43a6d529394ab1d7ae18ab54c2bc71312af5499452ee58723f91167b9969d5_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:produit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Produit edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('produit_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CoreCagnotteBundle:produit:edit.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/produit/edit.html.twig");
    }
}
