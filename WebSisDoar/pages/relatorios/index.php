<!DOCTYPE html>  
<?php
include '../../config/conexao.php';
?>
<html>
    <head>
        <style>
            fieldset{
                width: 750px;
                margin: 10px auto;
                color: #444;
                border: 5px solid #ccc;
                font-family: Helvetica;
                padding: 15px;
            }
            
            h3{
                text-align: center;

            }
            
            p.sub-titulo{
                font-size: 20px;
            }

            .direita{
                text-align: right;
            }

            .center{
                text-align: center;
            }
           
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <h3><img src='../../assets/img/brasao.jpg'></h3>

        <p class='center sub-titulo'>
            Estado do Acre 
            <br>
            Secretaria de Estado de Saude
            <br>
            HEMOCENTRO do Estado do Acre
        </p>
        <table >

            <?php
            $sql = ("select * from usuarios");
            foreach ($con->query($sql) as $row) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <?php echo "<a class='btn btn-info' href='atualizar_usuario.php?id=" . $row['id'] . "'><i class='glyphicon glyphicon-edit'></i></a>"; ?>
                    </td>
                    <td>
                        <?php echo "<a href='#' class='btn btn-danger' id='excluir' rel='" . $row['id'] . "'><i class='glyphicon glyphicon-remove'></i></a>"; ?>
                    </td>
                </tr>
                <?php
            }
            ?>


        </table>

    </body>
</html>