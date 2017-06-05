<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../../config/conexao.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script> 
        <script src="comboEstadoCidade.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <div class="col-sm-2 form-group">
            <label for="idestado">Estado</label>
            <select class="form-control" id="idestado" name="idestado" onchange="listar_cidades()">
                <option>------</option>
                <?php
                $sql = ("SELECT idestado, uf FROM estado");
                foreach ($con->query($sql) as $row) {
                    echo "<option value='" . $row['idestado'] . "'>" . $row['uf'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-lg-3 form-group">
            <label for="cidade">Cidade</label>
            <select class="form-control" type="text" id="cidade" name="cidade">
                <option value="">escolha primeiro um estado</option>
            </select>
        </div>
    </body>
</html>
