<?php

include("../../assets/mpdf60/mpdf.php");
include("../../config/conexao.php");

$html = "<h3><img src='../../assets/img/brasao.jpg'></h3>
	 	
                <p class='center sub-titulo'>
                Estado do Acre 
                <br>
                Secretaria de Estado de Saude
                <br>
                HEMOCENTRO do Estado do Acre
                </p>
             <table >
                <thead>
                      <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Email</td>
                      </tr>
               </thead>
";

$sql = ("select * from usuarios");
foreach ($con->query($sql) as $row) {

    $html .= '<tr>';
    $html .= '<td>' . $row['id'] . '</td>';
    $html .= '<td>' . $row['usuario'] . '</td>';
    $html .= '<td>' . $row['email'] . '</td>';

    $html .= '</tr>';
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
