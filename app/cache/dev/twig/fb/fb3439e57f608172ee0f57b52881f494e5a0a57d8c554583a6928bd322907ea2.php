<?php

/* user/index.html.twig */
class __TwigTemplate_3dafc5c77da07afbcf60d54284df4b2f368212809a158c6c401c681b34a73cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71361467acf7a1eae8d08e19ad788a804fa0be28bc090e75d9fb5456a0a4039c = $this->env->getExtension("native_profiler");
        $__internal_71361467acf7a1eae8d08e19ad788a804fa0be28bc090e75d9fb5456a0a4039c->enter($__internal_71361467acf7a1eae8d08e19ad788a804fa0be28bc090e75d9fb5456a0a4039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71361467acf7a1eae8d08e19ad788a804fa0be28bc090e75d9fb5456a0a4039c->leave($__internal_71361467acf7a1eae8d08e19ad788a804fa0be28bc090e75d9fb5456a0a4039c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4bcbad21b338e6543ac3a2d4deacbc772af8db23b4416e5b1770e1cc81bb86d = $this->env->getExtension("native_profiler");
        $__internal_a4bcbad21b338e6543ac3a2d4deacbc772af8db23b4416e5b1770e1cc81bb86d->enter($__internal_a4bcbad21b338e6543ac3a2d4deacbc772af8db23b4416e5b1770e1cc81bb86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Site</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "site", array()), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group-sm\">
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">show</a>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\">edit</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"btn btn-info\">Create a new user</a>
";
        
        $__internal_a4bcbad21b338e6543ac3a2d4deacbc772af8db23b4416e5b1770e1cc81bb86d->leave($__internal_a4bcbad21b338e6543ac3a2d4deacbc772af8db23b4416e5b1770e1cc81bb86d_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  117 => 39,  106 => 34,  102 => 33,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Username</th>*/
/*                 <th>Email</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Telephone</th>*/
/*                 <th>Site</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                 <td>{{ user.username }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.prenom }}</td>*/
/*                 <td>{{ user.nom }}</td>*/
/*                 <td>{{ user.adresse }}</td>*/
/*                 <td>{{ user.telephone }}</td>*/
/*                 <td>{{ user.site }}</td>*/
/*                 <td>*/
/*                     <div class="btn-group-sm">*/
/*                         <a href="{{ path('user_show', { 'id': user.id }) }}" class="btn btn-xs btn-success">show</a>*/
/*                         <a href="{{ path('user_edit', { 'id': user.id }) }}" class="btn btn-xs btn-warning">edit</a>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*             <a href="{{ path('user_new') }}" class="btn btn-info">Create a new user</a>*/
/* {% endblock %}*/
/* */
