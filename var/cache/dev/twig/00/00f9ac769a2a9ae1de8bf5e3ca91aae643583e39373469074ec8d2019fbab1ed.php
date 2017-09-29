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
        $__internal_7dba468bd3a27fa71b3a3b407c2b3b175229113a15d25e8281b0711abe98e0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dba468bd3a27fa71b3a3b407c2b3b175229113a15d25e8281b0711abe98e0c5->enter($__internal_7dba468bd3a27fa71b3a3b407c2b3b175229113a15d25e8281b0711abe98e0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7abdd2f3f2b4eb8a6fd5c9a2ff4dca635e6a59fe9c815f3997c1642265b8c8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abdd2f3f2b4eb8a6fd5c9a2ff4dca635e6a59fe9c815f3997c1642265b8c8a2->enter($__internal_7abdd2f3f2b4eb8a6fd5c9a2ff4dca635e6a59fe9c815f3997c1642265b8c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7dba468bd3a27fa71b3a3b407c2b3b175229113a15d25e8281b0711abe98e0c5->leave($__internal_7dba468bd3a27fa71b3a3b407c2b3b175229113a15d25e8281b0711abe98e0c5_prof);

        
        $__internal_7abdd2f3f2b4eb8a6fd5c9a2ff4dca635e6a59fe9c815f3997c1642265b8c8a2->leave($__internal_7abdd2f3f2b4eb8a6fd5c9a2ff4dca635e6a59fe9c815f3997c1642265b8c8a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85c40350640df7dbc9e69f2a5b8d445a31e80cfd6ec03810586a40b108212029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c40350640df7dbc9e69f2a5b8d445a31e80cfd6ec03810586a40b108212029->enter($__internal_85c40350640df7dbc9e69f2a5b8d445a31e80cfd6ec03810586a40b108212029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59705160187bd0db8bb695dff29652e081c421174b08e793bcc6334b4e923ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59705160187bd0db8bb695dff29652e081c421174b08e793bcc6334b4e923ec4->enter($__internal_59705160187bd0db8bb695dff29652e081c421174b08e793bcc6334b4e923ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_59705160187bd0db8bb695dff29652e081c421174b08e793bcc6334b4e923ec4->leave($__internal_59705160187bd0db8bb695dff29652e081c421174b08e793bcc6334b4e923ec4_prof);

        
        $__internal_85c40350640df7dbc9e69f2a5b8d445a31e80cfd6ec03810586a40b108212029->leave($__internal_85c40350640df7dbc9e69f2a5b8d445a31e80cfd6ec03810586a40b108212029_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_67eac9f1f4c4a2201205b1802a377b93fb5064a16dc2c4cd78b5d45b8e95a97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67eac9f1f4c4a2201205b1802a377b93fb5064a16dc2c4cd78b5d45b8e95a97b->enter($__internal_67eac9f1f4c4a2201205b1802a377b93fb5064a16dc2c4cd78b5d45b8e95a97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36ba20e1dfc8b3bdd2c4664fa04614744909086a689d2a6ab6cdcb555eb082bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ba20e1dfc8b3bdd2c4664fa04614744909086a689d2a6ab6cdcb555eb082bb->enter($__internal_36ba20e1dfc8b3bdd2c4664fa04614744909086a689d2a6ab6cdcb555eb082bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_36ba20e1dfc8b3bdd2c4664fa04614744909086a689d2a6ab6cdcb555eb082bb->leave($__internal_36ba20e1dfc8b3bdd2c4664fa04614744909086a689d2a6ab6cdcb555eb082bb_prof);

        
        $__internal_67eac9f1f4c4a2201205b1802a377b93fb5064a16dc2c4cd78b5d45b8e95a97b->leave($__internal_67eac9f1f4c4a2201205b1802a377b93fb5064a16dc2c4cd78b5d45b8e95a97b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cecf85cfef31edd246a0643b7798728a2787a25f750bbc0bdcc90677d04408eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecf85cfef31edd246a0643b7798728a2787a25f750bbc0bdcc90677d04408eb->enter($__internal_cecf85cfef31edd246a0643b7798728a2787a25f750bbc0bdcc90677d04408eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1780f6a402f3070e1b80a1ce76809ac1be47cb387e72cf4d2a64cca06ff442a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1780f6a402f3070e1b80a1ce76809ac1be47cb387e72cf4d2a64cca06ff442a6->enter($__internal_1780f6a402f3070e1b80a1ce76809ac1be47cb387e72cf4d2a64cca06ff442a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1780f6a402f3070e1b80a1ce76809ac1be47cb387e72cf4d2a64cca06ff442a6->leave($__internal_1780f6a402f3070e1b80a1ce76809ac1be47cb387e72cf4d2a64cca06ff442a6_prof);

        
        $__internal_cecf85cfef31edd246a0643b7798728a2787a25f750bbc0bdcc90677d04408eb->leave($__internal_cecf85cfef31edd246a0643b7798728a2787a25f750bbc0bdcc90677d04408eb_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
