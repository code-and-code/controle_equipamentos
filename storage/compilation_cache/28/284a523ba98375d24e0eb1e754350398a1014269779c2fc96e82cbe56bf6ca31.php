<?php

/* funcionario/create.code.twig */
class __TwigTemplate_e5d37fd337abda9b3d60b39b6f40bf4e8f3774f39f8357846c4cb566b8f30e91 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "funcionario/create.code.twig", 1);
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
                        <h3 class=\"panel-title\">Funcionário | Criar</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form role=\"form\" action=\"/funcionario/gravar\" method=\"post\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"2\">
                                    Nome
                                </label>
                                <input required class=\"form-control\" id=\"2\" placeholder=\"\" name=\"nome\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"3\">
                                    Email
                                </label>
                                <input required class=\"form-control\" id=\"3\" placeholder=\"\" name=\"email\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"4\">
                                    Telefone
                                </label>
                                <input required class=\"form-control\" id=\"4\" placeholder=\"\" name=\"telefone\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"5\">
                                    Ramal
                                </label>
                                <input class=\"form-control\" id=\"5\" placeholder=\"\" name=\"ramal\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"1\">
                                    Setor
                                </label>
                                <select class=\"js-example-basic-single form-control\" name=\"setor_id\" id=\"1\">
                                    <option value=\"\">Selecione</option>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["setores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["setor"]) {
            // line 44
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
        return "funcionario/create.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 46,  75 => 44,  71 => 43,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "funcionario/create.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\funcionario\\create.code.twig");
    }
}
