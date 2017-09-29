<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_35df89c9c6c861db810ba6c9d80c1b554d5e69e737b9f94caff13f81e9027ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35df89c9c6c861db810ba6c9d80c1b554d5e69e737b9f94caff13f81e9027ece->enter($__internal_35df89c9c6c861db810ba6c9d80c1b554d5e69e737b9f94caff13f81e9027ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_53dc5e3b5604b8bd06d3deef6872f34dbd41d6617ee5360b853f39589deb0e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dc5e3b5604b8bd06d3deef6872f34dbd41d6617ee5360b853f39589deb0e7c->enter($__internal_53dc5e3b5604b8bd06d3deef6872f34dbd41d6617ee5360b853f39589deb0e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
dddddd";
        
        $__internal_35df89c9c6c861db810ba6c9d80c1b554d5e69e737b9f94caff13f81e9027ece->leave($__internal_35df89c9c6c861db810ba6c9d80c1b554d5e69e737b9f94caff13f81e9027ece_prof);

        
        $__internal_53dc5e3b5604b8bd06d3deef6872f34dbd41d6617ee5360b853f39589deb0e7c->leave($__internal_53dc5e3b5604b8bd06d3deef6872f34dbd41d6617ee5360b853f39589deb0e7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04ff5e7c5d6a47b5d4f7b089219b715121e551903d2aef321895267cbb78da8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ff5e7c5d6a47b5d4f7b089219b715121e551903d2aef321895267cbb78da8d->enter($__internal_04ff5e7c5d6a47b5d4f7b089219b715121e551903d2aef321895267cbb78da8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0cf0e500e487371b5dbeba835f483e3deb59d93cf7623567c067a08dc0678ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cf0e500e487371b5dbeba835f483e3deb59d93cf7623567c067a08dc0678ee->enter($__internal_f0cf0e500e487371b5dbeba835f483e3deb59d93cf7623567c067a08dc0678ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnotte";
        
        $__internal_f0cf0e500e487371b5dbeba835f483e3deb59d93cf7623567c067a08dc0678ee->leave($__internal_f0cf0e500e487371b5dbeba835f483e3deb59d93cf7623567c067a08dc0678ee_prof);

        
        $__internal_04ff5e7c5d6a47b5d4f7b089219b715121e551903d2aef321895267cbb78da8d->leave($__internal_04ff5e7c5d6a47b5d4f7b089219b715121e551903d2aef321895267cbb78da8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2188daa4365c1eea4e2fc7d87c4b4bb94bab321d1ba07afbd9232c27c0c1b9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2188daa4365c1eea4e2fc7d87c4b4bb94bab321d1ba07afbd9232c27c0c1b9c0->enter($__internal_2188daa4365c1eea4e2fc7d87c4b4bb94bab321d1ba07afbd9232c27c0c1b9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5355e26e57e188e3e08868a75bb11129724fd627de7097cb3f79375eb96f9726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5355e26e57e188e3e08868a75bb11129724fd627de7097cb3f79375eb96f9726->enter($__internal_5355e26e57e188e3e08868a75bb11129724fd627de7097cb3f79375eb96f9726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5355e26e57e188e3e08868a75bb11129724fd627de7097cb3f79375eb96f9726->leave($__internal_5355e26e57e188e3e08868a75bb11129724fd627de7097cb3f79375eb96f9726_prof);

        
        $__internal_2188daa4365c1eea4e2fc7d87c4b4bb94bab321d1ba07afbd9232c27c0c1b9c0->leave($__internal_2188daa4365c1eea4e2fc7d87c4b4bb94bab321d1ba07afbd9232c27c0c1b9c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b7d392331d7915c965813a2f8a2c68683484f17bf7d6da6d7d24ba3daccacbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7d392331d7915c965813a2f8a2c68683484f17bf7d6da6d7d24ba3daccacbd->enter($__internal_0b7d392331d7915c965813a2f8a2c68683484f17bf7d6da6d7d24ba3daccacbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f2777a51768f1d1d98423916fec390f46525f2bfa66b2d487cea1b3cfd031a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2777a51768f1d1d98423916fec390f46525f2bfa66b2d487cea1b3cfd031a9->enter($__internal_5f2777a51768f1d1d98423916fec390f46525f2bfa66b2d487cea1b3cfd031a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f2777a51768f1d1d98423916fec390f46525f2bfa66b2d487cea1b3cfd031a9->leave($__internal_5f2777a51768f1d1d98423916fec390f46525f2bfa66b2d487cea1b3cfd031a9_prof);

        
        $__internal_0b7d392331d7915c965813a2f8a2c68683484f17bf7d6da6d7d24ba3daccacbd->leave($__internal_0b7d392331d7915c965813a2f8a2c68683484f17bf7d6da6d7d24ba3daccacbd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7525aeaa5402a28c0a90c6aaa950cea3c3f20f18cb3691eacf3e07f95997d466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7525aeaa5402a28c0a90c6aaa950cea3c3f20f18cb3691eacf3e07f95997d466->enter($__internal_7525aeaa5402a28c0a90c6aaa950cea3c3f20f18cb3691eacf3e07f95997d466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a5f6dd97cdf5d655fe2b58f290508d818c623e6b4d38e57301a0718a03012f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f6dd97cdf5d655fe2b58f290508d818c623e6b4d38e57301a0718a03012f33->enter($__internal_a5f6dd97cdf5d655fe2b58f290508d818c623e6b4d38e57301a0718a03012f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a5f6dd97cdf5d655fe2b58f290508d818c623e6b4d38e57301a0718a03012f33->leave($__internal_a5f6dd97cdf5d655fe2b58f290508d818c623e6b4d38e57301a0718a03012f33_prof);

        
        $__internal_7525aeaa5402a28c0a90c6aaa950cea3c3f20f18cb3691eacf3e07f95997d466->leave($__internal_7525aeaa5402a28c0a90c6aaa950cea3c3f20f18cb3691eacf3e07f95997d466_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
dddddd", "base.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\app\\Resources\\views\\base.html.twig");
    }
}
