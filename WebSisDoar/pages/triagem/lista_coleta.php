<?php
include '../../config/conexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Triagem de Doadores</title>
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
                <h1> Coleta <small> de Informações </small></h1>
            </div>
            <!-- End page header -->


            <div class="panel panel-default">
                <div class="panel-heading">
                    
                </div>
                <!-- /.panel-heading -->
                <div class="table-responsive">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="triagem">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID qtria</th>
                                    <th>Nome</th>
                                    <th>Idade</th>                                    
                                    <th>T. Hematologica</th>
                                    <th>T. Clínica</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select iddoador, idq_triagem, t.doador_iddoador, d.nome, truncate(datediff(now(), data_nascimento)/365,0) as 'idade',
                                            date_format(data_registro, '%d/%m/%Y') as data_registro, 
                                            case teste_anemia	
                                                   when 'nao_apto' then 'Inapto a Doar'
                                                   when 'apto' then 'Apto a Doar'
                                            end teste_anemia,
                                            case situacao_doador	
                                                   when 'nao_apto' then 'Inapto a Doar'
                                                   when 'apto' then 'Apto a Doar'
                                            end situacao_doador 
                                            from doador d
                                             left join triagem t
													on d.iddoador = t.doador_iddoador
                                              inner join questionario_triagem qt 
													on t.idtriagem = qt.triagem_idtriagem
                                               
									group by nome, idade;");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['iddoador']; ?></td>
                                        <td><?php echo $row['idq_triagem']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['idade']; ?></td>
                                        <td><?php echo $row['teste_anemia']; ?></td>
                                        <td><?php echo $row['situacao_doador']; ?></td>

                                        <td class="text-center">
                                            <?php echo "<a class='btn btn-default' href='../triagem/coleta_informacoes.php?idq_triagem=" . $row['idq_triagem'] . "'><i class='glyphicon glyphicon-plus'></i></a>"; ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>


            <script>
                $(function () {
                    $('#triagem').DataTable({
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

