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

";


if ($_GET['idq_triagem']) {
    $sql = "select idq_triagem, t.doador_iddoador, iddoador, d.nome, truncate(datediff(now(), data_nascimento)/365,0) as 'idade',
                                            date_format(data_registro, '%d/%m/%Y') as data_registro, obs_doador,
                                            case anemia	
                                                   when 'nao' then 'Inapto a Doar'
                                                   when 'sim' then 'Apto a Doar'
                                            end anemia, 
                                            case qt.situacao_doador
                                                when null then 'Inapto a Doar'
                                                when 'nao' then 'Inapto a Doar'
                                            end as situacao_doador
                                            from doador d, triagem t, questionario_triagem qt   
                                                    where t.doador_iddoador = d.iddoador 
                                                    and qt.triagem_idtriagem = t.idtriagem
                                                    and t.anemia = 'sim' and qt.situacao_doador = 'nao'
                                                    group by nome, idade
                                                    and idq_triagem ='" . $_GET['idq_triagem'] . "'";



    foreach ($con->query($sql) as $row) {
        

        $html .= '<table>';
        $html .= '<thead>';
        $html .= '<tr><th>ID: <td>' . $row['iddoador'] . '</td></th></tr>';
        $html .= '<tr><th>DATA DE REGISTRO: <td>' . $row['data_registro'] . '</td></th></tr>';
        $html .= '<tr><th>NOME: <td>' . $row['nome'] . '</td></th></tr>';
        $html .= '<tr><th>IDADE: <td>' . $row['idade'] . '</td></th></tr>';
        $html .= '<tr><th>STATUS T. HEMATOLOGICA: <td>' . $row['anemia'] . '</td></th></tr>';
        $html .= '<tr><th>STATUS T. CLÍNICA: <td>' . $row['situacao_doador'] . '</td></t></tr>';
        $html .= '<tr><th>OBSERVAÇÕES: <td>' . $row['obs_doador'] . '</td></td></tr>';
        $html .= '</thead>';
        $html .= '</table>';
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
