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
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var quantidade = $("#quantidade").val();
                    var tipo_sangue = $("#tipo_sangue").val();
                    var fator_rh = $("#fator_rh").val();
                    var idtriagem = $("#idtriagem").val();
                    var categoria = $("#categoria").val();

                    var dataString = {id: id, quantidade: quantidade, tipo_sangue: tipo_sangue,
                        fator_rh: fator_rh, idtriagem: idtriagem, categoria: categoria};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/estoque/ent_estoque.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.reload();
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");
                                alert(idtriagem);
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
                <h1> Questionário: <small> Triagem Clinica</small> </h1>
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
                            <input type="hidden" name="idtriagem" id="idtriagem" value="<?php echo $row['iddoador'] ?>" />
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
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <label class="col-sm-offset-1 col-sm-4 control-label"> 2 - Ingeriu bebida alcoólica há 24 horas?</label>
                                                <div class="col-sm-offset-5  col-sm-2">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Sim
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
                                            </div> 
                                            <div class="box-info">


                                                <!--================================================-------> 
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

