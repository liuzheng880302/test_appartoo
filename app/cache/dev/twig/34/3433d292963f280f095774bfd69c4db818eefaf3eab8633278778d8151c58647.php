<?php

/* contacts/index.html.twig */
class __TwigTemplate_63c9da78e52664f6942a132c8c7d418d4e74e934b181fe3d16ebee746b031719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contacts/index.html.twig", 1);
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
        $__internal_b4b13bebb5e5d6444312a5f73c02ab7ab96e8ddba35f08390593254bf53377e1 = $this->env->getExtension("native_profiler");
        $__internal_b4b13bebb5e5d6444312a5f73c02ab7ab96e8ddba35f08390593254bf53377e1->enter($__internal_b4b13bebb5e5d6444312a5f73c02ab7ab96e8ddba35f08390593254bf53377e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b13bebb5e5d6444312a5f73c02ab7ab96e8ddba35f08390593254bf53377e1->leave($__internal_b4b13bebb5e5d6444312a5f73c02ab7ab96e8ddba35f08390593254bf53377e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b90cd9c6955d7fc2a458ae67bc9611e82eb15b249f96ca144e4d1889f4ae9b0b = $this->env->getExtension("native_profiler");
        $__internal_b90cd9c6955d7fc2a458ae67bc9611e82eb15b249f96ca144e4d1889f4ae9b0b->enter($__internal_b90cd9c6955d7fc2a458ae67bc9611e82eb15b249f96ca144e4d1889f4ae9b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contacts list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Portable</th>
                <th>Adresse</th>
                <th>Site</th>
                <th>Id_user</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "portable", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "site", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "iduser", array()), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group-sm\">
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">show</a>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\">edit</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("contacts_new");
        echo "\" class=\"btn btn-info\">Create a new contact</a>

";
        
        $__internal_b90cd9c6955d7fc2a458ae67bc9611e82eb15b249f96ca144e4d1889f4ae9b0b->leave($__internal_b90cd9c6955d7fc2a458ae67bc9611e82eb15b249f96ca144e4d1889f4ae9b0b_prof);

    }

    public function getTemplateName()
    {
        return "contacts/index.html.twig";
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
/*     <h1>Contacts list</h1>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Email</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Portable</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Site</th>*/
/*                 <th>Id_user</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contact in contacts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contacts_show', { 'id': contact.id }) }}">{{ contact.id }}</a></td>*/
/*                 <td>{{ contact.email }}</td>*/
/*                 <td>{{ contact.prenom }}</td>*/
/*                 <td>{{ contact.nom }}</td>*/
/*                 <td>{{ contact.portable }}</td>*/
/*                 <td>{{ contact.adresse }}</td>*/
/*                 <td>{{ contact.site }}</td>*/
/*                 <td>{{ contact.iduser }}</td>*/
/*                 <td>*/
/*                     <div class="btn-group-sm">*/
/*                         <a href="{{ path('contacts_show', { 'id': contact.id }) }}" class="btn btn-xs btn-success">show</a>*/
/*                         <a href="{{ path('contacts_edit', { 'id': contact.id }) }}" class="btn btn-xs btn-warning">edit</a>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path('contacts_new') }}" class="btn btn-info">Create a new contact</a>*/
/* */
/* {% endblock %}*/
/* */
