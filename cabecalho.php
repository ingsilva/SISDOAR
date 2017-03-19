<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Doe + Vida - Página Incial</title>
        <link rel="icon" type="image/png"  href="assets/img/apple-touch-icon.png" />

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/landing-page.css" rel="stylesheet">
        <link href="assets/css/theme.css" rel="stylesheet">


        <link rel="stylesheet" href="assets/datatables/dataTables.bootstrap.css">

        <!-- Custom Fonts -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- DataTables -->
        <script src="assets/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/dataTables.bootstrap.min.js"></script>

    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default   navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Web SISDOAR</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Inicio</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="tabela-doadores.jsp">Cadastro</a></li>
                                <li><a href="tabela-triagem.jsp">Triagem</a></li>
                                <li><a href="lista-triagem-doador.jsp">Doação</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="tabela-paciente.jsp">Cadastro</a></li>
                                <!-- <li><a href="lista-triagem-paciente.jsp">Triagem</a></li>-->
                                <li><a href="lista-pacientes.jsp">Receber Doação</a></li>
                                <!-- <li><a href="lista-triagem.jsp">Triagem</a></li>-->
                            </ul>
                        </li>
                        <li><a href="banco-sangue.jsp">Banco de Sangue</a></li>                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros Básicos<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="tabela-cidades.jsp">Cidades</a></li>
                                <li><a href="tabela-estados.jsp">Estados</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

    </body>
</html>
