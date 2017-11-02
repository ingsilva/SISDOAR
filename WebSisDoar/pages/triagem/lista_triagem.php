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
                <h1> Clínica: <small>Triagem Clínica</small></h1>
            </div>
            <!-- End page header -->

            <div class="table-responsive">

                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="triagem">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Idade</th>                                    
                                    <th>Sexo</th>
                                    <th>Data Registro</th>
                                    <th>Status HTC</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = ("select t.idtriagem, d.nome, truncate(datediff(now(), data_nascimento)/365,0) as 'idade',
                                            date_format(data_registro, '%d/%m/%Y') as data_registro,
                                            case  anemia	
                                                            when 'sim' then 'Apto a Doar'
                                            end anemia, 
                                            case sexo
                                                when 'F' then 'Feminino'
                                                when 'M' then 'Masculino'
                                            end sexo
                                            from doador d, triagem t   
                                                    where t.doador_iddoador = d.iddoador 
                                                    and t.anemia = 'sim'
                                                    group by nome, idade;");
                                foreach ($con->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['idtriagem']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['idade']; ?></td>
                                        <td><?php echo $row['sexo']; ?></td>
                                        <td><?php echo $row['data_registro']; ?></td>
                                        <td><?php echo $row['anemia']; ?></td>
                                        
                                        <td class="text-center">
                                            <?php echo "<a class='btn btn-default' href='./questionario.php?idtriagem=" . $row['idtriagem'] . "'><i class='glyphicon glyphicon-plus'></i></a>"; ?>
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

