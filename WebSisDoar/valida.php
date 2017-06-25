<?php

  // session_start();
//    var_dump($_SESSION['conectado']);
// return FALSE;
//   
    if (!isset($_SESSION['conectado']) == true){
        session_destroy();
        echo"<script language='javaScript'>alert('Você precisa fazer Login')</script>";
        echo"<script language='javaScript'>window.location.href='/SISDOAR/WebSisDoar/'</script>";
}

