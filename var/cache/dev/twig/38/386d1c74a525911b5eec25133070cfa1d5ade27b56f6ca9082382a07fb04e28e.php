<?php

/* CoreCagnotteBundle:utilisateur:new.html.twig */
class __TwigTemplate_f12aacbdef5b4f0e3116b7bfd8668e7f019ded33f80d5aadaed95828f8e31877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CoreCagnotteBundle:utilisateur:new.html.twig", 1);
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
        $__internal_56441232037a8bd798fea71dbb978e8495834651d40403f1b5f384ab3a233d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56441232037a8bd798fea71dbb978e8495834651d40403f1b5f384ab3a233d55->enter($__internal_56441232037a8bd798fea71dbb978e8495834651d40403f1b5f384ab3a233d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:utilisateur:new.html.twig"));

        $__internal_523c98300c4356aa6c097fa0ac5ae801c52bd041f32a070d87b6e7a2cc70a18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523c98300c4356aa6c097fa0ac5ae801c52bd041f32a070d87b6e7a2cc70a18f->enter($__internal_523c98300c4356aa6c097fa0ac5ae801c52bd041f32a070d87b6e7a2cc70a18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCagnotteBundle:utilisateur:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56441232037a8bd798fea71dbb978e8495834651d40403f1b5f384ab3a233d55->leave($__internal_56441232037a8bd798fea71dbb978e8495834651d40403f1b5f384ab3a233d55_prof);

        
        $__internal_523c98300c4356aa6c097fa0ac5ae801c52bd041f32a070d87b6e7a2cc70a18f->leave($__internal_523c98300c4356aa6c097fa0ac5ae801c52bd041f32a070d87b6e7a2cc70a18f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_189dbfcf8ec18f4c4b08a65ee5cb643dbedca6932a4afd686d76e54e57b1804c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189dbfcf8ec18f4c4b08a65ee5cb643dbedca6932a4afd686d76e54e57b1804c->enter($__internal_189dbfcf8ec18f4c4b08a65ee5cb643dbedca6932a4afd686d76e54e57b1804c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_299c7c940c6d5cf7a6ebdc7cf16510f906989fddd1ad30e62d2ea94dc9584b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299c7c940c6d5cf7a6ebdc7cf16510f906989fddd1ad30e62d2ea94dc9584b25->enter($__internal_299c7c940c6d5cf7a6ebdc7cf16510f906989fddd1ad30e62d2ea94dc9584b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_299c7c940c6d5cf7a6ebdc7cf16510f906989fddd1ad30e62d2ea94dc9584b25->leave($__internal_299c7c940c6d5cf7a6ebdc7cf16510f906989fddd1ad30e62d2ea94dc9584b25_prof);

        
        $__internal_189dbfcf8ec18f4c4b08a65ee5cb643dbedca6932a4afd686d76e54e57b1804c->leave($__internal_189dbfcf8ec18f4c4b08a65ee5cb643dbedca6932a4afd686d76e54e57b1804c_prof);

    }

    public function getTemplateName()
    {
        return "CoreCagnotteBundle:utilisateur:new.html.twig";
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
", "CoreCagnotteBundle:utilisateur:new.html.twig", "C:\\wamp64\\www\\cagnotte\\src\\Core\\CagnotteBundle/Resources/views/utilisateur/new.html.twig");
    }
}
