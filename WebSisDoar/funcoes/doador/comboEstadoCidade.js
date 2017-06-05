function listar_cidades(){

  var estado = $('#idestado').val();
  if(estado){
    var url = '../../funcoes/doador/comboEstadoCidade.php?estado='+estado;
    $.get(url, function(dataReturn){
      $('#cidade').html(dataReturn);
    });
  }
  
}
