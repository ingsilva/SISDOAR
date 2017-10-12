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
                    var idtriagem = $("#idtriagem").val();
                    var categoria = $("#categoria").val();

                    var dataString = {id: id, quantidade: quantidade, tipo_sangue: tipo_sangue,
                        fator_rh: fator_rh, idtriagem: idtriagem, categoria: categoria};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/estoque/ent_estoque.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.reload();
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");
                                alert(idtriagem);
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
                <h1><small> Cadastro </small> Triagem </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['idtriagem'])) {
                $sql = "SELECT iddoador, idtriagem, nome, date_format(data_nascimento,'%d/%m/%Y')data_nascimento, truncate(datediff(now(), data_nascimento)/365,0) as 'idade', 
                                    tipo_sangue, d.fator_rh, status, jejum
                            FROM doador d, triagem t
                                WHERE  d.iddoador = t.doador_iddoador 
                                    AND 
                                       idtriagem ='" . $_GET['idtriagem'] . "'group by iddoador	";

                foreach ($con->query($sql) as $row) {
                    ?>
                    <!--===============================================================-->            
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" name="id" id="id" value="0" />
                            <input type="hidden" name="idtriagem" id="idtriagem" value="<?php echo $row['idtriagem'] ?>" />
                            <!-- Basic form -->
                            <div class="box-info">
                                <h2>Cadastro Triagem</h2>
                                <!-- Basic form body -->
                                <div id="basic-form" class="collapse in">
                                    <form role="form" method="post">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="nome">Nome</label>
                                                <input class="form-control"  type="text" id="nome" name="nome" value="<?php echo $row['nome'] ?>" >
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class=" form-group col-lg-2">
                                                <label for="data_nascimento">Data de Nascimento</label>
                                                <input class="form-control"   type="text" id="data_nascimento" name="data_nascimento" value="<?php echo $row['data_nascimento'] ?>"  >
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="idade">Idade</label>
                                                <input class="form-control"  type="text" id="idade" name="idade" value="<?php echo $row['idade'] ?>"  >
                                            </div>
                                            <div class="form-group col-sm-2">
                                                <label for="status">Status</label>
                                                <input class="form-control" type="text"  id="status" name="status" value="<?php echo $row['status'] ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-2">
                                                <label for="tipo_sangue">Tipo</label>
                                                <input class="form-control" type="text"  id="tipo_sangue" name="tipo_sangue" value="<?php echo $row['tipo_sangue'] ?>" >
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="fator_rh">Fator RH</label>
                                                <input class="form-control" type="text"  id="fator_rh" name="fator_rh" value="<?php echo $row['fator_rh'] ?>" >
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="jejum">Jejum</label>
                                                <input class="form-control" type="text"  id="status" name="jejum" value="<?php echo $row['jejum'] ?>" >
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="quantidade">Quantidade</label>
                                                <input class="form-control" type="number"  id="quantidade" name="quantidade">
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-sm-2">
                                                <label for="categoria">Categoria</label>
                                                <input class="form-control"  type="text" id="categoria" name="categoria" value="Entrada"  >
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
                <!---========================================================================-->  
                <?php
            }
        }
        ?>
        <?php
        include '../../layout/rodape.php';
        ?>
        <!---========================================================================-->  
    </body>
</html>

