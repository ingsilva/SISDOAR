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
                    var ddd = $("#ddd").val();
                    var telefone = $("#telefone").val();
                    var dpto = $("#dpto").val();

                    var dataString = {id: id, nome: nome,
                        ddd: ddd, telefone: telefone, dpto: dpto};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/funcionario/update_agenda.php",
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
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['idagenda'])) {
                $sql = "select idagenda, a.nome, a.ddd, a.telefone, d.descricao
		from agenda a, dpto d
			where a.dpto_iddpto = d.iddpto
                                        and
                            idagenda='" . $_GET['idagenda'] . "'";
                /* $sql = "select iddoador, d.nome, date_format(data_nascimento, '%d/%m/%Y') data_nasc, cpf, rg, endereco, numero, bairro, complemento, 
                  idcidade, c.descricao, uf,  tipo_sangue, fator_rh, idade, sexo, date_format(data_registro, '%d/%m/%Y') data_registro, num_sus,
                  expeditor, etnia, nome_pai, nome_mae, estado_civil, naturalidade, sexo, escolaridade
                  from doador d, cidade c, estado e
                  where d.cidade_idcidade = c.idcidade
                  and e.idestado = c.estado_idestado
                  and
                  iddoador='" . $_GET['iddoador'] . "'"; */


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
                                    <form role="form" action="../../funcoes/funcionario/function_agenda.php" method="post">
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
                                                    <option>------</option>

                                                    <?php
                                                    $sql = ("SELECT iddpto, descricao FROM dpto");
                                                    foreach ($con->query($sql) as $row) {
                                                        echo "<option value='" . $row['iddpto'] . "'>" . $row['descricao'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <!--================================================-------> 
                                            <input type="hidden" name="id" id="id" value="<?php echo $row['idagenda'] ?>" />
                                            <!--================================================-------> 

                                            <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                                            <button type="reset" class=" btn btn-danger">Limpar</button>
                                        </div>
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
