function login(){
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../php/login.php",
        data: {
            usuario: $("#usuario").val(),
            senha: $("#senha").val()
        },
        success: function(retorno){
            if(retorno.mensagem == 1){
                location.href="../html/CaixaDeEntrada.html";
            }else{
                alert("Usuário não cadastrado");
            }
        }
    })

}