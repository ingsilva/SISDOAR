<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de Telefones</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var nome = $("#nome").val();
                    var ddd = $("#ddd").val();
                    var telefone = $("#telefone").val();
                    var dpto = $("#dpto").val();

                    var dataString = {id: id, nome: nome,
                        ddd: ddd, telefone: telefone, dpto: dpto};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/funcionario/function_agenda.php",
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
                <h1><small> Cadastro de </small> Telefones </h1>
            </div>
            <!-- End page header -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Cadastro de Telefones </h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">
                            <form role="form" action="../../funcoes/funcionario/function_agenda.php" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-5">
                                        <label for="nome">Nome</label>
                                        <input class="form-control"  id="nome" name="nome" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <label for="idade">DDD</label>
                                        <input class="form-control"   type="number" id="ddd" name="ddd">
                                    </div>
                                    <div class=" form-group col-lg-3">
                                        <label for="cpf">Telefone/Celular</label>
                                        <input class="form-control"   type="text" id="telefone" name="telefone">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="col-sm-3 form-group">
                                       <label for="dpto">Departamento</label>
                                        <select id="dpto" name="dpto" class="form-control">
                                                <option>Escolha</option>
                                            <option value="R">Recepção</option>
                                            <option value="C">Coleta</option>
                                            <option value="S">Sorologia</option>
                                            <option value="I">Imuno/Hematologia</option>
                                            <option value="C">Controle de Qualidade</option>
                                            <option value="P">Processamento/Rotulagem de Bolsas</option>
                                            <option value="D">Distribuição</option>
                                            <option value="T">TI</option>
                                            <option value="E">Estatistica</option>
                                            <option value="C">Capacitação</option>
                                            <option value="R">Residuos</option>

                                        </select>
                                    </div>
                                            <?php
                                            $sql = ("SELECT iddpto, descricao FROM dpto");
                                            foreach ($con->query($sql) as $row) {
                                                echo "<option value='" . $row['iddpto'] . "'>" . $row['descricao'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
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