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
        $__internal_e0bf52b81a6291509a3adb209bcf2d8172271ca5c6eb1504943fec14c43df0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bf52b81a6291509a3adb209bcf2d8172271ca5c6eb1504943fec14c43df0bb->enter($__internal_e0bf52b81a6291509a3adb209bcf2d8172271ca5c6eb1504943fec14c43df0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bb3718f595d6e0a01eac7db933c925f041ac7a12beb6aa39c422fed3eeed479a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3718f595d6e0a01eac7db933c925f041ac7a12beb6aa39c422fed3eeed479a->enter($__internal_bb3718f595d6e0a01eac7db933c925f041ac7a12beb6aa39c422fed3eeed479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e0bf52b81a6291509a3adb209bcf2d8172271ca5c6eb1504943fec14c43df0bb->leave($__internal_e0bf52b81a6291509a3adb209bcf2d8172271ca5c6eb1504943fec14c43df0bb_prof);

        
        $__internal_bb3718f595d6e0a01eac7db933c925f041ac7a12beb6aa39c422fed3eeed479a->leave($__internal_bb3718f595d6e0a01eac7db933c925f041ac7a12beb6aa39c422fed3eeed479a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_139a283b076fd5a13a6d631d3fd553d03d1898aaa98e7f514ab5e9de2239ba27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139a283b076fd5a13a6d631d3fd553d03d1898aaa98e7f514ab5e9de2239ba27->enter($__internal_139a283b076fd5a13a6d631d3fd553d03d1898aaa98e7f514ab5e9de2239ba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1afe350378126ddcee736182c7c83d0d31f68fb60808ca56f20e7e21b4d918e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afe350378126ddcee736182c7c83d0d31f68fb60808ca56f20e7e21b4d918e6->enter($__internal_1afe350378126ddcee736182c7c83d0d31f68fb60808ca56f20e7e21b4d918e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1afe350378126ddcee736182c7c83d0d31f68fb60808ca56f20e7e21b4d918e6->leave($__internal_1afe350378126ddcee736182c7c83d0d31f68fb60808ca56f20e7e21b4d918e6_prof);

        
        $__internal_139a283b076fd5a13a6d631d3fd553d03d1898aaa98e7f514ab5e9de2239ba27->leave($__internal_139a283b076fd5a13a6d631d3fd553d03d1898aaa98e7f514ab5e9de2239ba27_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cf03d86fcba9bb074dd916f86b8965fcab4f0cdf22e6eea924a964ffae233d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf03d86fcba9bb074dd916f86b8965fcab4f0cdf22e6eea924a964ffae233d3->enter($__internal_3cf03d86fcba9bb074dd916f86b8965fcab4f0cdf22e6eea924a964ffae233d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8dba2fd71a41117d9d476d293626c0496545e2ed7a61055d25e6007274e5d9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dba2fd71a41117d9d476d293626c0496545e2ed7a61055d25e6007274e5d9bd->enter($__internal_8dba2fd71a41117d9d476d293626c0496545e2ed7a61055d25e6007274e5d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8dba2fd71a41117d9d476d293626c0496545e2ed7a61055d25e6007274e5d9bd->leave($__internal_8dba2fd71a41117d9d476d293626c0496545e2ed7a61055d25e6007274e5d9bd_prof);

        
        $__internal_3cf03d86fcba9bb074dd916f86b8965fcab4f0cdf22e6eea924a964ffae233d3->leave($__internal_3cf03d86fcba9bb074dd916f86b8965fcab4f0cdf22e6eea924a964ffae233d3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_68344353a6f4a761b6dee06fe46fa14a6e76fa496b001c877850ad43fd16bdbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68344353a6f4a761b6dee06fe46fa14a6e76fa496b001c877850ad43fd16bdbd->enter($__internal_68344353a6f4a761b6dee06fe46fa14a6e76fa496b001c877850ad43fd16bdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d62b835821aa9b82b648041a4b5a2dfd60b973710422736626085d0845b452f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62b835821aa9b82b648041a4b5a2dfd60b973710422736626085d0845b452f3->enter($__internal_d62b835821aa9b82b648041a4b5a2dfd60b973710422736626085d0845b452f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d62b835821aa9b82b648041a4b5a2dfd60b973710422736626085d0845b452f3->leave($__internal_d62b835821aa9b82b648041a4b5a2dfd60b973710422736626085d0845b452f3_prof);

        
        $__internal_68344353a6f4a761b6dee06fe46fa14a6e76fa496b001c877850ad43fd16bdbd->leave($__internal_68344353a6f4a761b6dee06fe46fa14a6e76fa496b001c877850ad43fd16bdbd_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
