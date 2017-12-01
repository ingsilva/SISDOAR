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
                
                <h3>DOADOR APTO POR COLETA</h3>

";


if ($_GET['idest_sangue']) {
    $sql = "select iddoador, idest_sangue, idq_triagem, d.nome, truncate(datediff(now(), data_nascimento)/365,0) as 'idade',
                                            date_format(data_registro, '%d/%m/%Y') as data_registro, d.tipo_sangue, d.fator_rh, obs_coleta,
                                            case teste_anemia
                                                    when 'nao_apto' then 'Inapto a Doar'
                                                    when 'apto' then 'Apto a Doar'
                                            end teste_anemia,
                                            case situacao_doador
                                                    when 'nao_apto' then 'Inapto a Doar'
                                                    when 'apto' then 'Apto a Doar'
                                            end situacao_doador,
                                            case status_coleta
                                                    when 'Inaptos' then 'Inapto a Doar'
                                                    when 'Aptos' then 'Apto a Doar'
                                            end status_coleta
                                            from doador d
                                             left join triagem t
							on d.iddoador = t.doador_iddoador
                                                inner join questionario_triagem qt
							on t.idtriagem = qt.triagem_idtriagem
                                                    inner join estoque_sangue es
							on qt.idq_triagem = es.questionario_triagem_idq_triagem
								and status_coleta = 'Aptos'	
                                                        and idest_sangue ='" . $_GET['idest_sangue'] . "' group by nome, idade";



    foreach ($con->query($sql) as $row) {


        $html .= '<table>';
        $html .= '<thead>';
        $html .= '<tr><th>ID: <td>' . $row['iddoador'] . '</td></th></tr>';
        $html .= '<tr><th>DATA DE REGISTRO: <td>' . $row['data_registro'] . '</td></th></tr>';
        $html .= '<tr><th>NOME: <td>' . $row['nome'] . '</td></th></tr>';
        $html .= '<tr><th>IDADE: <td>' . $row['idade'] . '</td></th></tr>';
        $html .= '<tr><th>STATUS T. HEMATOLOGICA: <td>' . $row['teste_anemia'] . '</td></th></tr>';
        $html .= '<tr><th>STATUS T. CLÍNICA: <td>' . $row['situacao_doador'] . '</td></th></tr>';
        $html .= '<tr><th>STATUS T. COLETA: <td>' . $row['status_coleta'] . '</td></th></tr>';
        $html .= '<tr><th>OBSERVAÇÕES: <td>' . $row['obs_coleta'] . '</td></th></tr>';
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
