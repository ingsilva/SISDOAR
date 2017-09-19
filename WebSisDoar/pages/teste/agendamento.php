<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>


        <?php
        include '../../layout/cabecalho.php';
        ?>
    </head>
    <body>
        <section id="contact">
            <div class="container">
                <div class="col-lg-12">
                    <form role="form" method="post" action="function_agendamento.php" >
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="alert alert-success" role="alert">
                                    <div class="panel-body">
                                        CONDIÇÕES BASICAS PARA DOAR 
                                    </div>
                                    <ul class="square">
                                        <li>Sentir-se bem, com saúde.</li>
                                        <li>Apresentar documento com foto, emitido por um orgão oficial e válido em todo território nacional.</li>
                                        <li>Ter entre 16 e 69 anos de idade e peso acima de 50kg.</li>
                                    </ul>
                                </div>

                                <div class="alert alert-danger" role="alert">
                                    <div class="panel-body">
                                        QUEM NÃO PODE DOAR 
                                    </div>
                                    <ul class="square">
                                        <li>Quem teve diagnóstico de hepatite após os 11 anos de idade.</li>
                                        <li>Mulheres grávidas ou que estejam amamentando.</li>
                                        <li>Pessoas que estão expostas a doenças transmissíveis pelo sangue, como aids, hepatite, sífilis e doença de chagas.</li>
                                    </ul>
                                </div>
                                <div class="panel panel-info">
                                    <br>
                                    <div class="form-group col-lg-6">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="data_registro">Data: (Segunda a Sexta)</label>
                                        <input class="form-control"   type="date" id="agend_data" name="agend_data">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="data_registro">Horario: (7:15 as 18:30)</label>
                                        <input class="form-control"   type="time" id="agend_hora" name="agend_hora">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="nome">Nome Completo:</label>
                                        <input class="form-control"  id="nome" name="nome" >
                                    </div>
                                    <div class="form-group col-lg-8 ">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="data_nascimento">Data de Nascimento:</label>
                                        <input class="form-control"   type="date" id="data_nascimento" name="data_nascimento">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="idade">Idade:</label>
                                        <input class="form-control"   type="number" id="idade" name="idade">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="rg">RG:</label>
                                        <input class="form-control"   type="text" id="rg" name="rg">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="cpf">CPF:</label>
                                        <input class="form-control"   type="text" id="cpf" name="cpf">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="ddd">DDD:</label>
                                        <input class="form-control"   type="text" id="dd" name="dd">
                                    </div>
                                    <div class="form-group col-lg-8">
                                        <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                        <label for="tel">Telefone/Celular:</label>
                                        <input class="form-control"   type="text" id="contato" name="contato">
                                    </div>
                                    <br>
                                    <div align="center">
                                        <input type="hidden" name="id" id="id" value="0" />
                                        <button type="submit" id="salvar" class=" center btn btn-success">Enviar</button>
                                        <button type="reset" class="center btn btn-danger">Limpar</button> 
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php
        include '../../layout/rodape.php';
        ?>

    </body>
</html>
