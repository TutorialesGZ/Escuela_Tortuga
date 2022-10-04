<?php
require_once ("./Grupos.php");

$obj = new Grupos();
$imprimir = $obj->getGrupos();
//print_r($imprimir);
$json = json_encode($imprimir);
print_r($json);
?>