<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_706943a73a69727d5e5e089c9a20f44ad1296883b63db329c8e7ca7100b2eb50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce76d7a89e69b9346ba829091adf992d6094ea24ac76c7cc3c6c25065a8c5fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce76d7a89e69b9346ba829091adf992d6094ea24ac76c7cc3c6c25065a8c5fa4->enter($__internal_ce76d7a89e69b9346ba829091adf992d6094ea24ac76c7cc3c6c25065a8c5fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_76b41278a63f20f92abe9e47d6405c685a2abf29120aab89f1a6dd46868de2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b41278a63f20f92abe9e47d6405c685a2abf29120aab89f1a6dd46868de2a9->enter($__internal_76b41278a63f20f92abe9e47d6405c685a2abf29120aab89f1a6dd46868de2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ce76d7a89e69b9346ba829091adf992d6094ea24ac76c7cc3c6c25065a8c5fa4->leave($__internal_ce76d7a89e69b9346ba829091adf992d6094ea24ac76c7cc3c6c25065a8c5fa4_prof);

        
        $__internal_76b41278a63f20f92abe9e47d6405c685a2abf29120aab89f1a6dd46868de2a9->leave($__internal_76b41278a63f20f92abe9e47d6405c685a2abf29120aab89f1a6dd46868de2a9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_faa896544f75255a00b349afc0164d5d4842e37af169c7427b461964372fc919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa896544f75255a00b349afc0164d5d4842e37af169c7427b461964372fc919->enter($__internal_faa896544f75255a00b349afc0164d5d4842e37af169c7427b461964372fc919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2ea907689b02f37480379933006b83304be7f6a7ab8aed28d219a5d61966694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ea907689b02f37480379933006b83304be7f6a7ab8aed28d219a5d61966694->enter($__internal_e2ea907689b02f37480379933006b83304be7f6a7ab8aed28d219a5d61966694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e2ea907689b02f37480379933006b83304be7f6a7ab8aed28d219a5d61966694->leave($__internal_e2ea907689b02f37480379933006b83304be7f6a7ab8aed28d219a5d61966694_prof);

        
        $__internal_faa896544f75255a00b349afc0164d5d4842e37af169c7427b461964372fc919->leave($__internal_faa896544f75255a00b349afc0164d5d4842e37af169c7427b461964372fc919_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\symfony_cagnotte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
