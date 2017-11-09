<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="../../assets/js/jquery.js" type="text/javascript"></script>
        <style type="text/css">
            #pai div{
                display: none;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                
                $('#select').on('change', function () {
                    
                    var selectValor = '#'+ $(this).val();
                    alert(selectValor);
                    $('#pai').children('div').hide();
                    $('#pai').children(selectValor).show();
                    
                    
                });
                
            });
        </script>

    </head>
    <body>
        <select id='select' name="select">
            <option value="">Escolha</option>
            <option value="div1">Div 1</option>
            <option value="div2">Div 2</option>
            <option value="div3">Div 3</option>
        </select>

        <div id="pai">
            <div id="div1">
                qualquer texto
            </div>
            <div id="div2">
                <img src="../../images/small/img001_small.jpg" alt=""/>
            </div>
            <div id="div3">
                <label>responda: </label>
                <input type="text"/>
            </div>
        </div>
    </body>
</html>
