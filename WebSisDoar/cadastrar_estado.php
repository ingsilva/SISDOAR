<?php
//CABEÇALHO
include './cabecalho.php';
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
                        url: "./funcoes/estado/function_estado.php",
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

                $('a#detalhes').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "buscarcontato.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            retorno = JSON.parse(retorno);
                            $('#det').html('<label for="id">ID: </label>' + retorno.id + '<br><label for="nome">Nome: </label>' + retorno.nome + '<br><label for="email">Email: </label>' + retorno.email);
                            $('#modalDetalhes').modal('show');
                        }
                    });
                    return false;
                });

                $('a#excluir').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "excluircontato.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                listaContatos();
                            } else {
                                alert("Ocorreu um erro ao excluir o registro.");
                            }
                        }
                    });
                    return false;
                });

                function listaContatos() {
                    $.ajax({
                        type: "POST",
                        url: "listacontatos.php",
                        cache: false,
                        success: function (retorno) {
                            $("#lista").html(retorno);
                        }
                    });
                }



                listaContatos();

            });
        </script>
    </head>
    <body>

        <div class="container theme-showcase">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header text-center">Cadastro de Estados</h3><!--titulo-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <form role="form" method="post">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                Informações de Cadastro
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="nome">Nome</label>
                                        <input class="form-control"  id="nome" name="nome" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="col-lg-offset-1 form-group col-lg-3">
                                        <label for="uf">UF</label>
                                        <input class="form-control"   type="text" id="uf" name="uf">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <input type="hidden" name="id" id="id" value="0" />
                                </div>
                            </div>
                        </div>
                        <!--================================================-------> 
                        <div class="panel-footer">
                            <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                            <button type="reset" class=" btn btn-danger">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <script src="js/jQuery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>