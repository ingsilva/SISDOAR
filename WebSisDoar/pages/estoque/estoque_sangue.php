<?php
include '../../config/conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estoque de Sangue</title>

        <?php
        include '../../layout/cabecalho.php';
        ?>

    </head>
    <body >

        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1> <small> Estoque de</small> Sangue</h1>
            </div>
            <!-- End page header -->

            <div class="table-responsive">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <a href="saida_estoque.php" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Fator RH</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select tipo, fator_rh, total
                                            from estoque
						group by tipo, fator_rh;");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['tipo']; ?></td>
                                        <td><?php echo $row['fator_rh']; ?></td>
                                        <td><?php echo $row['total']; ?></td>
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
            <!--==================RODAPE====================---->

            <?php
            include '../../layout/rodape.php';
            ?>
    </body>
</html>
