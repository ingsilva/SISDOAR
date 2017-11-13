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

if (isset($_GET['iddoador'])) {
    $sql = "select iddoador, nome, cpf, "
            . "date_format(now(), '%d/%m/%Y')  as 'data' "
            . "from doador where iddoador ='" . $_GET['iddoador'] . "'";
    foreach ($con->query($sql) as $row) {

        $html .= '<fieldset>';
        $html .= "<p class='center sub-titulo'>DECLARAÇÃO DE COMPARECIMENTO</p>";
        $html .= "<p>Declaramos, com agradecimentos que o Sr.(a) <strong>" . $row['nome'] . "</strong> <br> CPF: <strong>" . $row['cpf'] . "</strong> compareceu para doação, voluntariamente ao (a)<strong> HEMOCENTRO DO ACRE</strong> <br> na data de: <strong>" . $row['data'] . ";</strong></p>";

        $html .= "<p>Assinatura ......................................................................................................................................</p>
	 	<p class='center'><strong>Funcionário da coleta</strong></p>";

        $html .= "</fieldset>";
    }
}
$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$css = file_get_contents("estilo_atestado.css");
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();

exit;
