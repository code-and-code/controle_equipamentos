<?php

/* local/create.code.twig */
class __TwigTemplate_4a7cf33e7a6c3b25714e412fccdd142e52dfac7aff60aa0738926630f8d54fb3 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "local/create.code.twig", 1);
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
                        <h3 class=\"panel-title\">Local | Criar</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form role=\"form\" action=\"/local/gravar\" method=\"post\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"2\">
                                    Nome
                                </label>
                                <input required class=\"form-control\" id=\"2\" placeholder=\"\" name=\"nome\" type=\"text\">
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
        return "local/create.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "local/create.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\local\\create.code.twig");
    }
}
