<?php
include './config/conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estados Cadastrados</title>
        <?php
//CABEÇALHO
        include './layout/cabecalho.php';
        ?>
        <!--DATATABLES-->
        <link rel="stylesheet" href="../../css/jquery.dataTables.min.css">
        <!-- DataTables -->
        <script src = "../../js/dataTables.bootstrap.min.js" ></script> 
        <!-- LiveQuery-->
        <script src = "../../assets/js/livequery.js" ></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('a#excluir').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/localizar/excluir_estado.php",
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
                <h1>Tables <small>lorem ipsum dolor</small></h1>
            </div>
            <!-- End page header -->


            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <a href="cadastrar_estado.php" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></a>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="example2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>UF</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = ("select * from estado;");
                            foreach ($con->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['idestado']; ?></td>
                                    <td><?php echo $row['nome']; ?></td>
                                    <td><?php echo $row['uf']; ?></td>
                                    <td>
                                        <?php echo "<a class='btn btn-info' href='edit_user.php?id=" . $row['idestado'] . "'><i class='glyphicon glyphicon-edit'></i></a>"; ?>
                                    </td>
                                    <td>
                                        <?php echo "<a href='#' class='btn btn-danger' id='excluir' rel='" . $row['idestado'] . "'><i class='glyphicon glyphicon-remove'></i></a>"; ?>
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
            include './layout/rodape.php';
            ?>
    </body>
</html>
