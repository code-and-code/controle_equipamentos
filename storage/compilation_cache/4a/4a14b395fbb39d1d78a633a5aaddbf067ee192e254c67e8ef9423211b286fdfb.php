<?php

/* equipamento/create.code.twig */
class __TwigTemplate_72a4ae6ded13db92dd8495df254dce7ab95535efccbe35fbb1e29d479c78c346 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "equipamento/create.code.twig", 1);
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
                        <h3 class=\"panel-title\">Equipamento | Criar</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form role=\"form\" action=\"/equipamento/gravar\" method=\"post\">

                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"2\">
                                    Nome
                                </label>
                                <input required class=\"form-control\" id=\"2\" placeholder=\"\" name=\"nome\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"2\">
                                    Modelo
                                </label>
                                <input required class=\"form-control\" id=\"2\" placeholder=\"\" name=\"modelo\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"1\">
                                    Marca
                                </label>
                                <select class=\"js-example-basic-single form-control\" name=\"marca_id\" id=\"1\">
                                    <option value=\"\">Selecione</option>
                                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marcas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["marca"]) {
            // line 33
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"1\">
                                    Categoria
                                </label>
                                <select class=\"js-example-basic-single form-control\" name=\"categoria_id\" id=\"1\">
                                    <option value=\"\">Selecione</option>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 44
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Gravar
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
        return "equipamento/create.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 46,  89 => 44,  85 => 43,  75 => 35,  64 => 33,  60 => 32,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "equipamento/create.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\equipamento\\create.code.twig");
    }
}
