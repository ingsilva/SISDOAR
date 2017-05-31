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
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var data_registro = $("#data_registro").val();
                    var numero_sus = $("#numero_sus").val();                    
                    var nome = $("#nome").val();
                    var nome_pai = $("#nome_pai").val();
                    var nome_mae = $("#nome_mae").val();
                    var data_nascimento = $("#data_nascimento").val();
                    var idade = $("#idade").val();
                    var sexo = $("#sexo").val();
                    var etnia = $("#etnia").val();
                    var nacionalidade = $("#nacionalidade").val();
                    var naturalidade = $("#naturalidade").val();
                    var rg = $("#rg").val();
                    var expeditor = $("#expeditor").val();
                    var estado_civil = $("#estado_civil").val();
                    var escolaridade = $("#escolaridade").val();
                    var endereco = $("#endereco").val();
                    var numero = $("#numero").val();
                    var bairro = $("#bairro").val();
                    var complemento = $("#complemento").val();
                    var cidade = $("#cidade").val();
                    var tipo_sangue = $("#tipo_sangue").val();
                    var fator_rh = $("#fator_rh").val();
                    
                    

                    var dataString = {id: id, nome: nome,
                        data_nascimento: data_nascimento, cpf: cpf,
                        rg: rg, endereco: endereco, numero: numero,
                        bairro: bairro, complemento: complemento,
                        cidade: cidade, tipo_sangue: tipo_sangue,
                        fator_rh: fator_rh, idade: idade, sexo: sexo};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/doador/function_doador.php",
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
                                    <div class="form-group col-lg-3">
                                        <label for="nome">Data Registro</label>
                                        <input class="form-control"   type="date" id="data_registro" name="data_registro">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="nome">Numero SUS</label>
                                        <input class="form-control"   type="number" id="numero_sus" name="numero_sus">
                                         <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    
                                    <div class="form-group col-lg-9">
                                        <label for="nome">Nome</label>
                                        <input class="form-control"  id="nome" name="nome" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-9">
                                        <label for="nome_pai">Nome do Pai</label>
                                        <input class="form-control"  id="nome_pai" name="nome_pai" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-9">
                                        <label for="nome">Nome da Mãe</label>
                                        <input class="form-control"  id="nome_mae" name="nome_mae" >
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
                                    
                                    <div class="form-group col-lg-2">
                                        <label for="etnia">Etnia</label>
                                        <select id="etnia" name="etnia" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Branco">Branco</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Indígena">Indígena</option>
                                            <option value="Pardo">Pardo</option>
                                            <option value="Mulato">Mulato</option>
                                            <option value="Caboclo">Caboclo</option>
                                            <option value="Cafuzo">Cafuzo</option>
                                            
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-lg-2">
                                        <label for="nacionalidade">Nacionalidade</label>
                                        <select id="nacionalidade" name="nacionalidade" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Brasileiro">Brasileiro</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-3">
                                        <label for="naturalidade">Naturalidade</label>
                                        <input class="form-control"  id="naturalidade" name="naturalidade" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    
                                </div>
                                
                                    <div class="form-group col-lg-3">
                                        <label for="rg">RG</label>
                                        <input class="form-control" type="text"  id="rg" name="rg">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    
                                    <div class="form-group col-lg-2">
                                        <label for="rg">Expeditor</label>
                                        <input class="form-control" type="text"  id="expeditor" name="expeditor">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <!------====================================--------->
                                    <!--optopn tava sem value=""-->

                                    <div class="form-group col-lg-2">
                                        <label for="estado_civil">Estado Civil</label>
                                        <select id="estado_civil" name="estado_civil" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Solteiro">Solteiro</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Viuvo">Viúvo</option>
                                            <option value="Desquitado">Desquitado</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Separado">Separado</option>
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
                                    <div class="form-group col-lg-2">
                                        <label for="fator_rh">Fator RH</label>
                                        <select class="form-control" id="fator_rh" name="fator_rh">
                                            <option>Escolha</option>
                                            <option value="Positivo">Positivo</option>
                                            <option value="Negativo">Negativo</option>
                                        </select>
                                    </div>
                                    
                                    <!------====================================--------->
                                </div>
                                <div class="row">
                                    <div class=" form-group col-lg-5">
                                        <label for="endereco">Endereço</label>
                                        <input class="form-control"   type="text" id="endereco" name="endereco">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="numero">N°</label>
                                        <input class="form-control" type="number"  id="numero" name="numero">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class=" form-group col-lg-3">
                                        <label for="bairro">Bairro</label>
                                        <input class="form-control"   type="text" id="bairro" name="bairro">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="col-lg-2 form-group">
                                        <label for="cidade">Cidade</label>
                                        <select class="form-control" id="cidade" name="cidade">
                                            <option>------</option>
                                            <?php
                                            $sql = ("SELECT idcidade, descricao FROM cidade");
                                            foreach ($con->query($sql) as $row) {
                                                echo "<option value='" . $row['idcidade'] . "'>" . $row['descricao'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 form-group">
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
                                    <div class="row">
                                        <div class="form-group col-lg-7">
                                            <label for="complemento">Complemento</label>
                                            <input class="form-control" type="text" id="complemento" name="complemento" >
                                        </div>
                                    </div>
                                    <!--================================================-------> 
                                    <input type="hidden" name="id" id="id" value="0" />
                                    <!--================================================-------> 
                                    <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                                    <button type="reset" class=" btn btn-danger">Limpar</button>
                                </div>
                            </form>
                        </div><!-- End div #basic-form -->
                    </div>
                </div><!-- End div .box-info -->
            </div><!-- End div .col-sm-6 -->
            <?php
            include '../../layout/rodape.php';
            ?>
    </body>
</html>