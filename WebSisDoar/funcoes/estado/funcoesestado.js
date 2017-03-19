$(document).ready(function () {
    // FUNCAO CHAMAR MODAL ADD
    $('#addContato').click(function () {
        $('#modalContato').modal('show');
    });

    $('#salvar').click(function () {
        var id = $("#id").val();
        var nome = $("#nome").val();
        var email = $("#email").val();
        var dataString = {id: id, nome: nome, email: email};
        $.ajax({
            type: "POST",
            url: "salvarcontatos.php",
            data: dataString,
            cache: false,
            success: function (retorno) {
                if (retorno == true) {
                    listaContatos();
                    $('#modalContato').modal('hide');
                } else {
                    alert("Ocorreu um erro ao salvar o registro.");
                }
            }
        });
    });

    $('a#editar').livequery("click", function () {
        var id = $(this).attr('rel');
        var dataString = {id: id};
        $.ajax({
            type: "POST",
            url: "buscarcontato.php",
            data: dataString,
            cache: false,
            success: function (retorno) {
                retorno = JSON.parse(retorno);
                console.log(retorno);
                $("#id").val(retorno.id);
                $("#nome").val(retorno.nome);
                $("#email").val(retorno.email);
                $('#modalContato').modal('show');
            }
        });
        return false;
    });

    $('a#detalhes').livequery("click", function () {
        var id = $(this).attr('rel');
        var dataString = {id: id};
        $.ajax({
            type: "POST",
            url: "buscarcontato.php",
            data: dataString,
            cache: false,
            success: function (retorno) {
                retorno = JSON.parse(retorno);
                $('#det').html('<label for="id">ID: </label>' + retorno.id + '<br><label for="nome">Nome: </label>' + retorno.nome + '<br><label for="email">Email: </label>' + retorno.email);
                $('#modalDetalhes').modal('show');
            }
        });
        return false;
    });

    $('a#excluir').livequery("click", function () {
        var id = $(this).attr('rel');
        var dataString = {id: id};
        $.ajax({
            type: "POST",
            url: "excluircontato.php",
            data: dataString,
            cache: false,
            success: function (retorno) {
                if (retorno == true) {
                    listaContatos();
                } else {
                    alert("Ocorreu um erro ao excluir o registro.");
                }
            }
        });
        return false;
    });

    function listaEstados() {
        $.ajax({
            type: "POST",
            url: "listaestados.php",
            cache: false,
            success: function (retorno) {
                $("#listaestados").html(retorno);
            }
        });
    }



    listaEstados();

});


