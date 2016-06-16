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
        $__internal_1554c10b47beaac8e1cd618ddf4a6de430e9c6204b897ffc1b944eb9a6ba4519 = $this->env->getExtension("native_profiler");
        $__internal_1554c10b47beaac8e1cd618ddf4a6de430e9c6204b897ffc1b944eb9a6ba4519->enter($__internal_1554c10b47beaac8e1cd618ddf4a6de430e9c6204b897ffc1b944eb9a6ba4519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/archive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1554c10b47beaac8e1cd618ddf4a6de430e9c6204b897ffc1b944eb9a6ba4519->leave($__internal_1554c10b47beaac8e1cd618ddf4a6de430e9c6204b897ffc1b944eb9a6ba4519_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c752308ed635dc106836c283fc91d4ed9a7a0600dcea7b6b82e4d6b8632cf8f = $this->env->getExtension("native_profiler");
        $__internal_1c752308ed635dc106836c283fc91d4ed9a7a0600dcea7b6b82e4d6b8632cf8f->enter($__internal_1c752308ed635dc106836c283fc91d4ed9a7a0600dcea7b6b82e4d6b8632cf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            </thead>
            <tbody>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
            foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
                // line 32
                echo "                <tr>
                    <td>
                        ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "id", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "type", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "name", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "count", array()), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </tbody>
        </table>
    ";
        }
        // line 53
        echo "
";
        
        $__internal_1c752308ed635dc106836c283fc91d4ed9a7a0600dcea7b6b82e4d6b8632cf8f->leave($__internal_1c752308ed635dc106836c283fc91d4ed9a7a0600dcea7b6b82e4d6b8632cf8f_prof);

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
        return array (  123 => 53,  118 => 50,  108 => 46,  102 => 43,  96 => 40,  90 => 37,  84 => 34,  80 => 32,  76 => 31,  64 => 21,  60 => 19,  58 => 18,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
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
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
