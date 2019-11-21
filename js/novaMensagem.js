$("#enviar").click(function () {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../php/novaMensagem.php",
        data: {
            para: $("#para").val(),
            Cc: $("#Cc").val(),
            assunto: $("#assunto").val(),
            texto: $("#texto").val()
        },
        success: function (retorno) {
            if(retorno.mensagem == 1){
                location.href="../html/novaMensagem.html";
            }
        }
    })

})
