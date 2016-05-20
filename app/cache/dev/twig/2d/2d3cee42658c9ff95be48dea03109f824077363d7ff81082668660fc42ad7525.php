<?php

/* base.html.twig */
class __TwigTemplate_46c14de3ede526f027d1ce9462322ddfbf4cd7b749e2ca1eb35e8f5eb163098b extends Twig_Template
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
        $__internal_6b80a5ad1ae2a2e95a1c6af2a4cc05059d0e7c3ad9fd3b9e00aa97531fb9e336 = $this->env->getExtension("native_profiler");
        $__internal_6b80a5ad1ae2a2e95a1c6af2a4cc05059d0e7c3ad9fd3b9e00aa97531fb9e336->enter($__internal_6b80a5ad1ae2a2e95a1c6af2a4cc05059d0e7c3ad9fd3b9e00aa97531fb9e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    </head>
    <body>
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"/\">
                    ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 22
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 24
            echo "                        Visitor
                    ";
        }
        // line 26
        echo "                </a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"/\">Home</a></li>
                <li><a href=\"/user\">Users</a></li>
                <li><a href=\"/contacts\">Contacts</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"/register\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 36
            echo "                    <li><a href=\"/logout\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
                ";
        } else {
            // line 38
            echo "                    <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </nav>

    <div class=\"container\">
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    </div>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_6b80a5ad1ae2a2e95a1c6af2a4cc05059d0e7c3ad9fd3b9e00aa97531fb9e336->leave($__internal_6b80a5ad1ae2a2e95a1c6af2a4cc05059d0e7c3ad9fd3b9e00aa97531fb9e336_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_75d5dfe80101e1db6a1ce608ec462020419c21f782afb469a21b06e1e7e0d95b = $this->env->getExtension("native_profiler");
        $__internal_75d5dfe80101e1db6a1ce608ec462020419c21f782afb469a21b06e1e7e0d95b->enter($__internal_75d5dfe80101e1db6a1ce608ec462020419c21f782afb469a21b06e1e7e0d95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_75d5dfe80101e1db6a1ce608ec462020419c21f782afb469a21b06e1e7e0d95b->leave($__internal_75d5dfe80101e1db6a1ce608ec462020419c21f782afb469a21b06e1e7e0d95b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18e7727f2a285cc524a0e7d341d23ff97841fc73a0984f5b5a148a22d0f5ea9a = $this->env->getExtension("native_profiler");
        $__internal_18e7727f2a285cc524a0e7d341d23ff97841fc73a0984f5b5a148a22d0f5ea9a->enter($__internal_18e7727f2a285cc524a0e7d341d23ff97841fc73a0984f5b5a148a22d0f5ea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18e7727f2a285cc524a0e7d341d23ff97841fc73a0984f5b5a148a22d0f5ea9a->leave($__internal_18e7727f2a285cc524a0e7d341d23ff97841fc73a0984f5b5a148a22d0f5ea9a_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_875769d2286526a140500f52560d1ddcfed40184317e88263e34600cce5f4790 = $this->env->getExtension("native_profiler");
        $__internal_875769d2286526a140500f52560d1ddcfed40184317e88263e34600cce5f4790->enter($__internal_875769d2286526a140500f52560d1ddcfed40184317e88263e34600cce5f4790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_875769d2286526a140500f52560d1ddcfed40184317e88263e34600cce5f4790->leave($__internal_875769d2286526a140500f52560d1ddcfed40184317e88263e34600cce5f4790_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38745552d0f2667798e0b8a1d06048c6851b0309a0347bec5e52a87eb919d28a = $this->env->getExtension("native_profiler");
        $__internal_38745552d0f2667798e0b8a1d06048c6851b0309a0347bec5e52a87eb919d28a->enter($__internal_38745552d0f2667798e0b8a1d06048c6851b0309a0347bec5e52a87eb919d28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38745552d0f2667798e0b8a1d06048c6851b0309a0347bec5e52a87eb919d28a->leave($__internal_38745552d0f2667798e0b8a1d06048c6851b0309a0347bec5e52a87eb919d28a_prof);

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
        return array (  150 => 47,  139 => 45,  128 => 12,  116 => 11,  107 => 48,  105 => 47,  102 => 46,  100 => 45,  93 => 40,  89 => 38,  85 => 36,  83 => 35,  72 => 26,  68 => 24,  62 => 22,  60 => 21,  50 => 13,  48 => 12,  44 => 11,  40 => 10,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*     </head>*/
/*     <body>*/
/*     <nav class="navbar navbar-inverse">*/
/*         <div class="container-fluid">*/
/*             <div class="navbar-header">*/
/*                 <a class="navbar-brand" href="/">*/
/*                     {% if is_granted('ROLE_USER') %}*/
/*                     {{ app.user.username }}*/
/*                     {% else %}*/
/*                         Visitor*/
/*                     {% endif %}*/
/*                 </a>*/
/*             </div>*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="/">Home</a></li>*/
/*                 <li><a href="/user">Users</a></li>*/
/*                 <li><a href="/contacts">Contacts</a></li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                     <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
