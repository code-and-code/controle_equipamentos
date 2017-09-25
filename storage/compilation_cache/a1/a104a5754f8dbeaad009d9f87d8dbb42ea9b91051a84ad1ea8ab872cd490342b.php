<?php

/* saida/create.code.twig */
class __TwigTemplate_d067e9440e7b6d58b60950b00a2aba6019bd1301ab8707d1c2b7dc7ead406f90 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "saida/create.code.twig", 1);
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
                    <h3 class=\"panel-title\">Saida | Criar</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"/saida/gravar\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"1\">
                                Equipamento
                            </label>
                            <select class=\"form-control\" name=\"equipamento_id\" id=\"select_equipamento\" >
                                <option value=\"null\">Disponiveis</option>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equipamentos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["equipamento"]) {
            // line 20
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "id", array()), "html", null, true);
            echo "\" data-qtd=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "qtd", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "nome", array()), "html", null, true);
            echo " || ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "modelo", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">
                                Funcionário
                            </label>
                            <select class=\"js-example-basic-single form-control\" name=\"funcionario_id\">
                                <option value=\"null\">Não se aplica</option>
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funcionarios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["funcionario"]) {
            // line 32
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcionario"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcionario"], "nome", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcionario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            </select>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-4\">
                                <label class=\"control-label\" for=\"4\">
                                    Data Saída
                                </label>
                                <input required class=\"form-control\" id=\"11\" placeholder=\"\" name=\"data_saida\" type=\"date\" value=\"\" >
                            </div>
                            <div class=\"col-xs-4\">
                                <label class=\"control-label\" for=\"4\">
                                    Qtd
                                </label>
                                <input required class=\"form-control\" id=\"10\" placeholder=\"\" name=\"qtd\" type=\"text\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "valor", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-xs-4\">
                                <label class=\"control-label\" for=\"4\">
                                    Setor
                                </label>
                                <select class=\"js-example-basic-single form-control\" name=\"setor_id\" id=\"1\" >
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["setores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["setor"]) {
            // line 55
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["setor"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["setor"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                </select>
                            </div>
                        </div>
                        <br>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            Cadastrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "saida/create.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 57,  121 => 55,  117 => 54,  107 => 47,  92 => 34,  81 => 32,  77 => 31,  66 => 22,  51 => 20,  47 => 19,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "saida/create.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\saida\\create.code.twig");
    }
}
