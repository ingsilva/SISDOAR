<?php
include './layout/cabecalho.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Galeria</title>
        <link rel="icon" type="image/png"  href="assets/img/apple-touch-icon.png" />
    </head>
    <body class="tooltips">
        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1>Graficos <small> de doação</small></h1>
            </div>
            <!-- End page header -->

            <div class="box-info animated fadeInDown">
                <h2><strong>Estimativa</strong> de Doadores</h2>
                <div id="morris-area-chart" style="height: 250px;"></div>
            </div>


            <div class="box-info animated fadeInDown">
                <h2><strong>Porcentagem</strong> Sanguínea</h2>
                <div id="morris-line-chart" style="height: 250px;"></div>
            </div>


        </div>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- VENDOR -->

        <!-- Slimscroll js -->
        <script src="assets/third/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Morris js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="assets/third/morris/morris.js"></script>
        <script src="assets/js/example-morris.js"></script>

        <!-- Nifty modals js -->
        <script src="assets/third/nifty-modal/js/classie.js"></script>
        <script src="assets/third/nifty-modal/js/modalEffects.js"></script>

        <!-- Sortable js -->
        <script src="assets/third/sortable/sortable.min.js"></script>

        <!-- Bootstrao selectpicker js -->
        <script src="assets/third/select/bootstrap-select.min.js"></script>

        <!-- Summernote js -->
        <script src="assets/third/summernote/summernote.js"></script>

        <!-- Magnific popup js -->
        <script src="assets/third/magnific-popup/jquery.magnific-popup.min.js"></script> 

        <!-- Bootstrap file input js -->
        <script src="assets/third/input/bootstrap.file-input.js"></script>

        <!-- Bootstrao datepicker js -->
        <script src="assets/third/datepicker/js/bootstrap-datepicker.js"></script>

        <!-- Icheck js -->
        <script src="assets/third/icheck/icheck.min.js"></script>

        <!-- Form wizard js -->
        <script src="assets/third/wizard/jquery.snippet.min.js"></script>
        <script src="assets/third/wizard/jquery.easyWizard.js"></script>
        <script src="assets/third/wizard/scripts.js"></script>

        <!-- LANCENG TEMPLATE JAVASCRIPT -->
        <script src="assets/js/lanceng.js"></script>

    </body>
</html>
<?php
include 'layout/rodape.php';
?>