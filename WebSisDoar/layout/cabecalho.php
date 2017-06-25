<?PHP
require_once 'C:\xampp\htdocs\SISDOAR/WebSisDoar/funcoes/usuario/seguranca.php'; 
protegePagina();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Doe Sangue Doe Vida</title>
        <link rel="icon" type="image/png" href="/SISDOAR/WebSisDoar/assets/img/apple-touch-icon.png" />
        <meta charset="utf-8">
<!--        <meta http-equiv="X-UA-Compatible" content="IE=edge">
-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png"  href="/SISDOAR/ap.css" rel="stylesheet">

        <!-- LANCENG CSS -->
        <link href="/SISDOAR/WebSisDoar/assets/css/style.css" rel="stylesheet">

        <!-- Bootstrap Core CSS -->
        <link href="/SISDOAR/WebSisDoar/assets/css/bootstrap.css" rel="stylesheet">

        <!-- LANCENG CSS -->
        <link href="/SISDOAR/WebSisDoar/assets/css/style.css" rel="stylesheet">
        <link href="/SISDOAR/WebSisDoar/assets/css/style-responsive.css" rel="stylesheet">

        <!-- VENDOR -->
        <link href="/SISDOAR/WebSisDoar/assets/css/animate.css" rel="stylesheet">
        <link href="/SISDOAR/WebSisDoar/assets/third/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/SISDOAR/WebSisDoar/assets/third/weather-icon/css/weather-icons.min.css" rel="stylesheet">
        <link href="/SISDOAR/WebSisDoar/assets/third/morris/morris.css" rel="stylesheet">
        <link href="/SISDOAR/WebSisDoar/assets/third/nifty-modal/css/component.css" rel="stylesheet">

        <link href="/SISDOAR/WebSisDoar/assets/third/icheck/skins/minimal/grey.css" rel="stylesheet"> 
        <link href="/SISDOAR/WebSisDoar/assets/third/select/bootstrap-select.min.css" rel="stylesheet"> 
        <link href="/SISDOAR/WebSisDoar/assets/third/summernote/summernote.css" rel="stylesheet">
        <link href="/SISDOAR/WebSisDoar/assets/third/magnific-popup/magnific-popup.css" rel="stylesheet"> 


        <link rel="stylesheet" href="/SISDOAR/WebSisDoar/assets/datatables/dataTables.bootstrap.css">

        <!-- Custom Fonts -->
        <link href="/SISDOAR/WebSisDoar/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- jQuery -->
        <script src="/SISDOAR/WebSisDoar/assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/SISDOAR/WebSisDoar/assets/js/bootstrap.min.js"></script>




        <!--
================================================
JAVASCRIPT
================================================
        -->
        <!-- Basic Javascripts (Jquery and bootstrap) -->
        <script src="/SISDOAR/WebSisDoar/assets/js/jquery.js"></script>
        <script src="/SISDOAR/WebSisDoar/assets/js/bootstrap.min.js"></script>

        <!-- VENDOR -->

        <!-- Slimscroll js -->
        <script src="/SISDOAR/WebSisDoar/assets/third/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Morris js -->
     <!--   <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
        <script src="/js/raphael-min.js"></script>
        <script src="assets/third/morris/morris.js"></script>


        <!-- LANCENG TEMPLATE JAVASCRIPT -->

        <!-- DataTables -->
        <script src="/SISDOAR/WebSisDoar/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="/SISDOAR/WebSisDoar/assets/datatables/dataTables.bootstrap.min.js"></script>
        <script src="/SISDOAR/WebSisDoar/js/dataTables.bootstrap.min.js"></script>
        <script src="/SISDOAR/WebSisDoar/assets/js/livequery.js"></script>
        <script src="/SISDOAR/WebSisDoar/layout/cabecalho.js"></script>
    </head>
    <!-- BODY -->
    <body class="tooltips">

        <!-- BEGIN PAGE -->
        <div class="container">

            <!-- Your logo goes here -->
            <div class="logo-brand header sidebar rows">
                <div class="logo">
                    <h1><a href="/SISDOAR/WebSisDoar/DashBoard.php"><img src="/SISDOAR/WebSisDoar/assets/img/icon_coracao.png" alt="Logo"> WEB SISDOAR</a></h1>
                </div>
            </div><!-- End div .header .sidebar .rows -->

            <!-- BEGIN SIDEBAR -->
            <div class="left side-menu">


                <div class="body rows scroll-y">

                    <!-- Scrolling sidebar -->
                    <div class="sidebar-inner slimscroller">

                        <!-- User Session -->
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object img-circle" src="/SISDOAR/WebSisDoar/assets/img/admin.png" alt="Avatar">
                            </a>
                            <div class="media-body">
                                Bem Vindo(a),
                                <h4 class="media-heading "><strong><?php echo $_SESSION['usuarioNome'] ?></strong></h4>
                                <a href="user-profile.html">Editar</a>
                                <a href="#" class="sair">Sair</a>
                            </div><!-- End div .media-body -->
                        </div><!-- End div .media -->


                        <!-- Search form -->
                        <div id="search">
                            <form role="form">
                                <input type="text" class="form-control search" placeholder="Pesquisar...">
                                <i class="fa fa-search"></i>
                            </form>
                        </div><!-- End div #search -->


                        <!-- Sidebar menu -->				
                        <div id="sidebar-menu">
                            <ul>
                                <li><a href="/SISDOAR/WebSisDoar/DashBoard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li><a href="/SISDOAR/WebSisDoar/pages/usuario/lista_usuario.php"><i class="glyphicon glyphicon-log-in"></i> Usuários</a></li>
                                <li><a href="/SISDOAR/WebSisDoar/pages/doador/lista_doador.php"><i class="fa fa-user"></i><i class="fa fa-plus-square-o i-right"></i>Doadores</a>

                                </li>
                                <li><a href="#fakelink"><i class="fa fa-file-text-o"></i><i class="fa fa-angle-double-down i-right"></i> Triagem</a>
                                    <ul>
                                        <li><a href="/SISDOAR/WebSisDoar/pages/triagem/pre_triagem.php"><i class="fa fa-angle-right"></i> Coletar Informações</a></li>
                                        <li><a href="/SISDOAR/WebSisDoar/pages/triagem/lista_triagem.php"><i class="fa fa-angle-right"></i>Triados</a></li>
                                    </ul>
                                </li>

                                <li><a href="#fakelink"><i class="fa fa-map-marker"></i><i class="fa fa-angle-double-down i-right"></i> Tabelas Auxiliares</a>
                                    <ul>
                                        <li><a href="/SISDOAR/WebSisDoar/pages/localizar/lista_cidades.php"><i class="fa fa-angle-right"></i> Cidades</a></li>
                                        <li><a href="/SISDOAR/WebSisDoar/pages/localizar/lista_estados.php"><i class="fa fa-angle-right"></i> Estados</a></li>
                                    </ul>
                                </li>
                                <li><a href="/SISDOAR/WebSisDoar/pages/estoque/estoque_sangue.php"><i class="fa fa-tint"></i> Estoque de Sangue</a></li>
                                <li><a href="/SISDOAR/WebSisDoar/pages/funcionario/lista_agenda.php"><i class="glyphicon glyphicon-earphone"></i>Agenda</a>
                                <li><a href="/SISDOAR/WebSisDoar/graficos.php"><i class="fa fa-bar-chart-o"></i> Gráficos</a></li>

                            </ul>
                            <div class="clear"></div>
                        </div><!-- End div #sidebar-menu -->
                    </div><!-- End div .sidebar-inner .slimscroller -->
                </div><!-- End div .body .rows .scroll-y -->

                <!-- Sidebar footer -->
                <div class="footer rows animated fadeInUpBig">
                    <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="progress-precentage">80&#37;</span>
                        </div><!-- End div .pogress-bar -->
                        <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                    </div><!-- End div .progress .progress-xs -->
                </div><!-- End div .footer .rows -->
            </div>
            <!-- END SIDEBAR -->



            <!-- BEGIN CONTENT -->
            <div class="right content-page">

                <!-- BEGIN CONTENT HEADER -->
                <div class="header content rows-content-header">

                    <!-- Button mobile view to collapse sidebar menu -->
                    <button class="button-menu-mobile show-sidebar">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- BEGIN NAVBAR CONTENT-->				
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <!-- Navbar header -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <i class="fa fa-angle-double-down"></i>
                                </button>
                            </div><!-- End div .navbar-header -->

                            <!-- Navbar collapse -->	
                            <div class="navbar-collapse collapse">

                                <!-- Left navbar -->
                                <ul class="nav navbar-nav">

                                </ul>

                            </div><!-- End div .navbar-collapse -->
                        </div><!-- End div .container -->
                    </div>
                    <!-- END NAVBAR CONTENT-->
                </div>

                <!-- END CONTENT HEADER -->

                </html>
