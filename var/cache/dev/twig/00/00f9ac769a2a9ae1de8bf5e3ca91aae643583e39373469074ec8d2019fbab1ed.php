<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
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
        $__internal_740e4ed0fb34ad97175ee3f5a08528547dd16207fd7a2f0e30b0244ea1765e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740e4ed0fb34ad97175ee3f5a08528547dd16207fd7a2f0e30b0244ea1765e34->enter($__internal_740e4ed0fb34ad97175ee3f5a08528547dd16207fd7a2f0e30b0244ea1765e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_091b18bf704b620872ac6fc3f9a13a4b0026ef1b1d54629e9e1d93a32a5f3acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091b18bf704b620872ac6fc3f9a13a4b0026ef1b1d54629e9e1d93a32a5f3acc->enter($__internal_091b18bf704b620872ac6fc3f9a13a4b0026ef1b1d54629e9e1d93a32a5f3acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_740e4ed0fb34ad97175ee3f5a08528547dd16207fd7a2f0e30b0244ea1765e34->leave($__internal_740e4ed0fb34ad97175ee3f5a08528547dd16207fd7a2f0e30b0244ea1765e34_prof);

        
        $__internal_091b18bf704b620872ac6fc3f9a13a4b0026ef1b1d54629e9e1d93a32a5f3acc->leave($__internal_091b18bf704b620872ac6fc3f9a13a4b0026ef1b1d54629e9e1d93a32a5f3acc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f76a01e94dd4eadf12bc9639f0e85450ccc53436146444b96f08a242183f0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f76a01e94dd4eadf12bc9639f0e85450ccc53436146444b96f08a242183f0f3->enter($__internal_5f76a01e94dd4eadf12bc9639f0e85450ccc53436146444b96f08a242183f0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09164513c15fc7a26e07ce5b44b4dc4f773abc628df55f59995f8e47f160c0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09164513c15fc7a26e07ce5b44b4dc4f773abc628df55f59995f8e47f160c0bd->enter($__internal_09164513c15fc7a26e07ce5b44b4dc4f773abc628df55f59995f8e47f160c0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_09164513c15fc7a26e07ce5b44b4dc4f773abc628df55f59995f8e47f160c0bd->leave($__internal_09164513c15fc7a26e07ce5b44b4dc4f773abc628df55f59995f8e47f160c0bd_prof);

        
        $__internal_5f76a01e94dd4eadf12bc9639f0e85450ccc53436146444b96f08a242183f0f3->leave($__internal_5f76a01e94dd4eadf12bc9639f0e85450ccc53436146444b96f08a242183f0f3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd719ddbbe93c1c6fe8df144fa08415f07a8196d7d3ad2e3801a1be7a83550ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd719ddbbe93c1c6fe8df144fa08415f07a8196d7d3ad2e3801a1be7a83550ed->enter($__internal_cd719ddbbe93c1c6fe8df144fa08415f07a8196d7d3ad2e3801a1be7a83550ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73dcbb062c3ebe3042f407a133abb0ec17c4fa5267b22255db55ccda6a2f051e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dcbb062c3ebe3042f407a133abb0ec17c4fa5267b22255db55ccda6a2f051e->enter($__internal_73dcbb062c3ebe3042f407a133abb0ec17c4fa5267b22255db55ccda6a2f051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_73dcbb062c3ebe3042f407a133abb0ec17c4fa5267b22255db55ccda6a2f051e->leave($__internal_73dcbb062c3ebe3042f407a133abb0ec17c4fa5267b22255db55ccda6a2f051e_prof);

        
        $__internal_cd719ddbbe93c1c6fe8df144fa08415f07a8196d7d3ad2e3801a1be7a83550ed->leave($__internal_cd719ddbbe93c1c6fe8df144fa08415f07a8196d7d3ad2e3801a1be7a83550ed_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e905e47c1eecf969a0bdbb33a9c1c271e0acb1ec02a79b2c7373ba77aa10b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e905e47c1eecf969a0bdbb33a9c1c271e0acb1ec02a79b2c7373ba77aa10b15->enter($__internal_6e905e47c1eecf969a0bdbb33a9c1c271e0acb1ec02a79b2c7373ba77aa10b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0c4ba633f3dd846d17d6df0b1aaa887e551fa524d48df62aa037bbb4ba808f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c4ba633f3dd846d17d6df0b1aaa887e551fa524d48df62aa037bbb4ba808f0->enter($__internal_f0c4ba633f3dd846d17d6df0b1aaa887e551fa524d48df62aa037bbb4ba808f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0c4ba633f3dd846d17d6df0b1aaa887e551fa524d48df62aa037bbb4ba808f0->leave($__internal_f0c4ba633f3dd846d17d6df0b1aaa887e551fa524d48df62aa037bbb4ba808f0_prof);

        
        $__internal_6e905e47c1eecf969a0bdbb33a9c1c271e0acb1ec02a79b2c7373ba77aa10b15->leave($__internal_6e905e47c1eecf969a0bdbb33a9c1c271e0acb1ec02a79b2c7373ba77aa10b15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
