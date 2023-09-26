<?php
include_once("topo.php");
include_once("menu.php");
$musica = $_REQUEST['musica'];

$arquivo = fopen("musicas.txt","a");

if (isset($musica) && $musica != ""){ #verifica se foi adicionado algum texto/musica
    fwrite($arquivo,$musica);
    fwrite($arquivo,"\n");
}

fclose($arquivo);

include("Minhas_musicas.php");
include_once("rodape.php");
?>
