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


if ($_GET['idtriagem']) {
    $sql = "select iddoador, idtriagem, d.nome, truncate(datediff(now(), data_nascimento)/365,0) as 'idade',
                                            date_format(data_registro, '%d/%m/%Y') as data_registro, tipo_sangue, fator_rh,
                                            obs_htc, peso, altura,
                                            case teste_anemia	
                                                   when 'nao_apto' then 'Inapto a Doar'
                                                   when 'apto' then 'Apto a Doar'
                                            end teste_anemia
                                            from doador d
                                             inner join triagem t
						on d.iddoador = t.doador_iddoador
                                                 and teste_anemia = 'nao_apto' 	
                                                        and idtriagem ='" . $_GET['idtriagem'] . "' group by nome, idade";



    foreach ($con->query($sql) as $row) {


        $html .= '<table>';
        $html .= '<thead>';
        $html .= '<tr><th>ID: <td>' . $row['iddoador'] . '</td></th></tr>';
        $html .= '<tr><th>DATA DE REGISTRO: <td>' . $row['data_registro'] . '</td></th></tr>';
        $html .= '<tr><th>NOME: <td>' . $row['nome'] . '</td></th></tr>';
        $html .= '<tr><th>IDADE: <td>' . $row['idade'] . '</td></th></tr>';
        $html .= '<tr><th>TIPO: <td>' . $row['tipo_sangue'] . '</td></th></tr>';
        $html .= '<tr><th>FATOR RH: <td>' . $row['fator_rh'] . '</td></th></tr>';
        $html .= '<tr><th>PESO: <td>' . $row['peso'] . '</td></th></tr>';
        $html .= '<tr><th>ALTURA: <td>' . $row['altura'] . '</td></th></tr>';
        $html .= '<tr><th>STATUS T. HEMATOLOGICA: <td>' . $row['teste_anemia'] . '</td></th></tr>';
        $html .= '<tr><th>OBSERVAÇÕES: <td>' . $row['obs_htc'] . '</td></td></tr>';
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
