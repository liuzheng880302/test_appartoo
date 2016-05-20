<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cf04652ba87ea9021b49d9e4388ab8a5699d2ca0aea6ddb8cf2e2bd29faded1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a56358fd947e2a6bfc28bc01c123254232fdac4834e57e8c8fc9433b992c3495 = $this->env->getExtension("native_profiler");
        $__internal_a56358fd947e2a6bfc28bc01c123254232fdac4834e57e8c8fc9433b992c3495->enter($__internal_a56358fd947e2a6bfc28bc01c123254232fdac4834e57e8c8fc9433b992c3495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56358fd947e2a6bfc28bc01c123254232fdac4834e57e8c8fc9433b992c3495->leave($__internal_a56358fd947e2a6bfc28bc01c123254232fdac4834e57e8c8fc9433b992c3495_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a5e94de74f73929be70292f4d28a276f3538122c69c339d848cf8873cb6199e = $this->env->getExtension("native_profiler");
        $__internal_1a5e94de74f73929be70292f4d28a276f3538122c69c339d848cf8873cb6199e->enter($__internal_1a5e94de74f73929be70292f4d28a276f3538122c69c339d848cf8873cb6199e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a5e94de74f73929be70292f4d28a276f3538122c69c339d848cf8873cb6199e->leave($__internal_1a5e94de74f73929be70292f4d28a276f3538122c69c339d848cf8873cb6199e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e0f813c771e42eeaa3df65ce4cec5d8eb46090a911233f0f02ded33b17f7e05 = $this->env->getExtension("native_profiler");
        $__internal_6e0f813c771e42eeaa3df65ce4cec5d8eb46090a911233f0f02ded33b17f7e05->enter($__internal_6e0f813c771e42eeaa3df65ce4cec5d8eb46090a911233f0f02ded33b17f7e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e0f813c771e42eeaa3df65ce4cec5d8eb46090a911233f0f02ded33b17f7e05->leave($__internal_6e0f813c771e42eeaa3df65ce4cec5d8eb46090a911233f0f02ded33b17f7e05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_715bf3eebdd13bcbdde9335ad821c7c1910a676c2df8c64b803ac8d16e751469 = $this->env->getExtension("native_profiler");
        $__internal_715bf3eebdd13bcbdde9335ad821c7c1910a676c2df8c64b803ac8d16e751469->enter($__internal_715bf3eebdd13bcbdde9335ad821c7c1910a676c2df8c64b803ac8d16e751469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_715bf3eebdd13bcbdde9335ad821c7c1910a676c2df8c64b803ac8d16e751469->leave($__internal_715bf3eebdd13bcbdde9335ad821c7c1910a676c2df8c64b803ac8d16e751469_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
