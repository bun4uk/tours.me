<?php

/* battery/archive.html.twig */
class __TwigTemplate_95eab9a23c1a2a72664cc8bf3cab8bce8dc85777ec9b80b360691e21a32fb02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "battery/archive.html.twig", 2);
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
        $__internal_1744e9d78a38e2c213849944671a50763cdc05e5705821c9b078ce17b8c07122 = $this->env->getExtension("native_profiler");
        $__internal_1744e9d78a38e2c213849944671a50763cdc05e5705821c9b078ce17b8c07122->enter($__internal_1744e9d78a38e2c213849944671a50763cdc05e5705821c9b078ce17b8c07122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battery/archive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1744e9d78a38e2c213849944671a50763cdc05e5705821c9b078ce17b8c07122->leave($__internal_1744e9d78a38e2c213849944671a50763cdc05e5705821c9b078ce17b8c07122_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a509a201bd3470a00d0c466509a85bacd5be47e9c96fe0340f90c4fd079a634 = $this->env->getExtension("native_profiler");
        $__internal_0a509a201bd3470a00d0c466509a85bacd5be47e9c96fe0340f90c4fd079a634->enter($__internal_0a509a201bd3470a00d0c466509a85bacd5be47e9c96fe0340f90c4fd079a634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Welcome to Recycle Batteries application</h1>
    <p>Click <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("add battery");
        echo "\">here</a> to add batteries to the box</p>
    <h2>Statistics</h2>
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
        if (((isset($context["batteries"]) ? $context["batteries"] : $this->getContext($context, "batteries")) == null)) {
            // line 19
            echo "        Box is empty <br>
        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lPupmsFutiE\" frameborder=\"0\" allowfullscreen></iframe>
    ";
        } else {
            // line 22
            echo "
        <table>
            <thead>
            <th>Battery type</th>
            <th>Totoal count</th>
            </thead>
            <tbody>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batteries"]) ? $context["batteries"] : $this->getContext($context, "batteries")));
            foreach ($context['_seq'] as $context["_key"] => $context["battery"]) {
                // line 30
                echo "                <tr>
                    <td>
                        ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["battery"], "b_type", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["battery"], "b_count", array()), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['battery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </tbody>
        </table>
    ";
        }
        // line 42
        echo "
";
        
        $__internal_0a509a201bd3470a00d0c466509a85bacd5be47e9c96fe0340f90c4fd079a634->leave($__internal_0a509a201bd3470a00d0c466509a85bacd5be47e9c96fe0340f90c4fd079a634_prof);

    }

    public function getTemplateName()
    {
        return "battery/archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  98 => 39,  88 => 35,  82 => 32,  78 => 30,  74 => 29,  65 => 22,  60 => 19,  58 => 18,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Welcome to Recycle Batteries application</h1>*/
/*     <p>Click <a href="{{ path('add battery') }}">here</a> to add batteries to the box</p>*/
/*     <h2>Statistics</h2>*/
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
/*     {% if batteries == NULL %}*/
/*         Box is empty <br>*/
/*         <iframe width="560" height="315" src="https://www.youtube.com/embed/lPupmsFutiE" frameborder="0" allowfullscreen></iframe>*/
/*     {% else %}*/
/* */
/*         <table>*/
/*             <thead>*/
/*             <th>Battery type</th>*/
/*             <th>Totoal count</th>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for battery in batteries %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ battery.b_type }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ battery.b_count }}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
