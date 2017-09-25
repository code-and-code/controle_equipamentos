<?php

/* app.code.twig */
class __TwigTemplate_93534f00ed914e2e77958e6d77f0a974e2de9e6f408cd4e198fa0310e1379425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"\">

    <title>Controle</title>

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("css/style.css"), "html", null, true);
        echo "\">
</head>
<body>

<div class=\"navbar navbar-default navbar-static-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-ex-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><span>Logo</span></a>
        </div>
        <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 33
        if (($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getGuest() == true)) {
            // line 34
            echo "
                <li><a href=\"/entrada\">Entrada</a></li>
                <li><a href=\"/saida\">Saída</a></li>
                <li><a href=\"/setor\">Setores</a></li>
                <li><a href=\"/local\">Locais</a></li>
                <li><a href=\"/marca\">Marcas</a></li>
                <li><a href=\"/equipamento\">Equipamentos</a></li>
                <li><a href=\"/custo\">Centro de custo</a></li>
                <li><a href=\"/nfe\">NFes</a></li>
            ";
        }
        // line 44
        echo "
            </li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\"></ul>
    </div>
</div>

    ";
        // line 51
        if (($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getGuest() == true)) {
            // line 52
            echo "

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-justified nav-pills\">
                        <li>
                            <a href=\"/funcionario\">Funcionarios</a>
                        </li>
                        <li >
                            <a href=\"/periferico\">Periféricos</a>
                        </li>
                        <li >
                            <a href=\"/computador\">Computadores</a>
                        </li>
                        <li>
                            <a href=\"/monitor\"> Monitores </a>
                        </li>
                        <li>
                            <a href=\"/licenca\"> Licenças </a>
                        </li>
                        <li>
                            <a href=\"/patrimonio\"> Pratimonios </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    ";
        }
        // line 83
        echo "
    <div class=\"section\">

        <div class=\"container\">

            ";
        // line 88
        if (($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getHasMessages() == true)) {
            // line 89
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getDisplay(), "html", null, true);
            echo "
            ";
        }
        // line 91
        echo "
            ";
        // line 92
        if (($context["success"] ?? null)) {
            // line 93
            echo "                <div class=\"alert alert-success\">
                    SUCESSO! ";
            // line 94
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 97
        echo "            ";
        if (($context["error"] ?? null)) {
            // line 98
            echo "                <div class=\"alert alert-danger\">
                    Erro! ";
            // line 99
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                    <a href=\"/log/error?code=";
            // line 100
            echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
            echo "\">Ver ERROR</a>
                </div>
            ";
        }
        // line 103
        echo "
            ";
        // line 104
        if (($context["info"] ?? null)) {
            // line 105
            echo "                <div class=\"alert alert-info\">
                    Ops! ";
            // line 106
            echo twig_escape_filter($this->env, ($context["info"] ?? null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 109
        echo "
            ";
        // line 110
        if (($context["warning"] ?? null)) {
            // line 111
            echo "                <div class=\"alert alert-warning\">
                    Humm! ";
            // line 112
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 115
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "        </div>
    </div>

    <footer class=\"section section-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <h1>Controle Equipamentos</h1>
                    <p>
                        Esse sistema serve exclusivamente para controle de equipamentos empresariais. <br>
                        Colaboradores : <a href=\"https://github.com/adrianosilvavianna\" target=\"_blank\" style=\"color: #ffffff\">Adriano Vianna</a>, <a href=\"https://github.com/angelobiscola\" target=\"_blank\" style=\"color: #ffffff\">Angelo Biscola</a>
                    </p>
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"row\">
                         <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("images/miniLogo.png\""), "html", null, true);
        echo "\"/> Direitos Autorais © 2016 - <a href=\"http://codeandcode.com.br\" target=\"_blank\" style=\"color: #ffffff\">{ Code&Code }</a>. Todos os direitos reservados ®. | <a href=\"https://github.com/code-and-code/start\" class=\"text-warning\">DOCS</a>
                            <a href=\"#\"><i class=\"fa fa-3x fa-fw fa-github text-inverse\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-3x fa-fw fa-facebook text-inverse\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>

<script src=\"https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js\"></script>
<script src=\"https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function() {

        \$(\".js-example-basic-single\").select2({
            placeholder: \"Selecione\",
        });

        \$('.table').DataTable({

            dom: 'Bfrtip',
            buttons: [
               'csv', 'excel', 'pdf', 'print'
            ],
            \"oLanguage\": {
                \"sEmptyTable\": \"Nenhum registro encontrado\",
                \"sInfo\": \"Mostrando de _START_ até _END_ de _TOTAL_ registros\",
                \"sInfoEmpty\": \"Mostrando 0 até 0 de 0 registros\",
                \"sInfoFiltered\": \"(Filtrados de _MAX_ registros)\",
                \"sInfoPostFix\": \"\",
                \"sInfoThousands\": \".\",
                \"sLengthMenu\": \"_MENU_ resultados por página\",
                \"sLoadingRecords\": \"Carregando...\",
                \"sProcessing\": \"Processando...\",
                \"sZeroRecords\": \"Nenhum registro encontrado\",
                \"sSearch\": \"Pesquisar\",
                \"oPaginate\": {
                    \"sNext\": \"Próximo\",
                    \"sPrevious\": \"Anterior\",
                    \"sFirst\": \"Primeiro\",
                    \"sLast\": \"Último\"
                },
                \"oAria\": {
                    \"sSortAscending\": \": Ordenar colunas de forma ascendente\",
                    \"sSortDescending\": \": Ordenar colunas de forma descendente\"
                }
            }
        });

        \$(\"#select_equipamento\").select2({
            placeholder: \"Selecione\",
        });

    });
</script>
</body>
</html>




";
    }

    // line 115
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "app.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 115,  225 => 142,  211 => 131,  194 => 116,  191 => 115,  185 => 112,  182 => 111,  180 => 110,  177 => 109,  171 => 106,  168 => 105,  166 => 104,  163 => 103,  157 => 100,  153 => 99,  150 => 98,  147 => 97,  141 => 94,  138 => 93,  136 => 92,  133 => 91,  127 => 89,  125 => 88,  118 => 83,  85 => 52,  83 => 51,  74 => 44,  62 => 34,  60 => 33,  40 => 16,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\app.code.twig");
    }
}
