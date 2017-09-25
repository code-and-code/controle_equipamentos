<?php

/* entrada/create.code.twig */
class __TwigTemplate_68a2db887b8e70fe1e7758488d2d6ac31988a065ca8025ee3d3bc9a5e720065f extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "entrada/create.code.twig", 1);
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
                    <h3 class=\"panel-title\">Entrada | Criar</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"/entrada/gravar\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"1\">
                                Equipamento
                            </label>
                            <select class=\"js-example-basic-single form-control\" name=\"equipamento_id\" id=\"1\" >
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
                            <label class=\"control-label\" for=\"1\">
                                Nfe
                            </label>
                            <select class=\"js-example-basic-single form-control col-xs-6\" name=\"nfe_id\" id=\"1\" >
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nfes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nfe"]) {
            // line 30
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "nfe", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nfe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </select>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4\">
                                <label class=\"control-label\" for=\"4\">
                                    Qtd
                                </label>
                                <input required class=\"form-control\" id=\"10\" placeholder=\"\" name=\"qtd\" type=\"text\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "valor", array()), "html", null, true);
        echo "\">
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
        return "entrada/create.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  88 => 32,  77 => 30,  73 => 29,  63 => 21,  50 => 19,  46 => 18,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "entrada/create.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\Entrada\\create.code.twig");
    }
}
