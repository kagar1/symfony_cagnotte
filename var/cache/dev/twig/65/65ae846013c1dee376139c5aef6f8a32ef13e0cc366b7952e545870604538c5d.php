<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b28e7fc67780c2c26119d54fb23f5103f49550c3368fda20e7ff9b850ba55182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f1731da27dee66a25db8eb50a49b95c5b6db8bc5c369e8dc855d398505f2760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1731da27dee66a25db8eb50a49b95c5b6db8bc5c369e8dc855d398505f2760->enter($__internal_5f1731da27dee66a25db8eb50a49b95c5b6db8bc5c369e8dc855d398505f2760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_7fae3a03bdede44f51d7f4a5cf5de6d23fddb8a9db691d27c2280fb1738926e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fae3a03bdede44f51d7f4a5cf5de6d23fddb8a9db691d27c2280fb1738926e0->enter($__internal_7fae3a03bdede44f51d7f4a5cf5de6d23fddb8a9db691d27c2280fb1738926e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5f1731da27dee66a25db8eb50a49b95c5b6db8bc5c369e8dc855d398505f2760->leave($__internal_5f1731da27dee66a25db8eb50a49b95c5b6db8bc5c369e8dc855d398505f2760_prof);

        
        $__internal_7fae3a03bdede44f51d7f4a5cf5de6d23fddb8a9db691d27c2280fb1738926e0->leave($__internal_7fae3a03bdede44f51d7f4a5cf5de6d23fddb8a9db691d27c2280fb1738926e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
