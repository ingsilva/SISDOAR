<?php
include '../../config/conexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuários</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
    </head>
    <body>

        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1>Usuários <small>do Sistema</small></h1>
            </div>
            <!-- End page header -->

            <div class="table-responsive">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <a href="cadastrar_usuario.php" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="triagem">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Login</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select * from usuarios");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['idusuarios']; ?></td>
                                    <td><?php echo $row['nome']; ?></td>
                                    <td><?php echo $row['login']; ?></td>
                                    <td>
                                        <?php echo "<a class='btn btn-default' href='cadastrar_usuario.php?idusuarios=" . $row['idusuarios'] . "'><i class='glyphicon glyphicon-list-alt'></i></a>"; ?>
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
                    $('#triagem').DataTable({
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

