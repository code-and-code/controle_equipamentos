<?php

/* patrimonio/_inputs_patrimonio.code.twig */
class __TwigTemplate_98d280e0848bb3093a2150f18119a643a3f0c4b945e470088092ad7c8aba740e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <label class=\"control-label\" for=\"4\">
            Nfe
        </label>
        <select class=\"js-example-basic-single form-control\" name=\"patrimonio[centro_custo_id]\" id=\"1\" >
            ";
        // line 7
        if (($context["model"] ?? null)) {
            // line 8
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "nfe", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "nfe", array()), "html", null, true);
            echo "</option>
            ";
        }
        // line 10
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nfes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nfe"]) {
            // line 11
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "nfe", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nfe"], "nfe", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nfe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </select>
    </div>
</div>

<br/>
<div class=\"row\">
    <div class=\"col-xs-4\">
        <label class=\"control-label\" for=\"4\">
            Data Compra
        </label>
        <input required class=\"form-control\" id=\"11\" placeholder=\"\" name=\"patrimonio[data_compra]\" type=\"date\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "data_compra", array()), "html", null, true);
        echo "\" >
    </div>
    <div class=\"col-xs-4\">
        <label class=\"control-label\" for=\"4\">
            Valor
        </label>
        <input required class=\"form-control\" id=\"10\" placeholder=\"\" name=\"patrimonio[valor]\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "valor", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-xs-4\">
        <label class=\"control-label\" for=\"4\">
            Centro De Custo
        </label>
        <select class=\"js-example-basic-single form-control\" name=\"patrimonio[centro_custo_id]\" id=\"1\" >
            ";
        // line 36
        if (($context["model"] ?? null)) {
            // line 37
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "centro_custo_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "Custo", array()), "nome", array()), "html", null, true);
            echo "</option>
            ";
        }
        // line 39
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custo"]) {
            // line 40
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custo"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custo"], "nome", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </select>
    </div>
</div>
<br>
<div class=\"row\">
    <div class=\"col-xs-2\">
        <label class=\"control-label\" for=\"4\">
            Num Patrimônio
        </label>
        <input required type=\"text\" class=\"form-control\" name=\"patrimonio[num_patrimonial]\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "num_patrimonial", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-xs-3\">
        <label class=\"control-label\" for=\"4\">
            Serial
        </label>
        <input required type=\"text\" class=\"form-control\" name=\"patrimonio[serial]\" value=";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "serial", array()), "html", null, true);
        echo ">
    </div>
    <div class=\"col-xs-4\">
        <label class=\"control-label\" for=\"4\">
            Funcionário | Setor
        </label>
        <select class=\"js-example-basic-single form-control\" name=\"patrimonio[funcionario_id]\" id=\"1\">
            <option value='0'>Não Possui</option>
            ";
        // line 65
        if (($context["model"] ?? null)) {
            // line 66
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "funcionario_id", array()), "html", null, true);
            echo "\" selected> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "Funcionario", array()), "nome", array()), "html", null, true);
            echo " || ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "Funcionario", array()), "Setor", array()), "nome", array()), "html", null, true);
            echo "</option>
            ";
        }
        // line 68
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funcionarios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["funcionario"]) {
            // line 69
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcionario"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcionario"], "nome", array()), "html", null, true);
            echo " || ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["funcionario"], "Setor", array()), "nome", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcionario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </select>
    </div>
    <div class=\"col-xs-3\">
        <label class=\"control-label\" for=\"4\">
            Local
        </label>
        <select class=\"js-example-basic-single form-control\" name=\"patrimonio[local_id]\" id=\"1\">
            ";
        // line 78
        if (($context["model"] ?? null)) {
            // line 79
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "local_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["model"] ?? null), "Patrimonio", array()), "Local", array()), "nome", array()), "html", null, true);
            echo "</option>
            ";
        }
        // line 81
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locais"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 82
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "nome", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </select>
    </div>
</div>

<input required  type=\"hidden\" name=\"id\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "id", array()), "html", null, true);
        echo "\">
<br>";
    }

    public function getTemplateName()
    {
        return "patrimonio/_inputs_patrimonio.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 88,  206 => 84,  195 => 82,  190 => 81,  182 => 79,  180 => 78,  171 => 71,  158 => 69,  153 => 68,  143 => 66,  141 => 65,  130 => 57,  121 => 51,  110 => 42,  99 => 40,  94 => 39,  86 => 37,  84 => 36,  74 => 29,  65 => 23,  53 => 13,  42 => 11,  37 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "patrimonio/_inputs_patrimonio.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\patrimonio\\_inputs_patrimonio.code.twig");
    }
}
