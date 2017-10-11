<?php

include '../../config/conexao.php';
$html = '
<table cellspacing="0" width="100%" border="1">
        <thead>
          <tr>
            <td width="17%" class="tc">Data Pagamento</td>
            <td width="13%" class="tc">Descrição</td>
            <td width="9%" class="tc">Tipo Despesa</td>
            <td width="15%" class="tc">Data Vencimento</td>
            <td width="15%" class="tc">Valor não Fiscal</td>  
            <td width="13%" class="tc">Valor Fiscal</td>     
            <td width="13%" class="tc">Valor Total</td>      
            <td width="5%" class="tc">Status</td>
          </tr>
        </thead>
	<tbody>';

$sql = ("select * from usuarios");
foreach ($con->query($sql) as $row) {

    $html .= '<tr>';
    $html .= '<td>' . $row['id'] . '</td>';
    $html .= '<td>' . $row['usuario'] . '</td>';
    $html .= '<td>' . $row['email'] . '</td>';

    $html .= '</tr>';
}



$html .= '</tbody>		
</table>';

include("../../assets/mpdf60/mpdf.php");
$mpdf = new mPDF('c', 'A4', '', '', 10, 10, 27, 25, 16, 13);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;
$stylesheet = file_get_contents('estilo.css');
$mpdf->WriteHTML($stylesheet, 1);
$mpdf->WriteHTML($html, 2);
$mpdf->Output('mpdf.pdf', 'I');
exit;
?>