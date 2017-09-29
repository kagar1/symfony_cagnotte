<?php

/* @CoreCagnotte/produit/new.html.twig */
class __TwigTemplate_0ed70b94651f773e6e2fff6bc05e21028e925dff138919b9e1e9e8b58f3eecbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@CoreCagnotte/produit/new.html.twig", 1);
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
        $__internal_214b0366e32005015fe881b2f0239f45c8812f7a24dca259e7876a0b834f536a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214b0366e32005015fe881b2f0239f45c8812f7a24dca259e7876a0b834f536a->enter($__internal_214b0366e32005015fe881b2f0239f45c8812f7a24dca259e7876a0b834f536a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/new.html.twig"));

        $__internal_38e724bd68c0d8ce237106b56c5689d906aae10258b1ea9db0cfacc15010854a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e724bd68c0d8ce237106b56c5689d906aae10258b1ea9db0cfacc15010854a->enter($__internal_38e724bd68c0d8ce237106b56c5689d906aae10258b1ea9db0cfacc15010854a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreCagnotte/produit/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214b0366e32005015fe881b2f0239f45c8812f7a24dca259e7876a0b834f536a->leave($__internal_214b0366e32005015fe881b2f0239f45c8812f7a24dca259e7876a0b834f536a_prof);

        
        $__internal_38e724bd68c0d8ce237106b56c5689d906aae10258b1ea9db0cfacc15010854a->leave($__internal_38e724bd68c0d8ce237106b56c5689d906aae10258b1ea9db0cfacc15010854a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82f2a1139bd4c5b98dd216c9001736cde772ef0b532049c9c5a5b4b7e68e4a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f2a1139bd4c5b98dd216c9001736cde772ef0b532049c9c5a5b4b7e68e4a95->enter($__internal_82f2a1139bd4c5b98dd216c9001736cde772ef0b532049c9c5a5b4b7e68e4a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08af7d21f6ee7b87210b3e4f0b65a498cda8ef9e46c29918c10c964ef3d4e0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08af7d21f6ee7b87210b3e4f0b65a498cda8ef9e46c29918c10c964ef3d4e0a8->enter($__internal_08af7d21f6ee7b87210b3e4f0b65a498cda8ef9e46c29918c10c964ef3d4e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Produit creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_08af7d21f6ee7b87210b3e4f0b65a498cda8ef9e46c29918c10c964ef3d4e0a8->leave($__internal_08af7d21f6ee7b87210b3e4f0b65a498cda8ef9e46c29918c10c964ef3d4e0a8_prof);

        
        $__internal_82f2a1139bd4c5b98dd216c9001736cde772ef0b532049c9c5a5b4b7e68e4a95->leave($__internal_82f2a1139bd4c5b98dd216c9001736cde772ef0b532049c9c5a5b4b7e68e4a95_prof);

    }

    public function getTemplateName()
    {
        return "@CoreCagnotte/produit/new.html.twig";
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
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <h1>Produit creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('produit_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@CoreCagnotte/produit/new.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle\\Resources\\views\\produit\\new.html.twig");
    }
}
