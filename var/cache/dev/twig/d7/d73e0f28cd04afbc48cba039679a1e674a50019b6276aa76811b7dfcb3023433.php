<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_1068454afee879c510c67f8283368bc2247c3ddac8d2eedf860f65bdb10cab3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a069bd43bbed3147d82c3c698401aad3b92cb3c6a5fd22ef2c7a6a96d68c87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a069bd43bbed3147d82c3c698401aad3b92cb3c6a5fd22ef2c7a6a96d68c87a->enter($__internal_7a069bd43bbed3147d82c3c698401aad3b92cb3c6a5fd22ef2c7a6a96d68c87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_00418b1fe012b9adb9ece97a009800553026b5763ebf85524532f48dceb84522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00418b1fe012b9adb9ece97a009800553026b5763ebf85524532f48dceb84522->enter($__internal_00418b1fe012b9adb9ece97a009800553026b5763ebf85524532f48dceb84522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a069bd43bbed3147d82c3c698401aad3b92cb3c6a5fd22ef2c7a6a96d68c87a->leave($__internal_7a069bd43bbed3147d82c3c698401aad3b92cb3c6a5fd22ef2c7a6a96d68c87a_prof);

        
        $__internal_00418b1fe012b9adb9ece97a009800553026b5763ebf85524532f48dceb84522->leave($__internal_00418b1fe012b9adb9ece97a009800553026b5763ebf85524532f48dceb84522_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9d73082c4e797aac267abd74016e8ea02a07172e3eb43e4baee16f4d5135917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d73082c4e797aac267abd74016e8ea02a07172e3eb43e4baee16f4d5135917->enter($__internal_c9d73082c4e797aac267abd74016e8ea02a07172e3eb43e4baee16f4d5135917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e692769aae738f169fe2209d8035ef9096eb559200d017eac1df70ef5375263e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e692769aae738f169fe2209d8035ef9096eb559200d017eac1df70ef5375263e->enter($__internal_e692769aae738f169fe2209d8035ef9096eb559200d017eac1df70ef5375263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e692769aae738f169fe2209d8035ef9096eb559200d017eac1df70ef5375263e->leave($__internal_e692769aae738f169fe2209d8035ef9096eb559200d017eac1df70ef5375263e_prof);

        
        $__internal_c9d73082c4e797aac267abd74016e8ea02a07172e3eb43e4baee16f4d5135917->leave($__internal_c9d73082c4e797aac267abd74016e8ea02a07172e3eb43e4baee16f4d5135917_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
