$(document).ready(function () {
//chamar a função return Fornecedor**************************
    function returnAno() {

        $.ajax({
            "url": "/sisterra/_request/abastecimento.php",
            "dataType": "html",
            "data": {
                "acao": "returnAno"
            },
            "success": function (response) {
                $("#ano").html(response);
                /*Auto busca no select*/
                $("#ano").select2({
                    theme: "bootstrap",
                    width: " 100%",
                });
            }
        });
    }
    returnAno();
    //chamar a função return Meses**************************
    function returnMeses() {

        $("#mes").append("<option value='0' selected='true'>Mês</option>");
        $("#mes").append("<option value='1'>Janeiro</option>");
        $("#mes").append("<option value='2'>Fevereiro</option>");
        $("#mes").append("<option value='3'>Março</option>");
        $("#mes").append("<option value='4'>Abril</option>");
        $("#mes").append("<option value='5'>Maio</option>");
        $("#mes").append("<option value='6'>Junho</option>");
        $("#mes").append("<option value='7'>Julho</option>");
        $("#mes").append("<option value='8'>Agosto</option>");
        $("#mes").append("<option value='9'>Setembro</option>");
        $("#mes").append("<option value='10'>Outubro</option>");
        $("#mes").append("<option value='11'>Novembro</option>");
        $("#mes").append("<option value='12'>Dezembro</option>");
        /*Auto busca no select*/
        $("#mes").select2({
            theme: "bootstrap",
            width: " 100%",
        });
        $("#mes").val(0).change();
    }

    returnMeses();
    //chamar a função return Fornecedor**************************
    function returnFornecedor() {
        var id_pessoa = $("#id_pessoa").val();
        $.ajax({
            "url": "/sisterra/_request/pessoa.php",
            "dataType": "html",
            "data": {
                "acao": "returnPessoaCombo",
                "id_pessoa": id_pessoa
            },
            "success": function (response) {
                $("#id_pessoa").html(response);
                /*Auto busca no select*/
                $("#id_pessoa").select2({
                    theme: "bootstrap",
                    width: " 100%",
                });
                $("#id_pessoa").val(id_pessoa).change();
            }
        });
    }
    returnFornecedor();
    //chamar a função return Condição**************************
    function returnTipoBem() {
        var id_tipo = $("#id_tipo").val();
        $.ajax({
            "url": "/sisterra/_request/tipoBem.php",
            "dataType": "html",
            "data": {
                "acao": "returnTipoBemCombo",
                "id_tipo": id_tipo
            },
            "success": function (response) {
                $("#id_tipo").html(response);
                /*Auto busca no select*/
                $("#id_tipo").select2({
                    theme: "bootstrap",
                    width: " 100%",
                });
                $("#id_tipo").val(id_tipo).change();
            }
        });
    }
    returnTipoBem();
    //*********************************************************************************************************
//    $("body").on("click", ".pesquisar", function () {
//        var ano = $("#ano").val();
//        var mes = $("#mes").val();
//        var id_pessoa = $("#id_pessoa").val();
//        var id_tipo = $("#id_tipo").val();
//        if(ano==0 && mes==0 && id_pessoa==0 && id_tipo==0){
//            alert("É necessário informar no mínimo um filtro para a pesquisa");
//            return false;
//        }
//        $.ajax({
//            "url": "/sisterra/_request/abastecimento.php",
//            "dataType": "html",
//            "data": {
//                "acao": "pesquisaRelatorio",
//                "ano": ano,
//                "mes": mes,
//                "id_pessoa": id_pessoa,
//                "id_tipo": id_tipo,
//                "pdf": 0
//            },
//            "success": function (response) {
//                 var oTable = $('#tabela').dataTable();
//                oTable.fnDestroy();
//                $("#corpo").html(response);
//                $("#tabela").DataTable({
//                    dom: 'Bfrtip',
//                    lengthMenu: [
//                        [10, 25, 50, -1],
//                        ['10', '25', '50', 'Todos']
//                    ],
//                    buttons: [
//                        {
//                            extend: 'pageLength',
//                            //        text:''
//                        },
//                        {
//                            extend: 'excelHtml5',
//                            text: '<i class="fa fa-file-excel-o"></i> Excel'
//                        },
//                        {
//                            extend: 'pdfHtml5',
//                            text: '<i class="fa fa-file-pdf-o"></i> PDF',
//                            pageSize: 'LEGAL',
//                            exportOptions: {
//                                columns: [0, 1, 2, 3, 4]
//                            }
//                        },
//                        {
//                            extend: 'print',
//                            text: '<i class="fa fa-print"></i> Imprimir',
//                          //  orientation: 'landscape',
//                            pageSize: 'LEGAL'
//                        },
//                    ],
//                    "order": [[0, "asc"]],
//                    // "lengthMenu": [[10, 25, 50, 10, -1], [10, 25, 50, 100, "Todos"]],
//                    "language": {
//                        paginate: {
//                            first: "Primeiro",
//                            previous: "Anterior",
//                            next: "Proximo",
//                            last: "Último"
//                        },
//                        "sEmptyTable": "Nenhum registro encontrado",
//                        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
//                        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
//                        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
//                        "sInfoPostFix": "",
//                        "sInfoThousands": ".",
//                        "sLengthMenu": "Buscar _MENU_ por página",
//                        "sLoadingRecords": "Carregando...",
//                        "sProcessing": "Processando...",
//                        "sZeroRecords": "Nenhum registro encontrado",
//                        "sSearch": "Pesquisar",
//                        "oAria": {
//                            "sSortAscending": ": Ordenar colunas de forma ascendente",
//                            "sSortDescending": ": Ordenar colunas de forma descendente"
//                        }
//                    }
//
//                });
//
//            }
//        });
//
//        //top.location = "/sisterra/web/abastecimento/editarAbastecimento.php?id_abastecimento=" + id_abastecimento;
//    });
    //*********************************************************************************************************
    $("body").on("click", ".imprimir", function () {
        var ano = $("#ano").val();
        var mes = $("#mes").val();
        var id_pessoa = $("#id_pessoa").val();
        var id_tipo = $("#id_tipo").val();
        if(ano==0 && mes==0 && id_pessoa==0 && id_tipo==0){
            alert("É necessário informar no mínimo um filtro para imprimir");
            return false;
        }else{
            window.open("/sisterra/web/abastecimento/relatorioAbastecimentoPdf.php?ano=" + ano+"&mes="+mes+"&id_pessoa="+id_pessoa+"&id_tipo="+id_tipo,"_blank");
            //window.open("/sisterra/web/abastecimento/relatorioTestePdf.php?ano=" + ano+"&mes="+mes+"&id_pessoa="+id_pessoa+"&id_tipo="+id_tipo,"_blank");
        }
        
    });

    $("#tabela").DataTable({
        //dom: 'Bfrtip',
        "order": [[0, "asc"]],
        "lengthMenu": [[10, 25, 50, 10, -1], [10, 25, 50, 100, "Todos"]],
        
        "language": {
            paginate: {
                first: "Primeiro",
                previous: "Anterior",
                next: "Proximo",
                last: "Último"
            },
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "Buscar _MENU_ por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });

});
