<?php

/* periferico/edit.code.twig */
class __TwigTemplate_9f2f1936210e17e1c3867a7cdd4a97f34402a7e7429876bda8411b4c8fdc8651 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "periferico/edit.code.twig", 1);
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
                    <h3 class=\"panel-title\">Periféricos | Editar</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"/periferico/atualizar\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"1\">
                                Equipamento
                            </label>
                            <select class=\"js-example-basic-single form-control\" name=\"periferico[equipamento_id]\" id=\"1\" >
                                <option value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "equipamento_id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Equipamento", array(), "method"), "nome", array()), "html", null, true);
        echo " || ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Equipamento", array(), "method"), "modelo", array()), "html", null, true);
        echo "</option>
                                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equipamentos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["equipamento"]) {
            // line 19
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
        // line 21
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"2\">
                                Descrição
                            </label>
                            <input class=\"form-control\" id=\"2\" placeholder=\"\" name=\"periferico[descricao]\" type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "descricao", array()), "html", null, true);
        echo "\">
                        </div>

                            ";
        // line 30
        $this->loadTemplate("patrimonio/_inputs_patrimonio.code.twig", "periferico/edit.code.twig", 30)->display($context);
        // line 31
        echo "
                        <input value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"id\" type=\"hidden\">
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
        return "periferico/edit.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  86 => 31,  84 => 30,  78 => 27,  70 => 21,  57 => 19,  53 => 18,  45 => 17,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "periferico/edit.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\periferico\\edit.code.twig");
    }
}
