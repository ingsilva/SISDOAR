<?php
include '../../config/conexao.php';
?>
<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de Agenda</title>
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
                <h1> <small>Cadastro de </small> Telefones </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['idagenda'])) {
                $sql = "SELECT idagenda, nome, ddd, telefone, d.descricao
                            FROM agenda a, dpto d 
                            WHERE a.dpto_iddpto = d.iddpto
                            idagenda='" . $_GET['idagenda'] . "'";
                foreach ($con->query($sql) as $row) {
                    ?>
                    <!--===============================================================-->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic form -->
                            <div class="box-info">
                                <h2>Cadastro de Telefones</h2>
                                <!-- Basic form body -->
                                <div id="basic-form" class="collapse in">
                                    <input type="hidden" name="id" id="id" value="0" />
                                    <input type="hidden" name="idagenda" id="idagenda" value="<?php echo $row['idagenda'] ?>" />
                                    <form role="form" method="post">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="nome">Nome</label>
                                                    <input class="form-control"  type="text" id="nome" name="nome" value="<?php echo $row['nome'] ?>" >
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="ddd">DDD</label>
                                                    <input class="form-control"  type="number" id="ddd" name="ddd" value="<?php echo $row['ddd'] ?>"  >
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="telefone">Telefone</label>
                                                    <input class="form-control"  type="text" id="telefone" name="telefone" value="<?php echo $row['telefone'] ?>"  >
                                                </div>
                                                <div class="col-sm-3 form-group">

                                                    <label for="dpto">Departamento</label>
                                                    <select class="form-control" id="dpto" name="dpto" value="<?php echo $row['dpto'] ?>">
                                                        <option>------</option>

                                                        <?php
                                                        $sql = ("SELECT iddpto, descricao FROM dpto");
                                                        foreach ($con->query($sql) as $row) {
                                                            echo "<option value='" . $row['iddpto'] . "'>" . $row['descricao'] . "</option>";
                                                        }
                                                        ?>
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