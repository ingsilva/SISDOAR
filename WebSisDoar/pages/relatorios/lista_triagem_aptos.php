<?php
include '../../config/conexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relatórios</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $('a#excluir').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/triagem/excluir_triagem.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Registro Excluido com Sucesso.");
                                location.reload();

                            } else {
                                alert(id);
                                alert("Ocorreu um erro ao excluir o registro.");
                            }
                        }
                    });
                    return false;
                });
            });
        </script>
    </head>
    <body>

        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1> Aptos a Doar</h1>
            </div>
            <!-- End page header -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    Doadores <strong>Aptos após Coleta</strong>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="coleta">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Idade</th>                                    
                                    <th>T. Hematologica</th>
                                    <th>T. Clínica</th>
                                    <th>T. Coleta</th>
                                    <th>+ Informações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select iddoador, idest_sangue, idq_triagem, d.nome, truncate(datediff(now(), data_nascimento)/365,0) as 'idade',
                                            date_format(data_registro, '%d/%m/%Y') as data_registro, d.tipo_sangue, d.fator_rh,
                                            case teste_anemia
                                                    when 'nao_apto' then 'Inapto a Doar'
                                                    when 'apto' then 'Apto a Doar'
                                            end teste_anemia,
                                            case situacao_doador
                                                    when 'nao_apto' then 'Inapto a Doar'
                                                    when 'apto' then 'Apto a Doar'
                                            end situacao_doador,
                                            case status_coleta
                                                    when 'nao' then 'Inapto a Doar'
                                                    when 'sim' then 'Apto a Doar'
                                            end status_coleta
                                            from doador d
                                             left join triagem t
							on d.iddoador = t.doador_iddoador
                                                inner join questionario_triagem qt
							on t.idtriagem = qt.triagem_idtriagem
                                                    inner join estoque_sangue es
							on qt.idq_triagem = es.questionario_triagem_idq_triagem
								and status_coleta = 'sim'
                                                    group by nome, idade;");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['iddoador']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['idade']; ?></td>
                                        <td><?php echo $row['teste_anemia']; ?></td>
                                        <td><?php echo $row['situacao_doador']; ?></td>
                                        <td><?php echo $row['status_coleta']; ?></td>
                                        <td class="text-center">
                                            <?php echo "<a class='btn btn-success' href='../relatorios/relatorio_aptos.php?idest_sangue=" . $row['idest_sangue'] . "'>Gerar</a>"; ?>
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
                    $('#htc').DataTable({
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

                    $('#coleta').DataTable({
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

