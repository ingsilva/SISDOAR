<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Doe + Vida - Página Incial</title>
        <link rel="icon" type="image/png"  href="img/apple-touch-icon.png" />


    </head>

    <body>
        <?php
        include 'cabecalho.php';
        ?>

        <div class="container theme-showcase" role="main">
            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1></h1>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic form -->
                        <div class="box-info">
                            <h2>Dados do Paciente</h2>
                            <!-- Basic form body -->
                            <div id="basic-form" class="collapse in">
                                <form name="form" role="form" action="../../model/paciente/cad_parciente.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-8 form-group">
                                            <label for="nomepac">Nome do Paciente</label>
                                            <input class="form-control" type="text" id="nomepac" name="nomepac" required="true"/>
                                        </div>

                                        <div class="col-sm-2 form-group">
                                            <label for="datanasc">Data de Nascimento</label>
                                            <input class="form-control" type="date" id="datanasc" name="datanasc" required="true"/>
                                        </div>

                                        <div class="col-sm-1 form-group">
                                            <label for="idade">Idade</label>
                                            <input class="form-control" type="text" id="idade" name="idade" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label for="cpf">CPF</label>
                                            <input class="form-control" id="cpf" type="text" name="cpf" required="true" 
                                                   onkeypress="mascara(this, '###.###.###-####')" maxlength="14" onblur="validaCPF(this.value);"/>
                                        </div>

                                        <div class="col-sm-4 form-group">
                                            <label for="rg">Registro Geral</label>
                                            <input class="form-control" id="rg"  type="text" name="rg" required="true"/>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="sexo">Sexo</label>
                                            <select class="form-control" id="sexo" name="sexo" required="true">
                                                <option value="">--------</option>
                                                <option value="feminino">Feminino</option>
                                                <option value="masculino">Masculino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-4 form-group">
                                            <label for="nsus">Cartão do SUS</label>
                                            <input class="form-control" type="text" id="nsus" name="nsus" required="true"
                                                   onkeypress="mascara(this, '### #### #### ####')" maxlength="18"/>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="telfixo">Telefone Fixo</label>
                                            <input class="form-control" type="text" id="telfix" name="telfixo" 
                                                   onkeypress="mascara(this, '## ####-####')" maxlength="13"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="telcel">Celular</label>
                                                <input class="form-control" type="text" id="telcel" name="telcel" 
                                                       onkeypress="mascara(this, '## ####-####')" maxlength="13"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-11 form-group">
                                            <label for="presc">Prescições</label>
                                            <textarea class="form-control" id="presc" name="presc" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 form-group">
                                            <label for="raca">Raça/Cor</label>
                                            <select class="form-control" id="raca" name="raca" required="true">
                                                <option>-------</option>
                                                <option value="amarela">Amarela</option>
                                                <option value="branca">Branca</option>
                                                <option value="indígena">Indígena</option>
                                                <option value="parda">Parda</option>
                                                <option value="preta">Preta</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="instr">Escolaridade</label>
                                            <select class="form-control" id="instr" name="instr">
                                                <option>-------</option>
                                                <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                                <option value="Fundamental Completo">Fundamental Completo</option>
                                                <option value="Médio Incompleto">Médio Incompleto</option>
                                                <option value="Médio Completo">Médio Completo</option>
                                                <option value="Superior Incompleto">Superior Incompleto</option>
                                                <option value="Superior Completo">Superior Completo</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="prof">Profissão</label>
                                            <input class="form-control" type="text" id="datanasc" name="prof" required="true"/>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="usaude">Unidade de Origem</label>
                                            <select class="form-control" id="usaude" name="usaude" required="true">
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label for="end">Rua</label>
                                            <input class="form-control" type="text" id="end" name="end"/>
                                        </div>

                                        <div class="col-sm-2 form-group">
                                            <label for="end_num">Nº</label>
                                            <input class="form-control" type="text" id="end_num" name="end_num"/>
                                        </div>

                                        <div class="col-sm-2 form-group">
                                            <label for="end_cep">CEP</label>
                                            <input class="form-control" type="text" onkeypress="mascara(this, '#####-###')" maxlength="9" id="end_cep" name="end_cep"/>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="end_ref">Referência</label>
                                            <input class="form-control" type="text" id="end_ref" name="end_ref"/>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-sm-2 form-group">
                                            <label for="pais">Pais</label>
                                            <select class="form-control" type="text" id="idpais" name="idpais" onchange="listar_estados()">
                                                <option >escolha um pais</option>
                                               
                                            </select>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="estado">Estado</label>
                                            <select class="form-control" type="text" id="estado" name="estado" onchange="listar_cidades()">
                                                <option >escolha primeiro um país</option>

                                            </select>

                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="cidade">Cidade</label>
                                            <select class="form-control" type="text" id="cidade" name="cidade">
                                                <option value="">escolha primeiro um estado</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3 form-group">
                                            <label for="end_bar">Bairro</label>
                                            <input class="form-control" type="text" id="end_bar" name="end_bar"/>
                                        </div>
                                    </div>

                                    <button name="cad_paciente" type="submit" class="btn btn-success">Enviar Dados</button>
                                    <button type="reset" class="btn btn-danger">Limpar Dados</button>
                                </form>
                            </div><!-- End div #basic-form -->
                        </div><!-- End div .box-info -->
                    </div><!-- End div .col-sm-6 -->
                </div><!-- End div .row -->
            </div>
            <!-- End page header -->

        </div>
        <?php
        include 'rodape.php';
        ?>
    </body>
</html>