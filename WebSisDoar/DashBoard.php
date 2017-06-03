<!DOCTYPE html>
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
            <div class="page-heading">
                <h1>WebSisDoar - <small> Doe Sangue. Doe Vida</small></h1>
            </div>
            <!-- End page header -->


            <!-- Begin info box -->
            <div class="row">

                <!-- Visitor Info Box -->
                <div class="col-sm-3 col-xs-6">
                    <!-- Box info -->
                    <div class="box-info">
                        <!-- Icon box -->
                        <div class="icon-box">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x success"></i>
                                <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                            </span>
                        </div><!-- End div .icon-box -->
                        <!-- Text box -->
                        <div class="text-box">
                            <h3>4,700</h3>
                            <p>DOADORES</p>
                        </div><!-- End div .text-box -->
                        <div class="clear"></div>
                        <!-- Progress bar -->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80&#37; Complete</span>
                            </div>
                        </div><!-- End div .progress .progress-xs -->
                        <p class="text-center">Apenas 4,7 mil doaram</p>
                    </div><!-- End div .info-box -->
                </div>
                <!-- End Visitor Info Box -->


                <!-- Orders Info Box -->
                <div class="col-sm-3 col-xs-6">
                    <!-- Box info -->
                    <div class="box-info">
                        <!-- Icon box -->
                        <div class="icon-box">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x danger"></i>
                                <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                            </span>
                        </div><!-- End div .icon-box -->
                        <!-- Text box -->
                        <div class="text-box">
                            <h3>3,234</h3>
                            <p>PACIENTES</p>
                        </div><!-- End div .text-box -->
                        <div class="clear"></div>
                        <!-- Progress bar -->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                <span class="sr-only">65&#37; Complete</span>
                            </div>
                        </div><!-- End div .progress .progress-xs -->
                        <p class="text-center">Existe 3,2 mil em espera</p>
                    </div><!-- End div .info-box -->
                </div>
                <!-- End Orders Info Box -->


                <!-- Downloads Info Box -->
                <div class="col-sm-3 col-xs-6">
                    <!-- Box info -->
                    <div class="box-info">
                        <!-- Icon box -->
                        <div class="icon-box">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x info"></i>
                                <i class="fa fa-cloud-download fa-stack-1x fa-inverse"></i>
                            </span>
                        </div><!-- End div .icon-box -->
                        <!-- Text box -->
                        <div class="text-box">
                            <h3>1,500</h3>
                            <p>BANCO DE SANGUE</p>
                        </div><!-- End div .text-box -->
                        <div class="clear"></div>
                        <!-- Progress bar -->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="sr-only">95&#37; Complete</span>
                            </div>
                        </div><!-- End div .progress .progress-xs -->
                        <p class="text-center">1,5 mil litros em estoque</p>
                    </div><!-- End div .info-box -->
                </div>
                <!-- End Downloads Info Box -->


                <!-- Shipping Info Box -->
                <div class="col-sm-3 col-xs-6">
                    <!-- Box info -->
                    <div class="box-info">
                        <!-- Icon box -->
                        <div class="icon-box">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x warning"></i>
                                <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
                            </span>
                        </div><!-- End div .icon-box -->
                        <!-- Text box -->
                        <div class="text-box">
                            <h3>2,000</h3>
                            <p>SAÍDA SANGUÍNEA</p>
                        </div><!-- End div .text-box -->
                        <div class="clear"></div>
                        <!-- Progress bar -->
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                                <span class="sr-only">55&#37; Complete</span>
                            </div>
                        </div><!-- End div .progress .progress-xs -->
                        <p class="text-center">2 mil litros recebidos</p>
                    </div><!-- End div .info-box -->
                </div>
                <!-- End Shipping Info Box -->

            </div>
            <!-- End of info box -->
            <?php
            include 'layout/rodape.php';
            ?>
        </div>
    </body>
</html>
