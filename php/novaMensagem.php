<?php

$para = trim($_POST['para']);
$Cc = trim($_POST['Cc']);
$assunto = trim($_POST['assunto']);
$texto = trim($_POST['texto']);


$xml = new DOMDocument("1.0");

$xml->preserveWhiteSpace = false;

$xml->formatOutput = true;

$root = $xml->createElement("email");

$para = $xml->createElement("para", "$para");
$Cc = $xml->createElement("Cc", "$Cc");
$assunto = $xml->createElement("assunto", "$assunto");
$texto = $xml->createElement("texto", "$texto");

$root->appendChild($para);
$root->appendChild($Cc);
$root->appendChild($assunto);
$root->appendChild($texto);

$xml->appendChild($root);

$xml->save("xml/email.xml");



$retorno["mensagem"] = 1;
