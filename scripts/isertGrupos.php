<?php
require_once ("./Grupos.php");
$clave = $_POST['clave'];
$descripcion = $_POST['desc'];
$tutor = $_POST['tutor'];
$obj = new Grupos();

$result = $obj->insertarGrupos($clave, $descripcion, $tutor);

if ($result == "true") {
    echo("Se registro Correctamente");
}else{
    echo("No se pudo registar");
}

?>