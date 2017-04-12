<?php
include '../../config/conexao.php';
?>
<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de Cidades</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var nome = $("#nome").val();
                    var estado = $("#estado").val();
                    var dataString = {id: id, nome: nome, estado: estado};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/localizar/function_cidade.php",
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
                <h1><small> Cadastro de </small> Cidades </h1>
            </div>
            <!-- End page header -->


            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Cadastro de Cidades</h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">

                            <form role="form" method="post">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="nome">Nome</label>
                                            <input class="form-control"  id="nome" name="nome" >
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>

                                        <div class="col-sm-3 form-group">
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
                                        <input type="hidden" name="id" id="id" value="0" />
                                    </div>
                                </div>
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