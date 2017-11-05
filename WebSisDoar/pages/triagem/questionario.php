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
        <style type="text/css">
            .adic {
                color: #33cc00;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var saude_hoje = $("#saude_hoje").val();


                    var dataString = {id: id, saude_hoje: saude_hoje};
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
                                alert(saude_hoje);
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
                <h1> Questionário: <small> Triagem Clínica</small> </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['idtriagem'])) {
                $sql = "SELECT iddoador, idtriagem, nome, date_format(data_nascimento,'%d/%m/%Y')data_nascimento, 
                    truncate(datediff(now(), data_nascimento)/365,0) as 'idade', 
                    case anemia
                     when 'sim' then 'Apto a Doar'
                     end anemia
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
                                                <input class="form-control text-center"   type="text" id="status" name="status" value="<?php echo $row['anemia'] ?>" disabled="" >
                                            </div>
                                        </div>

                                    </div>
                                    <!--================================================-------> 
                                </div>

                                <div class="box-info">
                                    <h2>Questinário Objetivo</h2>
                                    <!-- Basic form body -->
                                    <div id="basic-form" class="collapse in">
                                        <form role="form" method="post">
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-3 control-label"> 1 - Você está bem de saúde hoje ?</label>
                                                <div class="col-sm-offset-6  col-sm-2">
                                                    <div class="radio">
                                                        <!------------------------------------>
                                                        <label>                          
                                                        <input type="radio" name="saude_hoje" id="saude_hoje" value="s" >
                                                        Sim
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="saude_hoje" id="saude_hoje" value="n">
                                                        Não
                                                    </label>
                                                        
                                                        <!------------------------------------> 
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-4 control-label"> 2 - Ingeriu bebida alcoólica há 24 horas?</label>
                                                <div class="col-sm-offset-5  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="alcool_hoje" id="alcool_hoje" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="alcool_hoje" id="alcool_hoje" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-3 control-label"> 3 - Fumou há 02 horas?</label>
                                                <div class="col-sm-offset-6  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="fumou_horas" id="fumou_horas" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="fumou_horas" id="fumou_horas" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-3 control-label"> 4 - Alimentou-se hoje?</label>
                                                <div class="col-sm-offset-6  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="alimentou" id="alimentou" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="alimentou" id="alimentou" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-3 control-label"> 5 - Dormiu?</label>
                                                <div class="col-sm-offset-6  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="dormiu" id="dormiu" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="dormiu" id="dormiu" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-6 control-label"> 6 - Deu ou recebeu dinheiro ou drogas para manter relação sexual?</label>
                                                <div class="col-sm-offset-3  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="drogas_rel_sexual" id="drogas_rel_sexual" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="drogas_rel_sexual" id="drogas_rel_sexual" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-5 control-label"> 7 - Teve contato sexual com parceiro que recebeu transfusão?</label>
                                                <div class="col-sm-offset-4  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="contato_sexual_transfusao" id="contato_sexual_transfusao" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="contato_sexual_transfusao" id="contato_sexual_transfusao" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-5 control-label"> 8 - Teve contato sexual com parceiro que fez hemodiálise?</label>
                                                <div class="col-sm-offset-4  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="contato_sexual_hemod" id="contato_sexual_hemod" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="contato_sexual_hemod" id="contato_sexual_hemod" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-4 control-label"> 9 - Veio doar sangue para fazer o teste de AIDS?</label>
                                                <div class="col-sm-offset-5  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="teste_aids" id="teste_aids" value="s">
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="teste_aids" id="teste_aids" value="n">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            </div>
                                            </div>
                                            <div class="box-info">
                                                <h2>Questinário Subjetivo</h2>
                                                <div id="basic-form" class="collapse in">

                                                    <div class="row">
                                                        <label class="col-sm-offset-1 col-sm-12 control-label"> 10 - Já doou sangue?</label>
                                                        <div class="form-group col-lg-4">    
                                                            <label for="quando_doou">Quando?</label>
                                                            <input class="form-control"   type="date" id="quando_doou" name="quando_doou">
                                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                                        </div>
                                                        <div class="form-group col-lg-4">    
                                                            <label for="quantas_vzs_doou">Quantas vezes?</label>
                                                            <input class="form-control"   type="number" id="quantas_vzs_doou" name="quantas_vzs_doou">
                                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                                        </div>
                                                        <div class="form-group col-lg-4">    
                                                            <label for="onde_doou">Onde?</label>
                                                            <input class="form-control"   type="text" id="onde_doou" name="onde_doou">
                                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <label class="col-sm-offset-1 col-sm-12 control-label"> 11 - Foi recusado como Doador?</label>
                                                        <div class="form-group col-lg-8">    
                                                            <label for="recusado_motivo">Motivo</label>
                                                            <input class="form-control"   type="text" id="recusado_motivo" name="recusado_motivo">
                                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                                        </div>
                                                        <div class="form-group col-lg-4">    
                                                            <label for="recusado_data">Quando?</label>
                                                            <input class="form-control"   type="date" id="recusado_data" name="recusado_data">
                                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                                        </div>
                                                    </div>
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
                                                                <option value="sim">Apto</option>
                                                                <option value="nao">Não Apto</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-8">    
                                                            <label for="obs_doador">Obersações</label>
                                                            <textarea class="form-control"   type="text" id="obs_doador" name="obs_doador"></textarea>
                                                            <!--<p class="help-block">Example block-level help text here.</p>-->
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

