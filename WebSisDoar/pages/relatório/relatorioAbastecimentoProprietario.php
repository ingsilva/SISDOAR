<!DOCTYPE html>
<html>
    <head>
        <title>Abastecimento Proprietario</title>
        <meta name="description" content="SisTerra"/>
        <link rel="shortcut icon" href="../../img/logo.jpg" type="image/png"/>

        <!----------------------- JQUERY -------------------------------------->
        <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>

        <!----------------------- TABELA -------------------------------------->
        <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.dataTables.min.css">
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/jquery-1.12.4.js"></script>
        <link rel="stylesheet" type="text/css" href="../../dist/css/tabela/buttons.dataTables.min.css">

        <!----------------------- SCRIPT -------------------------------------->
        <script src="../../_js/abastecimento/relatorioAbastecimentoFornecedor.js"></script>
        <script src="../../_js/abastecimento/relatorioAbastecimentoMenu.js"></script>

        <!----------------------- EXPORT -------------------------------------->
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/dataTables.buttons.min.js"></script>
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/jszip.min.js"></script>
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/pdfmake.min.js"></script>
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/vfs_fonts.js"></script>
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/buttons.html5.min.js"></script>
        <script type="text/javascript" language="javascript" src="../../dist/js/tabela/buttons.print.min.js"></script>

        <!----------------------- SELECT 2------------------------------------->
        <link href="../../dist/css/select-bostrap.css" rel="stylesheet">
        <link href="../../dist/css/select2.css" rel="stylesheet">
        <script src="../../dist/js/select2.js"></script>

        <!----------------------- OVERLAY ------------------------------------>
        <script src="../../dist/js/loadingOverlay/loadingoverlay.min.js.js"></script>
        <script src="../../dist/js/loadingOverlay/loadingoverlay_progress.min.js"></script>
        <script src="../../_js/overlay.js"></script>

    </head>
    <body class="hold-transition skin-blue-light sidebar-mini">
        <div id="conteudo" class="wrapper">
            
            <div id="conteudo" class="content-wrapper">
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#" class="paginaInicial">Home</a></li>
                        <li><a href="#" class="relatorios">Relatórios</a></li>
                        <li><a href="#" class="relatorioAbastecimentoMenu">Menu de relatório de abastecimento</a></li>
                        <li><a href="#" class="relatorioAbastecimento">Relatório de Abastecimento Proprietário</a></li>
                    </ol>
                </section><br><br><br>
                <div class="container-fluid">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="text-center">Pesquisar abastecimentos</div> 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-2">
                                    <label>Ano</label>
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        <select id="ano" name="ano" required=""  class="form-control">
                                            <option value="0"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>Mês</label>
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        <select id="mes" name="mes" required="" class="form-control">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-5">
                                    <label>Equipamento</label>
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        <select id="id_equipamento" name="id_pessoa" required="" class="form-control">
                                            <option value="0"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Obra</label>
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        <select id="nr_tipo" name="nr_tipo" required="" class="form-control">
                                            <option value="0"></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div align="center">
                                <button type="button" class="btn btn-flat btn-danger pesquisar" data-toggle="modal" data-target="#confirmar">
                                    <span class="glyphicon glyphicon-search"></span>  Pesquisar
                                </button>
                                <button type="button" class="btn btn-flat btn-primary imprimir" data-toggle="modal" data-target="#confirmar">
                                    <span class="glyphicon glyphicon-print"></span>  Imprimir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            Abastecimentos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive table-condensed">
                                <table id="tabela" class="display">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize text-center">Data</th>
                                            <th class="text-capitalize text-center">Categoria</th>
                                            <th class="text-capitalize text-center">Equipamento de transporte</th>
                                            <th class="text-capitalize text-center">Combustivel</th>
                                            <th class="text-capitalize text-center">Quantidade</th>
                                            <th class="text-capitalize text-center">Local</th>
                                        </tr>
                                    </thead>
                                    <tbody class="corpo" id="corpo">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>