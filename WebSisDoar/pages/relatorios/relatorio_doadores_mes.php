<?php

include("../../assets/mpdf60/mpdf.php");
include("../../config/conexao.php");

$dataInicio = $_POST['data_inicio'];
$dataFim = $_POST['data_fim'];

$html = "<h3><img src='../../assets/img/brasao.jpg'></h3>
	 	
                <p class='center sub-titulo'>
                Estado do Acre 
                <br>
                Secretaria de Estado de Saude
                <br>
                HEMOCENTRO do Estado do Acre
                </p>
                
                <h3>Doadores por Periodo de: $dataInicio a $dataFim</h3> 
             <table >
                <thead>
                      <tr>
                            <th>ID</th>
                            <th>Data Registro</th>
                            <th>Nome</th>
                            <th>Nascimento</th>
                            <th>Idade</th>
                            <th>Tipo Sangue</th>
                            <th>Fator RH</th>
                      </tr>
               </thead>
";


if ($_POST['data_inicio'] || $_POST['data_fim']) {
    $sql = "SELECT iddoador, nome, date_format(data_nascimento,'%d/%m/%Y')  as 'data', idade, tipo_sangue,
                                        d.fator_rh, date_format(data_registro, '%d/%m/%Y') as data_registro 
                                        FROM doador d
                                        WHERE data_registro >='" . $_POST['data_inicio'] . "'and data_registro <='" . $_POST['data_fim'] . "'";



    foreach ($con->query($sql) as $row) {

        $html .= '<tr>';
        $html .= '<td>' . $row['iddoador'];' </td>';
        $html .= '<td>' . $row['data_registro'];' </td>';
        $html .= '<td>' . $row['nome'] . '</td>';
        $html .= '<td>' . $row['data'] . '</td>';
        $html .= '<td >' . $row['idade'] . '</td>';
        $html .= '<td >' . $row['tipo_sangue'] . '</td>';
        $html .= '<td >' . $row['fator_rh'] . '</td>';
        $html .= '</tr>';
    }
}


$html .= '		
</table>';
$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$css = file_get_contents("estilo.css");
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();

exit;
