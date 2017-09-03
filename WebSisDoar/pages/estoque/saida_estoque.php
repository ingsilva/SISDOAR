<?php
include '../../config/conexao.php';
?>
<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Estoque de Sangue</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var quantidade = $("#quantidade").val();
                    var tipo_sangue = $("#tipo_sangue").val();
                    var fator_rh = $("#fator_rh").val();
                    

                    var dataString = {id: id, quantidade: quantidade, tipo_sangue: tipo_sangue,
                        fator_rh: fator_rh};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/estoque/saida_estoque.php",
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
                <h1> Saida <small>de Sangue</small></h1>
            </div>
            <!-- End page header -->

            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Saida de Sangue</h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">
                            <form role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-2">
                                        <label for="tipo_sangue">Tipo</label>
                                        <select id="tipo_sangue" name="tipo_sangue" class="form-control">
                                            <option>Escolha</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="fator_rh">Fator RH</label>
                                        <select class="form-control" id="fator_rh" name="fator_rh">
                                            <option>Escolha</option>
                                            <option value="Positivo">Positivo</option>
                                            <option value="Negativo">Negativo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="quantidade">Quantidade</label>
                                        <input class="form-control" type="number"  id="quantidade" name="quantidade">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="data_retirada">Data Retirada</label>
                                        <input class="form-control" type="date"  id="quantidade" name="data_retirada">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="hora_retirada">Hora Retirada</label>
                                        <input class="form-control" type="time"  id="quantidade" name="hora_retirada">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>

                                    <input type="hidden" name="id" id="id" value="0" />
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

