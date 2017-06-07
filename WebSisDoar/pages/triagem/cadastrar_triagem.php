<?php
include '../../config/conexao.php';
?>
<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de triagem</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var idade = $("#idade").val();
                    var peso = $("#peso").val();
                    var jejum = $("#jejum").val();
                    var iddoador = $("#iddoador").val();
                    var status = $("#status").val();


                    var dataString = {id: id, idade: idade, peso: peso, 
                        jejum: jejum, iddoador: iddoador, status: status};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/triagem/function_triagem.php",
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
                <h1> Coletar <small> Informações  </small> </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['iddoador'])) {
                $sql = "SELECT iddoador, nome, truncate(datediff(now(), data_nascimento)/365,0) as 'idade'
                            FROM doador
                            WHERE
                            iddoador='" . $_GET['iddoador'] . "'";

                foreach ($con->query($sql) as $row) {
                    ?>
            <!--===============================================================-->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic form -->
                            <div class="box-info">
                                <h2>Cadastro de Triagem</h2>
                                <!-- Basic form body -->
                                <div id="basic-form" class="collapse in">
                                    <input type="hidden" name="id" id="id" value="0" />
                                    <input type="hidden" name="iddoador" id="iddoador" value="<?php echo $row['iddoador'] ?>" />
                                    <form role="form" method="post">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="nome">Nome</label>
                                                    <input class="form-control"  type="text" id="nome" name="nome" value="<?php echo $row['nome'] ?>" >
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="idade">Idade</label>
                                                    <input class="form-control"  type="text" id="idade" name="idade" value="<?php echo $row['idade'] ?>"  >
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="peso">Peso</label>
                                                    <input class="form-control" type="number"  id="peso" name="peso" required="true">
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="jejum">Jejum</label>
                                                    <select id="jejum" name="jejum" class="form-control">
                                                        <option>Escolha</option>
                                                        <option value="sim">Sim</option>
                                                        <option value="nao">Não</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="status">Status</label>
                                                    <select id="status" name="status" class="form-control">
                                                        <option>Escolha</option>
                                                        <option value="sim">Apto</option>
                                                        <option value="nao">Não Apto</option>
                                                    </select>
                                                </div>



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