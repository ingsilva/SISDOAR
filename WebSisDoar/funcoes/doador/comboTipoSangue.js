function listar_tipo(){

  var tipo_sangue = $('#idtipo_sangue').val();
  if(tipo_sangue){
    var url = '../../funcoes/doador/comboTipoSangue.php?tipo_sangue='+tipo_sangue;
    $.get(url, function(dataReturn){
      $('#fator_rh').html(dataReturn);
    });
  }
  
}
