<?php

$xml_string1 = file_get_contents("xml/email.xml");

$xml_objeto1 = simplexml_load_string($xml_string1);

$retorno["enviador1"] = trim($xml_objeto1->para);
$retorno["assunto1"] = trim($xml_objeto1->assunto);
$retorno["resumo1"] = trim($xml_objeto1->texto);


echo json_encode($retorno);
