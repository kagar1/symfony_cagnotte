<?php

/* CoreCagnotteBundle:produit:new.html.twig */
class __TwigTemplate_374108161819f408d5b71b65cb30ce9218c51852469b0b212518664a6d25ca67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreCagnotteBundle:produit:new.html.twig", 1);
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
        $__internal_ba1d171e8fa9dad16556861f3bac9e21496eb80d5018b72a4c0e40c69352d18d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1d171e8fa9dad16556861f3bac9e21496eb80d5018b72a4c0e40c69352d18d->enter($__internal_ba1d171e8fa9dad16556861f3bac9e21496eb80d5018b72a4c0e40c69352d18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:produit:new.html.twig"));

        $__internal_6a0ce2bb98a500a89e7024ea1657b1b01ce48e367115e658be763fb0e790cb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0ce2bb98a500a89e7024ea1657b1b01ce48e367115e658be763fb0e790cb5f->enter($__internal_6a0ce2bb98a500a89e7024ea1657b1b01ce48e367115e658be763fb0e790cb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:produit:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1d171e8fa9dad16556861f3bac9e21496eb80d5018b72a4c0e40c69352d18d->leave($__internal_ba1d171e8fa9dad16556861f3bac9e21496eb80d5018b72a4c0e40c69352d18d_prof);

        
        $__internal_6a0ce2bb98a500a89e7024ea1657b1b01ce48e367115e658be763fb0e790cb5f->leave($__internal_6a0ce2bb98a500a89e7024ea1657b1b01ce48e367115e658be763fb0e790cb5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ce2e681a98027d51e737f954864031d9cbc53995817a142c6af5fa3514244d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce2e681a98027d51e737f954864031d9cbc53995817a142c6af5fa3514244d1->enter($__internal_3ce2e681a98027d51e737f954864031d9cbc53995817a142c6af5fa3514244d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b60e5212bc06e2b5201b306536b0a4c7a8a4e9b09f38feae37ddb2e9d6976968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60e5212bc06e2b5201b306536b0a4c7a8a4e9b09f38feae37ddb2e9d6976968->enter($__internal_b60e5212bc06e2b5201b306536b0a4c7a8a4e9b09f38feae37ddb2e9d6976968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b60e5212bc06e2b5201b306536b0a4c7a8a4e9b09f38feae37ddb2e9d6976968->leave($__internal_b60e5212bc06e2b5201b306536b0a4c7a8a4e9b09f38feae37ddb2e9d6976968_prof);

        
        $__internal_3ce2e681a98027d51e737f954864031d9cbc53995817a142c6af5fa3514244d1->leave($__internal_3ce2e681a98027d51e737f954864031d9cbc53995817a142c6af5fa3514244d1_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:produit:new.html.twig";
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
", "CoreCagnotteBundle:produit:new.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/produit/new.html.twig");
    }
}
