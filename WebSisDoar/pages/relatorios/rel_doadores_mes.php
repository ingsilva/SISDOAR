<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de Telefones</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
       

    </head>
    <body>
        <div class="body content rows scroll-y">
            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1> Relatórios <small> por Periódo </small></h1>
            </div>
            <!-- End page header -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Relatórios por Periódo </h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">
                            <form role="form" action="relatorio_doadores_mes.php" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-2">
                                        <label for="data_inicio">Data de Inicio</label>
                                        <input class="form-control"   type="date" id="data_inicio" name="data_inicio">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="data_fim">Data Final</label>
                                        <input class="form-control"   type="date" id="data_fim" name="data_fim">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>

                                </div>
                                <input type="hidden" name="id" id="id" value="0" />
                                <!--================================================-------> 
                                <button type="submit" tar id="salvar" class="btn btn-success">Gerar</button>
                                
                            </form>
                        </div><!-- End div #basic-form -->
                    </div>
                </div><!-- End div .box-info -->
            </div><!-- End div .col-sm-6 -->
            <?php
            include '../../layout/rodape.php';
            ?>
    </body>
</html>
