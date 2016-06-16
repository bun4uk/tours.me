<?php

/* tour/archive.html.twig */
class __TwigTemplate_3821f14d35494a3862f441fd0f2e2ff7e25a8e8cdcd16dbe034f96968bfd87d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "tour/archive.html.twig", 2);
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
        $__internal_3928151009584a7a3e8689493665901d633fae2e65d5a91ffd380d79709ddf5a = $this->env->getExtension("native_profiler");
        $__internal_3928151009584a7a3e8689493665901d633fae2e65d5a91ffd380d79709ddf5a->enter($__internal_3928151009584a7a3e8689493665901d633fae2e65d5a91ffd380d79709ddf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/archive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3928151009584a7a3e8689493665901d633fae2e65d5a91ffd380d79709ddf5a->leave($__internal_3928151009584a7a3e8689493665901d633fae2e65d5a91ffd380d79709ddf5a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb14684c93a34753b15959db3bd7eea8b228d5649b3606c8f195889eb6d46694 = $this->env->getExtension("native_profiler");
        $__internal_bb14684c93a34753b15959db3bd7eea8b228d5649b3606c8f195889eb6d46694->enter($__internal_bb14684c93a34753b15959db3bd7eea8b228d5649b3606c8f195889eb6d46694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Welcome!</h1>
    <p> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("add tour");
        echo "\">Order a ticket</a></p>
    <h2>Orders archive</h2>
    <style>
        table, td, th {
            border: 1px solid;
        }

        th, td {
            padding: 5px;
        }
    </style>

    ";
        // line 18
        if (((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")) == null)) {
            // line 19
            echo "        No tours <br>
    ";
        } else {
            // line 21
            echo "
        <table>
            <thead>
            <th>Order ID</th>
            <th>Country</th>
            <th>Client name</th>
            <th>Client Email</th>
            <th>Tickets count</th>
            <th>Order's Time</th>
            </thead>
            <tbody>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
            foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
                // line 33
                echo "                <tr>
                    <td>
                        ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "id", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "type", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "name", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "count", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "time", array()), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tbody>
        </table>
    ";
        }
        // line 57
        echo "
";
        
        $__internal_bb14684c93a34753b15959db3bd7eea8b228d5649b3606c8f195889eb6d46694->leave($__internal_bb14684c93a34753b15959db3bd7eea8b228d5649b3606c8f195889eb6d46694_prof);

    }

    public function getTemplateName()
    {
        return "tour/archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 57,  125 => 54,  115 => 50,  109 => 47,  103 => 44,  97 => 41,  91 => 38,  85 => 35,  81 => 33,  77 => 32,  64 => 21,  60 => 19,  58 => 18,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/tour/archive.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Welcome!</h1>*/
/*     <p> <a href="{{ path('add tour') }}">Order a ticket</a></p>*/
/*     <h2>Orders archive</h2>*/
/*     <style>*/
/*         table, td, th {*/
/*             border: 1px solid;*/
/*         }*/
/* */
/*         th, td {*/
/*             padding: 5px;*/
/*         }*/
/*     </style>*/
/* */
/*     {% if tours == NULL %}*/
/*         No tours <br>*/
/*     {% else %}*/
/* */
/*         <table>*/
/*             <thead>*/
/*             <th>Order ID</th>*/
/*             <th>Country</th>*/
/*             <th>Client name</th>*/
/*             <th>Client Email</th>*/
/*             <th>Tickets count</th>*/
/*             <th>Order's Time</th>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for tour in tours %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ tour.id }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tour.type }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tour.name }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tour.email }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tour.count }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tour.time }}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
