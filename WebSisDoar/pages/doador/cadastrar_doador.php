<?php
include '../../config/conexao.php';
?>
<?php
include '../../layout/cabecalho.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de Estados</title>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var nome = $("#nome").val();
                    var uf = $("#uf").val();
                    var dataString = {id: id, nome: nome, uf: uf};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/localizar/function_estado.php",
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

                $('a#editar').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "buscarcontato.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            retorno = JSON.parse(retorno);
                            console.log(retorno);
                            $("#id").val(retorno.id);
                            $("#nome").val(retorno.nome);
                            $("#email").val(retorno.email);
                            $('#modalContato').modal('show');
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
                <h1><small> Cadastro de </small> Estados </h1>
            </div>
            <!-- End page header -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Cadastro de Estados </h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">
                            <form role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="nome">Nome</label>
                                        <input class="form-control"  id="nome" name="nome" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="col-lg-offset-1 form-group col-lg-3">
                                        <label for="dataNasc">Data de Nascimento</label>
                                        <input class="form-control"   type="date" id="dataNasc" name="dataNasc">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="idade">Idade</label>
                                        <input class="form-control"   type="number" id="idade" name="idade">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="cpf">CPF</label>
                                        <input class="form-control"   type="text" id="cpf" name="cpf">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="rg">RG</label>
                                        <input class="form-control" type="text"  id="rg" name="rg">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2 form-group">
                                        <label for="cidade">Cidade</label>
                                        <select class="form-control" id="cidade" name="cidade">
                                            <option>------</option>
                                            <?php
                                            $sql = ("SELECT idcidade, descricao FROM cidade");
                                            foreach ($con->query($sql) as $row) {
                                                echo "<option value='" . $row['idcidade'] . "'>" . $row['descricao'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-1 form-group">
                                        <label for="estado">Estado</label>
                                        <select class="form-control" id="estado" name="estado">
                                            <option>------</option>
                                            <?php
                                            $sql = ("SELECT idestado, uf FROM estado");
                                            foreach ($con->query($sql) as $row) {
                                                echo "<option value='" . $row['idestado'] . "'>" . $row['uf'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-8">
                                        <label for="complemento">Complemento</label>
                                        <input class="form-control" type="text" id="complemento" name="complemento" >
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="tiposangue">Tipo</label>
                                        <select name="tiposangue" class="form-control">
                                            <option>Escolha</option>
                                            <option>A</option>
                                            <option>AB</option>
                                            <option>O</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="fatorrh">Fator RH</label>
                                        <select class="form-control" id="fatorrh" name="fatorrh">
                                            <option>Escolha</option>
                                            <option>Positivo</option>
                                            <option>Negativo</option>
                                        </select>
                                    </div>
                                </div>
                                <!--================================================-------> 
                                <input type="hidden" name="id" id="id" value="0" />
                                <!--================================================-------> 

                                <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                                <button type="reset" class=" btn btn-danger">Limpar</button>
                            </form>
                        </div>
                    </div><!-- End div #basic-form -->
                </div><!-- End div .box-info -->
            </div><!-- End div .col-sm-6 -->
            <?php
            include '../../layout/rodape.php';
            ?>
    </body>
</html>