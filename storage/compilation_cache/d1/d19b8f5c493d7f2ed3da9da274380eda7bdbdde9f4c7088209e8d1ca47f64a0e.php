<?php

/* marca/index.code.twig */
class __TwigTemplate_06b22da04632fa29b8879d18e042bbbfa701e331f52fd19a81f77dd160c136ba extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "marca/index.code.twig", 1);
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
                        <h3 class=\"panel-title\">Marcas <a href=\"/marca/novo\" class=\"fa fa-plus pull-right\"></a></h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["marca"]) {
            // line 22
            echo "                                <tr>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "nome", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"marca/editar?id=";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "id", array()), "html", null, true);
            echo "\"  class=\"fa fa-edit text-info\"    ></a>
                                        <a href=\"marca/deletar?id=";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-trash text-danger\" ></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return "marca/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  69 => 27,  65 => 26,  60 => 24,  56 => 23,  53 => 22,  49 => 21,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marca/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\marca\\index.code.twig");
    }
}
