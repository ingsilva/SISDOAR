<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de Doador</title>
        <?php
        include '../../layout/cabecalho.php';
        print_r($_SESSION['usuarioNome']);
        ?>
        <script src="../../funcoes/doador/comboEstadoCidade.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var nome = $("#nome").val();
                    var data_nascimento = $("#data_nascimento").val();
                    var cpf = $("#cpf").val();
                    var rg = $("#rg").val();
                    var endereco = $("#endereco").val();
                    var numero = $("#numero").val();
                    var bairro = $("#bairro").val();
                    var complemento = $("#complemento").val();
                    var cidade = $("#cidade").val();
                    var tipo_sangue = $("#tipo_sangue").val();
                    var fator_rh = $("#fator_rh").val();
                    var idade = $("#idade").val();
                    var sexo = $("#sexo").val();
                    var data_registro = $("#data_registro").val();
                    var numero_sus = $("#numero_sus").val();
                    var expeditor = $("#expeditor").val();
                    var etnia = $("#etnia").val();
                    var nome_pai = $("#nome_pai").val();
                    var nome_mae = $("#nome_mae").val();
                    var estado_civil = $("#estado_civil").val();
                    var escolaridade = $("#escolaridade").val();
                    var naturalidade = $("#naturalidade").val();
                    var contato = $("#contato").val();
                    var dd = $("#dd").val();

                    var dataString = {id: id, nome: nome, data_nascimento: data_nascimento,
                        cpf: cpf, rg: rg, endereco: endereco, numero: numero, bairro: bairro,
                        complemento: complemento, cidade: cidade, tipo_sangue: tipo_sangue,
                        fator_rh: fator_rh, idade: idade, sexo: sexo, data_registro: data_registro,
                        numero_sus: numero_sus, expeditor: expeditor, etnia: etnia, nome_pai: nome_pai,
                        nome_mae: nome_mae, estado_civil: estado_civil,
                        escolaridade: escolaridade, naturalidade: naturalidade, dd: dd, contato: contato};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/doador/function_doador.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.replace("lista_doador.php");
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
                <h1><small> Cadastro de </small> Doador </h1>
            </div>
            <!-- End page header -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Cadastro de Doador </h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">
                            <form role="form" action="../../funcoes/doador/function_doador.php" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-2">
                                        <label for="data_registro">Data Registro</label>
                                        <input class="form-control"   type="date" id="data_registro" name="data_registro">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="numero_sus">Numero SUS</label>
                                        <input class="form-control"   type="number" id="numero_sus" name="numero_sus">
                                         <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class=" form-group col-lg-2">
                                        <label for="data_nascimento">Data de Nascimento</label>
                                        <input class="form-control"   type="date" id="data_nascimento" name="data_nascimento">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <label for="idade">Idade</label>
                                        <input class="form-control"   type="number" id="idade" name="idade">
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="sexo">Sexo</label>
                                        <select class="form-control" id="sexo" name="sexo">
                                            <option>Escolha</option>
                                            <option value="f">Feminino</option>
                                            <option value="m">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <label for="tipo_sangue">Tipo Sanguineo</label>
                                        <select id="tipo_sangue" name="tipo_sangue" class="form-control">
                                            <option>Escolha</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="fator_rh">Fator RH</label>
                                        <select class="form-control" id="fator_rh" name="fator_rh">
                                            <option>Escolha</option>
                                            <option value="Positivo">Positivo</option>
                                            <option value="Negativo">Negativo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="nome">Nome</label>
                                        <input class="form-control"  id="nome" name="nome" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="cpf">CPF</label>
                                        <input class="form-control" type="text"  id="cpf" name="cpf">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="rg">RG</label>
                                        <input class="form-control" type="text"  id="rg" name="rg">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="expeditor">Órgão Expedidor</label>
                                        <select id="expeditor" name="expeditor" class="form-control">
                                            <option>Escolha</option>
                                            <option value="SSP">SSP/AC</option>
                                            <option value="SSP">SSP/AL</option>
                                            <option value="SSP">SSP/AP</option>
                                            <option value="SSP">SSP/AM</option>
                                            <option value="SSP">SSP/BA</option>
                                            <option value="SSP">SSP/CE</option>
                                            <option value="SSP">SSP/DF</option>
                                            <option value="SSP">SSP/ES</option>
                                            <option value="SSP">SSP/GO</option>
                                            <option value="SSP">SSP/MA</option>
                                            <option value="SSP">SSP/MT</option>
                                            <option value="SSP">SSP/MS</option>
                                            <option value="SSP">SSP/MG</option>
                                            <option value="SSP">SSP/PA</option>
                                            <option value="SSP">SSP/PB</option>
                                            <option value="SSP">SSP/PR</option>
                                            <option value="SSP">SSP/PE</option>
                                            <option value="SSP">SSP/PI</option>
                                            <option value="SSP">SSP/RJ</option>
                                            <option value="SSP">SSP/RN</option>
                                            <option value="SSP">SSP/RS</option>
                                            <option value="SSP">SSP/RO</option>
                                            <option value="SSP">SSP/RR</option>
                                            <option value="SSP">SSP/SC</option>
                                            <option value="SSP">SSP/SP</option>
                                            <option value="SSP">SSP/SE</option>
                                            <option value="SSP">SSP/TO</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="nome_pai">Nome do Pai</label>
                                        <input class="form-control"  id="nome_pai" name="nome_pai" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="nome_mae">Nome da Mãe</label>
                                        <input class="form-control"  id="nome_mae" name="nome_mae" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-2">
                                        <label for="nacionalidade">Nacionalidade</label>
                                        <select id="nacionalidade" name="nacionalidade" class="form-control">
                                            <option>Escolha</option>
                                            <option value="B">Brasileiro</option>
                                            <option value="O">Outros</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="naturalidade">Naturalidade</label>
                                        <input class="form-control"  id="naturalidade" name="naturalidade" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>

                                    <div class="form-group col-lg-1">
                                        <label for="etnia">Etnia</label>
                                        <select id="etnia" name="etnia" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Branco">Branco</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Indigena">Indígena</option>
                                            <option value="Pardo">Pardo</option>
                                            <option value="Mulato">Mulato</option>
                                            <option value="Caboclo">Caboclo</option>
                                            <option value="Cafuzo">Cafuzo</option>

                                        </select>
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="estado_civil">Estado Civil</label>
                                        <select id="estado_civil" name="estado_civil" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Solteiro">Solteiro</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Viúvo">Viúvo</option>
                                            <option value="Desquitado">Desquitado</option>
                                            <option value="D">Divorciado</option>
                                            <option value="Divorciado">Separado</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <label for="escolaridade">Escolaridade</label>
                                        <select id="escolaridade" name="escolaridade" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Não Alfabetizado">Não Alfabetizado</option>
                                            <option value="1°Grau Incompleto">1°Grau Incompleto</option>
                                            <option value="1°Grau Completo">1°Grau Completo</option>
                                            <option value="2°Grau Incompleto">2°Grau Incompleto</option>
                                            <option value="2°Grau Completo">2°Grau Completo</option>
                                            <option value="Superior Incompleto">Superior Incompleto</option>
                                            <option value="Superior Completo">Superior Completo</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-1">
                                        <label for="dd">DD</label>
                                        <input class="form-control"  id="dd" name="dd" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>

                                    <div class="form-group col-lg-2">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="tel">Telefone/Celular:</label>
                                        <input class="form-control"   type="text" id="contato" name="contato">
                                    </div>

                                </div>
                                <div class="row">


                                </div>


                                <div class="row">
                                    <div class=" form-group col-lg-6">
                                        <label for="endereco">Endereço</label>
                                        <input class="form-control"   type="text" id="endereco" name="endereco">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <label for="numero">N°</label>
                                        <input class="form-control" type="number"  id="numero" name="numero">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class=" form-group col-lg-2">
                                        <label for="bairro">Bairro</label>
                                        <input class="form-control"   type="text" id="bairro" name="bairro">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="col-sm-1 form-group">
                                        <label for="idestado">Estado</label>
                                        <select class="form-control" id="idestado" name="idestado" onchange="listar_cidades()">
                                            <option>------</option>
                                            <?php
                                            $sql = ("SELECT idestado, uf FROM estado");
                                            foreach ($con->query($sql) as $row) {
                                                echo "<option value='" . $row['idestado'] . "'>" . $row['uf'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                        <label for="cidade">Cidade</label>
                                        <select class="form-control" type="text" id="cidade" name="cidade">
                                            <option value="">escolha primeiro um estado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="complemento">Complemento</label>
                                        <input class="form-control" type="text" id="complemento" name="complemento" >
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
                </div>
            </div><!-- End div .box-info -->
        </div>
    </div>
    <!-- End div .col-sm-6 -->
    <?php
    include '../../layout/rodape.php';
    ?>
</body>
</html>
