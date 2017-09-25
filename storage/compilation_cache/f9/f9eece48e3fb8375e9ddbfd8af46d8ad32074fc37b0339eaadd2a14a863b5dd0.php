<?php

/* licenca/index.code.twig */
class __TwigTemplate_edef30d799321c06b541512e0c3c645d290f929b084edb2887b83ebdb46053e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "licenca/index.code.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Licenças <a href=\"/licenca/novo\" class=\"fa fa-plus pull-right\"></a></h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Serial</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["licenca"]) {
            // line 23
            echo "                                <tr>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["licenca"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["licenca"], "nome", array()), "html", null, true);
            echo "</td>
                                    <td><a href=\"/licenca/serial/por_licenca?id=";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["licenca"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["licenca"], "Serial", array())), "html", null, true);
            echo "</a></td>
                                    <td>
                                        <a href=\"licenca/editar?id=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["licenca"], "id", array()), "html", null, true);
            echo "\"  class=\"fa fa-edit text-info\"    ></a>
                                        <a href=\"licenca/deletar?id=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["licenca"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-trash text-danger\" ></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licenca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "licenca/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  76 => 29,  72 => 28,  65 => 26,  61 => 25,  57 => 24,  54 => 23,  50 => 22,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "licenca/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\licenca\\index.code.twig");
    }
}
