<?php
  
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $ddd = $_POST["ddd"];
    $celular = $_POST["celular"];
    $iddpto = $_POST["dpto"];
  
    include_once 'conexao.php';    
      
    $sql = "update agenda set 
            nome = '".$nome."', ddd = '".$ddd."', celular = '".$celular.", iddpto = ".$iddpto."'
            where idagenda = ".$id;
  
    if(mysql_query($sql,$con)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysql_close($con);    
      
    ?>