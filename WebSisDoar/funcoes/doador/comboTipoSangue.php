<?php
include_once '../../config/conexao.php';
$tipo_sangue = $_GET['tipo_sangue'];
$sql=("SELECT * FROM fator_rh WHERE tipo_sangue_idtipo_sangue = $tipo_sangue");
$sql = $con->query($sql);
echo "<option value=''>Escolha seu tipo Sanguineo</option>";
foreach ($sql as $row) {
echo "<option value='" . $row['idfator_rh'] . "'>" . utf8_encode($row['descricao']) . "</option>";
}
?>
