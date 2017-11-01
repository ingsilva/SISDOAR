<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de Doador</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <script src="../../funcoes/doador/comboEstadoCidade.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    
                    var numero_sus = $("#numero_sus").val();
                   

                    var dataString = {id: id,  numero_sus: numero_sus};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/doador/update.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.replace("lista_doador.php");
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");
                                alert(numero_sus);
                                alert(id);
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
                <h1><small> Cadastro de </small> Doador </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['iddoador'])) {
                $sql = "select iddoador, d.nome, date_format(data_nascimento, '%d/%m/%Y') as data_nascimento, cpf, rg, sexo
		
		from doador d
			where 
                            iddoador='" . $_GET['iddoador'] . "'";



                foreach ($con->query($sql) as $row) {
                    ?>
                    <!--===============================================================-->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic form -->
                            <div class="box-info">
                                <h2>Cadastro de Doador </h2>
                                <!-- Basic form body -->
                                <div id="basic-form"  class="collapse in">
                                    <form role="form"   method="post">
                                        <div class="row">
                                            <div class="form-group col-lg-2">
                                                <label for="data_registro">Data Registro</label>
                                                <input class="form-control"   type="date" id="data_registro" name="data_registro"  >
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="numero_sus">Numero SUS</label>
                                                <input class="form-control"   type="number" id="numero_sus" name="numero_sus" value="<?php echo $row['num_sus'] ?>">
                                                 <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class=" form-group col-lg-2">
                                                <label for="data_nascimento">Data de Nascimento</label>
                                                <input class="form-control"   type="text" id="data_nascimento" name="data_nascimento" value="<?php echo $row['data_nascimento'] ?>">
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>


                                        </div>

                                        <!--================================================-------> 
                                        <input type="hidden" name="id" id="id" value="<?php echo $row['iddoador'] ?>" />
                                        <!--================================================-------> 

                                        <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                                        <button type="reset" class=" btn btn-danger">Limpar</button>
                                    </form>
                                </div>
                            </div><!-- End div #basic-form -->
                        </div>
                    </div><!-- End div .box-info -->
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- End div .col-sm-6 -->
    <?php
    include '../../layout/rodape.php';
    ?>
</body>
</html>
