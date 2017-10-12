<?php
include '../../config/conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda Telefonica</title>

        <?php
        include '../../layout/cabecalho.php';
        ?>

        <script type="text/javascript">
            $(document).ready(function () {
                $('a#excluir').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/funcionario/excluir_agenda.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Registro Excluido com Sucesso.");
                                location.replace("lista_agenda.php");

                            } else {
                                alert(id);
                                alert("Ocorreu um erro ao excluir o registro.");
                            }
                        }
                    });
                    return false;
                });
            });
        </script>
    </head>
    <body >



        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1> Agenda <small> Telefonica </small></h1>
            </div>
            <!-- End page header -->

            <div class="table-responsive">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <a href="../../pages/funcionario/cadastrar_agenda.php" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="example2">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Data Nascimento</th>
                                    <th>Idade</th>
                                    <th>Tipo Sangue</th>
                                    <th>fator Rh</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($_POST['data_inicio'] || $_POST['data_fim']) {
                                    $sql = "SELECT iddoador, nome, data_nascimento, d.idade, d.tipo_sangue,
                                        d.fator_rh, data_hora
                                        FROM doador d, triagem t, estoque_sangue es
                                        WHERE d.iddoador = t.doador_iddoador 
                                            AND  
                                                t.idtriagem = es.triagem_idtriagem 
                                            AND data_hora >='" . $_POST['data_inicio'] . "'and data_hora <='" . $_POST['data_fim'] . "'";



                                    foreach ($con->query($sql) as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['iddoador']; ?></td>
                                            <td><?php echo $row['nome']; ?></td>
                                            <td><?php echo $row['data_nascimento']; ?></td>
                                            <td ><?php echo $row['idade']; ?></td>
                                            <td ><?php echo $row['tipo_sangue']; ?></td>
                                            <td ><?php echo $row['fator_rh']; ?></td>
                                            <td ><?php echo $row['data_hora']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.panel -->


            <script>
                $(function () {
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": true,
                        "language": {
                            "url": "/SISDOAR/WebSisDoar/assets/datatables/portuguese-brasil.json"
                        }
                    });
                });
            </script>
            <!--==================RODAPE====================---->

            <?php
            include '../../layout/rodape.php';
            ?>
    </body>
</html>
