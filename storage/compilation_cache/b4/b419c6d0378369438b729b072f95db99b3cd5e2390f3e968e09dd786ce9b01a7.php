<?php

/* monitor/index.code.twig */
class __TwigTemplate_b3207447c6fa5bdfe9243cb1f8fd24ba3d6b7406aefa0ab04908ed244aad3946 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "monitor/index.code.twig", 1);
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
                    <h3 class=\"panel-title\">Monitores <a href=\"/monitor/novo\" class=\"fa fa-plus pull-right\"></a></h3>

                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Patr.</th>
                                <th>Equipamento</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Tela</th>
                                <th>Local</th>
                                <th>NFe</th>
                                <th>Data Compra</th>
                                <th>Valor</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["monitor"]) {
            // line 29
            echo "                                <tr>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["monitor"], "Patrimonio", array()), "num_patrimonial", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["monitor"], "Equipamento", array(), "method"), "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["monitor"], "Equipamento", array(), "method"), "modelo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["monitor"], "Equipamento", array(), "method"), "Marca", array(), "method"), "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitor"], "tela", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["monitor"], "Patrimonio", array()), "Local", array()), "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["monitor"], "Patrimonio", array()), "nfe", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["monitor"], "Patrimonio", array()), "data_compra", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["monitor"], "Patrimonio", array()), "valor", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"/monitor/duplicar?id=";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitor"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-share-alt text-info\"></a>
                                        <a href=\"/monitor/editar?id=";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitor"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-edit text-info\"></a>
                                        <a href=\"/monitor/deletar?id=";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitor"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-trash text-danger\"></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "monitor/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  108 => 42,  104 => 41,  100 => 40,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  67 => 31,  63 => 30,  60 => 29,  56 => 28,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "monitor/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\monitor\\index.code.twig");
    }
}
