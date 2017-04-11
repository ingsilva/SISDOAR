<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png"  href="/SISDOAR/ap.css" rel="stylesheet">

        <!-- LANCENG CSS -->
        <link href="/SISDOAR/WebSisDoar/assets/css/style.css" rel="stylesheet">
        <link href="/SISDOAR/WebSisDoar/assets/css/style-respWebSisDoar/assets/img/apple-touch-icon.png" />

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
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="assets/third/morris/morris.js"></script>


        <!-- LANCENG TEMPLATE JAVASCRIPT -->

        <!-- DataTables -->
        <script src="/SISDOAR/WebSisDoar/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="/SISDOAR/WebSisDoar/assets/datatables/dataTables.bootstrap.min.js"></script>
        <script src="/SISDOAR/WebSisDoar/js/dataTables.bootstrap.min.js"></script>
        <script src="/SISDOAR/WebSisDoar/assets/js/livequery.js"></script>

    </head>
    <!-- BODY -->
    <body class="tooltips">

        <!-- BEGIN PAGE -->
        <div class="container">

            <!-- Your logo goes here -->
            <div class="logo-brand header sidebar rows">
                <div class="logo">
                    <h1><a href="#fakelink"><img src="/SISDOAR/WebSisDoar/assets/img/apple-touch-icon.png" alt="Logo"> WEB SISDOAR</a></h1>
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
                                <img class="media-object img-circle" src="/SISDOAR/WebSisDoar/assets/img/Ingryd_perfil.jpg" alt="Avatar">
                            </a>
                            <div class="media-body">
                                Welcome back,
                                <h4 class="media-heading"><strong>Mas Bro</strong></h4>
                                <a href="user-profile.html">Edit</a>
                                <a class="md-trigger" data-modal="logout-modal-alt">Logout</a>
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
                                <li><a href="#fakelink"><i class="fa fa-leaf"></i> Frontend <span class="label label-danger new-circle">COMING SOON</span></a></li>
                                <li><a href="#fakelink"><i class="fa fa-bug"></i><i class="fa fa-angle-double-down i-right"></i> Elements</a>
                                    <ul>
                                        <li><a href="element-primary.html"><i class="fa fa-angle-right"></i> Primary <span class="label label-success new-circle">UPDATED</span></a></li>
                                        <li><a href="element-extended.html"><i class="fa fa-angle-right"></i> Extended</a></li>
                                    </ul>
                                </li>
                                <li><a href="#fakelink"><i class="fa fa-code"></i><i class="fa fa-angle-double-down i-right"></i> Widgets</a>
                                    <ul>
                                        <li><a href="widget-awesome.html"><i class="fa fa-angle-right"></i> Awesome <span class="label label-danger new-circle">+5 new</span></a></li>
                                        <li><a href="widget-grid.html"><i class="fa fa-angle-right"></i> Grid</a></li>
                                    </ul>
                                </li>
                                <li><a href="#fakelink"><i class="fa fa-edit"></i><i class="fa fa-angle-double-down i-right"></i> Forms</a>
                                    <ul>
                                        <li><a href="form-element.html"><i class="fa fa-angle-right"></i> Form Element</a></li>
                                        <li><a href="form-wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>
                                        <li><a href="form-validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
                                    </ul>
                                </li>
                                <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
                                <li><a href="gallery.html"><i class="fa fa-picture-o"></i><i class="fa fa-star i-right yellow"></i> Gallery</a></li>
                                <li><a href="morris.html"><i class="fa fa-bar-chart-o"></i> Graph / Chart</a></li>
                                <li><a href="#fakelink"><i class="fa fa-home"></i><i class="fa fa-angle-double-down i-right"></i> Pages <span class="label label-success new-circle animated double shake span-left">13</span></a>
                                    <ul>
                                        <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                                        <li><a href="lock-screen.html"><i class="fa fa-angle-right"></i> Lock Screen</a></li>
                                        <li><a href="forgot-password.html"><i class="fa fa-angle-right"></i> Forgot Password</a></li>
                                        <li><a href="register.html"><i class="fa fa-angle-right"></i> Register</a></li>
                                        <li><a href="user-profile.html"><i class="fa fa-angle-right"></i> User Profile</a></li>
                                        <li><a href="user-profile-2.html"><i class="fa fa-angle-right"></i> User Profile 2 <span class="label label-danger new-circle">NEW</span></a></li>
                                        <li><a href="empty-data.html"><i class="fa fa-angle-right"></i> Empty Data <span class="label label-danger new-circle">NEW</span></a></li>
                                        <li><a href="invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
                                        <li><a href="pricing-table.html"><i class="fa fa-angle-right"></i> Pricing Table <span class="label label-success new-circle">UPDATED</span></a></li>
                                        <li><a href="faq.html"><i class="fa fa-angle-right"></i> FAQ</a></li>
                                        <li><a href="search-result.html"><i class="fa fa-angle-right"></i> Search Result <span class="label label-success new-circle">UPDATED</span></a></li>
                                        <li><a href="404.html"><i class="fa fa-angle-right"></i> 404</a></li>
                                        <li><a href="blank.html"><i class="fa fa-angle-right"></i> Blank</a></li>
                                    </ul>
                                </li>

                                
                                <li><a href="#fakelink"><i class="fa fa-home"></i><i class="fa fa-angle-double-down i-right"></i> Localização <span class="label label-success new-circle animated double shake span-left">13</span></a>
                                    <ul>
                                        <li><a href="/SISDOAR/WebSisDoar/pages/localizar/lista_estados.php"><i class="fa fa-angle-right"></i> Estados</a></li>
                                        
                                    </ul>
                                </li>
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
                                    <li>
                                        <a href="#fakelink">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                    </li>

                                    <!-- Dropdown language -->
                                    <li class="dropdown">
                                        <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-chevron-down i-xs"></i></a>
                                        <ul class="dropdown-menu animated half flipInX">
                                            <li><a href="#fakelink">English (British)</a></li>
                                            <li><a href="#fakelink">Bahasa Indonesia</a></li>
                                            <li><a href="#fakelink">French</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <!-- Right navbar -->
                                <ul class="nav navbar-nav navbar-right top-navbar">

                                    <!-- Dropdown notifications -->
                                    <li class="dropdown">
                                        <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="label label-danger absolute">24</span></a>
                                        <ul class="dropdown-menu dropdown-message animated half flipInX">
                                            <!-- Dropdown notification header -->
                                            <li class="dropdown-header notif-header">New Notifications</li>
                                            <li class="divider"></li>

                                            <!-- Dropdown notification body -->
                                            <li class="unread">
                                                <a href="#fakelink">
                                                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                        <br /><i>2 minutes ago</i></p>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#fakelink">
                                                    <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                        <br /><i>8 minutes ago</i></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#fakelink">
                                                    <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                        <br /><i>an hour ago</i></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#fakelink">
                                                    <p><strong>Ari Rusmanto</strong> Added 3 products
                                                        <br /><i>3 hours ago</i></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#fakelink">
                                                    <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                        <br /><i>12 hours ago</i></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#fakelink">
                                                    <p><strong>Johnny Depp</strong> Updated his avatar
                                                        <br /><i>Yesterday</i></p>
                                                </a>
                                            </li>

                                            <!-- Dropdown notification footer -->
                                            <li class="dropdown-footer"><a href="#fakelink"><i class="fa fa-refresh"></i> Refresh</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Dropdown notifications -->


                                    <!-- Dropdown Messages -->
                                    <li class="dropdown">
                                        <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">24</span></a>
                                        <ul class="dropdown-menu dropdown-message animated half flipInX">
                                            <!-- Dropdown Messages header -->
                                            <li class="dropdown-header notif-header">New Messages</li>

                                            <!-- Dropdown messages body -->
                                            <li class="divider"></li>
                                            <li class="unread">
                                                <a href="#fakelink">
                                                    <img src="assets/img/avatar/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                    <strong>John Doe</strong><br />
                                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                                    <p><i>5 minutes ago</i></p>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#fakelink">
                                                    <img src="assets/img/avatar/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                    <strong>Annisa Rusmanovski</strong><br />
                                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                                    <p><i>2 hours ago</i></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#fakelink">
                                                    <img src="assets/img/avatar/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                    <strong>Ari Rusmanto</strong><br />
                                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                                    <p><i>5 hours ago</i></p>
                                                </a>
                                            </li>

                                            <!-- Dropdown messages footer -->
                                            <li class="dropdown-footer"><a href="#fakelink"><i class="fa fa-share"></i> See all messages</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Dropdown messages -->

                                    <!-- Dropdown User session -->
                                    <li class="dropdown">
                                        <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">Howdy, <strong>Mas Bro</strong> <i class="fa fa-chevron-down i-xs"></i></a>
                                        <ul class="dropdown-menu animated half flipInX">
                                            <li><a href="#fakelink">My Profile</a></li>
                                            <li><a href="#fakelink">Change Password</a></li>
                                            <li><a href="#fakelink">Account Setting</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Another action</li>
                                            <li><a href="#fakelink">Help</a></li>
                                            <li><a href="lock-screen.html">Lock me</a></li>
                                            <li><a class="md-trigger" data-modal="logout-modal">Logout</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Dropdown User session -->
                                </ul>
                            </div><!-- End div .navbar-collapse -->
                        </div><!-- End div .container -->
                    </div>
                    <!-- END NAVBAR CONTENT-->
                </div>
                <!-- END CONTENT HEADER -->

                </html>
