<?php

/* periferico/index.code.twig */
class __TwigTemplate_b730db12e14aa94754603d1eab76f2d03f1350f9bd8e72c64b6353988de98282 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "periferico/index.code.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Periféricos <a href=\"/periferico/novo\" class=\"fa fa-plus pull-right\"></a></h3>

                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Patr.</th>
                                <th>Equipamento</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Local</th>
                                <th>nfe</th>
                                <th>Data Compra </th>
                                <th>Valor </th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["periferico"]) {
            // line 28
            echo "                            <tr>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periferico"], "Patrimonio", array()), "num_patrimonial", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periferico"], "Equipamento", array()), "nome", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periferico"], "Equipamento", array()), "modelo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["periferico"], "Equipamento", array()), "Marca", array(), "method"), "nome", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["periferico"], "Patrimonio", array()), "Local", array()), "nome", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periferico"], "Patrimonio", array()), "nfe", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periferico"], "Patrimonio", array()), "data_compra", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periferico"], "Patrimonio", array()), "valor", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"/periferico/duplicar?id=";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["periferico"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-share-alt text-info\"></a>
                                    <a href=\"/periferico/editar?id=";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["periferico"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-edit text-info\"></a>
                                    <a href=\"/periferico/deletar?id=";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["periferico"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-trash text-danger\"></a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periferico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "periferico/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  103 => 40,  99 => 39,  95 => 38,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  70 => 31,  66 => 30,  62 => 29,  59 => 28,  55 => 27,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "periferico/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\periferico\\index.code.twig");
    }
}
