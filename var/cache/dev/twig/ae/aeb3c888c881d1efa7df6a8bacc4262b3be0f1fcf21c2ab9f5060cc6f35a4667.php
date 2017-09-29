<?php

/* categorie/new.html.twig */
class __TwigTemplate_b0e694036467a6ae5e97947cefb9b842f2395b3c79f54a06e507d334c7265f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/new.html.twig", 1);
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
        $__internal_a989701bb792216e362d8bc53fd69a2c3b38a6476e9d710b66d525e56c837301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a989701bb792216e362d8bc53fd69a2c3b38a6476e9d710b66d525e56c837301->enter($__internal_a989701bb792216e362d8bc53fd69a2c3b38a6476e9d710b66d525e56c837301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/new.html.twig"));

        $__internal_8904bb2467fda0ad05dff40ad738c7b8d399eaf3e52d86b53575fa24fc03d1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8904bb2467fda0ad05dff40ad738c7b8d399eaf3e52d86b53575fa24fc03d1c9->enter($__internal_8904bb2467fda0ad05dff40ad738c7b8d399eaf3e52d86b53575fa24fc03d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a989701bb792216e362d8bc53fd69a2c3b38a6476e9d710b66d525e56c837301->leave($__internal_a989701bb792216e362d8bc53fd69a2c3b38a6476e9d710b66d525e56c837301_prof);

        
        $__internal_8904bb2467fda0ad05dff40ad738c7b8d399eaf3e52d86b53575fa24fc03d1c9->leave($__internal_8904bb2467fda0ad05dff40ad738c7b8d399eaf3e52d86b53575fa24fc03d1c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d97af27369c023e4d43bd773af26504e032a9f440989cca532d8220ee59ab2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d97af27369c023e4d43bd773af26504e032a9f440989cca532d8220ee59ab2d->enter($__internal_6d97af27369c023e4d43bd773af26504e032a9f440989cca532d8220ee59ab2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5eaa78c8c9fb514ed1e7b5282f8aa16af7afc31231c2938f251b283d5cb10d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaa78c8c9fb514ed1e7b5282f8aa16af7afc31231c2938f251b283d5cb10d58->enter($__internal_5eaa78c8c9fb514ed1e7b5282f8aa16af7afc31231c2938f251b283d5cb10d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5eaa78c8c9fb514ed1e7b5282f8aa16af7afc31231c2938f251b283d5cb10d58->leave($__internal_5eaa78c8c9fb514ed1e7b5282f8aa16af7afc31231c2938f251b283d5cb10d58_prof);

        
        $__internal_6d97af27369c023e4d43bd773af26504e032a9f440989cca532d8220ee59ab2d->leave($__internal_6d97af27369c023e4d43bd773af26504e032a9f440989cca532d8220ee59ab2d_prof);

    }

    public function getTemplateName()
    {
        return "categorie/new.html.twig";
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
    <h1>Categorie creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "categorie/new.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\app\\Resources\\views\\categorie\\new.html.twig");
    }
}
