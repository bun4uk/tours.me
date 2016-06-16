<?php

/* :order:archive.html.twig */
class __TwigTemplate_d6c3295f21d6ea171e75228112de127d83072b0b3325326bb0515217b22a061a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":order:archive.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Welcome!</h1>
    <p> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("add order");
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
        if (((isset($context["orders"]) ? $context["orders"] : null) == null)) {
            // line 19
            echo "        No orders <br>
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
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 33
                echo "                <tr>
                    <td>
                        ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "type", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "name", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "count", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "time", array()), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tbody>
        </table>
    ";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return ":order:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  116 => 54,  106 => 50,  100 => 47,  94 => 44,  88 => 41,  82 => 38,  76 => 35,  72 => 33,  68 => 32,  55 => 21,  51 => 19,  49 => 18,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/order/archive.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Welcome!</h1>*/
/*     <p> <a href="{{ path('add order') }}">Order a ticket</a></p>*/
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
/*     {% if orders == NULL %}*/
/*         No orders <br>*/
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
/*             {% for order in orders %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ order.id }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ order.type }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ order.name }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ order.email }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ order.count }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ order.time }}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
