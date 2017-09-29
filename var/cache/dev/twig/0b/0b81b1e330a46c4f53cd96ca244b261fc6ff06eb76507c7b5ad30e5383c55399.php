<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e94c80d8a031e76e5b73abf7b4b6596185fab3e40c8bcb920f22ed4f6285698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e94c80d8a031e76e5b73abf7b4b6596185fab3e40c8bcb920f22ed4f6285698->enter($__internal_2e94c80d8a031e76e5b73abf7b4b6596185fab3e40c8bcb920f22ed4f6285698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f7ad75e2865b1f1811786a74079e24fc13f87742f35fae4de2a44ac2e644a46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ad75e2865b1f1811786a74079e24fc13f87742f35fae4de2a44ac2e644a46a->enter($__internal_f7ad75e2865b1f1811786a74079e24fc13f87742f35fae4de2a44ac2e644a46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2e94c80d8a031e76e5b73abf7b4b6596185fab3e40c8bcb920f22ed4f6285698->leave($__internal_2e94c80d8a031e76e5b73abf7b4b6596185fab3e40c8bcb920f22ed4f6285698_prof);

        
        $__internal_f7ad75e2865b1f1811786a74079e24fc13f87742f35fae4de2a44ac2e644a46a->leave($__internal_f7ad75e2865b1f1811786a74079e24fc13f87742f35fae4de2a44ac2e644a46a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_adf27709e43decef42e387f3963e2ceed2fdb5ddcf1c362fe39f50607ad205c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf27709e43decef42e387f3963e2ceed2fdb5ddcf1c362fe39f50607ad205c8->enter($__internal_adf27709e43decef42e387f3963e2ceed2fdb5ddcf1c362fe39f50607ad205c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2a1048d3128eb79dcf229d0f2ea731a299857c9972b3b5b8da71342aa3d90d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a1048d3128eb79dcf229d0f2ea731a299857c9972b3b5b8da71342aa3d90d5->enter($__internal_d2a1048d3128eb79dcf229d0f2ea731a299857c9972b3b5b8da71342aa3d90d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnotte";
        
        $__internal_d2a1048d3128eb79dcf229d0f2ea731a299857c9972b3b5b8da71342aa3d90d5->leave($__internal_d2a1048d3128eb79dcf229d0f2ea731a299857c9972b3b5b8da71342aa3d90d5_prof);

        
        $__internal_adf27709e43decef42e387f3963e2ceed2fdb5ddcf1c362fe39f50607ad205c8->leave($__internal_adf27709e43decef42e387f3963e2ceed2fdb5ddcf1c362fe39f50607ad205c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17be88978cee30b491b65fd2f71794a7d832c87dfdda0202468f1149af82a25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17be88978cee30b491b65fd2f71794a7d832c87dfdda0202468f1149af82a25f->enter($__internal_17be88978cee30b491b65fd2f71794a7d832c87dfdda0202468f1149af82a25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aff80da159120403132c88ec3d0fa808c61726d56413b303431ad542064fed92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff80da159120403132c88ec3d0fa808c61726d56413b303431ad542064fed92->enter($__internal_aff80da159120403132c88ec3d0fa808c61726d56413b303431ad542064fed92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aff80da159120403132c88ec3d0fa808c61726d56413b303431ad542064fed92->leave($__internal_aff80da159120403132c88ec3d0fa808c61726d56413b303431ad542064fed92_prof);

        
        $__internal_17be88978cee30b491b65fd2f71794a7d832c87dfdda0202468f1149af82a25f->leave($__internal_17be88978cee30b491b65fd2f71794a7d832c87dfdda0202468f1149af82a25f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a294c08aeb561dcaaebca4958f2439c63c4ae9e8fb3aef29d3e3125214c62621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a294c08aeb561dcaaebca4958f2439c63c4ae9e8fb3aef29d3e3125214c62621->enter($__internal_a294c08aeb561dcaaebca4958f2439c63c4ae9e8fb3aef29d3e3125214c62621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab7bf5796a09bac54a927fe4f5d377f0dfdad6806cfe4795ef848a140ddbb7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7bf5796a09bac54a927fe4f5d377f0dfdad6806cfe4795ef848a140ddbb7f1->enter($__internal_ab7bf5796a09bac54a927fe4f5d377f0dfdad6806cfe4795ef848a140ddbb7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab7bf5796a09bac54a927fe4f5d377f0dfdad6806cfe4795ef848a140ddbb7f1->leave($__internal_ab7bf5796a09bac54a927fe4f5d377f0dfdad6806cfe4795ef848a140ddbb7f1_prof);

        
        $__internal_a294c08aeb561dcaaebca4958f2439c63c4ae9e8fb3aef29d3e3125214c62621->leave($__internal_a294c08aeb561dcaaebca4958f2439c63c4ae9e8fb3aef29d3e3125214c62621_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e06400cac4fae4d5ca8f599b1f07e984af53e83eb8a9b95e3f6c037465df351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e06400cac4fae4d5ca8f599b1f07e984af53e83eb8a9b95e3f6c037465df351->enter($__internal_2e06400cac4fae4d5ca8f599b1f07e984af53e83eb8a9b95e3f6c037465df351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a324bd491bfe3ed2a5cf9f85898a5fc1aa9de6bf850a0ea8b7b9a212b8d7bd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a324bd491bfe3ed2a5cf9f85898a5fc1aa9de6bf850a0ea8b7b9a212b8d7bd52->enter($__internal_a324bd491bfe3ed2a5cf9f85898a5fc1aa9de6bf850a0ea8b7b9a212b8d7bd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a324bd491bfe3ed2a5cf9f85898a5fc1aa9de6bf850a0ea8b7b9a212b8d7bd52->leave($__internal_a324bd491bfe3ed2a5cf9f85898a5fc1aa9de6bf850a0ea8b7b9a212b8d7bd52_prof);

        
        $__internal_2e06400cac4fae4d5ca8f599b1f07e984af53e83eb8a9b95e3f6c037465df351->leave($__internal_2e06400cac4fae4d5ca8f599b1f07e984af53e83eb8a9b95e3f6c037465df351_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Cagnotte{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\app/Resources\\views/base.html.twig");
    }
}
