<?php
include_once '../../config/conexao.php';
$estado = $_GET['estado'];
$sql=("SELECT * FROM cidade WHERE estado_idestado = $estado");
$sql = $con->query($sql);
echo "<option value=''>escolha uma cidade</option>";
foreach ($sql as $row) {
echo "<option value='" . $row['idcidade'] . "'>" . ($row['descricao']) . "</option>";
}
?>
