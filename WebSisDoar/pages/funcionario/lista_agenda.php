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
                                    <th>DDD</th>
                                    <th>Telefone/Celular</th>
                                    <th>Departamento</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select a.idagenda, a.nome, a.ddd, a.telefone, d.descricao"
                                        . " from agenda a, dpto d"
                                        . " where a.dpto_iddpto = d.iddpto ");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['idagenda']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['ddd']; ?></td>
                                        <td ><?php echo $row['telefone']; ?></td>
                                        <td ><?php echo $row['descricao']; ?></td>
                                        <td>
                                            <?php echo "<a class='btn btn-info' href='edit_agenda.php?id=" . $row['idagenda'] . "'><i class='glyphicon glyphicon-edit'></i></a>"; ?>
                                        </td>
                                        <td>
                                            <?php echo "<a href='#' class='btn btn-danger' id='excluir' rel='" . $row['idagenda'] . "'><i class='glyphicon glyphicon-remove'></i></a>"; ?>
                                        </td>
                                    </tr>
                                    <?php
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
