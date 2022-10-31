<?php
require_once 'buscarAdmin.php';
$obj = new IngresarHome();
$id = $_POST['id'];

$result = $obj->deleteAlumnos($id);

if($result == true){
    echo("Se elmino el registro");
}else{
    echo("No se pudo eliminar");
}
?>