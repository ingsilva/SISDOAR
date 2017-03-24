<?php
include './config/conexao.php';
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
                        url: "excluircontato.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                listaContatos();
                            } else {
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

        <?php
        //CABEÇALHO
        include './cabecalho.php';
        ?>
        <!--==================CABEÇALHO====================---->
        <div class="container theme-showcase" role="main">
            <!-- /.container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <?php
                        //FUNÇÃO PARA EXCLUIR
                        if (isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

                            $id = (int) $_GET['id'];
                            if ($estado->delete($id)) {
                                echo "<div class='alert alert-success' role='alert'>Excluido com sucesso!</div>";
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>Erro ao excluir!</div>";
                            }

                        endif;
                        ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
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
                                                <?php echo "<a  class='btn btn-danger' href=''><b class='glyphicon glyphicon-remove'></b></a>"; ?>
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
