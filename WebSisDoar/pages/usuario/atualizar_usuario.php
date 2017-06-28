<?php
include '../../config/conexao.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <title>Cadastrar Usuarios</title>

        <?php
        include '../../layout/cabecalho.php';
        ?>
    </head>
    <body>
        <div class="body content rows scroll-y">
            <!-- Page header -->
            <div class="page-heading animated fadeInDownBig">
                <h1><small> Cadastrar </small> Usuário </h1>
            </div>
            <!-- End page header -->
            <!--==============INICIO DO CÓDIGO PHP============================-->
            <?php
            if (isset($_GET['id'])) {
                $sql = "select id , usuario, email, senha from usuarios where id='" . $_GET['id'] . "'";
                foreach ($con->query($sql) as $row) {
                    ?>
                    <!--===============================================================-->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic form -->
                            <div class="box-info">
                                <h2>Cadastrar Usuário </h2>
                                <!-- Basic form body -->
                                <div id="basic-form" class="collapse in">
                                    <form role="form" action="../../funcoes/usuario/update_usuario.php" method="post">                         
                                        <div class="row">
                                            <div class="form-group col-lg-5">
                                                <label for="nome">Nome de Usuário</label>
                                                <input class="form-control" type="text"  id="nome" name="usuario" value="<?php echo $row['usuario'] ?>" disabled="">
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="login">Email</label>
                                                <input class="form-control" type="text"  id="email" name="email"  value="<?php echo $row['email'] ?>" >
                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label for="senha">Senha</label>
                                                <input class="form-control"   type="password" id="senha" name="senha"  >
                                            </div>
                                        </div>
                                        <!--================================================-------> 
                                        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>" />
                                        <!--================================================-------> 
                                        <button type="submit" id="salvar" class="btn btn-success">Enviar</button>
                                        <button type="reset" class=" btn btn-danger">Limpar</button>
                                    </form>
                                </div><!-- End div #basic-form -->
                            </div>
                        </div><!-- End div .box-info -->
                    </div><!-- End div .col-sm-6 -->
                    <!-- End div .col-sm-6 -->
                    <?php
                }
            }
            ?>
            <?php
            include '../../layout/rodape.php';
            ?>
    </body>
</html>
