<?php

function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}
?>

<!DOCTYPE HTML>
<html land="pt-BR">
    <head>

    </head>
    <body>
        <?php
        //CABEÇALHO
        include './cabecalho.php';
        ?>
        <div class="container theme-showcase">
            <?php
            $estado = new Estados();

            if (isset($_POST['cadastrar'])):

                $nome = $_POST['nome'];
                $uf = $_POST['uf'];

                $estado->setNome($nome);
                $estado->setUf($uf);

                # Insert
                if ($estado->insert()) {
                    echo "<div class='alert alert-success' role='alert'>Inserido com sucesso!</div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Erro ao Iserir!</div>";
                }

            endif;
            ?>

            <?php
            if (isset($_POST['atualizar'])):

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $uf = $_POST['uf'];

                $estado->setNome($nome);
                $estado->setUf($uf);

                if ($estado->update($id)) {
                    echo "<div class='alert alert-success' role='alert'>Atualizado com sucesso!</div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Erro ao Iserir!</div>";
                }

            endif;
            ?>

            <?php
            if (isset($_GET['acao']) && $_GET['acao'] == 'editar') {

                $id = (int) $_GET['id'];
                $resultado = $estado->find($id);
                ?>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header text-center">Cadastro de Estados</h3><!--titulo-->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <form role="form" action="" method="post">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    Informações de Cadastro
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="desc">Nome</label>
                                            <input class="form-control"  id="nome" name="nome" value="<?php echo $resultado->nome; ?>" >
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class=""></div>
                                        <div class="col-lg-offset-1 form-group col-lg-3">
                                            <label for="uf">UF</label>
                                            <input class="form-control"   type="text" id="uf" name="uf" value="<?php echo $resultado->uf; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
                                    </div>

                                </div>
                            </div>

                            <!--================================================-------> 
                            <div class="panel-footer">
                                <button type="submit" name="atualizar" class="btn btn-success">Enviar</button>
                                <button type="reset" class=" btn btn-danger">Limpar</button>
                                <button class="col-lg-offset-9 btn-lg btn-default"><a href="lista_estados.php">Estados</a></button>
                            </div>
                        </div>
                    </form>
                </div>


            <?php } else { ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header text-center">Cadastro de Estados</h3><!--titulo-->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <form role="form" action="" method="post">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    Informações de Cadastro
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="desc">Nome</label>
                                            <input class="form-control"  id="nome" name="nome" >
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class=""></div>
                                        <div class="col-lg-offset-1 form-group col-lg-3">
                                            <label for="uf">UF</label>
                                            <input class="form-control"   type="text" id="uf" name="uf">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!--================================================-------> 
                            <div class="panel-footer">
                                <button type="submit" name="cadastrar" class="btn btn-success">Enviar</button>
                                <button type="reset" class=" btn btn-danger">Limpar</button>
                                <button class="col-lg-offset-9 btn-lg btn-default"><a href="lista_estados.php">Estados</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>

    </div>

    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>