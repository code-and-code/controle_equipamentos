<?php

/* equipamento/edit.code.twig */
class __TwigTemplate_f0e857d3d3f9185d0cf996514d000a00e5bcc19618b0c26a6c161f262c3acae2 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "equipamento/edit.code.twig", 1);
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
                    <h3 class=\"panel-title\">Equipamento | Editar </h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"/equipamento/atualizar\" method=\"post\">

                        <input required type=\"hidden\" name=\"id\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["equipamento"] ?? null), "id", array()), "html", null, true);
        echo "\">

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"2\">
                                Nome
                            </label>
                            <input required class=\"form-control\" id=\"2\" placeholder=\"\" name=\"nome\" type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["equipamento"] ?? null), "nome", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"2\">
                                Modelo
                            </label>
                            <input required class=\"form-control\" id=\"2\" placeholder=\"\" name=\"modelo\" type=\"text\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["equipamento"] ?? null), "modelo", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"1\">
                                Marca
                            </label>
                            <select class=\"js-example-basic-single form-control\" name=\"marca_id\" id=\"1\">

                                <option value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["equipamento"] ?? null), "Marca", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["equipamento"] ?? null), "Marca", array()), "nome", array()), "html", null, true);
        echo "</option>

                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marcas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["marca"]) {
            // line 37
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "nome", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"1\">
                                Categoria
                            </label>
                            <select class=\"js-example-basic-single form-control\" name=\"categoria_id\" id=\"1\">

                                <option value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["equipamento"] ?? null), "Categoria", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["equipamento"] ?? null), "Categoria", array()), "nome", array()), "html", null, true);
        echo "</option>

                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 50
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nome", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </select>
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
        return "equipamento/edit.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 52,  114 => 50,  110 => 49,  103 => 47,  93 => 39,  82 => 37,  78 => 36,  71 => 34,  60 => 26,  51 => 20,  42 => 14,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "equipamento/edit.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\equipamento\\edit.code.twig");
    }
}
