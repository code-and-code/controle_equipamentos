<?php

/* computador/edit.code.twig */
class __TwigTemplate_e8fe2187d26c320307e96cfe22deec8c34e43be562c94ae501614aacf505fee2 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "computador/edit.code.twig", 1);
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
                    <h3 class=\"panel-title\">Computador | Editar</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"/computador/atualizar\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"1\">
                                Equipamento
                            </label>
                            <select class=\"js-example-basic-single form-control\" name=\"computador[equipamento_id]\" id=\"1\">
                                ";
        // line 17
        if (($context["objeto"] ?? null)) {
            // line 18
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["objeto"] ?? null), "equipamento_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["objeto"] ?? null), "Equipamento", array(), "method"), "nome", array()), "html", null, true);
            echo " || ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["objeto"] ?? null), "Equipamento", array(), "method"), "odelo", array()), "html", null, true);
            echo "</option>
                                ";
        }
        // line 20
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equipamentos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["equipamento"]) {
            // line 21
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "id", array()), "html", null, true);
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
        // line 23
        echo "                            </select>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <label class=\"control-label\" for=\"4\">
                                    Placa Mãe
                                </label>
                                <input required class=\"form-control\" id=\"4\" placeholder=\"\" name=\"computador[placa_mae]\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["objeto"] ?? null), "placa_mae", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-xs-3\">
                                <label class=\"control-label\" for=\"4\">
                                    Memória
                                </label>
                                <input required class=\"form-control\" id=\"3\" placeholder=\"\" name=\"computador[memoria]\" type=\"text\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["objeto"] ?? null), "memoria", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-xs-4\">
                                <label class=\"control-label\" for=\"4\">
                                    Processador
                                </label>
                                <input required class=\"form-control\" id=\"6\" placeholder=\"\" name=\"computador[processador]\" type=\"text\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["objeto"] ?? null), "processador", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-xs-2\">
                                <label class=\"control-label\" for=\"4\">
                                    HD
                                </label>
                                <input required class=\"form-control\" id=\"5\" placeholder=\"\" name=\"computador[hd]\" type=\"text\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["objeto"] ?? null), "hd", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        </br>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"7\">
                                Placa De Vídeo
                            </label>
                            <input required class=\"form-control\" id=\"7\" placeholder=\"\" name=\"computador[placa_video]\" type=\"text\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["objeto"] ?? null), "placa_video", array()), "html", null, true);
        echo "\">
                        </div>

                            ";
        // line 59
        $this->loadTemplate("patrimonio/_inputs_patrimonio.code.twig", "computador/edit.code.twig", 59)->display($context);
        // line 60
        echo "

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
        return "computador/edit.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 60,  128 => 59,  122 => 56,  111 => 48,  102 => 42,  93 => 36,  84 => 30,  75 => 23,  62 => 21,  57 => 20,  47 => 18,  45 => 17,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "computador/edit.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\computador\\edit.code.twig");
    }
}
