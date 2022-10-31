<?php
require_once ("./Grupos.php");
$clave = $_POST['clave'];
$descripcion = $_POST['desc'];
$obj = new Grupos();

$result = $obj->insertarGrupos($clave, $descripcion);

if ($result == "true") {
    echo("Se registro Correctamente");
}else{
    echo("No se pudo registar");
}

?>