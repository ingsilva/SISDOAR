<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastrar Usuarios</title>
        <link rel="icon" type="image/png"  href="assets/img/apple-touch-icon.png" />
        <?php
            include './layout/cabecalho.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var usuario = $("#usuario").val();
                    var email = $("#email").val();
                    var senha = $("#senha").val();

                    var dataString = {id: id, usuario: usuario, email: email,
                        senha: senha};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/usuario/function_login.php",
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
                <h1><small> Cadastrar </small> Usuário </h1>
            </div>
            <!-- End page header -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic form -->
                    <div class="box-info">
                        <h2>Cadastrar Usuário </h2>
                        <!-- Basic form body -->
                        <div id="basic-form" class="collapse in">
                            <form role="form" action="../../funcoes/usuario/function_usuario.php" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-5">
                                        <label for="usuario">Nome de Usuário</label>
                                        <input class="form-control" type="text"  id="usuario" name="usuario" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="email">Login</label>
                                        <input class="form-control" type="text"  id="email" name="email" >
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="senha">Senha</label>
                                        <input class="form-control"   type="password" id="senha" name="senha">
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" value="0" />
                                <!--================================================-------> 
                                <button type="button" id="salvar" class="btn btn-success">Enviar</button>
                                <button type="reset" class=" btn btn-danger">Limpar</button>
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
