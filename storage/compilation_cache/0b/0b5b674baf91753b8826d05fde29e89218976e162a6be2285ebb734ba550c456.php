<?php

/* nfe/create.code.twig */
class __TwigTemplate_af1a64cd98400f677598f5e20db7a640e0189cc410106bd2e940251e53ae8c9b extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "nfe/create.code.twig", 1);
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
                    <h3 class=\"panel-title\">Nfe | Criar</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"/nfe/gravar\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"9\">
                                NFe
                            </label>
                            <input required class=\"form-control\" id=\"9\" placeholder=\"\" name=\"nfe\" type=\"text\" value=\"\">
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <label class=\"control-label\" for=\"4\">
                                    Data Compra
                                </label>
                                <input required class=\"form-control\" id=\"11\" placeholder=\"\" name=\"data_entrada\" type=\"date\" value=\"\" >
                            </div>
                            <div class=\"col-xs-6\">
                                <label class=\"control-label\" for=\"4\">
                                    Centro De Custo
                                </label>
                                <select class=\"js-example-basic-single form-control\" name=\"centro_custo_id\" id=\"1\" >
                                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custo"]) {
            // line 32
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custo"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custo"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return "nfe/create.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  63 => 32,  59 => 31,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nfe/create.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\nfe\\create.code.twig");
    }
}
