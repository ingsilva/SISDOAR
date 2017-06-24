/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("body").on("click", ".sair", function () {

//        $.ajax({
//            "url": "/SISDOAR/WebSisDoar/funcoes/usuario/logout.php",
//            "dataType": "html",
//            "data": {
//                "acao": "sair"
//            },
//            "success": function(){
                top.location = "/SISDOAR/WebSisDoar/funcoes/usuario/logout.php";
               // top.location = "/SISDOAR/WebSisDoar/";
//            }
//
//        });
    });
});


