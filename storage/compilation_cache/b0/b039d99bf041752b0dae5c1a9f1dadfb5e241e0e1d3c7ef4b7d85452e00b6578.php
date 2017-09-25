<?php

/* nfe/upload.code.twig */
class __TwigTemplate_07537ecdba656ba1fa5b30d9370d6422a651fdaf56f2ef0d9ff9c54f2b0b9d56 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "nfe/upload.code.twig", 1);
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
                        <h3 class=\"panel-title\">Enviar Nota Fiscal</h3>
                    </div>
                    <div class=\"panel-body\">

                        ";
        // line 13
        if (($this->getAttribute(($context["nfe"] ?? null), "file", array()) == null)) {
            // line 14
            echo "                        <form role=\"form\" action=\"/nfe/enviar-nf\" method=\"post\" enctype=\"multipart/form-data\">

                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nfe"] ?? null), "id", array()), "html", null, true);
            echo "\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"2\">
                                    NF
                                </label>
                                <input required class=\"form-control\" id=\"2\" placeholder=\"\" name=\"file\" type=\"file\">
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">
                                Enviar
                            </button>

                            ";
        } else {
            // line 29
            echo "                                <a href=\"/nfe/download-nf?id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nfe"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"text-center\">
                                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("images/nf.png"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\">
                                </a>
                                <a href=\"/nfe/deletar-nf?id=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nfe"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\">
                                    Deletar
                                </a>
                            ";
        }
        // line 36
        echo "                        </form>
                    </div>
                </div>
            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "nfe/upload.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  73 => 32,  68 => 30,  63 => 29,  47 => 16,  43 => 14,  41 => 13,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nfe/upload.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\nfe\\upload.code.twig");
    }
}
