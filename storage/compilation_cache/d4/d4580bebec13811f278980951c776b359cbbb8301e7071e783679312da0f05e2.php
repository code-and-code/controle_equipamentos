<?php

/* patrimonio/index.code.twig */
class __TwigTemplate_38b946f682100080ebda3b886aff051ba971a29c84fe712b48d4d694742a96df extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "patrimonio/index.code.twig", 1);
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
                    <h3 class=\"panel-title\">Patrimônios </h3>

                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Patr.</th>
                                <th>Tipo</th>
                                <th>Equipamento</th>
                                <th>Serial</th>
                                <th>Funcionario</th>
                                <th>Local</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["patrimonio"]) {
            // line 26
            echo "                            <tr>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["patrimonio"], "num_patrimonial", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["patrimonio"], "Item", array()), "Equipamento", array()), "Categoria", array()), "nome", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["patrimonio"], "Item", array()), "Equipamento", array()), "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["patrimonio"], "Item", array()), "Equipamento", array()), "modelo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["patrimonio"], "serial", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patrimonio"], "Funcionario", array(), "method"), "nome", array()), "html", null, true);
            echo " || ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["patrimonio"], "Funcionario", array(), "method"), "Setor", array(), "method"), "nome", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patrimonio"], "Local", array(), "method"), "nome", array()), "html", null, true);
            echo "</td>
                                <td>R\$ ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["patrimonio"], "valor", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patrimonio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return "patrimonio/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  88 => 33,  84 => 32,  78 => 31,  74 => 30,  68 => 29,  64 => 28,  60 => 27,  57 => 26,  53 => 25,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "patrimonio/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\patrimonio\\index.code.twig");
    }
}
