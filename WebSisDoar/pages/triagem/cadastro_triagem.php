<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro Triagem</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var nome = $("#nome").val();
                    var idade = $("#idade").val();
                    var peso = $("#peso").val();
                    var status = $("#status").val();

                    var dataString = {id: id, nome: nome,
                        idade: idade, peso: peso,
                        status: status};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/doador/function_triagem.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.reload();
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");

                            }
                        }
                    });
                });
            });
        </script>

    </head>
    <body>
        <div class="body content rows scroll-y">
            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1><small> Cadastro de </small> Triagem </h1>
            </div>
            <!-- End page header -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Cadastro de Triagem </h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">
                            <form role="form" action="../../funcoes/doador/function_triagem.php" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-7">
                                        <label for="nome">Nome</label>
                                        <select class="form-control" id="estado" name="estado">
                                            <option>Selecione um Doador Cadastrado ...</option>
                                            <?php
                                            $sql = ("SELECT iddoador, nome FROM doador");
                                            foreach ($con->query($sql) as $row) {
                                                echo "<option value='" . $row['iddoador'] . "'>" . $row['nome'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class=" form-group col-lg-1">
                                        <label for="data_nascimento">Idade</label>
                                        <input class="form-control"   type="number" id="idade" name="idade">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="idade">Peso</label>
                                        <input class="form-control"   type="text" id="peso" name="peso">
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="status">Status</label>
                                        <select id="status" name="status" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Apt">Apto</option>
                                            <option value="NaoApt">Não Apto</option>
                                        </select>
                                    </div>

                                </div>
                                <!--================================================-------> 
                                <input type="hidden" name="id" id="id" value="0" />
                                <!--================================================-------> 
                                <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                                <button type="reset" class=" btn btn-danger">Limpar</button>
                            </form>
                        </div><!-- End div #basic-form -->
                    </div>
                </div><!-- End div .box-info -->
            </div><!-- End div .col-sm-6 -->
            <?php
            include '../../layout/rodape.php';
            ?>
    </body>
</html>