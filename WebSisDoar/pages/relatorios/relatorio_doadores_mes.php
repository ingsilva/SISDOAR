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
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data Nascimento</th>
                            <th>Idade</th>
                            <th>Tipo Sangue</th>
                            <th>fator RH</th>
                      </tr>
               </thead>
";


if ($_POST['data_inicio'] || $_POST['data_fim']) {
    $sql = "SELECT iddoador, nome, date_format(data_nascimento,'%d/%m/%Y')  as 'data', d.idade, d.tipo_sangue,
                                        d.fator_rh, data_hora
                                        FROM doador d, triagem t, estoque_sangue es
                                        WHERE d.iddoador = t.doador_iddoador 
                                            AND  
                                                t.idtriagem = es.triagem_idtriagem 
                                            AND data_hora >='" . $_POST['data_inicio'] . "'and data_hora <='" . $_POST['data_fim'] . "'";



    foreach ($con->query($sql) as $row) {

        $html .= '<tr>';
        $html .= '<td>' . $row['iddoador'];
        ' </td>';
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
