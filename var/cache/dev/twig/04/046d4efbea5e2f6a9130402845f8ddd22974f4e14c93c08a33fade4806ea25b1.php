<?php

/* :tour:archive.html.twig */
class __TwigTemplate_03ccae5d897da5b472a6a81f43ef385a5acf1637650c9a6190ed2a11d3bc5317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":tour:archive.html.twig", 2);
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
        $__internal_22a1fa7d48bb3d8838e477b35448b780d58d2290e82bc5de1d56357d7a817ab9 = $this->env->getExtension("native_profiler");
        $__internal_22a1fa7d48bb3d8838e477b35448b780d58d2290e82bc5de1d56357d7a817ab9->enter($__internal_22a1fa7d48bb3d8838e477b35448b780d58d2290e82bc5de1d56357d7a817ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tour:archive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a1fa7d48bb3d8838e477b35448b780d58d2290e82bc5de1d56357d7a817ab9->leave($__internal_22a1fa7d48bb3d8838e477b35448b780d58d2290e82bc5de1d56357d7a817ab9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdcd0792213e82df2bbe6e90bf7a1caf3f40d3e19a3e210b081bc87d78d4cbf8 = $this->env->getExtension("native_profiler");
        $__internal_bdcd0792213e82df2bbe6e90bf7a1caf3f40d3e19a3e210b081bc87d78d4cbf8->enter($__internal_bdcd0792213e82df2bbe6e90bf7a1caf3f40d3e19a3e210b081bc87d78d4cbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if (((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")) == null)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
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
        
        $__internal_bdcd0792213e82df2bbe6e90bf7a1caf3f40d3e19a3e210b081bc87d78d4cbf8->leave($__internal_bdcd0792213e82df2bbe6e90bf7a1caf3f40d3e19a3e210b081bc87d78d4cbf8_prof);

    }

    public function getTemplateName()
    {
        return ":tour:archive.html.twig";
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
