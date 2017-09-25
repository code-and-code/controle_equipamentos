<?php

/* home/index.code.twig */
class __TwigTemplate_4af8e9903afa234c3e1d60c9682c93c195ddae0a3822c77929c0b3bdea63b21f extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "home/index.code.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <p><h1>Controle equipamentos da sua empresa!!</h1></p>

            <p>A missão desse sistema é ajudar a registrar os patrimônios que sua empresa possui.</p>
            <p>Entre e melhore a gestão da sua empresa.</p>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/index.code.twig";
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
        return new Twig_Source("", "home/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\home\\index.code.twig");
    }
}
