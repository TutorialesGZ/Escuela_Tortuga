<?php
//print_r($_POST);

if(!isset($_POST['codigo'])){
    header('Location: index.php?mensaje=error');
}

include_once 'model/conexion.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$grupo = $_POST["grupo"];
$idDocente = $_POST["idDocente"];


$sentencia = $bd->prepare("UPDATE materias SET nombre = ?, grupo = ?, claveDocente = ? where id = ?;");
$resultado = $sentencia->execute([$id, $nombre, $grupo, $idDocente]);
print_r($resultado);
if ($resultado === TRUE) {
    header('Location: index.php?mensaje=editado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}

?>