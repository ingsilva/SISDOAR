<?php

include("../../assets/mpdf60/mpdf.php");
include("../../config/conexao.php");
$head = "
	 
	 	<h1><img src='../../assets/img/brasao.jpg'></h1>
	 	
                <p class='center sub-titulo'>
                Estado do Acre 
                <br>
                Secretaria de Estado de Saude
                <br>
                HEMOCENTRO do Estado do Acre
                </p>
	 	
	 ";
$body = "
 <fieldset>    
  <p class='center sub-titulo'>DECLARAÇÃO DE DOAÇÃO</p>
<p>Declaramos, com agradecimentos que o Sr.(a) <strong>Carlos Domingues Neto </strong> <br> CPF: <strong>022.882.192-46</strong> doou sangue, voluntariamente ao(a)<strong> HEMOCENTRO DO ACRE</strong> <br> na data de <strong>10/10/2017</strong></p>
	 	
	 	<p>Assinatura ......................................................................................................................................</p>
	 	<p class='center'>Funcionário da coleta</p>
	 	
</fieldset>                
";
$html = $head . $body;

$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$css = file_get_contents("estilo.css");
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();

exit;
