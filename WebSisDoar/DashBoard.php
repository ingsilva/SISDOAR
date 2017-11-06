<!DOCTYPE html>

<?php
//require_once 'funcoes/usuario/seguranca.php'; 
// protegePagina();
//require_once 'C:\xampp\htdocs/SISDOAR/WebSisDoar/valida.php';
?>
<?php
include './config/conexao.php';
?>


<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>WebSisDoar</title>
        <link rel="icon" type="image/png"  href="assets/img/apple-touch-icon.png" />
        <?php
        include './layout/cabecalho.php';
        ?>
    </head>
    <body>
        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1>WebSisDoar - <small> Doe Sangue. Doe Vida</small></h1>
            </div>
            <!-- End page header -->


            <!-- Begin info box -->
            <div class="row">

                <!-- Visitor Info Box -->
                <div class=" col-sm-4 col-xs-6">
                    <!-- Box info -->
                    <div class="box-info">
                        <!-- Icon box -->
                        <div class="icon-box">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x info"></i>
                                <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                            </span>
                        </div><!-- End div .icon-box -->
                        <!-- Text box -->
                        <div class="text-box">
                            <?php
                            $sql_doadores = (" select count(*) as doadores  from doador  where data_registro is not null;");
                            foreach ($con->query($sql_doadores) as $row) {
                                ?>
                                <h3><?php echo $row['doadores']; ?></h3>
                                <p>DOADORES</p>
                                <?php
                            }
                            ?>
                        </div><!-- End div .text-box -->
                        <div class="clear"></div>
                        <!-- Progress bar -->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80&#37; Complete</span>
                            </div>
                        </div><!-- End div .progress .progress-xs -->
                        <!--<p class="text-center">Apenas 4,7 mil doaram</p>-->
                    </div><!-- End div .info-box -->
                </div>
                <!-- End Visitor Info Box -->


                <!-- Orders Info Box -->
                <div class="col-sm-4 col-xs-6">
                    <!-- Box info -->
                    <div class="box-info">
                        <!-- Icon box -->
                        <div class="icon-box">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x danger"></i>
                                <i class="fa fa-frown-o fa-stack-1x fa-inverse"></i>
                            </span>
                        </div><!-- End div .icon-box -->
                        <!-- Text box -->
                        <div class="text-box">
                            <?php
                            $sql_nao_aptos = (" select count(*) as nao_aptos  from doador d, triagem t   where t.doador_iddoador = d.iddoador       and t.anemia = 'nao';");
                            foreach ($con->query($sql_nao_aptos) as $row) {
                                ?>
                                <h3><?php echo $row['nao_aptos']; ?></h3>
                                <p>DOADORES <small> NÃO APTOS</small></p>
                                <?php
                            }
                            ?>
                        </div><!-- End div .text-box -->
                        <div class="clear"></div>
                        <!-- Progress bar -->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                <span class="sr-only">65&#37; Complete</span>
                            </div>
                        </div><!-- End div .progress .progress-xs -->
                        <!--<p class="text-center">Existe 3,2 mil em espera</p>-->
                    </div><!-- End div .info-box -->
                </div>
                <!-- End Orders Info Box -->


                <!-- Downloads Info Box -->
                <div class="col-sm-4 col-xs-6">
                    <!-- Box info -->
                    <div class="box-info">
                        <!-- Icon box -->
                        <div class="icon-box">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x success"></i>
                                <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
                            </span>
                        </div><!-- End div .icon-box -->
                        <!-- Text box -->
                        <div class="text-box">
                            <?php
                            $sql_nao_aptos = (" select count(*) as nao_aptos  from doador d, triagem t   where t.doador_iddoador = d.iddoador       and t.anemia = 'sim';");
                            foreach ($con->query($sql_nao_aptos) as $row) {
                                ?>
                                <h3><?php echo $row['nao_aptos']; ?></h3>
                                <p>DOADORES <small>  APTOS</small></p>
                                <?php
                            }
                            ?>
                        </div><!-- End div .text-box -->
                        <div class="clear"></div>
                        <!-- Progress bar -->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="sr-only">95&#37; Complete</span>
                            </div>
                        </div><!-- End div .progress .progress-xs -->
                        <!--<p class="text-center">1,5 mil litros em estoque</p>-->
                    </div><!-- End div .info-box -->
                </div>
                <!-- End Downloads Info Box -->



            </div>
            <div class="page-heading animated fadeInDownBig">
                <h1>Agendamento <small> de Doadores</small></h1>
            </div>

            <div class="table-responsive">

                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="agendamento">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Data de Nascimento</th>
                                    <th>Idade</th>
                                    <th>Data Solicitada</th>
                                    <th>Hora</th>
                                    <th>+ Informações</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select iddoador, data_registro, nome,  date_format(data_nascimento, '%d/%m/%Y') as data_nascimento, idade , date_format(agend_hora, '%H:%i') as 'agend_hora', date_format(agend_data, '%d/%m/%Y') as 'agend_data'
                                            from doador d, agendamento a
                                                where d.iddoador = a.doador_iddoador and
                                                    agend_hora and agend_data  is not null and
                                                    data_registro is null
                                                    group by data_registro, agend_hora, agend_data;");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['iddoador']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['data_nascimento']; ?></td>
                                        <td><?php echo $row['idade']; ?></td>
                                        <td><?php echo $row['agend_data']; ?></td>
                                        <td><?php echo $row['agend_hora']; ?></td>
                                        <td class="text-center">
                                            <?php echo "<a class='btn btn-default' href='./pages/agendamento/atualizar_doador_externo.php?iddoador=" . $row['iddoador'] . "'><i class='glyphicon glyphicon-plus'></i></a>"; ?>
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
            <!-- End of info box -->
            <?php
            include 'layout/rodape.php';
            ?>
        </div>
    </body>
</html>
