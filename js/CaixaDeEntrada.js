$.ajax({
    type: "POST",
    dataType: "json",
    url: "../php/CaixaDeEntrada.php",
    success: function (retorno) {

        var conteudo = "";
        var pri = "pri"
        var seg = "seg"
        var ter ="ter"
        conteudo += "<li>";
        conteudo += "<a class=" + pri + " href=# >" + retorno.enviador1 + "</a>";
        conteudo += "<a class=" + seg + " href=# >" + retorno.assunto1 + "</a>";
        conteudo += "<a class=" + ter +" href=# >" + retorno.resumo1 + "</a>";
        conteudo += "</li>";
        conteudo += "<li>";
        conteudo += "<a class=" + pri + " href=# >" + retorno.enviador + "</a>";
        conteudo += "<a class=" + seg + " href=# >" + retorno.assunto + "</a>";
        conteudo += "<a class=" + ter +" href=# >" + retorno.resumo + "</a>";
        conteudo += "</li>";

        $("#ListaEntrada").html(conteudo);

    }
})