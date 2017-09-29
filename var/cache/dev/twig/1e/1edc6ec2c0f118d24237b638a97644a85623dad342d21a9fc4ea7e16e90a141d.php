<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ebae816fd1156f5046be1c76889a36b567d9959762a8dd75a3ba623a17fd264f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bc2e96fd7dacfb6753cae24b9383e57481e2a946bfc3a8a2cf8b477cad681ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc2e96fd7dacfb6753cae24b9383e57481e2a946bfc3a8a2cf8b477cad681ce->enter($__internal_3bc2e96fd7dacfb6753cae24b9383e57481e2a946bfc3a8a2cf8b477cad681ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_b3c84624d771467fddb77322fb309fe3de89ce229bcb0f9cf625d5b4a39fcf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c84624d771467fddb77322fb309fe3de89ce229bcb0f9cf625d5b4a39fcf54->enter($__internal_b3c84624d771467fddb77322fb309fe3de89ce229bcb0f9cf625d5b4a39fcf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3bc2e96fd7dacfb6753cae24b9383e57481e2a946bfc3a8a2cf8b477cad681ce->leave($__internal_3bc2e96fd7dacfb6753cae24b9383e57481e2a946bfc3a8a2cf8b477cad681ce_prof);

        
        $__internal_b3c84624d771467fddb77322fb309fe3de89ce229bcb0f9cf625d5b4a39fcf54->leave($__internal_b3c84624d771467fddb77322fb309fe3de89ce229bcb0f9cf625d5b4a39fcf54_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6958739dfe4ce8e92a829f2f75a655d4b50c270a33644fa6a9e7d116e854ed4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6958739dfe4ce8e92a829f2f75a655d4b50c270a33644fa6a9e7d116e854ed4a->enter($__internal_6958739dfe4ce8e92a829f2f75a655d4b50c270a33644fa6a9e7d116e854ed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5548e4566235dccbcf67a7c3abef233fe25bd0933bf0f3d123a883c57fdbe9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5548e4566235dccbcf67a7c3abef233fe25bd0933bf0f3d123a883c57fdbe9d7->enter($__internal_5548e4566235dccbcf67a7c3abef233fe25bd0933bf0f3d123a883c57fdbe9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5548e4566235dccbcf67a7c3abef233fe25bd0933bf0f3d123a883c57fdbe9d7->leave($__internal_5548e4566235dccbcf67a7c3abef233fe25bd0933bf0f3d123a883c57fdbe9d7_prof);

        
        $__internal_6958739dfe4ce8e92a829f2f75a655d4b50c270a33644fa6a9e7d116e854ed4a->leave($__internal_6958739dfe4ce8e92a829f2f75a655d4b50c270a33644fa6a9e7d116e854ed4a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d698ff8456202e810a96abe9d929e0c490cc4383aa679ebb73f888fe9b3465d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d698ff8456202e810a96abe9d929e0c490cc4383aa679ebb73f888fe9b3465d->enter($__internal_3d698ff8456202e810a96abe9d929e0c490cc4383aa679ebb73f888fe9b3465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4378a26671d474af412b0f7bf68975ec4a70a7a6c9ff27f3d10f2abb09e4485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4378a26671d474af412b0f7bf68975ec4a70a7a6c9ff27f3d10f2abb09e4485->enter($__internal_e4378a26671d474af412b0f7bf68975ec4a70a7a6c9ff27f3d10f2abb09e4485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e4378a26671d474af412b0f7bf68975ec4a70a7a6c9ff27f3d10f2abb09e4485->leave($__internal_e4378a26671d474af412b0f7bf68975ec4a70a7a6c9ff27f3d10f2abb09e4485_prof);

        
        $__internal_3d698ff8456202e810a96abe9d929e0c490cc4383aa679ebb73f888fe9b3465d->leave($__internal_3d698ff8456202e810a96abe9d929e0c490cc4383aa679ebb73f888fe9b3465d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d736860dd4463b7449e56ac2819df3a0858f781294b8d010147b90dcd5e836ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d736860dd4463b7449e56ac2819df3a0858f781294b8d010147b90dcd5e836ec->enter($__internal_d736860dd4463b7449e56ac2819df3a0858f781294b8d010147b90dcd5e836ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e930f37c91fb07c945d43d91a1573cc6123e5dfefd4095284b2a73185bff2748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e930f37c91fb07c945d43d91a1573cc6123e5dfefd4095284b2a73185bff2748->enter($__internal_e930f37c91fb07c945d43d91a1573cc6123e5dfefd4095284b2a73185bff2748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e930f37c91fb07c945d43d91a1573cc6123e5dfefd4095284b2a73185bff2748->leave($__internal_e930f37c91fb07c945d43d91a1573cc6123e5dfefd4095284b2a73185bff2748_prof);

        
        $__internal_d736860dd4463b7449e56ac2819df3a0858f781294b8d010147b90dcd5e836ec->leave($__internal_d736860dd4463b7449e56ac2819df3a0858f781294b8d010147b90dcd5e836ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
