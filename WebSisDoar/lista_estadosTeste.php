<?php
include './config/conexao.php';
?>
<?php
//CABEÇALHO
include './cabecalho.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            $(document).ready(function () {
                $('a#excluir').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "./funcoes/estado/excluir_estado.php",
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


        <!--==================CABEÇALHO====================---->
        <div class="container theme-showcase" role="main">
            <!-- /.container -->
            <div class="container">

                <div id="page-wrapper">
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
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

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
                        "url": "assets/datatables/portuguese-brasil.json"
                    }
                });
            });
        </script>
        <!--==================RODAPE====================---->
        <?php
        include './rodape.php';
        ?>
    </body>
</html>
