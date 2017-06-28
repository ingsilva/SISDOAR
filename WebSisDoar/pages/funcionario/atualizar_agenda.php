<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Agenda Telefonica</title>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <!--<script src="../../funcoes/doador/comboEstadoCidade.js" type="text/javascript"></script>-->
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var nome = $("#nome").val();
                    var telefone = $("#telefone").val();
                    var ddd = $("#ddd").val();
                    var dpto = $("#dpto").val();

                    var dataString = {id: id, nome: nome, telefone: telefone, ddd: ddd, dpto: dpto};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/funcionario/update_agenda.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.replace("lista_agenda.php");
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");
                                location.reload();
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
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['idagenda'])) {
                $sql = "select idagenda, a.nome, a.ddd, a.telefone, d.descricao, d.iddpto
		from agenda a, dpto d
			where a.dpto_iddpto = d.iddpto
                                        and
                            idagenda='" . $_GET['idagenda'] . "'";



                foreach ($con->query($sql) as $row) {
                    ?>
                    <!--===============================================================-->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic form -->
                            <div class="box-info">
                                <h2>Agenda Telefonica </h2>
                                <!-- Basic form body -->
                                <div id="basic-form" class="collapse in">
                                    <form role="form"  method="post">
                                        <div class="row">
                                            <div class="form-group col-lg-2">
                                                <label for="nome">Nome do Funcionario</label>
                                                <input class="form-control"   type="text" id="nome" name="nome" value="<?php echo $row['nome'] ?>" >
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="ddd">DDD</label>
                                                <input class="form-control"   type="number" id="ddd" name="ddd" value="<?php echo $row['ddd'] ?>">
                                                 <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class=" form-group col-lg-2">
                                                <label for="telefone">Telefone/Celular</label>
                                                <input class="form-control"   type="text" id="telefone" name="telefone" value="<?php echo $row['telefone'] ?>">
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="col-sm-3 form-group">

                                                <label for="dpto">Departamento</label>
                                                <select class="form-control" id="dpto" name="dpto">
                                                    <option value="<?php echo $row['iddpto']; ?>"><?php echo $row['descricao']; ?></option>
                                                    <?php
                                                    $sql = ("SELECT iddpto, descricao FROM dpto");
                                                    foreach ($con->query($sql) as $row2) {
                                                        echo "<option value='" . $row2['iddpto'] . "'>" . $row2['descricao'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <!--================================================-------> 
                                            <input type="hidden" name="id" id="id" value="<?php echo $row['idagenda'] ?>" />
                                            <!--================================================-------> 

                                        </div>
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
