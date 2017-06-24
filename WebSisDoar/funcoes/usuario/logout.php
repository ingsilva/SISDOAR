<?php
session_start();
if (!isset($_REQUEST['conectado']) == TRUE){
    session_destroy();
    //echo"<script language='javaScript'>alert('Você precisa fazer Login')</script>";
    echo"<script language='javaScript'>window.location.href='/SISDOAR/WebSisDoar/'</script>";
}
