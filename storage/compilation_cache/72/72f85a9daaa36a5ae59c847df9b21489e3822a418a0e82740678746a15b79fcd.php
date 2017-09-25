<?php

/* nfe/index.code.twig */
class __TwigTemplate_4c737aa7f0e986869626909f3e1b2509b42cb593428b69cc11f98f89d6d58d8e extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "nfe/index.code.twig", 1);
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
                        <h3 class=\"panel-title\">Nfes <a href=\"/nfe/novo\" class=\"fa fa-plus pull-right\"></a></h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Entrada</th>
                                <th>Número nota</th>
                                <th>Crentro de Custo</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nfe"]) {
            // line 24
            echo "                                <tr>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "data_entrada", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "nfe", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["nfe"], "Custo", array()), "nome", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"nfe/nova-nf?id=";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-upload\" ></a>
                                        <a href=\"nfe/deletar?id=";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-trash  text-danger\" ></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nfe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "nfe/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  79 => 31,  75 => 30,  70 => 28,  66 => 27,  62 => 26,  58 => 25,  55 => 24,  51 => 23,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nfe/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\nfe\\index.code.twig");
    }
}
