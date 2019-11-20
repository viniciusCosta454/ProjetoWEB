<?php

$var = file_get_contents("xml/login.xml");

$var_Objeto = simplexml_load_string($var);

$usuario = trim($_POST["usuario"]);
$senha = trim($_POST["senha"]);

$usuarioInput = trim($var_Objeto->usuario);
$senhaInput = trim($var_Objeto->senha);

if($usuario == $usuarioInput && $senha == $senhaInput){
    $retorno["mensagem"] = 1;
}else{
    $retorno["memsagem"] = 0;
}

echo json_encode($retorno);