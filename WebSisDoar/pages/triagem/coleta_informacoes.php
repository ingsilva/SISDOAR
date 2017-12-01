<?php
include '../../config/conexao.php';
?>
<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastro de triagem</title>
        <script src="../../assets/js/jquery.js" type="text/javascript"></script>
        <?php
        include '../../layout/cabecalho.php';
        ?>
        <style type="text/css">
            #coleta div{
                display: none;
            }
        </style>

        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var idq_triagem = $("#idq_triagem").val();
                    var quantidade = $("#quantidade").val();
                    var tipo_sangue = $("#tipo_sangue").val();
                    var fator_rh = $("#fator_rh").val();
                    var status_coleta = $("#status_coleta").val();
                    var obs_coleta = $("#obs_coleta").val();
                    var iddoencas = $("#iddoencas").val();

                    var dataString = {idq_triagem: idq_triagem, tipo_sangue: tipo_sangue,
                        fator_rh: fator_rh, quantidade: quantidade,
                        status_coleta: status_coleta, obs_coleta: obs_coleta, iddoencas: iddoencas};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/estoque/ent_estoque.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.replace("lista_coleta.php");
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");
                                alert(obs_coleta);
                            }
                        }
                    });
                });

                /*informaçoes para escolha do status*/
                $('#status_coleta').on('change', function () {

                    var selectValor = '#' + $(this).val();
                    $('#coleta').children('div').hide();
                    $('#coleta').children(selectValor).show();
                });
            });
        </script>
    </head>
    <body>
        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1>Coleta: <small> Preenchimento de Informações</small> </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['idq_triagem'])) {
                $sql = "select d.iddoador, idq_triagem, t.idtriagem, d.nome, date_format(data_nascimento, '%d/%m/%Y') as 'data_nascimento', truncate(datediff(now(), data_nascimento)/365,0) as 'idade',
                        tipo_sangue, fator_rh,
                                           case teste_anemia	
                                                   when 'nao_apto' then 'Inapto a Doar'
                                                   when 'apto' then 'Apto a Doar'
                                            end teste_anemia,
											case situacao_doador	
                                                   when 'nao_apto' then 'Inapto a Doar'
                                                   when 'apto' then 'Apto a Doar'
                                            end situacao_doador  
                                            from doador d, triagem t, questionario_triagem qt   
                                                    where t.doador_iddoador = d.iddoador 
                                                    and qt.triagem_idtriagem = t.idtriagem	 
                                                    and idq_triagem='" . $_GET['idq_triagem'] . "'";

                foreach ($con->query($sql) as $row) {
                    ?>
                    <!--===============================================================-->
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" name="id" id="id" value="<?php echo $row['idtriagem'] ?>" />
                            <!-- Basic form -->
                            <form role="form" method="post" >
                                <div class="box-info">
                                    <h2>Informações para Doação</h2>
                                    <!-- Basic form body -->
                                    <div id="basic-form" class="collapse in">
                                        <input type="hidden" id="idq_triagem" name="idq_triagem"  value="<?php echo $row['idq_triagem'] ?>"/>
                                        <div class="row">
                                            <div class="form-group col-lg-1">
                                                <label for="idq_triagem">ID</label>
                                                <input class="form-control"  type="text" id="idq_triagem" name="idq_triagem"  value="<?php echo $row['idq_triagem'] ?>" disabled="true" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="nome">Nome</label>
                                                <input class="form-control"  type="text"  value="<?php echo $row['nome'] ?>" disabled="true" >
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class=" form-group col-lg-2">
                                                <label for="data_nascimento">Data de Nascimento</label>
                                                <input class="form-control"   type="text"  value="<?php echo $row['data_nascimento'] ?>"  disabled="true">
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-lg-1">
                                                <label for="idade">Idade</label>
                                                <input class="form-control"  type="text" id="idade" name="idade" value="<?php echo $row['idade'] ?>" disabled="" >
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="tipo_sangue">Tipo Sanguineo</label>
                                                <select id="tipo_sangue" name="tipo_sangue" class="form-control">
                                                    <option value="<?php echo $row['tipo_sangue']; ?>"><?php echo $row['tipo_sangue']; ?></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="AB">AB</option>
                                                    <option value="O">O</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-2">
                                                <label for="fator_rh">Fator RH</label>
                                                <select class="form-control" id="fator_rh" name="fator_rh">
                                                    <option value="<?php echo $row['fator_rh']; ?>"><?php echo $row['fator_rh']; ?></option>
                                                    <option value="Positivo">Positivo</option>
                                                    <option value="Negativo">Negativo</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="categoria">Categoria</label>
                                                <input class="form-control"  type="text" id="categoria" name="categoria" value="Entrada" disabled="true" >
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="quantidade">Quantidade</label>
                                                <input class="form-control" type="text"  id="quantidade" name="quantidade">
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="status_coleta">Status</label>
                                                <select class="form-control" id="status_coleta" name="status_coleta">
                                                    <option>Escolha</option>
                                                    <option value="Aptos">Apto a Doar</option>
                                                    <option value="Inaptos">Não Apto</option>
                                                </select>
                                            </div>

                                            <div id='coleta'>
                                                <div id="Aptos" class="form-group col-sm-3 ">
                                                    <label  for="categoria">Situação</label>
                                                    <input class="form-control alert-success"  type="button" value="DOAÇÃO BEM SUCEDIDA!!!" >
                                                </div>
                                                <div class="form-group col-lg-12" id="Aptos">    
                                                    <label for="obs_coleta">Observações</label>
                                                    <textarea class="form-control alert"   type="text" id="obs_coleta" name="obs_coleta"></textarea>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                                <div class="col-sm-3 form-group" id="Inaptos">
                                                    <label for="iddoencas">Motivos de Inaptidão</label>
                                                    <select class="form-control" id="iddoencas" name="iddoencas">
                                                        <option>------</option>
                                                        <?php
                                                        $sql = ("SELECT iddoencas, descricao FROM doencas");
                                                        foreach ($con->query($sql) as $row) {
                                                            echo "<option value='" . $row['iddoencas'] . "'>" . $row['descricao'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-12" id="Inaptos">    
                                                    <label for="obs_coleta">Observações</label>
                                                    <textarea class="form-control alert"   type="text" id="obs_coleta" name="obs_coleta"></textarea>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--================================================-------> 

                                    <button type="button" id="salvar"  class="btn btn-success">Enviar</button>
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
