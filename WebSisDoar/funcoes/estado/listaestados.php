<?php

include"./config/conexao.php";
$sql = $con->query("SELECT * FROM estado");



$resultado = "";

$resultado .="<div class='row' >
                <div class='col-sm-12'>
                    <div class='panel panel-info'>    
                        <div class='panel-heading'>
                            <div class='row'>  
                                <div class='col-lg-offset-11'>
                                    <a  type='button' class='btn btn-primary btn-xl page-scroll' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo'> <i class='glyphicon glyphicon-plus '></i></a>    
                                </div>
                            </div>
                        </div>
                        <div class='table-responsive'>
                            <div class='panel-body '>
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>UF</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                                            $resultado .= " <tr>";
                                            $resultado .= "<td>" . $row->idestado . "</td>";
                                            $resultado .= "<td>" . $row->descricao . "</td>";
                                            $resultado .= "<td>" . $row->uf . "</td>";
                                            $resultado .= "<td><a class='btn btn-success' id='editar' rel='" . $row->idestado . "'><i class='glyphicon glyphicon-edit'></i></a> "
                                            . "<a href='#' class='btn btn-primary' id='detalhes' rel='" . $row->idestado . "'><i class='glyphicon glyphicon-list'></i></a>"
                                            . " <a href='#' class='btn btn-danger' id='excluir' rel='" . $row->idestado . "'><i class='glyphicon glyphicon-remove'></i></a> </td>";
                                            $resultado .= "</tr>";
}

                $resultado .=" </tbody>
                                </table>
                            </div>
                            <div class='panel-footer'></div>
                        </div>
                    </div>
                </div>
            </div>";

echo $resultado;
?>