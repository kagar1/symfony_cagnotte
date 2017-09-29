<?php

/* CoreCagnotteBundle:fournisseur:new.html.twig */
class __TwigTemplate_6238d3d24382e15833f05855633f9e1823cb9742801c0d147d323bf301a0ab1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:fournisseur:new.html.twig", 1);
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
        $__internal_3b1f19e4eb29742afb96ab7a7aa080acdc6657e56980fc0170099af8596090fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1f19e4eb29742afb96ab7a7aa080acdc6657e56980fc0170099af8596090fb->enter($__internal_3b1f19e4eb29742afb96ab7a7aa080acdc6657e56980fc0170099af8596090fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:fournisseur:new.html.twig"));

        $__internal_5c7c621f9bb9555f0bd59a849ecca62295a64ec152c80a103b8951e68eddda82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7c621f9bb9555f0bd59a849ecca62295a64ec152c80a103b8951e68eddda82->enter($__internal_5c7c621f9bb9555f0bd59a849ecca62295a64ec152c80a103b8951e68eddda82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:fournisseur:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1f19e4eb29742afb96ab7a7aa080acdc6657e56980fc0170099af8596090fb->leave($__internal_3b1f19e4eb29742afb96ab7a7aa080acdc6657e56980fc0170099af8596090fb_prof);

        
        $__internal_5c7c621f9bb9555f0bd59a849ecca62295a64ec152c80a103b8951e68eddda82->leave($__internal_5c7c621f9bb9555f0bd59a849ecca62295a64ec152c80a103b8951e68eddda82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2836dcb798db190d48fb249d31233c1293a35e7fbc2e6064376a9540b7951e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2836dcb798db190d48fb249d31233c1293a35e7fbc2e6064376a9540b7951e->enter($__internal_be2836dcb798db190d48fb249d31233c1293a35e7fbc2e6064376a9540b7951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f70344f810fb0dc7525262be17b44e1a8f240e0c99ffd0178fd99ae027166c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70344f810fb0dc7525262be17b44e1a8f240e0c99ffd0178fd99ae027166c22->enter($__internal_f70344f810fb0dc7525262be17b44e1a8f240e0c99ffd0178fd99ae027166c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f70344f810fb0dc7525262be17b44e1a8f240e0c99ffd0178fd99ae027166c22->leave($__internal_f70344f810fb0dc7525262be17b44e1a8f240e0c99ffd0178fd99ae027166c22_prof);

        
        $__internal_be2836dcb798db190d48fb249d31233c1293a35e7fbc2e6064376a9540b7951e->leave($__internal_be2836dcb798db190d48fb249d31233c1293a35e7fbc2e6064376a9540b7951e_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:fournisseur:new.html.twig";
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
    <h1>Fournisseur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "CoreCagnotteBundle:fournisseur:new.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\src\\Core\\CagnotteBundle/Resources/views/fournisseur/new.html.twig");
    }
}
