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
        $__internal_d0d6d93a77768ca719d2f61c711ca3e50c6519830684b41a81cda679d228f114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d6d93a77768ca719d2f61c711ca3e50c6519830684b41a81cda679d228f114->enter($__internal_d0d6d93a77768ca719d2f61c711ca3e50c6519830684b41a81cda679d228f114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_079f50071317f42d63b4d4495769300cdffdbcbd05c3a60ef23a59e2836867f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079f50071317f42d63b4d4495769300cdffdbcbd05c3a60ef23a59e2836867f9->enter($__internal_079f50071317f42d63b4d4495769300cdffdbcbd05c3a60ef23a59e2836867f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
https://packagist.org/packages/doctrine/doctrine-fixtures-bundle
https://packagist.org/packages/friendsofsymfony/user-bundle";
        
        $__internal_d0d6d93a77768ca719d2f61c711ca3e50c6519830684b41a81cda679d228f114->leave($__internal_d0d6d93a77768ca719d2f61c711ca3e50c6519830684b41a81cda679d228f114_prof);

        
        $__internal_079f50071317f42d63b4d4495769300cdffdbcbd05c3a60ef23a59e2836867f9->leave($__internal_079f50071317f42d63b4d4495769300cdffdbcbd05c3a60ef23a59e2836867f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_baa8c7deec3dbb3db85aafec7a5230f9313e71542dee2cda0a25557c2a877b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa8c7deec3dbb3db85aafec7a5230f9313e71542dee2cda0a25557c2a877b91->enter($__internal_baa8c7deec3dbb3db85aafec7a5230f9313e71542dee2cda0a25557c2a877b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_668f532060bc77b518b2f159704ca55c959149f0467ebaf7cffad19daeb4eb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668f532060bc77b518b2f159704ca55c959149f0467ebaf7cffad19daeb4eb42->enter($__internal_668f532060bc77b518b2f159704ca55c959149f0467ebaf7cffad19daeb4eb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnotte";
        
        $__internal_668f532060bc77b518b2f159704ca55c959149f0467ebaf7cffad19daeb4eb42->leave($__internal_668f532060bc77b518b2f159704ca55c959149f0467ebaf7cffad19daeb4eb42_prof);

        
        $__internal_baa8c7deec3dbb3db85aafec7a5230f9313e71542dee2cda0a25557c2a877b91->leave($__internal_baa8c7deec3dbb3db85aafec7a5230f9313e71542dee2cda0a25557c2a877b91_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a6fe661681fa6e2343d4d03a69a7bfba872a63591984027f786c9eae907395b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6fe661681fa6e2343d4d03a69a7bfba872a63591984027f786c9eae907395b->enter($__internal_7a6fe661681fa6e2343d4d03a69a7bfba872a63591984027f786c9eae907395b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d83bc50e62a766543eb62052a4badfc18146018ef63a9df1162f918b73ebdd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83bc50e62a766543eb62052a4badfc18146018ef63a9df1162f918b73ebdd1c->enter($__internal_d83bc50e62a766543eb62052a4badfc18146018ef63a9df1162f918b73ebdd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d83bc50e62a766543eb62052a4badfc18146018ef63a9df1162f918b73ebdd1c->leave($__internal_d83bc50e62a766543eb62052a4badfc18146018ef63a9df1162f918b73ebdd1c_prof);

        
        $__internal_7a6fe661681fa6e2343d4d03a69a7bfba872a63591984027f786c9eae907395b->leave($__internal_7a6fe661681fa6e2343d4d03a69a7bfba872a63591984027f786c9eae907395b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0395fbd5cbf625af93863612e24dfd788d2c616725958fc84ac409c81ce85d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0395fbd5cbf625af93863612e24dfd788d2c616725958fc84ac409c81ce85d9->enter($__internal_c0395fbd5cbf625af93863612e24dfd788d2c616725958fc84ac409c81ce85d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d740ce712f1cd04af6bc1a54b374104dc741e1587dc10ce8f1f7dc646d6d18ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d740ce712f1cd04af6bc1a54b374104dc741e1587dc10ce8f1f7dc646d6d18ca->enter($__internal_d740ce712f1cd04af6bc1a54b374104dc741e1587dc10ce8f1f7dc646d6d18ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d740ce712f1cd04af6bc1a54b374104dc741e1587dc10ce8f1f7dc646d6d18ca->leave($__internal_d740ce712f1cd04af6bc1a54b374104dc741e1587dc10ce8f1f7dc646d6d18ca_prof);

        
        $__internal_c0395fbd5cbf625af93863612e24dfd788d2c616725958fc84ac409c81ce85d9->leave($__internal_c0395fbd5cbf625af93863612e24dfd788d2c616725958fc84ac409c81ce85d9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3df96e43a9864d74becac15f7e6fe1f9e83c94457802e9a9423b1e22b3b2ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3df96e43a9864d74becac15f7e6fe1f9e83c94457802e9a9423b1e22b3b2ec6->enter($__internal_c3df96e43a9864d74becac15f7e6fe1f9e83c94457802e9a9423b1e22b3b2ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00697a712bb6f7e4a50c704ecf1edbe7197c54fb41d00a3962387bfc103bb4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00697a712bb6f7e4a50c704ecf1edbe7197c54fb41d00a3962387bfc103bb4f1->enter($__internal_00697a712bb6f7e4a50c704ecf1edbe7197c54fb41d00a3962387bfc103bb4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_00697a712bb6f7e4a50c704ecf1edbe7197c54fb41d00a3962387bfc103bb4f1->leave($__internal_00697a712bb6f7e4a50c704ecf1edbe7197c54fb41d00a3962387bfc103bb4f1_prof);

        
        $__internal_c3df96e43a9864d74becac15f7e6fe1f9e83c94457802e9a9423b1e22b3b2ec6->leave($__internal_c3df96e43a9864d74becac15f7e6fe1f9e83c94457802e9a9423b1e22b3b2ec6_prof);

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
        return array (  118 => 11,  101 => 10,  84 => 6,  66 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
https://packagist.org/packages/doctrine/doctrine-fixtures-bundle
https://packagist.org/packages/friendsofsymfony/user-bundle", "base.html.twig", "C:\\wamp64\\www\\cagnotte\\app\\Resources\\views\\base.html.twig");
    }
}
