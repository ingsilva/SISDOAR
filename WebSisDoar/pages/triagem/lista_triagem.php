<?php
include '../../config/conexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Triagem de Doadores</title>
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
                        url: "../../funcoes/triagem/excluir_triagem.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Registro Excluido com Sucesso.");
                                location.reload();

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
    <body>

        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1> Triagem <small>de Doadores</small></h1>
            </div>
            <!-- End page header -->

            <div class="table-responsive">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <a href="cadastrar_triagem.php" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="triagem">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Peso</th>
                                    <th>Status</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select t.idtriagem, d.nome, t.idade, t.peso, t.status"
                                        . " from doador d, triagem t"
                                        . " where t.doador_iddoador = d.iddoador ");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['idtriagem']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['idade']; ?></td>
                                        <td><?php echo $row['peso']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <?php echo "<a class='btn btn-info' href='edit_user.php?id=" . $row['idtriagem'] . "'><i class='glyphicon glyphicon-edit'></i></a>"; ?>
                                        </td>
                                        <td>
                                            <?php echo "<a href='#' class='btn btn-danger' id='excluir' rel='" . $row['idtriagem'] . "'><i class='glyphicon glyphicon-remove'></i></a>"; ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>

            <script>
                $(function () {
                    $('#table_cidade').DataTable({
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

