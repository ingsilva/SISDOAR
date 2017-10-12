<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "abastecimentoAcoes.class.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/sisterra/class/dao/abastecimentoDao.class.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/sisterra/dist/mpdf/mpdf.php");
header("Content-type: text/html; charset=utf-8");
//*****************************************************
$ano = $_GET['ano'];
$mes = $_GET['mes'];
$id_pessoa = $_GET['id_pessoa'];
$id_tipo = $_GETET['id_tipo'];
$abastecimento = new AbastecimentoTabela();
$banco = new Abastecimento();
$abastecimento = $banco->pesquisarRelatorio($ano, $mes, $id_pessoa, $id_tipo, 1, 0);
if (count($abastecimento) <= 0) {
    echo '<script language="javaScript">
              window.alert("Nenhum Registro Econtrado");
              window.close();
          </script>';
    return false;
}
//print_r($abastecimento);
//*****************************************************
$data = explode("-", date('Y-m-d'));
$dia = $data[2];
$mes = $data[1];
$ano = $data[0];
$meses = array(
    '01' => 'Janeiro',
    '02' => 'Fevereiro',
    '03' => 'Março',
    '04' => 'Abril',
    '05' => 'Maio',
    '06' => 'Junho',
    '07' => 'Julho',
    '08' => 'Agosto',
    '09' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro');
//*****************************************************
$html = "
        <html>
        <title>Relatório de Abastecimentos<title>
        <head>
        <style>
                    page toc { sheet-size: A4; }
                    body{
                        font-family: arial;
                        font-style: normal;
                        font-variant: normal;
                        font-size: 9pt;
                    }
                    
                    table {
                        margin-top: 3%;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    table, td, tr{
                        border: 1px solid black;
                    }
                    tr, td{
                        padding: 1%;
                        font-size: 9pt;
                        text-align: center;
                    }
                    #cabecalho{
                      display:block;
                    }
                    .cabecalho2{
                      position: relative;
                      text-align: center;
                      margin-top: 1%;
                      font-weight: bold;
                      font-size: 9pt;
                    }
                    #logo{
                      width: 9%;
                      margin: 0 auto;
                    }
                    
                    #erro{
                    text-align: center;
                    
                    }
                   
                    .centro{
                     text-align: center;
                    }
                    
                    .lateralLogo{
                        width: 9%;
                        margin-left: 0%;
                        float: left;
                    }
                    
                    .lateralDireita{
                    text-align: right;
                    }
                    .esquerdaEmpresa{
                        font-size: 13pt;
                    }
                    .esquerdaCabecalho{
                        float: left; width:90%; text-align: center;
                    }
                    .esquerdaendereco{
                        float: left; width:90%; text-align: center;
                    }
                    .esquerda{
                        float: left; width:20%; text-align: left;
                    }
                    .direita{
                        float:right; width:50%; text-align: center;
                    }
                    .matricula{
                        float:right; width:30%; text-align: right;
                    }
                    .nome{
                        float: left; width:50%;
                    }
        </style>
        </head>
        <body>
            <div class ='lateralLogo'>
                <img src='http://localhost/sisterra/img/logoPdf.jpg'>
            </div>
            <div class='esquerdaCabecalho'>
                <div class='esquerdaEmpresa'>
                    <b> " . utf8_decode("ABC - Empressa de Construção Civil, Terraplanagem e Com. Ltda") . "</b>
                </div>
                <div class='lateral'>
                    " . utf8_decode("Av. Antonio da Rocha Viana nº 2005, Vila Ivonete, Rio Branco - Acre") . " <br>
                    telefone (68) 3215-1514 / (68)9 9916-6960
                </div>
            </div>
            <hr>
            <div class='centro'>
                <br>
                <b>RELATORIO DE ABASTECIMENTOS</b>
            </div><hr>
                <b>". utf8_decode("Proprietário").": ". $abastecimento[0]->getNm_razao_social()."</b><br> <hr>
               <b> => Equipamento: " . $abastecimento[0]->getNm_tipo() . " - " . $abastecimento[0]->getDs_equipamento() . " " . " " . $abastecimento[0]->getDs_marca() . " " . $abastecimento[0]->getDs_modelo(). " " . $abastecimento[0]->getCd_placa() . "</b><br>
               <table>
                        <tr>
                            <td width=><b>" . utf8_decode("Data") . "</b></td>
                            <td width=><b>Quant</b></td>
                            <td width=><b>". utf8_decode("Preço")."</b></td>
                            <td width=><b>Valor</b></td>
                            <td width=><b>Comprovante</b></td>
                            <td width=><b>Motorista</b></td>
                            <td width=><b>Obra</b></td>
                        </tr>";
$idFornecedor = $abastecimento[0]->getId_pessoa();
$idEquipamento = $abastecimento[0]->getId_equipamento();
$somaQuantPessoa= 0;
$somaValorPessoa= 0;
$somaQuantEqui= 0;
$somaValorEqui= 0;
foreach ($abastecimento as $linhas) {
    if($idFornecedor == $linhas->getId_pessoa()){
        if($idEquipamento == $linhas->getId_equipamento()){
            $somaQuantPessoa += $linhas->getQt_abastecimento();
            $somaValorPessoa += $linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento();
            $somaQuantEqui += $linhas->getQt_abastecimento();
            $somaValorEqui += $linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento();
            $html.= "
                        <tr> 
                            <td>" .
                    $linhas->getDt_data() . "
                            </td>
                            <td>" .
                    number_format($linhas->getQt_abastecimento(), "2", ",", ".")."                                
                            </td>
                            <td>" .
                    number_format($linhas->getVl_preco_combustivel(), "2", ",", ".") . "
                            </td>
                             <td>" .
                    number_format($linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento(), "2", ",", ".") . "
                            </td>
                            <td>" .
                    $linhas->getCd_documento() . "
                            </td>
                            <td>" .
                    $linhas->getNm_nome_completo() . "
                            </td>
                             <td>" .
                    $linhas->getDs_local(). "
                            </td>
                        </tr>";
                
        }else{
            
            $html.= "   <tr>
                            <td colspan=6 align='right'><b>Total Abastecimento:<br>Total Valor: </b></td>
                            <td  align='left'><b> Lts " . number_format($somaQuantEqui, "2", ",", ".") . "<br> R$. " . 
                                                     number_format($somaValorEqui, "2", ",", ".") . "</b></td>
                        </tr>
                    </table>
                    <br>
                    <b>=> Equipamento: " . $linhas->getNm_tipo() . " - " . $linhas->getDs_equipamento() . " " . " " . $linhas->getDs_marca() . " " . $linhas->getDs_modelo(). " " . $linhas->getCd_placa() . "</b><br>
                    <table>
                        <tr>
                            <td width=><b>" . utf8_decode("Data") . "</b></td>
                            <td width=><b>Quant</b></td>
                            <td width=><b>". utf8_decode("Preço")."</b></td>
                            <td width=><b>Valor</b></td>
                            <td width=><b>Comprovante</b></td>
                            <td width=><b>Motorista</b></td>
                            <td width=><b>Obra</b></td>
                        </tr>
                        <tr> 
                            <td>" .
                    $linhas->getDt_data() . "
                            </td>
                            <td>" .
                    number_format($linhas->getQt_abastecimento(), "2", ",", ".")."                                
                            </td>
                            <td>" .
                    number_format($linhas->getVl_preco_combustivel(), "2", ",", ".") . "
                            </td>
                             <td>" .
                    number_format($linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento(), "2", ",", ".") . "
                            </td>
                            <td>" .
                    $linhas->getCd_documento() . "
                            </td>
                            <td>" .
                    $linhas->getNm_nome_completo() . "
                            </td>
                             <td>" .
                    $linhas->getDs_local(). "
                            </td>
                        </tr>";
            $somaQuantEqui= 0;
            $somaValorEqui= 0;
            $idEquipamento = $linhas->getId_equipamento();
            $somaQuantEqui += $linhas->getQt_abastecimento();;
            $somaValorEqui += $linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento();;
            $somaQuantPessoa += $linhas->getQt_abastecimento();
            $somaValorPessoa += $linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento();
        }
        
    }else{
        
        $html.= "<tr>
                            <td colspan=6 align='right'><b>Total Abastecimento:<br>Total Valor: </b></td>
                            <td  align='left'><b> Lts " . number_format($somaQuantEqui, "2", ",", ".") . "<br> R$. " . 
                                                     number_format($somaValorEqui, "2", ",", ".") . "</b></td>
                 </tr>
            </table>
            <hr>
            <div class='esquerda'><b>". utf8_decode("Total Proprietário: </b></div><div class='esquerda'><b>") . number_format($somaQuantPessoa, "2", ",", ".")  . "Lts</b> </div><div class='esquerda'><b>R$ " . number_format($somaValorPessoa, "2", ",", ".") . "</b></div>
            <br>
            <hr>
            <div class='centro'>***********************************************************************************************************************</div>
                <hr>
                <b>". utf8_decode("Proprietário").": ".$linhas->getNm_razao_social()."</b><br>
                <hr>
                 <b>=> Equipamento: " . $linhas->getNm_tipo() . " - " . $linhas->getDs_equipamento() . " " . " " . $linhas->getDs_marca() . " " . $linhas->getDs_modelo(). " " . $linhas->getCd_placa() . "</b><br>
                     <table>
                        <tr>
                            <td width=><b>" . utf8_decode("Data") . "</b></td>
                            <td width=><b>Quant</b></td>
                            <td width=><b>". utf8_decode("Preço")."</b></td>
                            <td width=><b>Valor</b></td>
                            <td width=><b>Comprovante</b></td>
                            <td width=><b>Motorista</b></td>
                            <td width=><b>Obra</b></td>
                        </tr>
                        <tr> 
                            <td>" .
                    $linhas->getDt_data() . "
                            </td>
                            <td>" .
                    number_format($linhas->getQt_abastecimento(), "2", ",", ".")."                                
                            </td>
                            <td>" .
                    number_format($linhas->getVl_preco_combustivel(), "2", ",", ".") . "
                            </td>
                             <td>" .
                    number_format($linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento(), "2", ",", ".") . "
                            </td>
                            <td>" .
                    $linhas->getCd_documento() . "
                            </td>
                            <td>" .
                    $linhas->getNm_nome_completo() . "
                            </td>
                             <td>" .
                    $linhas->getDs_local(). "
                            </td>
                        </tr>";
        $somaQuantEqui= 0;
        $somaValorEqui= 0;
        $somaQuantPessoa= 0;
        $somaValorPessoa= 0;
        $idEquipamento = $linhas->getId_equipamento();
        $somaQuantEqui += $linhas->getQt_abastecimento();;
        $somaValorEqui += $linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento();;
        $somaQuantPessoa += $linhas->getQt_abastecimento();
        $somaValorPessoa += $linhas->getVl_preco_combustivel()*$linhas->getQt_abastecimento();
        $idFornecedor = $linhas->getId_pessoa();
        $idEquipamento = $linhas->getId_equipamento();
    }
    
}

$html .= "<tr>
                            <td colspan=6 align='right'><b>Total Abastecimento:<br>Total Valor: </b></td>
                            <td  align='left'><b> Lts " . number_format($somaQuantEqui, "2", ",", ".") . "<br> R$. " . 
                                                     number_format($somaValorEqui, "2", ",", ".") . "</b></td>
                 </tr>
            </table>
            <hr>
            <div class='esquerda'><b>". utf8_decode("Total Proprietário: </b></div><div class='esquerda'><b>") . number_format($somaQuantPessoa, "2", ",", ".")  . "Lts</b> </div><div class='esquerda'><b>R$ " . number_format($somaValorPessoa, "2", ",", ".") . "</b></div>
            <br>
            <hr>
            <div align='center'><br><br>
                <hr>
                    ".utf8_decode("Relatório gerado em " ) . $dia . " de " . utf8_decode($meses[$mes]) . " de " . $ano . ".   
                <hr>
            </div>
           </body>
    </html>";
$html = utf8_encode($html);
$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->debug = false;
$output = $mpdf->Output();
exit();

//função para gerar a tabela
function pdf() {
    $pdo = conectar2();
}
