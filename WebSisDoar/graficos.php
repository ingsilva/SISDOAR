<?php
include './config/conexao.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Galeria de Gráficos</title>
        <link rel="icon" type="image/png"  href="assets/img/apple-touch-icon.png" />
        <?php include './layout/cabecalho.php'; ?>
        <!--imports do js para os gráficos-->
        <script src="./code/highcharts.js"></script>
        <script src="./code/modules/exporting.js"></script>
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
                <?php
                //Formação do Grafico de pizza
                $sql_situacao_doador = "SELECT situacao_doador, count(idq_triagem) as quantidade FROM `questionario_triagem` group by situacao_doador";
                $rows = array();
                foreach ($con->query($sql_situacao_doador) as $row) {
                    $rows[] = $row;
                }
                //Fim da formação do gráfico de pizza
                //Formação do Grafico de linhas
                $sql_distinct_sangue = "SELECT distinct(tipo) from estoque_sangue order by tipo";
                $rowsTipo = array();
                $rowsQuantidade = array();
                foreach ($con->query($sql_distinct_sangue) as $row) {
                    $rowsTipo[] = $row['tipo'];
                    $sql_estoque_sangue = "SELECT tipo, month(data_hora) as mes, SUM(quantidade) as quantidade FROM `estoque_sangue` WHERE tipo = '$row[0]' and year(data_hora) = year(now()) GROUP BY tipo, month(data_hora) order by month(data_hora)";
                    $rowQuantidadeSangue = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                    $a = array();
                    foreach ($con->query($sql_estoque_sangue) as $rowQuantidade) {
                        $rowQuantidadeSangue[$rowQuantidade['mes'] - 1] = (int) $rowQuantidade['quantidade'];
                    }
                    $rowsQuantidade[] = $rowQuantidadeSangue;
                }
                //Fim da formação do gráfico de linha
                //Formação do Grafico de coluna
                $sql_distinct_agendamento = "SELECT month(agend_data) mes, count(agend_data) quantidade FROM `agendamento` WHERE year(agend_data) = year(now())  GROUP BY month(agend_data) order by month(agend_data)";
                $rowsMesAgendamento = array(1, 2, 3);
                $rowsQuantidadeAgendamento = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                foreach ($con->query($sql_distinct_agendamento) as $row) {
                    $rowsQuantidadeAgendamento[$row['mes'] - 1] = (int) $row['quantidade'];
                }
                //Fim da formação do gráfico de coluna
                ?>

                <!--Gráfico de pizza-->
                <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">

                    <script type="text/javascript">

                        Highcharts.chart('container', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'Doadores Aptos e Não Aptos'
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.y}</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                        style: {
                                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                        }
                                    }
                                }
                            },
                            series: [{
                                    name: 'Doadores',
                                    colorByPoint: true,
                                    data: [{
                                            name: '<?php echo $rows[0][0] ?>',
                                            y:<?php echo $rows[0][1] ?>,
                                            color: 'DodgerBlue'/* COR DA FATIA DE DOADORES APTOS; */
                                        }, {
                                            name: '<?php echo $rows[1][0] ?>',
                                            y:<?php echo $rows[1][1] ?>,
                                            sliced: true,
                                            selected: true,
                                            color: 'Coral'/* COR DA FATIA DE DOADORES NÃO APTOS; */
                                        }]
                                }]
                        });
                    </script>
                </div>
            </div>

            <!--Gráfico de linhas-->
            <div class="box-info animated fadeInDown">
                <h2><strong>Tipo</strong> Sanguíneo</h2>
                <?php $msg = "Entrada de bolsas de sangue por tipo sanguíneo em " . date("Y"); ?>
                <div id="container2" >
                    <script type="text/javascript">

                        Highcharts.chart('container2', {

                            title: {
                                <?php echo "text: " . "'" . $msg . "'"; ?>
                            },

                            subtitle: {
                                text: 'fonte: HEMOACRE'
                            },

                            yAxis: {
                                title: {
                                    text: 'Quantidade de bolsas'
                                }
                            },
                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                    pointStart: 1
                                }
                            },

                            series: [
<?php
for ($i = 0; $i < count($rowsTipo); $i++) {
    echo "{ name: " . json_encode($rowsTipo[$i]) . ",data: " . json_encode($rowsQuantidade[$i]) . "},";
}
?>
                            ],

                            responsive: {
                                rules: [{
                                        condition: {
                                            maxWidth: 500
                                        },
                                        chartOptions: {
                                            legend: {
                                                layout: 'horizontal',
                                                align: 'center',
                                                verticalAlign: 'bottom'
                                            }
                                        }
                                    }]
                            }

                        });
                    </script>
                </div>
            </div>


            <!--Gráfico de colunas-->
            <div class="box-info animated fadeInDown">
                <h2><strong>Agendamentos</strong></h2>
<?php
//título do gráfico
$msg = "Agendamentos por mês em " . date("Y");
?>

                <div id="container3">
                    <script type="text/javascript">

                        Highcharts.chart('container3', {
                            chart: {
                                type: 'column'
                            },
                            title: {
<?php echo "text: " . "'" . $msg . "'"; //titulo  ?>
                            },
                            subtitle: {
                                text: 'Fonte: HEMOACRE'
                            },
                            xAxis: {
                                categories: [
                                    'Jan',
                                    'Fev',
                                    'Mar',
                                    'Abr',
                                    'Mai',
                                    'Jun',
                                    'Jul',
                                    'Ago',
                                    'Set',
                                    'Out',
                                    'Nov',
                                    'Dez'
                                ],
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Quantidade de Agendamentos'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                                footerFormat: '</table>',
                                shared: true,
                                useHTML: true
                            },
                            plotOptions: {
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0,
                                    color: 'Coral'/* COR DO GRAFICO EM COLUNAS; */
                                }
                            },
                            series: [
                                // {name: 'Total',
                                // data: [10,0,0,0,0,12,90,1,0,9,89,90]}
<?php
//essa informação é formada na linha 52
echo "{ name: 'Agendamentos' ,data: " . json_encode($rowsQuantidadeAgendamento) . "},";
?>
                            ]
                        });
                    </script>
                </div>
            </div>

        </div>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- VENDOR -->

        <!-- Slimscroll js -->
        <script src="assets/third/slimscroll/jquery.slimscroll.min.js"></script>


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
include './layout/rodape.php';
?>