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


            <div class="row">
                <div class="col-sm-8">
                    <!-- Website statistic -->
                    <div class="box-info">
                        <h2><strong>Website</strong> Estatísticas</h2>

                        <!-- Additional buttons -->
                        <div class="additional-btn">
                            <a class="additional-icon" href="#fakelink"><i class="fa fa-refresh fa-spin"></i></a>
                            <a class="additional-icon" id="dropdownMenu1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu pull-right animated half fadeInDown" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Another action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Separated link</a></li>
                            </ul>
                            <a class="additional-icon" href="#fakelink" data-toggle="collapse" data-target="#website-statistic"><i class="fa fa-chevron-down"></i></a>
                            <a class="additional-icon" href="#fakelink"><i class="fa fa-question-circle"></i></a>
                        </div><!-- End div .additional-button -->
                        <!-- Statistic inner -->
                        <div id="website-statistic" class="statistic-chart collapse in">
                            <!-- Button group -->
                            <div class="btn-group btn-group-xs pull-right">
                                <button class="btn btn-default">All time</button>
                                <button class="btn btn-default">This year</button>
                                <button class="btn btn-default">This month</button>
                                <button class="btn btn-default">Today</button>
                            </div><!-- End div .btn-group -->

                            <!-- Call morris cart with selector #morris-home -->
                            <div id="morris-home" style="height: 200px;"></div>
                            <!-- End morris cart with selector -->
                        </div><!-- End div #website-statistic -->
                    </div><!-- End div .box-info -->
                </div>

                <div class="col-sm-4">
                    <!-- Begin user profile -->
                    <div class="box-info text-center user-profile-2">
                        <div class="header-cover">
                            <img src="images/user-bg.jpg" alt="User cover">
                        </div>
                        <div class="user-profile-inner">
                            <h4 class="white">Bem Vindo,</h4>
                            <img src="assets/img/admin.png" class="img-circle profile-avatar" alt="User avatar">
                            <h5>Administrador</h5>

                            <!-- User button -->
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Webmail</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-user"></i> Contatos</button>
                                    </div>
                                </div>
                            </div><!-- End div .user-button -->
                        </div><!-- End div .user-profile-inner -->
                    </div><!-- End div .box-info -->
                    <!-- End user profile -->
                </div><!-- End div .col-sm-4 -->
            </div><!-- End div .row -->


            <?php
            include 'layout/rodape.php';
            ?>
        </div>
    </body>
</html>
