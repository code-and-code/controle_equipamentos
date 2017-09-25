<?php

/* computador/index.code.twig */
class __TwigTemplate_5e24ec983db50eaa0267c86d776761eb3b5f41ce04160a2ad1c52fb6d7d949b6 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "computador/index.code.twig", 1);
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
                    <h3 class=\"panel-title\">Computador <a href=\"/computador/novo\" class=\"fa fa-plus pull-right\"></a></h3>

                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Patr.</th>
                                <th>Equipamento</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Memoria</th>
                                <th>Placa</th>
                                <th>Hd</th>
                                <th>Processador</th>
                                <th>Placa De Vídeo</th>
                                <th>NFe</th>
                                <th>Data Compra</th>
                                <th>Valor</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["computador"]) {
            // line 32
            echo "                                <tr>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["computador"], "Patrimonio", array()), "num_patrimonial", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["computador"], "Equipamento", array(), "method"), "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["computador"], "Equipamento", array(), "method"), "modelo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["computador"], "Equipamento", array(), "method"), "Marca", array(), "method"), "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "memoria", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "placa", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "hd", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "processador", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "placa_video", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["computador"], "Patrimonio", array()), "nfe", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["computador"], "Patrimonio", array()), "data_compra", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["computador"], "Patrimonio", array()), "valor", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"/computador/duplicar?id=";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-share-alt text-info\"></a>
                                        <a href=\"/computador/editar?id=";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-edit text-info\"></a>
                                        <a href=\"/computador/deletar?id=";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["computador"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-trash text-danger\"></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['computador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "computador/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  123 => 48,  119 => 47,  115 => 46,  110 => 44,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  86 => 38,  82 => 37,  78 => 36,  74 => 35,  70 => 34,  66 => 33,  63 => 32,  59 => 31,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "computador/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\computador\\index.code.twig");
    }
}
