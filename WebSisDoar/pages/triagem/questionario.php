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
        <script src="../../assets/js/jquery.js" type="text/javascript"></script>
        <style type="text/css">
            #select_opcao_doou div{
                display: none;
            }
            #select_opcao_recusado div {
                display: none;
            }
            #coleta div{
                display: none;
            }
        </style>>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var saude_hoje = $("#saude_hoje").val();
                    var saude_hoje1 = $("#saude_hoje1").val();
                    var alcool_hoje = $("#alcool_hoje").val();
                    var fumou_horas = $("#fumou_horas").val();
                    var alimentou = $("#alimentou").val();
                    var dormiu = $("#dormiu").val();
                    var drogas_rel_sexual = $("#drogas_rel_sexual").val();
                    var contato_sexual_transfusao = $("#contato_sexual_transfusao").val();
                    var contato_sexual_hemod = $("#contato_sexual_hemod").val();
                    var teste_aids = $("#teste_aids").val();
                    var quando_doou = $("#quando_doou").val();
                    var quantas_vzs_doou = $("#quantas_vzs_doou").val();
                    var onde_doou = $("#onde_doou").val();
                    var recusado_motivo = $("#recusado_motivo").val();
                    var recusado_data = $("#recusado_data").val();
                    var situacao_doador = $("#situacao_doador").val();
                    var obs_doador = $("#obs_doador").val();



                    var dataString = {id: id, saude_hoje: saude_hoje, alcool_hoje: alcool_hoje, fumou_horas: fumou_horas,
                        alimentou: alimentou, dormiu: dormiu, drogas_rel_sexual: drogas_rel_sexual, contato_sexual_transfusao: contato_sexual_transfusao,
                        contato_sexual_hemod: contato_sexual_hemod, teste_aids: teste_aids, quando_doou: quando_doou, quantas_vzs_doou: quantas_vzs_doou,
                        onde_doou: onde_doou, recusado_motivo: recusado_motivo, recusado_data: recusado_data, situacao_doador: situacao_doador,
                        obs_doador: obs_doador};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/triagem/questionario.php",
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

                /*informaçoes para escolha do status*/
                $('#opcao_doou').on('change', function () {

                    var selectValor1 = '#' + $(this).val();
                    $('#select_opcao_doou').children('div').hide();
                    $('#select_opcao_doou').children(selectValor1).show();


                });
                $('#opcao_recusado').on('change', function () {

                    var selectValor2 = '#' + $(this).val();
                    $('#select_opcao_recusado').children('div').hide();
                    $('#select_opcao_recusado').children(selectValor2).show();


                });

                /*informaçoes para escolha do status*/
                $('#situacao_doador').on('change', function () {

                    var selectValor3 = '#' + $(this).val();
                    $('#coleta').children('div').hide();
                    $('#coleta').children(selectValor3).show();


                });

            });
        </script>
    </head>
    <body>
        <div class="body content rows scroll-y">

            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1> Questionário: <small> Triagem Clínica</small> </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['idtriagem'])) {
                $sql = "SELECT iddoador, idtriagem, nome, date_format(data_nascimento,'%d/%m/%Y')data_nascimento, 
                    truncate(datediff(now(), data_nascimento)/365,0) as 'idade', 
                    case teste_anemia
                     when 'apto' then 'Apto a Doar'
                     end teste_anemia
                            FROM doador d, triagem t
                                WHERE  d.iddoador = t.doador_iddoador 
                                    AND 
                                       idtriagem ='" . $_GET['idtriagem'] . "'group by iddoador	";

                foreach ($con->query($sql) as $row) {
                    ?>
                    <!--===============================================================-->            
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" name="id" id="id" value="<?php echo $row['idtriagem'] ?>" />
                            <!-- Basic form -->
                            <form role="form" method="post">
                                <div class="box-info">
                                    <h2>Informações Doador</h2>
                                    <!-- Basic form body -->
                                    <div id="basic-form" class="collapse in">

                                        <div class="row">
                                            <div class="form-group col-lg-1">
                                                <label for="iddoador">ID</label>
                                                <input class="form-control"  type="text" id="iddoador"  value="<?php echo $row['idtriagem'] ?>" disabled="true" >
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
                                                <label for="status">Status</label>
                                                <input class="form-control text-center"   type="text" id="status" name="status" value="<?php echo $row['teste_anemia'] ?>" disabled="" >
                                            </div>
                                        </div>

                                    </div>
                                    <!--================================================-------> 
                                </div>

                                <div class="box-info">
                                    <h2>Questinário Objetivo</h2>
                                    <!-- Basic form body -->
                                    <div id="basic-form" class="collapse in">
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-3 control-label" for="saude_hoje"> 1 - Você está bem de saúde hoje ?</label>
                                            <div class="col-sm-offset-6  col-sm-2">
                                                <select id="saude_hoje" name="saude_hoje" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-4 control-label" > 2 - Ingeriu bebida alcoólica há 24 horas?</label>
                                            <div class="col-sm-offset-5  col-sm-2">
                                                <div class="radio">
                                                    <select id="alcool_hoje" name="alcool_hoje" class="form-control">
                                                        <option>Escolha</option>
                                                        <option value="sim">SIM</option>
                                                        <option value="nao">NÃO</option>
                                                    </select>  
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-3 control-label"> 3 - Fumou há 02 horas?</label>
                                            <div class="col-sm-offset-6  col-sm-2">
                                                <select id="fumou_horas" name="fumou_horas" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-3 control-label"> 4 - Alimentou-se hoje?</label>
                                            <div class="col-sm-offset-6  col-sm-2">

                                                <select id="alimentou" name="alimentou" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-3 control-label"> 5 - Dormiu?</label>
                                            <div class="col-sm-offset-6  col-sm-2">
                                                <select id="dormiu" name="dormiu" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-6 control-label"> 6 - Deu ou recebeu dinheiro ou drogas para manter relação sexual?</label>
                                            <div class="col-sm-offset-3  col-sm-2">
                                                <select id="drogas_rel_sexual" name="drogas_rel_sexual" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-5 control-label"> 7 - Teve contato sexual com parceiro que recebeu transfusão?</label>
                                            <div class="col-sm-offset-4  col-sm-2">
                                                <select id="contato_sexual_transfusao" name="contato_sexual_transfusao" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-5 control-label"> 8 - Teve contato sexual com parceiro que fez hemodiálise?</label>
                                            <div class="col-sm-offset-4  col-sm-2">
                                                <select id="contato_sexual_hemod" name="contato_sexual_hemod" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <label class="col-sm-offset-1 col-sm-4 control-label"> 9 - Veio doar sangue para fazer o teste de AIDS?</label>
                                            <div class="col-sm-offset-5  col-sm-2">
                                                <select id="teste_aids" name="teste_aids" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>


                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="box-info">
                                    <h2>Questinário Subjetivo</h2>
                                    <div id="basic-form" class="collapse in">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label> 10 - Já doou sangue?</label>
                                                <select id="opcao_doou" name="opcao_doou" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>
                                            </div>
                                            <div id="select_opcao_doou">
                                                <div class="form-group col-lg-3" id="sim" >    
                                                    <label for="quando_doou">Quando(Ano)?</label>
                                                    <input class="form-control"   type="text" id="quando_doou" name="quando_doou">
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                                <div class="form-group col-lg-3" id="sim">    
                                                    <label for="quantas_vzs_doou">Quantas vezes?</label>
                                                    <input class="form-control"   type="number" id="quantas_vzs_doou" name="quantas_vzs_doou">
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                                <div class="form-group col-lg-3" id="sim">    
                                                    <label for="onde_doou">Onde?</label>
                                                    <input class="form-control"   type="text" id="onde_doou" name="onde_doou">
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>11 - Foi recusado como Doador?</label>
                                                <select id="opcao_recusado" name="opcao_recusado" class="form-control">
                                                    <option>Escolha</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>
                                            </div>
                                            <div id="select_opcao_recusado">
                                                <div id="nao" class="form-group col-sm-8  ">
                                                    <label  for="">Status</label>
                                                    <input class="form-control alert-success"  type="button" value="Doador não rejeitado em nenhuma doação!!!" >
                                                </div>
                                                <div class="form-group col-lg-2" id="sim">    
                                                    <label for="recusado_motivo">Motivo</label>
                                                    <input class="form-control"   type="text" id="recusado_motivo" name="recusado_motivo">
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div id=>
                                                <div class="form-group col-lg-4" id="sim">    
                                                    <label for="recusado_data">Quando(Ano)?</label>
                                                    <input class="form-control"   type="text" id="recusado_data" name="recusado_data">
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                            </div>
                                            <hr>

                                        </div>
                                        <!-- <label class="adic-red col-sm-offset-1 col-sm-12 control-label"> *OBS: INSERIR 'NÃO' NOS DOIS CAMPOS CASO NÃO HAJA MOTIVO* </label>-->
                                    </div>
                                </div>
                                <div class="box-info">
                                    <h2>Resultado</h2>
                                    <div id="basic-form" class="collapse in">
                                        <div class="row">
                                            <label class="adic col-sm-offset-1 col-sm-12 control-label"> *INFORMAÇÕES ADICONAIS* </label>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="form-group col-lg-4">  
                                                <label for="situacao_doador">Situação de Doador</label>
                                                <select class="form-control" id="situacao_doador" name="situacao_doador">
                                                    <option>Escolha</option>
                                                    <option value="apto">Apto</option>
                                                    <option value="nao_apto">Não Apto</option>
                                                </select>
                                            </div>
                                            <div id="coleta">
                                                <div id="apto" class="form-group col-sm-8 ">
                                                    <label  for="categoria">Situação</label>
                                                    <input class="form-control alert-success"  type="button" value="Doador propico a doação!!!" >
                                                </div>
                                                <div class="form-group col-lg-8" id="nao_apto">    
                                                    <label for="obs_doador">Obersações</label>
                                                    <textarea class="form-control alert alert-danger"   type="text" id="obs_doador" name="obs_doador"></textarea>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </div> 
                                <div class="box-info">


                                    <!--================================================--------> 
                                    <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                                    <button type="reset" class=" btn btn-danger">Limpar</button>
                                </div>
                            </form>

                        </div><!-- End div #basic-form -->
                    </div><!-- End div .box-info -->
                </form>
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

