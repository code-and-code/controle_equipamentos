<?php

/* monitor/create.code.twig */
class __TwigTemplate_4ad2be0e996f49e2abf36ec2b2970ee6a30c7cdc43746dc52220e1187e2f8dbe extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "monitor/create.code.twig", 1);
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
                    <h3 class=\"panel-title\">Monitor | Criar</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"/monitor/gravar\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"1\">
                                Equipamento
                            </label>
                            <select class=\"js-example-basic-single form-control\" name=\"monitor[equipamento_id]\" id=\"1\">
                                ";
        // line 17
        if (($context["model"] ?? null)) {
            // line 18
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "equipamento_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Equipamento", array()), "nome", array()), "html", null, true);
            echo " || ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Equipamento", array()), "modelo", array()), "html", null, true);
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
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"3\">
                                Tela
                            </label>
                            <input required class=\"form-control\" id=\"3\" placeholder=\"\" name=\"monitor[tela]\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "tela", array()), "html", null, true);
        echo "\">
                        </div>
                            ";
        // line 31
        $this->loadTemplate("patrimonio/_inputs_patrimonio.code.twig", "monitor/create.code.twig", 31)->display($context);
        // line 32
        echo "                        <button type=\"submit\" class=\"btn btn-primary\">
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
        return "monitor/create.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  88 => 31,  83 => 29,  75 => 23,  62 => 21,  57 => 20,  47 => 18,  45 => 17,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "monitor/create.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\monitor\\create.code.twig");
    }
}
