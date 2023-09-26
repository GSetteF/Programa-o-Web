<?php

include_once("topo.php");
include_once("menu.php");

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$assunto = $_REQUEST['assunto'];
$mensagem = $_REQUEST['mensagem'];

$arquivo = fopen("mensagem.txt","a");

fwrite($arquivo,"Nome:");
fwrite($arquivo,$nome);
fwrite($arquivo,"\n");
fwrite($arquivo,"Email:");
fwrite($arquivo,$email);
fwrite($arquivo,"\n");
fwrite($arquivo,"Assunto:");
fwrite($arquivo,$assunto);
fwrite($arquivo,"\n");
fwrite($arquivo,"Mensagem:");
fwrite($arquivo,$mensagem);
fwrite($arquivo,"\n");
fwrite($arquivo,"\n");

fclose($arquivo);

include("faleconosco.php");
include_once("rodape.php");
?>