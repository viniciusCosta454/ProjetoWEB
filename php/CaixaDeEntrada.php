<?php

$xml_string1 = file_get_contents("xml/email01.xml");

$xml_objeto1 = simplexml_load_string($xml_string1);

$retorno["enviador1"] = trim($xml_objeto1->enviador);
$retorno["assunto1"] = trim($xml_objeto1->assunto);
$retorno["resumo1"] = trim($xml_objeto1->resumo);

$xml_string = file_get_contents("xml/email02.xml");

$xml_objeto = simplexml_load_string($xml_string);

$retorno["enviador"] = trim($xml_objeto->enviador);
$retorno["assunto"] = trim($xml_objeto->assunto);
$retorno["resumo"] = trim($xml_objeto->resumo);

$xml_string = file_get_contents("xml/email03.xml");

$xml_objeto = simplexml_load_string($xml_string);

$retorno["enviador2"] = trim($xml_objeto->enviador);
$retorno["assunto2"] = trim($xml_objeto->assunto);
$retorno["resumo2"] = trim($xml_objeto->resumo);

$xml_string = file_get_contents("xml/email04.xml");

$xml_objeto = simplexml_load_string($xml_string);

$retorno["enviador3"] = trim($xml_objeto->enviador);
$retorno["assunto3"] = trim($xml_objeto->assunto);
$retorno["resumo3"] = trim($xml_objeto->resumo);

$xml_string = file_get_contents("xml/email05.xml");

$xml_objeto = simplexml_load_string($xml_string);

$retorno["enviador4"] = trim($xml_objeto->enviador);
$retorno["assunto4"] = trim($xml_objeto->assunto);
$retorno["resumo4"] = trim($xml_objeto->resumo);

echo json_encode($retorno);
