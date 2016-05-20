<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0f4b060c8ff0756fd924a6165a9fa6be1e4a319f7d3ca16d19e13c19b559e1d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28565b7082fcf7128c34e7c0d9336990bd95a5aca199ea372a26b179fc6dd1e5 = $this->env->getExtension("native_profiler");
        $__internal_28565b7082fcf7128c34e7c0d9336990bd95a5aca199ea372a26b179fc6dd1e5->enter($__internal_28565b7082fcf7128c34e7c0d9336990bd95a5aca199ea372a26b179fc6dd1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28565b7082fcf7128c34e7c0d9336990bd95a5aca199ea372a26b179fc6dd1e5->leave($__internal_28565b7082fcf7128c34e7c0d9336990bd95a5aca199ea372a26b179fc6dd1e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f07ed15f66d11678164c2152a2d1550aa913026d52922c77379789bc482698 = $this->env->getExtension("native_profiler");
        $__internal_60f07ed15f66d11678164c2152a2d1550aa913026d52922c77379789bc482698->enter($__internal_60f07ed15f66d11678164c2152a2d1550aa913026d52922c77379789bc482698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <ul>
                    ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 9
                    echo "                        <li>
                            ";
                    // line 10
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                </ul>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    <div>
        ";
        // line 19
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "    </div>
";
        
        $__internal_60f07ed15f66d11678164c2152a2d1550aa913026d52922c77379789bc482698->leave($__internal_60f07ed15f66d11678164c2152a2d1550aa913026d52922c77379789bc482698_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24e38df00102c4b7aa8aaae169ce9324885d47db1967d194d3b9dcec89c88820 = $this->env->getExtension("native_profiler");
        $__internal_24e38df00102c4b7aa8aaae169ce9324885d47db1967d194d3b9dcec89c88820->enter($__internal_24e38df00102c4b7aa8aaae169ce9324885d47db1967d194d3b9dcec89c88820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "        ";
        
        $__internal_24e38df00102c4b7aa8aaae169ce9324885d47db1967d194d3b9dcec89c88820->leave($__internal_24e38df00102c4b7aa8aaae169ce9324885d47db1967d194d3b9dcec89c88820_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  96 => 19,  88 => 21,  86 => 19,  82 => 17,  79 => 16,  71 => 13,  62 => 10,  59 => 9,  55 => 8,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if app.request.hasPreviousSession %}*/
/*         {% for type, messages in app.session.flashbag.all() %}*/
/*             <div class="alert alert-{{ type }}">*/
/*                 <ul>*/
/*                     {% for message in messages %}*/
/*                         <li>*/
/*                             {{ message }}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
