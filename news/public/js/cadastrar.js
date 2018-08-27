//ControladorIndex

$(document).ready(function() {
    // let combo = $("#categoriaNoticia");
    // combo.empty();
    // combo.append('<option selected="true" disabled>Escolha uma categoria </option> ');
    // combo.prop('selectedIndex', 0);
    // getJSON("app/controller/controller.php", function(data){
    //     $each(data, function(codigo, lista){
    //         combo.append($('<option></option>').attr('value', lista.codigo).text(lista.descricao))
    //
    //     })
    //
    // });


    $.post('../../app/controller/GerenciarControlador.php', function(listaCategorias){
        $("#nomeAutor").val(listaCategorias['descricao']);

    });

    $('#formCadastrarNoticia').submit(function (event) {
        $.post("app/controller/controller.php",
            {
                identifier: '1',
                nomeAutor:$('#nomeAutor').val(),
                emailAutor:$('#emailAutor').val(),
                descricaoNoticia:$('#descricaoNoticia').val(),
            },
            function (data) {
                alert(data);
            });

    });
});